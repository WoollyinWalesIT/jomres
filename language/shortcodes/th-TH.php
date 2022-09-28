<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 *  @version Jomres 10.5.4
 * @package Jomres
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined('_JOMRES_INITCHECK') or die('');
##################################################################

jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'นี่คือหน้าแรกของ cpanel คุณสมบัติ');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'นี่คือแผนภูมิเทปคุณสมบัติซึ่งให้ภาพรวมของการจองแบบเรียลไทม์ ห้องว่าง และการเข้าพักโดยย่อ');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'สคริปต์นี้อนุญาตให้ผู้ใช้เปรียบเทียบคุณสมบัติต่างๆ กับแต่ละอื่น ๆ ได้สูงสุด 3 คุณสมบัติ');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'รายการที่คั่นด้วยเครื่องหมายจุลภาคของ uid คุณสมบัติ เช่น 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'สร้างแบบฟอร์มติดต่อเจ้าของ ');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'ส่ง uid คุณสมบัติของทรัพย์สินที่จะติดต่อ ส่ง 0 (ศูนย์) เพื่อติดต่อผู้ดูแลไซต์แทน ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "แสดงหน้าข้อมูลบริษัทที่ดึงรายละเอียดจากฟิลด์รายละเอียดบริษัทของคุณของผู้จัดการทรัพย์สินในการกำหนดค่าคุณสมบัติ โดยทั่วไปรายละเอียดในแท็บนี้จะใช้สำหรับการติดต่อกัน ทำให้ผู้จัดการมีทั้งที่อยู่โรงแรม/อพาร์ตเมนต์ และ ที่อยู่แยกต่างหากเพื่อวัตถุประสงค์ทางธุรกิจ");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "แสดงปฏิทินของที่พัก");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'ส่ง uid คุณสมบัติของพร็อพเพอร์ตี้ที่จะแสดง ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'เดือนที่จะแสดง ค่าเริ่มต้นคือ 24 ถ้าไม่ได้ตั้งค่าไว้เป็นอย่างอื่น ไม่เข้ากันกับตัวแปร Show Just Month');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "ตั้งค่านี้เป็น 1 ถ้าคุณเพียงต้องการแสดงเดือนปัจจุบันด้วยตัวเอง การตั้งค่า months_to_show จะถูกละเว้นถ้า show_just_month ถูกใช้ในรหัสย่อเดียวกัน ดังนั้น คุณไม่ควรใช้อย่างใดอย่างหนึ่ง ในเวลาเดียวกัน.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'แสดงเฉพาะข้อความคำอธิบายคุณสมบัติ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'แสดงเฉพาะข้อความคำอธิบายคุณสมบัติ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'แสดงเฉพาะคุณสมบัติคุณสมบัติ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'แสดงเฉพาะเทมเพลตส่วนหัวของคุณสมบัติ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'แสดงเฉพาะประเภทห้องพักของที่พัก');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'แสดงเฉพาะรูปภาพหลักของพร็อพเพอร์ตี้');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'แสดงเฉพาะแผนที่คุณสมบัติ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'แสดงข้อความข้อมูลเพิ่มเติมของคุณสมบัติ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'รหัส QR ที่เชื่อมโยงกับ gmaps ซึ่งสามารถสแกนลงในโทรศัพท์โดยใช้แอปอ่านรหัส qr ที่ระบุเส้นทางไปยังทรัพย์สิน');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "แสดงรีวิวของสถานที่ให้บริการ");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "แสดงสรุปรีวิวของที่พัก");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'แสดงห้องส่วนตัว');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID ของห้อง');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "แสดงห้องของที่พัก");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "แสดงภาพห้องพักของที่พักเป็นสไลด์โชว์");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'แสดงสไลด์โชว์คุณสมบัติ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'แสดงภาษีทรัพย์สิน');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "แสดงที่อยู่ธุรกิจของไซต์ตามที่ป้อนในการกำหนดค่าไซต์ > รายละเอียดบริษัทของคุณ");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'แสดงข้อกำหนดและเงื่อนไขของที่พัก');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "แสดงปฏิทิน UI ของพร็อพเพอร์ตี้ ซึ่งเป็นปฏิทินที่แตกต่างจากปฏิทินขนาดใหญ่หลักและอิงตามฟังก์ชันปฏิทิน Jquery UI");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'ส่ง uid คุณสมบัติของพร็อพเพอร์ตี้ที่จะแสดง ');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'ตั้งค่านี้เป็น 1 เพื่อไม่ให้แสดงคำอธิบาย');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "แสดงผลการค้นหา ซึ่งสามารถปรับปรุงได้โดยการเพิ่มพารามิเตอร์การค้นหา เราไม่แนะนำให้คุณใช้พารามิเตอร์ทั้งหมดพร้อมกัน เพราะคุณจะลงเอยด้วยเกณฑ์การค้นหาที่จำกัดเกินไป คุณควรจำกัดตัวเองให้เหลือเพียงหนึ่งหรือสองพารามิเตอร์ เช่น ค้นหาตามประเทศและจำนวนดาว");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'ค้นหาตามประเทศ โดยใช้รหัส ISO Alpha-2 เช่น GB หรือ DE');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "ค้นหาตามภูมิภาค เนื่องจากภูมิภาคถูกบันทึกไว้ในฐานข้อมูล คุณต้องใช้ ID ภูมิภาค ไปที่ผู้ดูแลระบบ > Jomres > โครงสร้างไซต์ > แสดงรายการภูมิภาค และเลื่อนไปที่ลิงก์แก้ไข คุณจะเห็นหมายเลข ID ของภูมิภาค .");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'ชื่อเต็มของเมืองที่คุณต้องการค้นหา');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'ค้นหาคุณสมบัติด้วยคุณสมบัติเฉพาะ id คุณสมบัติสามารถพบได้ในผู้ดูแลระบบ > Jomres > โครงสร้างไซต์ > คุณสมบัติคุณสมบัติ');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'ค้นหาคุณสมบัติที่มีห้องพักบางประเภท รหัสประเภทห้องสามารถพบได้ในผู้ดูแลระบบ > Jomres > โครงสร้างไซต์ > ประเภทห้อง');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'ค้นหาคุณสมบัติของประเภทคุณสมบัติเฉพาะ id ประเภทคุณสมบัติสามารถพบได้ในผู้ดูแลระบบ > Jomres > โครงสร้างไซต์ > ประเภทคุณสมบัติ');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'ค้นหาคุณสมบัติภายในช่วงราคาเฉพาะ');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "ค้นหาที่พักที่มีอัตราภาษีศุลกากรที่อนุญาตให้ผู้เข้าพักมีจำนวนค่าที่แน่นอน ตัวอย่างเช่น กลุ่มที่มีจำนวน 6 คน");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'ค้นหาคุณสมบัติของดาว N');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'ค้นหาตามวันที่มาถึง ควรจะรวมเข้ากับวันที่ออกเดินทางของพารามิเตอร์');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'ค้นหาตามวันที่ออกเดินทาง ควรรวมกับค่า arrivalDate วันที่');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'ค้นหาตามหมวดหมู่คุณสมบัติ');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "ดูหน้าของตัวแทน คุณสามารถส่งผ่าน uid ของคุณสมบัติหรือ id ของตัวแทนเองได้ หากคุณทราบ");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "uid ของพร็อพเพอร์ตี้ ซึ่งจะแสดงเอเจนต์ของพร็อพเพอร์ตี้");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "id ฐานข้อมูลของผู้จัดการ ถ้าทราบ");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'แสดงคุณสมบัติยอดนิยม โดยทั่วไปจะใช้ในตำแหน่งโมดูลหรือวิดเจ็ต');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'จำนวนคุณสมบัติสูงสุดที่สามารถแสดงได้');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'แสดงเฉพาะคุณสมบัติของประเภทคุณสมบัตินี้เท่านั้น');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'ตั้งค่าเป็น 1 เพื่อแสดงโมดูลที่ปรับให้เหมาะสมสำหรับตำแหน่งวิดเจ็ต/โมดูลในแนวตั้ง');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'แสดงการเลือกแบบสุ่มของคุณสมบัติ โดยทั่วไปจะใช้ในตำแหน่งโมดูลหรือวิดเจ็ต');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'จำนวนคุณสมบัติสูงสุดที่สามารถแสดงได้');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'แสดงเฉพาะคุณสมบัติของประเภทคุณสมบัตินี้เท่านั้น');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'ตั้งค่าเป็น 1 เพื่อแสดงโมดูลที่ปรับให้เหมาะสมสำหรับตำแหน่งวิดเจ็ต/โมดูลแนวตั้ง');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "แสดงคุณสมบัติที่แขกเข้าชมล่าสุด โดยทั่วไปจะใช้ในตำแหน่งโมดูลหรือวิดเจ็ต");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'จำนวนสูงสุดของคุณสมบัติที่สามารถแสดงได้');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'ตั้งค่าเป็น 1 เพื่อแสดงโมดูลที่ปรับให้เหมาะสมสำหรับตำแหน่งวิดเจ็ต/โมดูลในแนวตั้ง');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'แสดงคุณสมบัติจำนวนหนึ่ง ซึ่งโดยทั่วไปจะใช้ในตำแหน่งโมดูลหรือวิดเจ็ต');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'รหัสคุณสมบัติของคุณสมบัติที่คุณต้องการแสดง');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'ตั้งค่าเป็น 1 เพื่อแสดงโมดูลที่ปรับให้เหมาะสมสำหรับตำแหน่งวิดเจ็ต/โมดูลแนวตั้ง');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'แสดงรายการการเลือกสกุลเงินแบบเลื่อนลง');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'เปิดใช้งาน/ปิดใช้งานเอาต์พุตเทมเพลตสำรอง เอาต์พุตนี้มีไว้สำหรับใช้ในแถบเครื่องมือ Bootstrap');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'แสดงหน้ารถเข็นช็อปปิ้ง');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'แสดงโมดูล/วิดเจ็ตรถเข็นช็อปปิ้ง');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'แสดงเมนูหลัก โปรดทราบว่าหากคุณใช้งาน mainmenu_wrapper_alternate.html เวอร์ชันที่กำหนดเอง เช่น /templates/jr_leohtian/html/com_jomres คุณอาจต้องแก้ไขตำแหน่งเพื่อแทนที่ <inate_jomres /i> โดยมี MENU_LOCATION อยู่ในวงเล็บปีกกา');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'หน้านี้อนุญาตให้คุณอัปโหลดรูปภาพสำหรับสถานที่ให้บริการของคุณและสิ่งที่คุณนำเสนอ มีปุ่มหลักหนึ่งปุ่ม และปุ่มที่สองที่ให้คุณเลือกทรัพยากรเฉพาะเพื่ออัปโหลดรูปภาพ ดังนั้น คุณสมบัติหลัก รูปภาพและสไลด์โชว์จะแสดงเพียงปุ่มเดียว แต่ถ้าคุณได้สร้างไว้ เช่น ตัวเลือกพิเศษหรือห้อง คุณจะเห็นปุ่มที่สองซึ่งคุณสามารถอัปโหลดรูปภาพสำหรับแหล่งข้อมูลเฉพาะเหล่านั้นได้');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'หน้านี้อนุญาตให้คุณอัปโหลดรูปภาพสำหรับสถานที่ให้บริการของคุณและสิ่งที่คุณนำเสนอ มีปุ่มหลักหนึ่งปุ่ม และปุ่มที่สองที่ให้คุณเลือกทรัพยากรเฉพาะเพื่ออัปโหลดรูปภาพ ดังนั้น คุณสมบัติหลัก รูปภาพและสไลด์โชว์จะแสดงเพียงปุ่มเดียว แต่ถ้าคุณได้สร้างตัวเลือกเพิ่มเติม คุณจะเห็นปุ่มที่สองซึ่งคุณสามารถอัปโหลดรูปภาพสำหรับแหล่งข้อมูลเฉพาะเหล่านั้นได้');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>ขั้นแรกให้เลือกรูปภาพที่คุณต้องการอัปโหลดโดยคลิกเพิ่มรูปภาพหรือใช้การลากและวาง ซึ่งจะปรากฏในคอลัมน์ทางด้านขวามือ</li>
  <li>เหนือพื้นที่นี้ ให้ใช้ปุ่ม \"เลือกทรัพยากร\" เพื่อเลือกทรัพยากรที่คุณต้องการอัปโหลดรูปภาพ คุณอาจได้รับตัวเลือกให้เลือกแหล่งข้อมูลเฉพาะด้านล่าง </li>
  <li> เมื่อคุณเลือกทรัพยากรแล้ว คุณสามารถคลิกปุ่มอัปโหลดรูปภาพใต้รูปภาพเพื่อเชื่อมโยงกับทรัพยากรนั้น เมื่ออัปโหลดรูปภาพแล้ว รูปภาพจะหายไปจากคอลัมน์ทางขวาของไซต์ และปรากฏทางด้านซ้าย</li>
  <li>ใช้ปุ่มถังขยะข้างรูปภาพที่มีอยู่เพื่อลบรูปภาพที่คุณไม่ต้องการให้แสดงอีกต่อไป</li>
  <li>คุณสามารถเปลี่ยนลำดับการแสดงไฟล์ในสไลด์โชว์ได้โดยการเปลี่ยนชื่อไฟล์ก่อนที่จะอัปโหลด เนื่องจากไฟล์จะแสดงเป็นหน้าตามลำดับตัวอักษร</li>
