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


jr_define ('_JOMRES_SHORTCODES_06001CPANEL' , 'این صفحه اصلی cpanel ویژگی است.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART' , 'این نمودار نوار ویژگی است که نمای کلی از رزروهای زمان واقعی , در دسترس بودن و اشغال در یک نگاه را ارائه می دهد.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE' , 'این اسکریپت به کاربر اجازه می دهد تا چندین ویژگی را تا حداکثر 3 ویژگی با یکدیگر مقایسه کند.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS' , 'لیست کامیدها از یوئیدهای ویژگی با کاما , به عنوان مثال 12,8,7') ;

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER' , 'فرم مالک مخاطب را ایجاد می کند.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID' , 'شناسه مالکیت مورد نظر را برای عبور ارسال کنید. 0 (صفر) را در عوض با سرپرست سایت تماس بگیرید.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS' , "صفحه اطلاعات شرکت را نشان می دهد که جزئیات را از قسمت مشخصات شرکت شما در بخش پیکربندی املاک از مدیر املاک می کشد. جزئیات این برگه معمولاً برای مکاتبات مورد استفاده قرار می گیرد و به مدیران اجازه می دهد هر دو آدرس هتل/آپارتمان و یک آدرس جداگانه برای اهداف تجاری. ") ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID' , 'شناسه دارایی') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR' , "تقویم ملک را نشان می دهد") ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID' , 'شناسه ویژگی مورد نظر برای نمایش مشخص شود.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW' , 'ماه ها برای نمایش , پیش فرض 24 است اگر غیر از این تنظیم نشده باشد. با متغیر Show Just Month سازگار نیست.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH' , "اگر می خواهید ماه جاری را به تنهایی نشان دهید , این را روی 1 قرار دهید. اگر نمایش_just_month در همان مورد استفاده شود , یا در کوتاه مدت مورد استفاده قرار نگیرد , تنظیم ماه را نادیده می گیرد. همزمان.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION' , 'فقط متن توضیحات ویژگی را نشان می دهد.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS' , 'فقط متن توضیحات ویژگی را نشان می دهد.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES' , 'فقط ویژگی های ویژگی را نشان می دهد.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER' , 'فقط الگوی سربرگ Properties را نشان می دهد.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES' , 'فقط انواع اتاقهای املاک را نشان می دهد.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE' , 'فقط تصویر اصلی ویژگی را نشان می دهد.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP' , 'فقط نقشه ویژگی را نشان می دهد.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID' , 'شناسه دارایی') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO' , 'ویژگی اطلاعات بیشتر متن را نشان می دهد.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS' , 'کد QR که به gmap ها پیوند دارد. این را می توان با استفاده از یک برنامه خواندن کد qr که مسیرهای مربوط به ویژگی را ارائه می دهد در تلفن اسکن کرد.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS' , "نظرات ملک را نشان می دهد.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY' , "خلاصه مرور ملک را نشان می دهد.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM' , 'یک اتاق جداگانه را نشان می دهد.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID' , 'شناسه اتاق.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS' , "اتاقهای ملک را نشان می دهد.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW' , "تصاویر اتاق یک ملک را به صورت اسلاید نمایش می دهد.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW' , 'نمایش اسلاید ویژگی ها را نشان می دهد.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS' , 'تعرفه های ملک را نشان می دهد.') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS' , "نشانی کسب و کار سایت را همانطور که در پیکربندی سایت وارد شده است> جزئیات شرکت شما نشان می دهد.") ;

