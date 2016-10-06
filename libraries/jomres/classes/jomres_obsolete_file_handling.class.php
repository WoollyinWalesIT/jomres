<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_obsolete_file_handling
	{
	function __construct()
		{
		
		$this->obs_files         = array ();
		$this->obs_directories   = array ();
		$this->nohtml      = jomresGetParam( $_REQUEST, 'no_html', 0 );
		$this->warnconfirm = jomresGetParam( $_REQUEST, 'warnconfirm', 0 );
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();

		$this->warnmode    = false;
		if ($jrConfig[ 'development_production' ] == "development")
			{
			$this->warnmode    = true;
			}
		
		if ( $this->warnconfirm == 1 ) $this->warnmode = false;
		$this->dir_root									= JOMRESCONFIG_ABSOLUTE_PATH ;
		$this->dir_jomres								= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS;
		$this->dir_minicomponents						= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'core-minicomponents' . JRDS;
		$this->dir_classes								= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'jomres' . JRDS . 'classes' . JRDS;
		$this->dir_functions							= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS . 'jomres' . JRDS . 'functions' . JRDS;
		$this->dir_libraries							= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'libraries' . JRDS;

		$this->dir_css									= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'css' . JRDS;
		$this->dir_javascript 							= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'javascript' . JRDS;

		$this->dir_templates_frontend					= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'jomres' . JRDS . 'frontend' . JRDS;
		$this->dir_templates_backend					= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'jomres' . JRDS . 'backend' . JRDS;
		$this->dir_templates_administrator				= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'jomres' . JRDS . 'administrator' . JRDS;

		$this->dir_templates_jqueryui_frontend			= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'jquery_ui' . JRDS . 'frontend' . JRDS;
		$this->dir_templates_jqueryui_backend			= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'jquery_ui' . JRDS . 'backend' . JRDS;
		$this->dir_templates_jqueryui_administrator		= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'jquery_ui' . JRDS . 'administrator' . JRDS;

		$this->dir_templates_bootstrap_frontend			= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'bootstrap' . JRDS . 'frontend' . JRDS;
		$this->dir_templates_bootstrap_backend			= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'bootstrap' . JRDS . 'backend' . JRDS;
		$this->dir_templates_bootstrap_administrator	= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'bootstrap' . JRDS . 'administrator' . JRDS;

		$this->dir_templates_bootstrap3_frontend		= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'bootstrap3' . JRDS . 'frontend' . JRDS;
		$this->dir_templates_bootstrap3_backend			= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'bootstrap3' . JRDS . 'backend' . JRDS;
		$this->dir_templates_bootstrap3_administrator	= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'bootstrap3' . JRDS . 'administrator' . JRDS;
		
		$this->dir_images       = JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'images' . JRDS;
		$this->dir_images_large = JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'images' . JRDS . 'jomresimages' . JRDS . 'large' . JRDS;
		$this->dir_images_small = JOMRESCONFIG_ABSOLUTE_PATH  .JOMRES_ROOT_DIRECTORY . JRDS . 'images' . JRDS . 'jomresimages' . JRDS . 'small' . JRDS;

		$this->dir_components_administrator = JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ADMINISTRATORDIRECTORY . JRDS . 'components' . JRDS . 'com_jomres' . JRDS;
		$this->dir_components               = JOMRESCONFIG_ABSOLUTE_PATH  . 'components' . JRDS . 'com_jomres' . JRDS;
		$this->dir_core_plugins             = JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'core-plugins' . JRDS;
		$this->dir_admin             		= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'admin' . JRDS;
		$this->dir_admin_functions     		= JOMRESCONFIG_ABSOLUTE_PATH  . JOMRES_ROOT_DIRECTORY . JRDS . 'admin' . JRDS . 'functions' . JRDS;
		}

	function ready_to_go()
		{
		if ( $this->nohtml == 1 ) return false;

		return true;
		}

	function set_default_obs_files_array()
		{
		// New for 5.6.1, we'll now allow plugins to report obsolete files
		$obsolete_plugin_files = get_showtime( 'obsolete_plugin_files' );
		if ( count( $obsolete_plugin_files ) > 0 )
			{
			foreach ( $obsolete_plugin_files as $file ) if ( file_exists( $file ) )
				{
				$this->add_obs_file( $file );
				}
			}

		$this->add_obs_file( $this->dir_root . 'jomres_webinstall.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00050mumenu.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00012invoices_link.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00501jscalendar.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000test_unsubscribe.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03200insertbooking_invoice.class.php' );

		$this->add_obs_file( $this->dir_minicomponents . 'j06000sendbug.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000savenote.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000saveCoupon.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000save_normalmode_tariffs.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000preview_email.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000listyourproperties.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000listoldbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000listCoupons.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000list_my_subscriptions.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000list_guests_invoices.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000handlereq_total.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000handlereq_deposit.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000fe_stats.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000editnote.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000editinplace.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000editCoupon.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000delslideshowimages.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000deletenote.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000deleteCoupon.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000amendBooking.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000addnote.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000reportbug.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000my_subscriptions.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000list_property_invoices.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000list_subscription_packages.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000list_usersinvoices.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000muaddtofavourites.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000mulistbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000muviewbooking.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000save_subscriber.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000subscribe.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000view_invoice.class.php' );

		$this->add_obs_file( $this->dir_minicomponents . 'j06000cancelGuestBooking.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000muviewfavourites.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00501slideshows.class.php' );

		$this->add_obs_file( $this->dir_minicomponents . 'j06002list_property_invoices.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002addproperty.class.php' );

		$this->add_obs_file( $this->dir_templates_frontend . 'menus.html' );
		$this->add_obs_file( $this->dir_templates_frontend . 'invoices_link.html' );
		$this->add_obs_file( $this->dir_templates_frontend . 'invoices_link.html' );
		$this->add_obs_file( $this->dir_templates_frontend . 'srch.html' );

		$this->add_obs_file( $this->dir_classes . 'tempbookinghandler.class.php' );
		$this->add_obs_file( $this->dir_classes . 'user.class.php' );
		$this->add_obs_file( $this->dir_classes . 'toolbar.class.php' );
		$this->add_obs_file( $this->dir_classes . 'taxrates.class.php' );
		$this->add_obs_file( $this->dir_classes . 'subscriptions_packages.class.php' );
		$this->add_obs_file( $this->dir_classes . 'subscriptions.class.php' );
		$this->add_obs_file( $this->dir_classes . 'subscribers.class.php' );
		$this->add_obs_file( $this->dir_classes . 'sms_clickatell_settings.class.php' );
		$this->add_obs_file( $this->dir_classes . 'sms_clickatell_message.class.php' );
		$this->add_obs_file( $this->dir_classes . 'sms_clickatell_handler.class.php' );
		$this->add_obs_file( $this->dir_classes . 'search.class.php' );
		$this->add_obs_file( $this->dir_classes . 'property.class.php' );
		$this->add_obs_file( $this->dir_classes . 'paypal_settings.class.php' );
		$this->add_obs_file( $this->dir_classes . 'pathway.class.php' );
		$this->add_obs_file( $this->dir_classes . 'paging.php' );
		$this->add_obs_file( $this->dir_classes . 'lineitem.class.php' );
		$this->add_obs_file( $this->dir_classes . 'invoice.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jomresXMLParser.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jomres_contentTabs.class.php' );
		$this->add_obs_file( $this->dir_classes . 'general.classes.php' );
		$this->add_obs_file( $this->dir_classes . 'gateway.class.php' );
		$this->add_obs_file( $this->dir_classes . 'dashboard.class.php' );
		$this->add_obs_file( $this->dir_classes . 'currencyformat.class.php' );
		$this->add_obs_file( $this->dir_classes . 'cron.class.php' );
		$this->add_obs_file( $this->dir_classes . 'crate.class.php' );
		$this->add_obs_file( $this->dir_classes . 'configpanel.class.php' );
		$this->add_obs_file( $this->dir_classes . 'booking.class.php' );
		$this->add_obs_file( $this->dir_classes . 'remote.class.php' );
		$this->add_obs_file( $this->dir_classes . 'ehandler.class.php' );
		$this->add_obs_file( $this->dir_classes . 'browser.class.php' );


		$this->add_obs_file( $this->dir_functions . 'general.functions.php' );
		$this->add_obs_file( $this->dir_functions . 'invoice.functions.php' );
		$this->add_obs_file( $this->dir_functions . 'subscriptions_packages.functions.php' );
		$this->add_obs_file( $this->dir_functions . 'subscribers.functions.php' );
		$this->add_obs_file( $this->dir_functions . 'booking.functions.php' );
		$this->add_obs_file( $this->dir_functions . 'crate.functions.php' );
		$this->add_obs_file( $this->dir_functions . 'property.functions.php' );
		$this->add_obs_file( $this->dir_functions . 'crate.functions.php' );
		$this->add_obs_file( $this->dir_functions . 'user.functions.php' );

		$this->add_obs_file( $this->dir_javascript . 'jquery.bt-0-9.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.bt-0-9-3.js' );

		//$this->add_obs_file($this->dir_javascript.'excanvas.js');
		$this->add_obs_file( $this->dir_javascript . 'excanvas-compressed.js' );

		$this->add_obs_file( $this->dir_javascript . 'jquery-ui-1.7.1.custom.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-ui-1.8rc3.custom.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.corner.js' );
		$this->add_obs_file( $this->dir_javascript . 'interface.js' );
		//$this->add_obs_file( $this->dir_javascript . 'jquery.blockUI.js' ); New version readded to Jomres 8
		$this->add_obs_file( $this->dir_javascript . 'jquery-1.4.2.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'MiniColorPicker.js' );

		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'class.phpmailer.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'class.smtp.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'LICENSE' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-br.php' );

		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-ca.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-cz.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-de.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-dk.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-en.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-es.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-et.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-fi.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-fo.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-fr.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-hu.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-it.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-ja.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-nl.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-no.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-pl.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-ro.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-ru.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-se.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v2.0.0' . JRDS . 'language' . JRDS . 'phpmailer.lang-tr.php' );

		$this->add_obs_file( $this->dir_javascript . 'tabber-minimized.js' );
		$this->add_obs_file( $this->dir_css . 'tabber.css' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-1.3.2.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'fullsize-jquery.js' );
		$this->add_obs_file( $this->dir_javascript . 'mootools.js' );
		$this->add_obs_file( $this->dir_javascript . 'mootools and jquery conflict.txt' );

		$this->add_obs_file( $this->dir_minicomponents . 'j00015discounts.class.php' );

		$this->add_obs_file( $this->dir_javascript . JRDS . 'jquerytabs' . JRDS . 'index.html' );
		$this->add_obs_file( $this->dir_javascript . JRDS . 'jquerytabs' . JRDS . 'jquery.history_remote.pack.js' );
		$this->add_obs_file( $this->dir_javascript . JRDS . 'jquerytabs' . JRDS . 'jquery.tabs.css' );
		$this->add_obs_file( $this->dir_javascript . JRDS . 'jquerytabs' . JRDS . 'jquery.tabs.pack.js' );
		$this->add_obs_file( $this->dir_javascript . JRDS . 'jquerytabs' . JRDS . 'jquery.tabs-ie.css' );
		$this->add_obs_file( $this->dir_javascript . JRDS . 'jquerytabs' . JRDS . 'tab2.png' );
		$this->add_obs_file( $this->dir_javascript . JRDS . 'jquerytabs' . JRDS . 'Thumbs.db' );

		$this->add_obs_file( $this->dir_templates_administrator . JRDS . 'list_profiles.html' );

		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'HTMLPurifier.standalone.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Printer.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'Exception.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'Interchange.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'InterchangeBuilder.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema.ser' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'Validator.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'ValidatorAtom.php' );

		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'Builder' . JRDS . 'ConfigSchema.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'Builder' . JRDS . 'Xml.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'Interchange' . JRDS . 'Directive.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'Interchange' . JRDS . 'Id.php' );

		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.AllowedClasses.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.AllowedFrameTargets.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.AllowedRel.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.AllowedRev.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.ClassUseCDATA.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.DefaultImageAlt.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.DefaultInvalidImage.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.DefaultInvalidImageAlt.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.DefaultTextDir.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.EnableID.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.ForbiddenClasses.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.IDBlacklist.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.IDBlacklistRegexp.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.IDPrefix.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Attr.IDPrefixLocal.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'AutoFormat.AutoParagraph.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'AutoFormat.Custom.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'AutoFormat.DisplayLinkURI.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'AutoFormat.Linkify.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'AutoFormat.PurifierLinkify.DocURL.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'AutoFormat.PurifierLinkify.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'AutoFormat.RemoveEmpty.RemoveNbsp.Exceptions.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'AutoFormat.RemoveEmpty.RemoveNbsp.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'AutoFormat.RemoveEmpty.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Cache.DefinitionImpl.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Cache.SerializerPath.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.AggressivelyFixLt.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.CollectErrors.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.ColorKeywords.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.ConvertDocumentToFragment.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.DirectLexLineNumberSyncInterval.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.Encoding.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.EscapeInvalidChildren.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.EscapeInvalidTags.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.EscapeNonASCIICharacters.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.HiddenElements.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.Language.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.LexerImpl.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.MaintainLineNumbers.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.RemoveInvalidImg.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Core.RemoveScriptContents.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'CSS.AllowedProperties.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'CSS.AllowImportant.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'CSS.AllowTricky.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'CSS.DefinitionRev.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'CSS.MaxImgLength.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'CSS.Proprietary.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Filter.Custom.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Filter.ExtractStyleBlocks.Escaping.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Filter.ExtractStyleBlocks.Scope.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Filter.ExtractStyleBlocks.TidyImpl.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Filter.ExtractStyleBlocks.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Filter.YouTube.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.Allowed.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.AllowedAttributes.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.AllowedElements.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.AllowedModules.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.Attr.Name.UseCDATA.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.BlockWrapper.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.CoreModules.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.CustomDoctype.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.DefinitionID.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.DefinitionRev.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.Doctype.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.ForbiddenAttributes.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.ForbiddenElements.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.MaxImgLength.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.Parent.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.Proprietary.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.SafeEmbed.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.SafeObject.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.Strict.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.TidyAdd.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.TidyLevel.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.TidyRemove.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.Trusted.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'HTML.XHTML.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'info.ini' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Output.CommentScriptContents.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Output.Newline.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Output.SortAttr.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Output.TidyFormat.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'Test.ForceNoIconv.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.AllowedSchemes.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.Base.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.DefaultScheme.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.DefinitionID.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.DefinitionRev.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.Disable.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.DisableExternal.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.DisableExternalResources.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.DisableResources.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.Host.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.HostBlacklist.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.MakeAbsolute.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.Munge.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.MungeResources.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.MungeSecretKey.txt' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'ConfigSchema' . JRDS . 'schema' . JRDS . 'URI.OverrideAllowedSchemes.txt' );

		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'EntityLookup' . JRDS . 'entities.ser' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Filter' . JRDS . 'ExtractStyleBlocks.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Filter' . JRDS . 'YouTube.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Language' . JRDS . 'classes' . JRDS . 'en-x-test.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Language' . JRDS . 'messages' . JRDS . 'en.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Language' . JRDS . 'messages' . JRDS . 'en-x-test.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Language' . JRDS . 'messages' . JRDS . 'en-x-testmini.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Lexer' . JRDS . 'PEARSax3.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Lexer' . JRDS . 'PH5P.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Printer' . JRDS . 'ConfigForm.css' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Printer' . JRDS . 'ConfigForm.js' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Printer' . JRDS . 'ConfigForm.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Printer' . JRDS . 'CSSDefinition.php' );
		$this->add_obs_file( $this->dir_libraries . 'htmlpurifier' . JRDS . 'standalone' . JRDS . 'HTMLPurifier' . JRDS . 'Printer' . JRDS . 'HTMLDefinition.php' );

		// $this->add_obs_file($this->dir_minicomponents.'j00010reception_option_04_blackbookings.class.php'); // This file has now been re-added to Jomres, in a disabled state
		$this->add_obs_file( $this->dir_minicomponents . 'j02130listblackbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02132blackbooking.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02134newblackbooking.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02136saveblackbooking.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02138deleteblackbooking.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j00010reception_option_07_bookaguestin.class.php');  // This file has now been re-added to Jomres, in a disabled state
		// $this->add_obs_file($this->dir_minicomponents.'j00010reception_option_08_bookaguestout.class.php'); // This file has now been re-added to Jomres, in a disabled state
		// $this->add_obs_file($this->dir_minicomponents.'j02170bookguestin.class.php');  // This file has now been re-added to Jomres, in a disabled state
		// $this->add_obs_file($this->dir_minicomponents.'j02180bookguestout.class.php'); // This file has now been re-added to Jomres, in a disabled state
		$this->add_obs_file( $this->dir_minicomponents . 'j02182savebookout.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j07010commission_lineitem_insert.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j10002commission_invoices.class.php'); // This file has now been re-added to Jomres, in a disabled state
		// $this->add_obs_file($this->dir_minicomponents.'j10002listcrates.class.php'); // This file has now been re-added to Jomres, in a disabled state

		$this->add_obs_file( $this->dir_minicomponents . 'j16000editcrate.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000list_commission_invoices.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000listcrates.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000savecrates.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00509cheque.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00510cheque.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00600cheque.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00605cheque.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03108cheque.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00509paypal.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00510paypal.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00605paypal.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00610paypal.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03108paypal.class.php' );

		$this->add_obs_file( $this->dir_minicomponents . 'j06000paypal.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j10002paypal.class.php'); // This file has now been re-added to Jomres, in a disabled state
		$this->add_obs_file( $this->dir_minicomponents . 'j16000paypal_settings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000save_paypal_settings.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j00011manager_option_05_couponadmin.class.php'); // This file has now been re-added to Jomres, in a disabled state
		$this->add_obs_file( $this->dir_minicomponents . 'j06002deleteCoupon.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002editCoupon.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002listCoupons.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002saveCoupon.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j10002listCustomFields.class.php');
		$this->add_obs_file( $this->dir_minicomponents . 'j16000delete_custom_field.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000edit_custom_field.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000listCustomFields.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j00011manager_option_04_guesttypeadmin.class.php'); // This file has now been re-added to Jomres, in a disabled state

		$this->add_obs_file( $this->dir_minicomponents . 'j02114listcustomertypes.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02116editcustomertype.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02118savecustomertype.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02120deletecustomertype.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j00011manager_option_05_extrasadmin.class.php'); // This file has now been re-added to Jomres, in a disabled state
		$this->add_obs_file( $this->dir_minicomponents . 'j02140publishextra.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02142listextras.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02144editextra.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02146saveextra.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j10002partners_choose.class.php'); // This file has now been re-added to Jomres, in a disabled state
		$this->add_obs_file( $this->dir_minicomponents . 'j16000partner_delete.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000partner_delete_discount.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000partner_list_discounts.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000partner_save_discount_settings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000partner_show.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000partner_show_discounts_for_property.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000partners_add_property_to_partner_portfolio.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000partners_choose.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000partners_find.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000partners_property_find.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j00011manager_option_09_newproperty.class.php'); // This file has now been re-added to Jomres, in a disabled state
		// $this->add_obs_file($this->dir_minicomponents.'j00011manager_option_12_deleteproperty.class.php'); // This file has now been re-added to Jomres, in a disabled state
		//$this->add_obs_file( $this->dir_minicomponents . 'j02299regprop1_a_roombookings.class.php' ); // Property creation functionality now re-added to Core
		//$this->add_obs_file( $this->dir_minicomponents . 'j02299regprop1_realestate.class.php' ); // Property creation functionality now re-added to Core
		//$this->add_obs_file( $this->dir_minicomponents . 'j02300regprop1.class.php' ); // Property creation functionality now re-added to Core
		$this->add_obs_file( $this->dir_minicomponents . 'j02310regprop2.class.php' );
		//$this->add_obs_file( $this->dir_minicomponents . 'j02320regprop3.class.php' ); // Property creation functionality now re-added to Core
		//$this->add_obs_file( $this->dir_minicomponents . 'j04910deleteproperty.class.php' ); // Property creation functionality now re-added to Core
		$this->add_obs_file( $this->dir_minicomponents . 'j00501sms_clickatell.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03100sms_clickatell.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j10002sms_clickatell.class.php'); // This file has now been re-added to Jomres, in a disabled state
		$this->add_obs_file( $this->dir_minicomponents . 'j16000save_sms_clickatell_settings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000sms_clickatell_settings.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j10002subscriptions.class.php'); // This file has now been re-added to Jomres, in a disabled state
		// $this->add_obs_file($this->dir_minicomponents.'j10002subscriptions_packages.class.php'); // This file has now been re-added to Jomres, in a disabled state
		$this->add_obs_file( $this->dir_minicomponents . 'j16000delete_subscription.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000delete_subscription_package.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000edit_subscription_package.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000list_subscription_packages.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000list_subscriptions.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000save_subscription_package.class.php' );
		// $this->add_obs_file($this->dir_minicomponents.'j10002listTemplates.class.php'); // This file has now been re-added to Jomres, in a disabled state
		$this->add_obs_file( $this->dir_minicomponents . 'j16000edit_template.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000save_template.class.php' );

		$this->add_obs_file( $this->dir_minicomponents . 'j00509form.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00510form.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00600form.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00605form.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03108form.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02230editcreditcard.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02232savecreditcard.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00510form.html' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00600form.html' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00510form.gif' );

		$this->add_obs_file( $this->dir_minicomponents . 'j00501xlastminute.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00501xtariffsenhanced.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00501xwiseprice.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02210listtariffs_advanced.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02211listtariffs_micromanage.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02212edittariff_advanced.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02213edittariff_micromanage.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02214savetariff_advanced.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02215savetariff_micromanage.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02216deletetariff.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02217deletetariff.class.php' );

		$this->add_obs_file( $this->dir_minicomponents . 'j00510cheque.html' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00510paypal.html' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00600cheque.html' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00510cheque.gif' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00510paypal.gif' );


		$this->add_obs_file( $this->dir_javascript . 'fullsize-interface.js' );
		$this->add_obs_file( $this->dir_javascript . 'excanvas.compiled.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.bt.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.hoverIntent.minified.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.jeditable.pack.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.rating.pack.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.validate.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-ui-1.8.5.custom.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-ui-1.8.11.custom.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-1.4.3.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-1.5.1.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.selectCombo1.2.6.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.jgrowl.js.1.2.0' );

		$this->add_obs_file( $this->dir_templates_administrator . 'jomres_cpanel.php' );
		$this->add_obs_file( $this->dir_javascript . 'tablepaginator.js' );
		$this->add_obs_file( $this->dir_javascript . 'tablesort.js' );
		$this->add_obs_file( $this->dir_css . 'tables.css' );

		$this->add_obs_file( $this->dir_minicomponents . 'j10002new_property.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception_option_03_01_blank.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception_option_05_01_blank.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception_option_07_01_blank.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_04_01_blank.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_07_01_blank.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00008user_toolbars.class.php.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00007manager_toolbar.class.php.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00008user_toolbars.class.php.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00006reception_toolbar.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00007manager_toolbar.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00008user_toolbars.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00013a_listyourproperties.class.php' );

		$this->add_obs_file( $this->dir_templates_backend . 'toolbar_manager_manager_view.html' );
		$this->add_obs_file( $this->dir_templates_backend . 'toolbar_reception_manager_view.html' );
		$this->add_obs_file( $this->dir_templates_backend . 'toolbar_thirdparty.html' );
		$this->add_obs_file( $this->dir_templates_backend . 'edit_creditcard.html' );
		$this->add_obs_file( $this->dir_templates_backend . 'save_creditcard.html' );
		$this->add_obs_file( $this->dir_templates_backend . 'edit_custom_text.html' );
		$this->add_obs_file( $this->dir_templates_backend . 'save_custom_text.html' );
		$this->add_obs_file( $this->dir_templates_backend . 'toolbar_manager.html' );
		$this->add_obs_file( $this->dir_templates_backend . 'toolbar_reception.html' );
		$this->add_obs_file( $this->dir_templates_backend . 'list_guests_invoices.html' );


		$this->add_obs_file( $this->dir_minicomponents . 'j01009filterproperties.class.php' );

		$this->add_obs_file( $this->dir_libraries . 'hn_captcha' . JRDS . 'fonts' . JRDS . 'abbeymediumextended.ttf' );
		$this->add_obs_file( $this->dir_libraries . 'hn_captcha' . JRDS . 'hn_captcha.class.php' );
		$this->add_obs_file( $this->dir_libraries . 'hn_captcha' . JRDS . 'hn_captcha.class-php5.php' );
		$this->add_obs_file( $this->dir_libraries . 'hn_captcha' . JRDS . 'index.html' );

		// Jomres v7
		$this->add_obs_file( $this->dir_classes . 'cpanel.class.php' );
		$this->add_obs_file( $this->dir_templates_administrator . 'cpanel.html' );


		$this->add_obs_file( $this->dir_minicomponents . 'j16000add_adhoc_item_to_bill.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002add_adhoc_item_to_bill.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000addproperty.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000addproperty2.class.php' );


		$this->add_obs_file( $this->dir_templates_administrator . 'addhoc_item.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'addhoc_item.html' );
		$this->add_obs_file( $this->dir_templates_administrator . 'adhocitem_step1.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'adhocitem_step1.html' );
		$this->add_obs_file( $this->dir_templates_administrator . 'adhocitem_step2.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'adhocitem_step2.html' );
		$this->add_obs_file( $this->dir_templates_administrator . 'edit_taxrates.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'edit_taxrates.html' );
		$this->add_obs_file( $this->dir_templates_administrator . 'list_tariffs.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'list_tariffs.html' );
		$this->add_obs_file( $this->dir_templates_administrator . 'register_property1.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'register_property1.html' );
		$this->add_obs_file( $this->dir_templates_administrator . 'register_property2.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'register_property2.html' );


		// Generate tidy up of older images no longer used

		$this->add_obs_file( $this->dir_images_large . 'AddItem.png' );
		$this->add_obs_file( $this->dir_images_large . 'AddProperty.png' );
		$this->add_obs_file( $this->dir_images_large . 'addService.png' );
		$this->add_obs_file( $this->dir_images_large . 'auditLog.png' );
		$this->add_obs_file( $this->dir_images_large . 'blank.png' );
		$this->add_obs_file( $this->dir_images_large . 'BookGuestIn.png' );
		$this->add_obs_file( $this->dir_images_large . 'BookGuestOut.png' );
		$this->add_obs_file( $this->dir_images_large . 'bug_icon.png' );
		$this->add_obs_file( $this->dir_images_large . 'Cancel.png' );
		$this->add_obs_file( $this->dir_images_large . 'ChartBarTrend.png' );
		$this->add_obs_file( $this->dir_images_large . 'commissionRates.png' );
		$this->add_obs_file( $this->dir_images_large . 'ContactCard.png' );
		$this->add_obs_file( $this->dir_images_large . 'ContactCardAdd.png' );
		$this->add_obs_file( $this->dir_images_large . 'ContactCardDelete.png' );
		$this->add_obs_file( $this->dir_images_large . 'ContactCardEdit.png' );
		$this->add_obs_file( $this->dir_images_large . 'CopyItem.png' );
		$this->add_obs_file( $this->dir_images_large . 'couponAdmin.png' );
		$this->add_obs_file( $this->dir_images_large . 'cron.png' );
		$this->add_obs_file( $this->dir_images_large . 'Desktop.png' );
		$this->add_obs_file( $this->dir_images_large . 'DownloadDisabled.png' );
		$this->add_obs_file( $this->dir_images_large . 'EditBlackBookings.png' );
		$this->add_obs_file( $this->dir_images_large . 'EditConfiguration.png' );
		$this->add_obs_file( $this->dir_images_large . 'EditGuestTypes.png' );
		$this->add_obs_file( $this->dir_images_large . 'EditItem.png' );
		$this->add_obs_file( $this->dir_images_large . 'EditOptions.png' );
		$this->add_obs_file( $this->dir_images_large . 'EditText.png' );
		$this->add_obs_file( $this->dir_images_large . 'EmailSend.png' );
		$this->add_obs_file( $this->dir_images_large . 'enterDeposit.png' );
		$this->add_obs_file( $this->dir_images_large . 'GlobalConfiguration.png' );
		$this->add_obs_file( $this->dir_images_large . 'guestAdd.png' );
		$this->add_obs_file( $this->dir_images_large . 'GuestAdmin.png' );
		$this->add_obs_file( $this->dir_images_large . 'guestEdit.png' );
		$this->add_obs_file( $this->dir_images_large . 'Home.png' );
		$this->add_obs_file( $this->dir_images_large . 'HotelReservationEdit.png' );
		$this->add_obs_file( $this->dir_images_large . 'HotelReservationStop.png' );
		$this->add_obs_file( $this->dir_images_large . 'Invoice.png' );
		$this->add_obs_file( $this->dir_images_large . 'ListBookings.png' );
		$this->add_obs_file( $this->dir_images_large . 'ListNewBookings.png' );
		$this->add_obs_file( $this->dir_images_large . 'listProperties.png' );
		$this->add_obs_file( $this->dir_images_large . 'listTemplates.png' );
		$this->add_obs_file( $this->dir_images_large . 'logs.png' );
		$this->add_obs_file( $this->dir_images_large . 'NewBooking.png' );
		$this->add_obs_file( $this->dir_images_large . 'partners.png' );
		$this->add_obs_file( $this->dir_images_large . 'paypal.png' );
		$this->add_obs_file( $this->dir_images_large . 'plugin_button.png' );
		$this->add_obs_file( $this->dir_images_large . 'pluginManagerDisabled.png' );
		$this->add_obs_file( $this->dir_images_large . 'plugins.png' );
		$this->add_obs_file( $this->dir_images_large . 'postnote.png' );
		$this->add_obs_file( $this->dir_images_large . 'Preview.png' );
		$this->add_obs_file( $this->dir_images_large . 'Printer.png' );
		$this->add_obs_file( $this->dir_images_large . 'Prompt.png' );
		$this->add_obs_file( $this->dir_images_large . 'PropertyAdmin.png' );
		$this->add_obs_file( $this->dir_images_large . 'propertyFeatures.png' );
		$this->add_obs_file( $this->dir_images_large . 'propertyTypes.png' );
		$this->add_obs_file( $this->dir_images_large . 'PublishProperty.png' );
		$this->add_obs_file( $this->dir_images_large . 'rebuildregistry.png' );
		$this->add_obs_file( $this->dir_images_large . 'Recycle Bin.png' );
		$this->add_obs_file( $this->dir_images_large . 'ReservationsHistoric.png' );
		$this->add_obs_file( $this->dir_images_large . 'reviews.png' );
		$this->add_obs_file( $this->dir_images_large . 'roomTypes.png' );
		$this->add_obs_file( $this->dir_images_large . 'Save.png' );
		$this->add_obs_file( $this->dir_images_large . 'SlideShowImages.png' );
		$this->add_obs_file( $this->dir_images_large . 'subscriptions.png' );
		$this->add_obs_file( $this->dir_images_large . 'Symbol Refresh.png' );
		$this->add_obs_file( $this->dir_images_large . 'TariffsConfig.png' );
		$this->add_obs_file( $this->dir_images_large . 'Taxes.png' );
		$this->add_obs_file( $this->dir_images_large . 'Thumbs.db' );
		$this->add_obs_file( $this->dir_images_large . 'Tick.png' );
		$this->add_obs_file( $this->dir_images_large . 'United_Kingdom.png' );
		$this->add_obs_file( $this->dir_images_large . 'UnpublishProperty.png' );
		$this->add_obs_file( $this->dir_images_large . 'upgrades.png' );
		$this->add_obs_file( $this->dir_images_large . 'Vendors.png' );
		$this->add_obs_file( $this->dir_images_large . 'ViewArchive.png' );
		$this->add_obs_file( $this->dir_images_large . 'ViewDatabase.png' );
		$this->add_obs_file( $this->dir_images_large . 'ViewHistory.png' );
		$this->add_obs_file( $this->dir_images_large . 'WasteBasket.png' );


		$this->add_obs_file( $this->dir_images . 'bg_header_down.jpg' );
		$this->add_obs_file( $this->dir_images . 'bg_header_sortable.jpg' );
		$this->add_obs_file( $this->dir_images . 'bg_header_sorting.jpg' );
		$this->add_obs_file( $this->dir_images . 'bg_header_up.jpg' );
		$this->add_obs_file( $this->dir_images . 'bullet1.gif' );
		$this->add_obs_file( $this->dir_images . 'bullet2.gif' );
		$this->add_obs_file( $this->dir_images . 'col_alt.jpg' );
		$this->add_obs_file( $this->dir_images . 'info.gif' );
		//$this->add_obs_file($this->dir_images.'information.png');
		$this->add_obs_file( $this->dir_images . 'jomres_button.gif' );
		$this->add_obs_file( $this->dir_images . 'KeyCard.png' );
		$this->add_obs_file( $this->dir_images . 'KeyCardAdd.png' );
		$this->add_obs_file( $this->dir_images . 'KeyCardDelete.png' );
		$this->add_obs_file( $this->dir_images . 'number1.png' );
		$this->add_obs_file( $this->dir_images . 'number2.png' );
		$this->add_obs_file( $this->dir_images . 'number3.png' );
		$this->add_obs_file( $this->dir_images . 'number4.png' );
		$this->add_obs_file( $this->dir_images . 'shade.gif' );
		$this->add_obs_file( $this->dir_images . 'shadeactive.gif' );
		$this->add_obs_file( $this->dir_images . 'shadowback.gif' );
		$this->add_obs_file( $this->dir_images . 'shadowback_white.gif' );
		$this->add_obs_file( $this->dir_images . 'tab1.gif' );
		$this->add_obs_file( $this->dir_images . 'tab3.gif' );
		$this->add_obs_file( $this->dir_images . 'tab4.gif' );
		$this->add_obs_file( $this->dir_images . 'td_alt.jpg' );

		// html purifier updated to 4.4, so 4.3 scripts can be deleted
		$this->add_obs_dir ( $this->dir_libraries . 'htmlpurifier' . JRDS . 'htmlpurifier-4.3.0-standalone' ) ;
		
		// Old 'jomres' templates directory renamed to 'jqueryui', will help to reduce confusion, so files in the /jomres/templates/jomres will need to be deleted
		$this->add_obs_dir ( JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . JRDS . 'templates' . JRDS . 'jomres' ) ;
		
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'list_normalmode_roomtariffs.html' );
		$this->add_obs_file( $this->dir_templates_frontend . 'list_normalmode_roomtariffs.html' );


		$this->add_obs_file( $this->dir_javascript . 'jquery-1.5.2.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-1.6.4.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-1.7.1.min.js' );

		$this->add_obs_file( $this->dir_javascript . 'jquery-ui-1.8.13.custom.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-ui-1.8.16.custom.min.js' );

		$this->add_obs_file( $this->dir_minicomponents . 'j00501editingmode.class.php' );

		// Codemirror (for template editing) updated to 2.34
		$this->add_obs_dir( $this->dir_javascript . 'codemirror' );
		
		$this->add_obs_file( $this->dir_javascript . 'jquery-ui-1.8.23.custom.min.js' );

		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'black-tie' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'blitzer' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'bootstrap' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'cupertino' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'dark-hive' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'dot-luv' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'eggplant' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'excite-bike' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'flick' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'hot-sneaks' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'humanity' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'le-frog' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'mint-choc' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'overcast' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'pepper-grinder' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'redmond' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'smoothness' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'south-street' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'start' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'sunny' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'swanky-purse' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'trontastic' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'ui-darkness' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'ui-lightness' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'vader' . JRDS . 'jquery-ui-1.8rc3.custom.css' );
		$this->add_obs_file( $this->dir_css . JRDS . 'jquery_ui_themes' . JRDS . 'jomres' . JRDS . 'jquery-ui-1.8.16.custom.css' );

		$this->add_obs_file( $this->dir_templates_jqueryui_backend . JRDS . 'confirmation_letter.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . JRDS . 'confirmation_letter.html' );

		if ( this_cms_is_joomla() ) 
			$this->add_obs_file( $this->dir_components_administrator . 'admin.jomres.php' );

		$this->add_obs_dir( $this->dir_libraries . 'jomres' . JRDS . 'cms_specific' . JRDS . 'jomressa' );
		
		$this->add_obs_dir( $this->dir_core_plugins . 'qr_code_lib' . JRDS . 'library' );
			
		$this->add_obs_file( $this->dir_core_plugins . 'qr_code_lib' . JRDS . 'j00001qr_code_lib.class.php' );
		
		$this->add_obs_dir( $this->dir_libraries . 'PHPMailer_v5.1' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j16000save_custom_field.class.php' );
		
		// 7.4
		
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'edit_advanced_tariff.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'edit_micromanage_tariff.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'list_micromanage_tariffs.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'list_advanced_tariffs.html' );
		
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'edit_advanced_tariff.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'edit_micromanage_tariff.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'list_micromanage_tariffs.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'list_advanced_tariffs.html' );
		
		$this->add_obs_file( $this->dir_javascript . 'jquery-2.0.0.min.js' );
		
		// 7.5.3
		$this->add_obs_file( $this->dir_minicomponents . 'j00012manager_first_run.class.php' );
		
		// 8.0
		$this->add_obs_file( $this->dir_classes . 'jomres_dashboard.class.php' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j00501avlcal.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception_option_01_switch_property.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception_option_02_preview.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception_option_06_listnewbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception_option_06_listoldbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_08_publish.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_09_myproperties.class.php' );
		// $this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_12_deleteproperty.class.php' );  // Property creation functionality now re-added to Core
		$this->add_obs_file( $this->dir_minicomponents . 'j00013x_listyourproperties.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02242listnewbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06001listoldbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06001switch_active_property.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06001ui_find_properties.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002listyourproperties.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002listyourproperties_ajax.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002my_commission_invoices.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_14_mycommission_invoices.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06001list_property_invoices.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06001list_guests_invoices.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06005list_usersinvoices.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception_option_03_myproperties.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06001bootstrap_dashboard_ajax.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06001bootstrap_dashboard.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception_option_05_listallbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02240listlivebookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06001listlivebookings_ajax.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00020tagsearch.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00501bookings1.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00501gallery.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00501odds.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00501required.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00501srps.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_03_propertyconfig.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03320business_settings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03330save_business_settings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j04070editroomfeature.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j04080saveroomfeature.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j04090deleteroomfeature.class.php' );
		
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'ajax_switch_property.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'switch_property.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'bootstrap_dashboard.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'edit_customertype.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'list_customertypes.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'edit_coupon.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'list_coupons.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'edit_extra.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'list_extras.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'edit_room_feature.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'list_room_features.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'edit_room.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'list_rooms.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'edit_rfeature.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'list_rfeatures.html' );
		
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'edit_customertype.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'list_customertypes.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'edit_coupon.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'list_coupons.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'edit_extra.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'list_extras.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'edit_room_feature.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'list_room_features.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'edit_room.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'list_rooms.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'edit_rfeature.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'list_rfeatures.html' );
		
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'ajax_switch_property.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'switch_property.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'edit_customertype.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'list_customertypes.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'edit_coupon.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'list_coupons.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'edit_extra.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'list_extras.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'edit_room_feature.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'list_room_features.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'edit_room.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'list_rooms.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'edit_rfeature.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'list_rfeatures.html' );
		
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'edit_bug.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'edit_bug.html' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002reportbug.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002sendbug.class.php' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j00003mobile.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002listRfeatures.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000deleteRfeature.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000editRfeature.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000listRfeatures.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j04010editroom.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j04020saveroom.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j04030deleteroom.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_02_propertyadmin.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j04000roomsconfig.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j04005roomsconfig.class.php' );
		
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'batchupload.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'batchupload.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'batchupload.html' );
		
		$this->add_obs_dir ( $this->dir_jomres . 'templates'  . JRDS . 'jomres' ) ;
		$this->add_obs_dir ( $this->dir_jomres . 'libraries'  . JRDS . 'PHPMailer_v5.1' ) ;
		$this->add_obs_dir ( $this->dir_jomres . 'javascript' . JRDS . 'codemirror' ) ;
		$this->add_obs_dir ( $this->dir_jomres . 'javascript' . JRDS . 'jquerytabs' ) ;
		$this->add_obs_dir ( $this->dir_jomres . 'javascript' . JRDS . 'bootstrap_dashboard' ) ;
		$this->add_obs_dir ( $this->dir_jomres . 'libraries' . JRDS . 'bootstrap_dashboard' ) ;
		$this->add_obs_dir ( $this->dir_jomres . 'templates'  . JRDS . 'jquery_ui' . JRDS . 'templates') ;
		
		
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_11_debugging.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02265viewbookingnotes.class.php' );
		
		//$this->add_obs_file( $this->dir_javascript . 'bootstrap-tour.js' ); // Re-introduced in Jomres 8.1.8
		$this->add_obs_file( $this->dir_javascript . 'datatables_bootstrap_paging.js' );
		$this->add_obs_file( $this->dir_javascript . 'DT_bootstrap.js' );
		
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'guest_conf_email.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'hotel_conf_email.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'confirmation_letter.html' );
		
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'guest_conf_email.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'hotel_conf_email.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'confirmation_letter.html' );
		
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'guest_conf_email.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'hotel_conf_email.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'confirmation_letter.html' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j03110guestconfirmationemail.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03100hotelconfirmationemail.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03100adminconfirmationemail.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02190confirmationform.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception_option_07_bookaguestin.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00010reception_option_08_bookaguestout.class.php' );
		
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'bookguestin.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'bookguestout.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'get_guests_depart_today.html' );
		
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'bookguestin.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'bookguestout.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'get_guests_depart_today.html' );
		
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'bookguestin.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'bookguestout.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'get_guests_depart_today.html' );
		
		$this->add_obs_file( $this->dir_classes . 'jomres_cache.class.php' );
		
		$this->add_obs_dir( $this->dir_libraries . 'jomres' . JRDS . 'cms_specific' . JRDS . 'joomla30' );
		$this->add_obs_dir( $this->dir_libraries . 'jomres' . JRDS . 'cms_specific' . JRDS . 'joomla31' );
		
		$this->add_obs_file( $this->dir_javascript . 'bootstrap-tour.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'bootstrap-tour-standalone.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'ColVis.js' );
		$this->add_obs_file( $this->dir_javascript . 'jomres.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jomres_consolidated_files.js' );
		$this->add_obs_file( $this->dir_javascript . 'jomres_consolidated_files_min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.cookie.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.dataTables.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-1.8.2.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-2.0.3.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-ui-1.9.2.custom.min.js' );
		
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'list_properties_overlay_snippet.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'list_properties_overlay_snippet.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'list_properties_overlay_snippet.html' );
		
		
		$this->add_obs_file( $this->dir_minicomponents . 'j00004x_init_javascript_css_files.class.php' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j99999pack_javascript.class.php' );
		
		$this->add_obs_dir( $this->dir_libraries . 'fullscreen_view' . JRDS . 'bootstrap3' . JRDS . 'dist' );
		
		$this->add_obs_file( $this->dir_javascript . 'TableTools.js' );
		$this->add_obs_file( $this->dir_javascript . 'TableTools.min.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery-1.8.2.js' );
		$this->add_obs_file( $this->dir_javascript . 'ColVis.min.js' );
		
		$this->add_obs_file( $this->dir_css . 'tables_jui.css' );
		$this->add_obs_file( $this->dir_css . 'TableTools_JUI.css' );
		$this->add_obs_file( $this->dir_css . 'ColVis.css' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j03020insertbooking_amendinvoice.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00013dashboard.class.php' );
		
		$this->add_obs_file( $this->dir_classes . 'invoicehandler.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jrportal_lineitem.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002listbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000listbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002commission_invoices.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000list_usersinvoices.class.php' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'invoice_recurring_row_snippet.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'invoice_recurring_row_snippet.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'invoice_recurring_row_snippet.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'invoice_arrival_snippet.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'invoice_arrival_snippet.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'invoice_arrival_snippet.html' );
		
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'mu_frontend_invoices.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'mu_frontend_list_invoices.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'mu_frontend_invoices.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'mu_frontend_list_invoices.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'mu_frontend_invoices.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'mu_frontend_list_invoices.html' );
		
		//v8.3
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'list_crates.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'edit_crate.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'list_crates.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'edit_crate.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'list_crates.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'edit_crate.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'list_properties_awaiting_approval.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'list_properties_awaiting_approval.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'list_properties_awaiting_approval.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'admin_list_propertys.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'admin_list_propertys.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'admin_list_propertys.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'property_initials.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'property_initials.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'property_initials.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_backend . 'suspended.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_backend . 'suspended.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_backend . 'suspended.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'edit_subscription_package.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'edit_subscription_package.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'edit_subscription_package.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'list_subscription_packages.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'list_subscription_packages.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'list_subscription_packages.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'list_subscriptions.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'list_subscriptions.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'list_subscriptions.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'subscription_warning.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'subscription_warning.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'subscription_warning.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'frontend_list_my_subscriptions.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'frontend_list_my_subscriptions.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'frontend_list_my_subscriptions.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'frontend_list_subscription_packages.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'frontend_list_subscription_packages.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'frontend_list_subscription_packages.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'frontend_subscriber_register.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'frontend_subscriber_register.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'frontend_subscriber_register.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'subscription_error_incomplete_details.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'subscription_error_incomplete_details.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'subscription_error_incomplete_details.html' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j16000savecrate.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000archivecrates.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002listcrates.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002listpropertys.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000viewproperty.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000saveregisterprop.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000ajax_list_properties_awaiting_approval.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000list_properties_awaiting_approval.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000listpropertys.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000list_properties_initials.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002suspended.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000cron_subscriptions.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_13_mysubscriptions.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002list_my_subscriptions.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002my_subscriptions.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06005list_subscription_packages.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002subscriptions.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002subscriptions_packages.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06005subscribe.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06005save_subscriber.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000canc_subscribed.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000subscribed.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00050subscriptions.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002cannot_publish.class.php' );
		
		$this->add_obs_file( $this->dir_classes . 'crateTypes.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jrportal_crate.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jrportal_crate_functions.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jomres_property_maker.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jrportal_property.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jrportal_booking.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jrportal_booking_functions.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jrportal_user.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jrportal_subscribers.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jrportal_subscriptions_packages.class.php' );
		
		$this->add_obs_file( $this->dir_admin . 'admin.jomres.bootstrap-html.php' );
		$this->add_obs_file( $this->dir_admin . 'admin.jomres.html.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002showSiteConfig.class.php' );
		
		$this->add_obs_file( $this->dir_javascript . 'jquery-ui-1.9.2.custom.js' );
		
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'partner_discounts_show.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'partner_discounts_show.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'partner_discounts_show.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'partner_show.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'partner_show.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'partner_show.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'partner_show_discounts_for_property.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'partner_show_discounts_for_property.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'partner_show_discounts_for_property.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'partners_choose.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'partners_choose.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_administrator . 'partners_choose.html' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j16000saveRfeature.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06002fe_stats.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jomres_property_room_features.class.php' );
		
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'show_property_rooms.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'show_property_rooms.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'show_property_rooms.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'show_room_feature.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'show_room_feature.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'show_room_feature.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'show_room_features.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'show_room_features.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'show_room_features.html' );
		$this->add_obs_file( $this->dir_minicomponents . 'j01055showroomdetails.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000show_property_room_features.class.php' );
		
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'slideshow_medium.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'slideshow_medium.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'slideshow_medium.html' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j06000list_gateways_for_invoice.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002paypal.class.php' );

		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'paypal_settings.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_administrator . 'paypal_settings.html' );
		
		$this->add_obs_dir( $this->dir_css . 'jquery_ui_themes' . JRDS . 'bootstrap' );
		
		$this->add_obs_dir( $this->dir_css . 'jomres' );
		$this->add_obs_dir( $this->dir_javascript . 'cal' );
		$this->add_obs_file( $this->dir_css . 'bootstrap.css' );
		$this->add_obs_file( $this->dir_css . 'bootstrap_jomres_plugin.css' );
		$this->add_obs_file( $this->dir_css . 'dataTables.colVis.css' );
		$this->add_obs_file( $this->dir_css . 'dataTables.tableTools.css' );
		$this->add_obs_file( $this->dir_css . 'DT_bootstrap.css' );
		$this->add_obs_file( $this->dir_css . 'jquery.dataTables_themeroller.css' );
		$this->add_obs_file( $this->dir_javascript . 'copy_cvs_xls_pdf.swf' );
		$this->add_obs_file( $this->dir_javascript . 'dataTables.colVis.js' );
		$this->add_obs_file( $this->dir_javascript . 'dataTables.tableTools.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.dataTables.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.easing.compatibility.js' );
		
		$this->add_obs_dir( $this->dir_templates_jqueryui_administrator );
		$this->add_obs_file( $this->dir_javascript . 'jquery.hoverIntent.js' );
		$this->add_obs_file( $this->dir_javascript . 'excanvas.js' );
		$this->add_obs_file( $this->dir_css . 'jquery.jgrowl.css.1.2.0' );

		$this->add_obs_file( $this->dir_javascript . 'jquery.jlabel-1.3.js' );
		$this->add_obs_file( $this->dir_javascript . 'datatables_pagination.js' );
		$this->add_obs_file( $this->dir_javascript . 'datatables.js' );
		$this->add_obs_file( $this->dir_javascript . 'heartbeat.js' );
		$this->add_obs_file( $this->dir_javascript . 'list_properties.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.jgrowl.js' );
		$this->add_obs_file( $this->dir_javascript . 'jquery.jeditable.js' );
		
		$this->add_obs_file( $this->dir_css . 'jquery.jgrowl.css' );
		$this->add_obs_file( $this->dir_css . 'jquery.rating.css' );
		$this->add_obs_file( $this->dir_css . 'tipsy.css' );
		
		$this->add_obs_file( $this->dir_classes . 'jomres_sticky_messages.class.php' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j00035tabcontent_03_slideshow.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j01070showpropertyheader.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00015viewproperty.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00016composite_property_details.class.php' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'admin_list_bookings.html' );
		
		$this->add_obs_file( $this->dir_images . '_star.png' );
		$this->add_obs_file( $this->dir_javascript . JRDS . '_jquery.dataTables.js' );
		$this->add_obs_file( $this->dir_javascript . JRDS . 'jrportal.js' );
		$this->add_obs_file( $this->dir_javascript . JRDS . 'slideshow_themes'. JRDS . 'classic' . JRDS . 'galleria-1.2.5.min.js' );
		$this->add_obs_file( $this->dir_javascript . JRDS . 'slideshow_themes'. JRDS . 'classic' . JRDS . 'galleria-1.2.7.min.js' );
		$this->add_obs_file( $this->dir_javascript . JRDS . 'slideshow_themes'. JRDS . 'classic' . JRDS . 'galleria-1.2.9.min.js' );
		
		$this->add_obs_file( $this->dir_javascript . JRDS . 'graphs.js' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'show_stats.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'admin_chart.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'admin_charts.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'chart.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'charts.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'chart.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'charts.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'chart.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'charts.html' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000showstats.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000getstats.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16010stats_properties_clicks.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16010stats_properties_currentbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16010stats_properties_currentbookings_values.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16020stats_properties_clicks.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16020stats_properties_currentbookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16020stats_properties_currentbookings_values.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000show_charts.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000show_chart.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06001show_chart.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06001show_charts.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j13600sales.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j13600bookings_days.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j13600bookings_rooms.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03600bookings_days.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03600bookings_rooms.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03600sales.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_07_stats.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002stats.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j07020list_properties_awaiting_approval.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002manage_properties.class.php' );
		
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'register_property1.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'register_property2.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'register_property2_realestate.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'register_property1.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'register_property2.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'register_property2_realestate.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'register_property1.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'register_property2.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'register_property2_realestate.html' );
		
		$this->add_obs_dir( $this->dir_core_plugins . JRDS . 'property_creation_plugins' . JRDS );
		
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v5.2.9' . JRDS . 'class.pop3.php' );
		$this->add_obs_file( $this->dir_libraries . 'PHPMailer_v5.2.9' . JRDS . 'class.smtp.php' );
		
		$this->add_obs_file( $this->dir_libraries . 'recaptcha' . JRDS . 'ReCaptcha.php' );
		$this->add_obs_file( $this->dir_libraries . 'recaptcha' . JRDS . 'recaptchalib.php' );
		$this->add_obs_file( $this->dir_libraries . 'recaptcha' . JRDS . 'RequestMethod.php' );
		$this->add_obs_file( $this->dir_libraries . 'recaptcha' . JRDS . 'RequestParameters.php' );
		$this->add_obs_file( $this->dir_libraries . 'recaptcha' . JRDS . 'Response.php' );
		
		$this->add_obs_dir(  $this->dir_libraries . 'recaptcha' . JRDS . 'RequestMethod' . JRDS );
		
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'chart_bar.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'chart_line.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'chart_radar.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'show_chart.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'chart_bar.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'chart_line.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'chart_radar.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'show_chart.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'chart_bar.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'chart_line.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'chart_radar.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'show_chart.html' );
		
		$this->add_obs_dir(  $this->dir_libraries . 'sybio' . JRDS );
		$this->add_obs_dir(  $this->dir_libraries . 'CssMin' . JRDS );
		$this->add_obs_dir(  $this->dir_libraries . 'editor' . JRDS );
		$this->add_obs_dir(  $this->dir_libraries . 'JShrink' . JRDS );
		$this->add_obs_file( $this->dir_classes . 'jomres_css_cache.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jomres_javascript_cache.class.php' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'cookies.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'cookies.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'cookies.html' );

		$this->add_obs_file( $this->dir_minicomponents . 'j00005create_misc_common_strings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_06_slideshows.class.php' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j00011manager_option_10_audittrail.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02250showaudit.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02252archiveaudit.class.php' );
		$this->add_obs_file( $this->dir_templates_bootstrap_frontend . 'audit_trail.html' );
		$this->add_obs_file( $this->dir_templates_bootstrap3_frontend . 'audit_trail.html' );
		$this->add_obs_file( $this->dir_templates_jqueryui_frontend . 'audit_trail.html' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j03380batch_upload_form.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03390upload_business_images.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03400upload_business_image.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03410upload_resource_image.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j03350drop_image.class.php' );
		
		$this->add_obs_dir( $this->dir_libraries . 'pclzip' . JRDS );
		$this->add_obs_file( $this->dir_libraries . 'dUnzip2.inc.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002listCustomFields.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jomres_pathway.class.php' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j00005define_template_paths.class.php' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j00005define_template_paths.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000listPropertyTypes.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002listPropertyTypes.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000editGlobalroomTypes_management_process.class.php' );
		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'management_process.html' );
		$this->add_obs_file( $this->dir_admin_functions . 'propertytypes.functions.php' );
		$this->add_obs_file( $this->dir_admin_functions . 'roomtypes.functions.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02299regprop1_realestate.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02299regprop1_a_roombookings.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000cron_invoice.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000listTemplates.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j10002listTemplates.class.php' );
		$this->add_obs_file( $this->dir_classes . 'jomres_custom_template_handler.class.php' );
		$this->add_obs_dir( $this->dir_javascript . 'codemirror-2.34' . JRDS );
		$this->add_obs_file( $this->dir_minicomponents . 'j02110savecustomertypeorder.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j02112publishcustomertype.class.php' );
		$this->add_obs_file( $this->dir_admin_functions . 'propertyfeatures.functions.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j06000cron_optimise.class.php' );
		
		$this->add_obs_dir( $this->dir_libraries . 'jomres' . JRDS . 'cms_specific' . JRDS . 'wordpress3' . JRDS );

		$this->add_obs_file( $this->dir_admin_functions . 'jomresxml.functions.php' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j10501caching.class.php' );
		
		$this->add_obs_dir( $this->dir_libraries . 'jomres' . JRDS . 'cms_specific' . JRDS . 'joomla15' . JRDS );
		$this->add_obs_dir( $this->dir_libraries . 'jomres' . JRDS . 'cms_specific' . JRDS . 'joomla25' . JRDS );
		$this->add_obs_dir( $this->dir_libraries . 'jomres' . JRDS . 'cms_specific' . JRDS . 'joomla32' . JRDS );
		$this->add_obs_dir( $this->dir_libraries . 'jomres' . JRDS . 'cms_specific' . JRDS . 'joomla33' . JRDS );
		$this->add_obs_dir( $this->dir_libraries . 'jomres' . JRDS . 'cms_specific' . JRDS . 'joomla34' . JRDS );
		$this->add_obs_dir( $this->dir_libraries . 'jomres' . JRDS . 'cms_specific' . JRDS . 'joomla35' . JRDS );
		$this->add_obs_dir( $this->dir_libraries . 'jomres' . JRDS . 'cms_specific' . JRDS . 'joomla36' . JRDS );
		$this->add_obs_file( $this->dir_javascript . 'jquery-2.0.3.js' );
		
		$this->add_obs_file( $this->dir_minicomponents . 'j10002zzz_about_asamodule.class.php' );
		$this->add_obs_file( $this->dir_minicomponents . 'j16000about_asamodule.class.php' );

		$this->add_obs_file( $this->dir_templates_bootstrap_administrator . 'asamodule_report.html' );
		}

	function add_obs_file( $path_and_file )
		{
		if (file_exists($path_and_file))
			$this->obs_files[ ] = $path_and_file;
		}
	
	// Some directories aren't tidied up properly because we used scandir recursive to delete files. This will allow us to completely remove a directory and it's contents.
	function add_obs_dir ( $dir)
		{
		if ( is_dir ($dir))
			$this->obs_directories[] = $dir;
		}
	
	function remove_obs_files()
		{
		$this->success                          = true;
		$this->number_of_files_require_deletion = 0;
		
		$rows = array();
		
		foreach ( $this->obs_directories as $path )
			{
			$this->obsolete_file_message = '';
			if ( !$this->remove_obs_dir( $path ) )
				{
				$pageoutput = array ();
				$output     = array ();

				$output[ 'MESSAGE' ] = $this->obsolete_file_message;
				if ( ( $this->success && $this->warnmode ) )
					{
					$template = 'obsolete_files_warning.html';
					}
				elseif ( !$this->success && $this->warnmode )
					{
					$template = 'obsolete_files_delete_failure.html';
					}
				elseif ( $this->success && !$this->warnmode )
					{
					$template = 'obsolete_files_delete_success.html';
					}
				else
					$template = 'obsolete_files_delete_failure.html';
				
				$this->number_of_files_require_deletion++;

				$pageoutput[ ] = $output;
				$tmpl          = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
				$tmpl->readTemplatesFromInput( $template );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$rows[ ] = array ( "WARNINGS" => $tmpl->getParsedTemplate() );
				}
			}

		foreach ( $this->obs_files as $path_and_file )
			{
			$this->obsolete_file_message = '';
			if ( !$this->remove_obs_file( $path_and_file ) )
				{
				$pageoutput = array ();
				$output     = array ();

				$output[ 'MESSAGE' ] = $this->obsolete_file_message;
				if ( ( $this->success && $this->warnmode ) )
					{
					$template = 'obsolete_files_warning.html';
					}
				elseif ( !$this->success && $this->warnmode )
					{
					$template = 'obsolete_files_delete_failure.html';
					}
				elseif ( $this->success && !$this->warnmode )
					{
					$template = 'obsolete_files_delete_success.html';
					}
				else
					$template = 'obsolete_files_delete_failure.html';
				
				$this->number_of_files_require_deletion++;

				$pageoutput[ ] = $output;
				$tmpl          = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
				$tmpl->readTemplatesFromInput( $template );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$rows[ ] = array ( "WARNINGS" => $tmpl->getParsedTemplate() );

				}
			}


		if ( $this->number_of_files_require_deletion > 0 )
			{
			$pageoutput = array ();
			$output     = array ();

			if ( ( $this->warnmode ) ) $output[ 'DELETION_WARNING' ] = $this->output_file_deletion_warning();
			else
			$output[ 'DELETION_WARNING' ] = '';

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'obsolete_files_wrapper.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$result = $tmpl->getParsedTemplate();

			jr_import( 'minicomponent_registry' );
			$registry = new minicomponent_registry( true );
			$registry->regenerate_registry();

			return $result;
			}
		else
			{
			return '';
			}
		}

	function remove_obs_dir( $path )
		{
		if ( is_dir( $path ) )
			{
			if ( $this->warnmode ) // we're going to pretend to delete the directory.
				{
				if ( is_writable( $path ) )
					{
					$this->obsolete_file_message = 'Directory Delete checking. Directory ' . $path . ' is writable and Jomres would expect to be able to delete it.';
					$this->success               = true;
					}
				else
					{
					$this->obsolete_file_message = 'Directory Delete checking. Directory ' . $path . ' is not writable and Jomres would probably not be able to delete it.';
					$this->success               = false;
					}
				}
			else
				{
				emptyDir ($path);
				if ( !@rmdir( $path ) )
					{
					$this->obsolete_file_message = 'Warning: Directory ' . $path . ' still exists in your system. Jomres has tried to delete it automatically but was unsuccessful. Please delete it.';
					$this->success               = false;
					}
				else
					{
					$this->obsolete_file_message = 'Obsolete Directory ' . $path . ' was removed as it is no longer part of a production installation of Jomres.';
					$this->success               = true;
					}
				}
			return false;
			}
		else
			return true;
		}
	
	function remove_obs_file( $path_and_file )
		{
		if ( file_exists( $path_and_file ) )
			{
			if ( $this->warnmode ) // we're going to pretend to delete the file.
				{
				if ( is_writable( $path_and_file ) )
					{
					$this->obsolete_file_message = 'File Delete checking. File ' . $path_and_file . ' is writable and Jomres would expect to be able to delete it.';
					$this->success               = true;
					}
				else
					{
					$this->obsolete_file_message = 'File Delete checking. File ' . $path_and_file . ' is not writable and Jomres would probably not be able to delete it.';
					$this->success               = false;
					}
				}
			else
				{
				if ( !@unlink( $path_and_file ) )
					{
					$this->obsolete_file_message = 'Warning: file ' . $path_and_file . ' still exists in your system. Jomres has tried to delete it automatically but was unsuccessful. Please delete it.';
					$this->success               = false;
					}
				else
					{
					$this->obsolete_file_message = 'Obsolete file ' . $path_and_file . ' was removed as it is no longer part of a production installation of Jomres.';
					$this->success               = true;
					}
				}

			return false;
			}
		else
		return true;

		}

	function output_file_deletion_warning()
		{
		if ( $this->number_of_files_require_deletion > 0 )
			{
			$output[ 'MESSAGE1' ]  = 'Jomres has found that you have <b>' . $this->number_of_files_require_deletion . '</b> files remaining on the system that should be deleted. ';
			$output[ 'LINKKTEXT' ] = ' Click here to try to remove those files.';
			$output[ 'MESSAGE2' ]  = ' If you need to back them up, do that first please.';
			$output[ 'LINK' ]      = JOMRES_SITEPAGE_URL_ADMIN . '&warnconfirm=1';
			$pageoutput[ ]         = $output;
			$tmpl                  = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'obsolete_files_link.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );

			return $tmpl->getParsedTemplate();
			}
		else
			{
			return '';
			}
		}
	}

?>