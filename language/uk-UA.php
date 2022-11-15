<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Миттєве бронювання');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Показати профілі');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Заг. Конфігурація');
jr_define('_JOMRES_COM_MR_BACK', 'Назад');
jr_define('_JOMRES_COM_MR_YES', 'Так');
jr_define('_JOMRES_COM_MR_NO', 'Ні');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Новий тариф');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', "Новий об'єкт");
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Новий гість');
jr_define('_JOMRES_COM_MR_SAVE', 'Зберегти');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', "Ім'я");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Поселення');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Виїзд');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', "Ім'я користувача");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Рівень доступу');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Корустувача змінено');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Всі броні');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Редагувати бронь');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'прибуття/виїзд');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Гість');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Кімната');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Оплата');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', "Ім'я");
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Прізвище');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Особливі вимоги');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Зверніть увагу, деякі особливі вимоги можуть оплачуватися додатково.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Відмінити замовлення');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Номер будинку');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Вулиця');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Місто');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Поштовий індекс');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Телефонний номер');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобільний номер');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Електронна пошта');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Не можна відмінити бронь, гість вже зареєстрований');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Без завдатку');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Підтвердіть відміну');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Замовлення скасоване');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Днів до прибуття');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Тип замовлення');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Чорний');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Рецепція');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Інтернет');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Назва кімнати');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Кімната');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Поверх');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Доступ для неповносправних');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Макс. число гостей');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Тип кімнати');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Опис типу кімнати');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Список особливостей кімнати');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Завдаток сплачено');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Введіть депозит');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Всього до оплати');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Довідка депозиту');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Замовити');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Депозит');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Депозит записаний');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Схожі квартири');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', "Об'єкт");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Тип кімнати');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Редагуйте деталі гостя');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', "Ім'я");
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Прізвище');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Дім');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Вулиця');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Місто');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Поштовий індекс');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'телефонный номер');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Мобильный телефон');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Номер факсу');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Зробіть ваш выбір');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Дні проживання');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Загальна кількість');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', "Перегляньте конфігурацію об'єкта та кімнати");
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Кімнати');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Атрибути кімнати');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Типи квартир');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', "Об'єкт");
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Атрибути квартири');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Квартира');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Тип');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', "Ім'я");
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Число');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Поверх');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Макс. гостей');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Атрибути');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Редагуйте пункт');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Атрибути квартири');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Опис атрибутів');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Особливість кімнати додана');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Особливість кімнати оновлена');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Тип кімнати');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Тип кімнати (скорочено)');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Опис типу кімнати');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Тип кімнати додано');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Редагуйте пункт');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Назва');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Вулиця');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Місто');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Область');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Країна');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Поштовый індекс');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Телефон');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Факс');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Електронна пошта');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Веб-сайт');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Особливості');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', "Об'єкт оновлено");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', "Особливості Об'єкту");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', "Особливості Об'єкту (скорочено)");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', "Особливості Об'єкту повний опис");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', "Особливість Об'єкту оновлена");
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Тарифи');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Назва');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Опис');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Дійсний з');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Дійсний до');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'За добу');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Мін. діб');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Макс. діб');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Мін. гостей');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Макс. гостей');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Тип квартири');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ігнорувати PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Дозволити на вихідні');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Редагувати пункт');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Клонувати пункт');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Тариф видалено');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Редагуйте тариф');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Бронь збережена');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Зареєструйте гостя');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Відреєструйте гостя');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Список замовлень');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Контрольна панель');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Керування гостем');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', "Управління Об'єктом");
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Доступність');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', "Ім'я");
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Прізвище');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Номер будинку');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Вулиця');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Місто');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Поштовый індекс');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Номер телефону');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобільний');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Немає кімнат, які б підходили по вашому запиту');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Дякуємо, що бронюєте саме у нас.<br><br> Зверніть увагу, що це попереднє підтвердження. Остаточне підтвердження прийде на вашу електронну пошту');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Записати гостя');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Гість зареєструвався');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Виписати гостя');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Додатки');
jr_define('_JOMRES_COM_A_TARIFFS', 'Тарифи і Валюта');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'завантаження файлів');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Додатково на одного гостя');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'відміттьте Так, якщо всі додатки будуть оплачуватися');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Плата за доповнення для одного гостя');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'депозит - процент?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Депозит має бути % від вартості всієї броні? Якщо ні, то це депозит будет дорівнювати вартості');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Сума необхідного депозиту');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'З гостя за добу');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Виберіть Так, якщо розраховувати за гостя/ніч. Якщо ні, то витрати будуть розраховані від загальних витрат на кімнату');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Розмір файлу');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Максимальний розмір файлу зображення в кілобайтах');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Заброньовано');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Деталі бронювання');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', "Нагадуємо, що бронь - юридично обов'язковий контракт, тому, якщо буде необхідність відмінити чи скоротити бронь, вам все одно доведеться оплатити повну вартість");
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', 'Відміна та зміна бронювання:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', '14 днів до поселення');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Надрукувати підтвердження броні');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Роздрукувати рахунок');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Кількість ночей:');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Вартість доби:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Загальна сума');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Друкувати рахунко');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Додати обслуговування до рахунку');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Опис обслуговування');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Вартість обслуговування');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Інше');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Пункт, доданий до рахунку');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Завантажити зображення');
jr_define('_JOMRES_FILE_UPLOAD', 'Завантаження файлу');
jr_define('_JOMRES_COM_A_ODDS', 'Різне');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Список мінікомпонентних викликів');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Поставте для цього значення Так, щоб побачити журнал мінікомпонентів, що викликаються внизу сторінки після завершення роботи Jomres. Він також вимикає функцію внутрішнього переспрямування. Це корисно, якщо ви намагаєтесь визначити, які мінікомпоненти виконують певні послуги. ');
jr_define('_JOMRES_FILE_DELETE', 'Видалити це зображення');
jr_define('_JOMRES_FILE_DELETED', 'Файл видалено');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Видалити');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Кімнату неможливо видалити через відкриті броні. Відмініть броні на цю кімнату і повторіть спробу.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Кімнату видалено');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Видалити особливості кімнати');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Неможливо видалити особливість кімнати, вона присутня в інших кімнатах. Спершу видаліть цю особливість з інших кімнат.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Особливість кімнати видалено');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', "Видалити особливіть об'єкта");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', "Неможливо видалити особливіть об'єкта, вона прив'язана до об'єкта. Зніміть особливість з об'єкта і спробуйте повторити.");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', "Особливість об'єкта видалено");
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Видалити тип кімнати');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Тип кімнати видалено');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', "Видалити об'єкт");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', "Об'єкт видалено");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', "У вас недостатньо прав для видалення цього об'єкта.");
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Ширина повного зображення');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Розташування');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', "Опис об'єкту");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Час поселення');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Активності поруч');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Як дістатися');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Аеропорт');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Дістатися іншим транспортом');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Правила');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Адреса');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Гості можуть забронювати онлайн');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Поставте Так, щоб гості могли бронювати онлайн.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Броні на фіксований період');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', "Якщо виставляєте Так, тоді броні будуть прийматися лише на вказаний період. Якщо Ні, тоді  зверніть увагу, щоб день прибуття не був встановлений 'Так' (якщо ви не хочете гостей проселятися в конкретний день)");
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Період бронювання:');
jr_define('_JOMRES_COM_A_BOOKING', 'Бронювання кімнат');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Максимальна кількість періоді, напр. 3 x 7 (період бронювання) = 21 день');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Що це - квартира/дім/вілла?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Переглянути бронь');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Підтвердити бронь');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'понеділок');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'вівторок');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'середа');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'четвер');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', "п'ятниця");
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'субота');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'неділя');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'пн');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'вт');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'ср');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'чт');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'пт');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'сб');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'нд');
jr_define('_JOMRES_COM_A_AVLCAL', 'Календар завантаженості');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Колір шрифту для поточної дати');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Колір шрифту для днів в демонстрації місяця');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Колір шрифту для днів не в демонстрації місяця');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', "Колір фону клітинки для днів, коли об'єкт/кімната доступіа");
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Колір фону клітинки для днів не в демонстрації місяця');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Колір фону клітинки для зайнятих днів');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Колір фону клітинки для зарезервованих номерів (без депозиту депозит)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Колір фону клітинки для минулих дат');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Занято/Не доступно');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'вільно');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Тимчасові броні');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Наперед встановлений день прибуття');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Лише для сайтів з встановленими датами прибуття. Виберіть день, коли починається прибуття.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Фіксований день прибуття');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Період перебування (днів)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Показати календар завантаженості?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Так, щоб показувати календар');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Доступність');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Клікніть на вільну дату, щоб побачити форму бронювання.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Чорнова броні');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Нова чорнова бронь');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Видалити гостя');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Гостя видалено');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', "Неможливо видалити цього гостя, оскільки з ним пов'язані броні. Вдмініть ці броні і спробуйте знову.");
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Не важливо');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Календарний вихідний формат');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Календарний вхідний формат');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Дозволяє користувачу міняти вхідний формат дат в межах Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Броні на фіксований період дозволяють коротке проживання');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Тривалість короткого проживания');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Опубліковано');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Аудиторський слід');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Дата');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', "Користувач (ім'я користувача)");
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Фільтр по датах');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Статус');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Очікуємо прибуття');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Прибуття сьогодні');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Теперішній гість');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Виселення сьогодні');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Пізній виїзд');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Не прибув');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Створена кімната');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Оновлена кімната');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Видалена кімната');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Створена особливість кімнаты');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Оновлена особливість кімнаты');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Видаленана особливість кімнаты');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', "Створено об'єкт");
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', "Оновлено об'єкт");
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', "Виалено об'єкт");
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', "Редаговані налаштування об'єкту");
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', "Об'єкт опубліковано");
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Створений тариф');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Оновлений тариф');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Додано податок на обслуговування');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Зареєстурвати гостя');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Введений депозит');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Створений гість');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Оновлений гість');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Заброньована кімната');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Створити додаток');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Оновити додаток');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Видалити додаток');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Опублікувати додаток');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Створено чорнову бронь');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Видалено чорнову бронь');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Додатки');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Опис');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Назва');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Ціна');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'додаток оновлено');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Редагувати пункт');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Додаток видалено');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Адміністративні додатки');
jr_define('_JOMRES_COM_A_EXTRAS', 'Показувати додатки під час замовлення?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Поставте Так, щоб показувати будь які додатки, які можна запропонувати гостю');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Допомога з додатками');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Дата початку чорнової броні');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Дата, коли відновлюється обслуговування');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Чорнові броні');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Виникла помилка, одна або декілька кімнат зайняті.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Кімнати що включені до чорнової броні');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Немає чорнових броней');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Число поселень');
jr_define('_JOMRES_COM_A_RESET', 'Відхилити');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Бронь відмінена');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Шукайте тут:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Символ валюти');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Код валюти');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Більше інформації');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Обмежити попереднє бронювань?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Так, якщо хочете обмежити термін попереднього бронювання (кількість днів - в наступному полі). Якщо користувач буде бронювати більше ніж n днів наперед, то їх дата прибуття буде встановлена на сьогоднішню дату');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'На скільки днів обмежити попередні бронювання:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Податок');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Податок з кімнати');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Фіксований податок');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Процентний податок');
jr_define('_JOMRES_COM_A_EUROTAX', 'Податок');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', '% податку');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Архівувати всі звіти');
jr_define('_JOMRES_FRONT_TARIFFS', 'Наші тарифи');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Назва тарифу');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Опис тарифу');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Тип кімнати');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'ДДійсний від');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Дійсний до');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'З гостя за ніч');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'За добу');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Не на вихідні');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Мінімальна кількість ночей');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Максимум ночей');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Мінімум гостей');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Максимум гостей');
jr_define('_JOMRES_FRONT_PREVIEW', 'Попередній перегляд');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Редагування включено?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Оновлений custom текст.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Редагувати мову');
jr_define('_JOMRES_FRONT_PTYPE', "Тип об'єкту");
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', "Список типів об'єктів");
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', "Редагуйте тип об'єкту");
jr_define('_JOMRES_COM_PTYPES_PTYPE', "Тип об'єкту");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', "Опис типу об'єкту");
jr_define('_JOMRES_COM_PTYPES_SAVED', "Тип об'єкта записано");
jr_define('_JOMRES_COM_PTYPES_DELETED', "Тип(и) об'єктів видалені");
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Залишилося до оплати');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Без додаткових послуг');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Депозит');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Повна оплата');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Оплата під час бронювання');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Виберіть депозит, якщо він необхідний, або вся сума.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'місяці, щоб показувати');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Скільки місяців показувати в календарі зайнятості?');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Шлюз оплат');
jr_define('_JOMRES_COM_A_CANCEL', 'Відмінити');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Виберіть кімнату, яку хочете закрити для бронювань на певні дати. <br> Якщо неможливо цього зробити - перевірте чи немає на ці дати інших броней і спочатку відмініть їх за потреби. <br/>, Коли виберете відповідні дати - клікніть синю кнопку -Виконати- щоб повторно перевірити наявність.');
jr_define('_JOMRES_JR_NOTLOGGEDIN', 'Ви не виконували жодних дій, тому система автоматичо припинила вашу сесію. Будь ласка зайдіть в систему знову.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Причина');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Використовувати платіжний шлюз?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Виберіть, будь ласка, метод оплати.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Шлюз увімкнено');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Измененное урегулирование плагина');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Вставленное урегулирование плагина');
jr_define('_JOMRES_FRONT_GALLERYLINK', "Перейти на сайт об'єкта");
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Зовнішнє посилання');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Вставте посилання на ваш сайт.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Редагувати дані кредитки');
jr_define('_JOMRES_COM_A_EDITICON', 'Редагувати розмір зображення');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Слайд-шоу');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Показувати посилання на слайд-шоу?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Показувати одразу слайд-шоу?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Слайд-шоу');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Показувати посилання на тарифи?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Дозволяти виринаючі вікна (Popup)?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Завантажте зображення для слайд-шоу');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO', 'Використовуйте дану форму для масового завантаження фото <br/> УВАГА, Всі зображення з одинаковими назвами будуть перезаписані.<br/>Всі зображення записуються до /images/stories/jomres/*property_uid* папки. Якщо папка не існує - вона буде створена автоматично.');
jr_define('_JOMRES_A_TABS_MISC', 'Різне');
jr_define('_JOMRES_A', 'Конфігурація сайту');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Використовувати глобальні особливості сайту');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', "Щоб призначити фото на особливість, спочатку завантажте піктограму особливості об'єкта в папку  /jomres/uploadedimages/pfeatures/ .");
jr_define('_JOMRES_A_ICON', 'Пікторгама');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Вибрати пошуковий плагін.');
jr_define('_JOMRES_FRONT_NORESULTS', 'Нажаль, ваш пошук не дав результатів. Змініть ваш запит та спробуйте ще раз.');
jr_define('_JOMRES_AREYOUSURE', 'Ви впевнені?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Забронювати квартиру');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Забронювати квартиру');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Показати тарифи в тексті?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Адреса');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Детальна інформація');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Показати календар завантаженості');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Показати адресу під цим посиланням');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', "Показати детальну інформацію про об'єжт під цим посиланням");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Показати кімнати та їх доступність під цим посиланням');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Єдиний тариф');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Середні значення');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Виберіть тарифну модель');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Є два методи підрахунку тарифу. 1 - єдиний тариф дозволяє пропонувати кілька тарифів, ціна в яких залишається однією протягом всього періоду бронювання. Наприклад: тариф 'все включено', або 'тільки сніданок', тощо. 2 - Середні значення. Jomres врахує всі ціни на проживання і покаже середнє значення за період.");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Показувати форму вводу дати виїзду?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Поставте НІ, якщо не хочете показувати форму вводу дати виїзду. Робіть це лище тоді, коли знаєте що робите. Дата виїзду проставиться автоматично наступного дня після приїзду.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Обмеження опису');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', "Обмежує кількість символів в описі об'єкту, взятих з загального опису об'єкту");
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Використовувати date() формат дати?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Опублікувати');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Скасувати публікацію');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Використовувати глобальні типи кімнат');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Щоб призначити зображення на цей тип кімнат, спочатку завантажте фото типів кімнат в папку /images/stories/jomres/rmtypes/.');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Помилка вводу (Input error background colour)');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Країна по замовчуванню в формі замовлення');
jr_define('_JOMRES_JAVASCRIPT_', "Пункти відмічені зірочкою - обов'язкові.");
jr_define('_JOMRES_COM_SELFREGISTRATION', "Користувачі можуть реєструвати об'єкти?");
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', "Так, тоді користувачі зможуть самостійно реєструвати свої об'єкти.");
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', "Пункти позначені зірочкою - обов'язкові.");
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', "Доданий об'єкт");
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Показувати календар від початку року?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Календар завантаженості буде відображатися з початку поточного року.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Кількість доступних комнат');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', "Повернутися до деталей об'єкту");
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Типи кімнат');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Random search limit');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Показувати посилання на курси валют?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Обмінний курс (приблизинй)');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Дозволити html-редактори?');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Це форма бронювання. Внесіть деталі бронювання такі як прибуття, виїзд, кількість гостей. Потім виберіть доступні кімнати. Клікніть на доступні кімнати щоб включити їх у бронь. Потім залишається тільки вибрати додаткові опції (якщо є) та вказати свої дані. Коли всі дані внесено - ви побачите кнопку підтвердження замовлення.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Це форма бронювання. Внесіть деталі бронювання такі як прибуття, виїзд, кількість гостей. Потім залишається тільки вибрати додаткові опції (якщо є) та вказати свої дані. Коли всі дані внесено - ви побачите кнопку підтвердження замовлення.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Особливості бронювання');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Виберіть деталі вашого бронювання');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Доступність');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Вибрати кімнати');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Дивитись тут чи доступна квартира на вказані дати.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Додатки');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Виберіть будь які додатки які бажаєте включити до бронювання');
jr_define('_JOMRES_COM_PERDAY', 'За ніч');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Ваша адреса');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', "Введіть ваші деталі. Поля відмічені зірочкою - обов'язкові");
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Доступні кімнати');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Відібрані кімнати');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Найшвидша дата прибуття:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'За добу:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Загальна кількість:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Додатково:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Податки:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Знижка:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Загальна кількість:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Гості');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Клікніть тут, щоб додати кімнату до вашої броні');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Клікніть тут, щоб видати кімнату з вашої броні');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Типи гостей');
jr_define('_JOMRES_VARIANCES_TYPE', 'Тип');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Тип клієнта, напр. Діти 5-10р, або Студент');
jr_define('_JOMRES_VARIANCES_NOTES', 'Нотатки');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Примітки до цього типу клієнтів');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Максимум');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Максимальна кількість гостей цього типу');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Є процентне');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Дане число це процент від базової величини для кімнати. Якщо НІ, тоді число просто буде додано або вирахувано від ціни кімнати.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Додати різницю?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Вирахуване число буде додане або відняте від базової ціни кімнати. Якщо поставите НІ, тоді це буде знижкою до базової ціни.');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Різниця');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Величина різниці');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Змінено порядок типів клієнтів');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Видалений тип клієнта');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Створено тип клієнта');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Оновлено тип клієнта');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Тип клієнта оновлено');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', "Показувати посилання на кімнати об'єкта на сторінці деталей?");
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Показувати лише календар зайнятості?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', "Так, щоб не показувати заголовок об'єкту та деталі, а лише календар зайнятості. Ця опція для SRP об'єктів: квартир, віл, тощо.");
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Мінімальний інтервал посел-висел.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Мінімальний інтервал між датою поселення і виселення.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Показати номер кімнати в формі бронювання');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Показати назву кімнати в формі бронювання');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Показати назву тарифу в формі бронювання');
jr_define('_JOMRES_ORDER', 'Забронювати');
jr_define('_JOMRES_REQUIREDFIELDS', "Обов'язкові поля");
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Дні(-ів) перед прибуттям');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Мінімальна кількість днів, які мають пройти від -сьогодні-, до дати прибуття.');
jr_define('_JOMRES_DTV', 'Варіації типу дати');
jr_define('_JOMRES_DTV_DOW', 'День тижня');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Кількість гостей по замовчуванню');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Кількість гостей яка буде відображатися першою в формі бронювання.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Лише зареєстровані користувачі можуть бронювати онлайн?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Щоб бронювати онлайн вам потрібно буди зареєстрованим користувачем. Клікніть тут щоб зареєструватися.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Колір шрифта поточних броней');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Межі вікенду');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Кімната заброньована');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Чорнова бронь');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Заокруглити депозит до цілого числа?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Вимагати депозит?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Тарифні платежі є щотижневими?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Ви можете зберігати тарифи як щоденні так і щотижневі значення. Для щотижневих виберіть ТАК.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Плата за тиждень');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Фіксовані дати прибуття повторюються:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Коли вибрані фіксовані дати заїзду, в переліку достпних дат для заїзду будуть доступні лише вони. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available)');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Неправильна дата прибуття');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Неправильна дата виїзду');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Надто малий період броні. Має бути як мінімум:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Ваш інтервал');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Неправильний тип гостя');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Выберите ваши числа/тип гостя');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Гостей більше ніж передбачено тарифом');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Ви вибрали більше кімнат, ніж є гостей. Видаліть зайві');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Надто багато гостей для доступних ліжок');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Виберіть більше кімнат');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Виберіть кімнату');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', "Необхідно ввести ім'я");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Необхідно ввести прізвище');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Необхідно ввести номер будинку');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Необхідно ввести вулицю');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Необхідно ввести місто');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Необхідно ввести Область');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Введіть поштовий індекс');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Введіть країну');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Введіть номер телефону');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Введіть номер мобільного');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Введіть email');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'У нас вільно!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Ви не вибрали жодної кімнати :( ');
jr_define('_JOMRES_BOOKING_NUMBER', 'Номер бронювання');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Можна бронювати, фон вікна повідомлення');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Дамп змінних шаблонів?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Встановіть це, щоб увімкнути дамп DHTML змінних шаблонів для кожного файлу шаблону FRONTEND під час перегляду цієї сторінки. Корисно, якщо ви хочете побачити, чи доступний певний елемент для використання у даному шаблоні.') ;
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Число - процент');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'ТАК, якщо плата за одного гостя - процент.');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Доступна кількість кімнат/обмеження тарифу');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Для обмеження доступних кімнат чи тарифів у формі бронювання. 0 якщо не хочете вводити обмеження.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Наразі все заброньовано!');
jr_define('_JOMRES_BOOKITNOW', 'Бронювати зараз');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Глобальне редагування?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', "Уважніше з цією функцією. Якщо ТАК, тоді змінивши один опис одного об'єкту ви зміните його для всі об'єктів системи.");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Використовувати глобальну валюту?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Так, щоб використовувати одну валюту (напр. & # 8 3 6 4 ;)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Глобальний символ валюти');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Компонент згорнутий');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Так, якщо хочете щоб модуль та заголовок були приховані (Set this to Yes if the component is wrapped so that module and header areas are not to be seen)');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Лише вихідні');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Вихідні');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Виставте дні, які належать до вихідних. Це буде враховуватися в тарифах.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Спершу виберіть країну');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', "Збережіть зміни до об'єкту перш ніж завантажувати фото");
jr_define('_JOMRES_TARIFFSFROM', 'Ціни від -');
jr_define('_JOMRES_SEARCH_ALL', 'Всі');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Країна');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Регіон');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Місто');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Опції');
jr_define('_JOMRES_SEARCH_BUTTON', 'Шукати');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Пошукова фраза');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Ключові слова');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Введіть ваші дати поселеня/виселення щоб ми змогли запропонувати вільні варіанти.');
jr_define('_JOMRES_SEARCH_PTYPES', "Показати всі об'єкти за типом");
jr_define('_JOMRES_SEARCH_RTYPES', "Показати всі об'єкти за типом кімнати");
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Звичайний порядок');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', "Назва об'єкту");
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', "Регіон об'єкту");
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', "Місто об'єкту");
jr_define('_JOMRES_SORTORDER_STARS', 'Зірковість');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Деталі житла');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Форма бронювання');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Оновити адресу');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Ще раз перевіряю доступність кімнат<br/>(Вибір кімнат оновиться)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Ще раз перевіряю доступність квартир');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Змінюю ваші додатки');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Змінюю вибір кімнат');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Оновлюю ваші адресні дані');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Вибачте, щось не гаразд з даними адреси.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Зображення кімнати');
jr_define('_JOMRES_CURRENCYFORMAT', 'Формат валюти');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Опції пошуку');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Доступні логи');
jr_define('JOMRES_COM_A_MESSAGE', 'Повідомлення');
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Звичайний');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Просунутий');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Мікроуправління');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Режим конфігурації тарифу');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "УВАГА: Переключаючись між типами тарифів ви ризикуєте втратити всі дані тарифів. Дивіться нижче для деталей.
<br/><br/>
Є три режими управління тарифами:<br/>
Звичайний: один тариф для одного типу кімнат на 10 років.<br/>
Мікроуправління: Можна змінювати ціну окремого дня для кожної кімнати/квартири. <br/>
Просунутий: -Старий- тарифний метод, дозволяє створювати кілька тарифів для однієї дати. <br/>
<br/>
Через специфіку кожного з режимів, не завжди можна спокійно змінювати режим для об'єкта. Ось як саме можна змінювати режим тарифу:
<br/>
Звичайний -> Просунутий. Без змін. Існуючі тарифи переписуються.<br/>
Звичайний -> Мікроуправління. Існуючий тариф видаляється.<br/>
Просунутий -> Звичайний. Існуючий тариф видаляється.<br/>
Просунутий -> Мікроуправління. Існуючий тариф видаляється.<br/>
Мікроуправління -> Просунутий. Існуючі взаємозвязки між тарифами видаляються, але самі тарифи залишаються.<br/>
Мікроуправління -> Звичайний. Існуючі взаємозвязки між тарифами та самі тарифи видаляються.<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', "Показувати список кімнат у деталях об'єкта?");
jr_define('JOMRES_PROPERTYTYPE', "Тип об'єкта");
jr_define('JOMRES_MAXPEOPLEINROOM', 'Max гостей на кімнату');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Max гостей на бронювання');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Додати нотатку');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Редагувати нотатку');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Видалити нотатку');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Переглянути нотатку');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Додано нову нотаку');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Нотатку змінено');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Нотатку видалено');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Показати броні');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Мої броні');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Переглянути бронь');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Дивитися улюблене');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Ви поки не додали нічого до обраного!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', "Тип об'єкту");
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Розумна ціна');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Активно');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Цей плагін дозволяє динамічно керувати цінами.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', "MІнші підприємства перераховують ціни на номер на основі кількості номерів необхідного типу, які є на певну дату. Це дозволяє їм пропонувати знижки на номер кімнати, який не зайнятий протягом певного періоду, з метою залучення бізнесу, який інакше міг би бути пропущений. <br/> Увімкнення та налаштування цього плагіна дозволяє запропонувати регульовані ціни залежно від кількості номерів вибраного типу доступні у помешканні в певний день. <br/> Порогове значення днів визначає кількість днів, протягом яких дата прибуття повинна бути в межах, перш ніж ціни на кімнату будуть скориговані цією функцією, тоді параметри відсотків дозволять вам щоб налаштувати відсоток кімнат, які можуть бути доступні до застосування певної знижки.");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Днів до поселення');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Зайнято 10% кімнат');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Зайнято 25% кімнат');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Зайнято 50% кімнат');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Зайнято 75% кімнат');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Знижка %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', 'ціну знижено з');
jr_define('_JOMCOMP_WISEPRICE_TO', 'до');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', 'Знижки немає');
jr_define('JOMRES_COM_A_MAPSKEY', 'Ключ API карт Google');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Ви можете отримати ключ API Google Maps з <a href = "https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank"> Карти Google </a>. Після того, як ви введете тут ключ своєї карти, Джомрес покаже карту на вашій сторінці" Подробиці власності ". ');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Остання хвилина');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Активувати?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Так, якщо активувати last minute пропозиції.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Поріг');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Якщо дата прибуття N днів від дати бронювання, тоді можна надати знижку');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Знижка');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', '%');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'До цього бронювання надається знижка!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Бронювання стало дешевшим на');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', "Цей об'єкт пропонує last minute знижку");
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% якщо прибуваєте до');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '% або більше якщо прибуваєте до');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Бронюйте зараз щоб отримати максимум з цієї пропозиції!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Розширена інформація про тариф');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', "Так щоб розгорнути детальну інформацію про тариф у деталях об'єкту");
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Мінімальні опції налаштування');
jr_define('_JOMCOMP_AMEND', 'Amend Booking - Property Selection');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', "Вибрати новий об'єкт");
jr_define('_JOMCOMP_AMEND_HEADER', 'Original Contract:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Депозит сплачено');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Депозит не сплачено');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Override Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Override Deposit');
jr_define('_JRPORTAL_CANCEL', 'Відміна');
jr_define('_JRPORTAL_CPANEL', 'Control Panel');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Комісія по замовчуванню');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', "Виберіть % комісії який утримується з об'єкта.");
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Список комісійних');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Тарифи комісії');
jr_define('_JRPORTAL_CRATE_TITLE', 'Назва');
jr_define('_JRPORTAL_CRATE_TYPE', 'Тип');
jr_define('_JRPORTAL_CRATE_VALUE', 'Рівень комісії');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Код валюти');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', "Список об'єктів");
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', "Назва об'єкту");
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', "Адреса об'єкту");
jr_define('_JRPORTAL_PROPERTIES_LEGEND', "Об'єкти з фоновим кольором червоний ще не мають встановленої комісії.");
jr_define('_JRPORTAL_STATS_PATETITLE', 'Статистика');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', '% комісії');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Показати броні');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Property id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Invoice id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Booking total');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Date archived');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Опис');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have property type specific language files by setting the description to the name of a sub folder, e.g. -yachtbrokerage- and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', "Ви не можете видалити цей об'єкт оскільки він єдиний до якого ви маєте доступ. Якщо хочете приховати її, використовуйте кнопку скасування публікації на панелі інструментів.");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Всього за проживання');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'ночей');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'за кімнату');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Enhance Your Stay Total');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Підсумок ціни');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Будь ласка прочитайте та прийміть');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Підсумок вашого бронювання нижче.<br /> Щоб внести зміни, клікніть Змінити бронювання.');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Якщо є потреба змінити будь яку інформацію вище - клікайте тут');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Змінити бронювання');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Особливі запити введіть в поле нижче.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Я підтверджую що подана інформація є коректною та погоджуюся з');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'за особу за ніч');
jr_define('_PN_OF', 'з');
jr_define('_PN_START', 'Початок');
jr_define('_PN_PREVIOUS', 'Попередня');
jr_define('_PN_NEXT', 'Наступна');
jr_define('_PN_END', 'Кінець');
jr_define('_PN_RESULTS', 'Результати');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'NB! Це не форма для бронювання, ви просто надсилаєте повідомлення.<br/>Введіть повідомлення, яке хочете відправити.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Написати повідомлення');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Форма запиту квартири');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Спасибі за ваш запит, він вже надійшов до відповідального за це житло, а копія надіслана вам на пошту. Вам відпишуть якомога швидше.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', 'стосовно');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Запит');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Виберіть житло зі списку праворуч');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Мінімальна кількість кімнат вже вибрана');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Мінімальна кількість номерів, вже вибраних під час бронювання до того, як можна запропонувати комбінований тариф/тип номера. Дозволяє знижувати тарифи, якщо вже вибрано більше N кімнат.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Максимальна кількість кімнат вже вибрана');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Максимальна кількість номерів, вже вибраних під час бронювання до тарифу/комбінації номерів, більше не пропонується. Дозволяє припинити пропонувати цю комбінацію типу номеру/тарифу після того, як у формі бронювання вибрано N кімнат. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Зауважте, що встановлені тут доповнення для однієї особи не будуть використовуватися, якщо в загальній конфігурації для Додатків для однієї особи встановлено значення Так. Наведені тут параметри є альтернативою одноразовим внескам, а не доповненням до квартири. ставка SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Доступно');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Деякі броні');
jr_define('_JOMRES_AVLCAL_HALF', 'Наполовину заброньовано');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Переважно заброньовано');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Повністю заброньовано');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'За тиждень');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'За день');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'За бронь');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'З особи за бронь');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'З особи за день');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'З особи за тиждень');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per days (min days)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per days X rooms selected');
jr_define('_JOMRES_REGISTRYREBUILD', 'Відновлення мінікомпонентного реєстру');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Зазвичай реєстр плагінів Jomres відновлюється автоматично кожного разу, коли ви переглядаєте менеджер плагінів та додаєте або видаляєте плагін, однак ці функції з якихось причин ви не можете використовувати, тому ви можете використовувати цю функцію для відновлення реєстру вручну. Якщо у вас є доступ до функції «Диспетчер плагінів» та «Оновлення», навряд чи вам доведеться скористатися цією функцією. Вам потрібно буде відновити реєстр плагінів щоразу, коли ви додаєте новий міні-компонент і не використовуєте Менеджер плагінів. додати його. ");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Реєстр успішно відновлено');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Сталася помилка під час відновлення реєстру мінікомпонентів. Ви повинні перевірити свій журнал помилок Jomres, щоб побачити, чи є запис того, що викликало помилку.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Ціна');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Ви ще нічого не бронювали!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', "Редагувати тип вашого об'єкту");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', "Вибрати тип вашого об'єкту");
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Ваш запит ...');
jr_define('_JOMRES_COM_A_LISTLIMIT', "Ліміт списку об'єктів");
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', "Кількість об'єктів для показу на одній сторінці після пошуку");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Функція інтегрованого пошуку');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', "Вбудована функція пошуку Jomres дозволяє вашим користувачам здійснювати пошук у власності Jomres відповідно до набору функцій. Якщо ви вже користувалися функціями пошуку Jomres у Joomla, вам будуть знайомі ці налаштування. <br/> Ця функція дозволяє нам пропонувати обробку пошуку в Jomres для тих користувачів, які не хочуть використовувати модулі пошуку Joomla, або для інші користувачі CMS, у яких CMS не має власних модулів пошуку Jomres. <br/> Просто пам’ятайте, що якщо ви вирішите шукати щось за посиланням (тобто не за допомогою випадаючого меню), інші параметри пошуку не будуть реалізовані, а лише елемент це відповідає посиланню, на яке ви натиснули. <br/> Зауважте, що макет цього інтегрованого пошуку за умовчанням не дуже гарний. Це тому, що файл шаблону, який виконує макет, повинен містити всі можливі параметри, деякі з яких несумісні.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Активувати цю функцію?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Якщо ця функція увімкнена, то будь -який виклик до Jomres, який показує список властивостей, означатиме, що також відображаються параметри пошуку.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Використовувати колонки');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Search region by select combo dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Шукати за назвою об'єкту");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Показати поле для пошуку за назвою.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Показати як випадаюче меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Місто/регіон');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Показати ввід регіону');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Показати як випадаюче меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Шукати за типом об'єкту");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Show the search by property type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Показати як випадаюче меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Шукати за типом кімнати');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Show the search by room type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Показати як випадаюче меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Features');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Show the search by feature input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Показати як випадаюче меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Set this to no to show the list as tooltip images and checkboxes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'ПОшук за описом');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Show the search by description input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Пошук за доступністю');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Show the search by availability input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Пошук за ціною');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Show the search by price ranges input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Price range increments');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'За замовчуванням, якщо властивість не вибрано в Jomres, воно виконуватиме пошук. Якщо цей пошук не був ініційований модулем пошуку, цей пошук дасть випадкові результати (навмисно). Ця опція дозволяє обмежити кількість повернень у цьому випадковому пошуку.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Налаштування та журнали роботи Cron');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Інформація про роботу псевдокрона. Функціональність псевдокрона потрібна для виставлення рахунків та обробки комісій.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Встановлені мінікомпоненти cron. Щоб запустити окреме завдання cron, використовуйте посилання, зазначені нижче. Зауважте, що завдання cron не видають жодного результату, тому ви не побачите жодної інформації на сторінці. Натомість зверніться до завдання журнал нижче. ');
jr_define('_JOMRES_COM_A_CRON_METHOD', 'Метод');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Якщо у вас немає доступу до завдань cron, встановіть для цього параметр Minicomponent, інакше створіть завдання cron і скажіть йому запустити <br /> <i> curl -s ' .JOMRES_SITEPAGE_URL_AJAX. '&task=cronjobs='. get_showtime(' tmplcomponent ').'&no_html=1>/dev/null </i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Відображення журналу в браузері');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Працює лише якщо для методу встановлено мінікомпонент.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Журнал увімкнено');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Встановіть для цього значення Так, щоб увімкнути реєстрацію. Результати журналів будуть виведені нижче.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Детальний журнал');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Багато результатів реєстрації');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Редагування шаблону');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Користувацькі поля');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Тут ви можете визначити прості користувацькі поля, які відображатимуться у формі бронювання.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Назва поля (без пробілів)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Значення по замовчуванню');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Опис');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', "Обов'язково");
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Максимальна кількість');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Якщо максимальна кількість більше ніж 1 тоді гостям запропонують вибрати кількість додатків з випадаючого списку.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Податки');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Податковий номер');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Опис податку');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Цей податок неможливо видалити.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Ставка');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Рахунки');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Не оплачено');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Оплачено');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Відмінено');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'В процесі');
jr_define('_JRPORTAL_INVOICES_USER', 'Користувач');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Статус');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Raised');
jr_define('_JRPORTAL_INVOICES_DUE', 'Due');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Підписка');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Outstanding total');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Recurring frequency');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Recurring day of month');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Код валюти');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Line items');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Назва');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Опис');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Початкова ціна');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'початкова кількість');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Початкова знижка');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Початковий підсумок');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Податковий номер');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Опис податку');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Ставка податку');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Перекрити стандартні налаштування шлюзу Jomres?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Показати мої рахунки');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Купони на знижку');
jr_define('_JRPORTAL_COUPONS_DESC', 'Коди знижок можуть бути створені та передані гостям як стимул для бронювання. Дійсні дати від і до позначають дати, на які можна здійснити бронювання, а не дати самого бронювання.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Код на знижку');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Дійсний від');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Дійсний до');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Сума знижки');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Знижка у %');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Лише для кімнати');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Якщо маєте купон на знижку, please enter it into the box and click the -Save coupon- link to save the coupon details against your booking.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Зберегти купон');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Coupon saved against booking');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Такий купон не знайдено');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Знижка по купону');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Бронювання зі знижкою. Купон/вартість знижки/налаштування купона :');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Вибрати мови');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Choose the language options to be shown in the language switch dropdown.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Показувати випадаючий список вибору мови?');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Шановний');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Дякуємо за реєстрацію');
jr_define('_JRPORTAL_NEWUSER_USERNAME', "Ваше ім'я користувача: ");
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Ваш пароль:');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Щоб побачити ваші броні, будь ласка, увійдіть до системи');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Купон збережено');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Купон видалено');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Логін');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Пароль');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Номер для повідомлень');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Наприклад для Великобританії виокристовуйте формат '447979123456'. Або залиште порожнім, тоді жодні повідомлення не надходитимуть.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "Ви не можете використовувати цю функцію на localhost, лише на 'живому' сервері.
<br/>
<br/>
Щоб використовувати шлюз Clickatell вам потрібен Clickatell-акаунт та як мінімум одне з'єднання (API sub-product instance). Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
Step 1 - register for a Clickatell account<br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
Step 2 - add a registered API connection (sub-product)<br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select -Manage my Products- from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to /index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Список номерів форми бронювання показує доступ з обмеженими можливостями');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Список номерів у формі бронювання показує максимальну кількість людей');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Зверніть увагу що ціни на кімнати є приблизними. Остаточна вартість буде порахована коли ви додасте відповідні кімнати і типи кімнат.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Пакети підписок');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Ім'я");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Опис');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Опубліковано');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Повна кількість');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Обмеження об'єкта");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Підписатися');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Використовувати функції управління підписками');
jr_define('_JOMRES_COM_NEWUSER', 'Створити нового користувача при бронюванні');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Створює новий акаунт при бронюванні невідомим користувачем.');
jr_define('_JOMRES_CLICKTOREGISTER', "Клікніть тут щоб зареєструвати свій об'єкт");
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Дякуємо з абронювання - нижче деталі нового користуквача');
jr_define('_JOMRES_LATLONG_DESC', "Використовуйте мишку для навігації по карті, перетягніть курсор на місце розташування вашого об'єкта.");
jr_define('_JOMRES_CONTROLPANEL', 'Панель іправління');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Показати рахунок');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Показати рахунки');
jr_define('_JOMRES_USER_LISTMYPROPERTY', "Додати мій об'єкт на сайт");
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'УВАГА :');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Вибачте, але цей ідентифікатор пакета не розпізнано.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Вибачте, ви вже підписалися на безкоштовний пакет, ви не можете підписатися на цей пакет знову.');
jr_define('_JOMRES_COM_YOURBUSINESS', "Деталі вашого об'єкту");
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', "Ім'я об'єкту");
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Свідоцтво ПДВ');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Номер будинку');
jr_define('_JOMRES_INVOICE_NUMBER', 'Рахунок No.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Виберіть дати, до яких потрібно застосувати чорне бронювання. Вибравши відповідні дати, натисніть кнопку -Застосувати-, щоб повторно перевірити наявність. <br/>
<br/>
Якщо у помешканні є одне або кілька бронювань за вибраний період, ви не зможете його забронювати, доки інші бронювання/чорні бронювання не будуть скасовані/заброньовані.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Вибачте, для цих дат чорнова бронь недоступна.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Можна закривати ці дати.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', "Ваш об'єкт налаштовано на тариф з особи за ніч, але ви не створили чи опублікували жодного типу гостя. Виправте цю прикру помилку.");
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'У вас не налаштований жодний тариф, ви не можете отримувати замовлення.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Режим редагування вкл.');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Режим редагування викл.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Сума депозиту зміннна?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', "Змінні депозити дозволяють вам визначити, чи хочете ви стягувати повну суму, якщо дата прибуття бронювання знаходиться протягом N днів з -сьогодні-. Установіть для цього параметра значення Так, щоб увімкнути функцію, і введіть кількість днів нижче, тому, наприклад, якщо день прибуття протягом 60 днів, то сума депозиту буде повною, інакше сума буде залежати від депозиту параметри, налаштовані вище.");
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Кількість днів в межах яких запитувати повну вартість як депозит.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Лист про підтвердження вже надіслано. Це вікно можна закривати.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Написати агенту');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Позначити оплаченим');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Рахунок позначено як оплачений');
jr_define('_JOMRES_APIKEY_REMAKE', 'Створити новий API ключ');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', "Ця інсталяція для одного об'єкта?");
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Якщо для цього параметра встановлено значення Так, то зовнішній вигляд Jomres для неавторизованих користувачів значно спрощується. Виклики за умовчанням до Джомреса з опції меню, замість того, щоб отримати список власності, просто переносять гостя у форму бронювання першої нерухомості в системі. Менеджери нерухомості також не побачать кнопки попереднього перегляду деталей власності або кнопки додавання нової властивості. Ідеально, якщо ви хочете перерахувати лише одну нерухомість та брати на неї бронювання. <br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Оплата залишку');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', "Зауважте, що ви використовуєте режим редагування з увімкненим режимом глобального редагування. Це добре, якщо ви розумієте, що означає режим глобального редагування, однак, якщо цього не зробите, ви можете створити собі проблеми. Якщо ви не впевнені, чи варто використовувати Jomres таким чином, будь ласка, перегляньте сторінку керівництва з режиму редагування для отримання додаткової інформації на цю тему.");
jr_define('_JOMRES_SUPPORTKEY', 'Ключ підтримки');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Номер ключа ліцензії вашої підтримки (також відомий як номер вашої ліцензії). Вам буде потрібно оновлена ліцензія, щоб мати можливість завантажувати плагіни для Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Персональна знижка');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', "Обмежити реєстрацію об'єктів однією країною?");
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Ви можете переконатися, що реєстрація нерухомості обмежена лише однією країною, встановивши цей параметр на Так і встановивши країну в наступному варіанті.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', "Всі об'єкти знаходяться в:");
jr_define('_JOMRES_JQUERYTHEME', 'Тема Jquery');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Виберіть тему jquery для вкладок деталей властивості.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', "Нам прикро це казати, але цей об'єкт більше не доступний.");
jr_define('_JOMRES_REVIEWS', 'Відгуки');
jr_define('_JOMRES_REVIEWS_TITLE', 'Заголовок відгука');
jr_define('_JOMRES_REVIEWS_DATE', 'Опубліковано');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', "Цей об'єкт поки не має відгуків.");
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Хочете першим залишити всі відгук?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Я погоджуюся з цим відгуком');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Я НЕ погоджуюся з цим відгуком');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Середній рейтинг:');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Всього голосів:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Додати новий відгук.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Увійдіть в систему щоб залишити відгук.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', "Що ви думаєте про цей об'єкт :");
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Цей відгук нам розповів :');
jr_define('_JOMRES_REVIEWS_PROS', 'За:');
jr_define('_JOMRES_REVIEWS_CONS', 'Проти:');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Подано:');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', "Ви вже один раз залишали відгук про цей об'єкт.");
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Ви не можете залишати відгуки на цьому сайті.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Показати відгуки');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'гості погоджуються з цим відгуком.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'гості не погоджуються з цим відгуком.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'гість погоджується з цим відгуком.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'гість не погоджується з цим відгуком.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Дякуємо що поділилися своєю думкою.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Дякуємо, але ви вже поділилися своєю думкою.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Прослідкуйте щоб усі поля були заповнені.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Підсумуте сій відгук у заголовку');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Будь ласка введіть більш детальний відгук');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Будь ласка введіть позитивні моменти вашого перебування');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Будь ласка введіть негативні моменти вашого перебування');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Оцініть гостинність персоналу');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Оцініть розташування');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Оцініть чистоту');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Оцініть комфорт проживання');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Чи хороше співвідношення ціна/якість');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Оцініть послуги');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Підсумок');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Ваш досвід в деталях');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Дякуємо за ваш відгук.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Дякуємо за ваш відгук. Наші модератори дуже швидко опубілують його.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Use Jomres review functionality?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Автоматично опубліковувати відгуки?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'If you set this to No you will need to manually publish reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Тестовий режим для відгуків?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Зазвичай менеджери нерухомості не можуть переглядати майнові властивості. З увімкненим режимом тестування вони можуть. Природно, це не ідеально у виробничому середовищі.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', "Це список усіх властивостей. Щоб побачити відгуки про власність, натисніть на цю властивість. Звідти ви зможете опублікувати або видалити відгук.");
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Кількість не опублікованих відгуків');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Всього відгуків');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Опублікувати/скасувати публікацію огляду');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Видалити відгук');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Повідомити про відгук');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Переглянути відгуки');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Поскаржитися на відгук');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'відправити');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Скаргу подав');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Звіти публікують користувачі, які можуть не погодитися зі змістом відгуку. Єдиний спосіб видалити звіт - це видалити відгук.');
jr_define('_JOMRES_REVIEWS_RATING', 'Ratings (1 = дуже погано 10 = відмінно)');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Гостинність');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Розташування');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Чистота');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Кімнати');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Ціна/якість');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Сервіси');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Оцінили :');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Приховати відгуки');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', "Показати форму бронювання в деталях об'єкта?");
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Встановіть для цього значення Так, щоб відобразити форму бронювання на сторінці відомостей про власність. Якщо ви встановите для цього значення Ні, посилання з\'явиться на сторінці деталей власності замість того, щоб вказати на форму бронювання.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Додатки включено?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Встановлені ціни включено? Якщо ваші ціни включають податок, виберіть Так. Якщо ні, виберіть Ні');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Додатковий податок:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Поля дня тижня дозволяють встановити тариф для певного дня тижня. Після натискання кнопки дня тижня для всіх днів тижня буде встановлено таку ставку.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Вибір дати та введення курсу дозволяють встановити одну ціну для певного діапазону дат. Виберіть дату початку та завершення, введіть ціну та натисніть кнопку Встановити тарифи.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Початок');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Кінець');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Ціна');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Встановити ціни');
jr_define('_JOMRES_PARTNERS_TITLE', 'Партнери');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Кімната');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'гість/гостей.');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Ось як ми призначаємо номери ваших гостей у їх номерах. Якщо ви хочете змінити цей розподіл, вам потрібно буде зв\'язатися з готелем після оформлення бронювання. У разі зміни ваших завдань може стягуватися додаткова плата. ');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Зверніть увагу, що ваша власність ще не опублікована, тільки ви можете побачити її, відвідувачі сайту її не побачать');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Звичайний порядок пошукової видачі');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Змінити цей параметр, щоб змінити порядок подання результатів пошуку за замовчуванням.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Показати спадний список порядку пошуку');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Стиль показу переліку кімнат');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'У формі бронювання, використовуючи стиль списку номерів -classic-, ви пропонуєте гостям окремі номери. З огляду на тип номеру гості обирають кількість номерів типу X (наприклад, 2 двомісних) ');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Класичний');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Типи номерів');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Календарний тиждень починається в неділю чи понеділок');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Відгук залишають лише гості?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Встановіть для цього значення Так, якщо ви хочете обмежити відгуки лише тими користувачами, які вже були гостями у цій властивості.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'За кімнату');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Гостей на кімнату :');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Гостей за бронювання :');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Кількість кімнат');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Січень');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Лютий');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Березень');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Квітень');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Травень');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Червень');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Липень');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Серпень');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Вересень');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Жовтень');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Листопад');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Грудень');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Встановіть для цього значення Так, щоб зменшити кількість параметрів, доступних для менеджерів нерухомості в розділі Загальна конфігурація. Це корисно, якщо ви не хочете, щоб менеджери власності бавились із занадто великою кількістю налаштувань, замість цього ви можете редагувати jomres_config .php для визначення параметрів властивостей за замовчуванням. ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Будь ласка, виберіть варіант для вашого бронювання');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> Якщо для цього параметра встановлено значення Так, то менеджери зможуть побачити редактор HTML, наданий CMS, і ввести HTML в опис. Це потенційний ризик для безпеки, оскільки існує можливість введення небажаного HTML або Javascript. Крім того, якщо вони вводять погано відформатований HTML, дизайн сторінки може бути скомпрометований. Краще залишити цей параметр у положення \"Ні\", де це можливо. </p> <p> Якщо всі менеджери є надійними користувачами (наприклад, для себе), тоді ви можете залишити для нього значення Так, і ви зміните різні теги HTML, які їм дозволено вводити на вкладці Фільтрація вхідних даних у Конфігурації сайту. </p> <p> Якщо, навпаки, ви повторне використання Jomres як порталу, на якому ви пропонуєте користувачам додавати та адмініструвати свої власні властивості, тоді це не ідеальна конфігурація. Замість цього ви повинні залишити цей параметр встановленим на \"Ні\". Якщо для нього встановлено значення \"Ні\", менеджери замість цього побачать редактор розмітки можна використовувати для введення базового форматування, яке повинно буде достатньо для більшості користувачів. </p> ");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'На весь екран');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Звичайний перегляд');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Знижка партнера');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Шукати користувача');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Введіть кілька символів для пошуку користувача. <br/> Коли ви обираєте користувача, ви автоматично додаєте його як партнера, і ви перейдете на наступну сторінку, де ви можете призначити властивості та знижки для користувача.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Існуючі партнери');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Choose a partner to be taken to the partner administration page.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Партнер :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Знайти об'єкт");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Введіть кілька символів з імені власності та виберіть властивість. <br/> Коли ви вибираєте властивість, ви додаєте її до портфоліо партнера, однак вони ще не користуватимуться знижками, вам потрібно встановити їх самостійно.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Поточні об'єкти");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Натисніть на властивість, щоб змінити налаштування знижки партнера для цієї властивості.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Цей обліковий запис призупинено, наразі неможливо адмініструвати своїх власників за допомогою цього облікового запису.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Акаунт призупинено');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Акаунт відновлено');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Зверніть увагу, що ваш обліковий запис менеджера нерухомості призупинено. Ви не зможете виконувати будь -які функції управління майном, поки обліковий запис не буде відновлено.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Зверніть увагу, що ваш обліковий запис менеджера нерухомості зараз активний. Ви можете продовжувати виконувати будь -які функції управління нерухомістю. Увійдіть у свій обліковий запис і переконайтеся, що відповідні спеціалісти опубліковані. Дякую.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Видалити вибране');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Архів інформації про бронбвання');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Архів даних бронювання - це необроблений дамп інформації про бронювання, отриманий після натискання кнопки підтвердження бронювання. Наведіть курсор на дату, щоб побачити дамп необроблених даних. Інформація зберігається у таблиці XXX__jomres_booking_data_archive.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Редагувати обліковий запис');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Щоб додати користувача як менеджера власності, спочатку введіть перші кілька символів його імені користувача у поле вище. Коли буде знайдено правильного користувача, натисніть це ім\'я, щоб вибрати його, а потім виберіть, яку властивість ( s) вони повинні бути менеджером. Користувач <em> має бути вже користувачем CMS </em> ');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Існуючі менеджери');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Гостей');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Show the search by guest number dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Зірковість');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Show the Stars dropdown');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Гостей');
jr_define('_JOMRES_SEARCH_STARS', 'Зірковість');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "Кількість об'єктів");
jr_define('_JOMRES_CONFIG_JQUERY', 'Завантажити бібліотеку Jomres jQuery?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Ви можете встановити це значення NO, якщо у вас є шаблон, який використовує jquery. Це МОЖЕ вирішити проблеми конфлікту jQuery у деяких шаблонах, але не у всіх.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', "Увімкнення цієї опції дозволяє побачити перемикач мов у повноекранному режимі у фронтенді.");
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Ескізи створюються автоматично для завантажених зображень.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Максимальна ширина малих ескізів (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Невеликі ескізи використовуються у списку властивостей, тоді як ескізи середнього розміру використовуються у заголовку властивості.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Максимальна висота невеликих ескізів (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Середня ескізи максимальна ширина (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Середня ескізи максимальна висота (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Переклад міток');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Використовувати комісійну модель?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Установіть для цього значення Так, щоб відобразити рахунки -фактури менеджера, які були нараховані.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Бронювання менеджерів створюють рахунки -комісії?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Якщо менеджер здійснює бронювання, чи це також створює позицію рахунку -фактури комісії?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Автоматично призупинити роботу менеджерів, де рахунки -фактури позначені як очікуючі?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Поріг автоматичного призупинення');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Ця поріг - це кількість днів, протягом яких менеджер повинен сплатити рахунок -фактуру, перш ніж вони будуть призупинені, а їх властивості не опубліковані.');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Мовний контекст');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', "Використовуйте цей параметр, щоб змінити мовний контекст сайту. Ця функція дозволяє Jomres використовувати ярлики, які підходять для вашого поточного фокусу, тому, якщо ваш фокус - це посередництво яхт, то зміна контексту дозволить Jomres представити мітки з іншого мовного файлу. Наприклад, якщо ви встановите контекст на -Yacht Brokerage-, то Jomres спочатку знайде поточну мову, а потім здійснить пошук у каталозі /jomres /languages ​​для підкаталогу -yachtbrokerage-. Якщо файл існує для поточної мови, тоді цей файл буде використано. Якщо ні, то Jomres буде шукати файл англійською мовою в цьому ж каталозі. Якщо його не вдається знайти, Jomres буде використовувати мовний файл для вибраної мови в каталог /jomres /languages. ");
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Розширена конфігурація сайту');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', "Встановіть для цього параметра значення Так, якщо ви хочете використовувати розширені параметри конфігурації сайту. Якщо ви тільки починаєте з Jomres, то радимо залишити це значення Ні, оскільки встановлення за умовчанням достатньо Щоб розпочати, натомість вам слід додати Jomres до головного меню та увійти до інтерфейсу як -admin- та розпочати налаштування власності. Зверніть увагу, що багато розширених опцій можуть бути недоступними, якщо ви цього не зробите. мають встановлені відповідні плагіни. Користувачі безкоштовної основної системи не зможуть у повній мірі скористатися перевагами функцій, які вони вмикають. ");
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Завантажити бібліотеку інтерфейсу jQuery Jomres?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'За ціною (від дорожчих)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'За ціною (від дешевших)');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Підсумок та оцінки вартості мають визначатись за ніч/за тиждень/за місяць?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'За ніч');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'За тиждень');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'За місяць');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'За гостя');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'тиждень (и) о');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'місяць (и) о');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Як повинен працювати варіант пошуку номерів людей?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', "Впливає на всі модулі пошуку. При використанні функції пошуку номерів гостей, чи має функція пошуку шукати властивості, чиї тарифи будуть підтримувати номери гостей вгору та дорівнювати вибраному номеру, точно дорівнювати вибраному чи вибраному номеру і більший? ");
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Будь ласка, зачекайте, ваше замовлення обробляється, і вас буде переспрямовано на веб -сайт Paypal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Якщо ви не будете автоматично перенаправлені на Paypal протягом 5 секунд ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Клікніть тут');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Бронь дійсна від');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Бронь дійсна до');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', "Ім'я гостя");
jr_define('_JRPORTAL_COUPONS_DESC_478', "Коди знижок можуть бути створені та передані гостям як стимул для бронювання. <br/>
Дійсні дати та дати стосуються дат, на які можна здійснити бронювання, тоді як бронювання, дійсне з/до дат, відноситься до дат, які бронювання повинно охоплювати, щоб купон був дійсним. Якщо бронювання виходить за межі зазначеного періоду, до днів поза цим періодом застосовуватимуться звичайні тарифи. <br/>
Якщо ви хочете, щоб бронювання було доступне одному конкретному гостю, виберіть ім’я цього гостя у спадному меню, щоб обмежити купон лише цим гостем.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'З вашим купоном ця бронь коштуватиме не');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'а');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Встановіть для цього значення Ні, щоб вимкнути завантаження файлів JavaScript та CSS інтерфейсу Jquery.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Завантажити бібліотеку CSS інтерфейсу Jomres jQuery?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Встановіть для цього значення Ні, щоб вимкнути лише файл CSS jQuery UI.');
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Всього, включно з податками');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', "Скасувати публікацію об'єкта");
jr_define('_JOMRES_CONVERSION_TITLE', 'Використовувати модель конверсії');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Використовуйте функцію онлайн -конвертації Jomres. Це запропонує користувачам фронтенду перехід до списку конверсій, де вони зможуть вибрати валюту, у якій вони хочуть бачити ціни. Вихід ціни коригується, щоб відображати конвертовану ціну. ціна, за якою слідує \"рідна\" ціна нерухомості в дужках. ");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'Ми доклали максимум зусиль, щоб отримати максимально точні та своєчасні обмінні курси. Наша функція конвертації валют в Інтернеті є послугою, призначеною лише для інформаційних цілей, і не призначена для надання точних цифр. Відповідно, ми не гарантуємо точність обмінних курсів. Використовуючи цю функцію, Ви вважаєте, що погодилися з тим, що будь -яка залежність або використання функції конвертації курсу здійснюється виключно на Ваш власний ризик. ');
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Обмін валют/валютні коди');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'Ключ API виявлення IP');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', "Для автоматичного встановлення випадаючого коду валюти Jomres може використовувати безкоштовну службу під назвою IPinfoDB для виявлення країни відвідувача, проте спочатку потрібно зареєструватися для ключа API на IPinfoDB.  https://www.ipinfodb.com/login");
jr_define('_JOMRES_DEBUGGING_TAB', 'Налагодження');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Проживання без податів');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Проживання з податками');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'податок з кімнати:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Відкрити форму бронювання');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', "Повернутися до деталей об'єкту");
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Автоматично вибрано?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Залишок (після сплати депозиту)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Фільтруйте ресурси на основі їх особливостей.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Останні бронювання');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'секунда');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'хвилина');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'година');
jr_define('_JOMRES_DATEPERIOD_DAY', 'день');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'тиждень');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'місяць');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'рік');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'декада');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'тому');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'від зараз');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Бронювати цілий день?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'За замовчуванням система резервує ресурси до ночі, тому бронювання з першого січня 2015 року по 2 січня 2015 року охоплює лише одну ніч. Однак якщо ви встановите для цього параметра значення Так, тоді бронювання буде поширюватися на цілі дні, тому бронювання в ці дні охоплюватиме обидва дні, а з клієнта буде виставлено рахунок за два дні.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'За день');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'з особи за день');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Самовивіз');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Повернення');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'днів (ів)');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Невірна дата повернення');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Надто короктий термін. Ось скільки днів має бути між поселенням і виселенням:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Мінімальний інтервал між поселенням і виселенням');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', "Мінімальний інтервал у формі бронювання між датами самовивезення та висадки. Інтервал 1 означає, що дати здачі та повернення можна встановити на один день, однак це все ще залежить від мінімального інтервал, який автоматично розраховується механізмом бронювання, оскільки він перевіряє тарифи, дійсні протягом періоду бронювання. ");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Підсумок та оцінки вартості мають визначатись за день/за тиждень/за місяць?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'За день');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Днів до поселення');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Мінімальна кількість днів, яка повинна пройти, починаючи з -todne-, до дати прийому.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', "Встановіть для цього значення так, якщо ви хочете обмежити попереднє бронювання (використовуйте наступне поле, щоб встановити ліміт у днях). Якщо ви встановите це значення так, якщо користувач намагається забронювати більше n заздалегідь, після чого дата їхнього прийому буде відновлена до сьогоднішньої дати ");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Показувати форму вводу дати виселення?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Встановіть для цього значення Ні, якщо не хочете показувати поле введення дати повернення. Використовуйте це лише якщо ви знаєте, що робите, оскільки дата повернення у бронюванні завжди буде встановлена на день після дати здачі. ");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', "Якщо ви встановите це значення Так, то бронювання буде прийматись на певний період. Якщо для цього встановлено значення Ні, переконайтеся, що для визначеного дня прийому не встановлено значення Так (якщо ви не хочете, щоб змусити людей забирати в певний день тижня) інакше ви не отримаєте багато посилань у календарі доступності. ");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Попередньо визначений день прийому');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Лише для сайтів, які пропонують бронювання на фіксований період. Виберіть день тижня, в який необхідно здійснювати пікап.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Фіксована дата виселення');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Фіксована дата поселення повторюється:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Коли вибрано фіксовані дати прийому, кількість дат, які можна відобразити у випадаючому списку дат. Зверніть увагу, що список z не включатиме дати, якщо бронювання неможливе через попереднє бронювання, і що список насправді буде вдвічі довшим за вибраний вами номер, оскільки він матиме однакову кількість історичних дат (за наявності). ');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'З особи за день');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Виберіть Так, якщо ви хочете стягувати плату за особу за день. Якщо ні, то витрати будуть розраховуватись для кожного ресурсу на день');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', "Змінні депозити дозволяють вам визначити, чи хочете ви стягувати повну суму, якщо дата завантаження бронювання знаходиться протягом N днів з -todne-. Введіть цей параметр на Так, щоб увімкнути функцію, і введіть кількість днів нижче, тому, наприклад, якщо день отримання протягом 60 днів, то сума депозиту буде повною сумою, інакше сума буде залежати від опцій депозиту, налаштованих вище. ");
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', "Більшість компаній перераховують ціни на ресурси на основі кількості ресурсів необхідного типу, які є на певну дату. Це дозволяє їм пропонувати знижки на ресурс/тип бізнесу, який не зайнятий під час даного періоду з метою залучення бізнесу, який інакше можна було б пропустити. <br/> Увімкнення та налаштування цього плагіна дозволяє пропонувати ціни, що регулюються, залежно від кількості ресурсів вибраного типу, які є у вашому бізнесі на певний день. < br/> Поріг днів визначає кількість днів, протягом яких має бути дата збору, перш ніж ціна ресурсу буде скоригована цією функцією, тоді параметри відсотків дозволяють налаштувати відсоток ресурсів, які можуть бути доступні до застосування певної знижки. Зауважте, однак, якщо заброньовано кілька ресурсів, поточний рівень знижки буде застосовано до всіх ресурсів і не зменшиться у міру відбору додаткових ресурсів. ");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Поріг (днів від сьогодні до поселення)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Поселення в процесі');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Поселення сьогодні');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Поселили');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Виселення сьогодні');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Виселення відкладається');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Не заселився');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Дні');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Позначити як поселене.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Позначити як завершене.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Позначити як поселене');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Позначити як виселене');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Ціна за день:');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Днів:');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Переглянути суму за проживання');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Зберегти нову суму');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Відправляти поштою новим користувачам їхні дані для входу в систему?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Якщо для параметра Створити нового користувача встановлено значення Так, ви можете встановити цей параметр на Ні, щоб переконатися, що вони не надсилають електронною поштою свої дані для входу після створення користувача. Це може бути корисним, якщо ви, наприклад, автоматично додаєте нових користувачів до списку розсилки і не хочете, щоб користувачі фактично входили в систему.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Чи показувати додатково підсумок по податках у формі бронювання?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Поріг відміни броні');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Зареєстровані користувачі можуть відміняти власнів броні. Визначте поріг у днях, коли бронювання не може бути відмінене за стільки то днів до прибуття.');
jr_define('_JOMRES_EDIT_PROFILE', 'Редагувати профіль');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', "Зв'язок з типом об'єкту");
jr_define('_JOMRES_IMAGE', 'Фото');
jr_define('_JOMRES_CRATES_CLICKINITIAL', "Натисніть літеру, щоб показати всі компанії з цим першим символом. Після того, як у вас є список властивостей, ви можете призначити ставки комісійних для цих властивостей, або натисніть на їх значок -redit-, щоб переглянути статистику компанії. ");
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Редагувати ставку податку');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Редагувати особливі поля');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'License server username');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Версія модуля :');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Найновіша версія');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Сповіщення: доступна нова версія Jomres, радимо оновити її якнайшвидше.');
jr_define('_JOMRES_PRODUCT_INFORMATION', "Ласкаво просимо в Jomres, ми сподіваємось, що вам сподобається користуватися улюбленою системою бронювання Joomla. Якщо ви хочете придбати ліцензію Jomres Starter, Business або Enterprise, відвідайте наш веб -сайт для отримання інформації про те, як ви можете оновити.") ;
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Ця система ідеально підходить для будь -якого сценарію, будь то проста форма бронювання для однієї власності, аж до сайту з кількома користувачами різними мовами, з різними властивостями. Див. розділ у меню, включаючи сторінку -Початок роботи, яка проведе вас через ваші перші кроки. ');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Активний об'єкт");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Альтернативні налаштування SMTP');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Встановіть для цього параметра значення Так, щоб використовувати ці альтернативні налаштування SMTP. Здається, що все більша кількість веб-хостів блокує функціональність пошти PHP, тож ви можете перевернути налаштування пошти, які Jomres приймає від вашого хоста. CMS (зазвичай Joomla) та використовуйте налаштування за власним вибором. ');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Альтернативний хост');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Змінити це на поштовий сервер smtp');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Альтернативний порт');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Змініть це на порт smtp');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Альтернативний протокол');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Залежно від налаштувань вашого сервера smtp вам потрібно залишити це поле пустим або ввести ssl або tls. Запитайте у свого постачальника SMTP, якщо ви цього не знаєте.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Використовувати автентифікацію');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Якщо ваш SMTP -сервер вимагає від клієнтів входу, встановіть для цього значення Так. Ім\'я користувача та пароль будуть використані.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Альтернативне ім\'я користувача');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Альтернативний пароль');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Швидкий перегляд');
jr_define('_JOMRES_MENU_SHOW', 'Показати');
jr_define('_JOMRES_MENU_HIDE', 'Приховати');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'По замовчуванню');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Будь-хто');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Зареєстровані');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'менеджер');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Супер менеджер');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Ніхто');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Меню управління доступом');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'Ця функція дозволяє вам контролювати, хто зможе бачити плагін у головному меню. Зазвичай параметри користувача 00009 можуть переглядати або/або незареєстровані відвідувачі сайту, 00010 опції зазвичай відносяться до активностей типу прийому, які використовуються щодня, тоді як параметри 00011 використовуються для налаштування та налаштування властивості, але доступ до них є рідше.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Рецепціоніст');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Повний контроль доступу');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Встановіть для цього параметра Так, щоб увімкнути функцію повного контролю доступу, а потім перейдіть до параметра Контроль доступу в розділі Обслуговування системи, щоб налаштувати засоби контролю доступу.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Зверніть увагу, однак, ці налаштування не контролюють базові сценарії, до яких вони підключаються, тому, наприклад, якщо ви встановите 00009user_option_03_search на Менеджер, користувач, який знає Jomres, все ще може викликати j06000search.class.php введіть http://www.domain.com/index.php?option=com_jomres&task=search в адресний рядок свого веб -переглядача. Це навмисно, оскільки це управління доступом до меню просто контролює, що можна побачити в головному меню Джомреса. Якщо вам потрібно посиліть елементи керування, а потім установіть для параметра Конфігурація сайту -> Повний контроль доступу значення Так і знову перегляньте опцію Контроль доступу до меню. ");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Повний контроль доступу');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "Ця функція призначена лише для просунутих користувачів. Якщо ви не знаєте, для чого вона потрібна, і не маєте конкретних причин для її використання, поверніться до Конфігурації сайту та встановіть для параметра Повний контроль доступу значення\" Ні. <br/>
Ця функція дозволяє контролювати, хто має доступ до яких мінікомпонентів (за деякими винятками, які жорстко кодуються в системі). Якщо для рівня доступу поруч із назвою сценарію встановлено значення \"За замовчуванням\", тоді для параметра Повний контроль доступу встановлено значення Так, будь -хто може отримати доступ до сценаріїв, до яких вони не мають доступу, тому, якщо ви маєте намір використовувати цю функцію, ви повинні встановити контроль доступу рівень для кожного мінікомпонента Jomres, перерахованого тут. Якщо ви не знаєте, що роблять ці мінікомпоненти, то ми настійно радимо вам взагалі не використовувати цю функцію. <br/>
У Джомресі рівні доступу йдуть за пірамідою, тому суперменеджери нерухомості більші за менеджерів. Коротше кажучи, Суперменеджер> Менеджер> Ресепшн> Зареєстрований> Незареєстрований. Тож, якщо зареєстрований користувач має доступ до мінікомпонента, також мають його рецепціонери, менеджери та суперменеджери. <br/>
Зауважте, що ви не можете керувати мінікомпонентами області адміністратора. Будь -яка особа в області адміністратора вважається надійним користувачем, оскільки не має блокувати доступ до будь -якого сценарію (особливо цього). ");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Увага! У вас увімкнено повний контроль доступу, однак ми підрахували налаштування контролю доступу та порівняли їх з кількістю мінікомпонентів, які слід контролювати, і ці два не збігаються, тому у вас можуть бути деякі скрипти, які не контролюються. Це може бути проблемою безпеки, і вам пропонується негайно вирішити цю проблему, відвідавши функцію контролю доступу та перевіривши, чи застосовано відповідні рівні. ');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Користувачі з правами адміна для цього об'єкту");
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Your email address');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Модель');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Параметри');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Примусово');
jr_define('_JOMRES_METATITLE', 'Meta title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', "Додаємо ваш об'єкт : Крок 2 з 2");
jr_define('_JOMRES_CART_TITLE', 'Мої потенційні бронювання');
jr_define('_JOMRES_CART_INFO', 'Зверніть увагу, ці броні ще не збережені. Якщо ви вийдете з системи або сесія вичерпається, ці броні зникнуть. Підтверджуйте ваші броні!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Підтвердити бронь(і)');
jr_define('_JOMRES_CART_OR', 'або');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Зберегти до кращих часів');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'У вас поки немає збережених бронювань.');
jr_define('_JOMRES_CART_VIEWCART', 'Переглянути корзину');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');
jr_define('_JOMRES_SYSTEM_EMAILS', 'З якої адреси відправляти емейли?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Перегляд списком');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Перегляд фото');
jr_define('_JOMRES_COMPARE', 'Порівняти');
jr_define('_JOMRES_REMOVE', 'Видалити');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'До результатів пошуку');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Додати до списку');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Видалити зі списку');
jr_define('_JOMRES_VIEWSHORTLIST', 'Переглянути список');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Важливо: ПОлітика використання сookie');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Ми використовуємо cookies щоб цей сайт був релевантний для вас і добре працював.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Дізнатися більше...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU legislation requires that all websites clearly specify if cookies are being used and their purpose.');
jr_define('_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a -cookie- which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6', 'Якщо так, тоді я приймаю умови.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Депозит дорівнює вартості першої ночі?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', "Prices are calculated on a per night basis. Do you want the deposit to be one night's charge? If so, you can ignore the following options.");
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'Ви нічого ще не додали до свого списку.');
jr_define('_JOMRES_SAFEMODE', 'Enable safe mode?');
jr_define('_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'Далі');
jr_define('COMMON_CANCEL', 'Відміна');
jr_define('COMMON_SUBMIT', 'Подати');
jr_define('COMMON_SAVE', 'Зберегти');
jr_define('COMMON_DELETE', 'Видалити');
jr_define('COMMON_RETURN', 'Повернутися');
jr_define('COMMON_CLOSE', 'Закрити');
jr_define('COMMON_BACK', 'Назад');
jr_define('COMMON_HOME', 'Додому');
jr_define('COMMON_NEW', 'Новий');
jr_define('COMMON_SEND', 'Відправити');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha використовується для того, щоб переконатися, що клієнт, що використовує веб -форми, є людиною, і використовується для запобігання тому, щоб менеджери майна не були спамовані роботами в Інтернеті. Щоб скористатися формою Зв\'яжіться з нами в Jomres, ви потрібно буде зареєструватися на домашній сторінці Google reCaptcha та налаштувати ваш домен на отримання ваших відкритих та приватних ключів. Коли ви отримаєте ці ключі, будь ласка, введіть їх нижче. Послуга reCapcha - це безкоштовна послуга, надана Google. ');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Публічний ключ');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Приватний ключ');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Час очікування файлу блокування');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Щоб запобігти небезпеці гостей подвійного бронювання номерів, Джомрес використовує файл блокування, щоб запобігти додаванню кімнати до списку доступних номерів у формі бронювання, якщо хтось інший вже додав кімнату до їхніх номерів на ті ж дати . За замовчуванням цей блокування вичерпається через 3600 секунд або одну годину. Ви можете змінити час, необхідний для завершення цього блокування, змінивши цей показник. ');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Увімкнути шаблони та функціональні можливості Jomres 'Bootstrap?");
jr_define('COMMON_ACTION', 'Action');
jr_define('COMMON_VIEW', 'Перегляд');
jr_define('BACKTOTOP', 'Догори');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Слабкий');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Сильний');
jr_define('_JOMRES_INPUTFILTERING', 'Вхідна фільтрація');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Вхідний рівень фільтрації');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Більшість даних, що вводяться в систему, дезінфікується шляхом видалення спочатку будь -яких тегів html, а потім за допомогою функцій фільтрації змінних PHP, щоб зробити дані безпечними перед їх введенням у базу даних. Ви можете дозволити певні введення (наприклад, текстові введення на сторінці подробиць властивостей) для включення HTML. Існує два рівні фільтрації, які можна використовувати для фільтрації цього введення, або Слабкий, або Сильний. Використовувати налаштування Слабкий слід лише тоді, коли користувачі дані довіряють вам самим, наприклад, колегам -системним адміністраторам, інакше залиште для них значення Strong. Якщо встановлено значення strong (рекомендовано), ви все ще можете вказати, які теги дозволити, відредагувавши наступне налаштування \"Дозволені теги для очищення HTML\". ") ;
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Дозволені теги введення');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Ви можете редагувати теги, які дозволить очищувач html через свою систему фільтрації. За замовчуванням \" p, b, strong, a [href], i \"(тобто абзац, жирний, сильний, посилання та курсив) ). Для отримання додаткової інформації про дозволені теги, будь ласка, ознайомтеся з документацією до очищувача HTML на веб -сайті htmlpurifier.org. Хоча ви можете змінити це налаштування, радимо залишити його встановленим за умовчанням. ");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Дозволені входи');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Ви можете визначити, яка форма входу дозволить HTML редагуючи цей параметр, будь-який вхід додані в цей список буде аналізуватися через HTML очищувача замість того, щоб все HTML роздягли за замовчуванням: property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers . Додайте більше вхідних даних, додавши їх від імен, розділених пробілом. ");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Деталі об1єкту у вкладках?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Встановіть цей параметр для відображення деталей властивостей у вкладках. Встановіть значення "ні", щоб відображати їх без вкладок.');
jr_define('COMMON_PRINT', 'Версія для друку');
jr_define('COMMON_EDIT', 'Редагувати');
jr_define('COMMON_COPY', 'Копіювати');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 за замовчуванням містить фреймворк Bootstrap Twitter, а Jomres має шаблони та функціональні можливості, які використовуватимуть ці шаблони. За замовчуванням, якщо ви використовуєте Jomres на Joomla 3, ці перемикачі встановлено на Так, але ви можете встановити їх на Ні, якщо так потрібно (не рекомендується). Якщо ви використовуєте версію Joomla, нижчу за Joomla 3, ви все одно можете вибрати використання шаблонів і функцій Jomres Bootstrap, проте за замовчуванням ці параметри встановлено на Ні");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Використовувати шаблони завантаження Jomres у фронтенді?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Ось схожі варіанти для вас.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Автоматично визначати країну гостя?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Система спробує автоматично визначити країну гостя, якщо він раніше не бронював. Ви можете встановити цей параметр на Ні та визначити країну, яку ви б хотіли відображати у формі бронювання, у наступний варіант. ");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Про Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'допомога');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'З чого почати');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Керування доступом');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'developer tools');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'мови');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'Генерація прибутку');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'Структура сайту');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Мій акаунт (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'функціонал порталу');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Менеджер плагінів');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'інтеграція');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'звіти/статистика');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Оновлення');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'способи оплати');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Тариф за замовчуванням');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Це стосується лише нових тарифів');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Скільки років показувати');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'в процесі редагування тарифу');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'рахунки');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'Доступ для користувачів');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Login');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Logout');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'Пошук');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'Головна панель');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'резерв');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'налаштування');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Змінити країну');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'id країни');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Код країни');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Назва країни');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Змінити регіон');
jr_define('_JOMRES_EDIT_REGION_ID', 'id регіону');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Код країни');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Назва регіону');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Перелік країн');
jr_define('_JOMRES_COM_LISTREGIONS', 'Перелік регіонів');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Експорт визначень');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Ця функція дозволяє експортувати переклади, створені за допомогою функції перекладу мови. Вона створить текстове поле з усіма даними, необхідними для створення нового мовного файлу, все, що вам потрібно зробити скопіювати та вставити цей вивід у новий мовний файл, який можна розмістити на новому сервері на основі Jomres, або якщо ви хочете внести свій внесок у спільноту Jomres. ');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Перекласти локалі');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Перекласти рядки файлів lang');
jr_define('_JOMRES_COM_NOTAMANAGER', "Помилка. Користувач, на якому ви ввійшли, не є суперменеджером у Jomres, ви не зможете використовувати цю функцію, доки ви не скористаєтесь функцією \"Менеджери власності\", щоб стати ОБОМ менеджером і суперменеджер. Це функція безпеки. ");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Макет списку властивостей за замовчуванням');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Мінімальне бронювання');
jr_define('_JOMRES_NIGHTSFOR', 'ночей за');
jr_define('_JOMRES_AGENT', 'Агент');
jr_define('_JOMRES_AGENT_DETAILS', 'Інформація про агента');
jr_define('_JOMRES_AGENT_LISTINGS', "Об'єкти агента");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', "Автоматично погджувати нові об'єкти");
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Підтвердження');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', "Цей об'єкт ще не одобрений адміністратором. Як тільки об'єкт буде одобрено ви зможете його опублікувати.");
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', "Вибачте, ви не можете опублікувати цей об'єкт оскільки його ще не одобив адміністратор.");
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', "Новий об'єкт очікує схвалення");
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', "Новий об'єкт очікує схвалення. Клікніть на посилання щоб побачити який саме :");
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', "Ваш об'єкт одобрено для публікації");
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Чудові новини. Ваш об'єкт одобрено. Кліктіть тут щоб перейти до панелі керування об'єктомl :");
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Назви регіонів можна перекласти');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Якщо ви не користуєтесь дуже швидким сервером, радимо залишити цей параметр на \"Ні\". Через велику кількість назв регіонів переклад імені регіону займає багато пам'яті, що може уповільнити результати пошуку вниз. ");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Гість заброньований.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Вибачте, ця адреса електронної пошти вже використовується. Якщо це ваша адреса електронної пошти, переконайтеся, що ви увійшли в систему, перш ніж здійснювати бронювання.');
jr_define('JOMRES_TAPTOCALL', 'Клікніть щоб подзвонити');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Новий відгук на');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Новий відгук залишили для');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Нова скарга');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Нова скарга на відгук');
jr_define('JOMRES_SUPERIOR', 'Супер-клас');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Кінцева вартість (без податків) :');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Кінцева вартість (з податками) :');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Всього податків :');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Введіть два слова:');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Введіть що почули:');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Повторно відтворити аудіо');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Завантажити уривок у форматі MP3');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Візуальний режим');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Аудіо режим');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Оновити');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Допомога');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Вибачте, щось тут не те. Спробуйте ще раз.');
jr_define('JOMRES_GOOGLE_MAPS', 'Google map options');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Показувати погоду?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Цельсія');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Фаренгейта');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Використовувати транзитний рівень?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Увімкнути точки інтересу Gmap (включаючи, можливо, ваших конкурентів)?');
jr_define('_JOMRES_METAKEYWORDS', 'Мета ключові слова');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Відскануйте цей код щоб отримати поради як до нас дістатися.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Введений вами номер ПДВ виглядає неправильним. У вас повинно бути щось на зразок цього: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Недійсний номер ПДВ. Перевірте дійсність свого номера ПДВ у веб -службі перевірки номерів ПДВ Європи (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Вітаємо. Нам вдалося підтвердити ваш номер ПДВ.');
jr_define('_JOMRES_TAX_RULES_LIST', 'Показати правила оподаткування');
jr_define('_JOMRES_TAX_RULE', 'Правила оподаткування');
jr_define('_JOMRES_TAX_RULE_INFO', 'Податкові правила використовуються для встановлення різних податкових правил для різних регіонів. Ці податкові правила впливають на особу, яка здійснює бронювання, якщо вона зареєстрована, увійшла в систему та відредагувала свій обліковий запис за допомогою -редагувати сторінку мого облікового запису. . Метою цих правил є розміщення брокерів у тих районах, які не звільняються від ПДВ. Ви можете виявити, що вам не потрібно створювати багато правил, якщо вони взагалі існують. ');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Імпортувати ставки даних');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'Ми можемо імпортувати для вас ставки податку для ЄС, якщо бажаєте. Зауважте, що якщо ви користуєтесь цією функцією, усі ваші існуючі ставки податків будуть видалені.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Редагувати ставки податку');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', "ПДВ-номер для цього об'єкта.");
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', "Введіть будь ласка ПДВ-номер для цього об'єкта.");
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'Номер ПДВ підтверджено.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Номер ПДВ не перевірено.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Введені тут відомості про компанію будуть використовуватися у рахунках -фактурах та підписках.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Ви, здається, ще не заповнили дані свого облікового запису. Щоб перерахувати вашу власність на сайті, нам потрібно заповнити дані вашого облікового запису, перш ніж ми зможемо йти далі.");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Працюємо чи В розробці?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Якщо ви встановите цей параметр на Розробка, ми ввімкнемо повідомлення про помилки. Якщо це активний сервер, ми рекомендуємо встановити цей параметр на -production-.');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Працюємо');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'В розробці');
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Деталі кімнати');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Деталі тарифу');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Тільки');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'залишилось!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Опції кімнати');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Неможливо видалити цю функцію ресурсу, вона призначена для ресурсу. Видаліть цю функцію з цього ресурсу та повторіть спробу.');
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Медіа центр');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Додати фото');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Фото кімнати');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Основна фотографія');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Фото для слайдшоу');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Очисити');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop файли сюди');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Виберіть ресурс, для якого потрібно завантажити зображення. Якщо ви можете завантажити зображення для окремих ресурсів (наприклад, кімнат), вам буде надано другий випадаючий список, щоб вибрати конкретний ресурс.');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Якщо ви завантажуєте кілька зображень як зображення основного властивості - буде використано лише перше з цих зображень.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Переглянути фото');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Видалити фото');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Завантажити фото');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Фото типів кімнат');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Зображення опцій кімнат');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Завантажити все');

