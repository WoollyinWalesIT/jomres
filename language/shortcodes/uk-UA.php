<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.24.0
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Це головна сторінка cpanel властивості.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Це діаграма властивостей стрічки, яка містить короткий огляд бронювань у реальному часі, доступності та заповненості.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Цей сценарій дозволяє користувачу порівнювати кілька властивостей один з одним, максимум до 3 властивостей.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Список ідентифікаторів властивостей, розділених комами, наприклад, 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Створює форму власника контакту.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Передайте ідентифікатор властивості властивості, з якою потрібно зв’язатися. Передайте 0 (нуль) натомість зверніться до адміністратора сайту.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Показує сторінку\" Інформація про компанію \", яка витягує деталі з поля\" Інформація про вашу компанію \"у розділі\" Конфігурація власності \". Дані на цій вкладці зазвичай використовуються для листування, дозволяючи менеджерам мати адресу готелю та квартири та окрема адреса для комерційних цілей. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Показує календар власності");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Передайте ідентифікатор властивості властивості для відображення.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Місяці для показу, за замовчуванням 24, якщо не встановлено інше. Не сумісне зі змінною Показати лише місяць.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Встановіть для цього значення 1, якщо ви просто хочете, щоб поточний місяць відображався самостійно. Параметр months_to_show буде проігноровано, якщо show_just_month використовуватиметься так само в той самий час.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Показує лише текст опису властивості.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Показує лише текст опису властивості.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Показує лише властивості властивості.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Показує лише шаблон заголовка властивості.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Показує лише типи кімнат власності.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Показує лише основне зображення властивості.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Показує лише карту властивостей.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Показує властивість Додатковий текст.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR -код, що посилається на gmaps. Його можна відсканувати у телефон за допомогою програми для читання qr -коду, яка надає вказівки до власності.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Показує відгуки про нерухомість.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Відображає підсумок огляду власності.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Показує окрему кімнату.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'Ідентифікатор кімнати.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Показує кімнати власності.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Показує зображення кімнати у вигляді слайд -шоу.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Показує слайд -шоу властивостей.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Показує тарифи на нерухомість.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Відображає адресу компанії, яку ви ввели у Конфігурації сайту> Дані вашої компанії.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Показує умови власності.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'Ідентифікатор власності.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Показує календар користувацького інтерфейсу, який відрізняється від основного великого календаря та базується на функціоналі календаря інтерфейсу Jquery.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Передайте ідентифікатор властивості властивості для відображення.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Встановіть для цього значення 1, щоб не відображати легенду.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Відображає результати пошуку, які можна покращити, додавши параметри пошуку. Ми не рекомендуємо використовувати всі параметри одночасно, оскільки в результаті ви отримаєте занадто обмежені критерії пошуку. Натомість вам слід обмежитися лише одним -двома параметрами, наприклад, пошуком за країною та кількістю зірок. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Пошук за країнами, використовуючи код ISO Alpha-2, наприклад, GB або DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Пошук за регіонами. Оскільки регіони зберігаються в базі даних, потрібно використовувати ідентифікатор регіону. Відкрийте Адміністратор> Jomres> Структура сайту> Список регіонів і наведіть курсор на посилання Редагувати, там ви побачите ідентифікаційний номер регіону . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Повна назва міста, яке потрібно шукати.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Пошук властивостей з певними функціями. Ідентифікатори функцій можна знайти в розділі Адміністратор> Jomres> Структура сайту> Функції властивостей.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Пошук властивостей з певними типами кімнат. Ідентифікатори типу кімнати можна знайти в розділі Адміністратор> Джомрес> Структура сайту> Типи кімнат.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Пошук властивостей певного типу властивостей. Ідентифікатори типів властивостей можна знайти в розділі Адміністратор> Jomres> Структура сайту> Типи властивостей.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Пошук нерухомості у певному ціновому діапазоні.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Шукати властивості, чиї тарифи дозволяють номери гостей певних значень, наприклад партій з 6");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Пошук властивостей N зірок.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Пошук за датою прибуття. Потрібно поєднати з параметром дати вильоту.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Пошук за датою вильоту. Потрібно поєднати з параметром arrivalDate.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Пошук за категорією власності.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Перегляд сторінки агента. Ви можете передати АБО ідентифікатор властивості або сам ідентифікатор агента, якщо ви його знаєте.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Ідентифікатор властивості, тут буде показано агента властивості.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Ідентифікатор бази даних менеджера, якщо він відомий.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Відображає популярні властивості, які зазвичай використовуються в позиціях модулів або віджетів.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Максимальна кількість властивостей, які можна показати.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Показати лише властивості цих конкретних типів властивостей.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Установлено на 1 для відображення модулів, оптимізованих для вертикального віджета/положення модуля.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Відображає випадковий вибір властивостей, які зазвичай використовуються в позиціях модулів або віджетів.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Максимальна кількість властивостей, які можна показати.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Показати лише властивості цих конкретних типів властивостей.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Встановити 1 для відображення модулів, оптимізованих для вертикального віджета/положення модуля.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Відображає останні властивості відвідувача, які зазвичай переглядаються, зазвичай використовуються в позиціях модулів або віджетів.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Максимальна кількість властивостей, які можна показати.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Установлено на 1 для відображення модулів, оптимізованих для вертикального віджета/положення модуля.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Відображає ряд властивостей, які зазвичай використовуються в позиціях модулів або віджетів.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Ідентифікатори властивостей властивостей, які потрібно показати.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Установлено на 1 для відображення модулів, оптимізованих для вертикального віджета/положення модуля.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Відображення спадного меню вибору валюти.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Увімкнення/вимкнення альтернативного виводу шаблону. Цей вихід призначений для використання на панелях інструментів Bootstrap.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Відображення сторінки кошика.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Відображає модуль/віджет кошика для покупок.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Відображення головного меню. Зверніть увагу, якщо у вас запущена персоналізована версія mainmenu_wrapper_alternate.html, наприклад, у/templates/jr_leohtian/html/com_jomres, то вам, можливо, доведеться змінити її < /i> з MENU_LOCATION, загорнутим у фігурні дужки. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Ця сторінка дозволяє завантажувати зображення для вашого майна та речей, які ви пропонуєте. На ньому є одна основна кнопка та друга кнопка, що дозволяє вибрати певні ресурси для завантаження зображень. Отже, основна властивість зображення та слайд -шоу показуватимуть лише одну кнопку, але якщо ви створили, наприклад, Додаткові додаткові послуги або кімнати, ви побачите другу кнопку, куди можна завантажувати зображення для цих конкретних ресурсів. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Ця сторінка дозволяє завантажувати зображення для вашого майна та речей, які ви пропонуєте. На ньому є одна головна кнопка та друга кнопка, що дозволяє вибрати певні ресурси для завантаження зображень. Отже, основна властивість зображення та слайд -шоу показуватимуть лише одну кнопку, але якщо ви створили додаткові додаткові елементи, то побачите другу кнопку, куди можна завантажити зображення для цих конкретних ресурсів. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Спочатку оберіть зображення, яке потрібно завантажити, натиснувши Додати зображення або за допомогою перетягування. Вони відображатимуться у стовпці праворуч. </li>
  <li> Над цією областю використовуйте кнопку \"Вибрати ресурс \", щоб вибрати ресурс, для якого потрібно завантажити зображення. Вам може бути запропоновано вибрати конкретний ресурс під ним. </li>
  <li> Вибравши ресурс, ви можете натиснути кнопку Завантажити зображення під зображенням, щоб пов’язати його з цим ресурсом. Після того, як зображення буде завантажено, воно зникне зі стовпця на правій веб -сторінці та з’явиться ліворуч. </li>
  <li> Використовуйте кнопку \"Кошик\" поруч із наявними зображеннями, щоб видалити зображення, які більше не хочете показувати. </li>
  <li> Ви можете змінити порядок показу файлів у слайд -шоу, перейменувавши їх перед завантаженням, оскільки вони відображаються на сторінках в алфавітному порядку. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Поруч із кнопкою\" Ресурс \"ви можете побачити кнопку попереднього перегляду. Якщо натиснути на неї, ви побачите спливаюче вікно, яке покаже, як на сторінці будуть виглядати завантажені зображення. Це допоможе вам створити уявлення про те, як зображення будуть виглядати для ваших клієнтів. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Немає обмежень щодо кількості зображень, які можна завантажити. Зображення автоматично змінюються під час їх завантаження. Ви можете завантажувати лише файли JPG та PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "В ідеалі будь -яке зображення, яке ви завантажите, буде принаймні");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "пікселі шириною, інакше вони можуть виглядати нечіткими після завантаження.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Будь -які завантажені вами зображення не можуть перевищувати");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "у розмірі.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Виберіть ресурс, для якого потрібно завантажити зображення");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Конкретний ресурс");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Зображення, вже завантажені для цього ресурсу");