jr_define ('_JOMRES_SHORTCODES_06000TERMS' , 'شرایط و ضوابط ملک را نشان می دهد.') ;
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID' , 'شناسه دارایی.') ;

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR' , "تقویم UI دارایی را نشان می دهد , که تقویمی متفاوت از تقویم بزرگ اصلی است و بر اساس عملکرد تقویم UI Jquery است.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID' , 'uid از ویژگی موردنظر برای نمایش ویژگی.') ;
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND' , 'این مورد را روی 1 تنظیم کنید تا افسانه نشان داده نشود.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH' , "نتایج جستجو را نشان می دهد که با افزودن پارامترهای جستجو می توان آنها را افزایش داد. توصیه نمی کنیم که از همه پارامترها به طور همزمان استفاده کنید , زیرا در نهایت معیارهای جستجو بسیار محدود هستند. در عوض شما باید خود را فقط به یک یا دو پارامتر محدود کنید , به عنوان مثال جستجو بر اساس کشور و تعداد ستاره. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY' , 'جستجو بر اساس کشور , با استفاده از کد ISO Alpha-2 , به عنوان مثال GB یا DE.') ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION' , "جستجو بر اساس منطقه. با ذخیره مناطق در پایگاه داده , باید از شناسه منطقه استفاده کنید. به مدیر> Jomres> ساختار سایت> فهرست مناطق مراجعه کرده و پیوند ویرایش را نشان دهید , در آنجا شماره شناسه منطقه را مشاهده خواهید کرد . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN' , 'نام کامل شهری که می خواهید جستجو کنید.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS' , 'جستجو برای خواص با ویژگی های خاص. شناسه های ویژگی را می توانید در Administrator> Jomres> ساختار سایت> ویژگی های ویژگی ها پیدا کنید.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE' , 'جستجو برای خواص با انواع اتاق های خاص. شناسه های نوع اتاق را می توانید در Administrator> Jomres> ساختار سایت> انواع اتاق پیدا کنید.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE' , 'ویژگیهای یک نوع خاص را جستجو کنید. شناسه های نوع ویژگی را می توانید در Administrator> Jomres> ساختار سایت> انواع ویژگی ها بیابید.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES' , 'جستجو برای خواص در محدوده قیمت خاص.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER' , "جستجوی املاک که تعرفه های آنها اجازه می دهد تعداد مهمان از مقادیر خاصی , به عنوان مثال مهمانی های 6 نفره") ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS' , 'جستجو برای خواص N ستاره.') ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE' , 'جستجو تا تاریخ ورود. باید با پارامتر تاریخ خروج ترکیب شود.') ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE' , 'جستجو براساس تاریخ عزیمت. باید با پارامتر ورود تاریخ ترکیب شود.') ;
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY' , 'جستجو بر اساس طبقه بندی دارایی.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT' , "صفحه نماینده را مشاهده کنید. اگر آن را می دانید , می توانید هر یک از شناسه یک ویژگی یا خود شناسه نماینده را منتقل کنید.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID' , "یک ویژگی uid , این نماینده ملک را نشان می دهد.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID' , "شناسه پایگاه داده مدیر , در صورت شناخته شدن.") ;

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR' , 'ویژگی های محبوب را نشان می دهد , که معمولاً در موقعیت های ماژول یا ویجت استفاده می شود.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT' , 'حداکثر تعداد ویژگی هایی که می توان نشان داد.') ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS' , 'فقط ویژگیهای این نوع ویژگیهای خاص را نمایش دهید.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL' , 'برای نمایش ماژول های بهینه شده برای موقعیت ویجت/ماژول عمودی , روی 1 تنظیم کنید.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM' , 'انتخاب تصادفی خواصی را که معمولاً در موقعیت ماژول یا ویجت استفاده می شود نمایش می دهد.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT' , 'حداکثر تعداد ویژگی های قابل نمایش.') ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS' , 'فقط ویژگیهای این نوع ویژگیهای خاص را نشان دهید.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL' , 'برای نمایش ماژول های بهینه شده برای موقعیت عمودی ویجت/ماژول روی 1 تنظیم کنید.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED' , "آخرین ویژگی های بازدید شده مهمان را که معمولاً در موقعیت های ماژول یا ویجت استفاده می شود نمایش می دهد.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT' , 'حداکثر تعداد ویژگی هایی که می توان نشان داد.') ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL' , 'برای نمایش ماژول های بهینه شده برای ویجت/موقعیت ماژول عمودی , روی 1 تنظیم کنید.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES' , 'تعدادی از ویژگی ها را نشان می دهد , که معمولاً در موقعیت های ماژول یا ویجت استفاده می شود.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS' , 'شناسه های مشخصه خواصی که می خواهید نشان دهید.') ;
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL' , 'برای نمایش ماژول های بهینه شده برای ویجت/موقعیت ماژول عمودی , روی 1 تنظیم کنید.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR' , 'منوی کشویی انتخاب ارز را نمایش می دهد.') ;
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE' , 'خروجی الگوی جایگزین را فعال/غیرفعال کنید. این خروجی برای استفاده در نوار ابزار بوت استرپ در نظر گرفته شده است.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART' , 'صفحه سبد خرید را نمایش می دهد.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE' , 'ماژول/ویجت سبد خرید را نمایش می دهد.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU' , 'منوی اصلی را نمایش می دهد. توجه داشته باشید , اگر از نسخه سفارشی mainmenu_wrapper_alternate استفاده می کنید. html به عنوان مثال/templates/jr_leohtian/html/com_jomres سپس باید آن را تغییر دهید /i> با MENU_LOCATION پیچیده شده در مهاربندهای پیچ دار. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP' , 'این صفحه به شما امکان می دهد تصاویر مربوط به دارایی خود و مواردی را که ارائه می دهید بارگذاری کنید. دارای یک دکمه اصلی و دکمه دوم است که به شما اجازه می دهد منابع خاصی را برای بارگذاری تصاویر انتخاب کنید. بنابراین , ویژگی اصلی تصویر و نمایش اسلاید فقط یک دکمه را نشان می دهد اما اگر مثلاً موارد اضافی یا اتاق های اختیاری ایجاد کرده اید , دکمه دوم را مشاهده می کنید که می توانید تصاویر مربوط به منابع خاص را در آن بارگذاری کنید. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP' , 'این صفحه به شما اجازه می دهد تا تصاویر مربوط به دارایی خود و مواردی را که ارائه می دهید بارگذاری کنید. دارای یک دکمه اصلی و دکمه دوم است که به شما اجازه می دهد منابع خاصی را برای بارگذاری تصاویر انتخاب کنید. بنابراین , ویژگی اصلی تصویر و نمایش اسلاید فقط یک دکمه را نشان می دهد , اما اگر هر کدام از موارد اضافی اختیاری را ایجاد کرده اید , دکمه دوم را مشاهده خواهید کرد که می توانید تصاویر مربوط به آن منابع خاص را بارگذاری کنید. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> ابتدا با کلیک روی افزودن تصویر یا استفاده از کشیدن و رها کردن , تصویر (های) مورد نظر خود را انتخاب کنید. اینها در ستون سمت راست ظاهر می شوند. </li>
  <li> در بالای این ناحیه , از دکمه \"انتخاب منبع \" برای انتخاب منبع موردنظر برای بارگذاری استفاده کنید. ممکن است این گزینه به شما پیشنهاد شود که منبع خاصی را در زیر انتخاب کنید. </li>
  <li> پس از انتخاب منبع , می توانید روی دکمه بارگذاری تصویر در زیر تصویر کلیک کنید تا آن را با آن منبع مرتبط کنید. پس از بارگذاری یک تصویر , از ستون سایت سمت راست ناپدید می شود و در سمت چپ ظاهر می شود. </li>
  <li> از دکمه حذف شده ها در کنار تصاویر موجود برای حذف تصاویری که دیگر نمی خواهید نمایش داده شوند استفاده کنید. </li>
  <li> می توانید ترتیب نمایش فایل ها در نمایش اسلاید را با تغییر نام آنها قبل از بارگذاری تغییر دهید , زیرا آنها در صفحات به ترتیب حروف الفبا نمایش داده می شوند. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW' , "در کنار دکمه منابع , ممکن است یک دکمه پیش نمایش را مشاهده کنید. اگر روی آن کلیک کنید , پنجره ای ظاهر می شود که به شما نشان می دهد چگونه تصاویر بارگذاری شده در یک صفحه به نظر می رسند. این به شما کمک می کند ایده اینکه تصاویر چگونه برای مشتریان شما ظاهر می شوند. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS' , "هیچ محدودیتی در تعداد تصاویری که می توانید بارگذاری کنید وجود ندارد. هنگام بارگذاری اندازه تصاویر به طور خودکار تغییر می کند. فقط می توانید فایل های JPG و PNG را بارگذاری کنید.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE' , "در حالت ایده آل هر تصویری که بارگذاری کنید حداقل باشد)");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST' , "عرض پیکسل , در غیر این صورت ممکن است پس از بارگذاری فازی به نظر برسد.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE' , "هر تصویری که بارگذاری کنید نمی تواند بیشتر از باشد");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST' , "در اندازه") ;

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE' , "منبعی را انتخاب کنید که می خواهید تصاویر را برای آن بارگذاری کنید");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC' , "منبع خاص") ;
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED' , "تصاویر قبلاً برای این منبع بارگذاری شده است") ;

