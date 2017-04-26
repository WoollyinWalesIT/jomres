<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.29
 * @package Jomres
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define( "_JOMRES_COM_MR_QUICKRESDESC", "จองด่วน" );
jr_define( "_JOMRES_COM_MR_SHOWPROFILES", "แสดงส่วนกำหนดข้อมูลส่วนตัว" );
jr_define( "_JOMRES_COM_MR_GENERALCONFIGDESC", "การตั้งค่าองค์ประกอบของธุรกิจ" );
jr_define( "_JOMRES_COM_MR_BACK", "ย้อนกลับ" );
jr_define( "_JOMRES_COM_MR_YES", "ใช่" );
jr_define( "_JOMRES_COM_MR_NO", "ไม่" );
jr_define( "_JOMRES_COM_MR_NEWTARIFF", "ใหม่" );
jr_define( "_JOMRES_COM_MR_NEWPROPERTY", "ธุรกิจใหม่" );
jr_define( "_JOMRES_COM_MR_NEWPROPERTYFEATURE", "คุณลักษณะใหม่ของธุรกิจ" );
jr_define( "_JOMRES_COM_MR_NEWGUEST", "แขกใหม่" );
jr_define( "_JOMRES_COM_MR_SAVE", "บันทึก" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME", "ชื่อ" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL", "เดินทางถึง" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE", "ออกเดินทาง" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_TITLE", "กำหนดฟังก์ชันที่ผู้ใช้ admin" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_ID", "เลขที่บัตรประชาชน" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_NAME", "ชื่อ" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_USERNAME", "ชื่อผู้ใช้" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER", "รับสิทธิ์คลิกเพื่ออนุญาตผู้ใช้" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL", "ประเภทธุรกิจ" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS", "การเปลี่ยนแปลงนี้" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL", "ระดับการเข้าถึง" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE", "เมื่อผู้ใช้ต้องการแก้ไข" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE", "ไม่ทราบ" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION", "แผนกต้อนรับ" );
jr_define( "_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN", "ผู้จัดการธุรกิจ" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE", "จองทั้งหมด" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS", "จองใหม่" );
jr_define( "_JOMRES_COM_MR_EDITBOOKINGTITLE", "แก้ไขการจอง" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL", "เดินทางถึง / ออกเดินทาง" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST", "แขก" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM", "ประเภทที่ต้องการจอง" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT", "ชำระเงิน" );
jr_define( "_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL", "ชื่อแรก" );
jr_define( "_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL", "นามสกุล" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ", "ความต้องการพิเศษ" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER", "โปรดทราบว่า ความต้องการพิเศษบางอย่างอาจต้องชำระค่าธรรมเนียมเพิ่ม" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING", "ยกเลิกการจอง" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL", "บ้านเลขที่ หรือ ชื่ออื่น(บริษัทฯ,องค์กรฯ เป็นต้น)" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL", "ถนน" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL", "อำเภอ / เมือง" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL", "รหัสไปรษณีย์" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL", "หมายเลข พื้นฐาน" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL", "หมายเลขมือถือ" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL", "อีเมลล์" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN", "ไม่สามารถยกเลิกการจองห้องพักนี้ได้ มีแขกจองไว้แล้ว" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT", "ไม่มีชำระเงินมัดจำ" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON", "ยืนยันการยกเลิก" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_CANCELLED", "ยกเลิกการจอง" );
jr_define( "_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL", "วันที่จะมาถึง" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL", "ประเภทการจอง" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK", "สีดำ" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION", "แผนกต้อนรับ" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET", "อินเทอร์เน็ต" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_NAME", "ชื่อประเภทที่ต้องการจอง" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_NUMBER", "ประเภทที่ต้องการจอง" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_FLOOR", "ชั้น" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_DISABLED", "ปิดการเข้าระบบใช้งานหรือไม่" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE", "จำนวนคนสูงสุด" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV", "ประเภทที่ต้องการจอง" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_CLASS_DESC", "ประเภทที่ต้องการจอง / รายละเอียดประเภท" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST", "คุณลักษณะของประเภทการจอง" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID", "ชำระเงินมัดจำ" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE", "ใส่จำนวนเงินมัดจำ" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL", "รวมจำนวนจ่ายทั้งหมด" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF", "ข้อมูลอ้างอิงชำระเงินมัดจำ" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER", "จองห้องพัก" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED", "มัดจำ" );
jr_define( "_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE", "บันทึกการชำระมัดจำ" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP2_TITLE", "ข้อมูลทุกประเภทที่ต้องการจอง" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME", "ธุรกิจ" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE", "ประเภทที่ต้องการจอง" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_EDITDETAILS", "แก้ไขรายละเอียดของแขก" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_FIRSTNAME", "ชื่อแรก" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_SURNAME", "นามสกุล" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_HOUSE", "บ้านเลขที่" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_STREET", "ถนน" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_TOWN", "อำเภอ / เมือง" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_POSTCODE", "รหัสไปรษณีย์" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_LANDLINE", "โทรศัพท์พื้นฐาน" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_MOBILE", "โทรศัพท์มือถือ" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_FAX", "โทรสาร" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_CCARDNO", "เลขที่บัตรเครดิต / เดบิต" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_CCARDISS", "บัตรที่ออกให้ เมื่อ" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE", "บัตรหมดอายุ เมื่อ" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_CCARISSNO", "หมายเลขลับ 3 หลัก" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_CCARDNAME", "ชื่อบนบัตร" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP4_TITLE", "เลือก" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS", "คืน" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS", "จำนวนผู้แขก" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE", "รวมทั้งหมด" );
jr_define( "_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE", "ดูทุกประเภท" );
jr_define( "_JOMRES_COM_MR_VRCT_TAB_ROOM", "ประเภทที่ต้องการจอง" );
jr_define( "_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES", "คุณลักษณะของห้อง" );
jr_define( "_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES", "ชนิดของห้อง" );
jr_define( "_JOMRES_COM_MR_VRCT_TAB_PROPERTYS", "ธุรกิจ" );
jr_define( "_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES", "คุณลักษณะของ property" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK", "ประเภทที่ต้องการจอง" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE", "ชนิด" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME", "ชื่อ" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER", "หมายเลข" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR", "ชั้น" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS", "ปิดการเข้าระบบใช้งานหรือไม่" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE", "จำนวนคนสูงสุด" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES", "คุณลักษณะ" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT", "เพิ่มประเภท" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT", "แก้ไขรายการ" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK", "คุณลักษณะของห้อง" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT", "คำอธิบายคุณลักษณะ" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT", "คุณลักษณะประเภทที่เพิ่ม" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE", "คุณลักษณะประเภทที่แก้ไข" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK", "ประเภทที่ต้องการจอง" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV", "ประวัติแต่ละประเภทโดยสังเขป" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC", "รายละเอียดแต่ละประเภทเพิ่มเติม" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT", "เพิ่มประเภทการจอง" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE", "แก้ไขประเภท" );
jr_define( "_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT", "แก้ไขรายการ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME", "ชื่อ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET", "ถนน" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN", "อำเภอ / เมือง" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION", "ตำบล" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY", "จังหวัด / ประเทศ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE", "รหัสไปรษณีย์" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE", "โทรศัพท์" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX", "โทรสาร" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL", "อีเมลล์" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE", "เว็บไซต์" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES", "คุณลักษณะ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT", "เพิ่มคุณลักษณะ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE", "ข้อมูลปรับปรุงแต่ละประเภทธุรกิจ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK", "ลักษณะของทำธุรกิจ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV", "คุณลักษณะของธุรกิจโดยสังเขป" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC", "อธิบายคุณลักษณะประเภทการจองทั้งหมด" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT", "ลักษณะของธุรกิจ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE", "ข้อมูลปรับปรุงแต่ละประเภทธุรกิจ" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_TITLE", "ราคา" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_RATETITLE", "ราคาประเภทห้อง" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION", "คำอธิบาย" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_VALIDFROM", "ราคาเริ่มต้น" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_VALIDTO", "ราคาสุดท้าย แต่ละช่วง" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY", "ราคาต่อคืน" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_MINDAYS", "จำนวนวันขั้นต่ำ" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_MAXDAYS", "จำนวนวันสูงสุด" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE", "จำนวนคนขั้นต่ำ" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE", "จำนวนคนสูงสุด" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS", "ประเภทธุรกิจ" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN", "ละเว้น PPPN" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_ALLOWWE", "วันหยุดสุดสัปดาห์" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT", "เพิ่มจำนวนราคาห้อง" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE", "แก้ไขจำนวนราคาห้อง" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_LINKTEXT", "แก้ไขรายการ" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE", "Clone item" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_DELETED", "ลบราคา" );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT", "แก้ไขราคา" );
jr_define( "_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE", "วันหยุดประจำปี" );
jr_define( "_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE", "บันทึกการจอง" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN", "รายชื่อแขกเข้า" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT", "รายชื่อแขกออก" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS", "รายการจอง" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS", "จองใหม่" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_HOME", "Dashboard" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN", "admin สำหรับแขก" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN", "ธุรกิจ admin" );
jr_define( "_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY", "ดูจำนวนที่ว่าง" );
jr_define( "_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS", "ยืนยันรายละเอียดของคุณ" );
jr_define( "_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME", "ชื่อแรก" );
jr_define( "_JOMRES_FRONT_MR_DISPGUEST_SURNAME", "นามสกุล" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL", "เลขที่บ้าน" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL", "ถนน" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL", "อำเภอ / เมือง" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL", "รหัสไปรษณีย์" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL", "หมายเลขโทรศัพท์พื้นฐาน" );
jr_define( "_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL", "หมายเลขมือถือ" );
jr_define( "_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE", "มีไม่มีประเภทว่างตามที่เลือก" );
jr_define( "_JOMRES_FRONT_MR_BOOKINGMADE", "<center>Thank you for making your booking with us and we hope that you enjoy your stay.<br><br> <b>Please note that this is only a preliminary booking, and will not be confirmed until you receive your confirmation letter from us.</center>" );








jr_define( "_JOMRES_FRONT_MR_BOOKIN_TITLE", "รายชื่อแขกจอง" );
jr_define( "_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON", "เลือกดูแขก" );
jr_define( "_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN", "แขกที่เข้าจอง" );
jr_define( "_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN", "วันนี้ไม่มีแขกเข้าพัก" );
jr_define( "_JOMRES_FRONT_MR_BOOKOUT_TITLE", "แขกที่ออกจากการจอง" );
jr_define( "_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT", "วันนี้ไม่มีแขกออก" );
jr_define( "_JOMRES_COM_A_SUPPLIMENTS", "ข้อมูลเพิ่มเติม" );
jr_define( "_JOMRES_COM_A_TARIFFS", "ราคาต่อหน่วย ปัจจบัน" );
jr_define( "_JOMRES_COM_A_DISCOUNTS", "ให้ส่วนลด" );
jr_define( "_JOMRES_COM_A_JOMRES_FILE_UPLOADS", "อัปโหลดไฟล์ข้อมูล" );
jr_define( "_JOMRES_COM_A_CURRENT_SETTINGS", "การตั้งค่าปัจจุบัน" );
jr_define( "_JOMRES_COM_A_EXPLANATION", "คำอธิบาย" );
jr_define( "_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON", "ข้อมูลเพิ่มเติมของคนเดียว" );
jr_define( "_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC", "ให้แน่ใจว่าคุณต้องกาเพิ่มเติมเพียงคนเดียว" );
jr_define( "_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST", "เสริมคนเดียว" );
jr_define( "_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE", "ต้องการเก็บค่ามัดจำล่วงหน้า % หรือไม่?" );
jr_define( "_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC", "มัดจำล่วงหน้าคิดเป็นเปอร์เซนต์ของยอดจองไช่หรือไม่?ถ้าไม่,ให้มัดจำยอดขั้นต่ำ" );
jr_define( "_JOMRES_COM_A_DEPOSIT_VALUE", "จำนวนที่ต้องการมัดจำ" );
jr_define( "_JOMRES_COM_A_TARIFFS_PER", "ต่อคน ต่อคืน" );
jr_define( "_JOMRES_COM_A_TARIFFS_PER_DESC", "เลือกใช่หากคุณต้องการคิดค่าธรรมเนียมต่อคนละคืนนั้น ถ้าไม่มี แล้วราคาจะถูกคำนวณบนพื้นฐานการจองต่อคืน" );
jr_define( "_JOMRES_COM_A_UPLOADS_FILESIZE", "ขนาดไฟล์" );
jr_define( "_JOMRES_COM_A_UPLOADS_FILESIZE_DESC", "ขนาดส่งได้สูงสุดกิโลไบต์" );
jr_define( "_JOMRES_FRONT_MR_BOOKED", "ประเภทที่ถูกจองแล้ว" );



jr_define( "_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS", "รายละเอียดการจอง" );






jr_define( "_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT", "You are reminded that a booking is a legally binding contract, so if for any reason you have to cancel or shorten your booking then you are still liable to pay the full amount." );

jr_define( "_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO", "<i>Cancellation and curtailment charges</i> If you cancel your holiday the cancellation must be confirmed in writing. Cancellation charges are as follows:" );




jr_define( "_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS", "ถึงก่อน 14 วัน" );


jr_define( "_JOMRES_COM_CONFIRMATION_PRINT", "พิมพ์จดหมายยืนยัน" );
jr_define( "_JOMRES_COM_INVOICE_TITLE", "พิมพ์ใบแจ้งชำระ" );
jr_define( "_JOMRES_COM_INVOICE_STAYNIGHTS", "จำนวนคืน:" );
jr_define( "_JOMRES_COM_INVOICE_CONTRACTAGREED", "สัญญาตกลงกันเริ่มต้นด้วย:" );
jr_define( "_JOMRES_COM_INVOICE_COSTPERNIGHT", "ราคาต่อคืน:" );
jr_define( "_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL", "ราคารวมทั้งหมด" );
jr_define( "_JOMRES_COM_INVOICE_LETTER_INTRO1", "ขอบคุณสำหรับลูกค้า" );
jr_define( "_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY", "เราหวังว่า เราจะได้ให้บริการคุณอีกครั้ง" );
jr_define( "_JOMRES_COM_INVOICE_PRINT", "พิมพ์ใบแจ้งชำระ" );
jr_define( "_JOMRES_COM_ADDSERVICE_TITLE", "ใส่บริการต่างๆในบิล" );
jr_define( "_JOMRES_COM_ADDSERVICE_DESCRIPTION", "ใส่คำอธิบายบริการต่างๆในบิล" );
jr_define( "_JOMRES_COM_ADDSERVICE_VALUE", "ค่าบริการ" );
jr_define( "_JOMRES_COM_ADDSERVICE_BOOKINGDESC", "รายการอื่น ๆ billed" );
jr_define( "_JOMRES_COM_ADDSERVICE_TOTALVALUE", "Billed รายการอื่น ๆ รวมค่า:" );
jr_define( "_JOMRES_COM_ADDSERVICE_SAVEMESSAGE", "เพิ่มรายการอื่นๆ" );
jr_define( "_JOMRES_UPLOAD_IMAGE", "อัปโหลดรูปภาพ" );
jr_define( "_JOMRES_FILE_UPLOAD", "อัปโหลดไฟล์" );
jr_define( "_JOMRES_FILE_ERROR_TYPE", "คุณเท่านั้นได้รับอนุญาตให้ upload: n" );
jr_define( "_JOMRES_FILE_ERROR_EMPTY", "กรุณาเลือกไฟล์ก่อนที่จะอัปโหลด" );
jr_define( "_JOMRES_FILE_ERROR_NAME", "กรุณาใช้ไฟล์ที่ประกอบด้วยอักขระพยัญชนะผสมตัวเลขและไม่มีช่องว่าง" );
jr_define( "_JOMRES_FILE_ERROR_SIZE", "ขนาดแฟ้มเกินกว่าจำนวนสูงสุดที่มีการตั้งค่าจากผู้ดูแล" );
jr_define( "_JOMRES_FILE_NOT_UPLOADED", "ไม่ได้อัปโหลดไฟล์" );
jr_define( "_JOMRES_FILE_UPDATED", "อัพโหลดไฟล์แล้ว" );
jr_define( "_JOMRES_COM_A_JSCALENDAR", "JS Calendar" );
jr_define( "_JOMRES_COM_A_CALENDARLANGUAGE", "JS Calendar language file" );
jr_define( "_JOMRES_COM_A_CALENDARLANGUAGE_DESC", "Choose the language file that should be used in the Javascript calendar. Please note that some of the calendars may be faulty, See http://sourceforge.net/tracker/?group_id=75569&atid=544287 for more information" );
jr_define( "_JOMRES_COM_A_CALENDARCSS", "JS Calendar CSS file" );
jr_define( "_JOMRES_COM_A_CALENDARCSS_DESC", "Choose the CSS file that should be used in the Javascript calendar" );
jr_define( "_JOMRES_COM_A_ODDS", "Misc." );
jr_define( "_JOMRES_COM_A_ERRORCHECKING", "List minicomponent calls" );
jr_define( "_JOMRES_COM_A_ERRORCHECKING_DESC", "Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services." );
jr_define( "_JOMRES_FILE_DELETE", "ลบรูปนี้" );
jr_define( "_JOMRES_FILE_DELETED", "ไฟล์ที่ถูกลบ" );
jr_define( "_JOMRES_COM_MR_ROOM_DELETE", "ลบ" );
jr_define( "_JOMRES_COM_MR_ROOM_UNABLETODELETE", "ไม่สามารถย้ายประเภทนี้ออกได้,ยกเลิกการจองก่อน แล้วลองอีกครั้ง" );
jr_define( "_JOMRES_COM_MR_ROOM_DELETED", "ลบประเภท" );
jr_define( "_JOMRES_COM_MR_ROOMFEATURE_DELETE", "ลบประเภทของคุณลักษณะ" );
jr_define( "_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE", "ไม่สามารถเอาคุณลักษณะประเภทนี้ ออกได้,มันถูกกำหนดให้กับประเภทนี้ เอาไว้,ย้ายคุณลักษณะออกจากการเป็นประเภทนี้ก่อน แล้วลองอีกครั้ง" );
jr_define( "_JOMRES_COM_MR_ROOMFEATURE_DELETED", "คุณลักษณะของประเภทที่ถูกลบ" );
jr_define( "_JOMRES_COM_MR_PROPERTYFEATURE_DELETE", "ลบคุณลักษณะของธุรกิจ" );
jr_define( "_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE", "ไม่สามารถเอาคุณลักษณะธุรกิจนี้ ออกได้,มันถูกกำหนดให้กับประเภทนี้ เอาไว้,ย้ายธุรกิจออกจากการเป็นประเภทนี้ก่อน แล้วลองอีกครั้งง" );
jr_define( "_JOMRES_COM_MR_PROPERTYFEATURE_DELETED", "คุณลักษณะของธุรกิจที่ถูกลบ" );
jr_define( "_JOMRES_COM_MR_ROOMCLASS_DELETE", "ลบชนิดของประเภท/ธุรกิจ" );
jr_define( "_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS", "Unable to remove this resource/business type, it is assigned to a resource. Try re-assigning the resource to another resource/business type then try again." );
jr_define( "_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS", "Unable to remove this resource/business type, it is assigned to a tariff. Try re-assigning the tariff to another resource/business type then try again." );
jr_define( "_JOMRES_COM_MR_ROOMCLASS_DELETED", "ลบชนิดของประเภท/ธุรกิจ" );
jr_define( "_JOMRES_COM_MR_PROPERTY_DELETE", "ลบธุรกิจ" );
jr_define( "_JOMRES_COM_MR_PROPERTY_DELETED", "ธุรกิจที่ถูกลบ" );
jr_define( "_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS", "คุณไม่มีสิทธิ์ในการลบธุรกิจนี้" );
jr_define( "_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE", "ความกว้างของรูปหลังจาก Jomres ปรับขนาดการอัปโหลดรูปภาพ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK", "แผนที่" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION", "คำอธิบายเกี่ยวกับธุรกิจ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES", "เวลา check in" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES", "กิจกรรม" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS", "ทิศทางการขับ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS", "ที่สนามบิน" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT", "การขนส่งอื่น ๆ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS", "นโยบายและความรับผิดชอบตามกฎหมาย" );
jr_define( "_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS", "ที่อยู่" );
jr_define( "_JOMRES_COM_A_VISITORSCANBOOKONLINE", "ผู้เข้าชมสามารถจองออนไลน์" );
jr_define( "_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC", "ตั้งค่านี้เป็น Yes เพื่อให้แน่ใจว่า ผู้เยี่ยมชมสามารถจองแต่ละประเภทที่ต้องการ ออนไลน์" );
jr_define( "_JOMRES_COM_A_FIXEDPERIODBOOKINGS", "ระยะเวลาจองที่แน่นอน" );
jr_define( "_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC", "If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that \"defined arrival day\" isn't set to Yes (unless you specifically want to force people to arrive on a certain day) otherwise you will not get many links in the availability calendar." );
jr_define( "_JOMRES_COM_A_FIXEDPERIOD", "ระยะเวลาการจอง:" );
jr_define( "_JOMRES_COM_A_BOOKING", "ประเภทการจอง" );
jr_define( "_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS", "ระยะเวลาสูงสุด เช่นระยะเวลาการจอง 3 x 7 = 21 วัน" );
jr_define( "_JOMRES_COM_A_SINGLEROOMPROPERTY", "นี่คือ อพาร์ทเมนท์/บ้านสไตล์ทันสมัย/บ้านเดี่ยว?" );
jr_define( "_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC", "EG you are renting out a business, rather than resources in that business. If this is the case, then you must make sure that you only have the one resource registered against each business." );
jr_define( "_JOMRES_FRONT_MR_REVIEWBOOKING", "ตรวจทานการจอง" );
jr_define( "_JOMRES_COM_MR_CONFIRMBOOKING", "ยืนยันการจอง" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_MONDAY", "จันทร์" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_TUESDAY", "อังคาร" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY", "พุธ" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_THURSDAY", "พฤหัสบดี" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_FRIDAY", "ศุกร์" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_SATURDAY", "เสาร์" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_SUNDAY", "อาทิตย์" );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR", "จ." );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR", "อ." );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR", "พ." );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR", "พฤ." );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR", "ศ." );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR", "ส." );
jr_define( "_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR", "อา." );
jr_define( "_JOMRES_COM_A_AVLCAL", "Availability cal." );
jr_define( "_JOMRES_COM_AVLCAL_TODAYCOLOUR", "Font colour for the current date" );
jr_define( "_JOMRES_COM_AVLCAL_INMONTHFACE", "Font colour for days in the display month " );
jr_define( "_JOMRES_COM_AVLCAL_OUTMONTHFACE", "Font colour for days not in the display month" );
jr_define( "_JOMRES_COM_AVLCAL_INBGCOLOUR", "Cell bgcolour for days when business/resource is available" );
jr_define( "_JOMRES_COM_AVLCAL_OUTBGCOLOUR", "Cell bgcolour for days not in display month" );
jr_define( "_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR", "Cell bgcolour for occupied days" );
jr_define( "_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR", "Cell bgcolour for provisionally booked resources (bookings for which a deposit has not been taken)" );
jr_define( "_JOMRES_COM_AVLCAL_PASTCOLOUR", "Cell bgcolour for dates in the past" );
jr_define( "_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY", "ไม่ว่าง" );
jr_define( "_JOMRES_COM_AVLCAL_INMONTHFACE_KEY", "ว่าง สามารถจองได้" );
jr_define( "_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY", "Provisional bookings" );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO", "วันมาถึงที่กำหนดไว้ล่วงหน้า" );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC", "เฉพาะสำหรับไซต์ที่ เสนอจองตามรอบระยะเวลา เลือกวันที่ต้องการเริ่มต้น ถึงวันสิ้นสิ้น" );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY", "กำหนดวันถึง" );
jr_define( "_JOMRES_FRONT_MR_FIXEDPRIOD1", "อยู่รอบระยะเวลา (วัน)" );
jr_define( "_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR", "แสดงว่างสำหรับจองปฏิทินแบบอินไลน์หรือไม่?" );
jr_define( "_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC", "ตั้งค่านี้เป็นใช่ ในการแสดงปฏิทินพร้อมสำหรับจอง" );
jr_define( "_JOMRES_FRONT_AVAILABILITY", "ว่าง สามารถจองได้" );
jr_define( "_JOMRES_FRONT_CALENDAR_CLICKDATES", "คลิกเพื่อดูแบบฟอร์มเพื่อจองในวันที่ว่าง" );
jr_define( "_JOMRES_FRONT_BLACKBOOKING", "จองสีดำ" );
jr_define( "_JOMRES_FRONT_BLACKBOOKING_NEW", "จองใหม่สีดำ" );
jr_define( "_JOMRES_FRONT_DELETEGUEST", "ลบ แขก" );
jr_define( "_JOMRES_FRONT_DELETEGUEST_GUESTDELETED", "แขกที่ถูกลบ" );
jr_define( "_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST", "ไม่สามารถลบแขกนี้เนื่องจากจองเป็นการจองประเภทอื่น" );
jr_define( "_JOMRES_COM_INVOICE_ACTUALROOMCOST", "ราคาของประเภทการจองที่แท้จริง:" );






