<?php
// no direct access
defined('_JEXEC') or die;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	foreach ($this->_scripts as $k=>$v)
		{
		if (strpos($k, '/'.JOMRES_ROOT_DIRECTORY.'/') === false && strpos($k,'maps-api-ssl') === false)
			unset($this->_scripts[$k]);
		}
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
	<script src="<?php echo JOMRES_ROOT_DIRECTORY ?>/javascript/jquery-1.11.1.js"></script>
	<script src="<?php echo JOMRES_ROOT_DIRECTORY ?>/javascript/jquery-migrate.js"></script>
	<script src="<?php echo JOMRES_ROOT_DIRECTORY ?>/javascript/jquery-ui-1.9.2.custom.js"></script>
	<?php if ($view == "bootstrap") : ?>
	<script src="<?php echo JOMRES_ROOT_DIRECTORY ?>/libraries/fullscreen_view/bootstrap/js/bootstrap.min.js"></script>
	<?php elseif ($view == "bootstrap3") : ?>
	<script src="<?php echo JOMRES_ROOT_DIRECTORY ?>/libraries/fullscreen_view/bootstrap3/js/bootstrap.min.js"></script>
	<?php endif; ?>
	<script type="text/javascript">
	  jQuery.noConflict();
	  var addon_animations_enable = false;
	</script>
	<jdoc:include type="head" />
	<?php if ($view == "bootstrap") : ?>
	<link rel="stylesheet" href="<?php echo JOMRES_ROOT_DIRECTORY ?>/libraries/fullscreen_view/bootstrap/css/fullscreen.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo JOMRES_ROOT_DIRECTORY ?>/css/font-awesome.min.css" type="text/css" />
	<?php elseif ($view == "bootstrap3") : ?>
	<link rel="stylesheet" href="<?php echo JOMRES_ROOT_DIRECTORY ?>/css/jquery_ui_themes/jomres/jquery-ui.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo JOMRES_ROOT_DIRECTORY ?>/libraries/fullscreen_view/bootstrap3/css/fullscreen.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo JOMRES_ROOT_DIRECTORY ?>/css/font-awesome.min.css" type="text/css" />
	<?php elseif ($view == "jquery_ui") : ?>
	<link rel="stylesheet" href="<?php echo JOMRES_ROOT_DIRECTORY ?>/css/jquery_ui_themes/jomres/jquery-ui.css" type="text/css" />
	<?php endif; ?>
</head>
<body class="contentpane">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>
</html>