jr_define ('_JOMRES_MARKDOWN_TITLE' , 'قالب بندی متن') ;
jr_define ('_JOMRES_MARKDOWN_DESC' , 'شما می توانید متن را با استفاده از قالب بندی ساده Markdown در اینجا وارد کنید. نیازی به دانستن هیچ HTML ندارید , فقط از دکمه ها استفاده کنید تا اطلاعات به نظر شما برسد یا متن را با توجه به این مثالها قالب بندی کنید.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS' , 'تاکید') ;
jr_define ('_JOMRES_MARKDOWN_BOLD' , 'bold') ;
jr_define ('_JOMRES_MARKDOWN_ITALICS' , 'italics') ;
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH' , 'strikethrough') ;
jr_define ('_JOMRES_MARKDOWN_HEADERS' , "سرصفحه") ;
jr_define ('_JOMRES_MARKDOWN_BIGHEADER' , 'سربرگ بزرگ') ;
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER' , "سربرگ متوسط") ;
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER' , 'سربرگ کوچک') ;
jr_define ('_JOMRES_MARKDOWN_TINYHEADER' , 'سربرگ کوچک') ;
jr_define ('_JOMRES_MARKDOWN_LISTS' , "لیست ها") ;
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM' , 'مورد فهرست کلی') ;
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM' , 'مورد فهرست شده شماره') ;
jr_define ('_JOMRES_MARKDOWN_LINKS' , 'پیوندها') ;
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT' , 'متن برای نمایش') ;
jr_define ('_JOMRES_MARKDOWN_QUOTES' , 'نقل قول') ;
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE' , 'این یک نقل قول است.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE' , 'می تواند چندین خط را پوشش دهد!');
jr_define ('_JOMRES_MARKDOWN_IMAGES' , 'Images') ;
jr_define ('_JOMRES_MARKDOWN_TABLE' , 'جداول') ;
jr_define ('_JOMRES_MARKDOWN_COLUMN' , 'ستون') ;


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW' , 'نمایش تصاویر دارایی به عنوان نمایش اسلاید در لیست دارایی؟') ;
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC' , 'اگر روی بله تنظیم شده باشد , نمایش اسلاید از تصاویر اصلی ویژگی نمایش داده می شود. اگر بر روی منفی تنظیم شود , اولین تصویر اصلی ویژگی نمایش داده می شود.');

