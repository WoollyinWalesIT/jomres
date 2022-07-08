<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'הזמנה מהירה');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'הצג פרופילים');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'תצורה כללית');
jr_define('_JOMRES_COM_MR_BACK', 'חזרה');
jr_define('_JOMRES_COM_MR_YES', 'כן');
jr_define('_JOMRES_COM_MR_NO', 'לא');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'חדש');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'נכס חדש');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'אורח חדש');
jr_define('_JOMRES_COM_MR_SAVE', 'שמור');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'שם');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'הגעה');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'עזיבה');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'שם משתמש');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'רמת גישה');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'משתמש עודכן');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'כל ההזמנות');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'ערוך הזמנות');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'הגעה/עזיבה');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'אורח');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'חדר');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'תשלום');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'שם פרטי');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'שם משפחה');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'דרישות מיוחדות');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'אנא שים לב, חלק מדרישות מיוחדות יכולות להביא לחיובים נוספים.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'בטל הזמנה');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'מספר בית או שם');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'רחוב');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'עיר');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'מיקוד');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'טלפון קווי');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'טלפון נייד');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'דואר אלקטרני');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'אי אפשר לבטל הזמנה, כי אורח כבר בחדר');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'הפקדה לא שולמה');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'אשר את הביטול');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'ביטול הזמנה');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'ימים להגעה');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'סוג הזמנה');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'שחור');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'קבלה');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'אינטרנט');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'שם חדר');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'חדר');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'קומה');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'יש גישה לנכים?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'מספר אנשים מקסימלי');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'סוג חדר');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'תאור סוג חדר');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'רשימת מאפייני החדר');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'הפקדה שולמה');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'הכנס הפקדה');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'סה"כ לתשלום');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'סימוכין הפקדה');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'הזמנת מקום');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'הפקדה');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'הפקדה נשמרה');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'אין חדרים פנויים');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'נכס');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'סוג חדר');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'ערוך פרטי אורח');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'שם פרטי');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'שם משפחה');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'בית');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'רחוב');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'עיר');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'מיקוד');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'טלפון קווי');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'טלפון נייד');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'פקס');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'תבחר את בחירתך');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'ימי שהייה');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'סה"כ');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'הצג תצורת חדרים ונכס');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'חדרים');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'מאפייני החדר');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'סוגי חדרים');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'נכס');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'מאפייני הנכס');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'חדר');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'סוג');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'שם');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'מספר');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'קומה');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'מקסימום אנשים');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'מאפיינים');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'ערוך פריט');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'מאפייני החדר');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'תאור מאפיין');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'מאפיין החדר נוסף בהצלחה');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'מאפיין החדר עודכן');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'סוג חדר');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'קיצור סוג החדר');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'תאור סוג החדר');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'סוג חדר נוסף בהצלחה');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'ערוך פריט');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'שם');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'רחוב');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'עיר');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'מחוז');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'מדינה');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'מיקוד');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'טלפון');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'פקס');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'אימייל');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'אתר');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'מאפיינים');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'נכס עודכן');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'מאפייני הנכס');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'קיצור מאפייני הנכס');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'תאור מלא של מאפייני הנכס');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'מאפיין נכס עודכן');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'תעריפים');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'כותרת התעריף');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'תאור');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'טופס תקף');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'תקף ל');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'תעריף ללילה');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'מינימום ימים');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'מקסימום ימים');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'מינימום אנשים');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'מקסימום אנשים');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'סוג חדר');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'התעלם ממחיר לילה לבן אדם');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'לאפשר סופי שבוע');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'ערוך פריט');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'שכפל פריט');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'תעריף נמחק');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'ערוך תעריף');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'הזמנה נשמרה');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'רשום הזמנת אורח');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'מחק הזמנת אורח');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'הצג הזמנות');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'לוח בקרה');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'ניהול אורח');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'ניהול נכס');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'בדוק זמינות');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'שם פרטי');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'שם משפחה');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'מספר בית');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'רחוב');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'עיר');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'מיקוד');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'טלפון קווי');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'טלפון נייד');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'לא נמצאו חדרים לפי דרישות שלך');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Tתודה שהזמנת אצלנו. מקווים שתהנה משהייתך<br><br> <b>אנא שים לב , זוהי רק קדם הזמנה. ההזמנה תאושר עם קבלת דואל על ידך ואישורו </center>');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'רשום אורח ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'אורח נרשם בהצלחה');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'הוצא אורח מהחדר');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'תוספות');
jr_define('_JOMRES_COM_A_TARIFFS', 'תעריפים וסוגי מטבע');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'ההעלאת קבצים');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'תוספת לבן אדם יחיד');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'אנא וודא שזה נקבע ל-כן, אם אתא רוצה לשנות את מחיר תוספת ליחיד');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'חיוב תוספת ליחיד');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'ההפקדה מחושבת באחוזים?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'האם ההפקדה נדרשת להיות אחוז מעסקה כוללת? אם לא אז הפקדה תרשם כסכום קבוע');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'ערך הפקדה הנדרשת');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'לבן אדם, ללילה');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'סמן כן אם ברצונך לחייב על בסיס בן אדם-ללילה, אם לא המחיר יחושב על בסיס  חדר-ללילה');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'גודל קוובץ');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'גודל תמונה מירבי בקילובייט');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'מוזמן');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'פרטי הזמנה');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'אנו מזכירים לך שהזמנה היא מסמך קושר חוקי, אם מסיבה כלשהיא ברצונך לבטל או לקצר את הזמנתך, אתה עדיין אחראי לשלם את הסכום המלא');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>דמי ביטול וקיצוץ</i> אם אתה מבטל את חופשתך, הביטול צריך להיות בכתב. דמי ביטול הן:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'תאריל הגעה ל-14 יום');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'הדפס מכתב אישור');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'הדפסת חשבונית');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'מספר מבוגרים: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'מחיר ללילה: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'סה"כ');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'הדפס חשבונית');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'הוסף שרות לחשבון');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'תאור השרות');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'ערך השרות');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'פריטים נוספים שחוייבו');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'פריטים שנוספו לחשבון');
jr_define('_JOMRES_UPLOAD_IMAGE', 'העלת תמונה');
jr_define('_JOMRES_FILE_UPLOAD', 'ההעלאת קובץ ');
jr_define('_JOMRES_COM_A_ODDS', 'שונות.');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'הצג רשימת קריאות למיני רכיבים');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'העבר ל-כן על מנת לראות רשימת קריאות למיני רכיבים בתחתית העמוד לאחר שגומרס סיים פעולתו.  
כמו כן זה מונע את תכונת השליחה מחדש הפנימית. זה שימושי אם הנך מנסה לזהות איזה מיני רכיבים מבצעים שירותים מסויימים.');
jr_define('_JOMRES_FILE_DELETE', 'מחק תמונה זאת');
jr_define('_JOMRES_FILE_DELETED', 'קובץ נמחק');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'מחק');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'אין אפשרות למחוק את החדר, כי ישנה הזמנה לחדר. מחק את ההזמנה ונסה שנית');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'חדר נמחק');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'מחק מאפיין החדר');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'אין אפשרות למחוק את המאפיין כי הוא מוקצב למספר חדרים. קודם תבטל את המאפיין בחדרים ואז תנסה למחוק');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'מאפיין חדר נמחק');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'מחק מאפיין הנכס');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'אין אפשרות למחוק את המאפיין כי הוא מוקצב למספר נכסים. קודם תבטל את המאפיין בנכסים ואז תנסה למחוק');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'מאפיין נכס נמחק');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'מחק סוג חדר');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'סוג חדר נמחק');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'nje nkui');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'נכס נמחק');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'אינך מורשה לבצע פעולה זאת');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'רוחב תמונה בגודל מלא');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'לחץ על המפה');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'תאור הנכס');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'זמני הגעות');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'פעילות באיזור');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'הנחיות לנהגים');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'שדות תעופה');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'תחבורה נוספת');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'תקנונים וכתבי מדיניות');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'כתובת');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'מבקרים יכולים להזמין מהאתר');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'הגדר את זה ככן, כדי לאפשר הזמנות מהאתר');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'ההזמנות הן לתקופה קבועה');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'אם תגדיר את זה ככן, כל ההזמנות ירשמו לתקופה קבועה. אם תגדיר את זה כלא, אנא וודא ש"תאריך הגעה מוגדר" לא מוגדר ככן (אלא אם כן הינך דוחף תאריך מסויים)');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'תקופת הזמנה: ');
jr_define('_JOMRES_COM_A_BOOKING', 'הזמנת חדרים');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'תקופה מקסימלית, לדוגמא: 3 * 7 תקופות הזמנה = 21 יום');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'האם זאת דירה/קוטג/ווילה?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'עיין בהזמנה');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'אשר הזמנה ');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'שני');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'שלישי');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'רביעי');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'חמישי');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'שישי');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'שבת');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'ראשון');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'ב');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'ג');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'ד');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'ה');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'ו');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'ש');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'א');
jr_define('_JOMRES_COM_A_AVLCAL', 'זמינות');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'צבע גופן לתאריך נוכחי');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'צבע גופן לימים בתצוגת חודש ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'צבע גופן לימים מחוץ לתצוגת החודש');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'צבע רקע של תא ימים כש החדר/נכס זמינים');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'צבע רקע תא לימים בתצוגת חודש');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'צבע רקע תא לימים שהחדר מאוכלס');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'צבע רקע תא לחדר בהזמנה חלקית ( הזמנה שההפקדה שלה עדייו לא שולמה');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'צבע רקע תא של ימים בעבר');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'מאוכלס/לא זמין');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'פנוי להזמנות');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'הזמנות חלקיות');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'תאריך הגעה מוגדר מראש');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'רק לאתרים שמציעים הזמנות לתקופות קבועות. בחר את התאריך תחילת ההגעה');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', ',תאריך הגעה קבוע');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'תקופת שהייה (ימים)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'להציג לוח שנה של זמינות?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'הגדר את זה ככן כדי להציג את לוח שנה של זמינות');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'זמינות');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'לחץ על תאריך פנוי, כדי להציג טופס הזמנה');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'הזמנות שחורות');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'הזמנות שחורות חדשות');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'מחק אורח');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'אורח נמחק');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'אין אפשרות למחוק אורח זה, כי ישנם הזמנות על שמו. בטל את ההזמנות ונסה שנית');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'כלשהו');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'מראה של לוח שנה');
jr_define('_JOMRES_COM_CALENDARINPUT', 'מראה של לוח שנה');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'זה מאפשר למשתמשים לשנות את תצורת תאריכים בלוח שנה של Jomres');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'הזמנות בתקופה קבועה מאפשרות הפסקות קצרות');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'משך זמן של ההפקה');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'פורסם');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'מעקב חשבונות');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'תאריך');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'שם משתמש');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'סנן לפי תאריך');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'סטטוס');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'מחכה להגעה');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'מגיע היום');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'שוכן כרגע');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'עוזב היום');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'כבר עזב');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'טרם הגיע');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'חדר נוצר');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'חדר עודכן');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'חדר נמחק');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'מאפיין חדר נוצר');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'מאפיין חדר עודכן');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'מאפיין חדר נמחק');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'נכס נוצר');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'נכס עודכן');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'נכס נמחק');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'הגדרות נכס ערוכות');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'נכס פורסם');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'תעריף נוצר');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'תעריף עודכן');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'חיוב שרות נוצר');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'אורח שהזמין');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'הפקדה הוכנסה');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'אורח נוצר');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'אורח עודכן');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'הזמין חדר');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'יצר תוספת');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'עידכן תוספת');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'מחק תוספת');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'תוספת פורסמה');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'הוכנס לספר שחור');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'נמחק מספר שחור');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'תוספות');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'תאור');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'שם');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'מחיר');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'תוספת עודכנה');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'ערוך פריט');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'תוספת נמחקה');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'ניהול תוספות');
jr_define('_JOMRES_COM_A_EXTRAS', 'הצג תוספות בזמן ביצוע הזמנה?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'הגדר את זה ככן כדי להציג תוספות שברצונך להציע לאורח');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'תוספות לבחירה');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'תחילת תאריך ספר שחור');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'תאריך סיום השרות');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'הזמנות בספר שחור');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'נוצרה שגיה בניסיון להזמין את החדרים. אחד או יותר חדרים שבחרת כבר הוזמן');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'חדרים נוספו לרשימה שחורה');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'אין רישומים ברשימה שחורה');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'מספר כוכבים');
jr_define('_JOMRES_COM_A_RESET', 'איפוס');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'הזמנה בוטלה');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'חפש את ה:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'סימן מטבע');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'קוד הסמל');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'הקלק למידע נוסף');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'להגביל הזמנות מראש?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'הגדר את זה ככן אם ברצונך להגביל  את המשתמש בהזמנות לעתיד של N ימים. אם הוא ינסה לחרוג, התוכנה תחזיר אותו לתאריך של היום');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'ימי הגבלה להזמנה מראש');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'מיסוי');
jr_define('_JOMRES_COM_A_ROOMTAX', 'מיסוי חדר');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'מיסוי בסכום קבוע');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'מיסוי באחוזים');
jr_define('_JOMRES_COM_A_EUROTAX', 'Tax');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'אחוזי מס');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'העבר את הכל לארכיון');
jr_define('_JOMRES_FRONT_TARIFFS', 'תעריפים שלנו');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'שם תעריף');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'תאור תעריף');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'סוג חדר');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'טופס תקף');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'בתוקף עד ');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'לאדם ללילה');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'ללילה');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'ללא כולל סופי שבוע');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'מינימום ימים');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'מקסימום ימים');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'מינימום אנשים');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'מקסימום אנשים');
jr_define('_JOMRES_FRONT_PREVIEW', 'תצוגה מקדימה');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'לאפשר עריכה?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'טקסט אישי עודכן');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'עריכת שפה');
jr_define('_JOMRES_FRONT_PTYPE', 'סוג נכס');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'הצג סוגי נכס');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'ערוך סוג נכס');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'סוג נכס');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'תאור סוג נכס');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'סוג נכס נשמר');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'סוג נכס נמחק');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'תזכורת לתשלום');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'אין שרותים נוספים לחיוב');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'הפקדה');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'סכום מלא');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'סכום שחויב בזמן ביצוע הנמנה');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'התשמש באופציה זאת, אם החלטת לחייב את החשבון בזמן ביצוע הזמנה. בחר אם ברצונך לחייב סכום חלקי או מלא');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'חודשים להצגה');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'כמה חודשים ברצונך להציג בלוח זמינות החדר?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'מעברים');
jr_define('_JOMRES_COM_A_CANCEL', 'ביטול');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'אנא בחר חדר שברצונך להוציא מהשימוש ותאריכים השורים<br>אם החדר לא מסומן, הוא לא יכלל ברשימת חדרים להזמנה, עד שתאריכים לא יפוגו<br>כשבחרת תאריכים מתאימים לחץ על הכפתר אישור הכחול כדילשנות את מצב החדר');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>נראה שהתנתקת מהמערכת, אנא התחסר שנית');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'סיבה');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'השתמש בשערי תשלום?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'אנא בחר צורת תשלום');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'לאפשרי שערי תשלום');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'הגדרות פלגין מעודכנות');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'הגדרות פלגים משובצות');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'External link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Put a link to your website here.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'ערוך כרטיס אשראי');
jr_define('_JOMRES_COM_A_EDITICON', 'ערוך גודל אייקון');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'מצגת');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'הצג קישור למצגת?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'הראה מצגת בדף?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'מצגת תמונות');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'הצג קישור לתעריפים');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'לאפשר חלונות קופצים?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'עלאת תמונות למצגת');
jr_define('_JOMRES_A_TABS_MISC', 'שונות');
jr_define('_JOMRES_A', 'תצורת האתר');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'השתמשמ במאפיינים גלובליים');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'אייקון');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'בחר פלגין חיפוש שברצונך להשתמש');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>מצטערים, החיפוש לא החזיר תוצאות, אנא נסה שנית</b>');
jr_define('_JOMRES_AREYOUSURE', 'אתה בטוח רוצה לעשות את זה?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'הזמן חדר');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'הזמן את הנכס');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'הצג תעריפים בשורה?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'כתובת');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'מידע מפורט');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'לחץ לבדיקת זמינות חדרים');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'הצג כתובת מתחת לקישור זה');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'הצג מידע אודות נכס מתחת לקישור זה');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'הצג חדרים וזמינות מתחת לקישור זה');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'תעריפים קבועים');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'ממוצע');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'בחר סוג תעריף שברצונך להשתמש בו');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'באפשרותך לבחור אחד משני צורת חישוב. ראשון היא - תעריף קבוע, המאפשרת להציע מספר תעריפים לאורח ועלות השהייה זהה כל הזמן. זה שימושי אם ברצונך להציע  תעריפים שונים לאותו יום. לדוגמא תעריף BB ותעריף HB. בחר ב"ממוצע" כדי לעדכן מחירים לאותו יום. ותוכנה תיקח את כל התעריפים ותחשב את הממוצע לתקופה מסוימת');
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'הצג קלט תאריל עזיבה');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'ההגדר כ-לא אם אתה לא אינך מעוניין להציג תאריך עזיבה כתיבת קלט. התמש בזה אך ורק אם אתה יודע מה לעשות, כי תאריך עזיבה תמיד יהיה יום לאחר ההגעה ');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'הגבלת תאור');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'זה מגביל את כמות התווים המוצגים בדף כש תאור הנכס מוצג.');
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'לשנות צורת תאריך משומש?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'לחץ כדי לפרסם באתר');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'לחץ כדי להוריד מהאתר');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'השתמש בסוג חדר גלובלי');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'כדי להקצות תמונה לסוג חדר זה, קודם צריך לעלות התמונות של סג חדר ל-/images/stories/jomres/rmtypes/ ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'הכנס צבע רקע לשגיה');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'מדינה ברירת מחדל בטופס הזמנה');
jr_define('_JOMRES_JAVASCRIPT_', 'פריטים מסומנים באדום הינם פריטי חובה');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'משתמשים יכולים להוסיף נכסים?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'הגדר כ-כן אם ברצונך לאפשר להוסיף נכסים משלהם בלי אישור מנהל אתר');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'פריטים מסומנים באדום הינם פריטי חובה');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'נכס נוצר');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'הצג לוח שנה מתחילת השנה?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'לוח זמינות מוצג מתחילת השנה הנוכחית');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'מספר חדרים פנויים');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'חזרה לפרטי הנכס');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'סוגי חדרים');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'גבול חיפוש רנדומלי');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'הצג קישור לגוגל-מטבעות בדף תעריפים?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'להמיר ל-');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'לאשר למשתמשים לעבוד עם עורך HTML');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'השתמש בטופס זה, כדי לרשום את הזמנתך. העבר סמן מעל "I" למידע נוסף אודות העמודה. עדכן את הזמנתך, שנה זמני הגעה או עזיבה ומספר אורחים. לאחר מכן - בחר חדר מרשימת חדרים פנויים, והזמן. לבסוף תדרש להכניס מידע אישי על עצמך, כדי לקבל את ההזמנה באימייל ולאשרה');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'השתמש בטופס זה, כדי לרשום את הזמנתך. העבר סמן מעל "I" למידע נופס אודות העמודה. עדכן את הזמנתך, שנה זמני הגעה או עזיבה ומספר אוחים. לאחר מכן - בחר חדר מרשימת חדרים פנויים, והזמן. לבסוף תדרש להכניס מידע אישי על צמך, כדי לקבל את ההזנהבאימייל ולאשרץ');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'פירוט הזמנה');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'בחר פרטים נדרשים להזמנתך');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'זמינות ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'בחר את החדרים שאתה רוצה');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'בדוק פו, כדי לראות עם הנכס פנוי כרגע להזמנות');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'תוספות לבחירה');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'בחר כל תוספת שברצונך לכלול בהזמנה');
jr_define('_JOMRES_COM_PERDAY', 'ללילה');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'כתובתך');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'אנא הכנס את פרטיך. כל השדות חובה חוץ ממספר טלפון נייד');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'חדרים פנויים');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'בחר חדרים');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>תאריך הגעה הכי מוקדם הוא: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'ללילה:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'סה"כ:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'תוספות:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'מיסוי:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'הנחה:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'סה"כ כללי');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'אורחים');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'הקלק כעת כדי להוסיף את החדר לבחירה');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'הקלק כעת כדי להסיר את החדר לבחירה');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'סוגי אורחים');
jr_define('_JOMRES_VARIANCES_TYPE', 'סוג');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'סוג האורח כגון: תינוק, ילד או סטודנט');
jr_define('_JOMRES_VARIANCES_NOTES', 'הערות');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'הערות שברצונך להוסיף לסוג אורח זה');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'מקסימום');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'המספר המירבי של סוג אורח זה שיכול להופיע בטופס הזמנה');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'הוא אחוז');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'המספר המחושב הוא אחוז ממחיר בסיסי של החדר, אם מוגדר כלא -  המספר שתכניס פשוט  יחובר או יחוסר ממחיר הבסיסי');
jr_define('_JOMRES_VARIANCES_POSNEG', 'להוסיף משתנה?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'המספר המחושב מחובר או יחוסר ממחיר הבסיסי של החדר הגדר כלא אם ברצונך שהנחה הזאת תהיה מספר קבוע ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'משתנה');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'זהו גודל המשתנה');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'עודכן סדר סוגי האורח');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'נמחק סוג אורחים');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'נוצר סוג אורחים');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'עודכן סוג אורחים');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'עודכן סוג אורחים');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'הצג קישור לרשימת חדרים בדף פרטי הנכס?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'הצג <b>רק</b> לוח זמינות/רשימת חדרים?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'הגדר את זה ככן אם ברצונך להציג דף של הנכס בצורה כזאת, שחדרי הנכס יופיעו באותו דף. זה באמת מיועד לנכסים בעלי חדר אחד. כגון בעלי דירות ויחידות נופש');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'המרווח המינימלי בין הגעה לעזיבה');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'מרווח מנימלי בהזמנות בין יום ההגעה ליום העזיבה');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'הצג מספר חדר בטופס הזמנה');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'הצג שמות חדר בטופס הזמנה');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'הצג כותרת תעריף בטופס הזמנה');
jr_define('_JOMRES_ORDER', 'סדר');
jr_define('_JOMRES_REQUIREDFIELDS', 'נדרש');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'ימים לפני הגעה');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'מספר מינימלי של ימים שאמורים לחלוף מיום לפני תאריך הגעה');
jr_define('_JOMRES_DTV', 'ווריאציות סוגי תאריך');
jr_define('_JOMRES_DTV_DOW', 'יום השבוע');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'ברירת מחדל לסוג אורח');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'מספר ברירת מחדל לסוג אורח ראשון. אם הינך משתמש בסוגי אורחים, זהו יהיה מספר אורחים שיופיע אוטומטית בהזמנה');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'הזמנות פתוחות רק למשתמשים רשומים?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'מצטעריםת עלך להיות משתמש מורשה, כדי לבצע הזמנות באתר. לחץ כאן כדי להרשם ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'צבע הקישור להזמנות נוכחיות');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'גבולות של סופי שבוע');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'חדר מוזמן');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'הזמנות ספר שחור');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'לעגל סכום הפקדה למספר שלם?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'לחייב הפקדות?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'לשמור חיובי תעריפים כמספרים שבועיים');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'יש לך לשמור חיובים כמספרים שבועיים או כמספרים יומיים. אם תרצה לראות תוצאות שבועייות - הגדר את זה כ-כן');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'מחיר לשבוע');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'תאריכי הגעה קבועים?');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'אם בחרת לאופציה של תאריכי הגעה קבועים, תאריכם יוצגו בתיבת בחירה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'תאריך הגעה לא תיקני');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'תאריך עזיבה לא תיקני');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'ההזמנה יותר מדי קצרה, בין ההגעה לעזיבה אמורים להיות לפחות מספר זה של ימים: ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'תאריך הגעתך הוא');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'בחירת סוג אורח שגויה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'אנא בחר את סוג האורח');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'יש לך יותר מדי משתתפים לתעריף הזמין');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'בחרת יותר חדרים מאשר מספר האורחים, לחץ על מספר החדר כדי להוריד אותו מהרשימה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'יותר מדי אורחים למיטות הפנויות');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'אתה צריך לבחור יותר חדרים');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'בחר חדר');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'שם פרטי הינו שדה חובה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'שם משפחה הינו שדה חובה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'מספר בית הינו שדה חובה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'רחוב הינו שדה חובה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'עיר הינו שדה חובה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'איזור הינו שדה חובה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'מיקוד הינו שדה חובה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'מדינה הינו שדה חובה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'טלפון הינו שדה חובה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'טלפון נייד הינו שדה חובה');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'אימייל הינו שדה חובה');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'יש חדרים פנויים!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'לא נבחר אף חדר');
jr_define('_JOMRES_BOOKING_NUMBER', 'מספר הזמנה');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'אפשר להזמין, רקע הודעת טקסט');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'לרוקן משתנים בטמפלייטים');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'הגדר כן, כדי לאפשר את ה-DHTML לשפוך משתנים לכל גגג טמפלייטץ שימושי אם ברצונך אלמנטים מסויימים שיופיעו בטמפלייטים מסוימים');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'מספר באחוזים');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'הגדר ככן אם חישוב ליחיד מבוצע באחוזים, הגדר כ-לא אם זה יהיה מספר קבוע');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'הגבלת זמינות חדרים/תעריפים');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'השתמש בקלט זה כדי להגביל את מספרים חדרים הפנויים ותעריפים שרשומים בטופס הזמנה. הגדר כ-0 אם אינך מעוניין בהגבלה ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'כרגע אין חדרים פנויים');
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'הזמן עכשיו: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'מצב עריכה גלובלי?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'טפל בפונקציה הזאת. אם תגדיר כן, אז השינויים שתבצע ישפיעו על כל הנכסים/חדרים במערכת');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'השתמש במטבע גלובלי?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'אם מוגדר כן, כל הנכסים ישתמשו באותה מטבע');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'סימן מטבע גלובלי');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'להסתיר את המרכיב?');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'אם מוגדר כן, הראש של המודל לא תוצג בדף');
jr_define('_JOMRES_COM_WEEKENDONLY', 'ימי שבוע בלבד');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'ימי סופשבוע');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'בחר את ימי סופהשבוע שלך. תעריפים המאפשרים, או שאינם מאפשרים, סופי שבוע יקחו זאת בחשבון בזמן יצירת רשימות החדרים');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'בחר את המדינה שלך לפני הוספת נתוני הנכס');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'שמור את השינויים בפרטי הנכס לפני ההעלאת תמונות');
jr_define('_JOMRES_TARIFFSFROM', 'מחירים מ - ');
jr_define('_JOMRES_SEARCH_ALL', 'הכל');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'חפש לפי מדינה');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'חפש לפי אזור');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'חפש לפי מקום ישוב');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'חפוש תכונות.');
jr_define('_JOMRES_SEARCH_BUTTON', 'חפש');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'הזן מילת חיפוש בקופסה ולחץ על הכפתור');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'מלה (מלות) חיפוש :');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'הזן בבקשה את מועדי ההגעה והעזיבה המתוכננים שלך ולחץ על הכפתור על מנת לאתר נכסים זמינים בתאריכים הנבחרים');
jr_define('_JOMRES_SEARCH_PTYPES', 'הצג את רשימת כל הנכסים ממוינים לפי סוג נכס');
jr_define('_JOMRES_SEARCH_RTYPES', 'הצג את רשימת כל הנכסים ממוינים לפי סוג חדר');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'ברירת מחדל');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'שם נכס');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'אזור שבו נמצא הנכס');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'מקום ישוב שבו נמצא הנכס');
jr_define('_JOMRES_SORTORDER_STARS', 'התחל');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'פרטי נכס');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'טופס הזמנה');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'עדכן את פרטי הכתובת שלך');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'בודק מחדש את זמינות החדרים (בחירת החדרים תאופס)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'בודק מחדש זמינות');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'משנה את התוספות האופציונליות');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'משנה את בחירת החדרים');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'מעדכן את פרטי הכתובת');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'מצטער, שדה כתובת אחד או יותר אינם נכונים');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'תמונת חדר');
jr_define('_JOMRES_CURRENCYFORMAT', 'מבנה מטבע');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'אפשרויות חיפוש');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'יומני זמינות');
jr_define('JOMRES_COM_A_MESSAGE', 'הודעה');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'רגיל');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'מתקדם');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'ניהול מיקרו');
jr_define('JOMRES_COM_A_TARIFFMODE', 'מצב הגדרת מבנה תעריף');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>אזהרה: מעבר בין סוגי תעריפים שונים עלול להביא לאיבוד נתונים. ראה את ההערה להלן בהקשר זה</b>.
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
ניהול פרטני למצב רגיל: כל ההצלבות הקיימות והתעריפים עצמם נמחקים<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'הראה רשימת חדרים בדף פרטי הנכס?');
jr_define('JOMRES_PROPERTYTYPE', 'סוג נכס');
jr_define('JOMRES_MAXPEOPLEINROOM', 'מספר אנשים מקסימלי לחדר');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'מס אנשים מקסימלי להזמנה');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'הוסף הערה');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'ערוך הערה');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'בטל הערה');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'צפה בהערות');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'נוספה הערה חדשה');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'הערה אחרי עריכה');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'הערה מבוטלת');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'הצג רשימת הזמנות');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'ההזמנות שלי');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'הצג הזמנה');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'הצג מועדפים');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'לא הוספת עדיין לרשימת המועדפים!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'סוג נכס');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'מחיר חכם');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'פעיל');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'רכיב זה מאפשר לך לנהל ולהגדיר את מחירי החדרים בצורה דינמית');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'רוב העסקים יחשבו מחדש את מחירי החדרים בהתבסס על מספר החדרים מסוג נדרש שהם זמינים ביום נתון. דבר זה מאפשר להם להציע הנחות על סוג חדר שאינו תפוס בתקופה נתונה 
במטרה למשוך עסקאות שאחרת יוחמצו
אפשור והגדרת רכיב זה מאפשר לך להציע מחיר מתואם המבוסס על מספר החדרים מסוג נבחר הזמינים בנכס בתאריך מסויים.
ערך הסף של הימים מגדיר את מספר הימים עד ליום ההגעה לפני שהמחירים מתואמים על ידי תכונה זו,
ואז אופציית האחוזים מאפשרת להגדיר את אחוז החדרים שיכולים להיות זמינים לפני שהנחה מסוימת נתנת.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'מרווח ( מספר הימים מיום ההגעה להיום)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'אחוז תפוסה  10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'אחוז תפוסה 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'אחוז תפוסה 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'אחוז תפוסה75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'הנחה %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' אחרי הנחה מ - ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' אל ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' מחיר החדר ללא הנחה ');
jr_define('JOMRES_COM_A_MAPSKEY', 'מפתח למפת גוגל');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'פקודת GET יכולה לקבל ממשק למפת גוגל מהאתר<a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. לאחר שהכנסת את מפתח המפה שלך במקום זה, גומרס יראה את המפה בדף פרטי הנכס שלך');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'רגע אחרון');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'פעיל?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'בחר כן אם ברצונך להציע עסקאות רגע אחרון');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'מרווח');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'אם מתבצעת הזמנה ויום ההגעה הו רק X ימים מיום ההזמנה, אפשר לתת את ההנחה');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'הנחה');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'באחוזים');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'הנחה נתנה בהזמנה זו!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'מחיר השהייה הופחת ב ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'נכס זה מציע הנחת רגע אחרון של ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' אחוזים אם תתבצע הזמנה להגעה לפני');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', ' אחוזים או יותר אם תתבצע הזמנה להגעה לפני ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. הזמן כעת על מנת להפיק את המקסימום מעסקה זו');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'מידע תעריף מילולי');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'בחר כן על מנת להציג מידע עריפי מפורט בחלון קופץ פרטי הנכס/ תעריף');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'צמצם אפשרויות תצורה');
jr_define('_JOMCOMP_AMEND', 'הזמנה - בחירת נכס');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'בחר נכס חדש');
jr_define('_JOMCOMP_AMEND_HEADER', 'חוזה מקורי');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'מקדמה שולמה');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'מקדמה לא שולמה');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'הכתב סכום כללי');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'הכתב אחוז הנחה');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'בטל');
jr_define('_JRPORTAL_CPANEL', 'פנל בקרה פורטל הזמנות');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'דמי ניהול בסיסיים');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'בחר את שיעור דמי הניהול הבסיסיים שיושמו לנכס במקרה ושיעור אחר לא נקבע במפורש');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'הצג רשימת תעריפי ניהול');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'תעריפי ניהול');
jr_define('_JRPORTAL_CRATE_TITLE', 'כותרת');
jr_define('_JRPORTAL_CRATE_TYPE', 'סוג');
jr_define('_JRPORTAL_CRATE_VALUE', 'שעור דמי ניהול');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'קוד מטבע');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'הצג  נכסים');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'שם נכס');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'כתובת נכס');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'לנכסים שצבע הרקע שלהם אדום עדיין לא נקבע שיעור דמי ניהול');
jr_define('_JRPORTAL_STATS_PATETITLE', 'סטטיסטיקות');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'שיעור דמי ניהול');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'הצג הזמנות');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'זיהוי נכס');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'זיהוי חשבונית');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'סך כל הזמנה');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'תאריך שמירה בארכיון');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'תאור');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'סך הכל אירוח');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'לילה - לילות ב');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'לכל חדר ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'שדרג את סך כל השהייה שלך ');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'סיכום מחירים');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'בבקשה קרא והסכם ל- ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'סכום ההזמנה שלך מוצג להלן<br /> על מנת לעשות שינוי כלשהוא, בבקשה לחץ על כפתור שינוי הזמנה');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'אם יש צורך בשינוי המידע שלמעלה בבקשה לחץ כאן');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'עדכן הזמנה');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'בבקשה ציין בקשות מיוחדות בחלון שלמטה');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'אני מאשר שהמידע למעלה הוא נכון ןמסכים ל-');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'לאדם ללילה');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'שֶׁל');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'הַתחָלָה');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'קודם');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'הַבָּא');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'סוֹף');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'תוצאות');
}
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'שים לב שזו אינה טופס הזמנה, במקום זאת אתה שולח דוא"ל. <br/> אנא הזן את ההודעה שאליה תרצה לשלוח');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'צור קשר עם מלון');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'חקירת נכס מאת');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'תודה על פנייתך, הודעתך נשלחה לכתובת הדוא"ל ליצירת קשר של הנכס והועתקה לכתובת שלך לרישומים שלך. הם יגיבו לך בהקדם האפשרי עם תשובתם. . ');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', 'בנוגע');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'חקירה');
jr_define ('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'אנא בחר את מקום האירוח הדרוש שלך מהרשימה מימין');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'כמה חדרים כבר נבחרו');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'מספר מינימום של חדרים שכבר נבחרו בהזמנה לפני שניתן להציע שילוב תעריפים/סוג חדרים. מאפשר לך לקבל תעריפים מוזלים כאשר כבר נבחרו יותר מחדרים N');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'מקסימום חדרים שכבר נבחרו');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'מספר החדרים המרבי שנבחר כבר בהזמנה לפני שילוב תעריפים/חדרים אינו מוצע עוד. מאפשר לך להפסיק להציע שילוב סוג/תעריף זה לאחר בחירת N חדרים בטופס ההזמנה.');
jr_define ('_JOMRES_COM_SPS_EDITROOM_DESC', 'שים לב שתוספות לאדם יחיד שהוגדרו כאן לא ישמשו אם יחידי יחידים מוגדרים ל- Yes בתצורה הכללית. ההגדרות כאן מהוות חלופה לתעריפים אחידים של יחידות, לא תוספת לדירה שיעור SPS. ');
jr_define ('_JOMRES_AVLCAL_NOBOOKINGS', 'זמין');
jr_define ('_JOMRES_AVLCAL_QUARTER', 'כמה הזמנות');
jr_define ('_JOMRES_AVLCAL_HALF', 'חצי הזמנה');
jr_define ('_JOMRES_AVLCAL_THREEQUARTER', 'בעיקר מוזמן');
jr_define ('_JOMRES_AVLCAL_FULLYBOOKED', 'Full booked');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'לשבוע');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'ליום');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'לכל הזמנה');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'לאדם לכל הזמנה');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'לאדם ליום');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'לאדם לשבוע');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'לימים (דקות דקות)');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'לימים שנבחרו X חדרים');
jr_define ('_JOMRES_REGISTRYREBUILD', 'בנה מחדש את רישום רכיבי המיני ורכיב מחדש את המטמון');
jr_define ('_JOMRES_REGISTRYREBUILD_NOTES', "בדרך כלל רישום התוסף של Jomres נבנה מחדש באופן אוטומטי בכל פעם שאתה מציג את מנהל התוספים ומוסיף או מסיר תוסף, אולם יתכן שלא תוכל להשתמש בתכונות אלה מסיבה כלשהי, לכן תוכל להשתמש בפונקציה זו כדי לבנות מחדש את רישום באופן ידני. אם יש לך גישה לתכונה מנהל התוספים והשדרוגים, אין זה סביר שתצטרך להשתמש בפונקציה זו. יהיה עליך לבנות מחדש את רישום התוסף בכל פעם שתוסיף רכיב מיני חדש ולא השתמשת במנהל התוספים. להוסיף אותו. ");
jr_define ('_JOMRES_REGISTRYREBUILD_SUCCESS', 'הרישום נבנה מחדש בהצלחה');
jr_define ('_JOMRES_REGISTRYREBUILD_FAILURE', 'אירעה שגיאה בבנייה מחדש של רישום רכיבי המיני. עליך לבדוק ביומן השגיאות של Jomres אם יש תיעוד של מה שהפעיל את השגיאה.');
jr_define ('_JOMRES_SEARCH_PRICERANGES', 'מחיר');
jr_define ('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'עדיין לא ביצעת הזמנות!');
jr_define ('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'ערוך את סוג הנכס שלך');
jr_define ('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'בחר את סוג הנכס שלך');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'שאלתך ...');
jr_define ('_JOMRES_COM_A_LISTLIMIT', 'מגבלת רשימת נכסים');
jr_define ('_JOMRES_COM_A_LISTLIMIT_DESC', 'מספר הנכסים שיש להציג בדף לאחר חיפוש');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrated search feature');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible.');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'להפעיל תכונה זו?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'אם תכונה זו מופעלת, כל שיחה ל- Jomres שתציג את רשימת הנכסים פירושה שאפשרויות החיפוש יוצגו גם הן.');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'השתמש בעמודות');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'כל אפשרות חיפוש שהגדרת כסוג קישור (היכן שהיא רלוונטית) תוצג כעמודות (IE br שמה בסוף הקישור)');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'אזור חיפוש לפי נפתח שילוב נבחר');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "הציע רשימה נפתחת לחיפוש כדי לסנן בין מדינות/אזורים/עיירות. אם אתה מתכוון להשתמש בתכונה זו עדיף שלא תשתמש בחיפושים באזור/עיר למטה.");
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'חפש לפי שם הנכס');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'הצג את החיפוש לפי קלט של שם הנכס.');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Show as dropdown?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'הגדר את זה כ- no כדי להציג את הרשימה כקישורים');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'עיר/אזור');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'הצג את קלט האזור');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Show as dropdown?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'הגדר את זה כבלתי כדי להציג את הרשימה כקישורים');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'חפש לפי סוג נכס');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'הצג את החיפוש לפי קלט מסוג נכס');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'הגדר את זה לא כדי להציג את הרשימה כקישורים');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'חפש לפי סוג החדר');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'הצג את החיפוש לפי קלט מסוג חדר');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'הגדר את זה למצב לא כדי להציג את הרשימה כקישורים');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Features');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'הצג את החיפוש לפי קלט תכונה');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Show as dropdown?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'הגדר את זה כ \'לא \' כדי להציג את הרשימה כתמונות הסבר כלים ותיבות סימון ');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'חפש לפי תיאור');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'הצג את החיפוש לפי קלט תיאור');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'חפש לפי זמינות');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'הצג את החיפוש לפי קלט זמינות');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'חיפוש לפי טווחי מחירים');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'הצג את החיפוש לפי קלט טווחי מחירים');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'תוספות טווח מחירים');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres יסתכל על כל הערכים בתעריפים ואז יערוך שורה של טווחי מחירים המבוססים על ערך התוספות שהגדרת כאן.');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'כברירת מחדל, אם נכס לא נבחר ב- Jomres הוא יבצע חיפוש. אם חיפוש זה לא הופעל על ידי מודול חיפוש, חיפוש זה יניב תוצאות אקראיות (בכוונה). אפשרות זו מאפשרת לך הגבל את מספר ההחזרות בחיפוש אקראי זה. ');
jr_define ('_JOMRES_COM_A_CRON_TITLE', 'הגדרות עבודה ויומני Cron');
jr_define ('_JOMRES_COM_A_CRON_DESC', 'פרטי תפקיד בפסאודוקרון. הפונקציונליות של הפסאודוקרון נחוצה על ידי חשבונית וטיפול בעמלות.');
jr_define ('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'מותקני רכיבי cron מותקנים. כדי להריץ עבודת cron בודדת השתמש בקישורים המפורטים להלן. שים לב שעבודות ה- cron אינן מייצרות פלט כלשהו כך שלא תראה מידע בדף. במקום זאת, עיין בעבודה היכנס למטה. ');

jr_define ('_JOMRES_COM_A_CRON_METHOD', 'שיטה');
jr_define ('_JOMRES_COM_A_CRON_METHOD_DESC', 'אם אין לך גישה למשרות cron, הגדר את זה ל- Minicomponent, אחרת צור עבודת cron ותגיד לה לרוץ <br /> <i> curl -s' .JOMRES_SITEPAGE_URL_AJAX. '&task='. get_showtime (' tmplcomponent ').'&no_html=1>/dev/null </i> ');
jr_define ('_JOMRES_COM_A_CRON_LOGGING', 'כניסה לתצוגה בדפדפן');
jr_define ('_JOMRES_COM_A_CRON_LOGGING_DESC', 'עובד רק אם השיטה מוגדרת ל- Minicomponent.');
jr_define ('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'רישום מופעל');
jr_define ('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'הגדר את זה ל- Yes כדי שהיומן יופעל. תוצאות יומני הפלט יוצאו בהמשך.');
jr_define ('_JOMRES_COM_A_CRON_VERBOSELOGS', 'רישום מקיף');
jr_define ('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'הרבה פלט רישום');
jr_define ('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'עריכת תבניות');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'שדות מותאמים אישית');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DESC', 'כאן תוכל להגדיר שדות מותאמים אישית פשוטים שיוצגו בטופס ההזמנה.');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'שם שדה (ללא רווחים)');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'ערך ברירת מחדל');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'תיאור');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'חובה');
jr_define ('_JOMRES_COM_MR_EXTRA_QUANTITY', 'כמות מרבית');
jr_define ('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'אם הכמות המקסימלית מוגדרת כגדולה מ -1, יוצע לאורחים תפריט נפתח לבחירת כמות התוספות שהם דורשים.');
jr_define ('_JRPORTAL_TAXRATES_TITLE', 'שיעורי מס');
jr_define ('_JRPORTAL_TAXRATES_CODE', 'קוד מס');
jr_define ('_JRPORTAL_TAXRATES_DESCRIPTION', 'תיאור תעריפים');
jr_define ('_JRPORTAL_TAXRATES_CANNOTDELETE', 'לא ניתן למחוק את שיעור המס הזה.');
jr_define ('_JRPORTAL_TAXRATES_RATE', 'Rate');
jr_define ('_JRPORTAL_INVOICES_TITLE', 'חשבוניות');
jr_define ('_JRPORTAL_INVOICES_STATUS_UNPAID', 'ללא תשלום');
jr_define ('_JRPORTAL_INVOICES_STATUS_PAID', 'בתשלום');
jr_define ('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'בוטל');
jr_define ('_JRPORTAL_INVOICES_STATUS_PENDING', 'בהמתנה');
jr_define ('_JRPORTAL_INVOICES_USER', 'משתמש');
jr_define ('_JRPORTAL_INVOICES_STATUS', 'סטטוס');
jr_define ('_JRPORTAL_INVOICES_RAISED', 'Raised');
jr_define ('_JRPORTAL_INVOICES_DUE', 'Due');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION', 'מינויים');
jr_define ('_JRPORTAL_INVOICES_INITTOTAL', 'סך הכל יוצא מן הכלל');
jr_define ('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'תדירות חוזרת');
jr_define ('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'יום חוזר בחודש');
jr_define ('_JRPORTAL_INVOICES_CURRENCYCODE', 'קוד מטבע');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS', 'פריטי שורה');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'שם');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'תיאור');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'מחיר התחלתי');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'כמות ראשונית');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'הנחה ראשונית');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'סה"כ ראשוני');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'קוד מס');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'תיאור מס');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'שיעור מס');
jr_define ('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'לדרוס הגדרות סטנדרטיות של שער Jomres?');
jr_define ('_JRPORTAL_INVOICES_SHOWINVOICES', 'הצג את החשבוניות שלי');
jr_define ('_JRPORTAL_COUPONS_TITLE', 'קופוני הנחה');
jr_define ('_JRPORTAL_COUPONS_DESC', 'ניתן להפיק קודי הנחה ולהעביר אותם לאורחים כתמריץ לביצוע הזמנות. תקף החל מתאריכים ומתאריכים מתייחס לתאריכים בהם ניתן לבצע הזמנה, ולא את תאריכי ההזמנה עצמה.') ;
jr_define ('_JRPORTAL_COUPONS_CODE', 'קוד קופון');
jr_define ('_JRPORTAL_COUPONS_VALIDFROM', 'תקף מ');
jr_define ('_JRPORTAL_COUPONS_VALIDTO', 'תקף ל-');
jr_define ('_JRPORTAL_COUPONS_AMOUNT', 'סכום הנחה');
jr_define ('_JRPORTAL_COUPONS_ISPERCENTAGE', 'הנחה היא אחוז');
jr_define ('_JRPORTAL_COUPONS_ROOMONLY', 'חדר בלבד');
jr_define ('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'אם יש לך קוד קופון, אנא הזן אותו בתיבה ולחץ על הקישור "שמור קופון" כדי לשמור את פרטי הקופון בהזמנת ההזמנה שלך.');
jr_define ('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'שמור קופון');
jr_define ('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'קופון נשמר נגד הזמנה');
jr_define ('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'מספר קופון לא נמצא');
jr_define ('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'ערך קופון הנחה');
jr_define ('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'הנחה בהזמנה. קוד קופון/ערך הנחה/הגדרות קופון:');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES', 'בחר שפות');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'בחר את אפשרויות השפה שיוצגו בתפריט הנפתח של מתג השפות.');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'הצג את התפריט הנפתח לבחירת השפה?');
/*
* @ignore
*/jr_define ('_JRPORTAL_NEWUSER_DEAR', 'יקר');
jr_define ('_JRPORTAL_NEWUSER_THANKYOU', 'תודה על ההרשמה');
jr_define ('_JRPORTAL_NEWUSER_USERNAME', 'שם המשתמש שלך הוא:');
jr_define ('_JRPORTAL_NEWUSER_PASSWORD', 'הסיסמה שלך היא:');
jr_define ('_JRPORTAL_NEWUSER_LOG_IN', 'אנא היכנס לצפייה בהזמנות שלך');
jr_define ('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'קופון נשמר');
jr_define ('_JOMRES_MR_AUDIT_DELETE_COUPON', 'קופון נמחק');
// עדיין לא היה בשימוש
jr_define ('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define ('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'שם משתמש');
jr_define ('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Password');
jr_define ('_JRPORTAL_SMS_CLICKATELL_APIID', 'מזהה API');
jr_define ('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'מספר הודעה לנייד');
jr_define ('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "אנא השתמש בפורמט 'קוד מדינה, מספר נייד'. לדוגמה, מספר סלולרי המבוסס על בריטניה יהיה בערך כמו '447979123456'. השאר את זה ריק אם אינך מעוניין לשלוח הודעות דוא  ל לנייד שלך. מכשיר טלפון.");
jr_define ('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define ('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b> ברור שלא תוכל להשתמש/לבדוק שער זה מ- localhost, יהיה עליך לעשות זאת בשרת 'חי'. </b>
<br/>
<br/>
כדי להשתמש בשער Clickatell אתה צריך חשבון Clickatell ולפחות חיבור אחד רשום (מופע תת-מוצר API) בין היישום שלך לבין השער שלנו. כל חיבור
השיטה ידועה כתוצר-משנה. כך תעשה זאת: <br/>
<br/>
<b> שלב 1 - הרשמה לחשבון Clickatell </b> <br/>
אם עדיין אין לך חשבון Clickatell, עליך להירשם לאחד בהתאם להלן. אחרת המשך לשלב 2. <br/>
* עבור אל http://www.clickatell.com/products/sms_gateway.php ובחר את תוצר המשנה המתאים של API (שיטת חיבור) שבה ברצונך להשתמש (Clickatell Central (API)) <br/>
* לחץ על קישור ההרשמה. <br/>
* מלא את טופס ההרשמה. <br/>
לאחר שליחת הטופס בהצלחה תיכנס אוטומטית לחשבון החדש שלך ותועבר לדף שבו תוכל להוסיף את חיבור ה- API שבחרת. <br/>
<b> שלב 2 - הוסף חיבור API רשום (תת -מוצר) </b> <br/>
אם אינך עדיין מחובר לחשבונך, עליך לעשות זאת בכתובת http://www.clickatell.com/login.php <br/>
* בחר \"נהל את המוצרים שלי \" מהתפריט העליון. <br/>
* בחר את סוג חיבור ה- API שבו ברצונך להשתמש (HTTP API) מהתפריט הנפתח ('הוסף חיבור'). <br/>
* השלם את הטופס. וודא שאתה מזין את ה- IP הנעול (ה- IP של שרת זה), הגדר את Callback ל- HTTP POST. יהיה עליך להגדיר את חיוג ה- IP ל- ".get_showtime ('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback ו- userid וסיסמה. <br/>
אם אתה רושם יותר מחיבור API אחד, שם התיאור שאתה מזין עבור כל אחד חייב להיות ייחודי - לא יכולים להיות לך מספר ממשקי API עם אותו שם. <br/>
לאחר שליחת הטופס בהצלחה יוצגו פרטי האימות שלך, כולל מזהה ה- API הייחודי של כל חיבור (api_id). פרטי אימות אלה נדרשים בעת חיבור לשער Clickatell כדי לשלוח הודעה. <br/>
<br/>
השתמש ב- userid שלך, בסיסמה וב- api_id כדי לאכלס את השדות שלמעלה. <br/>
<br/>
");
jr_define ('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'רשימת טופסי הזמנה מציגה גישה לנכים');
jr_define ('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'רשימת טופסי הזמנת הצגת מקסימום אנשים');
jr_define ('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'שים לב שמחירי החדרים המפורטים הם הערכות ומחיר ההזמנה המלא לא יחושב עד שהוספת חדר או חדרים לבחירה שלך.');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'חבילות מנויים');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'שם');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'תיאור');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Published');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'סכום מלא');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'limit property');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'הירשם');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_USE', 'השתמש בפונקציונליות של טיפול במנויים');
jr_define ('_JOMRES_COM_NEWUSER', 'צור משתמש חדש בעת ההזמנה');
jr_define ('_JOMRES_COM_NEWUSER_DESC', 'צור חשבון משתמש חדש בהזמנת משתמשים לא רשומה.');
jr_define ('_JOMRES_CLICKTOREGISTER', 'לחץ כאן לרישום הנכס שלך');
jr_define ('_JRPORTAL_NEWUSER_SUBJECT', 'פרטי משתמש חדשים');
jr_define ('_JOMRES_LATLONG_DESC', 'השתמש בעכבר כדי להסתובב במפה וגרור את המצביע למיקום הנכס שלך כדי להגדיר את קו הרוחב והאורך.');
jr_define ('_JOMRES_CONTROLPANEL', 'לוח הבקרה');
// Jomres v4.2
jr_define ('_JOMRES_MANAGER_SHOWINVOICE', 'הצג חשבונית');
jr_define ('_JOMRES_MANAGER_SHOWINVOICES', 'הצג חשבוניות');
jr_define ('_JOMRES_USER_LISTMYPROPERTY', 'הוסף את הנכס שלי לאתר זה');
jr_define ('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Todo:');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'מצטערים, אך מזהה החבילה אינו מזוהה.');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'מצטער, אתה כבר מנוי על חבילה חינמית, אינך יכול להירשם שוב לחבילה זו.');
jr_define ('_JOMRES_COM_YOURBUSINESS', 'פרטי העסק שלך');
jr_define ('_JOMRES_COM_YOURBUSINESS_NAME', 'שם עסק');
jr_define ('_JOMRES_COM_YOURBUSINESS_VATNO', 'number VAT');
jr_define ('_JOMRES_COM_YOURBUSINESSADDRESS', 'מספר בניין');
jr_define ('_JOMRES_INVOICE_NUMBER', 'מס  חשבונית ');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'בחר את התאריכים שעבורם ברצונך להחיל את ההזמנה השחורה. כאשר בחרת את התאריכים המתאימים, לחץ על כפתור "החל" כדי לבדוק מחדש את הזמינות. <br/>
<br/>
אם בנכס יש הזמנה אחת או יותר לתקופה שנבחרה, לא תוכל להזמין אותה עד שההזמנות האחרות/ההזמנות השחורות בוטלו/הוזמנו. ');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'מצטערים, אינך יכול להזמין נכס זה בשחור לתאריכים אלה.');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'אתה יכול לסרוק את הנכס הזה לתאריכים אלה.');
jr_define ('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'הנכס שלך מוגדר לגבות תשלום לאדם ללילה אך אין לך סוגי אורחים שנוצרו או פורסמו, צור ופרסם סוג אורח אחד או יותר.');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'עדיין אין לך תעריפים מוגדרים, לא תוכל לבצע הזמנות של הנכס שלך.');
jr_define ('_JOMRES_EDITINGMODE_ON', 'מצב עריכת תוויות מופעל');
jr_define ('_JOMRES_EDITINGMODE_OFF', 'מצב עריכת תוויות כבוי');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'הפקדות משתנות לחיוב?');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'הפקדות משתנות מאפשרות לך להגדיר אם תרצה לגבות את מלוא הסכום אם תאריך ההגעה של ההזמנה הוא בתוך N ימים מהיום ". הגדר אפשרות זו ל- Yes כדי להפעיל את התכונה. , והזן את מספר הימים למטה, כך למשל אם יום ההגעה הוא בתוך 60 יום, אז סכום ההפקדה שיגבה יהיה הסכום המלא, אחרת הסכום יתבסס על אפשרויות ההפקדה שהוגדרו לעיל. ');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'מספר הימים, במסגרתם תחויב הסכום המלא כפיקדון.');
jr_define ('_JOMRES_CONFIRMATION_EMAIL_SENT', 'מייל אישור נשלח. תוכל לסגור חלון זה כעת.');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'צור קשר');
jr_define ('_JOMRES_INVOICE_MARKASPAID', 'סמן חשבונית כתשלום');
jr_define ('_JOMRES_INVOICE_MARKEDASPAID', 'חשבונית מסומנת כתשלום');
jr_define ('_JOMRES_APIKEY_REMAKE', 'צור מפתח API חדש');
jr_define ('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'האם מדובר בהתקנת נכס יחיד?');
jr_define ('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'אם אפשרות זו מוגדרת כ- כן, התצוגה הקדמית של Jomres למשתמשים שאינם מורשים מתפשטת מאוד. ברירת מחדל לשיחות Jomres מתפריט, במקום לקבל רשימת נכסים, לוקחת רק האורח לטופס ההזמנה של הנכס הראשון במערכת. מנהלי נכסים גם לא יראו את לחצן התצוגה המקדימה של פרטי הנכס או את לחצן הוסף נכס חדש. אידיאלי אם ברצונך לרשום נכס אחד בלבד ולבצע הזמנות עבורו. <br /> ');
jr_define ('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'יתרת תשלום');
jr_define ('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'שים לב, אתה משתמש במצב עריכה כאשר מצב העריכה הגלובלית מופעל. זה בסדר אם אתה מבין מה המשמעות של מצב עריכה גלובלית, אולם אם לא תוכל לגרום לעצמך לבעיות. אם אינך בטוח. אם אתה צריך להשתמש ב- Jomres בדרך זו, עיין ב <a href = "http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target ="_blank"> הדף הידני של מצב העריכה </a> למידע נוסף בנושא זה. ');
jr_define ('_JOMRES_SUPPORTKEY', 'מפתח תמיכה');
jr_define ('_JOMRES_SUPPORTKEY_DESC', 'מספר מפתח רישיון התמיכה שלך (ידוע גם בשם מספר הרישיון שלך). תזדקק לרישיון עדכני כדי שתוכל להוריד תוספים עבור Jomres.');
jr_define ('_JOMRES_PERSONAL_DISCOUNT', 'הנחה אישית');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'להגביל את רישום הנכס למדינה אחת?');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'תוכל לוודא שרישומי נכסים מוגבלים למדינה אחת בלבד על ידי הגדרת אפשרות זו ל- Yes והגדרת המדינה באופציה הבאה.');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'נכסים ממוקמים במדינה זו:');
jr_define ('_JOMRES_JQUERYTHEME', 'theme Jquery');
jr_define ('_JOMRES_JQUERYTHEME_DESC', 'בחר נושא jquery לשימוש בכרטיסיות פרטי הנכס.');
jr_define ('_JOMRES_PROPERTYNOTOUBLISHED', 'אנו מצטערים, אך נכס זה אינו זמין כעת.');
jr_define ('_JOMRES_REVIEWS', 'ביקורות');
jr_define ('_JOMRES_REVIEWS_TITLE', 'כותרת סקירה');
jr_define ('_JOMRES_REVIEWS_DATE', 'פורסם ב-');
jr_define ('_JOMRES_REVIEWS_NOREVIEWS', 'עדיין אין ביקורות על נכס זה.');
jr_define ('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'האם אתה רוצה להיות הראשון שיסקור את הנכס הזה?');
jr_define ('_JOMRES_REVIEWS_IAGREE', 'אני מסכים עם סקירה זו');
jr_define ('_JOMRES_REVIEWS_IDISAGREE', 'אני לא מסכים עם סקירה זו');
jr_define ('_JOMRES_REVIEWS_AVERAGE_RATING', 'דירוג ממוצע:');
jr_define ('_JOMRES_REVIEWS_TOTAL_VOTES', 'סה"כ הצבעות:');
jr_define ('_JOMRES_REVIEWS_ADD_REVIEW', 'הוסף סקירה חדשה.');
jr_define ('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'אתה צריך להיות מחובר כדי לפרסם סקירה.');
jr_define ('_JOMRES_REVIEWS_REVIEWBODY', 'ספר לנו מה אתה חושב על נכס זה:');
jr_define ('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'המבקר הזה אמר לנו:');
jr_define ('_JOMRES_REVIEWS_PROS', 'יתרונות:');
jr_define ('_JOMRES_REVIEWS_CONS', 'חסרונות:');
jr_define ('_JOMRES_REVIEWS_SUBMITTEDDATE', 'נשלח בתאריך:');
jr_define ('_JOMRES_REVIEWS_ALREADYREVIEWED', 'כבר ביקרת את הנכס הזה, לא תוכל לפרסם עליו סקירה נוספת.');
jr_define ('_JOMRES_REVIEWS_CANNOTREVIEW', 'מצטערים, אך אינך רשאי לפרסם ביקורות באתר זה.');
jr_define ('_JOMRES_REVIEWS_CLICKTOSHOW', 'הצג ביקורות');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'האורחים מסכימים עם סקירה זו.');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'אורחים אינם מסכימים עם סקירה זו.');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'אורח מסכים עם סקירה זו.');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'אורח אינו מסכים עם סקירה זו.');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'תודה ששיתפת את דעתך על סקירה זו.');
jr_define ('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'תודה, אבל כבר שיתפת את דעתך על סקירה זו.');
jr_define ('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'אנא ודא כי כל השדות מלאו.');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'אנא סיכם את סקירתך על ידי הזנת כותרת');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'אנא הזן סקירה מלאה יותר בתיבת התיאור');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'אנא הזן את החלקים הטובים בחווייתך להיות אורח בנכס זה');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'אנא הזן כל מחשבה שלילית שיש לך על החוויה שלך');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'אנא דרג את אירוח האירוח שקיבלת מהצוות');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'אנא דרג את דעתך על אזור הנכס');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'אנא ספק את דעתך על ניקיון הנכס');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'אנא דרג את מקום האירוח. האם היה נוח או מבולבל');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'אנא ספק את דעתך האם זה היה תמורה למחיר');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'אנא דרג את השירותים');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'תקציר סקירה');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'הניסיון שלך ביתר פירוט');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'תודה ששלחת את חוות דעתך.');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'תודה על שליחת חוות הדעת. היא תפורסם בקרוב על ידי אחד המנחים החרוצים שלנו.');
jr_define ('_JOMRES_REVIEWS_ADMIN_CONTROL', 'השתמש בפונקציונליות סקירת Jomres?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'פרסם ביקורות באופן אוטומטי?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'אם תגדיר זאת ל לא תצטרך לפרסם ביקורות באופן ידני');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'הגדר ביקורות למצב בדיקה?');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'בדרך כלל מנהלי נכסים אינם יכולים לבדוק את הנכסים. כאשר מצב הבדיקה מופעל, הם יכולים. מטבע הדברים זה אינו אידיאלי בסביבת ייצור.');
jr_define ('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'זו רשימה של כל הנכסים. כדי לראות ביקורות של נכס, לחץ על הנכס הזה. משם תוכל לפרסם או למחוק סקירה.');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'מספר ביקורות שלא פורסמו');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'סך כל הביקורות');
jr_define ('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'פרסם/בטל פרסום סקירה');
jr_define ('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'מחק סקירה');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW', 'סקירת דוחות');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'סקירת דוחות');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'אנא הזן את הדוח שלך');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'רואה משהו בסקירה זו שהוא התנגדות או לא מדויק? דווח על כך ונבדוק עבורך.');
jr_define ('_JOMRES_REVIEWS_SUBMIT', 'שלח');
jr_define ('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'הדוח נוצר על ידי');
jr_define ('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'דוחות מתפרסמים על ידי משתמשים שעלולים שלא להסכים עם תוכן הביקורת. הדרך היחידה להסיר דוח היא למחוק את הביקורת.');
jr_define ('_JOMRES_REVIEWS_RATING', 'דירוגים (1 = 10 גרוע = מצוין)');
jr_define ('_JOMRES_REVIEWS_RATING_1', 'אירוח');
jr_define ('_JOMRES_REVIEWS_RATING_2', 'מיקום');
jr_define ('_JOMRES_REVIEWS_RATING_3', 'ניקיון');
jr_define ('_JOMRES_REVIEWS_RATING_4', 'לינה');
jr_define ('_JOMRES_REVIEWS_RATING_5', 'ערך לכסף');
jr_define ('_JOMRES_REVIEWS_RATING_6', 'שירותים');
jr_define ('_JOMRES_REVIEWS_REVIEWED_BY', 'נבדק על ידי:');
jr_define ('_JOMRES_REVIEWS_CLICKTOHIDE', 'הסתר ביקורות');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'הצג טופס הזמנה בדף פרטי הנכס?');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'הגדר זאת ל- Yes כדי להציג את טופס ההזמנה בדף פרטי הנכס. אם תגדיר אותו ל- No, יופיע קישור בדף פרטי הנכס במקום להצביע על טופס ההזמנה.');
jr_define ('_JOMRES_COM_A_TAXINCLUSIVE', 'האם המחירים נקבעים כולל מס?');
jr_define ('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'המחירים שנקבעו כוללים? אם המחירים שלך כוללים מס, בחר כן. אם לא, בחר לא');
jr_define ('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'תוספות מס:');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'שדות יום בשבוע מאפשרים לך להגדיר תעריף ליום נתון בשבוע, לאחר שתלחץ על כפתור יום השבוע כל ימות השבוע יוגדרו לקצב זה.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'בוחרי התאריכים וקלט התעריפים מאפשרים לך לקבוע מחיר אחד לטווח תאריכים נתון. בחר תאריך התחלה וסיום, הזן מחיר ולחץ על הלחצן הגדר תעריפים.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'התחל טווח');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'טווח סיום');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Rate');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'קבע תעריפים');
jr_define ('_JOMRES_PARTNERS_TITLE', 'Partners');
jr_define ('_JOMRES_CALENDAR_RTL', 'true');
jr_define ('_JOMRES_ROOMALLOCATIONS_ROOM', 'חדר');
jr_define ('_JOMRES_ROOMALLOCATIONS_GUESTS', 'אורחים');
jr_define ('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'כך הקצנו את מספרי האורחים שלך לחדרים שלהם. אם תרצה לשנות הקצאה זו, יהיה עליך ליצור קשר עם המלון לאחר ביצוע ההזמנה. ייתכן שתחול חיובים נוספים אם תשנה את ההקצאות שלך. ');
jr_define ('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'שים לב שהנכס שלך עדיין לא פורסם, רק אתה יכול לראות את הנכס, מבקרי האתר לא יראו אותו');
// 4.5.5
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'סדר ברירת מחדל של תוצאות חיפוש');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'שנה אפשרות זו כדי לשנות את הסדר שתוצאות החיפוש יוצגו כברירת מחדל.');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'הצג את התפריט הנפתח לפי סדר תוצאות החיפוש');
jr_define ('_JOMRES_ROOMMSLIST_STYLE', 'סגנון רשימת חדרים');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_DESC', 'בטופס ההזמנה, באמצעות סגנון רשימת החדרים "הקלאסיים" אתה מציע לאורחים חדרים בודדים. בתצוגת סוג החדר, האורחים בוחרים במקום את מספר החדרים מסוג X (למשל 2 x זוגות) במקום. ');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'סוגי חדרים');
jr_define ('_JOMRES_COM_CALENDAR_STARTDAY', 'יום התחלת שבוע לוח השנה, ראשון או שני');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'רק אורחי נכס יכולים לסקור?');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'הגדר זאת ל- Yes אם ברצונך להגביל ביקורות רק לאותם משתמשים שהיו אורחים כבר בנכס זה.');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'לכל חדר');
jr_define ('_JOMRES_MAX_GUESTS_PER_ROOM', 'אורחים לחדר:');
jr_define ('_JOMRES_MAX_GUESTS_PER_BOOKING', 'אורחים בהזמנה:');
jr_define ('_JOMRES_NUMBER_OF_ROOMS', 'מספר חדרים');
jr_define ('_JRPORTAL_MONTHS_LONG_0', 'ינואר');
jr_define ('_JRPORTAL_MONTHS_LONG_1', 'פברואר');
jr_define ('_JRPORTAL_MONTHS_LONG_2', 'מרץ');
jr_define ('_JRPORTAL_MONTHS_LONG_3', 'אפריל');
jr_define ('_JRPORTAL_MONTHS_LONG_4', 'מאי');
jr_define ('_JRPORTAL_MONTHS_LONG_5', 'יוני');
jr_define ('_JRPORTAL_MONTHS_LONG_6', 'יולי');
jr_define ('_JRPORTAL_MONTHS_LONG_7', 'אוגוסט');
jr_define ('_JRPORTAL_MONTHS_LONG_8', 'ספטמבר');
jr_define ('_JRPORTAL_MONTHS_LONG_9', 'October');
jr_define ('_JRPORTAL_MONTHS_LONG_10', 'נובמבר');
jr_define ('_JRPORTAL_MONTHS_LONG_11', 'דצמבר');
jr_define ('JOMRES_COM_A_MINIMALCONFIG_DESC', 'הגדר את זה ל- Yes כדי לצמצם את מספר האפשרויות הזמינות למנהלי הנכסים בסעיף התצורה הכללית. זה שימושי אם אתה לא רוצה שמנהלי נכסים ישחקו עם יותר מדי הגדרות, במקום זאת תוכל לערוך jomres_config .php להגדרת אפשרויות ברירת מחדל של נכס. ');
jr_define ('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'אנא בחר אפשרות להזמנה שלך');
jr_define ('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> אם אפשרות זו מוגדרת כ- כן, המנהלים יוכלו לראות את עורך ה- HTML המסופק עם CMS ולהזין HTML בתיאור. זהו סיכון אבטחה פוטנציאלי מכיוון שיש אפשרות שהם יכולים להציג HTML או Javascript לא רצויים. בנוסף, אם הם מכניסים HTML מעוצב בצורה גרועה עיצוב הדף עלול להיפגע. עדיף להשאיר אפשרות זו מוגדרת ל- No בכל מקום אפשרי. </p> <p> אם כל המנהלים הם משתמשים מהימנים. (למשל את עצמך) אז תוכל להשאיר את זה מוגדר ל- Yes ולשנות את תגי ה- HTML השונים אותם הם רשאים להזין בכרטיסייה סינון קלט בתצורת האתר. </p> <p> אם, לעומת זאת, אתה ' אם אתה משתמש ב- Jomres כפורטל שבו אתה מזמין משתמשים להוסיף ולנהל נכסים משלהם, אז זו לא התצורה האידיאלית. במקום זאת עליך להשאיר את האפשרות הזו כמס '. עם זה מוגדר ל-' אין מנהלים יראו במקום זאת עורך סימון שהם ' יכול להשתמש כדי להזין עיצוב בסיסי שאמור להספיק לרוב המשתמשים. </p> ");
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'תצוגה במסך מלא');
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'תצוגה רגילה');
jr_define ('_JOMRES_PARTNER_DISCOUNT', 'הנחה לשותפים');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'חיפוש משתמש');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'הזן כמה תווים לחיפוש משתמש. <br/> כאשר תבחר משתמש תוסיף אותם אוטומטית כשותף ותועבר לדף הבא שבו תוכל להקצות נכסים והנחות. למשתמש. ');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'שותפים קיימים');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'בחר שותף שיועבר לדף ניהול השותפים.');
jr_define ('_JOMRES_PARTNER_SHOW_TITLE', 'Partner:');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'חפש נכס');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "הזן מספר תווים בשם הנכס ובחר נכס. <br/> כאשר תבחר בנכס תוסיף אותו לתיק השותף, אולם הם עדיין לא ייהנו מהנחות כלשהן, תצטרך להגדיר את אלה בעצמך. ");
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'מאפיינים נוכחיים');
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "לחץ על נכס כדי לערוך את הגדרות ההנחה של השותף לאותו נכס.");
// 4.6
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'חשבון זה הושעה, כרגע לא ניתן לנהל את הנכסים שלך באמצעות חשבון זה.');
jr_define ('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'חשבון ניהול מושעה');
jr_define ('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'חשבון מנהלים הוחזר מחדש');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'שים לב שחשבון מנהל הנכסים שלך הושעה. לא תוכל לבצע פעולות לניהול נכסים עד שהחשבון ישוחזר.');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'שים לב שחשבון מנהל הנכסים שלך פעיל כעת. תוכל להמשיך לבצע כל פונקציות לניהול נכסים. היכנס לחשבונך וודא כי הנכסים המתאימים פורסמו. תודה.' );
jr_define ('_JOMCOMP_MYUSER_REMOVE', 'הסר מועדף');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE', 'ארכיון נתוני הזמנות');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'ארכיון נתוני ההזמנה הוא המאגר הגולמי של מידע הזמנות שנלכד לאחר לחיצה על כפתור ההזמנה. העבר את העכבר מעל תאריך כדי לראות את המזבלה של הנתונים הגולמיים. המידע מאוחסן בטבלת XXX__jomres_booking_data_archive.');
jr_define ('_JOMRES_MY_ACCOUNT_EDIT', 'ערוך חשבון');
jr_define ('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'כדי להוסיף משתמש כמנהל נכסים, הזן תחילה את התווים הראשונים של שם המשתמש שלו בשדה למעלה. כאשר נמצא המשתמש הנכון לחץ על אותו שם כדי לבחור אותו, ולאחר מכן בחר איזה נכס ( s) הם צריכים להיות מנהלים של. המשתמש <em> חייב להיות כבר משתמש ב- CMS </em> ');
jr_define ('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'מנהלים קיימים');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'שינה');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'הצג את החיפוש לפי מספר אורחים');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'כוכבים');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'הצג את הכוכבים הנפתחת');
jr_define ('_JOMRES_SEARCH_GUESTNUMBER', 'שינה');
jr_define ('_JOMRES_SEARCH_STARS', 'מספר כוכבים');
jr_define ('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'מספר הנכסים');
// 4.6.1
jr_define ('_JOMRES_CONFIG_JQUERY', 'Load Jomres jQuery?');
jr_define ('_JOMRES_CONFIG_JQUERY_DESC', 'תוכל להגדיר זאת ל- NO אם יש לך תבנית שמשתמשת ב- jquery. זה עשוי לפתור בעיות קונפליקט של jquery בתבניות מסוימות, אך לא בכולם.');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'הפעלת אפשרות זו מאפשרת לך לראות את מחליף השפות בתצוגת מסך מלא בחזית.');
jr_define ('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'תמונות ממוזערות נוצרות אוטומטית לתמונות שהועלו.');
// 4.7.1
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'thumb thumbnails max breed (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'תמונות ממוזערות קטנות משמשות ברשימת הנכסים ואילו תמונות ממוזערות בגודל בינוני משמשות בכותרת המאפיין.');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'תמונות ממוזערות קטנות גובה מרבי (פיקסלים.');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'רוחב מקסימלי של תמונות ממוזערות בינוניות (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'תמונות ממוזערות בגובה מרבי (פיקסלים).');
jr_define ('_JOMRES_TOUCHTEMPLATES', 'Translations Label');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE', 'השתמש בפונקציונליות העמלות?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'הגדר זאת ל- Yes כדי להציג את חשבוניות עמלת המנהל שהועלו.');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'הזמנות מנהלים יוצרות חשבוניות עמלה?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'אם מנהל מבצע הזמנה, האם זה יוצר גם פריט שורה של חשבונית עמלה?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'השעה אוטומטית של מנהלים שבהם החשבוניות מסומנות כהמתנה?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'השעיית שטח אוטומטית');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'סף זה הוא מספר הימים שהמנהל צריך לשלם חשבונית לפני שהושעו והנכסים שלו לא פורסמו.');
//4.7.2
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT', 'הקשר שפה');
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'השתמש באפשרות זו כדי לשנות את הקשר השפה של האתר. תכונה זו מאפשרת ל- Jomres להשתמש בתוויות המתאימות להתמקדות הנוכחית שלך, כך שאם המיקוד שלך הוא כתיווך יאכטות, שינוי הקשר יהיה אפשר לג ומרס להציג תוויות מקובץ שפה אחר. לדוגמה, אם תגדיר את ההקשר ל"תיווך יאכטות ", אז תחילה תמצא Jomres את השפה הנוכחית, ואז תחפש בספריית /'.JOMRES_ROOT_DIRECTORY.'/languages ​​אחר ספריית משנה. נקרא "yachtbrokerage". אם הקובץ קיים בשפה הנוכחית, הקובץ הזה ישמש. אם לא, Jomres יחפש קובץ בשפה האנגלית באותה ספריה. אם לא ניתן למצוא אותו, Jomres ישתמש קובץ השפה עבור השפה שנבחרה כעת בספרייה /'.JOMRES_ROOT_DIRECTORY.'/languages. ');
// 4.7.3
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'הגדרת אתר מתקדם');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'הגדר אפשרות זו ל- Yes אם ברצונך להשתמש באפשרויות התצורה המתקדמות של האתר. אם אתה רק מתחיל ב- Jomres, אנו ממליצים לך להשאיר זאת ל- No לעת עתה, מכיוון שהתקנת ברירת המחדל היא מספיק כדי להתחיל, במקום זאת עליך להוסיף את Jomres לתפריט הראשי ולהיכנס לממשק הקדמי כ"אדמין "ולהתחיל להגדיר את הנכסים שלך. שים לב שאולי רבות מהאפשרויות המתקדמות אינן זמינות אם לא תעשה זאת. לא מותקנים התוספים המתאימים. משתמשי מערכת הליבה החינמית לא יוכלו לנצל את מלוא התכונות שהם מאפשרים. ');
jr_define ('_JOMRES_CONFIG_JQUERY_UI', 'Load Jomres jQuery UI?');
jr_define ('_JOMRES_SORTORDER_PRICE_DESC', 'מחיר (הגבוה ביותר ראשון)');
jr_define ('_JOMRES_SORTORDER_PRICE_ASC', 'מחיר (הנמוך ביותר ראשון)');
// 4.7.6
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'סיכום מחירים ואומדנים צריכים להיות מתומחרים לפי לילה/לשבוע/לחודש?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'ללילה');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'לשבוע');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'לכל חודש');
jr_define ('_JOMRES_BOOKINGFORM_PERPERSON', 'לאדם');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week (s) at');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month (s) at');
// 4.7.7
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'כיצד אמורה לפעול אפשרות החיפוש למספרי אנשים?');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'משפיע על כל מודולי החיפוש. בעת שימוש בתכונת החיפוש של מספר אורחים, האם תכונת החיפוש צריכה לחפש נכסים שתעריפיהם יתמכו במספרים של אורחים וישווים את המספר שנבחר, שווה בדיוק למספר הנבחר, או אם ישתמשו במאפיין החיפוש אם תכונת החיפוש צריכה לחפש נכסים שתערימיהם יהיו גבוהים ושווים למספר הנבחר, שווים בדיוק למספר הנבחר, או שמא ישתמשו בדיוק במספר האורחים המספר שנבחר וגדול יותר? ');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'אנא המתן, ההזמנה שלך מעובדת ותועבר לאתר Paypal.');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'אם לא תנותב אוטומטית לפייפאל תוך 5 שניות ...');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'לחץ כאן');
// 4.7.8
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'ההזמנה תקפה מ');
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Booking valid to');
jr_define ('_JRPORTAL_COUPONS_GUESTNAME', 'שם אורח');
jr_define ('_JRPORTAL_COUPONS_DESC_478', "ניתן ליצור קודי הנחה ולהעביר אותם לאורחים כתמריץ לביצוע הזמנות. <br/>
תוקף החל מתאריכים ומתאריך מתייחס לתאריכים בהם ניתן לבצע הזמנה, ואילו ההזמנה בתוקף מה/עד תאריכים מתייחסת לתאריכים שההזמנה חייבת לכסות כדי שהקופון יהיה תקף. אם הזמנה נופלת מחוץ לתקופה זו, תעריפים רגילים יחולו על הימים מחוץ לתקופה זו. <br/>
אם אתה רוצה שההזמנה תהיה זמינה לאורח ספציפי אחד, בחר את שם האורח הנפתח כדי להגביל את הקופון לאורח זה בלבד. ");
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'עם הקופון שלך, ההזמנה הזו הופחתה מ');
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'to');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_DESC', 'הגדר את זה ל- No כדי להשבית את הטעינה של קובצי ה- Javascript של Jquery ואת קובצי CSS.');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Load Jomres jQuery UI CSS CSS?');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', ' הגדר את זה כ לא כדי להשבית רק את קובץ ה- CSS UI של jquery. ');
// v5.1
jr_define ('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Total inc inc');
jr_define ('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'נכס שלא פורסם');
// v5.2
jr_define ('_JOMRES_CONVERSION_TITLE', 'השתמש בפונקציונליות המרה');
jr_define ('_JOMRES_CONVERSION_TITLE_DESC', "השתמש בפונקציונליות ההמרה המקוונת של Jomres. פעולה זו תציע נפתחת המרה למשתמשי חזית, שם הם יוכלו לבחור במטבע שבו הם רוצים לראות את המחירים המוצעים. תפוקת המחיר מותאמת להצגת ההמרה המחיר ואחריו המחיר 'המקורי' של הנכס בסוגריים. ");
jr_define ('_JOMRES_CONVERSION_DISCLAIMER', 'השתמשנו כמיטב יכולתינו להשיג את שערי החליפין המדויקים והמועדים ביותר שאנו יכולים. תכונת המרת המטבע המקוונת שלנו היא שירות הניתן למטרות מידע בלבד ואינו נועד לספק נתונים מדויקים. בהתאם לכך, איננו מתחייבים לדיוק שערי החליפין. באמצעות תכונה זו, אתה נחשב להסכים כי כל הסתמכות או שימוש בתכונת המרת השערים תהיה על אחריותך בלבד. ');
// 5.2.1
// 5.3.1
jr_define ('_JOMRES_CURRENCYCONVERSION_TAB', 'המרת מטבע/קודי מטבע');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'מפתח API לזיהוי IP');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_DESC', 'כדי להגדיר אוטומטית את התפריט הנפתח של קוד המטבע Jomres יכול להשתמש בשירות חינמי בשם IPinfoDB כדי לזהות את מדינת המבקר, אולם עליך להירשם למפתח API ב <a href = "https://www.ipinfodb.com/login" target ="_blank"> IPinfoDB </a> תחילה. ');
jr_define ('_JOMRES_DEBUGGING_TAB', 'Debugging');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'לינה ללא מס');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'מס לינה כולל');
jr_define ('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'מס חדרים:');
jr_define ('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'פתח את טופס ההזמנה');
jr_define ('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'חזרה לפרטי הנכס');
jr_define ('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'נבחר באופן אוטומטי?');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'יתרה (לאחר תשלום הפיקדון)');
jr_define ('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'סינון משאבים על סמך התכונות שלהם.');
jr_define ('_JOMRES_DATEPERIOD_LATESTBOOKING', 'ההזמנה האחרונה');
jr_define ('_JOMRES_DATEPERIOD_SECOND', 'שְׁנִיָה');
jr_define ('_JOMRES_DATEPERIOD_MINUTE', 'דַקָה');
jr_define ('_JOMRES_DATEPERIOD_HOUR', 'שעה');
jr_define ('_JOMRES_DATEPERIOD_DAY', 'יְוֹם');
jr_define ('_JOMRES_DATEPERIOD_WEEK', 'שבוע');
jr_define ('_JOMRES_DATEPERIOD_MONTH', 'חודש');
jr_define ('_JOMRES_DATEPERIOD_YEAR', 'שָׁנָה');
jr_define ('_JOMRES_DATEPERIOD_DECADE', 'עשור');
jr_define ('_JOMRES_DATEPERIOD_S', 's');
jr_define ('_JOMRES_DATEPERIOD_AGO', 'לפני');
jr_define ('_JOMRES_DATEPERIOD_FROMNOW', 'מעכשיו');
jr_define ('_JOMRES_WHOLEDAY_TITLE', 'הזמנות הן לימים שלמים?');
jr_define ('_JOMRES_WHOLEDAY_DESC', 'כברירת מחדל, המערכת מזמינה משאבים עד הלילה, כך שהזמנה מהראשון בינואר'. date ('Y', strtotime ('בשנה הבאה')). 'עד ה -2 בינואר'.date ('Y', strtotime ('בשנה הבאה')). 'מכסה לילה אחד בלבד. אם תגדיר אפשרות זו ל- Yes, עם זאת, ההזמנה תכסה ימים שלמים במקום זאת, כך שהזמנה בימים אלה תכסה את שניהם ימים והלקוח יחויב ליומיים. ');
jr_define ('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'ליום');
jr_define ('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'לאדם ליום');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'איסוף');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'לַחֲזוֹר');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'ימים (ים) בשעה');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'תאריך החזרה שגוי');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'ההזמנה קצרה מדי. צריך להיות לפחות ימים רבים כל כך בין תאריכי האיסוף והחזרה:');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'מרווח מינימום לאיסוף/החזרה');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'המרווח המינימלי בטופס ההזמנה בין תאריכי האיסוף וההורדה. מרווח של 1 פירושו שניתן להגדיר את תאריכי האיסוף והחזרה לאותו היום, אולם זה עדיין תלוי במינימום מרווח המחושב אוטומטית על ידי מנוע ההזמנות, מכיוון שהוא בודק תעריפים תקפים לתקופת ההזמנה. ');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'סיכום מחירים ואומדנים צריכים להיות מתומחרים לפי יום/לשבוע/לחודש?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'ליום');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'ימים לפני תאריך האיסוף');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'מספר הימים המינימלי שחייב לעבור, החל מ"היום ", לפני תאריך האיסוף.');
jr_define ('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'הגדר זאת ל- yes אם ברצונך להגביל הזמנות מראש (השתמש בשדה הבא כדי להגדיר את הגבול מבחינת ימים). אם תגדיר זאת ל- yes אז אם המשתמש ינסה להזמין יותר מ- n ימים מראש ואז תאריך האיסוף שלהם ישוחזר לתאריך של היום ');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'להציג את החזרת תאריך הקלט?');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "הגדר את זה ל'לא 'אם אינך רוצה להציג את תיבת הקלט של תאריך החזרה. השתמש בזה רק אם אתה יודע מה אתה עושה, שכן תאריך החזרה בהזמנות תמיד יוגדר ליום לאחר תאריך האיסוף. ");
jr_define ('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'אם תגדיר זאת ל- כן, ההזמנות יתבצעו לתקופה קצובה. אם זה מוגדר כ לא , ודא ש יום האיסוף המוגדר לא יוגדר כן (אלא אם כן רוצה לאלץ אנשים לאסוף ביום מסוים בשבוע) אחרת לא תקבל הרבה קישורים בלוח הזמינות. ');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'יום איסוף מוגדר מראש');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'רק לאתרים המציעים הזמנות לתקופה קצובה. בחר את היום בשבוע בו יש לבצע את האיסוף.');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'יום איסוף קבוע');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'תאריכי איסוף קבועים חוזרים על עצמם:');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'כאשר נבחרים תאריכי איסוף קבועים, מספר התאריכים שניתן להציג ברשימה הנפתחת של התאריכים. שים לב שרשימת התאריכים לא תכלול תאריכים אם אין אפשרות להזמין בשל הזמנות קודמות, ושהרשימה תהיה למעשה ארוכה פי שניים מהמספר שבחרת כי יהיה לה מספר דומה של תאריכים היסטוריים (במידת האפשר). ');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'לאדם, ליום');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'בחר כן אם ברצונך לגבות תשלום לאדם ליום. אם לא, העלויות יחושבו על בסיס משאבים ליום');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'הפקדות משתנות מאפשרות לך להגדיר אם ברצונך לגבות את הסכום המלא אם תאריך האיסוף של ההזמנה הוא בתוך N ימים מהיום ". הגדר אפשרות זו ל- Yes כדי לאפשר את התכונה. והזן את מספר הימים למטה, כך למשל אם יום האיסוף הוא בתוך 60 יום, אז סכום ההפקדה שיגבה יהיה הסכום המלא, אחרת הסכום יתבסס על אפשרויות ההפקדה שהוגדרו לעיל. ');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'רוב העסקים יחשבו מחדש את מחירי המשאבים על סמך מספר המשאבים מהסוג הנדרש הזמינים בתאריך נתון. זה מאפשר להם להציע הנחות על משאב/סוג עסק שאינו עסוק במהלך הזמן תקופה מסוימת במטרה למשוך עסקים שאחרת עלולים לפספס אותם. <br/> הפעלה ותצורה של תוסף זה מאפשרת לכם להציע תמחור מתכוונן המבוסס על מספר המשאבים מסוג נבחר הזמינים בעסק ביום נתון. <br/> סף הימים מגדיר את מספר הימים בו תאריך האיסוף חייב להיות בטרם יותאמו מחירי המשאבים על ידי תכונה זו, ולאחר מכן אפשרויות האחוזים יאפשרו לך להגדיר את אחוז המשאבים שיכולים להיות זמינים לפני החלת הנחה נתונה. עם זאת, שים לב שאם מוזמנים מספר משאבים אז רמת ההנחה הנוכחית תחול על כל המשאבים ולא תפחת ככל שנבחר יותר משאבים. ');
jr_define ('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'סף (מספר ימים בין תאריך האיסוף להיום)');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'איסוף ממתין');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'איסוף היום');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'נאסף');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'חוזר היום');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'איחור בחזרה');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'לא הרים');
jr_define ('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'ימים');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'סמן הזמנה שנאספה.');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'סמן הזמנה שהוחזרה.');
jr_define ('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'סמן הזמנה שנאספה');
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'סמן הזמנה שהוחזרה');
jr_define ('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'עלות ליום:');
jr_define ('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'מספר הימים:');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'ביטול סך כל הלינה');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'שמור ביטול');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'שלח למשתמשים חדשים את פרטי הכניסה שלהם?');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'אם האפשרות צור משתמש חדש מוגדרת כ כן, תוכל להגדיר את האפשרות כ לא  כדי לוודא שהם לא יישלחו בדוא"ל עם פרטי ההתחברות שלהם לאחר יצירת המשתמש. זה עשוי להיות שימושי אם תיצור אוטומטית. הוספת משתמשים חדשים לרשימת תפוצה, למשל, ואינם רוצים שמשתמשים יתחברו בפועל. ');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'הצג תפוקת מס בתמצית סיכומי טופס ההזמנה?');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'מנע מטופס ההזמנה להציג את שדות מחירי המס בסיכום הסיכומים על ידי הגדרת אפשרות זו למס');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'אזור ביטול');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'מחוברים, אורחים רשומים יכולים לבטל את ההזמנות שלהם. כאן תוכל להגדיר את סף הגבול בימים בהם לא ניתן לבטל את ההזמנה לאחר מספר ימים מסוים לפני תאריך ההגעה.');
jr_define ('_JOMRES_EDIT_PROFILE', 'ערוך פרופיל');
jr_define ('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'מערכת סוג נכס');
jr_define ('_JOMRES_IMAGE', 'תמונה');
jr_define ('_JOMRES_CRATES_CLICKINITIAL', 'לחץ על אות כדי להציג את כל העסקים עם התו הראשון הזה. לאחר שיש לך רשימת נכסים תוכל להקצות את תעריפי העמלות לנכסים אלה, או לחץ על סמל העריכה שלהם כדי להציג את הנתונים הסטטיסטיים של העסק. . ');
jr_define ('_JRPORTAL_TAX_RATE_EDIT', 'ערוך שיעור מס');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'ערוך שדה מותאם אישית');
jr_define ('_JOMRES_LICENSESERVER_PASSWORD', 'סיסמת שרת רישיון');
jr_define ('_JOMRES_LICENSESERVER_USERNAME', 'שם משתמש לשרת רישיון');
jr_define ('_JOMRES_LICENSESERVER_USERNAME_DESC', 'אם יש לך שם משתמש וסיסמה בשרת הרישיון, אנא הזן אותם כאן. זה יעזור לך לגשת לתוספים שאתה זכאי להם. אם הזנת מפתח תמיכה תקף בשדה למעלה, אז אין צורך לספק כאן את שם המשתמש/הסיסמה. ');
jr_define ('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'This Jomres version:');
jr_define ('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'גרסת Jomres האחרונה');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alert: קיימת גרסה חדשה של Jomres, מומלץ לשדרג בהקדם האפשרי.');
jr_define ('_JOMRES_PRODUCT_INFORMATION', 'ברוכים הבאים לג ומרס. מערכת הליבה היא בחינם, אך ניתן לשפר אותה באמצעות התקנת תוספים. כדי לגשת לאותם תוספים תצטרך רישיון הורדה ותמיכה. אם תרצה לרכוש Jomres Starter , רישיון לעסקים או לארגונים, <a href="http://www.jomres.net/prices" target="_blank"> בקר באתר שלנו </a> למידע על האופן שבו תוכל לשדרג. ');
jr_define ('_JOMRES_PRODUCT_INFORMATION2', 'מערכת זו אידיאלית לכל תרחיש, בין אם זה טופס הזמנה פשוט לנכס בודד, עד לאתר שיש בו מספר משתמשים, במספר שפות, עם מספר נכסים. עיין ב"עזרה " הקטע בתפריט, כולל הדף "תחילת העבודה" שידריך אותך בשלבים הראשונים שלך. ');
jr_define ('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'נכס פעיל');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'הגדרות דוא"ל');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'הגדר אפשרות זו ל- Yes כדי להשתמש בהגדרות SMTP חלופיות אלה. נראה כי מספר גדל והולך של מארחי אתרים חוסם את פונקציונליות דואר ה- PHP, כך שתוכל לבחור לעבור על הגדרות הדואר שמאמץ Jomres מהמארח שלך. CMS (בדרך כלל ג ומלה) והשתמש בהגדרות לבחירתך כאן. ');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'מארח חלופי');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'שנה את זה לשרת הדואר smtp שלך');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'יציאה חלופית');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'שנה זאת ליציאת smtp שלך');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'פרוטוקול חלופי');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "בהתאם להגדרות שרת ה- smtp שלך, עליך להשאיר את זה ריק או להזין 'ssl' או 'tls'. שאל את ספק ה- SMTP שלך אם אינך יודע.");
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'השתמש באימות');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'אם שרת ה- SMTP שלך דורש מהלקוחות להתחבר, הגדר זאת ל- Yes. לאחר מכן ישמש את שם המשתמש והסיסמה.');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'שם משתמש חלופי');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'סיסמה חלופית');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define ('_JOMRES_QUICK_INFO', 'מידע מהיר');
jr_define ('_JOMRES_MENU_SHOW', 'Show');
jr_define ('_JOMRES_MENU_HIDE', 'הסתר');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'ברירת מחדל');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'כל אחד');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'רשום');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Manager');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'אף אחד');
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE', 'Control Access menu');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC', 'תכונה זו מאפשרת לך לקבוע מי יוכל לראות תוסף בתפריט הראשי. בדרך כלל אפשרויות המשתמש 00009 ניתנות לצפייה על ידי מבקרים באתר או לא רשומים, 00010 אפשרויות מתייחסות בדרך כלל לפעילות מסוג קבלה שהם בשימוש על בסיס יומיומי, ואילו 00011 אפשרויות משמשות להקמה ותצורה של נכס אך נגישות אליהן בתדירות נמוכה יותר. ');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'פקידת קבלה');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'בקרת גישה מלאה');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'הגדר אפשרות זו ל- Yes כדי לאפשר את תכונת בקרת הגישה המלאה, ולאחר מכן בקר באפשרות בקרת הגישה תחת תחזוקת מערכת להגדרת פקדי גישה.');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "שים לב, עם זאת, הגדרות אלה אינן שולטות על התסריטים הבסיסיים שאליהם הם מתחברים, כך למשל אם אתה מגדיר <i> 00009user_option_03_search </i> למנהל משתמש עדיין יודע ש- Jomres יכול עדיין התקשר אל j06000search.class.php על ידי הזנת http://www.domain.com/index.php?option=com_jomres&task=search בסרגל הכתובות של הדפדפן. זה מכוון, מכיוון שבקרת גישה זו בתפריט שולטת במה שניתן לראות בסרגל הכתובות של הדפדפן. התפריט הראשי של Jomres. אם אתה זקוק לבקרות הדוקות יותר, הגדר את האפשרות Config -Site Control> Full Access Control ל- Yes ובדוק שוב את האפשרות Control Access. ");
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'בקרת גישה מלאה');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> תכונה זו מיועדת למשתמשים מתקדמים בלבד. אם אינך יודע למה היא מיועדת ואין לך סיבה ספציפית להשתמש בה, אנא חזור לתצורת האתר והגדר את הגישה המלאה. אפשרות שליטה למס '</strong> <br/>
תכונה זו מאפשרת לך לקבוע למי יש גישה לאילו רכיבי מיני (למעט כמה יוצאים מן הכלל שמקודדים במערכת). אם רמת הגישה לצד שם הסקריפט מוגדרת כברירת מחדל, עם האפשרות 'בקרת גישה מלאה' מוגדרת על כן <strong> כל אחד </strong> יכול לגשת לסקריפטים שאליהם הם לא צריכים לגשת ולכן אם בכוונתך להשתמש בזה תכונה עליך להגדיר את רמת בקרת הגישה ל <strong> כל </strong> רכיב מיני של Jomres המופיע כאן. אם אינך יודע מה רכיבי המיני אלה עושים, אנו ממליצים לך בחום לא להשתמש בתכונה זו כלל. <br/>
ברמות הגישה של Jomres עוקבים אחר פירמידה, כך שמנהלי נכסי העל גדולים יותר ממנהלים. בקיצור מנהל סופר> מנהל> פקיד קבלה> רשום> לא רשום. לכן, אם למשתמש רשום יש גישה לרכיב מיני, כך גם לפקידי קבלה, מנהלים ומנהלי על. <br/>
שים לב שאינך יכול לשלוט ברכיבים המיניים של אזור מנהל המערכת. כל אחד באזור מנהל המערכת נחשב כמשתמש מהימן, כי אין למנוע ממנו גישה לשום סקריפט (במיוחד זה).
");
jr_define ('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'אזהרה! יש לך בקרת גישה מלאה מופעלת, אולם ספרנו את הגדרות בקרת הגישה והשוונו אותן למספר רכיבי המיני שצריך לשלוט בהם, ושניהם אינם תואמים, לכן יתכן שיש לך כמה סקריפטים שאינם נשלטים. זו עלולה להיות בעיית אבטחה ואתה מוזמן לפתור זאת מיד על ידי ביקור בתכונה בקרת גישה ובדיקה שהרמות המתאימות יושמו. ');
jr_define ('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'משתמשים בעלי זכויות מנהל לנכס זה');
jr_define ('_JOMRES_DEBUGGING_YOUREMAIL', 'כתובת הדוא"ל שלך');
jr_define ('_JOMRES_EXTRAS_MODELS_MODEL', 'דגם');
jr_define ('_JOMRES_EXTRAS_MODELS_PARAMS', 'פרמטרים');
jr_define ('_JOMRES_EXTRAS_MODELS_FORCE', 'כּוֹחַ');
jr_define ('_JOMRES_METATITLE', 'כותרת מטא');
jr_define ('_JOMRES_METADESCRIPTION', 'תיאור מטא');
jr_define ('_JOMRES_REGISTRATION_STEP_2_OF_2', 'הוסף את הנכס שלך: שלב 2 מתוך 2');
jr_define ('_JOMRES_CART_TITLE', 'ההזמנות המוצעות שלי');
jr_define ('_JOMRES_CART_INFO', 'שים לב, הזמנות אלה עדיין לא נשמרו. אם תצא מהפעולה או שיפוג תוקף ההפעלה הן יאבדו. זכור לאשר את ההזמנות שלך!');

jr_define ('_JOMRES_CART_CONFIRM_BOOKINGS', 'אשר הזמנות');
jr_define ('_JOMRES_CART_OR', 'או');
jr_define ('_JOMRES_CART_SAVEFORLATER', 'שמור מאוחר יותר');
jr_define ('_JOMRES_CART_NOBOOKINGS_SAVED', 'אין לך שמורות עדיין.');
jr_define ('_JOMRES_CART_VIEWCART', 'הצג עגלה');
jr_define ('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'תת -ספריית קובצי שפה');
jr_define ('_JOMRES_DEFAULT_LAT_STARTPOINT', 'נקודת התחלה ברירת מחדל של Latitude');
jr_define ('_JOMRES_DEFAULT_LONG_STARTPOINT', 'נקודת התחלה של אורך ברירת מחדל');
jr_define ('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'במפת Google בדף עריכת הנכס, לפני הזזת הסמן, מה צריכות להיות נקודות ההתחלה של קו הרוחב/קו האורך המוגדר כברירת מחדל?');
jr_define ('_JOMRES_SYSTEM_EMAILS', 'מיילים שנשלחו מאיזו כתובת?');
jr_define ('_JOMRES_SYSTEM_EMAILS_DESC', "השאר את האפשרות הזו ריקה כדי להשבית אותה. Jomres ישתמש בכתובות הדוא ל של המלון בעת ​​שליחת הודעות דוא ל לאורחים, אולם שירות הדוא ל שלך עשוי לא לאפשר הודעות דוא ל מכתובות שרירותיות (כלומר, הן עשויות לאפשר הודעות דוא ל בלבד כתובת אחת מורשית). אם זה המקרה, תוכל להשתמש בקלט זה כדי להזין כתובת שתיראה ככתובת FROM עבור כל הודעות הדוא ל של המערכת. ");
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'תצוגת רשימה');
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'view view');
jr_define ('_JOMRES_COMPARE', 'השווה');
jr_define ('_JOMRES_REMOVE', 'הסר');
jr_define ('_JOMRES_RETURN_TO_RESULTS', 'חזור לתוצאות החיפוש');
jr_define ('_JOMRES_ADDTOSHORTLIST', 'הוסף למועדפים');
jr_define ('_JOMRES_REMOVEFROMSHORTLIST', 'הסר ממועדפים');
jr_define ('_JOMRES_VIEWSHORTLIST', 'הצג את הרשימה הקצרה שלך');
jr_define ('_JOMRES_COOKIEPOLICY_1', 'חשוב: מדיניות קובצי cookie');
jr_define ('_JOMRES_COOKIEPOLICY_2', 'אנו משתמשים בקובצי cookie כדי לעזור לשמור על האתר שלנו רלוונטי וקל לשימוש.');
jr_define ('_JOMRES_COOKIEPOLICY_3', 'קרא עוד ...');
jr_define ('_JOMRES_COOKIEPOLICY_4', 'חקיקה באיחוד האירופי מחייבת שכל האתרים יפרטו בבירור אם משתמשים בקובצי cookie ומטרתם.');
jr_define ('_JOMRES_COOKIEPOLICY_5', "מנוע החיפוש וההזמנה של אתר זה צריך להיות מסוגל לזכור את האפשרויות שבחרת לעבוד בצורה הטובה ביותר. לשם כך יש לאחסן מידע הקשור לקובץ קטן הנקרא \"cookie \" שמזהה את הדפדפן שלך באופן ייחודי, וכדי שנוכל לעשות זאת, עליך להסכים שנוכל. אם אינך מקבל מדיניות זו של קובצי cookie, תהיה מוגבל מאוד במה שאתה יכול לעשות באתר זה. ");
jr_define ('_JOMRES_COOKIEPOLICY_6', 'כן, אני מקבל את השימוש בעוגיות בדרך זו.');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'נדרשת הפקדה היא עלות הלילה הראשון?');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'המחירים מחושבים על בסיס לילה. האם אתה רוצה שהפיקדון יהיה בתשלום של לילה אחד? אם כן, תוכל להתעלם מהאפשרויות הבאות.');
jr_define ('_JOMRES_NOTHINGINSHORTLIST', "לא הוספת פריטים למועדפים שלך.");
jr_define ('_JOMRES_SAFEMODE', 'אפשר מצב בטוח?');
jr_define ('_JOMRES_SAFEMODE_DESC', "הגדר את זה ל- Yes כדי להפעיל מצב בטוח. פעולה זו תשבית את כל התוספים כך ש- Jomres ישתמש רק בפונקציונליות הליבה שלו.");
jr_define ('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define ('COMMON_NEXT', 'הַבָּא');
jr_define ('COMMON_CANCEL', 'ביטול');
jr_define ('COMMON_SUBMIT', 'שלח');
jr_define ('COMMON_SAVE', 'שמור');
jr_define ('COMMON_DELETE', 'מחק');
jr_define ('COMMON_RETURN', 'לַחֲזוֹר');
jr_define ('COMMON_CLOSE', 'סגור');
jr_define ('COMMON_BACK', 'חזור');
jr_define ('COMMON_HOME', 'בית');
jr_define ('COMMON_NEW', 'חדש');
jr_define ('COMMON_SEND', 'לִשְׁלוֹחַ');
jr_define ('RECAPTCHA_TITLE', 'reCaptcha');
jr_define ('RECAPTCHA_INFO', 'Captcha משמש כדי להבטיח שהלקוח שמשתמש בטפסי אינטרנט הוא בן אנוש, והוא משמש כדי למנוע ממנהלי נכסים להיות "ספאם" על ידי רובוטים באינטרנט. כדי להשתמש בטופס צור קשר ב- Jomres אתה יהיה עליך להירשם ב <a href="http://www.google.com/recaptcha" target="_blank"> דף הבית של Google reCaptcha </a> ולהגדיר את הדומיין שלך לקבל את המפתחות הציבוריים והפרטיים שלך. כאשר קיבלת את המפתחות האלה, אנא הזן אותם למטה. שירות reCapcha הוא שירות חינם הניתן על ידי Google. ');
jr_define ('RECAPTCHA_PUBLIC_KEY', 'מפתח ציבורי');
jr_define ('RECAPTCHA_PRIVATE_KEY', 'מפתח פרטי');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'פסק הזמן של נעילת הקובץ');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_DESC', 'כדי למנוע סכנה של אורחים להזמין חדרים, Jomres משתמש בקובץ נעילה כדי למנוע הוספת חדר לרשימת החדרים הזמינים בטופס ההזמנה אם מישהו אחר כבר הוסיף את החדר שלהם לאותם התאריכים . כברירת מחדל המנעול הזה יסתיים תוך 3600 שניות, או שעה אחת. תוכל לשנות את הזמן שלוקח לפקיעת הנעילה הזו על ידי שינוי נתון זה. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH', "אפשר Jomres 'תבניות Bootstrap ופונקציונליות?");
jr_define ('COMMON_ACTION', 'פעולה');
jr_define ('COMMON_VIEW', 'View');
jr_define ('BACKTOTOP', 'Back to top');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'חלש');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'חָזָק');
jr_define ('_JOMRES_INPUTFILTERING', 'סינון קלט');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'רמת סינון קלט');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_DESC', "רוב הנתונים שנכנסים למערכת מתנקים על ידי הפשטת תגי html כלשהם, ולאחר מכן שימוש בפונקציונליות סינון משתנים של PHP כדי להפוך את הנתונים לבטוחים לפני שהם נכנסים למסד הנתונים. ייתכן שתרצה לאפשר כניסות מסוימות. (למשל קלט הטקסט בדף פרטי הנכס) לכלול HTML. ישנן שתי רמות סינון בהן תוכל להשתמש כדי לסנן קלט זה, חלש או חזק. עליך להשתמש בהגדרה חלשה רק אם המשתמש / ים נכנסים הנתונים מהימנים בעצמך, למשל מנהלי מערכת אחרים, אחרת עליך להשאיר אותם מוגדרים כ- Strong. כאשר הם מוגדרים כ- strong (מומלץ) עדיין תוכל לציין אילו תגים לאפשר על ידי עריכת ההגדרה הבאה 'תגים מותר לטהר HTML'. ") ;
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'תגי קלט מותרים');
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "אתה יכול לערוך את התגים שמטהר html יאפשר דרך מערכת הסינון שלה. ברירת המחדל היא 'p, b, strong, a [href], i' (כלומר פסקה, מודגש, חזק, קישורים ואיתור נטוי) למידע נוסף על תגים מותרים, קרא את מסמך מטהר HTML בכתובת <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a>. בעוד שתוכל לשנות הגדרה זו, אתה מומלץ להשאיר אותו מוגדר כברירת מחדל. ");
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'קלט מותר');
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'פרטי נכס בכרטיסיות?');
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'הגדר אפשרות זו להצגת פרטי נכס בכרטיסיות. הגדר את זה לא כדי להציג אותם ללא כרטיסיות.');
jr_define ('COMMON_PRINT', 'הדפס');
jr_define ('COMMON_EDIT', 'לַעֲרוֹך');
jr_define ('COMMON_COPY', 'עותק');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres נועד לפעול הן במסגרות Bootstrap 2 והן Bootstrap 3. לאחר שהתקנת ערכת נושא או תבנית BS2 או BS3, הגדר מתג זה לבחור איזה מבין הטעמים של Bootstrap אתה רוצה ש- Jomres יעבוד עם.');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'השתמש בתבניות Jomres Bootstrap בחזית?');
jr_define ('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'להלן כמה חלופות שתרצה לשקול.');
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "זיהוי אוטומטי של מדינת האורח?");
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "המערכת תנסה לזהות באופן אוטומטי את מדינת האורח, אם הם לא הזמינו בעבר. תוכל להגדיר את האפשרות כ'לא ', ולהגדיר את המדינה שאתה מעדיף שיופיע בטופס ההזמנה, ב האפשרות הבאה. ");
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'אודות Jomres');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'עזרה');
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'תחילת העבודה');
jr_define ('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'בקרת גישה');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'כלי מפתחים');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'שפות');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'ייצור הכנסה');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'מבנה האתר');
jr_define ('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define ('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'החשבון שלי (מקוון)');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'פונקציונליות פורטל');
jr_define ('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'מנהל תוספים');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'שילוב');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'דו"חות/סטטיסטיקות');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'עזרה');
jr_define ('_JOMRES_CUSTOMCODE_UPGRADES', 'עדכונים');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'אמצעי תשלום');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'ברירת מחדל תעריף');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'זה חל רק על תעריפים חדשים');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'שנים להראות');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'מגדיר את מספר השנים להצגה בעת עריכת סוג תעריף');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'חשבוניות');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'פרטי חשבון');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'התחברות');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'יציאה');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'search');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'לוח מחוונים');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'שמור');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'חשבוניות');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'הגדרות');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'שונות');
jr_define ('_JOMRES_EDIT_COUNTRY_TITLE', 'ערוך מדינה');
jr_define ('_JOMRES_EDIT_COUNTRY_ID', 'מזהה מדינה');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'קוד מדינה');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'שם מדינה');
jr_define ('_JOMRES_EDIT_REGION_TITLE', 'ערוך אזור');
jr_define ('_JOMRES_EDIT_REGION_ID', 'מזהה אזור');
jr_define ('_JOMRES_EDIT_REGION_COUNTRYCODE', 'קוד מדינה');
jr_define ('_JOMRES_EDIT_REGION_REGIONNAME', 'שם אזור');
jr_define ('_JOMRES_COM_LISTCOUNTRIES', 'רשימת מדינות');
jr_define ('_JOMRES_COM_LISTREGIONS', 'רשימה אזורים');
jr_define ('_JOMRES_EXPORT_DEFINITIONS', 'הגדרות ייצוא');
jr_define ('_JOMRES_EXPORT_DEFINITIONS_INFO', 'תכונה זו מאפשרת לך לייצא תרגומים שנבנו באמצעות תכונת תרגום השפה. היא תבנה שדה טקסט עם כל הנתונים הדרושים לבניית קובץ שפה חדש, כל מה שאתה צריך לעשות הוא להעתיק ולהדביק פלט זה לקובץ שפה חדש שתוכל להעלות על שרת מבוסס Jomres חדש, או אם תרצה לתרום בחזרה לקהילת Jomres. ');
jr_define ('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'תרגם מקומות');
jr_define ('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'תרגם מחרוזות קובץ lang');
jr_define ('_JOMRES_COM_NOTAMANAGER', "שגיאה, המשתמש שאליו אתה מחובר אינו מנהל על בתוך Jomres, לא תוכל להשתמש בתכונה זו עד שתשתמש בתכונה 'מנהלי נכסים' כדי להפוך את עצמך למנהל וגם מנהל סופר. זוהי תכונת אבטחה. ");
jr_define ('_JOMRES_COM_LAYOUTS_DEFAULT', 'פריסת ברירת מחדל של רשימת נכסים');
jr_define ('_JOMRES_STAYFORAMINIMUMOF', 'הישארו לפחות');
jr_define ('_JOMRES_NIGHTSFOR', 'לילות עבור');
jr_define ('_JOMRES_AGENT', 'סוכן');
jr_define ('_JOMRES_AGENT_DETAILS', 'פרטי הסוכן');
jr_define ('_JOMRES_AGENT_LISTINGS', "רישומי הסוכן");
jr_define ('_JOMRES_APPROVALS_CONFIG_TITLE', 'אשר אוטומטית נכסים חדשים');
jr_define ('_JOMRES_APPROVALS_CONFIG_DESC', 'אם תגדיר אפשרות זו ל- No, יהיה עליך לאשר נכסים חדשים באופן ידני. עד שנכס לא יאושר לא ניתן לפרסם אותו על ידי מנהל/מנהל נכסים.');
jr_define ('_JOMRES_APPROVALS_MENU_NAME', 'אישורים');
jr_define ('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'נכס זה עדיין לא אושר. לאחר שהוא יאושר תוכל לפרסם אותו.');
jr_define ('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'מצטערים, אינך יכול לפרסם נכס זה מכיוון שהוא עדיין לא אושר.');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'נכס חדש דורש אישור');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'נוספה למערכת נכס הדורש אישורך. לחץ על הקישור לצפייה בנכסים הממתינים לרשימת האישור:');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'הנכס שלך אושר');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "מזל טוב, הנכס שלך אושר, אנא לחץ על הקישור הבא לצפייה בלוח הבקרה של הנכס:");
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'שמות אזורים ניתנים לתרגום');
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "אלא אם כן אתה מפעיל שרת מהיר מאוד, מומלץ להשאיר קבוצה זו למספר. בשל ריבוי שמות האזורים, תרגום שם האזור תופס הרבה זיכרון שיכול להאט את תוצאות החיפוש שלך. מטה.");
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'הוזמן אורח.');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'מצטערים, כתובת הדוא"ל הזו כבר בשימוש. אם זו כתובת הדוא"ל שלך, אנא ודא שנכנסת לפני שתנסה להזמין.');
jr_define ('JOMRES_TAPTOCALL', 'הקש להתקשר');
jr_define ('JOMRES_NEWREVIEW_SUBJECT', 'סקירה חדשה עבור');
jr_define ('JOMRES_NEWREVIEW_MESSAGE', 'הושארה סקירה חדשה עבור');
jr_define ('JOMRES_NEWREPORT_SUBJECT', 'דו"ח חדש');
jr_define ('JOMRES_NEWREPORT_MESSAGE', 'דווחה סקירה על');
jr_define ('JOMRES_SUPERIOR', 'Superior');
jr_define ('JOMRES_GRANDTOTAL_EX_TAX', 'סה"כ כולל (לשעבר מס):');
jr_define ('JOMRES_GRANDTOTAL_INC_TAX', 'סך כולל (כולל מס):');
jr_define ('JOMRES_GRANDTOTAL_TOTAL_TAX', 'סך המס:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'הקלד את שתי המילים:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'הזן מה שאתה שומע:');
jr_define ('JOMRES_RECAPTCHA_PLAY_AGAIN', 'הפעל שוב את רצועת השמע');
jr_define ('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'הורד את הרצועה בפורמט MP3');
jr_define ('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'mode Visual');
jr_define ('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'מצב אודיו');
jr_define ('JOMRES_RECAPTCHA_REFRESH_BTN', 'לְרַעֲנֵן');
jr_define ('JOMRES_RECAPTCHA_HELP_BTN', 'עזרה');
jr_define ('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'מצטער, זה היה שגוי. נסה שוב.');
jr_define ('JOMRES_GOOGLE_MAPS', 'אפשרויות מפת Google');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'השתמש בשכבת מזג אוויר?');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'צלסיוס');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'פרנהייט');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'השתמש בשכבת מעבר?');
jr_define ('JOMRES_GOOGLE_MAPS_POIS', 'אפשר נקודות עניין של Gmap (כולל אולי המתחרים שלך)?');
jr_define ('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define ('_JOMRES_SCAN_FOR_DIRECTIONS', 'סרוק את הקוד הזה לטלפון שלך כדי לקבל הנחיות אלינו.');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "מספר המע מ שהזנת לא נראה תקין. אמור להיות לך משהו כזה: BE805670816B01");
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'מספר מע"מ לא חוקי. בדוק את תוקפו של מספר המע"מ שלך באמצעות שירות האינטרנט של אימות מספר מע"מ באירופה (VIES)');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'מזל טוב. הצלחנו לאמת את מספר המע"מ שלך.');
jr_define ('_JOMRES_TAX_RULES_LIST', 'רשימת כללי מס');
jr_define ('_JOMRES_TAX_RULE', 'חוק מס');
jr_define('_JOMRES_TAX_RULE_INFO', 'כללי המס משמשים לקביעת כללי מס שונים לאזורים שונים. כללי מס אלה משפיעים על האדם המבצע את ההזמנה, אם הוא רשום, מחובר וערך את חשבונו באמצעות עריכת דף החשבון שלי. מטרתם של כללים אלה היא להתאים למזמינים באזורים שהם פטורים ממע"מ, אתם עשויים לגלות שאינכם צריכים ליצור כללים רבים, אם בכלל.');
jr_define ('_JOMRES_TAX_RATES_IMPORT', 'שיעורי מס יבוא');
jr_define ('_JOMRES_TAX_RATES_IMPORT_INFO', 'נוכל לייבא עבורך את שיעורי המס עבור האיחוד האירופי. שים לב, אם תשתמש בתכונה זו, כל שיעורי המס הקיימים שלך יוסרו.');
jr_define ('_JRPORTAL_TAX_RULE_EDIT', 'ערוך חוק מס');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER', 'מספר מע"מ לנכס זה.');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'אנא הזן את מספר המע"מ לנכס זה.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'מספר מע"מ מאומת.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'מספר מע"מ לא אומת.');
jr_define ('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'פרטי העסק שהוזנו כאן ישמשו בחשבוניות עמלה ומנויים.');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "נראה שעדיין לא מילאת את פרטי חשבונך. כדי לרשום את הנכס שלך באתר, אנו צריכים שתשלים את פרטי חשבונך לפני שנוכל להמשיך הלאה.");
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'ייצור או פיתוח?');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', ' אם תגדיר אפשרות זו לפיתוח אנו נאפשר דיווח על שגיאות, אחרת אם יוגדר ייצור יכבה. אם זהו שרת חי אנו ממליצים להגדיר אפשרות זו לייצור. ' );
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'ייצור');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'פיתוח');
// v7.3.3
jr_define ('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'פרטי משאבים');
jr_define ('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'פרטי תעריף');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'בלבד');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'שמאל!');
jr_define ('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'תכונת משאבים');
jr_define ('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'לא ניתן להסיר את תכונת המשאב הזו, הוא מוקצה למשאב. הסר את התכונה מהמשאב הזה ונסה שוב.');
// v7.4
jr_define ('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Center');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'הוסף תמונות');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'תמונות החדר');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'התמונה הראשית של הנכס');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'תמונות מצגת');
jr_define ('_JOMRES_MEDIA_CENTRE_CLEAR', 'נקה רשימה');
jr_define ('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'גרור ושחרר קבצים לכאן');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'בחר את המשאב שעבורו ברצונך להעלות תמונות. אם תוכל להעלות תמונות עבור משאבים בודדים (למשל חדרים) תינתן לך תפריט נפתח לבחירת המשאב הספציפי.');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'אם תעלה תמונות מרובות כ"תמונת הנכס הראשי "אלה ישמשו ברשימת הנכסים. תמונות מוצגות בדף פרטי הנכס.');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'הצג את התמונה שלך');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'מחק תמונה');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'העלה תמונה');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'סמלים של סוגי חדרים');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'סמלים של תכונת נכסים');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'העלה את כל הקבצים');
//8.0
jr_define ('COMMON_PREV', 'הקודם');
jr_define ('COMMON_MORE', 'עוד');
jr_define ('_JOMRES_DASHBOARD_TODAY', 'היום');
jr_define ('_JOMRES_DASHBOARD_YEAR', 'שנה');
jr_define ('_JOMRES_DASHBOARD_MONTH', 'חודש');
jr_define ('_JOMRES_DASHBOARD_WEEK', 'שבוע');
jr_define ('_JOMRES_DASHBOARD_DAY', 'Day');
jr_define ('_JOMRES_HLEGEND', 'אגדה');
jr_define ('_JOMRES_HFILTER', 'Filter');
jr_define ('_JOMRES_HFROM', 'מאת');
jr_define ('_JOMRES_HTO', 'To');
jr_define ('_JOMRES_HNEW_BOOKING', 'הזמנה חדשה');
jr_define ('_JOMRES_HSTATUS_DEPOSIT', 'סטטוס הפקדה');
jr_define ('_JOMRES_HSTATUS_GUEST', 'סטטוס אורח');
jr_define ('_JOMRES_HSTATUS_BOOKING', 'סטטוס הזמנה');
jr_define ('_JOMRES_HSTATUS_PUBLISHING', 'סטטוס פרסום');
jr_define ('_JOMRES_HSTATUS_INVOICE', 'סטטוס חשבונית');
jr_define ('_JOMRES_HSTATUS_INVOICE_TYPE', 'סוג חשבונית');
jr_define ('_JOMRES_HSTATUS_APPROVED', 'אושר');
jr_define ('_JOMRES_HSTATUS_CURRENT', 'עסק שוטף');
jr_define ('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'הצג הזמנות עבור');
jr_define ('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'הצג חשבוניות עבור');
jr_define ('_JOMRES_STATUS_ANY', 'כל');
jr_define ('_JOMRES_STATUS_PAID', 'בתשלום');
jr_define ('_JOMRES_STATUS_NOTPAID', 'לא שולמו');
jr_define ('_JOMRES_STATUS_CHECKEDOUT', 'נבדק');
jr_define ('_JOMRES_STATUS_ACTIVE', 'פעיל');
jr_define ('_JOMRES_STATUS_CANCELLED', 'בוטל');
jr_define ('_JOMRES_STATUS_PUBLISHED', 'יצא לאור');
jr_define ('_JOMRES_STATUS_NOT_PUBLISHED', 'לא פורסם');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'אורחים עם הזמנות פעילות');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'אורחים עם הזמנות קודמות');
jr_define ('_JOMRES_STATUS_BOOKINGS', 'הזמנות');
jr_define ('_JOMRES_STATUS_SUBSCRIPTIONS', 'מינויים');
jr_define ('_JOMRES_STATUS_COMMISSIONS', 'עמלות');
jr_define ('_JOMRES_STATUS_ALL_PROPERTIES', 'כל העסקים שלי');
jr_define ('_JOMRES_ACTION_SET_CURRENT', 'הגדר כרגע');
jr_define ('_JOMRES_ACTION_CHECKIN', 'קבלה');
jr_define ('_JOMRES_ACTION_CHECKOUT', 'בדוק');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'הזמנות');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'נכסים');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'אורחים');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'דיווחים');
jr_define ('_JOMRES_HLIST_GUESTS', 'אורחים');
jr_define ('_JOMRES_HLIST_GUESTS_MENU', 'רשימת אורחים');
jr_define ('_JOMRES_HLIST_INVOICES_MENU', 'רשימת חשבוניות');
jr_define ('_JOMRES_HLIST_PROPERTIES', 'נכסים');
jr_define ('_JOMRES_HQUICK_BOOKING', 'הזמנה מהירה');
jr_define ('_JOMRES_HDATE_OF_BOOKING', 'תאריך ההזמנה');
jr_define ('_JOMRES_HTWO_WEEKS', 'שבועיים');
jr_define ('_JOMRES_BOOKING_CANCELLATION_WARNING', 'הזמנה זו תבוטל. לחץ על אישור לביטול ההזמנה.');
jr_define ('_JOMRES_HOVERVIEW_CHECKINS', 'היום צ ק -אין');
jr_define ('_JOMRES_HOVERVIEW_CHECKOUTS', 'היום קופות');
jr_define ('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'תושבים נוכחים');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION', 'מיקום סרגל הניווט');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'ברירת מחדל (אזור תוכן)');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'תוקן למעלה');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'תוקן לתחתית');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'סרגל ניווט הפוך (שינוי צבע)');
jr_define ('_JOMRES_BOOKING_NUMBER', 'מספר הזמנה');
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'הצג אורחים עבור');
jr_define ('_JOMRES_BOOTSTRAP_VERSION', 'גירסת Bootstrap');
jr_define ('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres כולל ערכות תבניות משלה, אחת לכל גירסה נתמכת של Bootstrap. תבניות/ערכות נושא של Joomla ו- Wordpress המבוססות על Bootstrap יציעו גרסה ספציפית של Bootstrap, כך שעליך לוודא שהאפשרות שתבחר כאן תואם את התבנית/העיצוב שלך. אם ערכת הנושא שלך אינה מספקת קוד Bootstrap, הגדר אפשרות זו ל- No Bootstrap Theme ואז Jomres יכלול באופן אוטומטי קבצי Bootstrap 3 לשימוש עצמי. ");
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'הצג אורחים עבור');
jr_define ('_JOMRES_HFIXED_PERIODS', 'תקופות קבועות');
jr_define ('_JOMRES_HDEPOSITS', 'פיקדונות');
jr_define ('_JOMRES_HBOOKING_FORM', 'טופס הזמנה');
jr_define ('_JOMRES_HREQUIRED_FIELDS', 'שדות חובה');
jr_define ('COMMON_PLACEHOLDER_FIRSTNAME', 'טום');
jr_define ('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define ('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define ('COMMON_PLACEHOLDER_STREET', 'הרחוב שלי');
jr_define ('COMMON_PLACEHOLDER_TOWN', 'העיר שלי');
jr_define ('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_PROPERTYNAME', 'המלון שלי');
jr_define ('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define ('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define ('EXTENDED_CONFIGURATION', 'תצורה מורחבת');
jr_define ('SIMPLE_CONFIGURATION', 'תצורה פשוטה');
jr_define ('_JOMRES_HRESOURCE_FEATURES', 'תכונות משאבים');
jr_define ('_JOMRES_HRESOURCE_TYPE', 'סוג משאבים');
 jr_define ('_JOMRES_HEDIT_GUEST_TYPE', 'ערוך סוג אורח');
jr_define ('_JOMRES_HEDIT_COUPON', 'ערוך קופון');
jr_define ('_JOMRES_HEDIT_EXTRA', 'ערוך תוספת');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'צור מספר משאבים');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'צור משאבים');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'כמה משאבים?');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'סוג משאבים');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'מקסימום אורחים לכל משאב');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'למחוק את כל המשאבים הקיימים?');
jr_define ('DATATABLES_SINFO', 'מציג _START_ עד _END_ מתוך _TOTAL_ ערכים');
jr_define ('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'אישור');
jr_define ('_JOMRES_BOOKING_REJECT_INQUIRY', 'דחה חקירת הזמנה');
jr_define ('_JOMRES_BOOKING_APPROVE_INQUIRY', 'אשר בקשת הזמנה');
jr_define ('_JOMRES_STATUS_APPROVED', 'אושר');
jr_define ('_JOMRES_STATUS_REJECTED', 'נדחה');
jr_define ('_JOMRES_STATUS_INQUIRY', 'חקירה');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'הזמנות דורשות אישור או אישור זמינות?');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'אם ההגדרה היא כן, כאשר ההזמנה תתבצע, היא לא תופיע ביומני הזמינות (ואורחים אחרים עדיין יכולים להזמין את אותם ימים ומשאבים) עד שמנהל הנכס יקבל/יאשר את הזמינות להזמנה . לאחר האישור, ההזמנה מוכנסת כזמנית (אם לא מבטלת הזמנות אחרות; אורחים אחרים אינם יכולים להזמין את אותם תאריכים יותר) ונשלח מייל ללקוח לביצוע התשלום. ');
jr_define ('_JOMRES_ERROR', 'שגיאה');
jr_define ('_JOMRES_ERROR_MESSAGE', 'מצטערים! אירעה שגיאה בעת ניסיון לעבד פונקציה זו. היא דווחה עבורך ונבדוק אותה.');
jr_define ('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'הוֹדָעָה');
jr_define ('_JOMRES_ERROR_DEBUGGING_FILE', 'קובץ');
jr_define ('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define ('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'תבניות דוא"ל');
jr_define ('_JOMRES_EMAIL_TEMPLATES_EDIT', 'ערוך תבנית דוא"ל');
jr_define ('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'נושא האימייל');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TEXT', 'טקסט בדוא"ל');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TYPE', 'סוג דוא"ל');
jr_define ('_JOMRES_EMAIL_TEMPLATES_NAME', 'שם אימייל');
jr_define ('_JOMRES_EMAIL_TEMPLATES_DESC', 'תיאור דוא"ל');
jr_define ('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'אנא עיין בדף זה לעזרה בהתאמה אישית של הודעות הדוא"ל ורשימת הפלט הזמין: <a href = "http://www.jomres.net/manual/property-managers-guide/48-your -toolbar/settings/254-email-templates" target ="_blank"> עזרה בתבניות דוא"ל </a> ');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Admin Site New Email מייל');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'אימייל נשלח למנהל האתר בעת ביצוע הזמנה חדשה, אם השער העולמי של Paypal מופעל');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'דואר אלקטרוני להזמנה של מלון חדש');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'דוא"ל נשלח לבעל הנכס בעת ביצוע הזמנה חדשה');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'דואר אלקטרוני להזמנה חדשה');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'מייל נשלח לאורח בעת ביצוע הזמנה חדשה');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'מכתב אישור אורח');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'מכתב או אימייל להדפסה שניתן לשלוח ידנית על ידי בעל הנכס לאישור הזמנה');
jr_define ('_JOMRES_CAN_BE_APPROVED', 'ניתן לאשר הזמנה זו. כל המשאבים שנבחרו זמינים לתאריכים שנבחרו.');
jr_define ('_JOMRES_CANT_BE_APPROVED', 'לא ניתן לאשר הזמנה זו מכיוון שחלק מהמשאבים כבר הוזמנו לתאריכים שנבחרו. תחילה עליך לשנות את ההזמנה.');
jr_define ('_JOMRES_SHOW_POWEREDBY', 'הצג את הקישור Powered by Jomres בכותרת התחתונה של Jomres.');
jr_define ('GUEST_BUDGET', 'תקציב');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH', 'השתמש בתכונת תקציב?');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH_DESC', "אתרים עם רק אתחול בלבד! תכונת התקציב היא תכונה של רשימת הנכסים שאורח יכול להשתמש בה כדי להדגיש עבורם נכסים שמחירם ללילה נמצא תחת נתון מסוים. לתכונה יש כמה מגבלות בכך שהיא עשויה לא יהיה מתאים לאתרים מסוימים המשתמשים במטבעות רבים ושונים. שים לב, אם אתה משתמש בתוסף זה ובתוספים של רישומים מוצגים, מחלקת עטיפת הרישומים המופיעים שלך משתנה אוטומטית ל'פאנל-ראשי 'כאשר רשימת הנכסים מוצגת. ");
jr_define ('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'שם:');
jr_define ('_JOMRES_FOR', 'For');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHT', 'לילה');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHTS', 'לילות');
jr_define ('_JOMRES_LIVE_SCROLLING', 'להשתמש בגלילה חיה/גלילה אינסופית ברשימת הנכסים?');
jr_define ('_JRPORTAL_MONTHS_SHORT_0', 'יאן');
jr_define ('_JRPORTAL_MONTHS_SHORT_1', 'פברואר');
jr_define ('_JRPORTAL_MONTHS_SHORT_2', 'מרץ');
jr_define ('_JRPORTAL_MONTHS_SHORT_3', 'אַפּרִיל');
jr_define ('_JRPORTAL_MONTHS_SHORT_4', 'מאי');
jr_define ('_JRPORTAL_MONTHS_SHORT_5', 'יוני');
jr_define ('_JRPORTAL_MONTHS_SHORT_6', 'יולי');
jr_define ('_JRPORTAL_MONTHS_SHORT_7', 'אוגוסט');
jr_define ('_JRPORTAL_MONTHS_SHORT_8', 'סֶפּטֶמבֶּר');
jr_define ('_JRPORTAL_MONTHS_SHORT_9', 'אוֹקְטוֹבֶּר');
jr_define ('_JRPORTAL_MONTHS_SHORT_10', 'נוֹבֶמבֶּר');
jr_define ('_JRPORTAL_MONTHS_SHORT_11', 'דֵצֶמבֶּר');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', '_START_ עד _END_ מתוך _TOTAL_ רשומות');
jr_define('DATATABLES_SINFOEMPTY', '0 עד 0 מתוך 0 רשומות');
jr_define('DATATABLES_SINFOFILTERED', '(מסונן מסך _MAX_  רשומות)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'הצג _MENU_ פריטים');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'מעבד...');
jr_define('DATATABLES_SSEARCH', 'חפש:');
jr_define('DATATABLES_SZERORECORDS', 'לא נמצאו רשומות מתאימות');
jr_define('DATATABLES_SFIRST', 'ראשון');
jr_define('DATATABLES_SLAST', 'אחרון');
jr_define('DATATABLES_SNEXT', 'הבא');
jr_define('DATATABLES_SPREVIOUS', 'קודם');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define ('DATATABLES_SHOWHIDE', 'שנה עמודות');
jr_define ('_BOOKING_ONREQUEST', 'הזמנה לפי בקשה');
jr_define ('_BOOKING_INSTANT', 'הזמנה מיידית');
jr_define ('_JOMRES_COM_FONTAWESOME', 'לכלול סט גופן מדהים?');
jr_define ('_JOMRES_COM_FONTAWESOME_DESC', 'הגדר זאת ל- Yes אם התבנית שלך אינה כוללת Font Awesome.');
jr_define ('_BOOKING_CALCQUOTE', 'בקשת הזמנה');
jr_define ('_JOMRES_COM_CONFIRMATION_DEAR', 'יקר');
jr_define ('_JOMRES_MULTISITES_SELECT_A_SITE', 'בחר אתר');
jr_define ('_JOMRES_MULTISITES_MULTISITES_LABEL', 'מזהה אתר');
jr_define ('_JOMRES_IS_EU_COUNTRY', 'מדינת האיחוד האירופי?');
jr_define ('_JOMRES_HLASTCHANGED', 'השתנה לאחרונה');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'דוא"ל ביטול הזמנת מלון');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'דוא"ל נשלח לבעל הנכס כאשר הזמנה חדשה מבוטלת');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Email ביטול הזמנה לאורחים');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'דוא"ל נשלח לאורח כאשר הזמנה חדשה מבוטלת');
jr_define ('_JOMRES_TEST_EMAIL_SEND', 'שלח דוא"ל לבדיקה');
jr_define ('_JOMRES_TEST_EMAIL_SUBJECT', 'בדוק מייל');
jr_define ('_JOMRES_TEST_EMAIL_CONTENT', 'זוהי הודעת דוא"ל לבדיקה ממערכת ההזמנות שלך.');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'דוא"ל בדיקה נשלח בהצלחה');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'דוא"ל הבדיקה לא נשלח');
jr_define ('_INVOICE_TRANSACTIONS', 'עסקאות');
jr_define ('_OPENEXCHANGE_API', 'Open API Rates Exchange Key');
jr_define ('_OPENEXCHANGE_API_DESC', 'כדי להמיר מחירים בין שירותים תזדקק למפתח API של Exchange Exchange Rates. עליך להיות בעל מפתח API כדי להציג מחירים בצורה נכונה ב- Jomres, אולם תוכל <a href = "https://openexchangerates.org /signup/free" target="_blank"> הירשם למפתח בחינם </a> (עדכונים לפי שעה, 1000 בקשות לחודש - ללא HTTPS, תמיכה בדוא"ל או תכונות מתקדמות). Jomres מוריד שערי חליפין פעם ביום, כל עוד אתה משתמש במפתח בכמה אתרים בלבד, לא סביר שתחרוג ממגבלות אלה. לפני Jomres 8.3 השתמשנו בתכונה ישנה יותר ללא תיעוד של Yahoo אולם גילינו ששימוש בתכונה זו עומד בסתירה לתנאי Yahoo תנאים. כתוצאה מכך עלינו להניח שהתכונה עשויה להיעלם בשלב כלשהו בעתיד, ומכאן השינוי לשימוש בשערי Exchange Exchange. ');
jr_define ('_JOMRES_COMMISSION', 'Commission');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'אם תעלה תמונות מרובות לתוספות אופציונליות בודדות, רק התמונה הראשונה תשמש.');
jr_define ('_JOMRES_COMMISSION', 'Commission');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'אם תעלה תמונות מרובות לתוספות אופציונליות בודדות, רק התמונה הראשונה תשמש.');
jr_define ('_JRPORTAL_INVOICES_PAYNOW', 'שלם עכשיו');
jr_define ('_JRPORTAL_INVOICES_PAYNOW_DESC', 'חשבונית זו עומדת לפירעון. לחץ על הלחצן לבחירת אמצעי התשלום.');
jr_define ('_JOMRES_EXTRAS_TEMPLATE', "להלן רשימה של כמה מהדברים הנהדרים שתוכל לרכוש בעת ביצוע הזמנה בנכס זה.");
jr_define ('GATEWAYS_INSTRUCTIONS', 'בדף זה תוכל להגדיר כל שער מותקן. אפשרויות אלה מאפשרות לך לקחת תשלומים עבור כל חשבוניות עמלה או מנויים. ניתן לבטל הגדרות Frontend רק על ידי Paypal, כל שאר השערים יצטרכו להיות מוגדרים באמצעות תצורת נכס -> הכרטיסייה שערים, אולם אם מופיע שער ברשימה זו הוא אמור להיות מסוגל לעבד הן תשלומי הפקדת הזמנה והן תשלומי חשבונית. ');
jr_define ('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'הצג בדף פרטי הנכס?');
jr_define ('PROPERTY_DETAILS_PAGE_OPTIONS', 'הגדרות דף פרטי נכס');
jr_define ('_JOMRES_HLIST_PROPERTIES_WARNING', 'ניהול נכסים ב- Jomres מבוצע רק מהקופון הקדמי של האתר. בדף זה תוכל לרשום את כל הנכסים במערכת, כך שתוכל להקצות תעריפי עמלות ולאשר/לבטל אותם (אם אלה תכונות מופעלות). כדי ליצור נכס חדש, לערוך נכסים קיימים, לנהל הזמנות או כל משימות אחרות הקשורות לנכס/הזמנות, יהיה עליך להיכנס לממשק האתר וללכת לדף ברירת המחדל של Jomres. שם תראה את Jomres frontend cpanel. ');
jr_define ('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'סמלים של תכונות החדר');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'קטגוריות תכונת נכסים');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'ערוך קטגוריית תכונת נכסים');
jr_define ('_JOMRES_HCATEGORY', 'Category');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'הצג תכונות נכס המופרדות לקטגוריות?');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'הגדר זאת ל- YES כדי להפריד בין תכונות הנכס לקטגוריות. אפשרות זו משפיעה רק על מאפייני הנכס המוצגים בדף פרטי הנכס. כל שאר הדפים יציגו אותם מבלי לחלק אותם לקטגוריות.');
jr_define ('_JOMRES_ACTION_UNDO_CHECKIN', 'בטל צ ק -אין');
jr_define ('_JOMRES_ACTION_UNDO_CHECKOUT', 'בטל קופה');
jr_define ('_JOMRES_STATUS_UNISSUED', 'לא הונפק');
jr_define ('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID', 'מפתח ההורדות והתמיכה שלך תקף, תוכל להוריד תוספים באמצעות מנהל התוספים.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_INVALID', 'מפתח ההורדה והתמיכה שלך אינו תקף, לא תוכל להוריד תוספים באמצעות מנהל התוספים.');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE', 'תת-סוג');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "עדיין לא הגדרת את תת-סוג הנכס שלך. כאן אתה מגדיר אותו כמו וילה עם 5 חדרי שינה או קוטג 'עם 4 חדרי שינה וזה עוזר לאורחים שמחפשים לחדד את החיפושים שלהם.") ;
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'תן לנכס סוג משנה');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'תבניות דוא"ל');
jr_define ('_JOMRES_CONTACT_SETTINGS', 'הגדרות איש קשר');
jr_define ('_JOMRES_CONTACT_SETTINGS_DESC', 'מכאן תוכל לעקוף את כל פרטי הקשר של הנכסים (דוא"ל, טלפון, פקס) כך שכל התקשורת עם האורחים תישלח אליך ולא לבעלי הנכס.');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'לעקוף את פרטי הקשר של רישומים?');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "אם אפשרות זו מוגדרת ל- כן אז כתובות הדוא ל והמספרים של הנכס יוחלפו בכתובות המוגדרות בכרטיסייה זו. פעולה זו מחייבת לשלוח את כל התקשורת לכתובת הדוא ל המועמדת שלך ולוודא שהאורח והנכס יבטיחו שהאורח והנכס יותקנו. הבעלים אינו יכול לעקוף את מנוע ההזמנות ואת דמי העמלה שיגרמו לכך. המשמעות היא גם שבכל פעם שתאור הנכס ישתנה הנכס יוגדר כבלתי מאושר (אם תכונת האישורים מופעלת) ותצטרך לבדוק את התיאור באופן ידני. כדי לוודא שהמנהלים לא הכניסו פרטי טלפון או דוא ל לשדות הטקסט לפני שאישרו אותם שוב. ");
jr_define ('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'שינויים שבוצעו בפרטי הרישום דורשים אימות מנהל האתר. אם תשמור פרטים חדשים, הרישום שלך יפורסם ותמתין לאישור מנהל האתר לפני שהוא יהיה גלוי שוב למבקרים באתר. לא תוכל לקבל מקוון. הזמנות בזמן שהרישום שלך אינו מתפרסם וממתין לאישור. ');
jr_define ('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'בדוק בקשת הזמנה');
jr_define ('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'אשר בקשת הזמנה');
jr_define ('_JOMRES_BOOKING_ENQUIRY_AMEND', 'שנה בקשת הזמנה');
jr_define ('_JOMRES_INVOICE_MARKASPENDING', 'סמן חשבונית בהמתנה');
jr_define ('_JOMRES_INVOICE_MARKEDASPENDING', 'חשבונית מסומנת כממתינה');
jr_define ('_JOMRES_TRACKING_ENABLE', 'שלח נתוני מעקב אנונימיים?');
jr_define ('_JOMRES_TRACKING_ENABLE_DESC', 'בחר כן כדי לשלוח נתוני מעקב אנונימיים ל- Jomres.net כדי לעזור לנו להבין טוב יותר כיצד אתה משתמש במערכת.');
jr_define ('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'אנא ודא שפרטיך הושלמו בדף עריכת החשבון שלי לפני שתנסה לבצע הזמנות בשם לקוחותיך.');
jr_define ('_JOMRES_PARTNERS_GUEST_ADDRESS', "פרטי יצירת הקשר של האורח");
jr_define ('_JOMRES_CLEAR_GUEST_DETAILS', ' - אורח חדש -');
jr_define ('_JOMRES_CHARTS', 'תרשימים');
jr_define ('_JOMRES_CHARTS_SELECT', 'בחר תרשים ...');
jr_define ('_JOMRES_CHART_BOOKINGS_DESC', 'הכנסה לפי שנה/חודש');
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "אוקיי, נתחיל. ראשית עליך ליצור כמה חדרים לנכס זה.");
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'צור כמה חדרים עכשיו');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'מחקר הוכיח שנכסים עם הרבה תמונות באיכות גבוהה מייצרים יותר צפיות. העלה תמונה ראשית וכמה תמונות של מצגת כדי לשפר את הסיכויים שלך להזמנות.');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'העלה תמונה');
jr_define ('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'צור כמה תעריפים');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG', 'מה יזמינו אורחים?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'האם נכס זה הוא נכס מסוג מלון, שבו אתה משכיר חדרים בנכס, או נכס מסוג וילה, שבו אתה משכיר את כל הנכס בהזמנה אחת?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'חדרים בנכס');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'הנכס כולו');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'שניהם'); // זוהי הגדרת ביניים המעניקה תאימות לאחור למשתמשים קיימים שטרם עדכנו את סוגי הנכסים שלהם. זה לא יהיה ניתן לבחירה
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'מה יזמינו האורחים?');
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK', "יהיה עליך להשלים את פרטי הכתובת שלך כדי שהאורחים שלך יוכלו למצוא אותך בבואם להישאר.");
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'עדכן את כתובתך');
jr_define ('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'אופס, נראה שאולי שכחת להשלים את כל השדות.');
jr_define ('_JOMRES_CONTANT_US', 'צור איתנו קשר');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'ברוכים הבאים לרישום המקוון החדש שלך עבור');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_1', 'שלום וברוכים הבאים לנכס החדש שלך ב-');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_2', "לאחרונה הוספת נכס חדש לאתר שלנו, ואנו רוצים לברך אותך למשפחה.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3', 'אתה יכול לראות את לוח המחוונים החדש שלך');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'כאן');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4', "לאחר שתגדיר את הנכס שלך תוכל לראות כיצד הוא נראה למבקרים באתר על ידי ביקור");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'העמוד הראשון שלך.');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_5', "(זה לא פורסם, כך שמבקרי האתר לא יכולים לראות זאת עדיין).");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_6', "בחלק העליון של הדף תראה מספר הודעות. הלחצנים שלצד ההודעות האלה יובילו אותך לדפים שאתה צריך לבקר בהם כדי להגדיר את הנכס שלך באתר שלנו. ברגע שאתה ' ביצעתי כל אחת מהמשימות הללו יהיה הרבה יותר קל למבקרים באתר שלנו למצוא את הנכס שלך ולבצע הזמנות באינטרנט. ");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7', 'אם יש לך שאלות בכלל, בבקשה');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'צור איתנו קשר');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_8', "ונשמח לענות על כל השאלות שלך.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'כל הכבוד, הצוות שלנו ב');
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK', "לא נראה שיש לך סיורים למכור. צור פרופיל סיור ולאחר מכן השתמש בכפתור צור כדי ליצור כמה סיורים.");
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "בואו ניצור כמה סיורים!");
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP', 'החלף מיקום סמל מטבע');
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'השתמש באפשרות זו כדי להעביר את סמל המטבע מאחור, אל מול נתון המחיר, או להיפך.');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'הזן את מזהה דף הפייסבוק שלך, לדוגמה "jomres". השאר ריק זה כדי שלא יראה כלום. אל תזין https://www.facebook.com או כל דבר אחר.');
jr_define ('COMMON_DOWNLOAD', 'הורדה');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'בשלב הבא תצטרך להוסיף כמה תעריפים. אלה המחירים הבסיסיים שלך.');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap אינו מופעל!');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING', 'אזהרה, אין לך Bootstrap מופעל בתצורת האתר של Jomres -> הכרטיסייה שונות. כדי לספק <i> כמה </i> פונקציות Jomres משתמשת כעת בתבניות הישנות של JQuery UI, אולם לא עבדו על אלה מספר שנים. כל הפיתוח והשיפורים הנוכחיים של תבניות Jomres (קבצי פריסה) נעשים בקובצי תבנית Bootstrap 3 שלה. כדי להפיק את המיטב מ- Jomres אנו ממליצים להתקין קובץ Bootstrap 3 מבוסס. נושא עבור וורדפרס או ג ומלה. לאחר שתעשה זאת תוכל להפעיל Jomres \'תבניות Bootstrap בתצורת האתר.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'מפתח התמיכה שלך תקף. שים לב כי רישיון זה אינו מאפשר הורדת תוספים.');
jr_define ('_JOMRES_DASHBOARD_DRAG_TRASH', 'גרור הזמנות לאזור זה כדי לבטל אותן');
jr_define ('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define ('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define ('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'אנא ודא שיצרת דף וורדפרס המכיל את קוד הקיצור [jomres: xx-XX] (כאשר xx-XX הוא קוד שפת האתר שלך, למשל [jomres: en-GB] או [ jomres: en-US]) אחרת לא תוכל לגשת ל- Jomres מהחזית כדי לנהל את הנכסים וההזמנות שלך. ');
jr_define ('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'לרוב הנכסים בג ומרס יש תהליך ניהול השכרה. מלונות/צימרים/פנסיונים משכירים חדרים בודדים, ובקתות/וילות/דירות משכירות את כל הנכס. זה אינו נראה למנהל הנכס, אך מבחינתם. כדי ליצור תעריפים על הנכס שלהם עליך להוסיף תחילה סוגי חדרים המתאימים לסוג הנכס.
לדוגמה, סוג נכס במלון בדרך כלל יזדקק למספר סוגי חדרים (חדרים זוגיים, חדרי יחיד ותאומים) ואילו בוילה יכול להיות רק סוג חדר אחד, למשל. 2 חדרי שינה, 5 חדרי שינה.
אפשר ליצור סוגי חדרים לנכסים כמו טיולים. זה מאפשר ללקוחות לחפש נכסים כמו סיורים בלבד, אך מנהל הנכס לא ייצור תעריפים עבור סוג נכס זה, ולכן תהליך הניהול אינו רלוונטי עבורם.
');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'לחץ להוספת סוגי חדרים חדשים');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'אזהרה, יש לך סוג נכס אחד או יותר ללא סוגי חדרים. נכסים זקוקים לסוגי חדרים כדי שמנהלי נכסים יוכלו ליצור תעריפים.');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'השתמש בלחצן חדש ליצירת סוגי חדרים חדשים.');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'סיורים');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'אין הזמנות/נדל"ן (רישום פשוט)');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION', 'מיקום קובץ יומן');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs default system as default to the' .JOMRES_SYSTEMLOG_PATH. "location. מכיוון שקובץ זה עשוי להכיל מידע רגיש (מפתחות api, נתיבי מערכת, פרטי שער, מידע על אורחים) אנו ממליצים בחום לשנות נתיב זה. לאחד שמעל לשורש מסמכי האינטרנט שלך. אם אינך מבין מה פירוש הדבר, אנא שאל את מארחי האינטרנט שלך לייעוץ מכיוון שהם יכירו את מערכת הקבצים שלך. ");
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres רושם מידע מפורט אודות המערכת שלך, כולל מפתחות API, נתיבי מערכת, שער ופרטי אורח, שכולם לא צריכים להיות גלויים לשאר האינטרנט. נתיב יומן המערכת שלך אינו מוגדר, ולכן יומני המערכת נשמרים כעת בספרייה '.JOMRES_SYSTEMLOG_PATH.', וזה לא אידיאלי. בקר בתצורת אתרים -> איתור באגים והגדר נתיב במערכת הקבצים שלך הנמצא מחוץ לשורש האינטרנט. אם יש לך ספק, אנא צור קשר עם מארחי האינטרנט שלך כפי שהם יוכלו לייעץ לך. ');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'אם CMS שלך מותקן בספריית השורשים של האתר שלך, אז מיקום מתאים יהיה');
jr_define ('_JOMRES_CONFIG_GMAP_KEY_WARNING', "אין לך ערכת מפתח של מפות Google. עקב שינויים אחרונים במפות Google, כל האתרים החדשים יצטרכו מפתח API כדי שתוכל להשתמש בתכונות של מפת Google. אנא <a href = 'http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'> עיין בדף המדריך שלנו בנושא יצירת מפתח API < /a> ושמור את המפתח ב- Jomres. ");
jr_define ('JOMRES_GOOGLE_MAP_STYLE', 'ערכת הצבעים של מפות Google');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "נכון, בואו נתחיל להוסיף את הנכס שלכם לאתר. עלינו לאסוף כאן מעט מידע על הנכס שלכם. זה יאפשר לנו להגדיר את העצמות החשופות של הנכס שלכם. לאחר שתסיים, אז אתה יונחה באמצעות הוספת חדרים, מחירים ותמונות. ");
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'סוג הנכס עוזר לך להגדיר את אופן הזמנת הנכס, למשל במלונות שאתה "מוכר" רק חדר אחד או שניים בכל פעם, ואילו עם וילות אתה מציע את הנכס כולו.');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "שים לב שכתובת הדוא ל לא צריכה להיות זהה לזו שבה השתמשת בעת רישום החשבון שלך. כך תוכל לקבל כתובות שונות לנכסים שונים.");
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'מינימום הפקדה');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'באפשרותך להגדיר את סכום ההפקדה המינימלי לחיוב. אם תעשה זאת, לא ניתן להגדיר את ההגדרות "הפקדה נדרשת היא עלות הלילה הראשון?" ו"ההפקדה נדרשת היא אחוז? "בתצורת הנכס. , במקום זאת כל ערכי ההפקדה הם באחוזים וחייבים להיות לפחות הנתון שאתה מגדיר כאן. ');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'נתון זה אינו יכול להיות נמוך מ-');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "אם ברצונך לשלוח הודעות רישום מערכת לשרת syslog, תוכל להגדיר כאן את שם המארח או ה- IP (למשל 192.168.0.2) והיציאה (למשל 514). שים לב, אם האתר מוגדר כ- ' פיתוח 'ואז יישלחו הודעות DEBUG. אם יוגדר' ייצור 'אז יישלחו רק רמת INFO והודעות גבוהות יותר. כדי להשבית את הרישום לשרת המרוחק, רוקן את שדות המארח והיציאה. ");
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "אסור ל- PHP לגשת לפונקציות PHP של 'openlog' ו- 'syslog'. זוהי הגדרה בצד השרת, אם תרצה ש- Jomres ישלח הודעות לשרת syslog, אנא התייעץ עם המארחים שלך ואשר אם ל- PHP מותר לגשת לפונקציות אלה. לאחר שתופעל, תוכל להגדיר את הגדרות שרת syslog שלך כאן. ");
jr_define ('_JOMRES_SEND_ERROR_EMAIL', 'שלח הודעת דוא"ל למנהל האתר כאשר מתרחשת שגיאה?');
jr_define ('_JOMRES_SEND_ERROR_EMAIL_DESC', "נושאים היסטוריים שכדאי לחקור נשלחו בדואר אלקטרוני לבעלי אתרים. זה יכול להיות מצוין כדי לעקוב אחר הפעלת המערכת מכיוון שיש לה הרבה חלקים נעים וקשה לעקוב אחריהם כולם. למרבה הצער, עכבישים ובוטים שסורקים אתרים שלך (אפילו ידידותיים) עלולים לעורר בטעות שגיאות קטלניות וזה יכול לגרום למספר ההודעות שאתה מקבל להיות מכריע. אם זה המצב, הגדר אפשרות זו למספר. ג'ומר שולח רישום. הודעות הן לסט של קבצי רישום והן לשרת syslog (אם הגדרות ה- PHP הספציפיות שלך מאפשרות, אם הן לא צרי קשר עם המארח שלך). תוכל לנתח את הקבצים באופן ידני אם אתה מחפש משהו ספציפי (למשל, אם אתה מפתח שער ורוצה להשתמש בשיחת הפונקציה gateway_log ().) אבל זה הרבה מידע לסחוב דרכו אז עדיף להשתמש במשהו כמו מנתח קבצים syslog. אם אתה מפתח על לינוקס אז יש הרבה כלים זמינים עבורך, אם ב- Windows כלי פשוט שתוכל להשתמש בו הוא http://maxbelkov.github.io/visualsyslog/ בדף זה הגדר את 'מארח Syslog' ל- '127.0.0.1' ו- ' יציאה 'אל 514 כדי לראות הודעות המחוברות בכלי זה. ");
jr_define ('_JOMRES_MANAGE_PROPERTIES', 'ניהול נכסים');
jr_define ('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "אין לך ערכת מפתח API לזיהוי IP. זה נדרש על מנת לאפשר למערכת לזהות אוטומטית את מיקומו של המשתמש ולהגדיר את המטבע והמדינה שלו באופן אוטומטי. אנא <a href = 'http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> עיין במדריך שלנו דף כיצד ליצור מפתח API לזיהוי IP </a> ולשמור את המפתח ב- Jomres> תצורת אתרים> המרות מטבע / קודי מטבע. ");
jr_define ('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "אין לך ערכת מפתח API של Exchange Exchange Rates. זה נדרש על מנת לאפשר למערכת להוריד ולהשתמש אוטומטית בשערי חליפין. אנא <a href = 'http://www.jomres.net /manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-tab' target='_blank'> עיין בדף המדריך שלנו בנושא צור מפתח API לזיהוי IP </a> ושמור את המפתח ב- Jomres> תצורת אתרים> המרות מטבע / קודי מטבע. ");
jr_define ('_JOMRES_PERMIT_NUMBER_TITLE', 'מספר הרשאה');
jr_define ('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'מדינות מסוימות מחוקקות שעליך להציג מספר אישור לנכס שלך. אם יש לך מספר כזה, הזן אותו כאן והוא יתווסף לקטע כותרת הנכס.');
jr_define ('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define ('_JOMRES_SHORTCODES_INFO_JOOMLA', "ה <strong> plg_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot plugin חייב להיות מותקן ומאפשר לתפעול קיצורי דרך אלה. ניתן למצוא זאת במנהל התוספים של Jomres. אם האתר הזה נבנה באמצעות תוסף אחד של Jomres. Quickstarts אז כנראה שהוא כבר מותקן. ");
jr_define ('_JOMRES_SHORTCODES_INFO_WORDPRESS', "עליך לוודא שפלאגין ה <strong> 'Jomres Shortcodes' </strong> מופעל. ניתן למצוא זאת במנהל התוספים של Jomres. אם אתר זה נבנה באמצעות אחד מ- Quickstarts אז כנראה שהוא מופעל. כבר מותקן.");
jr_define ('SHORTCODE_TASK', 'משימה');
jr_define ('SHORTCODE_DESCRIPTION', 'תיאור');
jr_define ('SHORTCODE_ARGUMENTS', 'טיעונים');
jr_define ('SHORTCODE_EXAMPLE', 'דוגמה');
jr_define ('INTEGRITY_CHECK', 'בדוק את קבצי מערכת התקינות');
jr_define ('INTEGRITY_CHECK_DESC', 'תכונה זו מאפשרת לך לבדוק שמערכת הקבצים תואמת את זה שסופקה בגירסה הנוכחית של Jomres. זה שימושי להבטיח שכל הקבצים עודכנו כראוי לאחר ההתקנה/השדרוג. חסרים קבצים באדום, קבצים ב- כתומים קיימים אך שונים מאלו שסופקו במבנה הנוכחי. רק מסמכים שהם בעיות פוטנציאליות יפורטו כאן. ');
jr_define ('INTEGRITY_CHECK_FILENAME', 'בדוק את קבצי מערכת התקינות');
jr_define ('INTEGRITY_CHECK_LOCALHASH', 'Hash מקומי');
jr_define ('INTEGRITY_CHECK_BUILDHASH', 'hash hash');
jr_define ('INTEGRITY_CHECK_NOPROBLEMS', 'מדהים! לא נמצאו בעיות.');
jr_define ('_JOMRES_PROPERTYTYPE_MARKER', 'סמן מפות גוגל');
jr_define ('_JOMRES_JAVASCRIPT_READMORE', 'קרא עוד');
jr_define ('_JOMRES_JAVASCRIPT_READLESS', 'קרא פחות');
jr_define ('_JOMRES_TOURIST_TAX_TITLE', 'מס תיירות');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE', 'שיעור מס תיירים');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'הגדר את שיעור מס התיירים. מס התיירות מחושב רק לאחר יצירת ההזמנה הראשונית, והוא נוסף לדף אישור ההזמנה, בתיבת השירותים הנוספים.');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'האם אחוז?');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "הגדר את זה ל- Yes אם המס הוא אחוז או לא אם זה תשלום קבוע.");
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'משפיע על כל ערך ההזמנה?');
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "הגדר את זה ל- Yes אם המס יכסה את כל ערך ההזמנה, כך שזה אחוז משני האירוח בתוספת התוספות, או לא אם הוא מחושב רק על בסיס הערך של סך מקום האירוח. אם האפשרות 'האם אחוז' למעלה מוגדרת כ'לא ', האפשרות הזו מתעלמת. ");
jr_define ('_JOMRES_TOURIST_TAX_NOTE', 'לידיעתך, מס תיירות יתווסף להזמנה זו. תוכל לראות את המס בדף ההזמנה לביקורת.');
jr_define ('NO_LICENSE_MESSAGE', "לא שמרת מספר רישיון בתצורת האתר, לכן לא תוכל להוריד תוספים. לאחר שמירת מפתח רישיון תקף, תוכל להתקין כל תוספים המופיעים כ- תוספי ליבה. ");
jr_define ('INVALID_LICENSE_MESSAGE', "נראה שאתה משתמש במספר רישיון שאינו חוקי או שפג תוקפו. לאחר שמירת מפתח רישיון תקף תוכל להתקין כל תוספים המופיעים בתור תוספי ליבה.");
jr_define ('VALID_LICENSE_MESSAGE', "מזל טוב, אתה משתמש במספר רישיון תקף ויכול להתקין תוספי Core באמצעות מנהל התוספים של Jomres.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'דף זה מאפשר לך להעלות תמונות לנכס שלך ולדברים שאתה מציע. יש לו כפתור ראשי אחד ולחצן שני המאפשר לך לבחור משאבים ספציפיים להעלות תמונות. לכן, הנכס הראשי. התמונה ומצגת השקופיות יציגו רק כפתור אחד, אך אם יצרת תוספות או חדרים אופציונליים כגון, תראה כפתור שני שבו תוכל להעלות תמונות עבור אותם משאבים ספציפיים. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'דף זה מאפשר לך להעלות תמונות לנכס שלך ולדברים שאתה מציע. יש לו כפתור ראשי אחד ולחצן שני המאפשר לך לבחור משאבים ספציפיים להעלות תמונות. לכן, הנכס הראשי. התמונה ומצגת השקופיות יציגו רק כפתור אחד אך אם יצרת תוספות אופציונאליות תראה כפתור שני שבו תוכל להעלות תמונות עבור אותם משאבים ספציפיים. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> ראשית בחר את התמונות שברצונך להעלות על ידי לחיצה על הוסף תמונה או באמצעות גרירה ושחרור. אלה יופיעו בעמודה בצד ימין. </li>
  <li> מעל אזור זה, השתמש בלחצן \"בחר את המשאב \" כדי לבחור לאיזה משאב אתה רוצה להעלות תמונות. ייתכן שתוצע לך האפשרות לבחור משאב ספציפי מתחת. </li>
  <li> לאחר שבחרת משאב תוכל ללחוץ על הלחצן העלה תמונה מתחת לתמונה כדי לשייך אותו למשאב זה. לאחר העלאת תמונה, היא תיעלם מהעמודה באתר הימני ותופיע בצד שמאל. </Li>
  <li> השתמש בלחצן האשפה שליד התמונות הקיימות כדי להסיר תמונות שכבר אינך מעוניין להציג אותן. </li>
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
jr_define ('_JOMRES_MARKDOWN_BOLD', 'נוֹעָז');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'נטוי');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'חותמת');
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
jr_define ('_JOMRES_SELECT_WIDGETS', "בחר יישומונים");
jr_define ('_JOMRES_INTERVAL', "מרווח");
jr_define ('_JOMRES_TIMELINE', "ציר זמן");
jr_define ('_JOMRES_CPANEL_GRID', "פריסת הבית של לוח הבקרה");
jr_define ('_JOMRES_CPANEL_GRID_DESC', "בחר את פריסת הרשת של דף הבית של לוח הבקרה לניהול נכסי חזית.");

jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "סמני מפות של גוגל");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "תמונות עיר");
jr_define ('_JOMRES_PTYPE_CHANGE_WARNING', "שינוי סוג הנכס ימחק את כל החדרים, התעריפים, הגדרות הנכס ואיפוס הזמינות.");
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'שים לב, לאחר העדכון עליך לעדכן את כל התוספים של Jomres שכבר מותקנים באמצעות מנהל התוספים של Jomres. אם מותקנים לך תוספי Core, אך אין לך רישיון Jomres תקף, אנו <em> עושים זאת לא </em> ממליץ לעדכן את Jomres מכיוון שתוספים ישנים לרוב לא עובדים עם גרסאות חדשות יותר של Jomres. ');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'שים לב, לאחר העדכון עליך לעדכן את כל התוספים של Jomres שכבר מותקנים באמצעות מנהל התוספים של Jomres.');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "אם תרצה לעדכן את Jomres והתוספים שלו תצטרך רישיון לחידוש. בקר ב <a href='https://www.jomres.net/pricing' target='_blank'> שלנו אתר </a> למידע נוסף. ברוב המקרים רישיונות אלה הם 50% ממחיר הרישיון המלא. אנא ודא שנכנסת לחנות שלנו לפני שתנסה לרכוש חידוש. ");
jr_define ('_JOMRES_PAYMENT_METHOD_USED', "אמצעי תשלום:");

