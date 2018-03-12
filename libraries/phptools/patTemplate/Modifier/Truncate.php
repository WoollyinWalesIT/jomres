<?php
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
/**
 * patTemplate modifier Truncate
 *
 * Truncate a string variable to fixed length and add a suffix if it was truncated.
 * It can also start from an offset and add a prefix.
 *
 * @package     patTemplate
 * @subpackage  Modifiers
 * @author      Rafa Couto <rafacouto@yahoo.com>
 * @author      gERD Schaufelberger <gerd@php-tools.net>
 */

/**
 * patTemplate modifier Truncate
 *
 * Truncate a string variable to fixed length and add a suffix if it was truncated.
 * It can also start from an offset and add a prefix.
 *
 * Possible attributes are:
 * - length (integer)
 * - suffix (string)
 * - start
 * - prefix (string)
 * - usemb (string) can be "yes" or "no" (default). If set to "yes", mb-string functions will be used
 *
 * @package     patTemplate
 * @subpackage  Modifiers
 * @author      Rafa Couto <rafacouto@yahoo.com>
 * @author      gERD Schaufelberger <gerd@php-tools.net>
 */
class patTemplate_Modifier_Truncate extends patTemplate_Modifier
	{

	/**
	 * modify the value
	 *
	 * @access  public
	 * @param  string    value
	 * @return  string    modified value
	 */
	function modify( $value, $params = array () )
		{
		// length
		if ( !isset( $params[ 'length' ] ) )
			{
			return $value;
			}
		settype( $params[ 'length' ], 'integer' );

		// use multibyte strings
		$strlen = 'strlen';
		$substr = 'substr';
		if ( isset( $params[ 'usemb' ] ) && $params[ 'usemb' ] == 'yes' )
			{
			$strlen = 'mb_strlen';
			$substr = 'mb_substr';
			}

		// start
		if ( isset( $params[ 'start' ] ) )
			{
			settype( $params[ 'start' ], 'integer' );
			}
		else
			{
			$params[ 'start' ] = 0;
			}

		// prefix
		if ( isset( $params[ 'prefix' ] ) )
			{
			$prefix = ( $params[ 'start' ] == 0 ? '' : $params[ 'prefix' ] );
			}
		else
			{
			$prefix = '';
			}

		// suffix
		if ( isset( $params[ 'suffix' ] ) )
			{
			$suffix = $params[ 'suffix' ];
			}
		else
			{
			$suffix = '';
			}

		$initial_len = $strlen( $value );
		$value       = $substr( $value, $params[ 'start' ], $params[ 'length' ] );

		if ( $initial_len <= $strlen( $value ) )
			{
			$suffix = '';
			}

		return $prefix . $value . $suffix;
		}
	}

?>