<?PHP
/**
 * creates a new function alias
 *
 * $Id: Alias.php 283 2004-09-07 19:09:56Z schst $
 *
 * @package		patTemplate
 * @subpackage	Functions
 * @author		Stephan Schmidt <schst@php.net>
 */

/**
 * creates a new function alias
 *
 * Possible attributes:
 * - alias => new alias
 * - function => function to call
 *
 * $Id: Alias.php 283 2004-09-07 19:09:56Z schst $
 *
 * @package		patTemplate
 * @subpackage	Functions
 * @author		Stephan Schmidt <schst@php.net>
 */
class patTemplate_Function_Alias extends patTemplate_Function
{
   /**
	* name of the function
	* @access	private
	* @var		string
	*/
	var $_name	=	'Alias';

   /**
	* call the function
	*
	* @access	public
	* @param	array	parameters of the function (= attributes of the tag)
	* @param	string	content of the tag
	* @return	string	content to insert into the template
	*/ 
	function call( $params, $content )
	{
		if( !isset( $params['alias'] ) )
            return false;

		if( !isset( $params['function'] ) )
            return false;

        $this->_reader->addFunctionAlias($params['alias'], $params['function']);
        return '';
	}
}
?>