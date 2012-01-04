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
class jomres_content_tabs
	{
	/**
	#
	* Constructor.
	#
	*/
	function jomres_content_tabs()
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
		echo "<script type=\"text/javascript\" defer=\"true\">
		jomresJquery(document).ready(function() {
			//jomresJquery('#content_tabs').tabs();
			jomresJquery(\"#content_tabs\").tabs();
			});
		</script>
		";
		echo "<div id=\"content_tabs\" > <!-- start tabs panel -->";
		}

	/**
	#
	* Starts the panel
	#
	*/
	function startPanel($tabpage)
		{
		$this->content="";
		$anchor=ereg_replace("[^A-Za-z0-9]", "", $tabpage);
		if (strlen($anchor)==0)
			$anchor=generateJomresRandomString(10);
		$tabCookieString="";
		$this->panelNames[]=$anchor;
		$this->paneLink[]='<li><a href="#'.$anchor.'"><span>'.$tabpage.'</span></a></li>
		';
		$this->panes[]='<div id="'.$anchor.'"><!-- start content tab panel -->';
		$this->panes[]='<table width="100%" border="0"><tr><td>'; // Without this the tabs don't take up all the available content area, so this is needed (although, lack of sleep and r&r probably isn't helping).
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
		$this->panes[]='</td></tr></table>';
		$this->panes[]='</div> <!-- end content tab panel -->';
		}

	/**
	#
	* Ends the tabs
	#
	*/
	function endTabs()
		{
		echo '<ul>
		';
		foreach ($this->paneLink as $pane)
			{
			echo $pane;
			}
		echo '</ul>
		';
		foreach ($this->panes as $pane)
			{
			echo $pane;
			}

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