jr_define( "_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING", "การสูบบุหรี่" );
jr_define( "_JOMRES_FRONT_ROOMSMOKING_EITHER", "ใด ๆ" );
jr_define( "_JOMRES_COM_CALENDAROUTPUT", "Calendar output format" );
jr_define( "_JOMRES_COM_CALENDAROUTPUT_DESC", "This allows the user to change the output format of dates within Jomres" );
jr_define( "_JOMRES_COM_CALENDARINPUT", "Calendar input format" );
jr_define( "_JOMRES_COM_CALENDARINPUT_DESC", "This allows the user to change the input format of dates within Jomres." );
jr_define( "_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT", "แบ่งรอบระยะเวลาถาวรที่อนุญาตให้จองแบบสั้น" );
jr_define( "_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS", "Length of short break" );
jr_define( "_JOMRES_COM_MR_VRCT_PUBLISHED", "การเผยแพร่" );
jr_define( "_JOMRES_COM_A_PAYPAL", "PayPal" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL", "บันทึกตรวจสอบรายการ" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_DATE", "วัน" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_TIME", "เวลา" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_USER", "ผู้ใช้ (username)" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_OPERATION", "การดำเนินการ" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_VIEWSQL", "ดูรายละเอียด" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_FILTER_DATE", "ตัวกรองวัน" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME", "กรองบนชื่อผู้ใช้" );
jr_define( "_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION", "ตัวกรองการดำเนินการ" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_STATUS", "สถานะ" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_PENDING", "รอยืนยันกำหนดวันถึง" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY", "มาถึงวันนี้" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT", "ที่อยู่ปัจจุบัน" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY", "ออกวันนี้" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE", "ออกเดินทางเลยกำหนด" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_LATE", "ยังมาไม่ถึง" );
jr_define( "_JOMRES_MR_AUDIT_UNKNOWNUSER", "ผู้ใช้ที่ไม่รู้จัก" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_ROOM", "สร้างประเภท" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_ROOM", "แก้ไขประเภท" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_ROOM", "ประเภทที่ถูกลบ" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE", "สร้างประเภทคุณลักษณะ" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE", "แก้ไขประเภทคุณลักษณะ" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE", "ประเภทคุณลักษณะถูกลบ" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE", "เพิ่มประเภท" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE", "แก้ไขประเภท ล่าสุด" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE", "ประเภทถูกลบ" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_PROPERTY", "ธุรกิจที่สร้างขึ้นใหม่" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_PROPERTY", "ปรับปรุงล่าสุดธุรกิจ" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_PROPERTY", "ธุรกิจที่ถูกลบ" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE", "สร้างคุณลักษณะใหม่" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE", "Updated prop. feature" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE", "Deleted prop. feature" );
jr_define( "_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS", "Edited prop. settings" );
jr_define( "_JOMRES_MR_AUDIT_PUBLISH_PROPERTY", "Published prop." );
jr_define( "_JOMRES_MR_AUDIT_INSERT_TARIFF", "Created tariff" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_TARIFF", "Updated tariff" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_TARIFF", "Deleted tariff" );
jr_define( "_JOMRES_MR_AUDIT_ADDSERVICE", "Added svc. charge" );
jr_define( "_JOMRES_MR_AUDIT_BOOKEDGUESTIN", "รายชื่อแขกจอง" );
jr_define( "_JOMRES_MR_AUDIT_BOOKEDGUESTOUT", "แขกที่ออกจากการจอง" );
jr_define( "_JOMRES_MR_AUDIT_ENTEREDDEPOSIT", "ชำระค่ามัดจำ" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_GUEST", "แขกใหม่" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_GUEST", "แขกล่าสุด" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_GUEST", "แขกที่ถูกลบ" );
jr_define( "_JOMRES_MR_AUDIT_BOOKED_ROOM", "ประเภทจอง" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_EXTRA", "พิเศษเพิ่มแขก" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_EXTRA", "พิเศษเพิ่มแขกล่าสุด" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_EXTRA", "ลบแขกพิเศษ" );
jr_define( "_JOMRES_MR_AUDIT_PUBLISH_EXTRA", "ประกาศพิเศษ" );
jr_define( "_JOMRES_MR_AUDIT_BLACKBOOKING", "ใส่สีดำจอง" );
jr_define( "_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE", "จองสีดำถูกลบ" );
jr_define( "_JOMRES_COM_MR_EXTRA_TITLE", "Extras" );
jr_define( "_JOMRES_COM_MR_EXTRA_DESC", "คำอธิบาย" );
jr_define( "_JOMRES_COM_MR_EXTRA_NAME", "ชื่อ" );
jr_define( "_JOMRES_COM_MR_EXTRA_PRICE", "ราคา" );
jr_define( "_JOMRES_COM_MR_EXTRA_SAVE_UPDATED", "พิเศษปรับปรุงล่าสุด" );
jr_define( "_JOMRES_COM_MR_EXTRA_LINKTEXT", "แก้ไขรายการ" );
jr_define( "_JOMRES_COM_MR_EXTRA_DELETED", "พิเศษล่าสุดถูกลบ" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS", "Extras admin" );
jr_define( "_JOMRES_COM_A_EXTRAS", "แสดง extras ในระยะเวลาหรือไม่?" );
jr_define( "_JOMRES_COM_A_EXTRAS_DESC", "เซ็ตนี้ใช่จะแสดงลักษณะพิเศษใด ๆ ที่คุณอาจต้องการเสนอให้กับแขก" );
jr_define( "_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP", "Extras ที่เลือกได้" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS", "วันเริ่มต้นของการจองสีดำ" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES", "บริการดำเนินต่อวัน" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS", "จองสีดำ" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR", "มีข้อผิดพลาดขณะพยายามที่จะจองประเภทเหล่านี้ อย่างน้อยหนึ่งประเภทที่คุณเลือกจะไม่ว่าง." );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT", "ประเภทรวมอยู่ในการจองสีดำ" );
jr_define( "_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING", "ตรวจทานจองสีดำ" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS", "ไม่มีจองสีดำในรายการ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS", "จำนวนของดาว" );
jr_define( "_JOMRES_COM_A_SMOKING", "แสดงตัวเลือกสูบบุหรี่หรือไม่" );
jr_define( "_JOMRES_COM_A_SMOKING_DESC", "เลือก yes สำหรับการสูบบุหรี่" );
jr_define( "_JOMRES_COM_A_RESET", "การตั้งค่าใหม่" );
jr_define( "_JOMRES_COM_A_PAYPAL_CANCELLED", "ยกเลิกการจอง" );
jr_define( "_JOMRES_FRONT_MR_SEARCH_HERE", "ค้นหาที่นี่:" );
jr_define( "_JOMRES_COM_A_SMOKING_OPTION", "เลือกสูบบุหรี่" );
jr_define( "_JOMRES_COM_A_CURRENCYSYMBOL", "สัญลักษณ์สกุลเงิน" );
jr_define( "_JOMRES_COM_A_CURRENCYSYMBOL_DESC", 'Eg &pound&#59; Please note that you should use the HTML entities code for the required symbol. For a list of these entities please visit <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>' );
jr_define( "_JOMRES_COM_A_CURRENCYCODE", "รหัสสกุลเงิน" );
jr_define( "_JOMRES_COM_A_CURRENCYCODE_DESC", "เช่น GBP ใช้ในอีเมล์เพื่อยืนยันการจองของลูกค้า" );
jr_define( "_JOMRES_COM_A_CLICKFORMOREINFORMATION", "อ่านเพิ่มเติม" );
jr_define( "_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO", "จองล่วงหน้าจำกัดหรือไม่" );
jr_define( "_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC", "Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their arrival date will be restored to todays date" );
jr_define( "_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS", "จำนวนวันสูงสุดที่จองล่วงหน้า:" );
jr_define( "_JOMRES_COM_A_TAX_WARNING", "<font color=red>NOTE: It is not recommended that you set both of the following options to Yes, you should use only one of the two tax calculations available to you. </FONT>" );
jr_define( "_JOMRES_COM_FRONT_ROOMTAX", "ภาษี" );
jr_define( "_JOMRES_COM_A_ROOMTAX", "ภาษีประเภท" );
jr_define( "_JOMRES_COM_A_ROOMTAX_DESC", "Designed for the American market. These are the resource tax amounts that will be charged to the guest. You can charge a combination and/or of fixed and percentage figures. Note that these taxes are only applied to the cost of the resource." );
jr_define( "_JOMRES_COM_A_ROOMTAX_FIXED", "ภาษียอดเงินคงที่" );
jr_define( "_JOMRES_COM_A_ROOMTAX_PERCENTAGE", "เปอร์เซ็นต์ภาษี" );
jr_define( "_JOMRES_COM_A_EUROTAX", "ภาษี" );
jr_define( "_JOMRES_COM_A_EUROTAX_PERCENTAGE", "เปอร์เซ็นต์ภาษี" );
jr_define( "_JOMRES_MR_AUDIT_ARCHIVE", "เก็บข้อมูลทั้งหมด" );
jr_define( "_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE", "ระเบียนที่เก็บข้อมูล" );
jr_define( "_JOMRES_MR_AUDIT_ARCHIVED_AUDIT", "บันทึกไว้เพื่อเป็นข้อมูล" );
jr_define( "_JOMRES_FRONT_TARIFFS", "ราคาของเรา" );
jr_define( "_JOMRES_FRONT_TARIFFS_TITLE", "ชื่อรายการจำนวน" );
jr_define( "_JOMRES_FRONT_TARIFFS_DESC", "คำอธิบายรายการจำนวน" );
jr_define( "_JOMRES_FRONT_TARIFFS_ROOMTYPE", "ประเภท/ธุรกิจ" );
jr_define( "_JOMRES_FRONT_TARIFFS_STARTS", "เริ่มจาก" );
jr_define( "_JOMRES_FRONT_TARIFFS_ENDS", "ถึงเมื่อ" );
jr_define( "_JOMRES_FRONT_TARIFFS_PPPN", "ต่อคนต่อคืน" );
jr_define( "_JOMRES_FRONT_TARIFFS_PN", "ต่อคืน" );
jr_define( "_JOMRES_FRONT_TARIFFS_NOTWEEKEND", "ไม่รวมถึงวันหยุดสุดสัปดาห์" );
jr_define( "_JOMRES_FRONT_TARIFFS_MINDAYS", "จำนวนวันขั้นต่ำ" );
jr_define( "_JOMRES_FRONT_TARIFFS_MAXDAYS", "จำนวนวันสูงสุด" );
jr_define( "_JOMRES_FRONT_TARIFFS_MINPEEPS", "จำนวนคนขั้นต่ำ" );
jr_define( "_JOMRES_FRONT_TARIFFS_MAXPEEPS", "จำนวนคนสูงสุด" );
jr_define( "_JOMRES_FRONT_PREVIEW", "ดูตัวอย่าง" );
jr_define( "_JOMRES_COM_A_EDITINGMODEON", "แก้ไข ?" );
jr_define( "_JOMRES_COM_A_EDITING_CURRENTTEXT", "ข้อความปัจจุบัน" );
jr_define( "_JOMRES_COM_A_EDITING_NEWTEXT", "ข้อความใหม่" );
jr_define( "_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT", "ปรับปรุงข้อความแบบกำหนดเอง" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE", "แก้ไขภาษา" );
jr_define( "_JOMRES_COM_A_AUDITING_SHOWING", "จำนวนข้อมูลที่เก็บ:" );
jr_define( "_JOMRES_FRONT_PTYPE", "ชนิดของธุรกิจ" );
jr_define( "_JOMRES_COM_PTYPES_LIST_TITLE", "รายการชนิดของธุรกิจ" );
jr_define( "_JOMRES_COM_PTYPES_LIST_TITLE_EDIT", "แก้ไขรายการชนิดของธุรกิจของธุรกิจ" );
jr_define( "_JOMRES_COM_PTYPES_PTYPE", "ชนิดของธุรกิจ" );
jr_define( "_JOMRES_COM_PTYPES_PTYPE_DESC", "อธิบายชนิดธุรกิจ" );
jr_define( "_JOMRES_COM_PTYPES_SAVED", "บันทึกชนิดของธุรกิจ" );
jr_define( "_JOMRES_COM_PTYPES_UNABLETO_DELETE", "ไม่สามารถลบประเภทของธุรกิจ ที่ถูกกำหนดให้กับธุรกิจใดธุรกิจหนึ่ง หากเพิ่มเติม กรุณา re-assign ก่อนลบ" );
jr_define( "_JOMRES_COM_PTYPES_DELETED", "ลบประเภทธุรกิจ" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY", "ส่วนที่เหลือจ่าย" );
jr_define( "_JOMRES_EXTRAS_NOEXTRAS", "ไม่มีบริการพิเศษเพื่อเพิ่มรายการ" );
jr_define( "_JOMRES_COM_CHARGING_DEPOSIT", "เงินมัดจำ" );
jr_define( "_JOMRES_COM_CHARGING_FULLAMT", "จำนวนเต็ม" );
jr_define( "_JOMRES_COM_CHARGING_CONFIG", "จำนวนเงินที่คิดค่าบริการในการจองเวลา" );
jr_define( "_JOMRES_COM_CHARGING_CONFIG_DESC", "ใช้ตัวเลือกนี้เพื่อตัดสินใจว่า อะไรควรจ่ายจองเวลา เลือกชำระค่ามัดจำ หรือชำระจำนวนเต็ม" );
jr_define( "_JOMRES_COM_MONTHSTOSHOW", "เดือนที่ปฎิทิน จะแสดง" );
jr_define( "_JOMRES_COM_MONTHSTOSHOW_DESC", "ในประเภทที่ว่าง จะแสดงจำนวนเดือนที่ว่างทั้งหมด?" );
jr_define( "_JOMRES_INVOICE_SIGNEDONBEHALFOF", "เซ็นชื่อ" );
jr_define( "_JOMRES_COM_A_GATEWAYLIST", "Gateways" );
jr_define( "_JOMRES_COM_A_CANCEL", "ยกเลิก" );
jr_define( "_JOMRES_FRONT_BLACKBOOKING_DESC", "Select the dates that you want to apply the black bookings for. When you have selected the appropriate dates, click the \"apply\" button to re-check availability. <br/> 
<br/> 
Choose the room(s) you wish to take out of service. <br>If a resource does not have a check mark against it, it cannot be included in the black booking until any outstanding bookings have been completed/cancelled.<br/> " );
jr_define( "_JOMRES_JR_NOTLOGGEDIN", "<center><b>You have been logged out for inactivity</b> Please log in and try again." );
jr_define( "_JOMRES_JR_BLACKBOOKING_REASON", "เหตุผล" );
jr_define( "_JOMRES_COM_A_GATEWAY_USEGATEWAYS", "Use payment gateways?" );
jr_define( "_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC", "Set this to yes if you want to use online payment gateways. <b>Note:</b>This does not switch off the deposit calculation showed during the booking process. To disable this you can edit the templates that show resources and wrap the elements that refer to deposits inside a class whos font and bg colour are the same." );
jr_define( "_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE", "กรุณาเลือกวิธีการชำระเงินของคุณ" );
jr_define( "_JOMRES_COM_A_GATEWAY_ENABLED", "Gateway enabled?" );
jr_define( "_JOMRES_MR_AUDIT_PLUGINS_UPDATE", "การตั้งค่า plugin" );
jr_define( "_JOMRES_MR_AUDIT_PLUGINS_INSERT", "การตั้งค่า Inserted plugin" );
jr_define( "_JOMRES_FRONT_GALLERYLINK", "ตรวจทานชนิดธุรกิจ นี้" );
jr_define( "_JOMRES_COM_A_GALLERYLINK", "เชื่อมโยงภายนอก" );
jr_define( "_JOMRES_COM_A_GALLERYLINK_DESC", "วางการเชื่อมโยงไปยังเว็บไซต์ของคุณที่นี่" );
jr_define( "_JOMRES_MR_AUDIT_CREDITCARD_VIEWED", "ทบทวนบัตรเครดิต" );
jr_define( "_JOMRES_MR_AUDIT_CREDITCARD_UPDATED", "บัตรเครดิตล่าสุด" );
jr_define( "_JOMRES_MR_CREDITCARD_EDIT", "แก้ไขบัตรเครดิต" );
jr_define( "_JOMRES_COM_A_EDITICON", "แก้ไขขนาดของไอคอน" );
jr_define( "_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD", "อัปโหลดรูปภาพของชุดธุรกิจ" );
jr_define( "_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR", "รูปที่อยู่ในไดเรกทอรี" );
jr_define( "_JOMRES_COM_A_SLIDESHOWS", "ภาพสไลด์" );
jr_define( "_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK", "แสดงการเชื่อมโยงไปยังภาพสไลด์หรือไม่?" );
jr_define( "_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE", "แสดงภาพสไลด์แบบอินไลน์หรือไม่?" );
jr_define( "_JOMRES_COM_A_SLIDESHOW_THUMBSIZE", "ความกว้างของรูปขนาดย่อตาที่กำหนดลงภาพสไลด์" );
jr_define( "_JOMRES_FRONT_SLIDESHOW", "สไลด์โชว์" );
jr_define( "_JOMRES_COM_A_SLIDESHOWS_NOIMAGES", "<br />Sorry, no images available for this business. Please upload some images using the batch upload feature if you wish to use the slideshow feature." );
jr_define( "_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK", "แสดงการเชื่อมโยงกับราคาหรือไม่?" );
jr_define( "_JOMRES_COM_A_POPUPSALLOWED", "Popups ที่ได้รับอนุญาตหรือไม่?" );
jr_define( "_JOMRES_COM_A_POPUPSALLOWED_DESC", "ถ้าไม่มีตั้งค่า, แล้วการเชื่อมโยงที่โดยปกติจะมีเปิดในการ pop จะเปิดไลน์แทน" );
jr_define( "_JOMRES_FRONT_IMAGEUPLOADS", "อัปโหลดสไลด์โชว์รูป" );
jr_define( "_JOMRES_A_TABS_MISC", "Misc" );
jr_define( "_JOMRES_A", "Site configuration" );
jr_define( "_JOMRES_A_GLOBALPFEATURES", "Use global business features" );
jr_define( "_JOMRES_A_GLOBALPFEATURES_DESC", "Set this to Yes if you want to force all businesses to use only the business features defined by the webmaster." );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ' );
jr_define( "_JOMRES_A_ICON", "Icon" );
jr_define( "_JOMRES_A_GLOBAL_SEARCHOPTION", "เลือกปลั๊กอินค้นหาที่คุณต้องการใช้" );
jr_define( "_JOMRES_FRONT_NORESULTS", "<b>Sorry, your search did not return any results. Please modify your search and try again.</b>" );
jr_define( "_JOMRES_AREYOUSURE", "คุณแน่ใจจะทำรายการนี้?" );
jr_define( "_JOMRES_FRONT_MR_MENU_BOOKAROOM", "จองประเภท" );
jr_define( "_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY", "จองด่วน" );
jr_define( "_JOMRES_COM_MR_DISPGUEST_CCV", "หมายเลขความปลอดภัย" );
jr_define( "_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE", "แสดงราคาแบบอินไลน์หรือไม่?" );
jr_define( "_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS", "ที่อยู่" );
jr_define( "_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS", "ข้อมูลรายละเอียด" );
jr_define( "_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS", "คลิกประเภท และ ดูห้องว่าง" );
jr_define( "_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS", "แสดงรายละเอียดของราคา" );
jr_define( "_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE", "แสดงข้อมูลที่อยู่ด้านล่างลิงค์นี้" );
jr_define( "_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE", "แสดงข้อมูลรายละเอียดธุรกิจด้านล่างนี้" );
jr_define( "_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE", "แสดงประเภทและห้องว่างด้านล่างนี้เชื่อมโยง" );
jr_define( "_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE", "แสดงรายละเอียดราคาด้านล่างนี้" );
jr_define( "_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF", "เป็นราคาที่เปลี่ยนแปลงได้" );
jr_define( "_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES", "ค่าเฉลี่ย" );
jr_define( "_JOMRES_COM_A_TARIFFS_MODEL", "เลือกราคาแบบจำลองที่คุณต้องการใช้" );
jr_define( "_JOMRES_COM_A_TARIFFS_MODEL_DESC", "You have two choices of tariff calculation methods. The first, the 'flat rate' method allows you to offer a number of different tariffs to the guest and the rate for the stay is the same for the entire time. This is useful if you want to offer several different tariffs for the same date, eg Bed and Breakfast tariff and B&B and Evening meal tariff. Choose the 'averages' tariff if you want to adjust your prices dependant on the date in question. Jomres will find all of the tariffs for each day in the booking, add them together then return the average rate across the period" );
jr_define( "_JOMRES_COM_A_SHOWDEPARTUREINPUT", "แสดงการป้อนข้อมูลวันออกเดินทางหรือไม่?" );
jr_define( "_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC", "Set this to No if you don't want to show the departure date input box. Only use this if you know what you're doing, as the departure date in bookings will always be set to the day after the arrival date." );
jr_define( "_JOMRES_COM_PROPERTYLISTDESC", "Description limit" );
jr_define( "_JOMRES_COM_PROPERTYLISTDESC_DESC", "This limits the number of characters shown in the business listing when drawing from the business description." );
jr_define( "_JOMRES_COM_A_DATEFORMATSTYLE", "Used date() format style?" );
jr_define( "_JOMRES_COM_A_DATEFORMATSTYLE_DESC", "Set this to Yes to format output dates according to date() (See <a href=\"http://www.php.net/manual/en/function.date.php\">Here</a>). Set it to No to use strftime() formatting (see <a href=\"http://www.php.net/manual/en/function.strftime.php\">Here</a> eg. %b %d %Y " );
jr_define( "_JOMRES_COM_MR_VRCT_PUBLISH", "ประกาศ" );
jr_define( "_JOMRES_COM_MR_VRCT_UNPUBLISH", "ถอนประกาศ" );
jr_define( "_JOMRES_A_GLOBALROOMTYPES", "Use global resource/business types" );
jr_define( "_JOMRES_A_GLOBALROOMTYPES_DESC", "Set this to Yes if you want to force all businesses to use only the resource/business types defined by the webmaster. You need to set this to Yes if you intend to allow searching via resource/business types." );
jr_define( "_JOMRES_A_GLOBALROOMTYPES_INFO", "To assign an image to this resource/business type you first need to upload your resource/business type images to the /images/stories/jomres/rmtypes/ folder. " );
jr_define( "_JOMRES_COM_INPUTERROR_BACKGROUND", "Input error background colour" );
jr_define( "_JOMRES_COM_CONFIGCOUNTRIES", "Default country in booking form" );
jr_define( "_JOMRES_JAVASCRIPT_", "Items marked with a red star are required." );
jr_define( "_JOMRES_COM_SELFREGISTRATION", "Users can register their businesses?" );
jr_define( "_JOMRES_COM_SELFREGISTRATION_DESC", "Set this to Yes if you want users to be able to register their own businesses without admin intervention." );
jr_define( "_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1", "กรุณาระบุประเทศและภูมิภาคของธุรกิจของคุณ" );
jr_define( "_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1", "โปรดกรอกรายละเอียดของธุรกิจ" );
jr_define( "_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2", "จำเป็นรายการที่เน้น" );
jr_define( "_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY", "ธุรกิจที่สร้างขึ้น" );
jr_define( "_JOMRES_REGISTRATION_NOTALLOWED", "Sorry, you can't create a business on this system. You must be a logged in, registered user before you can proceed." );
jr_define( "_JOMRES_REGISTRATION_CREATEDPROPERTY", "Created business: " );
jr_define( "_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER", "สำหรับผู้ใช้:" );
jr_define( "_JOMRES_COM_MONTHS_STARTOFYEAR", "แสดงปฏิทินจากจุดเริ่มต้นของปีหรือไม่?" );
jr_define( "_JOMRES_COM_MONTHS_STARTOFYEAR_DESC", "ปฏิทินว่างสำหรับการจองแสดงจากจุดเริ่มต้นของปีปัจจุบัน" );
jr_define( "_JOMRES_NUMBEROFROOMSAVAILABLE", "หมายเลขของประเภทมีอยู่" );
jr_define( "_JOMRES_BACKTOPROPERTYDETAILSLINK", "กลับไปยังรายละเอียดของธุรกิจ" );
jr_define( "_JOMRES_FRONT_ROOMTYPES", "ชนิดของแต่ละประเภท/ธุรกิจ" );
jr_define( "_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT", "จำกัดการสุ่มแบบสืบค้น" );
jr_define( "_JOMRES_SHOWGOOGLECURRENCYLINKS", "แสดงการเชื่อมโยงการแปลงสกุลเงินในรายการหรือไม่?" );
jr_define( "_JOMRES_CURRENCYCONVERSIONTEXT", "อัตราแลกเปลี่ยน" );
jr_define( "_JOMRES_COM_ALLOWHTMLEDITOR", "Allow users to edit using html editors?" );
jr_define( "_JOMRES_AJAXFORM_INSTRUCTIONS", "Use this form to place your booking. Modify your booking particulars like arrival and departure dates & guest numbers, then select the resource(s) you require from the list of those available. Click any available resources to add them to your booking. When done, you can add any optional extras you may require and provide your address details. When the form has enough information it will then give you a submit button so that you can confirm your booking." );
jr_define( "_JOMRES_AJAXFORM_INSTRUCTIONS_SRP", "Use this form to place your booking. Modify your booking particulars like arrival and departure dates & guest numbers. When done, you can add any optional extras you may require and provide your address details. When the form has enough information it will then give you a submit button so that you can confirm your booking." );
jr_define( "_JOMRES_AJAXFORM_PARTICULARS", "รายการจอง" );
jr_define( "_JOMRES_AJAXFORM_PARTICULARS_DESC", "เลือกรายละเอียดของความต้องการการจองของคุณ" );
jr_define( "_JOMRES_AJAXFORM_AVAILABLE", "ว่าง" );
jr_define( "_JOMRES_AJAXFORM_AVAILABLE_DESC", "เลือกประเภทที่คุณต้องการ" );
jr_define( "_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP", "ดูที่นี่เพื่อดูว่า ประเภทนี้ว่างในขณะนี้" );
jr_define( "_JOMRES_AJAXFORM_EXTRAS", "บริการ" );
jr_define( "_JOMRES_AJAXFORM_EXTRAS_DESC", "บริการ" );
jr_define( "_JOMRES_COM_PERDAY", "ต่อคืน" );
jr_define( "_JOMRES_AJAXFORM_ADDRESS", "รายละเอียดของคุณ" );
jr_define( "_JOMRES_AJAXFORM_ADDRESS_DESC", "กรุณาใส่รายละเอียดของคุณ โปรดสังเกตว่า กรุณากรอกให้ครบตามข้อมูลที่ระบุสีแดง" );
jr_define( "_JOMRES_AJAXFORM_AVAILABLEROOMS", "ประเภทที่่ว่าง" );
jr_define( "_JOMRES_AJAXFORM_SELECTEDROOMS", "ประเภทที่เลือก" );
jr_define( "_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE", "วันมาถึงได้เร็วที่สุดคือ:" );
jr_define( "_JOMRES_AJAXFORM_BILLING_ROOM", "ต่อคืน:" );
jr_define( "_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL", "ห้องพัก" );
jr_define( "_JOMRES_AJAXFORM_BILLING_EXTRAS", "Extras:" );
jr_define( "_JOMRES_AJAXFORM_BILLING_TAX", "ภาษี:" );
jr_define( "_JOMRES_AJAXFORM_BILLING_DISCOUNT", "ส่วนลด:" );
jr_define( "_JOMRES_AJAXFORM_BILLING_TOTAL", "รวมทั้งหมด (รวมภาษี):" );
jr_define( "_JOMRES_AJAXFORM_BILLING_TOTALINPARTY", "แขก" );
jr_define( "_JOMRES_AJAXFORM_CLICKHERECAPTION", "เลือกไปที่เพิ่มของคุณ" );
jr_define( "_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE", "เอาออกไปที่เพิ่มของคุณ" );
jr_define( "_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES", "ประเภท แขก" );
jr_define( "_JOMRES_VARIANCES_TYPE", "ประเภท" );
jr_define( "_JOMRES_VARIANCES_TYPE_TT", "ประเภทของลูกค้า เช่นเด็กอายุ 5-10 หรือนักเรียน" );
jr_define( "_JOMRES_VARIANCES_NOTES", "บันทึก" );
jr_define( "_JOMRES_VARIANCES_NOTES_TT", "บันทึกย่อที่คุณอาจต้องการทำเกี่ยวกับประเภทลูกค้า" );
jr_define( "_JOMRES_VARIANCES_MAXIMUM", "สูงสุด" );
jr_define( "_JOMRES_VARIANCES_MAXIMUM_TT", "จำนวนสูงสุดของชนิดนี้ลูกค้าที่สามารถเลือกในแบบฟอร์มการจอง" );
jr_define( "_JOMRES_VARIANCES_ISPERCENTAGE", "Is percentage" );
jr_define( "_JOMRES_VARIANCES_ISPERCENTAGE_TT", "The figure calculated is a percentage of the Base figure calculated for the resource. If this is set to no then the figure you specify is simply added or subtracted from the base resource value." );
jr_define( "_JOMRES_VARIANCES_POSNEG", "Add variance?" );
jr_define( "_JOMRES_VARIANCES_POSNEG_TT", "The figure calculated is added to or removed from the Base figure calculated for the resource. Set this to No if you want this to be a discount from the base figure. " );
jr_define( "_JOMRES_VARIANCES_VARIANCE", "Variance" );
jr_define( "_JOMRES_VARIANCES_VARIANCE_TT", "ยอดเงินที่อาจมีการเปลี่ยนแปลง" );
jr_define( "_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE", "ลูกค้าแก้ไขชนิดของใบสั่ง" );
jr_define( "_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE", "ประกาศชนิดของลูกค้า" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE", "ชนิดของลูกค้าที่ถูกลบ" );
jr_define( "_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE", "สร้างชนิดของลูกค้า" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE", "ชนิดของลูกค้าที่แก้ไข" );
jr_define( "_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED", "ชนิดของลูกค้าที่แก้ไข" );
jr_define( "_JOMRES_COM_A_SHOWROOMSLISTLINK", "แสดงการเชื่อมโยงไปยังหน้ารายการของประเภทในหน้ารายละเอียดของธุรกิจหรือไม่?" );
jr_define( "_JOMRES_COM_A_SHOWONLYAVLCAL", "แสดง" );
jr_define( "_JOMRES_COM_A_SHOWONLYAVLCAL_DESC", "Switch this to Yes to disable display of the business header and details, so that only the availability calendar is viewable in the business details section. Only really intended for users renting out single resource businesses (eg apartments, cottages etc)." );
jr_define( "_JOMRES_COM_A_MINIMUMINTERVAL", "Arr-Dep minimum interval" );
jr_define( "_JOMRES_COM_A_MINIMUMINTERVAL_DESC", "The mimimum interval in the booking form between the arrival date and the departure date." );
jr_define( "_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO", "จองหมายเลขแบบฟอร์มแสดงรายการประเภท" );
jr_define( "_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME", "จองแบบฟอร์มรายการแสดงชื่อของประเภท" );
jr_define( "_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE", "จองชื่อเรื่องแบบฟอร์มแสดงราคาของประเภทรายการ" );
jr_define( "_JOMRES_ORDER", "ใบสั่ง" );
jr_define( "_JOMRES_REQUIREDFIELDS", "ต้องการ" );
jr_define( "_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING", "วันก่อนที่จะมาถึง" );
jr_define( "_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC", "จำนวนต่ำสุดของวันที่ต้องออก " );
jr_define( "_JOMRES_DTV", "วันที่ชนิดต่าง ๆ" );
jr_define( "_JOMRES_DTV_DOW", "วันของสัปดาห์" );
jr_define( "_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE", "ประเภทบุคคลทั่วไป" );
jr_define( "_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC", "Default number of  the first Guest type shown in the booking form.. If you use guest types, then this is the default number that the first guest type in the booking form will be set to." );
jr_define( "_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK", "Registered users only can book online?" );
jr_define( "_JOMRES_REGISTEREDUSERSONLYBOOK", "Sorry, you must be a registered user to book online. Click here to register on this site. " );
jr_define( "_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT", "Font colour for links to current bookings" );
jr_define( "_JOMRES_COM_AVLCAL_WEEKENDBORDER", "เส้นขอบของวันหยุดสุดสัปดาห์" );
jr_define( "_JOMRES_COM_AVLCAL_BOOKING_KEY", "ประเภทไม่จอง" );
jr_define( "_JOMRES_COM_AVLCAL_BLACK_KEY", "จองสีดำ" );
jr_define( "_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP", "ค่ามัดจำเป็นเศษสตางค์ให้ปัดขึ้นเป็นจำนวนเต็ม?" );
jr_define( "_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT", "มีค่าธรรมเนียมเงินมัดจำ?" );
jr_define( "_JOMRES_COM_A_TARIFFPRICESAREWEEKLY", "Tariff charges stored as weekly figures?" );
jr_define( "_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC", "You have the option of storing tariff charges in either daily or weekly values. If storing them as weekly, you MUST set this option to Yes." );
jr_define( "_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK", "ต่อสัปดาห์" );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING", "Fixed arrival dates recurr: " );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC", "When fixed arrival dates are selected, the number dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available) " );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID", "ตัวเลือกการสูบบุหรี่ไม่ถูกต้อง" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID", "วันมาถึงไม่ถูกต้อง" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID", "วันออกเดินทางไม่ถูกต้อง" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1", "ระยะเวลาการจองที่สั้นเกินไป ต้องมีอย่างน้อยหลายวันระหว่างมาถึงและวันออกเดินทาง:" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2", "เป็นช่วงเวลาของคุณ" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT", "ประเภทบุคคลไม่ถูกต้อง" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS", "เลือกแขกจำนวน/ประเภท" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS", "You have too many in the party for the available tariffs" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS", "You have chosen more resources than you have guests, click on a room to remove it from your selection" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS", "Too many guests for the available beds" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS", "คุณต้องเลือกประเภทเพิ่มเติม" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM", "เลือกประเภท" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME", "ชื่อแรกจำเป็นต้องมี" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME", "นามสกุลจำเป็นต้องมี" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO", "เลขที่บ้านไม่มี / จำเป็นต้องมีชื่อหมู่บ้าน บริษัทฯ" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET", "ถนนจำเป็นต้องมี" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN", "เมืองจำเป็นต้องมี" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION", "ตำบล / แขวงจำเป็นต้องมี" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE", "รหัสไปรษณีย์จำเป็นต้องมี" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY", "ประเทศจำเป็นต้องมี" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE", "เบอร์โทรศัพท์พื้นฐานจำเป็นต้องมี" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE", "เบอร์โทรศัพท์มือถือจำเป็นต้องมี" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL", "อีเมล์จำเป็นต้องมี" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID", "อีเมล์ไม่ถูกต้อง" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL", "ไม่สามารถตรวจสอบโดเมนอีเมล์" );
jr_define( "_JOMRES_SRP_WEHAVEVACANCIES", "<b>We have vacancies!</b>" );
jr_define( "_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET", "ไม่มีประเภทให้เลือก" );
jr_define( "_JOMRES_BOOKING_NUMBER", "ไม่มีจอง" );
jr_define( "_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND", "ตกลงจอง ส่งข้อความให้ภายหลัง" );
jr_define( "_JOMRES_COM_DUMPTEMPLATEDATA", "Dump template vars?" );
jr_define( "_JOMRES_COM_DUMPTEMPLATEDATA_DESC", "Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template." );
jr_define( "_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE", "Figure is percentage" );
jr_define( "_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC", "Set this to Yes if the single person calculation figure is a percentage. If no then it will be applied as a flat sum." );
jr_define( "_JOMRES_COM_LIMITROOMSLIST", "Available resources/tariff limit" );
jr_define( "_JOMRES_COM_LIMITROOMSLIST_DESC", "Use this input to limit the number of available resources & tariffs that are listed in the booking form. Set it to zero if you do not want limiting enabled. " );
jr_define( "_JOMRES_SRP_WEHAVENOVACANCIES", "ตอนนี้ยังไม่มีห้องว่าง" );
jr_define( "_JOMRES_BOOKITNOW", "" );
jr_define( "_JOMRES_COM_JRCONFIG_GLOBALEDITING", "Global editing mode?" );
jr_define( "_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC", "Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL businesses in the system for the constant you are editing." );
jr_define( "_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO", "ใช้สกุลเงินทั่วโลก?" );
jr_define( "_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC", "Set this to yes to force all businesses to use the same currency." );
jr_define( "_JOMRES_COM_JRCONFIG_GLOBALCURRENCY", "สัญลักษณ์สกุลเงินสากล" );
jr_define( "_JOMRES_COM_JRCONFIG_ISWRAPPED", "Component wrapped" );
jr_define( "_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC", "ตั้งค่านี้เป็นใช่ถ้าคอมโพเนนต์ถูกตัดเพื่อให้โมดูลและหัวข้อพื้นที่จะไม่ให้มองเห็นได้" );
jr_define( "_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER", "Super Business Manager" );
jr_define( "_JOMRES_COM_WEEKENDONLY", "วันหยุดสุดสัปดาห์เท่านั้น" );
jr_define( "_JOMRES_COM_WEEKENDDAYS", "วันสุดสัปดาห์" );
jr_define( "_JOMRES_COM_WEEKENDDAYS_DESC", "ตั้งค่าวันที่วันหยุดสุดสัปดาห์ของคุณ ราคาที่อนุญาต หรือไม่อนุญาตให้วันหยุดสุดสัปดาห์จะมีการตั้งค่านี้ลงในบัญชีเมื่อสร้างรายการประเภท" );
jr_define( "_JOMRES_EDITPROPERTY_SELECTCOUNTRY", "เลือกประเทศของคุณก่อนที่จะเพิ่มข้อมูลทางธุรกิจใด ๆ" );
jr_define( "_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD", "บันทึกการเปลี่ยนแปลงของธุรกิจก่อนที่จะอัปโหลดรูปภาพธุรกิจ" );
jr_define( "_JOMRES_TARIFFSFROM", "ราคาจาก" );
jr_define( "_JOMRES_SEARCH_ALL", "ทั้งหมด" );
jr_define( "_JOMRES_SEARCH_GEO_COUNTRYSEARCH", "ค้นหา ตามประเทศ" );
jr_define( "_JOMRES_SEARCH_GEO_REGIONSEARCH", "ค้นหา ตามภูมิภาค" );
jr_define( "_JOMRES_SEARCH_GEO_TOWNSEARCH", "ค้นหา ตามเมือง" );
jr_define( "_JOMRES_SEARCH_FEATURE_INFO", "ค้นหา ตามคุณลักษณะ" );
jr_define( "_JOMRES_SEARCH_BUTTON", "ค้นหา" );
jr_define( "_JOMRES_SEARCH_DESCRIPTION_INFO", "ป้อนคำค้นหาลงในช่อง และกดปุ่ม" );
jr_define( "_JOMRES_SEARCH_DESCRIPTION_LABEL", "คำค้นหา:" );
jr_define( "_JOMRES_SEARCH_AVL_INFO", "กรุณาใส่ผู้มาถึงและวันออกเดินทางของคุณ และกดปุ่มเพื่อค้นหาธุรกิจที่มีการพักในวันที่ของคุณเลือก" );
jr_define( "_JOMRES_SEARCH_PTYPES", "รายชื่อประเภททั้งหมดตามชนิดของธุรกิจ" );
jr_define( "_JOMRES_SEARCH_RTYPES", "รายชื่อทั้งหมดตามชนิดของประเภท/ธุรกิจ" );
jr_define( "_JOMRES_SORTORDER_DEFAULT", "ค่าเริ่มต้น" );
jr_define( "_JOMRES_SORTORDER_PROPERTYNAME", "ชื่อประเภท" );
jr_define( "_JOMRES_SORTORDER_PROPERTYREGION", "เขตตามประเภท" );
jr_define( "_JOMRES_SORTORDER_PROPERTYTOWN", "เมืองตามประเภท" );
jr_define( "_JOMRES_SORTORDER_STARS", "ประเภทดาว" );
jr_define( "_JOMRES_PATHWAY_PROPERTYLIST", "รายการประเภท" );
jr_define( "_JOMRES_PATHWAY_PROPERTYDETAILS", "รายละเอียดประเภท" );
jr_define( "_JOMRES_PATHWAY_BOOKINGFORM", "แบบฟอร์มการจอง" );
jr_define( "_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON", "เพิ่มเติมรายละเอียดที่อยู่ของคุณ" );
jr_define( "_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY", "ประเภทที่ยังว่าง" );
jr_define( "_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP", "ตรวจสอบตารางวันว่าง" );
jr_define( "_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA", "การปรับเปลี่ยนของ extras ที่เลือกได้" );
jr_define( "_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION", "เปลี่ยนแปลงการเลือกประเภท" );
jr_define( "_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS", "เพิ่มเติมรายละเอียดที่อยู่ของคุณ" );
jr_define( "_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR", "ขออภัย ข้อมูลที่อยู่ไม่ถูกต้อง" );
jr_define( "_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE", "รูปภาพของประเภท" );
jr_define( "_JOMRES_CURRENCYFORMAT", "สกุลเงิน" );
jr_define( "_JOMRES_MANAGEROPTIONSASIMAGES", "แสดง Managers" );
jr_define( "JOMRES_COM_A_SEARCHOPTIONSTAB", "ตัวเลือกการค้นหา" );
jr_define( "JOMRES_COM_A_AVAILABLELOGS", "Logs ที่พร้อมใช้งาน" );
jr_define( "JOMRES_COM_A_LOGS_NOENTRIES", "ยังไม่มีรายการ Logsบันทึก" );
jr_define( "JOMRES_COM_A_MESSAGE", "ข้อความ" );
jr_define( "JOMRES_COM_A_TARIFFMODE_NORMAL", "ปกติ" );
jr_define( "JOMRES_COM_A_TARIFFMODE_ADVANCED", "ขั้นสูง" );
jr_define( "JOMRES_COM_A_TARIFFMODE_TARIFFTYPES", "Micromanage" );
jr_define( "JOMRES_COM_A_TARIFFMODE", "โหมดการกำหนดราคา" );
jr_define( "JOMRES_COM_A_TARIFFMODE_DESC", "<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
<br/><br/>
You have three options as to how you configure your tariffs.<br/>
Normal mode: You will have one tariff for each room type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each resource/business type. <br/>
Advanced: The \"old\" Jomres method of managing tariffs. <br/>
<br/>
The different tariff modes allow you to choose the method of configuring tariffs that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference resources and tariffs to resource/business types and allows you to configure resources and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create a resource and associate it with a resource type. You then create a tariff and associate THAT with a resource type. Using this method it is possible to \"layer\" tariffs over each other, for example a resource type \"Double bed\" can have one tariff for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a resource or tariff from a resource/business type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of resources and tariffs for the tariff mode to work the system may need to reset some data to make the current tariff configurations compatible with the current tariff editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing tariffs are retained.<br/>
Normal -> Micromanage. All existing tariffs are removed.<br/>
Advanced -> Normal. All existing tariffs are removed.<br/>
Advanced -> Micromanage. All existing tariffs are removed.<br/>
Micromanage -> Advanced. All existing cross references between tariffs are removed, but the tariffs themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>" );
jr_define( "_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS", "แสดงรายการประเภทในหน้ารายละเอียดของธุรกิจหรือไม่?" );
jr_define( "JOMRES_PROPERTYTYPE", "ชนิดของธุรกิจ" );
jr_define( "JOMRES_COM_A_SRPONLY", "SRP only" );
jr_define( "JOMRES_MAXPEOPLEINROOM", "คนสูงสุดต่อประเภท" );
jr_define( "JOMRES_MAXPEOPLEINBOOKING", "จำนวนคนจองได้สูงสุด" );
jr_define( "_JOMCOMP_BOOKINGNOTES_ADD", "เขียนหมายเหตุ" );
jr_define( "_JOMCOMP_BOOKINGNOTES_EDIT", "แก้ไขหมายเหตุ" );
jr_define( "_JOMCOMP_BOOKINGNOTES_DELETE", "ลบหมายเหตุ" );
jr_define( "_JOMCOMP_BOOKINGNOTES_VIEW", "ตรวจทานหมายเหตุ" );
jr_define( "_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE", "เพิ่มหมายเหตุใหม่" );
jr_define( "_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT", "แก้ไขหมายเหตุ" );
jr_define( "_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE", "ลบหมายเหตุ" );
jr_define( "_JOMCOMP_MYUSER_MENUTITLE", "ที่ฉันเลือก" );
jr_define( "_JOMCOMP_MYUSER_LISTBOOKINGS", "รายการจองที่ฉันเลือก" );
jr_define( "_JOMCOMP_MYUSER_MYBOOKINGS", "ที่ฉันจอง" );
jr_define( "_JOMCOMP_MYUSER_VIEWBOOKING", "ตรวจทานการจองของฉัน" );
jr_define( "_JOMCOMP_MYUSER_VIEWFAVOURITES", "ตรวจทานที่ฉันเลือกชอบ" );
jr_define( "_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE", "คุณยังไม่" );
jr_define( "_JOMCOMP_MYUSER_ADDTOFAVOURITES", "เพิ่มไปยังที่ชื่นชอบ" );
jr_define( "_JOMCOMP_MYUSER_PROPERTYTYPE", "ชนิดของธุรกิจ" );
jr_define( "_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES", "ธุรกิจบนเว็บไซต์" );
jr_define( "_JOMCOMP_WISEPRICE_TITLE", "Wise price" );
jr_define( "_JOMCOMP_WISEPRICE_ACTIVE", "ใช้งานอยู่" );
jr_define( "_JOMCOMP_WISEPRICE_TITLE_DESC", "This plugin allows you to enable and configure your resource prices dynamically." );
jr_define( "_JOMCOMP_WISEPRICE_TITLE_DESC_FULL", "Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn't busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the arrival date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected." );
jr_define( "_JOMCOMP_WISEPRICE_THREASHOLD", "Threshold (number of days between arrival date and today)" );
jr_define( "_JOMCOMP_WISEPRICE_PERCENTAGE10", "เปอร์เซ็นต์ประเภทว่าง 10% หรือน้อยกว่า" );
jr_define( "_JOMCOMP_WISEPRICE_PERCENTAGE25", "เปอร์เซ็นต์ประเภทว่าง 25% หรือน้อยกว่า" );
jr_define( "_JOMCOMP_WISEPRICE_PERCENTAGE50", "เปอร์เซ็นต์ประเภทว่าง 50% หรือน้อยกว่า" );
jr_define( "_JOMCOMP_WISEPRICE_PERCENTAGE75", "เปอร์เซ็นต์ประเภทว่าง 75% หรือน้อยกว่า" );
jr_define( "_JOMCOMP_WISEPRICE_DISCOUNT", "ลด%" );
jr_define( "_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED", "ได้รับส่วนลดจาก" );
jr_define( "_JOMCOMP_WISEPRICE_TO", "ถึง" );
jr_define( "_JOMCOMP_WISEPRICE_NOTDISCOUNTED", "ไม่ใช้ส่วนลด Wiseprice" );
jr_define( "JOMRES_COM_A_MAPSKEY", "Google maps API key" );
jr_define( "JOMRES_COM_A_MAPSKEY_DESC", "You can get a google maps API key from <a href=\"https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key\" target=\"_blank\">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Business Details page." );
jr_define( "JOMRES_COM_A_USE_SSL", "Use SSL in booking form?" );
jr_define( "JOMRES_COM_A_USE_SSL_DESC", "You need to ensure that you have a valid SSL certificate for " );
jr_define( "_JOMCOMP_LASTMINUTE_CPANEL", "ยังว่างในใกล้วันเดินทาง" );
jr_define( "_JOMCOMP_LASTMINUTE_ACTIVE", "ใช้งานอยู่หรือไม่" );
jr_define( "_JOMCOMP_LASTMINUTE_ACTIVE_DESC", "ใช่ ถ้าคุณต้องการทำรายการนาทีสุดท้าย" );
jr_define( "_JOMCOMP_LASTMINUTE_THREASHOLD", "Threshold" );
jr_define( "_JOMCOMP_LASTMINUTE_THREASHOLD_DESC", "If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied" );
jr_define( "_JOMCOMP_LASTMINUTE_DISCOUNT", "ส่วนลด" );
jr_define( "_JOMCOMP_LASTMINUTE_DISCOUNT_DESC", "เป็นเปอร์เซ็นต์" );
jr_define( "_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1", "ได้ถูกใช้ส่วนลดในการจองนี้" );
jr_define( "_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2", "ลดราคาโดย" );
jr_define( "_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE", " " );
jr_define( "_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID", "ส่วนลด%ถ้าคุณจองก่อน" );
jr_define( "_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST", ". จองตอนนี้เป็นข้อเสนอที่ดีที่สุด" );
jr_define( "_JOMCOMP_LASTMINUTE_ORMORE", "% หรือส่วนลดเพิ่มเติมอาจใช้ได้ถ้าจองก่อน" );
jr_define( "JOMRES_COM_A_VERBOSETARIFFINTO", "Verbose tariff info" );
jr_define( "JOMRES_COM_A_VERBOSETARIFFINTO_DESC", "ตั้งค่านี้เป็น Yes เมื่อต้องการแสดงข้อมูลราคาในรายการที่ขึ้นรายละเอียดธุรกิจเพิ่มเติม" );
jr_define( "JOMRES_COM_A_MINIMALCONFIG", "ลดค่่าตัวเลือก" );
jr_define( "_JOMCOMP_AMEND", "แก้ไขการจอง - การเลือกประเภท" );
jr_define( "_JOMCOMP_AMEND_SELECTPROPERTY", "เลือกธุรกิจใหม่" );
jr_define( "_JOMCOMP_AMEND_HEADER", "ต้นฉบับสัญญา:" );
jr_define( "_JOMCOMP_AMEND_DEPOSITPAID", "ชำระเงินมัดจำ" );
jr_define( "_JOMCOMP_AMEND_DEPOSITDUE", "ไม่มีชำระเงินมัดจำ" );
jr_define( "_JOMCOMP_AMEND_OVERRIDE_TOTAL", "แทนผลรวม" );
jr_define( "_JOMCOMP_AMEND_OVERRIDE_DEPOSIT", "แทนที่การเงินมัดจำ" );
jr_define( "_JRPORTAL_CANCEL", "ยกเลิก" );
jr_define( "_JRPORTAL_CPANEL", "JRPortal Control Panel" );
jr_define( "_JRPORTAL_CONFIG_DEFAULT_CRATE", "อัตราค่าคอมมิชชั่นเริ่มต้น" );
jr_define( "_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC", "Choose the default commission rate that will be applied to a business in the event that another commission rate is not otherwise set." );
jr_define( "_JRPORTAL_CPANEL_LISTCRATES", "อัตราค่ารายการคอมมิชชั่น" );
jr_define( "_JRPORTAL_CPANEL_PATETITLE", "อัตราค่าคอมมิชชั่น" );
jr_define( "_JRPORTAL_CRATE_TITLE", "ชื่อ" );
jr_define( "_JRPORTAL_CRATE_TYPE", "ชนิด" );
jr_define( "_JRPORTAL_CRATE_VALUE", "อัตราค่าคอมมิชชั่น" );
jr_define( "_JRPORTAL_CRATE_CURRENCYCODE", "รหัสสกุลเงิน" );
jr_define( "_JRPORTAL_CPANEL_LISTPROPERTIES", "รายชื่อธุรกิจ" );
jr_define( "_JRPORTAL_PROPERTIES_PROPERTYNAME", "ชื่อธุรกิจ" );
jr_define( "_JRPORTAL_PROPERTIES_PROPERTYADDRESS", "ที่อยู่ธุรกิจ" );
jr_define( "_JRPORTAL_PROPERTIES_LEGEND", "เจ้าของธุรกิจ" );
jr_define( "_JRPORTAL_STATS_PATETITLE", "สถิติ" );
jr_define( "_JRPORTAL_STATS_STATTYPE", "สถิติสำหรับ:" );
jr_define( "_JRPORTAL_STATS_STATTYPE_PROPERTIES", "ธุรกิจ - คลิก" );
jr_define( "_JRPORTAL_PROPERTIES_VIEWPROPERTY", "ตรวจดูธุรกิจ" );
jr_define( "_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS", "จำนวนจอง" );
jr_define( "_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS", "มูลค่าของจำนวนจอง" );
jr_define( "_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE", "คณะกรรมการประเมิน" );
jr_define( "_JRPORTAL_PROPERTIES_COMMISSIONRATE", "อัตราค่าคอมมิชชั่น" );
jr_define( "_JRPORTAL_CPANEL_LISTBOOKINGS", "รายการจอง" );
jr_define( "_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID", "รหัสธุรกิจ" );
jr_define( "_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID", "รหัสแขก" );
jr_define( "_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID", "รหัสเข้าร่วม" );
jr_define( "_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID", "หมายเลขใบแจ้งหนี้" );
jr_define( "_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL", "รวมจองทั้งหมด" );
jr_define( "_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID", "รหัสสัญญา" );
jr_define( "_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER", "หมายเลขสัญญา" );
jr_define( "_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE", "รหัสสกุลเงิน" );
jr_define( "_JRPORTAL_LISTBOOKINGS_HEADER_CREATED", "สร้างขึ้น" );
jr_define( "_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED", "เก็บ" );
jr_define( "_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED", "วันที่เก็บ" );
jr_define( "_JRPORTAL_CPANEL_ADD_ADHOC_ITEM", "เพิ่มรายการเข้าในบิล" );
jr_define( "_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER", "ตัวจัดการการออกใบแจ้งหนี้" );
jr_define( "_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY", "ธุรกิจที่เกี่ยวข้อง (ถ้ามี)" );
jr_define( "_JRPORTAL_ADD_ADHOC_ITEM_VALUE", "มูลค่า" );
jr_define( "_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION", "คำอธิบาย" );
jr_define( "_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS", "แทรกรายการเรียกเก็บเงินเป็นร้อยแล้ว" );
jr_define( "_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS", "ตรวจทานใบสั่ง" );
jr_define( "_JRPORTAL_ADD_ADHOC_ITEM_FAILURE", "การแทรกรายการเรียกเก็บเงินเข้าล้มเหลว" );
jr_define( "_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE", "ข้อผิดพลาด didn คุณ" );
jr_define( "_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER", "You can have business type specific language files by setting the description to the name of a sub folder, e.g. \"yachtbrokerage\" and copying a language file to that subfolder. You can then modify that language file for this business type so resources become, for example, DVDs, etc." );
jr_define( "_JOMRES_EDITPROPERTY_CONNOTDELETE1", "You cannot delete this business as it is the only business that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. " );
jr_define( "_JOMRES_EDITPROPERTY_CONNOTDELETE2", "If this is a demo installation and you intend to upgrade to Jomres Solo (one business only limit) then you should create a new business first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. " );
jr_define( "_JOMRES_COM_EMAILERRORS", "หากLogsผิดพลาดจะถูกส่งไปยังอีเมลล์ ?" );
jr_define( "_JOMRES_COM_EMAILERRORS_DESC", "Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. " );
jr_define( "_JOMRES_COM_ISTHISANMRP", "Is this business a hotel/bed and breakfast/guest house/pension? " );
jr_define( "_JOMRES_COM_ISTHISANMRP_DESC", "Configuration options differ depending on if you are renting out resources in a business, or the business itself. Select MRP if you are offering resources, select SRP if you are offering the entire business. " );
jr_define( "_JOMRES_COM_JOMRESEMAILCHECK", "Use Jomres email address checker? " );
jr_define( "_JOMRES_COM_JOMRESEMAILCHECK_DESC", "Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. " );
jr_define( "_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL", "ที่พัก รวมทั้งหมด" );
jr_define( "_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS", "จำนวนคืน(s)" );
jr_define( "_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM", "ต่อประเภท" );
jr_define( "_JOMRES_AJAXFORM_EXTRAS_TOTAL", "บริการรวม (รวมภาษี)" );
jr_define( "_JOMRES_AJAXFORM_PRICE_SUMMARY", "สรุปราคา" );
jr_define( "_JOMRES_CONFIRMATION_ALERT", "กรุณาอ่าน และยอมรับ" );
jr_define( "_JOMRES_CONFIRMATION_HEADER", "สรุปการจองของคุณจะแสดงอยู่ด้านล่าง" );
jr_define( "_JOMRES_CONFIRMATION_AMENDTEXT", "ถ้าคุณต้องการเปลี่ยนแปลงใด ๆ ของข้อมูลข้างต้น แล้วกรุณาคลิกที่นี่" );
jr_define( "_JOMRES_CONFIRMATION_AMEND", "แก้ไขการจอง" );
jr_define( "_JOMRES_CONFIRMATION_SPECIALS", "กรุณาใส่คำขอพิเศษใด ๆ ในกล่องด้านล่าง" );
jr_define( "_JOMRES_CONFIRMATION_TERMS_PRETEXT", "ยืนยันว่า ข้อมูลข้างต้นถูกต้อง และยอมรับการ" );
jr_define( "_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON", "ต่อคนต่อคืน" );
jr_define( "_JOMRES_COM_A_SITELANGUAGE_FILE", "ไฟล์ภาษา" );
jr_define( "_JOMRES_COM_A_SITELANGUAGE_FILE_DESC", "เลือกไฟล์ภาษาที่มีอยู่ถ้าไม่มีแสดงว่าไม่ได้ถูกนำมาใช้" );
jr_define( "_PN_OF", "ของ" );
jr_define( "_PN_START", "เริ่ม" );
jr_define( "_PN_PREVIOUS", "ก่อนหน้า" );
jr_define( "_PN_NEXT", "ถัดไป" );
jr_define( "_PN_END", "สิ้นสุด" );
jr_define( "_PN_RESULTS", "ผลลัพธ์" );
jr_define( "_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE", "กรุณาใส่ข้อความ" );
jr_define( "_JOMRES_FRONT_MR_MENU_CONTACTHOTEL", "ติดต่อโรงแรม" );
jr_define( "_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT", "คำถามจากธุรกิจ" );
jr_define( "_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS", "ขอบคุณสำหรับคำถามของคุณ ข้อความของคุณถูกส่งไป business" );
jr_define( "_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING", "ด้วยความนับถือ" );
jr_define( "_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1", "พิมพ์อักษรที่คุณเห็นในกล่อง" );
jr_define( "_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2", "ไม่สามารถอ่านอักษร สร้างใหม่" );
jr_define( "_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT", "ส่ง" );
jr_define( "_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT", "รูปภาพใหม่" );
jr_define( "_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY", "คำถามจาก" );
jr_define( "_JOMRES_BOOKINGFORM_LOOKRIGHT", "กรุณาเลือกห้องพักของคุณต้องการจากรายการด้านล่าง โดยคลิกที่ประเภท" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_MINROOMS", "ประเภทที่เลือกอยู่แล้ว" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC", "สามารถเลือกจำนวนน้อยที่สุดจำนวนของประเภทที่ได้เลือกในการจองก่อนราคา/ประเภทรชนิดผสม ช่วยให้คุณสามารถนำไปลดภาษีเมื่อมากกว่า เลือกมากกว่าหนึ่งประเภท" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_MAXROOMS", "ค่าสูงสุดประเภทได้ถูกเลือก" );
jr_define( "_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC", "Maximum number of resources already selected in booking before tariff/resource combo is no longer offered. Allows you to stop offering this resource type/tariff combination once N resources have been selected in the booking form. " );
jr_define( "_JOMRES_COM_SPS_EDITROOM_DESC", "Note that Single person supplements set here will not be used if Single Person Supplements are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS." );
jr_define( "_JOMRES_AVLCAL_NOBOOKINGS", "ว่าง สามารถจองได้" );
jr_define( "_JOMRES_AVLCAL_QUARTER", "จองแล้วบางส่วน" );
jr_define( "_JOMRES_AVLCAL_HALF", "จองแล้วครึ่งหนึ่ง" );
jr_define( "_JOMRES_AVLCAL_THREEQUARTER", "ส่วนใหญ่จองแล้ว" );
jr_define( "_JOMRES_AVLCAL_FULLYBOOKED", "จองเต็มแล้ว" );
jr_define( "_JOMRES_COM_SEF_URL_PREFIX", "คำนำหน้า Url" );
jr_define( "_JOMRES_COM_SEF_URL_PREFIX_DESC", "รายการแรกที่แสดงหลังจากโดเมน " );
jr_define( "_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY", "นามแฝงงานของมุมมองธุรกิจ" );
jr_define( "_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC", "" );
jr_define( "_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING", "dobooking task alias" );
jr_define( "_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC", "" );
jr_define( "_JOMRES_COM_SEF_TASK_ALIAS_SEARCH", "ค้นหาตามนามแฝง" );
jr_define( "_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC", "" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY", "เพิ่มประเทศเข้าไป url" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC", "" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_REGION", "เพิ่มเขตเข้าไป url" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC", "" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_TOWN", "เพิ่มเมือง เข้าไป url" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC", "" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_PTYPE", "เพิ่มชนิดธุรกิจเข้าไป url" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC", "" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME", "เพิ่มชื่อธุรกิจเข้าไป url" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC", "" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID", "ผนวกธุรกิจ id กับชื่อธุรกิจ" );
jr_define( "_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC", "if business name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1" );
jr_define( "_JOMRES_COM_SEF_SEARCH_URL_COUNTRY", "Search URL Structure - Add country to url" );
jr_define( "_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC", "" );
jr_define( "_JOMRES_COM_SEF_DEFAULT_COUNTRY", "Search URL Structure - Default country" );
jr_define( "_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC", "If all your businesses are in one country then you will not have country in the search - enter a default country here if you want to display a country" );
jr_define( "_JOMRES_COM_SEF_SEARCH_URL_REGION", "Search URL Structure - Add region to url" );
jr_define( "_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC", "" );
jr_define( "_JOMRES_COM_SEF_DEFAULT_REGION", "Search URL Structure - Default region" );
jr_define( "_JOMRES_COM_SEF_DEFAULT_REGION_DESC", "If all your businesses are in one region then you will not have region in the search - enter a default region here if you want to display a region" );
jr_define( "_JOMRES_COM_SEF_SEARCH_URL_TOWN", "Search URL Structure - Add town to url" );
jr_define( "_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC", "" );
jr_define( "_JOMRES_COM_SEF_DEFAULT_TOWN", "Search URL Structure - Default town" );
jr_define( "_JOMRES_COM_SEF_DEFAULT_TOWN_DESC", "" );
jr_define( "_JOMRES_COM_SEF_SEARCH_URL_PTYPE", "Search URL Structure - Business type" );
jr_define( "_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC", "" );
jr_define( "_JOMRES_COM_SEF_DEFAULT_PTYPE", "Search URL Structure - Default business type" );
jr_define( "_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC", "Used in url if search is for all business types" );
jr_define( "_JOMRES_COM_SEF_NOTINSTALLED", "Joomla 1.5 only. Either she404sef is not installed, or you haven't yet copied /home/weltweit/domains/weltweitmieten.com/public_html/jomres/libraries/jomres/cms_specific/joomla15/other_component_files/sh404sef/com_jomres.php to /home/weltweit/domains/weltweitmieten.com/public_html/components/com_sh404sef/sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. <br/> Note, if you are also using Joomfish v2 you may need to ensure that GZIP is switched off in Global Configuration." );
jr_define( "_JOMRES_COM_A_CALENDARLANGUAGE_AUTO", "Autodetect Javascript calendar language" );
jr_define( "_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC", "Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below" );
jr_define( "_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK", "ต่อสัปดาห์" );
jr_define( "_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS", "ต่อวัน" );
jr_define( "_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING", "ต่อการจอง" );
jr_define( "_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING", "ต่อคนต่อการจอง" );
jr_define( "_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY", "ต่อคนต่อวัน" );
jr_define( "_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK", "ต่อคนต่อสัปดาห์" );
jr_define( "_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS", "ต่อวัน (อย่างน้อย)" );
jr_define( "_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM", "ต่อวัน X เลือกประเภท" );
jr_define( "_JOMRES_REGISTRYREBUILD", "สร้าง minicomponent" );
jr_define( "_JOMRES_REGISTRYREBUILD_NOTES", "Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it." );
jr_define( "_JOMRES_REGISTRYREBUILD_SUCCESS", "Registry rebuilt successfully" );
jr_define( "_JOMRES_REGISTRYREBUILD_FAILURE", "There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error." );
jr_define( "_JOMRES_SEARCH_PRICERANGES", "ค้นหาตามช่วงราคา" );
jr_define( "JOMRES_WORD_SAVING", "บันทึก..." );
jr_define( "_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS", "ใช้รายละเอียดของการประกอบธุรกิจได้อย่างไร?" );
jr_define( "_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC", "Jomres 3.3 introduces the composite business details where all of the business details output is sent to one template file (composite_business_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)" );
jr_define( "_JOMRES_PROFILELIST_INSTRUCTIONS", "This is a list of all users on the system. Non-business managers will have a Guest icon, business managers will have Reception/Business Manager/Super business manager icons.<br/>When Jomres is first installed \"admin\" is automatically added as a business manager and is considered an authorised user.<br/>Non-super business managers must be assigned to at least one business otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to businesses or give them super business manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific businesses only, or give them super business manager rights, authorise them then click the edit icon (which is only visible once they've been authorised). Users who've registered their business(s) themselves will be automatically assigned to those businesses. Super business managers automatically have rights over all businesses, and will see all configuration options even if the minimised configuration option is set in Site Config." );
jr_define( "_JOMRES_PROFILEEDIT_INSTRUCTIONS", "Here you can assign a manager to certain businesses. Ensure, if they're not going to be a super business manager, that they have rights to at least one business otherwise they will see an error when they log in. To give a receptionist/business manager rights over only certain businesses, ensure that the Super Business Manager dropdown is not set to Yes." );
jr_define( "_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE", "คุณยัง" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB", "ชนิดของธุรกิจ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_TYPE", "แก้ไขชนิดของธุรกิจของคุณ" );
jr_define( "_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO", "เลือกชนิดของธุรกิจของคุณ" );
jr_define( "_JOMRES_COM_LOGGING", "เข้าสู่ระบบ Jomres" );
jr_define( "_JOMRES_COM_LOGGING_WARNING", "These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>/home/weltweit/domains/weltweitmieten.com/public_html/jomres/temp/</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information." );
jr_define( "_JOMRES_COM_LOGGING_BOOKING", "Booking form logging (Booking engine logs) " );
jr_define( "_JOMRES_COM_LOGGING_GATEWAY", "Gateway logs (eg paypal etc) " );
jr_define( "_JOMRES_COM_LOGGING_REQUEST", "Request log (all incoming server requests)" );
jr_define( "_JOMRES_COM_LOGGING_SYSTEM", "Misc " );
jr_define( "_JOMRES_COM_LOGGING_JRPORTAL", "JR Portal (mainly for recording commission etc) " );
jr_define( "_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY", "Your enquiry..." );
jr_define( "_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE", "Booking form resource list show resource type image" );
jr_define( "_JOMRES_COM_A_LISTLIMIT", "Business List limit" );
jr_define( "_JOMRES_COM_A_LISTLIMIT_DESC", "The number of businesses to show on a page after a search" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE", "Integrated search feature" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC", "The Jomres integrated search feature allows your users to search through Jomres businesses according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don't want to use Joomla search modules, or for other CMS users who's CMS doesn't have it's own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn't very pretty. That's because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>JOMRES_TEMPLATEPATH_FRONTEND</b> " );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE", "Activate this feature?" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC", "If this feature is enabled, then any call to Jomres that shows the business list will mean that the search options are also shown." );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS", "Use columns" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC", "Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS", "Feature columns" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC", "The number of feature icons that can be shown before a br is inserted to go to next row." );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO", "Search region by select combo dropdown" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC", "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below." );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME", "ค้นหาจากชื่อธุรกิจ" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC", "แสดงการค้นหา โดยการป้อนข้อมูลชื่อธุรกิจ" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN", "แสดงเป็นรายการแบบ dropdown?" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC", "การตั้งค่านี้เพื่อไม่ให้แสดงรายการเป็นการเชื่อมโยง" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION", "ค้นหา โดยเลือกเมือง/ภูมิภาค" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC", "แสดงการค้นหา โดยการป้อนข้อมูลเขต" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN", "แสดงเป็นรายการแบบdropdown?" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC", "การตั้งค่านี้เพื่อไม่ให้แสดงรายการเป็นการเชื่อมโยง" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE", "ค้นหา โดยชนิดของธุรกิจ" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC", "แสดงการค้นหา โดยการป้อนข้อมูลชนิดของธุรกิจ" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN", "แสดงเป็นรายการแบบ dropdown?" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC", "การตั้งค่านี้เพื่อไม่ให้แสดงรายการเป็นการเชื่อมโยง" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE", "ค้นหา โดยชนิดของประเภท" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC", "แสดงการค้นหา โดยการป้อนข้อมูลชนิดของประเภท" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN", "แสดงเป็นรายการแบบ dropdown?" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC", "การตั้งค่านี้เพื่อไม่ให้แสดงรายการเป็นการเชื่อมโยง" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES", "โดยคุณลักษณะการค้นหา" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC", "แสดงการค้นหาโดยใส่คุณลักษณะ" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN", "แสดงเป็นรายการแบบ dropdown?" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC", "การตั้งค่านี้ไม่ถึงมีการแสดงรายการเป็นการแนะนำเครื่องมือรูปและกล่องกาเครื่องหมาย" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION", "ค้นหา โดยคำอธิบาย" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC", "แสดงการค้นหา โดยป้อนคำอธิบาย" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY", "ค้นหา ว่าง" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC", "แสดงการค้นหา โดยการป้อนข้อมูลว่าง" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES", "ค้นหาตามช่วงราคา" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC", "แสดงการค้นหา โดยการป้อนข้อมูลของช่วงราคา" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS", "ทีละช่วงราคา" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC", "Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here." );
jr_define( "_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC", "By default, if a business is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search." );
jr_define( "_JOMRES_COM_A_CRON_TITLE", "Cron job settings and logs" );
jr_define( "_JOMRES_COM_A_CRON_DESC", "Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling." );
jr_define( "_JOMRES_COM_A_CRON_IMMEDIATERUN", "Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below." );
jr_define( "_JOMRES_COM_A_CRON_METHOD", "Method" );
jr_define( "_JOMRES_COM_A_CRON_METHOD_DESC", "If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1&secret=" . base64_encode(get_showtime("secret")) . "> /dev/null</i>" );
jr_define( "_JOMRES_COM_A_CRON_LOGGING", "Display logging in the browser" );
jr_define( "_JOMRES_COM_A_CRON_LOGGING_DESC", "Only works if the method is set to Minicomponent." );
jr_define( "_JOMRES_COM_A_CRON_LOGGINGENABLED", "Logging enabled" );
jr_define( "_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC", "Set this to Yes for logging to be enabled. The results of the logs will be output below." );
jr_define( "_JOMRES_COM_A_CRON_VERBOSELOGS", "Verbose logging" );
jr_define( "_JOMRES_COM_A_CRON_VERBOSELOGS_DESC", "Lots of logging output" );
jr_define( "_JOMRES_COM_TEMPLATEEDITING_TITLE", "Template Editing" );
jr_define( "_JOMRES_COM_TEMPLATEEDITING_DESC", "This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it." );
jr_define( "_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME", "Template Name" );
jr_define( "_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED", "Template has been customised?" );
jr_define( "_JOMRES_COM_CUSTOMFIELDS_TITLE", "Custom fields" );
jr_define( "_JOMRES_COM_CUSTOMFIELDS_DESC", "Here you can define simple custom fields that will be shown in the booking form." );
jr_define( "_JOMRES_COM_CUSTOMFIELDS_FIELDNAME", "Fieldname (no spaces)" );
jr_define( "_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE", "Default value" );
jr_define( "_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION", "Description" );
jr_define( "_JOMRES_COM_CUSTOMFIELDS_REQUIRED", "Required" );
jr_define( "_JOMRES_COM_MR_EXTRA_QUANTITY", "Maximum Quantity" );
jr_define( "_JOMRES_COM_MR_EXTRA_QUANTITY_DESC", "If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require." );
jr_define( "_JRPORTAL_INVOICES_ISSUE", "ออกใบแจ้งหนี้" );
jr_define( "_JRPORTAL_TAXRATES_TITLE", "อัตราภาษี" );
jr_define( "_JRPORTAL_TAXRATES_CODE", "รหัสภาษี" );
jr_define( "_JRPORTAL_TAXRATES_DESCRIPTION", "คำอธิบายราคา" );
jr_define( "_JRPORTAL_TAXRATES_CANNOTDELETE", "คุณไม่สามารถลบอัตราภาษีนี้" );
jr_define( "_JRPORTAL_TAXRATES_RATE", "ราคา" );
jr_define( "_JRPORTAL_INVOICES_TITLE", "ใบแจ้งหนี้" );
jr_define( "_JRPORTAL_INVOICES_STATUS_UNPAID", "จ่ายค่า" );
jr_define( "_JRPORTAL_INVOICES_STATUS_PAID", "ชำระ" );
jr_define( "_JRPORTAL_INVOICES_STATUS_CANCELLED", "การยกเลิก" );
jr_define( "_JRPORTAL_INVOICES_STATUS_PENDING", "อยู่ระหว่างการพิจารณา" );
jr_define( "_JRPORTAL_INVOICES_USER", "ผู้ใช้" );
jr_define( "_JRPORTAL_INVOICES_STATUS", "สถานะ" );
jr_define( "_JRPORTAL_INVOICES_RAISED", "ขึ้น" );
jr_define( "_JRPORTAL_INVOICES_DUE", "ครบกำหนด" );
jr_define( "_JRPORTAL_INVOICES_SUBSCRIPTION", "สมัคร" );
jr_define( "_JRPORTAL_INVOICES_INITTOTAL", "รวมค้างชำระ" );
jr_define( "_JRPORTAL_INVOICES_RECUR_TOTAL", "ผลรวมที่เกิดซ้ำ" );
jr_define( "_JRPORTAL_INVOICES_RECUR_FREQUENCY", "ความถี่การเกิดซ้ำ" );
jr_define( "_JRPORTAL_INVOICES_RECUR_DOMONTH", "วันที่เกิดขึ้นประจำเดือน" );
jr_define( "_JRPORTAL_INVOICES_CURRENCYCODE", "รหัสสกุลเงิน" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS", "ลำดับรายการ" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_NAME", "ชื่อ" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION", "คำอธิบาย" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE", "ราคาเริ่มต้น" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY", "คุณลักษณะเริ่มต้น" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT", "ส่วนลดเริ่มต้น" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL", "ผลรวมเริ่มต้น" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE", "ราคาที่เกิดซ้ำ" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY", "ปริมาณที่เกิดซ้ำ" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT", "ส่วนลดที่เกิดซ้ำ" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL", "ผลรวมที่เกิดซ้ำ" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE", "รหัสภาษี" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION", "คำอธิบายภาษี" );
jr_define( "_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE", "อัตราภาษี" );
jr_define( "_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE", "การตั้งค่าใน Paypal" );
jr_define( "_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE", "รหัสสกุลเงิน (เช่น EUR)" );
jr_define( "_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX", "ใช้ sandbox?" );
jr_define( "_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL", "อีเมลล์ ที่อยู่ของ Paypal" );
jr_define( "_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES", "Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;http://weltweitmieten.com/index.php?option=com_jomres&tmpl=".get_showtime("tmplcomponent")."&jrajax=1&no_html=1&Itemid=107&lang=de&task=completebk" );
jr_define( "_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY", "This invoice is now due. Please click the button to be taken to paypal." );
jr_define( "_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE", "Override standard Jomres gateway settings?" );
jr_define( "_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC", "If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration." );
jr_define( "_JRPORTAL_INVOICES_SHOWINVOICES", "แสดงใบแจ้งหนี้ของฉัน" );
jr_define( "_JRPORTAL_COUPONS_TITLE", "คูปองส่วนลด" );
jr_define( "_JRPORTAL_COUPONS_DESC", "Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself." );
jr_define( "_JRPORTAL_COUPONS_CODE", "รหัสคูปอง" );
jr_define( "_JRPORTAL_COUPONS_VALIDFROM", "เริ่มใช้เมื่อ" );
jr_define( "_JRPORTAL_COUPONS_VALIDTO", "ใช้ได้ถึง" );
jr_define( "_JRPORTAL_COUPONS_AMOUNT", "ยอดเงินส่วนลด" );
jr_define( "_JRPORTAL_COUPONS_ISPERCENTAGE", "ส่วนลดเป็นเปอร์เซ็นต์" );
jr_define( "_JRPORTAL_COUPONS_ROOMONLY", "ประเภทเท่านั้น" );
jr_define( "_JRPORTAL_COUPONS_ROOMONLY_DESC", "Discount is only applied to the cost of the resource. If No, then the discount is applied to the entire cost of the booking." );
jr_define( "_JRPORTAL_COUPONS_SQLERROR", "Sql error when trying to delete/insert a coupon" );
jr_define( "_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS", "ถ้าคุณมีรหัสคูปอง กรุณาใส่ลงในกล่อง และคลิกการ " );
jr_define( "_JOMRES_AJAXFORM_COUPON_APPLYBUTTON", "บันทึกคูปอง" );
jr_define( "_JOMRES_AJAXFORM_COUPON_COUPONSAVED", "บันทึกการจองโดยคูปอง" );
jr_define( "_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND", "ไม่พบหมายเลขคูปอง" );
jr_define( "_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE", "มูลค่าส่วนลดคูปอง" );
jr_define( "_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE", "ส่วนลดในการจอง ตั้งค่าคูปองรหัส/ส่วนลด/มูลค่าคูปอง:" );
jr_define( "_JOMRES_COM_CACHING", "Use the Jomres caching feature?" );
jr_define( "_JOMRES_COM_CACHING_DESC", "Set this to No to disable the Jomres caching feature." );
jr_define( "_JOMRES_COM_CHOOSELANGUAGES", "เลือกภาษา" );
jr_define( "_JOMRES_COM_CHOOSELANGUAGES_INFO", "เลือกตัวเลือกภาษาการแสดงในรายการแบบ dropdown" );
jr_define( "_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN", "แสดงรายการแบบ dropdown เพื่อเลือกภาษาหรือไม่ ?" );
jr_define( "_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS", "ออกจากการจอง และยกเลิกการจอง" );
jr_define( "_JRPORTAL_NEWUSER_DEAR", "เรียน" );
jr_define( "_JRPORTAL_NEWUSER_THANKYOU", "ขอบคุณสำหรับการลงทะเบียน" );
jr_define( "_JRPORTAL_NEWUSER_USERNAME", "ชื่อผู้ใช้ของคุณคือ:" );
jr_define( "_JRPORTAL_NEWUSER_PASSWORD", "รหัสผ่านของคุณคือ:" );
jr_define( "_JRPORTAL_NEWUSER_LOG_IN", "กรุณาล็อกอินเพื่อดูการจองของคุณ" );
jr_define( "_JOMRES_MR_AUDIT_UPDATE_COUPON", "คูปองที่บันทึกไว้" );
jr_define( "_JOMRES_MR_AUDIT_DELETE_COUPON", "ลบคูปอง" );
jr_define( "_JOMRES_COM_GROWL", "ใช้ Jomres ส่งข้อความ" );
jr_define( "_JOMRES_COM_GROWL_DESC", "Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature." );
jr_define( "_JRPORTAL_SMS_CLICKATELL_TITLE", "Jomres -> Clickatell SMS" );
jr_define( "_JRPORTAL_SMS_CLICKATELL_USERNAME", "ชื่อผู้ใช้" );
jr_define( "_JRPORTAL_SMS_CLICKATELL_PASSWORD", "รหัสผ่าน" );
jr_define( "_JRPORTAL_SMS_CLICKATELL_APIID", "API id" );
jr_define( "_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER", "แจ้งหมายเลขมือถือ" );
jr_define( "_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC", "Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone." );
jr_define( "_JRPORTAL_SMS_CLICKATELL_TABTITLE", "ข้อความ" );
jr_define( "_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS", "
<b>Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.</b>
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
<b>Step 1 - register for a Clickatell account</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Step 2 - add a registered API connection (sub-product)</b><br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select \"Manage my Products\" from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to http://weltweitmieten.com/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
" );
jr_define( "_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED", "แสดงรายการประเภทของแบบฟอร์มการจองห้องพักถูกปิดใช้งานการเข้าถึง" );
jr_define( "_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE", "แบบฟอร์มจองประเภทได้จำนวนคนสูงสุด" );
jr_define( "_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING", "Please note that resource prices listed are estimates and the full price of the booking will not be calculated until you have added a resource or resources to your selection." );
jr_define( "_JOMRES_LASTEDITED_DB", "แบบฐานข้อมูลที่แก้ไขครั้งล่าสุด" );
jr_define( "_JOMRES_LASTEDITED_DISK", "แบบดิสก์แก้ไขครั้งล่าสุด" );
jr_define( "_JOMRES_LASTEDITED_WARNINGICON", "คำเตือนเกี่ยวกับแบบฐานข้อมูล" );
jr_define( "_JOMRES_LASTEDITED_WARNINGICON_TEXT", "แบบฐานข้อมูลอาจจะล้าสมัย" );
jr_define( "_JOMRES_LASTEDITED_WARNING", "If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features." );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE", "สมัครแพคเกจ" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME", "ชื่อ" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION", "คำอธิบาย" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED", "การเผยแพร่" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY", "ความถี่" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD", "ระยะเวลาทดลองใช้" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT", "จำนวนทดลอง" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT", "จำนวนเต็ม" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT", "จำกัดประเภท" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT", "จำกัดธุรกิจ" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC", "ความถี่: M/Q/B/A รายเดือน/รายไตรมาส/ครึ่งปี/รายปี" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC", "ระยะทดลอง: เป็นจำนวนเต็มที่ป้อน 0 (ศูนย์) การตั้งค่า 1 สำหรับหนึ่งเดือน, 2 เดือน ฯลฯ" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE", "สมัครสมาชิก" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC", "กรุณาป้อน/ปรับปรุงข้อมูลสมาชิกของคุณ โปรดทราบว่ามีขอบเขตข้อมูลทั้งหมดจำเป็นต้องใช้" );
jr_define( "_JRPORTAL_SUBSCRIBERS_FIRSTNAME", "ชื่อแรก" );
jr_define( "_JRPORTAL_SUBSCRIBERS_SURNAME", "นามสกุล" );
jr_define( "_JRPORTAL_SUBSCRIBERS_ADDRESS", "ที่อยู่" );
jr_define( "_JRPORTAL_SUBSCRIBERS_COUNTRY", "ประเทศ" );
jr_define( "_JRPORTAL_SUBSCRIBERS_POSTCODE", "รหัสไปรษณีย์" );
jr_define( "_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1", "คุณต้องสมัครสมาชิกที่ถูกต้องในการสร้างธุรกิจใหม่ บัดนี้ในเวลา คุณได้สั่งซื้อสำหรับสมาชิก" );
jr_define( "_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2", " <i>published</i> business(s). " );
jr_define( "_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3", "You can increase the number of businesses you can create by <a href='index.php?option=com_jomres&Itemid=107&lang=de&task=list_subscription_packages'>purchasing more subscription packages here.</a>" );
jr_define( "_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4", " You have used " );
jr_define( "_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5", " business slots. " );
jr_define( "_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6", "To see a list of your current businesses click <a href='index.php?option=com_jomres&Itemid=107&lang=de&task=listyourbusinesses'>here</a>. " );
jr_define( "_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7", "To see a list of the current subscription packages available, click <a href='index.php?option=com_jomres&Itemid=107&lang=de&task=list_subscription_packages'>here</a>. " );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR", "Unfortunately, you cannot publish this business as you have reached your maximum number of available business slots." );
jr_define( "_JRPORTAL_SUBSCRIBERS_SUBSCRIBED", "Thank you for creating a subscription to list your business on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='index.php?option=com_jomres&Itemid=107&lang=de&task=new_property'>click here to continue creating your business(s).</a>" );
jr_define( "_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE", "We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_USE", "Use subscription handling functionality" );
jr_define( "_JOMRES_COM_NEWUSER", "Create new user on booking" );
jr_define( "_JOMRES_COM_NEWUSER_DESC", "Create new user account on unregistered user booking. (Joomla only)" );
jr_define( "_JOMRES_CLICKTOREGISTER", "Click here to register your business" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE", "Active subscriptions" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID", "Gateway subscription id" );
jr_define( "_JRPORTAL_NEWUSER_SUBJECT", "Thank you for your booking - new user details follow" );
jr_define( "_JOMRES_LATLONG_DESC", "Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude." );
jr_define( "_JOMRES_CONTROLPANEL", "Control Panel" );
jr_define( "_JOMRES_COM_FAUXHEADERS", "Output Jomres javascript headers into the body of the html?" );
jr_define( "_JOMRES_COM_FAUXHEADERS_DESC", "Set this to Yes if you are having problems with mootools and Jomres's jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn't valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other." );
jr_define( "_JOMRES_MANAGER_SHOWINVOICE", "แสดงใบแจ้งหนี้" );
jr_define( "_JOMRES_MANAGER_SHOWINVOICES", "แสดงใบแจ้งหนี้" );
jr_define( "_JOMRES_USER_LISTMYPROPERTY", "เพิ่มธุรกิจของฉันลงในเว็บไซต์นี้" );
jr_define( "_JOMRES_WARNINGS_DANGERWILLROBINSON", "คำเตือน:" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES", "You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID", "Sorry, but that package ID is not recognised." );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE", "Sorry, you are already subscribed to a free package, you cannot subscribe to that package again." );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL", " Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term" );
jr_define( "_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS", "My Account" );
jr_define( "_JOMRES_COM_YOURBUSINESS", "Your business details" );
jr_define( "_JOMRES_COM_YOURBUSINESS_NAME", "business name" );
jr_define( "_JOMRES_COM_YOURBUSINESS_VATNO", "VAT number" );
jr_define( "_JOMRES_COM_YOURBUSINESSADDRESS", "Building number" );
jr_define( "_JOMRES_COM_A_TAX_WARNING2", "<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>" );
jr_define( "_JOMRES_INVOICE_NUMBER", "Invoice No. " );
jr_define( "_JOMRES_FRONT_BLACKBOOKING_DESC_SRP", "Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the \"apply\" button to re-check availability. <br/> 
<br/> 
If the business has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out." );
jr_define( "_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK", "Sorry, you cannot black book this business for those dates." );
jr_define( "_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK", "You can blackbook this business for those dates." );
jr_define( "_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES", "Your business is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. " );
jr_define( "_JOMRES_WARNINGS_TARIFFS_NOTARIFFS", "You don't have any tariffs configured yet, you will not be able take any bookings for your business." );
jr_define( "_JOMRES_EDITINGMODE_ON", "Editing mode on" );
jr_define( "_JOMRES_EDITINGMODE_OFF", "Editing mode off" );
jr_define( "_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE", "Charge variable deposits?" );
jr_define( "_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC", "Variable deposits allow you to define if you'd like to charge the full amount if the booking's arrival date is within N days from \"today\". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above." );
jr_define( "_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS", "The number of days, within which the full amount will be charged as a deposit." );
jr_define( "_JOMRES_CONTACTOWNER_TO_ADMIN", "Send Contact Owner emails to Alternative address?" );
jr_define( "_JOMRES_CONTACTOWNER_TO_ADMIN_DESC", "Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the business configuration area." );
jr_define( "_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE", "Alternative address for Contact Owner emails." );
jr_define( "_JOMRES_CONFIRMATION_EMAIL_SENT", "Confirmation email has been sent. You may close this window now." );
jr_define( "_JOMRES_REALESTATE_TITLE", "Real estate listing" );
jr_define( "_JOMRES_REALESTATE_YESNO", "Is this business a for sale listing?" );
jr_define( "_JOMRES_REALESTATE_YESNO_DESC", "Select Yes if you are selling the business, select No if it is a listing where you will be offering short term rentals and will be using this system for taking bookings." );
jr_define( "_JOMRES_FRONT_MR_MENU_CONTACT_AGENT", "Contact agent" );
jr_define( "_JOMRES_INVOICE_MARKASPAID", "Mark invoice as paid" );
jr_define( "_JOMRES_INVOICE_MARKEDASPAID", "Invoice marked as paid" );
jr_define( "_JOMRES_APIKEY_REMAKE", "Make new API key" );
jr_define( "_JOMRES_AUTOTRANSLATE_TITLE", "Use Google for initial translations?" );
jr_define( "_JOMRES_AUTOTRANSLATE_DESC", "This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google's translation tool to automatically set up translations for a given business. Note that this feature sanitizes all input, so if you use a html editor for formatting your business details, then this will break that formatting.<br/>" );
jr_define( "_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE", "Is this a single business installation?" );
jr_define( "_JOMRES_SINGLEPROPERTYINSTALLATION_DESC", "If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of businesses, just takes the guest to the booking form for the first business in the system. Business managers also will not see see the Business Details preview button or the Add new business button. Ideal if you only want to list one business and take bookings for it.<br/>" );
jr_define( "_JOMRES_HTMP_PURIFIER", "Use HTML purifier functionality?" );
jr_define( "_JOMRES_HTMP_PURIFIER_DESC", "Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory." );
jr_define( "_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT", "Balance payment" );
jr_define( "_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE", "Balance" );
jr_define( "_JOMRES_WARNINGS_GLOBALEDITINGMODE", "Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don't you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href=\"http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode\" target=\"_blank\">the editing mode manual page</a> for more information on this subject." );
jr_define( "_JOMRES_SUPPORTKEY", "Support key" );
jr_define( "_JOMRES_SUPPORTKEY_DESC", "Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres." );
jr_define( "_JOMRES_PERSONAL_DISCOUNT", "Personal discount" );
jr_define( "_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO", "Limit business registration to one country?" );
jr_define( "_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC", "You can ensure that business registrations are limited to just one country by setting this option to Yes and setting the country in the following option." );
jr_define( "_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY", "Businesses are located in this country : " );
jr_define( "_JOMRES_JQUERYTHEME", "Jquery theme" );
jr_define( "_JOMRES_JQUERYTHEME_DESC", "Choose a jquery theme to use for the business details tabs." );
jr_define( "_JOMRES_PROPERTYNOTOUBLISHED", "We are sorry, but that business is not currently available." );
jr_define( "_JOMRES_REVIEWS", "Reviews" );
jr_define( "_JOMRES_REVIEWS_TITLE", "Review title" );
jr_define( "_JOMRES_REVIEWS_DATE", "posted on " );
jr_define( "_JOMRES_REVIEWS_NOREVIEWS", "There are no reviews for this business yet." );
jr_define( "_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST", "Would you like to be the first to review this business?" );
jr_define( "_JOMRES_REVIEWS_IAGREE", "I agree with this review" );
jr_define( "_JOMRES_REVIEWS_IDISAGREE", "I disagree with this review" );
jr_define( "_JOMRES_REVIEWS_AVERAGE_RATING", "Average Rating: " );
jr_define( "_JOMRES_REVIEWS_TOTAL_VOTES", "Total Votes:" );
jr_define( "_JOMRES_REVIEWS_ADD_REVIEW", "Add a new review." );
jr_define( "_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN", "You need to be logged in to post a review." );
jr_define( "_JOMRES_REVIEWS_REVIEWBODY", "Tell us what you think about this business : " );
jr_define( "_JOMRES_REVIEWS_REVIEWBODY_SAID", "This reviewer told us : " );
jr_define( "_JOMRES_REVIEWS_PROS", "Pros: " );
jr_define( "_JOMRES_REVIEWS_CONS", "Cons: " );
jr_define( "_JOMRES_REVIEWS_SUBMITTEDDATE", "Submitted On: " );
jr_define( "_JOMRES_REVIEWS_ALREADYREVIEWED", "You have already reviewed this business, you can't post another review about it." );
jr_define( "_JOMRES_REVIEWS_CANNOTREVIEW", "Sorry, but you are not allowed to post reviews on this site." );
jr_define( "_JOMRES_REVIEWS_CLICKTOSHOW", "Click to show reviews" );
jr_define( "_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW", " guests agree with this review. " );
jr_define( "_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW", " guests do not agree with this review." );
jr_define( "_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR", " guest agrees with this review. " );
jr_define( "_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR", "guest does not agree with this review." );
jr_define( "_JOMRES_REVIEWS_THANKS_FOR_CONFIRM", "Thank you for sharing your opinion of this review." );
jr_define( "_JOMRES_REVIEWS_ALREADY_CONFIRMED", "Thank you, but you have already shared your opinion of this review." );
jr_define( "_JOMRES_REVIEWS_COMPLETEALLFIELDS", "Please ensure that all fields have been filled." );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE", "Please summarise your review by entering a title" );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION", "Please enter a more complete review in the description box" );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS", "Please enter the good parts of your experience of being a guest at this business" );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS", "Please enter any negative thoughts you might have of your experience" );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1", "Please rate the hostpitality you received from the staff" );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2", "Please rate your opinion of the business\s locale" );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3", "Please provide your opinion of the cleanliness of the business" );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4", "Please rate the accommodation. Was it comfortable or threadbare" );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5", "Please provide your opinion of whether it was value for money" );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6", "Please rate the services" );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_SUMMARY", "Review summary" );
jr_define( "_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL", "Your experience in more detail" );
jr_define( "_JOMRES_REVIEWS_THANKS_FOR_REVIEW", "Thank you for submitting your review." );
jr_define( "_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED", "Thank you for submitting your review. It will be published soon by one of our hard working moderators." );
jr_define( "_JOMRES_REVIEWS_ADMIN_CONTROL", "Use Jomres review functionality?" );
jr_define( "_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH", "Automatically publish reviews?" );
jr_define( "_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC", "If you set this to No you will need to manually publish reviews" );
jr_define( "_JOMRES_REVIEWS_ADMIN_TESTMODE", "Set reviews to test mode?" );
jr_define( "_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC", "Normally business managers cannot review businesses. With test mode enabled, they can. Naturally this is not ideal in a production environment." );
jr_define( "_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO", "This is a list of all businesses. To see a business's reviews, click on that business. From there you will be able to publish or delete a review." );
jr_define( "_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED", "Number of unpublished reviews" );
jr_define( "_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL", "Total number of reviews" );
jr_define( "_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW", "Publish/Unpublish review" );
jr_define( "_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW", "ตรวจทานก่อนลบ" );
jr_define( "_JOMRES_REVIEWS_REPORT_REVIEW", "ตรวจทานก่อนรายงาน" );
jr_define( "_JOMRES_REVIEWS_REPORT_REVIEW_TITLE", "ตรวจทานรายงาน" );
jr_define( "_JOMRES_REVIEWS_REPORT_REVIEW_ERROR", "กรุณาใส่รายงานของคุณ" );
jr_define( "_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL", "See something in this review which is objectional or inaccurate? Report it and we will look into it for you." );
jr_define( "_JOMRES_REVIEWS_SUBMIT", "ส่ง" );
jr_define( "_JOMRES_REVIEWS_REPORT_CREATED_BY", "รายงานโดย" );
jr_define( "_JOMRES_REVIEWS_REPORT_INSTRUCTIONS", "Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review." );
jr_define( "_JOMRES_REVIEWS_RATING", "จัดอันดับ (1 =แย่ 10 =ดีเยี่ยม)" );
jr_define( "_JOMRES_REVIEWS_RATING_1", "บริเวณใกล้เคียง" );
jr_define( "_JOMRES_REVIEWS_RATING_2", "ที่ตั้ง" );
jr_define( "_JOMRES_REVIEWS_RATING_3", "ความสะอาด" );
jr_define( "_JOMRES_REVIEWS_RATING_4", "ที่พัก" );
jr_define( "_JOMRES_REVIEWS_RATING_5", "จำนวนเงิน" );
jr_define( "_JOMRES_REVIEWS_RATING_6", "บริการ" );
jr_define( "_JOMRES_REVIEWS_REVIEWED_BY", "ตรวจทานโดย:" );
jr_define( "_JOMRES_REVIEWS_CLICKTOHIDE", "ซ่อนความคิดเห็น" );
jr_define( "_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS", "Show Booking form in business details page?" );
jr_define( "_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC", "Set this to Yes to show the booking form in the business details page. If you set it to No, then a link will appear in the business details page instead pointing to the booking form." );
jr_define( "_JOMRES_COM_A_TAXINCLUSIVE", "Prices are gross?" );
jr_define( "_JOMRES_COM_A_TAXINCLUSIVE_DESC", "If the prices you enter into the system include tax, then select Yes. If they are not (i.e. Nett), select No." );
jr_define( "_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS", "ภาษีบริการ:" );
jr_define( "_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK", "The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate." );
jr_define( "_JOMRES_MICROMANAGE_PICKER_DATERANGES", "The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button." );
jr_define( "_JOMRES_MICROMANAGE_PICKER_DATERANGES_START", "ช่วงเริ่มต้น" );
jr_define( "_JOMRES_MICROMANAGE_PICKER_DATERANGES_END", "ช่วงท้าย" );
jr_define( "_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE", "อัตรา" );
jr_define( "_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET", "การตั้งอัตรา" );
jr_define( "_JOMRES_PARTNERS_TITLE", "Partners" );
jr_define( "_JOMRES_CALENDAR_TODAY", "วันนี้" );
jr_define( "_JOMRES_CALENDAR_PREV", "ก่อนหน้านี้" );
jr_define( "_JOMRES_CALENDAR_NEXT", "ถัดไป" );
jr_define( "_JOMRES_CALENDAR_RTL", "false" );
jr_define( "_JOMRES_ROOMALLOCATIONS_ROOM", "ประเภท" );
jr_define( "_JOMRES_ROOMALLOCATIONS_GUESTS", "บุคคลทั่วไป" );
jr_define( "_JOMRES_ROOMALLOCATIONS_INFORMATION", "This how we have assigned your guest numbers to their resources. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments." );
jr_define( "_JOMRES_SANITY_CHECK_NOT_PUBLISHED", "Note that your business is not yet published, only you can see the business, site visitors will not see it" );
jr_define( "_JOMRES_PROPERTYLIST_FILTERS_DEFAULT", "Default search result order" );
jr_define( "_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC", "Change this option to change the order that search results are presented by default." );
jr_define( "_JOMRES_PROPERTYLIST_FILTERS_SHOW", "Show search result order dropdown" );
jr_define( "_JOMRES_ROOMMSLIST_STYLE", "Resources list style" );
jr_define( "_JOMRES_ROOMMSLIST_STYLE_DESC", "In the booking form, using the \"classic\" resources list style you offer individual resources to guests. With the resource type view, guests choose the number of resources of type X (eg. 2 x doubles) instead" );
jr_define( "_JOMRES_ROOMMSLIST_STYLE_CLASSIC", "Classic" );
jr_define( "_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES", "Resource types" );
jr_define( "_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START", "(Re)checking availability" );
jr_define( "_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS", "Rebuilding available resources list" );
jr_define( "_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS", "Calculating totals" );
jr_define( "_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE", "Finished form update" );
jr_define( "_JOMRES_COM_CALENDAR_STARTDAY", "Calendar week start day, Sunday or Monday" );
jr_define( "_JOMRES_REVIEWS_ADMIN_GUESTSONLY", "Only business guests can review?" );
jr_define( "_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC", "Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this business." );
jr_define( "_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING", "Per resource" );
jr_define( "_JOMRES_MAX_GUESTS_PER_ROOM", "Guests per resource : " );
jr_define( "_JOMRES_MAX_GUESTS_PER_BOOKING", "Guests per booking : " );
jr_define( "_JOMRES_NUMBER_OF_ROOMS", "Number of resources" );
jr_define( "_JOMRES_MICROMANAGE_TARIFFDEFAULT", "Tariff default price" );
jr_define( "_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC", "This only applies to new tariffs" );
jr_define( "_JOMRES_MICROMANAGE_YEARSTOSHOW", "Years to show" );
jr_define( "_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC", "Defines the number of years to show when editing a micromanage tariff" );
jr_define( "_JRPORTAL_MONTHS_LONG_0", "มกราคม" );
jr_define( "_JRPORTAL_MONTHS_LONG_1", "กุมภาพันธ์" );
jr_define( "_JRPORTAL_MONTHS_LONG_2", "มีนาคม" );
jr_define( "_JRPORTAL_MONTHS_LONG_3", "เมษายน" );
jr_define( "_JRPORTAL_MONTHS_LONG_4", "พฤษภาคม" );
jr_define( "_JRPORTAL_MONTHS_LONG_5", "มิถุนายน" );
jr_define( "_JRPORTAL_MONTHS_LONG_6", "กรกฎาคม" );
jr_define( "_JRPORTAL_MONTHS_LONG_7", "สิงหาคม" );
jr_define( "_JRPORTAL_MONTHS_LONG_8", "กันยายน" );
jr_define( "_JRPORTAL_MONTHS_LONG_9", "ตุลาคม" );
jr_define( "_JRPORTAL_MONTHS_LONG_10", "พฤศจิกายน" );
jr_define( "_JRPORTAL_MONTHS_LONG_11", "ธันวาคม" );
jr_define( "_JOMRES_PROPERTYMANAGEMENTPROCESS", "Business management process" );
jr_define( "_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC", "There are different management processes depending on the way you want to list your business/business." );
jr_define( "_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL", "Rental" );
jr_define( "_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC", "Choose the rental option if you are booking out resources in a business (eg. Hotel/B&B/Villa/Apartment)" );
jr_define( "_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE", "Realestate/simple listing" );
jr_define( "_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC", "Choose the real estate option if you are not offering any booking functionality at all, (eg. A business/item for sale)" );
jr_define( "JOMRES_COM_A_MINIMALCONFIG_DESC", "Set this to Yes to reduce the number of options available to business managers in the General Configuration section. This is useful if you do not want business managers to play around with too many settings, instead you can edit jomres_config.php to define default business options." );
jr_define( "_JOMRES_AJAXFORM_EXTRAS_SELECT", "Please select an option for your booking" );
jr_define( "_JOMRES_COM_ALLOWHTMLEDITOR_DESC", "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>" );
jr_define( "_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT", "Fullscreen view" );
jr_define( "_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW", "Normal view" );
jr_define( "_JOMRES_COM_TIMEZONE_SWITCHER", "Show the timezone switcher in the business manager's toolbar?" );
jr_define( "_JOMRES_PARTNER_DISCOUNT", "Partner discount " );
jr_define( "_JOMRES_PARTNER_CHOOSE_SEARCHTITLE", "Search user" );
jr_define( "_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS", "Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign businesses and discounts to the user." );
jr_define( "_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE", "Existing partners" );
jr_define( "_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS", "Choose a partner to be taken to the partner administration page." );
jr_define( "_JOMRES_PARTNER_SHOW_TITLE", "Partner :" );
jr_define( "_JOMRES_PARTNER_SHOW_SEARCHTITLE", "Search for a business" );
jr_define( "_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS", "Enter a few characters from the business name and select a business.<br/> When you select the business you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself." );
jr_define( "_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES", "Current businesses" );
jr_define( "_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS", "Click on a business to edit the partner's discount settings for that business." );
jr_define( "_JOMRES_SUSPENSIONS_TITLE", "Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their businesses ) " );
jr_define( "_JOMRES_SUSPENSIONS_MANAGERLIST_INFO", "Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform business management functions and all of their businesses will be unpublished. Super business managers cannot be suspended." );
jr_define( "_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED", "This account has been suspended, it is not currently possible to administer your propert(ies) using this account." );
jr_define( "_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE", "Manager account suspended" );
jr_define( "_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE", "Manager account reinstated" );
jr_define( "_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL", "Please note that your business manager account has been suspended. You will not be able to perform any business management functions until the account has been restored." );
jr_define( "_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL", "Please note that your business manager account is now active. You may continue to perform any business management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you." );
jr_define( "_JOMCOMP_MYUSER_REMOVE", "เอาออกจากที่ชอบที่สุด" );
jr_define( "_JOMRES_DATA_ARCHIVE_TITLE", "Booking data archive" );
jr_define( "_JOMRES_DATA_ARCHIVE_TITLE_DESC", "The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table." );
jr_define( "_JOMRES_MY_ACCOUNT_EDIT", "แก้ไขบัญชี" );
jr_define( "_JOMRES_MANAGER_CHOOSE_SEARCHTITLE", "Search users" );
jr_define( "_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS", "To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of." );
jr_define( "_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE", "Existing managers" );
jr_define( "_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS", "Choose a manager to be taken to the manager administration page." );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER", "ค้นหาแขก" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC", "แสดงการค้นหา จำนวนแขก" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS", "ค้นหาตามดาว" );
jr_define( "_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC", "แสดงการค้นหาตามดาว" );
jr_define( "_JOMRES_SEARCH_GUESTNUMBER", "จำนวนแขก" );
jr_define( "_JOMRES_SEARCH_STARS", "จำนวนของดาว" );
jr_define( "_JRPORTAL_INVOICES_COMMISSION_TITLE", "ใบแจ้งหนี้" );
jr_define( "_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED", "จำนวนของธุรกิจ" );
jr_define( "_JOMRES_CONFIG_JQUERY", "Load Jomres jQuery library?" );
jr_define( "_JOMRES_CONFIG_JQUERY_DESC", "You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all." );
jr_define( "_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC", "Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend." );
jr_define( "_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC", "Thumbnails are created automatically for uploaded images." );
jr_define( "_JOMRES_COM_THUMBNAIL_SMALL_WIDTH", "Small thumbnails max width (px)." );
jr_define( "_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC", "Small thumbnails are used in the business list whereas medium sized thumbnails are used in the business header." );
jr_define( "_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT", "Small thumbnails max height (px)." );
jr_define( "_JOMRES_COM_THUMBNAIL_MED_WIDTH", "Medium thumbnails max width (px)." );
jr_define( "_JOMRES_COM_THUMBNAIL_MED_HEIGHT", "Medium thumbnails max height (px)." );
jr_define( "_JOMRES_TOUCHTEMPLATES", "Label Translations" );
jr_define( "_JRPORTAL_ROI_TAB", "ROI" );
jr_define( "_JRPORTAL_INVOICES_COMMISSION_USE", "Use commission functionality?" );
jr_define( "_JRPORTAL_INVOICES_COMMISSION_USE_DESC", "Set this to Yes to show the manager commission invoices which have been raised." );
jr_define( "_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS", "Manager bookings create commission invoices?" );
jr_define( "_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC", "If a manager makes a booking, does that also create a commission invoice line item?" );
jr_define( "_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT", "A new commission invoice has been raised" );
jr_define( "_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE", "A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first)." );
jr_define( "_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND", "Auto suspend managers where invoices are marked as Pending?" );
jr_define( "_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD", "Auto suspend threashold" );
jr_define( "_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC", "This threashold is the number of days that a manager has to pay an invoice before they are suspended and their businesses unpublished." );
jr_define( "_JOMRES_COM_LANGUAGE_CONTEXT", "Language context" );
jr_define( "_JOMRES_COM_LANGUAGE_CONTEXT_DESC", 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to \"Yacht Brokerage\" then Jomres will first find the current language, then search the /'.JOMRES_ROOT_DIRECTORY.'/languages directory for a sub-directory called \"yachtbrokerage\". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /'.JOMRES_ROOT_DIRECTORY.'/languages directory. Note that if you create a new property type, then a copy of the current language file is made in a subdirectory under /'.JOMRES_ROOT_DIRECTORY.'/language with a name that reflects the new property type\'s description.' );
jr_define( "_JOMRES_COM_ADVANCED_SITE_CONFIG", "Advanced site config" );
jr_define( "_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC", "Set this option to Yes if you want to use the advanced site configuration options. If you're just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as \"admin\" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable." );
jr_define( "_JOMRES_CONFIG_JQUERY_UI", "Load Jomres jQuery UI library?" );
jr_define( "_JOMRES_SORTORDER_PRICE_DESC", "ราคา (สูงสุด)" );
jr_define( "_JOMRES_SORTORDER_PRICE_ASC", "ราคา (ต่ำสุด)" );
jr_define( "_JOMRES_BOOKINGFORM_PRICINGOUTPUT", "Price summary and estimates should be priced as per night/per week/per month?" );
jr_define( "_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY", "ต่อคืน" );
jr_define( "_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY", "ต่อสัปดาห์" );
jr_define( "_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY", "ต่อเดือน" );
jr_define( "_JOMRES_BOOKINGFORM_PERPERSON", "ต่อคน" );
jr_define( "_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS", "สัปดาห์ที่" );
jr_define( "_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS", "เดือนที่" );
jr_define( "_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS", "How should the search option for people numbers work?" );
jr_define( "_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC", "Affects all search modules. When using the guest number search feature, should the search feature look for properties who's tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? " );
jr_define( "_JOMRES_PAYPAL_REDIRECTMESSAGE", "Please wait, your order is being processed and you will be redirected to the Paypal website." );
jr_define( "_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED", "If you are not automatically redirected to Paypal within 5 seconds..." );
jr_define( "_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE", "คลิกที่นี่" );
jr_define( "_JRPORTAL_COUPONS_BOOKING_VALIDFROM", "เริ่มจองก่อน" );
jr_define( "_JRPORTAL_COUPONS_BOOKING_VALIDTO", "จองได้ถึง" );
jr_define( "_JRPORTAL_COUPONS_GUESTNAME", "ชื่อ แขก" );
jr_define( "_JRPORTAL_COUPONS_DESC_478", "Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only." );
jr_define( "_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK", "With your coupon, this booking has been discounted from " );
jr_define( "_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO", " to " );
jr_define( "_JOMRES_CONFIG_JQUERY_UI_DESC", "Set this to No to disable loading of both the Jquery UI javascript and CSS files." );
jr_define( "_JOMRES_CONFIG_JQUERY_UI_CSS", "Load Jomres jQuery UI CSS library?" );
jr_define( "_JOMRES_CONFIG_JQUERY_UI_CSS_DESC", "Set this to No to disable only the jquery UI CSS file." );
jr_define( "_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX", "Total inc tax" );
jr_define( "_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY", "Unpublished property" );
jr_define( "_JOMRES_CONVERSION_TITLE", "Use conversion functionaity" );
jr_define( "_JOMRES_CONVERSION_TITLE_DESC", "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets." );
jr_define( "_JOMRES_CONVERSION_DISCLAIMER", "We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk." );
jr_define( "_JOMRES_JAVASCRIPT_CACHING_TITLE", "Use javascript caching?" );
jr_define( "_JOMRES_JAVASCRIPT_CACHING_DESC", "Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. " );
jr_define( "_JOMRES_HISTORIC_GUESTS_SHOW", "List historic and current guests" );
jr_define( "_JOMRES_HISTORIC_GUESTS_NOSHOW", "Current guests only" );
jr_define( "_JOMRES_CURRENCYCONVERSION_TAB", "Currency conversion/currency codes" );
jr_define( "_JOMRES_IP_DETECTION_API_KEY_TITLE", "IP Detection API Key" );
jr_define( "_JOMRES_IP_DETECTION_API_KEY_DESC", "To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor's country, however you need to register for an API key at <a href=\"http://ipinfodb.com/register.php\" target=\"_blank\">IPinfoDB</a> first." );
jr_define( "_JOMRES_DEBUGGING_TAB", "Debugging" );
jr_define( "_JOMRES_BOOKINGORM_MODALPOPUP", "Show the booking form in a modal popup?" );
jr_define( "_JOMRES_BOOKINGORM_MODALPOPUP_DESC", "If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they're hidden behind the popup)" );
jr_define( "_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION", "Totals panel location" );
jr_define( "_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC", "In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It's likely that you'll need to experiment with different settings to find something that works well in your chosen template. " );
jr_define( "_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX", "ที่พักไม่รวมภาษี" );
jr_define( "_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX", "ที่พักรวมภาษี" );
jr_define( "_JOMRES_AJAXFORM_BILLING_TAX_ACCOM", "Resource tax:" );
jr_define( "_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM", "Open the booking form" );
jr_define( "_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS", "Back to property details" );
jr_define( "_JOMRES_COM_MR_EXTRA_AUTO_SELECT", "Automatically Selected?" );
jr_define( "_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE", "ยอดคงเหลือ (หลังจากชำระเงินมัดจำ)" );
jr_define( "_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER", "Filter resources based on their features." );
jr_define( "_JOMRES_DATEPERIOD_LATESTBOOKING", "การจองล่าสุด" );
jr_define( "_JOMRES_DATEPERIOD_SECOND", "วินาที" );
jr_define( "_JOMRES_DATEPERIOD_MINUTE", "นาที" );
jr_define( "_JOMRES_DATEPERIOD_HOUR", "ชั่วโมง" );
jr_define( "_JOMRES_DATEPERIOD_DAY", "วัน" );
jr_define( "_JOMRES_DATEPERIOD_WEEK", "สัปดาห์" );
jr_define( "_JOMRES_DATEPERIOD_MONTH", "เดือน" );
jr_define( "_JOMRES_DATEPERIOD_YEAR", "ปี" );
jr_define( "_JOMRES_DATEPERIOD_DECADE", "decade" );
jr_define( "_JOMRES_DATEPERIOD_S", "s" );
jr_define( "_JOMRES_DATEPERIOD_AGO", "ที่แล้ว" );
jr_define( "_JOMRES_DATEPERIOD_FROMNOW", "จากนี้" );
jr_define( "_JOMRES_WHOLEDAY_TITLE", "จองทั้งวัน?" );
jr_define( "_JOMRES_WHOLEDAY_DESC", "By default the system bookings resources out by the night, so a booking from the first of January 2013 to the 2nd of January 2013 covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days." );
jr_define( "_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY", "ต่อวัน" );
jr_define( "_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY", "ต่อคนต่อวัน" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY", "รับ" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY", "กลับ" );
jr_define( "_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY", "วัน (s) ที่" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY", "Return date incorrect" );
jr_define( "_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY", "The booking is too short. There needs to be at least this many days between the pickup and return dates:" );
jr_define( "_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY", "Pickup/Return minimum interval" );
jr_define( "_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY", "The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that's automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period." );
jr_define( "_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY", "Price summary and estimates should be priced as per day/per week/per month?" );
jr_define( "_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY", "ต่อวัน" );
jr_define( "_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY", "หนึ่งวันก่อนรับ" );
jr_define( "_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY", "The minimum number of days that must elapse, from \"today\", before the pickup date." );
jr_define( "_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY", "Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today's date" );
jr_define( "_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY", "Show return date input?" );
jr_define( "_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY", "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date." );
jr_define( "_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY", "If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that \"defined pickup day\" isn't set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar." );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY", "Pre-defined pickup day" );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY", "Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on." );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY", "กำหนดวันรับแน่นอน" );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY", "Fixed pickup dates recurr: " );
jr_define( "_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY", "When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available)." );
jr_define( "_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY", "ต่อคน ต่อวัน" );
jr_define( "_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY", "Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis" );
jr_define( "_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY", "Variable deposits allow you to define if you'd like to charge the full amount if the booking's pickup date is within N days from \"today\". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above." );
jr_define( "_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY", "Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn't busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected." );
jr_define( "_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY", "Threshold (number of days between pickup date and today)" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY", "รอการยืนยันรับ" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY", "รับวันนี้" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY", "รับ" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY", "กลับวันนี้" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY", "ส่งคืนเกินกำหนด" );
jr_define( "_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY", "ไม่มีรับ" );
jr_define( "_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY", "วัน" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY", "ทำเครื่องหมายสำรองที่นั่งเลือก" );
jr_define( "_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY", "ทำเครื่องหมายในการส่งคืนการจอง" );
jr_define( "_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY", "ทำการสำรองที่นั่งเลือกเครื่องหมาย" );
jr_define( "_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY", "ทำเครื่องหมายในการส่งคืนการจอง" );
jr_define( "_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY", "ราคาต่อวัน:" );
jr_define( "_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY", "จำนวนวัน:" );
jr_define( "_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL", "ผลรวมของที่พัก" );
jr_define( "_JOMCOMP_AMEND_OVERRIDE_SAVE", "บันทึก(แทน)" );
jr_define( "_JOMRES_BOOKINGFORMWIDTH", "ความกว้างของแบบฟอร์มการจองใน px" );
jr_define( "_JOMRES_BOOKINGORM_SLIDERENABLED", "Allow the totals panel to slide down the booking form?" );
jr_define( "_JOMRES_BOOKINGORM_SLIDERENABLED_DESC", "The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device's browser then sliding is automatically disabled." );
jr_define( "_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS", "อีเมลล์ให้กับผู้ใช้ใหม่" );
jr_define( "_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC", "If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in." );
jr_define( "_JOMRES_BOOKINGORM_TAX_OUTPUT", "Show tax output in the booking form totals summary?" );
jr_define( "_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC", "Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No." );
jr_define( "_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD", "Cancellation Threashold" );
jr_define( "_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC", "Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date." );
jr_define( "_JOMRES_EDIT_PROFILE", "Edit Profile" );
jr_define( "_JOMRES_PROPERTY_TYPE_ASSIGNMENT", "Property type relationship" );
jr_define( "_JOMRES_IMAGE", "Image" );
jr_define( "_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT", "Business types that can show this feature" );
jr_define( "_JOMRES_CRATES_CLICKINITIAL", "Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their \"edit\" icon to view the business's statistics." );
jr_define( "_JRPORTAL_TAX_RATE_EDIT", "Edit Tax rate" );
jr_define( "_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT", "Edit Custom field" );
jr_define( "_JOMRES_LICENSESERVER_PASSWORD", "License server password" );
jr_define( "_JOMRES_LICENSESERVER_USERNAME", "License server username" );
jr_define( "_JOMRES_LICENSESERVER_USERNAME_DESC", "If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here." );
jr_define( "_JOMRES_VERSIONCHECK_THISJOMRESVERSION", "This Jomres version : " );
jr_define( "_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION", "Latest Jomres version" );
jr_define( "_JOMRES_VERSIONCHECK_VERSIONWARNING", "Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience." );
jr_define( "_JOMRES_PRODUCT_INFORMATION", "Welcome to Jomres, we hope you enjoy using Joomla's favourite booking system. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href=\"http://www.jomres.net/prices\" target=\"_blank\"> please visit our site</a> for information on how you can upgrade." );
jr_define( "_JOMRES_PRODUCT_INFORMATION2", "This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the \"Help\" section to the left, including the \"Getting Started\" page which will guide you through your first steps." );
jr_define( "_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY", "Active property" );
jr_define( "_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY", "Change your active property" );
jr_define( "_JOMRES_ROBBED_PORTALUI_CLICKINITIAL", "Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property." );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE", "Alternate SMTP Settings" );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_DESC", "Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here." );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_HOST", "Alternate Host" );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC", "Change this to your smtp mail server" );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_PORT", "Alternate Port" );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC", "Change this to your smtp port" );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL", "Alternate Protocol" );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC", "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know." );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH", "Use authentication" );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC", "If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used." );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME", "Alternate Username" );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC", "" );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD", "Alternate Password" );
jr_define( "_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC", "" );
jr_define( "_JOMRES_WARNING_SYSTEM_CACHE", "Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically." );
jr_define( "_JOMRES_QUICK_INFO", "ข้อมูลด่วน" );
jr_define( "_JOMRES_MENU_SHOW", "แสดง" );
jr_define( "_JOMRES_MENU_HIDE", "ซ่อน" );
jr_define( "_JOMRES_MENU_SHOW_TITLE", "Use the alternate menu layout?" );
jr_define( "_JOMRES_MENU_SHOW_DESC", "Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements." );
jr_define( "_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT", "Default" );
jr_define( "_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY", "Anybody" );
jr_define( "_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED", "Registered" );
jr_define( "_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER", "Manager" );
jr_define( "_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER", "Super Manager" );
jr_define( "_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY", "Nobody" );
jr_define( "_JOMRES_ACCESS_CONTROL_TITLE", "Access control" );
jr_define( "_JOMRES_ACCESS_CONTROL_DESC", "This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often." );
jr_define( "_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST", "Receptionist" );
jr_define( "_JOMRES_ACCESS_CONTROL_CONFIG_TITLE", "Full Access Control" );
jr_define( "_JOMRES_ACCESS_CONTROL_CONFIG_DESC", "Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls." );
jr_define( "_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM", "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option." );
jr_define( "_JOMRES_ACCESS_CONTROL_TITLE_FULL", "Full Access control" );
jr_define( "_JOMRES_ACCESS_CONTROL_DESC_FULL", "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	" );
jr_define( "_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING", "Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied." );
jr_define( "_JOMRES_SHOWPROFILES_USERSWITHACCESS", "Users with admin rights to this property" );
jr_define( "_JOMRES_ADMIN_LISTALLUSERSINVOICES", "List all user's invoices" );
jr_define( "_JOMRES_DEBUGGING_SUBJECT", "Subject" );
jr_define( "_JOMRES_DEBUGGING_FULLNAME", "Your full name" );
jr_define( "_JOMRES_DEBUGGING_YOUREMAIL", "Your email address" );
jr_define( "_JOMRES_DEBUGGING_ISSUE", "Please describe your issue" );
jr_define( "_JOMRES_EXTRAS_MODELS_MODEL", "Model" );
jr_define( "_JOMRES_EXTRAS_MODELS_PARAMS", "Parameters" );
jr_define( "_JOMRES_EXTRAS_MODELS_FORCE", "Force" );
jr_define( "_JOMRES_METATITLE", "Meta title" );
jr_define( "_JOMRES_METADESCRIPTION", "Meta description" );
jr_define( "_JOMRES_FOUNDPROPERTIES", "Properties found" );
jr_define( "_JOMRES_REGISTRATION_STEP_1_OF_2", "Add your property : Step 1 of 2" );
jr_define( "_JOMRES_REGISTRATION_STEP_2_OF_2", "Add your property : Step 2 of 2" );
jr_define( "_JOMRES_MYPROPERTIES", "My businesses" );
jr_define( "_JOMRES_CART_TITLE", "My proposed bookings" );
jr_define( "_JOMRES_CART_INFO", "Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!" );
jr_define( "_JOMRES_CART_CONFIRM_BOOKINGS", "ยืนยันการจอง" );
jr_define( "_JOMRES_CART_OR", "หรือ" );
jr_define( "_JOMRES_CART_SAVEFORLATER", "บันทึกภายหลัง" );
jr_define( "_JOMRES_CART_NOBOOKINGS_SAVED", "You don't have any bookings saved yet." );
jr_define( "_JOMRES_CART_VIEWCART", "View cart" );
jr_define( "_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR", "Language file subdirectory" );
jr_define( "_JOMRES_DEFAULT_LAT_STARTPOINT", "Default Latitude Startpoint" );
jr_define( "_JOMRES_DEFAULT_LONG_STARTPOINT", "Default Longitude Startpoint" );
jr_define( "_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC", "In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?" );
jr_define( "_JOMRES_CLEARDATES", "I don't have any dates yet" );
jr_define( "_JOMRES_MOBILE_REDIRECT", "Redirect to frameless when on mobile devices?" );
jr_define( "_JOMRES_MOBILE_REDIRECT_DESC", "Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No." );
jr_define( "_JOMRES_SYSTEM_EMAILS", "Emails sent from which address?" );
jr_define( "_JOMRES_SYSTEM_EMAILS_DESC", "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails." );
jr_define( "_JOMRES_CSS_CACHING_TITLE", "Use css caching?" );
jr_define( "_JOMRES_CSS_CACHING_DESC", "" );
jr_define( "_JOMRES_JSCALENDAR_USECLEARCHECKBOX", "Search calendars show the clear dates checkbox?" );
jr_define( "_JOMRES_PROPERTYLIST_LAYOUT_LIST", "List view" );
jr_define( "_JOMRES_PROPERTYLIST_LAYOUT_TILE", "Photo view" );
jr_define( "_JOMRES_COMPARE", "การเปรียบเทียบ" );
jr_define( "_JOMRES_REMOVE", "เอาออก" );
jr_define( "_JOMRES_RETURN_TO_RESULTS", "กลับไปยังผลลัพธ์การค้นหา" );
jr_define( "_JOMRES_ADDTOSHORTLIST", "เพิ่ม shortlist" );
jr_define( "_JOMRES_REMOVEFROMSHORTLIST", "เอาออกจาก shortlist" );
jr_define( "_JOMRES_VIEWSHORTLIST", "ดู shortlist ของคุณ" );
jr_define( "_JOMRES_COOKIEPOLICY_TITLE", "Cookie Policy" );
jr_define( "_JOMRES_COOKIEPOLICY_DESC", "EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show favourites, search results etc). 
<br/>
Set this option to Yes to enact this policy." );
jr_define( "_JOMRES_COOKIEPOLICY_1", "Important: Cookie Policy" );
jr_define( "_JOMRES_COOKIEPOLICY_2", "We use cookies to help keep our site relevant and easy to use." );
jr_define( "_JOMRES_COOKIEPOLICY_3", "อ่านเพิ่มเติม..." );
jr_define( "_JOMRES_COOKIEPOLICY_4", "EU legislation requires that all websites clearly specify if cookies are being used and their purpose." );
jr_define( "_JOMRES_COOKIEPOLICY_5", "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site." );
jr_define( "_JOMRES_COOKIEPOLICY_6", "Yes, I accept the use of cookies in this way." );
jr_define( "_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST", "Deposit required is cost of the first night?" );
jr_define( "_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC", "Prices are calculated on a per night basis. Do you want the deposit to be one night's charge? If so, you can ignore the following options." );
jr_define( "_JOMRES_NOTHINGINSHORTLIST", "You haven't added any items to your favourites." );
jr_define( "_JOMRES_MOBILE_SETTINGS", "Mobile device settings" );
jr_define( "_JOMRES_SIMULATE_MOBILE", "Simulate mobile mode" );
jr_define( "_JOMRES_SIMULATE_MOBILE_DESC", "Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed." );
jr_define( "_JOMRES_SIMULATE_MOBILE_RESTRICTION", "Simulation IP" );
jr_define( "_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC", "You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1." );
jr_define( "_JOMRES_SAFEMODE", "Enable safe mode?" );
jr_define( "_JOMRES_SAFEMODE_DESC", "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality." );
jr_define( "_JOMRES_PRICE_ON_APPLICATION", "POA" );
jr_define( "_JOMRES_USE_JOMRESEDITOR", "Use Jomres' WYSIWYG editor? (recommended)" );
jr_define( "_JOMRES_USE_JOMRESEDITOR_DESC", "If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it." );
jr_define( "COMMON_NEXT", "ถัดไป" );
jr_define( "COMMON_CANCEL", "ยกเลิก" );
jr_define( "COMMON_SUBMIT", "ส่ง" );
jr_define( "COMMON_SAVE", "บันทึก" );
jr_define( "COMMON_DELETE", "ลบ" );
jr_define( "COMMON_RETURN", "กลับ" );
jr_define( "COMMON_CLOSE", "ปิด" );
jr_define( "COMMON_BACK", "ย้อนกลับ" );
jr_define( "COMMON_HOME", "หน้าแรก" );
jr_define( "COMMON_NEW", "ใหม่" );
jr_define( "COMMON_SEND", "ส่ง" );
jr_define( "RECAPTCHA_TITLE", "reCaptcha" );
jr_define( "RECAPTCHA_INFO", "Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google." );
jr_define( "RECAPTCHA_PUBLIC_KEY", "Public key" );
jr_define( "RECAPTCHA_PRIVATE_KEY", "Private key" );
jr_define( "_JOMRES_BOOKINGFORM_LOCK_TITLE", "Lockfile timeout" );
jr_define( "_JOMRES_BOOKINGFORM_LOCK_DESC", "To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure." );
jr_define( "_JOMRES_BOOTSTRAPSWITCH", "Enable Jomres' Bootstrap templates and functionality?" );
jr_define( "_JOMRES_BOOTSTRAPSWITCH_DESC", "If you are running a bootstrap enabled template in the frontend of this site set this option to Yes." );
jr_define( "COMMON_ACTION", "Action" );
jr_define( "COMMON_VIEW", "มอง" );
jr_define( "BACKTOTOP", "กลับไปด้านบน" );
jr_define( "_JOMRES_INPUTFILTERING_LEVEL_WEAK", "จุดอ่อน" );
jr_define( "_JOMRES_INPUTFILTERING_LEVEL_STRONG", "จุดแข็ง" );
jr_define( "_JOMRES_INPUTFILTERING", "Input filtering" );
jr_define( "_JOMRES_INPUTFILTERING_LEVEL_TITLE", "Input filtering level" );
jr_define( "_JOMRES_INPUTFILTERING_LEVEL_DESC", "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. " );
jr_define( "_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE", "Allowed input tags" );
jr_define( "_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC", "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default." );
jr_define( "_JOMRES_INPUTFILTERING_INPUTS_TITLE", "Allowed inputs" );
jr_define( "_JOMRES_INPUTFILTERING_INPUTS_DESC", "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space." );
jr_define( "_JOMRES_PROPERTYDETAILS_INTABS_TITLE", "Property details in tabs?" );
jr_define( "_JOMRES_PROPERTYDETAILS_INTABS_DESC", "Set this option to show property details in tabs. Set it to no to show them without tabs." );
jr_define( "COMMON_PRINT", "พิมพ์" );
jr_define( "COMMON_EDIT", "แก้ไข" );
jr_define( "COMMON_COPY", "คัดลอก" );
jr_define( "_JOMRES_BOOTSTRAPSWITCH_INFO", "Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No." );
jr_define( "_JOMRES_BOOTSTRAPSWITCH_FRONTEND", "Use Jomres Bootstrap templates in the frontend?" );
jr_define( "_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR", "Use Jomres Bootstrap templates in the administrator area?" );
jr_define( "_JOMRES_ALTERNATIVE_SEARCH_RESULTS", "Here are some alternatives you might want to consider." );
jr_define( "_JOMRES_BEEZ_WARNING", "Note, your frontend template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar." );
jr_define( "_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT", "Auto-detect guest's country?" );
jr_define( "_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC", "The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option." );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "About Jomres" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "help" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 main" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Getting started" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "บำรุงรักษาระบบ" );
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Access Control" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "developer tools" );
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "ภาษา" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "ระบบรายได้" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "การบัญชี" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "จอง" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "โครงสร้างของเว็บไซต์" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "user management" );
jr_define( "_JOMRES_CUSTOMCODE_MANUAL", "คู่มือ (ออนไลน์)" );
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "บัญชีของฉัน (ออนไลน์)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "จัดตารางงาน" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "portal functionality" );
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER", "ตัวจัดการปลั๊กอิน" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "รวม" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "รายงาน/สถิติ" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "ภาษี" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "ตั๋ว (ออนไลน์)" );
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES", "Upgrades" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "วิธีการชำระเงิน" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "ราคาเริ่มต้น" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "ใช้เฉพาะราคาใหม่" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "แสดงปี" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "กำหนดจำนวนปีจะแสดงเมื่อมีการแก้ไขจำนวน" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "ใบแจ้งหนี้" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "รายละเอียดบัญชี" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN", "เข้าสู่ระบบ" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT", "ออกจากระบบ" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH", "ค้นหา" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "dashboard" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "reserve" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "management" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "settings" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "misc" );
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS", "SRPs" );
jr_define( "_JOMRES_EDIT_COUNTRY_TITLE", "แก้ไขประเทศ" );
jr_define( "_JOMRES_EDIT_COUNTRY_ID", "รหัสประเทศ" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE", "รหัสประเทศ" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", "ชื่อประเทศ" );
jr_define( "_JOMRES_EDIT_REGION_TITLE", "แก้ไขขอบเขต" );
jr_define( "_JOMRES_EDIT_REGION_ID", "รหัสภูมิภาค" );
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE", "รหัสประเทศ" );
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME", "ชื่อภูมิภาค" );
jr_define( "_JOMRES_COM_LISTCOUNTRIES", "รายชื่อประเทศ" );
jr_define( "_JOMRES_COM_LISTREGIONS", "ขอบเขตของรายการ" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS", "คำนิยาม" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO", "This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community." );
jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS", "Translate locales" );
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES", "Translate lang file strings" );
jr_define( "_JOMRES_COM_NOTAMANAGER", "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Property Managers feature to make yourself BOTH a manager and a Super manager. This is a security feature." );
jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT", "Property list default layout" );


jr_define( '_JOMRES_LASTEDITED_WARNING_72', 'Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that' ); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF", "Stay for a minimum of" );
jr_define( "_JOMRES_NIGHTSFOR", " nights for " );


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS", "Property list images, show the property image as a gif if slideshow images are available." );
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY", "Show as GIFs only if the property is a featured property." );

jr_define( "_JOMRES_AGENT", "Agent" );
jr_define( "_JOMRES_AGENT_DETAILS", "Agent details" );
jr_define( "_JOMRES_AGENT_LISTINGS", "Agent's listings" );

jr_define( "_JOMRES_PROPERTY_LANG", "Property language" );
jr_define( "_JOMRES_PROPERTY_LANG_DESC", "The default language of this property." );


jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE", "Automatically approve new properties" );
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC", "If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager." );
jr_define( "_JOMRES_APPROVALS_MENU_NAME", "Approvals" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL", "Properties awaiting approval" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL", "No properties are awaiting approval" );
jr_define( "_JOMRES_APPROVALS_APPROVE", "Approve property" );
jr_define( "_JOMRES_APPROVALS_REVIEW", "Review property" );
jr_define( "_JOMRES_APPROVALS_NOT_APPROVED_YET", "This property has not been approved yet. Once it has been approved you will be able to publish it." );
jr_define( "_JOMRES_APPROVALS_CANNOT_PUBLISH", "Sorry, you cannot publish this property as it has not been approved yet." );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT", "A new property requires approval" );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT", "A property has been added to the system which requires your approval. Click the link to view the properties awaiting approval list : " );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT", "Your property has been approved" );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT", "Congratulations, your property has been approved, please click the following link to view the property's control panel : " );

jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_TITLE", "Region names are translatable" );
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_DESC", "Unless you're running a very fast server you are advised to leave this set to No. Due to the large number of region names, region name translation takes up a lot of memory which can slow your search results down." );

jr_define( "_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT", "Guest booked out." );

jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Sorry, that email address is already in use. If this is your email address, please ensure you have logged in before attempting to book.' );

jr_define( "JOMRES_TAPTOCALL", "Tap to call" );

jr_define( "JOMRES_NEWREVIEW_SUBJECT", "New review for " );
jr_define( "JOMRES_NEWREVIEW_MESSAGE", "A new review has been left for " );
jr_define( "JOMRES_NEWREPORT_SUBJECT", "New Report" );
jr_define( "JOMRES_NEWREPORT_MESSAGE", "A review has been reported for " );

jr_define( "JOMRES_NON_REGISTERED_USER", "Non registered user" );

jr_define( "JOMRES_JQUERY18_2", "Use Jquery 2.x?" );
jr_define( "JOMRES_JQUERY18_2_DESC", "Jquery 2.x is faster than previous implementations of jQuery, however it lacks certain things like $.browser and support for IE6/7/8 and older Firefox and Safari browsers. If you're seeing javascript errors on your page, or if your template/other plugins (like slideshows) use older versions of jQuery then you should set this option to No. " );

jr_define( "JOMRES_SUPERIOR", "Superior" );
jr_define( "JOMRES_SUPERIOR_S", "(S)" );

jr_define( "JOMRES_GRANDTOTAL_EX_TAX", "Grand total (ex tax) : " );
jr_define( "JOMRES_GRANDTOTAL_INC_TAX", "Grand total (inc tax) : " );
jr_define( "JOMRES_GRANDTOTAL_TOTAL_TAX", "Total tax : " );

jr_define( "JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL", "Type the two words: " );
jr_define( "JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO", "Enter what you hear: " );
jr_define( "JOMRES_RECAPTCHA_PLAY_AGAIN", "Replay the audio track " );
jr_define( "JOMRES_RECAPTCHA_CANT_HEAR_THIS", "Download the track in MP3 format" );
jr_define( "JOMRES_RECAPTCHA_VISUAL_CHALLENGE", "Visual mode" );
jr_define( "JOMRES_RECAPTCHA_AUDIO_CHALLENGE", "Audio mode" );
jr_define( "JOMRES_RECAPTCHA_REFRESH_BTN", "Refresh" );
jr_define( "JOMRES_RECAPTCHA_HELP_BTN", "Help" );
jr_define( "JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN", "Sorry, that was incorrect. Please try again." );


jr_define( "JOMRES_GOOGLE_MAPS", "Google map options" );
jr_define( "JOMRES_GOOGLE_MAPS_INFO", "These layer options are mainly specific to maps in property lists and the property details page. If enabled, only the Weather layer will be shown in the extended maps plugin as including too many options on a larger map makes it extremely slow." );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER", "Use weather layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD", "Fahrenheit or Celcius? " );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS", "Celcius" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT", "Fahrenheit" );

jr_define( "JOMRES_GOOGLE_MAP_OPTION_PANORAMIO", "Use Panoramio layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRANSIT", "Use transit layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRAFFIC", "Use traffic layer?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_BICYCLING", "Use bicycling layer?" );

jr_define( "JOMRES_GOOGLE_MAPS_POIS", "Enable Gmap Points of Interest (including possibly your competitors)?" );


jr_define( "_JOMRES_METAKEYWORDS", "Meta Keywords" );

jr_define( "_JOMRES_PLEASE_PRINT", "Please print this email and present it on your arrival." );
jr_define( "_JOMRES_OFFICE_USE_ONLY", "Office use only" );
jr_define( "_JOMRES_SCAN_FOR_DIRECTIONS", "Scan this code into your phone to get directions to us." );


jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "Use the built in VIES VAT validation feature?" );
jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "New in Jomres 7.3 is a feature which allows business owners and guests who have valid VAT numbers to enter their details and not have VAT applied to their invoices where appropriate. This feature is intended to be used by EU based property managers." );

jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX", "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE", "Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED", "Congratulations. We were able to validate your VAT number." );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED", "VAT number wasn't entered." );
jr_define( "_JOMRES_TAX_RULES_LIST", "List tax rules" );
jr_define( "_JOMRES_TAX_RULE", "Tax rule" );
jr_define( "_JOMRES_TAX_RULE_INFO", "Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the \"edit my account\" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all." );
jr_define( "_JOMRES_TAX_RATES_IMPORT", "Import tax rates" );
jr_define( "_JOMRES_TAX_RATES_IMPORT_INFO", "We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed." );
jr_define( "_JRPORTAL_TAX_RULE_EDIT", "Edit tax rule" );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER", "The VAT number for this property." );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER_DESC", "Please enter the VAT number for this property." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED", "VAT number validated." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED", "VAT number not validated." );
jr_define( "_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS", "Business details entered here will be used on commission and subscriptions invoices." );

jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further." );


jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT", "Production or Development?" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC", "If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to \"production\"." );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION", "Production" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT", "Development" );

//v7.3.3
jr_define( '_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resource details' );
jr_define( '_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tariff details' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Only' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'left!' );
jr_define( '_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resource feature' );
jr_define( '_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.' );

// v7.4
$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
$jrConfig   = $siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE',"Media Centre");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY',"Property image upload service");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD',"Add images");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM',"Room images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY',"Property main image");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW',"Slideshow images");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR',"Clear list");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP',"Drag & Drop files here");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS',"Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',"The maximum file size for uploads is ". jomres_formatBytes($jrConfig[ 'fileSize' ]) . ". Only JPG and PNG images are allowed.");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE',"If you upload multiple images as the \"Main property image\" these will be used in the Property List . Slideshow images will be shown on the property details page.");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW',"View your image");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE',"Delete image");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD',"Upload image");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES',"Feature and Room type images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES',"Room types icons");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES',"Property feature icons");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL',"Upload all files");

