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


class j00012manager_first_run {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00012manager_first_run($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$thisJRUser=jomres_getSingleton('jr_user');
		if (isset($_REQUEST['no_html']) && $_REQUEST['no_html'] == "1")
			return;
		if ($thisJRUser->id != 42)
			return;
		if (get_showtime('numberOfPropertiesInSystem')>1)
			return;

		$logfile=JOMRES_SYSTEMLOG_PATH.'managers_first_run'.$thisJRUser->id.'.txt';
		$step_count = 5;

		if (!file_exists($logfile))
			{
			touch($logfile);
			$count=0;
			
			echo '<div id = "first_run" style="display:none;text-align:left;" title="Welcome to the booking system.">';
			echo '<p class="ui-state-highlight">Here we will walk you through configuring your first property.</p>';
			
			
			echo '
			<p><strong>Introduction.</strong></p>
			<p>There are a number of things you need to do to set up a property. Depending on your system\'s configuration this may include many configuration settings, however here we will address the most common steps required to get your property ready for bookings. They are as follows :
			<ul>
				<li>
					Decide if your property is going to be a multi-room property like a hotel or bed and breakfast, or if you are going to rent out the entire property, e.g. like an apartment or a villa.
				</li>
				<li>
					Next you will edit your property\'s basic details, like it\'s name, address, features that might be of interest to potential customers and it\'s location. 
				</li>
				<li>
					When that is done, you will set up some basic pricing information for your property.
				</li>
				<li>
					You will preview your property\'s details page, this is the page that visitors will see when they come to your site.
				</li>
				<li>
					Finally, you will make a test booking to show you what a guest will do to make a booking.
				</il>
			</ul>
			</p>
			<p>
			When you are ready, click the Continue button to go to the next step.
			</p>
			<a href="'.JOMRES_SITEPAGE_URL.'&task=hotelSettings" class="fg-button ui-state-default ui-corner-all" >Continue</a>
			';
			
			echo '</div>
			';
			echo '<script>jomresJquery( "#first_run" ).dialog({width:980,modal:true});</script>';
			
			}
		else
			{
			$count = (int)file_get_contents ($logfile);
			if ($count >5)
				return;

			if ($count == 1 && get_showtime('task') != "hotelSettings" )
				{
				jomresRedirect(JOMRES_SITEPAGE_URL.'&task=hotelSettings');
				return;
				}
			if ($count == 1)
				{
				echo '<div id = "first_run" style="display:none;text-align:left;" title="Basic property configuration">';
				echo '<p>This is the property configuration page. There are a lot of options here, but for now we\'d like you to only look at one option, which is under the tab marked "SRPs". The option is titled <i>"Is this an apartment/cottage/villa?"</i> </p>';
				echo '<p>Please look at that option and set it to whichever is appropriate for your property.</p>';
				echo '<p>When you are ready, click the X at the top right of this popup and change the setting, if required, then click Save.</p>';
				
				echo '</div>';
				echo '<script>jomresJquery( "#first_run" ).dialog({width:500,modal:true});</script>';
				}
				
			if ($count == 2 && get_showtime('task') != "editProperty" )
				{
				jomresRedirect(JOMRES_SITEPAGE_URL.'&task=editProperty&propertyUid='.(int)$thisJRUser->defaultproperty);
				return;
				}
			if ($count == 2)
				{
				echo '<div id = "first_run" style="display:none" title="Edit your property details">';
				echo '<p>On this page you can change your property\'s basic details, so let\'s get started. Please change your property\'s name, address, location in the map and select any property features that are appropriate to your business. Finally, and this is an important step, please enter your email address, this is the address that booking information is sent to. Please do not try to upload an image at this stage.</p>';
				echo '<p>When you are ready, click the X at the top right of this popup, change the details, then click Save.</p>';
				echo '</div>';
				echo '<script>jomresJquery( "#first_run" ).dialog({width:500,modal:true});</script>';
				}
				
			if ($count == 3 && get_showtime('task') != "propertyadmin" )
				{
				jomresRedirect(JOMRES_SITEPAGE_URL.'&task=propertyadmin');
				return;
				}
			if ($count == 3)
				{
				echo '<div id = "first_run" style="display:none" title="Configure your prices">';
				echo '<p>This is the rooms and tariffs page. On a normal installation you will be able to set a simple series of prices that will be valid for the next 10 years, however this can be changed later on in the Property Configuration section by selecting more advanced tariff editing modes. For now, we would like you to set some basic prices for your property. You must set <i>some</i> prices, however, even if you do not intend to make the property publicly viewable just yet.</p>';
				echo '<p>When you are ready, click the X at the top right of this popup, change the details, then click Save.</p>';
				echo '</div>';
				echo '<script>jomresJquery( "#first_run" ).dialog({width:500,modal:true});</script>';
				}

			if ($count == 4 && get_showtime('task') != "preview" )
				{
				jomresRedirect(JOMRES_SITEPAGE_URL.'&task=preview');
				return;
				}
			if ($count == 4)
				{
				echo '<div id = "first_run" style="display:none" title="Review your property details page">';
				echo '<p>This is the page that your potential customers will see most of the time, it contains your property details including any availability information, prices, location and anything else you want to share with them.</p>';
				echo '<p>When you are ready, click the X at the top right of this popup and review the details. When you are done click on any page and you will be taken to the final step.</p>';
				echo '</div>';
				echo '<script>jomresJquery( "#first_run" ).dialog({width:500,modal:true});</script>';
				}
				
			if ($count == 5 && get_showtime('task') != "dobooking" )
				{
				jomresRedirect(JOMRES_SITEPAGE_URL.'&task=dobooking');
				return;
				}
			if ($count == 5)
				{
				echo '<div id = "first_run" style="display:none" title="Make a test booking">';
				echo '<p>This is the booking form, it\'s what your guests will see when they make a booking with you, so go ahead and play make a test booking.</p>';
				echo '<p>That\'s it, you\'ve gone through our brief tutorial that will get you up and running with your new property, now it\'s time for you to dream, explore, discover the potential awaiting you.</p>';
				echo '</div>';
				echo '<script>jomresJquery( "#first_run" ).dialog({width:500,modal:true});</script>';
				}
			}

		if ($count <= $step_count )
			{
			$count++;
			$fp=fopen($logfile,'r+');
			fwrite($fp, $count );
			fclose($fp);
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