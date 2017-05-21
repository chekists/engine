<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
	<meta charset="utf-8" />
	<title>{$title}</title>
	<link href="css/style.css" rel="stylesheet" />
	<link href='js/ui/jquery-ui.min.css' rel='stylesheet' />
	<script src="js/modernizr-custom.js"></script>
	<script src="js/jquery-1.12.1.min.js"></script>
	<script src="js/index.js"></script>
	<script src='js/ui/jquery-ui.min.js'></script>
	<script src="/hvr/jscripts/tiny_mce.js"></script>
	<script src="/hvr/jscripts/plugins/tinybrowser/tb_tinymce.js.php"></script>
	<script>
	tinyMCE.init({
		// General options
		mode : "exact",
	 	elements : "elm_1, elm_2, elm_3, elm_4, elm_5, elm_6",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,advhr,advimage,advlink,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups",

		// Theme options
		theme_advanced_buttons1 : "fullscreen,|,preview,|,code,|,cleanup,|,cut,copy,paste,pastetext,pasteword,|,search,replace,|,undo,redo,|,link,unlink,anchor,image,media",
		theme_advanced_buttons2 : "removeformat,formatselect,fontselect,fontsizeselect,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,outdent,indent,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,advhr,|,charmap,|,sub,sup,|,nonbreaking",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		//theme_advanced_resizing_min_width: 500,
		theme_advanced_resizing_max_width: 727,
		theme_advanced_font_sizes : "10px,11px,12px,14px,16px,18px,20px,24px,28px,32px,36px",
		language : "ru",
		convert_urls : false,
		verify_html : false,
		file_browser_callback : "tinyBrowser"
	});
	</script>
</head>
<body>
	<header class="header">
		<p class="logo"><span class="logo_color1">NO</span><span class="logo_color2">STUDIO</span></p>
		<p class="name"></p>
	</header>
	<main class="main">
		<div class="main">
			<nav class="left__nav">
				<ul class="left__ul">
				{left_menu}
					<li class="left__li"><a href="" class="left__a">Жара</a></li>
				{/left_menu}	
				</ul>
			</nav>
		</div>
		<div class="right">
			{include $tpl=content}
		</div>
	</main>
	<footer class="footer">
		
	</footer>
</body>
</html>