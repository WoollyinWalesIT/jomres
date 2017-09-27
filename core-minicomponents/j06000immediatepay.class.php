<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.12
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000immediatepay
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
        $invoice_id = (int) jomresGetParam($_GET, 'id', 0);

        // a quick anti hack check
        $userid = $thisJRUser->id;
        $query = 'SELECT id FROM #__jomresportal_invoices WHERE `cms_user_id`= '.(int) $thisJRUser->id.' AND `id` = '.(int) $invoice_id.' ';
        $result = doSelectSql($query);

        if (count($result) < 1 || count($result) > 1) {
            trigger_error('Unable to view invoice, either invoice id not found, or invoice id tampered with.', E_USER_ERROR);
        }

        jr_import('jrportal_invoice');
        $invoice = new jrportal_invoice();
        $invoice->id = $invoice_id;
        $invoice->getInvoice();

        if ($invoice->subscription != '1' && $invoice->is_commission != '1') {
            if (!$thisJRUser->userIsManager) {
                $settingArray = get_plugin_settings('paypal', $invoice->property_uid);
                $this->paypal_settings[ 'usesandbox' ] = $settingArray[ 'usesandbox' ];
                $this->paypal_settings[ 'email' ] = $settingArray[ 'paypalemail' ];
                $this->paypal_settings[ 'currencycode' ] = $settingArray[ 'currencycode' ];

                if ($this->paypal_settings[ 'usesandbox' ] == '1') {
                    $this->paypal_settings[ 'submit_url' ] = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
                } else {
                    $this->paypal_settings[ 'submit_url' ] = 'https://www.paypal.com/cgi-bin/webscr';
                }
            }
        } else {
            $paypal_settings = jomres_singleton_abstract::getInstance('jrportal_paypal_settings');
            $paypal_settings->get_paypal_settings();
            $this->paypal_settings = $paypal_settings->paypalConfigOptions;
        }

        $ourCallbackURL = JOMRES_SITEPAGE_URL_NOSEF.'&task=ospayment&no_html=1&Itemid='.$Itemid.'&subscription_id='.$invoice->subscription_id;

        $transactionName = 'Paypal Invoice from '.$jomresConfig_sitename;
        if ($this->paypal_settings[ 'usesandbox' ] == '1') {
            $transactionName .= ' Test Service';
        }

        $this->add_field('rm', '2'); // Return method = POST
        $this->add_field('cmd', '_xclick');
        $this->add_field('business', $this->paypal_settings[ 'email' ]);
        $this->add_field('item_name', 'Invoice');
        $this->add_field('item_number', $invoice_id);
        $this->add_field('invoice', $invoice_id);
        $this->add_field('custom', $invoice_id);
        $this->add_field('no_shipping', '1');
        $this->add_field('amount', number_format($invoice->init_total, 2));
        $this->add_field('return', JOMRES_SITEPAGE_URL_NOSEF);
        //$this->add_field('cancel_return', JOMRES_SITEPAGE_URL.'&task=canc_subscribed&Itemid='.$Itemid);
        $this->add_field('notify_url', $ourCallbackURL.'&action=ipn');
        $this->add_field('no_note', '1');
        $this->add_field('currency_code', $this->paypal_settings[ 'currencycode' ]); ?>
			<script>
				jomresJquery(document).ready(function () {
					document.paypal_form.submit();
				});
			</script>

		<?php
        echo '<center><h2>'.jr_gettext('_JOMRES_PAYPAL_REDIRECTMESSAGE', '_JOMRES_PAYPAL_REDIRECTMESSAGE', false, false)."</h2></center>\n";
        echo '<form method="post" name="paypal_form" ';
        echo 'action="'.$this->paypal_settings[ 'submit_url' ]."\">\n";
        $txt = '';
        foreach ($this->fields as $name => $value) {
            $txt .= $name.' '.$value.'<br/>';
            echo "<input type=\"hidden\" name=\"$name\" value=\"$value\"/>\n";
        }
        gateway_log($txt);
        echo '<center><br/><br/>'.jr_gettext('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', '_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', false, false)."<br/><br/>\n";
        echo '<input type="submit" value="'.jr_gettext('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', '_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', false, false)."\"></center>\n";
        echo "</form>\n";
    }

    /**
     * Adds a field and value to the 'fields' variable.
     */
    public function add_field($field, $value)
    {
        // adds a key=>value pair to the fields array, which is what will be
        // sent to paypal as POST variables.  If the value is already in the
        // array, it will be overwritten.
        $this->fields[ "$field" ] = $value;
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
