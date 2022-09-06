<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

/**
 *
 * @package Jomres\Core\Languages
 *
 * Language files.
 *
 **/

jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'حجز سريع');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'عرض الملف الشخصي');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'إعدادات الشركة');
jr_define('_JOMRES_COM_MR_BACK', 'للخلف');
jr_define('_JOMRES_COM_MR_YES', 'نعم');
jr_define('_JOMRES_COM_MR_NO', 'لا');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'جديد');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'شركة جديدة');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'ضيف جديد');
jr_define('_JOMRES_COM_MR_SAVE', 'حفظ');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'الإسم');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'الوصول');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'المغادرة');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'إسم المستخدم');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'مستوى الوصول');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'تعديل المستخدم');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'جميع الحجوزات');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'تعديل الحجز');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'الوصول /المغادرة');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'الضيف');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'الوحدة');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'الدفع');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'الإسم الأول');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'اللقب');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'طلبات خاصة');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'يرجى ملاحظة أن بعض المتطلبات الخاصة التي قد تستدعي أجورا إضافية.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'الغاء الحجز');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'العنوان');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'الشارع');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'المنطقة');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'الرمز البريدي');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'رقم الهاتف');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'رقم الجوال');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'البريد الإلكتروني');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'لا يمكن إلغاء هذا الحجز لدخول الضيف ');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'لم يتم تقديم دفعه');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'تأكيد الإلغاء');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'تم الغاء الحجز');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'عدد الايام للوصول');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'نوع الحجز');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'أسود');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'الاستقبال');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'إنترنت');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'إسم الوحدة');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'الوحدة');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'الدور');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'متاحه لذوي الإحتياجات الخاصة؟');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'العدد الاقصى للاشخاص');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'الوحدة / نوع الشركة');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'الوحدة / الشركة التوضيح');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'قائمة مزيا الوحدة');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'تم دفع الدفعة المقدمة');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'تحديث الدفعة المقدمة');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'الإحمالي المطلوب');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'مرجع الدفعة المقدمة');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'حجز');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'الدفعة المطلوبة');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'تم حفظ الدفعة المقدمة');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'الوحدات');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'إسم المنشأة');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'نوع المنشأة');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'تعديل بيانات الضيف');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'الإسم الأول');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'اللقب');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'العنوان');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'الشارع');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'المنطقة');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'الرمز البريدي');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'رقم الهاتف');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'رقم الجوال');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'رقم الفاكس');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'قم بالإختيار');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'ليلة / ليالي');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'الإجمالي');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'عرض إعدادات الوحدات');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'الوحدات');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'مميزات الوحدة');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'أنواع الوحدات');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'المنشاءات');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'مميزات المنشاءه');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'الوحدة');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'النوع');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'الإسم');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'الرقم');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'الدور');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'إقصى عدد أشخاص');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'المميزات');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'تم التعديل');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'مميزات الوحدة');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'تفاصيل المميزات');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'تم حفظ المميزات');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'تحديث مميزات الوحدة');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'نوع الوحدة');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'اختصار نوع المورد / العمل');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'تفاصيل نوع الوحدة / المنشاءة');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'تم حفظ نوع الوحدة');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'تم التعديل');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'الإسم');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'العنوان');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'المدينة');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'المنطقة');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'البلد');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'الرمز البريدي');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'الهاتف');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'الفاكس');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'البريد الإلكتروني');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'الموقع الإلكتروني');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'المميزات');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'تم تحديث المنشاءة');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'مميزات المنشاءة');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'مميزات المنشاءة');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'تفاصيل كاملة عن المنشاءة');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'تم حفظ مميزات المنشاءة');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'الإسعار');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'إسم رمز السعر');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'التفاصيل');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'صالح من تاريخ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'صالح إلى تاريخ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'السعر لليلة ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'أقل مدة إقامة');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'أعلى مدة إقامة');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'أقل عدد أشخاص');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'أعلى عدد أشخاص');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'نوع الوحدة');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignore PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'السماح بنهاية الإسبوع');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'تم التحديث');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'إستنساخ البند');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'تم حدف السعر');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'تعديل السعر');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'تم حفظ الحجز');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'حجز ضيف في');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'حجز الضيف بالخارج');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'قائمة الحجوزات');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'لوحة التحكم');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'مشرف الضيف');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'مسؤول الاعمال');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'التحقق من الإمكانيات');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'الإسم');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'اللقب');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'رقم الهاتف');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'العنوان');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'المدينة');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'الرمز البريدي');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'رقم الهاتف ');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'رقم الجوال');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'لاتوجد وحدات متاحة حسب المعايير المطلوبة');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'شكرا لطلب الحجز معنا ونتمى لكم إقامة ممتعة<br><br> <b>الرجاء أخذ بعين الاعتبار أن هذا الحجز حجز مبدئي وسنقوم بإشعاركم فور تأكيد الحجز');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'حجز في الضيف ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'ضيف حجز في ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'حجز الضيف ');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'الكماليات');
jr_define('_JOMRES_COM_A_TARIFFS', 'الأسعار والعملة');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'تحميل ملف');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'المكملات للشخص الواحد');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'تأكد من تعين هذا -نعم في حال كنت تريد احتساب المكملات بالشخص');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'تكلفة المكملات للشخص المواحد');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'هل تريد الدفعه المقدمة بالنسبة المئوية?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'هل الدفعه المقدمة بالنسبة المئوية لإجمالي قيمة الحجز? إذا لا, سيتم احتساب الدفعه المقدمة بسعر ثابت');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'قيمة الدفعة المقدمة ');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'للشخص , لليلة');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'حدد نعم إذا كنت تريد فرض رسوم لكل شخص لكل ليلة. إذا حدد لا, سيتم احتساب التكلفة للوحدة لليلية');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'حجم الملف');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max. Image Filesize in Kilobyte');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'الوحدة محجوزة');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'تفاصيل الحجز');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'نود ان نلفت انتباهكم ان الحجز هو عقد ملزم ,في حال أردتم الإلغاء خلال إقصى مدة سيتوجب عليكم دفع كامل المبلغ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>رسوم الإلغاء</i> في حال الإلغاء نرجو التواصل معنا قبل الحجز بمده كافية. والا سيتم تطبيق شروط الإلغاء :');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'من 14 يوم وحتى تاريخ الوصول');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'طباعة رسالة التأكيد');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'طباعة الفاتورة');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'عدد الليالي: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'تكلفة الليلة: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'الإجمالي العام');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'طباعة الفاتورة');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'إضافة خدمة');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'تفاصيل الخدمة ');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'قيمة الخدمة');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'المواد المفوترة الاخرى');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'تم إضافة الصنف ');
jr_define('_JOMRES_UPLOAD_IMAGE', 'تحميل صورة');
jr_define('_JOMRES_FILE_UPLOAD', 'تحميل ملف');
jr_define('_JOMRES_COM_A_ODDS', 'Misc.');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'قائمة مكالمات المكونات الصغيرة');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'قم بتبديل هذا إلى نعم لرؤية سجل بالمكونات الصغيرة التي يتم استدعاؤها في أسفل الصفحة بعد انتهاء Jomres من التشغيل. كما أنه يعطل وظيفة إعادة التوجيه الداخلية. هذا مفيد إذا كنت تحاول تحديد المكونات الصغيرة التي تؤدي خدمات معينة.');
jr_define('_JOMRES_FILE_DELETE', 'حذف الصورة');
jr_define('_JOMRES_FILE_DELETED', 'تم الحذف');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'حذف');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'لايمكن حذف هذه المنشاءه , يوجد سجل حجوزات بها. الرجاء حذف السجل والمحاولة مره اخرى.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'تم حذف المنشاءه');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'حذف مزايا المنشاءه');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'غير قادر على حذف هذه المميزات, بسبب وجودها في احد المنشاءات. الرجاء حذفها من المنشاءه والمحاولة مره اخرى.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'تم حذف المزايا');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'حذف المزايا');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'غير قادر على حذف المزايا, بسبب وجودها في احد المنشاءات. الرجاء حذفها من المنشاءاه والمحاولة مره اخرى.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'تم حذف المزايا');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'حذف نوع المنشاءاه');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'تم حذف نوع المنشاءه');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'حذف منشاءاه');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'تم حذف منشاءاه');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'ليس لديك الصلاحية الكافية لحذف منشاءه');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Image width after Jomres resizes uploaded images');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'الخريطة');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'تفاصيل المنشاءه');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'أوقات الدخول');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'نقاط الإهتمام');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'تعليمات الوصول');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'المطار');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'مواصلات اخرى');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'الشروط والأحكام');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'العنوان');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'بإمكان الزائر الحجز مباشرة');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'عند الضبط بنعم سيتمكن الزائر من الحجز مباشرة دون التسجيل');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'الحجوزات لتواريخ محددة');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'عند الضبط بنعم, سيتم اخذ الحجوزات بتاريخ محددة. في حال الضبط ب لا, تاكد من ضبط موعد الدخول isn\'t عند الضبط بنعم (إلا إذا كنت تريد اجبار الناس على وجه التحديد للوصول في يوم معين) وإلا فلن تحصل على العديد من الروابط في التقويم توافر.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'فترة الحجز: ');
jr_define('_JOMRES_COM_A_BOOKING', 'إحجز الآن');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'خداع في وسط الصفحة بعد انتهاء Jomres من التشغيل. كما يعطل وظيفة إعادة التوجيه الداخلية. هذا مفيد إذا كنت تحاول تحديد الفترة التي دوراة معينة.');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'هل هذه شقة / كوخ / فيلا؟');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'مراجعة الحجز');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'تأكيد الحجز');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'الإثنين');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'الثلاثاء');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'الأربعاء');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'الخميس');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'الجمعة');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'السبت');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'الأحد');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'الإثنين');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'الثلاثاء');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'الأربعاء');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'الخميس');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'الجمعة');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'السبت');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'الأحد');
jr_define('_JOMRES_COM_A_AVLCAL', 'تقويم الإمكانيات');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'لون الخط للتاريخ الحالي');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'لون الخط في التقويم الشهري');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'لون الخط ليس في التقويم الشهري');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'لون الخلفية في حال التوافر');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'لون الخلفية خارج التقويم');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'لون خلفية الخليه للايام المشغولة');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'لون خلفية الخليه للحجوزات المؤقته)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'لون خلفية الخليه للإيام الماضيه');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'مشغولة / غير متاحة');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'المتاحة للحجز');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'الحجوزات السابقة');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'يوم وصول محدد مسبقاً');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'فقط لمواقع تعرض حجوزات فترة محددة. اختيار اليوم الذي يجب أن تبدأ على القادمون');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'يوم وصول محدد');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'مدة الإقامة');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'عرض تقويم الإمكانيات؟');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'تعيين هذا إلى نعم لإظهار التقويمات توافر');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'الإمكانيات / التوافر');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'إضغط على الاوقات الحرة لعرض نموذج الحجز.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'الحجوزات السوداء');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'حجوزات سوداء جديدة');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'حذف الضيف');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'تم حذف الضيف');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'غير قادر على حذف هذا الضيف');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'أي منهما');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'صيغة التقويم');
jr_define('_JOMRES_COM_CALENDARINPUT', 'صيغة إدخال التقويم');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'هذا يسمح للمستخدم لتغيير صيغة إدخال التواريخ ضمن Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'عبر فترة محددة تسمح فترات توقف قصيرة');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'طول عطلة قصيرة');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'منشور');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'سجل التدقيق');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'التارخ');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'إسم المستخدم');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'فرز بالتاريخ');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'الحالة');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'وصول معلق');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'وصول اليوم');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'مقيم حالياً');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'مغادرة اليوم');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'مغادرة متأخرة');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'لم يصل');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'إنشاء وحدة');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'تحديث وحدة');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'تم حذف الوحدة');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'إنشاء مميزات الوحدة');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'تحديث مميزات الوحدة');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'تم حذف مميزات الوحدة');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'إنشاء منشاءة');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'تحديث منشاءة');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'تم حذف المناءه');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'تحرير إعدادات المنشاءه');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'تفعيل المنشاءه');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'تم إدخال سعر');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'تم تحديث الاسعار');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'إضافة رسوم خدمات');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'تسجيل دخول ضيف');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'إدخال الدفعه المقدمة');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'إنشاء الضيف');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'تحديث الضيف');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'إحجز الآن');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'إدخال إضافة');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'تحديث إضافة ');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'تم حدف الإضافة');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'تفعيل الإضافة');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'إدخال حجز أسود');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'تم حذف حجز أسود');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'الإضافات');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'التوضيح');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'الإسم');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'السعر');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'تم تحديث الإضافة');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'تحرير الصنف');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'تم حذف الإضافة');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'التحكم بالإضافات');
jr_define('_JOMRES_COM_A_EXTRAS', 'إظهار الإضافات أثناء الحجز؟');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'تعيين هذا إلى نعم لإظهار أي إضافات التي قد ترغب في تقديم للضيف');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'إضافات إختياريه');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'تاريخ بدء الحجز الأسود');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'استئناف الخدمة تاريخ ');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'الحجوزات السوداء');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'كان هناك خطأ في محاولة لحجز هذه الوحدة, واحدة أو أكثر من وحدات حددتها غير متوفرة.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'الموارد المدرجة في الحجز الأسود');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'لا توجد حجوزات سوداء في القائمة');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'عدد النجوم');
jr_define('_JOMRES_COM_A_RESET', 'إعادة ضبط');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'حجز ملغي');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'البحث هنا عن:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'علامة العملة');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'رمز العملة');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'قرائة المزيد');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'حد الحجوزات المقدمة');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'تعيين هذا إلى نعم إذا كنت تريد للحد من الحجوزات مقدما (استخدم الحقل التالي لتعيين حد من حيث أيام). إذا كنت تعيين هذا إلى نعم ثم إذا كان المستخدم يحاول حجز أكثر من ن يوما على الأقل وبعد ذلك يتم استعادة تاريخ وصولهم إلى تاريخ اليوم');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'حد عدد الأيام للحجوزات المقدمة:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'الضريبة');
jr_define('_JOMRES_COM_A_ROOMTAX', 'ضريبة الوحدة');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'ضريبة محدد للوحدة');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'نسبة الضريبة');
jr_define('_JOMRES_COM_A_EUROTAX', 'ضريبة');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'نسبة الضريبة');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'أرشيف كامل السجلات');
jr_define('_JOMRES_FRONT_TARIFFS', 'قائمة الأسعار');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'مسمى السعر');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'تفاصيل السعر');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'نوع الوحدة');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'صالح من تاريخ');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'حتى تاريخ');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'للشخص لليلة');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'لليلة');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'غير شامل نهاية الأسبوع');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'أقل عدد أيام');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'أعلى عدد أيام');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'أقل عدد أشخاص');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'أعلى عدد أشخاص');
jr_define('_JOMRES_FRONT_PREVIEW', 'عرض');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'التحرير فعال؟');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'تحديث النص الإختياري');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'تحرير اللغة');
jr_define('_JOMRES_FRONT_PTYPE', 'نوع المنشاءة');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'فائمة أنواع المنشاءات');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'تحرير نوع المنشاءه');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'نوع المنشاءه');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'تفاصيل نوع المنشاءه');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'تم حفظ نوع المنشاءه');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'تم حذف نوع المنشاءه');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'التذكير بالسداد');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'لا يوجد خدمات إضافيه على الفاتورة');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'الدفعه المقدمة');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'كامل المستحق');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'المبلغ المدفوع أثناء الحجز');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'استخدام هذا الخيار لتحديد ما ينبغي أن يتوجب دفع في وقت الحجز. اختيار ما إذا كان ينبغي إيداع المتهمين إيداع, أو كامل المبلغ إذا كان ينبغي دفع المبلغ بالكامل.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'عرض الشهور');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'في إمكانيات الوحدة, كم عدد الشهور ليتم عرضها');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'العبارات');
jr_define('_JOMRES_COM_A_CANCEL', 'إلغاء');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'حدد التواريخ التي تريد تطبيق عبر السوداء. عند تحديد مواعيد مناسبة, انقر فوق "تطبيق" الزر لإعادة تحقيق توافر. <br/> 
<br/> 
اختيار الوحدات التي ترغب في اتخاذ خارج الخدمة. <BR> إذا وحدة لايوجد علامة الاختيار ضدها, فإنه لا يتم تضمينها في الحجز السوداء حتى يتم الانتهاء أي حجوزات المعلقة / الملغاة.<br/> ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b>لقد تم تسجيل خروجك عن عدم النشاط </b> الرجاء تسجيل الدخول وإعادة المحاولة.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'السبب');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'إستخدام طرق الدفع او عبارات الدفع؟');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'فضلا اختر طريق الدفع');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'تفعيل طريقة الدفع');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'تم تحديث الإضافات');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'تم إدراج اعدادات اضافة');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'عرض صفحة المنشاءة');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'روابط خارجية');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'ضع رابط الصفحة الخاصة بك هنا');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'تحرير بطاقة الإئتمان');
jr_define('_JOMRES_COM_A_EDITICON', 'تحرير مقاس الصورة الرمزية');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'معرض الصور');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'عرض رابط معرض الصور');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'عرض مضمون معرض الصور');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'معرض الصور');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'عرض رابط لقائمة الأسعار');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'السماح بالصفحة المنبثقة');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'تحميل صور معرض الصور');
jr_define('_JOMRES_A_TABS_MISC', 'Misc');
jr_define('_JOMRES_A', 'إعدادات البرنامج العامة');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'استخدام المزيا العامة للمنشائات');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'لتعيين صورة لهذه الميزة تحتاج أولا إلى تحميل الصور الخاصة بك ميزة الفندق إلى /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'الصورة الرمزية');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'اختر اضافة البحث اذا اردت استخدامها');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>عذرا, البحث لم ترجع أية نتائج. يرجى تعديل بحثك وحاول مرة أخرى.</b>');
jr_define('_JOMRES_AREYOUSURE', 'هل تريد القيام بذلك على كل حال؟');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'إحجز الآن');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'إحجز الآن');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'عرض قائمة الأسعار');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'العنوان');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'معلومات مفصلة');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'إضغط على الوحدة لعرض الإمكانيات');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'عرض معلومات العنوان');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'عرض معلومات المنشائه');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'عرض الوحدات والإمكانيات');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'الاسعار الموحدة');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'المتوسط');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'إختر نوع السعر المراد استخدامه');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'لديك خيارين للطرق الحساب الأسعار. المرحلة الأولى, وللشقة معدل الطريقة تمكنك لتقديم عدد من التعريفات المختلفة للضيف, و سعر للوقف هو نفسه للمرة بأكمله. هذا مفيد إذا كنت ترغب في تقديم التعريفات المختلفة للتاريخ نفسه, على سبيل المثال سرير وإفطار والتعريفة B & B وجبة المساء الجمركية. اختيار المعدلات التعريفية-إذا كنت ترغب في ضبط الأسعار الخاصة بك تعتمد على التاريخ في السؤال. سوف تجد كل Jomres من الرسوم عن كل يوم في الحجز, وإضافتها معا ثم العودة المعدل المتوسط ​​عبر فترة');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'عرض تاريخ المغادرة');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'تعيين هذا إلى لا إذا كنت لا تريد أن تظهر مدخلات تاريخ المغادرة مربع. فقط استخدام هذا إذا كنت تعرف ما تفعلونه, وسوف دائما في موعد المغادرة عبر وضعها لفي اليوم التالي لموعد الوصول.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'تفاصيل محدده');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'وهذا يحد من عدد الأحرف الموجودة في القائمة عند وضع الفندق من الوصف الفندق.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'صيغة التاريخ ؟');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'تفعيل');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'غير مفعله');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'إستخدام نوع الوحدات العالمية');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'لتعيين صورة لهذا المورد / نوع العمل , تحتاج أولاً إلى تحميل صور نوع المورد / العمل الخاص بك إلى المجلد /images/stories/'.JOMRES_ROOT_DIRECTORY.'/rmtypes/.');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'ادخال لون خلفية خاطئ');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'البلد الإفتراضي في نموذج الحجز');
jr_define('_JOMRES_JAVASCRIPT_', 'الحقول المحددة باللون الأحمر حقول إلزامية ');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'يمكن للمستخدمين تسجيل منشائتهم');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'تعيين هذا إلى نعم إذا كنت تريد للمستخدمين أن تكون قادرة على تسجيل الفندق الخاصة دون تدخل الادارة.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'الحقول المحددة باللون الأحمر حقول إلزامية');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'ثم إنشاء المنشاءه');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'عرض التقويم لبداية السنة');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'جدول يبين توافر منذ بداية العام الحالي.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'عدد الوحدات المتاحة');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'العودة لتفاصيل المنشاءة');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'نوع المنشاءه -الوحدات');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'حد البحث العشوائي');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'أظهر روابط تحويل العملة في قائمة التعريفة؟');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'تحويل العملات');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'السماح للمستخدمين لتحرير بواسطة محرر HTML ');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'إستخدام هذه النافذة لوضع الحجز. تعديل تفاصيل الحجز مثل تواريخ الوصول والمغادرة والأرقام أعلاه, ثم حدد الفنادق التي تحتاجها من قائمة تلك المتاحة. انقر فوق أي الفنادق المتوفرة لإضافتها إلى الحجز. عندما تنتهي من ذلك, يمكنك إضافة أي إضافات الاختيارية التي قد تتطلب وتقديم تفاصيل عنوانك. عندما يكون النموذج لديه معلومات كافية فإنه سيتم ثم إعطاء لك زر إرسال بحيث يمكنك تأكيد الحجز.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'إستخدام هذه النافذة لوضع الحجز. تعديل تفاصيل الحجز مثل تواريخ الوصول والمغادرة وعدد النزلاء. عندما تنتهي من ذلك, يمكنك إضافة أي إضافات الاختيارية التي قد تتطلب وتقديم تفاصيل عنوانك. عندما يكون النموذج لديه معلومات كافية فإنه سيتم ثم إعطاء لك زر إرسال بحيث يمكنك تأكيد الحجز.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'تفاصيل الحجز');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'إختر تفاصيل الحجز المطلوبة');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'الإمكانيات ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'إختر الوحدة المطلوبة');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'انظر هنا لمعرفة إذا كان الفندق متاح في الوقت الحالي.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'الخدمات');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'الخدمات');
jr_define('_JOMRES_COM_PERDAY', 'لليلة');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'التفاصيل الخاصة بك');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'من فضلك ادخل التفاصيل الخاصة بك. ملاحظة أن جميع الحقول مطلوبة مع النجمة الحمراء.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'الوحدات المتاحة');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'الوحدات المختارة');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', 'تاريخ الوصول المبكر: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'لليلة:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'الإقامة');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'الخدمات:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'الضرائب:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'الخصم:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'الإجمالي العام:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'الضيوف');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'إضافة إختيارك');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'حذف من إختياراتك');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'نوع الضيف');
jr_define('_JOMRES_VARIANCES_TYPE', 'النوع');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'نوع الضيف , على سبيل المثال اطفال عمر بين 5-10 سنوات, أو طالب ');
jr_define('_JOMRES_VARIANCES_NOTES', 'ملاحظات');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'ملاحظات تود استخدامها لنوع الضيف التالي');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'حد اقصى ');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'الحد الاقصى لنوع الضيف المراد استخدامه في نموذج الحجز');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'هل تود ان تكون نسبة مئوية ؟');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'The figure calculated is a percentage of the Base figure calculated for the resource. If this is set to no then the figure you specify is simply added or subtracted from the base resource value.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Add variance?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'The figure calculated is added to or removed from the Base figure calculated for the resource. Set this to No if you want this to be a discount from the base figure. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Variance');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'The amount of the variance');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Modified customer type order');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'تم حذف نوع الضيف ');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'تم إنشاء نوع الضيف');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'تم تحديث نوع الضيف');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'تم تحديث نوع الضيف');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'تظهر الرابط لتوحيد الصفحة قائمة في صفحة تفاصيل المنشأة؟');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'عرض <b>فقط</b> تقويم الإمكانيات؟');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'تبديل هذا إلى نعم لتعطيل عرض رأس الممتلكات والتفاصيل, بحيث توفر فقط التقويم للعرض في قسم تفاصيل المنشأة. فقط المقصود حقا للمستخدمين تأجير الممتلكات واحد وحدة (مثل الشقق, البيوت الخ).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'اقل مدة وصول ومغادرة');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'والحد الأدنى لفي نموذج الحجز بين تاريخ الوصول وتاريخ المغادرة.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'نموذج حجز الوحدات القائمة لعرض رقم الوحدة');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'نموذج حجز الوحدات القائمة لعرض اسم الوحدة');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'نموذج الحجز من قائمة الوحدات لعرض عنوان السعر');
jr_define('_JOMRES_ORDER', 'طلب');
jr_define('_JOMRES_REQUIREDFIELDS', 'مطلوب الزامي');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'الايام قبل الوصول');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'الحد الأدنى لعدد الأيام التي يجب أن ينقضي, من "اليوم", قبل الوصول');
jr_define('_JOMRES_DTV', 'اختلافات نوع التاريخ');
jr_define('_JOMRES_DTV_DOW', 'يوم في الاسبوع');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'النوع الافتراضي لنوع العميل');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'الرقم الافتراضي لأول مرة من نوع الضيف الأول. إذا كنت تستخدم أنواع أعلاه, ثم وهذا هو الرقم الافتراضي الذي سيتم تعيين نوع الضيف الأول في نموذج الحجز ل.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'فقط العملاء المسجلين بامكانهم الحجز ؟');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'عذرا, يجب أن تكون مستخدما مسجلا لحجز عبر الإنترنت. انقر هنا للتسجيل في هذا الموقع.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'لون الخط للرابط الخاص بالحجز الحالي');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'حد نهاية الاسبوع');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'الوحدة محجوزه مسبقاً');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'حجز');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'تقريب الودائع تصل إلى أقرب عدد صحيح؟');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'رسوم الودائع؟');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'حفظ الاسعار بنظام اسبوعي ');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'لديك الخيار لتخزين رسوم التعريفة الجمركية في أي من القيم اليومية أو الأسبوعية. إذا تخزينها والأسبوعية, يجب عليك تعيين هذا الخيار إلى نعم.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'في الأسبوع');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'وصول ثابت يعود تكرار: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'عندما يتم اختيار مواعيد وصول الثابتة, وتواريخ عدد التي يمكن أن تظهر في القائمة المنسدلة التواريخ. لاحظ أن قائمة التواريخ لن تتضمن أي تواريخ إذا كان الحجز غير ممكن بسبب الحجوزات المسبقة, وأن القائمة سوف يكون في الواقع مرتين طالما عدد اخترتها لأنها سيكون لها عدد مماثل من التمور تاريخية (إن وجدت) ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'تاريخ الوصول غير صحيح');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'تاريخ مغادرة غير صحيح');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'الحجز أقصر مما يجب. يجب أن يكون هناك على الأقل هذه الأيام العديدة بين الوصول والمغادرة التواريخ:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'الفترة الخاصة بك والمطلوبة هي ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'نوع الضيف غير صحيح');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'اختر نوع الضيف ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'لديك كثيرة جدا في حزب التعريفات المتاحة');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'كنت قد اخترت أكثر حدة مما لديك ضيوف, انقر على اسم وحدة لإزالته من اختيارك');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'عدد كبير جدا من الضيوف للالأسرة المتاحة');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'انت بحاجة لتختار غرف اضافية ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'إختر نوع الوحدة');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'الإسم الاول مطلوب');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'اللقب الإزامي');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'رقم المنزل مطلوب');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'عنوان الشارع الزامي');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'المدينة مطلوبة ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'المنطقة مطلوبة ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'رمز البريد مطلوب');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'البلد مطلوبة');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'رقم الهاتف الثابت الزامي');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'رقم الجوال الزامي');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'عنوان البريد الزامي');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', '<b>لدينا شواغر متاحة!</b>');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'لا يوجد وحدات مختارة حتى الان');
jr_define('_JOMRES_BOOKING_NUMBER', 'رقم الحجز');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'طيب الكتاب , خلفية مربع الرسالة');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'متغيرات قالب التفريغ؟');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'قم بتعيين هذا لتمكين تفريغ DHTML لمتغيرات القالب لكل ملف قالب FRONTEND أثناء عرض هذه الصفحة. مفيد إذا كنت تريد معرفة ما إذا كان عنصر معين متاحًا للاستخدام في قالب معين.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'يعتبر بالنسبة');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'تعيين هذا إلى نعم إذا كان حساب شخص واحد هو الرقم مئوية. إذا لم فسيتم تطبيقه في شكل مبلغ ثابت.');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'وحدات متوفرة \ باسعار محدودة');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'استخدام هذه المدخلات للحد من عدد من الموارد المتاحة والتعريفات المذكورة في استمارة الحجز. تعيين إلى صفر إذا كنت لا تريد الحد من تمكين.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'لا يوجد شواغر في هذه الفترة');
jr_define('_JOMRES_BOOKITNOW', '');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'وضع التعديل العالمي؟');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'رعاية مع هذه الوظيفة. إن كانت القيمة نعم, ثم وضع التحرير تؤثر على نص مخصص لجميع الشركات في نظام ثابت لتقوم بتحريرها.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'إستخدم العملة العالمية؟');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'تعيين هذا إلى نعم لإجبار جميع العقارات لاستخدام نفس العملة.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'رمز العملة العالمية');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'مكون ملفوف');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'تعيين هذا إلى نعم إذا هو التفاف المكون بحيث حدة ورأس المناطق ليست أن ينظر إليها');
jr_define('_JOMRES_COM_WEEKENDONLY', 'فقط نهاية الأسبوع');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'ايام نهاية الأسبوع');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'تعيين أيام نهاية الأسبوع الخاصة بك. والتعريفات التي تسمح أو عطلة نهاية الأسبوع عدم السماح تأخذ في الاعتبار هذا الإعداد عند إنشاء الوحدات قائمة.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'حدد بلدك قبل إضافة أي معلومات المنشاءة');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'حفظ التغييرات فندقك قبل تحميل صورة الفندق');
jr_define('_JOMRES_TARIFFSFROM', 'إبتداءً من  ');
jr_define('_JOMRES_SEARCH_ALL', 'الجميع');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'البحث بالبلد');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'البحث بالمنطقة');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'البحث بالمدينة');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'مميزات البحث');
jr_define('_JOMRES_SEARCH_BUTTON', 'إبحث');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'أدخل كلمة البحث في المربع واضغط على الزر.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'كلمات البحث: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'من فضلك ادخل وصولك المقصود وتواريخ المغادرة واضغط على الزر لتجد الفنادق التي لديها أماكن الإقامة المتاحة على التواريخ التي اخترتها.');
jr_define('_JOMRES_SEARCH_PTYPES', 'عرض جميع المنشاءات بحسب نوع المنشاءة.');
jr_define('_JOMRES_SEARCH_RTYPES', 'عرض جميع المنشاءات بحسب نوع المنشاءة \ الوحدة');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'الإفتراضي');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'إسم المنشاءة');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'منطقة المنشاءة');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'مدينة المنشاءة');
jr_define('_JOMRES_SORTORDER_STARS', 'عدد النجوم');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'تفاصيل العمل ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'نموذج الحجز');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'تحديث بينات العنوان');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'إعادة مراجعة توافر الوحدات<br/>(الوحدات المختارة سيتم اعادة ضبطها)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'اعادة فحص التوافر');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'تعديل الخيارات الاضافية');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'تغير الوحدات المختارة');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'تحديث بيانات العنوان');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'نأسف العنوان غير صحيح');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'صورة الوحدة');
jr_define('_JOMRES_CURRENCYFORMAT', 'صيغة العملة');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'خيارات البحث');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'سجلات التوافر');
jr_define('JOMRES_COM_A_MESSAGE', 'رسالة');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'عادي');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'متقدم');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'إدارة يومية');
jr_define('JOMRES_COM_A_TARIFFMODE', 'إعدادات وضع الاسعار');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>تحذير: التبديل بين أنواع قد التعريفات المختلفة يؤدي إلى فقدان البيانات. راجع الملاحظة أدناه فيما يتعلق بهذا</b>.
<br/><br/>
لديك ثلاثة خيارات لكيفية تكوين التعريفات الخاصة بك. <br/>
الوضع العادي: سيكون لديك تعريفة واحدة لكل نوع من الموارد التي هي صالحة للسنوات ال 10 المقبلة <br/>
ادارة يومية: يمكنك تعديل الأسعار لكل يوم لكل نوع المورد / الأعمال. <br/>
المتقدمة: إن \ 'القديمة \' &#8203;&#8203;طريقة Jomres إدارة الاسعار. <br/>
<br/>
وسائط مختلفة الجمركية تسمح لك لاختيار طريقة تكوين التعريفات الذي يناسبك. <br/>
الوضع العادي هو الأكثر تبسيطية لكنه أسهل للفهم لأنه سيعبر الموارد المرجعية والتعريفات لموارد / أنواع الأعمال ويسمح لك لتكوين الموارد والأسعار على نفس الصفحة. <br/>
إدارة الدقيقة يسمح لك تختلف معدلات على أساس يومي دون الحاجة لإدارة رزمة من الرسوم الجمركية, ويتم ذلك من قبل الصليب الكثير من التعريفات المختلفة الرجوع مع بعضها البعض. هذه النتائج في عدد من التعريفات التي خلق لكم تغطي فترة من الوقت, ولكنك لا تستطيع التعريفات طبقة فوق بعضها البعض. <br/>
الوضع المتقدم يتيح لك إنشاء مورد وربطه مع نوع مورد. إنشاء ثم الجمركية والربط بين ذلك مع نوع الموارد. باستخدام هذه الطريقة أنه من الممكن أن 
\ 'طبقة \' التعريفات فوق بعضها البعض, على سبيل المثال نوع مورد \ 'سرير مزدوج \' يمكن أن يكون لها تعريفة واحدة لوجبة الإفطار, وآخر لتناول وجبة السرير, الإفطار والمساء. طريقة متقدمة تتطلب اهتماما أكثر قليلا بالتفاصيل لأنه من الممكن لاكتشاف المنتسبين مورد أو التعريفات من نوع مورد / الأعمال التجارية, أو لصالح تعيين بشكل غير صحيح من وإلى التواريخ, ولكنه يوفر لك خيارات التكوين التي وسائط أخرى لا تقدم. <br/>
<br/>
لأن وسائط عادي وتتطلب التركيز على التفاصيل المحددة إعداد الموارد والتعريفات الجمركية للوضع في العمل النظام قد تحتاج لإعادة بعض البيانات لجعل تكوينات التعريفة الحالية متوافقة مع وضع تعريفة التحرير الحالية. <br/>
<br/>
عادي -> خيارات متقدمة. لا تغيير. يتم الاحتفاظ التعريفات القائمة. <br/>
عادي -> ادارة يومية. تتم إزالة كافة التعريفات الموجودة. <br/>
متقدمة -> عادي. تتم إزالة كافة التعريفات الموجودة. <br/>
متقدمة -> ادارة يومية. تتم إزالة كافة التعريفات الموجودة. <br/>
ادارة يومية -> خيارات متقدمة. تتم إزالة كافة المراجع عبر القائمة بين التعريفات, ولكن <br/> الرسوم ستبقى نفسها.
ادارة يومية -> عادي. تتم إزالة كافة المراجع عبر القائمة والتعريفات. <br/><br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'تظهر الوحدات قائمة في صفحة تفاصيل الفنادق؟');
jr_define('JOMRES_PROPERTYTYPE', 'نوع المنشاءه');
jr_define('JOMRES_MAXPEOPLEINROOM', 'اقصى عدد اشخاص بالوحدة');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'اقصى عدد اشخاص في الحجز ');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'إضافة ملاحظه');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'تحرير ملاحظه');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'حذف ملاحظه');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'عرض الملاحظات');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'تم إضافة ملاحظه جديدة');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'تم تحرير ملاحظه');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'تم حذف الملاحظه');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'قائمة حجوزاتي');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'حجوزاتي');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'عرض الحجز');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'عرض المفضله');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'لم تقم بإضافه اي مفضله بعد');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'نوع المنشاءه');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'الاسعار المعقولة');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'فعال');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'هذا البرنامج المساعد يسمح لك لتمكين وتكوين أسعار الوحدات الخاصة بك بشكل حيوي.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'وسوف يعتمد حساب أسعار الوحدات معظم الفنادق على عدد من وحدات من نوع المطلوبة التي تتوفر على تاريخ معين. وهذا يسمح لهم لتقديم خصومات على نوع الوحدة ر يسن أن الفندق  مشغول خلال فترة معينة بهدف جذب الفندق التي قد خلاف ذلك ينبغي تفويتها. <br/> إذا تمكين وتكوين هذا البرنامج المساعد يسمح لك عرض أسعار قابلة للتعديل بناء على عدد الوحدات من نوع المختارة هي متاح في الفندق في يوم معين. <br/> عتبة يوما يعرف عدد الأيام التي وصولها يجب أن يكون ضمن قبل تعديل أسعار الوحدة هذه الميزة, ثم النسب المئوية تسمح لك خيارات لتكوين نسبة الوحدات التي يمكن أن تكون متاحة قبل تطبيق خصم معين. ملاحظة ومع ذلك, إذا تم حجز وحدات متعددة ثم تطبيقها على المستوى الحالي للخصم على جميع الوحدات ولن تخفض ويتم اختيار أكثر حدة.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'بدايه (عدد الايام بين تاريخ الوصول والمغادرة)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'نبة الوحدات المشغولة  10% او اقل');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'نسبة الوحدات المشغولة 25% او اقل');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'نسبة الوحدات المشغولة 50% او اقل');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'نسبة الوحدات المشغولة 75% او اقل');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'الخصم %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' تم تخفيضها من  ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' الى ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' السعر المعقول لا ينطبق  ');
jr_define('JOMRES_COM_A_MAPSKEY', 'مفتاح API خرائط قوقل');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'يمكنك الحصول على مفتاح API لخرائط جوجل من <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. بمجرد إدخال مفتاح الخريطة هنا , سيعرض جومريس الخريطة في صفحة تفاصيل العمل الخاصة بك.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'آخر فرصة');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'فعال؟');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'إضبط هذه بنعم في حال اردت استخدام اخر فرصة ');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'البداية');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'إذا تم إجراء الحجز وتاريخ الوصول هو فقط وأيام من تاريخ الحجز, ومن ثم يمكن تطبيق الخصم');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'الخصم');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'بالنسبة المئوية');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'تم اعتماد تطبيق الخصم لهذا الحجز');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'تم تخفيض قيمة الإقامة بواسطة');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', ' ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% الخصم إذا كنت الحجز قبل وصول ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. احجز الآن لتحقيق الاستفادة القصوى من هذا العرض!');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '% أو قد تكون متاحة أكثر الخصم إذا كان التاريخ هو الوصول قبل ');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'معلومات السعر');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'تعيين هذا إلى نعم لاظهار مزيد من المعلومات التفصيلية التعريفات في الفندق تفاصيل التعريفية المنبثقة');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'تصغير خيارات تكوين الاعدادات');
jr_define('_JOMCOMP_AMEND', 'تعديل الحجز');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'إختر منشائه');
jr_define('_JOMCOMP_AMEND_HEADER', 'العقد الأصلي:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'الدفعه المقدمة');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'لم يتم دفع الدفعه المقدمة');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'الإجمالي');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'إجمالي الدفعه المطلوبة');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'الغاء');
jr_define('_JRPORTAL_CPANEL', 'لوحة التحكم');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'قيمة العمولة الإفتراضيه');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'اختيار سعر العمولة الافتراضية التي سيتم تطبيقها على فنادق في حالة عدم تعيين آخر سعر العمولة غير ذلك.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'قائمة قيمة العمولات');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'قيمة العمولة');
jr_define('_JRPORTAL_CRATE_TITLE', 'العنوان');
jr_define('_JRPORTAL_CRATE_TYPE', 'النوع');
jr_define('_JRPORTAL_CRATE_VALUE', 'قيمة العمولة');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'رمز العملة');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'قائمة المنشائات');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'اسم المنشأه');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'عنوان المنشأه');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'الفنادق التي لون الخلفية باللون الأحمر لم تتح حتى الآن بنسبة العمولة يطبق عليهم.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'الإحصائيات');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'قيمة العمولة');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'قائمة الحجوزات');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'رقم المنشاءه');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'رقم الفاتورة');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'اجمالي الحجز');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'تاريخ الأرشفه ');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'التفاصيل');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have business type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this business type so resources become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'لا يمكنك حذف هذا الفندق كما هو الفندق الوحيد الذي لديك حق الوصول على. إذا كنت ترغب في تعطيله, يرجى استخدام ميزة إلغاء نشر في شريط الأدوات. ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'إجمالي قيمة الحجز');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'ليالي في ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'للوحدة ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'إجمالي الخدمات (شامل الضرائب)');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'ملخص التكلفة الاجمالية ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'الرجاء قراءة والموافقة على  ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'ويرد موجز الحجز أدناه. <br /> لإجراء أية تغييرات, يرجى النقر على زر تعديل الحجز. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'إذا كنت بحاجة إلى تغيير أي من المعلومات المذكورة أعلاه ثم الرجاء انقر هنا');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'تعديل الحجز');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'يرجى إدخال أي طلبات خاصة في المربع أدناه.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'أؤكد أن المعلومات الواردة أعلاه صحيحة وأوافق عليا ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'لليلة ');
if (!defined('_PN_OF')) {
	jr_define('_PN_OF', 'من ');
}
if (!defined('_PN_START')) {
	jr_define('_PN_START', 'البداية');
}
if (!defined('_PN_PREVIOUS')) {
	jr_define('_PN_PREVIOUS', 'السابق');
}
if (!defined('_PN_NEXT')) {
	jr_define('_PN_NEXT', 'التالي');
}
if (!defined('_PN_END')) {
	jr_define('_PN_END', 'النهاية');
}
if (!defined('_PN_RESULTS')) {
	jr_define('_PN_RESULTS', 'النتائج');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'من فضلك ادخل الرسالة التي ترغب في إرسالها إلى');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'إتصل بمسئول المنشاءة');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'نموذج التواصل مع المنشاءة ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'نشكر لكم تواصلكم معنا تم ارسال الرسالة الخاصة بكم لمسئول المنشاءه وارسال نسخة لبريدكم الخاص سيتم الرد عليكم قريبا');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' بخصوص ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'استعلام');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'الرجاء اختيار الإقامة المطلوبة من القائمة أدناه عن طريق النقر على الوحدة.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'ادنى عدد وحدات تم اختيارها');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'الحد الأدنى لعدد الوحدات محددة مسبقا في الحجز قبل أن يتم عرض التعريفات / وحدة التحرير والسرد نوع. يسمح لك أن التعريفات المخفضة عند تحديد الوحدات بالفعل أكثر من و.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'اقصى عدد وحدات تم اختيارة');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'لم يعد عرضت الحد الأقصى لعدد الوحدات محددة مسبقا في الحجز قبل التعريفات / الموارد التحرير والسرد. يسمح لك لوقف تقدم هذه الوحدة نوع / التعريفات الجمع مرة واحدة وقد تم اختيار والوحدات في استمارة الحجز.');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'لاحظ أنه لن يكمل تعيين شخص واحد هنا أن تستخدم إذا تم تعيين شخص واحد علىملاحق نعم في تكوين العام. الإعدادات هنا هي بديل إلى وجود معدلات شقة Suppliements شخص واحد, وليس إضافة إلى SPS بسعر موحد.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'متاحة');
