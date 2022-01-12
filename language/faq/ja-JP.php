<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_FAQ', 'よくある質問');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'プロパティ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'プロパティを作成するにはどうすればよいですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', '[プロパティ]> [新しいプロパティ]をクリックして,新しいプロパティを追加します。');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', '自分のプロパティがゲストにどのように見えるかを確認するにはどうすればよいですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', '[プロパティ]> [プレビュー]をクリックして,プロパティがゲストにどのように表示されるかを確認します。');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', '部屋を追加するにはどうすればよいですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "部屋の追加方法は,料金編集モードによって異なります。通常の料金編集モードでは,料金設定時に部屋が自動的に追加されるため,部屋を追加する必要はありません。マイクロ管理または高度な料金編集モードの場合,[設定]> [部屋]で部屋を追加,編集,削除できます。部屋の機能を作成して,それらの部屋に割り当てることもできます。さらに,個々の画像をアップロードすることもできます。メディアセンターを使用する部屋。部屋を作成するときは,管理が容易になるため,実際の部屋がプロパティに反映されていることを確認する必要があります。 ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', '客室料金を設定するにはどうすればよいですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "これは料金編集モードによって異なります。通常の料金編集モード（[プロパティの構成]> [料金編集モード]タブ)を使用している場合は,部屋の数,価格,各部屋に収容できる人数と各予約に必要な人数の合計。このモードでは,今後10年間の客室料金を設定できます。<br/>詳細モードまたはマイクロ管理料金編集モードを使用している場合は,次のようになります。今後数年間,毎日の客室料金を設定できます。同じ部屋タイプに複数の料金を設定することもできます。たとえば,Bed＆Breakfastに1つ,Bed,Breakfast＆Evening食事に別の料金を設定できます。特に必要がない限り, ,常にMicromanageを使用することをお勧めします。Advancedは同じように機能しますが,異なる料金表の開始日と終了日が連続していることを確認するように注意する必要があります。 ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'オプションのエクストラを作成するにはどうすればよいですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "エクストラは予約に追加でき,[設定]> [エクストラ]で構成できます。これらはオプションまたは '強制'のいずれかです。つまり,ゲストは予約でそれらの選択を解除できません。さまざまな方法を提供できます。オプションの追加料金の請求方法,およびそれらが[プロパティの詳細]ページに表示されるかどうか。追加料金は,予約が特定の日付内にある場合にのみ表示されるため（たとえば,季節の果物の場合),次のことを確認する必要があります。有効な開始日と終了日を設定しました。オプションのエクスタシーを作成したら,メディアマネージャーからそれらの画像をアップロードできます。 ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'オンラインで支払いを行うにはどうすればよいですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "オンラインで支払いを行うには,ゲートウェイと呼ばれるオンライン支払いプロバイダーのアカウントが必要です。使用可能なゲートウェイを確認するには,[プロパティの構成]> [ゲートウェイ]タブに移動します。ゲートウェイの名前をクリックして,受け取ります。設定ページへ。 ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', '割引を提供できますか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "割引を提供できます。これにはさまざまな方法があります。顧客に代わって予約する場合は,予約フォームで独自のデポジットと予約の合計を設定できます。 ,[宿泊施設の合計を上書き]フィールドと[デポジットを上書き]フィールドを使用します（ゲストはこの機能を使用できません)。ゲストに割引を与える別の方法は,特定の日付の間のみ使用できるように構成できる割引クーポンを作成することです（有効from / to)または予約が特定の日付の間にある場合にのみ適用されます（予約はfrom / toに有効です)。この割引クーポンは,1人のゲストにのみ割り当てることができます。または,必要に応じてクーポンを印刷することもできます。印刷にはQRコードが含まれます。どのゲストが自分の電話にスキャンして,割引コードがすでに適用されている予約フォームに移動できるか。 ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', '予約');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', '[新規予約]をクリックすると,お問い合わせフォームが表示されます。なぜですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'オンラインで予約を行う前に,実際の物件にある各部屋タイプの価格（料金)を設定する必要があります。料金を作成すると,予約を取得できるようになります。 。 ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'ブラックブッキングとは？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "ブラックブッキングは,1つまたは複数の部屋をサービス停止にするために作成された予約です。ゲストとは関連付けられておらず,部屋の改修が必要な場合などに役立ちます。") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', '画像');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', '画像をアップロードするにはどうすればよいですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "画像をアップロードするには,[設定]> [メディアセンター]ページにアクセスする必要があります。このページにはいくつかのペインが表示されます。上部にいくつかのメモが表示され,その下にドロップダウンが表示されます。このドロップダウンでは,画像をアップロードするリソースを選択できます。<br/>右側には,[画像の追加],[リストのクリア],[すべてアップロード]の列があります。[画像の追加]をクリックして,デスクトップまたはモバイルデバイスからいくつかの画像を選択します。これを行うと,列がサムネイルのリストに変わります。ここから,リソース用に1つ以上の画像をアップロードできます。 ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "「メイン」イメージとは何ですか？");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'メイン画像は,検索結果とプロパティヘッダー（プロパティに関する情報を表示するページ上部の領域)に表示される画像です。プロパティを表示する画像を選択する必要があります。メイン画像をアップロードするには,左上のドロップダウンリストで[プロパティメイン画像]が選択されていることを確認してから,1つ以上の画像をアップロードします。複数の画像をアップロードすると,すべての画像が検索に使用されます。小さなスライドショーとして表示される結果ページ。 ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', '部屋の機能アイコンとは何ですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "部屋の機能は,MicromanageまたはAdvancedの料金編集モードのユーザーが作成できます。これらは1つ以上の部屋にリンクでき,予約フォームに表示されます。部屋の機能を作成したら,次のことができます。メディアセンターのドロップダウンで[部屋の機能]アイコンを最初に選択し,次に下に表示されるドロップダウンから部屋の機能の名前を選択して,その機能の画像をアップロードします。 ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', '部屋の画像をアップロードするにはどうすればよいですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', '部屋は,MicromanageまたはAdvancedの料金編集モードのユーザーが作成できます。1つ以上の部屋が作成されたら,Media Centerを介して部屋ごとに複数の画像をアップロードできます（後で部屋の名前/番号を選択します)ドロップダウンで[部屋の画像]を選択します。これらの画像は,[プレビュー]ページを表示し,[部屋]タブを選択して,[空き状況]リンクをクリックすると,スライドショーで表示できます。');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'スライドショー画像をアップロードするにはどうすればよいですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'スライドショーの画像は[プロパティの詳細（プレビュー)]ページの[今すぐ予約]ボタンの横に表示されます。');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'エクストラ画像をアップロードするにはどうすればよいですか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "部屋や部屋の機能と同様に,最初にエクストラを作成する必要があります。それが完了したら,上部のドロップダウンでエクストラを選択できます。それが完了したら,の名前を選択する必要があります。下のドロップダウンリストからエクストラ。名前を選択すると,そのエクストラの1つまたは複数の画像をアップロードできます。 ");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'ゲスト関連の何か');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'どうすれば何とかできますか？');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'You blahblahblah');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', '複数の言語で説明を保存するにはどうすればよいですか？');
    
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "複数の言語で説明を保存するには,まず[設定]> [プロパティの詳細]ページにアクセスします。プロパティの説明をそこに保存します。次に,サイトを表示している言語を変更します。次に[設定]に移動します。プロパティの詳細ページをもう一度表示し,詳細を再度保存します。したがって,サイトで英語とスペイン語（またはその他の)言語の両方を表示できる場合は,英語を選択し,英語で説明を入力して,[保存]をクリックします。次に,現在の言語を変更します。言語をスペイン語に変換してから,新しいスペイン語の説明を保存します。これは,そのページのすべての入力に対して機能します。 ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'このサイトの他のプロパティを変更できますか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'いいえ,できません。管理できるのは,作成した,またはプロパティマネージャーとして割り当てられたプロパティのみです。');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'このサイトの他のプロパティを変更できますか？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "はい,できます。あなたはスーパープロパティマネージャーであり,[プロパティのリスト]ページに表示されているすべてのプロパティを変更できます。");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'ゲストタイプとは/ 1人1泊あたりの変更方法');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "[設定]> [プロパティ構成]> [料金と通貨]タブで,1人1泊あたりの料金を設定するかどうかを決定できます。1人1泊あたりの料金を請求する場合は,1つ以上のゲストタイプを作成する必要があります。説明を与えるだけの単純なゲストタイプ（例：Persons)を作成することも,「大人」や「10歳未満の子供」などのいくつかの異なるゲストタイプを作成することもできます。 50％の割引の場合,「パーセンテージ」を「はい」に設定し,「差異」の値を50に設定します。客室には基本料金があります。この設定により,ゲストのタイプに基づいて客室の料金を調整できます。 ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', '部屋の機能とは？');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "部屋の特徴は,部屋を際立たせるものです。お茶やコーヒーの設備のようにシンプルなものにすることも,部屋を他の部屋よりも高くするものにすることもできます。 bay '。部屋の機能を作成したら,メディアセンターでその機能の画像をアップロードできます。これらの部屋の機能は,空室状況ページで表示できます。また,クラシックルームのリストスタイルを表示するようにプロパティを構成している場合は, （ゲストは予約したい部屋を正確に選択できます)次に,部屋の機能を使用して,予約フォームに表示されている部屋をフィルタリングできます。 ");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', '支払い');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "予約後に支払いゲートウェイが表示されません。");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "プロパティマネージャーとしてログインしている場合,自分で支払いを行わないため,支払いゲートウェイは表示されません。予約時にゲートウェイが表示されるのはマネージャー以外のユーザーのみです。");
    
