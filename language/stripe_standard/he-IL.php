<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standard");
	jr_define('STRIPE_STANDARD_MARKETING',"מיליוני עסקים מכל הגדלים - מסטארט-אפים ועד ארגונים גדולים - משתמשים בתוכנות ובממשקי ה-API של Stripe כדי לקבל תשלומים, לשלוח תשלומים ולנהל את העסקים שלהם באינטרנט. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"אם עדיין אין לך מפתחות API תצטרך תחילה לבקר ב-Stripe ולקבל אסימון API <a href='https://dashboard.stripe.com/developers' target='_blank'> זוג מפתחות API</a>. אם אין לך חשבון Stripe, אתה יכול ליצור חשבון חדש בחינם. תחילה עליך לבדוק את השילוב שלך על ידי הפעלת מצב הבדיקה ולאחר מכן שימוש במפתחות הבדיקה בשדות המסופקים. שמחים שהכל עובד. לאחר מכן תוכל לעבור לשימוש במקשי חיים ולהגדיר את מצב הבדיקה כאן ל-No.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"מצב בדיקה");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"כאשר מוגדר כ-כן, ייעשה שימוש במפתחות ה-API של בדיקה.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"מפתח חי לפרסום");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"מפתח סודי חי");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"מפתח לפרסום לבדיקה");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"מפתח סוד בדיקה");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"כתובת אתר אינטרנט");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"הגדר את <a href='https://dashboard.stripe.com/webhooks' target='_blank'> URL של webhook</a> לכתובת האתר הזו כדי ש-Stripe תוכל להתקשר בחזרה ולאשר תשלום . תצטרך ללחוץ על הוסף נקודת קצה ולהדביק כתובת אתר זו בשדה 'כתובת אתר קצה'. הגדר את גרסת נקודת הקצה ל-2022-08-01. אפשר לה לשלוח את כל האירועים. כאשר אתה עובר ממצב בדיקה למצב חי ב-Stripe, יכול להשתמש באותה נקודת קצה.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"סוד החתימה חיה של Webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"בדוק את סוד חתימת ה-Webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"כאשר Stripe מתקשר לשרת בחזרה כדי לאשר תשלום מוצלח הוא שולח סוד חתימה זה. עלינו לדעת את סוד החתימה הזה כדי שנוכל להתקשר בחזרה ל-Stripe ולאשר את תקפות ההודעה. ניתן לראות את סוד החתימה על ידי יצירת ה-webhook, ולאחר מכן בדף ה-Webhooks לחיצה על כתובת האתר של ה-webhook. לאחר מכן, תוכל לחשוף את סוד החתימה, אותו תצטרך להדביק בשדה זה.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"התשלום נכשל!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"למרבה הצער איננו יכולים לאשר תשלום מוצלח. אנא חזור לטופס ההזמנה ונסה שוב.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"חזור לטופס ההזמנה");
