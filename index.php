<?php 
	include_once 'config/config.php';
	include_once 'classes/load.php';
	include_once 'classes/geturl.php';
	if ((new GetUrl)->url_mass[1] === 'login') {
		
	}
	else
	{
		if ($_COOKIE['user'])
		{

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