jr_define ('_JOMRES_PRICES', "התחבר");

jr_define ('_OAUTH_TITLE', "ניהול מפתחות אפליקציות");
jr_define ('_OAUTH_APPS', "פרטי לקוח REST API");
jr_define ('_OAUTH_IDENTIFIER', "מזהה");
jr_define ('_OAUTH_APIKEY', "מזהה לקוח");
jr_define ('_OAUTH_SECRET', "סוד");
jr_define ('_OAUTH_CREATED', "אפליקציה שנוצרה/עודכנה");
jr_define ('_OAUTH_CLIENT_ID_INFO', "מזהה הלקוח והסוד נוצרים עבורך. המזהה הוא כך שתוכל לזהות בקלות את צמד המפתחות הזה.");
jr_define ('_OAUTH_SCOPE_TITLE', "הרשאות (מה שהלקוח יכול לעשות");
jr_define ('_OAUTH_SCOPE_CATEGORY_USER', "הרשאות משתמש");
jr_define ('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "הרשאות נכס");

jr_define ('API_DOCUMENTATION_TITLE', "תיעוד REST API");

jr_define ('_OAUTH_CONFIG', "תצורת ליבת API");

jr_define ('_OAUTH_CONFIG_SHOW', "הצג אפשרויות תצורה של לקוח API בתפריט הראשי של Jomres?");
jr_define ('_OAUTH_CONFIG_SHOW_DESC', "תוכל לבחור שלא להציג את אפשרויות תצורת לקוח ה- API בקטע 'החשבון שלי' בתפריט הראשי של Jomres. תוכל במקום זאת להחליט שאתה רוצה להציג אותן בדפים אחרים באמצעות קיצורי דרך של Jomres.");

jr_define ('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "מציג את דף תיעוד הליבה של ה- API. Core מאפשר למשתמשים ליצור לקוחות API, המשמשים לאחר מכן לגישה לפונקציונליות ה- API המתוארת בתיעוד ה- Core");

jr_define ('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "מציג את דף ניהול הליבה של ה- API, שבו מנהלי נכסים יכולים להגדיר לקוחות API. שים לב שזוהי תכונה רשומה של משתמש בלבד, לכן יש לרשום משתמשים ולהיכנס לפני שהם יכולים לראות דף זה.");

jr_define ('API_METHODS_TITLE', "שיטות API");
jr_define ('API_METHODS_DESCRIPTION', "רשימת שיטות זו מבוססת על תוספי תכונת ה- API המותקנים שלך ונוצרת באופן אוטומטי. אם תתקין או תמחק תוסף לתכונות API עליך לבקר בדף זה כדי לבנות מחדש את רשימת שיטות ה- API הזמינות באתר שלך. ");

jr_define ('_OAUTH_REDIRECT_URI', "הפניה URI");
jr_define ('_OAUTH_IDENTIFIER_PLACEHOLDER', "תן לי שם בעל משמעות עבורך, כגון הטלפון שלי");

jr_define ('_OAUTH_GRANT_TYPES', "מערכת זו תומכת בשני סוגי מענקים, אישורי לקוח ומשתמע. אם אתה משתמש בזרימה <em> client_credentials </em> אז תזדקק גם לזיהוי הלקוח וגם לסוד הלקוח. אם אתה משתמש ב- <em > מרומז </em> אז היישום שלך היה שולח רק את מזהה הלקוח ואתה תיכנס למערכת כדי לאשר במפורש את האפליקציה הזו. ");

jr_define ('_OAUTH_IMPLICIT_NOTES', "כדי להשתמש בזרימת סוג הענק של <em> מרומז </em>, יהיה עליך להשתמש בכתובת אתר זו כדי לאשר את האפליקציות שלך. כאשר תקרא לכתובת זו ותאשר את האפליקציה שהמערכת תנפיק. אסימון שבו תשתמשו האפליקציות שלכם בכדי לקרוא ל- API של מערכת זו ");
jr_define ('_OAUTH_AUTHORISATION_URL', "כתובת אתר הרשאה");

jr_define ('WEBHOOKS_CORE', 'Webhooks');

jr_define ('_WEBHOOKS_CONFIG_SHOW', "הצג אפשרויות תצורה של Webhook בתפריט הראשי של Jomres?");
jr_define ('_WEBHOOKS_CONFIG_SHOW_DESC', "אתה יכול לבחור לא להציג את אפשרויות התצורה של Webhook בקטע 'החשבון שלי' בתפריט הראשי של Jomres. תוכל במקום זאת להחליט שאתה רוצה להציג אותן בדפים אחרים באמצעות Jomres Shortcodes.");

jr_define ('WEBHOOKS_DOCUMENTATION_TITLE', "תיעוד Webhooks");

jr_define ('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "מציג את דף תיעוד הליבה של ה- API. Core Core מאפשר למשתמשים ליצור לקוחות API, המשמשים לאחר מכן לגישה לפונקציונליות ה- API המתוארת בתיעוד ה- API Core.");

jr_define ('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "מציג את דף הניהול של ממשק ה- API, שבו מנהלי נכסים יכולים להגדיר לקוחות API. שים לב שזוהי תכונה רשומה של משתמשים בלבד, לכן על המשתמשים להיות רשומים ולהיכנס לפני שהם יכולים לראות דף זה.");

jr_define ('WEBHOOKS_INTEGRATION_EDIT', 'ערוך אינטגרציה');
jr_define ('WEBHOOKS_INTEGRATION_ID', 'ID שילוב');
jr_define ('WEBHOOKS_INTEGRATION_URL', 'URL או שם');
jr_define ('WEBHOOKS_ENABLED', 'מופעל');

jr_define ('WEBHOOKS_AUTH_METHOD_SELECT', 'שיטת אימות/אינטגרציה');

jr_define ('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'כל נסיעות אינטרנט שתיצור לא יופעלו מכיוון שאינך מוקצה לנכסים כלשהם. מנהלי נכסי על בדרך כלל אינם מוקצים לנכסים בודדים, כך שתצטרך משתמש חדש ליצירת וו -וו.');
jr_define ('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'כל רשתות אינטרנט שתיצור תופעל כנגד המאפיינים הבאים:');


jr_define ('PORTAL_REVIEWS_LIMIT', 'מגבלת ביקורות');
jr_define ('PORTAL_REVIEWS_LIMIT_DESC', 'השתמש בהגדרה זו כדי להגביל את מספר הביקורות המוצגות בדף פרטי הנכס.');
jr_define ('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'הצג את כל הביקורות');

jr_define ('VIDEO_TUTORIALS', 'הדרכות וידאו');
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'ערך הפקדה מינימלי');
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "אם הפיקדון המחושב קטן מהנתון הזה, הגדר את ההפקדה לערך זה במקום זאת. נתון זה עצמו עשוי להתבטל יתר על המידה אם הוא אינו עומד בהגדרת ההפקדה המינימלית של האתר. השאר אותו על 0 עד אל תשתמש בהגדרה. ");

jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'כדי להגדיל את מהירות האתר שלך, אנו ממליצים לייבא פרטים של תמונות האתר והנכסים הקיימים למסד הנתונים.');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'ייבא פרטי תמונות קיימות למסד הנתונים');

jr_define ('_JOMRES_S3_ACTIVE_DESC', 'תכונה ניסיונית. אם היא מופעלת, תמונות שהועלו באמצעות תכונת מרכז המדיה יועתקו גם לדלי אמזון S3 שלך ויוגשו מכתובת האתר שלך לדלי אמזון S3. כאשר תפעיל זאת בפעם הראשונה, תהיה גם אתה הובא לייבא תמונות קיימות לדלי ה- S3 שלך. ');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN', 'תחום CloudFront');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'החלף את תחום ברירת המחדל של אמזון S3 בדומיין שלך ב- CloudFront');
jr_define ('_JOMRES_S3_SSLTLS_DESC', 'מומלץ להיות מופעל. עבור Windows ו- Mac OSX בלבד, אם libcurl לא נבנה עם תמיכת Schannel או Secure Transport (ספריות SSL המקוריות הכלולות ב- Windows ו- Mac OS X), עליך להגדיר זאת ל- לא.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'הפעלת את שילוב אמזון S3, כך שתצטרך להעתיק את כל התמונות הקיימות לדלי ה- S3 שלך. תמונות מוגשות כעת למבקרי האתר שלך מכתובת ה- S3 שלך ב- Amazon, כך שתצטרך להעתיק אותם תחילה לדלי S3 שלך, אחרת הם לא יהיו גלויים למבקרי האתר שלך. ');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'לאחר שתלחץ על כפתור זה, נא לא להפריע לתהליך ולחכות להצלחה או להודעת שגיאה. בהתאם למהירות השרת, זה עשוי לקחת זמן עד להשלמתו.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'העתק תמונות קיימות לדלי אמזון S3');


jr_define ('JOMRES_INCOMPLETE', 'לא שלם');
jr_define ('JOMRES_WATING_APPROVAL', 'אישור ממתין');
jr_define ('JOMRES_GOOGLE_MAPS_PDETAILS', 'מפת פרטי הנכס');

jr_define ('HAS_STARS_TITLE', 'מאפשר סיווג כוכבים?');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force ייבא מחדש את פרטי התמונה למסד הנתונים');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force העלה מחדש תמונות לדלי S3');
jr_define ('_JOMRES_UNINSTALL_TABLES', 'מחק את כל נתוני Jomres בעת הסרת ההתקנה?');
jr_define ('_JOMRES_UNINSTALL_TABLES_DESC', 'אם יוגדר כן, Jomres ימחק את כל טבלאות מסד הנתונים שלו בעת הסרת ההתקנה. פעולה זו תמחק את כל נתוני Jomres מ- db ולא ניתן לבטל אותם.');

jr_define ('TRANSACTION_IDS', 'מזהה עסקה');
jr_define ('PAYMENT_METHOD', 'אמצעי תשלום');
jr_define ('POA_DISPLAY_PRICE', 'מחיר POA');
jr_define ('POA_DISPLAY_PRICE_DESC', 'כאשר נכסים מוצגים ברשימה, המערכת תנסה למצוא מחיר תקף מתעריפים שהוגדרו על בסיס התאריך של היום, או אם נעשה שימוש בתאריכים בחיפוש, ואז מבוסס על תאריכים אלה. אם זה לא יכול, זה יציג POA (מחיר לפי יישום), כלומר שהאורח צריך ליצור איתך קשר כדי לקבל מחיר. אם תרצה, תוכל להגדיר כאן מחיר שיוצג במקום טקסט POA. נתון זה יהיה מחיר "נסיגה" להצגה אם לא ניתן לקבוע מחיר אחר. ');

jr_define ('PLUGINMANAGER_INSTALL', 'עליך להתקין את מנהל התוספים לפני שתוכל להתקין את תוספי Jomres, האם תרצה לעשות זאת כעת?');
jr_define ('PLUGINMANAGER_REINSTALL', 'עליך לעדכן את מנהל התוספים לפני שתוכל לעדכן כל תוספים מותקנים, האם תרצה לעשות זאת כעת?');
jr_define ('PLUGINMANAGER_INSTALL_BUTTON', "בוא נעשה את זה!");

jr_define ('INCLUDEINFILTERS', 'Include in filters?');
jr_define ('INCLUDEINFILTERS_DESC', 'מסנני תכונות נכס בחיפוש Ajax Composite יכולים להיות ארוכים מאוד, כך שתוכל להגדיר אפשרות זו כ לא כדי למנוע מאפיין זה להופיע ברשימת המאפיינים של הנכסים. ');

jr_define ('REVIEW_REMINDER_PT1', "יש לך");
jr_define ('REVIEW_REMINDER_PT2', "הזמנות שעדיין לא השארת ביקורת עליהן. השאר סקירה.");
jr_define ('BOOKINGS_AWAITING_REVIEWS', "הזמנות ממתינות לביקורות");
jr_define ('REVIEW_NAG', "Nag אורחים לביקורות?");
jr_define ('REVIEW_NAG_DESC', "לאחר שהוזמן אורח מהזמנה, המערכת תזכיר לו לפרסם סקירה של ההזמנה שלהם. הגדר אפשרות זו ל- לא כדי להשבית תזכורת זו.");

jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "לשלוח עותקים של הודעות האימייל למנהלי האתר?");
jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "כשהוא מופעל, העתקים של הודעות האימייל שנשלחו למנהלי הנכסים יישלחו גם לכל מנהלי האתר.");
jr_define ('HIDDEN_ADDRESS_SETTING', "הסתר כתובת?");
jr_define ('HIDDEN_ADDRESS_SETTING_DESC', "אם תגדיר אפשרות זו ל- Yes, רק אורחים שכבר ביצעו הזמנה בנכס שלך יוכלו לראות את כתובת הרחוב של הנכס. ייתכן שתרצה להשתמש בהגדרה זו כדי להסתיר את מיקומו המדויק של הנכס. אם, למשל, הוא נותר ללא השגחה באופן שגרתי. ");
jr_define ('HIDDEN_ADDRESS_PLACEHOLDER', 'HIDDEN');
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'בצע אופטימיזציה של תמונות בהעלאה?');
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'כשהוא מופעל, התמונות יופעלו לאינטרנט (גודל הקובץ יכול להיות עד 75% קטן יותר). בהתאם לסוג התמונה שהועלה, השרת צריך להתקין אחת או יותר מהספריות האלה על ידי המארח ספק: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define ('DATABASE_INTEGRITY_CHECK', 'Check Integrity Database');
jr_define ('OBSOLETE_FILES_CHECK', 'Check Files Checked');
jr_define ('DATATABLES_COLVIS', 'נראות העמודה');

