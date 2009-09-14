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
define('_JOMRES_COM_MR_MRARRIVEDESC','Покажи сегодняшние прибытия');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','Покажи сегодняшние отъезды');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','Покажи заказывающие запросы');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','Покажите другие запросы');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','Быстрое резервирование');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','Список живые заказы');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','Покажите профили');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','Языки');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Общая Конфигурация');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','Формируйте скидки');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','Конфигурация Комнат/собственности');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','Конфигурация Собственности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','Конфигурация Норм');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','Назад');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','Назад к Mos Residents заказам');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','Конфигурация');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','Загрузите Типовые Данные');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','Да');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','Нет');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','Новый');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','Новая комната');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','Новая особенность комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','Новый тип комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','Новая собственность');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Новая особенность собственности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','Новый гость');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','Запишите');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Имя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Прибытие');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Отъезд');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Назначьте функции admin на пользователя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','Удостоверение личности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Имя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Имя пользователя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Уполномочиваемые пользователи');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Собственность по умолчанию');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Измените это');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Уровень доступа');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Пользователь изменен');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','N/A');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','Измените собственность');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','Измените уровень доступа');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Рецепция');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Менеджер собственности');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Все заказы');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Новые заказы');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Редактируйте Заказ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','прибытия/отъезды');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Гость');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Комната');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Оплата');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Имя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Фамилия');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','Гость должен прибыть сегодня. Щёлкните этой кнопкой, если он прибыл.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','Примечания');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Специальные требования');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Пожалуйста отметьте, что некоторые специальные требования могут подвергнуться наценкам.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','Взрослые');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','Дети');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Отмените заказ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','Удостоверение личности пользователя вебсайта');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Число дома или название');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Улица');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Город');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Почтовый индекс');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Телефонный номер');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Мобильный номер');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','Номер факса');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','Адрес электронной почты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','Предпочтения');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','Автомобильный регистрационный номер');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','Отмененный клиент ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','Отмененная гостиница');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','Выберите причину отмены');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','Дни до прибытия');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>Должные налоги отмены</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Не может отменить этот заказ, поскольку гость уже зарегистрирован');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','Депозит заплаченный, нет больше должных сумм денег');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','Депозит не заплаченный, должный депозит');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','Депозит заплаченный, 50 % должного общего количества контракта');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','Депозит не заплаченный, 50 % должного общего количества контракта');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','Депозит заплаченный, 100 % должного общего количества контракта');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','Депозит не заплаченный, 100 % должного общего количества контракта');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','Должный остаток');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Депозит не заплаченный');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Подтвердите отмену');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Заказ отменен');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Дни к прибытию');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Тип заказа');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Черный');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Рецепция');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Интернет');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','Название комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Комната');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Этаж');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Доступ для нетрудоспособных людей?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Макс. число людей');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Тип комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Описание типа комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Список особенностей комнаты');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&pound;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','£');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','Правила норм');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Депозит заплаченный');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Введите депозит');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Общее количество, чтобы заплатить');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Справка депозита');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','Справка оплаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Заказ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Депозит');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Депозит записан');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>Предупреждение...</FONT></h1><BR><B>Вы должны изменить chmod вашего языкового файла к 766 для языка, который будет обновлен</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','Quick Res - выберите типы комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','Чекбокс');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','Число взрослых');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','Число детей');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','Кровать требуется?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','Альтернативно');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','Введите ИЛИ ночи, гость будет оставаться, ИЛИ исходная дата');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','Число ночей');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','Пожалуйста выберите требуемый тип комнаты, дата прибытия гостя и или число ночей, гость остаётся или их исходная дата. Наконец, введите число взрослых и детей в контингенте.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Наши комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','Имя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','Номер');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','Этаж');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','Доступ для нетрудоспособных людей?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','Макс. число людей');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','Детайли');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Собственность');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Тип комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','К сожалению наши доступные комнаты не могут обслужить это много гостей');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">К сожалению собственность не может предложить приспособление в течение этого периода. Пожалуйста возвратитесь к календарям и рассмотрите пригодность, показанную там.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','Пожалуйста выберите из падающего списка');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','Выберите этого гостя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','Описание');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','Список клиента');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">ОШИБКА: была ошибка в вашем выборе дат.<br>Нажмите обратную кнопку и вернитесь ваши данные.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">ОШИБКА: Вы нуждаетесь по крайней мере в одном госте, чтобы составить заказ.<br>Нажмите обратную кнопку и вернитесь ваши данные.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">ОШИБКА: отобранные диапазоны даты неправильны.<br>Нажмите обратную кнопку и вернитесь ваши данные.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">ОШИБКА: Вы не выбирали никаких типов комнаты.<br>Нажмите обратную кнопку и вернитесь ваши данные.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">ОШИБКА: Заказ даты находится в прошлом или сегодня.<br>Нажмите обратную кнопку и вернитесь ваши данные.</font>');

