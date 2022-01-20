<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.2
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Бърза резервация');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Профили');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Конфигурация на обекта');
jr_define('_JOMRES_COM_MR_BACK', 'Назад');
jr_define('_JOMRES_COM_MR_YES', 'Да');
jr_define('_JOMRES_COM_MR_NO', 'Не');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Нов');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Нов обект');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Нов гост');
jr_define('_JOMRES_COM_MR_SAVE', 'Запиши');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Име');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Пристигане');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Отпътуване');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Потребителско име');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Ниво на достъп');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Потребителя е модифициран');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Всички резервации');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Промени резервацията');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Пристигане/Заминаване');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Гост');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Стая');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Плащане');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Име');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Фамилия');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Специални изисквания');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Някои специални изисквания биха могли да доведат до покачване на цената.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Отмени резервацията');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Номер на къща/блок/улица');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Улица');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Град');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Пощенски код');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Номер');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобилен номер');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Email');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Не може да се отмени резервацията, тъй като госта е чекиран');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Депозита не е платен');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Потвърди отмяната');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Резервацията е отменена');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Дни до пристигане');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Вид резервация');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Извади стаята');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Рецепция');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Интернет');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Име на стая');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Стая');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Етаж');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Достъп с инвалидна количка?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Максимум брой хора');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Вид на обекта');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Описание на вида обект');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Екстри в стаята');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Депозита е платен');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Въведи депозит');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Общо за плащане');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Референтен номер на депозита');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Резервация');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Депозит');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Депозита е записан');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Стаите');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Обект');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Вид на обекта');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Промени детайлите на госта');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Име');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Фамилия');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Къща');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Улица');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Град');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Пощенски код');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Телефон');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Мобилен телефон');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Факс');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Направи своя избор');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Нощувки');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Общо');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Вижте конфигурацията');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Стаи');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Екстри в стаите');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Вид стаи');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Обект');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Екстри в обекта');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Стая');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Тип');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Име');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Номер');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Етаж');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Максимум настанени');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Features');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Редактирай');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Екстри в стаята');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Описание');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Добавена е екстра');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Екстрите в стаята са обновени');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Вид стая');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Абревиатура на вида обект');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Описание на вида обект');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Добавен е вид обект');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Редактирай');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Име');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Улица');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Град');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Регион');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Държава');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Пощенски код');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Телефон');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Факс');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Уеб сайт');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Екстри');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Обекта е обновен');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Екстри в обекта');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Абревиатура на екстрите в обекта');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Описание на екстрите в обекта');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Обновени екстри');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Цени');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Тарифа');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Описание');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Валидна от');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Валидна до');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Цена на нощ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Минимум дни');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Максимум дни');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Минимум гости');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Максимум гости');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Вид на обекта');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Игнорирай на човек на нощ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Позволи и през уикендите');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Редактирай');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Клонирай');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Тарифата е изтрита');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Редактирай тарифата');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Резервацията е записана');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Чекирай гост');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Отпиши гост');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Изведи всички резервации');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Начална страница');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Гост администратор');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Администратор на обект');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Провери заетост');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Име');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Фамилия');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Номер на къща');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Улица');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Град');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Пощенски код');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Телефон');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобилен телефон');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Няма стаи, които да удовлетворят търсенето Ви. Намалете броя на хората и (или) датите.');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Благодарим, че резервирахте с нас.<br><br> <b>Моля забележете, че това е предварителна резервация и не е потвърдена преди да получите официално писмо от нас.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Чекирай гост ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Госта е чекиран ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Изпрати гост ');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Добавки');
jr_define('_JOMRES_COM_A_TARIFFS', 'Тарифи и валута');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Качи файл');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Добавки за 1 човек');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Избери Да за да правиш добавки за 1 човек');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Добавка за един гост');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Депозита процент ли е?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Депозита процент от общата резервация ли е? Ако не е, тогава депозита ще бъде постоянна стойност');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Депозит');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'На човек, на нощувка');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Избери Да за да настроиш за човек за нощувка. Ако е Не, тогава ще бъде калкулирано за стая за нощувка');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Големина на файла');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Макс. големина на файла');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Резервирани стаи');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Детайли за резервацията');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Напомняме, че резервацията има силата на договор. Ако по някакъв начин скъсите престоя си, Вие дължите цялата сума от резервацията направена от Вас');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Глоби за отмяна</i> Ако канселирате почивката си, това трябва да стане в писмен вид. Налагат се следните глоби:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Под 15 дни');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Разпечатайте писмото-потвърждение');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Фактура');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Брой нощувки: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Цена на нощувка: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Общо');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Разпечатай фактура');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Добави услуги към сметката');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Описание на услугите');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Цена на услугите');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Други');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Добавено към сметката');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Качи снимка');
jr_define('_JOMRES_FILE_UPLOAD', 'Качи файл');
jr_define('_JOMRES_COM_A_ODDS', 'Др.');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Изкарай запитванията към миникомпонента');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Избери Да за да видиш заявките към миникомпонентите.');
jr_define('_JOMRES_FILE_DELETE', 'Изтрий снимката');
jr_define('_JOMRES_FILE_DELETED', 'Файла е изтрит');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Изтрий');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Не може да изтрие стаята, има резервации. Отнеми ги и пробвай отново.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Стаята е изтрита');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Изтрий екстрите към стаята');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Не може да ги изтрие.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Изтрити');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Изтрий екстри към обект');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Не може да ги изтрие.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Изтрити');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Изтрий вид обект');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Изтрити обекти');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Изтрий обект');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Обекта е изтрит');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Нямате права за изтриване');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Ширина файла след проразмеряването от Системата');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Карта');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Описание');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Настаняване от');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Дейности');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Указания за достигане с кола');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Летища');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Друг транспорт');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Условия');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Адрес');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Посетители на сайта могат да резервират онлайн');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Избери Да за да позволиш на всички посетители да резервират онлайн.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Резервациите са за фиксиран период');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Ако е Да, периода ще е фиксиран.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Период на резервацията: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Резервирани стаи');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Макс. периоди, eg 3x 7 периода = 21 ДНИ');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Това апартамент или вила е?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Изпрати и Плати сега');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Потвърди резервацията');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Понеделник');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Вторник');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Сряда');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Четвъртък');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Петък');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Събота');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Неделя');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'ПО');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'ВТ');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'СР');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'ЧЕ');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'ПЕ');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'СЪ');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'НЕ');
jr_define('_JOMRES_COM_A_AVLCAL', 'Пресметни заетост');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Цвят за днешна дата');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Цвят за дните от месеца на показване ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Цвят за всички останали дни');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Цвят на клетката за дни в които е свободно');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Цвят на клетката за дни които не са от избрания месец');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Цвят на клетката за заети дни');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Цвят на клетката за предварителни резервации');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Цвят на клетката за минали дати');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Зает/Не е налична');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Свободна за резервации');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Предварителни резервации');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Предварително определен ден на пристигане');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Само за сайтове предлагащи предварителна дата на пристигане.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Предварително фикциран ден на пристигане');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Престой в дни');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Показвай календара наред с другите табове?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Нагласи на Да за да показва календара');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Заетост');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Избери свободен ден за да се визуализира формата за резервации.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Блек резервации');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Нова Блек резервация');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Изтрий гост');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Госта е изтрит');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Не може да изтрие госта, има резервации на негово име и за други обекти.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Няма значение');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Формат на календара');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Инпът формат на календара');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Това позволява на потребителя да сменя инпът формата на датите в системата.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Фиксиран период на резервации позволява следобеден престой');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Продължителност на следобедния престой');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Публикуван');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Одит');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Дата');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Потребител (username)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Филтрирай по дата');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Статус');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Чакащи');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Пристига днес');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Лице заемащо стаята в момента');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Заминава днес');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Departure overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Не е пристигнал');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Създадена стая');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Обновена стая');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Изтрита стая');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Създадена екстра за стая');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Обновена екстра за стая');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Изтрита екстра за стая');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Създаден обект');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Обновен обект');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Изтрит обект');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Обновени свойства на обект');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Публикуван обект');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Създадена тарифа');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Обновена тарифа');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Добавена надценка за услугата');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Чекиран гост');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Въведен депозит');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Създаден гост');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Обновен гост');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Резервирал стая');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Създал екстра');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Обновил екстра');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Изтрил екстра');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Публикувал екстра.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Въвел Блек резервация.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Изтрил Блек резервация.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Екстри');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Описание');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Име');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Цена');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Обновена екстра');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Редактирай');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Изтрита екстра');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Администрационен панел на екстрите');
jr_define('_JOMRES_COM_A_EXTRAS', 'Показвай екстрите по време на резервация?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Избери Да за да се появи в резервационната форма');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Избираеми екстри.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Начална дата на Блек резервация');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Дата на пускане на възстановяване на услугата');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Блек резервации');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Грешка. Една или повече стаи не са свободни.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Стаи включени в Блек резервацията');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Няма Блек резервации за визуализиране');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Брой звезди');
jr_define('_JOMRES_COM_A_RESET', 'Нулирай');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Отменена резервация');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Търси за:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Символ на валута');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Код на валута');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Повече информация');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Лимитирай предварителните резервации?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Ако е Да, тогава клиента не може да резервиран предварително Н дни от днешната дата');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Ограничение на дни за предварителни резервации:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Такса');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Такса стая');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Фиксирана сума такса');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Процент такса');
jr_define('_JOMRES_COM_A_EUROTAX', 'Такса');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Процент такса');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Архивирай');
jr_define('_JOMRES_FRONT_TARIFFS', 'Цените');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Име');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Описание на тарифата');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Тип обект');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Валидна от');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Валидна до');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'на човек');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'на нощувка');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Не включва уикенди');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Минимум дни');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Максимум дни');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Минимум настанени');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Максимум настанени');
jr_define('_JOMRES_FRONT_PREVIEW', 'Преглед');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Редактиране включено?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Обновен личен текст.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Редактирай език');
jr_define('_JOMRES_FRONT_PTYPE', 'Тип обект');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Покажи типовете обекти');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Редактирай тип обект');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Тип обект');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Описание на тип обект');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Тип обект е записан');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Тип обект е изтрит');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Напомняне за плащане');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Няма допълнителни услуги за добавяне към сметката');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Депозит');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Цялата сума');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Стойност чарджвана при резервация');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Използвайте тази опция за да решите какво да бъде чарджвано от клиента по време на резервация.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Колко месеца от календара да показва');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'При заетостта на стаи, колко месеца от календара да показва?');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Начини за разплащане');
jr_define('_JOMRES_COM_A_CANCEL', 'Отмени');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Избери датите за които искате да направите Блек резервации и натиснете Приложи за визуализация. <br/> 
<br/> 
Изберете стаите, които искате да извадите. <br>Ако стая няма чек срещу нея, няма как да бъде сложена в Блек резервациите.<br/> ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b>Вие не сте в системата поради неактивност</b> Моля, влезте отново.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Причина');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Използвах онлайн разплащане?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Изберете начин на плащане.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Включено?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Променени опции на плъгина');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Въведени опции на плъгина');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Посети сайта на този обект');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Външен линк');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Сложи линк към сайта си тук.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Промени кредитна карта');
jr_define('_JOMRES_COM_A_EDITICON', 'Промени големина на иконката');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Слайдшоута');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Покажи линк към слайдшоута?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Покажи линк към слайдшоута наред с другите табове?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Галерия');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Покажи линк към тарифи?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Позволи попъп-и?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Качи снимки за слайдшоу');
jr_define('_JOMRES_A_TABS_MISC', 'Други');
jr_define('_JOMRES_A', 'Конфигурация на сайта');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Използвай общи екстри към обекти');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'За да зададете снимка трябва да качите файловете в папката /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ ');
jr_define('_JOMRES_A_ICON', 'Иконка');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Изберете плъгин за търсене.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Съжаляваме, Вашето търсене не даде резултат. Моля, променете параметрите и търсете отново.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Сигурни ли сте, че искате да го направите?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Резервирай стая');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Резервирай сега');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Покажи тарифите като табове?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Адрес');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Детайлна информация');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Избери за стаи и заетост');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Покажи адреса под този линк');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'ПОкажи детайлна информация под този линк');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Покажи стаи и заетост под този линк');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Флат тарифи');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Средни стойности');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Избери модела за ценообразуване, който искате да използвате');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Имате 2 метода на ценообразуване. Първия Флат метод позволява оферирането на различни на брой тарифи към клиента и цената на престоя е една и съща за целия период. Изберете Средни стойности ако искате да настроите цените към съответен период или дата. Системата ще открие всички тарифи за всеки един от дните в резервацията ще ги събере и ще ги осредни за периода');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Покажи дата на отпътуване?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Избери Не ако искате да не показвате тази дата.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Лимит на описание');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Това лимитира броя на букви в представянето на обекта.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Използвана дата() промени стила?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Публикувай');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Отмени публикуване');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Използвай глобални типове стаи/обекти');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'За да зададете снимка по този параметър трябва да я качите в папката /images/stories/'.JOMRES_ROOT_DIRECTORY.'/rmtypes/ ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Цвят при грешка');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Страна по подразбираме в резервационната форма');
jr_define('_JOMRES_JAVASCRIPT_', 'Полетата с червена звезда са задължителни');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Потребителите могат да регистрират свои обекти?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Избери Да ако искате да позволите на потребителите да вкарват обекти без интервенция от администратора.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Всички подчертани са задължителни.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Създаден обект');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Показвай календара от началото на годината?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Заестосста се показва от началото на настоящата година.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Брой свободни стаи');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Назад към информация за обекта');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Типове стаи/обекти');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Случайно лимитиране на търсенето');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Показвай преобразуване на валута при тарифата?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Преобразувай валута');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Позволи на потребителите да използват html?');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Използвайте формата за да направите резервацията си. Модифицирайте датите на пристигане и отпътуване, както и броя гости. След това изберете стаята /стаите/, които желаете. Когато се готови можете да добавите изброени екстри /ако има такива/ и да пристъпите към попълването на данните си. Когато формата разполага с достатъчна информация, бутона "Изпрати и Плати сега" ще стане активен и Вие ще можете да завършите желаната от Вас резервация.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Използвайте формата за да направите резервацията си. Модифицирайте датите на пристигане и отпътуване, както и броя гости. След това изберете стаята /стаите/, които желаете. Когато се готови можете да добавите изброени екстри /ако има такива/ и да пристъпите към попълването на данните си. Когато формата разполага с достатъчна информация, бутона "Изпрати и Плати сега" ще стане активен и Вие ще можете да завършите желаната от Вас резервация.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Детайли за резервация');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Изберете детайлите за Вашата резервация');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Наличност ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Изберете желаните стаи');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Погледнете тук за да се уверите че обекта е свободен за този период.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Допълнителни екстри');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Изберете допълнителни екстри, които да добавите към резервацията');
jr_define('_JOMRES_COM_PERDAY', 'На нощ');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Лични данни');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Моля, попълнете личните си данни. Всички полета с червени звездички са задължителни.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Налични стаи');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Избрани стаи');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', 'Датата за най-ранно пристигане е: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'На нощ:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Настаняване');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Екстри:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'ДДС 20%:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Отстъпка:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Общо (с ДДС):');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Гости');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Избери стаята');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Премахни стаята');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Типове гости');
jr_define('_JOMRES_VARIANCES_TYPE', 'Тип');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Тип на клиента, например Студент, Дете и т.н ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Бележки');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Вашите бележки към този тип клиент');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Максимум');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Максимален брой от този тип клиент, който може да бъде избран в резервационната форма');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Е процент');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Стойността тук е процент от базовата стойност за стаята.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Добави разлика?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Стойността е добавена или премахната от базовата стойност за стаята. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Разлика');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Каква разлика');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Променена подредба на тип клиент');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Изтрит тип клиент');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Създаден тип клиент');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Обновен тип клиент');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Обновен тип клиент');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Покажи линк към стаите от информацията за обекта?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Покажи <b>only</b> заетостта?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Изберете Да за да показвате само календара със заетостта в информацията за обекта.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Минимум време при Пристигане/Заминаване');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Минималния интервал в резервационната форма за пристигане и заминаване на гости, в дни.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Формата показва номер на стая');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Формата показва име на стая');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Формата показва наименование на тарифа');
jr_define('_JOMRES_ORDER', 'Подредба');
jr_define('_JOMRES_REQUIREDFIELDS', 'Задължително');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Дни преди пристигане');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Минимум дни от днес преди датата на пристигане.');
jr_define('_JOMRES_DTV', 'Вариации с типа дати');
jr_define('_JOMRES_DTV_DOW', 'Ден от седмицата');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Тип гост по подразбиране');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Ако използвате типове гости, това е броя им по подразбиране във формата');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Само регистрирани потребители могат да резервират онлайн?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Трябва да сте регистриран потребител. Кликнете тук за да се регистрирате ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Цвят на шрифта за линкове на настоящи резервации');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Уикенд');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Стаята е резервирана');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Блек резервация');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Закръгли депозита?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Таксувай депозити?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'На седмична база?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Можете да избирате дневно или седмично. Ако изберете седмична база, тогава тази опция трябва да е избрана с Да.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'на седмица');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Повторяемост на фиксирана дата на пристигане: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Фиксирания брой дни показващи се в падащото меню.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Датата на пристигане е невалидна');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Датата на заминаване е невалидна');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Резервацията е прекалено къса. Трябва да има поне толкова дни между датите на пристигане и занимаване:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Интервалът е');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Типа гост е невалиден');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Изберете брой гости/тип');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Избрали сте прекалено много за наличната тарифа');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Избрали сте повече стаи отколкото гости. Премахнете стаи.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Грешка: Моля променете дати/брой гости и избор на стаи');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Трябва да изберете повече стаи');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Изберете стая');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Името е задължително');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Фамилията е задължителна');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Номер на къща е задължителна');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Улицата е задължителна');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Града е задължителен');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Региона е задължителен');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Пощенския код е задължителен');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Страната е задължителна');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Стационарен номер е задължителен');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Мобилен номер е задължителен');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Email е задължителен');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', '<b>Имаме свободни места!</b>');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Няма избрани стаи');
jr_define('_JOMRES_BOOKING_NUMBER', 'Резервация номер');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Фон на съобщението за резервация');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Дъмп на темплейта?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Някои елементи се показват на определени потребители');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Стойността е процент');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Избери Да за да е процент от стойността.');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Лимитирай свободните стаи и тарифи');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Избери нула за да няма лимириране ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Няма свободни места!');
jr_define('_JOMRES_BOOKITNOW', '');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Генерално редартиране включено?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'ВНИМАНИЕ Тази функция се включва от администратор.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Използвай обща валута?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Всички обекти използват тази валута.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Символ на общата валута');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Компонент рапд');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'ВНИМАНИЕ Тази функция се включва от администратор.');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Само през уикенди');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Само през дните от уикенда');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Изберете уикенд дните и специалните тарифи.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Изберете държавата');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Първо запишете и след това качете снимка');
jr_define('_JOMRES_TARIFFSFROM', 'Цени от ');
jr_define('_JOMRES_SEARCH_ALL', 'Всички');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Търси по страна');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Търси по регион');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Търси по град');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Търси по екстри');
jr_define('_JOMRES_SEARCH_BUTTON', 'Търси');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Търси по ключова дума.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Търсене думи: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Моля въведете дните на пристигане и заминаване за визуализиране на свободни стаи.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Всички обекти по тип.');
jr_define('_JOMRES_SEARCH_RTYPES', 'Всички обекти по тип стаи');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'По подразбиране');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Име на обект');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Регион на обекта');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Град на обекта');
jr_define('_JOMRES_SORTORDER_STARS', 'Звезди');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Детайли ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Резервационна форма');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Обнови адреса');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Повторно проверяване на свободни стаи.<br/>(Избраните стаи ще се изтрият)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Повторно проверяване на заетостта');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Променете ектрите по избор');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Сменяне на селекцията от стаи');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Обновяване на адреса');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Някои полета не са попълнени правилно.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Снимка на стая');
jr_define('_JOMRES_CURRENCYFORMAT', 'Формат на валута');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Опции за търсене');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Логове');
jr_define('JOMRES_COM_A_MESSAGE', 'Съобщение');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Нормални');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Напреднали');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Високо ниво');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Метод за тарифи');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', '<b>Внимание: Променянето на тарифите изтрива информацията за тях.</b>.
<br/><br/>
3 опции.<br/>
Нормални: 1 тарифа за всеки тип стая със срок за следващите 10 години<br/>
Високо ниво: Модифициране на цената по дни и по типопве стаи. <br/>
Напреднали: Стар метод. <br/>
<br/>
Изберете желания метод.<br/>
Нормалните е най-семплия начин по начина тип стая - заложена цена.<br/>
Високо ниво Ви позволява да променяте цените от ден на ден.<br/>
Напреднали Ви позволява да създадете стая и да я свържете с тип на стаята. После създавате цена и я свързвате с типа стая. Това е подходящо когато искате да наслагвате цени.<br/>
<br/>
За да работят Нормални и Високо ниво методи системата ще нулира създадените тарифи. Моля, вижте по-долу.<br/>
<br/>
Нормални -> Напреднали. Без промяна, тарифите се запазват.<br/>
Нормални -> Високо ниво. Всички тарифи се нулират.<br/>
Надпреднали -> Нормални. Всички тарифи се нулират.<br/>
Напреднали -> Високо ниво. Всички тарифи се нулират.<br/>
Високо ниво -> Напреднали. Тарифите се запазват.<br/>
Високо ниво -> Нормални. Всички тарифи се нулират.<br/>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Показвай стаите във формата на обекта?');
jr_define('JOMRES_PROPERTYTYPE', 'ТИП обект');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Максимум настанени в стая');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Максимум гости в резервацията');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Добави бележка');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Редактирай бележка');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Изтрий бележка');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Покажи бележки');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Добавена нова бележка');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Редактирана бележка');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Изтрита бележка');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Резервации');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Моите резервации');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Виж резервация');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Виж фаворите');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Нямате фаворите!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Тип обект');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Промоции');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Активен');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Динамично конфигуриране на цените на стаите.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'По заетост и по дни.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Трешхолд (брой дни преди датата на пристигане и днес)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Ако заетостта е 10% или по-малка');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Ако заетостта е 25% или по-малка');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Ако заетостта е 50% или по-малка');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Ако заетостта е 75% или по-малка');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Отстъпка %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' е намалена от ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' на ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Няма динамично конфигуриране на цените ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API ключ');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Генерирайте ключ от <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Сложете генерирания ключ тук и системата ще изобрази картата при детайлите за обекта.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'В последня момент');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Активен?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Изберете Да, ако искате да използвате оферта в последния момент.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Трешхолд');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Ако резервацията се прави определен брой дни преди периода, купувача се възползва от въпросната отстъпка');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Отстъпка');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'Като процент');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Отстъпката е направена!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Цената бе намалена с ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', ' ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% отстъпка ако резервираш и дойдеш преди ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Резервирай сега за да се възползваш!');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '% или по-голяма отстъпка може да е налична ако пристигнете преди ');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Инфо за вербозна тарифа');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Избери Да ако искаш да показваш по-детайлна информация за тарифата');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Намали опциите за конфигуриране');
jr_define('_JOMCOMP_AMEND', 'Промени резервация');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Избери нов обект');
jr_define('_JOMCOMP_AMEND_HEADER', 'Първоначална резервация:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Платен депозит');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Неплатен депозит');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Промени общата сума');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Промени депозита');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Отнеми');
jr_define('_JRPORTAL_CPANEL', 'Контролен панел');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Комисионна по подразбиране');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Избери комисионната по подразбиране.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Изведи всички комисионни');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Комисионни');
jr_define('_JRPORTAL_CRATE_TITLE', 'Заглавие');
jr_define('_JRPORTAL_CRATE_TYPE', 'Тип');
jr_define('_JRPORTAL_CRATE_VALUE', 'Комисионна');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Код на валута');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Изведи обекти');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Име на обект');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Адрес на обект');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Обекти, чийто фон е червен нямат зададена комисионна.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Статистика');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Комисионна');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Изведи резервациите');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Обект id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Фактура id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Общо за резервацията');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Дата на архивиране');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Описание');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Относно промяната на езика');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Не можете да изтриете обекта тъй като е единствен. Можете да го свалите от интернет пространството. ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Общо за настаняване');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'нощи(нощувки) за');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'на стая ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Обща цена с такса за екстрите ');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Обобщение на цената ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Моля, прочетете и се съгласете с ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Обобщение на резервацията е по-долу.<br /> За да направите корекции, моля натиснете бутона. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Ако искате да промените части от резервацията Ви, моля натиснете тук');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Коригирай');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Моля, напишете специалните си изисквания във формата.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Потвърждавам, че информацията по-горе е вярна и се съгласявам с ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'на човек на нощ ');
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'от');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Начало');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Предишен');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Следващ');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Край');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Резултати');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Моля, напишете Вашето послание за да го изпратите до ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Изпратете запитване');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Запитване за обект от ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Благодарим Ви, запитването е успешно получено.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' относно ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Запитване');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Моля, изберете нужното настаняване като натиснете върху бутоните.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Минимален брой стаи е избран');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Ако повече от Н брой стаи се избират могат да се слагат отстъпки ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Максимален брой стаи е избран');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Отстъпки при Н на брой стаи. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Увеличението на цената за 1 човек не може да действа, ако в главното меню опцията е избрана и тук отново слагате стойност.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Свободно');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Има резервации');
jr_define('_JOMRES_AVLCAL_HALF', 'Наполовина резервиран');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Повече от половината резервиран');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Нацяло зает');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'На седмица');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'На ден');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'На резервация');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'На човек на резервация');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'На човек на ден');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'На човек на седмица');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'На дни минимум');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'На дни - Х стаи избрани');
jr_define('_JOMRES_REGISTRYREBUILD', 'Построй отново регистъра');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'Да се използва от системния администратор.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Успешно!');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Грешка! Вижте лога.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Търси по цена.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Нямате резервации!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Редактирай типа обект');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Избери типа обект');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Вашето запитване...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Лимит на обектите показващи се на страница');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'След търсене, броя на обектите, които да се показват на страница');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Интегрирано търсене');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', '');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Активирай?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Да се използва от системния администратор.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Използвай колони');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Да се използва от системния администратор');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Търси по регион с падащо меню');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Падащо меню да държави/региони или градове.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Търси по име на обект');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Показвай Търси.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Покажи като падащо меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Избери Не за да ги показва като връзки');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Търси по град/регион');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Показвай търси');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Покажи падащо меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Показвай връзки');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Търси по тип обект');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Показвай Търси');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Падащо меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Избери не за връзки');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Търси по тип стая');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Показвай Търси');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Падащо меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Избери не за да показва като връзки');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Търси по екстри');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Показвай Търси');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Покажи като падащо меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Други');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Търси по описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Показвай търси');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Търси по заетост');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Показвай Търси');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Търси по цена');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Показвай Търси');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Стойности');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Стайностите на покачване на цените.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Да се използва от системния администратор.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Логове');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Тази функционалност е за фактуриране.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Да се използва от системния администратор.');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Метод');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Да се използва от системния администратор<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Логване в браузера');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Да се използва от системния администратор.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Логването е активирано');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Да се използва от системния администратор.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Да се използва от системния администратор');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Много логове');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Редактиране на темплейта');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Въведени полета');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Въведени полета, които се показват в резервационната форма.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Име на поле');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'По подразбиране');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Описание');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Задължително');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Макс количество');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Да се използва от системния администратор.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Нива за такси');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Код на такса');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Описание на цената');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Не можете да изтриете цената.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Цена');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Фактури');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Неплатени');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Платени');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Отменени');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Чакащи');
jr_define('_JRPORTAL_INVOICES_USER', 'Потребител');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Статус');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Рейзд');
jr_define('_JRPORTAL_INVOICES_DUE', 'Към');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Абонамент');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Общо за плащане');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Честота на определения период от време');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Ден');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Код на валута');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Обекти');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Име');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Описание');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Първоначална цена');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Първоначално количество');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Първоначална отстъпка');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Първоначално общо');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Код на такса');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Описание на таксата');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Стойност на таксата');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Промени стандартните настройки за PayPal?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Покажи фактурите');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Купони за отстъпки');
jr_define('_JRPORTAL_COUPONS_DESC', 'Да се използва от системния администратор.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Код на купон');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Валиден от');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Валиден до');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Отстъпка');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Отстъпка като процент');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Само стая');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Ако имате купон моля въведете го.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Запишете и активирайте отстъпката');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Купона се използва в резервацията');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Номера на купона не е открит');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Стойност на купона');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Резервацията е намалена с отстъпката : ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Избери език');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Езиците които се показват на падащото меню.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Покажи падащо меню?');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Скъпи');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Благодарим за регистрирането ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Потребителското Ви име е : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Паролата Ви е : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Моля, логнете се в системата за да видите резервациите ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Записан купон');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Изтрит купон');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> СМС');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Потребителско име');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Парола');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'МОбилен номер');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Моля, използвайте следния формат '447979123456'. Оставете празно за да откажете известия по телефона си.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'СМС');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', '
<b>Трябва ви live сървър.</b>
<br/>
<br/>
Да се използва от системния администратор!<br/>
<br/>
<b>Да се използва от системния администратор</b><br/>
<br/>
');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Резервационната форма показва за достъп на хора с увреждания');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Показва максимум хора');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Моля забележете, че общата цена ще бъде оформена след като изберете дати, брой гости, тип стая и допълнителни услуги, ако има такива.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Пакети абонамент');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Име');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Описание');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Публикуван');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Пълна стойност');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Ограничение за обектите');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Запиши за абонамент');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Използвай функционалността за управление на абонаментите');
jr_define('_JOMRES_COM_NEWUSER', 'Създавай нов потребител при резервация');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Създавай нов потребител от нерегистрирана резервация');
jr_define('_JOMRES_CLICKTOREGISTER', 'Регистрирай обекта си');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Благодарим за резервацията');
jr_define('_JOMRES_LATLONG_DESC', 'Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.');
jr_define('_JOMRES_CONTROLPANEL', 'Контролен панел');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Покажи фактура');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Покажи фактури');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Добави моят обект към този сайт');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'ВНИМАНИЕ : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Пакета е невалиден.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Само един път можете да използвате безплатен пакет.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Инфомация за бизнеса');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'име на бизнеса');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'ДДС номер');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Номер на сграда');
jr_define('_JOMRES_INVOICE_NUMBER', 'Номер на фактура ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Да се използва от системния администратор. <br/> 
<br/> 
Да се използва от системния администратор.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Съжаляваме това е невъзможно.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'МОжете да го направите.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Създайте типове гости. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Нямате цени.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Редакция влючена');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Редакция изключена');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Взимай различни депозити?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Да се използва от системния администратор.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Брой дни в които се плаща целия депозит.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Изпратен е мейл за потвърждаване.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Свържи се с агента');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Маркирай платена фактура');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Фактурата е маркирана като платена');
jr_define('_JOMRES_APIKEY_REMAKE', 'Направи нов АПИ ключ');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Системата да бъде настроена за продажда на само един обект?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Иделано за листване на един обект и взимаме на резервации за него.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Балансово плащане');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> for more information on this subject.');
jr_define('_JOMRES_SUPPORTKEY', 'Лиценз');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Лицензен ключ.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Персонална отстъпка');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Ограничи регистрирането на обекти до 1 държава?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Ясно е.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Обектите се намират в тази държава : ');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery тема');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Избери jquery тема по подразбиране.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Обекта не е наличен.');
jr_define('_JOMRES_REVIEWS', 'Отзиви');
jr_define('_JOMRES_REVIEWS_TITLE', 'Заглавие на ревюто');
jr_define('_JOMRES_REVIEWS_DATE', 'поствано на ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Все още няма отзиви');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Напиши първи отзив');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Съгласен съм с отзива');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Не съм съгласен с отзива');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Рейтинг: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Общо гласове:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Добави нов отзив.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Трябва да сте регистриран потребител за да напишете отзив.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Споделето мнението си за обекта : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Този клиент ни сподели : ');
jr_define('_JOMRES_REVIEWS_PROS', 'Плюсове: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Минуси: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Изпратено на: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'МОжете да правите ревю на обект само веднъж.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Не можете да споделите ревю на този сайт.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Виж отзиви');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' гости са съгласни с това ревю. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' гости не са съгласни с това ревю.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' гост е съгласен с това ревю. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'гост не е съгласен с това ревю.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Благодарим, че споделихте мнение.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Вие вече сте дал мнение по този въпрос.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Моля, попълнете всички полета.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Моля, обобщете ревюто като поставите заглавие');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Моля, поместете по-изчерпателно ревю.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Моля споделете плюсовете');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Моля споделете минусите');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Рейтинг за персонала');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Рейтинг за местоположението');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Рейтинг за чистотата');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Рейтинг за обекта');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Рейтинг качество/цена');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Рейтинг за услугите');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Обобщение на ревюто');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'По-подробно');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Благодарим, че изпратихте ревюто.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Благодарим, че изпратихте ревюто.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Използвайте функционалността за ревютата?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Автоматично публикувай ревюта?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Изберете Да.');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'тестов режим на ревютата?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Изберете Не.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'За да визуализирате ревюта моля влезте в съответния обект.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Брой непубликувани ревюта');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Общ брой ревюта');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Публикувай или отмени ревю');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Изтрий ревю');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Отнеси се към нас относно ревю');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Репорти за ревюта');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Моля въведете репорт');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Споделете ако имате притеснения относно определено ревю.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Изпрати');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Репорта е създаден от ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Репортите се създават от потребители, които не са съгласни с определено ревю.');
jr_define('_JOMRES_REVIEWS_RATING', 'Рейтинг (1 = много лошо 10 = отлично) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Гостоприемство  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Локация ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Чистота ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Настаняване ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Струва ли си парите ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Услуги ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Ревю от : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Скрий отзиви');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Показвай резервационната форма на страницата с инфото на обекта?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Преценете дали това искате.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Цените са крайни?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Ако цената включва такси, тогава изберете Да.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Допълнителни услуги:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Да се избира от системния администратор.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Да се избира от системния администратор.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Старт');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Край');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Тарифа');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Задай тарифи');
jr_define('_JOMRES_PARTNERS_TITLE', 'Партньори');
jr_define('_JOMRES_CALENDAR_RTL', 'грешен');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Стая ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'гости. ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Това е начина, по който разпределихме зададения брой гости в избраната стая(и). Може да промените разпределението директно на място в хотела при настаняване.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Непубликуван обект');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'По подразбиране след търсене');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Подредбата.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Като падащо меню?');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Стил на листата със стаи');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'Да се избира от системния администратор');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Класик');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Типове стаи');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Ден с който започва седмицата');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Само гости могат да дават ревю?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Ограничете ревютата до гости на обекта.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'На стая');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Гости в стая : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Гости в резервацията : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Брой стаи');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Януари');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Февруари');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Март');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Април');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Май');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Юни');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Юли');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Август');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Септември');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Октомври');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Ноември');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Декември');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Да се избира от системния администратор.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Изберете опция за резервацията');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Системата в сайта');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Системата на цял екран');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Отстъпка за партньори ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Търси потребител');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Когато изберете потребител той автоматично става партньор.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Настоящи партньори');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Изберете партньор.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Парньор :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Търси обект');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'Когато изберете обект той автоматично ще бъде нанесен към съответния партньор.');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Настоящи обекти');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'Изберете обект за да редактирате отстъпките за партньора.');
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Профила Ви е отхвърлен.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Отхвърлен мениджърски профил');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Активиран мениджърски профил');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Засега сте отхвърлени.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Отново активен профил.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Премахни фаворита');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Архив на резервациите');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Да се избира от системния администратор.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Редактирай профил');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Настоящи мениджъри');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Търси по брой гости');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Падащо меню');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Търси по звезди');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Падащо меню');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Брой гости');
jr_define('_JOMRES_SEARCH_STARS', 'Брой звезди');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Брой обекти');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Малки тъмнейли ширина (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Малките се използват в пропърти листа.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Малки тъмнейли височина (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Средни тъмнейли ширина (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Средни тъмнейли височина (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Преводи');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Комисионни?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Изберете Да за комисионни към мениджъра.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Резервациите на мениджъра създават фактури за комисионни?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Ясно е какво прави');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Отхвърли мениджъри с Висящи фактури?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Трешхолд авто съспендване');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Брой дни през които мениджъра трябва да покрие задълженията си или се Отхвърля от системата и обектите му също.');
//4.7.2
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT', 'Езиков контекст');
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Използвайте тази опция, за да промените езиковия контекст на сайта. Тази функция позволява на Jomres да използва етикети, които са подходящи за текущия ви фокус, така че ако фокусът ви е като яхтен брокер, промяната на контекста ще позволяват на Jomres да представя етикети от различен езиков файл. Например, ако зададете контекста на "Яхтен брокер", тогава Jomres първо ще намери текущия език, след което ще потърси в директорията /'.JOMRES_ROOT_DIRECTORY.'/ езици за поддиректория наречен "yachtbrokerage". Ако файлът съществува за текущия език, тогава този файл ще бъде използван. Ако не, тогава Jomres ще търси файл на английски език в същата директория. Ако това не може да бъде намерено, Jomres ще използва езиков файл за текущо избрания език в директорията /'.JOMRES_ROOT_DIRECTORY.' език ge с име, което отразява описанието на новия тип свойство. ');
// 4.7.3
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Разширена конфигурация на сайта');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Задайте тази опция на Да, ако искате да използвате разширените опции за конфигуриране на сайтове. Ако току -що започвате с Jomres, съветваме ви да оставите това за сега, тъй като инсталацията по подразбиране е достатъчно, за да започнете, вместо това трябва да добавите Jomres към главното меню и да влезете в интерфейса като "администратор" и да започнете да конфигурирате собствеността (ите) си. Моля, обърнете внимание, че много от разширените опции може да не са налични, ако не \ " t да са инсталирани съответните приставки. Потребителите на безплатната основна система няма да могат да се възползват напълно от възможностите, които те разрешават. ');
jr_define ('_JOMRES_CONFIG_JQUERY_UI', 'Заредете Jomres jQuery UI библиотека?');
jr_define ('_JOMRES_SORTORDER_PRICE_DESC', 'Цена (първо най -висока)');
jr_define ('_JOMRES_SORTORDER_PRICE_ASC', 'Цена (първо най -ниска)');
// 4.7.6
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Обобщението на цената и прогнозите трябва да се определят за нощувка/на седмица/на месец?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'На нощ');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'На седмица');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'На месец');
jr_define ('_JOMRES_BOOKINGFORM_PERPERSON', 'На човек');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'седмица (и) в');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'месец (и) в');
// 4.7.7
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Как трябва да работи опцията за търсене на номера на хора?');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Засяга всички модули за търсене. Когато използвате функцията за търсене на номер на гост, трябва ли функцията за търсене да търси свойства, чиито тарифи ще поддържат номера на гостите нагоре и да са равни на избрания номер, или точно равен на избрания номер, или избраното число и по -голямо? ');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Моля, изчакайте, вашата поръчка се обработва и ще бъдете пренасочени към уебсайта на Paypal.');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Ако не сте автоматично пренасочени към Paypal в рамките на 5 секунди ...');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Щракнете тук');
// 4.7.8
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Резервация валидна от');
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Резервация валидна до');
jr_define ('_JRPORTAL_COUPONS_GUESTNAME', 'Име на гост');
jr_define ('_JRPORTAL_COUPONS_DESC_478', "Кодовете за отстъпки могат да бъдат генерирани и предадени на гостите като стимул за извършване на резервации. <br/>
Валидни от и до дати се отнасят до датите, на които може да се направи резервация, докато резервацията, валидна от/до дати, се отнася до датите, които резервацията трябва да покрие, за да бъде валиден купонът. Ако една резервация е извън този период, тогава за дните извън този период ще се прилагат нормални тарифи. <br/>
Ако искате резервацията да е достъпна за един конкретен гост, изберете името на госта в падащото меню, за да ограничите купона само до този гост. ");
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'С вашия купон тази резервация е намалена от');
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'до');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Задайте това на Не, за да забраните зареждането както на JQuery UI javascript, така и на CSS файлове.');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Зареждане на Jomres jQuery UI CSS библиотека?');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Задайте това на Не, за да деактивирате само CSS файла на потребителския интерфейс на jquery.');
//v5.1
jr_define ('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Общо включен данък');
jr_define ('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Непубликуван имот');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Use conversion functionality');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Currency conversion/currency codes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="https://www.ipinfodb.com/login" target="_blank">IPinfoDB</a> first.');
jr_define ('_JOMRES_DEBUGGING_TAB', 'Отстраняване на грешки');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Настаняване без данък');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Настаняване с данък');
jr_define ('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Данък за стаите:');
jr_define ('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Отворете формуляра за резервация');
jr_define ('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Назад към подробности за имота');
jr_define ('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Автоматично избрано?');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Салдо (след изплатен депозит)');
jr_define ('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Филтрирайте ресурсите въз основа на техните характеристики.');
jr_define ('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Последна резервация');
jr_define ('_JOMRES_DATEPERIOD_SECOND', 'секунда');
jr_define ('_JOMRES_DATEPERIOD_MINUTE', 'минута');
jr_define ('_JOMRES_DATEPERIOD_HOUR', 'час');
jr_define ('_JOMRES_DATEPERIOD_DAY', 'ден');
jr_define ('_JOMRES_DATEPERIOD_WEEK', 'седмица');
jr_define ('_JOMRES_DATEPERIOD_MONTH', 'месец');
jr_define ('_JOMRES_DATEPERIOD_YEAR', 'година');
jr_define ('_JOMRES_DATEPERIOD_DECADE', 'десетилетие');
jr_define ('_JOMRES_DATEPERIOD_S', 's');
jr_define ('_JOMRES_DATEPERIOD_AGO', 'преди');
jr_define ('_JOMRES_DATEPERIOD_FROMNOW', 'от сега');
jr_define ('_JOMRES_WHOLEDAY_TITLE', 'Резервациите са за цели дни?');
jr_define ('_JOMRES_WHOLEDAY_DESC', 'По подразбиране системата резервира ресурси през нощта, така че резервация от първи януари' .date ('Y', strtotime ('следващата година')). 'до 2 януари' .date ('Y', strtotime ('следващата година')). 'обхваща само една нощувка. Ако обаче зададете тази опция на Да, тогава резервацията ще обхваща цели дни, така че резервацията в тези дни ще обхваща и двете дни и клиентът ще бъде таксуван за два дни. ');
jr_define ('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'На ден');
jr_define ('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'На човек на ден');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Пикап');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Връщане');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'дни (и) в');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Датата на връщане е неправилна');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Резервацията е твърде кратка. Трябва да има поне толкова дни между датите за получаване и връщане:');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Минимален интервал за получаване/връщане');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Минималният интервал във формуляра за резервация между датите за получаване и отпускане. Интервал от 1 означава, че датите за получаване и връщане могат да бъдат зададени на същия ден, но това все още зависи от минималния интервал, който се изчислява автоматично от механизма за резервации, тъй като той проверява тарифите, които са валидни за периода на резервация. ');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Обобщението на цените и прогнозите трябва да се определят на ден/на седмица/на месец?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'На ден');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Дни преди датата на получаване');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Минималният брой дни, които трябва да изминат, от "днес", преди датата на получаване.');
jr_define ('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Задайте това на да, ако искате да ограничите предварителните резервации (използвайте следващото поле, за да зададете лимита по дни). Ако зададете това на да, тогава ако потребителят се опита да резервира повече от n дни предварително, след което датата на тяхното получаване ще бъде възстановена до днешната дата ');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Показване на датата на връщане?');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Задайте това на Не, ако не искате да показвате полето за въвеждане на дата за връщане. Използвайте това само ако знаете какво правите, тъй като датата на връщане в резервациите винаги ще бъде зададена на деня след датата на получаване. ");
jr_define ('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Ако зададете това на Да, тогава резервациите ще се приемат за определен период. Ако това е зададено на Не, тогава се уверете, че "определен ден на получаване" не е зададен на Да (освен ако не сте посочили специално искате да принудите хората да вземат в определен ден от седмицата) иначе няма да получите много връзки в календара за наличност. ');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Предварително определен ден за получаване');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Само за сайтове, предлагащи резервации за определен период. Изберете деня от седмицата, в който трябва да се извършват пикапи.');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Фиксиран ден за получаване');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Фиксирани дати за получаване се повтарят:');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Когато са избрани фиксирани дати за получаване, броят на датите, които могат да бъдат показани в падащия списък с дати. Обърнете внимание, че списъкът с дати няма да включва дати, ако резервацията не е възможна поради предварителни резервации, и че списъкът действително ще бъде два пъти по -дълъг от избрания от вас номер, тъй като ще има подобен брой исторически дати (когато има такива). ');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'На човек, на ден');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Изберете Да, ако искате да таксувате на човек на ден. Ако не, тогава разходите ще се изчисляват на база ресурс на ден');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Променливите депозити ви позволяват да определите дали искате да таксувате пълната сума, ако датата на получаване на резервацията е в рамките на N дни от "днес". Задайте тази опция на Да, за да активирате функцията , и въведете броя дни по -долу, така че например, ако денят за получаване е в рамките на 60 дни, тогава сумата на депозита ще бъде пълната сума, в противен случай сумата ще се основава на опциите за депозит, конфигурирани по -горе. ');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Повечето фирми ще преизчислят цените на ресурсите въз основа на броя ресурси от необходимия тип, които са налични на дадена дата. Това им позволява да предлагат отстъпки за ресурс/тип бизнес, който не е зает по време на даден период с цел привличане на бизнес, който иначе би могъл да бъде пропуснат. <br/> Активирането и конфигурирането на тази приставка ви позволява да предлагате регулируемо ценообразуване въз основа на броя ресурси от избран тип, които са налични в бизнеса за даден ден. <br/> Прагът за дните определя броя дни, в които трябва да бъде датата на вземане, преди цените на ресурсите да се коригират с тази функция, тогава опциите за проценти ви позволяват да конфигурирате процента ресурси, които могат да бъдат налични, преди да се приложи дадена отстъпка . Имайте предвид обаче, че ако са резервирани множество ресурси, сегашното ниво на отстъпка ще бъде приложено към всички ресурси и няма да намалее с избора на повече ресурси. ');
jr_define ('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Праг (брой дни между датата на получаване и днес)');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Чакане на пикап');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Вземете днес');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Прибрано');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Връща се днес');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Върнете се с просрочие');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Не е вдигнато');
jr_define ('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Дни');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Маркирайте взета резервация.');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Маркиране на върната резервация.');
jr_define ('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Маркиране на взета резервация');
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Маркиране на върната резервация');
jr_define ('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Цена на ден:');
jr_define ('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Брой дни:');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Премахване на общо настаняване');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Save override');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Изпращане на имейл до нови потребители техните данни за вход?');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Ако опцията Създаване на нов потребител е зададена на Да, можете да зададете тази опция на Не, за да сте сигурни, че те не получават имейл данните си за вход, след като потребителят е създаден. Това може да бъде полезно, ако сте автоматично например добавяне на нови потребители към пощенски списък и не желаещи потребителите действително да влизат. ');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Показване на данъчната продукция в обобщената сума на формуляра за резервация?');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Предотвратете формуляра за резервация да показва полетата на данъчните цени в обобщената сума, като зададете тази опция на Не.');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Праг на анулиране');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Влезли, регистрираните гости могат да анулират собствените си резервации. Тук можете да зададете прага, в дни, когато резервацията не може да бъде отменена след определен брой дни преди датата на пристигане.');
jr_define ('_JOMRES_EDIT_PROFILE', 'Редактиране на профил');
jr_define ('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Връзка тип собственост');
jr_define ('_JOMRES_IMAGE', 'Изображение');
jr_define ('_JOMRES_CRATES_CLICKINITIAL', 'Кликнете върху буква, за да покажете всички фирми с този първи знак. След като имате списък със свойства, можете да зададете комисионни за тези имоти, или щракнете върху тяхната икона "редактиране", за да видите бизнеса \ " s статистика. ');
jr_define ('_JRPORTAL_TAX_RATE_EDIT', 'Редактиране на данъчна ставка');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Редактиране на персонализирано поле');
jr_define ('_JOMRES_LICENSESERVER_PASSWORD', 'Парола на сървъра за лицензи');
jr_define ('_JOMRES_LICENSESERVER_USERNAME', 'Потребителско име на сървър за лицензи');
jr_define ('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Ако имате потребителско име и парола на лицензния сървър, моля, въведете ги тук. Това ще ви помогне да получите достъп до приставките, на които имате право. Ако сте въвели валиден ключ за поддръжка в полето по -горе, тогава не е необходимо да въвеждате потребителското име/паролата тук. ');
jr_define ('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Тази версия на Jomres:');
jr_define ('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Последна версия на Jomres');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Предупреждение: Налична е нова версия на Jomres, препоръчваме ви да надстроите при първа възможност.');
jr_define ('_JOMRES_PRODUCT_INFORMATION', 'Добре дошли в Jomres. Основната система е безплатна, но може да бъде подобрена чрез инсталирането на приставки. За достъп до тези приставки ще ви е необходим лиценз за изтегляне и поддръжка. Ако искате да закупите Jomres Starter , Бизнес или Enterprise лиценз, <a href="http://www.jomres.net/prices" target="_blank"> моля, посетете нашия сайт </a> за информация как можете да надстроите. ');
jr_define ('_JOMRES_PRODUCT_INFORMATION2', 'Тази система е идеална за всеки сценарий, било то обикновен формуляр за резервация за една собственост, чак до сайт, който има множество потребители, на множество езици, с множество свойства. Моля, вижте "Помощ" раздел в менюто, включително страницата "Първи стъпки", която ще ви води през първите ви стъпки. ');
jr_define ('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Активно свойство');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Настройки на имейл');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Задайте тази опция на Да, за да използвате тези алтернативни SMTP настройки. Все по-голям брой уеб хостове блокират функционалността на пощата на PHP, така че можете да изберете да превишавате настройките за поща, които Jomres приема от вашия хост CMS (обикновено Joomla) и използвайте настройки по ваш избор тук. ');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Алтернативен хост');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Променете това на вашия пощенски сървър smtp');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Алтернативен порт');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Променете това на вашия smtp порт');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Алтернативен протокол');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "В зависимост от настройките на вашия smtp сървър, трябва да оставите това поле празно или да въведете 'ssl' или 'tls'. Попитайте вашия SMTP доставчик, ако не знаете.");
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Използване на удостоверяване');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Ако вашият SMTP сървър изисква клиенти да влизат, задайте това на Да. След това ще се използват потребителското име и паролата.');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Алтернативно потребителско име');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Алтернативна парола');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define ('_JOMRES_QUICK_INFO', 'Бърза информация');
jr_define ('_JOMRES_MENU_SHOW', 'Покажи');
jr_define ('_JOMRES_MENU_HIDE', 'Скриване');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'По подразбиране');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Всеки');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Регистриран');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Мениджър');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Супер мениджър');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Никой');
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE', 'Контрол на достъпа до менюто');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC', 'Тази функция ви позволява да контролирате кой ще може да вижда плъгин в главното меню. Обикновено потребителските опции 00009 се виждат от/или нерегистрирани посетители на сайта, 00010 опции обикновено се отнасят до дейности за приемане, които са използвани ежедневно, докато 00011 опции се използват за настройка и конфигуриране на свойство, но са достъпни по -рядко. ');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Рецепционист');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Пълен контрол на достъпа');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Задайте тази опция на Да, за да активирате функцията за пълен контрол на достъпа, след това посетете опцията Контрол на достъпа в Поддръжка на системата, за да конфигурирате контролите за достъп.');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Имайте предвид обаче, че тези настройки не контролират скриптовете, към които се свързват, така че например, ако зададете <i> 00009user_option_03_search </i> на\" Мениджър \", потребител, който познава Jomres, все още може обадете се на j06000search.class.php, като въведете http://www.domain.com/index.php?option=com_jomres&task=search в адресната лента на браузъра си. Това е умишлено, тъй като този контрол на достъпа до менюто просто контролира какво може да се види в Главното меню на Jomres. Ако имате нужда от по -строги контроли, задайте опцията Конфигурация на сайта -> Пълен контрол на достъпа на Да и отново посетете опцията Контрол на достъпа до менюто. ");
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Контрол на пълен достъп');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> Тази функция е само за напреднали потребители. Ако не знаете за какво е и нямате конкретна причина да я използвате, моля, върнете се към Конфигурацията на сайта и задайте пълния достъп Опция за управление на No. </strong> <br/>
Тази функция ви позволява да контролирате кой има достъп до кои миникомпоненти (с някои изключения, които са твърдо кодирани в системата). Ако нивото на достъп до името на скрипта е зададено по подразбиране, тогава с опцията Пълен контрол на достъпа, зададена на Да <strong> всеки </strong> може да има достъп до скриптове, до които не би трябвало да имат достъп, следователно, ако възнамерявате да използвате това функция, която ТРЯБВА да зададете нивото на контрол на достъпа за <strong> всеки </strong> миникомпонент Jomres, изброен тук. Ако не знаете какво правят тези миникомпоненти, настоятелно ви съветваме изобщо да не използвате тази функция. <br/>
В Jomres нивата на достъп следват пирамида, така че Super Property Managers са по -големи от мениджърите. Накратко, Super Manager> Manager> Receptionist> Registered> Unregistered. Така че, ако регистрираният потребител има достъп до миникомпонент, имат го и рецепционистите, мениджърите и супер мениджърите. <br/>
Обърнете внимание, че не можете да контролирате миникомпонентите на администраторската област. Всеки в областта на администратора се счита за доверен потребител, тъй като не трябва да бъде блокиран за достъп до скрипт (особено този).
");
jr_define ('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Внимание! Имате активиран пълен контрол на достъпа, но ние сме преброили настройките за контрол на достъпа и ги сравнихме с броя на миникомпонентите, които трябва да се контролират, и двете не съвпадат, поради което може да имате някои скриптове, които не се контролират. Това може да е проблем със сигурността и се приканваме да разрешите това веднага, като посетите функцията за контрол на достъпа и проверите дали са приложени подходящите нива. ");
jr_define ('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Потребители с администраторски права за тази собственост');
jr_define ('_JOMRES_DEBUGGING_YOUREMAIL', 'Вашият имейл адрес');
jr_define ('_JOMRES_EXTRAS_MODELS_MODEL', 'Модел');
jr_define ('_JOMRES_EXTRAS_MODELS_PARAMS', 'Параметри');
jr_define ('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define ('_JOMRES_METATITLE', 'Мета заглавие');
jr_define ('_JOMRES_METADESCRIPTION', 'Мета описание');
jr_define ('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Добавете собствеността си: Стъпка 2 от 2');
jr_define ('_JOMRES_CART_TITLE', 'Моите предложени резервации');
jr_define ('_JOMRES_CART_INFO', 'Обърнете внимание, че тези резервации все още не са запазени. Ако излезете или сесията ви изтече, те ще бъдат загубени. Не забравяйте да потвърдите резервациите си!');
jr_define ('_JOMRES_CART_CONFIRM_BOOKINGS', 'Потвърдете резервацията (ите)');
jr_define ('_JOMRES_CART_OR', 'или');
jr_define ('_JOMRES_CART_SAVEFORLATER', 'Запазване за по -късно');
jr_define ('_JOMRES_CART_NOBOOKINGS_SAVED', 'Все още нямате запазени резервации.');
jr_define ('_JOMRES_CART_VIEWCART', 'Вижте количката');
jr_define ('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Поддиректория за езикови файлове');
jr_define ('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Начална точка на Latitude по подразбиране');
jr_define ('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Начална точка по дължина по подразбиране');
jr_define ('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'В картата на Google на страницата за редактиране на имота, преди маркерът да бъде преместен, какви трябва да бъдат началните точки по ширина/дължина по подразбиране?');
jr_define ('_JOMRES_SYSTEM_EMAILS', 'Имейли изпратени от кой адрес?');
jr_define ('_JOMRES_SYSTEM_EMAILS_DESC', "Оставете тази опция празна, за да я деактивирате. Jomres ще използва имейл адреса (ите) на хотела, когато изпраща имейли до гостите, но вашата имейл услуга МОЖЕ да не допуска имейли от произволни адреси (т.е. те могат да позволяват само имейли от един оторизиран адрес). Ако случаят е такъв, тогава можете да използвате този вход, за да въведете адрес, който ще се разглежда като адрес ОТ всички системни имейли. ");
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Изглед на списък');
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Снимка изглед');
jr_define ('_JOMRES_COMPARE', 'Сравни');
jr_define ('_JOMRES_REMOVE', 'Премахване');
jr_define ('_JOMRES_RETURN_TO_RESULTS', 'Връщане към резултатите от търсенето');
jr_define ('_JOMRES_ADDTOSHORTLIST', 'Добавяне към любими');
jr_define ('_JOMRES_REMOVEFROMSHORTLIST', 'Премахване от любими');
jr_define ('_JOMRES_VIEWSHORTLIST', 'Преглед на вашия списък с избрани');
jr_define ('_JOMRES_COOKIEPOLICY_1', 'Важно: Политика за бисквитките');
jr_define ('_JOMRES_COOKIEPOLICY_2', 'Ние използваме бисквитки, за да поддържаме нашия сайт подходящ и лесен за използване.');
jr_define ('_JOMRES_COOKIEPOLICY_3', 'Прочетете повече ...');
jr_define ('_JOMRES_COOKIEPOLICY_4', 'Законодателството на ЕС изисква всички уебсайтове ясно да посочват дали бисквитките се използват и тяхната цел.');
jr_define ('_JOMRES_COOKIEPOLICY_5', "Търсачката и резервационната машина на този сайт трябва да могат да запомнят опциите, които сте избрали да работят най -добре. За да направите това, тя трябва да съхранява информация, която е свързана с малък файл, наречен a \"бисквитка \", която уникално идентифицира вашия браузър и за да направим това, трябва да се съгласите, че можем. Ако не приемете тази политика за бисквитки, тогава ще бъдете силно ограничени в това, което можете да направите на този сайт. ");
jr_define ('_JOMRES_COOKIEPOLICY_6', 'Да, приемам използването на бисквитки по този начин.');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Изисква се депозит цената за първата нощ?');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Цените се изчисляват на база нощувка. Искате ли депозитът да бъде таксуван за една нощ? Ако е така, можете да игнорирате следните опции.');
jr_define ('_JOMRES_NOTHINGINSHORTLIST', "Не сте добавили елементи към любимите си.");
jr_define ('_JOMRES_SAFEMODE', 'Активиране на безопасен режим?');
jr_define ('_JOMRES_SAFEMODE_DESC', "Задайте това на Да, за да задействате безопасен режим. Това ще деактивира всички приставки, така че Jomres ще използва само основната си функционалност.");
jr_define ('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define ('COMMON_NEXT', 'Next');
jr_define ('COMMON_CANCEL', 'Cancel');
jr_define ('COMMON_SUBMIT', 'Submit');
jr_define ('COMMON_SAVE', 'Save');
jr_define ('COMMON_DELETE', 'Delete');
jr_define ('COMMON_RETURN', 'Връщане');
jr_define ('COMMON_CLOSE', 'Close');
jr_define ('COMMON_BACK', 'Back');
jr_define ('COMMON_HOME', 'Home');
jr_define ('COMMON_NEW', 'New');
jr_define ('COMMON_SEND', 'Изпращане');
jr_define ('RECAPTCHA_TITLE', 'reCaptcha');
jr_define ('RECAPTCHA_INFO', 'Captcha се използва, за да се гарантира, че клиентът, използващ уеб формуляри, е човешко същество, и се използва за предотвратяване на "спам" на мениджърите на имоти от роботи в интернет. За да използвате формуляра за връзка с нас в Jomres, вие ще трябва да се регистрирате на <a href="http://www.google.com/recaptcha" target="_blank"> началната страница на Google reCaptcha </a> и да настроите вашия домейн да получава вашите публични и частни ключове. сте получили тези ключове, моля, въведете ги по -долу. Услугата reCapcha е безплатна услуга, предоставяна от Google. ');
jr_define ('RECAPTCHA_PUBLIC_KEY', 'Публичен ключ');
jr_define ('RECAPTCHA_PRIVATE_KEY', 'Частен ключ');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Таймаут на заключващия файл');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_DESC', 'За да предотврати опасността от гости с двойно резервиране на стаи, Jomres използва заключващ файл, за да предотврати добавянето на стая към списъка с налични стаи във формуляра за резервация, ако някой друг вече е добавил стаята към тяхната за същите дати . По подразбиране това заключване ще изтече след 3600 секунди или един час. Можете да промените времето, необходимо за изтичане на това заключване, като промените тази цифра. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH', "Активиране на шаблони и функционалност на Jomres 'Bootstrap?");
jr_define ('COMMON_ACTION', 'Action');
jr_define ('COMMON_VIEW', 'View');
jr_define ('BACKTOTOP', 'Назад към началото');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Слаб');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Силен');
jr_define ('_JOMRES_INPUTFILTERING', 'Филтриране на входа');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Ниво на филтриране на входа');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Повечето данни, които се въвеждат в системата, се дезинфекцират, като първо се премахнат всички html тагове, след това се използва функционалност за филтриране на променливи PHP, за да се направят данните безопасни, преди да бъдат въведени в базата данни. Може да искате да разрешите определени входни данни (например текстовите входове в страницата с подробности за свойствата), за да включите HTML. Има две нива на филтриране, които можете да използвате, за да филтрирате този вход, или Слаб, или Силен. Трябва да използвате настройката Слаб само ако потребителят (ите) влизат данните се доверяват от вас самите, напр. колеги системни администратори, в противен случай трябва да ги оставите зададени на Strong. Когато е зададено на strong (препоръчително), все още можете да посочите кои маркери да разрешите, като редактирате следващата настройка HTML Prerifier allowed tags") ;
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Разрешени маркери за въвеждане');
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', 'Можете да редактирате маркерите, които html пречиствателят ще позволи чрез своята филтрираща система. По подразбиране е \'p, b, strong, a [href], i\' (т.е. Параграф, Удебелен, Силен, Връзки и курсив) За повече информация относно разрешените тагове, моля, прочетете документацията за пречиствател на HTML на <a href=\'http://htmlpurifier.org\' target=\'_blank\'> htmlpurifier.org </a>. Докато можете да промените тази настройка, вие се препоръчва да оставите настройката по подразбиране. ');
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Разрешени входове');
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Можете да дефинирате кои входове за формуляри ще позволят html, като редактирате тази опция, всеки вход, добавен към този списък, ще бъде анализиран чрез HTML Пречиствател, вместо да премахне всички html. property_policies_disclaimers '. Добавете още входни данни, като ги добавите от имена, разделени с интервал. ");
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Подробности за собствеността в раздели?');
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Задайте тази опция, за да се показват подробности за собствеността в разделите. Задайте я на не, за да ги показвате без раздели.');
jr_define ('COMMON_PRINT', 'Печат');
jr_define ('COMMON_EDIT', 'Edit');
jr_define ('COMMON_COPY', 'Copy');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres е проектиран да работи както в рамките на Bootstrap 2, така и в Bootstrap 3. След като инсталирате BS2 или BS3 тема или шаблон, задайте този превключвател, за да изберете кой от вкусовете на Bootstrap искате да работи Jomres с. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Използване на шаблони на Jomres Bootstrap във външния интерфейс?');
jr_define ('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Ето някои алтернативи, които може да искате да обмислите.');
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Автоматично откриване на страната на госта?");
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Системата ще се опита да открие автоматично държавата на госта, ако той не е резервирал преди това. Можете да зададете тази опция на Не и да определите държавата, която предпочитате да се показва във формуляра за резервация, в следващата опция. ");
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Всичко за Jomres');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'помощ');
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Първи стъпки');
jr_define ('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Контрол на достъпа');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'инструменти за програмисти');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'езици');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'генериране на доход');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'структура на сайта');
jr_define ('_JOMRES_CUSTOMCODE_MANUAL', 'Ръчно (онлайн)');
jr_define ('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Моят акаунт (онлайн)');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'функционалност на портала');
jr_define ('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Мениджър на приставки');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'интеграция');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'отчети/статистика');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'помощ');
jr_define ('_JOMRES_CUSTOMCODE_UPGRADES', 'Актуализации');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'начини на плащане');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Тарифа по подразбиране');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Това важи само за нови тарифи');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Години за показване');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Определя броя на годините за показване при редактиране на вид тарифа');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'фактури');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'подробности за акаунта');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Вход');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Изход');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'търсене');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'табло за управление');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'резерв');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'фактури');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'настройки');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define ('_JOMRES_EDIT_COUNTRY_TITLE', 'Редактиране на държава');
jr_define ('_JOMRES_EDIT_COUNTRY_ID', 'Идентификатор на държава');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Код на държавата');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Име на държава');
jr_define ('_JOMRES_EDIT_REGION_TITLE', 'Редактиране на регион');
jr_define ('_JOMRES_EDIT_REGION_ID', 'Идентификатор на регион');
jr_define ('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Код на държавата');
jr_define ('_JOMRES_EDIT_REGION_REGIONNAME', 'Име на регион');
jr_define ('_JOMRES_COM_LISTCOUNTRIES', 'Списък на държави');
jr_define ('_JOMRES_COM_LISTREGIONS', 'Списъчни региони');
jr_define ('_JOMRES_EXPORT_DEFINITIONS', 'Експортни дефиниции');
jr_define ('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Тази функция ви позволява да експортирате преводи, създадени с помощта на функцията за превод на език. Тя ще изгради текстово поле с всички данни, необходими за изграждането на нов езиков файл, всичко, което трябва да направите е да копирате и поставите този изход в нов езиков файл, който можете да поставите на нов сървър, базиран на Jomres, или ако искате да допринесете отново за общността на Jomres. ');
jr_define ('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Превод на локали');
jr_define ('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Превод на файлови низове на lang');
jr_define ('_JOMRES_COM_NOTAMANAGER', "Грешка, потребителят, в който сте влезли, не е супер мениджър в Jomres, няма да можете да използвате тази функция, докато не използвате функцията\" Мениджъри на имоти \", за да станете И двамата мениджър и супер мениджър. Това е функция за защита. ");
jr_define ('_JOMRES_COM_LAYOUTS_DEFAULT', 'Оформление на списъка със свойства по подразбиране');
jr_define ('_JOMRES_STAYFORAMINIMUMOF', 'Останете за минимум');
jr_define ('_JOMRES_NIGHTSFOR', 'нощувки за');
jr_define ('_JOMRES_AGENT', 'Агент');
jr_define ('_JOMRES_AGENT_DETAILS', 'Данни за агента');
jr_define ('_JOMRES_AGENT_LISTINGS', "Обяви на агента");
jr_define ('_JOMRES_APPROVALS_CONFIG_TITLE', 'Автоматично одобряване на нови свойства');
jr_define ('_JOMRES_APPROVALS_CONFIG_DESC', 'Ако зададете тази опция на Не, тогава ще трябва ръчно да одобрите нови имоти. Докато имотът не бъде одобрен, той не може да бъде публикуван от мениджър/супер мениджър на имоти.');
jr_define ('_JOMRES_APPROVALS_MENU_NAME', 'Одобрения');
jr_define ('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Това свойство все още не е одобрено. След като бъде одобрено, ще можете да го публикувате.');
jr_define ('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'За съжаление не можете да публикувате този имот, тъй като все още не е одобрен.');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Нова собственост изисква одобрение');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Към системата е добавено свойство, което изисква вашето одобрение. Щракнете върху връзката, за да видите свойствата, чакащи одобрение:');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Вашата собственост е одобрена');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Поздравления, имотът Ви е одобрен, моля, щракнете върху следната връзка, за да видите контролния панел на имота:");
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Имената на регионите са преводими');
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Освен ако не използвате много бърз сървър, се препоръчва да оставите този набор на Не. Поради големия брой имена на региони, преводът на имена на региони отнема много памет, което може да забави резултатите от търсенето ви. надолу. ");
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Гост резервиран.');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Съжалявам, този имейл адрес вече се използва. Ако това е вашият имейл адрес, моля, уверете се, че сте влезли преди да опитате да резервирате.');
jr_define ('JOMRES_TAPTOCALL', 'Докоснете за обаждане');
jr_define ('JOMRES_NEWREVIEW_SUBJECT', 'Нов преглед за');
jr_define ('JOMRES_NEWREVIEW_MESSAGE', 'Нов преглед е оставен за');
jr_define ('JOMRES_NEWREPORT_SUBJECT', 'Нов отчет');
jr_define ('JOMRES_NEWREPORT_MESSAGE', 'Съобщено е за преглед за');
jr_define ('JOMRES_SUPERIOR', 'Superior');
jr_define ('JOMRES_GRANDTOTAL_EX_TAX', 'Обща сума (без данък):');
jr_define ('JOMRES_GRANDTOTAL_INC_TAX', 'Обща сума (с данък):');
jr_define ('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Общ данък:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Въведете двете думи:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Въведете това, което чувате:');
jr_define ('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Възпроизвеждане на аудиозаписа');
jr_define ('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Изтеглете парчето в MP3 формат');
jr_define ('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Визуален режим');
jr_define ('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Аудио режим');
jr_define ('JOMRES_RECAPTCHA_REFRESH_BTN', 'Опресняване');
jr_define ('JOMRES_RECAPTCHA_HELP_BTN', 'Помощ');
jr_define ('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'За съжаление, това е неправилно. Моля, опитайте отново.');
jr_define ('JOMRES_GOOGLE_MAPS', 'Опции за карта на Google');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Използване на метеорологичния слой?');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'по Фаренхайт');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Използване на транзитен слой?');
jr_define ('JOMRES_GOOGLE_MAPS_POIS', 'Активиране на Gmap точки на интерес (включително евентуално вашите конкуренти)?');
jr_define ('_JOMRES_METAKEYWORDS', 'Мета ключови думи');
jr_define ('_JOMRES_SCAN_FOR_DIRECTIONS', 'Сканирайте този код в телефона си, за да получите упътвания до нас.');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Въведеният от вас номер по ДДС не изглежда правилен. Трябва да имате нещо подобно: BE805670816B01");
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Невалиден номер по ДДС. Моля, проверете валидността на вашия номер по ДДС с уеб услугата за потвърждаване на номера на ДДС в Европа (VIES)');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Поздравления. Успяхме да потвърдим вашия номер по ДДС.');
jr_define ('_JOMRES_TAX_RULES_LIST', 'Списък на данъчните правила');
jr_define ('_JOMRES_TAX_RULE', 'Данъчно правило');
jr_define ('_JOMRES_TAX_RULE_INFO', 'Данъчните правила се използват за установяване на различни данъчни правила за различните региони. Тези данъчни правила засягат лицето, което прави резервацията, ако е регистрирано, влезло и е редактирало профила си чрез страницата "редактиране на моя акаунт" . Целта на тези правила е да настанят брокерите в онези райони, които са освободени от ДДС, може да откриете, че не е необходимо да създавате много правила, ако изобщо има такива. ');
jr_define ('_JOMRES_TAX_RATES_IMPORT', 'Данъчни ставки при внос');
jr_define ('_JOMRES_TAX_RATES_IMPORT_INFO', 'Можем да импортираме данъчни ставки за ЕС, ако желаете. Обърнете внимание, че ако използвате тази функция, всички ваши съществуващи данъчни ставки ще бъдат премахнати.');
jr_define ('_JRPORTAL_TAX_RULE_EDIT', 'Редактиране на данъчното правило');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER', 'Номер по ДДС за този имот.');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Моля, въведете номера по ДДС за този имот.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'Валидиран номер по ДДС.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Номер по ДДС не е валидиран.');
jr_define ('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Въведените тук бизнес данни ще се използват за фактури за комисионни и абонаменти.');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Изглежда, че все още не сте попълнили данните за профила си. За да изброим вашия имот на сайта, трябва да попълните данните за вашия акаунт, преди да можем да продължим.");
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Производство или развитие?');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Ако зададете тази опция на Development, ще активираме отчитането на грешки, в противен случай, когато е настроено на Production, ще бъде изключено. Ако това е сървър на живо, препоръчваме да зададете тази опция на "production".' );
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Производство');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Развитие');
//v7.3.3
jr_define ('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Подробности за ресурса');
jr_define ('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Данни за тарифите');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Само');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'наляво!');
jr_define ('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Ресурсна функция');
jr_define ('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Не може да се премахне тази функция на ресурса, тя е присвоена на ресурс. Премахнете функцията от този ресурс и опитайте отново.');
// v7.4
jr_define ('_JOMRES_MEDIA_CENTRE_TITLE', 'Медиен център');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Добавяне на изображения');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Изображения на стаите');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Основно изображение на имота');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Изображения за слайдшоу');
jr_define ('_JOMRES_MEDIA_CENTRE_CLEAR', 'Изчистване на списъка');
jr_define ('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Плъзнете и пуснете файлове тук');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Изберете ресурса, за който искате да качите изображения. Ако можете да качвате изображения за отделни ресурси (например стаи), ще получите второ падащо меню, за да изберете конкретния ресурс.');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Ако качите няколко изображения като "Основно изображение на имота", те ще се използват в списъка със свойства. Изображенията на слайдшоуто ще се показват на страницата с подробности за имота.');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Преглед на вашето изображение');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Изтриване на изображение');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Качване на изображение');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Икони за типове стаи');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Икони за свойства на имота');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Качване на всички файлове');
//8.0
jr_define ('COMMON_PREV', 'Prev');
jr_define ('COMMON_MORE', 'More');
jr_define ('_JOMRES_DASHBOARD_TODAY', 'Днес');
jr_define ('_JOMRES_DASHBOARD_YEAR', 'Година');
jr_define ('_JOMRES_DASHBOARD_MONTH', 'Месец');
jr_define ('_JOMRES_DASHBOARD_WEEK', 'Седмица');
jr_define ('_JOMRES_DASHBOARD_DAY', 'Ден');
jr_define ('_JOMRES_HLEGEND', 'Легенда');
jr_define ('_JOMRES_HFILTER', 'Филтър');
jr_define ('_JOMRES_HFROM', 'От');
jr_define ('_JOMRES_HTO', 'За');
jr_define ('_JOMRES_HNEW_BOOKING', 'Нова резервация');
jr_define ('_JOMRES_HSTATUS_DEPOSIT', 'Състояние на депозита');
jr_define ('_JOMRES_HSTATUS_GUEST', 'Състояние на госта');
jr_define ('_JOMRES_HSTATUS_BOOKING', 'Състояние на резервацията');
jr_define ('_JOMRES_HSTATUS_PUBLISHING', 'Състояние на публикуване');
jr_define ('_JOMRES_HSTATUS_INVOICE', 'Статус на фактура');
jr_define ('_JOMRES_HSTATUS_INVOICE_TYPE', 'Тип фактура');
jr_define ('_JOMRES_HSTATUS_APPROVED', 'Одобрено');
jr_define ('_JOMRES_HSTATUS_CURRENT', 'Текущ бизнес');
jr_define ('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Показване на резервации за');
jr_define ('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Показване на фактури за');
jr_define ('_JOMRES_STATUS_ANY', 'Всички');
jr_define ('_JOMRES_STATUS_PAID', 'Платено');
jr_define ('_JOMRES_STATUS_NOTPAID', 'Не се плаща');
jr_define ('_JOMRES_STATUS_CHECKEDOUT', 'Проверено');
jr_define ('_JOMRES_STATUS_ACTIVE', 'Активен');
jr_define ('_JOMRES_STATUS_CANCELLED', 'Отменено');
jr_define ('_JOMRES_STATUS_PUBLISHED', 'Публикувано');
jr_define ('_JOMRES_STATUS_NOT_PUBLISHED', 'Непубликувано');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Гости с активни резервации');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Гости с минали резервации');
jr_define ('_JOMRES_STATUS_BOOKINGS', 'Резервации');
jr_define ('_JOMRES_STATUS_SUBSCRIPTIONS', 'Абонаменти');
jr_define ('_JOMRES_STATUS_COMMISSIONS', 'Комисиони');
jr_define ('_JOMRES_STATUS_ALL_PROPERTIES', 'Всички мои фирми');
jr_define ('_JOMRES_ACTION_SET_CURRENT', 'Задай като текущ');
jr_define ('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define ('_JOMRES_ACTION_CHECKOUT', 'Проверете');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'резервации');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'свойства');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'гости');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'отчети');
jr_define ('_JOMRES_HLIST_GUESTS', 'Гости');
jr_define ('_JOMRES_HLIST_GUESTS_MENU', 'Списък на гостите');
jr_define ('_JOMRES_HLIST_INVOICES_MENU', 'Списък на фактури');
jr_define ('_JOMRES_HLIST_PROPERTIES', 'Свойства');
jr_define ('_JOMRES_HQUICK_BOOKING', 'Бърза резервация');
jr_define ('_JOMRES_HDATE_OF_BOOKING', 'Дата на резервация');
jr_define ('_JOMRES_HTWO_WEEKS', 'Две седмици');
jr_define ('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Тази резервация ще бъде отменена. Натиснете OK, за да отмените резервацията.');
jr_define ('_JOMRES_HOVERVIEW_CHECKINS', 'Днес проверки');
jr_define ('_JOMRES_HOVERVIEW_CHECKOUTS', 'Днес каси');
jr_define ('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Настоящи жители');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION', 'Местоположение на лентата за навигация');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'По подразбиране (област на съдържанието)');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Фиксирано отгоре');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Поправено до дъното');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Обърната навигационна лента (промяна на цвета)');
jr_define ('_JOMRES_BOOKING_NUMBER', 'Номер на резервацията');
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Покажи гости за');
jr_define ('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap версия');
jr_define ('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres включва свои собствени набори шаблони, по един за всяка поддържана версия на Bootstrap. Шаблоните/темите на Joomla и Wordpress, базирани на Bootstrap, ще предлагат конкретна версия на Bootstrap, така че трябва да се уверите, че опцията, която сте избрали тук е съвместим с вашия шаблон/тема. Ако темата ви не съдържа код на Bootstrap, задайте тази опция на Без Bootstrap в Темата и тогава Jomres автоматично ще включи Bootstrap 3 файлове за собствена употреба. ");
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Покажи гости за');
jr_define ('_JOMRES_HFIXED_PERIODS', 'Фиксирани периоди');
jr_define ('_JOMRES_HDEPOSITS', 'Депозити');
jr_define ('_JOMRES_HBOOKING_FORM', 'Формуляр за резервация');
jr_define ('_JOMRES_HREQUIRED_FIELDS', 'Задължителни полета');
jr_define ('COMMON_PLACEHOLDER_FIRSTNAME', 'Том');
jr_define ('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define ('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define ('COMMON_PLACEHOLDER_STREET', 'Моята улица');
jr_define ('COMMON_PLACEHOLDER_TOWN', 'Моят град');
jr_define ('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_PROPERTYNAME', 'Моят хотел');
jr_define ('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define ('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define ('EXTENDED_CONFIGURATION', 'Разширена конфигурация');
jr_define ('SIMPLE_CONFIGURATION', 'Проста конфигурация');
jr_define ('_JOMRES_HRESOURCE_FEATURES', 'Функции на ресурса');
jr_define ('_JOMRES_HRESOURCE_TYPE', 'Тип ресурс');
 jr_define ('_JOMRES_HEDIT_GUEST_TYPE', 'Редактиране на типа гост');
jr_define ('_JOMRES_HEDIT_COUPON', 'Редактиране на талон');
jr_define ('_JOMRES_HEDIT_EXTRA', 'Редактиране на допълнително');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Създаване на множество ресурси');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Генериране на ресурси');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Колко ресурса?');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Тип ресурс');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Максимум гости на ресурс');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Изтриване на всички съществуващи ресурси?');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Моля, имайте предвид, че в момента разглеждате администраторската област с Разширено конфигуриране на сайт, зададено на Не. Ако искате да видите повече опции, моля, задайте Конфигурация на сайта -> Разни -> Разширени настройки на сайта на Да.');
jr_define ('DATATABLES_SINFO', 'Показване на _START_до _END_от _TOTAL_записи');
jr_define ('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Одобрение');
jr_define ('_JOMRES_BOOKING_REJECT_INQUIRY', 'Отхвърляне на запитване за резервация');
jr_define ('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Одобряване на запитване за резервация');
jr_define ('_JOMRES_STATUS_APPROVED', 'Одобрено');
jr_define ('_JOMRES_STATUS_REJECTED', 'Отхвърлено');
jr_define ('_JOMRES_STATUS_INQUIRY', 'Запитване');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Резервациите изискват одобрение или потвърждение за наличност?');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Ако е зададено с да, когато се прави резервация, тя няма да се показва в календарите за наличност (и други гости все още могат да резервират тези дни и ресурс), докато управителят на имота не приеме/потвърди наличността за резервацията) . След като бъде потвърдено, резервацията се добавя като временна (ако не отменя други резервации; други гости не могат да резервират вече същите дати) и на клиента се изпраща имейл, за да извърши плащането. ');
jr_define ('_JOMRES_ERROR', 'Грешка');
jr_define ('_JOMRES_ERROR_MESSAGE', 'Съжалявам! Възникна грешка при опит за обработка на тази функция. Съобщено е за вас и ние ще я разгледаме.');
jr_define ('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Съобщение');
jr_define ('_JOMRES_ERROR_DEBUGGING_FILE', 'Файл');
jr_define ('_JOMRES_ERROR_DEBUGGING_LINE', 'Линия');
jr_define ('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Шаблони за имейли');
jr_define ('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Редактиране на имейл шаблон');
jr_define ('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Тема на имейла');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Текст на имейл');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Тип имейл');
jr_define ('_JOMRES_EMAIL_TEMPLATES_NAME', 'Име на имейл');
jr_define ('_JOMRES_EMAIL_TEMPLATES_DESC', 'Описание на имейл');
jr_define ('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Моля, вижте тази страница за помощ при персонализирането на имейлите и списък с наличните резултати: <a href = "http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank"> Помощ за шаблони за имейли </a> ');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Администратор на сайта Нов имейл за резервация');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Имейл, изпратен до администратора на сайта при извършване на нова резервация, ако глобалният шлюз на Paypal е активиран');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Имейл за нова резервация на хотел');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Имейл, изпратен до собственика на имота, когато се прави нова резервация');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Имейл за нова резервация за гости');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Имейл, изпратен до госта при извършване на нова резервация');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Писмо за потвърждение на госта');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Писмо или имейл за печат, които могат да бъдат изпратени ръчно от собственика на имота за потвърждаване на резервация');
jr_define ('_JOMRES_CAN_BE_APPROVED', 'Тази резервация може да бъде одобрена. Всички избрани ресурси са налични за избраните дати.');
jr_define ('_JOMRES_CANT_BE_APPROVED', 'Тази резервация не може да бъде одобрена, тъй като някои от ресурсите вече са резервирани за избраните дати. Първо ще трябва да промените резервацията.');
jr_define ('_JOMRES_SHOW_POWEREDBY', 'Показване на връзката Powered by Jomres в долния колонтитул на Jomres.');
jr_define ('GUEST_BUDGET', 'Бюджет');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH', 'Използване на функцията за бюджет?');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Само заредени сайтове! Функцията за бюджет е функция от списъка с имоти, която гостът може да използва, за да подчертае за тях имоти, чиято цена на нощувка е под определена цифра. Функцията има някои ограничения, тъй като може да не е подходящ за някои сайтове, които използват много различни валути. Забележете, ако използвате това и приставката Представени обяви, вашият клас на опаковане на обяви се променя автоматично на панел първичен, когато се показва списъкът със свойства. ");
jr_define ('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Име:');
jr_define ('_JOMRES_FOR', 'За');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHT', 'нощ');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHTS', 'нощувки');
jr_define ('_JOMRES_LIVE_SCROLLING', 'Използване на превъртане на живо/превъртане на Infinate в списъка със свойства?');
jr_define ('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define ('_JRPORTAL_MONTHS_SHORT_1', 'Февруари');
jr_define ('_JRPORTAL_MONTHS_SHORT_2', 'март');
jr_define ('_JRPORTAL_MONTHS_SHORT_3', 'април');
jr_define ('_JRPORTAL_MONTHS_SHORT_4', 'май');
jr_define ('_JRPORTAL_MONTHS_SHORT_5', 'юни');
jr_define ('_JRPORTAL_MONTHS_SHORT_6', 'юли');
jr_define ('_JRPORTAL_MONTHS_SHORT_7', 'август');
jr_define ('_JRPORTAL_MONTHS_SHORT_8', 'септември');
jr_define ('_JRPORTAL_MONTHS_SHORT_9', 'октомври');
jr_define ('_JRPORTAL_MONTHS_SHORT_10', 'ноември');
jr_define ('_JRPORTAL_MONTHS_SHORT_11', 'Декември');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'Показване на резултати от _START_до _END_от общо _TOTAL_');
jr_define('DATATABLES_SINFOEMPTY', 'Показване на резултати от 0 до 0 от общо 0');
jr_define('DATATABLES_SINFOFILTERED', '(филтрирани от общо _MAX_резултата)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'Показване на _MENU_резултата');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Обработка на резултатите...');
jr_define('DATATABLES_SSEARCH', 'Търсене във всички колони:');
jr_define('DATATABLES_SZERORECORDS', 'Няма намерени резултати');
jr_define('DATATABLES_SFIRST', 'Първа');
jr_define('DATATABLES_SLAST', 'Последна');
jr_define('DATATABLES_SNEXT', 'Следваща');
jr_define('DATATABLES_SPREVIOUS', 'Предишна');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define ('DATATABLES_SHOWHIDE', 'Промяна на колони');
jr_define ('_BOOKING_ONREQUEST', 'Резервация при поискване');
jr_define ('_BOOKING_INSTANT', 'Незабавна резервация');
jr_define ('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome set icon?');
jr_define ('_JOMRES_COM_FONTAWESOME_DESC', 'Задайте това на Да, ако вашият шаблон не включва страхотен шрифт.');
jr_define ('_BOOKING_CALCQUOTE', 'Заявка за резервация');
jr_define ('_JOMRES_COM_CONFIRMATION_DEAR', 'Уважаеми');
jr_define ('_JOMRES_MULTISITES_SELECT_A_SITE', 'Изберете сайт');
jr_define ('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Идентификатор на сайта');
jr_define ('_JOMRES_IS_EU_COUNTRY', 'Държава от ЕС?');
jr_define ('_JOMRES_HLASTCHANGED', 'Последна промяна');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Имейл за отмяна на резервация на хотел');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Имейл, изпратен до собственика на имота при анулиране на нова резервация');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Имейл за анулиране на резервация за гости');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Имейл, изпратен до госта при анулиране на нова резервация');
jr_define ('_JOMRES_TEST_EMAIL_SEND', 'Изпращане на пробен имейл');
jr_define ('_JOMRES_TEST_EMAIL_SUBJECT', 'Тестов имейл');
jr_define ('_JOMRES_TEST_EMAIL_CONTENT', 'Това е пробен имейл от вашата резервационна система.');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Тестовият имейл е изпратен успешно');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Тестовият имейл не е изпратен');
jr_define ('_INVOICE_TRANSACTIONS', 'Транзакции');
jr_define ('_OPENEXCHANGE_API', 'API ключ на Open Exchange Rates');
jr_define ('_OPENEXCHANGE_API_DESC', 'За да конвертирате цените между услугите, ще ви е необходим API ключ за Open Exchange Rates. Трябва да имате ключ за API, за да показвате цените правилно в Jomres, но можете <a href = "https://openexchangerates.org /signup/free" target ="_blank"> регистрирайте се за безплатен ключ </a> (почасови актуализации, 1000 заявки/месец - без HTTPS, поддръжка по имейл или разширени функции). Jomres изтегля обменни курсове веднъж дневно, стига използвате ключа само на шепа сайтове, едва ли ще надхвърлите тези граници. Преди Jomres 8.3 използвахме по -стара, недокументирана функция на Yahoo, но открихме, че използването на тази функция е в противоречие с Условията на Yahoo и Условия. В резултат на това трябва да приемем, че функцията може да изчезне в даден момент в бъдеще, оттук и промяната в използването на Open Exchange Rates. ');
jr_define ('_JOMRES_COMMISSION', 'Комисия');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Ако качите няколко изображения за отделни допълнителни опции, ще се използва само първото изображение.');
jr_define ('_JRPORTAL_INVOICES_PAYNOW', 'Плати сега');
jr_define ('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Тази фактура е в срок. Моля, кликнете върху бутона, за да изберете начина на плащане.');
jr_define ('_JOMRES_EXTRAS_TEMPLATE', "Ето списък на някои от страхотните неща, които можете да закупите, докато правите резервация в този имот.");
jr_define ('GATEWAYS_INSTRUCTIONS', 'На тази страница можете да конфигурирате всички инсталирани шлюзове. Тези опции ви позволяват да приемате плащания за всяка фактура за комисионна или абонамент. Настройките на Frontend могат да бъдат отменени само от Paypal, всички останали шлюзове ще трябва да бъдат конфигурирани чрез Раздел Property Configuration -> Gateways, но ако в този списък се появи шлюз, той трябва да може да обработва както плащания по депозит за резервация, така и плащания по фактури. ');
jr_define ('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Показване в страницата с подробности за имота?');
jr_define ('PROPERTY_DETAILS_PAGE_OPTIONS', 'Настройки на страницата с подробности за имота');
jr_define ('_JOMRES_HLIST_PROPERTIES_WARNING', 'Управлението на имоти в Jomres се извършва само от cpanel на интерфейса на сайта. На тази страница ще можете да изброите всички имоти в системата, така че можете да зададете комисионни и да ги одобрите/отхвърлите (ако тези функциите са активирани). За да създадете нов имот, да редактирате съществуващи, да управлявате резервации или всякакви други задачи, свързани със собственост/резервации, ще трябва да влезете в интерфейса на сайта и да отидете на страницата по подразбиране на Jomres. Там ще видите Фронтален панел на Jomres. ');
jr_define ('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Икони за функции на стаята');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Категории характеристики на имоти');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Редактиране на категория характеристики на имота');
jr_define ('_JOMRES_HCATEGORY', 'Категория');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Показване на свойствата на собствеността, разделени на категории?');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Задайте това на ДА, за да разделите характеристиките на имота в категории. Тази опция засяга само характеристиките на имота, показани на страницата с подробности за собствеността. Всички други страници ще ги показват, без да ги разделят на категории.');
jr_define ('_JOMRES_ACTION_UNDO_CHECKIN', 'Отмяна на регистрацията');
jr_define ('_JOMRES_ACTION_UNDO_CHECKOUT', 'Отмяна на плащане');
jr_define ('_JOMRES_STATUS_UNISSUED', 'Неиздаден');
jr_define ('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID', 'Вашият ключ за изтегляне и поддръжка е валиден, ще можете да изтегляте приставки чрез мениджъра на плъгини.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Вашият ключ за изтегляне и поддръжка НЕ ​​е валиден, няма да можете да изтегляте приставки чрез мениджъра на приставки.');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE', 'Подтип');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Все още не сте задали подтип на вашия имот. Тук го определяте като нещо като вила с 5 спални или вила с 4 спални и помага на гостите, които търсят, да прецизират търсенията си.") ;
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Дайте на вашия имот подтип');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Шаблони за имейли');
jr_define ('_JOMRES_CONTACT_SETTINGS', 'Настройки за контакт');
jr_define ('_JOMRES_CONTACT_SETTINGS_DESC', 'От тук можете да отмените всички данни за контакт на имота (имейл, телефон, факс), така че цялата комуникация с гостите ще бъде изпратена до вас, а не до собствениците на имота.');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Замяна на данните за контакт с малки обяви?');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Ако тази опция е зададена на Да, тогава имейл адресите и телефонните номера на имота ще бъдат заменени с тези, зададени в този раздел. Това принуждава всички съобщения да се изпращат до посочения от вас имейл адрес, като се гарантира, че гостът и собствеността собственикът не може да заобиколи машината за резервации и комисионните, които ще възникнат. Това също означава, че всеки път, когато се промени описанието на имота, имотът ще бъде зададен на Неодобрен (ако е активирана функцията за одобрения) и ще трябва да проверите ръчно описанието за да се гарантира, че мениджърите не са въвели данни за телефон или имейл в текстовите полета, преди да го одобрят отново. ");
jr_define ('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Промените, направени в детайлите на обявите, изискват потвърждение от администратора на сайта. Ако запазите нови подробности, вашата обява ще бъде непубликувана и чака одобрение от администратора на сайта, преди да бъде видима отново за посетителите на сайта. Няма да можете да получавате онлайн резервации, докато вашата обява е непубликувана и чака одобрение. ');
jr_define ('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Преглед на заявката за резервация');
jr_define ('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Потвърдете заявка за резервация');
jr_define ('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Промяна на заявката за резервация');
jr_define ('_JOMRES_INVOICE_MARKASPENDING', 'Маркиране на фактура като изчакваща');
jr_define ('_JOMRES_INVOICE_MARKEDASPENDING', 'Фактура, маркирана като чакаща');
jr_define ('_JOMRES_TRACKING_ENABLE', 'Изпращане на анонимни данни за проследяване?');
jr_define ('_JOMRES_TRACKING_ENABLE_DESC', 'Изберете Да, за да изпратите анонимни данни за проследяване до Jomres.net, за да ни помогнете да разберем по -добре как използвате системата.');
jr_define ('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Моля, уверете се, че вашите данни са попълнени на страницата Редактиране на моя акаунт, преди да се опитате да направите резервации от името на вашите клиенти.');
jr_define ('_JOMRES_PARTNERS_GUEST_ADDRESS', "Данни за контакт на госта");
jr_define ('_JOMRES_CLEAR_GUEST_DETAILS', ' - Нов гост -');
jr_define ('_JOMRES_CHARTS', 'Диаграми');
jr_define ('_JOMRES_CHARTS_SELECT', 'Изберете диаграма ...');
jr_define ('_JOMRES_CHART_BOOKINGS_DESC', 'Приходи по година/месец');
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Добре, нека започнем. Първо трябва да създадете няколко стаи за този имот.");
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Създайте някои стаи сега');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Изследванията са доказали, че имоти с много висококачествени изображения генерират повече изгледи. Качете основно изображение и някои снимки от слайдшоу, за да подобрите шансовете си за получаване на резервации.');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Качване на изображение');
jr_define ('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Създаване на някои тарифи');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG', 'Какво ще резервират гостите?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Този имот тип имот от хотелски тип ли е, когато отдавате стаи в имота, или имот тип вила, където отдавате целия имот под наем в една резервация?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Стаи в имота');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Цялото свойство');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'И двете'); // Това е междинна настройка, която дава обратна съвместимост за съществуващи потребители, които все още не са актуализирали своите типове собствености. Няма да се избира
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Какво ще резервират гостите?');
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK', "Ще трябва да попълните данните за адреса си, така че гостите ви да могат да ви намерят, когато дойдат да отседнат.");
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Актуализирайте адреса си');
jr_define ('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Ами сега, изглежда сте забравили да попълните всички полета.');
jr_define ('_JOMRES_CONTANT_US', 'Свържете се с нас');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Добре дошли в новата ви онлайн обява за');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Здравейте и добре дошли в новата ви собственост на');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_2', "Наскоро добавихте нов имот към нашия уебсайт и бихме искали да ви посрещнем в семейството.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Можете да видите новото си табло за управление');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'тук');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4', "След като настроите имота си, можете да видите как изглежда на посетителите на сайта, като посетите");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'вашата първа страница.');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_5', "(не е публикуван, така че посетителите на сайта все още не могат да го видят).");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_6', "В горната част на страницата ще видите редица съобщения. Бутоните до тези съобщения ще ви насочат към страниците, които трябва да посетите, за да настроите собствеността си на нашия сайт. След като\" ако сме изпълнили всяка от тези задачи, ще бъде много по -лесно за посетителите на нашия сайт да намерят вашия имот и да направят резервации онлайн. ");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Ако имате някакви въпроси, моля');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'свържете се с нас');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_8', "и с удоволствие ще отговорим на всички ваши въпроси.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Всичко най -добро, нашият екип в');
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK', "Изглежда нямате никакви обиколки за продажба. Създайте профил на обиколка, след което използвайте бутона Генериране, за да създадете някои обиколки.");
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Нека създадем няколко обиколки!");
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP', 'Местоположение на символа за размяна на валута');
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Използвайте тази опция, за да преместите символа на валутата отзад, пред цифрата на цената или обратно.');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Въведете идентификатора на страницата си във Facebook, например "jomres". Оставете това поле празно, за да не показвате нищо. Не въвеждайте https://www.facebook.com или нещо друго. ');
jr_define ('COMMON_DOWNLOAD', 'Изтегляне');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'След това ще трябва да добавите някои тарифи. Това са вашите основни цени.');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap не е активиран!');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Внимание, нямате активиран Bootstrap в Конфигурацията на сайта на Jomres -> Различно. За да предоставите <i> някои </i> функции, понастоящем Jomres използва старите си шаблони, базирани на потребителския интерфейс на jQuery, обаче върху тях не се работи от няколко години. Всички текущи разработки и подобрения на шаблони на Jomres (файлове с оформление) са направени в шаблоните на файловете на Bootstrap 3. За да извлечете максимума от Jomres, препоръчваме да инсталирате Bootstrap 3 тема за Wordpress или Joomla. След като направите това, можете да активирате Jomres \'Bootstrap шаблони в конфигурацията на сайта.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Вашият ключ за поддръжка е валиден. Имайте предвид, че този лиценз не позволява изтегляне на приставки.');
jr_define ('_JOMRES_DASHBOARD_DRAG_TRASH', 'Плъзнете резервациите в тази област, за да ги отмените');
jr_define ('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define ('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define ('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Моля, уверете се, че сте създали страница на WordPress, която съдържа краткия код [jomres: xx-XX] (където xx-XX е кодът на езика на вашия сайт, например [jomres: en-GB] или [ jomres: en-US]) в противен случай няма да имате достъп до Jomres от интерфейса, за да управлявате вашите имоти и резервации. <br> Jomres е изграден върху рамката на Bootstrap, така че трябва да го използвате за тема, базирана на Bootstrap. препоръчайте такава, базирана на Bootstrap 3. Ако нямате достъп до тема, препоръчваме ви да използвате темата Jomres Leohtian за Wordpress, която можете да <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target ="_blank"> изтеглете от тук. </a> ');
jr_define ('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Преди да можете да създадете тип стая, трябва да знаем дали е за имот от хотелски тип или имот тип вила.");
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Щракнете, за да добавите нови типове стаи');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Внимание, имате един или повече типове имоти без типове стаи. Имотите се нуждаят от типове стаи, така че управителите на имоти да могат да създават тарифи.');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Използвайте бутона New за създаване на нови типове стаи.');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Обиколки');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Без резервации/Недвижими имоти (прост списък)');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION', 'Местоположение на регистрационния файл');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres регистрира системната активност по подразбиране на местоположението' .JOMRES_SYSTEMLOG_PATH. ". Тъй като този файл може да съдържа чувствителна информация (api ключове, системни пътища, информация за шлюза, информация за гост), силно препоръчваме да промените този път до един над корена на вашия уеб документ. Ако не разбирате какво означава това, моля, попитайте вашите уеб хостове за съвет, тъй като те ще познават вашата файлова система. ");
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres регистрира подробна информация за вашата система, включително ключове за api, системни пътища, шлюз и информация за гости, всички от които не трябва да се виждат от останалата част от интернет. Пътят на системния ви регистър не е зададен, така че системните регистрационни файлове в момента се записват в директорията ".JOMRES_SYSTEMLOG_PATH.", която не е идеална. Моля, посетете Конфигурация на сайта -> Отстраняване на грешки и задайте път във файловата си система, който е извън уеб корена. Ако имате съмнения, моля, свържете се с уеб хостовете си тъй като те ще могат да ви посъветват. ');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Ако вашата CMS е инсталирана в основната директория на вашия уебсайт, тогава подходящо място би било');
jr_define ('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Нямате зададен ключ на Google Карти. Поради последните промени в Google Maps, всички нови сайтове ще се нуждаят от API ключ, за да могат да използват функциите на Google Maps. Моля, <a href = 'http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target ='_blank'> вижте страницата ни с ръководство за това как да създадете API ключ < /a> и запишете ключа в Jomres. ");
jr_define ('JOMRES_GOOGLE_MAP_STYLE', 'Цветова схема на Google карта');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Добре, нека започнем да добавяме вашия имот към уебсайта. Трябва да съберем малко информация за вашия имот тук. Това ще ни позволи да настроим голите кости на вашия имот. След като направите това, тогава вие ще се ръководи чрез добавяне на стаи, цени и изображения. ");
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Типът на имота ви помага да определите как ще бъде резервиран имотът, например с хотели, които "продавате" само една или две стаи наведнъж, докато с вили предлагате целия имот.');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Обърнете внимание, че имейл адресът не трябва да е същият като този, който сте използвали при регистрацията на акаунта си. Това ви позволява да имате различни адреси за различни имоти.");
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Минимален депозит');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Можете да конфигурирате минималната сума на депозита, която да бъде начислена. Ако го направите, тогава настройките "Изискваният депозит е цената на първата нощ?" , вместо това всички стойности на депозитите са процент и трябва да са поне цифрата, която определяте тук. ');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Тази цифра не може да бъде по -малка от');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Системен хост');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Порт на системния журнал');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Ако искате да изпращате съобщения за системно регистриране до сървър на syslog, можете да зададете името на хоста или IP (напр. 192.168.0.2) и порт (напр. 514) тук. Забележете, ако сайтът е настроен на\"Development\", след това ще се изпращат DEBUG съобщения. Ако е зададено на' Production ', тогава ще се изпращат само съобщения на ниво INFO и по -високи. За да деактивирате регистрирането до отдалечения сървър, изпразнете полетата на хоста и порта. ");
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP няма достъп до PHP функциите \"openlog \"и\" syslog \". Това е настройка от страна на сървъра, ако искате Jomres да изпраща съобщения до сървър на syslog, моля, консултирайте се с вашите хостове и потвърдете дали PHP има достъп до тези функции. След като бъде активиран, ще можете да конфигурирате настройките на вашия сървър на syslog тук. ");
jr_define ('_JOMRES_SEND_ERROR_EMAIL', 'Изпращане на имейл до администратора на сайта, когато възникне грешка?');
jr_define ('_JOMRES_SEND_ERROR_EMAIL_DESC', "Исторически проблемите, които трябва да бъдат проучени, са изпращани по имейл до собствениците на сайтове. Това може да бъде чудесно за проследяване на работата на вашата система, тъй като има ужасно много движещи се части и е трудно да се следи всички те. За съжаление паяците и ботовете, обхождащи вашите сайтове (дори приятелски), могат по невнимание да предизвикат фатални грешки и това може да доведе до преобладаващ брой съобщения, които получавате. Ако случаят е такъв, задайте тази опция на Не. Jomres изпраща регистрация съобщения както към набор от файлове за регистриране, така и към сървър на syslog (ако вашите специфични настройки на PHP позволяват, ако не се свържете с вашия хост). Можете да анализирате ръчно файловете, ако търсите нещо конкретно (например, ако разработвате шлюз и искате да използвате функцията gateway_log ().), но това е много информация, която да прекосявате, така че е по -добре да използвате нещо като анализатор на файлове на syslog. Ако разработвате на Linux, тогава на разположение са ви много инструменти, ако в Windows тогава прост инструмент, който можете да използвате, е http://maxbelkov.github.io/visualsyslog/ На тази страница задайте \"хост Syslog\" на \"127.0.0.1\" и \" Порт\" към 514, за да видите съобщения, регистрирани в този инструмент. ");