jr_define('PRODUCT_TOUR_PAGE_INFORMATION', 'ДОПОМОГА');
jr_define('COMMON_PREV', 'Назад');
jr_define('COMMON_MORE', 'Більше');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Сьогодні');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Рік');
jr_define('_JOMRES_DASHBOARD_MONTH', 'місяць');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Тиждень');
jr_define('_JOMRES_DASHBOARD_DAY', 'День');
jr_define('_JOMRES_HLEGEND', 'Легенда');
jr_define('_JOMRES_HFILTER', 'Фільтр');
jr_define('_JOMRES_HFROM', 'Від');
jr_define('_JOMRES_HTO', 'До');
jr_define('_JOMRES_HNEW_BOOKING', 'Нова бронь');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Статус депозиту');
jr_define('_JOMRES_HSTATUS_GUEST', 'Статус гостя');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Статус броні');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Статус публікації');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Статус рахунку');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Тип рахунку');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Підтверджено');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Поточний бізнес');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Показати броні для');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Показати рахунки для');
jr_define('_JOMRES_STATUS_ANY', 'Будь які');
jr_define('_JOMRES_STATUS_PAID', 'Оплачені');
jr_define('_JOMRES_STATUS_NOTPAID', 'Не оплачені');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Виїхали');
jr_define('_JOMRES_STATUS_ACTIVE', 'Активні');
jr_define('_JOMRES_STATUS_CANCELLED', 'Відмінені');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Опубліковані');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Не опубліковані');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Гості з активними бронями');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Гості з минулими бронями');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Броні');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Підписки');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Комісії');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Усі мої бізнеси');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Встановити як поточний');
jr_define('_JOMRES_ACTION_CHECKIN', 'Поселення');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Виселення');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'бронювання');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', "об'єкти");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'гості');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'скарги');
jr_define('_JOMRES_HLIST_GUESTS', 'Гості');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Список гостей');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Показати рахунки');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Бізнеси');
jr_define('_JOMRES_HQUICK_BOOKING', 'Миттєве бронювання');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Дата бронювання');
jr_define('_JOMRES_HTWO_WEEKS', 'Два тижні');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Для скасування броні натисніть ОК.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Заселяються сьогодні');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Виселяються сьогодні');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Живуть зараз');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Розташуваня навігаційної панелі');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Стандартно (content area)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Фіксовано згори');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Фіксовано знизу');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Інверсія кольору (colour change)');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Показати гостей для');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Версія завантаження');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres містить власні набори шаблонів, по одному для кожної підтримуваної версії Bootstrap. Шаблони/теми Joomla та Wordpress на основі Bootstrap пропонують певну версію Bootstrap, тому вам потрібно переконатися, що вибраний вами варіант тут сумісний з вашим шаблоном/темою. Якщо у вашій темі немає коду Bootstrap, встановіть для цього параметра значення \"Без Bootstrap\" у темі, а потім Jomres автоматично включить файли Bootstrap 3 для власного використання. ");
jr_define('_JOMRES_HFIXED_PERIODS', 'Фіксовані періоди');
jr_define('_JOMRES_HDEPOSITS', 'Депозити');
jr_define('_JOMRES_HBOOKING_FORM', 'Форма для бронювань');
jr_define('_JOMRES_HREQUIRED_FIELDS', "Обов'зкові поля");
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Іван');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Іванов');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '8');
jr_define('COMMON_PLACEHOLDER_STREET', 'Бейкер стріт');
jr_define('COMMON_PLACEHOLDER_TOWN', 'Моє місто');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '+38000 0000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '+38000 0000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'Мій готель');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXХXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define('SIMPLE_CONFIGURATION', 'Simple Configuration');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Зручності кімнати');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Тип кімнати');
jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Редагувати тип гостя');
jr_define('_JOMRES_HEDIT_COUPON', 'Редагувати купон');
jr_define('_JOMRES_HEDIT_EXTRA', 'Редагувати додаткові сервіси');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Створити кілька кімнат');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Згенерувати кімнати');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Скільки кімнат?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Тип кімнати');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Максимально гостей на кімнату');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Видалити всі існуючі ресурси?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');
jr_define('DATATABLES_SINFO', 'Записи від _START_ до _END_ з _TOTAL_ записів');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Погодити');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Відхилити запит');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Прийняти запит');
jr_define('_JOMRES_STATUS_APPROVED', 'Прийнято');
jr_define('_JOMRES_STATUS_REJECTED', 'Відхилено');
jr_define('_JOMRES_STATUS_INQUIRY', 'Запит');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Бронювання потребують ручного підтвердження?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Якщо встановлено так, під час бронювання він не відображатиметься у календарях вільних місць (а інші гості все ще можуть забронювати ці дні та ресурс), поки менеджер закладу не прийме/не підтвердить наявність для бронювання . Після підтвердження бронювання вставляється як попереднє (якщо воно не замінює інші бронювання; інші гості більше не можуть забронювати ці ж дати), і клієнту надсилається електронний лист для здійснення платежу. ');
jr_define('_JOMRES_ERROR', 'Помилка');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Повідомлення');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'Файл');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Шаблони емейлів');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Редагувати шаблон емейла');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Тема листа');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Текст електронного листа');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Тип електронної пошти');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Ім\'я електронної пошти');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Опис електронної пошти');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Будь ласка, перегляньте цю сторінку, щоб отримати допомогу щодо налаштування електронних листів та список доступних результатів: Довідка шаблонів електронної пошти');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Нова електронна адреса бронювання адміністратора сайту');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Електронний лист, надісланий адміністратору сайту під час нового бронювання, якщо глобальний шлюз Paypal увімкнено');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Нова електронна адреса бронювання готелю');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Електронний лист надіслано власнику нерухомості під час нового бронювання');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Гостьова електронна адреса для бронювання');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Лист, надісланий гостю під час нового бронювання');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Підтверджуючий лист для гостя');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Лист або електронна пошта для друку, які можуть бути надіслані власником власності для підтвердження бронювання');
jr_define('_JOMRES_CAN_BE_APPROVED', 'Це бронювання може бути схвалено. Усі вибрані ресурси доступні для вибраних дат.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'Це бронювання не може бути схвалено, оскільки деякі ресурси вже заброньовані на вибрані дати. Вам потрібно буде спочатку змінити бронювання.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Показати посилання Powered by Jomres у нижньому колонтитулі Jomres.');
jr_define('GUEST_BUDGET', 'Бюджет');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Використовувати функцію бюджету?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Лише завантажені сайти! Функція \"Бюджет\" - це функція списку властивостей, яку гість може використати, щоб виділити для них властивості, ціна за ніч яких певна цифра. Функція має деякі обмеження, оскільки це може не підходить для деяких сайтів, які використовують багато різних валют. Зауважте, що якщо ви використовуєте цей та плагін Рекомендовані переліки, ваш клас обгортання запропонованих списків автоматично змінюється на \"основна панель\", коли відображається список властивостей. ");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', "Ім'я:");
jr_define('_JOMRES_FOR', 'Для');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'ніч');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'ночі');
jr_define('_JOMRES_LIVE_SCROLLING', 'Використовувати пряме прокручування/нескінченне прокручування у списку властивостей?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Січ');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Лют');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Бер');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Кві');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'Тра');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Чер');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Лип');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Сер');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Вер');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Жов');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Лис');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Гру');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFOEMPTY', 'Записи з 0 по 0 із 0 записів');
jr_define('DATATABLES_SINFOFILTERED', '(відфільтровано з _MAX_ записів)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SLENGTHMENU', 'Показати _MENU_ записів');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Хвилинку...');
jr_define('DATATABLES_SSEARCH', 'Пошук:');
jr_define('DATATABLES_SZERORECORDS', 'Записи не знайдені.');
jr_define('DATATABLES_SFIRST', 'Перший');
jr_define('DATATABLES_SLAST', 'Останній');
jr_define('DATATABLES_SNEXT', 'Наступний');
jr_define('DATATABLES_SPREVIOUS', 'Попередній');
jr_define('DATATABLES_SSORTASCENDING', ': активувати для сорування за зростанням');
jr_define('DATATABLES_SSORTDESCENDING', ': активувати для сорування за спаданням');
jr_define('DATATABLES_SHOWHIDE', 'Змінити колонки');
jr_define('_BOOKING_ONREQUEST', 'Бронювання за запитом');
jr_define('_BOOKING_INSTANT', 'Миттєве бронювання');
jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Запит на бронювання');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Шановний');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Виберіть сайт');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Ідентифікатор сайту');
jr_define('_JOMRES_IS_EU_COUNTRY', 'Країна ЄС?');
jr_define('_JOMRES_HLASTCHANGED', 'Остання зміна');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Електронна адреса для скасування бронювання готелів');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Електронний лист, надісланий власнику нерухомості, коли скасовується нове бронювання');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Електронна адреса для скасування бронювання гостей');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Лист, надісланий гостю, коли скасовується нове бронювання');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Надіслати тестовий лист');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Тестова електронна адреса');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'Це тестовий лист від вашої системи бронювання.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Тестовий лист успішно надіслано');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Тестовий лист не надіслано');
jr_define('_INVOICE_TRANSACTIONS', 'Транзакції');
jr_define('_OPENEXCHANGE_API', 'Ключ API відкритих курсів обміну');
jr_define('_OPENEXCHANGE_API_DESC', 'Для конвертації цін між послугами вам знадобиться ключ API Open Exchange Rates API. Ви повинні мати ключ API для правильного відображення цін у Jomres, однак ви можете <a href = "https://openexchangerates.org /signup/free" target="_blank"> зареєструйтесь для отримання безкоштовного ключа </a> (щогодинні оновлення, 1000 запитів на місяць - без HTTPS, підтримки електронної пошти або розширених функцій). Jomres завантажує курси обміну один раз на день, доки Ви використовуєте ключ лише на кількох сайтах, навряд чи перевищите ці обмеження. До Jomres 8.3 ми використовували старішу функцію Yahoo без документів, однак виявили, що використання цієї функції суперечить Умовам Yahoo та Умови. В результаті ми повинні припустити, що ця функція може зникнути в якийсь момент у майбутньому, отже, зміна на використання курсів відкритого обміну.');
jr_define('_JOMRES_COMMISSION', 'Комісія');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Якщо ви завантажуєте кілька зображень для окремих додаткових додатків, буде використано лише перше зображення.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Оплатіть зараз');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Цей рахунок -фактура має бути сплачений. Натисніть кнопку, щоб вибрати спосіб оплати.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Ось список деяких чудових речей, які можна придбати під час бронювання в цьому закладі.");
jr_define('GATEWAYS_INSTRUCTIONS', 'На цій сторінці ви можете налаштувати будь -які встановлені шлюзи. Ці параметри дозволяють приймати платежі за будь -які рахунки -фактури або підписку. Параметри інтерфейсу можуть бути змінені лише через Paypal, всі інші шлюзи потрібно буде налаштувати через Власність Конфігурація -> Вкладка Шлюзи, однак, якщо в цьому списку є шлюз, він повинен мати можливість обробляти як платежі за депозит за резервуванням, так і платежі за рахунок -фактуру. ');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Показати на сторінці відомостей про властивості?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Налаштування сторінки з інформацією про властивості');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Управління нерухомістю в Джомресі здійснюється лише з cpanel веб -сайту на веб -сайті. На цій сторінці ви зможете перерахувати всі властивості в системі, щоб ви могли призначати комісійні та затверджувати/відхиляти їх (якщо ці Щоб створити новий ресурс, відредагувати наявні, керувати бронюванням або будь -яким іншим завданням, пов’язаним із властивостями/бронюваннями, вам потрібно буде увійти у веб -сторінку сайту та перейти на сторінку за замовчуванням Jomres. Там ви побачите Фронтальна панель Джомреса. ');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Значки функцій кімнати');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Категорії функцій власності');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Редагувати категорію властивостей властивості');
jr_define('_JOMRES_HCATEGORY', 'Категорія');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Показати властивості, розділені на категорії?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Встановіть для цього значення ТАК, щоб розділити об’єкти властивостей на категорії. Цей параметр впливає лише на властивості властивостей, які відображаються на сторінці відомостей про властивості. Усі інші сторінки відображатимуть їх без поділу на категорії.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Скасувати реєстрацію');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Скасувати оплату');
jr_define('_JOMRES_STATUS_UNISSUED', 'Невиданий');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Ваш ключ завантаження та підтримки дійсний, ви зможете завантажувати плагіни через менеджер плагінів.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Ваш ключ завантаження та підтримки НЕ дійсний, ви не зможете завантажувати плагіни через менеджер плагінів.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Підтип');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Ви ще не встановили підтип власності. Тут ви визначаєте його як щось на кшталт вілли з 5 спальнями або котеджу з 4 спальнями, і це допомагає гостям, які шукають, уточнити свій пошук.") ;
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Надайте своїй власності підтип');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Шаблони електронної пошти');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Налаштування контактів');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'Звідси ви можете змінити всі контактні дані власності (електронна пошта, телефон, факс), щоб усі повідомлення з гостями надсилалися вам, а не власникам нерухомості.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Перекрити контактну інформацію про списки?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Якщо для цього параметра встановлено значення Так, адреси електронної пошти та номери телефонів будуть замінені на ті, що вказані на цій вкладці. Це змушує всі повідомлення надсилатись на вашу призначену адресу електронної пошти, гарантуючи, що гість та власність власник не може обійти механізм бронювання та комісійні збори, що призведуть до цього. Це також означає, що при зміні опису власності для нього буде встановлено значення \"Не схвалено\" (якщо ввімкнено функцію затвердження), і вам потрібно буде перевірити опис вручну переконатися, що менеджери не ввели дані телефону або електронної пошти у текстові поля, перш ніж їх знову схвалити. ");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Зміни, внесені до інформації про компанію, потребують підтвердження адміністратором сайту. Якщо ви збережете нові дані, ваша інформація буде опублікована та очікує схвалення адміністратором сайту, перш ніж вона знову стане доступною для відвідувачів сайту. Ви не зможете отримувати інформацію в Інтернеті бронювання, поки ваша публікація не опублікована та очікує схвалення. ');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Переглянути запит на бронювання');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Підтвердити запит на бронювання');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Змінити запит на бронювання');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Позначити рахунок -фактуру як очікуючий');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Рахунок -фактура позначений як очікуючий');
jr_define('_JOMRES_TRACKING_ENABLE', 'Надіслати анонімні дані відстеження?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Виберіть Так, щоб надіслати анонімні дані відстеження на Jomres.net, щоб допомогти нам краще зрозуміти, як ви використовуєте систему.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Будь ласка, переконайтеся, що ваші дані заповнені на сторінці "Редагувати мій обліковий запис", перш ніж здійснювати бронювання від імені ваших клієнтів. ');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Контактні дані гостя");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' - Новий гість -');
jr_define('_JOMRES_CHARTS', 'Діаграми');
jr_define('_JOMRES_CHARTS_SELECT', 'Вибрати діаграму ...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Дохід за рік/місяць');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Гаразд, почнемо. Спочатку вам потрібно створити кілька кімнат для цієї властивості.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Створити деякі кімнати зараз');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Дослідження довели, що властивості з великою кількістю високоякісних зображень генерують більше переглядів. Завантажте основне зображення та кілька знімків слайд -шоу, щоб підвищити ваші шанси отримати замовлення.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Завантажити зображення');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Створити деякі тарифи');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'Що будуть бронювати гості?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Чи є ця нерухомість типу готелю типу "готель", де ви здаєте кімнати в оренду, або нерухомості типу вілли, де ви орендуєте всю нерухомість за одне бронювання? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Номери у власності');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Вся власність');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Обидва'); // Це проміжний параметр, що забезпечує зворотну сумісність для існуючих користувачів, які ще не оновили свої типи властивостей. Його не можна вибрати
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Що будуть бронювати гості?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "Вам потрібно буде заповнити дані своєї адреси, щоб ваші гості могли знайти вас, коли вони прийдуть зупинитися.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Оновіть свою адресу');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'На жаль, схоже, ви забули заповнити всі поля.');
jr_define('_JOMRES_CONTANT_US', 'Зв\'яжіться з нами');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Ласкаво просимо до вашої нової сторінки в Інтернеті для');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Привіт, і ласкаво просимо у вашу нову нерухомість у');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "Ви нещодавно додали нову власність на наш веб -сайт, і ми раді вітати вас у родині.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Ви можете побачити свою нову інформаційну панель');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'тут');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Після того, як ви налаштуєте свою власність, ви можете побачити, як вона виглядає для відвідувачів сайту, відвідавши");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'ваша перша сторінка.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(він не опублікований, тому відвідувачі сайту ще не можуть його бачити).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "Угорі сторінки ви побачите ряд повідомлень. Кнопки біля цих повідомлень допоможуть вам перейти на сторінки, які потрібно відвідати, щоб налаштувати свою власність на нашому сайті. Після того, як ви\" Якщо ми виконали кожне з цих завдань, відвідувачам нашого сайту буде набагато простіше знайти вашу нерухомість та здійснити бронювання в Інтернеті. ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Якщо у вас взагалі є запитання, будь ласка');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'зв\'яжіться з нами');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "і ми будемо раді відповісти на всі ваші запитання.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Всього найкращого, наша команда о');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "У вас, здається, немає турів для продажу. Створіть профіль подорожі, а потім натисніть кнопку Створити, щоб створити деякі тури.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Давайте створимо кілька турів!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Розміщення символу обміну валюти');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Використовуйте цей параметр для переміщення символу валюти ззаду, перед цифрою ціни або навпаки.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Введіть свій ідентифікатор сторінки у facebook, наприклад "jomres". Залиште це поле пустим, щоб нічого не показувати. Не вводите https://www.facebook.com або що -небудь інше.');
jr_define('COMMON_DOWNLOAD', 'Завантажити');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Далі вам потрібно буде додати деякі тарифи. Це ваші основні ціни.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Завантаження не включено!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Попередження, у вас немає увімкненого Bootstrap у Конфігурації сайту Jomres -> Різне. Для надання <i> деяких </i> функцій Jomres наразі використовує його старі шаблони на основі інтерфейсу jQuery, однак над ними не працювали протягом кількох років. Усі поточні розробки та вдосконалення шаблонів Jomres (файлів макетів) виконуються у файлах шаблонів Bootstrap 3. Щоб отримати максимум від Jomres, ми рекомендуємо встановити Bootstrap 3 тему для Wordpress або Joomla. Після цього ви можете ввімкнути шаблони Jomres Bootstrap у Конфігурації сайту.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Ваш ключ підтримки дійсний. Зверніть увагу, що ця ліцензія не дозволяє завантажувати плагіни.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Перетягніть бронювання в цю область, щоб скасувати їх');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Будь ласка, переконайтеся, що ви створили сторінку WordPress, яка містить короткий код [jomres: xx-XX] (де xx-XX-це код мови вашого сайту, наприклад [jomres: en-GB] або [ jomres: en-US]) інакше ви не зможете отримати доступ до Джомреса з інтерфейсу для управління вашими властивостями та бронюваннями.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Перш ніж ви зможете створити тип номера, нам потрібно дізнатися, чи це готель типу нерухомості або власності типу вілли.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Натисніть, щоб додати нові типи кімнат');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Попередження, у вас є один або кілька типів власності без типів кімнат. Властивості потребують типів кімнат, щоб менеджери власності могли створювати тарифи.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Використовуйте кнопку New для створення нових типів кімнат.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Екскурсії');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Без бронювання/нерухомості (простий список)');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Розташування файлу журналу');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres реєструє системну активність за умовчанням у розташування' .JOMRES_SYSTEMLOG_PATH. ". Оскільки цей файл може містити конфіденційну інформацію (ключі api, системні шляхи, інформацію шлюзу, інформацію про гостя), ми настійно рекомендуємо змінити цей шлях до одного над коренем вашого веб -документа. Якщо ви не розумієте, що це означає, зверніться за порадою до своїх веб -хостів, оскільки вони будуть знати вашу файлову систему. ");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres реєструє детальну інформацію про вашу систему, включаючи ключі API, системні шляхи, шлюз та інформацію про гостей, які не повинні бути видимими для решти Інтернету. Шлях до вашого системного журналу не встановлено, тому системні журнали наразі зберігаються у каталозі ".JOMRES_SYSTEMLOG_PATH.", що не є ідеальним. Перейдіть до Конфігурація сайту -> Налагодження та встановіть шлях у своїй файловій системі, що знаходиться поза коренем Інтернету. Якщо у вас виникли сумніви, зверніться до своїх веб -хостів як вони зможуть вам порадити. ');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Якщо ваша CMS встановлена ​​у кореневому каталозі вашого веб -сайту, то відповідним місцем буде');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "У вас не встановлено ключ Карт Google. Через недавні зміни на картах Google для всіх нових сайтів потрібен ключ API, щоб мати можливість використовувати функції карти Google. Будь ласка <a href = 'http: //www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'> див. сторінку нашого посібника про те, як створити ключ API < /a> і збережіть ключ у Джомресі. ");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Колірна схема карти Google');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Добре, давайте почнемо додавати вашу власність на веб -сайт. Нам потрібно зібрати трохи інформації про вашу власність тут. Це дозволить нам налаштувати голі кістки вашої власності. Як тільки це буде зроблено, ви будемо керуватися шляхом додавання кімнат, цін та зображень. ");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Тип власності допомагає визначити, як буде заброньовано нерухомість, наприклад, у готелях, які ви "продаєте" лише одну або дві кімнати одночасно, тоді як на віллах ви пропонуєте всю нерухомість. ');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Зверніть увагу, що адреса електронної пошти не повинна бути такою, якою ви користувалися під час реєстрації свого облікового запису. Це дозволяє мати різні адреси для різних властивостей.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Мінімальний депозит');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Ви можете налаштувати мінімальну суму депозиту для стягнення. Якщо ви це зробите, то налаштування "Потрібен депозит - це вартість першої ночі?" & "Потрібен депозит у відсотках?" у Конфігурації власності , натомість усі розміри депозитів є відсотками і мають бути принаймні цифрою, яку ви тут визначаєте. ');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Цей показник не може бути меншим за');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Хост Syslog');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Порт системного журналу');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Якщо ви хочете надсилати повідомлення системного журналу на сервер системного журналу, ви можете встановити тут ім'я хосту або IP (наприклад, 192.168.0.2) та порт (наприклад, 514). Зверніть увагу, якщо для сайту встановлено значення Розробка, потім надсилатимуться повідомлення DEBUG. Якщо встановлено значення Виробництво», то надсилатимуться лише повідомлення рівня INFO та вище. Щоб вимкнути реєстрацію на віддаленому сервері, очистіть поля хосту та порту. ");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP не має доступу до функцій PHP openlog та syslog. Це налаштування на стороні сервера. Якщо ви хочете, щоб Jomres надсилав повідомлення на сервер системного журналу, зверніться до своїх хостів і підтвердьте, чи дозволено PHP отримати доступ до цих функцій. Після ввімкнення ви зможете тут налаштувати параметри свого сервера системного журналу. ");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Надіслати електронного листа адміністратору сайту, коли виникає помилка?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Історичні питання, які слід розслідувати, надсилалися власникам сайтів електронною поштою. Це може бути чудово для того, щоб стежити за роботою вашої системи, оскільки в ній дуже багато рухомих частин і важко відстежувати На жаль, павуки та боти, які сканують ваші сайти (навіть дружні), можуть ненавмисно викликати фатальні помилки, і це може спричинити велику кількість повідомлень, які ви отримуєте. Якщо це так, то встановіть цей параметр на Ні. повідомлення як до набору файлів журналу, так і до сервера системного журналу (якщо ваші спеціальні налаштування PHP дозволяють, якщо вони не звертаються до вашого хоста). Ви можете вручну проаналізувати файли, якщо ви шукаєте щось конкретне (наприклад, якщо Ви розробляєте шлюз і хочете використовувати виклик функції gateway_log ().), але це дуже багато інформації для проходження, тому краще використовувати щось на зразок аналізатора файлів syslog. Якщо ви розробляєте на Linux, то у вас є багато доступних інструментів, якщо у Windows то простим інструментом, яким ви можете скористатися, є http://maxbelkov.github.io/visualsyslog/ На цій сторінці встановіть для хосту «Syslog» значення «127.0.0.1» та « Порт 'на 514, щоб побачити повідомлення, зареєстровані в цьому інструменті. ");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Керування властивостями');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "У вас немає набору ключів API для виявлення IP. Це потрібно, щоб система могла автоматично визначати місцезнаходження користувача та автоматично встановлювати його валюту та країну. Будь ласка, <a href='https://www.jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> див. наш посібник сторінку про те, як створити ключ API для виявлення IP -адрес </a> і зберегти його в Jomres> Конфігурація сайту> Перетворення валют / коди валют. ");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "У вас немає набору ключів API курсів відкритого обміну. Це потрібно для того, щоб система могла автоматично завантажувати та використовувати курси обміну валют. Будь ласка <a href = 'https://www.jomres.net /manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'> див. сторінку нашого посібника про те, як створити ключ API для виявлення IP -адрес </a> і зберегти його в Jomres> Конфігурація сайту> Перетворення валют / коди валют. ");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Номер дозволу');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Деякі країни законодавчо встановлюють, що ви повинні відображати номер дозволу для свого майна. Якщо у вас є такий номер, введіть його тут, і він буде доданий до розділу заголовка власності.');
jr_define('_JOMRES_SHORTCODES', 'Шорткоди');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "Плагін <strong> plg_content_jomres_asamodule_mambot </strong> ПОВИНЕН бути встановлений і включений плагін Jomres Asamodule Mambot для роботи цих коротких кодів. Його можна знайти в менеджері плагінів Jomres. Швидко запускається, імовірно, це вже встановлено. ");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Ви повинні переконатися, що плагін <strong> 'Jomres Shortcodes' </strong> увімкнено. Його можна знайти в Диспетчері плагінів Jomres. Якщо цей сайт був створений за допомогою одного з Quickstarts, то це, ймовірно, уже встановлено. ");
jr_define('SHORTCODE_TASK', 'Завдання');
jr_define('SHORTCODE_DESCRIPTION', 'Опис');
jr_define('SHORTCODE_ARGUMENTS', 'Аргументи');
jr_define('SHORTCODE_EXAMPLE', 'Приклад');
jr_define('INTEGRITY_CHECK', 'Перевірка цілісності файлової системи');
jr_define('INTEGRITY_CHECK_DESC', 'Ця функція дозволяє перевірити відповідність файлової системи, що надається у поточній версії Jomres. Це корисно для того, щоб усі файли були правильно оновлені після встановлення/оновлення. Файли червоного кольору відсутні, файли в Помаранчеві існують, але вони відрізняються від тих, що подаються у поточній збірці. Тут будуть перелічені лише файли, які є потенційними проблемами. ');
jr_define('INTEGRITY_CHECK_FILENAME', 'Перевірка цілісності файлової системи');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Локальний хеш');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Хеш версії');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Чудово! Проблем не знайдено.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Маркер карт Google');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Детальніше');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Читати менше');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Туристичний збір');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Ставка туристичного збору');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Встановіть ставку туристичного збору. Туристичний збір обчислюється лише після створення первинного бронювання та додається на сторінку підтвердження бронювання у полі додаткових послуг.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Чи є відсоток?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Встановіть для цього значення Так, якщо податок становить відсоток, або Ні, якщо це фіксована плата.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Впливає на всю вартість бронювання?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Встановіть для цього значення Так, якщо податок має покривати всю вартість бронювання, тобто це відсоток обох розміщень плюс усі додаткові послуги, або Ні, якщо він розраховується лише на основі вартості загальний розмір розміщення. Якщо для опції \"Відсоток\" вище встановлено значення Ні, цей параметр ігнорується. ");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Майте на увазі, що до цього бронювання буде додано туристичний збір. Ви зможете побачити податок на сторінці бронювання огляду.');
jr_define('NO_LICENSE_MESSAGE', "Ви не зберегли номер ліцензії у Конфігурації сайту, тому ви не зможете завантажити плагіни. Після того, як ви збережете дійсний ключ ліцензії, ви зможете встановити будь -які плагіни, перелічені як Основні плагіни. ");
jr_define('INVALID_LICENSE_MESSAGE', "Ви, здається, використовуєте номер ліцензії, який є недійсним або закінчився. Після того, як ви збережете дійсний ключ ліцензії, ви зможете встановити будь -які плагіни, перелічені як плагіни Core.");
jr_define('VALID_LICENSE_MESSAGE', "Вітаємо, ви використовуєте дійсний номер ліцензії і можете встановлювати плагіни Core через менеджер плагінів Jomres.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Ця сторінка дозволяє завантажувати зображення для вашого майна та речей, які ви пропонуєте. На ньому є одна основна кнопка та друга кнопка, що дозволяє вибрати певні ресурси для завантаження зображень. Отже, основна властивість зображення та слайд -шоу показуватимуть лише одну кнопку, але якщо ви створили будь -яку, наприклад, додаткову функцію або кімнати, ви побачите другу кнопку, куди можна завантажити зображення для цих конкретних ресурсів. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Ця сторінка дозволяє завантажувати зображення для вашого майна та речей, які ви пропонуєте. На ньому є одна головна кнопка та друга кнопка, що дозволяє вибрати певні ресурси для завантаження зображень. Отже, основна властивість зображення та слайд -шоу показуватимуть лише одну кнопку, але якщо ви створили додаткові додаткові можливості, то побачите другу кнопку, куди можна завантажувати зображення для цих конкретних ресурсів. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Спочатку виберіть зображення, яке потрібно завантажити, натиснувши Додати зображення або за допомогою перетягування. Вони відображатимуться у стовпці праворуч. </li>
  <li> Над цією областю використовуйте кнопку \"Вибрати ресурс\", щоб вибрати ресурс, для якого потрібно завантажити зображення. Можливо, вам буде запропоновано вибрати конкретний ресурс під ним. </li>
  <li> Вибравши ресурс, ви можете натиснути кнопку Завантажити зображення під зображенням, щоб пов’язати його з цим ресурсом. Після того, як зображення буде завантажено, воно зникне зі стовпця на правій веб -сторінці та з’явиться ліворуч. </li>
  <li> Використовуйте кнопку \"Кошик\" поруч із наявними зображеннями, щоб видалити зображення, які більше не хочете показувати. </li>
  <li> Ви можете змінити порядок показу файлів у слайд -шоу, перейменувавши їх перед завантаженням, оскільки вони відображаються на сторінках в алфавітному порядку. </li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Біля кнопки \"Ресурс\" ви можете побачити кнопку попереднього перегляду. Якщо натиснути на неї, ви побачите спливаюче вікно, яке покаже, як на сторінці будуть виглядати завантажені зображення. Це допоможе вам створити уявлення про те, як зображення будуть виглядати для ваших клієнтів. ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Немає обмежень щодо кількості зображень, які можна завантажити. Зображення автоматично змінюються під час їх завантаження. Ви можете завантажувати лише файли JPG та PNG.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "В ідеалі будь -які завантажені вами зображення були б принаймні");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "пікселі шириною, інакше вони можуть виглядати нечіткими після завантаження.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Будь -які завантажені вами зображення не можуть перевищувати");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "у розмірі.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Виберіть ресурс, для якого потрібно завантажити зображення");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Конкретний ресурс");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Зображення, вже завантажені для цього ресурсу");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Форматування тексту');
