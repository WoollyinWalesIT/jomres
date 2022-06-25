<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_SHORTCODES_06001CPANEL', '这是cpanel首页的属性。');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', '这是物业磁带图表，可一目了然地提供实时预订,可用性和入住率的概述。');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', '这个脚本允许用户相互比较几个属性，最多3个属性。');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', '以逗号分隔的属性 uid 列表，例如 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', '构建联系人所有者表单。');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', '传递要联系的属性的属性 uid。传递 0（零)以代替联系站点管理员。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "显示公司信息页面，从物业配置中的物业经理您的公司详细信息字段中提取详细信息。此选项卡中的详细信息通常用于通信，允许经理同时拥有酒店/公寓地址和用于商业目的的单独地址。");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', '房产的ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "显示物业的日历");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', '传递要显示的属性的属性uid。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Months to show, 如果没有另外设置，默认为 24​​。与 Show Just Month 变量不兼容。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "如果您只想单独显示当前月份，请将其设置为 1。如果在同一个短代码中使用 show_just_month，则将忽略months_to_show 设置，因此您不应同时使用一个或一个同时。");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', '只显示属性描述文本。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', '属性的ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', '只显示属性描述文本。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', '属性ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', '仅显示属性功能。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', '属性的ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', '只显示属性标题模板。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', '属性的ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', '仅显示物业房间类型。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', '房产ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', '只显示属性主图像。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', '属性ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', '只显示属性图。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', '属性ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', '显示属性更多信息文本。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', '属性的ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', '链接到 gmaps 的二维码。可以使用二维码阅读应用程序将其扫描到手机中，该应用程序可提供前往该物业的路线。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', '属性的ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "显示物业的评论。");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', '房产ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "显示物业的评论摘要。");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', '属性的ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', '显示单个房间。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', '房间ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "显示物业的房间。");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', '房产的ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "以幻灯片形式显示房产的房间图像。");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', '房产的ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', '显示属性幻灯片。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', '属性ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', '显示房产税。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', '房产的ID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "显示在站点配置 > 您的公司详细信息中输入的站点的商业地址。");