$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );

jr_define('END_TOUR' , "Close" );

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE' , "Welcome to your Property" );
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT' , "Welcome to your Dashboard. This is your Main Menu. To view your property as your guests will see it, click on Properties, then Preview." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE' , "This is your property name" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT' , "Whenever you are logged in as a property manager, you will always have an Active property, the name of which you can see here. This is the property you are working on. Please remember that you can only work on one property at a time, you can't have two tabs open in your browser and work on two different properties simultaneously." );

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE' , "This is the timezone dropdown selector." );
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT' , "This is useful if you are in a different timezone to your server. It helps to keep your midnight and the server's midnight in sync." );

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE' , "This is the language selector." );
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT' , "You can change your current language by using this selector. This is useful if you want your property description to be available in several languages. You can go to the Property Details page and enter the description in language A, then use this selector to change to language B. Now, if you go to the Property Details setting page you can enter your description in language B." );

jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE' , "This is the Editing Mode selector." );
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT' , "You can customise the labels on this page by switching on the Editing Mode. Once enabled labels that you can customise will have a dotted underline. Click that text and you will see a popup where you can enter the new text. This also works for different languages, so you can change the label in language A, then switch to language B and change the text again to something that suits your taste." );

jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE' , "This is content area." );
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT' , "In this area you will see the page that you are working on. In the dashboard you will see a calendar which shows which rooms have been booked out and the period the bookings span. Click a date to create a new Quick Booking, or drag with the mouse to select more than one day." );

jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE' , "Active property switch page." );
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT' , "You can change your active property by selecting the first letter from the name of the property below. When you do, you'll be given a list of all the properties you have rights to manage." );

jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE' , "This is where your property names will show." );
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT' , "Once you've clicked a property initial, your properties will show in this area. Click on a property name to switch to that property. This page is useful if you have to manage a lot of properties." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE' , "This is your property header." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT' , "This is shown on every guest facing page for your property. It shows your property name, the number of stars (if any), an optional link to another website, and a QR code. The code allows your guests to use their smart phone to get location details to your address." );

jr_define('TOUR_ID_GALLERYWRAPPER_TITLE' , "Your photo gallery." );
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT' , "This is the slideshow area. You can upload photographs through the Media Centre page under the Settings -> Media Centre menu option." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE' , "Main buttons." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT' , "Which buttons are shown here depends on which options you have chosen in the Property Details tab under Settings -> Property Configuration." );

jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE' , "Inline Calendar." );
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT' , "Using this calendar your guests can see, at a glance, how busy you are on a certain date and whether or not there are any vacancies. They can also click the arrows above the calendar to change the month viewed in that calendar." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE' , "Rooms list tab" );
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT' , "Here you can see all rooms, and the availability of each room if you click on the availability button." );

jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE' , "Reviews list." );
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT' , "Under this tab are all of the reviews that have been left for your property. Only users who have been booked through the system can post a review of your property." );