// Display guest form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','Введите детали гостя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','Подтвердите детали гостя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Редактируйте детали гостя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Имя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Фамилия');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Дом');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','Улица');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Город');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Почтовый индекс');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','телефонный номер');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Мобильный телефон');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','Номер факса');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','Электронная почта');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','Регистрационный номер');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Номер кредитной карточки');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Карта была выпущена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Карта истекает');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Число выпуска');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Название на карте');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Сделайте ваш выбор');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','Выберите');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','Тариф');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','Тарифное Описание');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','Мин. дни');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','Макс. дни');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','Мин. людей');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','Макс. людей');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Дни, чтобы остаться');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','Ежедневная норма');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Число гостей');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Общее количество');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','Депозит');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','По крайней мере один изо дней выбрал падения в выходной день.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','Жаль, никакие тарифы не были найдены, что пригодный критерии определили. Не отчайтесь однако, может вполне быть, что мы должны щипнуть ваши требования немного. Пожалуйста попробуйте еще раз, изменяя число дней, которые Вы желаете остаться, или альтернативно позвоните и закажите комнату по телефону.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Рассмотрите конфигурацию собственности и комнаты');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Особенности комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Типы комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Собственность');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Особенности собственности');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Комната');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Тип');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','Собственность');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','Тип');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Имя');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Число');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Этаж');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Доступ для нетрудоспособных людей?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Макс. людей');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Особенности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Комната добавлена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','Комната обновлена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','Щелкните связью uid комнаты, чтобы редактировать пункт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Редактируйте пункт');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Особенности комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Описание особенности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','Щелкните особенности комнаты связываются, чтобы редактировать пункт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Особенность комнаты добавлена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Особенность комнаты обновлена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','Редактируйте пункт');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Тип комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Сокращение типа комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Описание типа комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','Щелкните связью uid класса комнаты, чтобы редактировать пункт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Тип комнаты добавлен');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Тип комнаты обновлен');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Редактируйте пункт');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','Собственность');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Название');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Улица');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Город');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Область');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Страна');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Почтовый индекс');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Телефон');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Факс');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','Электронная почта');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Вебсайт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Особенности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','Щелкните связью uid собственности редактировать пункт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Собственность добавлена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Собственность обновлена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','Редактируйте пункт');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Особенности Собственности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Сокращение особенности собственности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Особенность собственности полное описание');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','Щелкните связью uid особенности собственности, чтобы редактировать пункт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Особенность собственности добавлена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Особенность собственности обновлена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','Редактируйте пункт');

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Тарифы');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Тарифное название');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Описание');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Действительный от');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Действительный к');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Норма в ночь');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Минимальные дни');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Максимальные дни');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Минимальные люди');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Максимальные люди');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Тип комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Игнорируйте PPPN');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','Позвольте выходные дни');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Позвольте уикэнды');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','Щелкните редактирующейся связью текста, чтобы редактировать тариф');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Тариф добавлен');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Тариф обновлён');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Редактируйте пункт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Клонируйте пункт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','Удалите Тариф');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Тариф удалён');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Редактируйте тариф');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Выходные дни');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','Дата конца периода выходного дня должна быть последний  вечер который Вы намереваетесь объявить гостей по нормам выходного дня.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','Редактируйте Выходной день');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','Описание');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','Начало');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','Конец');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','Новый выходной день');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','Щелкните редактирующейся связью текста, чтобы редактировать выходной день');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','Выходной день добавлен');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','Выходной день обновлён');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','Редактируйте пункт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','Клонируйте пункт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','Удалите выходной день');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','Выходной день удалён');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Заказ сохранен');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','Пожалуйста гарантируйте, что форма заполнена правильно.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','Только зарегистрированные пользователи могут заказать онлайн');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','Пожалуйста регистрируйтесь');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','Заказы офлайн');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','Мои детали');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','Мои заказы');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','Управлять');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','Закажите комнату');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Зарегистрируйте гостя');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Отрегистрируйте гостя');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Список заказов');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','НОВЫЕ заказы');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Приборная панель');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Управление Гостем');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Управление Собственностью');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','Управление Тарифом');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','Управление Скидкой');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','Управление Выходным днем');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','Пожалуйста выберите требуемый тип комнаты, вашу дату прибытия и число ночей, Вы будете оставаться. Наконец, войдите число взрослых и детей в контингенте.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','Пожалуйста войдите в ваши детали. Вы только должны сделать это однажды, поскольку система будет помнить Вас для будущих посещений.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','Пожалуйста выберите комнату, которой Вы требуете.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','Пожалуйста войдите в ваши детали. Отметьте, что все области требуются кроме вашего мобильного номера.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Проверьте пригодность');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','Я хочу эту комнату');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','Выберите гостя');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Подтвердите ваши детали');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','Выберите мой тариф');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','Выберите типы комнаты');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Имя');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Фамилия');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Число дома');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Улица');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Город');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Почтовый индекс');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Номер телефона');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Мобильный номер');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','Номер факса');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Нет никаких комнат, доступных способный удовлетворить определённые параметры');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','Войдите ваши детали');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','Потвердите Ваши детайли');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>Спасибо за то, что делаете ваш заказ с нами и мы надеемся, что Вы наслаждаетесь вашим пребыванием.<br><br> <b>Пожалуйста отметьте, что это только предварительный заказ, и не будет подтверждён, пока Вы не получите ваше письмо подтверждения от нас.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Заказ сделанного для собственности: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Заказ сделанного для комнаты: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','Число взрослых: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','Число детей: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Прибытие: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Отъезд: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','Ночи пребывания: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','Уникальное ID гостя: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Название: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Наземная линия связи: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Мобильный телефон: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','Тариф: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Стоимость контракта: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','Требуемый депозит: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','Жаль, но Вы должны обновить ваши детали прежде, чем мы можем обработать заказ. Пожалуйста сначала нажмите на связь "Мои Детали" и закончите ваши детали адреса. Спасибо.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','Спасибо, ваши детали были записаны.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','Добро пожаловать, незнакомец. Прежде, чем Вы можете заказать комнату, Вы должны обновить ваши детали под "Моими Деталями" связь.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','Добро пожаловать снова ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Запишите гостя ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Выберите гостя ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Гость зарегистрировался ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','Никакие гости не должны прибыть сегодня');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Выпишите гостя ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','Гость выписан ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','Подтвердите выписывающегося гостя');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','Никакие гости не должны отбыть сегодня');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','Гости, прибывающие сегодня');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','Гости, которые отбывают сегодня');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','Занятые комнаты');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','Новые заказы');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','Cмотрите на использование комнаты от:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','Приложения');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','Тарифы и Валюта');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','Дисконтирование');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','Политика отмены. НЕ ОСУЩЕСТВЛЁННЫЙ');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','загружение файлов');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','Текущие настройки');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','Объяснение');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Авторское право Vince Wooll 2005');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','Заказы офлайн?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','Возьмите заказы офлайн если Вы не желаете взять заказы.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','Дисконтная схема доступна?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','Дисконтная схема для тех, кто желает предложить скидки людей в зависимости от числа гостей. Поскольку это работает на числах в стороне, не рекомендуется, чтобы Вы использовали это, если Вы не таксуйте на основании "на человека в ночь".');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','Порог Уровня 1');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','Порог Уровня 2');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','Порог Уровня 3');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','Порог Уровня 4');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','Дисконтная стоимость уровня 1');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','Дисконтная стоимость уровня 2');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','Дисконтная стоимость уровня 3');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','Дисконтная стоимость уровня 4');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Дополнения для одного человека ');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Уверьтесь, что это Да, если Вы хотите взять плату за дополнения для одного человека');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Плата за дополнения для одного человека');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','Дополнения для кровати .');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','Удостоверьтесь, что это Да, если Вы хотите взять плату чтобы поставлять кровать');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','Плата за дополнения для кровати');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Требуемый депозит - процент?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Требуется депозит быть процентом от полного заказа? Если нет, то применённый депозит будет стоимостью');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','Стоимость необходимого депозита');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','На человека, в ночь');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Выберите Да, если Вы хотите зарядить "на человека в ночь". Если не, то затраты будут вычислены на основание "в комнату в ночь"');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','Штраф может быть восстановлен?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','Выберите Да, если Вы хотите заставить деньги, утраченные после заказа отмен использоваться клиентом в будущем. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','Файл существует');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','Типы файла');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','Определите здесь, который типам файла позволяют загрузить. Используйте отделённые запятой строчные списки без мест. Пример: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Размер файла');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Максимальный размер файла изображения в килобайте');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','Щёлкните для использования комнаты недели, начинающегося сегодня');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','Нажмите на заказанную комнату, чтобы рассмотреть заказ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','или выберите дата, которая Вы интересуетесь');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','Заказанная');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','Свободная');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>Комнаты с синим фоном заказаны, однако<br> если комната имеет красный текст, то никакой депозит не платился.<br> Где комната имеет звезду рядом с "Заказанная" тогда, гость надо прибыть в этот день.<br> Если комната имеет жёлтый текст, то гость в настоящее время занимает комнату.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','Письмо подтверждения');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','Дорогой/ая ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Стоимость в ночь - в комнату');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Детали резервирования');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Спасибо за то, что заказывать в');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','Ниже - резюме ваших деталей резервирования. Пожалуйста проверьте, что мы имеем все ваши правильные детали. Свяжитесь с нами, если есть ошибка.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Ваша комната будет сохранена до вашего прибытия, и регистрация - после 14:00.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Мы будем с нетерпением ждать приветствовать Вас на ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Мы надеемся, что Вы имеете приятное пребывание.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Теперь мы должны принести ваше внимание к маленькой текст.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Вам напоминают, что заказ - юридически обязательный контракт, так, если по какой-нибудь причине Вы должны отменить или сократить ваш заказ тогда, Вы все еще склонны заплатить полное количество.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Никакое пособие не может быть сделано для пищи, не взятой или для комнат, не занятых в течение полного периода заказа. С этим в памяти мы настоятельно рекомендуем, чтобы Вы использовали страховое средство.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>Отмена и обвинения сокращения</i>, Если Вы отменяете ваш праздник отмена, должны быть подтверждены в письменной форме. Платы отмены следующие:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 дней или больше');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' Депозит только.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 - 30 дней');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% полного контракта.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Дата прибытия к 14 дням');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% полного контракта.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','17.5% НДС  включён во все тарифы. Любое увеличение или изменения будут включены.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','Напечатайте письмо подтверждения');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','Распечатка счета');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','Дорогой/ая ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','Стоимость в ночь - в комнату ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Число ночей: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Контракт согласован первоначально: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Стоимость в ночь: ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Общее количество');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','Детали счета');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Спасибо за то, что быть клиентом в');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Мы надеемся, что мы будем видеть Вас снова.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','17.5 НДС % включён во все тарифы. Любое увеличение или изменения будут включены.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Напечатайте счëт');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','Добавьте обслуживание к счету');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Описание обслуживания');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','Стоимость обслуживания');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','Добавьте к счету');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Другие объявленные пункты');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Другие объявленные пункты, общая стоимость: ');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Пункт, добавленный к счету');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red> Гостиница по умолчанию, не найденная</h1><br>Не может продолжиться. Свяжитесь с вашим администратором сайта.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','Выберите файл изображения, чтобы быть приложен');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','Загрузите изображение');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','Загрузите');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','Загрузка файла');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','Ваш файл может иметь тип - максимальный размер');
/**
* @ignore
*/
	define('_JOMRES_FILE_SUBMIT','Представьте новый Файл для Загружения');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','Вам только разрешают загрузить файлы типа:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','Пожалуйста выберите файл перед загружением');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','Файл должен только содержать алфавитно-цифровые характеры и никакие интервалы пожалуйста.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','Размер файла превышает максимум, который Администратор установил.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','Файл с указанным именем файла уже существует. Пожалуйста дайте этому другое название перед загружением.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','Ваш Файл(ы) был загружен.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','Файл, НЕ загружен.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','Ваш Файл был загружен.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','Присоединитесь к jomres сети?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','Если Вы хотите добавлять эту собственность в jomres сеть, то это будет перечислено в jomres.net. Пожалуйста отметьте, предполагается, что это - живая гостиница. Jomres.net не может считаться ответственным за вашу собственность. Вы должны гарантировать, что ваши детали правильны.');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','JS Календарь');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','JS Календарный языковой файл');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Выберите языковой файл, который должен использоваться в календаре Javascript. Пожалуйста отметьте, что некоторые из календарей могут быть дефектными, См. http://sourceforge.net/tracker/?group_id=75569&atid=544287 за дополнительной информацией');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','JS Календарный файл CSS');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','Выберите файл CSS, который должен использоваться в календаре Javascript');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','Проверьте для выходных дней?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','Если Вы устанавливаете этот выбор в Да, то Вы должны гарантировать, что Вы имеете отдельные тарифы/нормы для выходных дней и нормальных дат. Установите это в No, если Вы поместили те же самые нормы для выходных дней и нормальных дат.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','Разное');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent calls');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');