jr_define('_JOMRES_SHORTCODES_06000TERMS', '显示房产条款和条件。');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', '属性的ID。');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "显示属性的 UI 日历，它与主大日历不同，并且基于 Jquery UI 日历功能。");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', '传递要显示的属性的属性uid。');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', '将此设置为 1 以不显示图例。');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "显示搜索结果，可以通过添加搜索参数来增强。我们不建议您同时使用所有参数，因为您最终会得到过于有限的搜索条件。相反，您应该将自己限制为一两个参数，例如按国家/地区和星数搜索。");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', '按国家搜索，使用 ISO Alpha-2 代码，例如 GB 或 DE。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "按地区搜索。由于地区保存在数据库中，您必须使用地区 ID。访问管理员 > Jomres > 站点结构 > 列出地区，然后将鼠标悬停在编辑链接上，您将看到该地区的 ID 号.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', '你要搜索的城镇全名。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', '搜索具有特定功能的属性。功能 ID 可以在管理员 > Jomres > 站点结构 > 属性功能中找到。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', '搜索具有特定房间类型的属性。房间类型 ID 可以在管理员 > Jomres > 站点结构 > 房间类型中找到。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', '搜索特定属性类型的属性。可以在管理员 > Jomres > 站点结构 > 属性类型中找到属性类型 ID。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', '搜索特定价格范围内的房产。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "搜索关税允许特定值的客人数量的酒店，例如 6 人。");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', '搜索N颗星的属性。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', '按到达日期搜索。应结合离开日期参数。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', '按出发日期搜索。应结合到达日期参数。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', '按属性类别搜索。');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "查看一个代理的页面。如果你知道，你可以传递一个属性 uid 或代理的 id 本身。");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "属性 uid，这将显示属性的代理。");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "经理的数据库 ID，如果知道的话。");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', '显示流行的属性，通常用于模块或小部件位置。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', '可以显示的最大属性数。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', '仅显示该特定属性类型的属性。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', '设置为 1 以显示针对垂直小部件/模块位置优化的模块。');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', '显示随机选择的属性，通常用于模块或小部件位置。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', '可以显示的最大属性数。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', '仅显示该特定属性类型的属性。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', '设置为 1 以显示针对垂直小部件/模块位置优化的模块。');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "显示客人最近查看的属性，通常用于模块或小部件位置。");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT','可以显示的最大属性数。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', '设置为 1 以显示针对垂直小部件/模块位置优化的模块。');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', '显示许多属性，通常用于模块或小部件位置。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', '要显示的属性的属性ID。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', '设置为 1 以显示针对垂直小部件/模块位置优化的模块。');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', '显示货币选择下拉菜单。');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', '启用/禁用备用模板输出。此输出用于引导工具栏。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', '显示购物车页面。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', '显示购物车模块/小部件。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', '显示主菜单。请注意，如果您正在运行 mainmenu_wrapper_alternate.html 的自定义版本，例如 /templates/jr_leohtian/html/com_jomres 那么您可能需要修改它以替换 <itern>ate_menures_/i> 用大括号括起来的 MENU_LOCATION。');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', '这个页面允许你上传你的财产和你提供的东西的图像。它有一个主按钮，第二个按钮允许你选择特定的资源来上传图像。所以，主要财产图像和幻灯片将只显示一个按钮，但如果您创建了任何例如可选附加或房间，那么您将看到第二个按钮，您可以在其中上传这些特定资源的图像。');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', '此页面允许您上传您的财产和您提供的物品的图像。它有一个主按钮，第二个按钮允许您选择要为其上传图像的特定资源。因此，主要财产图像和幻灯片将只显示一个按钮，但如果您创建了任何可选附加功能，那么您将看到第二个按钮，您可以在其中上传这些特定资源的图像。');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>首先通过点击添加图片或使用拖放来选择您要上传的图片。这些将显示在右侧的列中。</li>
  <li>在此区域上方，使用\"选择资源\"按钮选择您要为其上传图片的资源。可能会为您提供选择下方特定资源的选项。 </li>
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
jr_define('_JOMRES_MARKDOWN_DESC', '您可以使用简单的 Markdown 格式在此处输入文本。您不需要了解任何 HTML，只需使用按钮使信息看起来像您想要的那样，或者根据这些示例格式化文本。' );
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
jr_define('_JOMRES_SESSION_HANDLER', '会话处理程序');
jr_define('_JOMRES_SESSION_HANDLER_DESC', '将 jomres 会话文件保存到磁盘或数据库。推荐：数据库');
jr_define('_JOMRES_MAP_HEIGHT',"地图高度(px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"地图缩放级别");
jr_define('_JOMRES_MAP_MAPTYPE',"地图类型");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"模板覆盖管理器");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"模板包是可以为各种核心Jomres模板文件提供覆盖模板的插件。");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"这个页面列出了所有可以被模板包的模板文件覆盖的模板文件。如果你想覆盖某个模板文件，点击那个文件的编辑按钮，在下一页你会能够选择要覆盖的版本。请注意，这些覆盖优先于 Jomres Core 和任何 Wordpress 或 Joomla 主题/模板覆盖。您可以通过在列表模板覆盖页面中删除它来禁用覆盖。");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"模板名称");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"当前路径");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"未覆盖");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"您可以通过更改下拉列表来选择覆盖核心模板文件的模板文件");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"预订的房间百分比");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', '显示新建属性表单。');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', '地图缩放，1：世界 5：大陆/大陆 10：城市 15：街道 20：建筑物 ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', '要显示的评论数量');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', '显示用户入围的属性。如果用户已注册，这些是他们的最爱，如果未登录，则只有在访问期间通过收藏图标添加的那些项目。');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', '最低存款价值');

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "如果计算出的存款少于这个数字，那么将存款设置为这个值。如果它不满足网站的最低存款设置，这个数字本身可能会被覆盖。将其设置为 0 以不使用设置。");

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', '显示符合 GDPR 的同意书。');

jr_define( '_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', '房型列表');
jr_define( '_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', '显示房屋类型');

jr_define('_JOMRES_SHORTCODE_LOGIN_FORM', '显示登录表单');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', '显示某个房间类型的房间列表');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', '房间类型ID');

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD','仪表板');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', '显示联合属性列表');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', '要显示的联合属性数量');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', '是否显示 MRP（酒店/床和早餐)或 SRP（别墅/公寓/别墅)。默认值由当前属性的属性 uid 确定，如果没有 MRP显示。要选择特定类型，请将此值设置为 0 表示 srps，或 1 表示 mrps。');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "显示属性的星星。如果属性是 MRP，这些在属性配置中设置。");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', '属性ID。');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', '可选。如果属性id没有设置，你可以传递一个数字代替。');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', '可选。替代模板路径。不能通过url传递。必须是绝对的。');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', '可选。替代模板名称。');
