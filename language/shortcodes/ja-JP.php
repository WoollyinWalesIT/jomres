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

jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'これはプロパティcpanelのフロントページです。');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'これは,リアルタイムの予約,空室状況,および占有率の概要を一目で提供するプロパティテープチャートです。');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'このスクリプトを使用すると,ユーザーは最大3つのプロパティまでの複数のプロパティを相互に比較できます。');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'プロパティuidのコンマ区切りリスト(例：12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', '連絡先所有者フォームを作成します。');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', '連絡先のプロパティのプロパティuidを渡します。代わりにサイト管理者に連絡するために0(ゼロ)を渡します。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "プロパティ構成のプロパティマネージャーの[会社の詳細]フィールドから詳細を取得する[会社情報]ページを表示します。このタブの詳細は通常,通信に使用され,マネージャーはホテル/アパートの住所とビジネス目的の別の住所。 ");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "プロパティのカレンダーを表示します");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', '表示するプロパティのプロパティuidを渡します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', '表示する月,特に設定されていない場合,デフォルトは24です。ShowJustMonth変数とは互換性がありません。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "現在の月を単独で表示する場合は,これを1に設定します。show_just_monthが同じショートコードで使用されている場合,months_to_show設定は無視されるため,どちらか一方を使用しないでください。同時に。");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'プロパティの説明テキストのみを表示します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'プロパティの説明テキストのみを表示します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'プロパティ機能のみを表示します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'プロパティヘッダーテンプレートのみを表示します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'プロパティルームタイプのみを表示します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'プロパティのメイン画像のみを表示します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'プロパティマップのみを表示します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'プロパティの詳細情報テキストを表示します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'gmapsにリンクするQRコード。これは,プロパティへの道順を提供するqrコード読み取りアプリを使用して電話にスキャンできます。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "プロパティのレビューを表示します。");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "プロパティのレビューの概要を表示します。");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', '個々の部屋を表示します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', '部屋のID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "プロパティの部屋を表示します。");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "プロパティの部屋の画像をスライドショーとして表示します。");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'プロパティのID。');
    
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'プロパティのスライドショーを表示します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'プロパティの料金を表示します。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "[サイトの構成]> [会社の詳細]に入力されたサイトの会社の住所を表示します。");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'プロパティの契約条件を表示します。');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'プロパティのID。');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "プロパティのUIカレンダーを表示します。これは,メインの大きなカレンダーとは異なるカレンダーであり,Jquery UIカレンダー機能に基づいています。");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', '表示するプロパティのプロパティuidを渡します。');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', '凡例を表示しないようにするには,これを1に設定します。');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "検索結果を表示します。これは,検索パラメーターを追加することで拡張できます。検索条件が制限されすぎるため,すべてのパラメーターを同時に使用することはお勧めしません。代わりに,国や星の数で検索するなど,1つまたは2つのパラメータに制限する必要があります。 ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'ISO Alpha-2コード(GBやDEなど)を使用して国で検索します。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "地域で検索。地域はデータベースに保存されるため,地域IDを使用する必要があります。[管理者]> [Jomres]> [サイト構造]> [地域の一覧表示]に移動し,[編集]リンクにカーソルを合わせると,地域のID番号が表示されます。 。 ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', '検索する町のフルネーム。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', '特定の機能を持つプロパティを検索します。機能IDは,[管理者]> [Jomres]> [サイト構造]> [プロパティ機能]にあります。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', '特定の部屋タイプのプロパティを検索します。部屋タイプIDは,[管理者]> [Jomres]> [サイト構造]> [部屋タイプ]にあります。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', '特定のプロパティタイプのプロパティを検索します。プロパティタイプIDは,[管理者]> [Jomres]> [サイト構造]> [プロパティタイプ]にあります。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', '特定の価格帯の物件を検索します。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "料金が特定の値のゲスト番号を許可するプロパティを検索します。たとえば,パーティーは6です。");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'N個の星のプロパティを検索します。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', '到着日で検索します。departureDateパラメーターと組み合わせる必要があります。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', '出発日で検索します。arrivalDateパラメーターと組み合わせる必要があります。');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'プロパティカテゴリで検索します。');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "エージェントのページを表示します。プロパティuid,またはエージェントのID自体(わかっている場合)のいずれかを渡すことができます。");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "プロパティuid,これはプロパティのエージェントを表示します。");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "マネージャーのデータベースID(わかっている場合)");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'モジュールまたはウィジェットの位置で通常使用される一般的なプロパティを表示します。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', '表示できるプロパティの最大数。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'この特定のプロパティタイプのプロパティのみを表示します。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', '1に設定すると,垂直ウィジェット/モジュール位置に最適化されたモジュールが表示されます。');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'プロパティのランダムな選択を表示します。通常,モジュールまたはウィジェットの位置で使用されます。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', '表示できるプロパティの最大数。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'この特定のプロパティタイプのプロパティのみを表示します。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', '1に設定すると,垂直ウィジェット/モジュール位置に最適化されたモジュールが表示されます。');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "ゲストの最近表示されたプロパティを表示します。通常,モジュールまたはウィジェットの位置で使用されます。");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', '表示できるプロパティの最大数。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', '1に設定すると,垂直ウィジェット/モジュール位置に最適化されたモジュールが表示されます。');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', '通常はモジュールまたはウィジェットの位置で使用されるいくつかのプロパティを表示します。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', '表示するプロパティのプロパティID。');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', '1に設定すると,垂直ウィジェット/モジュール位置に最適化されたモジュールが表示されます。');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', '通貨選択ドロップダウンを表示します。');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', '代替テンプレート出力を有効/無効にします。この出力は,ブートストラップツールバーでの使用を目的としています。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'ショッピングカートページを表示します。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'ショッピングカートモジュール/ウィジェットを表示します。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'メインメニューを表示します。たとえば/ templates / jr_leohtian / html / com_jomresでmainmenu_wrapper_alternate.htmlのカスタマイズバージョンを実行している場合は,<i> jomres_alternate_menu_positionを置き換えるために,それを変更する必要がある場合があります。 / i> MENU_LOCATIONを中括弧で囲みます。 ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'このページでは,プロパティと提供するものの画像をアップロードできます。メインボタンが1つと,画像をアップロードする特定のリソースを選択できる2番目のボタンがあります。つまり,メインプロパティ画像とスライドショーにはボタンが1つしか表示されませんが,オプションのエクストラやルームなどを作成した場合は,それらの特定のリソースの画像をアップロードできる2番目のボタンが表示されます。');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'このページでは,プロパティと提供するものの画像をアップロードできます。メインボタンが1つと,画像をアップロードする特定のリソースを選択できる2番目のボタンがあります。つまり,メインプロパティ画像とスライドショーにはボタンが1つしか表示されませんが,オプションのエクストラを作成した場合は,それらの特定のリソースの画像をアップロードできる2番目のボタンが表示されます。');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>まず,[画像の追加]をクリックするか,ドラッグアンドドロップを使用して,アップロードする画像を選択します。これらは右側の列に表示されます。</ li>
  <li>この領域の上にある[リソースの選択]ボタンを使用して,画像をアップロードするリソースを選択します。下にある特定のリソースを選択するオプションが提供される場合があります。 </ li>
  <li>リソースを選択したら,画像の下にある[画像をアップロード]ボタンをクリックして,そのリソースに関連付けることができます。画像がアップロードされると,右側のサイトの列から消え,左側に表示されます。</ li>
  <li>既存の画像の横にある[ゴミ箱]ボタンを使用して,表示したくない画像を削除します。</ li>
  <li>ファイルはアルファベット順にページに表示されるため,アップロードする前に名前を変更することで,スライドショーに表示されるファイルの順序を変更できます。</ li>
