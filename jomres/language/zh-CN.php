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
define('_JOMRES_COM_MR_MRARRIVEDESC','显示今日抵达');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRDEPARTDESC','显示今日离店');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MRBOOKENQSDESC','显示预订需求');
/**
* @ignore
*/
define('_JOMRES_COM_MR_MROTHERENQSDESC','显示其他需求');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRESDESC','快速预订');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTLIVEBOOKINGS','显示当期预订');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SHOWPROFILES','显示资料');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_DESC','语言');
/**
* @ignore
*/
define('_JOMRES_COM_MR_GENERALCONFIGDESC','综合设置');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISCOUNTDESC','折扣设置');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMSCONFIGDESC','房间设置');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYCONFIGDESC','寓所设置');
/**
* @ignore
*/
define('_JOMRES_COM_MR_RATESCONFIGDESC','费率设置');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK','返回');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BACK_LIVEBOOKINGS','返回至旅客预订列表');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIG','设置');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LOADSAMPLEDESC','上传样本数据');

/**
* @ignore
*/
define('_JOMRES_COM_MR_YES','是');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NO','否');

/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWTARIFF','新');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOM','新房间');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMFEATURE','新房间特点');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWROOMCLASS','新房间类型');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTY','新寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','新寓所特点');
/**
* @ignore
*/
define('_JOMRES_COM_MR_NEWGUEST','新旅客');
/**
* @ignore
*/
define('_JOMRES_COM_MR_SAVE','保存');

// View bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','姓名');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','入住');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','离店');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','特定用户管理功能');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','姓名');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','用户名');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','当前指定');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','默认寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','修改此处');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','权限');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','用户已修改');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','不适用');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL','修改寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESSLEVEL','修改权限');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','前台接待');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','寓所经理');

// Edit bookings
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','所有预订');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','新预订');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','编辑预订');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','入住/离店');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','旅客');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','房间');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','付款');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','名');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','姓');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ARRIVALBUTTON_EXPL','旅客今日抵达. 如果他们已入住请点选此按钮');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGNOTES','备注');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','特别要求');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','请注意一些特别要求可能会带来一些额外费用.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGADULTS','成人');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGCHILDREN','儿童');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','取消预订');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_USER_EXPL','本站会员ID');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','门牌号');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','街道');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','市/县');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','邮编');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','地址');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','电话');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_FAX_EXPL','传真');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','电邮');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_PREFERENCES_EXPL','预设');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CAR_REGNO_EXPL','车牌号');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CUSTOMERCANCELLED','旅客已取消');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_HOTELCANCELLED','酒店已取消');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_BUTTON','选择取消原因');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DIFFERENCE','天于抵达前');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REASON_CHARGES_DUE','<b>取消收费预订</b>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','无法取消此预订,因为旅客已入住');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITPAID','订金已支付, 到期无需付款');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_GREATERTHAN_30_DAYS_DEPOSITNOTPAID','订金未支付, 到期需付订金');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITPAID','订金已支付, 到期应付50%总报价');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_30_DAYS_DEPOSITNOTPAID','订金未支付, 到期应付50%总报价');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITPAID','订金已支付, 到期应付100%总报价');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_LESSTHAN_15_DAYS_DEPOSITNOTPAID','订金未支付, 到期应付100%总报价');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_REMAINDERDUE','到期提醒');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','订金未支付');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','确认取消');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','预订取消');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','天后即可抵达');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','预订类型');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','私人');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','前台');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','网络');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NAME','房名');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','房号');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','楼层');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','可供残疾人?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','最多容纳人数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','房间类型简陈');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','房间类型描述');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','房间特点列表');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY','&英镑;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CURRENCY_ALT','£');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_RULES','费率规定');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','订金支付');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','输入订金');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','合计支付');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','订金参考');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_PAYMENT_REF','支付参考');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','预订');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','订金');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','订金保留');

// Edit Language
/**
* @ignore
*/
define('_JOMRES_COM_MR_LANG_CHMODWARNING','<center><h1><font color=red>警告...</FONT></h1><BR><B>您应该将语言文件权限属性设置成766这样便于文件升级</B></center><BR><BR>');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_TITLE','快速预订-选择房间类型');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHECKBOX','复选框');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERADULTS','成人数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBERCHILDREN','儿童数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_COTREQUIRED','需要厨房?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_ALTERNATIVELY','两者选一');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_DAYSDATE_DESC','选择旅客旅居夜晚数,或者旅客离店日期');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_NUMBEROFDAYS','夜晚数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_INSTRUCTIONS','需要您选择房间类型, 旅客抵达日期和旅客旅居夜晚数或者旅客离店日期. 最后, 输入可能有的成人数和儿童数目.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','我们的房间');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_RADIO','&nbsp;');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNAME','房名');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMNUMBER','房号');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMFLOOR','楼层');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_DISABLEDACCESS','可供残疾人?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_MAXPEOPLE','最多容纳人数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_FEATURES','详细资料');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','房间类型');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_TOOMANYGUESTS','抱歉, 我们的房间数目满足不了这么多旅客');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="3">抱歉,寓所在此期间不能提供旅居服务. 请返回日历表重新查看.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERS','请从下拉菜单中选择');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTGUEST','选择此旅客');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTDESCRIPTION','描述');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_SELECTCUSTOMERLISTTITLE','旅客列表');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_STAYDAYSTOOLOW','<font color="red" face="arial" size="4">错误: 在您选择日期中有错误.<br>请按返回键并重新输入日期.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOGUESTS','<font color="red" face="arial" size="4">错误: 您至少需要为一个旅客进行预订.<br>请按返回键并重新输入.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_ARRIVALDATENOTSELECTED','<font color="red" face="arial" size="4">错误: 日期范围选择不正确.<br>请按返回键并重新输入日期范围.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_NOROOMTYPESSELECTED','<font color="red" face="arial" size="4">错误: 您还没有选择房间类型.<br>请按返回键并重新选择.</font>');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ERROR_POSTDATED','<font color="red" face="arial" size="4">错误: 预订日期已过或者是今日.<br>请按返回键并重新选择.</font>');

// Display guest form

/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_ENTERDETAILS','输入旅客详细资料');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CHECKDETAILS','确认旅客详细资料');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','修改旅客详细资料');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','名');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','姓');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','门牌号');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_STREET','街道');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_TOWN','市/县');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','邮编');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','地址');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','手机');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_FAX','传真');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_EMAIL','电邮');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CARREGNO','车牌号');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','信用卡号.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','信用卡发行日期');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','信用卡失效日期');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','卡背最后3-4位数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','信用卡持有人姓名');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','请选择');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_RADIO','选择');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFF','价目表');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TARIFFDESC','价目表描述');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINDAYS','最少入住天数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXDAYS','最多入住天数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MINPEOPLE','最少人数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_MAXPEOPLE','最多人数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','旅居天数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_ROOMRATEPERDAY','每日费率');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','旅客数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','合计');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_DEPOSITDESC','订金');


/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_FALLSONPUBLICHOLIDAY','选择旅居期间中有公共假期.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_NOTARIFFS','抱歉, 没有发现符合预订特殊要求的价目表. 请别失望, 或许我们应该根据您的特殊要求稍做调整. 请重新尝试, 修改一下你想旅居的天数, 或者直接通过打电话给我们商量预订事宜.');

// Rooms tab

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','查看房间和寓所设置');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','房间');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','房间特点');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','房间类型');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','寓所类型');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','房间');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','类型');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_PROPERTY','寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_CLASS','类型');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','房名');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','房号');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','楼层');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','可供残疾人?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','最多容纳人数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','特点');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','房间已新增');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE','房间已更新');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_CLICKTOEDIT','点选房号链接以编辑明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','编辑明细');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','房间特点');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','特点描述');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_CLICKTOEDIT','点选房间特点链接以编辑明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','房间特点已增加');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','房间特点已更新');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_LINKTEXT','编辑明细');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','房间类型');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','房间类型缩写');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','房间类型描述');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_CLICKTOEDIT','点选房间类型链接以编辑明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','房间类型已增加');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','房间类型已更新');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','编辑明细');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_LINK','寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','名称');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','街道');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','市/县');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','省/直辖市');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','国家');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','邮编');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','电话');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','传真');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','电邮');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','网址');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','特点');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_CLICKTOEDIT','点选寓所号链接以编辑明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','寓所已增加');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','寓所已更新');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_LINKTEXT','编辑明细');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','寓所特点');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','寓所特点缩写.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','寓所特点描述');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_CLICKTOEDIT','点选寓所特点号链接以编辑明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','寓所特点已增加');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','寓所特点已更新');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_LINKTEXT','编辑明细');

