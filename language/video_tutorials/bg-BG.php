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

jr_define ('VIDEO_TUTORALS_TITLE', 'Видео уроци');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'Контролен панел');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Този урок ви показва как да използвате контролния панел за управление на имоти.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Timeline');
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Как да използваме календара на хронологията. В този видеоклип създаваме нов гост, като въвеждаме техните данни в изскачащия прозорец, съществуващите гости могат да бъдат използвани повторно, като изберете името им от падащото меню в изскачащия прозорец.') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Свойства на списъка');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Как да използвате страницата Свойства на списъка за преглед на допълнителна информация, промяна на колони и търсене на конкретни свойства.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Редактиране на данните за вашия имот');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Редактиране на подробностите за имота ви, включително плъзгане върху картата, за да зададете вашето местоположение.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Промяна на режима за редактиране на тарифи');
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Вашият режим на редактиране на тарифа определя метода, който можете да използвате за определяне на цените за вашия имот. Това става чрез страницата за конфигуриране на имот.');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Нормален режим на редактиране на тарифи за хотели, пансиони, пансиони със закуска');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Нормалният режим за редактиране на тарифи е проста функция за редактиране на тарифи, която ви позволява да избирате броя стаи в имота, цената на стаята, броя на гостите, които всяка стая може да настани и максималния брой гости в парти. Когато бъдат запазени, тези цени са валидни за следващите 10 години. ');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Редактиране на нормални тарифи за вили и апартаменти');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Нормалният режим за редактиране на тарифи е проста функция за редактиране на тарифи, която ви позволява да избирате подтипа на имота, цената на имота за нощувка и максималния брой гости на парти. Когато са запазени тези цени са след това важи за следващите 10 години. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Режим за редактиране на тарифи за микроуправление (препоръчително)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Режимът за редактиране на тарифите на Micromanage ви позволява да конфигурирате както цената, така и минималния брой дни, за които престоя може да бъде валиден, за всеки ден от годината. Това е мощен инструмент, който ви дава пълен контрол В този пример ще ви покажем как да създадете множество набори от цени за един и същ тип стая, да зададете различни цени за различни периоди и различни цени за определени дни от седмицата в рамките на даден период. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Режим за редактиране на тарифи за микроуправление за вили/апартаменти (препоръчително)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Режимът за редактиране на тарифите на Micromanage ви позволява да конфигурирате както цената, така и минималния брой дни, за които може да бъде валиден престой за всеки ден от годината. Това е мощен инструмент, който ви дава пълен контрол над ценообразуването. В този пример ще ви покажем как да създадете множество ценови комплекти. Ще зададем различни цени за различни периоди и различни цени за определени дни от седмицата в рамките на даден период. След като направим това, ще създадем множество тарифи за един и същ имот, но с различни номера на гости, които ни позволяват точно да контролираме цените за всеки сценарий. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Различни тарифи за различни номера за гости');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Можете да създадете множество тарифи за един и същ тип стая, така че ако искате различни цени за различен брой гости, можете да направите това.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'На човек на вечер - Типове гости');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'За да таксувате на човек на вечер, ще трябва да създадете типове гости. Различните типове гости могат да имат разлики спрямо основната цена на стая, така че децата на различна възраст могат да имат различни отстъпки в зависимост от възрастта им. Вие не е необходимо да таксувате на човек на вечер, за да използвате Типове гости, можете също да ги използвате, ако таксувате фиксирана ставка, но все пак искате да уловите броя на гостите или защото искате да ограничите броя на гостите при резервация. ' );

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Медиен център - Качване на изображения');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Всички изображения се качват през медийния център. В този видеоклип ще качим изображението на основната собственост, някои изображения от слайдшоу, малка селекция от изображения, които да се показват на страницата с резултати от търсенето, и изображения за едно от стаите.');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Медиен център - Качване на изображения');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Всички изображения се качват през медийния център. В това видео ще качим изображението на основната собственост, малка селекция от изображения, които да се показват на страницата с резултати от търсенето, и някои изображения на слайдшоу.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Контролен панел на администратора');
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Това е вашата целева страница по подразбиране в администраторската област. Можете да видите обобщение на различни статистически данни за сайтове и да видите кои свойства съществуват в системата, които са пълни и които са завършени и чакат преглед преди одобрение . След като имотът е одобрен, той може да бъде публикуван от управителя на имота. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Мениджър на приставки, инсталация и използване');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Този видеоклип ви показва как да използвате Plugin Manager, включително инсталиране на мениджъра на плъгини и след това инсталиране и деинсталиране на приставка. Ако нямате лицензен ключ, ще бъдете подканени да запишете в сайта Конфигурация, преди да можете да инсталирате мениджъра. Ако преди това не сте използвали мениджъра на плъгини, този списък първоначално ще бъде празен, в този пример вече имам инсталирани различни приставки. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Мениджъри на имоти');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Мениджърите на имоти се добавят по един от двата начина. Или те сами създават свойства (могат да бъдат деактивирани в конфигурацията на сайта), или администраторът на сайта може да присвои съществуващ мениджър на определени свойства. Мениджърите имат достъп само до свойства, които имат създадени или са им присвоени. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Контрол на достъпа');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Можете да използвате функцията за контрол на достъпа, за да деактивирате опциите на менюто, като ги направите видими само за определени класове потребители, или дори да ги направите напълно изчезнали. Ако лентата с менюта няма опции за показване, тогава тя ще изчезне напълно, така че ако не искате посетителите на сайта да виждат опции, можете просто да зададете всички опции да бъдат видими за влезли потребители, например. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Типове имоти и стаи');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'В този видеоклип ще видите две важни концепции. Първата е създаване на типове собствености и свързани стаи. Ще видите също така регистриран потребител, който все още не е мениджър, създава своя собствена собственост и става мениджър (но само могат да конфигурират създаденото от тях свойство). Типовете собствености и стаи са свързани, след като сте създали тип собственост, трябва да добавите тип стая, в противен случай мениджърите на имоти ще виждат червени съобщения за грешка при опит за конфигуриране на техните свойства. ');



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Качване на маркери на карти');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Използвате Media Center, за да качвате маркери на карти. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Тук можете да намерите голям източник на маркери. < /a> Процедурата за качване на характеристики на имоти, характеристики на стаи, типове стаи и други е същата. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Характеристики на имота');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'В този видеоклип ще ви покажем как да създавате характеристики на имоти и да качвате изображения за тях.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Къси кодове');
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Късите кодове са изключително мощна функция на Jomres. Принципът е един и същ както за Joomla, така и за Wordpress. В това видео ще ви покажем къде да видите кратките кодове (този списък ще се промени в зависимост от това кои плъгини са инсталиран) и как да ги използвате. Можете да използвате кодовете в статии или модули. ');

jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Регистрационни файлове');
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Този видеоклип ще ви покаже как да преглеждате регистрационните файлове. Обширно регистриране се случва, когато системата се изпълнява. Когато е в производствен режим (Site Config> Отстраняване на грешки), се генерират по -малко регистрационни файлове, така че ако тествате нова функция, тогава трябва да настроите сайта си за Разработка. Ако искате да добавите свое собствено регистриране към вашите скриптове на Jomres, разгледайте <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> страницата ни с ръководство за това как да го направите. </a> Тук ще хвърлим фалшива грешка, след което ще видим лог файла. Тъй като сайтът е настроен на Development там е много информация, обикновено просто ще видите съобщение, че има грешка и тя е докладвана. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Превод на етикети и други низове');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Има няколко начина за превод на езикови низове в Jomres, можете да редактирате езикови файлове, но те могат да бъдат презаписани при надстройката. Вместо това препоръчваме да използвате вградените инструменти за превод, които са уникални за нашите софтуер. Ако низът е нещо, което е въведено във форма, например името на тип стая, можете да използвате страницата за редактиране на етикети. Ако низът е от езиковия файл, можете да използвате инструмента за редактиране на езикови файлове. Просто използвайте инструмента за търсене в браузъра, за да намерите низа, който искате да промените, и след това щракнете върху връзката, за да го промените. Тези промени се запазват в базата данни и следователно са безопасни за актуализиране. Можете да имате различни етикети за различни типове имоти, за да можете променете New Property на New Campsite, например, като промените падащото меню Language Context в горната част на страницата, преди да промените етикета. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Добавяне на свойства');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> На този етап Jomres е инсталиран в CMS и е добавен към интерфейсното меню (или в Wordpress сте създали страница и сте добавили основния кратък код на Jomres към нея). </ p>
<p> Тук ще видите как регистриран потребител, който все още не е мениджър на имоти в Jomres, може да създаде нова собственост, да конфигурира някои основни настройки и да я публикува. </p>
<p> В края ще видите, че мениджърът е автоматично зададен като мениджър на имоти, но те могат да конфигурират само собствените си свойства. </p>
<p> Въпреки че интерфейсът в Wordpress изглежда различен, процесът е абсолютно същият за Joomla или Wordpress. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Категории имоти');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Категориите на имоти е проста функция, която позволява на мениджърите на имоти да присвояват техните свойства към определена категория. Администраторите на сайтове могат да създават кратки кодове, които ще изброяват всички свойства в категория, както е показано в този видеоклип.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Свойства за разглеждане от администратора на сайта');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Не управлявате свойства от тук, можете да управлявате само свойства от интерфейса, но в този списък можете да видите свойства, които чакат одобрение (ако функцията е активирана) и всички, които са непълни (напр. все още трябва да качите изображения, да зададете цени и т.н.). Щракнете върху името на имота, за да бъдете отведени в таблото за управление на това свойство. След това ще можете да използвате разделите с ръководства в горната част на страницата, за да видите стъпките, които трябва да вземете, за да завършите и публикувате свойство. </p> ');


