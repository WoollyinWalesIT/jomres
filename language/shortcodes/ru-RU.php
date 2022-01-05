<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.0.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Это свойство cpanel frontpage.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Это ленточная диаграмма свойств, которая дает краткий обзор бронирований в реальном времени, доступности и занятости.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Этот сценарий позволяет пользователю сравнивать несколько свойств друг с другом, максимум до 3 свойств.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Список идентификаторов свойств, разделенных запятыми, например, 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Создает форму контакта владельца.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Передайте uid свойства, с которым нужно связаться. Передайте 0 (ноль), чтобы вместо этого связаться с администратором сайта.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Отображает страницу информации о компании, извлекая сведения из поля сведений о вашей компании управляющего имуществом в конфигурации свойств. Сведения на этой вкладке обычно используются для переписки, позволяя менеджерам иметь как адрес отеля / квартиры, так и отдельный адрес для служебных целей. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Показывает календарь собственности");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Передайте uid свойства, которое будет показано.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Отображаемые месяцы, по умолчанию 24, если не установлено иное. Несовместимо с переменной Show Just Month.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Установите это значение в 1, если вы просто хотите отображать текущий месяц отдельно. Параметр month_to_show не должен быть проигнорирован, если в одном или другом сокращенном коде используются оба параметра show_just_month. в то же время.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Показывает только текст описания свойства.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Показывает только текст описания свойства.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Показывает только свойства свойства.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Показывает только шаблон заголовка свойства.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Показывает только типы комнат свойств.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Показывает только основное изображение свойства.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Показывает только карту свойств.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Показывает текст дополнительной информации для свойства.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR-код, который ссылается на gmaps. Его можно отсканировать в телефон с помощью приложения для чтения qr-кода, которое указывает направление к собственности.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Показывает отзывы о собственности.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Показывает обзорную сводку собственности.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Показывает отдельную комнату.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID комнаты.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Показывает комнаты собственности.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Показывает изображения комнат собственности в виде слайд-шоу.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Показывает слайд-шоу свойств.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Показывает тарифы собственности.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Показывает служебный адрес сайта, введенный в Конфигурация сайта> Сведения о вашей компании.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Показывает положения и условия собственности.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID свойства.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Показывает календарь пользовательского интерфейса свойства, который отличается от основного большого календаря и основан на функциональности календаря пользовательского интерфейса JQuery.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Передайте uid свойства для отображения.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Установите значение 1, чтобы не отображать легенду.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Показывает результаты поиска, которые можно улучшить, добавив параметры поиска. Мы не рекомендуем использовать все параметры одновременно, поскольку в конечном итоге критерии поиска будут слишком ограничены. Вместо этого вам следует ограничиться одним или двумя параметрами, например, поиск по стране и количеству звездочек. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Поиск по стране с использованием кода ISO Alpha-2, например, GB или DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', 'Поиск по региону. Поскольку регионы сохраняются в базе данных, вы должны использовать идентификатор региона. Откройте" Администратор ">" Джомрес ">" Структура сайта ">" Список регионов "и наведите указатель мыши на ссылку" Изменить ", вы увидите идентификатор региона. . ');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Полное название города, который вы хотите найти.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Поиск свойств с конкретными функциями. Идентификаторы функций можно найти в Администратор> Jomres> Структура сайта> Характеристики свойств.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Искать свойства с определенными типами комнат. Идентификаторы типов комнат можно найти в Администратор> Jomres> Структура сайта> Типы комнат.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Поиск свойств определенного типа свойства. Идентификаторы типов свойств можно найти в Администратор> Jomres> Структура сайта> Типы свойств.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Искать недвижимость в определенном ценовом диапазоне.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Поиск объектов, чьи тарифы позволяют количество гостей определенных значений, например группы 6");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Искать свойства N звезд.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Поиск по дате прибытия. Следует объединить с параметром Дата отправления.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Поиск по дате отъезда. Следует объединить с параметром прибытияDate.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Поиск по категории свойства.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Просмотр страницы агента. Вы можете передать ЛИБО идентификатор свойства или идентификатор самого агента, если вы его знаете.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Uid свойства, это покажет агента свойства.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Идентификатор базы данных менеджера, если известен.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Отображает популярные свойства, обычно используемые в позициях модуля или виджета.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Максимальное количество отображаемых свойств.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Показать только свойства этих конкретных типов свойств.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Установите в 1, чтобы показать модули, оптимизированные для вертикального положения виджета / модуля.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Отображает случайный набор свойств, обычно используемых в позициях модуля или виджета.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Максимальное количество отображаемых свойств.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Показать только свойства этих конкретных типов свойств.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Установите в 1, чтобы показать модули, оптимизированные для вертикального положения виджета / модуля.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Отображает последние просмотренные свойства гостя, обычно используемые в позициях модуля или виджета.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Максимальное количество отображаемых свойств.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Установите в 1, чтобы показать модули, оптимизированные для вертикального положения виджета / модуля.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Отображает ряд свойств, обычно используемых в позициях модуля или виджета.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Идентификаторы свойств, которые вы хотите показать.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Установите в 1, чтобы показать модули, оптимизированные для вертикального положения виджета / модуля.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Отображает раскрывающееся меню выбора валюты.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Включить / отключить альтернативный вывод шаблона. Этот вывод предназначен для использования на панелях инструментов Bootstrap.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Отображает страницу корзины покупок.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Отображает модуль / виджет корзины покупок.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Отображает главное меню. Обратите внимание: если вы запускаете настроенную версию mainmenu_wrapper_alternate.html, например, в / templates / jr_leohtian / html / com_jomres, чтобы заменить <jomres_position>, вам может потребоваться изменить его положение. / i> с MENU_LOCATION, заключенным в фигурные скобки. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Эта страница позволяет загружать изображения для вашей собственности и того, что вы предлагаете. На ней есть одна основная кнопка и вторая кнопка, которая позволяет вам выбирать определенные ресурсы для загрузки изображений. Итак, свойство Main изображение и слайд-шоу будут отображать только одну кнопку, но если вы создали какие-либо, например, дополнительные функции или комнаты, вы увидите вторую кнопку, где вы можете загружать изображения для этих конкретных ресурсов. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Эта страница позволяет вам загружать изображения для вашей собственности и того, что вы предлагаете. На ней есть одна основная кнопка и вторая кнопка, которая позволяет вам выбирать определенные ресурсы для загрузки изображений. Итак, свойство Main изображение и слайд-шоу будут отображать только одну кнопку, но если вы создали какие-либо дополнительные функции, вы увидите вторую кнопку, где вы можете загружать изображения для этих конкретных ресурсов. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', '<ol>
  <li> Сначала выберите изображения, которые вы хотите загрузить, нажав "Добавить изображение" или перетащив мышью. Они появятся в столбце справа. </li>
  <li> Над этой областью используйте кнопку \"Выбрать ресурс \", чтобы выбрать, для какого ресурса вы хотите загрузить изображения. Вам может быть предложена возможность выбрать конкретный ресурс внизу. </li>
  <li> Выбрав ресурс, вы можете нажать кнопку "Загрузить изображение" под изображением, чтобы связать его с этим ресурсом. После загрузки изображение исчезнет из столбца на правом сайте и появится слева. </li>
  <li> Используйте кнопку "Корзина" рядом с существующими изображениями, чтобы удалить изображения, которые больше не нужно показывать. </li>
  <li> Вы можете изменить порядок отображения файлов в слайд-шоу, переименовав их перед загрузкой, поскольку они отображаются на страницах в алфавитном порядке. </li>
