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
		if (strpos($k, 'jomres') === false && strpos($k,'googleapis') === false)
			unset($this->_scripts[$k]);
		}
	?>
	<script src="jomres/javascript/jquery-1.8.2.min.js"></script>
	<script src="jomres/javascript/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="jomres/libraries/fullscreen_view/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	  jQuery.noConflict();
	</script>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="jomres/css/jquery_ui_themes/jomres/jquery-ui.css" type="text/css" />
	<link rel="stylesheet" href="jomres/libraries/fullscreen_view/bootstrap/css/fullscreen.css" type="text/css" />
</head>
<body class="contentpane">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>
</html>