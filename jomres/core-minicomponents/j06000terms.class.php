<?php
#
/**
#
 * Mini-component core file: Constructs and displays one template of a property for each property uid passed to it
#
 * @author Vince Wooll <jomres@woollyinwales.co.uk>
#
 * @version 2.6
#
* @package Jomres
* @subpackage mini-components
#
* @copyright  2005-2006 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################

/**
#
 * Lists the properties, according to property uids passed from a search function
 #
* @package Jomres
#
 */
class j06000terms
	{
	/**
	#
	 * Constructor: Executes the sql query to find property details of those property uids passed by a search, then displays those details in the list_propertys patTemplate file
	#
	 */
	function j06000terms()
		{
		global $mrConfig,$jomresConfig_live_site,$jomresConfig_lang,$Itemid,$jrConfig,$MiniComponents,$mainframe;

		$property_uid 	= intval( jomresGetParam( $_REQUEST, 'property_uid', 0 ) );
		$this->pop		= jomresGetParam( $_REQUEST, 'popup', 0 );
		//if ($this->pop==1)
			//property_header($property_uid);

		$mrConfig			= getPropertySpecificSettings($property_uid);
		$userIsManager		= checkUserIsManager();

		$query="SELECT property_name,property_policies_disclaimers
		FROM #__jomres_propertys WHERE propertys_uid = '".$property_uid."' LIMIT 1";
		$propertyList = doSelectSql($query);

		foreach ($propertyList as $pproperty)
			$property_policiesdisclaimers=jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',htmlspecialchars(trim(stripslashes($pproperty->property_policies_disclaimers)), ENT_QUOTES) );

		if ( (!$userIsManager) || $userIsManager )
			{
			$query="SELECT constant,customtext FROM #__jomres_custom_text WHERE property_uid = '$property_uid' AND language = '$jomresConfig_lang'";
			$customTextList=doSelectSql($query);
			if (count($customTextList))
				{
				$customTextArray=array();
				foreach ($customTextList as $text)
					$customTextArray[$text->constant]=stripslashes($text->customtext);
				}

			$property=array();
			$property['LIVESITE']			= $jomresConfig_live_site;
			$property['HPROPERTYNAME']		= jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME);
			$property['HPOLICIESDISCLAIMERS']=jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS);

			$property['POLICIESDISCLAIMERS']=$property_policiesdisclaimers;
			if (empty($property['POLICIESDISCLAIMERS']))
				$property['HPOLICIESDISCLAIMERS']="";

			$property_deets[]	= $property;

			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->addRows( 'property_deets', $property_deets );
			$tmpl->readTemplatesFromInput( 'terms.html' );
			$tmpl->displayParsedTemplate();

			if ($mrConfig['dumpTemplate']=="1" && isset($tmpl) )
				$tmpl->dump();
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
