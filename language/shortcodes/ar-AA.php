<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.0.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'هذه هي صفحة الواجهة الأمامية للخاصية cpanel.') ;

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART' , "هذا هو مخطط شريط الملكية الذي يوفر نظرة عامة على الحجوزات في الوقت الفعلي والتوافر والإشغال في لمحة.") ;

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'يسمح هذا البرنامج النصي للمستخدم بمقارنة عدة خصائص مع بعضها البعض , بحد أقصى 3 خصائص.') ;
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'قائمة مفصولة بفواصل لمعرفات الخاصية , على سبيل المثال 12,8,7') ;

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER' , 'يبني نموذج الاتصال بالمالك.') ;
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID' , "قم بتمرير معرف الخاصية الخاص بالملكية ليتم الاتصال بك. مرر 0 (صفر) للاتصال بمسؤول الموقع بدلاً من ذلك.") ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS' , "تعرض صفحة معلومات الشركة التي تسحب التفاصيل من حقل تفاصيل شركتك في إدارة الممتلكات في تكوين الملكية. عادةً ما تُستخدم التفاصيل الموجودة في علامة التبويب هذه للمراسلة , مما يسمح للمديرين بالحصول على عنوان الفندق / الشقة , و عنوان منفصل لأغراض تجارية. ") ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "إظهار تقويم الخاصية") ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID' , 'قم بتمرير معرف الخاصية للخاصية المراد عرضها.') ;
jr_define ("_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW" , "الأشهر المراد عرضها , الافتراضي هو 24 إذا لم يتم تعيينها بخلاف ذلك. غير متوافق مع متغير إظهار الشهر فقط.") ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH' , "اضبط هذا على 1 إذا كنت ترغب فقط في إظهار الشهر الحالي بمفرده. سيتم تجاهل إعداد month_to_show إذا تم استخدام show_just_month في أحدهما , لذا يجب عدم استخدام أحدهما في نفس الوقت. في نفس الوقت.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'إظهار نص وصف الخاصية فقط.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'إظهار نص وصف الخاصية فقط.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'إظهار ميزات الخاصية فقط.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER' , 'يظهر فقط قالب رأس الخاصية.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES' , 'يعرض فقط أنواع غرف الملكية.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID' , 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'يظهر فقط الصورة الرئيسية للخاصية.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'إظهار خريطة الملكية فقط.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'إظهار الخاصية More Info text.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS' , "رمز الاستجابة السريعة المرتبط بـ gmaps. يمكن مسحه ضوئيًا في الهاتف باستخدام تطبيق قراءة رمز qr الذي يوفر الاتجاهات إلى الخاصية.") ;
jr_define ("_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID" , "معرف الخاصية.") ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "إظهار تقييمات الخاصية.") ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "إظهار ملخص مراجعة الخاصية.") ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID' , 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'إظهار غرفة فردية.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'معرف الغرفة.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "إظهار غرف الخاصية.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "إظهار صور غرفة الخاصية كعرض شرائح.") ;
jr_define ("_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID" , "معرف الخاصية.") ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'إظهار عرض شرائح الخاصية.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'إظهار تعريفات الممتلكات.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS' , "يعرض عنوان العمل للموقع كما تم إدخاله في تكوين الموقع> تفاصيل شركتك.") ;

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'إظهار شروط وأحكام الملكية.') ;
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'معرف الخاصية.') ;

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR' , "يعرض تقويم واجهة المستخدم الخاصة بالملكية , وهو تقويم مختلف عن التقويم الرئيسي الكبير ويستند إلى وظيفة تقويم Jquery UI.") ;
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID' , 'قم بتمرير معرف الخاصية للخاصية المراد عرضها.') ;
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'اضبط هذا على 1 لعدم إظهار وسيلة الإيضاح.') ;

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "إظهار نتائج البحث , والتي يمكن تحسينها عن طريق إضافة معامِلات البحث. لا نوصي باستخدام جميع المعلمات في نفس الوقت , لأنك ستنتهي بمعايير بحث محدودة للغاية. بدلاً من ذلك , يجب أن تقيد نفسك بمعامل واحد أو اثنين فقط , مثل البحث حسب البلد وعدد النجوم. ");
jr_define ("_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY" , "بحث حسب البلد , باستخدام رمز ISO Alpha-2 , على سبيل المثال GB أو DE.") ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION' , "البحث حسب المنطقة. نظرًا لأنه يتم حفظ المناطق في قاعدة البيانات , يجب عليك استخدام معرف المنطقة. قم بزيارة المسؤول> Jomres> بنية الموقع> قائمة المناطق وقم بالمرور فوق الرابط تحرير , هناك سترى رقم معرف المنطقة . ") ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN' , 'الاسم الكامل للمدينة التي تريد البحث عنها.') ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS' , "البحث عن خصائص ذات ميزات معينة. يمكن العثور على معرفات الميزات في Administrator> Jomres> Site Structure> Property Features. ") ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE' , 'البحث عن خصائص بأنواع معينة من الغرف. يمكن العثور على معرفات أنواع الغرف في Administrator> Jomres> Site Structure> Room Types.') ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'ابحث عن خصائص نوع خاصية معين. يمكن العثور على معرفات نوع الخاصية في Administrator> Jomres> Site Structure> Property types.') ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'البحث عن عقارات ضمن نطاق سعري محدد.') ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER' , "البحث عن خصائص تسمح التعريفات الخاصة بأعداد الضيوف بقيم معينة , على سبيل المثال الأطراف من 6.") ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Search for properties of N stars.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE' , "البحث حسب تاريخ الوصول. يجب دمجه مع علامة تاريخ المغادرة.") ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE' , "البحث حسب تاريخ المغادرة. يجب دمجه مع معلمة تاريخ الوصول.") ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'بحث حسب فئة الخاصية.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "عرض صفحة الوكيل. يمكنك تمرير إما معرف الخاصية , أو معرف الوكيل نفسه , إذا كنت تعرفه.") ;
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID' , "معرّف الخاصية , سيُظهر هذا وكيل الملكية.") ;
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID' , "معرف قاعدة بيانات المدير , إذا كان معروفًا.") ;

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR' , 'يعرض الخصائص الشائعة , التي تُستخدم عادةً في مواضع الوحدة النمطية أو عنصر واجهة المستخدم.') ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT' , 'الحد الأقصى لعدد الخصائص التي يمكن عرضها.') ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'إظهار خصائص أنواع هذه الخصائص المحددة فقط.') ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL' , 'اضبط على 1 لإظهار الوحدات المحسّنة لموضع عنصر واجهة مستخدم رأسي / وحدة.') ;

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM' , "يعرض اختيارًا عشوائيًا للخصائص , وعادةً ما يستخدم في مواضع الوحدة النمطية أو عنصر واجهة المستخدم.") ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT' , 'الحد الأقصى لعدد الخصائص التي يمكن عرضها.') ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'عرض خصائص أنواع الخصائص المحددة هذه فقط.') ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL' , 'اضبط على 1 لإظهار الوحدات المحسّنة للوضع الرأسي لعنصر واجهة المستخدم / الوحدة.') ;
    
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "يعرض أحدث خصائص الضيف المعروضة , والتي تُستخدم عادةً في مواضع الوحدة النمطية أو عنصر واجهة المستخدم.") ;
jr_define ("_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT" , "الحد الأقصى لعدد الخصائص التي يمكن عرضها.") ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL' , 'اضبط على 1 لإظهار الوحدات المحسّنة للوضع الرأسي لعنصر واجهة تعامل / وحدة.') ;

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES' , 'يعرض عددًا من الخصائص , تُستخدم عادةً في مواضع الوحدة النمطية أو عنصر واجهة المستخدم.') ;
jr_define ("_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS" , "معرفات الخاصية للخصائص التي تريد إظهارها.") ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL' , 'اضبط على 1 لإظهار الوحدات المحسّنة للوضع الرأسي لعنصر واجهة المستخدم / الوحدة.') ;

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'يعرض القائمة المنسدلة لاختيار العملة.') ;
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'تمكين / تعطيل إخراج القالب البديل. هذا الإخراج مخصص للاستخدام في أشرطة أدوات Bootstrap.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'عرض صفحة عربة التسوق.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'يعرض وحدة عربة التسوق / عنصر واجهة المستخدم.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU' , 'يعرض القائمة الرئيسية. ملاحظة , إذا كنت تقوم بتشغيل إصدار مخصص من mainmenu_wrapper_alternate.html على سبيل المثال / Templates / jr_leohtian / html / com_jomres_ar , فقد تحتاج إلى استبدال <jomresition_mission_umresition. / i> مع MENU_LOCATION ملفوفة بأقواس معقوفة. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP' , 'تسمح لك هذه الصفحة بتحميل الصور لممتلكاتك والأشياء التي تقدمها. تحتوي على زر رئيسي واحد وزر ثانٍ يسمح لك بتحديد موارد معينة لتحميل الصور لها. لذا , الخاصية الرئيسية ستظهر الصورة وعرض الشرائح زرًا واحدًا فقط ولكن إذا قمت بإنشاء أي منها , على سبيل المثال , إضافات أو غرف اختيارية , فسترى زرًا ثانيًا حيث يمكنك تحميل الصور لتلك الموارد المحددة. ') ;
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP' , 'تتيح لك هذه الصفحة تحميل الصور لممتلكاتك والأشياء التي تقدمها. تحتوي على زر رئيسي واحد وزر ثانٍ يسمح لك بتحديد موارد معينة لتحميل الصور لها. لذلك , الخاصية الرئيسية ستظهر الصورة وعرض الشرائح زرًا واحدًا فقط ولكن إذا قمت بإنشاء أي إضافات اختيارية , فسترى زرًا ثانيًا حيث يمكنك تحميل الصور لتلك الموارد المحددة. ') ;


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', '<ol>
  <li> اختر أولاً الصورة (الصور) التي تريد تحميلها بالنقر فوق "إضاف ورة" أو استخدام السحب والإفلات. ستظهر هذه في العمود على الجانب الأيمن. </ li>
  <li> فوق هذه المنطقة , استخدم الزر \ "اختيار المورد \" لاختيار المورد الذي تريد تحميل الصور إليه. قد يُعرض عليك خيار اختيار مورد معين تحته. </li>
  <li> بمجرد اختيار مورد , يمكنك النقر فوق الزر "تحميل صورة" أسفل صورة لربطها بهذا المورد. بمجرد تحميل الصورة , ستختفي من العمود الموجود في الموقع الأيمن , وستظهر في اليسار. </ li>
  <li> استخدم زر المهملات بجوار الصور الحالية لإزالة الصور التي لم تعد تريد عرضها. </ li>
  <li> يمكنك تغيير ترتيب عرض الملفات في عرض الشرائح عن طريق إعادة تسميتها قبل تحميلها , حيث يتم عرضها في الصفحات بترتيب أبجدي. </ li>
