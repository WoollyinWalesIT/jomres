<?php 

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

function jomres_cmsspecific_makeSEF_URL($link)
	{
	jimport('joomla.application.helper');
	if (class_exists('JRoute') )
		{
		$link	=  JRoute::_( $link, $xhtml = true, $ssl );
		}
	}

function jomres_cmsspecific_parseByBots($str)
	{
	$output="";
	if (defined('_JOMRES_NEWJOOMLA') )
		{
		$limitstart = 0;
		$dispatcher	=& JDispatcher::getInstance();
		JPluginHelper::importPlugin('content');
		$obj = new stdClass;
		$obj->text=$str;
		$output = $dispatcher->trigger('onPrepareContent', array (&$obj, & $params, $limitstart));
		$output= $obj->text;
		}
	else
		{
		global $_MAMBOTS;
		$page = 0;
		$_MAMBOTS->loadBotGroup( 'content' );
		$obj = new stdClass;
		$obj->text=$str;
		$params =	new dummy_params_class();
		$_MAMBOTS->trigger( 'onPrepareContent', array( &$obj, &$params, $page ), true );
		$output= $obj->text;
		}
	return $output;
	}
	
function jomres_cmsspecific_setPageTitle($title)
	{
	global $mainframe;
	$mainframe->setPageTitle(stripslashes($title));
	}
	
function jomresSetPageMetatags($metaTag)
	{
	global $mainframe;
	$mainframe->appendMetaTag( 'description', stripslashes($metaTag) );
	}
?>