/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','价目表');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','价目表标题');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','描述');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','有效自');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','有效至');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','每晚费用');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','最少天数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','最多天数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','最少人数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','最多人数');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','房间类型');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','忽略每人每晚');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWPH','公众假期照常营业');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','周末照常营业');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_CLICKTOEDIT','点选文本链接以编辑价目表明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','价目表已增加');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','价目表已更新');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','编辑明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','复制明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETETARIFF','删除价目表');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','价目表已删除');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','编辑价目表');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','公众假期');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_HELP','如果您希望按照公众假期费率收款,那么假期的最后一天也应是旅客旅居的最后一天.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE_EDIT','编辑公共假期');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DESCRIPTION','描述');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_START','开始');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_END','结束');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_NEWPH','新公众假期');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_CLICKTOEDIT','点选文本链接以编辑公众假期明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_INSERT','公众假期已增加');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_SAVE_UPDATED','公众假期已更新');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXT','编辑明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_LINKTEXTCLONE','复制明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETEPUBLICHOLIDAY','删除公众假期');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PUBLICHOLIDAY_DELETED','公众假期已删除');

/**
* @ignore
*/
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','预订已保存');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_JAVASCRIPTWARNING','请确保表格填写正确.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED1','在线预订功能仅向本站登陆会员开放');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_NOTREGISTERED2','请注册');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OFFLINE_MESSAGE','离线预订');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYDETAILS','我的资料');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_MYBOOKINGS','我的预订');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMINISTER','管理员');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAROOM','预订一个房间');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','预订一个旅客入住');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','预订一个旅客离店');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','列表预订信息');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','新预订');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','管理面板');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','旅客管理');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','寓所管理');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_TARIFFADMIN','价目表管理');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_DISCOUNT','折扣管理');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_PUBLICHOLIDAYS','公共假期管理');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_INSTRUCTIONS','提示－需要您输入房间类型, 您的抵达日期和您旅居的天数.最后，请输入可能有的成人数和儿童数目.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS1','请输入您的资料. 您只需操作一次, 系统可保存以方便今后重复使用.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_INSTRUCTIONS2','请选择您想要的房间.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP3_INSTRUCTIONS2','请输入您的资料. 除了您的手机号码以外其他资料都要填写.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','检查房间是否可用');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEROOM','我想要这个房间');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSEGUEST','选择旅客');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','确认您的资料');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHOOSETARIFF','选择我的价目组合');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP1_TITLE','选择房间类型');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','名');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','姓');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','门牌号.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','街道');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','市/县');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','邮编');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','地址');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','手机');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_FAX_EXPL','传真');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="4">没有房间满足这个特定需求</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_ENTERDETAILS','输入您的资料');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_CHECKDETAILS','确认您的资料');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>谢谢您的预订,我们希望您在本店旅居愉快.<br><br> <b>请注意这只是预订的第一步,当您收到我们的确认函件以后该预订方可成为正式预订.</center>');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','预订寓所: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','预订房间: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ADULTS','成人数: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_CHILDREN','儿童数: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','入住: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','离店: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NUMBEROFNIGHTS','旅居夜晚数: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_GUESTUID','旅客编号: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','名称: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','地址: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','手机: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TARIFFUID','价目表: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','服务价格: ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPOSIT','订金预付: ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSNOTSTORED','抱歉,我们需要您更新您的资料方可进行预订服务.请点选链接"我的资料" 完成你所在地址的填写. 谢谢.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CUSTOMERDETAILSSAVED','谢谢, 您的资料已保存.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_STRANGER','欢迎您,尊敬的旅客. 请先点击"我的资料"链接来更新你的资料,然后方可进行预订.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_WELCOME_FRIEND','欢迎您 ');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','预订入住的旅客 ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','选择旅客 ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','旅客已入住 ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','没有旅客今日入住');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','预订离店的旅客 ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT','旅客已离店 ');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT_BUTTON','确认旅客离店');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','今日无旅客离店');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSARRIVE','旅客今日入住');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_GUESTSDEPART','旅客今日离店');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_ROOMSOCCUPIED','已订房间');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NEWBOOKINGS','新预订');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_STATUS_NAVIGATETODATE','查看房间使用自:');

// Config panel
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS','其他');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS','价目和货币单位');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS','折扣');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATION','有关取消的规定.  没有实施');
/**
* @ignore
*/
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','上传文件');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENT_SETTINGS','当前设定');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXPLANATION','解释');

/**
* @ignore
*/
define('_JOMRES_COM_A_SB_BY','Copyright lenian99 2008');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE','离线预订?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGS_OFFLINE_DESC','如果您不想在线预订就选择离线预订吧-通过电话等方式.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE','折扣方案可用?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_AVAILABLE_DESC','折扣方案用于团队预订. 因为该方案用于团队预订, 所以计价不推荐使用基于每人每晚的方式.');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1','标准1的起点');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2','标准2的起点');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3','标准3的起点');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4','标准4的起点');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL1_VALUE','标准1的折扣价');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL2_VALUE','标准2的折扣价');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL3_VALUE','标准3的折扣价');
/**
* @ignore
*/
define('_JOMRES_COM_A_DISCOUNTS_LEVEL4_VALUE','标准4的折扣价');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','单人设施');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','如果您想针对单人设施收费请确保此处设定为是');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','单人设施费用');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT','厨房设施.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_DESC','如果您想针对厨房设施收费请确保此处设定为是');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_COT_COST','厨房设施收费');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','订金使用百分率显示?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','订金支付是否采用总服务价格的百分率显示? 如果不是,订金支付应该标明为实际数额');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_VALUE','订金数额');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER','每人,每晚');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_PER_DESC','如果您想按照每人每晚收费,请设定此处为是. 如果不是,那么收费将按照每房间每晚计价');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY','订金是否可退?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCELLATIONPOLICY_DESC','如果您希望旅客在取消预订后将订金用于下次预订,请设定此处为是. ');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILEEXISTS','文件存在');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES','文件类型');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILETYPES_DESC','此处需表明什么类型的文件可以上传. 英文逗号隔开,并保证间隔无空格. 例如: zip,txt,exe,htm,html');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE','文件大小');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','最大图片尺寸 in Kb');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKFORWEEKROOMSUSAGE','点选起始于今日的为期为一周的房间使用');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CLICKONROOMFORBOOKINGINFO','点选一个已经预订的房间来查看预订情况');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_OR','或者选择您感兴趣的日期');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKED','已订');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FREE','可用');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_TAPEVIEWKEY','<br>带有蓝色背景的房间为已被预订, 但是<br> 如果房间带有红色内容,表明该房间订金未付.<br> 如果房间 "已预订"旁边带有一颗星,表明旅客预计在当日抵达.<br> 如果房间带有黄色内容, 表明旅客正在使用此房间.');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_TITLE','确认信函');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_DEAR','尊敬的 ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','收费为每晚 - 每房间 ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','预订资料');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','谢谢您使用预订功能 在');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. 下面是您的预订资料. 请确认是否属实,如果发现有误请及时联系我们.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','在您抵达以前您的房间将被保留, 入住时间为下午 2 点以后.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','我们期盼和您见面于 ');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','我们希望您在我们这里旅居愉快.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','当前我们希望您能关注下面内容.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','您确认该预订将成为正式的法律合同, 如果您有任何取消预订或者缩短旅居时间的行为发生,您仍然将按照该合同支付全额旅居费用.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','旅居期间本店不提供免费餐饮服务. 因此我们建议您使用我们的厨房设施.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>有关取消预订和缩短旅居天数的收费</i> 如果您想取消预订,您必须提供书面文本申请. 关于取消预订服务的收费如下:');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 天或更多');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' 只收取订金.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 至 30 天');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50%的总服务报价.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','至抵达日14天之内');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100%的总服务报价.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','17.5% 增值税已经包含在所有价格里面. 任何新增或者调整将被重新计费.');
/**
* @ignore
*/
define('_JOMRES_COM_CONFIRMATION_PRINT','打印确认信函');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_TITLE','打印发票');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_DEAR','发票');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_RATE_RULES','费用 每晚-每房间 ');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_STAYNIGHTS','夜晚数:');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','双方就此合同内容同意如下:');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','每晚收费:');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','合计收费');

/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_DETAILS','发票明细');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','谢谢您的使用');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','我们期望和您共渡愉快时光.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_LETTER_VAT','17.5% 增值税已经包含在所有价格里面. 任何新增或者调整将被重新计费.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_PRINT','打印发票');

/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TITLE','增加服务至帐单');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','服务描述');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_VALUE','服务价格');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BUTTON','增加至帐单');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','其他收费明细');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','其他收费明细,总费用合计:');
/**
* @ignore
*/
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','明细增加至');
/**
* @ignore
*/
define('_JOMRES_COM_DEFAULTHOTELNOTFOUND','<h1><font color=red>未发现默认酒店</h1><br>不可继续. 联系您的站点管理员.</font>');


/**
* @ignore
*/
define('_JOMRES_UPLOAD_ATTACH_IMAGE','选择图片作为附加文件');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_IMAGE','上传图片');
/**
* @ignore
*/
define('_JOMRES_UPLOAD_UPLOAD','上传');