jr_define('_JOMRES_AVLCAL_QUARTER', 'بعض الحجوزات');
jr_define('_JOMRES_AVLCAL_HALF', 'نصف  الامكانيات');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'محجوز شبة كامل');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'محجوز كاملا');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'بالاسبوع');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'باليوم');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'بالحجز');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'بالشخص بالحجز');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'بالشخص في اليوم');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'بالشخص في الاسبوع');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'بالايام (اقل مدة اقامة)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'بالايام في نوع الوحدة المختارة');
jr_define('_JOMRES_REGISTRYREBUILD', 'إعادة بناء البسيطة المكون التسجيل');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'عادة يتم إعادة التسجيل Jomres المساعد تلقائيا كلما قمت بعرض مدير البرنامج المساعد وإضافة أو إزالة البرنامج المساعد, ومع ذلك فإنه من الممكن أنه لا يمكنك استخدام هذه الميزات لسبب ما, لذا يمكنك استخدام هذه الدالة لإعادة بناء السجل يدويا. إذا كان لديك الوصول إلى مدير البرنامج المساعد وتتميز ترقيات ثم انه من غير المحتمل أنك سوف تحتاج لاستخدام هذه الوظيفة. سوف تحتاج إلى إعادة بناء السجل المساعد كلما قمت بإضافة مكون جديد ميني ولم تستخدم مدير البرنامج المساعد لإضافته.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'تم اعادة بناء مكون التسجيل بنجاح');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'كان هناك خطأ مع إعادة بناء قلم icomponents دقيقة. يجب عليك التحقق من السجل الخاص بك خطأ Jomres لمعرفة إذا كان هناك سجل ما تسبب في الخطأ.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'البحث بالسعر');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'لم تقم بعمل اي حجز حتى الان');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'تحرير نوع المنشاءه');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'اختر نوع منشاءتك');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'استفسارك...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'حد قائمة الأعمال');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'عدد الشركات المراد عرضها على الصفحة بعد البحث');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'خاصية البحث المتكاملة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'تتيح ميزة البحث المتكامل Jomres للمستخدمين البحث في أعمال Jomres وفقًا لمجموعة من الوظائف. إذا كنت قد استخدمت بالفعل ميزات البحث في Jomres في Joomla , فستكون على دراية بهذه الإعدادات. <br/> تتيح لنا هذه الميزة تقديم معالجة البحث داخل Jomres لأولئك المستخدمين الذين لا يرغبون في استخدام وحدات بحث Joomla , أو لمستخدمي CMS الآخرين الذين لا يمتلكون CMS وحدات بحث Jomres الخاصة به. <br/> فقط تذكر أنه إذا اخترت البحث عن شيء ما عبر رابط (أي ليس قائمة منسدلة) , فإن خيارات البحث الأخرى لن يتم تطبيقه , فقط العنصر الذي يتوافق مع الارتباط الذي نقرت عليه. <br/> لاحظ أنه افتراضيًا , فإن تخطيط هذا البحث المتكامل ليس جميلًا جدًا. وذلك لأن ملف القالب الذي يقوم بالتخطيط يجب أن يتضمن جميع الخيارات الممكنة , وبعضها غير متوافق.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'تفعيل هذه الميزة؟');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'إذا تم تمكين هذه الميزة , فإن أي مكالمة إلى Jomres تعرض قائمة الأعمال ستعني أن خيارات البحث معروضة أيضًا.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'استخدام الاعمدة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'سيظهر أي خيار البحث الذي قمت تعرف بأنها نوع الارتباط (حيث ذات الصلة) كأعمدة (IE ر ضعت على نهاية الرابط)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'البحث حدد المنطقة من خلال التحرير والسرد المنسدلة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "قدم قائمة بحث منسدلة للتصفية من خلال البلدان / المناطق / البلدات. إذا كنت ستستخدم هذه الميزة , فمن الأفضل لك عدم استخدام عمليات البحث في المنطقة / المدينة أدناه.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'البحث بواسطة إسم المنشاءة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'البحث بواسطة ادخال اسم المنشاءه');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'عرض كقائمة منسدلة؟');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'تعيين هذا بلا لعرض قائمة كروابط');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'بحث بواسط المنطقة او المدينة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'بحث بواسطو المدينة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'عرض كقائمة منسدلة؟');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'تعيين هذا بلا لعرض قائمة كروابط');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'بحث بواسطة نوع المنشاءه');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'عرض البحث بواسطة نوع المنشاءة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'عرض كقائمة منسدلة؟');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'تعيين هذا بلا لعرض قائمة كروابط');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'بحث من خلال نوع الوحدة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'عرض نوع الوحدة الدخلة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'عرض كقائمة منسدلة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'تعيين هذا بلا لعرض قائمة كروابط');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'بحث من خلال المزايا');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'عرض من خلال المزيا المدخلة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'عرض كقائمة منسدلة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'تعيين هذا إلى لا لتظهر القائمة كما تلميح أداة الصور ومربعات');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'بحث بوسطة التفاصيل');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'عرض تفاصيل المدخلة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'البحث من خلال الامكانيات');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'إظهار البحث عن طريق إدخال توافر');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'بحث بواسطة نطاق الاسعار');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'عرض البحث بنطاق الاسعار المدخلة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'زيادة مجموعة الاسعار');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'سوف ننظر في Jomres كافة القيم في التعريفات ثم العمل سلسلة من يتراوح سعر استنادا إلى زيادات القيمة التي تحدد هنا.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'افتراضيا, إذا لم يتم تحديد فندق في Jomres سوف إجراء بحث. إذا لم ينشأ هذا البحث من قبل وحدة البحث بعد ذلك سوف تسفر عن نتائج هذا البحث العشوائي (عمدا). هذا الخيار يسمح لك للحد من عدد العائدين في هذا البحث عشوائي.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'إعدادات وسجلات مهمة كرون');
jr_define('_JOMRES_COM_A_CRON_DESC', 'معلومات مهمة Pseudocron. مطلوب وظيفة pseudocron عن طريق الفواتير ومعالجة العمولات.معلومات مهمة Pseudocron. مطلوب وظيفة pseudocron عن طريق الفواتير ومعالجة العمولات.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'تثبيت المكونات الصغيرة كرون. لتشغيل وظيفة cron الفردية , استخدم الروابط المحددة أدناه. لاحظ أن مهام cron لا تنتج أي مخرجات , لذا لن ترى أي معلومات على الصفحة. بدلاً من ذلك , ارجع إلى سجل الوظائف أدناه.');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'طريقة');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'إذا لم يكن لديك حق الوصول إلى وظائف cron , فاضبط هذا على Minicomponent , وإلا قم بإنشاء وظيفة cron وأخبرها بالتشغيل<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'عرض تسجيل الدخول في المتصفح');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Only works if the method is set to Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging enabled');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Set this to Yes for logging to be enabled. The results of the logs will be output below.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots of logging output');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'تحرير القالب');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'الحقول الاختيارية');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'هنا يمكنك تعريف الحقول المخصصة البسيطة التي سيظهر في شكل الحجز.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'اسم الحقل (من غير مسافات)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'القيمة الافتراضية');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'تفاصيل');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'مطلبو');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'الكمية الاعلى');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'إذا تم تعيين الحد الأقصى لكمية أكبر من 1 وبعد ذلك سيتم تقديم للضيوف المنسدلة لاختيار كمية من الكماليات التي يحتاجون إليها.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'قيمة الضريبة');
jr_define('_JRPORTAL_TAXRATES_CODE', 'رمز الضريبة');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'تفاصيل السعر');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'لا تستطيع حذف الضريبة');
jr_define('_JRPORTAL_TAXRATES_RATE', 'السعر');
jr_define('_JRPORTAL_INVOICES_TITLE', 'الفواتير');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'غير مدفوعة');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'مدفوعة');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'ملغي');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'معلق');
jr_define('_JRPORTAL_INVOICES_USER', 'المستخدم');
jr_define('_JRPORTAL_INVOICES_STATUS', 'الحالة');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Raised');
jr_define('_JRPORTAL_INVOICES_DUE', 'المستحق');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'اشتراك');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'الإجمالي المستحق');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'الترددات المكرره');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'يوم التكرار في الشهر');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'رمز العملة');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'خط الصنف');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'الإسم');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'تفاصيل');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'السعر المبدئي');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'الكمية المبدئية');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'الخصم المبدئي');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'الإجمالي المبدئي');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'رمز الضريبة');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'تفاصيل الضريبة');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'سعر الضريبة');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'تجاوز مستوى إعدادات العبارة Jomres؟');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'عرض الفواتير');
jr_define('_JRPORTAL_COUPONS_TITLE', 'كوبون الخصم');
jr_define('_JRPORTAL_COUPONS_DESC', 'يمكن أن تتولد رموز الخصم ومرت على الضيوف كحافز لجعل الحجوزات. صالحة من التواريخ وللإشارة إلى التواريخ التي يمكن إجراء الحجوزات على, وليس مواعيد الحجز نفسه.');
jr_define('_JRPORTAL_COUPONS_CODE', 'رمز كوبون الخصم');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'صالح من ');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'صالح لغاية');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'مبلغ الخصم');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'الخصم سيكون نسبة مئوية');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'الوحدات فقط');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'اذا كان لديكم رمز الكوبون نرجو ادخاله في المربع الخاص لحفظ الكوبون مقابل الحجز الخاص بكم');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'حفظ الكوبون');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'تم حفظ كوبون الحجز');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'لم يتم ايجاد كود الكوبون');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'قيمة كوبون التخفيض');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'حجز مخفض. رمز الكوبوبن/قيمة التخفيض/إعدادات الكوبون : ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'اختار اللغات');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'اختيار خيارات اللغة لعرضها في التبديل اللغة المنسدلة.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'عرض خيارات اللغة كقائمة منسدلة');
jr_define('_JRPORTAL_NEWUSER_DEAR', "عزيزي \ عزيزتي");
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'شكرا لتسجيلكم  ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'اسم المستخدم الخاص بكم: ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'الرقم السري الخاص بكم: ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'الرجاء تسجيل الدخول لعرض الحجوزات الخاصة بكم ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'تم حفظ الكوبون');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'تم حذف الكوبون');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres سكربت -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'اسم المستخدم');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'الرقم السري');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API رمز');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'رقم جوال الإشعارات');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', 'الرجاء استخدام رمز البلد تنسيق, رقم الجوال. على سبيل المثال فإن مقرها المملكة المتحدة رقم الجوال 966509793074 يكون شيء من هذا القبيل. ترك هذا فارغا إذا كنت لا تريد أي إشعارات بالبريد الإلكتروني المرسلة إلى الهاتف المحمول الخاص بك.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>من الواضح أنه لا يمكنك استخدام / اختبار هذه البوابة من المضيف المحلي , ستحتاج إلى القيام بذلك على خادم مباشر.</b>
<br/>
<br/>
من اجل استخدام العبارة Clickatell كنت في حاجة الى حساب Clickatell واحد على الأقل اتصال مسجلة (API الفرعي المنتج المثال) بين طلبك وبوابتنا. كل اتصال
ومن المعروف طريقة كمنتج فرعي. هيريس كيف: <BR/>
<BR/>
<B> الخطوة 1 - التسجيل للحصول على حساب Clickatell </B> <BR/>
إذا لم يكن لديك بالفعل حساب Clickatell, تحتاج للتسجيل في واحد كما في أدناه. إلا المضي قدما إلى الخطوة 2. <BR/>
* الذهاب إلى http://www.clickatell.com/products/sms_gateway.php, واختيار المناسب subproduct API (طريقة الاتصال) التي ترغب في استخدامها (Clickatell الوسطى (API)) <br/> إذا
* اضغط على الوصلة الإلكترونية التسجيل. <BR/>
* املأ استمارة التسجيل. <BR/>
وبعد تقديم النموذج بنجاح تلقائيا يتم تسجيل الدخول إلى حسابك الجديد واقتيد إلى صفحة حيث يمكنك إضافة اتصال API الذي تم اختياره. <BR/>
<b> الخطوة 2 - إضافة اتصال API مسجلة (شبه المنتج) </b> </br>
إذا كنت لا بتسجيل الدخول بالفعل إلى حسابك, ثم يجب عليك أن تفعل ذلك في http://www.clickatell.com/login.php <BR/>
* اختر \ إدارة منتجاتي \ من القائمة العلوية. <BR/>
* حدد نوع الاتصال API التي ترغب في استخدامها (HTTP API) من القائمة المنسدلة (إضافة اتصال). <BR/>
* أكمل النموذج. تأكد من إدخال IP مؤمن (للIP لهذا الملقم), تعيين رد الاتصال HTTP إلى آخر. فسوف تحتاج إلى تعيين رد الاتصال IP ل. get_showtime (live_site) / أنشئ حسابا؟ الخيار = com_jomres ومهمة = sms_clickatell_callback ورقم العضوية وكلمة المرور. <BR/>
إذا قمت بتسجيل أكثر من اتصال API, يجب أن تقوم بإدخال اسم وصف لكل تكون فريدة من نوعها - لا يمكن أن يكون واجهات برمجة التطبيقات متعددة بنفس الاسم <BR/>.
بعد تقديم النموذج بنجاح, سيتم عرض تفاصيل المصادقة الخاصة بك, بما في ذلك كل ID API اتصالات فريدة من نوعها (api_id). ويلزم المصادقة هذه التفاصيل عند الاتصال إلى العبارة Clickatell لإرسال رسالة. <BR/>
<BR/>
استخدام الخاص رقم العضوية وكلمة السر وapi_id لملء الحقول أعلاه. <BR/>
<BR/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'قائمة غرفة الحجز تظهر شكل وصول ذوي الاحتياجات الخاصة');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'حجز غرفة شكل قائمة عرض عدد الأشخاص كحد أقصى');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'يرجى ملاحظة أن أسعار الغرف المذكورة هي تقديرات ولن الثمن الكامل للحجز يمكن حساب حتى تقوم بإضافة غرفة أو غرف لاختيارك.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'حز الاشتراك');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'الإسم');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'التفاصيل');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'منشور');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'كامل القيمة');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'حد الوحدات');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'اشتراك');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'استخدام وظائف معالجة الاشتراك');
jr_define('_JOMRES_COM_NEWUSER', 'إنشاء مستخدم جديد في الحجز');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'إنشاء حساب مستخدم جديد في الحجز مستخدم غير مسجل. (Joomla فقط)');
jr_define('_JOMRES_CLICKTOREGISTER', 'انقر هنا للتسجيل فندقك');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'شكرا لحجزكم معنا - تابع تسجيل تفاصيل المستخدم الخاص بكم');
jr_define('_JOMRES_LATLONG_DESC', 'استخدام الماوس الخاص بك إلى التحرك في جميع أنحاء الخريطة, واسحب المؤشر إلى موقع الفندق لتعيين خطوط الطول والعرض.');
jr_define('_JOMRES_CONTROLPANEL', 'لوحة التحكم');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'عرض الفاتورة');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'عرض الفواتير');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'إضف منشائتك معنا');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'تحذير : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'ناسف ولكن لم يتم التعرف على معرف الحزمة');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'ناسف تم اشتراكك مسبقاً');
jr_define('_JOMRES_COM_YOURBUSINESS', 'بيانات منشائتك');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'اسم منشائتك');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'VAT number');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'رقم المبنى');
jr_define('_JOMRES_INVOICE_NUMBER', 'رقم الفاتورة ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'حدد التواريخ التي تريد تطبيق الحجز الأسود. عند تحديد مواعيد مناسبة, انقر فوق الزر تطبيق لإعادة تحقيق توافر.<br/> 
<br/> 
إذا كان الفندق لديه واحد أو أكثر عبر عن الفترة المحددة, ثم فلن تكون قادرا على حجز بها حتى يتم إلغاء حجوزات أخرى / عبر سوداء, / حجزت.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'عذرا, لا يمكنك حجز هذا الفندق في هذه التواريخ.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'يمكنك حجز هذا الفندق في هذه التواريخ.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'تم تكوين فندقك لتوجيه الاتهام للشخص الواحد في الليلة ولكن لم يكن لديك أي نوع من أنواع الضيف خلق أو نشرها, يرجى إنشاء ونشر واحد أو أكثر أنواع زائر.');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'لم يكن لديك أي تكوين التعريفات بعد, فإنك لن تكون قادرة اتخاذ أي حجوزات لفندقك.');
jr_define('_JOMRES_EDITINGMODE_ON', 'نمط التحرير مفعل');
jr_define('_JOMRES_EDITINGMODE_OFF', 'نمط التحرير غير مفعل');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'الدفعات المقدمة متغيرة ؟');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'الودائع متغير تسمح لك لتحديد إذا لو كنت تريد لشحن كامل المبلغ إذا كان التاريخ هو الوصول عبر داخل وأيام اعتبارا من اليوم. تعيين هذا الخيار إلى نعم لتمكين هذه الميزة, وأدخل عدد الأيام التي كانت أقل, لذلك على سبيل المثال إذا كان اليوم هو الوصول في غضون 60 يوما, ثم إيداع المبلغ اتهم سيكون كامل المبلغ, وإلا أن يستند المبلغ على الوديعة خيارات تهيئتها أعلاه.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'عدد الأيام, والتي ستحمل في كامل المبلغ كعربون.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'تم إرسال رسالة تأكيد بالبريد الإلكتروني. قد تقوم بإغلاق هذه النافذة الآن.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'اتصال بالوكيل');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'قم بتحديد الفاتورة كمدفوعة');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'تم تعليم الفاتورة كمدفوعة');
jr_define('_JOMRES_APIKEY_REMAKE', 'Make new API key');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'هل هذه تثبيث منشاءه واحدة؟');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'إذا تم تعيين هذا الخيار إلى نعم, ثم يتم تبسيطها إلى حد كبير من وجهة النظر الواجهة الأمامية لJomres غير مصرح المستخدمين. الافتراضي يدعو إلى Jomres من خيار القائمة, بدلا من أن يحصل على قائمة الفنادق, ويأخذ فقط للضيف لنموذج الحجز للفندق الأول في النظام. مديري الفنادق أيضا لن ترى معاينة تفاصيل الفندق زر أو زر إضافة فندق جديد. مثالية إذا كنت تريد فقط إلى قائمة فندق واحد واتخاذ الحجوزات لذلك.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'رصيد المدفوعات');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'لاحظ أنك تستخدم وضع التحرير مع تمكين وضع التحرير العام. هذا جيد إذا فهمت ما يعنيه وضع التحرير العام , ولكن إذا لم تكن قد تسبب لك مشاكل. إذا لم تكن متأكدًا مما إذا كان يجب عليك استخدام Jomres بهذه الطريقة , فيرجى الاطلاع على <a href="https://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> لمزيد من المعلومات حول هذا الموضوع.');
jr_define('_JOMRES_SUPPORTKEY', 'مفتاح الدعم');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'مفتاح الترخيص الخاص بك رقم الدعم (المعروف أيضا باسم رقم الترخيص الخاص بك). سوف تحتاج إلى ترخيص ما يصل إلى تاريخ لتكون قادرة على تحميل المحمول لJomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'خصم شخصي');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'حد تسجيل الفندق لبلد واحد');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'يمكنك التأكد من أن تقتصر التسجيلات الفندق لدولة واحدة فقط عن طريق تحديد هذا الخيار إلى نعم ووضع البلد في الخيار التالي.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'الفندق يقع في هذه البلد : ');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery قالب');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'اختر قالب a jquery لاستخدامة في علامة التبويب ');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'نعتذر, ولكن هذا الفندق ليست متاحة حاليا.');
jr_define('_JOMRES_REVIEWS', 'التقييم');
jr_define('_JOMRES_REVIEWS_TITLE', 'موضوع التقييم');
jr_define('_JOMRES_REVIEWS_DATE', 'تم النشر في');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'لايوجد تقييم لهذه المنشاءه حالياً');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'هل تود ان تكون اول من يقوم بتقييم هذه المنشاءه');
jr_define('_JOMRES_REVIEWS_IAGREE', 'انا مع هذا التقييم');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'انا ضد هذا التقييم');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'متوسط النقاط: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'اجمالي الاصوات:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'اضف تقييم جديد');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'تحتاج لتسجيل للقيام بالتقييم');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'اخبرنا عن رايك في هذه المنشاءه : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'هذا المقييم اخبرنا بـ : ');
jr_define('_JOMRES_REVIEWS_PROS', 'الإيجابيات: ');
jr_define('_JOMRES_REVIEWS_CONS', 'السلبيات : ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'قدم في : ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'قمت بتقييم هذه المنشاءه مسبقا لا يمكن تقييمها مره اخرى');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'نأسف غير مسموح لك بالتقييم في هذا الموقع');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'إضغط لعرض التقييم');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' الزوار يوافقون على هذا التقييم ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' الزوار الغير موافقون مع هذا التقييم');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' الضيف موافق على هذا التقييم ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'الضيف غير موافق على هذا التقييم');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'أشكركم على مشاركة رايكم في هذا التقييم');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'شكرا لك ولكن بالفعل قمت مسبقا بالتقييم ');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'الرجاء التأكد بتعبئة جميع الحقول');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'يرجى تلخيص رأيك عن طريق إدخال عنوان');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'الرجاء ادخال تقييم كامل داخل الحقل الخاص بالوصف');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'من فضلك ادخل العناصر الجيدة من تجربتك من كونه ضيفا في هذا الفندق');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'يرجى إدخال أي أفكار سلبية قد تكون لديكم من خبرتكم');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'يرجى تقييم الضيافة التي تلقيتها من الموظفين');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'يرجى تقييم رأيك في الفنادق');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'يرجى تقديم رأيك في نظافة الفندق');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'يرجى تقييم أماكن الإقامة. أنها مريحة أم لا');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'يرجى تقديم رأيك في ما إذا كان من القيمة مقابل المال');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'يرجى تقييم الخدمات');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'ملخص التقييم');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'تجربتك في مزيد من التفاصيل');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'شكرا لتقديم رأيك.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'شكرا لتقديم رأيك. وسيتم نشره قريبا من قبل أحد المشرفين لدينا.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'استخدام خاصية جومرز للتقييم');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'نشر التقييم بشكل تلقائي؟');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'إذا قمت بتعيين هذا إلى لا سوف تحتاج إلى نشر يدويا للتقييم');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'ضبط التقييم للوضع التجريبي');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'عادة يمكن لمديري الفندق غير مراجعة الفنادق. مع تمكين وضع التجريبي, فإنها يمكن. بطبيعة الحال هذا ليس وضعا مثاليا في بيئة الإنتاج.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'هذه هي قائمة من جميع الشركات. لمشاهدة استعراض الفنادق وانقر على أن الفنادق. من هناك سوف تكون قادرة على نشر أو حذف المشاركة.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'عدد التقييم الغير منشور');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'اجمالي عدد المقييمين');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'نشر | عدم نشر التقييم');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'حذف التقييم');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'تبليغ عن تقييم');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'تبليغ عن تقييم');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'الرجاء ادخال البلاغ');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'نرى شيئا في هذا الاستعراض الذي هو مرغوب أو غير دقيقة؟ الإبلاغ عن ذلك, ونحن سوف ننظر في ذلك لك.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'ارسل');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'التبليغ ارسل بواسطة ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'وتنشر التقارير من قبل المستخدمين الذين قد يختلفون مع مضمون الاستعراض. الطريقة الوحيدة لإزالة التقرير هو حذف الاستعراض.');
jr_define('_JOMRES_REVIEWS_RATING', 'Ratings (1 = ردئ 10 = ممتاز) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'الضيافة  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'الوقع ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'النظافة');
jr_define('_JOMRES_REVIEWS_RATING_4', 'مكان الإقامة ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'القيمة مقابل المال ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'الخدمات ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'تم التقييم بواسطة : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'حجب التقييم');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'عرض نموذج الحجز في صفحة تفاصيل المنشاءه');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'قم بتعيناها بنعم لعرض النموذج في صفحة المنشاءه اذا قمت بتعينها بلا سيتم عرض رابط في صفحة المنشاءه عوضا عن ذلك');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'السعر الإجمالي');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'اذا كانت الاسعار المدلة في النظام تشمل الضرائب  اختر نعم وفي حال كان السعر الصافي اختر لا');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'ضرائب الخدمات:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'الحقل الخاص بيوم الاسبوع يسمح لك بضبط السعر لليوم قم بضغط على يوم الاسبوع سيتم ضبط جميع الحقول باليوم بنفس السعر');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'محدد التاريخ يسمح لك تحديد السعر لفترة معينة اختر تاريخ البدء والانتهاء وقم بادخال السعر وقم بالضغط على زر ضبط السعر');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'بداية الفترة');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'نهاية الفترة');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'السعر');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'ضبط السعر ');
jr_define('_JOMRES_PARTNERS_TITLE', 'المشاركين');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'الوحدات ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'الضيوف ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'هذه الطريقة التي نحن تعيين أعداد النزلاء لغرفهم. إذا كنت ترغب في تغيير هذا التخصيص, وسوف تحتاج إلى الاتصال بالفندق بعد إجراء الحجز. قد يتم تطبيق رسوم إضافية إذا قمت بتغيير المهام الخاصة بك.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'لاحظ ان فندقك لم يتم نشره بعد , فقط يمكنك روئية الفندق زوار الموقع لن يتمكنو من مشاهدة الفندق');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'الترتيب الافتراضي لنتائج البحث');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'تغيير هذا الخيار لتغيير الترتيب الذي يتم عرض نتائج البحث بشكل افتراضي.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'عرض نتائج البحث كقائمة منسدلة');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'شكل قائمة الغرف');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'في نموذج الحجز, وذلك باستخدام "الكلاسيكية" نمط قائمة القنوات التي تقدمها الغرف الفردية للضيوف. مع غرفة عرض نوع, زوار اختيار عدد من غرف X نوع (مثل 2 × الزوجي) بدلا');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'كلاسيك');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'انواع الوحدات');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'يوم بداية التقويم مثلا السبت او الاثنين');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'فقط ضيوف الفنادق بامكانهم التقييم');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'قم بضبطها بنعم في حال كنت ترغب بان يكون الزوار الفعلين للفندق بامكانهم التقييم فقط');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'للوحدة');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'عدد الضيوف للوحدة: ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'عدد الضيوف للحجز : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'عدد الوحدات');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'ياناير');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'فبراير');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'مارس');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'ابريل');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'مايو');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'يونيو');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'يوليو');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'اغسطس');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'سبتمبر');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'اكتوبر');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'نوفمبر');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'ديسمبر');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'تعيين هذا إلى نعم للحد من عدد من الخيارات المتاحة لمديري الفنادق في المقطع تكوين العامة. هذا مفيد إذا كنت لا تريد مديري الفنادق للعب مع حولها إعدادات كثيرة جدا, يمكنك تحرير بدلا jomres_config.php لتحديد خيارات الفندق الافتراضي.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'الرجاء تحديد خيار الحجز');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'عرض كامل الشاشة');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'عرض عادي');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'خصم الشركاء ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'بحث مستخدم');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'أدخل بعض الأحرف للبحث عن مستخدم.<br/> عند تحديد المستخدم سوف تضاف تلقائيا لهم كشريك وسوف يتم نقلك إلى الصفحة التالية حيث يمكنك تعيين الفنادق والخصومات للمستخدم.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Existing الشركاء');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'اختر الشريك لدخول الصفحة الخاصة بالتحكم بالشريك');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'الشريك :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'بحث عن منشاءه');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'إدخال أحرف قليلة من اسم الفندق وحدد الفندق. <BR/> عند تحديد الفندق الذي سوف إضافتها إلى محفظة الشريك, إلا أنها لن تتمتع بعد أي خصومات, وسوف تحتاج إلى تعيين تلك نفسك.');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'الفنادق الحالية');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'انقر على الفندق لتعديل إعدادات الخصم الشريك لهذا الفندق.');
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'تم تعليق هذا الحساب, فإنه ليس من الممكن حاليا لإدارة الممتلكات الخاصة بك باستخدام هذا الحساب.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'حساب المدير معلق');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'اعادة تفعيل حساب المدير');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'يرجى ملاحظة أن حسابك مدير الفندق نشطة الآن. قد تستمر في أداء أي مهام إدارة الفندق. يرجى تسجيل الدخول إلى حسابك وضمان التي تم نشرها الخصائص الملائمة. شكرا لك.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'يرجى ملاحظة أن حسابك مدير الفندق نشطة الآن. قد تستمر في أداء أي مهام إدارة الفندق. يرجى تسجيل الدخول إلى حسابك وضمان التي تم نشرها الخصائص الملائمة. شكرا لك.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'حذف المفضلة');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'ارشيف بيانات الحجز');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'أرشيف البيانات الحجز هو تفريغ الخام للمعلومات الحجز الملتقطة بعد النقر فوق الزر تأكيد الحجز. تحوم فوق موعد لرؤية تفريغ البيانات الخام. يتم تخزين المعلومات في الجدول XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'تحرير الحساب');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'لإضافة مستخدم كمدير خصائص , أدخل أولاً الأحرف القليلة الأولى من اسم المستخدم الخاص به في الحقل أعلاه. عندما يتم العثور على المستخدم الصحيح , انقر فوق هذا الاسم لتحديده , ثم اختر الخاصية (الخصائص) التي يجب أن يكون مديرًا لها. يجب أن يكون المستخدم <em> بالفعل مستخدمًا في نظام إدارة المحتوى </ em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'المدراء الحاليين');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'البحث بواسط رقم الضيف');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'عرض البحث بواسطة رقم الضيف في قائمة منسدلة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'البحث بواسطة عدد النجوم');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'عرض البحث بواسطة عدد النجوم في قائمة منسدلة');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'عدد الضيوف');
jr_define('_JOMRES_SEARCH_STARS', 'عدد النجوم');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'عدد المنشاءات');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'تحميل Jomres jQuery مكتبة?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'يمكنك تعيين هذا بلا إذا كان لديك قالب يستخدم جي كويري. وهذا قد حل قضايا الصراع جي كويري على بعض القوالب, ولكن ليس كل شيء.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'يتم إنشاء الصور المصغرة للصور تلقائيا التي تم تحميلها.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'عرض الصور المصغرة الصغيرة أقصى (بكسل).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'وتستخدم الصور المصغرة الصغيرة في قائمة الفندق في حين يتم استخدام الصور المصغرة متوسطة الحجم في رأس الفندق.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'ارتفاع الصغيرة أقصى الصور المصغرة (بكسل).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'عرض الصور المصغرة المتوسطة أقصى (بكسل).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'متوسط ​​الطول أقصى الصور المصغرة (بكسل).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'تسمية الترجمة');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'استخدام ميزة العمولات؟');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'تعيين هذا إلى نعم لإظهار الفواتير مدير العمولات التي أثيرت.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'مدير الحجوزات يقوم بانشاء العمولات؟');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'اذا كان مدير الحجز يفعل ذلك ايضا انشاء ');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'ايقاف المدير التلقائي حيث يتم تعليمها بمعلقه');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'الحد الخاص بالتعليق التلقائي');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'هذا الحد هو عدد الايام اللتي يتطلب من مدير الفندق الدفع خلالها قبل تعليق وايقاف الفندق');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'اطار اللغة ');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'استخدم هذا الخيار لتغيير سياق لغة الموقع. تسمح هذه الميزة لـ Jomres باستخدام الملصقات المناسبة لتركيزك الحالي , لذلك إذا كان تركيزك منصبًا على وساطة اليخوت , فإن تغيير السياق سيسمح لـ Jomres بتقديم تسميات من ملف لغة مختلف. على سبيل المثال , إذا قمت بضبط السياق على "Yacht Brokerage" , فسيقوم Jomres أولاً بالعثور على اللغة الحالية , ثم ابحث في دليل /'.JOMRES_ROOT_DIRECTORY.'/languages ​​عن دليل فرعي يسمى "yachtbrokerage". إذا كان الملف موجودًا للغة الحالية , فسيتم استخدام هذا الملف. إذا لم يكن كذلك , فسيقوم جومريس بالبحث عن ملف باللغة الإنجليزية في نفس الدليل. إذا تعذر العثور على ذلك , فسيستخدم Jomres ملف اللغة للغة المحددة حاليًا في دليل /'.JOMRES_ROOT_DIRECTORY.'/languages. لاحظ أنه إذا قمت بإنشاء نوع خاصية جديد , فسيتم عمل نسخة من ملف اللغة الحالية في دليل فرعي تحت /'.JOMRES_ROOT_DIRECTORY.'/language باسم يعكس وصف نوع الخاصية الجديد.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'التهيئية المتقدمة للموقع');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'عيّن هذا الخيار على "نعم" إذا كنت تريد استخدام خيارات تكوين الموقع المتقدمة. إذا كنت بدأت للتو مع Jomres , فننصحك بترك هذا لـ No في الوقت الحالي , لأن التثبيت الافتراضي كافٍ لتبدأ , بدلاً من ذلك يجب عليك إضافة Jomres إلى القائمة الرئيسية وتسجيل الدخول إلى الواجهة الأمامية كـ "admin" وابدأ في تكوين الممتلكات الخاصة بك. يرجى ملاحظة أن العديد من الخيارات المتقدمة قد لا تكون متاحة إذا لم يكن لديك المكون الإضافي (المكونات) المناسبة مثبتة. لن يتمكن مستخدمو النظام الأساسي المجاني من الاستفادة الكاملة من الميزات التي يقومون بتمكينها.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'تحميل مكتبة Jomres jQuery UI؟');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'السعر (الاعلى اولاً)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'السعر (الاقل اولاً)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'يجب أن يكون سعرها السعر ملخص والتقديرات وفقا ليلة / في الأسبوع / الشهر الواحد؟');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'لليلة');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'للاسبوع');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'للشهر');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'للشخص');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'اسابيع في ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'شهور في ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'كيف يتوجب على خيار البحث عن عمل أعداد الاشخاص؟');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'تؤثر على جميع وحدات البحث. عند استخدام ميزة البحث للنزلاء عدد, ينبغي أن ننظر ميزة البحث عن العقارات من هو التعريفات ودعم أعداد النزلاء حتى ويساوي عدد المختار, تساوي بالضبط اختيار رقم أو عدد أكبر واختيار؟');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'يرجى الانتظار, يتم معالجة طلبك, وسيتم إعادة توجيهك إلى موقع باي بال.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'إذا لم يتم إعادة توجيهك تلقائيا إلى Paypal في غضون 5 ثوان ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'إضغط هنا');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'الحجز صالح من ');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'الحجز صالح حتى');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'اسم الضيف');
jr_define('_JRPORTAL_COUPONS_DESC_478', 'يمكن أن تتولد رموز الخصم ومرت على الضيوف كحافز لإجراء الحجوزات.<br/>
صالحة من التواريخ وللإشارة إلى التواريخ التي يمكن إجراء الحجوزات على, في حين أن الحجز صالحة من / إلى تواريخ تشير إلى التواريخ التي يجب أن تغطي الحجز لالقسيمة لتكون صالحة. إذا كان الحجز يقع خارج تلك الفترة فإن المعدلات الطبيعية تنطبق على أيام خارج تلك الفترة.<br/>
إذا كنت ترغب في حجز لتكون متاحة لضيف واحد محدد, اختر الاسم الذي النزلاء في القائمة المنسدلة للحد من القسيمة إلى أن ضيوف فقط.');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'مع الكوبون الخاصة بك, وقد تم خصم هذا الحجز من ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' الى ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'تعيين هذا إلى لا لتعطيل التحميل من كل من جافا سكريبت مسج UI وملفات CSS.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'تحميل مكتبة Jomres jQuery UI CSS؟');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'اضبط هذا على لا لتعطيل ملف jquery UI CSS فقط.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'الاجمالي شامل الضرائب');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'منشاءه غير مفعلة');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'استخدام ميزة التحويل ');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', 'استخدام وظيفة تحويل Jomres عبر الإنترنت. وهذا العرض تحويل المنسدلة للمستخدمين الواجهة, حيث أنها سوف تكون قادرة على اختيار العملة التي يرغبون في رؤية يتم ضبط الأسعار المعروضة فيها الناتج السعر لإظهار سعر تحويل يليه سعر العقار الأصلية بين قوسين.');
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'وقد استخدمنا بذل قصارى جهدنا للحصول على أسعار الصرف الأكثر دقة وفي الوقت المناسب ما في وسعنا. لدينا ميزة تحويل العملات عبر الإنترنت هي خدمة لأغراض إعلامية فقط وليس المقصود بها لتقديم أرقام دقيقة. وفقا لذلك, ونحن لا نضمن دقة أسعار الصرف. باستخدام هذه الميزة, تعتبر لك أن اتفقنا على أن أي اعتماد على أو استخدام ميزة التحويل معدل يكون كليا على مسؤوليتك الخاصة.');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'نتيجة تحويل عملة / عملة رموز');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'لتعيين القائمة المنسدلة لرمز العملة تلقائيًا , يمكن لـ Jomres استخدام خدمة مجانية تسمى IPinfoDB لاكتشاف بلد الزائر , ومع ذلك تحتاج إلى التسجيل للحصول على مفتاح API أولاً
<a href="https://www.ipinfodb.com/login" target="_blank">IPinfoDB</a>');
jr_define('_JOMRES_DEBUGGING_TAB', 'تصحيح الاخطاء');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'الاقامة بدون الضرائب');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'الإقامة شاملة الضرائب');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'ضرائب الغرف:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'فتح نموذج الحجز');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'عودة لمعلومات المنشاءه');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'المحددة تلقائياً؟');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'الرصيد (بعد دفع الدفعة المقدمة)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'فلتر الغرف على أساس خصائصها.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'أحدث حجز');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'ثانية');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'دقيقة');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'ساعة');
jr_define('_JOMRES_DATEPERIOD_DAY', 'يوم');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'اسبوع');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'شهر');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'سنة');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'عقد');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'منذ');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'من الان');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'الحجوزات لعدة ايام');
jr_define('_JOMRES_WHOLEDAY_DESC', 'بشكل افتراضي , يحجز النظام الموارد بحلول الليل , لذا فإن الحجز من الأول من يناير إلى الثاني من يناير يغطي ليلة واحدة فقط. إذا قمت بتعيين هذا الخيار على "نعم" , فإن الحجز سيغطي أيامًا كاملة بدلاً من ذلك , لذا فإن الحجز في تلك الأيام سيغطي كلا اليومين وستتم محاسبة العميل على يومين.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'لليوم');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'الشخص باليوم');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'استقبال');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'عودة');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'الايام في');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'ايام العودة ليست صحيحة');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'الحجز قصيرة جدا. يجب أن يكون هناك على الأقل هذه الأيام كثيرة بين الاستقبال وتواريخ العودة:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'الفترة الادنى للاستقبال والتوديع');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'الفاصل الزمني الأدنى في نموذج الحجز بين بيك اب وغلبه النعاس التواريخ. فاصل زمني من 1 يعني أنه يمكن تحديد مواعيد بيك اب والعودة إلى نفس اليوم, ولكن هذا لا يزال يعتمد على الفاصل الزمني الأدنى الذي ويتم احتسابها تلقائيا باستخدام محرك الحجز, كما يتحقق التعريفات التي هي صالحة للفترة الحجز.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'ملخص السعر والسعر المتوقع يجيب ان يجب ان يكون مسعر باليوم او الاسبوع او الشهر ؟؟');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'لليوم');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'الايام قبل تاريخ الاستقبال');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'اقل عدد لايام اللتي يتوجب ان تنقضي من اليوم قبل تاريخ الاستقبال');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'تعيين هذا إلى نعم إذا كنت تريد للحد من الحجوزات مقدما (استخدم الحقل التالي لتعيين حد من حيث أيام). إذا كنت تعيين هذا إلى نعم ثم إذا كان المستخدم يحاول حجز أكثر من ن يوما على الأقل وبعد ذلك يتم استعادة موعدها بيك اب لتاريخ اليوم');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'عرض اذخال تاريخ العودة؟');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'تعيين هذا إلى لا إذا كنت لا تريد أن تظهر مدخلات تاريخ المربع المقابل. فقط استخدام هذا إذا كنت تعرف ما تفعلونه, وسوف دائما في تاريخ العودة عبر وضعها لفي اليوم التالي لتاريخ الالتقاط.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'إذا قمت بتعيين هذا إلى نعم, ثم سيتم اتخاذها عبر لفترة محددة. إذا تم تعيين هذا إلى لا, ثم التأكد من عدم تعيين ذلك اليوم بيك اب محددة إلى نعم (إلا إذا كنت تريد على وجه التحديد لإجبار الناس على بيك اب في يوم معين من أيام الأسبوع) وإلا فإنك لن تحصل على العديد من الروابط في التقويم توافر.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'يوم الاستقبال محدد مسبقاً');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'فقط لمواقع تعرض حجوزات فترة محددة. اختيار يوم من أيام الأسبوع على وجوب بذل بيك آب على.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'يوم استقبال محدد');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'تكرار تاريخ الاستقبال المحدد: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'عندما يتم اختيار مواعيد ثابتة الالتقاط, وعدد من التواريخ التي يمكن أن تظهر في القائمة المنسدلة التواريخ. لاحظ أن قائمة التواريخ لن تتضمن أي تواريخ إذا كان الحجز غير ممكن بسبب الحجوزات المسبقة, وأن القائمة سوف يكون في الواقع مرتين طالما عدد اخترتها لأنها سيكون لها عدد مماثل من التمور تاريخية (إن وجدت) .');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'للشخص لليوم');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'حدد نعم إذا كنت تريد لتوجيه الاتهام لكل شخص يوميا. إذا لا, ثم سيتم احتساب التكاليف على أساس لكل غرفة لكل يوم');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'الودائع متغير تسمح لك لتحديد إذا لو كنت تريد لشحن كامل المبلغ إذا كان التاريخ هو الالتقاط الحجوزات خلال أيام N من اليوم. تعيين هذا الخيار إلى نعم لتمكين هذه الميزة, وأدخل عدد الأيام التي كانت أقل, لذلك على سبيل المثال إذا كان اليوم هو الالتقاط في غضون 60 يوما, ثم إيداع المبلغ اتهم سيكون كامل المبلغ, وإلا أن يستند المبلغ على الوديعة خيارات تكوين أعلاه.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'وسوف يعتمد حساب الأسعار غرفة معظم الفنادق على عدد من الغرف من نوع المطلوبة التي تتوفر على تاريخ معين. وهذا يسمح لهم لتقديم خصومات على نوع الغرفة / الفندق غير مزدحم خلال فترة معينة بهدف جذب الفندق التي قد خلاف ذلك ينبغي تفويتها. <br/> إذا تمكين وتكوين هذا البرنامج المساعد يسمح لك عرض أسعار للتعديل على أساس عدد من غرفة من نوعية مختارة تتوفر في الفندق في يوم معين. <BR/> عتبة الأيام يحدد عدد الأيام أن التاريخ يجب أن يكون ضمن الالتقاط قبل تعديل أسعار الغرف من هذه الميزة, ثم خيارات تسمح لك النسب المئوية لتكوين نسبة من الغرف التي يمكن أن تكون متاحة قبل تطبيق خصم معين. ملاحظة ومع ذلك, إذا تم حجز عدة غرف ثم تطبيقها على المستوى الحالي للخصم لجميع الغرف ولن تخفض ويتم اختيار أكثر الغرف.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'بداية (عدد الأيام بين تاريخ اليوم والالتقاط)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'الاستقبال قيد الانتظار');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'يوم الاستقبال');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'الاستقبال');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'يوم العودة');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'العودة المتاخرة');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'لم يتم الاستقبال');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'الايام');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'علم الحجز قد تم الاستقبال');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'تعليم الحجز عودة');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'تعليم الحجز قد تم الاستقبال');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'تعليم الحجز عودة');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'التكلفة لليوم: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'عدد الايام: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'تجاوز إجمالي السكن');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'حفظ التجاوز');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'ارسال بريد الكتروني للمستخدمين الجدد ببيانات الدخول الخاصة بهم؟');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'إذا تم تعيين الخيار لإنشاء مستخدم جديد نعم, يمكنك تعيين هذا الخيار إلى لا للتأكد من أنها لا بياناتهم الدخول مرسل عبر البريد الإلكتروني للمستخدم أوقية و-تم إنشاؤها. قد يكون هذا مفيدا إذا كنت تقوم بإضافة مستخدمين جدد تلقائيا إلى القائمة البريدية, على سبيل المثال, ولا تريد للمستخدمين تسجيل الدخول في الواقع.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'عرض قيمة الضرائب في نموذج مع ملخص السعر');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'منع نموذج الحجز من عرض حقول سعر الضريبة في مجاميع ملخص عن طريق تعيين هذا الخيار إلى رقم');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'الالغاء');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'الرجاء تسجيل الدخول , فقط العملاء المسجلين بامكانهم الغاء الحجوزات هنا يمكن تحديد عدد الايام المسموح بها للالغاء الحجوزات');
jr_define('_JOMRES_EDIT_PROFILE', 'تحرير الملف الشخصي');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship');
jr_define('_JOMRES_IMAGE', 'الصورة');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'انقر على الرسالة لإظهار كافة الفنادق مع هذا الحرف الأول. مرة واحدة لديك قائمة من الخصائص التي يمكن تعيين أسعار العمولات لتلك الخصائص, أو انقر على أيقونة تحرير تلك الفنادق لعرض الإحصاءات.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'تحرير قيمة الضريبة');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'تحرير الحقل المخصص');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'License server username');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'نسخة Jomres : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'احدث نسخة من Jomres');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'تنبية : يوجد نسخة حديثة من النظام وننصحك بترقيته في اقرب وقت ');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres. The Core system is free, but it can be enhanced through the installation of plugins. To access those plugins you will need a download and support license. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="https://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section in the menu, including the "Getting Started" page which will guide you through your first steps.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'منشاءة فعالة');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'بديلة SMTP اعدادات');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'عيّن هذا الخيار على "نعم" لاستخدام إعدادات SMTP البديلة هذه. يبدو أن عددًا متزايدًا من مضيفي الويب يحظرون وظائف بريد PHP , لذلك يمكنك اختيار تجاوز إعدادات البريد التي يتبناها Jomres من مضيفك CMS (عادةً جملة) واستخدام الإعدادات التي تختارها هنا.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'مستضيف بديل');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'قم بتغيير هذا إلى خادم بريد SMTP الخاص بك');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'منفذ بديل');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'قم بتغيير هذا إلى منفذ SMTP الخاص بك');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'برتوكول بديل');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "اعتمادًا على إعدادات خادم smtp , يجب ترك هذا فارغًا أو إدخال ssl أو tlsالخاص بك إذا كنت لا تعرف.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'استخدم التصريح');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'إذا كان خادم SMTP يتطلب من العملاء تسجيل الدخول , فاضبط هذا على "نعم". ثم سيتم استخدام اسم المستخدم وكلمة المرور.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'اسم مستخدم بديل');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'كلمة مرور بديلة');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'معلومات مختصرة');
jr_define('_JOMRES_MENU_SHOW', 'عرض');
jr_define('_JOMRES_MENU_HIDE', 'اخفاء');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'الافتراضي');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'اي شخص');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'مسجل مسبقا');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'مدير');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'مدير عام');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'لا احد');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'تحكم الوصول');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'هذه الميزة تسمح لك التحكم الذي سيكون قادرا على رؤية البرنامج المساعد في القائمة الرئيسية. خيارات المستخدم عادة هي 00009 مشاهدة من قبل إما / أو زوار الموقع غير المسجلين, 00010 خيارات بصفة عامة تشير إلى نوع النشاطات الاستقبال التي يتم استخدامها على أساس يومي, في حين تستخدم 00011 خيارات لإنشاء وتكوين الممتلكات ولكن يتم الوصول إليها في كثير من الأحيان أقل.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'موظف استقبال');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'تحكم الوصول بشكل كامل');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'تعيين هذا الخيار إلى نعم لتمكين ميزة التحكم في الوصول الكامل, ثم زيارة خيار التحكم بالوصول تحت صيانة النظام لتكوين عناصر التحكم في الوصول.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "ملاحظة, ولكن هذا لا إعدادات هذه البرامج النصية السيطرة الكامنة التي اتصالهم, لذلك على سبيل المثال إذا قمت بتعيين <I> 00009user_option_03_search </I> ل'المدير' على المستخدم الذي يعرف Jomres يمكن استدعاء من قبل لا تزال j06000search.class.php دخول http://www.domain.com/index.php؟option=com_jomres&task=search في شريط عنوان المتصفح الخاصة بهم. هذا هو المقصود, لأن هذا التحكم بالوصول القائمة تسيطر ببساطة ما يمكن أن ينظر إليه في القائمة الرئيسية Jomres. إذا كنت في حاجة تشديد الضوابط ثم تعيين تكوين الموقع -> التحكم في الوصول الكامل إلى الخيار نعم وإعادة النظر في خيار التحكم في الوصول القائمة.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'تحكم الوصول بشكل كامل');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> هذه الميزة للمستخدمين المتقدمين فقط. إذا كنت لا تعرف الغرض من ذلك , وليس لديك سبب محدد لاستخدامه , فالرجاء العودة إلى تكوين الموقع وتعيين خيار التحكم في الوصول الكامل إلى لا. </ strong> <br/>
تتيح لك هذه الميزة التحكم في من يمكنه الوصول إلى المكونات الصغيرة (مع بعض الاستثناءات المشفرة في النظام). إذا تم تعيين مستوى الوصول بجوار اسم البرنامج النصي على الإعداد الافتراضي , فعندئذٍ مع تعيين خيار التحكم في الوصول الكامل على نعم , يمكن لـ <strong> أي شخص </ strong> الوصول إلى البرامج النصية التي يجب ألا يتمكنوا من الوصول إليها , وبالتالي إذا كنت تنوي استخدام هذا ميزة يجب عليك تعيين مستوى التحكم في الوصول لـ <strong> كل </ strong> مكون Jomres صغير مدرج هنا. إذا كنت لا تعرف ما تفعله هذه المكونات الصغيرة , فننصحك بشدة بعدم استخدام هذه الميزة على الإطلاق. <br/>
في مستويات الوصول Jomres تتبع هرمًا , لذا فإن Super Property Managers يكونون أكبر من المديرين. باختصار مدير ممتاز> مدير> موظف استقبال> مسجل> غير مسجل. لذلك , إذا كان لدى المستخدم المسجل حق الوصول إلى مكون صغير , كذلك يفعل موظفو الاستقبال والمديرون والمديرون المتميزون. <br/>
لاحظ أنه لا يمكنك التحكم في المكونات الصغيرة لمنطقة المسؤول. يعتبر أي شخص في منطقة المسؤول مستخدمًا موثوقًا به لأنه لا ينبغي منعه من الوصول إلى أي نص برمجي (خاصة هذا البرنامج).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'تحذير! لقد تم تمكين التحكم الكامل في الوصول , ومع ذلك فقد قمنا بحساب إعدادات التحكم في الوصول ومقارنتها بعدد المكونات الصغيرة التي يجب التحكم فيها , ولا يتطابق الاثنان , وبالتالي قد يكون لديك بعض البرامج النصية التي لا يتم التحكم فيها. قد تكون هذه مشكلة أمنية ونحن نحثك على حلها مرة واحدة من خلال زيارة ميزة التحكم في الوصول والتحقق من تطبيق المستويات المناسبة.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'المستخدمين مع حقوق الإدارة عن هذه المنشأة');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'عنوان البريد الإلكتروني ');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'نموذج');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'العوامل');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'الاجبار');
jr_define('_JOMRES_METATITLE', 'عنوان الفوقية');
jr_define('_JOMRES_METADESCRIPTION', 'ميتا الوصف');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'اضف منشائتك : الخطوة 2 من 2');
jr_define('_JOMRES_CART_TITLE', 'مقترحات الحجوزات');
jr_define('_JOMRES_CART_INFO', 'علما, إن لم تكن هذه الحجوزات حفظ حتى الان. وإذا كنت تسجيل الخروج أو تنتهي جلسة العمل الخاصة بك أن خسروا. تذكر لتأكيد الحجوزات الخاصة بك!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'الحجوزات المأكدة');
jr_define('_JOMRES_CART_OR', ' أو ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'الحفظ لما بعد');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'لايوجد لديك اي حجز محفوظ');
jr_define('_JOMRES_CART_VIEWCART', 'عرض السلة');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'نقطة البدء الافتراضي خط العرض');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'نقطة البدء الافتراضي خط الطول');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'في خريطة جوجل على الممتلكات تحرير صفحة, قبل تم نقل علامة, فماذا النقاط الافتراضي بداية خط العرض / خط الطول يكون؟');
jr_define('_JOMRES_SYSTEM_EMAILS', 'يتم ارسال البريد الالكتروني عبر هذا الحساب');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', 'اترك هذا الخيار فارغ لتعطيله. Jomres سوف تستخدم عنوان البريد الإلكتروني في الفندق (ES) عند إرسال رسائل البريد الإلكتروني للضيوف, ومع ذلك خدمة البريد الإلكتروني لا يسمح رسائل البريد الإلكتروني من عناوين التعسفي (أي أنها قد تسمح فقط رسائل البريد الإلكتروني من عنوان واحد معتمد). إذا كان هذا هو الحال, ثم يمكنك استخدام هذه المدخلات لإدخال عنوان الذي سوف ينظر إليها على أنها عنوان للمن جميع رسائل البريد الإلكتروني النظام.');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'عرض قائمة');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'عرض حسب الصور');
jr_define('_JOMRES_COMPARE', 'مقارنة');
jr_define('_JOMRES_REMOVE', 'إزالة');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'العودة لنتائج البحث');
jr_define('_JOMRES_ADDTOSHORTLIST', 'إضافة للقائمة المختصرة');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'إزالة من القائمة المختصرة');
jr_define('_JOMRES_VIEWSHORTLIST', 'عرض القائمة المختصرة');
jr_define('_JOMRES_COOKIEPOLICY_1', 'مهم: سياسة الملفات المؤقتة');
jr_define('_JOMRES_COOKIEPOLICY_2', 'نحن نستخدم الكوكيز لتساعد على الحفاظ على موقعنا ذات الصلة وسهلة الاستخدام.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'إقراء المزيد');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU legislation requires that all websites clearly specify if cookies are being used and their purpose.');
jr_define('_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6', 'نعم, أوافق على استخدام الكوكيز في هذا الغرض');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'الدفعة المقدمة تتطلب دفع قيمة اول ليلة؟');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'وتحسب على أساس أسعار الليلة الواحدة. هل تريد أن تكون إيداع رسوم ليلة واحدة؟ إذا كان الأمر كذلك, يمكنك تجاهل الخيارات التالية.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'لم تقم بإضافة أي أصناف إلى قائمة المختصرة');
jr_define('_JOMRES_SAFEMODE', 'تفعيل الوضع الامن');
jr_define('_JOMRES_SAFEMODE_DESC', 'تعيين هذا إلى نعم لتحريك الوضع الآمن. سيؤدي ذلك إلى تعطيل كل الإضافات بحيث Jomres سوف تستخدم فقط انها وظيفة أساسية.');
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'التالي');
jr_define('COMMON_CANCEL', 'الغاء');
jr_define('COMMON_SUBMIT', 'تقديم');
jr_define('COMMON_SAVE', 'حفظ');
jr_define('COMMON_DELETE', 'حذف');
jr_define('COMMON_RETURN', 'العودة');
jr_define('COMMON_CLOSE', 'اغلاق');
jr_define('COMMON_BACK', 'للخلف');
jr_define('COMMON_HOME', 'الرئيسية');
jr_define('COMMON_NEW', 'جديد');
jr_define('COMMON_SEND', 'إرسال');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', "يتم استخدام كلمة التحقق للتأكد من أن العميل باستخدام نماذج الويب هو إنسان, ويستخدم لمنع مديري العقارات من أن \ المتطفلة \ من الروبوتات على شبكة الانترنت. لاستخدام الاتصال بنا في تشكيل Jomres سوف تحتاج للتسجيل في <a href=http://www.google.com/recaptcha\ target=\_blank\"> في اختبار reCAPTCHA جوجل </A> الصفحة الرئيسية ووضع نطاقك لتلقي مفاتيح العامة والخاصة. عند استلام تلك المفاتيح, يرجى إدخالها أدناه. الخدمة reCapcha هي خدمة مجانية توفرها Google.");
jr_define('RECAPTCHA_PUBLIC_KEY', 'المفتاح العام');
jr_define('RECAPTCHA_PRIVATE_KEY', 'المفتاح الخاص');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'مهلة ملف القفل');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'لمنع خطر مزدوج الضيوف الذين يحجزون غرف Jomres يستخدم ملف القفل لمنع غرفة من إضافتها إلى قائمة الغرف المتاحة في نموذج الحجز إذا كان شخص ما آخر قد سبق وأن أضفت لهم الغرفة لنفس التواريخ ل. بشكل افتراضي وهذا قفل مهلة في 3600 ثانية, أو ساعة واحدة. يمكنك تغيير الوقت الذي يستغرقه لتنتهي هذا التأمين من خلال تغيير هذا الرقم.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "تمكين قوالب التمهيد Jomres 'وظيفة؟");
jr_define('COMMON_ACTION', 'الاداء');
jr_define('COMMON_VIEW', 'عرض');
jr_define('BACKTOTOP', 'العودة للأعلى');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'اسبوع');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'قوي');
jr_define('_JOMRES_INPUTFILTERING', 'فرز الإدخال');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'مستوى فرز الادخال');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "ومطهرة معظم البيانات التي يتم إدخالها في النظام عن طريق تجريد الأولى أي علامات HTML, ثم استخدام المتغير PHPs وظيفة تصفية لجعل البيانات آمنة قبل أن يتم إدخالها في قاعدة البيانات. قد ترغب في السماح مدخلات معينة (على سبيل المثال المدخلات النص في الصفحة تفاصيل المنشأة) لتشمل HTML. هناك مستويان من تصفية يمكنك استخدامها لتصفية هذه المدخلات, وإما ضعيفة, أو قوية. يجب عليك فقط استخدام الإعداد ضعف ثقة إذا كان المستخدم (ق) إدخال البيانات من قبل نفسك, على سبيل المثال زميل مسؤولي النظام, وإلا يجب أن تترك لتعيين قوية. عند تعيينها إلى قوية (مستحسن) يمكنك تحديد العلامات التي لا تزال للسماح بتحرير الإعداد المقبل HTML تنقية يسمح به'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'الاوسمة المسوح بها');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', 'يمكنك تحرير العلامات التي سيسمح بها منقي html من خلال نظام التصفية الخاص به. الافتراضي هو "p , b , strong , a [href] , i" (أي فقرة , غامق , قوي , روابط ومائل). لمزيد من المعلومات حول العلامات المسموح بها , يرجى قراءة وثيقة منقي HTML على <http://htmlpurifier.org بينما يمكنك تغيير هذا الإعداد , يُنصح بتركه مضبوطًا على الإعداد الافتراضي.');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'المدخلات المسموح بها');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "يمكنك تحديد مدخلات النموذج التي ستسمح لـ html عن طريق تحرير هذا الخيار , وسيتم تحليل أي إدخال مضاف إلى هذه القائمة من خلال منقي HTML بدلاً من تجريد كل html. الافتراضي هو:  property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers  أضف المزيد من المدخلات عن طريق إضافة الأسماء من , مفصولة بمسافة.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'عرض تفاصيل المنشاءه على شكل تبويب ؟');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'تعيين هذا الخيار إلى إظهار تفاصيل المنشأة في علامات التبويب. تعيين إلى أي لتبين لهم دون علامات التبويب.');
jr_define('COMMON_PRINT', 'طباعة');
jr_define('COMMON_EDIT', 'تحرير');
jr_define('COMMON_COPY', 'نسخة');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', '3 يتضمن جملة إطار التمهيد لتويتر بشكل افتراضي, وJomres والقوالب والوظائف التي سوف تستخدم هذه القوالب. افتراضيا, إذا كنت تقوم بتشغيل على جملة Jomres 3 يتم تعيين هذه المفاتيح إلى نعم ولكن يمكنك تعيين لهم لا إذا رغبت في ذلك (غير مستحسن). إذا كنت تقوم بتشغيل الإصدار من جملة أقل من جملة 3 يمكنك اختيار ما زال استخدام القوالب التمهيد Jomres والوظائف, ولكن بشكل افتراضي يتم تعيين هذه الخيارات لرقم');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'استخدام قوالب التمهيد Jomres في الواجهة؟');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'وهنا بعض البدائل التي قد ترغب في النظر.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'كشف تلقائي عن بلد الضيف؟');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', 'سيقوم النظام تلقائيا يحاول كشف البلد الضيف, إن لم تكن قد حجزت من قبل. يمكنك تعيين هذا الخيار إلى لا, وتحديد البلد الذي تفضل أن يظهر في نموذج الحجز, في الخيار التالي.');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'نبذة عن  Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'مساعدة');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'هيا نبداء من هنا');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'تحكم الوصول');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'ادوات المطورين');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'اللغات');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'income generation');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'هيكل الموقع');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'طريقة الاستخدام (عبر الانترنت)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'حسابي (عبر الانترنت)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'وظائف الموقع');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'مدير البرامج المساعدة');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'التكامل');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'التقارير/الإحصائيات');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'المساعدة');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'الترقية');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'طريقة الدفع');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'التعرفة الإفتراضية');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'هذه تنطبق فقط على التعرفة الجديدة');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'عدد السنوات اللتي سيتم عرضها');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'يحدد عدد من السنوات لإظهار عند تحرير نوع التعريفة');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'الفواتير');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'تفاصيل الحساب');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'الدخول');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'الخروج');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'بحث');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'اللوحة الرئيسية');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'حجز');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'الفواتير');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'الإعدادات');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'متنوع');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'تحرير البلد');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'رمز البلد');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'رمز البلد');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'اسم البلد');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'تحرير المحافظة');
jr_define('_JOMRES_EDIT_REGION_ID', 'رمز المحافظة ');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'رمز المحافظة');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'اسم المحافظة');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'قائمة البلدان');
jr_define('_JOMRES_COM_LISTREGIONS', "قائمة المناطق \المحافظات");
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'تصدير التعريفات');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'هذه الميزة تسمح لك تصدير الترجمات التي تم بناؤها باستخدام ميزة ترجمة إلى اللغة. سيكون بناء حقل النص مع كافة البيانات المطلوبة لبناء ملف لغة جديدة, كل ما عليك القيام به هو نسخ ولصق هذا الإخراج إلى ملف اللغة الجديدة التي يمكنك وضع في الصعود إلى Jomres جديد يقوم الخادم, أو إذا كنت تريد أن تساهم عودة إلى المجتمع Jomres.');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'ترجمة اللغات');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'ترجمة الجمل ملف اللغة');
jr_define('_JOMRES_COM_NOTAMANAGER', 'خطأ, المستخدم تسجيل دخولك في وليس داخل سوبر مدير Jomres, فلن تكون قادرا على استخدام هذه الميزة حتى كنت قد استخدمت ميزة إظهار ملفات التعريف لجعل نفسك كل من المدير ومدير سوبر. هذا هو ميزة أمان.');
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'تصميم قائمة المنشاءات الافتراضي');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'الاقامة لمدة لاتقل عن');
jr_define('_JOMRES_NIGHTSFOR', ' ليال لـ');
jr_define('_JOMRES_AGENT', 'وكيل');
jr_define('_JOMRES_AGENT_DETAILS', 'تفاصيل الوكيل');
jr_define('_JOMRES_AGENT_LISTINGS', 'قوائم الوكلاء');
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'الموافقة بشكل تلقائي للمنشائات الجديدة');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'إذا قمت بتعيين هذا الخيار إلى لا ثم سوف تحتاج إلى الموافقة يدويا فنادق جديدة. يمكن حتى تمت الموافقة على الفندق غير أنها تنشر من قبل مدير / مدير الفندق السوبر.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'الموافقات');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'لم يتم إقراره بعد هذا الفندق. بمجرد الموافقة عليها سوف تكون قادرة على نشرها.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'عذرا, لا يمكنك نشر هذا الفندق كما أنه لم يتم إقراره بعد.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'فندق جديد يتطلب موافقة');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'تمت إضافة الفندق إلى النظام الذي يتطلب موافقة. اضغط على الرابط لمشاهدة قائمة الفنادق تنتظر الموافقة: ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'تم اعتماد المنشاءه الخاصة بك');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'تهانينا, تمت الموافقة على الفندق الخاص بك, يرجى الضغط على الرابط التالي لمشاهدة لوحة التحكم الفندق: ');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'اسماء المناطق قابلة للترجمة');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', 'إلا إذا كنت تقوم بتشغيل خادم سريع جدا وينصح لك لترك هذه المجموعة إلى لا ونظرا لعدد كبير من الأسماء المنطقة, والمنطقة الترجمة اسم يستغرق الكثير من الذاكرة التي يمكن أن يبطئ نتائج البحث الخاص بك إلى أسفل.');
jr_define("JOMRES_TAPTOCALL", "انقر للاتصال") ;
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'مراجعة جديدة لـ') ;
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'تم ترك مراجعة جديدة لـ') ;
jr_define('JOMRES_NEWREPORT_SUBJECT', 'تقرير جديد') ;
jr_define('JOMRES_NEWREPORT_MESSAGE', 'تم الإبلاغ عن مراجعة لـ') ;
jr_define("JOMRES_SUPERIOR", "متفوق") ;
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'الإجمالي الكلي (بدون الضريبة):');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'الإجمالي الكلي (شاملاً الضريبة):') ;
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'إجمالي الضريبة:') ;
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'اكتب الكلمتين:');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'أدخل ما تسمعه:') ;
jr_define("JOMRES_RECAPTCHA_PLAY_AGAIN", "إعادة تشغيل المسار الصوتي") ;
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'تنزيل المسار بتنسيق MP3') ;
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'الوضع المرئي') ;
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'وضع الصوت') ;
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'تحديث') ;
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'مساعدة') ;
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'عذرًا , هذا غير صحيح. يرجى المحاولة مرة أخرى.') ;
jr_define("JOMRES_GOOGLE_MAPS", "خيارات خرائط Google") ;
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'استخدام طبقة الطقس؟') ;
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS", "Celcius") ;
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT", "فهرنهايت") ;
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'هل تستخدم طبقة النقل؟') ;
jr_define("JOMRES_GOOGLE_MAPS_POIS", "تمكين نقاط اهتمام Gmap (بما في ذلك ربما منافسيك)؟") ;
jr_define('_JOMRES_METAKEYWORDS', 'الكلمات الرئيسية الوصفية');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'امسح هذا الرمز في هاتفك للحصول على الاتجاهات إلينا.') ;
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "يبدو أن رقم ضريبة القيمة المضافة الذي أدخلته غير صحيح. يجب أن يكون لديك شيء مثل هذا: BE805670816B01") ;
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', "رقم ضريبة القيمة المضافة غير صالح. يرجى التحقق من صحة رقم ضريبة القيمة المضافة الخاص بك مع خدمة الويب للتحقق من رقم ضريبة القيمة المضافة في أوروبا (VIES)") ;
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', "تهانينا. لقد تمكنا من التحقق من صحة رقم ضريبة القيمة المضافة.") ;
jr_define('_JOMRES_TAX_RULES_LIST', 'قائمة قواعد الضرائب') ;
jr_define('_JOMRES_TAX_RULE', 'القاعدة الضريبية') ;
jr_define('_JOMRES_TAX_RULE_INFO', 'تُستخدم القواعد الضريبية لإنشاء قواعد ضريبية مختلفة لمناطق مختلفة. تؤثر هذه القواعد الضريبية على الشخص الذي أجرى الحجز , إذا كان مسجلاً , وسجل الدخول وعدّل حسابه باستخدام صفحة "تحرير حسابي" . الغرض من هذه القواعد هو استيعاب الأشخاص الذين يحجزون في تلك المناطق المعفاة من ضريبة القيمة المضافة , فقد تجد أنك لست بحاجة إلى إنشاء العديد من القواعد , إن وجدت على الإطلاق. ');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'معدلات ضريبة الاستيراد') ;
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', "يمكننا استيراد معدلات الضرائب الخاصة بالاتحاد الأوروبي من أجلك , إذا كنت ترغب في ذلك. ملاحظة , إذا كنت تستخدم هذه الميزة , فستتم إزالة جميع معدلات الضرائب الحالية الخاصة بك.") ;
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'تعديل القاعدة الضريبية') ;
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'رقم ضريبة القيمة المضافة لهذه الخاصية.') ;
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'الرجاء إدخال رقم ضريبة القيمة المضافة لهذه الخاصية.') ;
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'تم التحقق من صحة رقم ضريبة القيمة المضافة.') ;
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'لم يتم التحقق من صحة رقم ضريبة القيمة المضافة.') ;
jr_define("_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS", "سيتم استخدام تفاصيل العمل التي تم إدخالها هنا في فواتير العمولات والاشتراكات.") ;
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "لا يبدو أنك ملأت تفاصيل حسابك حتى الآن. لإدراج الممتلكات الخاصة بك على الموقع , نحتاج منك إكمال تفاصيل حسابك قبل أن نتمكن من المضي قدمًا.") ;
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT", "الإنتاج أم التطوير؟") ;
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'إذا قمت بتعيين هذا الخيار على التطوير , فسنقوم بتمكين الإبلاغ عن الأخطاء , وإلا عند التعيين على الإنتاج , فسيتم إيقاف تشغيله. إذا كان هذا خادمًا مباشرًا , نوصيك بضبط هذا الخيار على "الإنتاج".');

jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION", "الإنتاج") ;
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT", "تطوير") ;
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'تفاصيل المورد') ;
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'تفاصيل التعريفة') ;
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'فقط') ;
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'يسار!') ;
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'ميزة المورد') ;
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'غير قادر على إزالة ميزة المورد هذه , تم تعيينها لمورد. أزل الميزة من هذا المورد وأعد المحاولة.') ;
// الإصدار 7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'المركز الاعلامي') ;
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'أضف صورًا') ;
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'صور الغرفة') ;
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'الخاصية الصورة الرئيسية') ;
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'عرض الصور') ;
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'مسح القائمة') ;
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'اسحب الملفات وأفلتها هنا') ;
jr_define("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS", "اختر المورد الذي تريد تحميل الصور إليه. إذا كان بإمكانك تحميل الصور لموارد فردية (مثل الغرف); فستحصل على قائمة منسدلة ثانية لاختيار المورد المحدد.") ;
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'إذا قمت بتحميل صور متعددة كـ "صورة الخاصية الرئيسية" , فسيتم استخدامها في قائمة الخصائص. سيتم عرض صور عرض الشرائح في صفحة تفاصيل الخاصية.') ;
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'اعرض صورتك') ;
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Delete image') ;
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'تحميل صورة') ;
jr_define("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES", "أيقونات أنواع الغرف") ;
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'أيقونات خاصية الخاصية') ;
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'تحميل كافة الملفات') ;
//8.0
jr_define('COMMON_PREV', 'السابق') ;
jr_define("COMMON_MORE", "المزيد") ;
jr_define('_JOMRES_DASHBOARD_TODAY', 'اليوم') ;
jr_define('_JOMRES_DASHBOARD_YEAR', 'عام') ;
jr_define('_JOMRES_DASHBOARD_MONTH', 'شهر') ;
jr_define('_JOMRES_DASHBOARD_WEEK', 'أسبوع') ;
jr_define('_JOMRES_DASHBOARD_DAY', 'يوم') ;
jr_define('_JOMRES_HLEGEND', 'أسطورة') ;
jr_define('_JOMRES_HFILTER', 'مرشح') ;
jr_define('_JOMRES_HFROM', 'من') ;
jr_define('_JOMRES_HTO', 'To') ;
jr_define('_JOMRES_HNEW_BOOKING', 'حجز جديد') ;
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'حالة الإيداع') ;
jr_define('_JOMRES_HSTATUS_GUEST', 'حالة الضيف') ;
jr_define('_JOMRES_HSTATUS_BOOKING', 'حالة الحجز') ;
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'حالة النشر') ;
jr_define('_JOMRES_HSTATUS_INVOICE', 'حالة الفاتورة') ;
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'نوع الفاتورة') ;
jr_define('_JOMRES_HSTATUS_APPROVED', 'موافق عليه') ;
jr_define('_JOMRES_HSTATUS_CURRENT', 'الأعمال الحالية') ;
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'إظهار الحجوزات لـ') ;
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'إظهار الفواتير لـ') ;
jr_define('_JOMRES_STATUS_ANY', 'أي') ;
jr_define('_JOMRES_STATUS_PAID', 'مدفوع') ;
jr_define('_JOMRES_STATUS_NOTPAID', 'غير مدفوعة') ;
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'تم السحب') ;
jr_define('_JOMRES_STATUS_ACTIVE', 'نشط') ;
jr_define('_JOMRES_STATUS_CANCELLED', 'ملغى') ;
jr_define('_JOMRES_STATUS_PUBLISHED', 'منشور') ;
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'غير منشور') ;
jr_define("_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE", "الضيوف ذوو الحجوزات النشطة") ;
jr_define("_JOMRES_STATUS_GUEST_BOOKINGS_PAST", "الضيوف الذين حجزوا في الماضي") ;
jr_define("_JOMRES_STATUS_BOOKINGS", "الحجوزات") ;
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'الاشتراكات') ;
jr_define('_JOMRES_STATUS_COMMISSIONS', 'اللجان') ;
jr_define("_JOMRES_STATUS_ALL_PROPERTIES", "جميع أعمالي التجارية") ;
jr_define('_JOMRES_ACTION_SET_CURRENT', 'تعيين الحالي') ;
jr_define('_JOMRES_ACTION_CHECKIN', 'تسجيل الوصول') ;
jr_define('_JOMRES_ACTION_CHECKOUT', 'تسجيل الخروج') ;
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", "الحجوزات") ;
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'الخصائص') ;
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS", "ضيوف") ;
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'تقارير') ;
jr_define('_JOMRES_HLIST_GUESTS', 'ضيوف') ;
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'قائمة الضيوف') ;
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'قائمة الفواتير') ;
jr_define('_JOMRES_HLIST_PROPERTIES', 'Properties') ;
jr_define('_JOMRES_HQUICK_BOOKING', 'الحجز السريع') ;
jr_define('_JOMRES_HDATE_OF_BOOKING', 'تاريخ الحجز') ;
jr_define('_JOMRES_HTWO_WEEKS', 'أسبوعين') ;
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'سيتم إلغاء هذا الحجز. اضغط على موافق لإلغاء الحجز.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'تسجيلات الوصول اليوم') ;
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'تسجيل الخروج اليوم') ;
jr_define("_JOMRES_HOVERVIEW_CURRENT_RESIDENTS", "المقيمون الحاليون") ;
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'موقع شريط التنقل') ;
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'افتراضي (منطقة المحتوى)') ;
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'ثابت للأعلى') ;
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'ثابت إلى أسفل') ;
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'navbar المقلوب (تغيير اللون)') ;
jr_define('_JOMRES_BOOKING_NUMBER', 'رقم الحجز') ;
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'إظهار المدعوين لـ') ;
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'إصدار Bootstrap') ;
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "يتضمن Jomres مجموعات القوالب الخاصة به , واحدة لكل إصدار مدعوم من Bootstrap. ستقدم قوالب / سمات Joomla و Wordpress المستندة إلى Bootstrap إصدارًا محددًا من Bootstrap لذلك تحتاج إلى التأكد من أن الخيار الذي تختاره هنا متوافق مع القالب / السمة الخاصة بك. إذا كان السمة الخاصة بك لا توفر أي رمز Bootstrap , فاضبط هذا الخيار على No Bootstrap in Theme ثم سيقوم Jomres تلقائيًا بتضمين ملفات Bootstrap 3 لاستخدامه الخاص. ");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'إظهار المدعوين لـ') ;
jr_define('_JOMRES_HFIXED_PERIODS', 'فترات ثابتة') ;
jr_define('_JOMRES_HDEPOSITS', 'الودائع') ;
jr_define("_JOMRES_HBOOKING_FORM", "نموذج الحجز") ;
jr_define('_JOMRES_HREQUIRED_FIELDS', 'الحقول المطلوبة') ;
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'توم') ;
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith') ;
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110') ;
jr_define('COMMON_PLACEHOLDER_STREET', 'My Street') ;
jr_define('COMMON_PLACEHOLDER_TOWN', 'My Town') ;
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000') ;
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000') ;
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel') ;
jr_define("COMMON_PLACEHOLDER_POSTCODE", "XXNN NNXX") ;
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com') ;
jr_define('EXTENDED_CONFIGURATION', 'تكوين موسع') ;
jr_define('SIMPLE_CONFIGURATION', 'تكوين بسيط') ;
jr_define('_JOMRES_HRESOURCE_FEATURES', 'ميزات المورد') ;
jr_define('_JOMRES_HRESOURCE_TYPE', 'Resource type');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'تعديل نوع الضيف') ;
jr_define('_JOMRES_HEDIT_COUPON', 'تحرير القسيمة') ;
jr_define('_JOMRES_HEDIT_EXTRA', 'تعديل إضافي') ;
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'إنشاء موارد متعددة') ;
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'إنشاء الموارد') ;
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'كم عدد الموارد؟') ;
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'نوع الموارد') ;
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', "الحد الأقصى لعدد الضيوف لكل مورد") ;
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'هل تريد حذف كافة الموارد الموجودة؟') ;
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'يرجى ملاحظة أنك تقوم حاليًا بعرض منطقة المسؤول مع تعيين تكوين الموقع المتقدم إلى لا. إذا كنت تريد رؤية المزيد من الخيارات , فيرجى تعيين تكوين الموقع -> متفرقات -> تكوين الموقع المتقدم إلى نعم.') ;
jr_define('DATATABLES_SINFO', 'إظهار _START_إلى _END_of _TOTAL_entries') ;
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'موافقة') ;
jr_define("_JOMRES_BOOKING_REJECT_INQUIRY", "رفض استعلام الحجز") ;
jr_define("_JOMRES_BOOKING_APPROVE_INQUIRY", "الموافقة على استعلام الحجز") ;
jr_define('_JOMRES_STATUS_APPROVED', 'موافق عليه') ;
jr_define('_JOMRES_STATUS_REJECTED', 'مرفوض') ;
jr_define('_JOMRES_STATUS_INQUIRY', 'Inquiry') ;
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', "تتطلب الحجوزات الموافقة أو تأكيد التوفر؟") ;
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'إذا تم التعيين على نعم , عند إجراء الحجز , فلن يظهر في تقويمات التوفر (ولا يزال بإمكان الضيوف الآخرين حجز تلك الأيام والموارد) حتى يقبل مدير مكان الإقامة / يؤكد توفر الحجز . بمجرد التأكيد , يتم إدراج الحجز على أنه مؤقت (إذا لم يتجاوز الحجوزات الأخرى , فلا يمكن للضيوف الآخرين حجز نفس التواريخ بعد الآن) ويتم إرسال بريد إلكتروني إلى العميل لإجراء الدفع. ') ;
jr_define('_JOMRES_ERROR', 'خطأ') ;
jr_define('_JOMRES_ERROR_MESSAGE', 'عذرًا! حدث خطأ أثناء محاولة معالجة هذه الوظيفة. تم الإبلاغ عنها لك وسننظر فيها.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'رسالة') ;
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'File') ;
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Line') ;
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'تتبع') ;
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'قوالب البريد الإلكتروني') ;
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'تحرير قالب البريد الإلكتروني') ;
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'موضوع البريد الإلكتروني') ;
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'نص البريد الإلكتروني') ;
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'نوع البريد الإلكتروني') ;
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'اسم البريد الإلكتروني') ;
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'وصف البريد الإلكتروني') ;
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'يرجى الاطلاع على هذه الصفحة للمساعدة في تخصيص رسائل البريد الإلكتروني وقائمة بالمخرجات المتاحة: <a href = "https://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-Templates" > تعليمات قوالب البريد الإلكتروني </a> ') ;
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'مسؤول الموقع البريد الإلكتروني الجديد للحجز') ;
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'يتم إرسال بريد إلكتروني إلى مسؤول الموقع عند إجراء حجز جديد , إذا تم تمكين بوابة Paypal العالمية');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'البريد الإلكتروني الجديد لحجز الفندق') ;
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'إرسال بريد إلكتروني إلى مالك العقار عند إجراء حجز جديد') ;
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'ضيف البريد الإلكتروني الجديد للحجز') ;
jr_define("_JOMRES_GUEST_NEWBOOKING_EMAILDESC", "إرسال بريد إلكتروني إلى الضيف عند إجراء حجز جديد") ;
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'خطاب تأكيد الضيف') ;
jr_define("_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC", "خطاب أو بريد إلكتروني قابل للطباعة يمكن لمالك العقار إرساله يدويًا لتأكيد الحجز") ;
jr_define('_JOMRES_CAN_BE_APPROVED', 'يمكن الموافقة على هذا الحجز. جميع الموارد المحددة متاحة للتواريخ المحددة.') ;
jr_define('_JOMRES_CANT_BE_APPROVED', 'لا يمكن الموافقة على هذا الحجز لأن بعض الموارد محجوزة بالفعل في التواريخ المحددة. ستحتاج إلى تعديل الحجز أولاً.') ;
jr_define('_JOMRES_SHOW_POWEREDBY', 'إظهار الارتباط مدعوم من Jomres في تذييل Jomres.') ;
jr_define('GUEST_BUDGET', 'الميزانية') ;
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'استخدام ميزة الميزانية؟') ;
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "مواقع التمهيد فقط! ميزة الميزانية هي إحدى ميزات قائمة الممتلكات التي يمكن للضيف استخدامها لتمييزها عن الخصائص التي يكون سعرها في الليلة أقل من رقم معين. تحتوي الميزة على بعض القيود من حيث أنها قد تكون غير مناسب لبعض المواقع التي تستخدم العديد من العملات المختلفة. لاحظ , إذا كنت تستخدم هذا والمكوِّن الإضافي للقوائم المميزة , فسيتم تغيير فئة التفاف القائمة المميزة تلقائيًا إلى  وحة أساسية عند عرض قائمة الخصائص. ") ;
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'الاسم:') ;
jr_define('_JOMRES_FOR', 'For') ;
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'night') ;
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'ليالٍ') ;
jr_define('_JOMRES_LIVE_SCROLLING', 'استخدام التمرير المباشر / التمرير الملائم في قائمة الخصائص؟');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'يناير') ;
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'فبراير') ;
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'مارس') ;
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'أبريل') ;
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'مايو') ;
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'يونيو') ;
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'تموز') ;
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'شهر اغسطس') ;
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'سبتمبر') ;
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'أكتوبر') ;
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'نوفمبر') ;
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'ديسمبر') ;
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'إظهار _START_إلى _END_من أصل _TOTAL_مُدخل');
jr_define('DATATABLES_SINFOEMPTY', 'يعرض 0 إلى 0 من أصل 0 سجلّ');
jr_define('DATATABLES_SINFOFILTERED', '(منتقاة من مجموع _MAX_مُدخل)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'أظهر مُدخلات _MENU_');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'جاري التحميل...');
jr_define('DATATABLES_SSEARCH', 'ابحث:');
jr_define('DATATABLES_SZERORECORDS', 'لم يُعثر على أية سجلات');
jr_define('DATATABLES_SFIRST', 'الأول');
jr_define('DATATABLES_SLAST', 'الأخير');
jr_define('DATATABLES_SNEXT', 'التالي');
jr_define('DATATABLES_SPREVIOUS', 'السابق');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define("DATATABLES_SHOWHIDE", "تغيير الأعمدة") ;
jr_define('_BOOKING_ONREQUEST', 'الحجز عند الطلب') ;
jr_define("_BOOKING_INSTANT", "الحجز الفوري") ;
jr_define('_JOMRES_COM_FONTAWESOME', 'تضمين مجموعة أيقونات Font Awesome؟') ;
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'اضبط هذا على نعم إذا كان قالبك لا يتضمن Font Awesome.') ;
jr_define('_BOOKING_CALCQUOTE', 'طلب الحجز') ;
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'عزيزي') ;
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'اختر موقعًا') ;
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'معرّف الموقع') ;
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country؟');
jr_define('_JOMRES_HLASTCHANGED', 'آخر تغيير') ;
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'البريد الإلكتروني لإلغاء حجز الفنادق') ;
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', "البريد الإلكتروني المرسل إلى مالك العقار عند إلغاء حجز جديد") ;
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'البريد الإلكتروني لإلغاء حجز الضيف') ;
jr_define("_JOMRES_GUEST_CANCELBOOKING_EMAILDESC", "البريد الإلكتروني المرسل إلى الضيف عند إلغاء حجز جديد") ;
jr_define('_JOMRES_TEST_EMAIL_SEND', 'إرسال بريد إلكتروني تجريبي') ;
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'بريد إلكتروني تجريبي') ;
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'هذا بريد إلكتروني تجريبي من نظام الحجز الخاص بك.') ;
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'تم إرسال البريد الإلكتروني التجريبي بنجاح') ;
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'لم يتم إرسال البريد الإلكتروني التجريبي') ;
jr_define('_INVOICE_TRANSACTIONS', 'المعاملات') ;
jr_define('_OPENEXCHANGE_API', 'Open Exchange Currency API key') ;
jr_define('_OPENEXCHANGE_API_DESC', 'لتحويل الأسعار بين الخدمات , ستحتاج إلى مفتاح واجهة برمجة تطبيقات أسعار الصرف المفتوحة. يجب أن يكون لديك لتحويل الأسعار بين الخدمات , ستحتاج إلى مفتاح API لأسعار الصرف المفتوحة. يجب أن يكون لديك مفتاح API لعرض الأسعار بشكل صحيح في Jomres , ومع ذلك يمكنك <a href="https://openexchangerates.org/signup/free" target="_blank"> التسجيل للحصول على مفتاح مجاني </a> (كل ساعة التحديثات , 1000 طلب / شهر - لا يوجد HTTPS أو دعم عبر البريد الإلكتروني أو ميزات متقدمة). يقوم Jomres بتنزيل أسعار الصرف مرة واحدة يوميًا , طالما أنك تستخدم المفتاح في عدد قليل من المواقع فقط , فمن غير المحتمل أن تتجاوز هذه الحدود. قبل إصدار Jomres 8.3 , استخدمنا إحدى ميزات Yahoo القديمة غير الموثقة , ولكننا اكتشفنا أن استخدام هذه الميزة يتعارض مع شروط وأحكام Yahoo. نتيجة لذلك , يجب أن نفترض أن الميزة قد تختفي في وقت ما في المستقبل , ومن هنا جاء التغيير إلى استخدام أسعار الصرف المفتوحة.فترض أن الميزة قد تختفي في وقت ما في المستقبل , ومن هنا جاء التغيير في استخدام أسعار الصرف المفتوحة. ') ;
jr_define('_JOMRES_COMMISSION', 'لجنة');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'إذا قمت بتحميل صور متعددة للإضافات الاختيارية الفردية , فسيتم استخدام الصورة الأولى فقط.') ;
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'ادفع الآن') ;
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'هذه الفاتورة مستحقة الآن. الرجاء النقر فوق الزر لتحديد طريقة الدفع.') ;
jr_define('_JOMRES_EXTRAS_TEMPLATE', "إليك قائمة ببعض الأشياء الرائعة التي يمكنك شراؤها أثناء إجراء الحجز في هذا العقار.") ;
jr_define("GATEWAYS_INSTRUCTIONS", "في هذه الصفحة يمكنك تكوين أي بوابات مثبتة. تسمح لك هذه الخيارات بتحصيل مدفوعات لأي عمولة أو فواتير اشتراك. لا يمكن تجاوز إعدادات الواجهة الأمامية إلا عن طريق Paypal , وستحتاج جميع البوابات الأخرى إلى التهيئة عبر تكوين الخاصية -> علامة التبويب Gateways , ولكن إذا ظهرت بوابة في هذه القائمة , فيجب أن تكون قادرة على معالجة مدفوعات إيداع الحجز ومدفوعات الفواتير.");

jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'تظهر في صفحة تفاصيل الممتلكات؟');
jr_define("PROPERTY_DETAILS_PAGE_OPTIONS", "إعدادات صفحة تفاصيل الخاصية") ;
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', "تتم إدارة الممتلكات في جومريس فقط من لوحة تحكم الواجهة الأمامية للموقع. في هذه الصفحة , ستتمكن من سرد جميع الخصائص في النظام , بحيث يمكنك تعيين معدلات العمولة والموافقة عليها / عدم الموافقة عليها (إذا تم تمكين هذه الميزات). لإنشاء خاصية جديدة أو تعديل الموجود منها أو إدارة الحجوزات أو أي مهام أخرى متعلقة بالممتلكات / الحجوزات , سيتعين عليك تسجيل الدخول إلى الواجهة الأمامية للموقع والانتقال إلى صفحة Jomres الافتراضية. هناك سترى لوحة Jomres للواجهة الأمامية.");
jr_define("_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS", "أيقونات ميزات الغرفة") ;
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'فئات ميزات الخاصية') ;
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'تحرير فئة ميزة الخاصية') ;
jr_define('_JOMRES_HCATEGORY', 'Category') ;
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'إظهار ميزات الخصائص مقسمة إلى فئات؟') ;
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'اضبط هذا على YES لفصل ميزات الخاصية إلى فئات. يؤثر هذا الخيار فقط على ميزات الخاصية المعروضة في صفحة تفاصيل الخاصية. ستعرضها جميع الصفحات الأخرى دون تقسيمها إلى فئات.') ;
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'تراجع عن الإيداع') ;
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'تراجع عن السحب') ;
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued') ;
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '') ;
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'مفتاح التنزيل والدعم صالح , ستتمكن من تنزيل المكونات الإضافية عبر مدير البرنامج المساعد.') ;
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'مفتاح التنزيل والدعم غير صالح , لن تتمكن من تنزيل المكونات الإضافية عبر مدير البرنامج المساعد.') ;
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type') ;
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "لم تقم بعد بتعيين النوع الفرعي لمكان الإقامة الخاص بك. هذا هو المكان الذي تحدده على أنه شيء مثل فيلا مكونة من 5 غرف نوم أو كوخ مكون من 4 غرف نوم ويساعد الضيوف الذين يبحثون على تحسين عمليات البحث الخاصة بهم.") ;
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'امنح الممتلكات الخاصة بك نوعًا فرعيًا') ;
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'قوالب البريد الإلكتروني') ;
jr_define("_JOMRES_CONTACT_SETTINGS", "إعدادات الاتصال") ;
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'من هنا يمكنك تجاوز جميع تفاصيل الاتصال الخاصة بالممتلكات (البريد الإلكتروني , الهاتف , الفاكس) بحيث يتم إرسال جميع الاتصالات مع الضيوف إليك وليس إلى مالكي العقارات.') ;
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'تجاوز تفاصيل جهات اتصال القوائم؟') ;
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "إذا تم تعيين هذا الخيار على نعم , فسيتم استبدال عناوين البريد الإلكتروني وأرقام الهواتف الخاصة بالملكية بتلك التي تم تعيينها في علامة التبويب هذه. وهذا يفرض إرسال جميع الاتصالات إلى عنوان بريدك الإلكتروني المحدد لضمان أن الضيف والممتلكات لا يمكن للمالك تجاوز محرك الحجز ورسوم العمولة التي ستنجم. وهذا يعني أيضًا أنه كلما تم تغيير وصف العقار , سيتم تعيين مكان الإقامة إلى غير موافق عليه (إذا تم تمكين ميزة الموافقات) وستحتاج إلى التحقق يدويًا من الوصف للتأكد من أن المديرين لم يدخلوا تفاصيل الهاتف أو البريد الإلكتروني في حقول النص قبل الموافقة عليه مرة أخرى. ") ;
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'تتطلب التغييرات التي تم إجراؤها على تفاصيل القائمة التحقق من مسؤول الموقع. إذا قمت بحفظ تفاصيل جديدة , فسيتم إلغاء نشر قائمتك وستكون موافقة إدارة الموقع معلقة قبل أن تكون مرئية مرة أخرى لزوار الموقع. لن تتمكن من تلقيها عبر الإنترنت الحجوزات أثناء عدم نشر قائمتك وتعليق الموافقة. ') ;
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'مراجعة طلب الحجز') ;
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'تأكيد طلب الحجز') ;
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'تعديل طلب الحجز') ;
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'وضع علامة على الفاتورة كمعلقة') ;
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'تم وضع علامة على الفاتورة كمعلقة') ;
jr_define('_JOMRES_TRACKING_ENABLE', 'إرسال بيانات تتبع مجهولة؟') ;
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'حدد نعم لإرسال بيانات تتبع مجهولة إلى Jomres.net لمساعدتنا على فهم كيفية استخدامك للنظام بشكل أفضل.') ;
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'يرجى التأكد من استكمال التفاصيل الخاصة بك في صفحة تحرير حسابي قبل محاولة إجراء الحجوزات نيابة عن عملائك.') ;
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "تفاصيل اتصال الضيف") ;
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', '- ضيف جديد -') ;
jr_define('_JOMRES_CHARTS', 'الرسوم البيانية') ;
jr_define('_JOMRES_CHARTS_SELECT', 'تحديد الرسم البياني ...') ;
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'الدخل حسب السنة / الشهر') ;
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "حسنًا , لنبدأ. تحتاج أولاً إلى إنشاء بعض الغرف لهذه الخاصية.") ;
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'أنشئ بعض الغرف الآن') ;
jr_define("_JOMRES_IMAGES_EXIST_SANITY_CHECK", "أثبتت الأبحاث أن الخصائص التي تحتوي على الكثير من الصور عالية الجودة تولد المزيد من المشاهدات. قم بتحميل صورة رئيسية وبعض صور عرض الشرائح لتحسين فرصك في الحصول على حجوزات.") ;
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'تحميل صورة') ;
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'إنشاء بعض التعريفات') ;
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'ماذا سيحجز الضيوف؟') ;
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'هل هذا العقار نوع فندق , حيث تقوم بتأجير غرف في العقار , أو عقار من نوع فيلا , حيث تقوم بتأجير العقار بالكامل في حجز واحد؟') ;
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', "الغرف في العقار") ;
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'الخاصية بالكامل') ;
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'كلاهما'); // هذا إعداد مؤقت يعطي توافقًا رجعيًا للمستخدمين الحاليين الذين لم يحدّثوا بعد أنواع خصائصهم. لن يكون قابلاً للتحديد
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'ماذا سيحجز الضيوف؟') ;
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "ستحتاج إلى إكمال تفاصيل عنوانك حتى يتمكن ضيوفك من العثور عليك عندما يأتون للإقامة.") ;
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'تحديث عنوانك') ;
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'عفوًا , يبدو أنك قد نسيت إكمال جميع الحقول.') ;
jr_define('_JOMRES_CONTANT_US', 'اتصل بنا') ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'مرحبًا بك في قائمتك الجديدة على الإنترنت لـ') ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'مرحبًا ومرحبًا بك في ملكيتك الجديدة على') ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "لقد أضفت مؤخرًا خاصية جديدة إلى موقعنا , ونود أن نرحب بك في العائلة.") ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'يمكنك رؤية لوحة التحكم الجديدة الخاصة بك') ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'هنا') ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "بمجرد الانتهاء من إعداد موقعك , يمكنك أن ترى كيف يبدو لزوار الموقع من خلال زيارة") ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'صفحتك الأولى.') ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(لم يتم نشرها , لذلك لا يمكن لزوار الموقع رؤيتها بعد).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "سترى في الجزء العلوي من الصفحة عددًا من الرسائل. ستوجهك الأزرار الموجودة بجوار هذه الرسائل إلى الصفحات التي تحتاج إلى زيارتها لإعداد ملكيتك على موقعنا. بمجرد قيامك بذلك لقد أديت كل مهمة من هذه المهام , فسيكون من الأسهل بكثير على زوار موقعنا العثور على الممتلكات الخاصة بك وإجراء الحجوزات عبر الإنترنت. ") ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'إذا كان لديك أي أسئلة على الإطلاق , من فضلك') ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'اتصل بنا') ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "وسنكون سعداء للإجابة على جميع أسئلتك.") ;
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'أتمنى لك التوفيق , فريقنا في') ;
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "لا يبدو أن لديك أي جولات للبيع. قم بإنشاء ملف تعريف للجولة , ثم استخدم زر إنشاء لإنشاء بعض الجولات.") ;
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "لننشئ بعض الجولات!") ;
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'موقع رمز العملة المبادلة') ;
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'استخدم هذا الخيار لتحريك رمز العملة من الخلف , إلى أمام رقم السعر , أو العكس.') ;
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook') ;
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'أدخل معرف صفحتك على Facebook , على سبيل المثال "jomres". اترك هذا فارغًا لإظهار أي شيء. لا تدخل https://www.facebook.com أو أي شيء آخر.') ;
jr_define('COMMON_DOWNLOAD', 'تنزيل');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'بعد ذلك ستحتاج إلى إضافة بعض التعريفات. هذه هي أسعارك الأساسية.') ;
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap غير مفعل!') ;
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'تحذير , لم يتم تمكين Bootstrap في تكوين موقع Jomres -> علامة تبويب متفرقات. لتوفير <i> بعض </ i> وظائف Jomres تستخدم حاليًا قوالب jQuery UI القديمة , ومع ذلك لم يتم العمل عليها منذ عدة سنوات. تم إجراء جميع التطويرات والتحسينات الحالية لقوالب Jomres (ملفات التخطيط) على ملفات قوالب Bootstrap 3. للحصول على أفضل النتائج من Jomres , نوصيك بتثبيت Bootstrap 3 على أساس موضوع لـ Wordpress أو Joomla. بمجرد الانتهاء من ذلك , يمكنك تمكين Jomres \  Bootstrap Templates in Site Configuration.') ;
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'مفتاح الدعم الخاص بك صالح. لاحظ أن هذا الترخيص لا يسمح بتنزيل المكونات الإضافية.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'اسحب الحجوزات إلى هذه المنطقة لإلغائها') ;
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)') ;
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)') ;
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "قبل أن تتمكن من إنشاء نوع غرفة , نحتاج إلى معرفة ما إذا كانت خاصة بملكية من نوع فندق , أو خاصية نوع فيلا.") ;
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'انقر لإضافة أنواع غرف جديدة') ;
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'تحذير , لديك نوع واحد أو أكثر من العقارات بدون أنواع غرف. تحتاج الخصائص إلى أنواع غرف حتى يتمكن مديرو العقارات من إنشاء تعريفات.') ;
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'استخدم زر جديد لإنشاء أنواع غرف جديدة.') ;
jr_define("_JOMRES_PROPERTYTYPE_FLAG_TOURS", "جولات");
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'لا حجوزات / عقارات (قائمة بسيطة)') ;
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'موقع ملف السجل') ;
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'تتم إدارة الممتلكات في جومريس فقط من لوحة تحكم الواجهة الأمامية للموقع. في هذه الصفحة , ستتمكن من سرد جميع الخصائص في النظام , بحيث يمكنك تعيين معدلات العمولة والموافقة عليها / عدم الموافقة عليها (إذا تم تمكين هذه الميزات). لإنشاء خاصية جديدة أو تعديل الموجود منها أو إدارة الحجوزات أو أي مهام أخرى متعلقة بالممتلكات / الحجوزات , سيتعين عليك تسجيل الدخول إلى الواجهة الأمامية للموقع والانتقال إلى صفحة Jomres الافتراضية. هناك سترى لوحة Jomres للواجهة الأمامية.');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a <a href='https://console.developers.google.com/apis/api/maps_backend/overview' target='_blank'>Google Maps key</a> set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='https://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres. Once you have your key, you can enter it into Site Configuration > Google map Options tab.");
jr_define("JOMRES_GOOGLE_MAP_STYLE", "مخطط ألوان خرائط Google") ;
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "حسنًا , لنبدأ في إضافة ملكيتك إلى موقع الويب. نحتاج إلى جمع القليل من المعلومات حول ملكيتك هنا. سيسمح لنا ذلك بإعداد العناصر الأساسية لممتلكاتك. وبمجرد الانتهاء من ذلك , فإنك سيتم إرشادك من خلال إضافة الغرف والأسعار والصور. ") ;
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'The property type helps you to define how the property will be booked, for example with hotels you "sell" just one or two rooms at a time, whereas with villas you offer the entire property.') ;

jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "لاحظ أن عنوان البريد الإلكتروني لا يلزم أن يكون هو نفسه العنوان الذي استخدمته عند تسجيل حسابك. وهذا يسمح لك بالحصول على عناوين مختلفة لخصائص مختلفة.") ;
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'الحد الأدنى للإيداع') ;
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'يمكنك تكوين الحد الأدنى لمبلغ الإيداع ليتم تحصيله. إذا قمت بذلك , فحينئذٍ لا يمكن تكوين إعدادات "الإيداع المطلوب هو تكلفة الليلة الأولى؟" و "الإيداع المطلوب هو النسبة المئوية؟" في تكوين الموقع , بدلاً من ذلك , تكون جميع قيم الإيداع نسبة مئوية ويجب أن تكون على الأقل الرقم الذي تحدده هنا. ') ;
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'لا يمكن أن يكون هذا الرقم أقل من') ;
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'مضيف سجل النظام') ;
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'منفذ سجل النظام') ;
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");

jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP غير مسموح له بالوصول إلى وظائف PHP openlog و syslog. هذا إعداد من جانب الخادم , إذا كنت تريد من Jomres إرسال رسائل إلى خادم سجل نظام , فيرجى استشارة مضيفيك وتأكيد ما إذا كان يُسمح لـ PHP بالوصول إلى هذه الوظائف. بمجرد التمكين , ستتمكن من تكوين إعدادات خادم سجل النظام هنا.");

jr_define('_JOMRES_SEND_ERROR_EMAIL', 'إرسال بريد إلكتروني إلى مسؤول الموقع عند حدوث خطأ؟');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "تاريخيًا , تم إرسال المشكلات التي يجب التحقيق فيها عبر البريد الإلكتروني إلى مالكي المواقع. يمكن أن يكون هذا أمرًا رائعًا لمراقبة تشغيل نظامك نظرًا لأنه يحتوي على الكثير من الأجزاء المتحركة ومن الصعب تتبعها جميعًا. لسوء الحظ , يمكن أن تتسبب العناكب والروبوتات التي تزحف إلى مواقعك (حتى المواقع الصديقة) عن غير قصد في حدوث أخطاء فادحة وقد يتسبب ذلك في زيادة عدد الرسائل التي تتلقاها. إذا كانت هذه هي الحالة , فقم بتعيين هذا الخيار على  ا . يرسل Jomres رسائل تسجيل إلى كل من مجموعة ملفات التسجيل وإلى خادم سجل النظام (إذا كانت إعدادات PHP الخاصة بك تسمح بذلك , فيرجى الاتصال بالمضيف إذا لم تسمح بذلك). يمكنك تحليل الملفات يدويًا إذا كنت تبحث عن شيء محدد (على سبيل المثال , إذا كنت تقوم بتطوير بوابة وترغب في استخدام استدعاء وظيفة gateway_log ().) ولكن هناك الكثير من المعلومات للبحث فيها , لذا فمن الأفضل استخدامها شيء مثل محلل ملف سجل النظام. إذا كنت تقوم بالتطوير على نظام Linux , فهناك الكثير من الأدوات المتاحة لك , وإذا كنت تستخدم نظام التشغيل Windows , فهناك أداة بسيطة يمكنك استخدامها هي http://maxbelkov.github.io/visualsyslog/ في هذه الصفحة , اضبط مضيف Syslog على 127.0.0. 0.1 والمنفذ إلى 514 لرؤية الرسائل التي تم تسجيل دخولها إلى تلك الأداة. ");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'إدارة الخصائص') ;
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have an <a href='http://ipinfodb.com/account.php' target='_blank'>IP Detection API Key</a> set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='https://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");


jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an <a href='https://openexchangerates.org/account/apps' target='_blank'> Open Exchange Rates API Key</a> set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='https://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an Open Exchange Rates API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'رقم التصريح') ;
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', "بعض الدول تشرع أنه يجب عليك عرض رقم تصريح لملكيتك. إذا كان لديك مثل هذا الرقم , أدخله هنا وستتم إضافته إلى قسم عنوان الخاصية.") ;
jr_define('_JOMRES_SHORTCODES', 'Shortcodes') ;
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "<strong> plg_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot plugin يجب أن يتم تثبيته وتمكينه حتى تعمل هذه الرموز القصيرة. يمكن العثور على هذا في Jomres Plugin Manager باستخدام أحد هذا الموقع Quickstarts فمن المحتمل أن يكون قد تم تثبيته بالفعل. ");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "يجب التأكد من تمكين المكون الإضافي <strong> 'Jomres Shortcodes' </strong>. يمكن العثور على هذا في Jomres Plugin Manager. إذا تم إنشاء هذا الموقع باستخدام أحد Quickstarts , فمن المحتمل مثبت مسبقا.");
jr_define("SHORTCODE_TASK", "مهمة") ;
jr_define('SHORTCODE_DESCRIPTION', 'الوصف') ;
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'مثال');
jr_define('INTEGRITY_CHECK', 'فحص سلامة نظام الملفات') ;
jr_define('INTEGRITY_CHECK_DESC', 'تسمح لك هذه الميزة بالتحقق من أن نظام الملفات يتطابق مع الإصدار الحالي من Jomres. وهذا مفيد في ضمان تحديث جميع الملفات بشكل صحيح بعد التثبيت / الترقية. الملفات باللون الأحمر مفقودة , والملفات الموجودة في البرتقالي موجود ولكنه مختلف عن الموجود في الإصدار الحالي , فقط الملفات التي تمثل مشاكل محتملة سيتم إدراجها هنا. ');
jr_define('INTEGRITY_CHECK_FILENAME', 'فحص سلامة نظام الملفات') ;
jr_define('INTEGRITY_CHECK_LOCALHASH', 'تجزئة محلية') ;
jr_define('INTEGRITY_CHECK_BUILDHASH', 'تجزئة الإصدار') ;
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'رائع! لم يتم العثور على مشاكل.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'محدِّد خرائط Google') ;
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'قراءة المزيد') ;
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'اقرأ أقل') ;
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'ضريبة السياحة') ;
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'معدل الضريبة السياحية') ;
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', "تعيين معدل الضريبة السياحية. يتم احتساب ضريبة السائح فقط بعد إنشاء الحجز الأولي , وإضافتها إلى صفحة تأكيد الحجز , في مربع الخدمات الإضافية.") ;
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'هل النسبة المئوية؟');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "اضبط هذا على نعم إذا كانت الضريبة نسبة مئوية أو لا إذا كانت رسومًا ثابتة.") ;
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'هل يؤثر على قيمة الحجز بالكامل؟') ;
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', '"عيّن هذا إلى نعم إذا كانت الضريبة ستغطي القيمة الكاملة للحجز , لذا فهي نسبة مئوية لكل من مكان الإقامة بالإضافة إلى أي إضافات , أو لا إذا تم حسابها فقط بناءً على قيمة إجمالي مكان الإقامة. إذا كان تم تعيين الخيار "النسبة المئوية" أعلاه على "لا" , ثم يتم تجاهل هذا الخيار.');
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'يرجى العلم أنه ستتم إضافة ضريبة السياحة إلى هذا الحجز. ستتمكن من رؤية الضريبة في صفحة مراجعة الحجز.') ;
jr_define('NO_LICENSE_MESSAGE', "لم تقم بحفظ رقم ترخيص في تكوين الموقع , وبالتالي لن تتمكن من تنزيل المكونات الإضافية. بمجرد حفظ مفتاح ترخيص صالح , ستتمكن من تثبيت أي مكونات إضافية مدرجة كـ المكونات الإضافية الأساسية. ") ;
jr_define('INVALID_LICENSE_MESSAGE', "يبدو أنك تستخدم رقم ترخيص غير صالح أو انتهت صلاحيته. بمجرد حفظ مفتاح ترخيص صالح , ستتمكن من تثبيت أي مكونات إضافية مدرجة كمكونات أساسية.") ;
jr_define('VALID_LICENSE_MESSAGE', "تهانينا , أنت تستخدم رقم ترخيص صالح ويمكنك تثبيت المكونات الإضافية الأساسية من خلال مدير الإضافات Jomres.") ;
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'تتيح لك هذه الصفحة تحميل الصور لممتلكاتك والأشياء التي تقدمها. يحتوي على زر رئيسي واحد وزر آخر يسمح لك بتحديد موارد معينة لتحميل الصور لها. لذلك , ستظهر صورة الخاصية الرئيسية وعرض الشرائح زرًا واحدًا فقط ولكن إذا قمت بإنشاء أي منها على سبيل المثال الإضافات أو الغرف الاختيارية , سترى زرًا ثانيًا حيث يمكنك تحميل الصور لتلك الموارد المحددة.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'تتيح لك هذه الصفحة تحميل الصور لممتلكاتك والأشياء التي تقدمها. يحتوي على زر رئيسي واحد وزر آخر يسمح لك بتحديد موارد معينة لتحميل الصور لها. لذلك , ستظهر صورة الخاصية الرئيسية وعرض الشرائح زرًا واحدًا فقط ولكن إذا قمت بإنشاء أي إضافات اختيارية , فسترى زرًا ثانيًا حيث يمكنك تحميل الصور لتلك الموارد المحددة.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>اختر أولاً الصورة (الصور) التي ترغب في تحميلها بالنقر فوق إضافة صورة أو استخدام السحب والإفلات. ستظهر هذه في العمود على الجانب الأيمن.</li>
  <li>فوق هذه المنطقة , استخدم زر اختيار المورد لاختيار المورد الذي تريد تحميل الصور إليه. قد يُعرض عليك خيار اختيار مورد معين تحته. </li>
  <li> بمجرد اختيار مورد , يمكنك بعد ذلك النقر فوق الزر تحميل صورة أسفل صورة لربطها بهذا المورد. بمجرد تحميل الصورة , ستختفي من العمود الموجود في الموقع الأيمن , وستظهر في اليسار.</li>
  <li>استخدم زر سلة المهملات بجوار الصور الموجودة لإزالة الصور التي لم تعد تريد عرضها.</li>
  <li>يمكنك تغيير ترتيب عرض الملفات في عرض الشرائح عن طريق إعادة تسميتها قبل تحميلها , حيث يتم عرضها في الصفحات بترتيب أبجدي.</li>
</ol>
");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "بجوار زر الموارد , قد ترى زر معاينة. إذا نقرت على هذا , فسترى نافذة منبثقة توضح لك كيف ستبدو الصور التي تم تحميلها حاليًا في الصفحة. وهذا يساعد في منحك فكرة عن شكل الصور لعملائك. ") ;
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "لا يوجد حد لعدد الصور التي يمكنك تحميلها. يتم تغيير حجم الصور تلقائيًا عند تحميلها. يمكنك فقط تحميل ملفات JPG و PNG.") ;
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "من الناحية المثالية , ستكون أي صور تقوم بتحميلها على الأقل") ;
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "بكسل عرضًا , وإلا فقد تبدو غامضة بعد تحميلها.") ;
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "أي صور تقوم بتحميلها لا يمكن أن تكون أكثر من") ;
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "بالحجم.") ;
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "اختر المورد الذي تريد تحميل الصور له") ;
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "مورد محدد") ;
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "الصور التي تم تحميلها بالفعل لهذا المورد") ;
jr_define('_JOMRES_MARKDOWN_TITLE', 'تنسيق النص') ;
jr_define("_JOMRES_MARKDOWN_DESC", "يمكنك إدخال نص هنا باستخدام تنسيق Markdown البسيط. لست بحاجة إلى معرفة أي HTML , فقط استخدم الأزرار لجعل المعلومات تبدو كما تريد , أو تنسيق النص وفقًا لهذه الأمثلة.") ;
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'توكيد') ;
jr_define('_JOMRES_MARKDOWN_BOLD', 'غامق') ;
jr_define('_JOMRES_MARKDOWN_ITALICS', 'مائل') ;
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'يتوسطه خط');
jr_define('_JOMRES_MARKDOWN_HEADERS', "رؤوس") ;
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'رأس كبير') ;
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "رأس متوسط") ;
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'رأس صغير') ;
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'رأس صغير') ;
jr_define('_JOMRES_MARKDOWN_LISTS', "القوائم") ;
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'عنصر قائمة عام') ;
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'عنصر قائمة مرقمة') ;
jr_define('_JOMRES_MARKDOWN_LINKS', 'روابط') ;
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'نص للعرض') ;
jr_define('_JOMRES_MARKDOWN_QUOTES', 'اقتباسات') ;
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'هذا اقتباس.') ;
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'يمكن أن يمتد لعدة أسطر!') ;
jr_define('_JOMRES_MARKDOWN_IMAGES', 'الصور') ;
jr_define('_JOMRES_MARKDOWN_TABLE', 'الجداول') ;
jr_define('_JOMRES_MARKDOWN_COLUMN', 'عمود');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'إظهار صور الخصائص كعرض شرائح في قائمة الخصائص؟') ;
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'إذا تم الضبط على نعم , سيتم عرض عرض شرائح للصور الرئيسية للخاصية. إذا تم الضبط على لا , فسيتم عرض أول صورة رئيسية للخاصية.') ;
jr_define('EDIT_CMS_USER', 'تحرير مستخدم CMS') ;
jr_define("BOOKING_MADE_BY", "تم الحجز بواسطة") ;
jr_define('_JOMRES_ROUTER_FEATURES', 'وسائل الراحة') ;
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'أنواع الغرف') ;
jr_define("_JOMRES_BOOKING_FORM_EXTERNAL_URL", "عنوان URL لنموذج الحجز الخارجي") ;
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'هنا يمكنك تعيين عنوان URL خارجي إذا كنت تريد استخدام موقع ويب تابع لجهة خارجية لإجراء الحجوزات. ستشير جميع أزرار حجز jomres إلى عنوان URL هذا. اترك هذا الحقل فارغًا إذا كنت تريد استخدام نموذج حجز Jomres . ') ;
jr_define('_JOMRES_ROOM_TAGLINE', 'سطر الوصف (وصف الغرفة القصير / العنوان الفرعي)') ;
jr_define('_JOMRES_ROOM_DESCRIPTION', 'وصف الغرفة');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'ضيف في القائمة السوداء') ;
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'إذا كان هذا الضيف مدرجًا في القائمة السوداء فلن يتمكن بعد ذلك من إجراء الحجوزات في هذه المنشأة.');
jr_define('_JOMRES_SESSION_HANDLER', 'معالج الجلسة') ;
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'حفظ ملفات جلسة jomres على القرص أو إلى قاعدة البيانات. مستحسن: قاعدة البيانات');
jr_define('_JOMRES_MAP_HEIGHT', "ارتفاع الخريطة (بكسل)") ;
jr_define('_JOMRES_MAP_ZOOMLEVEL', "مستوى تكبير الخريطة") ;
jr_define('_JOMRES_MAP_MAPTYPE', "نوع الخريطة") ;

