<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_generic_booking_email
	{
	private static $configInstance;

	public function __construct()
		{
		$this->data = array ();
		$this->parsed_email = array();
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new jomres_generic_booking_email();
			}

		return self::$configInstance;
		}
	
	public function gather_data($contract_uid = 0, $property_uid = 0, $print = false)
		{
		if ($contract_uid == 0 )
			{
			throw new Exception( "Error: Contract uid not set.");
			}
		if ($property_uid == 0 )
			{
			throw new Exception( "Error: Property uid not set.");
			}
		
		if ( array_key_exists( $contract_uid, $this->data ) )
			return $this->data[$contract_uid];
			
		$mrConfig            = getPropertySpecificSettings();
		
		$tmpBookingHandler   = jomres_singleton_abstract::getInstance( 'jomres_temp_booking_handler' );
		$thisJRUser			 = jomres_singleton_abstract::getInstance( 'jr_user' );
		$MiniComponents 	 = jomres_singleton_abstract::getInstance( 'mcHandler' );
		
		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data($property_uid);
		
		$current_contract_details = jomres_singleton_abstract::getInstance( 'basic_contract_details' );
		$current_contract_details->gather_data($contract_uid, $property_uid);

		//selected rooms/resources and tariff details
		$this->data[$contract_uid]['ROOMS'] = '';
		if (isset($current_contract_details->contract[$contract_uid]['roomdeets']))
			{
			foreach ($current_contract_details->contract[$contract_uid]['roomdeets'] as $rd)
				{
				$this->data[$contract_uid]['ROOMS'] .= $current_property_details->all_room_types[$rd['room_classes_uid']]['room_class_abbv'];
				
				if ($rd[ 'room_name' ] != '')
					$this->data[$contract_uid]['ROOMS'] .= ' - ' . $rd[ 'room_name' ];
				
				if ($rd[ 'room_number' ] != '')
					$this->data[$contract_uid]['ROOMS'] .= ' - ' . $rd[ 'room_number' ];
				
				$this->data[$contract_uid]['ROOMS'] .= '; ';
				
				if (!isset($this->data[$contract_uid]['TARIFFS']))
					$this->data[$contract_uid]['TARIFFS'] = '';
				
				$this->data[$contract_uid]['TARIFFS'] .= $rd[ 'rate_title' ] . '; ';
				}
			}
		
		//guest details
		$this->data[$contract_uid]['FIRSTNAME'] = $current_contract_details->contract[$contract_uid]['guestdeets']['firstname'];
		$this->data[$contract_uid]['SURNAME'] = $current_contract_details->contract[$contract_uid]['guestdeets']['surname'];
		$this->data[$contract_uid]['HOUSE'] = $current_contract_details->contract[$contract_uid]['guestdeets']['house'];
		$this->data[$contract_uid]['STREET'] = $current_contract_details->contract[$contract_uid]['guestdeets']['street'];
		$this->data[$contract_uid]['TOWN'] = $current_contract_details->contract[$contract_uid]['guestdeets']['town'];
		$this->data[$contract_uid]['REGION']=$current_contract_details->contract[$contract_uid]['guestdeets']['county'];
		$this->data[$contract_uid]['COUNTRY'] = $current_contract_details->contract[$contract_uid]['guestdeets']['country'];
		$this->data[$contract_uid]['POSTCODE'] = $current_contract_details->contract[$contract_uid]['guestdeets']['postcode'];
		$this->data[$contract_uid]['LANDLINE'] = $current_contract_details->contract[$contract_uid]['guestdeets']['tel_landline'];
		$this->data[$contract_uid]['MOBILE'] = $current_contract_details->contract[$contract_uid]['guestdeets']['tel_mobile'];
		$this->data[$contract_uid]['EMAIL'] = $current_contract_details->contract[$contract_uid]['guestdeets']['email'];
		
		//extras details
		if (isset($current_contract_details->contract[$contract_uid]['extradeets']))
			{
			foreach ( $current_contract_details->contract[$contract_uid]['extradeets'] as $extra )
				{
				if (!isset($this->data[$contract_uid]['EXTRAS']))
					$this->data[$contract_uid]['EXTRAS'] = '';
				
				$this->data[$contract_uid]['EXTRAS'] .= $extra['name'] . ' x ' . $extra['qty'] . '; ';
				}
			}
		
		//links
		$this->data[$contract_uid]['LINK_TO_PROPERTY'] = "<a href=\"" . JOMRES_SITEPAGE_URL_NOSEF . "&task=viewproperty&property_uid=" . $property_uid . "\">" . jr_gettext( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', false, false ) . "</a>";
		
		if ( !$thisJRUser->userIsManager && $thisJRUser->userIsRegistered )
			{
			$this->data[$contract_uid]['LINK_TO_BOOKING'] = "<a href=\"" . JOMRES_SITEPAGE_URL_NOSEF . "&task=muviewbooking&contract_uid=" . $contract_uid . "\">" . jr_gettext( '_JOMCOMP_MYUSER_VIEWBOOKING', '_JOMCOMP_MYUSER_VIEWBOOKING', false, false ) . "</a>";
			}
		
		//number of guest types
		if (isset($current_contract_details->contract[$contract_uid]['guesttype']))
			{
			foreach ( $current_contract_details->contract[$contract_uid]['guesttype'] as $type )
				{
				if (!isset($this->data[$contract_uid]['NUMBER_OF_GUESTS']))
					$this->data[$contract_uid]['NUMBER_OF_GUESTS'] = '';
				
				$this->data[$contract_uid]['NUMBER_OF_GUESTS'] .= $type[ 'title' ].' x '.$type[ 'qty' ].', ';
				}
			}
		
		//invoice printout
		$invoice_id = 0;
		
		if (isset($MiniComponents->miniComponentData[ '03025' ][ 'insertbooking_invoice' ][ 'invoice_id' ]))
			$invoice_id = (int)$MiniComponents->miniComponentData[ '03025' ][ 'insertbooking_invoice' ][ 'invoice_id' ];
		
		if ((int)$invoice_id == 0)
			{
			$invoice_id = $current_contract_details->contract[$contract_uid]['contractdeets']['invoice_uid'];
			}

		if ( (int) $invoice_id > 0 )
			{
			$invoice_template = $MiniComponents->specificEvent( '06005', 'view_invoice', array ( 'internal_call' => true, 'invoice_id' => $invoice_id ) );
			$this->data[$contract_uid]['INVOICE'] = $invoice_template;
			}
		
		//qr codes
		$url = JOMRES_SITEPAGE_URL_NOSEF . "&task=editBooking&thisProperty=" . $property_uid . "&contract_uid=" . $contract_uid;
		$this->data[$contract_uid]['QR_CODE_OFFICE'] = jomres_make_qr_code( $url );
		
		$url = make_gmap_url_for_property_uid( $property_uid );
		$this->data[$contract_uid]['QR_CODE_MAP'] = jomres_make_qr_code( $url );
		
		if ($print)
			{
			$this->data[$contract_uid]['QR_OFFICE'] = '<img src="'.$this->data[$contract_uid]['QR_CODE_OFFICE']['relative_path'].'" width="100" height="100" alt="qrcode"/>';
			$this->data[$contract_uid]['QR_DIRECTIONS'] = '<img src="'.$this->data[$contract_uid]['QR_CODE_MAP']['relative_path'].'" width="100" height="100" alt="qrcode"/>';
			}
		else
			{
			$this->data[$contract_uid]['QR_OFFICE'] = '<img src="cid:qr_code_office" width="100" height="100" alt="qrcode"/>';
			$this->data[$contract_uid]['QR_DIRECTIONS'] = '<img src="cid:qr_code_map" width="100" height="100" alt="qrcode"/>';
			}
		
		//custom fields
		$ptype_id = $current_property_details->ptype_id;
		$custom_field_output = array ();
		
		$jomres_custom_field_handler = jomres_singleton_abstract::getInstance('jomres_custom_field_handler');
		$allCustomFields = $jomres_custom_field_handler->getAllCustomFieldsByPtypeId($ptype_id);
		
		if ( count( $allCustomFields ) > 0 )
			{
			$this->data[$contract_uid]['CUSTOM_FIELDS'] = '';
			foreach ( $allCustomFields as $f )
				{
				$formfieldname          = $f[ 'fieldname' ] . "_" . $f[ 'uid' ];
				if (isset($tmpBookingHandler->tmpbooking[ $formfieldname ]))
					$this->data[$contract_uid]['CUSTOM_FIELDS'] .= jr_gettext( 'JOMRES_CUSTOMTEXT' . $f[ 'uid' ], $f[ 'description' ] ).': '.$tmpBookingHandler->tmpbooking[ $formfieldname ].'; ';
				}
			}
		
		//other output
		$this->data[$contract_uid]['PAYMENT_LINK'] = JOMRES_SITEPAGE_URL_NOSEF."&task=confirmbooking&selectedProperty=".$property_uid."&sk=".$current_contract_details->contract[$contract_uid]['contractdeets']['secret_key']."&nofollowtmpl=nofollowtmpl";
		
		$this->data[$contract_uid]['BOOKING_NUMBER'] = $current_contract_details->contract[$contract_uid]['contractdeets']['tag'];
		$this->data[$contract_uid]['ARRIVAL'] = outputDate( $current_contract_details->contract[$contract_uid]['contractdeets']['arrival'] );
		$this->data[$contract_uid]['DEPARTURE'] = outputDate( $current_contract_details->contract[$contract_uid]['contractdeets']['departure'] );
		$this->data[$contract_uid]['TOTAL'] = output_price( $current_contract_details->contract[$contract_uid]['contractdeets']['contract_total'] );
		$this->data[$contract_uid]['DEPOSIT'] = output_price( $current_contract_details->contract[$contract_uid]['contractdeets']['deposit_required'] );
		$this->data[$contract_uid]['BALANCE'] = output_price( $current_contract_details->contract[$contract_uid]['contractdeets']['contract_total'] - $current_contract_details->contract[$contract_uid]['contractdeets']['deposit_required'] );
		$this->data[$contract_uid]['SPECIAL_REQUIREMENTS'] = jomres_decode($current_contract_details->contract[$contract_uid]['contractdeets']['special_reqs']);
		
		$this->data[$contract_uid]['ALLOCATION_NOTE'] = '';
		if (isset($tmpBookingHandler->tmpbooking[ "booking_notes" ][ "suppliment_note" ]))
			$this->data[$contract_uid]['ALLOCATION_NOTE'] = $tmpBookingHandler->tmpbooking[ "booking_notes" ][ "suppliment_note" ];
		$this->data[$contract_uid]['BOOKING_CREATION_DATE'] = outputDate($current_contract_details->contract[$contract_uid]['contractdeets']['timestamp']);
		
		$this->data[$contract_uid]['REMOTE_IP'] = $_SERVER['REMOTE_ADDR'];
		
		//property address and policies
		$this->data[$contract_uid]['PROPERTY_NAME'] = $current_property_details->property_name;
		$this->data[$contract_uid]['PROPERTY_STREET'] = $current_property_details->property_street;
		$this->data[$contract_uid]['PROPERTY_TOWN'] = $current_property_details->property_town;
		$this->data[$contract_uid]['PROPERTY_REGION'] = $current_property_details->property_region;
		$this->data[$contract_uid]['PROPERTY_COUNTRY'] = $current_property_details->property_country;
		$this->data[$contract_uid]['PROPERTY_POSTCODE'] = $current_property_details->property_postcode;
		$this->data[$contract_uid]['PROPERTY_TEL'] = $current_property_details->property_tel;
		$this->data[$contract_uid]['PROPERTY_FAX'] = $current_property_details->property_fax;
		$this->data[$contract_uid]['PROPERTY_EMAIL'] = $current_property_details->property_email;
		$this->data[$contract_uid]['POLICIES_AND_DISCLAIMERS'] = $current_property_details->property_policies_disclaimers;
		
		return true;
		}
	
	public function parse_email($email_type = '', $contract_uid = 0)
		{
		$this->parsed_email = array();
		$pageoutput = array();
		
		if ($email_type == '' || $contract_uid == 0)
			return;

		//get custom template
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if (isset($MiniComponents->registeredClasses['03150'.$email_type]))
			$MiniComponents->specificEvent( '03150', $email_type );
		else
			return;
		
		$email_default_html = file_get_contents( $MiniComponents->miniComponentData['03150'][$email_type]['default_template'] );
		$email_default_html = str_replace("[", "{", $email_default_html);
		$email_default_html = str_replace("]", "}", $email_default_html);
		
		$email_body = jr_gettext('_EMAIL_TEXT_'.$email_type, $email_default_html, false);
		$email_subject = jr_gettext('_EMAIL_SUBJECT_'.$email_type, '[PROPERTY_NAME] - [BOOKING_NUMBER]', false);
		
		//let`s replace the [ ] with { }
		$email_body = str_replace("[", "{", $email_body);
		$email_body = str_replace("]", "}", $email_body);
		$email_subject = str_replace("[", "{", $email_subject);
		$email_subject = str_replace("]", "}", $email_subject);

		//parse emails
		$pageoutput[] = $this->data[$contract_uid];
		
		//parse email subject
		$tmpl = new patTemplate();
		$tmpl->readTemplatesFromInput( '<patTemplate:tmpl name="pageoutput" unusedvars="strip">'.$email_subject.'</patTemplate:tmpl>', 'String' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$this->parsed_email['subject'] = $tmpl->getParsedTemplate();

		//parse email body
		$tmpl = new patTemplate();
		$tmpl->readTemplatesFromInput( '<patTemplate:tmpl name="pageoutput" unusedvars="strip">'.$email_body.'</patTemplate:tmpl>', 'String' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$this->parsed_email['text'] = $tmpl->getParsedTemplate();
		
		//attachments
		$office_qr_code = array ( "type" => "image", "image_path" =>$this->data[$contract_uid]['QR_CODE_OFFICE'][ 'absolute_path' ], "CID" => "qr_code_office" );
		$this->parsed_email['attachments'][] = $office_qr_code;

		$map_qr_code = array ( "type" => "image", "image_path" => $this->data[$contract_uid]['QR_CODE_MAP'][ 'absolute_path' ], "CID" => "qr_code_map" );
		$this->parsed_email['attachments'][] = $map_qr_code;
		
		return true;
		}
	}
