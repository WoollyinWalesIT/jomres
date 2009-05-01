<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
##################################################################

/**
* @ignore
*/
define('_JOMRES_COM_MR_MRARRIVEDESC','הצג הגעות של היום');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','הצג עזיבות של היום');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','הצג חקירת הזמנות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','הצג חקירות אחרות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','הזמנה מהירה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','הצג הזמנות פעילות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','הצג פרופילים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','שפות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','תצורה כללית');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','הגדרת הנחות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','תצורת חדר/נכס');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','תצורת נכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','הגדרת דירוגים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','חזרה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Mos Residents חזרה להזמנת');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','תצורה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','טען מידע לדוגמא');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','כן');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','לא');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','חדש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','חדר חדש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','אפיון חדר חדש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','סוג חדר חדש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','נכס חדש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','אפיון נכס חדש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','אורח חדש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','שמור');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','שם');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','הגעה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','עזיבה');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','הקצאת פונקציות משתמש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','מקט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','שם');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','שם משתמש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','מאושר כיום');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','נכס ברירת מחדל');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','שנה את זה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','רמת גישה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','משתמש עודכן');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','לא זמין');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','ערוך נכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','ערוך רמת גישה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','קבלה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','מנהל נכס');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','כל ההזמנות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','הזמנות חדשות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','ערוך הזמנות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','הגעה/עזיבה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','אורח');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','חדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','תשלום');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','שם פרטי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','שם משפחה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','האורח מגיע היום, לחץ על הכפתור אם הוא כבר הגיע');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','הערות,');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','דרישות מיוחדות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','אנא שים לב, חלק מדרישות מיוחדות יכולות להביא לחיובים נוספים.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','מבוגרים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','ילדים');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','בטל הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','מקט באתר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','מספר בית או שם');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','רחוב');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','עיר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','מיקוד');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','טלפון קווי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','טלפון נייד');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','מספר פקס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','דואר אלקטרני');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','העדפות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','מספר רכב');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','לקוח בוטל');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','נכס בוטל');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','בחר סיבה לביטול');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','ימים להגעה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>חיב דמי ביטול</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','אי אפשר לבטל הזמנה, כי אורח כבר בחדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','הפקדה שולמה, אין יותר חובות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','חוב הפקדה, הפקדה לא שולמה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','הפקדה שולמה, 50% מהחוב הכולל');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','הפקדה לא שולמה, 50% מהחוב הכולל');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','הפקדה שולמה, 100% מהחוב הכולל');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','הפקדה לא שולמה, 100% מהחוב הכולל');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','תזכורת חוב');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','הפקדה לא שולמה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','אשר את הביטול');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','ביטול הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','ימים להגעה');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','סוג הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','שחור');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','קבלה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','אינטרנט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','שם חדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','חדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','קומה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','יש גישה לנכים?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','מספר אנשים מקסימלי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','סוג חדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','תאור סוג חדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','רשימת מאפייני החדר');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&#8362;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','&#8362;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','כללי דירוג');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','הפקדה שולמה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','הכנס הפקדה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','סה"כ לתשלום');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','סימוכין הפקדה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','סימוכין תשלום');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','הזמנת מקום');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','הפקדה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','הפקדה נשמרה');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>ממתין...</FONT></h1><BR><B>יש לשנות אישורי קובץ שפות ל-766 כדי לעדכן את השפות</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','בחירת סוג חדר מהירה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','תיבת סימון');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','מספר מבוגרים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','מספר ילדים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','נדרשת מיטת תינוק?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','לחילופין');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','אנא הכנס או מספר לילות שאורח ישאר, או תאריך עזיבה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','מספר לילות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','אנא בחר את סוג חדר הנדרש, תאריך הגעת אורח, ואחד מהשתיים, מספר לילות שאורח רוצה להשאר או תאריך עזיבה. ולבסוף, הכנס מספר מבוגרים וילדים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','אין חדרים פנויים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','שם');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','מספר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','קומה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','גישת נכים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','מספר אנשים מירבי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','פרטים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','נכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','סוג חדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','מצטערים, כמות חדרים לא מאפשרת לקבל את כמות האורחים הזאת');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">מצטערים, הנכס לא יכול לקבל הזמנות לתקופה המבוקשת. אנא חזור ללוח שנה  כדי לבדוק זמינות.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','אנא בחר מהרשימה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','בחר את האורח');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','תאור');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','רשימת לקוחות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">חלה טעות בבחירת תאריכים<br>אנא לחץ כפתור חזרה והכנס מחדש</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">שגיאה: צריך לפחות אורח אחד לביצוע הזמנה<br>אנא לחץ על כפתור חזרה והכנס מחדש</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">שגיאה: טווח התאריכים שבחרת אינו תקין<br>אנא לחץ על כפתור חזרה והכנס מחדש</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">שגיאה: לא בחרת את סוג החדר הרצוי.<br>אנא לחץ על כפתור חזרה והכנס מחדש</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">שגיאה: בחרת תאריך בעבר מהיום<br>אנא לחץ על כפתור חזרה והכנס מחדש</font>');

// Display guest form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','הכנס פרטי אורח');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','אשר פרטי אורח');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','ערוך פרטי אורח');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','שם פרטי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','שם משפחה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','בית');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','רחוב');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','עיר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','מיקוד');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','טלפון קווי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','טלפון נייד');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','פקס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','אימייל');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','מספר רישום');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','מספר כרטיס אשראי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','תאריך הנפקת כרטיס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','תוקף הכרטיס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','מספר הנפקה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','שם בעל הכרטיס');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','תבחר את בחירתך');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','בחר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','תעריף');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','תאור תעריף');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','מינימום ימים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','מקסימום ימים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','מינימום אנשים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','מקסימום אנשים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','ימי שהייה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','תעריף יומי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','מספר אורחים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','סה"כ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','הפקדה');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','לפחות אחד מהימים שבחרת נופל על יום חופש לאומי.');

