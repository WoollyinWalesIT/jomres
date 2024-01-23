<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define('VIDEO_TUTORALS_TITLE', 'Видеоуроки');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Панель управления');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'В этом руководстве показано, как использовать панель управления Property Management.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Хронология');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Как использовать календарь временной шкалы. В этом видео мы создаем нового гостя, вводя его данные во всплывающем окне, существующих гостей можно использовать повторно, выбрав их имя из раскрывающегося списка во всплывающем окне.') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Свойства списка');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Как использовать страницу свойств списка для просмотра дополнительной информации, изменения столбцов и поиска определенных свойств.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Отредактируйте сведения о своей собственности');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Редактирование сведений о вашей собственности, включая перетаскивание по карте для установки вашего местоположения.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Изменить режим редактирования тарифа');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Ваш режим редактирования тарифов определяет метод, который вы можете использовать для установки цен на вашу собственность. Вы делаете это на странице конфигурации собственности.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Обычный режим редактирования тарифов для гостиниц, пансионатов, пансионатов');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Обычный режим редактирования тарифов - это простая функция редактирования тарифов, которая позволяет вам выбрать количество комнат в объекте, цену комнаты, количество гостей, которое может вместить каждая комната, и максимальное количество гостей в партии. При сохранении эти цены действительны в течение следующих 10 лет. ');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Редактирование нормального тарифа для вилл и квартир');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Обычный режим редактирования тарифа - это простая функция редактирования тарифа, которая позволяет вам выбрать подтип собственности, цену собственности за ночь и максимальное количество гостей в группе. При сохранении эти цены являются затем действует в течение следующих 10 лет. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Микроменеджмент режима редактирования тарифов (рекомендуется)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Режим редактирования тарифов Micromanage позволяет вам настроить как цену, так и минимальное количество дней, в течение которых может быть действителен срок пребывания, для каждого дня в году. Это мощный инструмент, который дает вам полный контроль завышение цен. В этом примере мы покажем вам, как создать несколько наборов цен для одного и того же типа комнаты, установить разные цены для разных периодов и разные цены для определенных дней недели в пределах периода. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Микроменеджмент режима редактирования тарифов для вилл / квартир (рекомендуется)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Режим редактирования тарифов Micromanage позволяет вам настроить как цену, так и минимальное количество дней, в течение которых может быть действительна пребывание, для каждого дня в году. Это мощный инструмент, который дает вам полный контроль завышение цен. В этом примере мы покажем вам, как создать несколько наборов цен. Мы будем устанавливать разные цены для разных периодов и разные цены для определенных дней недели в течение периода. Как только это будет сделано, мы создадим несколько тарифов для одного и того же недвижимость, но с разным количеством гостей, что позволяет нам точно контролировать цены для каждого сценария. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Разные тарифы для разных номеров гостей');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Вы можете создать несколько тарифов для одного и того же типа номера, поэтому, если вам нужны разные цены для разного количества гостей, вы можете это сделать.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'На человека в сутки - Типы гостей');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Чтобы взимать плату за человека за ночь, вам необходимо создать типы гостей. Разные типы гостей могут отличаться от базовой цены за номер, поэтому дети разного возраста могут иметь разные скидки в зависимости от их возраста. не нужно взимать плату с человека за ночь, чтобы использовать типы гостей, вы также можете использовать их, если вы взимаете фиксированную ставку, но все же хотите фиксировать количество гостей, или потому что вы хотите ограничить количество гостей в бронировании. ');
	
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Медиацентр - загрузка изображений');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Все изображения загружаются через медиацентр. В этом видео мы загрузим изображение основного свойства, несколько изображений слайд-шоу, небольшой набор изображений, которые будут отображаться на странице результатов поиска, и изображения для одного из комнаты.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Медиацентр - загрузка изображений');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Все изображения загружаются через медиацентр. В этом видео мы загрузим изображение основного свойства, небольшой набор изображений, которые будут отображаться на странице результатов поиска, и несколько изображений для слайд-шоу.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Панель управления администратора');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Это ваша целевая страница по умолчанию в области администратора. Вы можете просмотреть сводку различных статистических данных по сайту и увидеть, какие свойства существуют в системе, какие полные и которые были завершены и ожидают рассмотрения перед утверждением . После того, как собственность была одобрена, она может быть опубликована менеджером собственности. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Диспетчер подключаемых модулей, установка и использование');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'В этом видео показано, как использовать диспетчер плагинов, включая установку диспетчера плагинов, а затем установку и удаление плагина. Если у вас нет лицензионного ключа, вам будет предложено сохранить его на сайте Конфигурация перед установкой менеджера. Если вы не использовали менеджер плагинов до этого, этот список изначально будет пустым, в этом примере у меня уже установлены различные плагины. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Управляющие недвижимостью');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Менеджеры свойств добавляются одним из двух способов. Либо они сами создают свойства (можно отключить в конфигурации сайта), либо администратор сайта может назначить существующего менеджера для определенных свойств. Менеджеры могут получить доступ только к тем свойствам, которые у них есть созданы или назначены. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Контроль доступа');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Вы можете использовать функцию контроля доступа, чтобы отключить параметры меню, сделав их видимыми только для определенных классов пользователей или даже заставив их полностью исчезнуть. Если в строке меню нет параметров меню для отображения, то это полностью исчезнет, ​​поэтому, если вы не хотите, чтобы посетители сайта видели какие-либо параметры, вы можете просто установить, чтобы все параметры были видны, например, зарегистрированным пользователям. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Типы свойств и комнат');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'В этом видео вы увидите две важные концепции. Первая - это создание типов собственности и связанных типов комнат. Вы также увидите, как зарегистрированный пользователь, который еще не является менеджером, создает свою собственность и становится менеджер (но может настраивать только созданное свойство). Типы свойств и комнат связаны, после создания типа собственности необходимо добавить тип комнаты, в противном случае менеджеры свойств будут видеть красные сообщения об ошибках при попытке настроить свои свойства. ');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Загрузка маркеров карты');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Вы используете Media Center для загрузки маркеров карты. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Здесь можно найти отличный источник маркеров. < / a> Процедура загрузки характеристик собственности, характеристик комнат, типов комнат и т. д. такая же. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Свойства свойства');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'В этом видео мы покажем вам, как создавать элементы собственности и загружать для них изображения.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Шорткоды');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Шорткоды - исключительно мощная функция Jomres. Принцип одинаков для Joomla и Wordpress. В этом видео мы покажем вам, где просматривать короткие коды (этот список будет меняться в зависимости от того, какие плагины установлен) и как ими пользоваться. Вы можете использовать коды в статьях или модулях. ');
	
jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Файлы журнала');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Это видео покажет вам, как просматривать файлы журналов. Обширное ведение журнала происходит при запуске системы. В производственном режиме (Конфигурация сайта> Отладка) создается меньше журналов, поэтому, если вы тестируете новую функцию, тогда вам следует настроить свой сайт на разработку. Если вы хотите добавить собственное ведение журнала в свои сценарии Jomres, взгляните на <a href="https://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> наша справочная страница о том, как это сделать. </a> Здесь мы выдадим фальшивую ошибку, а затем просмотрим файл журнала. Поскольку сайт настроен на разработку там это много информации, обычно вы бы просто увидели сообщение о том, что произошла ошибка, и о ней было сообщено. ');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Перевод этикеток и других строк');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Существует несколько способов перевода языковых строк в Jomres, вы можете редактировать языковые файлы, но они могут быть перезаписаны при обновлении. Вместо этого мы рекомендуем вам использовать встроенные инструменты перевода, уникальные для наших Если строка - это что-то, что было введено в форму, например, название типа комнаты, вы можете использовать страницу редактирования метки.Если строка взята из языкового файла, вы можете использовать инструмент редактирования языковых файлов. Просто используйте инструмент поиска в браузере, чтобы найти строку, которую вы хотите изменить, а затем щелкните ссылку, чтобы изменить ее. Эти изменения сохраняются в базе данных и поэтому их можно обновлять. У вас могут быть разные метки для разных типов свойств, чтобы вы могли измените New Property на New Campsite, например, изменив раскрывающийся список Language Context в верхней части страницы перед изменением метки. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Добавление свойств');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> На этом этапе Jomres был установлен в CMS и добавлен в меню внешнего интерфейса (или в Wordpress вы создали страницу и добавили к ней базовый шорткод Jomres). </ p>
<p> Здесь вы увидите, как зарегистрированный пользователь, который еще не является менеджером собственности в Jomres, может создать новое свойство, настроить некоторые основные параметры и опубликовать его. </p>
<p> В конце вы увидите, что менеджер был автоматически назначен менеджером собственности, однако он может настраивать только свои собственные свойства. </p>
<p> Хотя интерфейс в Wordpress выглядит иначе, процесс в Joomla и Wordpress точно такой же. </p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Категории свойств');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Категории свойств - это простая функция, которая позволяет менеджерам собственности назначать свои свойства определенной категории. Администраторы сайта могут создавать короткие коды, которые будут перечислять все свойства в категории, как показано в этом видео.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Администратор сайта просматривает свойства');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Вы не управляете свойствами отсюда, вы можете управлять свойствами только из внешнего интерфейса, однако в этом списке вы можете видеть свойства, ожидающие утверждения (если функция включена), и любые, которые неполные (например, все еще необходимо загрузить изображения, установить цены и т. д.). Нажмите на название свойства, чтобы перейти на панель управления для этого свойства. После этого вы сможете использовать разделы руководства в верхней части страницы, чтобы увидеть шаги, которые нужно взять для завершения и опубликовать свойство. </p> ');
