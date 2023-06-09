<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


	jr_define('STRIPE_STANDARD_TITLE',"条纹标准");
	jr_define('STRIPE_STANDARD_MARKETING',"数以百万计的各种规模的企业——从初创公司到大型企业——使用 Stripe 的软件和 API 来接受付款、发送付款并在线管理他们的业务。" );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"如果您还没有 API Keys，您首先需要访问 Stripe 并获取 API 令牌 <a href='https://dashboard.stripe.com/developers' target='_blank'> API 密钥对</a>。如果您没有 Stripe 帐户，可以免费创建一个新帐户。您应该首先通过启用测试模式来测试您的集成，然后在提供的字段中使用测试密钥。一旦您很高兴一切正常，然后您可以切换到使用 Live 键并将此处的测试模式设置为否。");

jr_define('STRIPE_STANDARD_API_TEST_MODE',"测试模式");
jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"设置为 Yes 时，将使用您的测试 API 密钥。");

jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"实时可发布密钥");
jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"实时密钥");

jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"测试可发布密钥");
jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"测试密钥");

jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"将您的 <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook url</a> 设置为此 url，以便 Stripe 可以回拨并确认付款. 您需要单击添加端点并将此 url 粘贴到“端点 URL”字段中。将端点版本设置为 2022-08-01。允许它发送所有事件。当您在 Stripe 中从测试模式切换到实时模式时，您可以使用相同的端点。");

jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"实时 Webhook 签名秘密");
jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"测试 Webhook 签名密钥");
jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"当 Stripe 回叫服务器确认支付成功时，它会发送一个签名密钥。我们需要知道这个签名密钥，以便我们可以回调 Stripe 并确认消息的有效性。您可以通过以下方式查看签名密钥创建 webhook，然后在 Webhooks 页面中单击 webhook url。在那里，您可以显示签名密钥，您需要将其粘贴到此字段中。");


jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"支付失败！");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"很遗憾，我们无法确认付款成功。请返回预订表格并重试。");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"返回预订表格");