jr_define ('_JOMRES_MANAGE_PROPERTIES', 'Управление на свойства');
jr_define ('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Нямате зададен ключ за API за откриване на IP. Това е необходимо, за да позволи на системата автоматично да открива местоположението на потребителя и автоматично да задава тяхната валута и държава. Моля, <a href = 'http://www.jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target ='_blank'> вижте нашето ръководство страница за това как да създадете ключ за API за откриване на IP </a> и да го запазите в Jomres> Конфигурация на сайта> Валутни конверсии / Валутни кодове. ");
jr_define ('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Нямате набор от ключове за API на Open Exchange Rates. Това е необходимо, за да позволи на системата автоматично да изтегля и използва обменни курсове. Моля, <a href = 'http://www.jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target ='_blank'> вижте страницата ни с ръководство за това как да създайте ключ за API за откриване на IP </a> и запишете ключа в Jomres> Конфигурация на сайта> Преобразуване на валута / Валутни кодове. ");
jr_define ('_JOMRES_PERMIT_NUMBER_TITLE', 'Номер на разрешителното');
jr_define ('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Някои държави законодателно определят, че трябва да показвате номер на разрешително за вашия имот. Ако имате такъв номер, въведете го тук и той ще бъде добавен към секцията за заглавието на имота.');
jr_define ('_JOMRES_SHORTCODES', 'Къси кодове');
jr_define ('_JOMRES_SHORTCODES_INFO_JOOMLA', "Приставката <strong> plg_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot ТРЯБВА да бъде инсталирана и разрешена, за да работят тези кратки кодове. Това може да се намери в Jomres Plugin Manager. Ако този сайт е създаден с помощта на такъв Quickstarts тогава вероятно е вече инсталиран. ");
jr_define ('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Трябва да сте сигурни, че приставката <strong> 'Jomres Shortcodes' </strong> е активирана. Това може да се намери в мениджъра на приставки на Jomres. Ако този сайт е създаден с помощта на някоя от Quickstarts, вероятно е вече е инсталирано.");
jr_define ('SHORTCODE_TASK', 'Task');
jr_define ('SHORTCODE_DESCRIPTION', 'Описание');
jr_define ('SHORTCODE_ARGUMENTS', 'Аргументи');
jr_define ('SHORTCODE_EXAMPLE', 'Пример');
jr_define ('INTEGRITY_CHECK', 'Проверка на целостта на файловата система');
jr_define ('INTEGRITY_CHECK_DESC', 'Тази функция ви позволява да проверите дали файловата система съвпада с тази, предоставена в текущата версия на Jomres. Това е полезно, за да се гарантира, че всички файлове са актуализирани правилно след инсталиране/надстройка. Файлове в червено липсват, файлове в Оранжевите съществуват, но са различни от тези, предоставени в текущата версия. Тук ще бъдат изброени само файлове, които са потенциални проблеми. ');
jr_define ('INTEGRITY_CHECK_FILENAME', 'Проверка на целостта на файловата система');
jr_define ('INTEGRITY_CHECK_LOCALHASH', 'Локален хеш');
jr_define ('INTEGRITY_CHECK_BUILDHASH', 'Хеш на версията');
jr_define ('INTEGRITY_CHECK_NOPROBLEMS', 'Страхотно! Не бяха открити проблеми.');
jr_define ('_JOMRES_PROPERTYTYPE_MARKER', 'Маркер на Google карти');
jr_define ('_JOMRES_JAVASCRIPT_READMORE', 'Прочетете повече');
jr_define ('_JOMRES_JAVASCRIPT_READLESS', 'Четете по -малко');
jr_define ('_JOMRES_TOURIST_TAX_TITLE', 'Туристическа такса');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE', 'Ставка за туристически данък');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Задайте ставка на туристическата такса. Туристическата такса се изчислява само след генерирането на първоначалната резервация и се добавя към страницата за потвърждение на резервацията в полето за допълнителни услуги.');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Има ли процент?');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Задайте това на Да, ако данъкът е процент или Не, ако е фиксирана такса.");
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Засяга цялата стойност на резервацията?');
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Задайте това на Да, ако данъкът покрива цялата стойност на резервацията, така че това е процент от двете места за настаняване плюс всички екстри, или Не, ако се изчислява само въз основа на стойността на общата сума за настаняване. Ако горната опция \"е процент\" е зададена на Не, тази опция се игнорира. ");
jr_define ('_JOMRES_TOURIST_TAX_NOTE', 'Моля, имайте предвид, че към тази резервация ще бъде добавена туристическа такса. Ще можете да видите данъка на страницата за резервация за преглед.');
jr_define ('NO_LICENSE_MESSAGE', "Не сте запазили номер на лиценз в Конфигурацията на сайта, поради което няма да можете да изтеглите приставки. След като запазите валиден лицензионен ключ, ще можете да инсталирате всички приставки, които са изброени като Основни приставки. ");
jr_define ('INVALID_LICENSE_MESSAGE', "Изглежда, че използвате номер на лиценз, който е невалиден или е изтекъл. След като запазите валиден лицензионен ключ, ще можете да инсталирате всички приставки, които са посочени като Core плъгини.");
jr_define ('VALID_LICENSE_MESSAGE', "Поздравления, използвате валиден лицензионен номер и можете да инсталирате Core плъгини чрез мениджъра на плъгини на Jomres.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Тази страница ви позволява да качвате изображения за вашата собственост и нещата, които предлагате. Тя има един основен бутон и втори бутон, който ви позволява да избирате конкретни ресурси, за които да качвате изображения. И така, основната собственост изображение и слайдшоуто ще показват само един бутон, но ако сте създали някакви, напр. допълнителни екстри или стаи, тогава ще видите втори бутон, където можете да качите изображения за тези конкретни ресурси. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Тази страница ви позволява да качвате изображения за вашата собственост и нещата, които предлагате. Тя има един основен бутон и втори бутон, който ви позволява да избирате конкретни ресурси, за които да качвате изображения. И така, основната собственост изображение и слайдшоуто ще показват само един бутон, но ако сте създали допълнителни опции, ще видите втори бутон, където можете да качите изображения за тези конкретни ресурси. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Първо изберете изображението (ите), което искате да качите, като щракнете върху Добавяне на изображение или използвайте Плъзгане и пускане. Те ще се появят в колоната от дясната страна. </li>
  <li> Над тази област използвайте бутона \"Изберете ресурса \", за да изберете за кой ресурс искате да качите изображения. Може да ви бъде предложена опцията да изберете конкретен ресурс отдолу. </li>
  <li> След като сте избрали ресурс, можете да щракнете върху бутона Качване на изображение под изображение, за да го свържете с този ресурс. След като е качено изображение, то ще изчезне от колоната в сайта отдясно и ще се появи вляво. </li>
  <li> Използвайте бутона кошче до съществуващите изображения, за да премахнете изображения, които вече не искате да се показват. </li>
  <li> Можете да промените реда на показване на файловете в слайдшоуто, като ги преименувате, преди да ги качите, тъй като те се показват на страници по азбучен ред. </li>
</ol>
 ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "До бутона\" Ресурс \"може да видите бутон за визуализация. Ако щракнете върху това, ще видите изскачащ прозорец, който ви показва как ще изглеждат качените в момента изображения на страница. Това ви помага да получите представа как ще изглеждат изображенията на вашите клиенти. ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Няма ограничение за броя на изображенията, които можете да качите. Изображенията се преоразмеряват автоматично, когато се качват. Можете да качвате само JPG и PNG файлове.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "В идеалния случай всички изображения, които качвате, биха били поне");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "широки пиксели, в противен случай те могат да изглеждат размити след качването им.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Всички изображения, които качвате, не могат да бъдат повече от");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "по размер.");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Изберете ресурса, за който искате да качите изображения");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Специфичен ресурс");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Изображения, вече качени за този ресурс");
