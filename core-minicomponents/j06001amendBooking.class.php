<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06001amendBooking
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		if ( !$thisJRUser->userIsManager ) return;

		$defaultProperty = getDefaultProperty();
		$contract_uid    = intval( jomresGetParam( $_REQUEST, 'contractUid', 0 ) );
		
		if (!can_modify_this_booking( (int) $contract_uid ) )
			{
			return;
			}
		
		if ( $contract_uid > 0 )
			{
			$tmpArray = array ();
			foreach ( $thisJRUser->authorisedPropertyDetails as $key => $val )
				{
				$obj                = new stdClass();
				$obj->propertys_uid = $key;
				$obj->property_name = $val[ 'property_name' ];
				$tmpArray[ ]        = $obj;
				}
			$propertysList = $tmpArray;
			if ( count( $propertysList == 1 ) ) jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=dobooking&amend=1&contractuid=" . $contract_uid . "&selectedProperty=" . $defaultProperty ) );
			$counter = 0;
			foreach ( $propertysList as $property )
				{
				if ( $counter == 0 ) $thisProperty = $property->propertys_uid;
				$counter++;
				$pname              = $property->property_name;
				$propertyOptions[ ] = jomresHTML::makeOption( $property->propertys_uid, stripslashes( $pname ) );
				}

			$propertyDropdown = jomresHTML::selectList( $propertyOptions, 'selectedProperty', 'class="inputbox" size="1"', 'value', 'text', $defaultProperty );
			
			$output[ 'PROPERTYDROPDOWN' ] = '' . $propertyDropdown . '';

			$cancelText = jr_gettext( '_JOMRES_COM_A_CANCEL', '_JOMRES_COM_A_CANCEL', false );
			$jrtbar     = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
			$jrtb       = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem( 'cancel', jomresURL( JOMRES_SITEPAGE_URL ), $cancelText );
			$jrtb .= $jrtbar->endTable();
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;

			$output[ 'PAGETITLE' ]      = jr_gettext( '_JOMCOMP_AMEND', '_JOMCOMP_AMEND' );
			$output[ 'SELECTPROPERTY' ] = jr_gettext( '_JOMCOMP_AMEND_SELECTPROPERTY', '_JOMCOMP_AMEND_SELECTPROPERTY' );
			$output[ 'CONTRACTUID' ]    = $contract_uid;

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();

			$tmpl->setRoot( JOMRES_TEMPLATEPATH_BACKEND );
			$tmpl->readTemplatesFromInput( 'amend_booking.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->displayParsedTemplate();
			}
		else
		echo "Incorrect contract uid";
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMCOMP_AMEND', '_JOMCOMP_AMEND' );
		$output[ ] = jr_gettext( '_JOMCOMP_AMEND_SELECTPROPERTY', '_JOMCOMP_AMEND_SELECTPROPERTY' );
		$output[ ] = jr_gettext( '_JOMRES_COM_A_CANCEL', '_JOMRES_COM_A_CANCEL' );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	function getRetVals()
		{
		return $this->returnValue;
		}
	}

?>