jr_define('_JOMRES_TEMPLATE_PACKAGES', "مدير تجاوز القالب") ;
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "حزم القوالب هي مكونات إضافية يمكن أن توفر قوالب تجاوز لملفات قالب جومريس الأساسية المختلفة.") ;
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "تسرد هذه الصفحة أي ملفات قالب يمكن تجاوزها بواسطة ملفات قوالب حزمة القوالب. إذا كنت تريد تجاوز ملف قالب معين , فانقر فوق الزر تحرير لهذا الملف , وستكون في الصفحة التالية قادر على اختيار الإصدار الذي تريد تجاوزه. لاحظ أن هذه التجاوزات لها الأولوية على كل من Jomres Core وأي قوالب / قوالب Wordpress أو Joomla. يمكنك تعطيل التجاوز عن طريق حذفه في صفحة تجاوز قالب القائمة. ") ;
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "اسم القالب") ;
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "المسار الحالي") ;
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "لم يتم تجاوزها") ;
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "يمكنك اختيار ملف القالب لتجاوز ملفات القالب الأساسية عن طريق تغيير القائمة المنسدلة") ;


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "النسبة المئوية للغرف المحجوزة") ;


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "النسبة المئوية للغرف المحجوزة") ;
jr_define('_JOMRES_SELECT_WIDGETS', "تحديد الأدوات") ;
jr_define('_JOMRES_INTERVAL', "فترة") ;
jr_define('_JOMRES_TIMELINE', "الجدول الزمني") ;
jr_define('_JOMRES_CPANEL_GRID', "تخطيط المنزل للوحة التحكم") ;
jr_define('_JOMRES_CPANEL_GRID_DESC', "حدد تخطيط الشبكة للصفحة الرئيسية للوحة التحكم في إدارة الممتلكات الخاصة بك.") ;

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "علامات خرائط Google") ;
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "صور المدينة") ;
jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "سيؤدي تغيير نوع الخاصية إلى حذف جميع الغرف والتعريفات وإعدادات الملكية وإعادة التوفر.") ;
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'يرجى ملاحظة , بعد التحديث , يجب عليك تحديث أي مكونات إضافية لـ Jomres مثبتة بالفعل , من خلال مدير المكونات الإضافية لـ Jomres. إذا كان لديك مكونات إضافية مثبتة , ولكن ليس لديك ترخيص Jomres صالح , فنحن <em> نقوم بذلك لا يوصي </ em> بتحديث Jomres لأن المكونات الإضافية القديمة غالبًا قد لا تعمل مع الإصدارات الأحدث من Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'يرجى ملاحظة , بعد التحديث , يجب عليك تحديث أي ملحقات Jomres مثبتة بالفعل , من خلال مدير الإضافات Jomres.') ;
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "إذا كنت ترغب في تحديث Jomres ومكوناته الإضافية , فستحتاج إلى ترخيص تجديد. يرجى زيارة <a href='https://www.jomres.net/pricing' target='_blank'> الموقع </a> لمزيد من المعلومات. في معظم الحالات , تكون هذه التراخيص 50٪ من سعر الترخيص الكامل. يرجى التأكد من أنك قمت بتسجيل الدخول إلى متجرنا قبل محاولة شراء تجديد. ");
jr_define('_JOMRES_PAYMENT_METHOD_USED', "طريقة الدفع:") ;

jr_define('_JOMRES_PRICES', "تواصل معنا") ;


jr_define('_OAUTH_TITLE', "إدارة مفتاح التطبيق");
jr_define('_OAUTH_APPS', "تفاصيل عميل REST API") ;
jr_define('_OAUTH_IDENTIFIER', "المعرف") ;
jr_define('_OAUTH_APIKEY', "معرف العميل") ;
jr_define('_OAUTH_SECRET', "سرّ") ;
jr_define('_OAUTH_CREATED', "إنشاء / تحديث التطبيق");
jr_define('_OAUTH_CLIENT_ID_INFO', "تم إنشاء معرّف العميل والسر من أجلك. المعرّف هو ما يمكنك من التعرف بسهولة على زوج المفاتيح هذا.") ;
jr_define('_OAUTH_SCOPE_TITLE', "أذونات (ما يمكن للعميل فعله)") ;
jr_define('_OAUTH_SCOPE_CATEGORY_USER', "أذونات المستخدم") ;
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "أذونات الخاصية") ;

jr_define('API_DOCUMENTATION_TITLE', "وثائق App REST API") ;

jr_define('_OAUTH_CONFIG', "تكوين API الأساسي");

jr_define('_OAUTH_CONFIG_SHOW', "إظهار خيارات تكوين عميل API في قائمة Jomres الرئيسية؟") ;
jr_define('_OAUTH_CONFIG_SHOW_DESC', 'يمكنك اختيار عدم إظهار خيارات تكوين عميل API في قسم "حسابي" في قائمة Jomres الرئيسية. يمكنك بدلاً من ذلك أن تقرر أنك تريد عرضها على صفحات أخرى باستخدام رموز Jomres القصيرة.');


jr_define('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "يعرض صفحة وثائق API الأساسية. يسمح API Core للمستخدمين بإنشاء عملاء API , والتي يتم استخدامها بعد ذلك للوصول إلى وظيفة API الموضحة في وثائق API الأساسية.") ;

jr_define('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "يعرض صفحة الإدارة الأساسية لواجهة برمجة التطبيقات , حيث يمكن لمديري الخصائص تكوين عملاء واجهة برمجة التطبيقات. لاحظ أن هذه ميزة مستخدم مسجل فقط , لذا يجب تسجيل المستخدمين وتسجيل الدخول قبل أن يتمكنوا من رؤية هذه الصفحة.") ;

jr_define('API_METHODS_TITLE', "أساليب API") ;
jr_define('API_METHODS_DESCRIPTION', "تستند قائمة الطرق هذه إلى المكونات الإضافية لميزة واجهة برمجة التطبيقات المثبتة لديك ويتم إنشاؤها تلقائيًا. إذا قمت بتثبيت أو حذف مكون إضافي لميزة واجهة برمجة التطبيقات , فيجب عليك زيارة هذه الصفحة لإعادة إنشاء قائمة طرق API المتاحة على موقعك. ") ;

jr_define('_OAUTH_REDIRECT_URI', "إعادة توجيه URI") ;
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER', "أعطني اسمًا له معنى بالنسبة لك , مثل هاتفي") ;

jr_define('_OAUTH_GRANT_TYPES', "يدعم هذا النظام نوعين من المنح , بيانات اعتماد العميل والضمني. إذا كنت تستخدم تدفق <em> بيانات اعتماد العميل </ em> , فستحتاج إلى معرف العميل وسر العميل. إذا كنت تستخدم <em > ضمني </ em> حينئذٍ يرسل تطبيقك معرف العميل فقط وستقوم بتسجيل الدخول إلى النظام لتفويض هذا التطبيق صراحة. ");

jr_define('_OAUTH_IMPLICIT_NOTES', "لاستخدام تدفق نوع المنحة <em> الضمني </ em> , ستحتاج إلى استخدام عنوان url هذا لتفويض تطبيقاتك. عندما يتم استدعاء عنوان url هذا , وتصريح التطبيق الذي سيصدره النظام رمز مميز ستستخدمه التطبيقات بعد ذلك للاتصال بواجهة برمجة تطبيقات هذا النظام ") ;
jr_define('_OAUTH_AUTHORISATION_URL', "عنوان URL للترخيص") ;

jr_define('WEBHOOKS_CORE', 'ويب هوك');

jr_define('_WEBHOOKS_CONFIG_SHOW', "إظهار خيارات تكوين Webhook في قائمة Jomres الرئيسية؟") ;
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', 'يمكنك اختيار عدم إظهار خيارات تكوين Webhook في قسم "حسابي" في قائمة Jomres الرئيسية. يمكنك بدلاً من ذلك أن تقرر أنك تريد عرضها على صفحات أخرى باستخدام رموز Jomres القصيرة.');

jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "وثائق Webhooks") ;

jr_define('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "يعرض صفحة وثائق API الأساسية. يسمح API Core للمستخدمين بإنشاء عملاء API , والتي يتم استخدامها بعد ذلك للوصول إلى وظيفة API الموضحة في وثائق API الأساسية.") ;

jr_define('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "يعرض صفحة إدارة API الأساسية , حيث يمكن لمديري الخصائص تكوين عملاء API. لاحظ أن هذه ميزة مستخدم مسجل فقط , لذلك يجب تسجيل المستخدمين وتسجيل الدخول قبل أن يتمكنوا من رؤية هذه الصفحة.") ;

jr_define('WEBHOOKS_INTEGRATION_EDIT', 'تحرير التكامل') ;
jr_define('WEBHOOKS_INTEGRATION_ID', 'Integration ID') ;
jr_define("WEBHOOKS_INTEGRATION_URL", "URL أو الاسم") ;
jr_define('WEBHOOKS_ENABLED', 'ممكّن');

jr_define('WEBHOOKS_AUTH_METHOD_SELECT', 'طريقة المصادقة / التكامل') ;

jr_define("WEBHOOKS_MANAGER_PROPERTIES_NONE", "لن يتم تشغيل أي خطافات ويب تقوم بإنشائها لأنك لم يتم تعيينك لأي خصائص. لا يتم عادةً تعيين خصائص فردية لمديري الممتلكات , لذلك قد تحتاج إلى مستخدم جديد لإنشاء خطاف الويب.") ;
jr_define('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'سيتم تشغيل أي خطافات ويب تقوم بإنشائها مقابل الخصائص التالية:') ;


jr_define('PORTAL_REVIEWS_LIMIT', 'حدود المراجعات') ;
jr_define('PORTAL_REVIEWS_LIMIT_DESC', 'استخدم هذا الإعداد للحد من عدد المراجعات المعروضة في صفحة تفاصيل الخاصية.') ;
jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'إظهار كافة المراجعات') ;

jr_define("VIDEO_TUTORIALS", "دروس الفيديو") ;

jr_define("_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE", "الحد الأدنى لقيمة الإيداع") ;
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "إذا كان الإيداع المحسوب أقل من هذا الرقم , فقم بتعيين الإيداع على هذه القيمة بدلاً من ذلك. قد يتم تجاوز هذا الرقم في حد ذاته إذا لم يستوف الحد الأدنى للإيداع في الموقع. اتركه مضبوطًا على 0 إلى لا تستخدم الإعداد. ") ;

jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'لزيادة سرعة موقعك , نوصي باستيراد تفاصيل الموقع الحالي وصور الخصائص إلى قاعدة البيانات.') ;
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'استيراد تفاصيل الصور الموجودة إلى قاعدة البيانات') ;

jr_define('_JOMRES_S3_ACTIVE_DESC', 'ميزة تجريبية. في حالة التمكين , سيتم أيضًا نسخ الصور التي تم تحميلها باستخدام ميزة مركز الوسائط إلى حاوية Amazon S3 الخاصة بك وعرضها من عنوان url الخاص بحاوية Amazon S3. عند تمكين هذا في المرة الأولى , سيتم مطالبتك أيضًا باستيراد الصور الموجودة إلى دلو S3 الخاص بك.');
jr_define('_JOMRES_CLOUDFRONT_DMAIN', 'مجال CloudFront') ;
jr_define('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'استبدل نطاق Amazon S3 الافتراضي الخاص بك بنطاق CloudFront الخاص بك');
jr_define('_JOMRES_S3_SSLTLS_DESC', 'يوصى بتمكينه. بالنسبة لنظامي التشغيل Windows و Mac OSX فقط , إذا لم يتم إنشاء libcurl باستخدام Schannel أو دعم النقل الآمن (مكتبات SSL الأصلية المضمنة في Windows و Mac OS X); يجب عليك تعيين هذا على لا.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'لقد قمت بتمكين تكامل Amazon S3 , لذلك سيتعين عليك نسخ جميع الصور الموجودة إلى حاوية S3 الخاصة بك. يتم الآن تقديم الصور إلى زوار موقعك من عنوان url الخاص بك في Amazon S3 , لذلك ستحتاج لنسخها أولاً إلى حاوية S3 الخاصة بك , وإلا فلن تكون مرئية لزوار موقعك. ') ;
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'بمجرد النقر فوق هذا الزر , يرجى عدم مقاطعة العملية وانتظار رسالة نجاح أو خطأ. اعتمادًا على سرعة الخادم , قد يستغرق هذا بعض الوقت حتى يكتمل.') ;
jr_define("_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION", "نسخ الصور الموجودة إلى حاوية Amazon S3") ;


jr_define('JOMRES_INCOMPLETE', 'غير مكتمل');
jr_define("JOMRES_WATING_APPROVAL", "في انتظار الموافقة") ;
jr_define("JOMRES_GOOGLE_MAPS_PDETAILS", "خريطة تفاصيل الخاصية") ;

jr_define('HAS_STARS_TITLE', 'يسمح بتصنيف النجوم؟');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'فرض إعادة استيراد تفاصيل الصورة إلى قاعدة البيانات') ;
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'فرض إعادة تحميل الصور إلى حاوية S3') ;
jr_define('_JOMRES_UNINSTALL_TABLES', 'هل تريد حذف كافة بيانات Jomres عند إلغاء التثبيت؟') ;
jr_define('_JOMRES_UNINSTALL_TABLES_DESC', 'إذا تم التعيين على نعم , سيحذف Jomres جميع جداول قاعدة البيانات عند إلغاء التثبيت. سيؤدي هذا إلى حذف جميع بيانات Jomres من db ولا يمكن التراجع عنها.') ;

jr_define('TRANSACTION_IDS', 'معرّف المعاملة') ;
jr_define("PAYMENT_METHOD", "طريقة الدفع") ;
jr_define('POA_DISPLAY_PRICE', 'POA Price');
jr_define('POA_DISPLAY_PRICE_DESC', 'عند عرض الخصائص في قائمة , سيحاول النظام العثور على سعر صالح من التعريفات المكونة بناءً على تاريخ اليوم , أو إذا تم استخدام التواريخ في البحث , ثم بناءً على تلك التواريخ . إذا لم يتمكن من ذلك , فسيظهر POA (السعر عند الطلب); مما يعني أنه يجب على الضيف الاتصال بك للحصول على سعر. إذا كنت تريد , يمكنك تكوين سعر هنا سيظهر بدلاً من نص التوكيل. هذا الرقم سيكون سعرًا "احتياطيًا" ليتم عرضه إذا لم يكن بالإمكان تحديد سعر آخر. ') ;

jr_define('PLUGINMANAGER_INSTALL', 'تحتاج إلى تثبيت مدير البرنامج المساعد قبل أن تتمكن من تثبيت ملحقات Jomres , هل ترغب في القيام بذلك الآن؟') ;
jr_define('PLUGINMANAGER_REINSTALL', 'تحتاج إلى تحديث مدير البرنامج المساعد قبل أن تتمكن من تحديث أي ملحقات إضافية مثبتة , هل ترغب في القيام بذلك الآن؟') ;
jr_define('PLUGINMANAGER_INSTALL_BUTTON', "لنفعل هذا!");

jr_define('INCLUDEINFILTERS', 'تضمين في المرشحات؟');
jr_define('INCLUDEINFILTERS_DESC', 'يمكن أن تصبح عوامل تصفية خاصية الخاصية في Ajax Composite Search طويلة جدًا , لذا يمكنك ضبط هذا الخيار على لا لمنع هذه الميزة من الظهور في قائمة خاصية الخاصية.') ;

jr_define('REVIEW_REMINDER_PT1', "لديك") ;
jr_define('REVIEW_REMINDER_PT2', "الحجز (الحجوزات) التي لم تترك مراجعة لها بعد. الرجاء ترك تعليق.");
jr_define('BOOKINGS_AWAITING_REVIEWS', "الحجوزات في انتظار المراجعات") ;
jr_define('REVIEW_NAG', "Nag ضيوف للمراجعات؟") ;
jr_define('REVIEW_NAG_DESC', "بمجرد أن يتم حجز ضيف من الحجز , سيقوم النظام بتذكيره بنشر مراجعة عن حجزه. اضبط هذا الخيار على لا لتعطيل هذا التذكير. ");

jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "إرسال نسخ من رسائل البريد الإلكتروني للحجز إلى مسؤولي الموقع؟") ;
jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "عند التمكين , سيتم إرسال نسخ من رسائل البريد الإلكتروني للحجز المرسلة إلى مديري الممتلكات إلى جميع مسؤولي الموقع أيضًا.") ;

jr_define('HIDDEN_ADDRESS_SETTING', "إخفاء العنوان؟");
jr_define('HIDDEN_ADDRESS_SETTING_DESC', "إذا قمت بتعيين هذا الخيار إلى نعم , فلن يتمكن من رؤية عنوان شارع مكان الإقامة سوى الضيوف الذين حجزوا بالفعل في مكان الإقامة الخاص بك. قد ترغب في استخدام هذا الإعداد لإخفاء موقع العقار بالضبط إذا , على سبيل المثال , يُترك بشكل روتيني دون رقابة. ") ;
jr_define('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'تحسين الصور عند التحميل؟');
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'عند التمكين , سيتم تحسين الصور للويب (يمكن أن يكون حجم الملف أصغر بنسبة 75٪). اعتمادًا على نوع الصورة التي تم تحميلها , يحتاج الخادم لديك إلى تثبيت واحدة أو أكثر من هذه المكتبات بواسطة الاستضافة المزود: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define('DATABASE_INTEGRITY_CHECK', 'فحص تكامل قاعدة البيانات') ;
jr_define('OBSOLETE_FILES_CHECK', 'فحص الملفات القديمة') ;
jr_define("DATATABLES_COLVIS", "رؤية العمود") ;

jr_define('API_TOKEN_LIFETIME', 'عمر الرمز المميز لواجهة برمجة التطبيقات') ;
jr_define('API_TOKEN_LIFETIME_DESC', 'كم من الوقت يظل رمز API صالحًا , بالثواني. 86400 = يوم واحد , 31536000 = سنة واحدة') ;

jr_define("ENCRYPTION_TITLE", "تشفير") ;
jr_define('ENCRYPTION_FILE_LOCATION', 'موقع ملف التشفير') ;
jr_define('ENCRYPTION_FILE_LOCATION_DESC', '** لا تحذف أبدًا ملف التشفير ** <br/> يتم تخزين بيانات المستخدم مشفرة في جداول لضمان حماية "البيانات غير النشطة" بشكل آمن , وفقًا لتوصيات القانون العام لحماية البيانات (GDPR). مفتاح التشفير افتراضيًا تم تخزينه في الملف "encryption_key.class.php" في جذر تثبيت Jomres (عادةً / public_html / jomres). يمكنك تغيير مكان تخزين الملف هنا. إذا قمت بتغيير الموقع , يجب عليك نقل الملف , لا تنتظر Jomres لإنشاء إصدار جديد وإلا فلن تتمكن من فك شفرة تفاصيل ضيوفك. ') ;

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'سيتم استخدام المعلومات التي تحفظها هنا في الفواتير التي تم إنشاؤها لهذه الخاصية') ;

jr_define('_JOMRES_GDPR_POLICIES', 'سياسات القانون العام لحماية البيانات') ;
jr_define("_JOMRES_GDPR_POLICIES_DESC", "هنا يمكنك تكوين المدة بعد إنشاء الحجز أو الفاتورة تتم إزالتها من النظام للتأكد من التزامك باللائحة العامة لحماية البيانات.") ;

jr_define("_JOMRES_GDPR_BOOKING_RETENTION", "فترة الاحتفاظ بالحجز (بالأيام)") ;
jr_define("_JOMRES_GDPR_BOOKING_RETENTION_DESC", "كم عدد الأيام التي يجب حذف الحجز بعد تاريخ مغادرة الحجز؟ عند حذفه , تتم إزالة كل من الحجز والفاتورة. قد تكون فترة الاحتفاظ النموذجية 365 يومًا.") ;

jr_define("_JOMRES_GDPR_INVOICE_RETENTION", "فترة الاحتفاظ بالفواتير (بدون حجز)") ;
jr_define('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'الفواتير الأخرى , مثل فواتير العمولة والاشتراك , غير مرتبطة بالحجوزات. نتيجة لذلك لن يتم حذفها عند حذف فواتير الحجز والعقود. اعتمادًا على بلدك وممارسات عملك الخاصة , ستحتاج إلى تكوين فترة استبقاء مختلفة. قد تكون فترة الاحتفاظ النموذجية 3653 يومًا , أي 10 سنوات.');


jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'بياناتك') ;
jr_define('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'تحتاج بعض ميزات هذا الموقع إلى تخزين معلومات حول زيارتك. يستخدم هذا فقط لتقديم الخدمة لك , ولا يتم مشاركته مع أي شخص آخر ويتم حذفه عند عدم الحاجة إليه.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'هل تمنحنا إذنًا لتخزين هذه المعلومات ؟؟') ;
jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'بالتفصيل') ;
jr_define('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'يجب أن توافق على قيامنا بتخزين هذه البيانات حتى تتمكن من إجراء الحجوزات على هذا الموقع. بغض النظر عما إذا كنت توافق على تخزين بياناتك أم لا , سنقوم بتخزين ملف تعريف ارتباط على جهاز الكمبيوتر الخاص بك لإخبارنا بما إذا كنت قد اشتركت أم لا. وهذا يساعدنا على التأكد من أننا لا نسألك باستمرار عما إذا كنت ترغب في ذلك أم لا الاشتراك أو عدم الاشتراك ولا يحتوي على أي معلومات تعريف شخصية (PII). إذا غيرت رأيك , يمكنك زيارة صفحة "أذونات التطبيق" في أي وقت للاشتراك أو إلغاء الاشتراك.');

jr_define('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'يتم تخزين المعلومات لفترات زمنية مختلفة اعتمادًا على طبيعة زيارتك. لذلك , إذا كنت تبحث فقط حولنا , فسنخزن معلومات الموقع الجغرافي التقريبي (مستوى الدولة). إذا أجريت عمليات بحث , فحينئذٍ اجعل نماذج البحث أكثر سهولة في الاستخدام , سنخزن آخر الأشياء التي بحثت عنها. يتم تخزين هذه المعلومات عادةً لمدة أقصاها 24 ساعة وتستخدم فقط لجعل زيارتك أكثر متعة. ') ;
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'عند إجراء حجز معنا , بحكم الضرورة يتم تخزين المزيد من المعلومات.') ;
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'يتم التقاط المواصفات الفنية لنموذج الحجز والاحتفاظ بها لمدة أقصاها 60 يومًا. هذا مطلوب حتى يمكن تحويل الحجوزات عند الطلب إلى حجوزات كاملة بمجرد الموافقة على الحجز , وللتحليل من قبل فرقنا في حالة وجود مشكلة في الحجز. إذا لم تكن قد سجلت الدخول عند إجراء الحجز , فسنرسل إليك اسم مستخدم وكلمة مرور بالبريد الإلكتروني حتى تتمكن من عرض سجل الحجز الخاص بك وممارسة حقك في أن تُنسى (RTBF) إذا كنت ترغب في القيام بذلك.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'يتم تخزين البيانات التي تم إدخالها في نموذج الحجز , على سبيل المثال الاسم وعنوان البريد الإلكتروني والعنوان الحقيقي لمدة أقصاها 365 يومًا بعد تاريخ مغادرة الحجز. يتم تخزين هذه المعلومات في شكل مشفر في قاعدة البيانات الخاصة بنا بحيث يمكن للأشخاص المصرح لهم فقط الاطلاع عليها. إذا قمت بإجراء حجز , فيجب علينا بموجب القانون تخزين معلومات تحديد الهوية الشخصية الخاصة بك أثناء صلاحية الحجز. بمجرد اكتمال الحجز , إما لأنه قد تم إلغاؤه أو تم تسجيل خروجك , ستتمكن من ممارسة RTBF عن طريق تسجيل الدخول وزيارة صفحة "بياناتك". ستظل معلومات الفاتورة للحجوزات المكتملة مخزنة بشكل آمن في قاعدة البيانات الخاصة بنا لضمان التزامنا بقوانين الضرائب ذات الصلة ولكنك ستتمكن من إزالة جميع معلومات تحديد الهوية الشخصية الأخرى بعد اكتمال الحجز.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'عندما توافق على تخزين معلوماتك كما هو موضح أعلاه , فنحن ملزمون قانونًا بتخزين هذه الموافقة في قاعدة بياناتنا. ستشمل هذه المعلومات رقم IP الخاص بك ومحتوى نموذج الاشتراك. سنحتفظ بإشعار الموافقة هذا إلى أجل غير مسمى (هذا مطلب قانوني).');

jr_define("_JOMRES_GDPR_CONSENT_NOT_SET", "لم تخبرنا بعد ما إذا كان بإمكاننا جمع معلومات التعريف الشخصية عنك") ;
jr_define("_JOMRES_GDPR_CONSENT_OPTED_IN", "لقد وافقت على قيامنا بجمع معلومات التعريف الشخصية الضرورية لإجراء الحجوزات") ;
jr_define("_JOMRES_GDPR_CONSENT_OPTED_OUT", "لقد أخبرتنا بعدم جمع معلومات التعريف الشخصية") ;

jr_define('_JOMRES_GDPR_NOCONSENT_INTRO', 'لم تمنحنا الإذن بجمع بياناتك الخاصة') ;
jr_define("_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT", "لكي تقوم بإجراءات معينة على هذا الموقع , يتعين علينا جمع معلومات تعريف شخصية عنك , لكنك لم تمنحنا الإذن للقيام بذلك.") ;
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'تغيير أذوناتك') ;
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'متابعة عرض الخصائص') ;

jr_define('_JOMRES_GDPR_APP_MENU_ITEM', 'أذونات التطبيق') ;

jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'بيانات الضيف') ;
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'هذه هي التفاصيل التي يتم تخزينها لك بواسطة الخصائص المختلفة. قد تحتفظ الفنادق المختلفة بسجلات مختلفة , اعتمادًا على ما أدخلته عند إجراء الحجز.') ;
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'ليس لديك أي بيانات مخزنة مع أي فنادق في هذا النظام') ;
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'بيانات الملف الشخصي') ;
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'هذه هي مجموعة البيانات الرئيسية التي نحتفظ بها لك , وهي تختلف عن تلك التي شاركتها بخصائص مختلفة.') ;
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'لم تقم بحفظ أي معلومات للملف الشخصي') ;
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'هذه هي المعلومات الشخصية التي نخزنها على موقع الويب هذا. تم إنشاؤها بتنسيق JSON (JavaScript Object Notation) وهو تنسيق خفيف لتبادل البيانات. الكتابة ومن السهل على الآلات التحليل والتوليد. ') ;

jr_define('_JOMRES_GDPR_REDACTION_STRING', 'مجهول الهوية') ;

jr_define('_JOMRES_GDPR_MY_DATA', 'بياناتك') ;
jr_define('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'بقبول اتفاقية شروط الاستخدام هذه ("الاتفاقية") , فإنك توافق على ما يلي:

<ul>
	<li>
		أنت مخول لحجز الفنادق من خلال هذا الموقع ;
	</li>
	<li>
		أن يكون عمرك 18 عامًا على الأقل ;
	</li>
	<li>
		لديك السلطة القانونية لإنشاء التزام قانوني ملزم ;
	</li>
	<li>
		ستستخدم الموقع وفقًا لهذه الاتفاقية ;
	</li>
	<li>
		لن تستخدم الموقع إلا لإجراء حجوزات مشروعة لنفسك أو لشخص آخر مخول لك قانونًا بالتصرف نيابة عنه ;
	</li>
	<li>
		ستبلغ هؤلاء الأشخاص الآخرين عن هذه الاتفاقية التي تنطبق على التحفظات التي أبديتها نيابة عنهم , بما في ذلك جميع القواعد والقيود المطبقة عليها ;
	</li>
	<li>
		جميع المعلومات التي قدمتها إلى الموقع صحيحة ودقيقة وحديثة وكاملة ; و
	</li>
	<li>
		ستحمي معلومات حسابك وستشرف وستكون مسؤولاً مسؤولية كاملة عن أي استخدام لحسابك من قبل نفسك وأي شخص آخر غيرك.
	</li>
</ul>
');
jr_define('_JOMRES_GDPR_MY_DATA_LEAD', 'الأمان والشفافية مهمان بالنسبة لنا.') ;
jr_define('_JOMRES_GDPR_MY_DATA_INTRO', 'نحن نتحمل مسؤولياتنا فيما يتعلق بتخزين بياناتك على محمل الجد. يتم تخزين جميع معلومات التعريف الشخصية (PII) مشفرة في قاعدة بياناتنا باستخدام خوارزميات قياسية صناعية لضمان أن المستخدمين المصرح لهم فقط يمكنهم عرض هذه المعلومات.') ;

jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'يمكنك تنزيل كل معلومات تحديد الهوية الشخصية التي نخزنها لك.') ;
jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'تنزيل الآن') ;

jr_define('_JOMRES_GDPR_MY_RTBF_LEAD', 'الحق في أن تُنسى (RTBF)');
jr_define('_JOMRES_GDPR_MY_RTBF_INTRO', 'نعتقد أنه يجب أن تكون قادرًا على حذف معلومات التعريف الشخصية الخاصة بك إذا كنت ترغب في ذلك وإذا كان ذلك ممكنًا. ');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'أنت غير مسجل في هذا الموقع. سيتم تخزين موقعك العام (الدولة) ورقم IP لمدة أقصاها 24 ساعة ثم يتم حذفها.') ;
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'أنت غير مسجل في هذا الموقع وقد اخترت عدم المشاركة في جمع البيانات. لم نقم بتخزين معلومات تحديد الهوية الشخصية الخاصة بك.') ;

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'أنت مسجل على الموقع وليس لديك أي حجوزات معلقة أو نشطة. يمكننا إخفاء معظم المعلومات التي نحتفظ بها لك حاليًا. هل ترغب في القيام بذلك؟') ;
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'ملاحظة: هذا لا يحذف حسابك , إنه ببساطة يخفي هوية سجلاتنا بحيث لا يمكن ربط حسابك بك كشخص. بموجب القانون , يجب أن نستمر في تخزين معلومات تحديد الهوية الشخصية الخاصة بك لأغراض تحرير الفواتير , ومع ذلك فإننا سنفعل ذلك. حذف كافة سجلات الضيوف. ') ;

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'أنت مسجل على الموقع , ومع ذلك لديك حجوزات معلقة ولا يمكننا إخفاء هوية بياناتك في هذا الوقت. سيتم الاحتفاظ بهذه البيانات لمدة عام واحد كحد أقصى بعد اكتمال الحجز , ثم يتم حذفه , إذا لم تختر إزالته قبل ذلك الوقت. ') ;
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'نظرًا لأنك مدير عقارات على موقعنا , لا يمكننا أن نوفر لك إمكانية حذف بياناتك تلقائيًا. بدلاً من ذلك , يرجى الاتصال بنا مباشرةً حتى نتمكن من تخصيص ملكيتك (ممتلكاتك) لمدير آخر. بمجرد قيامنا بذلك وإزالة حالتك كمدير عقارات , ستتمكن من حذف بياناتك تلقائيًا.');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'انساني!') ;
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'لا يمكن التراجع عن هذا!') ;
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'تم حذف بياناتك!') ;

