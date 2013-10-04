<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define( '_JOMRES_COM_MR_QUICKRESDESC', 'Бърза резервация' );
jr_define( '_JOMRES_COM_MR_SHOWPROFILES', 'Профили' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC', 'Конфигурация на обекта' );
jr_define( '_JOMRES_COM_MR_BACK', 'Назад' );
jr_define( '_JOMRES_COM_MR_YES', 'Да' );
jr_define( '_JOMRES_COM_MR_NO', 'Не' );
jr_define( '_JOMRES_COM_MR_NEWTARIFF', 'Нов' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTY', 'Нов обект' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Нова особеност за обекта' );
jr_define( '_JOMRES_COM_MR_NEWGUEST', 'Нов гост' );
jr_define( '_JOMRES_COM_MR_SAVE', 'Запиши' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Име' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Пристигане' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Отпътуване' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Направи с администраторски функции' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_ID', 'ID' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NAME', 'Име' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Потребителско име' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'Понастоящем оторизиран (натисни за да отмениш правата)' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Обект по подразбиране' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'Промени това' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Ниво на достъп' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Потребителя е модифициран' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'N/A' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Рецепция' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Управител на обект' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Всички резервации' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Нови резервации' );
jr_define( '_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Промени резервацията' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Пристигане/Заминаване' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Гост' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Стая' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Плащане' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Име' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Фамилия' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Специални изисквания' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Някои специални изисквания биха могли да доведат до покачване на цената.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Отмени резервацията' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Номер на къща/блок/улица' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Улица' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Град' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Пощенски код' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Номер' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобилен номер' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Email' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Не може да се отмени резервацията, тъй като госта е чекиран' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Депозита не е платен' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Потвърди отмяната' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Резервацията е отменена' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Дни до пристигане' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Вид резервация' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Извади стаята' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Рецепция' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Интернет' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NAME', 'Име на стая' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Стая' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Етаж' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Достъп с инвалидна количка?' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Максимум брой хора' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Вид на обекта' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Описание на вида обект' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Екстри в стаята' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Депозита е платен' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Въведи депозит' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Общо за плащане' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Референтен номер на депозита' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Резервация' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Депозит' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Депозита е записан' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Стаите' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Обект' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Вид на обекта' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Промени детайлите на госта' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Име' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Фамилия' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Къща' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_STREET', 'Улица' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_TOWN', 'Град' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Пощенски код' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Телефон' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Мобилен телефон' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FAX', 'Факс' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'Номер на кредитна карта' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'Картата е издадена на' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'Картата е валидна до' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'Номер' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Име на картата' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Направи своя избор' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Нощувки' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Брой гости' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Общо' );
jr_define( '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Вижте конфигурацията' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Стаи' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Екстри в стаите' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Вид стаи' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Обект' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Екстри в обекта' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Стая' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Тип' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Име' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Номер' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Етаж' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'За хора с инвалидни колички?' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Максимум настанени' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Features' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Стаята е добавена' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Редактирай' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Екстри в стаята' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Описание' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Добавена е екстра' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Екстрите в стаята са обновени' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Вид стая' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Абревиатура на вида обект' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Описание на вида обект' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Добавен е вид обект' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Вида обект е обновен' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Редактирай' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Име' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Улица' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Град' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Регион' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Държава' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Пощенски код' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Телефон' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Факс' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Уеб сайт' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Екстри' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Обекта е добавен' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Обекта е обновен' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Екстри в обекта' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Абревиатура на екстрите в обекта' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Описание на екстрите в обекта' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Добавени екстри' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Обновени екстри' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Цени' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Тарифа' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Описание' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Валидна от' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Валидна до' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Цена на нощ' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Минимум дни' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Максимум дни' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Минимум гости' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Максимум гости' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Вид на обекта' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Игнорирай на човек на нощ' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Позволи и през уикендите' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Добавена тарифа' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Обновена тарифа' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Редактирай' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Клонирай' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Тарифата е изтрита' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Редактирай тарифата' );
jr_define( '_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Официални празници' );
jr_define( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Резервацията е записана' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Чекирай гост' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Отпиши гост' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Изведи всички резервации' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'Нови резервации' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Начална страница' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Гост администратор' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Администратор на обект' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Провери заетост' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Потвърди детайлите' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Име' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Фамилия' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Номер на къща' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Улица' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Град' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Пощенски код' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Телефон' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобилен телефон' );
jr_define( '_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Няма стаи, които да удовлетворят търсенето Ви. Намалете броя на хората и (или) датите.' );
jr_define( '_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Благодарим, че резервирахте с нас.<br><br> <b>Моля забележете, че това е предварителна резервация и не е потвърдена преди да получите официално писмо от нас.</center>' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE', 'Резервация за обект: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM', 'Резервация за стая: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL', 'Пристигане: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE', 'Отпътуване: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Име: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE', 'Телефон: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE', 'Мобилен: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL', 'Общо: ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Чекирай гост ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Избери гост ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Госта е чекиран ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'Няма гости, който пристигат днес' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Изпрати гост ' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'Няма гости, които си тръгват днес' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS', 'Добавки' );
jr_define( '_JOMRES_COM_A_TARIFFS', 'Тарифи и валута' );
jr_define( '_JOMRES_COM_A_DISCOUNTS', 'Отстъпки' );
jr_define( '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Качи файл' );
jr_define( '_JOMRES_COM_A_CURRENT_SETTINGS', 'Моментни настройки' );
jr_define( '_JOMRES_COM_A_EXPLANATION', 'Обяснение' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Добавки за 1 човек' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Избери Да за да правиш добавки за 1 човек' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Добавка за един гост' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Депозита процент ли е?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Депозита процент от общата резервация ли е? Ако не е, тогава депозита ще бъде постоянна стойност' );
jr_define( '_JOMRES_COM_A_DEPOSIT_VALUE', 'Депозит' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER', 'На човек, на нощувка' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC', 'Избери Да за да настроиш за човек за нощувка. Ако е Не, тогава ще бъде калкулирано за стая за нощувка' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE', 'Големина на файла' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Макс. големина на файла' );
jr_define( '_JOMRES_FRONT_MR_BOOKED', 'Резервирани стаи' );
jr_define( '_JOMRES_COM_CONFIRMATION_TITLE', 'Писмо потвърждение' );
jr_define( '_JOMRES_COM_CONFIRMATION_DEAR', 'Уважаеми ' );
jr_define( '_JOMRES_COM_CONFIRMATION_RATE_RULES', 'Цена на нощувка на стая ' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Детайли за резервацията' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1', 'Благодарим, че резервирахте при' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2', '. По-долу е обобщение на резервационните детайли. Проверете Вашиете детайли, ако има грешка свържете се с нас.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN', 'Стаята ще бъде запазена до пристигането Ви' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD', 'Поздравления ' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY', 'Надяваме се, че ще се насладите на престоя си.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO', 'Погледнете малките букви.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Напомняме, че резервацията има силата на договор. Ако по някакъв начин скъсите престоя си, Вие дължите цялата сума от резервацията направена от Вас' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE', 'Не забравяйте да си направите застраховка преди почивката си.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Глоби за отмяна</i> Ако канселирате почивката си, това трябва да стане в писмен вид. Налагат се следните глоби:' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS', '30 дни или повече' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY', ' Само депозит.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS', '15-30 дни' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT', ' 50% от общата цена.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Под 15 дни' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT', ' 100% общата цена.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_VAT', 'VAT@ 17.5% е включен във всички цени.' );
jr_define( '_JOMRES_COM_CONFIRMATION_PRINT', 'Разпечатайте писмото-потвърждение' );
jr_define( '_JOMRES_COM_INVOICE_TITLE', 'Фактура' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS', 'Брой нощувки: ' );
jr_define( '_JOMRES_COM_INVOICE_CONTRACTAGREED', 'Първоначално договорена цена: ' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Цена на нощувка: ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Общо' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Благодарим' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'Надяваме се, че ще използвате услугите ни отново.' );
jr_define( '_JOMRES_COM_INVOICE_PRINT', 'Разпечатай фактура' );
jr_define( '_JOMRES_COM_ADDSERVICE_TITLE', 'Добави услуги към сметката' );
jr_define( '_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Описание на услугите' );
jr_define( '_JOMRES_COM_ADDSERVICE_VALUE', 'Цена на услугите' );
jr_define( '_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Други' );
jr_define( '_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Общо-други: ' );
jr_define( '_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Добавено към сметката' );
jr_define( '_JOMRES_UPLOAD_IMAGE', 'Качи снимка' );
jr_define( '_JOMRES_FILE_UPLOAD', 'Качи файл' );
jr_define( '_JOMRES_FILE_ERROR_TYPE', 'You are only allowed to upload types of type:\n' );
jr_define( '_JOMRES_FILE_ERROR_EMPTY', 'Моля, избери файл' );
jr_define( '_JOMRES_FILE_ERROR_NAME', 'Файла не трябва да съдържа интервали.' );
jr_define( '_JOMRES_FILE_ERROR_SIZE', 'Файла превишата максималния лимит поставен от Администратора.' );
jr_define( '_JOMRES_FILE_NOT_UPLOADED', 'Файла не е качен.' );
jr_define( '_JOMRES_FILE_UPDATED', 'Успешно качване на файл.' );
jr_define( '_JOMRES_COM_A_JSCALENDAR', 'JS Календар' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE', 'JS Календар език' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Моля, изберете езика на календара. Забележете, че някои от календарите може и да не работят, Вижте http://sourceforge.net/tracker/?group_id=75569&atid=544287 for more information' );
jr_define( '_JOMRES_COM_A_CALENDARCSS', 'JS Календар CSS файл' );
jr_define( '_JOMRES_COM_A_CALENDARCSS_DESC', 'Избери CSS файла, който да се използва от календара' );
jr_define( '_JOMRES_COM_A_ODDS', 'Др.' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING', 'Изкарай запитванията към миникомпонента' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING_DESC', 'Избери Да за да видиш заявките към миникомпонентите.' );
jr_define( '_JOMRES_FILE_DELETE', 'Изтрий снимката' );
jr_define( '_JOMRES_FILE_DELETED', 'Файла е изтрит' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETE', 'Изтрий' );
jr_define( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Не може да изтрие стаята, има резервации. Отнеми ги и пробвай отново.' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETED', 'Стаята е изтрита' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Изтрий екстрите към стаята' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Не може да ги изтрие.' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Изтрити' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Изтрий екстри към обект' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Не може да ги изтрие.' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Изтрити' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Изтрий вид обект' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Не може да ги изтрие.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Не може да ги изтрие.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Изтрити обекти' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE', 'Изтрий обект' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETED', 'Обекта е изтрит' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Нямате права за изтриване' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Ширина файла след проразмеряването от Системата' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Карта' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Описание' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Настаняване от' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Дейности' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Указания за достигане с кола' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Летища' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Друг транспорт' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Условия' );
jr_define( '_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Адрес' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Посетители на сайта могат да резервират онлайн' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Избери Да за да позволиш на всички посетители да резервират онлайн.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Резервациите са за фиксиран период' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Ако е Да, периода ще е фиксиран.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD', 'Период на резервацията: ' );
jr_define( '_JOMRES_COM_A_BOOKING', 'Резервирани стаи' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Макс. периоди, eg 3x 7 периода = 21 ДНИ' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Това апартамент или вила е?' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'Примерно, отдавате целия обект, а не стаи в него. Ако е така, моля забележете, че трябва да имате само по 1 стая към всеки подобен обект.' );
jr_define( '_JOMRES_FRONT_MR_REVIEWBOOKING', 'Изпрати и Плати сега' );
jr_define( '_JOMRES_COM_MR_CONFIRMBOOKING', 'Потвърди резервацията' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Понеделник' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Вторник' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Сряда' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Четвъртък' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Петък' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Събота' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Неделя' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'ПО' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'ВТ' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'СР' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'ЧЕ' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'ПЕ' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'СЪ' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'НЕ' );
jr_define( '_JOMRES_COM_A_AVLCAL', 'Пресметни заетост' );
jr_define( '_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Цвят за днешна дата' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE', 'Цвят за дните от месеца на показване ' );
jr_define( '_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Цвят за всички останали дни' );
jr_define( '_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Цвят на клетката за дни в които е свободно' );
jr_define( '_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Цвят на клетката за дни които не са от избрания месец' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Цвят на клетката за заети дни' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Цвят на клетката за предварителни резервации' );
jr_define( '_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Цвят на клетката за минали дати' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Зает/Не е налична' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Свободна за резервации' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Предварителни резервации' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Предварително определен ден на пристигане' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Само за сайтове предлагащи предварителна дата на пристигане.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Предварително фикциран ден на пристигане' );
jr_define( '_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Престой в дни' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Показвай календара наред с другите табове?' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Нагласи на Да за да показва календара' );
jr_define( '_JOMRES_FRONT_AVAILABILITY', 'Заетост' );
jr_define( '_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Избери свободен ден за да се визуализира формата за резервации.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING', 'Блек резервации' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_NEW', 'Нова Блек резервация' );
jr_define( '_JOMRES_FRONT_DELETEGUEST', 'Изтрий гост' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Госта е изтрит' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Не може да изтрие госта, има резервации на негово име и за други обекти.' );
jr_define( '_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'Реална цена на стая: ' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO', 'Здравей' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS', 'Благодарим, че направихте резервация с ' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY', 'Обобщение на резервацията следва:' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS', 'Ако имате някакви въпроси не се двоумете да се свържете с нас.' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE', 'Телефонният ни номер е' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL', 'Можете да ни пишете е-мейл на' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Пушачи' );
jr_define( '_JOMRES_FRONT_ROOMSMOKING_EITHER', "Няма значение" );
jr_define( '_JOMRES_COM_CALENDAROUTPUT', 'Формат на календара' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT_DESC', 'Това позволява на потребителя да сменя формата на датите в системата' );
jr_define( '_JOMRES_COM_CALENDARINPUT', 'Инпът формат на календара' );
jr_define( '_JOMRES_COM_CALENDARINPUT_DESC', 'Това позволява на потребителя да сменя инпът формата на датите в системата.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Фиксиран период на резервации позволява следобеден престой' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Продължителност на следобедния престой' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISHED', 'Публикуван' );
jr_define( '_JOMRES_COM_A_PAYPAL', 'Paypal' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Одит' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_DATE', 'Дата' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_TIME', 'Време' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_USER', 'Потребител (username)' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_OPERATION', 'Операция' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Виж детайли' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Филтрирай по дата' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'Филтрирай по потребителско име' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'Филтрирай по операция' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Статус' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Чакащи' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Пристига днес' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Лице заемащо стаята в момента' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Заминава днес' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Departure overdue' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Не е пристигнал' );
jr_define( '_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Незнаен потребител' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM', 'Създадена стая' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Обновена стая' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM', 'Изтрита стая' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Създадена екстра за стая' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Обновена екстра за стая' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Изтрита екстра за стая' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'Вкаран тип стая' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'Обновена тип стая' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'Изтрита тип стая' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Създаден обект' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Обновен обект' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Изтрит обект' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'Създадена екстра на обект' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'Обновена екстра на обект' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'Изтрита екстра на обект' );
jr_define( '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Обновени свойства на обект' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Публикуван обект' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Създадена тарифа' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Обновена тарифа' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_TARIFF', 'Изтрита тарифа' );
jr_define( '_JOMRES_MR_AUDIT_ADDSERVICE', 'Добавена надценка за услугата' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Чекиран гост' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'Изпратен гост' );
jr_define( '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Въведен депозит' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_GUEST', 'Създаден гост' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Обновен гост' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_GUEST', 'Изтрит гост' );
jr_define( '_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Резервирал стая' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Създал екстра' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Обновил екстра' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Изтрил екстра' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Публикувал екстра.' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING', 'Въвел Блек резервация.' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Изтрил Блек резервация.' );
jr_define( '_JOMRES_COM_MR_EXTRA_TITLE', 'Екстри' );
jr_define( '_JOMRES_COM_MR_EXTRA_DESC', 'Описание' );
jr_define( '_JOMRES_COM_MR_EXTRA_NAME', 'Име' );
jr_define( '_JOMRES_COM_MR_EXTRA_PRICE', 'Цена' );
jr_define( '_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Обновена екстра' );
jr_define( '_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Редактирай' );
jr_define( '_JOMRES_COM_MR_EXTRA_DELETED', 'Изтрита екстра' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Администрационен панел на екстрите' );
jr_define( '_JOMRES_COM_A_EXTRAS', 'Показвай екстрите по време на резервация?' );
jr_define( '_JOMRES_COM_A_EXTRAS_DESC', 'Избери Да за да се появи в резервационната форма' );
jr_define( '_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Избираеми екстри.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Начална дата на Блек резервация' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Дата на пускане на възстановяване на услугата' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Блек резервации' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Грешка. Една или повече стаи не са свободни.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Стаи включени в Блек резервацията' );
jr_define( '_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'Виж Блек резервациите' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Няма Блек резервации за визуализиране' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Брой звезди' );
jr_define( '_JOMRES_COM_A_SMOKING', 'Покажи опция за пушачи?' );
jr_define( '_JOMRES_COM_A_SMOKING_DESC', 'Ако е Да, показва опцията за пушачи.' );
jr_define( '_JOMRES_COM_A_RESET', 'Нулирай' );
jr_define( '_JOMRES_COM_A_PAYPAL_CANCELLED', 'Отменена резервация' );
jr_define( '_JOMRES_FRONT_MR_SEARCH_HERE', 'Търси за:' );
jr_define( '_JOMRES_COM_A_SMOKING_OPTION', 'Опция пушачи по подразбиране' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL', 'Символ на валута' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'Eg &amp;паунд&#59; Трябва да използвате HTML кода за символа. Вижте тук <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE', 'Код на валута' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE_DESC', 'Eg GBP. Това се използва в е-мейла до клиента за да потвърди резервацията.' );
jr_define( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Повече информация' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Лимитирай предварителните резервации?' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Ако е Да, тогава клиента не може да резервиран предварително Н дни от днешната дата' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Ограничение на дни за предварителни резервации:' );
jr_define( '_JOMRES_COM_A_TAX_WARNING', '<font color=red>Внимание: Не е препоръчително да слагате и двете опции на Да. </FONT>' );
jr_define( '_JOMRES_COM_FRONT_ROOMTAX', 'Такса' );
jr_define( '_JOMRES_COM_A_ROOMTAX', 'Такса стая' );
jr_define( '_JOMRES_COM_A_ROOMTAX_DESC', 'Това е за Американския пазар където се добавя допулнителна такса за стаята.' );
jr_define( '_JOMRES_COM_A_ROOMTAX_FIXED', 'Фиксирана сума такса' );
jr_define( '_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Процент такса' );
jr_define( '_JOMRES_COM_A_EUROTAX', 'Такса' );
jr_define( '_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Процент такса' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVE', 'Архивирай' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' всички записи са архивирани' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'Одиторът архивира записите' );
jr_define( '_JOMRES_FRONT_TARIFFS', 'Цените' );
jr_define( '_JOMRES_FRONT_TARIFFS_TITLE', 'Име' );
jr_define( '_JOMRES_FRONT_TARIFFS_DESC', 'Описание на тарифата' );
jr_define( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Тип обект' );
jr_define( '_JOMRES_FRONT_TARIFFS_STARTS', 'Валидна от' );
jr_define( '_JOMRES_FRONT_TARIFFS_ENDS', 'Валидна до' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN', 'на човек' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN', 'на нощувка' );
jr_define( '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Не включва уикенди' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINDAYS', 'Минимум дни' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Максимум дни' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Минимум настанени' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Максимум настанени' );
jr_define( '_JOMRES_FRONT_PREVIEW', 'Преглед' );
jr_define( '_JOMRES_COM_A_EDITINGMODEON', 'Редактиране включено?' );
jr_define( '_JOMRES_COM_A_EDITING_CURRENTTEXT', 'Настоящ текст' );
jr_define( '_JOMRES_COM_A_EDITING_NEWTEXT', 'Нов текст' );
jr_define( '_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Обновен личен текст.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Редактирай език' );
jr_define( '_JOMRES_COM_A_AUDITING_SHOWING', 'Брой на неархивирани записи: ' );
jr_define( '_JOMRES_FRONT_PTYPE', 'Тип обект' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE', 'Покажи типовете обекти' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Редактирай тип обект' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE', 'Тип обект' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC', 'Описание на тип обект' );
jr_define( '_JOMRES_COM_PTYPES_SAVED', 'Тип обект е записан' );
jr_define( '_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'Не може да изтрие тип обект.' );
jr_define( '_JOMRES_COM_PTYPES_DELETED', 'Тип обект е изтрит' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Напомняне за плащане' );
jr_define( '_JOMRES_EXTRAS_NOEXTRAS', 'Няма допълнителни услуги за добавяне към сметката' );
jr_define( '_JOMRES_COM_CHARGING_DEPOSIT', 'Депозит' );
jr_define( '_JOMRES_COM_CHARGING_FULLAMT', 'Цялата сума' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG', 'Стойност чарджвана при резервация' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG_DESC', 'Използвайте тази опция за да решите какво да бъде чарджвано от клиента по време на резервация.' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW', 'Колко месеца от календара да показва' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW_DESC', 'При заетостта на стаи, колко месеца от календара да показва?' );
jr_define( '_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'Подписан от името на ' );
jr_define( '_JOMRES_COM_A_GATEWAYLIST', 'Начини за разплащане' );
jr_define( '_JOMRES_COM_A_CANCEL', 'Отмени' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'Избери датите за които искате да направите Блек резервации и натиснете Приложи за визуализация. <br/> 
<br/> 
Изберете стаите, които искате да извадите. <br>Ако стая няма чек срещу нея, няма как да бъде сложена в Блек резервациите.<br/> ' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center><b>Вие не сте в системата поради неактивност</b> Моля, влезте отново.' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'Причина' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Използвах онлайн разплащане?' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'Избери Да ако искаш да използваш онлайн разплащане. <b>Note:</b>Това не изключва депозитите заложени от администратора' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Изберете начин на плащане.' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', 'Включено?' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Променени опции на плъгина' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Въведени опции на плъгина' );
jr_define( '_JOMRES_FRONT_GALLERYLINK', 'Посети сайта на този обект' );
jr_define( '_JOMRES_COM_A_GALLERYLINK', 'Външен линк' );
jr_define( '_JOMRES_COM_A_GALLERYLINK_DESC', 'Сложи линк към сайта си тук.' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Показана кредитна карта' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Обновена кредитна карта' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'Промени кредитна карта' );
jr_define( '_JOMRES_COM_A_EDITICON', 'Промени големина на иконката' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Качи снимки към обект' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Снимките са вече в директорията' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'Слайдшоута' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Покажи линк към слайдшоута?' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Покажи линк към слайдшоута наред с другите табове?' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Ширина на малката снимка в слайдшоуто' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'Галерия' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Съжаляваме, няма налични снимки за този обект.' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Покажи линк към тарифи?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', 'Позволи попъп-и?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Ако изберете Не тогава линковете, които се отварят като попъп-и ще се показват наред с табовете.' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'Качи снимки за слайдшоу' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS_INFO', 'Използвай формата за да качиш няколко снимки.<br/><b>Note</b> Снимки със идентично имена ще бъдат презаписани.' );
jr_define( '_JOMRES_A_TABS_MISC', 'Други' );
jr_define( '_JOMRES_A', 'Конфигурация на сайта' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'Използвай общи екстри към обекти' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'Изберете Да ако искате всички обекти да ползват зададените от администратора екстри.' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'За да зададете снимка трябва да качите файловете в папката /jomres/uploadedimages/pfeatures/ ' );
jr_define( '_JOMRES_A_ICON', 'Иконка' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'Изберете плъгин за търсене.' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>Съжаляваме, Вашето търсене не даде резултат. Моля, променете параметрите и търсете отново.</b>' );
jr_define( '_JOMRES_AREYOUSURE', 'Сигурни ли сте, че искате да го направите?' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Резервирай стая' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Резервирай сега' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'Номер' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Покажи тарифите като табове?' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Адрес' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Детайлна информация' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Избери за стаи и заетост' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Покажи информация за тарифи' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Покажи адреса под този линк' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'ПОкажи детайлна информация под този линк' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Покажи стаи и заетост под този линк' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Покажи информация за тарифи под този линк' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Флат тарифи' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Средни стойности' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'Избери модела за ценообразуване, който искате да използвате' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Имате 2 метода на ценообразуване. Първия Флат метод позволява оферирането на различни на брой тарифи към клиента и цената на престоя е една и съща за целия период. Изберете Средни стойности ако искате да настроите цените към съответен период или дата. Системата ще открие всички тарифи за всеки един от дните в резервацията ще ги събере и ще ги осредни за периода" );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Покажи дата на отпътуване?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Избери Не ако искате да не показвате тази дата." );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC', 'Лимит на описание' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC_DESC', "Това лимитира броя на букви в представянето на обекта." );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE', 'Използвана дата() промени стила?' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Избери Да за да форматира изховните дати() (Виж <a href="http://www.php.net/manual/en/function.date.php">Тук</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISH', 'Публикувай' );
jr_define( '_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Отмени публикуване' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES', 'Използвай глобални типове стаи/обекти' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_DESC', 'Трябва да изберете Да ако искате да позволите търсене по този параметър.' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_INFO', 'За да зададете снимка по този параметър трябва да я качите в папката /images/stories/jomres/rmtypes/ ' );
jr_define( '_JOMRES_COM_INPUTERROR_BACKGROUND', 'Цвят при грешка' );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES', 'Страна по подразбираме в резервационната форма' );
jr_define( '_JOMRES_JAVASCRIPT_', 'Полетата с червена звезда са задължителни' );
jr_define( '_JOMRES_COM_SELFREGISTRATION', 'Потребителите могат да регистрират свои обекти?' );
jr_define( '_JOMRES_COM_SELFREGISTRATION_DESC', 'Избери Да ако искате да позволите на потребителите да вкарват обекти без интервенция от администратора.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'Моля специфицирайте местоположение на Вашия обект.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'Моля попълнете информация за обекта.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Всички подчертани са задължителни.' );
jr_define( '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Създаден обект' );
jr_define( '_JOMRES_REGISTRATION_NOTALLOWED', "Съжаляваме, но не можете да създадете обект. Трябва да сте регистриран потребител за да направите това." );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Създаден обект: ' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'За потребител: ' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR', 'Показвай календара от началото на годината?' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Заестосста се показва от началото на настоящата година.' );
jr_define( '_JOMRES_NUMBEROFROOMSAVAILABLE', 'Брой свободни стаи' );
jr_define( '_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Назад към информация за обекта' );
jr_define( '_JOMRES_FRONT_ROOMTYPES', 'Типове стаи/обекти' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Случайно лимитиране на търсенето' );
jr_define( '_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Показвай преобразуване на валута при тарифата?' );
jr_define( '_JOMRES_CURRENCYCONVERSIONTEXT', 'Преобразувай валута' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR', 'Позволи на потребителите да използват html?' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS', 'Използвайте формата за да направите резервацията си. Модифицирайте датите на пристигане и отпътуване, както и броя гости. След това изберете стаята /стаите/, които желаете. Когато се готови можете да добавите изброени екстри /ако има такива/ и да пристъпите към попълването на данните си. Когато формата разполага с достатъчна информация, бутона "Изпрати и Плати сега" ще стане активен и Вие ще можете да завършите желаната от Вас резервация.' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Използвайте формата за да направите резервацията си. Модифицирайте датите на пристигане и отпътуване, както и броя гости. След това изберете стаята /стаите/, които желаете. Когато се готови можете да добавите изброени екстри /ако има такива/ и да пристъпите към попълването на данните си. Когато формата разполага с достатъчна информация, бутона "Изпрати и Плати сега" ще стане активен и Вие ще можете да завършите желаната от Вас резервация.' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS', 'Детайли за резервация' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Изберете детайлите за Вашата резервация' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE', 'Наличност ' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Изберете желаните стаи' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Погледнете тук за да се уверите че обекта е свободен за този период.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS', 'Допълнителни екстри' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_DESC', 'Изберете допълнителни екстри, които да добавите към резервацията' );
jr_define( '_JOMRES_COM_PERDAY', 'На нощ' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS', 'Лични данни' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS_DESC', 'Моля, попълнете личните си данни. Всички полета с червени звездички са задължителни.' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Налични стаи' );
jr_define( '_JOMRES_AJAXFORM_SELECTEDROOMS', 'Избрани стаи' );
jr_define( '_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', 'Датата за най-ранно пристигане е: ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM', 'На нощ:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Настаняване' );
jr_define( '_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Екстри:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX', 'ДДС 20%:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Отстъпка:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTAL', 'Общо (с ДДС):' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Гости' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Избери стаята' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Премахни стаята' );
jr_define( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Типове гости' );
jr_define( '_JOMRES_VARIANCES_TYPE', 'Тип' );
jr_define( '_JOMRES_VARIANCES_TYPE_TT', 'Тип на клиента, например Студент, Дете и т.н ' );
jr_define( '_JOMRES_VARIANCES_NOTES', 'Бележки' );
jr_define( '_JOMRES_VARIANCES_NOTES_TT', 'Вашите бележки към този тип клиент' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM', 'Максимум' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM_TT', 'Максимален брой от този тип клиент, който може да бъде избран в резервационната форма' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE', 'Е процент' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Стойността тук е процент от базовата стойност за стаята.' );
jr_define( '_JOMRES_VARIANCES_POSNEG', 'Добави разлика?' );
jr_define( '_JOMRES_VARIANCES_POSNEG_TT', 'Стойността е добавена или премахната от базовата стойност за стаята. ' );
jr_define( '_JOMRES_VARIANCES_VARIANCE', 'Разлика' );
jr_define( '_JOMRES_VARIANCES_VARIANCE_TT', 'Каква разлика' );
jr_define( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Променена подредба на тип клиент' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Публикуван тип клиент' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Изтрит тип клиент' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Създаден тип клиент' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Обновен тип клиент' );
jr_define( '_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Обновен тип клиент' );
jr_define( '_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Покажи линк към стаите от информацията за обекта?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL', 'Покажи <b>only</b> заетостта?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Изберете Да за да показвате само календара със заетостта в информацията за обекта.' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL', 'Минимум време при Пристигане/Заминаване' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Минималния интервал в резервационната форма за пристигане и заминаване на гости, в дни.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Формата показва номер на стая' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Формата показва име на стая' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Формата показва наименование на тарифа' );
jr_define( '_JOMRES_ORDER', 'Подредба' );
jr_define( '_JOMRES_REQUIREDFIELDS', 'Задължително' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Дни преди пристигане' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Минимум дни от днес преди датата на пристигане.' );
jr_define( '_JOMRES_DTV', 'Вариации с типа дати' );
jr_define( '_JOMRES_DTV_DOW', 'Ден от седмицата' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Тип гост по подразбиране' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Ако използвате типове гости, това е броя им по подразбиране във формата' );
jr_define( '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Само регистрирани потребители могат да резервират онлайн?' );
jr_define( '_JOMRES_REGISTEREDUSERSONLYBOOK', 'Трябва да сте регистриран потребител. Кликнете тук за да се регистрирате ' );
jr_define( '_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Цвят на шрифта за линкове на настоящи резервации' );
jr_define( '_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Уикенд' );
jr_define( '_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Стаята е резервирана' );
jr_define( '_JOMRES_COM_AVLCAL_BLACK_KEY', 'Блек резервация' );
jr_define( '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Закръгли депозита?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Таксувай депозити?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'На седмична база?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Можете да избирате дневно или седмично. Ако изберете седмична база, тогава тази опция трябва да е избрана с Да.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'на седмица' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Повторяемост на фиксирана дата на пристигане: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Фиксирания брой дни показващи се в падащото меню.' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Невалидна опция за пушачи' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Датата на пристигане е невалидна' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Датата на заминаване е невалидна' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Резервацията е прекалено къса. Трябва да има поне толкова дни между датите на пристигане и занимаване:' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Интервалът е' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Типа гост е невалиден' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Изберете брой гости/тип' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Избрали сте прекалено много за наличната тарифа' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Избрали сте повече стаи отколкото гости. Премахнете стаи.' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Грешка: Моля променете дати/брой гости и избор на стаи' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Трябва да изберете повече стаи' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Изберете стая' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Името е задължително' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Фамилията е задължителна' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Номер на къща е задължителна' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Улицата е задължителна' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Града е задължителен' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Региона е задължителен' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Пощенския код е задължителен' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Страната е задължителна' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Стационарен номер е задължителен' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Мобилен номер е задължителен' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Email е задължителен' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'Email не е валиден. Поправете го' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'Невалиден email домейн' );
jr_define( '_JOMRES_SRP_WEHAVEVACANCIES', '<b>Имаме свободни места!</b>' );
jr_define( '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Няма избрани стаи' );
jr_define( '_JOMRES_BOOKING_NUMBER', 'Резервация номер' );
jr_define( '_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Фон на съобщението за резервация' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA', 'Дъмп на темплейта?' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Някои елементи се показват на определени потребители' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Стойността е процент' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Избери Да за да е процент от стойността.' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST', 'Лимитирай свободните стаи и тарифи' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST_DESC', 'Избери нула за да няма лимириране ' );
jr_define( '_JOMRES_SRP_WEHAVENOVACANCIES', 'Няма свободни места!' );
jr_define( '_JOMRES_BOOKITNOW', '' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Генерално редартиране включено?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'ВНИМАНИЕ Тази функция се включва от администратор.' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Използвай обща валута?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Всички обекти използват тази валута (e.g. & # 8 3 6 4 ;)' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Символ на общата валута' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Компонент рапд' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'ВНИМАНИЕ Тази функция се включва от администратор.' );
jr_define( '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Супер мениджър на обект' );
jr_define( '_JOMRES_COM_WEEKENDONLY', 'Само през уикенди' );
jr_define( '_JOMRES_COM_WEEKENDDAYS', 'Само през дните от уикенда' );
jr_define( '_JOMRES_COM_WEEKENDDAYS_DESC', 'Изберете уикенд дните и специалните тарифи.' );
jr_define( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Изберете държавата' );
jr_define( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Първо запишете и след това качете снимка' );
jr_define( '_JOMRES_TARIFFSFROM', 'Цени от ' );
jr_define( '_JOMRES_SEARCH_ALL', 'Всички' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Търси по страна' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Търси по регион' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Търси по град' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'Търси по екстри' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'Търси' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'Търси по ключова дума.' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Търсене думи: ' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'Моля въведете дните на пристигане и заминаване за визуализиране на свободни стаи.' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'Всички обекти по тип.' );
jr_define( '_JOMRES_SEARCH_RTYPES', 'Всички обекти по тип стаи.' );
jr_define( '_JOMRES_SORTORDER_DEFAULT', 'По подразбиране' );
jr_define( '_JOMRES_SORTORDER_PROPERTYNAME', 'Име на обект' );
jr_define( '_JOMRES_SORTORDER_PROPERTYREGION', 'Регион на обекта' );
jr_define( '_JOMRES_SORTORDER_PROPERTYTOWN', 'Град на обекта' );
jr_define( '_JOMRES_SORTORDER_STARS', 'Звезди' );
jr_define( '_JOMRES_PATHWAY_PROPERTYLIST', 'Обекти в резервационната система' );
jr_define( '_JOMRES_PATHWAY_PROPERTYDETAILS', 'Детайли ' );
jr_define( '_JOMRES_PATHWAY_BOOKINGFORM', 'Резервационна форма' );
jr_define( '_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Обнови адреса' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Повторно проверяване на свободни стаи.<br/>(Избраните стаи ще се изтрият)' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Повторно проверяване на заетостта' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Променете ектрите по избор' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Сменяне на селекцията от стаи' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Обновяване на адреса' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Някои полета не са попълнени правилно.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Снимка на стая' );
jr_define( '_JOMRES_CURRENCYFORMAT', 'Формат на валута' );
jr_define( '_JOMRES_MANAGEROPTIONSASIMAGES', 'Покажи администраторските опции като снимки' );
jr_define( 'JOMRES_COM_A_SEARCHOPTIONSTAB', 'Опции за търсене' );
jr_define( 'JOMRES_COM_A_AVAILABLELOGS', 'Логове' );
jr_define( 'JOMRES_COM_A_LOGS_NOENTRIES', 'Няма логове.' );
jr_define( 'JOMRES_COM_A_MESSAGE', 'Съобщение' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define( 'JOMRES_COM_A_TARIFFMODE_NORMAL', 'Нормални' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Напреднали' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Високо ниво' );
jr_define( 'JOMRES_COM_A_TARIFFMODE', 'Метод за тарифи' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_DESC', "<b>Внимание: Променянето на тарифите изтрива информацията за тях.</b>.
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
Високо ниво -> Нормални. Всички тарифи се нулират.<br/>" );
jr_define( '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Показвай стаите във формата на обекта?' );
jr_define( 'JOMRES_PROPERTYTYPE', 'ТИП обект' );
jr_define( 'JOMRES_COM_A_SRPONLY', '1 обект' );
jr_define( 'JOMRES_MAXPEOPLEINROOM', 'Максимум настанени в стая' );
jr_define( 'JOMRES_MAXPEOPLEINBOOKING', 'Максимум гости в резервацията' );
jr_define( '_JOMCOMP_BOOKINGNOTES_ADD', 'Добави бележка' );
jr_define( '_JOMCOMP_BOOKINGNOTES_EDIT', 'Редактирай бележка' );
jr_define( '_JOMCOMP_BOOKINGNOTES_DELETE', 'Изтрий бележка' );
jr_define( '_JOMCOMP_BOOKINGNOTES_VIEW', 'Покажи бележки' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Добавена нова бележка' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Редактирана бележка' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Изтрита бележка' );
jr_define( '_JOMCOMP_MYUSER_MENUTITLE', 'Опции' );
jr_define( '_JOMCOMP_MYUSER_LISTBOOKINGS', 'Резервации' );
jr_define( '_JOMCOMP_MYUSER_MYBOOKINGS', 'Моите резервации' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKING', 'Виж резервация' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Виж фаворите' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Нямате фаворите!' );
jr_define( '_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Добави към фаворите' );
jr_define( '_JOMCOMP_MYUSER_PROPERTYTYPE', 'Тип обект' );
jr_define( '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'Обекти на сайта' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE', 'Промоции' );
jr_define( '_JOMCOMP_WISEPRICE_ACTIVE', 'Активен' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC', 'Динамично конфигуриране на цените на стаите.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'По заетост и по дни.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD', 'Трешхолд (брой дни преди датата на пристигане и днес)' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Ако заетостта е 10% или по-малка' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Ако заетостта е 25% или по-малка' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Ако заетостта е 50% или по-малка' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Ако заетостта е 75% или по-малка' );
jr_define( '_JOMCOMP_WISEPRICE_DISCOUNT', 'Отстъпка %' );
jr_define( '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' е намалена от ' );
jr_define( '_JOMCOMP_WISEPRICE_TO', ' на ' );
jr_define( '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Няма динамично конфигуриране на цените ' );
jr_define( 'JOMRES_COM_A_MAPSKEY', 'Google maps API ключ' );
jr_define( 'JOMRES_COM_A_MAPSKEY_DESC', 'Генерирайте ключ от <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Сложете генерирания ключ тук и системата ще изобрази картата при детайлите за обекта.' );
jr_define( 'JOMRES_COM_A_USE_SSL', 'Използвай SSL криптиране в резервационната форма?' );
jr_define( 'JOMRES_COM_A_USE_SSL_DESC', 'Трябва да сте сигурен, че имате валиден SSL сертификат за ' );
jr_define( '_JOMCOMP_LASTMINUTE_CPANEL', 'В последня момент' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE', 'Активен?' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Изберете Да, ако искате да използвате оферта в последния момент.' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD', 'Трешхолд' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Ако резервацията се прави определен брой дни преди периода, купувача се възползва от въпросната отстъпка' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT', 'Отстъпка' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'Като процент' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Отстъпката е направена!' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Цената бе намалена с ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', ' ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% отстъпка ако резервираш и дойдеш преди ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Резервирай сега за да се възползваш!' );
jr_define( '_JOMCOMP_LASTMINUTE_ORMORE', '% или по-голяма отстъпка може да е налична ако пристигнете преди ' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO', 'Инфо за вербозна тарифа' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Избери Да ако искаш да показваш по-детайлна информация за тарифата' );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG', 'Намали опциите за конфигуриране' );
jr_define( '_JOMCOMP_AMEND', 'Промени резервация' );
jr_define( '_JOMCOMP_AMEND_SELECTPROPERTY', 'Избери нов обект' );
jr_define( '_JOMCOMP_AMEND_HEADER', 'Първоначална резервация:' );
jr_define( '_JOMCOMP_AMEND_DEPOSITPAID', 'Платен депозит' );
jr_define( '_JOMCOMP_AMEND_DEPOSITDUE', 'Неплатен депозит' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Промени общата сума' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Промени депозита' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define( '_JRPORTAL_CANCEL', 'Отнеми' );
jr_define( '_JRPORTAL_CPANEL', 'Контролен панел' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Комисионна по подразбиране' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Избери комисионната по подразбиране.' );
jr_define( '_JRPORTAL_CPANEL_LISTCRATES', 'Изведи всички комисионни' );
jr_define( '_JRPORTAL_CPANEL_PATETITLE', 'Комисионни' );
jr_define( '_JRPORTAL_CRATE_TITLE', 'Заглавие' );
jr_define( '_JRPORTAL_CRATE_TYPE', 'Тип' );
jr_define( '_JRPORTAL_CRATE_VALUE', 'Комисионна' );
jr_define( '_JRPORTAL_CRATE_CURRENCYCODE', 'Код на валута' );
jr_define( '_JRPORTAL_CPANEL_LISTPROPERTIES', 'Изведи обекти' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Име на обект' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Адрес на обект' );
jr_define( '_JRPORTAL_PROPERTIES_LEGEND', 'Обекти, чийто фон е червен нямат зададена комисионна.' );
jr_define( '_JRPORTAL_STATS_PATETITLE', 'Статистика' );
jr_define( '_JRPORTAL_STATS_STATTYPE', 'Статистика за: ' );
jr_define( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Обекти-Кликове' );
jr_define( '_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Изглед за обект' );
jr_define( '_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Брой резервации' );
jr_define( '_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Стойност на резервациите' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Комисионна' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Комисионна' );
jr_define( '_JRPORTAL_CPANEL_LISTBOOKINGS', 'Изведи резервациите' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Обект id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Гост id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'Партньор id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Фактура id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Общо за резервацията' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Договор id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Номер на договор' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Код за валута' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Създаден' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Архивиран' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Дата на архивиране' );
jr_define( '_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Добави към сметката' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'За фактуриране' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'Сроден обект' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Стойност' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Описание' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', "Успешно добавяне " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', "Виж ордери" );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', "Неуспешно добавяне " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "Грешка, сметката няма стойност" );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Относно промяната на езика' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Не можете да изтриете обекта тъй като е единствен. Можете да го свалите от интернет пространството. ' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'Това не е демо лиценз. ' );
jr_define( '_JOMRES_COM_EMAILERRORS', "Праштай на мейл грешките?" );
jr_define( '_JOMRES_COM_EMAILERRORS_DESC', "Ако искате да логва грешките " );
jr_define( '_JOMRES_COM_ISTHISANMRP', "Този обект е хотел, къща за гости? " );
jr_define( '_JOMRES_COM_ISTHISANMRP_DESC', "Изберете SRP  за целия обект и MRP за стаи в този обект. " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK', "Използвайте проверка на невалидни мейли? " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK_DESC', "Това е във връзка с грешките тип 500. " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "Общо за настаняване" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', "нощи(нощувки) за" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "на стая " );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Обща цена с такса за екстрите " );
jr_define( '_JOMRES_AJAXFORM_PRICE_SUMMARY', "Обобщение на цената " );
jr_define( '_JOMRES_CONFIRMATION_ALERT', "Моля, прочетете и се съгласете с " );
jr_define( '_JOMRES_CONFIRMATION_HEADER', "Обобщение на резервацията е по-долу.<br /> За да направите корекции, моля натиснете бутона. " );
jr_define( '_JOMRES_CONFIRMATION_AMENDTEXT', "Ако искате да промените части от резервацията Ви, моля натиснете тук" );
jr_define( '_JOMRES_CONFIRMATION_AMEND', "Коригирай" );
jr_define( '_JOMRES_CONFIRMATION_SPECIALS', "Моля, напишете специалните си изисквания във формата." );
jr_define( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Потвърждавам, че информацията по-горе е вярна и се съгласявам с " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "на човек на нощ " );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE', "Езиков файл по подразбиране" );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Изберете езиковия файл ако това не е зададено от Joomfish." );
if ( !defined( '_PN_OF' ) ) jr_define( '_PN_OF', 'от' );
if ( !defined( '_PN_START' ) ) jr_define( '_PN_START', 'Начало' );
if ( !defined( '_PN_PREVIOUS' ) ) jr_define( '_PN_PREVIOUS', 'Предишен' );
if ( !defined( '_PN_NEXT' ) ) jr_define( '_PN_NEXT', 'Следващ' );
if ( !defined( '_PN_END' ) ) jr_define( '_PN_END', 'Край' );
if ( !defined( '_PN_RESULTS' ) ) jr_define( '_PN_RESULTS', 'Резултати' );

jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Моля, напишете Вашето послание за да го изпратите до ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Изпратете запитване' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Запитване за обект от ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Благодарим Ви, запитването е успешно получено.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' относно ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Изпишете думите, които виждате' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'Не мога да ги разчета, генерирай ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Изпрати' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'нов' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Запитване' );
jr_define( '_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Моля, изберете нужното настаняване като натиснете върху бутоните.' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Минимален брой стаи е избран' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Ако повече от Н брой стаи се избират могат да се слагат отстъпки ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Максимален брой стаи е избран' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Отстъпки при Н на брой стаи. ' );
jr_define( '_JOMRES_COM_SPS_EDITROOM_DESC', 'Увеличението на цената за 1 човек не може да действа, ако в главното меню опцията е избрана и тук отново слагате стойност.' );
jr_define( '_JOMRES_AVLCAL_NOBOOKINGS', "Свободно" );
jr_define( '_JOMRES_AVLCAL_QUARTER', "Има резервации" );
jr_define( '_JOMRES_AVLCAL_HALF', "Наполовина резервиран" );
jr_define( '_JOMRES_AVLCAL_THREEQUARTER', "Повече от половината резервиран" );
jr_define( '_JOMRES_AVLCAL_FULLYBOOKED', "Нацяло зает" );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX', 'Url префикс' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX_DESC', 'Настройва се от системния администратор' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'Виж обект' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'резервирай обект' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Търси' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Добави държава към url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Добави регион към url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Добави град към url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Добави тип обект към url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Добави име на обект към url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Задай ИД към име' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'ако е на Да тогаво url ще изглежда така fawlty_towers-1' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Добави държава към url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Държава по подразбиране' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'Задайте държава по подразбиране' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Добави регион към url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION', 'Регион по подразбиране' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'Въведете регион по подразбиране' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Добави град към url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN', 'Град по подразбиране' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Тип обект' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Тип обект по подразбиране' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Използва се в url ако търсенето е за всички типове обекти' );
jr_define( '_JOMRES_COM_SEF_NOTINSTALLED', 'Само за Joomla 1.5. Или she404sef не е инсталиран, или не сте копирали ' . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'jomres' . JRDS . 'libraries' . JRDS . 'jomres' . JRDS . 'cms_specific' . JRDS . 'joomla15' . JRDS . 'other_component_files' . JRDS . 'sh404sef' . JRDS . 'com_jomres.php в ' . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'components' . JRDS . 'com_sh404sef' . JRDS . 'sef_ext.' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Автоматичен детектор за календара' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Задайте по подразбиране' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'На седмица' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'На ден' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'На резервация' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'На човек на резервация' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'На човек на ден' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'На човек на седмица' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'На дни минимум' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'На дни - Х стаи избрани' );
jr_define( '_JOMRES_REGISTRYREBUILD', 'Построй отново регистъра' );
jr_define( '_JOMRES_REGISTRYREBUILD_NOTES', "Да се използва от системния администратор." );
jr_define( '_JOMRES_REGISTRYREBUILD_SUCCESS', 'Успешно!' );
jr_define( '_JOMRES_REGISTRYREBUILD_FAILURE', 'Грешка! Вижте лога.' );
jr_define( '_JOMRES_SEARCH_PRICERANGES', 'Търси по цена.' );
jr_define( 'JOMRES_WORD_SAVING', 'Записване...' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Използвай композит детайли на обекта?' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Да се използва от системния администратор' );
jr_define( '_JOMRES_PROFILELIST_INSTRUCTIONS', 'Да се използва от системния администратор.' );
jr_define( '_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Да се използва от системния администратор.' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Нямате резервации!' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Тип обект' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Редактирай типа обект' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Избери типа обект' );
jr_define( '_JOMRES_COM_LOGGING', 'Логване за системата' );
jr_define( '_JOMRES_COM_LOGGING_WARNING', ' <i>' . JOMRESPATH_BASE . JRDS . 'temp' . JRDS . '</i>Да се използва от системния администратор.' );
jr_define( '_JOMRES_COM_LOGGING_BOOKING', 'Логване за резервациите ' );
jr_define( '_JOMRES_COM_LOGGING_GATEWAY', 'Логване на системите за плащане ' );
jr_define( '_JOMRES_COM_LOGGING_REQUEST', 'Логване на всички входящи ' );
jr_define( '_JOMRES_COM_LOGGING_SYSTEM', 'Системно логване ' );
jr_define( '_JOMRES_COM_LOGGING_JRPORTAL', 'За комисионни ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Вашето запитване...' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Системата да показва ли снимка на типа стая' );
jr_define( '_JOMRES_COM_A_LISTLIMIT', 'Лимит на обектите показващи се на страница' );
jr_define( '_JOMRES_COM_A_LISTLIMIT_DESC', 'След търсене, броя на обектите, които да се показват на страница' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Интегрирано търсене' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Това е работа на системния администратор <b>' . JOMRES_TEMPLATEPATH_FRONTEND . '</b> ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Активирай?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Използвай колони' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Да се използва от системния администратор" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', "Колини с екстрите" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', "Да се използва от системния администратор." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "Търси по регион с падащо меню" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Падащо меню да държави/региони или градове." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Търси по име на обект" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "Показвай Търси." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "Покажи като падащо меню?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Избери Не за да ги показва като връзки" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "Търси по град/регион" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "Показвай търси" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "Покажи падащо меню?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Показвай връзки" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Търси по тип обект" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "Показвай Търси" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "Падащо меню?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Избери не за връзки" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Търси по тип стая" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Показвай Търси" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "Падащо меню?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Избери не за да показва като връзки" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', "Търси по екстри" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "Показвай Търси" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "Покажи като падащо меню?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Други" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "Търси по описание" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "Показвай търси" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "Търси по заетост" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "Показвай Търси" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "Търси по цена" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "Показвай Търси" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "Стойности" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "Стайностите на покачване на цените." );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JOMRES_COM_A_CRON_TITLE', 'Логове' );
jr_define( '_JOMRES_COM_A_CRON_DESC', 'Тази функционалност е за фактуриране.' );
jr_define( '_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Да се използва от системния администратор.' );
global $jomresConfig_secret;
jr_define( '_JOMRES_COM_A_CRON_METHOD', 'Метод' );
jr_define( '_JOMRES_COM_A_CRON_METHOD_DESC', "Да се използва от системния администратор<br /> <i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=component&no_html=1&secret=" . $jomresConfig_secret . "> /dev/null</i> " );
jr_define( '_JOMRES_COM_A_CRON_LOGGING', 'Логване в браузера' );
jr_define( '_JOMRES_COM_A_CRON_LOGGING_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Логването е активирано' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS', 'Да се използва от системния администратор' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Много логове' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Редактиране на темплейта' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Име на темплейта' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Къстъмайзд?' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Въведени полета' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESC', 'Въведени полета, които се показват в резервационната форма.' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Име на поле' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'По подразбиране' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Описание' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Задължително' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY', 'Макс количество' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JRPORTAL_INVOICES_ISSUE', "Фактурирне" );
jr_define( '_JRPORTAL_TAXRATES_TITLE', "Нива за такси" );
jr_define( '_JRPORTAL_TAXRATES_CODE', "Код на такса" );
jr_define( '_JRPORTAL_TAXRATES_DESCRIPTION', "Описание на цената" );
jr_define( '_JRPORTAL_TAXRATES_CANNOTDELETE', "Не можете да изтриете цената." );
jr_define( '_JRPORTAL_TAXRATES_RATE', "Цена" );
jr_define( '_JRPORTAL_INVOICES_TITLE', "Фактури" );
jr_define( '_JRPORTAL_INVOICES_STATUS_UNPAID', "Неплатени" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PAID', "Платени" );
jr_define( '_JRPORTAL_INVOICES_STATUS_CANCELLED', "Отменени" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PENDING', "Чакащи" );
jr_define( '_JRPORTAL_INVOICES_USER', "Потребител" );
jr_define( '_JRPORTAL_INVOICES_STATUS', "Статус" );
jr_define( '_JRPORTAL_INVOICES_RAISED', "Рейзд" );
jr_define( '_JRPORTAL_INVOICES_DUE', "Към" );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION', "Абонамент" );
jr_define( '_JRPORTAL_INVOICES_INITTOTAL', "Общо за плащане" );
jr_define( '_JRPORTAL_INVOICES_RECUR_TOTAL', "Общо на определен период от време" );
jr_define( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', "Честота на определения период от време" );
jr_define( '_JRPORTAL_INVOICES_RECUR_DOMONTH', "Ден" );
jr_define( '_JRPORTAL_INVOICES_CURRENCYCODE', "Код на валута" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS', "Обекти" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_NAME', "Име" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', "Описание" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', "Първоначална цена" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', "Първоначално количество" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', "Първоначална отстъпка" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', "Първоначално общо" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', "Цена за определен период от време" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', "Количество за определен период от време" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', "Отстъпка за определен период от време" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', "Общо за определен период от време" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "Код на такса" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "Описание на таксата" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', "Стойност на таксата" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', "опции за PayPal " );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', "Код за валута" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', "Тест?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', "PayPal мейл" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', "Note: Да се използва от системния администратор:<br/><b>&nbsp;" . JOMRES_SITEPAGE_URL_AJAX . "&task=completebk" );
jr_define( '_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', "Да се използва от системния администратор." );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "Промени стандартните настройки за PayPal?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', "Да се използва от системния администратор." );
jr_define( '_JRPORTAL_INVOICES_SHOWINVOICES', "Покажи фактурите" );
jr_define( '_JRPORTAL_COUPONS_TITLE', "Купони за отстъпки" );
jr_define( '_JRPORTAL_COUPONS_DESC', "Да се използва от системния администратор." );
jr_define( '_JRPORTAL_COUPONS_CODE', "Код на купон" );
jr_define( '_JRPORTAL_COUPONS_VALIDFROM', "Валиден от" );
jr_define( '_JRPORTAL_COUPONS_VALIDTO', "Валиден до" );
jr_define( '_JRPORTAL_COUPONS_AMOUNT', "Отстъпка" );
jr_define( '_JRPORTAL_COUPONS_ISPERCENTAGE', "Отстъпка като процент" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY', "Само стая" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY_DESC', "Да се използва от системния администратор." );
jr_define( '_JRPORTAL_COUPONS_SQLERROR', "Грешка при триенето на купон" );
jr_define( '_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Ако имате купон моля въведете го.' );
jr_define( '_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Запишете и активирайте отстъпката' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Купона се използва в резервацията' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Номера на купона не е открит' );
jr_define( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Стойност на купона' );
jr_define( '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Резервацията е намалена с отстъпката : ' );
jr_define( '_JOMRES_COM_CACHING', 'Кеширане на системата?' );
jr_define( '_JOMRES_COM_CACHING_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES', 'Избери език' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Езиците които се показват на падащото меню.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Покажи падащо меню?' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Отминали и отменени резервации' );
jr_define( '_JRPORTAL_NEWUSER_DEAR', "Скъпи" );
jr_define( '_JRPORTAL_NEWUSER_THANKYOU', "Благодарим за регистрирането " );
jr_define( '_JRPORTAL_NEWUSER_USERNAME', "Потребителското Ви име е : " );
jr_define( '_JRPORTAL_NEWUSER_PASSWORD', "Паролата Ви е : " );
jr_define( '_JRPORTAL_NEWUSER_LOG_IN', "Моля, логнете се в системата за да видите резервациите " );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Записан купон' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_COUPON', 'Изтрит купон' );
jr_define( '_JOMRES_COM_GROWL', 'Месиджинг - Да се използва от системния администратор' );
jr_define( '_JOMRES_COM_GROWL_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TITLE', "Jomres -> СМС" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_USERNAME', "Потребителско име" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_PASSWORD', "Парола" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_APIID', "API id" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', "МОбилен номер" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Моля, използвайте следния формат '447979123456'. Оставете празно за да откажете известия по телефона си." );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TABTITLE', "СМС" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Трябва ви live сървър.</b>
<br/>
<br/>
Да се използва от системния администратор!<br/>
<br/>
<b>Да се използва от системния администратор</b><br/>
<br/>
" );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Резервационната форма показва за достъп на хора с увреждания' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Показва максимум хора' );
jr_define( '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Моля забележете, че общата цена ще бъде оформена след като изберете дати, брой гости, тип стая и допълнителни услуги, ако има такива." );
jr_define( '_JOMRES_LASTEDITED_DB', 'Базата данни последна промяна' );
jr_define( '_JOMRES_LASTEDITED_DISK', 'последна промяна на дисковия темплейт' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON', 'Предупреждение за темплейта на базата от данни' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Темплейта с базата данни не е актуализиран скоро' );
jr_define( '_JOMRES_LASTEDITED_WARNING', 'Да се използва от системния администратор.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "Пакети абонамент" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Име" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "Описание" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "Публикуван" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', "Честота" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', "Пробен период" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', "Пробна стойност" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "Пълна стойност" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', "Ограничение за стаите" ); // Not currently used, saved for a rainy day
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Ограничение за обектите" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', "Честота" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', "Да се използва от системния администратор" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Запиши за абонамент" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', "Моля, въведете информация за абонамента. Всички полета са задължителни." );
jr_define( '_JRPORTAL_SUBSCRIBERS_FIRSTNAME', "Име" );
jr_define( '_JRPORTAL_SUBSCRIBERS_SURNAME', "Фамилия" );
jr_define( '_JRPORTAL_SUBSCRIBERS_ADDRESS', "Адресс" );
jr_define( '_JRPORTAL_SUBSCRIBERS_COUNTRY', "Държава" );
jr_define( '_JRPORTAL_SUBSCRIBERS_POSTCODE', "Пощенски код" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', "Трябва Ви истински абонамент за " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', " <i>публикувани</i> обекти. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "Можете да увеличите броя на обектите за публикуване със <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>закупуването на повече пакети от тук.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', " Използвали сте " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', " слота за обекти. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "За да видите списък с настоящите си обекти кликнете <a href='" . JOMRES_SITEPAGE_URL . "&task=listyourproperties'>тук</a>. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "За да видите абонамента си за пакетите със слотове написнете <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>тук</a>. " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', "Достигнали сте максимума на слотове за обекти." );
jr_define( '_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "Благодарим за заявката Ви за абонаментен пакет. Щом платите сумата моля <a href='" . JOMRES_SITEPAGE_URL . "&task=registerProp_step1'>кликнете тук за да продължите със създаването на обекти.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "Не сте се абонирали за нашата услуга. Моля, уведомете ни какъв проблем сте срещнали или какво бихме могли да подобрим" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH', "Достигнали сте лимита за вкарване на обекти в системата. Можете да го увеличите чрез <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages&Itemid=" . $Itemid . "'>закупуването на абонаментен пакет от тук.</a> " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_USE', "Използвай функционалността за управление на абонаментите" );
jr_define( '_JOMRES_COM_NEWUSER', 'Създавай нов потребител при резервация' );
jr_define( '_JOMRES_COM_NEWUSER_DESC', 'Създавай нов потребител от нерегистрирана резервация' );
jr_define( '_JOMRES_CLICKTOREGISTER', 'Регистрирай обекта си' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', "Активни абонаменти" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', "Абонамент id" );
jr_define( '_JRPORTAL_NEWUSER_SUBJECT', "Благодарим за резервацията" );
jr_define( '_JOMRES_LATLONG_DESC', "Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude." );
jr_define( '_JOMRES_CONTROLPANEL', 'Контролен панел' );
jr_define( '_JOMRES_COM_FAUXHEADERS', 'Да се използва от системния администратор' );
jr_define( '_JOMRES_COM_FAUXHEADERS_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICE', 'Покажи фактура' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICES', 'Покажи фактури' );
jr_define( '_JOMRES_USER_LISTMYPROPERTY', 'Добави моят обект към този сайт' );
jr_define( '_JOMRES_WARNINGS_DANGERWILLROBINSON', 'ВНИМАНИЕ : ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', "Да се използва от системния администратор" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "Пакета е невалиден." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "Само един път можете да използвате безплатен пакет." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', " Статус <b>0:</b> Висящо плащане <b>1:</b> Създадено <b>2:</b> Отменено <b>3:</b> Край" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "Моят профил" );
jr_define( '_JOMRES_COM_YOURBUSINESS', 'Инфомация за бизнеса' );
jr_define( '_JOMRES_COM_YOURBUSINESS_NAME', 'име на бизнеса' );
jr_define( '_JOMRES_COM_YOURBUSINESS_VATNO', 'ДДС номер' );
jr_define( '_JOMRES_COM_YOURBUSINESSADDRESS', 'Номер на сграда' );
jr_define( '_JOMRES_COM_A_TAX_WARNING2', '<font color=red>Да се използва от системния администратор.</FONT>' );
jr_define( '_JOMRES_INVOICE_NUMBER', 'Номер на фактура ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Да се използва от системния администратор. <br/> 
<br/> 
Да се използва от системния администратор.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Съжаляваме това е невъзможно.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'МОжете да го направите.' );
jr_define( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Създайте типове гости. ' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Нямате цени.' );
jr_define( '_JOMRES_EDITINGMODE_ON', 'Редакция влючена' );
jr_define( '_JOMRES_EDITINGMODE_OFF', 'Редакция изключена' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Взимай различни депозити?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Брой дни в които се плаща целия депозит.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN', 'Изпращай мейли на друг адрес?' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Друг мейл.' );
jr_define( '_JOMRES_CONFIRMATION_EMAIL_SENT', 'Изпратен е мейл за потвърждаване.' );
jr_define( '_JOMRES_REALESTATE_TITLE', 'Листване на недвижим имот' );
jr_define( '_JOMRES_REALESTATE_YESNO', 'Този обект за продажба ли е?' );
jr_define( '_JOMRES_REALESTATE_YESNO_DESC', 'Изберете Да, ако продавате обекта.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Свържи се с агента' );
jr_define( '_JOMRES_INVOICE_MARKASPAID', 'Маркирай платена фактура' );
jr_define( '_JOMRES_INVOICE_MARKEDASPAID', 'Фактурата е маркирана като платена' );
jr_define( '_JOMRES_APIKEY_REMAKE', 'Направи нов АПИ ключ' );
jr_define( '_JOMRES_AUTOTRANSLATE_TITLE', 'Използвай Гугъл за превод?' );
jr_define( '_JOMRES_AUTOTRANSLATE_DESC', 'Да се използва от системния администратор.<br/>' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Системата да бъде настроена за продажда на само един обект?' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Иделано за листване на един обект и взимаме на резервации за него.<br/>' );
jr_define( '_JOMRES_HTMP_PURIFIER', 'ХТМЛ пречиствател?' );
jr_define( '_JOMRES_HTMP_PURIFIER_DESC', 'Да се използва от системния администратор.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Балансово плащане' );
jr_define( '_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Баланс' );
jr_define( '_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> for more information on this subject.' );
jr_define( '_JOMRES_SUPPORTKEY', 'Лиценз' );
jr_define( '_JOMRES_SUPPORTKEY_DESC', 'Лицензен ключ.' );
jr_define( '_JOMRES_PERSONAL_DISCOUNT', 'Персонална отстъпка' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Ограничи регистрирането на обекти до 1 държава?' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Ясно е.' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Обектите се намират в тази държава : ' );
jr_define( '_JOMRES_JQUERYTHEME', 'Jquery тема' );
jr_define( '_JOMRES_JQUERYTHEME_DESC', 'Избери jquery тема по подразбиране.' );
jr_define( '_JOMRES_PROPERTYNOTOUBLISHED', 'Обекта не е наличен.' );
jr_define( '_JOMRES_REVIEWS', 'Отзиви' );
jr_define( '_JOMRES_REVIEWS_TITLE', 'Заглавие на ревюто' );
jr_define( '_JOMRES_REVIEWS_DATE', 'поствано на ' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS', 'Все още няма отзиви' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Напиши първи отзив' );
jr_define( '_JOMRES_REVIEWS_IAGREE', 'Съгласен съм с отзива' );
jr_define( '_JOMRES_REVIEWS_IDISAGREE', 'Не съм съгласен с отзива' );
jr_define( '_JOMRES_REVIEWS_AVERAGE_RATING', 'Рейтинг: ' );
jr_define( '_JOMRES_REVIEWS_TOTAL_VOTES', 'Общо гласове:' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW', 'Добави нов отзив.' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Трябва да сте регистриран потребител за да напишете отзив.' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY', 'Споделето мнението си за обекта : ' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Този клиент ни сподели : ' );
jr_define( '_JOMRES_REVIEWS_PROS', 'Плюсове: ' );
jr_define( '_JOMRES_REVIEWS_CONS', 'Минуси: ' );
jr_define( '_JOMRES_REVIEWS_SUBMITTEDDATE', 'Изпратено на: ' );
jr_define( '_JOMRES_REVIEWS_ALREADYREVIEWED', 'МОжете да правите ревю на обект само веднъж.' );
jr_define( '_JOMRES_REVIEWS_CANNOTREVIEW', 'Не можете да споделите ревю на този сайт.' );
jr_define( '_JOMRES_REVIEWS_CLICKTOSHOW', 'Виж отзиви' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' гости са съгласни с това ревю. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' гости не са съгласни с това ревю.' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' гост е съгласен с това ревю. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'гост не е съгласен с това ревю.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Благодарим, че споделихте мнение.' );
jr_define( '_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Вие вече сте дал мнение по този въпрос.' );
jr_define( '_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Моля, попълнете всички полета.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Моля, обобщете ревюто като поставите заглавие' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Моля, поместете по-изчерпателно ревю.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Моля споделете плюсовете' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Моля споделете минусите' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Рейтинг за персонала' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Рейтинг за местоположението' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Рейтинг за чистотата' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Рейтинг за обекта' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Рейтинг качество/цена' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Рейтинг за услугите' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Обобщение на ревюто' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'По-подробно' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Благодарим, че изпратихте ревюто.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Благодарим, че изпратихте ревюто.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_CONTROL', 'Използвайте функционалността за ревютата?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Автоматично публикувай ревюта?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Изберете Да.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE', 'тестов режим на ревютата?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Изберете Не.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'За да визуализирате ревюта моля влезте в съответния обект.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Брой непубликувани ревюта' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Общ брой ревюта' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Публикувай или отмени ревю' );
jr_define( '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Изтрий ревю' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW', 'Отнеси се към нас относно ревю' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Репорти за ревюта' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Моля въведете репорт' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Споделете ако имате притеснения относно определено ревю.' );
jr_define( '_JOMRES_REVIEWS_SUBMIT', 'Изпрати' );
jr_define( '_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Репорта е създаден от ' );
jr_define( '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Репортите се създават от потребители, които не са съгласни с определено ревю.' );
jr_define( '_JOMRES_REVIEWS_RATING', 'Рейтинг (1 = много лошо 10 = отлично) ' );
jr_define( '_JOMRES_REVIEWS_RATING_1', 'Гостоприемство  ' );
jr_define( '_JOMRES_REVIEWS_RATING_2', 'Локация ' );
jr_define( '_JOMRES_REVIEWS_RATING_3', 'Чистота ' );
jr_define( '_JOMRES_REVIEWS_RATING_4', 'Настаняване ' );
jr_define( '_JOMRES_REVIEWS_RATING_5', 'Струва ли си парите ' );
jr_define( '_JOMRES_REVIEWS_RATING_6', 'Услуги ' );
jr_define( '_JOMRES_REVIEWS_REVIEWED_BY', 'Ревю от : ' );
jr_define( '_JOMRES_REVIEWS_CLICKTOHIDE', 'Скрий отзиви' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Показвай резервационната форма на страницата с инфото на обекта?' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Преценете дали това искате.' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE', 'Цените са крайни?' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Ако цената включва такси, тогава изберете Да.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Допълнителни услуги:' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Да се избира от системния администратор.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Да се избира от системния администратор.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Старт' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Край' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Тарифа' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Задай тарифи' );
jr_define( '_JOMRES_PARTNERS_TITLE', 'Партньори' );
jr_define( '_JOMRES_CALENDAR_TODAY', 'Днес' );
jr_define( '_JOMRES_CALENDAR_PREV', 'Предишен' );
jr_define( '_JOMRES_CALENDAR_NEXT', 'Следващ' );
jr_define( '_JOMRES_CALENDAR_RTL', 'грешен' );
jr_define( '_JOMRES_ROOMALLOCATIONS_ROOM', 'Стая ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_GUESTS', 'гости. ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Това е начина, по който разпределихме зададения брой гости в избраната стая(и). Може да промените разпределението директно на място в хотела при настаняване.' );
jr_define( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Непубликуван обект" );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'По подразбиране след търсене' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Подредбата.' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Като падащо меню?' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE', 'Стил на листата със стаи' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_DESC', 'Да се избира от системния администратор' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Класик' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Типове стаи' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', 'Проверява заетостта' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Подготвя налични стаи' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Клакулира' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Край на ъпдейта' );
jr_define( '_JOMRES_COM_CALENDAR_STARTDAY', 'Ден с който започва седмицата' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Само гости могат да дават ревю?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Ограничете ревютата до гости на обекта.' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'На стая' );

jr_define( '_JOMRES_MAX_GUESTS_PER_ROOM', 'Гости в стая : ' );
jr_define( '_JOMRES_MAX_GUESTS_PER_BOOKING', 'Гости в резервацията : ' );
jr_define( '_JOMRES_NUMBER_OF_ROOMS', 'Брой стаи' );

jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Цена по подразбиране' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "Само за нови тарифи" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW', "Години да показва" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "Показва зададения брой години" );

jr_define( '_JRPORTAL_MONTHS_LONG_0', 'Януари' );
jr_define( '_JRPORTAL_MONTHS_LONG_1', 'Февруари' );
jr_define( '_JRPORTAL_MONTHS_LONG_2', 'Март' );
jr_define( '_JRPORTAL_MONTHS_LONG_3', 'Април' );
jr_define( '_JRPORTAL_MONTHS_LONG_4', 'Май' );
jr_define( '_JRPORTAL_MONTHS_LONG_5', 'Юни' );
jr_define( '_JRPORTAL_MONTHS_LONG_6', 'Юли' );
jr_define( '_JRPORTAL_MONTHS_LONG_7', 'Август' );
jr_define( '_JRPORTAL_MONTHS_LONG_8', 'Септември' );
jr_define( '_JRPORTAL_MONTHS_LONG_9', 'Октомври' );
jr_define( '_JRPORTAL_MONTHS_LONG_10', 'Ноември' );
jr_define( '_JRPORTAL_MONTHS_LONG_11', 'Декември' );

jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS', "Процес на пропърти мениджмънт" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', "Различни опции." );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', "Под наем" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "Избери опцията под наем ако резервираш стаи в обекта" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "Недвижими имоти" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "За агенции и т.н" );

jr_define( 'JOMRES_COM_A_MINIMALCONFIG_DESC', 'Да се избира от системния администратор.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Изберете опция за резервацията' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Да се избира от системния администратор.' );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Системата в сайта" );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Системата на цял екран" );
jr_define( '_JOMRES_COM_TIMEZONE_SWITCHER', "Показвай часова зона?" );

jr_define( '_JOMRES_PARTNER_DISCOUNT', "Отстъпка за партньори " );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "Търси потребител" );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Когато изберете потребител той автоматично става партньор." );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "Настоящи партньори" );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Изберете партньор." );

jr_define( '_JOMRES_PARTNER_SHOW_TITLE', "Парньор :" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Търси обект" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Когато изберете обект той автоматично ще бъде нанесен към съответния партньор." );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Настоящи обекти" );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Изберете обект за да редактирате отстъпките за партньора." );

// 4.6
jr_define( '_JOMRES_SUSPENSIONS_TITLE', "Отхвърлен? <br/>(натисни за Отхвърляне на мениджъра, всички негови обекти ще бъдат свалени от публикация ) " );
jr_define( '_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', "Само Super Property Manager не могат да се отхвърлят." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "Профила Ви е отхвърлен." );
jr_define( '_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Отхвърлен мениджърски профил" );
jr_define( '_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Активиран мениджърски профил" );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Засега сте отхвърлени." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Отново активен профил." );
jr_define( '_JOMCOMP_MYUSER_REMOVE', 'Премахни фаворита' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE', 'Архив на резервациите' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Да се избира от системния администратор.' );
jr_define( '_JOMRES_MY_ACCOUNT_EDIT', 'Редактирай профил' );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', "Търси потребители" );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Ако изберете потребител Вие автоматично ще го направите Мениджър." );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "Настоящи мениджъри" );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', "Изберете мениджър." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Търси по брой гости" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Падащо меню" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Търси по звезди" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Падащо меню" );
jr_define( '_JOMRES_SEARCH_GUESTNUMBER', 'Брой гости' );
jr_define( '_JOMRES_SEARCH_STARS', 'Брой звезди' );

jr_define( '_JRPORTAL_INVOICES_COMMISSION_TITLE', "Фактури за комисионни" );
jr_define( '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "Брой обекти" );

jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Малки тъмнейли ширина (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Малките се използват в пропърти листа.' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Малки тъмнейли височина (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Средни тъмнейли ширина (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Средни тъмнейли височина (px).' );

jr_define( '_JOMRES_TOUCHTEMPLATES', 'Преводи' );

jr_define( '_JRPORTAL_ROI_TAB', "РОИ" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE', "Комисионни?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Изберете Да за комисионни към мениджъра." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "Резервациите на мениджъра създават фактури за комисионни?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "Ясно е какво прави" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', "Нова фактура за комисионна" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', "Внимание, натиснете върху линка за да разгледате фактурата, трябва да се логнати в системата." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "Отхвърли мениджъри с Висящи фактури?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "Трешхолд авто съспендване" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "Брой дни през които мениджъра трябва да покрие задълженията си или се Отхвърля от системата и обектите му също." );


//4.7.2
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT', 'Language context' );
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory. Note that if you create a new property type, then a copy of the current language file is made in a subdirectory under /jomres/language with a name that reflects the new property type\'s description.' );

// 4.7.3
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config' );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Solo, Silver or Gold. Users of the free, core system will not be able to take full advantage of the features that they enable.' );


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

jr_define( '_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.' );
jr_define( '_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.' );

jr_define( '_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Active property" );
jr_define( '_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "Change your active property" );
jr_define( '_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property." );

jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "Alternate SMTP Settings" );
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

jr_define( '_JOMRES_MYPROPERTIES', 'My businesses' );


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

jr_define( '_JOMRES_ADDTOSHORTLIST', "Add to shortlist" );
jr_define( '_JOMRES_REMOVEFROMSHORTLIST', "Remove from shortlist" );
jr_define( '_JOMRES_VIEWSHORTLIST', "View your shortlist" );

jr_define( '_JOMRES_COOKIEPOLICY_TITLE', "Cookie Policy" );
jr_define( '_JOMRES_COOKIEPOLICY_DESC', "EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
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

jr_define( '_JOMRES_NOTHINGINSHORTLIST', "You haven't added any items to your shortlist." );

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
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /jomres/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /jomres/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /jomres/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /jomres/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that' ); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

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
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE',"If you upload multiple images as the \"Main property image\" only the first of those images will be used.");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW',"View your image");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE',"Delete image");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD',"Upload image");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES',"Feature and Room type images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES',"Room types images");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES',"Property feature images");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL',"Upload all files");

$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );

jr_define('END_TOUR' , "Close" );

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE' , "Welcome to your Property" );
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT' , "Welcome to your Dashboard. This is your Main Menu. To view your property as your guests will see it, click on Dashboard, then Preview." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE' , "This is your property name" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT' , "Whenever you are logged in as a property manager, you will always have an Active property, the name of which you can see here. This is the property you are working on. Please remember that you can only work on one property at a time, you can't have two tabs open in your browser and work on two different properties simultaneously." );

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE' , "This is the timezone dropdown selector." );
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT' , "This is useful if you are in a different timezone to your server. It helps to keep your midnight and the server's midnight in sync." );

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE' , "This is the language selector." );
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT' , "You can change your current language by using this selector. This is useful if you want your property description to be available in several languages. You can go to the Property Details page and enter the description in language A, then use this selector to change to language B. Now, if you go to the Property Details setting page you can enter your description in language B." );

jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE' , "This is the Editing Mode selector." );
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT' , "You can customise the labels on this page by switching on the Editing Mode. Once enabled labels that you can customise will have a dotted underline. Click that text and you will see a popup where you can enter the new text. This also works for different languages, so you can change the label in language A, then switch to language B and change the text again to something that suits your taste." );

jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE' , "This is content area." );
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT' , "In this area you will see the content that you are working on. In the dashboard you will see a calendar, you can hover over any booking to see the guest's name, or click a date to be taken to the booking form for this property." );

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
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT' , "The Media Centre allows you to easily upload images of your property. By default you can upload a main property image (in fact, you can upload more, but only the first in the list will be used), an unlimited number of images to be shown in the slideshow, and an unlimited number of images for each room." . jr_gettext("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS",_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS,false) );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE' , "Resource picker." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT' , "This is the resource picker. It allows you to choose what sort of resource you're uploading images for (e.g. Slideshow images or rooms) and if it's a room, then after you choose Rooms you'll be given the option to select which room you want to upload images for in another dropdown, next to it. This allows you to upload multiple images for each individual room, if you wish. Note, room image uploading only applies to properties like Hotels, B&Bs etc. Villas and Apartments will not have this option." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE' , "Existing images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT' , "This column shows the images that have already been uploaded. You can choose then to either view the image, or delete it. Every time you change the resource time this column is updated to show the images for that particular resource." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE' , "Upload controls." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT' , "You have several controls here. You can use the Add Images button to choose the images you want to upload, or you can drag and drop images into the box underneath. The Clear button clears the list of images ready for uploading. Once you've selected the images for upload, you can either upload them individually, or all at once." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE' , "Selected images." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT' , "This column shows the images that are ready for upload, or that you've uploaded since you visited this page. " );

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE' , "Page information end." );
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT' , "That's the end of this page's help information. If you have any futher questions, please do not hesitate to contact us. " );

jr_define('PRODUCT_TOUR_PAGE_INFORMATION' , "HELP" );
