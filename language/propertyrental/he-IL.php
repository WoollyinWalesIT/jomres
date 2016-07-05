<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define( '_JOMRES_COM_MR_QUICKRESDESC', 'הזמנה מהירה' );
jr_define( '_JOMRES_COM_MR_SHOWPROFILES', 'הצג פרופילים' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC', 'תצורה כללית' );
jr_define( '_JOMRES_COM_MR_BACK', 'חזרה' );
jr_define( '_JOMRES_COM_MR_YES', 'כן' );
jr_define( '_JOMRES_COM_MR_NO', 'לא' );
jr_define( '_JOMRES_COM_MR_NEWTARIFF', 'חדש' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTY', 'נכס חדש' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'אפיון נכס חדש' );
jr_define( '_JOMRES_COM_MR_NEWGUEST', 'אורח חדש' );
jr_define( '_JOMRES_COM_MR_SAVE', 'שמור' );
// View bookings
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'שם' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'הגעה' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'עזיבה' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'הקצאת פונקציות משתמש' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_ID', 'מקט' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NAME', 'שם' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'שם משתמש' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'מאושר כיום' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'נכס ברירת מחדל' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'שנה את זה' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'רמת גישה' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'משתמש עודכן' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'לא זמין' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'קבלה' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'מנהל נכס' );
// Edit bookings
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'כל ההזמנות' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'הזמנות חדשות' );
jr_define( '_JOMRES_COM_MR_EDITBOOKINGTITLE', 'ערוך הזמנות' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'הגעה/עזיבה' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'אורח' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'חדר' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'תשלום' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'שם פרטי' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'שם משפחה' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'דרישות מיוחדות' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'אנא שים לב, חלק מדרישות מיוחדות יכולות להביא לחיובים נוספים.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'בטל הזמנה' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'מספר בית או שם' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'רחוב' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'עיר' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'מיקוד' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'טלפון קווי' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'טלפון נייד' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'דואר אלקטרני' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'אי אפשר לבטל הזמנה, כי אורח כבר בחדר' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'הפקדה לא שולמה' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'אשר את הביטול' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'ביטול הזמנה' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'ימים להגעה' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'סוג הזמנה' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'שחור' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'קבלה' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'אינטרנט' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NAME', 'שם חדר' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NUMBER', 'חדר' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FLOOR', 'קומה' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_DISABLED', 'יש גישה לנכים?' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'מספר אנשים מקסימלי' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'סוג חדר' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'תאור סוג חדר' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'רשימת מאפייני החדר' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'הפקדה שולמה' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'הכנס הפקדה' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'סה"כ לתשלום' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'סימוכין הפקדה' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'הזמנת מקום' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'הפקדה' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'הפקדה נשמרה' );
// Edit Language
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'אין חדרים פנויים' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'נכס' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'סוג חדר' );
// Display guest form
jr_define( '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'ערוך פרטי אורח' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'שם פרטי' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_SURNAME', 'שם משפחה' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_HOUSE', 'בית' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_STREET', 'רחוב' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_TOWN', 'עיר' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'מיקוד' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'טלפון קווי' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_MOBILE', 'טלפון נייד' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FAX', 'פקס' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'מספר כרטיס אשראי' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'תאריך הנפקת כרטיס' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'תוקף הכרטיס' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'מספר הנפקה' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'שם בעל הכרטיס' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'תבחר את בחירתך' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'ימי שהייה' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'מספר אורחים' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'סה"כ' );
// Rooms tab
jr_define( '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'הצג תצורת חדרים ונכס' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOM', 'חדרים' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'מאפייני החדר' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'סוגי חדרים' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'נכס' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'מאפייני הנכס' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'חדר' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'סוג' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'שם' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'מספר' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'קומה' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'גישת נכים?' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'מקסימום אנשים' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'מאפיינים' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'הוספת חדר הושלמה' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'ערוך פריט' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'מאפייני החדר' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'תאור מאפיין' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'מאפיין החדר נוסף בהצלחה' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'מאפיין החדר עודכן' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'סוג חדר' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'קיצור סוג החדר' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'תאור סוג החדר' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'סוג חדר נוסף בהצלחה' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'סוג חדר עודכן' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'ערוך פריט' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'שם' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'רחוב' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'עיר' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'מחוז' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'מדינה' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'מיקוד' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'טלפון' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'פקס' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'אימייל' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'אתר' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'מאפיינים' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'נכס נוסף בהצלחה' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'נכס עודכן' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'מאפייני הנכס' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'קיצור מאפייני הנכס' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'תאור מלא של מאפייני הנכס' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'מאפיין נכס נוסף בהצלחה' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'מאפיין נכס עודכן' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE', 'תעריפים' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'כותרת התעריף' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'תאור' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'טופס תקף' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'תקף ל' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'תעריף ללילה' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'מינימום ימים' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'מקסימום ימים' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'מינימום אנשים' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'מקסימום אנשים' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'סוג חדר' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'התעלם ממחיר לילה לבן אדם' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'לאפשר סופי שבוע' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'תעריף נוסף בהצלחה' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'תעריף עודכן' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'ערוך פריט' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'שכפל פריט' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_DELETED', 'תעריף נמחק' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'ערוך תעריף' );
jr_define( '_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'חגים לאומיים' );
jr_define( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'הזמנה נשמרה' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'רשום הזמנת אורח' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'מחק הזמנת אורח' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'הצג הזמנות' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'הזמנות חדשות' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'לוח בקרה' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'ניהול אורח' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'ניהול נכס' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'בדוק זמינות' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'אשר את פרטיך' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'שם פרטי' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'שם משפחה' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'מספר בית' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'רחוב' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'עיר' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'מיקוד' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'טלפון קווי' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'טלפון נייד' );
jr_define( '_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'לא נמצאו חדרים לפי דרישות שלך' );
jr_define( '_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Tתודה שהזמנת אצלנו. מקווים שתהנה משהייתך<br><br> <b>אנא שים לב , זוהי רק קדם הזמנה. ההזמנה תאושר עם קבלת דואל על ידך ואישורו </center>' );








jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE', 'רשום אורח ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'בחר אורח ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'אורח נרשם בהצלחה' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'אין אורחים שאמורים להגיע היום' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'הוצא אורח מהחדר' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'אין אורחים שאמורים לעזוב היום' );
// Config panel
jr_define( '_JOMRES_COM_A_SUPPLIMENTS', 'תוספות' );
jr_define( '_JOMRES_COM_A_TARIFFS', 'תעריפים וסוגי מטבע' );
jr_define( '_JOMRES_COM_A_DISCOUNTS', 'הנחות' );
jr_define( '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'ההעלאת קבצים' );
jr_define( '_JOMRES_COM_A_CURRENT_SETTINGS', 'תצורה נוכחית' );
jr_define( '_JOMRES_COM_A_EXPLANATION', 'הסבר' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'תוספת לבן אדם יחיד' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'אנא וודא שזה נקבע ל-כן, אם אתא רוצה לשנות את מחיר תוספת ליחיד' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'חיוב תוספת ליחיד' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'ההפקדה מחושבת באחוזים?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'האם ההפקדה נדרשת להיות אחוז מעסקה כוללת? אם לא אז הפקדה תרשם כסכום קבוע' );
jr_define( '_JOMRES_COM_A_DEPOSIT_VALUE', 'ערך הפקדה הנדרשת' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER', 'לבן אדם, ללילה' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC', 'סמן כן אם ברצונך לחייב על בסיס בן אדם-ללילה, אם לא המחיר יחושב על בסיס  חדר-ללילה' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE', 'גודל קוובץ' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'גודל תמונה מירבי בקילובייט' );
jr_define( '_JOMRES_FRONT_MR_BOOKED', 'מוזמן' );



jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'פרטי הזמנה' );






jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'אנו מזכירים לך שהזמנה היא מסמך קושר חוקי, אם מסיבה כלשהיא ברצונך לבטל או לקצר את הזמנתך, אתה עדיין אחראי לשלם את הסכום המלא' );

jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>דמי ביטול וקיצוץ</i> אם אתה מבטל את חופשתך, הביטול צריך להיות בכתב. דמי ביטול הן:' );




jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'תאריל הגעה ל-14 יום' );


jr_define( '_JOMRES_COM_CONFIRMATION_PRINT', 'הדפס מכתב אישור' );
jr_define( '_JOMRES_COM_INVOICE_TITLE', 'הדפסת חשבונית' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS', 'מספר מבוגרים: ' );
jr_define( '_JOMRES_COM_INVOICE_CONTRACTAGREED', 'החוזה מאושר על ידי: ' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT', 'מחיר ללילה: ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'סה"כ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_INTRO1', 'תודה, תמיד לשרותך ב-' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'מקווים לראותך אותך אצלנו' );
jr_define( '_JOMRES_COM_INVOICE_PRINT', 'הדפס חשבונית' );
jr_define( '_JOMRES_COM_ADDSERVICE_TITLE', 'הוסף שרות לחשבון' );
jr_define( '_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'תאור השרות' );
jr_define( '_JOMRES_COM_ADDSERVICE_VALUE', 'ערך השרות' );
jr_define( '_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'פריטים נוספים שחוייבו' );
jr_define( '_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'פריטים נוספים שחוייבו, סה"כ: ' );
jr_define( '_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'פריטים שנוספו לחשבון' );
jr_define( '_JOMRES_UPLOAD_IMAGE', 'העלת תמונה' );
jr_define( '_JOMRES_FILE_UPLOAD', 'ההעלאת קובץ ' );
jr_define( '_JOMRES_FILE_ERROR_TYPE', 'באפשרותך להעלות קבצים רק מסוג: /n' );
jr_define( '_JOMRES_FILE_ERROR_EMPTY', 'אנא בחר קובץ לפני העלאה' );
jr_define( '_JOMRES_FILE_ERROR_NAME', 'שם קובץ יכול לכלול רק אותיות ומספרים וללא רווחים' );
jr_define( '_JOMRES_FILE_ERROR_SIZE', 'גודל הקובץ יותר גדול מהמותר' );
jr_define( '_JOMRES_FILE_NOT_UPLOADED', 'קבצים לא הועלו' );
jr_define( '_JOMRES_FILE_UPDATED', 'הקובץ/קבצים שלך הועלו בהצלחה' );
jr_define( '_JOMRES_COM_A_JSCALENDAR', 'לוח שנה JS' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE', 'קובץ שפה של לוח שנה JS' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'בחר את קובץ השפה שישמש את לוח השנה. אנא שים לב שחלק מלוחות השנה יכולים להיות שגויים. ראה - http://sourceforge.net/tracker/?group_id=75569&atid=544287 לפרטים נוספים' );
jr_define( '_JOMRES_COM_A_CALENDARCSS', 'CSS של לוח שנה' );
jr_define( '_JOMRES_COM_A_CALENDARCSS_DESC', 'אנא בחר את קובץ CSS עבור לוח שנה JS' );
jr_define( '_JOMRES_COM_A_ODDS', 'שונות.' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING', 'הצג רשימת קריאות למיני רכיבים' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING_DESC', 'העבר ל-כן על מנת לראות רשימת קריאות למיני רכיבים בתחתית העמוד לאחר שגומרס סיים פעולתו.  
כמו כן זה מונע את תכונת השליחה מחדש הפנימית. זה שימושי אם הנך מנסה לזהות איזה מיני רכיבים מבצעים שירותים מסויימים.' );
jr_define( '_JOMRES_FILE_DELETE', 'מחק תמונה זאת' );
jr_define( '_JOMRES_FILE_DELETED', 'קובץ נמחק' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETE', 'מחק' );
jr_define( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'אין אפשרות למחוק את החדר, כי ישנה הזמנה לחדר. מחק את ההזמנה ונסה שנית' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETED', 'חדר נמחק' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'מחק מאפיין החדר' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'אין אפשרות למחוק את המאפיין כי הוא מוקצב למספר חדרים. קודם תבטל את המאפיין בחדרים ואז תנסה למחוק' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'מאפיין חדר נמחק' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'מחק מאפיין הנכס' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'אין אפשרות למחוק את המאפיין כי הוא מוקצב למספר נכסים. קודם תבטל את המאפיין בנכסים ואז תנסה למחוק' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'מאפיין נכס נמחק' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETE', 'מחק סוג חדר' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'אי אפשר למחוק את סוג חדר, כי קיימים חדרים מהסוג הזה. תנסה לשנות את סוג החדרים ואז למחוק' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'אי אפשר למחוק את סוג חדר, כי קיימים תעריפים שקשורים לסוג זה. תנסה לקשר את התעריפים לסוג אחר ואז למחוק' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETED', 'סוג חדר נמחק' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE', 'nje nkui' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETED', 'נכס נמחק' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'אינך מורשה לבצע פעולה זאת' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'רוחב תמונה בגודל מלא' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'לחץ על המפה' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'תאור הנכס' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'זמני הגעות' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'פעילות באיזור' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'הנחיות לנהגים' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'שדות תעופה' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'תחבורה נוספת' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'תקנונים וכתבי מדיניות' );
jr_define( '_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'כתובת' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'מבקרים יכולים להזמין מהאתר' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'הגדר את זה ככן, כדי לאפשר הזמנות מהאתר' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'ההזמנות הן לתקופה קבועה' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'אם תגדיר את זה ככן, כל ההזמנות ירשמו לתקופה קבועה. אם תגדיר את זה כלא, אנא וודא ש"תאריך הגעה מוגדר" לא מוגדר ככן (אלא אם כן הינך דוחף תאריך מסויים)' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD', 'תקופת הזמנה: ' );
jr_define( '_JOMRES_COM_A_BOOKING', 'הזמנת חדרים' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'תקופה מקסימלית, לדוגמא: 3 * 7 תקופות הזמנה = 21 יום' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY', 'האם זאת דירה/קוטג/ווילה?' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'אם אתה מזכיר נכס ולא רק חדרים בנכס. אם זה המקרה, עליך לוודא שבכל נכס ישנו  אך ורק חדר אחד' );
jr_define( '_JOMRES_FRONT_MR_REVIEWBOOKING', 'עיין בהזמנה' );
jr_define( '_JOMRES_COM_MR_CONFIRMBOOKING', 'אשר הזמנה ' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'שני' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'שלישי' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'רביעי' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'חמישי' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'שישי' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'שבת' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'ראשון' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'ב' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'ג' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'ד' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'ה' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'ו' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'ש' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'א' );
jr_define( '_JOMRES_COM_A_AVLCAL', 'זמינות' );
jr_define( '_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'צבע גופן לתאריך נוכחי' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE', 'צבע גופן לימים בתצוגת חודש ' );
jr_define( '_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'צבע גופן לימים מחוץ לתצוגת החודש' );
jr_define( '_JOMRES_COM_AVLCAL_INBGCOLOUR', 'צבע רקע של תא ימים כש החדר/נכס זמינים' );
jr_define( '_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'צבע רקע תא לימים בתצוגת חודש' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'צבע רקע תא לימים שהחדר מאוכלס' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'צבע רקע תא לחדר בהזמנה חלקית ( הזמנה שההפקדה שלה עדייו לא שולמה' );
jr_define( '_JOMRES_COM_AVLCAL_PASTCOLOUR', 'צבע רקע תא של ימים בעבר' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'מאוכלס/לא זמין' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'פנוי להזמנות' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'הזמנות חלקיות' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'תאריך הגעה מוגדר מראש' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'רק לאתרים שמציעים הזמנות לתקופות קבועות. בחר את התאריך תחילת ההגעה' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', ',תאריך הגעה קבוע' );
jr_define( '_JOMRES_FRONT_MR_FIXEDPRIOD1', 'תקופת שהייה (ימים)' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'להציג לוח שנה של זמינות?' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'הגדר את זה ככן כדי להציג את לוח שנה של זמינות' );
jr_define( '_JOMRES_FRONT_AVAILABILITY', 'זמינות' );
jr_define( '_JOMRES_FRONT_CALENDAR_CLICKDATES', 'לחץ על תאריך פנוי, כדי להציג טופס הזמנה' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING', 'הזמנות שחורות' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_NEW', 'הזמנות שחורות חדשות' );
jr_define( '_JOMRES_FRONT_DELETEGUEST', 'מחק אורח' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'אורח נמחק' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'אין אפשרות למחוק אורח זה, כי ישנם הזמנות על שמו. בטל את ההזמנות ונסה שנית' );
jr_define( '_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'מחיר ממשי של חדר: ' );






jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'מעשן' );
jr_define( '_JOMRES_FRONT_ROOMSMOKING_EITHER', "כלשהו" );
jr_define( '_JOMRES_COM_CALENDAROUTPUT', 'מראה של לוח שנה' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT_DESC', 'זה מאפשר למשתמשים לשנות את תצורת תאריכים בלוח שנה של Jomres' );
jr_define( '_JOMRES_COM_CALENDARINPUT', 'מראה של לוח שנה' );
jr_define( '_JOMRES_COM_CALENDARINPUT_DESC', 'זה מאפשר למשתמשים לשנות את תצורת תאריכים בלוח שנה של Jomres' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'הזמנות בתקופה קבועה מאפשרות הפסקות קצרות' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'משך זמן של ההפקה' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISHED', 'פורסם' );
jr_define( '_JOMRES_COM_A_PAYPAL', 'Paypal' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'מעקב חשבונות' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_DATE', 'תאריך' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_TIME', 'זמן' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_USER', 'שם משתמש' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_OPERATION', 'פעולה' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'ראה פרטים' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'סנן לפי תאריך' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'סנן לפי משתמש' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'סנן לפי פעולה' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'סטטוס' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'מחכה להגעה' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'מגיע היום' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'שוכן כרגע' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'עוזב היום' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'כבר עזב' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'טרם הגיע' );
jr_define( '_JOMRES_MR_AUDIT_UNKNOWNUSER', 'משתמש לא מזוהה' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM', 'חדר נוצר' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM', 'חדר עודכן' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM', 'חדר נמחק' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'מאפיין חדר נוצר' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'מאפיין חדר עודכן' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'מאפיין חדר נמחק' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'סוג חדר הוכנס' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'סוג חדר עודכן' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'סוג חדר נמחק' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'נכס נוצר' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'נכס עודכן' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'נכס נמחק' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'מאפיין נכס נוצר' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'מאפיין נכס עודכן' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'מאפיין נכס נמחק' );
jr_define( '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'הגדרות נכס ערוכות' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'נכס פורסם' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_TARIFF', 'תעריף נוצר' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'תעריף עודכן' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_TARIFF', 'תעריף נמחק' );
jr_define( '_JOMRES_MR_AUDIT_ADDSERVICE', 'חיוב שרות נוצר' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'אורח שהזמין' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'אורח שביטל' );
jr_define( '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'הפקדה הוכנסה' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_GUEST', 'אורח נוצר' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_GUEST', 'אורח עודכן' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_GUEST', 'אורח נמחק' );
jr_define( '_JOMRES_MR_AUDIT_BOOKED_ROOM', 'הזמין חדר' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_EXTRA', 'יצר תוספת' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'עידכן תוספת' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_EXTRA', 'מחק תוספת' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'תוספת פורסמה' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING', 'הוכנס לספר שחור' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'נמחק מספר שחור' );
jr_define( '_JOMRES_COM_MR_EXTRA_TITLE', 'תוספות' );
jr_define( '_JOMRES_COM_MR_EXTRA_DESC', 'תאור' );
jr_define( '_JOMRES_COM_MR_EXTRA_NAME', 'שם' );
jr_define( '_JOMRES_COM_MR_EXTRA_PRICE', 'מחיר' );
jr_define( '_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'תוספת עודכנה' );
jr_define( '_JOMRES_COM_MR_EXTRA_LINKTEXT', 'ערוך פריט' );
jr_define( '_JOMRES_COM_MR_EXTRA_DELETED', 'תוספת נמחקה' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'ניהול תוספות' );
jr_define( '_JOMRES_COM_A_EXTRAS', 'הצג תוספות בזמן ביצוע הזמנה?' );
jr_define( '_JOMRES_COM_A_EXTRAS_DESC', 'הגדר את זה ככן כדי להציג תוספות שברצונך להציע לאורח' );
jr_define( '_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'תוספות לבחירה' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'תחילת תאריך ספר שחור' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'תאריך סיום השרות' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'הזמנות בספר שחור' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'נוצרה שגיה בניסיון להזמין את החדרים. אחד או יותר חדרים שבחרת כבר הוזמן' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'חדרים נוספו לרשימה שחורה' );
jr_define( '_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'ראה רשימה שחורה' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'אין רישומים ברשימה שחורה' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'מספר כוכבים' );
jr_define( '_JOMRES_COM_A_SMOKING', 'הצג אפשרות עישון?' );
jr_define( '_JOMRES_COM_A_SMOKING_DESC', 'הגדר את זה ככן אם ברצונך לשאול שאלת העישון' );
jr_define( '_JOMRES_COM_A_RESET', 'איפוס' );
jr_define( '_JOMRES_COM_A_PAYPAL_CANCELLED', 'הזמנה בוטלה' );
jr_define( '_JOMRES_FRONT_MR_SEARCH_HERE', 'חפש את ה:' );
jr_define( '_JOMRES_COM_A_SMOKING_OPTION', 'ברירת מחדל לעישון' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL', 'סימן מטבע' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'כגון &amp;pound&#59; אנא שים לב שאתה צריך להשתמש ב-חחחחח לקוד של הסמל' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE', 'קוד הסמל' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE_DESC', 'זה ישמש באמייל ללקוח, כדי לאשר את הזמנתם' );
jr_define( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'הקלק למידע נוסף' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'להגביל הזמנות מראש?' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'הגדר את זה ככן אם ברצונך להגביל  את המשתמש בהזמנות לעתיד של N ימים. אם הוא ינסה לחרוג, התוכנה תחזיר אותו לתאריך של היום' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'ימי הגבלה להזמנה מראש' );
jr_define( '_JOMRES_COM_A_TAX_WARNING', '<font color=red>הערה: לא מומלץ שתגדיר את שתי הבחירות הבאות לכן, עליך להשתמש רק בצורת מיסוי אחת מהשניים </FONT>' );
jr_define( '_JOMRES_COM_FRONT_ROOMTAX', 'מיסוי' );
jr_define( '_JOMRES_COM_A_ROOMTAX', 'מיסוי חדר' );
jr_define( '_JOMRES_COM_A_ROOMTAX_DESC', 'מעוצב לשוק האמריקאי. מיסי חדר אלו יחיבו את האורח. באפשרותך לחייב אחוזי מס שונים. שים לב - המס הוא עבור חדר בודד' );
jr_define( '_JOMRES_COM_A_ROOMTAX_FIXED', 'מיסוי בסכום קבוע' );
jr_define( '_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'מיסוי באחוזים' );
jr_define( '_JOMRES_COM_A_EUROTAX', 'Tax' );
jr_define( '_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'אחוזי מס' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVE', 'העבר את הכל לארכיון' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' רשימות הועברו לארכיון' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'רשימות מבקר הועברו לארכיון' );
jr_define( '_JOMRES_FRONT_TARIFFS', 'תעריפים שלנו' );
jr_define( '_JOMRES_FRONT_TARIFFS_TITLE', 'שם תעריף' );
jr_define( '_JOMRES_FRONT_TARIFFS_DESC', 'תאור תעריף' );
jr_define( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'סוג חדר' );
jr_define( '_JOMRES_FRONT_TARIFFS_STARTS', 'טופס תקף' );
jr_define( '_JOMRES_FRONT_TARIFFS_ENDS', 'בתוקף עד ' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN', 'לאדם ללילה' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN', 'ללילה' );
jr_define( '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'ללא כולל סופי שבוע' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINDAYS', 'מינימום ימים' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXDAYS', 'מקסימום ימים' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINPEEPS', 'מינימום אנשים' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'מקסימום אנשים' );
jr_define( '_JOMRES_FRONT_PREVIEW', 'תצוגה מקדימה' );
jr_define( '_JOMRES_COM_A_EDITINGMODEON', 'לאפשר עריכה?' );
jr_define( '_JOMRES_COM_A_EDITING_CURRENTTEXT', 'טקסט נוכחי' );
jr_define( '_JOMRES_COM_A_EDITING_NEWTEXT', 'טקסט חדש' );
jr_define( '_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'טקסט אישי עודכן' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'עריכת שפה' );
jr_define( '_JOMRES_COM_A_AUDITING_SHOWING', 'מספר רשימות שהוצאו מארכיון' );
jr_define( '_JOMRES_FRONT_PTYPE', 'סוג נכס' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE', 'הצג סוגי נכס' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'ערוך סוג נכס' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE', 'סוג נכס' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC', 'תאור סוג נכס' );
jr_define( '_JOMRES_COM_PTYPES_SAVED', 'סוג נכס נשמר' );
jr_define( '_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'אי אפשר למחוק את סוג נכס כי קיימים נכסים מסוג זה. אנא שנה את סוגם ואז תנסה למחוק את הסוג' );
jr_define( '_JOMRES_COM_PTYPES_DELETED', 'סוג נכס נמחק' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'תזכורת לתשלום' );
jr_define( '_JOMRES_EXTRAS_NOEXTRAS', 'אין שרותים נוספים לחיוב' );
jr_define( '_JOMRES_COM_CHARGING_DEPOSIT', 'הפקדה' );
jr_define( '_JOMRES_COM_CHARGING_FULLAMT', 'סכום מלא' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG', 'סכום שחויב בזמן ביצוע הנמנה' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG_DESC', 'התשמש באופציה זאת, אם החלטת לחייב את החשבון בזמן ביצוע הזמנה. בחר אם ברצונך לחייב סכום חלקי או מלא' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW', 'חודשים להצגה' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW_DESC', 'כמה חודשים ברצונך להציג בלוח זמינות החדר?' );
jr_define( '_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'חתום בשם: ' );
// V1.4
jr_define( '_JOMRES_COM_A_GATEWAYLIST', 'מעברים' );
jr_define( '_JOMRES_COM_A_CANCEL', 'ביטול' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'אנא בחר חדר שברצונך להוציא מהשימוש ותאריכים השורים<br>אם החדר לא מסומן, הוא לא יכלל ברשימת חדרים להזמנה, עד שתאריכים לא יפוגו<br>כשבחרת תאריכים מתאימים לחץ על הכפתר אישור הכחול כדילשנות את מצב החדר' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center><b>נראה שהתנתקת מהמערכת, אנא התחסר שנית' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'סיבה' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'השתמש בשערי תשלום?' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'הגדר את זה ככן אם ברצונך להשתמש בחיובים מקוונים<b>הערה:</b>זה לא מבטל את חישובי ההפקדות בזמן תהליך ההזמנה. כדי לבטל את האופצייה הזאת, אנא ערוך את הטמפלייט שמתייחס להפקדות בהזמנה' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'אנא בחר צורת תשלום' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', 'לאפשרי שערי תשלום' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'הגדרות פלגין מעודכנות' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'הגדרות פלגים משובצות' );
jr_define( '_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website' );
jr_define( '_JOMRES_COM_A_GALLERYLINK', 'External link' );
jr_define( '_JOMRES_COM_A_GALLERYLINK_DESC', 'Put a link to your website here.' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'כרטיס אשראי נצפה' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'כרטיס אשראי עודכן' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'ערוך כרטיס אשראי' );
jr_define( '_JOMRES_COM_A_EDITICON', 'ערוך גודל אייקון' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'אוסף תמונות הנכס נשמר' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'תמונות כבר בתיקיה' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'מצגת' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'הצג קישור למצגת?' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'הראה מצגת בדף?' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'גובה יעד של מצגת ממוזרת' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'מצגת תמונות' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />מצטערים, אין תמונות של הנכס כרגע. אנא העלה כמה תמונות לאתר' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'הצג קישור לתעריפים' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', 'לאפשר חלונות קופצים?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'אם מוגדר לא - הקישורים יפתחו באותה שורה.  עדיין ניסיוני ' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'עלאת תמונות למצגת' );
jr_define( '_JOMRES_A_TABS_MISC', 'שונות' );
jr_define( '_JOMRES_A', 'תצורת האתר' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'השתמשמ במאפיינים גלובליים' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'הגדר ככן אם ברצונך שכל הנכסים ישתמשו באותם מאפיינים' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ' );
jr_define( '_JOMRES_A_ICON', 'אייקון' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'בחר פלגין חיפוש שברצונך להשתמש' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>מצטערים, החיפוש לא החזיר תוצאות, אנא נסה שנית</b>' );
jr_define( '_JOMRES_AREYOUSURE', 'אתה בטוח רוצה לעשות את זה?' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'הזמן חדר' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'הזמן את הנכס' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'מספר בטחון' );
//v1.4c
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'הצג תעריפים בשורה?' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'כתובת' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'מידע מפורט' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'לחץ לבדיקת זמינות חדרים' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'הצג מידע על תעריפים' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'הצג כתובת מתחת לקישור זה' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'הצג מידע אודות נכס מתחת לקישור זה' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'הצג חדרים וזמינות מתחת לקישור זה' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'הצג פרטי תעריף מתחת לקישור זה' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'תעריפים קבועים' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'ממוצע' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'בחר סוג תעריף שברצונך להשתמש בו' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'באפשרותך לבחור אחד משני צורת חישוב. ראשון היא - תעריף קבוע, המאפשרת להציע מספר תעריפים לאורח ועלות השהייה זהה כל הזמן. זה שימושי אם ברצונך להציע  תעריפים שונים לאותו יום. לדוגמא תעריף BB ותעריף HB. בחר ב"ממוצע" כדי לעדכן מחירים לאותו יום. ותוכנה תיקח את כל התעריפים ותחשב את הממוצע לתקופה מסוימת' );
// v1.4e
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'הצג קלט תאריל עזיבה' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "ההגדר כ-לא אם אתה לא אינך מעוניין להציג תאריך עזיבה כתיבת קלט. התמש בזה אך ורק אם אתה יודע מה לעשות, כי תאריך עזיבה תמיד יהיה יום לאחר ההגעה " );
// v1.4f
jr_define( '_JOMRES_COM_PROPERTYLISTDESC', 'הגבלת תאור' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC_DESC', "זה מגביל את כמות התווים המוצגים בדף כש תאור הנכס מוצג." );
// v1.4g+
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE', 'לשנות צורת תאריך משומש?' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'הגדר כ-כן אם ברצונך להציג תאריכים בפורמט  date()  (ראה <a href="http://www.php.net/manual/en/function.date.php">פו</a>). הגדר כ-לא כדי להשתמש ספורמט strftime() (ראה <a href="http://www.php.net/manual/en/function.strftime.php">כן</a> eg. %b %d %Y ' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISH', 'לחץ כדי לפרסם באתר' );
jr_define( '_JOMRES_COM_MR_VRCT_UNPUBLISH', 'לחץ כדי להוריד מהאתר' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES', 'השתמש בסוג חדר גלובלי' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_DESC', 'הגדר כ-כן אם ברצונך שכל החדרים יהיו מאותו סוג, מודר מראש' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_INFO', 'כדי להקצות תמונה לסוג חדר זה, קודם צריך לעלות התמונות של סג חדר ל-/images/stories/jomres/rmtypes/ ' );
jr_define( '_JOMRES_COM_INPUTERROR_BACKGROUND', 'הכנס צבע רקע לשגיה' );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES', 'מדינה ברירת מחדל בטופס הזמנה' );
jr_define( '_JOMRES_JAVASCRIPT_', 'פריטים מסומנים באדום הינם פריטי חובה' );
jr_define( '_JOMRES_COM_SELFREGISTRATION', 'משתמשים יכולים להוסיף נכסים?' );
jr_define( '_JOMRES_COM_SELFREGISTRATION_DESC', 'הגדר כ-כן אם ברצונך לאפשר להוסיף נכסים משלהם בלי אישור מנהל אתר' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'אנא הכנס מדינה ואזור של הנכס שלך' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'אנא השלם את פירטי הנכס שלך' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'פריטים מסומנים באדום הינם פריטי חובה' );
jr_define( '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'נכס נוצר' );
jr_define( '_JOMRES_REGISTRATION_NOTALLOWED', "מצטערים. אין באפשרותך להוסיף נכסים למערכת. הינך צריך להיות רשום כמשתמש מורשה ולא בעל נכס שכבר במערכת" );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Cנכס שנוצר: ' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'עבור משתמש: ' );
// v1.4i
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR', 'הצג לוח שנה מתחילת השנה?' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'לוח זמינות מוצג מתחילת השנה הנוכחית' );
jr_define( '_JOMRES_NUMBEROFROOMSAVAILABLE', 'מספר חדרים פנויים' );
jr_define( '_JOMRES_BACKTOPROPERTYDETAILSLINK', 'חזרה לפרטי הנכס' );
jr_define( '_JOMRES_FRONT_ROOMTYPES', 'סוגי חדרים' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'גבול חיפוש רנדומלי' );
jr_define( '_JOMRES_SHOWGOOGLECURRENCYLINKS', 'הצג קישור לגוגל-מטבעות בדף תעריפים?' );
jr_define( '_JOMRES_CURRENCYCONVERSIONTEXT', 'להמיר ל-' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR', 'לאשר למשתמשים לעבוד עם עורך HTML' );
// v2
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS', 'השתמש בטופס זה, כדי לרשום את הזמנתך. העבר סמן מעל "I" למידע נוסף אודות העמודה. עדכן את הזמנתך, שנה זמני הגעה או עזיבה ומספר אורחים. לאחר מכן - בחר חדר מרשימת חדרים פנויים, והזמן. לבסוף תדרש להכניס מידע אישי על עצמך, כדי לקבל את ההזמנה באימייל ולאשרה' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'השתמש בטופס זה, כדי לרשום את הזמנתך. העבר סמן מעל "I" למידע נופס אודות העמודה. עדכן את הזמנתך, שנה זמני הגעה או עזיבה ומספר אוחים. לאחר מכן - בחר חדר מרשימת חדרים פנויים, והזמן. לבסוף תדרש להכניס מידע אישי על צמך, כדי לקבל את ההזנהבאימייל ולאשרץ' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS', 'פירוט הזמנה' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS_DESC', 'בחר פרטים נדרשים להזמנתך' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE', 'זמינות ' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC', 'בחר את החדרים שאתה רוצה' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'בדוק פו, כדי לראות עם הנכס פנוי כרגע להזמנות' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS', 'תוספות לבחירה' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_DESC', 'בחר כל תוספת שברצונך לכלול בהזמנה' );
jr_define( '_JOMRES_COM_PERDAY', 'ללילה' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS', 'כתובתך' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS_DESC', 'אנא הכנס את פרטיך. כל השדות חובה חוץ ממספר טלפון נייד' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLEROOMS', 'חדרים פנויים' );
jr_define( '_JOMRES_AJAXFORM_SELECTEDROOMS', 'בחר חדרים' );
jr_define( '_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>תאריך הגעה הכי מוקדם הוא: ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM', 'ללילה:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'סה"כ:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_EXTRAS', 'תוספות:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX', 'מיסוי:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'הנחה:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTAL', 'סה"כ כללי' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'אורחים' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION', 'הקלק כעת כדי להוסיף את החדר לבחירה' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'הקלק כעת כדי להסיר את החדר לבחירה' );
jr_define( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'סוגי אורחים' );
jr_define( '_JOMRES_VARIANCES_TYPE', 'סוג' );
jr_define( '_JOMRES_VARIANCES_TYPE_TT', 'סוג האורח כגון: תינוק, ילד או סטודנט' );
jr_define( '_JOMRES_VARIANCES_NOTES', 'הערות' );
jr_define( '_JOMRES_VARIANCES_NOTES_TT', 'הערות שברצונך להוסיף לסוג אורח זה' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM', 'מקסימום' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM_TT', 'המספר המירבי של סוג אורח זה שיכול להופיע בטופס הזמנה' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE', 'הוא אחוז' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'המספר המחושב הוא אחוז ממחיר בסיסי של החדר, אם מוגדר כלא -  המספר שתכניס פשוט  יחובר או יחוסר ממחיר הבסיסי' );
jr_define( '_JOMRES_VARIANCES_POSNEG', 'להוסיף משתנה?' );
jr_define( '_JOMRES_VARIANCES_POSNEG_TT', 'המספר המחושב מחובר או יחוסר ממחיר הבסיסי של החדר הגדר כלא אם ברצונך שהנחה הזאת תהיה מספר קבוע ' );
jr_define( '_JOMRES_VARIANCES_VARIANCE', 'משתנה' );
jr_define( '_JOMRES_VARIANCES_VARIANCE_TT', 'זהו גודל המשתנה' );
jr_define( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'עודכן סדר סוגי האורח' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'פורסם סוג אורחים' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'נמחק סוג אורחים' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'נוצר סוג אורחים' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'עודכן סוג אורחים' );
jr_define( '_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'עודכן סוג אורחים' );
jr_define( '_JOMRES_COM_A_SHOWROOMSLISTLINK', 'הצג קישור לרשימת חדרים בדף פרטי הנכס?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL', 'הצג <b>רק</b> לוח זמינות/רשימת חדרים?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'הגדר את זה ככן אם ברצונך להציג דף של הנכס בצורה כזאת, שחדרי הנכס יופיעו באותו דף. זה באמת מיועד לנכסים בעלי חדר אחד. כגון בעלי דירות ויחידות נופש' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL', 'המרווח המינימלי בין הגעה לעזיבה' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'מרווח מנימלי בהזמנות בין יום ההגעה ליום העזיבה' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'הצג מספר חדר בטופס הזמנה' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'הצג שמות חדר בטופס הזמנה' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'הצג כותרת תעריף בטופס הזמנה' );
jr_define( '_JOMRES_ORDER', 'סדר' );
jr_define( '_JOMRES_REQUIREDFIELDS', 'נדרש' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'ימים לפני הגעה' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'מספר מינימלי של ימים שאמורים לחלוף מיום לפני תאריך הגעה' );
jr_define( '_JOMRES_DTV', 'ווריאציות סוגי תאריך' );
jr_define( '_JOMRES_DTV_DOW', 'יום השבוע' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'ברירת מחדל לסוג אורח' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'מספר ברירת מחדל לסוג אורח ראשון. אם הינך משתמש בסוגי אורחים, זהו יהיה מספר אורחים שיופיע אוטומטית בהזמנה' );
jr_define( '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'הזמנות פתוחות רק למשתמשים רשומים?' );
jr_define( '_JOMRES_REGISTEREDUSERSONLYBOOK', 'מצטעריםת עלך להיות משתמש מורשה, כדי לבצע הזמנות באתר. לחץ כאן כדי להרשם ' );
jr_define( '_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'צבע הקישור להזמנות נוכחיות' );
jr_define( '_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'גבולות של סופי שבוע' );
jr_define( '_JOMRES_COM_AVLCAL_BOOKING_KEY', 'חדר מוזמן' );
jr_define( '_JOMRES_COM_AVLCAL_BLACK_KEY', 'הזמנות ספר שחור' );
jr_define( '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'לעגל סכום הפקדה למספר שלם?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'לחייב הפקדות?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'לשמור חיובי תעריפים כמספרים שבועיים' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'יש לך לשמור חיובים כמספרים שבועיים או כמספרים יומיים. אם תרצה לראות תוצאות שבועייות - הגדר את זה כ-כן' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'מחיר לשבוע' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'תאריכי הגעה קבועים?' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'אם בחרת לאופציה של תאריכי הגעה קבועים, תאריכם יוצגו בתיבת בחירה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'חסרה בחירת עישון' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'תאריך הגעה לא תיקני' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'תאריך עזיבה לא תיקני' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'ההזמנה יותר מדי קצרה, בין ההגעה לעזיבה אמורים להיות לפחות מספר זה של ימים: ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'תאריך הגעתך הוא' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'בחירת סוג אורח שגויה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'אנא בחר את סוג האורח' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'יש לך יותר מדי משתתפים לתעריף הזמין' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'בחרת יותר חדרים מאשר מספר האורחים, לחץ על מספר החדר כדי להוריד אותו מהרשימה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'יותר מדי אורחים למיטות הפנויות' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'אתה צריך לבחור יותר חדרים' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'בחר חדר' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'שם פרטי הינו שדה חובה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'שם משפחה הינו שדה חובה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'מספר בית הינו שדה חובה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'רחוב הינו שדה חובה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'עיר הינו שדה חובה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'איזור הינו שדה חובה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'מיקוד הינו שדה חובה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'מדינה הינו שדה חובה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'טלפון הינו שדה חובה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'טלפון נייד הינו שדה חובה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'אימייל הינו שדה חובה' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'אימייל שהקלדת הינו חוקי' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'אין אפשרות לבדוק דומיין של האימייל' );
jr_define( '_JOMRES_SRP_WEHAVEVACANCIES', 'יש חדרים פנויים!' );
jr_define( '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'לא נבחר אף חדר' );
jr_define( '_JOMRES_BOOKING_NUMBER', 'מספר הזמנה' );
jr_define( '_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'אפשר להזמין, רקע הודעת טקסט' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA', 'לרוקן משתנים בטמפלייטים' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'הגדר כן, כדי לאפשר את ה-DHTML לשפוך משתנים לכל גגג טמפלייטץ שימושי אם ברצונך אלמנטים מסויימים שיופיעו בטמפלייטים מסוימים' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'מספר באחוזים' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'הגדר ככן אם חישוב ליחיד מבוצע באחוזים, הגדר כ-לא אם זה יהיה מספר קבוע' );
//v2rc2
jr_define( '_JOMRES_COM_LIMITROOMSLIST', 'הגבלת זמינות חדרים/תעריפים' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST_DESC', 'השתמש בקלט זה כדי להגביל את מספרים חדרים הפנויים ותעריפים שרשומים בטופס הזמנה. הגדר כ-0 אם אינך מעוניין בהגבלה ' );
jr_define( '_JOMRES_SRP_WEHAVENOVACANCIES', 'כרגע אין חדרים פנויים' );
// Introduced in v2.5
// v2.6
jr_define( '_JOMRES_BOOKITNOW', 'הזמן עכשיו: ' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'מצב עריכה גלובלי?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'טפל בפונקציה הזאת. אם תגדיר כן, אז השינויים שתבצע ישפיעו על כל הנכסים/חדרים במערכת' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'השתמש במטבע גלובלי?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'אם מוגדר כן, כל הנכסים ישתמשו באותה מטבע' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'סימן מטבע גלובלי' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED', 'להסתיר את המרכיב?' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'אם מוגדר כן, הראש של המודל לא תוצג בדף' );
jr_define( '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'מנהל נכס ראשי' );
jr_define( '_JOMRES_COM_WEEKENDONLY', 'ימי שבוע בלבד' );
jr_define( '_JOMRES_COM_WEEKENDDAYS', 'ימי סופשבוע' );
jr_define( '_JOMRES_COM_WEEKENDDAYS_DESC', 'בחר את ימי סופהשבוע שלך. תעריפים המאפשרים, או שאינם מאפשרים, סופי שבוע יקחו זאת בחשבון בזמן יצירת רשימות החדרים' );
jr_define( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'בחר את המדינה שלך לפני הוספת נתוני הנכס' );
jr_define( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'שמור את השינויים בפרטי הנכס לפני ההעלאת תמונות' );
jr_define( '_JOMRES_TARIFFSFROM', 'מחירים מ - ' );
jr_define( '_JOMRES_SEARCH_ALL', 'הכל' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'חפש לפי מדינה' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'חפש לפי אזור' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'חפש לפי מקום ישוב' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'חפוש תכונות.' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'חפש' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'הזן מילת חיפוש בקופסה ולחץ על הכפתור' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'מלה (מלות) חיפוש :' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'הזן בבקשה את מועדי ההגעה והעזיבה המתוכננים שלך ולחץ על הכפתור על מנת לאתר נכסים זמינים בתאריכים הנבחרים' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'הצג את רשימת כל הנכסים ממוינים לפי סוג נכס' );
jr_define( '_JOMRES_SEARCH_RTYPES', 'הצג את רשימת כל הנכסים ממוינים לפי סוג חדר' );
jr_define( '_JOMRES_SORTORDER_DEFAULT', 'ברירת מחדל' );
jr_define( '_JOMRES_SORTORDER_PROPERTYNAME', 'שם נכס' );
jr_define( '_JOMRES_SORTORDER_PROPERTYREGION', 'אזור שבו נמצא הנכס' );
jr_define( '_JOMRES_SORTORDER_PROPERTYTOWN', 'מקום ישוב שבו נמצא הנכס' );
jr_define( '_JOMRES_SORTORDER_STARS', 'התחל' );
jr_define( '_JOMRES_PATHWAY_PROPERTYLIST', 'רשימת נכסים' );
jr_define( '_JOMRES_PATHWAY_PROPERTYDETAILS', 'פרטי נכס' );
jr_define( '_JOMRES_PATHWAY_BOOKINGFORM', 'טופס הזמנה' );
jr_define( '_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'עדכן את פרטי הכתובת שלך' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'בודק מחדש את זמינות החדרים (בחירת החדרים תאופס)' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'בודק מחדש זמינות' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'משנה את התוספות האופציונליות' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'משנה את בחירת החדרים' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'מעדכן את פרטי הכתובת' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'מצטער, שדה כתובת אחד או יותר אינם נכונים' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'תמונת חדר' );
jr_define( '_JOMRES_CURRENCYFORMAT', 'מבנה מטבע' );
jr_define( '_JOMRES_MANAGEROPTIONSASIMAGES', 'הראה אפשרויות מנהל בתור תמונה' );
jr_define( 'JOMRES_COM_A_SEARCHOPTIONSTAB', 'אפשרויות חיפוש' );
jr_define( 'JOMRES_COM_A_AVAILABLELOGS', 'יומני זמינות' );
jr_define( 'JOMRES_COM_A_LOGS_NOENTRIES', 'אין רשומות ביומן. זהו מצב נורמלי, אתה צריך לשנות ידנית את jonres.php על מנת להפעיל רשומות.' );
jr_define( 'JOMRES_COM_A_MESSAGE', 'הודעה' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define( 'JOMRES_COM_A_TARIFFMODE_NORMAL', 'רגיל' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_ADVANCED', 'מתקדם' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'ניהול מיקרו' );
jr_define( 'JOMRES_COM_A_TARIFFMODE', 'מצב הגדרת מבנה תעריף' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_DESC', "<b>אזהרה: מעבר בין סוגי תעריפים שונים עלול להביא לאיבוד נתונים. ראה את ההערה להלן בהקשר זה</b>.
<br/><br/>
יש לך שלוש אפשרויות להגדרת מבני התעריפים שלך: <br/>
מצב רגיל: יהיה לך תעריף אחד לכל סוג חדר שיהיה בתוקף לעשר השנים הבאות<br/>
ניהול פרטני: אתה יכול לשנות את המחיר לכל יום ויום ולכל סוג חדר/נכס<br/>
מתקדם: השיטה הישנה של ג'ומרס לניהול תעריפים <br/>
<br/>
מבני התעריפים השונים מאפשרים לך לבחור את שיטת הגדרת התעריפים המתאימה לך ביותר.<br/>
מבנה רגיל הוא הפשטני ביותר אך הוא הקל ביותר להבנה מאחר שהוא יעשה הצלבות בין חדרים לתעריפים לבין סוגי חדרים/ נכסים ומאפשר לך להגדיר חדרים ותעריפים באותו עמוד<br/>
ניהול פרטני מאפשר לך לשנות את השערים על בסיס יום יומי בלי שתהיה חייב לנהל מבני תעריפים<br/>
דבר זה נעשה על ידי הצלבת תעריפים רבים ושונים אחד עם השני וכתוצאה מכך נוצרים עבורך מספר תעריפים המכסים תקופת זמן אבל אינך יכול לסדר תעריפים בצורה שכבתית<br/>
מצב מתקדם מאפשר לך ליצור חדר ולשייך אותו לסוג חדר. לאחר מכן אתה יוצר תעריף ומשייך אותו לסוג חדר. שימוש בשיטה זו מאפשר לך לסדר תעריפים בשכבות אחד על השני <br/>
לדוגמא לחדר מסוג מיטה כפולה יכול להיות תעריף אחד ללינה וארוחת בוקר ותעריף אחר ללינה, ארוחת בוקר וארוחת ערב. המצב המתקדם דורש מעט יותר תשומת לב לפרטים מאחר ואפשרי  <br/>
שלא לשייך חדר או תעריף לסוג חדר או נכס, או לקבוע בצורה לא נכונה תאריכי הגעה ועזבה תקפים, אבל נותן לך אפשרויות הגדרה שאינן אפשריות במבני תעריפים אחרים <br/>
<br/>
מאחר ומצב רגיל ומצב ניהול פרטני דורשים סט ספציפי של חדרים ותעריפים על מנת לפעול, המערכת תצטרך לאפס נתונים על מנת שמבנה התעריף העכשווי יהיה תואם <br/>
עם מצב עריכת התעריפים הנוכחי<br/>
<br/>
מצב רגיל למצב מתקדם: אין שינוי התעריפים הנוכחיים נשמרים<br/>
מצב רגיל לניהול פרטני: כל התעריפים הקיימים נמחקים<br/>
מצב מתקדם למצב רגיל: כל התעריפים הקיימים נמחקים<br/>
מצב מתקדם לניהול פרטני: כל התעריפים הקיימים נמחקים<br/>
ניהול פרטני למצב מתקדם: כל ההצלבות הקיימות בין תעריפים נמחקות, אבל התעריפים עצמם נשארים<br/>
ניהול פרטני למצב רגיל: כל ההצלבות הקיימות והתעריפים עצמם נמחקים<br/>" );
jr_define( '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'הראה רשימת חדרים בדף פרטי הנכס?' );
jr_define( 'JOMRES_PROPERTYTYPE', 'סוג נכס' );
jr_define( 'JOMRES_COM_A_SRPONLY', 'נכס בעל חדר אחד בלבד' );
jr_define( 'JOMRES_MAXPEOPLEINROOM', 'מספר אנשים מקסימלי לחדר' );
jr_define( 'JOMRES_MAXPEOPLEINBOOKING', 'מס אנשים מקסימלי להזמנה' );
jr_define( '_JOMCOMP_BOOKINGNOTES_ADD', 'הוסף הערה' );
jr_define( '_JOMCOMP_BOOKINGNOTES_EDIT', 'ערוך הערה' );
jr_define( '_JOMCOMP_BOOKINGNOTES_DELETE', 'בטל הערה' );
jr_define( '_JOMCOMP_BOOKINGNOTES_VIEW', 'צפה בהערות' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'נוספה הערה חדשה' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'הערה אחרי עריכה' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'הערה מבוטלת' );
jr_define( '_JOMCOMP_MYUSER_MENUTITLE', 'האפשרויות שלי' );
jr_define( '_JOMCOMP_MYUSER_LISTBOOKINGS', 'הצג רשימת הזמנות' );
jr_define( '_JOMCOMP_MYUSER_MYBOOKINGS', 'ההזמנות שלי' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKING', 'הצג הזמנה' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES', 'הצג מועדפים' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'לא הוספת עדיין לרשימת המועדפים!' );
jr_define( '_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'הוסף למועדפים' );
jr_define( '_JOMCOMP_MYUSER_PROPERTYTYPE', 'סוג נכס' );
jr_define( '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'נכסים באתר' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE', 'מחיר חכם' );
jr_define( '_JOMCOMP_WISEPRICE_ACTIVE', 'פעיל' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC', 'רכיב זה מאפשר לך לנהל ולהגדיר את מחירי החדרים בצורה דינמית' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'רוב העסקים יחשבו מחדש את מחירי החדרים בהתבסס על מספר החדרים מסוג נדרש שהם זמינים ביום נתון. דבר זה מאפשר להם להציע הנחות על סוג חדר שאינו תפוס בתקופה נתונה 
במטרה למשוך עסקאות שאחרת יוחמצו
אפשור והגדרת רכיב זה מאפשר לך להציע מחיר מתואם המבוסס על מספר החדרים מסוג נבחר הזמינים בנכס בתאריך מסויים.
ערך הסף של הימים מגדיר את מספר הימים עד ליום ההגעה לפני שהמחירים מתואמים על ידי תכונה זו,
ואז אופציית האחוזים מאפשרת להגדיר את אחוז החדרים שיכולים להיות זמינים לפני שהנחה מסוימת נתנת.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD', 'מרווח ( מספר הימים מיום ההגעה להיום)' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE10', 'אחוז תפוסה  10%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE25', 'אחוז תפוסה 25%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE50', 'אחוז תפוסה 50%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE75', 'אחוז תפוסה75%' );
jr_define( '_JOMCOMP_WISEPRICE_DISCOUNT', 'הנחה %' );
jr_define( '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' אחרי הנחה מ - ' );
jr_define( '_JOMCOMP_WISEPRICE_TO', ' אל ' );
jr_define( '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' מחיר החדר ללא הנחה ' );
jr_define( 'JOMRES_COM_A_MAPSKEY', 'מפתח למפת גוגל' );
jr_define( 'JOMRES_COM_A_MAPSKEY_DESC', 'פקודת GET יכולה לקבל ממשק למפת גוגל מהאתר<a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. לאחר שהכנסת את מפתח המפה שלך במקום זה, גומרס יראה את המפה בדף פרטי הנכס שלך' );
jr_define( 'JOMRES_COM_A_USE_SSL', 'השתמש ב-SSL בטופס ההזמנה?' );
jr_define( 'JOMRES_COM_A_USE_SSL_DESC', 'עליך להבטיח שברשותך רישוי SSL תקף על מנת ' );
jr_define( '_JOMCOMP_LASTMINUTE_CPANEL', 'רגע אחרון' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE', 'פעיל?' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'בחר כן אם ברצונך להציע עסקאות רגע אחרון' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD', 'מרווח' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'אם מתבצעת הזמנה ויום ההגעה הו רק X ימים מיום ההזמנה, אפשר לתת את ההנחה' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT', 'הנחה' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'באחוזים' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'הנחה נתנה בהזמנה זו!' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'מחיר השהייה הופחת ב ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'נכס זה מציע הנחת רגע אחרון של ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' אחוזים אם תתבצע הזמנה להגעה לפני' );
jr_define( '_JOMCOMP_LASTMINUTE_ORMORE', ' אחוזים או יותר אם תתבצע הזמנה להגעה לפני ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. הזמן כעת על מנת להפיק את המקסימום מעסקה זו' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO', 'מידע תעריף מילולי' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'בחר כן על מנת להציג מידע עריפי מפורט בחלון קופץ פרטי הנכס/ תעריף' );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG', 'צמצם אפשרויות תצורה' );
jr_define( '_JOMCOMP_AMEND', 'הזמנה - בחירת נכס' );
jr_define( '_JOMCOMP_AMEND_SELECTPROPERTY', 'בחר נכס חדש' );
jr_define( '_JOMCOMP_AMEND_HEADER', 'חוזה מקורי' );
jr_define( '_JOMCOMP_AMEND_DEPOSITPAID', 'מקדמה שולמה' );
jr_define( '_JOMCOMP_AMEND_DEPOSITDUE', 'מקדמה לא שולמה' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'הכתב סכום כללי' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'הכתב אחוז הנחה' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define( '_JRPORTAL_CANCEL', 'בטל' );
jr_define( '_JRPORTAL_CPANEL', 'פנל בקרה פורטל הזמנות' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE', 'דמי ניהול בסיסיים' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'בחר את שיעור דמי הניהול הבסיסיים שיושמו לנכס במקרה ושיעור אחר לא נקבע במפורש' );
jr_define( '_JRPORTAL_CPANEL_LISTCRATES', 'הצג רשימת תעריפי ניהול' );
jr_define( '_JRPORTAL_CPANEL_PATETITLE', 'תעריפי ניהול' );
jr_define( '_JRPORTAL_CRATE_TITLE', 'כותרת' );
jr_define( '_JRPORTAL_CRATE_TYPE', 'סוג' );
jr_define( '_JRPORTAL_CRATE_VALUE', 'שעור דמי ניהול' );
jr_define( '_JRPORTAL_CRATE_CURRENCYCODE', 'קוד מטבע' );
jr_define( '_JRPORTAL_CPANEL_LISTPROPERTIES', 'הצג  נכסים' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYNAME', 'שם נכס' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'כתובת נכס' );
jr_define( '_JRPORTAL_PROPERTIES_LEGEND', 'לנכסים שצבע הרקע שלהם אדום עדיין לא נקבע שיעור דמי ניהול' );
jr_define( '_JRPORTAL_STATS_PATETITLE', 'סטטיסטיקות' );
jr_define( '_JRPORTAL_STATS_STATTYPE', 'סטיסטיקות עבור: ' );
jr_define( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'נכסים - הקלקות' );
jr_define( '_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'הצג נכס' );
jr_define( '_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'מס הזמנות' );
jr_define( '_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'ערך הזמנות' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'הערכת דמי ניהול' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'שיעור דמי ניהול' );
jr_define( '_JRPORTAL_CPANEL_LISTBOOKINGS', 'הצג הזמנות' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'זיהוי נכס' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'זיהוי לקוח' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'זיהוי בעלים' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'זיהוי חשבונית' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'סך כל הזמנה' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'זיהוי איש קשר' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'מס איש קשר' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'קוד מטבע' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'נוצר' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'נשמר בארכיון' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'תאריך שמירה בארכיון' );
jr_define( '_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'הוסף פריט לחשבון' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'על המנהל להוציא חשבונית' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'נכסים מקושרים (אם ישים)' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'ערך' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'תאור' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', "פריט תמחור הוסף בהצלחה ל -  " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', "הצג הזמנות" );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', "נכשל בהוספת פריט תמחור" );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "שגיאה, לא קבעת ערך לחשבון" );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'ביכולתך ליצור קובצי שפת סוג נכס ספציפיים על ידי קביעת התיאור לשם של תת מחיצה, לדוגמא ניהול יכטות והעתקת קובץ שפה לתת מחיצה זו. 
באפשרותך לשנות את קובץ השפה לסוג נכס זה כך שחדרים הופכים , לדוגמא, לקלטות וידאו או כל מוצר שניתן להשכירו' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'אינך יכול לבטל נכס זה מאחר וזה הנכס היחיד שיש לך גישה אליו. אם ברצונך למנוע גישה לנכס זה, השתמש בבחירה לא לפרסום בסרגל הכלים שלך ' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'אם זו התקנה לדוגמא ובכוונתך להתקדם לגומרס סולו - הגבלה לנכס אחד בלבד - אתה צריך ליצור נכס חדש תחילה ואז לבטל את הנכס הנוכחי לפני שינוי מפתח הרשיון למפתח רשיון סולו
שתקבל בזמן הרכישה' );
jr_define( '_JOMRES_COM_EMAILERRORS', "שלח בדואל הודעות מרשם שגיאות" );
jr_define( '_JOMRES_COM_EMAILERRORS_DESC', "קבע זאת ל-כן אם ברצונך שJOMRES.NET יועתק אוטומטית כאשר נוצרת הודעת מרשם שגיאות.
זה מאפשר לנו לפעול בגישת מניעה מראש לטיפול בבעיות פוטנציאליות, בתקווה לפתור בעיות לפני שאתה מודע להן כלל. שים לב שתכונה זו אינה מאופשרת על שרת מקומי" );
jr_define( '_JOMRES_COM_ISTHISANMRP', "האם נכס זה הוא מלון-לינה וארוחת בוקר-מקום ארוח-פנסיון?" );
jr_define( '_JOMRES_COM_ISTHISANMRP_DESC', "אפשרויות הגדרה משתנות אם אתה משכיר חדרים בנכס או את הנכס עצמו. בחר כן אם אתה מציע חדרים. בחר לא אם אתה מציע את הנכס כולו " );
// Jomres v3.0.6
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK', "השתמש בבודק כתובת דואל של גומרס? " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK_DESC', "הפעל בדיקה מדוקדקת על דואל שנשלח. כמה שרתי רשת מאובטחים יזרקו שגיאה פנימית 500 אם אתה מנסה לשלוח דואל לכתובת לא קיימת.
הפעלת תכונה זו מאפשרת לנו להשתמש בתכונות CHECKDNSRR של PHP לפני שמנסים לשלוח דואל ולמנוע שגיאות 500 אלו" );
// Jomres v3.1
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "סך הכל אירוח" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', "לילה - לילות ב" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "לכל חדר " );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', "שדרג את סך כל השהייה שלך " );
jr_define( '_JOMRES_AJAXFORM_PRICE_SUMMARY', "סיכום מחירים" );
jr_define( '_JOMRES_CONFIRMATION_ALERT', "בבקשה קרא והסכם ל- " );
jr_define( '_JOMRES_CONFIRMATION_HEADER', "סכום ההזמנה שלך מוצג להלן<br /> על מנת לעשות שינוי כלשהוא, בבקשה לחץ על כפתור שינוי הזמנה" );
jr_define( '_JOMRES_CONFIRMATION_AMENDTEXT', "אם יש צורך בשינוי המידע שלמעלה בבקשה לחץ כאן" );
jr_define( '_JOMRES_CONFIRMATION_AMEND', "עדכן הזמנה" );
jr_define( '_JOMRES_CONFIRMATION_SPECIALS', "בבקשה ציין בקשות מיוחדות בחלון שלמטה" );
jr_define( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', "אני מאשר שהמידע למעלה הוא נכון ןמסכים ל-" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "per person per night " );
// Jomres 3.1.10
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE', "Default language file" );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Choose the default language file that Jomres should use if the language hasn't been set by Joomfish." );
// Jomres 3.1.11
// Jomres 3.1.13
if ( !defined( '_PN_OF' ) ) jr_define( '_PN_OF', 'of' );
if ( !defined( '_PN_START' ) ) jr_define( '_PN_START', 'Start' );
if ( !defined( '_PN_PREVIOUS' ) ) jr_define( '_PN_PREVIOUS', 'Prev' );
if ( !defined( '_PN_NEXT' ) ) jr_define( '_PN_NEXT', 'Next' );
if ( !defined( '_PN_END' ) ) jr_define( '_PN_END', 'End' );
if ( !defined( '_PN_RESULTS' ) ) jr_define( '_PN_RESULTS', 'Results' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Note that this is not a booking form, instead you are sending an email.<br/>Please enter the message you\'d like to send to ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Contact hotel' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Property enquiry from ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' regarding ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Type the characters that you see in the box' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'I cannot read the characters. Generate a ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Send' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'new image' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Enquiry' );
jr_define( '_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Please select your required accommodation from the list on the right' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min rooms already selected' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max rooms already selected' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ' );
jr_define( '_JOMRES_COM_SPS_EDITROOM_DESC', 'Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.' );
jr_define( '_JOMRES_AVLCAL_NOBOOKINGS', "Available" );
jr_define( '_JOMRES_AVLCAL_QUARTER', "Some bookings" );
jr_define( '_JOMRES_AVLCAL_HALF', "Half booked" );
jr_define( '_JOMRES_AVLCAL_THREEQUARTER', "Mostly booked" );
jr_define( '_JOMRES_AVLCAL_FULLYBOOKED', "Fully booked" );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX', 'Url prefix' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX_DESC', 'This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'View property task alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'dobooking task alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Search task alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Add country to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Add region to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Add town to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Add property type to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Add property name to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Append property id to property name' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Search URL Structure - Add country to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Search URL Structure - Default country' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Search URL Structure - Add region to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION', 'Search URL Structure - Default region' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Search URL Structure - Add town to url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN', 'Search URL Structure - Default town' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Search URL Structure - Property type' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Search URL Structure - Default property type' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Used in url if search is for all property types' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Autodetect Javascript calendar language' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Per week' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Per day' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Per booking' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Per person per booking' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Per person per day' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Per person per week' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per days (min days)' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per days X rooms selected' );
jr_define( '_JOMRES_REGISTRYREBUILD', 'Rebuild minicomponent registry & rebuild cache' );
jr_define( '_JOMRES_REGISTRYREBUILD_NOTES', "Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it." );
jr_define( '_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registry rebuilt successfully' );
jr_define( '_JOMRES_REGISTRYREBUILD_FAILURE', 'There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.' );
jr_define( '_JOMRES_SEARCH_PRICERANGES', 'Price' );
jr_define( 'JOMRES_WORD_SAVING', 'Saving...' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Use Composite Property details?' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)' );
jr_define( '_JOMRES_PROFILELIST_INSTRUCTIONS', 'This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.' );
jr_define( '_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'You haven\'t made any bookings yet!' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Property type' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Edit your property type' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Select your property type' );
jr_define( '_JOMRES_COM_LOGGING', 'Jomres logging' );
jr_define( '_JOMRES_COM_LOGGING_WARNING', 'These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>' . JOMRESPATH_BASE . JRDS . 'temp' . JRDS . '</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.' );
jr_define( '_JOMRES_COM_LOGGING_BOOKING', 'Booking form logging (Booking engine logs) ' );
jr_define( '_JOMRES_COM_LOGGING_GATEWAY', 'Gateway logs (eg paypal etc) ' );
jr_define( '_JOMRES_COM_LOGGING_REQUEST', 'Request log (all incoming server requests)' );
jr_define( '_JOMRES_COM_LOGGING_SYSTEM', 'Misc ' );
jr_define( '_JOMRES_COM_LOGGING_JRPORTAL', 'JR Portal (mainly for recording commission etc) ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Your enquiry...' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Booking form room list show room type image' );
jr_define( '_JOMRES_COM_A_LISTLIMIT', 'Property List limit' );
jr_define( '_JOMRES_COM_A_LISTLIMIT_DESC', 'The number of propertys to show on a page after a search' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrated search feature' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>' . JOMRES_TEMPLATEPATH_FRONTEND . '</b> ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Activate this feature?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Use columns' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', "Feature columns" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', "The number of feature icons that can be shown before a br is inserted to go to next row." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "Search region by select combo dropdown" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Search by property name" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "Show the search by property name input." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "Town/region" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "Show the Region input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Search by property type" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "Show the search by property type input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Search by room type" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Show the search by room type input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Set this to no to show the list as links" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', "Features" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "Show the search by feature input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "Show as dropdown?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Set this to no to show the list as tooltip images and checkboxes" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "Search by description" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "Show the search by description input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "Search by availability" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "Show the search by availability input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "Search by price ranges" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "Show the search by price ranges input" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "Price range increments" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here." );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.' );
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
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Template Editing' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_DESC', 'This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Template Name' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Template has been customised?' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Custom fields' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESC', 'Here you can define simple custom fields that will be shown in the booking form.' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Fieldname (no spaces)' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Default value' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Description' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Required' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maximum Quantity' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.' );
jr_define( '_JRPORTAL_INVOICES_ISSUE', "Issue invoices" );
jr_define( '_JRPORTAL_TAXRATES_TITLE', "Tax rates" );
jr_define( '_JRPORTAL_TAXRATES_CODE', "Tax code" );
jr_define( '_JRPORTAL_TAXRATES_DESCRIPTION', "Rate description" );
jr_define( '_JRPORTAL_TAXRATES_CANNOTDELETE', "You cannot delete this tax rate." );
jr_define( '_JRPORTAL_TAXRATES_RATE', "Rate" );
jr_define( '_JRPORTAL_INVOICES_TITLE', "Invoices" );
jr_define( '_JRPORTAL_INVOICES_STATUS_UNPAID', "Unpaid" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PAID', "Paid" );
jr_define( '_JRPORTAL_INVOICES_STATUS_CANCELLED', "Cancelled" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PENDING', "Pending" );
jr_define( '_JRPORTAL_INVOICES_USER', "User" );
jr_define( '_JRPORTAL_INVOICES_STATUS', "Status" );
jr_define( '_JRPORTAL_INVOICES_RAISED', "Raised" );
jr_define( '_JRPORTAL_INVOICES_DUE', "Due" );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION', "Subscription" );
jr_define( '_JRPORTAL_INVOICES_INITTOTAL', "Outstanding total" );
jr_define( '_JRPORTAL_INVOICES_RECUR_TOTAL', "Recurring total" );
jr_define( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', "Recurring frequency" );
jr_define( '_JRPORTAL_INVOICES_RECUR_DOMONTH', "Recurring day of month" );
jr_define( '_JRPORTAL_INVOICES_CURRENCYCODE', "Currency code" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS', "Line items" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_NAME', "Name" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', "Description" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', "Initial Price" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', "Initial Quantity" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', "Initial Discount" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', "Initial Total" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', "Recurring Price" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', "Recurring quantity" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', "Recurring discount" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', "Recurring total" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "Tax code" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "Tax description" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', "Tax rate" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', "Paypal settings" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', "Currency code (eg EUR)" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', "Use sandbox?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', "Your paypal email address" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', "Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;" . JOMRES_SITEPAGE_URL_AJAX . "&task=completebk" );
jr_define( '_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', "This invoice is now due. Please click the button to be taken to paypal." );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "Override standard Jomres gateway settings?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', "If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration." );
jr_define( '_JRPORTAL_INVOICES_SHOWINVOICES', "Show my invoices" );
jr_define( '_JRPORTAL_COUPONS_TITLE', "Discount coupons" );
jr_define( '_JRPORTAL_COUPONS_DESC', "Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself." );
jr_define( '_JRPORTAL_COUPONS_CODE', "Coupon code" );
jr_define( '_JRPORTAL_COUPONS_VALIDFROM', "Valid from" );
jr_define( '_JRPORTAL_COUPONS_VALIDTO', "Valid to" );
jr_define( '_JRPORTAL_COUPONS_AMOUNT', "Discount amount" );
jr_define( '_JRPORTAL_COUPONS_ISPERCENTAGE', "Discount is a percentage" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY', "Room only" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY_DESC', "Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking." );
jr_define( '_JRPORTAL_COUPONS_SQLERROR', "Sql error when trying to delete/insert a coupon" );
jr_define( '_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.' );
jr_define( '_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Save coupon' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Coupon saved against booking' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Coupon number not found' );
jr_define( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Coupon discount value' );
jr_define( '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Booking discounted. Coupon code/discount value/coupon settings : ' );
jr_define( '_JOMRES_COM_CACHING', 'Use the Jomres caching feature?' );
jr_define( '_JOMRES_COM_CACHING_DESC', 'Set this to No to disable the Jomres caching feature.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES', 'Choose languages' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Choose the language options to be shown in the language switch dropdown.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Show the language selection dropdown?' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Booked out and Cancelled bookings' );
/*
* @ignore
*/
jr_define( '_JRPORTAL_NEWUSER_DEAR', "Dear" );
jr_define( '_JRPORTAL_NEWUSER_THANKYOU', "Thank you for registering " );
jr_define( '_JRPORTAL_NEWUSER_USERNAME', "Your user name is : " );
jr_define( '_JRPORTAL_NEWUSER_PASSWORD', "Your password is : " );
jr_define( '_JRPORTAL_NEWUSER_LOG_IN', "Please log in to view your bookings " );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Coupon saved' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_COUPON', 'Coupon deleted' );
// Not used yet
jr_define( '_JOMRES_COM_GROWL', 'Use Jomres messaging' );
jr_define( '_JOMRES_COM_GROWL_DESC', 'Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TITLE', "Jomres -> Clickatell SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_USERNAME', "Username" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_PASSWORD', "Password" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_APIID', "API id" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', "Notification mobile number" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone." );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TABTITLE', "SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to " .get_showtime("live_site") . "/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
" );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Booking form room list show disabled access' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Booking form room list show max people' );
jr_define( '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection." );
jr_define( '_JOMRES_LASTEDITED_DB', 'Database template Last edited' );
jr_define( '_JOMRES_LASTEDITED_DISK', 'Disk template Last edited' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON', 'Database template warning' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Database template may be out of date' );
jr_define( '_JOMRES_LASTEDITED_WARNING', 'If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "Subscription packages" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Name" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "Description" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "Published" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', "Frequency" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', "Trial period" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', "Trial amount" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "Full amount" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', "Rooms limit" ); // Not currently used, saved for a rainy day
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Property limit" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', "Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', "Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Subscribe" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', "Please enter/update your subscriber information. Please note that all fields are required." );
jr_define( '_JRPORTAL_SUBSCRIBERS_FIRSTNAME', "First name" );
jr_define( '_JRPORTAL_SUBSCRIBERS_SURNAME', "Surname" );
jr_define( '_JRPORTAL_SUBSCRIBERS_ADDRESS', "Address" );
jr_define( '_JRPORTAL_SUBSCRIBERS_COUNTRY', "Country" );
jr_define( '_JRPORTAL_SUBSCRIBERS_POSTCODE', "Postcode" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', "You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', " published property(s). " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "You can increase the number of properties you can create by <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>purchasing more subscription packages here.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', " You have used " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', " property slots. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "To see a list of your current properties click <a href='" . JOMRES_SITEPAGE_URL . "&task=listyourproperties'>here</a>. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "To see a list of the current subscription packages available, click <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>here</a>. " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', "Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots." );
jr_define( '_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='" . JOMRES_SITEPAGE_URL . "&task=registerProp_step1'>click here to continue creating your property(s).</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_USE', "Use subscription handling functionality" );
jr_define( '_JOMRES_COM_NEWUSER', 'Create new user on booking' );
jr_define( '_JOMRES_COM_NEWUSER_DESC', 'Create new user account on unregistered user booking.' );
jr_define( '_JOMRES_CLICKTOREGISTER', 'Click here to register your property' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', "Active subscriptions" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', "Gateway subscription id" );
jr_define( '_JRPORTAL_NEWUSER_SUBJECT', "Thank you for your booking - new user details follow" );
jr_define( '_JOMRES_LATLONG_DESC', "Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude." );
jr_define( '_JOMRES_CONTROLPANEL', 'Control Panel' );
jr_define( '_JOMRES_COM_FAUXHEADERS', 'Output Jomres javascript headers into the body of the html?' );
jr_define( '_JOMRES_COM_FAUXHEADERS_DESC', 'Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.' );
// Jomres v4.2
jr_define( '_JOMRES_MANAGER_SHOWINVOICE', 'Show invoice' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICES', 'Show invoices' );
jr_define( '_JOMRES_USER_LISTMYPROPERTY', 'Add my property to this site' );
jr_define( '_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Todo : ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', "You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "Sorry, but that package ID is not recognised." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "Sorry, you are already subscribed to a free package, you cannot subscribe to that package again." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', " Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "My Account" );
jr_define( '_JOMRES_COM_YOURBUSINESS', 'Your company details' );
jr_define( '_JOMRES_COM_YOURBUSINESS_NAME', 'business name' );
jr_define( '_JOMRES_COM_YOURBUSINESS_VATNO', 'VAT number' );
jr_define( '_JOMRES_COM_YOURBUSINESSADDRESS', 'Building number' );
jr_define( '_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>' );
jr_define( '_JOMRES_INVOICE_NUMBER', 'Invoice No. ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Sorry, you cannot black book this property for those dates.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'You can blackbook this property for those dates.' );
jr_define( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.' );
jr_define( '_JOMRES_EDITINGMODE_ON', 'Label Editing mode on' );
jr_define( '_JOMRES_EDITINGMODE_OFF', 'Label Editing mode off' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Charge variable deposits?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'The number of days, within which the full amount will be charged as a deposit.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN', 'Send Contact Owner emails to Alternative address?' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Alternative address for Contact Owner emails.' );
jr_define( '_JOMRES_CONFIRMATION_EMAIL_SENT', 'Confirmation email has been sent. You may close this window now.' );
jr_define( '_JOMRES_REALESTATE_TITLE', 'Real estate listing' );
jr_define( '_JOMRES_REALESTATE_YESNO', 'Is this property a Real estate listing?' );
jr_define( '_JOMRES_REALESTATE_YESNO_DESC', 'Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contact agent' );
jr_define( '_JOMRES_INVOICE_MARKASPAID', 'Mark invoice as paid' );
jr_define( '_JOMRES_INVOICE_MARKEDASPAID', 'Invoice marked as paid' );
jr_define( '_JOMRES_APIKEY_REMAKE', 'Make new API key' );
jr_define( '_JOMRES_AUTOTRANSLATE_TITLE', 'Use Google for initial translations?' );
jr_define( '_JOMRES_AUTOTRANSLATE_DESC', 'This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Is this a single property installation?' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>' );
jr_define( '_JOMRES_HTMP_PURIFIER', 'Use HTML purifier functionality?' );
jr_define( '_JOMRES_HTMP_PURIFIER_DESC', 'Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Balance payment' );
jr_define( '_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Balance' );
jr_define( '_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> for more information on this subject.' );
jr_define( '_JOMRES_SUPPORTKEY', 'Support key' );
jr_define( '_JOMRES_SUPPORTKEY_DESC', 'Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.' );
jr_define( '_JOMRES_PERSONAL_DISCOUNT', 'Personal discount' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Limit property registration to one country?' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Properties are located in this country : ' );
jr_define( '_JOMRES_JQUERYTHEME', 'Jquery theme' );
jr_define( '_JOMRES_JQUERYTHEME_DESC', 'Choose a jquery theme to use for the property details tabs.' );
jr_define( '_JOMRES_PROPERTYNOTOUBLISHED', 'We are sorry, but that property is not currently available.' );
jr_define( '_JOMRES_REVIEWS', 'Reviews' );
jr_define( '_JOMRES_REVIEWS_TITLE', 'Review title' );
jr_define( '_JOMRES_REVIEWS_DATE', 'posted on ' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS', 'There are no reviews for this property yet.' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Would you like to be the first to review this property?' );
jr_define( '_JOMRES_REVIEWS_IAGREE', 'I agree with this review' );
jr_define( '_JOMRES_REVIEWS_IDISAGREE', 'I disagree with this review' );
jr_define( '_JOMRES_REVIEWS_AVERAGE_RATING', 'Average Rating: ' );
jr_define( '_JOMRES_REVIEWS_TOTAL_VOTES', 'Total Votes:' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW', 'Add a new review.' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'You need to be logged in to post a review.' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY', 'Tell us what you think about this property : ' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY_SAID', 'This reviewer told us : ' );
jr_define( '_JOMRES_REVIEWS_PROS', 'Pros: ' );
jr_define( '_JOMRES_REVIEWS_CONS', 'Cons: ' );
jr_define( '_JOMRES_REVIEWS_SUBMITTEDDATE', 'Submitted On: ' );
jr_define( '_JOMRES_REVIEWS_ALREADYREVIEWED', 'You have already reviewed this property, you can\'t post another review about it.' );
jr_define( '_JOMRES_REVIEWS_CANNOTREVIEW', 'Sorry, but you are not allowed to post reviews on this site.' );
jr_define( '_JOMRES_REVIEWS_CLICKTOSHOW', 'Show reviews' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' guests agree with this review. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' guests do not agree with this review.' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' guest agrees with this review. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'guest does not agree with this review.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Thank you for sharing your opinion of this review.' );
jr_define( '_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Thank you, but you have already shared your opinion of this review.' );
jr_define( '_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Please ensure that all fields have been filled.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Please summarise your review by entering a title' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Please enter a more complete review in the description box' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Please enter the good parts of your experience of being a guest at this property' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Please enter any negative thoughts you might have of your experience' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Please rate the hostpitality you received from the staff' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Please rate your opinion of the property\s locale' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Please provide your opinion of the cleanliness of the property' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Please rate the accommodation. Was it comfortable or threadbare' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Please provide your opinion of whether it was value for money' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Please rate the services' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Review summary' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Your experience in more detail' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Thank you for submitting your review.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Thank you for submitting your review. It will be published soon by one of our hard working moderators.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_CONTROL', 'Use Jomres review functionality?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automatically publish reviews?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'If you set this to No you will need to manually publish reviews' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Set reviews to test mode?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Number of unpublished reviews' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total number of reviews' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publish/Unpublish review' );
jr_define( '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Delete review' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW', 'Report review' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Review reports' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Please enter your report' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'See something in this review which is objectional or inaccurate? Report it and we will look into it for you.' );
jr_define( '_JOMRES_REVIEWS_SUBMIT', 'Submit' );
jr_define( '_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Report created by ' );
jr_define( '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.' );
jr_define( '_JOMRES_REVIEWS_RATING', 'Ratings (1 = poor 10 = excellent) ' );
jr_define( '_JOMRES_REVIEWS_RATING_1', 'Hospitality  ' );
jr_define( '_JOMRES_REVIEWS_RATING_2', 'Location ' );
jr_define( '_JOMRES_REVIEWS_RATING_3', 'Cleanliness ' );
jr_define( '_JOMRES_REVIEWS_RATING_4', 'Accommodation ' );
jr_define( '_JOMRES_REVIEWS_RATING_5', 'Value for money ' );
jr_define( '_JOMRES_REVIEWS_RATING_6', 'Services ' );
jr_define( '_JOMRES_REVIEWS_REVIEWED_BY', 'Reviewed by : ' );
jr_define( '_JOMRES_REVIEWS_CLICKTOHIDE', 'Hide reviews' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Show Booking form in property details page?' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE', 'Are prices set inclusive of tax?' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extras tax:' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Start range' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'End range' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Rate' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Set rates' );
jr_define( '_JOMRES_PARTNERS_TITLE', 'Partners' );
jr_define( '_JOMRES_CALENDAR_TODAY', 'Today' );
jr_define( '_JOMRES_CALENDAR_PREV', 'Previous' );
jr_define( '_JOMRES_CALENDAR_NEXT', 'Next' );
jr_define( '_JOMRES_CALENDAR_RTL', 'true' );
jr_define( '_JOMRES_ROOMALLOCATIONS_ROOM', 'Room ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_GUESTS', 'guest(s). ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_INFORMATION', 'This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.' );
jr_define( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Note that your property is not yet published, only you can see the property, site visitors will not see it" );
// 4.5.5
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Default search result order' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Change this option to change the order that search results are presented by default.' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Show search result order dropdown' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE', 'Rooms list style' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_DESC', 'In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Room types' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', '(Re)checking availability' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Rebuilding available rooms list' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Calculating totals' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Finished form update' );
jr_define( '_JOMRES_COM_CALENDAR_STARTDAY', 'Calendar week start day, Sunday or Monday' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Only property guests can review?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Per room' );
jr_define( '_JOMRES_MAX_GUESTS_PER_ROOM', 'Guests per room : ' );
jr_define( '_JOMRES_MAX_GUESTS_PER_BOOKING', 'Guests per booking : ' );
jr_define( '_JOMRES_NUMBER_OF_ROOMS', 'Number of rooms' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Tariff default price' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "This only applies to new tariffs" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW', "Years to show" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "Defines the number of years to show when editing a micromanage tariff" );
jr_define( '_JRPORTAL_MONTHS_LONG_0', 'January' );
jr_define( '_JRPORTAL_MONTHS_LONG_1', 'February' );
jr_define( '_JRPORTAL_MONTHS_LONG_2', 'March' );
jr_define( '_JRPORTAL_MONTHS_LONG_3', 'April' );
jr_define( '_JRPORTAL_MONTHS_LONG_4', 'May' );
jr_define( '_JRPORTAL_MONTHS_LONG_5', 'June' );
jr_define( '_JRPORTAL_MONTHS_LONG_6', 'July' );
jr_define( '_JRPORTAL_MONTHS_LONG_7', 'August' );
jr_define( '_JRPORTAL_MONTHS_LONG_8', 'September' );
jr_define( '_JRPORTAL_MONTHS_LONG_9', 'October' );
jr_define( '_JRPORTAL_MONTHS_LONG_10', 'November' );
jr_define( '_JRPORTAL_MONTHS_LONG_11', 'December' );

jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS', "Property management process" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', "There are different management processes depending on the way you want to list your property/business." );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', "Rental" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "Choose the rental option if you are booking out rooms in a property (eg. Hotel/B&B/Villa/Apartment)" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "Realestate/simple listing" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "Choose the real estate option if you are not offering any booking functionality at all, (eg. A property/item for sale)" );

jr_define( 'JOMRES_COM_A_MINIMALCONFIG_DESC', 'Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.' );

jr_define( '_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Please select an option for your booking' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Switches on html editors in property details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.' );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Fullscreen view" );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Normal view" );
jr_define( '_JOMRES_COM_TIMEZONE_SWITCHER', "Show the timezone switcher in the property manager's toolbar?" );

jr_define( '_JOMRES_PARTNER_DISCOUNT', "Partner discount " );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "Search user" );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user." );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "Existing partners" );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Choose a partner to be taken to the partner administration page." );

jr_define( '_JOMRES_PARTNER_SHOW_TITLE', "Partner :" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Search for a property" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself." );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Current properties" );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Click on a property to edit the partner's discount settings for that property." );


// 4.6
jr_define( '_JOMRES_SUSPENSIONS_TITLE', "Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) " );
jr_define( '_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', "Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their properties will be unpublished. Super property managers cannot be suspended." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "This account has been suspended, it is not currently possible to administer your propert(ies) using this account." );
jr_define( '_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Manager account suspended" );
jr_define( '_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Manager account reinstated" );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you." );
jr_define( '_JOMCOMP_MYUSER_REMOVE', 'Remove favourite' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE', 'Booking data archive' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.' );
jr_define( '_JOMRES_MY_ACCOUNT_EDIT', 'Edit account' );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', "Search users" );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user." );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "Existing managers" );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', "Choose a manager to be taken to the manager administration page." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Sleeps" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Show the search by guest number dropdown" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Stars" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Show the Stars dropdown" );
jr_define( '_JOMRES_SEARCH_GUESTNUMBER', 'Number of guests' );
jr_define( '_JOMRES_SEARCH_STARS', 'Number of stars' );

jr_define( '_JRPORTAL_INVOICES_COMMISSION_TITLE', "Commission invoices" );
jr_define( '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "Number of properties" );
// 4.6.1
jr_define( '_JOMRES_CONFIG_JQUERY', "Load Jomres jQuery library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_DESC', "You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all." );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Thumbnails are created automatically for uploaded images.' );

// 4.7.1
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Small thumbnails max width (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Small thumbnails max height (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Medium thumbnails max width (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Medium thumbnails max height (px).' );
jr_define( '_JOMRES_TOUCHTEMPLATES', 'Label Translations' );


jr_define( '_JRPORTAL_ROI_TAB', "ROI" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE', "Use commission functionality?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Set this to Yes to show the manager commission invoices which have been raised." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "Manager bookings create commission invoices?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "If a manager makes a booking, does that also create a commission invoice line item?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', "A new commission invoice has been raised" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', "A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first)." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "Auto suspend managers where invoices are marked as Pending?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "Auto suspend threashold" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished." );

//4.7.2
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT', 'Language context' );
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /'.JOMRES_ROOT_DIRECTORY.'/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /'.JOMRES_ROOT_DIRECTORY.'/languages directory.' );

// 4.7.3
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config' );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.' );

jr_define( '_JOMRES_CONFIG_JQUERY_UI', "Load Jomres jQuery UI library?" );

jr_define( '_JOMRES_SORTORDER_PRICE_DESC', 'Price (highest first)' );
jr_define( '_JOMRES_SORTORDER_PRICE_ASC', 'Price (lowest first)' );

// 4.7.6

jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Price summary and estimates should be priced as per night/per week/per month?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Per night' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Per week' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Per month' );
jr_define( '_JOMRES_BOOKINGFORM_PERPERSON', 'Per person' );

jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week(s) at ' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month(s) at ' );
// 4.7.7

jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'How should the search option for people numbers work?' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Please wait, your order is being processed and you will be redirected to the Paypal website.' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'If you are not automatically redirected to Paypal within 5 seconds...' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Click Here' );
// 4.7.8

jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDFROM', "Booking valid from" );
jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDTO', "Booking valid to" );
jr_define( '_JRPORTAL_COUPONS_GUESTNAME', "Guest name" );
jr_define( '_JRPORTAL_COUPONS_DESC_478', "Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only." );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', "With your coupon, this booking has been discounted from " );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', " to " );

jr_define( '_JOMRES_CONFIG_JQUERY_UI_DESC', "Set this to No to disable loading of both the Jquery UI javascript and CSS files." );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS', "Load Jomres jQuery UI CSS library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Set this to No to disable only the jquery UI CSS file." );

//v5.1 
jr_define( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "Total inc tax" );
jr_define( '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Unpublished property' );

// v5.2
jr_define( '_JOMRES_CONVERSION_TITLE', "Use conversion functionaity" );
jr_define( '_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets." );
jr_define( '_JOMRES_CONVERSION_DISCLAIMER', "We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk." );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_TITLE', "Use javascript caching?" );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_DESC', "Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. " );

// 5.2.1
jr_define( '_JOMRES_HISTORIC_GUESTS_SHOW', "List historic and current guests" );
jr_define( '_JOMRES_HISTORIC_GUESTS_NOSHOW', "Current guests only" );

// 5.3.1
jr_define( '_JOMRES_CURRENCYCONVERSION_TAB', 'Currency conversion/currency codes' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.' );
jr_define( '_JOMRES_DEBUGGING_TAB', 'Debugging' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP', 'Show the booking form in a modal popup?' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals panel location' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Accomodation ex tax' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Accomodation inc tax' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Rooms tax:' );
jr_define( '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Open the booking form' );

jr_define( '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Back to property details' );
jr_define( '_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatically Selected?' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balance (after deposit paid)' );

jr_define( '_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter resources based on their features.' );

jr_define( '_JOMRES_DATEPERIOD_LATESTBOOKING', 'Latest booking' );
jr_define( '_JOMRES_DATEPERIOD_SECOND', 'second' );
jr_define( '_JOMRES_DATEPERIOD_MINUTE', 'minute' );
jr_define( '_JOMRES_DATEPERIOD_HOUR', 'hour' );
jr_define( '_JOMRES_DATEPERIOD_DAY', 'day' );
jr_define( '_JOMRES_DATEPERIOD_WEEK', 'week' );
jr_define( '_JOMRES_DATEPERIOD_MONTH', 'month' );
jr_define( '_JOMRES_DATEPERIOD_YEAR', 'year' );
jr_define( '_JOMRES_DATEPERIOD_DECADE', 'decade' );
jr_define( '_JOMRES_DATEPERIOD_S', 's' );
jr_define( '_JOMRES_DATEPERIOD_AGO', 'ago' );
jr_define( '_JOMRES_DATEPERIOD_FROMNOW', 'from now' );

jr_define( '_JOMRES_WHOLEDAY_TITLE', 'Bookings are for whole days?' );
jr_define( '_JOMRES_WHOLEDAY_DESC', 'By default the system bookings resources out by the night, so a booking from the first of January ' . date( "Y", strtotime( "next year" ) ) . ' to the 2nd of January ' . date( "Y", strtotime( "next year" ) ) . ' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per day' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Per person per day' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Pickup' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', "days(s) at" );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Return date incorrect' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'The booking is too short. There needs to be at least this many days between the pickup and return dates:' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Pickup/Return minimum interval' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Price summary and estimates should be priced as per day/per week/per month?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per day' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Days before the pickup date' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'The minimum number of days that must elapse, from "today", before the pickup date.' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Show return date input?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date." );

jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed pickup day' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per person, per day' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (number of days between pickup date and today)' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Picked up' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return overdue' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Has not picked up' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost per day: ' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Number of days: ' );

jr_define( '_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Save override' );

jr_define( '_JOMRES_BOOKINGFORMWIDTH', 'Booking form width in px' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED', 'Allow the totals panel to slide down the booking form?' );
jr_define( '_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.' );

jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Email new users their login details?' );
jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Show tax output in the booking form totals summary?' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Cancellation Threashold' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.' );

jr_define( '_JOMRES_EDIT_PROFILE', 'Edit Profile' );
jr_define( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship' );
jr_define( '_JOMRES_IMAGE', 'Image' );
jr_define( '_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Business types that can show this feature' );
jr_define( '_JOMRES_CRATES_CLICKINITIAL', 'Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.' );
jr_define( '_JRPORTAL_TAX_RATE_EDIT', "Edit Tax rate" );

jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', "Edit Custom field" );

jr_define( '_JOMRES_LICENSESERVER_PASSWORD', "License server password" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME', "License server username" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME_DESC', "If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here." );

jr_define( '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', "This Jomres version : " );
jr_define( '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', "Latest Jomres version" );
jr_define( '_JOMRES_VERSIONCHECK_VERSIONWARNING', "Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience." );

jr_define( '_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.' );
jr_define( '_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.' );

jr_define( '_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Active property" );
jr_define( '_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "Change your active property" );
jr_define( '_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property." );

jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "Email Settings" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "Alternate Host" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Change this to your smtp mail server" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "Alternate Port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "Change this to your smtp port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "Alternate Protocol" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "Use authentication" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Alternate Username" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Alternate Password" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "" );

jr_define( '_JOMRES_WARNING_SYSTEM_CACHE', "Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically." );

jr_define( '_JOMRES_QUICK_INFO', "Quick Info" );

jr_define( '_JOMRES_MENU_SHOW', "Show" );
jr_define( '_JOMRES_MENU_HIDE', "Hide" );
jr_define( '_JOMRES_MENU_SHOW_TITLE', "Use the alternate menu layout?" );
jr_define( '_JOMRES_MENU_SHOW_DESC', "Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements." );


jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', "Default" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', "Anybody" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', "Registered" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', "Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', "Super Manager" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', "Nobody" );

jr_define( '_JOMRES_ACCESS_CONTROL_TITLE', "Menu Access control" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC', "This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often." );

jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', "Receptionist" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Full Access Control" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls." );

jr_define( '_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option." );
jr_define( '_JOMRES_ACCESS_CONTROL_TITLE_FULL', "Full Access control" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	" );
jr_define( '_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied." );

jr_define( '_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Users with admin rights to this property" );
jr_define( '_JOMRES_ADMIN_LISTALLUSERSINVOICES', "List all user's invoices" );


jr_define( '_JOMRES_DEBUGGING_SUBJECT', 'Subject' );
jr_define( '_JOMRES_DEBUGGING_FULLNAME', 'Your full name' );
jr_define( '_JOMRES_DEBUGGING_YOUREMAIL', 'Your email address' );
jr_define( '_JOMRES_DEBUGGING_ISSUE', 'Please describe your issue' );
jr_define( '_JOMRES_EXTRAS_MODELS_MODEL', 'Model' );
jr_define( '_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters' );
jr_define( '_JOMRES_EXTRAS_MODELS_FORCE', 'Force' );
jr_define( '_JOMRES_METATITLE', 'Meta title' );
jr_define( '_JOMRES_METADESCRIPTION', 'Meta description' );
jr_define( '_JOMRES_FOUNDPROPERTIES', "Properties found" );
jr_define( '_JOMRES_REGISTRATION_STEP_1_OF_2', "Add your property : Step 1 of 2" );
jr_define( '_JOMRES_REGISTRATION_STEP_2_OF_2', "Add your property : Step 2 of 2" );

jr_define( '_JOMRES_MYPROPERTIES', 'My properties' );


jr_define( '_JOMRES_CART_TITLE', 'My proposed bookings' );
jr_define( '_JOMRES_CART_INFO', 'Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!' );
jr_define( '_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirm booking(s)' );
jr_define( '_JOMRES_CART_OR', ' or ' );
jr_define( '_JOMRES_CART_SAVEFORLATER', 'Save for later' );
jr_define( '_JOMRES_CART_NOBOOKINGS_SAVED', 'You don\'t have any bookings saved yet.' );
jr_define( '_JOMRES_CART_VIEWCART', 'View cart' );

jr_define( '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory' );

jr_define( '_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint' );
jr_define( '_JOMRES_DEFAULT_LONG_STARTPOINT', 'Default Longitude Startpoint' );
jr_define( '_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?' );

jr_define( '_JOMRES_CLEARDATES', 'I don\'t have any dates yet' );

jr_define( '_JOMRES_MOBILE_REDIRECT', 'Redirect to frameless when on mobile devices?' );
jr_define( '_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.' );

jr_define( '_JOMRES_SYSTEM_EMAILS', 'Emails sent from which address?' );
jr_define( '_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails." );

jr_define( '_JOMRES_CSS_CACHING_TITLE', "Use css caching?" );
jr_define( '_JOMRES_CSS_CACHING_DESC', "" );


jr_define( '_JOMRES_JSCALENDAR_USECLEARCHECKBOX', "Search calendars show the clear dates checkbox?" );

jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_LIST', "List view" );
jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Photo view" );

jr_define( '_JOMRES_COMPARE', "Compare" );
jr_define( '_JOMRES_REMOVE', "Remove" );
jr_define( '_JOMRES_RETURN_TO_RESULTS', "Return to search results" );

jr_define( '_JOMRES_ADDTOSHORTLIST', "Add to favourites" );
jr_define( '_JOMRES_REMOVEFROMSHORTLIST', "Remove from favourites" );
jr_define( '_JOMRES_VIEWSHORTLIST', "View your shortlist" );

jr_define( '_JOMRES_COOKIEPOLICY_TITLE', "Cookie Policy" );
jr_define( '_JOMRES_COOKIEPOLICY_DESC', "EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show favourites, search results etc). 
<br/>
Set this option to Yes to enact this policy." );

jr_define( '_JOMRES_COOKIEPOLICY_1', "Important: Cookie Policy" );
jr_define( '_JOMRES_COOKIEPOLICY_2', "We use cookies to help keep our site relevant and easy to use." );
jr_define( '_JOMRES_COOKIEPOLICY_3', "Read more..." );
jr_define( '_JOMRES_COOKIEPOLICY_4', "EU legislation requires that all websites clearly specify if cookies are being used and their purpose." );
jr_define( '_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site." );
jr_define( '_JOMRES_COOKIEPOLICY_6', "Yes, I accept the use of cookies in this way." );

jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Deposit required is cost of the first night?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.' );

jr_define( '_JOMRES_NOTHINGINSHORTLIST', "You haven't added any items to your favourites." );

jr_define( '_JOMRES_MOBILE_SETTINGS', "Mobile device settings" );
jr_define( '_JOMRES_SIMULATE_MOBILE', "Simulate mobile mode" );
jr_define( '_JOMRES_SIMULATE_MOBILE_DESC', "Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed." );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION', "Simulation IP" );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1." );

jr_define( '_JOMRES_SAFEMODE', "Enable safe mode?" );
jr_define( '_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality." );

jr_define( '_JOMRES_PRICE_ON_APPLICATION', "POA" );

jr_define( '_JOMRES_USE_JOMRESEDITOR', "Use Jomres' WYSIWYG editor? (recommended)" );
jr_define( '_JOMRES_USE_JOMRESEDITOR_DESC', "If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it." );

jr_define( 'COMMON_NEXT', "Next" );
jr_define( 'COMMON_CANCEL', "Cancel" );
jr_define( 'COMMON_SUBMIT', "Submit" );
jr_define( 'COMMON_SAVE', "Save" );
jr_define( 'COMMON_DELETE', "Delete" );
jr_define( 'COMMON_RETURN', "Return" );
jr_define( 'COMMON_CLOSE', "Close" );
jr_define( 'COMMON_BACK', "Back" );

jr_define( 'COMMON_HOME', "Home" );

jr_define( 'COMMON_NEW', "New" );

jr_define( 'COMMON_SEND', "Send" );

jr_define( 'RECAPTCHA_TITLE', "reCaptcha" );
jr_define( 'RECAPTCHA_INFO', "Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google." );
jr_define( 'RECAPTCHA_PUBLIC_KEY', "Public key" );
jr_define( 'RECAPTCHA_PRIVATE_KEY', "Private key" );


jr_define( '_JOMRES_BOOKINGFORM_LOCK_TITLE', "Lockfile timeout" );
jr_define( '_JOMRES_BOOKINGFORM_LOCK_DESC', "To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure." );


jr_define( '_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_DESC', "If you are running a bootstrap enabled template in the frontend of this site set this option to Yes." );

jr_define( 'COMMON_ACTION', "Action" );
jr_define( 'COMMON_VIEW', "View" );

jr_define( 'BACKTOTOP', "Back to top" );

jr_define( '_JOMRES_INPUTFILTERING_LEVEL_WEAK', "Weak" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_STRONG', "Strong" );

jr_define( '_JOMRES_INPUTFILTERING', "Input filtering" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Input filtering level" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. " );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "Allowed input tags" );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default." );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_TITLE', "Allowed inputs" );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space." );


jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "Property details in tabs?" );
jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_DESC', "Set this option to show property details in tabs. Set it to no to show them without tabs." );

jr_define( 'COMMON_PRINT', "Print" );

jr_define( 'COMMON_EDIT', "Edit" );
jr_define( 'COMMON_COPY', "Copy" );


jr_define( '_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No." );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', "Use Jomres Bootstrap templates in the frontend?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', "Use Jomres Bootstrap templates in the administrator area?" );

jr_define( '_JOMRES_ALTERNATIVE_SEARCH_RESULTS', "Here are some alternatives you might want to consider." );

jr_define( '_JOMRES_BEEZ_WARNING', "Note, your Joomla site template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar." );

jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Auto-detect guest's country?" );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option." );

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "About Jomres" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "help" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 main" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Getting started" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "system maintenance" );
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Access Control" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "developer tools" );
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "languages" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "income generation" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "accounting" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "bookings" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "site structure" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "user management" );
jr_define( "_JOMRES_CUSTOMCODE_MANUAL", "Manual (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "My Account (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "scheduled tasks" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "portal functionality" );
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER", "Plugin manager" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "integration" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "reports/statistics" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "taxes" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "Tickets (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "help" );
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES", "Upgrades" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "payment methods" );

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "Tariff default" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "This only applies to new tariffs" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "Years to show" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "Defines the number of years to show when editing a tariff type" );

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "invoices" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "account details" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "Login" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "Logout" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "search" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "dashboard" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "reserve" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "management" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "invoices" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "settings" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "misc" );
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS", "SRPs" );

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE", "Edit country" );
jr_define( "_JOMRES_EDIT_COUNTRY_ID", "Country id" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE", "Country code" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", "Country name" );

jr_define( "_JOMRES_EDIT_REGION_TITLE", "Edit region" );
jr_define( "_JOMRES_EDIT_REGION_ID", "Region id" );
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE", "Country code" );
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME", "Region name" );


jr_define( "_JOMRES_COM_LISTCOUNTRIES", "List countries" );
jr_define( "_JOMRES_COM_LISTREGIONS", "List regions" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS", "Export definitions" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO", "This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community." );

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS", "Translate locales" );
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES", "Translate lang file strings" );
jr_define( "_JOMRES_COM_NOTAMANAGER", "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Show Profiles feature to make yourself BOTH a manager and a Super manager. This is a security feature." );

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
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS',"Please see this page for help customizing the emails and a list of the available output: <a href=\"http://manual.jomres.net/email_templates.html\" target=\"_blank\">Email Templates Help</a>");
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
jr_define('DATATABLES_SINFO'			, "_START_ עד _END_ מתוך _TOTAL_ רשומות" );
jr_define('DATATABLES_SINFOEMPTY'		, "0 עד 0 מתוך 0 רשומות" );
jr_define('DATATABLES_SINFOFILTERED'	, "(מסונן מסך _MAX_  רשומות)" );
jr_define('DATATABLES_SINFOPOSTFIX'		, "" );
jr_define('DATATABLES_SINFOTHOUSANDS'	, "," );
jr_define('DATATABLES_SLENGTHMENU'		, "הצג _MENU_ פריטים" );
jr_define('DATATABLES_SLOADINGRECORDS'	, "xxxxxxxxxxxxxxxxxxxxxxxxxxxx" );
jr_define('DATATABLES_SPROCESSING'		, "מעבד..." );
jr_define('DATATABLES_SSEARCH'			, "חפש:" );
jr_define('DATATABLES_SZERORECORDS'		, "לא נמצאו רשומות מתאימות" );
jr_define('DATATABLES_SFIRST'			, "ראשון" );
jr_define('DATATABLES_SLAST'			, "אחרון" );
jr_define('DATATABLES_SNEXT'			, "הבא" );
jr_define('DATATABLES_SPREVIOUS'		, "קודם" );
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
jr_define('_OPENEXCHANGE_API_DESC','To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can register for a free key at https://openexchangerates.org/signup/free (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');

jr_define('_JOMRES_COMMISSION',"Commission");

jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS',"If you upload multiple images for individual optional extras, only the first image will be used.");

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


jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Business Features Categories' );
jr_define( '_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Business Feature Category' );
jr_define( '_JOMRES_HCATEGORY', 'Category' );
jr_define( '_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show business features separated into categories?' );
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
jr_define( '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Most properties in Jomres have a rental management process. Hotels/B&Bs/Pensions rent out individual rooms, and cottages/villas/apartments rent out the entire property. This is invisible to the property manager, but for them to be able to create tariffs for their property you must first add room types that are appropriate for the property type.

For example, A hotel property type would normally need several room types ( double rooms, single rooms and twins ) whereas a villa can only have one room type, e.g. 2 Bedrooms, 5 bedrooms.

It is possible to create room types for properties like Tours. This allows customers to search for properties like tours only, but the Property manager will not create tariffs for this property type, so the Management Process is not relevant to them.
');

jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES", "What management process will this room type be for?" );
jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC", "Is the room type for a hotel type property, or a villa type property?" );
jr_define( '_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types' );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES", "Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs." );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES", "Use the New button above to create new Room Types." );


jr_define( "_JOMRES_PROPERTYTYPE_FLAG_TOURS", "Tours" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_REALESTATE", "No bookings/Real estate ( simple listing )" );


jr_define( "_JOMRES_CONFIG_LOG_LOCATION", "Log file location" );
jr_define( "_JOMRES_CONFIG_LOG_LOCATION_DESC", "Jomres logs system activity by default to the /jomres/temp/monolog location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_WARNING", "Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the /jomres/temp/monolog directory, which is not secure. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED", "If your CMS is installed in the root directory of your website, then a suitable location would be " );

jr_define( "_JOMRES_CONFIG_GMAP_KEY_WARNING", "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres." );