jr_define ('_JOMRES_MARKDOWN_TITLE', 'Текстово форматиране');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Можете да въведете текст тук, като използвате просто Markdown форматиране. Не е нужно да знаете HTML, просто използвайте бутоните, за да направите информацията да изглежда така, както искате, или форматирайте текст според тези примери.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Акцент');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'удебелен');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'курсив');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'зачертаване');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Заглавки");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Голяма заглавка');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Средно заглавие");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Малка заглавка');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Малка заглавка');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Списъци");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Общ елемент от списъка');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Номериран елемент от списъка');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Връзки');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Текст за показване');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Цитати');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Това е цитат.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Може да обхваща няколко реда!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Изображения');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Таблици');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Колона');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Показване на изображения на имоти като слайдшоу в списъка със свойства?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Ако е зададено с да, ще се покаже слайдшоу на основните изображения на свойствата. Ако е зададено на не, тогава ще се покаже първото основно изображение на свойството.');
jr_define ('EDIT_CMS_USER', 'Редактиране на потребител на CMS');
jr_define ('BOOKING_MADE_BY', 'Резервация направена от');
jr_define ('_JOMRES_ROUTER_FEATURES', 'Удобства');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Типове стаи');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Външен URL адрес на формуляр за резервация');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Тук можете да зададете външен URL адрес, ако искате да използвате уебсайт на трета страна за извършване на резервации. Всички бутони за резервация на jomres ще сочат към този URL адрес. Оставете това поле празно, ако искате да използвате формуляра за резервация на Jomres . ');
jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (кратко описание на стаята/субтитри)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Описание на стаята');
jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Гост в черен списък');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Ако този гост е в черния списък, той вече няма да може да прави резервации в този имот.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Манипулатор на сесия');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Запазване на файлове на jomres сесия на диск или в база данни. Препоръчително: база данни');
jr_define ('_JOMRES_MAP_HEIGHT', "Височина на картата (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Ниво на мащабиране на картата");
jr_define ('_JOMRES_MAP_MAPTYPE', "Тип на картата");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Мениджър за заместване на шаблони");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Пакетите на шаблони са плъгини, които могат да предоставят замяна на шаблони за различни основни файлове на шаблони на Jomres.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Тази страница изброява всички файлове с шаблони, които могат да бъдат заменени от файловете с шаблони на пакет от шаблони. Ако искате да замените определен файл с шаблон, щракнете върху бутона за редактиране на този файл, на следващата страница ще бъдете можете да изберете с коя версия искате да замените. Обърнете внимание, че тези замествания имат приоритет както над Jomres Core, така и над всякакви замени на теми/шаблони на Wordpress или Joomla. Можете да деактивирате заместване, като го изтриете на страницата Списък заменя шаблони. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Име на шаблон");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Текущ път");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Не е отменено");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Можете да изберете кой шаблон файл да замени файловете на шаблона на Core, като промените падащото меню");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Процент резервирани стаи");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Процент резервирани стаи");
jr_define ('_JOMRES_SELECT_WIDGETS', "Изберете джаджи");
jr_define ('_JOMRES_INTERVAL', "Интервал");
jr_define ('_JOMRES_TIMELINE', "Хронология");
jr_define ('_JOMRES_CPANEL_GRID', "Домашно оформление на контролния панел");
jr_define ('_JOMRES_CPANEL_GRID_DESC', "Изберете оформлението на мрежата на началната страница на контролния панел за управление на собствени имоти.");

jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google Map Markers");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Изображения на града");
jr_define ('_JOMRES_PTYPE_CHANGE_WARNING', "Промяната на типа собственост ще изтрие всички стаи, тарифите, настройките на имота и ще нулира наличността.");
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Моля, обърнете внимание, след актуализирането трябва да актуализирате всички вече добавени Jomres плъгини, чрез мениджъра на плъгини на Jomres. Ако имате инсталирани приставки за Core, но нямате валиден лиценз за Jomres, ние <em> правим не </em> препоръчваме да актуализирате Jomres, тъй като по -старите приставки често може да не работят с по -новите версии на Jomres. ');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Моля, имайте предвид, че след актуализирането трябва да актуализирате всички вече добавени Jomres плъгини, чрез мениджъра на плъгини на Jomres.');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Ако искате да актуализирате Jomres и неговите приставки, ще ви е необходим лиценз за подновяване. Моля, посетете <a href='https://www.jomres.net/pricing' target='_blank'> нашия сайт </a> за повече информация. В повечето случаи тези лицензи са 50% от цената на пълен лиценз. Моля, уверете се, че сте влезли в нашия магазин, преди да опитате да закупите подновяване. ");
jr_define ('_JOMRES_PAYMENT_METHOD_USED', "Начин на плащане:");

