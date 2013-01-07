<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class jomres_tooltips
	{
	/**
	#
	 * xxxx
	#
	 */
	function jomres_tooltips()
		{
		$this->divs=array();
		// Previous to v4.2.1 we used a browser check to determine which browser we were on. If IE then use "most" position, else use "bottom". Subsequentially it seems that mootools will cause an error in the jquery beautytips library if included preventing the popup from showing, therefore we'll change the default to "most", and individual site managers can change the position here to "bottom" if they so require
		// It's a shame as the popup looks much better when below the feature icons, but there you have it. Software development is often more about compromise than anything else.
		//$browser = new browser();
		//$this->browser = $browser->BROWSER_AGENT;
		
		$this->positions = "most";
		echo '
		<script>
		jomresJquery(function() {
			jomresJquery( ".jomres_bt_tooltip_features" ).tipsy({html: true,fade: true,gravity: \'sw\',delayOut: 1000});
		});
		</script>
		';
		//$this->positions = "bottom";
		}

	function generate_tooltip($div,$hover_title,$hover_content,$div_content,$class,$type,$type_arguments)
		{
		$hover_content = filter_var($hover_content,FILTER_SANITIZE_SPECIAL_CHARS);
		$keeplooking=true;
		$beautyTip_opacity = .9;
		// Just in the off-chance that we supply the same div name twice
		//$div="jrTooltip".preg_replace('/[^A-Za-z0-9_-]+/', "", $div);
		$div=generateJomresRandomString(10);
		while ($keeplooking):
			if (!array_key_exists($div,$this->divs))
				$keeplooking=false;
			else
				$div=$div.mt_rand ( 10000000,99999999 );
		endwhile;
		
		$this->divs[$div]=$div;
		
		$div_string='';

		switch ($type) 
			{
			case "ajaxpage":
				$url=$type_arguments["url"];

				$output=array();
				$pageoutput=array();
					
				$output['TITLE']=$div_content;
				$output['DESCRIPTION']=$div_content;

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'tooltip_ajaxpage.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$div_string=$tmpl->getParsedTemplate();
			break;
			case "infoimage":
				$output=array();
				$pageoutput=array();
				
				$output['TITLE']=$hover_content;
				$output['IMAGE']='/jomres/images/SymbolInformation.png';
				$output['WIDTH']=$width;
				$output['HEIGHT']=$height;
				$output['BORDER']=$border;
				

				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'tooltip_infoimage.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$div_string=$tmpl->getParsedTemplate();
				
			break;
			case "warning":
				$output=array();
				$pageoutput=array();

				$output['THUMBNAIL']=$imagethumb;
				$output['WARNING']=$hover_content;
				
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'tooltip_warning.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$div_string=$tmpl->getParsedTemplate();
				
			break;
			case "imageonly":
				$imagethumb=false;
				if (isset($type_arguments["imagethumb"]))
					$imagethumb=$type_arguments["imagethumb"];

				$output=array();
				$pageoutput=array();

				$output['THUMBNAIL']=$imagethumb;
				$output['IMAGE']=$hover_content;
				
				$pageoutput[]=$output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'tooltip_imageonly.html' );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$div_string=$tmpl->getParsedTemplate();
			break;
			case "room_type":
				if (!isset($type_arguments["use_javascript"]))
					$type_arguments["use_javascript"] = true;
				$use_javascript = $type_arguments["use_javascript"];
				if ($use_javascript)
					{
					$output=array();
					$pageoutput=array();
					
					$output['TITLE']=$hover_title;
					$output['DESCRIPTION']=$hover_content;
					$output['IMAGE']=$div_content;
					

					$pageoutput[]=$output;
					$tmpl = new patTemplate();
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->readTemplatesFromInput( 'tooltip_room_type.html' );
					$tmpl->addRows( 'pageoutput', $pageoutput );
					$div_string=$tmpl->getParsedTemplate();
					}
				else
					{
					$div_string.='<div id="'.$div.'"';
					if (strlen($class)>0)
						$div_string.=' class="'.$class.'" >';
					else
						$div_string.=' class="jomres_bt_tooltip_features" >';
					$div_string.='<img src="'.get_showtime('live_site')."/".$div_content.'" /><b>'.$hover_title.'</b></div>';
					}
			break;
			case "property_feature":
				if (!isset($type_arguments["use_javascript"]))
					$type_arguments["use_javascript"] = true;
				$use_javascript = $type_arguments["use_javascript"];
				if ($use_javascript)
					{
					$output=array();
					$pageoutput=array();
					
					$output['TITLE']=$hover_title;
					$output['DESCRIPTION']=$hover_content;
					$output['IMAGE']=$div_content;
					
					$pageoutput[]=$output;
					$tmpl = new patTemplate();
					$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
					$tmpl->readTemplatesFromInput( 'tooltip_property_feature.html' );
					$tmpl->addRows( 'pageoutput', $pageoutput );
					$div_string=$tmpl->getParsedTemplate();
					}
				else
					{
					$div_string.='<div id="'.$div.'"';
					if (strlen($class)>0)
						$div_string.=' class="'.$class.'" >';
					else
						$div_string.=' class="jomres_bt_tooltip_features" >';
					$div_string.='<img src="'.get_showtime('live_site')."/".$div_content.'" /><b>'.$hover_title.'</b></div>';
					
					}
			break;
			default:
				$div_string.='<div id="'.$div.'"';
				if (strlen($class)>0)
					$div_string.=' class="'.$class.'" ';
				else
					$div_string.=' class="jomres_bt_tooltip" ';
					
				$div_string.=' title="'.$hover_content.'">'.$div_content.'</div>
					<script type="text/javascript">jomresJquery("#'.$div.'").bt({
							width: \'600px\',
							fill: "rgba(0, 0, 0, '.$beautyTip_opacity.')",

							cssStyles: 
								{
								color: \'#F9FB61\'
								}
						});</script>
					';
			break;
			}
		return $div_string;
		}

	
/*
	function get_javascript($div)
		{
		$javascript="<script>";
		if (count($this->divs)>0)
			{
			foreach ($this->divs as $div)
				{
				$javascript.="jomresJquery(".$div['id']."').bt();";
				}
			}
		$javascript.="</script>";
		return $javascript;
		}
*/
	}


?>