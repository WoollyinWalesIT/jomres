<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
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
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Resource/business type abbreviation');
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
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Book a guest in');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Book guest out');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'قائمة الحجوزات');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'لوحة التحكم');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Guest admin');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Business admin');
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
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>شكرا لطلب الحجز معنا ونتمى لكم إقامة ممتعة<br><br> <b>الرجاء أخذ بعين الاعتبار أن هذا الحجز حجز مبدئي وسنقوم بإشعاركم فور تأكيد الحجز </center>');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Book in guest ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Guest booked in ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Book out guest ');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'الكماليات');
jr_define('_JOMRES_COM_A_TARIFFS', 'الأسعار والعملة');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'تحميل ملف');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'المكملات للشخص الواحد');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'تأكد من تعين هذا -نعم في حال كنت تريد احتساب المكملات بالشخص');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'تكلفة المكملات للشخص المواحد');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'هل تريد الدفعه المقدمة بالنسبة المئوية?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'هل الدفعه المقدمة بالنسبة المئوية لإجمالي قيمة الحجز? إذا لا, سيتم احتساب الدفعه المقدمة بسعر ثابت');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'قيمة الدفعة المقدمة ');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'للشخص ، لليلة');
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
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
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
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximum periods, eg 3x 7 booking periods = 21 days');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Is this an apartment/cottage/villa?');
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
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'كان هناك خطأ في محاولة لحجز هذه الوحدة، واحدة أو أكثر من وحدات حددتها غير متوفرة.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Resources included in black booking');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'No black bookings to list');
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
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'استخدام هذا الخيار لتحديد ما ينبغي أن يتوجب دفع في وقت الحجز. اختيار ما إذا كان ينبغي إيداع المتهمين إيداع، أو كامل المبلغ إذا كان ينبغي دفع المبلغ بالكامل.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'عرض الشهور');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'في إمكانيات الوحدة, كم عدد الشهور ليتم عرضها');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'العبارات');
jr_define('_JOMRES_COM_A_CANCEL', 'إلغاء');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'حدد التواريخ التي تريد تطبيق عبر السوداء. عند تحديد مواعيد مناسبة، انقر فوق "تطبيق" الزر لإعادة تحقيق توافر. <br/> 
<br/> 
اختيار الوحدات التي ترغب في اتخاذ خارج الخدمة. <BR> إذا وحدة لايوجد علامة الاختيار ضدها، فإنه لا يتم تضمينها في الحجز السوداء حتى يتم الانتهاء أي حجوزات المعلقة / الملغاة.<br/> ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>لقد تم تسجيل خروجك عن عدم النشاط </ B> الرجاء تسجيل الدخول وإعادة المحاولة.');
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
jr_define('_JOMRES_FRONT_NORESULTS', '<b>عذرا، البحث لم ترجع أية نتائج. يرجى تعديل بحثك وحاول مرة أخرى.</b>');
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
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'لديك خيارين للطرق الحساب الأسعار. المرحلة الأولى، وللشقة معدل الطريقة تمكنك لتقديم عدد من التعريفات المختلفة للضيف، و سعر للوقف هو نفسه للمرة بأكمله. هذا مفيد إذا كنت ترغب في تقديم التعريفات المختلفة للتاريخ نفسه، على سبيل المثال سرير وإفطار والتعريفة B & B وجبة المساء الجمركية. اختيار المعدلات التعريفية-إذا كنت ترغب في ضبط الأسعار الخاصة بك تعتمد على التاريخ في السؤال. سوف تجد كل Jomres من الرسوم عن كل يوم في الحجز، وإضافتها معا ثم العودة المعدل المتوسط ​​عبر فترة');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'عرض تاريخ المغادرة');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'تعيين هذا إلى لا إذا كنت لا تريد أن تظهر مدخلات تاريخ المغادرة مربع. فقط استخدام هذا إذا كنت تعرف ما تفعلونه، وسوف دائما في موعد المغادرة عبر وضعها لفي اليوم التالي لموعد الوصول.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'تفاصيل محدده');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'وهذا يحد من عدد الأحرف الموجودة في القائمة عند وضع الفندق من الوصف الفندق.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'صيغة التاريخ ؟');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'تفعيل');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'غير مفعله');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'إستخدام نوع الوحدات العالمية');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'To assign an image to this resource/business type you first need to upload your resource/business type images to the /images/stories/'.JOMRES_ROOT_DIRECTORY.'/rmtypes/ folder. ');
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
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'إستخدام هذه النافذة لوضع الحجز. تعديل تفاصيل الحجز مثل تواريخ الوصول والمغادرة والأرقام أعلاه، ثم حدد الفنادق التي تحتاجها من قائمة تلك المتاحة. انقر فوق أي الفنادق المتوفرة لإضافتها إلى الحجز. عندما تنتهي من ذلك، يمكنك إضافة أي إضافات الاختيارية التي قد تتطلب وتقديم تفاصيل عنوانك. عندما يكون النموذج لديه معلومات كافية فإنه سيتم ثم إعطاء لك زر إرسال بحيث يمكنك تأكيد الحجز.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'إستخدام هذه النافذة لوضع الحجز. تعديل تفاصيل الحجز مثل تواريخ الوصول والمغادرة وعدد النزلاء. عندما تنتهي من ذلك، يمكنك إضافة أي إضافات الاختيارية التي قد تتطلب وتقديم تفاصيل عنوانك. عندما يكون النموذج لديه معلومات كافية فإنه سيتم ثم إعطاء لك زر إرسال بحيث يمكنك تأكيد الحجز.');
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
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'تبديل هذا إلى نعم لتعطيل عرض رأس الممتلكات والتفاصيل، بحيث توفر فقط التقويم للعرض في قسم تفاصيل المنشأة. فقط المقصود حقا للمستخدمين تأجير الممتلكات واحد وحدة (مثل الشقق، البيوت الخ).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'اقل مدة وصول ومغادرة');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'والحد الأدنى لفي نموذج الحجز بين تاريخ الوصول وتاريخ المغادرة.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'نموذج حجز الوحدات القائمة لعرض رقم الوحدة');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'نموذج حجز الوحدات القائمة لعرض اسم الوحدة');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'نموذج الحجز من قائمة الوحدات لعرض عنوان السعر');
jr_define('_JOMRES_ORDER', 'طلب');
jr_define('_JOMRES_REQUIREDFIELDS', 'مطلوب الزامي');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'الايام قبل الوصول');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'الحد الأدنى لعدد الأيام التي يجب أن ينقضي، من "اليوم"، قبل الوصول');
jr_define('_JOMRES_DTV', 'اختلافات نوع التاريخ');
jr_define('_JOMRES_DTV_DOW', 'يوم في الاسبوع');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'النوع الافتراضي لنوع العميل');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'الرقم الافتراضي لأول مرة من نوع الضيف الأول. إذا كنت تستخدم أنواع أعلاه، ثم وهذا هو الرقم الافتراضي الذي سيتم تعيين نوع الضيف الأول في نموذج الحجز ل.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'فقط العملاء المسجلين بامكانهم الحجز ؟');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'عذرا، يجب أن تكون مستخدما مسجلا لحجز عبر الإنترنت. انقر هنا للتسجيل في هذا الموقع.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'لون الخط للرابط الخاص بالحجز الحالي');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'حد نهاية الاسبوع');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'الوحدة محجوزه مسبقاً');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'حجز');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'تقريب الودائع تصل إلى أقرب عدد صحيح؟');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'رسوم الودائع؟');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'حفظ الاسعار بنظام اسبوعي ');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'لديك الخيار لتخزين رسوم التعريفة الجمركية في أي من القيم اليومية أو الأسبوعية. إذا تخزينها والأسبوعية، يجب عليك تعيين هذا الخيار إلى نعم.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'في الأسبوع');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'وصول ثابت يعود تكرار: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'عندما يتم اختيار مواعيد وصول الثابتة، وتواريخ عدد التي يمكن أن تظهر في القائمة المنسدلة التواريخ. لاحظ أن قائمة التواريخ لن تتضمن أي تواريخ إذا كان الحجز غير ممكن بسبب الحجوزات المسبقة، وأن القائمة سوف يكون في الواقع مرتين طالما عدد اخترتها لأنها سيكون لها عدد مماثل من التمور تاريخية (إن وجدت) ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'تاريخ الوصول غير صحيح');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'تاريخ مغادرة غير صحيح');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'الحجز أقصر مما يجب. يجب أن يكون هناك على الأقل هذه الأيام العديدة بين الوصول والمغادرة التواريخ:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'الفترة الخاصة بك والمطلوبة هي ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'نوع الضيف غير صحيح');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'اختر نوع الضيف ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'لديك كثيرة جدا في حزب التعريفات المتاحة');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'كنت قد اخترت أكثر حدة مما لديك ضيوف، انقر على اسم وحدة لإزالته من اختيارك');
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
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ok to book, message box background');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Dump template vars?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'يعتبر بالنسبة');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'تعيين هذا إلى نعم إذا كان حساب شخص واحد هو الرقم مئوية. إذا لم فسيتم تطبيقه في شكل مبلغ ثابت.');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'وحدات متوفرة \ باسعار محدودة');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'استخدام هذه المدخلات للحد من عدد من الموارد المتاحة والتعريفات المذكورة في استمارة الحجز. تعيين إلى صفر إذا كنت لا تريد الحد من تمكين.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'لا يوجد شواغر في هذه الفترة');
jr_define('_JOMRES_BOOKITNOW', '');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'وضع التعديل العالمي؟');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'رعاية مع هذه الوظيفة. إن كانت القيمة نعم، ثم وضع التحرير تؤثر على نص مخصص لجميع الشركات في نظام ثابت لتقوم بتحريرها.');
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
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Business details ');
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
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'وسوف يعتمد حساب أسعار الوحدات معظم الفنادق على عدد من وحدات من نوع المطلوبة التي تتوفر على تاريخ معين. وهذا يسمح لهم لتقديم خصومات على نوع الوحدة ر يسن أن الفندق  مشغول خلال فترة معينة بهدف جذب الفندق التي قد خلاف ذلك ينبغي تفويتها. <br/> إذا تمكين وتكوين هذا البرنامج المساعد يسمح لك عرض أسعار قابلة للتعديل بناء على عدد الوحدات من نوع المختارة هي متاح في الفندق في يوم معين. <br/> عتبة يوما يعرف عدد الأيام التي وصولها يجب أن يكون ضمن قبل تعديل أسعار الوحدة هذه الميزة، ثم النسب المئوية تسمح لك خيارات لتكوين نسبة الوحدات التي يمكن أن تكون متاحة قبل تطبيق خصم معين. ملاحظة ومع ذلك، إذا تم حجز وحدات متعددة ثم تطبيقها على المستوى الحالي للخصم على جميع الوحدات ولن تخفض ويتم اختيار أكثر حدة.');
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
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Business Details page.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'آخر فرصة');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'فعال؟');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'إضبط هذه بنعم في حال اردت استخدام اخر فرصة ');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'البداية');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'إذا تم إجراء الحجز وتاريخ الوصول هو فقط وأيام من تاريخ الحجز، ومن ثم يمكن تطبيق الخصم');
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
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'لا يمكنك حذف هذا الفندق كما هو الفندق الوحيد الذي لديك حق الوصول على. إذا كنت ترغب في تعطيله، يرجى استخدام ميزة إلغاء نشر في شريط الأدوات. ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'إجمالي قيمة الحجز');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'ليالي في ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'للوحدة ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'إجمالي الخدمات (شامل الضرائب)');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'ملخص التكلفة الاجمالية ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'الرجاء قراءة والموافقة على  ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'ويرد موجز الحجز أدناه. <br /> لإجراء أية تغييرات، يرجى النقر على زر تعديل الحجز. ');
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
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'لاحظ أنه لن يكمل تعيين شخص واحد هنا أن تستخدم إذا تم تعيين شخص واحد علىملاحق نعم في تكوين العام. الإعدادات هنا هي بديل إلى وجود معدلات شقة Suppliements شخص واحد، وليس إضافة إلى SPS بسعر موحد.');
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
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'عادة يتم إعادة التسجيل Jomres المساعد تلقائيا كلما قمت بعرض مدير البرنامج المساعد وإضافة أو إزالة البرنامج المساعد، ومع ذلك فإنه من الممكن أنه لا يمكنك استخدام هذه الميزات لسبب ما، لذا يمكنك استخدام هذه الدالة لإعادة بناء السجل يدويا. إذا كان لديك الوصول إلى مدير البرنامج المساعد وتتميز ترقيات ثم انه من غير المحتمل أنك سوف تحتاج لاستخدام هذه الوظيفة. سوف تحتاج إلى إعادة بناء السجل المساعد كلما قمت بإضافة مكون جديد ميني ولم تستخدم مدير البرنامج المساعد لإضافته.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'تم اعادة بناء مكون التسجيل بنجاح');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'كان هناك خطأ مع إعادة بناء قلم icomponents دقيقة. يجب عليك التحقق من السجل الخاص بك خطأ Jomres لمعرفة إذا كان هناك سجل ما تسبب في الخطأ.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'البحث بالسعر');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'لم تقم بعمل اي حجز حتى الان');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'تحرير نوع المنشاءه');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'اختر نوع منشاءتك');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Your enquiry...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Business List limit');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'The number of businesses to show on a page after a search');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrated search feature');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'The Jomres integrated search feature allows your users to search through Jomres businesses according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'تفعيل هذه الميزة؟');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'If this feature is enabled, then any call to Jomres that shows the business list will mean that the search options are also shown.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'استخدام الاعمدة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'سيظهر أي خيار البحث الذي قمت تعرف بأنها نوع الارتباط (حيث ذات الصلة) كأعمدة (IE ر ضعت على نهاية الرابط)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'البحث حدد المنطقة من خلال التحرير والسرد المنسدلة');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
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
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'افتراضيا، إذا لم يتم تحديد فندق في Jomres سوف إجراء بحث. إذا لم ينشأ هذا البحث من قبل وحدة البحث بعد ذلك سوف تسفر عن نتائج هذا البحث العشوائي (عمدا). هذا الخيار يسمح لك للحد من عدد العائدين في هذا البحث عشوائي.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron job settings and logs');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Method');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Display logging in the browser');
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
jr_define('_JRPORTAL_COUPONS_DESC', 'يمكن أن تتولد رموز الخصم ومرت على الضيوف كحافز لجعل الحجوزات. صالحة من التواريخ وللإشارة إلى التواريخ التي يمكن إجراء الحجوزات على، وليس مواعيد الحجز نفسه.');
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
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', 'الرجاء استخدام رمز البلد تنسيق، رقم الجوال. على سبيل المثال فإن مقرها المملكة المتحدة رقم الجوال 966509793074 يكون شيء من هذا القبيل. ترك هذا فارغا إذا كنت لا تريد أي إشعارات بالبريد الإلكتروني المرسلة إلى الهاتف المحمول الخاص بك.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
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
jr_define('_JOMRES_LATLONG_DESC', 'استخدام الماوس الخاص بك إلى التحرك في جميع أنحاء الخريطة، واسحب المؤشر إلى موقع الفندق لتعيين خطوط الطول والعرض.');
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
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'حدد التواريخ التي تريد تطبيق الحجز الأسود. عند تحديد مواعيد مناسبة، انقر فوق الزر تطبيق لإعادة تحقيق توافر.<br/> 
<br/> 
إذا كان الفندق لديه واحد أو أكثر عبر عن الفترة المحددة، ثم فلن تكون قادرا على حجز بها حتى يتم إلغاء حجوزات أخرى / عبر سوداء، / حجزت.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'عذرا، لا يمكنك حجز هذا الفندق في هذه التواريخ.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'يمكنك حجز هذا الفندق في هذه التواريخ.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'تم تكوين فندقك لتوجيه الاتهام للشخص الواحد في الليلة ولكن لم يكن لديك أي نوع من أنواع الضيف خلق أو نشرها، يرجى إنشاء ونشر واحد أو أكثر أنواع زائر.');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'لم يكن لديك أي تكوين التعريفات بعد، فإنك لن تكون قادرة اتخاذ أي حجوزات لفندقك.');
jr_define('_JOMRES_EDITINGMODE_ON', 'نمط التحرير مفعل');
jr_define('_JOMRES_EDITINGMODE_OFF', 'نمط التحرير غير مفعل');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'الدفعات المقدمة متغيرة ؟');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'الودائع متغير تسمح لك لتحديد إذا لو كنت تريد لشحن كامل المبلغ إذا كان التاريخ هو الوصول عبر داخل وأيام اعتبارا من اليوم. تعيين هذا الخيار إلى نعم لتمكين هذه الميزة، وأدخل عدد الأيام التي كانت أقل، لذلك على سبيل المثال إذا كان اليوم هو الوصول في غضون 60 يوما، ثم إيداع المبلغ اتهم سيكون كامل المبلغ، وإلا أن يستند المبلغ على الوديعة خيارات تهيئتها أعلاه.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'عدد الأيام، والتي ستحمل في كامل المبلغ كعربون.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'تم إرسال رسالة تأكيد بالبريد الإلكتروني. قد تقوم بإغلاق هذه النافذة الآن.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'اتصال بالوكيل');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'قم بتحديد الفاتورة كمدفوعة');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'تم تعليم الفاتورة كمدفوعة');
jr_define('_JOMRES_APIKEY_REMAKE', 'Make new API key');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'هل هذه تثبيث منشاءه واحدة؟');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'إذا تم تعيين هذا الخيار إلى نعم، ثم يتم تبسيطها إلى حد كبير من وجهة النظر الواجهة الأمامية لJomres غير مصرح المستخدمين. الافتراضي يدعو إلى Jomres من خيار القائمة، بدلا من أن يحصل على قائمة الفنادق، ويأخذ فقط للضيف لنموذج الحجز للفندق الأول في النظام. مديري الفنادق أيضا لن ترى معاينة تفاصيل الفندق زر أو زر إضافة فندق جديد. مثالية إذا كنت تريد فقط إلى قائمة فندق واحد واتخاذ الحجوزات لذلك.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'رصيد المدفوعات');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> for more information on this subject.');
jr_define('_JOMRES_SUPPORTKEY', 'مفتاح الدعم');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'مفتاح الترخيص الخاص بك رقم الدعم (المعروف أيضا باسم رقم الترخيص الخاص بك). سوف تحتاج إلى ترخيص ما يصل إلى تاريخ لتكون قادرة على تحميل المحمول لJomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'خصم شخصي');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'حد تسجيل الفندق لبلد واحد');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'يمكنك التأكد من أن تقتصر التسجيلات الفندق لدولة واحدة فقط عن طريق تحديد هذا الخيار إلى نعم ووضع البلد في الخيار التالي.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'الفندق يقع في هذه البلد : ');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery قالب');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'اختر قالب a jquery لاستخدامة في علامة التبويب ');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'نعتذر، ولكن هذا الفندق ليست متاحة حاليا.');
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
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'عادة يمكن لمديري الفندق غير مراجعة الفنادق. مع تمكين وضع التجريبي، فإنها يمكن. بطبيعة الحال هذا ليس وضعا مثاليا في بيئة الإنتاج.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'هذه هي قائمة من جميع الشركات. لمشاهدة استعراض الفنادق وانقر على أن الفنادق. من هناك سوف تكون قادرة على نشر أو حذف المشاركة.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'عدد التقييم الغير منشور');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'اجمالي عدد المقييمين');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'نشر | عدم نشر التقييم');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'حذف التقييم');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'تبليغ عن تقييم');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'تبليغ عن تقييم');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'الرجاء ادخال البلاغ');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'نرى شيئا في هذا الاستعراض الذي هو مرغوب أو غير دقيقة؟ الإبلاغ عن ذلك، ونحن سوف ننظر في ذلك لك.');
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
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'هذه الطريقة التي نحن تعيين أعداد النزلاء لغرفهم. إذا كنت ترغب في تغيير هذا التخصيص، وسوف تحتاج إلى الاتصال بالفندق بعد إجراء الحجز. قد يتم تطبيق رسوم إضافية إذا قمت بتغيير المهام الخاصة بك.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'لاحظ ان فندقك لم يتم نشره بعد ، فقط يمكنك روئية الفندق زوار الموقع لن يتمكنو من مشاهدة الفندق');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'الترتيب الافتراضي لنتائج البحث');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'تغيير هذا الخيار لتغيير الترتيب الذي يتم عرض نتائج البحث بشكل افتراضي.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'عرض نتائج البحث كقائمة منسدلة');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'شكل قائمة الغرف');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'في نموذج الحجز، وذلك باستخدام "الكلاسيكية" نمط قائمة القنوات التي تقدمها الغرف الفردية للضيوف. مع غرفة عرض نوع، زوار اختيار عدد من غرف X نوع (مثل 2 × الزوجي) بدلا');
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
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'تعيين هذا إلى نعم للحد من عدد من الخيارات المتاحة لمديري الفنادق في المقطع تكوين العامة. هذا مفيد إذا كنت لا تريد مديري الفنادق للعب مع حولها إعدادات كثيرة جدا، يمكنك تحرير بدلا jomres_config.php لتحديد خيارات الفندق الافتراضي.');
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
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'إدخال أحرف قليلة من اسم الفندق وحدد الفندق. <BR/> عند تحديد الفندق الذي سوف إضافتها إلى محفظة الشريك، إلا أنها لن تتمتع بعد أي خصومات، وسوف تحتاج إلى تعيين تلك نفسك.');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'الفنادق الحالية');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'انقر على الفندق لتعديل إعدادات الخصم الشريك لهذا الفندق.');
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'تم تعليق هذا الحساب، فإنه ليس من الممكن حاليا لإدارة الممتلكات الخاصة بك باستخدام هذا الحساب.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'حساب المدير معلق');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'اعادة تفعيل حساب المدير');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'يرجى ملاحظة أن حسابك مدير الفندق نشطة الآن. قد تستمر في أداء أي مهام إدارة الفندق. يرجى تسجيل الدخول إلى حسابك وضمان التي تم نشرها الخصائص الملائمة. شكرا لك.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'يرجى ملاحظة أن حسابك مدير الفندق نشطة الآن. قد تستمر في أداء أي مهام إدارة الفندق. يرجى تسجيل الدخول إلى حسابك وضمان التي تم نشرها الخصائص الملائمة. شكرا لك.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'حذف المفضلة');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'ارشيف بيانات الحجز');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'أرشيف البيانات الحجز هو تفريغ الخام للمعلومات الحجز الملتقطة بعد النقر فوق الزر تأكيد الحجز. تحوم فوق موعد لرؤية تفريغ البيانات الخام. يتم تخزين المعلومات في الجدول XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'تحرير الحساب');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>');
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
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'يمكنك تعيين هذا بلا إذا كان لديك قالب يستخدم جي كويري. وهذا قد حل قضايا الصراع جي كويري على بعض القوالب، ولكن ليس كل شيء.');
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
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /'.JOMRES_ROOT_DIRECTORY.'/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /'.JOMRES_ROOT_DIRECTORY.'/languages directory. Note that if you create a new property type, then a copy of the current language file is made in a subdirectory under /'.JOMRES_ROOT_DIRECTORY.'/language with a name that reflects the new property type\'s description.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'التهيئية المتقدمة للموقع');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Load Jomres jQuery UI library?');
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
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'تؤثر على جميع وحدات البحث. عند استخدام ميزة البحث للنزلاء عدد، ينبغي أن ننظر ميزة البحث عن العقارات من هو التعريفات ودعم أعداد النزلاء حتى ويساوي عدد المختار، تساوي بالضبط اختيار رقم أو عدد أكبر واختيار؟');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'يرجى الانتظار، يتم معالجة طلبك، وسيتم إعادة توجيهك إلى موقع باي بال.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'إذا لم يتم إعادة توجيهك تلقائيا إلى Paypal في غضون 5 ثوان ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'إضغط هنا');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'الحجز صالح من ');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'الحجز صالح حتى');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'اسم الضيف');
jr_define('_JRPORTAL_COUPONS_DESC_478', 'يمكن أن تتولد رموز الخصم ومرت على الضيوف كحافز لإجراء الحجوزات.<br/>
صالحة من التواريخ وللإشارة إلى التواريخ التي يمكن إجراء الحجوزات على، في حين أن الحجز صالحة من / إلى تواريخ تشير إلى التواريخ التي يجب أن تغطي الحجز لالقسيمة لتكون صالحة. إذا كان الحجز يقع خارج تلك الفترة فإن المعدلات الطبيعية تنطبق على أيام خارج تلك الفترة.<br/>
إذا كنت ترغب في حجز لتكون متاحة لضيف واحد محدد، اختر الاسم الذي النزلاء في القائمة المنسدلة للحد من القسيمة إلى أن ضيوف فقط.');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'مع الكوبون الخاصة بك، وقد تم خصم هذا الحجز من ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' الى ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'تعيين هذا إلى لا لتعطيل التحميل من كل من جافا سكريبت مسج UI وملفات CSS.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Load Jomres jQuery UI CSS library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Set this to No to disable only the jquery UI CSS file.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'الاجمالي شامل الضرائب');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'منشاءه غير مفعلة');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'استخدام ميزة التحويل ');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', 'استخدام وظيفة تحويل Jomres عبر الإنترنت. وهذا العرض تحويل المنسدلة للمستخدمين الواجهة، حيث أنها سوف تكون قادرة على اختيار العملة التي يرغبون في رؤية يتم ضبط الأسعار المعروضة فيها الناتج السعر لإظهار سعر تحويل يليه سعر العقار الأصلية بين قوسين.');
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'وقد استخدمنا بذل قصارى جهدنا للحصول على أسعار الصرف الأكثر دقة وفي الوقت المناسب ما في وسعنا. لدينا ميزة تحويل العملات عبر الإنترنت هي خدمة لأغراض إعلامية فقط وليس المقصود بها لتقديم أرقام دقيقة. وفقا لذلك، ونحن لا نضمن دقة أسعار الصرف. باستخدام هذه الميزة، تعتبر لك أن اتفقنا على أن أي اعتماد على أو استخدام ميزة التحويل معدل يكون كليا على مسؤوليتك الخاصة.');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'نتيجة تحويل عملة / عملة رموز');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
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
jr_define('_JOMRES_WHOLEDAY_DESC', 'By default the system bookings resources out by the night, so a booking from the first of January '.date('Y', strtotime('next year')).' to the 2nd of January '.date('Y', strtotime('next year')).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'لليوم');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'الشخص باليوم');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'استقبال');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'عودة');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'الايام في');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'ايام العودة ليست صحيحة');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'الحجز قصيرة جدا. يجب أن يكون هناك على الأقل هذه الأيام كثيرة بين الاستقبال وتواريخ العودة:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'الفترة الادنى للاستقبال والتوديع');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'الفاصل الزمني الأدنى في نموذج الحجز بين بيك اب وغلبه النعاس التواريخ. فاصل زمني من 1 يعني أنه يمكن تحديد مواعيد بيك اب والعودة إلى نفس اليوم، ولكن هذا لا يزال يعتمد على الفاصل الزمني الأدنى الذي ويتم احتسابها تلقائيا باستخدام محرك الحجز، كما يتحقق التعريفات التي هي صالحة للفترة الحجز.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'ملخص السعر والسعر المتوقع يجيب ان يجب ان يكون مسعر باليوم او الاسبوع او الشهر ؟؟');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'لليوم');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'الايام قبل تاريخ الاستقبال');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'اقل عدد لايام اللتي يتوجب ان تنقضي من اليوم قبل تاريخ الاستقبال');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'تعيين هذا إلى نعم إذا كنت تريد للحد من الحجوزات مقدما (استخدم الحقل التالي لتعيين حد من حيث أيام). إذا كنت تعيين هذا إلى نعم ثم إذا كان المستخدم يحاول حجز أكثر من ن يوما على الأقل وبعد ذلك يتم استعادة موعدها بيك اب لتاريخ اليوم');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'عرض اذخال تاريخ العودة؟');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'تعيين هذا إلى لا إذا كنت لا تريد أن تظهر مدخلات تاريخ المربع المقابل. فقط استخدام هذا إذا كنت تعرف ما تفعلونه، وسوف دائما في تاريخ العودة عبر وضعها لفي اليوم التالي لتاريخ الالتقاط.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'إذا قمت بتعيين هذا إلى نعم، ثم سيتم اتخاذها عبر لفترة محددة. إذا تم تعيين هذا إلى لا، ثم التأكد من عدم تعيين ذلك اليوم بيك اب محددة إلى نعم (إلا إذا كنت تريد على وجه التحديد لإجبار الناس على بيك اب في يوم معين من أيام الأسبوع) وإلا فإنك لن تحصل على العديد من الروابط في التقويم توافر.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'يوم الاستقبال محدد مسبقاً');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'فقط لمواقع تعرض حجوزات فترة محددة. اختيار يوم من أيام الأسبوع على وجوب بذل بيك آب على.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'يوم استقبال محدد');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'تكرار تاريخ الاستقبال المحدد: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'عندما يتم اختيار مواعيد ثابتة الالتقاط، وعدد من التواريخ التي يمكن أن تظهر في القائمة المنسدلة التواريخ. لاحظ أن قائمة التواريخ لن تتضمن أي تواريخ إذا كان الحجز غير ممكن بسبب الحجوزات المسبقة، وأن القائمة سوف يكون في الواقع مرتين طالما عدد اخترتها لأنها سيكون لها عدد مماثل من التمور تاريخية (إن وجدت) .');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'للشخص لليوم');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'حدد نعم إذا كنت تريد لتوجيه الاتهام لكل شخص يوميا. إذا لا، ثم سيتم احتساب التكاليف على أساس لكل غرفة لكل يوم');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'الودائع متغير تسمح لك لتحديد إذا لو كنت تريد لشحن كامل المبلغ إذا كان التاريخ هو الالتقاط الحجوزات خلال أيام N من اليوم. تعيين هذا الخيار إلى نعم لتمكين هذه الميزة، وأدخل عدد الأيام التي كانت أقل، لذلك على سبيل المثال إذا كان اليوم هو الالتقاط في غضون 60 يوما، ثم إيداع المبلغ اتهم سيكون كامل المبلغ، وإلا أن يستند المبلغ على الوديعة خيارات تكوين أعلاه.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'وسوف يعتمد حساب الأسعار غرفة معظم الفنادق على عدد من الغرف من نوع المطلوبة التي تتوفر على تاريخ معين. وهذا يسمح لهم لتقديم خصومات على نوع الغرفة / الفندق غير مزدحم خلال فترة معينة بهدف جذب الفندق التي قد خلاف ذلك ينبغي تفويتها. <br/> إذا تمكين وتكوين هذا البرنامج المساعد يسمح لك عرض أسعار للتعديل على أساس عدد من غرفة من نوعية مختارة تتوفر في الفندق في يوم معين. <BR/> عتبة الأيام يحدد عدد الأيام أن التاريخ يجب أن يكون ضمن الالتقاط قبل تعديل أسعار الغرف من هذه الميزة، ثم خيارات تسمح لك النسب المئوية لتكوين نسبة من الغرف التي يمكن أن تكون متاحة قبل تطبيق خصم معين. ملاحظة ومع ذلك، إذا تم حجز عدة غرف ثم تطبيقها على المستوى الحالي للخصم لجميع الغرف ولن تخفض ويتم اختيار أكثر الغرف.');
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
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'إذا تم تعيين الخيار لإنشاء مستخدم جديد نعم، يمكنك تعيين هذا الخيار إلى لا للتأكد من أنها لا بياناتهم الدخول مرسل عبر البريد الإلكتروني للمستخدم أوقية و-تم إنشاؤها. قد يكون هذا مفيدا إذا كنت تقوم بإضافة مستخدمين جدد تلقائيا إلى القائمة البريدية، على سبيل المثال، ولا تريد للمستخدمين تسجيل الدخول في الواقع.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'عرض قيمة الضرائب في نموذج مع ملخص السعر');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'منع نموذج الحجز من عرض حقول سعر الضريبة في مجاميع ملخص عن طريق تعيين هذا الخيار إلى رقم');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'الالغاء');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'الرجاء تسجيل الدخول ، فقط العملاء المسجلين بامكانهم الغاء الحجوزات هنا يمكن تحديد عدد الايام المسموح بها للالغاء الحجوزات');
jr_define('_JOMRES_EDIT_PROFILE', 'تحرير الملف الشخصي');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship');
jr_define('_JOMRES_IMAGE', 'الصورة');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'انقر على الرسالة لإظهار كافة الفنادق مع هذا الحرف الأول. مرة واحدة لديك قائمة من الخصائص التي يمكن تعيين أسعار العمولات لتلك الخصائص، أو انقر على أيقونة تحرير تلك الفنادق لعرض الإحصاءات.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'تحرير قيمة الضريبة');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'تحرير الحقل المخصص');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'License server username');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'نسخة Jomres : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'احدث نسخة من Jomres');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'تنبية : يوجد نسخة حديثة من النظام وننصحك بترقيته في اقرب وقت ');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres. The Core system is free, but it can be enhanced through the installation of plugins. To access those plugins you will need a download and support license. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section in the menu, including the "Getting Started" page which will guide you through your first steps.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'منشاءة فعالة');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'بديلة SMTP اعدادات');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'مستضيف بديل');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Change this to your smtp mail server');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'منفذ بديل');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Change this to your smtp port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'برتوكول بديل');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'استخدم التصريح');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternate Username');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternate Password');
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
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'هذه الميزة تسمح لك التحكم الذي سيكون قادرا على رؤية البرنامج المساعد في القائمة الرئيسية. خيارات المستخدم عادة هي 00009 مشاهدة من قبل إما / أو زوار الموقع غير المسجلين، 00010 خيارات بصفة عامة تشير إلى نوع النشاطات الاستقبال التي يتم استخدامها على أساس يومي، في حين تستخدم 00011 خيارات لإنشاء وتكوين الممتلكات ولكن يتم الوصول إليها في كثير من الأحيان أقل.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'موظف استقبال');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'تحكم الوصول بشكل كامل');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'تعيين هذا الخيار إلى نعم لتمكين ميزة التحكم في الوصول الكامل، ثم زيارة خيار التحكم بالوصول تحت صيانة النظام لتكوين عناصر التحكم في الوصول.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "ملاحظة، ولكن هذا لا إعدادات هذه البرامج النصية السيطرة الكامنة التي اتصالهم، لذلك على سبيل المثال إذا قمت بتعيين <I> 00009user_option_03_search </ I> ل'المدير' على المستخدم الذي يعرف Jomres يمكن استدعاء من قبل لا تزال j06000search.class.php دخول http://www.domain.com/index.php؟option=com_jomres&task=search في شريط عنوان المتصفح الخاصة بهم. هذا هو المقصود، لأن هذا التحكم بالوصول القائمة تسيطر ببساطة ما يمكن أن ينظر إليه في القائمة الرئيسية Jomres. إذا كنت في حاجة تشديد الضوابط ثم تعيين تكوين الموقع -> التحكم في الوصول الكامل إلى الخيار نعم وإعادة النظر في خيار التحكم في الوصول القائمة.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'تحكم الوصول بشكل كامل');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'المستخدمين مع حقوق الإدارة عن هذه المنشأة');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'عنوان البريد الإلكتروني ');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'الاجبار');
jr_define('_JOMRES_METATITLE', 'Meta title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'اضف منشائتك : الخطوة 2 من 2');
jr_define('_JOMRES_CART_TITLE', 'مقترحات الحجوزات');
jr_define('_JOMRES_CART_INFO', 'علما، إن لم تكن هذه الحجوزات حفظ حتى الان. وإذا كنت تسجيل الخروج أو تنتهي جلسة العمل الخاصة بك أن خسروا. تذكر لتأكيد الحجوزات الخاصة بك!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'الحجوزات المأكدة');
jr_define('_JOMRES_CART_OR', ' أو ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'الحفظ لما بعد');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'لايوجد لديك اي حجز محفوظ');
jr_define('_JOMRES_CART_VIEWCART', 'عرض السلة');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'نقطة البدء الافتراضي خط العرض');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'نقطة البدء الافتراضي خط الطول');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'في خريطة جوجل على الممتلكات تحرير صفحة، قبل تم نقل علامة، فماذا النقاط الافتراضي بداية خط العرض / خط الطول يكون؟');
jr_define('_JOMRES_SYSTEM_EMAILS', 'يتم ارسال البريد الالكتروني عبر هذا الحساب');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', 'اترك هذا الخيار فارغ لتعطيله. Jomres سوف تستخدم عنوان البريد الإلكتروني في الفندق (ES) عند إرسال رسائل البريد الإلكتروني للضيوف، ومع ذلك خدمة البريد الإلكتروني لا يسمح رسائل البريد الإلكتروني من عناوين التعسفي (أي أنها قد تسمح فقط رسائل البريد الإلكتروني من عنوان واحد معتمد). إذا كان هذا هو الحال، ثم يمكنك استخدام هذه المدخلات لإدخال عنوان الذي سوف ينظر إليها على أنها عنوان للمن جميع رسائل البريد الإلكتروني النظام.');
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
jr_define('_JOMRES_COOKIEPOLICY_6', 'نعم، أوافق على استخدام الكوكيز في هذا الغرض');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'الدفعة المقدمة تتطلب دفع قيمة اول ليلة؟');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'وتحسب على أساس أسعار الليلة الواحدة. هل تريد أن تكون إيداع رسوم ليلة واحدة؟ إذا كان الأمر كذلك، يمكنك تجاهل الخيارات التالية.');
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
jr_define('RECAPTCHA_INFO', "يتم استخدام كلمة التحقق للتأكد من أن العميل باستخدام نماذج الويب هو إنسان، ويستخدم لمنع مديري العقارات من أن \ المتطفلة \ من الروبوتات على شبكة الانترنت. لاستخدام الاتصال بنا في تشكيل Jomres سوف تحتاج للتسجيل في <a href=http://www.google.com/recaptcha\ target=\_blank\"> في اختبار reCAPTCHA جوجل </ A> الصفحة الرئيسية ووضع نطاقك لتلقي مفاتيح العامة والخاصة. عند استلام تلك المفاتيح، يرجى إدخالها أدناه. الخدمة reCapcha هي خدمة مجانية توفرها Google.");
jr_define('RECAPTCHA_PUBLIC_KEY', 'المفتاح العام');
jr_define('RECAPTCHA_PRIVATE_KEY', 'المفتاح الخاص');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'مهلة ملف القفل');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'لمنع خطر مزدوج الضيوف الذين يحجزون غرف Jomres يستخدم ملف القفل لمنع غرفة من إضافتها إلى قائمة الغرف المتاحة في نموذج الحجز إذا كان شخص ما آخر قد سبق وأن أضفت لهم الغرفة لنفس التواريخ ل. بشكل افتراضي وهذا قفل مهلة في 3600 ثانية، أو ساعة واحدة. يمكنك تغيير الوقت الذي يستغرقه لتنتهي هذا التأمين من خلال تغيير هذا الرقم.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "تمكين قوالب التمهيد Jomres 'وظيفة؟");
jr_define('COMMON_ACTION', 'الاداء');
jr_define('COMMON_VIEW', 'عرض');
jr_define('BACKTOTOP', 'العودة للأعلى');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'اسبوع');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'قوي');
jr_define('_JOMRES_INPUTFILTERING', 'فرز الإدخال');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'مستوى فرز الادخال');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "ومطهرة معظم البيانات التي يتم إدخالها في النظام عن طريق تجريد الأولى أي علامات HTML، ثم استخدام المتغير PHPs وظيفة تصفية لجعل البيانات آمنة قبل أن يتم إدخالها في قاعدة البيانات. قد ترغب في السماح مدخلات معينة (على سبيل المثال المدخلات النص في الصفحة تفاصيل المنشأة) لتشمل HTML. هناك مستويان من تصفية يمكنك استخدامها لتصفية هذه المدخلات، وإما ضعيفة، أو قوية. يجب عليك فقط استخدام الإعداد ضعف ثقة إذا كان المستخدم (ق) إدخال البيانات من قبل نفسك، على سبيل المثال زميل مسؤولي النظام، وإلا يجب أن تترك لتعيين قوية. عند تعيينها إلى قوية (مستحسن) يمكنك تحديد العلامات التي لا تزال للسماح بتحرير الإعداد المقبل HTML تنقية يسمح به'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'الاوسمة المسوح بها');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'المدخلات المسموح بها');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'عرض تفاصيل المنشاءه على شكل تبويب ؟');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'تعيين هذا الخيار إلى إظهار تفاصيل المنشأة في علامات التبويب. تعيين إلى أي لتبين لهم دون علامات التبويب.');
jr_define('COMMON_PRINT', 'طباعة');
jr_define('COMMON_EDIT', 'تحرير');
jr_define('COMMON_COPY', 'نسخة');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', '3 يتضمن جملة إطار التمهيد لتويتر بشكل افتراضي، وJomres والقوالب والوظائف التي سوف تستخدم هذه القوالب. افتراضيا، إذا كنت تقوم بتشغيل على جملة Jomres 3 يتم تعيين هذه المفاتيح إلى نعم ولكن يمكنك تعيين لهم لا إذا رغبت في ذلك (غير مستحسن). إذا كنت تقوم بتشغيل الإصدار من جملة أقل من جملة 3 يمكنك اختيار ما زال استخدام القوالب التمهيد Jomres والوظائف، ولكن بشكل افتراضي يتم تعيين هذه الخيارات لرقم');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'استخدام قوالب التمهيد Jomres في الواجهة؟');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'وهنا بعض البدائل التي قد ترغب في النظر.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'كشف تلقائي عن بلد الضيف؟');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', 'سيقوم النظام تلقائيا يحاول كشف البلد الضيف، إن لم تكن قد حجزت من قبل. يمكنك تعيين هذا الخيار إلى لا، وتحديد البلد الذي تفضل أن يظهر في نموذج الحجز، في الخيار التالي.');
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
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'هذه الميزة تسمح لك تصدير الترجمات التي تم بناؤها باستخدام ميزة ترجمة إلى اللغة. سيكون بناء حقل النص مع كافة البيانات المطلوبة لبناء ملف لغة جديدة، كل ما عليك القيام به هو نسخ ولصق هذا الإخراج إلى ملف اللغة الجديدة التي يمكنك وضع في الصعود إلى Jomres جديد يقوم الخادم، أو إذا كنت تريد أن تساهم عودة إلى المجتمع Jomres.');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'ترجمة اللغات');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'ترجمة الجمل ملف اللغة');
jr_define('_JOMRES_COM_NOTAMANAGER', 'خطأ، المستخدم تسجيل دخولك في وليس داخل سوبر مدير Jomres، فلن تكون قادرا على استخدام هذه الميزة حتى كنت قد استخدمت ميزة إظهار ملفات التعريف لجعل نفسك كل من المدير ومدير سوبر. هذا هو ميزة أمان.');
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
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'عذرا، لا يمكنك نشر هذا الفندق كما أنه لم يتم إقراره بعد.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'فندق جديد يتطلب موافقة');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'تمت إضافة الفندق إلى النظام الذي يتطلب موافقة. اضغط على الرابط لمشاهدة قائمة الفنادق تنتظر الموافقة: ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'تم اعتماد المنشاءه الخاصة بك');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'تهانينا، تمت الموافقة على الفندق الخاص بك، يرجى الضغط على الرابط التالي لمشاهدة لوحة التحكم الفندق: ');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'اسماء المناطق قابلة للترجمة');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', 'إلا إذا كنت تقوم بتشغيل خادم سريع جدا وينصح لك لترك هذه المجموعة إلى لا ونظرا لعدد كبير من الأسماء المنطقة، والمنطقة الترجمة اسم يستغرق الكثير من الذاكرة التي يمكن أن يبطئ نتائج البحث الخاص بك إلى أسفل.');
jr_define('JOMRES_TAPTOCALL', 'Tap to call');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'New review for ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'A new review has been left for ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'New Report');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'A review has been reported for ');
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Grand total (ex tax) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Grand total (inc tax) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Total tax : ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Type the two words: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Enter what you hear: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Replay the audio track ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Download the track in MP3 format');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Visual mode');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Audio mode');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Refresh');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Help');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Sorry, that was incorrect. Please try again.');
jr_define('JOMRES_GOOGLE_MAPS', 'Google map options');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Use weather layer?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Use transit layer?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Enable Gmap Points of Interest (including possibly your competitors)?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scan this code into your phone to get directions to us.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Congratulations. We were able to validate your VAT number.');
jr_define('_JOMRES_TAX_RULES_LIST', 'List tax rules');
jr_define('_JOMRES_TAX_RULE', 'Tax rule');
jr_define('_JOMRES_TAX_RULE_INFO', 'Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the "edit my account" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Import tax rates');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Edit tax rule');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'The VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Please enter the VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT number validated.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT number not validated.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Business details entered here will be used on commission and subscriptions invoices.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further.");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Production or Development?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to "production".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Production');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Development');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resource details');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tariff details');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Only');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'left!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resource feature');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Centre');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Add images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Room images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Property main image');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slideshow images');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Clear list');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop files here');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'If you upload multiple images as the "Main property image" these will be used in the Property List . Slideshow images will be shown on the property details page.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'View your image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Delete image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Upload image');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Room types icons');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Property feature icons');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Upload all files');
//8.0
jr_define('COMMON_PREV', 'Prev');
jr_define('COMMON_MORE', 'More');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Today');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Year');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Month');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Week');
jr_define('_JOMRES_DASHBOARD_DAY', 'Day');
jr_define('_JOMRES_HLEGEND', 'Legend');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'From');
jr_define('_JOMRES_HTO', 'To');
jr_define('_JOMRES_HNEW_BOOKING', 'New booking');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Deposit status');
jr_define('_JOMRES_HSTATUS_GUEST', 'Guest status');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Booking status');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Publishing status');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Invoice status');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Invoice type');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Approved');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Current business');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Show bookings for');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Show invoices for');
jr_define('_JOMRES_STATUS_ANY', 'Any');
jr_define('_JOMRES_STATUS_PAID', 'Paid');
jr_define('_JOMRES_STATUS_NOTPAID', 'Not paid');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Checked out');
jr_define('_JOMRES_STATUS_ACTIVE', 'Active');
jr_define('_JOMRES_STATUS_CANCELLED', 'Cancelled');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Published');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Not published');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Guests with active bookings');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Guests with past bookings');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Bookings');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Commissions');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'All my businesses');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Set as current');
jr_define('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Check out');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'bookings');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'properties');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'guests');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'reports');
jr_define('_JOMRES_HLIST_GUESTS', 'Guests');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'List guests');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'List invoices');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Properties');
jr_define('_JOMRES_HQUICK_BOOKING', 'Quick booking');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Date of booking');
jr_define('_JOMRES_HTWO_WEEKS', 'Two weeks');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'This booking will be cancelled. Press OK to cancel the booking.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Current residents');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Navigation bar location');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Default (content area)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Inverted navbar (colour change)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Booking number');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2.');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_HFIXED_PERIODS', 'Fixed periods');
jr_define('_JOMRES_HDEPOSITS', 'Deposits');
jr_define('_JOMRES_HBOOKING_FORM', 'Booking form');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Required fields');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'My Street');
jr_define('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define('SIMPLE_CONFIGURATION', 'Simple Configuration');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Resource features');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Resource type');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Edit guest type');
jr_define('_JOMRES_HEDIT_COUPON', 'Edit coupon');
jr_define('_JOMRES_HEDIT_EXTRA', 'Edit extra');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Create multiple resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generate resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'How many resources?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Resources type');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Max guests per resource');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Delete all existing resources?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');
jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Approval');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Reject booking inquiry');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Approve booking inquiry');
jr_define('_JOMRES_STATUS_APPROVED', 'Approved');
jr_define('_JOMRES_STATUS_REJECTED', 'Rejected');
jr_define('_JOMRES_STATUS_INQUIRY', 'Inquiry');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Bookings require approval or availability confirmation?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.');
jr_define('_JOMRES_ERROR', 'Error');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Message');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'File');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Edit email template');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Email subject');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Email text');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Email type');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Email name');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Email description');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin New Booking Email');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Email sent to property owner when a new booking is made');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Guest New Booking Email');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Email sent to guest when a new booking is made');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Guest Confirmation Letter');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Printable letter or email that can be sent manually by the property owner to confirm a booking');
jr_define('_JOMRES_CAN_BE_APPROVED', 'This booking can be approved. All selected resources are available for the selected dates.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');
jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Use Budget feature?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ');
jr_define('_JOMRES_FOR', 'For');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'night');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'nights');
jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'May');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'إظهار _START_ إلى _END_ من أصل _TOTAL_ مُدخل');
jr_define('DATATABLES_SINFOEMPTY', 'يعرض 0 إلى 0 من أصل 0 سجلّ');
jr_define('DATATABLES_SINFOFILTERED', '(منتقاة من مجموع _MAX_ مُدخل)');
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
jr_define('DATATABLES_SHOWHIDE', 'Change columns');
jr_define('_BOOKING_ONREQUEST', 'Booking on request');
jr_define('_BOOKING_INSTANT', 'Instant booking');
jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Request booking');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');
jr_define('_JOMRES_HLASTCHANGED', 'Last changed');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel Booking Cancellation Email');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Email sent to the property owner when a new booking is cancelled');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Booking Cancellation Email');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Email sent to guest when a new booking is cancelled');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Send test email');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'This is a test email from your booking system.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test email sent successfully');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test email was not sent');
jr_define('_INVOICE_TRANSACTIONS', 'Transactions');
jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Pay now');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'This invoice in now due. Please click the button to select the payment method.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Here's a list of some of the great things you can purchase while making a booking at this property. ");
jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Category');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Give your property a sub-type');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Contact settings');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending');
jr_define('_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- New Guest -- ');
jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Select chart...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, let's get started. First you need to create some rooms for this property.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Create some rooms now');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload an image');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Create some tariffs');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Rooms in the property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'The entire property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Update your address');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');
jr_define('_JOMRES_CONTANT_US', 'Contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Welcome to your new online listing for ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hi, and welcome to your new property on ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "You recently added a new property to our website, and we'd like to welcome you to the family.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'You can see your new dashboard ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' here ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Once you've setup your property you can see how it looks to site visitors by visiting ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' your front page.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(it's not published, so site visitors can't see it yet).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'If you have any questions at all, please ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "and we'll be delighted to answer all your questions.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, our team at ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Let's create some tours!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebook.com or anything else.');
jr_define('COMMON_DOWNLOAD', 'Download');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings. <br> Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button to create new Room Types.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No bookings/Real estate ( simple listing )');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map colour scheme');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'The property type helps you to define how the property will be booked, for example with hotels you "sell" just one or two rooms at a time, whereas with villas you offer the entire property.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'You can configure the minimum deposit amount to be charged. If you do, then the "Deposit required is cost of the first night?" & "Deposit required is percentage?" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'This figure cannot be less than ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Send an email to site admin when an error occurs?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. ");
jr_define('_JOMRES_FAQ', 'Frequently asked questions');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION', 'Introduction');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES', 'What is Jomres?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES', "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD', 'Can users register on my Jomres site and add their own properties?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD', 'Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES', 'Properties');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES', 'How do I add a new property?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES', "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES', 'Can I import properties from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES', "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS', 'Can I import bookings from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS', "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. ");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES', 'Can I edit email templates?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES', 'Property managers can edit email templates through their toolbar under Settings > Email Templates.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Payments');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS', 'How do I allow properties to take payments?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS', 'You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY', 'Which gateway should I use?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY', "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS', 'When a guest makes a payment for a booking, who gets the money?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS', "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING', 'Troubleshooting');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL', "Booking emails aren't being sent.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL', "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "You can't see the payment gateway after making a booking.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES', 'Jomres License');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'After buying X license, am I forced to purchase renewals once the license has expired?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED', 'My license has expired, can I upgrade Jomres anyway?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED', "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE', 'What software license is Jomres released under?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE', "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'How do I create a property?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Click on Properties > New Property to add a new property.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'How can I see what my property looks like to guests?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Click on Properties > Preview to see how your property looks to guests.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'How do I add rooms?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'How do I set room prices?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'How do I create optional extras?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'How can I take payments online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Can I give discounts?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'When I click New booking, I am taken to the Contact form, why?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'What are Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Images');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'How do I upload images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "What is the 'Main' image?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'What are room feature icons?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'How do I upload room images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'How do I upload slideshow images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'How do I upload Extras Images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP', 'How do I setup currency symbols?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP', "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES', 'How do I enable multiple currencies?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES', "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'How do I save descriptions in multiple languages?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER', 'How many properties can I list?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER', "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'No, you cannot. You can only administer properties you have created or been assigned to as a property manager.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'What are Guest Types/How do I change per person per night?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'What are Room Features?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES', 'Can I make a user a property manager?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES', "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS', 'Plugins');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS', 'What is the Plugin Manager for?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS', 'The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE', 'Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE', "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION', 'How do I install a plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION', "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE', 'Site Structure');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO', 'What does Site Structure mean?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO', "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES', 'What are Property Types?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES', 'In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES', 'What are Property Features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES', "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', 'What are Property Feature Categories?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES', 'What are Room features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES', "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES', 'Why is there a page to edit countries/regions?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES', "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION', 'Localisation/Translation');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO', 'How do I translate things?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO', "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TOURS', 'Tours');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO', 'What are tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO', "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL', 'How do I use Jomres to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL', 'To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR', 'What is the Jintour plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR', 'Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING', 'How do I sell tours and vacation rentals in the same booking?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING', "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS', 'What about if I only want to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS', "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS', 'How can I create a Tour/bookable resource that can be seen in all properties booking forms?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS', "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST', "Ok, I've installed Jomres, what next?");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST', "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now.");
jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Permit number');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Description');
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'Example');
jr_define('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_DESC', 'This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! No problems were found.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Read more');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Read less');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Tourist tax');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Tourist tax rate');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Is percentage?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");
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
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT',"Map height (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Map zoom level ");
jr_define('_JOMRES_MAP_MAPTYPE',"Map type ");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Template packages are plugins that can provide override templates for various core Jomres template files.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"This page lists any template files that can be overridden by a template package's template files. If you want to override a certain template file, click on the edit button for that file, on the next page you will be able to choose which version you want to override with. Note, these overrides take priority over both Jomres Core and any Wordpress or Joomla theme/template overrides. You can disable an override by deleting it in the List Template Overrides page.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Template name");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Not overridden");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"You can choose which template file to override the Core template files by changing the dropdown");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");
jr_define('_JOMRES_SELECT_WIDGETS',"Select widgets");
jr_define('_JOMRES_INTERVAL',"Interval");
jr_define('_JOMRES_TIMELINE',"Timeline");
jr_define('_JOMRES_CPANEL_GRID',"Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Select the grid layout of your frontend property management control panel home page.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Town images");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Changing the property type will delete all rooms, tariffs, property settings and reset availability.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager. If you have Core plugins installed, but do not have a valid Jomres license then we <em>do not</em> recommend that you update Jomres as older plugins often may not work with newer versions of Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "If you would like to update Jomres and it's plugins you will need a renewal license. Please visit <a href='https://www.jomres.net/pricing' target='_blank'>our site</a> for more information. In most cases these licenses are 50% of the price of a full license. Please ensure that you have logged into our shop before attempting to purchase a renewal.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Payment method : ");

