<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC','快速预订');
jr_define('_JOMRES_COM_MR_SHOWPROFILES','显示资料');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC','综合设置');
jr_define('_JOMRES_COM_MR_BACK','返回');
jr_define('_JOMRES_COM_MR_YES','是');
jr_define('_JOMRES_COM_MR_NO','否');
jr_define('_JOMRES_COM_MR_NEWTARIFF','新');
jr_define('_JOMRES_COM_MR_NEWPROPERTY','新寓所');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','新寓所特点');
jr_define('_JOMRES_COM_MR_NEWGUEST','新旅客');
jr_define('_JOMRES_COM_MR_SAVE','保存');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','姓名');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','入住');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','离店');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','特定用户管理功能');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME','姓名');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','用户名');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','当前指定');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','默认寓所');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','修改此处');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','权限');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','用户已修改');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','不适用');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','前台接待');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','寓所经理');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','所有预订');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','新预订');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE','编辑预订');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','入住/离店');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','旅客');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','房间');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','付款');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','名');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','姓');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','特别要求');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','请注意一些特别要求可能会带来一些额外费用.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','取消预订');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','门牌号');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','街道');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','市/县');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','邮编');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','地址');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','电话');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','电邮');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','无法取消此预订,因为旅客已入住');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','订金未支付');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','确认取消');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','预订取消');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','天后即可抵达');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','预订类型');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','私人');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','前台');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','网络');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME','房名');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER','房号');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR','楼层');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED','可供残疾人?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','最多容纳人数');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','房间类型简陈');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','房间类型描述');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','房间特点列表');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','订金支付');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','输入订金');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','合计支付');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','订金参考');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','预订');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','订金');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','订金保留');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','我们的房间');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','寓所');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','房间类型');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','修改旅客详细资料');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','名');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME','姓');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE','门牌号');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET','街道');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN','市/县');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','邮编');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','地址');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE','手机');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX','传真');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','信用卡号.');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','信用卡发行日期');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','信用卡失效日期');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','卡背最后3-4位数');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','信用卡持有人姓名');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','请选择');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','旅居天数');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','旅客数');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','合计');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','查看房间和寓所设置');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM','房间');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','房间特点');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','房间类型');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','寓所');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','寓所类型');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','房间');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','类型');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','房名');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','房号');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','楼层');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','可供残疾人?');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','最多容纳人数');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','特点');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','房间已新增');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','编辑明细');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','房间特点');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','特点描述');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','房间特点已增加');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','房间特点已更新');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','房间类型');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','房间类型缩写');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','房间类型描述');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','房间类型已增加');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','房间类型已更新');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','编辑明细');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','名称');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','街道');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','市/县');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','省/直辖市');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','国家');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','邮编');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','电话');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','传真');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','电邮');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','网址');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','特点');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','寓所已增加');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','寓所已更新');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','寓所特点');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','寓所特点缩写.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','寓所特点描述');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','寓所特点已增加');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','寓所特点已更新');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE','价目表');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','价目表标题');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','描述');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','有效自');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','有效至');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','每晚费用');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','最少天数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','最多天数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','最少人数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','最多人数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','房间类型');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','忽略每人每晚');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','周末照常营业');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','价目表已增加');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','价目表已更新');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','编辑明细');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','复制明细');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED','价目表已删除');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','编辑价目表');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','公众假期');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','预订已保存');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','预订一个旅客入住');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','预订一个旅客离店');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','列表预订信息');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','新预订');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','管理面板');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','旅客管理');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','寓所管理');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','检查房间是否可用');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','确认您的资料');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','名');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','姓');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','门牌号.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','街道');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','市/县');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','邮编');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','地址');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','手机');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','<font color="red" face="arial" size="4">没有房间满足这个特定需求</font>');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE','<center>谢谢您的预订,我们希望您在本店旅居愉快.<br><br> <b>请注意这只是预订的第一步,当您收到我们的确认函件以后该预订方可成为正式预订.</center>');
jr_define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','预订寓所: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','预订房间: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','入住: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','离店: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','名称: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','地址: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','手机: ');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','服务价格: ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE','预订入住的旅客 ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','选择旅客 ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','旅客已入住 ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','没有旅客今日入住');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','预订离店的旅客 ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','今日无旅客离店');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS','其他');
jr_define('_JOMRES_COM_A_TARIFFS','价目和货币单位');
jr_define('_JOMRES_COM_A_DISCOUNTS','折扣');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','上传文件');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS','当前设定');
jr_define('_JOMRES_COM_A_EXPLANATION','解释');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','单人设施');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','如果您想针对单人设施收费请确保此处设定为是');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','单人设施费用');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','订金使用百分率显示?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','订金支付是否采用总服务价格的百分率显示? 如果不是,订金支付应该标明为实际数额');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE','订金数额');
jr_define('_JOMRES_COM_A_TARIFFS_PER','每人,每晚');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC','如果您想按照每人每晚收费,请设定此处为是. 如果不是,那么收费将按照每房间每晚计价');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE','文件大小');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','最大图片尺寸 in Kb');
jr_define('_JOMRES_FRONT_MR_BOOKED','已订');
jr_define('_JOMRES_COM_CONFIRMATION_TITLE','确认信函');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR','尊敬的 ');
jr_define('_JOMRES_COM_CONFIRMATION_RATE_RULES','收费为每晚 - 每房间 ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','预订资料');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','谢谢您使用预订功能 在');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. 下面是您的预订资料. 请确认是否属实,如果发现有误请及时联系我们.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','在您抵达以前您的房间将被保留, 入住时间为下午 2 点以后.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','我们期盼和您见面于 ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','我们希望您在我们这里旅居愉快.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','当前我们希望您能关注下面内容.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','您确认该预订将成为正式的法律合同, 如果您有任何取消预订或者缩短旅居时间的行为发生,您仍然将按照该合同支付全额旅居费用.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','旅居期间本店不提供免费餐饮服务. 因此我们建议您使用我们的厨房设施.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','<i>有关取消预订和缩短旅居天数的收费</i> 如果您想取消预订,您必须提供书面文本申请. 关于取消预订服务的收费如下:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','30 天或更多');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' 只收取订金.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 至 30 天');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50%的总服务报价.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','至抵达日14天之内');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100%的总服务报价.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','17.5% 增值税已经包含在所有价格里面. 任何新增或者调整将被重新计费.');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT','打印确认信函');
jr_define('_JOMRES_COM_INVOICE_TITLE','打印发票');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS','夜晚数:');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED','双方就此合同内容同意如下:');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT','每晚收费:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','合计收费');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1','谢谢您的使用');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','我们期望和您共渡愉快时光.');
jr_define('_JOMRES_COM_INVOICE_PRINT','打印发票');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE','增加服务至帐单');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','服务描述');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE','服务价格');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','其他收费明细');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','其他收费明细,总费用合计:');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','明细增加至');
jr_define('_JOMRES_UPLOAD_IMAGE','上传图片');
jr_define('_JOMRES_FILE_UPLOAD','文件已上传');
jr_define('_JOMRES_FILE_ERROR_TYPE','您可以上传的文件类型:\n');
jr_define('_JOMRES_FILE_ERROR_EMPTY','上传前请先选择文件');
jr_define('_JOMRES_FILE_ERROR_NAME','文件名称需为英文字母且字母间没有空格.');
jr_define('_JOMRES_FILE_ERROR_SIZE','文件尺寸大小超标.');
jr_define('_JOMRES_FILE_NOT_UPLOADED','文件未上传.');
jr_define('_JOMRES_FILE_UPDATED','您的文件已上传.');
jr_define('_JOMRES_COM_A_JSCALENDAR','日历表');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE','日历表语言文件');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','选择可以用于Javascript日历表的语言文件. 请留意部分日历文件可能有小毛病, See http://sourceforge.net/tracker/?group_id=75569&atid=544287 for more information');
jr_define('_JOMRES_COM_A_CALENDARCSS','日历表CSS文件');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC','选择CSS文件,将被用于Javascript日历');
jr_define('_JOMRES_COM_A_ODDS','杂项.');
jr_define('_JOMRES_COM_A_ERRORCHECKING','显示错误核查');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC','设定为是将在页面底部显示核查的错误数. 它将让网络重新指向功能失效. 这将有助于您确认你可能出现了哪些小错误.');
jr_define('_JOMRES_FILE_DELETE','删除此图片');
jr_define('_JOMRES_FILE_DELETED','图片已删除');
jr_define('_JOMRES_COM_MR_ROOM_DELETE','删除');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','无法移除此房间, 此房间已经被预订. 先行取消预订然后方可删除房间.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED','房间已删除');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','删除房间特点');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','无法移除此房间特点, 部分房间已采用此特点. 先让这些房间终止使用此特点然后重新尝试移除.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','房间特点删除');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','删除寓所特点');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','无法移除此寓所特点, 某个寓所已采用此特点. 先让这个寓所终止使用此特点然后重新尝试移除.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','寓所特点已删除');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE','删除房间类型');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','无法删除此房间类型, 它已被某个房间使用. 重新让这个房间使用另外的房间类型然后移除此类型.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','无法删除此房间类型, 它已被某个价目表使用. 重新让这个价目表和其他房间类型关联然后移除此类型.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED','房间类型已删除');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE','删除寓所');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED','寓所已删除');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','您无权删除此寓所.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','原始图片尺寸');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','点选此处查看地图');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','寓所描述');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','入住时间');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','周边区域');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','驾车指导');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','机场距离');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','其他交通');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','规定及申明');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','地址');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','访客可在线预订');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','设定为是确保访客可在线预订.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','预订仅适用于固定期限');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','如果您设定为是, 预订仅适用于固定期限. 如果设定为否, 那么确保 "定义抵达日期" 没有被设定为是 除非您强迫旅客在某个特定日子抵达) 否则您将无法使用日历表.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD','预订时段:');
jr_define('_JOMRES_COM_A_BOOKING','预订房间');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','最大时段长, 例如 3x7个预订时段=21天');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY','这是公寓/小屋/别墅?');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','如果您正在出租寓所, 而不是那个寓所的一个房间. 如果是这样的话, 您必须确保这个寓所里面至少有一个房间可以使用.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING','复查预订');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING','确认预订');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','周一');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','周二');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','周三');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','周四');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','周五');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','周六');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','周日');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','一');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','二');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','三');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','四');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','五');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','六');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','日');
jr_define('_JOMRES_COM_A_AVLCAL','有效日历.');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','针对当日的字体颜色');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE','针对当月的字体颜色 ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','针对不在当月的字体颜色');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR','当房间可用时的表格背景颜色');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','不在显示月份中的表格背景颜色');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','已有预订的日期表格背景颜色');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','针对临时预订房间的表格背景颜色 (订金未付)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR','已过日期的表格背景颜色');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','已订/不可使用');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','可以预订');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','临时预订');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','预订抵达日期');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','仅供提供固定时段预订的站点使用. 选择必须抵达的日期.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','固定抵达日期');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1','旅居时段 (天数)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','显示预订可使用的日历?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','设此为是以显示预订功能可使用');
jr_define('_JOMRES_FRONT_AVAILABILITY','有效');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES','请点选一个可用日期查看预订表格.');
jr_define('_JOMRES_FRONT_BLACKBOOKING','私人预订');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW','新私人预订');
jr_define('_JOMRES_FRONT_DELETEGUEST','删除旅客');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','客户已删除');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','无法删除此旅客,因为他们已经预订那些开放的房间了. 先行取消预订然后重新尝试.');
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','实际房间费用:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','您好');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','谢谢您的预订与');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','预订简述如下:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','如果您对此预订和其他服务有问题, 请即时联系我们.');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','我们的电话是');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','或者您可以电邮至');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','吸烟');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER',"无所谓");
jr_define('_JOMRES_COM_CALENDAROUTPUT','日期输出格式');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC','允许用户修改日历输出格式');
jr_define('_JOMRES_COM_CALENDARINPUT','日历输入格式');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC','允许用户修改日历输出格式.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','固定时段的预订允许短期离店');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','短期离店时段长');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED','已发布');
jr_define('_JOMRES_COM_A_PAYPAL','贝宝');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','检查跟踪');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE','日期');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME','时间');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER','用户 (用户名)');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION','运作');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','查看细节');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','日期筛选');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','用户名筛选');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','营运筛选');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','状态');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','抵达未定');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','今日抵达');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','当前住客');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','今日离店');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','逾期离店');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','尚未抵达');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER','未知用户');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM','创建房间');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM','更新房间');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM','删除房间');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','创建房间特点');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','更新房间特点');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','删除房间特点');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','加入房间类型');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','更新房间类型');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','删除房间类型');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','创建寓所');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','更新寓所');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','删除寓所');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','创建寓所特点');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','更新寓所特点');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','删除寓所特点');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','编辑寓所特点');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','发布寓所');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF','创建价目表');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','更新价目表');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF','删除价目表');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE','增加服务费用');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','预订的旅客已入住');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','预订的旅客已离店');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','输入订金');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST','创建旅客');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST','更新旅客');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST','删除旅客');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM','预订一个房间');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA','创建额外服务');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','更新额外服务');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA','删除额外服务');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','发布额外服务.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING','输入私人预订.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','取消私人预订.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE','额外服务');
jr_define('_JOMRES_COM_MR_EXTRA_DESC','描述');
jr_define('_JOMRES_COM_MR_EXTRA_NAME','名称');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE','价格');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','额外服务已更新');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT','编辑明细');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED','额外服务已删除');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','额外服务管理');
jr_define('_JOMRES_COM_A_EXTRAS','在预订时显示额外服务?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC','设此为是表明您愿意在旅客进行预订时向他展示额外服务');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','额外服务帮助.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','私人预订起始日期');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','服务重新开始日期');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','私人预订');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','预订这些房间出现错误, 部分房间现在不可用.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','已被私人预订的房间');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','查看私人预订');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','没有私人预订列示');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','星级');
jr_define('_JOMRES_COM_A_SMOKING','显示是否可以吸烟?');
jr_define('_JOMRES_COM_A_SMOKING_DESC','设此为是显示是否可以吸烟.');
jr_define('_JOMRES_COM_A_RESET','重设');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED','预订已取消');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE','在此搜索:');
jr_define('_JOMRES_COM_A_SMOKING_OPTION','默认吸烟选项');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL','货币符号');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','例如 &amp;pound&#59; 请留意您应该使用HTML输入编码来显示需要的符号. 请访问 <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
jr_define('_JOMRES_COM_A_CURRENCYCODE','货币代码');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC','例如 GBP. 这将在向用户发送确认邮件中使用.');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','点选查看更多信息');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','限制高级预订?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','设此为是显示您将限制某些高级预订功能 (使用下一个表格以天数进行设定). 设此为是则意味着如果用户试图提前N天进行预订,那么他们的到达日将受到您今日设定的日期的限制');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','限制可提前预订的天数至:');
jr_define('_JOMRES_COM_A_TAX_WARNING','<font color=red>NOTE: 不推荐您对下面两个选项都设定为是, 您应该选择下面两个税率中适合你使用的一个税则. </FONT>');
jr_define('_JOMRES_COM_FRONT_ROOMTAX','税率');
jr_define('_JOMRES_COM_A_ROOMTAX','房间税率');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC','用于美洲市场. 房税向旅客收取. 您可以选择收取一个合并的和/或者固定的百分数. 请注意这些税费将应用到房费里面.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED','税率固定额度');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','税率百分率');
jr_define('_JOMRES_COM_A_EUROTAX','税费');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','税额百分率');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE','归档所有记录');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' 记录已归档');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','审查已归档记录');
jr_define('_JOMRES_FRONT_TARIFFS','我们的价目表');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE','价目名称');
jr_define('_JOMRES_FRONT_TARIFFS_DESC','价目描述');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','房间类型');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS','有效自');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS','有效至');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN','每人每晚');
jr_define('_JOMRES_FRONT_TARIFFS_PN','每晚');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','不含周末');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS','最少天数');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS','最多天数');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS','最少人数');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','最多人数');
jr_define('_JOMRES_FRONT_PREVIEW','预览');
jr_define('_JOMRES_COM_A_EDITINGMODEON','编辑中?');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT','当前文本');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT','新文本');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','更新定制的文本.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','编辑语言');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING','未归档记录数: ');
jr_define('_JOMRES_FRONT_PTYPE','寓所类型');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE','列表寓所类型');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','编辑寓所类型');
jr_define('_JOMRES_COM_PTYPES_PTYPE','寓所类型');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC','寓所类型描述');
jr_define('_JOMRES_COM_PTYPES_SAVED','寓所类型已保存');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','无法删除寓所类型. 此类型已被某个寓所使用, 请重新调整后尝试删除此寓所类型');
jr_define('_JOMRES_COM_PTYPES_DELETED','寓所类型已删除');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','付款提醒');
jr_define('_JOMRES_EXTRAS_NOEXTRAS','没有额外服务记入帐单');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT','订金');
jr_define('_JOMRES_COM_CHARGING_FULLAMT','全额');
jr_define('_JOMRES_COM_CHARGING_CONFIG','预订时收费额度');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC','使用此选项以决定预订时收取何种费用. 如果订金需要支付则选择订金选项, 如果需要全额支付请选择全额支付选项.');
jr_define('_JOMRES_COM_MONTHSTOSHOW','日历月份显示');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC','如果房间可用, 该显示多少月份?');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','签字谨代表 ');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST','接口');
jr_define('_JOMRES_COM_A_CANCEL','取消');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC','请选择你不想对外提供服务的房间, 以及相应时段. <br>如果房间没有特定标记, 它将不能用于私人预订,直到任何一个公开预订已经完成或者取消.<br/> 当您选择了合适日期, 点选蓝色 "启用" 按钮重新核查房间是否可用. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN','<center><b>您已退出站点</b> 请重新登陆后继续操作.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON','理由');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','使用支付接口?');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','设此为是表示您将采用网络支付接口. <b>注意:</b>它将不会关闭在预订过程中已经显示的计算的订金. To disable this you can edit the templates that show rooms and wrap the elements that refer to deposits inside a class whos font and bg colour are the same.');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','请选择您的付款方法.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED','使用接口?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','修改的插件设定');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','插入的插件设定');
jr_define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK','External link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','查看信用卡');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','更新信用卡');
jr_define('_JOMRES_MR_CREDITCARD_EDIT','编辑信用卡');
jr_define('_JOMRES_COM_A_EDITICON','编辑图标尺寸');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','批量上传寓所图片');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','图片已存在于目录');
jr_define('_JOMRES_COM_A_SLIDESHOWS','幻灯片');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','显示链接至幻灯片?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','这里显示幻灯片?');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','幻灯片缩略图高度');
jr_define('_JOMRES_FRONT_SLIDESHOW','幻灯片');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />抱歉, 此寓所没有图片. 如果您想使用幻灯片功能请先行批量上传图片.');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','显示链接至价目表?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED','允许跳出窗口?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC','如果设定为否, 那么原本链接应该打开一个跳出窗口转而成为在文本下方直接显示. 试验性质! ');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS','上传幻灯片图片');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','使用此表为此寓所批量上传图片.<br/><b>注意</b> 重名图片文件将被覆盖. 此表格不用于特定房间图片和寓所标题图片, 您需要在寓所管理区域上传上述图片.<br/><b>注意</b> 此处上传的图片将被置入 /images/stories/jomres/*property_uid* 文件夹. 如果文件夹不存在, 它将被创建, 除非设置里面已有专门存放此类图片的文件夹安排.');
jr_define('_JOMRES_A_TABS_MISC','杂项');
jr_define('_JOMRES_A','站点设置');
jr_define('_JOMRES_A_GLOBALPFEATURES','使用全局寓所特点');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC','设此为是表示您想让所有寓所特点均显示为同一内容，该内容为站点管理员提前设定.');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO','如果您想为此特点设定一幅图片,您需要首先上传图盘至 /images/stories/jomres/pfeatures/ 文件夹. ');
jr_define('_JOMRES_A_ICON','标识');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION','选择搜索插件来使用.');
jr_define('_JOMRES_FRONT_NORESULTS','<b>抱歉, 没有结果可供参考. 请重新输入关键词来搜索.</b>');
jr_define('_JOMRES_AREYOUSURE','您确认你想执行此操作?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','预订一个房间');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','预订这个寓所');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV','安全码');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','内容区显示价目表?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','地址');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','详细信息');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','点选查看房间及是否开放可用');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','显示价目表信息');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','在此链接下显示地址信息');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','在此链接下显示详细寓所信息');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','在此链接下显示房间和是否开放可用信息');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','在此链接下显示价目信息');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','同一费率价目表');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','均价费率');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL','选择你想使用的价目模式');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"您的价目计算方法有两种选择. 第一,“同一费率”方法允许您向旅客在旅居期间提供不同的价目计费，而每种计费费率在整个旅居期间是恒定不变的.如果您想在同一天提供不同价目服务这就变的很有用,比如:早餐/中餐/晚餐价格。 第二,选择 '均价费率' ,如果您想根据日期来调整您的价格和收费. 系统会自动找到在预订期间的每日所有选择使用的服务的价目情况并汇总,最后给出该期间的平均费率。");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','显示离店日期输入?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"设此为否表明您不想在预订表格显示离店日期输入表格. 仅当您知道您的计划是可以使用此功能, 因为离店日期通常在入住日期之后.");
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC','描述限制');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"限制显示寓所描述时的字数.");
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE','使用日期() 制式风格?');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','设此为是以格式化输出日期模式采用() (See <a href="http://www.php.net/manual/en/function.date.php">这里</a>). 设此为否以使用 strftime() 格式 (see <a href="http://www.php.net/manual/en/function.strftime.php">这里</a> eg. %b %d %Y ');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH','发布');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH','未发布');
jr_define('_JOMRES_A_GLOBALROOMTYPES','使用全局房间类型');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC','设此为是表明您将所有的房间类型均设定为一种类型,此类型由站点管理员在期初设定. 如果您意图查询房间类型的话,您需要设此为是.');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO','如果您想为此房间类型设定照片,您需要首先上传图片至 /images/stories/jomres/rmtypes/ 文件夹. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND','输入了错误的背景颜色');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES','预订表格中的默认国家');
jr_define('_JOMRES_JAVASCRIPT_','红星标注的明细条目为必须的.');
jr_define('_JOMRES_COM_SELFREGISTRATION','用户可以注册他们自己的寓所?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC','设此为是表明你允许用户在没有站点管理员干预的情况下自行编辑他们的寓所.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','请提供您寓所所在的国家和城市区域.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','请完成您的寓所细节.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','红星标注的明细条目为必须的.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','创建寓所');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED',"抱歉, 您不能通过此系统创建一个寓所. 您必须注册成为会员,登陆后方可操作而且您此前没有在此系统上创建过寓所.");
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY','创建寓所:');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','为用户:');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR','年初起显示日历?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','自今年起显示日历.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE','可使用房间数');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK','返回寓所信息');
jr_define('_JOMRES_FRONT_ROOMTYPES','房间类型');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','随机搜索限制');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS','在价目列表中显示货币兑换链接?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT','兑换率');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR','允许用户编辑使用 html 编辑器?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS','使用此表完成您的预订. 将鼠标置于 "i" 图案将得到更多信息指导. 修改您的预订数据,比如抵达和离店日期,旅客数目,选择那些可用的房间. 点选那些可用的房间,加入到您的预订之中. 当上述操作完成, 您可以提出额外要求,并提供你的详细信息. 当预订表信息完整后它将显示一个提交按钮,您将可以提交预订表.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','使用此表完成您的预订. 将鼠标置于 "i" 图案将得到更多信息指导. 修改您的预订数据,比如抵达和离店日期,旅客数目,选择那些可用的房间. 当上述操作完成, 您可以提出额外要求,并提供你的详细信息.  当预订表信息完整它将显示一个提交按钮,您将可以提交预订表.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS','预订细节');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC','选择您预订要求的细节');
jr_define('_JOMRES_AJAXFORM_AVAILABLE','有效 ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC','选择您要求的房间');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','查看此处确认该房间在您要求的期间内是否可用.');
jr_define('_JOMRES_AJAXFORM_EXTRAS','旅居额外服务');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC','选择您希望获得的任何额外服务并增加到预订表格中');
jr_define('_JOMRES_COM_PERDAY','每晚');
jr_define('_JOMRES_AJAXFORM_ADDRESS','您的地址');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC','请输入您的资料. 除了您的手机号码外其他资料必填');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS','可用房间');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS','已选房间');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>最早到达日期为:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM','每晚:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','合计:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS','额外服务:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX','税费:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','折扣:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL','帐单合计:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','旅客');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION','点选增加这个房间到您的选择中');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','从您的选择中点选移除这个房间');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','旅客类型');
jr_define('_JOMRES_VARIANCES_TYPE','类型');
jr_define('_JOMRES_VARIANCES_TYPE_TT','旅客类型, 比如儿童 年龄在 5-10, 或者 学生 ');
jr_define('_JOMRES_VARIANCES_NOTES','备注');
jr_define('_JOMRES_VARIANCES_NOTES_TT','注意,你可能会用到旅客类型');
jr_define('_JOMRES_VARIANCES_MAXIMUM','最大');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT','在旅客预订表中可以被选择的这个旅客类型的最大值');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE','为百分率');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','这个计算的数据是针对房间的基本数据计算的百分率. 如果此设定为开意味着 您指定的数据将从房间数据中简单的增加或者减少.');
jr_define('_JOMRES_VARIANCES_POSNEG','增加差异?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT','此计算数据已增加至或者移除自房间计算的基础数据. 如果您想让这个数据成为一个折扣那么请设定为否. ');
jr_define('_JOMRES_VARIANCES_VARIANCE','差异');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT','差异值');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','调整旅客类型订单');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','发布旅客类型');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','删除旅客类型');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','创建旅客类型');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','更新旅客类型');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','更新旅客类型');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK','在寓所信息页面显示房间开放可用的日历?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL',' <b>仅</b> 显示可以开放使用的日历/房间列表?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','设定为是则为关闭显示寓所标题和资料, 因此只有那些可开放使用的寓所信息方可显示. 只供那些租出寓所的人士使用 (比如公寓, 小屋等).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL','抵达-离店 最小间隔');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','在预订表中显示的最小的抵达日期和离店日期的间隔.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','预订表房间列表显示房间数目');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','预订表房间列表显示房间名称');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','预订表房间列表显示价目表');
jr_define('_JOMRES_ORDER','订单');
jr_define('_JOMRES_REQUIREDFIELDS','必填');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','天至入住前');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','最少天数必须有效, 自"今日"起, 在抵达日之前.');
jr_define('_JOMRES_DTV','日期类型变更');
jr_define('_JOMRES_DTV_DOW','日');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','默认旅客类型');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','默认旅客类型编号. 如果您选择旅客编号, 那么你输入的第一个旅客类型编号即为默认编号.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','仅有登陆会员方可在线预订?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK','抱歉, 您必须成为注册会员方可在线预订. 请点选此处注册. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','当前预订链接的字符颜色');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','周末边框');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY','房间已预订');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY','私人预订');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','订金小数四舍五入?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','需要预付订金?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','按照周来统计和存储价目收费?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','您可以选择是来按照每日还是每周统计价目收费. 如果按照每周汇总统计,您必须设此为是.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','每周');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','固定抵达日期再来:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','当选定固定抵达日期, the number dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available) ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','吸烟选项无效');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','抵达日期不正确');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','离店日期不正确');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','预订的旅居期限太短. 旅居期限至少为:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','您的旅居期间为');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','客户类型差异不正确');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','选择您的客户类型/数目');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','就当前价目来说,你的团队成员太多');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','您多选房间了, 请选择房间并且移除');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','旅客数目超过现有床位提供');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','您需要增加房间数');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','选择一个房间');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','名必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','姓是必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','门牌号必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','地址必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','市/县必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','省/直辖市必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','邮编必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','国家必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','详细地址必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','手机号码必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','电子邮件地址必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','邮件地址不正确');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','无法发送电邮');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES','我们有空余房间!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','尚未选择房间');
jr_define('_JOMRES_BOOKING_NUMBER','预订号.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','输入Ok来预订, 信息框背景');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA','卸载模板数据?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','数据是百分比');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','设此为是表明个人计价按照百分比显示. 设定为不是则意味着显示为汇总数值.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST','可用的房间/价目限制');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC','可用于在预订表格中设定可供选择的房间/价目限制数目. 设定为零表明您不想使用限定功能. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES','目前没有空余房间提供!');
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW','');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','全局编辑模式?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','请小心此设置. 设定为是, 编辑方式将影响现有的所有编辑文本.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO','使用全局货币?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC','选择为是表明强迫所有寓所选择同一货币 (e.g. & # 8 3 6 4 ;)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','全局货币符号');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED','组件被修改');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','设此为是表明组件被修改则顶部标题和模块位置无法显示');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','超级寓所管理员');
jr_define('_JOMRES_COM_WEEKENDONLY','仅限周末');
jr_define('_JOMRES_COM_WEEKENDDAYS','周末');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC','设定您的周末天数. 价目表会在显示房间列表时判断是否应该包含周末或者不包含周末.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','在增加寓所信息前请选择所在国家');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','上传寓所照片前请先保存寓所信息资料');
jr_define('_JOMRES_TARIFFSFROM','价格自 - ');
jr_define('_JOMRES_SEARCH_ALL','所有');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','根据国家搜索');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH','根据地区搜索');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH','根据市/县搜索');
jr_define('_JOMRES_SEARCH_FEATURE_INFO','根据特点搜索.');
jr_define('_JOMRES_SEARCH_BUTTON','搜索');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO','输入想要查找的关键词并按搜索按钮.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL','搜索词(s): ');
jr_define('_JOMRES_SEARCH_AVL_INFO','请输入您打算抵达的日期和离店的日期,点选搜索看看哪些寓所可以提供满足你要求的服务.');
jr_define('_JOMRES_SEARCH_PTYPES','根据寓所类型显示所有寓所.');
jr_define('_JOMRES_SEARCH_RTYPES','根据房间类型显示所有寓所.');
jr_define('_JOMRES_SORTORDER_DEFAULT','默认');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME','寓所名称');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION','寓所所在省/直辖市');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN','寓所所在市/县');
jr_define('_JOMRES_SORTORDER_STARS','星级');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST','寓所列表');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS','寓所信息 - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM','预订表格');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','更新您的信息');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','重新查看可用的房间<br/>(房间选择将被重设)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','重新查看可用的房间');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','修改您要求的额外服务');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','修改您的房间选择');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','更新您的地址信息');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','抱歉,一个或多个地址信息不正确.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','房间图片');
jr_define('_JOMRES_CURRENCYFORMAT','货币格式');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES','以图片显示经理选项');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB','搜索选项');
jr_define('JOMRES_COM_A_AVAILABLELOGS','可用的 Logs');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES','没有 log 输入. 这是正常的, 您需要手动修改 jomres.php to trigger logging');
jr_define('JOMRES_COM_A_MESSAGE','信息');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL','正常');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED','高级');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','细微管理');
jr_define('JOMRES_COM_A_TARIFFMODE','价目设置模式');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>警告: 在不同价目类型之间转换将丢失某些数据. 查看下面的说明</b>.
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
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','在寓所资料页面显示房间列表?');
jr_define('JOMRES_PROPERTYTYPE','寓所类型');
jr_define('JOMRES_COM_A_SRPONLY','仅提供单人房');
jr_define('JOMRES_MAXPEOPLEINROOM','每房间最多人数');
jr_define('JOMRES_MAXPEOPLEINBOOKING','预订最多人数');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD','增加备注');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT','编辑备注');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE','取消备注');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW','查看备注');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','增加新备注');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','编辑新备注');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','删除新备注');
jr_define('_JOMCOMP_MYUSER_MENUTITLE','我的选项');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS','预订列表');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS','我的预订');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING','查看预订');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES','查看偏好');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','您尚未增加任何偏好!');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','增加至偏好');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE','寓所类型');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','当地寓所');
jr_define('_JOMCOMP_WISEPRICE_TITLE','价格');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE','有效');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC','这个插件允许你自动修改房间价格设置.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','大部分业务在给定日期将基于一个指定类型的一定数量的房间基础上重新计算房价. 这里就可以为一个房间/寓所实施折扣服务提供空间.<br/>启动此服务用以吸引旅客.<br/> 开启此服务前必须设定旅居最少天数, 这样百分比选项将允许您设定在给定折扣实施前的房间可用数目. 不过请注意, 如果大量房间被预订那么当前折扣水平将被用于所有房间并且不会因为更多房间被选择而降低.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD','起点 (自今日起到抵达日的天数)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10','10% 或更少的房间被预订');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25','25%或更少的房间被预订');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50','50%或更少的房间被预订');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75','75%或更少的房间被预订');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT','折扣%');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' 已经实施打折自');
jr_define('_JOMCOMP_WISEPRICE_TO',' 至');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' 房价未打折 ');
jr_define('JOMRES_COM_A_MAPSKEY','Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
jr_define('JOMRES_COM_A_USE_SSL','在预订表中使用 SSL?');
jr_define('JOMRES_COM_A_USE_SSL_DESC','您需要确保您有一个正确的SSL认证 for ');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL','最后截止期');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE','最后时刻有效?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','设此为是表明您允许签署最后时刻合同.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD','起点');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','如果预订已存在且抵达日期离预订当日只有N天，那么折扣可以实施。');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT','折扣');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','百分比');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','此预订已启用折扣服务!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','旅居费用已经缩减 by ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','此寓所提供最后时刻折扣为');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' %,如果您预订的抵达早于');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. 现在预订可以拿到最大折扣!');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE','%或更多.');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO','详细价目信息');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','设此为是用以在寓所信息和价目跳出窗口显示更多详细价目信息');
jr_define('JOMRES_COM_A_MINIMALCONFIG','最小化设置选项');
jr_define('_JOMCOMP_AMEND','修整预订-寓所选择');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY','选择新寓所');
jr_define('_JOMCOMP_AMEND_HEADER','原始合同:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID','订金已付');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE','订金未付');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','重新调整后 共计');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','重新调整后 订金');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL','取消');
jr_define('_JRPORTAL_CPANEL','JR入口管理面板');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE','默认佣金费率');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','选择默认佣金费率将用于一个寓所,前提是还没有其他佣金费率用于此寓所.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES','列表佣金费率');
jr_define('_JRPORTAL_CPANEL_PATETITLE','佣金费率');
jr_define('_JRPORTAL_CRATE_TITLE','标题');
jr_define('_JRPORTAL_CRATE_TYPE','类型');
jr_define('_JRPORTAL_CRATE_VALUE','佣金费率');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE','货币代码');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES','列表寓所');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME','寓所名称');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','寓所地址');
jr_define('_JRPORTAL_PROPERTIES_LEGEND','带有红色背景的寓所表示该寓所尚未实施佣金费率.');
jr_define('_JRPORTAL_STATS_PATETITLE','统计');
jr_define('_JRPORTAL_STATS_STATTYPE','统计为:');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','寓所-点击次数');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','寓所查看');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','预订数');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','预订总金额');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','佣金估计');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','佣金费率');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS','列表预订');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','寓所编号');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','旅客编号');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','附属机构编号');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','发票编号');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','预订合计');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','合同编号');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','合同数');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','货币代码');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','创建');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','归档');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','归档日');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','增加明细至 n帐单');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','经理开发票');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','关联寓所 (如果适用)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','数值');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','描述');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"成功加入帐单明细至");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"查看订单");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"无法加入帐单明细至");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"错误, 您没有为帐单设定数值");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','您可以修改为那个寓所类型修改语言文件,这样房间就会变成,例如,DVDs,等.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','您不能删除此寓所,因为这是您唯一有权限进入的寓所.如果您想不在前台使用它,您可以在工具栏中选择取消发布. ');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','如果这是一个演示安装,而且您意图升级至Jomres单个正式版(只允许在系统上创建一个寓所),那么您需要先创建一个新的寓所, 然后在您将此授权码修改成您将购买的单个正式版授权码之前删除此系统提供的样本寓所.. ');
jr_define('_JOMRES_COM_EMAILERRORS',"邮件错误 log 信息?");
jr_define('_JOMRES_COM_EMAILERRORS_DESC',"设此为是表明当一个错误log信息产生时您想自动复制jomres.net.这样允许我们能够提前主动和您一起来处理潜在的问题, 希望这些潜在问题不会发生.请留意,本机'localhost'上面此功能不适用. ");
jr_define('_JOMRES_COM_ISTHISANMRP',"这个寓所是酒店/床位和早餐/旅客寓所/退休金? ");
jr_define('_JOMRES_COM_ISTHISANMRP_DESC',"设置选项的不同取决于您是想提供一个寓所里面的房间服务还是寓所本身旅居服务.设此为是表明您想提供房间服务,设此为否表明您想提供整个寓所的旅居服务. ");
// Jomres v3.0.6
jr_define('_JOMRES_COM_JOMRESEMAILCHECK',"使用Jomres电子邮件地址检查？ ");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"强制执行严格的检查发送的电子邮件。一些安全Web服务器将抛出一个500内部错误，如果您尝试到一个不存在的电子邮件地址发送一封电子邮件。开关允许我们之前使用的PHP的checkdnsrr功能，试图发送一封电子邮件，以防止这些500错误。 ");
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"住宿共");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"晚");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"每间房");
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Enhance Your Stay Total ");
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Price Summary ");
jr_define('_JOMRES_CONFIRMATION_ALERT',"Please read and agree to ");
jr_define('_JOMRES_CONFIRMATION_HEADER',"A summary of your booking is shown below.<br /> To make any changes, please click on the Amend Reservation button. ");
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT',"If you need to change any of the above information then please click here");
jr_define('_JOMRES_CONFIRMATION_AMEND',"Amend Reservation");
jr_define('_JOMRES_CONFIRMATION_SPECIALS',"Please enter any special requests in the box below.");
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"I confirm that the above information is correct and agree to the ");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"per person per night ");
// Jomres 3.1.10
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	jr_define('_PN_OF','of');
if (!defined('_PN_START'))
	jr_define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	jr_define('_PN_PREVIOUS','Prev');