</ol>
 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "ถัดจากปุ่มแหล่งข้อมูล คุณอาจเห็นปุ่มแสดงตัวอย่าง ถ้าคุณคลิกบนนี้ คุณจะเห็นป๊อปอัปที่แสดงให้คุณเห็นว่าภาพที่อัปโหลดในปัจจุบันจะมีลักษณะอย่างไรในหน้าเว็บ ซึ่งจะช่วยให้คุณ แนวคิดว่าภาพจะมีลักษณะอย่างไรต่อลูกค้าของคุณ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "ไม่จำกัดจำนวนรูปภาพที่คุณสามารถอัปโหลดได้ รูปภาพจะถูกปรับขนาดโดยอัตโนมัติเมื่ออัปโหลด คุณสามารถอัปโหลดได้เฉพาะไฟล์ JPG และ PNG เท่านั้น");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "รูปภาพใดๆ ที่คุณอัปโหลดควรมีอย่างน้อย ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " กว้างพิกเซล มิฉะนั้นอาจดูคลุมเครือหลังจากที่อัปโหลดแล้ว");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "รูปภาพใดๆ ที่คุณอัปโหลดต้องไม่เกิน ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " ในขนาด.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "เลือกทรัพยากรที่คุณต้องการอัปโหลดรูปภาพ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "ทรัพยากรเฉพาะ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "อัปโหลดรูปภาพสำหรับทรัพยากรนี้แล้ว");