jr_define('_JOMRES_PRICES',"Buy Jomres");


jr_define('_OAUTH_TITLE',"App key management");
jr_define('_OAUTH_APPS',"REST API client details");
jr_define('_OAUTH_IDENTIFIER',"Identifier");
jr_define('_OAUTH_APIKEY',"Client ID");
jr_define('_OAUTH_SECRET',"Secret");
jr_define('_OAUTH_CREATED',"Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO',"The Client ID and Secret are created for you. The Identifier is so that you can easily identify this key pair.");
jr_define('_OAUTH_SCOPE_TITLE',"Permissions ( what the client can do ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "User permissions");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Property permissions");

jr_define('API_DOCUMENTATION_TITLE',"App REST API documentation");

jr_define('_OAUTH_CONFIG',"API Core configuration");

jr_define('_OAUTH_CONFIG_SHOW',"Show API client configuration options in Jomres main menu?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"You may choose to not show the API client configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define('API_METHODS_TITLE',"API Methods");
jr_define('API_METHODS_DESCRIPTION',"This list of methods is based on your installed API feature plugins and is automatically generated. If you install or delete an API feature plugin you must visit this page to rebuild this list of API methods available on your site.");

jr_define('_OAUTH_REDIRECT_URI',"Redirect URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Give me a name that's meaningful to you, such as My Phone");

jr_define('_OAUTH_GRANT_TYPES',"This system supports two grant types , Client Credentials and Implicit. If you are using the <em>client_credentials</em> flow then you will need both the client id and the client secret. If using <em>implicit</em> then your app would send just the client id and you would log into the system to explicitly authorise that app.");

jr_define('_OAUTH_IMPLICIT_NOTES',"To use the <em>implicit</em> grant type flow, you will need to use this url to authorise your apps. When this url is called, and you have authorised the app the system will issue a token that you apps will then use to call this system's API ");
jr_define('_OAUTH_AUTHORISATION_URL',"Authorisation URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );

jr_define('_WEBHOOKS_CONFIG_SHOW',"Show Webhook configuration options in Jomres main menu?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"You may choose to not show the Webhook configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Webhooks documentation");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration' );
jr_define( 'WEBHOOKS_INTEGRATION_ID', 'Integration ID' );
jr_define( 'WEBHOOKS_INTEGRATION_URL', 'URL or Name' );
jr_define( 'WEBHOOKS_ENABLED', 'Enabled' );

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration' );

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Any webhooks you create will not be triggered as you are not assigned to any properties. Super property managers are not typically assigned individual properties, so you may need a new user for webhook creation.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Any webhooks you create will be triggered against the following properties : ' );


jr_define( 'PORTAL_REVIEWS_LIMIT', 'Reviews limit' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Use this setting to limit the number of reviews shown in the property details page.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Show all reviews' );

jr_define( 'VIDEO_TUTORIALS', 'Video Tutorials' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum deposit value' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "If the calculated deposit is less than this figure, then set deposit to this value instead. This figure might itself be over-ridden if it does not satisfy the site's minimum deposit setting. Leave it set to 0 to not use the setting." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Import existing images details to database');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimental feature. If enabled, images uploaded using the media centre feature will also be copied to your Amazon S3 bucket and served from your Amazon S3 bucket url. When enabling this the first time, you`ll also be promted to import existing images to your S3 bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Replace your default Amazon S3 domain with your CloudFront domain');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Recommended to be enabled. For Windows and Mac OSX only, if libcurl wasn`t built with Schannel or Secure Transport support (the native SSL libraries included in Windows and Mac OS X), you should set this to No.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Once you click this button, please do not interrupt the process and wait for a success or error message. Depending on server speed, this may take a while to complete.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copy existing images to Amazon S3 bucket');


jr_define( 'JOMRES_INCOMPLETE', 'Incomplete' );
jr_define( 'JOMRES_WATING_APPROVAL', 'Pending approval' );
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', 'Property details map' );

jr_define( 'HAS_STARS_TITLE', 'Allows stars classification?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Delete all Jomres data when uninstalling?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'If set to yes, Jomres will delete all it`s database tables when uninstalled. This will delete all Jomres data from db and can`t be undone.');

jr_define( 'TRANSACTION_IDS', 'Transaction id');
jr_define( 'PAYMENT_METHOD', 'Payment method');
jr_define( 'POA_DISPLAY_PRICE', 'POA Price');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'When properties are shown in a list, the system will attempt to find a valid price from configured tariffs based on either today\'s date, or if dates were used in a search, then based on those dates. If it cannot, then it will show POA (Price on application), meaning that the guest should contact you to get a price. If you want, you can configure a price here that will be shown instead of the POA text. This figure would be a "fallback" price to display if no other price can be determined.');

jr_define( 'PLUGINMANAGER_INSTALL', 'You need to install the plugin manager before you can install Jomres plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'You need to update the plugin manager before you can update any installed plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Let's do this!");

jr_define( 'INCLUDEINFILTERS', 'Include in filters?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Property feature filters in Ajax Composite Search can become very long, so you can set this option to No to prevent this feature from showing in the property feature list.');

jr_define( 'REVIEW_REMINDER_PT1', "You have ");
jr_define( 'REVIEW_REMINDER_PT2', " booking(s) that you have not left a review for yet. Please leave a review.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Bookings waiting for reviews");
jr_define( 'REVIEW_NAG', "Nag guests for reviews?");
jr_define( 'REVIEW_NAG_DESC', "Once a guest has been booked out from a booking, the system will remind them to post a review for their booking. Set this option to No to disable this reminder.");

jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Send copies of the booking emails to site admins?");
jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "When enabled, copies of the booking emails sent to property managers will be sent to all site admins too.");

jr_define( 'HIDDEN_ADDRESS_SETTING', "Hide address?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "If you set this option to Yes, then only guests who have already placed a booking on your property will be able to see the property street address. You might want to use this setting to hide the property's exact location if, for example, it is routinely left unattended.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimize images on upload?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'When enabled, images will be optimized for web (file size can be up to 75% smaller). Depending on the uploaded image type, your server needs to have one or more of these libraries installed by the hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define( 'OBSOLETE_FILES_CHECK', 'Obsolete Files Check');
jr_define( 'DATATABLES_COLVIS', 'Column Visibility');

jr_define( 'API_TOKEN_LIFETIME', 'API token lifetime');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');

jr_define( 'ENCRYPTION_TITLE', 'Encryption' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Encryption file location' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Never delete the encryption file** <br/> User data is stored encrypted in tables to ensure that "data at rest" is protected securely, in accordance with GDPR recommendations. By default the encryption key is stored in the file "encryption_key.class.php" in the root of your Jomres installation (typically /public_html/jomres). You can change where the file is stored here. If you do change the location, you must MOVE the file, do not wait for Jomres to create a new version otherwise you will not be able to decode your guests\'s details.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'The information you save here will be used on invoices generated for this property');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR Policies' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Here you can configure how long after a booking or invoice has been created it is removed from the system to ensure that you are compliant with the GDPR.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Booking Retention period (in days)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Invoice retention (non-booking) period' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Other invoices, such as commission and subscription invoices, are not tied to bookings. As a result they will not be deleted when booking invoices and contracts are deleted. Depending on your country, and your own business practices, you will need to configure a different retention period. A typical retention period might be 3653 days, which is 10 years.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Your data' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Some features of this website need to store information about your visit. This is used only to provide service to you, is never shared with anyone else and is deleted when no longer needed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DO YOU GIVE US PERMISSION TO STORE THIS INFORMATION??' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In detail' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'You must consent to us storing this data for you to be able to make bookings on this site. Regardless of whether or not you consent to your data being stored, we will store a cookie on your computer to tell us whether or not you have opted in. This helps us to ensure that we do not constantly ask you whether or not you want to opt in or out and it does not contain any Personally Identifiable Information (PII). If you change your mind you can visit the "App permissions" page at any time to opt in or out.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'The information is stored for different time periods depending on the nature of your visit. So, if  you are just looking around we will store approximate geographical location (country level) information. If you perform searches, then to make search forms more user friendly we will store the last things you searched on. This information is typically stored for a maximum of 24 hours and is only used to make your visit more pleasant.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'When you make a booking with us, by necessity more information is stored.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'The technicalites of the booking form are captured and retained for a maximum of 60 days. This is required so that On Request bookings can be turned into full bookings once a booking is approved, and for analysis by our teams in case there is an issue with a booking. If you were not logged in when you made a booking then we will email you a username and password so that you can view your booking history and exercise your Right To Be Forgotten (RTBF) if you wish to do that.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data entered into the booking form, for example name, email address, real address is stored for a maximum of 365 days after the booking\'s departure date. This information is stored in encrypted form in our database so that only authorised people can view it. If you make a booking then by law we must store your PII whilst the booking is valid. Once the booking has completed, either because it has been cancelled or you have been checked out, then you will be able to exercise your RTBF by logging in and visiting the "Your data" page. Invoice information for completed bookings will still be securely stored in our database to ensure that we abide by relevant tax laws but you will be able to remove all other PII after the booking is completed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'When you consent to your information being stored as described above, we are legally obliged to store this consent in our database. This information will include your IP number and the content of the opt-in form. We will retain this consent notification indefinately (this is a legal requirement).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'You have not yet told us if we can collect Personally Identifiable Information about you' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'You have consented to us collecting the necessary Personally Identifiable Information to take bookings' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'You have told us to not collect Personally Identifiable Information' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'You have not given us permission to collect your private data' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For you to perform certain actions on this website we have to collect Personally Identifiable Information about you, but you have not given us permission to do so.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Change your permissions' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continue viewing properties' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App permissions' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Guest data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'These are the details that are stored for you by the various properties. Different hotels may hold different records, depending on what you entered when you made the booking.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'You do not have any data stored with any hotels in this system' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profile data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'This is the main data set we hold for you, distinct from those you have shared with different properties.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'You have not saved any profile information' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Here is the Personally Identifyable Information that we store on this website for you. It is constructed in JSON (JavaScript Object Notation) format which is a lightweight data-interchange format. It is easy for humans to read and write and it is easy for machines to parse and generate.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'Anonymised' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'Your data' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'By accepting these Terms of Use Agreement (this “Agreement”), you agree that:

<ul>
	<li>
		You are authorized to book hotels through this website;
	</li>
	<li>
		You are at least 18 years of age;
	</li>
	<li>
		You possess the legal authority to create a binding legal obligation;
	</li>
	<li>
		You will use the Site in accordance with this Agreement;
	</li>
	<li>
		You will only use the Site to make legitimate reservations for yourself or for another person for whom you are legally authorised to act;
	</li>
	<li>
		You will inform such other persons about this Agreement that applies to the reservations I have made on their behalf, including all rules and restrictions applicable thereto;
	</li>
	<li>
		All information supplied by yourself to the Website is true, accurate, current and complete; and
	</li>
	<li>
		You will safeguard your account information and will supervise and be completely responsible for any use of your account by yourself and anyone other than you.
	</li>
</ul>
' );
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Security and transparency are important to us.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'We take our responsibilities regarding storing your data very seriously. All Personally Identifiable Information (PII) is stored encrypted in our database using industry standard algorithms to ensure that only authorised users can view this information.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'You can download all of the PII we store for you.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Download now' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Forgotten (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'We believe that you should be able to <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">delete</a> your <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Personally Identifiable Information </a>if you want and if it is practicable. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'You are not registered on this site. Your general location (country) and IP number will be stored for a maximum of 24 hours and then deleted.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'You are not registered on this site and you have opted out of data collection. We have not stored your PII.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'You are registered on the site and do not have any pending or active bookings. We can anonymise most information we currently hold for you. Would you like to do that? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Note : This does not delete your account, it simply anonymises our records so that your account cannot be associated with you as a person. By law we must continue to store your PII for invoicing purposes, however we will delete all guest records.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'You are registered on the site, however you have bookings outstanding and we cannot anonymise your data at this time. This data will be retained for a maximum of one year after the booking has been completed, then it will be deleted, if you do not choose to remove it before that time.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Because you are a property manager on our site, we cannot offer you the ability to have your data deleted automatically. Instead, please contact us directly so that we can assign your property(s) to another manager. Once we have done that and removed your status as a property manager, you will be able to automatically have your data deleted.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Forget me!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'This cannot be undone!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Your data has been deleted!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sorry, you cannot make a booking as your email address is invalid' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'This page gives you the ability to anonymise any guests who have their information stored in the system. This allows you to be compliant with the GDPR, however you cannot edit any other information on this page. To do that you have to log into the frontend as a property manager. The assumption is that a historic guest has contacted you requesting that you allow them to exercise their right to be forgotten. If they are unable to log into the frontend of the site (perhaps a user was not created for them when they booked) then you can use this area to anonymise them once you have confirmed their identity.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymise guest' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Guest data anonymised' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Cannot anonymise' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We need your permission to store your information before you can make a booking. CLICK HERE to give us permission.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'Enable GDPR compliant functionality?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WE DO NOT RECOMMEND THAT YOU DISABLE THE GDPR COMPLIANT FUNCTIONALITY. Jomres has built-in features that helps you to ensure that the Jomres section of your site is compliant with the GDPR. If you disable this feature (and you should not if you are in the EU or you do business with citizens of the EU) then Jomres will automatically assume that every visitor to the site has given their permission to have their personal data enabled. App permission and My Data pages will not be shown and users will not be prompted to give their permission to have the data collected.' );


jr_define( 'EMPTY_TEMP_DIR', 'Empty temp dir' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Temporary files deleted' );

jr_define( 'MACHINE_TRANSLATION', 'Machine translations' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.' );

jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Room Types' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'New Room type' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'You can create and edit room types on this page. These room types will be specific to this property only. When setting up your property you first need some Room Types. You can use either those room typies created by the administrator, or you can add your own. Once you have one or more Room Types you can then create rooms of that Room Type. After you have rooms you can then create tariffs (prices) for those rooms because tariffs are linked to Room Types.' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managers can create room types?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use this option to configure whether or not managers can create their own room types in the frontend. We strongly recommend that you leave this option set to No when you first start using Jomres, especially if you are creating a portal because you should create all room types in the administrator area. Room types created by managers will appear in search forms, but because these room types are specific to individual properties, only one property will be shown in search results if that room type is selected durings searches. If you want so that only Super Property Managers can create room types then leave this option set to Yes and use the Access Control plugin to allow only super managers to view the "Settings > Room types" menu option. Only properties that rent out rooms in the property and use Advanced or Micromanage tariff editing modes can use this option. Villa/apartment type properties will not be able to use it.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Room/property type updated');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Show room types in search options' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'If you choose to allow property managers to create their own room types, you can choose whether or not to show those created room types in the search options where you have chosen to show room types.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "You shouldn't re-use the same email address for each booking.<br/>If you have a unique domain (eg. not a gmail email address) for your business then use the guest's telephone number as their email address. The email address would then look something like 123456@mydomain.com<br/>This will ensure that a new guest is created when you create a booking ." );

jr_define( '_JOMRES_LOGIN_USERNAME', 'Email address' );
jr_define( '_JOMRES_LOGIN_PASSWORD', 'Password' );
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"We are delighted that you would like to book with us again. To be able to manage all your bookings together, it is necessary that you log in so that the booking can be added to your account. This also ensures that you are authorized to use the e-mail address provided." );

jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'If you do not know your password we can send you a password reset email. Please follow the instructions in that email to reset your password.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Forgot your password?' );

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymise your name?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'If you choose to anonymise your name when reviewing we will use your initials instead.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' said ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Reply to this review');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Type your reply to this review here.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Your reply');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Review reply saved');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Before submitting a review reply, you must read the following. By submitting a reply you confirm that you agree to these terms and conditions.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'What are our guidelines for a review reply?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'You are responding to the review of your property. You <em>must not</em> use your reply as a commercial dispute process. If you need to report a review, you must use the "Report Review" button on the listing, and not this review reply page.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Once you have left your reply you will not be able to edit it.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Allowed and Encouraged');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
	<ul>
    <li>A full response to the review.</li>
    <li>Courtesy and Honesty.</li>
    <li>Sensible responses to the reviewer\'s issues (remember, others may be having similar issues but did not take the opportunity to post a review).</li>
    <li>Encourage the guest to get in contact with you directly to solve issues.
    <li>Always remember that future guests will see your response. Make sure to be professional at all times.</li>
	</ul>
	');
	
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Not allowed');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
	<ul>
    <li>Commercial disputes.</li>
    <li>Questions to the Reviewer or Others.</li>
    <li>Questionable Language (including cursing).</li>
	</ul>
	');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last ran');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Invoice numbers');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Use custom invoice numbers?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'You can configure the system to use custom invoice numbers. Only new invoices will be affected.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Start number');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numbers are created consecutively. What should the first number be?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'What format should the invoice number take?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configure the invoice number format here. A format can look like {N}/{D} or {N}/{Y} where N is the automatically generated number, D = date in the format YYYYYMMDD (20190131) or Y = YYYY (2019). Any other alpha numeric characters not enclosed in curly braces will be left alone, so a pattern that looks like {N}/{D}-L would result in an invoice number (21) that looks something like 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Surcharge');
jr_define('_JOMRES_SURCHARGE_DESC', 'An additional charge that will be added to the room when booked (calculated per day)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritise site-wide labels?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Custom text saved in the label editing or the translate lang file strings pages are considered "site-wide" labels. Property managers can also customise labels for each property using the label editing feature in the frontend. This allows a property manager to have different texts for his property, which is useful if the property is different to all of the other properties on the site.<br/> When the system searches for label texts, it will prioritise site-wide texts over property specific texts meaning that if a site-wide text exists for that label, the system will choose that one first. If you set this option to No, the system will prioritise property specific texts over site-wide texts.');

jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // This could be changed if whitelisting, so site "World's best booking site" would change this to "WBBS" or similar.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Vendor and Node Modules are separate (free) packages for Jomres. You can re-install the packages on this page.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Re-install library packages');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Unable to delete property type because it is still be used by some properties. You must change these properties to another property type first before attempting to delete this one. Property UIDs that prevent deletion : ');
jr_define('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Unable to unpublish property type because it is still be used by some properties. You must change these properties to another property type first before attempting to unpublish this one. Property UIDs that prevent the change : ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Random email addresses');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Offer Random Emails');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'You can allow the system to generate random email addresses in the Quick Booking popup in the dashboard. This allows managers and receptionists to create bookings for guests that they do not have email addresses for, it is intended to work as a time saver for sites with many receptionists/managers who understand that these random emails will never be used for real communication, the purpose is to get around the fact that in Jomres all guests must have email addresses. You MUST also provide a domain in the next field.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'This should not be a normal email domain, such as gmail or outlook. Instead it can either be your own domain, or something else entirely, such as "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Upload area');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'No user role');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Suspended');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Deleted from CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'If you like Jomres, please consider leaving a review on one of these sites');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'I`m a nice person, i`ve already left a review');

jr_define('_LICENCE_PROMPT_DEAR', 'Dear ');
jr_define('_LICENCE_EXPIRED', ', your Jomres license key has expired, so you`re missing these great features and benefits! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Plugin updates and new plugin releases');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_EXPIRED_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Restart your membership now!');

jr_define('_LICENCE_INVALID_KEY', 'Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_INVALID_START', 'Start your free trial now!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Users');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Invoices');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Tools');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Reports');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Settings');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Help');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total properties in system');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Published properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Unpublished properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Approved properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Properties requiring approval');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Unpublished reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Review reports ');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "This property's property type is not published, it may not appear in search results. Please contact the site administrator to publish the property type, or change the property type in the Edit Property page.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Update your property type');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Income (paid amounts)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Cannot delete the property feature "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" because it is used by the following property(s) : ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'This page performs a basic test of the REST API using built-in functionality in Jomres. It calls the Jomres REST API to see if it receives a valid response.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'The server called this URL to see if the response is valid : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'The page received this response : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'The test appeared to go as expected, you will probably not have any problem receiving REST API requests from the rest of the Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'The test failed, look in the Response field, if it looks like a lot of html, or you recieved a 404 message, then your server is redirecting calls to another url. This will prevent you from receiving API calls.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'The Jomres App server maintains a list of all Jomres sites. This allows us to build a syndication network. This network is designed to allow our users to display properties from other sites on their own sites and is useful, particularly for new sites, to build up an SEO presence on the net. The goal is for all Jomres sites to work together, building trust in the network. There is no charge for this service.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Your site is not currently listed on the Jomres App server, which is part of the syndication network. This server will try again to add this server to the network on the next 6 page loads. If, after a few page loads, this does not change please check that the connectivity test above passes the tests. Note, localhost servers cannot be added to the network.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Congratulations, your server is listed on the Jomres App server.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Syndicated properties');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Here are some other properties available from our property network');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndication stats');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Congratulations, your server is listed on the Jomres Syndication Network. Your property(s) will start appearing on other Jomres sites soon, if they are not already being shown.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'You installation is not part of the Jomres Syndication Network, therefore your property(s) are not being shown on other Jomres based sites and you can\'t benefit from this free advertising.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Active Jomres installations : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'The total number of Jomres installations that are sharing Jomres Syndication Network properties on their sites. ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'This is the number of properties available in the JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'In total, all of the times a Jomres property has been linked to from another Jomres based site.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) is a free feature available to all Jomres users. It\'s purpose is to provide you with free advertising of your properties on other Jomres based sites. The goal is to help you get your site off the ground fast, offering free advertising so that your properties are recognised and trusted because they are linked to high confidence, high relevance websites that are already well known to the search engines. See this <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank">article on our website</a> and <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank">the manual</a>  for more information.');


