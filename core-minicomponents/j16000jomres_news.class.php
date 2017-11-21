<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.16
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000jomres_news
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = $componentArgs[ 'output_now' ];
        } else {
            $output_now = true;
        }

        $output = array();
        $news_rows = array();
        $pageoutput = array();

        if (file_exists(JOMRES_TEMP_ABSPATH.'news.php')) {
            $last_modified = filemtime(JOMRES_TEMP_ABSPATH.'news.php');
            $seconds_timediff = time() - $last_modified;
            if ($seconds_timediff > 3600) {
                unlink(JOMRES_TEMP_ABSPATH.'news.php');
            } else {
                $buffer = file_get_contents(JOMRES_TEMP_ABSPATH.'news.php');
            }
        }

        if (!file_exists(JOMRES_TEMP_ABSPATH.'news.php')) {
			$base_uri = 'http://updates.jomres4.net/';
			$query_string = 'news.php';
			
			$buffer = '';

			try {
				$client = new GuzzleHttp\Client([
					'base_uri' => $base_uri
				]);

				logging::log_message('Starting guzzle call to '.$base_uri.$query_string, 'Guzzle', 'DEBUG');

				$buffer = $client->request('GET', $query_string)->getBody()->getContents();
			}
			catch (Exception $e) {
				$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
				$jomres_user_feedback->construct_message(array('message'=>'Could not get jomres news', 'css_class'=>'alert-danger alert-error'));
			}
            
			if ($buffer != '') {
                file_put_contents(JOMRES_TEMP_ABSPATH.'news.php', $buffer);
            }
        }

        if (empty($buffer)) {
            $output[ 'LATEST_JOMRES_VERSION' ] = 'Sorry, could not get latest Jomres news, is there a firewall or slow internet connection preventing communication with http://updates.jomres4.net ?<p>';
        } else {
            $news = json_decode($buffer);
            $counter = 0;
            foreach ($news as $row) {
                if (using_bootstrap()) {
                    $state = '';
                    $old_state = filter_var($row->state, FILTER_SANITIZE_SPECIAL_CHARS);
                    switch ($old_state) {
                        case 'ui-state-error':
                            $state = 'alert alert-error';
                            $panel = 'panel-danger';
                            $label = 'label-red';
                            break;
                        case 'ui-state-highlight':
                            $state = 'alert alert-warning';
                            $panel = 'panel-warning';
                            $label = 'label-orange';
                            break;
                        case 'ui-state-default':
                            $label = 'label-grey';
                            $panel = 'panel-default';
                            break;
                        default:
                            //$state = "alert alert-info";
                            if ($counter == 0) {
                                $panel = 'panel-primary';
                                $label = 'label-blue';
                            } else {
                                $panel = 'panel-default';
                                $label = 'label-grey';
                            }
                            break;
                        }
                    ++$counter;
                } else {
                    $state = filter_var($row->state, FILTER_SANITIZE_SPECIAL_CHARS);
                }

                $news_rows[ ] = array('DATE' => filter_var($row->date, FILTER_SANITIZE_SPECIAL_CHARS),
                                        'NEWS' => filter_var($row->news, FILTER_SANITIZE_SPECIAL_CHARS),
                                        'STATE' => $state,
                                        'LABEL' => $label,
                                        'TITLE' => filter_var($row->title, FILTER_SANITIZE_SPECIAL_CHARS),
                                        'URL' => filter_var($row->url, FILTER_SANITIZE_URL),
                                        'URL_TEXT' => filter_var($row->url_text, FILTER_SANITIZE_SPECIAL_CHARS),
                                        'PANEL' => $panel, ); // Filter var added here so that in the unlikely event that the updates server is compromised, no naughty data is downloaded from the updates server to be executed on this server/user's browser.
            }
        }

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('news_rows', $news_rows);
        $tmpl->readTemplatesFromInput('jomres_news.html');

        if ($output_now) {
            $tmpl->displayParsedTemplate();
        } else {
            $this->retVals = $tmpl->getParsedTemplate();
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
