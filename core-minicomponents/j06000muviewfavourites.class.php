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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
// ################################################################


class j06000muviewfavourites {
	function j06000muviewfavourites()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=true; return;
			}
		global $Itemid,$thisJRUser,$mrConfig,$jrConfig,$jomresConfig_live_site;
		if ($thisJRUser->userIsRegistered)
			{
			$pageoutput=array();
			$output=array();
			$rows=array();
			$r=array();

			$query="SELECT property_uid FROM #__jomcomp_mufavourites WHERE my_id = '".(int)$thisJRUser->id."'";
			$favourites=doSelectSql($query);
			if (count($favourites)>0)
				{
				$output['HPNAME']=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME',_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME,$editable=false,$isLink=false);
				$counter=0;
				$output['HPTYPES']=jr_gettext('_JOMCOMP_MYUSER_PROPERTYTYPE',_JOMCOMP_MYUSER_PROPERTYTYPE,$editable=false,$isLink=false);

				foreach ($favourites as $f)
					{
					$query="SELECT ptype_id FROM #__jomres_propertys WHERE propertys_uid = '".(int)$f->property_uid."' LIMIT 1";
					$type_id=doSelectSql($query,1);

					$query="SELECT ptype FROM #__jomres_ptypes WHERE id = '".(int)type_id."' LIMIT 1";
					$ptype=doSelectSql($query,1);
					$mrConfig=getPropertySpecificSettings($f->property_uid);
					$propertyAddressArray=getPropertyAddressForPrint($f->property_uid);
					$propertyContactArray=$propertyAddressArray[1];
					$propertyAddyArray=$propertyAddressArray[2];

					$r['PROPERTYNAME']=$propertyContactArray[0];
					$r['PROP_STREET']=$propertyContactArray[1];
					$r['PROP_TOWN']=$propertyContactArray[2];
					$r['PROP_POSTCODE']=$propertyContactArray[3];
					$r['PROP_REGION']=$propertyContactArray[4];
					$countryname=getSimpleCountry($propertyContactArray[5]);
					$r['PROP_COUNTRY']=ucwords($countryname);
					$r['PROP_TEL']=$propertyAddyArray[0];
					$r['TYPE']=$ptype;
					$counter++;
					 if ($counter % 2)
						$r['STYLE'] ="odd";
					else
						$r['STYLE'] ="even";
					$fileLocation=$jrConfig['ss_imageLocation'];
					if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.$fileLocation.$f->property_uid.'_property_'.$f->property_uid.'.jpg') )
						$r['IMAGE']='<img src="'.$jomresConfig_live_site.$fileLocation.$f->property_uid.'_property_'.$f->property_uid.'.jpg" width="40">';
					else
						$r['IMAGE']='&nbsp;';
					$r['PROPERTYDETAILSLINK']=$jomresConfig_live_site.'/index.php?option=com_jomres&task=viewproperty&Itemid'.$Itemid.'=&property_uid='.$f->property_uid;
					$rows[]=$r;
					}

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->addRows( 'rows', $rows );
				$tmpl->readTemplatesFromInput( 'view_favourites.html' );
				$tmpl->displayParsedTemplate();
				}
			else
				{
				echo jr_gettext('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE',_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE,$editable=false,$isLink=false);
				}
			}
		}

	function touch_template_language()
		{
		$output=array();

		$output['H1']		=jr_gettext('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE',_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE);
		$output['HPTYPES']=jr_gettext('_JOMCOMP_MYUSER_PROPERTYTYPE',_JOMCOMP_MYUSER_PROPERTYTYPE);
		$output['HPNAME']=jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME',_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME);

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