jr_define('GUEST_PROFILE_INFORMATION', 'This is your guest profile data, fields with this symbol <i class="fa fa-users" aria-hidden="true"></i>
 are publicly visible, whereas fields with this symbol <i class="fa fa-user-secret" aria-hidden="true"></i> can only be seen by you, your hosts and site administrators.<br/><br/>Hosts can only see private information if you have already created a booking with them.<br/><br/>Your information is safely encrypted and stored in our database using AES-256 encryption.');

jr_define('GUEST_PROFILE_OPTIONAL', 'These fields are optional, however hosts may use the information here to determine if they feel that they can trust you, therefore it\'s better to add the information. Remember, you are asking to stay in their property, and they may turn you down if they feel you aren’t a good fit or that your bio doesn’t contain enough information.');
 
jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Driving license');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Passport number');
jr_define('GUEST_PROFILE_IBAN', 'IBAN number');
jr_define('GUEST_PROFILE_ABOUT_ME', 'About me');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'This "About me" section is publicly viewable so don\'t put in any private information. That said, do make an effort to put as much as you feel comfortable sharing such as your passions, what you do for a living, your hobbies etc. You can use Markup to give it a bit of jazz. Hosts will want to feel that they can trust you with their properties. Make sure that your picture is a real picture of you, not your dog or car (yes, guys, we\'re talking to you!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'Enter any special requirements you may have, such as ease of access needs here. They will not be shown on your public profile but they will be added to the booking information when you make a booking.');