/**
* @ignore
*/
define('_JOMRES_FILE_UPLOAD','文件已上传');
/**
* @ignore
*/
define('_JOMRES_FILE_TYPES','您的文件可以采用的类型-最大尺寸');
/**
* @ignore
*/
define('_JOMRES_FILE_SUBMIT','提交一份新文件以上传');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_TYPE','您可以上传的文件类型:\n');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EMPTY','上传前请先选择文件');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_NAME','文件名称需为英文字母且字母间没有空格.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_SIZE','文件尺寸大小超标.');
/**
* @ignore
*/
define('_JOMRES_FILE_ERROR_EXISTS','含有该名称的文件已存在. 请使用另外一个文件名.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPLOADED','您的文件已上传.');
/**
* @ignore
*/
define('_JOMRES_FILE_NOT_UPLOADED','文件未上传.');
/**
* @ignore
*/
define('_JOMRES_FILE_UPDATED','您的文件已上传.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN','需要将此寓所加入至jomres网络?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_OPTIN_DESC','如果您将此寓所加入至jomres网络,那么它将在jomres网站显示. 请注意,你提交的资料必须真实有效. ');


/**
* @ignore
*/
define('_JOMRES_COM_A_JSCALENDAR','日历表');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE','日历表语言文件');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','选择可以用于Javascript日历表的语言文件. 请留意部分日历文件可能有小毛病, See http://sourceforge.net/tracker/?group_id=75569&atid=544287 for more information');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS','日历表CSS文件');
/**
* @ignore
*/
define('_JOMRES_COM_A_CALENDARCSS_DESC','选择CSS文件,将被用于Javascript日历');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS','检查公共假期?');
/**
* @ignore
*/
define('_JOMRES_COM_A_CHECKPUBLICHOLIDAYS_DESC','如果设定此选项为是,你必须确保您已将公共假期费率和正常日期费率分开计价。设定为否,则意味着您对公共假期和正常日期采用同一费率.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ODDS','杂项.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING','显示错误核查');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKING_DESC','设定为是将在页面底部显示核查的错误数. 它将让网络重新指向功能失效. 这将有助于您确认你可能出现了哪些小错误.');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETE','删除此图片');
/**
* @ignore
*/
define('_JOMRES_FILE_DELETED','图片已删除');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT','显示离店输入表框');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREJAVASCRIPT_DESC','设此为是表明你想显示离店输入表框. 部分浏览器不能正确执行日历表和输入表框同时存在的现象. 个人来说我关闭它因为我觉得太丑.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_CHOOSEPROPERTY','请选择寓所,表示你意图让可用房间显示在日历上面');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNUSER_ANYPROPERTY','任何');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_ROOM','房间');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_ROOMBOOKINGLISTING_PROPERTY','寓所');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL','显示sql');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_DESC','设定为开以查看SQL.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS','显示sql结果');
/**
* @ignore
*/
define('_JOMRES_COM_A_ERRORCHECKINGSHOWSQL_SHOWRESULTS_DESC','设此为开以查看SQL数据 returned及var_dumped.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TITLE','选择模板文件');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TOPBUTTONS','顶部按钮 css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_TABLEHEADERS','表格标题 css id');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS','模板');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETE','删除');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','无法移除此房间, 此房间已经被预订. 先行取消预订然后方可删除房间.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOM_DELETED','房间已删除');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','删除房间特点');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','无法移除此房间特点, 部分房间已采用此特点. 先让这些房间终止使用此特点然后重新尝试移除.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','房间特点删除');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','删除寓所特点');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','无法移除此寓所特点, 某个寓所已采用此特点. 先让这个寓所终止使用此特点然后重新尝试移除.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','寓所特点已删除');

/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','删除房间类型');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','无法删除此房间类型, 它已被某个房间使用. 重新让这个房间使用另外的房间类型然后移除此类型.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','无法删除此房间类型, 它已被某个价目表使用. 重新让这个价目表和其他房间类型关联然后移除此类型.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','房间类型已删除');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE','删除寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_UNABLETODELETE_MESSAGE','无法删除寓所,在其表格里面含有数据: ');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETED','寓所已删除');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','您无权删除此寓所.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_BUTTON','选择这个寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_ASSIGNROOMTOTHISPROPERTY_DESC','您的房间和哪个寓所关联?');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_SELECTPROPERTY','选择一个寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP1_MUSTSELECTPROPERTY','您必须选择一个寓所');

/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_TINY','微型缩略图尺寸');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_MEDIUM','中等缩略图尺寸');
/**
* @ignore
*/
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','原始图片尺寸');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','点选此处查看地图');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','寓所描述');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','入住时间');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','周边区域');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','驾车指导');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','机场距离');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','其他交通');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','规定及申明');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY','您的Jomres.net寓所钥匙');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPERTYKEY_DESC','当您想让你的站点上线, 访问 <a href="http://www.jomres.net" target="_blank">Jomres.net</a> 来获取您的寓所钥匙. 有了它您的寓所将能登陆Jomres 网络, 确保您的寓所服务将被更多人关注.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_OURPROPERTIES','我们的寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','地址');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','访客可在线预订');
/**
* @ignore
*/
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','设定为是确保访客可在线预订.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','预订仅适用于固定期限');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','如果您设定为是, 预订仅适用于固定期限. 如果设定为否, 那么确保 "定义抵达日期" 没有被设定为是 除非您强迫旅客在某个特定日子抵达) 否则您将无法使用日历表.');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD','预订时段:');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKING','预订房间');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER','预订表格边框');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBORDER_DESC','修改预订表格边框颜色');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND','表格边框背景');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEBACKGROUND_DESC','修改表格边框背景颜色');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGTABLEWIDTH','预订表格宽度');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','最大时段长, 例如 3x7个预订时段=21天');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED','需要旅客数?');
/**
* @ignore
*/
define('_JOMRES_COM_A_NUMBEROFGUESTSREQUIRED_DESC','设定为是以在预订表格中显示旅客数');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','这是公寓/小屋/别墅?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','如果您正在出租寓所, 而不是那个寓所的一个房间. 如果是这样的话, 您必须确保这个寓所里面至少有一个房间可以使用.');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS','最多成人数');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXADULTS_DESC','在预订表格中显示最多成人数');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN','最多儿童数');
/**
* @ignore
*/
define('_JOMRES_COM_A_MAXCHILDREN_DESC','在预订表格中显示最多儿童数. 如果设定为零,则有关儿童的选项不在出现.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_CONTINUE','继续进行');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_REVIEWBOOKING','复查预订');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONFIRMBOOKING','确认预订');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISCOUNT','折扣');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CONF_CHMODWARNING','<center><h1><font color=red>警告...</FONT></h1><BR><B>您需要修改您的 /administrator/components/com_jomres/site_config.php 文件权限至 777 以确保您能够修改配置文件</B></center><BR><BR>');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','周一');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','周二');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','周三');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','周四');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','周五');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','周六');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','周日');

/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','一');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','二');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','三');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','四');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','五');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','六');
/**
* @ignore
*/
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','日');

/**
* @ignore
*/
define('_JOMRES_COM_A_AVLCAL','有效日历.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_FACE','所有内容字型');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_SIZE','所有内容字体');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_HEIGHT','表格高度');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WIDTH','表格宽度');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','针对当日的字体颜色');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE','针对当月的字体颜色 ');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','针对不在当月的字体颜色');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','当房间可用时的表格背景颜色');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','不在显示月份中的表格背景颜色');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','已有预订的日期表格背景颜色');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','针对临时预订房间的表格背景颜色 (订金未付)');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','已过日期的表格背景颜色');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_KEY','颜色 key:');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','已订/不可使用');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','可以预订');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','临时预订');


/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','预订抵达日期');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','仅供提供固定时段预订的站点使用. 选择必须抵达的日期.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','固定抵达日期');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','旅居时段 (天数)');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','显示预订可使用的日历?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','设此为是以显示预订功能可使用');
/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE_SINGLEROOM','确认选择');
/**
* @ignore
*/
define('_JOMRES_FRONT_AVAILABILITY','有效');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_TITLE','您需做:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWDATES','复查您选择的日期');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWNUMBERS','复查您输入的旅客数');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_GUESTDETAILS','提供您个人资料');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_CHOOSEAROOM','作出选择');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWCHOSENROOM','复查您选择的房间');
/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_REVIEWBOOKING','复查您的订单. 当您满意后, 请确认您的预订');

/**
* @ignore
*/
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','请点选一个可用日期查看预订表格.');

