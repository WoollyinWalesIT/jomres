<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.0
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Быстрое бронирование');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Показать учетную запись');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Общие настройки');
jr_define('_JOMRES_COM_MR_BACK', 'Назад');
jr_define('_JOMRES_COM_MR_YES', 'Да');
jr_define('_JOMRES_COM_MR_NO', 'Нет');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Новый тариф');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Новый объект размещения');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Новый гость');
jr_define('_JOMRES_COM_MR_SAVE', 'Сохранить');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Имя');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Заезд');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Выезд');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Имя пользователя');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Уровень доступа');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Сообщение о смене пользователя');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Заказ');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Редактировать заказ');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Заезд/Выезд');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Гость');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Номер');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Оплата');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Имя');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Фамилия');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Детали заказа');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Оговорка по деталям заказа');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Отмените заказ');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Номер дома');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Улица');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Город');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Почтовый индекс');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Телефон');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобильный');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Адрес электронной почты');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Гость зарегистрирован');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Оплата не внесена');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Отменить');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Заказ отменен');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Дата заезда');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Пояснение типа заказа');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Закрытый');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Служба приема');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Интернет');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Наименование номера');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Номер');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Этаж');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Номер для людей с ограниченными возможностями');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Максимальное количество человек');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Сокращенное наименование номера');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Тип номера');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Особенности номера');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Внесенная оплата');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Внести оплату');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Общая сумма к оплате');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Код оплаты');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Номер заказа');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Сумма оплаты');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Сообщение о внесении оплаты');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Объект размещения');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Название объекта размещения');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Тип номера');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Редактировать информацию о госте');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Имя');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Фамилия');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Дом');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Улица');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Город');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Почтовый индекс');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Телефон');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Мобильный телефон');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Номер факса');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Наименование карточки');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Срок пребывания');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Общий счет');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Дополнительно');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Номер');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Особенности номера');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Типы номеров');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Объект размещения');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Особенности объекта размещения');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Ссылка');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Тип');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Название');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Количество');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Этаж');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Максимальное количество человек');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Особенности');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Текст-ссылка на особенности объекта размещения');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Ссылка на особенности номера');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Ввести особенности номера');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Вставить особенности номера');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Обновить особенности номера');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Ссылка на типы номеров');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Сокращенное наименование типов номеров');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Типы номеров');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Вставить типы номеров');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Текст-ссылка на типы номеров');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Имя');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Улица');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Город');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Область');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Страна');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Почтовый индекс');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Телефон');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Факс');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Электронная почта');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Вебсайт');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Особенности');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Объект размещения обновлен');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'ссылка на особенности объекта размещения');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Сокращенное название особенностей объекта размещения');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Детали объекта размещения');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Особенности объекта размещения обновлены');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Наименование тарифов');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Тарифная ставка');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Что входит в цену');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Действительно от');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Действительно по');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Цена за сутки');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Минимальное количество дней');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Максимальное количество дней');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Минимальное количество человек');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Максимальные количество человек');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Тип номера');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Пропустить PPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Учесть уикэнд');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Текст-ссылка на тарифы');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Копировать текст-ссылку');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Удалить тарифы');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Редактировать наименование');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Сообщение о сохраненном заказе');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Зарегистрировать гостя');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', '\\Выписать гостя');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Список заказов');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Приборная панель');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Управление информацией о госте');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Управление объектом размещения');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Проверить наличие');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Имя');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Фамилия');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Номер дома');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Улица');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Город');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Почтовый индекс');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Номер телефона');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобильный номер');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Запрашиваемого номера нет в наличии');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Благодарим за ваш заказ. Приятного отдыха! Внимание! Предварительный заказ сформирован. Необходимо дождаться нашего письма-подтверждения о заказе.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Наименование заказа');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Гость зарегистрирован');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Выписать гостя');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Дополнения');
jr_define('_JOMRES_COM_A_TARIFFS', 'Тарифы');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Загрузка файла');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Один человек');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Один человек детали');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Цена за одного человека');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Оплата в процентном отношении');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Процент оплаты');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Стоимость оплаты');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Один человек');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Тарифы на одного человека');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Размер файла');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Максимальный размера файла');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Заказано');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Детали заказа');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Подтверждение согласия с правилами');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', 'Отмена брони, при отмене заказа взимается штраф ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Дата заезда до 14 дней');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Распечатать письмо-подтверждение');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Наименование счета');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Количество суток пребывания');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Стоимость за сутки');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Общий итог');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Распечатать счет');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Наименование дополнительной услуги в счете');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Описание дополнительной услуги');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Стоимость дополнительной услуги');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Описание прочих дополнительных услуг');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Сообщение о дополнительных услугах');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Загрузить изображение');
jr_define('_JOMRES_FILE_UPLOAD', 'Загрузка файла');
jr_define('_JOMRES_COM_A_ODDS', 'Разное');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Проверка ошибок');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Описание проверки ошибок.');
jr_define('_JOMRES_FILE_DELETE', 'Удалить файл');
jr_define('_JOMRES_FILE_DELETED', 'Файл удален');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Удалить номер');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Невозможно удалить номер');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Номер удален');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Удалить особенность номера');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Невозможно удалить эту особенность номера.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Особенность номера удалённая ');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Удалить');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Невозможно удалить эту особенность объекта размещения');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Особенность объекта размещения удалена ');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Удалить тип номера');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Тип номера удалëн');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Удалить объект размещения');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Объект размещения удален');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Вы не имеете право удалить данный объект размещения.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Ширина крупного изображения');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Перейти к карте');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Краткое описание');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Время');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Виды деятельности');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Подробное описание');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Аэропорты');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Другой транспорт');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Политика и правовые оговорки');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Адрес объекта размещения');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Посетители могут сделать заказ онлайн');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Описание возможности сделать заказ онлайн');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Заказы в установленные сроки');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Описание установленных сроков заказов');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Установленные сроки');
jr_define('_JOMRES_COM_A_BOOKING', 'Заказ');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Количество установленных сроков');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Одноместный номер');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Проверка заказа');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Подтвердить заказ');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Понедельник');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Вторник');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Среда');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Четверг');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Пятница');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Суббота');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Воскресенье');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'пн');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'вт');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'ср');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'чт');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'пт');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'сб');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'вс');
jr_define('_JOMRES_COM_A_AVLCAL', 'Наличие мест');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Цвет шрифта для текущей даты');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Цвет шрифта для дней при показе месяца');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Цвет шрифта для дней за пределами месяца');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Цвет фона клеток дней, когда объект размещения/номер доступен');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Цвет фона клеток дней за пределами месяца');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Цвет фона клеток для заказанных дней');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Цвет фона клеток для предварительно заказанных неоплаченных номеров');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Цвет фона клеток для прошлых дат');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Занято/Недоступно');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Доступно для заказов');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Цвет фона временных заказов');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Установленная дата заезда Да/Нет');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Описание установленной даты заезда Да/Нет');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'День установленной даты заезда');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Период пребывания (дни)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Календарь');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Описание календаря');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Номера в наличии');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Выберите нужные даты в календаре');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Закрытые даты');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Новые закрытые даты');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Удалить гостя из заказа');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Гость удален из заказа');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Невозможно удалить гостя');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Любой');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Календарный выходной формат');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Календарный входной формат');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Описание календарного выходного формата');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Установленный период пребывания при заказе на короткий срок');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Установленный период при коротком прерывании дней размещения');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Опубликовано');
jr_define('_JOMRES_COM_A_PAYPAL', 'PayPal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Аудиторский след');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Дата');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Пользователь (имя пользователя)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Фильтр дат');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Статус');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Ожидание заезда');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Заезд сегодня');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Постоялец');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Выезд сегодня');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Поздний выезд');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Незаезд');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Добавить номер');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Обновить номер');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Удалить номер');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Добавить особенности номера');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Обновить особенности номера');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Удалить особенности номера');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Добавить объект размещения');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Обновить объект размещения');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Удалить объект размещения');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Редактировать настройки объекта размещения');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Опубликовать объект размещения');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Добавить тариф');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Обновить тариф');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Добавить дополнительные услуги');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Зарегистрировать гостя');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Внесенная оплата');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Добавить гостя');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Обновить гостя');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Заказанный номер');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Добавить дополнительно');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Обновить дополнительно');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Удалить дополнительно');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Опубликовать дополнительно');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Закрытые даты');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Удалить закрытые даты');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Название дополнительно');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Описание');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Название');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Цена');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Сохранить обновления');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Текст-ссылка');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Удалить');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Модерировать дополнительно');
jr_define('_JOMRES_COM_A_EXTRAS', 'Дополнительно');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Описание дополнительно');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Помощь при бронировании дополнительно');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Начало закрытых дат');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Возобновление услуги закрытые даты');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Закрытые даты');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Ошибка');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Номера включённые в закрытые даты');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Нет закрытых дат');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Количество звезд');
jr_define('_JOMRES_COM_A_RESET', 'Сброс');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'PayPal отмена');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Поиск здесь');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Символ валюты');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Код валюты');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Подробно');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Ограничить предварительные заказы Да/Нет');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Описание ограничения предварительных заказов Да/Нет');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Лимит дней предварительных заказов');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Нпименование гостиничного сбора');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Гостиничный сбор');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Установленный гостиничный сбор');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Налог в процентном соотношении');
jr_define('_JOMRES_COM_A_EUROTAX', 'Евроналог');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Евроналоговый процент');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Архивировать');
jr_define('_JOMRES_FRONT_TARIFFS', 'Тарифы');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Наименование тарифов');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Описание тарифов');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Тип номера');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Действительно от');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Действительно по');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'PPPN тарифы');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Тариф за сутки');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Не включая уикэнды');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Минимум дней');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Максимум дней');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Минимум человек');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Максимум человек');
jr_define('_JOMRES_FRONT_PREVIEW', 'Предварительный просмотр');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Режим редактирования вкл.');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Обновлённый текст пользователя');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Редактировать язык');
jr_define('_JOMRES_FRONT_PTYPE', 'Тип объекта размещения');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Список типов обхектов размещения');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Редактировать типы объектов размещения');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Тип объекта размещения');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Описание типов объектов размещения');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Сохраненные типы объектов размещения');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Удалено');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Остаток к оплате');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Нет дополнительных услуг');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Оплата');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Полная сумма');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Настройки');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Описание настроек');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Показать месяцы');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Описание показываемых месяцев');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Список платежных систем');
jr_define('_JOMRES_COM_A_CANCEL', 'Отменить');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Описание закрытых дат');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Причина');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Использовать платежную систему');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Способ оплаты');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Активировать платежную систему');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Обновить плагин');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Вставить плагин');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Ссылка на фотогалерею');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Внешняя ссылка');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Описание ссылки на фотогалерею');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Редактировать кредитную карточку');
jr_define('_JOMRES_COM_A_EDITICON', 'Редактировать размер изображения');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Демонстрации слайдов');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Ссылка на демонстрацию слайдов');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Показать действующую демонстрацию слайдов');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Демонстрация слайдов');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Показать ссылку на тарифы');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Диалоговые окна разрешены');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Загрузить изображения');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO', 'Информация о загрузке изображений');
jr_define('_JOMRES_A_TABS_MISC', 'Прочие вкладки');
jr_define('_JOMRES_A', 'Конфигурация сайта');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Глобальные особенности объекта');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'Информация о глобальных особенностях объекта');
jr_define('_JOMRES_A_ICON', 'Иконка');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Глобальная функция поиска');
jr_define('_JOMRES_FRONT_NORESULTS', 'Безрезультатно');
jr_define('_JOMRES_AREYOUSURE', 'Вы уверены, что вы желаете сделать это?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Забронировать номер');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Забронировать объект');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Показать действующие тарифы');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Показать адрес');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Показать детали');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Показать номера');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Наименование показываемого адреса');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Наименование показываемых деталей');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Наименование показываемых номеров');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Простой тариф');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Средние величины');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Модель тарифов');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Описание моделей тарифов');
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Показать исходную дату');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Описание показываемой исходной даты');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Список объектов размещения');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Описание списка объектов размещения');
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Стиль формата даты');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Опубликовать');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Снять с публикации');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Глобальные типы номеров');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Информация о глобальных типах номеров');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Цвет фона');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Конфигурации стран');
jr_define('_JOMRES_JAVASCRIPT_', 'Ява-скрипт');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Регистрация пользователем');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Описание регистрации пользователей');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Инструкции \шаг 2.2');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Создать объект размещения');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Календарь сначала года');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Описание календаря сначала года');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Количество доступных номеров');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Назад к ссылке деталей объекта размещения');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Типы номеров');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Предел случайного поиска');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Показывать ссылку о валютах на google ');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Текст конвертации валюты');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Разрешить редактор html');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Инструкции');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Скрипт инструкций');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Банковские реквизиты');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Описание банковских реквизитов');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Доступность');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Описание доступности');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Скрипт описания доступности');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Дополнительные услуги');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Описание дополнительных услуг');
jr_define('_JOMRES_COM_PERDAY', 'За сутки');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Адрес');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Описание адреса');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Доступные номера');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Выбранные номера');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', 'Самая ранняя дата заезда');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Тарификация за номер');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Проживание');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Тарификация дополнительных услуг');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Тарификация налога');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Тарификация скидки');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Итог тарификации');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Промежуточный итог');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Нажать на заголовок');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Отменить действие');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Типы клиентов');
jr_define('_JOMRES_VARIANCES_TYPE', 'Тип');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Тип клиента, напр. возраст Детей 5-10, или Студент ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Примечания');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Примечания применимые к данному типу клиента');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Максимум');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Максимальное число дпнного типа клиента, который может быть отобран в форме заказа');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Является процентом');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Процент от базисной величины, вычисленной для номера');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Добавить разницу');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Да/Нет к данному типу клиента');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Разница');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Количество разницы');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Изменить заказ типа клиента');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Удалить тип клиента');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Вставить тип клиента');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Обновить тип клиента');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Обновлённый тип клиента');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Показать ссылку на список номеров');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Показывать только доступные даты календаря');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Описание показываемых только доступных дат календаря');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Минимальный интервал между датой заезда и исходной датой');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Описание минимального интервала между датой заезда и исходной датой');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Показать № номера');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Название показываемого номера');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Показать название тарифа');
jr_define('_JOMRES_ORDER', 'Заказ');
jr_define('_JOMRES_REQUIREDFIELDS', 'Необходимые поля для заполнения');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Дни перед первым бронированием');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Описание дней перед первым бронированием');
jr_define('_JOMRES_DTV', 'Вариации типов дат');
jr_define('_JOMRES_DTV_DOW', 'День недели');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Первый тип гостя по умолчанию');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Описание первого типа гостя по умолчанию');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Только зарегистрированные пользователи могут делать заказы онлайн');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Необходимо зарегистрироваться, чтобы сделать заказ онлайн');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Цвет шрифта текущего заказа');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Границы уикэнда');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Клавиша заказа');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Клавиша закрытых дат');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Округлить сумму оплаты');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Размер оплаты');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Тарифные цены сохранены как еженедельные числа');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Описание тарифных цен сохраненных как еженедельные числа');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Тариф за номер в неделю');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Фиксированные даты заездов повторяются');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Описание повторяющихся фиксированных дат заездов');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Дата заезда не подтверждено');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Дата отъезда не подтверждено');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Слишком маленький интервал пребывания 1');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Слишком маленький интервал пребывания 2');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Неверный тип гостя');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Выбрать количество гостей');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Вы выбрали слишком много промежуточных тарифов');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Вы выбрали больше номеров, чем количество гостей');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Слишком много гостей для доступных койкомест');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Выбрать больше номеров');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Выбрать номер');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Имя требуется');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Фамилия требуется');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', '№ дома требуется');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Улица требуется');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Город требуется');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Область требуется');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Почтовый индекс требуется');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Страна требуется');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Номер телефона требуется');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Мобильный требуется');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Адрес электронной почты требуется');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Доступны свободные номера');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Подобранных номеров нет');
jr_define('_JOMRES_BOOKING_NUMBER', '№ заказа');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Фон окна сообщения');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Выгрузить данные шаблона');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Описание выгруженных данных шаблона');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Процент');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Описание процента');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Список предела доступных номеров');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Описание списка предела доступных номеров');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Свободных номеров нет');
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Заказать сейчас');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Глобальный способ редактирования');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Описание глобального способа редактирования');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Глобальная валюта Да/Нет');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Описание глобальной валюты Да/Нет');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Символ глобальной валюты');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Компонент сгруппирован');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Описание сгруппированного компонента');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Только по выходным');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Выходные дни');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Описание выходных дней');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Выбрать страну');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Сохранить перед закачиванием');
jr_define('_JOMRES_TARIFFSFROM', 'Тарифы от');
jr_define('_JOMRES_SEARCH_ALL', 'Все');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Страна поиск');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Регион поиск');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Город поиск');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Особенности информация');
jr_define('_JOMRES_SEARCH_BUTTON', 'Поиск');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Условия поиска');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Знак описание');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Информация о доступных номерах');
jr_define('_JOMRES_SEARCH_PTYPES', 'Перечислить типы объекта размещения');
jr_define('_JOMRES_SEARCH_RTYPES', 'Перечислить типы номеров');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Сортировка заказов по умолчанию');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Сортировка заказов по названиям объектов недвижимости');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Сортировка заказов по регионам объектов недвижимости');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Сортировка заказов по городам объектов недвижимости');
jr_define('_JOMRES_SORTORDER_STARS', 'Сортировка по количеству звезд');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Детали объекта размещения');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Форма бронирования');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Обновить адрес');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Повторная проверка доступности номеров в интерфейсе');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Скрипт для повторной проверки доступности номеров в интерфейсе');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Изменить дополнительные услуги в интерфейсе');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Изменить выбор номеров в интерфейсе');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Обновить адрес в интерфейсе');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Введен неверный адрес в интерфейсе');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Изображение номера');
jr_define('_JOMRES_CURRENCYFORMAT', 'Формат валюты');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Вкладка параметров поиска');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Доступные лог-файлы');
jr_define('JOMRES_COM_A_MESSAGE', 'Сообщение');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Обычный');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Продвинутый');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Типы тарифов');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Режим настройки тарифов');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', 'Описание режима настройки тарифов<br/>
<br/><br/>
Есть три варианта настройки своих тарифов.<br/>
Обычный (Normal mode): У вас будет один тариф на каждый тип номера, который действителен в течение следующих 10 лет.<br/>
Детальный (Micromanage): Вы можете изменить цену за каждый день за каждый номер за каждый тип недвижимости. <br/>
Продвинутый: <br/> Режим регулирования тарифов. <br/>
<br/>
Различные тарифные режимы позволяют вам выбрать способ настройки тарифов из того, что подходит вам лучше всего.<br/>
Обычный режим является наиболее упрощенным, это проще понять, так как это будет перекрестной ссылкой на номера и тарифы номеров или типы свойств и позволит настроить номера и цены на одной странице.<br/>
Детальное управление позволяет изменять уровень ставок на ежедневной основе без необходимости управления тарифов целиком, это делается путем перекрестных ссылок на разные тарифы друг с другом. Это есть в ряде тарифов, которые созданы для вас с охватом периода времени, но вы можете ставить тарифы друг над другом.<br/>
Расширенный режим позволяет создать номера и связать его с типом номера. Используя этот метод можно ставить тарифы друг над другом, например номер типа дабл может иметь один тариф за кровать и завтрак, а другой за кровать, завтрак и ужин. Усовершенствованный способ требует немного больше внимания к деталям, т.к. здесь есть варианты настроек, которых нет в других режимах <br/>
<br/>
Потому что нормальные и регламентации режимов требует определенного набора номера и тарифы для тарифного режима работы системы может потребоваться восстановить некоторые данные, чтобы сделать текущий тариф конфигураций, совместимых с текущей тарифной режим редактирования.<br/>
<br/>
Normal -> Advanced. No change. Действующие тарифы сохраняются.<br/>
Normal -> Micromanage. Все существующие тарифы будут удалены.<br/>
Advanced -> Normal. Все существующие тарифы будут удалены.<br/>
Advanced -> Micromanage. Все существующие тарифы будут удалены.<br/>
Micromanage -> Advanced. Все существующие перекрестные ссылки между тарифами удаляются, но сами тарифы остаются.<br/>
Micromanage -> Normal. Все существующие перекрестные ссылки и тарифы будут удалены.<br/>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Детали номеров в списке номеров объекта размещения');
jr_define('JOMRES_PROPERTYTYPE', 'Тип объекта размещения');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Максимальное количество человек в номере');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Максимальное количество человек в заказе');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Добавить заметку о заказе');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Изменить заметку о заказе');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Удалить заметку о заказе');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Посмотреть заметки о заказе');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Запись контрольных данных');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Редактировать запись контрольных данных');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Запись контрольных данных удалена');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Список заказов');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Мои заказы');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Посмотреть заказы');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Посмотреть избранное');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'В избранном пока нет объектов для просмотра');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Тип объекта размещения');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Разумная цена');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Режим активен');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Описание режима разумная цена');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Регулировка ценообразования');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Границы от сегодняшней даты до даты заезда');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Процент занятых номеров 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Процент занятых номеров 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Процент занятых номеров 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Процент занятых номеров 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Скидка');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', 'Была предоставлена скидка');
jr_define('_JOMCOMP_WISEPRICE_TO', 'Предел разумной цены');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Цена номера без скидки');
jr_define('JOMRES_COM_A_MAPSKEY', 'API Ключ Google');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Получить ключ на гугл карту https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key<a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Панель управления');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Активно');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Описание режима активно');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Предел');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Описание предела');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Скидка');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'Описание скидки');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Информация о заказе 1');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Информация о заказе 2');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Предварительный список объектов размещения');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', 'Промежуточный список объектов размещения');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', 'Как минимум');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', 'Опубликовать');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Подробная информация о тарифах');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Описание подробной информации о тарифах');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Минимизировать параметры конфигураций');
jr_define('_JOMCOMP_AMEND', 'Изменение объекта размещения');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Выберать объект размещения');
jr_define('_JOMCOMP_AMEND_HEADER', 'Заголовок');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Оплата внесена');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Оплата не внесена');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Приоритетный итог');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Приоритетная оплата');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Отменить');
jr_define('_JRPORTAL_CPANEL', 'МЛ. портал панели управления');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Настройка по умолчанию ставки комиссии');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Описание настроек по умолчанию комиссионного вознаграждения');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Список комиссионных тарифов');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Комиссия тарифы');
jr_define('_JRPORTAL_CRATE_TITLE', 'Заголовок');
jr_define('_JRPORTAL_CRATE_TYPE', 'Тип');
jr_define('_JRPORTAL_CRATE_VALUE', 'Стоимость');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Код валюты');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Список объектов размещения');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Имя объекта недвижимости');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Адрес объекта недвижимости');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Условне обозначение');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Комиссия тарифы');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Ставка комиссии');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Список заказов');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Идентификационный № объекта недвижимости');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Идентификационный № счёта');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Итог заказа');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Дата архивирования');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Описание');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Дальнейшее описание');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Удалить дополнительное значение 1');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Итого');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'Количество ночей проживания');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'За номер');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Итого за доп. услуги ');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Отчет по цене');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Внимание');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Заголовок');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Изменить текст');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Внести изменения');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Особенности');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Я подтверждаю достоверность сведений указанных выше и принимаю условия');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'С человека за ночь');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'Из');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Начало PN');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Предыдущий');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Следующий');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Конец');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Результаты');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Обратите внимание, что это не форма бронирования, а вы посылаете E-mail. <br/> Пожалуйста, введите сообщение, которое вы хотите отправить ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Связаться с отелем');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Тема');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Спасибо за ваш запрос, ваше сообщение отправлено менеджеру объекта размещения, а копия вам. Менеджер ответит вам в ближайшее время.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', 'Касательно');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Запрос');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Пожалуйста, выберите необходимые номера из списка справа');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Минимум номеров уже выбран');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Описание минимального количества номеров');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Максимальное количество номеров');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Описание максимального количества номеров');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Изменить номер');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Заказы не доступны');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Забронировано на четверть');
jr_define('_JOMRES_AVLCAL_HALF', 'Наполовину забронировано');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Забронировано на три четверти');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Полностью забронировано');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'В неделю');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'В день');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'За бронь');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'С человека за бронь');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'С человека в день');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'С человека в неделю');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'В день (минимум дней)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'В день за номер');
jr_define('_JOMRES_REGISTRYREBUILD', 'Перестроить реестр');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'Примечания перестройки реестра');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Реестр успешно восстановлен');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Произошла ошибка при перестройке реестра');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Диапазон цен');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Вы ещё не сделали никаких заказов!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Типы объектов размещения');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Информация о типах объектов размещения');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Ваш запрос...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Предел списка объектов размещения');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Описание предела списка объектов размещения');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Встроенная функция поиска');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Описание интегрированной функции поиска');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Неактивировано');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Использовать колонки');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Выбрать выпадающий комбинированный поиск региона');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Поиск по названию объекта размещения');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Описание поиска по названию объекта размещения');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Показать как выпадающей список названия объектов размещения');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Город/регион');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Показать как выпадающей список регионы');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Поиск по типу объекта размещения');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Показать как выпадающей список типы объектов размещения');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Поиск по типу номера');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Показать как выпадающей список типы номеров');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'По особенностям');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Показать как выпадающей список по особенностям');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Поиск по описанию');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Поиск по доступности');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Поиск по ценовым диапазонам');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Описание');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Ценовой диапазон с приростом');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Описание');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Описание случайного предела');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron наименование');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Описание');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Мгновенный запуск');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Способ');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Описание');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Отображение журнала в браузере');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Описание');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Ведение журнала отключено');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Описание');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Ведение подробного журнала');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Описание');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Наименование');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Настраиваемые поля');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Описание настраиваемых полей');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Имя поля (без пробелов)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Значение по умолчанию');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Описание');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Обязательно');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Количество дополнительных услуг');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Описание');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Наименование налоговых ставок');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Код налоговых ставок');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Описание налоговых ставок');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Невозможно удалить данную налоговую ставку.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Ставка');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Наименование');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Не оплачено');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Оплачено');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Отменено');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'В ожидании');
jr_define('_JRPORTAL_INVOICES_USER', 'Пользователь');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Статус');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Повышеный');
jr_define('_JRPORTAL_INVOICES_DUE', 'К дате');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Взнос');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Общий остаток');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Текущая периодичность');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Текущий день месяца');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Код валюты');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Позиция');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Имя');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Описание');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Начальная цена');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Первоначальное Количество');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Начальная скидка');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Исходный итог');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Налоговый код');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Описание налога');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Налоговая ставка');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Override');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Показать мои счета');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Наименование купонов скидок');
jr_define('_JRPORTAL_COUPONS_DESC', 'Описание');
jr_define('_JRPORTAL_COUPONS_CODE', 'Код купона скидок');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Действителен с');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Действует до');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Сумма скидки');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Скидка-процент');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Только для номера');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Если у вас есть код купона, пожалуйста введите его в поле и нажмите кнопку "Сохранить купон", чтобы сохранить детали вашего бронирования.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Сохранить купон');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Купон сохранен');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Номер купона не найден');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Стоимость скидки купона');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Примечание по бронированию');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Выбрать языки');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Выбранные языковые параметры показаны в выпадающем меню');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Показать в выпадающем меню выбор языков');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Уважаемый/ая');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Благодарим за регистрацию');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Ваше имя пользователя: ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Ваш пароль: ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Пожалуйста, авторизуйтесь для просмотра ваших заказов ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Купон сохранён');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Купон удалён');
// Not used yet
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Наименование');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Имя пользователя');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Пароль');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'Идентификационный № API');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Уведомления на номер мобильного телефона');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', 'Описание');
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'Название вкладки');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Вы не можете использовать, тестировать этот шлюз с localhost, вы должны будете сделать это на рабочем сервере.</b>
<br/>
<br/>
Для того, чтобы использовать сисмему (gateway) clickatell вам нужно создать аккаунт clickatell и счет и, по крайней мере, одно зарегистрированное 
соединение (API sub-product instance) между приложением и нашей системой (gateway).<br/>
<br/>
<b>Шаг 1 - Зарегистрироваться на clickatell и создать счет</b><br/>
* Перейти по ссылке http://www.clickatell.com/products/sms_gateway.php, и выбрать соответствующий API подпродукт (connection method), который вы хотите использовать ( этот сервис в центре (API) ) ( Clickatell Central (API) )<br/>
* Нажмите на гиперссылку Регистрация.<br/>
* Заполнить регистрационную форму.<br/>
Если у вас уже есть счёт clickatell переходим к шагу 2.<br/>
После успешного заполнения формы вы будете автоматически проходить регистрацию в вашей новой учетной записи и переходить на страницу, 
где вы можете добавлять выбранные вами API подключения.<br/>
<b>Шаг 2 - добавить зарегистрированное API подключение (sub-product)</b><br/>
Если вы еще не вошли в свой аккаунт, то вы должны сделать это через http://www.clickatell.com/login.php<br/>
* Выбрать \Manage my Products\ в верхнем меню.<br/>
* Выберите API интерфейс Тип подключения который вы хотите использовать (HTTP API) из выпадающего меню ('Add Connection').<br/>
* Заполните форму. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to " .get_showtime('live_site').'/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
После успешного заполнения формы, ваши данные авторизации будут отображаться, в том числе каждого соединения соответствует уникальный идентификатор API (api_id). Эти идентификационные данные требуются при подключении к системе /clickatell/ для отправки сообщения.<br/>
<br/>
Используйте ваши имя пользователя, пароль и идентификационный № api для заполнения полей выше.<br/>
<br/>
');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Форма бронирования в списке номеров недоступна');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Форма бронирования в списке номеров показывает максимальное количество человек');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Полная стоимость заказа будет отображена при выборе одной или нескольких позиций.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Наименование подписки пакетов');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Имя');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Описание');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Опубликованный');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Полная сумма');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Лимит недвижимости');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Подписаться');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Использовать возможности редакирования подписки');
jr_define('_JOMRES_COM_NEWUSER', 'Создать нового пользователя при бронирование');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Описание');
jr_define('_JOMRES_CLICKTOREGISTER', 'Нажмите, чтобы зарегистрироваться');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Тема');
jr_define('_JOMRES_LATLONG_DESC', 'Перетащите мышкой указатель на карте, чтобы установить местонахождение объекта размещения');
jr_define('_JOMRES_CONTROLPANEL', 'Панель управления');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Показать счет');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Показать счета');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Добавить объеукт размещения');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Предупреждение: ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Извините, идентификационный № пакета не найден.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Вы уже подписаны на бесплатный пакет. Вы не можете подписаться на этот пакет снова.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Информация о вашей фирме');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Название фирмы');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', '№ ИНН');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Адрес фирмы');
jr_define('_JOMRES_INVOICE_NUMBER', '№ счёта');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Скрипт для закрытых дат <br/> 
<br/> 
Если имеется один или более заказов за выбранный период, то вы не сможете сделать бронь, пока другие заказы/закрытые даты были отменены/выкуплены.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'К сожалению, вы не можете закрыть даты по объекту размещения на указанный период');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Вы можете закрыть даты по объекту размещения на указанный период');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Не указаны типы гостей');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Тарифы не указаны');
jr_define('_JOMRES_EDITINGMODE_ON', 'Режим редактирования ВКЛ');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Режим редактирования ВЫКЛ');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Варьирующиеся депозиты');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Описание');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Количество дней, в течение которых вся сумма будет взиматься в качестве залога.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Подтверждение на эл. почту отправлено. Вы можете закрыть это окно');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Связаться с агентом');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Отметить счет-фактуру как оплаченную');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Счета-фактуры отмеченные как оплаченные');
jr_define('_JOMRES_APIKEY_REMAKE', 'Создать новый код API');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Наименование');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Описание');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Баланс платежа');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Редактирование в глобальном режиме');
jr_define('_JOMRES_SUPPORTKEY', 'Код поддержки');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Лицензионный ключ для загрузки плагинов для Jomres');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Персональная скидка');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Предел регистрации объектов размещения в одной стране');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Регистрация объектов размещения ограничена одной страной');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Страна расположения объектов размещения');
jr_define('_JOMRES_JQUERYTHEME', 'JQuery фон');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Выбрать фон JQuery, который будет использоваться для вкладок при описании объектов размещения');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'К сожалению, данный объект размещения сейчас не доступен');
jr_define('_JOMRES_REVIEWS', 'Отзывы');
jr_define('_JOMRES_REVIEWS_TITLE', 'Заголовок отзыва');
jr_define('_JOMRES_REVIEWS_DATE', 'Дата публикации');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Ещё нет ни одного отзыва по данному объекту');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Хотите первым написать отзыв?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Я согласен с этим отзывом');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Я не согласен с этим отзывом');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Средний рейтинг: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Всего голосов:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Добавить новый отзыв');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Вам следует авторизироваться (войти на сайт) чтобы оставить отзыв.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Расскажите нам, что вы думаете об этом месте: ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Этот обозреватель рассказал нам: ');
jr_define('_JOMRES_REVIEWS_PROS', 'Плюсы: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Минусы: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Дата добавления: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Вы уже просматривали этот объект размещения. Вы можете оставить другой отзыв о ней.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Вы не можете оставлять отзывы на этом сайте.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Показать отзывы');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'Гости согласные с этим отзывом');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'Гости не согласные с этим отзывом');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'Единственный гость согласный с этим обзором');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'Единственный гость не согласный с этим обзором');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Спасибо, что поделились своим мнениям об этом отзыве.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Спасибо, но вы уже поделились своими мнениями об этом обзоре.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Пожалуйста, убедитесь, что все поля были заполнены.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Пожалуйста введите название отзыва');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Слишком короткий обзор. Пожалуйста, напишите более полный обзор в поле Описание ');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Пожалуйста, напишите хорошие впечатления вашего пребывания в этом отеле');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Пожалуйста, напишите любые негативные впечатления из вашего опыта');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Оцените гостеприимство сотрудников которое Вам оказали');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Опишите своё мнение об окружающей местности');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Что вы думаете о чистоте');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Оцените жилье. Было ли Вам комфортно и удобно или ужасно');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Как Вы думаете, было ли это адекватно цена-качество');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Оцените услуги');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Всего отзывов');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Ваш опыт более подробно');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Спасибо за оставленный Вами отзыв! Он обязательно поможет другим при выборе.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Спасибо за оставленный отзыв. Он будет опубликован в ближайшее время после проверки одним из наших модераторами.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Использовать функцию отзывы Jomres?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Автоматически публиковать отзывы?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Если выберите нет Вам нужно будет вручную публиковать отзывы');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Установить отзывы в тестовом режиме?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Обычно менеджеры собственности не может просмотреть свойства. При включении режима тестирования, они могут. Естественно, это не является хорошим режимом в рабочей среде.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Список всей недвижимости. Чтобы увидеть отзывы объекта, нажмите на объект. Оттуда вы сможете публиковать или удалять отзыв.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Количество неопубликованных отзывов');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Общее количество отзывов');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Опубликовать/снять с публикации отзыв');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Удалить отзыв');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Отчёт отзывы');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Обзор отзывов');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Пожалуйста, введите ваш отчет');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Применить');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Отчет, созданный по ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Сообщения размещеные пользователями, которые могут не согласиться с содержанием отзыва.');
jr_define('_JOMRES_REVIEWS_RATING', 'Ratings (1 = ужасно 10 = отлично) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Гостеприимство  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Расположение ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Чистота ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Accommodation ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Соотношение цены и качества ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Услуги ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Reviewed by : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Скрыть отзывы');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Показать форму бронирования на странице в Описании недвижимости?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Установите в Yes, чтобы показать форму бронирования на странице Детали недвижимости. Если вы установите Нет, то появится ссылка на страницу детали недвижимости, указывая на форму бронирования.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Установленные цены включают налог?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Цены указаны с учетом налогов? Если ваши цены включают налог, выберите Да. Если не включают, выберите Нет.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Дополнительный налог:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'День недели поля позволяют установить тариф для определенного дня недели, после того, как вы выберите день недели кнопкой на все дни недели будет назначена ставка.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Дата сборщики и скорость ввода позволяют установить одну цену для заданного диапазона дат. Выберите начальную и конечную дату, ввести цену и нажать на кнопку установить цены.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Начало диапазона');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Конец диапазона');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Ставка');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Установленные ставки');
jr_define('_JOMRES_PARTNERS_TITLE', 'Партнеры');
jr_define('_JOMRES_CALENDAR_RTL', 'Ложный');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Номер ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'гость(и). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Это то, как мы распределили номера и Номера. Если вы хотели бы изменить это распределение, вам необходимо связаться с администрацией отеля после оформления бронирования. Может взиматься дополнительная плата, если вы измените ваш заказ.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Обратите внимание, что ваша недвижимость еще не опубликованна, только вы можете увидеть публикацию, посетители сайта пока не видят её');
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'По умолчанию результат поиска заказа');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Измените этот параметр, чтобы изменить порядок, что результаты поиска представлены по умолчанию.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Показывать результат поиска заказа в виде выпадающего списка');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Стиль страницы номеров');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'В форме бронирования, используя "классические" стиль списка номеров, который вам предлагается отдельные номера для гостей. С номер типа представления, гости выбрать число номеров типа х (например. 2 х местный) вместо');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Классический');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Типы номеров');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Календарь - начала недели день, в воскресенье или понедельник');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Только гости отеля могут оставлять отзывы?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Установите в Yes, если вы хотите ограничить отзывы только те пользователи, которые были гостем уже в этой недвижимости.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'за номер');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Гостей в номере : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Гостей на бронирование : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Количество номеров');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Январь');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Февраль');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Март');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Апрель');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Май');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Июнь');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Июль');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Август');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Сентябрь');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Октябрь');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Ноябрь');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Декабрь');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Выберите yes, чтобы уменьшить число вариантов, доступных для управляющих недвижимостью в общем раздел конфигурации. Это полезно если Вы не хотите, управляющих недвижимостью, чтобы играть вокруг слишком много настроек, вместо этого вы можете отредактировать jomres_config.php чтобы определить параметры недвижимости по умолчанию.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Пожалуйста выберите варианты для вашего бронирования');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'На весь экран');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Нормальный просмотр');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Партнером скидка ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Поиск пользователя');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Введите несколько символов для поиска пользователя.<br/> При выборе пользователя, Вы автоматически добавляете их в качестве партнера и Вы попадете на следующую страницу, где вы можете назначить свойства и скидки для пользователя.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Существующими партнеры');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Выбрав партнера должны принить к партнеру страницы администрирования.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Партнер :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Поиск недвижимости');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'Введите несколько символов из имени недвижимости и выберите недвижимость.<br/> При выборе недвижимости, вы будете добавлять её в портфеля партнера , однако они не пользуются никакими скидками, вам нужно будет установить самостоятельно.');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Текущая недвижимость');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'Нажмите на недвижимость редактировать настройки партнера и установиту скидки для этой недвижимости.');
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Эта учетная запись была приостановлена, в настоящее время невозможно управлять вашей собственностью с использованием этой учетной записи.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Менеджер учетной записи приостановлен');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Восстановил аккаунт менеджера');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Обратите внимание, что ваш менеджер по недвижимости учетная запись была приостановлена. Вы не сможете выполнять никаких функций управления имуществом до тех пор, пока аккаунт не будет восстановлен.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Пожалуйста, обратите внимание, что ваш аккаунт менеджер недвижимости теперь активно. Вы можете продолжать выполнять любые функции по управлению имуществом. Пожалуйста, войдите в свой аккаунт и убедиться, что ваша недвижимость была опубликованы. Спасибо.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Удалить фаворита');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Бронирование архив данных');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Бронирование архив данных является RAW дамп указание сведений захваченных после подтверждения бронирования нажатии кнопки. Наведите курсор на дату, чтобы увидеть исходные данные дампа. Информация хранится в XXX__jomres_booking_data_archive таблицу.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Редактировать аккаунт');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Существующие менеджеры');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Спит');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Показать поиск гостей по выпадающему (dropdown)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Звезды');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Показать звёзды dropdown');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Количество гостей');
jr_define('_JOMRES_SEARCH_STARS', 'Количество звезд');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Количество недвижимости');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Загрузка Jomres jQuery library?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Вы можете установить Нет, если у вас есть шаблон, который использует JQuery. Это может решить конфликтные вопросы JQuery на некоторых шаблонов, но не все.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Минатюры автоматически создаются при загрузке изображений.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Ширина малой миниатюры (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Маленькие миниатюры, используются в списке недвижимости, тогда как средние миниатюры используются в заголовке.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Высота малой миниатюры (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Ширина средней миниатюры (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Высота средней миниатюры (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', ' Перевод этикетки (Label)');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Использовать функцию комиссии?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Выберите yes, чтобы показать менеджеру комиссии счёт-фактуру, которые были выписанны.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Когда менеджер делает заказ создать комиссию счета?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Если менеджер делает бронирование, создать строку комиссия счёт-фактура?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Автоматически приостановить работу менеджеров где счёт-фактуры помечаются как ожидающие?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Авто приостановить пороговое значение');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Ограничение по количеству дней, в которые менеджер должен оплатить счет-фактуру до того, как они будут приостановлены и их недвижимость снята с публикации.');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Языковой контекст');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Используйте эту опцию для изменения узла языковом контексте. Эта функция позволяет Jomres использовать этикетки, которые подходят для Вашего текущего фокуса, поэтому если вас интересует, как Yacht Brokerage, затем изменять контекст позволит Jomres представить ярлыки из другого языкового файл. Например, если вы установите контекст "Yacht Brokerage", то Jomres сначала найдёт текущий язык, поиском в /'.JOMRES_ROOT_DIRECTORY.'/языковом каталоге, подкаталоге "yachtbrokerage". Если файл существует для текущего языка, то этот файл будет использоваться. Если нет, то Jomres будет искать файл на английском языке в этой же папке. Если не может быть найдены, Jomres будет использовать языковой файл для текущего выбранного языка в файл /'.JOMRES_ROOT_DIRECTORY.'/языки каталога.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Расширенные настройки сайта');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Включите эту опцию, если вы хотите использовать дополнительные параметры конфигурации сайта. Если Вы только начинаете работать с Jomres, то мы советуем вам не включать эту опцию сейчас, а настроек по умолчанию будет достаточно, чтобы вы начали работать, вместо этого вы должны добавить Jomres в главном меню и войти в интерфейсе как "Admin "и приступить к настройке вашей собственности (недвижимости). Пожалуйста, обратите внимание, что многие из передовых опций будет применимо только к установками Jomres Соло, серебро или золото. Пользователи бесплатной базовой системы не смогут в полной мере воспользоваться всеми функциями, которые позволяюет система.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Загрузить Jomres jQuery UI library?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Цена (Дорогие первым)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Цена (Дешёвые первым)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Суммарная и остаточная цена расчитывается за одну ночь/в неделю/в месяц?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'За ночь');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'За неделю');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'За месяц');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'На человека');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'в неделю ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'в месяц ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Как опция поиска номеров должна работать по выбору количества людей в номерах?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Затрагивает все поисковые модули. При использовании гостевого номера, функция поиска, поиск должен искать недвижимость, тарифы которой будут поддерживать гостевые номера и равное число выбрано, точно равное число выбрано, или выбранное число и больше? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Пожалуйста, подождите, Ваш заказ обрабатывается и вы будете перенаправлены на сайт PayPal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Если Вы не будете автоматически перенаправлены на PayPal в течение 5 секунд...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Нажмите здесь');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Бронирование действует с');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Бронирование действует до');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Имя гостя');
jr_define('_JRPORTAL_COUPONS_DESC_478', 'Коды скидок могут быть сгенерированы и переданы гостям в качестве стимула, чтобы сделать заказ.<br/>
Допустимые даты начала и ссылаются на даты, что бронирование может быть сделано на, в то время как указание действует с/до даты относятся к датам, что бронь должна покрывать за купон будет действителен. Если заказ выходит за пределы этого периода затем обычным тарифам будет применяться в дни вне этого периода.<br/>
Если вы хотите забронировать даты которые будут доступны для одного конкретного гостя, выберите имя этого гостя в выпадающем списке, чтобы ограничить купон только для него.');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Купона это заказ был со скидкой от ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' до ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Выберите Нет, чтобы отключить загрузку Jquery UI JavaScript и CSS файлы.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Загрузить Jomres jQuery UI CSS library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Выберите Нет, чтобы отключить JQuery UI CSS только для пользовательского интерфейса.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Всего в т.ч. налог');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Неопубликованная недвижимость');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Использование преобразования functionaity');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', 'Используйте функцию преобразования онлайн Jomres. Это будет предлагать пользователю выпадающее меню преобразования, где они смогут выбрать варианты валюты, чтобы увидеть цены, предлагаемые на выходе цена корректируется, чтобы показать преобразованы цену с "родной" ценой отеля в скобках.');
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'Мы приложили все наши усилия, чтобы получить наиболее точные и своевременные курсы валюч, что мы можем. Наша интернет-функция Конвертация валют это услуга, предоставляемая только для информационных целей и не предназначены обеспечить точные цифры. Соответственно, мы не можем гарантировать точность обменных курсов. Используя эту функцию, Вы соглашаетесь, что любая не точность от (или) использования функции конвертации валюты это исключительно Ваши и риски.');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Конверсионные / коды валют');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Чтобы автоматически установливать код валюты, Jomres способен использовать бесплатный сервис под названием IPinfoDB определяет страну посетителя, однако вы должны зарегистрироваться на сайте http://ipinfodb.com/ для получения ключа API  <a href="https://www.ipinfodb.com/login" target="_blank">IPinfoDB</a> IPinfoDB.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Отладка');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Accomodation ex tax');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Всего включая налог');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Налог номера:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Откройте форму бронирования');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Вернутся к деталям недвижимости');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Автоматически выбирается?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Баланс (после Залога)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Фильтр ресурсов с учетом их особенностей.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Последнее бронирование');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'секунд');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'минут');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'часов');
jr_define('_JOMRES_DATEPERIOD_DAY', 'дней');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'недель');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'месяцев');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'год');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'десять лет');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'давности');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'сейчас');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Заказы на целые дни?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'По умолчанию система бронирования ресурсов уходит в ночь, так что бронь с первого января '.date('Y', strtotime('будущий год')).' на 2 января '.date('Y', strtotime('будущий год')).' охватывает всего одну ночь. Если установить этот параметр в значение "да", однако тогда указание будет охватывать целые дни вместо, поэтому указание на эти дни будет охватывать оба дня и заказчику будет выставлен счет за два дня.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'в день');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'В день с человека');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Съём');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Вернуться');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'дней(по расписанию)');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Дата возврата неправильные');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Бронирование было слишком коротким. Там должен быть как минимум столько же дней между доставкой и возвратом даты:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Самовывоз/возврат минимального интервала');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Краткая цена и цена оценки должны быть оценены, как за день / неделю / месяц?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'В день');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Дней до даты съема');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Минимальное количество дней, которое должно пройти с "сегодня", до даты съема.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Установите Да, если вы хотите ограничить предварительные заказы (используйте следующее поле, чтобы установить предел в днях). Если вы установите это да, то, если пользователь пытается забронировать более, чем n дней, то их дата съема будет восстановлено сегодня даты');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Показать дату возвращения?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'Установите значение Нет, если вы не хотите, чтобы показать окно ввода даты возврата. Использовать только, если вы знаете, что вы делаете, а дата возвращения в бронировании всегда будет установлен на следующий день после даты съема.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per person, per day');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (number of days between pickup date and today)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Picked up');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Has not picked up');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost per day: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Number of days: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Save override');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Отправлять E-mail новым пользователям c данными для входа?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Если опция Создать Нового Пользователь установлено значение Да, вы можете установить эту опцию в Нет для того, чтобы они не получали по электронной почте свои регистрационные данные, когда пользователь был создан. Это может быть полезно, если вы автоматически добавляете новых пользователей в список рассылки, и не хотите, чтобы пользователи при этом получали свои регистрационные данные.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Показать налоговой выход в краткой форме бронирования итоговой?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Отмена Заказа (Бронирования)');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Зарегистрированные гости могут отменить свои заказы. Здесь вы можете установить порог в днях, когда бронирование не может быть отменена после определенного количества дней до даты заезда.');
jr_define('_JOMRES_EDIT_PROFILE', 'Редактировать Профиль');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Тип недвижимости относится');
jr_define('_JOMRES_IMAGE', 'Изображение');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Нажмите на букву, чтобы показать все предприятия с первого знака. Как только у вас список недвижимости вы можете назначать ставки комиссионного вознаграждения для тех объектов, или нажмите на "изменить", чтобы просмотреть статистику.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Редактировать налоговую ставку');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Изменение Настраиваемого поля');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Лицензия на сервер пароль');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Лицензия на сервер имя пользователя');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Если у вас есть логин и пароль на сервер лицензий, пожалуйста, введите их здесь. Это поможет вам открыть платные плагины. Если введен правильный ключевой поддержки выше, тогда нет необходимости указывать логин/пароль здесь.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Версия Jomres : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Последняя версия Jomres');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Появилась новая версия Jomres, рекомендуется обновить в ближайшее время.');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Добро пожаловать Jomres, мы надеемся вам понравится работать с помощью Joomla, использовать его для любых систем бронирования. Если вы хотите приобрести Jomres Соло, Серебро или Золото лицензию, <a href="http://www.jomres.net/prices" target="_blank"> пожалуйста, посетите наш сайт</a> для получения информации о том, как можно расширить его функционал.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Эта система идеально подходит для любого сценария бронирования, будь то просто бронирования для одного отеля, вплоть до сайта с большим количеством пользователей, на разных языках, с несколькими типами недвижимости. Пожалуйста, см. раздел "Справка" слева, в том числе "приступая к работе".');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Active property');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Email Настройки');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Установить эту опцию в yes, чтобы использовать эти альтернативные настройки SMTP. Все большее веб-хостов блокируют почтовые функции PHP, так что вы можете выбрать, чтобы отправлять почту в настройки почты, что Jomres принимает от хост CMS(обычно Joomla) и используйте настройки Вашего собственного провайдера почты.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Альтернативный Host');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Укажите Ваш smtp mail server');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Укажите Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Укажите Ваш smtp port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Укажите Protocol');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', 'В зависимости от настройки SMTP сервера, нужно оставить это поле пустым, или ввести протокол шифрования SSL или TLS. Задать свой SMTP провайдера, если Вы его знаете.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Использовать проверку подлинности');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Если ваш SMTP-сервер требует авторизацию, выберите yes. Логин и пароль будут в дальнейшем использоваться.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Укажите Username');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Укажите Password');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Быстрый просмотр');
jr_define('_JOMRES_MENU_SHOW', 'Отображать');
jr_define('_JOMRES_MENU_HIDE', 'Скрыть');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'По умолчанию');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Кто угодно');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Зарегистрированный');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Менеджер');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Супер менеджер');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Никто');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Меню контроля доступа');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'Эта функция позволяет контролировать, кто сможет видеть плагин в Главное меню. Обычно параметры пользователя 00009 доступны для просмотра, либо/или незарегистрированные посетители сайта, 00010 вариантов, как правило, касаются прием типа мероприятиях, которые используются на ежедневной основе, в то время как 00011 параметры используются для настройки и конфигурирования собственности, но осуществляется менее часто.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Регистратор');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Полный контроль доступа');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Установите эту опцию в Yes, чтобы включить полный функцию контроля доступа, а затем посетить опцию управления доступом в соответствии с системой обслуживания для настройки управления доступом.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Заметим, однако, этого эти параметры не контролируют базовых сценариев, к которым они подключаются, так например, если вы установите <i>00009user_option_03_search</i> to 'Менеджер' ользователь, который знает Jomres можете по-прежнему вызывать j06000search.class.php введя http://www.domain.com/index.php?option=com_jomres&task=search в адресной строке браузера. Это сделано намеренно, так как это доступ к меню управления просто контролирует то, что можно увидеть в Jomres Главное меню. Если вам нужен более строгий контроль затем установить на сайт Config -> Full Access Control возможность да и пересмотреть меню возможность управления доступом.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Полный контроль доступа');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', '<strong>Эта функция только для опытных пользователей. Если Вы не знаете для чего он предназначен, и нет особых причин, чтобы использовать его, пожалуйста, вернитесь к конфигурации сайта и установить полный контроль доступа значение нет.</strong><br/>
	Эта функция позволяет контролировать, кто имеет доступ к которой minicomponents (с некоторыми исключениями, которые жестко закодированы в системе). Если уровень доступа следующего скрипта имя имеет значение по умолчанию, то с полным доступом и контроля параметра значение Да <strong>anybody</strong> можете открыть скрипты, что они не должны быть в состоянии получить доступ к поэтому если вы собираетесь использовать эту функцию, необходимо установить контроль доступа на уровне <strong>все</strong> Jomres minicomponent перечисленные здесь. Если Вы не знаете, что эти minicomponents делать, то мы настоятельно рекомендуем Вам не использовать эту функцию вообще.<br/>
	В Jomres уровни доступа выполните пирамиды, так супер управляющих недвижимостью больше, чем менеджеры. В крации Super Manager > Manager > Receptionist > Registered > Unregistered. Так, если зарегистрированный пользователь имеет доступ к minicomponent, так что Администраторы, менеджеры и супер менеджеры.<br/>
	Обратите внимание, что Вы не можете контролировать администратор зоны minicomponents. Кто-нибудь в области администратора считается доверенного пользователя в том, что они не должны быть заблокированы от доступа любого скрипта (особенно этот).
	');
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Предупреждение! Вы имеете полный контроль доступа включен, но мы посчитали параметры управления доступом и сравнили их с количеством minicomponents, что должна быть контролируемая, и обе не совпадают, поэтому у вас могут быть некоторые скрипты, которые не контролируются. Это может быть вопросом безопасности, и вам настоятельно рекомендуется устранить эту сразу посетив функция контроля доступа и проверьте соответствующие уровни были применены.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Пользователей с админ правами на эту недвижимость');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Ваш email адрес');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Параметры');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define('_JOMRES_METATITLE', 'Meta title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Добавить недвижимость : Шаг 2 of 2');
jr_define('_JOMRES_CART_TITLE', 'Мои заказы бронирования');
jr_define('_JOMRES_CART_INFO', 'Обратите внимание, эти заказы еще не сохранены. Если вы выходите из системы или сеанса они будут потеряны. Не забудьте подтвердить Ваши заказы!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Подтверждение бронирования');
jr_define('_JOMRES_CART_OR', ' или ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Save for later');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'You don\'t have any bookings saved yet.');
jr_define('_JOMRES_CART_VIEWCART', 'Просмотр корзины');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Языковой файл, подкаталога');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Широта по умолчанию');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Долгота по умолчанию');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'На карте Google на странице редактирования свойств, прежде, чем маркер был перемещен, нужно указать по умолчанию широта / долгота точки запуска?');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Отправлять письма от какого адреса Email');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', 'Оставьте этот параметр пустым чтобы отключить его. Jomres будет использовать в отеле, адрес электронной почты(ЭП) при отправке Сообщений гостями, однако Ваш почтовый сервис может не разрешить письма с произвольного адреса (т. е. они только могут разрешить сообщения от одного уполномоченного-адрес). Если это так, тогда вы можете использовать это поле, чтобы ввести адрес, который будет замечен как адрес отправителя для всех сообщений системы.');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Просмотр списка');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Посмотреть фото');
jr_define('_JOMRES_COMPARE', 'Сравнить');
jr_define('_JOMRES_REMOVE', 'Удалить');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Вернуться к результатам поиска');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Добавить в избранное');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Удалить из избранного');
jr_define('_JOMRES_VIEWSHORTLIST', 'Просмотреть список избранного');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Important: Cookie Правила');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Мы используем Cookie, чтобы помочь сохранить наш сайт актуальны и простым в использовании.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Читать далее...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'Законодательство ЕС требует, чтобы все сайты четко указать, если используются Cookie и их назначение.');
jr_define('_JOMRES_COOKIEPOLICY_5', "Поиск и бронирование движок этого сайта должен быть в состоянии вспомнить варианты которые вы выбрали для работы. Для этого необходимо, хранить информацию, которая связана с небольшой файл называется \ 'cookie \', который однозначно идентифицирует ваш браузер, и для нас, чтобы сделать это, вы должны согласиться, что мы можем. Если вы не согласны с этой политикой cookie, то вы будете сильно ограничены в том, что вы можете делать на этом сайте.");
jr_define('_JOMRES_COOKIEPOLICY_6', 'Да, я принимаю от использования cookies на этом сайте.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Аванс берётся за стоимость первой ночи?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'Вы не добавляли никаких элементов в ваш список.');
jr_define('_JOMRES_SAFEMODE', 'Включить безопасный режим?');
jr_define('_JOMRES_SAFEMODE_DESC', 'Установите в Yes, чтобы вызвать безопасный режим. Это отключит все плагины, так что Jomres будет использовать только это основные функции.');
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'Договорная');
jr_define('COMMON_NEXT', 'Следующий');
jr_define('COMMON_CANCEL', 'Отменить');
jr_define('COMMON_SUBMIT', 'Применить');
jr_define('COMMON_SAVE', 'Сохранить');
jr_define('COMMON_DELETE', 'Удалить');
jr_define('COMMON_RETURN', 'Возврат');
jr_define('COMMON_CLOSE', 'Закрыть');
jr_define('COMMON_BACK', 'Назад');
jr_define('COMMON_HOME', 'Домой');
jr_define('COMMON_NEW', 'Новый');
jr_define('COMMON_SEND', 'Отправить');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha используется для отличия человека от робота и защиты сайта, и для предотвращения засорения сайта спамом от роботов в Интернете. Чтобы использовать форму Связаться с нами в Jomres вам нужно будет зарегистрироваться на сайте www.google.com/recaptcha <a href="http://www.google.com/recaptcha" target="_blank">the Google reCaptcha</a> на домашней странице Google ReCaptcha, указать свой домен, получить ваши открытые и закрытые ключи. Когда вы получили эти ключи, пожалуйста, введите их ниже.Служба reCapcha это бесплатный сервис предоставляется Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Public key');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Private key');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Тайм-аута блокировки файлов');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Во избежании одновременного бронирования одного и того же номера Jomres использует файл блокировки для предотвращения номер от добавления в список свободных номеров в форме бронирования, если кто-то уже добавлен в комнату и у них одни и те же даты. По умолчанию эта блокировка будет происходить раз в 3600 секунд, или один час. Вы можете изменить время, необходимое для изменения, этот запрет путем изменения этого показателя.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', 'Включить шаблоны и функциональность Jomres Bootstrap?');
jr_define('COMMON_ACTION', 'Акция');
jr_define('COMMON_VIEW', 'Просмотр');
jr_define('BACKTOTOP', 'Вернуться к началу');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Слабый');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Сильный');
jr_define('_JOMRES_INPUTFILTERING', 'Фильтр ввода');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Входной уровень фильтрации');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Большинство данных, которые поступают в систему подлежат проверки, сначала очистки любые HTML-теги, а затем с помощью PHPs применяются фильтры, чтобы сделать данные безопасными, прежде чем оно будет записаны в базу данных. Вы можете позволить некоторые входы (например, текст входы на странице деталей недвижимости), чтобы включить HTML. Есть два уровня фильтрации можно использовать для фильтрации этот вход, либо слабые и сильные. Вы должны использовать только слабые настройку, если доверяете пользователям ввода данных, например: коллеги или системный администратор, в противном случае вы должны оставить его установить до сильного. При установке на Сильный уровень фильтрации (рекомендуется), вы можете указать, какие теги для редактировав можно разрешить используйте следующий параметр 'Очиститель HTML теги разрешено. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Разрешить теги');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Вы можете редактировать теги, очистка HTML возможна через фильтр системы. По умолчанию разрешены 'p,b,strong,a[href],i' (т.е. Paragraph, Bold, Strong, Links and Italics). Для получения более подробной информации о разрешенных тегов, пожалуйста, прочитайте справки о HTML очистке по адресу <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Хотя вы можете изменить эту настройку, рекомендуется оставить её по умолчанию.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Разрешённые');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Вы можете определить, какая форма ввода тегов разрешена HTML редактируя эту опцию, любой ввод данных добавленный к этому списку будет обрабатываться через HTML очистку вместо того, все HTML раздели. По умолчанию: 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers. Добавить больше входов, добавив их имена, разделенных пробелом.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Сведения о недвижимости в закладках?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Установите эту опцию, чтобы показать детали недвижимости в закладках. Установите Нет, чтобы показать их без вкладок.');
jr_define('COMMON_PRINT', 'Печать');
jr_define('COMMON_EDIT', 'Редактировать');
jr_define('COMMON_COPY', 'Копия');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 включает Twitter's Bootstrap framework по умолчанию, и Jomres имеет шаблоны и функциональные возможности, которые будут использовать эти шаблоны. По умолчанию, если вы работаете на Jomres Joomla 3 эти переключатели установлены в Yes, но вы можете отключить, если это необходимо (не рекомендуется). Если вы работаете с версией Joomla ниже 3 вы можете включить эту опцию, чтобы использовать шаблоны и функциональность Jomres Bootstrap, однако по умолчанию эти опции установлено значение Нет.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Использовать шаблоны Jomres Bootstrap в интерфейсе?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Вот несколько альтернатив которые вы могли бы установить, чтобы посмотреть.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Автоматически определять страну гостя?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', 'Система будет пытаться автоматически определить страну гостя, если они не заходил на Ваш сайт ранее. Вы можете установить эту опцию в положение Нет, и указать страну, которая появиться в форме бронирования, в следующей опции.');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'О Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Справка');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Приступая к работе');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Управление доступом');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'инструменты разработчика');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'languages');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'Формирование доходов');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'структура сайта');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Мой аккаунт (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'функциональность портала');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Плагин менеджер');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'интеграция');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'отчеты/статистика');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Обновить');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'способы оплаты');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Тариф по умолчанию');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Это относится только к новым тарифам');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Сколько лет показать');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Определяет количество лет, чтобы показать при редактировании тарифа типа');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Счета');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'Аккаунт');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Войти');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Выйти');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'Поиск');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'Панель');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reserve');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'invoices');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'настройки');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Редактировать страны');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'id Страны');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Код страны');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Название Страны');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Редактировать регион');
jr_define('_JOMRES_EDIT_REGION_ID', 'id Региона');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Код региона');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Название региона');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Список стран');
jr_define('_JOMRES_COM_LISTREGIONS', 'Список регионов');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Экспорт определений');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Эта функция позволяет экспортировать переводы, которые были построены с использованием языка автоматического перевода. Это позволит создать текстовое поле, все данные, которые необходимы, чтобы построить новый языковой файл, все, что вам нужно сделать, это скопировать и вставить этот выход в новый языковой файл, который Вы можете поставить на новый Jomres на сервере, или если вы хотите внести свой вклад в сообщество Jomres.');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Translate locales');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Translate lang file strings');
jr_define('_JOMRES_COM_NOTAMANAGER', 'Ошибка, Вы вошли в систему не Супер менеджером в Jomres, Вы не сможете использовать эту функцию, пока вы не станете Супер менеджером. Это функция безопасности.');
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Макет недвижимости по умолчанию');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Минимальное пребывание в течении');
jr_define('_JOMRES_NIGHTSFOR', ' ночей ');
jr_define('_JOMRES_AGENT', 'Агент');
jr_define('_JOMRES_AGENT_DETAILS', 'Детали агента');
jr_define('_JOMRES_AGENT_LISTINGS', 'Объявления агента');
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Автоматически публиковать новую недвижимость');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'Если вы установите эту опцию Нет, то вам нужно будет вручную утверждать новую недвижимость. До утверждения Супер Менеджером, недвижимость добавленная менеджером не будет опубликованна.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Утверждения');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Эта недвижимость не утверждена. После того, как будет одобренно, вы сможете опубликовать её.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'К сожалению, вы не можете опубликовать эту недвижимость, пока она не был утверждена.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Новая недвижимость требует одобрения');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Недвижимость была добавлена к системе, которая требует вашего утверждения. Нажмите на ссылку, чтобы просмотреть свойства, ожидающих утверждения в списке : ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Ваша недвижимость была одобрена');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'Поздравляем, ваша собственность была одобрена, пожалуйста, нажмите на следующую ссылку, чтобы перейти в панель управления : ');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Переводить названия регионов при поиске');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', 'Если вы используете очень быстрый сервер вам рекомендуется оставить значение нет. Из-за большого количества названий региона, название региона перевод занимает много памяти, которой может замедлить ваши результаты поиска.');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Guest booked out.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'К сожалению, этот адрес электронной почты уже используется. Если это ваш электронный адрес, пожалуйста, убедитесь, что вы вошли в систему, прежде чем пытаться забронировать.');
jr_define('JOMRES_TAPTOCALL', 'Нажмите, чтобы позвонить');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Новый отзыв для ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Новый отзыв был оставлен для ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Новый отчет');
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
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'К сожалению, это утверждение неверно. Пожалуйста, попробуйте еще раз.');
jr_define('JOMRES_GOOGLE_MAPS', 'Карты Google');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Использовать слой погоды?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Цельсия');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Фаренгейта');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Транзитный слой?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Enable Gmap Points of Interest (в том числе, возможно, ваших конкурентов)?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Отсканируйте этот код в свой телефон, чтобы получить направление к нам.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', 'НДС номер, который вы ввели не верны. Вы должны ввести что-то вроде этого: BE805670816B01');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'ИНН недействительным. Пожалуйста, проверьте правильность Вашего номера плательщика НДС с Европы НДС номер проверки веб-сервиса (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Поздравляем. Мы смогли проверить Ваш номер НДС.');
jr_define('_JOMRES_TAX_RULES_LIST', 'Список налоговых правил');
jr_define('_JOMRES_TAX_RULE', 'Налоговые правила');
jr_define('_JOMRES_TAX_RULE_INFO', 'Налоговые правила используются, чтобы создать различные правила налогообложения для разных регионов. Эти налоговые правила затрагивают лицо, осуществляющее бронирование, если они зарегистрированы, войти в систему и редактировать их счета с использованием "редактировать Мой аккаунт" страницы. Цель этих правил-обеспечить бухгалтеры в тех районах, которые освобождены от НДС, вы можете обнаружить, что вам не нужно создавать много правил, если таковые вообще.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Импорт налоговых ставок');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'Мы можем импортировать налоговые ставки для ЕС для вас, если вы пожелаете. Обратите внимание, если вы используете эту функцию, то все ваши существующие налоговые ставки будут удалены.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Изменить налоговые правила');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'Номер НДС для этой недвижимости');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Пожалуйста, введите номер НДС для этого объекта недвижимости.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'ИНН подтверждено.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'ИНН не подтверждено.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Бизнес-данные, введенные здесь, будут использованы для комиссии и подписки, счета-фактуры.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', 'Вы пока не завели в свой аккаунт на нашем сайте. Чтобы разместить свою собственность на сайте заполнить Ваши контактные данные и реквизиты, прежде чем мы сможем работать с Вами дальше.');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Производство или Разработка?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Если вы установите эту опцию в развитии мы будем включить отчеты об ошибках, в противном случае, когда значение производства, что будет отключаться. Если это живые сервера мы рекомендуем установить этот параметр в значение "производство" ("production").');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Производство');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Разработка');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Подробная информация о ресурсе');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Детали тарифа');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Только');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'осталось!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Характеристика ресурса');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Не удается удалить данный ресурс, с ним связан другой ресурс. Удаление объекта из другого ресурса и повторите попытку.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Изображения');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Добавить изображения');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Изображения номера (Номера)');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Главное изображение объекта');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Слайд-шоу изображений');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Очистить список');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop файлы здесь');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Выберите ресурс, для которого необходимо загрузить изображения. Вы можете загружать изображения для отдельных ресурсов (например, номера) вам выдадут второй выпадающий список, чтобы выбрать конкретный ресурс. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Если вы загружаете несколько изображений в качестве "основного изображения" будет использоваться только первый из этих изображений.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Просмотр изображения');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Удалить изображения');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Загрузить изображения');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Типы номеров изображений');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Особенность недвижимости изображения');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Загрузить все файлы');
//8.0
jr_define('COMMON_PREV', 'Назад');
jr_define('COMMON_MORE', 'Больше');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Сегодня');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Год');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Месяц');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Неделя');
jr_define('_JOMRES_DASHBOARD_DAY', 'День');
jr_define('_JOMRES_HLEGEND', 'Legend');
jr_define('_JOMRES_HFILTER', 'Фильтр');
jr_define('_JOMRES_HFROM', 'С');
jr_define('_JOMRES_HTO', 'Пo');
jr_define('_JOMRES_HNEW_BOOKING', 'Новая бронь');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Статус Залога');
jr_define('_JOMRES_HSTATUS_GUEST', 'Статус гостя');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Статус Брони');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Статус публикации');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Статус счёта');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Тип счёта');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Утверждён');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Активная собственность/бизнес');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Показать заказы на');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Показать счета для');
jr_define('_JOMRES_STATUS_ANY', 'Any');
jr_define('_JOMRES_STATUS_PAID', 'Оплаченно');
jr_define('_JOMRES_STATUS_NOTPAID', 'Не оплачено');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Checked out');
jr_define('_JOMRES_STATUS_ACTIVE', 'Active');
jr_define('_JOMRES_STATUS_CANCELLED', 'Отменен');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Опубликован');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Не опубликован');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Гости с активными заказами');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Гости с прошлых заказов');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Бронирование');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Подписки');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Комиссий');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Все мои бизнес');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Установить как текущий');
jr_define('_JOMRES_ACTION_CHECKIN', 'Заезд');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Выезд');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'Бронирование');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'недвижимость');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'Гости');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'отчеты');
jr_define('_JOMRES_HLIST_GUESTS', 'Гости');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Список гостей');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Список счетов-фактур');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Предприятия');
jr_define('_JOMRES_HQUICK_BOOKING', 'Быстрое бронирование');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Дата бронирования');
jr_define('_JOMRES_HTWO_WEEKS', 'Две недели');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Это бронирование будет аннулировано. Нажмите кнопку ОК, чтобы отменить бронирование.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Нынешние жители');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Панель навигации местоположение');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Default (область содержимого)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Крепится вверху');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Крепится внизу');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Инвертированный Navbar (изменение цвета)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Номер бронирования');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Показать гости для');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap версия');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'В настоящее время применяется только к интерфейсу. Эта опция позволяет выбрать, будет ли или не использовать шаблоны Jomres, которые совместимы с Bootstrap 2 или 3. Bootstrap Если вы не уверены, что ваш шаблон работает с Bootstrap 3, то мы рекомендуем вам оставить эту опцию для начальной загрузки 2.');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Показать гости для');
jr_define('_JOMRES_HFIXED_PERIODS', 'Фиксированные периоды');
jr_define('_JOMRES_HDEPOSITS', 'Залог');
jr_define('_JOMRES_HBOOKING_FORM', 'Форма бронирования');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Обязательные для заполнения поля');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Том');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Смит');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'Улица');
jr_define('COMMON_PLACEHOLDER_TOWN', 'Город');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Расширенная Конфигурация');
jr_define('SIMPLE_CONFIGURATION', 'Простая Конфигурация');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Ресурс располагает');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Тип ресурса');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Редактирование гостевого типа');
jr_define('_JOMRES_HEDIT_COUPON', 'Редактировать скидки');
jr_define('_JOMRES_HEDIT_EXTRA', 'Редактирование дополнительных услуг');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Создать несколько ресурсов');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Сгенерировать ресурсы');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Сколько ресурсов?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Ресурсы типа');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'аксимальное количество гостей на ресурс');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Удалить все существующие ресурсы?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Обратите внимание, Вы просматриваете в данный момент администратор зоны с расширенными сайта конфиг нет. Если вы хотите увидеть другие варианты, пожалуйста, установите настройки сайта -> Разное -> дополнительно config для сайта да (Site Configuration -> Misc -> Advanced Site Config to Yes).');
jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries (Показывая начало на конец общая записей)');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Одобрен');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Отклонить запрос бронирования');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Утвердить запрос бронирования');
jr_define('_JOMRES_STATUS_APPROVED', 'Утвержден');
jr_define('_JOMRES_STATUS_REJECTED', 'Отклонено');
jr_define('_JOMRES_STATUS_INQUIRY', 'Запрос');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Бронирование требуют одобрения или подтверждения доступности ?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Если установлено да, когда производится бронирование, оно не будет отображаться на доступности календаря (и другие гости все еще могут забронировать эти дни и ресурс), до тех пор пока менеджер не подтверждает бронирования. После того, как менеджер подтвердил, бронирование вставляется как предварительная бронь (если Безразлично `перекрывают другие заказа, другие гости больше немогу забронировать те же даты) и письмо будет отправлено заказчику сделать оплату.');
jr_define('_JOMRES_ERROR', 'Ошибка');
jr_define('_JOMRES_ERROR_MESSAGE', 'Извините! Произошла ошибка при попытке обработки этой функции. Отправьте это сообщение нам и мы изучим эту ошибку.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Сообщение');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'Файл');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Линия');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email шаблоны');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Редактировать шаблон электронной почты');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Email тема');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Email текст');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Email тип');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Email имя');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Email описание');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Пожалуйста, посмотрите эту страницу для помощи Настройка электронной почты и список доступных продукции: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Отправлять письмо администратору при новом бронировании Email');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'E-mail отправлено администратору сайта, когда новый заказ сделан, если глобальная шлюз Paypal включен');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Новый заказ бронирования отелю Email');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'E-mail отправляется владельцу собственности, когда сделан новый заказ');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Отправить гостю при новом бронировании Email');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E-mail отправляется гостю когда производится новое бронирование гостем');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Письмо С Подтверждением гостю');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Версия для печати Письмо или адрес электронной почты, которые могут быть отправлены вручную собственником, чтобы подтвердить номер');
jr_define('_JOMRES_CAN_BE_APPROVED', 'Это бронирование может быть утверждено. Все выбранные ресурсы доступны для выбранной даты.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'Данное бронирование не может быть принято, поскольку некоторые ресурсы уже забронированы для выбранной даты. Вам необходимо изменить дату бронирование, в первую очередь.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Показать ссылку сделанно на Jomres в сноске Jomres в footer (нижнем колонтитуле).');
jr_define('GUEST_BUDGET', 'Бюджет');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Характеристика использования бюджета?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Загружаемые сайты только! Бюджет функция-это функция из списка недвижимости, которые гости могут использовать, чтобы выделить для них недвижимость, которые цена за ночь под определенную недвижимость. Функция имеет некоторые ограничения в том, что она может не подойти для некоторых сайтов, которые используют много различных валютах. Обратите внимание, если вы используете этот плагин и признакам списки, выбранный Вами листинг оборачивать класс автоматически изменен на 'панель-основной' когда в списке недвижимости отображается.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Имя: ');
jr_define('_JOMRES_FOR', 'Для');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'ночь');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'ночей');
jr_define('_JOMRES_LIVE_SCROLLING', 'Использовать живые скроллинг/прокрутка бесконечность в списке недвижимости?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Янв');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Фев');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Мар');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Апр');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'Май');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Июн');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Июл');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Авг');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Сен');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Окт');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Ноя');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Дек');
jr_define('DATATABLES_SEMPTYTABLE', '.');
jr_define('DATATABLES_SINFO', 'Записи с _START_ по _END_ из _TOTAL_ записей');
jr_define('DATATABLES_SINFOEMPTY', 'Записи с 0 по 0 из 0 записей');
jr_define('DATATABLES_SINFOFILTERED', '(отфильтровано из _MAX_ записей)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', '.');
jr_define('DATATABLES_SLENGTHMENU', 'Показать _MENU_ записей');
jr_define('DATATABLES_SLOADINGRECORDS', '.');
jr_define('DATATABLES_SPROCESSING', 'Подождите...');
jr_define('DATATABLES_SSEARCH', 'Поиск:');
jr_define('DATATABLES_SZERORECORDS', 'Записи отсутствуют.');
jr_define('DATATABLES_SFIRST', 'Первая');
jr_define('DATATABLES_SLAST', 'Последняя');
jr_define('DATATABLES_SNEXT', 'Следующая');
jr_define('DATATABLES_SPREVIOUS', 'Предыдущая');
jr_define('DATATABLES_SSORTASCENDING', ': активировать для сортировки столбца по возрастанию');
jr_define('DATATABLES_SSORTDESCENDING', ': активировать для сортировки столбцов по убыванию');
jr_define('DATATABLES_SHOWHIDE', 'Изменить столбцы');
jr_define('_BOOKING_ONREQUEST', 'Бронирование по запросу');
jr_define('_BOOKING_INSTANT', 'Мгновенное бронирование');
jr_define('_JOMRES_COM_FONTAWESOME', 'Включить заглавный шрифт иконка?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Установите в Yes, если ваш шаблон, не включают в себя шрифт удивительным.');
jr_define('_BOOKING_CALCQUOTE', 'Запрос бронирования');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Дорогой ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Выберите сайт');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Сайт id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'ЕС Страна?');
jr_define('_JOMRES_HLASTCHANGED', 'Последнее изменение');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Отмена бронирования E-mail');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'E-mail отправлен владельцу собственности, когда бронирования отменено');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Гость отмена брони E-mail');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E-mail отправлено гостю при новой отмене бронирования');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Отправить тестовое письмо');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Тест email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'Это тест по электронной почте из системы бронирования.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Тестовое сообщение успешно отправлено');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Тест сообщение не было отправлено');
jr_define('_INVOICE_TRANSACTIONS', 'Сделок (Transactions)');
jr_define ('_OPENEXCHANGE_API', 'Ключ API открытых курсов валют');
jr_define ('_OPENEXCHANGE_API_DESC', 'Для преобразования цен между услугами вам понадобится ключ API Open Exchange Rates. У вас ДОЛЖЕН быть ключ API для правильного отображения цен в Jomres, однако вы можете <a href = "https://openexchangerates.org / signup / free "_target =" _ blank "> зарегистрируйтесь для получения бесплатного ключа </a> (ежечасные обновления, 1000 запросов в месяц - без HTTPS, поддержки по электронной почте или дополнительных функций). Jomres загружает курсы обмена один раз в день, пока вы используете ключ только на небольшом количестве сайтов, вы вряд ли превысите эти ограничения. До Jomres 8.3 мы использовали старую, недокументированную функцию Yahoo, однако обнаружили, что использование этой функции противоречит Условиям Yahoo и Условия. В результате мы должны предположить, что эта функция может исчезнуть в какой-то момент в будущем, отсюда и переход на использование открытых обменных курсов. ');
jr_define ('_JOMRES_COMMISSION', 'Комиссия');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Если вы загружаете несколько изображений для отдельных дополнительных дополнений, будет использоваться только первое изображение.');
jr_define ('_JRPORTAL_INVOICES_PAYNOW', 'Оплатить сейчас');
jr_define ('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Этот счет подлежит оплате. Нажмите кнопку, чтобы выбрать способ оплаты.');
jr_define ('_JOMRES_EXTRAS_TEMPLATE', "Вот список некоторых замечательных вещей, которые вы можете приобрести при бронировании в этом отеле.");
jr_define ('GATEWAYS_INSTRUCTIONS', 'На этой странице вы можете настроить любые установленные шлюзы. Эти параметры позволяют принимать платежи по любым счетам на комиссию или подписку. Настройки внешнего интерфейса могут быть отменены только Paypal, все остальные шлюзы должны быть настроены через Конфигурация свойств -> вкладка Шлюзы, однако, если шлюз отображается в этом списке, он должен быть способен обрабатывать как платежи по депозитам Booking, так и платежи по счетам. ');
jr_define ('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Показать на странице сведений о свойстве?');
jr_define ('PROPERTY_DETAILS_PAGE_OPTIONS', 'Настройки страницы сведений о свойствах');
jr_define ('_JOMRES_HLIST_PROPERTIES_WARNING', 'Управление недвижимостью в Jomres осуществляется только из внешней панели сайта. На этой странице вы сможете перечислить все свойства в системе, чтобы вы могли назначать комиссионные и одобрять / отклонять их (если они включены функции). Чтобы создать новый объект, редактировать существующие, управлять бронированием или выполнять любые другие задачи, связанные с недвижимостью / бронированием, вам необходимо войти в интерфейс сайта и перейти на страницу Jomres по умолчанию. Панель интерфейса Jomres. ');
jr_define ('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Значки функций комнаты');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Категории свойств свойств');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Изменить категорию свойств свойства');
jr_define ('_JOMRES_HCATEGORY', 'Категория');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Показать характеристики свойств, разделенные на категории?');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Установите значение YES, чтобы разделить функции свойств на категории. Этот параметр влияет только на функции свойств, отображаемые на странице сведений о свойстве. На всех остальных страницах они будут отображаться без разделения на категории.');
jr_define ('_JOMRES_ACTION_UNDO_CHECKIN', 'Отменить проверку');
jr_define ('_JOMRES_ACTION_UNDO_CHECKOUT', 'Отменить оформление заказа');
jr_define ('_JOMRES_STATUS_UNISSUED', 'Не выпущено');
jr_define ('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID', 'Ваш ключ загрузки и поддержки действителен, вы сможете загружать плагины через диспетчер плагинов.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Ваш ключ загрузки и поддержки недействителен, вы НЕ сможете загружать плагины через диспетчер плагинов.');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE', 'Подтип');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Вы еще не установили подтип своего свойства. Здесь вы определяете его как что-то вроде виллы с 5 спальнями или коттеджа с 4 спальнями, и это помогает гостям, которые ищут, уточнить свой поиск.") ;
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Дайте вашей собственности подтип');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Эл. почта');
jr_define ('_JOMRES_CONTACT_SETTINGS', 'Настройки контакта');
jr_define ('_JOMRES_CONTACT_SETTINGS_DESC', 'Отсюда вы можете переопределить все контактные данные свойства (электронная почта, телефон, факс), чтобы все сообщения с гостями были отправлены вам, а не владельцам собственности.');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Заменить контактные данные списков?');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Если для этого параметра установлено значение Да, то адреса электронной почты и номера телефонов собственности будут заменены на те, которые заданы на этой вкладке. При этом все сообщения будут отправляться на указанный вами адрес электронной почты, гарантируя, что гость и собственность Владелец не может обойти систему бронирования и связанные с этим комиссионные сборы. Это также означает, что всякий раз, когда описание свойства изменяется, свойство будет иметь значение Неутверждено (если включена функция утверждения), и вам нужно будет вручную проверить описание убедиться, что менеджеры не ввели данные телефона или электронной почты в текстовые поля перед повторным подтверждением. ");
jr_define ('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Изменения, внесенные в сведения о листинге, требуют подтверждения администратором сайта. Если вы сохраните новые сведения, ваше объявление будет не опубликовано и ожидает утверждения администратором сайта, прежде чем оно снова станет видимым для посетителей сайта. Вы не сможете получать онлайн бронирования, пока ваше объявление не опубликовано и ожидает утверждения. ');
jr_define ('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Проверить запрос на бронирование');
jr_define ('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Подтвердить запрос на бронирование');
jr_define ('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Изменить запрос на бронирование');
jr_define ('_JOMRES_INVOICE_MARKASPENDING', 'Отметить счет как ожидающий');
jr_define ('_JOMRES_INVOICE_MARKEDASPENDING', 'Счет-фактура отмечена как ожидающая');
jr_define ('_JOMRES_TRACKING_ENABLE', 'Отправить анонимные данные отслеживания?');
jr_define ('_JOMRES_TRACKING_ENABLE_DESC', 'Выберите Да, чтобы отправлять анонимные данные отслеживания на Jomres.net, чтобы помочь нам лучше понять, как вы используете систему.');
jr_define ('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Пожалуйста, убедитесь, что ваши данные были введены на странице редактирования моей учетной записи, прежде чем пытаться делать заказы от имени ваших клиентов.');
jr_define ('_JOMRES_PARTNERS_GUEST_ADDRESS', "Контактные данные гостя");
jr_define ('_JOMRES_CLEAR_GUEST_DETAILS', '- Новый гость -');
jr_define ('_JOMRES_CHARTS', 'Графики');
jr_define ('_JOMRES_CHARTS_SELECT', 'Выбрать диаграмму ...');
jr_define ('_JOMRES_CHART_BOOKINGS_DESC', 'Доход за год / месяц');
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Хорошо, давайте начнем. Сначала вам нужно создать несколько комнат для этого свойства.");
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Создайте несколько комнат сейчас');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Исследования доказали, что объекты с большим количеством высококачественных изображений генерируют больше просмотров. Загрузите основное изображение и несколько изображений слайд-шоу, чтобы повысить ваши шансы на получение бронирования.');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Загрузить изображение');
jr_define ('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Создать тарифы');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG', 'Что забронируют гости?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Является ли этот тип собственности недвижимостью гостиничного типа, где вы сдаете в аренду комнаты в собственности, или недвижимостью типа виллы, где вы сдаете в аренду всю собственность за одно бронирование?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Комнаты в собственности');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Все имущество');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Оба'); // Это промежуточный параметр, обеспечивающий обратную совместимость для существующих пользователей, которые еще не обновили свои типы свойств. Его нельзя будет выбрать
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Что забронируют гости?');
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK', "Вам нужно будет указать свой адрес, чтобы гости могли найти вас, когда они приедут.");
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Обновите свой адрес');
jr_define ('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Ой, похоже, вы забыли заполнить все поля.');
jr_define ('_JOMRES_CONTANT_US', 'Свяжитесь с нами');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Добро пожаловать в ваш новый онлайн-список для');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Привет, и добро пожаловать в ваш новый отель на');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_2', "Вы недавно добавили новый объект на наш сайт, и мы хотели бы поприветствовать вас в семье.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Вы можете увидеть свою новую панель управления');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'здесь');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4', "После того, как вы настроили свой ресурс, вы можете увидеть, как он выглядит для посетителей сайта, посетив его");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'ваша первая страница.');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_5', "(он не опубликован, поэтому посетители сайта еще не могут его увидеть).");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_6', "Вверху страницы вы увидите ряд сообщений. Кнопки рядом с этими сообщениями направят вас на страницы, которые вам необходимо посетить, чтобы разместить свой объект на нашем сайте. Как только вы Если вы выполнили каждую из этих задач, посетителям нашего сайта будет намного проще найти ваш объект и сделать бронирование онлайн. ");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Если у вас есть какие-либо вопросы, пожалуйста');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'свяжитесь с нами');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_8', "и мы будем рады ответить на все ваши вопросы.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Всего наилучшего, наша команда в');
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK', "Кажется, у вас нет туров для продажи. Создайте профиль тура, затем используйте кнопку Создать , чтобы создать несколько туров.");
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Давайте создадим туры!");
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP', 'Поменять месторасположение символа валюты');
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Используйте эту опцию, чтобы переместить символ валюты сзади, перед фигурой цены или наоборот.');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Введите идентификатор своей страницы facebook, например "jomres". Оставьте это поле пустым, чтобы ничего не отображать. Не вводите https://www.facebook.com или что-либо еще.');
jr_define ('COMMON_DOWNLOAD', 'Загрузить');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Далее вам нужно будет добавить некоторые тарифы. Это ваши основные цены.');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap не включен!');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Предупреждение, у вас не включен Bootstrap в Конфигурация сайта Jomres -> вкладка Разное. Для обеспечения <i> некоторой </i> функциональности Jomres в настоящее время использует старые шаблоны на основе jQuery UI, однако над ними не работали в течение нескольких лет. Все текущие разработки и улучшения шаблонов Jomres (файлы макета) делаются в файлах шаблонов Bootstrap 3. Чтобы получить максимальную отдачу от Jomres, мы рекомендуем вам установить Bootstrap 3 на основе тема для Wordpress или Joomla. Как только вы это сделаете, вы можете включить шаблоны Jomres \'Bootstrap в конфигурации сайта.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Ваш ключ поддержки действителен. Обратите внимание, что эта лицензия не разрешает загрузку плагинов.');
jr_define ('_JOMRES_DASHBOARD_DRAG_TRASH', 'Перетащите бронирования в эту область, чтобы отменить их');
jr_define ('_JOMRES_LAT', 'Широта (nn.nnnn)');
jr_define ('_JOMRES_LONG', 'Длинный (nn.nnnn)');
jr_define ('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Убедитесь, что вы создали страницу WordPress, содержащую шорткод [jomres: xx-XX] (где xx-XX - это код языка вашего сайта, например [jomres: en-GB] или [ jomres: en-US]) в противном случае вы не сможете получить доступ к Jomres из внешнего интерфейса для управления своими объектами недвижимости и бронированиями. ');
jr_define ('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Прежде чем вы сможете создать тип комнаты, нам нужно знать, относится ли он к собственности типа отеля или собственности типа виллы.");
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Щелкните, чтобы добавить новые типы комнат');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Предупреждение, у вас есть один или несколько типов собственности без типов комнат. Имуществам нужны типы комнат, чтобы управляющие имуществом могли устанавливать тарифы.');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Используйте кнопку "Создать" для создания новых типов комнат. ');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Экскурсии');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Нет заказов / недвижимость (простой список)');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION', 'Местоположение файла журнала');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres регистрирует активность системы по умолчанию в местоположении' .JOMRES_SYSTEMLOG_PATH. ". Поскольку этот файл может содержать конфиденциальную информацию (ключи api, системные пути, информацию о шлюзе, информацию о гостях), мы настоятельно рекомендуем вам изменить этот путь в один, расположенный над корнем вашего веб-документа. Если вы не понимаете, что это означает, спросите совета у своих веб-хостов, поскольку они знают вашу файловую систему. ");
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres регистрирует подробную информацию о вашей системе, включая ключи api, системные пути, шлюз и информацию о гостях, которые не должны быть видны остальной части Интернета. Путь к вашему системному журналу не задан, поэтому системные журналы в настоящее время сохраняются в каталог '.JOMRES_SYSTEMLOG_PATH. ", что не идеально. Перейдите в раздел Конфигурация сайта -> Отладка и укажите путь в файловой системе за пределами корневого веб-сайта. В случае сомнений обратитесь к вашим веб-хостингам. как они смогут вам посоветовать. ");
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Если ваша CMS установлена ​​в корневом каталоге вашего веб-сайта, то подходящим местом будет');
jr_define ('_JOMRES_CONFIG_GMAP_KEY_WARNING', "У вас нет набора ключей Карт Google. В связи с недавними изменениями в картах Google, всем новым сайтам потребуется ключ API, чтобы иметь возможность использовать функции карты Google. Пожалуйста, <a href = 'http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key 'target =' _ blank '> см. нашу страницу руководства о том, как создать ключ API < / a> и сохраните ключ в Jomres. ");
jr_define ('JOMRES_GOOGLE_MAP_STYLE', 'Цветовая схема карты Google');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Хорошо, давайте начнем добавлять вашу собственность на веб-сайт. Нам нужно собрать здесь небольшую информацию о вашей собственности. Это позволит нам настроить базовую часть вашей собственности. Как только это будет сделано, тогда вы будет сопровождаться добавлением номеров, цен и изображений. ");
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Тип собственности помогает вам определить, как будет бронироваться собственность, например, в отелях, которые вы "продаете" только одну или две комнаты за раз, тогда как в виллах вы предлагаете всю собственность целиком.');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Обратите внимание, что адрес электронной почты не обязательно должен совпадать с тем, который вы использовали при регистрации учетной записи. Это позволяет вам иметь разные адреса для разных свойств.");

jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Минимальный депозит');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Вы можете настроить минимальную сумму депозита, которая будет взиматься. Если вы это сделаете, то параметры "Требуемый залог - это стоимость первой ночи?" и "Требуемый залог - процент?" в конфигурации свойств нельзя настроить , вместо этого все значения депозита являются процентными и должны быть, по крайней мере, указанным вами здесь. ');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Это число не может быть меньше');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Хост системного журнала');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Порт системного журнала');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Если вы хотите отправлять сообщения системного журнала на сервер системного журнала, вы можете установить здесь имя хоста или IP-адрес (например, 192.168.0.2) и порт (например, 514). Обратите внимание, если для сайта установлено значение Development ' то будут отправляться сообщения DEBUG. Если установлено значение Production, будут отправляться только сообщения уровня INFO и выше. Чтобы отключить ведение журнала на удаленный сервер, очистите поля хоста и порта. ");
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP не разрешен доступ к функциям PHP 'openlog' и 'syslog'. Это настройка на стороне сервера, если вы хотите, чтобы Jomres отправлял сообщения на сервер системного журнала, обратитесь к своим хостам. и подтвердите, разрешен ли PHP доступ к этим функциям. После включения вы сможете настроить здесь параметры сервера системного журнала. ");
jr_define ('_JOMRES_SEND_ERROR_EMAIL', 'Отправить письмо администратору сайта при возникновении ошибки?');
jr_define ('_JOMRES_SEND_ERROR_EMAIL_DESC', "Исторически проблемы, которые следует расследовать, рассылаются по электронной почте владельцам сайтов. Это может быть отличным средством для наблюдения за работой вашей системы, поскольку в ней очень много движущихся частей, и за ней сложно следить. К сожалению, пауки и боты, сканирующие ваши сайты (даже дружественные), могут непреднамеренно вызвать фатальные ошибки, и это может привести к чрезмерному количеству получаемых вами сообщений. В этом случае установите для этого параметра значение Нет. Jomres отправляет журнал сообщения как в набор файлов журналов, так и на сервер системного журнала (если позволяют ваши конкретные настройки PHP, если они не позволяют связаться с вашим хостом). Вы можете вручную проанализировать файлы, если вы ищете что-то конкретное (например, если вы разрабатываете шлюз и хотите использовать вызов функции gateway_log ().), но это много информации, которую нужно просмотреть, поэтому лучше использовать что-то вроде анализатора файлов системного журнала. Если вы разрабатываете на Linux, тогда вам доступно множество инструментов, если в Windows вы можете использовать простой инструмент http://maxbelkov.github.io/visualsyslog/. На этой странице установите для параметра Syslog host значение 127.0.0.1, а для параметра  Порт 'на 514, чтобы просматривать сообщения, зарегистрированные в этом инструменте. ");

jr_define ('_JOMRES_MANAGE_PROPERTIES', 'Управление свойствами');
jr_define ('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "У вас нет ключа API определения IP. Это необходимо, чтобы система могла автоматически определять местоположение пользователя и автоматически устанавливать его валюту и страну. Пожалуйста, <a href = 'http://www.jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> см. наше руководство страницу о том, как создать ключ API определения IP </a> и сохранить ключ в Jomres> Конфигурация сайта> Конверсии валют / Коды валют. ");
jr_define ('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "У вас нет набора ключей API открытых курсов обмена. Это необходимо, чтобы система могла автоматически загружать и использовать курсы обмена валют. Пожалуйста, <a href = 'http://www.jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> см. нашу страницу руководства о том, как создайте ключ API определения IP </a> и сохраните ключ в Jomres> Конфигурация сайта> Конверсии валют / Коды валют. ");
jr_define ('_JOMRES_PERMIT_NUMBER_TITLE', 'Номер разрешения');
jr_define ('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Согласно законодательству некоторых стран вы должны отображать номер разрешения для своей собственности. Если у вас есть такой номер, введите его здесь, и он будет добавлен в раздел заголовка свойства.');
jr_define ('_JOMRES_SHORTCODES', 'Шорткоды');
jr_define ('_JOMRES_SHORTCODES_INFO_JOOMLA', "<strong> plg_content_jomres_asamodule_mambot </strong> ДОЛЖЕН быть установлен и включен плагин Jomres Asamodule Mambot для работы этих шорткодов. Его можно найти в одном из диспетчеров подключаемых модулей Jomres. Если этот сайт был создан с помощью диспетчера подключаемых модулей Jomres. Quickstarts, значит, он, вероятно, уже установлен. ");
jr_define ('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Убедитесь, что плагин <strong> 'Jomres Shortcodes' </strong> включен. Его можно найти в диспетчере плагинов Jomres. Если этот сайт был создан с использованием одного из Quickstarts, то, вероятно, уже установлено.");
jr_define ('SHORTCODE_TASK', 'Задача');
jr_define ('SHORTCODE_DESCRIPTION', 'Описание');

jr_define ('SHORTCODE_ARGUMENTS', 'Аргументы');
jr_define ('SHORTCODE_EXAMPLE', 'Пример');
jr_define ('INTEGRITY_CHECK', 'Проверка целостности файловой системы');
jr_define ('INTEGRITY_CHECK_DESC', 'Эта функция позволяет вам проверить соответствие файловой системы той, которая предоставляется в текущей версии Jomres. Это полезно для обеспечения правильного обновления всех файлов после установки / обновления. Файлы, выделенные красным цветом, отсутствуют, файлы в Оранжевые существуют, но они отличаются от тех, что входят в текущую сборку. Здесь будут перечислены только файлы, которые представляют собой потенциальные проблемы. ');
jr_define ('INTEGRITY_CHECK_FILENAME', 'Проверка целостности файловой системы');
jr_define ('INTEGRITY_CHECK_LOCALHASH', 'Локальный хеш');
jr_define ('INTEGRITY_CHECK_BUILDHASH', 'Хеш версии');
jr_define ('INTEGRITY_CHECK_NOPROBLEMS', 'Отлично! Проблем не обнаружено.');
jr_define ('_JOMRES_PROPERTYTYPE_MARKER', 'Маркер карт Google');
jr_define ('_JOMRES_JAVASCRIPT_READMORE', 'Читать дальше');
jr_define ('_JOMRES_JAVASCRIPT_READLESS', 'Меньше читать');
jr_define ('_JOMRES_TOURIST_TAX_TITLE', 'Туристический налог');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE', 'Ставка туристического налога');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Установить ставку туристического налога. Туристический налог рассчитывается только после создания первоначального бронирования и добавляется на страницу подтверждения бронирования в поле дополнительных услуг.');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Процент?');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Установите Да, если налог является процентным, или Нет, если это фиксированная плата.");
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Влияет на всю стоимость бронирования?');
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Установите значение Да, если налог должен покрывать всю стоимость бронирования, то есть это процент от стоимости проживания плюс любые дополнительные услуги, или Нет, если он рассчитывается только на основе стоимости общая вместимость. Если для параметра Is Percentage, указанного выше, установлено значение Нет, то этот параметр игнорируется. ");
jr_define ('_JOMRES_TOURIST_TAX_NOTE', 'Имейте в виду, что к этому бронированию будет добавлен туристический налог. Вы сможете увидеть налог на странице просмотра бронирования.');
jr_define ('NO_LICENSE_MESSAGE', "Вы не сохранили номер лицензии в конфигурации сайта, поэтому вы не сможете загружать плагины. После сохранения действительного лицензионного ключа вы сможете установить любые плагины, указанные как Основные плагины. ");
jr_define ('INVALID_LICENSE_MESSAGE', "Похоже, вы используете номер лицензии, который недействителен или срок действия истек. Как только у вас будет сохранен действующий лицензионный ключ, вы сможете установить любые плагины, перечисленные как основные плагины.");
jr_define ('VALID_LICENSE_MESSAGE', "Поздравляем, вы используете действующий номер лицензии и можете устанавливать подключаемые модули Core через диспетчер подключаемых модулей Jomres.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Эта страница позволяет загружать изображения для вашей собственности и того, что вы предлагаете. На ней есть одна основная кнопка и вторая кнопка, которая позволяет вам выбирать определенные ресурсы для загрузки изображений. Итак, свойство Main изображение и слайд-шоу будут отображать только одну кнопку, но если вы создали какие-либо, например, дополнительные функции или комнаты, вы увидите вторую кнопку, где вы можете загружать изображения для этих конкретных ресурсов. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Эта страница позволяет загружать изображения для вашей собственности и того, что вы предлагаете. На ней есть одна основная кнопка и вторая кнопка, которая позволяет вам выбирать определенные ресурсы для загрузки изображений. Итак, свойство Main изображение и слайд-шоу будут отображать только одну кнопку, но если вы создали какие-либо дополнительные функции, вы увидите вторую кнопку, где вы можете загружать изображения для этих конкретных ресурсов. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Сначала выберите изображения, которые вы хотите загрузить, нажав Добавить изображение или перетащив мышью. Они появятся в столбце справа. </li>
  <li> Над этой областью используйте кнопку \"Выбрать ресурс\", чтобы выбрать, для какого ресурса вы хотите загрузить изображения. Вам может быть предложена возможность выбрать конкретный ресурс внизу. </li>
  <li> Выбрав ресурс, вы можете нажать кнопку Загрузить изображение под изображением, чтобы связать его с этим ресурсом. После загрузки изображение исчезнет из столбца на правом сайте и появится слева. </li>
  <li> Используйте кнопку Корзина рядом с существующими изображениями, чтобы удалить изображения, которые больше не нужно показывать. </li>
  <li> Вы можете изменить порядок отображения файлов в слайд-шоу, переименовав их перед загрузкой, поскольку они отображаются на страницах в алфавитном порядке. </li>
</ol>
 ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Рядом с кнопкой Ресурс вы можете увидеть кнопку Предварительный просмотр. Если вы нажмете на нее, вы увидите всплывающее окно, показывающее, как загруженные в данный момент изображения будут выглядеть на странице. Это поможет вам понять представление о том, как изображения будут выглядеть для ваших клиентов. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Нет ограничений на количество изображений, которые вы можете загрузить. Изображения автоматически изменяют размер при загрузке. Вы можете загружать только файлы JPG и PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "В идеале любые загружаемые вами изображения должны быть как минимум");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "пикселей в ширину, иначе они могут выглядеть нечеткими после загрузки.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Любые загружаемые вами изображения не могут быть больше чем");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "по размеру.");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Выберите ресурс, для которого вы хотите загрузить изображения");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Определенный ресурс");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Изображения уже загружены для этого ресурса");
jr_define ('_JOMRES_MARKDOWN_TITLE', 'Форматирование текста');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Вы можете ввести текст здесь, используя простое форматирование Markdown. Вам не нужно знать какой-либо HTML, просто используйте кнопки, чтобы информация выглядела так, как вы хотите, или отформатируйте текст в соответствии с этими примерами.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Акцент');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'жирный');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'курсив');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'зачеркивание');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Заголовки");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Большой заголовок');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Средний заголовок");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Маленький заголовок');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Крошечный заголовок');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Списки");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Общий элемент списка');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Элемент нумерованного списка');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Ссылки');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Текст для отображения');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Цитаты');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Это цитата.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Может занимать несколько строк!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Изображения');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Таблицы');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Столбец');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Показывать изображения свойств как слайд-шоу в списке свойств?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Если установлено значение yes, будет отображаться слайд-шоу основных изображений свойств. Если установлено значение no, будет отображаться первое основное изображение свойства.');
jr_define ('EDIT_CMS_USER', 'Редактировать пользователя CMS');
jr_define ('BOOKING_MADE_BY', 'Бронирование сделано');
jr_define ('_JOMRES_ROUTER_FEATURES', 'Удобства');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Типы комнат');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL внешней формы бронирования');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Здесь вы можете установить внешний URL-адрес, если хотите использовать сторонний веб-сайт для бронирования. Все кнопки бронирования jomres будут указывать на этот URL. Оставьте это поле пустым, если вы хотите использовать форму бронирования Jomres . ');
jr_define ('_JOMRES_ROOM_TAGLINE', 'Слоган (краткое описание комнаты / подзаголовок)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Описание комнаты');
jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Гостевой черный список');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Если этот гость находится в черном списке, он больше не сможет делать бронирования в этом отеле.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Обработчик сеанса');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Сохранить файлы сеанса jomres на диск или в базу данных. Рекомендуется: база данных');
jr_define ('_JOMRES_MAP_HEIGHT', "Высота карты (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Уровень масштабирования карты");
jr_define ('_JOMRES_MAP_MAPTYPE', "Тип карты");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Диспетчер замены шаблонов");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Пакеты шаблонов - это плагины, которые могут предоставлять шаблоны замены для различных основных файлов шаблонов Jomres.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "На этой странице перечислены все файлы шаблонов, которые могут быть переопределены файлами шаблонов пакета шаблонов. Если вы хотите переопределить определенный файл шаблона, нажмите кнопку редактирования для этого файла, на следующей странице вы будете возможность выбрать версию, с помощью которой вы хотите переопределить. Обратите внимание, что эти переопределения имеют приоритет над Jomres Core и любыми переопределениями тем / шаблонов Wordpress или Joomla. Вы можете отключить переопределение, удалив его на странице Переопределения шаблонов списка. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Название шаблона");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Текущий путь");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Не заменено");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Вы можете выбрать, какой файл шаблона заменить файлы основного шаблона, изменив раскрывающийся список");
jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Процент забронированных номеров");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Процент забронированных номеров");
jr_define ('_JOMRES_SELECT_WIDGETS', "Выбрать виджеты");
jr_define ('_JOMRES_INTERVAL', "Интервал");
jr_define ('_JOMRES_TIMELINE', "Хронология");
jr_define ('_JOMRES_CPANEL_GRID', "Домашний макет панели управления");
jr_define ('_JOMRES_CPANEL_GRID_DESC', "Выберите макет сетки на домашней странице панели управления веб-интерфейсом.");

jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Маркеры карты Google");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Городские изображения");
jr_define ('_JOMRES_PTYPE_CHANGE_WARNING', "Изменение типа свойства удалит все комнаты, тарифы, настройки свойств и сбросит доступность.");
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Обратите внимание, что после обновления вы должны обновить все уже установленные плагины Jomres через диспетчер плагинов Jomres. Если у вас установлены плагины Core, но нет действующей лицензии Jomres, мы <em> делаем не </em> рекомендую обновлять Jomres, так как старые плагины часто могут не работать с новыми версиями Jomres. ');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Обратите внимание, что после обновления вы должны обновить все уже установленные плагины Jomres через диспетчер плагинов Jomres.');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Если вы хотите обновить Jomres и его плагины, вам потребуется продление лицензии. Пожалуйста, посетите <a href='https://www.jomres.net/pricing' target='_blank'> нашу сайт </a> для получения дополнительной информации. В большинстве случаев эти лицензии составляют 50% от цены полной лицензии. Пожалуйста, убедитесь, что вы вошли в наш магазин, прежде чем пытаться приобрести продление. ");
jr_define ('_JOMRES_PAYMENT_METHOD_USED', "Способ оплаты:");

jr_define ('_JOMRES_PRICES', "Подключиться");


jr_define ('_OAUTH_TITLE', "Управление ключами приложения");
jr_define ('_OAUTH_APPS', "Сведения о клиенте REST API");
jr_define ('_OAUTH_IDENTIFIER', "Идентификатор");
jr_define ('_OAUTH_APIKEY', "Идентификатор клиента");
jr_define ('_OAUTH_SECRET', "Секрет");
jr_define ('_OAUTH_CREATED', "Созданное / обновленное приложение");
jr_define ('_OAUTH_CLIENT_ID_INFO', "Идентификатор клиента и секрет создаются для вас. Идентификатор предназначен для того, чтобы вы могли легко идентифицировать эту пару ключей.");
jr_define ('_OAUTH_SCOPE_TITLE', "Разрешения (что может делать клиент)");
jr_define ('_OAUTH_SCOPE_CATEGORY_USER', "Разрешения пользователя");
jr_define ('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Права доступа к свойствам");

jr_define ('API_DOCUMENTATION_TITLE', "Документация по API REST приложения");

jr_define ('_OAUTH_CONFIG', "Конфигурация ядра API");

jr_define ('_OAUTH_CONFIG_SHOW', "Показать параметры конфигурации клиента API в главном меню Jomres?");
jr_define ('_OAUTH_CONFIG_SHOW_DESC', "Вы можете не показывать параметры конфигурации клиента API в разделе Моя учетная запись главного меню Jomres. Вместо этого вы можете решить, что хотите отображать их на других страницах, используя шорткоды Jomres.");

jr_define ('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Отображает страницу документации ядра API. Ядро API позволяет пользователям создавать клиентов API, которые затем используются для доступа к функциям API, описанным в документации ядра API.");

jr_define ('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Отображает страницу администрирования ядра API, где менеджеры свойств могут настраивать клиентов API. Обратите внимание, что это функция только для зарегистрированных пользователей, поэтому пользователи должны быть зарегистрированы и авторизованы, прежде чем они смогут увидеть эту страницу.");

jr_define ('API_METHODS_TITLE', "Методы API");
jr_define ('API_METHODS_DESCRIPTION', "Этот список методов основан на установленных вами подключаемых модулях функций API и создается автоматически. Если вы устанавливаете или удаляете подключаемый модуль функций API, вы должны посетить эту страницу, чтобы восстановить этот список методов API, доступных на вашем сайте. ");

jr_define ('_OAUTH_REDIRECT_URI', "URI перенаправления");
jr_define ('_OAUTH_IDENTIFIER_PLACEHOLDER', "Дайте мне имя, которое имеет для вас значение, например Мой телефон ");

jr_define ('_OAUTH_GRANT_TYPES', "Эта система поддерживает два типа предоставления: учетные данные клиента и неявное. Если вы используете поток <em> client_credentials </em>, тогда вам понадобятся как идентификатор клиента, так и секрет клиента. Если вы используете <em > неявно </em>, тогда ваше приложение отправит только идентификатор клиента, и вы войдете в систему, чтобы явно авторизовать это приложение. ");

jr_define ('_OAUTH_IMPLICIT_NOTES', "Чтобы использовать поток типа <em> неявного </em> типа предоставления, вам нужно будет использовать этот URL-адрес для авторизации ваших приложений. Когда этот URL-адрес вызывается, и вы авторизуете приложение, система выдаст токен, который ваши приложения затем будут использовать для вызова API этой системы ");
jr_define ('_OAUTH_AUTHORISATION_URL', "URL авторизации");
jr_define( 'WEBHOOKS_CORE', 'Webhooks' );
jr_define ('_WEBHOOKS_CONFIG_SHOW', "Показать параметры конфигурации Webhook в главном меню Jomres?");
jr_define ('_WEBHOOKS_CONFIG_SHOW_DESC', "Вы можете не показывать параметры конфигурации Webhook в разделе Моя учетная запись главного меню Jomres. Вместо этого вы можете решить, что хотите отображать их на других страницах, используя шорткоды Jomres.");

jr_define ('WEBHOOKS_DOCUMENTATION_TITLE', "Документация по Webhooks");

jr_define ('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Отображает страницу документации ядра API. Ядро API позволяет пользователям создавать клиентов API, которые затем используются для доступа к функциям API, описанным в документации ядра API.");

jr_define ('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Отображает страницу администрирования ядра API, где менеджеры свойств могут настраивать клиентов API. Обратите внимание, что это функция только для зарегистрированных пользователей, поэтому пользователи должны быть зарегистрированы и авторизованы, прежде чем они смогут увидеть эту страницу.");

jr_define ('WEBHOOKS_INTEGRATION_EDIT', 'Редактировать интеграцию');
jr_define ('WEBHOOKS_INTEGRATION_ID', 'Идентификатор интеграции');
jr_define ('WEBHOOKS_INTEGRATION_URL', 'URL или имя');
jr_define ('WEBHOOKS_ENABLED', 'Включено');

jr_define ('WEBHOOKS_AUTH_METHOD_SELECT', 'Метод аутентификации / Интеграция');

jr_define ('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Любые созданные вами веб-перехватчики не будут срабатывать, поскольку вам не назначены какие-либо свойства. Менеджерам супер-свойств обычно не назначаются отдельные свойства, поэтому вам может потребоваться новый пользователь для создания веб-перехватчиков.');
jr_define ('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Любые созданные вами веб-перехватчики будут запускаться по следующим свойствам:');


jr_define ('PORTAL_REVIEWS_LIMIT', 'Лимит отзывов');
jr_define ('PORTAL_REVIEWS_LIMIT_DESC', 'Используйте этот параметр, чтобы ограничить количество обзоров, отображаемых на странице сведений о свойстве.');
jr_define ('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Показать все отзывы');

jr_define ('VIDEO_TUTORIALS', 'Видеоуроки');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Минимальная сумма депозита');
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Если рассчитанный депозит меньше этого значения, тогда установите депозит на это значение вместо этого. Это значение само может быть переопределено, если оно не удовлетворяет настройкам минимального депозита сайта. Оставьте его равным 0, чтобы не использовать настройку. ");

jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Чтобы увеличить скорость вашего сайта, мы рекомендуем импортировать детали существующего сайта и изображения свойств в базу данных.');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Импортировать сведения о существующих изображениях в базу данных');

jr_define ('_JOMRES_S3_ACTIVE_DESC', 'Экспериментальная функция. Если она включена, изображения, загруженные с помощью функции медиацентра, также будут копироваться в вашу корзину Amazon S3 и обслуживаться с URL-адреса корзины Amazon S3. При первом включении вы также будете предложено импортировать существующие изображения в вашу корзину S3. ');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN', 'Домен CloudFront');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Замените домен Amazon S3 по умолчанию на домен CloudFront');
jr_define ('_JOMRES_S3_SSLTLS_DESC', 'Рекомендуется включить. Только для Windows и Mac OSX, если libcurl не был построен с поддержкой Schannel или Secure Transport (собственные библиотеки SSL, включенные в Windows и Mac OS X), вы должны установить для этого параметра значение Нет.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Вы включили интеграцию с Amazon S3, поэтому вам нужно скопировать все существующие изображения в корзину S3. Теперь изображения предоставляются посетителям вашего сайта с вашего URL-адреса Amazon S3, поэтому вам понадобится сначала скопировать их в свою корзину S3, иначе они не будут видны посетителям вашего сайта. ');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'После того, как вы нажмете эту кнопку, пожалуйста, не прерывайте процесс и ждите сообщения об успехе или ошибке. В зависимости от скорости сервера это может занять некоторое время.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Копировать существующие изображения в корзину Amazon S3');


jr_define ('JOMRES_INCOMPLETE', 'Неполный');
jr_define ('JOMRES_WATING_APPROVAL', 'Ожидает утверждения');
jr_define ('JOMRES_GOOGLE_MAPS_PDETAILS', 'Карта сведений о собственности');

jr_define ('HAS_STARS_TITLE', 'Разрешить классификацию звезд?');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Принудительно повторно импортировать детали изображения в базу данных');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Принудительно повторно загрузить изображения в корзину S3');
jr_define ('_JOMRES_UNINSTALL_TABLES', 'Удалить все данные Jomres при деинсталляции?');
jr_define ('_JOMRES_UNINSTALL_TABLES_DESC', 'Если установлено в yes, Jomres удалит все свои таблицы базы данных при удалении. Это удалит все данные Jomres из базы данных и не может быть отменено.');
jr_define ('TRANSACTION_IDS', 'идентификатор транзакции');
jr_define ('PAYMENT_METHOD', 'Способ оплаты');
jr_define ('POA_DISPLAY_PRICE', 'Цена POA');
jr_define ('POA_DISPLAY_PRICE_DESC', 'Когда свойства отображаются в списке, система попытается найти действительную цену из настроенных тарифов на основе либо сегодняшней даты, либо, если даты использовались в поиске, то на основе этих дат . Если нет, то будет отображаться POA (Цена по заявке), что означает, что гость должен связаться с вами, чтобы узнать цену. Если вы хотите, вы можете настроить цену здесь, которая будет отображаться вместо текста POA. Этот рисунок будет "резервной" ценой для отображения, если нельзя определить другую цену. ');

jr_define ('PLUGINMANAGER_INSTALL', 'Вам необходимо установить диспетчер плагинов, прежде чем вы сможете устанавливать плагины Jomres, вы хотите сделать это сейчас?');
jr_define ('PLUGINMANAGER_REINSTALL', 'Вам необходимо обновить диспетчер плагинов, прежде чем вы сможете обновить любые установленные плагины, вы хотите сделать это сейчас?');
jr_define ('PLUGINMANAGER_INSTALL_BUTTON', "Давайте сделаем это!");

jr_define ('INCLUDEINFILTERS', 'Включить в фильтры?');
jr_define ('INCLUDEINFILTERS_DESC', 'Фильтры свойств свойств в Ajax Composite Search могут быть очень длинными, поэтому вы можете установить для этого параметра значение Нет, чтобы эта функция не отображалась в списке свойств свойств.');

jr_define ('REVIEW_REMINDER_PT1', "У вас есть");
jr_define ('REVIEW_REMINDER_PT2', "бронирование (я), о котором вы еще не оставили отзыв. Пожалуйста, оставьте отзыв.");
jr_define ('BOOKINGS_AWAITING_REVIEWS', "Заказы, ожидающие отзывов");
jr_define ('REVIEW_NAG', "Придать гостям отзывы?");
jr_define ('REVIEW_NAG_DESC', "После того, как гость был исключен из бронирования, система напомнит ему опубликовать отзыв о своем бронировании. Установите для этого параметра значение Нет, чтобы отключить это напоминание.");

jr_define ('HIDDEN_ADDRESS_SETTING', "Скрыть адрес?");
jr_define ('HIDDEN_ADDRESS_SETTING_DESC', "Если вы установите для этого параметра значение Да, то только гости, которые уже разместили бронирование в вашем объекте размещения, смогут увидеть его почтовый адрес. Вы можете использовать этот параметр, чтобы скрыть точное местоположение объекта. если, например, его обычно оставляют без присмотра. ");
jr_define ('HIDDEN_ADDRESS_PLACEHOLDER', "СКРЫТО");
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Оптимизировать изображения при загрузке?');
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Если этот параметр включен, изображения будут оптимизированы для Интернета (размер файла может быть меньше на 75%). В зависимости от типа загруженного изображения на вашем сервере должна быть установлена ​​одна или несколько из этих библиотек. поставщик: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define ('DATABASE_INTEGRITY_CHECK', 'Проверка целостности базы данных');
jr_define ('OBSOLETE_FILES_CHECK', 'Проверка устаревших файлов');
jr_define ('DATATABLES_COLVIS', 'Видимость столбца');

jr_define ('API_TOKEN_LIFETIME', 'Срок службы токена API');
jr_define ('API_TOKEN_LIFETIME_DESC', 'Как долго токен API остается действительным, в секундах. 86400 = 1 день, 31536000 = 1 год');


jr_define ('ENCRYPTION_TITLE', 'Шифрование');
jr_define ('ENCRYPTION_FILE_LOCATION', 'Расположение файла шифрования');
jr_define ('ENCRYPTION_FILE_LOCATION_DESC', '** Никогда не удаляйте файл шифрования ** <br/> Данные пользователя хранятся в зашифрованном виде в таблицах, чтобы обеспечить надежную защиту "неактивных данных" в соответствии с рекомендациями GDPR. По умолчанию ключ шифрования хранится в файле encryption_key.class.php в корне вашей установки Jomres (обычно / public_html / jomres). Вы можете изменить место хранения файла здесь. Если вы действительно измените местоположение, вы должны ПЕРЕМЕСТИТЬ файл, не ждите, пока Джомрес создаст новую версию, иначе вы не сможете расшифровать данные ваших гостей. ');

jr_define ('_JOMRES_COM_YOURBUSINESS_DESC', 'Информация, которую вы сохраняете здесь, будет использоваться в счетах-фактурах, созданных для этого свойства');

jr_define ('_JOMRES_GDPR_POLICIES', 'Политика GDPR');
jr_define ('_JOMRES_GDPR_POLICIES_DESC', 'Здесь вы можете настроить, через сколько времени после создания бронирования или счета-фактуры они удаляются из системы, чтобы обеспечить соответствие GDPR.');

jr_define ('_JOMRES_GDPR_BOOKING_RETENTION', 'Срок хранения бронирования (в днях)');
jr_define ('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Через сколько дней после даты отъезда бронирование должно быть удалено? Когда оно удаляется, удаляются и бронирование, и счет-фактура. Типичный срок хранения может составлять 365 дней.');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION', 'Срок хранения (без бронирования) счета-фактуры');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Другие счета-фактуры, такие как счета за комиссию и подписку, не привязаны к бронированиям. В результате они не будут удалены при удалении счетов-фактур и договоров бронирования. В зависимости от вашей страны и вашей деловой практики, вам нужно будет настроить другой период хранения. Типичный срок хранения может составлять 3653 дня, что составляет 10 лет. ');


jr_define ('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Ваши данные');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Некоторые функции этого веб-сайта должны хранить информацию о вашем посещении. Это используется только для предоставления вам услуг, никогда не передается никому и удаляется, когда больше не требуется.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'ВЫ ДАЕТЕ НАМ РАЗРЕШЕНИЕ НА ХРАНИТЬ ДАННУЮ ИНФОРМАЦИЮ ??');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Подробно');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Вы должны дать согласие на хранение этих данных, чтобы вы могли делать заказы на этом сайте. Независимо от того, даете ли вы согласие на сохранение ваших данных, мы будем хранить файл cookie на вашем компьютере, чтобы сообщить независимо от того, согласились вы или нет. Это помогает нам гарантировать, что мы не будем постоянно спрашивать вас, хотите ли вы согласиться или нет, и он не содержит никакой информации, позволяющей установить личность (PII). Если вы передумаете, вы можно в любое время посетить страницу "Разрешения приложений", чтобы зарегистрироваться или отказаться. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Информация хранится для разных периодов времени в зависимости от характера вашего визита. Итак, если вы просто осматриваетесь, мы сохраним информацию о приблизительном географическом местоположении (на уровне страны). Если вы выполните поиск, то сделайте формы поиска более удобными для пользователей, мы будем хранить последние данные, которые вы искали. Эта информация обычно хранится максимум 24 часа и используется только для того, чтобы сделать ваше посещение более приятным. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Когда вы делаете бронирование у нас, по необходимости сохраняется дополнительная информация.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Технические детали формы бронирования фиксируются и хранятся не более 60 дней. Это необходимо для того, чтобы заказы по запросу могли быть преобразованы в полные бронирования после подтверждения бронирования и для анализа нашими командами на случай возникновения проблем с бронированием. Если вы не вошли в систему во время бронирования, мы вышлем вам имя пользователя и пароль по электронной почте, чтобы вы могли просмотреть историю своих бронирований и воспользоваться своим правом на забвение (RTBF), если вы желаю сделать это. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Данные, введенные в форму бронирования, например имя, адрес электронной почты, реальный адрес, хранятся максимум 365 дней после даты отъезда бронирования. Эта информация хранится в зашифрованном виде в нашей базе данных. чтобы его могли просматривать только авторизованные люди. Если вы делаете бронирование, то по закону мы должны хранить вашу PII, пока оно действительно. После того, как бронирование будет завершено, либо потому, что оно было отменено, либо вы выписались, вы должны иметь возможность использовать свой RTBF, войдя в систему и посетив страницу "Ваши данные". Информация о счетах для завершенных бронирований по-прежнему будет надежно храниться в нашей базе данных, чтобы гарантировать, что мы соблюдаем соответствующие налоговые законы, но вы сможете удалить все остальные PII после завершения бронирования. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Если вы даете согласие на хранение вашей информации, как описано выше, мы юридически обязаны хранить это согласие в нашей базе данных. Эта информация будет включать ваш IP-адрес и содержание формы согласия. сохранить это уведомление о согласии на неопределенный срок (это требование закона). ');

jr_define ('_JOMRES_GDPR_CONSENT_NOT_SET', 'Вы еще не сообщили нам, можем ли мы собирать личную информацию о вас');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Вы дали согласие на сбор необходимой информации, позволяющей установить личность, для оформления бронирования');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_OUT', "Вы сказали нам не собирать информацию, позволяющую установить личность");

jr_define ('_JOMRES_GDPR_NOCONSENT_INTRO', 'Вы не дали нам разрешение на сбор ваших личных данных');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Чтобы вы могли выполнять определенные действия на этом веб-сайте, мы должны собирать вашу личную информацию, но вы не дали нам на это разрешения.');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Измените свои разрешения');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Продолжить просмотр свойств');
jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App permissions' );
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Гостевые данные');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Это данные, которые хранятся для вас различными объектами недвижимости. В разных отелях могут храниться разные записи, в зависимости от того, что вы ввели при бронировании.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'У вас нет данных, хранящихся ни в каких отелях в этой системе');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Данные профиля');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Это основной набор данных, который мы храним для вас, в отличие от тех, которые вы предоставили другим свойствам.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Вы не сохранили никакой информации профиля');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Вот личная информация, которую мы храним на этом веб-сайте для вас. Она построена в формате JSON (JavaScript Object Notation), который представляет собой легкий формат обмена данными. Его легко читать и писать, и машинам будет легко разбирать и генерировать. ');

jr_define ('_JOMRES_GDPR_REDACTION_STRING', 'Анонимно');

jr_define ('_JOMRES_GDPR_MY_DATA', 'Ваши данные');
jr_define ('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Принимая настоящее Соглашение об условиях использования (настоящее "Соглашение"), вы соглашаетесь со следующим:

<ul>
<li>
Вы имеете право бронировать отели через этот сайт;
</li>
<li>
Вам исполнилось 18 лет;
</li>
<li>
Вы обладаете юридическими полномочиями создавать юридические обязательства;
</li>
<li>
Вы будете использовать Сайт в соответствии с настоящим Соглашением;
</li>
<li>
Вы будете использовать Сайт только для законного бронирования для себя или другого лица, от имени которого вы имеете законные полномочия;
</li>
<li>
Вы проинформируете таких других лиц об этом Соглашении, которое применяется к оговоркам, которые я сделал от их имени, включая все правила и ограничения, применимые к ним;
</li>
<li>
Вся информация, предоставленная вами на Веб-сайт, является достоверной, точной, актуальной и полной; а также
</li>
<li>
Вы будете защищать информацию о своей учетной записи, а также будете контролировать и нести полную ответственность за любое использование вашей учетной записи вами и кем-либо, кроме вас.
</li>
</ul>
');
jr_define ('_JOMRES_GDPR_MY_DATA_LEAD', 'Безопасность и прозрачность важны для нас.');
jr_define ('_JOMRES_GDPR_MY_DATA_INTRO', 'Мы очень серьезно относимся к нашим обязанностям по хранению ваших данных. Вся личная информация (PII) хранится в зашифрованном виде в нашей базе данных с использованием стандартных алгоритмов, чтобы гарантировать, что только авторизованные пользователи могут просматривать эту информацию.');

jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Вы можете загрузить всю личную информацию, которую мы храним для вас.');
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Загрузить сейчас');

jr_define ('_JOMRES_GDPR_MY_RTBF_LEAD', 'Право на забвение (RTBF)');
jr_define ('_JOMRES_GDPR_MY_RTBF_INTRO', 'Мы считаем, что у вас должна быть возможность <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> удалить </a> свой < a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_ blank"> Личная информация </a>, если вы хотите и если это возможно. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTRIGN_OPTEDIN', 'Вы не зарегистрированы на этом сайте. Ваше общее местоположение (страна) и IP-адрес будут храниться не более 24 часов, а затем будут удалены.');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTRIGN_OPTEDOUT', 'Вы не зарегистрированы на этом сайте и отказались от сбора данных. Мы не сохранили вашу PII.');

jr_define ('_JOMRES_GDPR_MY_RTBF_RIGN_NOBOOKINGS', 'Вы зарегистрированы на сайте и у вас нет ожидающих или активных бронирований. Мы можем анонимизировать большую часть информации, которую мы храним для вас в настоящее время. Вы хотите это сделать?');
jr_define ('_JOMRES_GDPR_MY_RTBF_RIGN_NOBOOKINGS_NOTE', 'Примечание. Это не удаляет вашу учетную запись, а просто анонимизирует наши записи, чтобы ваша учетная запись не могла быть связана с вами как с человеком. По закону мы должны продолжать хранить вашу PII для выставления счетов, однако мы будем удалить все гостевые записи. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_RULL_FUTUREBOOKINGS', 'Вы зарегистрированы на сайте, однако у вас есть незавершенные бронирования, и мы не можем анонимизировать ваши данные в настоящее время. Эти данные будут храниться максимум в течение одного года после завершения бронирования, затем они будут быть удаленным, если вы не решите удалить его до этого времени. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_RIGN_PROPERTYMANAGERS', 'Поскольку вы являетесь управляющим недвижимостью на нашем сайте, мы не можем предложить вам возможность автоматического удаления ваших данных. Вместо этого свяжитесь с нами напрямую, чтобы мы могли передать вашу собственность (-ы) другому менеджеру. Как только мы это сделаем и удалим ваш статус управляющего недвижимостью, вы сможете автоматически удалить свои данные. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Забудь меня!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Это нельзя отменить!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Ваши данные удалены!');

jr_define ('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'К сожалению, вы не можете сделать бронирование, так как ваш адрес электронной почты недействителен');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Эта страница дает вам возможность анонимизировать всех гостей, чья информация хранится в системе. Это позволяет вам соответствовать GDPR, однако вы не можете редактировать любую другую информацию на этой странице. Для этого вы должны войти в интерфейс как управляющий недвижимостью. Предполагается, что исторический гость связался с вами с просьбой разрешить им воспользоваться своим правом быть забытым. Если они не могут войти в интерфейс сайта (возможно, пользователь не был создан для них при бронировании), то вы можете использовать эту область, чтобы анонимизировать их, как только вы подтвердите их личность. ');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Анонимизировать гостя');
jr_define ('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'УДАЛЕННАЯ СОБСТВЕННОСТЬ');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Гостевые данные анонимны');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Невозможно анонимизировать');

jr_define ('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Нам нужно ваше разрешение на хранение вашей информации, прежде чем вы сможете сделать заказ. НАЖМИТЕ ЗДЕСЬ, чтобы дать нам разрешение.');

jr_define ('_JOMRES_GDPR_CONFIG_ENABLE', 'Включить функциональность, совместимую с GDPR?');
jr_define ('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'МЫ НЕ РЕКОМЕНДУЕМ ВЫ ОТКЛЮЧАТЬ ФУНКЦИОНАЛЬНОСТЬ, СООТВЕТСТВУЮЩЕЙ GDPR. В Jomres есть встроенные функции, которые помогут вам убедиться, что раздел Jomres вашего сайта соответствует GDPR. Если вы отключите эту функцию (и вы не должны этого делать, если вы находитесь в ЕС или ведете бизнес с гражданами ЕС), тогда Jomres будет автоматически предполагать, что каждый посетитель сайта дал свое разрешение на использование своих личных данных. Разрешение приложения и страницы "Мои данные" не будут отображается, и пользователям не будет предложено дать свое разрешение на сбор данных. ');


jr_define ('EMPTY_TEMP_DIR', 'Пустой временный каталог');
jr_define ('EMPTY_TEMP_DIR_DONE', 'Временные файлы удалены');

jr_define ('MACHINE_TRANSLATION', 'Машинный перевод');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG', 'Исходный язык');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Функцию машинного перевода можно подключить. Это позволяет вводить строки на одном языке, и переводы могут быть получены из удаленных служб. Имейте в виду, что не все службы перевода поддерживают все языки. См. эти службы для Подробнее.' );

jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Типы комнат');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Новый тип комнаты');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Вы можете создавать и редактировать типы комнат на этой странице. Эти типы комнат будут относиться только к этому свойству. При настройке вашей собственности вам сначала понадобятся некоторые типы комнат. Вы можете использовать любые типы комнат, созданные администратор, или вы можете добавить свой собственный. После того, как у вас будет один или несколько типов номеров, вы можете создавать номера этого типа. После того, как у вас есть номера, вы можете создавать тарифы (цены) для этих номеров, потому что тарифы связаны с типами номеров . ');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Менеджеры могут создавать типы комнат?');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Используйте этот параметр, чтобы настроить, могут ли менеджеры создавать свои собственные типы комнат во внешнем интерфейсе. Мы настоятельно рекомендуем оставить для этого параметра значение Нет, когда вы впервые начинаете использовать Jomres, особенно если вы создаете портал, потому что вы должны создавать все типы комнат в области администратора. Типы комнат, созданные менеджерами, будут отображаться в формах поиска, но поскольку эти типы комнат относятся к отдельным свойствам, только одно свойство будет отображаться в результатах поиска, если этот тип комнаты выбран во время поиска. Если вы хотите, чтобы только суперменеджеры могли создавать типы комнат, оставьте для этого параметра значение Да и используйте плагин управления доступом, чтобы только суперменеджеры могли просматривать опцию меню "Настройки> Типы комнат". Только объекты, которые сдаются в аренду вне помещений в объекте и использовать режимы редактирования тарифов Advanced или Micromanage, можете использовать эту опцию. Свойства типа виллы / квартиры не смогут использовать его. ');
jr_define ('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Тип помещения / свойства обновлен');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Показать типы комнат в параметрах поиска');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Если вы разрешите менеджерам собственности создавать свои собственные типы комнат, вы можете выбрать, показывать или нет эти созданные типы комнат в параметрах поиска, где вы выбрали отображение типов комнат.');
jr_define ('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Вы не должны повторно использовать один и тот же адрес электронной почты для каждого бронирования. <br/> Если у вас есть уникальный домен (например, не адрес электронной почты Gmail) для вашей компании, используйте номер телефона гостя в качестве адреса электронной почты. В этом случае адрес электронной почты будет выглядеть примерно так: 123456@mydomain.com <br/> Это обеспечит создание нового гостя при создании бронирования. ");

jr_define ('_JOMRES_LOGIN_USERNAME', 'Адрес электронной почты');
jr_define ('_JOMRES_LOGIN_PASSWORD', 'Пароль');
jr_define ('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Мы рады, что вы хотели бы бронировать у нас снова. Чтобы иметь возможность управлять всеми своими бронированиями вместе, необходимо войти в систему, чтобы бронирование можно было добавить в вашу учетную запись. Это также гарантирует, что вы имеете право использовать предоставленный адрес электронной почты. ");

jr_define ('_JOMRES_LOGIN_RESET_MESSAGE', 'Если вы не знаете свой пароль, мы можем отправить вам электронное письмо для сброса пароля. Следуйте инструкциям в этом письме, чтобы сбросить пароль.');
jr_define ('_JOMRES_LOGIN_RESET_BUTTON', 'Забыли пароль?');

jr_define ('_JOMRES_REVIEWS_ANONYMISE', 'Сделать ваше имя анонимным?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Если вы решите анонимизировать свое имя при проверке, мы вместо этого будем использовать ваши инициалы.');
jr_define ('АНОНИМНЫЙ', 'Анонимный');

jr_define ('_JOMRES_REVIEWS_REPLY_SAID', 'сказал');
jr_define ('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Ответить на этот обзор');
jr_define ('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Введите здесь свой ответ на этот отзыв.');
jr_define ('_JOMRES_REVIEWS_YOUR_REPLY', 'Ваш ответ');
jr_define ('_JOMRES_REVIEWS_REPLY_COMMENT', 'Основной обзор');
jr_define ('_JOMRES_REVIEWS_REPLY_SAVED', 'Проверить ответ сохранен');


jr_define ('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Перед отправкой ответа на обзор вы должны прочитать следующее. Отправляя ответ, вы подтверждаете, что принимаете эти положения и условия.');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Каковы наши правила для ответа на обзор?');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Вы отвечаете на обзор вашего объекта недвижимости. Вы <em> не должны </em> использовать свой ответ в качестве процесса коммерческого спора. Если вам нужно сообщить об обзоре, вы должны использовать "Отчет Проверить "кнопку на листинге, а не на этой странице ответа на отзыв. ');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Как только вы оставите свой ответ, вы не сможете его редактировать.');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Разрешено и поощряется');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Полный ответ на обзор. </li>
    <li> Вежливость и честность. </li>
    <li> Разумные ответы на вопросы рецензента (помните, что у других могут быть похожие проблемы, но они не воспользовались возможностью опубликовать отзыв). </li>
    <li> Поощряйте гостя связаться с вами напрямую для решения проблем.
    <li> Всегда помните, что будущие гости увидят ваш ответ. Всегда будьте профессиональны. </li>
</ul>
');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Не разрешено');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Коммерческие споры. </li>
    <li> Вопросы к рецензенту или другим лицам. </li>
    <li> Сомнительный язык (включая ругательства). </li>
</ul>
');

jr_define ('_JOMRES_COM_A_CRON_LASTRAN', 'Последний запуск');
jr_define ('_JOMRES_COM_A_CRON_SCHEDULE', 'Расписание');


jr_define ('_JOMRES_INVOICE_NUMBERS', 'Номера счетов-фактур');

jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Использовать специальные номера счетов-фактур?');
jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Вы можете настроить систему для использования пользовательских номеров счетов-фактур. Это затронет только новые счета-фактуры.');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Начальный номер');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Числа создаются последовательно. Каким должно быть первое число?');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Какой формат должен иметь номер счета?');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Настройте здесь формат номера счета-фактуры. Формат может выглядеть как {N} / {D} или {N} / {Y}, где N - автоматически сгенерированный номер, D = дата в формате YYYYYMMDD ( 20190131) или Y = YYYY (2019). Любые другие буквенно-цифровые символы, не заключенные в фигурные скобки, будут оставлены без изменений, поэтому шаблон, который выглядит как {N} / {D} -L, приведет к номеру счета (21), который выглядит примерно как 21/2019-L ');
jr_define ('_JOMRES_SURCHARGE_TITLE', 'Доплата');
jr_define ('_JOMRES_SURCHARGE_DESC', 'Дополнительная плата, которая будет добавлена ​​к комнате при бронировании (рассчитывается за день)');


jr_define ('_JOMRES_PDF_BUTTON', 'PDF');


jr_define ('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Расставить приоритеты для меток всего сайта?');
jr_define ('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Пользовательский текст, сохраненный при редактировании ярлыка или страницах строк файла translate lang, считаются ярлыками "для всего сайта". Менеджеры собственности также могут настраивать ярлыки для каждого свойства с помощью функции редактирования ярлыков во внешнем интерфейсе. Это позволяет менеджер собственности, чтобы иметь разные тексты для своего свойства, что полезно, если свойство отличается от всех других свойств на сайте. <br/> Когда система ищет тексты ярлыков, она будет отдавать предпочтение текстам на всем сайте, а не собственности конкретные тексты, означающие, что если для этого ярлыка существует текст на всем сайте, система сначала выберет его. Если вы установите для этого параметра значение Нет, система будет отдавать предпочтение текстам, относящимся к свойствам, а не текстам всего сайта. ');

jr_define ('_JOMRES_REFERRER', 'реферер');
jr_define ('_JOMRES_REFERRER_SYSTEM', 'Джомрес'); // Это можно изменить, добавив в белый список, поэтому сайт "Лучший в мире сайт бронирования" изменит это на "WBBS" или аналогичный.
jr_define ('_JOMRES_LIBRARY_PACKAGES', 'Пакеты библиотеки');
jr_define ('_JOMRES_LIBRARY_PACKAGES_DESC', 'Модули поставщиков и узлов являются отдельными (бесплатными) пакетами для Jomres. Вы можете переустановить пакеты на этой странице.');
jr_define ('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Переустановить пакеты библиотеки');

jr_define ('_JOMRES_COM_PTYPES_NOT_DELETED', 'Невозможно удалить тип свойства, потому что он все еще используется некоторыми свойствами. Вы должны сначала изменить эти свойства на другой тип свойства, прежде чем пытаться удалить это свойство. UID свойств, предотвращающие удаление:');

jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Случайные адреса электронной почты');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Предлагать случайные электронные письма');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Вы можете разрешить системе генерировать случайные адреса электронной почты во всплывающем окне быстрого бронирования на панели инструментов. Это позволяет менеджерам и администраторам создавать бронирования для гостей, для которых у них нет адресов электронной почты, это должно работать Чтобы сэкономить время для сайтов с большим количеством администраторов / менеджеров, которые понимают, что эти случайные электронные письма никогда не будут использоваться для реального общения, цель состоит в том, чтобы обойти тот факт, что на Джомресе у всех гостей должны быть адреса электронной почты. Вы также ДОЛЖНЫ предоставить домен в следующее поле. ');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Случайный домен электронной почты');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Это не должен быть обычный почтовый домен, такой как gmail или outlook. Вместо этого это может быть либо ваш собственный домен, либо что-то совершенно другое, например "mysite.emails"');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Область загрузки');
jr_define ('_LIST_USERS_LEGEND_NOROLE', 'Нет роли пользователя');
jr_define ('_LIST_USERS_LEGEND_RECEPTIONIST', 'Регистратор');
jr_define ('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Менеджер свойств');
jr_define ('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUSPENDED', 'Приостановлено');
jr_define ('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Удалено из CMS');


jr_define ('_REVIEW_JOMRES_PLEASEREVIEW', 'Если вам нравится Jomres, оставьте отзыв на одном из этих сайтов');
jr_define ('_REVIEW_JOMRES_ALREADYREVIEWED', 'Я хороший человек, я уже оставил отзыв');

jr_define ('_LICENCE_PROMPT_DEAR', 'Уважаемый');
jr_define ('_LICENCE_EXPIRED', ', срок действия вашего лицензионного ключа Jomres истек, поэтому вам не хватает этих замечательных функций и преимуществ!');
jr_define ('_LICENCE_EXPIRED_BENEFITS_1', 'Обновления плагинов и новые выпуски плагинов');
jr_define ('_LICENCE_EXPIRED_BENEFITS_2', 'Поддержка электронной почты / билетов только для эксклюзивных участников');
jr_define ('_LICENCE_EXPIRED_BENEFITS_3', 'Бесплатные обновления ядра Jomres');
jr_define ('_LICENCE_EXPIRED_POST', 'Подключайтесь к нам, чтобы получить беспроблемные платежные решения и получить доступ ко всем плагинам и службам поддержки только для участников.');
jr_define ('_LICENCE_EXPIRED_RESTART', 'Получите доступ ко всем плагинам сейчас!');

jr_define ('_LICENCE_INVALID_KEY', 'К сожалению, похоже, что вы не используете действующий лицензионный ключ Jomres, поэтому вам не хватает этих замечательных функций и преимуществ!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'Connect to us for trouble free payment solutions and get access to all plugins and member-only support services.');
jr_define('_LICENCE_INVALID_START', 'Get access to all plugins now!');
jr_define ('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Личный кабинет');
jr_define ('_ADMIN_MENU_SECTIONS_USERS', 'Пользователи');
jr_define ('_ADMIN_MENU_SECTIONS_COMMISSION', 'Комиссия');
jr_define ('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Подписки');
jr_define ('_ADMIN_MENU_SECTIONS_INVOICES', 'Счета-фактуры');
jr_define ('_ADMIN_MENU_SECTIONS_PORTAL', 'Портал');
jr_define ('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Переводы');
jr_define ('_ADMIN_MENU_SECTIONS_TOOLS', 'Инструменты');
jr_define ('_ADMIN_MENU_SECTIONS_REPORTS', 'Отчеты');
jr_define ('_ADMIN_MENU_SECTIONS_SETTINGS', 'Настройки');
jr_define ('_ADMIN_MENU_SECTIONS_HELP', 'Справка');

jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Всего свойств в системе');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Опубликованные свойства');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Неопубликованные свойства');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Утвержденные свойства');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Свойства, требующие утверждения');

jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Всего отзывов');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Неопубликованные обзоры');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Просмотр отчетов');

jr_define ('_ADMIN_CPANEL_SYSTEM_INFO', 'Системная информация Jomres');

jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Тип свойства этого свойства не опубликован, он может не отображаться в результатах поиска. Свяжитесь с администратором сайта, чтобы опубликовать тип свойства, или измените тип свойства на странице редактирования свойства.");
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Обновите свой тип собственности');


jr_define ('_JOMRES_INCOME_PAID_AMOUNTS', 'Доход (выплаченные суммы)');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Невозможно удалить свойство свойства "');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '", потому что он используется следующим свойством (ями):');


jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST', 'Тест REST API');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Эта страница выполняет базовый тест REST API с использованием встроенных функций в Jomres. Она вызывает Jomres REST API, чтобы узнать, получил ли он правильный ответ.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Сервер вызвал этот URL, чтобы узнать, действителен ли ответ:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Страница получила этот ответ:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Тест прошел, как ожидалось, у вас, вероятно, не возникнет проблем с получением запросов REST API от остальной части Интернета.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Тест не пройден, посмотрите в поле Ответ, если он выглядит как много HTML или вы получили сообщение 404, значит ваш сервер перенаправляет вызовы на другой URL. Это помешает вам получать API звонки. ');

jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Тест синдикации');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Сервер приложения Jomres поддерживает список всех сайтов Jomres. Это позволяет нам создать сеть синдикации. Эта сеть предназначена для того, чтобы наши пользователи могли отображать собственные ресурсы с других полезных сайтов на своих особенно для новых сайтов, чтобы обеспечить присутствие SEO в сети. Цель состоит в том, чтобы все сайты Jomres работали вместе, создавая доверие в сети. Эта услуга бесплатна. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Ваш сайт в настоящее время не указан на сервере приложений Jomres, который является частью сети синдикации. Этот сервер снова попытается добавить этот сервер в сеть, если после загрузки следующих 6 страниц. мало страниц загружается, это не изменится, пожалуйста, убедитесь, что вышеприведенный тест подключения проходит тесты. Обратите внимание, что серверы localhost не могут быть добавлены в сеть. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Поздравляем, ваш сервер указан на сервере приложения Jomres.');

jr_define ('_JOMRES_SYNDICATION_TITLE', 'Синдицированные свойства');
jr_define ('_JOMRES_SYNDICATION_TAGLINE', 'Вот некоторые другие свойства, доступные в нашей сети свойств');


jr_define ('_JOMRES_SYNDICATION_STATS_TITLE', 'Статистика синдикации');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Поздравляем, ваш сервер включен в сеть синдикации Jomres. Скоро ваши ресурсы начнут появляться на других сайтах Jomres, если они еще не отображаются.');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Ваша установка не является частью сети синдикации Jomres, поэтому ваши ресурсы не отображаются на других сайтах Jomres, и вы не можете получить выгоду от этой бесплатной рекламы.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Активные установки Jomres:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Общее количество установок Jomres, которые совместно используют свойства сети синдикации Jomres на своих сайтах.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Общие свойства:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Это количество свойств, доступных в JSN.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Всего отображается свойство:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'В целом, все время, когда свойство Jomres было связано с другим сайтом в Jomres.');
jr_define ('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) - это бесплатная функция, доступная всем пользователям Jomres. Ее цель - предоставить вам бесплатную рекламу вашей собственности на других сайтах Jomres. Цель - помочь вы быстро создаете свой сайт, предлагая бесплатную рекламу, чтобы ваши объекты были узнаваемы и доверяли, потому что они связаны с высоконадежными и высокорелевантными веб-сайтами, которые уже хорошо известны поисковым системам. См. этот <a href = "https: //www.jomres.net/features/jomres-syndication-network "target =" _ blank "> статья на нашем веб-сайте </a> и <a href =" https://www.jomres.net/manual/developers- guide-2/387-jomres-Sydication-network "target =" _ blank "> руководство </a> для получения дополнительной информации. ');


jr_define ('GUEST_PROFILE_INFORMATION', 'Это данные вашего гостевого профиля, поля с этим символом <i class = "fa fa-users" aria-hidden = "true"> </i>
 являются общедоступными, тогда как поля с этим символом <i class = "fa fa-user-secret" aria-hidden = "true"> </i> могут быть видны только вам, вашим хостам и администраторам сайта. <br/> <br/> Хозяева могут видеть личную информацию только в том случае, если вы уже создали для них бронирование. <br/> <br/> Ваша информация надежно зашифрована и хранится в нашей базе данных с использованием шифрования AES-256. ');

jr_define ('GUEST_PROFILE_OPTIONAL', 'Эти поля являются необязательными, однако хосты могут использовать информацию здесь, чтобы определить, считают ли они, что они могут вам доверять, поэтому лучше добавить информацию. Помните, вы просите оставаться в их собственности, и они могут отказать вам, если посчитают, что вы не подходите или ваша биография не содержит достаточно информации. ');

jr_define ('GUEST_PROFILE_DRIVING_LICENSE', 'Водительские права');
jr_define ('GUEST_PROFILE_PASSPORT_NUMBER', 'Номер паспорта');
jr_define ('GUEST_PROFILE_IBAN', 'номер IBAN');
jr_define ('GUEST_PROFILE_ABOUT_ME', 'Обо мне');
jr_define ('GUEST_PROFILE_ABOUT_ME_HINTS', 'Этот раздел "Обо мне" доступен для публичного просмотра, поэтому не указывайте никакой личной информации. Тем не менее, постарайтесь поделиться тем, что вам удобно, например, о ваших увлечениях, о том, что вы зарабатываете себе на жизнь, своими хобби и т. д. Вы можете использовать разметку, чтобы придать этому немного джаза. Хозяева захотят почувствовать, что они могут доверять вам свои свойства. Убедитесь, что ваша фотография - это реальное изображение вас, а не вашей собаки или машина (да, ребята, мы с вами разговариваем!). ');

jr_define ('GUEST_PROFILE_PREFERENCES', 'Введите здесь любые особые требования, которые могут у вас возникнуть, например, простоту доступа. Они не будут отображаться в вашем общедоступном профиле, но будут добавлены к информации о бронировании, когда вы сделаете заказ.');

jr_define ('VIEW_HOST_PROFILE', 'Профиль хоста');

jr_define ('GUEST_PROFILE_TITLE', 'Гостевой профиль');
jr_define ('GUEST_PROFILE_TITLE_MY', 'Мой профиль');

jr_define ('GUEST_PROFILE_WELCOME', 'Привет, позвольте мне рассказать вам немного о себе.');
jr_define ('GUEST_PROFILE_MY_NAME', 'Меня зовут');
jr_define ('GUEST_PROFILE_I_COME_FROM', 'и я пришел из');
jr_define ('GUEST_PROFILE_IN', 'регион в');

jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION', 'Моя личная информация');
jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Мы делаем все возможное, чтобы проверить информацию о гостях и хостах, однако вы должны проявить должную осмотрительность и решить для себя, заслуживает ли этот человек доверия.');

jr_define ('GUEST_PROFILE_MY_PROPERTIES', 'Мои свойства');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Мои отзывы');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Вот что я сказал об этом свойстве:');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Я дал этому свойству оценку:');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Мои отзывы');
jr_define ('GUEST_PROFILE_OF_ME', 'Что обо мне говорят другие');
jr_define ('GUEST_PROFILE_OF_HOST_SAID', 'Что этот хост сказал обо мне');
jr_define ('GUEST_PROFILE_REVIEW_GUEST', 'Проверить гостя');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Мой отзыв об этом госте');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Вот несколько примеров отзывов гостей, чтобы начать работу: <br/>

<ul>
<li> (имя гостя) было очень приятно принимать гостей! Они оставили помещение чистым и все выходные вели себя тихо. У них было хорошее общение, и я надеюсь, что они снова останутся со мной! </li>
    <li> Мне понравилось (имя гостя), потому что они смогли отнестись к этому месту с уважением, отлично провели время и наслаждались местностью. Они отлично арендовали помещение, и я надеюсь, что я снова их приму. </li>
    <li> Все мои домашние правила соблюдались с (имя гостя), и они могли легко входить и уходить. Мне понравилось, что они там были, так как они были вежливыми и тихими. Я очень рекомендую их другим! </li>
</ul>

');

jr_define ('GUEST_PROFILE_UNKNOWN', 'Извините, я не могу найти этого пользователя. Скорее всего, они еще не заполнили данные своей учетной записи.');

jr_define ('GUEST_PROFILE_USERSTATUS_GUEST', 'Гость');
jr_define ('GUEST_PROFILE_USERSTATUS_HOST', 'Хост');
jr_define ('GUEST_PROFILE_USERSTATUS_ADMIN', 'Администратор');

jr_define ('WORDPRESS_THEME_ADVICE', 'Jomres построен на платформе Bootstrap, поэтому вы должны использовать ее в теме, основанной на Bootstrap. Мы рекомендуем одну, основанную на Bootstrap 3. Если у вас нет доступа к теме, мы рекомендуем вам использовать тема Jomres Leohtian для Wordpress, которую вы можете <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_ blank "> скачать отсюда. </a> ');


jr_define ('BOOKING_NOSHOW_MENU', 'Отметить как не показывающуюся');
jr_define ('BOOKING_NOSHOW_AUDIT_LOG', 'Бронирование помечено как незаезд');
jr_define ('BOOKING_NOSHOW_BOOKINGS', 'Заказы');
jr_define ('BOOKING_NOSHOW_NOSHOWS', 'Не показывает');
jr_define ('BOOKING_NOSHOW_NETWORK_STATUS', 'Статистика JSN для этого пользователя');

jr_define ('BOOKING_NOSHOW_INFO', 'Информация о бронировании и неявке извлекается из сети синдиката Jomres во время бронирования. Она берется из анонимных данных и может использоваться вами, чтобы решить, рискует ли этот гость не выполнить бронирование. Если система сообщает, что данные неизвестны, вероятно, потому, что эта система не распознается в сети. ');

jr_define ('BOOKING_NOSHOW_UNKNOWN', 'Неизвестно');

jr_define ('CMF_CONFIG_TITLE', 'Структура управления каналами');
jr_define ('CMF_CONFIG_KEY', 'Ключ структуры управления каналами');
jr_define ('CMF_CONFIG_KEY_DESC', 'Лицензионный ключ Channel Management Framework. Вам потребуется предоставить этот ключ, чтобы иметь возможность загружать плагины Channel Management Framework.');

jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Ваша собственность не была одобрена');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Ваша собственность не одобрена. Если вы считаете, что это было сделано по ошибке, свяжитесь с нами.");

jr_define ('_JOMRES_GUESTTYPES_IS_CHILD', "Это дочерний тип гостя?");
jr_define ('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Установите значение Да, если этот гостевой тип будет классифицироваться как дочерний гостевой тип.");

jr_define ('_JOMRES_GUESTTYPES_INTRO', "Если вы хотите взимать плату за человека за ночь, вам нужно будет создать несколько типов гостей.");
jr_define ('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Вы можете создать столько типов гостей, сколько вам нужно, попробуйте начать с создания только одного типа гостя под названием Взрослый. Оставьте для всех настроек значения по умолчанию. Затем, если, например, вы хотите дайте детям до 12 лет скидку в размере 50%, вы бы создали новый тип гостя и назовете его Дети до 12. Установите для параметра Добавить отклонение? значение - (отрицательное) и установите для параметра Разница значение 50. Это означает при добавлении детей к бронированию взимается 50% от стоимости номера. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Установить цены вручную");
jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Установить минимальное количество ночей вручную");
jr_define ('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Установить минимальное количество ночей");

jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Установить <em> цену за ночь </em> по дням недели");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Установить <em> цену за ночь </em> по диапазону дат");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Установить <em> минимальное количество ночей </em> по диапазону дат");

jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Выбор даты и ввод ставки позволяют вам установить одну цену для заданного диапазона дат. Выберите дату начала и окончания, введите цену и нажмите кнопку Установить цену за ночь");
jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Выбор даты и ввод минимального количества ночей позволяют вам установить одно значение для минимального количества ночей для заданного диапазона дат. Выберите дату начала и окончания, введите число для минимального количества ночей и нажмите Установить минимум ночей '. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Используйте это раскрывающееся меню для переключения между установкой цен для отдельных дат и установкой минимального количества ночей для отдельных дат. Вы можете использовать средство выбора <em> по дням недели </em>, <em> по дате выбор диапазона </em> или установите цены / минимальные ночи, вручную отредактировав даты. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Используйте это раскрывающееся меню для переключения между установкой цен на отдельные даты и установкой минимального количества ночей для отдельных дат. Вы можете использовать выбор <em> по диапазону дат </em> или установить цены / минимальные ночи на ручное редактирование дат. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Установить цены или минимальное количество ночей");

jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Установить <em> минимальное количество ночей </em> по дням недели");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Поля дня недели позволяют вам установить минимальное количество ночей для данного дня недели, после того, как вы нажмете кнопку дня недели, все дни недели будут установлены на это минимальное количество ночей. ");


jr_define ('_JOMRES_MICROMANAGE_MANUALLY', "Установить цены / минимальное количество ночей вручную");
jr_define ('_JOMRES_MICROMANAGE_SET_PRICES', "Установить цены");
jr_define ('_JOMRES_MICROMANAGE_SET_MINDAYS', "Установить минимальное количество ночей");

jr_define ('_JOMRES_MICROMANAGE_PRICE', "За ночь");
jr_define ('_JOMRES_MICROMANAGE_MINDAYS', "Мин. ночей");
jr_define ('_JOMRES_MICROMANAGE_MAXDAYS', "Максимальное количество ночей");

jr_define ('_JOMRES_MICROMANAGE_INTRO', "Здесь вы можете создать свои тарифы, которые связаны с типами комнат, которые у вас есть в вашей собственности.");

jr_define ('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Наиболее часто используемые параметры");

jr_define ('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Инструкции");

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Если вы хотите добавить разные цены для разного количества гостей, тогда <em> вы можете создать несколько тарифов для каждого типа номера </em> и иметь разные минимальные / максимальные значения гостей в этих тарифах. ");

jr_define ('_JOMRES_MICROMANAGE_INFO', "Дайте тарифу название, определите максимальное количество ночей, а также минимальное и максимальное количество гостей, которое требуется в форме бронирования, прежде чем тариф будет предложен. <br/> <br/> Используйте панель выбора даты, чтобы добавить цены и настройки минимального количества ночей для диапазона дат, или отредактируйте ввод напрямую. Если вы не хотите, чтобы тариф вообще предлагался в определенные даты, оставьте для цены значение 0 (ноль) на в эти даты. <br/> <br/> У вас могут быть разные минимальные ночи в разные даты, поэтому, если вы хотите бронировать на более длительный срок в течение недель фестивалей / конференций, вы можете установить минимальное количество ночей, которое будет выше только в эти периоды. <br / > <br/> Если вы взимаете Per Person Per Pight (PPPN), вы можете включить этот параметр в Настройки> Конфигурация свойства> Тарифы и валюта, а затем создать требуемые типы гостей в Настройки> Типы гостей. ");

jr_define ('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Дополнительные параметры");

jr_define ('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Это дополнительные параметры, которые не так часто используются, но тем не менее доступны вам. <br/> <strong> Игнорировать PPPN </strong> означает игнорировать на человека за ночь. У вас может быть несколько разных тарифов. для номера того же типа, например, один из которых взимается с человека за ночь, а другой - нет. <br/> <strong> Разрешить выходные </strong>. Параметр Разрешить выходные дает вам возможность установить тариф, который только доступен в будние дни, например, если вам нужен специальный тариф для деловых путешественников. В этом случае вы должны установить вариант Нет, а минимальное количество ночей - 1, а максимальное количество ночей - 5. <br/> <strong> Выходные дни only </strong> Параметр Только выходные является противоположностью параметра Разрешить выходные. То, что вы считаете выходными, можно настроить в настройках конфигурации ресурса. Это дает вам возможность указать тариф только на выходные, который вы, возможно, захотите предложение для особых мероприятий. <br/> <strong> Время заезда День недели </strong> Этот параметр дает вам возможность принудительно регистрироваться только в определенные дни недели, и его лучше всего использовать в сочетании с параметрами Конфигурация ресурса> Резервирование> Фиксированные периоды. Большинство пользователей предпочтут оставить для этого параметра значение Все. <br/> Последние два параметра, <strong> Мин. Комнат уже выбрано </strong> и <strong> Максимальное количество комнат уже выбрано </strong>, очень специализированы и полезно для объектов недвижимости с очень сложными тарифами. <em> Если у вас нет особой необходимости, вы должны оставить эти параметры в покое. </em> Используйте их, если вы хотите, чтобы этот тариф предлагался только тогда, когда гость уже выбрал N номеров в форме бронирования, например, у вас может быть один базовый тариф, в котором эти параметры оставлены по умолчанию, и второй тариф, в котором для уже выбранного минимального количества комнат установлено значение 1, тогда этот второй тариф будет предлагаться в форме бронирования после выбора комнаты " );
jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Вы можете создать несколько тарифов для одного и того же типа комнаты, так что вы можете создать один тариф на минимальное / максимальное количество дней с 1 по 7 и второй тариф, где минимальное количество дней равно 7, максимальное - 14 и и т. д. Это позволяет вам создавать схемы ценообразования, настолько простые или сложные, насколько вам нужно. Это также позволяет создавать несколько тарифов с разными условиями, поэтому у вас может быть второй набор тарифов, где цена ниже для ночлега и завтрака, и другой набор более дорогих тарифов на ночлег, завтрак и ужин ");

jr_define ('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Установить только дни выбора даты");
jr_define ('_JOMRES_PROPERTY_HCATEGORIES', 'Категории свойств');
jr_define ('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Изменить категорию свойства');
jr_define ('_JOMRES_STOP_READTHISFIRST1', "Стоп!");
jr_define ('_JOMRES_STOP_READTHISFIRST2', "Спасибо за установку Jomres");
jr_define ('_JOMRES_STOP_READTHISFIRST3', "Управление собственностью осуществляется на общедоступных страницах, а не в области администратора.");
jr_define ('_JOMRES_STOP_READTHISFIRST4', "Если вы не знакомы с Jomres, посетите раздел Справка > Начало работы.");


jr_define ('_JOMRES_CONFIG_SYNDICATION_TITLE', "Присоединяйтесь к Синдикату Джомреса");
jr_define ('_JOMRES_CONFIG_SYNDICATION_DESC', "Как только вы настроите свой сайт и будете готовы начать принимать посетителей, присоединяйтесь к синдикату Jomres.net и разместите свою недвижимость на других сайтах Jomres.");



jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Вам понадобится хотя бы одна комната одного из следующих типов, прежде чем вы сможете создать тариф:");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Зайдите в Настройки> Комнаты и сначала создайте комнату, как только вы это сделаете, вы сможете создать тариф для этого типа комнаты.");

jr_define ('JOMRES_PLATFORM', "Платформа Jomres");


jr_define ('JOMRES_PLATFORM_CONNECTED', "Подключено");
jr_define ('JOMRES_PLATFORM_CONNECTED_DESC', "Установите значение Да, если вы уже подключили свою учетную запись Stripe к платформе Jomres.");

jr_define ('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe Live Account number");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Это идентификатор вашей учетной записи Stripe, который можно найти на панели инструментов Stripe в разделе Настройки > Информация об учетной записи и выглядит как acct_xxxxxxxxx. Это поле можно использовать, если у вас несколько установок Jomres и вы хотите использовать одну и ту же учетную запись для всех все сайты, и вы уже подключились к нам. Если вы еще не подключились к платформе Jomres, недостаточно ввести свои данные здесь. Вместо этого перейдите в пункт меню Подключиться на панели инструментов в разделе Справка. Если вы хотите для тестирования платежей на вкладке Отладка в Конфигурации сайта установите для своего сайта значение Производство - Разработка. ");

jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Полоса живого секретного ключа");
jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Перейдите в раздел "Разработчики"> "Ключи API" на панели инструментов Stripe, чтобы найти секретные ключи. Они используются системой для проверки действительности данных бронирования, возвращенных из платежной формы, и внесения залога перед сохранением бронирования. . ');

jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY', "Полоса тестового секретного ключа");
jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Стандартный тарифный режим');

jr_define ('JOMRES_COM_A_ACCOMMODATES', 'Спит');
jr_define ('JOMRES_COM_A_ACCOMMODATES_DESC', 'Сколько человек может вместить это свойство?');
jr_define ('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Количество гостей в вашей дневной цене');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Цена для дополнительных взрослых');

jr_define ('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Дети');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'На человека за ночь?');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7-дневный модификатор');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Скидка на дневную ставку при бронировании на 7 дней и более. Оставьте это значение равным нулю, если вы не хотите, чтобы скидка применялась.');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30-дневный модификатор');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Скидка на дневную ставку при бронировании на 30 дней или более. Оставьте это значение равным нулю, если вы не хотите, чтобы скидка применялась.');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Взрослые');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Цена указана из расчета на 2 взрослых');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Бронирование со скидкой');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'до');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'поскольку срок бронирования превышает 7 дней.');
jr_define ('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'поскольку срок бронирования превышает 30 дней.');


jr_define ('JOMRES_CITY_TAX_HEADING', 'Городские налоги');
jr_define ('JOMRES_CITY_TAX_VALUE', 'Стоимость городского налога');
jr_define ('JOMRES_CITY_TAX_METHOD', 'Метод расчета налога');

jr_define ('JOMRES_CITY_TAX_MODEL_SINGLE', 'Единая комиссия');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'За ночь');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'На гостя');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'За гостя за ночь');
jr_define ('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Процент стоимости бронирования');

jr_define ('JOMRES_CLEANING_FEE_HEADING', 'Плата за уборку');
jr_define ('JOMRES_CLEANING_FEE_VALUE', 'Стоимость уборки');


jr_define ('JOMRES_COMPATABILITY_MODE', 'Принудительный режим настройки свойств совместимости?');
jr_define ('JOMRES_COMPATABILITY_MODE_DESC', "Режим настройки свойств совместимости заставляет произойти несколько вещей. В более старых версиях Jomres менеджеры свойств могли выбирать, какой режим редактирования тарифов использовать, а также множество других настроек (некоторые из которых могут показаться запутанными) был доступен для них. Включение конфигурации совместимости заставляет все новые свойства использовать только стандартный режим редактирования тарифа, который моделирует функциональность конфигурации свойства booking.com в отношении ценообразования, дочерних цен и т. д. Рекомендуется для установок, которые были созданы после 9.22 .0 для этого параметра должно быть установлено значение Да, но для более старых установок вам решать, должны ли новые свойства автоматически устанавливаться в режим совместимости при их создании. ");

jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN', 'Принимаете ли вы детей до 18 лет?');
jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Установите для этого параметра значение Да, если вы разрешаете детям. Если да, то в менюНастройки у вас будет параметр Дочерние политики, в котором вы можете редактировать настройки, связанные с детьми.");

jr_define ('JOMRES_POLICIES_CHILDREN', 'Дочерние политики');

jr_define ('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'В каком возрасте допускаются дети?');


jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'На ребенка, за ночь');
jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'На ребенка, за все время пребывания');

jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Дочерние ставки');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Новая дочерняя ставка');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Изменить дочернюю ставку');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Создайте здесь свои бесплатные или платные детские ставки. Ставки будут применяться только тогда, когда вы создали уровни заполняемости для типов комнат.');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Возраст от');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Возраст до');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'за ночь или за все время пребывания?');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Ставка');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Если ноль или не установлен, дети этого возрастного диапазона будут свободны.');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Возраст при проверке');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Возраст');

jr_define ('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Уровни занятости');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Максимальное количество взрослых');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Максимальное количество детей');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Максимальная занятость');

jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Изменить уровень занятости для:');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Изменить уровни заполняемости для этого типа комнаты. Не включать гостей, спящих на детских кроватках (они добавляются путем создания дополнительной опции)');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Сколько нужно платить за каждого дополнительного взрослого?');

jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Дополнительные взрослые');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES', 'Вы еще не настроили дочерние ставки.');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Установить дочерние ставки сейчас');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Вы настроили свое свойство, чтобы разрешить детям, но вы еще не установили уровни занятости для детей.');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Установить уровни занятости');
jr_define ('JOMRES_OCCUPANCY_LEVELS_INFO', 'Каждый раз, когда вы редактируете комнату или тип собственности, вы должны проверять и обновлять уровни заполняемости для вашей собственности / комнат, так как это влияет на количество гостей, которые могут быть приняты в форме бронирования.');


jr_define ('_JOMRES_SEARCH_FORM_ADULTS', 'Взрослые');
jr_define ('_JOMRES_SEARCH_FORM_CHILDREN', 'Дети');


jr_define ('_JOMRES_CONFIG_LEVEL_TITLE', 'Уровень параметров администратора');
jr_define ('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres имеет множество параметров меню и конфигурации, которые вы можете использовать при настройке вашего сайта. Подавляющее большинство из них вам никогда не придется изменять, поэтому они скрыты по умолчанию. Вы можете выбрать отображение этих параметров, установив уровень параметров администратора. Базовый уровень показывает вам, что именно вам нужно при настройке сайта в первый раз. Общий уровень показывает вам те параметры, которые наиболее часто изменяются, а все показывает вам все возможные настройки и варианты меню в области администратора. ');
jr_define ('_JOMRES_CONFIG_LEVEL_BASIC', 'Базовый');
jr_define ('_JOMRES_CONFIG_LEVEL_COMMON', 'Обычный');
jr_define ('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Все');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Можем ли мы собрать информацию о том, как вы используете Jomres?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Мы хотели бы собирать информацию о том, как вы используете Jomres. Никакая личная информация не будет сохранена, использование будет анонимным и будет использоваться только для того, чтобы помочь нам понять, как люди используют Jomres.');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Ага, все в порядке');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Нет, я не согласен');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Будете ли вы бронировать более одного объекта?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres можно использовать для сайтов с одним или несколькими объектами недвижимости. Если вы будете бронировать только один объект, многие параметры будут излишними и могут сбивать с толку. Вы можете изменить этот параметр позже в разделе "Настройки"> "Сайт". Конфигурация> вкладка Функциональность портала. ');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Всего одно свойство');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Я буду перечислять более одного свойства');


jr_define ("_ JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Какую версию платформы Bootstrap поддерживает ваш шаблон / тема?");
jr_define ("_ JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Каждая версия платформы Bootstrap требует немного разной html-разметки. Jomres имеет три набора наборов шаблонов, совместимых с Bootstrap, по одному для каждой версии Bootstrap. Убедитесь, что вы настроили его для использования соответствующего набора шаблонов. вы этого не сделаете, тогда вывод, такой как макет, модальные окна и меню, не будет работать должным образом. Если вы решите использовать шаблон / тему позже с другой версией Bootstrap, вы можете изменить набор шаблонов Bootstrap, который должен использовать Jomres, в Admin> Jomres> Settings > Вкладка Разное. <br/> <br/> Joomla 3 по умолчанию распространяется с Bootstrap 2, Joomla 4 будет использовать Bootstrap 5. В шаблоне Jomres Leohtian (Joomla) и теме (Wordpress) используется Bootstrap 3. Могут быть разные шаблоны / темы распространяется с собственными файлами Bootstrap, поэтому, если у вас есть какие-либо сомнения, обратитесь к разработчику вашего шаблона / темы. ");
jr_define ("_ JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define ("_ JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define ("_ JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define ("_ JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define ('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Убрать десятичные дроби из выходных цен?');

jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Применить группу по исправлению?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Некоторые установки mysql могут иметь проблемы с запросами Jomres на странице "Свойства списка", "Список гостей" и "Список счетов-фактур". Если на этих страницах указано, что они показывают результаты X из Y, но в списке ничего не отображается, тогда установка установка этого параметра на "Да" может решить проблему. Этого не произойдет, если вы используете общий хостинг и служба хостинга не позволяет вашему пользователю mysql выполнить команду "SET GLOBAL sql_mode =". ');
jr_define ('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Это свойство канала, его нельзя администрировать локально, посетите страницу структуры управления каналом, чтобы найти ссылку для удаленного администрирования свойства');
jr_define ("_ JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Нет Bootstrap в теме");

jr_define ('JOMRES_SOCIAL_MEDIA_LINKS', 'Ссылки на социальные сети');
jr_define ('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Укажите здесь имена своих учетных записей в социальных сетях, например "jomres", а не весь URL-адрес ');

jr_define ('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Разделенный запятыми список языков, на которых говорит ваша организация');
jr_define ('JOMRES_ORGANISATIION_LOGO_URL', 'URL-адрес логотипа вашей организации');

jr_define ('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres обновлен');
jr_define ('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Доступна новая версия Jomres. Перед продолжением использования Jomres необходимо выполнить обновление, поскольку обновления улучшают функциональность и гарантируют безопасность установки.');
jr_define ('JOMRES_UPDATE_MESSAGE_LINK', 'Обновить Jomres сейчас');

jr_define ('PLUGIN_UPDATE_MESSAGE_TITLE', 'Обновления плагина');
jr_define ('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'В диспетчере плагинов доступны новые версии плагинов. Вы должны обновить все плагины, прежде чем вы сможете продолжить использование Jomres, поскольку обновления улучшают функциональность и гарантируют, что ваша установка останется безопасной.');
jr_define ('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Плагины для обновления');

jr_define ('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Если ваша лицензия больше не действительна, вы можете получить новый лицензионный ключ на нашем веб-сайте.');

jr_define ('PLUGIN_UPDATE_MESSAGE1_LINK', 'Обновить плагины');
jr_define ('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Получить новый ключ');
jr_define ('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Сохранить новый ключ');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Изображения свойств");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE',"Нужна помощь в бронировании?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB',"Позвоните в нашу службу поддержки клиентов по указанному ниже номеру, чтобы поговорить с одним из наших представителей, который поможет вам со всеми вашими праздничными потребностями.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE',"Почему бронировать у нас?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE',"Мы предлагаем лучшие цены на бронирование");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1',"На данный момент у нас самые выгодные цены на рынке.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2',"Без комиссии за бронирование. Экономьте деньги!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE',"Отличный выбор свойств");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LORGEST_NUMBER_HOTELS',"Свойства");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS'," отзывы гостей");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE',"Мы всегда здесь");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT',"Позвоните или напишите нам в любое время");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT',"Получите круглосуточную поддержку до, во время и после поездки");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA',"Социальные сети");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD',"Найдите нас в социальных сетях");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Отлично");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Исключительно");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Потрясающе");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Отлично");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Отлично");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Очень хорошо");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Хорошо");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Новое объявление");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Со скидкой");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Куда вы хотите пойти?');
	jr_define('DATA_SOURCES_TITLE', "Обновить источники данных");
	jr_define('DATA_SOURCES_TITLE_INFO', "Источники данных обновлены. Источники данных используются автозаполнением полей ввода в виджете поиска, и они обычно обновляются автоматически, однако эта страница принудительно обновляет данные вручную, если это необходимо." );

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "Чтобы отправить запрос токена, отправьте запрос на этот URL-адрес");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "Скрипт свойств основного вида");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "Uid свойства для просмотра");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "Шаблон по умолчанию — property_details.html, с этим аргументом вы можете определить другой шаблон сведений о свойстве для отображения.");

	jr_define('JOMRES_UPDATES_TITLE', 'Обновления Jomres');
	jr_define('JOMRES_UPDATES_INFO', "Эта страница может загрузить и установить для вас самую последнюю версию Jomres. Она использует собственные функции, а не функции хост-CMS, поэтому, если во время обновления хост-CMS возникнет проблема, вы можете использовать эту страницу для принудительно переустановите самую последнюю версию Jomres.");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'Менеджеры ресурсов могут использовать режим редактирования во внешнем интерфейсе для настройки строк для каждого свойства, однако это может работать только в том случае, если для параметра «Постоянная ссылка WordPress» установлено значение «Обычный» (http://www.domain.com/?p=123). После того, как вы это сделаете, пользователи внешнего интерфейса смогут настраивать строки, такие как имена комнат и другие метки, относящиеся к уникальным свойствам. ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'Режим редактирования ярлыка');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'Эта функция используется для изменения меток элементов, обычно на разных языках.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'Режим редактирования позволяет вам переименовывать метки, которые уникальны для отдельных свойств. Когда вы используете режим редактирования для переименования метки, изменение будет отображаться только в списке этого свойства. Например, для одного свойства, которое вы можете захотеть использовать слово «Цены», а в другом слово «Цены». Не все ярлыки можно изменить, например, названия типов номеров являются ярлыками для всего сайта, поэтому их нельзя изменить, но обычно все, что уникально для отдельного объекта может быть изменено.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'Если сайт поддерживает несколько языков, при использовании одного языка вы можете создать элемент, уникальный для отдельного свойства. Когда вы затем измените свой активный язык, вы можете использовать режим редактирования, чтобы переименовать эту метку, ввод подходящего перевода на текущем языке. Вы можете продолжить изменение активного языка, чтобы ввести подходящий перевод для этого ярлыка для каждого языка, поддерживаемого сайтом.');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'Переключатель режима редактирования ярлыка');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'На этом снимке экрана мы видим переключатель режима редактирования. Режим редактирования выключен, а метки отображаются как обычно: ');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'Включен режим редактирования ярлыков');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'На этом снимке экрана мы видим, что в режиме редактирования выделены метки, которые вы можете переименовать:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'Выберите элемент для изменения');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'При выборе метки появляется всплывающее окно:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'Изменить метку');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'Используйте маленькую форму, чтобы изменить метку. Нажмите «галочку», чтобы завершить, или нажмите «X», чтобы отменить редактирование:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'Ярлык изменен');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'После сохранения изменения метка на странице обновляется. Теперь вы можете отключить режим редактирования:');
