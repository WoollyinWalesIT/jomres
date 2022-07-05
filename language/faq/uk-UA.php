<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_FAQ', 'Sık sorulan sorular');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Властивості');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Як створити властивість?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Натисніть Властивості> Нова властивість, щоб додати нову властивість.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Як я можу побачити, як виглядає моя нерухомість для гостей?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Натисніть Властивості> Попередній перегляд, щоб побачити, як ваша нерухомість виглядає для гостей.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Як додати кімнати?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Спосіб додавання кімнат залежить від вашого режиму редагування тарифів. У звичайному режимі редагування тарифів вам не потрібно додавати кімнати, оскільки вони автоматично додаються під час налаштування цін. Якщо ви використовуєте У режимі мікроуправління або розширеного редагування тарифів, а потім у меню Налаштування> Кімнати можна додавати, редагувати та видаляти кімнати. Ви також зможете створювати функції кімнати та призначати ці функції цим кімнатам. Крім того, ви зможете завантажувати зображення для окремих осіб кімнати, що використовують медіацентр. Коли ви створюєте кімнати, ви повинні намагатися переконатися, що вони відображають ваші реальні кімнати у вашій власності, оскільки це полегшить керування ними. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Як встановити ціни на номер?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', 'Це залежить від вашого режиму редагування тарифів. Якщо ви використовуєте режим редагування звичайних тарифів (" Конфігурація власності "> вкладка" Режими редагування тарифів "), то ви можете налаштувати кількість кімнат, ціну, кількість людей, які можуть розмістити кожну кімнату, та загальну кількість людей, яких ви хочете отримати при кожному бронюванні. Цей режим дозволяє встановлювати ціни на кімнати протягом наступних 10 років. <br/> Якщо ви використовуєте режими редагування тарифів "Розширений" або "Мікроуправління", можливість встановлювати ціни на номер на кожен день протягом наступних років. Ви також можете мати декілька тарифів для одного типу номеру, наприклад, ви можете мати один тариф на ліжко та сніданок, а інший - на ліжко, сніданок та вечерю. Якщо у вас немає особливих потреб , ми рекомендуємо вам постійно користуватися Micromanage, Advanced працюватиме так само, але вам потрібно бути обережним, щоб дати початку та завершення різних тарифів були послідовними. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Як створити додаткові додатки?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', 'Додатки можна додавати до бронювань і налаштовувати в Налаштування> Додаткові. Вони можуть бути або необов\'язковими, або" примусовими ", іншими словами, гість не може скасувати їх вибір у бронюванні. Ви можете запропонувати різні методи плати за додаткові додаткові послуги, а також про те, чи відображаються вони на вашій сторінці "Інформація про нерухомість". Оскільки додаткові послуги можна показувати, лише якщо бронювання відбувається протягом певних дат (наприклад, для сезонних фруктів), вам слід переконатися, що ви встановили дати "Дійсний від" і "До". Після того, як ви створили додаткові додатки, ви можете завантажувати зображення для них через Менеджер медіа. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Як я можу приймати платежі онлайн?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Щоб здійснювати платежі в Інтернеті, вам потрібно мати обліковий запис у провайдера онлайн -платежів, який називається шлюзом. Щоб переглянути доступні шлюзи, перейдіть на вкладку\" Конфігурація власності \">\" Шлюзи \". Натисніть назву шлюзу на його сторінку конфігурації. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Чи можу я дати знижку?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Знижки можна надавати, це можна зробити різними способами. Якщо ви робите бронювання від імені клієнта, то ви можете встановити власний депозит та загальну суму бронювання у формі бронювання. , використовуючи поля Override Accommodation Total і Override Deposit (Гості не можуть скористатися цією функцією). Інший спосіб надати гостю знижку - створити купони на знижку, які можна налаштувати таким чином, що вони можуть бути використані лише між певними датами (дійсний від/до) або застосовується лише тоді, коли бронювання припадає на певні дати (бронювання дійсне з/до). Ці купони зі знижкою можна призначити лише одному гостю, або за бажанням можна роздрукувати купони. Роздруківка містить QR -код які гості можуть відсканувати у своїх телефонах, щоб перейти до форми бронювання з кодом знижки, який уже застосовується. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Бронювання');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Коли я натискаю Нове бронювання, я потрапляю у контактну форму, чому?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Перш ніж здійснювати бронювання в Інтернеті, спершу потрібно налаштувати деякі ціни (тарифи) для кожного типу номеру у вашій реальній власності. Після того, як ви створите деякі тарифи, ви зможете брати бронювання . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Що таке чорні бронювання?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Чорне бронювання - це бронювання, створене для того, щоб вивести кімнату або кімнати з ладу. Вони не пов'язані з будь -якими гостями і корисні, наприклад, якщо необхідно відремонтувати кімнату.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Зображення');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Як завантажити зображення?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Щоб завантажити зображення, вам потрібно перейти на сторінку Налаштування> Медіа -центр. На цій сторінці ви побачите кілька панелей. Угорі ви можете побачити деякі нотатки, а під ними ви побачите спадне меню). У цьому спадному меню можна вибрати, для якого ресурсу ви завантажуєте зображення. <br/> Праворуч стовпець із Додати зображення, Очистити список та Завантажити все. Натисніть Додати зображення та виберіть деякі зображення зі свого робочого столу чи мобільного пристрою. Коли Ви зробили це, стовпець змінить список ескізів. Звідси ви можете завантажити одне або кілька зображень для своїх ресурсів. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Що таке\" основне \"зображення?");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Основне зображення - це те, яке відображається в результатах пошуку та у заголовку вашого ресурсу (область у верхній частині сторінок, де показано щось про вашу власність). Ви повинні вибрати зображення, яке відображатиме вашу власність у вікні найкраще можливе світло. Щоб завантажити основне зображення, переконайтеся, що у спадному списку у верхньому лівому куті вибрано Основне зображення власності, а потім завантажте одне або кілька зображень. Якщо ви завантажите більше одного зображення, усі зображення будуть використані в пошуку сторінка результатів відображається у вигляді невеликого слайд -шоу. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Що таке значки функцій кімнати?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Функції кімнати можуть створювати користувачі режимів редагування тарифів Micromanage або Advanced. Вони можуть бути пов'язані з однією або кількома кімнатами та відображатись у формі бронювання. Після створення функції кімнати ви можете завантажте зображення для цієї функції, спочатку вибравши Значки функцій кімнати у спадному меню в Медіа -центрі, а потім вибравши назву функції кімнати зі спадного меню, яке з'явиться під нею. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Як завантажити зображення кімнати?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Номери можуть створювати користувачі режимів редагування тарифів Micromanage або Advanced. Після створення однієї або кількох кімнат ви можете завантажити кілька зображень для кожної кімнати через Медіацентр (виберіть назву кімнати/номер після виберіть Зображення кімнати у спадному меню). Ці зображення можна побачити у слайд -шоу, переглянувши сторінку Попередній перегляд та вибравши вкладку Наші кімнати, а потім натиснувши посилання Доступність. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Як завантажити зображення слайд -шоу?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Зображення слайд -шоу відображаються на сторінці Деталі властивості (Попередній перегляд) поруч із кнопкою Забронювати зараз.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Як завантажити додаткові зображення?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Подібно до кімнат і функцій кімнати, вам потрібно спочатку створити додаткову. Як тільки це буде зроблено, ви можете вибрати Додаткові у верхньому спадному списку. Коли ви це зробите, вам потрібно вибрати назву екстра зі спадного списку нижче. Коли вибрано ім’я, ви можете завантажити одне або кілька зображень для цього додатка. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Щось пов\'язане з гостями');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Як мені благблаху?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Ти, благблаба');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Як зберегти описи кількома мовами?');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', 'Щоб зберегти описи кількома мовами, спершу перейдіть на сторінку" Налаштування ">" "" "" "" "" "". " Знову сторінку "Подробиці власності" та знову збережіть деталі. Отже, якщо сайт може відображати як англійську, так і іспанську (або будь -які інші) мови, ви вибрали б англійську, введіть опис англійською, а потім натисніть Зберегти. Далі, змініть поточну мовою до іспанської, а потім збережіть новий опис іспанською мовою. Це працює для всіх вхідних даних на цій сторінці. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Чи можу я змінити інші властивості на цьому сайті?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Ні, ви не можете. Ви можете керувати лише властивостями, які ви створили або були призначені вам як менеджер майна.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Чи можу я змінити інші властивості на цьому сайті?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Так, ви можете, ви суперменеджер нерухомості і можете змінювати будь -які властивості, показані на сторінці\" Властивості списку ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Що таке типи гостей/Як змінити кожну людину за ніч?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', 'На вкладці" Налаштування ">" Конфігурація власності ">" Тарифи та валюти "ви можете вирішити, чи хочете ви стягувати плату з особи за ніч. Якщо ви платите за особу за ніч, вам потрібно буде створити один або кілька типів гостей. Ви можете створити простий тип гостя, де ви просто дасте йому опис (наприклад, Особи), або ви можете створити кілька різних типів гостей, наприклад "Дорослі" та "Діти до 10 років". Для дітей, якщо ви хочете запропонувати знижка у розмірі 50%, тоді ви встановите значення "Відсоток" на "Так", а значення "Відхилення" - на 50. Номери мають базові тарифи, це налаштування дозволяє регулювати ціну номера залежно від типу гостя. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Які особливості кімнати?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', 'Особливості кімнати - це речі, які виділяють кімнату. Вони можуть бути чимось простим, наприклад, приладдям для приготування чаю та кави, або можуть бути такими, що дійсно роблять кімнату вищою за інші, наприклад," Погляди над bay ". Після того, як ви створили функцію кімнати, ви можете завантажувати зображення для цієї функції в Медіацентр. Ці функції кімнати можна переглянути на сторінці наявності номерів, а також якщо ви налаштували свою власність на відображення стилю списку класичних кімнат (де гості можуть обрати, яку саме кімнату вони хочуть забронювати), потім вони можуть використовувати функції кімнати для фільтрації сумів, зазначених у формі бронювання. ');

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Платежі');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Ви не бачите шлюз платежу після бронювання.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Якщо ви увійшли як Менеджер нерухомості, ви не побачите шлюз платежів, оскільки ви не сплачуєте самостійно. Лише користувачі, які не є менеджерами, побачать шлюз під час бронювання.");
