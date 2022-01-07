<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'זהו העמוד הקדמי של הנכס cpanel.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'זהו תרשים הקלטת הנכסים המספק סקירה כללית של הזמנות, זמינות ותפוסה בזמן אמת');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'סקריפט זה מאפשר למשתמש להשוות מספר נכסים זה לזה, עד 3 נכסים לכל היותר.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'רשימה מופרדת בפסיקים של מכשירי נכס, למשל 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'בונה את טופס בעל הקשר.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'העבר את מזהה הנכס של הנכס שאליו יש לפנות. העבר 0 (אפס) כדי לפנות במקום זאת למנהל האתר.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "מציג את דף פרטי החברה ושואב פרטים משדה פרטי החברה שלך בתצורת נכסים. הפרטים בכרטיסייה זו ישמשו בדרך כלל להתכתבות, ומאפשרים למנהלים לקבל גם את כתובת המלון/דירה וגם כתובת נפרדת למטרות עסקיות. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "מציג את לוח השנה של הנכס");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'העבר את מזהה הנכס של הנכס שיוצג.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'חודשים להצגה, ברירת המחדל היא 24 אם לא הוגדר אחרת. לא תואם את המשתנה Show Just Month.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "הגדר את זה ל -1 אם אתה רק רוצה להציג את החודש הנוכחי בכוחות עצמו. ההגדרה חודשים_ל_הצגה תתעלם אם show_just_month ישתמש באותו זמן, אם לא צריך להשתמש באותו אחד, אם אתה צריך להשתמש בקוד אחד, אם לא צריך להשתמש באותו אחד באותו הזמן.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'מציג רק את טקסט תיאור הנכס.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'מציג רק את טקסט תיאור הנכס.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'מציג רק את מאפייני הנכס.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'מציג רק את תבנית כותרת המאפיין.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'מציג רק את סוגי החדרים בנכס.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'מציג רק את התמונה הראשית של המאפיין.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'מציג רק את מפת הנכס.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'מציג את המאפיין טקסט מידע נוסף.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'קוד QR המקשר ל- gmaps. ניתן לסרוק אותו לטלפון באמצעות אפליקציית קריאת קוד qr המספקת הנחיות לנכס.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "מציג ביקורות של נכס.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "מציג סיכום סקירה של נכס.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'מציג חדר בודד.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'מזהה החדר.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "מציג חדרי נכס.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "מציג את תמונות החדר של נכס כמצגת שקופיות.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'מציג את מצגת הנכס.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'מציג את תעריפי הנכס.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "מציג את כתובת העסק של האתר כפי שהוזנה בתצורת האתר> פרטי החברה שלך.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'מציג את תנאי הנכס.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'מזהה של הנכס.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "מציג את לוח השנה של ממשק המשתמש, שהוא לוח שנה אחר בלוח השנה הגדול הראשי ומבוסס על פונקציונליות לוח השנה של ממשק המשתמש של Jquery.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'העבר את מזהה הנכס של הנכס שיוצג.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'הגדר את זה ל- 1 כדי לא להציג את האגדה.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "מציג את תוצאות החיפוש, שניתן לשפר אותן על ידי הוספת פרמטרים לחיפוש. איננו ממליצים להשתמש בכל הפרמטרים בו זמנית, מכיוון שתקבל קריטריוני חיפוש מוגבלים מדי. במקום זאת עליך להגביל את עצמך לפרמטר אחד או שניים בלבד, למשל חיפוש לפי מדינה ומספר כוכבים. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'חפש לפי מדינה, באמצעות קוד ISO Alpha-2, למשל GB או DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "חפש לפי אזור. מכיוון שאזורים נשמרים במסד הנתונים, עליך להשתמש במזהה האזור. בקר במנהל מערכת> Jomres> מבנה אתרים> אזורי רשימה והרחף את הקישור ערוך, שם תראה את מספר מזהה האזור. . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'השם המלא של העיר שברצונך לחפש.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'חפש נכסים עם תכונות מסוימות. מזהי תכונות ניתן למצוא במנהל מערכת> Jomres> מבנה אתר> תכונות נכס.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'חפש נכסים עם סוגי חדרים מסוימים. מזהי סוג החדר ניתן למצוא ב- Administrator> Jomres> מבנה האתר> סוגי חדרים');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'חפש נכסים מסוג נכס ספציפי. מזהי סוג נכס ניתן למצוא במנהל מערכת> Jomres> מבנה אתר> סוגי נכסים');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'חפש נכסים בטווח מחירים ספציפי.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "חפש נכסים שהתעריפים מאפשרים מספר אורחים של ערכים מסוימים, למשל צדדים בני 6.");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'חפש נכסים של N כוכבים.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'חפש לפי תאריך הגעה. יש לשלב אותו עם הפרמטר DepartDate.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'חיפוש לפי תאריך יציאה. יש לשלב אותו עם פרמטר הגעת תאריך.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'חפש לפי קטגוריית נכסים.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "הצג דף של סוכן. תוכל להעביר או מזהה נכס או מזהה הסוכן עצמו, אם אתה יודע זאת.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "מזהה נכס, זה יציג את סוכן הנכס.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "מזהה מסד הנתונים של המנהל, אם ידוע.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'מציג את המאפיינים הפופולריים, המשמשים בדרך כלל בתפקידי מודול או יישומון.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'המספר המרבי של הנכסים שניתן להציג.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'הצג רק נכסים של סוגי נכסים ספציפיים אלה.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'הגדר ל -1 להצגת המודולים המותאמים למיקום יישומון/מודול אנכי.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'מציג מבחר אקראי של מאפיינים, המשמש בדרך כלל בתפקידי מודול או יישומון.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'המספר המרבי של הנכסים שניתן להציג.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'הצג רק נכסים של סוגי נכסים ספציפיים אלה.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'הגדר ל- 1 כדי להציג את המודולים המותאמים למיקום יישומון/מודול אנכי.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "מציג את המאפיינים האחרונים שהאורח צפה בהם, בדרך כלל בשימוש במיקומי מודול או יישומון.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'המספר המרבי של הנכסים שניתן להציג.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'הגדר ל- 1 כדי להציג את המודולים המותאמים למיקום יישומון/מודול אנכי.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'מציג מספר מאפיינים, המשמשים בדרך כלל בתפקידי מודול או יישומון.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'מזהי המאפיינים של הנכסים שברצונך להציג.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'הגדר ל -1 כדי להציג את המודולים המותאמים למיקום יישומון/מודול אנכי.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'מציג את התפריט הנפתח לבחירת מטבע.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'הפעל/השבת את פלט התבנית החלופית. פלט זה מיועד לשימוש בסרגלי כלים של Bootstrap.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'מציג את דף עגלת הקניות.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'מציג את המודול/יישומון של עגלת הקניות');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'מציג את התפריט הראשי. שים לב, אם אתה מפעיל גרסה מותאמת אישית של mainmenu_wrapper_alternate.html למשל/templates/jr_leohtian/html/com_jomres אז ייתכן שיהיה עליך להחליף את j_microsoft_main_main_to_main_modern_mc_jomres_אז אתה צריך להחליף /i> עם MENU_LOCATION עטוף בסדים מתולתלים. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'דף זה מאפשר לך להעלות תמונות לנכס שלך ולדברים שאתה מציע. יש לו כפתור ראשי אחד ולחצן שני המאפשר לך לבחור משאבים ספציפיים להעלות תמונות. לכן, הנכס הראשי. התמונה ומצגת השקופיות יציגו רק כפתור אחד אך אם יצרת תוספות או חדרים אופציונליים, למשל, תראה כפתור שני שבו תוכל להעלות תמונות עבור אותם משאבים ספציפיים. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'דף זה מאפשר לך להעלות תמונות לנכס שלך ולדברים שאתה מציע. יש לו כפתור ראשי אחד ולחצן שני המאפשר לך לבחור משאבים ספציפיים להעלות תמונות. לכן, הנכס הראשי. התמונה ומצגת השקופיות יציגו רק כפתור אחד אך אם יצרת תוספות אופציונאליות תראה כפתור שני שבו תוכל להעלות תמונות עבור אותם משאבים ספציפיים. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> ראשית בחר את התמונות שברצונך להעלות על ידי לחיצה על הוסף תמונה או באמצעות גרירה ושחרור. אלה יופיעו בעמודה בצד ימין. </li>
  <li> מעל אזור זה, השתמש בלחצן \"בחר את המשאב \" כדי לבחור לאיזה משאב ברצונך להעלות תמונות. ייתכן שתוצע לך האפשרות לבחור משאב ספציפי מתחת. </li>
  <li> לאחר שבחרת משאב תוכל ללחוץ על הלחצן העלה תמונה מתחת לתמונה כדי לשייך אותו למשאב זה. לאחר העלאת תמונה, היא תיעלם מהעמודה באתר הימני ותופיע בצד שמאל. </Li>
  <li> השתמש בלחצן האשפה לצד התמונות הקיימות כדי להסיר תמונות שכבר אינך מעוניין להציג אותן. </li>
  <li> באפשרותך לשנות את הסדר שבו מוצגים הקבצים במצגת על ידי שינוי שםם לפני העלאתם, מכיוון שהם מוצגים בדפים בסדר אלפביתי. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "ליד לחצן המשאב, ייתכן שתראה כפתור תצוגה מקדימה. אם תלחץ על זה תראה חלונות קופצים המראים כיצד יראו התמונות שהועלו כעת בדף. זה עוזר לתת לך מושג איך התמונות יראו ללקוחות שלך. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "אין הגבלה על מספר התמונות שתוכל להעלות. גודלן של תמונות באופן אוטומטי בעת העלאתן. ניתן להעלות קבצי JPG ו- PNG בלבד");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "באופן אידיאלי כל תמונה שתעלה תהיה לפחות");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "רוחב פיקסלים, אחרת הם עלולים להיראות מטושטשים לאחר העלאתם.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "כל תמונה שאתה מעלה לא יכולה להיות יותר מ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "בגודל.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "בחר את המשאב שאליו ברצונך להעלות תמונות");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "משאב ספציפי");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "תמונות שכבר הועלו עבור משאב זה");