/**
* @ignore
*/define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','מצטערים, לא נמצא תאריך התואם את ההגדרות שהכנסת. אל תתיאש, נסה לשנות את מספר ימי שהיה או קריטריון אחר. או תתקשר ישירות לנכס ואנו ננסה לסדר משהו');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','הצג תצורת חדרים ונכס');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','חדרים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','מאפייני החדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','סוגי חדרים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','נכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','מאפייני הנכס');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','חדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','סוג');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','נכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','סוג');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','שם');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','מספר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','קומה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','גישת נכים?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','מקסימום אנשים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','מאפיינים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','הוספת חדר הושלמה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','חדר עודכן');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','לחץ על מספר החדר כדי לערוך פריט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','ערוך פריט');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','מאפייני החדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','תאור מאפיין');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','הקלק על מאפייני החדר כדי לערוך פריט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','מאפיין החדר נוסף בהצלחה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','מאפיין החדר עודכן');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','ערוך פריט');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','סוג חדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','קיצור סוג החדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','תאור סוג החדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','הקלק על סוג החדר כדי לערוך פריט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','סוג חדר נוסף בהצלחה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','סוג חדר עודכן');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','ערוך פריט');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','נכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','שם');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','רחוב');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','עיר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','מחוז');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','מדינה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','מיקוד');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','טלפון');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','פקס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','אימייל');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','אתר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','מאפיינים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','הקלק על מקט הנכס כדי לערוך פריט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','נכס נוסף בהצלחה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','נכס עודכן');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','ערוך פריט');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','מאפייני הנכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','קיצור מאפייני הנכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','תאור מלא של מאפייני הנכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','הקלק על מקט המאפיין כדי לערוך מוצר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','מאפיין נכס נוסף בהצלחה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','מאפיין נכס עודכן');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','ערוך פריט');

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','תעריפים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','כותרת התעריף');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','תאור');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','טופס תקף');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','תקף ל');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','תעריף ללילה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','מינימום ימים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','מקסימום ימים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','מינימום אנשים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','מקסימום אנשים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','סוג חדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','התעלם ממחיר לילה לבן אדם');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','לאפשר חגים לאומיים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','לאפשר סופי שבוע');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','הקלק על קישור עריכה כדי לערוך תעריף');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','תעריף נוסף בהצלחה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','תעריף עודכן');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','ערוך פריט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','שכפל פריט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','מחק תעריף');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','תעריף נמחק');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','ערוך תעריף');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','חגים לאומיים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','תאריך סוף חג אמור להיות יום אחרון שהאורח יחויב בתאריך חג');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','ערוך חגים לאומיים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','תאור');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','התחלה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','סוף');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','חג לאומי חדש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','לחץ על קישור עריכה כדי לערוך חג');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','חג לאומי נוסף בהצלחה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','חג לאומי עודכן');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','ערוך פריט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','שכפל פריט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','מחק חג לאומי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','חג לאומי נמחק');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','הזמנה נשמרה');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','אנא וודא שכל הטופס מולא בצורה נכונה');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','רק משתמשים רשומים יכולים לבצע הזמנות');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','אנא הרשם');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','הזמנות לא זמינות כרגע');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','פרטים שלי');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','הזמנות שלי');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','ניהול');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','הזמן חדר');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','רשום הזמנת אורח');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','מחק הזמנת אורח');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','הצג הזמנות');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','הזמנות חדשות');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','לוח בקרה');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','ניהול אורח');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','ניהול נכס');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','ניהול תעריפים');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','ניהול הנחות');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','ניהול חגים לאומיים');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','אנא בחר חדר מבוקש, תאריך הגעתך ומספר לילות שברצונך להשאר. ולבסוף, מספר מבוגרים ו/או ילדים');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','אנא הכנס את פרטיך. אתה תדרש לעשות זאת רק פעם אחת. המערכת תזכור אותך בבירוריך העתידיים');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','אנא בחר את החדר שאתה רוצה');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','אנא הכנס את פרטיך האישיים, שים לב - כל השדות חובה, למעט מספר טלפון נייד');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','בדוק זמינות');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','אני רוצה את החדר הזה');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','בחר אורח');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','אשר את פרטיך');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','בחר עיסקה שלי');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','בחר סוגי חדרים');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','שם פרטי');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','שם משפחה');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','מספר בית');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','רחוב');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','עיר');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','מיקוד');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','טלפון קווי');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','טלפון נייד');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','מספר פקס');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','לא נמצאו חדרים לפי דרישות שלך');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','הכנס את פרטיך');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','אשר את פרטיך');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Tתודה שהזמנת אצלנו. מקווים שתהנה משהייתך<br><br> <b>אנא שים לב , זוהי רק קדם הזמנה. ההזמנה תאושר עם קבלת דואל על ידך ואישורו </center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','הזמנה בוצעה בנכס: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','הזמנה בוצעה לחדר: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','מספר מבוגרים: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','מספר ילדים: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','תאריך הגעה: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','תאריך עזיבה: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','מספר לילות: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','מספר אורח: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','שם: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','טלפון: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','טלפון נייד: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','תעריף: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','ערך החוזה הוא: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','הפקדה המבוקשת: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','מצטערים, אבל אנו צריכים שתעדכן את פרטיך לפני שנוכל להמשיך בהזמנתך. אנא הקלק על "פרטים שלי" ורשום את פרטיך. תודה');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','תודה, פרטיך נשמרו');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','"ברוכים הבאים. לפני שתוכל להזמין חדר אתה צריך לעדכן את פרטיך. לחץ על הקישור "פרטים שלי');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','ברוכים השבים ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','רשום אורח ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','בחר אורח ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','אורח נרשם בהצלחה');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','אין אורחים שאמורים להגיע היום');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','הוצא אורח מהחדר');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','אורח נרשם ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','אשר הוצאת אורח');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','אין אורחים שאמורים לעזוב היום');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','אורחים שמגיעים היום');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','אורחים שעוזבים היום');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','חדרים תפוסים');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','הזמנות חדשות');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','הצג חדר מ:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','תוספות');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','תעריפים וסוגי מטבע');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','הנחות');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','מדיניות הביטולים לא נקבעה');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','ההעלאת קבצים');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','תצורה נוכחית');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','הסבר');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Vince Wooll 2005 זכויות יוצרים');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','הזמנות לא זמינות?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','כבה מערכת הזמנות, אם אינך מעוניין בהזמנות מקוונות');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','לאפשר סכימת הנחות?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','סכימת הנחות היא עבור אלה שרוצים להציע הנחות בהתסתמכות על מספר אורחים במסיבה. בגלל שזה פועל על פי מספרים במסיבה, זה לא מומלץ שתשתמש בה, אלא אם כן אתה מחייב על פי מחירבן אדם ללילה');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','סף דרג 1');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','סף דרג 2');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','סף דרג 3');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','סף דרג 4');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','אחוזי הנחה לדרג 1');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','אחוזי הנחה לדרג 2');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','אחוזי הנחה לדרג 3');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','אחוזי הנחה לדרג 4');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','תוספת לבן אדם יחיד');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','אנא וודא שזה נקבע ל-כן, אם אתא רוצה לשנות את מחיר תוספת ליחיד');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','חיוב תוספת ליחיד');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','הוספת מיטה מתקפלת');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','אנא וודא שזה נקבע ל-כן, אם אתא רוצה לשנות את מחיר הוספת מיטה מתקפלת');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','חיוב הוספת מיטה מתקפלת');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','ההפקדה מחושבת באחוזים?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','האם ההפקדה נדרשת להיות אחוז מעסקה כוללת? אם לא אז הפקדה תרשם כסכום קבוע');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','ערך הפקדה הנדרשת');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','לבן אדם, ללילה');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','סמן כן אם ברצונך לחייב על בסיס בן אדם-ללילה, אם לא המחיר יחושב על בסיס  חדר-ללילה');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','ניתן לפדות את הפקדון המופקד?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','סמן את זה כן, אם ברצונך להשתמש בכספי פקדון לאחר ביטול הזמנה לשימוש חוזר על ידי הלקוח');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','קובץ קיים');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','סוגי קבצים');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','פרט אלו סוגי קבצים מותרים להעלאה, השתמש ברשימה מופרדת עם פסיקים, ללא רווחים. דוגמא: zip,exe,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','גודל קוובץ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','גודל תמונה מירבי בקילובייט');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','לחץ לשימוש שבועי של החדר החל מהיום');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','לחץ על החדר המוזמן כדי לעיין בהזמנה');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','או בחר תאריך שהינך מעוניין בו');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','מוזמן');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','פנוי');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>חדרים עם רקע כחול - מוזמנים, אבל<br>אם מופיע טקסט אדום על החדר - ההפקדה עדיין לא שולמה<br> איפה שמופיע כוכב ממול ל"מוזמן" - האורח צפוי להגיע היום.<br> אם ישנו טקסט צהוב על החדר, האורח כבר נמצא בחדר');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','מכתב אישור');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR',' היקר ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES',' מחיר לחדר ללילה');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','פרטי הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','תודה שהמנת ב');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','להלן סיכום פרטי הזמנתך. אנא בדוק שהפרטים שברשותנו אכן נכונים וצור איתנו קשר אם יש טעות כלשהיא');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','חדרך יהיה שמור עד להגעתך, ושעת כניסה לחדר היא החל מ-2 בצהריים');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','אנו מצפים לקבל את פניך ב-');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','מאחלים שיהיה לך יום נעים');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','עכשיו ברצוננו להפנות את תשומת לבך לאותיות הקטנות');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','אנו מזכירים לך שהזמנה היא מסמך קושר חוקי, אם מסיבה כלשהיא ברצונך לבטל או לקצר את הזמנתך, אתה עדיין אחראי לשלם את הסכום המלא');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','לא ניתן לתקצב לארוחות שלא נלקחו או חדרים שלא מאוכלסים לתקופת הזמנה מלאה. אנו ממליצים בחזקה שתשתמש במתקן ששמור לחגים');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>דמי ביטול וקיצוץ</i> אם אתה מבטל את חופשתך, הביטול צריך להיות בכתב. דמי ביטול הן:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 יום או יותר');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' הפקדה בלבד');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 עד 30 יום');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT','50% מעסקה הכוללת');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','תאריל הגעה ל-14 יום');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT','  מהעיסקה הכוללת 100% ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','כל המחירים כוללים מע"מ, כל שינוי במס יחוייב אוטומטית');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','הדפס מכתב אישור');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','הדפסת חשבונית');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR',' היקר');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','מחיר לחדר - ללילה');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','מספר מבוגרים: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','החוזה מאושר על ידי: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','מחיר ללילה: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','סה"כ');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','פרטי חשבונית');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','תודה, תמיד לשרותך ב-');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','מקווים לראותך אותך אצלנו');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','כל המחירים כוללים מע"מ, כל שינוי במס יחוייב אוטומטית');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','הדפס חשבונית');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','הוסף שרות לחשבון');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','תאור השרות');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','ערך השרות');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','הוסף לחשבון');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','פריטים נוספים שחוייבו');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','פריטים נוספים שחוייבו, סה"כ: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','פריטים שנוספו לחשבון');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> נכס ברירת מחדל לא נמצא</h1><br>אין אפשרות להמשיך, אנא צור קשר עם מנהל</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','בחר תמונה לצרף');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','העלת תמונה');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','העלאה');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','ההעלאת קובץ ');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','סוג קובץ או גודל לא מורשה');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','טען קובץ חדש להעלאה');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','באפשרותך להעלות קבצים רק מסוג: /n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','אנא בחר קובץ לפני העלאה');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','שם קובץ יכול לכלול רק אותיות ומספרים וללא רווחים');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','גודל הקובץ יותר גדול מהמותר');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','קובץ עם שם זהה כבר קיים, אנא בחר שם אחר לפני העלאת הקובץ');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','הקובץ/קבצים שלך הועלו בהצלחה');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','קבצים לא הועלו');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','הקובץ/קבצים שלך הועלו בהצלחה');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','צרף לרשת Jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','אם תבחר לצרף נכס זה לרשת, הוא ירשם באתר etazman.com. אנא שים לב, שזה יחשב כנכס פעיל, לכן אתה חייב למסור אל ורק פרטים אמיתיים');