/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING','私人预订');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NONE','没有私人预订');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_NEW','新私人预订');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_BOOKTHESEROOMS','私人预订这些房间');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST','删除旅客');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','客户已删除');
/**
* @ignore
*/
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','无法删除此旅客,因为他们已经预订那些开放的房间了. 先行取消预订然后重新尝试.');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW','管理员面板显示带状视图');
/**
* @ignore
*/
define('_JOMRES_COM_A_TAPEVIEW_DESC','设定此处为是,如果你想使用星期带状视图, 与月份显示正好相对.');
/**
* @ignore
*/
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','实际房间费用:');

/**
* @ignore
*/
define('_JOMRES_FRONT_MESSAGES_EMAILINVALID','电邮地址不正确');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_PREFIX','有邮件来自');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','您好');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','谢谢您的预订与');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','预订简述如下:');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','如果您对此预订和其他服务有问题, 请即时联系我们.');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','我们的电话是');
/**
* @ignore
*/
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','或者您可以电邮至');

/**
* @ignore
*/
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','吸烟');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"无所谓");
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT','日期输出格式');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDAROUTPUT_DESC','允许用户修改日历输出格式');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT','日历输入格式');
/**
* @ignore
*/
define('_JOMRES_COM_CALENDARINPUT_DESC','允许用户修改日历输出格式.');


/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','固定时段的预订允许短期离店');
/**
* @ignore
*/
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','短期离店时段长');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISHED','已发布');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_SETTINGS','设定');

/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL','贝宝');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_USE','使用贝宝?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING','使用贝宝 sandbox?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_TESTING_DESC','需要一个贝宝 Developer帐户');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL','您的贝宝电邮地址');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_EMAIL_DESC','注意: 为使用贝宝您必须去到您的贝宝电邮 & 启用自动转回功能. (资料/网站支付参考) 设定自动转回功能: 开, 设定返回链接: http://www.yoursite.com/index.php?option=com_jomres&task=bookaroom&action=success  ');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_ERROR_NOEMAIL','错误, 贝宝电邮不存在');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','检查跟踪');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_NOAUDITTRAIL','没有检查跟踪');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_DATE','日期');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_TIME','时间');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_USER','用户 (用户名)');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','运作');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTY','寓所所有权');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','查看细节');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_PROPERTYRIGHTS',' ');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_GLOBAL_PROPERTYRIGHTS','<b>任何一个</b>');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','日期筛选');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','用户名筛选');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','营运筛选');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','状态');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','抵达未定');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','今日抵达');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','当前住客');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','今日离店');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','逾期离店');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','尚未抵达');

/**
* @ignore
*/
define('_JOMRES_MR_FILTER','筛选');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','未知用户');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM','创建房间');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','更新房间');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM','删除房间');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','创建房间特点');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','更新房间特点');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','删除房间特点');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','加入房间类型');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','更新房间类型');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','删除房间类型');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','创建寓所');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','更新寓所');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','删除寓所');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','创建寓所特点');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','更新寓所特点');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','删除寓所特点');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','编辑寓所特点');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','发布寓所');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','创建价目表');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','更新价目表');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','删除价目表');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PUBHOLIDAY','创建公共假期');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PUBHOLIDAY','更新公共假期');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_PUBHOLIDAY','删除公共假期');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ADDSERVICE','增加服务费用');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CANCELBOOKING','取消预订');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','预订的旅客已入住');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','预订的旅客已离店');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATEDCCDETAILS','更新cc资料');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','输入订金');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_GUEST','创建旅客');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','更新旅客');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_GUEST','删除旅客');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_IMAGE','上传的新寓所图片');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_IMAGE','上传不同的寓所图片');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_IMAGE','删除图片');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_ROOM_IMAGE','上传新房间图片');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_IMAGE','上传不同的房间图片');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_RESOURCE_IMAGE','上传新服务的图片');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_RESOURCE_IMAGE','上传不同的新服务的图片');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','预订一个房间');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','创建额外服务');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','更新额外服务');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','删除额外服务');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','发布额外服务.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING','输入私人预订.');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','取消私人预订.');

/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE','额外服务');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_TITLE_EDIT','编辑额外服务');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DESC','描述');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NAME','名称');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_PRICE','价格');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_NEWEXTRA','新额外服务');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_CLICKTOEDIT','点选链接以编辑额外服务明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_INSERT','额外服务已增加');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','额外服务已更新');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','编辑明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_LINKTEXTCLONE','复制明细');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETEEXTRA','删除额外服务');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EXTRA_DELETED','额外服务已删除');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','额外服务管理');

/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS','在预订时显示额外服务?');
/**
* @ignore
*/
define('_JOMRES_COM_A_EXTRAS_DESC','设此为是表明您愿意在旅客进行预订时向他展示额外服务');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','额外服务帮助.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BUTTON','选择这个寓所');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_SELECTALL','反置选择/选择全部');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','私人预订起始日期');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','服务重新开始日期');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','私人预订');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSBOOKED','部分查看的房间已经被预订. 如果您想私人预订这些房间,您首先需要取消原来已有的预订.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','预订这些房间出现错误, 部分房间现在不可用.');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','已被私人预订的房间');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_DELETEBLACKBOOKING','删除私人预订');
/**
* @ignore
*/
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','查看私人预订');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','没有私人预订列示');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','星级');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING','显示是否可以吸烟?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_DESC','设此为是显示是否可以吸烟.');
/**
* @ignore
*/
define('_JOMRES_COM_A_RESET','重设');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_PENDING','您通过贝宝的支付未尚到帐. 一旦酒店收到费用到帐通知,预订即刻生效.');
/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_CANCELLED','预订已取消');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_HERE','在此搜索:');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_SEARCH_FEATURES',' 搜索 ');


/**
* @ignore
*/
define('_JOMRES_COM_A_PAYPAL_DEBUGGING','显示贝宝出错信息?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES','显示房间名称?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMNAMES_DESC','设此为是显示房间名称?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES','显示房间类型?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMTYPES_DESC','设此为是显示房间类型?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION','默认吸烟选项');
/**
* @ignore
*/
define('_JOMRES_COM_A_SMOKING_OPTION_DESC','注意: 如果默认为是,则所有房间禁止吸烟, 那么将没有房间显示在列表上面.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL','货币符号');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','例如 &amp;pound&#59; 请留意您应该使用HTML输入编码来显示需要的符号. 请访问 <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');

/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE','货币代码');
/**
* @ignore
*/
define('_JOMRES_COM_A_CURRENCYCODE_DESC','例如 GBP. 这将在向用户发送确认邮件中使用.');
/**
* @ignore
*/
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','点选查看更多信息');
/**
* @ignore
*/
define('_JOMRES_COM_A_GODMANAGERWARNING','<font color=red>警告...您以经理身份登陆,对所有寓所都有修改特权. 这可能将在您使用jomres的某些功能时产生一些连锁反应.</FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','限制高级预订?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','设此为是显示您将限制某些高级预订功能 (使用下一个表格以天数进行设定). 设此为是则意味着如果用户试图提前N天进行预订,那么他们的到达日将受到您今日设定的日期的限制');
/**
* @ignore
*/
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','限制可提前预订的天数至:');

/**
* @ignore
*/
define('_JOMRES_COM_A_TAX_WARNING','<font color=red>NOTE: 不推荐您对下面两个选项都设定为是, 您应该选择下面两个税率中适合你使用的一个税则. </FONT>');
/**
* @ignore
*/
define('_JOMRES_COM_FRONT_ROOMTAX','税率');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX','房间税率');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_DESC','用于美洲市场. 房税向旅客收取. 您可以选择收取一个合并的和/或者固定的百分数. 请注意这些税费将应用到房费里面.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_FIXED','税率固定额度');
/**
* @ignore
*/
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','税率百分率');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX','税费');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_DESC','针对那些实施一揽子税率的市场使用, 比如，在英国市场实施的增值税 ');
/**
* @ignore
*/
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','税额百分率');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVE','归档所有记录');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' 记录已归档');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','审查已归档记录');

/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS','我们的价目表');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_TITLE','价目名称');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_DESC','价目描述');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','房间类型');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_STARTS','有效自');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_ENDS','有效至');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PPPN','每人每晚');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_PN','每晚');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','不含周末');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINDAYS','最少天数');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','最多天数');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','最少人数');
/**
* @ignore
*/
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','最多人数');

/**
* @ignore
*/
define('_JOMRES_FRONT_PREVIEW','预览');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITINGMODEON','编辑中?');

/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','当前文本');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITING_NEWTEXT','新文本');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','更新定制的文本.');

/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','编辑语言');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_SHOWING','未归档记录数: ');
/**
* @ignore
*/
define('_JOMRES_COM_A_AUDITING_CANTSHOWSQL','超过200个记录已经用于跟踪检查, 因此无法显示 SQL 活动. 如果您想查看 SQL, 您应该直接跟踪查看这些记录. 如果您想正常检查 SQL, 推荐您操作正常归档');

