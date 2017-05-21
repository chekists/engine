<?php 
	require_once 'config/config.php';
	require_once 'classes/load.php';
	require_once 'classes/geturl.php';
	require_once 'classes/post.php';
	require_once 'classes/dbmysql.php';
	if ((new GetUrl)->url_mass[1] === 'login') { // если идем логинится
		$post_obj = new Post();
		$post_userName = $post_obj->getPost('name');
		$post_userPassword = $post_obj->getPost('password');
		$config_userName = Config::getUserNameAdmin();
		$config_userPassword = Config::getUserPasswordAdmin();
		//echo "$post_userName == $config_userName ; $post_userPassword == $config_userPassword";exit;
		if ($post_userName===$config_userName && $post_userPassword===$config_userPassword) {
			setcookie('user', $config_userName, time()+86400, '/');
			header('location: /');
		}
		else
		{
			$tpl = new Load('login');
			echo "<h2> вы ввели неверный логин или пароль</h2><br>";
			echo $tpl->load();
			$tpl->clearTplBuffer();
			unset($tpl);
		}
	}
	else // если уже залогинились
	{
		if ($_COOKIE['user'] ==  Config::getUserNameAdmin())
		{
			require_once 'controller/additional.php';
			$tpl_name = ((new GetUrl)->url_mass[1])?(new GetUrl)->url_mass[1]:'index';
			$tpl = new Load($tpl_name);
			if ($tpl_name != 'index') {
				require 'controller/'.$tpl_name.'.php';// подгружает контент
			}
			$additionalGroups_main = new Additional($tpl);

			echo $tpl->load();
			$tpl->clearTplBuffer();
			unset($tpl);
		}
		else
		{
			$tpl = new Load('login');
			echo $tpl->load();
			$tpl->clearTplBuffer();
			unset($tpl);
		}
	}
	

?>