jr_define ('API_TOKEN_LIFETIME', 'חיי אסימון API');
jr_define ('API_TOKEN_LIFETIME_DESC', 'כמה זמן אסימון API נשאר תקף, בשניות. 86400 = יום אחד, 31536000 = שנה');


jr_define ('ENCRYPTION_TITLE', 'הצפנה');
jr_define ('ENCRYPTION_FILE_LOCATION', 'מיקום קובץ הצפנה');
jr_define ('ENCRYPTION_FILE_LOCATION_DESC', '** לעולם אל תמחק את קובץ ההצפנה ** <br/> נתוני משתמשים מאוחסנים מוצפנים בטבלאות כדי לוודא ש"נתונים במנוחה "מוגנים בצורה מאובטחת, בהתאם להמלצות GDPR. כברירת מחדל מפתח ההצפנה. מאוחסן בקובץ "encryption_key.class.php" בשורש התקנת Jomres שלך (בדרך כלל /public_html /jomres). תוכל לשנות את המקום שבו הקובץ מאוחסן כאן. אם אתה משנה את המיקום, עליך להעביר את הקובץ, אל תחכה לג ומרס כדי ליצור גרסה חדשה אחרת לא תוכל לפענח את פרטי האורחים שלך. ');
jr_define ('_JOMRES_COM_YOURBUSINESS_DESC', 'המידע שתשמור כאן ישמש בחשבוניות שנוצרו עבור נכס זה');