jr_define ('_JOMRES_MARKDOWN_TITLE', 'עיצוב טקסט');
jr_define ('_JOMRES_MARKDOWN_DESC', 'תוכל להזין כאן טקסט בעזרת עיצוב פשוט של Markdown. אינך צריך להכיר שום HTML, פשוט השתמש בלחצנים בכדי לגרום למידע להיראות כרצונך, או לעצב טקסט לפי דוגמאות אלה.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'הדגשים');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'נטוי');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "כותרות");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'כותרת גדולה');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "כותרת בינונית");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'כותרת קטנה');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'כותרת זעירה');
jr_define ('_JOMRES_MARKDOWN_LISTS', "רשימות");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'פריט רשימה כללית');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'פריט רשימה ממוספרת');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'טקסט להצגה');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'ציטוטים');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'זהו ציטוט.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'זה יכול להשתרע על פני מספר שורות!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'תמונות');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'טבלאות');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'עמודה');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'הצג תמונות נכס כמצגת ברשימת נכסים?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'אם יוגדר כן, תוצג מצגת שקופיות של תמונות ראשיות של הנכס. אם יוגדר כלא, אזי תוצג התמונה הראשית של המאפיין הראשון.');

jr_define ('EDIT_CMS_USER', 'ערוך משתמש CMS');