</ol>
 ');

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', 'Рядом с кнопкой" Ресурс "вы можете увидеть кнопку" Предварительный просмотр ". Если вы нажмете на нее, вы увидите всплывающее окно, показывающее, как загруженные в данный момент изображения будут выглядеть на странице. Это помогает вам понять представление о том, как изображения будут выглядеть для ваших клиентов. ');

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Нет ограничений на количество изображений, которые вы можете загрузить. Изображения автоматически изменяют размер при загрузке. Вы можете загружать только файлы JPG и PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "В идеале любые загружаемые вами изображения должны быть не меньше");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "ширина пикселей, иначе они могут выглядеть нечеткими после загрузки.");

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
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Котировки');
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
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Если этот гость находится в черном списке, он больше не сможет делать заказы в этом отеле.');
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

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Отображает форму создания нового свойства.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Масштаб карты, 1: Мир 5: Земля / континент 10: Город 15: Улицы 20: Здания');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Количество отображаемых обзоров');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Отображает свойства пользователей в коротком списке. Если пользователь зарегистрирован, это их избранные, если не вошел в систему, то только те элементы, которые были добавлены с помощью значка "Избранное" во время посещения.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Минимальная сумма депозита');
    
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Если рассчитанный депозит меньше этого значения, то вместо этого установите для депозита это значение. Это значение само может быть переопределено, если оно не удовлетворяет настройкам минимального депозита на сайте. Оставьте его равным 0, чтобы не использовать настройку. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Показывает форму согласия, соответствующую GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Список типов помещений свойств');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Показать тип помещения свойства');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Показать форму входа');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Показать список комнат определенного типа');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Идентификатор типа комнаты');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Панель управления');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Показывает список объединенных свойств');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Количество синдицированных свойств для отображения');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Показывать ли MRP (отели / кровать и завтрак) или SRP (коттеджи / апартаменты / виллы). По умолчанию MRP определяется из текущего свойства, то если uid свойства недоступен, показано. Чтобы выбрать конкретный тип, установите это значение на 0 для srps или 1 для mrps. ');
    