</ol>
 ') ;

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW' , "بجوار زر الموارد , قد ترى زر معاينة. إذا نقرت على هذا , فسترى نافذة منبثقة توضح لك كيف ستبدو الصور التي تم تحميلها حاليًا في الصفحة. وهذا يساعد في منحك فكرة عن كيفية ظهور الصور لعملائك. ") ;

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "لا يوجد حد لعدد الصور التي يمكنك تحميلها. يتم تغيير حجم الصور تلقائيًا عند تحميلها. يمكنك فقط تحميل ملفات JPG و PNG.") ;
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE' , "من الناحية المثالية , ستكون أي صور تقوم بتحميلها على الأقل") ;
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST' , "بكسل عرضًا , وإلا فقد تبدو غامضة بعد تحميلها.") ;

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE' , "أي صور تقوم بتحميلها لا يمكن أن تكون أكثر من") ;
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST' , "بالحجم.") ;

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "اختر المورد الذي تريد تحميل الصور له") ;
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "مورد محدد") ;
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "الصور التي تم تحميلها بالفعل لهذا المورد") ;

jr_define ('_JOMRES_MARKDOWN_TITLE', 'تنسيق النص') ;
jr_define ("_JOMRES_MARKDOWN_DESC" , "يمكنك إدخال نص هنا باستخدام تنسيق Markdown البسيط. لست بحاجة إلى معرفة أي HTML , فقط استخدم الأزرار لجعل المعلومات تبدو كما تريد , أو تنسيق النص وفقًا لهذه الأمثلة." ) ;
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'توكيد') ;
jr_define ('_JOMRES_MARKDOWN_BOLD', 'غامق') ;
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'italics') ;
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'يتوسطه خط');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "رؤوس") ;
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'رأس كبير') ;
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "رأس متوسط") ;
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'رأس صغير') ;
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'رأس صغير') ;
jr_define ('_JOMRES_MARKDOWN_LISTS', "القوائم") ;
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'عنصر قائمة عام') ;
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'عنصر قائمة مرقمة') ;
jr_define ('_JOMRES_MARKDOWN_LINKS', 'روابط') ;
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT' , 'نص للعرض') ;
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'اقتباسات') ;
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE' , 'هذا اقتباس.') ;
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'يمكن أن يمتد لعدة أسطر!') ;
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'الصور') ;
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tables') ;
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'عمود');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'إظهار صور الخصائص كعرض شرائح في قائمة الخصائص؟') ;
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'إذا تم التعيين على نعم , سيتم عرض عرض شرائح للصور الرئيسية للخاصية. إذا تم الضبط على لا , فسيتم عرض أول صورة رئيسية للخاصية.') ;

