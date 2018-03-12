<?PHP
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
/**
 * patTemplate function that parses PHP code in your templates. Custom Jomres patTemplate function
 *
 * $Id: PhpParse.php
 *
 * @package        patTemplate
 * @subpackage    Functions
 * @author        Vince Wooll
 */

class patTemplate_Function_PhpParse extends patTemplate_Function
	{
	/**
	 * name of the function
	 *
	 * @access    private
	 * @var        string
	 */
	var $_name = 'PhpParse';

	/**
	 * call the function
	 *
	 * @access    public
	 * @param    array    parameters of the function (= attributes of the tag)
	 * @param    string    content of the tag
	 * @return    string    content to insert into the template
	 */
	function call( $params, $content )
		{
		ob_start();
		@eval( $content );
		$content = ob_get_contents();
		ob_end_clean();

		return $content;
		}
	}

?>