<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.7.2
	 *
	 * @copyright	2005-2023 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################


	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 * This class is used to get image captions for images. It's a placeholer class that doesn't do anything, but can be replaced by a plugin that does.
	 *
	 */
	#[AllowDynamicProperties]
	class jomres_image_captions
	{
		public function __construct( )
		{

		}

		public function get_caption ( $image_relative_path = '' )
		{
			return 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
		}
	}