if (!defined('_PN_NEXT'))
	jr_define('_PN_NEXT','Next');
if (!defined('_PN_END'))
	jr_define('_PN_END','End');
if (!defined('_PN_RESULTS'))
	jr_define('_PN_RESULTS','Results');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>Please enter the message you\'d like to send to ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact hotel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Property enquiry from ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Please select your required accommodation from the list on the right');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min rooms already selected');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max rooms already selected');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS',"Available"); 
jr_define('_JOMRES_AVLCAL_QUARTER',"Some bookings");
jr_define('_JOMRES_AVLCAL_HALF',"Half booked");
jr_define('_JOMRES_AVLCAL_THREEQUARTER',"Mostly booked");
jr_define('_JOMRES_AVLCAL_FULLYBOOKED',"Fully booked");
jr_define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View property task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add property type to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add property name to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append property id to property name');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Property type');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default property type');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all property types');
jr_define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X rooms selected');
jr_define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
jr_define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
jr_define('JOMRES_WORD_SAVING','Saving...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
jr_define('_JOMRES_COM_LOGGING','Jomres logging');
jr_define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');
jr_define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
jr_define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
jr_define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
jr_define('_JOMRES_COM_LOGGING_SYSTEM','Misc ');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form room list show room type image');
jr_define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
jr_define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
jr_define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
global $jomresConfig_secret;
jr_define('_JOMRES_COM_A_CRON_METHOD','Method');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
jr_define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
jr_define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
jr_define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
jr_define('_JRPORTAL_TAXRATES_CODE',"Tax code");
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
jr_define('_JRPORTAL_TAXRATES_RATE',"Rate");
jr_define('_JRPORTAL_INVOICES_TITLE',"Invoices");
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
jr_define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
jr_define('_JRPORTAL_INVOICES_USER',"User");
jr_define('_JRPORTAL_INVOICES_STATUS',"Status");
jr_define('_JRPORTAL_INVOICES_RAISED',"Raised");
jr_define('_JRPORTAL_INVOICES_DUE',"Due");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
jr_define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
jr_define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");
jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");
jr_define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");
jr_define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
jr_define('_JRPORTAL_COUPONS_CODE',"Coupon code");
jr_define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
jr_define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
jr_define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
jr_define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
jr_define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
jr_define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
jr_define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR',"Dear");
jr_define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
jr_define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
jr_define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
jr_define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');
// Not used yet
jr_define('_JOMRES_COM_GROWL','Use Jomres messaging');
jr_define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
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
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection.");
jr_define('_JOMRES_LASTEDITED_DB','Database template Last edited');
jr_define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
jr_define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
jr_define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
jr_define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
jr_define('_JOMRES_COM_NEWUSER','Create new user on booking');
jr_define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
jr_define('_JOMRES_CLICKTOREGISTER','Click here to register your property');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");
jr_define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
jr_define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
jr_define('_JOMRES_CONTROLPANEL','Control Panel');
jr_define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
jr_define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
jr_define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
jr_define('_JOMRES_COM_YOURBUSINESS','Your business details');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
jr_define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
jr_define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');
jr_define('_JOMRES_EDITINGMODE_ON','Editing mode on');
jr_define('_JOMRES_EDITINGMODE_OFF','Editing mode off');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
jr_define('_JOMRES_REALESTATE_TITLE','Real estate listing');
jr_define('_JOMRES_REALESTATE_YESNO','Is this property a Real estate listing?');
jr_define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
jr_define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
jr_define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
jr_define('_JOMRES_APIKEY_REMAKE','Make new API key');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
jr_define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single property installation?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
jr_define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
jr_define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> for more information on this subject.');
jr_define('_JOMRES_SUPPORTKEY','Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limit property registration to one country?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Properties are located in this country : ');
jr_define('_JOMRES_JQUERYTHEME','Jquery theme');
jr_define('_JOMRES_JQUERYTHEME_DESC','Choose a jquery theme to use for the property details tabs.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED','We are sorry, but that property is not currently available.');
jr_define('_JOMRES_REVIEWS','Reviews');
jr_define('_JOMRES_REVIEWS_TITLE','Review title');
jr_define('_JOMRES_REVIEWS_DATE','posted on ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS','There are no reviews for this property yet.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Would you like to be the first to review this property?');
jr_define('_JOMRES_REVIEWS_IAGREE','I agree with this review');
jr_define('_JOMRES_REVIEWS_IDISAGREE','I disagree with this review');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING','Average Rating: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES','Total Votes:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW','Add a new review.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','You need to be logged in to post a review.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY','Tell us what you think about this property : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID','This reviewer told us : ');
jr_define('_JOMRES_REVIEWS_PROS','Pros: ');
jr_define('_JOMRES_REVIEWS_CONS','Cons: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE','Submitted On: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED','You have already reviewed this property, you can\'t post another review about it.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW','Sorry, but you are not allowed to post reviews on this site.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW','Click to show reviews');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' guests agree with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' guests do not agree with this review.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' guest agrees with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','guest does not agree with this review.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Thank you for sharing your opinion of this review.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Thank you, but you have already shared your opinion of this review.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Please ensure that all fields have been filled.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Please summarise your review by entering a title');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Please enter a more complete review in the description box');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Please enter the good parts of your experience of being a guest at this property');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Please enter any negative thoughts you might have of your experience');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Please rate the hostpitality you received from the staff');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Please rate your opinion of the property\s locale');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Please provide your opinion of the cleanliness of the property');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Please rate the accommodation. Was it comfortable or threadbare');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Please provide your opinion of whether it was value for money');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Please rate the services');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Review summary');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Your experience in more detail');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Thank you for submitting your review.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL','Use Jomres review functionality?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatically publish reviews?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','If you set this to No you will need to manually publish reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Set reviews to test mode?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Number of unpublished reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total number of reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publish/Unpublish review');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Delete review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW','Report review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Review reports');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Please enter your report');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
jr_define('_JOMRES_REVIEWS_SUBMIT','Submit');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Report created by ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
jr_define('_JOMRES_REVIEWS_RATING','Ratings (1 = poor 10 = excellent) ');
jr_define('_JOMRES_REVIEWS_RATING_1','Hospitality  ');
jr_define('_JOMRES_REVIEWS_RATING_2','Location ');
jr_define('_JOMRES_REVIEWS_RATING_3','Cleanliness ');
jr_define('_JOMRES_REVIEWS_RATING_4','Accommodation ');
jr_define('_JOMRES_REVIEWS_RATING_5','Value for money ');
jr_define('_JOMRES_REVIEWS_RATING_6','Services ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY','Reviewed by : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE','Hide reviews');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Show Booking form in property details page?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE','Are prices set inclusive of tax?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Extras tax:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Start range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','End range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Rate');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Set rates');
jr_define('_JOMRES_PARTNERS_TITLE','Partners');
jr_define('_JOMRES_CALENDAR_TODAY','Today');
jr_define('_JOMRES_CALENDAR_PREV','Previous');
jr_define('_JOMRES_CALENDAR_NEXT','Next');
jr_define('_JOMRES_CALENDAR_RTL','false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM','Room ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS','guest(s). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION','This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Note that your property is not yet published, only you can see the property, site visitors will not see it");
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Default search result order');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Change this option to change the order that search results are presented by default.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Show search result order dropdown');
jr_define('_JOMRES_ROOMMSLIST_STYLE','Rooms list style');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC','In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Room types');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)checking availability');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Rebuilding available rooms list');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calculating totals');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Finished form update');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY','Calendar week start day, Sunday or Monday');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Only property guests can review?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Per room');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM','Guests per room : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING','Guests per booking : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS','Number of rooms');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tariff default price');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"This only applies to new tariffs");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Years to show");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Defines the number of years to show when editing a micromanage tariff");
jr_define('_JRPORTAL_MONTHS_LONG_0','January');
jr_define('_JRPORTAL_MONTHS_LONG_1','February');
jr_define('_JRPORTAL_MONTHS_LONG_2','March');
jr_define('_JRPORTAL_MONTHS_LONG_3','April');
jr_define('_JRPORTAL_MONTHS_LONG_4','May');
jr_define('_JRPORTAL_MONTHS_LONG_5','June');
jr_define('_JRPORTAL_MONTHS_LONG_6','July');
jr_define('_JRPORTAL_MONTHS_LONG_7','August');
jr_define('_JRPORTAL_MONTHS_LONG_8','September');
jr_define('_JRPORTAL_MONTHS_LONG_9','October');
jr_define('_JRPORTAL_MONTHS_LONG_10','November');
jr_define('_JRPORTAL_MONTHS_LONG_11','December');

jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Property management process");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"There are different management processes depending on the way you want to list your property/business.");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Rental");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Choose the rental option if you are booking out rooms in a property (eg. Hotel/B&B/Villa/Apartment)");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Realestate/simple listing");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Choose the real estate option if you are not offering any booking functionality at all, (eg. A property/item for sale)");

jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');

jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Please select an option for your booking');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Switches on html editors in property details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Fullscreen view");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Normal view");
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER',"Show the timezone switcher in the property manager's toolbar?");

jr_define('_JOMRES_PARTNER_DISCOUNT',"Partner discount ");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Search user");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Existing partners");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a partner to be taken to the partner administration page.");

jr_define('_JOMRES_PARTNER_SHOW_TITLE',"Partner :");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Search for a property");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Current properties");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Click on a property to edit the partner's discount settings for that property.");


// 4.6
jr_define('_JOMRES_SUSPENSIONS_TITLE',"Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) ");
jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their properties will be unpublished. Super property managers cannot be suspended.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"This account has been suspended, it is not currently possible to administer your propert(ies) using this account.");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Manager account suspended");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Manager account reinstated");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.");
jr_define('_JOMCOMP_MYUSER_REMOVE','Remove favourite');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE','Booking data archive');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT','Edit account');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Search users");
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user.");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Existing managers");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a manager to be taken to the manager administration page.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Search by guest numbers");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Show the search by guest number dropdown");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Search by stars");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Show the search by stars dropdown");
jr_define('_JOMRES_SEARCH_GUESTNUMBER','Number of guests');
jr_define('_JOMRES_SEARCH_STARS','Number of stars');

jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Commission invoices");
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Number of properties");

// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY',"Load Jomres jQuery library?");
jr_define('_JOMRES_CONFIG_JQUERY_DESC',"You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Thumbnails are created automatically for uploaded images.');

// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Small thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Small thumbnails max height (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Medium thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Medium thumbnails max height (px).');
jr_define('_JOMRES_TOUCHTEMPLATES','Label Translations');

jr_define('_JRPORTAL_ROI_TAB',"ROI");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE',"Use commission functionality?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Set this to Yes to show the manager commission invoices which have been raised.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Manager bookings create commission invoices?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"If a manager makes a booking, does that also create a commission invoice line item?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"A new commission invoice has been raised");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto suspend managers where invoices are marked as Pending?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Auto suspend threashold");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.");

//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT','Language context');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.');

// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Advanced site config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Silver, Jomres Lite users will not be able to take full advantage of the features that they enable.');

jr_define('_JOMRES_CONFIG_JQUERY_UI',"Load Jomres jQuery UI library?");

jr_define('_JOMRES_SORTORDER_PRICE_DESC','Price (highest first)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC','Price (lowest first)');

// 4.7.6

jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Price summary and estimates should be priced as per night/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per night');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per week');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Per month');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');

jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','week(s) at ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','month(s) at ');

