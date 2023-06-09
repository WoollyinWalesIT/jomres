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

	jr_define('STRIPE_STANDARD_TITLE',"ストライプ スタンダード");
	jr_define('STRIPE_STANDARD_MARKETING',"新興企業から大企業まで、あらゆる規模の数百万の企業が、Stripe のソフトウェアと API を使用して、支払いの受け取り、支払いの送信、およびビジネスのオンライン管理を行っています。 " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"API キーをまだ持っていない場合は、最初に Stripe にアクセスして API トークンを取得する必要があります <a href='https://dashboard.stripe.com/developers' target='_blank'> API キー ペア</a>。Stripe アカウントを持っていない場合は、新しいアカウントを無料で作成できます。最初にテスト モードを有効にしてから、提供されたフィールドでテスト キーを使用して統合をテストする必要があります。すべてが機能していることに満足している場合は、ライブ キーの使用に切り替えて、ここでテスト モードを [いいえ] に設定してください。");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"テストモード");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Yes に設定すると、テスト API キーが使用されます。");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"ライブ発行可能キー");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"ライブ秘密鍵");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"発行可能なキーのテスト");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"秘密鍵のテスト");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"<a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook URL</a> をこの URL に設定して、Stripe がコールバックして支払いを確認できるようにします. You will need to click Add Endpoint and paste this url into the 'Endpoint URL' field. Set the endpoint version to 2022-08-01. Allow it to send all events. Stripe でテストモードからライブモードに切り替えると、同じエンドポイントを使用できます。");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"ライブ Webhook 署名シークレット");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Webhook 署名シークレットのテスト");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Stripe がサーバーにコールバックして支払いの成功を確認すると、署名シークレットが送信されます。Stripe にコールバックしてメッセージの有効性を確認できるように、この署名シークレットを知る必要があります。 Webhook を作成し、Webhook ページで Webhook の URL をクリックします。そこで、このフィールドに貼り付ける必要がある署名シークレットを公開できます。");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"支払いに失敗しました!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"申し訳ありませんが、お支払いが完了したことを確認できませんでした。予約フォームに戻って、もう一度お試しください。");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"予約フォームに戻る");