/**
* @ignore
*/
define('_JOMRES_FRONT_PTYPE','寓所类型');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE','列表寓所类型');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','编辑寓所类型');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE','寓所类型');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC','寓所类型描述');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_SAVED','寓所类型已保存');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','无法删除寓所类型. 此类型已被某个寓所使用, 请重新调整后尝试删除此寓所类型');
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_DELETED','寓所类型已删除');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMS','<font color=red>错误, 寓所没有房间.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOTARIFFS','<font color=red>错误,寓所没有价目表.</font>');
/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_BOOKINGCHECK_NOROOMTYPES','<font color=red>错误, 寓所没有房间类型.</font>');

/**
* @ignore
*/
define('_JOMRES_FRONT_PROPERTY_SWAP','更换寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','付款提醒');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_BOOKINGMADE_PAYPAL','<center>您的贝宝付款已执行, 一份收据已经电邮给您. 你可登陆你的帐户位于 www.paypal.com 去查看此付款细节. </b><br></center>');
/**
* @ignore
*/
define('_JOMRES_EXTRAS_NOEXTRAS','没有额外服务记入帐单');

/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_DEPOSIT','订金');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_FULLAMT','全额');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG','预订时收费额度');
/**
* @ignore
*/
define('_JOMRES_COM_CHARGING_CONFIG_DESC','使用此选项以决定预订时收取何种费用. 如果订金需要支付则选择订金选项, 如果需要全额支付请选择全额支付选项.');

/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW','日历月份显示');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHSTOSHOW_DESC','如果房间可用, 该显示多少月份?');
/**
* @ignore
*/
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','签字谨代表 ');

// V1.4
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAYLIST','接口');
/**
* @ignore
*/
define('_JOMRES_COM_A_CANCEL','取消');
/**
* @ignore
*/
define('_JOMRES_FRONT_BLACKBOOKING_DESC','请选择你不想对外提供服务的房间, 以及相应时段. <br>如果房间没有特定标记, 它将不能用于私人预订,直到任何一个公开预订已经完成或者取消.<br/> 当您选择了合适日期, 点选蓝色 "启用" 按钮重新核查房间是否可用. ');
/**
* @ignore
*/
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>您已退出站点</b> 请重新登陆后继续操作.');
/**
* @ignore
*/
define('_JOMRES_JR_BLACKBOOKING_REASON','理由');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','使用支付接口?');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','设此为是表示您将采用网络支付接口. <b>注意:</b>它将不会关闭在预订过程中已经显示的计算的订金. To disable this you can edit the templates that show rooms and wrap the elements that refer to deposits inside a class whos font and bg colour are the same.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','请选择您的付款方法.');
/**
* @ignore
*/
define('_JOMRES_COM_A_GATEWAY_ENABLED','使用接口?');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','修改的插件设定');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','插入的插件设定');
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
define('_JOMRES_COM_ENCRYPTION','加密');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION','使用 mCrypt 加密?');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_DESC','设此为是 如果你已经将 mCrypt 合并到 PHP.');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_KEY','加密钥匙');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_MODE','加密模式');
/**
* @ignore
*/
define('_JOMRES_COM_A_ENCRYPTION_ALGORITHM','加密算法');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','查看信用卡');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','更新信用卡');
/**
* @ignore
*/
define('_JOMRES_MR_CREDITCARD_EDIT','编辑信用卡');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON','编辑图标尺寸');
/**
* @ignore
*/
define('_JOMRES_COM_A_EDITICON_DESC','以px面积计量.');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','批量上传寓所图片');
/**
* @ignore
*/
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','图片已存在于目录');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS','幻灯片');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','显示链接至幻灯片?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','这里显示幻灯片?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE_DESC','设此为是表明您想在寓所描述区域直接显示幻灯片.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_FULLSIZE','幻灯片全屏高度');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','幻灯片缩略图高度');
/**
* @ignore
*/
define('_JOMRES_FRONT_SLIDESHOW','幻灯片');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />抱歉, 此寓所没有图片. 如果您想使用幻灯片功能请先行批量上传图片.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_WIDTH','跳出窗口宽度');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWPOPUP_HEIGHT','跳出窗口高度');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION','图片地址');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOWSIMAGELOCATION_DESC','如果您想特别使用Jomres的图片用于其他地方,那么就修改此处. 默认设置于 \'/images/stories/jomres/\' 于系统根目录.');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','显示链接至价目表?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED','允许跳出窗口?');
/**
* @ignore
*/
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','如果设定为否, 那么原本链接应该打开一个跳出窗口转而成为在文本下方直接显示. 试验性质! ');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS','上传幻灯片图片');
/**
* @ignore
*/
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','使用此表为此寓所批量上传图片.<br/><b>注意</b> 重名图片文件将被覆盖. 此表格不用于特定房间图片和寓所标题图片, 您需要在寓所管理区域上传上述图片.<br/><b>注意</b> 此处上传的图片将被置入 /images/stories/jomres/*property_uid* 文件夹. 如果文件夹不存在, 它将被创建, 除非设置里面已有专门存放此类图片的文件夹安排.');
/**
* @ignore
*/
define('_JOMRES_A_TABS_MISC','杂项');
/**
* @ignore
*/
define('_JOMRES_A','站点设置');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES','使用全局寓所特点');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_DESC','设此为是表示您想让所有寓所特点均显示为同一内容，该内容为站点管理员提前设定.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALPFEATURES_INFO','如果您想为此特点设定一幅图片,您需要首先上传图盘至 /images/stories/jomres/pfeatures/ 文件夹. ');
/**
* @ignore
*/
define('_JOMRES_A_ICON','标识');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION','选择搜索插件来使用.');
/**
* @ignore
*/
define('_JOMRES_FRONT_NORESULTS','<b>抱歉, 没有结果可供参考. 请重新输入关键词来搜索.</b>');
/**
* @ignore
*/
define('_JOMRES_AREYOUSURE','您确认你想执行此操作?');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','预订一个房间');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','预订这个寓所');
/**
* @ignore
*/
define('_JOMRES_COM_MR_DISPGUEST_CCV','安全码');

//v1.4c
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','内容区显示价目表?');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','地址');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','详细信息');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','点选查看房间及是否开放可用');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','显示价目表信息');

/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','在此链接下显示地址信息');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','在此链接下显示详细寓所信息');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','在此链接下显示房间和是否开放可用信息');
/**
* @ignore
*/
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','在此链接下显示价目信息');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','同一费率价目表');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','均价费率');

/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL','选择你想使用的价目模式');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"您的价目计算方法有两种选择. 第一,“同一费率”方法允许您向旅客在旅居期间提供不同的价目计费，而每种计费费率在整个旅居期间是恒定不变的.如果您想在同一天提供不同价目服务这就变的很有用,比如:早餐/中餐/晚餐价格。 第二,选择 '均价费率' ,如果您想根据日期来调整您的价格和收费. 系统会自动找到在预订期间的每日所有选择使用的服务的价目情况并汇总,最后给出该期间的平均费率。");

/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL','使用 Jomres 入口?');
/**
* @ignore
*/
define('_JOMRES_COM_A_PORTAL_DESC','设此为是表明将和jomes入口软件协同使用');

// v1.4e
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','显示离店日期输入?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"设此为否表明您不想在预订表格显示离店日期输入表格. 仅当您知道您的计划是可以使用此功能, 因为离店日期通常在入住日期之后.");

// v1.4f
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC','描述限制');
/**
* @ignore
*/
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"限制显示寓所描述时的字数.");

// v1.4g+
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER','每日费率乘数');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAILYRATEMULTIPLIER_DESC',"允许用户在使用预订表格时使用每日费率乘数计算器 (当显示寓所的每周费率的时候就有用了)");
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPWIDTH','幻灯片窗口宽度');
/**
* @ignore
*/
define('_JOMRES_COM_A_SLIDESHOW_POPUPHEIGHT','幻灯片窗口高度');


/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATEBUTTON','更新');
/**
* @ignore
*/
define('_JOMRES_FRONT_MR_DISPGUEST_UPDATETEXT','点选更新按钮查看是否可用');

/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE','使用日期() 制式风格?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','设此为是以格式化输出日期模式采用() (See <a href="http://www.php.net/manual/en/function.date.php">这里</a>). 设此为否以使用 strftime() 格式 (see <a href="http://www.php.net/manual/en/function.strftime.php">这里</a> eg. %b %d %Y ');

/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_PUBLISH','发布');
/**
* @ignore
*/
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','未发布');

/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_PRE','请完成下述所有表单: ');
/**
* @ignore
*/
define('_JOMRES_MR_FRONT_JSVALIDATION_POST',' 谢谢.');

/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES','使用全局房间类型');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_DESC','设此为是表明您将所有的房间类型均设定为一种类型,此类型由站点管理员在期初设定. 如果您意图查询房间类型的话,您需要设此为是.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBALROOMTYPES_INFO','如果您想为此房间类型设定照片,您需要首先上传图片至 /images/stories/jomres/rmtypes/ 文件夹. ');