// 4.7.7

jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','How should the search option for people numbers work?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Please wait, your order is being processed and you will be redirected to the Paypal website.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','If you are not automatically redirected to Paypal within 5 seconds...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Click Here');
// 4.7.8

jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Booking valid from");
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Booking valid to");
jr_define('_JRPORTAL_COUPONS_GUESTNAME',"Guest name");
jr_define('_JRPORTAL_COUPONS_DESC_478',"Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"With your coupon, this booking has been discounted from ");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," to ");

jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Set this to No to disable loading of both the Jquery UI javascript and CSS files.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Load Jomres jQuery UI CSS library?");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Set this to No to disable only the jquery UI CSS file.");

//v5.1 
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc tax");
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
jr_define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
jr_define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");

// 5.2.1
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
jr_define('_JOMRES_DEBUGGING_TAB','Debugging');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Rooms tax:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');

jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resources based on their features.');

jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
jr_define('_JOMRES_DATEPERIOD_SECOND','second');
jr_define('_JOMRES_DATEPERIOD_MINUTE','minute');
jr_define('_JOMRES_DATEPERIOD_HOUR','hour');
jr_define('_JOMRES_DATEPERIOD_DAY','day');
jr_define('_JOMRES_DATEPERIOD_WEEK','week');
jr_define('_JOMRES_DATEPERIOD_MONTH','month');
jr_define('_JOMRES_DATEPERIOD_YEAR','year');
jr_define('_JOMRES_DATEPERIOD_DECADE','decade');
jr_define('_JOMRES_DATEPERIOD_S','s');
jr_define('_JOMRES_DATEPERIOD_AGO','ago');
jr_define('_JOMRES_DATEPERIOD_FROMNOW','from now');

