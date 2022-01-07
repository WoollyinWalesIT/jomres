<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('VIDEO_TUTORALS_TITLE', '视频教程');

jr_define('_JOMRES_TUTORIAL_CPANEL', '控制面板');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', '本教程向您展示如何使用物业管理控制面板。');

jr_define('_JOMRES_TUTORIAL_TIMELINE', '时间线');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', '如何使用时间轴日历。在这个视频中，我们通过在弹出窗口中输入他们的详细信息来创建一个新客人，可以通过从弹出窗口的下拉菜单中选择他们的姓名来重新使用现有客人。') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', '列表属性');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', '如何使用列表属性页面查看额外信息,更改列和搜索特定属性。');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', '编辑您的财产详情');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', '编辑您的财产详细信息，包括在地图上拖动以设置您的位置。');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', '更改关税编辑模式');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', '您的费率编辑模式决定了您可以用来为您的房产设置价格的方法。您可以通过房产配置页面进行设置。');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', '酒店,养老金,民宿的正常资费编辑模式');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', '普通资费编辑模式是一个简单的资费编辑功能，可以让您选择一个物业的房间数量,房间价格,每个房间可容纳的客人人数和最大客人人数在聚会中。保存后，这些价格将在接下来的 10 年内有效。');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', '别墅和公寓的正常关税编辑');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', '普通资费编辑模式是一个简单的资费编辑功能，允许您选择住宿子类型,住宿每晚的价格和聚会的最大客人数。保存这些价格后然后在接下来的 10 年内有效。');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', '微管理资费编辑模式（推荐)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', '微观管理资费编辑模式允许您配置价格，以及一年中每一天的入住有效天数。它是一个强大的工具，让您完全控制定价过高。在这个例子中，我们将向您展示如何为同一房间类型创建多个价格集，为不同时期设置不同的价格，以及为一个时期内一周中的特定日期设置不同的价格。');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', '别墅/公寓的微管理关税编辑模式（推荐)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', '微观管理关税编辑模式允许您配置价格，以及一年中每一天的入住有效天数。它是一个强大的工具，让您完全控制定价过高。在本例中，我们将向您展示如何创建多个价格集。我们将为不同时期设置不同的价格，并为一个时期内一周中的特定日期设置不同的价格。完成后，我们将为相同的价格创建多个关税属性，但具有不同的客人数量，使我们能够精确控制每种情况的价格。');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', '不同客人数量的不同关税');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', '你可以为同一个房型创建多个资费，所以如果你想为不同数量的客人提供不同的价格，你可以这样做。');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', '每人每晚 - 客人类型');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', '要按每人每晚收费，您需要创建客人类型。不同的客人类型可能与房间的基本价格有所不同，因此不同年龄的儿童可以根据他们的年龄享受不同的折扣。您不需要按每人每晚收费来使用客人类型，如果您收取统一费用但仍想获取客人数量，或者因为您想限制预订中的客人数量，您也可以使用它们。 ');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', '媒体中心-图片上传');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', '所有图片都是通过媒体中心上传的。在本视频中，我们将上传主要属性图片,一些幻灯片图片,要在搜索结果页面中显示的一小部分图片以及其中一个图片的图片房间。');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', '媒体中心 - 图片上传');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', '所有图片都是通过媒体中心上传的。在本视频中，我们将上传主要房产图片,要在搜索结果页面中显示的一小部分图片以及一些幻灯片图片。');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', '管理员控制面板');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', '这是你在管理员区域的默认登陆页面。你可以看到各种站点统计的摘要，可以看到系统中存在哪些属性，哪些是完整的，哪些已经完成，正在等待审核批准. 房产一旦获得批准，就可以由房产经理发布。');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', '插件管理器，安装和使用');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', '该视频向您展示了如何使用插件管理器，包括插件管理器的安装以及插件的安装和卸载。如果您没有许可证密钥，您将被提示在站点中保存安装管理器之前的配置。如果你之前没有使用过插件管理器，那么这个列表最初是空的，在这个例子中我已经安装了各种插件。');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', '物业经理');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', '以两种方式之一添加属性管理器。他们自己创建属性（可以在站点配置中禁用)或站点管理员可以将现有管理器分配给某些属性。管理器只能访问他们拥有的属性创建或已分配给。');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', '访问控制');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', '您可以使用访问控制功能禁用菜单选项，使其仅对某些类别的用户可见，甚至完全消失。如果菜单栏没有任何菜单选项可显示，则它将完全消失，因此如果您不希望网站访问者看到任何选项，那么您可以将所有选项设置为对登录用户可见，例如。');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', '物业和房间类型');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', '在这个视频中，您将看到两个重要的概念。第一个是创建属性类型和关联的房间类型。您还将看到尚未成为经理的注册用户创建自己的属性并成为manager（但只能配置他们创建的属性)。属性和房间类型是相关联的，一旦您创建了一个属性类型，您必须添加一个房间类型，否则属性经理在尝试配置他们的属性时会看到红色错误消息。 ');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', '上传地图标记');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', '您使用媒体中心上传地图标记。<a href="https://mapicons.mapsmarker.com/" target="_blank">可以在此处找到大量标记来源。< /a> 上传房产特征,房间特征,房间类型等的步骤是一样的。');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', '属性特征');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', '在本视频中，我们将向您展示如何创建属性特征，并为它们上传图像。');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Shortcodes 是 Jomres 的一个非常强大的功能。Joomla 和 Wordpress 的原理是一样的。在这个视频中，我们将向您展示在哪里查看短代码（这个列表会根据插件的不同而变化)安装)以及如何使用它们。您可以使用文章或模块中的代码。');

    jr_define('_JOMRES_TUTORIAL_LOGFILES', '日志文件');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', '此视频将向您展示如何查看日志文件。系统运行时会进行大量日志记录。在生产模式下（站点配置 > 调试)生成的日志较少，因此如果您正在测试新功能，那么您应该将您的站点设置为开发。如果您想将自己的日志记录添加到您的 Jomres 脚本中，请查看 <a "http://www.jomres.net/manual/developers-guide/56-other-discussions /339-logging-in-jomres" target="_blank">我们的手册页关于如何做。</a>这里我们将抛出一个假错误，然后查看日志文件。因为站点设置为开发那里是很多信息，通常您只会看到一条消息，指出存在错误并且已报告。');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', '翻译标签和其他字符串');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Jomres 中有多种翻译语言字符串的方法，您可以编辑语言文件，但升级时它们可能会被覆盖。相反，我们建议您使用我们独有的内置翻译工具软件，如果字符串是已经输入表格的东西，例如房间类型的名称，您可以使用标签编辑页面。如果字符串来自语言文件，您可以使用语言文件编辑工具。只需使用浏览器搜索工具找到您要更改的字符串，然后单击链接进行更改。这些更改会保存到数据库中，因此是更新安全的。您可以为不同的属性类型设置不同的标签，因此您可以将 New Property 更改为 New Campsite，例如，在更改标签之前更改页面顶部的 Language Context 下拉菜单。');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', '添加属性');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p>在此阶段，Jomres 已安装到 CMS 中并已添加到前端菜单中（或在 Wordpress 中您创建了一个页面并将基本的 Jomres 短代码添加到其中)。</p> >
<p>在这里，您将看到尚未成为 Jomres 物业经理的注册用户如何创建新物业,配置一些基本设置并发布。</p>
<p>最后您会看到经理已自动设置为属性经理，但他们只能配置自己的属性。</p>
<p>虽然 Wordpress 中的界面看起来不同，但 Joomla 或 Wordpress 的过程完全相同。</p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', '属性类别');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', '物业类别是一个简单的功能，允许物业经理将他们的物业分配到某个类别。站点管理员可以创建短代码，列出一个类别中的所有物业，如本视频所示。');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', '站点管理员查看属性');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p>你不能从这里管理属性，你只能从前端管理属性，但是在这个列表中你可以看到待批准的属性（如果该功能已启用)和任何不完整（例如仍然需要上传图片,设置价格等)。点击属性名称以进入该属性的仪表板。然后您将能够使用页面顶部的指南部分来查看步骤您需要完成并发布一个属性。</p> ');