jr_define('_JOMRES_MARKDOWN_DESC', 'Ви можете вводити текст тут, використовуючи просте форматування Markdown. Вам не потрібно знати будь -який HTML, просто використовуйте кнопки, щоб інформація виглядала так, як вам потрібно, або відформатуйте текст відповідно до цих прикладів.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Наголос');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'курсив');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'закреслення');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Заголовки");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Великий заголовок');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Середній заголовок");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Невеликий заголовок');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Крихітний заголовок');
jr_define('_JOMRES_MARKDOWN_LISTS', "Списки");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Загальний елемент списку');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Нумерований елемент списку');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Посилання');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Текст для відображення');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Цитати');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Це цитата.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Він може охоплювати кілька рядків!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Зображення');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Таблиці');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Стовпець');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Показувати зображення властивостей як слайд -шоу у списку властивостей?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Якщо встановлено так, буде показано слайд -шоу основних зображень властивостей. Якщо встановлено значення ні, то буде показано основне зображення першої властивості.');
jr_define('EDIT_CMS_USER', 'Редагувати користувача CMS');
jr_define('BOOKING_MADE_BY', 'Бронювання зроблено');
jr_define('_JOMRES_ROUTER_FEATURES', 'Зручності');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Типи кімнат');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL -адреса зовнішньої форми бронювання');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Тут ви можете встановити зовнішню URL -адресу, якщо хочете використовувати сторонній веб -сайт для бронювання. Усі кнопки бронювання jomres вказуватимуть на цю URL -адресу. Залиште це поле порожнім, якщо ви хочете скористатися формою бронювання Jomres . ');
jr_define('_JOMRES_ROOM_TAGLINE', 'Слоган (короткий опис кімнати/субтитри)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Опис кімнати');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Гість у чорному списку');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Якщо цей гість занесений до чорного списку, то він більше не зможе здійснювати бронювання в цій власності.');
jr_define('_JOMRES_SESSION_HANDLER', 'Обробник сеансу');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Зберегти файли сеансів jomres на диск або в базу даних. Рекомендується: база даних');
jr_define('_JOMRES_MAP_HEIGHT', "Висота карти (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Рівень масштабування карти");
jr_define('_JOMRES_MAP_MAPTYPE', "Тип карти");
jr_define('_JOMRES_TEMPLATE_PACKAGES', "Менеджер заміни шаблонів");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Пакети шаблонів - це плагіни, які можуть надавати перевагу шаблонам для різних основних файлів шаблонів Jomres.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Ця сторінка містить усі файли шаблонів, які можуть бути замінені файлами шаблонів пакета шаблонів. Якщо ви хочете змінити певний файл шаблону, натисніть кнопку редагування цього файлу, на наступній сторінці ви побачите можливість вибрати, з якою версією ви хочете змінити. Зверніть увагу, що ці заміни мають пріоритет над Jomres Core і будь -якими темами/шаблонами Wordpress або Joomla. Ви можете вимкнути заміну, видаливши її на сторінці Переозначення шаблонів списку. ");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Назва шаблону");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Поточний шлях");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Не перевизначено");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Ви можете вибрати, який файл шаблону замінити файли шаблонів Core, змінивши випадаючий список");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Відсоток заброньованих кімнат");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Відсоток заброньованих кімнат");
jr_define('_JOMRES_SELECT_WIDGETS', "Вибір віджетів");
jr_define('_JOMRES_INTERVAL', "Інтервал");
jr_define('_JOMRES_TIMELINE', "Хронологія");
jr_define('_JOMRES_CPANEL_GRID', "Домашній макет панелі керування");
jr_define('_JOMRES_CPANEL_GRID_DESC', "Виберіть макет сітки на вашій домашній сторінці панелі керування керуванням власними пристроями.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Маркери карт Google");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Зображення міст");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "Зміна типу власності видалить усі кімнати, тарифи, налаштування власності та скине доступність.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Зверніть увагу, що після оновлення ви повинні оновити будь -які плагіни Jomres, які вже встановлені, через менеджера плагінів Jomres. Якщо у вас встановлені плагіни Core, але у вас немає дійсної ліцензії Jomres, ми <em> робимо це не </em> рекомендуємо оновлювати Jomres, оскільки старіші плагіни часто можуть не працювати з новими версіями Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Зверніть увагу, що після оновлення ви повинні оновити будь -які плагіни Jomres, які вже встановлені, через менеджера плагінів Jomres.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Якщо ви хочете оновити Jomres та його плагіни, вам знадобиться поновлення ліцензії. Відвідайте <a href='https://www.jomres.net/pricing' target='_blank'> наш веб -сайт </a> для отримання додаткової інформації. У більшості випадків ці ліцензії становлять 50% від вартості повної ліцензії. Будь ласка, переконайтеся, що ви увійшли до нашого магазину, перш ніж намагатися придбати оновлення. ");
jr_define('_JOMRES_PAYMENT_METHOD_USED', "Спосіб оплати:");

