<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000faq_pane
	{
	function __construct($componentArgs)
		{
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;
			return;
			}
		
		$this->retVals = '';


		if (isset($componentArgs[ 'output_now' ]))
			$output_now = $componentArgs[ 'output_now' ];
		else
			$output_now = true;

		$MiniComponents->triggerEvent( '07060' );
		//$MiniComponents->triggerEvent( '07070' );
		// $MiniComponents->triggerEvent( '07080' );
		
		$faq_questions = get_showtime("faq_questions");
		
		if ( count ($faq_questions) > 0 )
			{
			$output     = array ();
			$pageoutput = array ();
			$category_rows = array();
			$counter = 1;
			foreach ( $faq_questions as $category=>$qa)
				{
				$output     = array ();
				$pageoutput = array ();
			
				$category_title =  jr_gettext($category,$category,false);
				$output['CATEGORY'] = $category_title;
				$rows = array();
				foreach ($qa as $question_set)
					{

					$r=array();
					$r['COUNTER']	= $counter;
					$r['QUESTION']	= $question_set['question'];
					$r['ANSWER']	= $question_set['answer'];
					
					$rows[]=$r;
					$counter++;
					}

				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->addRows( 'pageoutput', $pageoutput );
				$tmpl->addRows( 'rows', $rows );
				$tmpl->readTemplatesFromInput( 'faq_questions.html' );
				
				$category_rows[]['CATEGORY'] = $tmpl->getParsedTemplate();
				}
			
			$output     = array ();
			$pageoutput = array ();
			
			$output['_JOMRES_FAQ'] = jr_gettext("_JOMRES_FAQ","_JOMRES_FAQ",false);
			
			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'questions', $category_rows );
			$tmpl->readTemplatesFromInput( 'faq_pane.html' );

			if ( $output_now )
				$tmpl->displayParsedTemplate();
			else
				$this->retVals = $tmpl->getParsedTemplate();
			}
		
		}
	


	function getRetVals()
		{
		return $this->retVals;
		}
	}
