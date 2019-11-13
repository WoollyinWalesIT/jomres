<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
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
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Итог тарификации за номер');
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
jr_define('_JOMRES_CONVERSION_TITLE_DESC', 'Используйте функцию преобразования онлайн Jomres. Это будет предлагать пользователю выпадающее меню преобразования, где они смогут выбрать варианты валюты, чтобы увидеть цены, предлагаемые на выходе цена корректируется, чтобы показать преобразованы цену с «родной» ценой отеля в скобках.');
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'Мы приложили все наши усилия, чтобы получить наиболее точные и своевременные курсы валюч, что мы можем. Наша интернет-функция Конвертация валют это услуга, предоставляемая только для информационных целей и не предназначены обеспечить точные цифры. Соответственно, мы не можем гарантировать точность обменных курсов. Используя эту функцию, Вы соглашаетесь, что любая не точность от (или) использования функции конвертации валюты это исключительно Ваши и риски.');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Конверсионные / коды валют');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Чтобы автоматически установливать код валюты, Jomres способен использовать бесплатный сервис под названием IPinfoDB определяет страну посетителя, однако вы должны зарегистрироваться на сайте http://ipinfodb.com/ для получения ключа API  <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> IPinfoDB.');
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
jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Pay now');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'This invoice in now due. Please click the button to select the payment method.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Here's a list of some of the great things you can purchase while making a booking at this property. ");
jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Category');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Give your property a sub-type');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Эл. почта');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Contact settings');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending');
jr_define('_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- New Guest -- ');
jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Select chart...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, let's get started. First you need to create some rooms for this property.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Create some rooms now');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload an image');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Create some tariffs');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Rooms in the property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'The entire property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Update your address');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');
jr_define('_JOMRES_CONTANT_US', 'Contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Welcome to your new online listing for ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hi, and welcome to your new property on ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "You recently added a new property to our website, and we'd like to welcome you to the family.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'You can see your new dashboard ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' here ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Once you've setup your property you can see how it looks to site visitors by visiting ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' your front page.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(it's not published, so site visitors can't see it yet).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'If you have any questions at all, please ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "and we'll be delighted to answer all your questions.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, our team at ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Let's create some tours!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebook.com or anything else.');
jr_define('COMMON_DOWNLOAD', 'Download');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings. <br> Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button to create new Room Types.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No bookings/Real estate ( simple listing )');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map colour scheme');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'The property type helps you to define how the property will be booked, for example with hotels you "sell" just one or two rooms at a time, whereas with villas you offer the entire property.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'You can configure the minimum deposit amount to be charged. If you do, then the "Deposit required is cost of the first night?" & "Deposit required is percentage?" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'This figure cannot be less than ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Send an email to site admin when an error occurs?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. ");
jr_define('_JOMRES_FAQ', 'Frequently asked questions');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION', 'Introduction');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES', 'What is Jomres?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES', "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD', 'Can users register on my Jomres site and add their own properties?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD', 'Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES', 'Properties');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES', 'How do I add a new property?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES', "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES', 'Can I import properties from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES', "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS', 'Can I import bookings from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS', "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. ");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES', 'Can I edit email templates?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES', 'Property managers can edit email templates through their toolbar under Settings > Email Templates.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Payments');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS', 'How do I allow properties to take payments?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS', 'You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY', 'Which gateway should I use?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY', "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS', 'When a guest makes a payment for a booking, who gets the money?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS', "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING', 'Troubleshooting');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL', "Booking emails aren't being sent.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL', "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "You can't see the payment gateway after making a booking.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES', 'Jomres License');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'After buying X license, am I forced to purchase renewals once the license has expired?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED', 'My license has expired, can I upgrade Jomres anyway?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED', "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE', 'What software license is Jomres released under?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE', "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'How do I create a property?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Click on Properties > New Property to add a new property.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'How can I see what my property looks like to guests?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Click on Properties > Preview to see how your property looks to guests.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'How do I add rooms?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'How do I set room prices?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'How do I create optional extras?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'How can I take payments online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Can I give discounts?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'When I click New booking, I am taken to the Contact form, why?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'What are Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Images');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'How do I upload images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "What is the 'Main' image?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'What are room feature icons?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'How do I upload room images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'How do I upload slideshow images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'How do I upload Extras Images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP', 'How do I setup currency symbols?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP', "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES', 'How do I enable multiple currencies?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES', "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'How do I save descriptions in multiple languages?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER', 'How many properties can I list?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER', "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'No, you cannot. You can only administer properties you have created or been assigned to as a property manager.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'What are Guest Types/How do I change per person per night?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'What are Room Features?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES', 'Can I make a user a property manager?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES', "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS', 'Plugins');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS', 'What is the Plugin Manager for?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS', 'The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE', 'Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE', "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION', 'How do I install a plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION', "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE', 'Site Structure');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO', 'What does Site Structure mean?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO', "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES', 'What are Property Types?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES', 'In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES', 'What are Property Features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES', "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', 'What are Property Feature Categories?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES', 'What are Room features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES', "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES', 'Why is there a page to edit countries/regions?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES', "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION', 'Localisation/Translation');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO', 'How do I translate things?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO', "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TOURS', 'Tours');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO', 'What are tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO', "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL', 'How do I use Jomres to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL', 'To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR', 'What is the Jintour plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR', 'Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING', 'How do I sell tours and vacation rentals in the same booking?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING', "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS', 'What about if I only want to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS', "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS', 'How can I create a Tour/bookable resource that can be seen in all properties booking forms?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS', "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST', "Ok, I've installed Jomres, what next?");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST', "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now.");
jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Permit number');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Description');
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'Example');
jr_define('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_DESC', 'This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! No problems were found.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Read more');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Read less');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Tourist tax');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Tourist tax rate');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Is percentage?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any e.g. Optional Extras or Rooms, then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any Optional Extras then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>First choose the image(s) you'd like to upload by clicking Add Image or using Drag and Drop. These will appear in the column on the right hand side.</li>
  <li>Above this area, use the \"Choose the resource\" button to choose which resource you want to upload images for. You may be offered the option to choose a specific resource underneath. </li>
  <li> Once you've chosen a resource you can then click the Upload Image button under an image to associate it with that resource. Once an image has been uploaded, it will disappear from the column on the right hand site, and appear in the left.</li>
  <li>Use the Trash button next to existing images to remove images you no longer want to be shown.</li>
  <li>You can change the order that files are shown in the slideshow by renaming them before uploading them, as they are displayed in pages in alphabetical order.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Next to the Resource button, you may see a Preview button. If you click on this you will see a popup that shows you how the currently uploaded images will look in a page. This helps to give you an idea of how the images will look to your customers.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "There is no limit to the number of images you can upload. Images are automatically resized when they are uploaded. You can only upload JPG and PNG files.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideally any images you upload would be at least ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels wide, otherwise they may look fuzzy after they've been uploaded.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Any images you upload cannot be more than ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in size.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Choose the resource you want to upload images for");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specific resource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Images already uploaded for this resource");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Text formatting');