jr_define ('_JOMRES_PRICES', "Свържете се");


jr_define ('_OAUTH_TITLE', "Управление на ключове за приложения");
jr_define ('_OAUTH_APPS', "Подробности за клиента на REST API");
jr_define ('_OAUTH_IDENTIFIER', "Идентификатор");
jr_define ('_OAUTH_APIKEY', "Идентификатор на клиента");
jr_define ('_OAUTH_SECRET', "Тайна");
jr_define ('_OAUTH_CREATED', "Създадено/актуализирано приложение");
jr_define ('_OAUTH_CLIENT_ID_INFO', "Клиентският идентификатор и секретът са създадени за вас. Идентификаторът е така, че лесно можете да идентифицирате тази двойка ключове.");
jr_define ('_OAUTH_SCOPE_TITLE', "Разрешения (какво може да направи клиентът)");
jr_define ('_OAUTH_SCOPE_CATEGORY_USER', "Потребителски разрешения");
jr_define ('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Разрешения за собственост");

jr_define ('API_DOCUMENTATION_TITLE', "Документация за API на REST API");

jr_define ('_OAUTH_CONFIG', "Конфигурация на ядрото на API");

jr_define ('_OAUTH_CONFIG_SHOW', "Показване на опциите за конфигуриране на API на клиента в главното меню на Jomres?");
jr_define ('_OAUTH_CONFIG_SHOW_DESC', "Можете да изберете да не показвате опциите за конфигуриране на API клиента в секцията\" Моят акаунт \"на главното меню на Jomres. Вместо това можете да решите, че искате да ги показвате на други страници, използвайки Jomres Shortcodes.");

jr_define ('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Показва страницата с документация на ядрото на API. API Core позволява на потребителите да създават API клиенти, които след това се използват за достъп до функционалността на API, описана в документацията на API Core.");
jr_define ('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Показва страницата за администриране на основния API, където мениджърите на имоти могат да конфигурират API клиенти. Имайте предвид, че това е само регистриран потребител, така че потребителите трябва да бъдат регистрирани и влезли, преди да могат да видят тази страница.");

jr_define ('API_METHODS_TITLE', "Методи на API");
jr_define ('API_METHODS_DESCRIPTION', "Този списък с методи се основава на вашите инсталирани приставки за функции на API и се генерира автоматично. Ако инсталирате или изтриете приставка за функция на API, трябва да посетите тази страница, за да възстановите този списък с методи на API, налични на вашия сайт. ");

jr_define ('_OAUTH_REDIRECT_URI', "URI за пренасочване");
jr_define ('_OAUTH_IDENTIFIER_PLACEHOLDER', "Дайте ми име, което има значение за вас, например Моят телефон");

jr_define ('_OAUTH_GRANT_TYPES', "Тази система поддържа два типа предоставяне, Client Credentials и Implicit. Ако използвате потока <em> client_credentials </em>, тогава ще имате нужда както от клиентския идентификатор, така и от клиентската тайна. Ако използвате <em > неявно </em> тогава приложението ви ще изпрати само клиентския идентификатор и вие ще влезете в системата, за да разрешите изрично това приложение. ");

jr_define ('_OAUTH_IMPLICIT_NOTES', "За да използвате <em> имплицитния </em> поток от тип предоставяне, ще трябва да използвате този URL адрес, за да оторизирате приложенията си. Когато този URL адрес бъде извикан и вие сте упълномощили приложението, системата ще издаде знак, който вашите приложения след това ще използват за извикване на API на тази система ");
jr_define ('_OAUTH_AUTHORISATION_URL', "URL за упълномощаване");

jr_define ('WEBHOOKS_CORE', 'Webhooks');

jr_define ('_WEBHOOKS_CONFIG_SHOW', "Показване на опциите за конфигуриране на Webhook в главното меню на Jomres?");
jr_define ('_WEBHOOKS_CONFIG_SHOW_DESC', "Можете да изберете да не показвате опциите за конфигуриране на Webhook в секцията\" Моят акаунт \"на главното меню на Jomres. Вместо това можете да решите, че искате да ги показвате на други страници, използвайки Jomres Shortcodes.");

jr_define ('WEBHOOKS_DOCUMENTATION_TITLE', "Документация за Webhooks");

jr_define ('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Показва страницата с документация на ядрото на API. API Core позволява на потребителите да създават API клиенти, които след това се използват за достъп до функционалността на API, описана в документацията на API Core.");

jr_define ('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Показва основната страница за администриране на API, където мениджърите на имоти могат да конфигурират API клиенти. Имайте предвид, че това е функция само за регистриран потребител, така че потребителите трябва да бъдат регистрирани и влезли, преди да могат да видят тази страница.");

jr_define ('WEBHOOKS_INTEGRATION_EDIT', 'Редактиране на интеграцията');
jr_define ('WEBHOOKS_INTEGRATION_ID', 'ID за интеграция');
jr_define ('WEBHOOKS_INTEGRATION_URL', 'URL или име');
jr_define ('WEBHOOKS_ENABLED', 'Активирано');

jr_define ('WEBHOOKS_AUTH_METHOD_SELECT', 'Метод за удостоверяване/Интеграция');

jr_define ('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Всички създадени от вас уеб куки няма да бъдат задействани, тъй като не сте присвоени на нито една собственост. Супер мениджърите на собствености обикновено не получават отделни свойства, така че може да се нуждаете от нов потребител за създаване на уеб кука.');
jr_define ('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Всички създадени от вас уеб куки ще бъдат задействани срещу следните свойства:');


jr_define ('PORTAL_REVIEWS_LIMIT', 'Ограничение за прегледи');
jr_define ('PORTAL_REVIEWS_LIMIT_DESC', 'Използвайте тази настройка, за да ограничите броя отзиви, показани на страницата с подробности за имота.');
jr_define ('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Покажи всички отзиви');

jr_define ('VIDEO_TUTORIALS', 'Video Tutorials');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Минимална стойност на депозита');
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Ако изчисленият депозит е по-малък от тази цифра, вместо това задайте депозит на тази стойност. Тази цифра може сама да бъде превишена, ако не отговаря на настройката за минимален депозит на сайта. Оставете я на 0 до не използвайте настройката. ");

jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'За да увеличите скоростта на вашия сайт, препоръчваме да импортирате подробности за съществуващите изображения на сайта и свойствата в базата данни.');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Импортиране на данни за съществуващи изображения в база данни');

jr_define ('_JOMRES_S3_ACTIVE_DESC', 'Експериментална функция. Ако е активирано, изображенията, качени с помощта на функцията медиен център, също ще бъдат копирани във вашата кофа на Amazon S3 и ще се показват от вашия URL адрес на кофата на Amazon S3. Когато разрешите това за първи път, вие също ще бъдете подканват да импортират съществуващи изображения във вашата кофа S3. ');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN', 'Домен на CloudFront');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Заменете вашия домейн по подразбиране Amazon S3 с вашия домейн CloudFront');
jr_define ('_JOMRES_S3_SSLTLS_DESC', 'Препоръчва се да се активира. Само за Windows и Mac OSX, ако libcurl не е създаден с поддръжка на Schannel или Secure Transport (естествените SSL библиотеки, включени в Windows и Mac OS X), трябва да зададете това на Не.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Вие\' сте активирали интеграцията на Amazon S3, така че ще трябва да копирате всички съществуващи изображения във вашата кофа S3. Изображенията вече се подават на посетителите на вашия сайт от вашия адрес на S3 на Amazon, така че ще ви трябва да ги копирате първо във вашата кофа S3, в противен случай те няма да бъдат видими за посетителите на вашия сайт. ');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'След като кликнете върху този бутон, моля, не прекъсвайте процеса и изчакайте съобщение за успех или грешка. В зависимост от скоростта на сървъра, това може да отнеме известно време, за да завърши.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Копиране на съществуващи изображения в кофата на Amazon S3');


jr_define ('JOMRES_INCOMPLETE', 'Непълна');
jr_define ('JOMRES_WATING_APPROVAL', 'Чакащо одобрение');
jr_define ('JOMRES_GOOGLE_MAPS_PDETAILS', 'Карта с подробности за имота');

jr_define ('HAS_STARS_TITLE', 'Позволява класификация на звездите?');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Принудително повторно импортиране на подробности за изображението в базата данни');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Принудително презареждане на изображения в кофа S3');
jr_define ('_JOMRES_UNINSTALL_TABLES', 'Изтриване на всички данни на Jomres при деинсталиране?');
jr_define ('_JOMRES_UNINSTALL_TABLES_DESC', 'Ако е зададено да, Jomres ще изтрие всички таблици на базата данни при деинсталиране. Това ще изтрие всички данни на Jomres от db и не може да бъде отменено.');

jr_define ('TRANSACTION_IDS', 'ID на транзакция');
jr_define ('PAYMENT_METHOD', 'Начин на плащане');
jr_define ('POA_DISPLAY_PRICE', 'Цена на POA');
jr_define ('POA_DISPLAY_PRICE_DESC', 'Когато имотите са показани в списък, системата ще се опита да намери валидна цена от конфигурирани тарифи въз основа на днешната дата или ако датите са били използвани при търсене, тогава въз основа на тези дати . Ако не може, тогава ще покаже POA (Цена на заявлението), което означава, че гостът трябва да се свърже с вас, за да получи цена. Ако искате, можете да конфигурирате цена тук, която да се показва вместо текста на POA. Тази цифра би било "резервна" цена за показване, ако не може да се определи друга цена. ');

jr_define ('PLUGINMANAGER_INSTALL', 'Трябва да инсталирате мениджъра на плъгини, преди да можете да инсталирате приставки на Jomres, бихте ли искали да го направите сега?');
jr_define ('PLUGINMANAGER_REINSTALL', 'Трябва да актуализирате мениджъра на приставки, преди да можете да актуализирате всички инсталирани приставки, бихте ли искали да направите това сега?');
jr_define ('PLUGINMANAGER_INSTALL_BUTTON', "Нека направим това!");

jr_define ('INCLUDEINFILTERS', 'Включване във филтри?');
jr_define ('INCLUDEINFILTERS_DESC', 'Филтрите за свойства на свойствата в Ajax Composite Search могат да станат много дълги, така че можете да зададете тази опция на Не, за да предотвратите показването на тази функция в списъка с характеристики на свойството.');

jr_define ('REVIEW_REMINDER_PT1', "Имате");
jr_define ('REVIEW_REMINDER_PT2', "резервации (и), за които все още не сте оставили отзив. Моля, оставете отзив.");
jr_define ('BOOKINGS_AWAITING_REVIEWS', "Резервации, чакащи отзиви");
jr_define ('REVIEW_NAG', "Закачане на гости за отзиви?");
jr_define ('REVIEW_NAG_DESC', "След като гост е резервиран от резервация, системата ще му напомни да пусне отзив за своята резервация. Задайте тази опция на Не, за да деактивирате това напомняне.");

jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Изпращане на копия от имейлите за резервации до администраторите на сайта?");
jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Когато е активирано, копия от имейлите за резервации, изпратени до мениджърите на имоти, също ще бъдат изпратени до всички администратори на сайта.");

jr_define ('HIDDEN_ADDRESS_SETTING', "Скриване на адрес?");
jr_define ('HIDDEN_ADDRESS_SETTING_DESC', "Ако зададете тази опция на\" Да \", тогава само гостите, които вече са направили резервация във вашия имот, ще могат да виждат адреса на имота. Може да искате да използвате тази настройка, за да скриете точното местоположение на имота ако например рутинно се оставя без надзор. ");
jr_define ('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Оптимизиране на изображения при качване?');
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Когато е активирано, изображенията ще бъдат оптимизирани за мрежата (размерът на файла може да бъде до 75% по -малък). В зависимост от типа качено изображение, вашият сървър трябва да има една или повече от тези библиотеки, инсталирани от хостинга доставчик: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define ('DATABASE_INTEGRITY_CHECK', 'Проверка на целостта на базата данни');
jr_define ('OBSOLETE_FILES_CHECK', 'Проверка на остарели файлове');
jr_define ('DATATABLES_COLVIS', 'Видимост на колони');
jr_define ('API_TOKEN_LIFETIME', 'API токен живот');
jr_define ('API_TOKEN_LIFETIME_DESC', 'Колко време API маркер остава валиден за секунди. 86400 = 1 ден, 31536000 = 1 година');

jr_define ('ENCRYPTION_TITLE', 'Шифроване');
jr_define ('ENCRYPTION_FILE_LOCATION', 'Местоположение на файла за шифроване');
jr_define ('ENCRYPTION_FILE_LOCATION_DESC', '** Никога не изтривайте файла за шифроване ** <br/> Потребителските данни се съхраняват криптирани в таблици, за да се гарантира, че "данните в покой" са защитени сигурно, в съответствие с препоръките на GDPR. По подразбиране ключът за шифроване се съхранява във файла "encryption_key.class.php" в корена на вашата инсталация на Jomres (обикновено /public_html /jomres). Можете да промените къде се съхранява файлът тук. Ако промените местоположението, трябва да преместите файла, не чакайте Jomres да създаде нова версия, в противен случай няма да можете да декодирате данните на гостите си. ');

jr_define ('_JOMRES_COM_YOURBUSINESS_DESC', 'Запазената тук информация ще се използва за фактури, генерирани за този имот');

jr_define ('_JOMRES_GDPR_POLICIES', 'GDPR Policies');
jr_define ('_JOMRES_GDPR_POLICIES_DESC', 'Тук можете да конфигурирате колко дълго след създаването на резервация или фактура тя ще бъде премахната от системата, за да се гарантира, че сте в съответствие с GDPR.');

jr_define ('_JOMRES_GDPR_BOOKING_RETENTION', 'Период на запазване на резервацията (в дни)');
jr_define ('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Колко дни след датата на отпътуване на резервацията трябва да бъде изтрита резервацията? Когато бъде изтрита, и резервацията, и фактурата се премахват. Типичен период на задържане може да бъде 365 дни.');

jr_define ('_JOMRES_GDPR_INVOICE_RETENTION', 'Период на запазване на фактура (без резервация)');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Други фактури, като фактури за комисионни и абонамент, не са обвързани с резервации. В резултат на това те няма да бъдат изтрити, когато фактурите и договорите за резервации се изтрият. В зависимост от вашата страна и вашите собствени бизнес практики, ще трябва да конфигурирате различен период на съхранение. Типичен период на съхранение може да бъде 3653 дни, което е 10 години. ');


jr_define ('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Вашите данни');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Някои функции на този уебсайт трябва да съхраняват информация за вашето посещение. Това се използва само за да ви предостави услуга, никога не се споделя с никой друг и се изтрива, когато вече не е необходимо.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'ДАВАТЕ ЛИ НИ РАЗРЕШЕНИЕ ДА СЪХРАНЯВАТЕ ТАЗИ ИНФОРМАЦИЯ ??');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Подробно');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Трябва да се съгласите да съхраняваме тези данни, за да можете да правите резервации на този сайт. Независимо дали сте съгласни да съхранявате вашите данни, ние ще съхраняваме бисквитка на вашия компютър, за да съобщим ни дали сте се включили или не. Това ни помага да гарантираме, че не ви питаме постоянно дали искате да се включите или не и не съдържа никаква лична информация (PII). Ако промените решението си може да посети страницата "Разрешения за приложения" по всяко време, за да се включи или изключи. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Информацията се съхранява за различни периоди от време в зависимост от естеството на вашето посещение. Така че, ако само се оглеждате, ще съхраняваме приблизително географско местоположение (ниво на държава). Ако извършите търсене, тогава към направете формулярите за търсене по -удобни за потребителя, ние ще съхраняваме последните неща, в които сте търсили. Тази информация обикновено се съхранява за максимум 24 часа и се използва само за да направи вашето посещение по -приятно. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Когато правите резервация при нас, по необходимост се съхранява повече информация.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Техническите характеристики на формуляра за резервация се улавят и съхраняват за максимум 60 дни. Това е необходимо, за да могат резервациите по заявка да бъдат превърнати в пълни резервации, след като резервацията е одобрена, и за анализ от нашите екипи в случай, че има проблем с резервация. Ако не сте били влезли, когато сте направили резервация, тогава ние ще ви изпратим имейл с потребителско име и парола, за да можете да видите историята на резервациите си и да упражните правото си да бъдете забравени (RTBF), ако желаят да направят това. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Данните, въведени във формуляра за резервация, например име, имейл адрес, реален адрес се съхраняват за максимум 365 дни след датата на отпътуване на резервацията. Тази информация се съхранява в шифрован формуляр в нашата база данни така че само оторизирани хора да могат да го видят. Ако направите резервация, тогава по закон ние трябва да съхраняваме вашата лична информация, докато резервацията е валидна. След като резервацията приключи, или защото е била отменена, или сте били освободени, тогава ще ще можете да упражнявате своя RTBF, като влезете и посетите страницата "Вашите данни". Информацията за фактури за завършени резервации все още ще се съхранява сигурно в нашата база данни, за да се гарантира, че спазваме съответните данъчни закони, но ще можете да премахнете всички други PII след приключване на резервацията. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Когато се съгласите вашата информация да се съхранява, както е описано по-горе, ние сме законово задължени да съхраняваме това съгласие в нашата база данни. Тази информация ще включва вашия IP номер и съдържанието на формуляра за включване. Ние ще запазва това известие за съгласие за неопределено време (това е законово изискване). ');