jr_define('_JOMRES_MARKDOWN_TITLE', 'การจัดรูปแบบข้อความ');
jr_define('_JOMRES_MARKDOWN_DESC', 'คุณสามารถป้อนข้อความที่นี่โดยใช้การจัดรูปแบบ Markdown อย่างง่าย คุณไม่จำเป็นต้องรู้ HTML ใดๆ เพียงใช้ปุ่มเพื่อทำให้ข้อมูลดูเหมือนที่คุณต้องการ หรือจัดรูปแบบข้อความตามตัวอย่างเหล่านี้');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'เน้น');
jr_define('_JOMRES_MARKDOWN_BOLD', 'ตัวหนา');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'ตัวเอียง');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'ขีดกลาง');
jr_define('_JOMRES_MARKDOWN_HEADERS', "ส่วนหัว");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'ส่วนหัวขนาดใหญ่');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "ส่วนหัวปานกลาง");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'ส่วนหัวขนาดเล็ก');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'ส่วนหัวเล็ก');
jr_define('_JOMRES_MARKDOWN_LISTS', "รายการ");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'รายการทั่วไป');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'รายการลำดับเลข');
jr_define('_JOMRES_MARKDOWN_LINKS', 'ลิงก์');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'ข้อความที่จะแสดง');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'ใบเสนอราคา');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'นี่คือใบเสนอราคา');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'สามารถขยายได้หลายบรรทัด!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'รูปภาพ');
jr_define('_JOMRES_MARKDOWN_TABLE', 'ตาราง');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'คอลัมน์');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'แสดงภาพคุณสมบัติเป็นสไลด์โชว์ในรายการคุณสมบัติ?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'หากตั้งค่าเป็นใช่ สไลด์โชว์ของรูปภาพหลักของคุณสมบัติจะแสดงขึ้น หากตั้งค่าเป็นไม่ใช่ รูปภาพหลักของคุณสมบัติแรกจะแสดงขึ้น');

