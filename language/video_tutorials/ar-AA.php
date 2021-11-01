<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.1
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ("VIDEO_TUTORALS_TITLE" , "دروس الفيديو") ;

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'لوحة التحكم') ;
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC' , 'يوضح لك هذا البرنامج التعليمي كيفية استخدام لوحة التحكم في إدارة الممتلكات.') ;

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Timeline') ;
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC' , "كيفية استخدام تقويم المخطط الزمني. في هذا الفيديو , ننشئ ضيفًا جديدًا عن طريق إدخال تفاصيله في النافذة المنبثقة , ويمكن إعادة استخدام الضيوف الحاليين عن طريق تحديد اسمهم من القائمة المنسدلة في النافذة المنبثقة.") ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'List Properties') ;
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'كيفية استخدام صفحة خصائص القائمة لعرض معلومات إضافية وتغيير الأعمدة والبحث عن خصائص معينة.') ;

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP' , 'تحرير تفاصيل الممتلكات الخاصة بك') ;
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC' , 'تحرير تفاصيل الممتلكات الخاصة بك , بما في ذلك السحب على الخريطة لتعيين موقعك.') ;

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'تغيير وضع تحرير التعريفة') ;
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC' , 'يحدد وضع تحرير التعريفة الطريقة التي يمكنك استخدامها لتعيين الأسعار لممتلكاتك. يمكنك القيام بذلك من خلال صفحة تكوين الموقع.') ;


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP' , "وضع تحرير التعريفة العادي للفنادق والمعاشات وأماكن المبيت والإفطار") ;
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC' , 'وضع تحرير التعريفة العادي هو ميزة بسيطة لتعديل التعريفة تسمح لك بتحديد عدد الغرف في العقار , وسعر الغرفة , وعدد الضيوف الذين يمكن لكل غرفة استيعابهم , والحد الأقصى لعدد الضيوف في حفلة. عند حفظ هذه الأسعار تكون صالحة لمدة 10 سنوات قادمة. ');

jr_define ("_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP" , "تعديل التعرفة العادية للفيلات والشقق") ;
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC' , 'وضع تحرير التعريفة العادي هو ميزة بسيطة لتحرير التعريفة تسمح لك بتحديد النوع الفرعي للممتلكات وسعر العقار في الليلة والحد الأقصى لعدد الضيوف في إحدى الحفلات. عند حفظ هذه الأسعار هي ثم صالحة لمدة 10 سنوات القادمة. ') ;

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'وضع تحرير تعريفة الإدارة الجزئية (مستحسن)') ;
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC' , 'يسمح لك وضع تحرير تعريفة الإدارة الجزئية بتهيئة كل من السعر والحد الأدنى لعدد الأيام التي يمكن أن تكون الإقامة صالحة لها , لكل يوم من أيام السنة. إنها أداة قوية تمنحك تحكمًا كاملاً زيادة الأسعار. في هذا المثال , سنعرض لك كيفية إنشاء مجموعات أسعار متعددة لنفس نوع الغرفة , وتعيين أسعار مختلفة لفترات مختلفة وأسعار مختلفة لأيام معينة من الأسبوع خلال فترة. ') ;

jr_define ("_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP" , "وضع تعديل تعريفة الإدارة الجزئية للفيلات / الشقق (موصى به)") ;
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC' , 'يسمح لك وضع تحرير تعريفة الإدارة الجزئية بتهيئة كل من السعر والحد الأدنى لعدد الأيام التي يمكن أن تكون الإقامة صالحة لها , لكل يوم من أيام السنة. إنها أداة قوية تمنحك تحكمًا كاملاً فوق التسعير. في هذا المثال , سوف نوضح لك كيفية إنشاء مجموعات أسعار متعددة. سنقوم بتعيين أسعار مختلفة لفترات مختلفة وأسعار مختلفة لأيام معينة من الأسبوع خلال فترة. وبمجرد الانتهاء من ذلك , سننشئ تعريفات متعددة لنفس الملكية , ولكن بأرقام ضيوف مختلفة تسمح لنا بالتحكم الدقيق في الأسعار لكل سيناريو. ') ;

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP' , 'تعريفات مختلفة لأرقام ضيوف مختلفة') ;
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC' , 'يمكنك إنشاء تعريفات متعددة لنفس نوع الغرفة , لذلك إذا كنت تريد أسعارًا مختلفة لأعداد مختلفة من الضيوف , يمكنك القيام بذلك.') ;

