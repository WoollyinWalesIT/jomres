<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
/**
 *
 * @package Jomres\Core\Languages
 *
 * Language files.
 *
 **/
jr_define('_JOMRES_COM_MR_QUICKRESDESC', '快速预订');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', '显示资料');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', '综合设置');
jr_define('_JOMRES_COM_MR_BACK', '返回');
jr_define('_JOMRES_COM_MR_YES', '是');
jr_define('_JOMRES_COM_MR_NO', '否');
jr_define('_JOMRES_COM_MR_NEWTARIFF', '新');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', '新寓所');
jr_define('_JOMRES_COM_MR_NEWGUEST', '新旅客');
jr_define('_JOMRES_COM_MR_SAVE', '保存');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', '姓名');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '入住');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '离店');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', '用户名');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', '权限');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', '用户已修改');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', '所有预订');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', '编辑预订');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', '入住/离店');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', '旅客');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', '房间');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', '付款');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', '名');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', '姓');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', '特别要求');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', '请注意一些特别要求可能会带来一些额外费用.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', '取消预订');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', '门牌号');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', '街道');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', '市/县');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', '邮编');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', '地址');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', '电话');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', '电邮');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', '无法取消此预订,因为旅客已入住');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', '订金未支付');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', '确认取消');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', '预订取消');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', '天后即可抵达');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', '预订类型');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', '私人');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', '前台');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', '网络');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', '房名');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', '房号');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', '楼层');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', '可供残疾人?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', '最多容纳人数');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', '房间类型简陈');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', '房间类型描述');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', '房间特点列表');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', '订金支付');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', '输入订金');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', '合计支付');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', '订金参考');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', '预订');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', '订金');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', '订金保留');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', '我们的房间');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', '寓所');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', '房间类型');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', '修改旅客详细资料');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '名');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', '姓');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', '门牌号');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', '街道');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', '市/县');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '邮编');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '地址');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', '手机');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', '传真');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', '请选择');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', '旅居天数');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', '合计');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', '查看房间和寓所设置');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', '房间');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', '房间特点');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', '房间类型');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', '寓所');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', '寓所类型');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', '房间');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', '类型');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', '房名');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', '房号');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '楼层');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '最多容纳人数');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', '特点');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', '编辑明细');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', '房间特点');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', '特点描述');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', '房间特点已增加');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', '房间特点已更新');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', '房间类型');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', '房间类型缩写');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', '房间类型描述');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', '房间类型已增加');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', '编辑明细');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', '名称');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '街道');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '市/县');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '省/直辖市');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '国家');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '邮编');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', '电话');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', '传真');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', '电邮');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', '网址');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', '特点');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', '寓所已更新');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', '寓所特点');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', '寓所特点缩写.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', '寓所特点描述');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', '寓所特点已更新');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', '价目表');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', '价目表标题');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', '描述');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', '有效自');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', '有效至');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', '每晚费用');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', '最少天数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', '最多天数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', '最少人数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', '最多人数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', '房间类型');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', '忽略每人每晚');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', '周末照常营业');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', '编辑明细');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', '复制明细');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', '价目表已删除');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', '编辑价目表');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', '预订已保存');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', '预订一个旅客入住');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', '预订一个旅客离店');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', '列表预订信息');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', '管理面板');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', '旅客管理');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', '寓所管理');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', '检查房间是否可用');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', '名');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', '姓');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', '门牌号.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', '街道');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', '市/县');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', '邮编');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', '地址');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', '手机');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', '没有房间满足这个特定需求');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '谢谢您的预订,我们希望您在本店旅居愉快.<br><br> <b>请注意这只是预订的第一步,当您收到我们的确认函件以后该预订方可成为正式预订.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', '预订入住的旅客 ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', '旅客已入住 ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', '预订离店的旅客 ');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', '其他');
jr_define('_JOMRES_COM_A_TARIFFS', '价目和货币单位');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', '上传文件');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', '单人设施');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', '如果您想针对单人设施收费请确保此处设定为是');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', '单人设施费用');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', '订金使用百分率显示?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', '订金支付是否采用总服务价格的百分率显示? 如果不是,订金支付应该标明为实际数额');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', '订金数额');
jr_define('_JOMRES_COM_A_TARIFFS_PER', '每人,每晚');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', '如果您想按照每人每晚收费,请设定此处为是. 如果不是,那么收费将按照每房间每晚计价');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', '文件大小');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', '最大图片尺寸 in Kb');
jr_define('_JOMRES_FRONT_MR_BOOKED', '已订');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', '预订资料');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', '您确认该预订将成为正式的法律合同, 如果您有任何取消预订或者缩短旅居时间的行为发生,您仍然将按照该合同支付全额旅居费用.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>有关取消预订和缩短旅居天数的收费</i> 如果您想取消预订,您必须提供书面文本申请. 关于取消预订服务的收费如下:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', '至抵达日14天之内');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', '打印确认信函');
jr_define('_JOMRES_COM_INVOICE_TITLE', '打印发票');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', '夜晚数:');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', '每晚收费:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', '合计收费');
jr_define('_JOMRES_COM_INVOICE_PRINT', '打印发票');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', '增加服务至帐单');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', '服务描述');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', '服务价格');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', '其他收费明细');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', '明细增加至');
jr_define('_JOMRES_UPLOAD_IMAGE', '上传图片');
jr_define('_JOMRES_FILE_UPLOAD', '文件已上传');
jr_define('_JOMRES_COM_A_ODDS', '杂项.');
jr_define('_JOMRES_COM_A_ERRORCHECKING', '显示错误核查');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', '设定为是将在页面底部显示核查的错误数. 它将让网络重新指向功能失效. 这将有助于您确认你可能出现了哪些小错误.');
jr_define('_JOMRES_FILE_DELETE', '删除此图片');
jr_define('_JOMRES_FILE_DELETED', '图片已删除');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', '删除');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', '无法移除此房间, 此房间已经被预订. 先行取消预订然后方可删除房间.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', '房间已删除');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', '删除房间特点');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', '无法移除此房间特点, 部分房间已采用此特点. 先让这些房间终止使用此特点然后重新尝试移除.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', '房间特点删除');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', '删除寓所特点');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', '无法移除此寓所特点, 某个寓所已采用此特点. 先让这个寓所终止使用此特点然后重新尝试移除.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', '寓所特点已删除');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', '删除房间类型');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', '房间类型已删除');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', '删除寓所');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', '寓所已删除');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', '您无权删除此寓所.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', '原始图片尺寸');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', '点选此处查看地图');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', '寓所描述');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', '入住时间');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', '周边区域');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', '驾车指导');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', '机场距离');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', '其他交通');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', '规定及申明');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', '地址');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', '访客可在线预订');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', '设定为是确保访客可在线预订.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', '预订仅适用于固定期限');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', '如果您设定为是, 预订仅适用于固定期限. 如果设定为否, 那么确保 "定义抵达日期" 没有被设定为是 除非您强迫旅客在某个特定日子抵达) 否则您将无法使用日历表.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', '预订时段:');
jr_define('_JOMRES_COM_A_BOOKING', '预订房间');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', '最大时段长, 例如 3x7个预订时段=21天');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', '这是公寓/小屋/别墅?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', '复查预订');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', '确认预订');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', '周一');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', '周二');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', '周三');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', '周四');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '周五');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '周六');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '周日');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', '一');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', '二');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', '三');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', '四');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', '五');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', '六');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', '日');
jr_define('_JOMRES_COM_A_AVLCAL', '有效日历.');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', '针对当日的字体颜色');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', '针对当月的字体颜色 ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', '针对不在当月的字体颜色');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', '当房间可用时的表格背景颜色');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', '不在显示月份中的表格背景颜色');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', '已有预订的日期表格背景颜色');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', '针对临时预订房间的表格背景颜色 (订金未付)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', '已过日期的表格背景颜色');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', '已订/不可使用');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', '可以预订');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', '临时预订');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', '预订抵达日期');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', '仅供提供固定时段预订的站点使用. 选择必须抵达的日期.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', '固定抵达日期');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', '旅居时段 (天数)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', '显示预订可使用的日历?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', '设此为是以显示预订功能可使用');
jr_define('_JOMRES_FRONT_AVAILABILITY', '有效');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', '请点选一个可用日期查看预订表格.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', '私人预订');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', '新私人预订');
jr_define('_JOMRES_FRONT_DELETEGUEST', '删除旅客');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', '客户已删除');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', '无法删除此旅客,因为他们已经预订那些开放的房间了. 先行取消预订然后重新尝试.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', '无所谓');
jr_define('_JOMRES_COM_CALENDAROUTPUT', '日期输出格式');
jr_define('_JOMRES_COM_CALENDARINPUT', '日历输入格式');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', '允许用户修改日历输出格式.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', '固定时段的预订允许短期离店');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', '短期离店时段长');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', '已发布');
jr_define('_JOMRES_COM_A_PAYPAL', '贝宝');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', '检查跟踪');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', '日期');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', '用户 (用户名)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', '日期筛选');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', '状态');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', '抵达未定');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', '今日抵达');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', '当前住客');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', '今日离店');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', '逾期离店');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', '尚未抵达');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', '创建房间');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', '更新房间');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', '删除房间');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', '创建房间特点');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', '更新房间特点');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', '删除房间特点');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', '创建寓所');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', '更新寓所');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', '删除寓所');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', '编辑寓所特点');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', '发布寓所');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', '创建价目表');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', '更新价目表');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', '增加服务费用');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', '预订的旅客已入住');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', '输入订金');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', '创建旅客');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', '更新旅客');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', '预订一个房间');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', '创建额外服务');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', '更新额外服务');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', '删除额外服务');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', '发布额外服务.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', '输入私人预订.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', '取消私人预订.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', '额外服务');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', '描述');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', '名称');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', '价格');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', '额外服务已更新');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', '编辑明细');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', '额外服务已删除');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', '额外服务管理');
jr_define('_JOMRES_COM_A_EXTRAS', '在预订时显示额外服务?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', '设此为是表明您愿意在旅客进行预订时向他展示额外服务');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', '额外服务帮助.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', '私人预订起始日期');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', '服务重新开始日期');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', '私人预订');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', '预订这些房间出现错误, 部分房间现在不可用.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', '已被私人预订的房间');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', '没有私人预订列示');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', '星级');
jr_define('_JOMRES_COM_A_RESET', '重设');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', '预订已取消');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', '在此搜索:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', '货币符号');
jr_define('_JOMRES_COM_A_CURRENCYCODE', '货币代码');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', '点选查看更多信息');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', '限制高级预订?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', '设此为是显示您将限制某些高级预订功能 (使用下一个表格以天数进行设定). 设此为是则意味着如果用户试图提前N天进行预订,那么他们的到达日将受到您今日设定的日期的限制');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', '限制可提前预订的天数至:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', '税率');
jr_define('_JOMRES_COM_A_ROOMTAX', '房间税率');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', '税率固定额度');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', '税率百分率');
jr_define('_JOMRES_COM_A_EUROTAX', '税费');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', '税额百分率');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', '归档所有记录');
jr_define('_JOMRES_FRONT_TARIFFS', '我们的价目表');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', '价目名称');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', '价目描述');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', '房间类型');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', '有效自');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', '有效至');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', '每人每晚');
jr_define('_JOMRES_FRONT_TARIFFS_PN', '每晚');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', '不含周末');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', '最少天数');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', '最多天数');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', '最少人数');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', '最多人数');
jr_define('_JOMRES_FRONT_PREVIEW', '预览');
jr_define('_JOMRES_COM_A_EDITINGMODEON', '编辑中?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', '更新定制的文本.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', '编辑语言');
jr_define('_JOMRES_FRONT_PTYPE', '寓所类型');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', '列表寓所类型');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', '编辑寓所类型');
jr_define('_JOMRES_COM_PTYPES_PTYPE', '寓所类型');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', '寓所类型描述');
jr_define('_JOMRES_COM_PTYPES_SAVED', '寓所类型已保存');
jr_define('_JOMRES_COM_PTYPES_DELETED', '寓所类型已删除');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', '付款提醒');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', '没有额外服务记入帐单');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', '订金');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', '全额');
jr_define('_JOMRES_COM_CHARGING_CONFIG', '预订时收费额度');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', '使用此选项以决定预订时收取何种费用. 如果订金需要支付则选择订金选项, 如果需要全额支付请选择全额支付选项.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', '日历月份显示');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', '如果房间可用, 该显示多少月份?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', '接口');
jr_define('_JOMRES_COM_A_CANCEL', '取消');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', '请选择你不想对外提供服务的房间, 以及相应时段. <br>如果房间没有特定标记, 它将不能用于私人预订,直到任何一个公开预订已经完成或者取消.<br/> 当您选择了合适日期, 点选蓝色 "启用" 按钮重新核查房间是否可用. ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b>您已退出站点</b> 请重新登陆后继续操作.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', '理由');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', '使用支付接口?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', '请选择您的付款方法.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', '使用接口?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', '修改的插件设定');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', '插入的插件设定');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'External link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Put a link to your website here.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', '编辑信用卡');
jr_define('_JOMRES_COM_A_EDITICON', '编辑图标尺寸');
jr_define('_JOMRES_COM_A_SLIDESHOWS', '幻灯片');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', '显示链接至幻灯片?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', '这里显示幻灯片?');
jr_define('_JOMRES_FRONT_SLIDESHOW', '幻灯片');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', '显示链接至价目表?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', '允许跳出窗口?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', '上传幻灯片图片');
jr_define('_JOMRES_A_TABS_MISC', '杂项');
jr_define('_JOMRES_A', '站点设置');
jr_define('_JOMRES_A_GLOBALPFEATURES', '使用全局寓所特点');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', '如果您想为此特点设定一幅图片,您需要首先上传图盘至 /images/stories/jomres/pfeatures/ 文件夹. ');
jr_define('_JOMRES_A_ICON', '标识');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', '选择搜索插件来使用.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>抱歉, 没有结果可供参考. 请重新输入关键词来搜索.</b>');
jr_define('_JOMRES_AREYOUSURE', '您确认你想执行此操作?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', '预订一个房间');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', '预订这个寓所');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', '内容区显示价目表?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', '地址');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', '详细信息');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', '点选查看房间及是否开放可用');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', '在此链接下显示地址信息');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', '在此链接下显示详细寓所信息');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', '在此链接下显示房间和是否开放可用信息');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', '同一费率价目表');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', '均价费率');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', '选择你想使用的价目模式');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "您的价目计算方法有两种选择. 第一,\"同一费率\"方法允许您向旅客在旅居期间提供不同的价目计费，而每种计费费率在整个旅居期间是恒定不变的.如果您想在同一天提供不同价目服务这就变的很有用,比如:早餐/中餐/晚餐价格。 第二,选择 '均价费率' ,如果您想根据日期来调整您的价格和收费. 系统会自动找到在预订期间的每日所有选择使用的服务的价目情况并汇总,最后给出该期间的平均费率。");
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', '显示离店日期输入?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', '设此为否表明您不想在预订表格显示离店日期输入表格. 仅当您知道您的计划是可以使用此功能, 因为离店日期通常在入住日期之后.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', '描述限制');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', '限制显示寓所描述时的字数.');
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', '使用日期() 制式风格?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', '发布');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', '未发布');
jr_define('_JOMRES_A_GLOBALROOMTYPES', '使用全局房间类型');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', '如果您想为此房间类型设定照片,您需要首先上传图片至 /images/stories/jomres/rmtypes/ 文件夹. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', '输入了错误的背景颜色');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', '预订表格中的默认国家');
jr_define('_JOMRES_JAVASCRIPT_', '红星标注的明细条目为必须的.');
jr_define('_JOMRES_COM_SELFREGISTRATION', '用户可以注册他们自己的寓所?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', '设此为是表明你允许用户在没有站点管理员干预的情况下自行编辑他们的寓所.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', '红星标注的明细条目为必须的.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', '创建寓所');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', '年初起显示日历?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', '自今年起显示日历.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', '可使用房间数');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', '返回寓所信息');
jr_define('_JOMRES_FRONT_ROOMTYPES', '房间类型');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', '随机搜索限制');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', '在价目列表中显示货币兑换链接?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', '兑换率');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', '允许用户编辑使用 html 编辑器?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', '使用此表完成您的预订. 将鼠标置于 "i" 图案将得到更多信息指导. 修改您的预订数据,比如抵达和离店日期,旅客数目,选择那些可用的房间. 点选那些可用的房间,加入到您的预订之中. 当上述操作完成, 您可以提出额外要求,并提供你的详细信息. 当预订表信息完整后它将显示一个提交按钮,您将可以提交预订表.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', '使用此表完成您的预订. 将鼠标置于 "i" 图案将得到更多信息指导. 修改您的预订数据,比如抵达和离店日期,旅客数目,选择那些可用的房间. 当上述操作完成, 您可以提出额外要求,并提供你的详细信息.  当预订表信息完整它将显示一个提交按钮,您将可以提交预订表.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', '预订细节');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', '选择您预订要求的细节');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', '有效 ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', '选择您要求的房间');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', '查看此处确认该房间在您要求的期间内是否可用.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', '旅居额外服务');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', '选择您希望获得的任何额外服务并增加到预订表格中');
jr_define('_JOMRES_COM_PERDAY', '每晚');
jr_define('_JOMRES_AJAXFORM_ADDRESS', '您的地址');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', '请输入您的资料. 除了您的手机号码外其他资料必填');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', '可用房间');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', '已选房间');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>最早到达日期为:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', '每晚:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', '合计:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', '额外服务:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', '税费:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', '折扣:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', '帐单合计:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', '旅客');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', '点选增加这个房间到您的选择中');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', '从您的选择中点选移除这个房间');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', '旅客类型');
jr_define('_JOMRES_VARIANCES_TYPE', '类型');
jr_define('_JOMRES_VARIANCES_TYPE_TT', '旅客类型, 比如儿童 年龄在 5-10, 或者 学生 ');
jr_define('_JOMRES_VARIANCES_NOTES', '备注');
jr_define('_JOMRES_VARIANCES_NOTES_TT', '注意,你可能会用到旅客类型');
jr_define('_JOMRES_VARIANCES_MAXIMUM', '最大');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', '在旅客预订表中可以被选择的这个旅客类型的最大值');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', '为百分率');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', '这个计算的数据是针对房间的基本数据计算的百分率. 如果此设定为开意味着 您指定的数据将从房间数据中简单的增加或者减少.');
jr_define('_JOMRES_VARIANCES_POSNEG', '增加差异?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', '此计算数据已增加至或者移除自房间计算的基础数据. 如果您想让这个数据成为一个折扣那么请设定为否. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', '差异');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', '差异值');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', '调整旅客类型订单');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', '删除旅客类型');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', '创建旅客类型');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', '更新旅客类型');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', '更新旅客类型');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', '在寓所信息页面显示房间开放可用的日历?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', ' <b>仅</b> 显示可以开放使用的日历/房间列表?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', '设定为是则为关闭显示寓所标题和资料, 因此只有那些可开放使用的寓所信息方可显示. 只供那些租出寓所的人士使用 (比如公寓, 小屋等).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', '抵达-离店 最小间隔');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', '在预订表中显示的最小的抵达日期和离店日期的间隔.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', '预订表房间列表显示房间数目');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', '预订表房间列表显示房间名称');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', '预订表房间列表显示价目表');
jr_define('_JOMRES_ORDER', '订单');
jr_define('_JOMRES_REQUIREDFIELDS', '必填');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', '天至入住前');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', '最少天数必须有效, 自"今日"起, 在抵达日之前.');
jr_define('_JOMRES_DTV', '日期类型变更');
jr_define('_JOMRES_DTV_DOW', '日');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', '默认旅客类型');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', '默认旅客类型编号. 如果您选择旅客编号, 那么你输入的第一个旅客类型编号即为默认编号.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', '仅有登陆会员方可在线预订?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', '抱歉, 您必须成为注册会员方可在线预订. 请点选此处注册. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', '当前预订链接的字符颜色');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', '周末边框');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', '房间已预订');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', '私人预订');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', '订金小数四舍五入?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', '需要预付订金?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', '按照周来统计和存储价目收费?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', '您可以选择是来按照每日还是每周统计价目收费. 如果按照每周汇总统计,您必须设此为是.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '每周');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', '固定抵达日期再来:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', '当选定固定抵达日期, the number dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available) ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', '抵达日期不正确');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', '离店日期不正确');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', '预订的旅居期限太短. 旅居期限至少为:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', '您的旅居期间为');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', '客户类型差异不正确');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', '选择您的客户类型/数目');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', '就当前价目来说,你的团队成员太多');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', '您多选房间了, 请选择房间并且移除');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', '旅客数目超过现有床位提供');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', '您需要增加房间数');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', '选择一个房间');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', '名必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', '姓是必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', '门牌号必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', '地址必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', '市/县必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', '省/直辖市必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', '邮编必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', '国家必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', '详细地址必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', '手机号码必须填写');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', '电子邮件地址必须填写');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', '我们有空余房间!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', '尚未选择房间');
jr_define('_JOMRES_BOOKING_NUMBER', '预订号.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', '输入Ok来预订, 信息框背景');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', '卸载模板数据?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', '设置此项以在查看该页面时为每个 FRONTEND 模板文件启用模板变量的 DHTML 转储。 如果您想查看某个元素是否可用于给定模板，则很有用。');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', '数据是百分比');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', '设此为是表明个人计价按照百分比显示. 设定为不是则意味着显示为汇总数值.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', '可用的房间/价目限制');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', '可用于在预订表格中设定可供选择的房间/价目限制数目. 设定为零表明您不想使用限定功能. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', '目前没有空余房间提供!');
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', '');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', '全局编辑模式?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', '请小心此设置. 设定为是, 编辑方式将影响现有的所有编辑文本.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', '使用全局货币?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', '选择为是表明强迫所有寓所选择同一货币.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', '全局货币符号');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', '组件被修改');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', '设此为是表明组件被修改则顶部标题和模块位置无法显示');
jr_define('_JOMRES_COM_WEEKENDONLY', '仅限周末');
jr_define('_JOMRES_COM_WEEKENDDAYS', '周末');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', '设定您的周末天数. 价目表会在显示房间列表时判断是否应该包含周末或者不包含周末.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', '在增加寓所信息前请选择所在国家');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', '上传寓所照片前请先保存寓所信息资料');
jr_define('_JOMRES_TARIFFSFROM', '价格自 - ');
jr_define('_JOMRES_SEARCH_ALL', '所有');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', '根据国家搜索');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', '根据地区搜索');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', '根据市/县搜索');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', '根据特点搜索.');
jr_define('_JOMRES_SEARCH_BUTTON', '搜索');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', '输入想要查找的关键词并按搜索按钮.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', '搜索词(s): ');
jr_define('_JOMRES_SEARCH_AVL_INFO', '请输入您打算抵达的日期和离店的日期,点选搜索看看哪些寓所可以提供满足你要求的服务.');
jr_define('_JOMRES_SEARCH_PTYPES', '根据寓所类型显示所有寓所');
jr_define('_JOMRES_SEARCH_RTYPES', '根据房间类型显示所有寓所');
jr_define('_JOMRES_SORTORDER_DEFAULT', '默认');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', '寓所名称');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', '寓所所在省/直辖市');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', '寓所所在市/县');
jr_define('_JOMRES_SORTORDER_STARS', '星级');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', '寓所信息 - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', '预订表格');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', '更新您的信息');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', '重新查看可用的房间<br/>(房间选择将被重设)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', '重新查看可用的房间');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', '修改您要求的额外服务');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', '修改您的房间选择');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', '更新您的地址信息');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', '抱歉,一个或多个地址信息不正确.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', '房间图片');
jr_define('_JOMRES_CURRENCYFORMAT', '货币格式');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', '搜索选项');
jr_define('JOMRES_COM_A_AVAILABLELOGS', '可用的 Logs');
jr_define('JOMRES_COM_A_MESSAGE', '信息');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', '正常');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', '高级');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', '细微管理');
jr_define('JOMRES_COM_A_TARIFFMODE', '价目设置模式');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', '<b>警告: 在不同价目类型之间转换将丢失某些数据. 查看下面的说明</b>.
<br/><br/>
你有三个选项来设置您的价目表.<br/>
正常模式: 您可以为每个房间类型确定一个10年不变的价目表.<br/>
细微模式: 您可以为每个房间/寓所在每天进行价格调整. <br/>
高级模式:  "早期" Jomres 方法来管理价目信息. <br/>
<br/>
不同的价目模式使得您能够根据实际需要提供满意服务.<br/>
正常模式是最简单的,但是它最容易理解,因为它将参考的房间和价目和房间/寓所类型结合起来,允许您可在同一页面设置房间和价格.<br/>
细微模式允许您基于每日方式来修改费率,而不需要去调整价目表, 它实际上捆绑了很多不同的价目表. 这导致了在这个阶段您创建了很多价目表, 但是您在同一天里面不可以重叠使用不同价目表.<br/>
高级模式允许您创建一个房间并关联一个房间类型. 您然后创建一个价目表并关联一个房间类型. 用这个方法你可以 "层叠" 不同的价目表, 比如一个房间类型 "双人床" 可以有一个价目表针对床位和早餐, 而另一个针对床位, 早餐和晚餐. 高级模式需要留心因为这可能会拆开某个房间或者价目表和房间/寓所的关联, 或者在日期设置中产生错误, 但是它确实提供了其他模式没有的设置. <br/>
<br/>
因为正常模式和细微模式要求房间/价目特别建立,因此价目设置可能因为系统转换而导致重新整合.<br/>
<br/>
正常 -> 高级. 没有变化. 所有存在的价目将保留.<br/>
正常 -> 细微. 所有已存在的价目将被移除.<br/>
高级 -> 正常. 所有已存在的价目将被移除.<br/>
高级 -> 细微. 所有已存在的价目将被移除.<br/>
细微 -> 高级. 所有已存在的在价目之间的相互关联被移除,但是价目本身仍然保留.<br/>
细微 -> 正常. 所有已存在的在价目之间的相互关联被移除.<br/>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', '在寓所资料页面显示房间列表?');
jr_define('JOMRES_PROPERTYTYPE', '寓所类型');
jr_define('JOMRES_MAXPEOPLEINROOM', '每房间最多人数');
jr_define('JOMRES_MAXPEOPLEINBOOKING', '预订最多人数');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', '增加备注');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', '编辑备注');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', '取消备注');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', '查看备注');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', '增加新备注');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', '编辑新备注');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', '删除新备注');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', '预订列表');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', '我的预订');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', '查看预订');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', '查看偏好');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', '您尚未增加任何偏好!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', '寓所类型');
jr_define('_JOMCOMP_WISEPRICE_TITLE', '价格');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', '有效');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', '这个插件允许你自动修改房间价格设置.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', '大部分业务在给定日期将基于一个指定类型的一定数量的房间基础上重新计算房价. 这里就可以为一个房间/寓所实施折扣服务提供空间.<br/>启动此服务用以吸引旅客.<br/> 开启此服务前必须设定旅居最少天数, 这样百分比选项将允许您设定在给定折扣实施前的房间可用数目. 不过请注意, 如果大量房间被预订那么当前折扣水平将被用于所有房间并且不会因为更多房间被选择而降低.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', '起点 (自今日起到抵达日的天数)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', '10% 或更少的房间被预订');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', '25%或更少的房间被预订');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', '50%或更少的房间被预订');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', '75%或更少的房间被预订');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', '折扣%');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' 已经实施打折自');
jr_define('_JOMCOMP_WISEPRICE_TO', ' 至');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' 房价未打折 ');
jr_define('JOMRES_COM_A_MAPSKEY', '谷歌地图 API 密钥');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', '您可以从 <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key 获取谷歌地图 API 密钥 " target="_blank">Google 地图</a>。在此处输入地图密钥后，Jomres 将在您的房产详情页面中显示地图。');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', '最后截止期');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', '最后时刻有效?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', '设此为是表明您允许签署最后时刻合同.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', '起点');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', '如果预订已存在且抵达日期离预订当日只有N天，那么折扣可以实施。');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', '折扣');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', '百分比');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', '此预订已启用折扣服务!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', '旅居费用已经缩减 by ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', '此寓所提供最后时刻折扣为');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' %,如果您预订的抵达早于');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. 现在预订可以拿到最大折扣!');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '%或更多.');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', '详细价目信息');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', '设此为是用以在寓所信息和价目跳出窗口显示更多详细价目信息');
jr_define('JOMRES_COM_A_MINIMALCONFIG', '最小化设置选项');
jr_define('_JOMCOMP_AMEND', '修整预订-寓所选择');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', '选择新寓所');
jr_define('_JOMCOMP_AMEND_HEADER', '原始合同:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', '订金已付');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', '订金未付');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', '重新调整后 共计');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', '重新调整后 订金');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', '取消');
jr_define('_JRPORTAL_CPANEL', 'JR入口管理面板');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', '默认佣金费率');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', '选择默认佣金费率将用于一个寓所,前提是还没有其他佣金费率用于此寓所.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', '列表佣金费率');
jr_define('_JRPORTAL_CPANEL_PATETITLE', '佣金费率');
jr_define('_JRPORTAL_CRATE_TITLE', '标题');
jr_define('_JRPORTAL_CRATE_TYPE', '类型');
jr_define('_JRPORTAL_CRATE_VALUE', '佣金费率');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', '货币代码');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', '列表寓所');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', '寓所名称');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', '寓所地址');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', '带有红色背景的寓所表示该寓所尚未实施佣金费率.');
jr_define('_JRPORTAL_STATS_PATETITLE', '统计');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', '佣金费率');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', '列表预订');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', '寓所编号');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', '发票编号');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', '预订合计');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', '归档日');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', '描述');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', '您可以修改为那个寓所类型修改语言文件,这样房间就会变成,例如,DVDs,等.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', '您不能删除此寓所,因为这是您唯一有权限进入的寓所.如果您想不在前台使用它,您可以在工具栏中选择取消发布. ');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', '住宿共');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', '晚');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', '每间房');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', '提高您的总入住率');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', '价格汇总');
jr_define('_JOMRES_CONFIRMATION_ALERT', '请阅读并同意');
jr_define('_JOMRES_CONFIRMATION_HEADER', '您的预订摘要如下所示。<br />要进行任何更改，请点击修改预订按钮。');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', '如果您需要更改以上任何信息，请点击这里');
jr_define('_JOMRES_CONFIRMATION_AMEND', '修改预订');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', '请在下面的框中输入任何特殊要求。');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', '我确认以上信息无误并同意');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', '每人每晚');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
	jr_define('_PN_OF', 'of');
}
if (!defined('_PN_START')) {
	jr_define('_PN_START', 'Start');
}
if (!defined('_PN_PREVIOUS')) {
	jr_define('_PN_PREVIOUS', 'Prev');
}
if (!defined('_PN_NEXT')) {
	jr_define('_PN_NEXT', 'Next');
}
if (!defined('_PN_END')) {
	jr_define('_PN_END', 'End');
}
if (!defined('_PN_RESULTS')) {
	jr_define('_PN_RESULTS', 'Results');
}jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', '请注意，这不是预订表格，而是您发送的电子邮件。<br/>请输入您想发送给的消息');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', '联系酒店');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', '物业查询');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', '感谢您的询问，您的留言已发送至住宿的联系邮箱，并已复制到您自己的地址作为记录。他们会尽快回复您并回复您.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', '关于');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', '查询');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', '请从右侧列表中选择您需要的住宿');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', '最小房间已经选择');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', '在提供资费/房型组合之前预订时已选择的最少房间数。允许您在已选择N个以上房间时享受优惠资费。');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', '已选择的最大房间数');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', '在不再提供资费/房间组合之前预订中已选择的最大房间数。允许您在预订表格中选择N个房间后停止提供此房型/资费组合。');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', '请注意，如果单人补给在一般配置中设置为是，则不会使用此处设置的单人补给。此处的设置是对统一费率单人补给的替代，而不是对公寓的补充率 SPS。');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', '可用');
jr_define('_JOMRES_AVLCAL_QUARTER', '一些预订');
jr_define('_JOMRES_AVLCAL_HALF', '预订了一半');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', '大部分预订');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', '订满');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', '每周');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', '每天');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', '每次预订');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', '每人每次预订');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', '每人每天');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', '每人每周');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', '每天（分钟)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', '每天选择 X 个房间');
jr_define('_JOMRES_REGISTRYREBUILD', '重建微型组件注册表并重建缓存');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "通常，当您查看插件管理器并添加或删除插件时，Jomres 插件注册表会自动重建，但是您可能由于某些原因无法使用这些功能，因此您可以使用此功能重建手动注册。如果您有权访问插件管理器和升级功能，那么您不太可能需要使用此功能。每当您添加新的迷你组件并且没有使用插件管理器时，您都需要重建插件注册表添加它。");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', '注册表重建成功');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', '重建微型组件的注册表时出错。您应该检查您的 Jomres 错误日志以查看是否有触发错误的记录。');
jr_define('_JOMRES_SEARCH_PRICERANGES', '价格');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', '您还没有进行任何预订！');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', '编辑您的财产类型');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', '选择您的房产类型');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', '您的询问...');
jr_define('_JOMRES_COM_A_LISTLIMIT', '属性列表限制');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', '搜索后页面上显示的属性数量');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', '集成搜索功能');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Jomres 集成搜索功能允许您的用户根据一组功能搜索 Jomres 属性。如果您已经在 J​​oomla 中使用过 Jomres 的搜索功能，您将熟悉这些设置。<br/ >此功能允许我们在 Jomres 中为不想使用 Joomla 搜索模块的用户或其他 CMS 没有自己的 Jomres 搜索模块的 CMS 用户提供搜索处理。 <br/>请记住，如果您选择通过链接（即不是下拉菜单)搜索某些内容，则不会实现其他搜索选项，只会实现与您单击的链接对应的元素。<br/>请注意默认情况下，这个集成搜索的布局不是很漂亮。那是因为执行布局的模板文件必须包含所有可能的选项，其中一些是不兼容的。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', '激活这个功能吗？');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', '如果启用此功能，则对显示属性列表的 Jomres 的任何调用都将意味着也显示搜索选项。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', '使用列');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', '您定义为链接类型的任何搜索选项（如果相关)将显示为列（IE br 放在链接的末尾)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', '通过选择组合下拉菜单搜索区域');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "提供一个搜索下拉列表来过滤国家/地区/城镇。如果你打算使用这个功能，那么你最好不要使用下面的地区/城镇搜索。");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', '按属性名称搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', '按属性名称输入显示搜索。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', '显示为下拉列表？');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', '将此设置为 no 以将列表显示为链接');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', '城镇/地区');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', '显示区域输入');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', '显示为下拉菜单？');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', '将此设置为 no 以将列表显示为链接');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', '按属性类型搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', '按属性类型输入显示搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', '显示为下拉列表？');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', '将此设置为 no 以将列表显示为链接');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', '按房间类型搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', '按房间类型输入显示搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', '显示为下拉菜单？');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', '将此设置为 no 以将列表显示为链接');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', '功能');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', '按特征输入显示搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', '显示为下拉菜单？');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', '将此设置为 no 以将列表显示为工具提示图像和复选框');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', '按描述搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', '按描述输入显示搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', '按可用性搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', '按可用性输入显示搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', '按价格范围搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', '按价格范围输入显示搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', '价格范围增量');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres 将查看关税中的所有值，然后根据您在此处设置的增量值计算出一系列价格范围。');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', '默认情况下，如果在 Jomres 中未选择属性，它将执行搜索。如果此搜索不是由搜索模块触发，则该搜索将产生随机结果（故意)。此选项允许您限制该随机搜索中的返回次数。');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron 作业设置和日志');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron 作业信息。开票和佣金处理需要伪cron 功能。');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. 要运行单独的 cron 作业，请使用下面指定的链接。请注意，cron 作业不会产生任何输出，因此您不会在页面上看到任何信息。相反，请参阅作业在下面登录。');

