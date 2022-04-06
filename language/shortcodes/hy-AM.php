<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Սա սեփականության cpanel- ի հիմնական էջն է:');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Սա գույքի ժապավենային գծապատկեր է, որը տալիս է իրական ժամանակի ամրագրումների, առկայության և զբաղվածության ակնարկ մի հայացքով:');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Այս սկրիպտը թույլ է տալիս օգտագործողին համեմատել մի քանի հատկություններ միմյանց դեմ `առավելագույնը 3 հատկություն:');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Գույքի uids- ի ստորակետով առանձնացված ցուցակ, օրինակ `12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Կառուցում է կոնտակտի սեփականատիրոջ ձևը:');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Անցեք սեփականության uid- ի հետ, որի հետ պետք է կապ հաստատել: Փոխարենը 0 (զրո) փոխանցեք կայքի ադմինիստրատորին:');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "theույց է տալիս Ընկերության տեղեկատվական էջը` սեփականության կառավարչի Ձեր ընկերության մանրամասների դաշտից մանրամասներ հանելով Գույքի կազմաձևման մեջ: Այս ներդիրի մանրամասները սովորաբար կօգտագործվեն նամակագրության համար `թույլ տալով ղեկավարներին ունենալ թե՛ հյուրանոցի/բնակարանի հասցեն, և առանձին հասցե ՝ բիզնես նպատակների համար ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "owsույց է տալիս գույքի օրացույցը");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Անցնել ցուցադրվող գույքի uid- ը:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'toուցադրման ամիսներ, կանխադրվածը 24 -ն է, եթե այլ կերպ սահմանված չէ: Անհամատեղելի է Show Just Month փոփոխականի հետ:');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'owsույց է տալիս միայն սեփականության նկարագրության տեքստը:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'justույց է տալիս միայն սեփականության նկարագրության տեքստը:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'justույց է տալիս միայն սեփականության հնարավորությունները:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'owsույց է տալիս միայն սեփականության վերնագրի կաղապարը:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'սեփականության ID)');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'justույց է տալիս միայն սեփականության սենյակի տեսակները:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'սեփականության ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'owsույց է տալիս միայն սեփականության հիմնական պատկերը:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'justույց է տալիս միայն սեփականության քարտեզը');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'propertyույց է տալիս հատկությունը Լրացուցիչ տեղեկությունների տեքստ:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'Qm կոդ, որը կապում է gmaps- ին: Սա կարող է սկանավորվել հեռախոսի մեջ `օգտագործելով qr կոդի ընթերցման հավելվածը, որը տրամադրում է գույքի ուղղությունը:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'սեփականության ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "aույց է տալիս սեփականության ակնարկները");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "aույց է տալիս սեփականության վերանայման ամփոփագիրը");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'սեփականության ID.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'owsույց է տալիս առանձին սենյակ:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'սենյակի ID- ն');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "aույց է տալիս սեփականության սենյակները");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "propertyույց է տալիս սեփականության սենյակի պատկերները որպես սլայդ շոու");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'owsույց է տալիս սեփականության սահիկահանդեսը:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'owsույց է տալիս գույքի սակագները:');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Shույց է տալիս կայքի բիզնեսի հասցեն, ինչպես մուտքագրված է Կայքի կազմաձևում> Ձեր ընկերության տվյալները");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Shույց է տալիս սեփականության պայմաններն ու պայմանները');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'սեփականության ID');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Shույց է տալիս գույքի UI օրացույցը, որը տարբերվում է հիմնական մեծ օրացույցից և հիմնված է Jquery UI օրացույցի գործառույթի վրա");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Անցնել ցուցադրվող գույքի uid- ը:');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Նշեք 1 -ը `լեգենդը չցուցադրելու համար:');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "owsույց է տալիս որոնման արդյունքները, որոնք կարող են բարելավվել` ավելացնելով որոնման պարամետրերը: Մենք խորհուրդ չենք տալիս միաժամանակ օգտագործել բոլոր պարամետրերը, քանի որ վերջում կգտնեք չափազանց սահմանափակ որոնման չափանիշներ: Փոխարենը պետք է սահմանափակվեք միայն մեկ կամ երկու պարամետրով, օրինակ ՝ որոնել ըստ երկրի և աստղերի քանակի ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Որոնել ըստ երկրների ՝ օգտագործելով ISO Alpha-2 ծածկագիրը, օրինակ ՝ GB կամ DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Որոնել ըստ տարածաշրջանների: Քանի որ տարածաշրջանները պահվում են տվյալների բազայում, դուք պետք է օգտագործեք տարածաշրջանի ID- ն: Այցելեք ադմինիստրատոր> Jomres> Կայքի կառուցվածք> regionsանկեք շրջանները և սավառեք խմբագրման հղումը, այնտեղ կտեսնեք տարածաշրջանի ID համարը . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Այն քաղաքի ամբողջական անունը, որը ցանկանում եք որոնել:');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Առանձնահատկություններ ունեցող հատկությունների որոնում: Առանձնահատկությունների ID- ները կարելի է գտնել Administrator> Jomres> Site Structure> Property Features:');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Սենյակների որոշակի տեսակների հետ հատկությունների որոնում: Սենյակի տիպի ID- ն կարելի է գտնել Administrator> Jomres> Site Structure> Room types.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Որոնել որոշակի գույքի տիպի հատկություններ: Գույքի տիպի ID- ն կարելի է գտնել Administrator> Jomres> Site Structure> Properties types.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Որակի որոնում որոշակի գների միջակայքում:');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Գույքի որոնում, որի սակագները թույլ են տալիս որոշակի արժեքների հյուրերի համարներ, օրինակ` 6 հոգի ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'N աստղերի հատկությունների որոնում:');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Որոնել ըստ ժամանման ամսաթվի: Պետք է համակցված լինի մեկնելու ամսաթվի պարամետրով:');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Որոնել ըստ մեկնման ամսաթվի: Պետք է համակցված լինի ժամանման ամսաթվի հետ:');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Որոնել ըստ գույքի կատեգորիայի:');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Դիտեք գործակալի էջը: Եթե դա գիտեք, կարող եք փոխանցել ԿԱ aՈ propertyԹՅԱՆ uid- ը, կամ գործակալի ID- ն:");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Սեփականության uid, սա ցույց կտա գույքի գործակալը");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Կառավարչի տվյալների բազայի ID, եթե հայտնի է");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'ysուցադրում է հանրաճանաչ հատկությունները, որոնք սովորաբար օգտագործվում են մոդուլի կամ վիջեթի դիրքերում:');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Առավելագույն թվով հատկություններ, որոնք կարող են ցուցադրվել:');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Showույց տալ միայն այս հատուկ հատկությունների տիպերը:');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Սահմանել 1 -ի ՝ ուղղահայաց վիջեթ/մոդուլի դիրքի համար օպտիմիզացված մոդուլները ցուցադրելու համար:');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Disուցադրում է հատկությունների պատահական ընտրություն, որոնք սովորաբար օգտագործվում են մոդուլի կամ վիջեթի դիրքերում:');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Առավելագույն թվով հատկություններ, որոնք կարող են ցուցադրվել:');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Showույց տալ միայն այս հատուկ հատկությունների տիպերը:');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Սահմանել 1 -ի ՝ ուղղահայաց վիջեթ/մոդուլի դիրքի համար օպտիմիզացված մոդուլները ցուցադրելու համար:');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "ysուցադրում է հյուրի վերջին դիտած հատկությունները, որոնք սովորաբար օգտագործվում են մոդուլի կամ վիջեթի դիրքերում");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Առավելագույն թվով հատկություններ, որոնք կարող են ցուցադրվել:');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Սահմանել 1 -ի ՝ ուղղահայաց վիջեթի/մոդուլի դիրքի համար օպտիմիզացված մոդուլները ցուցադրելու համար:');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'plaուցադրում է մի շարք հատկություններ, որոնք սովորաբար օգտագործվում են մոդուլի կամ վիջեթի դիրքերում:');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Այն հատկությունների սեփականության ID- ները, որոնք ցանկանում եք ցուցադրել:');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Սահմանել 1 -ի ՝ ուղղահայաց վիջեթի/մոդուլի դիրքի համար օպտիմիզացված մոդուլները ցուցադրելու համար:');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'ysուցադրում է արժույթի ընտրության բացվող պատուհանը:');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Միացնել/անջատել այլընտրանքային ձևանմուշի ելքը: Այս ելքը նախատեսված է Bootstrap գործիքագոտիներում օգտագործելու համար:');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Disուցադրում է զամբյուղի էջը:');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Disուցադրում է pingամբյուղի մոդուլը/վիջեթը:');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Disուցադրում է հիմնական ընտրացանկը: Նկատի ունեցեք, եթե դուք օգտագործում եք mainmenu_wrapper_alternate.html օրինակ/templates/jr_leohtian/html/com_jomres ապա անհրաժեշտ է փոխարինել /i> MENU_LOCATION- ով ՝ փաթաթված գանգուր ամրակներով: ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Այս էջը թույլ է տալիս վերբեռնել պատկերներ ձեր սեփականության և ձեր առաջարկած իրերի համար: Այն ունի մեկ հիմնական կոճակ և երկրորդ կոճակ, որը թույլ է տալիս ընտրել պատկերներ վերբեռնելու հատուկ ռեսուրսներ: Այսպիսով, հիմնական հատկությունը պատկերը և Սլայդ շոուն կցուցադրեն միայն մեկ կոճակ, բայց եթե դուք ստեղծել եք որևէ օրինակ ՝ Լրացուցիչ հավելումներ կամ սենյակներ, ապա կտեսնեք երկրորդ կոճակը, որտեղ կարող եք պատկերներ վերբեռնել այդ հատուկ ռեսուրսների համար: ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Այս էջը թույլ է տալիս վերբեռնել պատկերներ ձեր սեփականության և ձեր առաջարկած իրերի համար: Այն ունի մեկ հիմնական կոճակ, իսկ երկրորդ կոճակ, որը թույլ է տալիս ընտրել հատուկ ռեսուրսներ `նկարներ վերբեռնելու համար: Այսպիսով, հիմնական հատկությունը պատկերը և Սլայդ շոուն ցույց կտան միայն մեկ կոճակ, բայց եթե դուք ստեղծել եք որևէ լրացուցիչ ծրագիր, ապա կտեսնեք երկրորդ կոճակը, որտեղ կարող եք պատկերներ վերբեռնել այդ հատուկ ռեսուրսների համար: ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Նախ ընտրեք այն պատկերը, որը ցանկանում եք վերբեռնել ՝ կտտացնելով Ավելացնել պատկեր կամ օգտագործել Քաշել և թողնել: Դրանք կհայտնվեն աջ կողմում գտնվող սյունակում: </li>
  <li> Այս տարածքի վերևում օգտագործեք \"Ընտրեք ռեսուրս \" կոճակը `ընտրելու համար, թե որ ռեսուրսի համար եք ցանկանում պատկերներ վերբեռնել: Ձեզ կարող է առաջարկվել ընտրել որոշակի ռեսուրս ներքևում: </li>
  <li> Երբ ընտրեք ռեսուրս, կարող եք կտտացնել նկարի տակ գտնվող \"Վերբեռնել պատկեր\" կոճակին ՝ այն այդ ռեսուրսի հետ կապելու համար: Պատկերը վերբեռնելուց հետո այն կվերանա աջ կայքի սյունակից և կհայտնվի ձախում: </li>
  <li> Օգտագործեք աղբարկղի կոճակը ՝ գոյություն ունեցող պատկերների կողքին ՝ հեռացնելու այն պատկերները, որոնք այլևս չեք ցանկանում ցուցադրվել: </li>
  <li> Դուք կարող եք փոխել ֆայլերի ցուցադրման կարգը սլայդ շոուում ՝ դրանք վերբեռնելուց առաջ դրանք վերբեռնելուց, քանի որ դրանք ցուցադրվում են էջերում այբբենական կարգով: </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Ռեսուրսի կոճակի կողքին, կարող ես տեսնել Նախադիտման կոճակը: Եթե սեղմես դրա վրա, կտեսնես մի թռուցիկ, որը ցույց է տալիս, թե ինչ տեսք կունենան ներկայումս բեռնված պատկերները էջում: Սա օգնում է ձեզ գաղափար, թե ինչ տեսք կունենան պատկերները ձեր հաճախորդներին ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Չկա սահմանափակում, որը կարող եք վերբեռնել: Պատկերների ինքնաբերաբար չափափոխումը տեղի է ունենում: Երբ կարող եք վերբեռնել միայն JPG և PNG ֆայլեր");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Իդեալում, ցանկացած վերբեռնված պատկեր գոնե կլիներ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "պիքսել լայնությամբ, հակառակ դեպքում դրանք վերբեռնելուց հետո կարող են անորոշ թվալ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Ձեր վերբեռնած ցանկացած պատկեր չի կարող լինել ավելին");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "չափի մեջ");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Ընտրեք այն ռեսուրսը, որի համար ցանկանում եք նկարներ վերբեռնել");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Հատուկ ռեսուրս");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Այս ռեսուրսի համար արդեն բեռնված պատկերներ");
    
