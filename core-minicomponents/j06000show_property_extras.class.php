<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.10
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000show_property_extras
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = true;
            $this->shortcode_data = array(
                'task' => 'show_property_extras',
                'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS',
                'arguments' => array(0 => array(
                        'argument' => 'property_uid',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID',
                        'arg_example' => '1',
                        ),
                    ),
                );

            return;
        }
        $this->retVals = null;

        if (isset($componentArgs[ 'property_uid' ])) {
            $property_uid = (int)$componentArgs[ 'property_uid' ];
        } else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
        }
		
		if ($property_uid == 0) {
            return;
        }

        if (!user_can_view_this_property($property_uid)) {
            return;
        }

        if (isset($componentArgs['output_now'])) {
            $output_now = $componentArgs['output_now'];
        } else {
            $output_now = true;
        }

        $mrConfig = getPropertySpecificSettings($property_uid);

        if ($mrConfig[ 'showExtras' ] == '1') {
            $jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
            $jomres_media_centre_images->get_images($property_uid, array('extras'));

            $jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

            $extra_details = array();

            $query = 'SELECT `uid`,`name`,`desc`,`maxquantity`,`price`,`auto_select`,`tax_rate`,`chargabledaily`,`property_uid`,`published`,`validfrom`,`validto` FROM `#__jomres_extras` WHERE `property_uid` = '.$property_uid.' AND `published` = 1 AND `include_in_property_lists` = 1 ORDER BY `name` ';
            $exList = doSelectSql($query);

            if (!empty($exList)) {
                foreach ($exList as $ex) {
                    $price = $ex->price;
                    $jrportal_taxrate->gather_data($ex->tax_rate);
                    $rate = (float) $jrportal_taxrate->rate;
                    if ($mrConfig[ 'prices_inclusive' ] == 1) {
                        $divisor = ($rate / 100) + 1;
                        $price = $price / $divisor;
                    }
                    $tax = ($price / 100) * $rate;
                    $inc_price = $price + $tax;

                    $extra_deets = array();

                    $extra_deets[ 'UID' ] = $ex->uid;

                    $query = 'SELECT `force`,`model` FROM #__jomcomp_extrasmodels_models WHERE extra_id = '.$ex->uid;
                    $model = doSelectSql($query, 2);
                    switch ($model[ 'model' ]) {
                        case '1': // Per week
                            $model_text = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK');
                            break;
                        case '2': // per days
                            $model_text = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS');
                            break;
                        case '3': // per booking
                            $model_text = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING');
                            break;
                        case '4': // per person per booking
                            $model_text = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING');
                            break;
                        case '5': // per person per day
                            $model_text = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY');
                            break;
                        case '6': // per person per week
                            $model_text = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK');
                            break;
                        case '7': // per person per days min days
                            $model_text = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS');
                            break;
                        case '8': // per days per room
                            $model_text = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM');
                            break;
                        case '9': // per room
                            $model_text = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING');
                            break;
                        case '100': // Commission
                            $model_text = jr_gettext('_JOMRES_COMMISSION', '_JOMRES_COMMISSION');
                            break;
                        }
                    $tax_output = '';
                    if ($rate > 0) {
                        $tax_output = ' ('.$rate.'%)';
                    }
                    $extra_deets[ 'NAME' ] = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRANAME'.$ex->uid, jomres_decode($ex->name));
                    $extra_deets[ 'MODELTEXT' ] = $tax_output.' ( '.$model_text.' )';
                    $extra_deets[ 'PRICE' ] = output_price($inc_price);

                    $extra_deets[ 'EXTRA_IMAGE' ] = $jomres_media_centre_images->multi_query_images['noimage-small'];
                    if (isset($jomres_media_centre_images->images['extras'][$ex->uid][0]['small'])) {
                        $extra_deets[ 'EXTRA_IMAGE' ] = $jomres_media_centre_images->images['extras'][$ex->uid][0]['small'];
                    }

                    if ($mrConfig[ 'wholeday_booking' ] == '1') {
                        if ($ex->chargabledaily == '1') {
                            $extra_deets[ 'PERNIGHT' ] = jr_gettext('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', false, true);
                        } else {
                            $extra_deets[ 'PERNIGHT' ] = '';
                        }
                    } else {
                        if ($ex->chargabledaily == '1') {
                            $extra_deets[ 'PERNIGHT' ] = jr_gettext('_JOMRES_COM_PERDAY', '_JOMRES_COM_PERDAY', false, true);
                        } else {
                            $extra_deets[ 'PERNIGHT' ] = '';
                        }
                    }
                    $extra_deets[ 'DESCRIPTION' ] = jr_gettext('_JOMRES_CUSTOMTEXT_EXTRADESC'.$ex->uid, jomres_decode($ex->desc));

                    $extra_details[ ] = $extra_deets;
                }

                $output = array();
                $output ['_JOMRES_EXTRAS_TEMPLATE'] = jr_gettext('_JOMRES_EXTRAS_TEMPLATE', '_JOMRES_EXTRAS_TEMPLATE');

                $pageoutput[] = $output;
                $tmpl = new patTemplate();
                $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);

                $tmpl->addRows('pageoutput', $pageoutput);
                $tmpl->addRows('extras', $extra_details);
                $tmpl->readTemplatesFromInput('show_property_extras.html');
                $extras_template = $tmpl->getParsedTemplate();
                if ($output_now) {
                    echo $extras_template;
                } else {
                    $this->retVals = $extras_template;
                }
            }
        }
    }

    public function touch_template_language()
    {
        $output = array();

        $output[ ] = jr_gettext('_JOMRES_EXTRAS_TEMPLATE', '_JOMRES_EXTRAS_TEMPLATE');

        foreach ($output as $o) {
            echo $o;
            echo '<br/>';
        }
    }

    public function getRetVals()
    {
        return $this->retVals;
    }
}
