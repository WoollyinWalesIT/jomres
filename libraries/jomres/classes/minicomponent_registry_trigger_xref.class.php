<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
/**
 * New for v3.2 of Jomres. Allows the system to create a registry file so that the minicomponent handler doesn't need to constantly search folders and record minicomponents on each run.
 */
	#[AllowDynamicProperties]
class minicomponent_registry_trigger_xref
{

	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

	public function __construct()
	{
		$this->trigger_xref = array();
	}

	/*
	 * Sets up the trigger xref array
	 *
	 * Comments added here are for the benefit of the developer, and are not used by the system. They demonstrate what the trigger is used for typically.
	 *
	 * Because of how the trigger system works, developers can create their own onXXXXX scripts which will be run at the same time as the core onXXXXX scripts, or override them completely if the developer names their script the same.
	 *
	 */
	private function buildCoreTriggers()
	{
		$this->trigger_xref['event_numbers']['00001'] = [ 'event_number' => '00001', 'event_name' => 'onSystemBootstrap' , 'comment' => 'Set into place various functions that can be overriden, or for other bootstrapping purposes.' ];
		$this->trigger_xref['event_numbers']['00002'] = [ 'event_number' => '00002', 'event_name' => 'onUserBootstrap' , 'comment' => 'Bootstraps the system\'s user information.  ' ];
		$this->trigger_xref['event_numbers']['00003'] = [ 'event_number' => '00003', 'event_name' => 'onInputFilterBootstrap' , 'comment' => 'Currently used to boostrap the input filtering settings.  ' ];
		$this->trigger_xref['event_numbers']['00004'] = [ 'event_number' => '00004', 'event_name' => 'onHeadInit' , 'comment' => 'Loads javascript and css files, which are then handing off to the host CMS for loading into the head or footer as the CMS dictates. ' ];
		$this->trigger_xref['event_numbers']['00005'] = [ 'event_number' => '00005', 'event_name' => 'onJMainInit' , 'comment' => 'This trigger point is used by most plugins primarily to load their own language files and frontend/admin menu items. At this point most of the system has been bootstrapped, internal language files loaded according to the CMS\'s chosen language. Various other tasks such as saving previously searched variables for such plugins are saved, and language specific javascript files are created. After this point we\'re starting to build the page\'s output.' ];
		$this->trigger_xref['event_numbers']['00006'] = [ 'event_number' => '00006', 'event_name' => 'onSanityChecks' , 'comment' => 'Used for sanity checks. ' ];
		$this->trigger_xref['event_numbers']['00012'] = [ 'event_number' => '00012', 'event_name' => 'onBuildPathways' , 'comment' => 'Currently used to build pathways for the host CMS to display. Joomla only is supported, primarily used to interface with routing functionality to build SEO friendly routes' ];
		$this->trigger_xref['event_numbers']['00021'] = [ 'event_number' => '00021', 'event_name' => 'onInsertJomresCss' , 'comment' => 'Used to insert Jomres specific css files into the system. ' ];
		$this->trigger_xref['event_numbers']['00035'] = [ 'event_number' => '00035', 'event_name' => 'onPropertyDetailsTabs' , 'comment' => 'These scripts are used to build tab contents in the property details pages. In Bootstrap 5 these are not much used, however the remain for lower versions of Bootstrap.' ];
		$this->trigger_xref['event_numbers']['00060'] = [ 'event_number' => '00060', 'event_name' => 'onTopTemplate' , 'comment' => 'This is used to build the top template, which is at the very top of every page and used to output many different things such as logos, sanity checks etc.' ];
		$this->trigger_xref['event_numbers']['00061'] = [ 'event_number' => '00061', 'event_name' => 'onFooterTemplate' , 'comment' => 'This is used to build the footer template(s). bottom.html' ];
		$this->trigger_xref['event_numbers']['00100'] = [ 'event_number' => '00100', 'event_name' => 'onAmendBookingRedirect' , 'comment' => 'When amending a booking, we ensure that the current property is properly set.' ];
		$this->trigger_xref['event_numbers']['00101'] = [ 'event_number' => '00101', 'event_name' => 'onAmendBookingCollate' , 'comment' => 'When amending a booking collect information about the booking and set the $tmpBookingHandler->tmpbooking values' ];
		$this->trigger_xref['event_numbers']['00102'] = [ 'event_number' => '00102', 'event_name' => 'onAmendBookingModify' , 'comment' => 'When amending a booking add or modify values. Currently used by wiseprice to add new discount fields.' ];
		$this->trigger_xref['event_numbers']['00501'] = [ 'event_number' => '00501', 'event_name' => 'onPropertyConfigTabs' , 'comment' => 'Scripts that are used to build property configuration tab contents.' ];
		$this->trigger_xref['event_numbers']['07015'] = [ 'event_number' => '07015', 'event_name' => 'onListViewPriceConfirmPluginSetsPrices' , 'comment' => 'Plugins can elect to populate the $jomres_property_list_prices->lowest_prices variable themselves depending on the property UID being viewed. This trigger is used to allow the plugin to confirm if it will return a price for this particular property. See 07016.' ];
		$this->trigger_xref['event_numbers']['07016'] = [ 'event_number' => '07016', 'event_name' => 'onListViewPriceGetPluginPrice' , 'comment' => 'Plugin will return a price for the property, instead of allowing Jomres to calculate the price. Currently used by Jintour so that Jintour can calculate it\'s own prices for properties' ];
		$this->trigger_xref['event_numbers']['01004'] = [ 'event_number' => '01004', 'event_name' => 'onShowSearchResultsBeforeOne' , 'comment' => 'Before search results are constructed these triggers can be used to modify the list of properties before they are shown.' ];
		$this->trigger_xref['event_numbers']['01005'] = [ 'event_number' => '01005', 'event_name' => 'onShowSearchResultsBeforeTwo' , 'comment' => 'Before search results are constructed these triggers can be used to modify the list of properties before they are shown.' ];
		$this->trigger_xref['event_numbers']['01006'] = [ 'event_number' => '01006', 'event_name' => 'onShowSearchResultsBeforeThree' , 'comment' => 'Before search results are constructed these triggers can be used to modify the list of properties before they are shown.' ];
		$this->trigger_xref['event_numbers']['01009'] = [ 'event_number' => '01009', 'event_name' => 'onShowSearchResultsSort' , 'comment' => 'Triggered from within the 01010 script. Used to build the sorting options seen at the top of the search page, and also performs sorting of properties returned by search functionality. ' ];
		$this->trigger_xref['event_numbers']['01010'] = [ 'event_number' => '01010', 'event_name' => 'onShowSearchResultsDisplay' , 'comment' => 'Display the serch results.' ];
		$this->trigger_xref['event_numbers']['01011'] = [ 'event_number' => '01011', 'event_name' => 'onShowSearchResultsGetDiscounts' , 'comment' => 'Used by 01010 to receive information about discounts' ];
		$this->trigger_xref['event_numbers']['01012'] = [ 'event_number' => '01012', 'event_name' => 'onShowSearchResultsPopulateOutputArray' , 'comment' => 'Gives scripts the opportunity to populate the $property_deets array after Jomres populates it. This gives the script the opportunity to change output without forcing a developer to customise 01010 itself.' ];

		$this->trigger_xref['event_numbers']['01050'] = [ 'event_number' => '01050', 'event_name' => 'onShowMap' , 'comment' => 'Builds the Google maps output which is used in property details, edit property details, extended maps and other scripts.' ];

		$this->trigger_xref['event_numbers']['02163'] = [ 'event_number' => '02163', 'event_name' => 'onSendCancellationEmail' , 'comment' => 'Emails sent on booking cancellation' ];
		$this->trigger_xref['event_numbers']['02202'] = [ 'event_number' => '02202', 'event_name' => 'onAddServiceToBill' , 'comment' => 'Add service to bill triggers 02202 which is used to update the invoice' ];
		$this->trigger_xref['event_numbers']['02990'] = [ 'event_number' => '02990', 'event_name' => 'onShowConfirmation' , 'comment' => '' ];
		$this->trigger_xref['event_numbers']['03000'] = [ 'event_number' => '03000', 'event_name' => 'onShowConfirmationPushOverrides' , 'comment' => 'Triggered by 02990/onShowConfirmation. Gives a script the opportunity to push overrides onto the $tmpBookingHandler->tmpbooking values. ' ];

		$this->trigger_xref['event_numbers']['03020'] = [ 'event_number' => '03020', 'event_name' => 'onCreateBooking' , 'comment' => '$MiniComponents->miniComponentData[ \'03020\' ][ \'insertbooking\' ] Actually performs the booking creation after payment ( where valid ).' ];
		$this->trigger_xref['event_numbers']['03025'] = [ 'event_number' => '03025', 'event_name' => 'onCreateBookingInvoice' , 'comment' => 'Called by 03020/onCreateBooking insertbooking Used to create the invoice that corresponds to the booking.' ];
		$this->trigger_xref['event_numbers']['03030'] = [ 'event_number' => '03030', 'event_name' => 'onBookingCompletedShow' , 'comment' => 'Shows the booking completed template.' ];
		$this->trigger_xref['event_numbers']['03100'] = [ 'event_number' => '03100', 'event_name' => 'onBookingCompletedSendEmails' , 'comment' => 'Sends emails to managers, guests and admin to update each on the new booking.' ];
		$this->trigger_xref['event_numbers']['03150'] = [ 'event_number' => '03150', 'event_name' => 'onSendBookingEmail' , 'comment' => 'jomres_generic_booking_email -> parse_email method calls this trigger. It is used to retrieve email template editing labels and template file contents, and uses the template file contents to build emails sent to guests.' ];
		$this->trigger_xref['event_numbers']['03200'] = [ 'event_number' => '03200', 'event_name' => 'onAfterBookingCreated' , 'comment' => 'Triggers 07005 & 07010. Currently the commission plugin uses 07010 to add commission line items to the invoice.' ];

		$this->trigger_xref['event_numbers']['03379'] = [ 'event_number' => '03379', 'event_name' => 'onXxxxx' , 'comment' => '' ];




		$this->trigger_xref['event_numbers']['xxxx'] = [ 'event_number' => 'xxx', 'event_name' => 'onXxxxx' , 'comment' => '' ];
		$this->trigger_xref['event_numbers']['xxxx'] = [ 'event_number' => 'xxx', 'event_name' => 'onXxxxx' , 'comment' => '' ];
		$this->trigger_xref['event_numbers']['xxxx'] = [ 'event_number' => 'xxx', 'event_name' => 'onXxxxx' , 'comment' => '' ];
		$this->trigger_xref['event_numbers']['xxxx'] = [ 'event_number' => 'xxx', 'event_name' => 'onXxxxx' , 'comment' => '' ];
		$this->trigger_xref['event_numbers']['xxxx'] = [ 'event_number' => 'xxx', 'event_name' => 'onXxxxx' , 'comment' => '' ];
		$this->trigger_xref['event_numbers']['xxxx'] = [ 'event_number' => 'xxx', 'event_name' => 'onXxxxx' , 'comment' => '' ];
		$this->trigger_xref['event_numbers']['xxxx'] = [ 'event_number' => 'xxx', 'event_name' => 'onXxxxx' , 'comment' => '' ];

		$this->trigger_xref['event_numbers']['03700'] = [ 'event_number' => '03700', 'event_name' => 'onBeforeSaveAccount' , 'comment' => 'Called when saving account details. Gives plugins the option to parse saved before it\'s saved to the database. Reason created : Twilio cannot send messages to invalid numbers, therefore parsing the $_REQUEST[\'mobile\'] value, checking it and if necessary resetting it to empty if it cannot be validated will prevent Twilio throwing errors. From Jomres 10.5.4' ];
		$this->trigger_xref['event_numbers']['03710'] = [ 'event_number' => '03710', 'event_name' => 'onAfterSaveAccount' , 'comment' => 'Currently unused, but available. Triggered after a user changes their account.' ];
	}

/*
03379 These scripts are used by the media centre to configure media uploading options.
03381 Media centre uses these to determine individual ids for uploading of resource specific images.
03383 Media centre uses these to determine images that already exist for specific resources.

03500 Triggers scripts that can be used to add buttons to the reservation details/edit booking page

04901 This trigger is used when a new property is created, typically for sending welcome emails

04950 Plugins offer language strings to property managers that they can translate in the Translations page.

05000 level scripts are generally used by the booking engine. A new booking engine is being planned and these will likely not be used in the future.
05019 On booking editing, optional scripts are used to override the booking engine's default values

	Jomres includes Access Control functionality, however we find that a more simplistic approach suits the vast majority of users.

	06000 These scripts are individual tasks that can called that do not require a user to be logged in. Some scripts like the cron scripts do demand that the system pass the CMS's secret to itself, this is to prevent spiders or other web services from calling these scripts at some point and bogging the system down with scheduled jobs. On the whole, however, the bulk of these scripts are used for displaying public/guest facing output.
06001 These tasks are for Reception level functionality.
06002 These tasks are for Manager level functionality.
06005 These tasks/scripts are for pages that can be viewed by any registered and logged in user.

07020 Used for building notification badges in the site manager menus.

07060 Used for building manager FAQs.
07070 Used for building administrator area FAQs.
07080 Used for building guest FAQs. Whilst the code to support these in place, currently there are no guest level FAQs.
07090 Used for calling language file definition scripts before 00001 is triggered

07300 Used to tell Webhook functionality that a given webhook exists, and some language strings and parameters
07310 Webhook trigger processing scripts. When a Webhook is called, these are the scripts that will actually authenticate with the remote site and pass the information of the action performed on this server. For tasks that *have* to be carried out now
07320 Webhook tasks that can be deferred slightly. The huge majority of webhook tasks should be of this number because these tasks are deferred, meaning that they are run in an independent process that does not run the risk of slowing down the site user's experience.

	08000 Reserved for REST API functionality



	08100 Parsers for Jomres Messaging System, allows for parsing of messages before they're saved. Performed before encryption. A 08100 script would need to import subject and message_body by doing  get_showtime('jms_message_subject') or get_showtime('jms_message_message_body') and after parsing set the same by doing set_showtime('jms_message_subject' , $parsed_result ); or set_showtime('jms_message_message_body' , $parsed_result );

08200 Parsers for Jomres Messaging System, allows for parsing of messages before they're returned to the calling script. Performed after decryption. Same showtime variables and processes as used in the 08100 parsing method.

	08300 Parsers for Jomres Messaging System, allows for parsing of messages before they're returned to the calling script. Parsed before saving group name.

08400 Parsers for Jomres Messaging System, allows for parsing of messages before they're returned to the calling script. Parsed before returning group name.


	09995 Creates the core menu items
	09997 Builds the frontend control panel menu

	99994 Post run scripts are run here, for example the Channel Manager functionality has a watcher for here, and webhooks are triggered at this point.

	99998 jomres feedback messages
	99999 Anything that needs to be done right at the end of a run.

	Administrator area

	10001 Builds the control panel.
	10501 Site Configuration tabs.
	10521 trigger point to add settings from plugins to site config->misc tab
	10522 trigger point to add settings from plugins to site config->booking tab
	10523 trigger point to add settings from plugins to site config->business details tab
	10524 trigger point to add settings from plugins to site config->file uploads tab
	10525 trigger point to add settings from plugins to site config->google maps tab
	10526 trigger point to add settings from plugins to site config->js calendar tab
	10527 trigger point to add settings from plugins to site config->portal functionality tab
	10529 trigger point to add settings from plugins to site config->search options tab
	10530 trigger point to add settings from plugins to site config->cron tab
	10531 trigger point to add settings from plugins to site config->integrations tab
	10532 trigger point to add settings from plugins to site config->debugging tab
	10533 trigger point to add settings from plugins to site config->gdpr policies tab

	11010,11020,11040 Administrator area Media centre resource options.

	13100 Allows plugins to add warnings to the control panel.

	13200 Third party plugins can add their own tab contents to the plugin manager.

	16000 Administrator area tasks/pages.

	19995 creates the admin core menu items
	19997 builds the admin cpanel menu

	99998 jomres feedback messages
*/

	}
