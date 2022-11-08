<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// This class is used to cache previously input filtered variables. Once an input is filtered once, the data is stored here in memory and reused instead of constantly calling input filtering beasts which might be the cause of intermittent slowdowns.

// As Jomres is like an onion, with discreet pages that can be called separately, we often find that we're re-filtering the same url variables time and again. For example, a typical call to viewproperty on a default instance of Fawlty Towers from the Quickstart can result in us using HTML purifier 19 times in one page load. HTML purifier is super effective at what it does, but it's a waste of cpu load times to constantly re-filter something that's already been filtered. With this purified inputs cache, we can cut down from 19 calls to html purifier to 5.
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class purified_inputs_cache
{
	public function __construct()
	{
		$this->cached_inputs = array();
	}

	public function is_cached($request, $element)
	{
		$request_hash = $this->hash_array($request);
		if (!isset($this->cached_inputs [ $request_hash ] [ $element ])) {
			return false;
		}

		return true;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function get_cache($request, $element)
	{
		$request_hash = $this->hash_array($request);

		return $this->cached_inputs [ $request_hash ] [ $element ];
	}
	
	/**
	 *
	 *
	 *
	 */

	public function set_cache($request, $element, $cleaned)
	{
		$request_hash = $this->hash_array($request);
		$this->cached_inputs [ $request_hash ] [ $element ] = $cleaned;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function hash_array($array = array())
	{
		// We're typically hashing the $_REQUEST array. We need to find a small string that we can sue to create an index for the cached_inputs array.
		// This thread http://stackoverflow.com/questions/2254220/php-best-way-to-md5-multi-dimensional-array suggests that for strings of > 25 - 30 characters
		// seriaize is quicker when dealing with large strings. As serialized $array is often in the region of 200 characters, we'll use serialize instead of json_encode
		return md5(serialize($array));
	}
}
