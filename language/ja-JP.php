<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
/**
 * @translator Jeff Graves <jg@winterkit.jp>
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'QUICK予約');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'プロフィル表示');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', '事業経営の設定');
jr_define('_JOMRES_COM_MR_BACK', '戻る');
jr_define('_JOMRES_COM_MR_YES', 'Yes');
jr_define('_JOMRES_COM_MR_NO', 'No');
jr_define('_JOMRES_COM_MR_NEWTARIFF', '新規料金プラン');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', '新規物件');
jr_define('_JOMRES_COM_MR_NEWGUEST', '新規顧客');
jr_define('_JOMRES_COM_MR_SAVE', '保存');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', '名');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'チェックイン');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'チェックアウト');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'ユーザー名');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'アクセス制限');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'ユーザーが変更されました');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', '予約一覧');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', '予約変更');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'チェックイン・チェックアウト');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', '顧客');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'リソース');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', '支払い');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', '名');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', '姓');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', '特別な要求');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', '注：特別な要求は、別当チャージが発生される場合があります。');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', '予約をキャンセル');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', '住所１');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', '住所２');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', '市町村');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', '〒');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', '電話番号');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', '携帯電話番号');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Email：');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'お客がチェックイン済みのため、予約をキャンセルできません。');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', '予約金：未払い');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'キャンセルを確認する');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', '予約がキャンセルされました');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'チェックインまでの日数');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', '予約タイプ');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', '予約不可');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', '受付');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'インターネット');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'リソース名');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'リソース');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', '階');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'バリアフリー？');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max人数');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'リソース・事業タイプ');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'リソース・事業タイプの説明');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'リソースの設備・アメニティー');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', '予約金：払い済み');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', '払い済みの予約金額');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', '支払いの残額');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', '予約金番号');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', '予約番号');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', '予約金');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', '予約金が保存されました。');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', '弊社のリソース');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'プロパティ名');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'タイプ');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', '顧客情報を編集する');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', '名');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', '姓');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', '住所１');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', '住所２');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', '市町村');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', '〒');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', '電話番号：');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', '携帯電話番号：');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', '選択して下さい');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', '宿泊数');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', '合計');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'プロパティ設定');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'リソース');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'アメニティ');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'タイプ');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'プロパティ');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'ホテルの設備・アメニティー');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'リソース');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', '種類');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', '部屋名');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', '数');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '階');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max人数');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'アメニティー');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'アイテムを編集する');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'アメニティー');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'アメニティーの説明');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'アメニティが追加されました。');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'アメニティが更新されました。');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'リソース・タイプ');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'リソース・タイプの省略');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'リソース（ビジネス）タイプの説明');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'リソースタイプが追加されました。');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'アイテムを編集する');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'プロパティ名');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', '住所');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', '市町村');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '都道府県');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '国');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', '〒');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Website');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'アメニティー');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'プロパティが更新されました。');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', '特徴・自己PR');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', '特徴・自己PR（概略）');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', '特徴・自己PR（フル）');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'プロパティの設備・アメニティーが更新されました。');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', '料金プラン');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', '料金プラン名');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', '説明');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', '有効開始日');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', '有効終了日');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', '１泊に付き');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Min宿泊数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Max宿泊数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min宿泊人数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max宿泊人数');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', '部屋タイプ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'PPPNを無視する');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', '週末を許可する');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', '項目を変更する');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', '項目を複製する');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', '料金プランが削除されました。');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', '料金プランを編集する');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', '予約が保存されました。');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'チェックイン受付');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'チェックアウト受付');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', '予約一覧');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'ダッシュボード');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', '顧客管理');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'プロパティ管理');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', '空室状況を確認する');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', '名');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', '姓');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', '住所１');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', '住所２');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', '市町村');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', '〒');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', '電話番号');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', '携帯電話番号');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', '検索条件に当てはまるリソースが見つかりません。');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'ご予約申請いただき、誠にありがとうございます。ダッブルブッキングを防ぐため、本予約は仮予約に過ぎず、予約確認を通知するメールが届くまで予約は確定していないことに改めてご了承下さい。');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'チェックイン受付');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'チェックインが完了されました。');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'チェックアウト');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', '追加チャージ');
jr_define('_JOMRES_COM_A_TARIFFS', '料金プラン・外貨');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'アプロード');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', '一人利用チャージ');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', '多人部屋の一人利用に追加チャージしたい場合、「YES」に設定して下さい。');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', '料金');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', '予約金を％で設定しますか?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', '予約金が予約料金のパーセントとして設定したい場合に『YES』、円として設定したい場合には『NO』を選択して下さい。');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', '予約金の設定');
jr_define('_JOMRES_COM_A_TARIFFS_PER', '/泊/人');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', ' /泊/人 で料金の場合には『YES』、/泊/室の場合には『NO』を選択して下さい。');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'サイズ');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'イメージのmaxファイルサイズ　(KB)');
jr_define('_JOMRES_FRONT_MR_BOOKED', '対象リソース');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', '予約の詳細');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', '確認通知書を印刷する');
jr_define('_JOMRES_COM_INVOICE_TITLE', '請求書を印刷する');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', '宿泊数：');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', '１泊に付き:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', '合計');
jr_define('_JOMRES_COM_INVOICE_PRINT', '請求書を印刷する');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'サービスチャージを追加する');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'サービス内容');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', '料金');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', '追加料金：');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'アイテムが伝票に追加されました。');
jr_define('_JOMRES_UPLOAD_IMAGE', '写真をアプロード');
jr_define('_JOMRES_FILE_UPLOAD', 'アイルアプロード');
jr_define('_JOMRES_COM_A_ODDS', '雑');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'ミニコンポーネントcalls一覧を表示する');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Jomresが実行した際に使われたミニコンポーネントを画面の下部に表示したい場合、「YES」に設定する。「YES」に設定するとinternal redirect機能を無効されます。どのミニコンポーネントがどのタスクを実行しているかがわかるように役に立ちます。');
jr_define('_JOMRES_FILE_DELETE', 'イメージ削除');
jr_define('_JOMRES_FILE_DELETED', 'イメージが削除されました');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', '部屋削除');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', '予約されているため、指定の部屋を削除できませんでした。予約をキャンセルしてからもう一度削除してください。');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', '部屋が削除されました。');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', '部屋アメニティ削除');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', '部屋に適応されているため、指定のアメニティーを削除できませんでした。設定を外してからもう一度削除して下さい。');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', '部屋のアメニティーが削除されました。');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', '設備・プロパティ アメニティ削除');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'プロパティに適応されているため、指定の設備・アメニティーを削除できませんでした。設定を外してからもう一度削除して下さい。');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'プロパティの設備・アメニティーが削除されました。');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', '部屋・プロパティ タイプ削除');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', '部屋・プロパティ タイプが削除されました。');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'プロパティ 削除');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'プロパティが削除されました。');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'このプロパティを消却する権力がありません。');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'サイズが自動的に変更された後のイメージ幅');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', '地図');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'ホテルについて');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'チェックインの時間');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', '周辺のアクティビティー');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', '車でのアクセス');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', '空港');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'その他の交通');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'ポリシーと免責事項');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', '住所');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'オンライン予約ができます。');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', '顧客がオンラインで予約できるように、「YES」を選択して下さい。');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', '定期予約');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', '定期予約を設定したい場合には、「YES」を選択して下さい。「NO」の場合、「指定のチェックイン曜日」も「NO」に設定するケースがほとんど。');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', '固定期間:');
jr_define('_JOMRES_COM_A_BOOKING', '部屋予約');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', '最大の延長回数（例：７日の予約期間×３回＝２１日）');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'アパート・シャレー・コテージですか?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', '予約の確認');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', '予約の確定');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', '月曜日');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', '火曜日');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', '水曜日');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', '木曜日');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', '金曜日');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', '土曜日');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', '日曜日');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', '月');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', '火');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', '水');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', '木');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', '金');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', '土');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', '日');
jr_define('_JOMRES_COM_A_AVLCAL', '空室状況カレンダー');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', '当日のフォント色');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', '表示月内のフォント色');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', '表示月外のフォント色');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', '予約可能のセル色');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', '表示月外のセル色');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', '予約不可のセル色');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', '仮予約のセル色');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', '過去のセル色');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', '満室・予約不能');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', '予約受付中');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', '仮予約');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', '固定のチェックイン日');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', '固定のチェックイン日のあるプロパティの予約のみに適応します。固定のチェックイン日を選択してください。');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', '固定のチェックイン日');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', '宿泊日数');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', '空室カレンダーをインラインで表示しますか?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', '空室カレンダーを表したい場合、「YES」を選択して下さい。');
jr_define('_JOMRES_FRONT_AVAILABILITY', '空室状況');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', '空室の日にクリックすると予約フォームが表示されます。');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'ブラック予約');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'ブラック予約の新規設定');
jr_define('_JOMRES_FRONT_DELETEGUEST', '顧客を消却する');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', '顧客が消却されました。');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'この顧客は、他のホテルまたはビジネスにて予約があるため、消却できませんでした。');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO', 'こんにちは');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS', '予約いただき誠にありがとうございます。');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY', '予約の概要は以下です。');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS', '予約等についての質問があれば、気軽に連絡下さい。');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE', 'ホテルの電話番号はこちら：');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL', 'ホテルのメールアドはこちらへ：');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'どちらでも');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'カレンダー出力フォーマット');
jr_define('_JOMRES_COM_CALENDARINPUT', 'カレンダーの入力フォーマット');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Jomresでのカレンダーの入力フォーマットを変更できます。');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', '定期予約にて休日を設定できます。');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', '休日の期間');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', '公開されている');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'オーディット履歴');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', '日付');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'ユーザー (ユーザー名)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', '日付でフィルターする');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'ステータス');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', '残りのチェックイン');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', '本日チェックイン');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', '宿泊中');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', '本日チェックアウト');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', '遅滞チェックアウト');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', '未チェックイン');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'リソースが作成されました。');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'リソースが更新されました。');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'リソースが消却されました。');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'リソース（部屋）のアメニティが作成されました。');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'リソース（部屋）のアメニティが更新されました。');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'リソース（部屋）のアメニティが削除されました。');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'プロパティが作成されました。');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'プロパティが更新されました。');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'プロパティが消却されました。');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'プロパティの設定が変更されました。');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'プロパティが公開されました。');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', '料金プランが作成されました。');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', '料金プランが変更されました。');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'サービス料が追加されました。');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', '顧客がチェックインされた。');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', '予約金が入力された。');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', '顧客が新規に作成された。');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', '顧客が変更されました。');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'リソース（部屋）が予約されました。');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', '追加オプションが作成されました。');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', '追加オプションが変更されました。');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', '追加オプションが削除されました。');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', '追加オプションが公開されました。');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'ブラック予約・簡易予約が追加されました。');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'ブラック予約が削除されました。');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', '追加オプション');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', '内容の説明');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', '追加オプション名');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', '追加オプションの価格');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', '追加オプションが更新されました。');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', '追加オプションの変更');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', '追加オプションが消却されました。');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', '追加オプション管理');
jr_define('_JOMRES_COM_A_EXTRAS', '予約時に追加オプションを表示しますか?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', '追加オプションを表示されたい場合には、「YES」に設定してください。');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', '追加オプションのHELP');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'ブラック期間の開始日');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'ブラック期間の終了日');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'ブラック予約');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'エラー：選択されたリソースのいずれかが空いていませんでした。');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'ブラック予約（予約不可期間）を適応されるリソース（部屋）');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'ブラック予約は設定されていません');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', '評価の星数');
jr_define('_JOMRES_COM_A_RESET', 'Reset');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', '予約がキャンセルされました。');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'ここで検索');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', '通貨シンボル');
jr_define('_JOMRES_COM_A_CURRENCYCODE', '通貨コード');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', '詳細情報');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', '事前予約を制限しますか？');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', '予約をチェックインする日より何日以内に制限したい場合には、「YES」を選択し、下記のフィールドで日数を設定してください。ユーザーが設定された事前予約制限より前に予約する場合には、チェックイン日が本日に戻されます。');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', '事前予約の最大日数：');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'リソース（部屋）税');
jr_define('_JOMRES_COM_A_ROOMTAX', 'リソース（部屋）税');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', '固定の税額');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', '同税率');
jr_define('_JOMRES_COM_A_EUROTAX', 'ユーロー税');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'ユーロー税率');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', '全記録をアーカイブする');
jr_define('_JOMRES_FRONT_TARIFFS', '料金プラン');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', '料金プラン名');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', '料金プランの説明');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', '部屋タイプ');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', '有効開始日');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', '有効終了日');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', '一人一泊に付き');
jr_define('_JOMRES_FRONT_TARIFFS_PN', '一泊に付き');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', '週末を排除する');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Min宿泊数');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Max宿泊数');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min人数');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max人数');
jr_define('_JOMRES_FRONT_PREVIEW', 'プレビュー');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Editing Mode ON?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'カスタム表現が作成・変更されました。');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', '表現を編集する');
jr_define('_JOMRES_FRONT_PTYPE', '事業タイプ');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', '事業タイプ');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', '事業タイプを編集する');
jr_define('_JOMRES_COM_PTYPES_PTYPE', '事業タイプ');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', '事業タイプの説明');
jr_define('_JOMRES_COM_PTYPES_SAVED', '事業タイプが保存されました。');
jr_define('_JOMRES_COM_PTYPES_DELETED', '事業タイプが削除されました。');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', '支払残高');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', '追加料金なし');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', '予約金');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', '合計');
jr_define('_JOMRES_COM_CHARGING_CONFIG', '予約時の支払額');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', '予約時には、適応される支払額を設定できます。予約時には、予約金(deposit)のみ、又は予約の全額(Full amount)を選択できます。');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'カレンダーで表示される月数');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'リソースの空室状況のカレンダーでは、何ヶ月を表示しますか？');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'ペイメント・ゲートウエー');
jr_define('_JOMRES_COM_A_CANCEL', 'キャンセル');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'ブラック予約を適応する期間の開始日と終了日を選択し、「適応する」のボタンをクリックしてください。 <br/> 
<br/> 
予約不能にされたいリソース（部屋）を選択してください。 <br>チェックマークが表示されないリソース（部屋）には、既存の予約が満了またはキャンセルされるまで、ブラック予約を設けることはできません。<br/>');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '操作されず時間切れになりましたため、ログアウトされました。ログインしてから再び実行してしてください。');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', '事由');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'ペイメント・ゲートウエーを利用しますか?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', '支払い方法を選択して下さい。');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'ゲートウエーが有効されていますか？');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'プラグイン設定が変更されました。');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'プラグイン設定が挿入されました。');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'ホテルのホームページを見る');
jr_define('_JOMRES_COM_A_GALLERYLINK', '外部リンク');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', '御社のHPへのリンクを入力して下さい。');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'クレジットカードの変更');
jr_define('_JOMRES_COM_A_EDITICON', 'アイコンのサイズの変更');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'スライドショー');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'スライドショーへのリンクを表示しますか?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'スライドショーをインラインで表示しますか?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'スライドショー');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', '料金プランへのリンクを表示しますか?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'ポップアプを許可しますか?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'スライドショー用の写真アプロード');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO', 'ホテルの写真をアプロードするため、このフォームを利用して下さい。<br/>同じファイル名のイメージがある場合、上書きされますのでご注意下さい。部屋、ホテルのヘッダーの写真・イメージは「ホテル管理」タブで行ってください。<br/>注意：ここでアップロードされるイメージが /jomres/uploadedimages/*business_uid* のホルダーに保存されます。ホルダーが存在しない場合には、環境設定に特定パースが設定されていない限り、新規に作成されます。');
jr_define('_JOMRES_A_TABS_MISC', 'その他');
jr_define('_JOMRES_A', 'サイトの環境設定');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'グローバル事業アメニティーを利用する');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', '本アメニティにイメージをサインするため、まずはそのイメージを /jomres/uploadedimages/pfeatures/ ホルダーにアプロードしてください。');
jr_define('_JOMRES_A_ICON', 'アイコン');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', '検索プラグインを選択してください。');
jr_define('_JOMRES_FRONT_NORESULTS', '一致する結果がありません。');
jr_define('_JOMRES_AREYOUSURE', '進んでもよろしいですか?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', '部屋を予約する');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', '本プロパティを予約する');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', '料金プランをインラインで表示しますか?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', '住所：');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', '詳細情報');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'リソースと空室状況');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', '住所をリンクの下に表示する');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'ビジネス詳細を表示する');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'リソースと空室状況を本リンクの下に表示する');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', '固定金額の料金プラン');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', '平均方式の料金プラン');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', '料金プラン方式を選択してください。');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', '料金プランを２方式から選択できます。「固定金額の料金プラン」方式は、顧客がいくつかの料金プラン（素泊まり、一泊二食付き等）から選択し、滞在中に毎日に同金額が発生される方式です。「平均方式」は、日により異なる料金プランを設定する場合に使用し、顧客の指定期間中の料金の平均が計算され表示されます。');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'チェックアウトの日付入力を表示しますか？');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'チェックアウトの日付入力ボックスを表示しない場合「NO」に設定してください。チェックアウト日はチェックイン日の翌日とされるので、「NO」の利用に注意ください。');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', '説明の長さ制限');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', '事業・プロパティの説明が表示される際、表示文字数を制限します。.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Used date() format style?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', '公開する');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', '非公開する');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'グローバル事業タイプ・リソースタイプを利用しますか');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', '本事業タイプ・リソースタイプにイメージを指定する前、事業タイプ・リソースタイプのイメージを /images/stories/jomres/rmtypes/ ホルダーにアプロードする必要がある。');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', '入力エラー発生時のBGカラー');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', '予約フォームでのデフォルト国');
jr_define('_JOMRES_JAVASCRIPT_', '★は必須項目');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'ユーザーが事業を自分で登録できるようにしますか?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'ユーザーがサイトアドミンの許可が必要なく事業を登録できるようにしたい場合、「YES」に設定してください。');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', '必須項目は茶色にハイライトされています。');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', '事業・プロパティが登録されました。');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'カレンダーを年始から表示しますか?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', '空室状況のカレンダーは年始から表示されます。');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'リソース（部屋）数');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'プロパティ情報に戻る');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'リソース・ビジネスの種類');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'ランドム検索制限');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', '料金プラン一覧で為替換算リンクを表示しますか?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', '為替レート');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'ユーザーにHTMLでも編集できるようにしますか。?');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', '予約の際にこのフォームをご利用ください。チェックイン日付、泊数、人数等で検索して、空室ありのホテル・部屋から選べます。好ましいホテル・部屋をクリックすると予約に追加されます。その次、追加オプションを付け加え、住所等を入力してください。予約に必要な情報が入力したら、予約の「提出」ボタンが表示され、クリックすると提出できる。');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'このフォームで予約してください。予約の確認・変更、追加オプションの指定、住所等の記入等、必須項目が記入された上、「提出」のボタンが表示されます。');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', '予約の詳細');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', '予約条件を設定して下さい');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', '空室状況');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'リソースを選択して下さい。');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'ビジネスの現状をここで確認');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'サービス');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'サービス');
jr_define('_JOMRES_COM_PERDAY', '１泊に付き');
jr_define('_JOMRES_AJAXFORM_ADDRESS', '顧客情報');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', '詳細を記入してください。（★は必須項目）');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', '利用可能なリソース');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', '選択したリソース');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '最初のチェックイン可能な日付：');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', '１泊に付き：');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', '部屋の小計：');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', '追加オプション：');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', '消費税：');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', '割引：');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', '合計 (税込)：');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', '顧客人数：');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', '追加する');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', '外す');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', '顧客タイプ');
jr_define('_JOMRES_VARIANCES_TYPE', 'タイプ');
jr_define('_JOMRES_VARIANCES_TYPE_TT', '例えば：５歳未満、学生');
jr_define('_JOMRES_VARIANCES_NOTES', '備考');
jr_define('_JOMRES_VARIANCES_NOTES_TT', '例の客タイプについての注意書き、メモなど');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Max人数');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', '予約フォームで、予約に付き、例の客タイプの選択可能な最大人数');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', '％？');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'YESの場合、指定のプレミアム・ディスカウントは％としてベース料金に適応される（割減・割増）。「NO」の場合、￥として適応される。');
jr_define('_JOMRES_VARIANCES_POSNEG', 'プレミアム？');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', '「YES」の場合、設定値はプレミアムとして適応される。「NO」の場合、設定値がディスカウントとして適応される。');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'プレミアム・ディスカウント');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'プレミアムもしくはディスカウントの設定値');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', '顧客タイプの順番が変更されました。');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', '顧客タイプが削除されました。');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', '顧客タイプが作成されました。');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', '顧客タイプを変更する');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', '顧客タイプが変更されました。');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'プロパティ情報のページでリソース（部屋）一覧へのリンクを表示しますか?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', '空室状況カレンダーのみ表示しますか?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', '事業情報ページでは、事業のヘッダーと詳細を表示せずに空室状況カレンダーのみ表示したい場合、「YES」に設定してください。シングル・リソース・プロパティ（シャレー等）を貸し切る事業のみに適している。');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'MIN宿泊数');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', '予約フォームでは、チェックインとチェックアウトの間の最低の必須宿泊数を設定してください。');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', '予約フォームでのリソース一覧で部屋番号を表示する');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', '予約フォームでのリソース一覧で部屋名を表示する');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', '予約フォームでのリソース一覧で料金プランを表示する');
jr_define('_JOMRES_ORDER', 'Order');
jr_define('_JOMRES_REQUIREDFIELDS', '必須');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'チェックイン前の日数');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', '本日（予約日）からチェックインまでの最低日数');
jr_define('_JOMRES_DTV', 'Date type variations');
jr_define('_JOMRES_DTV_DOW', '曜日');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', '顧客タイプのデフォルト');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', '「顧客タイプ」の機能を利用する場合、予約フォームで初客の顧客タイプのデフォールトを設定してください。');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'オンライン予約を登録ユーザーに制限しますか?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'オンライン予約のご利用はWinterkit.jpの登録ユーザーに限られています。登録はこちらへ。');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', '既存予約へのリンクのフォント色');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', '週末のボーダー');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', '予約済み');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'ブラック予約');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', '予約金は端数を切り上げますか?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', '予約金を適応しますか?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', '料金プランは週別で設定しますか?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', '料金プランは、「1泊当たり」もしくは「1週間当たり」で設定できます。「1週間当たり」にしたい場合「YES」を選択してください。');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '１週間に付き');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', '固定チェックインの間の日数：');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', '固定のチェックインが適応されている場合、選択リストに表示される日付の数のことです。（予約済み等により）予約は不可能な日付は表示されないことと、同数の過去の日付も含まれるため表示される日付の数は指定の日付の数より倍になることに注意ください。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'チェックイン日に誤りがあります。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'チェックアウト日に誤りがあります。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', '指定の予約期間の日数は不足しています。最少の宿泊日数は：');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', '指定された予約期間は：');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', '顧客タイプの変形に誤りがあります');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', '顧客の人数等を選択');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', '料金設定に人数が多すぎます。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', '指定のリソース数が顧客数より多いため、入力は無効です。リソースにクリックすると削除されます。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', '指定の人数がベッド数より多いため、入力は無効です。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', '指定のリソース数が人数に不足しています。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'リソースを選択して下さい。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', '名を記入して下さい。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', '姓を記入して下さい。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', '住所１を記入して下さい。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', '住所２を記入して下さい。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', '市町村を記入して下さい。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', '都道府県を指定して下さい。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', '郵便番号を記入して下さい。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', '国を記入して下さい。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', '電話番号を入力してください。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', '携帯電話番号を入力してください。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'メールアドを記入して下さい');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', '<b>空き部屋あります！</b>');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'リソースを指定して下さい。');
jr_define('_JOMRES_BOOKING_NUMBER', '予約番号');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', '「予約可能」のメッセージボックスのBG');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'テンプレート変数をダンプしますか?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', '百分率ですか？');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', '顧客一人分の清算では、指定数字がパーセンテージの場合には「YES」にし、固定金額の場合には「NO」に設定してください。');
jr_define('_JOMRES_COM_LIMITROOMSLIST', '表示リソース数の制限：');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', '予約フォームで表示されるリソース（部屋）・料金プランの数を制限したい場合、その数を入力してください。「０」の場合には「制限なし」と見なされます。');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', '満室です。');
jr_define('_JOMRES_BOOKITNOW', '予約する');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', '編集モードをグローバルにしますか?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'この設定に注意下さい。「YES」に設定する場合、編集モードが全ての事業、全てのプロパティ タイプ等のカスタム表現に及ばれます。');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', '通貨をグローバルにしますか?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', '全ての事業が統一の指定の通貨を利用させます (e.g. ￥)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'グローバル通貨');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'コンポーネントが囲まれています');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'モジュールやヘッダーを見えないように囲む場合には、「YES」に設定してください。');
jr_define('_JOMRES_COM_WEEKENDONLY', '週末のみ');
jr_define('_JOMRES_COM_WEEKENDDAYS', '週末の曜日');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', '週末を定義するため、曜日を指定できます。週末に適応できる料金プランとできない料金プランは、本設定を自動的に認識され生成されるリソース一覧に反映されます。');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', '国を選択してから、ホテル情報を入力して下さい。');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'ビジネス情報の変更を保存してから写真をアプロードして下さい。');
jr_define('_JOMRES_TARIFFSFROM', '開始価格');
jr_define('_JOMRES_SEARCH_ALL', '全て');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', '国の検索');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', '都道府県の検索');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', '市町村の検索');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', '施設・アメニティ検索');
jr_define('_JOMRES_SEARCH_BUTTON', '検索');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'キーワードを入力して検索する');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'キーワード：');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'チェックイン日・チェックアウト日から検索すると、予約可能なビジネスは表示されます。');
jr_define('_JOMRES_SEARCH_PTYPES', '事業タイプ一覧');
jr_define('_JOMRES_SEARCH_RTYPES', 'リソースチアプ一覧');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'デフォルト');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', '商号（ビジネス名）');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', '都道府県');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', '市町村');
jr_define('_JOMRES_SORTORDER_STARS', '星');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'プロパティ情報');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', '予約フォーム');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', '住所を更新する');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', '部屋の空室状況が再確認されます。<br/>（選択はリセットされます）');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', '空室状況を再確認中');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', '追加オプションを変更中');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', '部屋の選択を変更中');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', '住所を変更中');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', '住所の入力が無効である。もう一度入力してください。');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'リソースのフォト');
jr_define('_JOMRES_CURRENCYFORMAT', '通貨フォーマット');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', '検索オプション');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'ロッグ');
jr_define('JOMRES_COM_A_MESSAGE', 'メッセージ');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', '簡易');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', '標準');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'ミクロマネージ');
jr_define('JOMRES_COM_A_TARIFFMODE', '料金プラン設定のモード');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', '注意：料金プランのタイプの切り替えはデータを失う可能性があります。以下の説明に参照してください。
<br/><br/>
料金プランの設定環境モードは３つから選択できます。<br/>
「簡易モード」：各リソースタイプに当たり１つの料金プランを設定し、今後１０年に有効となる環境です。<br/>
「ミクロマネージモード」：各事業タイプの各リソースの各日（３６５日）かわる料金プランが作成できる環境です。<br/>
「標準モード」：１リソースに当たり、複数の料金プランの選択肢を提供できる環境です。<br/>
<br/>
貴社のプロパティマネージメント考慮に最も効率だる料金プランの設定モードを選択できる環境です。<br/>
「簡易モード」は、リソース（部屋）と料金プランをリソース・事業タイプに他所参照し、リソース（部屋）と料金プランをワンページで設定できるので最も分かりやすい設定環境です。<br/>
「ミクロマネージモード」は、いくつかの料金プランの間で他所参照することにより、数多くの料金プランを作成せずに、料金をより簡単に日別に変動させる設定環境です。細かい料金プランが可能となりますが、顧客があるリソースに複数の料金プランから選ぶことができなくなります。<br/>
「標準モード」では、リソースタイプが軸です。リソースタイプは、リソースにアサインするが、料金プランもリソースタイプにアサインするがため、複数の料金プランを一定のリソースに適応できる設定環境です。例えば、「ダッブル」というリソースタイプに「素泊まり」と「1泊２食付き」等の料金プランを関連させることができます。設定が他のモードより機能性が高いが、細やかな気配りが必要です。特にリソース⇄事業・リソースタイプと料金プラン⇄事業・リソースタイプとの関連性に、そして料金プランの有効期間に誤りがないように注意が必要です。<br/>
<br/>
簡易モードとミクロマネージモードが特定のリソースと料金プランの他所参照情報（関連づけ）が必要とされるため、環境設定モードを切り替える際に料金プランと他所参照データがリセットされる場合があります。<br/>
<br/>
簡易モード→標準モード：問題なし。既存の料金プランはそのまま残されます。<br/>
簡易モード→ミクロマネージモード：既存の料金プランは全て削除されます。<br/>
標準モード→簡易モード：既存の料金プランは全て削除されます。<br/>
標準モード→ミクロマネージモード：既存の料金プランは全て削除されます。<br/>
ミクロマネージモード→標準モード： 既存の料金プランはそのままのこされますが、料金プランの他所参照情報は削除されます。<br/>
ミクロマネージモード→簡易：既存の料金プランとその他所参照情報は削除されます。<br/>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'ビジネス情報のページにリソースを表示しますか?');
jr_define('JOMRES_PROPERTYTYPE', 'プロパティ タイプ');
jr_define('JOMRES_MAXPEOPLEINROOM', 'MAX利用人数');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'MAX予約人数');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'メモの追加');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', '備考の編集');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', '備考の削除');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', '備考の表示');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', '新規ノートが追加されました。');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'ノートが変更されました');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'ノートが削除されました');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', '予約一覧');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', '予約の履歴');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', '予約を表示');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', '付箋付きホテルを表示する');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'お気に入りはありません');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', '事業タイプ');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'ダイナミック価格付け');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', '有効');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', '本プラグインは、料金を需要・供給にあわせてダイナミックに変動させる機能を付け加えます。');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', '多くの事業は、予約の問い合わせ日には、当該の部屋の料金をその日の空室状況により変動させるダイナミックな料金設定を提供したいです。リソース（部屋）または事業の需要が薄い時期には、そのリソースの儒教を高めるためにその料金を自動的に引き下げします。<br/>本プラグインを有効にし設定することにより、ユーザーの検索条件（日、タイプ等）に合致する部屋の空室数により料金が自動的に計算され、表示されます。<br/>「価格変更限界の日数」というのは、チェックインまで価格変更が適応される有効日数を定義するものです。「価格変更限界の予約状況」というのは、割引が適応されるリソースの予約状況（全リソース中、予約済みの割合）の最大限を定義するものです。複数のリソースが予約される場合には、予約割合が増加しても、当初の割引率が全リソースに適応されるのでご注意ください。');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', '価格変動限界の日数　（予約当日とチェックインとの間の日数）');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', '予約済みリソースが１０％以下');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', '予約済みリソースが２５％以下');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', '予約済みリソースが５０％以下');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', '予約済みリソースが７５％以下');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', '割引率（％）');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', '割引前の価格：');
jr_define('_JOMCOMP_WISEPRICE_TO', '割引後の価格：');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', 'ダイナミック割引は適応されていません。');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google Maps のAPIキー');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'ギリギリ割');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', '有効?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'チェックインまで間もなくぎりぎり割引を提供する場合には「YES」に設定してください。');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'ギリギリ限界日数');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', '予約がチェックインまでギリギリ限界日数以内である場合には、ギリギリ割が適応されます。');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'ギリギリ割引率');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', '％');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', '割引があなたの予約に適応されました！');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', '宿泊料金のディスカウント：');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', '');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '%ギリギリ割SPー右記前の宿泊はお得！');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '予（節）約！');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '%以上のギリギリ期割引SPー宿泊日を右記前に早めればお得！');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', '料金プラン（微調整可）');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', '事業情報・料金プランのポップアップに料金プランの詳細を表示する場合には、「YES」に設定してください。');
jr_define('JOMRES_COM_A_MINIMALCONFIG', '設定環境を簡易にしますか');
jr_define('_JOMCOMP_AMEND', '予約変更：プロパティ');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', '新規プロパティを選択');
jr_define('_JOMCOMP_AMEND_HEADER', '初期契約');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', '予約金（払い済み）');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', '予約金（未払い）');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', '合計の指定');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', '予約金の指定');
jr_define('_JRPORTAL_CANCEL', 'キャンセル');
jr_define('_JRPORTAL_CPANEL', 'コントロール・パネル');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'デフォールトのコミッション率');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', '事業・プロパティにコミッション率の設定が忘れた場合、自動的に適応されるコミッションの率を指定してください。');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'コミッション率一覧');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'コミッション率');
jr_define('_JRPORTAL_CRATE_TITLE', '名称');
jr_define('_JRPORTAL_CRATE_TYPE', 'タイプ');
jr_define('_JRPORTAL_CRATE_VALUE', '率');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', '通貨コード');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', '登録プロパティ一覧');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'プロパティ名');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', '住所');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', '赤BGの事業・プロパティは、コミッション率が設定されていない。');
jr_define('_JRPORTAL_STATS_PATETITLE', '統計データ');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'コミッション率');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', '予約一覧');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'プロパティID');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', '請求書ID');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', '予約合計');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'アーカイブ日');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Description');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', '唯一の登録ビッジネスであるため、削除できません。公開しない場合には、「非公開」に変更してください。');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', '宿泊料金の合計');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', '/泊');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', '/部屋');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'オプションの合計（税込）');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', '料金サマリー');
jr_define('_JOMRES_CONFIRMATION_ALERT', '契約の制約条件を十分に理解し、それに同意します。');
jr_define('_JOMRES_CONFIRMATION_HEADER', '予約の概要は以下です。必ず確認して下さい。<br /> 変更が必要な場合、「予約変更」のボタンをクリックして下さい。');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', '変更が必要な場合、ここにクリックして下さい。');
jr_define('_JOMRES_CONFIRMATION_AMEND', '予約変更');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', '特別な要求に、以下の空欄をご利用下さい。');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', '上記の記載情報は正当及び事実であることを承認します。制約条件に同意します。');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', '／人／泊');
jr_define('_PN_OF', 'of');
jr_define('_PN_START', '先頭へ');
jr_define('_PN_PREVIOUS', '前へ');
jr_define('_PN_NEXT', '次へ');
jr_define('_PN_END', '後尾へ');
jr_define('_PN_RESULTS', '結果');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', '右記の事業者へのメセージを記入して下さい。');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'ホテルに連絡する');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', '問い合わせの送り先：');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', '問い合わせありがとうございます。メセージが送信されました。事業主は直接に回答します。');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', '用件');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'お問い合わせ');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', '以下のリストでの部屋をクリックし選択してください。');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'MIN選択リソースの数');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', '予約で「MIN選択リソースの数」が満たした場合、特定の料金プランもしくは部屋タイプが有効になる設定です。この設定により、予約がある程度の規模を超えた場合、特定の料金プラン等を提供することができます。');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'MAX選択リソースの数');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', '予約で「MAX選択リソースの数」が超えた場合、特定の料金プランもしくは部屋タイプが無効になる設定です。この設定により、予約がある程度の規模を超えた場合、特定の料金プラン等をなくすことができます。');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', '注：総合設定環境で固定シングル・パーソン・サプリメント（SPS）を「YES」に設定した場合、ここで設定するSPSは適応されません。ここで設定するSPSは、固定SPSの追加ではなく、代替的設定方法です。');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', '予約なし');
jr_define('_JOMRES_AVLCAL_QUARTER', '25％予約済み');
jr_define('_JOMRES_AVLCAL_HALF', '50%予約済み');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', '75%予約済み');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', '満室');
jr_define('_JOMRES_COM_SEF_NOTINSTALLED', "（Joomla 1.5 のみ）Either she404sef is not installed, or you haven't yet copied /home/winterki/public_html/jomres/libraries/jomres/cms_specific/joomla15/other_component_files/sh404sef/com_jomres.php to /home/winterki/public_html/components/com_sh404sef/sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. <br/> Note, if you are also using Joomfish v2 you may need to ensure that GZIP is switched off in Global Configuration.");
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', '１週間に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', '１日に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', '１予約に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', '１人１予約に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', '１人１日に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', '1人１週間に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', '●●日に付き (min日数)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', '／日数　×　選定部屋数');
jr_define('_JOMRES_REGISTRYREBUILD', 'ミニコンポーネント・レジストリを再構築');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'プラグイン・マネジャーを利用する際、プラグインを追加する際、及びプラグインを削除する際にJomresのプラグインレジストリが自動的に再構築されます。ただし、例のプラグイン関連の機能を利用できない場合には、手動的に再構築できます。プラグイン・マネジャーを利用せずにミニコンポーネントをインストールした際にこの機能を利用し手動的に追加する必要があります。');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'レジストリが再構築されました。');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'ミニコンポーネントのレジストリを再構築した際にエラーが発生されました。Jomresのエラーロッグに参照して下さい。');
jr_define('_JOMRES_SEARCH_PRICERANGES', '予算');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', '予約はありません。');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'プロパティ タイプを変更する');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'プロパティ タイプを選択する');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', '問い合わせ内容...');
jr_define('_JOMRES_COM_A_LISTLIMIT', '事業・プロパティ一覧での表示物件数');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', '検索結果のページでは何件を表示することです');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', '統合検索機能');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', '');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', '統合検索を有効にしますか?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', '有効する場合には、事業・プロパティ一覧を表示する全てのJomresコールは、検索オプションも表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', '欄を利用');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'リンクとして定義した検索オプションがある場合、欄で表示されます。(IE br がリンクの尾に追加されます)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'コンボドロップダウン選択で地方を検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', '国・地方・市町村を検索できるドロップダウンボックスが表示されます。本機能を利用する際に以下の地方・市町村検索を利用しないことを進めます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'プロパティ名で検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'プロパティ名で検索できるインプットボックスが表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'プロパティ名をドロップダウンとして表示しますか?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'リンクとして表にしたい場合、「NO」に設定してください。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', '地方・市町村で検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', '地方・市町村を検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'ドロップダウンとして表示しますか?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'リンクとして表にしたい場合、「NO」に設定してください。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', '事業・プロパティ タイプで検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', '事業またはプポティタイプを検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'ドロップダウンとして表示しますか?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'リンクの一覧として表にしたい場合、「NO」に設定してください。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'リソース・部屋タイプで検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'リソース（部屋）タイプを検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'ドロップダウンとして表示しますか?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'リンクの一覧として表にしたい場合、「NO」に設定してください。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'アメニティで検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'アメニティを検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'ドロップダウンとして表示しますか?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'イメージ・tooltipとチェックボクスとして表にしたい場合、「NO」に設定してください。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'プロパティ説明
で検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'プロパティの説明を検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', '空室状況で検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', '空室状況で検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', '金額で検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', '金額で検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', '金額の増分原価');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomresは、ここで設定される金額の増分原価と登録の料金プランから妥当なリストを自動的に作成し表示します。');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', '事業・プロパティが選択なしで検索される場合のデフォルトは、プロパティの検索が実行されますが、その結果が（わざと）ランダムになります。本設定は、ランダムに背性される検索結果の数に制限できます。');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'クロン・ジョブの設定とログ');
jr_define('_JOMRES_COM_A_CRON_DESC', 'スード・コロン・ジョブ情報：本機能は、請求書とコミッションのハンドラーに必要です。');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'インストールされているクロンのミニコンポーネント：特定なクロン・ジョブの実行は、以下のリンクを利用ください。クロン・ジョブは出力がないので、そのページに何も表示されません。ジョッブの結果は以下のジョブのログに参照して下さい。');
jr_define('_JOMRES_COM_A_CRON_METHOD', 'メソッド');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'クロン・ジョブにアクセスがない場合には、「ミニコンポーネント」に設定して下さい。アクセスがある場合には、クロン・ジョッブを作成し実行してください。<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i>');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'ブラウザーでロッグを表示する');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'メソドが「ミニ・コンポーネント」に設定している限り実行されます。');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'ログイングしますか');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'ログイングを有効にする場合、「YES」に設定して下さい。ログの結果が以下で出力されます。');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', '詳細ログイング');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'ログイングのアウトプットが多くて細かくなります。');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'テンプレートの編集');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'カスタム・フィールド');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', '予約フォームに表示されるカスタムのフィールドを定義できます。');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'フィールド名（スペース無し）');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'デフォルト値');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', '説明');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', '必須状況');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', '最大限の数量');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', '最大限の数量が１を超える場合、選択できる追加オプションの数量が最大限の数量までの数がドロップダウンボックスで表示されます。');
jr_define('_JRPORTAL_TAXRATES_TITLE', '税レート');
jr_define('_JRPORTAL_TAXRATES_CODE', '税コード');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', '税レートの説明');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'この税レートを削除できません。');
jr_define('_JRPORTAL_TAXRATES_RATE', 'レート');
jr_define('_JRPORTAL_INVOICES_TITLE', '請求書');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', '未払い');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', '払済み');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'キャンセル');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', '未処理');
jr_define('_JRPORTAL_INVOICES_USER', 'ユーザー');
jr_define('_JRPORTAL_INVOICES_STATUS', 'ステータス');
jr_define('_JRPORTAL_INVOICES_RAISED', '起こされた');
jr_define('_JRPORTAL_INVOICES_DUE', '支払日');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', '定期会員');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', '残高');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', '繰返発生の頻度');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', '毎月発生日');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', '通貨コード');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', '内訳');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', '名');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', '詳細');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', '初期料金');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', '初期数量');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', '初期割引');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', '初期合計');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', '税コード');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', '税の説明');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', '税レート');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', '通常のJomresゲートウエー設定をオーバーライドしますか？');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'マイ請求書');
jr_define('_JRPORTAL_COUPONS_TITLE', '割引・クーポン');
jr_define('_JRPORTAL_COUPONS_DESC', '予約インセンティブを設けるため、割引コードを自動作成・通知する機能です。指定される有効期限は、宿泊日ではなく予約日に適応されます。');
jr_define('_JRPORTAL_COUPONS_CODE', '割引コード');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', '有効引換期間（開始）：');
jr_define('_JRPORTAL_COUPONS_VALIDTO', '有効引換期限：');
jr_define('_JRPORTAL_COUPONS_AMOUNT', '割引');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', '割引はパーセント（％）');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'リソース（部屋）のみ');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', '割引コードを利用する場合、記入し「割引権を保存する」をクリックして下さい。');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', '割引券を保存する');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', '割引が現予約に適応されました。');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', '割引コードが見つかりません。');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', '割引');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', '割引が予約に適応されました。割引関連の設定：');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', '言語設定');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', '言語選択ドロップダウンに含まれる言語を指定して下さい。');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', '言語選択ドロップダウンを表示しますか？');
jr_define('_JRPORTAL_NEWUSER_DEAR', '〜へ');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', '登録ありがとうございます');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'ユーザー名：');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'パスワード：');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'ログインして下さい。');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', '割引が保存されました。');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', '割引が削除されました。');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Username');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Password');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', '在庫アプデート通知の連絡先（携帯電話番号）');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', '「カントリーコード＋携帯電話番号」フォーマット（日本の例：+81-90-1234-5678）を使用して下さい。携帯電話番号への通知が好ましくない場合には空欄のままにしてください。');
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "本ゲートウエーは、ライブなサーバーが必要であり、localhostにてテスト・利用することはできません。
<br/>
<br/>
Clickatellのゲートウエーを利用する場合、まずClickatellのアカウント及び１つ以上のゲートウエー⇄アプリケーション間の登録接続（APIのsub-productのインスタンス） が必要です。各接続メソッドはsub-productと呼ばれています。アカウント セットアップの手順は以下です。<br/>
<br/>
Step 1：Clickatellアカウントの登録<br/>
（Clickatell アカウントがある場合、Step 2へ進む）<br/>
* http://www.clickatell.com/products/sms_gateway.phpで適しているAPI subproduct (接続メソッド）( Clickatell Central (API) )<br/>
* 登録のハイパーリンクをクリックする<br/>
* 登録フォームを記入し提出する<br/>
フォームを提出できたら、自動的にログインされ、API接続ページへ移動されます。<br/>
Step 2：API接続（sub-product）の登録・追加する<br/>
（必要に応じ、http://www.clickatell.com/login.phpでログインする<br/>
* トップメニューで'Manage my Products' を選択する<br/>
* ドロップダウンメニュー（'Add Connection'）で好ましいAPI 接続の種類（例：HTTP API)を選択する<br/>
* フォームを記入する。ロックされたIP（本サーバーのIP）を入力し、CallbackをHTTP POSTに設定する。IP callbackをhttp://ドメイン名/index.php?option=com_jomres&task=sms_clickatell_callbackに設定し、ユーザーid、 及びパスワードを設定する。<br/>
API connectionを複数登録する場合には、各接続にユーニックな名称を名付ける必要があります。<br/>
フォームを無事提出できたら、電子証明の詳細（各接続のAPI_ID）が表示されます。JomresをClickatellに接続するために必要なのでメモってください。<br/>
<br/>
ユーザー名、パスワード、及びapi_idを上記の空欄に記入ください。<br/>
<br/>");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', '予約フォームのリソース一覧でバリアフリー状況を表示する');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', '予約フォームリソース一覧でMAX人数を表示する');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', '表示料金はあくまでも参考です。料金はリソースを選択して予約を確定したら計算されます。');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'サブスクリプション プラン');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', '名');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', '説明');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', '発行日');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'フール料金');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'MAXプロパティ数');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'サブスクライブ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'サブスクリプションのハンドラーを利用する');
jr_define('_JOMRES_COM_NEWUSER', '予約と新規ユーザーの同時作成');
jr_define('_JOMRES_COM_NEWUSER_DESC', '未登録のユーザーが予約された場合、ユーザーアカウントが自動的に作成されます(Joomlaのみ)。');
jr_define('_JOMRES_CLICKTOREGISTER', '事業・プロパティを登録する');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Winterkitの予約システムご利用いただき誠にありがとうございます。ユーザー情報は次の通りです。');
jr_define('_JOMRES_LATLONG_DESC', 'ピンを住所の位置にドラッグアンドドロップすると緯度・軽度が設定されます。');
jr_define('_JOMRES_CONTROLPANEL', 'コントロール パネル');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', '請求書を表示');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', '請求書一覧を表示');
jr_define('_JOMRES_USER_LISTMYPROPERTY', '新規プロパティを登録');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', '警報：');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', '指定のサブスクリプション プランIDは無効です。');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', '無料サブスクリプション プランのサブスクリプションが１つに限定され、既に使用されています。');
jr_define('_JOMRES_COM_YOURBUSINESS', 'プロパティ名');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'プロパティ名');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'VAT番号');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', '住所１');
jr_define('_JOMRES_INVOICE_NUMBER', '請求番号');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', '適応されるブラック予約の開始日と満了日を選択して「適応」ボタンを押すと、空室状況は再確認されます。 <br/> 
<br/> 
例のプロパティが指定の期間中に予約が入っている場合、キャンセルされるまでブラック予約を登録できません。');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', '指定の期間に予約されているため、ブラック予約ができませんでした。');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', '指定の期間中、ブラック予約は可能です。');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'プロパティの料金設定が「●／人／泊」に設定されていますが、顧客タイプが作成・公開されていません。顧客タイプを作成・公開して下さい。');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', '料金は設定されていないため、予約は不可能です。');
jr_define('_JOMRES_EDITINGMODE_ON', 'Editing mode on');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Editing mode off');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', '予約金を変動型にしますか?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', '変動型の予約金というのは、予約日がチェックイン日より指定日数以内である場合、通常の予約金設定（予約全額の割合）は適応されず、予約全額が適応されます。本機能を利用したい場合には「YES」に設定し、その日数を指定してください。例えば、日数を６０日にした場合、予約日（２月２８）がチェックイン日（３月３１）より３０日間で６０日間以内なので、予約金が予約全額となります。');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'チェックインまでの予約金全額が適応される期間の日数');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', '確認メールが送信されました。');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'エージェントに連絡する');
jr_define('_JOMRES_INVOICE_MARKASPAID', '清算済みに変更');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', '清算済みに変更しました。');
jr_define('_JOMRES_APIKEY_REMAKE', '新規 API キーを作成する');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'シングル プロパティのインストールですか?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', '「YES」に設定されている場合、Jomresのフロントエンド表示はオーサライズされていないユーザーには簡易に表示されます。それぞれのJomresメニュー アイテムによる実行されるサブルチーンは、プロパティ一覧ではなく、唯一の登録プロパティの予約フォームが直接に表示されます。プロパティの管理者は「プロパティ情報」ボタンと「プロパティの新規作成」ボタンが表示されません。１つのプロパティの表示・予約に最適です。<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', '残高の支払');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', '注意：「Global Editing mode」が「ON」のまま「Editing Mode」を利用しています。Global Editing modeの影響が十分に理解しわざと使っている場合には問題ありませんが、十分に理解していない場合、意外な挙動が生じることがあります。十分に理解していない場合、Jomresのマニュアルで「editing mode」について参照してください。');
jr_define('_JOMRES_SUPPORTKEY', 'Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Jomresを購入時にもらったサポート ライセンス キー（別名：license number）です。Jomresのプラグインをダウンロードできるように、有効のキーが必要です。');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Personal discount');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', '事業・プロパティ登録を1カ国に限りますか?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', '「YES」に設定し国を次のフィールドで指定することにより、事業・プロパティをその国のみに制限できます。');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', '事業の国：');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery テーマ');
jr_define('_JOMRES_JQUERYTHEME_DESC', '事業・プロパティ情報に利用される jqueryの テーマを選択し手下さい。');
jr_define('_JOMRES_PROPERTYNOTPUBLISHED', '指定のプロパティは現在公開されていません。');
jr_define('_JOMRES_REVIEWS', 'クチコミ');
jr_define('_JOMRES_REVIEWS_TITLE', '評価のタイトル');
jr_define('_JOMRES_REVIEWS_DATE', '投稿日');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', '評価されていません。');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', '本事業の初評価者になりましょうか?');
jr_define('_JOMRES_REVIEWS_IAGREE', '同感する');
jr_define('_JOMRES_REVIEWS_IDISAGREE', '同感しない');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', '平均の評価：');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', '投票数');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', '新規評価');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'ログインしてから評価してください。');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', '感想はいかがでしたか？');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', '感想：');
jr_define('_JOMRES_REVIEWS_PROS', 'プラス要因：');
jr_define('_JOMRES_REVIEWS_CONS', 'マイナス要因：');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', '投稿日：');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', '評価は事業当たり1回の評価に限られます。');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', '本サイトで評価できません。');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', '評価を表示');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', '人が同感しています。');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', '人が同感していません。');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', '人が同感しています。');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', '人が同感していません。');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', '本評価の意見いただきありがとうございます。');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', '本評価の意見はすでに登録されています。');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', '全項目の記入が必要です。');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', '評価をまとめるタイトルをご記入ください。');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'より詳しい記述を記入してください。');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'このホテルの顧客としての優れている面を説明してください。');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', '顧客としての劣っている面を説明してください。');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'ホスピタリティを評価してください');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', '立地を評価してください');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', '清潔感を評価してください');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', '宿泊心地（ベッド、館内アメニティ等）を評価してください');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', '金額に見合う価値を評価してください');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'サービスを評価してください');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', '評価サマリー');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', '詳細説明');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', '評価していただきありがとうございます。');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', '評価していただきありがとうございます。Moderatorにレビューされましたら直ちに公開されます。');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', '評価機能を利用しますか?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', '評価を自動的に公開しますか?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', '「NO」に設定する場合、各評価を手動的に公開する必要がある。');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', '評価機能をテスト モードにしますか?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', '通常は事業の管理者が事業・プロパティを評価しないほうが望ましい。テスト モードを「ON」にすれば管理者が自分のプロパティや競合者のプロパティ評価できるようになります。ライブのサイトにはテスト モードを「OFF」に設定すべきです。');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'プロパティ一覧でプロパティにクリックするとその全評価が表示されます。評価の公開・削除することができます。');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', '未公開の評価数');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', '総合評価数');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', '評価を公開する・しない');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', '評価を削除する');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', '評価を通報');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'タイトル');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', '問題点をご記入ください');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', '本評価に不適切・不正確な内容がありましたら通報してください。');
jr_define('_JOMRES_REVIEWS_SUBMIT', '提出');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', '通報者：');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', '通報は、ユーザーにより評価の内容を警告する機能です。評価自体を削除しない限り、通報を削除することはできません。');
jr_define('_JOMRES_REVIEWS_RATING', '評価 (1 = poor 10 = excellent)');
jr_define('_JOMRES_REVIEWS_RATING_1', 'ホスピタリティー');
jr_define('_JOMRES_REVIEWS_RATING_2', '立地');
jr_define('_JOMRES_REVIEWS_RATING_3', '清潔');
jr_define('_JOMRES_REVIEWS_RATING_4', '心地');
jr_define('_JOMRES_REVIEWS_RATING_5', 'バリュー');
jr_define('_JOMRES_REVIEWS_RATING_6', 'サービス');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', '評価者：');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', '非表示');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', '事業・プロパティ情報のページに予約フォームを表示しますか?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', '事業・プロパティ情報のページに予約フォームを表示したい場合には、「YES」に設定してください。「NO」に設定する場合、予約フォームへのリンクのみ表示されます。');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', '指定料金は税込価格?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', '入力する料金が税込価格にしたい場合には「YES」に設定してください。税抜き価格を入力する場合に「NO」に設定してください。');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', '税：');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', '曜日に合わせて料金を設定することができます。曜日のボタンをクリックすると、その曜日は設定の料金に全て変更されます。');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', '日付と料金を合わせて設定すると、期間中に有効な料金設定を設定できる。開始日、終了日、料金を設定し、「料金設定」のボタンにクリックして下さい。');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', '開始');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', '完了');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', '料金');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', '料金設定');
jr_define('_JOMRES_PARTNERS_TITLE', '協力者');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', '部屋');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', '顧客');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', '指定の宿泊人数が部屋に以下の通りに割当されました。変更されたい場合、予約が済みましたらホテルを直接にお知らせください。割当の変更に追加料金が発生されるホテルもありますので、ご了承ください。');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', '本事業・プロパティは公開されていないため、Winterkitの予約サイトで表示されていません。');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'デフォルトの検索結果順');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', '検索の結果が表示される際、デフォルトの優先順位をここで設定できます。');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', '検索結果順位のドロップダウンを表示しますか。');
jr_define('_JOMRES_ROOMMSLIST_STYLE', '部屋一覧のスタイル');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', '予約フォームのスタイルにより、顧客は「クラッシック」ビューでは個別な部屋、「リソース タイプ」ビューではリソース タイプの数（例：ダッブル部屋×２室）を選択します。');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'クラッシック');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'リソース タイプ');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'カレンダー表示：週明けの曜日（日・月）');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', '評価を顧客に限りますか?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'ある事業・プロパティの評価をその顧客に限る場合、「YES」に設定してください。');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', '部屋に付き');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', '部屋のMAX人数');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', '予約のMAX人数：');
jr_define('_JOMRES_NUMBER_OF_ROOMS', '予約可能の部屋数');
jr_define('_JRPORTAL_MONTHS_LONG_0', '１月');
jr_define('_JRPORTAL_MONTHS_LONG_1', '２月');
jr_define('_JRPORTAL_MONTHS_LONG_2', '３月');
jr_define('_JRPORTAL_MONTHS_LONG_3', '４月');
jr_define('_JRPORTAL_MONTHS_LONG_4', '５月');
jr_define('_JRPORTAL_MONTHS_LONG_5', '６月');
jr_define('_JRPORTAL_MONTHS_LONG_6', '７月');
jr_define('_JRPORTAL_MONTHS_LONG_7', '８月');
jr_define('_JRPORTAL_MONTHS_LONG_8', '９月');
jr_define('_JRPORTAL_MONTHS_LONG_9', '１０月');
jr_define('_JRPORTAL_MONTHS_LONG_10', '１１月');
jr_define('_JRPORTAL_MONTHS_LONG_11', '１２月');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Set this to Yes to reduce the number of options available to business managers in the General Configuration section. This is useful if you do not want business managers to play around with too many settings, instead you can edit jomres_config.php to define default business options.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', '追加オプションを選択してください。');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', '全画面表示');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'コンテンツ枠内表示');
jr_define('_JOMRES_PARTNER_DISCOUNT', '協力者業割');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'ユーザ検索');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'ユーザ名の一部を入力すると、当てはまるユーザ名が検索され表示されます。<br/>ユーザ名をクリックすると協力者として追加され、次ページに移動されます。プロパティとディスカウントをそのユーザにアサインできます。');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', '既存の協力者');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', '協力者をクリックすると協力者アドミンのページへ移動されます。');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', '協力者 :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', '企業を検索');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'プロパティ名の一部を入力すると、当てはまるプロパティが検索され表示されます。<br/>プロパティをクリックすると、協力者のポートフォリオに追加されます。割引は設定しない限り適応されないので、必要に応じて設定してください。');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', '対象プロパティ');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'パートナーの割引設定は、プロパティをクリックすると設定できます。');
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'このアカウントは現在一時中断されているため、プロパティの管理は不可能です。');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'プロパティ管理者のアカウントが一時中断されました。');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'プロパティ管理者のアカウントが復帰されました。');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Winterkit.jpの予約システムのアカウントは、現在一時中断されているため、プロパティの管理は不可能です。復帰されるまでプロパティ管理の機能を使えません。');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Winterkit.jpの予約eシステムのアカウントが復帰され、いつも通りにご利用いただけます。全てのプロパティが公開されていることを再確認していただくと幸いです。今後ともよろしくお願い致します。');
jr_define('_JOMCOMP_MYUSER_REMOVE', '「お気に入り」を外す');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', '予約データのアーカイブ');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'アカウント編集');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', '既存の管理者');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', '人数から探す');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', '「人数辛さがす」のロップダウンを表示する？');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', '星数から探す');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', '「星数から探す」のづロップダウンを表示する？');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', '人数');
jr_define('_JOMRES_SEARCH_STARS', '星数');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'アサインされているプロパティ数');
//4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Load Jomres jQuery library?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'jqueryを活かすテンプレートを利用している場合、「NO」に設定できます。This MAY resolve jquery conflict issues on some templates, but not all.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
//4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', '小サームネールのMAX幅員(px)');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', '小サームネールは事業・プロパティ一覧に使用されます。中サームネールは事業・プロパティのヘッダーに使用されます。');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', '小サームネールのMAX高さ(px)');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', '中サームネールのMAX幅員(px)');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', '中サームネールのMAX高さ(px)');
jr_define('_JOMRES_TOUCHTEMPLATES', 'レベルの翻訳');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'コミッション機能を利用しますか?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', '管理者の発行済コミッション請求書を表示する場合には「YES」に設定してください。');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', '管理者による予約はコミッションが発生されますか?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'プロパティ管理者がリソースを予約する場合、その予約もコミッションを発生しコミッション請求書に追加されますか?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', '管理者のコミッション請求書が「未払い」と見なされると自動的に管理者権限を一時中断しますか?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', '自動一時中断の限界日数');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', '管理者のコミッション請求書の支払が「未払い」と自動的に見なされ、管理者のアカウントが一時中断されるまでの日数を設定してください。');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', '特有の言語環境');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'ホテル以外の事業タイプ（例えば：レンタカー）の予約を受ける場合、特有の言語のある事業タイプにふさわしいラベル等が蓄積されている個別な言語ファイルから読み込まれ、妥当な表現が表示されます。レンタカー事業を例えば、Jomresは、まず現在使われている言語（例のため、日本語=ja-JPとします）を認識します。その次、事業のサブフォルダー /'.JOMRES_ROOT_DIRECTORY.'/languages/rentalcar で試用中の言語の言語ファイル（ja-JP）を探し、見つかった場合に利用されます。見つからない場合には、同サブホルダでのen-GBファイル（Jomresのデフォルト言語はイギリス英語）が利用されます。rentalcarのen-GBファイルも見つからない場合には、/'.JOMRES_ROOT_DIRECTORY.'/languages での使用中の言語ファイル（ja-JP）が利用されます。Note that if you create a new property type, then a copy of the current language file is made in a subdirectory under /'.JOMRES_ROOT_DIRECTORY.'/language with a name that reflects the new property type\'s description.');
//4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Jomresの詳細設定環境');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'JomresのjQuery UI libraryをロードしますか?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', '料金（降順）');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', '料金（昇順）');
//4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', '料金サマリー等での表示料金の単位をどのように表示しますか（１泊当たり・１週間当たり・１ヶ月当たり等）？');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', '１泊当たりの料金');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', '１週間当たりの料金');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '１ヶ月当たりの料金');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', '１人当たりの料金');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', '週間で');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'ヶ月で');
//4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', '人数
の検索方式を選択してください。?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', '全ての検索モジュールはこの設定に影響されます。人数が検索される際、以下の方式から選べます。<br/>「指定人数以下」（４人の検索結果：２人部屋×２、３人部屋＋1人部屋、４人部屋）<br/>「指定人数同等」（４人の検索結果：４人部屋のみ）<br/>「指定人数以上」（４人の検索結果：４人部屋、５人部屋、６人部屋等） ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'ご注文の処理を行っています。 Paypalに移動するまでしばらくお待ちください。');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', '５秒以内にpaypalへ移動されない場合...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'ここをクリック');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', '有効宿泊期間（チェックイン）：');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', '有効宿泊期間（チェックアウト）：');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', '顧客名：');
jr_define('_JRPORTAL_COUPONS_DESC_478', '予約のインセンティブとして、クーポン コードを発行し顧客に提供できます。<br/>
クーポンの有効引き換え期間を設定する「有効引換期間（開始）」・「有効引換期限」に対して、「有効宿泊期間（チェックイン）」・「有効宿泊期間（チェックアウト）」は宿泊の有効期間を設定します。顧客が有効宿泊期間外の宿泊期間が入力された場合、割引が期間外の日々は通常価格は適応されます。<br/>
クーポンの対象顧客を指定の顧客のみに設定したい場合、ドロップダウンでその顧客名を選択してください。');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'クーポンにより、予約が ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' → ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_NINARIMASHITA', ' になりました。');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Jquery UI javascriptとCSSのファイルを読み込みたくない場合、「NO」に設定してください。');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'JomresのjQuery UI CSS libraryを読み込みますか?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', '「NO」に設定することにより、jquery UI CSS のファイルが無効になり、読み込まれません。');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', '税込金額');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'プロパティが未公開された');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', '通貨換算の機能を利用しますか?');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', 'Jomresのオンライン通貨換算の機能を利用する場合、ユーザに通貨換算のドロップダウンが表示され、料金がユーザに指定された通貨で表示されます。換算された料金の側に元通貨の料金も [ ]で表示されます。');
jr_define('_JOMRES_CONVERSION_DISCLAIMER', '外国為替市場の継続変動及び購入日と取り引き登録日が異なるため、このツールで表示されるレートとそれに基づく外貨価格はあくまでも参考です。円以外の通貨で表示される価格の正確性は一切保証できず、ルールの利用に関しては一切責任を負いません。');
//5.2.1
//5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', '通貨の換算・通貨コード');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP認識APIキー');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'JomresがIPinfoDBという無料のサービスを利用することにより、ユーザの国を認識し、通貨コードのドロップダウンを自動的に設定するできるが、APIキーが必要です。<a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> で登録し入手できます。');
jr_define('_JOMRES_DEBUGGING_TAB', 'デバグ環境');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', '宿泊料金（税抜）');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', '宿泊料金（税込）');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'リソース税金：');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', '予約フォームを開く');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', '物件情報に戻る');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', '自動的に選択する?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', '残高（予約金を除き）');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', '部屋のアメニティにより絞り込む');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', '最新の予約');
jr_define('_JOMRES_DATEPERIOD_SECOND', '秒');
jr_define('_JOMRES_DATEPERIOD_MINUTE', '分');
jr_define('_JOMRES_DATEPERIOD_HOUR', '時');
jr_define('_JOMRES_DATEPERIOD_DAY', '日');
jr_define('_JOMRES_DATEPERIOD_WEEK', '週');
jr_define('_JOMRES_DATEPERIOD_MONTH', '月');
jr_define('_JOMRES_DATEPERIOD_YEAR', '年');
jr_define('_JOMRES_DATEPERIOD_DECADE', '10年');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', '前');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'これから');
jr_define('_JOMRES_WHOLEDAY_TITLE', '日数の予約期間認識?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'デフォルト設定は、予約期間が泊数として認識されます（例えば、　１月１日 '.date('Y', strtotime('next year')).' から１月２日 '.date('Y', strtotime('next year')).' までの予約は１泊として認識されます）。「YES」に設定する場合、上記の例の予約は２日として認識され、料金が1泊ではなく２日として計算されます。'); jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '１人に付き');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', '１人１日に付き');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'チェックイン');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'チェックアウト');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', '日間 × ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'チェックアウトの日付が誤っています。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', '指定の予約期間が短過ぎます。チェックインとチェックアウトの間に必要な日数は：');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', '滞在期間のMIN日数：');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', '滞在期間のMIN日数はチェックインとチェックアウトの間に必要とされる日数です。1日の場合、チェックインとチェックアウトが同日に設定できるとのことになります。ただし、予約エンジンが、確認する指定期間に有効の料金プランによるMIN予約期間も満たさなければなりません。');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', '料金サマリーと概算を /日・/週・/月 にしますか ?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', '1日に付き');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'チェックイン日までのMIN日数');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', '予約日からチェックイン日との間のMIN日数を設定できます。');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', '事前予約を「YES」に設定すると、ユーザがチェックイン日より次のフィールドで設定する日数前に予約しようとする場合、チェックイン日が予約日に戻されます。');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'チェックアウト日の入力を表示しますか?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'チェックアウト日の入力フィールドをユーザに表示したくない場合、「NO」に設定してください。デフォルトのチェックアウト日はチェックイン日の翌日に自動的に設定されるので、気をつけて変更して下さい。');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', '定期予約（決まった日数）のみを受けたい場合、「YES」に設定してください。定期の予約の設定を「NO」にする場合、決まった曜日にチェックインさせたい場合を除き、固定のシェックイン曜日を「NO」に設定すべし。固定のシェックイン曜日も「YES」にすれば、空室状況カレンダーに表示されるリンクが非常に限られます。');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', '固定のチェックイン曜日');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', '固定の予約金を提供するサイトのみに適応。固定のチェックイン曜日を設定してください。');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', '固定のチェックイン曜日');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', '固定のチェックイン期間の日数：');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', '固定のチェックイン日を選択する場合、日付のドロップ ダウンボックスに表示される項目数です。空室状況により予約が不可能な日付は表示されません。Note that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', '／人／日');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', '料金を 1人当たり1日に付き により計算したい場合、「YES」に設定してください。「NO」に設定される場合、 １部屋当たり1日に付き により計算されます。');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', '変動型の予約金というのは、予約日がチェックイン日より指定日数以内である場合、通常の予約金設定（予約全額の割合）は適応されず、予約全額が適応されます。本機能を利用したい場合には「YES」に設定し、その日数を指定してください。例えば、日数を６０日にした場合、予約日（２月２８）がチェックイン日（３月３１）より３０日間で６０日間以内なので、予約金が予約全額となります。');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', '多くの事業は、予約の検索日に、当該の部屋の料金をその日の空室状況により変動させるダイナミックな料金設定を提供したいです。リソース（部屋）または事業の需要が薄い時期には、そのリソースの儒教を高めるためにその料金を自動的に引き下げします。<br/>本プラグインを有効にし設定することにより、ユーザーの検索条件（日、タイプ等）に合致する部屋の空室数により料金が自動的に計算され、表示されます。<br/>「価格変更限界の日数」というのは、チェックインまで価格変更が適応される有効日数を定義するものです。「価格変更限界の予約状況」というのは、割引が適応されるリソースの予約状況（全リソース中、予約済みの割合）の最大限を定義するものです。複数のリソースが予約される場合には、予約割合が増加しても、当初の割引率が全リソースに適応されるのでご注意ください。');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', '価格変動限界の日数　（予約当日とチェックインとの間の日数）');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', '残りの本日チェックイン');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', '本日のチェックイン');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'チェックイン済み');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', '本日チェックアウト');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', '残りの本日チェックアウト');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', '未チェックイン');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', '日間');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'チェックイン済みにする');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'チェックアウト済みにする');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', '予約をチェックイン済みにする');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', '予約をチェックアウト済みにする');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', '１日に付き：');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', '日数：');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'オーバーライド：宿泊料金（合計）');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'オーバーライドを保存する');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', '新規のユーザ登録があった際、そのユーザにログイン詳細をメールで送信しますか?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'ユーザ新規作成のオプションが「YES」に設定されていて、ログインの詳細をメールされたくない場合には、この設定を「NO」に設定してくださ。新規ユーザをメーリング リストに追加する際に便利な設定です。');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', '予約フォームの合計サマリーで税額を個別に表示しますか?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', '予約フォームで税額を表示したくない場合には、「NO」に設定してください。');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', '予約キャンセルのMIN日数');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'ユーザが予約をチェックイン日より何日以内であれば、キャンセルできない期間を設けることができます。チェックイン日までキャンセルできない期間の日数をここで指定できます。');
jr_define('_JOMRES_EDIT_PROFILE', 'プロフィールを編集');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'アサインされたプロパティ タイプ');
jr_define('_JOMRES_IMAGE', 'イメージ');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'アルファベットをクリックするとその文字から始まる名称の事業・プロパティに絞り込まれます。該当のプロパティ一覧が表示されたら、コミッション レートをプロパティにアサインできます。「編集」のボタンをクリックするとその事業・プロパティの情報を見、詳細を変更できます。');
jr_define('_JRPORTAL_TAX_RATE_EDIT', '税率を変更');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'カスタム フィールドを編集');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'License server username');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Jomresのライセンス サーバーでユーザ名とパスワードがある場合、ここで入力してください。ライセンスに含まれているプラグインをアクセスできるようになります。有効のJomres Support keyを上記に記入・保存した場合、ここでユーザ名・パスワードを記入する必要はありません。');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', '現在のJomresバージョン：');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', '最新のJomres バージョン：');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', '注意：Jomresのより新しいバージョンがあります。早めに更新することを進めします。');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Jomresへようこそ。Joomlaの最も愛されている予約システムを利用いただき、ありがとうございます。JomresのSolo、Silver、又は Goldのライセンスを購入したい場合、 <a href="http://www.jomres.net/prices" target="_blank"> Jomresの開発者サイト</a> に参照して下さい。');
jr_define('_JOMRES_PRODUCT_INFORMATION2', '本システムは、１件の簡易予約サイトから、複数の国やある複数のプロパティを所持している複数のプロパティ管理者が複数の言語で利用できる予約サイトまで、どの予約に関するニーズがあっても、柔軟に対応できるシステムです。「Getting started」のツアからはじめ、初の事業やプロパティを登録しながら、本システムの利用が楽になれることができます。分からなくなってしまった場合には、いつでも「HELP」ボタンを押すだけで、追加説明があり、参考になります。');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', '対象プロパティ');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', '代替えの SMTP設定');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', '代替えの SMTP設定を利用したい場合、「YES」に設定してください。PHPメールの機能をブロックするウエブ ホストがますます増えているので、Jomresが普段に使うホストCMS（Joomla等）のメール設定を、ここでオアーバーライドでき、カスタムのメール設定に変更できます。');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', '代替えのホスト');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'smtp メール サーバーに変更して下さい。');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', '代替えのポート');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'smtp ポートにに変更して下さい。');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', '代替えのプロトコル');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', '利用されるsmtpサーバーの設定により、空欄にする、もしくはsslまたは tlsに変更する必要があります。分からない場合、SMTP　プロバイダーに問い合わせしてください。');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'authenticationを利用しますか');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'SMTP サーバーに必要とされる場合、「YES」に設定してください。指定のユーザ名とパスワードが利用されます。');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', '代替えのユーザ名');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', '代替えのパスワード');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Quick Info');
jr_define('_JOMRES_MENU_SHOW', '表示');
jr_define('_JOMRES_MENU_HIDE', '非表示');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'デフォルト');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'プブリック');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', '登録者');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', '管理者');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', '万能の管理者');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'プライベート');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'アクセス制限');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'この機能により、メーン メニューどのプラグインがどのアクセス レベルに表示されるかを設定できます。 オプションは以下です。00009 オプションは通常の登録ユーザ・パブリックに表示されます。00010 オプションはフロント・受付によく使われる機能です。00011 オプションはプロパティや料金等の初期設定・編集と設定環境に時々に使われます。');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', '受付');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', '詳細のアクセス制御');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', '「YES」に設定すると、アクセス制御の設定環境で詳細のアクセス制御が表示されます。');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', '詳細
のアクセス制御');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', '警告：You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', '対象プロパティのアドミン権限を与えられたユーザ');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'メールアド');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'モデル');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'パラメーター');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'フォース');
jr_define('_JOMRES_METATITLE', 'Meta title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'プロパティの追加：Step 2 of 2');
jr_define('_JOMRES_CART_TITLE', 'カート');
jr_define('_JOMRES_CART_INFO', '注意：カートに入っている予約は保存されていない可能性があります。ログアウト又はタイムアウトの場合失われます。予約の完了を確認してください。');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', '予約を確認');
jr_define('_JOMRES_CART_OR', ' 又は ');
jr_define('_JOMRES_CART_SAVEFORLATER', '予約を保存');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', '予約がありません。');
jr_define('_JOMRES_CART_VIEWCART', 'カートを表示');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', '言語ファイルのサブホルダー・パース');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', '緯度のデフォルト設定');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', '経度のデフォルト設定');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'プロパティ情報の編集ページにあるGoogle地図で、初期のピン位置を緯度・軽度を設定することにより指定できます。');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Jomresからのメールをどのメール アドから送信しますか?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', '空欄にすれば、このオプションが無効になります。Jomresは、顧客にメールする際に、ホテルのメール アドを利用します。しかし、メール サーバーが第三者のメール アドから送信することを拒否する場合もあります（つまり、オーソライズされた１つのメール アドに限られます）。拒否されている場合、全てのシステム メールの送信者欄に表示されるメール アドを入力することができます。');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'リスト ビュー');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', '写真 ビュー');
jr_define('_JOMRES_COMPARE', '比較');
jr_define('_JOMRES_REMOVE', '取外す');
jr_define('_JOMRES_RETURN_TO_RESULTS', '検索結果に戻る');
jr_define('_JOMRES_ADDTOSHORTLIST', 'お気に入りに追加');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'お気に入りから削除');
jr_define('_JOMRES_VIEWSHORTLIST', 'お気に入りを表示');
jr_define('_JOMRES_COOKIEPOLICY_1', '重要：クッキーの利用方針');
jr_define('_JOMRES_COOKIEPOLICY_2', 'ユーザーにとっての関連性や利便性を向上するため、このサイトはクッキーを利用しています。');
jr_define('_JOMRES_COOKIEPOLICY_3', '続きを読む');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EUの法律により、クッキーを利用しているか否かを明記することが義務付けられています。');
jr_define('_JOMRES_COOKIEPOLICY_5', '検索エンジンと予約エンジンは、指定された情報、選択されたオプション等を利用するため、保存する必要があります。ブラウザーを区別するクッキーという小さなファイルをそちらのパソコンに保存する必要がある。ただし、そちらのディスクを利用し保存することを許可していただかないと、Jomresは必要な情報を保存できません。よって、本サイトのご利用は非常に限られます。');
jr_define('_JOMRES_COOKIEPOLICY_6', 'クッキーの利用に同意する');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', '必須の予約金を初夜の料金にしますか?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', '料金は日別（夜別）に積算されます。予約金を初日（初夜）に相当する金額に定義したい場合、「YES」に設定し、以下のオプションをスキップして進んでください。');
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'お気に入りは指定されていません。');
jr_define('_JOMRES_SAFEMODE', '安全モードを有効にしますか?');
jr_define('_JOMRES_SAFEMODE_DESC', 'Jomresのプラグインを全て無効にし、コアの機能のみ利用させる「安全モード」に切り替えられます。');
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', '次＞');
jr_define('COMMON_CANCEL', 'キャンセル');
jr_define('COMMON_SUBMIT', '提出');
jr_define('COMMON_SAVE', '保存');
jr_define('COMMON_DELETE', '削除');
jr_define('COMMON_RETURN', 'リターン');
jr_define('COMMON_CLOSE', '閉');
jr_define('COMMON_BACK', '＜戻');
jr_define('COMMON_HOME', 'ホーム');
jr_define('COMMON_NEW', '新規');
jr_define('COMMON_SEND', '送信');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'reCaptchaというのは、フォームの利用者が人間でいることを確かめる仕組みで、プロパティ管理者がローボットにスパムされないように設けています。問い合わせフォームを利用する場合、 <a href="http://www.google.com/recaptcha" target="_blank">Google reCaptcha</a> のHPに登録しドメインを設定した上、Public keyとPrivate keyを与えられます。 キーを以下のフィールドで記入して下さい。Google　reCapcha は無料のサービスです。');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Public key');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Private key');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', '仮押えのタイムアウト');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'ダッブル ブッキングの可能性をなくすため、ユーザが予約フォームに入っているリソース（部屋）場合、そのリソースが仮に押さえられ、他のユーザの検査結果に出ないようになっています。仮押えのタイムアウトは、３６００秒（つまり1時間）が経過したら解除されるように設定されているが、ここでタイムアウトの秒数を変更できます。');
jr_define('_JOMRES_BOOTSTRAPSWITCH', 'Jomresのブートストラップ テンプレートを有効にしますか?');
jr_define('COMMON_ACTION', '進む');
jr_define('COMMON_VIEW', '表示');
jr_define('BACKTOTOP', 'トップ');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', '弱');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', '強');
jr_define('_JOMRES_INPUTFILTERING', '入力 フィルター');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', '入力 フィルターの強度');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', '入力されたデータは、セキュリティを高めるため、データバエースに保存する前に洗浄されます。まずHTMLタグが抜けれ、その次にPHPの変数フィルターがかけられてから記録されます。ただし、HTMLを許可する場合もあります（例えば、プロパティ情報ページのテキスト入力等）。その場合、完全洗浄ではなく、HTMLの一部を許すHTMLフィルターを選択できます。HTMLフィルターは、「弱」または「強」の２強度から選べます。データを入力する人が信頼されているユーザ（例えば、ウエブマスター、サイト アドミン）のみに限る場合意外、「強」に設定することを推薦します。「強」に設定しても、どのタグが許されるかを細かく指定できます。');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', '入力の許されるタグ');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "HTMLフィルターに許されるタグを指定できます。デフォルトは p,b,strong,a[href],i (i.e. Paragraph, Bold, Strong, Links and Italics)に設定されています。タグの詳細については、<a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a> でHTMLフィルターのドキュメンテーションに参照してください。変更できるにもかかわらず、デフォルトのままにしておくことが推薦されます。");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', '許される入力');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', 'HTMLが許される入力を指定できます。このリストに追加される入力は、通常のHTMLを全て抜くプロセスの代わりに、HTMLフィルターに通されます。HTMLが許されるフォームのデフォルトは：property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimersになっています。 フォームの追加は、スペースで区切ってフォーム名を追加してください。');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'プロパティ情報をタブで表示しますか?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'プロパティ情報をタブで表示する場合、「YES」に設定して下さし。');
jr_define('COMMON_PRINT', '印刷');
jr_define('COMMON_EDIT', '編集');
jr_define('COMMON_COPY', 'コピー');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Joomla 3はツイッターのBootstrapフレームワークを初期設定により利用しているため、Jomresのテンプレートはこれを利用しています。JomresをJoomla 3で利用している場合、デフォルトは「YES」に設定されます（「NO」に設定できるが、推薦できません）。JoomlaのバージョンがJoomla 3未満の場合、JomresのBootstrapテンプレートや機能性を選定できるが、デフォルトは「NO」に設定されます。');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'フロントエンドにJomresのブートストラップ テンプレートを利用しますか?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', '類似の物件はいかがでしょうか');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', '顧客の国を自動的に認識しますか?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', '顧客の初予約の際、国を自動的に認識します。予約フォームで固定の国を初期表示したい場合には、「NO」に設定し、次の欄で指定できます。');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Jomresについて');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'HELP');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'はじめに');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'アクセス制限');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'デベロッパーのツール');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', '言語');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', '収入管理');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'サイト構成');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'マニュアル(online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'マイ アカウント(online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'ポータル機能');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'プラグイン マネジャー');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', '統合性');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', '報告書・統計');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'HELP');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', '更新');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', '支払ゲートウエー');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', '料金プランの初期設定');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', '新規料金プランのみに適応されます');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', '表示年数');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', '料金プランを編集する際に表示される年数を設定できる。');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', '清算管理');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'アカウント設定');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'ログイン');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'ログアウト');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', '検索');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'ダッシュボード');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', '新規予約');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', '清算管理');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', '設定');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'その他');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', '国変更');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'ID');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'カントリーコード');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', '国名');
jr_define('_JOMRES_EDIT_REGION_TITLE', '地域変更');
jr_define('_JOMRES_EDIT_REGION_ID', '地域ID');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'カントリーコード');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', '地域名');
jr_define('_JOMRES_COM_LISTCOUNTRIES', '国名を表示');
jr_define('_JOMRES_COM_LISTREGIONS', '地域を表示');
jr_define('_JOMRES_EXPORT_DEFINITIONS', '定義をエクスポート');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', '翻訳機能を利用してラベル等を事業に特化したり、国語を翻訳したりした場合には、これで言語ファイルにエクスポートすることができます。アウットプットをコピーし、新規のphpの言語ファイールに張り付けた上、言語ファイルをJomresサーバーへアプロードすることができます。マニュアルに参照ください。');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'ロケーションを翻訳する');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', '言語ファイルのストリングを翻訳する');
jr_define('_JOMRES_COM_NOTAMANAGER', 'エラー：現在ご利用のユーザが万能の管理者ではないため、本機能をこのままでご利用できません。利用に当たり、「プロフィールを表示」の機能を使用し、「管理者」や「万能の管理者」として許可を得た上、もう一度試してみてください。');
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'プロパティ一覧のデフォルト表示');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'MIN宿泊数');
jr_define('_JOMRES_NIGHTSFOR', ' 泊当たり ');
jr_define('_JOMRES_AGENT', 'エージェント');
jr_define('_JOMRES_AGENT_DETAILS', 'エージェント詳細');
jr_define('_JOMRES_AGENT_LISTINGS', 'エージェントのリスティング');
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', '新規プロパティの表示を自動的に許可しますか。');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', '本オプションを「NO」に設定する場合、新規プロパティが万能管理者にyろい手動的に許可されるまで表示されません。');
jr_define('_JOMRES_APPROVALS_MENU_NAME', '許可リスト');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', '本プロパティは許可待ちです。許可されましたら表示できるようになります。');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', '本プロパティは許可待ちのため、表示することはできません。もう少々をお待ちください。');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', '許可待ちの新規プロパティ');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', '新規プロパティが登録され、あなたの許可を待っています。以下のリンクをクリックし、許可して下さい：');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', '登録プロパティの許可されました。');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'おめでとうございます。御社のプロパティが許可されました。以下のリンクをクリックすると、プロパティのコントロール パネルへ移動できます：');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', '地域名称は翻訳可能です。');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', '非常に早いサーバーを利用していない限り、「NO」のままにして起くことを進めします。大量の地域名称があるため、メモリーが沢山使われ、検索のスピードが非常に大幅に落ちます。');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', '顧客がチェックアウトされました。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', '入力されたメールアドレスが既に登録されています。あなたのメールアドの場合、ログインし、予約して下さい。');
jr_define('JOMRES_TAPTOCALL', '電話する');
jr_define('JOMRES_NEWREVIEW_SUBJECT', '新規評価：');
jr_define('JOMRES_NEWREVIEW_MESSAGE', '右記のプロパティが新規に評価されました：');
jr_define('JOMRES_NEWREPORT_SUBJECT', '評価の新規通報');
jr_define('JOMRES_NEWREPORT_MESSAGE', '右記のプロパティの評価が通報されました：');
jr_define('JOMRES_SUPERIOR', '優秀');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', '合計（税抜）：');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', '合計（税込）：');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', '税：');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', '表示の文字を入力してください：');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', '再生の通りを入力してください：');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', '巻き戻し再生 ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'MP3としてダウンロード');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'ビジュアル モード');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'オーディオ モード');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', '更新');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'HELP');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', '入力は正しくありません。もう一度入力してください。');
jr_define('JOMRES_GOOGLE_MAPS', 'Google地図のオプション');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', '天候レヤーを利用しますか?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', '℃');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', '°F');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', '交通レヤーを利用しますか?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'GmapのPoints of Interest（見所）を表示しますか？(競合会社も含まれる可能性があります。）');
jr_define('_JOMRES_METAKEYWORDS', 'メータのキーワード');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'アクセス情報は、QRコードをスキャンし表示できます。');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', '入力されたVAT 番号が正しくないようです。BE805670816B01というような番号です。');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', '入力されたVAT番号が無効です。VAT番号の有効性をEuropa VAT Number validation webservice (VIES)に確認してください。');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'VAT番号が確認できましたので、ご利用できます。');
jr_define('_JOMRES_TAX_RULES_LIST', '税ルールを表示');
jr_define('_JOMRES_TAX_RULE', '税のルール');
jr_define('_JOMRES_TAX_RULE_INFO', '税のルールは、別国等の個別の税制度のルールを定義しています。「アカウントを編集」のページでアカウントを正しくアプデートされている登録ユーザがログインされている場合に、そのユーザの予約に適応されます。本機能は、VAT対象外の地域にいる顧客の予約をより簡単に対応できることを目標していて、所在地によりルールを作成する必要はない可能性もあります。');
jr_define('_JOMRES_TAX_RATES_IMPORT', '税率をインポート');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'EUの税率を自動的にインポートできます。注：インポートする場合、既存の税率情報が削除されます。');
jr_define('_JRPORTAL_TAX_RULE_EDIT', '税ルールを変更');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', '本プロパティのVAT番号');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', '本プロパティのVAT番号を入力してください。');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT番号が確認できました。');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT番号が確認できませんでした。');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'ここで入力された事業体の情報はコミッションやサブスクリップションの請求書に使用されます。');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', 'アカウント情報はまだ入力されていません。本サイトにプロパティを登録するため、アカウント情報を全て入力して下さい。');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'プロダクション用又は開発用のサバーですか?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', '「開発用」に設定する場合には、エラー報告が有効になります。「プロダクション用」の場合は、無効になります。実施されている場合には、「プロダクション用」に設定すべきです。');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'プロダクション用');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', '開発用');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'リソース（部屋）情報');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', '料金プランの詳細');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'たったの');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', '部屋しか残っていません!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'リソースのアメニティ');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', '指定のリソース アメニティがプロパティに適応されているため、削除できませんでした。リソースから取り外してやり直してください。');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'イメージ管理');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'イメージを追加');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', '部屋のイメージ');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'プロパティの代表イメージ');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'スライドショーのイメージ');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', '一覧をクリア');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'ファイルをここにドラッグ・アンド・ドロップしてください。');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'アプロードの対象部屋を指定してください。個別の部屋にアプロードできれば、対象部屋を選択できるドロップダウンが表示されます。');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'プロパティの代表イメージとして複数イメージがアプロードされる場合には、最初のイメージのみが表示されます。');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'イメージを表示');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'イメージを削除');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'イメージをアプロード');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', '部屋タイプのイメージ');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'プロパティ アメニティのイメージ');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'ファイルを全てアプロード');
//8.0
jr_define('COMMON_PREV', 'Prev');
jr_define('COMMON_MORE', 'More');
jr_define('_JOMRES_DASHBOARD_TODAY', '本日');
jr_define('_JOMRES_DASHBOARD_YEAR', '年');
jr_define('_JOMRES_DASHBOARD_MONTH', '月');
jr_define('_JOMRES_DASHBOARD_WEEK', '週');
jr_define('_JOMRES_DASHBOARD_DAY', '日');
jr_define('_JOMRES_HLEGEND', '記号');
jr_define('_JOMRES_HFILTER', 'フィルター');
jr_define('_JOMRES_HFROM', '送信者');
jr_define('_JOMRES_HTO', '宛先');
jr_define('_JOMRES_HNEW_BOOKING', '新規予約');
jr_define('_JOMRES_HSTATUS_DEPOSIT', '予約金の現状');
jr_define('_JOMRES_HSTATUS_GUEST', '顧客の現状');
jr_define('_JOMRES_HSTATUS_BOOKING', '予約の現状');
jr_define('_JOMRES_HSTATUS_PUBLISHING', '公開の現状');
jr_define('_JOMRES_HSTATUS_INVOICE', '請求書の現状');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', '請求書の種類');
jr_define('_JOMRES_HSTATUS_APPROVED', '承諾の現状');
jr_define('_JOMRES_HSTATUS_CURRENT', '表示の事業');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', '表示する予約：');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', '表示する請求書：');
jr_define('_JOMRES_STATUS_ANY', 'いずれか');
jr_define('_JOMRES_STATUS_PAID', '払済み');
jr_define('_JOMRES_STATUS_NOTPAID', '未払い');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'チェックアウト済み');
jr_define('_JOMRES_STATUS_ACTIVE', 'アクティブ');
jr_define('_JOMRES_STATUS_CANCELLED', 'キャンセル済み');
jr_define('_JOMRES_STATUS_PUBLISHED', '公開中');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', '非公開');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'active予約のある顧客');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', '予約履歴のある顧客');
jr_define('_JOMRES_STATUS_BOOKINGS', '予約');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'サブスクリプション契約');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'コミッション契約');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', '全事業を表示');
jr_define('_JOMRES_ACTION_SET_CURRENT', '選択する');
jr_define('_JOMRES_ACTION_CHECKIN', 'チェックイン');
jr_define('_JOMRES_ACTION_CHECKOUT', 'チェックアウト');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', '予約関連');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'プロパティ関連');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', '顧客管理');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'レポート');
jr_define('_JOMRES_HLIST_GUESTS', '顧客');
jr_define('_JOMRES_HLIST_GUESTS_MENU', '顧客一覧');
jr_define('_JOMRES_HLIST_INVOICES_MENU', '請求書一覧');
jr_define('_JOMRES_HLIST_PROPERTIES', 'プロパティ・事業');
jr_define('_JOMRES_HQUICK_BOOKING', 'QUICK予約');
jr_define('_JOMRES_HDATE_OF_BOOKING', '予約日');
jr_define('_JOMRES_HTWO_WEEKS', '２週間');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', '予約はキャセルされます。キャンセルしますか。');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', '今日のチェックイン');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', '今日のチェックアウト');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', '滞在中顧客一覧');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'ナビゲーションバーの位置');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', '初期設定 （内容の部分）');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'トップに固定される');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'ボタムに固定される');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', '二ビゲーション・ハー色を反転する');
jr_define('_JOMRES_BOOKING_NUMBER', '予約番号');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrapバージョン');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2.');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', '表示する顧客：');
jr_define('_JOMRES_HFIXED_PERIODS', '定期予約');
jr_define('_JOMRES_HDEPOSITS', '予約金');
jr_define('_JOMRES_HBOOKING_FORM', '予約フォーム');
jr_define('_JOMRES_HREQUIRED_FIELDS', '必須項目');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', '太郎');
jr_define('COMMON_PLACEHOLDER_SURNAME', '白馬');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '123');
jr_define('COMMON_PLACEHOLDER_STREET', 'My Street');
jr_define('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', '拡張の設定環境');
jr_define('SIMPLE_CONFIGURATION', '簡易の設定環境');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'リソースのアメニティ');
jr_define('_JOMRES_HRESOURCE_TYPE', 'リソース・タイプ');
jr_define('_JOMRES_HEDIT_GUEST_TYPE', '顧客タイプを編集する');
jr_define('_JOMRES_HEDIT_COUPON', '割引を編集する');
jr_define('_JOMRES_HEDIT_EXTRA', 'オプションを編集する');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', '複数リソーズを作成する');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'リソースを生成する');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'リソースの総数：');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'リソースのタイプ');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'リソースのmax人数');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', '登録リソーズを全て削除しますか？');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');
jr_define('DATATABLES_SINFO', '_START_ 〜 _END_ of _TOTAL_ ');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', '承諾');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', '問い合わせの予約を断る');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', '問い合わせの予約を承諾する');
jr_define('_JOMRES_STATUS_APPROVED', '承諾されました');
jr_define('_JOMRES_STATUS_REJECTED', '断られました');
jr_define('_JOMRES_STATUS_INQUIRY', '問い合わせ');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Bookings require approval or availability confirmation?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.');
jr_define('_JOMRES_ERROR', 'Error');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'メセッジ');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'ファイル');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'ライン');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'トレース');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Emailテンプレート');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Emailテンプレートを編集する');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Emailの件名');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Emailテキスト');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Emailタイプ');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Email名');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Email説明');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'メールのカスタム テンプレート作成は、<a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>に参照ください');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'サイト アドミンへの新規予約メール');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'グローバルpaypalゲートウエーが有効の場合、新規予約が入った際にサイトのアドミニストレーターへ送信されるメールです。');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'ホテルへの新規予約メール');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', '新規予約が入った際にプロパティ オーナーへ送信されるメールです。');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', '顧客への 新規予約のメール');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', '新規予約が入った際に顧客へ送信されるメールです');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', '顧客への確認通知書');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', '予約の受領・確認したことを顧客に送信し通知する手紙又は電子メールです。');
jr_define('_JOMRES_CAN_BE_APPROVED', 'This booking can be approved. All selected resources are available for the selected dates.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Powered by Jomresのリンクをフッターで表示するか？');
jr_define('GUEST_BUDGET', 'お得の目印');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', '「お得の目印」機能を利用しますか?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', '注：Bootstrapを利用するサイトのみ有効! 「お得目印」はプロパティ一覧の機能で、顧客が定義する「お得」の金額に下回るプラオパティにお得の目印（ハイライト）が着きます。サイトの事情により（例えば、複数の通貨を利用する場合等）、相性が悪い場合もあります。このプラグインとFeatured Listings プラグインを同時に利用する場合、プロパティ一覧が表示される際、featured listingを囲むラッパーのclassが自動的にpanel-primaryに変更されます。');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', '名前：');
jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'May');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', ' _TOTAL_ 件中 _START_ から _END_ まで表示');
jr_define('DATATABLES_SINFOEMPTY', ' 0 件中 0 から 0 まで表示');
jr_define('DATATABLES_SINFOFILTERED', '（全 _MAX_ 件より抽出）');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', '_MENU_ 件表示');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', '処理中...');
jr_define('DATATABLES_SSEARCH', '検索:');
jr_define('DATATABLES_SZERORECORDS', 'データはありません。');
jr_define('DATATABLES_SFIRST', '先頭');
jr_define('DATATABLES_SLAST', '最終');
jr_define('DATATABLES_SNEXT', '次');
jr_define('DATATABLES_SPREVIOUS', '前');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SHOWHIDE', 'Change columns');
jr_define('_BOOKING_ONREQUEST', 'Booking on request');
jr_define('_BOOKING_INSTANT', 'Instant booking');
jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Request booking');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');
jr_define('_JOMRES_HLASTCHANGED', 'Last changed');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel Booking Cancellation Email');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Email sent to the property owner when a new booking is cancelled');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Booking Cancellation Email');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Email sent to guest when a new booking is cancelled');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Send test email');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'This is a test email from your booking system.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test email sent successfully');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test email was not sent');
jr_define('_INVOICE_TRANSACTIONS', 'Transactions');
jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Pay now');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'This invoice in now due. Please click the button to select the payment method.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Here's a list of some of the great things you can purchase while making a booking at this property. ");
jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Category');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Give your property a sub-type');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Contact settings');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending');
jr_define('_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- New Guest -- ');
jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Select chart...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, let's get started. First you need to create some rooms for this property.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Create some rooms now');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload an image');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Create some tariffs');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Rooms in the property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'The entire property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Update your address');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');
jr_define('_JOMRES_CONTANT_US', 'Contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Welcome to your new online listing for ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hi, and welcome to your new property on ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "You recently added a new property to our website, and we'd like to welcome you to the family.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'You can see your new dashboard ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' here ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Once you've setup your property you can see how it looks to site visitors by visiting ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' your front page.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(it's not published, so site visitors can't see it yet).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'If you have any questions at all, please ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "and we'll be delighted to answer all your questions.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, our team at ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Let's create some tours!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebook.com or anything else.');
jr_define('COMMON_DOWNLOAD', 'Download');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings. <br> Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Most properties in Jomres have a rental management process. Hotels/B&Bs/Pensions rent out individual rooms, and cottages/villas/apartments rent out the entire property. This is invisible to the property manager, but for them to be able to create tariffs for their property you must first add room types that are appropriate for the property type.
For example, A hotel property type would normally need several room types ( double rooms, single rooms and twins ) whereas a villa can only have one room type, e.g. 2 Bedrooms, 5 bedrooms.
It is possible to create room types for properties like Tours. This allows customers to search for properties like tours only, but the Property manager will not create tariffs for this property type, so the Management Process is not relevant to them.
');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button to create new Room Types.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No bookings/Real estate ( simple listing )');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map colour scheme');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'The property type helps you to define how the property will be booked, for example with hotels you "sell" just one or two rooms at a time, whereas with villas you offer the entire property.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'You can configure the minimum deposit amount to be charged. If you do, then the "Deposit required is cost of the first night?" & "Deposit required is percentage?" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'This figure cannot be less than ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Send an email to site admin when an error occurs?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. ");
jr_define('_JOMRES_FAQ', 'Frequently asked questions');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION', 'Introduction');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES', 'What is Jomres?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES', "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD', 'Can users register on my Jomres site and add their own properties?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD', 'Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES', 'Properties');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES', 'How do I add a new property?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES', "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES', 'Can I import properties from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES', "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS', 'Can I import bookings from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS', "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. ");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES', 'Can I edit email templates?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES', 'Property managers can edit email templates through their toolbar under Settings > Email Templates.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Payments');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS', 'How do I allow properties to take payments?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS', 'You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY', 'Which gateway should I use?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY', "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS', 'When a guest makes a payment for a booking, who gets the money?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS', "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING', 'Troubleshooting');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL', "Booking emails aren't being sent.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL', "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "You can't see the payment gateway after making a booking.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES', 'Jomres License');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'After buying X license, am I forced to purchase renewals once the license has expired?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED', 'My license has expired, can I upgrade Jomres anyway?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED', "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE', 'What software license is Jomres released under?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE', "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'How do I create a property?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Click on Properties > New Property to add a new property.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'How can I see what my property looks like to guests?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Click on Properties > Preview to see how your property looks to guests.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'How do I add rooms?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'How do I set room prices?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'How do I create optional extras?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'How can I take payments online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Can I give discounts?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'When I click New booking, I am taken to the Contact form, why?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'What are Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Images');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'How do I upload images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "What is the 'Main' image?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'What are room feature icons?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'How do I upload room images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'How do I upload slideshow images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'How do I upload Extras Images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP', 'How do I setup currency symbols?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP', "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES', 'How do I enable multiple currencies?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES', "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'How do I save descriptions in multiple languages?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER', 'How many properties can I list?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER', "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'No, you cannot. You can only administer properties you have created or been assigned to as a property manager.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'What are Guest Types/How do I change per person per night?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'What are Room Features?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES', 'Can I make a user a property manager?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES', "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS', 'Plugins');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS', 'What is the Plugin Manager for?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS', 'The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE', 'Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE', "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION', 'How do I install a plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION', "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE', 'Site Structure');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO', 'What does Site Structure mean?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO', "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES', 'What are Property Types?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES', 'In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES', 'What are Property Features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES', "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', 'What are Property Feature Categories?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES', 'What are Room features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES', "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES', 'Why is there a page to edit countries/regions?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES', "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION', 'Localisation/Translation');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO', 'How do I translate things?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO', "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TOURS', 'Tours');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO', 'What are tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO', "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL', 'How do I use Jomres to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL', 'To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR', 'What is the Jintour plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR', 'Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING', 'How do I sell tours and vacation rentals in the same booking?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING', "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS', 'What about if I only want to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS', "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS', 'How can I create a Tour/bookable resource that can be seen in all properties booking forms?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS', "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST', "Ok, I've installed Jomres, what next?");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST', "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now.");
jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Permit number');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Description');
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'Example');
jr_define('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_DESC', 'This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! No problems were found.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Read more');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Read less');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Tourist tax');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Tourist tax rate');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Is percentage?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any e.g. Optional Extras or Rooms, then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any Optional Extras then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>First choose the image(s) you'd like to upload by clicking Add Image or using Drag and Drop. These will appear in the column on the right hand side.</li>
  <li>Above this area, use the \"Choose the resource\" button to choose which resource you want to upload images for. You may be offered the option to choose a specific resource underneath. </li>
  <li> Once you've chosen a resource you can then click the Upload Image button under an image to associate it with that resource. Once an image has been uploaded, it will disappear from the column on the right hand site, and appear in the left.</li>
  <li>Use the Trash button next to existing images to remove images you no longer want to be shown.</li>
  <li>You can change the order that files are shown in the slideshow by renaming them before uploading them, as they are displayed in pages in alphabetical order.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Next to the Resource button, you may see a Preview button. If you click on this you will see a popup that shows you how the currently uploaded images will look in a page. This helps to give you an idea of how the images will look to your customers.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "There is no limit to the number of images you can upload. Images are automatically resized when they are uploaded. You can only upload JPG and PNG files.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideally any images you upload would be at least ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels wide, otherwise they may look fuzzy after they've been uploaded.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Any images you upload cannot be more than ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in size.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Choose the resource you want to upload images for");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specific resource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Images already uploaded for this resource");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Text formatting');
jr_define('_JOMRES_MARKDOWN_DESC', 'You can enter text here using simple Markdown formatting. You don\'t need to know any HTML, just use the buttons to make the information look like you want, or format text according to these examples.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Emphasis');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italics');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Lists");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numbered list item');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text to display');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'It can span multiple lines!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Images');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tables');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Column');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'If set to yes, a slideshow of property main images will be displayed. If set to no, then the first property main image will be displayed.');
jr_define('EDIT_CMS_USER', 'Edit CMS user');
jr_define('BOOKING_MADE_BY', 'Booking made by');
jr_define('_JOMRES_ROUTER_FEATURES', 'Amenities');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Room Types');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'External booking form URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Here you can set an external URL if you want to use a 3rd party website for making bookings. All jomres booking buttons will point to this URL. Leave this field blank if you want to use the Jomres booking form.');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Room Description');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Guest blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT',"Map height (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Map zoom level ");
jr_define('_JOMRES_MAP_MAPTYPE',"Map type ");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Template packages are plugins that can provide override templates for various core Jomres template files.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"This page lists any template files that can be overridden by a template package's template files. If you want to override a certain template file, click on the edit button for that file, on the next page you will be able to choose which version you want to override with. Note, these overrides take priority over both Jomres Core and any Wordpress or Joomla theme/template overrides. You can disable an override by deleting it in the List Template Overrides page.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Template name");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Not overridden");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"You can choose which template file to override the Core template files by changing the dropdown");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");
jr_define('_JOMRES_SELECT_WIDGETS',"Select widgets");
jr_define('_JOMRES_INTERVAL',"Interval");
jr_define('_JOMRES_TIMELINE',"Timeline");
jr_define('_JOMRES_CPANEL_GRID',"Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Select the grid layout of your frontend property management control panel home page.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Town images");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Changing the property type will delete all rooms, tariffs, property settings and reset availability.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager. If you have Core plugins installed, but do not have a valid Jomres license then we <em>do not</em> recommend that you update Jomres as older plugins often may not work with newer versions of Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "If you would like to update Jomres and it's plugins you will need a renewal license. Please visit <a href='https://www.jomres.net/pricing' target='_blank'>our site</a> for more information. In most cases these licenses are 50% of the price of a full license. Please ensure that you have logged into our shop before attempting to purchase a renewal.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Payment method : ");

jr_define('_JOMRES_PRICES',"Buy Jomres");


jr_define('_OAUTH_TITLE',"App key management");
jr_define('_OAUTH_APPS',"REST API client details");
jr_define('_OAUTH_IDENTIFIER',"Identifier");
jr_define('_OAUTH_APIKEY',"Client ID");
jr_define('_OAUTH_SECRET',"Secret");
jr_define('_OAUTH_CREATED',"Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO',"The Client ID and Secret are created for you. The Identifier is so that you can easily identify this key pair.");
jr_define('_OAUTH_SCOPE_TITLE',"Permissions ( what the client can do ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "User permissions");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Property permissions");

jr_define('API_DOCUMENTATION_TITLE',"App REST API documentation");

jr_define('_OAUTH_CONFIG',"API Core configuration");

jr_define('_OAUTH_CONFIG_SHOW',"Show API client configuration options in Jomres main menu?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"You may choose to not show the API client configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define('API_METHODS_TITLE',"API Methods");
jr_define('API_METHODS_DESCRIPTION',"This list of methods is based on your installed API feature plugins and is automatically generated. If you install or delete an API feature plugin you must visit this page to rebuild this list of API methods available on your site.");

jr_define('_OAUTH_REDIRECT_URI',"Redirect URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Give me a name that's meaningful to you, such as My Phone");

jr_define('_OAUTH_GRANT_TYPES',"This system supports two grant types , Client Credentials and Implicit. If you are using the <em>client_credentials</em> flow then you will need both the client id and the client secret. If using <em>implicit</em> then your app would send just the client id and you would log into the system to explicitly authorise that app.");

jr_define('_OAUTH_IMPLICIT_NOTES',"To use the <em>implicit</em> grant type flow, you will need to use this url to authorise your apps. When this url is called, and you have authorised the app the system will issue a token that you apps will then use to call this system's API ");
jr_define('_OAUTH_AUTHORISATION_URL',"Authorisation URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );

jr_define('_WEBHOOKS_CONFIG_SHOW',"Show Webhook configuration options in Jomres main menu?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"You may choose to not show the Webhook configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Webhooks documentation");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration' );
jr_define( 'WEBHOOKS_INTEGRATION_ID', 'Integration ID' );
jr_define( 'WEBHOOKS_INTEGRATION_URL', 'URL or Name' );
jr_define( 'WEBHOOKS_ENABLED', 'Enabled' );

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration' );

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Any webhooks you create will not be triggered as you are not assigned to any properties. Super property managers are not typically assigned individual properties, so you may need a new user for webhook creation.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Any webhooks you create will be triggered against the following properties : ' );


jr_define( 'PORTAL_REVIEWS_LIMIT', 'Reviews limit' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Use this setting to limit the number of reviews shown in the property details page.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Show all reviews' );

jr_define( 'VIDEO_TUTORIALS', 'Video Tutorials' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum deposit value' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "If the calculated deposit is less than this figure, then set deposit to this value instead. This figure might itself be over-ridden if it does not satisfy the site's minimum deposit setting. Leave it set to 0 to not use the setting." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Import existing images details to database');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimental feature. If enabled, images uploaded using the media centre feature will also be copied to your Amazon S3 bucket and served from your Amazon S3 bucket url. When enabling this the first time, you`ll also be promted to import existing images to your S3 bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Replace your default Amazon S3 domain with your CloudFront domain');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Recommended to be enabled. For Windows and Mac OSX only, if libcurl wasn`t built with Schannel or Secure Transport support (the native SSL libraries included in Windows and Mac OS X), you should set this to No.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Once you click this button, please do not interrupt the process and wait for a success or error message. Depending on server speed, this may take a while to complete.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copy existing images to Amazon S3 bucket');


jr_define( 'JOMRES_INCOMPLETE', 'Incomplete' );
jr_define( 'JOMRES_WATING_APPROVAL', 'Pending approval' );
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', 'Property details map' );

jr_define( 'HAS_STARS_TITLE', 'Allows stars classification?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Delete all Jomres data when uninstalling?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'If set to yes, Jomres will delete all it`s database tables when uninstalled. This will delete all Jomres data from db and can`t be undone.');

jr_define( 'TRANSACTION_IDS', 'Transaction id');
jr_define( 'PAYMENT_METHOD', 'Payment method');
jr_define( 'POA_DISPLAY_PRICE', 'POA Price');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'When properties are shown in a list, the system will attempt to find a valid price from configured tariffs based on either today\'s date, or if dates were used in a search, then based on those dates. If it cannot, then it will show POA (Price on application), meaning that the guest should contact you to get a price. If you want, you can configure a price here that will be shown instead of the POA text. This figure would be a "fallback" price to display if no other price can be determined.');

jr_define( 'PLUGINMANAGER_INSTALL', 'You need to install the plugin manager before you can install Jomres plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'You need to update the plugin manager before you can update any installed plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Let's do this!");

jr_define( 'INCLUDEINFILTERS', 'Include in filters?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Property feature filters in Ajax Composite Search can become very long, so you can set this option to No to prevent this feature from showing in the property feature list.');

jr_define( 'REVIEW_REMINDER_PT1', "You have ");
jr_define( 'REVIEW_REMINDER_PT2', " booking(s) that you have not left a review for yet. Please leave a review.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Bookings waiting for reviews");
jr_define( 'REVIEW_NAG', "Nag guests for reviews?");
jr_define( 'REVIEW_NAG_DESC', "Once a guest has been booked out from a booking, the system will remind them to post a review for their booking. Set this option to No to disable this reminder.");

jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Send copies of the booking emails to site admins?");
jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "When enabled, copies of the booking emails sent to property managers will be sent to all site admins too.");

jr_define( 'HIDDEN_ADDRESS_SETTING', "Hide address?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "If you set this option to Yes, then only guests who have already placed a booking on your property will be able to see the property street address. You might want to use this setting to hide the property's exact location if, for example, it is routinely left unattended.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimize images on upload?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'When enabled, images will be optimized for web (file size can be up to 75% smaller). Depending on the uploaded image type, your server needs to have one or more of these libraries installed by the hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define( 'OBSOLETE_FILES_CHECK', 'Obsolete Files Check');
jr_define( 'DATATABLES_COLVIS', 'Column Visibility');

jr_define( 'API_TOKEN_LIFETIME', 'API token lifetime');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');


jr_define( 'ENCRYPTION_TITLE', 'Encryption' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Encryption file location' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Never delete the encryption file** <br/> User data is stored encrypted in tables to ensure that "data at rest" is protected securely, in accordance with GDPR recommendations. By default the encryption key is stored in the file "encryption_key.class.php" in the root of your Jomres installation (typically /public_html/jomres). You can change where the file is stored here. If you do change the location, you must MOVE the file, do not wait for Jomres to create a new version otherwise you will not be able to decode your guests\'s details.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'The information you save here will be used on invoices generated for this property');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR Policies' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Here you can configure how long after a booking or invoice has been created it is removed from the system to ensure that you are compliant with the GDPR.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Booking Retention period (in days)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Invoice retention (non-booking) period' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Other invoices, such as commission and subscription invoices, are not tied to bookings. As a result they will not be deleted when booking invoices and contracts are deleted. Depending on your country, and your own business practices, you will need to configure a different retention period. A typical retention period might be 3653 days, which is 10 years.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Your data' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Some features of this website need to store information about your visit. This is used only to provide service to you, is never shared with anyone else and is deleted when no longer needed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DO YOU GIVE US PERMISSION TO STORE THIS INFORMATION??' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In detail' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'You must consent to us storing this data for you to be able to make bookings on this site. Regardless of whether or not you consent to your data being stored, we will store a cookie on your computer to tell us whether or not you have opted in. This helps us to ensure that we do not constantly ask you whether or not you want to opt in or out and it does not contain any Personally Identifiable Information (PII). If you change your mind you can visit the "App permissions" page at any time to opt in or out.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'The information is stored for different time periods depending on the nature of your visit. So, if  you are just looking around we will store approximate geographical location (country level) information. If you perform searches, then to make search forms more user friendly we will store the last things you searched on. This information is typically stored for a maximum of 24 hours and is only used to make your visit more pleasant.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'When you make a booking with us, by necessity more information is stored.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'The technicalites of the booking form are captured and retained for a maximum of 60 days. This is required so that On Request bookings can be turned into full bookings once a booking is approved, and for analysis by our teams in case there is an issue with a booking. If you were not logged in when you made a booking then we will email you a username and password so that you can view your booking history and exercise your Right To Be Forgotten (RTBF) if you wish to do that.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data entered into the booking form, for example name, email address, real address is stored for a maximum of 365 days after the booking\'s departure date. This information is stored in encrypted form in our database so that only authorised people can view it. If you make a booking then by law we must store your PII whilst the booking is valid. Once the booking has completed, either because it has been cancelled or you have been checked out, then you will be able to exercise your RTBF by logging in and visiting the "Your data" page. Invoice information for completed bookings will still be securely stored in our database to ensure that we abide by relevant tax laws but you will be able to remove all other PII after the booking is completed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'When you consent to your information being stored as described above, we are legally obliged to store this consent in our database. This information will include your IP number and the content of the opt-in form. We will retain this consent notification indefinately (this is a legal requirement).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'You have not yet told us if we can collect Personally Identifiable Information about you' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'You have consented to us collecting the necessary Personally Identifiable Information to take bookings' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'You have told us to not collect Personally Identifiable Information' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'You have not given us permission to collect your private data' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For you to perform certain actions on this website we have to collect Personally Identifiable Information about you, but you have not given us permission to do so.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Change your permissions' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continue viewing properties' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App permissions' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Guest data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'These are the details that are stored for you by the various properties. Different hotels may hold different records, depending on what you entered when you made the booking.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'You do not have any data stored with any hotels in this system' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profile data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'This is the main data set we hold for you, distinct from those you have shared with different properties.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'You have not saved any profile information' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Here is the Personally Identifyable Information that we store on this website for you. It is constructed in JSON (JavaScript Object Notation) format which is a lightweight data-interchange format. It is easy for humans to read and write and it is easy for machines to parse and generate.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'Anonymised' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'Your data' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'By accepting these Terms of Use Agreement (this “Agreement”), you agree that:

<ul>
	<li>
		You are authorized to book hotels through this website;
	</li>
	<li>
		You are at least 18 years of age;
	</li>
	<li>
		You possess the legal authority to create a binding legal obligation;
	</li>
	<li>
		You will use the Site in accordance with this Agreement;
	</li>
	<li>
		You will only use the Site to make legitimate reservations for yourself or for another person for whom you are legally authorised to act;
	</li>
	<li>
		You will inform such other persons about this Agreement that applies to the reservations I have made on their behalf, including all rules and restrictions applicable thereto;
	</li>
	<li>
		All information supplied by yourself to the Website is true, accurate, current and complete; and
	</li>
	<li>
		You will safeguard your account information and will supervise and be completely responsible for any use of your account by yourself and anyone other than you.
	</li>
</ul>
' );
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Security and transparency are important to us.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'We take our responsibilities regarding storing your data very seriously. All Personally Identifiable Information (PII) is stored encrypted in our database using industry standard algorithms to ensure that only authorised users can view this information.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'You can download all of the PII we store for you.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Download now' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Forgotten (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'We believe that you should be able to <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">delete</a> your <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Personally Identifiable Information </a>if you want and if it is practicable. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'You are not registered on this site. Your general location (country) and IP number will be stored for a maximum of 24 hours and then deleted.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'You are not registered on this site and you have opted out of data collection. We have not stored your PII.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'You are registered on the site and do not have any pending or active bookings. We can anonymise most information we currently hold for you. Would you like to do that? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Note : This does not delete your account, it simply anonymises our records so that your account cannot be associated with you as a person. By law we must continue to store your PII for invoicing purposes, however we will delete all guest records.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'You are registered on the site, however you have bookings outstanding and we cannot anonymise your data at this time. This data will be retained for a maximum of one year after the booking has been completed, then it will be deleted, if you do not choose to remove it before that time.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Because you are a property manager on our site, we cannot offer you the ability to have your data deleted automatically. Instead, please contact us directly so that we can assign your property(s) to another manager. Once we have done that and removed your status as a property manager, you will be able to automatically have your data deleted.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Forget me!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'This cannot be undone!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Your data has been deleted!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sorry, you cannot make a booking as your email address is invalid' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'This page gives you the ability to anonymise any guests who have their information stored in the system. This allows you to be compliant with the GDPR, however you cannot edit any other information on this page. To do that you have to log into the frontend as a property manager. The assumption is that a historic guest has contacted you requesting that you allow them to exercise their right to be forgotten. If they are unable to log into the frontend of the site (perhaps a user was not created for them when they booked) then you can use this area to anonymise them once you have confirmed their identity.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymise guest' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Guest data anonymised' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Cannot anonymise' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We need your permission to store your information before you can make a booking. CLICK HERE to give us permission.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'Enable GDPR compliant functionality?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WE DO NOT RECOMMEND THAT YOU DISABLE THE GDPR COMPLIANT FUNCTIONALITY. Jomres has built-in features that helps you to ensure that the Jomres section of your site is compliant with the GDPR. If you disable this feature (and you should not if you are in the EU or you do business with citizens of the EU) then Jomres will automatically assume that every visitor to the site has given their permission to have their personal data enabled. App permission and My Data pages will not be shown and users will not be prompted to give their permission to have the data collected.' );


jr_define( 'EMPTY_TEMP_DIR', 'Empty temp dir' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Temporary files deleted' );

jr_define( 'MACHINE_TRANSLATION', 'Machine translations' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.' );

jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Room Types' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'New Room type' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'You can create and edit room types on this page. These room types will be specific to this property only. When setting up your property you first need some Room Types. You can use either those room typies created by the administrator, or you can add your own. Once you have one or more Room Types you can then create rooms of that Room Type. After you have rooms you can then create tariffs (prices) for those rooms because tariffs are linked to Room Types.' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managers can create room types?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use this option to configure whether or not managers can create their own room types in the frontend. We strongly recommend that you leave this option set to No when you first start using Jomres, especially if you are creating a portal because you should create all room types in the administrator area. Room types created by managers will appear in search forms, but because these room types are specific to individual properties, only one property will be shown in search results if that room type is selected durings searches. If you want so that only Super Property Managers can create room types then leave this option set to Yes and use the Access Control plugin to allow only super managers to view the "Settings > Room types" menu option. Only properties that rent out rooms in the property and use Advanced or Micromanage tariff editing modes can use this option. Villa/apartment type properties will not be able to use it.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Room/property type updated');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Show room types in search options' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'If you choose to allow property managers to create their own room types, you can choose whether or not to show those created room types in the search options where you have chosen to show room types.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "You shouldn't re-use the same email address for each booking.<br/>If you have a unique domain (eg. not a gmail email address) for your business then use the guest's telephone number as their email address. The email address would then look something like 123456@mydomain.com<br/>This will ensure that a new guest is created when you create a booking ." );

jr_define( '_JOMRES_LOGIN_USERNAME', 'Email address' );
jr_define( '_JOMRES_LOGIN_PASSWORD', 'Password' );
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"We are delighted that you would like to book with us again. To be able to manage all your bookings together, it is necessary that you log in so that the booking can be added to your account. This also ensures that you are authorized to use the e-mail address provided." );

jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'If you do not know your password we can send you a password reset email. Please follow the instructions in that email to reset your password.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Forgot your password?' );

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymise your name?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'If you choose to anonymise your name when reviewing we will use your initials instead.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' said ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Reply to this review');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Type your reply to this review here.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Your reply');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Review reply saved');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Before submitting a review reply, you must read the following. By submitting a reply you confirm that you agree to these terms and conditions.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'What are our guidelines for a review reply?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'You are responding to the review of your property. You <em>must not</em> use your reply as a commercial dispute process. If you need to report a review, you must use the "Report Review" button on the listing, and not this review reply page.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Once you have left your reply you will not be able to edit it.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Allowed and Encouraged');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
	<ul>
    <li>A full response to the review.</li>
    <li>Courtesy and Honesty.</li>
    <li>Sensible responses to the reviewer\'s issues (remember, others may be having similar issues but did not take the opportunity to post a review).</li>
    <li>Encourage the guest to get in contact with you directly to solve issues.
    <li>Always remember that future guests will see your response. Make sure to be professional at all times.</li>
	</ul>
	');
	
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Not allowed');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
	<ul>
    <li>Commercial disputes.</li>
    <li>Questions to the Reviewer or Others.</li>
    <li>Questionable Language (including cursing).</li>
	</ul>
	');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last ran');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Invoice numbers');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Use custom invoice numbers?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'You can configure the system to use custom invoice numbers. Only new invoices will be affected.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Start number');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numbers are created consecutively. What should the first number be?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'What format should the invoice number take?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configure the invoice number format here. A format can look like {N}/{D} or {N}/{Y} where N is the automatically generated number, D = date in the format YYYYYMMDD (20190131) or Y = YYYY (2019). Any other alpha numeric characters not enclosed in curly braces will be left alone, so a pattern that looks like {N}/{D}-L would result in an invoice number (21) that looks something like 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Surcharge');
jr_define('_JOMRES_SURCHARGE_DESC', 'An additional charge that will be added to the room when booked (calculated per day)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritise site-wide labels?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Custom text saved in the label editing or the translate lang file strings pages are considered "site-wide" labels. Property managers can also customise labels for each property using the label editing feature in the frontend. This allows a property manager to have different texts for his property, which is useful if the property is different to all of the other properties on the site.<br/> When the system searches for label texts, it will prioritise site-wide texts over property specific texts meaning that if a site-wide text exists for that label, the system will choose that one first. If you set this option to No, the system will prioritise property specific texts over site-wide texts.');

jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // This could be changed if whitelisting, so site "World's best booking site" would change this to "WBBS" or similar.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Vendor and Node Modules are separate (free) packages for Jomres. You can re-install the packages on this page.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Re-install library packages');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Unable to delete property type because it is still be used by some properties. You must change these properties to another property type first before attempting to delete this one. Property UIDs that prevent deletion : ');
jr_define('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Unable to unpublish property type because it is still be used by some properties. You must change these properties to another property type first before attempting to unpublish this one. Property UIDs that prevent the change : ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Random email addresses');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Offer Random Emails');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'You can allow the system to generate random email addresses in the Quick Booking popup in the dashboard. This allows managers and receptionists to create bookings for guests that they do not have email addresses for, it is intended to work as a time saver for sites with many receptionists/managers who understand that these random emails will never be used for real communication, the purpose is to get around the fact that in Jomres all guests must have email addresses. You MUST also provide a domain in the next field.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'This should not be a normal email domain, such as gmail or outlook. Instead it can either be your own domain, or something else entirely, such as "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Upload area');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'No user role');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Suspended');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Deleted from CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'If you like Jomres, please consider leaving a review on one of these sites');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'I`m a nice person, i`ve already left a review');

jr_define('_LICENCE_PROMPT_DEAR', 'Dear ');
jr_define('_LICENCE_EXPIRED', ', your Jomres license key has expired, so you`re missing these great features and benefits! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Plugin updates and new plugin releases');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_EXPIRED_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Restart your membership now!');

jr_define('_LICENCE_INVALID_KEY', 'Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_INVALID_START', 'Start your free trial now!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Users');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Invoices');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Tools');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Reports');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Settings');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Help');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total properties in system');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Published properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Unpublished properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Approved properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Properties requiring approval');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Unpublished reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Review reports ');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "This property's property type is not published, it may not appear in search results. Please contact the site administrator to publish the property type, or change the property type in the Edit Property page.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Update your property type');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Income (paid amounts)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Cannot delete the property feature "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" because it is used by the following property(s) : ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'This page performs a basic test of the REST API using built-in functionality in Jomres. It calls the Jomres REST API to see if it receives a valid response.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'The server called this URL to see if the response is valid : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'The page received this response : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'The test appeared to go as expected, you will probably not have any problem receiving REST API requests from the rest of the Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'The test failed, look in the Response field, if it looks like a lot of html, or you recieved a 404 message, then your server is redirecting calls to another url. This will prevent you from receiving API calls.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'The Jomres App server maintains a list of all Jomres sites. This allows us to build a syndication network. This network is designed to allow our users to display properties from other sites on their own sites and is useful, particularly for new sites, to build up an SEO presence on the net. The goal is for all Jomres sites to work together, building trust in the network. There is no charge for this service.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Your site is not currently listed on the Jomres App server, which is part of the syndication network. This server will try again to add this server to the network on the next 6 page loads. If, after a few page loads, this does not change please check that the connectivity test above passes the tests. Note, localhost servers cannot be added to the network.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Congratulations, your server is listed on the Jomres App server.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Syndicated properties');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Here are some other properties available from our property network');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndication stats');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Congratulations, your server is listed on the Jomres Syndication Network. Your property(s) will start appearing on other Jomres sites soon, if they are not already being shown.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'You installation is not part of the Jomres Syndication Network, therefore your property(s) are not being shown on other Jomres based sites and you can\'t benefit from this free advertising.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Active Jomres installations : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'The total number of Jomres installations that are sharing Jomres Syndication Network properties on their sites. ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'This is the number of properties available in the JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'In total, all of the times a Jomres property has been linked to from another Jomres based site.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) is a free feature available to all Jomres users. It\'s purpose is to provide you with free advertising of your properties on other Jomres based sites. The goal is to help you get your site off the ground fast, offering free advertising so that your properties are recognised and trusted because they are linked to high confidence, high relevance websites that are already well known to the search engines. See this <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank">article on our website</a> and <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank">the manual</a>  for more information.');


jr_define('GUEST_PROFILE_INFORMATION', 'This is your guest profile data, fields with this symbol <i class="fa fa-users" aria-hidden="true"></i>
 are publicly visible, whereas fields with this symbol <i class="fa fa-user-secret" aria-hidden="true"></i> can only be seen by you, your hosts and site administrators.<br/><br/>Hosts can only see private information if you have already created a booking with them.<br/><br/>Your information is safely encrypted and stored in our database using AES-256 encryption.');

jr_define('GUEST_PROFILE_OPTIONAL', 'These fields are optional, however hosts may use the information here to determine if they feel that they can trust you, therefore it\'s better to add the information. Remember, you are asking to stay in their property, and they may turn you down if they feel you aren’t a good fit or that your bio doesn’t contain enough information.');
 
jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Driving license');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Passport number');
jr_define('GUEST_PROFILE_IBAN', 'IBAN number');
jr_define('GUEST_PROFILE_ABOUT_ME', 'About me');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'This "About me" section is publicly viewable so don\'t put in any private information. That said, do make an effort to put as much as you feel comfortable sharing such as your passions, what you do for a living, your hobbies etc. You can use Markup to give it a bit of jazz. Hosts will want to feel that they can trust you with their properties. Make sure that your picture is a real picture of you, not your dog or car (yes, guys, we\'re talking to you!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'Enter any special requirements you may have, such as ease of access needs here. They will not be shown on your public profile but they will be added to the booking information when you make a booking.');

jr_define('VIEW_HOST_PROFILE', 'Host\'s profile');

jr_define('GUEST_PROFILE_TITLE', 'Guest profile');
jr_define('GUEST_PROFILE_TITLE_MY', 'My profile');

jr_define('GUEST_PROFILE_WELCOME', 'Hi, let me tell you a little bit about myself.');
jr_define('GUEST_PROFILE_MY_NAME', 'My name is ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' and I come from the ');
jr_define('GUEST_PROFILE_IN', ' region in ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'My private information');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'We do our best to validate guest and host information however you should do your own due dilligence and decide for yourself whether or not this person is trustworthy.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'My properties');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'This is what I said about this property : ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'I gave this property a rating score of : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_OF_ME', 'What other people say about me');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'What this host said about me');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Review guest');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'My review of this guest ');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Here are some example guest reviews to get the ball rolling : <br/>
	
	<ul>
	<li>(guests name) was a pleasure to host! They left the space clean and were quiet throughout the weekend. They had smooth communication and I look forward to having them stay with me again!</li>
    <li>I loved having (guest name) because they were able to treat the place with respect, have a great time and enjoy the area. They were awesome with renting the space and I hope I get to host them again.</li>
    <li>All of my house rules were respected with (guest name) and they were able to come in and go with ease. I loved having them there as they were respectful and quiet. I highly recommend them to others!</li>
	</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Sorry, I can\'t find that user. Most likely they have not filled in their account details yet.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'Mark as No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Booking marked as No Show');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN statistics for this user');

jr_define('BOOKING_NOSHOW_INFO', 'Booking and No Show information is pulled from the Jomres Syndicate Network at booking time. It is taken from anonymised data and can be used by you to decide if this guest is a risk of not fulfilling the booking. If the system reports that the data is unknown, it is probably because this system is not recognised on the network.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Unknown');
