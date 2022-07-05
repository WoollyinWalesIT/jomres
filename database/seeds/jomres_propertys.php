<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
/**
 *
 * @package Jomres\Core\Database
 *
 * Seed data for various tables
 *
 **/
$property_email = get_showtime('mailfrom'); //we`ll set this to the site admin email

$query = "TRUNCATE TABLE `#__jomres_propertys`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_propertys table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomres_propertys` (`propertys_uid`, `property_name`, `property_street`, `property_town`, `property_region`, `property_country`, `property_postcode`, `property_tel`, `property_fax`, `property_email`, `property_features`, `property_mappinglink`, `property_description`, `property_checkin_times`, `property_area_activities`, `property_driving_directions`, `property_airports`, `property_othertransport`, `property_policies_disclaimers`, `property_key`, `published`, `stars`, `superior`, `ptype_id`, `apikey`, `lat`, `long`, `metatitle`, `metadescription`, `metakeywords`, `timestamp`, `approved`, `property_site_id`, `last_changed`, `permit_number`, `completed`, `cat_id`) VALUES
(1, 'Hotel Valle', 'Asheldon Rd', 'Torquay', '1113', 'GB', 'TQ1 2QS', '01000 123456', '01000 654321', '$property_email', ',32,34,35,30,40,41,4,77,47,', 'https://www.jomres.net', 'My property description', 'Any time from 2pm onwards', 'Surfing, rock climbing, fishing &#38; lazing in the sun.', 'Second star to the right and straight on till morning.', 'None for miles and miles and miles.', 'Local buses once a day, taxis and if you&#39;re lucky a donkey.', 'Requests for bed type and smoking preferences will be submitted to the hotel but are not guaranteed.', NULL, 1, 3, 1, 1, '', '51.5006800', '-0.1431700', NULL, NULL, NULL, CURRENT_TIMESTAMP, 1, NULL, CURRENT_TIMESTAMP, NULL, 1, 1);
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomres_propertys table', 'danger');
}