jr_define('_JOMRES_PRICES', "Підключитися");


jr_define('_OAUTH_TITLE', "Керування ключами програми");
jr_define('_OAUTH_APPS', "Деталі клієнта REST API");
jr_define('_OAUTH_IDENTIFIER', "Ідентифікатор");
jr_define('_OAUTH_APIKEY', "Ідентифікатор клієнта");
jr_define('_OAUTH_SECRET', "Секрет");
jr_define('_OAUTH_CREATED', "Створено/оновлено додаток");
jr_define('_OAUTH_CLIENT_ID_INFO', "Ідентифікатор клієнта та секрет створені для вас. Ідентифікатор дозволяє легко ідентифікувати цю пару ключів.");
jr_define('_OAUTH_SCOPE_TITLE', "Дозволи (що може робити клієнт)");
jr_define('_OAUTH_SCOPE_CATEGORY_USER', "Дозволи користувачів");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Дозволи власності");

jr_define('API_DOCUMENTATION_TITLE', "Документація API REST API");

jr_define('_OAUTH_CONFIG', "Конфігурація ядра API");

jr_define('_OAUTH_CONFIG_SHOW', "Показати параметри конфігурації клієнта API в головному меню Jomres?");
jr_define('_OAUTH_CONFIG_SHOW_DESC', "Ви можете не показувати параметри конфігурації клієнта API у розділі \"Мій обліковий запис\" головного меню Jomres. Натомість ви можете вирішити, що хочете показувати їх на інших сторінках за допомогою коротких кодів Jomres.");