jr_define ('_JOMRES_MARKDOWN_TITLE', 'Форматування тексту');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Ви можете вводити текст тут, використовуючи просте форматування Markdown. Вам не потрібно знати будь -який HTML, просто використовуйте кнопки, щоб інформація виглядала так, як вам потрібно, або відформатуйте текст відповідно до цих прикладів.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Наголос');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'курсив');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'закреслення');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Заголовки");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Великий заголовок');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Середній заголовок");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Невеликий заголовок');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Крихітний заголовок');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Списки");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Загальний елемент списку');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Нумерований елемент списку');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Посилання');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Текст для відображення');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Цитати');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Це цитата.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Він може охоплювати кілька рядків!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Зображення');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Таблиці');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Стовпець');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Показувати зображення властивостей як слайд -шоу у списку властивостей?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Якщо встановлено так, буде показано слайд -шоу основних зображень властивостей. Якщо встановлено значення ні, то буде показано основне зображення першої властивості.');

jr_define ('EDIT_CMS_USER', 'Редагувати користувача CMS');

jr_define ('BOOKING_MADE_BY', 'Бронювання зроблено');

jr_define ('_JOMRES_ROUTER_FEATURES', 'Зручності');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Типи кімнат');

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL -адреса зовнішньої форми бронювання');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Тут ви можете встановити зовнішню URL -адресу, якщо ви хочете використовувати сторонній веб -сайт для бронювання. Усі кнопки бронювання jomres вказуватимуть на цю URL -адресу. Залиште це поле порожнім, якщо ви хочете використовувати форму бронювання Jomres . ');

