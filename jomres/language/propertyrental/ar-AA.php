<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

jr_define( '_JOMRES_COM_MR_QUICKRESDESC', 'حجز سريع' );
jr_define( '_JOMRES_COM_MR_SHOWPROFILES', 'عرض الملف الشخصي' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC', 'إعدادات الشركة' );
jr_define( '_JOMRES_COM_MR_BACK', 'للخلف' );
jr_define( '_JOMRES_COM_MR_YES', 'نعم' );
jr_define( '_JOMRES_COM_MR_NO', 'لا' );
jr_define( '_JOMRES_COM_MR_NEWTARIFF', 'جديد' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTY', 'شركة جديدة' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'خصائص الشركة الجديدة' );
jr_define( '_JOMRES_COM_MR_NEWGUEST', 'ضيف جديد' );
jr_define( '_JOMRES_COM_MR_SAVE', 'حفظ' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'الإسم' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'الوصول' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'المغادرة' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'تخصيص وظائف المستخدم كمسؤل' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_ID', 'الرقم التسلسلي' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NAME', 'الإسم' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'إسم المستخدم' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'المأذون به حاليا (انقر لإلغاء مصادقة المستخدم)' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'الشركة الإفتراضيه' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'تغير هذه' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'مستوى الوصول' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'تعديل المستخدم' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'لا ينطبق' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'الإستقبال' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'مدير الشركة' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'جميع الحجوزات' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'حجوزات جديدة' );
jr_define( '_JOMRES_COM_MR_EDITBOOKINGTITLE', 'تعديل الحجز' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'الوصول /المغادرة' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'الضيف' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'الوحدة' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'الدفع' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'الإسم الأول' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'اللقب' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'طلبات خاصة' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'يرجى ملاحظة أن بعض المتطلبات الخاصة التي قد تستدعي أجورا إضافية.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'الغاء الحجز' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'العنوان' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'الشارع' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'المنطقة' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'الرمز البريدي' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'رقم الهاتف' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'رقم الجوال' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'البريد الإلكتروني' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'لا يمكن إلغاء هذا الحجز لدخول الضيف ' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'لم يتم تقديم دفعه' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'تأكيد الإلغاء' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'تم الغاء الحجز' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'عدد الايام للوصول' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'نوع الحجز' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'أسود' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'الاستقبال' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'إنترنت' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NAME', 'إسم الوحدة' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NUMBER', 'الوحدة' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FLOOR', 'الدور' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_DISABLED', 'متاحه لذوي الإحتياجات الخاصة؟' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'العدد الاقصى للاشخاص' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'الوحدة / نوع الشركة' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'الوحدة / الشركة التوضيح' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'قائمة مزيا الوحدة' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'تم دفع الدفعة المقدمة' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'تحديث الدفعة المقدمة' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'الإحمالي المطلوب' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'مرجع الدفعة المقدمة' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'حجز' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'الدفعة المطلوبة' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'تم حفظ الدفعة المقدمة' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'الوحدات' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'إسم المنشأة' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'نوع المنشأة' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'تعديل بيانات الضيف' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'الإسم الأول' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_SURNAME', 'اللقب' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_HOUSE', 'العنوان' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_STREET', 'الشارع' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_TOWN', 'المنطقة' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'الرمز البريدي' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'رقم الهاتف' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_MOBILE', 'رقم الجوال' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FAX', 'رقم الفاكس' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'رقم بطاقة الإئتمان ' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'إصدار البطاقة' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'إنتهاء البطاقة' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'رقم الإصدار' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'الإسم على البطاقة' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'قم بالإختيار' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'ليلة / ليالي' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'عدد الضيوف' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'الإجمالي' );
jr_define( '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'عرض إعدادات الوحدات' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOM', 'الوحدات' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'مميزات الوحدة' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'أنواع الوحدات' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'المنشاءات' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'مميزات المنشاءه' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'الوحدة' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'النوع' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'الإسم' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'الرقم' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'الدور' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Disabled access?' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'إقصى عدد أشخاص' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'المميزات' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'تم إضافة الوحدة' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'تم التعديل' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'مميزات الوحدة' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'تفاصيل المميزات' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'تم حفظ المميزات' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'تحديث مميزات الوحدة' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'نوع الوحدة' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Resource/business type abbreviation' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'تفاصيل نوع الوحدة / المنشاءة' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'تم حفظ نوع الوحدة' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'تم تحديث نوع الوحدة' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'تم التعديل' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'الإسم' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'العنوان' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'المدينة' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'المنطقة' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'البلد' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'الرمز البريدي' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'الهاتف' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'الفاكس' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'البريد الإلكتروني' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'الموقع الإلكتروني' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'المميزات' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'تم حفظ المنشاءة' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'تم تحديث المنشاءة' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'مميزات المنشاءة' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'مميزات المنشاءة' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'تفاصيل كاملة عن المنشاءة' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'تم إضافة تفاصيل المنشاءة' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'تم حفظ مميزات المنشاءة' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE', 'الإسعار' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'إسم رمز السعر' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'التفاصيل' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'صالح من تاريخ' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'صالح إلى تاريخ' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'السعر لليلة ' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'أقل مدة إقامة' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'أعلى مدة إقامة' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'أقل عدد أشخاص' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'أعلى عدد أشخاص' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'نوع الوحدة' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignore PPPN' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'السماح بنهاية الإسبوع' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'تم إضافة السعر' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'تم تحديث السعر' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'تم التحديث' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'إستنساخ البند' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_DELETED', 'تم حدف السعر' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'تعديل السعر' );
jr_define( '_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'إجازة رسمية' );
jr_define( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'تم حفظ الحجز' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Book a guest in' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Book guest out' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'قائمة الحجوزات' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'حجوزات جديدة' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'لوحة التحكم' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Guest admin' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Business admin' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'التحقق من الإمكانيات' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'تأكيد بياناتك' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'الإسم' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'اللقب' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'رقم الهاتف' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'العنوان' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'المدينة' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'الرمز البريدي' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'رقم الهاتف ' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'رقم الجوال' );
jr_define( '_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'لاتوجد وحدات متاحة حسب المعايير المطلوبة' );
jr_define( '_JOMRES_FRONT_MR_BOOKINGMADE', '<center>شكرا لطلب الحجز معنا ونتمى لكم إقامة ممتعة<br><br> <b>الرجاء أخذ بعين الاعتبار أن هذا الحجز حجز مبدئي وسنقوم بإشعاركم فور تأكيد الحجز </center>' );








jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Book in guest ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'إختر اسم الضيف ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Guest booked in ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'لا يوجد ضيف بتاريخ وصول اليوم' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Book out guest ' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'لايوجد ضيف بتاريخ مغادرة اليوم' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS', 'الكماليات' );
jr_define( '_JOMRES_COM_A_TARIFFS', 'الأسعار والعملة' );
jr_define( '_JOMRES_COM_A_DISCOUNTS', 'الخصم' );
jr_define( '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'تحميل ملف' );
jr_define( '_JOMRES_COM_A_CURRENT_SETTINGS', 'الإعدادات الحالية' );
jr_define( '_JOMRES_COM_A_EXPLANATION', 'التوضيح' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'المكملات للشخص الواحد' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'تأكد من تعين هذا -نعم في حال كنت تريد احتساب المكملات بالشخص' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'تكلفة المكملات للشخص المواحد' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'هل تريد الدفعه المقدمة بالنسبة المئوية?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'هل الدفعه المقدمة بالنسبة المئوية لإجمالي قيمة الحجز? إذا لا, سيتم احتساب الدفعه المقدمة بسعر ثابت' );
jr_define( '_JOMRES_COM_A_DEPOSIT_VALUE', 'قيمة الدفعة المقدمة ' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER', 'للشخص ، لليلة' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC', 'حدد نعم إذا كنت تريد فرض رسوم لكل شخص لكل ليلة. إذا حدد لا, سيتم احتساب التكلفة للوحدة لليلية' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE', 'حجم الملف' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max. Image Filesize in Kilobyte' );
jr_define( '_JOMRES_FRONT_MR_BOOKED', 'الوحدة محجوزة' );



jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'تفاصيل الحجز' );






jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'نود ان نلفت انتباهكم ان الحجز هو عقد ملزم ,في حال أردتم الإلغاء خلال إقصى مدة سيتوجب عليكم دفع كامل المبلغ' );

jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>رسوم الإلغاء</i> في حال الإلغاء نرجو التواصل معنا قبل الحجز بمده كافية. والا سيتم تطبيق شروط الإلغاء :' );




jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'من 14 يوم وحتى تاريخ الوصول' );


jr_define( '_JOMRES_COM_CONFIRMATION_PRINT', 'طباعة رسالة التأكيد' );
jr_define( '_JOMRES_COM_INVOICE_TITLE', 'طباعة الفاتورة' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS', 'عدد الليالي: ' );
jr_define( '_JOMRES_COM_INVOICE_CONTRACTAGREED', 'موافقة مبدئية: ' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT', 'تكلفة الليلة: ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'الإجمالي العام' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_INTRO1', 'شكرا لك' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'ونتمنى روئيتك معنا مجدداً' );
jr_define( '_JOMRES_COM_INVOICE_PRINT', 'طباعة الفاتورة' );
jr_define( '_JOMRES_COM_ADDSERVICE_TITLE', 'إضافة خدمة' );
jr_define( '_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'تفاصيل الخدمة ' );
jr_define( '_JOMRES_COM_ADDSERVICE_VALUE', 'قيمة الخدمة' );
jr_define( '_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'المواد المفوترة الاخرى' );
jr_define( '_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'إجمالي قيمة المواد المفوترة الاخرى: ' );
jr_define( '_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'تم إضافة الصنف ' );
jr_define( '_JOMRES_UPLOAD_IMAGE', 'تحميل صورة' );
jr_define( '_JOMRES_FILE_UPLOAD', 'تحميل ملف' );
jr_define( '_JOMRES_FILE_ERROR_TYPE', 'مسموح لك فقط تحميل هذه الانواع من الملفات:\n' );
jr_define( '_JOMRES_FILE_ERROR_EMPTY', 'فضلاً اختر الملف اولاً' );
jr_define( '_JOMRES_FILE_ERROR_NAME', 'يجب ان يكون اسم الملف من حروف وارقام فقط ومن غير فراغات.' );
jr_define( '_JOMRES_FILE_ERROR_SIZE', 'حجم الملف اكبر من المسموح به' );
jr_define( '_JOMRES_FILE_NOT_UPLOADED', 'لم يتم تحميل الملف.' );
jr_define( '_JOMRES_FILE_UPDATED', 'تم تحميل الملف.' );
jr_define( '_JOMRES_COM_A_JSCALENDAR', 'JS التقويم' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE', 'JS ملف لغة التقويم' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Choose the language file that should be used in the Javascript calendar. Please note that some of the calendars may be faulty, See http://sourceforge.net/tracker/?group_id=75569&atid=544287 for more information' );
jr_define( '_JOMRES_COM_A_CALENDARCSS', 'JS Calendar CSS file' );
jr_define( '_JOMRES_COM_A_CALENDARCSS_DESC', 'Choose the CSS file that should be used in the Javascript calendar' );
jr_define( '_JOMRES_COM_A_ODDS', 'Misc.' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.' );
jr_define( '_JOMRES_FILE_DELETE', 'حذف الصورة' );
jr_define( '_JOMRES_FILE_DELETED', 'تم الحذف' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETE', 'حذف' );
jr_define( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'لايمكن حذف هذه المنشاءه , يوجد سجل حجوزات بها. الرجاء حذف السجل والمحاولة مره اخرى.' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETED', 'تم حذف المنشاءه' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'حذف مزايا المنشاءه' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'غير قادر على حذف هذه المميزات, بسبب وجودها في احد المنشاءات. الرجاء حذفها من المنشاءه والمحاولة مره اخرى.' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'تم حذف المزايا' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'حذف المزايا' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'غير قادر على حذف المزايا, بسبب وجودها في احد المنشاءات. الرجاء حذفها من المنشاءاه والمحاولة مره اخرى.' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'تم حذف المزايا' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETE', 'حذف نوع المنشاءاه' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'غير قادر على حذف نوع المنشاءاه, بسبب وجودها في احد المنشاءات. قم بتغير نوع المنشاءه والمحاولة مره اخرى.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'غير قادر على حذف نوع المنشاءاه, بسبب وجودها مع تعرفه سعر. حاول ربط السعر بنوع اخر وحاول الحذف مجددا' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETED', 'تم حذف نوع المنشاءه' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE', 'حذف منشاءاه' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETED', 'تم حذف منشاءاه' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'ليس لديك الصلاحية الكافية لحذف منشاءه' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Image width after Jomres resizes uploaded images' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'الخريطة' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'تفاصيل المنشاءه' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'أوقات الدخول' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'نقاط الإهتمام' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'تعليمات الوصول' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'المطار' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'مواصلات اخرى' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'الشروط والأحكام' );
jr_define( '_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'العنوان' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'بإمكان الزائر الحجز مباشرة' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'عند الضبط بنعم سيتمكن الزائر من الحجز مباشرة دون التسجيل' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'الحجوزات لتواريخ محددة' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'عند الضبط بنعم, سيتم اخذ الحجوزات بتاريخ محددة. في حال الضبط ب لا, تاكد من ضبط موعد الدخول isn\'t عند الضبط بنعم (إلا إذا كنت تريد اجبار الناس على وجه التحديد للوصول في يوم معين) وإلا فلن تحصل على العديد من الروابط في التقويم توافر.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD', 'فترة الحجز: ' );
jr_define( '_JOMRES_COM_A_BOOKING', 'إحجز الآن' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximum periods, eg 3x 7 booking periods = 21 days' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Is this an apartment/cottage/villa?' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'EG you are renting out a business, rather than resources in that business. If this is the case, then you must make sure that you only have the one resource registered against each business.' );
jr_define( '_JOMRES_FRONT_MR_REVIEWBOOKING', 'مراجعة الحجز' );
jr_define( '_JOMRES_COM_MR_CONFIRMBOOKING', 'تأكيد الحجز' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'الإثنين' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'الثلاثاء' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'الأربعاء' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'الخميس' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'الجمعة' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'السبت' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'الأحد' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'الإثنين' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'الثلاثاء' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'الأربعاء' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'الخميس' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'الجمعة' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'السبت' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'الأحد' );
jr_define( '_JOMRES_COM_A_AVLCAL', 'تقويم الإمكانيات' );
jr_define( '_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'لون الخط للتاريخ الحالي' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE', 'لون الخط في التقويم الشهري' );
jr_define( '_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'لون الخط ليس في التقويم الشهري' );
jr_define( '_JOMRES_COM_AVLCAL_INBGCOLOUR', 'لون الخلفية في حال التوافر' );
jr_define( '_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'لون الخلفية خارج التقويم' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'لون خلفية الخليه للايام المشغولة' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'لون خلفية الخليه للحجوزات المؤقته)' );
jr_define( '_JOMRES_COM_AVLCAL_PASTCOLOUR', 'لون خلفية الخليه للإيام الماضيه' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'مشغولة / غير متاحة' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'المتاحة للحجز' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'الحجوزات السابقة' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'يوم وصول محدد مسبقاً' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'فقط لمواقع تعرض حجوزات فترة محددة. اختيار اليوم الذي يجب أن تبدأ على القادمون' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'يوم وصول محدد' );
jr_define( '_JOMRES_FRONT_MR_FIXEDPRIOD1', 'مدة الإقامة' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'عرض تقويم الإمكانيات؟' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'تعيين هذا إلى نعم لإظهار التقويمات توافر' );
jr_define( '_JOMRES_FRONT_AVAILABILITY', 'الإمكانيات / التوافر' );
jr_define( '_JOMRES_FRONT_CALENDAR_CLICKDATES', 'إضغط على الاوقات الحرة لعرض نموذج الحجز.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING', 'الحجوزات السوداء' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_NEW', 'حجوزات سوداء جديدة' );
jr_define( '_JOMRES_FRONT_DELETEGUEST', 'حذف الضيف' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'تم حذف الضيف' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'غير قادر على حذف هذا الضيف' );
jr_define( '_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'القيمة الفعلية للحجز: ' );






jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'مدخن' );
jr_define( '_JOMRES_FRONT_ROOMSMOKING_EITHER', "أي منهما" );
jr_define( '_JOMRES_COM_CALENDAROUTPUT', 'صيغة التقويم' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT_DESC', 'هذا يسمح للمستخدم لتغيير الشكل الناتج التواريخ داخل Jomres' );
jr_define( '_JOMRES_COM_CALENDARINPUT', 'صيغة إدخال التقويم' );
jr_define( '_JOMRES_COM_CALENDARINPUT_DESC', 'هذا يسمح للمستخدم لتغيير صيغة إدخال التواريخ ضمن Jomres.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'عبر فترة محددة تسمح فترات توقف قصيرة' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'طول عطلة قصيرة' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISHED', 'منشور' );
jr_define( '_JOMRES_COM_A_PAYPAL', 'Paypal' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'سجل التدقيق' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_DATE', 'التارخ' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_TIME', 'الوقت' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_USER', 'إسم المستخدم' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_OPERATION', 'العملية' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'عرض التفاصيل' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'فرز بالتاريخ' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'فرز بإسم المستخدم' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'فرز بنوع العملية' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'الحالة' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'وصول معلق' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'وصول اليوم' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'مقيم حالياً' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'مغادرة اليوم' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'مغادرة متأخرة' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'لم يصل' );
jr_define( '_JOMRES_MR_AUDIT_UNKNOWNUSER', 'مستخدم غير معروف' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM', 'إنشاء وحدة' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM', 'تحديث وحدة' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM', 'تم حذف الوحدة' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'إنشاء مميزات الوحدة' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'تحديث مميزات الوحدة' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'تم حذف مميزات الوحدة' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'إدخال نوع الوحدة' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'تحديث نوع الوحدة' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'تم حذف نوع الوحدة' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'إنشاء منشاءة' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'تحديث منشاءة' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'تم حذف المناءه' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'تم إنشاء مميزات المنشاءه' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'تم تحديث مميزات المنشاءه' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'تم حذف مميزات المنشاءه' );
jr_define( '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'تحرير إعدادات المنشاءه' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'تفعيل المنشاءه' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_TARIFF', 'تم إدخال سعر' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'تم تحديث الاسعار' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_TARIFF', 'تم حذف الاسعار' );
jr_define( '_JOMRES_MR_AUDIT_ADDSERVICE', 'إضافة رسوم خدمات' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'تسجيل دخول ضيف' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'تسجيل مغادرة ضيف' );
jr_define( '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'إدخال الدفعه المقدمة' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_GUEST', 'إنشاء الضيف' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_GUEST', 'تحديث الضيف' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_GUEST', 'تم حذف الضيف' );
jr_define( '_JOMRES_MR_AUDIT_BOOKED_ROOM', 'إحجز الآن' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_EXTRA', 'إدخال إضافة' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'تحديث إضافة ' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_EXTRA', 'تم حدف الإضافة' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'تفعيل الإضافة' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING', 'إدخال حجز أسود' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'تم حذف حجز أسود' );
jr_define( '_JOMRES_COM_MR_EXTRA_TITLE', 'الإضافات' );
jr_define( '_JOMRES_COM_MR_EXTRA_DESC', 'التوضيح' );
jr_define( '_JOMRES_COM_MR_EXTRA_NAME', 'الإسم' );
jr_define( '_JOMRES_COM_MR_EXTRA_PRICE', 'السعر' );
jr_define( '_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'تم تحديث الإضافة' );
jr_define( '_JOMRES_COM_MR_EXTRA_LINKTEXT', 'تحرير الصنف' );
jr_define( '_JOMRES_COM_MR_EXTRA_DELETED', 'تم حذف الإضافة' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'التحكم بالإضافات' );
jr_define( '_JOMRES_COM_A_EXTRAS', 'إظهار الإضافات أثناء الحجز؟' );
jr_define( '_JOMRES_COM_A_EXTRAS_DESC', 'تعيين هذا إلى نعم لإظهار أي إضافات التي قد ترغب في تقديم للضيف' );
jr_define( '_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'إضافات إختياريه' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'تاريخ بدء الحجز الأسود' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'استئناف الخدمة تاريخ ' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'الحجوزات السوداء' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'كان هناك خطأ في محاولة لحجز هذه الوحدة، واحدة أو أكثر من وحدات حددتها غير متوفرة.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Resources included in black booking' );
jr_define( '_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'View blackbooking' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'No black bookings to list' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'عدد النجوم' );
jr_define( '_JOMRES_COM_A_SMOKING', 'إظهار خيارات التدخين' );
jr_define( '_JOMRES_COM_A_SMOKING_DESC', 'إختر نعم لعرض خيارات التدخين' );
jr_define( '_JOMRES_COM_A_RESET', 'إعادة ضبط' );
jr_define( '_JOMRES_COM_A_PAYPAL_CANCELLED', 'حجز ملغي' );
jr_define( '_JOMRES_FRONT_MR_SEARCH_HERE', 'البحث هنا عن:' );
jr_define( '_JOMRES_COM_A_SMOKING_OPTION', 'تفضيلات التدخين الإفتراضي' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL', 'علامة العملة' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'Eg &amp;pound&#59; يرجى ملاحظة أنه يجب عليك استخدام رمز HTML لهيئات الرمز المطلوب. للحصول على قائمة من هذه هيئات يرجى زيارة <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE', 'رمز العملة' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE_DESC', 'Eg GBP. ويستخدم هذا في البريد الإلكتروني للعميل تأكيد الحجز في آرائهم.' );
jr_define( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'قرائة المزيد' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'حد الحجوزات المقدمة' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'تعيين هذا إلى نعم إذا كنت تريد للحد من الحجوزات مقدما (استخدم الحقل التالي لتعيين حد من حيث أيام). إذا كنت تعيين هذا إلى نعم ثم إذا كان المستخدم يحاول حجز أكثر من ن يوما على الأقل وبعد ذلك يتم استعادة تاريخ وصولهم إلى تاريخ اليوم' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'حد عدد الأيام للحجوزات المقدمة:' );
jr_define( '_JOMRES_COM_A_TAX_WARNING', '<font color=red>ملاحظة: لا ينصح بأن تقوم بتعيين كل من الخيارات التالية لنعم، يجب عليك استخدام واحد فقط من حسابات الضرائب المتاحين لك. </FONT>' );
jr_define( '_JOMRES_COM_FRONT_ROOMTAX', 'الضريبة' );
jr_define( '_JOMRES_COM_A_ROOMTAX', 'ضريبة الوحدة' );
jr_define( '_JOMRES_COM_A_ROOMTAX_DESC', 'صممت للسوق الأمريكي. هذه هي المبالغ الضريبية الموارد التي ستحمل للضيف. يمكنك شحن مجموعة و / أو من الشخصيات الثابتة والنسبة المئوية. لاحظ أن يتم تطبيق هذه الضرائب فقط على تكلفة المورد.' );
jr_define( '_JOMRES_COM_A_ROOMTAX_FIXED', 'ضريبة محدد للوحدة' );
jr_define( '_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'نسبة الضريبة' );
jr_define( '_JOMRES_COM_A_EUROTAX', 'ضريبة' );
jr_define( '_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'نسبة الضريبة' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVE', 'أرشيف كامل السجلات' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' تم أرشفت السجلات' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'المراجع أرشفة سجلات التدقيق' );
jr_define( '_JOMRES_FRONT_TARIFFS', 'قائمة الأسعار' );
jr_define( '_JOMRES_FRONT_TARIFFS_TITLE', 'مسمى السعر' );
jr_define( '_JOMRES_FRONT_TARIFFS_DESC', 'تفاصيل السعر' );
jr_define( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'نوع الوحدة' );
jr_define( '_JOMRES_FRONT_TARIFFS_STARTS', 'صالح من تاريخ' );
jr_define( '_JOMRES_FRONT_TARIFFS_ENDS', 'حتى تاريخ' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN', 'للشخص لليلة' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN', 'لليلة' );
jr_define( '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'غير شامل نهاية الأسبوع' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINDAYS', 'أقل عدد أيام' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXDAYS', 'أعلى عدد أيام' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINPEEPS', 'أقل عدد أشخاص' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'أعلى عدد أشخاص' );
jr_define( '_JOMRES_FRONT_PREVIEW', 'عرض' );
jr_define( '_JOMRES_COM_A_EDITINGMODEON', 'التحرير فعال؟' );
jr_define( '_JOMRES_COM_A_EDITING_CURRENTTEXT', 'النص الحالي' );
jr_define( '_JOMRES_COM_A_EDITING_NEWTEXT', 'نص جديد' );
jr_define( '_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'تحديث النص الإختياري' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'تحرير اللغة' );
jr_define( '_JOMRES_COM_A_AUDITING_SHOWING', 'عدد السجلات الغير موأرشفه: ' );
jr_define( '_JOMRES_FRONT_PTYPE', 'نوع المنشاءة' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE', 'فائمة أنواع المنشاءات' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'تحرير نوع المنشاءه' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE', 'نوع المنشاءه' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC', 'تفاصيل نوع المنشاءه' );
jr_define( '_JOMRES_COM_PTYPES_SAVED', 'تم حفظ نوع المنشاءه' );
jr_define( '_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'غير قادر على حذف المنشاءه. نوع المنشاءه مربوط مع اكثر من منشاءه, الرجاء اعادة التعيين ثم حاول الحذف مره اخرى' );
jr_define( '_JOMRES_COM_PTYPES_DELETED', 'تم حذف نوع المنشاءه' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'التذكير بالسداد' );
jr_define( '_JOMRES_EXTRAS_NOEXTRAS', 'لا يوجد خدمات إضافيه على الفاتورة' );
jr_define( '_JOMRES_COM_CHARGING_DEPOSIT', 'الدفعه المقدمة' );
jr_define( '_JOMRES_COM_CHARGING_FULLAMT', 'كامل المستحق' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG', 'المبلغ المدفوع أثناء الحجز' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG_DESC', 'استخدام هذا الخيار لتحديد ما ينبغي أن يتوجب دفع في وقت الحجز. اختيار ما إذا كان ينبغي إيداع المتهمين إيداع، أو كامل المبلغ إذا كان ينبغي دفع المبلغ بالكامل.' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW', 'عرض الشهور' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW_DESC', 'في إمكانيات الوحدة, كم عدد الشهور ليتم عرضها' );
jr_define( '_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'وقعت بالنيابة عن ' );
jr_define( '_JOMRES_COM_A_GATEWAYLIST', 'العبارات' );
jr_define( '_JOMRES_COM_A_CANCEL', 'إلغاء' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'حدد التواريخ التي تريد تطبيق عبر السوداء. عند تحديد مواعيد مناسبة، انقر فوق "تطبيق" الزر لإعادة تحقيق توافر. <br/> 
<br/> 
اختيار الوحدات التي ترغب في اتخاذ خارج الخدمة. <BR> إذا وحدة لايوجد علامة الاختيار ضدها، فإنه لا يتم تضمينها في الحجز السوداء حتى يتم الانتهاء أي حجوزات المعلقة / الملغاة.<br/> ' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center><b>لقد تم تسجيل خروجك عن عدم النشاط </ B> الرجاء تسجيل الدخول وإعادة المحاولة.' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'السبب' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'إستخدام طرق الدفع او عبارات الدفع؟' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'تعيين هذا إلى نعم إذا كنت ترغب في استخدام بوابات الدفع عبر الإنترنت. <B> ملاحظة: </ B> وهذا لا إيقاف تشغيل حساب الودائع وأظهرت أثناء عملية الحجز. لتعطيل هذا يمكنك تحرير القوالب التي تظهر الموارد والتفاف العناصر التي تشير إلى الودائع داخل فئة التي تحمل الخط واللون للخلفيةهي نفسها' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'فضلا اختر طريق الدفع' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', 'تفعيل طريقة الدفع' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'تم تحديث الإضافات' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'تم إدراج اعدادات اضافة' );
jr_define( '_JOMRES_FRONT_GALLERYLINK', 'عرض صفحة المنشاءة' );
jr_define( '_JOMRES_COM_A_GALLERYLINK', 'روابط خارجية' );
jr_define( '_JOMRES_COM_A_GALLERYLINK_DESC', 'ضع رابط الصفحة الخاصة بك هنا' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'عرض بطاقة الإئتمان' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'تحديث بطاقة الإتمان' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'تحرير بطاقة الإئتمان' );
jr_define( '_JOMRES_COM_A_EDITICON', 'تحرير مقاس الصورة الرمزية' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Batch business image upload' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'الصورة موجودة مسبقا' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'معرض الصور' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'عرض رابط معرض الصور' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'عرض مضمون معرض الصور' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'عرض مقاس الصورة المصغرة' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'معرض الصور' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />عذرا، لا تتوفر صور لهذا الفندق. يرجى تحميل بعض الصور باستخدام ميزة تحميل الدفعة إذا كنت ترغب في استخدام ميزة عرض الشرائح.' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'عرض رابط لقائمة الأسعار' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', 'السماح بالصفحة المنبثقة' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'إذا تم تعيينها إلى لا، فإن الروابط التي عادة قد افتتح في البوب ​​فتح المضمنة بدلا من ذلك.' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'تحميل صور معرض الصور' );
jr_define( '_JOMRES_A_TABS_MISC', 'Misc' );
jr_define( '_JOMRES_A', 'إعدادات البرنامج العامة' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'استخدام المزيا العامة للمنشائات' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'تعيين هذا إلى نعم إذا كنت تريد فرض لجميع الشركات فقط استخدام الميزات التجارية التي يحددها المسؤول عن الموقع.' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'لتعيين صورة لهذه الميزة تحتاج أولا إلى تحميل الصور الخاصة بك ميزة الفندق إلى /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ' );
jr_define( '_JOMRES_A_ICON', 'الصورة الرمزية' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'اختر اضافة البحث اذا اردت استخدامها' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>عذرا، البحث لم ترجع أية نتائج. يرجى تعديل بحثك وحاول مرة أخرى.</b>' );
jr_define( '_JOMRES_AREYOUSURE', 'هل تريد القيام بذلك على كل حال؟' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'إحجز الآن' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'إحجز الآن' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'الرقم السري' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'عرض قائمة الأسعار' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'العنوان' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'معلومات مفصلة' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'إضغط على الوحدة لعرض الإمكانيات' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'عرض معلومات الأسعار' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'عرض معلومات العنوان' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'عرض معلومات المنشائه' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'عرض الوحدات والإمكانيات' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'عرض معلومات الأسعار' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'الاسعار الموحدة' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'المتوسط' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'إختر نوع السعر المراد استخدامه' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', "لديك خيارين للطرق الحساب الأسعار. المرحلة الأولى، وللشقة معدل الطريقة تمكنك لتقديم عدد من التعريفات المختلفة للضيف، و سعر للوقف هو نفسه للمرة بأكمله. هذا مفيد إذا كنت ترغب في تقديم التعريفات المختلفة للتاريخ نفسه، على سبيل المثال سرير وإفطار والتعريفة B & B وجبة المساء الجمركية. اختيار المعدلات التعريفية-إذا كنت ترغب في ضبط الأسعار الخاصة بك تعتمد على التاريخ في السؤال. سوف تجد كل Jomres من الرسوم عن كل يوم في الحجز، وإضافتها معا ثم العودة المعدل المتوسط ​​عبر فترة" );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'عرض تاريخ المغادرة' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "تعيين هذا إلى لا إذا كنت لا تريد أن تظهر مدخلات تاريخ المغادرة مربع. فقط استخدام هذا إذا كنت تعرف ما تفعلونه، وسوف دائما في موعد المغادرة عبر وضعها لفي اليوم التالي لموعد الوصول." );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC', 'تفاصيل محدده' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC_DESC', "وهذا يحد من عدد الأحرف الموجودة في القائمة عند وضع الفندق من الوصف الفندق." );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE', 'صيغة التاريخ ؟' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISH', 'تفعيل' );
jr_define( '_JOMRES_COM_MR_VRCT_UNPUBLISH', 'غير مفعله' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES', 'إستخدام نوع الوحدات العالمية' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_DESC', 'Set this to Yes if you want to force all businesses to use only the resource/business types defined by the webmaster. You need to set this to Yes if you intend to allow searching via resource/business types.' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_INFO', 'To assign an image to this resource/business type you first need to upload your resource/business type images to the /images/stories/jomres/rmtypes/ folder. ' );
jr_define( '_JOMRES_COM_INPUTERROR_BACKGROUND', 'ادخال لون خلفية خاطئ' );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES', 'البلد الإفتراضي في نموذج الحجز' );
jr_define( '_JOMRES_JAVASCRIPT_', 'الحقول المحددة باللون الأحمر حقول إلزامية ' );
jr_define( '_JOMRES_COM_SELFREGISTRATION', 'يمكن للمستخدمين تسجيل منشائتهم' );
jr_define( '_JOMRES_COM_SELFREGISTRATION_DESC', 'تعيين هذا إلى نعم إذا كنت تريد للمستخدمين أن تكون قادرة على تسجيل الفندق الخاصة دون تدخل الادارة.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'الرجاء تزويدنا ببلد ومنطقة المنشاءه' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'فضلاً اكميل تفاصيل المنشاءه' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'الحقول المحددة باللون الأحمر حقول إلزامية' );
jr_define( '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'ثم إنشاء المنشاءه' );
jr_define( '_JOMRES_REGISTRATION_NOTALLOWED', "عذرا، لا يمكنك إنشاء فندق على هذا النظام. يجب أن تكون تسجيل الدخول، تسجيل المستخدم قبل أن تتمكن من المضي قدما." );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY', 'ثم إنشاء المنشاءه: ' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'للمستخدم: ' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR', 'عرض التقويم لبداية السنة' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'جدول يبين توافر منذ بداية العام الحالي.' );
jr_define( '_JOMRES_NUMBEROFROOMSAVAILABLE', 'عدد الوحدات المتاحة' );
jr_define( '_JOMRES_BACKTOPROPERTYDETAILSLINK', 'العودة لتفاصيل المنشاءة' );
jr_define( '_JOMRES_FRONT_ROOMTYPES', 'نوع المنشاءه -الوحدات' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'حد البحث العشوائي' );
jr_define( '_JOMRES_SHOWGOOGLECURRENCYLINKS', 'أظهر روابط تحويل العملة في قائمة التعريفة؟' );
jr_define( '_JOMRES_CURRENCYCONVERSIONTEXT', 'تحويل العملات' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR', 'السماح للمستخدمين لتحرير بواسطة محرر HTML ' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS', 'إستخدام هذه النافذة لوضع الحجز. تعديل تفاصيل الحجز مثل تواريخ الوصول والمغادرة والأرقام أعلاه، ثم حدد الفنادق التي تحتاجها من قائمة تلك المتاحة. انقر فوق أي الفنادق المتوفرة لإضافتها إلى الحجز. عندما تنتهي من ذلك، يمكنك إضافة أي إضافات الاختيارية التي قد تتطلب وتقديم تفاصيل عنوانك. عندما يكون النموذج لديه معلومات كافية فإنه سيتم ثم إعطاء لك زر إرسال بحيث يمكنك تأكيد الحجز.' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'إستخدام هذه النافذة لوضع الحجز. تعديل تفاصيل الحجز مثل تواريخ الوصول والمغادرة وعدد النزلاء. عندما تنتهي من ذلك، يمكنك إضافة أي إضافات الاختيارية التي قد تتطلب وتقديم تفاصيل عنوانك. عندما يكون النموذج لديه معلومات كافية فإنه سيتم ثم إعطاء لك زر إرسال بحيث يمكنك تأكيد الحجز.' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS', 'تفاصيل الحجز' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS_DESC', 'إختر تفاصيل الحجز المطلوبة' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE', 'الإمكانيات ' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC', 'إختر الوحدة المطلوبة' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'انظر هنا لمعرفة إذا كان الفندق متاح في الوقت الحالي.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS', 'الخدمات' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_DESC', 'الخدمات' );
jr_define( '_JOMRES_COM_PERDAY', 'لليلة' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS', 'التفاصيل الخاصة بك' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS_DESC', 'من فضلك ادخل التفاصيل الخاصة بك. ملاحظة أن جميع الحقول مطلوبة مع النجمة الحمراء.' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLEROOMS', 'الوحدات المتاحة' );
jr_define( '_JOMRES_AJAXFORM_SELECTEDROOMS', 'الوحدات المختارة' );
jr_define( '_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', 'تاريخ الوصول المبكر: ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM', 'لليلة:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'الإقامة' );
jr_define( '_JOMRES_AJAXFORM_BILLING_EXTRAS', 'الخدمات:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX', 'الضرائب:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'الخصم:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTAL', 'الإجمالي العام:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'الضيوف' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION', 'إضافة إختيارك' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'حذف من إختياراتك' );
jr_define( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'نوع الضيف' );
jr_define( '_JOMRES_VARIANCES_TYPE', 'النوع' );
jr_define( '_JOMRES_VARIANCES_TYPE_TT', 'نوع الضيف , على سبيل المثال اطفال عمر بين 5-10 سنوات, أو طالب ' );
jr_define( '_JOMRES_VARIANCES_NOTES', 'ملاحظات' );
jr_define( '_JOMRES_VARIANCES_NOTES_TT', 'ملاحظات تود استخدامها لنوع الضيف التالي' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM', 'حد اقصى ' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM_TT', 'الحد الاقصى لنوع الضيف المراد استخدامه في نموذج الحجز' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE', 'هل تود ان تكون نسبة مئوية ؟' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'The figure calculated is a percentage of the Base figure calculated for the resource. If this is set to no then the figure you specify is simply added or subtracted from the base resource value.' );
jr_define( '_JOMRES_VARIANCES_POSNEG', 'Add variance?' );
jr_define( '_JOMRES_VARIANCES_POSNEG_TT', 'The figure calculated is added to or removed from the Base figure calculated for the resource. Set this to No if you want this to be a discount from the base figure. ' );
jr_define( '_JOMRES_VARIANCES_VARIANCE', 'Variance' );
jr_define( '_JOMRES_VARIANCES_VARIANCE_TT', 'The amount of the variance' );
jr_define( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Modified customer type order' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'تم نشر نوع الضيف ' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'تم حذف نوع الضيف ' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'تم إنشاء نوع الضيف' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'تم تحديث نوع الضيف' );
jr_define( '_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'تم تحديث نوع الضيف' );
jr_define( '_JOMRES_COM_A_SHOWROOMSLISTLINK', 'تظهر الرابط لتوحيد الصفحة قائمة في صفحة تفاصيل المنشأة؟' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL', 'عرض <b>فقط</b> تقويم الإمكانيات؟' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'تبديل هذا إلى نعم لتعطيل عرض رأس الممتلكات والتفاصيل، بحيث توفر فقط التقويم للعرض في قسم تفاصيل المنشأة. فقط المقصود حقا للمستخدمين تأجير الممتلكات واحد وحدة (مثل الشقق، البيوت الخ).' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL', 'اقل مدة وصول ومغادرة' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'والحد الأدنى لفي نموذج الحجز بين تاريخ الوصول وتاريخ المغادرة.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'نموذج حجز الوحدات القائمة لعرض رقم الوحدة' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'نموذج حجز الوحدات القائمة لعرض اسم الوحدة' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'نموذج الحجز من قائمة الوحدات لعرض عنوان السعر' );
jr_define( '_JOMRES_ORDER', 'طلب' );
jr_define( '_JOMRES_REQUIREDFIELDS', 'مطلوب الزامي' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'الايام قبل الوصول' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'الحد الأدنى لعدد الأيام التي يجب أن ينقضي، من "اليوم"، قبل الوصول' );
jr_define( '_JOMRES_DTV', 'اختلافات نوع التاريخ' );
jr_define( '_JOMRES_DTV_DOW', 'يوم في الاسبوع' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'النوع الافتراضي لنوع العميل' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'الرقم الافتراضي لأول مرة من نوع الضيف الأول. إذا كنت تستخدم أنواع أعلاه، ثم وهذا هو الرقم الافتراضي الذي سيتم تعيين نوع الضيف الأول في نموذج الحجز ل.' );
jr_define( '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'فقط العملاء المسجلين بامكانهم الحجز ؟' );
jr_define( '_JOMRES_REGISTEREDUSERSONLYBOOK', 'عذرا، يجب أن تكون مستخدما مسجلا لحجز عبر الإنترنت. انقر هنا للتسجيل في هذا الموقع.' );
jr_define( '_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'لون الخط للرابط الخاص بالحجز الحالي' );
jr_define( '_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'حد نهاية الاسبوع' );
jr_define( '_JOMRES_COM_AVLCAL_BOOKING_KEY', 'الوحدة محجوزه مسبقاً' );
jr_define( '_JOMRES_COM_AVLCAL_BLACK_KEY', 'حجز' );
jr_define( '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'تقريب الودائع تصل إلى أقرب عدد صحيح؟' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'رسوم الودائع؟' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'حفظ الاسعار بنظام اسبوعي ' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'لديك الخيار لتخزين رسوم التعريفة الجمركية في أي من القيم اليومية أو الأسبوعية. إذا تخزينها والأسبوعية، يجب عليك تعيين هذا الخيار إلى نعم.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'في الأسبوع' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'وصول ثابت يعود تكرار: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'عندما يتم اختيار مواعيد وصول الثابتة، وتواريخ عدد التي يمكن أن تظهر في القائمة المنسدلة التواريخ. لاحظ أن قائمة التواريخ لن تتضمن أي تواريخ إذا كان الحجز غير ممكن بسبب الحجوزات المسبقة، وأن القائمة سوف يكون في الواقع مرتين طالما عدد اخترتها لأنها سيكون لها عدد مماثل من التمور تاريخية (إن وجدت) ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'خيار التدخين غير صحيح' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'تاريخ الوصول غير صحيح' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'تاريخ مغادرة غير صحيح' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'الحجز أقصر مما يجب. يجب أن يكون هناك على الأقل هذه الأيام العديدة بين الوصول والمغادرة التواريخ:' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'الفترة الخاصة بك والمطلوبة هي ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'نوع الضيف غير صحيح' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'اختر نوع الضيف ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'لديك كثيرة جدا في حزب التعريفات المتاحة' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'كنت قد اخترت أكثر حدة مما لديك ضيوف، انقر على اسم وحدة لإزالته من اختيارك' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'عدد كبير جدا من الضيوف للالأسرة المتاحة' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'انت بحاجة لتختار غرف اضافية ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'إختر نوع الوحدة' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'الإسم الاول مطلوب' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'اللقب الإزامي' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'رقم المنزل مطلوب' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'عنوان الشارع الزامي' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'المدينة مطلوبة ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'المنطقة مطلوبة ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'رمز البريد مطلوب' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'البلد مطلوبة' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'رقم الهاتف الثابت الزامي' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'رقم الجوال الزامي' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'عنوان البريد الزامي' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'عنوان البريد غير صحيح' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'غير قادر على التحقق من مستضيف البريد ' );
jr_define( '_JOMRES_SRP_WEHAVEVACANCIES', '<b>لدينا شواغر متاحة!</b>' );
jr_define( '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'لا يوجد وحدات مختارة حتى الان' );
jr_define( '_JOMRES_BOOKING_NUMBER', 'رقم الحجز' );
jr_define( '_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ok to book, message box background' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA', 'Dump template vars?' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'يعتبر بالنسبة' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'تعيين هذا إلى نعم إذا كان حساب شخص واحد هو الرقم مئوية. إذا لم فسيتم تطبيقه في شكل مبلغ ثابت.' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST', 'وحدات متوفرة \ باسعار محدودة' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST_DESC', 'استخدام هذه المدخلات للحد من عدد من الموارد المتاحة والتعريفات المذكورة في استمارة الحجز. تعيين إلى صفر إذا كنت لا تريد الحد من تمكين.' );
jr_define( '_JOMRES_SRP_WEHAVENOVACANCIES', 'لا يوجد شواغر في هذه الفترة' );
jr_define( '_JOMRES_BOOKITNOW', '' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'وضع التعديل العالمي؟' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'رعاية مع هذه الوظيفة. إن كانت القيمة نعم، ثم وضع التحرير تؤثر على نص مخصص لجميع الشركات في نظام ثابت لتقوم بتحريرها.' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'إستخدم العملة العالمية؟' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'تعيين هذا إلى نعم لإجبار جميع العقارات لاستخدام نفس العملة.' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'رمز العملة العالمية' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED', 'مكون ملفوف' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'تعيين هذا إلى نعم إذا هو التفاف المكون بحيث حدة ورأس المناطق ليست أن ينظر إليها' );
jr_define( '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'مدير المنشاءة' );
jr_define( '_JOMRES_COM_WEEKENDONLY', 'فقط نهاية الأسبوع' );
jr_define( '_JOMRES_COM_WEEKENDDAYS', 'ايام نهاية الأسبوع' );
jr_define( '_JOMRES_COM_WEEKENDDAYS_DESC', 'تعيين أيام نهاية الأسبوع الخاصة بك. والتعريفات التي تسمح أو عطلة نهاية الأسبوع عدم السماح تأخذ في الاعتبار هذا الإعداد عند إنشاء الوحدات قائمة.' );
jr_define( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'حدد بلدك قبل إضافة أي معلومات المنشاءة' );
jr_define( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'حفظ التغييرات فندقك قبل تحميل صورة الفندق' );
jr_define( '_JOMRES_TARIFFSFROM', 'إبتداءً من  ' );
jr_define( '_JOMRES_SEARCH_ALL', 'الجميع' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'البحث بالبلد' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'البحث بالمنطقة' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'البحث بالمدينة' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'مميزات البحث' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'إبحث' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'أدخل كلمة البحث في المربع واضغط على الزر.' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'كلمات البحث: ' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'من فضلك ادخل وصولك المقصود وتواريخ المغادرة واضغط على الزر لتجد الفنادق التي لديها أماكن الإقامة المتاحة على التواريخ التي اخترتها.' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'عرض جميع المنشاءات بحسب نوع المنشاءة.' );
jr_define( '_JOMRES_SEARCH_RTYPES', 'عرض جميع المنشاءات بحسب نوع المنشاءة \ الوحدة' );
jr_define( '_JOMRES_SORTORDER_DEFAULT', 'الإفتراضي' );
jr_define( '_JOMRES_SORTORDER_PROPERTYNAME', 'إسم المنشاءة' );
jr_define( '_JOMRES_SORTORDER_PROPERTYREGION', 'منطقة المنشاءة' );
jr_define( '_JOMRES_SORTORDER_PROPERTYTOWN', 'مدينة المنشاءة' );
jr_define( '_JOMRES_SORTORDER_STARS', 'عدد النجوم' );
jr_define( '_JOMRES_PATHWAY_PROPERTYLIST', 'قائمة المنشاءة' );
jr_define( '_JOMRES_PATHWAY_PROPERTYDETAILS', 'Business details ' );
jr_define( '_JOMRES_PATHWAY_BOOKINGFORM', 'نموذج الحجز' );
jr_define( '_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'تحديث بينات العنوان' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'إعادة مراجعة توافر الوحدات<br/>(الوحدات المختارة سيتم اعادة ضبطها)' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'اعادة فحص التوافر' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'تعديل الخيارات الاضافية' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'تغير الوحدات المختارة' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'تحديث بيانات العنوان' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'نأسف العنوان غير صحيح' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'صورة الوحدة' );
jr_define( '_JOMRES_CURRENCYFORMAT', 'صيغة العملة' );
jr_define( '_JOMRES_MANAGEROPTIONSASIMAGES', 'عرض خيارات المدير كصورة' );
jr_define( 'JOMRES_COM_A_SEARCHOPTIONSTAB', 'خيارات البحث' );
jr_define( 'JOMRES_COM_A_AVAILABLELOGS', 'سجلات التوافر' );
jr_define( 'JOMRES_COM_A_LOGS_NOENTRIES', 'لا يوجد سجلات متوفرة حتى الان' );
jr_define( 'JOMRES_COM_A_MESSAGE', 'رسالة' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define( 'JOMRES_COM_A_TARIFFMODE_NORMAL', 'عادي' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_ADVANCED', 'متقدم' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'إدارة يومية' );
jr_define( 'JOMRES_COM_A_TARIFFMODE', 'إعدادات وضع الاسعار' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_DESC', "<b>تحذير: التبديل بين أنواع قد التعريفات المختلفة يؤدي إلى فقدان البيانات. راجع الملاحظة أدناه فيما يتعلق بهذا</b>.
<br/><br/>
لديك ثلاثة خيارات لكيفية تكوين التعريفات الخاصة بك. <br/>
الوضع العادي: سيكون لديك تعريفة واحدة لكل نوع من الموارد التي هي صالحة للسنوات ال 10 المقبلة <br/>
ادارة يومية: يمكنك تعديل الأسعار لكل يوم لكل نوع المورد / الأعمال. <br/>
المتقدمة: إن \ 'القديمة \' &#8203;&#8203;طريقة Jomres إدارة الاسعار. <br/>
<br/>
وسائط مختلفة الجمركية تسمح لك لاختيار طريقة تكوين التعريفات الذي يناسبك. <br/>
الوضع العادي هو الأكثر تبسيطية لكنه أسهل للفهم لأنه سيعبر الموارد المرجعية والتعريفات لموارد / أنواع الأعمال ويسمح لك لتكوين الموارد والأسعار على نفس الصفحة. <br/>
إدارة الدقيقة يسمح لك تختلف معدلات على أساس يومي دون الحاجة لإدارة رزمة من الرسوم الجمركية، ويتم ذلك من قبل الصليب الكثير من التعريفات المختلفة الرجوع مع بعضها البعض. هذه النتائج في عدد من التعريفات التي خلق لكم تغطي فترة من الوقت، ولكنك لا تستطيع التعريفات طبقة فوق بعضها البعض. <br/>
الوضع المتقدم يتيح لك إنشاء مورد وربطه مع نوع مورد. إنشاء ثم الجمركية والربط بين ذلك مع نوع الموارد. باستخدام هذه الطريقة أنه من الممكن أن 
\ 'طبقة \' التعريفات فوق بعضها البعض، على سبيل المثال نوع مورد \ 'سرير مزدوج \' يمكن أن يكون لها تعريفة واحدة لوجبة الإفطار، وآخر لتناول وجبة السرير، الإفطار والمساء. طريقة متقدمة تتطلب اهتماما أكثر قليلا بالتفاصيل لأنه من الممكن لاكتشاف المنتسبين مورد أو التعريفات من نوع مورد / الأعمال التجارية، أو لصالح تعيين بشكل غير صحيح من وإلى التواريخ، ولكنه يوفر لك خيارات التكوين التي وسائط أخرى لا تقدم. <br/>
<br/>
لأن وسائط عادي وتتطلب التركيز على التفاصيل المحددة إعداد الموارد والتعريفات الجمركية للوضع في العمل النظام قد تحتاج لإعادة بعض البيانات لجعل تكوينات التعريفة الحالية متوافقة مع وضع تعريفة التحرير الحالية. <br/>
<br/>
عادي -> خيارات متقدمة. لا تغيير. يتم الاحتفاظ التعريفات القائمة. <br/>
عادي -> ادارة يومية. تتم إزالة كافة التعريفات الموجودة. <br/>
متقدمة -> عادي. تتم إزالة كافة التعريفات الموجودة. <br/>
متقدمة -> ادارة يومية. تتم إزالة كافة التعريفات الموجودة. <br/>
ادارة يومية -> خيارات متقدمة. تتم إزالة كافة المراجع عبر القائمة بين التعريفات، ولكن <br/> الرسوم ستبقى نفسها.
ادارة يومية -> عادي. تتم إزالة كافة المراجع عبر القائمة والتعريفات. <br/><br/>" );
jr_define( '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'تظهر الوحدات قائمة في صفحة تفاصيل الفنادق؟' );
jr_define( 'JOMRES_PROPERTYTYPE', 'نوع المنشاءه' );
jr_define( 'JOMRES_COM_A_SRPONLY', 'SRP only' );
jr_define( 'JOMRES_MAXPEOPLEINROOM', 'اقصى عدد اشخاص بالوحدة' );
jr_define( 'JOMRES_MAXPEOPLEINBOOKING', 'اقصى عدد اشخاص في الحجز ' );
jr_define( '_JOMCOMP_BOOKINGNOTES_ADD', 'إضافة ملاحظه' );
jr_define( '_JOMCOMP_BOOKINGNOTES_EDIT', 'تحرير ملاحظه' );
jr_define( '_JOMCOMP_BOOKINGNOTES_DELETE', 'حذف ملاحظه' );
jr_define( '_JOMCOMP_BOOKINGNOTES_VIEW', 'عرض الملاحظات' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'تم إضافة ملاحظه جديدة' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'تم تحرير ملاحظه' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'تم حذف الملاحظه' );
jr_define( '_JOMCOMP_MYUSER_MENUTITLE', 'خياراتي' );
jr_define( '_JOMCOMP_MYUSER_LISTBOOKINGS', 'قائمة حجوزاتي' );
jr_define( '_JOMCOMP_MYUSER_MYBOOKINGS', 'حجوزاتي' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKING', 'عرض الحجز' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES', 'عرض المفضله' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'لم تقم بإضافه اي مفضله بعد' );
jr_define( '_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'إضافه للمفضلة' );
jr_define( '_JOMCOMP_MYUSER_PROPERTYTYPE', 'نوع المنشاءه' );
jr_define( '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'المنشاءات في الموقع' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE', 'الاسعار المعقولة' );
jr_define( '_JOMCOMP_WISEPRICE_ACTIVE', 'فعال' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC', 'هذا البرنامج المساعد يسمح لك لتمكين وتكوين أسعار الوحدات الخاصة بك بشكل حيوي.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'وسوف يعتمد حساب أسعار الوحدات معظم الفنادق على عدد من وحدات من نوع المطلوبة التي تتوفر على تاريخ معين. وهذا يسمح لهم لتقديم خصومات على نوع الوحدة ر يسن أن الفندق  مشغول خلال فترة معينة بهدف جذب الفندق التي قد خلاف ذلك ينبغي تفويتها. <br/> إذا تمكين وتكوين هذا البرنامج المساعد يسمح لك عرض أسعار قابلة للتعديل بناء على عدد الوحدات من نوع المختارة هي متاح في الفندق في يوم معين. <br/> عتبة يوما يعرف عدد الأيام التي وصولها يجب أن يكون ضمن قبل تعديل أسعار الوحدة هذه الميزة، ثم النسب المئوية تسمح لك خيارات لتكوين نسبة الوحدات التي يمكن أن تكون متاحة قبل تطبيق خصم معين. ملاحظة ومع ذلك، إذا تم حجز وحدات متعددة ثم تطبيقها على المستوى الحالي للخصم على جميع الوحدات ولن تخفض ويتم اختيار أكثر حدة.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD', 'بدايه (عدد الايام بين تاريخ الوصول والمغادرة)' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE10', 'نبة الوحدات المشغولة  10% او اقل' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE25', 'نسبة الوحدات المشغولة 25% او اقل' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE50', 'نسبة الوحدات المشغولة 50% او اقل' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE75', 'نسبة الوحدات المشغولة 75% او اقل' );
jr_define( '_JOMCOMP_WISEPRICE_DISCOUNT', 'الخصم %' );
jr_define( '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' تم تخفيضها من  ' );
jr_define( '_JOMCOMP_WISEPRICE_TO', ' الى ' );
jr_define( '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' السعر المعقول لا ينطبق  ' );
jr_define( 'JOMRES_COM_A_MAPSKEY', 'مفتاح API خرائط قوقل' );
jr_define( 'JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Business Details page.' );
jr_define( 'JOMRES_COM_A_USE_SSL', 'استخدم شهادة الحماية SSL في نموذج الحجز؟' );
jr_define( 'JOMRES_COM_A_USE_SSL_DESC', 'تحتاج إلى التأكد من أن لديك شهادة صالحة SSL لذلك ' );
jr_define( '_JOMCOMP_LASTMINUTE_CPANEL', 'آخر فرصة' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE', 'فعال؟' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'إضبط هذه بنعم في حال اردت استخدام اخر فرصة ' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD', 'البداية' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'إذا تم إجراء الحجز وتاريخ الوصول هو فقط وأيام من تاريخ الحجز، ومن ثم يمكن تطبيق الخصم' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT', 'الخصم' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'بالنسبة المئوية' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'تم اعتماد تطبيق الخصم لهذا الحجز' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'تم تخفيض قيمة الإقامة بواسطة' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', ' ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% الخصم إذا كنت الحجز قبل وصول ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. احجز الآن لتحقيق الاستفادة القصوى من هذا العرض!' );
jr_define( '_JOMCOMP_LASTMINUTE_ORMORE', '% أو قد تكون متاحة أكثر الخصم إذا كان التاريخ هو الوصول قبل ' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO', 'معلومات السعر' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'تعيين هذا إلى نعم لاظهار مزيد من المعلومات التفصيلية التعريفات في الفندق تفاصيل التعريفية المنبثقة' );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG', 'تصغير خيارات تكوين الاعدادات' );
jr_define( '_JOMCOMP_AMEND', 'تعديل الحجز' );
jr_define( '_JOMCOMP_AMEND_SELECTPROPERTY', 'إختر منشائه' );
jr_define( '_JOMCOMP_AMEND_HEADER', 'العقد الأصلي:' );
jr_define( '_JOMCOMP_AMEND_DEPOSITPAID', 'الدفعه المقدمة' );
jr_define( '_JOMCOMP_AMEND_DEPOSITDUE', 'لم يتم دفع الدفعه المقدمة' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'الإجمالي' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'إجمالي الدفعه المطلوبة' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define( '_JRPORTAL_CANCEL', 'الغاء' );
jr_define( '_JRPORTAL_CPANEL', 'JRPortal لوحة التحكم' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE', 'قيمة العمولة الإفتراضيه' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'اختيار سعر العمولة الافتراضية التي سيتم تطبيقها على فنادق في حالة عدم تعيين آخر سعر العمولة غير ذلك.' );
jr_define( '_JRPORTAL_CPANEL_LISTCRATES', 'قائمة قيمة العمولات' );
jr_define( '_JRPORTAL_CPANEL_PATETITLE', 'قيمة العمولة' );
jr_define( '_JRPORTAL_CRATE_TITLE', 'العنوان' );
jr_define( '_JRPORTAL_CRATE_TYPE', 'النوع' );
jr_define( '_JRPORTAL_CRATE_VALUE', 'قيمة العمولة' );
jr_define( '_JRPORTAL_CRATE_CURRENCYCODE', 'رمز العملة' );
jr_define( '_JRPORTAL_CPANEL_LISTPROPERTIES', 'قائمة المنشائات' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYNAME', 'اسم المنشأه' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'عنوان المنشأه' );
jr_define( '_JRPORTAL_PROPERTIES_LEGEND', 'الفنادق التي لون الخلفية باللون الأحمر لم تتح حتى الآن بنسبة العمولة يطبق عليهم.' );
jr_define( '_JRPORTAL_STATS_PATETITLE', 'الإحصائيات' );
jr_define( '_JRPORTAL_STATS_STATTYPE', 'الإحصائيات: ' );
jr_define( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'المنشاءات - النقرات' );
jr_define( '_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'عرض المنشاءه' );
jr_define( '_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'عدد الحجوزات' );
jr_define( '_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'قيمة الحجوزات' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'العمولة التقديرية' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'قيمة العمولة' );
jr_define( '_JRPORTAL_CPANEL_LISTBOOKINGS', 'قائمة الحجوزات' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'رقم المنشاءه' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'رقم الضيف' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'معرف الانضمام' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'رقم الفاتورة' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'اجمالي الحجز' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'رقم العقد' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'رقم العقد' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'رمز العملة' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'تم إلإنشاء' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'تم الارشفه' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'تاريخ الأرشفه ' );
jr_define( '_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Add item to nBill' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'مدير للفاتورة' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'الفنادق المرتبطة (إذا كان ينطبق)' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'القيمة' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'التفاصيل' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', "إدراج البند بنجاح في الفواتير " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', "عرض الطلبات" );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', "فشل في إدراج البند في الفواتير " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "خطأ، هل لم يتم تعيين قيمة الفاتورة" );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have business type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this business type so resources become, for example, DVDs, etc.' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'لا يمكنك حذف هذا الفندق كما هو الفندق الوحيد الذي لديك حق الوصول على. إذا كنت ترغب في تعطيله، يرجى استخدام ميزة إلغاء نشر في شريط الأدوات. ' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'اذا كان هذا هو التثبيت التجريبي وكنت تنوي الترقية إلى مسافر Jomres (فندق واحد فقط الحد) ثم يجب عليك إنشاء فندق جديد، ثم حذف هذا واحد قبل تغيير مفتاح الترخيص الخاص بك إلى مفتاح الترخيص مسافر أن يحدد لك على الشراء . ' );
jr_define( '_JOMRES_COM_EMAILERRORS', "سجل رسائل الخطاء للبريد الإلكتروني" );
jr_define( '_JOMRES_COM_EMAILERRORS_DESC', "تعيين هذا إلى نعم إذا كنت تريد نسخ jomres.net تلقائيا عندما يتم إنشاء رسالة سجل خطأ. وهذا يسمح لنا أن تكون سباقة في نهجنا في التعامل مع المشاكل المحتملة، نأمل حل أية مشكلات قبل أن تكون حتى على علم بها. ملاحظة، يتم تعطيل هذه الميزة على 'مضيف محلي'. " );
jr_define( '_JOMRES_COM_ISTHISANMRP', "هذه الشركة هي و؟ فندق / وجبة الإفطار / دار الضيافة / التقاعد" );
jr_define( '_JOMRES_COM_ISTHISANMRP_DESC', "خيارات التكوين تختلف اعتمادا على إذا كنت تأجير الموارد في الأعمال التجارية، أو الأعمال نفسها. حدد MRP إذا كنت تقدم الموارد، حدد SRP إذا كنت تقدم العمل بالكامل. " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK', "استخدام البريد الإلكتروني Jomres المدقق عنوان؟ " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK_DESC', "أكثر صرامة يفرض الاختيار على رسائل البريد الإلكتروني المرسلة. فإن بعض خوادم ويب آمن رمي الداخلية الخطأ 500 عند محاولة إرسال بريد إلكتروني إلى عنوان بريد إلكتروني غير متوفرة. هذا التحول على يتيح لنا استخدام ميزات checkdnsrr من PHP قبل محاولة إرسال بريد إلكتروني، ومنع هذه الأخطاء 500. " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "إجمالي قيمة الحجز" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', "ليالي في " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "للوحدة " );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', "إجمالي الخدمات (شامل الضرائب)" );
jr_define( '_JOMRES_AJAXFORM_PRICE_SUMMARY', "ملخص التكلفة الاجمالية " );
jr_define( '_JOMRES_CONFIRMATION_ALERT', "الرجاء قراءة والموافقة على  " );
jr_define( '_JOMRES_CONFIRMATION_HEADER', "ويرد موجز الحجز أدناه. <br /> لإجراء أية تغييرات، يرجى النقر على زر تعديل الحجز. " );
jr_define( '_JOMRES_CONFIRMATION_AMENDTEXT', "إذا كنت بحاجة إلى تغيير أي من المعلومات المذكورة أعلاه ثم الرجاء انقر هنا" );
jr_define( '_JOMRES_CONFIRMATION_AMEND', "تعديل الحجز" );
jr_define( '_JOMRES_CONFIRMATION_SPECIALS', "يرجى إدخال أي طلبات خاصة في المربع أدناه." );
jr_define( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', "أؤكد أن المعلومات الواردة أعلاه صحيحة وأوافق عليا " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "لليلة " );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE', "ملف اللغة الإفتراضي " );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "اختيار ملف اللغة الافتراضية التي يجب أن تستخدم Jomres إذا لم يتم اللغة التي حددتها Joomfish." );
if ( !defined( '_PN_OF' ) ) jr_define( '_PN_OF', 'من ' );
if ( !defined( '_PN_START' ) ) jr_define( '_PN_START', 'البداية' );
if ( !defined( '_PN_PREVIOUS' ) ) jr_define( '_PN_PREVIOUS', 'السابق' );
if ( !defined( '_PN_NEXT' ) ) jr_define( '_PN_NEXT', 'التالي' );
if ( !defined( '_PN_END' ) ) jr_define( '_PN_END', 'النهاية' );
if ( !defined( '_PN_RESULTS' ) ) jr_define( '_PN_RESULTS', 'النتائج' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'من فضلك ادخل الرسالة التي ترغب في إرسالها إلى' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'إتصل بمسئول المنشاءة' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'نموذج التواصل مع المنشاءة ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'نشكر لكم تواصلكم معنا تم ارسال الرسالة الخاصة بكم لمسئول المنشاءه وارسال نسخة لبريدكم الخاص سيتم الرد عليكم قريبا' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' بخصوص ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'اكتب رمز الحماية في المربع' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'لا استطيع قرائة الرجاء تحديث ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'إرسال' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'صورة جديدة' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'استعلام' );
jr_define( '_JOMRES_BOOKINGFORM_LOOKRIGHT', 'الرجاء اختيار الإقامة المطلوبة من القائمة أدناه عن طريق النقر على الوحدة.' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'ادنى عدد وحدات تم اختيارها' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'الحد الأدنى لعدد الوحدات محددة مسبقا في الحجز قبل أن يتم عرض التعريفات / وحدة التحرير والسرد نوع. يسمح لك أن التعريفات المخفضة عند تحديد الوحدات بالفعل أكثر من و.' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'اقصى عدد وحدات تم اختيارة' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'لم يعد عرضت الحد الأقصى لعدد الوحدات محددة مسبقا في الحجز قبل التعريفات / الموارد التحرير والسرد. يسمح لك لوقف تقدم هذه الوحدة نوع / التعريفات الجمع مرة واحدة وقد تم اختيار والوحدات في استمارة الحجز.' );
jr_define( '_JOMRES_COM_SPS_EDITROOM_DESC', 'لاحظ أنه لن يكمل تعيين شخص واحد هنا أن تستخدم إذا تم تعيين شخص واحد علىملاحق نعم في تكوين العام. الإعدادات هنا هي بديل إلى وجود معدلات شقة Suppliements شخص واحد، وليس إضافة إلى SPS بسعر موحد.' );
jr_define( '_JOMRES_AVLCAL_NOBOOKINGS', "متاحة" );
jr_define( '_JOMRES_AVLCAL_QUARTER', "بعض الحجوزات" );
jr_define( '_JOMRES_AVLCAL_HALF', "نصف  الامكانيات" );
jr_define( '_JOMRES_AVLCAL_THREEQUARTER', "محجوز شبة كامل" );
jr_define( '_JOMRES_AVLCAL_FULLYBOOKED', "محجوز كاملا" );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX', 'Url prefix' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX_DESC', 'This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'View business task alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'dobooking task alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'بحث الاسم المستعار للمهمة' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'إضافة رابط البلد' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'إضافة رابط المنطقة' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'إضافة رابط المدينة' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'اضافة رابط نوع المنشاءه' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'اضافة رابط اسم المنشاءه' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'ربط رقم المنشاءه باسم المنشاءه' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'إذا تم تعيين اسم الفندق الى لا توجد بعد ذلك سوف يتم استخدام معرف لا. إن كانت القيمة نعم ثم سوف تبدو وكأنها عنوان URL 1-fawlty_towers' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Search URL Structure - Add country to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Search URL Structure - Default country' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'إذا كل ما تبذلونه من الفنادق هي في بلد واحد بعد ذلك سوف لا يكون لديك بلد في البحث - إدخال البلد الافتراضي هنا إذا كنت ترغب في عرض البلاد' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Search URL Structure - Add region to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION', 'Search URL Structure - Default region' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'إذا كل ما تبذلونه من الشركات في منطقة واحدة ثم سوف لا يكون لديك في منطقة البحث - إدخال المنطقة الافتراضي هنا إذا كنت ترغب في عرض المنطقة' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Search URL Structure - Add town to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN', 'Search URL Structure - Default town' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Search URL Structure - Business type' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Search URL Structure - Default business type' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'المستخدمة في البحث هو URL إذا لجميع أنواع الفنادق' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'فحص تلقائي Javascript للغة التقويم' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'تفعيل الفحص التلقائي للغة  the javascript التقاويم? إذا لم نتمكن من اكتشاف التلقائي للغة بعد ذلك سوف نقع مرة أخرى إلى اللغة تكوين أدناه' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'بالاسبوع' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'باليوم' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'بالحجز' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'بالشخص بالحجز' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'بالشخص في اليوم' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'بالشخص في الاسبوع' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'بالايام (اقل مدة اقامة)' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'بالايام في نوع الوحدة المختارة' );
jr_define( '_JOMRES_REGISTRYREBUILD', 'إعادة بناء البسيطة المكون التسجيل' );
jr_define( '_JOMRES_REGISTRYREBUILD_NOTES', "عادة يتم إعادة التسجيل Jomres المساعد تلقائيا كلما قمت بعرض مدير البرنامج المساعد وإضافة أو إزالة البرنامج المساعد، ومع ذلك فإنه من الممكن أنه لا يمكنك استخدام هذه الميزات لسبب ما، لذا يمكنك استخدام هذه الدالة لإعادة بناء السجل يدويا. إذا كان لديك الوصول إلى مدير البرنامج المساعد وتتميز ترقيات ثم انه من غير المحتمل أنك سوف تحتاج لاستخدام هذه الوظيفة. سوف تحتاج إلى إعادة بناء السجل المساعد كلما قمت بإضافة مكون جديد ميني ولم تستخدم مدير البرنامج المساعد لإضافته." );
jr_define( '_JOMRES_REGISTRYREBUILD_SUCCESS', 'تم اعادة بناء مكون التسجيل بنجاح' );
jr_define( '_JOMRES_REGISTRYREBUILD_FAILURE', 'كان هناك خطأ مع إعادة بناء قلم icomponents دقيقة. يجب عليك التحقق من السجل الخاص بك خطأ Jomres لمعرفة إذا كان هناك سجل ما تسبب في الخطأ.' );
jr_define( '_JOMRES_SEARCH_PRICERANGES', 'البحث بالسعر' );
jr_define( 'JOMRES_WORD_SAVING', 'جاري الحفظ' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'استخدام مركب تفاصيل الفندق؟' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3،3 يقدم تفاصيل العمل المركب حيث يتم إرسال جميع تفاصيل الأعمال من الإخراج إلى ملف قالب واحد (composite_business_details.html). إذا كنت لا ترغب في استخدام هذه تعيينها إلى رقم (ومن المتوقع فقط للمستخدمين الحاليين لتعيين هذا إلى لا، سوف المستخدمين الجدد ربما تريد ترك الأمر لتعيين نعم)' );
jr_define( '_JOMRES_PROFILELIST_INSTRUCTIONS', 'This is a list of all users on the system. Non-business managers will have a Guest icon, business managers will have Reception/Business Manager/Super business manager icons.<br/>When Jomres is first installed "admin" is automatically added as a business manager and is considered an authorised user.<br/>Non-super business managers must be assigned to at least one business otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to businesses or give them super business manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific businesses only, or give them super business manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their business(s) themselves will be automatically assigned to those businesses. Super business managers automatically have rights over all businesses, and will see all configuration options even if the minimised configuration option is set in Site Config.' );
jr_define( '_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Here you can assign a manager to certain businesses. Ensure, if they\'re not going to be a super business manager, that they have rights to at least one business otherwise they will see an error when they log in. To give a receptionist/business manager rights over only certain businesses, ensure that the Super Business Manager dropdown is not set to Yes.' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'لم تقم بعمل اي حجز حتى الان' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'نوع المنشاءه' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'تحرير نوع المنشاءه' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'اختر نوع منشاءتك' );
jr_define( '_JOMRES_COM_LOGGING', 'Jomres logging' );
jr_define( '_JOMRES_COM_LOGGING_WARNING', 'These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>' . JOMRESPATH_BASE . JRDS . 'temp' . JRDS . '</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.' );
jr_define( '_JOMRES_COM_LOGGING_BOOKING', 'تسجيل نموذج الحجز (Booking engine logs) ' );
jr_define( '_JOMRES_COM_LOGGING_GATEWAY', 'سجلات بوابة الدفع الخارجية (eg paypal etc) ' );
jr_define( '_JOMRES_COM_LOGGING_REQUEST', 'سجل الطلبات (all incoming server requests)' );
jr_define( '_JOMRES_COM_LOGGING_SYSTEM', 'النظام (misc log) ' );
jr_define( '_JOMRES_COM_LOGGING_JRPORTAL', 'JR Portal (mainly for recording commission etc) ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Your enquiry...' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Booking form resource list show resource type image' );
jr_define( '_JOMRES_COM_A_LISTLIMIT', 'Business List limit' );
jr_define( '_JOMRES_COM_A_LISTLIMIT_DESC', 'The number of businesses to show on a page after a search' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrated search feature' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'The Jomres integrated search feature allows your users to search through Jomres businesses according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>' . JOMRES_TEMPLATEPATH_FRONTEND . '</b> ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'تفعيل هذه الميزة؟' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'If this feature is enabled, then any call to Jomres that shows the business list will mean that the search options are also shown.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'استخدام الاعمدة' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "سيظهر أي خيار البحث الذي قمت تعرف بأنها نوع الارتباط (حيث ذات الصلة) كأعمدة (IE ر ضعت على نهاية الرابط)" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', "ميزة الاعمدة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', "The number of feature icons that can be shown before a br is inserted to go to next row." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "البحث حدد المنطقة من خلال التحرير والسرد المنسدلة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "البحث بواسطة إسم المنشاءة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "البحث بواسطة ادخال اسم المنشاءه" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "عرض كقائمة منسدلة؟" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "تعيين هذا بلا لعرض قائمة كروابط" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "بحث بواسط المنطقة او المدينة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "بحث بواسطو المدينة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "عرض كقائمة منسدلة؟" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "تعيين هذا بلا لعرض قائمة كروابط" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "بحث بواسطة نوع المنشاءه" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "عرض البحث بواسطة نوع المنشاءة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "عرض كقائمة منسدلة؟" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "تعيين هذا بلا لعرض قائمة كروابط" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "بحث من خلال نوع الوحدة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "عرض نوع الوحدة الدخلة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "عرض كقائمة منسدلة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "تعيين هذا بلا لعرض قائمة كروابط" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', "بحث من خلال المزايا" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "عرض من خلال المزيا المدخلة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "عرض كقائمة منسدلة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "تعيين هذا إلى لا لتظهر القائمة كما تلميح أداة الصور ومربعات" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "بحث بوسطة التفاصيل" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "عرض تفاصيل المدخلة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "البحث من خلال الامكانيات" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "إظهار البحث عن طريق إدخال توافر" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "بحث بواسطة نطاق الاسعار" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "عرض البحث بنطاق الاسعار المدخلة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "زيادة مجموعة الاسعار" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "سوف ننظر في Jomres كافة القيم في التعريفات ثم العمل سلسلة من يتراوح سعر استنادا إلى زيادات القيمة التي تحدد هنا." );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'افتراضيا، إذا لم يتم تحديد فندق في Jomres سوف إجراء بحث. إذا لم ينشأ هذا البحث من قبل وحدة البحث بعد ذلك سوف تسفر عن نتائج هذا البحث العشوائي (عمدا). هذا الخيار يسمح لك للحد من عدد العائدين في هذا البحث عشوائي.' );
jr_define( '_JOMRES_COM_A_CRON_TITLE', 'Cron job settings and logs' );
jr_define( '_JOMRES_COM_A_CRON_DESC', 'Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.' );
jr_define( '_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.' );
global $jomresConfig_secret;
jr_define( '_JOMRES_COM_A_CRON_METHOD', 'Method' );
jr_define( '_JOMRES_COM_A_CRON_METHOD_DESC', "If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1&secret=" . base64_encode(get_showtime("secret")) . "> /dev/null</i> " );
jr_define( '_JOMRES_COM_A_CRON_LOGGING', 'Display logging in the browser' );
jr_define( '_JOMRES_COM_A_CRON_LOGGING_DESC', 'Only works if the method is set to Minicomponent.' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging enabled' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Set this to Yes for logging to be enabled. The results of the logs will be output below.' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots of logging output' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TITLE', 'تحرير القالب' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_DESC', 'هذه الوظيفة تسمح لنا لتحرير قوالب الواجهة Jomres على الخادم، وتوفير النتائج إلى قاعدة البيانات. ميزة متقدمة، وتوخي الحذر معها.' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'اسم القالب' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'تم تخصيص القالب ' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE', 'الحقول الاختيارية' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESC', 'هنا يمكنك تعريف الحقول المخصصة البسيطة التي سيظهر في شكل الحجز.' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'اسم الحقل (من غير مسافات)' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'القيمة الافتراضية' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'تفاصيل' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'مطلبو' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY', 'الكمية الاعلى' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'إذا تم تعيين الحد الأقصى لكمية أكبر من 1 وبعد ذلك سيتم تقديم للضيوف المنسدلة لاختيار كمية من الكماليات التي يحتاجون إليها.' );
jr_define( '_JRPORTAL_INVOICES_ISSUE', "اصدار الفواتير" );
jr_define( '_JRPORTAL_TAXRATES_TITLE', "قيمة الضريبة" );
jr_define( '_JRPORTAL_TAXRATES_CODE', "رمز الضريبة" );
jr_define( '_JRPORTAL_TAXRATES_DESCRIPTION', "تفاصيل السعر" );
jr_define( '_JRPORTAL_TAXRATES_CANNOTDELETE', "لا تستطيع حذف الضريبة" );
jr_define( '_JRPORTAL_TAXRATES_RATE', "السعر" );
jr_define( '_JRPORTAL_INVOICES_TITLE', "الفواتير" );
jr_define( '_JRPORTAL_INVOICES_STATUS_UNPAID', "غير مدفوعة" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PAID', "مدفوعة" );
jr_define( '_JRPORTAL_INVOICES_STATUS_CANCELLED', "ملغي" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PENDING', "معلق" );
jr_define( '_JRPORTAL_INVOICES_USER', "المستخدم" );
jr_define( '_JRPORTAL_INVOICES_STATUS', "الحالة" );
jr_define( '_JRPORTAL_INVOICES_RAISED', "Raised" );
jr_define( '_JRPORTAL_INVOICES_DUE', "المستحق" );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION', "اشتراك" );
jr_define( '_JRPORTAL_INVOICES_INITTOTAL', "الإجمالي المستحق" );
jr_define( '_JRPORTAL_INVOICES_RECUR_TOTAL', "اجمالي التكرار" );
jr_define( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', "الترددات المكرره" );
jr_define( '_JRPORTAL_INVOICES_RECUR_DOMONTH', "يوم التكرار في الشهر" );
jr_define( '_JRPORTAL_INVOICES_CURRENCYCODE', "رمز العملة" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS', "خط الصنف" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_NAME', "الإسم" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', "تفاصيل" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', "السعر المبدئي" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', "الكمية المبدئية" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', "الخصم المبدئي" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', "الإجمالي المبدئي" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', "سعر التكرار" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', "كمية التكرار" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', "الخصم المتكرر" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', "اجمالي التكرار" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "رمز الضريبة" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "تفاصيل الضريبة" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', "سعر الضريبة" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', "Paypal خيارات الدفع عبر" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', "رمز السعر (على سبيل المثال SAR)" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', "استخدام آلية تحديد الصلاحيات؟" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', "البريد الالكتروني الخاص بك في موقع paypal" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', "ملاحظة: لاستخدام باي بال يجب أن تذهب إلى حسابك باي بال وتعطيل Autoreturn. (تفضيلات الدفع الشخصي / الموقع)، ومجموعة IPN (الملف / الإخطار الفوري الدفع تفضيلات) لفي URL من:<br/><b>&nbsp;" . JOMRES_SITEPAGE_URL_AJAX . "&task=completebk" );
jr_define( '_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', "هذه الفاتورة الآن المناسب. الرجاء انقر فوق الزر الواجب اتخاذها لباي بال." );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "تجاوز مستوى إعدادات العبارة Jomres؟" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', "إذا تم تعيين الخيار باي بال تجاوز الإعدادات إلى نعم ثم تحدث عدة أشياء: تكوين العام لم يعد يظهر أي إعدادات العبارة، واثنين، وعندما يتم إجراء الحجز يتم استخدام الإعدادات المستخدمة هنا بحيث يتم إرسال الدفعة إلى العنوان دخلت هنا، وليس أن تكوين سابقا في تكوين العام." );
jr_define( '_JRPORTAL_INVOICES_SHOWINVOICES', "عرض الفواتير" );
jr_define( '_JRPORTAL_COUPONS_TITLE', "كوبون الخصم" );
jr_define( '_JRPORTAL_COUPONS_DESC', "يمكن أن تتولد رموز الخصم ومرت على الضيوف كحافز لجعل الحجوزات. صالحة من التواريخ وللإشارة إلى التواريخ التي يمكن إجراء الحجوزات على، وليس مواعيد الحجز نفسه." );
jr_define( '_JRPORTAL_COUPONS_CODE', "رمز كوبون الخصم" );
jr_define( '_JRPORTAL_COUPONS_VALIDFROM', "صالح من " );
jr_define( '_JRPORTAL_COUPONS_VALIDTO', "صالح لغاية" );
jr_define( '_JRPORTAL_COUPONS_AMOUNT', "مبلغ الخصم" );
jr_define( '_JRPORTAL_COUPONS_ISPERCENTAGE', "الخصم سيكون نسبة مئوية" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY', "الوحدات فقط" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY_DESC', "يتم تطبيق الخصم فقط لتكلفة الغرفة. إذا لا، ثم يتم تطبيق الخصم على التكلفة الكاملة للحجز." );
jr_define( '_JRPORTAL_COUPONS_SQLERROR', "Sql error when trying to delete/insert a coupon" );
jr_define( '_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'اذا كان لديكم رمز الكوبون نرجو ادخاله في المربع الخاص لحفظ الكوبون مقابل الحجز الخاص بكم' );
jr_define( '_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'حفظ الكوبون' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'تم حفظ كوبون الحجز' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'لم يتم ايجاد كود الكوبون' );
jr_define( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'قيمة كوبون التخفيض' );
jr_define( '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'حجز مخفض. رمز الكوبوبن/قيمة التخفيض/إعدادات الكوبون : ' );
jr_define( '_JOMRES_COM_CACHING', 'استخدام ميزة الكاش  من Jomres ؟' );
jr_define( '_JOMRES_COM_CACHING_DESC', 'ضع هذا الخيار بلا لايقاف ميزة الكاش الخاصة بالسكربت' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES', 'اختار اللغات' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_INFO', 'اختيار خيارات اللغة لعرضها في التبديل اللغة المنسدلة.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'عرض خيارات اللغة كقائمة منسدلة' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'تم حجزها او عليها حجز ملغي' );
jr_define( '_JRPORTAL_NEWUSER_DEAR', "عزيزي \ عزيزتي" );
jr_define( '_JRPORTAL_NEWUSER_THANKYOU', "شكرا لتسجيلكم  " );
jr_define( '_JRPORTAL_NEWUSER_USERNAME', "اسم المستخدم الخاص بكم: " );
jr_define( '_JRPORTAL_NEWUSER_PASSWORD', "الرقم السري الخاص بكم: " );
jr_define( '_JRPORTAL_NEWUSER_LOG_IN', "الرجاء تسجيل الدخول لعرض الحجوزات الخاصة بكم " );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_COUPON', 'تم حفظ الكوبون' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_COUPON', 'تم حذف الكوبون' );
jr_define( '_JOMRES_COM_GROWL', 'استخدم رسائل السكربت' );
jr_define( '_JOMRES_COM_GROWL_DESC', 'مدير التحديثات توفر العديد من ردود الفعل في شكل رسالة سكريبت عند إعادة تحميل الصفحة، استخدم هذا الخيار لتمكين / تعطيل هذه الميزة.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TITLE', "Jomres سكربت -> Clickatell SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_USERNAME', "اسم المستخدم" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_PASSWORD', "الرقم السري" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_APIID', "API رمز" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', "رقم جوال الإشعارات" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "الرجاء استخدام رمز البلد تنسيق، رقم الجوال. على سبيل المثال فإن مقرها المملكة المتحدة رقم الجوال 966509793074 يكون شيء من هذا القبيل. ترك هذا فارغا إذا كنت لا تريد أي إشعارات بالبريد الإلكتروني المرسلة إلى الهاتف المحمول الخاص بك." );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TABTITLE', "SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.</b>
<br/>
<br/>
من اجل استخدام العبارة Clickatell كنت في حاجة الى حساب Clickatell واحد على الأقل اتصال مسجلة (API الفرعي المنتج المثال) بين طلبك وبوابتنا. كل اتصال
ومن المعروف طريقة كمنتج فرعي. هيريس كيف: <BR/>
<BR/>
<B> الخطوة 1 - التسجيل للحصول على حساب Clickatell </ B> <BR/>
إذا لم يكن لديك بالفعل حساب Clickatell، تحتاج للتسجيل في واحد كما في أدناه. إلا المضي قدما إلى الخطوة 2. <BR/>
* الذهاب إلى http://www.clickatell.com/products/sms_gateway.php، واختيار المناسب subproduct API (طريقة الاتصال) التي ترغب في استخدامها (Clickatell الوسطى (API)) <br/> إذا
* اضغط على الوصلة الإلكترونية التسجيل. <BR/>
* املأ استمارة التسجيل. <BR/>
وبعد تقديم النموذج بنجاح تلقائيا يتم تسجيل الدخول إلى حسابك الجديد واقتيد إلى صفحة حيث يمكنك إضافة اتصال API الذي تم اختياره. <BR/>
<B> الخطوة 2 - إضافة اتصال API مسجلة (شبه المنتج) </ B> <BR/>
إذا كنت لا بتسجيل الدخول بالفعل إلى حسابك، ثم يجب عليك أن تفعل ذلك في http://www.clickatell.com/login.php <BR/>
* اختر \ إدارة منتجاتي \ من القائمة العلوية. <BR/>
* حدد نوع الاتصال API التي ترغب في استخدامها (HTTP API) من القائمة المنسدلة (إضافة اتصال). <BR/>
* أكمل النموذج. تأكد من إدخال IP مؤمن (للIP لهذا الملقم)، تعيين رد الاتصال HTTP إلى آخر. فسوف تحتاج إلى تعيين رد الاتصال IP ل. get_showtime (live_site) / أنشئ حسابا؟ الخيار = com_jomres ومهمة = sms_clickatell_callback ورقم العضوية وكلمة المرور. <BR/>
إذا قمت بتسجيل أكثر من اتصال API، يجب أن تقوم بإدخال اسم وصف لكل تكون فريدة من نوعها - لا يمكن أن يكون واجهات برمجة التطبيقات متعددة بنفس الاسم <BR/>.
بعد تقديم النموذج بنجاح، سيتم عرض تفاصيل المصادقة الخاصة بك، بما في ذلك كل ID API اتصالات فريدة من نوعها (api_id). ويلزم المصادقة هذه التفاصيل عند الاتصال إلى العبارة Clickatell لإرسال رسالة. <BR/>
<BR/>
استخدام الخاص رقم العضوية وكلمة السر وapi_id لملء الحقول أعلاه. <BR/>
<BR/>
" );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'قائمة غرفة الحجز تظهر شكل وصول ذوي الاحتياجات الخاصة' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'حجز غرفة شكل قائمة عرض عدد الأشخاص كحد أقصى' );
jr_define( '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "يرجى ملاحظة أن أسعار الغرف المذكورة هي تقديرات ولن الثمن الكامل للحجز يمكن حساب حتى تقوم بإضافة غرفة أو غرف لاختيارك." );
jr_define( '_JOMRES_LASTEDITED_DB', 'اخر تحديث لقالب قاعدة البيانات' );
jr_define( '_JOMRES_LASTEDITED_DISK', 'اخر تحديث للقرص' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON', 'تحذير لقالب قاعدة البيانات' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'قالب قاعدة البيانات ربما يكون بتاريخ قديم ' );
jr_define( '_JOMRES_LASTEDITED_WARNING', 'إذا كان هناك رمز ضد قالب، ثم كشف Jomres أن القالب المخزنة في قاعدة البيانات على <strong> <I> مايو </ I> </ STRONG> تكون أقدم من ذلك المخزنة على القرص، وفي هذه الحالة من الممكن أن تم تحديث القالب في إصدار أحدث من Jomres. إذا كان هذا هو الحال، ثم أنه من الممكن أن القالب لا يجوز الاستفادة من ميزة جديدة في Jomres، أو أن الوظائف الموجودة قد لا يعمل كما هو متوقع، ويجب مقارنة الملفات على القرص لالتخصيصات الخاصة بك للتأكد من أنك لا في عداد المفقودين على ميزات جديدة.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "حز الاشتراك" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "الإسم" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "التفاصيل" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "منشور" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', "التردد" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', "فترة تجريبية" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', "قيمة تجريبية" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "كامل القيمة" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', "حد الوحدات" ); // Not currently used, saved for a rainy day
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "حد الوحدات" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', "التردد: M/Q/B/A شهري/ربع سنوي/مرتين في السنة/سنوي" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', "Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "اشتراك" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', "الرجاء ادخال/تحديث بيانات الاشتراك. ملاحظه كل الخانات الزامية" );
jr_define( '_JRPORTAL_SUBSCRIBERS_FIRSTNAME', "الإسم الأول" );
jr_define( '_JRPORTAL_SUBSCRIBERS_SURNAME', "اللقب" );
jr_define( '_JRPORTAL_SUBSCRIBERS_ADDRESS', "العنوان" );
jr_define( '_JRPORTAL_SUBSCRIBERS_COUNTRY', "البلد" );
jr_define( '_JRPORTAL_SUBSCRIBERS_POSTCODE', "رمز البريد" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', "كنت في حاجة الى الاشتراك صالحة لإنشاء فنادق جديدة. في هذه اللحظة من الزمن، كنت قد اشتريت لالاشتراكات" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', " <i>منشور</i> فندق او فنادق. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "You can increase the number of businesses you can create by <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>purchasing more subscription packages here.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', " قمت باستخدامه مسبقاً " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', " الفنادق المتاحة " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "لرؤية قائمة الفنادق الحالي انقر فوق <a href='" . JOMRES_SITEPAGE_URL . "&task=listyourbusinesses'>هنا</a>. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "لمشاهدة قائمة من الحزم الاشتراك الحالية المتوفرة، انقر فوق <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>هنا</a>. " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', "للأسف، لا يمكنك نشر هذا الفندق كما كنت قد وصلت الحد الأقصى لعدد من الفنادق المتاحة." );
jr_define( '_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "أشكركم على خلق الاشتراك في قائمة عملك على الخادم لدينا. مرة واحدة يتم وضع علامة الفاتورة ودفع (قد يكون هناك تأخير اعتمادا على بال) الرجاء <a href='" . JOMRES_SITEPAGE_URL . "&task=registerProp_step1'>انقر هنا للمتابعة إنشاء الفنادق الخاصة بك.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "نحن نعتذر التي لم تقم باختيار للاشتراك في خدمتنا. واسمحوا لنا أن نعرف إذا كان هناك أي الطريقة التي يمكن أن تساعدك على زيادة" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_USE', "استخدام وظائف معالجة الاشتراك" );
jr_define( '_JOMRES_COM_NEWUSER', 'إنشاء مستخدم جديد في الحجز' );
jr_define( '_JOMRES_COM_NEWUSER_DESC', 'إنشاء حساب مستخدم جديد في الحجز مستخدم غير مسجل. (Joomla فقط)' );
jr_define( '_JOMRES_CLICKTOREGISTER', 'انقر هنا للتسجيل فندقك' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', "تفعيل الاشتراكات" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', "رمز اشتراك البوابة" );
jr_define( '_JRPORTAL_NEWUSER_SUBJECT', "شكرا لحجزكم معنا - تابع تسجيل تفاصيل المستخدم الخاص بكم" );
jr_define( '_JOMRES_LATLONG_DESC', "استخدام الماوس الخاص بك إلى التحرك في جميع أنحاء الخريطة، واسحب المؤشر إلى موقع الفندق لتعيين خطوط الطول والعرض." );
jr_define( '_JOMRES_CONTROLPANEL', 'لوحة التحكم' );
jr_define( '_JOMRES_COM_FAUXHEADERS', 'Output Jomres javascript headers into the body of the html?' );
jr_define( '_JOMRES_COM_FAUXHEADERS_DESC', 'Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICE', 'عرض الفاتورة' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICES', 'عرض الفواتير' );
jr_define( '_JOMRES_USER_LISTMYPROPERTY', 'إضف منشائتك معنا' );
jr_define( '_JOMRES_WARNINGS_DANGERWILLROBINSON', 'تحذير : ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', "هل يمكن أن يكون حزمة واحدة مجانا على النظام إذا كنت ترغب في ذلك، عن طريق إنشاء حزمة ووضع كل من كمية وتجربة كامل المبلغ إلى 0.00" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "ناسف ولكن لم يتم التعرف على معرف الحزمة" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "ناسف تم اشتراكك مسبقاً" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', " الحالة <b>0:</b> مبالغ متبقية <b>1:</b> وقت الإنشاء <b>2:</b> ملغي <b>3:</b> نهاية الفترة" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "حسابي" );
jr_define( '_JOMRES_COM_YOURBUSINESS', 'بيانات منشائتك' );
jr_define( '_JOMRES_COM_YOURBUSINESS_NAME', 'اسم منشائتك' );
jr_define( '_JOMRES_COM_YOURBUSINESS_VATNO', 'VAT number' );
jr_define( '_JOMRES_COM_YOURBUSINESSADDRESS', 'رقم المبنى' );
jr_define( '_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>' );
jr_define( '_JOMRES_INVOICE_NUMBER', 'رقم الفاتورة ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'حدد التواريخ التي تريد تطبيق الحجز الأسود. عند تحديد مواعيد مناسبة، انقر فوق الزر تطبيق لإعادة تحقيق توافر.<br/> 
<br/> 
إذا كان الفندق لديه واحد أو أكثر عبر عن الفترة المحددة، ثم فلن تكون قادرا على حجز بها حتى يتم إلغاء حجوزات أخرى / عبر سوداء، / حجزت.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'عذرا، لا يمكنك حجز هذا الفندق في هذه التواريخ.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'يمكنك حجز هذا الفندق في هذه التواريخ.' );
jr_define( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'تم تكوين فندقك لتوجيه الاتهام للشخص الواحد في الليلة ولكن لم يكن لديك أي نوع من أنواع الضيف خلق أو نشرها، يرجى إنشاء ونشر واحد أو أكثر أنواع زائر.' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'لم يكن لديك أي تكوين التعريفات بعد، فإنك لن تكون قادرة اتخاذ أي حجوزات لفندقك.' );
jr_define( '_JOMRES_EDITINGMODE_ON', 'نمط التحرير مفعل' );
jr_define( '_JOMRES_EDITINGMODE_OFF', 'نمط التحرير غير مفعل' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'الدفعات المقدمة متغيرة ؟' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'الودائع متغير تسمح لك لتحديد إذا لو كنت تريد لشحن كامل المبلغ إذا كان التاريخ هو الوصول عبر داخل وأيام اعتبارا من اليوم. تعيين هذا الخيار إلى نعم لتمكين هذه الميزة، وأدخل عدد الأيام التي كانت أقل، لذلك على سبيل المثال إذا كان اليوم هو الوصول في غضون 60 يوما، ثم إيداع المبلغ اتهم سيكون كامل المبلغ، وإلا أن يستند المبلغ على الوديعة خيارات تهيئتها أعلاه.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'عدد الأيام، والتي ستحمل في كامل المبلغ كعربون.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN', 'إرسال رسائل البريد الإلكتروني اتصل المالك إلى عنوان بديل؟' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'تعيين هذا الخيار إلى نعم إذا كنت تريد أن ترسل رسائل البريد الإلكتروني المالك للاتصال الإدخال أدناه. ترك الأمر لتعيين لا لإرسال رسائل البريد الإلكتروني إلى عنوان البريد الإلكتروني المحدد في منطقة الأعمال التكوين.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'عنوان بديل لرسائل البريد الإلكتروني المالك الاتصال.' );
jr_define( '_JOMRES_CONFIRMATION_EMAIL_SENT', 'تم إرسال رسالة تأكيد بالبريد الإلكتروني. قد تقوم بإغلاق هذه النافذة الآن.' );
jr_define( '_JOMRES_REALESTATE_TITLE', 'قائمة العقارات' );
jr_define( '_JOMRES_REALESTATE_YESNO', 'هذا الفندق هو لإدراجها بيع؟' );
jr_define( '_JOMRES_REALESTATE_YESNO_DESC', 'حدد نعم إذا كنت تبيع الفندق، حدد لا إذا كان الإعلان حيث سيتم تقديم الإيجارات على المدى القصير، وسيتم استخدام هذا النظام لأخذ الحجوزات.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'اتصال بالوكيل' );
jr_define( '_JOMRES_INVOICE_MARKASPAID', 'قم بتحديد الفاتورة كمدفوعة' );
jr_define( '_JOMRES_INVOICE_MARKEDASPAID', 'تم تعليم الفاتورة كمدفوعة' );
jr_define( '_JOMRES_APIKEY_REMAKE', 'Make new API key' );
jr_define( '_JOMRES_AUTOTRANSLATE_TITLE', 'Use Google for initial translations?' );
jr_define( '_JOMRES_AUTOTRANSLATE_DESC', 'This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given business. Note that this feature sanitizes all input, so if you use a html editor for formatting your business details, then this will break that formatting.<br/>' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'هل هذه تثبيث منشاءه واحدة؟' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'إذا تم تعيين هذا الخيار إلى نعم، ثم يتم تبسيطها إلى حد كبير من وجهة النظر الواجهة الأمامية لJomres غير مصرح المستخدمين. الافتراضي يدعو إلى Jomres من خيار القائمة، بدلا من أن يحصل على قائمة الفنادق، ويأخذ فقط للضيف لنموذج الحجز للفندق الأول في النظام. مديري الفنادق أيضا لن ترى معاينة تفاصيل الفندق زر أو زر إضافة فندق جديد. مثالية إذا كنت تريد فقط إلى قائمة فندق واحد واتخاذ الحجوزات لذلك.<br/>' );
jr_define( '_JOMRES_HTMP_PURIFIER', 'Use HTML purifier functionality?' );
jr_define( '_JOMRES_HTMP_PURIFIER_DESC', 'التبديل هذا لتمكين Jomres على استخدام تنقية HTML مكتبة (http://htmlpurifier.org/). يتم استخدام مكتبة كما طبقة إضافية من الحماية عند التعامل مع المدخلات والمخرجات والبيانات فمن المستحسن أن تترك ذلك ممكنا، ومع ذلك فإنه يستخدم ذاكرة أكثر.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'رصيد المدفوعات' );
jr_define( '_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'الرصيد' );
jr_define( '_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> for more information on this subject.' );
jr_define( '_JOMRES_SUPPORTKEY', 'مفتاح الدعم' );
jr_define( '_JOMRES_SUPPORTKEY_DESC', 'مفتاح الترخيص الخاص بك رقم الدعم (المعروف أيضا باسم رقم الترخيص الخاص بك). سوف تحتاج إلى ترخيص ما يصل إلى تاريخ لتكون قادرة على تحميل المحمول لJomres.' );
jr_define( '_JOMRES_PERSONAL_DISCOUNT', 'خصم شخصي' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'حد تسجيل الفندق لبلد واحد' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'يمكنك التأكد من أن تقتصر التسجيلات الفندق لدولة واحدة فقط عن طريق تحديد هذا الخيار إلى نعم ووضع البلد في الخيار التالي.' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'الفندق يقع في هذه البلد : ' );
jr_define( '_JOMRES_JQUERYTHEME', 'Jquery قالب' );
jr_define( '_JOMRES_JQUERYTHEME_DESC', 'اختر قالب a jquery لاستخدامة في علامة التبويب ' );
jr_define( '_JOMRES_PROPERTYNOTOUBLISHED', 'نعتذر، ولكن هذا الفندق ليست متاحة حاليا.' );
jr_define( '_JOMRES_REVIEWS', 'التقييم' );
jr_define( '_JOMRES_REVIEWS_TITLE', 'موضوع التقييم' );
jr_define( '_JOMRES_REVIEWS_DATE', 'تم النشر في' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS', 'لايوجد تقييم لهذه المنشاءه حالياً' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'هل تود ان تكون اول من يقوم بتقييم هذه المنشاءه' );
jr_define( '_JOMRES_REVIEWS_IAGREE', 'انا مع هذا التقييم' );
jr_define( '_JOMRES_REVIEWS_IDISAGREE', 'انا ضد هذا التقييم' );
jr_define( '_JOMRES_REVIEWS_AVERAGE_RATING', 'متوسط النقاط: ' );
jr_define( '_JOMRES_REVIEWS_TOTAL_VOTES', 'اجمالي الاصوات:' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW', 'اضف تقييم جديد' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'تحتاج لتسجيل للقيام بالتقييم' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY', 'اخبرنا عن رايك في هذه المنشاءه : ' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY_SAID', 'هذا المقييم اخبرنا بـ : ' );
jr_define( '_JOMRES_REVIEWS_PROS', 'الإيجابيات: ' );
jr_define( '_JOMRES_REVIEWS_CONS', 'السلبيات : ' );
jr_define( '_JOMRES_REVIEWS_SUBMITTEDDATE', 'قدم في : ' );
jr_define( '_JOMRES_REVIEWS_ALREADYREVIEWED', 'قمت بتقييم هذه المنشاءه مسبقا لا يمكن تقييمها مره اخرى' );
jr_define( '_JOMRES_REVIEWS_CANNOTREVIEW', 'نأسف غير مسموح لك بالتقييم في هذا الموقع' );
jr_define( '_JOMRES_REVIEWS_CLICKTOSHOW', 'إضغط لعرض التقييم' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' الزوار يوافقون على هذا التقييم ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' الزوار الغير موافقون مع هذا التقييم' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' الضيف موافق على هذا التقييم ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'الضيف غير موافق على هذا التقييم' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'أشكركم على مشاركة رايكم في هذا التقييم' );
jr_define( '_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'شكرا لك ولكن بالفعل قمت مسبقا بالتقييم ' );
jr_define( '_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'الرجاء التأكد بتعبئة جميع الحقول' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'يرجى تلخيص رأيك عن طريق إدخال عنوان' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'الرجاء ادخال تقييم كامل داخل الحقل الخاص بالوصف' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'من فضلك ادخل العناصر الجيدة من تجربتك من كونه ضيفا في هذا الفندق' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'يرجى إدخال أي أفكار سلبية قد تكون لديكم من خبرتكم' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'يرجى تقييم الضيافة التي تلقيتها من الموظفين' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'يرجى تقييم رأيك في الفنادق' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'يرجى تقديم رأيك في نظافة الفندق' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'يرجى تقييم أماكن الإقامة. أنها مريحة أم لا' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'يرجى تقديم رأيك في ما إذا كان من القيمة مقابل المال' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'يرجى تقييم الخدمات' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'ملخص التقييم' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'تجربتك في مزيد من التفاصيل' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'شكرا لتقديم رأيك.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'شكرا لتقديم رأيك. وسيتم نشره قريبا من قبل أحد المشرفين لدينا.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_CONTROL', 'استخدام خاصية جومرز للتقييم' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'نشر التقييم بشكل تلقائي؟' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'إذا قمت بتعيين هذا إلى لا سوف تحتاج إلى نشر يدويا للتقييم' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE', 'ضبط التقييم للوضع التجريبي' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'عادة يمكن لمديري الفندق غير مراجعة الفنادق. مع تمكين وضع التجريبي، فإنها يمكن. بطبيعة الحال هذا ليس وضعا مثاليا في بيئة الإنتاج.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'هذه هي قائمة من جميع الشركات. لمشاهدة استعراض الفنادق وانقر على أن الفنادق. من هناك سوف تكون قادرة على نشر أو حذف المشاركة.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'عدد التقييم الغير منشور' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'اجمالي عدد المقييمين' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'نشر | عدم نشر التقييم' );
jr_define( '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'حذف التقييم' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW', 'تبليغ عن تقييم' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'تبليغ عن تقييم' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'الرجاء ادخال البلاغ' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'نرى شيئا في هذا الاستعراض الذي هو مرغوب أو غير دقيقة؟ الإبلاغ عن ذلك، ونحن سوف ننظر في ذلك لك.' );
jr_define( '_JOMRES_REVIEWS_SUBMIT', 'ارسل' );
jr_define( '_JOMRES_REVIEWS_REPORT_CREATED_BY', 'التبليغ ارسل بواسطة ' );
jr_define( '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'وتنشر التقارير من قبل المستخدمين الذين قد يختلفون مع مضمون الاستعراض. الطريقة الوحيدة لإزالة التقرير هو حذف الاستعراض.' );
jr_define( '_JOMRES_REVIEWS_RATING', 'Ratings (1 = ردئ 10 = ممتاز) ' );
jr_define( '_JOMRES_REVIEWS_RATING_1', 'الضيافة  ' );
jr_define( '_JOMRES_REVIEWS_RATING_2', 'الوقع ' );
jr_define( '_JOMRES_REVIEWS_RATING_3', 'النظافة' );
jr_define( '_JOMRES_REVIEWS_RATING_4', 'مكان الإقامة ' );
jr_define( '_JOMRES_REVIEWS_RATING_5', 'القيمة مقابل المال ' );
jr_define( '_JOMRES_REVIEWS_RATING_6', 'الخدمات ' );
jr_define( '_JOMRES_REVIEWS_REVIEWED_BY', 'تم التقييم بواسطة : ' );
jr_define( '_JOMRES_REVIEWS_CLICKTOHIDE', 'حجب التقييم' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'عرض نموذج الحجز في صفحة تفاصيل المنشاءه' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'قم بتعيناها بنعم لعرض النموذج في صفحة المنشاءه اذا قمت بتعينها بلا سيتم عرض رابط في صفحة المنشاءه عوضا عن ذلك' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE', 'السعر الإجمالي' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'اذا كانت الاسعار المدلة في النظام تشمل الضرائب  اختر نعم وفي حال كان السعر الصافي اختر لا' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'ضرائب الخدمات:' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'الحقل الخاص بيوم الاسبوع يسمح لك بضبط السعر لليوم قم بضغط على يوم الاسبوع سيتم ضبط جميع الحقول باليوم بنفس السعر' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'محدد التاريخ يسمح لك تحديد السعر لفترة معينة اختر تاريخ البدء والانتهاء وقم بادخال السعر وقم بالضغط على زر ضبط السعر' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'بداية الفترة' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'نهاية الفترة' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'السعر' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'ضبط السعر ' );
jr_define( '_JOMRES_PARTNERS_TITLE', 'المشاركين' );
jr_define( '_JOMRES_CALENDAR_TODAY', 'اليوم' );
jr_define( '_JOMRES_CALENDAR_PREV', 'السابق' );
jr_define( '_JOMRES_CALENDAR_NEXT', 'التالي' );
jr_define( '_JOMRES_CALENDAR_RTL', 'false' );
jr_define( '_JOMRES_ROOMALLOCATIONS_ROOM', 'الوحدات ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_GUESTS', 'الضيوف ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_INFORMATION', 'هذه الطريقة التي نحن تعيين أعداد النزلاء لغرفهم. إذا كنت ترغب في تغيير هذا التخصيص، وسوف تحتاج إلى الاتصال بالفندق بعد إجراء الحجز. قد يتم تطبيق رسوم إضافية إذا قمت بتغيير المهام الخاصة بك.' );
jr_define( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "لاحظ ان فندقك لم يتم نشره بعد ، فقط يمكنك روئية الفندق زوار الموقع لن يتمكنو من مشاهدة الفندق" );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'الترتيب الافتراضي لنتائج البحث' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'تغيير هذا الخيار لتغيير الترتيب الذي يتم عرض نتائج البحث بشكل افتراضي.' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'عرض نتائج البحث كقائمة منسدلة' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE', 'شكل قائمة الغرف' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_DESC', 'في نموذج الحجز، وذلك باستخدام "الكلاسيكية" نمط قائمة القنوات التي تقدمها الغرف الفردية للضيوف. مع غرفة عرض نوع، زوار اختيار عدد من غرف X نوع (مثل 2 × الزوجي) بدلا' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'كلاسيك' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'انواع الوحدات' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', 'اعادة فحص التوافر' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'اعادة بناء قائمة توافر الغرف' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'حساب الاجمالي' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'الانتهاء من التحديث' );
jr_define( '_JOMRES_COM_CALENDAR_STARTDAY', 'يوم بداية التقويم مثلا السبت او الاثنين' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'فقط ضيوف الفنادق بامكانهم التقييم' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'قم بضبطها بنعم في حال كنت ترغب بان يكون الزوار الفعلين للفندق بامكانهم التقييم فقط' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'للوحدة' );
jr_define( '_JOMRES_MAX_GUESTS_PER_ROOM', 'عدد الضيوف للوحدة: ' );
jr_define( '_JOMRES_MAX_GUESTS_PER_BOOKING', 'عدد الضيوف للحجز : ' );
jr_define( '_JOMRES_NUMBER_OF_ROOMS', 'عدد الوحدات' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'السعر الافتراضي' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "ينطبق فقط للاول سعر" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW', "عدد السنوات المعروضة" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "يتم تعريف عدد السنوات لاضهارها وامكانية تحريرها في حالة الادارة الجزئية" );
jr_define( '_JRPORTAL_MONTHS_LONG_0', 'ياناير' );
jr_define( '_JRPORTAL_MONTHS_LONG_1', 'فبراير' );
jr_define( '_JRPORTAL_MONTHS_LONG_2', 'مارس' );
jr_define( '_JRPORTAL_MONTHS_LONG_3', 'ابريل' );
jr_define( '_JRPORTAL_MONTHS_LONG_4', 'مايو' );
jr_define( '_JRPORTAL_MONTHS_LONG_5', 'يونيو' );
jr_define( '_JRPORTAL_MONTHS_LONG_6', 'يوليو' );
jr_define( '_JRPORTAL_MONTHS_LONG_7', 'اغسطس' );
jr_define( '_JRPORTAL_MONTHS_LONG_8', 'سبتمبر' );
jr_define( '_JRPORTAL_MONTHS_LONG_9', 'اكتوبر' );
jr_define( '_JRPORTAL_MONTHS_LONG_10', 'نوفمبر' );
jr_define( '_JRPORTAL_MONTHS_LONG_11', 'ديسمبر' );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS', "ادارة عمليات الفندق" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', "هناك عمليات ادارة للفنادق مختلفة تعتمد الطريقة عرض القنادق الخاصة بك" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', "تاجير" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "اختر خيارات التاجير الخاص بالحجز على سبيل المثال شقة فيلا شاليه" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "عقار/قائمة بسيطة" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "اختر عقار في حال كنتم لاتقومون بتاجير اي من المنشاءات" );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG_DESC', 'تعيين هذا إلى نعم للحد من عدد من الخيارات المتاحة لمديري الفنادق في المقطع تكوين العامة. هذا مفيد إذا كنت لا تريد مديري الفنادق للعب مع حولها إعدادات كثيرة جدا، يمكنك تحرير بدلا jomres_config.php لتحديد خيارات الفندق الافتراضي.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_SELECT', 'الرجاء تحديد خيار الحجز' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Switches on html editors in business details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.' );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "عرض كامل الشاشة" );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "عرض عادي" );
jr_define( '_JOMRES_COM_TIMEZONE_SWITCHER', "اضهار تحويل التوقيت في شريط الادوات الخاص بمدير المنشاءه" );
jr_define( '_JOMRES_PARTNER_DISCOUNT', "خصم الشركاء " );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "بحث مستخدم" );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "أدخل بعض الأحرف للبحث عن مستخدم.<br/> عند تحديد المستخدم سوف تضاف تلقائيا لهم كشريك وسوف يتم نقلك إلى الصفحة التالية حيث يمكنك تعيين الفنادق والخصومات للمستخدم." );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "Existing الشركاء" );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "اختر الشريك لدخول الصفحة الخاصة بالتحكم بالشريك" );
jr_define( '_JOMRES_PARTNER_SHOW_TITLE', "الشريك :" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHTITLE', "بحث عن منشاءه" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "إدخال أحرف قليلة من اسم الفندق وحدد الفندق. <BR/> عند تحديد الفندق الذي سوف إضافتها إلى محفظة الشريك، إلا أنها لن تتمتع بعد أي خصومات، وسوف تحتاج إلى تعيين تلك نفسك." );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "الفنادق الحالية" );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "انقر على الفندق لتعديل إعدادات الخصم الشريك لهذا الفندق." );
// 4.6
jr_define( '_JOMRES_SUSPENSIONS_TITLE', "معلق? <br/>(اضغط لتعليق المدير, سيقوم بايقاف جميع الفنادق الخاصة به ) " );
jr_define( '_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', "اضغط على ايقونة التعليق (الايقونة بالرجل مع العلامة الخضرا) لتعليق المدير. هذا يعني أن المدير لن يكون قادرا على أداء وظائف إدارة الفندق وجميع فنادقها سيكون غير منشورة. لا يمكن أن مديري الفنادق فائقة مع وقف التنفيذ." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "تم تعليق هذا الحساب، فإنه ليس من الممكن حاليا لإدارة الممتلكات الخاصة بك باستخدام هذا الحساب." );
jr_define( '_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "حساب المدير معلق" );
jr_define( '_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "اعادة تفعيل حساب المدير" );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "يرجى ملاحظة أن حسابك مدير الفندق نشطة الآن. قد تستمر في أداء أي مهام إدارة الفندق. يرجى تسجيل الدخول إلى حسابك وضمان التي تم نشرها الخصائص الملائمة. شكرا لك." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "يرجى ملاحظة أن حسابك مدير الفندق نشطة الآن. قد تستمر في أداء أي مهام إدارة الفندق. يرجى تسجيل الدخول إلى حسابك وضمان التي تم نشرها الخصائص الملائمة. شكرا لك." );
jr_define( '_JOMCOMP_MYUSER_REMOVE', 'حذف المفضلة' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE', 'ارشيف بيانات الحجز' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'أرشيف البيانات الحجز هو تفريغ الخام للمعلومات الحجز الملتقطة بعد النقر فوق الزر تأكيد الحجز. تحوم فوق موعد لرؤية تفريغ البيانات الخام. يتم تخزين المعلومات في الجدول XXX__jomres_booking_data_archive.' );
jr_define( '_JOMRES_MY_ACCOUNT_EDIT', 'تحرير الحساب' );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', "بحث المستخدمين" );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "إدخال أحرف قليلة من اسم المستخدم الخاص بهم للبحث عن المستخدم. <br/> إذا عند تحديد المستخدم الذي سوف تضاف تلقائيا لهم كمدير، وسوف يتم نقلك إلى الصفحة التالية حيث يمكنك تعيين الفنادق وحقوق الوصول إلى المستخدم ." );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "المدراء الحاليين" );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', "اختر المدير للذهاب للصفحة الخاصة به" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "البحث بواسط رقم الضيف" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "عرض البحث بواسطة رقم الضيف في قائمة منسدلة" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "البحث بواسطة عدد النجوم" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "عرض البحث بواسطة عدد النجوم في قائمة منسدلة" );
jr_define( '_JOMRES_SEARCH_GUESTNUMBER', 'عدد الضيوف' );
jr_define( '_JOMRES_SEARCH_STARS', 'عدد النجوم' );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_TITLE', "فواتير العمولات" );
jr_define( '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "عدد المنشاءات" );
// 4.6.1
jr_define( '_JOMRES_CONFIG_JQUERY', "تحميل Jomres jQuery مكتبة?" );
jr_define( '_JOMRES_CONFIG_JQUERY_DESC', "يمكنك تعيين هذا بلا إذا كان لديك قالب يستخدم جي كويري. وهذا قد حل قضايا الصراع جي كويري على بعض القوالب، ولكن ليس كل شيء." );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'إذا كنت تستخدم Joomfish، يجب تعيين هذا إلى لا، واستخدام اللغة Joomfish التحويل. يتم دوما تمكين وحدات التحويل المسؤول في المنطقة لأن هناك حاجة عند استخدام ميزة تسمية الترجمات.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'يتم إنشاء الصور المصغرة للصور تلقائيا التي تم تحميلها.' );
// 4.7.1
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'عرض الصور المصغرة الصغيرة أقصى (بكسل).' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'وتستخدم الصور المصغرة الصغيرة في قائمة الفندق في حين يتم استخدام الصور المصغرة متوسطة الحجم في رأس الفندق.' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'ارتفاع الصغيرة أقصى الصور المصغرة (بكسل).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'عرض الصور المصغرة المتوسطة أقصى (بكسل).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'متوسط ​​الطول أقصى الصور المصغرة (بكسل).' );
jr_define( '_JOMRES_TOUCHTEMPLATES', 'تسمية الترجمة' );
jr_define( '_JRPORTAL_ROI_TAB', "ROI" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE', "استخدام ميزة العمولات؟" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "تعيين هذا إلى نعم لإظهار الفواتير مدير العمولات التي أثيرت." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "مدير الحجوزات يقوم بانشاء العمولات؟" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "اذا كان مدير الحجز يفعل ذلك ايضا انشاء " );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', "ثم اصدار فاتورة عمولة جديدة " );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', "ثم اصدار فاتورة عمولة جديدة اللتي تتطلب انتبهابكم الرجاء الضغط على الرابط لعرض الفاتورة قج يتطلب تسجيل دخول" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "ايقاف المدير التلقائي حيث يتم تعليمها بمعلقه" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "الحد الخاص بالتعليق التلقائي" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "هذا الحد هو عدد الايام اللتي يتطلب من مدير الفندق الدفع خلالها قبل تعليق وايقاف الفندق" );
//4.7.2
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT', 'اطار اللغة ' );
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /'.JOMRES_ROOT_DIRECTORY.'/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /'.JOMRES_ROOT_DIRECTORY.'/languages directory. Note that if you create a new property type, then a copy of the current language file is made in a subdirectory under /'.JOMRES_ROOT_DIRECTORY.'/language with a name that reflects the new property type\'s description.' );
// 4.7.3
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG', 'التهيئية المتقدمة للموقع' );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.' );
jr_define( '_JOMRES_CONFIG_JQUERY_UI', "Load Jomres jQuery UI library?" );
jr_define( '_JOMRES_SORTORDER_PRICE_DESC', 'السعر (الاعلى اولاً)' );
jr_define( '_JOMRES_SORTORDER_PRICE_ASC', 'السعر (الاقل اولاً)' );
// 4.7.6
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'يجب أن يكون سعرها السعر ملخص والتقديرات وفقا ليلة / في الأسبوع / الشهر الواحد؟' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'لليلة' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'للاسبوع' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'للشهر' );
jr_define( '_JOMRES_BOOKINGFORM_PERPERSON', 'للشخص' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'اسابيع في ' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'شهور في ' );
// 4.7.7
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'كيف يتوجب على خيار البحث عن عمل أعداد الاشخاص؟' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'تؤثر على جميع وحدات البحث. عند استخدام ميزة البحث للنزلاء عدد، ينبغي أن ننظر ميزة البحث عن العقارات من هو التعريفات ودعم أعداد النزلاء حتى ويساوي عدد المختار، تساوي بالضبط اختيار رقم أو عدد أكبر واختيار؟' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE', 'يرجى الانتظار، يتم معالجة طلبك، وسيتم إعادة توجيهك إلى موقع باي بال.' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'إذا لم يتم إعادة توجيهك تلقائيا إلى Paypal في غضون 5 ثوان ...' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'إضغط هنا' );
// 4.7.8
jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDFROM', "الحجز صالح من " );
jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDTO', "الحجز صالح حتى" );
jr_define( '_JRPORTAL_COUPONS_GUESTNAME', "اسم الضيف" );
jr_define( '_JRPORTAL_COUPONS_DESC_478', "يمكن أن تتولد رموز الخصم ومرت على الضيوف كحافز لإجراء الحجوزات.<br/>
صالحة من التواريخ وللإشارة إلى التواريخ التي يمكن إجراء الحجوزات على، في حين أن الحجز صالحة من / إلى تواريخ تشير إلى التواريخ التي يجب أن تغطي الحجز لالقسيمة لتكون صالحة. إذا كان الحجز يقع خارج تلك الفترة فإن المعدلات الطبيعية تنطبق على أيام خارج تلك الفترة.<br/>
إذا كنت ترغب في حجز لتكون متاحة لضيف واحد محدد، اختر الاسم الذي النزلاء في القائمة المنسدلة للحد من القسيمة إلى أن ضيوف فقط." );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', "مع الكوبون الخاصة بك، وقد تم خصم هذا الحجز من " );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', " الى " );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_DESC', "تعيين هذا إلى لا لتعطيل التحميل من كل من جافا سكريبت مسج UI وملفات CSS." );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS', "Load Jomres jQuery UI CSS library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Set this to No to disable only the jquery UI CSS file." );
//v5.1 
jr_define( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "الاجمالي شامل الضرائب" );
jr_define( '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'منشاءه غير مفعلة' );
// v5.2
jr_define( '_JOMRES_CONVERSION_TITLE', "استخدام ميزة التحويل " );
jr_define( '_JOMRES_CONVERSION_TITLE_DESC', "استخدام وظيفة تحويل Jomres عبر الإنترنت. وهذا العرض تحويل المنسدلة للمستخدمين الواجهة، حيث أنها سوف تكون قادرة على اختيار العملة التي يرغبون في رؤية يتم ضبط الأسعار المعروضة فيها الناتج السعر لإظهار سعر تحويل يليه سعر العقار الأصلية بين قوسين." );
jr_define( '_JOMRES_CONVERSION_DISCLAIMER', "وقد استخدمنا بذل قصارى جهدنا للحصول على أسعار الصرف الأكثر دقة وفي الوقت المناسب ما في وسعنا. لدينا ميزة تحويل العملات عبر الإنترنت هي خدمة لأغراض إعلامية فقط وليس المقصود بها لتقديم أرقام دقيقة. وفقا لذلك، ونحن لا نضمن دقة أسعار الصرف. باستخدام هذه الميزة، تعتبر لك أن اتفقنا على أن أي اعتماد على أو استخدام ميزة التحويل معدل يكون كليا على مسؤوليتك الخاصة." );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_TITLE', "استخدام جافا سكريبت التخزين المؤقت؟" );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_DESC', "اختيار أم لا لاستخدام التخزين المؤقت الجافا Jomres الميزة. يعمل على معظم خوادم، ولكن ليس على الإطلاق. إذا كنت تواجه مشاكل مع أخطاء جافا سكريبت التي ذكرت كسلسلة حرفية غير منهى (على سبيل المثال) الحرائق، يجب عليك تعيين هذا إلى رقم" );
// 5.2.1
jr_define( '_JOMRES_HISTORIC_GUESTS_SHOW', "قائمة الضيوف التاريخية والحالية" );
jr_define( '_JOMRES_HISTORIC_GUESTS_NOSHOW', "الضيوف الحاليون فقط" );
// 5.3.1
jr_define( '_JOMRES_CURRENCYCONVERSION_TAB', 'نتيجة تحويل عملة / عملة رموز' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.' );
jr_define( '_JOMRES_DEBUGGING_TAB', 'تصحيح الاخطاء' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP', 'اظهار نموذج الحجز في اطار منبثق' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'إذا تم تعيين الخيار لإظهار نموذج الحجز في تفاصيل المنشأة إلى لا، ثم عند فتح صفحة نموذج الحجز يمكن Jomres تظهر في نموذج الحجز منبثقة مشروط. هذا يسمح لك لتشمل المزيد من المعلومات في نموذج الحجز دون إرهاق العميل من خلال وجود عدد كبير جدا من العناصر التي تظهر على الشاشة (كما كنت مخفية وراء المنبثقة)' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals panel location' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'الاقامة بدون الضرائب' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'الإقامة شاملة الضرائب' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'ضرائب الغرف:' );
jr_define( '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'فتح نموذج الحجز' );
jr_define( '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'عودة لمعلومات المنشاءه' );
jr_define( '_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'المحددة تلقائياً؟' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'الرصيد (بعد دفع الدفعة المقدمة)' );
jr_define( '_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'فلتر الغرف على أساس خصائصها.' );
jr_define( '_JOMRES_DATEPERIOD_LATESTBOOKING', 'أحدث حجز' );
jr_define( '_JOMRES_DATEPERIOD_SECOND', 'ثانية' );
jr_define( '_JOMRES_DATEPERIOD_MINUTE', 'دقيقة' );
jr_define( '_JOMRES_DATEPERIOD_HOUR', 'ساعة' );
jr_define( '_JOMRES_DATEPERIOD_DAY', 'يوم' );
jr_define( '_JOMRES_DATEPERIOD_WEEK', 'اسبوع' );
jr_define( '_JOMRES_DATEPERIOD_MONTH', 'شهر' );
jr_define( '_JOMRES_DATEPERIOD_YEAR', 'سنة' );
jr_define( '_JOMRES_DATEPERIOD_DECADE', 'عقد' );
jr_define( '_JOMRES_DATEPERIOD_S', 's' );
jr_define( '_JOMRES_DATEPERIOD_AGO', 'منذ' );
jr_define( '_JOMRES_DATEPERIOD_FROMNOW', 'من الان' );
jr_define( '_JOMRES_WHOLEDAY_TITLE', 'الحجوزات لعدة ايام' );
jr_define( '_JOMRES_WHOLEDAY_DESC', 'By default the system bookings resources out by the night, so a booking from the first of January ' . date( "Y", strtotime( "next year" ) ) . ' to the 2nd of January ' . date( "Y", strtotime( "next year" ) ) . ' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'لليوم' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'الشخص باليوم' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'استقبال' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'عودة' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', "الايام في" );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'ايام العودة ليست صحيحة' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'الحجز قصيرة جدا. يجب أن يكون هناك على الأقل هذه الأيام كثيرة بين الاستقبال وتواريخ العودة:' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'الفترة الادنى للاستقبال والتوديع' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'الفاصل الزمني الأدنى في نموذج الحجز بين بيك اب وغلبه النعاس التواريخ. فاصل زمني من 1 يعني أنه يمكن تحديد مواعيد بيك اب والعودة إلى نفس اليوم، ولكن هذا لا يزال يعتمد على الفاصل الزمني الأدنى الذي ويتم احتسابها تلقائيا باستخدام محرك الحجز، كما يتحقق التعريفات التي هي صالحة للفترة الحجز.' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'ملخص السعر والسعر المتوقع يجيب ان يجب ان يكون مسعر باليوم او الاسبوع او الشهر ؟؟' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'لليوم' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'الايام قبل تاريخ الاستقبال' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'اقل عدد لايام اللتي يتوجب ان تنقضي من اليوم قبل تاريخ الاستقبال' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'تعيين هذا إلى نعم إذا كنت تريد للحد من الحجوزات مقدما (استخدم الحقل التالي لتعيين حد من حيث أيام). إذا كنت تعيين هذا إلى نعم ثم إذا كان المستخدم يحاول حجز أكثر من ن يوما على الأقل وبعد ذلك يتم استعادة موعدها بيك اب لتاريخ اليوم' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'عرض اذخال تاريخ العودة؟' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "تعيين هذا إلى لا إذا كنت لا تريد أن تظهر مدخلات تاريخ المربع المقابل. فقط استخدام هذا إذا كنت تعرف ما تفعلونه، وسوف دائما في تاريخ العودة عبر وضعها لفي اليوم التالي لتاريخ الالتقاط." );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'إذا قمت بتعيين هذا إلى نعم، ثم سيتم اتخاذها عبر لفترة محددة. إذا تم تعيين هذا إلى لا، ثم التأكد من عدم تعيين ذلك اليوم بيك اب محددة إلى نعم (إلا إذا كنت تريد على وجه التحديد لإجبار الناس على بيك اب في يوم معين من أيام الأسبوع) وإلا فإنك لن تحصل على العديد من الروابط في التقويم توافر.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'يوم الاستقبال محدد مسبقاً' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'فقط لمواقع تعرض حجوزات فترة محددة. اختيار يوم من أيام الأسبوع على وجوب بذل بيك آب على.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'يوم استقبال محدد' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'تكرار تاريخ الاستقبال المحدد: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'عندما يتم اختيار مواعيد ثابتة الالتقاط، وعدد من التواريخ التي يمكن أن تظهر في القائمة المنسدلة التواريخ. لاحظ أن قائمة التواريخ لن تتضمن أي تواريخ إذا كان الحجز غير ممكن بسبب الحجوزات المسبقة، وأن القائمة سوف يكون في الواقع مرتين طالما عدد اخترتها لأنها سيكون لها عدد مماثل من التمور تاريخية (إن وجدت) .' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'للشخص لليوم' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'حدد نعم إذا كنت تريد لتوجيه الاتهام لكل شخص يوميا. إذا لا، ثم سيتم احتساب التكاليف على أساس لكل غرفة لكل يوم' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'الودائع متغير تسمح لك لتحديد إذا لو كنت تريد لشحن كامل المبلغ إذا كان التاريخ هو الالتقاط الحجوزات خلال أيام N من اليوم. تعيين هذا الخيار إلى نعم لتمكين هذه الميزة، وأدخل عدد الأيام التي كانت أقل، لذلك على سبيل المثال إذا كان اليوم هو الالتقاط في غضون 60 يوما، ثم إيداع المبلغ اتهم سيكون كامل المبلغ، وإلا أن يستند المبلغ على الوديعة خيارات تكوين أعلاه.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'وسوف يعتمد حساب الأسعار غرفة معظم الفنادق على عدد من الغرف من نوع المطلوبة التي تتوفر على تاريخ معين. وهذا يسمح لهم لتقديم خصومات على نوع الغرفة / الفندق غير مزدحم خلال فترة معينة بهدف جذب الفندق التي قد خلاف ذلك ينبغي تفويتها. <br/> إذا تمكين وتكوين هذا البرنامج المساعد يسمح لك عرض أسعار للتعديل على أساس عدد من غرفة من نوعية مختارة تتوفر في الفندق في يوم معين. <BR/> عتبة الأيام يحدد عدد الأيام أن التاريخ يجب أن يكون ضمن الالتقاط قبل تعديل أسعار الغرف من هذه الميزة، ثم خيارات تسمح لك النسب المئوية لتكوين نسبة من الغرف التي يمكن أن تكون متاحة قبل تطبيق خصم معين. ملاحظة ومع ذلك، إذا تم حجز عدة غرف ثم تطبيقها على المستوى الحالي للخصم لجميع الغرف ولن تخفض ويتم اختيار أكثر الغرف.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'بداية (عدد الأيام بين تاريخ اليوم والالتقاط)' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'الاستقبال قيد الانتظار' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'يوم الاستقبال' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'الاستقبال' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'يوم العودة' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'العودة المتاخرة' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'لم يتم الاستقبال' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'الايام' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'علم الحجز قد تم الاستقبال' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'تعليم الحجز عودة' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'تعليم الحجز قد تم الاستقبال' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'تعليم الحجز عودة' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'التكلفة لليوم: ' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'عدد الايام: ' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'تجاوز إجمالي السكن' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_SAVE', 'حفظ التجاوز' );
jr_define( '_JOMRES_BOOKINGFORMWIDTH', 'عرض نموذج الحجز في البكسل' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED', 'السماح للوحة الاجماليات للانزلاق في نموذج الحجز؟' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'سوف لوحة المجاميع تنزلق في نموذج الحجز باسم مخطوطات المستخدم إلى أسفل. يمكنك تمكين / تعطيل هذه الميزة مع هذا التبديل. ملاحظة، إذا كان المستخدم يزور عبر متصفح جهاز الجوال ثم ينزلق تلقائيا معطل.' );
jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'ارسال بريد الكتروني للمستخدمين الجدد ببيانات الدخول الخاصة بهم؟' );
jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'إذا تم تعيين الخيار لإنشاء مستخدم جديد نعم، يمكنك تعيين هذا الخيار إلى لا للتأكد من أنها لا بياناتهم الدخول مرسل عبر البريد الإلكتروني للمستخدم أوقية و-تم إنشاؤها. قد يكون هذا مفيدا إذا كنت تقوم بإضافة مستخدمين جدد تلقائيا إلى القائمة البريدية، على سبيل المثال، ولا تريد للمستخدمين تسجيل الدخول في الواقع.' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT', 'عرض قيمة الضرائب في نموذج مع ملخص السعر' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'منع نموذج الحجز من عرض حقول سعر الضريبة في مجاميع ملخص عن طريق تعيين هذا الخيار إلى رقم' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'الالغاء' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'الرجاء تسجيل الدخول ، فقط العملاء المسجلين بامكانهم الغاء الحجوزات هنا يمكن تحديد عدد الايام المسموح بها للالغاء الحجوزات' );
jr_define( '_JOMRES_EDIT_PROFILE', 'تحرير الملف الشخصي' );
jr_define( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship' );
jr_define( '_JOMRES_IMAGE', 'الصورة' );
jr_define( '_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'نوع المنشاءات اللتي من الممكن ان تستخدم هذه الميزة' );
jr_define( '_JOMRES_CRATES_CLICKINITIAL', 'انقر على الرسالة لإظهار كافة الفنادق مع هذا الحرف الأول. مرة واحدة لديك قائمة من الخصائص التي يمكن تعيين أسعار العمولات لتلك الخصائص، أو انقر على أيقونة تحرير تلك الفنادق لعرض الإحصاءات.' );
jr_define( '_JRPORTAL_TAX_RATE_EDIT', "تحرير قيمة الضريبة" );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', "تحرير الحقل المخصص" );
jr_define( '_JOMRES_LICENSESERVER_PASSWORD', "License server password" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME', "License server username" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME_DESC', "If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here." );
jr_define( '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', "نسخة Jomres : " );
jr_define( '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', "احدث نسخة من Jomres" );
jr_define( '_JOMRES_VERSIONCHECK_VERSIONWARNING', "تنبية : يوجد نسخة حديثة من النظام وننصحك بترقيته في اقرب وقت " );
jr_define( '_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres. The Core system is free, but it can be enhanced through the installation of plugins. To access those plugins you will need a download and support license. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.' );
jr_define( '_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.' );
jr_define( '_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "منشاءة فعالة" );
jr_define( '_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "تغير المنشاءه النشطة" );
jr_define( '_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "انقر فوق حرف لكشف كافة الخصائص تبدأ مع الحرف الذي هذا. وكشفت مرة واحدة، انقر على الاسم الذي الملكية إلى تغييره إلى الممتلكات الخاصة بك نشطة." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "بديلة SMTP اعدادات" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "مستضيف بديل" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Change this to your smtp mail server" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "منفذ بديل" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "Change this to your smtp port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "برتوكول بديل" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "استخدم التصريح" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Alternate Username" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Alternate Password" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "" );
jr_define( '_JOMRES_WARNING_SYSTEM_CACHE', "تحذير: لقد اكتشفت أنه تم تمكين ذاكرة التخزين المؤقت نظام جملة المساعد. فإننا ننصح بان تعطيل هذا البرنامج المساعد لأنها سوف إخفاء الردود أياكس إلى حجز قضية شكل، مما تسبب النظام الخاص بك لتتصرف بطريقة متقطعة." );
jr_define( '_JOMRES_QUICK_INFO', "معلومات مختصرة" );
jr_define( '_JOMRES_MENU_SHOW', "عرض" );
jr_define( '_JOMRES_MENU_HIDE', "اخفاء" );
jr_define( '_JOMRES_MENU_SHOW_TITLE', "استخدام تخطيط البديل القائمة؟" );
jr_define( '_JOMRES_MENU_SHOW_DESC', "Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements." );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', "الافتراضي" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', "اي شخص" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', "مسجل مسبقا" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', "مدير" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', "مدير عام" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', "لا احد" );
jr_define( '_JOMRES_ACCESS_CONTROL_TITLE', "تحكم الوصول" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC', "هذه الميزة تسمح لك التحكم الذي سيكون قادرا على رؤية البرنامج المساعد في القائمة الرئيسية. خيارات المستخدم عادة هي 00009 مشاهدة من قبل إما / أو زوار الموقع غير المسجلين، 00010 خيارات بصفة عامة تشير إلى نوع النشاطات الاستقبال التي يتم استخدامها على أساس يومي، في حين تستخدم 00011 خيارات لإنشاء وتكوين الممتلكات ولكن يتم الوصول إليها في كثير من الأحيان أقل." );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', "موظف استقبال" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "تحكم الوصول بشكل كامل" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "تعيين هذا الخيار إلى نعم لتمكين ميزة التحكم في الوصول الكامل، ثم زيارة خيار التحكم بالوصول تحت صيانة النظام لتكوين عناصر التحكم في الوصول." );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "ملاحظة، ولكن هذا لا إعدادات هذه البرامج النصية السيطرة الكامنة التي اتصالهم، لذلك على سبيل المثال إذا قمت بتعيين <I> 00009user_option_03_search </ I> ل'المدير' على المستخدم الذي يعرف Jomres يمكن استدعاء من قبل لا تزال j06000search.class.php دخول http://www.domain.com/index.php؟option=com_jomres&task=search في شريط عنوان المتصفح الخاصة بهم. هذا هو المقصود، لأن هذا التحكم بالوصول القائمة تسيطر ببساطة ما يمكن أن ينظر إليه في القائمة الرئيسية Jomres. إذا كنت في حاجة تشديد الضوابط ثم تعيين تكوين الموقع -> التحكم في الوصول الكامل إلى الخيار نعم وإعادة النظر في خيار التحكم في الوصول القائمة." );
jr_define( '_JOMRES_ACCESS_CONTROL_TITLE_FULL', "تحكم الوصول بشكل كامل" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	" );
jr_define( '_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied." );
jr_define( '_JOMRES_SHOWPROFILES_USERSWITHACCESS', "المستخدمين مع حقوق الإدارة عن هذه المنشأة" );
jr_define( '_JOMRES_ADMIN_LISTALLUSERSINVOICES', "قائمة فواتير كل المستخدمين" );
jr_define( '_JOMRES_DEBUGGING_SUBJECT', 'الموضوع' );
jr_define( '_JOMRES_DEBUGGING_FULLNAME', 'اسمك الكامل' );
jr_define( '_JOMRES_DEBUGGING_YOUREMAIL', 'عنوان البريد الإلكتروني ' );
jr_define( '_JOMRES_DEBUGGING_ISSUE', 'التفاصيل' );
jr_define( '_JOMRES_EXTRAS_MODELS_MODEL', 'Model' );
jr_define( '_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters' );
jr_define( '_JOMRES_EXTRAS_MODELS_FORCE', 'الاجبار' );
jr_define( '_JOMRES_METATITLE', 'Meta title' );
jr_define( '_JOMRES_METADESCRIPTION', 'Meta description' );
jr_define( '_JOMRES_FOUNDPROPERTIES', "العثور على المنشأئات" );
jr_define( '_JOMRES_REGISTRATION_STEP_1_OF_2', "أضف منشائتك : الخطوة 1 من 2" );
jr_define( '_JOMRES_REGISTRATION_STEP_2_OF_2', "اضف منشائتك : الخطوة 2 من 2" );
jr_define( '_JOMRES_MYPROPERTIES', 'منشائتنا' );
jr_define( '_JOMRES_CART_TITLE', 'مقترحات الحجوزات' );
jr_define( '_JOMRES_CART_INFO', 'علما، إن لم تكن هذه الحجوزات حفظ حتى الان. وإذا كنت تسجيل الخروج أو تنتهي جلسة العمل الخاصة بك أن خسروا. تذكر لتأكيد الحجوزات الخاصة بك!' );
jr_define( '_JOMRES_CART_CONFIRM_BOOKINGS', 'الحجوزات المأكدة' );
jr_define( '_JOMRES_CART_OR', ' أو ' );
jr_define( '_JOMRES_CART_SAVEFORLATER', 'الحفظ لما بعد' );
jr_define( '_JOMRES_CART_NOBOOKINGS_SAVED', 'لايوجد لديك اي حجز محفوظ' );
jr_define( '_JOMRES_CART_VIEWCART', 'عرض السلة' );
jr_define( '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory' );
jr_define( '_JOMRES_DEFAULT_LAT_STARTPOINT', 'نقطة البدء الافتراضي خط العرض' );
jr_define( '_JOMRES_DEFAULT_LONG_STARTPOINT', 'نقطة البدء الافتراضي خط الطول' );
jr_define( '_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'في خريطة جوجل على الممتلكات تحرير صفحة، قبل تم نقل علامة، فماذا النقاط الافتراضي بداية خط العرض / خط الطول يكون؟' );
jr_define( '_JOMRES_CLEARDATES', 'ليست لدي تواريخ محدده حالياً' );
jr_define( '_JOMRES_MOBILE_REDIRECT', 'Redirect to frameless when on mobile devices?' );
jr_define( '_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.' );
jr_define( '_JOMRES_SYSTEM_EMAILS', 'يتم ارسال البريد الالكتروني عبر هذا الحساب' );
jr_define( '_JOMRES_SYSTEM_EMAILS_DESC', "اترك هذا الخيار فارغ لتعطيله. Jomres سوف تستخدم عنوان البريد الإلكتروني في الفندق (ES) عند إرسال رسائل البريد الإلكتروني للضيوف، ومع ذلك خدمة البريد الإلكتروني لا يسمح رسائل البريد الإلكتروني من عناوين التعسفي (أي أنها قد تسمح فقط رسائل البريد الإلكتروني من عنوان واحد معتمد). إذا كان هذا هو الحال، ثم يمكنك استخدام هذه المدخلات لإدخال عنوان الذي سوف ينظر إليها على أنها عنوان للمن جميع رسائل البريد الإلكتروني النظام." );
jr_define( '_JOMRES_CSS_CACHING_TITLE', "Use css caching?" );
jr_define( '_JOMRES_CSS_CACHING_DESC', "" );
jr_define( '_JOMRES_JSCALENDAR_USECLEARCHECKBOX', "Search calendars show the clear dates checkbox?" );
jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_LIST', "عرض قائمة" );
jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_TILE', "عرض حسب الصور" );
jr_define( '_JOMRES_COMPARE', "مقارنة" );
jr_define( '_JOMRES_REMOVE', "إزالة" );
jr_define( '_JOMRES_RETURN_TO_RESULTS', "العودة لنتائج البحث" );
jr_define( '_JOMRES_ADDTOSHORTLIST', "إضافة للقائمة المختصرة" );
jr_define( '_JOMRES_REMOVEFROMSHORTLIST', "إزالة من القائمة المختصرة" );
jr_define( '_JOMRES_VIEWSHORTLIST', "عرض القائمة المختصرة" );
jr_define( '_JOMRES_COOKIEPOLICY_TITLE', "سياسة الملفات الموقتة" );
jr_define( '_JOMRES_COOKIEPOLICY_DESC', "EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show favourites, search results etc). 
<br/>
Set this option to Yes to enact this policy." );
jr_define( '_JOMRES_COOKIEPOLICY_1', "مهم: سياسة الملفات المؤقتة" );
jr_define( '_JOMRES_COOKIEPOLICY_2', "نحن نستخدم الكوكيز لتساعد على الحفاظ على موقعنا ذات الصلة وسهلة الاستخدام." );
jr_define( '_JOMRES_COOKIEPOLICY_3', "إقراء المزيد" );
jr_define( '_JOMRES_COOKIEPOLICY_4', "EU legislation requires that all websites clearly specify if cookies are being used and their purpose." );
jr_define( '_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site." );
jr_define( '_JOMRES_COOKIEPOLICY_6', "نعم، أوافق على استخدام الكوكيز في هذا الغرض" );
jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'الدفعة المقدمة تتطلب دفع قيمة اول ليلة؟' );
jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'وتحسب على أساس أسعار الليلة الواحدة. هل تريد أن تكون إيداع رسوم ليلة واحدة؟ إذا كان الأمر كذلك، يمكنك تجاهل الخيارات التالية.' );
jr_define( '_JOMRES_NOTHINGINSHORTLIST', "لم تقم بإضافة أي أصناف إلى قائمة المختصرة" );
jr_define( '_JOMRES_MOBILE_SETTINGS', "اعدادات الاجهزة الهاتفية" );
jr_define( '_JOMRES_SIMULATE_MOBILE', "Simulate mobile mode" );
jr_define( '_JOMRES_SIMULATE_MOBILE_DESC', "Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed." );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION', "Simulation IP" );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1." );
jr_define( '_JOMRES_SAFEMODE', "تفعيل الوضع الامن" );
jr_define( '_JOMRES_SAFEMODE_DESC', "تعيين هذا إلى نعم لتحريك الوضع الآمن. سيؤدي ذلك إلى تعطيل كل الإضافات بحيث Jomres سوف تستخدم فقط انها وظيفة أساسية." );
jr_define( '_JOMRES_PRICE_ON_APPLICATION', "POA" );
jr_define( '_JOMRES_USE_JOMRESEDITOR', "Use Jomres' WYSIWYG editor? (recommended)" );
jr_define( '_JOMRES_USE_JOMRESEDITOR_DESC', "If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it." );
jr_define( 'COMMON_NEXT', "التالي" );
jr_define( 'COMMON_CANCEL', "الغاء" );
jr_define( 'COMMON_SUBMIT', "تقديم" );
jr_define( 'COMMON_SAVE', "حفظ" );
jr_define( 'COMMON_DELETE', "حذف" );
jr_define( 'COMMON_RETURN', "العودة" );
jr_define( 'COMMON_CLOSE', "اغلاق" );
jr_define( 'COMMON_BACK', "للخلف" );
jr_define( 'COMMON_HOME', "الرئيسية" );
jr_define( 'COMMON_NEW', "جديد" );
jr_define( 'COMMON_SEND', "إرسال" );
jr_define( 'RECAPTCHA_TITLE', "reCaptcha" );
jr_define( 'RECAPTCHA_INFO', "يتم استخدام كلمة التحقق للتأكد من أن العميل باستخدام نماذج الويب هو إنسان، ويستخدم لمنع مديري العقارات من أن \ المتطفلة \ من الروبوتات على شبكة الانترنت. لاستخدام الاتصال بنا في تشكيل Jomres سوف تحتاج للتسجيل في <a href=http://www.google.com/recaptcha\ target=\_blank\"> في اختبار reCAPTCHA جوجل </ A> الصفحة الرئيسية ووضع نطاقك لتلقي مفاتيح العامة والخاصة. عند استلام تلك المفاتيح، يرجى إدخالها أدناه. الخدمة reCapcha هي خدمة مجانية توفرها Google." );
jr_define( 'RECAPTCHA_PUBLIC_KEY', "المفتاح العام" );
jr_define( 'RECAPTCHA_PRIVATE_KEY', "المفتاح الخاص" );
jr_define( '_JOMRES_BOOKINGFORM_LOCK_TITLE', "مهلة ملف القفل" );
jr_define( '_JOMRES_BOOKINGFORM_LOCK_DESC', "لمنع خطر مزدوج الضيوف الذين يحجزون غرف Jomres يستخدم ملف القفل لمنع غرفة من إضافتها إلى قائمة الغرف المتاحة في نموذج الحجز إذا كان شخص ما آخر قد سبق وأن أضفت لهم الغرفة لنفس التواريخ ل. بشكل افتراضي وهذا قفل مهلة في 3600 ثانية، أو ساعة واحدة. يمكنك تغيير الوقت الذي يستغرقه لتنتهي هذا التأمين من خلال تغيير هذا الرقم." );
jr_define( '_JOMRES_BOOTSTRAPSWITCH', "تمكين قوالب التمهيد Jomres 'وظيفة؟" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_DESC', "إذا كنت تقوم بتشغيل تعيين قالب التمهيد ممكن في الواجهة لهذا الموقع هذا الخيار إلى نعم." );
jr_define( 'COMMON_ACTION', "الاداء" );
jr_define( 'COMMON_VIEW', "عرض" );
jr_define( 'BACKTOTOP', "العودة للأعلى" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_WEAK', "اسبوع" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_STRONG', "قوي" );
jr_define( '_JOMRES_INPUTFILTERING', "فرز الإدخال" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_TITLE', "مستوى فرز الادخال" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_DESC', "ومطهرة معظم البيانات التي يتم إدخالها في النظام عن طريق تجريد الأولى أي علامات HTML، ثم استخدام المتغير PHPs وظيفة تصفية لجعل البيانات آمنة قبل أن يتم إدخالها في قاعدة البيانات. قد ترغب في السماح مدخلات معينة (على سبيل المثال المدخلات النص في الصفحة تفاصيل المنشأة) لتشمل HTML. هناك مستويان من تصفية يمكنك استخدامها لتصفية هذه المدخلات، وإما ضعيفة، أو قوية. يجب عليك فقط استخدام الإعداد ضعف ثقة إذا كان المستخدم (ق) إدخال البيانات من قبل نفسك، على سبيل المثال زميل مسؤولي النظام، وإلا يجب أن تترك لتعيين قوية. عند تعيينها إلى قوية (مستحسن) يمكنك تحديد العلامات التي لا تزال للسماح بتحرير الإعداد المقبل HTML تنقية يسمح به'. " );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "الاوسمة المسوح بها" );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default." );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_TITLE', "المدخلات المسموح بها" );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space." );
jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "عرض تفاصيل المنشاءه على شكل تبويب ؟" );
jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_DESC', "تعيين هذا الخيار إلى إظهار تفاصيل المنشأة في علامات التبويب. تعيين إلى أي لتبين لهم دون علامات التبويب." );
jr_define( 'COMMON_PRINT', "طباعة" );
jr_define( 'COMMON_EDIT', "تحرير" );
jr_define( 'COMMON_COPY', "نسخة" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_INFO', "3 يتضمن جملة إطار التمهيد لتويتر بشكل افتراضي، وJomres والقوالب والوظائف التي سوف تستخدم هذه القوالب. افتراضيا، إذا كنت تقوم بتشغيل على جملة Jomres 3 يتم تعيين هذه المفاتيح إلى نعم ولكن يمكنك تعيين لهم لا إذا رغبت في ذلك (غير مستحسن). إذا كنت تقوم بتشغيل الإصدار من جملة أقل من جملة 3 يمكنك اختيار ما زال استخدام القوالب التمهيد Jomres والوظائف، ولكن بشكل افتراضي يتم تعيين هذه الخيارات لرقم" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', "استخدام قوالب التمهيد Jomres في الواجهة؟" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', "استخدام قوالب التمهيد Jomres في المنطقة المسؤول؟" );
jr_define( '_JOMRES_ALTERNATIVE_SEARCH_RESULTS', "وهنا بعض البدائل التي قد ترغب في النظر." );
jr_define( '_JOMRES_BEEZ_WARNING', "ملاحظة، تم حاليا تعيين قالب الواجهة لBeez3. يرجى العلم أن لدينا نماذج غير متوافقة مع Beez3 ونحن ننصح تبديل القالب إلى قالب موقع Bootstrapped مثل بروتو ستار." );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "كشف تلقائي عن بلد الضيف؟" );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "سيقوم النظام تلقائيا يحاول كشف البلد الضيف، إن لم تكن قد حجزت من قبل. يمكنك تعيين هذا الخيار إلى لا، وتحديد البلد الذي تفضل أن يظهر في نموذج الحجز، في الخيار التالي." );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "نبذة عن  Jomres" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "مساعدة" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 الرئيسية" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "هيا نبداء من هنا" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "صيانة النظام" );
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL", "تحكم الوصول" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "ادوات المطورين" );
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "اللغات" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "income generation" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "المحاسبة" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "الحجوزات" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "هيكل الموقع" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "ادارة المستخدمين" );
jr_define( "_JOMRES_CUSTOMCODE_MANUAL", "طريقة الاستخدام (عبر الانترنت)" );
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "حسابي (عبر الانترنت)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "المهام المجدولة" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "وظائف الموقع" );
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER", "مدير البرامج المساعدة" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "التكامل" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "التقارير/الإحصائيات" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "الضرائب" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "التذاكر (عبر الانترنت)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "المساعدة" );
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES", "الترقية" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "طريقة الدفع" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "التعرفة الإفتراضية" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "هذه تنطبق فقط على التعرفة الجديدة" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "عدد السنوات اللتي سيتم عرضها" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "يحدد عدد من السنوات لإظهار عند تحرير نوع التعريفة" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "الفواتير" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "تفاصيل الحساب" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "الدخول" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "الخروج" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "بحث" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "اللوحة الرئيسية" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "حجز" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "الادارة" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "الفواتير" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "الإعدادات" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "متنوع" );
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS", "SRPs" );
jr_define( "_JOMRES_EDIT_COUNTRY_TITLE", "تحرير البلد" );
jr_define( "_JOMRES_EDIT_COUNTRY_ID", "رمز البلد" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE", "رمز البلد" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", "اسم البلد" );
jr_define( "_JOMRES_EDIT_REGION_TITLE", "تحرير المحافظة" );
jr_define( "_JOMRES_EDIT_REGION_ID", "رمز المحافظة " );
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE", "رمز المحافظة" );
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME", "اسم المحافظة" );
jr_define( "_JOMRES_COM_LISTCOUNTRIES", "قائمة البلدان" );
jr_define( "_JOMRES_COM_LISTREGIONS", "قائمة المناطق \المحافظات" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS", "تصدير التعريفات" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO", "هذه الميزة تسمح لك تصدير الترجمات التي تم بناؤها باستخدام ميزة ترجمة إلى اللغة. سيكون بناء حقل النص مع كافة البيانات المطلوبة لبناء ملف لغة جديدة، كل ما عليك القيام به هو نسخ ولصق هذا الإخراج إلى ملف اللغة الجديدة التي يمكنك وضع في الصعود إلى Jomres جديد يقوم الخادم، أو إذا كنت تريد أن تساهم عودة إلى المجتمع Jomres." );
jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS", "ترجمة اللغات" );
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES", "ترجمة الجمل ملف اللغة" );
jr_define( "_JOMRES_COM_NOTAMANAGER", "خطأ، المستخدم تسجيل دخولك في وليس داخل سوبر مدير Jomres، فلن تكون قادرا على استخدام هذه الميزة حتى كنت قد استخدمت ميزة إظهار ملفات التعريف لجعل نفسك كل من المدير ومدير سوبر. هذا هو ميزة أمان." );
jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT", "تصميم قائمة المنشاءات الافتراضي" );
jr_define( '_JOMRES_LASTEDITED_WARNING_72', 'Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that' ); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates
jr_define( "_JOMRES_STAYFORAMINIMUMOF", "الاقامة لمدة لاتقل عن" );
jr_define( "_JOMRES_NIGHTSFOR", " ليال لـ" );
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS", "صور قائمة الممتلكات، وتظهر صورة GIF الممتلكات من الصور إذا عرض الشرائح المتاحة." );
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY", "كما تظهر صور GIF فقط إذا كانت الخاصية هو فندق مميزة." );
jr_define( "_JOMRES_AGENT", "وكيل" );
jr_define( "_JOMRES_AGENT_DETAILS", "تفاصيل الوكيل" );
jr_define( "_JOMRES_AGENT_LISTINGS", "قوائم الوكلاء" );
jr_define( "_JOMRES_PROPERTY_LANG", "لغة المنشاءة" );
jr_define( "_JOMRES_PROPERTY_LANG_DESC", "اللغة الافتراضية لهذه المنشاءة" );
jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE", "الموافقة بشكل تلقائي للمنشائات الجديدة" );
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC", "إذا قمت بتعيين هذا الخيار إلى لا ثم سوف تحتاج إلى الموافقة يدويا فنادق جديدة. يمكن حتى تمت الموافقة على الفندق غير أنها تنشر من قبل مدير / مدير الفندق السوبر." );
jr_define( "_JOMRES_APPROVALS_MENU_NAME", "الموافقات" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL", "المنشاءات المنتظرة للموافقة" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL", "لايوجد منشاءات بحاجة لموافقة" );
jr_define( "_JOMRES_APPROVALS_APPROVE", "اعتماد المنشاءة" );
jr_define( "_JOMRES_APPROVALS_REVIEW", "استعراض المنشاءة" );
jr_define( "_JOMRES_APPROVALS_NOT_APPROVED_YET", "لم يتم إقراره بعد هذا الفندق. بمجرد الموافقة عليها سوف تكون قادرة على نشرها." );
jr_define( "_JOMRES_APPROVALS_CANNOT_PUBLISH", "عذرا، لا يمكنك نشر هذا الفندق كما أنه لم يتم إقراره بعد." );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT", "فندق جديد يتطلب موافقة" );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT", "تمت إضافة الفندق إلى النظام الذي يتطلب موافقة. اضغط على الرابط لمشاهدة قائمة الفنادق تنتظر الموافقة: " );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT", "تم اعتماد المنشاءه الخاصة بك" );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT", "تهانينا، تمت الموافقة على الفندق الخاص بك، يرجى الضغط على الرابط التالي لمشاهدة لوحة التحكم الفندق: " );
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_TITLE", "اسماء المناطق قابلة للترجمة" );
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_DESC", "إلا إذا كنت تقوم بتشغيل خادم سريع جدا وينصح لك لترك هذه المجموعة إلى لا ونظرا لعدد كبير من الأسماء المنطقة، والمنطقة الترجمة اسم يستغرق الكثير من الذاكرة التي يمكن أن يبطئ نتائج البحث الخاص بك إلى أسفل." );

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

if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
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
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT' , "If your property has been awarded a number of stars based on a recognised standard, select the number from the dropdown. Some countries have rating by a single public standard — Belgium, Denmark, Greece, Italy, Malta, Netherlands, Portugal, Spain and Hungary have laws defining the hotel rating. In Germany, Austria and Switzerland, the rating is defined by the respective hotel industry association using a five-star system — the German classifications are Tourist (*), Standard (**), Comfort (***), First Class (****) and Luxury (*****), with the mark Superior to flag extras beyond the minimum defined in the standard." );

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


if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
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

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_TITLE' , "Media Centre." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT' , "The Media Centre allows you to easily upload images of your property. By default you can upload a main property image (in fact, you can upload more, but only the first in the list will be used), an unlimited number of images to be shown in the slideshow, and an unlimited number of images for each room." . jr_gettext("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS",'_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',false) );

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
jr_define('DATATABLES_SINFO'			, "إظهار _START_ إلى _END_ من أصل _TOTAL_ مُدخل" );
jr_define('DATATABLES_SINFOEMPTY'		, "يعرض 0 إلى 0 من أصل 0 سجلّ" );
jr_define('DATATABLES_SINFOFILTERED'	, "(منتقاة من مجموع _MAX_ مُدخل)" );
jr_define('DATATABLES_SINFOPOSTFIX'		, "" );
jr_define('DATATABLES_SINFOTHOUSANDS'	, "," );
jr_define('DATATABLES_SLENGTHMENU'		, "أظهر مُدخلات _MENU_" );
jr_define('DATATABLES_SLOADINGRECORDS'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SPROCESSING'		, "جاري التحميل..." );
jr_define('DATATABLES_SSEARCH'			, "ابحث:" );
jr_define('DATATABLES_SZERORECORDS'		, "لم يُعثر على أية سجلات" );
jr_define('DATATABLES_SFIRST'			, "الأول" );
jr_define('DATATABLES_SLAST'			, "الأخير" );
jr_define('DATATABLES_SNEXT'			, "التالي" );
jr_define('DATATABLES_SPREVIOUS'		, "السابق" );
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

