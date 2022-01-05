<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.0.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('VIDEO_TUTORALS_TITLE', 'ビデオチュートリアル');

jr_define('_JOMRES_tokyo_CPANEL', 'コントロールパネル');
jr_define('_JOMRES_tokyo_CPANEL_DESC', 'このチュートリアルでは,プロパティ管理コントロールパネルの使用方法を示します。');

jr_define('_JOMRES_tokyo_TIMELINE', 'タイムライン');
jr_define('_JOMRES_tokyo_TIMELINE_DESC', 'タイムラインカレンダーの使用方法。このビデオでは,ポップアップに詳細を入力して新しいゲストを作成し,ポップアップのドロップダウンから名前を選択することで既存のゲストを再利用できます。') ;

jr_define('_JOMRES_tokyo_LISTPROPERTIES', 'リストプロパティ');
jr_define('_JOMRES_tokyo_LISTPROPERTIES_DESC', '[プロパティのリスト]ページを使用して,追加情報を表示したり,列を変更したり,特定のプロパティを検索したりする方法。');

jr_define('_JOMRES_tokyo_EDIT_PROPERTY_MRP', 'プロパティの詳細を編集する');
jr_define('_JOMRES_tokyo_EDIT_PROPERTY_MRP_DESC', '地図上をドラッグして場所を設定するなど,プロパティの詳細を編集します。');

jr_define('_JOMRES_tokyo_CHANGE_TARIFF_EDITING_MODE', '料金編集モードの変更');
jr_define('_JOMRES_tokyo_CHANGE_TARIFF_EDITING_MODE_DESC', '料金編集モードによって,プロパティの価格を設定するために使用できる方法が決まります。これは,[プロパティの構成]ページで行います。');


jr_define('_JOMRES_tokyo_NORMAL_TARIFF_EDITING_MODE_MRP', 'ホテル,ペンション,B＆Bの通常の料金編集モード');
jr_define('_JOMRES_tokyo_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', '通常の料金編集モードは,プロパティ内の部屋の数,部屋の価格,各部屋が収容できるゲストの数,および最大ゲスト数を選択できるシンプルな料金編集機能です。保存すると,これらの価格は次の10年間有効になります。 ');

jr_define('_JOMRES_tokyo_NORMAL_TARIFF_EDITING_MODE_SRP', '別荘とアパートの通常の料金編集');
jr_define('_JOMRES_tokyo_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', '通常の料金編集モードは,プロパティのサブタイプ,1泊あたりのプロパティの価格,およびパーティーの最大ゲスト数を選択できるシンプルな料金編集機能です。これらの価格を保存すると,その後,次の10年間有効です。 ');

jr_define('_JOMRES_tokyo_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'マイクロマネジメント料金編集モード（推奨)');
jr_define('_JOMRES_tokyo_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Micromanageの料金編集モードでは,1年の毎日の料金と滞在が有効な最小日数の両方を構成できます。これは完全な制御を可能にする強力なツールです。この例では,同じ部屋タイプに複数の価格セットを作成し,期間ごとに異なる価格を設定し,期間内の特定の曜日に異なる価格を設定する方法を示します。');

jr_define('_JOMRES_tokyo_MICROMANAGE_TARIFF_EDITING_MODE_SRP', '別荘/アパートの料金編集モードをマイクロ管理する（推奨)');
jr_define('_JOMRES_tokyo_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Micromanageの料金編集モードでは,1年の毎日の料金と滞在が有効な最小日数の両方を構成できます。これは完全な制御を可能にする強力なツールです。この例では,複数の価格セットを作成する方法を示します。期間ごとに異なる価格を設定し,期間内の特定の曜日に異なる価格を設定します。それが完了すると,同じものに対して複数の料金が作成されます。プロパティですが,ゲスト数が異なるため,すべてのシナリオの価格を正確に管理できます。 ');

jr_define('_JOMRES_tokyo_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', '異なるゲスト番号の異なる料金');
jr_define('_JOMRES_tokyo_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', '同じ部屋タイプに対して複数の料金を作成できるため,ゲスト数ごとに異なる料金が必要な場合は,それを行うことができます。');

jr_define('_JOMRES_tokyo_MICROMANAGE_GUEST_TYPES', '1人1泊あたり-ゲストタイプ');
jr_define('_JOMRES_tokyo_MICROMANAGE_GUEST_TYPES_DESC', '1人1泊あたりの料金を請求するには,ゲストタイプを作成する必要があります。ゲストタイプが異なれば,部屋の基本料金とは異なる場合があるため,年齢が異なる子供は年齢に応じて割引が異なります。ゲストタイプを使用するために1人1泊あたりの料金を請求する必要はありません。定額料金を請求するが,それでもゲスト数を取得したい場合,または予約のゲスト数を制限したい場合にも使用できます。 ');