/**
* @ignore
*/
define('_JOMRES_FILE_DELETE','Удалите это изображение');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','Файл удалëн');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','Покажите область отъезда');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','Установите это к Да, если Вы хотите показать область отъезда. Было отмечено, что могут быть некоторые браузеры, которые не в состоянии обращаться с javascript календарём должным образом. Лично я оставляю выключенное, потому что я думаю, имея область, там уродливо');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','Выберите собственность, относительно которой Вы хотите информацию пригодности комнаты');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','Любая');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','Комната');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','Собственность');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','Покажи sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','Установите это к Вкл. видеть SQL.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','Покажите sql результаты');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','Установите это к Вкл. видеть данные SQL возвратилось и var_dumped.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','Выберите ваш пакет шаблона');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','css удостоверение горных кнопок');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','css удостоверение названий таблицы');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','Шаблоны');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','Удалить');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Неспособный удалять эту комнату, есть заказы против этого. Отмените те заказы, тогда повторите.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','Комната Удалённая');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Удалите особенность комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Неспособный удалять эту особенность комнаты, это назначено на некоторые комнаты. Удалите особенность из тех комнат и повторите.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Особенность комнаты удалённая ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Удалите особенность собственности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Неспособный удалять эту особенность собственности, это назначено на собственность. Удалите особенность из этой собственности и повторите.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Особенность собственности удаленная ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Удалите тип комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Неспособный удалять этот тип комнаты, это назначено на комнату. Пробуйте повторно назначить комнату на другой тип комнаты, тогда попробуйте ещë раз.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Неспособный удалять этот тип комнаты, это назначено на тариф. Пробуйте повторно назначить тариф на другой тип комнаты, тогда попробуйте ещë раз.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Тип комнаты удалëн');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','Удалите собственность');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','Неспособный удалять эту собственность, она имеет данные в таблице: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','Собственность удалена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Вы не имеете право удалить эту собственность.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','Выберите эту собственность');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','С которым собственность будет ваша комната быть связанной?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','Выберите собственность');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','Вы должны выбрать собственность');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','Крошечная ширина маленького изображения');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','Средняя ширина маленького изображения');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Ширина полного изображения');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Щёлкните для карты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Описание собственности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Времена регистрации');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Деятельности в области');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Направления движения');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Аэропорты');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Другой транспорт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Политика и правовые оговорки');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','Ваш ключ собственности Jomres.net');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','Когда Вы готовы поднять ваш вебсайт на сети, посетите <href = "http: // www.jomres.net" target="_blank"> Jomres.net </a> для вашего ключа собственности. С этим jomres может регистрировать вашу собственность на Сети Jomres, гарантируя что ваша досягаемость самая широкая аудитория для вашего бизнеса.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','Наши собственности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Адрес');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Посетители могут заказать онлайн');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Установите это к Да, чтобы гарантировать, что посетители могут заказать комнаты онлайн.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Заказы для фиксированный период');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Если Вы устанавливаете это в Да, то заказы будут взяты в течение фиксированного периода. Если это будет Нет, то гарантируйте, что "определите день прибытия" не установлен в Да (если Вы определённо не хотите вынудить людей прибывать в определённый день), иначе, то Вы не будете получать много связей в календаре пригодности.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','Период заказа: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','Заказ комнат');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','Граница таблицы для заказа');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','Измените цвет табличным границы');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','Фон таблицы заказа');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','Измените цвет фона таблицы заказа');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','Ширина таблицы заказа');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Максимальные периоды, напр. 3x 7 периодов заказа = 21 дни');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','Число гостей требуется?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','Установите это в Да, чтобы показать области чисел гостя в форме заказа');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Что это - квартира/дом/вилла?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Напр. Вы сдаёте в аренду собственность, а не комнаты в той собственности. Если дело обстоит так, то Вы должны удостовериться, что Вы только имеете одну комнату, зарегистрированную для каждой собственности.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','Максимальное число взрослых');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','Установите максимальное число взрослых в форме заказа');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','Максимальное число детей');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','Установите максимальное число детей в форме заказа. Если это установлено в ноль тогда, то хедеры и числа детей , dropdown списки и т.д не будет показываться вообще.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','Перейти');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Рассмотрите заказ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','Подтвердите заказ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','Скидки');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>Внимание...</FONT></h1><BR><B>Вы нуждаетесь к chmod в вашем site_config.php файле к 777, чтобы позволить изменить вашу конфигурацию</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','понедельник');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','вторник');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','среда');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','четверг');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','пятница');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','суббота');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','воскресенье');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','пон');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','вт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','ср');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','чет');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','пят');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','суб');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','вос');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','Кал. пригодности');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','Лицо шрифта для всего текста');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','Размер шрифта для всего текста');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','Высота клетки');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','Ширина клетки');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Цвет шрифта для текущей даты');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Цвет шрифта для дней в показе месяца');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Цвет шрифта для дней не в показе месяца');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Цвет фона клетки для дней, когда собственность/комната доступна');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Цвет фона клетки для дней не в показе месяца');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Цвет фона клетки для занятых дней');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Цвет фона клетки для временно заказанных комнат (заказы, для которых не был взят депозит)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Цвет фона клетки для дат в прошлом');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','Цветовой ключ:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Занятый/Не доступный');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Доступный для заказов');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Временные заказы');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Предопределённый день прибытия');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Только для сайтов, предлагающих установленные заказы периода. Выберите день, на котором прибытие должно начаться.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Фиксированный день прибытия');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Период пребывания (дни)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Показать календари пригодности?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Заставьте это в Да, чтобы показывать календари пригодности');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','Подтвердите ваш выбор');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','Пригодность');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','Вещи Вы должны сделать: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','Рассмотрите ваши выбранные даты ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','Рассмотрите числа ваши гостя ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','Обеспечьте ваши личные детали');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','Сделайте ваш выбор');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','Рассмотрите вашу выбранную комнату');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','Рассмотрите ваш заказ. Когда Вы удовлетворены, пожалуйста подтвердите ваш заказ');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Нажмите на свободную дату, чтобы рассмотреть форму заказа.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','Черные заказы');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','Никакие чëрные заказы');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Новый Чëрный заказ');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','Закажите эти комнаты черныйм заказом');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','Удалите гостя');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Гость удален');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Неспособный удалять этого гостя, поскольку они имеют заказы, открытые против них. Отмените заказы и попробовать еще раз.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','Административный панель показан как ленты');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','Установите это в Да, если Вы хотите использовать еженедельный лентовидным показ, в противоположность ежемесячному календарному показу для пригодности.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Фактическая стоимость комнаты: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','Электронная почта не действительна ');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','Это электронная почта, получена от');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Привет');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Спасибо за то, что делать ваш заказ с');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Резюме заказа следует:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Если Вы имеете любые вопросы относительно этого заказа или любого другого обслуживания, то, пожалуйста свяжитесь с нами.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Наш номер телефона');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Альтернативно Вы можете связаться с нами по электронной почте в');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Курение');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"Любая");
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','Календарный выходной формат');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Это позволяет пользователю изменять выходной формат дат в пределах Jomres');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','Календарный входной формат');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','Это позволяет пользователю изменять входного формата дат в пределах Jomres.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Фиксированные заказы периода позволяют короткое пребывание');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Длина короткого пребывания');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Изданный');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','Настройки');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','Paypal');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','Использование paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','Использовать Paypal sandbox?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','Требует PayPal Developer Account');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','Ваш paypal email');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','Отметьте: Чтобы использовать paypal, Вы должны пойти в ваш paypal  счет и позволить Автовозвращение. (Профиль/Предпочтение Оплаты Вебсайта) Активируйте Авто Возвращение: Вкл., Установите URL Возвращения: http://www.domain.com/index.php?option=com_jomres&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','Ошибка, paypal email не был установлен');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Аудиторский след');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','Никакой аудиторский след');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','Дата');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','Время');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','Пользователь (имя пользователя)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Операция');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','Права собственности');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Рассмотрите детали');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>Любой</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Фильтр на даты');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Фильтр на имени пользователя');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Фильтр на операции');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Статус');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Ожидание Прибытия');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Прибудьте сегодня');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Текущий Житель');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Отбывает сегодня');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Отъезд запоздалым');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Не прибыл');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','Фильтр');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Неизвестный пользователь');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Созданная комната');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Обновлённая комната');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Удалённая комната');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Созданная особенность комнаты');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Обновлённая особенность комнаты');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Удалённая особенность комнаты');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Вставленный тип комнаты');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Обновлённый тип комнаты');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Удалённый тип комнаты');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Созданная собственность');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Обновлённая собственность');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Удалённая собственность');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Созданная особенность собственности');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Обновлённая особенность собственности');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Удалённая особенность собственности');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Отредактированные настройки собственности');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Изданная собственность');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Созданный тариф');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Обновлённый тариф');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Удалённый тариф');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','Созданный выходной день');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','Обновлённый выходной день');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','Удалённый выходной день');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','Добавленный налог обслуживания');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','Отменённый заказ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Зарегистрируйте гость');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Отрегистрируйте гость');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','Обновлённые детали cc');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Введённый депозит');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Созданный гость');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Обновлённый гость');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Удалённый гость');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','Загруженное новое изображение собственности');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','Загруженное различное изображение собственности');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','Удалённое изображение');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','Загруженное новое изображение комнаты');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','Загруженное различное изображение комнаты');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','Загруженное новое изображение ресурса');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','Загруженное различное изображение ресурса');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Заказали комната');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Создали екстра');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Обновили екстра');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Удалили екстра');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Издали екстры');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Введённый черный заказ.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Удалённый черный заказ.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','Екстры');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','Редактируйте екстры');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','Описание');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','Название');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','Цена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','Новая екстра');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','Щёлкните редактирующейся связью текста, чтобы редактировать екстру');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','Екстра добавлена');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Екстра обновленная');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Редактируйте пункт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','Клонируйте пункт');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','Удалите екстру');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','Екстра удалённая');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Административные Екстры');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','Показывать екстры во время заказа?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','Заставьте это в Да, чтобы показывать любые екстры, что Вы можете желать предложить гостю');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Дополнительные екстры');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','Выберите эту собственность');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','Инвертируйте выбор/выберите все');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Дата начала Черного заказа');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Дата, когда обслуживание возобновляется ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Черные заказы');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','Один или больше проверенных комнат уже заказаны. Если Вы желаете сделать Черный Заказ для этих комнат, Вы сначала должны отменить заказы для них.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Была ошибка, пытающаяся заказать эти комнаты, одна или больше комнат, которые Вы выбрали, не свободным.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Комнаты, включённые в черный заказ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','Удалите черный заказ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Рассмотрите черный заказ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Никакие черные заказы, чтобы перечислить');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Число звезд');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','Показать выбор курения?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','Заставьте это в Да показывать курящий выбор.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','Сброс');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','Ваш статус оплаты от paypal установлен на Ожидающий. Как только гостиница может подтвердить квитанцию оплаты тогда, заказ будет изменен на подтверждённый.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Заказ отменен');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','Ищите здесь:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' Поиск ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','Показать информацию отладки paypal?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','Показывать названия комнаты?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','Заставить это в Да показывать названия комнаты?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','Показать типы комнаты?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','Заставить это в Да показывать типы комнаты?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','Выбор по умолчанию для курения');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','Знайте: Если ваш выбор по умолчанию - Да, и все ваши комнаты - Никакое курение, то никакие комнаты не обнаружатся во внесении в список страницы заказов.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','Символ валюты');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Напр. &amp;pound&#59; Пожалуйста отметьте, что Вы должны использовать код HTML объектов для необходимого символа. Поскольку список этих объектов пожалуйста посетите <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','Код валюты');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Напр. GBP. Это используется в электронной почте клиенту, подтверждающему их заказ.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Щёлкните за дополнительной информацией');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>Предупреждение... Вы загружены как менеджер с привилегиями для всех свойств. Знайте, что это может вызвать проблемы, выполняя некоторые функции в пределах Jomres.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Ограничивать прогресс заказов?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Установите это в Да, если Вы хотите ограничить прогресс заказов (используйте следующую область, чтобы установить предел в терминах дней). Если Вы установите это в да тогда, если пользователь будет пробовать заказать больше чем n дни заранее тогда, то их дата прибытия будет восстановлена к сегодняшней дате');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Дни, которыми ограничены передовые заказы:');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>ОТМЕТЬТЕ: не рекомендуется, чтобы Вы установили оба из следующих вариантов к Да. Вы должны использовать только одно из двух налоговых вычислений, доступных для Вас. </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','Налог');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','Налог комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','Разработанный для американского рынка. Они - количества налога комнаты, которые будут заряжать гостю. Вы можете зарядить комбинацию и/или фиксированных и числа процента. Отметьте, что эти налоги только применены к стоимости комнаты.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','Налог - установленное количество');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Налог - процент');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','Налог');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','Для любого рынка, который применяет общую оценку, напр. НДС в Великобритании. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Налоговый процент');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','Архивируйте все отчёты');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' отчёты заархивированные');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Одитер архивировал контрольные отчеты');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','Наши Тарифы');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','Тарифное название');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','Тарифное описание');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Тип комнаты');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','Действительный от');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','Действительный до');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','На человека в ночь');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','В ночь');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Не включение уикэндов');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Минимум дни');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Максимум дни');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Минимум люди');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Мксимум люди');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','Предварительный просмотр');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','Редактирование вкл.?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Текущий текст');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','Новый текст');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Обновлённый таможенный текст.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Редактируйте Язык');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','Число незаархивированных отчетов: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','Есть больше чем 200 отчетов в активном аудиторском следе, поэтому не возможно показать выполненные действия SQL. Если Вы желаете рассмотреть SQL, то Вы будете должны анализировать контрольная таблица непосредственно. Если Вы хотите проверить SQL регулярно, рекомендуется, чтобы Вы архивировали регулярно.');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','Тип собственности');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','Список типов собственности');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Редактируйте тип собственности');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','Тип собственности');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Описание типа собственности');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','Тип собственности записанный');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Неспособный удалять тип собственности. Тип собственности назначен на одно или более свойств, пожалуйста повторно назначьте их перед попыткой удалить');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','Тип(ы) собственности удалëн');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>Ошибка, собственность не имеет никаких комнат.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>Ошибка, собственность не имеет никаких тарифов.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>Ошибка, собственность не имеет никаких типов комнаты.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','Измените собственность');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Остаток, чтобы заплатить');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>Ваша paypal сделка была закончена, и квитанция для вашей закупки была послана по электронной почте к Вам. Вы можете регистрировать в ваш счет в www.paypal.com, чтобы рассмотреть детали этой сделки. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','Никакие дополнительные услуги, чтобы добавить к счету');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','Депозит');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','Полное количество');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','Количество, требуемое во время заказа ');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Используйте этот выбор решить, какая плата должна требоваться во время заказа. Выберите депозит, если депозит нужно платится, или Полное количество, если полное количество нужно платится.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','месяцы, чтобы показать');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','В пригодности комнаты, Сколько месяцев календаря нужно показать?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Подписанный от имени ');

// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','Ворот');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','Отменить');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Пожалуйста выберите комнату(ы), которую Вы желаете вынуть обслуживания, и уместных дат. <br>, Если комната не имеет контрольной метки против этого, это не может быть включено в черный заказ, пока любые выдающиеся заказы не были закончены/отменены. <br/>, Когда Вы выбрали соответствующие даты, щёлкните, синяя кнопка "Примените" чтобы повторно проверить пригодность комнаты. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Это похожо, что Joomla отрегистрировал Вас для бездеятельности </b>, Пожалуйста загрузитесь, и попробовать еще раз.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','Причина');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Использовать ворот оплаты?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Установите это в Да, если Вы хотите использовать ворота оплаты онлайн. <b>Примечание:</b> Это не выключает вычисление депозита, показанное в течение процесса заказа. Чтобы повредить это, Вы можете редактировать шаблоны, которые показывают комнаты и обёртывают элементы, которые обращаются к депозитам в классе, шрифт которого и фоновый цвет - то же самые.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Пожалуйста выберите ваш метод оплаты.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','Ворота позволяются?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Измененное урегулирование плагина');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Вставленное урегулирование плагина');
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
define('_JOMRES_COM_ENCRYPTION','Шифрование');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','Использовать mCrypt шифрование?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','Установите это в да, ЕСЛИ Вы имеете mCrypt, собранный в PHP.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','Ключ шифрования');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','Способ шифрования');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','Алгоритм шифрования');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Рассматриваемая кредитная карточка');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Обновленная кредитная карточка');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','Редактируйте кредитную карточку');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','Редактируйте размер изображения');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','Измеренный в кв. пикселах.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Загружение сборного изображения собственности');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Изображения уже в директории');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','Демонстрации слайдов');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Показать связь демонстрациям слайдов?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Показать действующую демонстрацию слайдов?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','Установите это в Да, если Вы хотите показать демонстрацию слайдов, действующую с деталями собственности.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','Демонстрация слайдов полная высота');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Необходимая высота для тамбнейлного изображения демонстрации слайдов');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','Демонстрация слайдов');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Жаль, никакие изображения, доступные для этой собственности. Пожалуйста загрузите некоторые изображения, используя особенность сборного изображения,  если Вы желаете использовать особенность демонстрации слайдов.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','Ширина окна Popup');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','Высота окна Popup');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','Местоположение изображения');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','Только измените это, если Вы имеете специфическую потребность в изображениях jomres, чтобы быть в другом месте. По умолчанию ето \'/images/stories/jomres/\' относительно корня joomla.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Показать связь тарифам?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','Popup позволяются?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Если бы установлено в не, то связи, которые обычно открывались бы в popup, откроются в действующем вместо этого. ЭКСПЕРИМЕНТАЛЬНЫЙ! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','Загрузите изображения демонстрации слайдов');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','UИспользуйте эту форму, чтобы загрузить многократные изображения этой собственности. <br/> <b> Имейте ввиду</b>, что любые изображения с тем же самым названием будут переписаны. Также отметьте, что эта форма не загружает комнату определённые изображения или хедерное изображение собственности, Вы будете должны загрузить их от секция Собственности Admin.<br/><b>Note</b> Изображения, загруженные здесь будут написаны в /images/stories/jomres/*property_uid* папке. Если эта папка не существует, то она будет создана если конечно альтернативная директория не определена в конфигурации.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','Разные');
/**
* @ignore
*/
define('_JOMRES_A','Конфигурация сайта');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','Используйте глобальные особенности собственности');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','Установите это в Да, если Вы хотите вызвать все свойства использовать только особенности собственности, определëнные вебмастером.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','Чтобы назначать изображение на эту особенность, Вы сначала должны загрузить ваши изображения особенности собственности к папке /images/stories/jomres/pfeatures/. ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','Икона');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Выберите ищущую плагину, которою Вы хотите использовать.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>Жаль, ваш поиск не возвратил никаких результатов. Пожалуйста измените ваш поиск и попробуйте еще раз.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','Вы уверены, что Вы желаете сделать это?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Закажите комнату');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Закажите эту собственность');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','Число безопасности');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Показать тарифы в тексте?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Адрес');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Подробная информация');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Щёлкните для Комнат и пригодности');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Покажите информацию тарифов');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Покажите информацию Адреса ниже этой связи');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Покажите детальную информацию собственности ниже этой связи');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Покажите комнаты и пригодность ниже этой связи');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Покажите тарифную информацию ниже этой связи');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Тарифы общей тарифной ставки');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Средние числа');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','Выберите модель тарифов, которую Вы хотите использовать');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Вы имеете два выбора тарифных методов вычисления. Первой метод 'общей тарифной ставки' позволяет Вам предлагать множество различных тарифов гостю, и норма для пребывания - то же самое в течение всего времени. Это полезно, если Вы хотите предложить несколько различных тарифов для той же самой даты, напр. тариф Платы за ночь и завтрак и B&B и Вечерний тариф пищи. Выберите тариф 'средних чисел', если Вы хотите приспособить вашего иждивенца цен, в день рассматриваемого. Jomres найдёт все тарифы в течение каждого дня в заказе, добавьте их, вместе и тогда возвратите среднюю норму поперёк периода");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','Использовать портал Jomres?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','Установите это к Да, если Jomres будет использоваться в соединении с портальным программ Jomres');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Покажите исходную дату?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Установите это к Нет, если Вы не хотите показать исходную коробку входа даты. Только используйте это, если Вы знаете то, что Вы делаете, поскольку исходная дата в заказах будет всегда собираться день после даты прибытия.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','Предел описания');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Это ограничивает число символов, показанных во внесении в список собственности когда взято из описания собственности.");