jr_define ('EDIT_CMS_USER', 'تحرير مستخدم CMS') ;

jr_define ("BOOKING_MADE_BY" , "تم الحجز بواسطة") ;

jr_define ('_JOMRES_ROUTER_FEATURES' , 'وسائل الراحة') ;
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'أنواع الغرف') ;

jr_define ("_JOMRES_BOOKING_FORM_EXTERNAL_URL" , "عنوان URL لنموذج الحجز الخارجي") ;
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC' , 'هنا يمكنك تعيين عنوان URL خارجي إذا كنت تريد استخدام موقع ويب تابع لجهة خارجية لإجراء الحجوزات. ستشير جميع أزرار حجز jomres إلى عنوان URL هذا. اترك هذا الحقل فارغًا إذا كنت تريد استخدام نموذج حجز Jomres . ') ;

jr_define ('_JOMRES_ROOM_TAGLINE', 'سطر الوصف (وصف الغرفة القصير / العنوان الفرعي)') ;
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'وصف الغرفة');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'ضيف في القائمة السوداء') ;
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC' , "إذا كان هذا الضيف مدرجًا في القائمة السوداء , فلن يتمكن بعد ذلك من إجراء الحجوزات في هذه المنشأة. ') ");
jr_define ('_JOMRES_SESSION_HANDLER', 'Session handler') ;
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'حفظ ملفات جلسة jomres على القرص أو إلى قاعدة البيانات. مستحسن: قاعدة البيانات');
jr_define ('_JOMRES_MAP_HEIGHT', "ارتفاع الخريطة (بكسل)") ;
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "مستوى تكبير الخريطة") ;
jr_define ('_JOMRES_MAP_MAPTYPE', "نوع الخريطة") ;

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "مدير تجاوز القالب") ;
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD' , "حزم القوالب هي مكونات إضافية يمكن أن توفر قوالب تجاوز لملفات قالب جومريس الأساسية المختلفة.") ;
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO' , "تسرد هذه الصفحة أي ملفات قالب يمكن تجاوزها بواسطة ملفات قوالب حزمة القوالب. إذا كنت تريد تجاوز ملف قالب معين , فانقر فوق الزر تحرير لهذا الملف , وستكون في الصفحة التالية قادر على اختيار الإصدار الذي تريد تجاوزه. لاحظ أن هذه التجاوزات لها الأولوية على كل من Jomres Core وأي قوالب / قوالب Wordpress أو Joomla. يمكنك تعطيل التجاوز عن طريق حذفه في صفحة تجاوز قالب القائمة. ") ;
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME' , "اسم القالب") ;
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "المسار الحالي") ;
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "لم يتم تجاوزها") ;
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO' , "يمكنك اختيار ملف القالب لتجاوز ملفات القالب الأساسية عن طريق تغيير القائمة المنسدلة") ;


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "النسبة المئوية للغرف المحجوزة") ;

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'يعرض نموذج خاصية إنشاء جديد.') ;

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM' , 'تكبير الخريطة , 1: العالم 5: اليابسة / القارة 10: المدينة 15: الشوارع 20: المباني') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'عدد المراجعات المراد عرضها') ;

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST' , "عرض الخصائص المختصرة للمستخدمين. إذا كان المستخدم مسجلاً , فهذه هي المفضلة , إذا لم يتم تسجيل الدخول , فهذه العناصر التي تمت إضافتها فقط من خلال أيقونة المفضلة أثناء الزيارة.") ;