jr_define ('_JOMRES_GDPR_POLICIES', 'מדיניות GDPR');
jr_define ('_JOMRES_GDPR_POLICIES_DESC', 'כאן תוכל להגדיר כמה זמן לאחר יצירת הזמנה או חשבונית הוא יוסר מהמערכת כדי לוודא שאתה תואם את ה- GDPR.');

jr_define ('_JOMRES_GDPR_BOOKING_RETENTION', 'תקופת שמירת הזמנות (בימים)');
jr_define ('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'כמה ימים לאחר תאריך יציאת ההזמנה צריך למחוק את ההזמנה? כשהיא נמחקת, גם ההזמנה וגם החשבונית יוסרו. תקופת שמירה טיפוסית עשויה להיות 365 ימים.');

jr_define ('_JOMRES_GDPR_INVOICE_RETENTION', 'תקופת שמירת חשבוניות (ללא הזמנה)');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'חשבוניות אחרות, כגון עמלות וחשבוניות מנוי, אינן קשורות להזמנות. כתוצאה מכך הן לא יימחקו בעת הזמנת חשבוניות וחוזים. בהתאם למדינה שלך ולשיטות עסקיות שלך, יהיה עליך להגדיר תקופת שמירה אחרת. תקופת שמירה טיפוסית עשויה להיות 3653 ימים, שהם 10 שנים. ');


