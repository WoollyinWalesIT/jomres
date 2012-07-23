<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


defined( '_JOMRES_INITCHECK' ) or die( '' );
defined( '_JOMRES_INITCHECK_ADMIN' ) or die( 'Admin Access to this file is not allowed.' );

ob_start("removeBOM");
@ini_set("memory_limit","128M");
@ini_set("max_execution_time","480");
@ini_set("display_errors",1);
//error_reporting(E_ALL);
@ini_set('error_reporting', E_ERROR | E_WARNING | E_PARSE);

require_once(dirname(__FILE__).'/integration.php');
$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig=$siteConfig->get();

$MiniComponents->triggerEvent('00003');

$tmpBookingHandler =jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
$tmpBookingHandler->initBookingSession(get_showtime('jomressession'));
$jomressession  = $tmpBookingHandler->getJomressession();

$showSearchOptions=true;
$jomreslang =jomres_singleton_abstract::getInstance('jomres_language');
$jomreslang->get_language();
$customTextObj =jomres_singleton_abstract::getInstance('custom_text');

if (!defined('JOMRES_IMAGELOCATION_ABSPATH'))
	{
	define('JOMRES_IMAGELOCATION_ABSPATH',JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'uploadedimages'.JRDS);
	define('JOMRES_IMAGELOCATION_RELPATH',get_showtime('live_site').'/jomres/uploadedimages/');
	}
$task = jomresGetParam( $_REQUEST, 'task', "" );
$task = str_replace("&#60;x&#62;","",$task);
set_showtime('task',$task);

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'jomresxml.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'siteconfig.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'propertyfeatures.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'roomtypes.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'propertytypes.functions.php');
require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'functions'.JRDS.'profiles.functions.php');

require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'admin'.JRDS.'admin.jomres.html.php');

$nohtml	= jomresGetParam( $_REQUEST, 'no_html',0 );

if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins') && $nohtml == 0)
	{
	emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins');
	rmdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins');
	if (is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins') )
		echo '<font color="red" face="arial" size="1">Warning: directory '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'plugins still exists. Please delete it.</font><br/>';
	emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'cache'.JRDS);
	}
	
if ($jrConfig['useSubscriptions']=="1" && $nohtml == "0")
	{
	$packages=subscriptions_packages_getallpackages();
	if (count($packages)==0)
		{
		echo '<font color="red" face="arial" size="1">Warning: You have enabled subscription handling, but not yet created any subscription packages therefore only Super Property Managers will be able to create propertys on your server.</font><br/>';
		}
	}

$jomreslang =jomres_singleton_abstract::getInstance('jomres_language');
$jomreslang->get_language($propertytype);
$customTextObj =jomres_singleton_abstract::getInstance('custom_text');

$MiniComponents->triggerEvent('00005');

jr_import('jomres_obsolete_file_handling');
$obsolete_files = new jomres_obsolete_file_handling();
$obsolete_files->set_default_obs_files_array();
$obsolete_files->add_obs_file(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS.'jomres_webinstall.php');
if (jomresGetDomain() != "localhost")
	$obsolete_files->add_obs_file(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'install_jomres.php');

if ($obsolete_files->ready_to_go() )
	{
	$obsolete_files->remove_obs_files();
	$obsolete_files->output_file_deletion_warning();
	}

if (!AJAXCALL)
	{
	if (!using_bootstrap())
		{
		?>
		<table border="0" width="100%" class="ui-widget-content ui-corner-all">
			<tr valign="middle">
				<td align="left" width="50%">
					<a href="http://www.jomres.net" target="_blank"><img src="<?php echo get_showtime('live_site'); ?>/jomres/images/jrlogo.png" border="0" alt="Jomres logo"/></a>
				</td>
				<td align="right">
					<?php
						if (isset($_REQUEST['tmpl']) ) { ?>
						<div><a href="<?php echo get_showtime('live_site').'/'.JOMRES_ADMINISTRATORDIRECTORY.'/index.php?'.remove_querystring_var("tmpl"); ?>">Default view</a></div>
					<?php } else { ?>
						<div><a href="<?php echo get_showtime('liv_site').$_SERVER['REQUEST_URI']; ?>&tmpl=component">Fullscreen view</a></div>
					<?php } ?>
					<div>&nbsp;</div>
					<?php
					if (_JOMRES_DETECTED_CMS != "joomla25")
						echo '<div>Select Jomres Language '.$jomreslang->get_languageselection_dropdown().'</div>';
					?>
				</td>
			</tr>
		</table>
		<?php
		}
	else
		{
		?>
		<script type="text/javascript">
		/* Shamelessly pinched from JED */
		jomresJquery(document).ready(function(){
			jomresJquery(function () 
				{
				var scrollDiv = document.createElement('div');
				jomresJquery(scrollDiv).attr('id', 'toTop').html('^ <?php echo jr_gettext('BACKTOTOP',BACKTOTOP,false) ?>').appendTo('body');
				jomresJquery(scrollDiv).addClass('alert alert-info');
				jomresJquery(window).scroll(function () 
					{
					console.log(jomresJquery(this).scrollTop());
					if (jomresJquery(this).scrollTop() != 0) 
						{
						jomresJquery('#toTop').fadeIn();
						} 
					else 
						{
						jomresJquery('#toTop').fadeOut();
						}
					});
				jomresJquery('#toTop').click(function () 
					{
					jomresJquery('body,html').animate({
						scrollTop: 0
						},
						800);
					});
				});
				
			jomresJquery(".collapse").collapse();
			});
		</script>
		<style>
		#toTop {
			background: none repeat scroll 0 0 ;
			bottom: 0;
			cursor: pointer;
			display: none;
			font-size: 0.9em;
			padding: 5px;
			position: fixed;
			right: 0;
			text-align: center;
			text-transform: lowercase;
			width: 100px;
			z-index: 10;
		}
		</style>
		<div class="row-fluid">
			<div class="span6">
				<ul class="thumbnails">
					<li class="span4">
						<a href="http://www.jomres.net" target="_blank" class="thumbnail">
							<img src="<?php echo get_showtime('live_site'); ?>/jomres/images/jrlogo.png" border="0" alt="Jomres logo"/>
						</a>
					</li>
				</ul>
	
			</div>
			<div class="span6 push-right">
				<?php
					if (isset($_REQUEST['tmpl']) ) { ?>
						<div><a href="<?php echo get_showtime('live_site').'/'.JOMRES_ADMINISTRATORDIRECTORY.'/index.php?'.remove_querystring_var("tmpl"); ?>">Default view</a></div>
				<?php } else { ?>
					<div><a href="<?php echo get_showtime('liv_site').$_SERVER['REQUEST_URI']; ?>&tmpl=component">Fullscreen view</a></div>
				<?php } ?>
				<div>&nbsp;</div>
				<?php
				if (_JOMRES_DETECTED_CMS != "joomla25" && _JOMRES_DETECTED_CMS != "joomla3")
					echo '<div>Select Jomres Language '.$jomreslang->get_languageselection_dropdown().'</div>';
				?>
			</div>
		</div>
		<?php
		}
	
	init_javascript();
	// And a couple that are only used in the admin area
	?>
	<script language="javascript" type="text/javascript" src="<?php echo get_showtime('live_site'); ?>/jomres/javascript/graphs.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo get_showtime('live_site'); ?>/jomres/javascript/jrportal.js"></script>
	<?php
	}