/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BORDER','输入了错误的边框颜色');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTERROR_BACKGROUND','输入了错误的背景颜色');

/**
* @ignore
*/
define('_JOMRES_COM_CONFIGCOUNTRIES','预订表格中的默认国家');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP','使用站点帮助?');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_DESC','设此为是表明您想显示jomres站点帮助文本.');
/**
* @ignore
*/
define('_JOMRES_COM_USESITEHELP_BOOKING','在此处编辑站点帮助文本.');

/**
* @ignore
*/
define('_JOMRES_JAVASCRIPT_','红星标注的明细条目为必须的.');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION','用户可以注册他们自己的寓所?');
/**
* @ignore
*/
define('_JOMRES_COM_SELFREGISTRATION_DESC','设此为是表明你允许用户在没有站点管理员干预的情况下自行编辑他们的寓所.');

/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','请提供您寓所所在的国家和城市区域.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','请完成您的寓所细节.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','红星标注的明细条目为必须的.');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','创建寓所');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_NOTALLOWED',"抱歉, 您不能通过此系统创建一个寓所. 您必须注册成为会员,登陆后方可操作而且您此前没有在此系统上创建过寓所.");
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','创建寓所:');
/**
* @ignore
*/
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','为用户:');

/**
* @ignore
*/
define('_JOMRES_EXCHARGEABLEDAILY','每日收费?');
/**
* @ignore
*/
define('_JOMRES_DAILY',' 每日');

// v1.4i
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR','年初起显示日历?');
/**
* @ignore
*/
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','自今年起显示日历.');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO','显示房间详细信息?');
/**
* @ignore
*/
define('_JOMRES_SHOWDETAILEDROOMINFO_DESC','如果您设定为否,那么系统不会在旅客预订时显示全部信息, 其实它很简单的表明房间已经可用.');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE','可使用房间数');
/**
* @ignore
*/
define('_JOMRES_NUMBEROFROOMSAVAILABLE_INFO','请选择您需要的房间数目,及类型.');
/**
* @ignore
*/
define('_JOMRES_NUMBERYOUREQUIRE','预订的房间数');
/**
* @ignore
*/
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','返回寓所信息');
/**
* @ignore
*/
define('_JOMRES_FRONT_ROOMTYPES','房间类型');

/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO','使用关键词?');
/**
* @ignore
*/
define('_JOMRES_METADATA_USEYESNO_DESC','如果设定为是, 则系统将从您输入的所有词汇中选择重复出现的关键词列示,每词中间一个空格。');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS','屏蔽词语');
/**
* @ignore
*/
define('_JOMRES_METADATA_STOPWORDS_DESC',"这些是屏蔽词语, 这些词语表明您 <i>不想</i> 让他们显示在关键词中.");
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS','其他需要移除的元素');
/**
* @ignore
*/
define('_JOMRES_METADATA_ELEMENTS_DESC','其他需要从关键词中移除的资料. 比如一个标识符号等等.');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY','频率');
/**
* @ignore
*/
define('_JOMRES_METADATA_FREQUENCY_DESC','在被收入到关键词中此前一个词出现的次数.');
/**
* @ignore
*/
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','随机搜索限制');
/**
* @ignore
*/
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','在价目列表中显示货币兑换链接?');
/**
* @ignore
*/
define('_JOMRES_CURRENCYCONVERSIONTEXT','兑换率');
/**
* @ignore
*/
define('_JOMRES_COM_ALLOWHTMLEDITOR','允许用户编辑使用 html 编辑器?');

// v2
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS','使用此表完成您的预订. 将鼠标置于 "i" 图案将得到更多信息指导. 修改您的预订数据,比如抵达和离店日期,旅客数目,选择那些可用的房间. 点选那些可用的房间,加入到您的预订之中. 当上述操作完成, 您可以提出额外要求,并提供你的详细信息. 当预订表信息完整后它将显示一个提交按钮,您将可以提交预订表.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','使用此表完成您的预订. 将鼠标置于 "i" 图案将得到更多信息指导. 修改您的预订数据,比如抵达和离店日期,旅客数目,选择那些可用的房间. 当上述操作完成, 您可以提出额外要求,并提供你的详细信息.  当预订表信息完整它将显示一个提交按钮,您将可以提交预订表.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS','预订细节');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','选择您预订要求的细节');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE','有效 ');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','选择您要求的房间');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','查看此处确认该房间在您要求的期间内是否可用.');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS','旅居额外服务');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EXTRAS_DESC','选择您希望获得的任何额外服务并增加到预订表格中');
/**
* @ignore
*/
define('_JOMRES_COM_PERDAY','每晚');


/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS','您的地址');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_ADDRESS_DESC','请输入您的资料. 除了您的手机号码外其他资料必填');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','可用房间');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_SELECTEDROOMS','已选房间');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>最早到达日期为:');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM','每晚:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','合计:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','额外服务:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TAX','税费:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','折扣:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTAL','帐单合计:');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','旅客');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','点选增加这个房间到您的选择中');
/**
* @ignore
*/
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','从您的选择中点选移除这个房间');
/**
* @ignore
*/
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','旅客类型');

/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE','类型');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_TYPE_TT','旅客类型, 比如儿童 年龄在 5-10, 或者 学生 ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES','备注');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_NOTES_TT','注意,你可能会用到旅客类型');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM','最大');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_MAXIMUM_TT','在旅客预订表中可以被选择的这个旅客类型的最大值');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE','为百分率');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','这个计算的数据是针对房间的基本数据计算的百分率. 如果此设定为开意味着 您指定的数据将从房间数据中简单的增加或者减少.');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG','增加差异?');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_POSNEG_TT','此计算数据已增加至或者移除自房间计算的基础数据. 如果您想让这个数据成为一个折扣那么请设定为否. ');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE','差异');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_VARIANCE_TT','差异值');

/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','调整旅客类型订单');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','发布旅客类型');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','删除旅客类型');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','创建旅客类型');
/**
* @ignore
*/
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','更新旅客类型');
/**
* @ignore
*/
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','更新旅客类型');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMINPROPERTYDETAILS','在寓所信息页面中显示房间可用情况?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','在寓所信息页面显示房间开放可用的日历?');

/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL',' <b>仅</b> 显示可以开放使用的日历/房间列表?');
/**
* @ignore
*/
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','设定为是则为关闭显示寓所标题和资料, 因此只有那些可开放使用的寓所信息方可显示. 只供那些租出寓所的人士使用 (比如公寓, 小屋等).');
/**
* @ignore
*/
define('_JOMRES_COM_A_CSS_STYLE','CSS Style 用于站点');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL','抵达-离店 最小间隔');
/**
* @ignore
*/
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','在预订表中显示的最小的抵达日期和离店日期的间隔.');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','预订表房间列表显示房间数目');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','预订表房间列表显示房间名称');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','预订表房间列表显示价目表');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_TITLE','预订表overlib显示标题');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_DESC','预订表overlib显示描述');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_RATE','预订表overlib显示费率/价目');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_STARTS','预订表 overlib 显示起始日');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_ENDS','预订表overlib显示终止日');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINDAYS','预订表overlib显示最少天数');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXDAYS','预订表overlib显示最多天数');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MINPEEPS','预订表overlib显示最少人数');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWTARIFF_MAXPEEPS','预订表overlib显示最多人数');

/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NUMBER','预订表overlib显示房间号码');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_NAME','预订表overlib显示房间名称');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_TYPE','预订表overlib显示房间类型');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_SMOKING','预订表overlib显示房间是否可吸烟');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_ACCESS','预订表overlib显示房间是否开放可用');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FLOOR','预订表overlib显示房间楼层');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_MAXPEEPS','预订表overlib显示房间最多容纳人数');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORMOVERLIB_SHOWROOM_FEATURES','预订表overlib显示房间特点');

/**
* @ignore
*/
define('_JOMRES_ORDER','订单');
/**
* @ignore
*/
define('_JOMRES_SINGLEROOMPROPERTY_ERROR','您已设置系统为单房间寓所 (例如一个公寓, 小屋, 别墅) 如果您创建更多房间则使用会出错, 因此如果您向让系统显示为单房间寓所,那么您需要移除所有房间并仅请保留一个房间. 请修改设置以让房间公寓 = 否, 然后返回寓所管理删除所有房间至剩下一间房, 这样你这个寓所就只有一个房间.');
/**
* @ignore
*/
define('_JOMRES_REQUIREDFIELDS','必填');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','天至入住前');
/**
* @ignore
*/
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','最少天数必须有效, 自"今日"起, 在抵达日之前.');

/**
* @ignore
*/
define('_JOMRES_AJAXFORM_MESSAGES_TODO_','每晚:');