jr_define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
jr_define('_JOMRES_WHOLEDAY_DESC','By default the system bookings resources out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

jr_define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');

jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

jr_define('_JOMRES_EDIT_PROFILE','Edit Profile');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
jr_define('_JOMRES_IMAGE','Image');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business types that can show this feature');
jr_define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
jr_define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");

jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

jr_define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
jr_define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

jr_define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternate Password");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

jr_define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

jr_define('_JOMRES_QUICK_INFO',"Quick Info");

jr_define('_JOMRES_MENU_SHOW',"Show");
jr_define('_JOMRES_MENU_HIDE',"Hide");
jr_define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
jr_define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

jr_define('_JOMRES_ACCESS_CONTROL_TITLE',"Menu Access control");
jr_define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");


jr_define('_JOMRES_DEBUGGING_SUBJECT','Subject');
jr_define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
jr_define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
jr_define('_JOMRES_METATITLE','Meta title');
jr_define('_JOMRES_METADESCRIPTION','Meta description');
jr_define('_JOMRES_FOUNDPROPERTIES',"Properties found");
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

jr_define('_JOMRES_MYPROPERTIES','My businesses');


jr_define('_JOMRES_CART_TITLE','My proposed bookings');
jr_define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
jr_define('_JOMRES_CART_OR',' or ');
jr_define('_JOMRES_CART_SAVEFORLATER','Save for later');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
jr_define('_JOMRES_CART_VIEWCART','View cart');

jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

jr_define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

jr_define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

jr_define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

jr_define('_JOMRES_CSS_CACHING_TITLE',"Use css caching?");
jr_define('_JOMRES_CSS_CACHING_DESC',"");


jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");

jr_define('_JOMRES_COMPARE',"Compare");
jr_define('_JOMRES_REMOVE',"Remove");
jr_define('_JOMRES_RETURN_TO_RESULTS',"Return to search results");

jr_define('_JOMRES_ADDTOSHORTLIST',"Add to shortlist");
jr_define('_JOMRES_REMOVEFROMSHORTLIST',"Remove from shortlist");
jr_define('_JOMRES_VIEWSHORTLIST',"View your shortlist");

jr_define('_JOMRES_COOKIEPOLICY_TITLE',"Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_DESC',"EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

jr_define('_JOMRES_COOKIEPOLICY_1',"Important: Cookie Policy");
jr_define('_JOMRES_COOKIEPOLICY_2',"We use cookies to help keep our site relevant and easy to use.");
jr_define('_JOMRES_COOKIEPOLICY_3',"Read more...");
jr_define('_JOMRES_COOKIEPOLICY_4',"EU legislation requires that all websites clearly specify if cookies are being used and their purpose.");
jr_define('_JOMRES_COOKIEPOLICY_5',"The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6',"Yes, I accept the use of cookies in this way.");

jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposit required is cost of the first night?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

jr_define('_JOMRES_NOTHINGINSHORTLIST',"You haven't added any items to your shortlist.");

jr_define('_JOMRES_MOBILE_SETTINGS',"Mobile device settings");
jr_define('_JOMRES_SIMULATE_MOBILE',"Simulate mobile mode");
jr_define('_JOMRES_SIMULATE_MOBILE_DESC',"Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"Simulation IP");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");

jr_define('_JOMRES_SAFEMODE',"Enable safe mode?");
jr_define('_JOMRES_SAFEMODE_DESC',"Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");

jr_define('_JOMRES_PRICE_ON_APPLICATION',"POA");

jr_define('_JOMRES_USE_JOMRESEDITOR',"Use Jomres' WYSIWYG editor? (recommended)");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC',"If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

jr_define('COMMON_NEXT',"Next");
jr_define('COMMON_CANCEL',"Cancel");
jr_define('COMMON_SUBMIT',"Submit");
jr_define('COMMON_SAVE',"Save");
jr_define('COMMON_DELETE',"Delete");
jr_define('COMMON_RETURN',"Return");
jr_define('COMMON_CLOSE',"Close");
jr_define('COMMON_BACK',"Back");

jr_define('COMMON_HOME',"Home");

jr_define('COMMON_NEW',"New");

jr_define('COMMON_SEND',"Send");

jr_define('RECAPTCHA_TITLE',"reCaptcha");
jr_define('RECAPTCHA_INFO',"Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.");
jr_define('RECAPTCHA_PUBLIC_KEY',"Public key");
jr_define('RECAPTCHA_PRIVATE_KEY',"Private key");


jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Lockfile timeout");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC',"To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.");


jr_define('_JOMRES_BOOTSTRAPSWITCH',"Enable Jomres' Bootstrap templates and functionality?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC',"If you are running a bootstrap enabled template in the frontend of this site set this option to Yes.");

jr_define('COMMON_ACTION',"Action");
jr_define('COMMON_VIEW',"View");

jr_define('BACKTOTOP',"Back to top");

jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK',"Weak");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG',"Strong");

jr_define('_JOMRES_INPUTFILTERING',"Input filtering");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE',"Input filtering level");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC',"Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',"Allowed input tags");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',"You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE',"Allowed inputs");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC',"You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");


jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE',"Property details in tabs?");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC',"Set this option to show property details in tabs. Set it to no to show them without tabs.");

jr_define('COMMON_PRINT',"Print");

jr_define('COMMON_EDIT',"Edit");
jr_define('COMMON_COPY',"Copy");


jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO',"Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND',"Use Jomres Bootstrap templates in the frontend?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR',"Use Jomres Bootstrap templates in the administrator area?");

jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS',"Here are some alternatives you might want to consider.");

jr_define('_JOMRES_BEEZ_WARNING',"Note, your Joomla site template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar.");

jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT',"Auto-detect guest's country?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC',"The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option.");

jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES" , "About Jomres");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "help");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN" , "1 main");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED" , "Getting started");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE" , "system maintenance");
jr_define( "_JOMRES_CUSTOMCODE_ACCESSCONTROL" , "Access Control");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS" , "developer tools");
jr_define( "_JOMRES_CUSTOMCODE_ASAMODULE" , "ASAModule" );
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES" , "languages");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION" , "income generation");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING" , "accounting");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS" , "bookings");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE" , "site structure");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT" , "user management");
jr_define( "_JOMRES_CUSTOMCODE_MANUAL" , "Manual (online)");
jr_define( "_JOMRES_CUSTOMCODE_MYACCOUNTONLINE" , "My Account (online)");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS" , "scheduled tasks");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL" , "portal functionality");
jr_define( "_JOMRES_CUSTOMCODE_PLUGINMANAGER" , "Plugin manager");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION" , "integration");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS" , "reports/statistics");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES" , "taxes");
jr_define( "_JOMRES_CUSTOMCODE_SUPPORT_TICKETS" , "Tickets (online)");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP" , "help");
jr_define( "_JOMRES_CUSTOMCODE_UPGRADES" , "Upgrades");
jr_define( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS" , "payment methods");

jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT" , "Tariff default");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC" , "This only applies to new tariffs");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW" , "Years to show");
jr_define( "_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC" , "Defines the number of years to show when editing a tariff type");

jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "invoices");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT" , "account details");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN',"Login");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT',"Logout");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "search");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME" , "dashboard");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK" , "reserve");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS" , "management");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING" , "invoices");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS" , "settings");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC" , "misc");
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS" , "SRPs");

jr_define( "_JOMRES_EDIT_COUNTRY_TITLE" , "Edit country");
jr_define( "_JOMRES_EDIT_COUNTRY_ID" , "Country id");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYCODE" , "Country code");
jr_define( "_JOMRES_EDIT_COUNTRY_COUNTRYNAME" , "Country name");

jr_define( "_JOMRES_EDIT_REGION_TITLE" , "Edit region");
jr_define( "_JOMRES_EDIT_REGION_ID" , "Region id");
jr_define( "_JOMRES_EDIT_REGION_COUNTRYCODE" , "Country code");
jr_define( "_JOMRES_EDIT_REGION_REGIONNAME" , "Region name");


jr_define( "_JOMRES_COM_LISTCOUNTRIES" , "List countries");
jr_define( "_JOMRES_COM_LISTREGIONS" , "List regions");
jr_define( "_JOMRES_EXPORT_DEFINITIONS" , "Export definitions");
jr_define( "_JOMRES_EXPORT_DEFINITIONS_INFO" , "This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community.");

