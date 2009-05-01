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

// http://uk2.php.net/manual/en/function.xml-parse-into-struct.php#79922

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class jomresXMLParser
	{
	function jomresXMLParser($xml)
		{
		// raw xml
		//$this->$rawXML = null;
		// xml parser
		//$this->$parser = null;
		// array returned by the xml parser
		//$this->$valueArray = array();
		//$this->$keyArray = array();

		// arrays for dealing with duplicate keys
		//$this->$duplicateKeys = array();

		// return data
		//$this->$output = array();
		//$this->$status;
	
		$this->rawXML = $xml;
		$this->parser = xml_parser_create();
		return $this->parse();
		}

	function parse()
		{
		$parser = $this->parser;

		xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0); // Dont mess with my cAsE sEtTings
		xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);	 // Dont bother with empty info
		if(!xml_parse_into_struct($parser, $this->rawXML, $this->valueArray, $this->keyArray))
			{
			$this->status = 'error: '.xml_error_string(xml_get_error_code($parser)).' at line '.xml_get_current_line_number($parser);
			return false;
			}
		xml_parser_free($parser);
		$this->findDuplicateKeys();
		// tmp array used for stacking
		$stack = array();
		$increment = 0;
		foreach($this->valueArray as $val) 
			{
			if($val['type'] == "open") 
				{
				//if array key is duplicate then send in increment
				if(array_key_exists($val['tag'], $this->duplicateKeys))
					{
					array_push($stack, $this->duplicateKeys[$val['tag']]);
					$this->duplicateKeys[$val['tag']]++;
					}
				else
					{
					// else send in tag
					array_push($stack, $val['tag']);
					}
				} 
			elseif($val['type'] == "close") 
				{
				array_pop($stack);
				// reset the increment if they tag does not exists in the stack
				if(array_key_exists($val['tag'], $stack))
					{
					$this->duplicateKeys[$val['tag']] = 0;
					}
				} 
			elseif($val['type'] == "complete") 
				{
				//if array key is duplicate then send in increment
				if(array_key_exists($val['tag'], $this->duplicateKeys))
					{
					array_push($stack, $this->duplicateKeys[$val['tag']]);
					$this->duplicateKeys[$val['tag']]++;
					}
			else
				{
				// else send in tag
				array_push($stack,  $val['tag']);
				}
			$this->setArrayValue($this->output, $stack, $val['value']);
			array_pop($stack);
				}
			$increment++;
			}
		$this->status = 'success: xml was parsed';
		return true;
		}

	function findDuplicateKeys()
		{
		for($i=0;$i < count($this->valueArray); $i++) 
			{
			// duplicate keys are when two complete tags are side by side
			if($this->valueArray[$i]['type'] == "complete")
				{
				if( $i+1 < count($this->valueArray) )
					{
					if($this->valueArray[$i+1]['tag'] == $this->valueArray[$i]['tag'] && $this->valueArray[$i+1]['type'] == "complete")
						{
						$this->duplicateKeys[$this->valueArray[$i]['tag']] = 0;
						}
					}
				}
			// also when a close tag is before an open tag and the tags are the same
			if($this->valueArray[$i]['type'] == "close")
				{
				if( $i+1 < count($this->valueArray) )
					{
					if(	$this->valueArray[$i+1]['type'] == "open" && $this->valueArray[$i+1]['tag'] == $this->valueArray[$i]['tag'])
						$this->duplicateKeys[$this->valueArray[$i]['tag']] = 0;
					}
				}
			}
		}

	function setArrayValue(&$array, $stack, $value)
		{
		if ($stack) 
			{
			$key = array_shift($stack);
			$this->setArrayValue($array[$key], $stack, $value);
			return $array;
			} 
		else 
			{
			$array = $value;
			}
		}

	function getOutput()
		{
		return $this->output;
		}

	function getStatus()
		{
		return $this->status;
		}
	}
?>