/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','לוח שנה JS');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','קובץ שפה של לוח שנה JS');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','בחר את קובץ השפה שישמש את לוח השנה. אנא שים לב שחלק מלוחות השנה יכולים להיות שגויים. ראה - http://sourceforge.net/tracker/?group_id=75569&atid=544287 לפרטים נוספים');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','CSS של לוח שנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','אנא בחר את קובץ CSS עבור לוח שנה JS');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','לבדוק חגים לאומיים?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','אם תבחר כן, עליך לוודא שקיימים תעריפים נפרדים לימי חג וימים רגילים. אם ברצונך לחשב ימי חג כימים רגילים - בחר לא');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','שונות.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING','הצג רשימת קריאות למיני רכיבים');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','העבר ל-כן על מנת לראות רשימת קריאות למיני רכיבים בתחתית העמוד לאחר שגומרס סיים פעולתו.  
כמו כן זה מונע את תכונת השליחה מחדש הפנימית. זה שימושי אם הנך מנסה לזהות איזה מיני רכיבים מבצעים שירותים מסויימים.');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETE','מחק תמונה זאת');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','קובץ נמחק');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','הצג שדה תאריך עזיבה');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','הגדר זאת ככן אם הינך מעוניין להציג תאריך עזיבה. ישנה בעיה בכמה דפדפנים להציג Javascript, ןלדעתי האישית עדיף לא להציג את השדה');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','בחר את הנכס כדי להציג זמינות חדרים');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','איזשהו');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','חדר');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','נכס');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','הצג SQL');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','הגדר את זה ככן כדי לראות שאילתות SQL');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','הצג תוצאת שאילתא');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','הגדר את זה ככן כדי לראות הודעת SQL ו-var-dumped');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','בחר חבילת טמפלייטים');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','CSS ID של כפתורים עליונים');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','CSS ID של כותרת הטבלה');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','טמפלייטים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','מחק');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','אין אפשרות למחוק את החדר, כי ישנה הזמנה לחדר. מחק את ההזמנה ונסה שנית');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','חדר נמחק');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','מחק מאפיין החדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','אין אפשרות למחוק את המאפיין כי הוא מוקצב למספר חדרים. קודם תבטל את המאפיין בחדרים ואז תנסה למחוק');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','מאפיין חדר נמחק');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','מחק מאפיין הנכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','אין אפשרות למחוק את המאפיין כי הוא מוקצב למספר נכסים. קודם תבטל את המאפיין בנכסים ואז תנסה למחוק');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','מאפיין נכס נמחק');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','מחק סוג חדר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','אי אפשר למחוק את סוג חדר, כי קיימים חדרים מהסוג הזה. תנסה לשנות את סוג החדרים ואז למחוק');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','אי אפשר למחוק את סוג חדר, כי קיימים תעריפים שקשורים לסוג זה. תנסה לקשר את התעריפים לסוג אחר ואז למחוק');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','סוג חדר נמחק');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','nje nkui');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','אין אפשרות למחוק את הנכס, כי יש מידע בטבלה: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','נכס נמחק');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','אינך מורשה לבצע פעולה זאת');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','בחר את הנכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','לאיזה נכס יקושר החדר הזה?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','בחר נכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','אנא בחר את הנכס');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','רוחב תמונה קטנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','רוחב תמונה בינונית');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','רוחב תמונה בגודל מלא');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','לחץ על המפה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','תאור הנכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','זמני הגעות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','פעילות באיזור');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','הנחיות לנהגים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','שדות תעופה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','תחבורה נוספת');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','תקנונים וכתבי מדיניות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Jomres.net מפתח אישי ל-');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','כשהינך מוכן לעלות את האתר, בקר ב-<a href="http://www.jomres.net" target="_blank">Jomres.net</a> למפתח הנכס, עם המפתח הזה תוכל להוסיף את הנכס שלך לרשת העולמית של Jomres');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','נכסים שלנו');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','כתובת');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','מבקרים יכולים להזמין מהאתר');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','הגדר את זה ככן, כדי לאפשר הזמנות מהאתר');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','ההזמנות הן לתקופה קבועה');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','אם תגדיר את זה ככן, כל ההזמנות ירשמו לתקופה קבועה. אם תגדיר את זה כלא, אנא וודא ש"תאריך הגעה מוגדר" לא מוגדר ככן (אלא אם כן הינך דוחף תאריך מסויים)');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','תקופת הזמנה: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','הזמנת חדרים');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','גבול טבלת הזמנות');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','שנה את הצבע של גבול טבלת ההזמנות');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','רקע טבלת הזמנות');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','שנה את הצבע של רקע טבלת ההזמנות');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','רוחב טבלת הזמנות');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','תקופה מקסימלית, לדוגמא: 3 * 7 תקופות הזמנה = 21 יום');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','חייב שדה מספר אורחים?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','הגדר את זה ככן אם ברצונך להציג את השדה "מספר אורחים בחדר" בטופס ההזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','האם זאת דירה/קוטג/ווילה?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','אם אתה מזכיר נכס ולא רק חדרים בנכס. אם זה המקרה, עליך לוודא שבכל נכס ישנו  אך ורק חדר אחד');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','מספר מבוגרים מירבי');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','הגדר את מספר המבוגרים המירבי בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','מספר ילדים מירבי');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','הגדר את המספר הילדים המירבי בטופס הזמנה. אם הערך מוגדר כ-0, אז הילדים יחשבו כמבוגרים. תיבת בחירת מספר ילדים לא תוצג');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','המשך');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','עיין בהזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','אשר הזמנה ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','הנחות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Warning...</FONT></h1><BR><B>אתה חייב לשנות הרשאות ל-site_config.php ל-777 כדי לאפשר את שמירת ההגדרות</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','שני');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','שלישי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','רביעי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','חמישי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','שישי');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','שבת');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','ראשון');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','ב');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','ג');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','ד');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','ה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','ו');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','ש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','א');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','זמינות');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','צבע גופן לכל הטקסט');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','גודל גופן לכל הטקסט');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','גובה תאt');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','רוחב תא');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','צבע גופן לתאריך נוכחי');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','צבע גופן לימים בתצוגת חודש ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','צבע גופן לימים מחוץ לתצוגת החודש');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','צבע רקע של תא ימים כש החדר/נכס זמינים');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','צבע רקע תא לימים בתצוגת חודש');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','צבע רקע תא לימים שהחדר מאוכלס');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','צבע רקע תא לחדר בהזמנה חלקית ( הזמנה שההפקדה שלה עדייו לא שולמה');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','צבע רקע תא של ימים בעבר');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','מפתח הצבע:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','מאוכלס/לא זמין');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','פנוי להזמנות');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','הזמנות חלקיות');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','תאריך הגעה מוגדר מראש');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','רק לאתרים שמציעים הזמנות לתקופות קבועות. בחר את התאריך תחילת ההגעה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY',',תאריך הגעה קבוע');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','תקופת שהייה (ימים)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','להציג לוח שנה של זמינות?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','הגדר את זה ככן כדי להציג את לוח שנה של זמינות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','אשר את בחירתך');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','זמינות');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','דברים שעליך לעשות: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','סקור את התאריכים שבחרת');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','סקור את מספרי האורחים שלך');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','עליך לספק את פרטיך האישיים');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','תעשה את בחירתך');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','סקור את החדר שבחרת');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','סקור את הזמנתך, כשתהיה מסופק, אנא אשר את בחירתך');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','לחץ על תאריך פנוי, כדי להציג טופס הזמנה');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','הזמנות שחורות');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','אין הזמנות שחורות');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','הזמנות שחורות חדשות');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','הוסף חדרים לרשימה שחורה');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','מחק אורח');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','אורח נמחק');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','אין אפשרות למחוק אורח זה, כי ישנם הזמנות על שמו. בטל את ההזמנות ונסה שנית');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','פנל מנהל בתצוגת סרט');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','הגדר את זה ככן, אם ברצונך להתשמש בתצוגת סרט שבועי, כנגד לוח שנה חודשי לתצוגת זמינות');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','מחיר ממשי של חדר: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','אימייל אינו תקף');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','זה האימייל שהתקבל מ-');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','שלום');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','תודה שהזמנת ב-');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','סכום הזנה כולל הוא: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','אם יש לך שאלות לגבי ההזמנה או כל דבר אחר, אנא צור איתנו קשר.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','הטלפון שלנו: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','או לחילופין, תוכל ליצור קשר באימייל: ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','מעשן');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"כלשהו");
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','מראה של לוח שנה');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','זה מאפשר למשתמשים לשנות את תצורת תאריכים בלוח שנה של Jomres');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','מראה של לוח שנה');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','זה מאפשר למשתמשים לשנות את תצורת תאריכים בלוח שנה של Jomres');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','הזמנות בתקופה קבועה מאפשרות הפסקות קצרות');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','משך זמן של ההפקה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','פורסם');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','הגדרות');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','השתמש ב- Paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','השתמש בתיבת Paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','נדרש חשבון מפתח Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','אימייל Paypal שלך');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','הערה: כדי להשתמש ב-Paypal עלך להכנס לחשבוןן Paypal שלך ולאפשר Autoreturn (Profile/Website Payment Preferences) Set Auto Return: On, Set Return URL: http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','שגיאה! Paypal  אימייל לא הוגדר');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','מעקב חשבונות');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','אין מעקב חשבונות');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','תאריך');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','זמן');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','שם משתמש');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','פעולה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','זכויות הנכס');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','ראה פרטים');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>כלשהו</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','סנן לפי תאריך');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','סנן לפי משתמש');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','סנן לפי פעולה');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','סטטוס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','מחכה להגעה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','מגיע היום');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','שוכן כרגע');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','עוזב היום');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','כבר עזב');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','טרם הגיע');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','מסנן');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','משתמש לא מזוהה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','חדר נוצר');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','חדר עודכן');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','חדר נמחק');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','מאפיין חדר נוצר');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','מאפיין חדר עודכן');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','מאפיין חדר נמחק');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','סוג חדר הוכנס');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','סוג חדר עודכן');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','סוג חדר נמחק');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','נכס נוצר');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','נכס עודכן');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','נכס נמחק');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','מאפיין נכס נוצר');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','מאפיין נכס עודכן');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','מאפיין נכס נמחק');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','הגדרות נכס ערוכות');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','נכס פורסם');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','תעריף נוצר');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','תעריף עודכן');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','תעריף נמחק');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','חג נוצר');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','חג עודכן');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','חג נמחק');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','חיוב שרות נוצר');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','הזמנה מבוטלת');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','אורח שהזמין');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','אורח שביטל');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','פרטי כרטיס אשראי עודכנו');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','הפקדה הוכנסה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','אורח נוצר');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','אורח עודכן');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','אורח נמחק');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','תמונת נכס חדש נשמרה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','נשמרה תמונת נכס שונה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','תמונה נמחקה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','תמונת חדר נשמרה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','תמונת חדר שונה נשמרה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','תמונה חדשה נשמרה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','תמונה שונה נשמרה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','הזמין חדר');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','יצר תוספת');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','עידכן תוספת');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','מחק תוספת');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','תוספת פורסמה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','הוכנס לספר שחור');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','נמחק מספר שחור');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','תוספות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','ערוך תוספות');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','תאור');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','שם');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','מחיר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','תוספת חדשה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','לחץ על קישור עריכה כדי לערוך את התוספת');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','תוספת נוספה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','תוספת עודכנה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','ערוך פריט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','שכפל פריט');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','מחק תוספת');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','תוספת נמחקה');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','ניהול תוספות');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','הצג תוספות בזמן ביצוע הזמנה?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','הגדר את זה ככן כדי להציג תוספות שברצונך להציע לאורח');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','תוספות לבחירה');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','בחר את הנכס');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','הפוך בחירה / סמן את הכל');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','תחילת תאריך ספר שחור');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','תאריך סיום השרות');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','הזמנות בספר שחור');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','אחד או יותר חדרים שסימנת כבר מוזמנים. אם ברצונך להעביר את החדרים הלו לרשימה שחורה, עלך קודם לבטל את ההזמנות באותם חדרים');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','נוצרה שגיה בניסיון להזמין את החדרים. אחד או יותר חדרים שבחרת כבר הוזמן');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','חדרים נוספו לרשימה שחורה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','מחק מרשימה שחורה');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','ראה רשימה שחורה');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','אין רישומים ברשימה שחורה');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','מספר כוכבים');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','הצג אפשרות עישון?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','הגדר את זה ככן אם ברצונך לשאול שאלת העישון');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','איפוס');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','מצב תשלומך ב-paypal  נרשם כ"ממתין". כשהנכס יאשר את הזמנתך, המצב ישתנה ל-"מאושר"');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','הזמנה בוטלה');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','חפש את ה:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' חיפוש ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','הצג מידע אודות שגיאות paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','הציג שמות חדרים?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','הגדר ככן כדי להציג את שמות החדרים');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','הצג סוגי חדרים');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','הגדר את זה ככן כדי להציג את סוגי החדרים');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','ברירת מחדל לעישון');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','שים לב, אם ברירת מחדל לעישון היא כן, ובפרטי החדר בחרת עישון - לא, החדרים לא יופיעו כחדריפ פנויים');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','סימן מטבע');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','כגון &amp;pound&#59; אנא שים לב שאתה צריך להשתמש ב-חחחחח לקוד של הסמל');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','קוד הסמל');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','זה ישמש באמייל ללקוח, כדי לאשר את הזמנתם');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','הקלק למידע נוסף');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>אזהרה! הינך מחובר למערכת עם גישה לכל הנכסים. זה יכול לגרום לבעיות בביצועים של התוכנה.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','להגביל הזמנות מראש?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','הגדר את זה ככן אם ברצונך להגביל  את המשתמש בהזמנות לעתיד של N ימים. אם הוא ינסה לחרוג, התוכנה תחזיר אותו לתאריך של היום');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','ימי הגבלה להזמנה מראש');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>הערה: לא מומלץ שתגדיר את שתי הבחירות הבאות לכן, עליך להשתמש רק בצורת מיסוי אחת מהשניים </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','מיסוי');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','מיסוי חדר');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','מעוצב לשוק האמריקאי. מיסי חדר אלו יחיבו את האורח. באפשרותך לחייב אחוזי מס שונים. שים לב - המס הוא עבור חדר בודד');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','מיסוי בסכום קבוע');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','מיסוי באחוזים');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Tax');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','לכל שוק שמאפשר דרגות כיסוי, הערך מוסיף מס ב-UK ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','אחוזי מס');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','העבר את הכל לארכיון');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' רשימות הועברו לארכיון');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','רשימות מבקר הועברו לארכיון');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','תעריפים שלנו');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','שם תעריף');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','תאור תעריף');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','סוג חדר');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','טופס תקף');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','בתוקף עד ');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','לאדם ללילה');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','ללילה');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','ללא כולל סופי שבוע');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','מינימום ימים');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','מקסימום ימים');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','מינימום אנשים');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','מקסימום אנשים');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','תצוגה מקדימה');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','לאפשר עריכה?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','טקסט נוכחי');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','טקסט חדש');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','טקסט אישי עודכן');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','עריכת שפה');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','מספר רשימות שהוצאו מארכיון');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','ישנם מעל 200 שימות במעקב המבקר ולכן אי אפשר להציג את פעילות השאילתות. מומלץ להעביר את הרשימות לארכיון באופן קבוע');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','סוג נכס');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','הצג סוגי נכס');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','ערוך סוג נכס');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','סוג נכס');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','תאור סוג נכס');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','סוג נכס נשמר');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','אי אפשר למחוק את סוג נכס כי קיימים נכסים מסוג זה. אנא שנה את סוגם ואז תנסה למחוק את הסוג');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','סוג נכס נמחק');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>שגיאה. אין חדרים בנכס</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>שגיאה. לא נקבעו תעריפים לנכס</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>שגיאה לא נקבעו סוגי חדר בנכס</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','ערוך נכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','תזכורת לתשלום');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>חיוב paypal שלך הושלם וחשבונית על קנייתך תשלח אליך. אתה יכול להכנס לחשבונך באתר ולראות את החשבונית</b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','אין שרותים נוספים לחיוב');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','הפקדה');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','סכום מלא');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','סכום שחויב בזמן ביצוע הנמנה');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','התשמש באופציה זאת, אם החלטת לחייב את החשבון בזמן ביצוע הזמנה. בחר אם ברצונך לחייב סכום חלקי או מלא');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','חודשים להצגה');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','כמה חודשים ברצונך להציג בלוח זמינות החדר?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','חתום בשם: ');

// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','מעברים');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','ביטול');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','אנא בחר חדר שברצונך להוציא מהשימוש ותאריכים השורים<br>אם החדר לא מסומן, הוא לא יכלל ברשימת חדרים להזמנה, עד שתאריכים לא יפוגו<br>כשבחרת תאריכים מתאימים לחץ על הכפתר אישור הכחול כדילשנות את מצב החדר');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>נראה שהתנתקת מהמערכת, אנא התחסר שנית');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','סיבה');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','השתמש בשערי תשלום?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','הגדר את זה ככן אם ברצונך להשתמש בחיובים מקוונים<b>הערה:</b>זה לא מבטל את חישובי ההפקדות בזמן תהליך ההזמנה. כדי לבטל את האופצייה הזאת, אנא ערוך את הטמפלייט שמתייחס להפקדות בהזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','אנא בחר צורת תשלום');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','לאפשרי שערי תשלום');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','הגדרות פלגין מעודכנות');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','הגדרות פלגים משובצות');
/**
* @ignore
*/
define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK','External link');
/**
* @ignore
*/
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');/**
* @ignore
*/
define('_JOMRES_COM_ENCRYPTION','קידוד');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','השתמש בקישו mCrypt ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','הגדר ככן אם ברצונך שקידוד mCrypt  יוכנס ל-PHP');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','מפתח הצפנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','מצב הצפנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','שיטת חישוב הצפנה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','כרטיס אשראי נצפה');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','כרטיס אשראי עודכן');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','ערוך כרטיס אשראי');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','ערוך גודל אייקון');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','ריבוע נמדד בפיקסלים');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','אוסף תמונות הנכס נשמר');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','תמונות כבר בתיקיה');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','מצגת');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','הצג קישור למצגת?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','הראה מצגת בדף?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','הגדר את זה ככן אם ברצונך להראות מצגגת ליד פרטי הנכס');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','מצגת בגובה מלא');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','גובה יעד של מצגת ממוזרת');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','מצגת תמונות');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />מצטערים, אין תמונות של הנכס כרגע. אנא העלה כמה תמונות לאתר');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','רוחב חלון קופץ');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','גובה חלון קופץ');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','מיקום התמונה');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','שנה את זה רק במרקה שברצונך להשתמש במונות ממיקום אחר. הדרך ההתחלתית היא \'/images/stories/jomres/\'');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','הצג קישור לתעריפים');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','לאפשר חלונות קופצים?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','אם מוגדר לא - הקישורים יפתחו באותה שורה.  עדיין ניסיוני ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','עלאת תמונות למצגת');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','