jr_define('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Відображає сторінку документації ядра API. Ядро API дозволяє користувачам створювати клієнтів API, які потім використовуються для доступу до функціональних можливостей API, зазначених у документації API Core.");

jr_define('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Відображає сторінку адміністрування основного API, де менеджери властивостей можуть налаштовувати клієнтів API. Зауважте, що це функція лише для зареєстрованих користувачів, тому перед тим, як вони зможуть побачити цю сторінку, користувачі повинні бути зареєстровані та увійти в систему.");

jr_define('API_METHODS_TITLE', 'Методи API');
jr_define('API_METHODS_DESCRIPTION', "Цей список методів базується на встановлених вами плагінах функцій API і створюється автоматично. Якщо ви встановлюєте або видаляєте плагін функції API, вам потрібно відвідати цю сторінку, щоб відновити цей список методів API, доступних на вашому сайті. ");

jr_define('_OAUTH_REDIRECT_URI', "URI переспрямування");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER', "Дайте мені важливе для вас ім'я, наприклад Мій телефон ");

jr_define('_OAUTH_GRANT_TYPES', "Ця система підтримує два типи надання, клієнтські та імпліцитні. Якщо ви використовуєте потік <em> client_credentials </em>, то вам знадобляться ідентифікатор клієнта та секрет клієнта. Якщо ви використовуєте <em > неявно </em> тоді ваш додаток надсилатиме лише ідентифікатор клієнта, і ви входитимете в систему, щоб явно авторизувати цей додаток. ");

jr_define('_OAUTH_IMPLICIT_NOTES', "Щоб використовувати <em> неявний </em> потік типу надання, вам потрібно буде використати цю URL -адресу для авторизації своїх програм. Коли ця URL -адреса викликається, і ви авторизуєте додаток, система видасть маркер, який ваші додатки потім використовуватимуть для виклику API цієї системи ");
jr_define('_OAUTH_AUTHORISATION_URL', "URL -адреса авторизації");

jr_define('WEBHOOKS_CORE', 'Webhooks');

jr_define('_WEBHOOKS_CONFIG_SHOW', "Показати параметри конфігурації Webhook у головному меню Jomres?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', "Ви можете не показувати параметри конфігурації Webhook у розділі \"Мій обліковий запис\" головного меню Jomres. Натомість ви можете вирішити, що хочете показувати їх на інших сторінках за допомогою коротких кодів Jomres.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "Документація Webhooks");

jr_define('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Відображає сторінку документації ядра API. Ядро API дозволяє користувачам створювати клієнтів API, які потім використовуються для доступу до функцій API, зазначених у документації API Core.");

jr_define('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Відображає сторінку адміністрування основного API, де менеджери властивостей можуть налаштовувати клієнтів API. Зауважте, що це функція лише для зареєстрованих користувачів, тому перед тим, як вони побачать цю сторінку, користувачі повинні бути зареєстровані та увійти в систему.");

jr_define('WEBHOOKS_INTEGRATION_EDIT', 'Редагувати інтеграцію');
jr_define('WEBHOOKS_INTEGRATION_ID', 'Ідентифікатор інтеграції');
jr_define('WEBHOOKS_INTEGRATION_URL', 'URL або ім\'я');
jr_define('WEBHOOKS_ENABLED', 'Увімкнено');

jr_define('WEBHOOKS_AUTH_METHOD_SELECT', 'Метод автентифікації/Інтеграція');
jr_define('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Будь -які створені вами веб -хуки не запускатимуться, оскільки ви не призначені жодним властивостям. Суперменеджери властивостей зазвичай не призначаються окремим властивостям, тому вам може знадобитися новий користувач для створення веб -хука.');
jr_define('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Будь -які створені вами веб -хуки будуть активовані проти таких властивостей:');


jr_define('PORTAL_REVIEWS_LIMIT', 'Ліміт оглядів');
jr_define('PORTAL_REVIEWS_LIMIT_DESC', 'Використовуйте це налаштування, щоб обмежити кількість відгуків, що відображаються на сторінці інформації про властивість.');
jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Показати всі відгуки');

jr_define('VIDEO_TUTORIALS', 'Video Tutorials');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Мінімальна сума депозиту');
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Якщо обчислений депозит менший за цей показник, то замість цього встановіть депозит на це значення. Цей показник сам по собі може бути перевищений, якщо він не відповідає мінімальному депозиту сайту. Залиште значення 0 до не використовувати налаштування. ");

jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Щоб збільшити швидкість вашого сайту, ми рекомендуємо імпортувати деталі існуючого сайту та зображення властивостей до бази даних.');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Імпортувати відомості про наявні зображення до бази даних');

jr_define('_JOMRES_S3_ACTIVE_DESC', 'Експериментальна функція. Якщо цей параметр увімкнено, зображення, завантажені за допомогою функції мультимедійного центру, також будуть скопійовані у відро Amazon Amazon S3 і подані з вашої URL -адреси Amazon S3. При першому включенні ви також будете запропоновано імпортувати наявні зображення у відро S3. ');
jr_define('_JOMRES_CLOUDFRONT_DMAIN', 'Домен CloudFront');
jr_define('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Замінити домен Amazon S3 за умовчанням на ваш домен CloudFront');
jr_define('_JOMRES_S3_SSLTLS_DESC', 'Рекомендується ввімкнути. Лише для Windows та Mac OSX, якщо libcurl не був створений за допомогою підтримки Schannel або Secure Transport (рідні бібліотеки SSL, що входять до складу Windows та Mac OS X), ви повинні встановити для цього значення Немає.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Ви\' увімкнули інтеграцію Amazon S3, тому вам доведеться скопіювати всі наявні зображення у відро S3. Зображення тепер подаються відвідувачам вашого сайту з вашої URL -адреси Amazon S3, тому вам знадобиться скопіювати їх спочатку у відро S3, інакше вони не будуть видимими для відвідувачів вашого сайту. ');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Після натискання цієї кнопки, будь ласка, не переривайте процес і чекайте повідомлення про успіх або помилку. Залежно від швидкості сервера, це може зайняти деякий час.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Копіювати наявні зображення у відро Amazon S3');


jr_define('JOMRES_INCOMPLETE', 'Неповне');
jr_define('JOMRES_WATING_APPROVAL', 'Очікується на затвердження');
jr_define('JOMRES_GOOGLE_MAPS_PDETAILS', 'Карта деталей власності');

jr_define('HAS_STARS_TITLE', 'Дозволяє класифікацію зірок?');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Примусово повторно імпортувати деталі зображення до бази даних');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Примусово завантажити зображення до сегмента S3');
jr_define('_JOMRES_UNINSTALL_TABLES', 'Видалити всі дані Jomres при видаленні?');
jr_define('_JOMRES_UNINSTALL_TABLES_DESC', 'Якщо встановлено так, Jomres видалить усі таблиці бази даних у разі видалення. Це видалить усі дані Jomres з бази даних, і їх неможливо скасувати.');

jr_define('TRANSACTION_IDS', 'ID транзакції');
jr_define('PAYMENT_METHOD', 'Спосіб оплати');
jr_define('POA_DISPLAY_PRICE', 'Ціна POA');
jr_define('POA_DISPLAY_PRICE_DESC', 'Коли властивості відображаються у списку, система намагатиметься визначити дійсну ціну з налаштованих тарифів на основі будь -якої сьогоднішньої дати або якщо дати були використані в пошуку, то на основі цих дат . Якщо це неможливо, то він покаже POA (ціна на заявку), тобто гость повинен зв’язатися з вами, щоб отримати ціну. Якщо ви хочете, ви можете налаштувати ціну тут, яка буде відображатися замість тексту POA. Ця цифра була б "резервна" ціна для відображення, якщо інша ціна не може бути визначена. ');

jr_define('PLUGINMANAGER_INSTALL', 'Вам потрібно встановити менеджер плагінів, перш ніж ви зможете встановити плагіни Jomres, чи хотіли б ви це зробити зараз?');
jr_define('PLUGINMANAGER_REINSTALL', 'Вам потрібно оновити менеджер плагінів, перш ніж ви зможете оновити будь -які встановлені плагіни, чи хотіли б ви це зробити зараз?');
jr_define('PLUGINMANAGER_INSTALL_BUTTON', "Давайте зробимо це!");

jr_define('INCLUDEINFILTERS', 'Включити у фільтри?');
jr_define('INCLUDEINFILTERS_DESC', 'Фільтри властивостей властивостей у Ajax Composite Search можуть стати дуже довгими, тому ви можете встановити цей параметр на Ні, щоб ця функція не відображалася у списку властивостей.');
jr_define('REVIEW_REMINDER_PT1', "У вас є");
jr_define('REVIEW_REMINDER_PT2', "бронювання (-ів), для яких ви ще не залишили відгук. Залиште відгук.");
jr_define('BOOKINGS_AWAITING_REVIEWS', "Бронювання очікують на огляд");
jr_define('REVIEW_NAG', "Натякати гостей на відгуки?");
jr_define('REVIEW_NAG_DESC', "Після того, як гість був заброньований на бронювання, система буде нагадувати йому надсилати відгук про своє бронювання. Встановіть для цього параметра Ні, щоб вимкнути це нагадування.");

jr_define('HIDDEN_ADDRESS_SETTING', "Приховати адресу?");
jr_define('HIDDEN_ADDRESS_SETTING_DESC', "Якщо ви встановите цей параметр на \"Так\", то лише гості, які вже зробили бронювання у вашій власності, зможуть бачити адресу вулиці власності. Ви можете скористатися цим налаштуванням, щоб приховати точне місцезнаходження власності. якщо, наприклад, його регулярно залишають без нагляду. ");
jr_define('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Оптимізувати зображення під час завантаження?');
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Якщо цей параметр увімкнено, зображення будуть оптимізовані для Інтернету (розмір файлу може бути до 75% меншим). Залежно від типу завантаженого зображення, на вашому сервері повинна бути встановлена ​​одна або кілька таких бібліотек, розміщених на хостингу. постачальник: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define('DATABASE_INTEGRITY_CHECK', 'Перевірка цілісності бази даних');
jr_define('OBSOLETE_FILES_CHECK', 'Перевірка застарілих файлів');
jr_define('DATATABLES_COLVIS', 'Видимість стовпця');

jr_define('API_TOKEN_LIFETIME', 'Термін служби маркера API');
jr_define('API_TOKEN_LIFETIME_DESC', 'Як довго маркер API залишається дійсним протягом секунд, 86400 = 1 день, 31536000 = 1 рік');


jr_define('ENCRYPTION_TITLE', 'Шифрування');
jr_define('ENCRYPTION_FILE_LOCATION', 'Розташування файлу шифрування');
jr_define('ENCRYPTION_FILE_LOCATION_DESC', '** Ніколи не видаляти файл шифрування ** <br/> Дані користувачів зберігаються зашифрованими в таблицях, щоб гарантувати надійну захист "даних у стані спокою" відповідно до рекомендацій GDPR. За замовчуванням ключ шифрування зберігається у файлі "encryption_key.class.php" у корені вашої установки Jomres (зазвичай /public_html /jomres). Ви можете змінити місце зберігання файлу тут. Якщо ви все -таки зміните розташування, ви повинні ПЕРЕМІСТИТИ файл, не чекайте, поки Джомрес створить нову версію, інакше ви не зможете розшифрувати дані своїх гостей. ');

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'Інформація, яку ви збережете тут, буде використана у рахунках -фактурах, створених за цю властивість');

jr_define('_JOMRES_GDPR_POLICIES', 'Політика GDPR');
jr_define('_JOMRES_GDPR_POLICIES_DESC', 'Тут ви можете налаштувати, скільки часу після створення бронювання або рахунку -фактури воно буде видалено з системи, щоб переконатися, що ви відповідаєте GDPR.');

jr_define('_JOMRES_GDPR_BOOKING_RETENTION', 'Період збереження бронювання (у днях)');
jr_define('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Через скільки днів після дати вильоту бронювання потрібно видалити бронювання? Після його видалення і бронювання, і рахунок -фактура видаляються. Типовий період зберігання може становити 365 днів.');

jr_define('_JOMRES_GDPR_INVOICE_RETENTION', 'Період збереження рахунків-фактур (не бронювання)');
jr_define('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Інші рахунки -фактури, такі як комісії та рахунки -підписки, не пов’язані з бронюванням. В результаті вони не будуть видалені при видаленні рахунків -фактур та контрактів. Залежно від вашої країни та вашої власної ділової практики, вам потрібно буде налаштувати інший період зберігання. Типовий період зберігання може становити 3653 дні, тобто 10 років. ');


jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Ваші дані');
jr_define('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Деякі функції цього веб -сайту мають зберігати інформацію про ваше відвідування. Це використовується лише для надання вам послуг, ніколи не передається нікому та видаляється, коли більше не потрібно.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'ВИ ДАЄТЕ НАМ ДОЗВІЛ ЗБЕРЕЖИТИ ЦЮ ІНФОРМАЦІЮ ??');
jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Детально');
jr_define('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Ви повинні дати згоду на те, щоб ми зберігали ці дані, щоб ви могли здійснювати бронювання на цьому сайті. Незалежно від того, чи погоджуєтесь ви на збереження ваших даних, ми зберігатимемо файл cookie на вашому комп’ютері, щоб повідомити про це нам, незалежно від того, чи ви ввійшли в систему. Це допомагає нам гарантувати, що ми не будемо постійно запитувати вас, чи ви бажаєте увімкнути чи відмовитися, і вона не містить жодної особистої інформації. можна будь -коли відвідати сторінку "Дозволи програми", щоб увімкнути або вимкнути. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Інформація зберігається протягом різних періодів часу залежно від характеру вашого візиту. Тому, якщо ви просто озираєтесь, ми збережемо приблизне географічне місцезнаходження (рівень країни). Якщо ви здійсните пошук, то зробимо форми пошуку більш зручними для користувачів, ми збережемо останні речі, які ви шукали. Ця інформація зазвичай зберігається максимум 24 години і використовується лише для того, щоб зробити ваш візит приємнішим. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Коли ви робите бронювання у нас, за необхідності зберігається більше інформації.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Технічні дані форми бронювання зберігаються та зберігаються максимум 60 днів. Це потрібно для того, щоб бронювання за запитом можна було перетворити на повне бронювання після схвалення бронювання та для аналізу нашими командами. у разі виникнення проблем із бронюванням. Якщо ви не увійшли під час бронювання, ми надішлемо вам електронною поштою ім’я користувача та пароль, щоб ви могли переглянути історію бронювання та скористатися своїм правом бути забутим (RTBF), якщо ви бажаю цього зробити. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Дані, внесені у форму бронювання, наприклад ім\'я, адреса електронної пошти, реальна адреса зберігаються протягом максимум 365 днів після дати відправлення бронювання. Ця інформація зберігається у зашифрованій формі в нашій базі даних таким чином, щоб його могли переглядати лише авторизовані люди. Якщо ви робите бронювання, то згідно із законом ми повинні зберігати вашу особову інформацію, поки бронювання дійсне. Після завершення бронювання або через те, що його було скасовано, або вас виписали, ви мати можливість використовувати свій RTBF, увійшовши у систему та перейшовши на сторінку "Ваші дані". Інформація про рахунки -фактури за завершені бронювання все одно буде надійно зберігатися в нашій базі даних, щоб ми дотримувалися відповідного податкового законодавства, але ви зможете видалити всі інші особисті дані після завершення бронювання. ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Коли ви погоджуєтесь на те, що ваша інформація зберігається, як описано вище, ми юридично зобов\'язані зберігати цю згоду в нашій базі даних. Ця інформація включатиме ваш IP-номер та вміст форми для входу. Ми будемо зберігати це повідомлення про згоду на невизначений термін (це є законодавчою вимогою). ');

jr_define('_JOMRES_GDPR_CONSENT_NOT_SET', 'Ви ще не повідомили нам, чи можемо ми збирати особисту інформацію про вас');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Ви дали згоду на те, щоб ми збирали необхідну Персональну інформацію для бронювання');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Ви сказали нам не збирати особисту інформацію');

jr_define('_JOMRES_GDPR_NOCONSENT_INTRO', 'Ви не дали нам дозволу збирати ваші особисті дані');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Щоб виконувати певні дії на цьому веб -сайті, ми повинні збирати особисту інформацію про вас, але ви не надали нам для цього дозволу.');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Змінити дозволи');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Продовжити перегляд властивостей');

jr_define('_JOMRES_GDPR_APP_MENU_ITEM', 'Дозволи програми');

jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Дані гостей');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Це реквізити, які зберігаються для вас у різних власностях. Різні готелі можуть зберігати різні записи, залежно від того, що ви ввели під час бронювання.');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'У вас немає даних, що зберігаються в готелях цієї системи');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Дані профілю');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Це основний набір даних, який ми зберігаємо для вас, на відміну від тих, якими ви поділилися з різними властивостями.');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Ви не зберегли жодної інформації профілю');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Ось інформація, що ідентифікує особу, яку ми зберігаємо на цьому веб-сайті. Вона побудована у форматі JSON (JavaScript Object Notation), який є легким форматом обміну даними. Його легко читати та читати писати, і машини легко аналізувати та генерувати. ');