jr_define ('BOOKING_MADE_BY', 'הזמנה בוצעה על ידי');

jr_define ('_JOMRES_ROUTER_FEATURES', 'שירותים');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'סוגי חדרים');

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'כתובת טופס הזמנה חיצונית');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'כאן תוכל להגדיר כתובת אתר חיצונית אם ברצונך להשתמש באתר צד שלישי לביצוע הזמנות. כל לחצני ההזמנה של jomres יצביעו על כתובת אתר זו. השאר שדה זה ריק אם ברצונך להשתמש בטופס ההזמנה של Jomres. . ');

jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (תיאור חדר קצר/כותרת משנה)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'תיאור החדר');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'רשימה שחורה של אורח');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'אם אורח זה מופיע ברשימה שחורה אז הם כבר לא יוכלו לבצע הזמנות בנכס זה.');
jr_define ('_JOMRES_SESSION_HANDLER', 'מטפל הפעלות');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'שמור קבצי הפעלה של jomres בדיסק או במסד הנתונים. מומלץ: מסד נתונים');
jr_define ('_JOMRES_MAP_HEIGHT', "גובה מפה (פיקסלים)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "רמת זום מפה");
jr_define ('_JOMRES_MAP_MAPTYPE', "סוג מפה");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "מנהל ביטול תבניות");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "חבילות תבניות הן תוספים שיכולים לספק תבניות דריסה עבור קבצי תבניות ליבה שונים של Jomres.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "דף זה מפרט את כל קבצי התבניות הניתנים לביטול על ידי קבצי התבניות של חבילת תבנית. אם ברצונך לעקוף קובץ תבנית מסוים, לחץ על כפתור העריכה של הקובץ, בעמוד הבא אתה תהיה מסוגל לבחור עם איזו גרסה ברצונך לעקוף. שים לב, עקיפות אלה זוכות לעדיפות על פני Jomres Core והן על כל עריכות ערכת נושא/תבנית של Wordpress או Joomla. תוכל לבטל ביטול על ידי מחיקתה בדף דריסת תבניות רשימה. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "שם התבנית");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "נתיב נוכחי");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "לא מבוטל");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "תוכל לבחור איזה קובץ תבנית לעקוף את קבצי תבנית הליבה על ידי שינוי התפריט הנפתח");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "אחוז חדרים שהוזמנו");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'מציג את טופס יצירת הנכס החדש.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'זום מפה, 1: עולם 5: שטח/יבשת 10: עיר 15: רחובות 20: בניינים');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'מספר ביקורות להצגה');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'מציג את המשתמשים ברשימה קצרה. אם המשתמש רשום אלה הם המועדפים עליו, אם הם לא מחוברים אז רק הפריטים שנוספו באמצעות סמל המועדף במהלך הביקור.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'ערך הפקדה מינימלי');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "אם הפיקדון המחושב קטן מהנתון הזה, הגדר את ההפקדה לערך זה במקום זאת. נתון זה עצמו עשוי להיות מוגזם אם הוא אינו עומד בהגדרת ההפקדה המינימלית של האתר. השאר אותו על 0 עד אל תשתמש בהגדרה. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'מציג את טופס ההסכמה התואם את ה- GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'רשימת סוגי נכסים');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Show a type room property');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'הצג את טופס ההתחברות');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'הצג רשימת חדרים מסוג חדר מסוים');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'מזהה סוג חדר');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'לוח מחוונים');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'מציג רשימה של נכסים מסונכרנים');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'מספר הנכסים המסונכרנים להצגה');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'אם להציג MRP (מלונות/לינה וארוחת בוקר) או SRPs (קוטג ים/דירות/וילות). ברירת המחדל נקבעת אם הנכס הנוכחי, אז אם הנכס הוא, הנכס אינו קיים, מוצג. כדי לבחור סוג ספציפי, הגדר ערך זה ל- 0 עבור srps או 1 עבור mrps. ');
    