jr_define('_JOMRES_MARKDOWN_DESC', 'You can enter text here using simple Markdown formatting. You don\'t need to know any HTML, just use the buttons to make the information look like you want, or format text according to these examples.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Emphasis');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italics');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Lists");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numbered list item');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text to display');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'It can span multiple lines!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Images');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tables');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Column');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'If set to yes, a slideshow of property main images will be displayed. If set to no, then the first property main image will be displayed.');
jr_define('EDIT_CMS_USER', 'Edit CMS user');
jr_define('BOOKING_MADE_BY', 'Booking made by');
jr_define('_JOMRES_ROUTER_FEATURES', 'Amenities');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Room Types');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'External booking form URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Here you can set an external URL if you want to use a 3rd party website for making bookings. All jomres booking buttons will point to this URL. Leave this field blank if you want to use the Jomres booking form.');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Room Description');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Guest blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT',"Map height (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Map zoom level ");
jr_define('_JOMRES_MAP_MAPTYPE',"Map type ");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Template packages are plugins that can provide override templates for various core Jomres template files.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"This page lists any template files that can be overridden by a template package's template files. If you want to override a certain template file, click on the edit button for that file, on the next page you will be able to choose which version you want to override with. Note, these overrides take priority over both Jomres Core and any Wordpress or Joomla theme/template overrides. You can disable an override by deleting it in the List Template Overrides page.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Template name");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Not overridden");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"You can choose which template file to override the Core template files by changing the dropdown");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");
jr_define('_JOMRES_SELECT_WIDGETS',"Select widgets");
jr_define('_JOMRES_INTERVAL',"Interval");
jr_define('_JOMRES_TIMELINE',"Timeline");
jr_define('_JOMRES_CPANEL_GRID',"Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Select the grid layout of your frontend property management control panel home page.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Town images");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Changing the property type will delete all rooms, tariffs, property settings and reset availability.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager. If you have Core plugins installed, but do not have a valid Jomres license then we <em>do not</em> recommend that you update Jomres as older plugins often may not work with newer versions of Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "If you would like to update Jomres and it's plugins you will need a renewal license. Please visit <a href='https://www.jomres.net/pricing' target='_blank'>our site</a> for more information. In most cases these licenses are 50% of the price of a full license. Please ensure that you have logged into our shop before attempting to purchase a renewal.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Payment method : ");