jr_define ("_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES" , "لكل شخص في الليلة - أنواع الضيوف") ;
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC' , 'للرسوم لكل شخص في الليلة , ستحتاج إلى إنشاء أنواع ضيوف. يمكن أن تختلف أنواع الضيوف المختلفة عن السعر الأساسي للغرفة , لذلك يمكن للأطفال من مختلف الأعمار الحصول على خصومات متفاوتة بناءً على أعمارهم. أنت لا تحتاج إلى فرض رسوم على كل شخص في الليلة لاستخدام أنواع الضيوف , يمكنك أيضًا استخدامها إذا كنت تتقاضى سعرًا ثابتًا ولكنك لا تزال ترغب في تسجيل عدد الضيوف , أو لأنك تريد تحديد عدد الضيوف في الحجز.' ) ;


jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Media center - تحميل الصور') ;
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC' , 'يتم تحميل جميع الصور من خلال مركز الوسائط. في هذا الفيديو , سنقوم بتحميل صورة الخاصية الرئيسية , وبعض صور عرض الشرائح , ومجموعة صغيرة من الصور لتظهر في صفحة نتائج البحث , وصور لإحدى الغرف.');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Media center - تحميل الصور') ;
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC' , 'يتم تحميل جميع الصور من خلال مركز الوسائط. في هذا الفيديو سنقوم بتحميل صورة الخاصية الرئيسية , ومجموعة صغيرة من الصور لتظهر في صفحة نتائج البحث , وبعض صور عرض الشرائح.') ;

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'لوحة تحكم المسؤول') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC' , 'هذه هي صفحتك المقصودة الافتراضية في منطقة المسؤول. يمكنك الاطلاع على ملخص لإحصائيات الموقع المختلفة ومعرفة الخصائص الموجودة في النظام , والتي تم إكمالها والتي تم إكمالها وتنتظر المراجعة قبل الموافقة . بمجرد الموافقة على العقار , يمكن لمدير الملكية نشره. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Plugin Manager, Installation and using') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC' , 'يوضح لك هذا الفيديو كيفية استخدام Plugin Manager , بما في ذلك تثبيت مدير المكونات الإضافية ثم التثبيت وإلغاء تثبيت المكون الإضافي. إذا لم يكن لديك مفتاح ترخيص , فستتم مطالبتك بالحفظ في الموقع التكوين قبل أن تتمكن من تثبيت المدير. إذا لم تكن قد استخدمت مدير البرنامج المساعد من قبل , فستكون هذه القائمة فارغة في البداية , في هذا المثال لدي بالفعل مجموعة متنوعة من المكونات الإضافية المثبتة. ');

jr_define ("_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS" , "مديرو العقارات") ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC' , 'تتم إضافة مديري العقارات بإحدى طريقتين. إما أنهم ينشئون خصائص بأنفسهم (يمكن تعطيلها في تكوين الموقع) أو يمكن لمسؤول الموقع تعيين مدير موجود لخصائص معينة. يمكن للمديرين فقط الوصول إلى الخصائص التي يمتلكونها تم إنشاؤه أو تم تعيينه إليه. ') ;

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'التحكم في الوصول') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC' , 'يمكنك استخدام ميزة التحكم في الوصول لتعطيل خيارات القائمة , وجعلها مرئية فقط لفئات معينة من المستخدمين , أو حتى جعلها تختفي تمامًا. إذا لم يكن لشريط القائمة أي خيارات قائمة لعرضها , سيختفي تمامًا , لذلك إذا كنت لا تريد أن يرى زوار الموقع أي خيارات , فيمكنك فقط تعيين جميع الخيارات لتكون مرئية للمستخدمين الذين قاموا بتسجيل الدخول , على سبيل المثال. ') ;

jr_define ("_JOMRES_TUTORIAL_PROPERTY_TYPES" , "أنواع العقارات والغرف") ;
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC' , 'في هذا الفيديو سترى مفهومين مهمين. الأول هو إنشاء أنواع الممتلكات وأنواع الغرف المرتبطة. سترى أيضًا مستخدمًا مسجلاً لم يكن مديرًا بعد ينشئ ممتلكاته الخاصة ويصبح manager (ولكنه قادر فقط على تكوين الخاصية التي قاموا بإنشائها). يتم ربط أنواع الغرف والممتلكات , بمجرد إنشاء نوع خاصية , يجب عليك إضافة نوع غرفة وإلا سيرى مديرو الممتلكات رسائل خطأ حمراء عند محاولة تكوين خصائصهم. ') ;



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'تحميل علامات الخريطة') ;

jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC' , 'أنت تستخدم Media Center لتحميل محددات الخرائط. <a href="https://mapicons.mapsmarker.com/" target="_blank"> يمكن العثور على مصدر رائع للعلامات هنا. < / أ> الإجراء الخاص بتحميل ميزات الملكية وميزات الغرف وأنواع الغرف وغيرها هو نفسه. ') ;

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'ميزات الخاصية') ;
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'في هذا الفيديو سوف نوضح لك كيفية إنشاء ميزات الملكية وتحميل الصور لها.') ;