השתמש בטופס זה כדי לעלות תמונות מרובות של הנכס<br/><b>הערה</b> כל תמונה עם שם זהה תוחלף בתמונה חדשה<br/><b>Note</b> כל התמונות ישמרו ל: /images/stories/jomres/*property_uid*');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','שונות');
/**
* @ignore
*/
define('_JOMRES_A','תצורת האתר');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','השתמשמ במאפיינים גלובליים');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','הגדר ככן אם ברצונך שכל הנכסים ישתמשו באותם מאפיינים');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','כדי להקצות תמונה למאפיין הזה, יש קודם לעלות תמונת נכס ל-/images/stories/jomres/pfeatures/');
/**
* @ignore
*/
define('_JOMRES_A_ICON','אייקון');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','בחר פלגין חיפוש שברצונך להשתמש');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>מצטערים, החיפוש לא החזיר תוצאות, אנא נסה שנית</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','אתה בטוח רוצה לעשות את זה?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','הזמן חדר');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','הזמן את הנכס');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','מספר בטחון');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','הצג תעריפים בשורה?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','כתובת');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','מידע מפורט');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','לחץ לבדיקת זמינות חדרים');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','הצג מידע על תעריפים');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','הצג כתובת מתחת לקישור זה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','הצג מידע אודות נכס מתחת לקישור זה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','הצג חדרים וזמינות מתחת לקישור זה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','הצג פרטי תעריף מתחת לקישור זה');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','תעריפים קבועים');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','ממוצע');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','בחר סוג תעריף שברצונך להשתמש בו');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC','באפשרותך לבחור אחד משני צורת חישוב. ראשון היא - תעריף קבוע, המאפשרת להציע מספר תעריפים לאורח ועלות השהייה זהה כל הזמן. זה שימושי אם ברצונך להציע  תעריפים שונים לאותו יום. לדוגמא תעריף BB ותעריף HB. בחר ב"ממוצע" כדי לעדכן מחירים לאותו יום. ותוכנה תיקח את כל התעריפים ותחשב את הממוצע לתקופה מסוימת');

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','השתמש בפורטל Jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','ההגדר ככן אם ברצונך להתחבר לפורטל Jomres e');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','הצג קלט תאריל עזיבה');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"ההגדר כ-לא אם אתה לא אינך מעוניין להציג תאריך עזיבה כתיבת קלט. התמש בזה אך ורק אם אתה יודע מה לעשות, כי תאריך עזיבה תמיד יהיה יום לאחר ההגעה ");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','הגבלת תאור');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"זה מגביל את כמות התווים המוצגים בדף כש תאור הנכס מוצג.");

// v1.4g+
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','מכפיל מחיר יומי');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"מאפשר למשתמש לצרף הכפלה למחיר היומי. שימושי כשהזמנות מתומחרות למשל במחיר שבועי");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','רוחב חלון מצגת');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','גובה חלון מצגת');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','עדכן');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','לחץ על כפתור עדכן כדי לבדוק זמינות');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','לשנות צורת תאריך משומש?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','הגדר כ-כן אם ברצונך להציג תאריכים בפורמט  date()  (ראה <a href="http://www.php.net/manual/en/function.date.php">פו</a>). הגדר כ-לא כדי להשתמש ספורמט strftime() (ראה <a href="http://www.php.net/manual/en/function.strftime.php">כן</a> eg. %b %d %Y ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','לחץ כדי לפרסם באתר');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','לחץ כדי להוריד מהאתר');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','אנא השלם שדות הבאים: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' תודה רבה.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','השתמש בסוג חדר גלובלי');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','הגדר כ-כן אם ברצונך שכל החדרים יהיו מאותו סוג, מודר מראש');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','כדי להקצות תמונה לסוג חדר זה, קודם צריך לעלות התמונות של סג חדר ל-/images/stories/jomres/rmtypes/ ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','הכנס צבע גבול שגיה');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','הכנס צבע רקע לשגיה');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','מדינה ברירת מחדל בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','השתמש בעזרה?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','הגדר כ-כן אם ברצונך שטקסט עזרה יוצג מעל החיפוש');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','ערוך את טקסט עזרה להזמנות');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','פריטים מסומנים באדום הינם פריטי חובה');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','משתמשים יכולים להוסיף נכסים?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','הגדר כ-כן אם ברצונך לאפשר להוסיף נכסים משלהם בלי אישור מנהל אתר');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','אנא הכנס מדינה ואזור של הנכס שלך');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','אנא השלם את פירטי הנכס שלך');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','פריטים מסומנים באדום הינם פריטי חובה');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','נכס נוצר');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"מצטערים. אין באפשרותך להוסיף נכסים למערכת. הינך צריך להיות רשום כמשתמש מורשה ולא בעל נכס שכבר במערכת");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Cנכס שנוצר: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','עבור משתמש: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','לחיוב יומי?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' ליום');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','הצג לוח שנה מתחילת השנה?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','לוח זמינות מוצג מתחילת השנה הנוכחית');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','הצג מידע מפורט על החדר?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','אם תגדיר ככן, התוכנה לא תציג את כל האפשרויות ההזמנה. במקום זה רק יופיע שהחדר פנוי');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','מספר חדרים פנויים');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','אנא בחר מספר חדרים שאתה רוצה, וסוגם.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','חייב לבחור מספר');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','חזרה לפרטי הנכס');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','סוגי חדרים');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','השתמש במטה תגים?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','אם מוגדר ככן, Jomres תייצר מטה-תגים משם נכס ותאורו');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','מילות עצר');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"אלא מילות העצר. אלא מילים שאתה <i>לא</i> רוצה להציג במטה-תג.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','עוד אלמנטים למחיקה');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','ישנם אלמנטים שלא אמורים  להופיע במטה-תג, כגון סימבולים, גרשיים וכו');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','תדירות');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','מספר פעמים שמילה צריכה להופיע, כדי להכלל במטה-תג');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','גבול חיפוש רנדומלי');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','הצג קישור לגוגל-מטבעות בדף תעריפים?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','להמיר ל-');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','לאשר למשתמשים לעבוד עם עורך HTML');

// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','השתמש בטופס זה, כדי לרשום את הזמנתך. העבר סמן מעל "I" למידע נוסף אודות העמודה. עדכן את הזמנתך, שנה זמני הגעה או עזיבה ומספר אורחים. לאחר מכן - בחר חדר מרשימת חדרים פנויים, והזמן. לבסוף תדרש להכניס מידע אישי על עצמך, כדי לקבל את ההזמנה באימייל ולאשרה');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','השתמש בטופס זה, כדי לרשום את הזמנתך. העבר סמן מעל "I" למידע נופס אודות העמודה. עדכן את הזמנתך, שנה זמני הגעה או עזיבה ומספר אוחים. לאחר מכן - בחר חדר מרשימת חדרים פנויים, והזמן. לבסוף תדרש להכניס מידע אישי על צמך, כדי לקבל את ההזנהבאימייל ולאשרץ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','פירוט הזמנה');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','בחר פרטים נדרשים להזמנתך');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','זמינות ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','בחר את החדרים שאתה רוצה');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','בדוק פו, כדי לראות עם הנכס פנוי כרגע להזמנות');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','תוספות לבחירה');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','בחר כל תוספת שברצונך לכלול בהזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','ללילה');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','כתובתך');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','אנא הכנס את פרטיך. כל השדות חובה חוץ ממספר טלפון נייד');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','חדרים פנויים');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','בחר חדרים');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>תאריך הגעה הכי מוקדם הוא: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','ללילה:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','סה"כ:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','תוספות:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','מיסוי:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','הנחה:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','סה"כ כללי');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','אורחים');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','הקלק כעת כדי להוסיף את החדר לבחירה');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','הקלק כעת כדי להסיר את החדר לבחירה');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','סוגי אורחים');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','סוג');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','סוג האורח כגון: תינוק, ילד או סטודנט');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','הערות');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','הערות שברצונך להוסיף לסוג אורח זה');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','מקסימום');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','המספר המירבי של סוג אורח זה שיכול להופיע בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','הוא אחוז');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','המספר המחושב הוא אחוז ממחיר בסיסי של החדר, אם מוגדר כלא -  המספר שתכניס פשוט  יחובר או יחוסר ממחיר הבסיסי');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','להוסיף משתנה?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','המספר המחושב מחובר או יחוסר ממחיר הבסיסי של החדר הגדר כלא אם ברצונך שהנחה הזאת תהיה מספר קבוע ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','משתנה');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','זהו גודל המשתנה');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','עודכן סדר סוגי האורח');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','פורסם סוג אורחים');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','נמחק סוג אורחים');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','נוצר סוג אורחים');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','עודכן סוג אורחים');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','עודכן סוג אורחים');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','הצג רשימת חדרים בדף פרטי הנכס?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','הצג קישור לרשימת חדרים בדף פרטי הנכס?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','הצג <b>רק</b> לוח זמינות/רשימת חדרים?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','הגדר את זה ככן אם ברצונך להציג דף של הנכס בצורה כזאת, שחדרי הנכס יופיעו באותו דף. זה באמת מיועד לנכסים בעלי חדר אחד. כגון בעלי דירות ויחידות נופש');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS לשימוש באתר');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','המרווח המינימלי בין הגעה לעזיבה');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','מרווח מנימלי בהזמנות בין יום ההגעה ליום העזיבה');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','הצג מספר חדר בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','הצג שמות חדר בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','הצג כותרת תעריף בטופס הזמנה');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','הצג overlib כותרת בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','הצג overlib תאור בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','הצג overlib תעריפים בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','הצג overlib כוכבים בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','הצג overlib עזיבות בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','הצג overlib של מינימום ימים בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','הצג overlib של מקסימום ימים בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','הצג overlib של מינימום אנשים בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','הצג overlib של מקסימום אנשים בטופס הזמנה');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','הצג overlib של מספר החדר בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','הצג overlib של שם החדר בטופס הזמנהe');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','הצג overlib של סוג החדר בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','הצג overlib של עישון בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','הצג overlib של גישת נכים בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','הצג overlib של קומה בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','הצג overlib מספר אנשים מירבי בטופס הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','הצג overlib מאפייני החדר בטופס הזמנה');

/**
* @ignore
*/
define('_JOMRES_ORDER','סדר');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','הגדרת תוכנה לשימוש בנכס עם חדר יחיד, כגון דירה או ווילה, אבל יצרת יותר מחדר אחד. זה יכול לגרום לבעיות. אנו ממליצים שתוריד את החדרים המיותרים, או שתאפשר שימוש בנכסים עםמספר חדרים יותר גדול מאחד');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','נדרש');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','ימים לפני הגעה');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','מספר מינימלי של ימים שאמורים לחלוף מיום לפני תאריך הגעה');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','ללילה:');

/**
* @ignore
*/
define('_JOMRES_DTV','ווריאציות סוגי תאריך');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','יום השבוע');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','טווח תאריכים');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','ימי שהייה');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','רגע אחרון');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','ימי השבוע');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','יום של השבוע');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','בחירת רכיבי סוג תעריף');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','התיבת בחירה הזאת מאפשרת לבחור אובייקט תעריף שייצרת או הורדת כקומפוננט נפרד ');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','ברירת מחדל לסוג אורח');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','מספר ברירת מחדל לסוג אורח ראשון. אם הינך משתמש בסוגי אורחים, זהו יהיה מספר אורחים שיופיע אוטומטית בהזמנה');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','הזמנות פתוחות רק למשתמשים רשומים?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','מצטעריםת עלך להיות משתמש מורשה, כדי לבצע הזמנות באתר. לחץ כאן כדי להרשם ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','צבע הקישור להזמנות נוכחיות');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','גבולות של סופי שבוע');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','איזה פלוגין ללוח בקרה תרצה להשתמש?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','אם התקנת פלוגין של Jomres ללוח הבקרה, תוכל לבחור את הלוח פו');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','חדר מוזמן');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','הזמנות ספר שחור');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','לעגל סכום הפקדה למספר שלם?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','לחייב הפקדות?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','לשמור חיובי תעריפים כמספרים שבועיים');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','יש לך לשמור חיובים כמספרים שבועיים או כמספרים יומיים. אם תרצה לראות תוצאות שבועייות - הגדר את זה כ-כן');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','מחיר לשבוע');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','תאריכי הגעה קבועים?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','אם בחרת לאופציה של תאריכי הגעה קבועים, תאריכם יוצגו בתיבת בחירה');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','חסרה בחירת עישון');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','תאריך הגעה לא תיקני');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','תאריך עזיבה לא תיקני');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','ההזמנה יותר מדי קצרה, בין ההגעה לעזיבה אמורים להיות לפחות מספר זה של ימים: ');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','תאריך הגעתך הוא');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','בחירת סוג אורח שגויה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','אנא בחר את סוג האורח');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','יש לך יותר מדי משתתפים לתעריף הזמין');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','בחרת יותר חדרים מאשר מספר האורחים, לחץ על מספר החדר כדי להוריד אותו מהרשימה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','יותר מדי אורחים למיטות הפנויות');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','אתה צריך לבחור יותר חדרים');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','בחר חדר');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','שם פרטי הינו שדה חובה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','שם משפחה הינו שדה חובה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','מספר בית הינו שדה חובה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','רחוב הינו שדה חובה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','עיר הינו שדה חובה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','איזור הינו שדה חובה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','מיקוד הינו שדה חובה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','מדינה הינו שדה חובה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','טלפון הינו שדה חובה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','טלפון נייד הינו שדה חובה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','אימייל הינו שדה חובה');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','אימייל שהקלדת הינו חוקי');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','אין אפשרות לבדוק דומיין של האימייל');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','יש חדרים פנויים!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','לא נבחר אף חדר');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','מספר הזמנה');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','אפשר להזמין, רקע הודעת טקסט');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','לרוקן משתנים בטמפלייטים');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','הגדר כן, כדי לאפשר את ה-DHTML לשפוך משתנים לכל גגג טמפלייטץ שימושי אם ברצונך אלמנטים מסויימים שיופיעו בטמפלייטים מסוימים');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','מספר באחוזים');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','הגדר ככן אם חישוב ליחיד מבוצע באחוזים, הגדר כ-לא אם זה יהיה מספר קבוע');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','הגבלת זמינות חדרים/תעריפים');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','השתמש בקלט זה כדי להגביל את מספרים חדרים הפנויים ותעריפים שרשומים בטופס הזמנה. הגדר כ-0 אם אינך מעוניין בהגבלה ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','כרגע אין חדרים פנויים');

// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','תחום');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','יתרה תחומה, באחוזים');


// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','הצג תפריט כאייקונים?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','הגדר כלא אם תרצה פנל ניהול בצורת טקסט');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','הזמן עכשיו: ');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','מצב עריכה גלובלי?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','טפל בפונקציה הזאת. אם תגדיר כן, אז השינויים שתבצע ישפיעו על כל הנכסים/חדרים במערכת');

/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','השתמש במטבע גלובלי?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','אם מוגדר כן, כל הנכסים ישתמשו באותה מטבע');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','סימן מטבע גלובלי');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','להסתיר את המרכיב?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','אם מוגדר כן, הראש של המודל לא תוצג בדף');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','מנהל נכס ראשי');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','ימי שבוע בלבד');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','תעריף בתוקף רק אם תקופת השהייה כוללת ימי סופשבוע (שישי או שבת) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','ימי סופשבוע');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','בחר את ימי סופהשבוע שלך. תעריפים המאפשרים, או שאינם מאפשרים, סופי שבוע יקחו זאת בחשבון בזמן יצירת רשימות החדרים');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','בחר את המדינה שלך לפני הוספת נתוני הנכס');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','שמור את השינויים בפרטי הנכס לפני ההעלאת תמונות');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','מחירים מ - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','הכל');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'אזור');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'תכונות');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'תיאור');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'זמינות');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'סוג');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','חפש לפי מדינה');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','חפש לפי אזור');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','חפש לפי מקום ישוב');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','חפוש תכונות.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','חפש');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','הזן מילת חיפוש בקופסה ולחץ על הכפתור');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','מלה (מלות) חיפוש :');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','הזן בבקשה את מועדי ההגעה והעזיבה המתוכננים שלך ולחץ על הכפתור על מנת לאתר נכסים זמינים בתאריכים הנבחרים');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','הצג את רשימת כל הנכסים ממוינים לפי סוג נכס');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','הצג את רשימת כל הנכסים ממוינים לפי סוג חדר');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','ברירת מחדל');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','שם נכס');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','אזור שבו נמצא הנכס');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','מקום ישוב שבו נמצא הנכס');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','התחל');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','רשימת נכסים');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','פרטי נכס');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','טופס הזמנה');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','עדכן את פרטי הכתובת שלך');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','בודק מחדש את זמינות החדרים (בחירת החדרים תאופס)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','בודק מחדש זמינות');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','משנה את התוספות האופציונליות');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','משנה את בחירת החדרים');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','מעדכן את פרטי הכתובת');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','מצטער, שדה כתובת אחד או יותר אינם נכונים');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','תמונת חדר');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','מבנה מטבע');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','הראה אפשרויות מנהל בתור תמונה');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','אפשרויות חיפוש');
/**
* @ignore
*/
define('JOMRES_COM_A_CALENDARNOTE','שים לב ! אפשרויות אלו משפיעות רק על מבנה השפה במודולים. על מנת להתאים את מבנה שפת גווה עבור נכס מסויים, נא ערוך את אפשרויות לוח השנה באותו נכס');
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS','יומני זמינות');
/**
* @ignore
*/
define('JOMRES_COM_A_LOGS_NOENTRIES','אין רשומות ביומן. זהו מצב נורמלי, אתה צריך לשנות ידנית את jonres.php על מנת להפעיל רשומות.');
/**
* @ignore
*/
define('JOMRES_COM_A_DATETIME','תאריך שעה');
/**
* @ignore
*/
define('JOMRES_COM_A_MESSAGE','הודעה');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3

/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_NORMAL','רגיל');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','מתקדם');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','ניהול מיקרו');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','מצב הגדרת מבנה תעריף');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>אזהרה: מעבר בין סוגי תעריפים שונים עלול להביא לאיבוד נתונים. ראה את ההערה להלן בהקשר זה</b>.
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
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','הראה רשימת חדרים בדף פרטי הנכס?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','סוג נכס');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','נכס בעל חדר אחד בלבד');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','מספר אנשים מקסימלי לחדר');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','מס אנשים מקסימלי להזמנה');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','הוסף הערה');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','ערוך הערה');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','בטל הערה');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','צפה בהערות');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','נוספה הערה חדשה');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','הערה אחרי עריכה');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','הערה מבוטלת');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','האפשרויות שלי');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','הנך גולש מזדמן באתר. במידה ותכנס/ תרשם באתר זה, יתאפשר לך לעיין במידע בקשר להזמנתך');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','הצג רשימת הזמנות');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','ההזמנות שלי');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','הצג רשימת הזמנות שלא שולמה בעבורן מקדמה');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','הצג הזמנה');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','הצג מועדפים');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','לא הוספת עדיין לרשימת המועדפים!');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','הוסף למועדפים');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','סוג נכס');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','נכסים באתר');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','מחיר חכם');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','פעיל');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','רכיב זה מאפשר לך לנהל ולהגדיר את מחירי החדרים בצורה דינמית');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','רוב העסקים יחשבו מחדש את מחירי החדרים בהתבסס על מספר החדרים מסוג נדרש שהם זמינים ביום נתון. דבר זה מאפשר להם להציע הנחות על סוג חדר שאינו תפוס בתקופה נתונה 
במטרה למשוך עסקאות שאחרת יוחמצו
אפשור והגדרת רכיב זה מאפשר לך להציע מחיר מתואם המבוסס על מספר החדרים מסוג נבחר הזמינים בנכס בתאריך מסויים.
ערך הסף של הימים מגדיר את מספר הימים עד ליום ההגעה לפני שהמחירים מתואמים על ידי תכונה זו,
ואז אופציית האחוזים מאפשרת להגדיר את אחוז החדרים שיכולים להיות זמינים לפני שהנחה מסוימת נתנת.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','מרווח ( מספר הימים מיום ההגעה להיום)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','אחוז תפוסה < 10%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','אחוז תפוסה < 25%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','אחוז תפוסה < 50%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','אחוז תפוסה< 75%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','הנחה %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','סוג חדר ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' אחרי הנחה מ - ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' אל ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' מחיר החדר ללא הנחה ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','מפתח למפת גוגל');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','פקודת GET יכולה לקבל ממשק למפת גוגל מהאתר<a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. לאחר שהכנסת את מפתח המפה שלך במקום זה, גומרס יראה את המפה בדף פרטי הנכס שלך');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','השתמש ב-SSL בטופס ההזמנה?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','עליך להבטיח שברשותך רישוי SSL תקף על מנת ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','מס אנשים מקסימלי שאפשר לארח בנכס');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','רגע אחרון');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','פעיל?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','בחר כן אם ברצונך להציע עסקאות רגע אחרון');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','מרווח');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','אם מתבצעת הזמנה ויום ההגעה הו רק X ימים מיום ההזמנה, אפשר לתת את ההנחה');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','הנחה');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','באחוזים');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','הנחה נתנה בהזמנה זו!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','מחיר השהייה הופחת ב ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','נכס זה מציע הנחת רגע אחרון של ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' אחוזים אם תתבצע הזמנה להגעה לפני');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE',' אחוזים או יותר אם תתבצע הזמנה להגעה לפני ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. הזמן כעת על מנת להפיק את המקסימום מעסקה זו');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','נכס זה מציע הנחת רגע אחרון של ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID','  אחוזים אם תתבצע הזמנה להגעה לפני ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. הזמן כעת על מנת להפיק את המקסימום מעסקה זו');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','מידע תעריף מילולי');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','בחר כן על מנת להציג מידע עריפי מפורט בחלון קופץ פרטי הנכס/ תעריף');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','צמצם אפשרויות תצורה');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC','קבע זאת ל-כן על מנת להפחית את מספר האפשרויות הזמינות למנהלי נכסים בקטע הגדרות כלליות. דבר זה שימושי אם אינך מעונין שמנהלי הנכסים ישנו הגדרות רבות מדי. 
לחילופין באפשרותך לערוך את JOMRE_CONFIG.PHP על מנת להגדיר ברירות מחדל לנכס');
/**
* @ignore
*/
define('_JOMCOMP_AMEND','הזמנה - בחירת נכס');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','בחר נכס חדש');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','חוזה מקורי');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','מקדמה שולמה');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','מקדמה לא שולמה');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','הכתב סכום כללי');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','הכתב אחוז הנחה');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','בטל');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','פנל בקרה פורטל הזמנות');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','הגדרות');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','דמי ניהול בסיסיים');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','בחר את שיעור דמי הניהול הבסיסיים שיושמו לנכס במקרה ושיעור אחר לא נקבע במפורש');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','הצג רשימת תעריפי ניהול');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','תעריפי ניהול');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','כותרת');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','סוג');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','שעור דמי ניהול');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','קוד מטבע');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','הצג  נכסים');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','שם נכס');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','כתובת נכס');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','לנכסים שצבע הרקע שלהם אדום עדיין לא נקבע שיעור דמי ניהול');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','מספר רשיון');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','מספר הרשיון שלך לרכיב הפורטל');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','סטטיסטיקות');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','סטיסטיקות עבור: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','תקופה: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','נכסים - הקלקות');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','הצג נכס');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','ינואר');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','פברואר');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','מרץ');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','אפריל');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','מאי');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','יוני');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','יולי');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','אוגוסט');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','ספטמבר');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','אוקטובר');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','נובמבר');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','דצמבר');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','מס הזמנות');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','ערך הזמנות');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','שמוש בחדר');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','הערכת דמי ניהול');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','שיעור דמי ניהול');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','הצג הזמנות');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','זיהוי נכס');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','זיהוי לקוח');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','זיהוי בעלים');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','זיהוי חשבונית');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','סך כל הזמנה');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','זיהוי איש קשר');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','מס איש קשר');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','קוד מטבע');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','נוצר');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','נשמר בארכיון');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','תאריך שמירה בארכיון');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','הוסף נכס');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','מקור ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','האם זה נכס מרובה חדרים?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','האם זהו נכס מסוג נכס-לינה ורוחת בוקר-פנסיון? בחר כן. אם זה נכס בעל חדר אחד כמו וילה-בית פרטי בחר לא');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','הוסף פריט לחשבון');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','על המנהל להוציא חשבונית');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','נכסים מקושרים (אם ישים)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','ערך');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','תאור');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"פריט תמחור הוסף בהצלחה ל -  ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"הצג הזמנות");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"נכשל בהוספת פריט תמחור");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"שגיאה, לא קבעת ערך לחשבון");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','ביכולתך ליצור קובצי שפת סוג נכס ספציפיים על ידי קביעת התיאור לשם של תת מחיצה, לדוגמא ניהול יכטות והעתקת קובץ שפה לתת מחיצה זו. 
באפשרותך לשנות את קובץ השפה לסוג נכס זה כך שחדרים הופכים , לדוגמא, לקלטות וידאו או כל מוצר שניתן להשכירו');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','אינך יכול לבטל נכס זה מאחר וזה הנכס היחיד שיש לך גישה אליו. אם ברצונך למנוע גישה לנכס זה, השתמש בבחירה לא לפרסום בסרגל הכלים שלך ');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','אם זו התקנה לדוגמא ובכוונתך להתקדם לגומרס סולו - הגבלה לנכס אחד בלבד - אתה צריך ליצור נכס חדש תחילה ואז לבטל את הנכס הנוכחי לפני שינוי מפתח הרשיון למפתח רשיון סולו
שתקבל בזמן הרכישה');