if (isset($_REQUEST['statoption']))
	{
	$statoption 	= jomresGetParam( $_REQUEST, 'statoption', '');
	SetCookie("statoption", $statoption, time()+60*60);	
	}
	
if (isset($_REQUEST['periodoption']))
	{
	$periodoption 	= jomresGetParam( $_REQUEST, 'periodoption', '');
	SetCookie("periodoption", $periodoption, time()+60*60);
	}

admins_first_run();

if (!AJAXCALL)
	{
	jr_import('cpanel');
	$cpanel=new cpanel();
	$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
	echo $MiniComponents->miniComponentData['10004']['generate_control_panel'];
	if (!using_bootstrap())
		echo '<div style="float:right;width:79%;margin-bottom:20px;">';// Needed otherwise the accordion goes wandering off to the right
	
	}

switch (get_showtime('task')) {
	case "convertCustomTextAll":
		convertCustomTextAll();
		break;
	case "publishPropertyType":
		publishPropertyType();
		break;
	case "deletePropertyType":
		deletePropertyType();
		break;
	case "savePropertyType":
		savePropertyType();
		break;
	case "editPropertyType":
		editPropertyType();
		break;
	case "changeUserHotel":
		changeUserHotel($option);
		break;
	case "changeUserAccessLevel":
		changeUserAccessLevel();
		break;
	case "listMosUsers":
		$MiniComponents->specificEvent('16000','managers_choose');
		break;
	case "editProfile":
		editProfile();
		break;
	case "saveProfile":
		saveProfile();
		break;
	case "grantMosUser":
		grantMosUser($option);
		break;
	case "showSiteConfig":
		showSiteConfig(  );
		break;
	case "saveSiteConfig":
		saveSiteConfig(  );
		break;
	case "publishPfeature":
		publishPfeature();
		break;
	case 'cpanel':
		default:
		if ($MiniComponents->eventSpecificlyExistsCheck('16000',get_showtime('task')) )
			{
			$MiniComponents->specificEvent('16000',get_showtime('task')); // Custom task
			}
		else
			{
			// $version=$mrConfig['version'];
			// HTML_jomres::controlPanel($version);
			$MiniComponents->triggerEvent('10001');
			
			}
		break;
	}
	
if (!AJAXCALL )
	{
	if (!using_bootstrap())
		{
		echo '</div>';
		}
	}
	
$head_contents = '';
$MiniComponents->triggerEvent('16003');
if (is_array($MiniComponents->miniComponentData['16003']))
	{
	foreach ($MiniComponents->miniComponentData['16003'] as $concatenate)
		{
		$head_contents .= $concatenate;
		}
	}

$componentArgs=array();
$MiniComponents->triggerEvent('99999',$componentArgs);
$componentArgs=array();

// For development on Joomla 3, Alpha 1. Bootstrap isn't yet included by Joomla, so we'll do this for now
if (using_bootstrap() && !AJAXCALL )
	{
	echo '
	<link href="//twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
	<link href="//twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-alert.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-button.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-collapse.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-carousel.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-typeahead.js"></script>
	';
	}
	
endrun();

if (defined("JOMRES_RETURNDATA") )
	{
	$contents = ob_get_contents();
	$contents = $head_contents.$contents;
	define("JOMRES_RETURNDATA_CONTENT", $contents ) ;
	unset($contents);
	ob_end_clean();
	}
else
	ob_end_flush();

// Jomres 4.7.8 strips BOM from all areas of the output, not just the beginning.
function removeBOM($str="")
	{
	$bom = pack("CCC",0xef,0xbb,0xbf);
	$str = str_replace($bom,"",$str);
	// if(substr($str, 0,3) == pack("CCC",0xef,0xbb,0xbf))
		// {
		// $str=substr($str, 3);
		// }
	return $str;
	}

function remove_querystring_var($key) { 
  foreach($_GET as $variable => $value){
    if($variable != $key){
       $url .= $variable.'='.$value.'&';
    }
  }
  $url = rtrim($url,'&');
  return $url; 
}