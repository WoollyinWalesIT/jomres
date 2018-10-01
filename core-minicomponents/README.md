The scripts in this file are not called directly, instead they are called by other Jomres scripts at differing stages of a run.


00001 Set into place various functions that can be overriden, or for other bootstrapping purposes.  
00002 Bootstraps the system's user information.  
00003 Currently used to boostrap the input filtering settings.  
00004 Loads javascript and css files, which are then handing off to the host CMS for loading into the head or footer as the CMS dictates.  
00005 This trigger point is used by most plugins primarily to load their own language files and frontend/admin menu items. At this point most of the system has been bootstrapped, internal language files loaded according to the CMS's chosen language. Various other tasks such as saving previously searched variables for such plugins are saved, and language specific javascript files are created. After this point we're starting to build the page's output.  
00006 Used for sanity checks.  

00012 Currently used to build pathways for the host CMS to display. Joomla only is supported, primarily used to interface with routing functionality to build SEO friendly routes  
00021 Used to insert Jomres specific css files into the system.  

00035 These scripts are used to build tab contents in the property details pages.

00060 This is used to build the top template, which is at the very top of every page and used to output many different things such as logos, sanity checks etc.  
00061 This is used to build the footer template(s).

00100, 00101, 00102 These three numbers are typically used when amending bookings or configuring other data, before the page is loaded properly.

00501 These trigger numbers are used for building tabs in the Property Configuration page.

The next trigger numbers are used when building the property list/search results page.

00042 Used by plugins to inject property information into property details, that otherwise isn't built by the script. Not currently used, but available.  
07015 is used by the Jintour plugin ( and optionally other plugins ) to advise if this property's price will be supplied by the Jintour plugin's code.

01004 Differing list views ( Photo/Map/List/Swipe) are bootstrapped by this trigger number.  
01008 Not used, but available.  
01009 Used to build the sorting options seen at the top of the search page, and also performs sorting of properties returned by search functionality.  
01010 Displays the results of searches.  
01011 Used by 01010 to receive information about discounts  
01012 Not used, but available.

01050 Builds the Google maps output which is used in property details, edit property details, extended maps and other scripts.

02163 Emails sent on booking cancellation  
02202 Add service to bill triggers 02202 which is used to update the invoice

03000 When a booking is inserted, if it's an amendment this ensures that overrides are pushed to the booking details stored in the tmpBooking object.  
03020 Actually performs the booking creation after payment ( where valid )  
03025 Creates the invoice that corresponds to the booking.  
03030 Shows the booking completed message.  
03100 Sends emails to managers, guests and admin to update each on the new booking.  
03150 Various email scripts.

03200 Triggers 07005 & 07010  
07005 Optional minicomponent trigger, eg for system cleanups or other pre-booking activity  
07010 Allows us to run post insertion functionality for importing into foreign systems. Currently used for inserting commission line items

03379 These scripts are used by the media centre to configure media uploading options.  
03381 Media centre uses these to determine individual ids for uploading of resource specific images.  
03383 Media centre uses these to determine images that already exist for specific resources.

04901 This trigger is used when a new property is created, typically for sending welcome emails

05000 level scripts are generally used by the booking engine. A new booking engine is being planned and these will likely not be used in the future.

Jomres includes Access Control functionality, however we find that a more simplistic approach suits the vast majority of users.  
 
06000 These scripts are individual tasks that can called that do not require a user to be logged in. Some scripts like the cron scripts do demand that the system pass the CMS's secret to itself, this is to prevent spiders or other web services from calling these scripts at some point and bogging the system down with scheduled jobs. On the whole, however, the bulk of these scripts are used for displaying public/guest facing output.  
06001 These tasks are for Reception level functionality.
06002 These tasks are for Manager level functionality.  
06005 These tasks/scripts are for pages that can be viewed by any registered and logged in user.

07020 Used for building notification badges in the site manager menus.

07060 Used for building manager FAQs.  
07070 Used for building administrator area FAQs.  
07080 Used for building guest FAQs. Whilst the code to support these in place, currently there are no guest level FAQs.

07300 Used to tell Webhook functionality that a given webhook exists, and some language strings and parameters
07310 Webhook trigger processing scripts. When a Webhook is called, these are the scripts that will actually authenticate with the remote site and pass the information of the action performed on this server.

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

Menu sections (Frontend)

* 1 : Home
* 10 : My account
* 20 : Properties
* 30 : Bookings
* 40 : Guests
* 50 : Invoices
* 60 : Reports
* 70 : Misc
* 80 : Settings
* 90 : Help

Menu Access Levels (Frontend)

* 0  : unregistered
* 1  : registered
* 50 : receptionist
* 70 : property manager
* 90 : super property manager


Menu sections (Administrator)

* 1 :Dashboard
* 10 : 10, 'Users
* 20 : Commission
* 30 : Subscriptions
* 40 : Invoices
* 50 : Portal
* 60 : Translations
* 70 : Tools
* 80 : Reports
* 90 : Settings
* 100 : Help
