<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j02272publishprop
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();
        $defaultProperty = getDefaultProperty();

        $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $current_property_details->gather_data(get_showtime('property_uid'));
        if (!$current_property_details->approved) {
            jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=cannot_redirect'), '');
        } else {
            $jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');

            if (!isset($_REQUEST[ 'property_uid' ])) {
                $defaultProperty = getDefaultProperty();
            } else {
                $defaultProperty = jomresGetParam($_REQUEST, 'property_uid', 0);
            }

            $c = jomres_singleton_abstract::getInstance('jomres_array_cache');
            $c->eraseAll();

            if (in_array($defaultProperty, $thisJRUser->authorisedProperties)) {
                $query = 'SELECT published FROM #__jomres_propertys WHERE propertys_uid = '.(int) $defaultProperty.' LIMIT 1';
                $published = doSelectSql($query, 1);
                if ($published) {
                    $query = "UPDATE #__jomres_propertys SET `published`='0' WHERE propertys_uid = ".(int) $defaultProperty.' LIMIT 1';
                    if (doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', false))) {
                        $MiniComponents->triggerEvent('02274'); // Optional trigger after property unpublished
                        $jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', false));
                        
                        $webhook_notification                               = new stdClass();
                        $webhook_notification->webhook_event                = 'property_unpublished';
                        $webhook_notification->webhook_event_description    = 'Logs when a property is unpublished.';
                        $webhook_notification->webhook_event_plugin         = 'core';
                        $webhook_notification->data                         = new stdClass();
                        $webhook_notification->data->property_uid           = $defaultProperty;
                        add_webhook_notification($webhook_notification);
                        
                        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=listyourproperties'), '');
                    }
                } else {
                    $query = "UPDATE #__jomres_propertys SET `published`='1' WHERE propertys_uid = ".(int) $defaultProperty.' LIMIT 1';
                    if (doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', false))) {
                        $MiniComponents->triggerEvent('02273'); // Optional trigger after property published
                        $jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', false));
                        
                        $webhook_notification                               = new stdClass();
                        $webhook_notification->webhook_event                = 'property_published';
                        $webhook_notification->webhook_event_description    = 'Logs when a property is published.';
                        $webhook_notification->webhook_event_plugin         = 'core';
                        $webhook_notification->data                         = new stdClass();
                        $webhook_notification->data->property_uid           = $defaultProperty;
                        add_webhook_notification($webhook_notification);
                        
                        jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=listyourproperties'), '');
                    }
                }
            } else {
                echo "You naughty little tinker, that's not your property";
            }
        }
    }

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
