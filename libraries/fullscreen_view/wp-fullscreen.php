<?php
// no direct access
defined('_JOMRES_INITCHECK') or die;
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|', true, 'right'); ?></title>
	
	<script type="text/javascript">
	var addon_animations_enable = false;
	</script>
	
	<?php
    //find the jomres template set to be used
    if (!using_bootstrap()) {
        $view = 'jquery_ui';
    } else {
        if (jomres_bootstrap_version() == '2') {
            $view = 'bootstrap';
        } elseif (!jomres_cmsspecific_areweinadminarea()) {
            $view = 'bootstrap3';
        } else {
            $view = 'bootstrap';
        }
    }

    wp_enqueue_script('jquery');

    wp_register_script('jquery-ui-dist', '/'.JOMRES_NODE_MODULES_RELPATH.'jquery-ui-dist/jquery-ui.min.js', 'jquery');
    wp_enqueue_script('jquery-ui-dist');

    /*if ($view == "bootstrap")
        {
        wp_register_script('bootstrap.min.js', '/'.JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/bootstrap/js/bootstrap.min.js', 'jquery' );
        wp_enqueue_script('bootstrap.min.js');
        }
    elseif ($view == "bootstrap3")
        {
        wp_register_script('bootstrap.min.js', '/'.JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/bootstrap3/js/bootstrap.min.js', 'jquery' );
        wp_enqueue_script('bootstrap.min.js');
        }*/

    wp_head();
    ?>
	<?php if ($view == 'bootstrap') :
        wp_register_style('fullscreen.css', '/'.JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/bootstrap/css/fullscreen.css');
        wp_enqueue_style('fullscreen.css');
    elseif ($view == 'bootstrap3') :
        wp_register_style('jquery-ui-dist', '/'.JOMRES_NODE_MODULES_RELPATH.'jquery-ui-themes/themes/base/jquery-ui.min.css');
        wp_enqueue_style('jquery-ui-dist');
        wp_register_style('fullscreen.css', '/'.JOMRES_ROOT_DIRECTORY.'/libraries/fullscreen_view/bootstrap3/css/fullscreen.css');
        wp_enqueue_style('fullscreen.css');
    elseif ($view == 'jquery_ui') :
        wp_register_style('jquery-ui-dist', '/'.JOMRES_NODE_MODULES_RELPATH.'jquery-ui-themes/themes/base/jquery-ui.min.css');
        wp_enqueue_style('jquery-ui-dist');
    endif; ?>
	<style type="text/css" media="screen">
	.modal-backdrop {z-index:1030 !important;}
	.appear {opacity:1 !important;}
	</style>
</head>
<body class="contentpane">
	<?php the_content(); ?>
	<?php wp_footer(); // js scripts are inserted using this function?>
</body>
</html>