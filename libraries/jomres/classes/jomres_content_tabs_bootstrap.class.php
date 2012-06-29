<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


/**
#
 * Creates the Jomres config panel object
 #
* @package Jomres
* @since 2.6
#
*/
class jomres_content_tabs_bootstrap
	{
	/**
	#
	* Constructor.
	#
	*/
	
	function jomres_content_tabs_bootstrap()
		{
		$this->panes=array();
		$this->paneLink=array();
		$this->counter=1;
		$this->panelNames=array();
		$this->randomString ="";
		$this->useCookies=false;
		}

	/**
	#
	* Starts the tabs
	#
	*/
	function startTabs()
		{
		echo '<div id="tabbable" > <!-- start tabs panel -->';
		}

	/**
	#
	* Starts the panel
	#
	*/
	function startPanel($tabpage)
		{
		$this->content="";
		$active='';
		if (!get_showtime('first_tab_active'))
			{
			$active='active';
			set_showtime('first_tab_active',true);
			}
		$anchor=preg_replace('/[^A-Za-z0-9_-]+/', "", $tabpage);
		if (strlen($anchor)==0)
			$anchor=generateJomresRandomString(10);
		$tabCookieString="";
		$this->panelNames[]=$anchor;
		$this->paneLink[]='<li class="'.$active.'"><a href="#'.$anchor.'" data-toggle="tab">'.$tabpage.'</a></li>
		';
		$this->panes[]='<div class="tab-pane '.$active.'" id="'.$anchor.'"><!-- start content tab panel -->';
		}

	/**
	#
	* Inserts content into the panel
	#
	*/
	function insertContent()
		{
		$this->panes[]=$this->content.'
		';
		}

	/**
	#
	* Ends the panel
	#
	*/
	function endPanel()
		{
		$this->panes[]='</div> <!-- end content tab panel -->';
		}

	/**
	#
	* Ends the tabs
	#
	*/
	function endTabs()
		{
		echo '<ul class="nav nav-tabs">
		';
		foreach ($this->paneLink as $pane)
			{
			echo $pane;
			}
		echo '</ul>
		';
		echo '<div class="tab-content">
		';
		foreach ($this->panes as $pane)
			{
			echo $pane;
			}
		echo '</div> <!-- end tabs content -->
		';
		echo "</div> <!-- end tabs panel -->";
		}

	/**
	#
	* Adds content to the this->content array variable
	#
	*/
	function setcontent($val="&nbsp;")
		{
		$this->content.=$val;
		}
	}


?>