<?PHP
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
/**
 * Base class for patTemplate Stat
 *
 * $Id: File.php 423 2006-02-26 12:28:19Z schst $
 *
 * A stat component should be implemented for each reader
 * to support caching. Stats return information about the
 * template source.
 *
 * @package        patTemplate
 * @subpackage    Stat
 * @author        Stephan Schmidt <schst@php.net>
 */

/**
 * Base class for patTemplate Stat
 *
 * $Id: File.php 423 2006-02-26 12:28:19Z schst $
 *
 * A stat component should be implemented for each reader
 * to support caching. Stats return information about the
 * template source.
 *
 * @package        patTemplate
 * @subpackage    Stat
 * @author        Stephan Schmidt <schst@php.net>
 */
class patTemplate_Stat_String extends patTemplate_Stat
	{
	/**
	 * get the modification time of a template
	 *
	 * Needed, if a template cache should be used, that auto-expires
	 * the cache.
	 *
	 * @abstract    must be implemented in the template readers
	 * @param    mixed    input to read from.
	 *                    This can be a string, a filename, a resource or whatever the derived class needs to read from
	 * @return    integer    unix timestamp
	 */
	function getModificationTime( $input )
		{
		$fullPath = $this->getTemplateRoot() . '/' . $input;

		return @filemtime( $fullPath );
		}
	}

?>