/**
* @ignore
*/
define('_JOMRES_DTV','日期类型变更');
/**
* @ignore
*/
define('_JOMRES_DTV_DOW','日');
/**
* @ignore
*/
define('_JOMRES_DTV_RANGES','日期区间');
/**
* @ignore
*/
define('_JOMRES_DTV_STAYDAYS','旅居天数');
/**
* @ignore
*/
define('_JOMRES_DTV_LASTMINUTE','最后时刻');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW','日');
/**
* @ignore
*/
define('_JOMRES_VARIANCES_DOW_TT','星期日');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION','价目等级选择');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFCLASS_SELECTION_DESC','这个下拉允许你去选择一个定制的价目水平目标,可能是您按照单独组件创建的,下载的,上传的. ');

/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','默认旅客类型');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','默认旅客类型编号. 如果您选择旅客编号, 那么你输入的第一个旅客类型编号即为默认编号.');

/**
* @ignore
*/
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','仅有登陆会员方可在线预订?');
/**
* @ignore
*/
define('_JOMRES_REGISTEREDUSERSONLYBOOK','抱歉, 您必须成为注册会员方可在线预订. 请点选此处注册. ');

/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','当前预订链接的字符颜色');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','周末边框');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN','哪一个管理面板插件可用');
/**
* @ignore
*/
define('_JOMRES_COM_A_DASHBOARDPLUGIN_DESC','如果您已安装其他面板插件，您可以在此点选使用.');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','房间已预订');
/**
* @ignore
*/
define('_JOMRES_COM_AVLCAL_BLACK_KEY','私人预订');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','订金小数四舍五入?');
/**
* @ignore
*/
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','需要预付订金?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','按照周来统计和存储价目收费?');
/**
* @ignore
*/
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','您可以选择是来按照每日还是每周统计价目收费. 如果按照每周汇总统计,您必须设此为是.');
/**
* @ignore
*/
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','每周');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','固定抵达日期再来:');
/**
* @ignore
*/
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','当选定固定抵达日期, the number dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available) ');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','吸烟选项无效');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','抵达日期不正确');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','离店日期不正确');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','预订的旅居期限太短. 旅居期限至少为:');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','您的旅居期间为');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','客户类型差异不正确');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','选择您的客户类型/数目');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','就当前价目来说,你的团队成员太多');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','您多选房间了, 请选择房间并且移除');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','旅客数目超过现有床位提供');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','您需要增加房间数');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','选择一个房间');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','名必须填写');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','姓是必须填写');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','门牌号必须填写');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','地址必须填写');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','市/县必须填写');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','省/直辖市必须填写');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','邮编必须填写');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','国家必须填写');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','详细地址必须填写');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','手机号码必须填写');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','电子邮件地址必须填写');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','邮件地址不正确');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','无法发送电邮');

/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVEVACANCIES','我们有空余房间!');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','尚未选择房间');

/**
* @ignore
*/
define('_JOMRES_BOOKING_NUMBER','预订号.');
/**
* @ignore
*/
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','输入Ok来预订, 信息框背景');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA','卸载模板数据?');
/**
* @ignore
*/
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','数据是百分比');
/**
* @ignore
*/
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','设此为是表明个人计价按照百分比显示. 设定为不是则意味着显示为汇总数值.');

//v2rc2
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST','可用的房间/价目限制');
/**
* @ignore
*/
define('_JOMRES_COM_LIMITROOMSLIST_DESC','可用于在预订表格中设定可供选择的房间/价目限制数目. 设定为零表明您不想使用限定功能. ');
/**
* @ignore
*/
define('_JOMRES_SRP_WEHAVENOVACANCIES','目前没有空余房间提供!');

// Introduced in v2.5
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN','空间');
/**
* @ignore
*/
define('_JOMRES_COM_A_MARGIN_DESC','利润空间, 百分比表示.');


// v2.6
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS','以标识显示Jomres管理员选项?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_LINKSASICONS_DESC','设定为否,则所有管理员选项均为文本显示.');
/**
* @ignore
*/
define('_JOMRES_BOOKITNOW','');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','全局编辑模式?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','请小心此设置. 设定为是, 编辑方式将影响现有的所有编辑文本.');

/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','使用全局货币?');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','选择为是表明强迫所有寓所选择同一货币 (e.g. & # 8 3 6 4 ;)');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','全局货币符号');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','组件被修改');
/**
* @ignore
*/
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','设此为是表明组件被修改则顶部标题和模块位置无法显示');
/**
* @ignore
*/
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','超级寓所管理员');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY','仅限周末');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDONLY_DESC','如果旅居日包括一个周末天数则价目表有效 (周五或者周六) ');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS','周末');
/**
* @ignore
*/
define('_JOMRES_COM_WEEKENDDAYS_DESC','设定您的周末天数. 价目表会在显示房间列表时判断是否应该包含周末或者不包含周末.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','在增加寓所信息前请选择所在国家');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','上传寓所照片前请先保存寓所信息资料');
/**
* @ignore
*/
define('_JOMRES_TARIFFSFROM','价格自 - ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_ALL','所有');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_GEO',		'地区');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_FEATURES',	'特点');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_DESCR',	'描述');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_AVL',		'可用');
/**
* @ignore
*/
define('_JOMRES_SEARCH_TITLE_PTYPE',	'类型');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','根据国家搜索');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','根据地区搜索');
/**
* @ignore
*/
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','根据市/县搜索');
/**
* @ignore
*/
define('_JOMRES_SEARCH_FEATURE_INFO','根据特点搜索.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_BUTTON','搜索');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_INFO','输入想要查找的关键词并按搜索按钮.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','搜索词(s): ');
/**
* @ignore
*/
define('_JOMRES_SEARCH_AVL_INFO','请输入您打算抵达的日期和离店的日期,点选搜索看看哪些寓所可以提供满足你要求的服务.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_PTYPES','根据寓所类型显示所有寓所.');
/**
* @ignore
*/
define('_JOMRES_SEARCH_RTYPES','根据房间类型显示所有寓所.');

/**
* @ignore
*/
define('_JOMRES_SORTORDER_DEFAULT','默认');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYNAME','寓所名称');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYREGION','寓所所在省/直辖市');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_PROPERTYTOWN','寓所所在市/县');
/**
* @ignore
*/
define('_JOMRES_SORTORDER_STARS','星级');

/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYLIST','寓所列表');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_PROPERTYDETAILS','寓所信息 - ');
/**
* @ignore
*/
define('_JOMRES_PATHWAY_BOOKINGFORM','预订表格');

/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','更新您的信息');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','重新查看可用的房间<br/>(房间选择将被重设)');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','重新查看可用的房间');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','修改您要求的额外服务');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','修改您的房间选择');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','更新您的地址信息');
/**
* @ignore
*/
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','抱歉,一个或多个地址信息不正确.');
/**
* @ignore
*/
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','房间图片');
/**
* @ignore
*/
define('_JOMRES_CURRENCYFORMAT','货币格式');
/**
* @ignore
*/
define('_JOMRES_MANAGEROPTIONSASIMAGES','以图片显示经理选项');
/**
* @ignore
*/
define('JOMRES_COM_A_SEARCHOPTIONSTAB','搜索选项');
/**
* @ignore
*/
define('JOMRES_COM_A_CALENDARNOTE','注意! 这些选项只影响模块里面的语言. To adjust the javascript langauge format for a given property please edit that javascript calendar options within that property');
/**
* @ignore
*/
define('JOMRES_COM_A_AVAILABLELOGS','可用的 Logs');
/**
* @ignore
*/
define('JOMRES_COM_A_LOGS_NOENTRIES','没有 log 输入. 这是正常的, 您需要手动修改 jomres.php to trigger logging');
/**
* @ignore
*/
define('JOMRES_COM_A_DATETIME','当前日期时间');
/**
* @ignore
*/
define('JOMRES_COM_A_MESSAGE','信息');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3