jr_define('_JOMRES_COM_A_CRON_METHOD', '方法');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', '如果您无权访问 cron 作业，请将其设置为 Minicomponent，否则创建一个 cron 作业并告诉它运行 <br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl ='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', '在浏览器中显示日志');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', '仅当方法设置为 Minicomponent 时才有效。');
jr_define('_JOMRES_COM_A_CRON_LOGGIGENABLED', '日志已启用');
jr_define('_JOMRES_COM_A_CRON_LOGGIGENABLED_DESC', '将此设置为 Yes 以启用日志记录。日志结果将在下面输出。');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', '详细日志');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', '大量日志输出');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', '模板编辑');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', '自定义字段');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', '在这里您可以定义将显示在预订表格中的简单自定义字段。');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', '字段名(无空格)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', '默认值');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', '说明');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', '必需');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', '最大数量');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', '如果最大数量设置为大于 1，那么客人将被提供一个下拉菜单来选择他们需要的额外数量。');
jr_define('_JRPORTAL_TAXRATES_TITLE', '税率');
jr_define('_JRPORTAL_TAXRATES_CODE', '税号');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', '费率描述');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', '你不能删除这个税率。');
jr_define('_JRPORTAL_TAXRATES_RATE', '费率');
jr_define('_JRPORTAL_INVOICES_TITLE', '发票');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', '未付');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', '付费');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', '取消');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', '待定');
jr_define('_JRPORTAL_INVOICES_USER', '用户');
jr_define('_JRPORTAL_INVOICES_STATUS', '状态');
jr_define('_JRPORTAL_INVOICES_RAISED', '提高');
jr_define('_JRPORTAL_INVOICES_DUE', '到期');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', '订阅');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', '未清总额');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', '重复频率');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', '每月的重复日期');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', '货币代码');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', '订单项');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', '姓名');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', '说明');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', '初始价格');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', '初始数量');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', '初始折扣');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', '初始总数');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', '税号');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', '税务说明');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', '税率');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', '覆盖标准 Jomres 网关设置？');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', '显示我的发票');
jr_define('_JRPORTAL_COUPONS_TITLE', '优惠券');
jr_define('_JRPORTAL_COUPONS_DESC', '可以生成折扣代码并将其传递给客人，作为进行预订的奖励。有效的开始和结束日期是指可以进行预订的日期，而不是预订本身的日期。') ;
jr_define('_JRPORTAL_COUPONS_CODE', '优惠券代码');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', '有效期自');
jr_define('_JRPORTAL_COUPONS_VALIDTO', '有效期');
jr_define('_JRPORTAL_COUPONS_AMOUNT', '折扣金额');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', '折扣是一个百分比');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', '仅限房间');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', '如果您有优惠券代码，请将其输入框中，然后单击"保存优惠券"链接以根据您的预订保存优惠券详细信息。');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', '保存优惠券');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', '优惠券已保存在预订中');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', '未找到优惠券号码');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', '优惠券折扣值');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', '预订打折。优惠券代码/折扣值/优惠券设置：');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', '选择语言');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', '选择要在语言切换下拉菜单中显示的语言选项。');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', '显示语言选择下拉菜单？');
/*
* @忽略
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', '亲爱的');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', '感谢您注册');
jr_define('_JRPORTAL_NEWUSER_USERNAME', '您的用户名是：');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', '您的密码是：');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', '请登录查看您的预订');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', '优惠券已保存');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', '优惠券已删除');
// 还没有使用
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', '用户名');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', '密码');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', '通知手机号码');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "请使用国家/地区代码，手机号码格式。例如，英国的手机号码类似于\"447979123456\"。如果您不想将任何通知电子邮件发送到您的手机，请将此留空电话。");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
    <b>显然，您不能从本地主机使用/测试此网关，您需要在\"实时\"服务器上执行此操作。</b>
<br/>
<br/>
为了使用 Clickatell 网关，您需要一个 Clickatell 帐户和至少一个在您的应用程序和我们的网关之间注册的连接（API 子产品实例)。每个连接
方法称为子产品。方法如下：<br/>
<br/>
<b>第 1 步 - 注册 Clickatell 帐户</b><br/>
如果您还没有 Clickatell 帐户，则需要按照以下步骤注册一个。否则继续第 2 步。<br/>
* 前往http://www.clickatell.com/products/sms_gateway.php，选择您希望使用的相应API子产品（连接方式)（Clickatell Central (API))<br/>
* 点击注册超链接。<br/>
* 填写注册表。<br/>
成功提交表单后，您将自动登录到您的新帐户并进入一个页面，您可以在其中添加您选择的 API 连接。<br/>
<b>第 2 步 - 添加已注册的 API 连接（子产品)</b><br/>
如果您还没有登录到您的帐户，那么您必须在 http://www.clickatell.com/login.php<br/> 登录
* 从顶部菜单中选择\"管理我的产品\"。<br/>
* 从下拉菜单（\"添加连接\")中选择您希望使用的 API 连接类型（HTTP API)。<br/>
* 完成表格。确保输入锁定的IP（此服务器的IP)，将回调设置为HTTP POST。您需要将 IP 回调设置为".get_showtime('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback 以及用户 ID 和密码。<br/>
如果您注册多个 API 连接，则您为每个连接输入的描述名称必须是唯一的 - 不能有多个具有相同名称的 API。<br/>
成功提交表单后，将显示您的身份验证详细信息，包括每个连接的唯一 API ID (api_id)。连接到 Clickatell 网关以发送消息时需要这些身份验证详细信息。<br/>
<br/>
使用您的用户 ID、密码和 api_id 填充上面的字段。<br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', '预订表格房间列表显示禁用访问');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', '预订表格房间列表显示最多人数');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', '请注意，列出的房间价格是估计值，在您添加一个或多个房间到您的选择之前，不会计算预订的全价。');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', '订阅包');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', '姓名');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', '说明');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', '已发布');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', '全额');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', '属性限制');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', '订阅');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', '使用订阅处理功能');
jr_define('_JOMRES_COM_NEWUSER', '在预订时创建新用户');
jr_define('_JOMRES_COM_NEWUSER_DESC', '在未注册用户预订时创建新用户帐户。');
jr_define('_JOMRES_CLICKTOREGISTER', '点击这里注册您的财产');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', '新用户详细信息');
jr_define('_JOMRES_LATLONG_DESC', '用鼠标在地图上移动，将指针拖到你的房产位置，设置经纬度。');
jr_define('_JOMRES_CONTROLPANEL', '控制面板');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', '显示发票');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', '显示发票');
jr_define('_JOMRES_USER_LISTMYPROPERTY', '将我的财产添加到此站点');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', '待办事项：');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', '抱歉，无法识别该包 ID。');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', '对不起，您已经订阅了免费套餐，您不能再次订阅该套餐。');
jr_define('_JOMRES_COM_YOURBUSINESS', '您的业务详细信息');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', '企业名称');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', '增值税号');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', '楼号');
jr_define('_JOMRES_INVOICE_NUMBER', '发票号码');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', '选择您要应用黑色预订的日期。选择合适的日期后，单击"应用"按钮重新检查可用性。<br/>
<br/>
如果酒店在所选期间内有一个或多个预订，则您将无法预订，直到其他预订/黑色预订被取消/预订完毕。');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', '对不起，你不能在这些日期黑订这个属性。');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', '您可以将这些日期的属性列入黑名单。');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', '您的酒店配置为按每人每晚收费，但您没有创建或发布任何客人类型，请创建并发布一种或多种客人类型。');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', '您还没有配置任何关税，您将无法为您的物业进行任何预订。');
jr_define('_JOMRES_EDITINGMODE_ON', '标签编辑模式开启');
jr_define('_JOMRES_EDITINGMODE_OFF', '标签编辑模式关闭');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', '收取可变存款？');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', '可变存款允许您定义如果预订的到达日期在"今天"的 N 天内，您是否愿意收取全额费用。将此选项设置为是以启用该功能, 并在下面输入天数，例如，如果到达日在 60 天内，则收取的押金金额将为全额，否则金额将基于上面配置的押金选项。');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', '天数，在该天数内将收取全额作为押金。');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', '确认邮件已发送。您现在可以关闭此窗口。');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', '联系代理');
jr_define('_JOMRES_INVOICE_MARKASPAID', '将发票标记为已付款');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', '发票标记为已付');
jr_define('_JOMRES_APIKEY_REMAKE', '制作新的 API 密钥');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', '这是单属性安装吗？');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', '如果此选项设置为 Yes，那么对于非授权用户的 Jomres 前端视图将大大简化。从菜单选项中默认调用 Jomres，而不是提供属性列表，只需要客人到系统中第一个物业的预订表格。物业经理也不会看到"物业详情"预览按钮或"添加新物业"按钮。如果您只想列出一个物业并为其进行预订，这是理想之选。<br />');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', '余额支付');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', '注意，您正在使用启用了全局编辑模式的编辑模式。如果您了解全局编辑模式的含义，这很好，但是如果不这样做，您可能会导致自己出现问题。如果您不确定如果您应该以这种方式使用 Jomres，请参阅 <a href="https://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode " target="_blank">编辑模式手册页</a> 了解有关此主题的更多信息。');
jr_define('_JOMRES_SUPPORTKEY', '支持键');
jr_define('_JOMRES_SUPPORTKEY_DESC', '您的支持许可证密钥号（也称为您的许可证号)。您需要一个最新的许可证才能下载 Jomres 插件。');
jr_define('_JOMRES_PERSONAL_DISCOUNT', '个人折扣');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', '把财产登记限制在一个国家？');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', '您可以通过将此选项设置为是并在以下选项中设置国家来确保财产注册仅限于一个国家。');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', '房产位于这个国家：');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery 主题');
jr_define('_JOMRES_JQUERYTHEME_DESC', '选择用于属性详细信息选项卡的 jquery 主题。');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', '我们很抱歉，但该属性目前不可用。');
jr_define('_JOMRES_REVIEWS', '评论');
jr_define('_JOMRES_REVIEWS_TITLE', '评论标题');
jr_define('_JOMRES_REVIEWS_DATE', '发表于');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', '该物业尚无评论。');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', '你想成为第一个评论这个属性的人吗？');
jr_define('_JOMRES_REVIEWS_IAGREE', '我同意这个评论');
jr_define('_JOMRES_REVIEWS_IDISAGREE', '我不同意这个评论');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', '平均评分：');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', '总票数：');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', '添加新评论。');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', '您需要登录才能发表评论。');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', '告诉我们你对这个属性的看法：');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', '这个评论者告诉我们：');
jr_define('_JOMRES_REVIEWS_PROS', '优点：');
jr_define('_JOMRES_REVIEWS_CONS', '缺点：');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', '提交日期：');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', '您已经评论过该房产，不能再发表评论。');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', '对不起，您不能在本网站上发表评论。');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', '显示评论');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', '客人同意此评论。');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', '客人不同意此评论。');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', '客人同意此评论。');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', '客人不同意此评论。');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', '感谢您分享您对此评论的看法。');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', '谢谢，但您已经分享了您对此评论的看法。');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', '请确保所有字段都已填写。');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', '请输入标题总结您的评论');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', '请在描述框中输入更完整的评论');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', '请输入您作为该酒店客人的美好体验');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', '请输入您对自己经历的任何负面想法');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', '请评价您从工作人员那里收到的热情好客');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', '请评价您对该物业\所在地区的看法');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', '请提供您对物业清洁度的意见');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', '请评价住宿。是舒适还是破旧');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', '请提供您对它是否物有所值的意见');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', '请评价服务');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', '回顾总结');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', '您更详细的体验');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', '感谢您提交评论。');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', '感谢您提交评论。我们的一位辛勤工作的版主将很快发布评论。');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', '使用 Jomres 审查功能？');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', '自动发布评论？');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', '如果您将其设置为否，您将需要手动发布评论');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', '将评论设置为测试模式？');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', '通常财产管理者不能审查财产。启用测试模式后，他们可以。自然这在生产环境中并不理想。');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', '这是所有属性的列表。要查看属性的评论，请单击该属性。从那里您可以发布或删除评论。');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', '未发表评论数');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', '评论总数');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', '发布/取消发布评论');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', '删除评论');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', '报告审查');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', '审核报告');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', '请输入您的报告');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', '在此评论中发现有异议或不准确的内容？报告它，我们会为您调查。');
jr_define('_JOMRES_REVIEWS_SUBMIT', '提交');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', '报告创建者');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', '报告由可能不同意评论内容的用户发布。删除报告的唯一方法是删除评论。');
jr_define('_JOMRES_REVIEWS_RATING', '评级（1 = 差 10 = 优秀)');
jr_define('_JOMRES_REVIEWS_RATING_1', '好客');
jr_define('_JOMRES_REVIEWS_RATING_2', '位置');
jr_define('_JOMRES_REVIEWS_RATING_3', '清洁度');
jr_define('_JOMRES_REVIEWS_RATING_4', '住宿');
jr_define('_JOMRES_REVIEWS_RATING_5', '物有所值');
jr_define('_JOMRES_REVIEWS_RATING_6', '服务');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', '审核人：');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', '隐藏评论');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', '在房产详情页面显示预订表格？');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', '将此设置为是以在属性详细信息页面中显示预订表单。如果您将其设置为否，则属性详细信息页面中将出现一个链接，而不是指向预订表单。');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', '价格是否含税？');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', '设置的价格包含在内？如果您的价格包含税，则选择是。如果不是，请选择否。');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', '附加税：');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', '星期几字段允许您为给定的星期几设置费率，一旦您单击星期几按钮，一周中的所有日子都将设置为该费率。');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', '日期选择器和汇率输入允许您为给定的日期范围设置一个价格。选择开始和结束日期，输入价格，然后单击"设置汇率"按钮。');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', '开始范围');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', '结束范围');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Rate');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', '设置费率');
jr_define('_JOMRES_PARTNERS_TITLE', '合作伙伴');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', '房间');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', '客人。');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', '这是我们将您的客人编号分配到他们房间的方式。如果您想更改此分配，您需要在预订后联系酒店。如果您更改分配，可能会产生额外费用。 ');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', '请注意，您的房产尚未发布，只有您可以看到该房产，网站访问者不会看到它');
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', '默认搜索结果顺序');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', '更改此选项以更改默认显示搜索结果的顺序。');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', '显示搜索结果顺序下拉菜单');
jr_define('_JOMRES_ROOMMSLIST_STYLE', '房间列表样式');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', '在预订表格中，使用"经典"房间列表样式为客人提供单独的房间。在房间类型视图中，客人选择X 类型的房间数量（例如2 x 双人间) ');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', '经典');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', '房间类型');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', '日历周开始日，星期日或星期一');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', '只有住宿客人可以评论吗？');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', '如果您想将评论限制为仅对已成为该酒店客人的用户进行评论。');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', '每个房间');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', '每个房间的客人数：');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', '每次预订的客人数：');
jr_define('_JOMRES_NUMBER_OF_ROOMS', '房间数');
jr_define('_JRPORTAL_MONTHS_LONG_0', '一月');
jr_define('_JRPORTAL_MONTHS_LONG_1', '二月');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'March');
jr_define('_JRPORTAL_MONTHS_LONG_3', '四月');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'May');
jr_define('_JRPORTAL_MONTHS_LONG_5', '六月');
jr_define('_JRPORTAL_MONTHS_LONG_6', '七月');
jr_define('_JRPORTAL_MONTHS_LONG_7', '八月');
jr_define('_JRPORTAL_MONTHS_LONG_8', '九月');
jr_define('_JRPORTAL_MONTHS_LONG_9', '十月');
jr_define('_JRPORTAL_MONTHS_LONG_10', '十一月');
jr_define('_JRPORTAL_MONTHS_LONG_11', '十二月');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', '将此设置为 Yes 以减少常规配置部分中可供属性管理器使用的选项数量。如果您不希望属性管理器使用太多设置，这将非常有用，您可以编辑 jomres_config .php 定义默认属性选项。');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', '请为您的预订选择一个选项');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>如果此选项设置为 Yes，那么管理人员将能够看到 CMS 提供的 html 编辑器，并在描述中输入 HTML。这是一个潜在的安全风险，因为存在他们可能会引入不需要的 HTML 或 Javascript。此外，如果他们输入格式错误的 HTML，页面设计可能会受到影响。最好尽可能将此选项设置为\"否\"。</p><p>如果所有管理员都是受信任的用户（例如您自己)然后您可以将其设置为\"是\"并修改允许他们在站点配置的\"输入过滤\"选项卡中输入的不同 HTML 标记。</p><p>另一方面，如果您重新使用 Jomres 作为您邀请用户添加和管理他们自己的属性的门户，那么这不是理想的配置。相反，您应该将此选项设置为\"否\"。将其设置为\"无\"经理将看到他们的降价编辑器可以用来输入应该的基本格式对大多数用户来说已经足够了。</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', '全屏视图');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', '普通视图');
jr_define('_JOMRES_PARTNER_DISCOUNT', '合作伙伴折扣');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', '搜索用户');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', '输入几个字符来搜索用户。<br/>当您选择一个用户时，您将自动将其添加为合作伙伴，您将进入下一个页面，您可以在其中分配属性和折扣给用户。');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', '现有合作伙伴');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', '选择一个伙伴，进入伙伴管理页面。');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', '合作伙伴：');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', '搜索属性');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "从属性名称中输入几个字符并选择一个属性。<br/>当您选择该属性时，您会将其添加到合作伙伴的投资组合中，但他们尚未享受任何折扣，您需要自己设置。");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', '当前属性');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "点击一个属性来编辑该属性的合作伙伴的折扣设置。");
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', '此帐户已被暂停，目前无法使用此帐户管理您的财产。');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', '经理账户被暂停');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', '经理账户恢复');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', '请注意，您的物业经理帐户已被暂停。在帐户恢复之前，您将无法执行任何物业管理功能。');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', '请注意，您的物业经理帐户现已激活。您可以继续执行任何物业管理功能。请登录您的帐户并确保已发布适当的物业。谢谢。');
jr_define('_JOMCOMP_MYUSER_REMOVE', '删除收藏');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', '预订数据存档');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', '预订数据存档是点击确认预订按钮后捕获的预订信息的原始转储。将鼠标悬停在日期上可查看原始数据转储。该信息存储在 XXX__jomres_booking_data_archive 表中。');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', '编辑账户');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', '要将用户添加为物业经理，首先在上面的字段中输入其用户名的前几个字符。找到正确的用户后，单击该名称以选择它，然后选择哪个物业( s) 他们应该是管理员。用户<em>必须已经是 CMS 中的用户</em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', '现有经理');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', '睡眠');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', '按客人号码下拉菜单显示搜索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', '星星');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', '显示星星下拉菜单');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', '睡眠');
jr_define('_JOMRES_SEARCH_STARS', '星星数');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', '属性数量');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', '加载 Jomres jQuery 库？');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', '如果你有一个使用 jquery 的模板，你可以把它设置为 NO。这可以解决一些模板上的 jquery 冲突问题，但不是全部。');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', '启用此选项可以让您在前端的全屏视图中看到语言切换器。');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', '为上传的图像自动创建缩略图。');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', '小缩略图最大宽度(px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', '属性列表中使用小缩略图，而属性标题中使用中等大小的缩略图。');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', '小缩略图最大高度(px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', '中等缩略图最大宽度(px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', '中等缩略图最大高度 (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', '标签翻译');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', '使用佣金功能吗？');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', '将此设置为是以显示已提出的经理佣金发票。');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', '经理预订创建佣金发票？');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', '如果经理进行预订，是否也会创建佣金发票行项目？');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', '在发票标记为待处理的情况下自动暂停经理？');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', '自动暂停阈值');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', '这个阈值是经理在他们被暂停和他们的财产未公开之前必须支付发票的天数。');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', '语言环境');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', '使用此选项更改站点的语言上下文。此功能允许 Jomres 使用适合您当前焦点的标签，因此如果您的焦点是游艇经纪，那么更改上下文将允许 Jomres 显示来自不同语言文件的标签。例如，如果您将上下文设置为"Yacht Brokerage"，则 Jomres 将首先查找当前语言，然后在 /'.JOMRES_ROOT_DIRECTORY.'/languages 目录中搜索子目录称为"yachtbrokerage"。如果当前语言的文件存在，则将使用该文件。如果不存在，则 Jomres 将在同一目录中搜索英文文件。如果找不到，Jomres 将使用/'.JOMRES_ROOT_DIRECTORY.'/languages 目录中当前所选语言的语言文件。');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', '高级站点配置');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', '如果您想使用高级站点配置选项，请将此选项设置为 Yes。如果您刚开始使用 Jomres，那么我们建议您暂时将其保留为 No，因为默认安装是足以让您入门，而您应该将 Jomres 添加到主菜单并以"管理员"身份登录前端并开始配置您的属性。请注意，如果您不这样做，许多高级选项可能不可用\'没有安装适当的插件。免费的核心系统的用户将无法充分利用他们启用的功能。');
jr_define('_JOMRES_CONFIG_JQUERY_UI', '加载 Jomres jQuery UI 库？');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', '价格（先高后)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', '价格（最低先)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', '价格汇总和估计应按每晚/每周/每月定价？');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', '每晚');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', '每周');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '每月');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', '每人');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', '周数');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', '月份(s) 在');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', '人员编号的搜索选项应该如何工作？');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', '影响所有搜索模块。当使用客人号码搜索功能时，搜索功能是否应该寻找那些关税将支持客人人数上升并等于所选人数、完全等于所选人数的酒店，或者选择的数字和更大的数字？');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', '请稍候，您的订单正在处理中，您将被重定向到 Paypal 网站。');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', '如果您没有在 5 秒内自动重定向到 Paypal...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', '点击这里');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', '预订有效时间');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', '预订有效期至');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', '客人姓名');
jr_define('_JRPORTAL_COUPONS_DESC_478', "可以生成折扣代码并将其传递给客人，作为预订的奖励。<br/>
有效起止日期是指可以进行预订的日期，而预订有效起止日期是指预订必须涵盖的日期才能使优惠券有效。如果预订不在该期限内，则该期限以外的天数将适用正常费率。<br/>
如果您希望预订只提供给一位特定客人，请在下拉菜单中选择该客人的姓名以将优惠券仅限于该客人。");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', '使用您的优惠券，此预订已从 ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' to ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', '将此设置为否以禁用 Jquery UI javascript 和 CSS 文件的加载。');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', '加载 Jomres jQuery UI CSS 库？');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', '将此设置为否以仅禁用 jquery UI CSS 文件。');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', '总公司税');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', '未公开的财产');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', '使用转换功能');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "使用 Jomres 在线转换功能。这将为前端用户提供一个转换下拉菜单，他们将能够在其中选择他们希望看到的货币提供的价格。调整价格输出以显示转换后的价格价格后跟括号中的房产\"本地\"价格。");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', '我们已尽最大努力获得最准确和及时的汇率。我们的在线货币兑换功能仅供参考，并非旨在提供准确数字。因此，我们不保证汇率的准确性。使用此功能，您将被视为同意任何依赖或使用汇率转换功能的风险完全由您自己承担。');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', '货币转换/货币代码');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP 检测 API 密钥');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', '要自动设置货币代码下拉菜单 Jomres 能够使用名为 IPinfoDB 的免费服务来检测访问者的国家/地区，但是您需要在 <a href="https://www.ipinfodb.com/login" target="_blank">IPinfoDB</a> 首先。');
jr_define('_JOMRES_DEBUGGING_TAB', '调试');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', '住宿不含税');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', '住宿含税');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', '房税：');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', '打开预订表格');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', '返回属性详情');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', '自动选择？');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', '余额(付定金后)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', '根据资源的特征过滤资源。');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', '最新预订');
jr_define('_JOMRES_DATEPERIOD_SECOND', '秒');
jr_define('_JOMRES_DATEPERIOD_MINUTE', '分钟');
jr_define('_JOMRES_DATEPERIOD_HOUR', '小时');
jr_define('_JOMRES_DATEPERIOD_DAY', '天');
jr_define('_JOMRES_DATEPERIOD_WEEK', '周');
jr_define('_JOMRES_DATEPERIOD_MONTH', '月');
jr_define('_JOMRES_DATEPERIOD_YEAR', '年');
jr_define('_JOMRES_DATEPERIOD_DECADE', '十年');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', '前');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', '从现在开始');
jr_define('_JOMRES_WHOLEDAY_TITLE', '全天预订？');
jr_define('_JOMRES_WHOLEDAY_DESC', '默认情况下，系统会在晚上预订资源，因此预订从 1 月 1 日开始 '.date('Y', strtotime('next year')).' 到 1 月 2 日 ' .date('Y', strtotime('next year')).' 只包含一晚。但是，如果您将此选项设置为 Yes，那么预订将涵盖整整一天，因此在那些日子的预订将涵盖这两天天，客户将被收取两天的费用。');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '每天');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', '每人每天');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', '取货');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', '返回');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'days(s) at');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', '返回日期不正确');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', '预订时间太短，取件和归还日期之间至少要间隔这么多天：');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', '取件/退货最小间隔');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', '预订表格中取货和还车日期之间的最小间隔。间隔1表示取货和还车日期可以设置为同一天，但这仍然取决于最小值由预订引擎自动计算的间隔，因为它会检查在预订期间有效的关税。');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', '价格汇总和估计应按每天/每周/每月定价吗？');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', '每天');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', '取货日期前几天');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', '从"今天"开始，在取货日期之前必须经过的最小天数。');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', '如果您想限制提前预订（使用下一个字段来设置天数限制)，请将其设置为 yes。如果您将其设置为 yes，那么如果用户尝试预订超过 n提前几天，然后他们的取件日期将恢复为今天的日期');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', '显示返回日期输入？');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "如果您不想显示返回日期输入框，请将此设置为否。仅当您知道自己在做什么时才使用此选项，因为预订中的返回日期将始终设置为当天在取件日期之后。");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', '如果您将此设置为 Yes，则将在固定时间段内进行预订。如果将其设置为 No，则确保"定义的取件日"未设置为 Yes（除非您特别指定)想要强迫人们在一周中的某一天取货)否则您将不会在可用性日历中获得很多链接。');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', '预定义取件日');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', '仅适用于提供定期预订的网站。选择必须在一周中的哪一天取货。');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', '固定取货日');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', '固定取件日期重复：');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings,并且该列表实际上是您选择的数字的两倍，因为它具有相似数量的历史日期（如果可用)。');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', '每人每天');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', '如果您想按人每天收费，请选择是。如果不是，则费用将按每个资源每天计算');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', '可变存款允许您定义如果预订的取件日期在"今天"的 N 天内，您是否愿意收取全额费用。将此选项设置为是以启用该功能, 并在下面输入天数，例如，如果取货日在 60 天内，则收取的押金金额将为全额，否则金额将基于上面配置的押金选项。');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', '大多数企业将根据给定日期可用的所需类型资源的数量重新计算资源价格。这允许他们为在此期间不忙的资源/业务类型提供折扣在给定时间段内吸引可能会错过的业务。<br/>启用和配置此插件允许您根据给定日期业务中所选类型的资源数量提供可调整的定价。 <br/> 天数阈值定义了在此功能调整资源价格之前取货日期必须在天数内，然后百分比选项允许您配置在应用给定折扣之前可以使用的资源百分比. 但请注意，如果预订了多个资源，则当前折扣级别将应用于所有资源，并且不会随着选择更多资源而减少。');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', '阈值（取件日期和今天之间的天数)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', '取件待定');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', '今天提货');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', '拿起');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', '今天返回');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', '逾期退货');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', '还没有接');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', '天');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', '标记一个预订已取。');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', '标记已返回的预订。');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', '标记一个预订已取');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', '标记已返回的预订');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', '每日费用：');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', '天数：');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', '覆盖住宿总数');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', '保存覆盖');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', '通过电子邮件向新用户发送他们的登录详细信息？');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', '如果"创建新用户"选项设置为"是"，您可以将此选项设置为"否"以确保在创建用户后不会通过电子邮件向他们发送登录详细信息。如果您自动例如，将新用户添加到邮件列表，并且不希望用户实际登录。');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', '在预订表格汇总汇总中显示税收输出？');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', '通过将此选项设置为否，防止预订表单显示总计摘要中的税价字段。');
jr_define('_JOMRES_COM_A_ODDS_CANCELATION_THREASHOLD', '取消阈值');
jr_define('_JOMRES_COM_A_ODDS_CANCELATION_THREASHOLD_DESC', '已登录，已注册的客人可以取消自己的预订。这里可以设置阈值，以天为单位，在到达日期前一定天数后不能取消预订。');
jr_define('_JOMRES_EDIT_PROFILE', '编辑个人资料');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', '属性类型关系');
jr_define('_JOMRES_IMAGE', '图片');
jr_define('_JOMRES_CRATES_CLICKINITIAL', '点击一个字母以显示所有带有第一个字符的企业。一旦你有一个属性列表，你就可以为这些属性分配佣金率，或者点击他们的"编辑"图标查看业务\' s 统计数据。');
jr_define('_JRPORTAL_TAX_RATE_EDIT', '编辑税率');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', '编辑自定义字段');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', '许可证服务器密码');
jr_define('_JOMRES_LICENSESERVER_USERNAME', '许可证服务器用户名');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', '如果您在许可证服务器上有用户名和密码，请在此处输入它们。这将帮助您访问您有权使用的插件。如果您在上面的字段中输入了有效的支持密钥，那么就没有必要在此处提供用户名/密码。');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', '这个 Jomres 版本：');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', '最新的 Jomres 版本');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alert : Jomres有新版本可用，建议您尽早升级。');
jr_define('_JOMRES_PRODUCT_INFORMATION', '欢迎使用 Jomres。核心系统是免费的，但可以通过安装插件来增强。要访问这些插件，您需要下载和支持许可证。如果您想购买 Jomres Starter , 商业或企业许可证，<a href="https://www.jomres.net/prices" target="_blank">请访问我们的网站</a>了解如何升级。');
jr_define('_JOMRES_PRODUCT_INFORMATION2', '该系统适用于任何场景，无论是单个属性的简单预订表格，还是具有多个用户、多种语言、多个属性的站点。请参阅"帮助"菜单中的部分，包括"入门"页面，它将指导您完成第一步。');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', '活动属性');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', '电子邮件设置');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', '将此选项设置为 Yes 以使用这些备用 SMTP 设置。越来越多的 Web 主机似乎正在阻止 PHP 邮件功能，因此您可以选择覆盖 Jomres 从您的主机采用的邮件设置CMS（通常是 Joomla)并在此处使用您自己选择的设置。');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', '备用主机');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', '将此更改为您的 smtp 邮件服务器');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', '备用端口');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', '将此更改为您的 smtp 端口');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', '备用协议');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "根据您的 smtp 服务器设置，您需要将此留空，或者输入 'ssl' 或 'tls'。如果您不知道，请咨询您的 SMTP 提供商。");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', '使用身份验证');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', '如果您的 SMTP 服务器需要客户端登录，请将其设置为 Yes。然后将使用用户名和密码。');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', '备用用户名');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', '备用密码');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', '快速信息');
jr_define('_JOMRES_MENU_SHOW', '显示');
jr_define('_JOMRES_MENU_HIDE', '隐藏');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', '默认');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', '任何人');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', '注册');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', '经理');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', '超级经理');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', '没人');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', '菜单访问控制');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', '此功能允许您控制谁将能够在主菜单中看到插件。通常，用户选项 00009 可由任一/或未注册的站点访问者查看，00010 选项通常指的是接收类型的活动，这些活动是每天使用，而 00011 选项用于设置和配置属性，但访问频率较低。');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', '接待员');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', '完全访问控制');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', '将此选项设置为是以启用完全访问控制功能，然后访问系统维护下的访问控制选项以配置访问控制。');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "但是请注意，这些设置不控制它们连接到的底层脚本，例如，如果您将 <i>00009user_option_03_search</i> 设置为\"Manager\"，则了解 Jomres 的用户仍然可以通过在浏览器的地址栏中输入 http://www.domain.com/index.php?option=com_jomres&task=search 来调用 j06000search.class.php。这是有意为之，因为此菜单访问控件仅控制可以在Jomres 主菜单。如果您需要更严格的控制，请将站点配置 -> 完全访问控制选项设置为是，然后重新访问菜单访问控制选项。");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', '完全访问控制');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>此功能仅供高级用户使用。如果您不知道它的用途，也没有特定的使用原因，请返回站点配置并设置完全访问权限控制选项为否。</strong><br/>
此功能允许您控制谁可以访问哪些微型组件（除了一些硬编码到系统中的例外)。如果脚本名称旁边的访问级别设置为默认，则完全访问控制选项设置为是 <strong>任何人</strong> 都可以访问他们不应访问的脚本，因此如果您打算使用它您必须为此处列出的<strong>每个</strong> Jomres 微型组件设置访问控制级别。如果您不知道这些微型组件是做什么的，那么我们强烈建议您根本不要使用此功能。<br/>
在 Jomres 中，访问级别遵循金字塔，因此超级物业经理比经理更大。总之超级经理>经理>接待员>注册>未注册。因此，如果注册用户可以访问微型组件，那么接待员、经理和超级经理也可以访问。<br/>
请注意，您无法控制管理员区域微型组件。管理员区域中的任何人都被认为是受信任的用户，因为他们不应被阻止访问任何脚本（尤其是这个脚本)。
");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', '警告！您启用了完全访问控制，但是我们统计了访问控制设置并将它们与应该控制的微型组件的数量进行了比较，两者不匹配，因此您可能有一些不受控制的脚本。这可能是一个安全问题，我们敦促您通过访问访问控制功能并检查是否应用了适当的级别来立即解决此问题。');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', '对这个属性有管理员权限的用户');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', '您的电子邮件地址');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', '模型');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', '参数');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', '力');
jr_define('_JOMRES_METATITLE', '元标题');
jr_define('_JOMRES_METADESCRIPTION', '元描述');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', '添加您的财产：第 2 步，共 2 步');
jr_define('_JOMRES_CART_TITLE', '我建议的预订');
jr_define('_JOMRES_CART_INFO', '注意，这些预订尚未保存。如果您退出或会话过期，它们将丢失。记得确认您的预订！');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', '确认预订');
jr_define('_JOMRES_CART_OR', ' or ');
jr_define('_JOMRES_CART_SAVEFORLATER', '保存以备后用');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', '您还没有保存任何预订。');
jr_define('_JOMRES_CART_VIEWCART', '查看购物车');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', '语言文件子目录');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', '默认纬度起点');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', '默认经度起点');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Emails sent from which address?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'List view');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Photo view');
jr_define('_JOMRES_COMPARE', 'Compare');
jr_define('_JOMRES_REMOVE', 'Remove');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Return to search results');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Add to favourites');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Remove from favourites');
jr_define('_JOMRES_VIEWSHORTLIST', 'View your shortlist');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Important: Cookie Policy');
jr_define('_JOMRES_COOKIEPOLICY_2', 'We use cookies to help keep our site relevant and easy to use.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Read more...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU legislation requires that all websites clearly specify if cookies are being used and their purpose.');
jr_define('_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6', 'Yes, I accept the use of cookies in this way.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Deposit required is cost of the first night?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', "You haven't added any items to your favourites.");
jr_define('_JOMRES_SAFEMODE', 'Enable safe mode?');
jr_define('_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'Next');
jr_define('COMMON_CANCEL', 'Cancel');
jr_define('COMMON_SUBMIT', 'Submit');
jr_define('COMMON_SAVE', 'Save');
jr_define('COMMON_DELETE', 'Delete');
jr_define('COMMON_RETURN', 'Return');
jr_define('COMMON_CLOSE', 'Close');
jr_define('COMMON_BACK', 'Back');
jr_define('COMMON_HOME', 'Home');
jr_define('COMMON_NEW', 'New');
jr_define('COMMON_SEND', 'Send');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being "spammed" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href="http://www.google.com/recaptcha" target="_blank">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Public key');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Private key');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?");
jr_define('COMMON_ACTION', 'Action');
jr_define('COMMON_VIEW', 'View');
jr_define('BACKTOTOP', 'Back to top');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Weak');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Strong');
jr_define('_JOMRES_INPUTFILTERING', 'Input filtering');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Input filtering level');
jr_define('_JOMRES_INPUFILTERING_LEVEL_DESC', "大多数输入系统的数据都通过首先剥离任何 html 标签进行消毒，然后使用 PHP 变量过滤功能使数据在输入数据库之前安全。您可能希望允许某些输入（例如属性详细信息页面中的文本输入)以包含 HTML。您可以使用两个级别的过滤来过滤此输入，弱或强。如果用户输入，您应该只使用弱设置数据是您自己信任的，例如其他系统管理员，否则您应该将其设置为强。当设置为强（推荐)时，您仍然可以通过编辑下一个设置\"HTML Purifier allowed tags\"来指定允许使用哪些标签。") ;
jr_define('_JOMRES_INPUUTFILTERING_PURIFIER_ALLOWED_TITLE', '允许的输入标签');
jr_define('_JOMRES_INPUFILTERING_PURIFIER_ALLOWED_DESC', "您可以编辑html purifier 允许通过其过滤系统的标签。默认为'p,b,strong,a[href],i'（即段落、粗体、强、链接和斜体) )。有关允许标记的更多信息，请阅读 <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a> 上的 HTML purifier 文档。虽然您可以更改此设置，但建议将其设置为默认值。");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', '允许输入');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "您可以通过编辑此选项来定义哪些表单输入将允许 html，添加到此列表中的任何输入都将通过 HTML Purifier 进行解析，而不是将所有 html 剥离。默认为：'property_description property_checkin_times property_area_activities property_transports_directions property_policies_disclaimers'。通过添加它们的名称来添加更多输入，用空格分隔。");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', '选项卡中的属性详细信息？');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', '设置此选项以在选项卡中显示属性详细信息。将其设置为 no 以在没有选项卡的情况下显示它们。');
jr_define('COMMON_PRINT', '打印');
jr_define('COMMON_EDIT', '编辑');
jr_define('COMMON_COPY', '复制');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres 旨在在 Bootstrap 2 或 Bootstrap 3 框架中工作。安装 BS2 或 BS3 主题或模板后，设置此开关以选择您希望 Jomres 工作的 Bootstrap 风格和。');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', '在前端使用 Jomres Bootstrap 模板吗？');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', '这里有一些你可能需要考虑的替代方案。');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "自动检测客人所在国家？");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "如果客人之前没有预订过，系统将尝试自动检测客人所在的国家/地区。您可以将此选项设置为否，并定义您希望出现在预订表格中的国家/地区，在下一个选项。");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', '关于Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', '帮助');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', '入门');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', '访问控制');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', '开发者工具');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', '语言');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', '创收');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', '网站结构');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', '手册(在线)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', '我的账户(在线)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', '门户功能');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', '插件管理器');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', '整合');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', '报告/统计');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', '帮助');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', '更新');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', '支付方式');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', '关税默认');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', '这仅适用于新关税');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', '几年显示');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', '定义编辑关税类型时显示的年数');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', '发票');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', '账户详情');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', '登录');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', '注销');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', '搜索');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', '仪表板');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reserve');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', '发票');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', '设置');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', '杂项');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', '编辑国家');
jr_define('_JOMRES_EDIT_COUNTRY_ID', '国家ID');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', '国家代码');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', '国家名称');
jr_define('_JOMRES_EDIT_REGION_TITLE', '编辑区域');
jr_define('_JOMRES_EDIT_REGION_ID', '区域ID');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', '国家代码');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', '区域名称');
jr_define('_JOMRES_COM_LISTCOUNTRIES', '列出国家');
jr_define('_JOMRES_COM_LISTREGIONS', '列表区域');
jr_define('_JOMRES_EXPORT_DEFINITIONS', '导出定义');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', '此功能允许您导出使用语言翻译功能构建的翻译。它将构建一个文本字段，其中包含构建新语言文件所需的所有数据，所有您需要做的是将此输出复制并粘贴到一个新的语言文件中，您可以将其放入新的基于 Jomres 的服务器上，或者如果您想回馈 Jomres 社区。');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', '翻译语言环境');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', '翻译语言文件字符串');
jr_define('_JOMRES_COM_NOTAMANAGER', "错误，您登录的用户不是 Jomres 中的超级经理，您将无法使用此功能，除非您使用了物业经理功能使自己既是经理又是经理超级管理员。这是一项安全功能。");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', '属性列表默认布局');
jr_define('_JOMRES_STAYFORAMINIMUMOF', '停留至少');
jr_define('_JOMRES_NIGHTSFOR', '过夜');
jr_define('_JOMRES_AGENT', '代理');
jr_define('_JOMRES_AGENT_DETAILS', '代理详情');
jr_define('_JOMRES_AGENT_LISTINGS', "代理列表");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', '自动批准新属性');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', '如果您将此选项设置为否，那么您将需要手动批准新属性。在属性获得批准之前，经理/超级物业经理不能发布该属性。');
jr_define('_JOMRES_APPROVALS_MENU_NAME', '批准');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', '这个属性还没有被批准。一旦它被批准你就可以发布它。');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', '对不起，您不能发布此属性，因为它尚未获得批准。');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', '新属性需要批准');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', '系统已添加需要您批准的属性。单击链接查看等待批准的属性列表：');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', '您的财产已被批准');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "恭喜，您的资源已通过审核，请点击以下链接查看资源控制面板：");
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', '区域名称是可翻译的');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "除非您运行的服务器速度非常快，否则建议您将此设置为否。由于区域名称数量众多，区域名称翻译会占用大量内存，这会减慢您的搜索结果下。");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', '客人已预订。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', '对不起，该电子邮件地址已被使用。如果这是您的电子邮件地址，请确保您在尝试预订之前已登录。');
jr_define('JOMRES_TAPTOCALL', '点击通话');
jr_define('JOMRES_NEWREVIEW_SUBJECT', '新评论');
jr_define('JOMRES_NEWREVIEW_MESSAGE', '一个新的评论已经留给');
jr_define('JOMRES_NEWREPORT_SUBJECT', '新报告');
jr_define('JOMRES_NEWREPORT_MESSAGE', '有评论报告');
jr_define('JOMRES_SUPERIOR', '高级');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', '总计（不含税)：');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', '总计（含税)：');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', '总税：');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', '输入两个字：');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', '输入你听到的内容：');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', '重放音轨');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', '以 MP3 格式下载曲目');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', '视觉模式');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', '音频模式');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', '刷新');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', '帮助');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', '对不起，不正确，请重试。');
jr_define('JOMRES_GOOGLE_MAPS', '谷歌地图选项');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', '使用天气层？');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', '华氏');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', '使用传输层？');
jr_define('JOMRES_GOOGLE_MAPS_POIS', '启用 Gmap 兴趣点（可能包括您的竞争对手)？');
jr_define('_JOMRES_METAKEYWORDS', '元关键字');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', '将此代码扫描到您的手机中以获取前往我们的路线。');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "你输入的增值税号似乎不正确。你应该有这样的东西：BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', '增值税号无效。请使用 Europa 增值税号验证网络服务 (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', '恭喜。我们能够验证您的增值税号。');
jr_define('_JOMRES_TAX_RULES_LIST', '列出税收规则');
jr_define('_JOMRES_TAX_RULE', '税收规则');
jr_define('_JOMRES_TAX_RULE_INFO', '税收规则用于为不同地区建立不同的税收规则。这些税收规则会影响进行预订的人，如果他们已经注册、登录并使用"编辑我的帐户"页面编辑了他们的帐户. 这些规则的目的是为那些免征增值税的地区的预订者提供服务，您可能会发现您不需要创建很多规则，如果有的话。');
jr_define('_JOMRES_TAX_RATES_IMPORT', '进口税率');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', '如果您愿意，我们可以为您导入欧盟的税率。请注意，如果您使用此功能，那么您现有的所有税率都将被删除。');
jr_define('_JRPORTAL_TAX_RULE_EDIT', '编辑税收规则');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', '该物业的增值税号。');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', '请输入此房产的增值税号。');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', '增值税号已验证。');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', '增值税号未验证。');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', '此处输入的业务详细信息将用于佣金和订阅发票。');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "您似乎还没有填写您的帐户详细信息。要在网站上列出您的财产，我们需要您先填写您的帐户详细信息，然后我们才能进一步操作。");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', '生产还是开发？');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', '如果您将此选项设置为开发，我们将启用错误报告，否则设置为生产时将关闭。如果这是一个实时服务器，我们建议您将此选项设置为"生产"。');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', '生产');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', '开发');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', '资源详情');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', '关税详情');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', '仅');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', '左！');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', '资源特性');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', '无法删除此资源功能，它已分配给资源。从此资源中删除该功能并重试。');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', '媒体中心');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', '添加图片');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', '房间图片');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', '物业主图');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', '幻灯片图像');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', '清除列表');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', '拖放文件到这里');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', '选择您要为其上传图片的资源。如果您可以上传单个资源（例如房间)的图片，您将获得第二个下拉菜单以选择特定资源。');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', '如果您上传多张图片作为"主要房产图片"，这些图片将用于房产列表中。幻灯片图片将显示在房产详情页面上。');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', '查看你的图片');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', '删除图片');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', '上传图片');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', '房间类型图标');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', '属性特征图标');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', '上传所有文件');
//8.0
jr_define('COMMON_PREV', '上一个');
jr_define('COMMON_MORE', '更多');
jr_define('_JOMRES_DASHBOARD_TODAY', '今天');
jr_define('_JOMRES_DASHBOARD_YEAR', '年');
jr_define('_JOMRES_DASHBOARD_MONTH', '月');
jr_define('_JOMRES_DASHBOARD_WEEK', '周');
jr_define('_JOMRES_DASHBOARD_DAY', '天');
jr_define('_JOMRES_HLEGEND', '传奇');
jr_define('_JOMRES_HFILTER', '过滤器');
jr_define('_JOMRES_HFROM', '来自');
jr_define('_JOMRES_HTO', 'To');
jr_define('_JOMRES_HNEW_BOOKING', '新预订');
jr_define('_JOMRES_HSTATUS_DEPOSIT', '存款状态');
jr_define('_JOMRES_HSTATUS_GUEST', '访客状态');
jr_define('_JOMRES_HSTATUS_BOOKING', '预订状态');
jr_define('_JOMRES_HSTATUS_PUBLISHING', '发布状态');
jr_define('_JOMRES_HSTATUS_INVOICE', '发票状态');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', '发票类型');
jr_define('_JOMRES_HSTATUS_APPROVED', '批准');
jr_define('_JOMRES_HSTATUS_CURRENT', '当前业务');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', '显示预订');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', '显示发票');
jr_define('_JOMRES_STATUS_ANY', '任何');
jr_define('_JOMRES_STATUS_PAID', '付费');
jr_define('_JOMRES_STATUS_NOTPAID', '未付款');
jr_define('_JOMRES_STATUS_CHECKEDOUT', '签出');
jr_define('_JOMRES_STATUS_ACTIVE', '活动');
jr_define('_JOMRES_STATUS_CANCELLED', '取消');
jr_define('_JOMRES_STATUS_PUBLISHED', '已发布');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', '未发布');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', '有活动预订的客人');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', '过去预订的客人');
jr_define('_JOMRES_STATUS_BOOKINGS', '预订');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', '订阅');
jr_define('_JOMRES_STATUS_COMMISSIONS', '佣金');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', '我所有的业务');
jr_define('_JOMRES_ACTION_SET_CURRENT', '设为当前');
jr_define('_JOMRES_ACTION_CHECKIN', '签到');
jr_define('_JOMRES_ACTION_CHECKOUT', '退房');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', '预订');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', '属性');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', '客人');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', '报告');
jr_define('_JOMRES_HLIST_GUESTS', '客人');
jr_define('_JOMRES_HLIST_GUESTS_MENU', '列出客人');
jr_define('_JOMRES_HLIST_INVOICES_MENU', '列出发票');
jr_define('_JOMRES_HLIST_PROPERTIES', '属性');
jr_define('_JOMRES_HQUICK_BOOKING', '快速预订');
jr_define('_JOMRES_HDATE_OF_BOOKING', '预订日期');
jr_define('_JOMRES_HTWO_WEEKS', '两周');
jr_define('_JOMRES_BOOKING_CANCELATION_WARNING', '此预订将被取消。按确定取消预订。');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', '今天签到');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', '今天结帐');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', '当前居民');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', '导航栏位置');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', '默认(内容区域)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', '固定到顶部');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', '固定到底部');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', '倒置导航栏（颜色变化)');
jr_define('_JOMRES_BOOKING_NUMBER', '预订号');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', '显示客人');
jr_define('_JOMRES_BOOTSTRAP_VERSION', '引导程序版本');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres 包括它自己的模板集，每个受支持的 Bootstrap 版本都有一个。基于 Bootstrap 的 Joomla 和 Wordpress 模板/主题将提供特定版本的 Bootstrap，因此您需要确保您选择的选项 这里与您的模板/主题兼容。如果您的主题不提供任何 Bootstrap 代码，请将此选项设置为 No Bootstrap in Theme，然后 Jomres 将自动包含 Bootstrap 3 文件供它自己使用。");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', '显示客人');
jr_define('_JOMRES_HFIXED_PERIODS', '固定周期');
jr_define('_JOMRES_HDEPOSITS', '存款');
jr_define('_JOMRES_HBOOKING_FORM', '预订表格');
jr_define('_JOMRES_HREQUIRED_FIELDS', '必填字段');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'My Street');
jr_define('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', '扩展配置');
jr_define('SIMPLE_CONFIGURATION', '简单配置');
jr_define('_JOMRES_HRESOURCE_FEATURES', '资源特征');
jr_define('_JOMRES_HRESOURCE_TYPE', '资源类型');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', '编辑客人类型');
jr_define('_JOMRES_HEDIT_COUPON', '编辑优惠券');
jr_define('_JOMRES_HEDIT_EXTRA', '编辑额外');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', '创建多个资源');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', '生成资源');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', '有多少资源？');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', '资源类型');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', '每个资源的最大客人数');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', '删除所有现有资源？');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', '请注意，您当前正在查看管理员区域，高级站点配置设置为否。如果您想查看更多选项，请将站点配置 -> 其他 -> 高级站点配置设置为是。');
jr_define('DATATABLES_SINFO', '显示_START_到_END_的_TOTAL_个条目');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', '批准');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', '拒绝预订查询');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', '批准预订查询');
jr_define('_JOMRES_STATUS_APPROVED', '批准');
jr_define('_JOMRES_STATUS_REJECTED', '拒绝');
jr_define('_JOMRES_STATUS_INQUIRY', '查询');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', '预订需要批准或可用性确认？');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', '如果设置为yes，则在进行预订时，它不会显示在可用性日历上（其他客人仍然可以预订那些日期和资源)，直到物业经理接受/确认预订的可用性. 一旦确认，预订将被插入为临时预订（如果不覆盖其他预订；其他客人不能再预订相同的日期)，并向客户发送电子邮件以进行付款。');
jr_define('_JOMRES_ERROR', '错误');
jr_define('_JOMRES_ERROR_MESSAGE', '对不起！尝试处理此函数时发生错误。已为您报告，我们将调查。');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', '消息');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', '文件');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', '行');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', '电子邮件模板');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', '编辑邮件模板');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', '电子邮件主题');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', '电子邮件文本');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', '电子邮件类型');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', '电子邮件名称');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', '邮件描述');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', '有关自定义电子邮件和可用输出列表的帮助，请参阅此页面：<a href="https://www.jomres.net/manual/property-managers-guide/48-your -toolbar/settings/254-email-templates" target="_blank">电子邮件模板帮助</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', '网站管理员新预订电子邮件');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', '如果启用了全球 Paypal 网关，则在进行新预订时向站点管理员发送电子邮件');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', '酒店新预订邮件');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', '在进行新预订时向业主发送电子邮件');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', '客人新预订电子邮件');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', '新预订时发送给客人的电子邮件');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', '客人确认信');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', '可打印的信件或电子邮件，可由业主手动发送以确认预订');
jr_define('_JOMRES_CAN_BE_APPROVED', '这个预订可以被批准。所有选定的资源在选定的日期都可用。');
jr_define('_JOMRES_CANT_BE_APPROVED', '此预订无法被批准，因为部分资源已在所选日期预订。您需要先修改预订。');
jr_define('_JOMRES_SHOW_POWEREDBY', '在 Jomres 页脚中显示 Powered by Jomres 链接。');
jr_define('GUEST_BUDGET', '预算');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', '使用预算功能吗？');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "仅限自举网站！预算功能是属性列表的一个功能，客人可以使用它来突出显示每晚价格低于特定数字的属性。该功能有一些限制，因为它可能不适用于某些使用多种不同货币的网站。请注意，如果您正在使用此插件和 Featured Listings 插件，则在显示属性列表时，您的特色列表包装类会自动更改为 'panel-primary'。");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', '姓名：');
jr_define('_JOMRES_FOR', 'For');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', '晚上');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', '晚');
jr_define('_JOMRES_LIVE_SCROLLING', '在属性列表中使用实时滚动/无限滚动？');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', '二月');
jr_define('_JRPORTAL_MONTHS_SHORT_2', '三月');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'May');
jr_define('_JRPORTAL_MONTHS_SHORT_5', '君');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', '八月');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define('_JRPORTAL_MONTHS_SHORT_11', '十二月');
jr_define('DATATABLES_SEMPTYTABLE', '表中数据为空');
jr_define('DATATABLES_SINFO', '显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项');
jr_define('DATATABLES_SINFOEMPTY', '显示第 0 至 0 项结果，共 0 项');
jr_define('DATATABLES_SINFOFILTERED', '(由 _MAX_ 项结果过滤)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', '显示 _MENU_ 项结果');
jr_define('DATATABLES_SLOADINGRECORDS', '载入中...');
jr_define('DATATABLES_SPROCESSING', '处理中...');
jr_define('DATATABLES_SSEARCH', '搜索:');
jr_define('DATATABLES_SZERORECORDS', '没有匹配结果');
jr_define('DATATABLES_SFIRST', '首页');
jr_define('DATATABLES_SLAST', '末页');
jr_define('DATATABLES_SNEXT', '下页');
jr_define('DATATABLES_SPREVIOUS', '上页');
jr_define('DATATABLES_SSORTASCENDING', ': 以升序排列此列');
jr_define('DATATABLES_SSORTDESCENDING', ': 以降序排列此列');
jr_define('DATATABLES_SHOWHIDE', '更改列');
jr_define('_BOOKING_ONREQUEST', '按要求预订');
jr_define('_BOOKING_INSTANT', '即时预订');
jr_define('_JOMRES_COM_FONTAWESOME', '包括字体真棒图标集？');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', '如果您的模板不包含 Font Awesome，请将其设置为 Yes。');
jr_define('_BOOKING_CALCQUOTE', '请求预订');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', '亲爱的');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', '选择一个站点');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', '站点 id');
jr_define('_JOMRES_IS_EU_COUNTRY', '欧盟国家？');
jr_define('_JOMRES_HLASTCHANGED', '最后更改');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', '酒店预订取消邮件');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', '取消新预订时发送给业主的电子邮件');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', '客人预订取消电子邮件');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', '取消新预订时发送给客人的电子邮件');
jr_define('_JOMRES_TEST_EMAIL_SEND', '发送测试邮件');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', '测试邮件');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', '这是来自您的预订系统的测试电子邮件。');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', '测试邮件发送成功');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', '测试邮件未发送');
jr_define('_INVOICE_TRANSACTIONS', '交易');
jr_define('_OPENEXCHANGE_API', '开放汇率API密钥');
jr_define('_OPENEXCHANGE_API_DESC', '要在服务之间转换价格，您需要一个开放汇率 API 密钥。您必须有一个 API 密钥才能在 Jomres 中正确显示价格，但是您可以 <a href="https://openexchangerates.org /signup/free" target="_blank">注册一个免费密钥</a>（每小时更新，每月 1000 次请求 - 无 HTTPS、电子邮件支持或高级功能)。Jomres 每天下载一次汇率，只要你只在少数几个网站上使用密钥，你不太可能超过这些限制。在 Jomres 8.3 之前，我们使用了一个较旧的、未记录的 Yahoo 功能，但发现使用此功能与 Yahoo 的条款和条件。因此，我们必须假设该功能可能会在未来某个时候消失，因此更改为使用开放汇率。');
jr_define('_JOMRES_COMMISSION', '委员会');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', '如果您为单个可选附加项上传多张图片，则只会使用第一张图片。');
jr_define('_JRPORTAL_INVOICES_PAYNOW', '立即付款');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', '这张发票现在到期。请点击按钮选择付款方式。');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "这是您在此住宿预订时可以购买的一些好东西的清单。");
jr_define('GATEWAYS_INSTRUCTIONS', '在此页面上您可以配置任何已安装的网关。这些选项允许您为任何佣金或订阅发票付款。前端设置只能由 Paypal 覆盖，所有其他网关都需要通过属性配置 -> 网关选项卡，但是如果网关出现在此列表中，那么它应该能够处理预订押金付款和发票付款。');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', '显示在属性详细信息页面？');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', '属性详细信息页面设置');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Jomres 中的物业管理仅从站点前端 cpanel 进行。在此页面上，您将能够列出系统中的所有物业，因此您可以分配佣金率和批准/取消批准它们（如果这些功能已启用)。要创建新属性、编辑现有属性、管理预订或任何其他与属性/预订相关的任务，您必须登录站点前端并转到 Jomres 默认页面。在那里您将看到Jomres 前端面板。');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', '房间功能图标');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', '属性特征类别');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', '编辑属性特征类别');
jr_define('_JOMRES_HCATEGORY', '类别');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', '按类别显示属性特征？');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', '将此设置为YES以将属性特征分为类别。此选项仅影响属性详细信息页面上显示的属性特征。所有其他页面将显示它们而不将它们分成类别。');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', '撤销签入');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', '撤销结帐');
jr_define('_JOMRES_STATUS_UNISSUED', '未发行');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', '您的下载和支持密钥有效，您将能够通过插件管理器下载插件。');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', '您的下载和支持密钥无效，您将无法通过插件管理器下载插件。');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', '子类型');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "您还没有设置您的财产子类型。在这里您可以将其定义为 5 卧室别墅或 4 卧室小屋之类的东西，它可以帮助正在搜索的客人优化他们的搜索。") ;
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', '给你的财产一个子类型');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', '电子邮件模板');
jr_define('_JOMRES_CONTACT_SETTINGS', '联系人设置');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', '从这里您可以覆盖所有酒店的联系方式（电子邮件、电话、传真)，因此与客人的所有通信都将发送给您，而不是发送给业主。');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', '覆盖列表联系方式？');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "如果此选项设置为 Yes，那么酒店的电子邮件地址和电话号码将被替换为此选项卡中设置的地址。这会强制将所有通信发送到您指定的电子邮件地址，确保客人和酒店业主无法绕过预订引擎和由此产生的佣金费用。这也意味着，每当物业的描述发生更改时，该物业将被设置为未批准（如果启用了批准功能)，您将需要手动检查描述确保经理在再次批准之前没有在文本字段中输入电话或电子邮件详细信息。");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', '对列表详细信息所做的更改需要网站管理员验证。如果您保存新的详细信息，您的列表将被取消发布并等待网站管理员批准，然后才能再次对网站访问者可见。您将无法在线接收在您的列表未发布且待批准时进行的预订。');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', '查看预订请求');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', '确认预订请求');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', '修改预订请求');
jr_define('_JOMRES_INVOICE_MARKASPENDING', '将发票标记为待处理');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', '发票标记为待处理');
jr_define('_JOMRES_TRACKING_ENABLE', '发送匿名跟踪数据？');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', '选择是将匿名跟踪数据发送到 Jomres.net 以帮助我们更好地了解您如何使用系统。');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', '在尝试代表您的客户进行预订之前，请确保您的详细信息已在编辑我的帐户页面上完成。');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "客人的联系方式");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- 新客人 -- ');
jr_define('_JOMRES_CHARTS', '图表');
jr_define('_JOMRES_CHARTS_SELECT', '选择图表...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', '按年/月计算的收入');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "好的，让我们开始吧。首先你需要为这个属性创建一些房间。");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', '现在创建一些房间');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', '研究证明，拥有大量高质量图片的房产会产生更多的浏览量。上传一张主图和一些幻灯片图片，以提高您获得预订的机会。');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', '上传图片');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', '创建一些关税');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', '客人会预订什么？');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', '该房产类型是酒店类型房产，您出租房产中的房间，还是别墅类型房产，您在一次预订中出租整个房产？');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', '物业中的房间');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', '整个物业');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', '两者'); // 这是一个临时设置，可为尚未更新其属性类型的现有用户提供向后兼容性。将无法选择
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', '客人会预订什么？');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "您需要填写地址详细信息，以便客人入住时可以找到您。");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', '更新您的地址');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', '哎呀，你好像忘记填写所有字段了。');
jr_define('_JOMRES_CONTANT_US', '联系我们');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', '欢迎来到您的新在线列表');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', '嗨，欢迎来到你的新物业');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "您最近在我们的网站上添加了一个新属性，我们欢迎您加入这个大家庭。");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', '你可以看到你的新仪表板');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', '这里');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "一旦你设置了你的财产，你就可以通过访问来查看它对网站访问者的看法");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', '你的首页。');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "（它还没有发布，所以网站访问者还不能看到它)。");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "在页面顶部，您会看到许多消息。这些消息旁边的按钮将引导您进入您需要访问的页面，以便在我们的网站上设置您的资产。一旦您'完成了这些任务中的每一项，我们网站上的访问者将更容易找到您的财产并在线预订。");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', '如果您有任何问题，请');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', '联系我们');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "我们很乐意回答您的所有问题。");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', '一切顺利，我们的团队');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "您似乎没有要出售的旅游。创建旅游配置文件，然后使用生成按钮创建一些旅游。");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "让我们创建一些旅游！");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', '交换货币符号位置');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', '使用此选项将货币符号从价格数字的后面移动到前面，反之亦然。');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', '脸书');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', '输入您的 Facebook 页面 ID，例如"jomres"。留空表示不显示任何内容。不要输入 https://www.facebook.com 或其他任何内容。');
jr_define('COMMON_DOWNLOAD', '下载');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', '接下来你需要添加一些关税。这些是你的基本价格。');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', '引导程序未启用！');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', '警告，您没有在 Jomres 站点配置 -> 杂项选项卡中启用 Bootstrap。为了提供 <i>一些</i> 功能，Jomres 目前正在使用它的旧的、基于 jQuery UI 的模板，但是这些已经好几年没有工作了。Jomres 模板（布局文件)的所有当前开发和改进都是针对它的 Bootstrap 3 模板文件进行的。为了充分利用 Jomres，我们建议您安装基于 Bootstrap 3 的Wordpress 或 Joomla 的主题。完成后，您可以在站点配置中启用 Jomres\'Bootstrap 模板。');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', '您的支持密钥有效。请注意，此许可证不允许插件下载。');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', '将预订拖到该区域取消');
jr_define('_JOMRES_LAT', '纬度(nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', '请确保您已经创建了一个包含 [jomres:xx-XX] 短代码的 WordPress 页面（其中 xx-XX 是您的站点语言代码，例如 [jomres:en-GB] 或 [ jomres:en-US] ) 否则您将无法从前端访问 Jomres 来管理您的属性和预订。');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "在创建房间类型之前，我们需要知道它是用于酒店类型的属性还是别墅类型的属性。");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', '点击添加新房间类型');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', '警告，您有一种或多种没有房型的房产类型。房产需要房型，以便物业经理可以创建关税。');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', '使用新建按钮创建新的房间类型。');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', '旅游');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', '没有预订/房地产（简单列表)');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', '日志文件位置');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres 默认将系统活动记录到 '.JOMRES_SYSTEMLOG_PATH." 位置。由于此文件可能包含敏感信息（api 密钥、系统路径、网关信息、访客信息)，我们强烈建议您更改此路径到您的网络文档根目录上方的一个。如果您不明白这意味着什么，请向您的网络主机咨询，因为他们会知道您的文件系统。");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres 记录有关您系统的详细信息，包括 api 密钥、系统路径、网关和访客信息，所有这些都不应该对互联网的其余部分可见。您的系统日志路径未设置，因此系统日志当前正在保存到".JOMRES_SYSTEMLOG_PATH."目录，这并不理想。请访问站点配置 -> 调试并在您的文件系统中设置一个位于 web 根目录外的路径。如有疑问，请联系您的 web 主机因为他们将能够为您提供建议。');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', '如果您的 CMS 安装在您网站的根目录中，那么合适的位置是 ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "您没有谷歌地图密钥集。由于谷歌地图最近发生了变化，所有新站点都需要一个 API 密钥才能使用谷歌地图的功能。请<a href='http: //www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>查看我们的手册页，了解如何创建 API 密钥< /a> 并将密钥保存在 Jomres 中。");
jr_define('JOMRES_GOOGLE_MAP_STYLE', '谷歌地图配色方案');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "好吧，让我们开始将您的财产添加到网站。我们需要在此处收集有关您财产的一些信息。这将使我们能够设置您财产的基本框架。一旦完成，那么您将引导您添加房间、价格和图像。");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', '房产类型可帮助您定义房产的预订方式，例如，您一次"出售"一两个房间的酒店，而您提供整个房产的别墅。');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "请注意，电子邮件地址不必与您注册帐户时使用的相同。这允许您为不同的属性使用不同的地址。");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', '最低存款');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', '您可以配置要收取的最低存款金额。如果您这样做，则无法配置属性配置中的"所需押金是第一晚的费用？"和"所需押金是百分比？"设置, 而所有存款值都是一个百分比，并且必须至少是您在此处定义的数字。');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', '这个数字不能小于');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', '系统日志主机');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', '系统日志端口');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "如果你想将系统日志消息发送到系统日志服务器，你可以在这里设置主机名或 IP（例如 192.168.0.2)和端口（例如 514)。注意，如果站点设置为 ' Development' 然后将发送 DEBUG 消息。如果设置为 'Production' 则只会发送 INFO 级别和更高级别的消息。要禁用远程服务器的日志记录，请清空主机和端口字段。");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP 不允许访问 'openlog' 和 'syslog' PHP 函数。这是服务器端设置，如果您希望 Jomres 向 syslog 服务器发送消息，请咨询您的主机并确认是否允许 PHP 访问这些功能。启用后，您将可以在此处配置系统日志服务器的设置。");
jr_define('_JOMRES_SEND_ERROR_EMAIL', '发生错误时向站点管理员发送电子邮件？');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "历史上应该调查的问题已经通过电子邮件发送给网站所有者。这对于密切关注系统的运行非常有用，因为它有很多活动部件并且很难跟踪所有这些。不幸的是，蜘蛛和机器人抓取您的网站（即使是友好的网站)可能会无意中触发致命错误，这可能导致您收到的消息数量过多。如果是这种情况，请将此选项设置为\"否\"。Jomres 发送日志记录将消息发送到一组日志文件和系统日志服务器（如果您的特定 PHP 设置允许，如果不允许，请联系您的主机)。如果您正在寻找特定的内容（例如，如果您正在开发网关并希望使用 gateway_log() 函数调用。)但是要浏览的信息很多，因此最好使用诸如 syslog 文件分析器之类的东西。如果您在 linux 上开发，那么有很多工具可供您使用，如果在 Windows 上，那么您可以使用的一个简单工具是 http://maxbelkov.github.io/visualsyslog/ 在此页面上将\"Syslog 主机\"设置为\"127.0.0.1\"和\"端口'到 514 以查看该工具中记录的消息。 ");

jr_define('_JOMRES_MANAGE_PROPERTIES', '管理属性');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "您没有设置 IP 检测 API 密钥。这是系统自动检测用户位置并自动设置其货币和国家所必需的。请<a href='http://www .jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>查看我们的手册关于如何创建 IP 检测 API 密钥</a>并将密钥保存在 Jomres > 站点配置 > 货币转换/货币代码中的页面。");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "您没有开放汇率 API 密钥集。这是允许系统自动下载和使用货币汇率所必需的。请<a href='https://www.jomres.net /manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>查看我们的手册页，了解如何创建 IP 检测 API 密钥</a>并将密钥保存在 Jomres > 站点配置 > 货币转换/货币代码中。");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', '许可证号');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', '某些国家/地区立法规定您必须为您的财产显示许可证编号。如果您有这样的编号，请在此处输入，它将被添加到财产标题部分。');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "<strong>plg_content_jomres_asamodule_mambot</strong> Jomres Asamodule Mambot 插件必须安装并启用才能使这些短代码正常工作。这可以在 Jomres 插件管理器中找到。如果此站点是使用其中一种构建的快速入门，那么它可能已经安装了。");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "您必须确保 <strong>'Jomres Shortcodes'</strong> 插件已启用。这可以在 Jomres 插件管理器中找到。如果此站点是使用快速入门之一构建的，那么它可能是已安装。");
jr_define('SHORTCODE_TASK', '任务');
jr_define('SHORTCODE_DESCRIPTION', '描述');
jr_define('SHORTCODE_ARGUMENTS', '参数');
jr_define('SHORTCODE_EXAMPLE', '例子');
jr_define('INTEGRITY_CHECK', '文件系统完整性检查');
jr_define('INTEGRITY_CHECK_DESC', '此功能允许您检查文件系统是否与当前 Jomres 版本中提供的文件系统匹配。这有助于确保在安装/升级后正确更新所有文件。红色文件丢失，文件为橙色存在，但与当前构建中提供的不同。此处仅列出存在潜在问题的文件。');
jr_define('INTEGRITY_CHECK_FILENAME', '文件系统完整性检查');
jr_define('INTEGRITY_CHECK_LOCALHASH', '本地哈希');
jr_define('INTEGRITY_CHECK_BUILDHASH', '版本哈希');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', '太棒了！没有发现任何问题。');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', '谷歌地图标记');
jr_define('_JOMRES_JAVASCRIPT_READMORE', '阅读更多');
jr_define('_JOMRES_JAVASCRIPT_READLESS', '少读');
jr_define('_JOMRES_TOURIST_TAX_TITLE', '旅游税');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', '旅游税率');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', '设置旅游税率。旅游税仅在初始预订生成后计算，并添加到预订确认页面，在额外服务框中。');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', '是百分比吗？');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "如果税收是百分比，则设置为是，如果是固定费用，则设置为否。");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', '影响整个预订价值？');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "如果税款涵盖预订的全部价值，则将此设置为 Yes，因此它是住宿加上任何额外费用的百分比，如果仅根据预订的价值计算，则为 No住宿总数。如果上面的\"是百分比\"选项设置为否，则忽略此选项。");
jr_define('_JOMRES_TOURIST_TAX_NOTE', '请注意，此预订将添加旅游税。您将能够在查看预订页面上看到该税费。');
jr_define('NO_LICENSE_MESSAGE', "您尚未在站点配置中保存许可证编号，因此您将无法下载插件。一旦保存了有效的许可证密钥，您就可以安装列为核心插件。");
jr_define('INVALID_LICENSE_MESSAGE', "您似乎使用了无效或已过期的许可证号。一旦保存了有效的许可证密钥，您就可以安装任何列为核心插件的插件。");
jr_define('VALID_LICENSE_MESSAGE', "恭喜你，你使用了有效的许可证号，可以通过 Jomres 插件管理器安装 Core 插件。");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', '这个页面允许你上传你的财产和你提供的东西的图像。它有一个主按钮，第二个按钮允许你选择特定的资源来上传图像。所以，主要财产图像和幻灯片将只显示一个按钮，但如果您创建了任何例如可选附加或房间，那么您将看到第二个按钮，您可以在其中上传这些特定资源的图像。');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', '此页面允许您上传您的财产和您提供的物品的图像。它有一个主按钮，第二个按钮允许您选择要为其上传图像的特定资源。因此，主要财产图像和幻灯片将只显示一个按钮，但如果您创建了任何可选附加功能，那么您将看到第二个按钮，您可以在其中上传这些特定资源的图像。');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>首先通过点击添加图片或使用拖放来选择您要上传的图片。这些将显示在右侧的列中。</li>
  <li>在此区域上方，使用\"选择资源\"按钮选择您要为其上传图片的资源。您可能会被提供在下方选择特定资源的选项。 </li>
  <li> 选择资源后，您可以单击图像下方的\"上传图像\"按钮将其与该资源相关联。上传图片后，它会从右侧站点的列中消失，而出现在左侧。</li>
  <li>使用现有图片旁边的垃圾箱按钮删除您不想再显示的图片。</li>
  <li>您可以通过在上传之前重命名文件来更改幻灯片中文件的显示顺序，因为它们按字母顺序显示在页面中。</li>
</ol>
");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "在资源按钮旁边，您可能会看到一个预览按钮。如果您单击它，您将看到一个弹出窗口，显示当前上传的图像在页面中的外观。这有助于为您提供了解图像对您的客户的看法。");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "您可以上传的图片数量没有限制。图片在上传时会自动调整大小。您只能上传 JPG 和 PNG 文件。");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "理想情况下，您上传​​的任何图像都至少是");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "像素宽，否则上传后可能看起来很模糊。");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "您上传的任何图片不能超过");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "大小。");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "选择你想上传图片的资源");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "特定资源");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "该资源的图片已经上传");
jr_define('_JOMRES_MARKDOWN_TITLE', '文本格式');
jr_define('_JOMRES_MARKDOWN_DESC', '您可以使用简单的 Markdown 格式在此处输入文本。您不需要了解任何 HTML，只需使用按钮使信息看起来像您想要的那样，或者根据这些示例格式化文本。');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', '重点');
jr_define('_JOMRES_MARKDOWN_BOLD', '粗体');
jr_define('_JOMRES_MARKDOWN_ITALICS', '斜体');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', '删除线');
jr_define('_JOMRES_MARKDOWN_HEADERS', "标题");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', '大头');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "媒体标题");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', '小标题');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', '小标题');
jr_define('_JOMRES_MARKDOWN_LISTS', "列表");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', '通用列表项');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISITEM', '编号列表项');
jr_define('_JOMRES_MARKDOWN_LINKS', '链接');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', '要显示的文字');
jr_define('_JOMRES_MARKDOWN_QUOTES', '行情');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', '这是一个引用。');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', '它可以跨越多行！');
jr_define('_JOMRES_MARKDOWN_IMAGES', '图片');
jr_define('_JOMRES_MARKDOWN_TABLE', '表格');
jr_define('_JOMRES_MARKDOWN_COLUMN', '列');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', '在属性列表中将属性图像显示为幻灯片吗？');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', '如果设置为yes，将显示属性主图像的幻灯片。如果设置为no，则将显示第一个属性主图像。');
jr_define('EDIT_CMS_USER', '编辑 CMS 用户');
jr_define('BOOKING_MADE_BY', '预订人');
jr_define('_JOMRES_ROUTER_FEATURES', '便利设施');
jr_define('_JOMRES_ROUTER_ROOMTYPES', '房间类型');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', '外部预订表格 URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', '如果您想使用第 3 方网站进行预订，您可以在此处设置外部 URL。所有 jomres 预订按钮都将指向此 URL。如果您想使用 Jomres 预订表单，请将此字段留空.');
jr_define('_JOMRES_ROOM_TAGLINE', '标语(简短的房间描述/副标题)');
jr_define('_JOMRES_ROOM_DESCRIPTION', '房间描述');
jr_define('_JOMRES_GUEST_BLACKLISTED', '访客黑名单');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', '如果此客人被列入黑名单，则他们将无法再预订此住宿。');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', '将 jomres 会话文件保存到磁盘或数据库。推荐：数据库');
jr_define('_JOMRES_MAP_HEIGHT', "地图高度(px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "地图缩放级别");
jr_define('_JOMRES_MAP_MAPTYPE', "地图类型");
jr_define('_JOMRES_TEMPLATE_PACKAGES', "模板覆盖管理器");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "模板包是可以为各种核心Jomres模板文件提供覆盖模板的插件。");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "这个页面列出了所有可以被模板包的模板文件覆盖的模板文件。如果你想覆盖某个模板文件，点击那个文件的编辑按钮，在下一页你会能够选择要覆盖的版本。请注意，这些覆盖优先于 Jomres Core 和任何 Wordpress 或 Joomla 主题/模板覆盖。您可以通过在列表模板覆盖页面中删除它来禁用覆盖。");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "模板名称");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "当前路径");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "未覆盖");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "您可以通过更改下拉列表来选择覆盖核心模板文件的模板文件");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "预订的房间百分比");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "预订的房间百分比");
jr_define('_JOMRES_SELECT_WIDGETS', "选择小部件");
jr_define('_JOMRES_INTERVAL', "间隔");
jr_define('_JOMRES_TIMELINE', "时间线");
jr_define('_JOMRES_CPANEL_GRID', "控制面板主页布局");
jr_define('_JOMRES_CPANEL_GRID_DESC', "选择您的前端物业管理控制面板主页的网格布局。");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "谷歌地图标记");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "城镇图片");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "更改属性类型将删除所有房间、资费、属性设置并重置可用性。");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', '请注意，更新后您必须通过 Jomres 插件管理器更新任何已安装的 Jomres 插件。如果您安装了核心插件，但没有有效的 Jomres 许可证，那么我们<em>做不建议您更新 Jomres，因为较旧的插件通常可能不适用于较新版本的 Jomres。');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', '请注意，更新后您必须通过 Jomres 插件管理器更新任何已安装的 Jomres 插件。');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "如果您想更新 Jomres 及其插件，您将需要续订许可证。请访问 <a href='https://www.jomres.net/pricing' target='_blank'>我们的网站</a>了解更多信息。在大多数情况下，这些许可证是完整许可证价格的 50%。请确保您在尝试购买续订之前已登录我们的商店。");
jr_define('_JOMRES_PAYMENT_METHOD_USED', "付款方式：");

jr_define('_JOMRES_PRICES', "连接");


jr_define('_OAUTH_TITLE', "应用密钥管理");
jr_define('_OAUTH_APPS', "REST API 客户端详细信息");
jr_define('_OAUTH_IDENTIFIER', "标识符");
jr_define('_OAUTH_APIKEY', "客户端 ID");
jr_define('_OAUTH_SECRET', "秘密");
jr_define('_OAUTH_CREATED', "创建/更新应用程序");
jr_define('_OAUTH_CLIENT_ID_INFO', "Client ID 和 Secret 是为您创建的。标识符是为了让您可以轻松识别此密钥对。");
jr_define('_OAUTH_SCOPE_TITLE', "权限(客户端可以做什么)");
jr_define('_OAUTH_SCOPE_CATEGORY_USER', "用户权限");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "属性权限");

jr_define('API_DOCUMENTATION_TITLE', "App REST API 文档");

jr_define('_OAUTH_CONFIG', "API 核心配置");

jr_define('_OAUTH_CONFIG_SHOW', "在Jomres主菜单中显示API客户端配置选项？");
jr_define('_OAUTH_CONFIG_SHOW_DESC', "您可以选择不在 Jomres 主菜单的\"我的帐户\"部分中显示 API 客户端配置选项。您可以决定使用 Jomres 简码在其他页面上显示它们。");

jr_define('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "显示 API 核心文档页面。API 核心允许用户创建 API 客户端，然后用于访问 API 核心文档中概述的 API 功能。");

jr_define('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "显示 API 核心管理页面，物业经理可以在其中配置 API 客户端。请注意，这是一个仅限注册用户的功能，因此用户必须先注册并登录才能看到此页面。");

jr_define('API_METHODS_TITLE', "API 方法");
jr_define('API_METHODS_DESCRIPTION', "此方法列表基于您安装的 API 功能插件并自动生成。如果您安装或删除 API 功能插件，您必须访问此页面以重建您站点上可用的 API 方法列表。 ");

jr_define('_OAUTH_REDIRECT_URI', "重定向URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER', "给我一个对你有意义的名字，比如我的手机");

jr_define('_OAUTH_GRANT_TYPES', "该系统支持两种授权类型，客户端凭据和隐式。如果您使用 <em>client_credentials</em> 流程，那么您将需要客户端 ID 和客户端密码。如果使用 <em >implicit</em> 那么您的应用程序将只发送客户端 ID，您将登录系统以明确授权该应用程序。");

jr_define('_OAUTH_IMPLICIT_NOTES', "要使用<em>隐式</em>授权类型流程，您将需要使用此 url 来授权您的应用程序。当调用此 url 并且您已授权该应用程序时，系统将发出然后您的应用程序将使用它来调用此系统的 API 的令牌");
jr_define('_OAUTH_AUTHORISATION_URL', "授权网址");

jr_define('WEBHOOKS_CORE', 'Webhooks');

jr_define('_WEBHOOKS_CONFIG_SHOW', "在Jomres主菜单中显示Webhook配置选项？");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', "您可以选择不在 Jomres 主菜单的\"我的帐户\"部分中显示 Webhook 配置选项。您可以决定使用 Jomres 简码在其他页面上显示它们。");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "Webhooks 文档");

jr_define('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "显示 API 核心文档页面。API 核心允许用户创建 API 客户端，然后用于访问 API 核心文档中概述的 API 功能。");

jr_define('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "显示 API 核心管理页面，物业经理可以在其中配置 API 客户端。请注意，这是一个仅限注册用户的功能，因此用户必须先注册并登录才能看到此页面。");

jr_define('WEBHOOKS_INTEGRATION_EDIT', '编辑集成');
jr_define('WEBHOOKS_INTEGRATION_ID', '集成ID');
jr_define('WEBHOOKS_INTEGRATION_URL', 'URL 或名称');
jr_define('WEBHOOKS_ENABLED', '启用');
jr_define('WEBHOOKS_AUTH_METHOD_SELECT', '认证方法/集成');

jr_define('WEBHOOKS_MANAGER_PROPERTIES_NONE', '您创建的任何 webhooks 都不会被触发，因为您没有分配给任何属性。超级属性管理器通常不会分配单个属性，因此您可能需要一个新用户来创建 webhook。');
jr_define('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', '您创建的任何 webhooks 都将针对以下属性触发：');


jr_define('PORTAL_REVIEWS_LIMIT', '评论限制');
jr_define('PORTAL_REVIEWS_LIMIT_DESC', '使用此设置来限制在属性详细信息页面中显示的评论数量。');
jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', '显示所有评论');

jr_define('VIDEO_TUTORIALS', '视频教程');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', '最低存款价值');
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "如果计算出的存款小于这个数字，那么将存款设置为这个值。如果它不满足网站的最低存款设置，这个数字本身可能会被覆盖。将其设置为 0 以不使用设置。");

jr_define('JOMRES_INCOMPLETE', '不完整');
jr_define('JOMRES_WATING_APPROVAL', '待批准');
jr_define('JOMRES_GOOGLE_MAPS_PDETAILS', '物业详情图');

jr_define('HAS_STARS_TITLE', '允许星星分类吗？');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', '强制将图像详细信息重新导入数据库');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', '强制将图像重新上传到 S3 存储桶');
jr_define('_JOMRES_UNINSTALL_TABLES', '卸载时删除所有Jomres数据？');
jr_define('_JOMRES_UNINSTALL_TABLES_DESC', '如果设置为yes，卸载时Jomres将删除所有它的数据库表。这将从数据库中删除所有Jomres数据并且无法撤消。');

jr_define('TRANSACTION_IDS', '交易ID');
jr_define('PAYMENT_METHOD', '付款方式');
jr_define('POA_DISPLAY_PRICE', 'POA 价格');
jr_define('POA_DISPLAY_PRICE_DESC', '当属性显示在列表中时，系统将尝试根据今天的日期从配置的关税中查找有效价格，或者如果在搜索中使用了日期，则基于这些日期. 如果不能，那么它会显示 POA (Price on application)，这意味着客人应该联系你获取价格。如果你愿意，你可以在这里配置一个价格，而不是 POA 文本。这个图如果无法确定其他价格，则将是要显示的"后备"价格。');

jr_define('PLUGINMANAGER_INSTALL', '您需要先安装插件管理器，然后才能安装 Jomres 插件，您现在要这样做吗？');
jr_define('PLUGINMANAGER_REINSTALL', '您需要先更新插件管理器，然后才能更新任何已安装的插件，您现在要这样做吗？');
jr_define('PLUGINMANAGER_INSTALL_BUTTON', "让我们这样做吧！");

jr_define('INCLUDEINFILTERS', '包含在过滤器中吗？');
jr_define('INCLUDEINFILTERS_DESC', 'Ajax Composite Search 中的属性特征过滤器可能会变得很长，因此您可以将此选项设置为否以防止该特征显示在属性特征列表中。');

jr_define('REVIEW_REMINDER_PT1', "你有");
jr_define('REVIEW_REMINDER_PT2', " 您还没有留下评论的预订。请留下评论。");
jr_define('BOOKINGS_AWAITING_REVIEWS', "等待评论的预订");
jr_define('REVIEW_NAG', "唠叨客人评论？");
jr_define('REVIEW_NAG_DESC', "一旦客人从预订中被取消，系统会提醒他们为他们的预订发表评论。将此选项设置为否可禁用此提醒。");

jr_define('HIDDEN_ADDRESS_SETTING', "隐藏地址？");
jr_define('HIDDEN_ADDRESS_SETTING_DESC', "如果您将此选项设置为是，则只有已经在您的物业上预订的客人才能看到该物业的街道地址。您可能希望使用此设置来隐藏该物业的确切位置例如，如果它经常无人看管。");
jr_define('HIDDEN_ADDRESS_PLACEHOLDER', "隐藏");
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', '优化上传图片？');
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', '启用后，图像将针对网络进行优化（文件大小最多可缩小 75%)。根据上传的图像类型，您的服务器需要由托管安装这些库中的一个或多个提供者：optipng、pngquant、pngcrush、pngout、advpng、jpegtran、jpegoptim、gifsicle');
jr_define('DATABASE_INTEGRITY_CHECK', '数据库完整性检查');
jr_define('OBSOLETE_FILES_CHECK', '过时文件检查');
jr_define('DATATABLES_COLVIS', '列可见性');

jr_define('API_TOKEN_LIFETIME', 'API 令牌生命周期');
jr_define('API_TOKEN_LIFETIME_DESC', 'API 令牌保持有效的时间，以秒为单位。86400 = 1 天，31536000 = 1 年');


jr_define('ENCRYPTION_TITLE', '加密');
jr_define('ENCRYPTION_FILE_LOCATION', '加密文件位置');
jr_define('ENCRYPTION_FILE_LOCATION_DESC', '**永不删除加密文件** <br/> 用户数据以加密方式存储在表中，以确保"静态数据"得到安全保护，符合 GDPR 建议。默认情况下加密密钥存储在 Jomres 安装根目录下的"encryption_key.class.php"文件中（通常为 /public_html/jomres)。您可以在此处更改文件的存储位置。如果更改位置，则必须移动文件，不要等待 Jomres 创建新版本，否则您将无法解码客人的详细信息。');

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', '您在此处保存的信息将用于为该物业生成的发票');

jr_define('_JOMRES_GDPR_POLICIES', 'GDPR 政策');
jr_define('_JOMRES_GDPR_POLICIES_DESC', '在这里您可以配置在创建预订或发票后多久将其从系统中删除，以确保您符合 GDPR。');

jr_define('_JOMRES_GDPR_BOOKING_RETENTION', '预订保留期（天)');
jr_define('_JOMRES_GDPR_BOOKING_RETENTION_DESC', '预订出发日期后多少天应该删除预订？删除时，预订和发票都会被删除。典型的保留期可能是 365 天。');

jr_define('_JOMRES_GDPR_INVOICE_RETENTION', '发票保留（非预订)期');
jr_define('_JOMRES_GDPR_INVOICE_RETENTION_DESC', '其他发票，例如佣金和订阅发票，与预订无关。因此，在删除预订发票和合同时，它们不会被删除。根据您所在的国家/地区和您自己的商业惯例，您需要配置不同的保留期。典型的保留期可能是 3653 天，也就是 10 年。');


jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', '您的数据');
jr_define('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', '本网站的某些功能需要存储有关您访问的信息。这仅用于为您提供服务，绝不会与任何其他人共享，不再需要时将被删除。');
jr_define('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', '你允许我们存储这些信息吗？？');
jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', '详细');
jr_define('_JOMRES_GDPR_CONSENT_FORM_COOKIE', '您必须同意我们存储这些数据，您才能在本网站上进行预订。无论您是否同意存储您的数据，我们都会在您的计算机上存储一个 cookie 以告知我们无论您是否选择加入。这有助于我们确保我们不会不断询问您是否要选择加入或退出，并且它不包含任何个人身份信息 (PII)。如果您改变主意，您可以随时访问"应用权限"页面选择加入或退出。');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', '信息根据您访问的性质存储不同的时间段。因此，如果您只是环顾四周，我们将存储大致的地理位置（国家级别)信息。如果您执行搜索，那么使搜索表单更加用户友好，我们将存储您最近搜索过的内容。这些信息通常最多存储 24 小时，仅用于让您的访问更加愉快。');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', '当您向我们预订时，必须存储更多信息。');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', '预订表格的技术细节被捕获并保留最多 60 天。这是必需的，以便在预订获得批准后，按需预订可以变成完整预订，并供我们的团队分析如果预订出现问题。如果您在预订时未登录，那么我们将通过电子邮件向您发送用户名和密码，以便您可以查看您的预订历史并行使您的被遗忘权 (RTBF)希望这样做。');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', '在预订表格中输入的数据，例如姓名、电子邮件地址、真实地址在预订出发日期后最多存储 365 天。此信息以加密形式存储在我们的数据库中以便只有授权的人才能查看它。如果您进行预订，那么根据法律，我们必须在预订有效期间存储您的 PII。预订完成后，无论是因为它已被取消还是您已被退房，那么您将能够通过登录并访问"您的数据"页面来行使您的 RTBF。已完成预订的发票信息仍将安全地存储在我们的数据库中，以确保我们遵守相关税法，但您将能够删除所有其他 PII预订完成后。');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', '当您同意按照上述方式存储您的信息时，我们有法律义务将此同意存储在我们的数据库中。此信息将包括您的 IP 号码和选择加入表格的内容。我们将无限期保留此同意通知（这是法律要求)。');

jr_define('_JOMRES_GDPR_CONSENT_NOT_SET', '您还没有告诉我们我们是否可以收集关于您的个人身份信息');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_IN', '您已同意我们收集必要的个人身份信息以进行预订');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_OUT', '您告诉我们不要收集个人身份信息');

jr_define('_JOMRES_GDPR_NOCONSENT_INTRO', '您没有允许我们收集您的私人数据');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', '为了让您在本网站上执行某些操作，我们必须收集有关您的个人身份信息，但您尚未允许我们这样做。');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', '更改您的权限');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', '继续查看属性');

jr_define('_JOMRES_GDPR_APP_MENU_ITEM', '应用权限');

jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', '访客数据');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', '这些是各个酒店为您存储的详细信息。不同的酒店可能持有不同的记录，具体取决于您在预订时输入的内容。');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', '您在该系统中没有存储任何酒店的任何数据');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', '个人资料数据');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', '这是我们为您保存的主要数据集，与您与不同属性共享的数据集不同。');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', '您还没有保存任何个人资料信息');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', '这是我们为您存储在本网站上的个人身份信息。它以JSON（JavaScript Object Notation)格式构建，这是一种轻量级的数据交换格式。它易于人类阅读和编写，机器很容易解析和生成。');

jr_define('_JOMRES_GDPR_REDACTION_STRING', '匿名');

jr_define('_JOMRES_GDPR_MY_DATA', '你的数据');
jr_define('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', '通过接受这些使用条款协议（本"协议")，您同意：

<ul>
<li>
您被授权通过本网站预订酒店；
</li>
<li>
您至少年满 18 岁；
</li>
<li>
您拥有创建具有约束力的法律义务的法定权力；
</li>
<li>
您将根据本协议使用本网站；
</li>
<li>
您将仅使用本网站为您自己或您合法授权代理的其他人进行合法预订；
</li>
<li>
您将告知此类其他人适用于我代表他们进行的预订的本协议，包括所有适用于此的规则和限制；
</li>
<li>
您向本网站提供的所有信息均真实、准确、最新且完整；和
</li>
<li>
您将保护您的帐户信息，并对您自己和除您以外的任何人对您帐户的任何使用进行监督并承担全部责任。
</li>
</ul>
');
jr_define('_JOMRES_GDPR_MY_DATA_LEAD', '安全性和透明度对我们很重要。');
jr_define('_JOMRES_GDPR_MY_DATA_INTRO', '我们非常重视存储您的数据的责任。所有个人身份信息 (PII) 都使用行业标准算法加密存储在我们的数据库中，以确保只有授权用户才能查看这些信息。');

jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', '您可以下载我们为您存储的所有 PII。');
jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', '立即下载');

jr_define('_JOMRES_GDPR_MY_RTBF_LEAD', '被遗忘的权利(RTBF)');
jr_define('_JOMRES_GDPR_MY_RTBF_INTRO', '我们相信您应该能够<a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">删除</a>您的< a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">个人身份信息</a>如果您愿意并且可行。');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', '您没有在本站注册。您的大致位置（国家)和 IP 号码将被存储最多 24 小时，然后删除。');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', '您未在此站点上注册并且您已选择退出数据收集。我们尚未存储您的 PII。');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', '您已在该网站上注册并且没有任何待处理或活动预订。我们可以将我们目前为您保存的大部分信息匿名化。您愿意这样做吗？');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', '注意：这不会删除您的帐户，它只是将我们的记录匿名化，以便您的帐户无法与您作为个人关联。根据法律，我们必须继续存储您的 PII 以用于发票目的，但是我们会删除所有客人记录。');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', '您已在网站上注册，但您有未完成的预订，我们目前无法对您的数据进行匿名处理。这些数据将在预订完成后最多保留一年，然后将被删除，如果您没有选择在那之前删除它。');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', '由于您是我们网站上的物业经理，我们无法为您提供自动删除数据的功能。相反，请直接联系我们，以便我们可以将您的物业分配给另一位经理。一旦我们这样做并删除您作为物业经理的身份，您将能够自动删除您的数据。');

jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME', '忘记我！');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', '这无法撤消！');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', '您的数据已被删除！');

jr_define('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', '对不起，您的电子邮件地址无效，无法进行预订');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', '此页面使您能够匿名将其信息存储在系统中的任何客人。这使您能够遵守 GDPR，但您不​​能编辑此页面上的任何其他信息。为此您必须以物业经理的身份登录前端。假设是一位历史访客已与您联系，要求您允许他们行使被遗忘的权利。如果他们无法登录网站前端（可能是用户不是在他们预订时为他们创建的)然后你可以在确认他们的身份后使用这个区域来匿名他们。');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', '匿名访客');
jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY');
jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', '访客数据匿名');
jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', '不能匿名');

jr_define('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', '在您进行预订之前，我们需要您的许可来存储您的信息。单击此处授予我们许可。');

jr_define('_JOMRES_GDPR_CONFIG_ENABLE', '启用符合 GDPR 的功能？');
jr_define('_JOMRES_GDPR_CONFIG_ENABLE_DESC', '我们不建议您禁用 GDPR 兼容功能。Jomres 具有内置功能，可帮助您确保网站的 Jomres 部分符合 GDPR。如果您禁用此功能（并且如果您在欧盟或与欧盟公民有业务往来，则不应该这样做)然后 Jomres 将自动假定该网站的每个访问者都已允许启用他们的个人数据。应用程序权限和我的数据页面将不会显示，并且不会提示用户授予他们收集数据的权限。');


jr_define('EMPTY_TEMP_DIR', '空临时目录');
jr_define('EMPTY_TEMP_DIR_DONE', '临时文件已删除');

jr_define('MACHINE_TRANSLATION', '机器翻译');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', '源语言');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', '可以挂钩机器翻译功能。这允许您以一种语言输入字符串，并且可以从远程服务中提取翻译。请注意，并非所有翻译服务都支持所有语言。请参阅这些服务以了解更多详情。');

jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', '房间类型');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', '新房间类型');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', '您可以在此页面上创建和编辑房间类型。这些房间类型将仅针对此属性。设置您的属性时，您首先需要一些房间类型。您可以使用由以下人员创建的房间类型管理员，或者您可以添加自己的。一旦您拥有一个或多个房间类型，您就可以创建该房间类型的房间。拥有房间后，您可以为这些房间创建资费（价格)，因为资费与房间类型相关联.');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', '经理可以创建房间类型吗？');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', '使用此选项来配置管理员是否可以在前端创建自己的房间类型。我们强烈建议您在第一次开始使用 Jomres 时将此选项设置为否，特别是如果您正在创建一个门户网站，因为您应该在管理员区域创建所有房型。经理创建的房型将出现在搜索表单中，但由于这些房型特定于个别酒店，如果选择了该房型，则搜索结果中只会显示一个房型在搜索期间。如果您希望只有超级物业经理可以创建房间类型，请将此选项设置为是，并使用访问控制插件仅允许超级经理查看"设置 > 房间类型"菜单选项。只有出租的物业在属性中退出房间并使用高级或微观管理费率编辑模式可以使用此选项。别墅/公寓类型的属性将无法使用它。');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', '房间/物业类型更新');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', '在搜索选项中显示房间类型');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', '如果您选择允许物业经理创建他们自己的房间类型，您可以选择是否在您选择显示房间类型的搜索选项中显示那些创建的房间类型。');


jr_define('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "您不应在每次预订时重复使用相同的电子邮件地址。<br/>如果您的企业拥有唯一的域（例如，不是 Gmail 电子邮件地址)，请使用客人的电话号码作为他们的电子邮件地址。电子邮件地址将类似于 123456@mydomain.com<br/>这将确保在您创建预订时创建一个新客人。");

jr_define('_JOMRES_LOGIN_USERNAME', '电子邮件地址');
jr_define('_JOMRES_LOGIN_PASSWORD', '密码');
jr_define('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "很高兴您愿意再次与我们预订。为了能够一起管理您的所有预订，您需要登录，以便将预订添加到您的帐户中。这也确保您有权使用所提供的电子邮件地址。");

jr_define('_JOMRES_LOGIN_RESET_MESSAGE', '如果您不知道密码，我们可以向您发送密码重置电子邮件。请按照该电子邮件中的说明重置密码。');
jr_define('_JOMRES_LOGIN_RESET_BUTTON', '忘记密码？');

jr_define('_JOMRES_REVIEWS_ANONYMISE', '匿名你的名字？');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', '如果您在审核时选择匿名您的姓名，我们将使用您的姓名缩写。');
jr_define('ANONYMOUS', '匿名');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', '说');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', '回复此评论');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', '在此处输入您对此评论的回复。');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', '您的回复');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', '主要评论');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', '评论回复已保存');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', '在提交评论回复之前，您必须阅读以下内容。提交回复即表示您确认您同意这些条款和条件。');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', '我们的评论回复指南是什么？');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', '您正在回复对您财产的评论。您<em>不得</em>将您的回复用作商业纠纷程序。如果您需要报告评论，您必须使用"Report评论"按钮在列表上，而不是这个评论回复页面。');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', '一旦您留下您的回复，您将无法对其进行编辑。');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', '允许和鼓励');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li>对评价的完整回复。</li>
    <li>礼貌和诚实。</li>
    <li>对评论者的问题做出明智的回应（请记住，其他人可能也有类似的问题，但没有借此机会发表评论)。</li>
    <li>鼓励客人直接与您联系以解决问题。
    <li>永远记住，未来的客人会看到您的回复。确保始终保持专业。</li>
</ul>
');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', '不允许');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li>商业纠纷。</li>
    <li>向审稿人或其他人提出的问题。</li>
    <li>可疑的语言（包括诅咒)。</li>
</ul>
');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', '上次运行');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', '时间表');


jr_define('_JOMRES_INVOICE_NUMBERS', '发票号码');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', '使用自定义发票号码？');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', '您可以将系统配置为使用自定义发票编号。只有新发票会受到影响。');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', '起始编号');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', '数字是连续创建的。第一个数字应该是什么？');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', '发票号码应该采用什么格式？');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', '在此处配置发票编号格式。格式可以类似于 {N}/{D} 或 {N}/{Y}，其中 N 是自动生成的编号，D = 日期格式为 YYYYYMMDD ( 20190131) 或 Y = YYYY (2019)。未包含在大括号中的任何其他字母数字字符将被保留，因此看起来像 {N}/{D}-L 的模式将导致发票编号 (21)看起来像 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', '附加费');
jr_define('_JOMRES_SURCHARGE_DESC', '预订时将添加到房间的额外费用（按天计算)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // 如果列入白名单，这可能会更改，因此网站"世界最佳预订网站"会将其更改为"WBBS"或类似内容。
jr_define('_JOMRES_LIBRARY_PACKAGES', '库包');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', '供应商和节点模块是 Jomres 的独立（免费)包。您可以在此页面上重新安装这些包。');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', '重新安装库包');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', '随机电子邮件地址');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', '提供随机电子邮件');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', '您可以允许系统在仪表板的快速预订弹出窗口中生成随机电子邮件地址。这允许经理和接待员为他们没有电子邮件地址的客人创建预订，它旨在工作作为具有许多接待员/经理的站点的节省时间，他们知道这些随机电子邮件永远不会用于真正的交流，目的是避免在 Jomres 所有客人都必须有电子邮件地址的事实。您还必须提供一个域下一个字段。');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', '随机电子邮件域');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', '这不应该是一个普通的电子邮件域，例如 gmail 或 Outlook。相反，它可以是您自己的域，也可以是其他完全不同的域，例如"mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', '上传区域');
jr_define('_LIST_USERS_LEGEND_NOROLE', '无用户角色');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', '接待员');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', '物业经理');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', '超级物业经理');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', '暂停');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', '从 CMS 中删除');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', '如果你喜欢 Jomres，请考虑在这些网站之一上留下评论');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', '我是个好人，我已经留下评论');

jr_define('_LICENCE_PROMPT_DEAR', '亲爱的');
jr_define('_LICENCE_EXPIRED', ', 您的 Jomres 许可证密钥已过期，因此您错过了这些强大的功能和好处！');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', '插件更新和新插件发布');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', '仅限会员的电子邮件/门票支持');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', '无忧Jomres 核心更新');
jr_define('_LICENCE_EXPIRED_POST', '联系我们以获得无故障的支付解决方案，并获得所有插件和仅限会员的支持服务的访问权限。');
jr_define('_LICENCE_EXPIRED_RESTART', '立即访问所有插件！');
jr_define('_LICENCE_INVALID_KEY', '不幸的是，您似乎没有使用有效的 Jomres 许可证密钥，因此您错过了这些强大的功能和好处！');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">插件</a>极大地扩展了 Jomres 功能');
jr_define('_LICENCE_INVALID_BENEFITS_2', '仅限会员的独家电子邮件/门票支持');
jr_define('_LICENCE_INVALID_BENEFITS_3', '无忧Jomres 核心更新');
jr_define('_LICENCE_INVALID_POST', '联系我们以获得无故障的支付解决方案，并获得所有插件和仅限会员的支持服务的访问权限。');
jr_define('_LICENCE_INVALID_START', '立即访问所有插件！');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', '仪表板');
jr_define('_ADMIN_MENU_SECTIONS_USERS', '用户');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', '委员会');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', '订阅');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', '发票');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', '门户');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', '翻译');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', '工具');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', '报告');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', '设置');
jr_define('_ADMIN_MENU_SECTIONS_HELP', '帮助');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', '系统中的总属性');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', '已发布的属性');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', '未发布的属性');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', '批准的属性');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', '属性需要批准');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', '总评论');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', '未发表评论');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', '审核报告');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres 系统信息');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "此属性的属性类型未发布，可能不会出现在搜索结果中。请联系网站管理员发布属性类型，或在编辑属性页面更改属性类型。");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', '更新您的财产类型');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', '收入（支付金额)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', '无法删除属性特征"');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" 因为它被以下属性使用：');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API 测试');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', '此页面使用 Jomres 中的内置功能对 REST API 执行基本测试。它调用 Jomres REST API 以查看它是否收到有效响应。');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', '服务器调用此 URL 以查看响应是否有效：');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', '页面收到此响应：');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', '测试似乎按预期进行，您从 Internet 的其余部分接收 REST API 请求可能不会有任何问题。');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', '测试失败，查看Response字段，如果它看起来像很多html，或者您收到404消息，那么您的服务器正在将调用重定向到另一个url。这将阻止您接收API调用。');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', '联合测试');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Jomres App 服务器维护着所有 Jomres 站点的列表。这使我们能够建立一个联合网络。这个网络旨在允许我们的用户在他们自己的站点上显示来自其他站点的属性并且很有用，特别是对于新站点，在网络上建立 SEO 存在。目标是让所有 Jomres 站点协同工作，建立对网络的信任。此服务不收费。');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', '您的站点当前未列在 Jomres App 服务器上，该服务器是联合网络的一部分。该服务器将在接下来的 6 个页面加载时再次尝试将此服务器添加到网络中。如果，在页面加载很少，这不会改变请检查上面的连接测试是否通过测试。注意，本地服务器不能添加到网络。');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', '恭喜您，您的服务器已在 Jomres 应用服务器上列出。');
jr_define('_JOMRES_SYNDICATION_TITLE', '联合属性');
jr_define('_JOMRES_SYNDICATION_TAGLINE', '以下是我们的物业网络提供的其他一些物业');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', '联合统计');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', '恭喜，您的服务器已在 Jomres Syndication Network 上列出。您的财产将很快开始出现在其他 Jomres 网站上，如果它们尚未显示。');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', '您的安装不是 Jomres Syndication Network 的一部分，因此您的财产不会显示在其他基于 Jomres 的网站上，您无法从这个免费广告中受益。');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', '活动 Jomres 安装：');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', '在其站点上共享 Jomres Syndication Network 属性的 Jomres 安装总数。');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', '总属性：');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', '这是 JSN 中可用的属性数量。');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', '总属性显示：');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', '总而言之，一个 Jomres 属性从另一个基于 Jomres 的站点链接到的所有时间。');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'Jomres Syndicate Network (JSN) 是所有 Jomres 用户都可以使用的免费功能。它的目的是在其他基于 Jomres 的网站上为您提供免费的房产广告。目标是帮助您可以快速启动您的网站，提供免费广告，以便您的资产得到认可和信任，因为它们链接到搜索引擎已经众所周知的高可信度、高相关性的网站。请参阅此 <a href="https: //www.jomres.net/features/jomres-syndication-network" target="_blank">我们网站上的文章</a>和<a href="https://www.jomres.net/manual/developers- guide-2/387-jomres-syndication-network" target="_blank">手册</a>了解更多信息。');


jr_define('GUEST_PROFILE_INFORMATION', '这是您的客人资料数据，带有此符号的字段<i class="fa fa-users" aria-hidden="true"></i>
 是公开可见的，而带有此符号 <i class="fa fa-user-secret" aria-hidden="true"></i> 的字段只能由您、您的主机和站点管理员看到。<br/> <br/>只有当您已经与房东进行了预订时，房东才能看到私人信息。<br/><br/>您的信息经过安全加密，并使用 AES-256 加密技术存储在我们的数据库中。');

jr_define('GUEST_PROFILE_OPTIONAL', '这些字段是可选的，但是主机可能会使用这里的信息来确定他们是否觉得他们可以信任你，因此最好添加这些信息。记住，你要求留在他们的财产，如果他们觉得你不合适或者你的简历没有包含足够的信息，他们可能会拒绝你。');

jr_define('GUEST_PROFILE_DRIVING_LICENSE', '驾照');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', '护照号码');
jr_define('GUEST_PROFILE_IBAN', 'IBAN 号码');
jr_define('GUEST_PROFILE_ABOUT_ME', '关于我');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', '这个"关于我"部分是公开可见的，所以不要输入任何私人信息。也就是说，尽可能多地分享你觉得舒服的东西，比如你的激情，你的以谋生、您的爱好等为目的。您可以使用 Markup 为其添加一些爵士乐。房东会希望他们可以信任您的财产。确保您的照片是您的真实照片，而不是您的狗或汽车（是的，伙计们，我们正在和你说话！);');

jr_define('GUEST_PROFILE_PREFERENCES', '在此处输入您可能有的任何特殊要求，例如易于访问的需求。它们不会显示在您的公开个人资料中，但会在您进行预订时添加到预订信息中。');

jr_define('VIEW_HOST_PROFILE', 'Host\'s profile');

jr_define('GUEST_PROFILE_TITLE', '访客资料');
jr_define('GUEST_PROFILE_TITLE_MY', '我的个人资料');

jr_define('GUEST_PROFILE_WELCOME', '嗨，让我告诉你一些关于我自己的事情。');
jr_define('GUEST_PROFILE_MY_NAME', '我的名字是');
jr_define('GUEST_PROFILE_I_COME_FROM', '和我来自');
jr_define('GUEST_PROFILE_IN', '区域在');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', '我的私人信息');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', '我们尽最大努力验证客人和房东的信息，但您应该尽自己的职责并自行决定此人是否值得信赖。');

jr_define('GUEST_PROFILE_MY_PROPERTIES', '我的属性');
jr_define('GUEST_PROFILE_MY_REVIEWS', '我的评论');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', '这就是我对这个属性所说的：');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', '我给这个属性评分：');
jr_define('GUEST_PROFILE_MY_REVIEWS', '我的评论');
jr_define('GUEST_PROFILE_OF_ME', '其他人对我的评价');
jr_define('GUEST_PROFILE_OF_HOST_SAID', '这个主持人对我说了什么');

jr_define('GUEST_PROFILE_REVIEW_GUEST', '评论客人');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', '我对这位客人的评论');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', '以下是一些示例客人评论，让球滚动：<br/>

<ul>
<li>（客人姓名)很高兴接待您！他们让空间保持干净，整个周末都很安静。他们沟通顺畅，我期待他们再次和我在一起！</li>
    <li>我喜欢拥有（客人姓名)，因为他们能够尊重这个地方，享受美好时光并享受这个地区。他们租用空间很棒，我希望我能再次接待他们。</li>
    <li>我的所有家规都得到了（客人姓名)的尊重，他们可以轻松进出。我喜欢让他们在那里，因为他们尊重而安静。我强烈推荐给其他人！</li>
</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', '对不起，我找不到那个用户。很可能他们还没有填写他们的帐户详细信息。');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', '访客');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', '主机');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', '管理员');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres 是建立在 Bootstrap 框架之上的，所以你必须在基于 Bootstrap 的主题上使用它。我们推荐一个基于 Bootstrap 3 的主题。如果你没有访问主题，那么我们建议你使用Wordpress 的 Jomres Leohtian 主题，您可以 <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank ">从这里下载。</a>');


jr_define('BOOKING_NOSHOW_MENU', '标记为未入住');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', '预订标记为未入住');
jr_define('BOOKING_NOSHOW_BOOKINGS', '预订');
jr_define('BOOKING_NOSHOW_NOSHOWS', '没有演出');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', '该用户的JSN统计');

jr_define('BOOKING_NOSHOW_INFO', '预订和未入住信息是在预订时从 Jomres Syndicate Network 中提取的。它取自匿名数据，您可以使用它来确定该客人是否有不履行预订的风险。如果系统报告数据未知，可能是因为网络无法识别该系统。');

jr_define('BOOKING_NOSHOW_UNKNOWN', '未知');

jr_define('CMF_CONFIG_TITLE', '频道管理框架');
jr_define('CMF_CONFIG_KEY', '频道管理框架密钥');
jr_define('CMF_CONFIG_KEY_DESC', '频道管理框架许可证密钥。您需要提供此密钥才能下载频道管理框架插件。');

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', '您的财产尚未获得批准');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "您的财产未被批准。如果您认为这是错误的，请联系我们。");



jr_define('_JOMRES_GUESTTYPES_IS_CHILD', "这是儿童客人类型吗？");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "如果此客人类型将被归类为儿童客人类型，请将其设置为是。");

jr_define('_JOMRES_GUESTTYPES_INTRO', "如果你想按每人每晚收费，那么你需要创建一些客人类型。");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS', "您可以根据需要创建任意数量的访客类型，尝试从创建一种名为\"成人\"的访客类型开始。将所有设置保留为默认值。接下来，例如，如果您想要为 12 岁以下的儿童提供 50% 的折扣，您将创建一个新的客人类型，并将其命名为\"12 岁以下的儿童\"。将\"添加差异？\"选项设置为 -（负)并将\"差异\"设置为 50。这意味着当儿童被添加到预订中时，他们需要支付房间房费的 50%。");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "手动设置价格");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "手动设置最少晚数");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "设置最少晚数");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "按星期几设置<em>每晚价格</em>");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "按日期范围设置<em>每晚价格</em>");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "按日期范围设置<em>最少晚数</em>");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "日期选择器和费率输入允许您为给定的日期范围设置一个价格。选择开始和结束日期，输入价格，然后单击设置每晚价格按钮。");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "日期选择器和最少晚数输入允许您为给定日期范围的最少晚数设置一个值。选择开始和结束日期，输入最少晚数的数字，然后单击\"设置\"最少晚数。");

jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "使用此下拉菜单可在为各个日期设置价格和为各个日期设置最少晚数之间进行更改。您可以使用<em>按星期几</em>选择器，<em>按日期范围选择器或通过手动编辑日期来设置价格/最少入住天数。");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "使用此下拉菜单可在为各个日期设置价格和为各个日期设置最少晚数之间进行更改。您可以使用<em>按日期范围</em>选择器或按以下方式设置价格/最少晚数手动编辑日期。");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "设置价格或最少入住天数");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW', "按星期几设置<em>最少晚数</em>");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "星期几字段允许您为给定的星期几设置最少晚数，一旦您单击星期几按钮，一周中的所有天数都将设置为该最少晚数设置。 ");


jr_define('_JOMRES_MICROMANAGE_MANUALLY', "手动设置价格/最少入住天数");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES', "设置价格");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS', "设置最少晚数");

jr_define('_JOMRES_MICROMANAGE_PRICE', "每晚");
jr_define('_JOMRES_MICROMANAGE_MINDAYS', "最少晚数");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS', "最多晚数");

jr_define('_JOMRES_MICROMANAGE_INTRO', "在这里您可以创建您的资费，这些资费与您在您的物业中拥有的房间类型相关联。");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "最常用的选项");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON', "使用说明");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "如果您想为不同数量的客人添加不同的价格，则<em>您可以为每种房型创建多个关税</em>，并在这些关税中设置不同的最小/最大客人值。 ");

jr_define('_JOMRES_MICROMANAGE_INFO', "在提供资费之前，为资费命名，定义最大晚数，以及预订表格中要求的最少和最多客人数。<br/><br/>使用日期选择器面板将价格和最少入住天数设置添加到一系列日期，或直接编辑输入。如果您不想在某些日期提供关税，请将价格设置为 0（零)那些日期。<br/><br/>您可以在不同日期设置不同的最少晚数，因此如果您想在节日/会议周期间预订更长的时间，那么您可以将这些期间的最少晚数设置得更高。<br/ ><br/>如果您按每人每人 (PPPN) 收费，您可以在\"设置\">\"属性配置\">\"关税和货币\"选项卡中启用该设置，然后在\"设置\">\"客人类型\"中创建您需要的客人类型。");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "额外选项");
jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "这些是不常用的附加选项，但您仍然可以使用。<br/><strong>忽略 PPPN</strong> 意味着忽略每人每晚。您可以有几种不同的资费对于相同的房型，例如，其中一种按每人每晚收费，另一种不收费。<br/><strong>允许周末</strong>\"允许周末\"选项让您可以选择仅收取工作日可用，例如，如果您想要为商务旅客提供特殊关税。在这种情况下，您可以将选项设置为\"否\"，将最少晚数设置为 1，最多晚数为 5。<br/><strong>周末only</strong> 仅周末选项与允许周末选项相反。您可以在\"属性配置\"设置中配置您认为是周末的日子。这使您能够定义您可能想要的仅周末费率为特别活动提供优惠。<br/><strong>入住日期</strong> 此选项使您能够强制仅在一周中的某些天签到，最好与\"物业配置\">\"预订\"选项卡 >\"固定时段\"选项结合使用。大多数用户希望将此选项设置为全部。<br/>最后两个选项<strong>已选择的最小房间</strong>和<strong>已选择的最大房间</strong>非常专业且对关税极其复杂的物业很有用。 <em>除非您有特定需求，否则您应该保留这些选项。</em>如果您只想在客人已在预订表格中选择 N 个房间时提供此资费，请使用它们，例如您可以有一个基本费率，其中这些选项保留为默认值，第二个费率将已选择的最小房间选项设置为 1，然后一旦选择了房间，将在预订表格中提供第二个费率。");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "您可以为同一房间类型创建多个资费，因此您可以为最少/最多 1 - 7 天创建一个资费，以及最少天数为 7，最多 14 天的第二个资费，以及依此类推。这允许您根据需要创建简单或复杂的定价方案。它还允许您创建具有不同条件的多个费率，因此您可以拥有第二套费率，其中住宿加早餐的价格较低，以及另一套更昂贵的住宿费、早餐费和晚餐费。");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "只设置日期选择器日期");
jr_define('_JOMRES_PROPERTY_HCATEGORIES', '属性类别');
jr_define('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', '编辑属性类别');
jr_define('_JOMRES_STOP_READTHISFIRST1', "停止！");
jr_define('_JOMRES_STOP_READTHISFIRST2', "感谢安装 Jomres");
jr_define('_JOMRES_STOP_READTHISFIRST3', "属性管理在面向公众的页面中进行，而不是在管理员区域。");
jr_define('_JOMRES_STOP_READTHISFIRST4', "如果您不熟悉 Jomres，请访问帮助部分 > 入门页面。");


jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE', "加入Jomres Syndicate");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC', "一旦您的网站设置完毕并准备好开始接待访问者，请加入 Jomres.net 辛迪加并在其他 Jomres 网站上列出您的财产。");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "在创建资费之前，您至少需要一间以下类型之一的房间:");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "转到设置>房间并先创建一个房间，完成后您将能够为该房间类型创建资费。");

jr_define('JOMRES_PLATFORM', "Jomres 平台");


jr_define('JOMRES_PLATFORM_CONNECTED', "已连接");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC', "如果您已经将您的 Stripe 帐户与 Jomres 平台连接，请将其设置为是。");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe 真实账户号码");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "这是您的 Stripe 帐户 ID，可以在设置 > 帐户信息下的 Stripe 仪表板中找到，看起来像 acct_xxxxxxxxx 如果您有多个 Jomres 安装并且您想在整个系统中使用同一个帐户，则可以使用此字段所有站点，并且您已经连接到我们。如果您还没有连接到 Jomres 平台，则在此处输入您的详细信息是不够的。相反，请访问工具栏中\"帮助\"部分下的\"获取连接\"菜单选项。如果您需要要测试付款，请在站点配置的调试选项卡中将您的站点从生产设置为开发。");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY', "条纹实时密钥");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', '在您的 Stripe 仪表板中转到开发人员 > API 密钥以查找您的密钥。系统使用这些密钥来验证从付款表单返回的预订数据是否有效以及在保存预订之前已支付押金.');

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY', "条带测试密钥");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', ' ');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', '标准关税模式');

jr_define('JOMRES_COM_A_ACCOMMODATES', '睡眠');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', '这个楼盘可以容纳多少人？');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', '您每日价格中的客人人数');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', '额外成人价格');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', '儿童');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', '每人每晚？');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 天修饰符');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', '如果预订 7 天或更长时间，则按日费率折扣。如果您不想应用折扣，请将此设置为零。');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 天修饰符');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', '如果预订为 30 天或以上，则按每日价格折扣。如果您不想应用折扣，请将此设置为零。');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', '成人');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', '价格基于 2 个成人');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', '预订打折');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', ' to ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', '因为预订大于 7 天。');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', '因为预订大于30天。');


jr_define('JOMRES_CITY_TAX_HEADING', '城市税');
jr_define('JOMRES_CITY_TAX_VALUE', '城市税值');
jr_define('JOMRES_CITY_TAX_METHOD', '税收计算方法');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', '单费');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', '每晚');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', '每位客人');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', '每位客人每晚');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', '预订价值的百分比');

jr_define('JOMRES_CLEANING_FEE_HEADING', '清洁费');
jr_define('JOMRES_CLEANING_FEE_VALUE', '清洁费成本');


jr_define('JOMRES_COMPATABILITY_MODE', '强制兼容属性配置模式？');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "兼容性属性配置模式强制发生几种情况。在旧版本的 Jomres 中，属性经理可以选择使用哪种费率编辑模式，并且各种其他设置（其中一些可能看起来令人困惑)可能具有对他们可用。启用兼容性配置强制所有新属性仅使用标准资费编辑模式，该模式在定价、子定价等方面模拟了 Booking.com 属性配置功能。建议对于 9.22 之后创建的安装.0，此选项应设置为 Yes，但对于较旧的安装，由您决定是否应在创建新属性时自动将其设置为兼容模式。");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', '你们接受18岁以下的儿童吗？');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "如果您允许儿童，请将此选项设置为是。如果是，那么在设置菜单中您将有一个名为儿童策略的选项，您可以在其中编辑与儿童相关的设置。");

jr_define('JOMRES_POLICIES_CHILDREN', '儿童政策');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', '几岁可以带孩子？');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', '每个孩子，每晚');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', '每个孩子，每次入住');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', '儿童费率');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', '新儿童费率');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', '编辑儿童费率');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', '在此处创建您的免费或付费儿童房价。仅当您为房间类型创建了入住率时，房价才会适用。');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', '年龄从');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', '年龄到');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', '每晚还是每次住宿？');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', '费率');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', '如果为零或未设置，这个年龄段的孩子将是免费的。');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', '入住时的年龄');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', '年龄');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', '入住率');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', '最大成人');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', '最大儿童数');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', '最大入住人数');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', '编辑占用级别：');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', '编辑此房间类型的入住率。不包括睡在婴儿床上的客人（这些是通过创建额外的添加)');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', '每增加一个成人，他们应该收取多少费用？');

jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', '额外的成人');

jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', '您还没有配置儿童费率。');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', '现在设置儿童费率');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', '您已将您的物业配置为允许儿童入住，但您尚未为儿童设置任何入住级别。');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', '设置入住率');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', '任何时候您编辑房间或您的财产类型时，您都应该检查并更新您的财产/房间的入住率，因为这些会影响预订表格中可接受的客人数量。');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', '成人');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', '儿童');


jr_define('_JOMRES_CONFIG_LEVEL_TITLE', '管理选项级别');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres 有许多菜单和配置选项可供您在配置站点时使用。其中绝大多数您永远不需要更改，因此默认情况下它们是隐藏的。您可以通过设置选择显示这些选项管理选项级别。基本级别显示您第一次设置站点时需要的内容。通用级别显示那些最常更改的选项，一切显示管理员区域中所有可能的设置和菜单选项。 ');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', '基础');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', '普通');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', '一切');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', '我们可以收集有关您如何使用 Jomres 的信息吗？');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', '我们想收集有关您如何使用 Jomres 的信息。不会存储任何可识别个人身份的信息，使用情况将被匿名化，仅用于帮助我们了解人们如何使用 Jomres。');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', '是的，没关系');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', '不，我不同意');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', '您会为多个物业进行预订吗？');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres 可用于单个或多个属性的站点。如果您只为一个属性进行预订，那么许多选项将是多余的并且可能会造成混淆。您可以稍后在设置 > 站点中更改此设置配置 > 门户功能选项卡。');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', '只有一个属性');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', '我将列出多个属性');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "您的模板/主题支持哪个版本的 Bootstrap 框架？");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Bootstrap 框架的每个版本都需要稍微不同的 html 标记。Jomres 有三组 Bootstrap 兼容模板集，每个 Bootstrap 版本一个。您必须确保将其配置为使用适当的模板集。如果你不那么输出，如布局，模式和菜单将无法正常工作。如果你决定稍后使用具有不同 Bootstrap 版本的模板/主题，你可以更改 Jomres 应该在 Admin > Jomres > Settings 中使用的 Bootstrap 模板集> 其他选项卡。<br/><br/>Joomla 3 默认与 Bootstrap 2 一起发布，Joomla 4 将使用 Bootstrap 5。Jomres Leohtian 模板 (Joomla) 和主题 (Wordpress) 使用 Bootstrap 3。不同的模板/主题可能是与他们自己的 Bootstrap 文件一起分发，因此如果您有任何疑问，请联系您的模板/主题的开发人员。");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", " Bootstrap 2 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", " Bootstrap 3 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", " Bootstrap 4 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", " Bootstrap 5 ");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', '从输出价格中去除小数点？');

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', '按修复应用分组？');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', '某些 mysql 安装可能在 List Properties、List guest 和 List invoices 页面中的 Jomres 查询有问题。如果这些页面说它们显示了 Y 个结果中的 X 但没有出现在列表中，然后设置此选项为 Yes 可能会解决该问题。如果您使用共享主机并且托管服务不允许您的 mysql 用户发出"SET GLOBAL sql_mode="命令。');
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', '这是频道属性，不能本地管理，请访问频道管理框架页面找到该属性的远程管理链接');

jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "主题中没有引导程序");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', '社交媒体链接');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', '把你的社交媒体账户名称放在这里，例如“jomres”，而不是整个网址');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', '贵组织使用的语言的逗号分隔列表');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', '你的组织标志的网址');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres 更新');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Jomres 有新版本可用。您必须更新才能继续使用 Jomres，因为更新可以改进功能并确保您的安装保持安全。');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', '现在更新 Jomres');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', '插件更新');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', '插件管理器中有新版本的插件可用。您必须先更新所有插件，然后才能继续使用 Jomres，因为更新可以改进功能并确保您的安装保持安全。');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', '插件更新');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', '如果您的许可证不再有效，您可以从我们的网站获取新的许可证密钥。');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', '更新插件');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', '获取新密钥');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', '保存新密钥');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES', "属性类型图像");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE', "需要帮助预订？");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB', "请拨打我们的客服电话，与我们的一位代表交谈，他们将帮助您满足您的所有假期需求。");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE', "为什么要和我们一起预订？");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', "我们提供最优惠的预订价格");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', "我们拥有目前市场上价格最优惠的房产。");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', "无预订费。省钱！");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', "精选属性");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', "属性");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', "客人评论");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', "我们一直在这里");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "随时给我们打电话或发电子邮件");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', "在旅行之前、期间和之后获得 24 小时支持");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', "社交媒体");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', "在社交媒体上找到我们");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "优秀");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "异常");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "很棒");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "精湛");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "太棒了");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "很好");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "好");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "新上市");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "打折");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', '你想去哪里？');
	jr_define('DATA_SOURCES_TITLE', "刷新数据源");
	jr_define('DATA_SOURCES_TITLE_INFO', "数据源已刷新。数据源由搜索小部件中的自动完成输入字段使用，它们通常会自动更新，但是如果需要，此页面会强制手动更新数据。");

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "要发送令牌请求，请将请求发送到此 url");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "主视图属性脚本");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "要查看的属性的属性uid");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "默认模板是property_details.html，使用这个参数你可以定义一个不同的属性细节模板来显示。");

	jr_define('JOMRES_UPDATES_TITLE', 'Jomres 更新');
	jr_define('JOMRES_UPDATES_INFO', "此页面可以为您下载和安装最新版本的 Jomres。它使用自己的功能，而不是主机 CMS 的功能，因此如果在主机 CMS 更新期间出现问题，您可以使用此页面来 强制重新安装最新版本的 Jomres。");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', '物业管理员可以使用前端的编辑模式来自定义每个属性的字符串，但是这只有在您的 WordPress 永久链接设置设置为普通 (http://www.domain.com/?p=123). 完成后，前端用户将能够自定义特定于唯一属性的字符串，例如房间名称和其他标签。');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', '标签编辑模式');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', '此功能用于更改项目标签，通常为不同的语言。');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', '编辑模式允许您重命名单个属性所独有的标签。当您使用编辑模式重命名标签时，更改只会出现在该属性列表中。例如，在您可能想要的一个属性上使用“价格”一词，在另一个词上使用“价格”。并非所有标签都可以更改，例如房间类型名称是站点范围的标签，因此它们不能更改，但通常是单个属性所独有的任何标签可以更改。');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', '如果网站支持多种语言，则在使用一种语言时，您可以创建对单个属性唯一的项目。当您更改活动语言时，您可以使用编辑模式重命名该标签，输入当前语言的合适翻译。您可以继续更改活动语言，为站点支持的每种语言的该标签输入合适的翻译。');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', '标签编辑模式切换');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', '在这个截图中，我们看到了编辑模式开关。编辑模式是关闭的，标签正常显示：');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', '标签编辑模式启用');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', '在这个截图中我们看到，在编辑模式下，你可以重命名的标签被突出显示：');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', '选择要更改的项目');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', '选择标签时会出现一个弹出窗口：');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', '更改标签');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', '使用小表格更改标签。点击打勾完成，或点击X取消编辑：');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', '标签改变');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', '保存更改后，页面中的标签会更新。您现在可以禁用编辑模式：');

	jr_define('JOMRES_TRANSLATIONS_TITLE', '翻译');
	jr_define('JOMRES_TRANSLATIONS_LEAD', '在此页面上，您可以将标签从一种语言翻译成另一种语言。当您访问该页面时，您将看到您已经创建的字符串及其值，无论您当前使用什么语言。在顶部设置 目标语言，然后对于您要翻译的标签，单击标签，弹出窗口将让您输入新的翻译。对于较长的文本行，您可以粘贴来自其他来源的文本。请记住，任何 HTML 都将被删除 .<br/>
您可以将目标语言设置为您当前的语言并使用此页面在此处重命名项目，而不是访问它们的各个页面。');
	jr_define('JOMRES_TARGET_LANGUAGE', '目标语言');

	jr_define('API_CLIENTS_INFO', 'API 客户端是客户端 ID/秘密密钥对，允许远程系统使用您授予他们使用权限的 API 功能。在此页面上，您可以根据需要创建任意数量的客户端/秘密密钥对，每个密钥对使用 您需要的任何权限组合。');
	jr_define('CLIENT_TOKEN', '访问令牌');
	jr_define('CLIENT_TOKEN_INFO', "可以使用客户端 ID 和 Secret 请求访问令牌。某些客户端可能已经为其创建了访问令牌，在这种情况下，您可以使用此访问令牌。如果您认为该令牌可能已经 妥协，或者你只是想改变它，你可以使客户端的令牌过期。与客户端/秘密对关联的所有令牌都将过期。");
	jr_define('DELETE_TOKEN', '过期令牌');

	jr_define('JOMRES_BS5_TOP_PANEL_CHOOSE_CURRENCY', "选择您的货币");
	jr_define('JOMRES_BS5_TOP_PANEL_CHOOSE_LANGUAGE', "选择你的语言");
	jr_define('JOMRES_BS5_TOP_PANEL_REGISTER',"注册");
	jr_define('JOMRES_BS5_TOP_PANEL_SIGN_IN', "登录");
	jr_define('JOMRES_BS5_TOP_PANEL_LIST_YOUR_PROPERTY', "列出你的财产");
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER_FIRST', "您必须先注册并登录");

	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_SHOWFILTERS',"显示过滤器");
	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_HIDEFILTERS',"隐藏过滤器");