jr_define ('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'הנתונים שלך');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'כמה תכונות של אתר זה צריכות לאחסן מידע על הביקור שלך. זה משמש אך ורק למתן שירות לך, לעולם אינו משותף עם אף אחד אחר ונמחק כשאין בו עוד צורך.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'האם אתה נותן לנו הרשאה לאחסן מידע זה ??');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'בפירוט');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'עליך להסכים לנו לאחסן נתונים אלה על מנת שתוכל לבצע הזמנות באתר זה. לא משנה אם אתה מסכים לאחסון הנתונים שלך או לא, נשמור קובץ cookie במחשב שלך כדי לספר לך לנו אם הצטרפת או לא. זה עוזר לנו להבטיח שלא נשאל אותך כל הזמן אם ברצונך להצטרף או לא, והוא אינו מכיל מידע אישי מזהה (PII). אם תשנה את דעתך אתה יכול לבקר בדף "הרשאות אפליקציה" בכל עת לביטול או ביטול הסכמה. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'המידע נשמר לפרקי זמן שונים בהתאם לאופי הביקור שלך. לכן, אם אתה רק מסתכל מסביב נשמור מידע על מיקום גיאוגרפי משוער (ברמת מדינה). אם תבצע חיפושים, אז עד הפוך את טפסי החיפוש לידידותיים יותר למשתמש אנו נשמור את הדברים האחרונים בהם חיפשת. מידע זה נשמר בדרך כלל למשך 24 שעות לכל היותר והוא משמש רק כדי להפוך את הביקור שלך לנעים יותר. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'כאשר אתה מבצע הזמנה אצלנו, על פי הצורך נשמר מידע נוסף.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'הטכניקות הטופס של טופס ההזמנה נלכדות ונשמרות למשך 60 ימים לכל היותר. הדבר נדרש על מנת שניתן יהיה להפוך הזמנות לפי דרישה להזמנה מלאה לאחר אישור ההזמנה ולניתוח על ידי הצוותים שלנו. במקרה שיש בעיה בהזמנה. אם לא היית מחובר בעת ביצוע ההזמנה, נשלח לך בדוא"ל שם משתמש וסיסמה כדי שתוכל לצפות בהיסטוריית ההזמנות שלך ולממש את זכותך להישכח (RTBF) אם אתה רוצה לעשות זאת. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'נתונים שהוזנו בטופס ההזמנה, למשל שם, כתובת דוא"ל, כתובת אמיתית נשמרת לכל היותר 365 ימים לאחר תאריך היציאה של ההזמנה. מידע זה נשמר בצורה מוצפנת במסד הנתונים שלנו כך שרק אנשים מורשים יוכלו לצפות בה. אם אתה מבצע הזמנה, על פי חוק, עלינו לאחסן את תעודת הזהות שלך בזמן שההזמנה תקפה. תוכל לממש את ה- RTBF שלך על ידי כניסה לביקור בדף "הנתונים שלך". פרטי חשבונית עבור הזמנות שהושלמו עדיין יישמרו בצורה מאובטחת במאגר הנתונים שלנו על מנת להבטיח כי אנו מצייתים לחוקי המס הרלוונטיים אך תוכל להסיר את כל תעודות האישור האחרות. לאחר השלמת ההזמנה. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'כאשר אתה מסכים לאחסון המידע שלך כמתואר לעיל, אנו מחויבים כדין לאחסן הסכמה זו במסד הנתונים שלנו. מידע זה יכלול את מספר ה- IP שלך ואת תוכן טופס ההצטרפות. שמור הודעת הסכמה זו ללא הגבלת זמן (זוהי דרישה משפטית). ');
jr_define ('_JOMRES_GDPR_CONSENT_NOT_SET', 'עדיין לא אמרת לנו אם נוכל לאסוף מידע אודותיך מזהה אישית');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_IN', 'הסכמת לנו לאסוף את המידע הניתן לזיהוי אישי לצורך הזמנות');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'אמרת לנו לא לאסוף מידע הניתן לזיהוי אישי');

