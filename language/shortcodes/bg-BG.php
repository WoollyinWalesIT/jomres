<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.1
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Това е първа страница на cpanel на свойството.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Това е лентата с имоти, която предоставя преглед на резервациите в реално време, наличността и заетостта с един поглед.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Този скрипт позволява на потребителя да сравнява няколко свойства помежду си, до максимум 3 свойства.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Списък с идентификатори на свойства, разделени със запетая, напр. 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Създава формуляра за собственик на контакт.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Предайте идентификатора на свойството на собствеността, с която да се свържете. Предайте 0 (нула), вместо да се свържете с администратора на сайта.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Показва страницата с информацията за компанията, която извлича подробности от полето с данни за мениджъра на вашата компания в конфигурацията на имота. Детайлите в този раздел обикновено се използват за кореспонденция, което позволява на мениджърите да имат както адреса на хотела/апартамента, така и отделен адрес за бизнес цели. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Показва календара на имота");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Предайте идентификационния идентификатор на свойството за показване.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Месеци за показване, по подразбиране е 24, ако не е зададено друго. Не е съвместимо с променливата Show Just Month.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Задайте това на 1, ако просто искате да показвате текущия месец сам по себе си. Настройката months_to_show ще бъде игнорирана, ако show_just_month не се използва в друг по същото време.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Показва само текста с описание на имота.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Показва само текста с описание на имота.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Показва само характеристиките на имота.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Показва само шаблона на заглавката на свойството.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Показва само типовете стаи за имоти.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Показва само основното изображение на свойството.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Показва само картата на имота.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Показва текста за повече информация на имота.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR код, който води до gmaps. Това може да бъде сканирано в телефон с помощта на приложение за четене на qr код, което предоставя указания за имота.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Показва отзиви за имот.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Показва обобщение на прегледа на имота.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Показва отделна стая.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ИД на стаята.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Показва стаите на имота.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Показва изображенията на стаите на имота като слайдшоу.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Показва слайдшоуто на свойството.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Показва тарифите за имоти.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Показва бизнес адреса на сайта, въведен в Конфигурацията на сайта> Данни за вашата компания.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Показва условията за собственост.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ИД на имота.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Показва календара на потребителския интерфейс на собствеността, който е различен от основния голям календар и се основава на функционалността на календара на потребителския интерфейс на Jquery.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Предайте идентификационния идентификатор на свойството за показване.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Задайте това на 1, за да не се показва легендата.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Показва резултатите от търсенето, които могат да бъдат подобрени чрез добавяне на параметри за търсене. Не препоръчваме да използвате всички параметри едновременно, защото в крайна сметка ще получите твърде ограничени критерии за търсене. Вместо това трябва да се ограничите само до един или два параметъра, напр. Търсене по държава и брой звезди. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Търсене по държава, като се използва ISO Алфа-2 код, напр. GB или DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Търсене по региони. Тъй като регионите се записват в базата данни, трябва да използвате идентификатора на региона. Посетете Администратор> Jomres> Структура на сайта> Списък на региони и задръжте курсора на мишката върху Редактиране, там ще видите идентификационния номер на региона . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Пълното име на града, който искате да търсите.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Търсене на имоти с конкретни функции. Идентификаторите на функциите могат да бъдат намерени в Администратор> Jomres> Структура на сайта> Характеристики на свойството.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Търсене на имоти с определени типове стаи. Идентификаторите на тип стая могат да бъдат намерени в Администратор> Jomres> Структура на сайта> Типове стаи.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Търсене на свойства на конкретен тип собственост. Идентификаторите на типове свойства могат да бъдат намерени в Администратор> Jomres> Структура на сайта> Типове свойства.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Търсене на имоти в определен ценови диапазон.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Търсене на имоти, чиито тарифи позволяват номера на гости с определени стойности, например партии от 6.");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Търсене на свойства на N звезди.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Търсене по дата на пристигане. Трябва да се комбинира с параметъра за дата на заминаване.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Търсене по дата на заминаване. Трябва да се комбинира с параметъра arrivalDate.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Търсене по категория имоти.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Преглед на страница на агент. Можете да предадете ИЛИ идентификатор на свойство или самия идентификатор на агента, ако го знаете.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Идентификатор на свойство, това ще покаже агента на имота.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "ИД на базата данни на мениджъра, ако е известен.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Показва популярните свойства, обикновено използвани в позиции на модули или приспособления.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Максималният брой свойства, които могат да бъдат показани.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Показване само на свойства на този конкретен тип собственост.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Задайте на 1, за да покажете модулите, оптимизирани за вертикална джаджа/позиция на модула.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Показва произволен избор на свойства, обикновено използвани в позиции на модули или приспособления.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Максималният брой свойства, които могат да бъдат показани.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Показване само на свойствата на тези специфични типове свойства.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Задайте на 1, за да покажете модулите, оптимизирани за вертикална джаджа/позиция на модула.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Показва най -наскоро разгледаните свойства на госта, обикновено използвани в позиции на модули или приспособления.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Максималният брой свойства, които могат да бъдат показани.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Задайте на 1, за да покажете модулите, оптимизирани за вертикална джаджа/позиция на модула.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Показва редица свойства, обикновено използвани в позиции на модули или приспособления.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Идентификаторите на свойствата на свойствата, които искате да покажете.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Задайте на 1, за да покажете модулите, оптимизирани за вертикална джаджа/позиция на модула.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Показва падащото меню за избор на валута.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Активиране/деактивиране на алтернативния изход на шаблон. Този изход е предназначен за използване в ленти с инструменти за стартиране.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Показва страницата на количката.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Показва модула/джаджата на количката за пазаруване.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Показва главното меню. Обърнете внимание, ако използвате персонализирана версия на mainmenu_wrapper_alternate.html например в/templates/jr_leohtian/html/com_jomres, тогава може да се наложи да я промените < /i> с MENU_LOCATION, увити в къдрави скоби. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Тази страница ви позволява да качвате изображения за вашата собственост и нещата, които предлагате. Тя има един основен бутон и втори бутон, който ви позволява да избирате конкретни ресурси, за които да качвате изображения. И така, основната собственост изображение и слайдшоуто ще показват само един бутон, но ако сте създали някакви, напр. Допълнителни екстри или стаи, тогава ще видите втори бутон, където можете да качите изображения за тези конкретни ресурси. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Тази страница ви позволява да качвате изображения за вашата собственост и нещата, които предлагате. Тя има един основен бутон и втори бутон, който ви позволява да избирате конкретни ресурси, за които да качвате изображения. И така, основната собственост изображение и слайдшоуто ще показват само един бутон, но ако сте създали допълнителни опции, ще видите втори бутон, където можете да качите изображения за тези конкретни ресурси. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Първо изберете изображението (ите), което искате да качите, като щракнете върху Добавяне на изображение или използвайте Плъзгане и пускане. Те ще се появят в колоната от дясната страна. </li>
  <li> Над тази област използвайте бутона \"Изберете ресурса \", за да изберете за кой ресурс искате да качите изображения. Може да ви бъде предложена опцията да изберете конкретен ресурс отдолу. </li>
  <li> След като сте избрали ресурс, можете да щракнете върху бутона Качване на изображение под изображение, за да го свържете с този ресурс. След като е качено изображение, то ще изчезне от колоната в сайта отдясно и ще се появи вляво. </li>
  <li> Използвайте бутона кошче до съществуващите изображения, за да премахнете изображения, които вече не искате да се показват. </li>
  <li> Можете да промените реда на показване на файловете в слайдшоуто, като ги преименувате, преди да ги качите, тъй като те се показват на страници по азбучен ред. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "До бутона\" Ресурс \"може да видите бутон\" Визуализация \". Ако щракнете върху това, ще видите изскачащ прозорец, който ви показва как ще изглеждат качените в момента изображения на страница. Това ви помага да получите представа как ще изглеждат изображенията на вашите клиенти. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Няма ограничение за броя на изображенията, които можете да качите. Изображенията се преоразмеряват автоматично, когато се качват. Можете да качвате само JPG и PNG файлове.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "В идеалния случай всички изображения, които качвате, биха били поне");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "широки пиксели, в противен случай те могат да изглеждат размити след качването им.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Всички изображения, които качвате, не могат да бъдат повече от");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "по размер.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Изберете ресурса, за който искате да качите изображения");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Специфичен ресурс");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Изображения, вече качени за този ресурс");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Показва най -наскоро разгледаните свойства на госта, обикновено използвани в позиции на модули или приспособления.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Максималният брой свойства, които могат да бъдат показани.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Задайте на 1, за да покажете модулите, оптимизирани за вертикална джаджа/позиция на модула.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Показва редица свойства, обикновено използвани в позиции на модули или приспособления.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Идентификаторите на свойствата на свойствата, които искате да покажете.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Задайте на 1, за да покажете модулите, оптимизирани за вертикална джаджа/позиция на модула.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Показва падащото меню за избор на валута.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Активиране/деактивиране на алтернативния изход на шаблон. Този изход е предназначен за използване в ленти с инструменти за стартиране.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Показва страницата на количката.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Показва модула/джаджата на количката за пазаруване.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Показва главното меню. Обърнете внимание, ако използвате персонализирана версия на mainmenu_wrapper_alternate.html например в/templates/jr_leohtian/html/com_jomres, тогава може да се наложи да я промените < /i> с MENU_LOCATION, увити в къдрави скоби. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Тази страница ви позволява да качвате изображения за вашата собственост и нещата, които предлагате. Тя има един основен бутон и втори бутон, който ви позволява да избирате конкретни ресурси, за които да качвате изображения. И така, основната собственост изображение и слайдшоуто ще показват само един бутон, но ако сте създали някакви, напр. Допълнителни екстри или стаи, тогава ще видите втори бутон, където можете да качите изображения за тези конкретни ресурси. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Тази страница ви позволява да качвате изображения за вашата собственост и нещата, които предлагате. Тя има един основен бутон и втори бутон, който ви позволява да избирате конкретни ресурси, за които да качвате изображения. И така, основната собственост изображение и слайдшоуто ще показват само един бутон, но ако сте създали допълнителни опции, ще видите втори бутон, където можете да качите изображения за тези конкретни ресурси. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Първо изберете изображението (ите), което искате да качите, като щракнете върху Добавяне на изображение или използвайте Плъзгане и пускане. Те ще се появят в колоната от дясната страна. </li>
  <li> Над тази област използвайте бутона \"Изберете ресурса \", за да изберете за кой ресурс искате да качите изображения. Може да ви бъде предложена опцията да изберете конкретен ресурс отдолу. </li>
  <li> След като сте избрали ресурс, можете да щракнете върху бутона Качване на изображение под изображение, за да го свържете с този ресурс. След като е качено изображение, то ще изчезне от колоната в сайта отдясно и ще се появи вляво. </li>
  <li> Използвайте бутона кошче до съществуващите изображения, за да премахнете изображения, които вече не искате да се показват. </li>
  <li> Можете да промените реда на показване на файловете в слайдшоуто, като ги преименувате, преди да ги качите, тъй като те се показват на страници по азбучен ред. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "До бутона\" Ресурс \"може да видите бутон\" Визуализация \". Ако щракнете върху това, ще видите изскачащ прозорец, който ви показва как ще изглеждат качените в момента изображения на страница. Това ви помага да получите представа как ще изглеждат изображенията на вашите клиенти. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Няма ограничение за броя на изображенията, които можете да качите. Изображенията се преоразмеряват автоматично, когато се качват. Можете да качвате само JPG и PNG файлове.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "В идеалния случай всички изображения, които качвате, биха били поне");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "широки пиксели, в противен случай те могат да изглеждат размити след качването им.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Всички изображения, които качвате, не могат да бъдат повече от");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "по размер.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Изберете ресурса, за който искате да качите изображения");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Специфичен ресурс");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Изображения, вече качени за този ресурс");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Les imatges que pengeu no poden superar");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "de mida");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Trieu el recurs per al qual voleu penjar imatges");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Recurs específic");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Imatges ja carregades per a aquest recurs");

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
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Ако е зададено с да, ще се покаже слайдшоу от основните изображения на свойствата. Ако е зададено на не, тогава ще се покаже първото основно изображение на свойството.');

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
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Тази страница изброява всички файлове с шаблони, които могат да бъдат заменени от файловете с шаблони на пакет от шаблони. Ако искате да замените определен файл с шаблон, щракнете върху бутона за редактиране на този файл, на следващата страница ще бъдете можете да изберете с коя версия искате да замените. Обърнете внимание, че тези замествания имат приоритет както над Jomres Core, така и над всякакви замени на теми/шаблони на Wordpress или Joomla. Можете да деактивирате заместване, като го изтриете на страницата Списъци заменя шаблони. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Име на шаблон");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Текущ път");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Не е отменено");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Можете да изберете кой шаблон файл да замени файловете на шаблона на Core, като промените падащото меню");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Процент резервирани стаи");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Показва формуляра за създаване на нова собственост.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Увеличаване на картата, 1: Свет 5: Суша/континент 10: Град 15: Улици 20: Сгради');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Брой отзиви за показване');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Показва свойствата на потребителите в краткия списък. Ако потребителят е регистриран, това са неговите любими, ако не са влезли, тогава само тези елементи, добавени чрез иконата Предпочитани по време на посещението.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Минимална стойност на депозита');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Ако изчисленият депозит е по-малък от тази цифра, вместо това задайте депозит на тази стойност. Тази цифра може сама да бъде превишена, ако не отговаря на настройката за минимален депозит на сайта. Оставете я на 0 до не използвайте настройката. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Показва формуляр за съгласие съгласно GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Списък с типове стаи за имоти');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Показване на тип стая на имот');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Показване на формуляра за вход');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Показване на списък със стаи от определен тип стая');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'ID тип стая');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Табло за управление');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Показва списък на синдикираните имоти');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Броят на синдикираните имоти за показване');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Дали да се показват MRP (хотели/нощувки със закуски) или SRP (вили/апартаменти/вили). По подразбиране се определя от текущата собственост, тогава това е i, показано. За да изберете конкретен тип, задайте тази стойност на 0 за srbs или 1 за mrps. ');

