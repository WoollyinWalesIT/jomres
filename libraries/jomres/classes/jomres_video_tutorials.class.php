<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.1
 *
 * @copyright	2005-2021 Vince Wooll
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

class jomres_video_tutorials
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->task = '';
		$this->property_uid = 0;
		$this->show_all = false;
		
		$jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
		$jomres_language->get_language('video_tutorials');
		
	}
	
	/**
	 * 
	 *
	 *
	 */

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
				$r['DESCRIPTION'] = nl2br(jr_gettext($description, $description , false ));
				$r['VIDEO_ID'] = $video['video_id'];
				$r['VIDEO_ID_SANITISED'] = str_replace("-","", $video['video_id']);
				
				$rows[]=$r;
			}
			$pageoutput[ ] = $output;

			$tmpl = new patTemplate();
			if ($this->show_all) {
				if (!jomres_cmsspecific_areweinadminarea() ) {
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->readTemplatesFromInput('all_video_tutorials.html');
				} else {
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->readTemplatesFromInput('all_video_tutorials.html');
				}
			}
			elseif (!jomres_cmsspecific_areweinadminarea() ) {
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
				$tmpl->readTemplatesFromInput('video_tutorials.html');
			} else {
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->readTemplatesFromInput('video_tutorials.html');
			}

			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows1', $rows);
			$tmpl->addRows('rows2', $rows);
			$tmpl->addRows('rows3', $rows);
			$tmpl->addRows('rows4', $rows);
			return $tmpl->getParsedTemplate();
		} else return '';

	}
	
	
	//Get room details	
	/**
	 * 
	 *
	 *
	 */

	public function get_video_urls()
	{
		$mrConfig = getPropertySpecificSettings($this->property_uid);
		
		$videos_array = $this->get_videos_array();
		
		if ( jomres_cmsspecific_areweinadminarea() ) {
			$videos = $videos_array['ADMIN'];
			if(isset($videos_array['MRP'])) {
				$videos = array_merge($videos ,  $videos_array['MRP']);
			}
			if(isset($videos_array['SRP'])) {
				$videos = array_merge($videos ,  $videos_array['SRP']);
			}
			if(isset($videos_array['TOUR'])) {
				$videos = array_merge($videos ,  $videos_array['TOUR']);
			}
			if(isset($videos_array['REALESTATE'])) {
				$videos = array_merge($videos ,  $videos_array['REALESTATE']);
			}
		} elseif ($mrConfig[ 'is_real_estate_listing' ] == '1') {
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
	
	if ($this->show_all) {
		$all_videos = array();
		// There will be duplicates because videos can be shown on more than one page, so we'll put them into an array using the title as the key, which will give us a unique array
		foreach ($videos as $video_arr) {
			foreach ($video_arr as $video) {
				$title = $video['title'];
				$all_videos[$title] = $video;
			}
		}
		return $all_videos;
	} elseif (isset($videos[$this->task])) {
		return $videos[$this->task];
	} else {
		return '';
		}
	}
		
	/**
	 * 
	 *
	 *
	 */

	private function get_current_task() 
	{
		return get_showtime('task');
	}
	
		
	/**
	 * 
	 *
	 *
	 */

	private function get_videos_array() 
	{
		$videos_array = array( 
			'SRP' => array(),
			'MRP' => array(),
			'TOUR' => array(),
			'REALESTATE' => array(),
			'ADMIN'
			);
		
		// We will allow multiple items in the array for each task because tasks like tariff editing will require multiple videos for each editing  mode.
		
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		if ($thisJRUser->userIsManager) {
			$arr = array ("title" => "_JOMRES_TUTORIAL_CPANEL" , "description" => "_JOMRES_TUTORIAL_CPANEL_DESC" , "video_id" => "pIlliA6uJrU" );
			$videos_array['SRP']['cpanel'][] = $arr; 
			$videos_array['MRP']['cpanel'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_TIMELINE" , "description" => "_JOMRES_TUTORIAL_TIMELINE_DESC" , "video_id" => "0RuJCedh0CQ" );
			$videos_array['SRP']['dashboard'][] = $arr; 
			$videos_array['MRP']['dashboard'][] = $arr;
			$videos_array['SRP']['cpanel'][] = $arr; 
			$videos_array['MRP']['cpanel'][] = $arr;
			
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
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP" , "description" => "_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC" , "video_id" => "l2WlWJ6CkWo" );
			$videos_array['MRP']['edit_tariffs_normal'][] = $arr;
			$videos_array['MRP']['business_settings'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP" , "description" => "_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC" , "video_id" => "3_WWa7fD8-A" );
			$videos_array['SRP']['edit_tariffs_normal'][] = $arr; 
			$videos_array['SRP']['business_settings'][] = $arr; 
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP" , "description" => "_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC" , "video_id" => "F8vfL3Ph96U" );
			$videos_array['MRP']['list_tariffs_micromanage'][] = $arr;
			$videos_array['MRP']['business_settings'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP" , "description" => "_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC" , "video_id" => "yOzfwV6ncr4" );
			$videos_array['SRP']['list_tariffs_micromanage'][] = $arr;
			$videos_array['SRP']['business_settings'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP" , "description" => "_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC" , "video_id" => "oX_YKZbHKxw" );
			$videos_array['MRP']['list_tariffs_micromanage'][] = $arr;
			$videos_array['MRP']['business_settings'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES" , "description" => "_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC" , "video_id" => "ty61n8l2qVI" );
			$videos_array['MRP']['list_tariffs_micromanage'][] = $arr;
			$videos_array['MRP']['business_settings'][] = $arr;
			$videos_array['MRP']['listcustomertypes'][] = $arr;
			$videos_array['SRP']['list_tariffs_micromanage'][] = $arr;
			$videos_array['SRP']['business_settings'][] = $arr;
			$videos_array['SRP']['listcustomertypes'][] = $arr;
			
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP" , "description" => "_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC" , "video_id" => "azlhJ28mrdU" );
			$videos_array['MRP']['cpanel'][] = $arr;
			$videos_array['MRP']['show_property_room'][] = $arr;
			$videos_array['MRP']['media_centre'][] = $arr; 
			$videos_array['MRP']['list_resources'][] = $arr; 
			$videos_array['MRP']['edit_resource'][] = $arr; 
			$videos_array['MRP']['viewproperty'][] = $arr; 
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP" , "description" => "_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC" , "video_id" => "pNnPCxQT3YM" );
			$videos_array['SRP']['cpanel'][] = $arr;
			$videos_array['SRP']['media_centre'][] = $arr; 
			$videos_array['SRP']['viewproperty'][] = $arr; 
			}
		
		if (jomres_cmsspecific_areweinadminarea() ) {
			$arr = array ("title" => "_JOMRES_TUTORIAL_ADMIN_CPANEL" , "description" => "_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC" , "video_id" => "19_Nx_xSVl0" );
			$videos_array['ADMIN']['cpanel'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY" , "description" => "_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC" , "video_id" => "qU9Zr2DlYm4" );
			$videos_array['ADMIN']['cpanel'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY" , "description" => "_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC" , "video_id" => "pvK-qaF77eo" );
			$videos_array['ADMIN']['cpanel'][] = $arr;
			$videos_array['ADMIN']['property_approvals'][] = $arr;
			
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER" , "description" => "_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC" , "video_id" => "Ld3X4Swx4c4" );
			$videos_array['ADMIN']['cpanel'][] = $arr;
			$videos_array['ADMIN']['showplugins'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS" , "description" => "_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC" , "video_id" => "v3Ilb7xD78k" );
			$videos_array['ADMIN']['list_users'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL" , "description" => "_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC" , "video_id" => "kQRA4tJSZfM" );
			$videos_array['ADMIN']['access_control'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_PROPERTY_TYPES" , "description" => "_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC" , "video_id" => "LGsEuy4FD2k" );
			$videos_array['ADMIN']['list_property_types'][] = $arr;
			$videos_array['ADMIN']['edit_property_type'][] = $arr;
			$videos_array['ADMIN']['listGlobalroomTypes'][] = $arr;
			$videos_array['ADMIN']['editGlobalroomTypes'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS" , "description" => "_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC" , "video_id" => "x2EFJoNG0hA" );
			$videos_array['ADMIN']['media_centre'][] = $arr;
			$videos_array['ADMIN']['list_property_types'][] = $arr;
			$videos_array['ADMIN']['edit_property_type'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_PROPERTY_FEATURES" , "description" => "_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC" , "video_id" => "_tUzSU3BeWE" );
			$videos_array['ADMIN']['listPfeatures'][] = $arr;
			$videos_array['ADMIN']['editPfeature'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_SHORTCODES" , "description" => "_JOMRES_TUTORIAL_SHORTCODES_DESC" , "video_id" => "JwEwmxrG4c8" );
			$videos_array['ADMIN']['asamodule_report'][] = $arr;

			
			$arr = array ("title" => "_JOMRES_TUTORIAL_LOGFILES" , "description" => "_JOMRES_TUTORIAL_LOGFILES_DESC" , "video_id" => "lvImwRgJ6k0" );
			$videos_array['ADMIN']['list_error_logs'][] = $arr;
			$videos_array['ADMIN']['view_log_file'][] = $arr;

			
			$arr = array ("title" => "_JOMRES_TUTORIAL_TRANSLATIONS" , "description" => "_JOMRES_TUTORIAL_TRANSLATIONS_DESC" , "video_id" => "no5PSDuzBzo" );
			$videos_array['ADMIN']['translate_lang_file_strings'][] = $arr;
			$videos_array['ADMIN']['touch_templates'][] = $arr;
			$videos_array['ADMIN']['translate_locales'][] = $arr;
			
			$arr = array ("title" => "_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES" , "description" => "_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC" , "video_id" => "Rx7cwCLJrzc" );
			$videos_array['ADMIN']['list_property_categories'][] = $arr;
			$videos_array['ADMIN']['edit_property_category'][] = $arr;
		}

		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		set_showtime("videos_array" , $videos_array );
		$MiniComponents->triggerEvent('07150');
		$videos_array = get_showtime("videos_array");
		
		return $videos_array;
	}
}
