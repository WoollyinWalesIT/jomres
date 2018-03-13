<?PHP
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
/**
 * Base class for patTemplate Stat
 *
 * $Id: Stat.php 423 2006-02-26 12:28:19Z schst $
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
 * $Id: Stat.php 423 2006-02-26 12:28:19Z schst $
 *
 * A stat component should be implemented for each reader
 * to support caching. Stats return information about the
 * template source.
 *
 * @package        patTemplate
 * @subpackage    Stat
 * @author        Stephan Schmidt <schst@php.net>
 * @abstract
 */
class patTemplate_Stat extends patTemplate_Module
	{
	/**
	 * options, are identical to those of the corresponding reader
	 *
	 * @access    private
	 * @var        array
	 */
	var $_options = array ();

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
		return -1;
		}

	/**
	 * set options
	 *
	 * @access    public
	 * @param    array    array containing options
	 */
	function setOptions( $options )
		{
		$this->_options = $options;
		}

	/**
	 * get the template root for this class
	 *
	 * @access  public
	 * @return  string
	 */
	function getTemplateRoot()
		{
		if ( !isset( $this->_options[ 'root' ] ) )
			{
			return null;
			}
		if ( isset( $this->_options[ 'root' ][ $this->_name ] ) )
			{
			return $this->_options[ 'root' ][ $this->_name ];
			}
		if ( isset( $this->_options[ 'root' ][ '__default' ] ) )
			{
			return $this->_options[ 'root' ][ '__default' ];
			}

		return null;
		}
	}

?>