jr_define('_JOMRES_GDPR_REDACTION_STRING', 'Анонімізовано');

jr_define('_JOMRES_GDPR_MY_DATA', 'Ваші дані');
jr_define('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Приймаючи ці Умови використання (ця "Угода"), ви погоджуєтесь, що:

<ul>
<li>
Ви маєте право бронювати готелі через цей веб -сайт;
</li>
<li>
Вам не менше 18 років;
</li>
<li>
Ви маєте юридичні повноваження створювати обов\'язкове юридичне зобов\'язання;
</li>
<li>
Ви будете використовувати Сайт відповідно до цієї Угоди;
</li>
<li>
Ви будете використовувати Сайт лише для того, щоб зробити законні застереження для себе або для іншої особи, щодо якої ви маєте законні повноваження діяти;
</li>
<li>
Ви будете інформувати таких інших осіб про цю Угоду, яка застосовується до застережень, які я зробив від їх імені, включаючи всі правила та обмеження, що застосовуються до них;
</li>
<li>
Вся інформація, яку ви надаєте на веб -сайт, є правдивою, точною, актуальною та повною; та
</li>
<li>
Ви будете захищати інформацію свого облікового запису, а також будете контролювати та нести повну відповідальність за будь -яке використання вашого облікового запису самостійно та будь -ким, крім вас.
</li>
</ul>
');
jr_define('_JOMRES_GDPR_MY_DATA_LEAD', 'Безпека та прозорість важливі для нас.');
jr_define('_JOMRES_GDPR_MY_DATA_INTRO', 'Ми дуже серйозно ставимось до своїх обов\'язків щодо зберігання ваших даних. Вся інформація, що ідентифікує особу (PII), зберігається в нашій базі даних зашифрованою за допомогою стандартних алгоритмів галузі, щоб переглянути цю інформацію лише авторизовані користувачі.');

jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Ви можете завантажити всі особисті дані, які ми зберігаємо для вас.');
jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Завантажити зараз');

jr_define('_JOMRES_GDPR_MY_RTBF_LEAD', 'Право бути забутим (RTBF)');
jr_define('_JOMRES_GDPR_MY_RTBF_INTRO', 'Ми вважаємо, що ви зможете <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> видалити </a> свій < a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_blank"> Інформація, що ідентифікує особу </a>, якщо ви цього хочете і якщо це можливо. ');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Ви не зареєстровані на цьому сайті. Ваше загальне місцезнаходження (країна) та номер IP зберігатимуться максимум 24 години, а потім будуть видалені.');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Ви не зареєстровані на цьому сайті, і ви відмовились від збору даних. Ми не зберегли вашу особову інформацію.');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Ви зареєстровані на сайті і не маєте жодних чи активних бронювань. Ми можемо анонімізувати більшість інформації, яку ми зараз зберігаємо для вас. Чи хотіли б ви це зробити?');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Примітка: Це не видаляє ваш обліковий запис, він просто анонімізує наші записи, так що ваш обліковий запис не може бути пов\'язаний з вами як особистістю. За законом ми повинні продовжувати зберігати вашу особову інформацію для цілей виставлення рахунків. видалити всі записи гостей. ');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Ви зареєстровані на веб -сайті, проте у вас є незавершені бронювання, і ми не можемо анонімувати ваші дані на цей час. Ці дані зберігатимуться протягом максимум одного року після завершення бронювання. буде видалено, якщо ви не вирішите видалити його до цього часу. ');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Оскільки ви керуєте нерухомістю на нашому сайті, ми не можемо запропонувати вам можливість автоматичного видалення ваших даних. Натомість зв\'яжіться з нами безпосередньо, щоб ми могли передати вашу власність іншому менеджеру. Як тільки ми це зробимо та видалимо ваш статус менеджера нерухомості, ви зможете автоматично видалити ваші дані. ');

jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Забудь мене!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Це неможливо скасувати!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Ваші дані видалено!');

