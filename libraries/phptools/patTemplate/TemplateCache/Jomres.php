<?PHP
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
/**
 * patTemplate Template cache that stores data on filesystem
 *
 * $Id: File.php 424 2006-02-26 12:31:00Z schst $
 *
 * @package        patTemplate
 * @subpackage    Caches
 * @author        Stephan Schmidt <schst@php.net>
 */

/**
 * patTemplate Template cache that stores data on filesystem
 *
 * $Id: File.php 424 2006-02-26 12:31:00Z schst $
 *
 * Possible parameters for the cache are:
 * - cacheFolder : set the folder from which to load the cache
 * - lifetime : seconds for which the cache is valid, if set to auto, it will check
 *   whether the cache is older than the original file (if the reader supports this)
 * - prefix for the filenames
 *
 * @package        patTemplate
 * @subpackage    Caches
 * @author        Stephan Schmidt <schst@php.net>
 */
class patTemplate_TemplateCache_Jomres extends patTemplate_TemplateCache
	{
	/**
	 * parameters of the cache
	 *
	 * @access    private
	 * @var        array
	 */
	var $_params = array ( 'cacheFolder' => 'cache', 'lifetime' => 'auto', 'prefix' => '', 'filemode' => null );


	/**
	 * load template from cache
	 *
	 * @access    public
	 * @param    string            cache key
	 * @param    integer            modification time of original template
	 * @return    array|boolean    either an array containing the templates or false cache could not be loaded
	 */
	function load( $key, $modTime = -1 )
		{
		$filename = $this->_getCachefileName( $key );
		if ( !file_exists( $filename ) || !is_readable( $filename ) )
			{
			return false;
			}
		else
			return unserialize( file_get_contents( $filename ) );
		}

	/**
	 * write template to cache
	 *
	 * @access    public
	 * @param    string        cache key
	 * @param    array        templates to store
	 * @return    boolean        true on success
	 */
	function write( $key, $templates )
		{
		$cacheFile = $this->_getCachefileName( $key );
		$fp        = @fopen( $cacheFile, 'w' );
		if ( !$fp )
			{
			return false;
			}
		flock( $fp, LOCK_EX );
		fputs( $fp, serialize( $templates ) );
		flock( $fp, LOCK_UN );
		$filemode = $this->getParam( 'filemode' );
		if ( $filemode !== null && $filemode !== false )
			{
			chmod( $cacheFile, $filemode );
			}

		return true;
		}

	/**
	 * get the cache filename
	 *
	 * @access    private
	 * @param    string        cache key
	 * @return    string        cache file name
	 */
	function _getCachefileName( $key )
		{
		return JOMRESCONFIG_ABSOLUTE_PATH . JRDS . JOMRES_ROOT_DIRECTORY . '/' . $this->getParam( 'cacheFolder' ) . '/' . $this->getParam( 'prefix' ) . $key . '.cache';
		}
	}

?>