<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_ribbon_generator
{	
	/**
	 * 
	 * Class determines what ribbon text to apply and builds ribbon (if appropriate)
	 *
	 */

	public function __construct( $property_uid = 0 )
	{
		$this->ribbon_text			= '';
		$this->ribbon_html			= '';
		$this->review_score			= 0;
		$this->review_score_text	= '';
		$this->rating_ribbon_text	= '';
		$this->background_colour	= '90EC33';
		$this->text_colour			= '000000';

		$this->discounted_properties = array();

		$this->property_uid = $property_uid;
		$this->find_discounted_properties();
	}

	private function find_discounted_properties()
	{
		$query = 'SELECT `property_uid` FROM #__jomres_settings WHERE (`akey` = "lastminuteactive" AND `value` = 1) OR (`akey` = "wisepriceactive" AND `value` = 1) ';
		$propys = doSelectSql($query);

		$published_properties = get_showtime('published_properties_in_system');

		$discounted_properties = array();
		if (!empty($propys)) {
			foreach ($propys as $p) {
				if ( in_array( (int) $p->property_uid , $published_properties ) ) {
					$this->discounted_properties[] = (int) $p->property_uid;
				}
			}
		}
	}
	public function set_review_score( $average_rating = 0 , $rating_ribbon_text = '' )
	{
		$this->review_score = $average_rating;
		$this->review_score_text = $rating_ribbon_text;
	}

	/*
	 * We'll try a few things to decide what the ribbon text should be
	 *
	 */
	private function find_text()
	{
		if ( $this->review_score > 5 ) {
			$this->ribbon_text = $this->review_score_text;
		} elseif ( in_array($this->property_uid , $this->discounted_properties )) {
			$this->ribbon_text = jr_gettext('JOMRES_RIBBON_TEXT_DISCOUNTED', 'JOMRES_RIBBON_TEXT_DISCOUNTED', false);
			$this->background_colour = 'EC0D0D';
			$this->text_colour = 'ffffff';
		}

		return $this->ribbon_text;
	}

	public function generate_html($text = '')
	{
		if ( $text == '' ) {
			$this->ribbon_text = $this->find_text();
		} else {
			$this->ribbon_text = $text;
		}

		$this->ribbon_html = "<div class='ribbon ".$this->text_colour."'><span class='' style='background:#".$this->background_colour.";color:#".$this->text_colour.";'>".$this->ribbon_text."</span></div>";
		return $this->ribbon_html;
	}
}