jr_define('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Вибачте, ви не можете зробити бронювання, оскільки ваша електронна адреса недійсна');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Ця сторінка дає вам можливість анонімізувати будь -яких гостей, у яких їх інформація зберігається в системі. Це дозволяє вам дотримуватися GDPR, проте ви не можете редагувати будь -яку іншу інформацію на цій сторінці. Для цього вам потрібно увійти у фронтенд як адміністратор нерухомості. Припускається, що історичний гість звернувся до вас із проханням дозволити їм скористатися своїм правом на забуття. Якщо він не може увійти у веб -сторінку сайту (можливо, користувач не був створений для них під час бронювання), то ви можете скористатися цією областю, щоб анонімізувати їх, коли ви підтвердите їх особу. ');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Анонімний гість');
jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'ВИДАЛЕНО ВЛАСНОСТЬ');
jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Анонімні дані гостей');
jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Неможливо анонімізувати');
jr_define('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Нам потрібен ваш дозвіл на зберігання вашої інформації, перш ніж ви зможете зробити бронювання. КЛІКНІТЬ ТУТ, щоб надати нам дозвіл.');

jr_define('_JOMRES_GDPR_CONFIG_ENABLE', 'Увімкнути сумісність із GDPR?');
jr_define('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'МИ НЕ РЕКОМЕНДУЄМО, ЩО ВИ ВИМКНЮЄТЕ ФУНКЦІОНАЛЬНІСТЬ ДОГОВОРІВ GDPR. Jomres має вбудовані функції, які допомагають переконатися, що розділ Jomres на вашому сайті відповідає вимогам GDPR. не варто, якщо ви перебуваєте в ЄС або ведете бізнес з громадянами ЄС), тоді Джомрес автоматично вважатиме, що кожен відвідувач сайту надав свій дозвіл на ввімкнення своїх персональних даних. Дозвіл програми та сторінки Мої дані не будуть відображається, і користувачам не буде запропоновано надати свій дозвіл на збір даних. ');


jr_define('EMPTY_TEMP_DIR', 'Порожній тимчасовий каталог');
jr_define('EMPTY_TEMP_DIR_DONE', 'Тимчасові файли видалено');

jr_define('MACHINE_TRANSLATION', 'Машинні переклади');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', 'Мова оригіналу');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Можливість підключення функцій машинного перекладу. Це дозволяє вводити рядки однією мовою, а переклади можуть бути вилучені з віддалених служб. Майте на увазі, що не всі служби перекладу підтримують усі мови. Див. ці послуги для детальніше. ');

jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Типи кімнат');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Тип нової кімнати');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Ви можете створювати та редагувати типи кімнат на цій сторінці. Ці типи кімнат будуть специфічними лише для цієї властивості. При налаштуванні власності вам спочатку потрібні деякі типи кімнат. Ви можете використовувати будь -які типи кімнат, створені адміністратора, або ви можете додати свою власну. Після того, як у вас буде один або кілька типів кімнат, ви зможете створювати кімнати такого типу. Після того, як у вас є кімнати, ви зможете створити тарифи (ціни) для цих кімнат, оскільки тарифи пов’язані з типами кімнат . ');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Менеджери можуть створювати типи кімнат?');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Використовуйте цей параметр, щоб налаштувати, чи можуть менеджери створювати власні типи кімнат у фронтенді. Ми наполегливо рекомендуємо залишити цей параметр встановленим на Ні під час першого використання Jomres, особливо якщо ви створюєте портал, тому що ви повинні створити всі типи кімнат в області адміністратора. Типи кімнат, створені менеджерами, відображатимуться у формах пошуку, але оскільки ці типи кімнат є специфічними для окремих властивостей, у результатах пошуку відображатиметься лише одна властивість, якщо вибрано цей тип кімнати під час пошуків. Якщо ви хочете, щоб тільки суперменеджери нерухомості могли створювати типи кімнат, залиште цю опцію встановленою на Так і використовуйте плагін Контроль доступу, щоб дозволити лише суперменеджерам переглядати опцію меню "Налаштування> Типи кімнат". Тільки нерухомість, що орендується у номерах у цьому закладі та у режимах редагування тарифів «Розширений» або «Мікроуправління» можна використовувати цю опцію. Властивості типу вілли/квартири не зможуть ним користуватися. ');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Тип кімнати/власності оновлено');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Показати типи кімнат у параметрах пошуку');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Якщо ви вирішите дозволити менеджерам власності створювати власні типи кімнат, ви можете вибрати, чи показувати ці створені типи кімнат у параметрах пошуку, де ви вибрали для показу типи кімнат.');


jr_define('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Не слід повторно використовувати одну і ту ж адресу електронної пошти для кожного бронювання. <br/> Якщо у вас є унікальний домен (наприклад, не адреса електронної пошти gmail) для вашої компанії, використовуйте номер телефону гостя як адресу електронної пошти. Електронна адреса тоді виглядатиме приблизно як 123456@mydomain.com <br/> Це гарантуватиме створення нового гостя під час створення бронювання. ");

jr_define('_JOMRES_LOGIN_USERNAME', 'Адреса електронної пошти');
jr_define('_JOMRES_LOGIN_PASSWORD', 'Пароль');
jr_define('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Ми раді, що ви хотіли б забронювати у нас ще раз. Щоб мати змогу керувати всіма вашими бронюваннями разом, потрібно авторизуватися, щоб бронювання можна було додати до вашого облікового запису. Це також гарантує, що ви маєте право використовувати надану адресу електронної пошти. ");

jr_define('_JOMRES_LOGIN_RESET_MESSAGE', 'Якщо ви не знаєте свій пароль, ми можемо надіслати вам електронний лист для зміни пароля. Будь ласка, дотримуйтесь інструкцій у цьому листі, щоб скинути пароль.');
jr_define('_JOMRES_LOGIN_RESET_BUTTON', 'Забули пароль?');

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Анонімізувати своє ім\'я?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Якщо ви вирішите анонімізувати своє ім\'я під час перегляду, ми будемо використовувати ваші ініціали.');
jr_define('ANONYMOUS', 'Anon');
jr_define('_JOMRES_REVIEWS_REPLY_SAID', 'сказав');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Відповісти на цей огляд');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Введіть свою відповідь на цей відгук тут.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Ваша відповідь');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Основний огляд');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Відповідь на огляд збережено');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Перш ніж надіслати відповідь на перевірку, ви повинні прочитати наступне. Надсилаючи відповідь, ви підтверджуєте, що погоджуєтесь з цими умовами та положеннями.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Які наші рекомендації щодо відповіді на огляд?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Ви відповідаєте на перевірку свого майна. Ви <em> не повинні </em> використовувати свою відповідь як комерційний процес оскарження. Якщо вам потрібно повідомити про огляд, ви повинні скористатися "Звітом" Кнопку "Переглянути" на сторінці, а не на цій сторінці відповіді на огляд. ');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Після того, як ви залишите свою відповідь, ви не зможете її редагувати.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Дозволено та заохочено');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Повна відповідь на огляд. </li>
    <li> Ввічливість і чесність. </li>
    <li> Розумні відповіді на питання рецензента (пам’ятайте, що інші можуть мати подібні проблеми, але не скористалися можливістю написати відгук). </li>
    <li> Заохочуйте гостя зв’язатися з вами безпосередньо для вирішення проблем.
    <li> Завжди пам’ятайте, що ваші відповіді побачать майбутні гості. Будьте завжди професійними. </li>
</ul>
');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Не дозволено');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Комерційні спори. </li>
    <li> Запитання рецензенту чи іншим. </li>
    <li> Сумнівна мова (включаючи лайки). </li>
</ul>
');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Останній запуск');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Розклад');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Номери рахунків -фактур');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Використовувати власні номери рахунків -фактур?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Ви можете налаштувати систему на використання власних номерів рахунків. Це вплине лише на нові рахунки.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Початковий номер');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Номери створюються послідовно. Яким має бути перше число?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Який формат повинен мати номер рахунку?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Налаштуйте тут формат номера рахунка -фактури. Формат може мати вигляд {N}/{D} або {N}/{Y}, де N - автоматично згенерований номер, D = дата у форматі РРРРГММДД ( 20190131) або Y = РРРР (2019). Будь-які інші буквено-цифрові символи, які не входять у фігурні дужки, залишаться окремими, тому шаблон, схожий на {N}/{D} -L, призведе до номера рахунка-фактури (21), що виглядає приблизно як 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Доплата');
jr_define('_JOMRES_SURCHARGE_DESC', 'Додаткова плата, яка буде додана до номера під час бронювання (розраховується за день)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Це можна змінити, якщо додати до білого списку, тому сайт "Найкращий у світі сайт бронювання" змінить це на "WBBS" або подібний.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Бібліотечні пакети');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Модулі постачальника та вузла-це окремі (безкоштовні) пакети для Jomres. Ви можете повторно встановити пакети на цій сторінці.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Перевстановити бібліотечні пакети');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Випадкові адреси електронної пошти');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Пропонувати випадкові листи');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Ви можете дозволити системі генерувати випадкові адреси електронної пошти у спливаючому вікні швидкого бронювання на інформаційній панелі. Це дозволяє адміністраторам і реєстраторам створювати бронювання для гостей, для яких у них немає електронних адрес, це призначено для роботи як заощадження часу для сайтів з багатьма адміністраторами/менеджерами, які розуміють, що ці випадкові електронні листи ніколи не будуть використовуватися для справжнього спілкування, мета полягає в тому, щоб обійти той факт, що в Джомресі всі гості повинні мати адреси електронної пошти. Ви також повинні надати домен у наступне поле. ');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Домен випадкових листів');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Це не повинен бути звичайний домен електронної пошти, такий як gmail або outlook. Натомість це може бути або ваш власний домен, або щось зовсім інше, наприклад "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Область завантаження');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'Без ролі користувача');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Ресепшн');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Менеджер нерухомості');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Супер менеджер нерухомості');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Призупинено');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Видалено з CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'Якщо вам подобається Джомрес, залиште відгук на одному з цих сайтів');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'Я хороша людина, я вже залишив відгук');

jr_define('_LICENCE_PROMPT_DEAR', 'Шановний');
jr_define('_LICENCE_EXPIRED', ', термін дії вашого ліцензійного ключа Jomres закінчився, тож вам не вистачає цих чудових функцій та переваг!');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Оновлення плагінів та нові випуски плагінів');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Лише для ексклюзивних користувачів, електронна пошта/підтримка квитків');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Безпечні оновлення Core Jomres');
jr_define('_LICENCE_EXPIRED_POST', 'Зв\'яжіться з нами, щоб отримати безпроблемні платіжні рішення та отримати доступ до всіх плагінів та служб підтримки лише для учасників.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Отримайте доступ до всіх плагінів зараз!');

jr_define('_LICENCE_INVALID_KEY', 'На жаль, здається, ви не використовуєте дійсний ліцензійний ключ Jomres, тому вам не вистачає цих чудових функцій та переваг!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Плагіни </a>, які значно розширюють функціональність Jomres');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Лише для ексклюзивних членів підтримка електронної пошти/підтримка квитків');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Безпечні оновлення Core Jomres');
jr_define('_LICENCE_INVALID_POST', 'Зв\'яжіться з нами, щоб отримати безпроблемні рішення щодо оплати та отримати доступ до всіх плагінів та служб підтримки, призначених лише для учасників.');
jr_define('_LICENCE_INVALID_START', 'Отримайте доступ до всіх плагінів зараз!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Інформаційна панель');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Користувачі');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Комісія');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Підписки');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Рахунки -фактури');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Портал');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Переклади');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Інструменти');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Звіти');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Налаштування');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Довідка');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Загальна кількість властивостей у системі');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Опубліковані властивості');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Неопубліковані властивості');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Затверджені властивості');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Властивості, що потребують затвердження');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Всього оглядів');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Неопубліковані відгуки');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Перегляд звітів');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Інформація про систему Jomres');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Тип властивості цієї властивості не опублікований, він може не відображатися в результатах пошуку. Зв'яжіться з адміністратором сайту, щоб опублікувати тип властивості або змінити тип властивості на сторінці Редагувати властивість.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Оновіть тип власності');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Дохід (сплачені суми)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Неможливо видалити властивість властивості');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', 'оскільки він використовується наступними властивостями:');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'Тест API REST');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Ця сторінка виконує базовий тест REST API за допомогою вбудованих функцій у Jomres. Він викликає Jomres REST API, щоб перевірити, чи отримав він дійсну відповідь.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Сервер викликав цю URL -адресу, щоб перевірити, чи відповідь дійсна:');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Сторінка отримала таку відповідь:');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Тест пройшов належним чином, у вас, ймовірно, не буде проблем з отриманням запитів REST API від решти Інтернету.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Тест не вдався, перегляньте поле Response, якщо воно виглядає як багато html, або ви отримали повідомлення 404, то ваш сервер переадресовує виклики на іншу URL -адресу. Це не дозволить вам отримувати API дзвінки. ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Тест синдикації');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Сервер додатків Jomres зберігає список усіх сайтів Jomres. Це дозволяє нам створювати мережу синдикації. Ця мережа призначена для того, щоб наші користувачі могли відображати властивості та інші сайти, особливо для нових сайтів, для створення присутності SEO в мережі. Мета - усі сайти Jomres працювати разом, будуючи довіру до мережі. Ця послуга не стягується. ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Ваш сайт наразі не вказаний на сервері додатків Jomres, який є частиною мережі розповсюдження. Цей сервер знову спробує додати цей сервер до мережі на наступній сторінці 6, кілька завантажень сторінок, це не змінюється, будь ласка, перевірте, чи перевірка на підключення вище проходить тести. Зверніть увагу, що локальні сервери не можна додавати до мережі. ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Вітаємо, ваш сервер вказаний на сервері додатків Jomres.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Об\'єднані властивості');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Ось деякі інші властивості, доступні з нашої мережі власності');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Статистика синдикації');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Вітаємо, ваш сервер зареєстрований у мережі розповсюдження Jomres. Незабаром ваші ресурси почнуть з’являтися на інших сайтах Jomres, якщо вони ще не відображаються.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Ваша установка не є частиною мережі синдикації Jomres, тому ваша власність не відображається на інших сайтах Jomres, і ви не можете скористатися цією безкоштовною рекламою.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Активні установки Jomres:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Загальна кількість установок Jomres, які мають спільний доступ до властивостей мережі синдикації Jomres на своїх сайтах.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Всього властивостей:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Це кількість властивостей, доступних у JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Відображення загальної власності:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Загалом усі випадки, коли властивість Jomres було пов’язано з іншого сайту на основі Jomres.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'Jomres Syndicate Network (JSN) - це безкоштовна функція, доступна всім користувачам Jomres. Її мета - надати вам безкоштовну рекламу вашої нерухомості на інших сайтах Jomres. Мета - допомогти Ви швидко розкриваєте свій сайт, пропонуючи безкоштовну рекламу, щоб ваші об’єкти були визнані та їм довіряють, оскільки вони пов’язані з веб -сайтами з високою впевненістю та високою релевантністю, які вже добре відомі пошуковим системам. Див. це <a href = "https: //www.jomres.net/features/jomres-syndication-network" target="_blank"> стаття на нашому веб-сайті </a> та <a href =" https://www.jomres.net/manual/developers- guide-2/387-jomres-syndication-network" target="_blank"> посібник </a> для отримання додаткової інформації. ');


jr_define('GUEST_PROFILE_INFORMATION', 'Це дані вашого профілю гостя, поля з цим символом <i class = "fa fa-users" aria-hidden = "true"> </i>
є загальнодоступними, тоді як поля з цим символом <i class = "fa fa-user-secret" aria-hidden = "true"> </i> можна побачити лише ви, ваші господарі та адміністратори сайту. <br/> <br/> Хости можуть бачити приватну інформацію, лише якщо ви вже створили для них бронювання. <br/> <br/> Ваша інформація безпечно зашифрована і зберігається в нашій базі даних за допомогою шифрування AES-256. ');

jr_define('GUEST_PROFILE_OPTIONAL', 'Ці поля є необов\'язковими, проте господарі можуть використовувати цю інформацію, щоб визначити, чи вважають вони, що вони можуть вам довіряти, тому краще додати інформацію. Пам’ятайте, що ви просите залишатися в своєму власності, і вони можуть відмовити вам, якщо вважають, що ви погано підходите або що ваша біографія не містить достатньо інформації. ');

jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Водійські права');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Номер паспорта');
jr_define('GUEST_PROFILE_IBAN', 'номер IBAN');
jr_define('GUEST_PROFILE_ABOUT_ME', 'Про мене');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'Цей розділ "Про мене" доступний для перегляду загальнодоступним, тому не вказуйте приватної інформації. Тим не менш, докладіть максимум зусиль, щоб поділитися своїми захопленнями, тим, що ви заробляйте на життя, ваші захоплення тощо. Ви можете використовувати "Розмітку", щоб надати йому трохи джазу. Господарі захочуть відчути, що вони можуть довірити вам свої властивості. Переконайтеся, що ваше зображення - це справжня картина вас, а не вашої собаки або автомобіль (так, хлопці, ми з вами спілкуємось!). ');

jr_define('GUEST_PROFILE_PREFERENCES', 'Введіть будь -які спеціальні вимоги, такі як спрощення доступу тут. Вони не відображатимуться у вашому загальнодоступному профілі, але вони будуть додані до інформації про бронювання під час бронювання.');

jr_define('VIEW_HOST_PROFILE', 'Профіль хоста');

jr_define('GUEST_PROFILE_TITLE', 'Профіль гостя');
jr_define('GUEST_PROFILE_TITLE_MY', 'Мій профіль');

jr_define('GUEST_PROFILE_WELCOME', 'Привіт, дозвольте мені розповісти трохи про себе.');
jr_define('GUEST_PROFILE_MY_NAME', 'Мене звуть');
jr_define('GUEST_PROFILE_I_COME_FROM', 'а я з');
jr_define('GUEST_PROFILE_IN', 'регіон у');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'Моя особиста інформація');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Ми робимо все можливе, щоб перевірити інформацію про гостей та хостів, проте вам слід зробити все можливе і вирішити для себе, чи є ця особа надійною.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'Мої властивості');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Мої відгуки');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Ось що я сказав про цю властивість:');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Я дав цій властивості рейтингову оцінку:');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Мої відгуки');
jr_define('GUEST_PROFILE_OF_ME', 'Що інші говорять про мене');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'Що цей хост сказав про мене');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Переглянути гість');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Мій відгук про цього гостя');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Ось декілька прикладів відгуків гостей, щоб розгорнути м\'яч: <br/>

<ul>
<li> (ім\'я гостей) було приємно проводити! Вони залишили простір чистим і протягом тижня були тихими. Вони мали безперебійне спілкування, і я з нетерпінням чекаю, що вони знову залишаться зі мною! </li>
    <li> Мені сподобалося мати (ім’я гостя), тому що вони вміли поважати це місце з повагою, чудово проводити час і насолоджуватися місцевістю. Вони були чудові з орендою приміщення, і я сподіваюся, що мені вдасться їх знову прийняти. </li>
    <li> Усі мої правила проживання були дотримані (ім’я гостя), і вони з легкістю могли зайти та поїхати. Мені сподобалося, що вони були там, оскільки вони були поважними та тихими. Я дуже рекомендую їх іншим! </li>
</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Вибачте, я не можу знайти цього користувача. Швидше за все, він ще не заповнив дані свого облікового запису.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Гість');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Адміністратор');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres побудований на платформі Bootstrap, тому ви повинні використовувати його для теми на основі Bootstrap. Ми рекомендуємо одну на основі Bootstrap 3. Якщо у вас немає доступу до теми, то ми рекомендуємо вам скористатися тему Джомреса Леотіана для Wordpress, яку можна <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank "> завантажити звідси. </a> ');


jr_define('BOOKING_NOSHOW_MENU', 'Позначити як без показу');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Бронювання позначено як Не показувати');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Бронювання');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'Без шоу');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'Статистика JSN для цього користувача');

jr_define('BOOKING_NOSHOW_INFO', 'Інформація про бронювання та без показу вилучається з Синдикальної мережі Джомреса під час бронювання. Вона береться з анонімізованих даних і може використовуватися вами, щоб вирішити, чи є ризик цього гостя не виконати бронювання. Якщо система повідомляє, що дані невідомі, ймовірно, це тому, що ця система не розпізнається в мережі. ');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Невідомо');

jr_define('CMF_CONFIG_TITLE', 'Framework Management Framework');
jr_define('CMF_CONFIG_KEY', 'Ключ рамки управління каналом');
jr_define('CMF_CONFIG_KEY_DESC', 'Ліцензійний ключ Framework Management Framework. Вам потрібно буде надати цей ключ, щоб мати можливість завантажувати плагіни Channel Management Framework.');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Ваше майно не затверджено');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Ваше майно було відхилено. Якщо ви вважаєте, що це було зроблено помилково, зв'яжіться з нами.");

jr_define('_JOMRES_GUESTTYPES_IS_CHILD', "Це тип дочірнього гостя?");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Встановіть для цього значення Так, якщо цей тип гостя буде класифіковано як Дочірній тип гостя.");

jr_define('_JOMRES_GUESTTYPES_INTRO', "Якщо ви хочете стягувати плату з особи за ніч, вам потрібно буде створити деякі типи гостей.");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Ви можете створити скільки завгодно типів гостей, спробуйте створити лише один тип гостя під назвою Дорослий. Залиште всі налаштування за значеннями за замовчуванням. Далі, якщо, наприклад, ви хочете, щоб надайте дітям до 12 років знижку 50%, якщо б ви створили новий тип гостей, і назвіть це Діти до 12 років. Встановіть для параметра Додати відхилення? значення - (мінус) і встановіть значення Відхилення на 50. Це означає, що коли дітей додають до бронювання, з них стягується 50% вартості номера. ");

jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Встановити ціни вручну");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Встановити мінімум ночей вручну");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Встановити мінімальну кількість ночей");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Встановити <em> ціну за ніч </em> за день тижня");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Встановити <em> ціну за ніч </em> за діапазон дат");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Встановити <em> мінімум ночей </em> за діапазон дат");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Вибір дати та введення курсу дозволяють встановити одну ціну для певного діапазону дат. Виберіть дату початку та завершення, введіть ціну та натисніть кнопку Встановити ціну за ніч.");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Вибір дати та введення мінімальних ночей дозволяють вам встановити одне значення для мінімальних ночей для певного діапазону дат. Виберіть дату початку та завершення, введіть число мінімальних ночей та натисніть Встановити  мінімум ночей.");

jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Використовуйте це спадне меню для переходу від встановлення цін для окремих дат до встановлення мінімальних ночей для окремих дат. Ви можете скористатися засобом вибору <em> по днях тижня </em>, <em> по даті діапазон </em> вибору або встановити ціни/мінімальну кількість ночей, відредагувавши дати вручну. ");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Використовуйте це спадне меню для зміни цін на окремі дати, на встановлення мінімальних ночей для окремих дат. Ви можете скористатися засобом вибору <em> за діапазон дат </em> або встановити ціни/мінімальні ночі за вручну редагувати дати. ");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Встановити ціни або мінімальну кількість ночей");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Встановити <em> мінімальну кількість ночей </em> за днями тижня");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Поля День тижня дозволяють встановити мінімальну кількість ночей для певного дня тижня. Після натискання кнопки День тижня для всіх днів тижня буде встановлено цю мінімальну кількість ночей. ");


jr_define('_JOMRES_MICROMANAGE_MANUALLY', "Встановити ціни вручну/мінімальну кількість ночей");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES', "Встановити ціни");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS', "Встановити мінімальну кількість ночей");

jr_define('_JOMRES_MICROMANAGE_PRICE', "За ніч");
jr_define('_JOMRES_MICROMANAGE_MINDAYS', "Мінімум ночей");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS', "Максимум ночей");