jr_define('_JOMRES_PRICES',"Buy Jomres");


jr_define('_OAUTH_TITLE',"App key management");
jr_define('_OAUTH_APPS',"REST API client details");
jr_define('_OAUTH_IDENTIFIER',"Identifier");
jr_define('_OAUTH_APIKEY',"Client ID");
jr_define('_OAUTH_SECRET',"Secret");
jr_define('_OAUTH_CREATED',"Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO',"The Client ID and Secret are created for you. The Identifier is so that you can easily identify this key pair.");
jr_define('_OAUTH_SCOPE_TITLE',"Permissions ( what the client can do ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "User permissions");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Property permissions");

jr_define('API_DOCUMENTATION_TITLE',"App REST API documentation");

jr_define('_OAUTH_CONFIG',"API Core configuration");

jr_define('_OAUTH_CONFIG_SHOW',"Show API client configuration options in Jomres main menu?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"You may choose to not show the API client configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define('API_METHODS_TITLE',"API Methods");
jr_define('API_METHODS_DESCRIPTION',"This list of methods is based on your installed API feature plugins and is automatically generated. If you install or delete an API feature plugin you must visit this page to rebuild this list of API methods available on your site.");

jr_define('_OAUTH_REDIRECT_URI',"Redirect URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Give me a name that's meaningful to you, such as My Phone");

jr_define('_OAUTH_GRANT_TYPES',"This system supports two grant types , Client Credentials and Implicit. If you are using the <em>client_credentials</em> flow then you will need both the client id and the client secret. If using <em>implicit</em> then your app would send just the client id and you would log into the system to explicitly authorise that app.");

jr_define('_OAUTH_IMPLICIT_NOTES',"To use the <em>implicit</em> grant type flow, you will need to use this url to authorise your apps. When this url is called, and you have authorised the app the system will issue a token that you apps will then use to call this system's API ");
jr_define('_OAUTH_AUTHORISATION_URL',"Authorisation URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );

jr_define('_WEBHOOKS_CONFIG_SHOW',"Show Webhook configuration options in Jomres main menu?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"You may choose to not show the Webhook configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Webhooks documentation");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration' );
jr_define( 'WEBHOOKS_INTEGRATION_ID', 'Integration ID' );
jr_define( 'WEBHOOKS_INTEGRATION_URL', 'URL or Name' );
jr_define( 'WEBHOOKS_ENABLED', 'Enabled' );

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration' );

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Any webhooks you create will not be triggered as you are not assigned to any properties. Super property managers are not typically assigned individual properties, so you may need a new user for webhook creation.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Any webhooks you create will be triggered against the following properties : ' );


jr_define( 'PORTAL_REVIEWS_LIMIT', 'Reviews limit' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Use this setting to limit the number of reviews shown in the property details page.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Show all reviews' );

jr_define( 'VIDEO_TUTORIALS', 'Video Tutorials' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum deposit value' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "If the calculated deposit is less than this figure, then set deposit to this value instead. This figure might itself be over-ridden if it does not satisfy the site's minimum deposit setting. Leave it set to 0 to not use the setting." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Import existing images details to database');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimental feature. If enabled, images uploaded using the media centre feature will also be copied to your Amazon S3 bucket and served from your Amazon S3 bucket url. When enabling this the first time, you`ll also be promted to import existing images to your S3 bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Replace your default Amazon S3 domain with your CloudFront domain');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Recommended to be enabled. For Windows and Mac OSX only, if libcurl wasn`t built with Schannel or Secure Transport support (the native SSL libraries included in Windows and Mac OS X), you should set this to No.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Once you click this button, please do not interrupt the process and wait for a success or error message. Depending on server speed, this may take a while to complete.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copy existing images to Amazon S3 bucket');


jr_define( 'JOMRES_INCOMPLETE', 'Incomplete' );
jr_define( 'JOMRES_WATING_APPROVAL', 'Pending approval' );
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', 'Property details map' );

jr_define( 'HAS_STARS_TITLE', 'Allows stars classification?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Delete all Jomres data when uninstalling?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'If set to yes, Jomres will delete all it`s database tables when uninstalled. This will delete all Jomres data from db and can`t be undone.');

jr_define( 'TRANSACTION_IDS', 'Transaction id');
jr_define( 'PAYMENT_METHOD', 'Payment method');
jr_define( 'POA_DISPLAY_PRICE', 'POA Price');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'When properties are shown in a list, the system will attempt to find a valid price from configured tariffs based on either today\'s date, or if dates were used in a search, then based on those dates. If it cannot, then it will show POA (Price on application), meaning that the guest should contact you to get a price. If you want, you can configure a price here that will be shown instead of the POA text. This figure would be a "fallback" price to display if no other price can be determined.');

jr_define( 'PLUGINMANAGER_INSTALL', 'You need to install the plugin manager before you can install Jomres plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'You need to update the plugin manager before you can update any installed plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Let's do this!");

jr_define( 'INCLUDEINFILTERS', 'Include in filters?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Property feature filters in Ajax Composite Search can become very long, so you can set this option to No to prevent this feature from showing in the property feature list.');

jr_define( 'REVIEW_REMINDER_PT1', "You have ");
jr_define( 'REVIEW_REMINDER_PT2', " booking(s) that you have not left a review for yet. Please leave a review.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Bookings waiting for reviews");
jr_define( 'REVIEW_NAG', "Nag guests for reviews?");
jr_define( 'REVIEW_NAG_DESC', "Once a guest has been booked out from a booking, the system will remind them to post a review for their booking. Set this option to No to disable this reminder.");

jr_define( 'HIDDEN_ADDRESS_SETTING', "Hide address?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "If you set this option to Yes, then only guests who have already placed a booking on your property will be able to see the property street address. You might want to use this setting to hide the property's exact location if, for example, it is routinely left unattended.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimize images on upload?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'When enabled, images will be optimized for web (file size can be up to 75% smaller). Depending on the uploaded image type, your server needs to have one or more of these libraries installed by the hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define( 'OBSOLETE_FILES_CHECK', 'Obsolete Files Check');
jr_define( 'DATATABLES_COLVIS', 'Column Visibility');

jr_define( 'API_TOKEN_LIFETIME', 'API token lifetime');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');


jr_define( 'ENCRYPTION_TITLE', 'Encryption' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Encryption file location' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Never delete the encryption file** <br/> User data is stored encrypted in tables to ensure that "data at rest" is protected securely, in accordance with GDPR recommendations. By default the encryption key is stored in the file "encryption_key.class.php" in the root of your Jomres installation (typically /public_html/jomres). You can change where the file is stored here. If you do change the location, you must MOVE the file, do not wait for Jomres to create a new version otherwise you will not be able to decode your guests\'s details.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'The information you save here will be used on invoices generated for this property');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR Policies' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Here you can configure how long after a booking or invoice has been created it is removed from the system to ensure that you are compliant with the GDPR.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Booking Retention period (in days)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Invoice retention (non-booking) period' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Other invoices, such as commission and subscription invoices, are not tied to bookings. As a result they will not be deleted when booking invoices and contracts are deleted. Depending on your country, and your own business practices, you will need to configure a different retention period. A typical retention period might be 3653 days, which is 10 years.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Your data' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Some features of this website need to store information about your visit. This is used only to provide service to you, is never shared with anyone else and is deleted when no longer needed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DO YOU GIVE US PERMISSION TO STORE THIS INFORMATION??' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In detail' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'You must consent to us storing this data for you to be able to make bookings on this site. Regardless of whether or not you consent to your data being stored, we will store a cookie on your computer to tell us whether or not you have opted in. This helps us to ensure that we do not constantly ask you whether or not you want to opt in or out and it does not contain any Personally Identifiable Information (PII). If you change your mind you can visit the "App permissions" page at any time to opt in or out.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'The information is stored for different time periods depending on the nature of your visit. So, if  you are just looking around we will store approximate geographical location (country level) information. If you perform searches, then to make search forms more user friendly we will store the last things you searched on. This information is typically stored for a maximum of 24 hours and is only used to make your visit more pleasant.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'When you make a booking with us, by necessity more information is stored.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'The technicalites of the booking form are captured and retained for a maximum of 60 days. This is required so that On Request bookings can be turned into full bookings once a booking is approved, and for analysis by our teams in case there is an issue with a booking. If you were not logged in when you made a booking then we will email you a username and password so that you can view your booking history and exercise your Right To Be Forgotten (RTBF) if you wish to do that.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data entered into the booking form, for example name, email address, real address is stored for a maximum of 365 days after the booking\'s departure date. This information is stored in encrypted form in our database so that only authorised people can view it. If you make a booking then by law we must store your PII whilst the booking is valid. Once the booking has completed, either because it has been cancelled or you have been checked out, then you will be able to exercise your RTBF by logging in and visiting the "Your data" page. Invoice information for completed bookings will still be securely stored in our database to ensure that we abide by relevant tax laws but you will be able to remove all other PII after the booking is completed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'When you consent to your information being stored as described above, we are legally obliged to store this consent in our database. This information will include your IP number and the content of the opt-in form. We will retain this consent notification indefinately (this is a legal requirement).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'You have not yet told us if we can collect Personally Identifiable Information about you' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'You have consented to us collecting the necessary Personally Identifiable Information to take bookings' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'You have told us to not collect Personally Identifiable Information' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'You have not given us permission to collect your private data' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For you to perform certain actions on this website we have to collect Personally Identifiable Information about you, but you have not given us permission to do so.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Change your permissions' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continue viewing properties' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App permissions' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Guest data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'These are the details that are stored for you by the various properties. Different hotels may hold different records, depending on what you entered when you made the booking.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'You do not have any data stored with any hotels in this system' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profile data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'This is the main data set we hold for you, distinct from those you have shared with different properties.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'You have not saved any profile information' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Here is the Personally Identifyable Information that we store on this website for you. It is constructed in JSON (JavaScript Object Notation) format which is a lightweight data-interchange format. It is easy for humans to read and write and it is easy for machines to parse and generate.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'Anonymised' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'Your data' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'By accepting these Terms of Use Agreement (this “Agreement”), you agree that:

<ul>
	<li>
		You are authorized to book hotels through this website;
	</li>
	<li>
		You are at least 18 years of age;
	</li>
	<li>
		You possess the legal authority to create a binding legal obligation;
	</li>
	<li>
		You will use the Site in accordance with this Agreement;
	</li>
	<li>
		You will only use the Site to make legitimate reservations for yourself or for another person for whom you are legally authorised to act;
	</li>
	<li>
		You will inform such other persons about this Agreement that applies to the reservations I have made on their behalf, including all rules and restrictions applicable thereto;
	</li>
	<li>
		All information supplied by yourself to the Website is true, accurate, current and complete; and
	</li>
	<li>
		You will safeguard your account information and will supervise and be completely responsible for any use of your account by yourself and anyone other than you.
	</li>
</ul>
' );
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Security and transparency are important to us.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'We take our responsibilities regarding storing your data very seriously. All Personally Identifiable Information (PII) is stored encrypted in our database using industry standard algorithms to ensure that only authorised users can view this information.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'You can download all of the PII we store for you.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Download now' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Forgotten (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'We believe that you should be able to <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">delete</a> your <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Personally Identifiable Information </a>if you want and if it is practicable. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'You are not registered on this site. Your general location (country) and IP number will be stored for a maximum of 24 hours and then deleted.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'You are not registered on this site and you have opted out of data collection. We have not stored your PII.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'You are registered on the site and do not have any pending or active bookings. We can anonymise most information we currently hold for you. Would you like to do that? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Note : This does not delete your account, it simply anonymises our records so that your account cannot be associated with you as a person. By law we must continue to store your PII for invoicing purposes, however we will delete all guest records.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'You are registered on the site, however you have bookings outstanding and we cannot anonymise your data at this time. This data will be retained for a maximum of one year after the booking has been completed, then it will be deleted, if you do not choose to remove it before that time.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Because you are a property manager on our site, we cannot offer you the ability to have your data deleted automatically. Instead, please contact us directly so that we can assign your property(s) to another manager. Once we have done that and removed your status as a property manager, you will be able to automatically have your data deleted.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Forget me!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'This cannot be undone!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Your data has been deleted!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sorry, you cannot make a booking as your email address is invalid' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'This page gives you the ability to anonymise any guests who have their information stored in the system. This allows you to be compliant with the GDPR, however you cannot edit any other information on this page. To do that you have to log into the frontend as a property manager. The assumption is that a historic guest has contacted you requesting that you allow them to exercise their right to be forgotten. If they are unable to log into the frontend of the site (perhaps a user was not created for them when they booked) then you can use this area to anonymise them once you have confirmed their identity.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymise guest' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Guest data anonymised' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Cannot anonymise' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We need your permission to store your information before you can make a booking. CLICK HERE to give us permission.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'Enable GDPR compliant functionality?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WE DO NOT RECOMMEND THAT YOU DISABLE THE GDPR COMPLIANT FUNCTIONALITY. Jomres has built-in features that helps you to ensure that the Jomres section of your site is compliant with the GDPR. If you disable this feature (and you should not if you are in the EU or you do business with citizens of the EU) then Jomres will automatically assume that every visitor to the site has given their permission to have their personal data enabled. App permission and My Data pages will not be shown and users will not be prompted to give their permission to have the data collected.' );


jr_define( 'EMPTY_TEMP_DIR', 'Empty temp dir' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Temporary files deleted' );

jr_define( 'MACHINE_TRANSLATION', 'Machine translations' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.' );

jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Room Types' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'New Room type' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'You can create and edit room types on this page. These room types will be specific to this property only. When setting up your property you first need some Room Types. You can use either those room typies created by the administrator, or you can add your own. Once you have one or more Room Types you can then create rooms of that Room Type. After you have rooms you can then create tariffs (prices) for those rooms because tariffs are linked to Room Types.' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managers can create room types?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use this option to configure whether or not managers can create their own room types in the frontend. We strongly recommend that you leave this option set to No when you first start using Jomres, especially if you are creating a portal because you should create all room types in the administrator area. Room types created by managers will appear in search forms, but because these room types are specific to individual properties, only one property will be shown in search results if that room type is selected durings searches. If you want so that only Super Property Managers can create room types then leave this option set to Yes and use the Access Control plugin to allow only super managers to view the "Settings > Room types" menu option. Only properties that rent out rooms in the property and use Advanced or Micromanage tariff editing modes can use this option. Villa/apartment type properties will not be able to use it.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Room/property type updated');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Show room types in search options' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'If you choose to allow property managers to create their own room types, you can choose whether or not to show those created room types in the search options where you have chosen to show room types.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "You shouldn't re-use the same email address for each booking.<br/>If you have a unique domain (eg. not a gmail email address) for your business then use the guest's telephone number as their email address. The email address would then look something like 123456@mydomain.com<br/>This will ensure that a new guest is created when you create a booking ." );

jr_define( '_JOMRES_LOGIN_USERNAME', 'Email address' );
jr_define( '_JOMRES_LOGIN_PASSWORD', 'Password' );
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"We are delighted that you would like to book with us again. To be able to manage all your bookings together, it is necessary that you log in so that the booking can be added to your account. This also ensures that you are authorized to use the e-mail address provided." );

jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'If you do not know your password we can send you a password reset email. Please follow the instructions in that email to reset your password.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Forgot your password?' );

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymise your name?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'If you choose to anonymise your name when reviewing we will use your initials instead.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' said ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Reply to this review');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Type your reply to this review here.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Your reply');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Review reply saved');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Before submitting a review reply, you must read the following. By submitting a reply you confirm that you agree to these terms and conditions.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'What are our guidelines for a review reply?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'You are responding to the review of your property. You <em>must not</em> use your reply as a commercial dispute process. If you need to report a review, you must use the "Report Review" button on the listing, and not this review reply page.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Once you have left your reply you will not be able to edit it.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Allowed and Encouraged');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
	<ul>
    <li>A full response to the review.</li>
    <li>Courtesy and Honesty.</li>
    <li>Sensible responses to the reviewer\'s issues (remember, others may be having similar issues but did not take the opportunity to post a review).</li>
    <li>Encourage the guest to get in contact with you directly to solve issues.
    <li>Always remember that future guests will see your response. Make sure to be professional at all times.</li>
	</ul>
	');
	
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Not allowed');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
	<ul>
    <li>Commercial disputes.</li>
    <li>Questions to the Reviewer or Others.</li>
    <li>Questionable Language (including cursing).</li>
	</ul>
	');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last ran');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Invoice numbers');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Use custom invoice numbers?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'You can configure the system to use custom invoice numbers. Only new invoices will be affected.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Start number');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numbers are created consecutively. What should the first number be?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'What format should the invoice number take?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configure the invoice number format here. A format can look like {N}/{D} or {N}/{Y} where N is the automatically generated number, D = date in the format YYYYYMMDD (20190131) or Y = YYYY (2019). Any other alpha numeric characters not enclosed in curly braces will be left alone, so a pattern that looks like {N}/{D}-L would result in an invoice number (21) that looks something like 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Surcharge');
jr_define('_JOMRES_SURCHARGE_DESC', 'An additional charge that will be added to the room when booked (calculated per day)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritise site-wide labels?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Custom text saved in the label editing or the translate lang file strings pages are considered "site-wide" labels. Property managers can also customise labels for each property using the label editing feature in the frontend. This allows a property manager to have different texts for his property, which is useful if the property is different to all of the other properties on the site.<br/> When the system searches for label texts, it will prioritise site-wide texts over property specific texts meaning that if a site-wide text exists for that label, the system will choose that one first. If you set this option to No, the system will prioritise property specific texts over site-wide texts.');

jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // This could be changed if whitelisting, so site "World's best booking site" would change this to "WBBS" or similar.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Vendor and Node Modules are separate (free) packages for Jomres. You can re-install the packages on this page.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Re-install library packages');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Unable to delete property type because it is still be used by some properties. You must change these properties to another property type first before attempting to delete this one. Property UIDs that prevent deletion : ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Random email addresses');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Offer Random Emails');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'You can allow the system to generate random email addresses in the Quick Booking popup in the dashboard. This allows managers and receptionists to create bookings for guests that they do not have email addresses for, it is intended to work as a time saver for sites with many receptionists/managers who understand that these random emails will never be used for real communication, the purpose is to get around the fact that in Jomres all guests must have email addresses. You MUST also provide a domain in the next field.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'This should not be a normal email domain, such as gmail or outlook. Instead it can either be your own domain, or something else entirely, such as "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Upload area');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'No user role');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Suspended');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Deleted from CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'If you like Jomres, please consider leaving a review on one of these sites');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'I`m a nice person, i`ve already left a review');

jr_define('_LICENCE_PROMPT_DEAR', 'Dear ');
jr_define('_LICENCE_EXPIRED', ', your Jomres license key has expired, so you`re missing these great features and benefits! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Plugin updates and new plugin releases');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_EXPIRED_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Restart your membership now!');

jr_define('_LICENCE_INVALID_KEY', 'Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_INVALID_START', 'Start your free trial now!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Users');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Invoices');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Tools');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Reports');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Settings');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Help');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total properties in system');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Published properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Unpublished properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Approved properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Properties requiring approval');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Unpublished reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Review reports ');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "This property's property type is not published, it may not appear in search results. Please contact the site administrator to publish the property type, or change the property type in the Edit Property page.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Update your property type');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Income (paid amounts)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Cannot delete the property feature "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" because it is used by the following property(s) : ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'This page performs a basic test of the REST API using built-in functionality in Jomres. It calls the Jomres REST API to see if it receives a valid response.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'The server called this URL to see if the response is valid : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'The page received this response : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'The test appeared to go as expected, you will probably not have any problem receiving REST API requests from the rest of the Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'The test failed, look in the Response field, if it looks like a lot of html, or you recieved a 404 message, then your server is redirecting calls to another url. This will prevent you from receiving API calls.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'The Jomres App server maintains a list of all Jomres sites. This allows us to build a syndication network. This network is designed to allow our users to display properties from other sites on their own sites and is useful, particularly for new sites, to build up an SEO presence on the net. The goal is for all Jomres sites to work together, building trust in the network. There is no charge for this service.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Your site is not currently listed on the Jomres App server, which is part of the syndication network. This server will try again to add this server to the network on the next 6 page loads. If, after a few page loads, this does not change please check that the connectivity test above passes the tests. Note, localhost servers cannot be added to the network.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Congratulations, your server is listed on the Jomres App server.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Syndicated properties');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Here are some other properties available from our property network');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndication stats');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Congratulations, your server is listed on the Jomres Syndication Network. Your property(s) will start appearing on other Jomres sites soon, if they are not already being shown.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'You installation is not part of the Jomres Syndication Network, therefore your property(s) are not being shown on other Jomres based sites and you can\'t benefit from this free advertising.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Active Jomres installations : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'The total number of Jomres installations that are sharing Jomres Syndication Network properties on their sites. ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'This is the number of properties available in the JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'In total, all of the times a Jomres property has been linked to from another Jomres based site.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) is a free feature available to all Jomres users. It\'s purpose is to provide you with free advertising of your properties on other Jomres based sites. The goal is to help you get your site off the ground fast, offering free advertising so that your properties are recognised and trusted because they are linked to high confidence, high relevance websites that are already well known to the search engines. See this <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank">article on our website</a> and <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank">the manual</a>  for more information.');