jr_define ('_JOMRES_MARKDOWN_TITLE', 'Տեքստի ձևավորում');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Այստեղ կարող եք մուտքագրել տեքստ ՝ օգտագործելով Markdown- ի պարզ ձևաչափումը: Անհրաժեշտ չէ որևէ HTML իմանալ, պարզապես օգտագործել կոճակները ՝ տեղեկատվությունը ձեր ուզածի տեսքով կամ տեքստը ձևակերպել ըստ այս օրինակների:' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Ընդգծում');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'համարձակ');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'շեղագիր');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Վերնագրեր");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Մեծ գլխագիր');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Միջին վերնագիր");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Փոքր գլխագիր');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Փոքրիկ վերնագիր');
jr_define ('_JOMRES_MARKDOWN_LISTS', "istsուցակներ");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Ընդհանուր ցուցակի տարր');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'listանկի համարակալված տարր');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Հղումներ');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Տեքստ ցուցադրման համար');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Մեջբերումներ');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Սա մեջբերում է');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Այն կարող է ընդգրկել մի քանի տող!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Պատկերներ');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Աղյուսակներ');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Սյունակ');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'propertyուցադրել գույքի պատկերները որպես սլայդ շոու գույքի ցուցակում?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Եթե այո է սահմանվել, սեփականության հիմնական պատկերների սլայդ շոուն կցուցադրվի: Եթե ոչ, ապա կցուցադրվի առաջին հատկության հիմնական պատկերը:');

