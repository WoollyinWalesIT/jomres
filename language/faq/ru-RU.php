<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_FAQ', 'Часто задаваемые вопросы');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Свойства');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Как создать свойство?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Щелкните Свойства> Новое свойство, чтобы добавить новое свойство.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Как я могу увидеть, как моя недвижимость выглядит для гостей?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Щелкните "Свойства"> "Предварительный просмотр", чтобы увидеть, как ваш объект выглядит для гостей.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Как добавить комнаты?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', 'Способ добавления номеров зависит от вашего режима редактирования тарифов. В обычном режиме редактирования тарифов вам не нужно добавлять номера, поскольку они добавляются автоматически при настройке цен. Если вы используете Микроменеджмент или режим расширенного редактирования тарифов, затем в разделе "Настройки"> "Комнаты" вы можете добавлять, редактировать и удалять комнаты. Вы также сможете создавать функции комнат и назначать эти функции этим комнатам. Кроме того, вы сможете загружать изображения для отдельных комнат. комнаты с использованием Media Center. Создавая комнаты, вы должны постараться, чтобы они соответствовали вашим реальным комнатам в вашей собственности, так как это упростит управление ими. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Как установить цены на номера?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', 'Это зависит от режима редактирования вашего тарифа. Если вы используете режим редактирования обычного тарифа (" Конфигурация свойств "> вкладка" Режимы редактирования тарифов "), то вы можете настроить количество комнат, которые у вас есть, цену, количество человек может вместить каждый номер и общее количество людей, которое вы хотите в каждом бронировании. Этот режим позволяет вам устанавливать цены на номера на следующие 10 лет. <br/> Если вы используете режимы редактирования тарифов Advanced или Micromanage, то вы возможность устанавливать цены на номера на каждый день на долгие годы. Вы также можете установить несколько тарифов для одного и того же типа номера, например, у вас может быть один тариф для ночлега и завтрака, а другой - для ночлега, завтрака и ужина. Если у вас нет особой потребности , мы рекомендуем вам использовать Micromanage все время, Advanced будет работать точно так же, но вам нужно быть осторожным, чтобы даты начала и окончания вашего тарифа совпадали. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Как мне создать дополнительные дополнения?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', 'Дополнительные возможности могут быть добавлены к бронированиям и настраиваются в разделе" Настройки ">" Дополнительно ". Они могут быть необязательными или" принудительными ", другими словами, гость не может отменить их выбор в бронировании. Вы можете предложить различные методы о взимании платы за дополнительные услуги и о том, отображаются ли они на вашей странице сведений об объекте недвижимости. Поскольку дополнительные услуги могут отображаться только в том случае, если бронирование находится в определенные даты (например, для сезонных фруктов), вам следует убедиться, что вы установили даты "Действителен с" и "По". После того, как вы создали дополнительные файлы extas, вы можете загружать изображения для них через Media Manager. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Как я могу принимать платежи в Интернете?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', 'Чтобы принимать платежи в Интернете, вам необходимо иметь учетную запись у поставщика онлайн-платежей, называемого шлюзом. Чтобы просмотреть доступные шлюзы, перейдите на вкладку" Конфигурация свойств ">" Шлюзы ". Нажмите на имя шлюза, чтобы использовать его. на страницу конфигурации. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Могу ли я делать скидки?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Скидки могут быть предоставлены, есть несколько разных способов сделать это. Если вы делаете бронирование от имени клиента, то вы можете установить свои собственные суммы депозита и бронирования в форме бронирования. , используя поля Override Accommodation Total и Override Deposit (гости не могут использовать эту функцию). Другой способ предоставить гостю скидку - создать купоны на скидку, которые можно настроить так, чтобы их можно было использовать только между определенными датами (Действителен от / до) или применяется только тогда, когда бронирование приходится на определенные даты (бронирование действительно с / по). Эти купоны на скидку могут быть назначены только одному гостю, или, если вы хотите, вы можете распечатать купоны. Распечатка включает QR-код какие гости могут сканировать в свои телефоны, чтобы перейти к вашей форме бронирования с уже действующим кодом скидки. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Заказы');
	
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Когда я нажимаю Новое бронирование, я попадаю в контактную форму, почему?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Прежде чем вы сможете делать заказы в Интернете, вы должны сначала настроить некоторые цены (тарифы) для каждого типа комнат, которые есть у вас в реальной собственности. После того, как вы создадите некоторые тарифы, вы сможете принимать заказы . ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Что такое черные книги?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Черные бронирования - это бронирования, которые были созданы, чтобы вывести номер или номера из строя. Они не связаны с гостями и полезны, например, если номер нуждается в ремонте") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Изображения');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Как загрузить изображения?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', 'Чтобы загрузить изображения, вам нужно посетить страницу Настройки> Медиацентр. На этой странице вы увидите несколько панелей. Вверху вы можете увидеть некоторые примечания, а под ними вы увидите раскрывающийся список. В этом раскрывающемся списке можно выбрать ресурс, для которого вы загружаете изображения. <br/> Справа находится столбец с "Добавить изображения", "Очистить список" и "Загрузить все". Нажмите "Добавить изображения" и выберите несколько изображений со своего рабочего стола или мобильного устройства. Когда вы сделали это, столбец изменится на список миниатюр. Отсюда вы можете загрузить одно или несколько изображений для своих ресурсов. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Что такое\" Основное \"изображение?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Основное изображение - это то изображение, которое отображается в результатах поиска и в заголовке вашего ресурса (область вверху страниц, которая показывает что-то о вашей собственности). Вы должны выбрать изображение, которое отображает вашу собственность в наилучшее возможное освещение. Чтобы загрузить основное изображение, убедитесь, что основное изображение свойства выбрано в раскрывающемся списке в левом верхнем углу, затем загрузите одно или несколько изображений. Если вы загрузите более одного изображения, в поиске будут использоваться все изображения. страница результатов отображается в виде небольшого слайд-шоу. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Что такое значки функций комнаты?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Функции комнаты могут быть созданы пользователями в режимах Micromanage или расширенного редактирования тарифов. Они могут быть связаны с одной или несколькими комнатами и отображаются в форме бронирования. Создав функцию комнаты, вы можете загрузите изображение для этой функции, сначала выбрав значки функций комнаты в раскрывающемся списке в Media Center, а затем выбрав имя функции комнаты из раскрывающегося списка, которое появится внизу. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Как загрузить изображения комнат?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Комнаты могут быть созданы пользователями в режимах редактирования тарифов Micromanage или Advanced. После создания одной или нескольких комнат вы можете загрузить несколько изображений для каждой комнаты через Медиацентр (выберите название / номер комнаты после выбирая изображения комнат в раскрывающемся списке). Эти изображения можно увидеть в слайд-шоу, просмотрев страницу предварительного просмотра и выбрав вкладку Наши комнаты, а затем щелкнув ссылку Доступность. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Как загрузить изображения для слайд-шоу?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Изображения слайд-шоу отображаются на странице сведений о свойствах (предварительный просмотр), рядом с кнопкой "Забронировать".');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Как загрузить дополнительные изображения?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Как и в случае с комнатами и функциями комнат, вам нужно сначала создать Extra. Как только это будет сделано, вы можете выбрать Extras в верхнем раскрывающемся списке. Когда вы это сделаете, вам нужно выбрать имя Extra из раскрывающегося списка ниже. Когда имя выбрано, вы можете загрузить одно или несколько изображений для этого Extra. ");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Что-то, связанное с гостями');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Как мне бла-бла-бла-бла?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Ты бла-бла-бла-бла');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Как сохранить описания на нескольких языках?');
	
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', 'Чтобы сохранить описания на нескольких языках, сначала перейдите на страницу" Настройки ">" Сведения о ресурсе ". Сохраните там описание своего ресурса. Затем измените язык, на котором вы просматриваете сайт. Теперь перейдите в" Настройки " Снова откройте страницу "Сведения о ресурсе" и снова сохраните сведения. Итак, если сайт поддерживает и английский, и испанский (или любые другие) языки, выберите английский, введите описание на английском языке и нажмите "Сохранить". Затем измените текущий язык на испанский, затем сохраните новое описание на испанском. Это работает для всех полей на этой странице. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Могу ли я изменить другие свойства на этом сайте?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Нет, вы не можете. Вы можете управлять только теми свойствами, которые вы создали или которым назначили в качестве менеджера собственности.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Могу ли я изменить другие свойства на этом сайте?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Да, вы можете, вы являетесь суперменеджером свойств и можете изменять любые свойства, отображаемые на странице свойств списка.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Какие типы гостей / Как мне изменить на человека за ночь?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', 'На вкладке" Настройки ">" Конфигурация ресурса ">" Тарифы и валюты "вы можете решить, хотите ли вы взимать плату с человека за ночь. Если вы взимаете плату с человека за ночь, вам нужно будет создать один или несколько типов гостей. Вы можете создать простой тип гостя, где вы просто даете ему описание (например, лица), или вы можете создать несколько разных типов гостей, например, "Взрослые" и "Дети до 10 лет". Для детей, если вы хотите предложить скидка 50%, тогда вы должны установить "Процент" на "Да", а значение "Разница" на 50. У номеров есть базовые ставки, этот параметр позволяет вам регулировать цену комнаты в зависимости от типа гостя. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Что такое особенности комнаты?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Особенности комнаты - это то, что выделяет комнату. Это может быть что-то простое, например принадлежности для приготовления чая и кофе, или вещи, которые действительно делают комнату выше других, например\" Виды на bay \". После того, как вы создали компонент комнаты, вы можете загружать изображения для этой функции в Media Center. Эти функции комнаты можно просмотреть на странице доступности комнаты, и если вы настроили свой объект для отображения стиля списка классических комнат (где гости могут выбрать именно тот номер, который они хотят забронировать), затем они могут использовать функции номера для фильтрации номеров, отображаемых в форме бронирования. ");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Платежи');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "После бронирования вы не видите платежный шлюз.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Если вы вошли в систему как менеджер по управлению недвижимостью, вы не увидите платежный шлюз, потому что вы не платите сами. Только пользователи, не являющиеся менеджерами, будут видеть шлюз при бронировании.");