jr_define ('EDIT_CMS_USER' , 'ویرایش کاربر CMS') ;

jr_define ("BOOKING_MADE_BY" , "Booking made by") ;

jr_define ('_JOMRES_ROUTER_FEATURES' , 'امکانات رفاهی') ;
jr_define ('_JOMRES_ROUTER_ROOMTYPES' , 'انواع اتاق') ;

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL' , 'نشانی اینترنتی فرم رزرو خارجی') ;
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC' , 'در اینجا اگر می خواهید از وب سایت شخص ثالث برای رزرو استفاده کنید , می توانید یک نشانی اینترنتی خارجی تعیین کنید. همه دکمه های رزرو jomres به این آدرس اشاره می کنند. اگر می خواهید از فرم رزرو Jomres استفاده کنید , این قسمت را خالی بگذارید . ');

jr_define ('_JOMRES_ROOM_TAGLINE' , 'Tagline (توضیحات اتاق کوتاه/زیرنویس)') ;
jr_define ('_JOMRES_ROOM_DESCRIPTION' , 'توضیحات اتاق') ;

jr_define ('_JOMRES_GUEST_BLACKLISTED' , 'لیست سیاه مهمان') ;
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC' , 'اگر این مهمان سیاه باشد , دیگر نمی تواند در این ملک رزرو کند.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define ('_JOMRES_SESSION_HANDLER_DESC' , 'ذخیره فایلهای جلسه jomres در دیسک یا پایگاه داده. توصیه می شود: پایگاه داده');
jr_define ('_JOMRES_MAP_HEIGHT' , "ارتفاع نقشه (px)") ;
jr_define ('_JOMRES_MAP_ZOOMLEVEL' , "سطح زوم نقشه") ;
jr_define ('_JOMRES_MAP_MAPTYPE' , "نوع نقشه") ;

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Template Override Manager");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD' , "بسته های الگو افزونه هایی هستند که می توانند الگوها را برای فایل های مختلف قالب اصلی Jomres نادیده بگیرند.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO' , "این صفحه فایلهای الگو را که می توانند توسط فایلهای الگوی بسته الگو نادیده گرفته شوند , لیست می کند. اگر می خواهید یک فایل الگو خاص را نادیده بگیرید , روی دکمه ویرایش آن فایل کلیک کنید , در صفحه بعدی شما خواهید بود قادر به انتخاب نسخه ای هستید که می خواهید با آن لغو کنید. توجه داشته باشید , این لغوها هم بر Jomres Core و هم بر سایر ناحیه های قالب یا قالب Wordpress یا Joomla اولویت دارند. می توانید با حذف آن در صفحه فهرست الگوهای صفحه لغو کنید. ") ;
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME' , "نام الگو") ;
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH' , "مسیر فعلی") ;
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN' , "لغو نشده است") ;
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO' , "شما می توانید انتخاب کنید کدام فایل الگو با تغییر فهرست کشویی پرونده های قالب اصلی را نادیده بگیرد");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED' , "درصد اتاقهای رزرو شده") ;

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY' , 'فرم ایجاد ویژگی جدید ایجاد شده را نمایش می دهد.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM' , 'زوم نقشه , 1: جهان 5: خشکی/قاره 10: شهر 15: خیابان 20: ساختمانها') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT' , 'تعداد نظرات برای نمایش') ;

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST' , 'ویژگیهای فهرست کوتاه کاربران را نمایش می دهد. اگر کاربر ثبت شده باشد , موارد دلخواه آنها هستند , اگر وارد سیستم نشده اید , فقط مواردی که در طول بازدید از طریق نماد مورد علاقه اضافه شده است.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE' , 'حداقل ارزش سپرده') ;

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC' , "اگر سپرده محاسبه شده کمتر از این رقم است , در عوض سپرده را به این مقدار تنظیم کنید. اگر حداقل میزان سپرده سایت را برآورده نکند , ممکن است خود این رقم بیش از حد باشد. آن را روی 0 تنظیم کنید از تنظیمات استفاده نکنید. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM' , 'فرم رضایت سازگار با GDPR را نشان می دهد.') ;

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST' , 'لیست نوع اتاقهای املاک') ;
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE' , 'نوع اتاق ویژگی را نشان دهید') ;

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM' , 'نمایش فرم ورود به سیستم') ;

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE' , 'نمایش لیستی از اتاق ها از نوع اتاق خاص') ;
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID' , 'شناسه نوع اتاق') ;

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD' , 'داشبورد') ;

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES' , 'لیستی از ویژگی های مشترک را نشان می دهد') ;
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT' , 'تعداد ویژگی های سندیکایی برای نمایش') ;
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP' , 'نمایش MRP (هتل/تختخواب و صبحانه) یا SRP (کلبه/آپارتمان/ویلا). پیش فرض از ملک فعلی تعیین می شود , اگر برای انتخاب نوع خاص , این مقدار را برای srps 0 یا mrps 1 قرار دهید. ');