// v1.4g+
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','Множитель ежедневной нормы');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"Это позволяет пользователю прилагать множитель к ежедневной норме, которая возвращена к заказу формы в течение процесса заказа (полезный, если Вы хотите показать норму свойств к неделе например)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','Ширина Popup слайдов');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','Высота Popup слайдов');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','Обновление');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','Щёлкните кнопкой обновления, чтобы проверить пригодность');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','Используйте датовый() стиль формата ?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Установите  это к Да, чтобы форматировать даты продукции согласно дате() (См. <a href="http://www.php.net/manual/en/function.date.php">Здесь</a>). Заставьте это в No использовать strftime() форматирующий (см. <a href="http://www.php.net/manual/en/function.strftime.php">Здесь</a> eg. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','Щёлкните, чтобы издать');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Щёлкните, чтобы неиздать');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','Пожалуйста закончите следующие области: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' Спасибо.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','Используйте глобальные типы комнаты');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Установите это к Да, если Вы хотите вызвать все свойства использовать только типы комнаты, определённые вебмастером. Вы должны установить это в Да, если Вы намереваетесь позволить искать через типы комнаты.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Чтобы назначать изображение на этот тип комнаты, Вы сначала должны загрузить ваши изображения типа комнаты к папке /images/stories/jomres/rmtypes/. ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','Ошибка входа в цвете границы');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Input error background colour');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','Страна по умолчанию в заказе формы');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','Использовать помощь сайта?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','Установите это к Да, если Вы хотите, чтобы Jomres показал текст помощи для заказа выше бруска поиска.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','Редактируйте ваш текст помощи сайта для заказа.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','Пункты, отмеченные с красной звездой требуются.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','Пользователи могут регистрировать их собственности?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','Пожалуйста обеспечьте страну и область вашей собственности
Установите это к Да, если Вы хотите, чтобы пользователи были в состоянии регистрировать их собственные свойства без вмешательства admin-a.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Пожалуйста обеспечьте страну и область вашей собственности.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Пожалуйста закончите ваши детали собственности.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Пункты, отмеченные с красной звездой требуются.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Созданная собственность');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"Жаль, Вы не можете создать собственность на этой системе. Вы должны быть загруженным, зарегистрированным пользователем, и Вы, должно быть, уже не создали собственность.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Созданная собственность: ');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Для пользователя: ');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','Подлежащий оплате ежедневно?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' В день');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Покажите календарь с начала года?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Календарь пригодности показывает с начала текущего года.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','Показ детализировал информацию комнаты?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','Если Вы установите это в Hет, то Jomres не будет пытаться показать весь в течение заказов, то вместо этого это просто сообщит, что пригодность существует.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Число доступных комнат');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','Пожалуйста выберите число комнат, которых Вы требуете, типа, которого Вы требуете.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','Число требуется');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Назад к деталям собственности');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','Типы комнаты');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','Используйте Jomres метаданные?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','Если Вы устанавливаете это в Да, то Jomres будет использовать текст, который повторен из описания собственности и страниц Списков Собственности, чтобы произвести метаданные. Отдельные слова с интервалом.');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','Stop слова');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"Ето Stop слова, ТО ЕСТЬ слова, что Вы <i>не хотите</i> появиться в метаданных.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','Другие элементы, чтобы удалить');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','Есть элементы, которые должны быть раздеты от метаданных. Примером могли быть меньше чем символы, кавычки и т.д.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','Частота');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','Количество раз слово должно быть повторено прежде, чем это может быть включено в метаданные.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Предел случайного поиска');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Покажите google связи преобразования валюты в тарифном внесении в список?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','Преобразуйте норму в:');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','Позвольте пользователям редактировать с редакторами html?');

// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Используйте эту форму, чтобы поместить ваш заказ. Парение курсор мыши по "i" отображает за дополнительной информацией о колонке. Измените ваши подробные сведения заказа как прибытие и исходные даты и числа гостя, затем выберите комнату(ы), которой Вы требуете от списка доступных. Щёлкните любыми доступными комнатами, чтобы добавить их к вашему заказу. Когда сделано, Вы можете добавить любые екстры, что Вы можете требовать и обеспечивать ваши детали адреса. Когда форма имеет достаточно информации, это тогда даст Вам представленную кнопку так, чтобы Вы могли подтвердить ваш заказ.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Используйте эту форму, чтобы поместить ваш заказ. Парение курсор мыши по "i" отображает за дополнительной информацией о колонке. Измените ваши подробные сведения заказа как прибытие и исходные даты и числа гостя. Когда сделано, Вы можете добавить любые екстры, что Вы можете требовать и обеспечивать ваши детали адреса. Когда форма имеет достаточно информации, это тогда даст Вам представленную кнопку так, чтобы Вы могли подтвердить ваш заказ.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','Заказ подробных сведений');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Выберите детали ваших требований заказа');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','Пригодность ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Выберите комнаты, которых Вы требуете');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Смотрите здесь, чтобы видеть, доступна ли собственность в это время.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','Дополнительные екстры');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Выберите любые екстры, которые Вы хотите включить в заказ');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','В ночь');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','Ваш адрес');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Пожалуйста войдите в ваши детали. Отметьте, что все области требуются кроме вашего мобильного номера');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Доступные комнаты');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Отобранные комнаты');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Самая ранняя дата прибытия: ');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','В ночь:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Общее количество:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Екстры:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','Налог:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Скидка:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Общее количество:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Гости');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Щелкните теперь, чтобы добавить эту комнату к вашему выбору');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Щелкните теперь, чтобы удалить эту комнату из вашего выбора');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Типы гостей');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','Тип');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','Тип клиента, напр. возраст Детей 5-10, или Студент ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','Примечания');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','Примечания, которые Вы можете хотеть сделать относительно этого типа клиента');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','Максимум');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','Максимальное число этого типа клиента, который может быть отобран в форме заказа');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','Является процентом');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Вычисленное число - процент от Базисной величины, вычисленной для комнаты. Если это установлено к Нет, тогда число Вы определяете просто добавлено или вычтено из основной стоимости комнаты.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','Добавьте разницу?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','Вычисленное число добавлено к или удалено от Базисной величины, вычисленной для комнаты. Установите это к Нет, если Вы хотите, чтобы это было скидкой из основной фигуры. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','Разница');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','Количество разницы');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Изменённый заказ типа клиента');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Изданный тип клиента');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Удалённый тип клиента');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Созданный тип клиента');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Обновлённый тип клиента');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Обновлённый тип клиента');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','Показывать список комнаты в странице деталей собственности?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Показывать связь комнате перечисляют в странице деталей собственности?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Show <b>only</b> Календарь пригодности/ Список комнаты?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Переключите это к Да, чтобы блокировать показ удара головой собственности и деталей, так, чтобы только календарь списка/пригодности комнат был видимым в секции деталей собственности. Только действительно предназначаемый для свойств пользователей, сдающих в аренду одноместный номер (квартиры, дома и т.д).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','Стиль CSS, чтобы использовать на сайте');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','Минимальный интервал между датой прибытия и исходной датой.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Минимальный интервал в заказе формируется между датой прибытия и исходной датой.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Overlib в заказе формы показывает число комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Overlib в заказе формы показывает название комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Overlib в заказе формы показывает тарифное название');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','Overlib в заказе формы показывает название');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','Overlib в заказе формы показывает описание');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','Overlib в заказе формы показывает норму/тариф');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','Overlib в заказе формы показывает запуски');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','Overlib в заказе формы показывает концы');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','Overlib в заказе формы минимальные дни');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','Overlib в заказе формы максимальные дни');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','Overlib в заказе формы показывает минимальным людям');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','Overlib в заказе формы показывает максимальным людям');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','Overlib в заказе формы показывает название комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','Overlib в заказе формы показывает название комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','Overlib в заказе формы показывает тип комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','Overlib в заказе формы показывает курение в комнате');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','Overlib в заказе формы показывает доступ инвалидов комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','Overlib в заказе формы показывает этаж комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','Overlib в заказе формы показывает людям максимума комнаты');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','Overlib в заказе формы показывает особенности комнаты');