jr_define ('_JOMRES_GDPR_CONSENT_NOT_SET', 'Все още не сте ни казали дали можем да събираме лична информация за вас');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Вие се съгласихте да събираме необходимата лична информация за идентифициране, за да приемаме резервации');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Казахте ни да не събираме лична информация за идентифициране');

jr_define ('_JOMRES_GDPR_NOCONSENT_INTRO', 'Не сте ни дали разрешение да събираме вашите лични данни');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'За да извършите определени действия на този уебсайт, ние трябва да събираме лична информация за вас, но вие не сте ни дали разрешение за това.');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Промяна на вашите разрешения');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Продължете да разглеждате свойствата');

jr_define ('_JOMRES_GDPR_APP_MENU_ITEM', 'Разрешения за приложения');

jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Данни за гости');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Това са данните, които се съхраняват за вас от различните имоти. Различните хотели могат да съхраняват различни записи, в зависимост от това какво сте въвели, когато сте направили резервацията.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Нямате данни, съхранявани в хотели в тази система');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Данни от профила');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Това е основният набор от данни, който държим за вас, за разлика от тези, които сте споделили с различни свойства.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Не сте запазили информация за профила');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Ето личната информация, която съхраняваме на този уебсайт за вас. Изградена е във формат JSON (JavaScript Object Notation), който е лек формат за обмен на данни. Лесен за четене и хора пишат и машините лесно могат да анализират и генерират. ');

jr_define ('_JOMRES_GDPR_REDACTION_STRING', 'Анонимно');

jr_define ('_JOMRES_GDPR_MY_DATA', 'Вашите данни');
jr_define ('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Приемайки настоящото Споразумение за ползване (настоящото "Споразумение"), вие се съгласявате, че:

<ul>
<li>
Имате право да резервирате хотели чрез този уебсайт;
</li>
<li>
Вие сте навършили 18 години;
</li>
<li>
Вие притежавате законните правомощия да създавате обвързващо правно задължение;
</li>
<li>
Вие ще използвате Сайта в съответствие с настоящото Споразумение;
</li>
<li>
Вие ще използвате само Сайта, за да правите законни резервации за себе си или за друго лице, за което сте законно упълномощени да действате;
</li>
<li>
Вие ще информирате тези други лица за настоящото споразумение, което се отнася за резервите, които направих от тяхно име, включително всички правила и ограничения, приложими към тях;
</li>
<li>
Цялата информация, предоставена от Вас на уебсайта, е вярна, точна, актуална и пълна; и
</li>
<li>
Вие ще защитавате информацията за вашия акаунт и ще контролирате и ще носите пълна отговорност за всяко използване на вашия акаунт от вас и от всеки друг, освен вас.
</li>
</ul>
');
jr_define ('_JOMRES_GDPR_MY_DATA_LEAD', 'Сигурността и прозрачността са важни за нас.');
jr_define ('_JOMRES_GDPR_MY_DATA_INTRO', 'Ние приемаме нашите отговорности по отношение на съхраняването на вашите данни много сериозно. Цялата лична информация (PII) се съхранява криптирана в нашата база данни, използвайки стандартни алгоритми за индустрията, за да гарантира, че само оторизирани потребители могат да виждат тази информация.');

jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Можете да изтеглите всички лични данни, които съхраняваме за вас.');
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Изтеглете сега');

jr_define ('_JOMRES_GDPR_MY_RTBF_LEAD', 'Право да бъдеш забравен (RTBF)');
jr_define ('_JOMRES_GDPR_MY_RTBF_INTRO', 'Вярваме, че трябва да можете да <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> изтриете </a> вашия <a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_blank"> Информация за лична идентификация </a>, ако искате и ако е практически възможно. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Не сте регистрирани на този сайт. Вашето общо местоположение (държава) и IP номер ще се съхраняват за максимум 24 часа и след това ще бъдат изтрити.');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Не сте регистрирани на този сайт и сте се отказали от събирането на данни. Не сме съхранили вашата PII.');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Вие сте регистрирани на сайта и нямате чакащи или активни резервации. Можем да анонимизираме повечето информация, която понастоящем държим за вас. Искате ли да направите това?');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Забележка: Това не изтрива вашия акаунт, той просто анонимизира нашите записи, така че вашият акаунт не може да бъде свързан с вас като лице. По закон ние трябва да продължим да съхраняваме вашата PII за целите на фактуриране изтрийте всички записи на гости. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Вие сте регистриран на сайта, но имате резервации, които не са изпълнени и не можем да анонимнизираме вашите данни в този момент. Тези данни ще бъдат запазени за максимум една година след като резервацията е завършена, тогава тя ще да бъде изтрит, ако не изберете да го премахнете преди това. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Тъй като Вие сте управител на имот на нашия сайт, не можем да Ви предложим възможността данните Ви да бъдат изтрити автоматично. Вместо това, моля, свържете се директно с нас, за да можем да присвоим Вашите имоти на друг мениджър. След като направим това и премахнем статуса Ви на мениджър на имот, ще можете автоматично да изтриете данните си. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Забрави ме!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Това не може да бъде отменено!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Вашите данни са изтрити!');

