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

jr_define('_JOMRES_FAQ', '常见问题');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', '属性');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', '如何创建属性？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', '点击属性 > 新建属性添加一个新属性。');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', '我怎样才能看到我的财产对客人来说是什么样的？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', '点击属性 > 预览以查看您的属性对客人的外观。');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', '如何添加房间？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "如何添加房间取决于您的资费编辑模式。在普通资费编辑模式下，您不需要添加房间，因为它们会在您配置价格时自动添加。如果您使用微观管理或高级资费编辑模式，然后在设置 > 房间中，您可以添加,编辑和删除房间。您还可以创建房间特征，并将这些特征分配给这些房间。此外，您将能够为个人上传图像使用媒体中心的房间。当您创建房间时，您应该尽量确保它们反映您的财产中的真实房间，因为这将使它们更易于管理。");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', '如何设置房价？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "这取决于您的资费编辑模式。如果您使用的是普通资费编辑模式（属性配置 > 资费编辑模式选项卡)那么您可以配置您拥有的房间数,价格,数量每个房间可容纳的人数以及每次预订中您想要的总人数。此模式允许您设置未来 10 年的房价。<br/>如果您使用的是高级或微观管理资费编辑模式，那么您是能够设置未来几年每天的房价。您还可以为同一房型设置多种资费，例如，您可以为床和早餐提供一种资费，而为床,早餐和晚餐提供另一种资费。除非您有特定需求，我们建议您一直使用Micromanage，Advanced也会以同样的方式工作，但您需要注意确保不同资费的开始和结束日期是连续的。");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', '如何创建可选的附加功能？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "附加功能可以添加到预订中，并在设置 > 附加功能中进行配置。这些可以是可选的或\"强制\"的，换句话说，客人不能在预订中取消选择它们。您可以提供不同的方法额外收费，以及它们是否显示在您的住宿详情页面中。因为额外费用只能在特定日期内显示（例如，对于时令水果)，您应该确保您已经设置了 Valid from 和 To 日期。一旦您创建了可选的扩展程序，您就可以通过媒体管理器为它们上传图像。");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', '我如何在线付款？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "要在线付款，您需要在一个称为网关的在线支付提供商处拥有一个帐户。要查看可用网关，请转到属性配置 > 网关选项卡。单击要使用的网关名称到它的配置页面。");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', '可以打折吗？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "可以提供折扣，有多种不同的方式可以做到。如果您代表客户进行预订，那么您可以在预订表格中设置自己的存款和预订总额, 使用 Override Accommodation Total 和 Override Deposit 字段（客人不能使用此功能)。另一种给客人折扣的方法是创建折扣券，可以将其配置为只能在特定日期之间使用（有效from/to ) 或仅在预订介于特定日期之间时应用 ( Booking valid from/to )。此优惠券可以分配给一位客人，或者如果您愿意，您可以打印优惠券。打印输出包括一个二维码客人可以扫描他们的手机，将他们带到您的预订表格，折扣代码已经适用。");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', '预订');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', '当我点击新预订时，我被带到联系表单，为什么？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', '在您可以在线预订之前，您必须首先为您在现实世界中拥有的每种房型配置一些价格（资费)。一旦您创建了一些资费，您就可以接受预订.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', '什么是黑色预订？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "黑色预订是为了让一个或多个房间停止服务而创建的预订。它们与任何客人无关并且很有用，例如，如果房间需要翻新。") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', '图片');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDICENTRE_INTRO', '如何上传图片？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDICENTRE_INTRO', "要上传图片，您需要访问设置 > 媒体中心页面。在此页面上，您将看到几个窗格。在顶部您可能会看到一些注释，在它们下方您会看到一个下拉列表。通过此下拉菜单，您可以选择要为其上传图片的资源。<br/>右侧是一列，其中包含\"添加图片\",\"清除列表\"和\"全部上传\"。单击\"添加图片\"并从您的桌面或移动设备中选择一些图片。当您已完成此操作，该列将更改为缩略图列表。您可以在此处为您的资源上传一张或多张图片。");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDICENTRE_MAIN', "'主'图像是什么？");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDICENTRE_MAIN', '主图片是出现在搜索结果和您的财产标题（页面顶部显示有关您财产的某些内容的区域)中的图像。您应该选择在最好的光线。要上传主图片，请确保在左上角的下拉列表中选择了属性主图片，然后上传一张或多张图片。如果您上传多张图片，则所有图片都将用于搜索结果页面显示为小幻灯片。');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDICENTRE_RESOURCEFEATURES', '什么是房间功能图标？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDICENTRE_RESOURCEFEATURES', "房间特征可以由微观管理或高级资费编辑模式的用户创建。这些可以链接到一个或多个房间，并显示在预订表格中。一旦您创建了房间特征，您就可以通过首先在媒体中心的下拉菜单中选择房间功能图标，然后从将出现在下方的下拉菜单中选择房间功能的名称，上传该功能的图像。");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDICENTRE_ROOMS', '如何上传房间图片？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDICENTRE_ROOMS', '房间可以由微管理或高级资费编辑模式的用户创建。创建一个或多个房间后，您可以通过媒体中心为每个房间上传多张图像（选择房间名称/号码后在下拉列表中选择房间图像)。通过查看预览页面并选择我们的房间选项卡，然后单击可用性链接，可以在幻灯片中看到这些图像。');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDICENTRE_SLIDESHOW', '如何上传幻灯片图片？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDICENTRE_SLIDESHOW', '幻灯片图像显示在属性详细信息（预览)页面中，在立即预订按钮旁边。');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDICENTRE_EXTRAS', '如何上传额外图片？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDICENTRE_EXTRAS', "类似于房间和房间功能，您需要先创建一个 Extra。完成后，您可以在顶部下拉列表中选择 Extras。完成后，您需要选择名称从下面的下拉列表中选择 Extra。选择名称后，您可以为该 Extra 上传一张或多张图片。");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', '一些客人相关');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', '我该怎么说呢？');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', '你胡说八道');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', '如何保存多种语言的描述？');

jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "要保存多种语言的描述，首先访问设置 > 属性详细信息页面。在那里保存您属性的描述。接下来，更改您查看网站的语言。现在转到设置再次属性详细信息页面，并再次保存详细信息。因此，如果该站点能够同时显示英语和西班牙语（或任何其他)语言，您将选择英语，输入英语描述，然后单击保存。下一步，更改您当前的语言转换为西班牙语，然后保存新的西班牙语描述。这适用于该页面上的所有输入。");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', '我可以修改本网站的其他属性吗？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', '不，你不能。你只能管理你作为物业经理创建或分配的物业。');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', '我可以修改本网站的其他属性吗？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "是的，你可以，你是一个超级物业经理，可以修改列表属性页面中显示的任何属性。");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', '什么是客人类型/每人每晚如何更改？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "在设置>属性配置>关税和货币选项卡中，您可以决定是否要按每人每晚收费。如果按每人每晚收费，则需要创建一个或多个客人类型。您可以创建一个简单的客人类型，您只需给他们一个描述（例如 Persons )，或者您可以创建几种不同的客人类型，例如\"成人\"和\"10 岁以下的儿童\"。对于儿童，如果您想提供50% 的折扣，然后您将\"是百分比\"设置为\"是\"，将\"差异\"值设置为 50。房间有基本费率，此设置允许您根据客人类型调整房间的价格。");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', '房间特色是什么？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "房间特色是让房间脱颖而出的东西。它们可以是简单的东西，比如茶和咖啡器具，或者它们可以是真正让房间高于其他东西的东西，比如\"俯瞰整个房间\" bay'。创建房间特征后，您可以在媒体中心上传该特征的图像。这些房间特征可以在房间可用性页面上查看，如果您已将您的属性配置为显示经典房间列表样式（客人可以在这里准确选择他们想要预订的房间)然后他们可以使用房间功能来过滤预订表格中显示的房间。");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', '付款');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "预订后看不到支付网关。");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "如果您以物业经理身份登录，您将看不到支付网关，因为您不是自己付款。只有非经理用户在预订时才能看到该网关。");