jr_define('TOUR_ID_MAPTAB_TITLE' , "Map tab." );
jr_define('TOUR_ID_MAPTAB_CONTENT' , "Under this tab your guests can see your property in a zoomable map." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE' , "More Information tab." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT' , "Under Settings -> Property details you can enter information about your property that might be of interest to your guests, like Check in times, Area activities, Driving directions, Airports, Other transport & Policies & disclaimers. Once entered, that information can be seen under this tab." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE' , "Booking Form." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT' , "Your guests can either go to a separate page, or they can use the booking form in this tab." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE' , "Main Property Details." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT' , "Under Settings -> Property details you can fill a form called Property description. This is the tab that's always opened first when a guest visits your property on this site so you should try to add some text that will immediately grab their attention." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE' , "All current and future tariffs" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT' , "This is a list of all current and future tariffs. You can change the look of the list by going into Settings -> Property Configuration and clicking on the Property details tab. Change the setting of the Verbose tariff info option." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE' , "Local Events." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT' , "If there are any events occurring local to your property they will show in this list. It is used for things like festivals, markets etc. Events that occur on specific dates." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE' , "Local Attractions." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT' , "If there are any attractions near to you, like museums or amusement parks they will be listed here." );

jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE' , "Available Auctions." );
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT' , "If your property has any dates available for auction, then those auctions will be shown here. Auctions are a useful way of driving business to your property during quieter periods." );

jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE' , "Booking configuration." );
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT' , "On this tab you can configure parts of how your booking form works. If you rent out rooms in a property, such as in a hotel or B&B then you can configure things like the rooms list style." );

jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE' , "Your Business details." );
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT' , "Here you enter your business's address and VAT number if you have it. These details will be shown on the invoices your guests will see, and any invoices generated by the site for you." );

jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE' , "External links." );
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT' , "You can add a link to another site here." );

jr_define('TOUR_ID_TAB_GATEWAYS_TITLE' , "Gateways." );
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT' , "Gateways are the term used to describe payment services. If you have an account with one of the gateway services shown in this tab you can enter your account details in this tab to take payments online." );

jr_define('TOUR_ID_TAB_MISC_TITLE' , "Miscellaneous ." );
jr_define('TOUR_ID_TAB_MISC_CONTENT' , "This tab is for settings that don't fit into any other tab." );

jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE' , "Property details page settings." );
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT' , "This tab allows you to modify various options as they're shown on your Property Details page (Go to the Jomres Main Menu -> Dashboard -> Preview to see that page)." );

jr_define('TOUR_ID_TAB_REQUIRED_TITLE' , "Required items in the booking form." );
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT' , "This tab allows you to set which items in the booking form that are required or optional." );

jr_define('TOUR_ID_TAB_SRPS_TITLE' , "Villa/Apartment specific settings." );
jr_define('TOUR_ID_TAB_SRPS_CONTENT' , "This tab offers settings that are often used by villas and apartments. Any property where you're renting out the entire property, rather than rooms in a property individually. That said, these settings can be used by both villa and hotel type properties." );

jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE' , "Single Person Supplements." );
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT' , "Single person supplements are charges that are added to a booking if a room that can cater for two only holds on individual." );

jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE' , "Tariffs" );
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT' , "On this page you can configure how tariffs and deposits are calculated." );

jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE' , "Tourist Tax." );
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT' , "If your country or city charges tourist taxes, you can configure them here." );

jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE' , "Micromanage settings." );
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT' , "Micromange tariff editing mode specific settings." );

jr_define('TOUR_ID_TAB_WISEPRICE_TITLE' , "Wise Price settings." );
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT' , "This tab allows you to enable and configure your room prices dynamically, giving you the ability to offer discounted room prices if occupancy when the booking is made is low." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Your properties." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. " );

jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE' , "The table." ); 
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT' , "Your data is presented as a table layout. On the left is a dropdown that allows you to change the number of items shown on each page. Next you have a number of buttons that allow you to export the data in the table to your local device. You can 1. Copy the data into your clipboard. 2. Export the data as a CSV (Comma seperated values). 3. Export in a format suitable for use in Excel. 4. Allows you to export the data as a PDF file and 5 Print, which will switch the layout so that you can print the data. Finally, on the far right, is an input field where you can search for a particular row or rows easily. Above each column there are titles, if you click on the title you can cause the column to be sorted, either ascending or descending, according to that column's contents." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Your properties." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. " );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE' , "Property creation, step 1." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT' , "Creating a new property is a two step process. On this first page you will select the country and region of your property, select it's property type, and the process you will use to manage it." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE' , "Property country." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT' , "Here you will select your property country from a dropdown list. As soon as you select the country the page will reload and you will be able to choose the region for the property." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE' , "The property type." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT' , "From this dropdown please choose your type of property. It can be something like a villa or an apartment if you're renting out the entire property, or if you're renting out rooms in the property then you would probably choose hotel or bed and breakfast." );

if (isset( $MiniComponents->registeredClasses['00001']['jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Management process." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you want to offer tours/finite resource booking (for example skis) that are booked on the same booking form, then you would still choose this option. If you're offering tours/finite resources only without rooms then choose the Tours option. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Management process." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate." );
	}

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE' , "Property creation step 2." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT' , "You can now start entering information about your property. Don't worry about images for now, you can upload them later through Settings -> Media Centre." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE' , "MRP or SRP." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT' , "Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property. If it's an SRP you'll be given a new dropdown where you can select the number of rooms the property offers. You will need to choose one of those options." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE' , "Property name & address." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT' , "Please enter the property name and address in the following fields." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE' , "Number of stars." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT' , "If your property has been awarded a number of stars based on a recognised standard, select the number from the dropdown. Some countries have rating by a single public standard � Belgium, Denmark, Greece, Italy, Malta, Netherlands, Portugal, Spain and Hungary have laws defining the hotel rating. In Germany, Austria and Switzerland, the rating is defined by the respective hotel industry association using a five-star system � the German classifications are Tourist (*), Standard (**), Comfort (***), First Class (****) and Luxury (*****), with the mark Superior to flag extras beyond the minimum defined in the standard." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE' , "Mapping location." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT' , "On your property details page you will see a map. You configure your property's location here using either the latitude and longitude inputs or by dragging and dropping the marker in the map itself." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE' , "Property features." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT' , "Select the features that are applicable to your property. These features are used in the site's search functionality, so it's important that these accurately reflect your property." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT' , "You have a number of fields here where you can enter informaton about your property. The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );


jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE' , "Policies and Disclaimers." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT' , "This is where you should put your properties policies, such as cancellation charges etc. When the guest goes through the booking form, before they can complete the booking they are forced to accept your terms and have the option to click a link which will show the property's terms. When they click that link, the information entered into this input is shown in a small window." );

jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE' , "List all bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT' , "On this page you will see all bookings, regardless of whether or not a deposit has been paid. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE' , "List new bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT' , "This page shows a list of all new bookings, that is, booking where a deposit hasn't yet been paid for the booking. Click the Edit icon to the left of the booking to view the booking details page." );

jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE' , "List old bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT' , "This page lists all historic bookings, that is, bookings that have either been cancelled or the guest has been booked out. Click the Edit icon to the left of the booking to see that booking's information." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE' , "List guests." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT' , "The page allows you to list all guests for your currently active property. By default only guests who are or will be guests are listed, however you can choose historic guests from a dropdown to include guests who have been booked out or have cancelled their bookings as well as current guests." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE' , "Overrides." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT' , "The overrides here are only available to managers of the property, guests cannot see or use them. They allow you to override both the final room price of the booking (optional extras are not included in this override, they're still charged at full price) and the value of the deposit required." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT' , "If you have created some coupon codes for this property, this input will be available and guests can enter the coupon codes here to get discounts on the value of their room booking." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE' , "Particulars." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT' , "Changing any of these options will cause the rooms list to change, because the list is re-evaluated based on the length of the booking and other variables. If you have created some guest types, then the booker will be able to change the number of guests for the booking here too." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE' , "Room features filter." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT' , "If you have configured the property to use the Classic Rooms list, guests can choose the specific room that they'd like to book, rather than simply a room of a certain type. This is more popular with up-market properties. The rooms list has clickable images which when clicked will popup more information about that individual room. An additional bonus of this layout is that if you have created some room features and marked a room as having a certain feature, then the booker can use the room features to filter through the available rooms to ensure that they're getting exactly what they want. Note, you can modify the number of rooms of each type that are shown in the room list through the Settings -> Property Configuration -> Booking rooms tab, by changing the Available rooms/tariff limit option. This will then show a smaller list of rooms to the guest, but as a property manager you will still see the full list of rooms." );


if (isset( $MiniComponents->registeredClasses['00001']['jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Optional extras." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create two types of optional extras which will show here. The first type is a basic optional extra, which can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer. The other type of extra is configured from the Tour/Activity Profiles Management menu option under Settings, and is used to create items with finite resources. Typically this is used for things like local tours to museums and other sites. In short, any kind of resource where there's only a few spaces available on a given date." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Optional extras." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "You can create optional extras which will show here. They can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer." );
	}
	

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE' , "Existing guests." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT' , "If you already have some guests entered you can choose them by selecting their name in a dropdown that appears here. This saves you having to add their details time and again. If you regularly make bookings on behalf of the same guests, you should always use this dropdown to select them otherwise you'll end up creating multiple guests with the same names if you enter their details manually every time." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE' , "Guest details." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT' , "If you'd like to change which fields you require to be filled by a guest, you can go to the Settings -> Property Configuration -> Required tab." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE' , "Black bookings." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT' , "Black bookings are booking that have been made by the hotel but not always for a specific guest. They may be because the hotel is on it's annual holiday, or because a room is closed for refurbishment." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE' , "Information about your property." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT' , "The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT' , "This is the simplest way you can enter room prices. Choose the number of rooms of a given type, the price for the rooms, the number of guests that the room can accommodate and the total number of people you are prepared to entertain in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE' , "Normal mode tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT' , "This is the simplest way you can enter room prices. Choose your property type, enter the price and the maximum number of people in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE' , "Rooms and Tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT' , "On this page you can edit Rooms, Tariffs and Room Features. There are three tabs which allow you to edit the individual items. Before you start editing rooms or tariffs, you will need to understand that there is a relationship between Rooms, Room Types and Tariffs. In the booking form, when you see a room type dropdown or a click button to select a room, what's happening is that you are actually selecting a combination of room and tariff. This approach allows you to create different tariffs for the same room/room types, so for example you can create one tariff for Bed and Breakfast, and a second tariff for Bed, Breakfast + evening meal. Rooms can have individual room features. If your rooms list is set to Classic, then your guests can use the Room Features to filter rooms in the booking form to find a room with a particular set of characteristics that they want." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE' , "Rooms and Tariffs." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT' , "On this page you can edit your property type and your tariffs." );

jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE' , "Guest types." );
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT' , "Guest types are an important part of your settings if you plan to charge per person per night, or simply because you need to know how many people you will be accommodating. You can create any guest type you like, for example Adults, Teenagers and Children. Guest types can be configured to cost more or less than the base rate (the rate you enter into the tariffs page) by either a flat rate, or a percentage. That way you can configure different prices for different types of guests. If you're not charging Per Person Per Night, then you can leave the settings to their defaults when you create the guest type." );

jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE' , "Coupons." );
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT' , "Coupon codes are a useful method of building repeat business, or to pull in new custom. When you create a new coupon code, the system will automatically generate a random code for you, but you don't need to use that if you want, you can create your own code. When you create the coupon code, you can either assign it to a guest, or not. Codes that are not assigned to specific guests can be used by anybody, so those codes should be used on marketing materials. You can also define the dates between when the code should be used, and the dates that the booking must be on for the code to take effect. Once a coupon code has been created you will have the option to view a printable list of coupon codes, making it easy to hand codes out to guests or potential guests. They can then scan the QR code on the printout into their mobile phone/tablet PC. The code will take them direct to the booking form with the discount code already applied." );

jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE' , "Optional extras." );
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT' , "Optional extras are extra items that can be added to a booking. These are items that not constrained by limited availability, so there's no resource management associated with them. When you create an optional extra you are able to choose a variety of settings, for example the maximum number of them that can be added to a booking, and whether or not the extra should be Forced. By this, we mean if it's automatically selected in the booking form, and the guest cannot unselect it. This is useful for mandatory payments like towels or a cleaning fee. Additionally, you will need to choose a Model, which means how payments will be calculated for the extra. If you want a single charge to be applied (for example, for a bottle of champagne to be available on arrival) then you would set the model to Per Booking. If, however you wanted to charge for something for each day, then you would choose the Per Day option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE' , "Resource picker." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT' , "This is the resource picker. It allows you to choose what sort of resource you're uploading images for (e.g. Slideshow images or rooms) and if it's a room, then after you choose Rooms you'll be given the option to select which room you want to upload images for in another dropdown, next to it. This allows you to upload multiple images for each individual room, if you wish. Note, room image uploading only applies to properties like Hotels, B&Bs etc. Villas and Apartments will not have this option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE' , "Existing images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT' , "This column shows the images that have already been uploaded. You can choose then to either view the image, or delete it. Every time you change the resource time this column is updated to show the images for that particular resource." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE' , "Upload controls." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT' , "You have several controls here. You can use the Add Images button to choose the images you want to upload, or you can drag and drop images into the box underneath. The Clear button clears the list of images ready for uploading. Once you've selected the images for upload, you can either upload them individually, or all at once." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE' , "Selected images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT' , "This column shows the images that are ready for upload, or that you've uploaded since you visited this page. " );

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE' , "Finished!" );
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT' , "That's the end of this page's help information. If you have any futher questions, please do not hesitate to contact us. " );

jr_define('PRODUCT_TOUR_PAGE_INFORMATION' , "HELP" );

//8.0
jr_define('COMMON_PREV' , "Prev" );
jr_define('COMMON_MORE' , "More" );
jr_define('_JOMRES_DASHBOARD_TODAY' , "Today" );
jr_define('_JOMRES_DASHBOARD_YEAR' , "Year" );
jr_define('_JOMRES_DASHBOARD_MONTH' , "Month" );
jr_define('_JOMRES_DASHBOARD_WEEK' , "Week" );
jr_define('_JOMRES_DASHBOARD_DAY' , "Day" );
jr_define('_JOMRES_HLEGEND' , "Legend" );
jr_define('_JOMRES_HFILTER' , "Filter" );
jr_define('_JOMRES_HFROM' , "From" );
jr_define('_JOMRES_HTO' , "To" );
jr_define('_JOMRES_HNEW_BOOKING' , "New booking" );
jr_define('_JOMRES_HSTATUS_DEPOSIT' , "Deposit status" );
jr_define('_JOMRES_HSTATUS_GUEST' , "Guest status" );
jr_define('_JOMRES_HSTATUS_BOOKING' , "Booking status" );
jr_define('_JOMRES_HSTATUS_PUBLISHING' , "Publishing status" );
jr_define('_JOMRES_HSTATUS_INVOICE' , "Invoice status" );
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE' , "Invoice type" );
jr_define('_JOMRES_HSTATUS_APPROVED' , "Approved" );
jr_define('_JOMRES_HSTATUS_CURRENT' , "Current business" );
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR' , "Show bookings for" );
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR' , "Show invoices for" );
jr_define('_JOMRES_STATUS_ANY' , "Any" );
jr_define('_JOMRES_STATUS_PAID' , "Paid" );
jr_define('_JOMRES_STATUS_NOTPAID' , "Not paid" );
jr_define('_JOMRES_STATUS_CHECKEDOUT' , "Checked out" );
jr_define('_JOMRES_STATUS_ACTIVE' , "Active" );
jr_define('_JOMRES_STATUS_CANCELLED' , "Cancelled" );
jr_define('_JOMRES_STATUS_PUBLISHED' , "Published" );
jr_define('_JOMRES_STATUS_NOT_PUBLISHED' , "Not published" );
jr_define('_JOMRES_STATUS_PROVISIONAL' , "Provisional booking" );
jr_define('_JOMRES_STATUS_CONFIRMED' , "Confirmed booking" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE' , "Guests with active bookings" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST' , "Guests with past bookings" );
jr_define('_JOMRES_STATUS_BOOKINGS' , "Bookings" );
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS' , "Subscriptions" );
jr_define('_JOMRES_STATUS_COMMISSIONS' , "Commissions" );
jr_define('_JOMRES_STATUS_ALL_PROPERTIES' , "All my businesses" );
jr_define('_JOMRES_ACTION_SET_CURRENT' , "Set as current" );
jr_define('_JOMRES_ACTION_CHECKIN' , "Check in" );
jr_define('_JOMRES_ACTION_CHECKOUT' , "Check out" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", "bookings" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES", "properties" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS", "guests" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS", "reports" );
jr_define( "_JOMRES_HLIST_GUESTS", "Guests" );
jr_define( "_JOMRES_HLIST_GUESTS_MENU", "List guests" );
jr_define( "_JOMRES_HLIST_INVOICES_MENU", "List invoices" );
jr_define( "_JOMRES_HLIST_PROPERTIES", "Businesses" );
jr_define( "_JOMRES_HQUICK_BOOKING", "Quick booking" );
jr_define( "_JOMRES_HDATE_OF_BOOKING", "Date of booking" );
jr_define( "_JOMRES_HTWO_WEEKS", "Two weeks" );
jr_define( "_JOMRES_BOOKING_CANCELLATION_WARNING", "This booking will be cancelled. Press OK to cancel the booking." );
jr_define( "_JOMRES_HOVERVIEW_CHECKINS", "Today checkins" );
jr_define( "_JOMRES_HOVERVIEW_CHECKOUTS", "Today checkouts" );
jr_define( "_JOMRES_HOVERVIEW_CURRENT_RESIDENTS", "Current residents" );

jr_define( "_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB", "Navigation bar settings" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION", "Navigation bar location" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_DEFAULT", "Default (content area)" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_TOP", "Fixed to top" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_BOTTOM", "Fixed to bottom" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_INVERSE", "Inverted navbar (colour change)" );
jr_define( "_JOMRES_BOOKING_NUMBER", "Booking number" );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Show guests for" );

jr_define('_JOMRES_BOOTSTRAP_VERSION' , "Bootstrap version" );
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC' , "Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2." );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Show guests for" );
jr_define('_JOMRES_HFIXED_PERIODS' , "Fixed periods" );
jr_define('_JOMRES_HDEPOSITS' , "Deposits" );
jr_define('_JOMRES_HBOOKING_FORM' , "Booking form" );
jr_define('_JOMRES_HREQUIRED_FIELDS' , "Required fields" );

jr_define('COMMON_PLACEHOLDER_FIRSTNAME' , "Tom" );
jr_define('COMMON_PLACEHOLDER_SURNAME' , "Smith" );
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER' , "110" );
jr_define('COMMON_PLACEHOLDER_STREET' , "My Street" );
jr_define('COMMON_PLACEHOLDER_TOWN' , "My Town" );
jr_define('COMMON_PLACEHOLDER_LANDLINE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_MOBILE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME' , "My Hotel" );
jr_define('COMMON_PLACEHOLDER_POSTCODE' , "XXNN NNXX" );
jr_define('COMMON_PLACEHOLDER_EMAIL' , "example@address.com" );

jr_define('EXTENDED_CONFIGURATION' , "Extended Configuration" );
jr_define('SIMPLE_CONFIGURATION' , "Simple Configuration" );
 
jr_define('_JOMRES_HRESOURCE_FEATURES' , "Resource features" );
jr_define('_JOMRES_HRESOURCE_TYPE' , "Resource type" );
 jr_define('_JOMRES_HEDIT_GUEST_TYPE' , "Edit guest type" );
jr_define('_JOMRES_HEDIT_COUPON' , "Edit coupon" );
jr_define('_JOMRES_HEDIT_EXTRA' , "Edit extra" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE' , "Create multiple resources" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE' , "Generate resources" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY' , "How many resources?" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE' , "Resources type" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS' , "Max guests per resource" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE' , "Delete all existing resources?" );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.' );

jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE' , "Booking configuration." );
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT' , "On this tab you can configure the look and feel of the booking form." );

jr_define('TOUR_ID_TAB_BOOKINGS_TITLE' , "Bookings." );
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT' , "This tab allows you to modify how bookings are treated, plus various other settings." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE' , "Edit Guest." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT' , "Here you can edit a guest's address details. Please note that any changes you make here will only be reflected in this record. If the guest has made bookings on other properties, these changes will not appear on those other properties." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE' , "VAT." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT' , "If a VAT number is entered here then it will be shown on the guest's invoice." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE' , "Discount." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT' , "You can choose to give this guest an automatic discount which will be applied whenever they make a booking." );


jr_define('DATATABLES_SINFO' , "Showing _START_ to _END_ of _TOTAL_ entries" );

jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL',"Approval");
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY',"Reject booking inquiry");
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY',"Approve booking inquiry");
jr_define('_JOMRES_STATUS_APPROVED',"Approved");
jr_define('_JOMRES_STATUS_REJECTED',"Rejected");
jr_define('_JOMRES_STATUS_INQUIRY',"Inquiry");

jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE',"Bookings require approval or availability confirmation?");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', "If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.");

jr_define('_JOMRES_ERROR',"Error");
jr_define('_JOMRES_ERROR_MESSAGE',"Sorry! An error occured while trying to process this function. It has been reported for you and we will look into it.");

jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE',"Message");
jr_define('_JOMRES_ERROR_DEBUGGING_FILE',"File");
jr_define('_JOMRES_ERROR_DEBUGGING_LINE',"Line");
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE',"Trace");


jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE',"Email templates");
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT',"Edit email template");
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT',"Email subject");
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT',"Email text");
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE',"Email type");
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME',"Email name");
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC',"Email description");
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS',"Please see this page for help customizing the emails and a list of the available output: <a href=\"http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates\" target=\"_blank\">Email Templates Help</a>");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME',"Site Admin New Booking Email");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC',"Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME',"Hotel New Booking Email");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC',"Email sent to property owner when a new booking is made");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME',"Guest New Booking Email");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC',"Email sent to guest when a new booking is made");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME',"Guest Confirmation Letter");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC',"Printable letter or email that can be sent manually by the property owner to confirm a booking");


jr_define('_JOMRES_CAN_BE_APPROVED',"This booking can be approved. All selected resources are available for the selected dates.");
jr_define('_JOMRES_CANT_BE_APPROVED',"This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.");

jr_define('_JOMRES_SHOW_POWEREDBY',"Show the Powered by Jomres link in the Jomres footer.");


jr_define('GUEST_BUDGET',"Budget");
jr_define('GUEST_BUDGET_FEATURE_SWITCH',"Use Budget feature?");
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC',"Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");

jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ' );