jr_define ('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'За съжаление не можете да направите резервация, тъй като вашият имейл адрес е невалиден');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Тази страница ви дава възможност да анонимизирате всички гости, чиято информация се съхранява в системата. Това ви позволява да сте в съответствие с GDPR, но не можете да редактирате друга информация на тази страница. За да направите това трябва да влезете във фронтенда като мениджър на имот. Предположението е, че исторически гост се е свързал с вас с искане да му позволите да упражни правото си да бъде забравен. Ако не може да влезе във фронтенда на сайта (може би потребителят не е създаден за тях, когато са резервирали), тогава можете да използвате тази област, за да ги анонимизирате, след като потвърдите самоличността им. ');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Анонимна гост');
jr_define ('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'ИЗМЕРЕН СОБСТВЕНОСТ');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Анонимизирани данни за гости');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Не може да бъде анонимизиран');

jr_define ('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Имаме нужда от вашето разрешение да съхраняваме вашата информация, преди да можете да направите резервация. Щракнете ТУК, за да ни дадете разрешение.');

jr_define ('_JOMRES_GDPR_CONFIG_ENABLE', 'Активиране на съвместима с GDPR функционалност?');
jr_define ('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'НЕ ПРЕПОРЪЧВАМЕ, ЧЕ ДЕАКТИВИРАТЕ ФУНКЦИОНАЛНОСТТА НА СЪОТВЕТСТВИЕТО на GDPR. Jomres има вградени функции, които ви помагат да се уверите, че секцията Jomres на вашия сайт е съвместима с GDPR (ако деактивирате тази функция и не трябва, ако сте в ЕС или правите бизнес с граждани на ЕС), тогава Jomres автоматично ще приеме, че всеки посетител на сайта е дал разрешението си да активира личните им данни. Разрешението на приложението и страниците "Моите данни" няма да бъдат показани и потребителите няма да бъдат подканени да дадат разрешение за събиране на данните. ');

jr_define ('EMPTY_TEMP_DIR', 'Празен временен каталог');
jr_define ('EMPTY_TEMP_DIR_DONE', 'Временните файлове са изтрити');

jr_define ('MACHINE_TRANSLATION', 'Машинни преводи');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG', 'Изходен език');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Възможно е да се включи функционалността за машинен превод. Това ви позволява да въвеждате низове на един език и преводите могат да бъдат изтеглени от отдалечени услуги. Имайте предвид, че не всички преводачески услуги поддържат всички езици. Вижте тези услуги за повече подробности.' );

jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Типове стаи');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Нов тип стая');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Можете да създавате и редактирате типове стаи на тази страница. Тези типове стаи ще бъдат специфични само за тази собственост. Когато настройвате вашия имот, първо се нуждаете от някои типове стаи. Можете да използвате тези типове стаи, създадени от администратора или можете да добавите своя собствена. След като имате един или повече типове стаи, можете да създадете стаи от този тип стая. След като имате стаи, можете да създадете тарифи (цени) за тези стаи, тъй като тарифите са свързани с типовете стаи . ');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Мениджърите могат да създават типове стаи?');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Използвайте тази опция, за да конфигурирате дали мениджърите могат да създават свои собствени типове стаи във интерфейса. Силно препоръчваме да оставите тази опция зададена на Не, когато започнете да използвате Jomres, особено ако създавате портал, защото трябва да създадете всички типове стаи в администраторската област. Типовете стаи, създадени от мениджъри, ще се показват във формуляри за търсене, но тъй като тези типове стаи са специфични за отделни имоти, само един имот ще бъде показан в резултатите от търсенето, ако е избран този тип стая по време на търсения. Ако искате, така че само мениджърите на Super Property да могат да създават типове стаи, оставете тази опция зададена на Да и използвайте приставката за контрол на достъпа, за да позволите само на супер мениджърите да виждат опцията от менюто "Настройки> Типове стаи". Само имоти, които се наемат извън стаите в имота и използващи режими за редактиране на тарифи Advanced или Micromanage могат да използват тази опция. Имотите от вила/апартамент няма да могат да го използват. ');
jr_define ('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Тип стая/имот актуализиран');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Показване на типовете стаи в опциите за търсене');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Ако изберете да позволите на мениджърите на имоти да създават свои собствени типове стаи, можете да изберете дали да се показват тези създадени типове стаи в опциите за търсене, където сте избрали да се показват типове стаи.');


jr_define ('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Не трябва да използвате повторно същия имейл адрес за всяка резервация. <br/> Ако имате уникален домейн (напр. не имейл адрес в gmail) за вашия бизнес, използвайте телефонния номер на госта като техен имейл адрес. Имейл адресът тогава ще изглежда нещо като 123456@mydomain.com <br/> Това ще гарантира, че при създаването на резервация ще бъде създаден нов гост. ");

jr_define ('_JOMRES_LOGIN_USERNAME', 'Имейл адрес');
jr_define ('_JOMRES_LOGIN_PASSWORD', 'Парола');
jr_define ('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Радваме се, че искате да резервирате отново при нас. За да можете да управлявате всичките си резервации заедно, е необходимо да влезете, за да може резервацията да бъде добавена към вашия акаунт. Това също гарантира, че сте упълномощени да използвате предоставения имейл адрес. ");

jr_define ('_JOMRES_LOGIN_RESET_MESSAGE', 'Ако не знаете паролата си, можем да ви изпратим имейл за задаване на нова парола. Моля, следвайте инструкциите в този имейл, за да зададете нова парола.');
jr_define ('_JOMRES_LOGIN_RESET_BUTTON', 'Забравена парола?');

jr_define ('_JOMRES_REVIEWS_ANONYMISE', 'Анонимизирайте името си?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Ако решите да анонимизирате името си при преглед, вместо това ще използваме вашите инициали.');
jr_define ('ANONYMOUS', 'Anon');

jr_define ('_JOMRES_REVIEWS_REPLY_SAID', 'казано');
jr_define ('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Отговор на този преглед');
jr_define ('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Въведете отговора си на този преглед тук.');
jr_define ('_JOMRES_REVIEWS_YOUR_REPLY', 'Вашият отговор');
jr_define ('_JOMRES_REVIEWS_REPLY_COMMENT', 'Основен преглед');
jr_define ('_JOMRES_REVIEWS_REPLY_SAVED', 'Отговорът за преглед е запазен');


jr_define ('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Преди да изпратите отговор за преглед, трябва да прочетете следното. С изпращането на отговор потвърждавате, че се съгласявате с тези условия.');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Какви са нашите насоки за отговор за преглед?');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Отговаряте на прегледа на вашия имот. <em> Не трябва </em> да използвате отговора си като процес на търговски спор. Ако трябва да подадете сигнал за преглед, трябва да използвате "Доклад Бутон Преглед "в списъка, а не тази страница за отговор на прегледа. ');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'След като оставите отговора си, няма да можете да го редактирате.');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Разрешено и насърчено');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Пълен отговор на прегледа. </li>
    <li> Учтивост и честност. </li>
    <li> Разумни отговори на проблемите на рецензента (не забравяйте, че други може да имат подобни проблеми, но не са използвали възможността да публикуват рецензия). </li>
    <li> Насърчете госта да се свърже директно с вас за решаване на проблеми.
    <li> Винаги помнете, че бъдещите гости ще видят отговора ви. Уверете се, че сте професионалисти по всяко време. </li>
</ul>
');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Не е разрешено');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Търговски спорове. </li>
    <li> Въпроси към рецензента или други. </li>
    <li> Съмнителен език (включително псувни). </li>
</ul>
');

jr_define ('_JOMRES_COM_A_CRON_LASTRAN', 'Последно изпълнено');
jr_define ('_JOMRES_COM_A_CRON_SCHEDULE', 'График');


jr_define ('_JOMRES_INVOICE_NUMBERS', 'Номера на фактури');

jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Да се ​​използват персонализирани номера на фактури?');
jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Можете да конфигурирате системата да използва персонализирани номера на фактури. Ще бъдат засегнати само нови фактури.');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Начален номер');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Номерата се създават последователно. Какво трябва да бъде първото число?');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Какъв формат трябва да приема номера на фактурата?');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Конфигурирайте формата на номера на фактура тук. Форматът може да изглежда като {N}/{D} или {N}/{Y}, където N е автоматично генерираният номер, D = дата във формата ГГГГГММД ((YYYYMMDD) 20190131) или Y = ГГГГ (2019). Всички други буквено-цифрови знаци, които не са заключени в фигурни скоби, ще бъдат оставени сами, така че модел, който изглежда като {N}/{D} -L, би довел до номер на фактура (21), който изглежда нещо като 21/2019-L ');

jr_define ('_JOMRES_SURCHARGE_TITLE', 'Доплащане');
jr_define ('_JOMRES_SURCHARGE_DESC', 'Допълнителна такса, която ще бъде добавена към стаята при резервация (изчислена на ден)');


jr_define ('_JOMRES_PDF_BUTTON', 'PDF');


jr_define ('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Приоритизиране на етикетите за целия сайт?');
jr_define ('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Персонализираният текст, запазен в редактирането на етикети или страниците с низове с файлове за превод на езика за превод, се считат за етикети "за целия сайт". Мениджърите на собствености също могат да персонализират етикети за всяка собственост, като използват функцията за редактиране на етикети във фронтенда. Това позволява управител на имот да има различни текстове за собствеността си, което е полезно, ако имотът е различен от всички други свойства на сайта. <br/> Когато системата търси текстове на етикети, тя ще даде приоритет на текстовете в целия сайт пред собствеността конкретни текстове, което означава, че ако за целия етикет съществува текст за целия сайт, системата първо ще го избере. Ако зададете тази опция на "Не", системата ще даде приоритет на специфичните за собствеността текстове пред текстовете на целия сайт. ');

jr_define ('_JOMRES_REFERRER', 'Препращач');
jr_define ('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Това може да бъде променено, ако белият списък, така че сайтът "Най -добрият сайт за резервации в света" ще промени това на "WBBS" или подобен.
jr_define ('_JOMRES_LIBRARY_PACKAGES', 'Библиотечни пакети');
jr_define ('_JOMRES_LIBRARY_PACKAGES_DESC', 'Модулите на доставчика и възела са отделни (безплатни) пакети за Jomres. Можете да инсталирате отново пакетите на тази страница.');
jr_define ('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Преинсталиране на библиотечни пакети');

jr_define ('_JOMRES_COM_PTYPES_NOT_DELETED', 'Не може да се изтрие тип собственост, тъй като все още се използва от някои свойства. Първо трябва да промените тези свойства на друг тип собственост, преди да опитате да изтриете този. Идентификатори на свойството, които предотвратяват изтриването:');
jr_define ('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Не може да се отмени публикуването на типа собственост, тъй като все още се използва от някои свойства. Първо трябва да промените тези свойства на друг тип собственост, преди да опитате да отмените публикуването. UID на свойството, което предотвратява промяната:');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Случайни имейл адреси');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Предлагайте случайни имейли');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Можете да позволите на системата да генерира произволни имейл адреси в изскачащия прозорец за бърза резервация в таблото за управление. Това позволява на мениджърите и рецепционистите да създават резервации за гости, за които нямат имейл адреси, предназначено е да работи като спестяване на време за сайтове с много рецепционисти/мениджъри, които разбират, че тези случайни имейли никога няма да се използват за реална комуникация, целта е да се заобиколи факта, че в Jomres всички гости трябва да имат имейл адреси. ТРЯБВА също да предоставите домейн в следващото поле. ');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Домен на случайни имейли');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Това не трябва да е нормален имейл домейн, като gmail или outlook. Вместо това може да бъде или ваш собствен домейн, или нещо съвсем друго, например "mysite.emails"');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Област за качване');
jr_define ('_LIST_USERS_LEGEND_NOROLE', 'Без потребителска роля');
jr_define ('_LIST_USERS_LEGEND_RECEPTIONIST', 'Рецепционист');
jr_define ('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUSPENDED', 'Спиран');
jr_define ('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Изтрито от CMS');


jr_define ('_REVIEW_JOMRES_PLEASEREVIEW', 'Ако харесвате Jomres, моля, помислете да оставите отзив на един от тези сайтове');
jr_define ('_REVIEW_JOMRES_ALREADYREVIEWED', 'Аз съм хубав човек, вече съм оставил отзив');

jr_define ('_LICENCE_PROMPT_DEAR', 'Уважаеми');
jr_define ('_LICENCE_EXPIRED', ', вашият лицензен ключ за Jomres е изтекъл, така че липсват тези страхотни функции и предимства!');
jr_define ('_LICENCE_EXPIRED_BENEFITS_1', 'Актуализации на приставки и нови версии на приставки');
jr_define ('_LICENCE_EXPIRED_BENEFITS_2', 'Само за изключителни членове поддръжка по имейл/билети');
jr_define ('_LICENCE_EXPIRED_BENEFITS_3', 'Безпроблемни актуализации на Jomres Core');
jr_define ('_LICENCE_EXPIRED_POST', 'Свържете се с нас за безпроблемни решения за плащане и получете достъп до всички приставки и услуги за поддръжка само за членове.');
jr_define ('_LICENCE_EXPIRED_RESTART', 'Получете достъп до всички приставки сега!');

jr_define ('_LICENCE_INVALID_KEY', 'За съжаление изглежда не използвате валиден лицензен ключ на Jomres, така че липсвате тези страхотни функции и предимства!');
jr_define ('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Приставки </a>, които значително разширяват функционалността на Jomres');
jr_define ('_LICENCE_INVALID_BENEFITS_2', 'Поддръжка само на изключителни членове по имейл/билети');
jr_define ('_LICENCE_INVALID_BENEFITS_3', 'Безпроблемни актуализации на Jomres Core');
jr_define ('_LICENCE_INVALID_POST', 'Свържете се с нас за безпроблемни решения за плащане и получете достъп до всички приставки и услуги за поддръжка само за членове.');
jr_define ('_LICENCE_INVALID_START', 'Получете достъп до всички приставки сега!');

jr_define ('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Табло за управление');
jr_define ('_ADMIN_MENU_SECTIONS_USERS', 'Потребители');
jr_define ('_ADMIN_MENU_SECTIONS_COMMISSION', 'Комисия');
jr_define ('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Абонаменти');
jr_define ('_ADMIN_MENU_SECTIONS_INVOICES', 'Фактури');
jr_define ('_ADMIN_MENU_SECTIONS_PORTAL', 'Портал');
jr_define ('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Преводи');
jr_define ('_ADMIN_MENU_SECTIONS_TOOLS', 'Инструменти');
jr_define ('_ADMIN_MENU_SECTIONS_REPORTS', 'Отчети');
jr_define ('_ADMIN_MENU_SECTIONS_SETTINGS', 'Настройки');
jr_define ('_ADMIN_MENU_SECTIONS_HELP', 'Помощ');

jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Общо имоти в системата');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Публикувани имоти');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Непубликувани имоти');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Одобрени имоти');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Свойства, изискващи одобрение');

jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Общо отзиви');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Непубликувани отзиви');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Доклади за преглед');

jr_define ('_ADMIN_CPANEL_SYSTEM_INFO', 'Информация за системата на Jomres');
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Типът на собствеността на тази собственост не е публикуван, той може да не се показва в резултатите от търсенето. Моля, свържете се с администратора на сайта, за да публикувате типа на собствеността, или променете типа на страницата Редактиране на свойството.");
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Актуализирайте вашия тип собственост');


jr_define ('_JOMRES_INCOME_PAID_AMOUNTS', 'Приходи (изплатени суми)');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Не може да се изтрие характеристиката на свойството "');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '", защото се използва от следните свойства (и):');


jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API тест');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Тази страница изпълнява основен тест на REST API, използвайки вградена функционалност в Jomres. Извиква JOMres REST API, за да види дали получава валиден отговор.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Сървърът извика този URL, за да види дали отговорът е валиден:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Страницата получи този отговор:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Изглежда, че тестът върви според очакванията, вероятно няма да имате проблеми с получаването на заявки за REST API от останалата част от Интернет.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Тестът е неуспешен, погледнете в полето за отговор, ако изглежда като много html или сте получили съобщение 404, тогава вашият сървър пренасочва повиквания към друг URL адрес. Това ще ви попречи да получавате API обаждания. ');

jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Тест за синдикация');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Сървърът за приложения на Jomres поддържа списък с всички сайтове на Jomres. Това ни позволява да изградим мрежа за синдикация. Тази мрежа е предназначена да показва на нашите потребители собствености и други сайтове, особено за нови сайтове, за изграждане на SEO присъствие в мрежата. Целта е всички сайтове на Jomres да работят заедно, изграждайки доверие в мрежата. Няма такса за тази услуга. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Вашият сайт понастоящем не е в списъка на сървъра за приложения Jomres, който е част от мрежата за разпространение. Този сървър ще се опита отново да добави този сървър към мрежата на следващата 6 страница, няколко зареждания на страници, това не се променя, моля проверете дали тестът за свързване по -горе преминава тестовете. Обърнете внимание, че локалните сървъри не могат да се добавят към мрежата. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Поздравления, вашият сървър е посочен на сървъра за приложения на Jomres.');

jr_define ('_JOMRES_SYNDICATION_TITLE', 'Синдицирани свойства');
jr_define ('_JOMRES_SYNDICATION_TAGLINE', 'Ето някои други имоти, налични от нашата мрежа от имоти');


jr_define ('_JOMRES_SYNDICATION_STATS_TITLE', 'Статистика за синдикацията');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Поздравления, вашият сървър е включен в мрежата за разпространение на Jomres. Вашата собственост (и) скоро ще започне да се показва на други сайтове на Jomres, ако още не са показани.');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Инсталацията ви не е част от мрежата за разпространение на Jomres, поради което вашата собственост (и) не се показва на други сайтове, базирани на Jomres и не можете да се възползвате от тази безплатна реклама.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Активни инсталации на Jomres:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Общият брой инсталации на Jomres, които споделят свойствата на Jomres Syndication Network на своите сайтове.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Общо свойства:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Това е броят на наличните свойства в JSN.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Общо показва имоти:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Като цяло всички пътища на Jomres са били свързани с друг сайт, базиран на Jomres.');jr_define ('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) е безплатна функция, достъпна за всички потребители на Jomres. Целта е да ви предостави безплатна реклама на вашите имоти в други базирани в Jomres сайтове. Целта е да се помогне бързо извеждате сайта си, предлагайки безплатна реклама, така че вашите имоти да бъдат разпознати и доверени, тъй като те са свързани с високо доверие, високо релевантни уебсайтове, които вече са добре познати на търсачките. Вижте това <a href = "https://www.jomres.net/features/jomres-syndication-network" target ="_blank"> статия на нашия уебсайт </a> и <a href ="https://www.jomres.net/manual/developers- guide-2/387-jomres-syndication-network" target ="_blank"> ръководството </a> за повече информация. ');


jr_define ('GUEST_PROFILE_INFORMATION', 'Това са данните от потребителския ви профил, полета с този символ <i class = "fa fa-users" aria-hidden = "true"> </i>
 са публично видими, докато полетата с този символ <i class = "fa fa-user-secret" aria-hidden = "true"> </i> можете да видите само от вас, вашите хостове и администратори на сайтове. <br/> <br/> Хостовете могат да виждат лична информация само ако вече сте създали резервация с тях. <br/> <br/> Вашата информация е безопасно криптирана и съхранявана в нашата база данни, използвайки криптиране AES-256. ');

jr_define ('GUEST_PROFILE_OPTIONAL', 'Тези полета са незадължителни, но хостовете могат да използват информацията тук, за да определят дали смятат, че могат да ви се доверят, затова е по -добре да добавите информацията. Не забравяйте, че искате да останете в тях собственост и може да ви откажат, ако смятат, че не сте подходящи или че биографията ви не съдържа достатъчно информация. ');

jr_define ('GUEST_PROFILE_DRIVING_LICENSE', 'Шофьорска книжка');
jr_define ('GUEST_PROFILE_PASSPORT_NUMBER', 'Номер на паспорта');
jr_define ('GUEST_PROFILE_IBAN', 'IBAN номер');
jr_define ('GUEST_PROFILE_ABOUT_ME', 'За мен');
jr_define ('GUEST_PROFILE_ABOUT_ME_HINTS', 'Тази секция "За мен" е публично достъпна, така че не въвеждайте никаква лична информация. Въпреки това, положете усилия да споделите толкова, колкото ви е удобно, например вашите страсти, това, което да си изкарвате прехраната, вашите хобита и т.н. Можете да използвате Markup, за да му дадете малко джаз. Домакините ще искат да почувстват, че могат да ви се доверят със своите свойства. Уверете се, че снимката ви е истинска, а не вашето куче или кола (да, момчета, говорим с вас!). ');

jr_define ('GUEST_PROFILE_PREFERENCES', 'Въведете всички специални изисквания, които може да имате, като например нужди за лесен достъп тук. Те няма да бъдат показани в публичния ви профил, но ще бъдат добавени към информацията за резервация, когато правите резервация.');

jr_define ('VIEW_HOST_PROFILE', 'Профил на хоста');

jr_define ('GUEST_PROFILE_TITLE', 'Потребителски профил');
jr_define ('GUEST_PROFILE_TITLE_MY', 'Моят профил');

jr_define ('GUEST_PROFILE_WELCOME', 'Здравейте, нека ви разкажа малко за себе си.');
jr_define ('GUEST_PROFILE_MY_NAME', 'Моето име е');
jr_define ('GUEST_PROFILE_I_COME_FROM', 'и аз идвам от');
jr_define ('GUEST_PROFILE_IN', 'регион в');

jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION', 'Моята лична информация');
jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Ние правим всичко възможно да потвърдим информацията за гостите и хостовете, но вие трябва да се погрижите за себе си и да решите сами дали този човек заслужава доверие.');

jr_define ('GUEST_PROFILE_MY_PROPERTIES', 'Моите имоти');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Моите отзиви');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Това казах за този имот:');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Дадох на този имот оценка от:');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Моите отзиви');
jr_define ('GUEST_PROFILE_OF_ME', 'Какво казват другите хора за мен');
jr_define ('GUEST_PROFILE_OF_HOST_SAID', 'Какво каза този хост за мен');