jr_define('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'عذرًا , لا يمكنك إجراء حجز لأن عنوان بريدك الإلكتروني غير صالح') ;

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'تمنحك هذه الصفحة القدرة على إخفاء هوية أي ضيوف لديهم معلوماتهم مخزنة في النظام. يتيح لك هذا أن تكون متوافقًا مع اللائحة العامة لحماية البيانات , ولكن لا يمكنك تعديل أي معلومات أخرى في هذه الصفحة. للقيام بذلك , عليك تسجيل الدخول إلى الواجهة الأمامية كمدير للممتلكات. الافتراض هو أن ضيفًا تاريخيًا قد اتصل بك ليطلب منك السماح له بممارسة حقه في النسيان. إذا لم يتمكنوا من تسجيل الدخول إلى الواجهة الأمامية للموقع (ربما لم يتم إنشاء مستخدم لهم عند الحجز) , فيمكنك استخدام هذه المنطقة لإخفاء هويتهم بمجرد تأكيد هويتهم.');

jr_define("_JOMRES_GDPR_RTBF_ANONYMISE_GUEST", "ضيف مجهول") ;
jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY');
jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', "بيانات الضيف مجهولة المصدر") ;
jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'لا يمكن إخفاء الهوية') ;

jr_define('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'نحتاج إلى إذنك لتخزين معلوماتك قبل أن تتمكن من إجراء الحجز. انقر هنا لمنحنا الإذن.') ;

jr_define('_JOMRES_GDPR_CONFIG_ENABLE', 'تمكين وظائف متوافقة مع الناتج المحلي الإجمالي؟') ;
jr_define('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'لا نوصي بتعطيل وظيفة التوافق مع اللائحة العامة لحماية البيانات. يحتوي Jomres على ميزات مدمجة تساعدك على ضمان توافق قسم Jomres في موقعك مع اللائحة العامة لحماية البيانات (GDPR). إذا قمت بتعطيل هذه الميزة (ولا يجب عليك ذلك إذا كنت في الاتحاد الأوروبي أو كنت تتعامل مع مواطني الاتحاد الأوروبي) , فسوف يفترض Jomres تلقائيًا أن كل زائر للموقع قد منح الإذن بتمكين بياناته الشخصية. لن يتم عرض إذن التطبيق وصفحات بياناتي ولن يُطلب من المستخدمين منح الإذن بجمع البيانات.');


jr_define('EMPTY_TEMP_DIR', 'دليل مؤقت فارغ') ;
jr_define("EMPTY_TEMP_DIR_DONE", "تم حذف الملفات المؤقتة") ;

jr_define("MACHINE_TRANSLATION", "ترجمات آلية") ;
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', 'لغة المصدر');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'من الممكن ربط وظيفة الترجمة الآلية. يسمح لك هذا بإدخال سلاسل بلغة واحدة ويمكن سحب الترجمات من الخدمات البعيدة. كن على علم بأن جميع خدمات الترجمة لا تدعم جميع اللغات. راجع هذه الخدمات من أجل تفاصيل اكثر.');

jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'أنواع الغرف') ;
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'نوع غرفة جديدة') ;
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'يمكنك إنشاء وتحرير أنواع الغرف في هذه الصفحة. ستكون أنواع الغرف هذه خاصة بهذه الخاصية فقط. عند إعداد مكان الإقامة الخاص بك , ستحتاج أولاً إلى بعض أنواع الغرف. يمكنك استخدام أي من أنواع الغرف التي تم إنشاؤها بواسطة المسؤول , أو يمكنك إضافة نوع خاص بك. بمجرد أن يكون لديك نوع واحد أو أكثر من أنواع الغرف , يمكنك بعد ذلك إنشاء غرف من هذا النوع من الغرف. بعد أن يكون لديك غرف , يمكنك بعد ذلك إنشاء تعريفات (أسعار) لهذه الغرف لأن التعريفات مرتبطة بأنواع الغرف . ') ;
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', "يمكن للمديرين إنشاء أنواع الغرف؟") ;
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'استخدم هذا الخيار لتكوين ما إذا كان بإمكان المديرين إنشاء أنواع غرفهم الخاصة في الواجهة الأمامية أم لا. نوصي بشدة بترك هذا الخيار مضبوطًا على "لا" عند بدء استخدام Jomres لأول مرة , خاصة إذا كنت تقوم بإنشاء المدخل لأنه يجب عليك إنشاء جميع أنواع الغرف في منطقة المسؤول. ستظهر أنواع الغرف التي أنشأها المديرون في نماذج البحث , ولكن نظرًا لأن أنواع الغرف هذه خاصة بخصائص فردية , فسيتم عرض خاصية واحدة فقط في نتائج البحث إذا تم تحديد نوع الغرفة هذا عمليات البحث خلال فترات. إذا كنت ترغب في أن يتمكن مديرو العقارات المتميزون فقط من إنشاء أنواع الغرف , فاترك هذا الخيار معيّنًا على "نعم" واستخدم المكون الإضافي للتحكم في الوصول للسماح للمديرين المتميزين فقط بعرض خيار القائمة "الإعدادات> أنواع الغرف". الخصائص التي تستأجر فقط يمكن للغرف الخارجية في العقار واستخدام أوضاع تحرير التعريفة المتقدمة أو Micromanage استخدام هذا الخيار. لن تتمكن خصائص نوع الفيلا / الشقة من استخدامه. ');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'تم تحديث نوع الغرفة / الخاصية') ;
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'إظهار أنواع الغرف في خيارات البحث') ;
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'إذا اخترت السماح لمديري العقارات بإنشاء أنواع الغرف الخاصة بهم , فيمكنك اختيار ما إذا كنت تريد إظهار أنواع الغرف التي تم إنشاؤها في خيارات البحث حيث اخترت إظهار أنواع الغرف أم لا.');


jr_define('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "لا يجب إعادة استخدام نفس عنوان البريد الإلكتروني لكل حجز. <br/> إذا كان لديك نطاق فريد (على سبيل المثال , ليس عنوان بريد إلكتروني gmail) لشركتك , فاستخدم رقم هاتف الضيف كعنوان بريدهم الإلكتروني. سيبدو عنوان البريد الإلكتروني بعد ذلك على النحو التالي 123456@mydomain.com <br/> سيضمن هذا إنشاء ضيف جديد عند إنشاء حجز. ");

jr_define('_JOMRES_LOGIN_USERNAME', 'عنوان البريد الإلكتروني') ;
jr_define('_JOMRES_LOGIN_PASSWORD', 'Password') ;
jr_define('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "يسعدنا أنك ترغب في الحجز معنا مرة أخرى. لتتمكن من إدارة جميع حجوزاتك معًا , من الضروري أن تقوم بتسجيل الدخول حتى يمكن إضافة الحجز إلى حسابك. هذا أيضًا يضمن أنك مخول باستخدام عنوان البريد الإلكتروني المقدم. ") ;

jr_define("_JOMRES_LOGIN_RESET_MESSAGE", "إذا كنت لا تعرف كلمة المرور الخاصة بك , فيمكننا أن نرسل إليك بريدًا إلكترونيًا لإعادة تعيين كلمة المرور. يرجى اتباع التعليمات الواردة في هذا البريد الإلكتروني لإعادة تعيين كلمة المرور الخاصة بك.") ;
jr_define('_JOMRES_LOGIN_RESET_BUTTON', 'هل نسيت كلمة المرور؟') ;

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'هل تريد إخفاء اسمك؟') ;
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'إذا اخترت إخفاء اسمك عند المراجعة , فسنستخدم الأحرف الأولى من اسمك بدلاً من ذلك.') ;
jr_define("مجهول", "مجهول") ;

jr_define('_JOMRES_REVIEWS_REPLY_SAID', 'قال') ;
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'رد على هذه المراجعة') ;
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'اكتب ردك على هذه المراجعة هنا.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'ردك') ;
jr_define("_JOMRES_REVIEWS_REPLY_COMMENT", "المراجعة الرئيسية") ;
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'مراجعة الرد المحفوظة') ;


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'قبل إرسال رد المراجعة , يجب عليك قراءة ما يلي. بإرسال الرد , فإنك تؤكد موافقتك على هذه البنود والشروط.') ;
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'ما هي إرشاداتنا للرد على المراجعة؟') ;
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'أنت ترد على مراجعة الممتلكات الخاصة بك. <em> يجب ألا </ em> تستخدم ردك كعملية نزاع تجاري. إذا كنت بحاجة إلى الإبلاغ عن مراجعة , فيجب عليك استخدام "تقرير زر "مراجعة" في القائمة , وليس صفحة رد المراجعة هذه. ');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'بمجرد ترك ردك لن تتمكن من تحريره.') ;

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'مسموح بها ومشجعًا') ;
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> الرد الكامل على المراجعة. </ li>
    <li> المجاملة والصدق. </ li>
    <li> ردود منطقية على مشكلات المراجع (تذكر , قد يواجه الآخرون مشكلات مماثلة لكنهم لم ينتهزوا الفرصة لنشر مراجعة). </ li>
    <li> شجع الضيف على الاتصال بك مباشرةً لحل المشكلات.
    <li> تذكر دائمًا أن الضيوف في المستقبل سيرون ردك. احرص على أن تكون محترفًا في جميع الأوقات. </ li>
</ul>
') ;

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'غير مسموح به') ;

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> النزاعات التجارية. </ li>
    <li> أسئلة للمراجع أو للآخرين. </ li>
    <li> لغة مشكوك فيها (بما في ذلك السب). </ li>
</ul>
') ;

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'آخر تشغيل') ;
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'جدول') ;


jr_define('_JOMRES_INVOICE_NUMBERS', 'أرقام الفاتورة') ;

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'استخدام أرقام الفواتير المخصصة؟') ;
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'يمكنك تكوين النظام لاستخدام أرقام الفواتير المخصصة. ستتأثر الفواتير الجديدة فقط.') ;

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'رقم البداية') ;
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'يتم إنشاء الأرقام على التوالي. ماذا يجب أن يكون الرقم الأول؟') ;

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'ما التنسيق الذي يجب أن يتخذه رقم الفاتورة؟') ;
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'تكوين تنسيق رقم الفاتورة هنا. يمكن أن يبدو التنسيق مثل {N} / {D} أو {N} / {Y} حيث N هو الرقم الذي تم إنشاؤه تلقائيًا , D = التاريخ بالتنسيق YYYYYMMDD ( 20190131) أو Y = YYYY (2019). سيتم ترك أي أحرف رقمية أبجدية أخرى غير محاطة بأقواس معقوفة بمفردها , لذا فإن النمط الذي يبدو مثل {N} / {D} -L سينتج عنه رقم فاتورة (21) يشبه 21/2019-L ') ;

jr_define('_JOMRES_SURCHARGE_TITLE', 'رسوم إضافية') ;
jr_define('_JOMRES_SURCHARGE_DESC', 'رسم إضافي يتم إضافته إلى الغرفة عند الحجز (يتم احتسابه يوميًا)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF') ;


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'إعطاء الأولوية للتسميات على مستوى الموقع؟') ;
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Cالنص المخصص المحفوظ في تحرير الملصق أو صفحات سلاسل ملف lang المترجمة تعتبر تسميات "على مستوى الموقع". يمكن لمديري العقارات أيضًا تخصيص التسميات لكل خاصية باستخدام ميزة تحرير التسمية في الواجهة الأمامية. يسمح هذا لمدير الممتلكات بالحصول على نصوص مختلفة لممتلكاته , وهو أمر مفيد إذا كانت الخاصية مختلفة عن جميع الخصائص الأخرى على الموقع. <br/> عندما يبحث النظام عن نصوص التسمية , فإنه يعطي الأولوية للنصوص على مستوى الموقع على نصوص خاصة بالخاصية مما يعني أنه في حالة وجود نص على مستوى الموقع لتلك التسمية , سيختار النظام ذلك أولاً. إذا قمت بتعيين هذا الخيار على "لا" , فسيعطي النظام الأولوية للنصوص الخاصة بالخاصية على النصوص على مستوى الموقع.');

jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres');

jr_define('_JOMRES_LIBRARY_PACKAGES', 'حزم المكتبة') ;
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'المورّد ووحدات العقدة هي حزم (مجانية) لـ Jomres. يمكنك إعادة تثبيت الحزم على هذه الصفحة.') ;
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'أعد تثبيت حزم المكتبة') ;

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'غير قادر على حذف نوع الخاصية لأنه لا يزال مستخدمًا من قبل بعض الخصائص. يجب تغيير هذه الخصائص إلى نوع خاصية آخر أولاً قبل محاولة حذف هذه الخاصية. UIDs الخاصة بالخاصية التي تمنع الحذف:');
jr_define('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'غير قادر على إلغاء نشر نوع الخاصية لأنه لا يزال مستخدمًا من قبل بعض الخصائص. يجب تغيير هذه الخصائص إلى نوع خاصية آخر أولاً قبل محاولة إلغاء نشر هذه الخاصية UIDs التي تمنع التغيير:') ;

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'عناوين بريد إلكتروني عشوائية');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'تقديم رسائل بريد إلكتروني عشوائية') ;
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'يمكنك السماح للنظام بإنشاء عناوين بريد إلكتروني عشوائية في قائمة الحجز السريع المنبثقة في لوحة التحكم. وهذا يسمح للمديرين وموظفي الاستقبال بإنشاء حجوزات للضيوف ليس لديهم عناوين بريد إلكتروني لهم , والغرض من ذلك هو العمل كموفر للوقت للمواقع التي بها العديد من موظفي الاستقبال / المديرين الذين يدركون أن رسائل البريد الإلكتروني العشوائية هذه لن تُستخدم أبدًا للتواصل الحقيقي , والغرض من ذلك هو الالتفاف على حقيقة أن جميع الضيوف في Jomres يجب أن يكون لديهم عناوين بريد إلكتروني. يجب عليك أيضًا توفير مجال في الحقل التالي. ') ;
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'مجال رسائل البريد الإلكتروني العشوائية') ;
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'لا ينبغي أن يكون هذا مجال بريد إلكتروني عاديًا , مثل gmail أو Outlook. بدلاً من ذلك , يمكن أن يكون المجال الخاص بك , أو أي شيء آخر تمامًا , مثل mysite.emails');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'منطقة التحميل') ;
jr_define('_LIST_USERS_LEGEND_NOROLE', 'لا يوجد دور مستخدم') ;
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'موظف استقبال') ;
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'مدير الملكية') ;
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'سوبر مدير عقارات') ;
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'معلق') ;
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'محذوف من نظام إدارة المحتوى') ;


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'إذا كنت تحب Jomres , فالرجاء التفكير في ترك تعليق على أحد هذه المواقع') ;
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'أنا شخص لطيف , لقد تركت تعليقًا بالفعل') ;

jr_define('_LICENCE_PROMPT_DEAR', 'عزيزي') ;
jr_define('_LICENCE_EXPIRED', ', انتهت صلاحية مفتاح ترخيص Jomres الخاص بك , لذلك فقد `` تفتقد هذه الميزات والفوائد الرائعة!') ;
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'تحديثات المكوّن الإضافي وإصدارات المكوّن الإضافي الجديد') ;
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'الأعضاء الحصريون فقط دعم البريد الإلكتروني / التذاكر') ;
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'تحديثات Jomres Core الخالية من القلق');
jr_define('_LICENCE_EXPIRED_POST', 'اتصل بنا للحصول على حلول دفع خالية من المتاعب والوصول إلى جميع المكونات الإضافية وخدمات الدعم المخصصة للأعضاء فقط.') ;
jr_define('_LICENCE_EXPIRED_RESTART', 'احصل على حق الوصول إلى جميع المكونات الإضافية الآن!') ;

jr_define('_LICENCE_INVALID_KEY', 'للأسف لا يبدو أنك تستخدم مفتاح ترخيص Jomres صالحًا , لذلك أنت مفقود في هذه الميزات والفوائد الرائعة!') ;
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> المكونات الإضافية </a> التي توسع بشكل كبير وظائف Jomres') ;
jr_define('_LICENCE_INVALID_BENEFITS_2', 'الأعضاء الحصريون فقط دعم البريد الإلكتروني / التذاكر') ;
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'اتصل بنا للحصول على حلول دفع خالية من المتاعب والوصول إلى جميع المكونات الإضافية وخدمات الدعم المخصصة للأعضاء فقط.') ;
jr_define('_LICENCE_INVALID_START', 'احصل على حق الوصول إلى جميع المكونات الإضافية الآن!') ;

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'لوحة القيادة');
jr_define("_ADMIN_MENU_SECTIONS_USERS", "المستخدمون") ;
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'لجنة') ;
jr_define("_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS", "الاشتراكات") ;
jr_define("_ADMIN_MENU_SECTIONS_INVOICES", "الفواتير") ;
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'منفذ') ;
jr_define("_ADMIN_MENU_SECTIONS_TRANSLATIONS", "ترجمات") ;
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'أدوات') ;
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'تقارير') ;
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'إعدادات') ;
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'مساعدة') ;

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'إجمالي الخصائص في النظام') ;
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'الخصائص المنشورة') ;
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'خصائص غير منشورة') ;
jr_define("_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED", "الخصائص المعتمدة") ;
jr_define("_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL", "الخصائص تتطلب الموافقة") ;

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'إجمالي المراجعات') ;
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'مراجعات غير منشورة') ;
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'مراجعة التقارير') ;

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info') ;

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "لم يتم نشر نوع خاصية هذه الخاصية , قد لا تظهر في نتائج البحث. يرجى الاتصال بمسؤول الموقع لنشر نوع الخاصية , أو تغيير نوع الخاصية في صفحة تحرير الخاصية.") ;
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'تحديث نوع الخاصية') ;


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'الدخل (المبالغ المدفوعة)') ;
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'لا يمكن حذف خاصية الخاصية ');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"لأنها مستخدمة بواسطة الخاصية (الخصائص) التالية:') ;


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API اختبار') ;
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', "تقوم هذه الصفحة بإجراء اختبار أساسي لواجهة برمجة تطبيقات REST باستخدام وظائف مدمجة في Jomres. تستدعي Jomres REST API لمعرفة ما إذا كانت تتلقى استجابة صحيحة.") ;
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'الخادم دعا عنوان URL هذا لمعرفة ما إذا كانت الاستجابة صالحة:');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'تلقت الصفحة هذا الرد:') ;
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'يبدو أن الاختبار يسير كما هو متوقع , ربما لن تواجه أي مشكلة في تلقي طلبات REST API من بقية الإنترنت.') ;
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'فشل الاختبار , ابحث في حقل الاستجابة , إذا كان يبدو أنه يحتوي على الكثير من html , أو تلقيت رسالة 404 , فإن الخادم الخاص بك يعيد توجيه المكالمات إلى عنوان url آخر. وهذا سيمنعك من تلقي واجهة برمجة التطبيقات المكالمات.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'اختبار المشاركة') ;
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'يحتفظ خادم تطبيقات Jomres بقائمة بجميع مواقع Jomres. وهذا يسمح لنا ببناء شبكة مشاركة. تم تصميم هذه الشبكة للسماح لمستخدمينا بعرض الخصائص من المواقع الأخرى المفيدة على مواقعهم الخاصة خاصة بالنسبة للمواقع الجديدة , لبناء وجود SEO على الشبكة. الهدف هو أن تعمل جميع مواقع Jomres معًا , وبناء الثقة في الشبكة. لا توجد رسوم مقابل هذه الخدمة. ') ;
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'موقعك غير مدرج حاليًا على خادم تطبيقات Jomres , وهو جزء من شبكة المشاركة. سيحاول هذا الخادم مرة أخرى إضافة هذا الخادم إلى الشبكة عند تحميل الصفحات الستة التالية. عدد قليل من تحميل الصفحات , وهذا لا يتغير , يرجى التحقق من أن اختبار الاتصال أعلاه يجتاز الاختبارات. ملاحظة , لا يمكن إضافة خوادم المضيف المحلي إلى الشبكة. ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'تهانينا , خادمك مُدرج في خادم تطبيقات Jomres.') ;

jr_define('_JOMRES_SYNDICATION_TITLE', 'خصائص مشتركة') ;
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'هذه بعض الخصائص الأخرى المتاحة من شبكة الممتلكات الخاصة بنا') ;


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'إحصائيات المشاركة') ;
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'تهانينا , خادمك مُدرج في شبكة Jomres Syndication Network. سيبدأ موقعك (ملكياتك) في الظهور على مواقع Jomres الأخرى قريبًا , إذا لم يتم عرضها بالفعل.') ;
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'إن التثبيت ليس جزءًا من شبكة Jomres Syndication Network , وبالتالي لا يتم عرض الممتلكات الخاصة بك على المواقع الأخرى المستندة إلى Jomres ولا يمكنك الاستفادة من هذه الإعلانات المجانية.') ;
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'تثبيتات Jomres النشطة:') ;
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'العدد الإجمالي لعمليات تثبيت Jomres التي تشارك خصائص Jomres Syndication Network على مواقعها.') ;
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'إجمالي الخصائص:') ;
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'هذا هو عدد الخصائص المتاحة في JSN.') ;
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'عرض الخاصية الإجمالية:') ;
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'In total, all of the times a Jomres property has been linked to from another Jomres based site.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'شبكة نقابة جومريس (JSN) هي ميزة مجانية متاحة لجميع مستخدمي جومريس. والغرض من ذلك هو تزويدك بإعلانات مجانية عن ممتلكاتك على مواقع أخرى مقرها جومريس. الهدف هو مساعدتك في إطلاق موقعك بسرعة , وتقديم إعلانات مجانية حتى يتم التعرف على ممتلكاتك وموثوق بها لأنها مرتبطة بمواقع ويب عالية الثقة وذات صلة عالية ومعروفة بالفعل لمحركات البحث. See this <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank">article on our website</a> and <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank">the manual</a>  for more information.');


jr_define('GUEST_PROFILE_INFORMATION', 'هذه هي بيانات ملف تعريف الضيف , الحقول التي تحتوي على هذا الرمز <i class = "fa fa-users" aria-hidden = "true"> </i>
 مرئية للعامة , في حين أن الحقول التي تحتوي على هذا الرمز <i class = "fa fa-user-secret" aria-hidden = "true"> </i> يمكن رؤيتها أنت ومضيفك ومسؤولو الموقع فقط. <br/> <br/> يمكن للمضيفين رؤية المعلومات الخاصة فقط إذا كنت قد أنشأت بالفعل حجزًا معهم. <br/> <br/> يتم تشفير معلوماتك وتخزينها بأمان في قاعدة البيانات الخاصة بنا باستخدام تشفير AES-256. ') ;

jr_define('GUEST_PROFILE_OPTIONAL', 'هذه الحقول اختيارية , ومع ذلك قد يستخدم المضيفون المعلومات الواردة هنا لتحديد ما إذا كانوا يشعرون أنه يمكنهم الوثوق بك , لذلك من الأفضل إضافة المعلومات. تذكر أنك تطلب البقاء في ممتلكاتهم , وقد يرفضونك إذا شعروا أنك لست مناسبًا أو أن سيرتك الذاتية لا تحتوي على معلومات كافية.');

jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'رخصة قيادة') ;
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'رقم جواز السفر') ;
jr_define('GUEST_PROFILE_IBAN', 'رقم IBAN') ;
jr_define('GUEST_PROFILE_ABOUT_ME', 'نبذة عني') ;
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'يمكن عرض قسم "نبذة عني" هذا للجمهور , لذا لا تضع أي معلومات خاصة. بعد قولي هذا , ابذل جهدًا لتضع قدر ما تشعر بالراحة في المشاركة مثل شغفك , وما تفعله من أجل لقمة العيش , وهواياتك وما إلى ذلك. يمكنك استخدام Markup لمنحه القليل من موسيقى الجاز. سيرغب المضيفون في الشعور بأنهم يستطيعون الوثوق بك في ممتلكاتهم. تأكد من أن صورتك هي صورة حقيقية لك , وليست لكلبك أو سيارتك (نعم , يا رفاق , نحن نتحدث إليكم!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'أدخل أي متطلبات خاصة قد تكون لديك , مثل سهولة الوصول إلى الاحتياجات هنا. لن تظهر في ملفك الشخصي العام ولكن ستتم إضافتها إلى معلومات الحجز عند إجراء الحجز.') ;

jr_define('VIEW_HOST_PROFILE', 'الملف الشخصي للمضيف') ;

jr_define('GUEST_PROFILE_TITLE', 'ملف تعريف الضيف') ;
jr_define('GUEST_PROFILE_TITLE_MY', 'ملفي');


jr_define('GUEST_PROFILE_WELCOME', 'مرحبًا , دعني أخبرك قليلاً عن نفسي.') ;
jr_define('GUEST_PROFILE_MY_NAME', 'اسمي') ;
jr_define('GUEST_PROFILE_I_COME_FROM', 'وأنا أتيت من');
jr_define('GUEST_PROFILE_IN', 'region in') ;

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'معلوماتي الخاصة') ;
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'نحن نبذل قصارى جهدنا للتحقق من صحة معلومات الضيف والمضيف , ولكن يجب عليك بذل العناية الواجبة الخاصة بك وتقرر بنفسك ما إذا كان هذا الشخص جديرًا بالثقة أم لا.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'ممتلكاتي') ;
jr_define('GUEST_PROFILE_MY_REVIEWS', 'مراجعاتي') ;
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'هذا ما قلته عن هذه الخاصية:') ;
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'لقد أعطيت هذه الخاصية درجة تصنيف:') ;
jr_define('GUEST_PROFILE_MY_REVIEWS', 'مراجعاتي') ;
jr_define('GUEST_PROFILE_OF_ME', 'ماذا يقول الآخرون عني');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'ما قاله هذا المضيف عني') ;

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'مراجعة الضيف') ;
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'تقييمي لهذا الضيف') ;
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'فيما يلي بعض الأمثلة على تقييمات الضيوف للحصول على الكرة المتدحرجة:<br/>
	
	<ul>
	<li>(اسم الضيوف) كان من دواعي سروري أن تستضيف! لقد تركوا المكان نظيفًا وكانوا هادئين طوال عطلة نهاية الأسبوع. كان لديهم تواصل سلس وأنا أتطلع إلى جعلهم يبقون معي مرة أخرى!</li>
    <li>لقد أحببت وجود (اسم الضيف) لأنهم كانوا قادرين على التعامل مع المكان باحترام , وقضاء وقت رائع والاستمتاع بالمنطقة. لقد كانوا رائعين في استئجار المساحة وآمل أن أتمكن من استضافتهم مرة أخرى.</li>
    <li>تم احترام جميع قواعد منزلي مع (اسم الضيف) وكانوا قادرين على الدخول والخروج بسهولة. أحببت وجودهم هناك لأنهم كانوا محترمين وهادئين. أنا أوصي بهم بشدة للآخرين!</li>
	</ul>

');


jr_define('GUEST_PROFILE_UNKNOWN', 'عذرًا , لا يمكنني العثور على هذا المستخدم. على الأرجح لم يملأوا تفاصيل حسابهم حتى الآن.') ;

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'ضيف') ;
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'مضيف') ;
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'مشرف') ;

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres مبني على إطار عمل Bootstrap , لذلك يجب عليك استخدامه على سمة تستند إلى Bootstrap. نوصي بواحد يعتمد على Bootstrap 3. إذا لم يكن لديك حق الوصول إلى سمة , فنوصيك باستخدام موضوع Jomres Leohtian لـ Wordpress والذي يمكنك <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank "> تنزيل من هنا. </a> ') ;


jr_define('BOOKING_NOSHOW_MENU', 'وضع علامة كـ No Show') ;
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'تم وضع علامة على الحجز على أنه لا يوجد عرض') ;
jr_define("BOOKING_NOSHOW_BOOKINGS", "الحجوزات") ;
jr_define('BOOKING_NOSHOW_NOSHOWS', 'لا عروض') ;
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'إحصائيات JSN لهذا المستخدم') ;

jr_define('BOOKING_NOSHOW_INFO', 'تم سحب معلومات الحجز وعدم الحضور من شبكة نقابة جومرس في وقت الحجز. يتم أخذها من بيانات مجهولة المصدر ويمكن استخدامها من قبلك لتحديد ما إذا كان هذا الضيف يمثل مخاطرة بعدم إتمام الحجز. إذا أبلغ النظام أن البيانات غير معروفة , ربما يكون ذلك بسبب عدم التعرف على هذا النظام على الشبكة. ') ;

jr_define('BOOKING_NOSHOW_UNKNOWN', 'غير معروف');

jr_define('CMF_CONFIG_TITLE', 'Channel Management Framework') ;
jr_define('CMF_CONFIG_KEY', 'Channel Management Framework Key') ;
jr_define('CMF_CONFIG_KEY_DESC', 'مفتاح ترخيص Channel Management Framework. ستحتاج إلى توفير هذا المفتاح لتتمكن من تنزيل مكونات Channel Management Framework الإضافية.') ;

jr_define("_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED", "لم تتم الموافقة على ملكيتك") ;
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "لم تتم الموافقة على ملكيتك. إذا كنت تعتقد أن هذا تم عن طريق الخطأ , فيرجى الاتصال بنا.") ;


jr_define('_JOMRES_GUESTTYPES_IS_CHILD', "هل هذا نوع ضيف طفل؟");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "اضبط هذا على نعم إذا كان نوع الضيف هذا سيصنف كنوع ضيف طفل.") ;

jr_define('_JOMRES_GUESTTYPES_INTRO', "إذا كنت تريد تحصيل رسوم لكل شخص في الليلة , فستحتاج إلى إنشاء بعض أنواع الضيوف.") ;
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS', 'يمكنك إنشاء أي عدد تريده من أنواع الضيوف , حاول البدء بإنشاء نوع ضيف واحد فقط يسمى "الكبار". اترك كل الإعدادات في قيمها الافتراضية. بعد ذلك , إذا كنت ترغب على سبيل المثال في منح الأطفال الأقل من 12 عامًا خصمًا بنسبة 50٪ , يمكنك إنشاء نوع ضيف جديد , وتسميته "الأطفال دون سن 12". اضبط الخيار "إضافة تباين؟" الخيار إلى - (سلبي) وضبط "التباين" على 50. هذا يعني أنه عند إضافة أطفال إلى حجز , يتم تحصيل 50٪ من تكلفة الغرفة للغرفة.');

jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "تعيين الأسعار يدويًا") ;
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "تعيين الحد الأدنى لليالي يدويًا") ;
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "تعيين الحد الأدنى لليالي") ;

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "تعيين <em> سعر الليلة </ em> حسب يوم الأسبوع") ;
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "تعيين <em> سعر الليلة </ em> حسب النطاق الزمني") ;
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "عيِّن <em> الحد الأدنى لليالي </ em> حسب النطاق الزمني") ;

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "يسمح لك منتقي التاريخ ومدخلات السعر بتعيين سعر واحد لنطاق تاريخ معين. اختر تاريخ البدء والانتهاء , وأدخل السعر , وانقر فوق الزر تعيين السعر لكل ليلة.") ;
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', 'يتيح لك منتقي التاريخ وإدخال الحد الأدنى لليالي تعيين قيمة واحدة للحد الأدنى من الليالي لنطاق زمني معين. اختر تاريخ البدء والانتهاء , وأدخل رقمًا للحد الأدنى من الليالي , وانقر فوق "تعيين الحد الأدنى لليالي".');

jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "استخدم هذه القائمة المنسدلة للتغيير بين تحديد الأسعار للتواريخ الفردية وتعيين الحد الأدنى لليالي للتواريخ الفردية. يمكنك استخدام منتقي <em> حسب اليوم من الأسبوع </ em> , <em> حسب التاريخ نطاق </em> أو تعيين الأسعار / الحد الأدنى من الليالي عن طريق تعديل التواريخ يدويًا. ") ;
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "استخدم هذه القائمة المنسدلة للتغيير بين تحديد الأسعار للتواريخ الفردية وتعيين الحد الأدنى لليالي للتواريخ الفردية. يمكنك استخدام منتقي <em> حسب النطاق الزمني </ em> أو تعيين الأسعار / الحد الأدنى لليالي حسب تعديل التواريخ يدويًا. ") ;
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "تحديد الأسعار أو الحد الأدنى لليالي") ;

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW', "تعيين <em> الحد الأدنى لليالي </ em> حسب يوم الأسبوع") ;
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "تسمح لك حقول اليوم من الأسبوع بتعيين الحد الأدنى لعدد الليالي ليوم معين من الأسبوع , بمجرد النقر فوق زر يوم من الأسبوع , سيتم تعيين جميع أيام الأسبوع على إعداد الحد الأدنى من الليالي. ") ;


jr_define('_JOMRES_MICROMANAGE_MANUALLY', "حدد الأسعار يدويًا / الحد الأدنى من الليالي") ;
jr_define('_JOMRES_MICROMANAGE_SET_PRICES', "تحديد الأسعار") ;
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS', "تعيين الحد الأدنى لليالي") ;

jr_define('_JOMRES_MICROMANAGE_PRICE', "في الليلة") ;
jr_define('_JOMRES_MICROMANAGE_MINDAYS', "عدد الليالي") ;
jr_define('_JOMRES_MICROMANAGE_MAXDAYS', "الحد الأقصى لليالي") ;

jr_define('_JOMRES_MICROMANAGE_INTRO', "هنا يمكنك إنشاء تعريفات مرتبطة بأنواع الغرف الموجودة في ملكيتك.") ;

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "الخيارات الأكثر استخدامًا") ;

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON', "التعليمات") ;

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "إذا كنت تريد إضافة أسعار مختلفة لأعداد مختلفة من الضيوف , فبإمكانك <em> إنشاء أكثر من عدة تعريفات لكل نوع غرفة </ em> والحصول على قيم مختلفة للحد الأدنى / الأقصى للضيوف في تلك التعريفات. ") ;

jr_define('_JOMRES_MICROMANAGE_INFO', "امنح التعرفة اسمًا , وحدد الحد الأقصى لعدد الليالي , والحد الأدنى والحد الأقصى لعدد الضيوف المطلوبين في نموذج الحجز قبل تقديم التعريفة. <br/> <br/> الاستخدام لوحة منتقي التاريخ لإضافة الأسعار وإعدادات الحد الأدنى لليالي إلى نطاق من التواريخ , أو تحرير المدخلات مباشرة. إذا كنت لا تريد عرض التعريفة على الإطلاق في تواريخ معينة , فاترك السعر مضبوطًا على 0 (صفر) في هذه التواريخ. <br/> <br/> يمكن أن يكون لديك حد أدنى مختلف لليالي في تواريخ مختلفة , لذلك إذا كنت تريد حجوزات أطول خلال أسابيع المهرجان / المؤتمر , فيمكنك تعيين عدد الليالي ليكون أعلى في تلك الفترات فقط. <br / > <br/> إذا كنت تفرض رسومًا على كل شخص لكل شخص (PPPN); فيمكنك تمكين هذا الإعداد في الإعدادات> تكوين الموقع> علامة التبويب التعريفات والعملة , ثم إنشاء أنواع الضيف التي تريدها في الإعدادات> أنواع الضيوف. ") ;

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "خيارات إضافية") ;

jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "هذه خيارات إضافية ليست شائعة الاستخدام , ولكنها متاحة لك. <br/> <strong> تجاهل PPPN </strong> يعني التجاهل لكل شخص في الليلة. يمكنك الحصول على العديد من التعريفات المختلفة لنوع الغرفة نفسه , على سبيل المثال , يتم فرض رسوم على كل شخص في الليلة , وتكلفة أخرى. <br/> <strong> السماح بعطلات نهاية الأسبوع </ strong> يمنحك خيار السماح بعطلات نهاية الأسبوع خيار فرض تعريفة فقط متاح خلال أيام الأسبوع , على سبيل المثال إذا كنت تريد تعريفة خاصة للمسافرين من رجال الأعمال. في هذه الحالة , يمكنك تعيين الخيار إلى لا والليالي الدنيا على ليلة واحدة والحد الأقصى لليالي , على الأكثر 5. <br/> <strong> عطلات نهاية الأسبوع فقط </strong> خيار عطلات نهاية الأسبوع هو عكس خيار السماح بعطلة نهاية الأسبوع. ما تعتبره أيام عطلة نهاية الأسبوع يمكن تكوينه في إعدادات تكوين الموقع. يمنحك هذا القدرة على تحديد سعر عطلة نهاية الأسبوع فقط الذي قد ترغب في عرض للمناسبات الخاصة. <br/> <strong> تسجيل الوصول يوم من الأسبوع </strong> يمنحك هذا الخيار القدرة على فرض تسجيل الوصول في أيام معينة فقط من الأسبوع , ويُفضل استخدامه جنبًا إلى جنب مع تكوين الخاصية> علامة التبويب الحجوزات> خيارات الفترات الثابتة. سيرغب غالبية المستخدمين في ترك هذا الخيار معينًا على الكل. <br/> الخياران الأخيران , <strong> الحد الأدنى للغرف المحددة بالفعل </ strong> و <strong> الحد الأقصى للغرف المحددة بالفعل </ strong> متخصصان للغاية و مفيد للعقارات ذات التعريفات المعقدة للغاية. <em> ما لم تكن لديك حاجة محددة , يجب ترك هذه الخيارات بمفردها. </ em> استخدمها إذا كنت تريد فقط عرض هذه التعريفة عندما يكون الضيف قد حدد بالفعل عدد N من الغرف في نموذج الحجز , على سبيل المثال يمكن أن يكون لديك تعريفة أساسية واحدة حيث يتم ترك هذه الخيارات على الوضع الافتراضي , وتعريفة ثانية حيث يتم تعيين خيار الحد الأدنى للغرف المحدد بالفعل على 1 , ثم يتم تقديم هذه التعريفة الثانية في نموذج الحجز بمجرد تحديد الغرفة ") ;

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "يمكنك إنشاء تعريفات متعددة لنفس نوع الغرفة , بحيث يمكنك إنشاء تعريفة واحدة على الأقل / الحد الأقصى للأيام من 1 - 7 وتعريفة ثانية حيث يكون الحد الأدنى للأيام 7 , والحد الأقصى للأيام 14 , و وهكذا. يتيح لك هذا إنشاء مخططات تسعير بسيطة أو معقدة حسب حاجتك. كما يتيح لك إنشاء تعريفات متعددة بشروط مختلفة , بحيث يمكنك الحصول على مجموعة ثانية من التعريفات حيث يكون سعر المبيت والإفطار أقل , و مجموعة أخرى من التعريفات الأكثر تكلفة على المبيت والإفطار ووجبة العشاء. ") ;

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "تعيين أيام منتقي التاريخ فقط") ;
jr_define("_JOMRES_PROPERTY_HCATEGORIES", "فئات الممتلكات") ;
jr_define('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'تحرير فئة الخاصية') ;
jr_define('_JOMRES_STOP_READTHISFIRST1', "توقف!");
jr_define('_JOMRES_STOP_READTHISFIRST2', "شكرًا لك على تثبيت Jomres") ;
jr_define('_JOMRES_STOP_READTHISFIRST3', "تتم إدارة الممتلكات في الصفحات المواجهة العامة , وليس في منطقة المسؤول.") ;
jr_define('_JOMRES_STOP_READTHISFIRST4', "إذا لم تكن معتادًا على Jomres , فيرجى زيارة قسم المساعدة> صفحة البدء.") ;


jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE', "انضم إلى نقابة Jomres") ;
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC', "بمجرد الانتهاء من إعداد موقعك والاستعداد لبدء استقبال الزوار , انضم إلى نقابة Jomres.net واحصل على خصائصك المدرجة في مواقع Jomres الأخرى.") ;



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "أنت بحاجة إلى غرفة واحدة على الأقل من أحد الأنواع التالية قبل أن تتمكن من إنشاء تعريفة:");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "انتقل إلى الإعدادات> الغرف وأنشئ غرفة أولاً , بمجرد الانتهاء من ذلك , ستتمكن من إنشاء تعريفة لهذا النوع من الغرف.") ;

jr_define('JOMRES_PLATFORM', "منصة جومريس") ;


jr_define('JOMRES_PLATFORM_CONNECTED', "متصل");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC', "اضبط هذا على نعم إذا كنت قد قمت بالفعل بتوصيل حساب Stripe الخاص بك مع منصة Jomres.") ;

jr_define('JOMRES_PLATFORM_ACCOUNT_ID', "رقم حساب Stripe Live") ;
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "This is your Stripe Account id which can be found in your Stripe Dashboard under Settings > Account information and looks like acct_xxxxxxxxx You would use this field if you have multiple Jomres installations and you want to use the same account across all sites and you have already connected to us. If you have not connected to the Jomres Platform, it's not sufficient to enter your details here. Instead, please visit the Get Connected menu option in the toolbar, under the Help section. If you want to test payments, in the Debugging tab of Site Configuration set your site from Production to Development.");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY', "مفتاح سري مباشر لـ Stripe") ;
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'انتقل إلى المطورين> مفاتيح API في لوحة تحكم Stripe للعثور على مفاتيحك السرية. يستخدمها النظام للتحقق من صحة بيانات الحجز التي تم إرجاعها من نموذج الدفع وأنه تم دفع الإيداعات قبل حفظ الحجز . ') ;

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY', "مفتاح اختبار الشريط السري") ;
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'وضع التعريفة القياسي') ;

jr_define('JOMRES_COM_A_ACCOMMODATES', 'ينام');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'كم عدد الأشخاص الذين يمكن أن تستوعب هذه الخاصية؟');
jr_define("JOMRES_COM_A_GUESTS_IN_DAILY_PRICE", "عدد الضيوف في سعرك اليومي") ;
jr_define("JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE", "سعر إضافي للبالغين") ;

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'أطفال');



jr_define("JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT", "لكل شخص في الليلة؟") ;
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', 'معدل 7 أيام') ;
jr_define("JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC", "الخصم على السعر اليومي إذا كان الحجز لمدة 7 أيام أو أكثر. اترك هذا الإعداد على صفر إذا كنت لا تريد تطبيق الخصم.") ;
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 يوم معدل');
jr_define("JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC", "الخصم على السعر اليومي إذا كان الحجز لمدة 30 يومًا أو أكثر. اترك هذا الإعداد على صفر إذا كنت لا تريد تطبيق الخصم.") ;
jr_define("JOMRES_GUEST_BOOKING_FORM_LABEL", "الكبار") ;
jr_define("JOMRES_GUEST_BOOKING_FORM_LABELINFO", "السعر بناءً على شخصين بالغين") ;
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', "تم خصم الحجز من") ;
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'إلى');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'لأن الحجز أكبر من 7 أيام.') ;
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'لأن الحجز أكبر من 30 يومًا.') ;


jr_define("JOMRES_CITY_TAX_HEADING", "ضرائب المدينة") ;
jr_define('JOMRES_CITY_TAX_VALUE', 'قيمة ضريبة المدينة') ;
jr_define('JOMRES_CITY_TAX_METHOD', 'طريقة حساب الضريبة') ;

jr_define("JOMRES_CITY_TAX_MODEL_SINGLE", "رسوم فردية") ;
jr_define("JOMRES_CITY_TAX_MODEL_PER_NIGHT", "كل ليلة");
jr_define("JOMRES_CITY_TAX_MODEL_PER_GUEST", "لكل ضيف") ;
jr_define("JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT", "لكل ضيف في الليلة") ;
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'النسبة المئوية لقيمة الحجز') ;

jr_define("JOMRES_CLEANING_FEE_HEADING", "رسوم التنظيف") ;
jr_define("JOMRES_CLEANING_FEE_VALUE", "تكلفة رسوم التنظيف") ;


jr_define('JOMRES_COMPATABILITY_MODE', 'فرض وضع تكوين خاصية التوافق؟') ;
jr_define('JOMRES_COMPATABILITY_MODE_DESC', 'يفرض وضع تكوين خاصية التوافق حدوث عدة أشياء. في الإصدارات الأقدم من Jomres , يمكن لمديري العقارات اختيار وضع تحرير التعريفة الذي يجب استخدامه , وقد تكون مجموعة متنوعة من الإعدادات الأخرى (قد يبدو بعضها مربكًا) متاحة لهم. يؤدي تمكين تكوين التوافق إلى إجبار جميع الخصائص الجديدة على استخدام وضع تحرير التعريفة القياسية فقط , والذي يصمم وظيفة تكوين خاصية الحجز. يجب تعيينه على "نعم" , ولكن بالنسبة لعمليات التثبيت الأقدم , الأمر متروك لك لتقرير ما إذا كان يجب تعيين الخصائص الجديدة تلقائيًا على وضع التوافق عند إنشائها.');

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', 'هل تقبل الأطفال دون سن 18 عامًا؟') ;
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "اضبط هذا الخيار على نعم إذا سمحت للأطفال. إذا كانت الإجابة بنعم , فسيكون لديك في قائمة الإعدادات خيار يسمى سياسات الأطفال حيث يمكنك تعديل الإعدادات ذات الصلة بالأطفال.") ;

jr_define("JOMRES_POLICIES_CHILDREN", "سياسات الأطفال") ;

jr_define("JOMRES_POLICIES_CHILDREN_AGES_ALLOWED", "في أي سن يُسمح للأطفال؟") ;


jr_define("JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT", "لكل طفل , في الليلة");
jr_define("JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY", "لكل طفل , في كل إقامة") ;

jr_define("JOMRES_POLICIES_CHILDREN_CHILD_RATES", "معدلات الأطفال");
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'معدل الأطفال الجديد') ;
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'تعديل سعر الطفل') ;
jr_define("JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC", "قم بإنشاء أسعار مجانية أو مدفوعة للأطفال هنا. لن يتم تطبيق الأسعار إلا عند إنشاء مستويات إشغال لأنواع الغرف.") ;
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'العمر من') ;
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'العمر حتى') ;
jr_define("JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL", "لكل ليلة أم لكل إقامة؟") ;
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Rate');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'إذا لم يتم تعيين صفر أو لم يتم تعيينه , فسيكون الأطفال من هذا النطاق العمري أحرارًا.') ;
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'الأعمار عند تسجيل الوصول') ;
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'الأعمار') ;

jr_define("JOMRES_OCCUPANCY_LEVELS_TITLE", "مستويات الإشغال");
jr_define("JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS", "الحد الأقصى للبالغين");
jr_define("JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN", "الحد الأقصى للأطفال");
jr_define("JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY", "الحد الأقصى للإشغال") ;

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'تحرير مستوى الإشغال لـ:') ;
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', "قم بتحرير مستويات الإشغال لهذا النوع من الغرف. لا تقم بتضمين الضيوف الذين ينامون على أسرّة أطفال (تمت إضافتهم من خلال إنشاء إضافي)") ;
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', "لكل شخص بالغ إضافي , كم يجب أن يتم تحصيل الرسوم؟") ;

jr_define("JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS", "بالغون إضافيون") ;


jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'لم تقم بتكوين المعدلات الفرعية حتى الآن.') ;
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'تعيين معدل (معدلات) الأطفال الآن') ;
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'لقد قمت بتكوين الممتلكات الخاصة بك للسماح للأطفال ولكنك لم تقم بتعيين أي مستويات إشغال للأطفال حتى الآن.') ;
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'تعيين مستويات الإشغال') ;
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'في أي وقت تقوم فيه بتعديل غرفة أو نوع مكان الإقامة الخاص بك , يجب عليك التحقق من مستويات الإشغال لمكان الإقامة / غرفك وتحديثها لأن ذلك يؤثر على عدد الضيوف الذين يمكن قبولهم في نموذج الحجز.') ;


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'الكبار') ;
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'أطفال');

jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'مستوى خيارات المسؤول') ;
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'لدى Jomres العديد من خيارات القائمة والتهيئة التي يمكنك استخدامها عند تكوين موقعك. لن تحتاج أبدًا إلى تغيير الغالبية العظمى منهم حتى يتم إخفاؤها افتراضيًا. يمكنك اختيار إظهار هذه الخيارات عن طريق تعيين مستوى خيارات المسؤول. يوضح لك المستوى الأساسي فقط ما تحتاجه عند إعداد موقع لأول مرة. يوضح لك المستوى العام تلك الخيارات الأكثر شيوعًا التي يتم تغييرها , ويظهر لك كل شيء جميع الإعدادات الممكنة وخيارات القوائم في منطقة المسؤول. ') ;
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'أساسي') ;
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'عام');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'كل شيء');
jr_define('_JOMRES_CONFIG_INITAL_SETUP_STEP_1_TITLE', 'هل يمكننا جمع معلومات حول كيفية استخدامك لـ Jomres؟') ;
jr_define('_JOMRES_CONFIG_INITAL_SETUP_STEP_1_MESSAGE', "نود جمع معلومات حول كيفية استخدامك لـ Jomres. لن يتم تخزين أي معلومات يمكن التعرف عليها بشكل شخصي , وسيتم إخفاء هويتها واستخدامها فقط لمساعدتنا على فهم كيفية استخدام الأشخاص لـ Jomres.") ;
jr_define('_JOMRES_CONFIG_INITAL_SETUP_STEP_1_ACCEPT', 'نعم , هذا جيد') ;
jr_define('_JOMRES_CONFIG_INITAL_SETUP_STEP_1_DENY', 'لا , لا أوافق') ;

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'هل ستقوم بالحجز لأكثر من عقار؟');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'يمكن استخدام Jomres للمواقع الفردية أو متعددة الممتلكات. إذا كنت ستجري حجوزات لعقار واحد فقط , فستكون العديد من الخيارات زائدة عن الحاجة وقد تكون مربكة. يمكنك تغيير هذا الإعداد لاحقًا في علامة التبويب الإعدادات> تكوين الموقع> وظيفة البوابة الإلكترونية.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', ' ملكية واحدة فقط ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', ' سوف أقوم بإدراج أكثر من عقار ');

jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "ما هو إصدار إطار عمل Bootstrap الذي يدعمه القالب / السمة الخاصة بك؟");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "يتطلب كل إصدار من إطار عمل Bootstrap ترميز html مختلفًا قليلاً. يحتوي Jomres على ثلاث مجموعات من مجموعات القوالب المتوافقة مع Bootstrap , واحدة لكل إصدار Bootstrap. يجب عليك التأكد من تكوينه لاستخدام مجموعة القوالب المناسبة. إذا لم تقم بإخراج مثل التخطيط , فلن تعمل الوسائط والقوائم بشكل صحيح. إذا قررت استخدام قالب / سمة لاحقًا مع إصدار Bootstrap مختلف , يمكنك تغيير مجموعة قالب Bootstrap التي يجب أن يستخدمها Jomres في Admin> Jomres> Settings> Misc علامة التبويب. <br/> <br/> يتم توزيع Joomla 3 مع Bootstrap 2 افتراضيًا , وستستخدم Joomla 4 Bootstrap 5. يستخدم قالب Jomres Leohtian (Joomla) والقالب (Wordpress) Bootstrap 3. يمكن توزيع قوالب / سمات مختلفة مع قوالبها الخاصة Bootstrap , لذا إذا كان لديك أي شك , فيرجى الاتصال بمطور القالب / المظهر.");

jr_define("_JOMRES_CONFIG_INITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2") ;
jr_define("_JOMRES_CONFIG_INITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3") ;
jr_define("_JOMRES_CONFIG_INITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4") ;
jr_define("_JOMRES_CONFIG_INITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5") ;

jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'تجريد الكسور العشرية من أسعار الإنتاج؟') ;

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'تطبيق المجموعة عن طريق الإصلاح؟');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'قد تواجه بعض عمليات تثبيت mysql مشكلة في استعلامات Jomres في صفحة قائمة الخصائص , وقائمة الضيوف , وصفحة قائمة الفواتير. إذا قالت هذه الصفحات إنها تعرض X من نتائج Y ولكن لا شيء يظهر في القائمة , فإن تعيين هذا الخيار على نعم قد يحل المشكلة. لن يحدث ذلك إذا كنت تستخدم استضافة مشتركة ولا تسمح خدمة الاستضافة لمستخدم mysql الخاص بك بإصدار الأمر "SET GLOBAL sql_mode =". ');

jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'هذه خاصية قناة , لا يمكن إدارتها محليًا , قم بزيارة صفحة إطار عمل إدارة القناة للعثور على ارتباط الإدارة عن بعد للخاصية') ;
jr_define("_JOMRES_CONFIG_INITAL_SETUP_STEP_3_BOOTSTRAP0", "لا يوجد Bootstrap في السمة") ;

jr_define("JOMRES_SOCIAL_MEDIA_LINKS", "روابط وسائل التواصل الاجتماعي") ;
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'ضع أسماء حسابات الوسائط الاجتماعية الخاصة بك هنا , على سبيل المثال "jomres" , وليس عنوان url بالكامل') ;

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'قائمة مفصولة بفواصل للغات التي تتحدثها مؤسستك') ;
jr_define("JOMRES_ORGANISATIION_LOGO_URL", "عنوان URL لشعار مؤسستك") ;

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'تم تحديث Jomres') ;
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'هناك إصدار جديد متاح من Jomres. يجب عليك التحديث قبل أن تتمكن من الاستمرار في استخدام Jomres حيث تعمل التحديثات على تحسين الوظائف والتأكد من أن التثبيت الخاص بك يظل آمنًا.') ;
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'تحديث Jomres الآن') ;

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'تحديثات البرنامج المساعد') ;
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'هناك إصدارات جديدة من المكونات الإضافية متوفرة في مدير المكونات الإضافية. يجب عليك تحديث جميع المكونات الإضافية قبل أن تتمكن من الاستمرار في استخدام Jomres حيث تعمل التحديثات على تحسين الوظائف والتأكد من أن التثبيت يظل آمنًا.') ;
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'المكونات الإضافية للتحديث') ;

jr_define("PLUGIN_UPDATE_MESSAGE_MESSAGE2", "إذا لم يعد ترخيصك صالحًا , يمكنك الحصول على مفتاح ترخيص جديد من موقعنا على الويب.") ;

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'تحديث المكونات الإضافية') ;
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'الحصول على مفتاح جديد') ;
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'حفظ المفتاح الجديد');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES', "صور نوع الخاصية") ;

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE', "هل تحتاج إلى مساعدة في الحجز؟");
jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB', "اتصل بفريق خدمة العملاء على الرقم أدناه للتحدث إلى أحد ممثلينا الذين سيساعدك في جميع احتياجات عطلتك.");

jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE', "ما مزايا الحجز لدينا؟");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', "نحن نقدم أفضل أسعار الحجز");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', "لدينا أفضل العقارات المعروضة حاليًا في السوق.");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', "بدون رسوم حجز. وفر المال!");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', "مجموعة رائعة من الخصائص");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', "الخصائص");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', "تقييمات الضيوف");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', "نحن دائمًا هنا");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "اتصل بنا أو راسلنا عبر البريد الإلكتروني,في أي وقت");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', "احصل على دعم على مدار 24 ساعة قبل رحلتك وأثناءها وبعدها");

jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', "وسائل التواصل الاجتماعي");
jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', "اعثر علينا على وسائل التواصل الاجتماعي");

jr_define('JOMRES_REVIEW_SCORE_TOP_1', "رائع");
jr_define('JOMRES_REVIEW_SCORE_TOP_2', "استثنائي");
jr_define('JOMRES_REVIEW_SCORE_TOP_3', "رائع");
jr_define('JOMRES_REVIEW_SCORE_TOP_4', "رائع");
jr_define('JOMRES_REVIEW_SCORE_TOP_5', "رائع");

jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "جيد جدًا");
jr_define('JOMRES_REVIEW_SCORE_GOOD', "جيد");

jr_define('JOMRES_REVIEWS_NONE_NEW', "قائمة جديدة");
jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "مخفضة");

jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'أين تريد أن تذهب؟');
jr_define('DATA_SOURCES_TITLE', "تحديث مصادر البيانات") ;
jr_define('DATA_SOURCES_TITLE_INFO', "تم تحديث مصادر البيانات. تُستخدم مصادر البيانات بواسطة حقول إدخال الإكمال التلقائي في أداة البحث وعادةً ما يتم تحديثها تلقائيًا , ولكن هذه الصفحة تفرض تحديث البيانات يدويًا إذا لزم الأمر.") ;

	jr_define('_ OAUTH_TOKEN_REQUEST_URI', "لإرسال طلب رمز , أرسل الطلب إلى عنوان url هذا") ;
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "سكربت خاصية العرض الرئيسي") ;
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "معرّف الخاصية للخاصية التي سيتم عرضها") ;
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "القالب الافتراضي هو property_details.html , باستخدام هذه الوسيطة يمكنك تحديد قالب تفاصيل خاصية مختلف لعرضه.") ;

	jr_define('JOMRES_UPDATES_TITLE', 'Jomres Updates') ;
jr_define('JOMRES_UPDATES_INFO', "يمكن لهذه الصفحة تنزيل أحدث إصدار من Jomres وتثبيته لك. إنها تستخدم وظائفها الخاصة وليس وظائف نظام إدارة المحتوى الخاص بالمضيف , لذلك إذا حدثت مشكلة أثناء تحديث المضيف لـ CMS , يمكنك استخدام هذه الصفحة من أجل فرض إعادة تثبيت أحدث إصدار من Jomres. ") ;

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', "يمكن لمديري الخصائص استخدام وضع التحرير في الواجهة الأمامية لتخصيص السلاسل لكل خاصية , ولكن هذا لا يمكن أن يعمل إلا إذا تم تعيين إعداد WordPress Permalink الخاص بك على Plain (http://www.domain.com/؟ p = 123). بمجرد الانتهاء من ذلك , سيتمكن مستخدمو الواجهة الأمامية من تخصيص السلاسل , مثل أسماء الغرف والتسميات الأخرى , الخاصة بخصائص فريدة. ');");

jr_define("JOMRES_EDITING_MODE_HELP_TITLE", "وضع تحرير الملصقات") ;
jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'تُستخدم هذه الميزة لتغيير تسميات العناصر , عادةً إلى لغات مختلفة.') ;
jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'يسمح لك وضع التحرير بإعادة تسمية التسميات الفريدة للخصائص الفردية. عند استخدام وضع التحرير لإعادة تسمية تسمية , سيظهر التغيير فقط في قائمة هذه الخاصية. على سبيل المثال , في خاصية واحدة قد ترغب فيها لاستخدام كلمة "الأسعار" وفي كلمة أخرى "الأسعار". لا يمكن تغيير جميع التصنيفات , على سبيل المثال , أسماء أنواع الغرف عبارة عن تسميات على مستوى الموقع , لذا لا يمكن تغييرها , ولكن عادةً ما يكون أي شيء فريد في خاصية فردية من الممكن تغييرها.');
jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'إذا كان الموقع يدعم لغات متعددة , أثناء استخدام لغة واحدة , يمكنك إنشاء عنصر فريد لخاصية فردية. عندما تقوم بعد ذلك بتغيير لغتك النشطة , يمكنك استخدام وضع التحرير لإعادة تسمية ذلك التصنيف , إدخال ترجمة مناسبة باللغة الحالية. يمكنك الاستمرار في تغيير اللغة النشطة لإدخال ترجمة مناسبة لتلك التسمية لكل لغة يدعمها الموقع. ') ;
jr_define("JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE", "تبديل وضع تحرير الملصقات") ;
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'في لقطة الشاشة هذه , نرى مفتاح وضع التحرير. وضع التحرير مغلق وتظهر التسميات كالمعتاد:') ;
jr_define("JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE", "وضع تحرير الملصقات ممكّن") ;
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'في لقطة الشاشة هذه , نرى أنه أثناء وضع التحرير , يتم تمييز الملصقات التي يمكنك إعادة تسميتها:') ;
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'حدد العنصر المراد تغييره') ;
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'عند تحديد تسمية , تظهر نافذة منبثقة:') ;
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'تغيير التسمية') ;
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'استخدم النموذج الصغير لتغيير التسمية. انقر فوق علامة التجزئة للإنهاء , أو انقر فوق X لإلغاء التحرير:') ;
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'تم تغيير التسمية');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'بمجرد حفظ التغيير , يتم تحديث التسمية في الصفحة. يمكنك تعطيل وضع التحرير الآن:') ;

	jr_define('JOMRES_TRANSLATIONS_TITLE', 'ترجمات') ;
jr_define('JOMRES_TRANSLATIONS_LEAD', 'في هذه الصفحة يمكنك ترجمة التسميات من لغة إلى أخرى. عندما تزور الصفحة سترى السلاسل التي قمت بإنشائها بالفعل وقيمتها بأي لغة تستخدمها حاليًا. في الجزء العلوي ، قم بتعيين اللغة الهدف ، فبالنسبة للتسميات التي تريد ترجمتها ، انقر فوق التسمية وستتيح لك نافذة منبثقة إدخال ترجمتك الجديدة. للحصول على سطور أطول من النص ، يمكنك لصق النص من مصدر آخر. تذكر أنه سيتم إزالة أي HTML . <br/>
يمكنك ترك اللغة الهدف مضبوطة على لغتك الحالية واستخدام هذه الصفحة لإعادة تسمية العناصر هنا ، بدلاً من زيارة صفحاتهم الفردية. ') ;
jr_define('JOMRES_TARGET_LANGUAGE', 'اللغة الهدف') ;

jr_define('API_CLIENTS_INFO', 'API Clients are Client ID/Secret key pairs that allow remote systems to use API features that you give them permissions to use. On this page you can create as many Client/Secret keypairs as you need, each with any combination of permissions that you require.');
jr_define('CLIENT_TOKEN', 'Access Token');
jr_define('CLIENT_TOKEN_INFO', "Access tokens can be requested using the Client ID and Secret. Some Clients may already have an access token created for it, in which case you can use this access token. If you believe that the token may have been compromised, or you just want to change it, you can expire the client's tokens. All tokens associated with the client/secret pair will be expired.");
jr_define('DELETE_TOKEN', 'Expire Tokens');