jr_define( '_JOMRES_FOR', 'For' );
jr_define( '_JOMRES_PRICINGOUTPUT_NIGHT', 'night' );
jr_define( '_JOMRES_PRICINGOUTPUT_NIGHTS', 'nights' );
jr_define( '_JOMRES_CONFIG_SHOW_OVERLAY', 'Show price overlay' );
jr_define( '_JOMRES_CONFIG_SHOW_OVERLAY_DESC', 'In the property list it is possible to show a cumulative price over the property image, use this setting to switch that display off. The cumulative price is calculated from the dates entered in the ajax search composite plugin.' );

jr_define( '_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?' );

jr_define( "_JOMRES_ONLINE_PARTNERS", "Partners" );

jr_define( '_JRPORTAL_MONTHS_SHORT_0', 'Jan' );
jr_define( '_JRPORTAL_MONTHS_SHORT_1', 'Feb' );
jr_define( '_JRPORTAL_MONTHS_SHORT_2', 'Mar' );
jr_define( '_JRPORTAL_MONTHS_SHORT_3', 'Apr' );
jr_define( '_JRPORTAL_MONTHS_SHORT_4', 'May' );
jr_define( '_JRPORTAL_MONTHS_SHORT_5', 'Jun' );
jr_define( '_JRPORTAL_MONTHS_SHORT_6', 'Jul' );
jr_define( '_JRPORTAL_MONTHS_SHORT_7', 'Aug' );
jr_define( '_JRPORTAL_MONTHS_SHORT_8', 'Sep' );
jr_define( '_JRPORTAL_MONTHS_SHORT_9', 'Oct' );
jr_define( '_JRPORTAL_MONTHS_SHORT_10', 'Nov' );
jr_define( '_JRPORTAL_MONTHS_SHORT_11', 'Dec' );

jr_define('DATATABLES_SEMPTYTABLE'		, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SINFO'			, "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว" );
jr_define('DATATABLES_SINFOEMPTY'		, "แสดง 0 ถึง 0 จาก 0 แถว" );
jr_define('DATATABLES_SINFOFILTERED'	, "(กรองข้อมูล _MAX_ ทุกแถว)" );
jr_define('DATATABLES_SINFOPOSTFIX'		, "" );
jr_define('DATATABLES_SINFOTHOUSANDS'	, "," );
jr_define('DATATABLES_SLENGTHMENU'		, "แสดง_MENU_ แถว" );
jr_define('DATATABLES_SLOADINGRECORDS'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SPROCESSING'		, "กำลังดำเนินการ..." );
jr_define('DATATABLES_SSEARCH'			, "ค้นหา:" );
jr_define('DATATABLES_SZERORECORDS'		, "ไม่พบข้อมูล" );
jr_define('DATATABLES_SFIRST'			, "เิริ่มต้น" );
jr_define('DATATABLES_SLAST'			, "สุดท้าย" );
jr_define('DATATABLES_SNEXT'			, "ถัดไป" );
jr_define('DATATABLES_SPREVIOUS'		, "ก่อนหน้า" );
jr_define('DATATABLES_SSORTASCENDING'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SSORTDESCENDING'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );

jr_define('DATATABLES_SHOWHIDE'	, "Change columns" );

jr_define( '_BOOKING_ONREQUEST', 'Booking on request' );
jr_define( '_BOOKING_INSTANT', 'Instant booking' );

jr_define( '_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?' );
jr_define( '_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.' );

jr_define( '_BOOKING_CALCQUOTE', 'Request booking' );

jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear ');

jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');

jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');

jr_define('_JOMRES_WORD_CACHING', 'Caching');


jr_define('_JOMRES_WORD_PATTEMPLATE_CACHING', 'Use patTemplates Caching?');

jr_define( '_JOMRES_HLASTCHANGED', 'Last changed' );

jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME',"Hotel Booking Cancellation Email");
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC',"Email sent to the property owner when a new booking is cancelled");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME',"Guest Booking Cancellation Email");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC',"Email sent to guest when a new booking is cancelled");

jr_define('_JOMRES_TEST_EMAIL_SEND',"Send test email");
jr_define('_JOMRES_TEST_EMAIL_SUBJECT',"Test email");
jr_define('_JOMRES_TEST_EMAIL_CONTENT',"This is a test email from your booking system.");
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS',"Test email sent successfully");
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE',"Test email was not sent");


jr_define('_INVOICE_TRANSACTIONS',"Transactions");

jr_define('_OPENEXCHANGE_API',"Open Exchange Rates API key");
jr_define('_OPENEXCHANGE_API_DESC','To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');

jr_define('_JOMRES_COMMISSION',"Commission");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS',"If you upload multiple images for individual optional extras, only the first image will be used.");
jr_define( '_JRPORTAL_INVOICES_PAYNOW', "Pay now" );
jr_define( '_JRPORTAL_INVOICES_PAYNOW_DESC', "This invoice in now due. Please click the button to select the payment method." );
jr_define('_JOMRES_EXTRAS_TEMPLATE',"Here's a list of some of the great things you can purchase while making a booking at this property. ");

jr_define( '_ASSIGN_COMMISSION_RATES', 'Assign commission rates' );


jr_define( 'GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.' );
jr_define( 'EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?' );

jr_define( 'PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings' );

jr_define( '_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.' );


jr_define( 'PROPERTY_STATS_SALES', 'Sales' );
jr_define( 'PROPERTY_STATS_SALES_DESC', 'This is when bookings were taken' );

jr_define( 'PROPERTY_STATS_BOOKINGS_DAYS', 'Bookings (days)' );
jr_define( 'PROPERTY_STATS_BOOKINGS_DAYS_DESC', 'Booking dates start and number of days.' );

jr_define( 'PROPERTY_STATS_ROOM_BOOKINGS_DAYS', 'Bookings (rooms x days)' );
jr_define( 'PROPERTY_STATS_ROOM_BOOKINGS_DAYS_DESC', 'Number of rooms booked out in a certain month.' );

jr_define( '_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons' );


jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories' );
jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category' );
jr_define( '_JOMRES_HCATEGORY', 'Category' );
jr_define( '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?' );
jr_define( '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.' );

jr_define( '_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin' );
jr_define( '_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout' );

jr_define( '_JOMRES_STATUS_UNISSUED', 'Unissued' );

jr_define( 'DEFAULT_TERMS_AND_CONDITIONS', 'These Terms and Conditions clarify The Owner\'s obligations to The Renter, The Renter\'s obligations to The Owner, and in the very unlikely event of any disputes, will be used as the basis for any resolution. Please read them carefully before confirming your booking.

Check-In: From [Time] / Check-Out: By [Time] (High Season Weekly Rentals)

For Low Season Weekend and Mid-Week Rentals an earlier Check-In and later Check-out may be possible (usually In from [Time] and out by [Time])

Acceptance of these Terms & Conditions binds a contract between the following two parties:

The Rental Applicant (The Renter) and The Property Owner (The Owner)

 

 1. Party Members

All persons listed on the Rental Agreement or added subsequently by The Renter will be bound by the terms of this agreement. Occupancy of the property is restricted to those names listed on the Agreement or added subsequently by The Renter.   The Rental Applicant is considered to be the Lead Renter and will assume full responsibility for all members of the Rental Group throughout the rental period.   Information or instructions relating to this rental will be communicated to the Rental Applicant only and not to any third-party member of the Rental Group.

2. Payments

A Reservation will be confirmed by The Owner once the application has been approved and initial or full payment has been processed.   For reservations of one week or more, if the reservation is made 45 days or more before the rental commences, an initial rental deposit payment of [X%] of the rental fee will be due at the time of booking. If a reservation is made less than 45 days before the rental commences, or the reservation is less than a full week’s duration, the full rental fee must be paid at the time of booking. In the event of a reservation not being accepted by The Owner, all fees paid will be refunded immediately. Any booking made within 10 days of the start of the rental period must be paid in full by credit card via PayPal, certified check or money order at the time of booking. No reservation may commence without full payment being cleared.

Once a reservation is received and accepted by The Owner, The Renter is liable for payment of the balance of the rental fee 45 days before occupation of the property. Non-payment by the due date will be treated as a cancellation and the deposit will be forfeited.


3. Cancellation Policy & Changing a Booking

Once a reservation has been accepted and confirmed, a cancellation can only be made in accordance with the terms below:

- If the period of rental can be re-booked, a refund for the period re-rented or the part thereof, less a cancellation fee of [Amount]  will be issued.

- If any part of the rental period cannot be re-booked, the Renter will forfeit all monies paid for that period.

 4. Occupancy of the Property

Regardless of the published maximum number of persons a property can accomodate, the number of guests occupying the Property is strictly limited to those named on the Rental Agreement or any subsequent amendment notified in writing to The Owner. The stated and agreed occupancy figure includes all persons irrespective of age, day and overnight guests.

Exceeding the number of stated and agreed persons will result in immediate eviction without refund, or a $100 per guest per night charge at the discretion of The Owner.

 5. Condition of the Property

The Property will have been inspected prior to occupation and therefore The Renter undertakes to:

- Notify The Owner immediately with regard to any damage and/or maintenance issues that require attention.

- Keep the Property and all furniture, fixtures, fittings, chattels and effects in or about the Property in the same state of repair and condition as found at the commencement of the Rental.

 

- Where a cleaning service is provided; The Renter shall follow the departure instructions provided by The Owner.

- Where a cleaning service is not provided; The Renter shall leave the Property in the same state of cleanliness and general order in which it was found. Failure to do so to the satisfaction of The Owner will result in a damage/cleaning charge being levied.

6. Use of Telephone and Internet Services

Where a telephone is provided as part of the rental, The Renter must charge all long-distance telephone calls to either a credit/phone card or call collect, unless advised otherwise. Where internet services are provided, there may be download restrictions and a charge may be levied if these are exceeded. It is The Renter\'s responsibility to check for restrictions on an internet device before commencing any download.

 7. Pets

One dog is permitted [indicate any restrictions]. All evidence of pet occupation must be removed from the Property and grounds at the end of the rental period. Pets are not permitted on any item of furniture, including beds, and evidence of pet hair on furniture and bedding may incur additional cleaning charges.

OR

Pets are strictly prohibited at this property. Any evidence of pet occupation will result in a forfeit of the damage deposit in its entirety.

The Owner accepts no responsibility for any allergic reaction or other conditions arising from occupancy of the property. The designation of “No Pets” does not indicate there have not been pets at the property at some time.

8. Smoking

Smoking is not permitted in or around the immediate vicinity of the property.

9. Property  Access During Winter Months

The Property is  offered for rental during the winter months and has road access and receives a snow clearance service from [indicate municipal or private contractor]. However, Renters are advised that following any major snowfall, snow plough providers are contracted to clear local roads in a predetermined order. Consequently, plowing at a property may be delayed for several hours or, in severe storm conditions, days. In the unlikely event that a Renter is unable to leave a property on the planned departure date, the Renter will not be liable for any additional accommodation charges. Conversely, should a lack of snow clearance prevent a Renter from reaching a property, the Renter will receive a refund of the rental fee for the day(s) the property was inaccessible. However, The Owner will be held responsible for any losses, additional expenses or penalties incurred as a result of being unable to arrive at or leave a property on time due to a lack of snow clearance. Renters are also reminded to ensure that they and their vehicles are suitably prepared and equipped for driving in the wintry conditions likely to be encountered during their visit to the Property.

10.   Equipment and Facilities Provided

Equipment and facilities are provided at the discretion of The Owner and whilst every attempt is made to ensure that such equipment is in working order for the duration of the rental period, should a breakdown or some other situation occur that renders non-essential element unusable, the Owner does not take responsibility for replacing or refunding The Renter for the lack of use of these equipment or facilities. The equipment and facilities referred to include (but are not exclusive to) such items as watercraft, motors, televisions, VCRs/DVDs, hot tubs, saunas and Jacuzzis.

 

The Renter must report any inoperative or defective equipment to The Owner promptly! The Owner will make every reasonable effort to have repairs made as soon as possible; however, there are limited service contractors in [Your Area]. While every attempt will be made to ensure that all the advertised equipment and appliances are in working order at the commencement of a rental period, no reduction of rent; rebate; or refund will be issued for a mechanical failure of air conditioning, dishwasher, washer, dryer, TV or other appliances.

 11.   Refunds

If a breakdown should occur to fundamental elements such as water systems, plumbing and electrical systems, and major appliances such as stove or refrigerator, every effort will be made to repair or replace, or an appropriate refund will be made for the inconvenience caused. This does not apply to system breakdown caused by misuse, such as plumbing blockages caused by inappropriate use of sanitary facilities.

The Owner is not liable, nor will provide a refund, for any stoppage of electrical services caused by extreme weather or other circumstances beyond his control.   Similarly, there will be no refunds for inclement weather, changes in water levels, conditions at neighboring properties, or any nuisance afforded by the natural elements of the location such as flying insects or the animal population.

12. Other Conditions of Booking

The Renter shall abide by these Terms and Conditions of Rental and any other instructions contained in the individual Cottage Guide and any additional information and instructions as shall be supplied in the Property or by The Owner.

 

LIMITATIONS OF LIABILITY: The Renter represents, warrants, acknowledges and agrees with The Owner that he/she will use the Property and its facilities in accordance with The Terms and Conditions above and the Information provided and that he/she does so at his/her own risk and that he/she indemnifies and saves The Owner harmless from any personal injury, sickness or death, loss or damage, however caused, to person or property of The Renter, his/her family, or guests, before during or after the time of occupancy. Further, he/she accepts full responsibility for the use of the Property and any recreational equipment such as boats and motors, etc. and agree to pay for any damage of said equipment, other than for normal wear and tear. The Renter further acknowledges he/she is responsible for ensuring all Boating Regulations are observed, including having required safety equipment in the watercraft, as well as meeting current Operator Competency Requirements.

' );


jr_define( '_JOMRES_NUMBER_OF_BEDROOMS', 'Bedrooms' );

jr_define( '_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.' );
jr_define( '_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.' );

jr_define( '_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type' );
jr_define( '_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION', 'You must choose a sub-type before you can create tariffs for this property.' );
jr_define( "_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK", "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches." );
jr_define( "_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK", "Give your property a sub-type" );


jr_define( "_JOMRES_EMAIL_TEMPLATES_TITLE", "Email templates" );


jr_define( "_JOMRES_CONTACT_SETTINGS", "Contact settings" );
jr_define( "_JOMRES_CONTACT_SETTINGS_DESC", "From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners." );
jr_define( "_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS", "Override listings contact details?");
jr_define( "_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC", "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again." );
jr_define( "_JOMRES_EDITPROPERTY_APPROVAL_WARNING", "Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.");


jr_define( '_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request' );
jr_define( '_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request' );
jr_define( '_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request' );


jr_define( '_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending' );
jr_define( '_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending' );

jr_define( '_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?' );
jr_define( '_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.' );

jr_define( '_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.' );
jr_define( '_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details" );
jr_define( '_JOMRES_CLEAR_GUEST_DETAILS', " -- New Guest -- " );

jr_define( '_JOMRES_CHARTS', 'Charts' );
jr_define( '_JOMRES_CHARTS_SELECT', 'Select chart...' );
jr_define( '_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month' );

jr_define( "_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK", "Ok, let's get started. First you need to create some rooms for this property." );
jr_define( "_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK", "Create some rooms now" );

jr_define( "_JOMRES_IMAGES_EXIST_SANITY_CHECK", "Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings." );
jr_define( "_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK", "Upload an image" );

jr_define( "_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK", "Create some tariffs" );

jr_define( "_JOMRES_PROPERTYTYPE_FLAG", "What will guests book?" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_DESC", "Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? " );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_HOTEL", "Rooms in the property" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_VILLA", "The entire property" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_NEITHER", "Other (Tours/Realestate)" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_BOTH", "Both" ); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable 
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD", "What will guests book?" );

jr_define( "_JOMRES_ADDRESS_SANITY_CHECK", "You'll need to complete your address details so that your guests can find you when they come to stay." );
jr_define( "_JOMRES_ADDRESS_SANITY_CHECK_LINK", "Update your address" );


jr_define( "_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED", "Oops, it looks like you might have forgotten to complete all the fields." );

jr_define( "_JOMRES_MANAGER_HAS_NO_PROPERTIES", "Error, this user is configured as a manager but has not been assigned to any properties" );

jr_define( "_JOMRES_CONTANT_US", "Contact us" );


jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_TITLE", "Welcome to your new online listing for " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_1", "Hi, and welcome to your new property on " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_2", "You recently added a new property to our website, and we'd like to welcome you to the family." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_3", "You can see your new dashboard " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT", " here " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_4", "Once you've setup your property you can see how it looks to site visitors by visiting " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT", " your front page." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_5", "(it's not published, so site visitors can't see it yet)." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_6", "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_7", "If you have any questions at all, please " );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT", "contact us" );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_8", "and we'll be delighted to answer all your questions." );
jr_define( "_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE", "All the best, our team at " );


jr_define( "_JOMRES_JINTOUR_SANITY_CHECK", "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours." );
jr_define( "_JOMRES_JINTOUR_SANITY_CHECK_LINK", "Let's create some tours!" );

jr_define( '_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location' );
jr_define( '_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.' );

jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebooking.com or anything else.' );

jr_define( 'COMMON_DOWNLOAD', 'Download' );

jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV_SRP', 'Property sub-type' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO_SRP', 'Property sub-type' );

jr_define( '_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!' );

jr_define( '_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.' );

jr_define( '_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.' );
jr_define( '_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS_PLUGIN_MANAGER', 'Your license does not support plugin downloads.' );


jr_define( '_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them' );
jr_define( '_JOMRES_LAT', 'Lat (nn.nnnn)' );
jr_define( '_JOMRES_LONG', 'Long (nn.nnnn)' );

jr_define( '_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] ) otherwise you will not be able to access Jomres from the site frontend to manage your properties and bookings.' );
jr_define( '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");

jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES", "What management process will this room type be for?" );
jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC", "Is the room type for a hotel type property, or a villa type property?" );
jr_define( '_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types' );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES", "Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs." );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES", "Use the New button above to create new Room Types." );


jr_define( "_JOMRES_PROPERTYTYPE_FLAG_TOURS", "Tours" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_REALESTATE", "No bookings/Real estate ( simple listing )" );


jr_define( "_JOMRES_CONFIG_LOG_LOCATION", "Log file location" );
jr_define( "_JOMRES_CONFIG_LOG_LOCATION_DESC", "Jomres logs system activity by default to the ".JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_WARNING", "Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the ".JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED", "If your CMS is installed in the root directory of your website, then a suitable location would be " );

jr_define( "_JOMRES_CONFIG_GMAP_KEY_WARNING", "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres." );

jr_define( "JOMRES_GOOGLE_MAP_STYLE", "Google map colour scheme" );

jr_define( "JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE", "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images." );
jr_define( "JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1", "The property type helps you to define how the property will be booked, for example with hotels you \"sell\" just one or two rooms at a time, whereas with villas you offer the entire property." );
jr_define( "JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2", "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties." );

jr_define( "_JOMRES_CONFIG_MINIMUM_DEPOSIT", "Minimum Deposit" );
jr_define( "_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC", "You can configure the minimum deposit amount to be charged. If you do, then the \"Deposit required is cost of the first night?\" & \"Deposit required is percentage?\" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here." );

jr_define( "_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING", "This figure cannot be less than " );

jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_HOST", "Syslog host" );
jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_PORT", "Syslog Port" );
jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC", "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define( "_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED", "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");

jr_define( "_JOMRES_SEND_ERROR_EMAIL", "Send an email to site admin when an error occurs?" );
jr_define( "_JOMRES_SEND_ERROR_EMAIL_DESC", "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. " );


jr_define( "_JOMRES_FAQ", "Frequently asked questions" );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION", "Introduction" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES", "What is Jomres?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES", "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD", "Can users register on my Jomres site and add their own properties?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD", "Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES", "Properties" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES", "How do I add a new property?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES", "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES", "Can I import properties from another system?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES", "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS", "Can I import bookings from another system?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS", "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. " );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES", "Can I edit email templates?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES", "Property managers can edit email templates through their toolbar under Settings > Email Templates." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS", "Payments" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS", "How do I allow properties to take payments?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS", "You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY", "Which gateway should I use?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY", "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS", "When a guest makes a payment for a booking, who gets the money?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS", "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING", "Troubleshooting" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL", "Booking emails aren't being sent." );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL", "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY", "You can't see the payment gateway after making a booking." );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY", "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES", "Jomres License" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE", "After buying X license, am I forced to purchase renewals once the license has expired?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE", "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED", "My license has expired, can I upgrade Jomres anyway?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED", "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE", "What software license is Jomres released under?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE", "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets." );
 

jr_define( "_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY", "Properties" );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY", "How do I create a property?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY", "Click on Properties > New Property to add a new property." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW", "How can I see what my property looks like to guests?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW", "Click on Properties > Preview to see how your property looks to guests." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP", "How do I add rooms?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP", "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES", "How do I set room prices?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES", "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS", "How do I create optional extras?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS", "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS", "How can I take payments online?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS", "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS", "Can I give discounts?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS", "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. " );

jr_define( "_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS", "Bookings" );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE", "When I click New booking, I am taken to the Contact form, why?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE", "Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK", "What are Black Bookings?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK", "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished." );

jr_define( "_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES", "Images" );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO", "How do I upload images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO", "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN", "What is the 'Main' image?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN", "The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES", "What are room feature icons?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES", "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS", "How do I upload room images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES", "Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW", "How do I upload slideshow images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW", "Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS", "How do I upload Extras Images?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS", "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP", "How do I setup currency symbols?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP", "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES", "How do I enable multiple currencies?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES", "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. " );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES", "How do I save descriptions in multiple languages?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES", "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER", "How many properties can I list?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER", "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES", "Can I modify other properties on this site?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES", "No, you cannot. You can only administer properties you have created or been assigned to as a property manager." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER", "Can I modify other properties on this site?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER", "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES", "What are Guest Types/How do I change per person per night?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES", "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type." );

jr_define( "_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES", "What are Room Features?" );
jr_define( "_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES", "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form." );



jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES", "Can I make a user a property manager?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES", "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS", "Plugins" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS", "What is the Plugin Manager for?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS", "The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE", "Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE", "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION", "How do I install a plugin?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION", "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one." );


jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE", "Site Structure" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO", "What does Site Structure mean?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO", "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES", "What are Property Types?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES", "In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES", "What are Property Features?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES", "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES", "What are Property Feature Categories?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES", "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES", "What are Room features?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES", "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES", "Why is there a page to edit countries/regions?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES", "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world." );


jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION", "Localisation/Translation" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO", "How do I translate things?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO", "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required." );

jr_define( "_JOMRES_FAQ_ADMIN_CATEGORY_TOURS", "Tours" );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO", "What are tours?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO", "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL", "How do I use Jomres to sell tours?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL", "To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR", "What is the Jintour plugin?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR", "Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING", "How do I sell tours and vacation rentals in the same booking?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING", "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS", "What about if I only want to sell tours?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS", "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property." );

jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS", "How can I create a Tour/bookable resource that can be seen in all properties booking forms?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS", "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself." );


jr_define( "_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST", "Ok, I've installed Jomres, what next?" );
jr_define( "_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST", "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now." );

jr_define( "_JOMRES_MANAGE_PROPERTIES", "Manage Properties" );

jr_define( "_JOMRES_CONFIG_IPINFODB_KEY_WARNING", "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes." );

jr_define( "_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING", "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes." );

jr_define( "_JOMRES_PERMIT_NUMBER_TITLE", "Permit number" );
jr_define( "_JOMRES_PERMIT_NUMBER_DESCRIPTION", "Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section." );

jr_define( '_JOMRES_SHORTCODES', "Shortcodes" );

jr_define( '_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed." );
jr_define( '_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed." );

jr_define( 'SHORTCODE_TASK', "Task" );
jr_define( 'SHORTCODE_DESCRIPTION', "Description" );
jr_define( 'SHORTCODE_ARGUMENTS', "Arguments" );
jr_define( 'SHORTCODE_EXAMPLE', "Example" );

jr_define( 'INTEGRITY_CHECK', "Filesystem Integrity Check" );
jr_define( 'INTEGRITY_CHECK_DESC', "This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here." );
jr_define( 'INTEGRITY_CHECK_FILENAME', "Filesystem Integrity Check" );
jr_define( 'INTEGRITY_CHECK_LOCALHASH', "Local hash" );
jr_define( 'INTEGRITY_CHECK_BUILDHASH', "Version hash" );
jr_define( 'INTEGRITY_CHECK_NOPROBLEMS', "Awesome! No problems were found." );


jr_define('_JOMRES_PROPERTYTYPE_MARKER',"Google maps marker");

jr_define( '_JOMRES_JAVASCRIPT_READMORE', 'Read more' );
jr_define( '_JOMRES_JAVASCRIPT_READLESS', 'Read less' );
jr_define('_JOMRES_TOURIST_TAX_TITLE',"Tourist tax");

jr_define('_JOMRES_TOURIST_TAX_TAXRATE',"Tourist tax rate");
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC',"Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.");
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO',"Is percentage?");
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC',"Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO',"Affects the entire booking value?");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC',"Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE',"Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.");
jr_define('NO_LICENSE_MESSAGE',"You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE',"You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE',"Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any e.g. Optional Extras or Rooms, then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any Optional Extras then you will see a second button where you can upload images for those specific resources.');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>First choose the image(s) you'd like to upload by clicking Add Image or using Drag and Drop. These will appear in the column on the right hand side.</li>
  <li>Above this area, use the \"Choose the resource\" button to choose which resource you want to upload images for. You may be offered the option to choose a specific resource underneath. </li>
  <li> Once you've chosen a resource you can then click the Upload Image button under an image to associate it with that resource. Once an image has been uploaded, it will disappear from the column on the right hand site, and appear in the left.</li>
  <li>Use the Trash button next to existing images to remove images you no longer want to be shown.</li>
  <li>You can change the order that files are shown in the slideshow by renaming them before uploading them, as they are displayed in pages in alphabetical order.</li>
</ol>
 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Next to the Resource button, you may see a Preview button. If you click on this you will see a popup that shows you how the currently uploaded images will look in a page. This helps to give you an idea of how the images will look to your customers.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "There is no limit to the number of images you can upload. Images are automatically resized when they are uploaded. You can only upload JPG and PNG files.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideally any images you upload would be at least ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels wide, otherwise they may look fuzzy after they've been uploaded.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Any images you upload cannot be more than ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in size.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Choose the resource you want to upload images for");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specific resource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Images already uploaded for this resource");


jr_define('_JOMRES_MARKDOWN_TITLE', 'Text formatting');
jr_define('_JOMRES_MARKDOWN_DESC', 'You can enter text here using simple Markdown formatting. You don\'t need to know any HTML, just use the buttons to make the information look like you want, or format text according to these examples.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Emphasis');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italics');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Lists");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numbered list item');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text to display');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'It can span multiple lines!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Images');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tables');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Column');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'If set to yes, a slideshow of property main images will be displayed. If set to no, then the first property main image will be displayed.');

jr_define('EDIT_CMS_USER', 'Edit CMS user');

jr_define('BOOKING_MADE_BY', 'Booking made by');

jr_define('_JOMRES_ROUTER_FEATURES', 'Amenities');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Room Types');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'External booking form URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Here you can set an external URL if you want to use a 3rd party website for making bookings. All jomres booking buttons will point to this URL. Leave this field blank if you want to use the Jomres booking form.');

jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Room Description');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'Guest blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');