jr_define('EDIT_CMS_USER', 'แก้ไขผู้ใช้ CMS');

jr_define('BOOKING_MADE_BY', 'ทำการจองโดย');

jr_define('_JOMRES_ROUTER_FEATURES', 'สิ่งอำนวยความสะดวก');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'ประเภทห้อง');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL แบบฟอร์มการจองภายนอก');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'คุณสามารถตั้งค่า URL ภายนอกได้ที่นี่ หากคุณต้องการใช้เว็บไซต์ภายนอกสำหรับการจอง ปุ่มจอง jomres ทั้งหมดจะชี้ไปที่ URL นี้ เว้นฟิลด์นี้ว่างไว้หากคุณต้องการใช้แบบฟอร์มการจอง Jomres .');

jr_define('_JOMRES_ROOM_TAGLINE', 'แท็กไลน์ (คำอธิบายห้องแบบสั้น/คำบรรยาย)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'คำอธิบายห้อง');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'บุคคลทั่วไปติดบัญชีดำ');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'หากผู้เข้าพักรายนี้อยู่ในบัญชีดำ พวกเขาจะจองที่พักนี้ไม่ได้อีกต่อไป');
jr_define('_JOMRES_SESSION_HANDLER', 'ตัวจัดการเซสชัน');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'บันทึกไฟล์เซสชัน jomres ลงดิสก์หรือฐานข้อมูล แนะนำ: ฐานข้อมูล');
jr_define('_JOMRES_MAP_HEIGHT', "ความสูงของแผนที่ (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "ระดับการซูมแผนที่ ");
jr_define('_JOMRES_MAP_MAPTYPE', "ประเภทแผนที่ ");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "ตัวจัดการการแทนที่เทมเพลต");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "แพ็คเกจเทมเพลตเป็นปลั๊กอินที่สามารถจัดเตรียมเทมเพลตแทนที่สำหรับไฟล์เทมเพลต Jomres หลักต่างๆ");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "หน้านี้แสดงรายการไฟล์เทมเพลตใดๆ ที่สามารถแทนที่ด้วยไฟล์เทมเพลตของแพ็คเกจเทมเพลต หากคุณต้องการแทนที่ไฟล์เทมเพลตบางไฟล์ ให้คลิกที่ปุ่มแก้ไขสำหรับไฟล์นั้น ในหน้าถัดไป คุณจะเป็น สามารถเลือกเวอร์ชันที่คุณต้องการแทนที่ได้ หมายเหตุ การแทนที่เหล่านี้มีความสำคัญเหนือทั้ง Jomres Core และการแทนที่ธีม/เทมเพลตของ Wordpress หรือ Joomla คุณสามารถปิดใช้งานการแทนที่ได้โดยการลบในหน้ารายการแทนที่เทมเพลต");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "ชื่อเทมเพลต");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "เส้นทางปัจจุบัน");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "ไม่ถูกแทนที่");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "คุณสามารถเลือกไฟล์เทมเพลตที่จะแทนที่ไฟล์เทมเพลตหลักโดยเปลี่ยนเมนูแบบเลื่อนลง");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "เปอร์เซ็นต์ห้องที่จอง");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'แสดงแบบฟอร์มการสร้างคุณสมบัติใหม่');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'การซูมแผนที่, 1: โลก 5: แผ่นดิน/ทวีป 10: เมือง 15: ถนน 20: อาคาร ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'จำนวนรีวิวที่จะแสดง');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'แสดงคุณสมบัติที่สั้น ๆ ของผู้ใช้ หากผู้ใช้ลงทะเบียนแล้ว สิ่งเหล่านี้คือรายการโปรดของพวกเขา หากไม่ได้เข้าสู่ระบบ ให้เพิ่มเฉพาะรายการเหล่านั้นผ่านไอคอนรายการโปรดระหว่างการเยี่ยมชม');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'มูลค่าเงินฝากขั้นต่ำ');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "หากเงินฝากที่คำนวณได้น้อยกว่าตัวเลขนี้ ให้ตั้งค่าการฝากเป็นค่านี้แทน ตัวเลขนี้อาจถูกแทนที่ด้วยตัวมันเองหากไม่เป็นไปตามการตั้งค่าเงินฝากขั้นต่ำของไซต์ ปล่อยให้ตั้งค่าเป็น 0 เป็น ไม่ใช้การตั้งค่า");

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'แสดงแบบฟอร์มความยินยอมที่สอดคล้องกับ GDPR');

jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'รายการประเภทห้องที่พัก');
jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'แสดงประเภทห้องพักของที่พัก');

jr_define('_JOMRES_SHORTCODE_LOGIN_FORM', 'แสดงแบบฟอร์มการเข้าสู่ระบบ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'แสดงรายการห้องของห้องพักบางประเภท');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'รหัสประเภทห้อง');

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'แดชบอร์ด');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'แสดงรายการคุณสมบัติที่รวบรวม');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'จำนวนคุณสมบัติที่รวบรวมที่จะแสดง');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'จะแสดง MRP (โรงแรม/ที่พักและอาหารเช้า) หรือ SRP (กระท่อม/อพาร์ตเมนต์/วิลล่า) ค่าเริ่มต้นจะพิจารณาจากคุณสมบัติปัจจุบันของ uid หรือไม่ ถ้านั่นไม่ใช่ MRP แสดง หากต้องการเลือกประเภทเฉพาะ ให้ตั้งค่านี้เป็น 0 สำหรับ srps หรือ 1 สำหรับ mrps');


	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "แสดงดาวของพร็อพเพอร์ตี้ สิ่งเหล่านี้ถูกตั้งค่าในการกำหนดค่าคุณสมบัติ ถ้าคุณสมบัติเป็น MRP");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'ID ของพร็อพเพอร์ตี้');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'ไม่บังคับ หากไม่ได้ตั้งค่ารหัสคุณสมบัติ คุณสามารถส่งตัวเลขแทนได้');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'ทางเลือก พาธเทมเพลตอื่น ไม่สามารถส่งผ่าน url ได้ ต้องเป็นค่าสัมบูรณ์');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'ตัวเลือก ชื่อเทมเพลตสำรอง');
