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


class custom_text
	{
	private static $configInstance;
	private static $internal_debugging;

	public function __construct()
		{
		self::$internal_debugging 			= false;
		$this->lang               			= get_showtime( 'lang' );
		$this->global_custom_text 			= array();
		$this->all_properties_custom_text 	= array();

		$this->get_custom_text_for_all_properties();
		}

	public function reset_current_lang( $lang )
		{
		$this->lang							= $lang;
		$this->global_custom_text			= array();
		$this->all_properties_custom_text	= array();

		$this->get_custom_text_for_all_properties();
		}

	public static function getInstance()
		{
		if ( !self::$configInstance )
			{
			self::$configInstance = new custom_text();
			}

		return self::$configInstance;
		}

	public function __clone()
		{
		trigger_error( 'Cloning not allowed on a singleton object', E_USER_ERROR );
		}

	function get_custom_text_for_all_properties()
		{
		$c = jomres_singleton_abstract::getInstance( 'jomres_array_cache' );
		$custom_text_cache=$c->retrieve('custom_text_cache');
		
		if ($custom_text_cache)
			{
			$this->global_custom_text=$custom_text_cache['global_custom_text'];
			$this->all_properties_custom_text=$custom_text_cache['all_properties_custom_text'];
			}
		else
			{
			if ( count( $this->all_properties_custom_text ) == 0 || count( $this->global_custom_text ) == 0)
				{
				if ( $this->lang != '' ) $clause = "WHERE language = '" . $this->lang . "'";
				$this->all_properties_custom_text = array ();
				$this->global_custom_text         = array ();
				$query                            = "SELECT constant,customtext,language,property_uid FROM #__jomres_custom_text $clause ";
				$customTextList                   = doSelectSql( $query );
	
				if ( count( $customTextList ) )
					{
					$customTextArray = array ();
	
					foreach ( $customTextList as $text )
						{
						$theConstant = str_replace( "sc<x>ript", "script", $text->constant );
						if ($text->property_uid == 0) //it`s a global custom text
							$this->global_custom_text[ $theConstant ] = stripslashes( $text->customtext );
						else //it`s a property specific custom text
							$this->all_properties_custom_text[ $text->property_uid ][ $theConstant ] = stripslashes( $text->customtext );
						}
					}
				if (count( $this->global_custom_text ) == 0) // Need to set up some dummy data here, otherwise the array merge later will trigger an error (long story)
					$this->global_custom_text[ 'DUMMY_DATA' ] = 'DUMMY_DATA';
				$c->store('custom_text_cache',array('global_custom_text'=>$this->global_custom_text,'all_properties_custom_text'=>$this->all_properties_custom_text));
				}
			}
		}

	function get_custom_text_for_property( $property_uid = 0)
		{
		if ( (int)$property_uid > 0 ) 
			$this->property_uid = $property_uid;

		if ( isset( $this->global_custom_text ) && $this->property_uid > 0)
			{
			$current_custom_text = $this->global_custom_text;

			if ( (int) $this->property_uid > 0 && isset( $this->all_properties_custom_text[ $this->property_uid ] ) ) 
				$current_custom_text = array_merge( $this->all_properties_custom_text[ $this->property_uid ],$this->global_custom_text );
			elseif ( isset( $this->all_properties_custom_text[ $this->property_uid ] ) ) 
				$current_custom_text = $this->all_properties_custom_text[ $this->property_uid ];
			}
		else
			$current_custom_text = $this->global_custom_text;

		return $current_custom_text;
		}


	function get_custom_text()
		{
		$this->property_uid = (int)get_showtime( 'property_uid' );
		$result             = $this->get_custom_text_for_property( $this->property_uid );

		return $result;
		}
	}