jr_define ('_JOMRES_ROOM_TAGLINE', 'Слоган (короткий опис кімнати/субтитри)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Опис кімнати');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Гість у чорному списку');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Якщо цей гість занесений у чорний список, то він більше не зможе здійснювати бронювання в цьому закладі.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Обробник сеансу');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Зберегти файли сеансів jomres на диск або в базу даних. Рекомендується: база даних');
jr_define ('_JOMRES_MAP_HEIGHT', "Висота карти (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Рівень масштабування карти");
jr_define ('_JOMRES_MAP_MAPTYPE', "Тип карти");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Менеджер заміни шаблонів");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Пакети шаблонів - це плагіни, які можуть надавати перевагу шаблонам для різних основних файлів шаблонів Jomres.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Ця сторінка містить усі файли шаблонів, які можуть бути перекриті файлами шаблонів пакета шаблонів. Якщо ви хочете змінити певний файл шаблону, натисніть кнопку редагування цього файлу, на наступній сторінці ви побачите можливість вибрати, з якою версією ви хочете змінити. Зверніть увагу, що ці заміни мають пріоритет над Jomres Core і будь -якими темами/шаблонами Wordpress або Joomla. Ви можете вимкнути заміну, видаливши її на сторінці Переозначення шаблонів списку. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Назва шаблону");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Поточний шлях");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Не перевизначено");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Ви можете вибрати, який файл шаблону замінити файли шаблонів Core, змінивши випадаючий список");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Відсоток заброньованих кімнат");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Відображає форму створення нової властивості.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Масштабування карти, 1: Світ 5: Суша/континент 10: Місто 15: Вулиці 20: Будівлі');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Кількість оглядів для показу');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Відображає властивості користувачів, включених до списку. Якщо користувач зареєстрований, це його улюблені, якщо він не увійшов у систему, то лише ті елементи, які були додані через значок "Улюблене" під час відвідування.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Мінімальна сума депозиту');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Якщо розрахований депозит менший за цей показник, то замість цього встановіть депозит на це значення. Цей показник сам по собі може бути перевищений, якщо він не відповідає мінімальному депозиту сайту. Залиште значення 0 до не використовувати налаштування. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Показує форму згоди, що відповідає GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Список типів кімнат власності');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Показати тип кімнати власності');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Показати форму для входу');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Показати список кімнат певного типу кімнати');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Ідентифікатор типу кімнати');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Інформаційна панель');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Показує список об\'єднаних властивостей');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Кількість об\'єднаних властивостей для показу');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Чи показувати MRP (готелі/готелі типу "ліжко та сніданок") або SRP (котеджі/апартаменти/вілли). За замовчуванням визначається з поточної нерухомості, то показано. Щоб вибрати конкретний тип, встановіть це значення на 0 для сербської мови або 1 для mrps. ');

