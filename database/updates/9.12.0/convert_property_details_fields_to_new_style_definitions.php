<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
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
 * Database modification during updates
 *
 **/
$old_style_property_description_definitions = array (
	'_JOMRES_CUSTOMTEXT_PROPERTY_NAME',
	'_JOMRES_CUSTOMTEXT_PROPERTY_STREET',
	'_JOMRES_CUSTOMTEXT_PROPERTY_TOWN',
	'_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION',
	'_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES',
	'_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES',
	'_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS',
	'_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS',
	'_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT',
	'_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS',
	'_JOMRES_CUSTOMTEXT_PROPERTY_METATITLE',
	'_JOMRES_CUSTOMTEXT_PROPERTY_METADESCRIPTION',
	'_JOMRES_CUSTOMTEXT_PROPERTY_METAKEYWORDS'
);

$old_translations = array();

foreach ( $old_style_property_description_definitions as $definition ){
	$query = "SELECT uid , constant , property_uid  FROM #__jomres_custom_text WHERE constant = '".$definition."'";
	$old_translations [$definition] = doSelectSql($query);
}

if (!empty($old_translations)) {
	foreach ($old_translations as $key=>$val) {
		if (!empty($val)) {
			foreach ($val as $record ) {
				$new_query = "UPDATE #__jomres_custom_text SET 
					`constant` = '".$record->constant."_".$record->property_uid."'
					WHERE
					`uid` = ".$record->uid."
					 ";
				doInsertSql($new_query);
			}
			
		}
	}
}

