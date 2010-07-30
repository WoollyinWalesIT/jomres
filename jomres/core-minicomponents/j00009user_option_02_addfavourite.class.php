<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00009user_option_02_addfavourite {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00009user_option_02_addfavourite($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		$property_uid		= (int)jomresGetParam( $_REQUEST, 'property_uid', 0 );
		$thisJRUser=jomres_getSingleton('jr_user');
		if ($thisJRUser->userIsRegistered)
			{
			$query="SELECT property_uid FROM #__jomcomp_mufavourites WHERE property_uid = '".(int)$property_uid."' AND my_id='".(int)$thisJRUser->id."'";
			$favourites=doSelectSql($query);
			$favs=array();
			if (count($favourites)>0)
				{
				foreach ($favourites as $f)
					{
					$favs[]=$f->property_uid;
					}
				}
			if (get_showtime('task')=='viewproperty' && !in_array($property_uid,$favs) )
				{
				$this->cpanelButton=jomres_mainmenu_option(JOMRES_SITEPAGE_URL."&task=muaddtofavourites&no_html=1&amp;property_uid=".$property_uid, '', jr_gettext('_JOMCOMP_MYUSER_ADDTOFAVOURITES',_JOMCOMP_MYUSER_ADDTOFAVOURITES,true,true) );
				}
			}
		}
	
	function touch_template_language()
		{
		$output=array();
		$output[]		=jr_gettext('_JOMCOMP_MYUSER_ADDTOFAVOURITES',_JOMCOMP_MYUSER_ADDTOFAVOURITES);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}
?>