/**
* @ignore
*/
define('_JOMRES_ORDER','Заказ');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','Вы формировали Jomres как собственность одноместного номера (квартира, дом, вилла) однако, Вы имеете больше чем одну созданную комнату. Это может привести к ошибкам, используя Jomres. Если Вы намереваетесь продолжить использовать Jomres, чтобы управлять собственностью одноместного номера, Вы должны удалить все кроме одной из комнат. Пожалуйста измените вашу конфигурацию так, чтобы Собственность Одноместного номера = Нет, затем пойдите к Администрации Собственности, и удалите все комнаты кроме одного, так, чтобы Вы только имели одну комнату для этой собственности.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','Необходимые');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Дни перед прибытием');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Минимальное число дней, которые должны протечь, от "сегодня", перед датой прибытия.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','В ночь:');

/**
* @ignore
*/
define('_JOMRES_DTV','Вариации типа даты');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','День недели');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','Диапазоны даты');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','Дни пребывания');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','В последнюю минуту');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','День недели');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','День недели');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','Выбор компонента для Тарифного класса ');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','Этот падающий список позволяет, что Вы, чтобы выбрать таможенный тарифный класс возражаете, что Вы, возможно, создали/загрузили и установили как отдельный компонент в Joomla.');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Тип гостя по умолчанию ');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Число по умолчанию сначала первого типа Guest. Если Вы используете типы гостя, то это - число по умолчанию, что первый тип гостя в форме заказа будет собираться.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Зарегистрированные пользователи только могут заказать онлайн?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Жаль, Вы должны быть зарегистрированным пользователем, чтобы заказать онлайн. Щёлкните здесь, чтобы регистрироваться на этом участке. ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Цвет шрифта для связей к текущим заказам');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Границы уикэнда');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','Который вставной из приборной панели использовать');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','Если Вы установили какую-нибудь приборную панель Jomres plugins, Вы можете выбрать альтернативу приборной панели по умолчанию здесь.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Комната заказана');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Чёрный заказ');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Окружите депозит к самому близкому целому числу?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Требуйте депозитов?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Тарифные платы сохранены как еженедельные числа?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Вы имеете выбор хранения тарифных обвинений или в ежедневных или в еженедельных стоимостях. Храня их как еженедельно, Вы ДОЛЖНЫ установить этот выбор в Да.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Норма в неделю');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Неподвижные даты прибытия повторно воркуют: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Когда установленные даты прибытия отобраны, даты числа, которые можно показать в падающем списке дат');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Выбор для курения недействителен');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Дата прибытия неправильна');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Исходная дата неправильна');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Заказ слишком короток. Должно быть по крайней мере это много дней между прибытием и исходными датами:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Ваш интервал');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Неправильный вариант типа гостя');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Выберите ваши числа/тип гостя');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Вы имеете слишком многих в стороне за доступные тарифы');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Вы выбрали больше комнат, чем Вы имеете гостей, нажмите на название комнаты, чтобы удалить это из вашего выбора');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Слишком много гостей для доступных кроватей');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Вы должны выбрать больше комнат');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Выберите комнату');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Имя требуется');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Фамилия требуется');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Дом № / название требуется');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Улица требуется');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Город требуется');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Область требуется');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Почтовый индекс требуется');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Страна требуется');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Номер телефона требуется');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Мобильный № требуется');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Адрес электронной почты требуется');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Адрес электронной почты не действителен');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Неспособный утверждать домейн электронной почты');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','Мы имеем вакансии!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Никакие комнаты не были отобраны все же');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','Заказ №');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Хорошо заказывать, фон окна сообщения');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','Выбросить данные шаблона?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Заставьте это позволять свалку DHTML переменных шаблона для каждого файла шаблона FRONTEND, поскольку та страница рассматривается. Полезный, если Вы хотите видеть, доступен ли определённый элемент, чтобы использоваться в данном шаблоне.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Число - процент');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Установите это в Да, если единственное число вычисления человека - процент. Если не тогда это будет применено как сумма.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','Доступный предел комнат/тарифа');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Используйте этот вход, чтобы ограничить число доступных комнат и тарифов, которые перечислены в форме заказа. Установите это в ноль, если Вы не хотите, чтобы ограничение было позволено. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','Никакие вакансии в это время!');

// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','Марж');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','Марж прибыли, в проценте.');


// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','Покажите Jomres admin опции как изображения?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','Установите это в Нет, если Вы хотите все связи admin, показанные как текст.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','Закажите это теперь: ');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Глобальный способ редактирования?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Заботьтесь с этой функцией. Если установлено в Да, то способ редактирования затронет таможенный текст для ВСЕХ свойств в системе для постоянного, которое Вы редактируете.');

