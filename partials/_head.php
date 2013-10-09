<?php if (!defined('CMS')) exit; ?>
<?php echo $this->doctypeDeclaration(); ?>
<!--
	Verti 2.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html<?php echo $this->htmlAttributes(); ?>>
<head>
<?php 
$site->addCss('http://fonts.googleapis.com/css?family=Open+Sans:300,800'); 
$site->addCss('http://fonts.googleapis.com/css?family=Oleo+Script:400');
$site->addCss(BASE_URL.THEME_DIR.THEME.'/css/skel-noscript.css');
$site->addCss(BASE_URL.THEME_DIR.THEME.'/theme.css');
$site->addCss(BASE_URL.LIBRARY_DIR.'js/colorbox/themes/'.intval($this->getThemeOption('lightboxStyle')).'/colorbox.css');
echo $site->generateHead(); 

?></head>
<body class="body">