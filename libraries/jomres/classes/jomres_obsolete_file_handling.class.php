<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.12.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_obsolete_file_handling
{
	protected $filesystem;
	
	public function __construct()
	{
		$this->obs_files = array();
		$this->obs_directories = array();

		$this->dir_root = JOMRESCONFIG_ABSOLUTE_PATH;
		$this->dir_jomres = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS;
		$this->dir_api = JOMRES_API_ABSPATH;
		$this->dir_minicomponents = JOMRES_APP_ABSPATH;
		$this->dir_classes = JOMRES_CLASSES_ABSPATH;
		$this->dir_functions = JOMRES_FUNCTIONS_ABSPATH;
		$this->dir_libraries = JOMRES_LIBRARIES_ABSPATH;
		$this->dir_core_plugins = JOMRES_COREPLUGINS_ABSPATH;
		$this->dir_css = JOMRES_CSS_ABSPATH;
		$this->dir_javascript = JOMRES_JS_ABSPATH;
		$this->dir_vendor = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'vendor';
		
		$this->dir_templates_jqueryui_frontend = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'jquery_ui'.JRDS.'frontend'.JRDS;
		$this->dir_templates_jqueryui_backend = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'jquery_ui'.JRDS.'backend'.JRDS;
		$this->dir_templates_jqueryui_administrator = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'jquery_ui'.JRDS.'administrator'.JRDS;
		
		$this->dir_templates_bootstrap_frontend = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap'.JRDS.'frontend'.JRDS;
		$this->dir_templates_bootstrap_backend = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap'.JRDS.'backend'.JRDS;
		$this->dir_templates_bootstrap_administrator = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap'.JRDS.'administrator'.JRDS;
		
		$this->dir_templates_bootstrap3_frontend = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap3'.JRDS.'frontend'.JRDS;
		$this->dir_templates_bootstrap3_backend = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap3'.JRDS.'backend'.JRDS;
		$this->dir_templates_bootstrap3_administrator = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap3'.JRDS.'administrator'.JRDS;
		
		$this->dir_templates_bootstrap4_frontend = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap4'.JRDS.'frontend'.JRDS;
		$this->dir_templates_bootstrap4_backend = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap4'.JRDS.'backend'.JRDS;
		$this->dir_templates_bootstrap4_administrator = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap4'.JRDS.'administrator'.JRDS;

		$this->dir_images = JOMRES_IMAGES_ABSPATH;
		$this->dir_images_large = JOMRES_IMAGES_ABSPATH.'jomresimages'.JRDS.'large'.JRDS;
		$this->dir_images_small = JOMRES_IMAGES_ABSPATH.'jomresimages'.JRDS.'small'.JRDS;

		$this->dir_components_administrator = JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ADMINISTRATORDIRECTORY.JRDS.'components'.JRDS.'com_jomres'.JRDS;
		$this->dir_components = JOMRESCONFIG_ABSOLUTE_PATH.'components'.JRDS.'com_jomres'.JRDS;
		
		//jomres filesystem
		//mount the site root dir, not the jomres dir, so we can have access to jomres_webinstall.php or cms files
		$this->filesystem = jomres_singleton_abstract::getInstance('jomres_filesystem', JOMRESCONFIG_ABSOLUTE_PATH)->getFilesystem();
		
		$this->set_default_obs_files_array();
	}

	private function set_default_obs_files_array()
	{
		// New for 5.6.1, we'll now allow plugins to report obsolete files
		$obsolete_plugin_files = get_showtime('obsolete_plugin_files');
		if (!empty($obsolete_plugin_files)) {
			foreach ($obsolete_plugin_files as $file) {
				if (file_exists($file)) {
					$this->add_file($file);
				}
			}
		}

		$this->add_file($this->dir_root.'jomres_webinstall.php');
		$this->add_file($this->dir_minicomponents.'j00011manager.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception.class.php');
		$this->add_file($this->dir_minicomponents.'j00050mumenu.class.php');
		$this->add_file($this->dir_minicomponents.'j00012invoices_link.class.php');
		$this->add_file($this->dir_minicomponents.'j00501jscalendar.class.php');
		$this->add_file($this->dir_minicomponents.'j06000test_unsubscribe.class.php');
		$this->add_file($this->dir_minicomponents.'j03200insertbooking_invoice.class.php');
		$this->add_file($this->dir_minicomponents.'j06000sendbug.class.php');
		$this->add_file($this->dir_minicomponents.'j06000savenote.class.php');
		$this->add_file($this->dir_minicomponents.'j06000saveCoupon.class.php');
		$this->add_file($this->dir_minicomponents.'j06000save_normalmode_tariffs.class.php');
		$this->add_file($this->dir_minicomponents.'j06000preview_email.class.php');
		$this->add_file($this->dir_minicomponents.'j06000listyourproperties.class.php');
		$this->add_file($this->dir_minicomponents.'j06000listoldbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j06000listCoupons.class.php');
		$this->add_file($this->dir_minicomponents.'j06000list_my_subscriptions.class.php');
		$this->add_file($this->dir_minicomponents.'j06000list_guests_invoices.class.php');
		$this->add_file($this->dir_minicomponents.'j06000handlereq_total.class.php');
		$this->add_file($this->dir_minicomponents.'j06000handlereq_deposit.class.php');
		$this->add_file($this->dir_minicomponents.'j06000fe_stats.class.php');
		$this->add_file($this->dir_minicomponents.'j06000editnote.class.php');
		$this->add_file($this->dir_minicomponents.'j06000editinplace.class.php');
		$this->add_file($this->dir_minicomponents.'j06000editCoupon.class.php');
		$this->add_file($this->dir_minicomponents.'j06000delslideshowimages.class.php');
		$this->add_file($this->dir_minicomponents.'j06000deletenote.class.php');
		$this->add_file($this->dir_minicomponents.'j06000deleteCoupon.class.php');
		$this->add_file($this->dir_minicomponents.'j06000amendBooking.class.php');
		$this->add_file($this->dir_minicomponents.'j06000addnote.class.php');
		$this->add_file($this->dir_minicomponents.'j06000reportbug.class.php');
		$this->add_file($this->dir_minicomponents.'j06000my_subscriptions.class.php');
		$this->add_file($this->dir_minicomponents.'j06000list_property_invoices.class.php');
		$this->add_file($this->dir_minicomponents.'j06000list_subscription_packages.class.php');
		$this->add_file($this->dir_minicomponents.'j06000list_usersinvoices.class.php');
		$this->add_file($this->dir_minicomponents.'j06000muaddtofavourites.class.php');
		$this->add_file($this->dir_minicomponents.'j06000mulistbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j06000muviewbooking.class.php');
		$this->add_file($this->dir_minicomponents.'j06000save_subscriber.class.php');
		$this->add_file($this->dir_minicomponents.'j06000subscribe.class.php');
		$this->add_file($this->dir_minicomponents.'j06000view_invoice.class.php');
		$this->add_file($this->dir_minicomponents.'j06000cancelGuestBooking.class.php');
		$this->add_file($this->dir_minicomponents.'j06000muviewfavourites.class.php');
		$this->add_file($this->dir_minicomponents.'j00501slideshows.class.php');
		$this->add_file($this->dir_minicomponents.'j06002list_property_invoices.class.php');
		$this->add_file($this->dir_minicomponents.'j10002addproperty.class.php');

		$this->add_file($this->dir_classes.'tempbookinghandler.class.php');
		$this->add_file($this->dir_classes.'user.class.php');
		$this->add_file($this->dir_classes.'toolbar.class.php');
		$this->add_file($this->dir_classes.'taxrates.class.php');
		$this->add_file($this->dir_classes.'subscriptions_packages.class.php');
		$this->add_file($this->dir_classes.'subscriptions.class.php');
		$this->add_file($this->dir_classes.'subscribers.class.php');
		$this->add_file($this->dir_classes.'sms_clickatell_settings.class.php');
		$this->add_file($this->dir_classes.'sms_clickatell_message.class.php');
		$this->add_file($this->dir_classes.'sms_clickatell_handler.class.php');
		$this->add_file($this->dir_classes.'search.class.php');
		$this->add_file($this->dir_classes.'property.class.php');
		$this->add_file($this->dir_classes.'paypal_settings.class.php');
		$this->add_file($this->dir_classes.'pathway.class.php');
		$this->add_file($this->dir_classes.'paging.php');
		$this->add_file($this->dir_classes.'lineitem.class.php');
		$this->add_file($this->dir_classes.'invoice.class.php');
		$this->add_file($this->dir_classes.'jomresXMLParser.class.php');
		$this->add_file($this->dir_classes.'jomres_contentTabs.class.php');
		$this->add_file($this->dir_classes.'general.classes.php');
		$this->add_file($this->dir_classes.'gateway.class.php');
		$this->add_file($this->dir_classes.'dashboard.class.php');
		$this->add_file($this->dir_classes.'currencyformat.class.php');
		$this->add_file($this->dir_classes.'cron.class.php');
		$this->add_file($this->dir_classes.'crate.class.php');
		$this->add_file($this->dir_classes.'configpanel.class.php');
		$this->add_file($this->dir_classes.'booking.class.php');
		$this->add_file($this->dir_classes.'remote.class.php');
		$this->add_file($this->dir_classes.'ehandler.class.php');
		$this->add_file($this->dir_classes.'browser.class.php');

		$this->add_file($this->dir_functions.'general.functions.php');
		$this->add_file($this->dir_functions.'invoice.functions.php');
		$this->add_file($this->dir_functions.'subscriptions_packages.functions.php');
		$this->add_file($this->dir_functions.'subscribers.functions.php');
		$this->add_file($this->dir_functions.'booking.functions.php');
		$this->add_file($this->dir_functions.'crate.functions.php');
		$this->add_file($this->dir_functions.'property.functions.php');
		$this->add_file($this->dir_functions.'crate.functions.php');
		$this->add_file($this->dir_functions.'user.functions.php');

		$this->add_dir($this->dir_libraries.'PHPMailer_v2.0.0'.JRDS);

		$this->add_file($this->dir_minicomponents.'j00015discounts.class.php');
		$this->add_file($this->dir_minicomponents.'j02130listblackbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j02132blackbooking.class.php');
		$this->add_file($this->dir_minicomponents.'j02134newblackbooking.class.php');
		$this->add_file($this->dir_minicomponents.'j02136saveblackbooking.class.php');
		$this->add_file($this->dir_minicomponents.'j02138deleteblackbooking.class.php');
		$this->add_file($this->dir_minicomponents.'j02182savebookout.class.php');
		$this->add_file($this->dir_minicomponents.'j07010commission_lineitem_insert.class.php');
		$this->add_file($this->dir_minicomponents.'j16000editcrate.class.php');
		$this->add_file($this->dir_minicomponents.'j16000list_commission_invoices.class.php');
		$this->add_file($this->dir_minicomponents.'j16000listcrates.class.php');
		$this->add_file($this->dir_minicomponents.'j16000savecrates.class.php');
		$this->add_file($this->dir_minicomponents.'j00509cheque.class.php');
		$this->add_file($this->dir_minicomponents.'j00510cheque.class.php');
		$this->add_file($this->dir_minicomponents.'j00600cheque.class.php');
		$this->add_file($this->dir_minicomponents.'j00605cheque.class.php');
		$this->add_file($this->dir_minicomponents.'j03108cheque.class.php');
		$this->add_file($this->dir_minicomponents.'j00509paypal.class.php');
		$this->add_file($this->dir_minicomponents.'j00510paypal.class.php');
		$this->add_file($this->dir_minicomponents.'j00605paypal.class.php');
		$this->add_file($this->dir_minicomponents.'j00610paypal.class.php');
		$this->add_file($this->dir_minicomponents.'j03108paypal.class.php');
		$this->add_file($this->dir_minicomponents.'j06000paypal.class.php');
		$this->add_file($this->dir_minicomponents.'j16000paypal_settings.class.php');
		$this->add_file($this->dir_minicomponents.'j16000save_paypal_settings.class.php');
		$this->add_file($this->dir_minicomponents.'j06002deleteCoupon.class.php');
		$this->add_file($this->dir_minicomponents.'j06002editCoupon.class.php');
		$this->add_file($this->dir_minicomponents.'j06002listCoupons.class.php');
		$this->add_file($this->dir_minicomponents.'j06002saveCoupon.class.php');
		$this->add_file($this->dir_minicomponents.'j16000delete_custom_field.class.php');
		$this->add_file($this->dir_minicomponents.'j16000edit_custom_field.class.php');
		$this->add_file($this->dir_minicomponents.'j16000listCustomFields.class.php');
		$this->add_file($this->dir_minicomponents.'j02114listcustomertypes.class.php');
		$this->add_file($this->dir_minicomponents.'j02116editcustomertype.class.php');
		$this->add_file($this->dir_minicomponents.'j02118savecustomertype.class.php');
		$this->add_file($this->dir_minicomponents.'j02120deletecustomertype.class.php');
		$this->add_file($this->dir_minicomponents.'j02140publishextra.class.php');
		$this->add_file($this->dir_minicomponents.'j02142listextras.class.php');
		$this->add_file($this->dir_minicomponents.'j02144editextra.class.php');
		$this->add_file($this->dir_minicomponents.'j02146saveextra.class.php');
		$this->add_file($this->dir_minicomponents.'j16000partner_delete.class.php');
		$this->add_file($this->dir_minicomponents.'j16000partner_delete_discount.class.php');
		$this->add_file($this->dir_minicomponents.'j16000partner_list_discounts.class.php');
		$this->add_file($this->dir_minicomponents.'j16000partner_save_discount_settings.class.php');
		$this->add_file($this->dir_minicomponents.'j16000partner_show.class.php');
		$this->add_file($this->dir_minicomponents.'j16000partner_show_discounts_for_property.class.php');
		$this->add_file($this->dir_minicomponents.'j16000partners_add_property_to_partner_portfolio.class.php');
		$this->add_file($this->dir_minicomponents.'j16000partners_choose.class.php');
		$this->add_file($this->dir_minicomponents.'j16000partners_find.class.php');
		$this->add_file($this->dir_minicomponents.'j16000partners_property_find.class.php');
		$this->add_file($this->dir_minicomponents.'j02310regprop2.class.php');
		$this->add_file($this->dir_minicomponents.'j00501sms_clickatell.class.php');
		$this->add_file($this->dir_minicomponents.'j03100sms_clickatell.class.php');
		$this->add_file($this->dir_minicomponents.'j16000save_sms_clickatell_settings.class.php');
		$this->add_file($this->dir_minicomponents.'j16000sms_clickatell_settings.class.php');
		$this->add_file($this->dir_minicomponents.'j16000delete_subscription.class.php');
		$this->add_file($this->dir_minicomponents.'j16000delete_subscription_package.class.php');
		$this->add_file($this->dir_minicomponents.'j16000edit_subscription_package.class.php');
		$this->add_file($this->dir_minicomponents.'j16000list_subscription_packages.class.php');
		$this->add_file($this->dir_minicomponents.'j16000list_subscriptions.class.php');
		$this->add_file($this->dir_minicomponents.'j16000save_subscription_package.class.php');
		$this->add_file($this->dir_minicomponents.'j16000edit_template.class.php');
		$this->add_file($this->dir_minicomponents.'j16000save_template.class.php');
		$this->add_file($this->dir_minicomponents.'j00509form.class.php');
		$this->add_file($this->dir_minicomponents.'j00510form.class.php');
		$this->add_file($this->dir_minicomponents.'j00600form.class.php');
		$this->add_file($this->dir_minicomponents.'j00605form.class.php');
		$this->add_file($this->dir_minicomponents.'j03108form.class.php');
		$this->add_file($this->dir_minicomponents.'j02230editcreditcard.class.php');
		$this->add_file($this->dir_minicomponents.'j02232savecreditcard.class.php');
		$this->add_file($this->dir_minicomponents.'j00510form.html');
		$this->add_file($this->dir_minicomponents.'j00600form.html');
		$this->add_file($this->dir_minicomponents.'j00510form.gif');
		$this->add_file($this->dir_minicomponents.'j00501xlastminute.class.php');
		$this->add_file($this->dir_minicomponents.'j00501xtariffsenhanced.class.php');
		$this->add_file($this->dir_minicomponents.'j00501xwiseprice.class.php');
		$this->add_file($this->dir_minicomponents.'j02210listtariffs_advanced.class.php');
		$this->add_file($this->dir_minicomponents.'j02211listtariffs_micromanage.class.php');
		$this->add_file($this->dir_minicomponents.'j02212edittariff_advanced.class.php');
		$this->add_file($this->dir_minicomponents.'j02213edittariff_micromanage.class.php');
		$this->add_file($this->dir_minicomponents.'j02214savetariff_advanced.class.php');
		$this->add_file($this->dir_minicomponents.'j02215savetariff_micromanage.class.php');
		$this->add_file($this->dir_minicomponents.'j02216deletetariff.class.php');
		$this->add_file($this->dir_minicomponents.'j02217deletetariff.class.php');
		$this->add_file($this->dir_minicomponents.'j00510cheque.html');
		$this->add_file($this->dir_minicomponents.'j00510paypal.html');
		$this->add_file($this->dir_minicomponents.'j00600cheque.html');
		$this->add_file($this->dir_minicomponents.'j00510cheque.gif');
		$this->add_file($this->dir_minicomponents.'j00510paypal.gif');
		$this->add_file($this->dir_minicomponents.'j10002new_property.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_03_01_blank.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_05_01_blank.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_07_01_blank.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_04_01_blank.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_07_01_blank.class.php');
		$this->add_file($this->dir_minicomponents.'j00008user_toolbars.class.php.class.php');
		$this->add_file($this->dir_minicomponents.'j00007manager_toolbar.class.php.class.php');
		$this->add_file($this->dir_minicomponents.'j00008user_toolbars.class.php.class.php');
		$this->add_file($this->dir_minicomponents.'j00006reception_toolbar.class.php');
		$this->add_file($this->dir_minicomponents.'j00007manager_toolbar.class.php');
		$this->add_file($this->dir_minicomponents.'j00008user_toolbars.class.php');
		$this->add_file($this->dir_minicomponents.'j00013a_listyourproperties.class.php');
		$this->add_file($this->dir_minicomponents.'j01009filterproperties.class.php');

		$this->add_file($this->dir_libraries.'hn_captcha'.JRDS.'fonts'.JRDS.'abbeymediumextended.ttf');
		$this->add_file($this->dir_libraries.'hn_captcha'.JRDS.'hn_captcha.class.php');
		$this->add_file($this->dir_libraries.'hn_captcha'.JRDS.'hn_captcha.class-php5.php');
		$this->add_file($this->dir_libraries.'hn_captcha'.JRDS.'index.html');

		// Jomres v7
		$this->add_file($this->dir_classes.'cpanel.class.php');
		
		$this->add_file($this->dir_minicomponents.'j16000add_adhoc_item_to_bill.class.php');
		$this->add_file($this->dir_minicomponents.'j10002add_adhoc_item_to_bill.class.php');
		$this->add_file($this->dir_minicomponents.'j16000addproperty.class.php');
		$this->add_file($this->dir_minicomponents.'j16000addproperty2.class.php');
		$this->add_file($this->dir_minicomponents.'j00501editingmode.class.php');

		if (this_cms_is_joomla()) {
			$this->add_file($this->dir_components_administrator.'admin.jomres.php');
		}

		$this->add_dir($this->dir_core_plugins.'qr_code_lib'.JRDS.'library');

		$this->add_file($this->dir_core_plugins.'qr_code_lib'.JRDS.'j00001qr_code_lib.class.php');

		$this->add_file($this->dir_minicomponents.'j16000save_custom_field.class.php');

		// 7.5.3
		$this->add_file($this->dir_minicomponents.'j00012manager_first_run.class.php');

		// 8.0
		$this->add_file($this->dir_classes.'jomres_dashboard.class.php');

		$this->add_file($this->dir_minicomponents.'j00501avlcal.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_01_switch_property.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_02_preview.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_06_listnewbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_06_listoldbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_08_publish.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_09_myproperties.class.php');
		$this->add_file($this->dir_minicomponents.'j00013x_listyourproperties.class.php');
		$this->add_file($this->dir_minicomponents.'j02242listnewbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j06001listoldbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j06001switch_active_property.class.php');
		$this->add_file($this->dir_minicomponents.'j06001ui_find_properties.class.php');
		$this->add_file($this->dir_minicomponents.'j06002listyourproperties.class.php');
		$this->add_file($this->dir_minicomponents.'j06002listyourproperties_ajax.class.php');
		$this->add_file($this->dir_minicomponents.'j06002my_commission_invoices.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_14_mycommission_invoices.class.php');
		$this->add_file($this->dir_minicomponents.'j06001list_property_invoices.class.php');
		$this->add_file($this->dir_minicomponents.'j06001list_guests_invoices.class.php');
		$this->add_file($this->dir_minicomponents.'j06005list_usersinvoices.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_03_myproperties.class.php');
		$this->add_file($this->dir_minicomponents.'j06001bootstrap_dashboard_ajax.class.php');
		$this->add_file($this->dir_minicomponents.'j06001bootstrap_dashboard.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_05_listallbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j02240listlivebookings.class.php');
		$this->add_file($this->dir_minicomponents.'j06001listlivebookings_ajax.class.php');
		$this->add_file($this->dir_minicomponents.'j00020tagsearch.class.php');
		$this->add_file($this->dir_minicomponents.'j00501bookings1.class.php');
		$this->add_file($this->dir_minicomponents.'j00501gallery.class.php');
		$this->add_file($this->dir_minicomponents.'j00501odds.class.php');
		$this->add_file($this->dir_minicomponents.'j00501required.class.php');
		$this->add_file($this->dir_minicomponents.'j00501srps.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_03_propertyconfig.class.php');
		$this->add_file($this->dir_minicomponents.'j03320business_settings.class.php');
		$this->add_file($this->dir_minicomponents.'j03330save_business_settings.class.php');
		$this->add_file($this->dir_minicomponents.'j04070editroomfeature.class.php');
		$this->add_file($this->dir_minicomponents.'j04080saveroomfeature.class.php');
		$this->add_file($this->dir_minicomponents.'j04090deleteroomfeature.class.php');
		$this->add_file($this->dir_minicomponents.'j06002reportbug.class.php');
		$this->add_file($this->dir_minicomponents.'j06002sendbug.class.php');
		$this->add_file($this->dir_minicomponents.'j00003mobile.class.php');
		$this->add_file($this->dir_minicomponents.'j10002listRfeatures.class.php');
		$this->add_file($this->dir_minicomponents.'j16000deleteRfeature.class.php');
		$this->add_file($this->dir_minicomponents.'j16000editRfeature.class.php');
		$this->add_file($this->dir_minicomponents.'j16000listRfeatures.class.php');
		$this->add_file($this->dir_minicomponents.'j04010editroom.class.php');
		$this->add_file($this->dir_minicomponents.'j04020saveroom.class.php');
		$this->add_file($this->dir_minicomponents.'j04030deleteroom.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_02_propertyadmin.class.php');
		$this->add_file($this->dir_minicomponents.'j04000roomsconfig.class.php');
		$this->add_file($this->dir_minicomponents.'j04005roomsconfig.class.php');

		$this->add_dir($this->dir_jomres.'templates'.JRDS.'jomres');
		$this->add_dir($this->dir_jomres.'libraries'.JRDS.'PHPMailer_v5.1');
		$this->add_dir($this->dir_jomres.'javascript'.JRDS.'codemirror');
		$this->add_dir($this->dir_jomres.'javascript'.JRDS.'jquerytabs');
		$this->add_dir($this->dir_jomres.'javascript'.JRDS.'bootstrap_dashboard');
		$this->add_dir($this->dir_jomres.'libraries'.JRDS.'bootstrap_dashboard');
		$this->add_dir($this->dir_jomres.'templates'.JRDS.'jquery_ui'.JRDS.'templates');

		$this->add_file($this->dir_minicomponents.'j00011manager_option_11_debugging.class.php');
		$this->add_file($this->dir_minicomponents.'j02265viewbookingnotes.class.php');
		$this->add_file($this->dir_minicomponents.'j03110guestconfirmationemail.class.php');
		$this->add_file($this->dir_minicomponents.'j03100hotelconfirmationemail.class.php');
		$this->add_file($this->dir_minicomponents.'j03100adminconfirmationemail.class.php');
		$this->add_file($this->dir_minicomponents.'j02190confirmationform.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_07_bookaguestin.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_08_bookaguestout.class.php');
		
		$this->add_file($this->dir_classes.'jomres_cache.class.php');

		$this->add_file($this->dir_minicomponents.'j00004x_init_javascript_css_files.class.php');

		$this->add_file($this->dir_minicomponents.'j99999pack_javascript.class.php');

		$this->add_dir($this->dir_libraries.'fullscreen_view'.JRDS.'bootstrap3'.JRDS.'dist');

		$this->add_file($this->dir_minicomponents.'j03020insertbooking_amendinvoice.class.php');
		$this->add_file($this->dir_minicomponents.'j00013dashboard.class.php');

		$this->add_file($this->dir_classes.'invoicehandler.class.php');
		$this->add_file($this->dir_classes.'jrportal_lineitem.class.php');
		$this->add_file($this->dir_minicomponents.'j10002listbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j16000listbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j10002commission_invoices.class.php');
		$this->add_file($this->dir_minicomponents.'j16000list_usersinvoices.class.php');
		$this->add_file($this->dir_minicomponents.'j16000savecrate.class.php');
		$this->add_file($this->dir_minicomponents.'j16000archivecrates.class.php');
		$this->add_file($this->dir_minicomponents.'j10002listcrates.class.php');
		$this->add_file($this->dir_minicomponents.'j10002listpropertys.class.php');
		$this->add_file($this->dir_minicomponents.'j16000viewproperty.class.php');
		$this->add_file($this->dir_minicomponents.'j16000saveregisterprop.class.php');
		$this->add_file($this->dir_minicomponents.'j16000ajax_list_properties_awaiting_approval.class.php');
		$this->add_file($this->dir_minicomponents.'j16000list_properties_awaiting_approval.class.php');
		$this->add_file($this->dir_minicomponents.'j16000listpropertys.class.php');
		$this->add_file($this->dir_minicomponents.'j16000list_properties_initials.class.php');
		$this->add_file($this->dir_minicomponents.'j06002suspended.class.php');
		$this->add_file($this->dir_minicomponents.'j06000cron_subscriptions.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_13_mysubscriptions.class.php');
		$this->add_file($this->dir_minicomponents.'j06002list_my_subscriptions.class.php');
		$this->add_file($this->dir_minicomponents.'j06002my_subscriptions.class.php');
		$this->add_file($this->dir_minicomponents.'j06005list_subscription_packages.class.php');
		$this->add_file($this->dir_minicomponents.'j10002subscriptions.class.php');
		$this->add_file($this->dir_minicomponents.'j10002subscriptions_packages.class.php');
		$this->add_file($this->dir_minicomponents.'j06005subscribe.class.php');
		$this->add_file($this->dir_minicomponents.'j06005save_subscriber.class.php');
		$this->add_file($this->dir_minicomponents.'j06000canc_subscribed.class.php');
		$this->add_file($this->dir_minicomponents.'j06000subscribed.class.php');
		$this->add_file($this->dir_minicomponents.'j00050subscriptions.class.php');
		$this->add_file($this->dir_minicomponents.'j06002cannot_publish.class.php');

		$this->add_file($this->dir_classes.'crateTypes.class.php');
		$this->add_file($this->dir_classes.'jrportal_crate.class.php');
		$this->add_file($this->dir_classes.'jrportal_crate_functions.class.php');
		$this->add_file($this->dir_classes.'jomres_property_maker.class.php');
		$this->add_file($this->dir_classes.'jrportal_property.class.php');
		$this->add_file($this->dir_classes.'jrportal_booking.class.php');
		$this->add_file($this->dir_classes.'jrportal_booking_functions.class.php');
		$this->add_file($this->dir_classes.'jrportal_user.class.php');
		$this->add_file($this->dir_classes.'jrportal_subscribers.class.php');
		$this->add_file($this->dir_classes.'jrportal_subscriptions_packages.class.php');

		$this->add_file($this->dir_minicomponents.'j10002showSiteConfig.class.php');
		$this->add_file($this->dir_minicomponents.'j16000saveRfeature.class.php');
		$this->add_file($this->dir_minicomponents.'j06002fe_stats.class.php');
		$this->add_file($this->dir_classes.'jomres_property_room_features.class.php');
		$this->add_file($this->dir_minicomponents.'j01055showroomdetails.class.php');
		$this->add_file($this->dir_minicomponents.'j06000show_property_room_features.class.php');
		$this->add_file($this->dir_minicomponents.'j06000list_gateways_for_invoice.class.php');
		$this->add_file($this->dir_minicomponents.'j10002paypal.class.php');

		$this->add_file($this->dir_classes.'jomres_sticky_messages.class.php');

		$this->add_file($this->dir_minicomponents.'j00035tabcontent_03_slideshow.class.php');
		$this->add_file($this->dir_minicomponents.'j01070showpropertyheader.class.php');
		$this->add_file($this->dir_minicomponents.'j00015viewproperty.class.php');
		$this->add_file($this->dir_minicomponents.'j00016composite_property_details.class.php');

		$this->add_file($this->dir_minicomponents.'j16000showstats.class.php');
		$this->add_file($this->dir_minicomponents.'j16000getstats.class.php');
		$this->add_file($this->dir_minicomponents.'j16010stats_properties_clicks.class.php');
		$this->add_file($this->dir_minicomponents.'j16010stats_properties_currentbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j16010stats_properties_currentbookings_values.class.php');
		$this->add_file($this->dir_minicomponents.'j16020stats_properties_clicks.class.php');
		$this->add_file($this->dir_minicomponents.'j16020stats_properties_currentbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j16020stats_properties_currentbookings_values.class.php');
		$this->add_file($this->dir_minicomponents.'j16000show_charts.class.php');
		$this->add_file($this->dir_minicomponents.'j16000show_chart.class.php');
		$this->add_file($this->dir_minicomponents.'j06001show_chart.class.php');
		$this->add_file($this->dir_minicomponents.'j06001show_charts.class.php');
		$this->add_file($this->dir_minicomponents.'j13600sales.class.php');
		$this->add_file($this->dir_minicomponents.'j13600bookings_days.class.php');
		$this->add_file($this->dir_minicomponents.'j13600bookings_rooms.class.php');
		$this->add_file($this->dir_minicomponents.'j03600bookings_days.class.php');
		$this->add_file($this->dir_minicomponents.'j03600bookings_rooms.class.php');
		$this->add_file($this->dir_minicomponents.'j03600sales.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_07_stats.class.php');
		$this->add_file($this->dir_minicomponents.'j10002stats.class.php');
		$this->add_file($this->dir_minicomponents.'j07020list_properties_awaiting_approval.class.php');
		$this->add_file($this->dir_minicomponents.'j10002manage_properties.class.php');

		$this->add_dir($this->dir_core_plugins.JRDS.'property_creation_plugins'.JRDS);

		$this->add_file($this->dir_libraries.'recaptcha'.JRDS.'ReCaptcha.php');
		$this->add_file($this->dir_libraries.'recaptcha'.JRDS.'recaptchalib.php');
		$this->add_file($this->dir_libraries.'recaptcha'.JRDS.'RequestMethod.php');
		$this->add_file($this->dir_libraries.'recaptcha'.JRDS.'RequestParameters.php');
		$this->add_file($this->dir_libraries.'recaptcha'.JRDS.'Response.php');
		$this->add_dir($this->dir_libraries.'recaptcha'.JRDS.'RequestMethod'.JRDS);
		$this->add_dir($this->dir_libraries.'sybio'.JRDS);
		$this->add_dir($this->dir_libraries.'CssMin'.JRDS);
		$this->add_dir($this->dir_libraries.'editor'.JRDS);
		$this->add_dir($this->dir_libraries.'JShrink'.JRDS);
		$this->add_file($this->dir_classes.'jomres_css_cache.class.php');
		$this->add_file($this->dir_classes.'jomres_javascript_cache.class.php');

		$this->add_file($this->dir_minicomponents.'j00005create_misc_common_strings.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_06_slideshows.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_10_audittrail.class.php');
		$this->add_file($this->dir_minicomponents.'j02250showaudit.class.php');
		$this->add_file($this->dir_minicomponents.'j02252archiveaudit.class.php');
		$this->add_file($this->dir_minicomponents.'j03380batch_upload_form.class.php');
		$this->add_file($this->dir_minicomponents.'j03390upload_business_images.class.php');
		$this->add_file($this->dir_minicomponents.'j03400upload_business_image.class.php');
		$this->add_file($this->dir_minicomponents.'j03410upload_resource_image.class.php');
		$this->add_file($this->dir_minicomponents.'j03350drop_image.class.php');

		$this->add_dir($this->dir_libraries.'pclzip'.JRDS);
		$this->add_file($this->dir_libraries.'dUnzip2.inc.php');
		$this->add_file($this->dir_minicomponents.'j10002listCustomFields.class.php');
		$this->add_file($this->dir_classes.'jomres_pathway.class.php');

		$this->add_file($this->dir_minicomponents.'j00005define_template_paths.class.php');

		$this->add_file($this->dir_minicomponents.'j00005define_template_paths.class.php');
		$this->add_file($this->dir_minicomponents.'j16000listPropertyTypes.class.php');
		$this->add_file($this->dir_minicomponents.'j10002listPropertyTypes.class.php');
		$this->add_file($this->dir_minicomponents.'j16000editGlobalroomTypes_management_process.class.php');
		$this->add_file($this->dir_minicomponents.'j02299regprop1_realestate.class.php');
		$this->add_file($this->dir_minicomponents.'j02299regprop1_a_roombookings.class.php');
		$this->add_file($this->dir_minicomponents.'j06000cron_invoice.class.php');
		$this->add_file($this->dir_minicomponents.'j16000listTemplates.class.php');
		$this->add_file($this->dir_minicomponents.'j10002listTemplates.class.php');
		$this->add_file($this->dir_classes.'jomres_custom_template_handler.class.php');
		$this->add_file($this->dir_minicomponents.'j02110savecustomertypeorder.class.php');
		$this->add_file($this->dir_minicomponents.'j02112publishcustomertype.class.php');
		$this->add_file($this->dir_minicomponents.'j06000cron_optimise.class.php');

		$this->add_file($this->dir_minicomponents.'j10501caching.class.php');

		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'jomressa'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla16'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla17'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla25'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla30'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla31'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla32'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla33'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla34'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla35'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla36'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'wordpress3'.JRDS);

		$this->add_file($this->dir_minicomponents.'j10002zzz_about_asamodule.class.php');
		$this->add_file($this->dir_minicomponents.'j16000about_asamodule.class.php');
		$this->add_file($this->dir_minicomponents.'j16000manual.class.php');
		$this->add_file($this->dir_minicomponents.'j16000my_account.class.php');
		$this->add_file($this->dir_minicomponents.'j16000support_tickets.class.php');
		$this->add_file($this->dir_minicomponents.'j16000about_jomres.class.php');
		$this->add_file($this->dir_minicomponents.'j16000about_shortcodes.class.php');

		$this->add_file($this->dir_classes.'jomres_pageview_record.class.php');

		$this->add_file($this->dir_minicomponents.'j06000cron_exchangerates.class.php');
		$this->add_file($this->dir_minicomponents.'j16000property_manager_unsuspend.class.php');
		$this->add_file($this->dir_minicomponents.'j16000property_manager_suspend.class.php');
		$this->add_file($this->dir_minicomponents.'j16000managers_choose.class.php');
		$this->add_file($this->dir_minicomponents.'j16000managers_find.class.php');
		$this->add_file($this->dir_minicomponents.'j16000new_manager_api_key.class.php');
		$this->add_file($this->dir_minicomponents.'j16000edit_manager.class.php');
		$this->add_file($this->dir_minicomponents.'j10002listMosUsers.class.php');
		
		$this->add_file($this->dir_classes.'jrportal_user_functions.class.php');
		
		$this->add_file($this->dir_minicomponents.'j03360edit_custom_text.class.php');
		$this->add_file($this->dir_minicomponents.'j03370save_custom_text.class.php');
		$this->add_file($this->dir_minicomponents.'j02234canceleditcreditcard.class.php');
		$this->add_file($this->dir_minicomponents.'j04040editroomtype.class.php');
		$this->add_file($this->dir_minicomponents.'j04050saveroomtype.class.php');
		$this->add_file($this->dir_minicomponents.'j04060deleteroomtype.class.php');
		$this->add_file($this->dir_minicomponents.'j04100editpropertyfeature.class.php');
		$this->add_file($this->dir_minicomponents.'j04110savepropertyfeature.class.php');
		$this->add_file($this->dir_minicomponents.'j04120deletepropertyfeature.class.php');
		$this->add_file($this->dir_minicomponents.'j16000additemtobill.class.php');
		$this->add_file($this->dir_minicomponents.'j16000clearLog.class.php');
		$this->add_file($this->dir_minicomponents.'j16000showLog.class.php');
		$this->add_file($this->dir_minicomponents.'j16000edit_invoice.class.php');
		$this->add_file($this->dir_minicomponents.'j16000save_invoice.class.php');
		$this->add_file($this->dir_minicomponents.'j16000listLogs.class.php');
		$this->add_file($this->dir_minicomponents.'j16000jomres_writability_check.class.php');
	 
		$this->add_dir($this->dir_libraries.'PHPMailer_v5.2.9'.JRDS);
		$this->add_dir($this->dir_libraries.'PHPMailer-v5.2.19'.JRDS);
		
		$this->add_file($this->dir_minicomponents.'j01020showtariffs.class.php');
		
		$this->add_file($this->dir_minicomponents.'j02222editguest.class.php');
		$this->add_file($this->dir_minicomponents.'j02224saveguest.class.php');
		$this->add_file($this->dir_minicomponents.'j02226deleteguest.class.php');
		$this->add_file($this->dir_minicomponents.'j06005report_review.class.php');
		$this->add_file($this->dir_minicomponents.'j00001functioncall_get_booking_link.class.php');
		$this->add_file($this->dir_functions.'get_booking_link.php');
		$this->add_file($this->dir_minicomponents.'j06005review_confirm.class.php');
		$this->add_file($this->dir_minicomponents.'j10002media_centre_features_images.class.php');
		$this->add_file($this->dir_minicomponents.'j11010media_centre_feature_images_propertyfeatures.class.php');
		$this->add_file($this->dir_minicomponents.'j11040features_images.class.php');
		$this->add_file($this->dir_minicomponents.'j07110media_centre_upload_context_features_images.class.php');
		$this->add_file($this->dir_minicomponents.'j11010media_centre_feature_images_roomtypes.class.php');
		$this->add_file($this->dir_minicomponents.'j03379media_centre_resource_type_property.class.php');
		$this->add_file($this->dir_minicomponents.'j07110media_centre_upload_context_properties.class.php');
		$this->add_file($this->dir_minicomponents.'j03383properties.class.php');
		$this->add_file($this->dir_minicomponents.'j07100media_centre_uploader_contexts.class.php');
		$this->add_file($this->dir_minicomponents.'j03379media_centre_resource_type_rooms.class.php');
		$this->add_file($this->dir_minicomponents.'j03379media_centre_resource_type_slideshow.class.php');
		$this->add_file($this->dir_classes.'map_markers.class.php');
		$this->add_file($this->dir_minicomponents.'j00012managelogs.class.php');
		$this->add_file($this->dir_minicomponents.'j10002pseudocron.class.php');
		$this->add_file($this->dir_minicomponents.'j16000pseudocron.class.php');
		$this->add_file($this->dir_minicomponents.'j06002delslideshowimages.class.php');
		$this->add_file($this->dir_classes.'javascript_cache.class.php');
		$this->add_file($this->dir_classes.'jomres_access_control_controlable.class.php');
		$this->add_file($this->dir_minicomponents.'j10501contact_settings.class.php');
		$this->add_dir(JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'admin'.JRDS);
		$this->add_file($this->dir_classes.'jrportal_sms_clickatell_settings.class.php');
		$this->add_dir($this->dir_libraries.'MobileDetect'.JRDS);
		$this->add_file($this->dir_minicomponents.'j10002sms_clickatell.class.php');

		// Jomres 9.9
		
		$this->add_file($this->dir_minicomponents.'j10501recaptcha.class.php');
		$this->add_file($this->dir_minicomponents.'j10501navbar.class.php');
		$this->add_file($this->dir_classes.'jrportal_sms_clickatell_message.class.php');
		$this->add_file($this->dir_classes.'jrportal_sms_clickatellhandler.class.php');
		$this->add_file($this->dir_minicomponents.'j10002chooseLanguages.class.php');
		$this->add_file($this->dir_minicomponents.'j16000save_languageChoiceSelection.class.php');
		$this->add_file($this->dir_minicomponents.'j16000chooseLanguages.class.php');
		$this->add_file($this->dir_functions.'handlereq.php');
		$this->add_file($this->dir_minicomponents.'j02300regprop1.class.php');
		$this->add_file($this->dir_minicomponents.'j02320regprop3.class.php');
		$this->add_file($this->dir_minicomponents.'j03310save_plugin.class.php');
		$this->add_file($this->dir_minicomponents.'j03340publish_business.class.php');
		$this->add_file($this->dir_minicomponents.'j04200editproperty.class.php');
		$this->add_file($this->dir_minicomponents.'j04900saveproperty.class.php');
		$this->add_file($this->dir_minicomponents.'j04910deleteproperty.class.php');
		$this->add_file($this->dir_functions.'build_product_tour_files.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_04_blackbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_05_extrasadmin.class.php');
		$this->add_file($this->dir_minicomponents.'j02148deleteextra.class.php');
		$this->add_file($this->dir_minicomponents.'j02150addservicetobill.class.php');
		$this->add_file($this->dir_minicomponents.'j02162savecancellation.class.php');
		$this->add_file($this->dir_minicomponents.'j02160cancelbooking.class.php');
		$this->add_file($this->dir_minicomponents.'j02260editbooking.class.php');
		$this->add_file($this->dir_minicomponents.'j02220listguests.class.php');
		$this->add_file($this->dir_minicomponents.'j02200editdeposit.class.php');
		$this->add_file($this->dir_minicomponents.'j02202savedeposit.class.php');
		$this->add_file($this->dir_minicomponents.'j02270error.class.php');
		$this->add_file($this->dir_minicomponents.'j01025showtariffs.class.php');
		$this->add_file($this->dir_minicomponents.'j02272publishprop.class.php');
		$this->add_file($this->dir_minicomponents.'j00030search.class.php');
		$this->add_file($this->dir_minicomponents.'j00018MRPavailabilitycalendar.class.php');
		$this->add_file($this->dir_minicomponents.'j00017SRPavailabilitycalendar.class.php');
		$this->add_file($this->dir_minicomponents.'j07020list_reviews.class.php');
		$this->add_file($this->dir_minicomponents.'j16000jomres_overview.class.php');
		$this->add_file($this->dir_minicomponents.'j10002AAA_controlpanel.class.php');
		$this->add_file($this->dir_minicomponents.'j10002AAA_getting_started.class.php');
		$this->add_file($this->dir_minicomponents.'j10002access_control.class.php');
		$this->add_file($this->dir_minicomponents.'j10002approvals.class.php');
		$this->add_file($this->dir_minicomponents.'j10002asamodule_report.class.php');
		$this->add_file($this->dir_minicomponents.'j10002booking_data_archive.class.php');
		$this->add_file($this->dir_minicomponents.'j10002changelog.class.php');
		$this->add_file($this->dir_minicomponents.'j10002charts.class.php');
		$this->add_file($this->dir_minicomponents.'j10002export_definitions.class.php');
		$this->add_file($this->dir_minicomponents.'j10002filesystem_integrity_check.class.php');
		$this->add_file($this->dir_minicomponents.'j10002invoices.class.php');
		$this->add_file($this->dir_minicomponents.'j10002list_countries.class.php');
		$this->add_file($this->dir_minicomponents.'j10002list_gateways.class.php');
		$this->add_file($this->dir_minicomponents.'j10002list_property_types.class.php');
		$this->add_file($this->dir_minicomponents.'j10002list_regions.class.php');
		$this->add_file($this->dir_minicomponents.'j10002list_tax_rules.class.php');
		$this->add_file($this->dir_minicomponents.'j10002list_users.class.php');
		$this->add_file($this->dir_minicomponents.'j10002listGlobalroomTypes.class.php');
		$this->add_file($this->dir_minicomponents.'j10002listLogs.class.php');
		$this->add_file($this->dir_minicomponents.'j10002listPfeatures.class.php');
		$this->add_file($this->dir_minicomponents.'j10002listPfeaturesCategories.class.php');
		$this->add_file($this->dir_minicomponents.'j10002manual_online.class.php');
		$this->add_file($this->dir_minicomponents.'j10002media_centre.class.php');
		$this->add_file($this->dir_minicomponents.'j10002my_account.class.php');
		$this->add_file($this->dir_minicomponents.'j10002partners.class.php');
		$this->add_file($this->dir_minicomponents.'j10002partners_choose.class.php');
		$this->add_file($this->dir_minicomponents.'j10002rebuildregistry.class.php');
		$this->add_file($this->dir_minicomponents.'j10002reviews.class.php');
		$this->add_file($this->dir_minicomponents.'j10002showplugins.class.php');
		$this->add_file($this->dir_minicomponents.'j10002site_settings.class.php');
		$this->add_file($this->dir_minicomponents.'j10002taxrates.class.php');
		$this->add_file($this->dir_minicomponents.'j10002tickets.class.php');
		$this->add_file($this->dir_minicomponents.'j10002touch_templates.class.php');
		$this->add_file($this->dir_minicomponents.'j10002translate_lang_file_strings.class.php');
		$this->add_file($this->dir_minicomponents.'j10002translate_locales.class.php');
		$this->add_file($this->dir_minicomponents.'j10002updates.class.php');
		$this->add_file($this->dir_minicomponents.'j10002zzz_about.class.php');
		$this->add_file($this->dir_minicomponents.'j10002zzz_about_shortcodes.class.php');
		$this->add_file($this->dir_minicomponents.'j10003control_panel_buttons.class.php');
		$this->add_file($this->dir_minicomponents.'j10004generate_control_panel.class.php');
		$this->add_file($this->dir_classes.'html_functions.class.php');
		$this->add_file($this->dir_minicomponents.'j00009user_option_01_listbookings.class.php');
		$this->add_file($this->dir_minicomponents.'j00009user_option_01_myfavourites.class.php');
		$this->add_file($this->dir_minicomponents.'j00009user_option_02_addfavourite.class.php');
		$this->add_file($this->dir_minicomponents.'j00009user_option_03_login.class.php');
		$this->add_file($this->dir_minicomponents.'j00009user_option_03_logout.class.php');
		$this->add_file($this->dir_minicomponents.'j00009user_option_03_my_account.class.php');
		$this->add_file($this->dir_minicomponents.'j00009user_option_03_reglink.class.php');
		$this->add_file($this->dir_minicomponents.'j00009user_option_03_search.class.php');
		$this->add_file($this->dir_minicomponents.'j00009user_option_05_add_your_property.class.php');
		$this->add_file($this->dir_minicomponents.'j00009user_option_05_myinvoices.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_01_home.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_01_wp_control_panel.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_03_dobooking.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_05_list_bookings.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_06_newguest.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_08_listguests.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_08_myproperties.class.php');
		$this->add_file($this->dir_minicomponents.'j00010reception_option_09_list_invoices.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_01_propertydetails.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_01_resources.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_01_tariffs.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_03_business_settings.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_03_emails.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_04_guesttypeadmin.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_05_couponadmin.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_05_media_centre.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_07_charts.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_09_newproperty.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_12_deleteproperty.class.php');
		$this->add_file($this->dir_minicomponents.'j00011manager_option_15_preview.class.php');
		$this->add_file($this->dir_minicomponents.'j99995jomres_mainmenu.class.php');
		$this->add_file($this->dir_minicomponents.'j99996mainmenu_buttons.class.php');
		$this->add_file($this->dir_minicomponents.'j99997generate_mainmenu.class.php');
		$this->add_file($this->dir_minicomponents.'j10501reviews.class.php');
		$this->add_file($this->dir_minicomponents.'j06000feature_not_available.class.php');
		$this->add_file($this->dir_minicomponents.'j00005asamodule_report_tasks.class.php');
		$this->add_file($this->dir_minicomponents.'j16000access_control.class.php');
		$this->add_file($this->dir_minicomponents.'j16000ajax_change_access_level.class.php');
		$this->add_file($this->dir_classes.'jomres_performance_monitor.class.php');
		$this->add_file($this->dir_minicomponents.'j16000delete_template.class.php');
		$this->add_file($this->dir_classes.'jomres_usage_reporting.class.php');
		$this->add_file($this->dir_minicomponents.'j16000enable_usage_reporting.class.php');
		$this->add_file($this->dir_minicomponents.'j16000usage_reporting_request.class.php');
		$this->add_dir($this->dir_libraries.JRDS.'piwik'.JRDS);
		$this->add_file($this->dir_minicomponents.'j06001dashboard_weekly_percentages.class.php');
		$this->add_file($this->dir_minicomponents.'j06002edit_booking.class.php');
		$this->add_file($this->dir_minicomponents.'j16000key_saved_check.class.php');
		$this->add_file($this->dir_classes.'jomres_frontend_configuration_level.class.php');
		$this->add_file($this->dir_minicomponents.'j06001set_config_level.class.php');
		$this->add_dir($this->dir_libraries.'json'.JRDS);
		$this->add_dir($this->dir_libraries.'htmlpurifier'.JRDS);
		$this->add_dir($this->dir_libraries.'idna_converter'.JRDS);
		$this->add_dir($this->dir_libraries.'nusoap'.JRDS);
		$this->add_dir($this->dir_libraries.'Parsedown'.JRDS);
		$this->add_dir($this->dir_libraries.'PHPMailer-5.2.21'.JRDS);
		$this->add_dir($this->dir_libraries.'qr_code_lib'.JRDS);
		$this->add_dir($this->dir_libraries.'recaptcha'.JRDS);
		$this->add_dir($this->dir_libraries.'adodb'.JRDS);
		$this->add_file($this->dir_minicomponents.'j05010handlereq.class.php');
		$this->add_dir($this->dir_libraries.'phptools'.JRDS.'Parsedown'.JRDS);
		$this->add_file($this->dir_minicomponents.'j99994user_feedback.class.php');
		$this->add_file($this->dir_functions.'imagehandling.php');
		$this->add_file($this->dir_libraries.'http_build_url.php');
		$this->add_file($this->dir_minicomponents.'j00001functioncall_output_filters.class.php');
		
		$this->add_dir($this->dir_api.'vendor'.JRDS);
		$this->add_file($this->dir_api.'composer.json');
		
		$this->add_file($this->dir_minicomponents.'j16000prices.class.php');
		$this->add_file($this->dir_classes.'shortcode_parser.class.php');
		$this->add_file($this->dir_classes.'browser_detect.class.php');
		$this->add_file($this->dir_classes.'images.class.php');
		$this->add_file($this->dir_classes.'jomres_qr_code.class.php');
		
		$this->add_dir($this->dir_libraries.JRDS.'simpleMDE'.JRDS);
		$this->add_dir($this->dir_libraries.JRDS.'map_styles'.JRDS);
		$this->add_dir(JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'css'.JRDS);
		$this->add_dir(JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'javascript'.JRDS);
		$this->add_dir(JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'images'.JRDS);
		$this->add_dir(JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'fonts'.JRDS);
		$this->add_dir(JOMRESCONFIG_ABSOLUTE_PATH.JOMRES_ROOT_DIRECTORY.JRDS.'templates'.JRDS);
		
		$this->add_dir($this->dir_libraries.'class.JavaScriptPacker.php');
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla3'.JRDS.'installfiles'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'joomla4'.JRDS.'installfiles'.JRDS);
		$this->add_dir($this->dir_libraries.'jomres'.JRDS.'cms_specific'.JRDS.'wordpress'.JRDS.'installfiles'.JRDS);
		
		$this->add_file($this->dir_templates_bootstrap_administrator.'obsolete_files_wrapper.html');
		$this->add_file($this->dir_templates_bootstrap_administrator.'obsolete_files_warning.html');
		$this->add_file($this->dir_templates_bootstrap_administrator.'obsolete_files_link.html');
		$this->add_file($this->dir_templates_bootstrap_administrator.'obsolete_files_delete_success.html');
		$this->add_file($this->dir_templates_bootstrap_administrator.'obsolete_files_delete_failure.html');
		$this->add_file($this->dir_templates_bootstrap4_administrator.'obsolete_files_wrapper.html');
		$this->add_file($this->dir_templates_bootstrap4_administrator.'obsolete_files_warning.html');
		$this->add_file($this->dir_templates_bootstrap4_administrator.'obsolete_files_link.html');
		$this->add_file($this->dir_templates_bootstrap4_administrator.'obsolete_files_delete_success.html');
		$this->add_file($this->dir_templates_bootstrap4_administrator.'obsolete_files_delete_failure.html');
		
		
		if (this_cms_is_joomla()) {
			$this->add_file($this->dir_components_administrator.'jomres_webinstall.php');
		}
		
		$this->add_file($this->dir_jomres.'install_jomres.php');
		$this->add_file($this->dir_classes.'jomres_uninstall.class.php');
		
		$this->add_file($this->dir_minicomponents.'j00060show_license_message.class.php');
		
		$this->add_dir($this->dir_vendor.'fergusean'.JRDS);
		
	}

	public function add_file($path_and_file)
	{
		if (file_exists($path_and_file)) {
			$this->obs_files[] = $path_and_file;
		}
	}

	public function add_dir($dir)
	{
		if (is_dir($dir)) {
			$this->obs_directories[] = $dir;
		}
	}

	public function remove_obsolete_files()
	{
		foreach ($this->obs_directories as $path) {
			if (!$this->filesystem->deleteDir('local://'.str_replace( JOMRESCONFIG_ABSOLUTE_PATH, '', $path))) {
				throw new Exception('Could not remove obsolete dir '.$path);
			}
		}
		
		foreach ($this->obs_files as $path_and_file) {
			if (!$this->filesystem->delete('local://'.str_replace( JOMRESCONFIG_ABSOLUTE_PATH, '', $path_and_file))) {
				throw new Exception('Could not delete obsolete file '.$path_and_file);
			}
		}
		
		return true;
	}
}