jr_define ('EDIT_CMS_USER', 'Խմբագրել CMS օգտվողին');

jr_define ('BOOKING_MADE_BY', 'Booking made by');

jr_define ('_JOMRES_ROUTER_FEATURES', 'Հարմարություններ');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Սենյակի տեսակները');

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Արտաքին ամրագրման ձևի URL');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Այստեղ կարող եք սահմանել արտաքին URL, եթե ցանկանում եք երրորդ կողմի կայք օգտագործել ամրագրումների համար: Jomres- ի ամրագրման բոլոր կոճակները ցույց կտան այս URL- ը: Թողեք այս դաշտը դատարկ, եթե ցանկանում եք օգտագործել Jomres- ի ամրագրման ձևը . ');

jr_define ('_JOMRES_ROOM_TAGLINE', 'Պիտակը (սենյակի կարճ նկարագրություն/ենթավերնագիր)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Սենյակի նկարագրություն');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Հյուրերի սև ցուցակում');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Եթե այս հյուրը սեւ ցուցակում է, ապա նրանք այլևս չեն կարողանա ամրագրումներ կատարել այս սեփականության մեջ:');
jr_define ('_JOMRES_SESSION_HANDLER', 'Նիստերի վարիչ');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Պահել jomres նիստի ֆայլերը սկավառակի կամ տվյալների բազայի մեջ: Առաջարկվում է `տվյալների բազա');
jr_define ('_JOMRES_MAP_HEIGHT', "Քարտեզի բարձրությունը (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Քարտեզի խոշորացման մակարդակ");
jr_define ('_JOMRES_MAP_MAPTYPE', "Քարտեզի տեսակը");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Կաղապարի անտեսման կառավարիչ");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Կաղապարային փաթեթները հավելումներ են, որոնք կարող են ապահովել տարբեր հիմնական Jomres ձևանմուշների ձևանմուշների փոխարինում");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Այս էջում ներկայացված են բոլոր ձևանմուշների ֆայլերը, որոնք կարող են անտեսվել կաղապարի փաթեթի ձևանմուշների կողմից: Եթե ցանկանում եք անտեսել որոշակի ձևանմուշ, կտտացրեք այդ ֆայլի խմբագրման կոճակին, իսկ հաջորդ էջում կլինեք կարող եք ընտրել, թե որ տարբերակի հետ եք ցանկանում անտեսել: Նկատի ունեցեք, որ այս անտեսումները գերակայություն ունեն ինչպես Jomres Core- ի, այնպես էլ Wordpress- ի կամ Joomla- ի ցանկացած թեմայի/ձևանմուշի նկատմամբ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Կաղապարի անուն");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Ընթացիկ ուղի");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Չափազանցված չէ");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Դուք կարող եք ընտրել, թե որ ձևանմուշի ֆայլը կփոխարինի հիմնական ձևանմուշի ֆայլերը` բացվող ընտրացանկը փոխելով ");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Տոմսերի տոկոսը ամրագրված են");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Disուցադրում է սեփականության նոր ձևի ձևը:');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Քարտեզի խոշորացում, 1. Աշխարհ 5. mամաք/մայրցամաք 10. Քաղաք 15. Փողոցներ 20. Շենքեր');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'reviewsուցադրվող ակնարկների քանակը');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'plaուցադրում է օգտվողների կարճ ցուցակում նշված հատկությունները: Եթե օգտվողը գրանցված է, դրանք իրենց նախընտրածներն են, եթե մուտք չեք գործել, ապա այցելության ընթացքում Սիրված պատկերակի միջոցով ավելացված միայն այն իրերը:');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Ավանդի նվազագույն արժեքը');
    
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Եթե հաշվարկված ավանդը փոքր է այս ցուցանիշից, ապա փոխարենը դրեք ավանդ այս արժեքին: Այս ցուցանիշն ինքնին կարող է գերագնահատվել, եթե չի բավարարում կայքի նվազագույն ավանդի կարգավորումը: Թողնել 0 մի օգտագործեք կարգավորումը ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'owsույց է տալիս GDPR- ին համապատասխանող համաձայնության ձևը:');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Սեփականության սենյակի տեսակների ցուցակ');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Showույց տալ սեփականության սենյակի տեսակը');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Showույց տալ մուտքի ձևը');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Showուցադրել սենյակի որոշակի տեսակի սենյակների ցուցակ');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Սենյակի տիպի ID');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'owsույց է տալիս համակցված հատկությունների ցանկ');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Միաժամանակ ցուցադրվող հատկությունների թիվը');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Whetherույց տալ MRP- ները (հյուրանոցներ/մահճակալներ և նախաճաշեր), թե SRP- ները (քոթեջներ/բնակարաններ/առանձնատներ): Լռելյայն որոշվում է ընթացիկ սեփականությունից, եթե ցուցադրված է: Որոշակի տեսակ ընտրելու համար այս արժեքը սահմանեք srps- ի համար 0, կամ mrps- ի համար ');