jr_define('_JOMRES_MICROMANAGE_INTRO', "Тут ви можете створити свої тарифи, які асоціюються з типами номерів, які є у вашій власності.");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Найчастіше використовувані параметри");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Інструкції");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Якщо ви хочете додати різні ціни для різної кількості гостей, <em> ви можете створити більше кількох тарифів для кожного типу номеру </em> і мати різні значення мінімальних/максимальних гостей у цих тарифах. ");
	jr_define('_JOMRES_MICROMANAGE_INFO', "Дайте назву тарифу, визначте максимальну кількість ночей, а також мінімальну та максимальну кількість гостей, які вимагаються у формі бронювання, перш ніж буде запропоновано тариф.<br/><br/> Використовуйте панель вибору дати, щоб додати ціни та налаштування мінімальної кількості ночей до діапазону дат або безпосередньо редагувати введені дані.Якщо ви не бажаєте, щоб тариф взагалі пропонувався на певні дати, залиште ціну 0 (нуль) на на ці дати. <br/><br/> Ви можете мати різну мінімальну кількість ночей на різні дати, тому, якщо ви бажаєте довші бронювання протягом тижнів фестивалю/конференції, ви можете встановити вищу мінімальну кількість ночей лише в ці періоди.<br/ ><br/>Якщо ви стягуєте плату за особу за ніч (PPPN), ви можете ввімкнути це налаштування в Налаштуваннях > Конфігурація власності > вкладка Тарифи та валюта.");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Додаткові параметри");

jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Це додаткові параметри, які не так часто використовуються, але тим не менш доступні для вас. <br/> <strong> Ігнорувати PPPN </strong> означає ігнорувати людину за ніч. Ви можете мати кілька різних тарифів для одного типу номеру, наприклад, один з яких стягується з особи за ніч, а інший - ні. <br/> <strong> Дозволити вихідні </strong> Опція Дозволити вихідні дає вам можливість встановити лише тариф доступний у робочі дні, наприклад, якщо ви хочете мати спеціальний тариф для ділових людей. У такому разі ви б встановили опцію Ні, а мінімальна кількість ночей - 1, а максимальна кількість ночей - максимум 5. <br/> <strong> Вихідні лише </strong> Опція Тільки вихідні - це зворотний варіант Дозволити вихідні. Те, що ви вважаєте вихідними днями, можна налаштувати у налаштуваннях конфігурації власності. Це дає вам можливість визначити тариф лише на вихідні, який ви, можливо, захочете пропозиція для особливих подій. <br/> <strong> День реєстрації за тиждень </strong> Цей параметр дає можливість примусово здійснювати реєстрацію лише в певні дні тижня, і найкраще його використовувати разом із параметром Конфігурація власності> Замовлення> Параметри фіксованих періодів. Більшість користувачів захочуть залишити цей параметр вибраним для всіх. <br/> Останні два варіанти: <strong> Мінімальна кількість кімнат уже вибрано </strong> та <strong> Максимально вибрані кімнати </strong> дуже спеціалізовані та корисно для нерухомості з надзвичайно складними тарифами. <em> Якщо у вас немає особливих потреб, залиште ці варіанти в спокої. </em> Використовуйте їх, якщо ви хочете, щоб цей тариф пропонувався лише тоді, коли гість уже вибрав N кількість номерів у формі бронювання, наприклад Ви можете мати один базовий тариф, де ці опції залишаються за замовчуванням, і другий тариф, де для вибраної мінімальної кількості номерів встановлено значення 1, тоді цей другий тариф буде запропоновано у формі бронювання, як тільки номер буде обрано ");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Ви можете створити декілька тарифів для одного типу кімнати, тому ви можете створити один тариф для мінімальних/максимальних днів 1 - 7 та другого тарифу, де мінімальні дні складають 7, макс. дні 14 та тощо. Це дозволяє створювати схеми ціноутворення настільки прості або настільки складні, наскільки це потрібно. Це також дозволяє створювати кілька тарифів з різними умовами, тому ви можете мати другий набір тарифів, де ціна на ліжко та сніданок нижча, а також ще один набір дорожчих тарифів на ночівлі, сніданки та вечері ");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Встановити лише дні вибору дати");
jr_define('_JOMRES_PROPERTY_HCATEGORIES', 'Категорії власності');
jr_define('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Редагувати категорію власності');
jr_define('_JOMRES_STOP_READTHISFIRST1', "Стоп!");
jr_define('_JOMRES_STOP_READTHISFIRST2', "Дякуємо за встановлення Jomres");
jr_define('_JOMRES_STOP_READTHISFIRST3', "Управління майном здійснюється на загальнодоступних сторінках, а не в області адміністратора.");
jr_define('_JOMRES_STOP_READTHISFIRST4', "Якщо ви не знайомі з Jomres, відвідайте розділ Довідка> Сторінка початку роботи.");


jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE', "Приєднатися до синдикату Джомреса");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC', "Як тільки ви налаштуєте свій сайт і будете готові приймати відвідувачів, приєднайтесь до синдикату Jomres.net і отримайте свою нерухомість у списку на інших сайтах Jomres.");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Вам потрібна принаймні одна кімната одного з наступних типів, перш ніж ви зможете створити тариф:");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Перейдіть до Налаштування> Кімнати і спершу створіть кімнату, як тільки ви це зробите, ви зможете створити тариф для цього типу кімнати.");
jr_define('JOMRES_PLATFORM', "Платформа Джомреса");


jr_define('JOMRES_PLATFORM_CONNECTED', "Підключено");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC', "Встановіть для цього значення Так, якщо ви вже підключили свій обліковий запис Stripe до платформи Jomres.");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID', "Номер облікового запису Stripe Live");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Це ваш ідентифікатор облікового запису Stripe, який можна знайти на інформаційній панелі Stripe у розділі Налаштування> Інформація про обліковий запис і виглядає як acct_xxxxxxxxx) Ви використовуєте це поле, якщо у вас є кілька установок Jomres і ви хочете використовувати той самий обліковий запис у всіх усі веб -сайти, і ви вже під’єдналися до нас. Якщо ви не підключалися до платформи Jomres, недостатньо вводити свої дані тут. Натомість перейдіть до пункту Підключитися на панелі інструментів у розділі Довідка. Якщо ви хочете, для перевірки платежів, на вкладці Налагодження Конфігурації сайту встановіть свій сайт від Версії до Розробки. ");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Смуга секретного ключа");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Перейдіть до Розробники> Ключі API на інформаційній панелі Stripe, щоб знайти ваші секретні ключі. Вони використовуються системою для перевірки дійсності даних бронювання, повернених із форми оплати, і що депозити були сплачені перед збереженням бронювання. . ');

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY', "Секретний ключ перевірки смуги");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Стандартний тарифний режим');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Спи');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'Скільки людей може розмістити ця нерухомість?');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Кількість гостей у вашій денній ціні');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Ціна для дорослих');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Діти');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'На особу за ніч?');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 -денний модифікатор');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Знижка на денну ставку, якщо бронювання триває 7 днів або більше. Залиште це значення нульовим, якщо ви не хочете, щоб застосовувалася знижка.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 -денний модифікатор');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Знижка на денну ставку, якщо бронювання діє протягом 30 днів або більше. Залиште це значення нульовим, якщо ви не хочете, щоб застосовувалася знижка.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Дорослі');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Ціна з розрахунку на 2 дорослих');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Бронювання зі знижкою');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'to');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'оскільки бронювання перевищує 7 днів.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'оскільки бронювання більше 30 днів.');


jr_define('JOMRES_CITY_TAX_HEADING', 'Міські податки');
jr_define('JOMRES_CITY_TAX_VALUE', 'Вартість міського податку');
jr_define('JOMRES_CITY_TAX_METHOD', 'Метод розрахунку податку');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Єдиний внесок');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'За ніч');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'На гостя');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'За гостя за ніч');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Відсоток вартості бронювання');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'Плата за прибирання');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'Вартість плати за прибирання');


jr_define('JOMRES_COMPATABILITY_MODE', 'Примусовий режим конфігурації властивостей сумісності?');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "Режим конфігурації властивостей сумісності змушує відбуватися кілька речей. У старих версіях Jomres менеджери майна могли вибирати, який режим редагування тарифів використовувати, а також різні інші налаштування (деякі з яких можуть виглядати заплутаними)) Увімкнення Конфігурації сумісності змушує всі нові властивості використовувати лише стандартний режим редагування тарифів, який моделює функціональні можливості конфігурації ресурсу booking.com щодо ціноутворення, дочірнього ціноутворення тощо. .0, цей параметр має бути встановлено на Так, але для старих установок ви вирішуєте, чи слід автоматично встановлювати нові властивості в режим сумісності при їх створенні. ");
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', 'Чи приймаєте ви дітей віком до 18 років?');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Встановіть для цього параметра Так, якщо ви дозволяєте дітям. Якщо так, то в меню Налаштування у вас буде параметр Політика для дітей, де ви можете редагувати параметри, пов'язані з дітьми.");

jr_define('JOMRES_POLICIES_CHILDREN', 'Політика щодо дітей');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'В якому віці дозволено дітям?');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'На дитину за ніч');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'На дитину за все перебування');

jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Тарифи на дітей');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Нова дочірня ставка');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Редагувати дочірню ставку');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Створіть тут безкоштовні або платні дочірні тарифи. Тарифи будуть застосовуватися лише тоді, коли ви створили рівні зайнятості для типів номерів.');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Вік від');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Вік до');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'за ніч або за все перебування?');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Тариф');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Якщо нуль або не встановлено, діти цього вікового діапазону будуть безкоштовними.');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Віки під час реєстрації');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Віки');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Рівні зайнятості');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Максимальна кількість дорослих');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Максимум дітей');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Максимальна кількість людей');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Редагувати рівень зайнятості для:');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Редагувати рівень зайнятості для цього типу номеру. Не включати гостей, які сплять на дитячих ліжечках (їх додають шляхом створення додаткової послуги)');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Скільки потрібно стягнути з кожної додаткової дорослої людини?');

jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'Ви ще не налаштували дочірні тарифи.');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Встановити дочірні тарифи');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Ви налаштували свою власність, щоб дозволити дітям, але ви ще не встановили жодного рівня зайнятості для дітей.');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Встановити рівні зайнятості');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'Кожного разу, коли ви редагуєте кімнату або тип власності, ви повинні перевірити та оновити рівень зайнятості вашого майна/номерів, оскільки це впливає на кількість гостей, яких можна прийняти у формі бронювання.');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Дорослі');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Children');


jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Рівень параметрів адміністратора');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres має багато варіантів меню та конфігурації, які можна використовувати під час налаштування вашого сайту. Значну більшість із них вам ніколи не доведеться змінювати, тому вони приховані за замовчуванням. Ви можете вибрати, щоб показати ці параметри, встановивши рівень параметрів адміністратора. Базовий рівень показує лише те, що вам потрібно під час першого налаштування сайту. Загальний рівень показує ті параметри, які найчастіше змінюються, а все - усі можливі параметри та параметри меню в області адміністратора. ');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Основні');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Загальне');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Все');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Чи можемо ми збирати інформацію про те, як ви використовуєте Jomres?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Ми хотіли б зібрати інформацію про те, як ви використовуєте Jomres. Ніяка особиста інформація не буде зберігатися, використання буде анонімізовано та буде використовуватися лише для того, щоб ми зрозуміли, як люди використовують Jomres.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Так, це нормально');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Ні, я не згоден');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Чи будете ви брати бронювання для більш ніж однієї нерухомості?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres можна використовувати для сайтів з однією або кількома властивостями. Якщо ви будете брати бронювання лише для однієї власності, то багато варіантів будуть зайвими та потенційно заплутаними. Ви можете змінити це налаштування пізніше в Налаштування> Сайт Конфігурація> Вкладка функціональності порталу. ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Лише одна властивість');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'Я буду перераховувати кілька властивостей');


jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Яку версію платформи Bootstrap підтримує ваш шаблон/тема?");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Кожна версія платформи Bootstrap вимагає дещо іншої розмітки HTML. Jomres має три набори сумісних шаблонів Bootstrap, по одному для кожної версії Bootstrap. Ви повинні переконатися, що ви її налаштували для використання відповідного набору шаблонів. тоді ви не виводите такі дані, як макет, модальні режими та меню, які не працюватимуть належним чином. Якщо ви вирішите пізніше використовувати шаблон/тему з іншою версією Bootstrap, ви можете змінити набір шаблонів Bootstrap, який Jomres повинен використовувати в Admin> Jomres> Settings > Різне. <br/> <br/> За замовчуванням Joomla 3 розповсюджується з Bootstrap 2, Joomla 4 буде використовувати Bootstrap 5. Шаблон Jomres Leohtian (Joomla) і тема (Wordpress) використовують Bootstrap 3. Можуть бути різні шаблони/теми розповсюджуються із власними файлами Bootstrap, тому, якщо у вас є сумніви, зверніться до розробника вашого шаблону/теми. ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Вилучити десяткові дроби від цін на продукцію?');

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Застосувати групу за виправленням?');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Деякі установки mysql можуть мати проблеми з запитами Jomres на сторінці Властивості списку, Список гостей та Список рахунків -фактур. Якщо ці сторінки говорять, що вони показують результати X із Y, але у списку нічого не відображається, то налаштуйте цей варіант на Так може вирішити проблему. Це не станеться, якщо ви перебуваєте на спільному хостингу, а служба хостингу не дозволяє вашому користувачеві mysql видавати команду "SET GLOBAL sql_mode =". ');
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Це властивість каналу, його неможливо адмініструвати локально, відвідайте сторінку фреймворка управління каналом, щоб знайти посилання для віддаленого адміністрування властивості');

jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Немає завантаження в темі");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Посилання на соціальні мережі');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Введіть тут імена своїх акаунтів у соціальних мережах, наприклад, "jomres", а не всю URL-адресу');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Список мов, якими володіє ваша організація, розділений комами');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'URL-адреса логотипу вашої організації');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres оновлено');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Доступна нова версія Jomres. Ви повинні оновити, перш ніж ви зможете продовжувати використовувати Jomres, оскільки оновлення покращують функціональність і гарантують, що ваше встановлення залишається безпечним.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Оновити Jomres зараз');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Оновлення плагіна');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'У диспетчері плагінів доступні нові версії плагінів. Ви повинні оновити всі плагіни, перш ніж ви зможете продовжувати використовувати Jomres, оскільки оновлення покращують функціональність і гарантують, що ваше встановлення залишається безпечним.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Плагіни для оновлення');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Якщо ваша ліцензія більше не дійсна, ви можете отримати новий ліцензійний ключ на нашому веб-сайті.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Оновити плагіни');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Отримати новий ключ');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Зберегти новий ключ');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES', "Зображення типів властивостей");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE', "Потрібна допомога з бронюванням?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB', "Зателефонуйте нашій службі обслуговування клієнтів за номером нижче, щоб поговорити з одним із наших представників, який допоможе вам з усіма вашими потребами у відпустці.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE', "Чому бронювати у нас?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', "Ми пропонуємо найкращі ціни на бронювання");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', "На даний момент у нас найкращі ціни на нерухомість.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', "Без плати за бронювання. Економте гроші!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', "Великий вибір властивостей");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', " властивості");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', " відгуки гостей");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', "Ми завжди тут");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "Зателефонуйте нам або напишіть нам у будь-який час");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', "Отримайте цілодобову підтримку до, під час і після поїздки");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', "Соціальні мережі");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', "Знайди нас у соціальних мережах");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Видатно");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Винятково");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Чудово");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Чудово");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Фантастичний");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Дуже добре");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Добре");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Новий список");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Знижка");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Куди ви хочете піти?');
	jr_define('DATA_SOURCES_TITLE', "Оновити джерела даних");
	jr_define('DATA_SOURCES_TITLE_INFO', "Джерела даних оновлено. Джерела даних використовуються для автозаповнення полів введення в віджеті пошуку, і зазвичай вони оновлюються автоматично, однак ця сторінка змушує оновлювати дані вручну, якщо потрібно.");

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "Щоб надіслати запит на маркер, надішліть запит на цю URL-адресу");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "Сценарій властивостей головного перегляду");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "Ідентифікатор властивості властивості, яку потрібно переглянути");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "Шаблон за замовчуванням — property_details.html, за допомогою цього аргументу ви можете визначити інший шаблон інформації про властивість для показу.");

	jr_define('JOMRES_UPDATES_TITLE', 'Оновлення Jomres');
	jr_define('JOMRES_UPDATES_INFO', "Ця сторінка може завантажити та встановити найновішу версію Jomres для вас. Вона використовує власні функції, а не функції хоста CMS, тому, якщо під час оновлення хоста CMS виникне проблема, ви можете використовувати цю сторінку для примусово переінсталювати найновішу версію Jomres.");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'Менеджери властивостей можуть використовувати режим редагування в інтерфейсі для налаштування рядків для кожного ресурсу, однак це може працювати, лише якщо для параметра постійного посилання WordPress встановлено значення Звичайне (http://www.domain.com/?p=123). Після того, як ви це зробите, користувачі інтерфейсу зможуть налаштовувати рядки, такі як назви кімнат та інші мітки, які є специфічними для унікальних властивостей. ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'Режим редагування етикеток');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'Ця функція використовується для зміни міток елементів, як правило, різними мовами.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'Режим редагування дозволяє перейменовувати мітки, які є унікальними для окремих властивостей. Коли ви використовуєте режим редагування для перейменування мітки, зміна відображатиметься лише в цьому списку властивостей. Наприклад, для однієї властивості, яку ви хочете використовувати слово "Ціни", а на іншому - слово "Тарифи". Не всі мітки можна змінити, наприклад, назви типів номерів є мітками для всього сайту, тому їх не можна змінити, але зазвичай все, що є унікальним для окремої власності можна змінити.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'Якщо сайт підтримує кілька мов, використовуючи одну мову, ви можете створити елемент, унікальний для окремої властивості. Коли ви потім змінюєте активну мову, ви можете використовувати режим редагування, щоб перейменувати цю мітку, введення відповідного перекладу поточною мовою. Ви можете продовжувати змінювати активну мову, щоб ввести відповідний переклад для цієї мітки для кожної мови, яку підтримує сайт.');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'Перемикач режиму редагування міток');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'На цьому знімку екрана ми бачимо перемикач режиму редагування. Режим редагування ВИМКНЕНО, а мітки виглядають як звичайні: ');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'Режим редагування міток увімкнено');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'На цьому знімку екрана ми бачимо, що в режимі редагування мітки, які можна перейменувати, виділені:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'Виберіть елемент, який потрібно змінити');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'Коли мітку вибрано, з\'являється спливаюче вікно:');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'Змінити мітку');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'Використовуйте маленьку форму, щоб змінити мітку. Натисніть галочку, щоб завершити, або клацніть X, щоб скасувати редагування:');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'Мітка змінена');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'Якщо ви збережете зміни, мітка оновиться на сторінці. Ви можете вимкнути режим редагування зараз:');

	jr_define('JOMRES_TRANSLATIONS_TITLE', 'Переклади');
	jr_define('JOMRES_TRANSLATIONS_LEAD', 'На цій сторінці ви можете перекладати мітки з однієї мови на іншу. Коли ви відвідуєте сторінку, ви побачите рядки, які ви вже створили, і їх значення на мові, яку ви зараз використовуєте. Угорі встановіть цільовою мовою, потім для міток, які ви хочете перекласти, натисніть на мітку, і спливаюче вікно дозволить вам ввести новий переклад. Для довших рядків тексту ви можете вставити текст з іншого джерела. Пам’ятайте, що будь-який HTML буде видалено .<br/>
Ви можете залишити цільову мову, встановлену для вашої поточної мови, і використовувати цю сторінку для перейменування елементів тут, замість того, щоб відвідувати їх окремі сторінки.');
	jr_define('JOMRES_TARGET_LANGUAGE', 'Цільова мова');

	jr_define('API_CLIENTS_INFO', 'Клієнти API — це пари ідентифікатор клієнта/секретний ключ, які дозволяють віддаленим системам використовувати функції API, на використання яких ви надаєте їм дозвіл. На цій сторінці ви можете створити скільки завгодно пар ключів клієнт/секретний, кожна з будь-яка комбінація дозволів, яка вам потрібна.');
	jr_define('CLIENT_TOKEN', 'Маркер доступу');
	jr_define('CLIENT_TOKEN_INFO', "Маркети доступу можна запитувати за допомогою ідентифікатора клієнта та секрету. Деякі клієнти можуть уже мати маркер доступу, створений для них, у такому випадку ви можете використовувати цей маркер доступу. Якщо ви вважаєте, що маркер міг бути скомпрометовано, або ви просто хочете змінити це, ви можете закінчити термін дії маркерів клієнта. Термін дії всіх маркерів, пов’язаних із парою клієнт/секрет, закінчиться.");
	jr_define('DELETE_TOKEN', 'Термін дії токенів закінчився');

	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_CURRENCY', "Виберіть свою валюту" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_LANGUAGE', "Виберіть свою мову" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER',"Реєстрація");
	jr_define( 'JOMRES_BS5_TOP_PANEL_SIGN_IN', "Увійти");
	jr_define( 'JOMRES_BS5_TOP_PANEL_LIST_YOUR_PROPERTY', "Укажіть свою власність");
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER_FIRST', "Ви повинні спочатку зареєструватися та увійти");

	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_SHOWFILTERS',"Показати фільтри");
	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_HIDEFILTERS',"Приховати фільтри");

	jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES_INFO', "Текст, який відображається на сторінках, зберігається в мовних файлах. Система Jomres для показу мовних рядків на сторінці означає, що вам не потрібно безпосередньо редагувати ці мовні файли. Натомість ви можете редагувати ці рядки на цьому клацніть виділений текст і введіть новий текст, який ви хочете показати, у формі введення, що відкриється. Коли ви натискаєте галочку, ці зміни зберігаються в базі даних. Це означає, що всі ваші зміни зберігаються та не перезаписуються під час оновлення Jomres. Якщо ви хочете змінити текст для різних мов, скористайтеся спадним меню вибору мови вгорі праворуч, щоб змінити поточну мову. Текстові рядки іноді повторюються в різних місцях мовних файлів, оскільки вони використовуються в різних контексти, тому не забудьте скористатися функцією пошуку браузера, щоб переконатися, що ви відредагували правильний рядок. ");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN', "Усе керування властивостями виконується у інтерфейсі вашого сайту. Зараз ви не ввійшли як менеджер власності, тому спочатку увійдіть, а потім ви зможете керувати своїми властивостями.");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN_EXPOSITION_FOR_NEW_USERS_JOOMLA', "Після першого встановлення Jomres він створить Super Property Manager для користувача адміністратора та додасть нову опцію до головного меню під назвою \"Бронювання\". Не видаляйте цей пункт меню. Увійдіть за допомогою наданої кнопки та перейдіть на сторінку сторінку \"Бронювання\", щоб розпочати адміністрування властивостей. ");

	jr_define('_JOMRES_COM_A_GATEWAYLIST_INFO', 'На цій сторінці ви можете налаштувати платіжні шлюзи, через які ви бажаєте отримувати депозитні платежі. Вам знадобиться обліковий запис на платіжному шлюзі. Сторінка налаштувань надасть вам інструкції щодо налаштування шлюзу. Якщо шлюз має тестовий режим, і якщо тестовий режим увімкнено, ви як менеджер нерухомості зможете використовувати платіжний шлюз, щоб перевірити свою конфігурацію. Коли тестовий режим вимкнено, лише користувачі, які не є менеджером, бачитимуть платіжні шлюзи під час процесу бронювання. .');

	jr_define('_JOMRES_COM_A_GATEWAYLIST_TEST_MODE_STR', "Тестовий режим");

	jr_define('JOMRES_ADMIN_UPDATE_NIGHTLY_WARNING', "Режим розробки ввімкнено, тому, якщо ви використовуєте цю функцію, ви оновлюєте свою інсталяцію Jomres до гілки Nightly. Це найновіша версія Jomres, яка може бути стабільною або не стабільною. Якщо ви це зробите не бажаєте оновлюватися до Nightly, будь ласка, перейдіть у «Адміністратор» > «Jomres» > «Параметри» > «Конфігурація сайту» > вкладка «Налагодження» та встановіть параметр «Виробництво/розробка» на «Виробництво».");