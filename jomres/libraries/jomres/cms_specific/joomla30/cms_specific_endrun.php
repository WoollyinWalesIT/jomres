<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

// Joomla 3 insists on adding html even when tmpl = component, so we'll nip that behaviour in the bud, thankyouverymuch
// Cheers Nic (http://www.akeebabackup.com/)

if ( AJAXCALL )
	{
	JFactory::getApplication()->close();
	}