jr_define ("_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE" , "الحد الأدنى لقيمة الإيداع") ;
    
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC' , "إذا كان الإيداع المحسوب أقل من هذا الرقم , فقم بتعيين الإيداع على هذه القيمة بدلاً من ذلك. قد يتم تجاوز هذا الرقم في حد ذاته إذا لم يستوف الحد الأدنى للإيداع في الموقع. اتركه مضبوطًا على 0 إلى لا تستخدم الإعداد. ") ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM' , 'إظهار نموذج الموافقة المتوافق مع القانون العام لحماية البيانات.') ;

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'قائمة نوع غرفة الملكية') ;
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Show a property room type');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'إظهار نموذج تسجيل الدخول') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE' , 'إظهار قائمة الغرف من نوع غرفة معين') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'معرف نوع الغرفة') ;

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'لوحة القيادة') ;

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES' , 'إظهار قائمة بالخصائص المرخصة') ;
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'عدد الخصائص المرخصة المراد إظهارها') ;
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP' , 'ما إذا كان سيتم إظهار MRPs (فنادق / سرير وفطور) أو SRPs (منازل ريفية / شقق / فيلات). يتم تحديد الإعداد الافتراضي من الممتلكات الحالية غير متاحة , إذا لم يكن MRPs متاحًا , إذا معروض. لاختيار نوع معين , اضبط هذه القيمة على 0 لـ srps أو 1 لـ mrps. ');