/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','Использовать глобальную валюту?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','Установите это в Да, чтобы вызвать все свойства использовать ту же самую валюту (напр. & # 8 3 6 4 ;)');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Глобальный символ валюты');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Компонент обернут');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Установите это в Да, если компонент обернут так, чтобы модуль и хедер не должны быть замечены');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Property Manager');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','Weekends only');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','Tariff only valid if stay period includes a weekend day (friday or saturday) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','Weekend days');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the rooms list.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Select your country before adding any property information');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Save your property changes before uploading a property image');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','Prices from - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','All');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'Region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'Features');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'Description');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'Availability');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'Type');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Search by country');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Search by region');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Search by town');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','Feature search.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','Search');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Enter a search word into the box and press the button.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Search word(s): ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','Please enter your intended arrival and departure dates and press the button to find properties that have accommodation available on your chosen dates.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','List all properties by property type.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','List all properties by room type.');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','Default');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','Property Name');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','Property Region');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','Property Town');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','Stars');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','Property list');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Property details - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','Booking form');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update your address details');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-checking room availability<br/>(Room selection will be reset)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-checking availability');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modifying your optional extras');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changing your room selection');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Updating your address details');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, one or more address fields are incorrect.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Room image');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','Currency format');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
/**
* @ignore
*/
define('JOMRES_COM_A_CALENDARNOTE','Note! These options only affect the language format in modules. To adjust the javascript langauge format for a given property please edit that javascript calendar options within that property');
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS','Available Logs');
/**
* @ignore
*/
define('JOMRES_COM_A_LOGS_NOENTRIES','No log entries. This is normal, you need to manually modify jomres.php to trigger logging');
/**
* @ignore
*/
define('JOMRES_COM_A_DATETIME','Datetime');
/**
* @ignore
*/
define('JOMRES_COM_A_MESSAGE','Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3

/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Advanced');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','Tariff Configuration Mode');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
<br/><br/>
You have three options as to how you configure your tariffs.<br/>
Normal mode: You will have one tariff for each room type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each room/property type. <br/>
Advanced: The \"old\" Jomres method of managing tariffs. <br/>
<br/>
The different tariff modes allow you to choose the method of configuring tariffs that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference rooms and tariffs to room/property types and allows you to configure rooms and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create a room and associate it with a room type. You then create a tariff and associate THAT with a room type. Using this method it is possible to \"layer\" tariffs over each other, for example a room type \"Double bed\" can have one tariff for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a room or tariff from a room/property type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of rooms and tariffs for the tariff mode to work the system may need to reset some data to make the current tariff configurations compatible with the current tariff editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing tariffs are retained.<br/>
Normal -> Micromanage. All existing tariffs are removed.<br/>
Advanced -> Normal. All existing tariffs are removed.<br/>
Advanced -> Micromanage. All existing tariffs are removed.<br/>
Micromanage -> Advanced. All existing cross references between tariffs are removed, but the tariffs themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>");
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Show rooms list in property details page?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','Property type');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','SRP only');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','Max people per room');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','Max people in booking');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','Add note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','Edit note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','Delete note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','View notes');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Added new note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Edited note');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Deleted note');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','My options');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','You are not logged in. If you log in/register with this site then you will be able to view your bookings information.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','List Bookings');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','My Bookings');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','List Bookings, no deposit paid');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','View Booking');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','View Favourites');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','You haven\'t added any favourites yet!');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Add to Favourites');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Property type');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Properties on site');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','This plugin allows you to enable and configure your room prices dynamically.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threashold (number of days between arrival date and today)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage rooms occupied < 10%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage rooms occupied < 25%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage rooms occupied < 50%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage rooms occupied < 75%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','Room type ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' has been discounted from ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' to ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Room price not discounted ');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
/**
* @ignore
*/
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL','Use SSL in booking form?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','You need to ensure that you have a valid SSL certificate for ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','Max people that property can accommodate');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Set this to Yes if you want to offer last minute deals.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Discount');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In percent');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','A discount has been applied to this booking!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','The cost of the stay has been reduced by ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','This property offers a last minute discount of  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' percent if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE',' percent or more if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Book now to make the most of this offer!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','This property offers a last minute discount of  ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID',' percent if you book to arrive before ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. Book now to make the most of this offer!');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tariff info');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Set this to Yes to show more detailed tariff information in the property details/tariff popup');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','Minimise configuration options');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
/**
* @ignore
*/
define('_JOMCOMP_AMEND','Amend Booking - Property Selection');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','Select New Property');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','Original Contract:');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','Deposit Paid');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','Deposit Not Paid');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Override Total');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Override Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','Cancel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','JRPortal Control Panel');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','Configuration');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Default Commission rate');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','List Commission Rates');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','Commission Rates');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','Title');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','Type');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','Comission rate');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','Currency code');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','List Properties');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Property name');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Property address');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','Properties who\'s background colour is red have not yet had a commission rate applied to them.');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','License number');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','Your license number for the portal plugin.');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','Statistics');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','Statistics for: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','Period: ');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Properties - Clicks');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Property view');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','January');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','February');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','March');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','April');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','May');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','June');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','July');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','August');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','September');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','October');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','November');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','December');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Number of bookings');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Value of bookings');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','Room usage');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Commission estimate');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commission Rate');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','List bookings');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Property id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Guest id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Invoice id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Booking total');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract number');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Currency Code');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Created');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archived');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date archived');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','Add property');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','Source : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','Is this a multiroom property?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','Is this a property like a hotel/bed and breakfast/penzion? If so, select Yes. If it is a single room property like a villa/cottage then choose No.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to bill');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Associated property (if applicable)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Value');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"View orders");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one property only limit) then you should create a new property first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');

/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP',"Is this property a hotel/bed and breakfast/guest house/pension? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property.ring the entire property. ");
// Jomres v3.0.6

/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
/**
* @ignore
*/
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");

// Jomres v3.1

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Accommodation Total");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"night(s) at");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per room ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Enhance Your Stay Total ");
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Price Summary ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_ALERT',"Please read and agree to ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_HEADER',"A summary of your booking is shown below.<br /> To make any changes, please click on the Amend Reservation button. ");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMENDTEXT',"If you need to change any of the above information then please click here");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_AMEND',"Amend Reservation");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_SPECIALS',"Please enter any special requests in the box below.");
/**
* @ignore
*/
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"I confirm that the above information is correct and agree to the ");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_HOVERFORANIMAGE',"Hover over a thumbnail for a larger image");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION',"Show slideshow above property details or below.");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_TOP',"Top");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTTOM',"Bottom");
/**
* @ignore
*/
define('_JOMRES_SLIDESHOW_LOCATION_BOTH',"Both");
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
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
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
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Dear");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');

// Not used yet
/**
* @ignore
*/
define('_JOMRES_MENUHELPER_DASHBOARD','This is your dashboard, here you can see a general overview of your property\'s availability. ');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL','Use Jomres messaging');
/**
* @ignore
*/
define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");

/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
/**
* @ignore
*/
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<br/>
<br/>
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index2.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>

<br/>
");
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
/**
* @ignore
*/
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection.");

/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DB','Database template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
/**
* @ignore
*/
define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_USE_DESC',"Set this to Yes to tell Jomres that it must use subscription package handling.");
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER','Create new user on booking');
/**
* @ignore
*/
define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
/**
* @ignore
*/
define('_JOMRES_CLICKTOREGISTER','Click here to register your property');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");

/**
* @ignore
*/
define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
/**
* @ignore
*/
define('_JOMRES_LATLONG_DESC',"Jomres will pass your address to Google to generate the map position in the property details. If for whatever reason Google cannot find your address based on the information found above, you can ienter latitude and longitude in the lat/long fields instead. If you choose to enter the latitude and longitude, please note that I have found the Google earth lat and long information to be inaccurate so you are advised instead to visit <a href=\"http://itouchmap.com/latlong.html\" target=\"_blank\">the itouchmap site</a> and use their information to determine your latitude and longitude. When entering your lat and long, the format should be something like '51.754564622' and '-4.997314810'.");

/**
* @ignore
*/
define('_JOMRES_CONTROLPANEL','Control Panel');

/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
/**
* @ignore
*/
define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');


// Jomres v4.2

/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
/**
* @ignore
*/
define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
/**
* @ignore
*/
define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');

/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
/**
* @ignore
*/
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS','Your business details');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
/**
* @ignore
*/
define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
/**
* @ignore
*/
define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
/**
* @ignore
*/
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');

/**
* @ignore
*/
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');

/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_ON','Editing mode on');
/**
* @ignore
*/
define('_JOMRES_EDITINGMODE_OFF','Editing mode off');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','Print invoice');