jr_define('_JOMRES_tokyo_MEDIA_CENTRE_MRP', 'メディアセンター-画像のアップロード');
jr_define('_JOMRES_tokyo_MEDIA_CENTRE_MRP_DESC', 'すべての画像はメディアセンターを通じてアップロードされます。このビデオでは,メインプロパティの画像,いくつかのスライドショー画像,検索結果ページに表示される画像の一部,およびいずれかの画像をアップロードします。部屋。');

jr_define('_JOMRES_tokyo_MEDIA_CENTRE_SRP', 'メディアセンター-画像のアップロード');
jr_define('_JOMRES_tokyo_MEDIA_CENTRE_SRP_DESC', 'すべての画像はメディアセンターを通じてアップロードされます。このビデオでは,メインプロパティの画像,検索結果ページに表示される画像の一部,およびいくつかのスライドショー画像をアップロードします。');

jr_define('_JOMRES_tokyo_ADMIN_CPANEL', '管理者コントロールパネル');
jr_define('_JOMRES_tokyo_ADMIN_CPANEL_DESC', 'これは管理者エリアのデフォルトのランディングページです。さまざまなサイト統計の概要を表示し,システムに存在するプロパティ,完了したプロパティ,完了していて承認前のレビューを待っているプロパティを確認できます。 。プロパティが承認されると,プロパティマネージャーが公開できます。 ');

jr_define('_JOMRES_tokyo_ADMIN_PLUGIN_MANAGER', 'プラグインマネージャー,インストールと使用');
jr_define('_JOMRES_tokyo_ADMIN_PLUGIN_MANAGER_DESC', 'このビデオでは,プラグインマネージャーのインストール,プラグインのインストールとアンインストールなど,プラグインマネージャーの使用方法を示します。ライセンスキーがない場合は,サイトに保存するように求められます。マネージャーをインストールする前の構成。以前にプラグインマネージャーを使用したことがない場合,このリストは最初は空になります。この例では,すでにさまざまなプラグインがインストールされています。 ');

jr_define('_JOMRES_tokyo_ADMIN_PROPERTY_MANAGERS', 'プロパティマネージャー');
jr_define('_JOMRES_tokyo_ADMIN_PROPERTY_MANAGERS_DESC', 'プロパティマネージャーは,2つの方法のいずれかで追加されます。プロパティマネージャーは,自分でプロパティを作成するか（サイト構成で無効にできます),サイト管理者は既存のマネージャーを特定のプロパティに割り当てることができます。マネージャーは,所有するプロパティにのみアクセスできます。作成された,または割り当てられた。 ');

jr_define('_JOMRES_tokyo_ADMIN_ACCESS_CONTROL', 'アクセス制御');
jr_define('_JOMRES_tokyo_ADMIN_ACCESS_CONTROL_DESC', 'アクセス制御機能を使用して,メニューオプションを無効にしたり,特定のクラスのユーザーにのみ表示したり,完全に非表示にしたりできます。メニューバーに表示するメニューオプションがない場合は,は完全に消えるので,サイトの訪問者にオプションを表示させたくない場合は,たとえば,ログインしているユーザーにすべてのオプションを表示するように設定できます。');

jr_define('_JOMRES_tokyo_PROPERTY_TYPES', 'プロパティと部屋のタイプ');
jr_define('_JOMRES_tokyo_PROPERTY_TYPES_DESC', 'このビデオでは,2つの重要な概念を紹介します。1つはプロパティタイプと関連する部屋タイプの作成です。また,まだマネージャーではない登録ユーザーが独自のプロパティを作成して,マネージャー（ただし,作成したプロパティのみを構成できます)。プロパティタイプと部屋タイプはリンクされています。プロパティタイプを作成したら,部屋タイプを追加する必要があります。そうしないと,プロパティマネージャーがプロパティを構成しようとしたときに赤いエラーメッセージが表示されます。 ');



jr_define('_JOMRES_tokyo_UPLOADING_MAP_MARKERS', 'マップマーカーのアップロード');
jr_define('_JOMRES_tokyo_UPLOADING_MAP_MARKERS_DESC', 'メディアセンターを使用してマップマーカーをアップロードします。<ahref = "https://mapicons.mapsmarker.com/" target = "_blank">マーカーの優れたソースは,ここにあります。< / a>プロパティ機能,部屋機能,部屋タイプなどをアップロードする手順は同じです。 ');

