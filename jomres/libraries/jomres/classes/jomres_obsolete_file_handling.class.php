<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class jomres_obsolete_file_handling
	{
	function jomres_obsolete_file_handling()
		{
		$this->obs_files = array();
		$this->nohtml	= jomresGetParam( $_REQUEST, 'no_html',0 );
		$this->warnconfirm	= jomresGetParam( $_REQUEST, 'warnconfirm',0 );
		$this->warnmode = true;
		if ($this->warnconfirm ==1)
			$this->warnmode = false;
		$this->dir_root = JOMRESCONFIG_ABSOLUTE_PATH.JRDS;
		$this->dir_jomres = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS;
		$this->dir_minicomponents = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'core-minicomponents'.JRDS;
		$this->dir_classes = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'classes'.JRDS;
		$this->dir_functions = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'functions'.JRDS;
		
		$this->dir_css = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'css'.JRDS;
		$this->dir_javascript = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'javascript'.JRDS;
		
		$this->dir_templates_frontend = JOMRES_TEMPLATEPATH_FRONTEND.JRDS;
		$this->dir_templates_backend =JOMRES_TEMPLATEPATH_BACKEND.JRDS;
		$this->dir_templates_administrator = JOMRES_TEMPLATEPATH_ADMINISTRATOR.JRDS;
		}

	function ready_to_go()
		{
		if ($this->nohtml ==1)
			return false;
		return true;
		}
		
	function set_default_obs_files_array()
		{
		$this->add_obs_file($this->dir_root.'jomres_webinstall.php');
		$this->add_obs_file($this->dir_minicomponents.'j00011manager.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00010reception.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00050mumenu.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00012invoices_link.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00501jscalendar.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000test_unsubscribe.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j03200insertbooking_invoice.class.php');
		
		$this->add_obs_file($this->dir_minicomponents.'j06000sendbug.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000savenote.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000saveCoupon.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000save_normalmode_tariffs.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000preview_email.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000listyourproperties.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000listoldbookings.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000listCoupons.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000list_my_subscriptions.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000list_guests_invoices.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000handlereq_total.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000handlereq_deposit.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000fe_stats.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000editnote.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000editinplace.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000editCoupon.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000delslideshowimages.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000deletenote.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000deleteCoupon.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000amendBooking.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000addnote.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000reportbug.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000my_subscriptions.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000list_property_invoices.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000list_subscription_packages.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000list_usersinvoices.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000muaddtofavourites.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000mulistbookings.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000muviewbooking.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000save_subscriber.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000subscribe.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000view_invoice.class.php');

		$this->add_obs_file($this->dir_minicomponents.'j06000cancelGuestBooking.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06000muviewfavourites.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00501slideshows.class.php');
		


		$this->add_obs_file($this->dir_templates_frontend.'menus.html');
		$this->add_obs_file($this->dir_templates_frontend.'invoices_link.html');
		$this->add_obs_file($this->dir_templates_frontend.'invoices_link.html');
		$this->add_obs_file($this->dir_templates_frontend.'srch.html');
		
		$this->add_obs_file($this->dir_classes.'tempbookinghandler.class.php');
		$this->add_obs_file($this->dir_classes.'user.class.php');
		$this->add_obs_file($this->dir_classes.'toolbar.class.php');
		$this->add_obs_file($this->dir_classes.'taxrates.class.php');
		$this->add_obs_file($this->dir_classes.'subscriptions_packages.class.php');
		$this->add_obs_file($this->dir_classes.'subscriptions.class.php');
		$this->add_obs_file($this->dir_classes.'subscribers.class.php');
		$this->add_obs_file($this->dir_classes.'sms_clickatell_settings.class.php');
		$this->add_obs_file($this->dir_classes.'sms_clickatell_message.class.php');
		$this->add_obs_file($this->dir_classes.'sms_clickatell_handler.class.php');
		$this->add_obs_file($this->dir_classes.'search.class.php');
		$this->add_obs_file($this->dir_classes.'property.class.php');
		$this->add_obs_file($this->dir_classes.'paypal_settings.class.php');
		$this->add_obs_file($this->dir_classes.'pathway.class.php');
		$this->add_obs_file($this->dir_classes.'paging.php');
		$this->add_obs_file($this->dir_classes.'lineitem.class.php');
		$this->add_obs_file($this->dir_classes.'invoice.class.php');
		$this->add_obs_file($this->dir_classes.'jomresXMLParser.class.php');
		$this->add_obs_file($this->dir_classes.'jomres_contentTabs.class.php');
		$this->add_obs_file($this->dir_classes.'general.classes.php');
		$this->add_obs_file($this->dir_classes.'gateway.class.php');
		$this->add_obs_file($this->dir_classes.'dashboard.class.php');
		$this->add_obs_file($this->dir_classes.'currencyformat.class.php');
		$this->add_obs_file($this->dir_classes.'cron.class.php');
		$this->add_obs_file($this->dir_classes.'crate.class.php');
		$this->add_obs_file($this->dir_classes.'configpanel.class.php');
		$this->add_obs_file($this->dir_classes.'booking.class.php');
		$this->add_obs_file($this->dir_classes.'remote.class.php');
		$this->add_obs_file($this->dir_classes.'ehandler.class.php');
		
		$this->add_obs_file($this->dir_functions.'general.functions.php');
		$this->add_obs_file($this->dir_functions.'invoice.functions.php');
		$this->add_obs_file($this->dir_functions.'subscriptions_packages.functions.php');
		$this->add_obs_file($this->dir_functions.'subscribers.functions.php');
		$this->add_obs_file($this->dir_functions.'booking.functions.php');
		$this->add_obs_file($this->dir_functions.'crate.functions.php');
		$this->add_obs_file($this->dir_functions.'property.functions.php');
		$this->add_obs_file($this->dir_functions.'crate.functions.php');
		$this->add_obs_file($this->dir_functions.'user.functions.php');
		
		$this->add_obs_file($this->dir_javascript.'jquery.bt-0-9.js');
		$this->add_obs_file($this->dir_javascript.'jquery.bt-0-9-3.js');

		$this->add_obs_file($this->dir_javascript.'excanvas.js');
		$this->add_obs_file($this->dir_javascript.'excanvas-compressed.js');
		}
	
	function add_obs_file($path_and_file)
		{
		$this->obs_files[]=$path_and_file;
		}
	
	function remove_obs_files()
		{
		$this->success = true;
		$this->number_of_files_require_deletion = 0;
		foreach ($this->obs_files as $path_and_file)
			{
			if (!$this->remove_obs_file($path_and_file))
				{
				$this->number_of_files_require_deletion++;
				$this->success = false;
				}
			}
		jr_import('minicomponent_registry');
		$registry = new minicomponent_registry(true);
		$registry->regenerate_registry();
		}
		
	function remove_obs_file($path_and_file)
		{
		if (file_exists($path_and_file) )
			{
			if ($this->warnmode) // we're going to pretend to delete the file. 
				{
				if (is_writable($path_and_file))
					{
					echo '<font color="red" face="arial" size="1">File Delete checking. File '.$path_and_file.' is writable and Jomres would expect to be able to delete it.</font><br/>';
					}
				else
					{
					echo '<font color="red" face="arial" size="1">File Delete test mode. File '.$path_and_file.' is not writable and Jomres would probably not be able to delete it.</font><br/>';
					}
				}
			else
				{
				if (!@unlink($path_and_file) )
					{
					echo '<font color="red" face="arial" size="1">Warning: file '.$path_and_file.' still exists in your system. Jomres has tried to delete it automatically but was unsuccessful. Please delete it.</font><br/>';
					}
				else
					{
					echo '<font color="blue" face="arial" size="1">Obsolete file '.$path_and_file.' was removed as it is no longer part of a production installation of Jomres.</font><br/>';
					return true;
					}
				}
			}
		else
			if ($this->warnmode)
				{
				//echo '<font color="blue" face="arial" size="1">File Delete warnings. File '.$path_and_file.' does not exist and is assumed to have been already deleted.</font><br/>';
				return true;
				}
			else
				return true;
		}
		
	function output_file_deletion_warning()
		{
		if ($this->number_of_files_require_deletion > 0)
			echo '<font color="blue" face="arial" size="3"><b>Jomres has found that you have <b>'.$this->number_of_files_require_deletion.'</b> files remaining on the system that should be deleted. <a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&warnconfirm=1">Click here to remove those files</a>, if you need to back them up, do that first please.</b></font><br/>';
		}
	}

?>