jr_define ('GUEST_PROFILE_REVIEW_GUEST', 'Преглед на гост');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Моят преглед на този гост');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Ето някои примерни отзиви за гости, за да се превърне топката: <br/>

<ul>
<li> (името на гостите) беше удоволствие да бъде домакин! Те напуснаха пространството чисто и през уикенда бяха тихи. Те имаха гладка комуникация и очаквам с нетърпение отново да останат при мен! </li>
    <li> Хареса ми да имам (име на гост), защото те успяха да се отнасят с уважение към мястото, да прекарат чудесно и да се насладят на района. Те бяха страхотни с наемането на пространството и се надявам да ги приема отново. </li>
    <li> Всички мои правила за дома бяха спазени (име на гост) и те успяха да влязат и да си отидат с лекота. Обичах да ги имам там, тъй като бяха уважителни и тихи. Горещо ги препоръчвам на други! </li>
</ul>

');

jr_define ('GUEST_PROFILE_UNKNOWN', 'Съжалявам, не мога да намеря този потребител. Най -вероятно те все още не са попълнили данните за профила си.');

jr_define ('GUEST_PROFILE_USERSTATUS_GUEST', 'Гост');
jr_define ('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define ('GUEST_PROFILE_USERSTATUS_ADMIN', 'Администратор');

jr_define ('WORDPRESS_THEME_ADVICE', 'Jomres е изграден върху рамката на Bootstrap, така че трябва да го използвате за тема, базирана на Bootstrap. Препоръчваме ви такава, базирана на Bootstrap 3. Ако нямате достъп до тема, препоръчваме ви да използвате темата на Jomres Leohtian за Wordpress, която можете да <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank "> изтеглете от тук. </a> ');


jr_define ('BOOKING_NOSHOW_MENU', 'Маркиране като без показване');
jr_define ('BOOKING_NOSHOW_AUDIT_LOG', 'Резервация маркирана като Без показване');
jr_define ('BOOKING_NOSHOW_BOOKINGS', 'Резервации');
jr_define ('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define ('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN статистика за този потребител');

jr_define ('BOOKING_NOSHOW_INFO', 'Информацията за резервация и без показване се изтегля от Синдикалната мрежа на Jomres по време на резервацията. Тя е взета от анонимизирани данни и може да бъде използвана от вас, за да решите дали този гост е в риск да не изпълни резервацията. Ако системата съобщава, че данните са неизвестни, вероятно това е така, защото тази система не е разпозната в мрежата. ');

jr_define ('BOOKING_NOSHOW_UNKNOWN', 'Неизвестно');

jr_define ('CMF_CONFIG_TITLE', 'Рамка за управление на канали');
jr_define ('CMF_CONFIG_KEY', 'Рамков ключ за управление на канали');
jr_define ('CMF_CONFIG_KEY_DESC', 'Лицензионният ключ на Framework Management Framework. Ще трябва да предоставите този ключ, за да можете да изтеглите плъгини за Framework Management Framework.');

jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Вашата собственост не е одобрена');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Вашият имот е неодобрен. Ако смятате, че това е направено по погрешка, моля, свържете се с нас.");


jr_define ('_JOMRES_GUESTTYPES_IS_CHILD', "Това тип гост за деца ли е?");
jr_define ('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Задайте това на Да, ако този тип гост ще бъде класифициран като Детски тип гост.");

jr_define ('_JOMRES_GUESTTYPES_INTRO', "Ако искате да таксувате на човек на вечер, ще трябва да създадете някои типове гости.");
jr_define ('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Можете да създадете колкото се може повече типове гости, опитайте да започнете, като създадете само един тип гост, наречен\" Възрастен \". Оставете всички настройки на техните стойности по подразбиране. След това, ако например искате да дайте на деца под 12 години отстъпка от 50%, ще създадете нов тип гост и го наречете \"Деца под 12\". Задайте опцията \"Добавяне на вариация?\" на - (отрицателна) и задайте \"Вариант\" на 50. Това означава когато децата са добавени към резервация, те се таксуват 50% от цената на стаята на стаята. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Задайте цените ръчно");
jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Задайте минимално нощувки ръчно");
jr_define ('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Задаване на минимални нощувки");

jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Задайте <em> цена на вечер </em> по ден от седмицата");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Задайте <em> цена на нощувка </em> по диапазон от дати");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Задаване на <em> минимални нощувки </em> по диапазон от дати");

jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Инструментите за избор на дата и въведеният курс ви позволяват да зададете една цена за даден период от време. Изберете начална и крайна дата, въведете цена и щракнете върху бутона Задаване на цена за нощувка.");
jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Избиращите дати и въвеждането на минимални нощи ви позволяват да зададете една стойност за минималните нощувки за даден период от време. Изберете начална и крайна дата, въведете номер за минималните нощувки и щракнете върху\" Задаване минимални нощувки. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Използвайте това падащо меню, за да промените между определяне на цените за отделни дати, за задаване на минимални нощувки за отделни дати. Можете да използвате инструмента за избор <em> по ден от седмицата </em>, <em> по дата диапазон </em> инструмент за избор или задайте цените/минималните нощувки, като ръчно редактирате датите. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Използвайте това падащо меню, за да промените между задаване на цени за отделни дати, за задаване на минимални нощувки за отделни дати. Можете да използвате инструмента за избор <em> по диапазон от дати </em> или да зададете цените/минимални нощувки по ръчно редактиране на датите. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Задаване на цени или минимални нощувки");

jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Задайте <em> минимални нощувки </em> по ден от седмицата");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Полетата за деня от седмицата ви позволяват да зададете минимален брой нощувки за даден ден от седмицата, след като щракнете върху бутона за деня от седмицата, всички дни от седмицата ще бъдат настроени на тази настройка за минимални нощи. ");


jr_define ('_JOMRES_MICROMANAGE_MANUALLY', "Ръчно зададени цени/минимални нощувки");
jr_define ('_JOMRES_MICROMANAGE_SET_PRICES', "Задаване на цени");
jr_define ('_JOMRES_MICROMANAGE_SET_MINDAYS', "Задаване на минимални нощувки");
jr_define ('_JOMRES_MICROMANAGE_PRICE', "На вечер");
jr_define ('_JOMRES_MICROMANAGE_MINDAYS', "Минут нощи");
jr_define ('_JOMRES_MICROMANAGE_MAXDAYS', "Максимум нощувки");

jr_define ('_JOMRES_MICROMANAGE_INTRO', "Тук можете да си създадете тарифи, които са свързани с типовете стаи, които имате във вашия имот.");

jr_define ('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Най -често използваните опции");

jr_define ('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Инструкции");

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Ако искате да добавите различни цени за различен брой гости, <em> можете да създадете повече от няколко тарифи за всеки тип стая </em> и да имате различни стойности за минимални/максимални гости в тези тарифи. ");

jr_define ('_JOMRES_MICROMANAGE_INFO', "Дайте име на тарифата, определете максималния брой нощувки и минималния и максималния брой гости, които се изискват във формуляра за резервация, преди да бъде предложена тарифата. <br/> <br/> Използвайте панела за избор на дата, за да добавите цени и настройки за минимални нощувки към диапазон от дати, или да редактирате директно въведените данни. Ако не искате изобщо да се предлага тарифата на определени дати, оставете цената зададена на 0 (нула) на тези дати. <br/> <br/> Можете да имате различни минимални нощувки на различни дати, така че ако искате по -дълги резервации през седмиците на фестивала/конференцията, можете да зададете минималните нощувки да бъдат по -високи само в тези периоди. <br/ > <br/> Ако таксувате на човек на глава (PPPN), можете да активирате тази настройка в Настройки> Конфигурация на имот> Раздел Тарифи и валута, след което създайте необходимите типове гости в Настройки> Типове гости. ");

jr_define ('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Допълнителни опции");

jr_define ('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Това са допълнителни опции, които не се използват толкова често, но въпреки това са ви на разположение. <br/> <strong> Игнориране на PPPN </strong> означава игнориране на човек на нощ. Можете да имате няколко различни тарифи за същия тип стая, например едната от които се таксува на човек на вечер, а другата не. <br/> <strong> Разрешаване на уикендите </strong> Опцията Разрешаване на уикендите ви дава възможност да направите тарифа, която е само на разположение през делничните дни, например, ако искате специална тарифа за бизнес пътници. В този случай бихте задали опцията на Не и мин. нощувки на 1 и най -много нощувки, най -много 5. <br/> <strong> Уикенди само </strong> Опцията само уикенди е обратното на опцията Разрешаване на уикендите. Това, което считате за дни през уикенда, може да бъде конфигурирано в настройките ви за конфигуриране на имот. Това ви дава възможност да дефинирате само уикенд, който може да искате оферта за специални събития. <br/> <strong> Ден на настаняване в седмицата </strong> Тази опция ви дава възможност да принудите регистрацията да бъде само в определени дни от седмицата и е най -добре да се използва заедно с опциите Конфигурация на имота> Резервации> Фиксирани периоди. По -голямата част от потребителите ще искат да оставят тази опция зададена на Всички. <br/> Последните две опции, <strong> Вече избрани минимални стаи </strong> и <strong> Вече избрани максимални стаи </strong> са много специализирани и полезно за имоти с изключително сложни тарифи. <em> Освен ако нямате конкретна нужда, трябва да оставите тези опции на мира. </em> Използвайте ги, ако искате тази тарифа да се предлага само когато гостът вече е избрал N брой стаи във формуляра за резервация, така че например бихте могли да имате една основна тарифа, при която тези опции са оставени по подразбиране, и втора тарифа, при която вече избраната минимална стая е зададена на 1, тогава тази втора тарифа ще бъде предложена във формуляра за резервация, след като бъде избрана стая. " );

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Можете да създадете множество тарифи за един и същ тип стая, така че можете да създадете една тарифа за мин/макс дни от 1 - 7 и втора тарифа, където минималните дни са 7, макс 14 дни и и т.н. Това ви позволява да създавате схеми за ценообразуване толкова прости или толкова сложни, колкото ви е необходимо. Също така ви позволява да създавате множество тарифи с различни условия, така че можете да имате втори набор от тарифи, където цената е по -ниска за нощувка със закуска, и друг набор от по -скъпи тарифи за нощувка, закуска и вечеря. ");
jr_define ('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Задаване само на дни за избор на дата");
jr_define ('_JOMRES_PROPERTY_HCATEGORIES', 'Категории имоти');
jr_define ('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Редактиране на категория собственост');
jr_define ('_JOMRES_STOP_READTHISFIRST1', "Спри!");
jr_define ('_JOMRES_STOP_READTHISFIRST2', "Благодаря за инсталирането на Jomres");
jr_define ('_JOMRES_STOP_READTHISFIRST3', "Управлението на собствеността се извършва на публични страници, а не в администраторската област.");
jr_define ('_JOMRES_STOP_READTHISFIRST4', "Ако не сте запознати с Jomres, моля, посетете секцията Помощ> Страница за начало.");

jr_define ('_JOMRES_CONFIG_SYNDICATION_TITLE', "Присъединете се към синдиката на Jomres");
jr_define ('_JOMRES_CONFIG_SYNDICATION_DESC', "След като сте настроили сайта си и сте готови да започнете да приемате посетители, присъединете се към синдиката на Jomres.net и получете имотите си в списъка на други сайтове на Jomres.");



jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Имате нужда от поне една стая от един от следните типове, преди да можете да създадете тарифа:");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Отидете в Настройки> Стаи и първо създайте стая, след като направите това, ще можете да създадете тарифа за този тип стая.");

jr_define ('JOMRES_PLATFORM', "Jomres Platform");


jr_define ('JOMRES_PLATFORM_CONNECTED', "Свързан");
jr_define ('JOMRES_PLATFORM_CONNECTED_DESC', "Задайте това на Да, ако вече сте свързали вашия Stripe акаунт с платформата Jomres.");

jr_define ('JOMRES_PLATFORM_ACCOUNT_ID', "Номер на акаунта на Stripe на живо");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Това е вашият идентификатор на Stripe акаунт, който може да бъде намерен в таблото за управление на Stripe под Настройки> Информация за акаунта и изглежда като acct_xxxxxxxxx) Вие бихте използвали това поле, ако имате няколко инсталации на Jomres и искате да използвате същия акаунт в всички сайтове и вече сте се свързали с нас. Ако не сте се свързали с платформата Jomres, не е достатъчно да въведете данните си тук. Вместо това, моля, посетете опцията от менюто Свързване в лентата с инструменти, в раздела Помощ. Ако искате за да тествате плащания, в раздела Отстраняване на грешки в Конфигурацията на сайта задайте вашия сайт от Производство до Разработване. ");

jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe live secret key");
jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Отидете на Разработчици> API ключове в таблото за управление на Stripe, за да намерите вашите секретни ключове. Те се използват от системата за проверка на данните за резервации, върнати от формуляра за плащане, и че депозитите са платени преди запазването на резервацията . ');

jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY', "Секретен ключ за тест на лента");
jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Режим на стандартна тарифа');

jr_define ('JOMRES_COM_A_ACCOMMODATES', 'Спи');
jr_define ('JOMRES_COM_A_ACCOMMODATES_DESC', 'Колко души може да настани този имот?');
jr_define ('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Броят на гостите във вашата дневна цена');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Цена за допълнителни възрастни');

jr_define ('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Деца');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'На човек на нощ?');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 дневен модификатор');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Отстъпка за дневна ставка, ако резервацията е за 7 или повече дни. Оставете тази настройка на нула, ако не искате да се прилага отстъпката.');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 -дневен модификатор');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Отстъпка за дневна ставка, ако резервацията е за 30 или повече дни. Оставете тази настройка на нула, ако не искате да се прилага отстъпката.');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Възрастни');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Цена въз основа на 2 -ма възрастни');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Резервация отстъпка от');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'to');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'защото резервацията е по -голяма от 7 дни.');
jr_define ('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'защото резервацията е по -голяма от 30 дни.');
jr_define ('JOMRES_CITY_TAX_HEADING', 'Градски данъци');
jr_define ('JOMRES_CITY_TAX_VALUE', 'Стойност на градския данък');
jr_define ('JOMRES_CITY_TAX_METHOD', 'Метод за изчисляване на данъци');

jr_define ('JOMRES_CITY_TAX_MODEL_SINGLE', 'Единична такса');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'На нощ');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'На гост');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'На гост на вечер');
jr_define ('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Процент на стойността на резервацията');

jr_define ('JOMRES_CLEANING_FEE_HEADING', 'Такса за почистване');
jr_define ('JOMRES_CLEANING_FEE_VALUE', 'Цената на таксата за почистване');


jr_define ('JOMRES_COMPATABILITY_MODE', 'Принудителен режим на конфигуриране на свойството за съвместимост?');
jr_define ('JOMRES_COMPATABILITY_MODE_DESC', "Режимът за конфигуриране на свойство за съвместимост принуждава да се случат няколко неща. В по -старите версии на Jomres мениджърите на имоти могат да избират кой режим на редактиране на тарифи да използват и различни други настройки (някои от които може да изглеждат объркващи) може да имат Активирането на конфигурацията за съвместимост принуждава всички нови имоти да използват само стандартния режим за редактиране на тарифи, който моделира функционалността на конфигурацията на имота booking.com по отношение на ценообразуването, ценообразуването на деца и т.н. Препоръчва се това за инсталации, създадени след 9.22 г. .0, тази опция трябва да бъде зададена на Да, но за по -старите инсталации зависи от вас да решите дали новите свойства трябва да бъдат автоматично зададени в режим на съвместимост при създаването им. ");

jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN', 'Приемате ли деца под 18 години?');
jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Задайте тази опция на Да, ако разрешавате на деца. Ако отговорът е\" да \", тогава в менюто\" Настройки \"ще имате опция, наречена\" Детски политики \", където можете да редактирате свързани с децата настройки.");

jr_define ('JOMRES_POLICIES_CHILDREN', 'Детски политики');

jr_define ('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'На каква възраст се допускат деца?');


jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'На дете, на нощ');
jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'На дете, на престой');

jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Детски цени');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Нова дъщерна ставка');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Редактиране на дочерния процент');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Създайте вашите безплатни или платени детски тарифи тук. Цените ще важат само когато сте създали нива на заетост за типове стаи.');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Възраст от');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Възраст до');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'на нощувка или на престой?');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Rate');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Ако нула или не е зададено, децата от този възрастов диапазон ще бъдат безплатни.');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Възрасти при регистрация');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Възрасти');

jr_define ('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Нива на заетост');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Максимум възрастни');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Максимум деца');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Максимална заетост');

jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Редактиране на нивото на заетост за:');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Редактиране на нивата на заетост за този тип стая. Не включвайте гости, които спят на детски легла (те се добавят чрез създаване на Екстра)');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'За всеки допълнителен възрастен, колко трябва да бъдат таксувани?');

jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Допълнителни възрастни');


jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES', 'Още не сте конфигурирали дъщерни цени.');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Задайте дъщерна (и) скорост (и) сега');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Вие сте конфигурирали собствеността си да позволява деца, но все още не сте задали нива на заетост за деца.');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Задаване на нива на заетост');
jr_define ('JOMRES_OCCUPANCY_LEVELS_INFO', 'Всеки път, когато редактирате стая или тип собственост, трябва да проверите и актуализирате нивата на заетост на вашия имот/стаи, тъй като те влияят върху броя на гостите, които могат да бъдат приети във формуляра за резервация.');

jr_define ('_JOMRES_SEARCH_FORM_ADULTS', 'Възрастни');
jr_define ('_JOMRES_SEARCH_FORM_CHILDREN', 'Chidren');


jr_define ('_JOMRES_CONFIG_LEVEL_TITLE', 'Ниво на администраторски опции');
jr_define ('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres има много опции за меню и конфигурация, които можете да използвате при конфигурирането на вашия сайт. По -голямата част от тях никога няма да се налага да променяте, така че са скрити по подразбиране. Можете да изберете да покажете тези опции, като зададете нивото на администраторските опции. Базовото ниво ви показва точно това, от което се нуждаете, когато настройвате сайт за първи път. Общото ниво ви показва тези опции, които най -често се променят, и Всичко ви показва всички възможни настройки и опции от менютата в администраторската област. ');
jr_define ('_JOMRES_CONFIG_LEVEL_BASIC', 'Основен');
jr_define ('_JOMRES_CONFIG_LEVEL_COMMON', 'Общо');
jr_define ('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Всичко');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Можем ли да събираме информация за това как използвате Jomres?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Бихме искали да събираме информация за това как използвате Jomres. Няма да се съхранява лична идентифицираща информация, използването ще бъде анонимизирано и използвано само за да ни помогне да разберем как хората използват Jomres.');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Да, това е добре');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Не, не съм съгласен');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Ще приемате ли резервации за повече от един имот?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres може да се използва за сайтове с единични или много собствености. Ако ще правите резервации само за една собственост, много опции ще бъдат излишни и потенциално объркващи. Можете да промените тази настройка по-късно в Настройки> Сайт Конфигурация> раздел Функционалност на портала. ');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Само един имот');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Ще изброявам повече от един имот');


jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Коя версия на рамката на Bootstrap поддържа вашият шаблон/тема?");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Всяка версия на Bootstrap рамката изисква малко по -различно html маркиране. Jomres има три набора съвместими с Bootstrap набори шаблони, по един за всяка версия на Bootstrap. Трябва да се уверите, че го конфигурирате, за да използвате подходящия набор от шаблони. тогава не извеждате, като оформление, модали и менюта, няма да работят правилно. Ако решите да използвате шаблон/тема по -късно с различна версия на Bootstrap, можете да промените набора шаблони на Bootstrap, който Jomres трябва да използва в Admin> Jomres> Settings > Разнообразни. <br/> <br/> Joomla 3 се разпространява по подразбиране с Bootstrap 2, Joomla 4 ще използва Bootstrap 5. Шаблонът на Jomres Leohtian (Joomla) и темата (Wordpress) използват Bootstrap 3. Може да има различни шаблони/теми разпространявани със собствени Bootstrap файлове, така че ако имате някакви съмнения, моля, свържете се с разработчика на вашия шаблон/тема. ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", " Bootstrap 2 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", " Bootstrap 3 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", " Bootstrap 4 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", " Bootstrap 5 ");
jr_define ('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Извадете десетичните знаци от цените на продукцията?');

jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Прилагане на група по корекция?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Някои инсталации на mysql може да имат проблем с заявките на Jomres в страницата "Свойства на списъка", "Списък с гости и списък с фактури". Ако тези страници казват, че показват резултати от X от Y, но нищо не се появява в списъка, тогава задайте тази опция на Да може да реши проблема. Това няма да стане, ако сте на споделен хостинг и услугата за хостинг не позволява на вашия потребител на mysql да издаде командата "SET GLOBAL sql_mode =". ');
jr_define ('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Това е свойство на канал, не може да се администрира локално, посетете страницата на рамката за управление на канала, за да намерите връзката за отдалечено администриране на собствеността');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Няма Bootstrap в темата");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Връзки към социалните медии');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Поставете тук имената на акаунтите си в социалните медии, например "jomres", а не целия url');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Списък с езици, които вашата организация говори, разделен със запетая');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'URL адрес на логото на вашата организация');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres актуализиран');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Налична е нова версия на Jomres. Трябва да актуализирате, преди да можете да продължите да използвате Jomres, тъй като актуализациите подобряват функционалността и гарантират, че вашата инсталация остава сигурна.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Актуализиране на Jomres сега');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Актуализации на приставката');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Има нови версии на плъгини, налични в мениджъра на плъгини. Трябва да актуализирате всички плъгини, преди да можете да продължите да използвате Jomres, тъй като актуализациите подобряват функционалността и гарантират, че вашата инсталация остава сигурна.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Плъгини за актуализиране');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Ако вашият лиценз вече не е валиден, можете да получите нов лицензен ключ от нашия уебсайт.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Актуализиране на плъгини');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Вземете нов ключ');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Запазване на нов ключ');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Изображения от тип собственост");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE',"Имате нужда от помощ за резервация?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB',"Обадете се на нашия екип за обслужване на клиенти на номера по-долу, за да говорите с един от нашите представители, който ще ви помогне с всички ваши нужди за почивка.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE',"Защо да резервирате при нас?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE',"Ние предлагаме най-добрите цени за резервации");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1',"Имаме имоти с най-добра цена в момента на пазара.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2',"Без такси за резервация. Спестете пари!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE',"Страхотен избор от имоти");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS'," свойства");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS'," отзиви от гости");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE',"Винаги сме тук");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT',"Обадете се или ни изпратете имейл по всяко време");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT',"Получете 24-часова поддръжка преди, по време и след вашето пътуване");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA',"Социални медии");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD',"Намерете ни в социалните медии");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Изключително");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Изключително");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Страхотно");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Превъзходно");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Фантастично");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Много добре");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Добре");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Нова обява");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Отстъпка");
