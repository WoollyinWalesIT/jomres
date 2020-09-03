<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.3
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j10501email_settings
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
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

		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$lists = $componentArgs[ 'lists' ];

		$this->outputTestEmailJs();

		$configurationPanel->startPanel(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', false));

		$configurationPanel->setleft(jr_gettext('_JOMRES_SYSTEM_EMAILS', '_JOMRES_SYSTEM_EMAILS', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_default_from_address" value="'.$jrConfig[ 'default_from_address' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_SYSTEM_EMAILS_DESC', '_JOMRES_SYSTEM_EMAILS_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', false));
		$configurationPanel->setmiddle($lists[ 'alternate_smtp_use_settings' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', '_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_alternate_smtp_host" value="'.$jrConfig[ 'alternate_smtp_host' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_alternate_smtp_port" value="'.$jrConfig[ 'alternate_smtp_port' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_alternate_smtp_protocol" value="'.$jrConfig[ 'alternate_smtp_protocol' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', false));
		$configurationPanel->setmiddle($lists[ 'alternate_smtp_authentication' ]);
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', false));
		$configurationPanel->setmiddle('<input type="text" class="input-large" name="cfg_alternate_smtp_username" value="'.$jrConfig[ 'alternate_smtp_username' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', false));
		$configurationPanel->setmiddle('<input type="password" class="input-large" name="cfg_alternate_smtp_password" value="'.$jrConfig[ 'alternate_smtp_password' ].'" />');
		$configurationPanel->setright(jr_gettext('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', false));
		$configurationPanel->insertSetting();

		$configurationPanel->setleft(jr_gettext('_JOMRES_TEST_EMAIL_SEND', '_JOMRES_TEST_EMAIL_SEND', false));
		$configurationPanel->setmiddle('<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">'.jr_gettext('_JOMRES_TEST_EMAIL_SEND', '_JOMRES_TEST_EMAIL_SEND', false).'</button>');
		$configurationPanel->setright(
									'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">'.jr_gettext('_JOMRES_TEST_EMAIL_SEND', '_JOMRES_TEST_EMAIL_SEND', false).'</h4>
											  </div>
											  <div class="modal-body">'.jr_gettext('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', false).'</br>
													<input type="text" class="input-large" id="test_email_address" value="'.jomresGetParam($_REQUEST, 'test_email_address', '').'" />
											  </div>
											  <div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">'.jr_gettext('COMMON_CLOSE', 'COMMON_CLOSE', false).'</button>
												<button type="button" id="submit_test_email" class="btn btn-primary">'.jr_gettext('_JOMRES_TEST_EMAIL_SEND', '_JOMRES_TEST_EMAIL_SEND', false).'</button>
											  </div>
											</div>
										</div>
									</div>'
									);
		$configurationPanel->insertSetting();

		$configurationPanel->endPanel();
	}

	public function outputTestEmailJs()
	{
		?>
<script type="text/javascript">
<!--
document.addEventListener('DOMContentLoaded', function(){
	//twitter bootstrap script
	jomresJquery("button#submit_test_email").click(function(){
		var test_email_address = jomresJquery( "#test_email_address" ).val();
		
		var cfg_default_from_address			= jomresJquery( "input[name*='cfg_default_from_address']" ).val();
		var cfg_alternate_smtp_host				= jomresJquery( "input[name*='cfg_alternate_smtp_host']" ).val();
		var cfg_alternate_smtp_port				= jomresJquery( "input[name*='cfg_alternate_smtp_port']" ).val();
		var cfg_alternate_smtp_protocol			= jomresJquery( "input[name*='cfg_alternate_smtp_protocol']" ).val();
		var cfg_alternate_smtp_authentication	= jomresJquery( '#cfg_alternate_smtp_authentication1_id' ).hasClass("active");
		var cfg_alternate_smtp_username			= jomresJquery( "input[name*='cfg_alternate_smtp_username']" ).val();
		var cfg_alternate_smtp_password			= jomresJquery( "input[name*='cfg_alternate_smtp_password']" ).val();
		
		jomresJquery.ajax({
			type: "POST",
			url: "<?php echo JOMRES_SITEPAGE_URL_ADMIN_AJAX ?>&task=ajax_send_test_email&test_email_address="+test_email_address+"&default_from_address="+cfg_default_from_address+"&alternate_smtp_host="+cfg_alternate_smtp_host+"&alternate_smtp_port="+cfg_alternate_smtp_port+"&alternate_smtp_protocol="+cfg_alternate_smtp_protocol+"&alternate_smtp_authentication="+cfg_alternate_smtp_authentication+"&alternate_smtp_username="+cfg_alternate_smtp_username+"&alternate_smtp_password="+cfg_alternate_smtp_password,
			success: function(data) {
				if(data.status == true){
					alert("<?php echo jr_gettext('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', '_JOMRES_TEST_EMAIL_RESULT_SUCCESS', false); ?>");
				}else{
					alert( "<?php echo jr_gettext('_JOMRES_TEST_EMAIL_RESULT_FAILURE', '_JOMRES_TEST_EMAIL_RESULT_FAILURE', false); ?> " + data.failure_message);
				}
				jomresJquery('#myModal').modal('hide');
			},
			
		});
		
	});
}, false);
//-->
</script>
		<?php 
	}


	public function getRetVals()
	{
		return null;
	}
}