jr_define ('_JOMRES_GDPR_NOCONSENT_INTRO', 'לא נתת לנו אישור לאסוף את הנתונים הפרטיים שלך');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'כדי שתוכל לבצע פעולות מסוימות באתר זה עלינו לאסוף מידע אודותיך מזהה אישית, אך לא נתת לנו הרשאה לעשות זאת.');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'שנה את ההרשאות שלך');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'המשך צפייה בנכסים');

jr_define ('_JOMRES_GDPR_APP_MENU_ITEM', 'הרשאות אפליקציה');

jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'נתוני אורחים');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'אלה הפרטים המאוחסנים עבורך על ידי הנכסים השונים. מלונות שונים עשויים להחזיק רשומות שונות, בהתאם למה שהזנת בעת ביצוע ההזמנה.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'אין לך נתונים המאוחסנים במלונות במערכת זו');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'נתוני פרופיל');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'זהו מערך הנתונים הראשי שאנו מחזיקים עבורך, שונה מאלו ששיתפת עם נכסים שונים.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'לא שמרת שום פרטי פרופיל');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'להלן המידע הניתן לזיהוי אישי שאנו מאחסנים עבורך באתר זה. הוא בנוי בפורמט JSON (JavaScript Object Notation) שהוא פורמט מחלף נתונים קל. לבני אדם קל לקרוא אותו ולבנות אותו. לכתוב וקל למכונות לנתח ולייצר. ');

jr_define ('_JOMRES_GDPR_REDACTION_STRING', 'אנונימיזציה');

