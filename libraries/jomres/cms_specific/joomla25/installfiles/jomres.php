<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

defined( '_JEXEC' ) or die( 'Direct Access to this location is not allowed.' );

define( '_JOMRES_INITCHECK', 1 );

require_once (dirname(__FILE__).'/../../jomres_root.php');

if (isset($_REQUEST ['layout']))
	{
	$_REQUEST ['task'] = "search";
	$_REQUEST ['calledByModule'] = "mod_jomsearch_m0";
	
	
	switch ( $_REQUEST ['layout'] )
		{
		case 'countries':
			$_REQUEST ['country'] = $_REQUEST ['selected_country'];
			break;
		case 'regions':
			$_REQUEST ['region'] = $_REQUEST ['selected_region'];
			break;
		case 'towns':
			$_REQUEST ['town'] = $_REQUEST ['selected_town'];
			break;
		case 'propertytypes':
			$_REQUEST ['ptype'] = $_REQUEST ['selected_ptype'];
			break;
		default:
			break;
		}
	}

require_once( dirname( __FILE__ ) . '/../../'.JOMRES_ROOT_DIRECTORY.'/jomres.php' );
