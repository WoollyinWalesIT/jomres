<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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
		$this->dir_libraries = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS;
		
		$this->dir_css = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'css'.JRDS;
		$this->dir_javascript = JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'javascript'.JRDS;
		
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
		// New for 5.6.1, we'll now allow plugins to report obsolete files
		$obsolete_plugin_files = get_showtime('obsolete_plugin_files');
		if (count($obsolete_plugin_files) > 0)
			{
			foreach ($obsolete_plugin_files as $file )
			if (file_exists($file) )
				{
				$this->add_obs_file($file);
				}
			}
		
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
		
		$this->add_obs_file($this->dir_minicomponents.'j06002list_property_invoices.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j10002addproperty.class.php');
		
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
		$this->add_obs_file($this->dir_classes.'browser.class.php');
		
		
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

		//$this->add_obs_file($this->dir_javascript.'excanvas.js');
		$this->add_obs_file($this->dir_javascript.'excanvas-compressed.js');
		
		$this->add_obs_file($this->dir_javascript.'jquery-ui-1.7.1.custom.min.js');
		$this->add_obs_file($this->dir_javascript.'jquery-ui-1.8rc3.custom.min.js');
		$this->add_obs_file($this->dir_javascript.'jquery.corner.js');
		$this->add_obs_file($this->dir_javascript.'interface.js');
		$this->add_obs_file($this->dir_javascript.'jquery.blockUI.js');
		$this->add_obs_file($this->dir_javascript.'jquery-1.4.2.min.js');
		$this->add_obs_file($this->dir_javascript.'MiniColorPicker.js');
		
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'class.phpmailer.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'class.smtp.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'LICENSE');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-br.php');
		
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-ca.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-cz.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-de.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-dk.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-en.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-es.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-et.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-fi.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-fo.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-fr.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-hu.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-it.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-ja.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-nl.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-no.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-pl.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-ro.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-ru.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-se.php');
		$this->add_obs_file($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS.'language'.JRDS.'phpmailer.lang-tr.php');
		
		$this->add_obs_file($this->dir_javascript.'tabber-minimized.js');
		$this->add_obs_file($this->dir_css.'tabber.css');
		$this->add_obs_file($this->dir_javascript.'jquery-1.3.2.min.js');
		$this->add_obs_file($this->dir_javascript.'fullsize-jquery.js');
		$this->add_obs_file($this->dir_javascript.'mootools.js');
		$this->add_obs_file($this->dir_javascript.'mootools and jquery conflict.txt');
		
		$this->add_obs_file($this->dir_minicomponents.'j00015discounts.class.php');
		
		$this->add_obs_file($this->dir_javascript.JRDS.'jquerytabs'.JRDS.'index.html');
		$this->add_obs_file($this->dir_javascript.JRDS.'jquerytabs'.JRDS.'jquery.history_remote.pack.js');
		$this->add_obs_file($this->dir_javascript.JRDS.'jquerytabs'.JRDS.'jquery.tabs.css');
		$this->add_obs_file($this->dir_javascript.JRDS.'jquerytabs'.JRDS.'jquery.tabs.pack.js');
		$this->add_obs_file($this->dir_javascript.JRDS.'jquerytabs'.JRDS.'jquery.tabs-ie.css');
		$this->add_obs_file($this->dir_javascript.JRDS.'jquerytabs'.JRDS.'tab2.png');
		$this->add_obs_file($this->dir_javascript.JRDS.'jquerytabs'.JRDS.'Thumbs.db');
		
		$this->add_obs_file($this->dir_templates_administrator.JRDS.'list_profiles.html');
		
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'HTMLPurifier.standalone.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Printer.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'Exception.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'Interchange.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'InterchangeBuilder.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema.ser');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'Validator.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'ValidatorAtom.php');
		
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'Builder'.JRDS.'ConfigSchema.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'Builder'.JRDS.'Xml.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'Interchange'.JRDS.'Directive.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'Interchange'.JRDS.'Id.php');
		
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.AllowedClasses.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.AllowedFrameTargets.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.AllowedRel.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.AllowedRev.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.ClassUseCDATA.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.DefaultImageAlt.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.DefaultInvalidImage.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.DefaultInvalidImageAlt.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.DefaultTextDir.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.EnableID.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.ForbiddenClasses.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.IDBlacklist.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.IDBlacklistRegexp.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.IDPrefix.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Attr.IDPrefixLocal.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'AutoFormat.AutoParagraph.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'AutoFormat.Custom.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'AutoFormat.DisplayLinkURI.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'AutoFormat.Linkify.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'AutoFormat.PurifierLinkify.DocURL.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'AutoFormat.PurifierLinkify.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'AutoFormat.RemoveEmpty.RemoveNbsp.Exceptions.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'AutoFormat.RemoveEmpty.RemoveNbsp.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'AutoFormat.RemoveEmpty.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Cache.DefinitionImpl.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Cache.SerializerPath.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.AggressivelyFixLt.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.CollectErrors.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.ColorKeywords.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.ConvertDocumentToFragment.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.DirectLexLineNumberSyncInterval.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.Encoding.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.EscapeInvalidChildren.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.EscapeInvalidTags.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.EscapeNonASCIICharacters.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.HiddenElements.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.Language.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.LexerImpl.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.MaintainLineNumbers.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.RemoveInvalidImg.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Core.RemoveScriptContents.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'CSS.AllowedProperties.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'CSS.AllowImportant.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'CSS.AllowTricky.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'CSS.DefinitionRev.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'CSS.MaxImgLength.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'CSS.Proprietary.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Filter.Custom.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Filter.ExtractStyleBlocks.Escaping.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Filter.ExtractStyleBlocks.Scope.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Filter.ExtractStyleBlocks.TidyImpl.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Filter.ExtractStyleBlocks.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Filter.YouTube.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.Allowed.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.AllowedAttributes.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.AllowedElements.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.AllowedModules.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.Attr.Name.UseCDATA.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.BlockWrapper.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.CoreModules.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.CustomDoctype.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.DefinitionID.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.DefinitionRev.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.Doctype.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.ForbiddenAttributes.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.ForbiddenElements.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.MaxImgLength.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.Parent.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.Proprietary.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.SafeEmbed.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.SafeObject.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.Strict.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.TidyAdd.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.TidyLevel.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.TidyRemove.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.Trusted.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'HTML.XHTML.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'info.ini');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Output.CommentScriptContents.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Output.Newline.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Output.SortAttr.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Output.TidyFormat.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'Test.ForceNoIconv.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.AllowedSchemes.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.Base.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.DefaultScheme.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.DefinitionID.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.DefinitionRev.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.Disable.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.DisableExternal.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.DisableExternalResources.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.DisableResources.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.Host.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.HostBlacklist.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.MakeAbsolute.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.Munge.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.MungeResources.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.MungeSecretKey.txt');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'ConfigSchema'.JRDS.'schema'.JRDS.'URI.OverrideAllowedSchemes.txt');

		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'EntityLookup'.JRDS.'entities.ser');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Filter'.JRDS.'ExtractStyleBlocks.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Filter'.JRDS.'YouTube.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Language'.JRDS.'classes'.JRDS.'en-x-test.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Language'.JRDS.'messages'.JRDS.'en.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Language'.JRDS.'messages'.JRDS.'en-x-test.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Language'.JRDS.'messages'.JRDS.'en-x-testmini.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Lexer'.JRDS.'PEARSax3.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Lexer'.JRDS.'PH5P.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Printer'.JRDS.'ConfigForm.css');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Printer'.JRDS.'ConfigForm.js');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Printer'.JRDS.'ConfigForm.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Printer'.JRDS.'CSSDefinition.php');
		$this->add_obs_file($this->dir_libraries.'htmlpurifier'.JRDS.'standalone'.JRDS.'HTMLPurifier'.JRDS.'Printer'.JRDS.'HTMLDefinition.php');
		
		$this->add_obs_file($this->dir_minicomponents.'j00010reception_option_04_blackbookings.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02130listblackbookings.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02132blackbooking.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02134newblackbooking.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02136saveblackbooking.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02138deleteblackbooking.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00010reception_option_07_bookaguestin.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00010reception_option_08_bookaguestout.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02170bookguestin.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02180bookguestout.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02182savebookout.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j07010commission_lineitem_insert.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j10002commission_invoices.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j10002listcrates.class.php');
		
		$this->add_obs_file($this->dir_minicomponents.'j16000editcrate.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000list_commission_invoices.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000listcrates.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000savecrates.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00509cheque.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00510cheque.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00600cheque.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00605cheque.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j03108cheque.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00509paypal.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00510paypal.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00605paypal.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00610paypal.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j03108paypal.class.php');
		
		$this->add_obs_file($this->dir_minicomponents.'j06000paypal.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j10002paypal.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000paypal_settings.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000save_paypal_settings.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00011manager_option_05_couponadmin.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06002deleteCoupon.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06002editCoupon.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06002listCoupons.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j06002saveCoupon.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j10002listCustomFields.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000delete_custom_field.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000edit_custom_field.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000listCustomFields.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00011manager_option_04_guesttypeadmin.class.php');
		
		$this->add_obs_file($this->dir_minicomponents.'j02114listcustomertypes.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02116editcustomertype.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02118savecustomertype.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02120deletecustomertype.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00011manager_option_05_extrasadmin.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02140publishextra.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02142listextras.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02144editextra.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02146saveextra.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j10002partners_choose.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000partner_delete.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000partner_delete_discount.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000partner_list_discounts.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000partner_save_discount_settings.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000partner_show.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000partner_show_discounts_for_property.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000partners_add_property_to_partner_portfolio.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000partners_choose.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000partners_find.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000partners_property_find.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00011manager_option_09_newproperty.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00011manager_option_12_deleteproperty.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02299regprop1_a_roombookings.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02299regprop1_realestate.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02300regprop1.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02310regprop2.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02320regprop3.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j04910deleteproperty.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00501sms_clickatell.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j03100sms_clickatell.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j10002sms_clickatell.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000save_sms_clickatell_settings.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000sms_clickatell_settings.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j10002subscriptions.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j10002subscriptions_packages.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000delete_subscription.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000delete_subscription_package.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000edit_subscription_package.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000list_subscription_packages.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000list_subscriptions.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000save_subscription_package.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j10002listTemplates.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000edit_template.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j16000save_template.class.php');

		$this->add_obs_file($this->dir_minicomponents.'j00509form.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00510form.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00600form.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00605form.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j03108form.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02230editcreditcard.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02232savecreditcard.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00510form.html');
		$this->add_obs_file($this->dir_minicomponents.'j00600form.html');
		$this->add_obs_file($this->dir_minicomponents.'j00510form.gif');
		
		$this->add_obs_file($this->dir_minicomponents.'j00501xlastminute.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00501xtariffsenhanced.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j00501xwiseprice.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02210listtariffs_advanced.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02211listtariffs_micromanage.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02212edittariff_advanced.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02213edittariff_micromanage.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02214savetariff_advanced.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02215savetariff_micromanage.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02216deletetariff.class.php');
		$this->add_obs_file($this->dir_minicomponents.'j02217deletetariff.class.php');
		
		$this->add_obs_file($this->dir_minicomponents.'j00510cheque.html');
		$this->add_obs_file($this->dir_minicomponents.'j00510paypal.html');
		$this->add_obs_file($this->dir_minicomponents.'j00600cheque.html');
		$this->add_obs_file($this->dir_minicomponents.'j00510cheque.gif');
		$this->add_obs_file($this->dir_minicomponents.'j00510paypal.gif');
		
		
		$this->add_obs_file($this->dir_javascript.'fullsize-interface.js');
		$this->add_obs_file($this->dir_javascript.'excanvas.compiled.js');
		$this->add_obs_file($this->dir_javascript.'jquery.bt.min.js');
		$this->add_obs_file($this->dir_javascript.'jquery.hoverIntent.minified.js');
		$this->add_obs_file($this->dir_javascript.'jquery.jeditable.pack.js');
		$this->add_obs_file($this->dir_javascript.'jquery.rating.pack.js');
		$this->add_obs_file($this->dir_javascript.'jquery.validate.min.js');
		$this->add_obs_file($this->dir_javascript.'jquery-ui-1.8.5.custom.min.js');
		$this->add_obs_file($this->dir_javascript.'jquery-ui-1.8.11.custom.min.js');
		$this->add_obs_file($this->dir_javascript.'jquery-1.4.3.min.js');
		$this->add_obs_file($this->dir_javascript.'jquery-1.5.1.min.js');
		$this->add_obs_file($this->dir_javascript.'jquery.selectCombo1.2.6.js');
		$this->add_obs_file($this->dir_javascript.'jquery.jgrowl.js.1.2.0');
		
		$this->add_obs_file($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'wordpress'.JRDS.'cms_specific_functions.php');
		$this->add_obs_file($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'wordpress'.JRDS.'cms_specific_installation.php');
		$this->add_obs_file($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'wordpress'.JRDS.'cms_specific_pre_installation.php');
		$this->add_obs_file($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'wordpress'.JRDS.'cms_specific_upgrade.php');
		$this->add_obs_file($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'wordpress'.JRDS.'cms_specific_urls.php');
		$this->add_obs_file($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'wordpress'.JRDS.'index.html');
		$this->add_obs_file($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'wordpress'.JRDS.'init_config_vars.php');
		
		$this->add_obs_file($this->dir_templates_administrator.'jomres_cpanel.php');
		$this->add_obs_file($this->dir_javascript.'tablepaginator.js');
		$this->add_obs_file($this->dir_javascript.'tablesort.js');
		$this->add_obs_file($this->dir_css.'tables.css');
		
		$this->add_obs_file($this->dir_minicomponents.'j10002new_property.class.php');
		
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