jr_define ('_JOMRES_TUTORIAL_SHORTCODES' , 'الرموز القصيرة') ;
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC' , 'الرموز القصيرة هي ميزة قوية بشكل استثنائي لـ Jomres. المبدأ هو نفسه لكل من Joomla و Wordpress. في هذا الفيديو سوف نوضح لك مكان عرض الرموز القصيرة (ستتغير هذه القائمة اعتمادًا على المكونات الإضافية مثبتة) وكيفية استخدامها. يمكنك استخدام الأكواد في المقالات أو الوحدات. ') ;
    
jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'ملفات السجل') ;
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC' , 'سيوضح لك هذا الفيديو كيفية عرض ملفات السجل. يحدث التسجيل المكثف عند تشغيل النظام. عندما تكون في وضع الإنتاج (تكوين الموقع> تصحيح الأخطاء) , يتم إنشاء سجلات أقل , لذلك إذا كنت تختبر ميزة جديدة , يجب عليك تعيين موقعك على التطوير. إذا كنت ترغب في إضافة تسجيل الدخول الخاص بك إلى نصوص Jomres البرمجية , فقم بإلقاء نظرة على <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> صفحتنا اليدوية حول كيفية القيام بذلك. </a> هنا سنلقي بخطأ وهمي , ثم نعرض ملف السجل. لأن الموقع مضبوط على التطوير هناك الكثير من المعلومات , فعادة ما تشاهد فقط رسالة تفيد بحدوث خطأ وتم الإبلاغ عنه. ') ;

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'ترجمة التسميات والسلاسل الأخرى') ;
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC' , 'هناك عدد من الطرق لترجمة سلاسل اللغة في Jomres , يمكنك تعديل ملفات اللغة ولكن قد يتم استبدالها عند الترقية. بدلاً من ذلك نوصي باستخدام أدوات الترجمة المضمنة الفريدة لدينا إذا كانت السلسلة عبارة عن شيء تم إدخاله في نموذج , مثل اسم نوع الغرفة , فيمكنك استخدام صفحة Label Editing. إذا كانت السلسلة من ملف اللغة , فيمكنك استخدام أداة تحرير ملفات اللغة. ما عليك سوى استخدام أداة بحث المتصفح للعثور على السلسلة التي تريد تغييرها ثم النقر فوق الارتباط لتغييرها. يتم حفظ هذه التغييرات في قاعدة البيانات وبالتالي يتم تحديثها بأمان. يمكن أن يكون لديك تسميات مختلفة لأنواع خصائص مختلفة , لذا يمكنك تغيير خاصية جديدة إلى New Campsite , على سبيل المثال , عن طريق تغيير قائمة سياق اللغة المنسدلة في أعلى الصفحة قبل تغيير التسمية. ') ;

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'إضافة خصائص') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> في هذه المرحلة تم تثبيت Jomres في نظام إدارة المحتوى وتمت إضافته إلى قائمة الواجهة الأمامية (أو في Wordpress قمت بإنشاء صفحة وإضافة رمز Jomres المختصر الأساسي إليها). </ ص>
<p> هنا سترى كيف يمكن للمستخدم المسجل الذي ليس مديرًا للممتلكات في Jomres إنشاء خاصية جديدة وتهيئة بعض الإعدادات الأساسية ونشرها. </ p>
<p> في النهاية , سترى أن المدير قد تم تعيينه تلقائيًا كمدير ممتلكات , ومع ذلك فهو قادر فقط على تكوين خصائصه الخاصة. </ p>
<p> بالرغم من أن الواجهة في Wordpress تبدو مختلفة , فإن العملية هي نفسها تمامًا لـ Joomla أو Wordpress. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'فئات الممتلكات') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC' , 'فئات الخصائص هي ميزة بسيطة تسمح لمديري العقارات بتعيين خصائصهم إلى فئة معينة. يمكن لمسؤولي الموقع إنشاء رموز قصيرة تسرد جميع الخصائص في فئة , كما هو موضح في هذا الفيديو.') ;

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'مسؤول الموقع يعرض الخصائص') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> أنت لا تدير الخصائص من هنا , يمكنك فقط إدارة الخصائص من الواجهة الأمامية , ولكن في هذه القائمة يمكنك رؤية الخصائص التي تنتظر الموافقة (إذا تم تمكين الميزة) وأي منها غير مكتمل (على سبيل المثال , ما زلت بحاجة إلى تحميل الصور وتحديد الأسعار وما إلى ذلك). انقر فوق اسم الخاصية ليتم نقلها إلى لوحة التحكم الخاصة بهذه الخاصية. ستتمكن بعد ذلك من استخدام أقسام الدليل أعلى الصفحة للاطلاع على الخطوات التي تحتاج إلى استكمال ونشر الممتلكات. </ p> ') ;