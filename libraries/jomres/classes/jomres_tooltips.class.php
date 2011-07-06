<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
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
		//$this->positions = "bottom";
		}

	function generate_tooltip($div,$hover_title,$hover_content,$div_content,$class,$type,$type_arguments)
		{
		$keeplooking=true;
		$beautyTip_opacity = .9;
		// Just in the off-chance that we supply the same div name twice
		$div="jrTooltip".ereg_replace("[^A-Za-z0-9]", "", $div);
		if (strlen($div)==0)
			$div=generateJomresRandomString(10);
		while ($keeplooking):
			if (is_null($this->divs[$div]))
				$keeplooking=false;
			else
			$div=$div.mt_rand ( 10000000,99999999 );
		endwhile;
		
		$this->divs[$div]=$div;

		switch ($type) 
			{
			case "ajaxpage":
				$url=$type_arguments["url"];
				$div_string.='<div id="'.$div.'"';
				if (strlen($class)>0)
					$div_string.=' class="'.$class.'" ';
				else
					$div_string.=' class="" ';
					
				$div_string.='>'.$div_content.'</div>
					<script type="text/javascript">jomresJquery("#'.$div.'").bt({
						cornerRadius: 10,        
						strokeWidth: 0,
						shadow: true,     //only shown in new browser
						shadowOffsetX: 3,
						shadowOffsetY: 3,
						shadowBlur: 8,
						shadowColor: \'rgba(0,0,0,.9)\',
						shadowOverlap: false,
						noShadowOpts: {strokeStyle: \'#999\', strokeWidth: 2},
						positions: [\'most\'],
						offsetParent: \'body\',
						ajaxPath: \''.$url.'\',
						width: \'auto\',
						closeWhenOthersOpen: true,
						fill: "rgba(0, 0, 0, '.$beautyTip_opacity.')",
						cssStyles: 
							{
							color: \'#FFFFFF\'
							},
						hoverIntentOpts: {
							interval: 500,
							timeout: 1000
							}
						});</script>
					';
			break;
			case "infoimage":
				if (isset($type_arguments["width"]))
					$width=$type_arguments["width"];
				if (isset($type_arguments["height"]))
					$height=$type_arguments["height"];
				if (isset($type_arguments["border"]))
					$border=$type_arguments["border"];
				$div_string.='<div id="'.$div.'"';
				if (strlen($class)>0)
					$div_string.=' class="'.$class.'" ';
				else
					$div_string.=' class="jomres_bt_tooltip" ';
					
				$div_string.=' title="'.$hover_content.'"><img src="'.get_showtime('live_site').'/jomres/images/SymbolInformation.png" alt="Information tooltip"';
				if (isset($type_arguments["width"]))
					$div_string.='width="'.$width.'" ';
				if (isset($type_arguments["height"]))
					$div_string.='height="'.$height.'" ';
				if (isset($type_arguments["border"]))
					$div_string.='border="'.$border.'"';
				$div_string.=' /></div>';
				$div_string.='<script type="text/javascript">jomresJquery("#'.$div.'").bt({
						activeClass: \'tooltip_bubble_width\',
						cornerRadius: 10,
						strokeWidth: 0,
						shadow: true,     //only shown in new browser
						shadowOffsetX: 3,
						shadowOffsetY: 3,
						shadowBlur: 8,
						shadowColor: \'rgba(0,0,0,.9)\',
						shadowOverlap: false,
						noShadowOpts: {strokeStyle: \'#999\', strokeWidth: 2},
						positions: [\''.$this->positions.'\'],
						offsetParent: \'body\',
						positions:        [\'right\',\'left\',\'top\',\'bottom\',\'most\'],
						fill: "rgba(0, 0, 0, '.$beautyTip_opacity.')",
						cssStyles: 
							{
							color: \'#F9FB61\'
							}
						});
					</script>
					';
			break;
			case "imageonly":
				$imagethumb=false;
				if (isset($type_arguments["imagethumb"]))
					$imagethumb=$type_arguments["imagethumb"];

				// if (isset($type_arguments["width"]))
					// $width=$type_arguments["width"];
				// if (isset($type_arguments["height"]))
					// $height=$type_arguments["height"];
				if (isset($type_arguments["border"]))
					$border=$type_arguments["border"];
				$div_string.='<div id="'.$div.'"';
				if (strlen($class)>0)
					$div_string.=' class="'.$class.'" ';
				else
					$div_string.=' class="jomres_bt_tooltip_imageonly" ';
					
				if (!$imagethumb)
					{
					$div_string.=' ><img src="'.$div_content.'" ';
					// if (isset($type_arguments["width"]))
						// $div_string.='width="'.$width.'" ';
					// if (isset($type_arguments["height"]))
						// $div_string.='height="'.$height.'" ';
					if (isset($type_arguments["border"]))
						$div_string.='border="'.$border.'"';
						$div_string.='/></div>';
					}
				else
					{
					$div_string.=' ><img src="'.$imagethumb.'" ';
					if (isset($type_arguments["border"]))
						$div_string.='border="'.$border.'"';
						$div_string.='/></div>';
					}
					
					$div_string.='<script type="text/javascript">jomresJquery("#'.$div.'").bt(\'<b>'.$hover_title.'</b><hr /><img src="'.$div_content.'" >\', 
						{
						cornerRadius: 10,        
						strokeWidth: 0,
						shadow: true,     //only shown in new browser
						shadowOffsetX: 3,
						shadowOffsetY: 3,
						shadowBlur: 8,
						shadowColor: \'rgba(0,0,0,.9)\',
						shadowOverlap: false,
						noShadowOpts: {strokeStyle: \'#999\', strokeWidth: 2},
						positions: [\''.$this->positions.'\'],
						offsetParent: \'body\',
						width: \'auto\',
						fill: "rgba(0, 0, 0, '.$beautyTip_opacity.')",
						cssStyles: {color: \'#FFFFFF\', fontWeight: \'bold\'}
						});
					</script>
					';
			break;
			case "room_type":
				if (!isset($type_arguments["use_javascript"]))
					$type_arguments["use_javascript"] = true;
				$use_javascript = $type_arguments["use_javascript"];
				if ($use_javascript)
					{
					$div_string.='<div id="'.$div.'"';
					if (strlen($class)>0)
						$div_string.=' class="'.$class.'" ';
					else
						$div_string.=' class="jomres_bt_tooltip_room_type" ';
						
					// Mootools causes it's own usual set of problems (see beginning of class) so we'll disable this feature.
					/*
					if ($this->browser == "IE")
						$positions = "most";
					else
						$positions = "bottom";  // The mickey mouse browser doesn't like "bottom" as a position, so we'll change that to MOST if in IE.
					*/
					
					$div_string.=' title="<b>'.$hover_title.'</b><hr />'.$hover_content.'"><img src="'.get_showtime('live_site')."/".$div_content.'" /></div>
						<script type="text/javascript">jomresJquery("#'.$div.'").bt({
							cornerRadius: 10,        
							strokeWidth: 0,
							shadow: true,     //only shown in new browser
							shadowOffsetX: 3,
							shadowOffsetY: 3,
							shadowBlur: 8,
							shadowColor: \'rgba(0,0,0,.9)\',
							shadowOverlap: false,
							noShadowOpts: {strokeStyle: \'#999\', strokeWidth: 2},
							positions: [\''.$this->positions.'\'],
							offsetParent: \'body\',
							width: \'200px\',
							fill: "rgba(0, 0, 0, '.$beautyTip_opacity.')",
							cssStyles: 
								{
								color: \'#F9FB61\'
								}
							});</script>
						';
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
					$div_string.='<div id="'.$div.'"';
					if (strlen($class)>0)
						$div_string.=' class="'.$class.'" ';
					else
						$div_string.=' class="jomres_bt_tooltip_features" ';

					// Mootools causes it's own usual set of problems (see beginning of class) so we'll disable this feature.
					/*
					if ($this->browser == "IE")
						$positions = "most";
					else
						$positions = "bottom";  // The mickey mouse browser doesn't like "bottom" as a position, so we'll change that to MOST if in IE.
					*/
					$div_string.=' title="<b>'.$hover_title.'</b><hr />'.$hover_content.'"><img src="'.get_showtime('live_site')."/".$div_content.'" /></div>
						<script type="text/javascript">jomresJquery("#'.$div.'").bt({
							cornerRadius: 10,        
							strokeWidth: 0,
							shadow: true,     //only shown in new browser
							shadowOffsetX: 3,
							shadowOffsetY: 3,
							shadowBlur: 8,
							shadowColor: \'rgba(0,0,0,.9)\',
							shadowOverlap: false,
							noShadowOpts: {strokeStyle: \'#999\', strokeWidth: 2},
							positions: [\''.$this->positions.'\'],
							offsetParent: \'body\',
							width: \'200px\',
							fill: "rgba(0, 0, 0, '.$beautyTip_opacity.')",
							cssStyles: 
								{
								color: \'#F9FB61\'
								}
							});</script>
						';
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
							offsetParent: \'body\',
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