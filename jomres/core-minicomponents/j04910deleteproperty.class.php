<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9 
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j04910deleteproperty {
	function __construct($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		
		$sure  = jomresGetParam( $_REQUEST, 'sure', 0 );
		if ($sure)
			{
			$property_uid=(int)getDefaultProperty();
			$is_jintour_property =get_showtime('is_jintour_property' );
			if (in_array($property_uid,$thisJRUser->authorisedProperties) && !JOMRES_SINGLEPROPERTY)
		 		{
				$saveMessage=jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETED','_JOMRES_COM_MR_PROPERTY_DELETED',FALSE);
				emptyDir(JOMRES_IMAGELOCATION_ABSPATH.$property_uid.JRDS);
				rmdir(JOMRES_IMAGELOCATION_ABSPATH.$property_uid.JRDS);
				dropImage($property_uid,"property",0,false);

				$subject=_JOMRES_MR_AUDIT_DELETE_PROPERTY.$property_name;
				//sendAdminEmail(getPropertyName($property_uid),$saveMessage);

				$query="DELETE FROM #__jomres_customertypes WHERE property_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_extraservices WHERE property_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_contracts WHERE property_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_rates WHERE property_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_room_bookings WHERE property_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_room_classes WHERE property_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_rooms WHERE propertys_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_room_features WHERE property_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_hotel_features WHERE property_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_pluginsettings WHERE prid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_settings WHERE property_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_custom_text WHERE property_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_pcounter WHERE p_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				$query="DELETE FROM #__jomres_managers_propertys_xref WHERE property_uid = '".$property_uid."' LIMIT 10000";
				doInsertSql($query,'');
				if ( $is_jintour_property )
					{
					$query="DELETE FROM #__jomres_jintour_profiles WHERE property_uid = '".$property_uid."' LIMIT 10000";
					doInsertSql($query,'');
					$query="DELETE FROM #__jomres_jintour_properties WHERE property_uid = '".$property_uid."' LIMIT 10000";
					doInsertSql($query,'');
					$query="DELETE FROM #__jomres_jintour_tours WHERE property_uid = '".$property_uid."' LIMIT 10000";
					doInsertSql($query,'');
					$query="DELETE FROM #__jomres_jintour_tour_bookings WHERE property_id = '".$property_uid."' LIMIT 10000";
					doInsertSql($query,'');
					}
				
				$query="DELETE FROM #__jomres_propertys WHERE propertys_uid = '".$property_uid."' LIMIT 1";
				$result = doInsertSql($query);

				$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
				$c->eraseAll();
					
				$resetProperty = $thisJRUser->check_currentproperty();
				$jomres_messaging =jomres_getSingleton('jomres_messages');
				$jomres_messaging->set_message($saveMessage);
					
				jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL."&task=listyourproperties&thisProperty=".$resetProperty, '' ));

				}
			else
				{
				trigger_error (jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS',FALSE), E_USER_ERROR);
				echo "<script> alert('".jr_gettext('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS',FALSE)."'); ; </script>\n";
				}
			}
		else
			{
			$query="SELECT propertys_uid FROM #__jomres_propertys";
			$propertyList = doSelectSql($query);
			$property_uid = (int)getDefaultProperty();
			
			if ($property_uid > 0 && count($propertyList) > 1) // Count the number of properties, ensure there's at least one property in the system. Do not remove!
				{
				?>
				<script type="text/javascript">
				<!--
				var answer = confirm ("<?php  echo jr_gettext("_JOMRES_AREYOUSURE",'_JOMRES_AREYOUSURE') ?>")
				if (answer)
					window.location="<?php  echo JOMRES_SITEPAGE_URL_NOSEF.'&task=deleteProperty&property_uid='.$property_uid.'&sure=1&no_html=1'; ?>"
				else
					window.location="<?php  echo JOMRES_SITEPAGE_URL; ?>"
				// -->
				</script>
				<?php
				}
			else
				{
				echo "Sorry, you must have at least one property on the system for Jomres to work. Please create a new property before attempting to delete this one.";
				}
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>