/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_NORMAL','正常');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','高级');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','细微管理');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE','价目设置模式');
/**
* @ignore
*/
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>警告: 在不同价目类型之间转换将丢失某些数据. 查看下面的说明</b>.
<br/><br/>
你有三个选项来设置您的价目表.<br/>
正常模式: 您可以为每个房间类型确定一个10年不变的价目表.<br/>
细微模式: 您可以为每个房间/寓所在每天进行价格调整. <br/>
高级模式:  \"早期\" Jomres 方法来管理价目信息. <br/>
<br/>
不同的价目模式使得您能够根据实际需要提供满意服务.<br/>
正常模式是最简单的,但是它最容易理解,因为它将参考的房间和价目和房间/寓所类型结合起来,允许您可在同一页面设置房间和价格.<br/>
细微模式允许您基于每日方式来修改费率,而不需要去调整价目表, 它实际上捆绑了很多不同的价目表. 这导致了在这个阶段您创建了很多价目表, 但是您在同一天里面不可以重叠使用不同价目表.<br/>
高级模式允许您创建一个房间并关联一个房间类型. 您然后创建一个价目表并关联一个房间类型. 用这个方法你可以 \"层叠\" 不同的价目表, 比如一个房间类型 \"双人床\" 可以有一个价目表针对床位和早餐, 而另一个针对床位, 早餐和晚餐. 高级模式需要留心因为这可能会拆开某个房间或者价目表和房间/寓所的关联, 或者在日期设置中产生错误, 但是它确实提供了其他模式没有的设置. <br/>
<br/>
因为正常模式和细微模式要求房间/价目特别建立,因此价目设置可能因为系统转换而导致重新整合.<br/>
<br/>
正常 -> 高级. 没有变化. 所有存在的价目将保留.<br/>
正常 -> 细微. 所有已存在的价目将被移除.<br/>
高级 -> 正常. 所有已存在的价目将被移除.<br/>
高级 -> 细微. 所有已存在的价目将被移除.<br/>
细微 -> 高级. 所有已存在的在价目之间的相互关联被移除,但是价目本身仍然保留.<br/>
细微 -> 正常. 所有已存在的在价目之间的相互关联被移除.<br/>");
/**
* @ignore
*/
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','在寓所资料页面显示房间列表?');
/**
* @ignore
*/
define('JOMRES_PROPERTYTYPE','寓所类型');
/**
* @ignore
*/
define('JOMRES_COM_A_SRPONLY','仅提供单人房');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINROOM','每房间最多人数');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINBOOKING','预订最多人数');

/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_ADD','增加备注');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_EDIT','编辑备注');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_DELETE','取消备注');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_VIEW','查看备注');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','增加新备注');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','编辑新备注');
/**
* @ignore
*/
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','删除新备注');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MENUTITLE','我的选项');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_NOTLOGGEDIN','您尚未登陆. 登陆后方可查看您的预订信息.');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS','预订列表');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_MYBOOKINGS','我的预订');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_LISTBOOKINGS_DEPOSITNOTPAID','列表预订, 订金未付');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWBOOKING','查看预订');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','查看偏好');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','您尚未增加任何偏好!');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','增加至偏好');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PROPERTYTYPE','寓所类型');
/**
* @ignore
*/
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','当地寓所');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE','价格');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ACTIVE','有效');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC','这个插件允许你自动修改房间价格设置.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','大部分业务在给定日期将基于一个指定类型的一定数量的房间基础上重新计算房价. 这里就可以为一个房间/寓所实施折扣服务提供空间.<br/>启动此服务用以吸引旅客.<br/> 开启此服务前必须设定旅居最少天数, 这样百分比选项将允许您设定在给定折扣实施前的房间可用数目. 不过请注意, 如果大量房间被预订那么当前折扣水平将被用于所有房间并且不会因为更多房间被选择而降低.');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_THREASHOLD','起点 (自今日起到抵达日的天数)');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','10% 或更少的房间被预订');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','25%或更少的房间被预订');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','50%或更少的房间被预订');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','75%或更少的房间被预订');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_DISCOUNT','折扣%');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_ROOMTYPE','房间类型 ');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' 已经实施打折自');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_TO',' 至');
/**
* @ignore
*/
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' 房价未打折 ');
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
define('JOMRES_COM_A_USE_SSL','在预订表中使用 SSL?');
/**
* @ignore
*/
define('JOMRES_COM_A_USE_SSL_DESC','您需要确保您有一个正确的SSL认证 for ');
/**
* @ignore
*/
define('JOMRES_MAXPEOPLEINPROPERTY','寓所可承受的最多人数');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_CPANEL','最后截止期');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE','最后时刻有效?');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','设此为是表明您允许签署最后时刻合同.');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD','起点');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','如果预订已存在且抵达日期离预订当日只有N天，那么折扣可以实施。');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT','折扣');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','百分比');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','此预订已启用折扣服务!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','旅居费用已经缩减 by ');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','此寓所提供最后时刻折扣为');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' %,如果您预订的抵达早于');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. 现在预订可以拿到最大折扣!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_PRE','该寓所提供最后时刻折扣为');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_MID',' %,如果您预订的抵达早于');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_PROPERTYDETAILS_POST','. 现在预订可以拿到最大折扣!');
/**
* @ignore
*/
define('_JOMCOMP_LASTMINUTE_ORMORE','%或更多.');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO','详细价目信息');
/**
* @ignore
*/
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','设此为是用以在寓所信息和价目跳出窗口显示更多详细价目信息');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG','最小化设置选项');
/**
* @ignore
*/
define('JOMRES_COM_A_MINIMALCONFIG_DESC','设此为是,意味着在综合设置单元里为寓所经理减少选项数目，如果您不希望寓所经理整天忙于设置,这将非常有用,甚至您可编辑 jomres_config.php 来定义默认选项.');
/**
* @ignore
*/
define('_JOMCOMP_AMEND','修整预订-寓所选择');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_SELECTPROPERTY','选择新寓所');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_HEADER','原始合同:');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITPAID','订金已付');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_DEPOSITDUE','订金未付');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','重新调整后 共计');
/**
* @ignore
*/
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','重新调整后 订金');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5

/**
* @ignore
*/
define('_JRPORTAL_CANCEL','取消');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL','JR入口管理面板');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_CONFIGURATION','设置');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','默认佣金费率');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','选择默认佣金费率将用于一个寓所,前提是还没有其他佣金费率用于此寓所.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTCRATES','列表佣金费率');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_PATETITLE','佣金费率');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TITLE','标题');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_TYPE','类型');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_VALUE','佣金费率');
/**
* @ignore
*/
define('_JRPORTAL_CRATE_CURRENCYCODE','货币代码');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTPROPERTIES','列表寓所');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','寓所名称');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','寓所地址');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_LEGEND','带有红色背景的寓所表示该寓所尚未实施佣金费率.');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY','授权码');
/**
* @ignore
*/
define('_JRPORTAL_CONFIG_LICENSEKEY_DESC','您入口插件的授权码.');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PATETITLE','统计');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE','统计为:');
/**
* @ignore
*/
define('_JRPORTAL_STATS_PERIOD','期限:');
/**
* @ignore
*/
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','寓所-点击次数');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','寓所查看');

/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_0','一月');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_1','二月');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_2','三月');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_3','四月');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_4','五月');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_5','六月');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_6','七月');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_7','八月');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_8','九月');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_9','十月');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_10','十一月');
/**
* @ignore
*/
define('_JRPORTAL_MONTHS_LONG_11','十二月');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','预订数');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','预订总金额');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_ROOMUSAGE','房间使用');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','佣金估计');
/**
* @ignore
*/
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','佣金费率');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_LISTBOOKINGS','列表预订');



/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','寓所编号');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','旅客编号');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','附属机构编号');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','发票编号');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','预订合计');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','合同编号');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','合同数');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','货币代码');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','创建');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','归档');
/**
* @ignore
*/
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','归档日');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADDPROPERTY','新增寓所');
/**
* @ignore
*/
define('_JRPORTAL_WORD_SOURCE','来源 : ');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP','这是复式/多房间寓所么?');
/**
* @ignore
*/
define('_JRPORTAL_ADDPROPERTY_ISSRP_DESC','这个寓所像一个酒店/床位和早餐/早茶? 如果是这样, 选择是. 如果它是个单房间的寓所,类似小屋,那么选择否.');
/**
* @ignore
*/
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','增加明细至 n帐单');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','经理开发票');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','关联寓所 (如果适用)');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','数值');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','描述');
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"成功加入帐单明细至");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"查看订单");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"无法加入帐单明细至");
/**
* @ignore
*/
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"错误, 您没有为帐单设定数值");
/**
* @ignore
*/
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','您可以修改为那个寓所类型修改语言文件,这样房间就会变成,例如,DVDs,等.');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','您不能删除此寓所,因为这是您唯一有权限进入的寓所.如果您想不在前台使用它,您可以在工具栏中选择取消发布. ');
/**
* @ignore
*/
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','如果这是一个演示安装,而且您意图升级至Jomres单个正式版(只允许在系统上创建一个寓所),那么您需要先创建一个新的寓所, 然后在您将此授权码修改成您将购买的单个正式版授权码之前删除此系统提供的样本寓所.. ');

/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS',"邮件错误 log 信息?");
/**
* @ignore
*/
define('_JOMRES_COM_EMAILERRORS_DESC',"设此为是表明当一个错误log信息产生时您想自动复制jomres.net.这样允许我们能够提前主动和您一起来处理潜在的问题, 希望这些潜在问题不会发生.请留意,本机'localhost'上面此功能不适用. ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP',"这个寓所是酒店/床位和早餐/旅客寓所/退休金? ");
/**
* @ignore
*/
define('_JOMRES_COM_ISTHISANMRP_DESC',"设置选项的不同取决于您是想提供一个寓所里面的房间服务还是寓所本身旅居服务.设此为是表明您想提供房间服务,设此为否表明您想提供整个寓所的旅居服务. ");
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
