<?php
	/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.18
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

jr_define( '_JOMRES_SHORTCODES_06001DASHBOARD', "This is the property dashboard script which displays the users bookings." );

jr_define( '_JOMRES_SHORTCODES_06000COMPARE', "This script allows the user to compare several properties against each other, up to a maximum of 3 properties." );
jr_define( '_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', "A comma separated list of property uids, eg. 12,8,7" );

jr_define( '_JOMRES_SHORTCODES_06000CONTACTOWNER', "Builds the contact owner form. " );
jr_define( '_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', "Pass the property uid of the property to be contacted. Pass 0 (zero) to instead contact site admin. " );


jr_define( '_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Shows the Company Info page pulling details from the property manager's 'Your company details' in Property Configuration. The details in this tab would typically be used for correspondance, allowing managers to have both the hotel/aparment address, and a separate address for business purposes." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Shows the property's calendar" );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', "Pass the property uid of the property to be shown. " );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', "Months to show, default is 24 if not otherwise set. Not compatible with the Show Just Month variable." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Set this to 1 if you just want to show the current month on it's own. The months_to_show setting will be ignored if show_just_month is used in the same shortcode, so you should use one or the other, not both at the same time." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', "Shows just the Property description text." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', "Shows just the Property description text." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', "Shows just the Property features." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', "Shows just the Property header template." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', "Shows just the Property room types." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', "Shows just the Property main image." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', "Shows just the Property map." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', "Shows the property More Info text." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', "QR code that links to gmaps. This can be scanned into a phone using a qr code reading app that provides directions to the property." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Shows a property's reviews." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Shows a property's review summary." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', "Shows an individual room." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', "ID of the room." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Shows a property's rooms." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Shows a property's room images as a slideshow." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', "Shows the property slideshow." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', "Shows the property tariffs." );
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Shows the site's business address as entered into Site Configuration > Your Company details." );

jr_define( '_JOMRES_SHORTCODES_06000TERMS', "Shows the property terms and conditions." );
jr_define( '_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', "ID of the property." );

jr_define( '_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Shows the property's UI calendar, which is a different calendar to the main large calendar and is based on the Jquery UI calendar functionality." );
jr_define( '_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', "Pass the property uid of the property to be shown. " );
jr_define( '_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', "Set this to 1 to not show the legend." );

jr_define( '_JOMRES_SHORTCODES_06000SEARCH', "Shows the search results, which can be enhanced by adding search parameters. We don't recommend that you use all parameters at the same time, because you'll end up with search criteria that are too limited. Instead you should restrict yourself to just one or two parameters, e.g. search by country and number of stars." );
jr_define( '_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', "Search by country, using the ISO Alpha-2 code, eg GB or DE." );
jr_define( '_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Search by region. As regions are saved in the database, you must use the region ID. Visit Administrator > Jomres > Site Structure > List regions and hover the Edit link, there you will see the region's ID number." );
jr_define( '_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', "The full name of the town you want to search for." );
jr_define( '_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', "Search for properties with particular features. Feature ids can be found in Administrator > Jomres > Site Structure > Property Features." );
jr_define( '_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', "Search for properties with certain room types. Room type ids can be found in Administrator > Jomres > Site Structure > Room types." );
jr_define( '_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', "Search for properties of a specific property type. Property type ids can be found in Administrator > Jomres > Site Structure > Property types." );
jr_define( '_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', "Search for properties within a specific price range." );
jr_define( '_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Search for properties who's tariffs allow guest numbers of certain values, for example parties of 6." );
jr_define( '_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', "Search for properties of N stars." );
jr_define( '_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', "Search for properties who are available after a certain date." );

jr_define( '_JOMRES_SHORTCODES_06000VIEW_AGENT', "View an agent's page. You can pass EITHER a property uid, or the agent's id itself, if you know it." );
jr_define( '_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "A property uid, this will show the property's agent." );
jr_define( '_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "The manager's database id, if known." );

jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', "Displays the popular properties, typically used in module or widget positions." );
jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', "The maximum number of properties that can be shown." );
jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', "Show only properties of this specific property types." );
jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', "Set to 1 to show the modules optimised for a vertical widget/module position." );

jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', "Displays a random selection of properties, typically used in module or widget positions." );
jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', "The maximum number of properties that can be shown." );
jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', "Show only properties of this specific property types." );
jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', "Set to 1 to show the modules optimised for a vertical widget/module position." );

jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Displays the guest's most recently viewed properties, typically used in module or widget positions." );
jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', "The maximum number of properties that can be shown." );
jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', "Set to 1 to show the modules optimised for a vertical widget/module position." );

jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', "Displays a number of properties, typically used in module or widget positions." );
jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', "The property ids of the properties you want to show." );
jr_define( '_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', "Set to 1 to show the modules optimised for a vertical widget/module position." );

jr_define( '_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', "Displays the currency selection dropdown." );
jr_define( '_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', "Enable/disable the alternate template output. This output is intended for use in Bootstrap toolbars." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_CART', "Displays the Shopping Cart page." );

jr_define( '_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', "Displays the Shopping Cart module/widget." );

jr_define( 'INTEGRITY_CHECK', "Filesystem Integrity Check" );
jr_define( 'INTEGRITY_CHECK_DESC', "This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here." );
jr_define( 'INTEGRITY_CHECK_FILENAME', "Filesystem Integrity Check" );
jr_define( 'INTEGRITY_CHECK_LOCALHASH', "Local hash" );
jr_define( 'INTEGRITY_CHECK_BUILDHASH', "Version hash" );
jr_define( 'INTEGRITY_CHECK_NOPROBLEMS', "Awesome! No problems were found." );


jr_define('_JOMRES_PROPERTYTYPE_MARKER',"Google maps marker");

jr_define( '_JOMRES_JAVASCRIPT_READMORE', 'Read more' );
jr_define( '_JOMRES_JAVASCRIPT_READLESS', 'Read less' );
jr_define('_JOMRES_TOURIST_TAX_TITLE',"Tourist tax");

jr_define('_JOMRES_TOURIST_TAX_TAXRATE',"Tourist tax rate");
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC',"Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.");
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO',"Is percentage?");
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC',"Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO',"Affects the entire booking value?");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC',"Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE',"Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.");
jr_define('NO_LICENSE_MESSAGE',"You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE',"You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE',"Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");

