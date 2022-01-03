<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j10501file_uploads
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ( !isset($jrConfig[ 'admin_options_level' ]) ) {
			$jrConfig[ 'admin_options_level' ] = 0;
		}

		if ( $jrConfig[ 'admin_options_level' ] < 1 ) {
			return;
		}

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$lists = $componentArgs[ 'lists' ];

		$configurationPanel->startPanel(jr_gettext('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', false));

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_thumbnail_property_list_max_width" value="'.$jrConfig[ 'thumbnail_property_list_max_width' ].'">');
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', '_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_thumbnail_property_list_max_height" value="'.$jrConfig[ 'thumbnail_property_list_max_height' ].'">');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_THUMBNAIL_MED_WIDTH', '_JOMRES_COM_THUMBNAIL_MED_WIDTH', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_thumbnail_property_header_max_width" value="'.$jrConfig[ 'thumbnail_property_header_max_width' ].'">');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', '_JOMRES_COM_THUMBNAIL_MED_HEIGHT', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_thumbnail_property_header_max_height" value="'.$jrConfig[ 'thumbnail_property_header_max_height' ].'">');
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_maxwidth" value="'.$jrConfig[ 'maxwidth' ].'">');
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_COM_A_UPLOADS_FILESIZE', '_JOMRES_COM_A_UPLOADS_FILESIZE', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_fileSize" value="'.$jrConfig[ 'fileSize' ].'">');
		$configurationPanel->setright(jr_gettext('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', '_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', false));
		$configurationPanel->insertSetting();
		
		/* $configurationPanel->setleft(jr_gettext('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', false));
		$configurationPanel->setmiddle($lists['optimize_images']);
		$configurationPanel->setright(jr_gettext('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', false));
		$configurationPanel->insertSetting(); */
		
		//plugins can add options to this tab
		$MiniComponents->triggerEvent('10524', $componentArgs);

		$configurationPanel->endPanel();
	}


	public function getRetVals()
	{
		return null;
	}
}
