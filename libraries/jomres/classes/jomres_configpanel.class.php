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
class jomres_configpanel extends jomres_content_tabs
	{
	/**
	#
	 * Inserts the settings into the panes array
	#
	 */
	function insertSetting()
		{
		$rowclass = "";
		if ( !$this->counter ) $this->counter = 0;
		if ( !using_bootstrap() )
			{
			if ( $this->counter % 2 ) $rowclass = "odd";
			else
			$rowclass = "even";
			$this->panes[ ] = '
			<tr class="' . $rowclass . '">
				<td width="30%">' . $this->left . '</td>
				<td>' . $this->middle . '</td>
				<td>' . $this->right . '</td>
			</tr>
			';
			}
		else
			{
			if ( $this->counter % 2 ) $rowclass = "row-even";
			else
			$rowclass = "row-odd";
			$this->panes[ ] = '
			<div class="row-fluid ' . $rowclass . '">
				<div class="span3">' . $this->left . '</div>
				<div class="span4">' . $this->middle . '</div>
				<div class="span5">' . $this->right . '</div>
			</div>
			';
			}
		$this->left   = "&nbsp;";
		$this->middle = "&nbsp;";
		$this->right  = "&nbsp;";
		$this->counter++;
		}
	
	function insertDescription( $description = "" , $class = "alert alert-info")
		{
		$this->panes[ ] = '<p class="'.$class.'">'.$description.'</p>';
		}
	
	function insertHeading( $text = "" , $type = "h3")
		{
		$this->panes[ ] = '<div class="row-fluid"><div class="span12"><'.$type.'>'.$text.'</'.$type.'></div></div>';
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