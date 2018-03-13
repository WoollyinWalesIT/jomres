<?PHP
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
/**
 * patTemplate function that emulates gettext's behaviour
 *
 * This can be used to create multi-lingual websites.
 * When the template is read, all texts inside the
 * Translation tags are extracted and written to a file
 * called '$tmplname-default.ini'.
 *
 * You should copy this file and translate all sentences.
 * When the template is used the next time, the sentences
 * will be replaced with their respective translations,
 * according to the langanuge you set with:
 * <code>
 * $tmpl->setOption( 'lang', 'de' );
 * </code>
 *
 * $ID$
 *
 * @package        patTemplate
 * @subpackage    Functions
 * @author        Stephan Schmidt <schst@php.net>
 * @author        Sebastian Mordziol <argh@php-tools.net>
 */

/**
 * Warning: could not create language folder
 */
define( 'PATTEMPLATE_FUNCTION_TRANSLATE_WARNING_LANGFOLDER_NOT_CREATABLE', 'patTemplate:Function:Translate:01' );

/**
 * Warning: could not create language file
 */
define( 'PATTTEMPLATE_FUNCTION_TRANSLATE_WARNING_LANGFILE_NOT_CREATABLE', 'patTemplate:Function:Translate:02' );

/**
 * patTemplate function that emulates gettext's behaviour
 *
 * This can be used to create multi-lingual websites.
 * When the template is read, all texts inside the
 * Translation tags are extracted and written to a file
 * called '$tmplname-default.ini'.
 *
 * You should copy this file and translate all sentences.
 * When the template is used the next time, the sentences
 * will be replaced with their respective translations,
 * according to the language you set with:
 * <code>
 * $tmpl->setOption( 'lang', 'de' );
 * </code>
 *
 * You can change this behavior with some specific options:
 * <ul>
 *     <li>
 *         <b>translationFile</b>: If set, all strings for a
 *         language will be collected in one file with the
 *         specified name (without extension, that's added
 *         automatically)
 *     </li>
 *     <li>
 *         <b>translationUseFolders</b>: if set, all files
 *         for a language will be stored in subfolders named
 *         after the language. This option is cumulative
 *         with the translationFile option.
 *     </li>
 *     <li>
 *         <b>translationAutoCreate</b>: if set, the translation
 *         files will automatically be created if they don't exist
 *         so you do not have to create them manually.
 *     </li>
 *     <li>
 *         <b>translationUseLocator</b>: per default, a locator
 *         string is added to all new sentences that need to be
 *         translated to help find them amongst the lot. You can
 *         turn this behavior off by setting this to false.
 *     </li>
 *     <li>
 *         <b>translationLocatorString</b>: per default, the
 *         locator string is 'Translate', but you can change this
 *         to any string you like with this option.
 *     </li>
 * </ul>
 *
 * $ID$
 *
 * @package        patTemplate
 * @subpackage    Functions
 * @author        Stephan Schmidt <schst@php.net>
 * @author        Sebastian Mordziol <argh@php-tools.net>
 */
