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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000viewproperty
	{
	function j16000viewproperty($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$id=$componentArgs['id'];
		$numberOfYearsToShow=3;
		if (is_null($id) )
			$id = jomresGetParam( $_REQUEST, 'id',	0 );

		if ($id ==0)
			trigger_error ("Front end stats ID empty", E_USER_ERROR);

		jr_import('jrportal_booking_functions');
		jr_import('jrportal_crate_functions');
		jr_import('jrportal_property_functions');
		$propertyFunctions=new jrportal_property_functions();
		$bookingFunctions=new jrportal_booking_functions();
		$crateFunctions=new jrportal_crate_functions();

		$output['PAGETITLE']=_JRPORTAL_PROPERTIES_VIEWPROPERTY;
		$output['HPROPERTYNAME']=_JRPORTAL_PROPERTIES_PROPERTYNAME;
		$output['HPROPERTYADDRESS']=_JRPORTAL_PROPERTIES_PROPERTYADDRESS;
		$output['HNUMBEROFBOOKINGS']=_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS;
		$output['HVALUEOFBOOKINGS']=_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS;
		$output['HCOMMISSIONESTIMATE']=_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE;
		$output['ID']=$id;

		$propertyDetails=$propertyFunctions->getPropertyDetails(array($id));
		$output['APIKEY']=$propertyDetails[$id]['apikey'];
		$output['PROPERTY_NAME']=stripslashes($propertyDetails[$id]['property_name']);
		$output['PROPERTY_STREET']=stripslashes($propertyDetails[$id]['property_street']);
		$output['PROPERTY_TOWN']=stripslashes($propertyDetails[$id]['property_town']);
		$output['PROPERTY_REGION']=stripslashes($propertyDetails[$id]['property_region']);
		$output['PROPERTY_COUNTRY']=stripslashes($propertyDetails[$id]['property_country']);
		$output['PROPERTY_POSTCODE']=stripslashes($propertyDetails[$id]['property_postcode']);
		$output['PROPERTY_TEL']=stripslashes($propertyDetails[$id]['property_tel'], ENT_QUOTES);

		if (is_null($componentArgs['id']))
			{
			$jrtbar =jomres_getSingleton('jomres_toolbar');
			$jrtb  = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=listpropertys",_JRPORTAL_CANCEL);
			$jrtb .= $jrtbar->endTable();
			$output['JOMRESTOOLBAR']=$jrtb;
			}
		// Find our commission rate
		$crate=$crateFunctions->getCrateForPropertyuid($id);
		$commissionRate=floatval($crate['value']);
		$currencyCode=$crate['currencycode'];

		jr_import('crateTypes');
		$crateTypesObj= new crateTypes();
		$crateTypesObj->id=$crate['type'];
		$crateTypeText=$crateTypesObj->getCrate();

		$output['CRATE_TITLE']=$crate['title'];
		$output['CRATE_TYPE']=$crateTypeText;
		$output['CRATE_VALUE']=$crate['value'];
		$output['CRATE_CURRENCYCODE']=$crate['currencycode'];

		$output['HCOMMISSIONRATE']=_JRPORTAL_PROPERTIES_COMMISSIONRATE;
		$output['HCRATE_TITLE']=_JRPORTAL_CRATE_TITLE;
		$output['HCRATE_TYPE']=_JRPORTAL_CRATE_TYPE;
		$output['HCRATE_VALUE']=_JRPORTAL_CRATE_VALUE;
		$output['HCRATE_CURRENCYCODE']=_JRPORTAL_CRATE_CURRENCYCODE;


		// Let's get the bookings
		$bookingsArray=array();
		$roomBookingsArray=array();
		$curDate=getDate();
		$curYear=$curDate['year']-1;
		for ($y = $curYear; $y < $curYear+$numberOfYearsToShow; $y++)
			{
			for ($m = 1; $m <= 12; $m++)
				{
				if ($m<10)
					$m="0".$m;
				$bookings=$bookingFunctions->getContractsForMonth($m,$y,$id);
				if ( !is_null($bookings) )
					$bookingsArray[$y][$m][]=$bookings;
				}
			}
		$propertyNumberOfRooms=$propertyFunctions->getNumberOfRoomsInProperty(array($id));
		$yearviewgraphs_numberofbookings=array();
		$yearviewgraphs_valueofbookings=array();
		$yearviewgraphs_commissionEstimates=array();
		for ($y = $curYear; $y < $curYear+$numberOfYearsToShow; $y++)
			{
			$graphLabels="";
			$graphValues_number="";
			$graphValues_value="";
			$graphValues_commission="";
			for ($m = 1; $m <= 12; $m++)
				{
				$graphLabels.=getMonthName($m-1);
				if ($m<10)
					$m="0".$m;
				if ( !is_null($bookingsArray[$y][$m][0]) )
					{
					$totalValueOfBookings=0.00;
					$graphValues_number.=count($bookingsArray[$y][$m][0]);
					// Work out bookings values for the month
					foreach ($bookingsArray[$y][$m][0] as $b)
						{
						$totalValueOfBookings=$totalValueOfBookings+$b['contract_total'];
						//echo $b['contract_total']." ".$totalValueOfBookings." ".$y." ".$m."<br>";
						}
					$graphValues_value.=number_format($totalValueOfBookings,2, '.', ''); // Numbers need to be formatted to not show the , (comma) otherwise the graphs'll display unwanted months and the totals will look wrong
					$graphValues_commission.=number_format(($totalValueOfBookings/100)*$commissionRate,2, '.', '');
					}
				else
					{
					$graphValues_number.="0";
					$graphValues_value.=0.00;
					$graphValues_commission.=0.00;
					}
				if ($m<12)
					{
					$graphLabels.=",";
					$graphValues_number.=",";
					$graphValues_value.=",";
					$graphValues_commission.=",";
					}

				}
			$yearnumbercounter++;
			$yearviewgraphs_numberofbookings[]=makeJsGraphOutput($graphLabels,$graphValues_number,"vBar",$y,"yearviewgraph_numberofbookings_".$yearnumbercounter);
			$yearviewgraphs_valueofbookings[]=makeJsGraphOutput($graphLabels,$graphValues_value,"vBar",$y,"yearviewgraph_valueofbookings_".$yearnumbercounter);
			$yearviewgraphs_commissionEstimates[]=makeJsGraphOutput($graphLabels,$graphValues_commission,"vBar",$y,"yearviewgraph_commissionestimate_".$yearnumbercounter);
			}

		$output['JOMRES_SITEPAGE_URL_ADMIN']=JOMRES_SITEPAGE_URL_ADMIN;
			
		$pageoutput[]=$output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'view_property.html');
		$tmpl->addRows( 'pageoutput',$pageoutput);

		$tmpl->displayParsedTemplate();
		foreach ($yearviewgraphs_numberofbookings as $g)
			{
			echo $g;
			}
		foreach ($yearviewgraphs_valueofbookings as $g)
			{
			echo $g;
			}
		foreach ($yearviewgraphs_commissionEstimates as $g)
			{
			echo $g;
			}
		}



	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}