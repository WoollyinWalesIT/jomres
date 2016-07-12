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
jr_define( '_JOMRES_COM_MR_QUICKRESDESC', 'Быстрое бронирование' );
jr_define( '_JOMRES_COM_MR_SHOWPROFILES', 'Покажите профили' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC', 'Общая Конфигурация' );
jr_define( '_JOMRES_COM_MR_BACK', 'Назад' );
jr_define( '_JOMRES_COM_MR_YES', 'Да' );
jr_define( '_JOMRES_COM_MR_NO', 'Нет' );
jr_define( '_JOMRES_COM_MR_NEWTARIFF', 'Новый' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTY', 'Новая собственность' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Новая особенность собственности' );
jr_define( '_JOMRES_COM_MR_NEWGUEST', 'Новый гость' );
jr_define( '_JOMRES_COM_MR_SAVE', 'Сохранить' );
// View bookings
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Имя' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Заезд' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Выезд' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Назначьте функции admin на пользователя' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_ID', 'Удостоверение личности' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NAME', 'Имя' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Имя пользователя' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'Уполномочиваемые пользователи' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Собственность по умолчанию' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'Измените это' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Уровень доступа' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Пользователь изменен' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'N/A' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Рецепция' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Менеджер собственности' );
// Edit bookings
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Все заказы' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Новые заказы' );
jr_define( '_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Редактировать Заказ' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'прибытия/отъезды' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Гость' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Комната' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Оплата' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Имя' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Фамилия' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Специальные требования' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Пожалуйста отметьте, что некоторые специальные требования могут подвергнуться наценкам.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Отмените заказ' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Число дома или название' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Улица' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Город' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Почтовый индекс' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Телефонный номер' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобильный номер' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Адрес электронной почты' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Не может отменить этот заказ, поскольку гость уже зарегистрирован' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Депозит не заплаченный' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Подтвердите отмену' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Заказ отменен' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Дни к прибытию' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Тип заказа' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Черный' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Рецепция' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Интернет' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NAME', 'Название комнаты' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Комната' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Этаж' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Доступ для нетрудоспособных людей?' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Макс. число людей' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Тип комнаты' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Описание типа комнаты' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Список особенностей комнаты' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Депозит заплаченный' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Введите депозит' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Общее количество, чтобы заплатить' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Справка депозита' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Заказ' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Депозит' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Депозит записан' );
// Edit Language
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Наши комнаты' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Собственность' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Тип комнаты' );
// Display guest form
jr_define( '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Редактируйте детали гостя' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Имя' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Фамилия' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Дом' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_STREET', 'Улица' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_TOWN', 'Город' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Почтовый индекс' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Телефон' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Мобильный телефон' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FAX', 'Номер факса' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'Номер кредитной карточки' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'Карта была выпущена' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'Карта истекает' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'Число выпуска' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Название на карте' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Сделайте ваш выбор' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Дни, чтобы остаться' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Число гостей' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Общее количество' );
// Rooms tab
jr_define( '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Рассмотрите конфигурацию собственности и комнаты' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Комнаты' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Особенности комнаты' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Типы комнаты' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Собственность' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Особенности собственности' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Комната' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Тип' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Имя' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Число' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Этаж' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Доступ для нетрудоспособных людей?' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Макс. людей' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Особенности' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Комната добавлена' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Редактируйте пункт' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Особенности комнаты' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Описание особенности' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Особенность комнаты добавлена' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Особенность комнаты обновлена' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Тип комнаты' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Сокращение типа комнаты' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Описание типа комнаты' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Тип комнаты добавлен' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Тип комнаты обновлен' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Редактируйте пункт' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Название' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Улица' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Город' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Область' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Страна' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Почтовый индекс' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Телефон' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Факс' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Электронная почта' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Вебсайт' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Особенности' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Собственность добавлена' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Собственность обновлена' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Особенности Собственности' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Сокращение особенности собственности' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Особенность собственности полное описание' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Особенность собственности добавлена' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Особенность собственности обновлена' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Тарифы' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Тарифное название' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Описание' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Действительный от' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Действительный к' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Цена за Ночь' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Минимальные дни' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Максимальные дни' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Минимальные люди' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Максимальные люди' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Тип комнаты' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Игнорируйте PPPN' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Позвольте уикэнды' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Тариф добавлен' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Тариф обновлён' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Редактируйте пункт' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Клонируйте пункт' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Тариф удалён' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Редактируйте тариф' );
jr_define( '_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Выходные дни' );
jr_define( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Заказ сохранен' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Зарегистрируйте гостя' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Отрегистрируйте гостя' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Список заказов' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'НОВЫЕ заказы' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Приборная панель' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Управление Гостем' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Управление Собственностью' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Проверьте пригодность' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Подтвердите ваши детали' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Имя' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Фамилия' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Число дома' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Улица' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Город' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Почтовый индекс' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Номер телефона' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобильный номер' );
jr_define( '_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Нет никаких комнат, доступных способный удовлетворить определённые параметры' );
jr_define( '_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Спасибо за то, что делаете ваш заказ с нами и мы надеемся, что Вы наслаждаетесь вашим пребыванием.<br><br> <b>Пожалуйста отметьте, что это только предварительный заказ, и не будет подтверждён, пока Вы не получите ваше письмо подтверждения от нас.</center>' );








jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Запишите гостя ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Выберите гостя ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Гость зарегистрировался ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'Никакие гости не должны прибыть сегодня' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Выпишите гостя ' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'Никакие гости не должны отбыть сегодня' );
// Config panel
jr_define( '_JOMRES_COM_A_SUPPLIMENTS', 'Приложения' );
jr_define( '_JOMRES_COM_A_TARIFFS', 'Тарифы и Валюта' );
jr_define( '_JOMRES_COM_A_DISCOUNTS', 'Дисконтирование' );
jr_define( '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Загруза изображений' );
jr_define( '_JOMRES_COM_A_CURRENT_SETTINGS', 'Текущие настройки' );
jr_define( '_JOMRES_COM_A_EXPLANATION', 'Объяснение' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Дополнения для одного человека ' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Уверьтесь, что это Да, если Вы хотите взять плату за дополнения для одного человека' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Плата за дополнения для одного человека' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Требуемый депозит - процент?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Требуется депозит быть процентом от полного заказа? Если нет, то применённый депозит будет стоимостью' );
jr_define( '_JOMRES_COM_A_DEPOSIT_VALUE', 'Стоимость необходимого депозита' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER', 'На человека, в ночь' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC', 'Выберите Да, если Вы хотите зарядить "на человека в ночь". Если не, то затраты будут вычислены на основание "в комнату в ночь"' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE', 'Размер файла' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Максимальный размер файла изображения в килобайте' );
jr_define( '_JOMRES_FRONT_MR_BOOKED', 'Заказанная' );



jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Детали резервирования' );






jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Вам напоминают, что заказ - юридически обязательный контракт, так, если по какой-нибудь причине Вы должны отменить или сократить ваш заказ тогда, Вы все еще склонны заплатить полное количество.' );

jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Отмена и обвинения сокращения</i>, Если Вы отменяете ваш праздник отмена, должны быть подтверждены в письменной форме. Платы отмены следующие:' );




jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Дата прибытия к 14 дням' );


jr_define( '_JOMRES_COM_CONFIRMATION_PRINT', 'Напечатайте письмо подтверждения' );
jr_define( '_JOMRES_COM_INVOICE_TITLE', 'Распечатка счета' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS', 'Число ночей: ' );
jr_define( '_JOMRES_COM_INVOICE_CONTRACTAGREED', 'Контракт согласован первоначально: ' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Стоимость в ночь: ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Общее количество' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Спасибо за то, что быть клиентом в' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'Мы надеемся, что мы будем видеть Вас снова.' );
jr_define( '_JOMRES_COM_INVOICE_PRINT', 'Напечатайте счëт' );
jr_define( '_JOMRES_COM_ADDSERVICE_TITLE', 'Добавьте обслуживание к счету' );
jr_define( '_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Описание обслуживания' );
jr_define( '_JOMRES_COM_ADDSERVICE_VALUE', 'Стоимость обслуживания' );
jr_define( '_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Другие объявленные пункты' );
jr_define( '_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Другие объявленные пункты, общая стоимость: ' );
jr_define( '_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Пункт, добавленный к счету' );
jr_define( '_JOMRES_UPLOAD_IMAGE', 'Загрузите изображение' );
jr_define( '_JOMRES_FILE_UPLOAD', 'Загрузка файла' );
jr_define( '_JOMRES_FILE_ERROR_TYPE', 'Вам только разрешают загрузить файлы типа:\n' );
jr_define( '_JOMRES_FILE_ERROR_EMPTY', 'Пожалуйста выберите файл перед загружением' );
jr_define( '_JOMRES_FILE_ERROR_NAME', 'Файл должен только содержать алфавитно-цифровые характеры и никакие интервалы пожалуйста.' );
jr_define( '_JOMRES_FILE_ERROR_SIZE', 'Размер файла превышает максимум, который Администратор установил.' );
jr_define( '_JOMRES_FILE_NOT_UPLOADED', 'Файл, НЕ загружен.' );
jr_define( '_JOMRES_FILE_UPDATED', 'Ваш Файл был загружен.' );
jr_define( '_JOMRES_COM_A_JSCALENDAR', 'JS Календарь' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE', 'JS Календарный языковой файл' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Выберите языковой файл, который должен использоваться в календаре Javascript. Пожалуйста отметьте, что некоторые из календарей могут быть дефектными, См. http://sourceforge.net/tracker/?group_id=75569&atid=544287 за дополнительной информацией' );
jr_define( '_JOMRES_COM_A_CALENDARCSS', 'JS Календарный файл CSS' );
jr_define( '_JOMRES_COM_A_CALENDARCSS_DESC', 'Выберите файл CSS, который должен использоваться в календаре Javascript' );
jr_define( '_JOMRES_COM_A_ODDS', 'Разное' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING', 'Список minicomponent звонки' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING_DESC', 'Переключатель в yes для просмотра журнала minicomponents позвонил в нижней части страницы после Jomres он уже завершен. Он также отключает внутренний редирект функции. Это полезно, если вы пытаетесь определить, какие minicomponents выполняющих определенные услуги.' );
jr_define( '_JOMRES_FILE_DELETE', 'Удалите это изображение' );
jr_define( '_JOMRES_FILE_DELETED', 'Файл удалëн' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETE', 'Удалить' );
jr_define( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Неспособный удалять эту комнату, есть заказы против этого. Отмените те заказы, тогда повторите.' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETED', 'Комната Удалённая' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Удалите особенность комнаты' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Неспособный удалять эту особенность комнаты, это назначено на некоторые комнаты. Удалите особенность из тех комнат и повторите.' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Особенность комнаты удалённая ' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Удалите особенность собственности' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Неспособный удалять эту особенность собственности, это назначено на собственность. Удалите особенность из этой собственности и повторите.' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Особенность собственности удаленная ' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Удалите тип комнаты' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Неспособный удалять этот тип комнаты, это назначено на комнату. Пробуйте повторно назначить комнату на другой тип комнаты, тогда попробуйте ещë раз.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Неспособный удалять этот тип комнаты, это назначено на тариф. Пробуйте повторно назначить тариф на другой тип комнаты, тогда попробуйте ещë раз.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Тип комнаты удалëн' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE', 'Удалите собственность' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETED', 'Собственность удалена' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Вы не имеете право удалить эту собственность.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Ширина полного изображения' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Щёлкните для карты' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Описание собственности' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Времена регистрации' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Деятельности в области' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Направления движения' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Аэропорты' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Другой транспорт' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Политика и правовые оговорки' );
jr_define( '_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Адрес' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Посетители могут заказать онлайн' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Установите это к Да, чтобы гарантировать, что посетители могут заказать комнаты онлайн.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Заказы для фиксированный период' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Если Вы устанавливаете это в Да, то заказы будут взяты в течение фиксированного периода. Если это будет Нет, то гарантируйте, что "определите день прибытия" не установлен в Да (если Вы определённо не хотите вынудить людей прибывать в определённый день), иначе, то Вы не будете получать много связей в календаре пригодности.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD', 'Период заказа: ' );
jr_define( '_JOMRES_COM_A_BOOKING', 'Заказ комнат' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Максимальные периоды, напр. 3x 7 периодов заказа = 21 дни' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Что это - квартира/дом/вилла?' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'Напр. Вы сдаёте в аренду собственность, а не комнаты в той собственности. Если дело обстоит так, то Вы должны удостовериться, что Вы только имеете одну комнату, зарегистрированную для каждой собственности.' );
jr_define( '_JOMRES_FRONT_MR_REVIEWBOOKING', 'Рассмотрите заказ' );
jr_define( '_JOMRES_COM_MR_CONFIRMBOOKING', 'Подтвердите заказ' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'понедельник' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'вторник' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'среда' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'четверг' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'пятница' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'суббота' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'воскресенье' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'пн' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'вт' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'ср' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'чт' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'пт' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'сб' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'вс' );
jr_define( '_JOMRES_COM_A_AVLCAL', 'Кал. пригодности' );
jr_define( '_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Цвет шрифта для текущей даты' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE', 'Цвет шрифта для дней в показе месяца' );
jr_define( '_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Цвет шрифта для дней не в показе месяца' );
jr_define( '_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Цвет фона клетки для дней, когда собственность/комната доступна' );
jr_define( '_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Цвет фона клетки для дней не в показе месяца' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Цвет фона клетки для занятых дней' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Цвет фона клетки для временно заказанных комнат (заказы, для которых не был взят депозит)' );
jr_define( '_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Цвет фона клетки для дат в прошлом' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Занятый/Не доступный' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Доступный для заказов' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Временные заказы' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Предопределённый день прибытия' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Только для сайтов, предлагающих установленные заказы периода. Выберите день, на котором прибытие должно начаться.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Фиксированный день прибытия' );
jr_define( '_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Период пребывания (дни)' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Показать календари пригодности?' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Заставьте это в Да, чтобы показывать календари пригодности' );
jr_define( '_JOMRES_FRONT_AVAILABILITY', 'Пригодность' );
jr_define( '_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Нажмите на свободную дату, чтобы рассмотреть форму заказа.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING', 'Черные заказы' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_NEW', 'Новый Чëрный заказ' );
jr_define( '_JOMRES_FRONT_DELETEGUEST', 'Удалите гостя' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Гость удален' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Неспособный удалять этого гостя, поскольку они имеют заказы, открытые против них. Отмените заказы и попробовать еще раз.' );
jr_define( '_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'Фактическая стоимость комнаты: ' );






jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Курение' );
jr_define( '_JOMRES_FRONT_ROOMSMOKING_EITHER', "Любая" );
jr_define( '_JOMRES_COM_CALENDAROUTPUT', 'Календарный выходной формат' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT_DESC', 'Это позволяет пользователю изменять выходной формат дат в пределах Jomres' );
jr_define( '_JOMRES_COM_CALENDARINPUT', 'Календарный входной формат' );
jr_define( '_JOMRES_COM_CALENDARINPUT_DESC', 'Это позволяет пользователю изменять входного формата дат в пределах Jomres.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Фиксированные заказы периода позволяют короткое пребывание' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Длина короткого пребывания' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISHED', 'Изданный' );
jr_define( '_JOMRES_COM_A_PAYPAL', 'Paypal' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Аудиторский след' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_DATE', 'Дата' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_TIME', 'Время' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_USER', 'Пользователь (имя пользователя)' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_OPERATION', 'Операция' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Рассмотрите детали' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Фильтр на даты' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'Фильтр на имени пользователя' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'Фильтр на операции' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Статус' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Ожидание Прибытия' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Прибудет сегодня' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Текущий Житель' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Отбывает сегодня' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Отъезд запоздалым' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Не прибыл' );
jr_define( '_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Неизвестный пользователь' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM', 'Созданная комната' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Обновлённая комната' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM', 'Удалённая комната' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Созданная особенность комнаты' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Обновлённая особенность комнаты' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Удалённая особенность комнаты' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'Вставленный тип комнаты' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'Обновлённый тип комнаты' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'Удалённый тип комнаты' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Созданная собственность' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Обновлённая собственность' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Удалённая собственность' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'Созданная особенность собственности' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'Обновлённая особенность собственности' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'Удалённая особенность собственности' );
jr_define( '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Отредактированные настройки собственности' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Изданная собственность' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Созданный тариф' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Обновлённый тариф' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_TARIFF', 'Удалённый тариф' );
jr_define( '_JOMRES_MR_AUDIT_ADDSERVICE', 'Добавленный налог обслуживания' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Зарегистрируйте гость' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'Отрегистрируйте гость' );
jr_define( '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Введённый депозит' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_GUEST', 'Созданный гость' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Обновлённый гость' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_GUEST', 'Удалённый гость' );
jr_define( '_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Заказали комната' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Создали екстра' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Обновили екстра' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Удалили екстра' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Издали екстры' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING', 'Введённый черный заказ.' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Удалённый черный заказ.' );
jr_define( '_JOMRES_COM_MR_EXTRA_TITLE', 'Екстры' );
jr_define( '_JOMRES_COM_MR_EXTRA_DESC', 'Описание' );
jr_define( '_JOMRES_COM_MR_EXTRA_NAME', 'Название' );
jr_define( '_JOMRES_COM_MR_EXTRA_PRICE', 'Цена' );
jr_define( '_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Екстра обновленная' );
jr_define( '_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Редактируйте пункт' );
jr_define( '_JOMRES_COM_MR_EXTRA_DELETED', 'Екстра удалённая' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Административные Екстры' );
jr_define( '_JOMRES_COM_A_EXTRAS', 'Показывать екстры во время заказа?' );
jr_define( '_JOMRES_COM_A_EXTRAS_DESC', 'Заставьте это в Да, чтобы показывать любые екстры, что Вы можете желать предложить гостю' );
jr_define( '_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Дополнительные екстры' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Дата начала Черного заказа' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Дата, когда обслуживание возобновляется ' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Черные заказы' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Была ошибка, пытающаяся заказать эти комнаты, одна или больше комнат, которые Вы выбрали, не свободным.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Комнаты, включённые в черный заказ' );
jr_define( '_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'Рассмотрите черный заказ' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Никакие черные заказы, чтобы перечислить' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Число звезд' );
jr_define( '_JOMRES_COM_A_SMOKING', 'Показать выбор курения?' );
jr_define( '_JOMRES_COM_A_SMOKING_DESC', 'Заставьте это в Да показывать курящий выбор.' );
jr_define( '_JOMRES_COM_A_RESET', 'Сброс' );
jr_define( '_JOMRES_COM_A_PAYPAL_CANCELLED', 'Заказ отменен' );
jr_define( '_JOMRES_FRONT_MR_SEARCH_HERE', 'Ищите здесь:' );
jr_define( '_JOMRES_COM_A_SMOKING_OPTION', 'Выбор по умолчанию для курения' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL', 'Символ валюты' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'Напр. &amp;pound&#59; Пожалуйста отметьте, что Вы должны использовать код HTML объектов для необходимого символа. Поскольку список этих объектов пожалуйста посетите <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE', 'Код валюты' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE_DESC', 'Напр. GBP. Это используется в электронной почте клиенту, подтверждающему их заказ.' );
jr_define( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Щёлкните за дополнительной информацией' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Ограничивать прогресс заказов?' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Установите это в Да, если Вы хотите ограничить прогресс заказов (используйте следующую область, чтобы установить предел в терминах дней). Если Вы установите это в да тогда, если пользователь будет пробовать заказать больше чем n дни заранее тогда, то их дата прибытия будет восстановлена к сегодняшней дате' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Дни, которыми ограничены передовые заказы:' );
jr_define( '_JOMRES_COM_A_TAX_WARNING', '<font color=red>ОТМЕТЬТЕ: не рекомендуется, чтобы Вы установили оба из следующих вариантов к Да. Вы должны использовать только одно из двух налоговых вычислений, доступных для Вас. </FONT>' );
jr_define( '_JOMRES_COM_FRONT_ROOMTAX', 'Налог' );
jr_define( '_JOMRES_COM_A_ROOMTAX', 'Налог комнаты' );
jr_define( '_JOMRES_COM_A_ROOMTAX_DESC', 'Разработанный для американского рынка. Они - количества налога комнаты, которые будут заряжать гостю. Вы можете зарядить комбинацию и/или фиксированных и числа процента. Отметьте, что эти налоги только применены к стоимости комнаты.' );
jr_define( '_JOMRES_COM_A_ROOMTAX_FIXED', 'Налог - установленное количество' );
jr_define( '_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Налог - процент' );
jr_define( '_JOMRES_COM_A_EUROTAX', 'Налог' );
jr_define( '_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Налоговый процент' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVE', 'Архивируйте все отчёты' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' отчёты заархивированные' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'Одитер архивировал контрольные отчеты' );
jr_define( '_JOMRES_FRONT_TARIFFS', 'Наши Тарифы' );
jr_define( '_JOMRES_FRONT_TARIFFS_TITLE', 'Тарифное название' );
jr_define( '_JOMRES_FRONT_TARIFFS_DESC', 'Тарифное описание' );
jr_define( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Тип комнаты' );
jr_define( '_JOMRES_FRONT_TARIFFS_STARTS', 'Действительный от' );
jr_define( '_JOMRES_FRONT_TARIFFS_ENDS', 'Действительный до' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN', 'На человека за ночь' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN', 'За ночь' );
jr_define( '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Не включение уикэндов' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINDAYS', 'Минимум дни' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Максимум дни' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Минимум люди' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Мксимум люди' );
jr_define( '_JOMRES_FRONT_PREVIEW', 'Предварительный просмотр' );
jr_define( '_JOMRES_COM_A_EDITINGMODEON', 'Редактирование вкл.?' );
jr_define( '_JOMRES_COM_A_EDITING_CURRENTTEXT', 'Текущий текст' );
jr_define( '_JOMRES_COM_A_EDITING_NEWTEXT', 'Новый текст' );
jr_define( '_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Обновлённый таможенный текст.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Редактируйте Язык' );
jr_define( '_JOMRES_COM_A_AUDITING_SHOWING', 'Число незаархивированных отчетов: ' );
jr_define( '_JOMRES_FRONT_PTYPE', 'Тип недвижимости' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE', 'Список типов собственности' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Редактируйте тип собственности' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE', 'Тип недвижимости' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC', 'Описание типа собственности' );
jr_define( '_JOMRES_COM_PTYPES_SAVED', 'Тип собственности записанный' );
jr_define( '_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'Неспособный удалять тип собственности. Тип собственности назначен на одно или более свойств, пожалуйста повторно назначьте их перед попыткой удалить' );
jr_define( '_JOMRES_COM_PTYPES_DELETED', 'Тип(ы) собственности удалëн' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Остаток, чтобы заплатить' );
jr_define( '_JOMRES_EXTRAS_NOEXTRAS', 'Никакие дополнительные услуги, чтобы добавить к счету' );
jr_define( '_JOMRES_COM_CHARGING_DEPOSIT', 'Депозит' );
jr_define( '_JOMRES_COM_CHARGING_FULLAMT', 'Полное количество' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG', 'Количество, требуемое во время заказа ' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG_DESC', 'Используйте этот выбор решить, какая плата должна требоваться во время заказа. Выберите депозит, если депозит нужно платится, или Полное количество, если полное количество нужно платится.' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW', 'месяцы, чтобы показать' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW_DESC', 'В пригодности комнаты, Сколько месяцев календаря нужно показать?' );
jr_define( '_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'Подписанный от имени ' );
// V1.4
jr_define( '_JOMRES_COM_A_GATEWAYLIST', 'Ворот' );
jr_define( '_JOMRES_COM_A_CANCEL', 'Отменить' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'Пожалуйста выберите комнату(ы), которую Вы желаете вынуть обслуживания, и уместных дат. <br>, Если комната не имеет контрольной метки против этого, это не может быть включено в черный заказ, пока любые выдающиеся заказы не были закончены/отменены. <br/>, Когда Вы выбрали соответствующие даты, щёлкните, синяя кнопка "Примените" чтобы повторно проверить пригодность комнаты. ' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center><b>Это похожо, что Joomla отрегистрировал Вас для бездеятельности </b>, Пожалуйста загрузитесь, и попробовать еще раз.' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'Причина' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Использовать ворот оплаты?' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'Установите это в Да, если Вы хотите использовать ворота оплаты онлайн. <b>Примечание:</b> Это не выключает вычисление депозита, показанное в течение процесса заказа. Чтобы повредить это, Вы можете редактировать шаблоны, которые показывают комнаты и обёртывают элементы, которые обращаются к депозитам в классе, шрифт которого и фоновый цвет - то же самые.' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Пожалуйста выберите ваш метод оплаты.' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', 'Ворота позволяются?' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Измененное урегулирование плагина' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Вставленное урегулирование плагина' );
jr_define( '_JOMRES_FRONT_GALLERYLINK', 'Посмотреть эту недвижимость на веб-сайте' );
jr_define( '_JOMRES_COM_A_GALLERYLINK', 'Внешняя ссылка' );
jr_define( '_JOMRES_COM_A_GALLERYLINK_DESC', 'Укажите ссылку на ваш сайт здесь.' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Рассматриваемая кредитная карточка' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Обновленная кредитная карточка' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'Редактируйте кредитную карточку' );
jr_define( '_JOMRES_COM_A_EDITICON', 'Редактируйте размер изображения' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Загружение сборного изображения собственности' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Изображения уже в директории' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'Демонстрации слайдов' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Показать связь демонстрациям слайдов?' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Показать действующую демонстрацию слайдов?' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Необходимая высота для тамбнейлного изображения демонстрации слайдов' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'Демонстрация слайдов' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Жаль, никакие изображения, доступные для этой собственности. Пожалуйста загрузите некоторые изображения, используя особенность сборного изображения,  если Вы желаете использовать особенность демонстрации слайдов.' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Показать связь тарифам?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', 'Popup позволяются?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Если бы установлено в не, то связи, которые обычно открывались бы в popup, откроются в действующем вместо этого. ЭКСПЕРИМЕНТАЛЬНЫЙ! ' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'Загрузите изображения демонстрации слайдов' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS_INFO', 'Используйте эту форму, чтобы загрузить многократные изображения этой собственности. <br/> <b> Имейте ввиду</b>, что любые изображения с тем же самым названием будут переписаны. Также отметьте, что эта форма не загружает комнату определённые изображения или хедерное изображение собственности, Вы будете должны загрузить их от секция Собственности Admin.<br/><b>Note</b> Изображения, загруженные здесь будут написаны в /images/stories/jomres/*property_uid* папке. Если эта папка не существует, то она будет создана если конечно альтернативная директория не определена в конфигурации.' );
jr_define( '_JOMRES_A_TABS_MISC', 'Основные' );
jr_define( '_JOMRES_A', 'Конфигурация сайта' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'Используйте глобальные особенности собственности' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'Установите это в Да, если Вы хотите вызвать все свойства использовать только особенности собственности, определëнные вебмастером.' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'Чтобы назначить изображение для этой функции необходимо сначала загрузить ваш бизнес характеристика образов в /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ' );
jr_define( '_JOMRES_A_ICON', 'Иконка' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'Выберите ищущую плагину, которою Вы хотите использовать.' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>Жаль, ваш поиск не возвратил никаких результатов. Пожалуйста измените ваш поиск и попробуйте еще раз.</b>' );
jr_define( '_JOMRES_AREYOUSURE', 'Вы уверены, что Вы желаете сделать это?' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Забронировать' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Закажите эту собственность' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'Число безопасности' );
//v1.4c
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Показать тарифы в тексте?' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Адрес' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Подробная информация' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Щёлкните для Комнат и пригодности' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Покажите информацию тарифов' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Покажите информацию Адреса ниже этой связи' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Покажите детальную информацию собственности ниже этой связи' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Покажите комнаты и пригодность ниже этой связи' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Покажите тарифную информацию ниже этой связи' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Тарифы общей тарифной ставки' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Средние числа' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'Выберите модель тарифов, которую Вы хотите использовать' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Вы имеете два выбора тарифных методов вычисления. Первой метод 'общей тарифной ставки' позволяет Вам предлагать множество различных тарифов гостю, и норма для пребывания - то же самое в течение всего времени. Это полезно, если Вы хотите предложить несколько различных тарифов для той же самой даты, напр. тариф Платы за ночь и завтрак и B&B и Вечерний тариф пищи. Выберите тариф 'средних чисел', если Вы хотите приспособить вашего иждивенца цен, в день рассматриваемого. Jomres найдёт все тарифы в течение каждого дня в заказе, добавьте их, вместе и тогда возвратите среднюю норму поперёк периода" );
// v1.4e
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Покажите исходную дату?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Установите это к Нет, если Вы не хотите показать исходную коробку входа даты. Только используйте это, если Вы знаете то, что Вы делаете, поскольку исходная дата в заказах будет всегда собираться день после даты прибытия." );
// v1.4f
jr_define( '_JOMRES_COM_PROPERTYLISTDESC', 'Предел описания' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC_DESC', "Это ограничивает число символов, показанных во внесении в список собственности когда взято из описания собственности." );
// v1.4g+
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE', 'Используйте датовый() стиль формата ?' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Установите  это к Да, чтобы форматировать даты продукции согласно дате() (См. <a href="http://www.php.net/manual/en/function.date.php">Здесь</a>). Заставьте это в No использовать strftime() форматирующий (см. <a href="http://www.php.net/manual/en/function.strftime.php">Здесь</a> eg. %b %d %Y ' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISH', 'Опубликовать' );
jr_define( '_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Снять с публикации' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES', 'Используйте глобальные типы комнаты' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_DESC', 'Установите это к Да, если Вы хотите вызвать все свойства использовать только типы комнаты, определённые вебмастером. Вы должны установить это в Да, если Вы намереваетесь позволить искать через типы комнаты.' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_INFO', 'Чтобы назначать изображение на этот тип комнаты, Вы сначала должны загрузить ваши изображения типа комнаты к папке /images/stories/jomres/rmtypes/. ' );
jr_define( '_JOMRES_COM_INPUTERROR_BACKGROUND', 'Input error background colour' );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES', 'Страна по умолчанию в заказе формы' );
jr_define( '_JOMRES_JAVASCRIPT_', 'Пункты, отмеченные с красной звездой требуются.' );
jr_define( '_JOMRES_COM_SELFREGISTRATION', 'Пользователи могут регистрировать их собственности?' );
jr_define( '_JOMRES_COM_SELFREGISTRATION_DESC', 'Пожалуйста обеспечьте страну и область вашей собственности
Установите это к Да, если Вы хотите, чтобы пользователи были в состоянии регистрировать их собственные свойства без вмешательства admin-a.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'Пожалуйста обеспечьте страну и область вашей собственности.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'Пожалуйста закончите ваши детали собственности.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Пункты, отмеченные с красной звездой требуются.' );
jr_define( '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Созданная собственность' );
jr_define( '_JOMRES_REGISTRATION_NOTALLOWED', "Жаль, Вы не можете создать собственность на этой системе. Вы должны быть загруженным, зарегистрированным пользователем, и Вы, должно быть, уже не создали собственность." );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Созданная собственность: ' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'Для пользователя: ' );
// v1.4i
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR', 'Покажите календарь с начала года?' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Календарь пригодности показывает с начала текущего года.' );
jr_define( '_JOMRES_NUMBEROFROOMSAVAILABLE', 'Число доступных комнат' );
jr_define( '_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Назад к деталям собственности' );
jr_define( '_JOMRES_FRONT_ROOMTYPES', 'Типы комнаты' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Предел случайного поиска' );
jr_define( '_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Покажите google связи преобразования валюты в тарифном внесении в список?' );
jr_define( '_JOMRES_CURRENCYCONVERSIONTEXT', 'Преобразуйте норму в:' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR', 'Позвольте пользователям редактировать с редакторами html?' );
// v2
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS', 'Используйте эту форму, чтобы поместить ваш заказ. Парение курсор мыши по "i" отображает за дополнительной информацией о колонке. Измените ваши подробные сведения заказа как прибытие и исходные даты и числа гостя, затем выберите комнату(ы), которой Вы требуете от списка доступных. Щёлкните любыми доступными комнатами, чтобы добавить их к вашему заказу. Когда сделано, Вы можете добавить любые екстры, что Вы можете требовать и обеспечивать ваши детали адреса. Когда форма имеет достаточно информации, это тогда даст Вам представленную кнопку так, чтобы Вы могли подтвердить ваш заказ.' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Используйте эту форму, чтобы поместить ваш заказ. Парение курсор мыши по "i" отображает за дополнительной информацией о колонке. Измените ваши подробные сведения заказа как прибытие и исходные даты и числа гостя. Когда сделано, Вы можете добавить любые екстры, что Вы можете требовать и обеспечивать ваши детали адреса. Когда форма имеет достаточно информации, это тогда даст Вам представленную кнопку так, чтобы Вы могли подтвердить ваш заказ.' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS', 'Бронирование реквизиты' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Выберите даты Заезда и Выезда' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE', 'Пригодность ' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Выберите номера (комнаты), которые хотите забронировать' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Смотрите здесь, чтобы видеть, доступна ли собственность в это время.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS', 'Дополнительные екстры' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_DESC', 'Выберите любые екстры, которые Вы хотите включить в заказ' );
jr_define( '_JOMRES_COM_PERDAY', 'В ночь' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS', 'Ваш адрес' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS_DESC', 'Пожалуйста войдите в ваши детали. Отметьте, что все области требуются кроме вашего мобильного номера' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Доступные комнаты' );
jr_define( '_JOMRES_AJAXFORM_SELECTEDROOMS', 'Отобранные комнаты' );
jr_define( '_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Самая ранняя дата прибытия: ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM', 'В ночь:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Общее количество:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Екстры:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX', 'Налог:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Скидка:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTAL', 'Общее количество:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Гости' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Щелкните теперь, чтобы добавить эту комнату к вашему выбору' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Щелкните теперь, чтобы удалить эту комнату из вашего выбора' );
jr_define( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Типы гостей' );
jr_define( '_JOMRES_VARIANCES_TYPE', 'Тип' );
jr_define( '_JOMRES_VARIANCES_TYPE_TT', 'Тип клиента, напр. возраст Детей 5-10, или Студент ' );
jr_define( '_JOMRES_VARIANCES_NOTES', 'Примечания' );
jr_define( '_JOMRES_VARIANCES_NOTES_TT', 'Примечания, которые Вы можете хотеть сделать относительно этого типа клиента' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM', 'Максимум' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM_TT', 'Максимальное число этого типа клиента, который может быть отобран в форме заказа' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE', 'Является процентом' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Вычисленное число - процент от Базисной величины, вычисленной для комнаты. Если это установлено к Нет, тогда число Вы определяете просто добавлено или вычтено из основной стоимости комнаты.' );
jr_define( '_JOMRES_VARIANCES_POSNEG', 'Добавьте разницу?' );
jr_define( '_JOMRES_VARIANCES_POSNEG_TT', 'Вычисленное число добавлено к или удалено от Базисной величины, вычисленной для комнаты. Установите это к Нет, если Вы хотите, чтобы это было скидкой из основной фигуры. ' );
jr_define( '_JOMRES_VARIANCES_VARIANCE', 'Разница' );
jr_define( '_JOMRES_VARIANCES_VARIANCE_TT', 'Количество разницы' );
jr_define( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Изменённый заказ типа клиента' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Изданный тип клиента' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Удалённый тип клиента' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Созданный тип клиента' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Обновлённый тип клиента' );
jr_define( '_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Обновлённый тип клиента' );
jr_define( '_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Показывать связь комнате перечисляют в странице деталей собственности?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL', 'Показать <b>только</b> Календарь пригодности/ Список комнаты?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Переключите это к Да, чтобы блокировать показ удара головой собственности и деталей, так, чтобы только календарь списка/пригодности комнат был видимым в секции деталей собственности. Только действительно предназначаемый для свойств пользователей, сдающих в аренду одноместный номер (квартиры, дома и т.д).' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL', 'Минимальный интервал между датой прибытия и исходной датой.' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Минимальный интервал в заказе формируется между датой прибытия и исходной датой.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Overlib в заказе формы показывает число комнаты' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Overlib в заказе формы показывает название комнаты' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Overlib в заказе формы показывает тарифное название' );
jr_define( '_JOMRES_ORDER', 'Заказ' );
jr_define( '_JOMRES_REQUIREDFIELDS', 'Необходимые' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Дни перед прибытием' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Минимальное число дней, которые должны протечь, от "сегодня", перед датой прибытия.' );
jr_define( '_JOMRES_DTV', 'Вариации типа даты' );
jr_define( '_JOMRES_DTV_DOW', 'День недели' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Тип гостя по умолчанию ' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Число по умолчанию сначала первого типа Guest. Если Вы используете типы гостя, то это - число по умолчанию, что первый тип гостя в форме заказа будет собираться.' );
jr_define( '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Зарегистрированные пользователи только могут заказать онлайн?' );
jr_define( '_JOMRES_REGISTEREDUSERSONLYBOOK', 'Жаль, Вы должны быть зарегистрированным пользователем, чтобы заказать онлайн. Щёлкните здесь, чтобы регистрироваться на этом участке. ' );
jr_define( '_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Цвет шрифта для связей к текущим заказам' );
jr_define( '_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Границы уикэнда' );
jr_define( '_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Комната заказана' );
jr_define( '_JOMRES_COM_AVLCAL_BLACK_KEY', 'Чёрный заказ' );
jr_define( '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Окружите депозит к самому близкому целому числу?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Требуйте депозитов?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Тарифные платы сохранены как еженедельные числа?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Вы имеете выбор хранения тарифных обвинений или в ежедневных или в еженедельных стоимостях. Храня их как еженедельно, Вы ДОЛЖНЫ установить этот выбор в Да.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Норма в неделю' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Неподвижные даты прибытия повторно воркуют: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Когда установленные даты прибытия отобраны, даты числа, которые можно показать в падающем списке дат' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Выбор для курения недействителен' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Дата прибытия неправильна' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Исходная дата неправильна' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Заказ слишком короток. Должно быть по крайней мере это много дней между прибытием и исходными датами:' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Ваш интервал' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Неправильный вариант типа гостя' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Выберите ваши числа/тип гостя' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Вы имеете слишком многих в стороне за доступные тарифы' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Вы выбрали больше комнат, чем Вы имеете гостей, нажмите на название комнаты, чтобы удалить это из вашего выбора' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Слишком много гостей для доступных кроватей' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Вы должны выбрать больше комнат' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Выберите номер (комнату)' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Имя требуется' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Фамилия требуется' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Дом № / название требуется' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Улица требуется' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Город требуется' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Область требуется' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Почтовый индекс требуется' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Страна требуется' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Номер телефона требуется' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Мобильный № требуется' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Адрес электронной почты требуется' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'Адрес электронной почты не действителен' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'Неспособный утверждать домейн электронной почты' );
jr_define( '_JOMRES_SRP_WEHAVEVACANCIES', 'Мы имеем вакансии!' );
jr_define( '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Никакие комнаты не были отобраны все же' );
jr_define( '_JOMRES_BOOKING_NUMBER', 'Заказ №' );
jr_define( '_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Хорошо заказывать, фон окна сообщения' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA', 'Выбросить данные шаблона?' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Заставьте это позволять свалку DHTML переменных шаблона для каждого файла шаблона FRONTEND, поскольку та страница рассматривается. Полезный, если Вы хотите видеть, доступен ли определённый элемент, чтобы использоваться в данном шаблоне.' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Число - процент' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Установите это в Да, если единственное число вычисления человека - процент. Если не тогда это будет применено как сумма.' );
//v2rc2
jr_define( '_JOMRES_COM_LIMITROOMSLIST', 'Доступный предел комнат/тарифа' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST_DESC', 'Используйте этот вход, чтобы ограничить число доступных комнат и тарифов, которые перечислены в форме заказа. Установите это в ноль, если Вы не хотите, чтобы ограничение было позволено. ' );
jr_define( '_JOMRES_SRP_WEHAVENOVACANCIES', 'Нет свабодных мест на данный момент!' );
// Introduced in v2.5
// v2.6
jr_define( '_JOMRES_BOOKITNOW', 'Закажите это теперь: ' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Глобальный способ редактирования?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Заботьтесь с этой функцией. Если установлено в Да, то способ редактирования затронет таможенный текст для ВСЕХ свойств в системе для постоянного, которое Вы редактируете.' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Использовать глобальную валюту?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Установите это в Да, чтобы вызвать все свойства использовать ту же самую валюту (напр. & # 8 3 6 4 ;)' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Глобальный символ валюты' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Компонент обернут' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Установите это в Да, если компонент обернут так, чтобы модуль и хедер не должны быть замечены' );
jr_define( '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Супер Менеджер недвижимости' );
jr_define( '_JOMRES_COM_WEEKENDONLY', 'Только по выходным' );
jr_define( '_JOMRES_COM_WEEKENDDAYS', 'Выходные дни' );
jr_define( '_JOMRES_COM_WEEKENDDAYS_DESC', 'Установить выходные дни. Тарифы, разрешить или запретить по выходным будут принимать этот параметр во внимание при формировании списка номеров.' );
jr_define( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Выберите вашу страну, прежде чем добавлять любую информации о недвижимости' );
jr_define( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Сохранить изменения вашей недвижимости перед выгрузкой изображений' );
jr_define( '_JOMRES_TARIFFSFROM', 'Цены от - ' );
jr_define( '_JOMRES_SEARCH_ALL', 'Все' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Страна' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Регион' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Город' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'Особенности' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'Поиск' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'Условие поиска' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Слова для поиска: ' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'Пожалуйста, введите вашего предполагаемого прибытия и даты вылета и нажмите кнопку Найти недвижимость, которая имеет свободные номера на выбранные вами даты.' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'Перечислить все свойства недвижимости.' );
jr_define( '_JOMRES_SEARCH_RTYPES', 'Перечислите всю недвижимость по типу номера' );
jr_define( '_JOMRES_SORTORDER_DEFAULT', 'По умолчанию' );
jr_define( '_JOMRES_SORTORDER_PROPERTYNAME', 'Название недвижимости' );
jr_define( '_JOMRES_SORTORDER_PROPERTYREGION', 'Регион Недвижимости' );
jr_define( '_JOMRES_SORTORDER_PROPERTYTOWN', 'Город Недвижимости' );
jr_define( '_JOMRES_SORTORDER_STARS', 'Статус' );
jr_define( '_JOMRES_PATHWAY_PROPERTYLIST', 'Лист Недвижимости' );
jr_define( '_JOMRES_PATHWAY_PROPERTYDETAILS', 'Детали Недвижимости ' );
jr_define( '_JOMRES_PATHWAY_BOOKINGFORM', 'Форма бронирования' );
jr_define( '_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Обновите ваши детали адреса' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Повторно проверив наличие свободных номеров<br/>(Выбранные номера будут сброшены)' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Повторная проверка доступности' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Изменение ваших дополнительно оплачиваемых услуг' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Изменение выбранного номера' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Обновление вашего адреса' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'К сожалению, одно или несколько полей адресов неверны.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Изображение номера' );
jr_define( '_JOMRES_CURRENCYFORMAT', 'Формат валюты' );
jr_define( '_JOMRES_MANAGEROPTIONSASIMAGES', 'Показать варианты менеджеров в виде изображений' );
jr_define( 'JOMRES_COM_A_SEARCHOPTIONSTAB', 'Параметры поиска' );
jr_define( 'JOMRES_COM_A_AVAILABLELOGS', 'Доступные Журналы' );
jr_define( 'JOMRES_COM_A_LOGS_NOENTRIES', 'Нет записей в журнале. Это нормально, вам нужно вручную изменить jomres.php для запуска ведения журнала' );
jr_define( 'JOMRES_COM_A_MESSAGE', 'Сообщение' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define( 'JOMRES_COM_A_TARIFFMODE_NORMAL', 'Обычный' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Продвинутый' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage' );
jr_define( 'JOMRES_COM_A_TARIFFMODE', 'Тарифы Режим Конфигурирования' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_DESC', "<b>Предупреждение: Переключение между различными тарифными типов может привести к потере данных. Смотрите Примечание ниже относительно этого</b>.
<br/><br/>
У вас есть три вариантов, как настроить свои тарифы.<br/>
Обычный (Normal mode): У вас будет один тариф на каждый Тип номера, который действителен в течение следующих 10 лет.<br/>
Micromanage: Вы можете изменить цену за каждый день за каждый номер / Тип недвижимости. <br/>
Продвинутый: В \"старой\" Jomres метод регулирования тарифов. <br/>
<br/>
Различные тарифные режимы позволяют Вам выбрать способ настройки тарифов, что подходит вам лучше всего.<br/>
Обычный режим является наиболее упрощенным, но это проще понять, потому что это будет перекрестной ссылки номера и тарифы в номер/типы свойств и позволяет настроить номера и цены на одной странице.<br/>
(Micro manage) Микро-управление позволяет изменять уровень ставок на ежедневной основе без необходимости управления тарифов целиком, это делается путем перекрестных ссылок много разных тарифов друг с другом. Это приводит в ряде тарифов, которые созданы для вас с охватом периода времени, но вы можете не тарифы слоя друг над другом.<br/>
Расширенный режим позволяет создать комнату и связать его с типом номера. После этого можно создать тариф и связать ее с номер типа. Используя этот метод можно \"слой\" тарифы друг над другом, например номер типа \"двуспальная кровать\" может иметь один тариф для кровать и завтрак, а другой за кровать, завтрак и ужин. Усовершенствованный способ требует немного больше внимания к деталям, потому что можно дис-кандидат номер или тариф из комнаты/недвижимость Тип, или неправильно установить действительные даты начала и конца, но это даст вам варианты настройки, которые в других режимах не доступны. <br/>
<br/>
Потому что нормальные и регламентации режимов требует определенного набора номера и тарифы для тарифного режима работы системы может потребоваться восстановить некоторые данные, чтобы сделать текущий тариф конфигураций, совместимых с текущей тарифной режим редактирования.<br/>
<br/>
Normal -> Advanced. No change. Действующие тарифы сохраняются.<br/>
Normal -> Micromanage. Все существующие тарифы будут удалены.<br/>
Advanced -> Normal. Все существующие тарифы будут удалены.<br/>
Advanced -> Micromanage. Все существующие тарифы будут удалены.<br/>
Micromanage -> Advanced. Все существующие перекрестные ссылки между тарифами удаляются, но сами тарифы останутся.<br/>
Micromanage -> Normal. Все существующие перекрестные ссылки и тарифы будут удалены.<br/>" );
jr_define( '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Показать список номеров недвижимости на странице деталей недвижимости?' );
jr_define( 'JOMRES_PROPERTYTYPE', 'Тип недвижимости' );
jr_define( 'JOMRES_COM_A_SRPONLY', 'Только SRP' );
jr_define( 'JOMRES_MAXPEOPLEINROOM', 'Макс человек в номере' );
jr_define( 'JOMRES_MAXPEOPLEINBOOKING', 'Макс человек в бронировании' );
jr_define( '_JOMCOMP_BOOKINGNOTES_ADD', 'Добавить заметку' );
jr_define( '_JOMCOMP_BOOKINGNOTES_EDIT', 'Изменить заметку' );
jr_define( '_JOMCOMP_BOOKINGNOTES_DELETE', 'Удалить заметку' );
jr_define( '_JOMCOMP_BOOKINGNOTES_VIEW', 'Посмотреть заметки' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Добавлена новая заметка' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Редактировать Примечание' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Удалено Примечание' );
jr_define( '_JOMCOMP_MYUSER_MENUTITLE', 'Мои варианты' );
jr_define( '_JOMCOMP_MYUSER_LISTBOOKINGS', 'Список Заказов' );
jr_define( '_JOMCOMP_MYUSER_MYBOOKINGS', 'Мои Заказы' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKING', 'Вид Бронирования' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Посмотреть Избранное' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'В избранном пока нет объектов для просмотра!' );
jr_define( '_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Добавить в избранное' );
jr_define( '_JOMCOMP_MYUSER_PROPERTYTYPE', 'Тип недвижимости' );
jr_define( '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'Недвижимость на сайте' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE', 'Хорошая цена' );
jr_define( '_JOMCOMP_WISEPRICE_ACTIVE', 'Active' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC', 'Этот плагин позволяет включить и настроить динамически цены на проживание.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Большинство предприятий будет пересчитывать цены на комнаты, основанны на количество номеров требуемого типа, которые имеются на определенную дату. Это позволяет им предлагать скидки на тип номера, который занят в течение данного периода с целью привлечения бизнеса, которые в противном случае могли бы быть упущены.<br/>Включение и настройка этого плагина позволяет предложить регулируемого ценообразования на основе количества номера выбранного типа предоставляются в собственность на данный день.<br/> Дни границы определяет количество дней, даты прибытия должен быть в пределах до комнаты цены, настраиваемые этой функцией, то проценты опции позволяют настроить процент номеров, которые могут быть в наличии перед данным применена скидка.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD', 'Границы (количество дней между датой прибытия и сегодня)' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Процент номеров заняты 10%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Процент номеров заняты 25%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Процент номеров заняты 50%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Процент номеров заняты 75%' );
jr_define( '_JOMCOMP_WISEPRICE_DISCOUNT', 'Скидка %' );
jr_define( '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' была со скидкой от ' );
jr_define( '_JOMCOMP_WISEPRICE_TO', ' to ' );
jr_define( '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Цена номера без скидки ' );
jr_define( 'JOMRES_COM_A_MAPSKEY', 'Google maps API key' );
jr_define( 'JOMRES_COM_A_MAPSKEY_DESC', 'Получить ключ API Google Maps можете с https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key<a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. После ввода вашего ключа карты здесь, Jomres покажет карту в деталях странице объявлений.' );
jr_define( 'JOMRES_COM_A_USE_SSL', 'Использовать SSL в форме бронирования?' );
jr_define( 'JOMRES_COM_A_USE_SSL_DESC', 'Вы должны убедиться, что у вас есть действительный сертификат SSL для ' );
jr_define( '_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE', 'Активировать?' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Установите yes, если вы хотите предложить горящие туры.' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD', 'Предел' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Если бронирование производится и дата прибытия только N дней с момента бронирования, то скидка может быть применена' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT', 'Скидка' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'В процентах' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Скидка была применена к этому бронированию!' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Стоимость пребывания была сокращена ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Этот отель предлагает в последнюю минуту скидку  ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' процентов, если вы бронируете, чтобы прибыть до ' );
jr_define( '_JOMCOMP_LASTMINUTE_ORMORE', ' процентов или более, если вы бронируете, чтобы прибыть до ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Закажите сейчас, чтобы сделать большую часть этого предложения!' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO', 'Подробная информация о тарифах' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Выберите yes, чтобы показать более подробную информацию о тарифах в сведениях об объекте/тарифах в всплывающем окне' );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG', 'Минимизировать параметры конфигурации' );
jr_define( '_JOMCOMP_AMEND', 'Изменение Брони - Подбор Недвижимости' );
jr_define( '_JOMCOMP_AMEND_SELECTPROPERTY', 'Выберите Новую Недвижимость' );
jr_define( '_JOMCOMP_AMEND_HEADER', 'Первоначальный договор:' );
jr_define( '_JOMCOMP_AMEND_DEPOSITPAID', 'Задаток оплачен' );
jr_define( '_JOMCOMP_AMEND_DEPOSITDUE', 'Задаток не оплачен' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Override Total' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Override Deposit' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define( '_JRPORTAL_CANCEL', 'Отменить' );
jr_define( '_JRPORTAL_CPANEL', 'JRPortal Панель Управления' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE', 'По умолчанию ставка комисси' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Выбрать по умолчанию ставка комиссионного вознаграждения, которое будет применяться к недвижимости в случае, если другой процент комиссии, иначе не установить.' );
jr_define( '_JRPORTAL_CPANEL_LISTCRATES', 'Список комиссии тарифы' );
jr_define( '_JRPORTAL_CPANEL_PATETITLE', 'Комиссия тарифы' );
jr_define( '_JRPORTAL_CRATE_TITLE', 'Заголовок' );
jr_define( '_JRPORTAL_CRATE_TYPE', 'Тип' );
jr_define( '_JRPORTAL_CRATE_VALUE', 'Комиссия тариф' );
jr_define( '_JRPORTAL_CRATE_CURRENCYCODE', 'Код валюты' );
jr_define( '_JRPORTAL_CPANEL_LISTPROPERTIES', 'Список Недвижимости' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Имя недвижимости' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Адрес недвижимости' );
jr_define( '_JRPORTAL_PROPERTIES_LEGEND', 'Недвижимость которая красного цвета, к ним еще не применена комиссия.' );
jr_define( '_JRPORTAL_STATS_PATETITLE', 'Статистика' );
jr_define( '_JRPORTAL_STATS_STATTYPE', 'Статистика для: ' );
jr_define( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Недвижимость - Просмотры' );
jr_define( '_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Вид недвижимости' );
jr_define( '_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Количество заказов' );
jr_define( '_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Стоимость бронирования' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Комиссия оценивают' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Ставка комиссии' );
jr_define( '_JRPORTAL_CPANEL_LISTBOOKINGS', 'Список заказов' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Недвижимости id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Гость id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'Партнерский ID' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Счёт id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Общее бронирование' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Контракт id' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Номер контракта' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Код Валюты' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Созданные' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Архивные' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Дата архива' );
jr_define( '_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Добавить к счету' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Менеджер по счет-фактуре' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'Связанного свойства (если применимо) (if applicable)' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Стоимость' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Описание' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', "Успешно вставить элемент в платежку " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', "Просмотр заказов" );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', "Не удалось вставить элемент в платежку " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "Ошибка, вы не установите значение для счета" );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Вы можете изменить тип языковых файлов недвижимости установив описание имени вложенной папки, например "yachtbrokerage" и копировать языковой файл в эту подпапку. Вы можете изменить язык файла для данного типа недвижимости, так номера становятся, например, DVD-диски и т.д.' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Вы не можете удалить эту недвижимость, так как это единственная недвижимость что у вас есть. Если вы хотите отключить его, пожалуйста, используйте снять с публикации в панели инструментов. ' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'Если это демо установки и вы намерены модернизировать для Jomres Соло (одно только свойство предела) затем вы должны создать новое свойство первого, затем удалить этот один перед сменой лицензионный ключ для Соло лицензионный ключ, который вам будет назначен на покупку. ' );
jr_define( '_JOMRES_COM_EMAILERRORS', "Электронный журнал ошибок сообщений?" );
jr_define( '_JOMRES_COM_EMAILERRORS_DESC', "Установите yes, если вы хотите скопировать jomres.net автоматически при возникновении ошибки в журнале создается сообщение. Это позволяет нам не стоять на месте в нашем подходе к решению потенциальных проблем, надеюсь решении любых вопросов, прежде чем вы даже знать о них. Обратите внимание, эта функция отключена на 'localhost'. " );
jr_define( '_JOMRES_COM_ISTHISANMRP', "Благодаря этому свойству гостиницы/кровать и завтрак/гостевой дом/пенсии? " );
jr_define( '_JOMRES_COM_ISTHISANMRP_DESC', "Параметры настройки отличаются в зависимости от того, если вы сдаёте в аренду помещения в недвижимости, или в всю свою недвижимость целиком. Выберите ППМ (MRP), если вы предлагаете номера, выберите ПСП (SRP)если вы предлагаете весь отель, весю квартиру. " );
// Jomres v3.0.6
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK', "Используйте Jomres адрес электронной почты проверки? " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK_DESC', "Осуществляет более строгую проверку на электронную почту отправила. Некоторых безопасных веб-сервера будет кинуть 500 внутренняя ошибка при попытке отправить почту на несуществующие адреса электронной почты. Переключение это позволяет нам использовать функции checkdnsrr с PHP, прежде чем отправить письмо, предотвращая ошибку 500. " );
// Jomres v3.1
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "Проживание Итого" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', "ночь(ей) по" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "за номер " );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Enhance Your Stay Total " );
jr_define( '_JOMRES_AJAXFORM_PRICE_SUMMARY', "Итоговая цена " );
jr_define( '_JOMRES_CONFIRMATION_ALERT', "Ознакомьтесь и примите " );
jr_define( '_JOMRES_CONFIRMATION_HEADER', "Резюме брони показано ниже.<br /> Если нучжно что-то изменить, нажмите на кнопку изменить бронирование. " );
jr_define( '_JOMRES_CONFIRMATION_AMENDTEXT', "Если необходимо изменить какие-либо из вышеуказанных сведений, нажмите здесь" );
jr_define( '_JOMRES_CONFIRMATION_AMEND', "Внести Изменения В Бронь" );
jr_define( '_JOMRES_CONFIRMATION_SPECIALS', "Пожалуйста, введите любые ваши пожелания или вопросы в поле ниже." );
jr_define( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Я подтверждаю, что указанные выше сведения верны и согласны с " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "с человека за ночь " );
// Jomres 3.1.10
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE', "Языковой фаил по умолчанию" );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Выбрать язык по умолчанию файл, который Jomres следует использовать, если язык не был установлен Joomfish." );
// Jomres 3.1.11
// Jomres 3.1.13
if ( !defined( '_PN_OF' ) ) jr_define( '_PN_OF', 'из' );
if ( !defined( '_PN_START' ) ) jr_define( '_PN_START', 'Начало' );
if ( !defined( '_PN_PREVIOUS' ) ) jr_define( '_PN_PREVIOUS', 'Предыдущий' );
if ( !defined( '_PN_NEXT' ) ) jr_define( '_PN_NEXT', 'Следующий' );
if ( !defined( '_PN_END' ) ) jr_define( '_PN_END', 'Конец' );
if ( !defined( '_PN_RESULTS' ) ) jr_define( '_PN_RESULTS', 'Результаты' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Обратите внимание, что это не форма бронирования, а вы посылаете E-mail. <br/> Пожалуйста, введите сообщение, которое вы хотите отправить ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Связаться с отелем' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Запрос Недвижимость от ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Спасибо за ваш запрос, Ваше сообщение было отправлено владельцу (менеджеру) недвижимости, и копия Вам. Владелец (Менеджер) ответит вам в ближайшее время.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' относительно ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Введите символы, которые вы видите в окне' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'Я не могу прочитать символы. Генерировать ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Отправить' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'Новое изображение' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Запрос' );
jr_define( '_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Пожалуйста, выберите необходимые номера из списка справа' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Минимум номеров уже выбраны' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Минимальное количество уже выбранного номера в бронирование до тарифной/номер типа комбо могут быть предложены. Позволяет иметь льготные тарифы при более чем N номера уже выбраны. ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Максимум номеров уже выбраны' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Максимальное число номеров уже выбраны в бронирование до тарифной/номер комбо больше не предоставляется. Позволяет остановить, предлагающих этот тип номера/тарифа сочетание раз N номера были выбраны в форме бронирования. ' );
jr_define( '_JOMRES_COM_SPS_EDITROOM_DESC', 'Обратите внимание, что один человек suppliments набор здесь не будет использоваться, если один человек Suppliments имеют значение " да " в Общие настройки. Параметры здесь являются альтернативой имеющие фиксированные ставки единого человека Suppliements, не дополнение к безлимитному тарифу СФС (SPS).' );
jr_define( '_JOMRES_AVLCAL_NOBOOKINGS', "Доступны" );
jr_define( '_JOMRES_AVLCAL_QUARTER', "Несколько заказаны" );
jr_define( '_JOMRES_AVLCAL_HALF', "Половину заказали" );
jr_define( '_JOMRES_AVLCAL_THREEQUARTER', "В основном забронированы" );
jr_define( '_JOMRES_AVLCAL_FULLYBOOKED', "Полностью забронированы" );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX', 'Префикс URL' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX_DESC', 'Это первый пункт появляется после домена - Изменение к тому, что вам потребуется - Если вы не хотите использовать его оставьте пустым' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'Посмотреть задачи недвижимости alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'у бронирования задать alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Поиск задать alias' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Добавлять страну к URL' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Добавлять регион к URL' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Добавлять город к URL' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Добавлять недвижимость " Тип URL' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Добавьте имя недвижимости в URL' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Добавить свойство ID для имени недвижимости' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'если имя свойства не задается тогда ID не будет использоваться. Если значение yes, то URL-адрес будет выглядеть fawlty_towers-1' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Поиск структурой URL - Добавить URL-адрес в стране' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Поиск структурой URL - страна по умолчанию' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'Если вся ваша недвижимость находятся в одной стране, тогда у вас не появится страна в поиск - введите страну по умолчанию здесь, если вы хотите отобразить страну в поиске' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Поиск URL Структура - Добавить регион URL' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION', 'Поиск структурой URL - по умолчанию регион' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'Если вся ваша недвижимость находятся в одном регионе, тогда у вас не появится регион в поиск - введите регион по умолчанию здесь, если вы хотите отобразить регион' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Поиск URL Структура - Добавить город, для URL' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN', 'Поиск URL Структура - По умолчанию город' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Поиск URL Структура - тип недвижимости' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Поиск URL-адреса структура - недвижимость по умолчанию Тип' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Используется в URL, если поиск ведется по всем типам недвижимости' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Автоопределение языка JavaScript календарь' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Включить автоопределение языка для JavaScript-календари? Если мы не можем автоопределение языка, то будем падать обратно на язык настроеный ниже' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'В неделю' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'В день' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'За бронирование' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'С человека за бронирование' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'На человека в день' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'На человека в неделю' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Каждый день (минимум дней)' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'В дни X выбранных номеров' );
jr_define( '_JOMRES_REGISTRYREBUILD', 'Перестроить minicomponent реестр' );
jr_define( '_JOMRES_REGISTRYREBUILD_NOTES', "Обычно Jomres плагин реестра перестраивается автоматически при просмотре в менеджере плагинов и добавить или удалить плагин, но вполне возможно, что эти функции нельзя использовать по какой-то причине, поэтому вы можете использовать эту функцию, чтобы восстановить реестр вручную. Если у вас есть доступ в менеджер плагинов и обновлений функцию, то маловероятно, что вы должны будете использовать эту функцию. Вам нужно будет перестроить плагин реестра каждый раз при добавлении нового мини-компонент и не использовать менеджер плагинов, чтобы добавить его." );
jr_define( '_JOMRES_REGISTRYREBUILD_SUCCESS', 'Реестр успешно восстановлен' );
jr_define( '_JOMRES_REGISTRYREBUILD_FAILURE', 'Произошла ошибка при восстановлении реестра из minicomponents. Вы должны проверить ваш Jomres журнал ошибок, чтобы увидеть, если есть запись, что вызвало ошибку.' );
jr_define( '_JOMRES_SEARCH_PRICERANGES', 'Цена' );
jr_define( 'JOMRES_WORD_SAVING', 'Сохранить...' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Использовать составные свойство в деталях недвижимости?' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3.3 вводит составное свойство детали, где все сведения об объекте вывод направляется в один файл шаблона (composite_property_details.html). Если Вы не хотите использовать этот набор его нет (только существующие пользователи должны установить для этого нет, Новые пользователи, вероятно, хотят оставить значение "да")' );
jr_define( '_JOMRES_PROFILELIST_INSTRUCTIONS', 'Это список всех пользователей в системе. Менеджеры без недвижимости будут иметь значок гостя, управляющие недвижимостью будет иметь ресепшн / Менеджер по недвижимости/ и иконку Супер менеджер по недвижимости.<br/>если Jomres сначала устанавливается в значение "admin" автоматически добавляется в качестве управляющего недвижимостью и считается авторизованным пользователем.<br/>Номера супер управляющих недвижимостью должно быть назначено по крайней мере одна недвижимость в противном случае они увидят сообщение об ошибке при попытке войти в систему и использовать Jomres.<br/>После того, как пользователь авторизован, вы можете редактировать его профиль, назначать им недвижимость или дать им права супер администратора недвижимости свойств.<br/>Чтобы авторизовать пользователя, нажмите на красный крестик рядом с его именем. Чтобы заблокировать пользователя, нажмите на зеленую галочку.<br/>Чтобы назначать пользователям особые свойства, или дать им супер права администратора недвижимости, разрешили затем нажмите значок "редактировать" (которая видна только после того, как они было разрешено). Пользователи, которые зарегистрировали их местоположение сами автоматически будут назначены домовладельцы. Супер управляющих недвижимостью автоматически имеют права на все свойства, и увидите все параметры конфигурации даже если минимизировать параметр конфигурации устанавливается в узле конфигурации.' );
jr_define( '_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Здесь вы можете назначить менеджера определенной недвижимости. Убедитесь, что бы они не были супер менеджер, что у них есть права, по крайней мере, одного свойства в противном случае они будут видеть сообщение об ошибке при входе в систему. Чтобы дать администратор/диспетчер свойств человека в течение только некоторых домовладельцев, убедитесь, что супер Менеджер по недвижимости выпадающего не установлено значение да.' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Вы ещё не сделали никаких заказов!' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Тип недвижимости' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Редактировать тип недвижимости' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Выбрать тип недвижимости' );
jr_define( '_JOMRES_COM_LOGGING', 'Регистрация Jomres' );
jr_define( '_JOMRES_COM_LOGGING_WARNING', 'Эти опции позволят вам включить/отключить ведение журнала в Jomres. Ведение журнала ошибок всегда включена, но другие журналы, такие как бронирование, шлюз системы и запросить логи можно включать и выключать. Вам советуем, что <b>возможность включить этот журнал предоставляется исключительно как способ отладки системы, но это несет большой риск для безопасности</b> как легко для внешних пользователей просматривать ваши журналы, не будучи уполномоченным поэтому лучше оставить его выключенным большую часть времени. Если включено ведение журнала, то когда вы его отключили, вы должны также гарантировать, что <i>' . JOMRESPATH_BASE . JRDS . 'temp' . JRDS . '</i> папка не содержит никаких старых файлов журнала. Обратите внимание, что включение ведения журнала будут также существенно замедлить вашу систу (сайт медленее работать будет), так как он собирает много информации.' );
jr_define( '_JOMRES_COM_LOGGING_BOOKING', 'Ведение журнала бронирования (Booking engine logs) ' );
jr_define( '_JOMRES_COM_LOGGING_GATEWAY', 'Gateway logs (например, PayPal и т. д) ' );
jr_define( '_JOMRES_COM_LOGGING_REQUEST', 'Запрос журнала (все входящие запросы к серверу)' );
jr_define( '_JOMRES_COM_LOGGING_SYSTEM', 'Смешанная ' );
jr_define( '_JOMRES_COM_LOGGING_JRPORTAL', 'JR Портала (в основном для записи комиссии и т. д.) ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Ваш запрос...' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Форма бронирования номера тип списка показать изображения номера' );
jr_define( '_JOMRES_COM_A_LISTLIMIT', 'Список недвижимости предел' );
jr_define( '_JOMRES_COM_A_LISTLIMIT_DESC', 'Количество объектов показать на странице после поиска' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Встроенная функция поиска' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'В Jomres интегрированная функция поиска позволяет пользователям выполнять поиск через Jomres по набору функций. Если вы уже использовали поисковые особенности Jomres на Joomla вы будете знакомы с этими настройками.<br/>Эта функция позволяет нам предлагать работу поиска в Jomres для тех пользователей, которые не хотитят использовать поисковые модули Joomla, или для других CMS пользователей, которые не хотят использовать модули поиска Jomres.<br/> Только помните, что если вы решите искать что-то через ссылку (т. е. не выпадающий) затем поиск других вариантов не будет реализован, только тот элемент, который соответствует в ссылке, которую вы щелкнули.<br/> Обратите внимание, что по умолчанию макет имеет комплексный поиск мобильной очень красивой версии. Потому что файл шаблона, который выполняется в макете должен включать все возможные варианты, некоторые из которых несовместимы. Для улучшения компоновки и достигнуть взгляда вы желаете, вы должны будите отредактировать <b>srch.html</b> в папке </b>. <b>JOMRES_TEMPLATEPATH_FRONTEND .</b>' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Активируйте эту функцию?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Если эта функция включена, то любой вызов Jomres, который показывает список свойств будет означать, что варианты поиска также показаны.' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Используйте колонки' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Любой вариант поиска, которые вы определили как тип связи (где удобно) будут показаны в виде столбцов (IE br поставить на конце линии)" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', "Характеристика колонок" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', "Количество характерных значков, которые могут отображаться перед, br вставляется, чтобы перейти к следующей строке." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "Поиск регион выберите выпадающий комбинированный" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Предлагаем раскрывающийся список поиска для фильтрации по странам/регионам/городам. Если вы собираетесь использовать эту функцию, то вам лучше всего не через регион/город поиска ниже." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Поиск по названию недвижимости" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "Показать поиск по вводу имени недвижимости." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "Показать как выпадающей список?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Установите на нет, чтобы показать список как ссылки" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "Город / регион" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "Показать ввод Региона" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "Показать как выпадающей список?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Установите на нет, чтобы показать список как ссылки" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Поиск по типу недвижимости" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "Показать поиск по вводу типа недвижимости" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "Показать как выпадающей список?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Установите на нет, чтобы показать список как ссылки" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Поиск по типу номера" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Показать поиск по вводу типа номера" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "Показать как выпадающей список?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Установите на нет, чтобы показать список как ссылки" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', "Особенности" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "Показать поиск по вводу особенностей" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "Показать как выпадающей список?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Установите на нет, чтобы показать список как подсказка изображений и флажков" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "Поиск по описанию" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "Показать поиск по описанию ввода" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "Поиск по доступности" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "Показать поиск по вводу доступности" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "Поиск по ценовым диапазонам" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "Показать поиск по цене диапазонов ввода" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "Ценовой диапазон с шагом" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "Jomres рассмотрим все значения в тарифах затем выработать ряд ценовых диапазонов на основе приращения значение, которое вы задаете здесь." );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'По умолчанию, если свойство не выбрано в Jomres он будет выполнять поиск. Если этот поиск не был вызван модуль поиска то, поиск будет выдовать случайные результаты (сознательно). Эта опция позволяет ограничить число возвращений в случайных результатах.' );
jr_define( '_JOMRES_COM_A_CRON_TITLE', 'Cron задание параметров и журналы' );
jr_define( '_JOMRES_COM_A_CRON_DESC', 'Pseudocron информации, содержащейся в задании. В pseudocron функциональность нужна выставление счетов и обработке комиссии.' );
jr_define( '_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Установлено cron minicomponents. Для выполнения индивидуального задания используйте ссылку, указанную ниже. Обратите внимание, что задачи cron не производит никакой продукции, так что Вы не увидите никакой информации на страницу. Вместо этого, смотрите журнал заданий ниже.' );
global $jomresConfig_secret;
jr_define( '_JOMRES_COM_A_CRON_METHOD', 'Способ' );
jr_define( '_JOMRES_COM_A_CRON_METHOD_DESC', "Если у вас нет доступа к cron рабочих мест, установить этот Minicomponent, в противном случае создать cron и запустить его<br /> <i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1&secret=" . base64_encode(get_showtime("secret")) . "> /dev/null</i> " );
jr_define( '_JOMRES_COM_A_CRON_LOGGING', 'Отображение журнала в браузере' );
jr_define( '_JOMRES_COM_A_CRON_LOGGING_DESC', 'Работает только если указан метод Minicomponent.' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Ведение журнала включено' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Установите yes для logging должна быть включена. Результаты logs будут выводиться ниже.' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS', 'Ведение подробного журнала' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Много Выходных данных журнала' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Изменение Шаблона' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_DESC', 'Эта функциональность позволяет редактировать Jomres фронтенд шаблонов на сервере, сохранение результатов в базу данных. Продвинутая особенность, будьте осторожны с нею.' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Имя шаблона' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Шаблон был индивидуальный?' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Настраиваемые поля' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESC', 'Здесь вы можете использовать простые пользовательские поля, которые будут отображаться в форме бронирования.' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Имяполя (без пробелов)' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Значение по умолчанию' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Описание' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Обязательный' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY', 'Максимальное Количество' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Если Максимальное количество, которое имеет значение больше чем 1, то гостям будет предложен выпадающий список, чтобы выбрать quantiy из дополнительных услуг, которые они требуют.' );
jr_define( '_JRPORTAL_INVOICES_ISSUE', "Выставление счет-фактур" );
jr_define( '_JRPORTAL_TAXRATES_TITLE', "Налоговые ставки" );
jr_define( '_JRPORTAL_TAXRATES_CODE', "Налоговый код" );
jr_define( '_JRPORTAL_TAXRATES_DESCRIPTION', "Описание тарифа" );
jr_define( '_JRPORTAL_TAXRATES_CANNOTDELETE', "Вы не можете удалить эту налоговую ставку." );
jr_define( '_JRPORTAL_TAXRATES_RATE', "Ставка" );
jr_define( '_JRPORTAL_INVOICES_TITLE', "Счета" );
jr_define( '_JRPORTAL_INVOICES_STATUS_UNPAID', "Не оплачено" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PAID', "Оплачено" );
jr_define( '_JRPORTAL_INVOICES_STATUS_CANCELLED', "Отменено" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PENDING', "В ожидании" );
jr_define( '_JRPORTAL_INVOICES_USER', "Пользователь" );
jr_define( '_JRPORTAL_INVOICES_STATUS', "Статус" );
jr_define( '_JRPORTAL_INVOICES_RAISED', "Raised" );
jr_define( '_JRPORTAL_INVOICES_DUE', "Due" );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION', "Subscription" );
jr_define( '_JRPORTAL_INVOICES_INITTOTAL', "Outstanding total" );
jr_define( '_JRPORTAL_INVOICES_RECUR_TOTAL', "Recurring total" );
jr_define( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', "Recurring frequency" );
jr_define( '_JRPORTAL_INVOICES_RECUR_DOMONTH', "Recurring day of month" );
jr_define( '_JRPORTAL_INVOICES_CURRENCYCODE', "Currency code" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS', "Line items" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_NAME', "Имя" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', "Описание" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', "Начальная цена" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', "Первоначальное Количество" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', "Начальная Скидка" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', "Исходное общее" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', "Повторяющиеся Цена" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', "Количество повторяющихся" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', "Повторяющиеся скидка" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', "Повторяющиеся общей" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "Налоговый код" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "Налог описание" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', "Налоговая ставка" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', "Настройки PayPal" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', "Код валюты (например EUR)" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', "Использовать sandbox?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', "Ваш PayPal адрес электронной почты (E-mail)" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', "Примечание: чтобы использовать PayPal необходимо зайти в свой аккаунт PayPal и отключения автоматического возврата (disable Autoreturn). (Profile/Website Payment Preferences), и установить IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;" . JOMRES_SITEPAGE_URL_AJAX . "&task=completebk" );
jr_define( '_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', "This invoice is now due. Please click the button to be taken to paypal." );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "omres переопределить стандартные настройки шлюза (gateway)?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', "If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration." );
jr_define( '_JRPORTAL_INVOICES_SHOWINVOICES', "Показать мои счета" );
jr_define( '_JRPORTAL_COUPONS_TITLE', "Купоны на скидку" );
jr_define( '_JRPORTAL_COUPONS_DESC', "Коды скидок могут быть сгенерированы и переданы гостям в качестве стимула, чтобы сделать заказы. Допустимые даты начала и ссылаются на даты, что указание может быть сделано, а не даты бронирования сама." );
jr_define( '_JRPORTAL_COUPONS_CODE', "Код купона" );
jr_define( '_JRPORTAL_COUPONS_VALIDFROM', "Действителен с" );
jr_define( '_JRPORTAL_COUPONS_VALIDTO', "Действует" );
jr_define( '_JRPORTAL_COUPONS_AMOUNT', "Сумма скидки" );
jr_define( '_JRPORTAL_COUPONS_ISPERCENTAGE', "Скидка-процент" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY', "Только к номеру" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY_DESC', "Скидка применяется только к стоимости номера. Если нет, то скидка применяется ко всей стоимости бронирования." );
jr_define( '_JRPORTAL_COUPONS_SQLERROR', "Ошибка SQL при попытке удалить/вставить купон" );
jr_define( '_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Если у вас есть код купона, пожалуйста введите его в поле и нажмите кнопку "Сохранить купон" чтобы сохранить детали вашего бронирования.' );
jr_define( '_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Сохранить купон' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Купон сохраняется в отношении бронирования' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Номер купона не найден' );
jr_define( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Стоимость скидки купона' );
jr_define( '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Бронирования со скидкой. Код купона/скидки/купон настройки : ' );
jr_define( '_JOMRES_COM_CACHING', 'Jomres использовать функции кэширования?' );
jr_define( '_JOMRES_COM_CACHING_DESC', 'Установите Нет (No) для отключения функции кэширования Jomres.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES', 'Выберите языки' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Выбранные языковые параметры будут показаны в выпадающем переключения языка.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Показать в выпадающем меню выбора языка?' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Забронировал и отменил заказы' );
/*
* @ignore
*/
jr_define( '_JRPORTAL_NEWUSER_DEAR', "Дорогой" );
jr_define( '_JRPORTAL_NEWUSER_THANKYOU', "Спасибо за регистрацию " );
jr_define( '_JRPORTAL_NEWUSER_USERNAME', "Ваше имя пользователя : " );
jr_define( '_JRPORTAL_NEWUSER_PASSWORD', "Ваш пароль : " );
jr_define( '_JRPORTAL_NEWUSER_LOG_IN', "Пожалуйста, авторизуйтесь для просмотра Ваших заказов " );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Купон сохранён' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_COUPON', 'Купон удалён' );
// Not used yet
jr_define( '_JOMRES_COM_GROWL', 'Использовать Jomres обмен сообщениями' );
jr_define( '_JOMRES_COM_GROWL_DESC', 'Многие менеджеры обеспечивают обратную связь в виде сообщений на JavaScript, когда страница перезагружается, используйте эту опцию, чтобы включить/отключить эту функцию.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TITLE', "Jomres -> Clickatell SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_USERNAME', "Имя пользователя" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_PASSWORD', "Пароль" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_APIID', "API id" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', "Уведомления на номер мобильного телефона" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Пожалуйста, используйте Формат  - код страны, номер мобильного телефона. Например, британский номер мобильного телефона будет типа '447979123456'. Оставьте это поле пустым если Вы не хотите получать уведомления на ваш мобильный телефон." );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TABTITLE', "SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Вы не можете использовать, тестировать этот шлюз с localhost, вы должны будете сделать это на рабочем сервере.</b>
<br/>
<br/>
Для того, чтобы использовать шлюз (gateway) clickatell вам нужно создать аккаунт Clickatell и счет и по крайней мере на одино зарегистрированное соединения (API sub-product instance) между приложением и нашим шлюзом (gateway). Каждое соединение
метод известен как суб-продукт. Вот как:<br/>
<br/>
<b>Шаг 1 - Зарегистрироваться на clickatell и завести счет</b><br/>
* Перейти http://www.clickatell.com/products/sms_gateway.php, и выбрать соответствующий API подпродукта (connection method) вы хотите использовать ( этот сервис центре (по API) ) ( Clickatell Central (API) )<br/>
* Нажмите на гиперссылку Регистрация.<br/>
* Заполнить регистрационную форму.<br/>
Если у вас уже есть счёт clickatell переходим к шагу 2.<br/>
После успешного заполнения формы Вы будете автоматически регистрироваться в вашей новой учетной записи и перейти на страницу, где вы можете добавлять выбранные Вами API подключения.<br/>
<b>Шаг 2 - добавить зарегистрированного API подключение (sub-product)</b><br/>
Если вы еще не вошли в свой аккаунт, то вы должны сделать это в http://www.clickatell.com/login.php<br/>
* Выбрать \"Manage my Products\" в верхнем меню.<br/>
* Выберите API интерфейс Тип подключения который вы хотите использовать (HTTP API) из выпадающего меню ('Add Connection').<br/>
* Заполните форму. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to " .get_showtime("live_site") . "/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
После успешного заполнения формы, ваши данные авторизации будут отображаться, в том числе каждого соединения соответствует уникальный идентификатор API (api_id). Эти идентификационные данные требуются при подключении к шлюз clickatell для отправки сообщения.<br/>
<br/>
Используйте ваши имя пользователя, пароль и api_id для заполнения полей выше.<br/>
<br/>
" );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Booking form room list show disabled access' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Booking form room list show max people' );
jr_define( '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Обратите внимание, цены и полная стоимость заказа не будет рассчитываться, пока вы не выберите один или несколько номеров." );
jr_define( '_JOMRES_LASTEDITED_DB', 'Последний раз редактировалось база шаблона' );
jr_define( '_JOMRES_LASTEDITED_DISK', 'Последний раз редактировалось шаблон диска' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON', 'Базе шаблона предупреждение' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'База данных шаблонов могут быть устаревшими' );
jr_define( '_JOMRES_LASTEDITED_WARNING', 'Если есть иконка в отношении шаблона, затем Jomres обнаружил, что шаблон хранится в базе данных <strong><i>may</i></strong> быть старше, которые хранятся на диске, в этом случае не исключено, что шаблон был обновлен в новой версии Jomres. Если это так, тогда вполне возможно, что ваш шаблон не может быть, воспользовавшихся новой функцией в Jomres, или, что существующего функционала может не работать как ожидалось, и вы должны сравнить файл на диске, чтобы ваши настройки, чтобы убедиться, что Вы не упускаете новые возможности.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "Подписка пакетов" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Имя" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "Описание" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "Опубликованный" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', "Frequency" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', "Пробный период" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', "Пробная сумма" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "Полный объем" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', "Лимит номеров" ); // Not currently used, saved for a rainy day
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Лимит недвижимости" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', "Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', "Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Подписаться" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', "Пожалуйста введите/обновление информации о подписчике. Обратите внимание, что все поля обязательны к заполнению." );
jr_define( '_JRPORTAL_SUBSCRIBERS_FIRSTNAME', "Имя" );
jr_define( '_JRPORTAL_SUBSCRIBERS_SURNAME', "Фамилия" );
jr_define( '_JRPORTAL_SUBSCRIBERS_ADDRESS', "Адрес" );
jr_define( '_JRPORTAL_SUBSCRIBERS_COUNTRY', "Страна" );
jr_define( '_JRPORTAL_SUBSCRIBERS_POSTCODE', "Почтовый индекс" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', "Вам нужно действующую подписку, чтобы создать новые объекты недвижимости. В данный момент времени, Вы приобрели подписку на " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', " опубликовано недвижимости. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "Вы можете увеличить число свойств, которые можно создать с <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>приобретение дополнительной подписки пакеты здесь.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', " Вы воспользовались " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', " слоты недвижимости. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "Чтобы увидеть список вашей текущей недвижимости нажмите <a href='" . JOMRES_SITEPAGE_URL . "&task=listyourproperties'>здесь</a>. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "Чтобы увидеть список пакетов, доступных в текущей подписки, нажмите <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>здесь</a>. " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', "К сожалению, вы не можете опубликовать эту недвижимость, как вы достигли максимального количества доступных слотов собственности." );
jr_define( '_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "Спасибо за создание подписку на список вашу собственность на нашем сервере. После того, как ваш счет помечен как платные (там может быть некоторая задержка в зависимости от Paypal), пожалуйста, <a href='" . JOMRES_SITEPAGE_URL . "&task=registerProp_step1'>нажмите здесь, чтобы продолжить создание вашу недвижимость.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "Мы сожалеем, что вы не выбрали, чтобы подписаться на наши услуги. Пожалуйста, дайте нам знать, если есть какие-либо способ, которым мы можем Вам помочь" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_USE', "Использовать возможности обработки подписки" );
jr_define( '_JOMRES_COM_NEWUSER', 'Создать нового пользователя при бронирование' );
jr_define( '_JOMRES_COM_NEWUSER_DESC', 'Создать новую учетную запись Пользователя при бронировании.' );
jr_define( '_JOMRES_CLICKTOREGISTER', 'Нажмите здесь для регистрации Вашей недвижимости' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', "Активных подписок" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', "Шлюз подписки id" );
jr_define( '_JRPORTAL_NEWUSER_SUBJECT', "Спасибо за бронирование - новые подробности пользователь следовать" );
jr_define( '_JOMRES_LATLONG_DESC', "Используйте вашу мышь, чтобы перемещаться по карте, и перетащите указатель в место вашей недвижимости, чтобы установить широту и долготу." );
jr_define( '_JOMRES_CONTROLPANEL', 'Панель Управления' );
jr_define( '_JOMRES_COM_FAUXHEADERS', 'Выход Jomres на JavaScript заголовки в теле HTML?' );
jr_define( '_JOMRES_COM_FAUXHEADERS_DESC', 'Установите в yes если у вас возникли проблемы с mootools и Jomres конфликтующие с jQuery в IE. Это заставит Jomres для вывода вызовов JavaScript в теле страницы, а не в шапке, который корректный HTML-код, чтобы решить проблемы, которые с jQuery и mootools конфликтующие друг с другом.' );
// Jomres v4.2
jr_define( '_JOMRES_MANAGER_SHOWINVOICE', 'Показать счет' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICES', 'Показать счета' );
jr_define( '_JOMRES_USER_LISTMYPROPERTY', 'Добавить недвижимость' );
jr_define( '_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Предупреждение : ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', "Вы можете иметь один бесплатный пакет в системе, если вы хотите, создавая пакет и одновременной установливая пробным количество и полную сумму в 0,00" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "Извините, ID пакета не найден." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "К сожалению, вы уже подписались на бесплатный пакет, Вы не можете подписаться на этот пакет снова." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', " Статус <b>0:</b> Отложенный платеж <b>1:</b> Созданный <b>2:</b> Отменен <b>3:</b> Конец срока" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "Мой аккаунт" );
jr_define( '_JOMRES_COM_YOURBUSINESS', 'Детали Вашей Фирмы' );
jr_define( '_JOMRES_COM_YOURBUSINESS_NAME', 'Название фирмы' );
jr_define( '_JOMRES_COM_YOURBUSINESS_VATNO', 'ИНН' );
jr_define( '_JOMRES_COM_YOURBUSINESSADDRESS', 'Номер дома' );
jr_define( '_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOTE: Следующие налоговые ставки предназначены для американского рынка. Если вы хотите использовать фиксированную ставку налога (например, НДС) для вашего проживания, Пожалуйста, выберите ставку налога в варианте выше.</FONT>' );
jr_define( '_JOMRES_INVOICE_NUMBER', 'Счёт No. ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Выберите даты, которые вы хотите применить черные бронирование. Когда вы выбрали соответствующие даты, нажмите кнопку "Применить", чтобы повторно проверить наличие мест. <br/> 
<br/> 
Если свойство имеет один или более заказов за выбранный период, то Вы не сможете забронировать, пока другие заказы/черный бронирований были отменены/раскуплена.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Sorry, you cannot black book this property for those dates.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'You can blackbook this property for those dates.' );
jr_define( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.' );
jr_define( '_JOMRES_EDITINGMODE_ON', 'Режим редактирования ON' );
jr_define( '_JOMRES_EDITINGMODE_OFF', 'Режим редактирования OFF' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Charge variable deposits?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Количество дней, в течение которых вся сумма будет взиматься в качестве залога.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN', 'Отправлять связаться с владельцем на альтернативный адрес E-mail?' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Установить эту опцию в yes если вы хотите связаться с владельцем для отправки E-mail. Оставьте значение " нет " для отправки письма на email-адрес который определяется в области конфигурации недвижимости.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Альтернативный E-mail адрес Связаться с владельцем.' );
jr_define( '_JOMRES_CONFIRMATION_EMAIL_SENT', 'Подтверждение по электронной почте было отправлено. Вы можете закрыть это окно сейчас.' );
jr_define( '_JOMRES_REALESTATE_TITLE', 'Список недвижимости' );
jr_define( '_JOMRES_REALESTATE_YESNO', 'Is this property a Real estate listing?' );
jr_define( '_JOMRES_REALESTATE_YESNO_DESC', 'Выберите Да, если вы продаете недвижимость, выберите нет, если это гостиница/пансион/гостевой дом/вилла тип недвижимости, где вам будут предлагать отеля или номеров в недвижимость для краткосрочной аренды и будет использовать эту систему для приема заказов.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Свяжитесь с агентом' );
jr_define( '_JOMRES_INVOICE_MARKASPAID', 'Счета-фактуры отмечен как оплаченные' );
jr_define( '_JOMRES_INVOICE_MARKEDASPAID', 'Счет отмечен как оплаченный' );
jr_define( '_JOMRES_APIKEY_REMAKE', 'Make new API key' );
jr_define( '_JOMRES_AUTOTRANSLATE_TITLE', 'Используйте Google для перевода сайта?' );
jr_define( '_JOMRES_AUTOTRANSLATE_DESC', 'Эта функция новая и экспериментальная, так что используйте на свой страх и риск. Целью функции является запрос в Google переводчик контент фронтальной части сайта (недвижимость). Обратите внимание эта функция очищает все входные данные, так что если вы используете HTML-редактор для форматирования данных о Вашей недвижимости, то это форматирование сломается.<br/>' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Is this a single property installation?' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Если этот параметр включон (Yes), то фронтенд вид Jomres для неавторизованных пользователей значительно упрощается. По умолчанию звонки для Jomres из меню, вместо того, чтобы быть предоставлен список домовладельцев, просто проводит гостя к форме бронирования для первого объекта в системе. Управляющего недвижимостью также не увидят см. Сведения об объекте предварительного просмотра или кнопку Добавить новое свойство кнопки. Идеально, если вы только хотите один список недвижимости и принимать заказы на него.<br/>' );
jr_define( '_JOMRES_HTMP_PURIFIER', 'Использовать функцию HTML-очиститки?' );
jr_define( '_JOMRES_HTMP_PURIFIER_DESC', 'Выберите on чтобы включить Jomres использования HTML очиститки библиотеки (http://htmlpurifier.org/). Библиотека используется как дополнительный уровень безопасности при работе с входными и выходными данными и рекомендуется оставлять его включенным, однако она будет использовать больше памяти.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Баланс оплаты' );
jr_define( '_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Баланс' );
jr_define( '_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Обратите внимание, вы используете режим редактирования с глобальным режим редактирования включен. Это прекрасно, если вы понимаете, что Глобальный режим редактирования означает, тем не менее, если Вы не хотите проблем. Если Вы не уверены, если вы должны использовать Jomres таким образом, пожалуйста, смотрите <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">в режиме редактирования страницы руководства</a> для получения дополнительной информации по этому вопросу.' );
jr_define( '_JOMRES_SUPPORTKEY', 'Support key' );
jr_define( '_JOMRES_SUPPORTKEY_DESC', 'Ваша поддержка лицензионный ключ - номер (также известный как номер лицензии). Вам понадобится последнию дату лицензию, чтобы загрузить плагины для Jomres.' );
jr_define( '_JOMRES_PERSONAL_DISCOUNT', 'Персональная скидка' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Лимит регистрации собственности в одной стране?' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Вы можете гарантировать, что недвижимость регистраций ограничиваются только одной страной, устанавливая этот параметр в yes в следующей опции.' );
jr_define( '_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Недвижимость находятся в этой стране : ' );
jr_define( '_JOMRES_JQUERYTHEME', 'Jquery тема' );
jr_define( '_JOMRES_JQUERYTHEME_DESC', 'Выберите тему JQuery которая будет использоваться для вкладок Описание недвижимости.' );
jr_define( '_JOMRES_PROPERTYNOTOUBLISHED', 'Нам очень жаль, но эта недвижимость не доступна в настоящее время.' );
jr_define( '_JOMRES_REVIEWS', 'Отзывы' );
jr_define( '_JOMRES_REVIEWS_TITLE', 'Заголовок отзыва' );
jr_define( '_JOMRES_REVIEWS_DATE', 'опубликовано ' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS', 'Ещё нет ни одного отзыва для этого объекта.' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Хотите быть первым и написать отзыв?' );
jr_define( '_JOMRES_REVIEWS_IAGREE', 'Я согласен с этим отзывом' );
jr_define( '_JOMRES_REVIEWS_IDISAGREE', 'Я не согласен с этим отзывом' );
jr_define( '_JOMRES_REVIEWS_AVERAGE_RATING', 'Средний Рейтинг: ' );
jr_define( '_JOMRES_REVIEWS_TOTAL_VOTES', 'Всего голосов:' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW', 'Добавить новый отзыв.' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Вы должны авторизоватья (войти на сайт) чтобы оставить отзыв.' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY', 'Расскажите нам, что вы думаете об этом месте: ' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Это обозреватель рассказал нам : ' );
jr_define( '_JOMRES_REVIEWS_PROS', 'Плюсы: ' );
jr_define( '_JOMRES_REVIEWS_CONS', 'Минусы: ' );
jr_define( '_JOMRES_REVIEWS_SUBMITTEDDATE', 'Добавлено: ' );
jr_define( '_JOMRES_REVIEWS_ALREADYREVIEWED', 'Вы уже пересмотрели эту недвижимость, вы можете отправить другой отзыв о ней.' );
jr_define( '_JOMRES_REVIEWS_CANNOTREVIEW', 'Извините, но Вам запрещено оставлять отзывы на этом сайте.' );
jr_define( '_JOMRES_REVIEWS_CLICKTOSHOW', 'Показать отзывы' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' гости согласны с этим обзором. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' гости не согласны с этим обзором.' );
jr_define( '_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' гость согласен с этим обзором. ' );
jr_define( '_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'гость не согласен с этим обзором.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Спасибо, что поделились своим мнениям об этом отзыве.' );
jr_define( '_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Спасибо, но вы уже поделились своими мнениями об этом обзоре.' );
jr_define( '_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Пожалуйста, убедитесь, что все поля были заполнены.' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Пожалуйста введите название отзыва' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Слишком короткий обзор. Пожалуйста, напишите более полный обзор в поле Описание ' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Пожалуйста, введите хорошие впечатления вашего пребывания в этом отеле' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Пожалуйста, укажите любые негативные впечатления из вашего опыта' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Оцените гостеприимство сотрудников которое Вам оказали' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Опишите своё мнение об окружающей местности' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Что вы думаете о чистоте' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Оцените жилье. Было ли Вам комфортно и удобно или ужасно' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Как Вы думаете, было ли это адекватно цена-качество' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Оцените услуги' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Всего отзывов' );
jr_define( '_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Ваш опыт более подробно' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Спасибо за оставленный Вами отзыв! Он обязательно поможет другим при выборе.' );
jr_define( '_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Спасибо за оставленный отзыв. Он будет опубликован в ближайшее время после проверки одним из наших модераторами.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_CONTROL', 'Использовать функцию отзывы Jomres?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Автоматически публиковать отзывы?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Если выберите нет Вам нужно будет вручную публиковать отзывы' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Установить отзывы в тестовом режиме?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Обычно менеджеры собственности не может просмотреть свойства. При включении режима тестирования, они могут. Естественно, это не является хорошим режимом в рабочей среде.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Список всей недвижимости. Чтобы увидеть отзывы объекта, нажмите на объект. Оттуда вы сможете публиковать или удалять отзыв.' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Количество неопубликованных отзывов' );
jr_define( '_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Общее количество отзывов' );
jr_define( '_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Опубликовать/снять с публикации отзыв' );
jr_define( '_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Удалить отзыв' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW', 'Отчёт отзывы' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Обзор отзывов' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Пожалуйста, введите ваш отчет' );
jr_define( '_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'See something in this review which is objectional or inaccurate? Report it and we will look into it for you.' );
jr_define( '_JOMRES_REVIEWS_SUBMIT', 'Применить' );
jr_define( '_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Отчет, созданный по ' );
jr_define( '_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Сообщения размещеные пользователями, которые могут не согласиться с содержанием отзыва.' );
jr_define( '_JOMRES_REVIEWS_RATING', 'Ratings (1 = ужасно 10 = отлично) ' );
jr_define( '_JOMRES_REVIEWS_RATING_1', 'Гостеприимство  ' );
jr_define( '_JOMRES_REVIEWS_RATING_2', 'Расположение ' );
jr_define( '_JOMRES_REVIEWS_RATING_3', 'Чистота ' );
jr_define( '_JOMRES_REVIEWS_RATING_4', 'Accommodation ' );
jr_define( '_JOMRES_REVIEWS_RATING_5', 'Соотношение цены и качества ' );
jr_define( '_JOMRES_REVIEWS_RATING_6', 'Услуги ' );
jr_define( '_JOMRES_REVIEWS_REVIEWED_BY', 'Reviewed by : ' );
jr_define( '_JOMRES_REVIEWS_CLICKTOHIDE', 'Скрыть отзывы' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Показать форму бронирования на странице в Описании недвижимости?' );
jr_define( '_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Установите в Yes, чтобы показать форму бронирования на странице Детали недвижимости. Если вы установите Нет, то появится ссылка на страницу детали недвижимости, указывая на форму бронирования.' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE', 'Установленные цены включают налог?' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Цены указаны с учетом налогов? Если ваши цены включают налог, выберите Да. Если не включают, выберите Нет.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Дополнительный налог:' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'День недели поля позволяют установить тариф для определенного дня недели, после того, как вы выберите день недели кнопкой на все дни недели будет назначена ставка.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Дата сборщики и скорость ввода позволяют установить одну цену для заданного диапазона дат. Выберите начальную и конечную дату, ввести цену и нажать на кнопку установить цены.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Начало диапазона' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Конец диапазона' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Ставка' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Установленные ставки' );
jr_define( '_JOMRES_PARTNERS_TITLE', 'Партнеры' );
jr_define( '_JOMRES_CALENDAR_TODAY', 'Сегодня' );
jr_define( '_JOMRES_CALENDAR_PREV', 'Предыдущий' );
jr_define( '_JOMRES_CALENDAR_NEXT', 'Следующий' );
jr_define( '_JOMRES_CALENDAR_RTL', 'Ложный' );
jr_define( '_JOMRES_ROOMALLOCATIONS_ROOM', 'Номер ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_GUESTS', 'гость(и). ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Это то, как мы распределили номера и комнаты. Если вы хотели бы изменить это распределение, вам необходимо связаться с администрацией отеля после оформления бронирования. Может взиматься дополнительная плата, если вы измените ваш заказ.' );
jr_define( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Обратите внимание, что ваша недвижимость еще не опубликованна, только вы можете увидеть публикацию, посетители сайта пока не видят её" );
// 4.5.5
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'По умолчанию результат поиска заказа' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Измените этот параметр, чтобы изменить порядок, что результаты поиска представлены по умолчанию.' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Показывать результат поиска заказа в виде выпадающего списка' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE', 'Стиль страницы номеров' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_DESC', 'В форме бронирования, используя "классические" стиль списка номеров, который вам предлагается отдельные номера для гостей. С номер типа представления, гости выбрать число номеров типа х (например. 2 х местный) вместо' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Классический' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Типы номеров' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', '(Re) проверка наличия' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Перестройка списока доступных номеров' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Расчет суммы' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Обновление формы готово' );
jr_define( '_JOMRES_COM_CALENDAR_STARTDAY', 'Календарь - начала недели день, в воскресенье или понедельник' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Только гости отеля могут оставлять отзывы?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Установите в Yes, если вы хотите ограничить отзывы только те пользователи, которые были гостем уже в этой недвижимости.' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'за номер' );
jr_define( '_JOMRES_MAX_GUESTS_PER_ROOM', 'Гостей в номере : ' );
jr_define( '_JOMRES_MAX_GUESTS_PER_BOOKING', 'Гостей на бронирование : ' );
jr_define( '_JOMRES_NUMBER_OF_ROOMS', 'Количество номеров' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Тариф Цена По умолчанию' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "Это относится только к новым тарифам" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW', "Сколько лет показать" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "Определяет количество лет, чтобы показать при редактировании тариф микроменеджментом" );
jr_define( '_JRPORTAL_MONTHS_LONG_0', 'Январь' );
jr_define( '_JRPORTAL_MONTHS_LONG_1', 'Февраль' );
jr_define( '_JRPORTAL_MONTHS_LONG_2', 'Март' );
jr_define( '_JRPORTAL_MONTHS_LONG_3', 'Апрель' );
jr_define( '_JRPORTAL_MONTHS_LONG_4', 'Май' );
jr_define( '_JRPORTAL_MONTHS_LONG_5', 'Июнь' );
jr_define( '_JRPORTAL_MONTHS_LONG_6', 'Июль' );
jr_define( '_JRPORTAL_MONTHS_LONG_7', 'Август' );
jr_define( '_JRPORTAL_MONTHS_LONG_8', 'Сентябрь' );
jr_define( '_JRPORTAL_MONTHS_LONG_9', 'Октябрь' );
jr_define( '_JRPORTAL_MONTHS_LONG_10', 'Ноябрь' );
jr_define( '_JRPORTAL_MONTHS_LONG_11', 'Декабрь' );

jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS', "Недвижимость процесс управления" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', "Существуют различные процессы управления в зависимости от способа которым вы хотите разместить свою собственность/бизнес." );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', "Аренда" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "Выбрать вариант аренды, если вы сдаёте комнаты в собственности (напр. Отеля/Апартаментов/Виллы/Квартиры)" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "Недвижимости/простое перечисление" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "Выбрать вариант недвижимости, если вам не нужен функционал бронирования (например. Недвижимость/товар для продажи)" );

jr_define( 'JOMRES_COM_A_MINIMALCONFIG_DESC', 'Выберите yes, чтобы уменьшить число вариантов, доступных для управляющих недвижимостью в общем раздел конфигурации. Это полезно если Вы не хотите, управляющих недвижимостью, чтобы играть вокруг слишком много настроек, вместо этого вы можете отредактировать jomres_config.php чтобы определить параметры недвижимости по умолчанию.' );

jr_define( '_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Пожалуйста выберите варианты для вашего бронирования' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Switches on html editors in property details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.' );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "На весь экран" );
jr_define( '_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Нормальный просмотр" );
jr_define( '_JOMRES_COM_TIMEZONE_SWITCHER', "Показать Часовой пояс переключатель в диспетчере инструментов недвижимости?" );

jr_define( '_JOMRES_PARTNER_DISCOUNT', "Партнером скидка " );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "Поиск пользователя" );
jr_define( '_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Введите несколько символов для поиска пользователя.<br/> При выборе пользователя, Вы автоматически добавляете их в качестве партнера и Вы попадете на следующую страницу, где вы можете назначить свойства и скидки для пользователя." );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "Существующими партнеры" );
jr_define( '_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "Выбрав партнера должны принить к партнеру страницы администрирования." );

jr_define( '_JOMRES_PARTNER_SHOW_TITLE', "Партнер :" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Поиск недвижимости" );
jr_define( '_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Введите несколько символов из имени недвижимости и выберите недвижимость.<br/> При выборе недвижимости, вы будете добавлять её в портфеля партнера , однако они не пользуются никакими скидками, вам нужно будет установить самостоятельно." );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Текущая недвижимость" );
jr_define( '_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Нажмите на недвижимость редактировать настройки партнера и установиту скидки для этой недвижимости." );


// 4.6
jr_define( '_JOMRES_SUSPENSIONS_TITLE', "Приостановить? <br/>(нажмите кнопку, чтобы приостановить менеджера, это будет автоматически снимать с публикации все его объявления ) " );
jr_define( '_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', "Нажмите на кнопку приостановить значок (иконка с человеком и зеленую галочку), чтобы приостановить менеджера. Это означает, что менеджер не сможет выполнять функций управления имуществом и все их объявления будут неопубликованные. Супер управляющих не могут быть приостановлены." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "Эта учетная запись была приостановлена, в настоящее время невозможно управлять вашей собственностью с использованием этой учетной записи." );
jr_define( '_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Менеджер учетной записи приостановлен" );
jr_define( '_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Восстановил аккаунт менеджера" );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Обратите внимание, что ваш менеджер по недвижимости учетная запись была приостановлена. Вы не сможете выполнять никаких функций управления имуществом до тех пор, пока аккаунт не будет восстановлен." );
jr_define( '_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Пожалуйста, обратите внимание, что ваш аккаунт менеджер недвижимости теперь активно. Вы можете продолжать выполнять любые функции по управлению имуществом. Пожалуйста, войдите в свой аккаунт и убедиться, что ваша недвижимость была опубликованы. Спасибо." );
jr_define( '_JOMCOMP_MYUSER_REMOVE', 'Удалить фаворита' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE', 'Бронирование архив данных' );
jr_define( '_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Бронирование архив данных является RAW дамп указание сведений захваченных после подтверждения бронирования нажатии кнопки. Наведите курсор на дату, чтобы увидеть исходные данные дампа. Информация хранится в XXX__jomres_booking_data_archive таблицу.' );
jr_define( '_JOMRES_MY_ACCOUNT_EDIT', 'Редактировать аккаунт' );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', "Поиск пользователей" );
jr_define( '_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Введите несколько символов из имени пользователя для поиска пользователя.<br/> При выборе пользователя, Вы автоматически добавляете их в качестве менеджера и Вы попадете на следующую страницу, где вы можете назначить недвижимость и права доступа для пользователя." );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "Существующие менеджеры" );
jr_define( '_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', "Выбрать менеджер, чтобы быть назначить менеджером администрации страницы." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Спит" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Показать поиск гостей по выпадающему (dropdown)" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Звезды" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Показать звёзды dropdown" );
jr_define( '_JOMRES_SEARCH_GUESTNUMBER', 'Количество гостей' );
jr_define( '_JOMRES_SEARCH_STARS', 'Количество звезд' );

jr_define( '_JRPORTAL_INVOICES_COMMISSION_TITLE', "Комиссия счетов-фактур" );
jr_define( '_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "Количество недвижимости" );

// 4.6.1
jr_define( '_JOMRES_CONFIG_JQUERY', "Загрузка Jomres jQuery library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_DESC', "Вы можете установить Нет, если у вас есть шаблон, который использует JQuery. Это может решить конфликтные вопросы JQuery на некоторых шаблонов, но не все." );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Если вы используете Joomfish, вы должны установить значение "нет", и использовать Joomfish переключатель языков. Переключатель всегда включен в качестве администратора, потому что это требуется, когда вы используете метку переводы характеристик.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Минатюры автоматически создаются при загрузке изображений.' );

// 4.7.1
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Ширина малой миниатюры (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Маленькие миниатюры, используются в списке недвижимости, тогда как средние миниатюры используются в заголовке.' );
jr_define( '_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Высота малой миниатюры (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Ширина средней миниатюры (px).' );
jr_define( '_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Высота средней миниатюры (px).' );
jr_define( '_JOMRES_TOUCHTEMPLATES', ' Перевод этикетки (Label)' );

jr_define( '_JRPORTAL_ROI_TAB', "ROI" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE', "Использовать функцию комиссии?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Выберите yes, чтобы показать менеджеру комиссии счёт-фактуру, которые были выписанны." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "Когда менеджер делает заказ создать комиссию счета?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "Если менеджер делает бронирование, создать строку комиссия счёт-фактура?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', "Новая комиссия, счёт-фактура был создан" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', "Новая комиссия, счёт-фактура был создан и требует вашего внимания. Пожалуйста, нажмите на следующую ссылку, чтобы просмотреть счета-фактуры (вы должны войти в систему сначала)." );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "Автоматически приостановить работу менеджеров где счёт-фактуры помечаются как ожидающие?" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "Авто приостановить пороговое значение" );
jr_define( '_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "Ограничение по количеству дней, в которые менеджер должен оплатить счет-фактуру до того, как они будут приостановлены и их недвижимость снята с публикации." );

//4.7.2
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT', 'Языковой контекст' );
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Используйте эту опцию для изменения узла языковом контексте. Эта функция позволяет Jomres использовать этикетки, которые подходят для Вашего текущего фокуса, поэтому если вас интересует, как Yacht Brokerage, затем изменять контекст позволит Jomres представить ярлыки из другого языкового файл. Например, если вы установите контекст "Yacht Brokerage", то Jomres сначала найдёт текущий язык, поиском в /'.JOMRES_ROOT_DIRECTORY.'/языковом каталоге, подкаталоге "yachtbrokerage". Если файл существует для текущего языка, то этот файл будет использоваться. Если нет, то Jomres будет искать файл на английском языке в этой же папке. Если не может быть найдены, Jomres будет использовать языковой файл для текущего выбранного языка в файл /'.JOMRES_ROOT_DIRECTORY.'/языки каталога.' );

// 4.7.3
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Расширенные настройки сайта' );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Включите эту опцию, если вы хотите использовать дополнительные параметры конфигурации сайта. Если Вы только начинаете работать с Jomres, то мы советуем вам не включать эту опцию сейчас, а настроек по умолчанию будет достаточно, чтобы вы начали работать, вместо этого вы должны добавить Jomres в главном меню и войти в интерфейсе как "Admin "и приступить к настройке вашей собственности (недвижимости). Пожалуйста, обратите внимание, что многие из передовых опций будет применимо только к установками Jomres Соло, серебро или золото. Пользователи бесплатной базовой системы не смогут в полной мере воспользоваться всеми функциями, которые позволяюет система.' );

jr_define( '_JOMRES_CONFIG_JQUERY_UI', "Загрузить Jomres jQuery UI library?" );

jr_define( '_JOMRES_SORTORDER_PRICE_DESC', 'Цена (Дорогие первым)' );
jr_define( '_JOMRES_SORTORDER_PRICE_ASC', 'Цена (Дешёвые первым)' );

// 4.7.6

jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Суммарная и остаточная цена расчитывается за одну ночь/в неделю/в месяц?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'За ночь' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'За неделю' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'За месяц' );
jr_define( '_JOMRES_BOOKINGFORM_PERPERSON', 'На человека' );

jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'в неделю ' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'в месяц ' );

// 4.7.7

jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Как опция поиска номеров должна работать по выбору количества людей в номерах?' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Затрагивает все поисковые модули. При использовании гостевого номера, функция поиска, поиск должен искать недвижимость, тарифы которой будут поддерживать гостевые номера и равное число выбрано, точно равное число выбрано, или выбранное число и больше? ' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Пожалуйста, подождите, Ваш заказ обрабатывается и вы будете перенаправлены на сайт PayPal.' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Если Вы не будете автоматически перенаправлены на PayPal в течение 5 секунд...' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Нажмите здесь' );
// 4.7.8

jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDFROM', "Бронирование действует с" );
jr_define( '_JRPORTAL_COUPONS_BOOKING_VALIDTO', "Бронирование действует до" );
jr_define( '_JRPORTAL_COUPONS_GUESTNAME', "Имя гостя" );
jr_define( '_JRPORTAL_COUPONS_DESC_478', "Коды скидок могут быть сгенерированы и переданы гостям в качестве стимула, чтобы сделать заказ.<br/>
Допустимые даты начала и ссылаются на даты, что бронирование может быть сделано на, в то время как указание действует с/до даты относятся к датам, что бронь должна покрывать за купон будет действителен. Если заказ выходит за пределы этого периода затем обычным тарифам будет применяться в дни вне этого периода.<br/>
Если вы хотите забронировать даты которые будут доступны для одного конкретного гостя, выберите имя этого гостя в выпадающем списке, чтобы ограничить купон только для него." );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', "Купона это заказ был со скидкой от " );
jr_define( '_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', " до " );

jr_define( '_JOMRES_CONFIG_JQUERY_UI_DESC', "Выберите Нет, чтобы отключить загрузку Jquery UI JavaScript и CSS файлы." );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS', "Загрузить Jomres jQuery UI CSS library?" );
jr_define( '_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Выберите Нет, чтобы отключить JQuery UI CSS только для пользовательского интерфейса." );

//v5.1 
jr_define( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "Всего в т.ч. налог" );
jr_define( '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Неопубликованная недвижимость' );

// v5.2
jr_define( '_JOMRES_CONVERSION_TITLE', "Использование преобразования functionaity" );
jr_define( '_JOMRES_CONVERSION_TITLE_DESC', "Используйте функцию преобразования онлайн Jomres. Это будет предлагать пользователю выпадающее меню преобразования, где они смогут выбрать варианты валюты, чтобы увидеть цены, предлагаемые на выходе цена корректируется, чтобы показать преобразованы цену с «родной» ценой отеля в скобках." );
jr_define( '_JOMRES_CONVERSION_DISCLAIMER', "Мы приложили все наши усилия, чтобы получить наиболее точные и своевременные курсы валюч, что мы можем. Наша интернет-функция Конвертация валют это услуга, предоставляемая только для информационных целей и не предназначены обеспечить точные цифры. Соответственно, мы не можем гарантировать точность обменных курсов. Используя эту функцию, Вы соглашаетесь, что любая не точность от (или) использования функции конвертации валюты это исключительно Ваши и риски." );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_TITLE', "Использовать кэширование javascript?" );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_DESC', "Выберите, следует ли использовать функцию Jomres Javascript кэширования. Работает на большинстве серверов, но не на всех. Если у вас возникли проблемы с Javascript ошибоки, в которых сообщается 'unterminated string literal' или 'незавершенная строка' (например) Firebug, вы должны установить в положение Нет. " );

// 5.2.1
jr_define( '_JOMRES_HISTORIC_GUESTS_SHOW', "Список истории и текущих гостей" );
jr_define( '_JOMRES_HISTORIC_GUESTS_NOSHOW', "Только текущие гости" );

// 5.3.1
jr_define( '_JOMRES_CURRENCYCONVERSION_TAB', 'Конверсионные / коды валют' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_DESC', 'Чтобы автоматически установливать код валюты, Jomres способен использовать бесплатный сервис под названием IPinfoDB определяет страну посетителя, однако вы должны зарегистрироваться на сайте http://ipinfodb.com/ для получения ключа API  <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> IPinfoDB.' );
jr_define( '_JOMRES_DEBUGGING_TAB', 'Отладка' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP', 'Показать форму бронирования в модальном всплывающем окне?' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'Если выбрана опция - показать форму бронирования в деталях собственности установлено значение Нет, то при открытии страницы формы бронирования Jomres может показать форму бронирования в модальном всплывающем окне. Это позволяет включать гораздо больше информации в форме бронирования, не перегружая клиента, имея слишком много элементов на экране (они повторно скрывается за всплывающие окно)' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals panel location' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'В форме бронирования итоги панели потребностей различных параметров в зависимости от шаблона. Например, Jomres на Joomla шаблон настройка 712 работает хорошо, однако на Milkyway значение около 1500 более suitablem, особенно если у Вас не включена функция модальное всплывающее окно. Вероятно вы должны будете экспериментировать с различными настройками, чтобы найти что-то, что хорошо работает в выбранном Вами шаблоне. ' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Accomodation ex tax' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Accomodation inc tax' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Налог номера:' );
jr_define( '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Откройте форму бронирования' );

jr_define( '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Вернутся к деталям недвижимости' );
jr_define( '_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Автоматически выбирается?' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Баланс (после депозита)' );

jr_define( '_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Фильтр ресурсов с учетом их особенностей.' );

jr_define( '_JOMRES_DATEPERIOD_LATESTBOOKING', 'Последнее бронирование' );
jr_define( '_JOMRES_DATEPERIOD_SECOND', 'секунд' );
jr_define( '_JOMRES_DATEPERIOD_MINUTE', 'минут' );
jr_define( '_JOMRES_DATEPERIOD_HOUR', 'часов' );
jr_define( '_JOMRES_DATEPERIOD_DAY', 'дней' );
jr_define( '_JOMRES_DATEPERIOD_WEEK', 'недель' );
jr_define( '_JOMRES_DATEPERIOD_MONTH', 'месяцев' );
jr_define( '_JOMRES_DATEPERIOD_YEAR', 'год' );
jr_define( '_JOMRES_DATEPERIOD_DECADE', 'десять лет' );
jr_define( '_JOMRES_DATEPERIOD_S', 's' );
jr_define( '_JOMRES_DATEPERIOD_AGO', 'давности' );
jr_define( '_JOMRES_DATEPERIOD_FROMNOW', 'сейчас' );

jr_define( '_JOMRES_WHOLEDAY_TITLE', 'Заказы на целые дни?' );
jr_define( '_JOMRES_WHOLEDAY_DESC', 'По умолчанию система бронирования ресурсов уходит в ночь, так что бронь с первого января ' . date( "Y", strtotime( "будущий год" ) ) . ' на 2 января ' . date( "Y", strtotime( "будущий год" ) ) . ' охватывает всего одну ночь. Если установить этот параметр в значение "да", однако тогда указание будет охватывать целые дни вместо, поэтому указание на эти дни будет охватывать оба дня и заказчику будет выставлен счет за два дня.' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'в день' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'В день с человека' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Съём' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Вернуться' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', "дней(по расписанию)" );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Дата возврата неправильные' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Бронирование было слишком коротким. Там должен быть как минимум столько же дней между доставкой и возвратом даты:' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Самовывоз/возврат минимального интервала' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Краткая цена и цена оценки должны быть оценены, как за день / неделю / месяц?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'В день' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Дней до даты съема' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Минимальное количество дней, которое должно пройти с "сегодня", до даты съема.' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Установите Да, если вы хотите ограничить предварительные заказы (используйте следующее поле, чтобы установить предел в днях). Если вы установите это да, то, если пользователь пытается забронировать более, чем n дней, то их дата съема будет восстановлено сегодня даты' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Показать дату возвращения?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Установите значение Нет, если вы не хотите, чтобы показать окно ввода даты возврата. Использовать только, если вы знаете, что вы делаете, а дата возвращения в бронировании всегда будет установлен на следующий день после даты съема." );

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

jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Отправлять E-mail новым пользователям c данными для входа?' );
jr_define( '_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Если опция Создать Нового Пользователь установлено значение Да, вы можете установить эту опцию в Нет для того, чтобы они не получали по электронной почте свои регистрационные данные, когда пользователь был создан. Это может быть полезно, если вы автоматически добавляете новых пользователей в список рассылки, и не хотите, чтобы пользователи при этом получали свои регистрационные данные.' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Показать налоговой выход в краткой форме бронирования итоговой?' );
jr_define( '_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Отмена Заказа (Бронирования)' );
jr_define( '_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Зарегистрированные гости могут отменить свои заказы. Здесь вы можете установить порог в днях, когда бронирование не может быть отменена после определенного количества дней до даты заезда.' );

jr_define( '_JOMRES_EDIT_PROFILE', 'Редактировать Профиль' );
jr_define( '_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Тип недвижимости относится' );
jr_define( '_JOMRES_IMAGE', 'Изображение' );
jr_define( '_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Виды деятельности, которые могут показать эту функцию' );
jr_define( '_JOMRES_CRATES_CLICKINITIAL', 'Нажмите на букву, чтобы показать все предприятия с первого знака. Как только у вас список недвижимости вы можете назначать ставки комиссионного вознаграждения для тех объектов, или нажмите на "изменить", чтобы просмотреть статистику.' );
jr_define( '_JRPORTAL_TAX_RATE_EDIT', "Редактировать налоговую ставку" );

jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', "Изменение Настраиваемого поля" );

jr_define( '_JOMRES_LICENSESERVER_PASSWORD', "Лицензия на сервер пароль" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME', "Лицензия на сервер имя пользователя" );
jr_define( '_JOMRES_LICENSESERVER_USERNAME_DESC', "Если у вас есть логин и пароль на сервер лицензий, пожалуйста, введите их здесь. Это поможет вам открыть платные плагины. Если введен правильный ключевой поддержки выше, тогда нет необходимости указывать логин/пароль здесь." );

jr_define( '_JOMRES_VERSIONCHECK_THISJOMRESVERSION', "Версия Jomres : " );
jr_define( '_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', "Последняя версия Jomres" );
jr_define( '_JOMRES_VERSIONCHECK_VERSIONWARNING', "Появилась новая версия Jomres, рекомендуется обновить в ближайшее время." );

jr_define( '_JOMRES_PRODUCT_INFORMATION', 'Добро пожаловать Jomres, мы надеемся вам понравится работать с помощью Joomla, использовать его для любых систем бронирования. Если вы хотите приобрести Jomres Соло, Серебро или Золото лицензию, <a href="http://www.jomres.net/prices" target="_blank"> пожалуйста, посетите наш сайт</a> для получения информации о том, как можно расширить его функционал.' );
jr_define( '_JOMRES_PRODUCT_INFORMATION2', 'Эта система идеально подходит для любого сценария бронирования, будь то просто бронирования для одного отеля, вплоть до сайта с большим количеством пользователей, на разных языках, с несколькими типами недвижимости. Пожалуйста, см. раздел "Справка" слева, в том числе "приступая к работе".' );

jr_define( '_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Active property" );
jr_define( '_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "Change your active property" );
jr_define( '_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property." );

jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "Email Настройки" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Установить эту опцию в yes, чтобы использовать эти альтернативные настройки SMTP. Все большее веб-хостов блокируют почтовые функции PHP, так что вы можете выбрать, чтобы отправлять почту в настройки почты, что Jomres принимает от хост CMS(обычно Joomla) и используйте настройки Вашего собственного провайдера почты." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "Альтернативный Host" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Укажите Ваш smtp mail server" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "Укажите Port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "Укажите Ваш smtp port" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "Укажите Protocol" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "В зависимости от настройки SMTP сервера, нужно оставить это поле пустым, или ввести протокол шифрования SSL или TLS. Задать свой SMTP провайдера, если Вы его знаете." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "Использовать проверку подлинности" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "Если ваш SMTP-сервер требует авторизацию, выберите yes. Логин и пароль будут в дальнейшем использоваться." );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Укажите Username" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Укажите Password" );
jr_define( '_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "" );

jr_define( '_JOMRES_WARNING_SYSTEM_CACHE', "Предупреждение : мы обнаружили, что у Вас включён System Cache plugin Joomla -  плагин системного кэша включен. Мы советуем Вам отключить этот плагин, так как он будет кэшировать AJAX ответов к форме бронирования, в результате чего ваша система может работать нестабильно." );

jr_define( '_JOMRES_QUICK_INFO', "Быстрый просмотр" );

jr_define( '_JOMRES_MENU_SHOW', "Отображать" );
jr_define( '_JOMRES_MENU_HIDE', "Скрыть" );
jr_define( '_JOMRES_MENU_SHOW_TITLE', "Использование альтернативного меню макет?" );
jr_define( '_JOMRES_MENU_SHOW_DESC', "Выберите yes, чтобы использовать альтернативное меню во фронтенде. Если выбрано нет в Jomres главного меню отображается в виде аккордеона на этой странице слева, с кнопкой, чтобы увеличить меню. Если установлено yes, альтернативного главного меню используется, что приводит строки меню в верхней части страницы. Оба меню будут скользить с пользователем, и аккордеон меню считается лучше меню, но если вы обнаружите, что это не подходит для вас, вы вольны выбрать альтернативный. Если ни одно из этих меню устраивает, то вам нужно будет изменить mainmenu_wrapper.html и mainmenu_options.html чтобы удовлетворить ваши конкретные требования." );


jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', "По умолчанию" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', "Кто угодно" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', "Зарегистрированный" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', "Менеджер" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', "Супер менеджер" );
jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', "Никто" );

jr_define( '_JOMRES_ACCESS_CONTROL_TITLE', "Меню контроля доступа" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC', "Эта функция позволяет контролировать, кто сможет видеть плагин в Главное меню. Обычно параметры пользователя 00009 доступны для просмотра, либо/или незарегистрированные посетители сайта, 00010 вариантов, как правило, касаются прием типа мероприятиях, которые используются на ежедневной основе, в то время как 00011 параметры используются для настройки и конфигурирования собственности, но осуществляется менее часто." );

jr_define( '_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', "Регистратор" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Полный контроль доступа" );
jr_define( '_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "Установите эту опцию в Yes, чтобы включить полный функцию контроля доступа, а затем посетить опцию управления доступом в соответствии с системой обслуживания для настройки управления доступом." );

jr_define( '_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Заметим, однако, этого эти параметры не контролируют базовых сценариев, к которым они подключаются, так например, если вы установите <i>00009user_option_03_search</i> to 'Менеджер' ользователь, который знает Jomres можете по-прежнему вызывать j06000search.class.php введя http://www.domain.com/index.php?option=com_jomres&task=search в адресной строке браузера. Это сделано намеренно, так как это доступ к меню управления просто контролирует то, что можно увидеть в Jomres Главное меню. Если вам нужен более строгий контроль затем установить на сайт Config -> Full Access Control возможность да и пересмотреть меню возможность управления доступом." );
jr_define( '_JOMRES_ACCESS_CONTROL_TITLE_FULL', "Полный контроль доступа" );
jr_define( '_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>Эта функция только для опытных пользователей. Если Вы не знаете для чего он предназначен, и нет особых причин, чтобы использовать его, пожалуйста, вернитесь к конфигурации сайта и установить полный контроль доступа значение нет.</strong><br/>
	Эта функция позволяет контролировать, кто имеет доступ к которой minicomponents (с некоторыми исключениями, которые жестко закодированы в системе). Если уровень доступа следующего скрипта имя имеет значение по умолчанию, то с полным доступом и контроля параметра значение Да <strong>anybody</strong> можете открыть скрипты, что они не должны быть в состоянии получить доступ к поэтому если вы собираетесь использовать эту функцию, необходимо установить контроль доступа на уровне <strong>все</strong> Jomres minicomponent перечисленные здесь. Если Вы не знаете, что эти minicomponents делать, то мы настоятельно рекомендуем Вам не использовать эту функцию вообще.<br/>
	В Jomres уровни доступа выполните пирамиды, так супер управляющих недвижимостью больше, чем менеджеры. В крации Super Manager > Manager > Receptionist > Registered > Unregistered. Так, если зарегистрированный пользователь имеет доступ к minicomponent, так что Администраторы, менеджеры и супер менеджеры.<br/>
	Обратите внимание, что Вы не можете контролировать администратор зоны minicomponents. Кто-нибудь в области администратора считается доверенного пользователя в том, что они не должны быть заблокированы от доступа любого скрипта (особенно этот).
	" );
jr_define( '_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', "Предупреждение! Вы имеете полный контроль доступа включен, но мы посчитали параметры управления доступом и сравнили их с количеством minicomponents, что должна быть контролируемая, и обе не совпадают, поэтому у вас могут быть некоторые скрипты, которые не контролируются. Это может быть вопросом безопасности, и вам настоятельно рекомендуется устранить эту сразу посетив функция контроля доступа и проверьте соответствующие уровни были применены." );

jr_define( '_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Пользователей с админ правами на эту недвижимость" );
jr_define( '_JOMRES_ADMIN_LISTALLUSERSINVOICES', "Список всех пользовательских счетов" );


jr_define( '_JOMRES_DEBUGGING_SUBJECT', 'Объект' );
jr_define( '_JOMRES_DEBUGGING_FULLNAME', 'Ваше полное имя' );
jr_define( '_JOMRES_DEBUGGING_YOUREMAIL', 'Ваш email адрес' );
jr_define( '_JOMRES_DEBUGGING_ISSUE', 'Пожалуйста, опишите вашу проблему' );
jr_define( '_JOMRES_EXTRAS_MODELS_MODEL', 'Model' );
jr_define( '_JOMRES_EXTRAS_MODELS_PARAMS', 'Параметры' );
jr_define( '_JOMRES_EXTRAS_MODELS_FORCE', 'Force' );
jr_define( '_JOMRES_METATITLE', 'Meta title' );
jr_define( '_JOMRES_METADESCRIPTION', 'Meta description' );
jr_define( '_JOMRES_FOUNDPROPERTIES', "Найти недвижимость" );
jr_define( '_JOMRES_REGISTRATION_STEP_1_OF_2', "Добавить недвижимость : Шаг 1 of 2" );
jr_define( '_JOMRES_REGISTRATION_STEP_2_OF_2', "Добавить недвижимость : Шаг 2 of 2" );

jr_define( '_JOMRES_MYPROPERTIES', 'Мои компании' );


jr_define( '_JOMRES_CART_TITLE', 'Мои заказы бронирования' );
jr_define( '_JOMRES_CART_INFO', 'Обратите внимание, эти заказы еще не сохранены. Если вы выходите из системы или сеанса они будут потеряны. Не забудьте подтвердить Ваши заказы!' );
jr_define( '_JOMRES_CART_CONFIRM_BOOKINGS', 'Подтверждение бронирования' );
jr_define( '_JOMRES_CART_OR', ' или ' );
jr_define( '_JOMRES_CART_SAVEFORLATER', 'Save for later' );
jr_define( '_JOMRES_CART_NOBOOKINGS_SAVED', 'You don\'t have any bookings saved yet.' );
jr_define( '_JOMRES_CART_VIEWCART', 'Просмотр корзины' );

jr_define( '_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Языковой файл, подкаталога' );

jr_define( '_JOMRES_DEFAULT_LAT_STARTPOINT', 'Широта по умолчанию' );
jr_define( '_JOMRES_DEFAULT_LONG_STARTPOINT', 'Долгота по умолчанию' );
jr_define( '_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'На карте Google на странице редактирования свойств, прежде, чем маркер был перемещен, нужно указать по умолчанию широта / долгота точки запуска?' );

jr_define( '_JOMRES_CLEARDATES', 'I don\'t have any dates yet' );

jr_define( '_JOMRES_MOBILE_REDIRECT', 'Перенаправлять на мобильную версию, когда на смотрят на мобильных устройствах?' );
jr_define( '_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres включает в себя функцию, которая перенаправляет пользователя на просмотр Joomla, что не включает в себя модули и заголовки, когда он обнаруживает, что браузер относится к мобильному устройству. Если у вас есть шаблон Joomla, который уже оптимизирован для мобильных устройств, вы можете отключить эту функцию, установив этот параметр Нет.' );

jr_define( '_JOMRES_SYSTEM_EMAILS', 'Отправлять письма от какого адреса Email' );
jr_define( '_JOMRES_SYSTEM_EMAILS_DESC', "Оставьте этот параметр пустым чтобы отключить его. Jomres будет использовать в отеле, адрес электронной почты(ЭП) при отправке Сообщений гостями, однако Ваш почтовый сервис может не разрешить письма с произвольного адреса (т. е. они только могут разрешить сообщения от одного уполномоченного-адрес). Если это так, тогда вы можете использовать это поле, чтобы ввести адрес, который будет замечен как адрес отправителя для всех сообщений системы." );

jr_define( '_JOMRES_CSS_CACHING_TITLE', "Использовать кэширование CSS?" );
jr_define( '_JOMRES_CSS_CACHING_DESC', "" );


jr_define( '_JOMRES_JSCALENDAR_USECLEARCHECKBOX', "Поиск календари показывают четкие даты Чекбокс?" );

jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_LIST', "Просмотр списка" );
jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Посмотреть фото" );

jr_define( '_JOMRES_COMPARE', "Сравнить" );
jr_define( '_JOMRES_REMOVE', "Удалить" );
jr_define( '_JOMRES_RETURN_TO_RESULTS', "Вернуться к результатам поиска" );

jr_define( '_JOMRES_ADDTOSHORTLIST', "Добавить в избранное" );
jr_define( '_JOMRES_REMOVEFROMSHORTLIST', "Удалить из избранного" );
jr_define( '_JOMRES_VIEWSHORTLIST', "Просмотреть список избранного" );

jr_define( '_JOMRES_COOKIEPOLICY_TITLE', "Правила Cookie" );
jr_define( '_JOMRES_COOKIEPOLICY_DESC', "Законодательство ЕС требует, чтобы все сайты, использующие cookie запрашивали разрешение от посетителей сайта, чтобы сохранить cookies.
<br/>
Jomres использует cookie Host CMS для построения это собственных файлов сессии, в которых могут быть сохранены данные о результатах поиска пользователя и других мероприятий, чтобы сделать визит пользователя более приятным. Хотя мы считаем, что функциональность Jomres, вероятно, распространяются положения в законодательстве определяется как <я> 'такое хранение или доступ строго необходимо обеспечить обслуживание информационного общества, запрошенный абонентом или пользователем '</ i> (см http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) мы включили эту функцию, чтобы дать вам возможность предотвратить доступ пользователей к другим, чем на поисковых страницах в случае страниц, которые пользователь не позволяют их cookie, которые будут использоваться в этом случае. <br/>
Если включен Jomres покажет ссылку 'отказаться в', где пользователи могут выбрать, чтобы включить cookie, которое хранится для них используется таким образом. Если они не выбирают, чтобы отказаться то Jomres покажет им только некоторые основные страницы (например, детали свойств, шоу мои, результаты поиска и т.д.).
<br/>
Установите эту опцию в Yes, чтобы предоставить эту политику." );

jr_define( '_JOMRES_COOKIEPOLICY_1', "Important: Cookie Правила" );
jr_define( '_JOMRES_COOKIEPOLICY_2', "Мы используем Cookie, чтобы помочь сохранить наш сайт актуальны и простым в использовании." );
jr_define( '_JOMRES_COOKIEPOLICY_3', "Читать далее..." );
jr_define( '_JOMRES_COOKIEPOLICY_4', "Законодательство ЕС требует, чтобы все сайты четко указать, если используются Cookie и их назначение." );
jr_define( '_JOMRES_COOKIEPOLICY_5', "Поиск и бронирование движок этого сайта должен быть в состоянии вспомнить варианты которые вы выбрали для работы. Для этого необходимо, хранить информацию, которая связана с небольшой файл называется \ 'cookie \', который однозначно идентифицирует ваш браузер, и для нас, чтобы сделать это, вы должны согласиться, что мы можем. Если вы не согласны с этой политикой cookie, то вы будете сильно ограничены в том, что вы можете делать на этом сайте." );
jr_define( '_JOMRES_COOKIEPOLICY_6', "Да, я принимаю от использования cookies на этом сайте." );

jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Аванс берётся за стоимость первой ночи?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.' );

jr_define( '_JOMRES_NOTHINGINSHORTLIST', "Вы не добавляли никаких элементов в ваш список." );

jr_define( '_JOMRES_MOBILE_SETTINGS', "Параметры мобильного устройства" );
jr_define( '_JOMRES_SIMULATE_MOBILE', "Имитация мобильного режим" );
jr_define( '_JOMRES_SIMULATE_MOBILE_DESC', "Выберите yes, чтобы заставить Jomres всегда переключаться в мобильный вид. Полезно, если вы разрабатываете шаблоны, которые предназначены для мобильных устройств. Примечание : Вам будет нужен мобильный шаблон, плагин установлен." );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION', "Simulation IP" );
jr_define( '_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "Вы можете настроить симуляцию мобильного режима по определённому IP, параметр вступит в силу только если IP пользователя = xxx.xxx.xxx.xxx, так например если вы разрабатываете на localhost, следует задать номер IP на 127.0.0.1." );

jr_define( '_JOMRES_SAFEMODE', "Включить безопасный режим?" );
jr_define( '_JOMRES_SAFEMODE_DESC', "Установите в Yes, чтобы вызвать безопасный режим. Это отключит все плагины, так что Jomres будет использовать только это основные функции." );

jr_define( '_JOMRES_PRICE_ON_APPLICATION', "Договорная" );

jr_define( '_JOMRES_USE_JOMRESEDITOR', "Используйте редактор WYSIWYG Jomres? (рекомендуется)" );
jr_define( '_JOMRES_USE_JOMRESEDITOR_DESC', "Если вы включили редактор WYSIWYG, вы можете использовать HTML-редактор (ы) для вашего CMS, или тот что встроен в Jomres. Встроенный редактор оптимизирован для использования с Jomres и рекомендуется использовать его." );

jr_define( 'COMMON_NEXT', "Следующий" );
jr_define( 'COMMON_CANCEL', "Отменить" );
jr_define( 'COMMON_SUBMIT', "Применить" );
jr_define( 'COMMON_SAVE', "Сохранить" );
jr_define( 'COMMON_DELETE', "Удалить" );
jr_define( 'COMMON_RETURN', "Возврат" );
jr_define( 'COMMON_CLOSE', "Закрыть" );
jr_define( 'COMMON_BACK', "Назад" );

jr_define( 'COMMON_HOME', "Домой" );

jr_define( 'COMMON_NEW', "Новый" );

jr_define( 'COMMON_SEND', "Отправить" );

jr_define( 'RECAPTCHA_TITLE', "reCaptcha" );
jr_define( 'RECAPTCHA_INFO', "Captcha используется для отличия человека от робота и защиты сайта, и для предотвращения засорения сайта спамом от роботов в Интернете. Чтобы использовать форму Связаться с нами в Jomres вам нужно будет зарегистрироваться на сайте www.google.com/recaptcha <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> на домашней странице Google ReCaptcha, указать свой домен, получить ваши открытые и закрытые ключи. Когда вы получили эти ключи, пожалуйста, введите их ниже.Служба reCapcha это бесплатный сервис предоставляется Google." );
jr_define( 'RECAPTCHA_PUBLIC_KEY', "Public key" );
jr_define( 'RECAPTCHA_PRIVATE_KEY', "Private key" );


jr_define( '_JOMRES_BOOKINGFORM_LOCK_TITLE', "Тайм-аута блокировки файлов" );
jr_define( '_JOMRES_BOOKINGFORM_LOCK_DESC', "Во избежании одновременного бронирования одного и того же номера Jomres использует файл блокировки для предотвращения номер от добавления в список свободных номеров в форме бронирования, если кто-то уже добавлен в комнату и у них одни и те же даты. По умолчанию эта блокировка будет происходить раз в 3600 секунд, или один час. Вы можете изменить время, необходимое для изменения, этот запрет путем изменения этого показателя." );


jr_define( '_JOMRES_BOOTSTRAPSWITCH', "Включить шаблоны и функциональность Jomres Bootstrap?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_DESC', "Если Ваш шаблон работаете на bootstrap, включить шаблон в интерфейсе этого сайта установите эту опцию Да." );

jr_define( 'COMMON_ACTION', "Акция" );
jr_define( 'COMMON_VIEW', "Просмотр" );

jr_define( 'BACKTOTOP', "Вернуться к началу" );

jr_define( '_JOMRES_INPUTFILTERING_LEVEL_WEAK', "Слабый" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_STRONG', "Сильный" );

jr_define( '_JOMRES_INPUTFILTERING', "Фильтр ввода" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Входной уровень фильтрации" );
jr_define( '_JOMRES_INPUTFILTERING_LEVEL_DESC', "Большинство данных, которые поступают в систему подлежат проверки, сначала очистки любые HTML-теги, а затем с помощью PHPs применяются фильтры, чтобы сделать данные безопасными, прежде чем оно будет записаны в базу данных. Вы можете позволить некоторые входы (например, текст входы на странице деталей недвижимости), чтобы включить HTML. Есть два уровня фильтрации можно использовать для фильтрации этот вход, либо слабые и сильные. Вы должны использовать только слабые настройку, если доверяете пользователям ввода данных, например: коллеги или системный администратор, в противном случае вы должны оставить его установить до сильного. При установке на Сильный уровень фильтрации (рекомендуется), вы можете указать, какие теги для редактировав можно разрешить используйте следующий параметр 'Очиститель HTML теги разрешено. " );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "Разрешить теги" );
jr_define( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Вы можете редактировать теги, очистка HTML возможна через фильтр системы. По умолчанию разрешены 'p,b,strong,a[href],i' (т.е. Paragraph, Bold, Strong, Links and Italics). Для получения более подробной информации о разрешенных тегов, пожалуйста, прочитайте справки о HTML очистке по адресу <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Хотя вы можете изменить эту настройку, рекомендуется оставить её по умолчанию." );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_TITLE', "Разрешённые" );
jr_define( '_JOMRES_INPUTFILTERING_INPUTS_DESC', "Вы можете определить, какая форма ввода тегов разрешена HTML редактируя эту опцию, любой ввод данных добавленный к этому списку будет обрабатываться через HTML очистку вместо того, все HTML раздели. По умолчанию: 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers. Добавить больше входов, добавив их имена, разделенных пробелом." );


jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "Сведения о недвижимости в закладках?" );
jr_define( '_JOMRES_PROPERTYDETAILS_INTABS_DESC', "Установите эту опцию, чтобы показать детали недвижимости в закладках. Установите Нет, чтобы показать их без вкладок." );

jr_define( 'COMMON_PRINT', "Печать" );

jr_define( 'COMMON_EDIT', "Редактировать" );
jr_define( 'COMMON_COPY', "Копия" );


jr_define( '_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 включает Twitter's Bootstrap framework по умолчанию, и Jomres имеет шаблоны и функциональные возможности, которые будут использовать эти шаблоны. По умолчанию, если вы работаете на Jomres Joomla 3 эти переключатели установлены в Yes, но вы можете отключить, если это необходимо (не рекомендуется). Если вы работаете с версией Joomla ниже 3 вы можете включить эту опцию, чтобы использовать шаблоны и функциональность Jomres Bootstrap, однако по умолчанию эти опции установлено значение Нет." );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_FRONTEND', "Использовать шаблоны Jomres Bootstrap в интерфейсе?" );
jr_define( '_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', "Использовать шаблоны Jomres Bootstrap в панели администратора?" );

jr_define( '_JOMRES_ALTERNATIVE_SEARCH_RESULTS', "Вот несколько альтернатив которые вы могли бы установить, чтобы посмотреть." );

jr_define( '_JOMRES_BEEZ_WARNING', "Обратите внимание, что ваш шаблон сайта Joomla по умолчанию установлен Beez3. Помните, что наши шаблоны не совместимы с Beez3 и мы рекомендуем вам переключить шаблон сайта с установленным Bootstrapped таких как Protostar." );

jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Автоматически определять страну гостя?" );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Система будет пытаться автоматически определить страну гостя, если они не заходил на Ваш сайт ранее. Вы можете установить эту опцию в положение Нет, и указать страну, которая появиться в форме бронирования, в следующей опции." );

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "О Jomres" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "Справка" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 основные" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Приступая к работе" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "обслуживание системы" );
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Управление доступом" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "инструменты разработчика" );
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "languages" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "Формирование доходов" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "бухгалтерский учет" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "бронирование" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "структура сайта" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "управление пользователями" );
jr_define( "_JOMRES_CUSTOMCODE_MANUAL", "Manual (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "Мой аккаунт (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "назначенные задания" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "функциональность портала" );
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER", "Плагин менеджер" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "интеграция" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "отчеты/статистика" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "налоги" );
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "Tickets (online)" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "help" );
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES", "Обновить" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "способы оплаты" );

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "Тариф по умолчанию" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "Это относится только к новым тарифам" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "Сколько лет показать" );
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "Определяет количество лет, чтобы показать при редактировании тарифа типа" );

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "Счета" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "Аккаунт" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "Войти" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "Выйти" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "Поиск" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "Панель" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "reserve" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "management" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "invoices" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "настройки" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "misc" );
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS", "SRPs" );

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE", "Редактировать страны" );
jr_define( "_JOMRES_EDIT_COUNTRY_ID", "id Страны" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE", "Код страны" );
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME", "Название Страны" );

jr_define( "_JOMRES_EDIT_REGION_TITLE", "Редактировать регион" );
jr_define( "_JOMRES_EDIT_REGION_ID", "id Региона" );
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE", "Код региона" );
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME", "Название региона" );


jr_define( "_JOMRES_COM_LISTCOUNTRIES", "Список стран" );
jr_define( "_JOMRES_COM_LISTREGIONS", "Список регионов" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS", "Экспорт определений" );
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO", "Эта функция позволяет экспортировать переводы, которые были построены с использованием языка автоматического перевода. Это позволит создать текстовое поле, все данные, которые необходимы, чтобы построить новый языковой файл, все, что вам нужно сделать, это скопировать и вставить этот выход в новый языковой файл, который Вы можете поставить на новый Jomres на сервере, или если вы хотите внести свой вклад в сообщество Jomres." );

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS", "Translate locales" );
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES", "Translate lang file strings" );
jr_define( "_JOMRES_COM_NOTAMANAGER", "Ошибка, Вы вошли в систему не Супер менеджером в Jomres, Вы не сможете использовать эту функцию, пока вы не станете Супер менеджером. Это функция безопасности." );

jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT", "Макет недвижимости по умолчанию" );

jr_define( '_JOMRES_LASTEDITED_WARNING_72', 'Jomres использует шаблоны, для вывода товаров и услуг на лицевую часть сайта. Если вы являетесь дизайнером, можете изменять внешний вид Jomres легко, Вам не нужно изменять в коде, Вам всего лишь надо отредактировать шаблон разметки. Эта функция редактирования шаблона позволяет создавать собственные версии шаблонов Jomres. <br/>
<br/>
Когда вы измените шаблон у вас есть возможность сделать конкретные настройки для всех типов недвижимости, или конкретный Тип помещения. Например NGM случайнй модуль плагин использует basic_module_output.html шаблон для создания макета. В результате вы можете создать разные настройки в basic_module_output.html шаблон для различных типов свойств.  <br/>
<br/>
Если шаблон не редактировался, то вы можете создать новые настройки этого шаблона, выбрав новый вариант вместе с ним. При нажатии на новые вы попадёте на новую страницу, где вы можете отредактировать этот шаблон. Первоначальный макет берется из шаблона, хранящегося в /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory, когда вы нажмите кнопку Сохранить, тогда ваши настройки будут сохранены в базу данных и при Jomres использует этот шаблон будет использовать разметку, хранящихся в базе данных, а не разметка хранящиюся в /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend template. Это гарантирует, что настройки не перезаписываются при обновлении Jomres установки.<br/>
<br/>
После того как шаблон был индивидуальные у вас есть другие варианты. Вы можете создать новую копию исходного шаблона (как выше), вы можете скопировать настройки в новый шаблон настройки, так например, если вы уже индивидуальные basic_module_output.html отели, тогда вы можете скопировать настройки для новой настройки на новый тип недвижимости, как и автомобили. Вы можете изменить существующие настройки, или вы можете удалить его. При удалении настройки, обеспечивая там другой настройки этого шаблона потом Jomres будет вернуться к использованию шаблон в /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. Это полезно, если вы редактировали шаблон, но что то пошло не так, изменения которые вы сделали. Вы можете удалить в настройках его и начать все заново на оригинальном шаблоне.<br/>
<br/>
Jomres постоянно развивается и основных шаблонов часто обновляются/изменяются. Если вы используете шаблон редактирования особенность этих обновленных шаблонов не будет перезаписывать настройки, однако это может также означать, что ваши настройки могут не использовать новые возможности в тех основных шаблонов. А у нас нет возможности анализа вашего улучшения, что могут или не могут извлечь выгоду из этих изменений. Шаблон функция редактирования будет смотреть на даты последних изменений файлов в /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory и если он обнаруживает, что файл шаблона последнего изменения Дата новее, чем шаблона который вы сохранили в базе данных, затем Jomres предупредит вас об этом факте. Это безвозвратно обязательно означает, что Вам необходимо обновить ваш шаблон кастомизации однако, что до вас, чтобы решить, если вы должны это сделать' ); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF", "Минимальное пребывание в течении" );
jr_define( "_JOMRES_NIGHTSFOR", " ночей " );


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS", "Список изображений недвижимости, просмотр изображений в форматах GIF, если слайд-шоу изображений доступны.." );
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY", "Показать как GIF-файлов, только если свойство признакам собственности." );

jr_define( "_JOMRES_AGENT", "Агент" );
jr_define( "_JOMRES_AGENT_DETAILS", "Детали агента" );
jr_define( "_JOMRES_AGENT_LISTINGS", "Объявления агента" );

jr_define( "_JOMRES_PROPERTY_LANG", "Язык недвижмости" );
jr_define( "_JOMRES_PROPERTY_LANG_DESC", "Язык по умолчанию для этой недвижимости." );


jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE", "Автоматически публиковать новую недвижимость" );
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC", "Если вы установите эту опцию Нет, то вам нужно будет вручную утверждать новую недвижимость. До утверждения Супер Менеджером, недвижимость добавленная менеджером не будет опубликованна." );
jr_define( "_JOMRES_APPROVALS_MENU_NAME", "Утверждения" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL", "Недвижимость, ожидающия утверждения" );
jr_define( "_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL", "Нет недвижимости ожидающей утверждения" );
jr_define( "_JOMRES_APPROVALS_APPROVE", "Утвердить недвижимость" );
jr_define( "_JOMRES_APPROVALS_REVIEW", "Обзор недвижимости" );
jr_define( "_JOMRES_APPROVALS_NOT_APPROVED_YET", "Эта недвижимость не утверждена. После того, как будет одобренно, вы сможете опубликовать её." );
jr_define( "_JOMRES_APPROVALS_CANNOT_PUBLISH", "К сожалению, вы не можете опубликовать эту недвижимость, пока она не был утверждена." );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT", "Новая недвижимость требует одобрения" );
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT", "Недвижимость была добавлена к системе, которая требует вашего утверждения. Нажмите на ссылку, чтобы просмотреть свойства, ожидающих утверждения в списке : " );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT", "Ваша недвижимость была одобрена" );
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT", "Поздравляем, ваша собственность была одобрена, пожалуйста, нажмите на следующую ссылку, чтобы перейти в панель управления : " );

jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_TITLE", "Переводить названия регионов при поиске" );
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_DESC", "Если вы используете очень быстрый сервер вам рекомендуется оставить значение нет. Из-за большого количества названий региона, название региона перевод занимает много памяти, которой может замедлить ваши результаты поиска." );

jr_define( "_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT", "Guest booked out." );

jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'К сожалению, этот адрес электронной почты уже используется. Если это ваш электронный адрес, пожалуйста, убедитесь, что вы вошли в систему, прежде чем пытаться забронировать.' );

jr_define( "JOMRES_TAPTOCALL", "Нажмите, чтобы позвонить" );

jr_define( "JOMRES_NEWREVIEW_SUBJECT", "Новый отзыв для " );
jr_define( "JOMRES_NEWREVIEW_MESSAGE", "Новый отзыв был оставлен для " );
jr_define( "JOMRES_NEWREPORT_SUBJECT", "Новый отчет" );
jr_define( "JOMRES_NEWREPORT_MESSAGE", "A review has been reported for " );

jr_define( "JOMRES_NON_REGISTERED_USER", "Non registered user" );

jr_define( "JOMRES_JQUERY18_2", "Использовать Jquery 2.x?" );
jr_define( "JOMRES_JQUERY18_2_DESC", "Jquery 2.x быстрее, чем предыдущие реализаций JQuery, однако не хватает некоторых вещей, как $ .browser и поддержки IE6 / 7/8 и старых Firefox и Safari браузерами. Если вы видите ошибки Javascript на странице, или, если ваш шаблон / другие плагины (например, слайд-шоу) использовать старые версии JQuery, то вы должны установить эту опцию в положение Нет." );

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
jr_define( "JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN", "К сожалению, это утверждение неверно. Пожалуйста, попробуйте еще раз." );


jr_define( "JOMRES_GOOGLE_MAPS", "Карты Google" );
jr_define( "JOMRES_GOOGLE_MAPS_INFO", "Эти параметры в основном специфичны для карт в списках собственности и страницы с описаниями свойств. Если включено, только слой Погода будет показано в расширенном плагине картах, слишком много вариантов на увеличенную карту делает его чрезвычайно медленно." );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER", "Использовать слой погоды?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD", "По Фаренгейту или по Цельсию? " );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS", "Цельсия" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT", "Фаренгейта" );

jr_define( "JOMRES_GOOGLE_MAP_OPTION_PANORAMIO", "Просмотр улиц?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRANSIT", "Транзитный слой?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_TRAFFIC", "Слой трафика?" );
jr_define( "JOMRES_GOOGLE_MAP_OPTION_BICYCLING", "Велосипедный слой?" );

jr_define( "JOMRES_GOOGLE_MAPS_POIS", "Enable Gmap Points of Interest (в том числе, возможно, ваших конкурентов)?" );


jr_define( "_JOMRES_METAKEYWORDS", "Meta Keywords" );

jr_define( "_JOMRES_PLEASE_PRINT", "Пожалуйста, распечатайте это письмо и предъявите его по прибытию." );
jr_define( "_JOMRES_OFFICE_USE_ONLY", "Office использовать только" );
jr_define( "_JOMRES_SCAN_FOR_DIRECTIONS", "Отсканируйте этот код в свой телефон, чтобы получить направление к нам." );


jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "Используйте встроенный в VIES функцию проверки НДС?" );
jr_define( "_JOMRES_VAT_FEATURE_ENABLE", "Новое в Jomres 7.3 представляет собой функцию, которая позволяет владельцам бизнеса и гостей, которые имеют действительные НДС цифрами, чтобы ввести свои реквизиты и не имеют НДС, применяемые для их счета там, где это уместно. Эта функция предназначается, чтобы использоваться по ЕС на основе управляющих недвижимостью." );

jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX", "НДС номер, который вы ввели не верны. Вы должны ввести что-то вроде этого: BE805670816B01" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE", "ИНН недействительным. Пожалуйста, проверьте правильность Вашего номера плательщика НДС с Европы НДС номер проверки веб-сервиса (VIES)" );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED", "Поздравляем. Мы смогли проверить Ваш номер НДС." );
jr_define( "_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED", "НДС не был введен номер." );
jr_define( "_JOMRES_TAX_RULES_LIST", "Список налоговых правил" );
jr_define( "_JOMRES_TAX_RULE", "Налоговые правила" );
jr_define( "_JOMRES_TAX_RULE_INFO", "Налоговые правила используются, чтобы создать различные правила налогообложения для разных регионов. Эти налоговые правила затрагивают лицо, осуществляющее бронирование, если они зарегистрированы, войти в систему и редактировать их счета с использованием \"редактировать Мой аккаунт\" страницы. Цель этих правил-обеспечить бухгалтеры в тех районах, которые освобождены от НДС, вы можете обнаружить, что вам не нужно создавать много правил, если таковые вообще." );
jr_define( "_JOMRES_TAX_RATES_IMPORT", "Импорт налоговых ставок" );
jr_define( "_JOMRES_TAX_RATES_IMPORT_INFO", "Мы можем импортировать налоговые ставки для ЕС для вас, если вы пожелаете. Обратите внимание, если вы используете эту функцию, то все ваши существующие налоговые ставки будут удалены." );
jr_define( "_JRPORTAL_TAX_RULE_EDIT", "Изменить налоговые правила" );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER", "Номер НДС для этой недвижимости" );
jr_define( "_JOMRES_VAT_PROPERTY_NUMBER_DESC", "Пожалуйста, введите номер НДС для этого объекта недвижимости." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED", "ИНН подтверждено." );
jr_define( "_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED", "ИНН не подтверждено." );
jr_define( "_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS", "Бизнес-данные, введенные здесь, будут использованы для комиссии и подписки, счета-фактуры." );

jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Вы пока не завели в свой аккаунт на нашем сайте. Чтобы разместить свою собственность на сайте заполнить Ваши контактные данные и реквизиты, прежде чем мы сможем работать с Вами дальше." );


jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT", "Производство или Разработка?" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC", "Если вы установите эту опцию в развитии мы будем включить отчеты об ошибках, в противном случае, когда значение производства, что будет отключаться. Если это живые сервера мы рекомендуем установить этот параметр в значение \"производство\" (\"production\")." );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION", "Производство" );
jr_define( "_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT", "Разработка" );

//v7.3.3
jr_define( '_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Подробная информация о ресурсе' );
jr_define( '_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Детали тарифа' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Только' );
jr_define( '_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'осталось!' );
jr_define( '_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Характеристика ресурса' );
jr_define( '_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Не удается удалить данный ресурс, с ним связан другой ресурс. Удаление объекта из другого ресурса и повторите попытку.' );

// v7.4
$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
$jrConfig   = $siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE',"Медиа-Центр");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY',"Сервис загрузки изображений недвижимости");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD',"Добавить изображения");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM',"Изображения номера (комнаты)");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY',"Главное изображение объекта");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW',"Слайд-шоу изображений");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR',"Очистить список");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP',"Drag & Drop файлы здесь");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS',"Выберите ресурс, для которого необходимо загрузить изображения. Вы можете загружать изображения для отдельных ресурсов (например, номера) вам выдадут второй выпадающий список, чтобы выбрать конкретный ресурс. ");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',"Максимальный размер файла для загрузки не должен превышать ". jomres_formatBytes($jrConfig[ 'размер файла' ]) . ". Только изображения JPG и PNG допускаются.");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE',"Если вы загружаете несколько изображений в качестве \"основного изображения\" будет использоваться только первый из этих изображений.");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW',"Просмотр изображения");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE',"Удалить изображения");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD',"Загрузить изображения");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES',"Характеристика и номер типа изображения");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES',"Типы номеров изображений");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES',"Особенность недвижимости изображения");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL',"Загрузить все файлы");

$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );

jr_define('END_TOUR' , "Закрыть" );

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE' , "Добро пожаловать в вашу недвижимость" );
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT' , "Добро пожаловать в вашу панель. Это ваше Главное меню. Чтобы просмотреть вашу недвижимость, посмотреть как ваши гости будут видеть - выберите пункт Недвижимость, затем предварительный просмотр." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE' , "Имя Вашей недвижимости" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT' , "Всякий раз, когда вы входите в систему как менеджер по недвижимости, вы всегда будете иметь активную недвижимость, название которого вы можете увидеть здесь. Это та недвижимость, с которой вы работаете. Пожалуйста, помните, что вы можете работать только на один объект недвижимости одновременно, Вы не можете открыть две вкладки в браузере и работать на двух разных объектах одновременно." );

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE' , "Выберите Ваш часовой пояс." );
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT' , "Это полезно, если вы находитесь в другом часовом поясе сервера. Это помогает держать ваш сервер полночь и Полночь в синхронизации." );

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE' , "Выбор языка" );
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT' , "Вы можете изменить текущий язык с помощью этого селектора. Это полезно, если вы хотите, чтобы описание Вашей недвижимости было доступно в нескольких языках. Вы можете зайти в свойство детали страницы и введите описание в текущем языке, а затем использовать этот селектор для смены языка на Б. теперь, если вы идете на страницу деталей недвижимости настроек, вы можете ввести Описание В язык Б." );

jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE' , "Это режим редактирования селектора." );
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT' , "Вы можете настроить ярлыки на этой странице, переключаясь на режим редактирования. После включения метки, которые вы можете настроить, будет иметь пунктирной линией. Нажмите на текст и вы увидите всплывающее окно, где вы можете ввести новый текст. Это также работает для разных языков, так что вы можете изменить метку в языке, затем переключиться на язык B и измените текст еще раз, чтобы найти то что подходит вашему вкусу." );

jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE' , "Это область содержимого." );
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT' , "В этой области Вы увидите страницу, над которой вы работаете. В личном кабинете вы увидите календарь, который показывает, какие номера были забронированы и период бронирований пядь. Щелкните дату, чтобы создать новое быстрое бронирование или перетащите с помощью мыши, чтобы выбрать больше чем один день." );

jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE' , "Свойство Active переключение страниц." );
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT' , "Вы можете изменить свойство Active, выбирая первую букву из имени недвижимости ниже. Когда вы это сделаете, вам будет предоставлен список всех свойств у вас есть права на управление." );

jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE' , "Это покажет где ваши имена недвижимости." );
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT' , "После того, как вы нажали на имущество начальную букву, ваши недвижимость покажут в этой области. Нажмите на имя свойства, чтобы перейти к этой собственности. Эта страницы может быть полезной, если вы должны управлять большим количеством недвижимости." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE' , "Это ваш заголовок недвижимости." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT' , "Это показано на каждого гостя титульный лист для Вашей недвижимости. Это показывает ваше имущество, наименование, количество звезд (если таковые имеются), необязательный ссылку на другой сайт, и QR-код. Код позволяет вашим гостям использовать свой смартфон, чтобы получить данные о местоположении на свой адрес." );

jr_define('TOUR_ID_GALLERYWRAPPER_TITLE' , "Ваша фотогалерея" );
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT' , "Это слайд-шоу область. Вы можете загрузить фотографии через страницу Медиа центр Настройки -> пункт меню Медиа центр (Settings -> Media Centre menu option)." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE' , "Основные кнопки." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT' , "Кнопки, которые показаны здесь зависит от того, какие опции вы выбрали в недвижимости Подробности на вкладке параметры -> свойства конфигурации (Settings -> Property Configuration)." );

jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE' , "Встроенный Календарь." );
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT' , "С помощью этого календаря ваш гости могут увидеть, какие даты заняты, на определенную дату и является ли или не существуют какие-либо вакансии. Они могут также использовать кнопки со стрелками над календарем, чтобы изменить месяц просмотра в календаре." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE' , "Номера, вкладка список" );
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT' , "Здесь вы можете посмотреть все номера, и наличие в каждом номере, если Вы нажмете на наличие." );

jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE' , "Отзывы список." );
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT' , "В этой вкладке находятся все отзывы, которые были оставлены для вашего имущества. Только пользователи, которые были забронированы через систему можете разместить отзыв вашей недвижимости." );

jr_define('TOUR_ID_MAPTAB_TITLE' , "Карта вкладка." );
jr_define('TOUR_ID_MAPTAB_CONTENT' , "Под этой вкладкой ваши гости могут увидеть вашу недвижимость в масштабируемой карте." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE' , "Дополнительная информация вкладка." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT' , "В разделе Настройки -> Сведения о недвижимости вы можете ввести информацию о вашей собственности, она может представлять интерес для ваших гостей, какие площади есть рядом, направления движения, аэропорты, других транспортные средства и всё что считаете нужным. После ввода информация можно будет увидеть на этой вкладке." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE' , "Форма Бронирования." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT' , "Ваши гости могут либо перейти на отдельную страницу, или воспользуйтесь формой бронирования на этой вкладке." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE' , "Основные Детали Недвижимости." );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT' , "В разделе Настройки -> Сведения о недвижимости Вы можете заполнить форму под названием описание недвижимости. Это вкладка, которая всегда открыта первая, когда гости заходять в Вашу недвижимость на сайте, так что вы должны попробовать добавить текст, который будет захватывать дух и всё внимание будет только на Ваш отель или квартиру и т.д." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE' , "Все текущие и будущие тарифы" );
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT' , "Это список всех текущих и будущих тарифов. Вы можете изменить внешний вид списка, перейдя в Настройки -> Конфигурация недвижимости и нажав на вкладку Сведения о недвижимости. Измените настройку подробном тарифной опции инфо." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE' , "Местные События." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT' , "Если есть какие-то локальные события, происходящие в вашей собственности они будут показываться в этом списке. Он используется для таких вещей, как фестивали, рынки и т. д. События, которые происходят на конкретные даты." );

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE' , "МДостопримечательности." );
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT' , "Если есть какие-то достопримечательности рядом с вами, любите музеи или парки аттракционов они будут перечислены здесь." );

jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE' , "Доступные Аукционы." );
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT' , "Если ваша недвижимость имеет какие-либо сроки проведения аукциона, тогда эти аукционы будут показаны здесь. Аукционы представляют собой удобный способ вождения бизнес в вашу собственность в периоды затишья." );

jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE' , "Конфигурация Бронирования." );
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT' , "На этой вкладке вы можете настроить части как форме бронирования работает. Если вы сдаете номера в недвижимость, например, в гостинице или B&B, то вы можете настроить такие вещи, как номера списка стиль." );

jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE' , "Информацию о вашем бизнесе." );
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT' , "Здесь вы вводите ваш бизнес адрес и номер НДС, если он у вас есть. Эти детали будут показаны по счетам-фактурам ваши гости будут видеть, и любые счета, формируемые сайт для вас." );

jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE' , "Внешние ссылки." );
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT' , "Вы можете добавить ссылку на другой сайт здесь." );

jr_define('TOUR_ID_TAB_GATEWAYS_TITLE' , "Gateways (Шлюзы)." );
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT' , " (Gateways)Шлюзы-это термин, используемый для описания платежных услуг. Если у вас есть счет с одного шлюза служб, показанные в этой вкладке вы можете ввести данные Вашего аккаунта в этой вкладке принимать платежи онлайн." );

jr_define('TOUR_ID_TAB_MISC_TITLE' , "Другое ." );
jr_define('TOUR_ID_TAB_MISC_CONTENT' , "Эта вкладка предназначена для настроек, которые не вписываются в любой другою вкладку." );

jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE' , "Сведения об объекте параметры страницы." );
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT' , "Эта вкладка позволяет Вам изменять различные параметры, как они показаны на вашу собственность странице подробности (перейти на Jomres Главное меню -> Панель управления -> предварительный просмотр, чтобы увидеть, что страница) (Go to the Jomres Main Menu -> Dashboard -> Preview to see that page)." );

jr_define('TOUR_ID_TAB_REQUIRED_TITLE' , "Обязательные поля в форме бронирования." );
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT' , "Эта вкладка позволяет задать, какие элементы в форме бронирования являются обязательными или необязательными." );

jr_define('TOUR_ID_TAB_SRPS_TITLE' , "Вилла/квартира конкретные параметры." );
jr_define('TOUR_ID_TAB_SRPS_CONTENT' , "На данной вкладке доступны настройки, которые часто пользуются виллы и апартаменты. Любое имущество, где вы находитесь сдача в аренду всей собственности, а не комнаты в собственность в индивидуальном порядке. Сказал, что эти параметры могут использоваться как вилла и отель типа свойства." );

jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE' , "Single Person Supplements." );
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT' , "Single person supplements are charges that are added to a booking if a room that can cater for two only holds on individual." );

jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE' , "Тарифы" );
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT' , "На этой странице вы можете настроить как тарифы и депозиты рассчитываются." );

jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE' , "Туристический Налог." );
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT' , "Если ваша страна или город взимает туристический налог, вы можете настроить их здесь." );

jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE' , "Контролировать параметры." );
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT' , "Micromange тарифный режим редактирования определенных параметров." );

jr_define('TOUR_ID_TAB_WISEPRICE_TITLE' , "Умные настройки цены." );
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT' , "Данная вкладка позволяет включить и настроить Ваш номер цены динамически, что дает вам возможность получить скидку на номер, если цены на размещение при бронировании апартаментов невысокие." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Ваша недвижимость." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "На этой странице представлен список недвижимости, вы можете управлять ей. Слева вы можете увидеть, опубликованы или нет. Имя недвижимости это тоже ссылка, если Вы нажмете на эту ссылку Вы сразу перейдёте в свойство недвижимости. " );

jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE' , "Таблица" ); 
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT' , "Ваши данные представлены в виде таблицы макета. Слева есть выпадающий список что позволяет изменить количество элементов, отображаемых на каждой странице. Далее у вас есть несколько кнопок, которые позволяют экспортировать данные в таблице. Вы можете 1. Копировать данные в буфер обмена. 2. Экспорт данных в виде CSV (с Разделителями-запятыми значения). 3. Экспорт в формат Excel. 4. Позволяет экспортировать данные в виде PDF файла и распечатать 5. Позволяет переключит раскладку, так что вы может распечатать данные. Наконец, справа, есть поле ввода, где вы можете искать для конкретной строки или строк легко. Над каждой колонкой есть Заголовки, можно нажать на Заголовок столбца для сортировки содержимое по возрастанию или по убыванию." );

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE' , "Ваша недвижимость." );
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT' , "На этой странице представлен список недвижимости вы можете управлять ей. Слева вы видите опубликованы или нет. Имя недвижимости это тоже ссылка, если Вы нажмете на эту ссылку Вы сразу переключите свойство Active на это имущество. " );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE' , "Создание недвижимости, шаг 1." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT' , "Создание новой объявления это двухэтапный процесс. На первой странице вам будет предложено выбрать страну и регион вашей недвижимости, выберите тип недвижимости и этот процесс вы будете использовать, чтобы управлять им." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE' , "Страна Недвижимости." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT' , "Здесь вам будет предложено выбрать из выпадающего списка страну недвижимости. Как только вы выберите страну, страница перезагрузится, и вы сможете выбрать регионе." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE' , "Тип недвижимости." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT' , "Из этого выпадающего выберите тип недвижимости. Это может быть что-то вроде виллы или апартаментов, если вы будите сдавать объект целиком, или если вы будете сдавать комнаты в объекте, то выберите отель или кровать и завтрак." );

if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Процесс управления." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "Процесс управления - как ваше имущество будет использовать посетители на сайте. Если сдавать в аренду недвижимость, или комнаты в недвижимости, то вы выбрали бы Аренда (Rental). Если вы хотите предложить туры/конечного резервирования ресурсов (например лыжи), которые забронированы ту же форму бронирования, тогда вы бы все-таки выбрали этот вариант. Если вы не используете функциональности аренды, а только добавляете объекты для информационных целей выберите Real Estate (объект недвижимости)." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE' , "Процесс управления." );
	jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT' , "Процесс управления-это о том, как ваше имущество будет использоваться посетителями на сайте. Если сдавать в аренду недвижимость, или комнаты в собственность, то вы бы сами велосипедов. Если Вы не предлагающих любой вид аренды функциональность и добавляя свойство только для информационных целей, а затем выбрать Недвижимость." );
	}

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE' , "Создание недвижимости шаг 2." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT' , "Теперь вы можете начать ввод сведений о вашей недвижимости. Не волнуйтесь об изображениях, вы можете загрузить их позже через настройки -> медиа-центр (Settings -> Media Centre)." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE' , "MRP или SRP." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT' , "Параметры настройки отличаются в зависимости от того, если вы сдаёте в аренду помещения в недвижимости, или в недвижимость целиком. Выберите MRP, если вы предлагаете номера, выберите SRP если вы предлагаете весь отель. Если это SRP вам будет предоставлен выпадающий список где вы можете выбрать количество номеров в для сдачи. Вам нужно будет выбрать один из этих вариантов." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE' , "Название и адрес недвижимости" );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT' , "Пожалуйста, введите название недвижимости и адрес." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE' , "Количество звезд." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT' , "Если ваша недвижимость имеет оценку в виде звезд на основе признанного стандарта, выберите номер из раскрывающегося списка. Некоторые страны имеют рейтинг на один общедоступный стандарт — Бельгия, Дания, Греция, Италия, Мальта, Нидерланды, Португалия, Испания и Венгрия имеют законы, определяющие рейтинг отеля. В Германии, Австрии и Швейцарии, рейтинг определяется соответствующей гостиничной индустрии ассоциации с помощью пяти-звездной системе — немецкой классификации туристских (*), стандартные (**), комфорт (***), первого класса (****) и Luxury (*****), с отметкой превосходит флаг экстры за рамки минимальных требований, предусмотренных в стандарте." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE' , "Расположение на карте." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT' , "На странице подробностей вы увидите карту. Укажите на карте место расположения Вашего отеля/квартиры здесь, либо с помощью широты и долготы или с помощью перетаскивания маркера в самой карте." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE' , "Характеристики недвижимости." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT' , "Выберите характеристики, которые применимы к вашей недвижимости. Эти характеристики используются в функции поиска, поэтому важно, чтобы эти точно отражало вашу недвижимость." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE' , "Информация о Вашей недвижимости." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT' , "У вас есть несколько полей описания, где вы можете ввести информацию о Вашей недвижимости. Описание недвижимости появится на первой вкладке - подробности/Просмотр страницы, так что вы можете описать Вашу недвижимость здесь." );


jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE' , "Политика и Отказ от ответственности." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT' , "Это где вы должны указать Ваши условия и политику, такие как отмена бронирования. Когда Гость нажимает на форму бронирования, прежде чем они смогут завершить бронирование они вынуждены принять Ваши условия, и есть возможность перейти по ссылке которая будет показывать описание терминов. Когда они нажмите на ссылку, информация отображается в небольшом окне." );

jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE' , "Список всех заказов." );
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT' , "На этой странице вы увидите все заказы, независимо от того был внесен задаток или нет. Щелкните значок редактирования слева от бронирования, чтобы посмотреть детали бронирования на странице." );

jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE' , "Список новых бронирований." );
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT' , "На этой странице приведен список всех новых бронирований, то есть указаны где бронь еще не оплачена. Щелкните значок редактирования слева от бронирования, чтобы посмотреть детали бронирования на странице." );

jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE' , "Список старых заказов." );
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT' , "На этой странице перечислены все исторические заказы, то есть заказы, которые были отменены или Гость была раскуплена. Щелкните значок редактирования слева от бронирования, чтобы увидеть, что указание информации." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE' , "Список гостей." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT' , "Страница позволяет перечислить всех гостей. По умолчанию только гости, или гости будут перечислены, однако вы можете выбрать историю из выпадающего списка, которые бронировали или уже отменили свои заказы, а также текущих гости." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE' , "Переопределения." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT' , "Переопределения здесь доступны только менеджеры отеля, Гости не могут видеть или использовать их. Они позволяют переопределять оба окончательную стоимость заказа (опционально не включены в это переопределение, они все равно оплачивается по полной цене) и стоимости залога." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE' , "Купоны." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT' , "Если вы создали несколько скидочных купонов для этого свойства, то этот вход будет доступен, и гости могут ввести скидочные коды здесь, чтобы получить скидку на стоимость их номер бронирования." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE' , "Сведения." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT' , "Изменение любого из этих вариантов приведет к номера списка, поскольку список пересмотрены с учетом длины бронирования и других переменных. Если вы создали несколько типов Гость, тогда менеджер сможете изменить количество гостей для бронирования здесь." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE' , "Фильтер номеров." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT' , "Если вы настроили свойство использовать обычный список номеров, гости могут выбрать определенный номер, который они хотели бы заказать, а не просто номер определенного типа. Это более популярен среди рынков недвижимости. В списке номеров есть кликабельные картинки, которая при нажатии будет всплывать и показывать больше информации об индивидуальном номере. Дополнительный бонус этого макета заключается в том, что если вы создали в некоторых номерах установлен и отмечен номер как имеющий определенную функцию, то бухгалтер может использовать номер функции для фильтрации через свободные номера, чтобы гарантировать, что они получают точно, чего они хотят. Обратите внимание, вы можете изменить количество номеров каждого типа, которые показаны в номер список через настройки -> свойства конфигурации -> вкладка бронирования номера (Settings -> Property Configuration -> Booking rooms), изменяя имеющиеся номера/тариф лимитный вариант. Это покажет меньший список номеров для гостя, но в качестве управляющего недвижимостью вы все равно увидите полный список номеров." );


if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Дополнительное оборудование, услуги." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "Вы можете создать два типа доп оборудования, который покажет здесь. Первый тип-базовый Дополнительная комплектация, которая может быть создана по нескольким разным моделям, например, за ночь, за человека, за человека и за ночь и т. д. Они особенно полезны, для добавления дополнительных услуг при бронировании, но эти элементы не ограниченные ресурсы. Так, например, вы могли бы добавить букет цветов по прибытии, или трансфер из аэропорта. Другой тип дополнительной настроен от тур/профилю деятельности Управления меню параметр в разделе параметры, и используется для создания элементов с конечными ресурсами. Как правило для этого используют такие вещи, как экскурсии в музеи и другие сайты. Короче, любой ресурс, где есть всего несколько мест свободных на заданную дату." );
	}
else
	{
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE' , "Дополнительное оборудование, услуги." );
	jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT' , "Вы можете создать дополнительного или услуги, который будет показываться здесь. Они могут быть созданы по нескольким разным моделям, например, за ночь, за человека, за человека и за ночь и т. д. Они особенно полезны, когда вы хотите для добавления дополнительных услуг при бронировании, но эти элементы не ограниченные ресурсы. Так, например, вы могли бы добавить букет цветов по прибытии, или трансфер из аэропорта." );
	}
	

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE' , "Существующие гости." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT' , "Если у вас уже есть гости вы можете выбрать их, выбрав его имя в раскрывающемся списке, который появится здесь. Это избавит вас от необходимости добавлять свои детали снова и снова. Если регулярно делать заказы от имени же гостя, вы можете всегда использовать этот выпадающий список, чтобы выбрать их, иначе вы будете в конечном итоге создавать нескольких гостей с одинаковыми именами если Вы вводите свои данные каждый раз вручную." );

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE' , "Гость детали." );
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT' , "Если вы хотите изменить какие поля должны быть заполнены Гостем, вы можете зайти в Настройки -> свойства конфигурации -> вкладка требуется (Settings -> Property Configuration -> Required tab)." );

jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE' , "Черные бронирования." );
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT' , "Черные бронирования, которые были сделаны в отеле, но не всегда для конкретного гостя. Они могут быть потому что отель находится на ежегодном отпуске, или потому что номер закрыт на ремонт." );

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE' , "Информация о Вашей недвижимости." );
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT' , "Описание недвижимости появится на первой вкладке на вашу Недвижимость подробности/Просмотр страницы, так что вы должны положить ваш привлекает внимание текст здесь." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE' , "Нормальный режим тарифов." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT' , "Это самый простой способ вы можете ввести номер ценам. Выберите количество номеров данного типа, стоимость номера, Количество гостей, номер может вместить и общее количество людей вы готовы отдыхать в-бронирования и нажмите кнопку Сохранить. Цены тогда будут установлены в течение следующих десяти лет. Если вы хотите получить больше контроля над ценами, то, пожалуйста, изменить свой тарифный режим редактирования для продвинутых или Микроменеджментом." );

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE' , "Нормальный режим тарифов." );
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT' , "Это самый простой способ вы можете ввести номер ценам. Выберите Ваш Тип помещения, укажите цену и максимальное количество человек в бронировании и нажмите кнопку Сохранить. Цены тогда будут установлены в течение следующих десяти лет. Если вы хотите получить больше контроля над ценами, то, пожалуйста, изменить свой тарифный режим редактирования для продвинутых или Микроменеджментом." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE' , "Номера и тарифы." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT' , "На этой странице вы можете редактировать номера, тарифы и распределять номера. Есть три вкладки, которые позволяют редактировать отдельные элементы. Прежде чем начать редактирование номера или тарифы, необходимо понимать, что существует взаимосвязь между номерами, типы номеров и тарифов. В форме бронирования, если вы видите номер типа выпадающего или нажмите кнопку, чтобы выбрать номер, то происходит выбор сочетания номер и тариф. Такой подход позволяет создавать различные тарифы для одних и тех же номеров - типы номеров, так например вы можете создать один тариф для кровать и завтрак, и второй тариф на кровать, завтрак + ужин. Номера могут иметь индивидуальный тариф. Если Вашего номера в списке устанавливается в классическом, то ваши гости могут использовать комнаты функции для фильтрации номеров в форме бронирования, чтобы найти номер с определенным набором характеристик, которые они хотят." );

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE' , "Номера и тарифы." );
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT' , "На этой странице вы можете изменить ваш Тип помещения и Ваших тарифов." );

jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE' , "Типы Гостей." );
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT' , "Типы гостей являются важной частью настройки, если вы планируете взимать с человека за ночь, или просто потому, что вам нужно знать, сколько людей будет. Вы можете создать любой тип гостя - например взрослых, подростков и детей. Типы гостей могут стоить больше или меньше, чем базовый тариф (тариф ввести в разделе тарифы) либо фиксированная ставка, либо процент. Таким образом, Вы можете настроить различные цены для различных типов гостей. Если не взымается на человека за ночь, то можно оставить настройки по умолчанию при создании гостевого типа." );

jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE' , "Купоны." );
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT' , "Купон - коды полезный метод для привлечения клиентов. Когда вы создаете новый код купона, система автоматически сгенерирует случайный код для вас, но Вы не должны использовать, что если вы хотите, вы можете создать свой собственный код. Когда вы создаете код купона, вы можете либо назначить его Гостю, или нет. Коды, которые не закреплены за конкретными гости могут быть использованы любым гостем, так что эти коды должны использоваться в маркетинговых материалах. Вы можете также можете определить даты, между тем, когда код должен быть использован, и даты, что должно быть указание на кодек чтобы вступил в силу. Как только код купона была создана вы будете иметь возможность просмотреть печати список скидочных купонов. Они могут сканировать QR-код на распечатке в своем мобильном телефоне/планшетный ПК. Код перенесет их прямо в форме бронирования со скидкой код уже применен." );

jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE' , "Дополнительное оборудование." );
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT' , "Дополнительное оборудование, услуги, элементы, которые могут быть добавлены к бронирования. Это предметы, услуги которые не ограничеваются, поэтому нет управления ресурсами, связанных с ними. Когда вы создаете дополнительное оборудование вы можете выбрать различные параметры, например, максимальное количество из них, которые могут быть добавлены к бронирования, и является ли или нет лишними, или должны быть принудительными. При этом, мы имеем в виду, если он автоматически выбирается в форме бронирования, и Гость не может снять его. Это полезно для обязательных платежей вроде полотенец или уборку. Кроме того, вам нужно будет выбрать модель, которая означает, как платежи будут рассчитываться за лишние. Если вы хотите одного варианта должен быть применен (например, для бутылки шампанского, чтобы быть доступны по прибытии), то вы установите модель для всего бронирования. Если вы хотете взимать плату за что-то на каждый день, тогда вы выбрали бы в день вариант." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_TITLE' , "Медиа-Центр." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT' , "Медиа-центр позволяет легко загружать изображения вашей недвижимости. По умолчанию вы можете загрузить основные изображения недвижимости (фактически, вы можете загрузить больше, но только первый в списке будет использоваться), неограниченное количество изображений, которые будут показаны в слайд-шоу, и неограниченное число изображений для каждого помещения." . jr_gettext("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS",'_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',false) );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE' , "Выбора ресурсов." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT' , "Это средство выбора ресурсов. Это позволяет выбрать, какого рода ресурс вы загружаете изображения (например, слайд-шоу изображений или номера) и если это комната, то после выбора номера вам будет предоставлена возможность выбрать, в какую комнату вы хотите загрузить изображения в другом выпадающем списке, рядом с ним. Это позволяет Вам загружать несколько изображений для каждого отдельного помещения, если вы пожелаете. Обратите внимание, номер изображения загружать только касается свойств, таких как отели, пансионаты и т. д. Виллы и апартаменты не имеют эту опцию." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE' , "Существующие изображения." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT' , "В этом столбце показаны изображения, которые уже были загружены. Вы можете выбрать либо просмотр изображения, или удалить его. Каждый раз, когда вы изменяете время ресурса в этом столбце будет обновлено для отображения изображений для конкретного ресурса." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE' , "Загрузить элементы управления." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT' , "У вас есть несколько элементов управления здесь. Вы можете использовать кнопку Добавить изображения, чтобы выбрать изображения, которые вы хотите загрузить, или вы можете перетащить изображения в окне ниже. Кнопка очистить очищает список изображений, готовых для загрузки. После того как вы выбрали изображения для загрузки, вы можете загрузить их по отдельности, или все сразу." );

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE' , "Выбрать изображения." );
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT' , "В этом столбце показаны изображения, которые можно загрузить, или те что вы уже загрузили так как вы посещали данную страницу. " );

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE' , "Готово!" );
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT' , "Вот и закончилась справка. Если у вас возникли вопросы, пожалуйста не стесняйтесь связаться с нами. " );

jr_define('PRODUCT_TOUR_PAGE_INFORMATION' , "СПРАВКА" );

//8.0
jr_define('COMMON_PREV' , "Назад" );
jr_define('COMMON_MORE' , "Больше" );
jr_define('_JOMRES_DASHBOARD_TODAY' , "Сегодня" );
jr_define('_JOMRES_DASHBOARD_YEAR' , "Год" );
jr_define('_JOMRES_DASHBOARD_MONTH' , "Месяц" );
jr_define('_JOMRES_DASHBOARD_WEEK' , "Неделя" );
jr_define('_JOMRES_DASHBOARD_DAY' , "День" );
jr_define('_JOMRES_HLEGEND' , "Legend" );
jr_define('_JOMRES_HFILTER' , "Фильтр" );
jr_define('_JOMRES_HFROM' , "From" );
jr_define('_JOMRES_HTO' , "To" );
jr_define('_JOMRES_HNEW_BOOKING' , "Новая бронь" );
jr_define('_JOMRES_HSTATUS_DEPOSIT' , "Статус Депозита" );
jr_define('_JOMRES_HSTATUS_GUEST' , "Статус гостя" );
jr_define('_JOMRES_HSTATUS_BOOKING' , "Статус Брони" );
jr_define('_JOMRES_HSTATUS_PUBLISHING' , "Статус публикации" );
jr_define('_JOMRES_HSTATUS_INVOICE' , "Статус счёта" );
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE' , "Тип счёта" );
jr_define('_JOMRES_HSTATUS_APPROVED' , "Утверждён" );
jr_define('_JOMRES_HSTATUS_CURRENT' , "Current business" );
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR' , "Показать заказы на" );
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR' , "Показать счета для" );
jr_define('_JOMRES_STATUS_ANY' , "Any" );
jr_define('_JOMRES_STATUS_PAID' , "Оплаченно" );
jr_define('_JOMRES_STATUS_NOTPAID' , "Не оплачено" );
jr_define('_JOMRES_STATUS_CHECKEDOUT' , "Checked out" );
jr_define('_JOMRES_STATUS_ACTIVE' , "Active" );
jr_define('_JOMRES_STATUS_CANCELLED' , "Отменен" );
jr_define('_JOMRES_STATUS_PUBLISHED' , "Опубликован" );
jr_define('_JOMRES_STATUS_NOT_PUBLISHED' , "Не опубликован" );
jr_define('_JOMRES_STATUS_PROVISIONAL' , "Предварительное бронирование" );
jr_define('_JOMRES_STATUS_CONFIRMED' , "Подтвержденное бронирование" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE' , "Гости с активными заказами" );
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST' , "Гости с прошлых заказов" );
jr_define('_JOMRES_STATUS_BOOKINGS' , "Бронирование" );
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS' , "Подписки" );
jr_define('_JOMRES_STATUS_COMMISSIONS' , "Комиссий" );
jr_define('_JOMRES_STATUS_ALL_PROPERTIES' , "Все мои бизнес" );
jr_define('_JOMRES_ACTION_SET_CURRENT' , "Установить как текущий" );
jr_define('_JOMRES_ACTION_CHECKIN' , "Заезд" );
jr_define('_JOMRES_ACTION_CHECKOUT' , "Выезд" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", "Бронирование" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES", "недвижимость" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS", "Гости" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS", "отчеты" );
jr_define( "_JOMRES_HLIST_GUESTS", "Гости" );
jr_define( "_JOMRES_HLIST_GUESTS_MENU", "Список гостей" );
jr_define( "_JOMRES_HLIST_INVOICES_MENU", "Список счетов-фактур" );
jr_define( "_JOMRES_HLIST_PROPERTIES", "Предприятия" );
jr_define( "_JOMRES_HQUICK_BOOKING", "Быстрое бронирование" );
jr_define( "_JOMRES_HDATE_OF_BOOKING", "Дата бронирования" );
jr_define( "_JOMRES_HTWO_WEEKS", "Две недели" );
jr_define( "_JOMRES_BOOKING_CANCELLATION_WARNING", "Это бронирование будет аннулировано. Нажмите кнопку ОК, чтобы отменить бронирование." );
jr_define( "_JOMRES_HOVERVIEW_CHECKINS", "Today checkins" );
jr_define( "_JOMRES_HOVERVIEW_CHECKOUTS", "Today checkouts" );
jr_define( "_JOMRES_HOVERVIEW_CURRENT_RESIDENTS", "Нынешние жители" );

jr_define( "_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB", "Настройки навигации" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION", "Панель навигации местоположение" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_DEFAULT", "Default (область содержимого)" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_TOP", "Крепится к верхней" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_BOTTOM", "Крепится в низу" );
jr_define( "_JOMRES_BOOTSTRAP_LOCATION_INVERSE", "Инвертированный Navbar (изменение цвета)" );
jr_define( "_JOMRES_BOOKING_NUMBER", "Номер бронирования" );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Показать гости для" );

jr_define('_JOMRES_BOOTSTRAP_VERSION' , "Bootstrap версия" );
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC' , "В настоящее время применяется только к интерфейсу. Эта опция позволяет выбрать, будет ли или не использовать шаблоны Jomres, которые совместимы с Bootstrap 2 или 3. Bootstrap Если вы не уверены, что ваш шаблон работает с Bootstrap 3, то мы рекомендуем вам оставить эту опцию для начальной загрузки 2." );

jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR' , "Показать гости для" );
jr_define('_JOMRES_HFIXED_PERIODS' , "Фиксированные периоды" );
jr_define('_JOMRES_HDEPOSITS' , "Депозиты" );
jr_define('_JOMRES_HBOOKING_FORM' , "Форма бронирования" );
jr_define('_JOMRES_HREQUIRED_FIELDS' , "Обязательные для заполнения поля" );

jr_define('COMMON_PLACEHOLDER_FIRSTNAME' , "Том" );
jr_define('COMMON_PLACEHOLDER_SURNAME' , "Смит" );
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER' , "110" );
jr_define('COMMON_PLACEHOLDER_STREET' , "Улица" );
jr_define('COMMON_PLACEHOLDER_TOWN' , "Город" );
jr_define('COMMON_PLACEHOLDER_LANDLINE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_MOBILE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME' , "My Hotel" );
jr_define('COMMON_PLACEHOLDER_POSTCODE' , "XXNN NNXX" );
jr_define('COMMON_PLACEHOLDER_EMAIL' , "example@address.com" );

jr_define('EXTENDED_CONFIGURATION' , "Расширенная Конфигурация" );
jr_define('SIMPLE_CONFIGURATION' , "Простая Конфигурация" );
 
jr_define('_JOMRES_HRESOURCE_FEATURES' , "Ресурс располагает" );
jr_define('_JOMRES_HRESOURCE_TYPE' , "Тип ресурса" );
 jr_define('_JOMRES_HEDIT_GUEST_TYPE' , "Редактирование гостевого типа" );
jr_define('_JOMRES_HEDIT_COUPON' , "Редактировать купон" );
jr_define('_JOMRES_HEDIT_EXTRA' , "Редактирование дополнительных услуг" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE' , "Создать несколько ресурсов" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE' , "Сгенерировать ресурсы" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY' , "Сколько ресурсов?" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE' , "Ресурсы типа" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS' , "аксимальное количество гостей на ресурс" );
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE' , "Удалить все существующие ресурсы?" );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Обратите внимание, Вы просматриваете в данный момент администратор зоны с расширенными сайта конфиг нет. Если вы хотите увидеть другие варианты, пожалуйста, установите настройки сайта -> Разное -> дополнительно config для сайта да (Site Configuration -> Misc -> Advanced Site Config to Yes).' );

jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE' , "Конфигурация бронирования." );
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT' , "На этой вкладке вы можете настроить внешний вид в форме бронирования." );

jr_define('TOUR_ID_TAB_BOOKINGS_TITLE' , "Бронирование." );
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT' , "Эта вкладка позволяет изменять как заказы обрабатываются, плюс другие различные параметры." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE' , "Редактировать Гостя." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT' , "Здесь вы можете отредактировать Гость контактные и адресные данные. Обратите внимание, что любые изменения здесь будут отражены только в этой записи. Если Гость сделал заказ на другой недвижимости, эти изменения не появляются на этих других объектах недвижимости." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE' , "НДС." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT' , "Если номер плательщика НДС его покажут на гостевом счете-фактуре." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE' , "Скидка." );
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT' , "Вы можете дать этим гостям автоматическую скидку, которая будет применяться всякий раз, когда они делают заказ." );


jr_define('DATATABLES_SINFO' , "Showing _START_ to _END_ of _TOTAL_ entries (Показывая начало на конец общая записей)" );

jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL',"Одобрен");
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY',"Отклонить запрос бронирования");
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY',"Утвердить запрос бронирования");
jr_define('_JOMRES_STATUS_APPROVED',"Утвержден");
jr_define('_JOMRES_STATUS_REJECTED',"Отклонено");
jr_define('_JOMRES_STATUS_INQUIRY',"Запрос");

jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE',"Бронирование требуют одобрения или подтверждения доступности ?");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', "Если установлено да, когда производится бронирование, оно не будет отображаться на доступности календаря (и другие гости все еще могут забронировать эти дни и ресурс), до тех пор пока менеджер не подтверждает бронирования. После того, как менеджер подтвердил, бронирование вставляется как предварительная бронь (если Безразлично `перекрывают другие заказа, другие гости больше немогу забронировать те же даты) и письмо будет отправлено заказчику сделать оплату.");

jr_define('_JOMRES_ERROR',"Ошибка");
jr_define('_JOMRES_ERROR_MESSAGE',"Извините! Произошла ошибка при попытке обработки этой функции. Отправьте это сообщение нам и мы изучим эту ошибку.");

jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE',"Сообщение");
jr_define('_JOMRES_ERROR_DEBUGGING_FILE',"Файл");
jr_define('_JOMRES_ERROR_DEBUGGING_LINE',"Линия");
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE',"Trace");


jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE',"Email шаблоны");
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT',"Редактировать шаблон электронной почты");
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT',"Email тема");
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT',"Email текст");
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE',"Email тип");
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME',"Email имя");
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC',"Email описание");
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS',"Пожалуйста, посмотрите эту страницу для помощи Настройка электронной почты и список доступных продукции: <a href=\"http://manual.jomres.net/email_templates.html\" target=\"_blank\">Email Templates Help</a>");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME',"Отправлять письмо администратору при новом бронировании Email");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC',"E-mail отправлено администратору сайта, когда новый заказ сделан, если глобальная шлюз Paypal включен");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME',"Новый заказ бронирования отелю Email");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC',"E-mail отправляется владельцу собственности, когда сделан новый заказ");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME',"Отправить гостю при новом бронировании Email");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC',"E-mail отправляется гостю когда производится новое бронирование гостем");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME',"Письмо С Подтверждением гостю");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC',"Версия для печати Письмо или адрес электронной почты, которые могут быть отправлены вручную собственником, чтобы подтвердить номер");


jr_define('_JOMRES_CAN_BE_APPROVED',"Это бронирование может быть утверждено. Все выбранные ресурсы доступны для выбранной даты.");
jr_define('_JOMRES_CANT_BE_APPROVED',"Данное бронирование не может быть принято, поскольку некоторые ресурсы уже забронированы для выбранной даты. Вам необходимо изменить дату бронирование, в первую очередь.");

jr_define('_JOMRES_SHOW_POWEREDBY',"Показать ссылку сделанно на Jomres в сноске Jomres в footer (нижнем колонтитуле).");


jr_define('GUEST_BUDGET',"Бюджет");
jr_define('GUEST_BUDGET_FEATURE_SWITCH',"Характеристика использования бюджета?");
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC',"Загружаемые сайты только! Бюджет функция-это функция из списка недвижимости, которые гости могут использовать, чтобы выделить для них недвижимость, которые цена за ночь под определенную недвижимость. Функция имеет некоторые ограничения в том, что она может не подойти для некоторых сайтов, которые используют много различных валютах. Обратите внимание, если вы используете этот плагин и признакам списки, выбранный Вами листинг оборачивать класс автоматически изменен на 'панель-основной' когда в списке недвижимости отображается.");

jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Имя: ' );


jr_define( '_JOMRES_FOR', 'Для' );
jr_define( '_JOMRES_PRICINGOUTPUT_NIGHT', 'ночь' );
jr_define( '_JOMRES_PRICINGOUTPUT_NIGHTS', 'ночей' );
jr_define( '_JOMRES_CONFIG_SHOW_OVERLAY', 'Показать цены наложения' );
jr_define( '_JOMRES_CONFIG_SHOW_OVERLAY_DESC', 'В списке недвижимости можно показать цену на изображении собственности, использовать этот параметр, чтобы переключить это дисплей. Совокупный цена рассчитывается от даты, введенных в Ajax Search композитного плагина.' );

jr_define( '_JOMRES_LIVE_SCROLLING', 'Использовать живые скроллинг/прокрутка бесконечность в списке недвижимости?' );

jr_define( "_JOMRES_ONLINE_PARTNERS", "Партнеры" );

jr_define( '_JRPORTAL_MONTHS_SHORT_0', 'Янв' );
jr_define( '_JRPORTAL_MONTHS_SHORT_1', 'Фев' );
jr_define( '_JRPORTAL_MONTHS_SHORT_2', 'Мар' );
jr_define( '_JRPORTAL_MONTHS_SHORT_3', 'Апр' );
jr_define( '_JRPORTAL_MONTHS_SHORT_4', 'Май' );
jr_define( '_JRPORTAL_MONTHS_SHORT_5', 'Июн' );
jr_define( '_JRPORTAL_MONTHS_SHORT_6', 'Июл' );
jr_define( '_JRPORTAL_MONTHS_SHORT_7', 'Авг' );
jr_define( '_JRPORTAL_MONTHS_SHORT_8', 'Сен' );
jr_define( '_JRPORTAL_MONTHS_SHORT_9', 'Окт' );
jr_define( '_JRPORTAL_MONTHS_SHORT_10', 'Ноя' );
jr_define( '_JRPORTAL_MONTHS_SHORT_11', 'Дек' );

jr_define('DATATABLES_SEMPTYTABLE'		, "." );
jr_define('DATATABLES_SINFO'			, "Записи с _START_ по _END_ из _TOTAL_ записей" );
jr_define('DATATABLES_SINFOEMPTY'		, "Записи с 0 по 0 из 0 записей" );
jr_define('DATATABLES_SINFOFILTERED'	, "(отфильтровано из _MAX_ записей)" );
jr_define('DATATABLES_SINFOPOSTFIX'		, "" );
jr_define('DATATABLES_SINFOTHOUSANDS'	, "." );
jr_define('DATATABLES_SLENGTHMENU'		, "Показать _MENU_ записей" );
jr_define('DATATABLES_SLOADINGRECORDS'	, "." );
jr_define('DATATABLES_SPROCESSING'		, "Подождите..." );
jr_define('DATATABLES_SSEARCH'			, "Поиск:" );
jr_define('DATATABLES_SZERORECORDS'		, "Записи отсутствуют." );
jr_define('DATATABLES_SFIRST'			, "Первая" );
jr_define('DATATABLES_SLAST'			, "Последняя" );
jr_define('DATATABLES_SNEXT'			, "Следующая" );
jr_define('DATATABLES_SPREVIOUS'		, "Предыдущая" );
jr_define('DATATABLES_SSORTASCENDING'	, ": активировать для сортировки столбца по возрастанию" );
jr_define('DATATABLES_SSORTDESCENDING'	, ": активировать для сортировки столбцов по убыванию" );


jr_define('DATATABLES_SHOWHIDE'	, "Изменить столбцы" );

jr_define( '_BOOKING_ONREQUEST', 'Бронирование по запросу' );
jr_define( '_BOOKING_INSTANT', 'Мгновенное бронирование' );

jr_define( '_JOMRES_COM_FONTAWESOME', 'Включить заглавный шрифт иконка?' );
jr_define( '_JOMRES_COM_FONTAWESOME_DESC', 'Установите в Yes, если ваш шаблон, не включают в себя шрифт удивительным.' );

jr_define( '_BOOKING_CALCQUOTE', 'Запрос бронирования' );

jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Дорогой ');

jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Выберите сайт');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Сайт id');

jr_define('_JOMRES_IS_EU_COUNTRY', 'ЕС Страна?');

jr_define('_JOMRES_WORD_CACHING', 'Кэширование');


jr_define('_JOMRES_WORD_PATTEMPLATE_CACHING', 'Использование patTemplates кэширование?');

jr_define( '_JOMRES_HLASTCHANGED', 'Последнее изменение' );

jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME',"Отмена бронирования E-mail");
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC',"E-mail отправлен владельцу собственности, когда бронирования отменено");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME',"Гость отмена брони E-mail");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC',"E-mail отправлено гостю при новой отмене бронирования");

jr_define('_JOMRES_TEST_EMAIL_SEND',"Отправить тестовое письмо");
jr_define('_JOMRES_TEST_EMAIL_SUBJECT',"Тест email");
jr_define('_JOMRES_TEST_EMAIL_CONTENT',"Это тест по электронной почте из системы бронирования.");
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS',"Тестовое сообщение успешно отправлено");
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE',"Тест сообщение не было отправлено");


jr_define('_INVOICE_TRANSACTIONS',"Сделок (Transactions)");

jr_define('_OPENEXCHANGE_API',"Open Exchange Rates API key");
jr_define('_OPENEXCHANGE_API_DESC','To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can register for a free key at https://openexchangerates.org/signup/free (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');

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

jr_define( '_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?' );
jr_define( '_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.' );

jr_define( '_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.' );
jr_define( '_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details" );
jr_define( '_JOMRES_CLEAR_GUEST_DETAILS', " -- New Guest -- " );

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
jr_define( '_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");

jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES", "What management process will this room type be for?" );
jr_define( "_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC", "Is the room type for a hotel type property, or a villa type property?" );
jr_define( '_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types' );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES", "Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs." );
jr_define( "_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES", "Use the New button above to create new Room Types." );


jr_define( "_JOMRES_PROPERTYTYPE_FLAG_TOURS", "Tours" );
jr_define( "_JOMRES_PROPERTYTYPE_FLAG_REALESTATE", "No bookings/Real estate ( simple listing )" );


jr_define( "_JOMRES_CONFIG_LOG_LOCATION", "Log file location" );
jr_define( "_JOMRES_CONFIG_LOG_LOCATION_DESC", "Jomres logs system activity by default to the ".JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_WARNING", "Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the ".JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you." );

jr_define( "_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED", "If your CMS is installed in the root directory of your website, then a suitable location would be " );

jr_define( "_JOMRES_CONFIG_GMAP_KEY_WARNING", "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres." );

jr_define( "JOMRES_GOOGLE_MAP_STYLE", "Google map colour scheme" );