jr_define( "_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS" , "Translate locales");
jr_define( "_JOMRES_COM_TRANSLATE_LANGUAGEFILES" , "Translate lang file strings");
jr_define( "_JOMRES_COM_NOTAMANAGER" , "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Show Profiles feature to make yourself BOTH a manager and a Super manager. This is a security feature.");

jr_define( "_JOMRES_COM_LAYOUTS_DEFAULT" , "Property list default layout");

jr_define('_JOMRES_LASTEDITED_WARNING_72','Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /jomres/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /jomres/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /jomres/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /jomres/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that'); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define( "_JOMRES_STAYFORAMINIMUMOF" , "Stay for a minimum of");
jr_define( "_JOMRES_NIGHTSFOR" , " nights for ");


jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS" , "Property list images, show the property image as a gif if slideshow images are available.");
jr_define( "_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY" , "Show as GIFs only if the property is a featured property.");

jr_define( "_JOMRES_AGENT" , "Agent");
jr_define( "_JOMRES_AGENT_DETAILS" , "Agent details");
jr_define( "_JOMRES_AGENT_LISTINGS" , "Agent's listings");

jr_define( "_JOMRES_PROPERTY_LANG" , "Property language");
jr_define( "_JOMRES_PROPERTY_LANG_DESC" , "The default language of this property.");


jr_define( "_JOMRES_APPROVALS_CONFIG_TITLE" , "Automatically approve new properties");
jr_define( "_JOMRES_APPROVALS_CONFIG_DESC" , "If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager.");
jr_define( "_JOMRES_APPROVALS_MENU_NAME" , "Approvals");
jr_define( "_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL" , "Properties awaiting approval");
jr_define( "_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL" , "No properties are awaiting approval");
jr_define( "_JOMRES_APPROVALS_APPROVE" , "Approve property");
jr_define( "_JOMRES_APPROVALS_REVIEW" , "Review property");
jr_define( "_JOMRES_APPROVALS_NOT_APPROVED_YET" , "This property has not been approved yet. Once it has been approved you will be able to publish it.");
jr_define( "_JOMRES_APPROVALS_CANNOT_PUBLISH" , "Sorry, you cannot publish this property as it has not been approved yet.");
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT" , "A new property requires approval");
jr_define( "_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT" , "A property has been added to the system which requires your approval. Click the link to view the properties awaiting approval list : ");
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT" , "Your property has been approved");
jr_define( "_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT" , "Congratulations, your property has been approved, please click the following link to view the property's control panel : ");

jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_TITLE" , "Region names are translatable");
jr_define( "_JOMRES_REGION_TRANSLATION_SWITCH_DESC" , "Unless you're running a very fast server you are advised to leave this set to No. Due to the large number of region names, region name translation takes up a lot of memory which can slow your search results down.");

jr_define( "_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT" , "Guest booked out.");

jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE','Sorry, that email address is already in use. If this is your email address, please ensure you have logged in before attempting to book.');

jr_define( "JOMRES_TAPTOCALL" , "Tap to call");