class patTemplate_Function_Translate extends patTemplate_Function
	{
	/**
	 * name of the function
	 *
	 * @access    private
	 * @var        string
	 */
	var $_name = 'Translate';

	/**
	 * configuration of all files
	 *
	 * @access    private
	 * @var        array
	 */
	var $_config = array ();

	/**
	 * Stores the global configuration for the translation - this
	 * is only loaded once, and also defines general default settings.
	 *
	 * @access    private
	 * @var        array
	 */
	var $_globalconfig = array ( 'locatorString' => 'Translate', 'useLocator' => true, 'useFolders' => false, 'file' => null, );

	var $_configLoaded = false;

	/**
	 * list of all sentences
	 *
	 * @access    private
	 * @var        array
	 */
	var $_sentences = array ();

	/**
	 * translations of the language files
	 *
	 * @access    private
	 * @var        array
	 */
	var $_translation = array ();

	/**
	 * reference to the patTemplate object that instantiated the module
	 *
	 * @access    protected
	 * @var    object
	 */
	var $_tmpl;

	/**
	 * set a reference to the patTemplate object that instantiated the reader
	 *
	 * @access    public
	 * @param    object        patTemplate object
	 */
	function setTemplateReference( &$tmpl )
		{
		$this->_tmpl =	& $tmpl;
		}

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
		/**
		 * nothing to translate
		 */
		if ( empty( $content ) )
			{
			return;
			}

		if ( !$this->_configLoaded )
			{
			$this->_retrieveGlobalConfig();
			}

		$input = $this->_reader->getCurrentInput();

		/**
		 * get config
		 */
		if ( empty( $this->_config[ $input ] ) )
			{
			$this->_retrieveConfig( $input );
			$this->_loadTranslationFile( $input );
			}

		/**
		 * unique key for the sentence to translate
		 */
		if ( isset( $params[ 'key' ] ) ) $key = $params[ 'key' ];
		else
		$key = md5( $content );

		/**
		 * does this already exists?
		 */
		if ( !isset( $this->_sentences[ $input ][ $key ] ) )
			{
			$this->_sentences[ $input ][ $key ] = $content;
			$this->_updateTranslationFiles( $input, $key, $content );
			}

		/**
		 * has it been translated?
		 */
		if ( isset( $this->_translation[ $input ][ $key ] ) )
			{
			return $this->_translation[ $input ][ $key ];
			}

		/**
		 * use original sentence
		 */

		return $this->_sentences[ $input ][ $key ];
		}

	/**
	 * get the global configuration
	 *
	 * This method fetches the selected language and the translation folder
	 * as it is shared by all templates.
	 *
	 * @access    private
	 * @return    boolean        currently always returns true
	 */
	function _retrieveGlobalConfig()
		{
		/**
		 * get config values from patTemplate
		 */
		$this->_globalconfig[ 'lang' ] = $this->_tmpl->getOption( 'lang' );
		if ( !is_array( $this->_globalconfig[ 'lang' ] ) )
			{
			if ( $this->_globalconfig[ 'lang' ] == 'auto' ) $this->_globalconfig[ 'lang' ] = $this->_guessLanguage();
			else
			$this->_globalconfig[ 'lang' ] = array ( $this->_globalconfig[ 'lang' ] );
			}

		$this->_globalconfig[ 'translationFolder' ] = $this->_tmpl->getOption( 'translationFolder' );

		// set a custom locator string
		if ( !is_null( $this->_tmpl->getOption( 'translationLocatorString' ) ) )
			{
			$this->_globalconfig[ 'locatorString' ] = $this->_tmpl->getOption( 'translationLocatorString' );
			}

		// disable locator string altogether
		if ( $this->_tmpl->getOption( 'translationUseLocator' ) === false )
			{
			$this->_globalconfig[ 'useLocator' ] = false;
			}

		// use folders for translation files?
		if ( $this->_tmpl->getOption( 'translationUseFolders' ) === true )
			{
			$this->_globalconfig[ 'useFolders' ] = true;
			}

		// use a specific file for all translation strings?
		if ( !is_null( $this->_tmpl->getOption( 'translationFile' ) ) )
			{
			$this->_globalconfig[ 'file' ] = $this->_tmpl->getOption( 'translationFile' );
			}

		$this->_configLoaded = true;

		return true;
		}

	/**
	 * retrieve configuration
	 *
	 * This method sets the used files and loads the original sentence file, if it exists.
	 *
	 * @access    private
	 * @param    string        current input that is used by patTemplate
	 * @return    boolean        true on success
	 */
	function _retrieveConfig( $input )
		{
		if ( !is_array( $this->_config ) )
			{
			$this->_config = array ();
			}

		$this->_config[ $input ]    = array ();
		$this->_sentences[ $input ] = array ();
		$folder                     = $this->_tmpl->getOption( 'translationFolder' );

		// default setup for language files
		$this->_config[ $input ][ 'sentenceFile' ] = $folder . '/' . $input . '-default.ini';
		$this->_config[ $input ][ 'langFile' ]     = $folder . '/' . $input . '-%s.ini';

		// handle the translationUseFolders option - if set, we will 
		// use subfolders for each language, so we need to check 
		// that the corresponding folders exist and create them if
		// needed.
		if ( $this->_globalconfig[ 'useFolders' ] )
			{
			// check if we want to automatically create the language folders
			if ( $this->_tmpl->getOption( 'translationAutoCreate' ) === true )
				{
				foreach ( $this->_globalconfig[ 'lang' ] as $lang )
					{
					$langFolder = $folder . '/' . $lang;
					if ( !is_dir( $langFolder ) )
						{
						$success = @mkdir( $langFolder );
						if ( !$success )
							{
							patErrorManager::raiseWarning( PATTEMPLATE_FUNCTION_TRANSLATE_WARNING_LANGFOLDER_NOT_CREATABLE, 'Could not create folder for language-dependent data', 'Tried to create the folder [' . $langFolder . '], please check that I have write access to the parent folder or create the folder manually.' );
							}
						}
					}
				}
			$this->_config[ $input ][ 'langFile' ] = $folder . '/%s/' . $input . '.ini';
			}

		// handle the translationFile option - if set, all sentences will be kept in 
		// one single file per language.
		// patch by Lukas Petrovicky (http://www.petrovicky.net/) to support folders even in
		// single file mode.
		if ( !is_null( $this->_globalconfig[ 'file' ] ) )
			{
			$this->_config[ $input ][ 'sentenceFile' ] = $folder . '/' . $this->_globalconfig[ 'file' ] . '-default.ini';
			// handle useFolders dependency on translationFile
			// if useFolders is set and translationFile too, translations will go to language directory
			if ( $this->_globalconfig[ 'useFolders' ] )
				{
				$this->_config[ $input ][ 'langFile' ] = $folder . '/%s/' . $this->_globalconfig[ 'file' ] . '.ini';
				}
			else
				{
				$this->_config[ $input ][ 'langFile' ] = $folder . '/' . $this->_globalconfig[ 'file' ] . '-%s.ini';
				}
			}

		/**
		 * get the 'gettext' source file
		 */
		$this->_sentences[ $input ] = @parse_ini_file( $this->_config[ $input ][ 'sentenceFile' ] );
		if ( !is_array( $this->_sentences[ $input ] ) )
			{
			$this->_sentences[ $input ] = array ();
			}
		else
			{
			$this->_sentences[ $input ] = array_map( array ( $this, '_unescape' ), $this->_sentences[ $input ] );
			}

		return true;
		}

	/**
	 * load the translation file
	 *
	 * @access    private
	 * @param    string        current input that is used by patTemplate
	 * @return    boolean        true on success
	 */
	function _loadTranslationFile( $input )
		{
		foreach ( $this->_globalconfig[ 'lang' ] as $lang )
			{
			$translationFile = sprintf( $this->_config[ $input ][ 'langFile' ], $lang );
			if ( !file_exists( $translationFile ) )
				{
				if ( $this->_tmpl->getOption( 'translationAutoCreate' ) && file_exists( $this->_config[ $input ][ 'sentenceFile' ] ) )
					{
					if ( !@copy( $this->_config[ $input ][ 'sentenceFile' ], $translationFile ) )
						{
						patErrorManager::raiseWarning( PATTTEMPLATE_FUNCTION_TRANSLATE_WARNING_LANGFILE_NOT_CREATABLE, 'A language file could not be created', 'Tried to create the language file [' . $translationFile . ']. Please check that I have write access to the parent folder, or turn off the translateAutoCreate option and create it manually.' );
						}
					}
				continue;
				}

			$tmp = @parse_ini_file( $translationFile );
			if ( is_array( $tmp ) )
				{
				$tmp                          = array_map( array ( $this, '_unescape' ), $tmp );
				$this->_translation[ $input ] = $tmp;

				return true;
				}
			}

		return false;
		}

	/**
	 * unsecape the text that has been read from the translation file
	 *
	 * @access    private
	 * @param    string
	 * @return    string
	 */
	function _unescape( $text )
		{
		return str_replace( '&quot;', '"', $text );
		}

	/**
	 * Updates all available translation files with the new
	 * string to translate.
	 *
	 * @access    private
	 * @param    string    The input file
	 * @param    string    The string's unique key
	 * @param    string    The string to translate
	 * @return    boolean
	 */
	function _updateTranslationFiles( $input, $key, $content )
		{
		$success = true;
		if ( !$this->_updateTranslationFile( $this->_config[ $input ][ 'sentenceFile' ], $key, $content ) )
			{
			$success = false;
			}

		foreach ( $this->_globalconfig[ 'lang' ] as $lang )
			{
			if ( !$this->_updateTranslationFile( sprintf( $this->_config[ $input ][ 'langFile' ], $lang ), $key, $content ) )
				{
				$success = false;
				}
			}

		return $success;
		}

	/**
	 * Updates a single translation file with the specified new string
	 *
	 * @param    string    The input file
	 * @param    string    The string's unique key
	 * @param    string    The string to translate
	 * @return    boolean
	 */
	function _updateTranslationFile( $input, $key, $content )
		{
		$fp = @fopen( $input, 'a' );
		if ( !$fp )
			{
			return false;
			}

		// whether to use the locator string for new strings to translate
		$locator = '';
		if ( $this->_globalconfig[ 'useLocator' ] )
			{
			$locator = ' ;' . $this->_globalconfig[ 'locatorString' ];
			}

		// remove newlines to ensure integrity of the inifile's syntax
		// patch by Niccolo Campovono
		$content = preg_replace( "'([\r\n])[\s]+'", '', $content );

		flock( $fp, LOCK_EX );
		fputs( $fp, sprintf( '%s = "%s"' . $locator . "\n", $key, str_replace( '"', '&quot;', $content ) ) );
		flock( $fp, LOCK_UN );
		fclose( $fp );

		return true;
		}

	/**
	 * Tries to guess the user's language according to the browser's language setting
	 *
	 * @access    private
	 * @return    array        Array containing all accepted languages
	 */
	function _guessLanguage()
		{
		if ( !preg_match_all( '/([a-z\-]*)?[,;]/i', $_SERVER[ 'HTTP_ACCEPT_LANGUAGE' ], $matches ) )
			{
			return array ();
			}

		$langs = array ();
		foreach ( $matches[ 1 ] as $lang )
			{
			if ( empty( $lang ) )
				{
				continue;
				}
			array_push( $langs, $lang );
			}

		return $langs;
		}
	}

?>