</ ol>
 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "[リソース]ボタンの横に[プレビュー]ボタンが表示される場合があります。これをクリックすると,現在アップロードされている画像がページでどのように表示されるかを示すポップアップが表示されます。画像が顧客にどのように見えるかについてのアイデア。 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "アップロードできる画像の数に制限はありません。画像はアップロード時に自動的にサイズ変更されます。アップロードできるのはJPGファイルとPNGファイルのみです。");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "理想的には,アップロードする画像は少なくとも");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "ピクセル幅。そうしないと,アップロード後にぼやけて見える場合があります。");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "アップロードする画像は");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "サイズが");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "画像をアップロードするリソースを選択してください");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "特定のリソース");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "このリソース用に既にアップロードされている画像");

jr_define('_JOMRES_MARKDOWN_TITLE', 'テキストフォーマット');
jr_define('_JOMRES_MARKDOWN_DESC', '単純なMarkdownフォーマットを使用してここにテキストを入力できます。HTMLを知っている必要はありません。ボタンを使用して情報を希望どおりに表示するか,これらの例に従ってテキストをフォーマットしてください。' );
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'エンファシス');
jr_define('_JOMRES_MARKDOWN_BOLD', '太字');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'イタリック');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', '取り消し線');
jr_define('_JOMRES_MARKDOWN_HEADERS', "ヘッダー");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'ビッグヘッダー');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "中程度のヘッダー");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', '小さなヘッダー');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', '小さなヘッダー');
jr_define('_JOMRES_MARKDOWN_LISTS', "リスト");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'ジェネリックリストアイテム');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', '番号付きリストアイテム');
jr_define('_JOMRES_MARKDOWN_LINKS', 'リンク');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', '表示するテキスト');
jr_define('_JOMRES_MARKDOWN_QUOTES', '引用');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'これは引用です。');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', '複数行にまたがることができます！');
jr_define('_JOMRES_MARKDOWN_IMAGES', '画像');
jr_define('_JOMRES_MARKDOWN_TABLE', 'テーブル');
jr_define('_JOMRES_MARKDOWN_COLUMN', '列');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'プロパティリストにスライドショーとしてプロパティ画像を表示しますか？');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'yesに設定すると,プロパティのメイン画像のスライドショーが表示されます。noに設定すると,最初のプロパティのメイン画像が表示されます。');

