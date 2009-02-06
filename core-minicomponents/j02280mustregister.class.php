<?php
/**
#
 * Mini-component core file: Constructs and displays  error message to user
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################


/**
#
 * Constructs and displays  error message to user
 #
* @package Jomres
#
 */
class j02280mustregister {
	/**
	#
	 * Constructor: Displays error message to user
	#
	 */
	function j02280mustregister()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents,$Itemid;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		if (!defined('_JOMRES_NEWJOOMLA') )
			echo '<a href="'.jomresURL("index.php?option=com_registration&task=register").'">'.jr_gettext('_JOMRES_REGISTEREDUSERSONLYBOOK',_JOMRES_REGISTEREDUSERSONLYBOOK,false).'</a>';
		else
			echo '<a href="'.jomresURL("index.php?option=com_user&view=login&Itemid=".$Itemid).'">'.jr_gettext('_JOMRES_REGISTEREDUSERSONLYBOOK',_JOMRES_REGISTEREDUSERSONLYBOOK,false).'</a>';
		}

	function touch_template_language()
		{
		$output=array();

		$output[]		=jr_gettext('_JOMRES_REGISTEREDUSERSONLYBOOK',_JOMRES_REGISTEREDUSERSONLYBOOK);

		foreach ($output as $o)
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
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>