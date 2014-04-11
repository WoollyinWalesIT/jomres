<?php
// no direct access
defined('_JOMRES_INITCHECK') or die;
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<?php
	//unregister all wp scripts and styles
	/*foreach ($this->_scripts as $k=>$v)
		{
		if (strpos($k, '/jomres/') === false && strpos($k,'googleapis') === false)
			unset($this->_scripts[$k]);
		}*/
	
	//find the jomres template set to be used
	if ( !using_bootstrap() )
		{
		$view = "jquery_ui";
		}
	else
		{
		if (jomres_bootstrap_version() == "2")
			{
			$view = "bootstrap";
			}
		elseif (!jomres_cmsspecific_areweinadminarea())
			{
			$view = "bootstrap3";
			}
		else
			$view = "bootstrap";
		}
	?>
	<script src="jomres/javascript/jquery-1.8.2.min.js"></script>
	<script src="jomres/javascript/jquery-ui-1.9.2.custom.min.js"></script>
	<?php if ($view == "bootstrap") : ?>
	<script src="jomres/libraries/fullscreen_view/bootstrap/js/bootstrap.min.js"></script>
	<?php elseif ($view == "bootstrap3") : ?>
	<script src="jomres/libraries/fullscreen_view/bootstrap3/dist/js/bootstrap.min.js"></script>
	<?php endif; ?>
	<script type="text/javascript">
	  jQuery.noConflict();
	</script>
	<?php
	global $wp_scripts;
	
	$wp_scripts->registered = array();
	$wp_scripts->queue = array();
	
	wp_head();
	?>
	<?php if ($view == "bootstrap") : ?>
	<link rel="stylesheet" href="jomres/libraries/fullscreen_view/bootstrap/css/fullscreen.css" type="text/css" />
	<?php elseif ($view == "bootstrap3") : ?>
	<link rel="stylesheet" href="jomres/css/jquery_ui_themes/jomres/jquery-ui.css" type="text/css" />
	<link rel="stylesheet" href="jomres/libraries/fullscreen_view/bootstrap3/dist/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="jomres/libraries/fullscreen_view/bootstrap3/dist/css/bootstrap-theme.min.css" type="text/css" />
	<?php elseif ($view == "jquery_ui") : ?>
	<link rel="stylesheet" href="jomres/css/jquery_ui_themes/jomres/jquery-ui.css" type="text/css" />
	<?php endif; ?>
</head>
<body class="contentpane">
	<?php echo the_content(); ?>
</body>
</html>