jr_define('_JOMRES_tokyo_PROPERTY_FEATURES', 'プロパティ機能');
jr_define('_JOMRES_tokyo_PROPERTY_FEATURES_DESC', 'このビデオでは,プロパティフィーチャを作成し,それらの画像をアップロードする方法を紹介します。');

jr_define('_JOMRES_tokyo_SHORTCODES', 'ショートコード');
jr_define('_JOMRES_tokyo_SHORTCODES_DESC', 'ショートコードはJomresの非常に強力な機能です。原理はJoomlaとWordpressの両方で同じです。このビデオでは,ショートコードを表示する場所を示します（このリストはプラグインによって異なります)インストール済み)およびそれらの使用方法。記事またはモジュールのコードを使用できます。 ');
    
jr_define('_JOMRES_tokyo_LOGFILES', 'ログファイル');
jr_define('_JOMRES_tokyo_LOGFILES_DESC', 'このビデオでは,ログファイルの表示方法を説明します。システムの実行時に大量のログが発生します。本番モード（[サイトの構成]> [デバッグ])では,生成されるログが少なくなるため,新しい機能をテストする場合はサイトを開発に設定する必要があります。独自のログをJomresスクリプトに追加する場合は,<a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank">その方法に関するマニュアルページ。</a>ここでは,偽のエラーをスローし,ログファイルを表示します。サイトが開発に設定されているためです。は多くの情報です。通常は,エラーが発生して報告されたことを示すメッセージが表示されます。 ');

jr_define('_JOMRES_tokyo_TRANSLATIONS', 'ラベルおよびその他の文字列の翻訳');
jr_define('_JOMRES_tokyo_TRANSLATIONS_DESC', 'Jomresで言語文字列を翻訳する方法はいくつかあります。言語ファイルを編集することはできますが,アップグレードすると上書きされる可能性があります。代わりに,独自の組み込みの翻訳ツールを使用することをお勧めします。文字列が部屋のタイプの名前など,フォームに入力されたものである場合は,[ラベル編集]ページを使用できます。文字列が言語ファイルからのものである場合は,言語ファイル編集ツールを使用できます。ブラウザ検索ツールを使用して変更する文字列を見つけ,リンクをクリックして変更するだけです。これらの変更はデータベースに保存されるため,更新しても安全です。プロパティタイプごとに異なるラベルを付けることができるため,次のことができます。たとえば,ラベルを変更する前にページ上部の[言語コンテキスト]ドロップダウンを変更して,[新しいプロパティ]を[新しいキャンプサイト]に変更します。');

jr_define('_JOMRES_tokyo_ADMIN_ADD_PROPERTY', 'プロパティの追加');
jr_define('_JOMRES_tokyo_ADMIN_ADD_PROPERTY_DESC', '<p>この段階で,JomresはCMSにインストールされ,フロントエンドメニューに追加されています（またはWordpressでページを作成し,基本的なJomresショートコードを追加しました)。</ p>
<p>ここでは,まだJomresのプロパティマネージャーではない登録ユーザーが,新しいプロパティを作成し,いくつかの基本設定を構成して公開する方法を説明します。</ p>
<p>最後に,マネージャーがプロパティマネージャーとして自動的に設定されていることがわかりますが,構成できるのは独自のプロパティのみです。</ p>
<p> Wordpressのインターフェースは異なって見えますが,プロセスはJoomlaでもWordpressでもまったく同じです。</ p> ');

jr_define('_JOMRES_tokyo_ADMIN_PROPERTY_CATEGORIES', 'プロパティカテゴリ');
jr_define('_JOMRES_tokyo_ADMIN_PROPERTY_CATEGORIES_DESC', 'プロパティカテゴリは,プロパティマネージャがプロパティを特定のカテゴリに割り当てることができるシンプルな機能です。サイト管理者は,このビデオに示すように,カテゴリ内のすべてのプロパティを一覧表示するショートコードを作成できます。');

jr_define('_JOMRES_tokyo_ADMIN_COMPLETING_PROPERTY', 'プロパティを表示するサイト管理者');
jr_define('_JOMRES_tokyo_ADMIN_COMPLETING_PROPERTY_DESC', '<p>ここからプロパティを管理するのではなく,フロントエンドからのみプロパティを管理できますが,このリストには,承認待ちのプロパティ（機能が有効になっている場合)と,不完全です（たとえば,画像をアップロードしたり,価格を設定したりする必要があります)。プロパティ名をクリックすると,そのプロパティのダッシュボードに移動します。その後,ページ上部のガイドセクションを使用して,次の手順を確認できます。プロパティを完成させて公開するには,取る必要があります。</ p> ');
    
