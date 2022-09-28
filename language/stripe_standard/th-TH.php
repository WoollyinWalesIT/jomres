<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.24.0
 * @package Jomres
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################


	jr_define('STRIPE_STANDARD_TITLE',"แถบมาตรฐาน");
	jr_define('STRIPE_STANDARD_MARKETING',"ธุรกิจนับล้านทุกขนาด – ตั้งแต่สตาร์ทอัพไปจนถึงองค์กรขนาดใหญ่ – ใช้ซอฟต์แวร์และ API ของ Stripe เพื่อรับการชำระเงิน ส่งการจ่ายเงิน และจัดการธุรกิจของพวกเขาทางออนไลน์ " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"หากคุณยังไม่มีคีย์ API ก่อนอื่นคุณต้องไปที่ Stripe และรับโทเค็น API <a href='https://dashboard.stripe.com/developers' target='_blank'> คู่คีย์ API</a> หากคุณไม่มีบัญชี Stripe คุณสามารถสร้างบัญชีใหม่ได้ฟรี คุณควรทดสอบการรวมระบบของคุณก่อนโดยเปิดใช้งานโหมดทดสอบ แล้วใช้คีย์ทดสอบในช่องที่ให้ไว้ เมื่อคุณ มีความสุขที่ทุกอย่างทำงานได้ จากนั้นคุณสามารถเปลี่ยนไปใช้ปุ่ม Live และตั้งค่าโหมดทดสอบที่นี่เป็นไม่");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"โหมดทดสอบ");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"เมื่อตั้งค่าเป็น ใช่ ระบบจะใช้คีย์ API การทดสอบของคุณ");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"คีย์เผยแพร่สด");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Live Secret key");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"ทดสอบคีย์ที่เผยแพร่ได้");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE', "ทดสอบรหัสลับ");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL เว็บฮุค");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"ตั้งค่า <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook url</a> เป็น url นี้เพื่อให้ Stripe สามารถโทรกลับและยืนยันการชำระเงิน คุณจะต้องคลิก Add Endpoint และวาง URL นี้ลงในฟิลด์ 'URL ปลายทาง' ตั้งค่าเวอร์ชันปลายทางเป็น 2022-08-01 อนุญาตให้ส่งกิจกรรมทั้งหมด เมื่อคุณเปลี่ยนจากโหมดทดสอบเป็นโหมด Live ใน Stripe คุณ สามารถใช้ปลายทางเดียวกันได้");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"ความลับในการลงนาม Webhook สด");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"ทดสอบความลับของ Webhook Signing");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"เมื่อ Stripe เรียกเซิร์ฟเวอร์กลับมาเพื่อยืนยันการชำระเงินที่สำเร็จ เซิร์ฟเวอร์จะส่งความลับในการลงนาม เราจำเป็นต้องทราบความลับในการลงนามนี้ เพื่อให้เราสามารถเรียก Stripe กลับมาและยืนยันความถูกต้องของข้อความ คุณสามารถดูความลับในการลงนามโดย สร้าง webhook จากนั้นในหน้า Webhooks ให้คลิกที่ URL ของ webhook เมื่อถึงที่นั่น คุณสามารถเปิดเผยความลับในการลงนาม ซึ่งคุณจะต้องวางลงในฟิลด์นี้");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"การชำระเงินล้มเหลว!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"ขออภัย เราไม่สามารถยืนยันการชำระเงินได้สำเร็จ โปรดกลับไปที่แบบฟอร์มการจองและลองอีกครั้ง");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"กลับสู่แบบฟอร์มการจอง");