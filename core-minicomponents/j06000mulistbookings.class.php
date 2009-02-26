<?php
/**
#
 * Mini-component core file:
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


class j06000mulistbookings {
	function j06000mulistbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $thisJRUser,$mrConfig,$jrConfig,$jomresConfig_live_site;

		if ($thisJRUser->userIsRegistered)
			{
			$pageoutput=array();
			$output=array();
			$rows=array();
			$r=array();
			$allGuestUids=array();
			
			$query="SELECT guests_uid FROM #__jomres_guests WHERE mos_userid = '".(int)$thisJRUser->id."' ";
			$guests_uids=doSelectSql($query);
			// Because a new record is made in the guests table for each new property the guest registers in, we need to find all the guest uids for this user
			if (count($guests_uids) > 0)
				{
				foreach ($guests_uids as $g)
					{
					$allGuestUids[]=$g->guests_uid;
					}
				
				$gOr = genericOr($allGuestUids,"guest_uid");
				$query="SELECT * FROM #__jomres_contracts WHERE ".$gOr." AND cancelled = 0 ORDER BY tag";
				$contracts=doSelectSql($query);
				if (count($contracts)>0)
					{
					$output['HARRIVAL']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL,$editable=false,$isLink=false);
					$output['HDEPARTURE']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE,$editable=false,$isLink=false);
					$output['HTOTAL']=jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL,$editable=false,$isLink=false);
					$output['HEXTRAS']=jr_gettext('_JOMRES_AJAXFORM_BILLING_EXTRAS',_JOMRES_AJAXFORM_BILLING_EXTRAS,$editable=false,$isLink=false);
					$output['HPNAME']=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME',_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME,$editable=false,$isLink=false);

					$output['HMOREINFO']=jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION,$editable=false,$isLink=false);
					$output['TITLE']=jr_gettext('_JOMCOMP_MYUSER_MYBOOKINGS',_JOMCOMP_MYUSER_MYBOOKINGS,$editable=false,$isLink=false);

					$counter=0;
					foreach ($contracts as $c)
						{
						$mrConfig=getPropertySpecificSettings($c->property_uid);
						$counter++;
						 if ($counter % 2)
							$r['STYLE'] ="odd";
						else
							$r['STYLE'] ="even";
						$currfmt = new jomres_currency_format();
						$currency=$mrConfig['currency'];
						$r['PROPERTYNAME']=getPropertyNameNoTables($c->property_uid);
						$r['ARRIVAL']=outputDate($c->arrival);
						$r['DEPARTURE']=outputDate($c->departure);
						$r['lastchanged']=$c->timestamp;
						$r['EXTRASVALUE']=$currency.$currfmt->get_formatted($c->extrasvalue);
						$r['CONTRACT_TOTAL']=$currency.$currfmt->get_formatted($c->contract_total);
						$fileLocation=$jrConfig['ss_imageLocation'];
						if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.$fileLocation.$c->property_uid.'_property_'.$c->property_uid.'.jpg') )
							$r['IMAGE']='<img src="'.$jomresConfig_live_site.$fileLocation.$c->property_uid.'_property_'.$c->property_uid.'.jpg" width="40">';
						else
							$r['IMAGE']='&nbsp;';
						$r['VIEWLINK']=makePopupLink(JOMRES_SITEPAGE_URL."&task=muviewbooking&popup=1&contract_uid=".$c->contract_uid,jr_gettext('_JOMCOMP_MYUSER_VIEWBOOKING',_JOMCOMP_MYUSER_VIEWBOOKING,$editable=false,$isLink=true));
						$r['PROPERTYDETAILSLINK']=JOMRES_SITEPAGE_URL.'&task=viewproperty&property_uid='.$c->property_uid;
						$rows[]=$r;
						}

					$pageoutput[]=$output;
					$tmpl = new patTemplate();
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->addRows( 'pageoutput',$pageoutput);
					$tmpl->addRows( 'rows', $rows );
					$tmpl->readTemplatesFromInput( 'list_bookings.html' );
					$tmpl->displayParsedTemplate();
					}
				}
			else
				{
				echo jr_gettext('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE',_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE,$editable=false,$isLink=false);
				}
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output['HARRIVAL']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL',_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL);
		$output['HDEPARTURE']=jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE',_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE);
		$output['HTOTAL']=jr_gettext('_JOMRES_AJAXFORM_BILLING_TOTAL',_JOMRES_AJAXFORM_BILLING_TOTAL);
		$output['HEXTRAS']=jr_gettext('_JOMRES_AJAXFORM_BILLING_EXTRAS',_JOMRES_AJAXFORM_BILLING_EXTRAS);
		$output['HPNAME']=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME',_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME);
		$output['HMOREINFO']=jr_gettext('_JOMRES_COM_A_CLICKFORMOREINFORMATION',_JOMRES_COM_A_CLICKFORMOREINFORMATION);
		$output['TITLE']=jr_gettext('_JOMCOMP_MYUSER_MYBOOKINGS',_JOMCOMP_MYUSER_MYBOOKINGS);

		foreach ($output as $o)
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>