jr_define('EDIT_CMS_USER', 'C​​MSユーザーの編集');

jr_define('BOOKING_MADE_BY', '予約者');

jr_define('_JOMRES_ROUTER_FEATURES', 'アメニティ');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'ルームタイプ');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', '外部予約フォームのURL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'サードパーティのWebサイトを使用して予約する場合は,ここで外部URLを設定できます。すべてのjomres予約ボタンはこのURLを指します。Jomres予約フォームを使用する場合は,このフィールドを空白のままにします。 。 ');

jr_define('_JOMRES_ROOM_TAGLINE', 'タグライン(短い部屋の説明/字幕)');
jr_define('_JOMRES_ROOM_DESCRIPTION', '部屋の説明');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'ゲストブラックリスト');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'このゲストがブラックリストに登録されている場合,このプロパティで予約することはできなくなります。');
jr_define('_JOMRES_SESSION_HANDLER', 'セッションハンドラ');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'jomresセッションファイルをディスクまたはデータベースに保存します。推奨：データベース');
jr_define('_JOMRES_MAP_HEIGHT', "マップの高さ(px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "マップズームレベル");
jr_define('_JOMRES_MAP_MAPTYPE', "マップタイプ");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "テンプレートオーバーライドマネージャー");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "テンプレートパッケージは,さまざまなコアJomresテンプレートファイルのオーバーライドテンプレートを提供できるプラグインです。");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "このページには,テンプレートパッケージのテンプレートファイルで上書きできるテンプレートファイルが一覧表示されます。特定のテンプレートファイルを上書きする場合は,そのファイルの編集ボタンをクリックしてください。次のページに移動します。オーバーライドするバージョンを選択できます。これらのオーバーライドは,Jomres CoreとWordpressまたはJoomlaのテーマ/テンプレートオーバーライドの両方よりも優先されることに注意してください。オーバーライドを無効にするには,[リストテンプレートオーバーライド]ページでオーバーライドを削除します。 ");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "テンプレート名");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "現在のパス");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "オーバーライドされません");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "ドロップダウンを変更することで,コアテンプレートファイルを上書きするテンプレートファイルを選択できます");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "予約された部屋の割合");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', '新しいプロパティの作成フォームを表示します。');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'マップズーム,1：世界5：陸地/大陸10：都市15：通り20：建物');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', '表示するレビューの数');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'ユーザーの候補リストのプロパティを表示します。ユーザーが登録されている場合,これらはお気に入りです。ログインしていない場合は,訪問中にお気に入りアイコンから追加されたアイテムのみです。');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', '最低入金額');
    
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "計算されたデポジットがこの数値よりも少ない場合は,代わりにデポジットをこの値に設定します。サイトの最小デポジット設定を満たさない場合,この数値自体が上書きされる可能性があります。0に設定したままにします。設定を使用しないでください。 ");

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'GDPR準拠の同意フォームを表示します。');

jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'プロパティルームタイプリスト');
jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'プロパティルームタイプを表示');

jr_define('_JOMRES_SHORTCODE_LOGIN_FORM', 'ログインフォームを表示する');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', '特定の部屋タイプの部屋のリストを表示する');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', '部屋タイプID');

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'ダッシュボード');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'シンジケートされたプロパティのリストを表示します');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', '表示するシンジケートプロパティの数');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'MRP(ホテル/ベッド＆ブレックファースト)またはSRP(コテージ/アパート/ヴィラ)を表示するかどうか。デフォルトは,現在のプロパティのプロパティuidから決定されます(使用できない場合)。特定のタイプを選択するには,この値をsrpsの場合は0に,mrpsの場合は1に設定します。');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "プロパティのスターを表示します。プロパティがMRPの場合,これらはプロパティ構成で設定されます。");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID','プロパティのID。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER','オプション。プロパティIDが設定されていない場合は,代わりに数値を渡すことができます。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH','オプション。代替テンプレートパス。URL経由で渡すことはできません。絶対でなければなりません。');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME','オプション。代替テンプレート名。');