jr_define('GUEST_PROFILE_INFORMATION', 'This is your guest profile data, fields with this symbol <i class="fa fa-users" aria-hidden="true"></i>
 are publicly visible, whereas fields with this symbol <i class="fa fa-user-secret" aria-hidden="true"></i> can only be seen by you, your hosts and site administrators.<br/><br/>Hosts can only see private information if you have already created a booking with them.<br/><br/>Your information is safely encrypted and stored in our database using AES-256 encryption.');

jr_define('GUEST_PROFILE_OPTIONAL', 'These fields are optional, however hosts may use the information here to determine if they feel that they can trust you, therefore it\'s better to add the information. Remember, you are asking to stay in their property, and they may turn you down if they feel you aren’t a good fit or that your bio doesn’t contain enough information.');
 
jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Driving license');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Passport number');
jr_define('GUEST_PROFILE_IBAN', 'IBAN number');
jr_define('GUEST_PROFILE_ABOUT_ME', 'About me');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'This "About me" section is publicly viewable so don\'t put in any private information. That said, do make an effort to put as much as you feel comfortable sharing such as your passions, what you do for a living, your hobbies etc. You can use Markup to give it a bit of jazz. Hosts will want to feel that they can trust you with their properties. Make sure that your picture is a real picture of you, not your dog or car (yes, guys, we\'re talking to you!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'Enter any special requirements you may have, such as ease of access needs here. They will not be shown on your public profile but they will be added to the booking information when you make a booking.');

