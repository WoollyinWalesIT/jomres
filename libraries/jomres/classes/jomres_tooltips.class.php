<?php
/**
#
 * xxxxxxxxxxxxxxxxxx
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class jomres_tooltips
	{
	/**
	#
	 * Constructor for the jomres_booking object, sets a bunch of variables, finds configuration settings & gets the current state of the booking from the tmpbooking table
	#
	 */
	function jomres_tooltips()
		{
		$this->divs=array();
		}

	function generate_tooltip($div,$hover_title,$hover_content,$div_content,$class,$type,$type_arguments)
		{
		$keeplooking=true;
		// Just in the off-chance that we supply the same div name twice
		$div=ereg_replace("[^A-Za-z0-9]", "", $div);
		if (strlen($div)==0)
			$div=generateJomresRandomString(10);
		while ($keeplooking):
			if (is_null($this->divs[$div]))
				$keeplooking=false;
			else
			$div=$div.mt_rand ( 10000000,99999999 );
		endwhile;
		
		$this->divs[$div]=$div;
		
		// We'll leave this as a switch case for now in case we want to use the types option at a later time.
		switch ($type) 
			{
			case "ajaxpage":
				global $jomresConfig_live_site;
				$url=$type_arguments["url"];
				$div_string.='<div id="'.$div.'"';
				if (strlen($class)>0)
					$div_string.=' class="'.$class.'" ';
				else
					$div_string.=' class="" ';
					
				$div_string.=' type="text">'.$div_content.'</div>
					<script>jQuery("#'.$div.'").bt({
						ajaxPath: \''.$url.'\',
						width: 500,
						trigger: [\'mouseover\', \'click\'],
						hoverIntentOpts: {interval: 1000,timeout: 2000},
						closeWhenOthersOpen: true
						});</script>
					';
			break;
			case "infoimage":
				global $jomresConfig_live_site;
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
					
				$div_string.=' title="'.$hover_content.'"><img src="'.$jomresConfig_live_site.'/jomres/images/SymbolInformation.png" ';
				if (isset($type_arguments["width"]))
					$div_string.='width="'.$width.'" ';
				if (isset($type_arguments["height"]))
					$div_string.='height="'.$height.'" ';
				if (isset($type_arguments["border"]))
					$div_string.='border="'.$border.'">';
				$div_string.='></div>';
				$div_string.='<script>jQuery("#'.$div.'").bt();</script>
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
					$div_string.='border="'.$border.'">';
					
					$div_string.='</div>';
					$div_string.='<script>jQuery("#'.$div.'").bt(\'<img src="'.$div_content.'" >\', 
						{
						fill: "white", 
						cornerRadius: 20, 
						padding: 20,
						strokeWidth: 1,
						width:            \''.$width.'\'
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
				$div_string.=' title="<b>'.$hover_title.'</b><br />'.$hover_content.'"><img src="'.$div_content.'"></div>
					<script>jQuery("#'.$div.'").bt();</script>
					';
			break;
			case "property_feature":
				$div_string.='<div id="'.$div.'"';
				if (strlen($class)>0)
					$div_string.=' class="'.$class.'" ';
				else
					$div_string.=' class="jomres_bt_tooltip_features" ';
				$div_string.=' title="<b>'.$hover_title.'</b><br />'.$hover_content.'"><img src="'.$div_content.'"></div>
					<script>jQuery("#'.$div.'").bt();</script>
					';
			break;
			default:
				$div_string.='<div id="'.$div.'"';
				if (strlen($class)>0)
					$div_string.=' class="'.$class.'" ';
				else
					$div_string.=' class="jomres_bt_tooltip" ';
					
				$div_string.=' title="'.$hover_content.'">'.$div_content.'</div>
					<script>jQuery("#'.$div.'").bt();</script>
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