jr_define('VIEW_HOST_PROFILE', 'Host\'s profile');

jr_define('GUEST_PROFILE_TITLE', 'Guest profile');
jr_define('GUEST_PROFILE_TITLE_MY', 'My profile');

jr_define('GUEST_PROFILE_WELCOME', 'Hi, let me tell you a little bit about myself.');
jr_define('GUEST_PROFILE_MY_NAME', 'My name is ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' and I come from the ');
jr_define('GUEST_PROFILE_IN', ' region in ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'My private information');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'We do our best to validate guest and host information however you should do your own due dilligence and decide for yourself whether or not this person is trustworthy.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'My properties');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'This is what I said about this property : ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'I gave this property a rating score of : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_OF_ME', 'What other people say about me');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'What this host said about me');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Review guest');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'My review of this guest ');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Here are some example guest reviews to get the ball rolling : <br/>
	
	<ul>
	<li>(guests name) was a pleasure to host! They left the space clean and were quiet throughout the weekend. They had smooth communication and I look forward to having them stay with me again!</li>
    <li>I loved having (guest name) because they were able to treat the place with respect, have a great time and enjoy the area. They were awesome with renting the space and I hope I get to host them again.</li>
    <li>All of my house rules were respected with (guest name) and they were able to come in and go with ease. I loved having them there as they were respectful and quiet. I highly recommend them to others!</li>
	</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Sorry, I can\'t find that user. Most likely they have not filled in their account details yet.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'Mark as No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Booking marked as No Show');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN statistics for this user');

jr_define('BOOKING_NOSHOW_INFO', 'Booking and No Show information is pulled from the Jomres Syndicate Network at booking time. It is taken from anonymised data and can be used by you to decide if this guest is a risk of not fulfilling the booking. If the system reports that the data is unknown, it is probably because this system is not recognised on the network.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Unknown');