jr_define ('_JOMRES_GDPR_MY_DATA', 'הנתונים שלך');
jr_define ('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'על ידי קבלת הסכם תנאי שימוש אלה ("הסכם זה"), אתה מסכים כי:

<ul>
<li>
אתה מורשה להזמין מלונות דרך אתר זה;
</li>
<li>
אתה בן 18 לפחות;
</li>
<li>
ברשותך הסמכות המשפטית ליצור חובה משפטית מחייבת;
</li>
<li>
אתה תשתמש באתר בהתאם להסכם זה;
</li>
<li>
אתה תשתמש באתר רק לביצוע הזמנות לגיטימיות לעצמך או עבור אדם אחר שעבורו אתה מוסמך כחוק לפעול;
</li>
<li>
אתה תודיע לאנשים אחרים על הסכם זה שחל על ההסתייגויות שביצעתי בשמם, כולל כל הכללים והמגבלות החלים עליו;
</li>
<li>
כל המידע שנמסר על ידי עצמך לאתר הינו נכון, מדויק, עדכני ומלא; ו
</li>
<li>
אתה תשמור על פרטי חשבונך ותפקח ותהיה אחראי לחלוטין לכל שימוש בחשבונך על ידי עצמך וכל אדם אחר מלבדך.
</li>
</ul>
');
jr_define ('_JOMRES_GDPR_MY_DATA_LEAD', 'אבטחה ושקיפות חשובים לנו.');
jr_define ('_JOMRES_GDPR_MY_DATA_INTRO', 'אנו לוקחים ברצינות רבה את האחריות שלנו בנוגע לאחסון הנתונים שלך. כל המידע הניתן לזיהוי אישי (PII) מאוחסן מוצפן במסד הנתונים שלנו באמצעות אלגוריתמים סטנדרטיים בתעשייה כדי להבטיח שרק משתמשים מורשים יכולים לצפות במידע זה.');
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'אתה יכול להוריד את כל ה- PII שאנו שומרים עבורך.');
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'הורד עכשיו');

jr_define ('_JOMRES_GDPR_MY_RTBF_LEAD', 'זכות להישכח (RTBF)');
jr_define ('_JOMRES_GDPR_MY_RTBF_INTRO', 'אנו סבורים כי עליך <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> למחוק </a> את <שלך a href = "https://gdpr-info.eu/art-4-gdpr/" target="_blank"> מידע הניתן לזיהוי אישי </a> אם אתה רוצה ואם זה אפשרי. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'אינך רשום באתר זה. המיקום הכללי שלך (מדינה) ומספר ה- IP שלך יישמרו למשך 24 שעות לכל היותר ולאחר מכן יימחקו.');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'אינך רשום באתר זה והסרת את איסוף הנתונים. לא שמרנו את תעודת הזהות שלך.');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'אתה רשום באתר ואין לך הזמנות ממתינות או פעילות. אנו יכולים לבצע אנונימיות של רוב המידע שאנו מחזיקים עבורך. האם תרצה לעשות זאת?');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'הערה: פעולה זו אינה מוחקת את חשבונך, היא רק מבצעת אנונימיזציה של רשומותינו, כך שלא ניתן יהיה לשייך את חשבונך כאדם. על פי חוק עלינו להמשיך לאחסן את תעודת הזהות שלך לצרכי חשבונית, אולם אנו נמשיך לאחסון את הרשומות שלנו כך שלא ניתן יהיה לקשר את חשבונך כאדם. על פי חוק עלינו להמשיך לאחסן את תעודת הזהות שלך לצרכי חשבונית, אולם אנו נמשיך לאחסון את הרשומות שלך כך שלא ניתן יהיה לקשר את חשבונך כאדם. מחק את כל רשומות האורחים. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'אתה רשום לאתר, אולם יש לך הזמנות מצטיינות ואיננו יכולים לבצע אנונימיות של הנתונים שלך בשלב זה. נתונים אלה יישמרו לכל היותר לשנה לאחר שההזמנה הושלמה, ואז הם יישמרו באתר. יימחק, אם לא תבחר להסיר אותו לפני הזמן הזה. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'מכיוון שאתה מנהל נכסים באתר שלנו, איננו יכולים להציע לך למחוק את הנתונים שלך באופן אוטומטי. במקום זאת, צור איתנו קשר ישירות כדי שנוכל להקצות את הנכס שלך למנהל אחר. לאחר שעשינו זאת והסרנו את הסטטוס שלך כמנהל נכסים, תוכל למחוק את הנתונים שלך באופן אוטומטי. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'שכח אותי!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'לא ניתן לבטל זאת!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'הנתונים שלך נמחקו!');

jr_define ('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'מצטערים, אינך יכול לבצע הזמנה מכיוון שכתובת הדוא"ל שלך אינה חוקית');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'דף זה נותן לך את האפשרות לבצע אנונימיות של כל אורח שמאחסן את המידע שלו במערכת. זה מאפשר לך להיות תואם את ה- GDPR, אולם אינך יכול לערוך מידע אחר בדף זה. לשם כך תוכל לעשות זאת. עליך להיכנס לממשק הקדמי כמנהל נכס. ההנחה היא שאורח היסטורי יצר איתך קשר בבקשה לאפשר לו לממש את זכותם להישכח. אם הם אינם מצליחים להיכנס לחזית האתר (אולי המשתמש לא נוצר עבורו כשהזמין) ואז תוכל להשתמש באזור זה כדי להפוך אותם לאנונימיים לאחר שתאשר את זהותם. ');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'אנונימיזציה של אורח');
jr_define ('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'PROPERTY DELETED');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'נתוני אורחים אנונימיים');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'לא ניתן לבצע אנונימיות');

jr_define ('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'אנו זקוקים לאישורך כדי לאחסן את המידע שלך לפני שתוכל לבצע הזמנה. לחץ כאן כדי לתת לנו הרשאה.');

jr_define ('_JOMRES_GDPR_CONFIG_ENABLE', 'אפשר פונקציונליות התואמת GDPR?');
jr_define ('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'אנחנו לא ממליצים שתשבית את התפקוד התואם את ה- GDPR. ל- Jomres יש תכונות מובנות שעוזרות לך להבטיח שקטע Jomres באתר שלך תואם לתקן ה- GDPR. אתה לא צריך אם אתה באיחוד האירופי או שאתה עושה עסקים עם אזרחי האיחוד האירופי), ואז ג ומרס יניח באופן אוטומטי שכל מבקר באתר נתן את רשותו להפעיל את הנתונים האישיים שלו. הרשאת האפליקציה ודפי הנתונים שלי לא יהיו מוצג והמשתמשים לא יתבקשו לתת את רשותם לאסוף את הנתונים. ');


jr_define ('EMPTY_TEMP_DIR', 'ריק טמפ');
jr_define ('EMPTY_TEMP_DIR_DONE', 'קבצים זמניים נמחקו');

jr_define ('MACHINE_TRANSLATION', 'translation machines');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG', 'שפת מקור');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'אפשר להתחבר לפונקציונליות של תרגום מכונה. זה מאפשר לך להזין מחרוזות בשפה אחת ותרגומים יכולים להישלף משירותים מרוחקים. שים לב שלא כל שירותי התרגום תומכים בכל השפות. עיין בשירותים אלה עבור פירוט רב יותר. ');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'סוגי חדרים');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'סוג חדר חדש');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'תוכל ליצור ולערוך סוגי חדרים בדף זה. סוגי חדרים אלה יהיו ספציפיים לנכס זה בלבד. בעת הגדרת הנכס שלך תחילה עליך כמה סוגי חדרים. תוכל להשתמש באותם סוגי חדרים שנוצרו על ידי מנהל המערכת, או שאתה יכול להוסיף משלך. לאחר שיהיה לך סוג אחד או יותר, תוכל ליצור חדרים מסוג חדר זה. לאחר שיהיו לך חדרים תוכל ליצור תעריפים (מחירים) עבור אותם חדרים מכיוון שהתעריפים מקושרים לסוגי חדרים. . ');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'מנהלים יכולים ליצור סוגי חדרים?');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'השתמש באפשרות זו כדי להגדיר אם מנהלים יכולים ליצור סוגי חדרים משלהם בחזית הקדמית. אנו ממליצים בחום להשאיר את האפשרות הזו ללא כשתתחיל להשתמש ב- Jomres, במיוחד אם אתה יוצר פורטל כי עליך ליצור את כל סוגי החדרים באזור מנהל המערכת. סוגי חדרים שנוצרו על ידי מנהלים יופיעו בטפסי חיפוש, אך מכיוון שסוג חדרים אלה ספציפיים לנכסים בודדים, רק נכס אחד יוצג בתוצאות החיפוש אם סוג החדר הזה נבחר. אם אתה רוצה שרק מנהלי נכסי על יוכלו ליצור סוגי חדרים, השאר את האפשרות הזו על כן והשתמש בפלאגין בקרת גישה כדי לאפשר רק למנהלי על לצפות בתפריט "הגדרות> סוגי חדרים". רק נכסים השוכרים. לצאת מהחדרים בנכס ולהשתמש במצבי עריכת תעריפים מתקדמים או Micromanage יכולים להשתמש באפשרות זו. נכסים מסוג וילה/דירה לא יוכלו להשתמש בה. ');
jr_define ('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'סוג החדר/נכס עודכן');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'הצג סוגי חדרים באפשרויות החיפוש');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'אם תבחר לאפשר למנהלי נכסים ליצור סוגי חדרים משלהם, תוכל לבחור אם להציג את סוגי החדרים שנוצרו או לא באפשרויות החיפוש שבהן בחרת להציג סוגי חדרים.');


jr_define ('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "אין להשתמש שוב באותה כתובת דוא ל עבור כל הזמנה. <br/> אם יש לך דומיין ייחודי (למשל לא כתובת דוא ל של Gmail) לעסק שלך, השתמש במספר הטלפון של האורח. ככתובת הדוא ל שלהם. כתובת הדוא ל תיראה בערך 123456@mydomain.com <br/> זה יבטיח שיווצר אורח חדש בעת יצירת הזמנה. ");

jr_define ('_JOMRES_LOGIN_USERNAME', 'כתובת דוא"ל');
jr_define ('_JOMRES_LOGIN_PASSWORD', 'Password');
jr_define ('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "אנו שמחים שתרצה להזמין איתנו שוב. כדי שתוכל לנהל את כל ההזמנות שלך ביחד, יש צורך להיכנס כדי שההזמנה תוכל להוסיף לחשבון שלך. זה גם מבטיח כי אתה מורשה להשתמש בכתובת הדואר האלקטרוני שסופקה. ");

jr_define ('_JOMRES_LOGIN_RESET_MESSAGE', 'אם אינך יודע את הסיסמה שלך נוכל לשלוח לך הודעת אימייל לאיפוס סיסמה. פעל על פי ההנחיות באימייל זה לאיפוס הסיסמה שלך.');
jr_define ('_JOMRES_LOGIN_RESET_BUTTON', 'שכחת את הסיסמה?');

jr_define ('_JOMRES_REVIEWS_ANONYMISE', 'אנונימיז את שמך?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE_DESC', 'אם תבחר להפוך את שמך לאנונימי בעת בדיקה נשתמש במקום ראשי התיבות שלך.');
jr_define ('ANONYMOUS', 'Anon');

jr_define ('_JOMRES_REVIEWS_REPLY_SAID', 'אמר');
jr_define ('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'השב לביקורת זו');
jr_define ('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'הקלד את תשובתך לביקורת זו כאן.');
jr_define ('_JOMRES_REVIEWS_YOUR_REPLY', 'התשובה שלך');
jr_define ('_JOMRES_REVIEWS_REPLY_COMMENT', 'סקירה ראשית');
jr_define ('_JOMRES_REVIEWS_REPLY_SAVED', 'תשובה סקירה נשמרה');


jr_define ('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'לפני הגשת תשובת סקירה, עליך לקרוא את הדברים הבאים. על ידי שליחת תשובה אתה מאשר שאתה מסכים לתנאים ולהגבלות אלה.');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'מהן ההנחיות שלנו לתשובת סקירה?');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'אתה מגיב על סקירת הנכס שלך. <em> אסור לך </em> להשתמש בתשובתך כתהליך מחלוקת מסחרית. אם עליך לדווח על סקירה, עליך להשתמש ב"דווח " סקור את כפתור "ברשימה, ולא דף התשובה לביקורת זו. ');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'לאחר שתעזוב את התשובה שלך לא תוכל לערוך אותה.');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'מותר ומעודד');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> תגובה מלאה לביקורת. </li>
    <li> אדיבות וכנות. </li>
    <li> תגובות הגיוניות לבעיותיו של המבקר (זכור שאולי אחרות נתקלות בבעיות דומות אך לא ניצלו את ההזדמנות לפרסם סקירה). </li>
    <li> עודד את האורח ליצור איתך קשר ישירות כדי לפתור בעיות.
    <li> זכור תמיד כי אורחים עתידיים יראו את תגובתך. הקפד להיות מקצועי בכל עת. </li>
</ul>
');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'אסור');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> מחלוקות מסחריות. </li>
    <li> שאלות למבקר או לאחרים. </li>
    <li> שפה מפוקפקת (כולל קללות). </li>
</ul>
');

jr_define ('_JOMRES_COM_A_CRON_LASTRAN', 'ריצה אחרונה');
jr_define ('_JOMRES_COM_A_CRON_SCHEDULE', 'לוח זמנים');


jr_define ('_JOMRES_INVOICE_NUMBERS', 'מספרי חשבוניות');

jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'האם להשתמש במספרי חשבוניות מותאמים אישית?');
jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'תוכל להגדיר את המערכת לשימוש במספרי חשבוניות מותאמים אישית. רק חשבוניות חדשות יושפעו.');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'מספר התחלה');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'מספרים נוצרים ברצף. מה צריך להיות המספר הראשון?');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'איזה פורמט צריך להיות מספר החשבונית?');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'הגדר את תבנית מספר החשבונית כאן. פורמט יכול להיראות כמו {N}/{D} או {N}/{Y} כאשר N הוא המספר שנוצר אוטומטית, D = תאריך בתבנית YYYYMMDD ( 20190131) או Y = YYYY (2019). כל תווים אלפריים מספריים אחרים שאינם מוקפים בסדים מתולתלים יישארו לבד, כך שתבנית שנראית כמו {N}/{D} -L תגרום למספר חשבונית (21) נראה משהו כמו 21/2019-L ');

jr_define ('_JOMRES_SURCHARGE_TITLE', 'תוספת תשלום');
jr_define ('_JOMRES_SURCHARGE_DESC', 'תשלום נוסף שיתווסף לחדר בעת ההזמנה (מחושב ליום)');


jr_define ('_JOMRES_PDF_BUTTON', 'PDF');


jr_define ('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'תעדוף תוויות בכל האתר?');
jr_define ('_JOMRES_COM_LABEL_PRIORITY_DESC', 'טקסט מותאם אישית שנשמר בעריכת התוויות או דפי מחרוזת קובצי translate lang נחשבים לתוויות "רחבות אתרים". מנהלי נכסים יכולים גם להתאים אישית תוויות לכל נכס באמצעות תכונת עריכת התוויות בחזית. הדבר מאפשר למנהל נכסים יהיו טקסטים שונים לנכס שלו, וזה שימושי אם הנכס שונה מכל שאר הנכסים באתר. <br/> כאשר המערכת תחפש טקסטים של תוויות, היא תעדיף טקסטים חובבי אתר על פני נכס. טקסטים ספציפיים כלומר שאם קיים טקסט רחב של אתרים עבור התווית הזו, המערכת תבחר את הטקסט הראשון. אם תגדיר אפשרות זו ל- No, המערכת תעדף טקסטים ספציפיים לנכס על פני טקסטים רחבי האתר. ');

jr_define ('_JOMRES_REFERRER', 'מפנה');
jr_define ('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // ניתן לשנות זאת אם ברשימה הלבנה, כך שאתר "אתר ההזמנות הטוב ביותר בעולם" ישנה את זה ל- "WBBS" או דומה לו.
jr_define ('_JOMRES_LIBRARY_PACKAGES', 'חבילות ספרייה');
jr_define ('_JOMRES_LIBRARY_PACKAGES_DESC', 'Module Vendor and Node הן חבילות נפרדות (בחינם) עבור Jomres. תוכל להתקין מחדש את החבילות בדף זה.');
jr_define ('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'התקן מחדש חבילות ספרייה');

jr_define ('_JOMRES_COM_PTYPES_NOT_DELETED', 'לא ניתן למחוק סוג נכס מכיוון שהוא עדיין בשימוש על ידי נכסים מסוימים. תחילה עליך לשנות נכסים אלה לסוג נכס אחר לפני שתנסה למחוק אותו. מזהי נכסים שמונעים מחיקה:');
jr_define ('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'לא ניתן לבטל את פרסום סוג הנכס מכיוון שהוא עדיין בשימוש על ידי נכסים מסוימים. תחילה עליך לשנות נכסים אלה לסוג נכס אחר לפני שתנסה לבטל את פרסום זה. מזהי נכסים שמונעים את השינוי:');

jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'כתובות דוא"ל אקראיות');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'הצעת מיילים אקראיים');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'אתה יכול לאפשר למערכת ליצור כתובות דוא"ל אקראיות בחלון המוקפץ  הזמנה מהירה  במרכז השליטה. הדבר מאפשר למנהלים ולפקידי קבלה ליצור הזמנות לאורחים שאין להם כתובות דוא"ל עבורן, היא נועדה לעבוד כחוסך זמן לאתרים עם פקידי קבלה/מנהלים רבים שמבינים שהודעות דוא"ל אקראיות אלה לעולם לא ישמשו לתקשורת אמיתית, המטרה היא לעקוף את העובדה שבג ומרס כל האורחים חייבים להיות עם כתובות דוא"ל. עליך לספק גם דומיין ב- השדה הבא. ');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'דוא"ל דומיין אקראי');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'זה לא אמור להיות תחום דוא"ל רגיל, כגון gmail או outlook. במקום זאת הוא יכול להיות הדומיין שלך, או משהו אחר לגמרי, כגון "mysite.emails"');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'אזור העלאה');
jr_define ('_LIST_USERS_LEGEND_NOROLE', 'אין תפקיד משתמש');
jr_define ('_LIST_USERS_LEGEND_RECEPTIONIST', 'פקיד קבלה');
jr_define ('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'מנהל נכס');
jr_define ('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'מנהל נכסי סופר');
jr_define ('_LIST_USERS_LEGEND_SUSPENDED', 'מושעה');
jr_define ('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'נמחק מתוך CMS');


jr_define ('_REVIEW_JOMRES_PLEASEREVIEW', 'אם אתה אוהב את Jomres, אנא שקול להשאיר ביקורת באחד האתרים הללו');
jr_define ('_REVIEW_JOMRES_ALREADYREVIEWED', 'אני אדם נחמד, כבר השארתי סקירה');

jr_define ('_LICENCE_PROMPT_DEAR', 'Dear');
jr_define ('_LICENCE_EXPIRED', ', פג תוקפו של מפתח הרישיון של Jomres שלך, כך שתפספס את התכונות וההטבות הנהדרות האלה!');
jr_define ('_LICENCE_EXPIRED_BENEFITS_1', 'עדכוני תוספים ומהדורות תוסף חדשות');
jr_define ('_LICENCE_EXPIRED_BENEFITS_2', 'תמיכה בדוא"ל/כרטיסים לחברים בלעדיים בלבד');
jr_define ('_LICENCE_EXPIRED_BENEFITS_3', 'עדכוני Jomres Core ללא דאגות');
jr_define ('_LICENCE_EXPIRED_POST', 'התחבר אלינו לפתרונות תשלום ללא בעיות וקבל גישה לכל הפלאגינים ושירותי התמיכה החברים בלבד.');
jr_define ('_LICENCE_EXPIRED_RESTART', 'קבל גישה לכל התוספים עכשיו!');

jr_define ('_LICENCE_INVALID_KEY', 'למרבה הצער נראה שאתה לא משתמש במפתח רישיון Jomres תקף, כך שאתה מפסיד את התכונות וההטבות הנהדרות האלה!');
jr_define ('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> תוספים </a> שמרחיבים מאוד את הפונקציונליות של Jomres');
jr_define ('_LICENCE_INVALID_BENEFITS_2', 'תמיכה בדוא"ל/כרטיסים לחברים בלעדיים בלבד');
jr_define ('_LICENCE_INVALID_BENEFITS_3', 'עדכוני Core Jomres ללא דאגות');
jr_define ('_LICENCE_INVALID_POST', 'התחבר אלינו לפתרונות תשלום ללא בעיות וקבל גישה לכל הפלאגינים ושירותי התמיכה החברים בלבד.');
jr_define ('_LICENCE_INVALID_START', 'קבל גישה לכל התוספים עכשיו!');

jr_define ('_ADMIN_MENU_SECTIONS_DASHBOARD', 'לוח מחוונים');
jr_define ('_ADMIN_MENU_SECTIONS_USERS', 'משתמשים');
jr_define ('_ADMIN_MENU_SECTIONS_COMMISSION', 'עמלה');
jr_define ('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'מינויים');
jr_define ('_ADMIN_MENU_SECTIONS_INVOICES', 'חשבוניות');
jr_define ('_ADMIN_MENU_SECTIONS_PORTAL', 'שַׁעַר');
jr_define ('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'תרגומים');
jr_define ('_ADMIN_MENU_SECTIONS_TOOLS', 'כלים');
jr_define ('_ADMIN_MENU_SECTIONS_REPORTS', 'דיווחים');
jr_define ('_ADMIN_MENU_SECTIONS_SETTINGS', 'הגדרות');
jr_define ('_ADMIN_MENU_SECTIONS_HELP', 'עזרה');

jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'סה"כ נכסים במערכת');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'מאפיינים שפורסמו');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'נכסים שלא פורסמו');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'מאושרים');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'נכסים הדורשים אישור');

jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'סה"כ ביקורות');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'ביקורות שלא פורסמו');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'סקירת דוחות');

jr_define ('_ADMIN_CPANEL_SYSTEM_INFO', 'פרטי מערכת Jomres');

jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "סוג הנכס של נכס זה אינו מפורסם, הוא עשוי שלא להופיע בתוצאות החיפוש. צור קשר עם מנהל האתר כדי לפרסם את סוג הנכס, או שנה את סוג הנכס בדף עריכת הנכס.");
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'עדכן את סוג הנכס שלך');

jr_define ('_JOMRES_INCOME_PAID_AMOUNTS', 'הכנסה (סכומים ששולמו)');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'לא ניתן למחוק את תכונת הנכס "');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"מכיוון שהוא משמש את המאפיינים הבאים:');


jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST', 'בדיקת REST API');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'דף זה מבצע בדיקה בסיסית של ה- REST API באמצעות פונקציונליות מובנית ב- Jomres. הוא קורא ל- Jomres REST API כדי לראות אם הוא מקבל תגובה תקפה.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'השרת התקשר לכתובת זו כדי לבדוק אם התשובה תקפה:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'הדף קיבל תגובה זו:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'נראה שהבדיקה התנהלה כצפוי, כנראה שלא תהיה לך שום בעיה לקבל בקשות REST API משאר האינטרנט.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'הבדיקה נכשלה, חפש בשדה תגובה, אם זה נראה כמו הרבה html או שקיבלת הודעה 404, השרת שלך מפנה שיחות לכתובת אתר אחרת. זה ימנע ממך לקבל API. שיחות. ');

jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'בדיקת סינדיקציה');
jr_define ('__ JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'שרת האפליקציות של Jomres שומר רשימה של כל אתרי Jomres. הדבר מאפשר לנו לבנות רשת סינדיקציה. רשת זו נועדה לאפשר למשתמשים שלנו להציג נכסים מאתרים אחרים שלהם, היא בעלת רשימות של כל אתרי Jomres. במיוחד לאתרים חדשים, לבנות נוכחות SEO ברשת. המטרה היא שכל אתרי Jomres יעבדו יחד ויבנו אמון ברשת. אין תשלום עבור השירות הזה. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'האתר שלך אינו רשום כרגע בשרת האפליקציות של Jomres, שהוא חלק מרשת הסינדיקציה. שרת זה ינסה שוב להוסיף שרת זה לרשת לאחר 6 העמודים הבאים. מעט טעינת דפים, זה לא משתנה אנא בדוק שבדיקת הקישוריות שלמעלה עומדת במבחנים. שים לב, לא ניתן להוסיף שרתים של localhost לרשת. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'מזל טוב, השרת שלך רשום בשרת האפליקציות של Jomres.');

jr_define ('_JOMRES_SYNDICATION_TITLE', 'מאפיינים מסונכרנים');
jr_define ('_JOMRES_SYNDICATION_TAGLINE', 'להלן כמה נכסים נוספים הזמינים מרשת הנכסים שלנו');


jr_define ('_JOMRES_SYNDICATION_STATS_TITLE', 'נתוני סינדיקציה');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'מזל טוב, השרת שלך רשום ברשת Jomres Syndication. הנכסים שלך יתחילו להופיע באתרי Jomres אחרים בקרוב, אם הם לא יוצגו כבר.');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'ההתקנה שלך אינה חלק מרשת הסינכרון של Jomres, לכן הנכסים שלך לא יוצגו באתרים אחרים המבוססים על Jomres ואינך יכול להרוויח מפרסום זה בחינם.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'מתקני Jomres פעילים:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'המספר הכולל של התקנות Jomres שמשתפות את נכסי רשת הסינדיקציה של Jomres באתרים שלהן.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'סה"כ נכסים:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'זהו מספר הנכסים הזמינים ב- JSN.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'סה"כ תצוגות רכוש:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'בסך הכל, כל הפעמים שאליו נקשר נכס מסוג Jomres מאתר אחר המבוסס על Jomres.');
jr_define ('_JOMRES_SYNDICATION_STATS_BLURB', 'רשת Syndicate Jomres (JSN) היא תכונה חינמית הזמינה לכל משתמשי Jomres. מטרתה היא לספק לך פרסום חינם של הנכסים שלך באתרים אחרים המבוססים על Jomres. המטרה היא לעזור אתה מוריד את האתר מהר מהר ומציע פרסום בחינם, כך שהנכסים שלך יזוהו ואמינים כי הם מקושרים לאתרים בעלי רלוונטיות גבוהה, אשר כבר מוכרים היטב למנועי החיפוש. ראה את זה <a href="https: //www.jomres.net/features/jomres-syndication-network" target="_blank"> מאמר באתר שלנו </a> ו <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank"> המדריך </a> למידע נוסף. ');
jr_define ('GUEST_PROFILE_INFORMATION', 'אלה נתוני פרופיל האורח שלך, שדות עם סמל זה <i class = "fa fa-users" aria-hidden = "true"> </i>
הם גלויים לציבור, בעוד ששדות עם הסמל הזה <i class = "fa fa-user-secret" aria-hidden = "true"> </i> יכולים להיראות רק לך, למארחים ולמנהלי האתר שלך. <br/> <br/> מארחים יכולים לראות מידע פרטי רק אם כבר יצרת איתם הזמנה. <br/> <br/> המידע שלך מוצפן ומאוחסן בבטחה במסד הנתונים שלנו באמצעות הצפנת AES-256. ');

jr_define ('GUEST_PROFILE_OPTIONAL', 'שדות אלה הם אופציונאליים, אולם מארחים עשויים להשתמש במידע כאן כדי לקבוע אם הם מרגישים שהם יכולים לסמוך עליך, לכן עדיף להוסיף את המידע. זכור, אתה מבקש להישאר במלון שלהם רכוש, והם עשויים לדחות אותך אם הם מרגישים שאינך מתאים או שהביוגרפיה שלך אינה מכילה מספיק מידע. ');
 
jr_define ('GUEST_PROFILE_DRIVING_LICENSE', 'רישיון נהיגה');
jr_define ('GUEST_PROFILE_PASSPORT_NUMBER', 'מספר דרכון');
jr_define ('GUEST_PROFILE_IBAN', 'מספר IBAN');
jr_define ('GUEST_PROFILE_ABOUT_ME', 'אודותי');
jr_define ('GUEST_PROFILE_ABOUT_ME_HINTS', 'הקטע עליי  זה ניתן לעיון לציבור אז אל תכניס מידע פרטי. עם זאת, עשה מאמץ להשקיע ככל שאתה מרגיש בנוח לשתף כגון התשוקות שלך, מה שאתה להתפרנס, התחביבים שלך וכו  אתה יכול להשתמש ב- Markup כדי לתת לזה קצת ג אז. המארחים ירצו להרגיש שהם יכולים לסמוך עליך על המאפיינים שלהם. ודא שהתמונה שלך היא תמונה אמיתית שלך, לא של הכלב שלך. או מכונית (כן, חבר ה, אנחנו מדברים איתכם!). ');

jr_define ('GUEST_PROFILE_PREFERENCES', 'הזן את כל הדרישות המיוחדות שיש לך, כגון צרכי גישה נוחים כאן. הם לא יוצגו בפרופיל הציבורי שלך אך הם יתווספו למידע ההזמנה בעת ביצוע ההזמנה.');

jr_define ('VIEW_HOST_PROFILE', 'פרופיל המארח');

jr_define ('GUEST_PROFILE_TITLE', 'פרופיל אורח');
jr_define ('GUEST_PROFILE_TITLE_MY', 'הפרופיל שלי');

jr_define ('GUEST_PROFILE_WELCOME', 'היי, תרשה לי לספר לך מעט על עצמי.');
jr_define ('GUEST_PROFILE_MY_NAME', 'שמי הוא');
jr_define ('GUEST_PROFILE_I_COME_FROM', 'ואני בא מה-');
jr_define ('GUEST_PROFILE_IN', 'אזור ב');

jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION', 'המידע הפרטי שלי');
jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'אנו עושים כמיטב יכולתנו לאמת את פרטי האורחים והמארחים, אולם עליך לעשות את עצמך ולהקליט בעצמך אם אדם זה אמין או לא.');

jr_define ('GUEST_PROFILE_MY_PROPERTIES', 'הנכסים שלי');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'הביקורות שלי');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'זה מה שאמרתי על נכס זה:');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'נתתי לנכס זה דירוג דירוג של:');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'הביקורות שלי');
jr_define ('GUEST_PROFILE_OF_ME', 'מה שאנשים אחרים אומרים עלי');
jr_define ('GUEST_PROFILE_OF_HOST_SAID', 'מה שהמארח הזה אמר עלי');

jr_define ('GUEST_PROFILE_REVIEW_GUEST', 'אורח סקירה');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'הביקורת שלי על האורח הזה');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'להלן דוגמאות של ביקורות אורחים בכדי לגרום לכדור להתגלגל: <br/>

<ul>
<li> (שם האורחים) היה תענוג לארח! הם השאירו את החלל נקי והיו שקטים לאורך כל סוף השבוע. הייתה להם תקשורת חלקה ואני מצפה שהם יישארו איתי שוב! </li>
    <li> אהבתי שיש (שם אורח) מכיוון שהם הצליחו להתייחס למקום בכבוד, ליהנות מאוד וליהנות מהאזור. הם היו מדהימים עם השכרת החלל ואני מקווה שאזכה לארח אותם שוב. </Li>
    <li> כל חוקי הבית שלי היו מכובדים עם (שם אורח) והם הצליחו להיכנס וללכת בקלות. אהבתי שיש אותם שם כיוון שהם היו מכבדים ושקטים. אני ממליץ עליהם בחום לאחרים! </li>
</ul>

');

jr_define ('GUEST_PROFILE_UNKNOWN', 'מצטער, אני לא יכול למצוא את המשתמש הזה. סביר להניח שהם עדיין לא מילאו את פרטי החשבון שלו.');

