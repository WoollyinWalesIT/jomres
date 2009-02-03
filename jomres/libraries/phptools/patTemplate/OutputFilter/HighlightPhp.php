<?PHP
/**
 * patTemplate HighlightPHP filter
 *
 * $Id: HighlightPhp.php 378 2005-03-26 08:38:51Z schst $
 *
 * Highlights PHP code in the output.
 *
 * @package		patTemplate
 * @subpackage	Filters
 * @author		Stephan Schmidt <schst@php.net>
 */

/**
 * patTemplate HighlightPHP filter
 *
 * $Id: HighlightPhp.php 378 2005-03-26 08:38:51Z schst $
 *
 * Highlights PHP code in the output.
 *
 * @package		patTemplate
 * @subpackage	Filters
 * @author		Stephan Schmidt <schst@php.net>
 */
class patTemplate_OutputFilter_HighlightPhp extends patTemplate_OutputFilter
{
   /**
    * filter name
	*
	* @access	protected
	* @abstract
	* @var	string
	*/
	var	$_name	=	'HighlightPhp';

   /**
	* remove all whitespace from the output
	*
	* @access	public
	* @param	string		data
	* @return	string		data without whitespace
	*/
	function apply( $data )
	{
	    return highlight_string($data, true);
	}
}
?>