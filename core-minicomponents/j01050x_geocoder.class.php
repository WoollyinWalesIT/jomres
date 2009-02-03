<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j01050x_geocoder {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j01050x_geocoder($componentArgs=null)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jrConfig;
		$property_uid=(int)$componentArgs['property_uid'];
		$output=array();
		$pageoutput=array();
		if (strlen($jrConfig['google_maps_api_key'])>0)
			{
			$query="SELECT property_name,property_street,property_town,property_postcode,property_tel,property_country,property_region,`lat`,`long` FROM #__jomres_propertys WHERE propertys_uid = '".(int)$property_uid."' LIMIT 1";
			$propertyData=doSelectSql($query,2);
			$output['LAT']=	$propertyData['lat'];
			$output['LONG']=	$propertyData['long'];
			$output['APIKEY']=$jrConfig['google_maps_api_key'];
			if ( $output['LAT'] == 0.00 || strlen( $output['LAT'] ) ==0 || $output['LONG'] == 0.00 || strlen( $output['LONG'] ) ==0  ) // No lat or long details stored, we'll try to find the property via the address
				{
				$propertyData=doSelectSql($query,2);

				$output['ADDRESS']=
					$propertyData['property_street']." ".$propertyData['property_town']." ".
					$propertyData['property_region']." ".$propertyData['property_country'];

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'geocoder.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				if ($jrConfig['composite_property_details']!="1")
					$tmpl->displayParsedTemplate();
				else
					$this->retVals=$tmpl->getParsedTemplate();
				}
			else
				{
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'geocoder_latlong.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				if ($jrConfig['composite_property_details']!="1")
					$tmpl->displayParsedTemplate();
				else
					$this->retVals=$tmpl->getParsedTemplate();
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
		return $this->retVals;
		}
	}
?>