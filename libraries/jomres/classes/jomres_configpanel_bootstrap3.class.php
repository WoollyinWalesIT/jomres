<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


jr_import( 'jomres_content_tabs' );

/**
#
 * Creates the Jomres config panel object
#
 *
 * @package Jomres
 * @since 2.6
#
 */
class jomres_configpanel_bootstrap3 extends jomres_content_tabs
	{
	/**
	#
	 * Inserts the settings into the panes array
	#
	 */
	function insertSetting()
		{
		$this->panes[ ] = '
			<div class="form-group">
				<div class="control-label">' . $this->left . '</div>
				' . $this->middle . '
				<p class="help-block">' . $this->right . '</p>
			</div>
			';

		$this->counter++;
		}

	/**
	#
	 * setleft panel
	#
	 */
	function setleft( $val = "&nbsp;" )
		{
		$this->left = $val;
		}

	/**
	#
	 * setmiddle panel
	#
	 */
	function setmiddle( $val = "&nbsp;" )
		{
		$this->middle = $val;
		}

	/**
	#
	 * setright panel
	#
	 */
	function setright( $val = "&nbsp;" )
		{
		$this->right = $val;
		}
	}

?>