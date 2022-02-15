<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06002delete_property
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
	
		$sure = jomresGetParam($_REQUEST, 'sure', 0);
		
		if (isset($componentArgs['sure'])) {
			$sure = true;
		}
		
		if ($sure) {
			
			if (!isset($componentArgs['property_uid'])) {
				$property_uid = (int) getDefaultProperty();
			} else {
				$property_uid = (int) $componentArgs['property_uid'] ;
			}
			
			if (!isset($componentArgs['thisJRUser'])) {
				$thisJRUser = jomres_getSingleton('jr_user');
			} else {
				$thisJRUser = $componentArgs['thisJRUser'];
			}

			$is_jintour_property = get_showtime('is_jintour_property');
			if (in_array($property_uid, $thisJRUser->authorisedProperties) && count($thisJRUser->authorisedProperties) > 1) {
				$saveMessage = jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETED', '_JOMRES_COM_MR_PROPERTY_DELETED', false);
				
				$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
				$jomres_media_centre_images->delete_all_images($property_uid);

				$query = 'DELETE FROM #__jomres_customertypes WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_extraservices WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_contracts WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_rates WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomcomp_tarifftype_rate_xref WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_room_bookings WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_room_classes WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_rooms WHERE `propertys_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_room_features WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_hotel_features WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_pluginsettings WHERE `prid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_settings WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_custom_text WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_pcounter WHERE `p_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomres_managers_propertys_xref WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');
				$query = 'DELETE FROM #__jomresportal_properties_crates_xref WHERE `property_id` = '.$property_uid.' LIMIT 10000';
				doInsertSql($query, '');

				if ($is_jintour_property) {
					$query = 'DELETE FROM #__jomres_jintour_profiles WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
					doInsertSql($query, '');
					$query = 'DELETE FROM #__jomres_jintour_properties WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
					doInsertSql($query, '');
					$query = 'DELETE FROM #__jomres_jintour_tours WHERE `property_uid` = '.$property_uid.' LIMIT 10000';
					doInsertSql($query, '');
					$query = 'DELETE FROM #__jomres_jintour_tour_bookings WHERE `property_id` = '.$property_uid.' LIMIT 10000';
					doInsertSql($query, '');
				}

				$query = 'DELETE FROM #__jomres_propertys WHERE `propertys_uid` = '.$property_uid.' LIMIT 1';
				$result = doInsertSql($query);

				$resetProperty = $thisJRUser->check_currentproperty();
				$jomres_messaging = jomres_getSingleton('jomres_messages');
				$jomres_messaging->set_message($saveMessage);

				$webhook_notification							   = new stdClass();
				$webhook_notification->webhook_event				= 'property_deleted';
				$webhook_notification->webhook_event_description	= 'Logs when a property is deleted.';
				$webhook_notification->webhook_event_plugin		 = 'core';
				$webhook_notification->data						 = new stdClass();
				$webhook_notification->data->property_uid		   = $property_uid;
				add_webhook_notification($webhook_notification);
		
				if (!isset($componentArgs['property_uid'])) {  
					jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=listyourproperties&thisProperty='.$resetProperty, ''));
				} else {
					$this->retVals = true;
				}
				
			} else {
				trigger_error(jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', false), E_USER_ERROR);
				if (!isset($componentArgs['property_uid'])) {
					echo "<script> alert('".jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', false)."'); ; </script>\n";
					}
			}
		} else {
			$property_uid = (int) getDefaultProperty();

			if ($property_uid > 0) { // Count the number of properties, ensure there's at least one property in the system. Do not remove!
				?>
				<script type="text/javascript">
				<!--
				var answer = confirm ("<?php  echo jr_gettext('_JOMRES_AREYOUSURE', '_JOMRES_AREYOUSURE') ?>")
				if (answer)
					window.location="<?php  echo JOMRES_SITEPAGE_URL_NOSEF.'&task=delete_property&property_uid='.$property_uid.'&sure=1&no_html=1'; ?>"
				else
					window.location="<?php  echo JOMRES_SITEPAGE_URL; ?>"
				// -->
				</script>
				<?php

			} else {
				echo 'Sorry, you must have at least one property on the system for Jomres to work. Please create a new property before attempting to delete this one.';
			}
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
