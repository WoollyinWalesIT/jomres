<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
					<script type="text/javascript">jQuery("#'.$div.'").bt({
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
				$div_string.='<script type="text/javascript">jQuery("#'.$div.'").bt({
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
						width: \'auto\',
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
					$div_string.=' class="jomres_bt_tooltip_imageonly" ';
				$div_string.=' ><img src="'.$div_content.'" ';
				if (isset($type_arguments["width"]))
					$div_string.='width="'.$width.'" ';
				if (isset($type_arguments["height"]))
					$div_string.='height="'.$height.'" ';
				if (isset($type_arguments["border"]))
					$div_string.='border="'.$border.'"';
					
					$div_string.='/></div>';
					$div_string.='<script type="text/javascript">jQuery("#'.$div.'").bt(\'<b>'.$hover_title.'</b><hr /><img src="'.$div_content.'" >\', 
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
					<script type="text/javascript">jQuery("#'.$div.'").bt({
						cornerRadius: 10,        
						strokeWidth: 0,
						shadow: true,     //only shown in new browser
						shadowOffsetX: 3,
						shadowOffsetY: 3,
						shadowBlur: 8,
						shadowColor: \'rgba(0,0,0,.9)\',
						shadowOverlap: false,
						noShadowOpts: {strokeStyle: \'#999\', strokeWidth: 2},
						positions: [\''.$positions.'\'],
						offsetParent: \'body\',
						width: \'200px\',
						fill: "rgba(0, 0, 0, '.$beautyTip_opacity.')",
						cssStyles: 
							{
							color: \'#F9FB61\'
							}
						});</script>
					';
			break;
			case "property_feature":
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
					<script type="text/javascript">jQuery("#'.$div.'").bt({
						cornerRadius: 10,        
						strokeWidth: 0,
						shadow: true,     //only shown in new browser
						shadowOffsetX: 3,
						shadowOffsetY: 3,
						shadowBlur: 8,
						shadowColor: \'rgba(0,0,0,.9)\',
						shadowOverlap: false,
						noShadowOpts: {strokeStyle: \'#999\', strokeWidth: 2},
						positions: [\''.$positions.'\'],
						offsetParent: \'body\',
						width: \'200px\',
						fill: "rgba(0, 0, 0, '.$beautyTip_opacity.')",
						cssStyles: 
							{
							color: \'#F9FB61\'
							}
						});</script>
					';
			break;
			default:
				$div_string.='<div id="'.$div.'"';
				if (strlen($class)>0)
					$div_string.=' class="'.$class.'" ';
				else
					$div_string.=' class="jomres_bt_tooltip" ';
					
				$div_string.=' title="'.$hover_content.'">'.$div_content.'</div>
					<script type="text/javascript">jQuery("#'.$div.'").bt({
							offsetParent: \'body\',
							width: \'200px\',
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
				$javascript.="jQuery(".$div['id']."').bt();";
				}
			}
		$javascript.="</script>";
		return $javascript;
		}
*/
	}


?>