jr_define('VIEW_HOST_PROFILE', 'Host\'s profile');

jr_define('GUEST_PROFILE_TITLE', 'Guest profile');
jr_define('GUEST_PROFILE_TITLE_MY', 'My profile');

jr_define('GUEST_PROFILE_WELCOME', 'Hi, let me tell you a little bit about myself.');
jr_define('GUEST_PROFILE_MY_NAME', 'My name is ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' and I come from the ');
jr_define('GUEST_PROFILE_IN', ' region in ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'My private information');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'We do our best to validate guest and host information however you should do your own due dilligence and decide for yourself whether or not this person is trustworthy.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'My properties');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'This is what I said about this property : ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'I gave this property a rating score of : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_OF_ME', 'What other people say about me');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'What this host said about me');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Review guest');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'My review of this guest ');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Here are some example guest reviews to get the ball rolling : <br/>
	
	<ul>
	<li>(guests name) was a pleasure to host! They left the space clean and were quiet throughout the weekend. They had smooth communication and I look forward to having them stay with me again!</li>
    <li>I loved having (guest name) because they were able to treat the place with respect, have a great time and enjoy the area. They were awesome with renting the space and I hope I get to host them again.</li>
    <li>All of my house rules were respected with (guest name) and they were able to come in and go with ease. I loved having them there as they were respectful and quiet. I highly recommend them to others!</li>
	</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Sorry, I can\'t find that user. Most likely they have not filled in their account details yet.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'Mark as No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Booking marked as No Show');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN statistics for this user');

jr_define('BOOKING_NOSHOW_INFO', 'Booking and No Show information is pulled from the Jomres Syndicate Network at booking time. It is taken from anonymised data and can be used by you to decide if this guest is a risk of not fulfilling the booking. If the system reports that the data is unknown, it is probably because this system is not recognised on the network.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Unknown');