jr_define ('GUEST_PROFILE_USERSTATUS_GUEST', 'אורח');
jr_define ('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define ('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define ('WORDPRESS_THEME_ADVICE', 'Jomres בנוי על מסגרת Bootstrap, כך שעליך להשתמש בו בנושא המבוסס על Bootstrap. אנו ממליצים על אחד המבוסס על Bootstrap 3. אם אין לך גישה לנושא אנו ממליצים לך להשתמש בו נושא Jomres Leohtian ל- Wordpress שתוכל <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank"> הורד מכאן. </a> ');
jr_define ('BOOKING_NOSHOW_MENU', 'סמן כהצגה');
jr_define ('BOOKING_NOSHOW_AUDIT_LOG', 'הזמנה מסומנת כ לא הופעה');
jr_define ('BOOKING_NOSHOW_BOOKINGS', 'הזמנות');
jr_define ('BOOKING_NOSHOW_NOSHOWS', 'אין הצגות');
jr_define ('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN statistics for user this');

jr_define ('BOOKING_NOSHOW_INFO', 'פרטי ההזמנה וההצגה נשלף מרשת הסינדיקט של ג ומרס בזמן ההזמנה. הוא נלקח מנתונים אנונימיים ויכול לשמש אותך כדי להחליט אם אורח זה מהווה סיכון של אי מילוי ההזמנה. אם המערכת מדווחת כי הנתונים אינם ידועים, זה כנראה בגלל שמערכת זו אינה מזוהה ברשת. ');

jr_define ('BOOKING_NOSHOW_UNKNOWN', 'לא ידוע');

jr_define ('CMF_CONFIG_TITLE', 'Framework Management Channel');
jr_define ('CMF_CONFIG_KEY', 'מפתח מסגרת לניהול ערוצים');
jr_define ('CMF_CONFIG_KEY_DESC', 'מפתח הרישיון של מסגרת ניהול ערוצים. יהיה עליך לספק מפתח זה בכדי שתוכל להוריד תוספים לניהול ערוצים.');

jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'הנכס שלך לא אושר');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "הנכס שלך לא אושר. אם אתה חושב שזה בוצע בטעות צור איתנו קשר.");

jr_define ('_JOMRES_GUESTTYPES_IS_CHILD', "האם זה סוג אורח ילד?");
jr_define ('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "הגדר זאת ל- Yes אם סוג אורח זה יסווג כסוג אורח ילד.");

jr_define ('_JOMRES_GUESTTYPES_INTRO', "אם ברצונך לגבות תשלום לאדם ללילה, יהיה עליך ליצור כמה סוגי אורחים.");
jr_define ('_JOMRES_GUESTTYPES_INSTRUCTIONS', "תוכל ליצור כמה סוגי אורחים שאתה צריך, נסה להתחיל על ידי יצירת סוג אורח אחד בלבד בשם 'מבוגר'. השאר את כל ההגדרות בערכי ברירת המחדל שלהם. לאחר מכן, אם לדוגמה אתה רוצה תן לילדים מתחת לגיל 12 הנחה של 50% היית יוצר סוג אורח חדש, וקרא לזה 'ילדים מתחת לגיל 12'. הגדר את האפשרות 'הוסף שונות?' ל - (שלילי) והגדר את 'שונות' ל -50. פירוש הדבר כאשר ילדים מתווספים להזמנה הם מחויבים ב -50% ממחיר החדר של החדר. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "קבע מחירים באופן ידני");
jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "קבע מינימום לילות באופן ידני");
jr_define ('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "קבע מינימום לילות");

jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "קבע <em> מחיר ללילה </em> לפי יום בשבוע");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "קבע <em> מחיר ללילה </em> לפי טווח תאריכים");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "הגדר <em> מינימום לילות </em> לפי טווח תאריכים");

jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "בוחרי התאריכים וקלט התעריפים מאפשרים לך להגדיר מחיר אחד לטווח תאריכים נתון. בחר תאריך התחלה וסיום, הזן מחיר ולחץ על הלחצן הגדר מחיר ללילה.");
jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "בוחרי התאריכים וקלט הלילות המינימלי מאפשרים לך להגדיר ערך אחד עבור הלילות המינימליים בטווח תאריכים נתון. בחר תאריך התחלה וסיום, הזן מספר עבור הלילות המינימליות ולחץ על 'הגדר מינימום לילות '. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "השתמש בתפריט הנפתח הזה כדי לשנות בין קביעת מחירים לתאריכים בודדים, לקביעת לילות מינימום לתאריכים בודדים. תוכל להשתמש בורר <em> לפי יום בשבוע </em>, ה <em> לפי תאריך. טווח </em> בוחר או קבע את המחירים/לילות מינימום על ידי עריכה ידנית של התאריכים. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "השתמש בתפריט הנפתח הזה כדי לשנות בין קביעת מחירים לתאריכים בודדים, לקביעת לילות מינימליים לתאריכים בודדים. תוכל להשתמש בורר ה <em> לפי תאריכים </em> או להגדיר את המחירים/לילות מינימליים לפי עריכה ידנית של התאריכים. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "קבע מחירים או מינימום לילות");

jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW', "קבע <em> מינימום לילות </em> לפי יום בשבוע");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "שדות יום בשבוע מאפשרים לך להגדיר מספר לילות מינימלי ליום נתון בשבוע, לאחר שתלחץ על כפתור יום השבוע כל ימות השבוע יוגדרו להגדרת הלילות הדקה. ");


jr_define ('_JOMRES_MICROMANAGE_MANUALLY', "מחירים ידניים/לילות מינימליים");
jr_define ('_JOMRES_MICROMANAGE_SET_PRICES', "קבע מחירים");
jr_define ('_JOMRES_MICROMANAGE_SET_MINDAYS', "קבע מינימום לילות");
jr_define ('_JOMRES_MICROMANAGE_PRICE', "לכל לילה");
jr_define ('_JOMRES_MICROMANAGE_MINDAYS', "דקות לילות");
jr_define ('_JOMRES_MICROMANAGE_MAXDAYS', "מקסימום לילות");

jr_define ('_JOMRES_MICROMANAGE_INTRO', "כאן תוכל ליצור תעריפים המשויכים לסוגי החדרים שיש לך בנכס שלך.");

jr_define ('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "האפשרויות הנפוצות ביותר");

jr_define ('_JOMRES_MICROMANAGE_MODAL_BUTTON', "הוראות");

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "אם אתה רוצה להוסיף מחירים שונים עבור מספר אורחים אחר, אז <em> תוכל ליצור יותר ממספר תעריפים עבור כל סוג חדר </em> ולהעריך ערכי מינימום/מקסימום אורחים בתעריפים אלה. ");

jr_define ('_JOMRES_MICROMANAGE_INFO', "תן שם לתעריף, הגדר את מספר הלילות המרבי ואת מספר האורחים המינימלי והמקסימלי הנדרש בטופס ההזמנה לפני הצעת התעריף. <br/> <br/> השתמש לוח לוח בוחרי התאריכים כדי להוסיף מחירים והגדרות לילות מינימליים לטווח תאריכים, או לערוך את התשומות ישירות. אם אינך רוצה שהתעריף יציע כלל בתאריכים מסוימים, השאר את המחיר מוגדר ל -0 (אפס) ב- תאריכים אלה. <br/> <br/> אתה יכול לקבל לילות מינימום שונים בתאריכים שונים, כך שאם אתה רוצה הזמנות ארוכות יותר במהלך שבועות פסטיבל/ועידה, תוכל להגדיר את לילות הדקות להיות גבוהים יותר רק בתקופות האלה. <br/ > <br/> אם אתה גובה תשלום לאדם לכל ערך (PPPN) תוכל להפעיל הגדרה זו בהגדרות> תצורת נכס> תעריפים ומטבע, ולאחר מכן צור את סוגי האורחים הדרושים לך בהגדרות> סוגי אורחים. ");

jr_define ('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "אפשרויות נוספות");

jr_define ('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "אלה אפשרויות נוספות שאינן נפוצות כל כך, אך עם זאת זמינות עבורך. <br/> <strong> התעלם מ- PPPN </strong> אמצעי התעלם לאדם ללילה. תוכל לקבל מספר תעריפים שונים. עבור אותו סוג חדר, למשל אחד מהם גובה לאדם ללילה, ואחד שלא. <br/> <strong> אפשר סופי שבוע </strong> האפשרות אפשר סופי שבוע נותנת לך אפשרות לבצע תעריף שהוא רק זמין במהלך ימי חול, למשל אם אתה רוצה תעריף מיוחד לנוסעים עסקיים. במקרה כזה היית מגדיר את האפשרות ל- No והמינימום ללילה ולמקסימום לילות, לכל היותר, 5. <br/> <strong> סופי שבוע רק </strong> האפשרות היחידה בסופי שבוע היא ההפוכה של האפשרות אפשר סופי שבוע. ניתן להגדיר את מה שאתה מחשיב לימי סוף שבוע בהגדרות תצורת הנכסים שלך. זה נותן לך את היכולת להגדיר תעריף של סוף שבוע בלבד שתרצה אולי הצעה לאירועים מיוחדים. <br/> <strong> צ'ק-אין ביום בשבוע </strong> אפשרות זו נותנת לך את האפשרות לאלץ את הצ'ק -אין להיות רק בימים מסוימים בשבוע והיא משמשת בצורה הטובה ביותר בשילוב עם תצורת הנכס> הכרטיסיה הזמנות> אפשרויות תקופות קבועות. רוב המשתמשים ירצו להשאיר את האפשרות הזו מוגדרת לכולם. <br/> שתי האפשרויות האחרונות, <strong> חדרים שנבחרו כבר </strong> ו <strong> חדרים מרביים שכבר נבחרו </strong> הם מאוד מיוחדים שימושי לנכסים עם תעריפים מסובכים במיוחד. <em> אלא אם כן יש לך צורך ספציפי, עליך להשאיר את האפשרויות האלה בשקט. </em> השתמש בהן אם אתה רוצה שתעריף זה יוצע רק כאשר האורח כבר בחר N מספר חדרים בטופס ההזמנה, כך למשל אתה יכול לקבל תעריף בסיסי אחד שבו האפשרויות האלה נשארות כברירת מחדל, ותעריף שני שבו האפשרויות הנמוכות ביותר של חדרים שנקבעו ל -1, ואז תעריף שני זה יוצע בטופס ההזמנה לאחר בחירת חדר. " );

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "אתה יכול ליצור תעריפים מרובים עבור אותו סוג חדר, כך שתוכל ליצור תעריף אחד למינימום/מקסימום ימים של 1 - 7 ותעריף שני שבו הימים המינימליים הם 7, הימים המרביים של 14, ו וכן הלאה. זה מאפשר לך ליצור תוכניות תמחור פשוטות או מסובכות ככל שאתה צריך. זה גם מאפשר לך ליצור תעריפים מרובים עם תנאים שונים, כך שתוכל לקבל מערך תעריפים שני שבו המחיר נמוך יותר עבור לינה וארוחת בוקר, ו קבוצה נוספת של תעריפים יקרים יותר למיטה, ארוחת בוקר וערב. ");

jr_define ('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "הגדר ימים בוחרי תאריכים בלבד");
jr_define ('_JOMRES_PROPERTY_HCATEGORIES', 'קטגוריות נכסים');
jr_define ('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'ערוך קטגוריית נכסים');
jr_define ('_JOMRES_STOP_READTHISFIRST1', "עצור!");
jr_define ('_JOMRES_STOP_READTHISFIRST2', "תודה שהתקנת את Jomres");
jr_define ('_JOMRES_STOP_READTHISFIRST3', "ניהול נכסים מתבצע בדפים הפונים לציבור, לא באזור המנהל.");
jr_define ('_JOMRES_STOP_READTHISFIRST4', "אם אינך מכיר את Jomres אנא בקר בקטע עזרה> דף תחילת העבודה.");


jr_define ('_JOMRES_CONFIG_SYNDICATION_TITLE', "הצטרף לסינדיקט Jomres");
jr_define ('_JOMRES_CONFIG_SYNDICATION_DESC', "לאחר שהגדרת האתר שלך תהיה מוכן להתחיל בקבלת מבקרים, הצטרף לסינדיקט של Jomres.net וקבל את נכסיך רשומים באתרי Jomres אחרים.");



jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "אתה צריך לפחות חדר אחד מתוך אחד מהסוגים הבאים לפני שתוכל ליצור תעריף:");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "עבור אל הגדרות> חדרים וצור תחילה חדר, לאחר שתעשה זאת תוכל ליצור תעריף עבור סוג החדר הזה.");

jr_define ('JOMRES_PLATFORM', "פלטפורמת Jomres");


jr_define ('JOMRES_PLATFORM_CONNECTED', "מחובר");
jr_define ('JOMRES_PLATFORM_CONNECTED_DESC', "הגדר את זה ל- Yes אם כבר חיברת את חשבון Stripe שלך ​​לפלטפורמת Jomres.");

jr_define ('JOMRES_PLATFORM_ACCOUNT_ID', "מספר חשבון Live Stripe");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "זהו מזהה חשבון הפסים שלך שניתן למצוא בלוח המחוונים של הפסים תחת הגדרות> פרטי חשבון ונראה כמו acct_xxxxxxxxx אם תשתמש בשדה זה אם יש לך מספר התקנות Jomres ואתה רוצה להשתמש באותו חשבון ברחבי כל האתרים וכבר התחברת אלינו. אם לא התחברת לפלטפורמת Jomres, לא מספיק להזין את הפרטים שלך כאן. במקום זאת, בקר באפשרות התחבר בחיבור בסרגל הכלים, בקטע עזרה. אם תרצה כדי לבדוק תשלומים, בכרטיסייה באגים בתצורת האתר הגדר את האתר שלך מיצור לפיתוח. ");

jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY', "מפתח סודי של פס חי");
jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'עבור אל מפתחים> מפתחות API בלוח המחוונים של הפסים כדי למצוא את המפתחות הסודיים שלך. אלה משמשים את המערכת לאימות נתוני ההזמנה המוחזרים מטופס התשלום ושהפקדות שולמו לפני שמירת ההזמנה. . ');

jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY', "מפתח סודי לבדיקת פס");
jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD', 'מצב תעריף רגיל');

jr_define ('JOMRES_COM_A_ACCOMMODATES', 'Sleeps');
jr_define ('JOMRES_COM_A_ACCOMMODATES_DESC', 'כמה אנשים יכול להכיל נכס זה?');
jr_define ('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'מספר האורחים במחיר היומי שלך');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'מחיר למבוגרים נוספים');

jr_define ('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'ילדים');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'לאדם ללילה?');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', 'שינוי 7 ימים');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'הנחה על התעריף היומי אם ההזמנה היא ל -7 ימים או יותר. השאר את האפשרות הזו לאפס אם אינך רוצה שההנחה תחול.');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 יום שינוי');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'הנחה על התעריף היומי אם ההזמנה היא ל -30 יום או יותר. השאר הגדרה זו לאפס אם אינך מעוניין שההנחה תחול.');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL', 'מבוגרים');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'המחיר מבוסס על 2 מבוגרים');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'הנחה בהזמנה מ');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'to');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'מכיוון שההזמנה גדולה מ -7 ימים.');
jr_define ('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'מכיוון שההזמנה גדולה מ -30 יום.');


jr_define ('JOMRES_CITY_TAX_HEADING', 'מסים עירוניים');
jr_define ('JOMRES_CITY_TAX_VALUE', 'ערך מס עירוני');
jr_define ('JOMRES_CITY_TAX_METHOD', 'שיטת חישוב מס');

jr_define ('JOMRES_CITY_TAX_MODEL_SINGLE', 'תשלום יחיד');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'ללילה');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'לכל אורח');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'לכל אורח ללילה');
jr_define ('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'אחוז מערך ההזמנה');

jr_define ('JOMRES_CLEANING_FEE_HEADING', 'דמי ניקיון');
jr_define ('JOMRES_CLEANING_FEE_VALUE', 'עלות דמי ניקיון');
jr_define ('JOMRES_COMPATABILITY_MODE', 'Force Configurability property configuration?');
jr_define ('JOMRES_COMPATABILITY_MODE_DESC', "מצב תצורת נכסי תאימות מכריח כמה דברים לקרות. בגרסאות ישנות יותר של Jomres, מנהלי נכסים יכולים לבחור באיזה מצב עריכת תעריפים להשתמש, ועוד מגוון הגדרות (חלקן עשויות להיראות מבלבלות) עשויות להיות הפעלת תצורת תאימות מאלצת את כל הנכסים החדשים להשתמש רק במצב עריכת תעריפים סטנדרטית, המדגם את פונקציונליות תצורת הנכס booking.com ביחס לתמחור, תמחור ילדים וכו '. מומלץ להתקנות שנוצרו לאחר 9.22 .0, יש להגדיר אפשרות זו ל- Yes, אך עבור התקנות ישנות יותר עליך להחליט אם יש להגדיר מאפיינים חדשים באופן אוטומטי למצב תאימות בעת יצירתם. ");

jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN', 'האם אתה מקבל ילדים מתחת לגיל 18?');
jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "הגדר אפשרות זו ל- Yes אם אתה מאפשר לילדים. אם כן, אז בתפריט ההגדרות תהיה לך אפשרות בשם מדיניות ילדים שבה תוכל לערוך הגדרות הקשורות לילדים.");

jr_define ('JOMRES_POLICIES_CHILDREN', 'מדיניות ילדים');

jr_define ('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'באיזה גילאים מותר לילדים?');


jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'לילד, ללילה');
jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'לילד, לכל שהייה');

jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'תעריפי ילדים');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'שיעור ילדים חדש');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'ערוך שיעור ילדים');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'צור כאן את תעריפי הילדים החינמיים או בתשלום. התעריפים יחולו רק כאשר יצרת רמות תפוסה עבור סוגי חדרים.');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'גיל מ');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'גיל עד');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'ללילה או לשהייה?');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'תעריף');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'אם אפס או לא יוגדר, ילדים בטווח גילאים זה יהיו בחינם.');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'גילאים בעת ביצוע צ ק -אין');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'גילאים');

jr_define ('JOMRES_OCCUPANCY_LEVELS_TITLE', 'levels Occupation');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'מקסימום מבוגרים');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'מקסימום ילדים');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'תפוסה מרבית');

jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT', 'ערוך רמת תפוסה עבור:');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'ערוך רמות תפוסה עבור סוג חדר זה. אל תכלול אורחים שישנים על מיטות תינוק (אלה מתווספים על ידי יצירת תוספת)');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'על כל מבוגר נוסף, כמה צריך לחייב אותו?');

jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'מבוגרים נוספים');


jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES', 'עדיין לא הגדרת תעריפי ילדים');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'הגדר תעריפי ילדים עכשיו');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'הגדרת את הנכס שלך לאפשר לילדים אך עדיין לא הגדרת רמות תפוסה לילדים.');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'קבע רמות תפוסה');
jr_define ('JOMRES_OCCUPANCY_LEVELS_INFO', 'בכל פעם שאתה עורך חדר או סוג הנכס שלך עליך לבדוק ולעדכן את רמות התפוסה של הנכס/החדרים שלך מכיוון שהם משפיעים על מספר האורחים שניתן לקבלם בטופס ההזמנה.');


jr_define ('_JOMRES_SEARCH_FORM_ADULTS', 'מבוגרים');
jr_define ('_JOMRES_SEARCH_FORM_CHILDREN', 'סה"כ תצוגות רכוש');


jr_define ('_JOMRES_CONFIG_LEVEL_TITLE', 'רמת אפשרויות ניהול');
jr_define ('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres מכיל אפשרויות תפריט ותצורה רבות בהן תוכל להשתמש בעת הגדרת האתר שלך. את הרוב העצום שלהן לעולם לא תצטרך לשנות כך שהן מוסתרות כברירת מחדל. תוכל לבחור להציג את האפשרויות על ידי הגדרה. רמת הניהול. הרמה הבסיסית מציגה לך בדיוק את מה שאתה צריך בעת הקמת אתר בפעם הראשונה. הרמה המשותפת מציגה לך את האפשרויות שהכי משתנות, והכל מציג לך את כל ההגדרות והתפריטים האפשריים באזור מנהל המערכת. ');
jr_define ('_JOMRES_CONFIG_LEVEL_BASIC', 'בסיסי');
jr_define ('_JOMRES_CONFIG_LEVEL_COMMON', 'Common');
jr_define ('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'הכל');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'האם נוכל לאסוף מידע אודות אופן השימוש שלך ב- Jomres?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'ברצוננו לאסוף מידע אודות אופן השימוש שלך ב- Jomres. לא יישמר מידע הניתן לזיהוי אישי, השימוש יהיה אנונימי וייעשה רק כדי לעזור לנו להבין כיצד אנשים משתמשים ב- Jomres.');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'כן, זה בסדר');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'לא, אני לא מסכים');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'האם תקבל הזמנות ליותר מנכס אחד?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres יכול לשמש לאתרים בודדים או מרובי נכסים. אם אתה לוקח הזמנות לנכס אחד בלבד, אפשרויות רבות יהיו מיותרות ועשויות לבלבל. תוכל לשנות הגדרה זו בהמשך הגדרות> אתר. תצורה> הכרטיסיה פונקציונליות פורטל. ');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'נכס אחד בלבד');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'אפרט יותר מנכס אחד');


jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "איזו גירסה של מסגרת Bootstrap תומכת בתבנית/נושא שלך?");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "כל גירסה של מסגרת Bootstrap דורשת סימון HTML שונה במקצת. ל- Jomres יש שלוש קבוצות של ערכות תבניות תואמות Bootstrap, אחת לכל גירסת Bootstrap. עליך לוודא שתגדיר אותה לשימוש בערכת התבניות המתאימה. לאחר מכן אינך פלט כגון פריסה, מודלים ותפריטים לא יפעלו כראוי. אם תחליט להשתמש בתבנית/עיצוב מאוחר יותר עם גירסת Bootstrap אחרת תוכל לשנות את ערכת התבניות Bootstrap ש- Jomres צריכה להשתמש בה ב- Admin> Jomres> הגדרות > לשונית שונות. <br/> <br/> Joomla 3 מופץ כברירת מחדל עם Bootstrap 2, Joomla 4 ישתמש ב- Bootstrap 5. תבנית Jomres Leohtian (Joomla) וערך נושא (Wordpress) משתמש ב- Bootstrap 3. תבניות/נושאים שונים עשויים להיות מופצים עם קבצי Bootstrap משלהם, כך שאם יש לך ספק, אנא צור קשר עם מפתח התבנית/ערכת הנושא שלך. ");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define ('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'הסרת עשרוניות ממחירי התפוקה?');

jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'החל קבוצה לפי תיקון?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'בכמה התקנות mysql עשויה להיות בעיה עם שאילתות Jomres בדף מאפייני הרשימה, רשימת אורחים וחשבוניות רשימה. אם בדפים אלה כתוב שהם מציגים X של תוצאות Y אך שום דבר לא מופיע ברשימה, אז הגדרה אפשרות זו ל- Yes עשויה לפתור את הבעיה. זה לא יקרה אם אתה משתמש באירוח משותף ושירות האחסון אינו מאפשר למשתמש mysql שלך להוציא את הפקודה "SET GLOBAL sql_mode =". ');
jr_define ('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'זהו נכס ערוץ, לא ניתן לנהל אותו באופן מקומי, בקר בדף מסגרת ניהול הערוצים כדי למצוא את הקישור לניהול מרחוק של הנכס');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "אין רצועה לאתחול בנושא");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'קישורי מדיה חברתית');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'שים כאן את שמות חשבונות המדיה החברתית שלך, למשל "jomres", לא את כל כתובת האתר');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'רשימה מופרדת בפסיק של שפות הארגון שלך דובר');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'כתובת אתר ללוגו הארגון שלך');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres עודכן');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'יש גרסה חדשה של Jomres זמינה. עליך לעדכן לפני שתוכל להמשיך להשתמש ב-Jomres שכן עדכונים משפרים את הפונקציונליות ומבטיחים שההתקנה שלך תישאר מאובטחת.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'עדכן את גומרס עכשיו');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'עדכוני פלאגין');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'ישנן גרסאות חדשות של תוספים זמינות במנהל הפלאגינים. עליך לעדכן את כל התוספים לפני שתוכל להמשיך להשתמש ב-Jomres שכן עדכונים משפרים את הפונקציונליות ומבטיחים שההתקנה שלך תישאר מאובטחת.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'תוספים לעדכון');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'אם הרישיון שלך אינו תקף עוד, אתה יכול לקבל מפתח רישיון חדש מהאתר שלנו.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'עדכון תוספים');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'קבל מפתח חדש');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'שמור מפתח חדש');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"תמונות מסוג נכס");

jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE',"צריך עזרה בהזמנה?");
jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB',"התקשר לצוות שירות הלקוחות שלנו בטלפון למטה כדי לדבר עם אחד הנציגים שלנו שיעזור לך בכל צרכי החג שלך.");

jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE',"למה להזמין אצלנו?");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE',"אנו מציעים את תעריפי ההזמנה הטובים ביותר");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1',"יש לנו את הנכסים במחיר הטוב ביותר בשוק.");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2',"ללא עמלות הזמנה. חסוך כסף!");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE',"מבחר גדול של מאפיינים");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS'," מאפיינים");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS'," ביקורות אורחים");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE',"אנחנו תמיד כאן");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT',"התקשר או שלח לנו דוא\"ל, בכל עת");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT',"קבל תמיכה 24 שעות לפני, במהלך ואחרי הטיול שלך");

jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA',"מדיה חברתית");
jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD',"מצא אותנו במדיה החברתית");

jr_define('JOMRES_REVIEW_SCORE_TOP_1', "יוצא מן הכלל");
jr_define('JOMRES_REVIEW_SCORE_TOP_2', "חריג");
jr_define('JOMRES_REVIEW_SCORE_TOP_3', "מעולה");
jr_define('JOMRES_REVIEW_SCORE_TOP_4', "מעולה");
jr_define('JOMRES_REVIEW_SCORE_TOP_5', "פנטסטי");

jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "טוב מאוד");
jr_define('JOMRES_REVIEW_SCORE_GOOD', "טוב");

jr_define('JOMRES_REVIEWS_NONE_NEW', "רישום חדש");
jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "בהנחה");

jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'לאן אתה רוצה ללכת?');
jr_define( 'DATA_SOURCES_TITLE', "רענן מקורות נתונים" );
jr_define( 'DATA_SOURCES_TITLE_INFO', "מקורות נתונים רעננים. מקורות נתונים משמשים בשדות קלט של השלמה אוטומטית בווידג'ט החיפוש והם בדרך כלל מתעדכנים אוטומטית, אולם דף זה מאלץ את עדכון הנתונים באופן ידני במידת הצורך." );


	jr_define('_OAUTH_TOKEN_REQUEST_URI', "כדי לשלוח בקשה אסימון, שלח את הבקשה לכתובת האתר הזו");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "סקריפט מאפיין התצוגה הראשי");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "ה-uid של הנכס שיש לראות");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "תבנית ברירת המחדל היא property_details.html, עם ארגומנט זה אתה יכול להגדיר תבנית פרטי נכס שונה להצגה.");

	jr_define('JOMRES_UPDATES_TITLE', 'עדכוני גומרס');
jr_define('JOMRES_UPDATES_INFO', "דף זה יכול להוריד ולהתקין עבורך את הגרסה העדכנית ביותר של Jomres. הוא משתמש בפונקציונליות שלו ולא בזו של ה-CMS המארח, לכן אם מתרחשת בעיה במהלך העדכון של ה-CMS המארח, תוכל להשתמש בדף זה כדי לכפות התקנה מחדש של הגרסה העדכנית ביותר של Jomres.");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'מנהלי נכסים יכולים להשתמש במצב העריכה ב-frontend כדי להתאים אישית מחרוזות עבור כל מאפיין, אולם זה יכול לעבוד רק אם הגדרת הקישור הקבוע של WordPress שלך מוגדרת כרגיל (http://www.domain.com/?p=123). לאחר שתעשה זאת, משתמשי ממשק קצה יוכלו להתאים אישית מחרוזות, כגון שמות חדרים ותוויות אחרות, הספציפיות למאפיינים ייחודיים. ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'מצב עריכת תווית');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'תכונה זו משמשת לשינוי תוויות פריטים, בדרך כלל לשפות שונות.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'מצב עריכה מאפשר לך לשנות שם של תוויות שייחודיות לנכסים בודדים. כאשר אתה משתמש במצב עריכה כדי לשנות שם של תווית, השינוי יופיע רק ברישום הנכס הזה. לדוגמה, בנכס אחד שאולי תרצה להשתמש במילה "מחירים" ובמילה אחרת במילה "תעריפים". לא ניתן לשנות את כל התוויות, למשל שמות סוגי החדרים הם תוויות כלל-אתר, כך שלא ניתן לשנות אותן, אלא בדרך כלל כל דבר שייחודי לנכס בודד ניתן להחלפה.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'אם האתר תומך במספר שפות, תוך שימוש בשפה אחת אתה יכול ליצור פריט שהוא ייחודי למאפיין בודד. לאחר מכן אתה משנה את השפה הפעילה שלך, אתה יכול להשתמש במצב העריכה כדי לשנות את שם התווית, הזנת תרגום מתאים בשפה הנוכחית. ניתן להמשיך ולשנות את השפה הפעילה כדי להזין תרגום מתאים לתווית זו עבור כל שפה שבה האתר תומך.');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'מתג מצב עריכת תווית');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'בצילום מסך זה אנו רואים את מתג מצב העריכה. מצב העריכה כבוי והתוויות מופיעות כרגיל: ');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'מצב עריכת תוויות מופעל');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'בצילום מסך זה אנו רואים שבמצב עריכה, התוויות שניתן לשנות את שמותיהם מסומנות:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'בחר את הפריט לשינוי');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'כאשר נבחרת תווית מופיע חלון קופץ:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'שנה את התווית');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'השתמש בטופס הקטן כדי לשנות את התווית. לחץ על הסימון כדי לסיים, או לחץ על ה-X כדי לבטל את העריכה:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'התווית השתנתה');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'לאחר ששמרת את השינוי אז התווית מתעדכנת בדף. אתה יכול לבטל את מצב העריכה עכשיו:');

	jr_define('JOMRES_TRANSLATIONS_TITLE', 'תרגום');
	jr_define('JOMRES_TRANSLATIONS_LEAD', 'בדף זה אתה יכול לתרגם תוויות משפה אחת לאחרת. כשתבקר בדף תראה מחרוזות שכבר יצרת ואת הערך שלהן בכל שפה שבה אתה משתמש כעת. בחלק העליון הגדר את שפת היעד, ולאחר מכן עבור התוויות שברצונך לתרגם, לחץ על התווית וחלון קופץ יאפשר לך להזין את התרגום החדש שלך. עבור שורות טקסט ארוכות יותר תוכל להדביק את הטקסט ממקור אחר. זכור שכל HTML יימחק .<br/>
אתה יכול להשאיר את שפת היעד מוגדרת לשפה הנוכחית שלך ולהשתמש בדף זה כדי לשנות שם פריטים כאן, במקום לבקר בדפים האישיים שלהם.');
	jr_define('JOMRES_TARGET_LANGUAGE', 'שפת יעד');
