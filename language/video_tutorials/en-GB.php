<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.1
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('VIDEO_TUTORALS_TITLE', 'Video Tutorials');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Control Panel');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'This tutorial shows you how to use the Property Management control panel.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Timeline');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'How to use the timeline calendar. In this video we create a new guest by entering their details in the popup, existing guests can be re-used by selecting their name from the dropdown in the popup.');

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'List Properties');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'How to use the List Properties page to view extra information, change columns, and search for specific properties.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Edit your property details');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Editing your property details, including dragging on the map to set your location.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Change tariff editing mode');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Your tariff editing mode determines the method you can use to set prices for your property. You do this through the Property Configuration page.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normal tariff editing mode for hotels, pensions, B&Bs');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Normal tariff editing mode is a simple tariff editing feature that allows you to select the number of rooms in a property, the price of the room, the number of guests each room can accommodate and the maximum number of guests in a party. When saved these prices are then valid for the next 10 years.');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Normal Tariff Editing for villas and apartments');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Normal tariff editing mode is a simple tariff editing feature that allows you to select the property sub type, the price of the property per night and and the maximum number of guests in a party. When saved these prices are then valid for the next 10 years.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Micromanage tariff editing mode (recommended)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Micromanage tariff editing mode allows you to configure both the price, and the minimum number of days that a stay can be valid for, for every day of the year. It is a powerful tool that gives you complete control over pricing. In this example we will show you how to create multiple price sets for the same room type, set different prices for different periods and different prices for specific days of the week within a period. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Micromanage tariff editing mode for villas/apartments (recommended)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Micromanage tariff editing mode allows you to configure both the price, and the minimum number of days that a stay can be valid for, for every day of the year. It is a powerful tool that gives you complete control over pricing. In this example we will show you how to create multiple price sets. We will set different prices for different periods and different prices for specific days of the week within a period. Once that is done we will create multiple tariffs for the same property, but with different guest numbers allowing us to precisely control prices for every scenario.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Different tariffs for different guest numbers');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'You can create multiple tariffs for the same room type, so if you want different prices for different numbers of guests, you can do that.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Per person per night - Guest types');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'To charge per person per night you will need to create guest types. Different guest types can have variances off the base price of a room, so children of different ages can have varying discounts based on their ages. You do not need to charge per person per night to use Guest Types, you can also use them if you charge a flat rate but still want to capture the number of guests, or because you want to limit the number of guests in a booking.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Media centre - Image uploading');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'All images are uploaded through the media centre. In this video we will upload the Main property image, some slideshow images, a small selection of images to be shown in the search results page, and images for one of the rooms.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Media centre - Image uploading');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'All images are uploaded through the media centre. In this video we will upload the Main property image, a small selection of images to be shown in the search results page, and some slideshow images.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Administrator Control Panel');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'This is your default landing page in the administrator area. You can see a summary of various site statistics and see which properties exist in the system, which are complete and which have been completed and are awaiting review before approval. Once a property has been approved, then it can be published by the property manager.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Plugin Manager, installation and using');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'This video shows you how to use the Plugin Manager, including installation of the plugin manager and then installation and uninstallation of a plugin. If you do not have a license key you will be prompted to save on in Site Configuration before you can install the manager. If you have not used the plugin manager before then this list will initially be empty, in this example I already have a variety of plugins installed.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Property managers');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Property managers are added in one of two ways. Either they create properties themselves (can be disabled in Site Configuration) or the site administrator can assign an existing manager to certain properties. Managers can only access properties they have created, or have been assigned to.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Access Control');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'You can use the Access Control feature to disable menu options, making them only visible to certain classes of users, or even making them disappear altogether. If the menu bar does not have any menu options to show then it will disappear completely, so if you do not want site visitors to see any options then you can just set all options to be visible to logged in users, for example.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Property and Room Types');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'In this video you will see two important concepts. The first is creation of property types, and associated room types. You will also see a registered user who is not yet a manager create their own property and become a manager (but only able to configure the property they have created). Property and room types are linked, once you have created a property type, you must add a room type otherwise property managers will see red error messages when trying to configure their properties.');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Uploading Map Markers');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'You use the Media Centre to upload map markers. <a href="https://mapicons.mapsmarker.com/" target="_blank"> A great source of markers can be found here.</a> The procedure for uploading property features, room features, room types and others is the same.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Property Features');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'In this video we will show you how to create property features, and upload images for them.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Shortcodes are an exceptionally powerful feature of Jomres. The principle is the same for both Joomla and Wordpress. In this video we will show you where to view the short codes ( this list will change depending on which plugins are installed) and how to use them. You can use the codes in articles or modules.');

jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Log files');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'This video will show you how to view log files. Extensive logging occurs when the system is run. When in Production mode (Site Config > Debugging) less logs are generated so if you are testing a new feature then you should set your site to Development. If you would like to add your own logging to your Jomres scripts, take a look at <a "http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target="_blank">our manual page on how to do it.</a> Here we will throw a fake error, then view the log file. Because the site is set to Development there is a lot of information, normally you would just see a message saying that there was an error and it has been reported.');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Translating labels and other strings');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'There are a number of ways to translate language strings in Jomres, you could edit language files but they might be overwritten when you upgrade. Instead we recommend you use the built-in translation tools that are unique to our software. If the string is something that has been entered into a form, such as the name of a room type, you can use the Label Editing page. If the string is from the language file then you can use the Language files edting tool. Just use the browser search tool to find the string you want to change and then click on the link to change it. These changes are saved to the database and therefore are update safe. You can have different labels for different property types, so you can change New Property to New Campsite, for example, by changing the Language Context dropdown at the top of the page before changing the label.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Adding properties');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p>At this stage Jomres has been installed into the CMS and it has been added to the frontend menu ( or in Wordpress you have created a page and added the basic Jomres shortcode to it).</p>
<p>Here you will see how a  registered user who is not yet a property manager in Jomres can create a new property, configure some basic settings and publish it.</p>
<p>At the end you will see that the manager has been automatically set as a property manager, however they are only able to configure their own properties.</p>
<p>Although the interface in Wordpress looks different the process is exactly the same for Joomla or Wordpress.</p>  ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Property categories');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Property categories is a simple feature that allows property managers to assign their properties to a certain category. Site administrators can create shortcodes that will list all properties in a category, as shown in this video.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Site administrator viewing properties');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p>You do not manage properties from here, you can only manage properties from the frontend, however in this list you can see properties that are pending approval ( if the feature is enabled ) and any that are incomplete ( e.g. still need to upload images, set prices etc). Click on the property name to be taken to the dashboard for that property. You will then be able to use the guide sections at the top of the page to see the steps that you need to take to complete and publish a property.</p>  ');