/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS',"שלח בדואל הודעות מרשם שגיאות");
/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS_DESC',"קבע זאת ל-כן אם ברצונך שJOMRES.NET יועתק אוטומטית כאשר נוצרת הודעת מרשם שגיאות.
זה מאפשר לנו לפעול בגישת מניעה מראש לטיפול בבעיות פוטנציאליות, בתקווה לפתור בעיות לפני שאתה מודע להן כלל. שים לב שתכונה זו אינה מאופשרת על שרת מקומי");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP',"האם נכס זה הוא מלון-לינה וארוחת בוקר-מקום ארוח-פנסיון?");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"אפשרויות הגדרה משתנות אם אתה משכיר חדרים בנכס או את הנכס עצמו. בחר כן אם אתה מציע חדרים. בחר לא אם אתה מציע את הנכס כולו ");
// Jomres v3.0.6

/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK',"השתמש בבודק כתובת דואל של גומרס? ");
/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"הפעל בדיקה מדוקדקת על דואל שנשלח. כמה שרתי רשת מאובטחים יזרקו שגיאה פנימית 500 אם אתה מנסה לשלוח דואל לכתובת לא קיימת.
הפעלת תכונה זו מאפשרת לנו להשתמש בתכונות CHECKDNSRR של PHP לפני שמנסים לשלוח דואל ולמנוע שגיאות 500 אלו");

// Jomres v3.1

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"סך הכל אירוח");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"לילה - לילות ב");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"לכל חדר ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"שדרג את סך כל השהייה שלך ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"סיכום מחירים");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_ALERT',"בבקשה קרא והסכם ל- ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_HEADER',"סכום ההזמנה שלך מוצג להלן<br /> על מנת לעשות שינוי כלשהוא, בבקשה לחץ על כפתור שינוי הזמנה");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMENDTEXT',"אם יש צורך בשינוי המידע שלמעלה בבקשה לחץ כאן");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMEND',"עדכן הזמנה");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_SPECIALS',"בבקשה ציין בקשות מיוחדות בחלון שלמטה");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"אני מאשר שהמידע למעלה הוא נכון ןמסכים ל-");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',"רחף מעל תמונה מוקטנת לתמונה גדולי יותר");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION',"הראה מצגת שקופיות מעל פרטי הנכס או מתחתם");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"למעלה");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"למטה");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"שניהם");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"per person per night ");

// Jomres 3.1.10
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
/**
* @ignore
*/
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
// Jomres 3.1.11
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS_DESC',"The absolute path to the available logs. Remember, you will still need to enable logging by editing jomres.php manually. although error logging is automatic all other logs must be switched on by yourself.");
// Jomres 3.1.13
/**
* @ignore
*/
if (!defined('_PN_LT'))
	define('_PN_LT','&lt;');
/**
* @ignore
*/
if (!defined('_PN_RT'))
	define('_PN_RT','&gt;');
/**
* @ignore
*/
if (!defined('_PN_PAGE'))
	define('_PN_PAGE','Page');
/**
* @ignore
*/
if (!defined('_PN_OF'))
	define('_PN_OF','of');
/**
* @ignore
*/
if (!defined('_PN_START'))
	define('_PN_START','Start');
/**
* @ignore
*/
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Prev');
/**
* @ignore
*/
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Next');
/**
* @ignore
*/
if (!defined('_PN_END'))
	define('_PN_END','End');
/**
* @ignore
*/
if (!defined('_PN_DISPLAY_NR'))
	define('_PN_DISPLAY_NR','Display #');
/**
* @ignore
*/
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Results');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>Please enter the message you\'d like to send to ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact hotel');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Property enquiry from ');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');

define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');

define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Please select your required accommodation from the list on the right');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min rooms already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max rooms already selected');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
/**
* @ignore
*/
define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
/**
* @ignore
*/
define('_JOMRES_AVLCAL_NOBOOKINGS',"Available"); 
/**
* @ignore
*/
define('_JOMRES_AVLCAL_QUARTER',"Some bookings");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_HALF',"Half booked");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_THREEQUARTER',"Mostly booked");
/**
* @ignore
*/
define('_JOMRES_AVLCAL_FULLYBOOKED',"Fully booked");


/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View property task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add property type to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add property name to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append property id to property name');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Property type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default property type');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all property types');
/**
* @ignore
*/
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
/**
* @ignore
*/
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X rooms selected');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
/**
* @ignore
*/
define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
/**
* @ignore
*/
define('JOMRES_WORD_SAVING','Saving...');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
/**
* @ignore
*/
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
/**
* @ignore
*/
define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
/**
* @ignore
*/
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
/**
* @ignore
*/
define('_JOMRES_PHRASE_PROCESSING','Please wait, your order is being processed...');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING','Jomres logging');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');

/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
/**
* @ignore
*/
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form room list show room type image');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
/**
* @ignore
*/
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
/**
* @ignore
*/
global $jomresConfig_secret;
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD','Method');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s http://".JOMRES_SITEPAGE_URL_ADMIN."&task=cronjobs&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
/**
* @ignore
*/
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
/**
* @ignore
*/
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
/**
* @ignore
*/
define('_JRPORTAL_TAXRATES_RATE',"Rate");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_USER',"User");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_STATUS',"Status");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RAISED',"Raised");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_DUE',"Due");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");

/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_NOHTML."&task=completebk");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
/**
* @ignore
*/
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");


/**
* @ignore
*/
define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");

/**
* @ignore
*/
define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_CODE',"Coupon code");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
/**
* @ignore
*/
define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
/**
* @ignore
*/
define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
/**
* @ignore
*/
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
?>