<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.7
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class jomres_video_tutorials
{
	private static $configInstance;

	public function __construct()
	{
		$this->task = '';
		$this->property_uid = 0;
		
		$jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
		$jomres_language->get_language('video_tutorials');
		
	}

	public static function getInstance()
	{
		if (!self::$configInstance) {
			self::$configInstance = new self();
		}

		return self::$configInstance;
	}

	
	public function build_modal() {
		$this->task = $this->get_current_task();
		$output = array();
		$output[ 'VIDEO_TUTORALS_TITLE' ] = jr_gettext('VIDEO_TUTORALS_TITLE', 'VIDEO_TUTORALS_TITLE', false);
		
		$videos = $this->get_video_urls();

		if (!empty($videos)) {
			$rows=array();
			foreach ($videos as $video) {
				$r = array();
				$title = $video['title'];
				$description = $video['description'];
				$r['TITLE'] = jr_gettext($title, $title , false );
				$r['DESCRIPTION'] = jr_gettext($description, $description , false );
				$r['VIDEO_ID'] = $video['video_id'];
				
				
				$rows[]=$r;
			}
			$pageoutput[ ] = $output;

			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('video_tutorials.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows1', $rows);
			$tmpl->addRows('rows2', $rows);
			$tmpl->addRows('rows3', $rows);
			$tmpl->addRows('rows4', $rows);
			return $tmpl->getParsedTemplate();
		} else return '';

	}
	
	
	//Get room details
	public function get_video_urls()
	{
		if ($this->property_uid == 0 ) {
			return null;
		}
		$mrConfig = getPropertySpecificSettings($this->property_uid);
		
		$videos_array = $this->get_videos_array();

		if ($mrConfig[ 'is_real_estate_listing' ] == '1') {
			$videos = $videos_array['REALESTATE'];
		} elseif ($mrConfig[ 'singleRoomProperty' ] == '1') {
			$videos = $videos_array['SRP'];
		} elseif (get_showtime('is_jintour_property') == true) {
			$videos = $videos_array['TOUR'];
		} else {
			$videos = $videos_array['MRP'];
		}
	
	if ($this->task == '' ) {
		$this->task = 'cpanel';
	}
	
	if (isset($videos[$this->task])) {
		return $videos[$this->task];
	} else {
		return '';
		}
	}
	
	private function get_current_task() 
	{
		return get_showtime('task');
	}
	
	
	private function get_videos_array() 
	{
		$videos_array = array( 
			'SRP' => array(),
			'MRP' => array(),
			'TOUR' => array(),
			'REALESTATE' => array()
			);
		
		// We will allow multiple items in the array for each task because tasks like tariff editing will require multiple videos for each editing  mode.
		$arr = array ("title" => "_JOMRES_TUTORIAL_CPANEL" , "description" => "_JOMRES_TUTORIAL_CPANEL_DESC" , "video_id" => "pIlliA6uJrU" );
		$videos_array['SRP']['cpanel'][] = $arr; 
		$videos_array['MRP']['cpanel'][] = $arr;
		
		$arr = array ("title" => "_JOMRES_TUTORIAL_TIMELINE" , "description" => "_JOMRES_TUTORIAL_TIMELINE_DESC" , "video_id" => "0RuJCedh0CQ" );
		$videos_array['SRP']['dashboard'][] = $arr; 
		$videos_array['MRP']['dashboard'][] = $arr;
		
		$arr = array ("title" => "_JOMRES_TUTORIAL_LISTPROPERTIES" , "description" => "_JOMRES_TUTORIAL_LISTPROPERTIES_DESC" , "video_id" => "6VL-iSS2go0" );
		$videos_array['SRP']['listyourproperties'][] = $arr; 
		$videos_array['MRP']['listyourproperties'][] = $arr;
		$videos_array['TOUR']['listyourproperties'][] = $arr;
		$videos_array['REALESTATE']['listyourproperties'][] = $arr;
		
		$arr = array ("title" => "_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP" , "description" => "_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC" , "video_id" => "oCtqbQyLdmU" );
		$videos_array['SRP']['edit_property'][] = $arr; 
		$videos_array['MRP']['edit_property'][] = $arr;
		$videos_array['TOUR']['listyourproperties'][] = $arr;
		$videos_array['REALESTATE']['listyourproperties'][] = $arr;
		
		$arr = array ("title" => "_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE" , "description" => "_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC" , "video_id" => "FQ3ARmrtz2g" );
		$videos_array['SRP']['business_settings'][] = $arr; 
		$videos_array['MRP']['business_settings'][] = $arr;
		
		//TODO need a Jintour video
		
		$arr = array ("title" => "_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP" , "description" => "_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC" , "video_id" => "l2WlWJ6CkWo" );
		$videos_array['MRP']['edit_tariffs_normal'][] = $arr;
		$videos_array['MRP']['business_settings'][] = $arr;
		
		$arr = array ("title" => "_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP" , "description" => "_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC" , "video_id" => "3_WWa7fD8-A" );
		$videos_array['SRP']['edit_tariffs_normal'][] = $arr; 
		$videos_array['SRP']['business_settings'][] = $arr; 
		
		$arr = array ("title" => "_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP" , "description" => "_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC" , "video_id" => "F8vfL3Ph96U" );
		$videos_array['MRP']['list_tariffs_micromanage'][] = $arr;
		$videos_array['MRP']['business_settings'][] = $arr;
		
		$arr = array ("title" => "_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP" , "description" => "_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC" , "video_id" => "oX_YKZbHKxw" );
		$videos_array['MRP']['list_tariffs_micromanage'][] = $arr;
		$videos_array['MRP']['business_settings'][] = $arr;
		
		$arr = array ("title" => "_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES" , "description" => "_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC" , "video_id" => "ty61n8l2qVI" );
		$videos_array['MRP']['list_tariffs_micromanage'][] = $arr;
		$videos_array['MRP']['business_settings'][] = $arr;
		$videos_array['MRP']['listcustomertypes'][] = $arr;
		
		
		// $arr = array ("title" => "_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP" , "description" => "_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC" , "video_id" => "oX_YKZbHKxw" );
		// $videos_array['MRP']['media_centre'][] = $arr;
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		set_showtime("videos_array" , $videos_array );
		$MiniComponents->triggerEvent('07150');
		$videos_array = get_showtime("videos_array");
		
		return $videos_array;
	}
}
