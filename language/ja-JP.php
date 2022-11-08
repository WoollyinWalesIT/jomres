<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
/**
 * @translator Jeff Graves <jg@winterkit.jp>
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
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', '注：特別な要求は,別当チャージが発生される場合があります。');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', '予約をキャンセル');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', '住所１');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', '住所２');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', '市町村');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', '〒');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', '電話番号');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', '携帯電話番号');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Email：');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'お客がチェックイン済みのため,予約をキャンセルできません。');
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
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'リソース(ビジネス)タイプの説明');
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
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', '特徴・自己PR(概略)');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', '特徴・自己PR(フル)');
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
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'ご予約申請いただき,誠にありがとうございます。ダッブルブッキングを防ぐため,本予約は仮予約に過ぎず,予約確認を通知するメールが届くまで予約は確定していないことに改めてご了承下さい。');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'チェックイン受付');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'チェックインが完了されました。');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'チェックアウト');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', '追加チャージ');
jr_define('_JOMRES_COM_A_TARIFFS', '料金プラン・外貨');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'アプロード');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', '一人利用チャージ');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', '多人部屋の一人利用に追加チャージしたい場合,「YES」に設定して下さい。');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', '料金');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', '予約金を％で設定しますか?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', '予約金が予約料金のパーセントとして設定したい場合に『YES』,円として設定したい場合には『NO』を選択して下さい。');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', '予約金の設定');
jr_define('_JOMRES_COM_A_TARIFFS_PER', '/泊/人');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', ' /泊/人 で料金の場合には『YES』,/泊/室の場合には『NO』を選択して下さい。');
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
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Jomresが実行した際に使われたミニコンポーネントを画面の下部に表示したい場合,「YES」に設定する。「YES」に設定するとinternal redirect機能を無効されます。どのミニコンポーネントがどのタスクを実行しているかがわかるように役に立ちます。');
jr_define('_JOMRES_FILE_DELETE', 'イメージ削除');
jr_define('_JOMRES_FILE_DELETED', 'イメージが削除されました');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', '部屋削除');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', '予約されているため,指定の部屋を削除できませんでした。予約をキャンセルしてからもう一度削除してください。');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', '部屋が削除されました。');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', '部屋アメニティ削除');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', '部屋に適応されているため,指定のアメニティーを削除できませんでした。設定を外してからもう一度削除して下さい。');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', '部屋のアメニティーが削除されました。');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', '設備・プロパティ アメニティ削除');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'プロパティに適応されているため,指定の設備・アメニティーを削除できませんでした。設定を外してからもう一度削除して下さい。');
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
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', '顧客がオンラインで予約できるように,「YES」を選択して下さい。');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', '定期予約');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', '定期予約を設定したい場合には,「YES」を選択して下さい。「NO」の場合,「指定のチェックイン曜日」も「NO」に設定するケースがほとんど。');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', '固定期間:');
jr_define('_JOMRES_COM_A_BOOKING', '部屋予約');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', '最大の延長回数(例：７日の予約期間×３回＝２１日)');
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
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', '空室カレンダーを表したい場合,「YES」を選択して下さい。');
jr_define('_JOMRES_FRONT_AVAILABILITY', '空室状況');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', '空室の日にクリックすると予約フォームが表示されます。');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'ブラック予約');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'ブラック予約の新規設定');
jr_define('_JOMRES_FRONT_DELETEGUEST', '顧客を消却する');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', '顧客が消却されました。');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'この顧客は,他のホテルまたはビジネスにて予約があるため,消却できませんでした。');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO', 'こんにちは');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS', '予約いただき誠にありがとうございます。');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY', '予約の概要は以下です。');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS', '予約等についての質問があれば,気軽に連絡下さい。');
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
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'リソース(部屋)のアメニティが作成されました。');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'リソース(部屋)のアメニティが更新されました。');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'リソース(部屋)のアメニティが削除されました。');
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
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'リソース(部屋)が予約されました。');
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
jr_define('_JOMRES_COM_A_EXTRAS_DESC', '追加オプションを表示されたい場合には,「YES」に設定してください。');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', '追加オプションのHELP');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'ブラック期間の開始日');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'ブラック期間の終了日');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'ブラック予約');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'エラー：選択されたリソースのいずれかが空いていませんでした。');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'ブラック予約(予約不可期間)を適応されるリソース(部屋)');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'ブラック予約は設定されていません');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', '評価の星数');
jr_define('_JOMRES_COM_A_RESET', 'Reset');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', '予約がキャンセルされました。');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'ここで検索');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', '通貨シンボル');
jr_define('_JOMRES_COM_A_CURRENCYCODE', '通貨コード');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', '詳細情報');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', '事前予約を制限しますか？');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', '予約をチェックインする日より何日以内に制限したい場合には,「YES」を選択し,下記のフィールドで日数を設定してください。ユーザーが設定された事前予約制限より前に予約する場合には,チェックイン日が本日に戻されます。');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', '事前予約の最大日数：');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'リソース(部屋)税');
jr_define('_JOMRES_COM_A_ROOMTAX', 'リソース(部屋)税');
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
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', '予約時には,適応される支払額を設定できます。予約時には,予約金(deposit)のみ,又は予約の全額(Full amount)を選択できます。');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'カレンダーで表示される月数');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'リソースの空室状況のカレンダーでは,何ヶ月を表示しますか？');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'ペイメント・ゲートウエー');
jr_define('_JOMRES_COM_A_CANCEL', 'キャンセル');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'ブラック予約を適応する期間の開始日と終了日を選択し,「適応する」のボタンをクリックしてください。 <br/> 
<br/> 
予約不能にされたいリソース(部屋)を選択してください。 <br>チェックマークが表示されないリソース(部屋)には,既存の予約が満了またはキャンセルされるまで,ブラック予約を設けることはできません。<br/>');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '操作されず時間切れになりましたため,ログアウトされました。ログインしてから再び実行してしてください。');
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
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO', 'ホテルの写真をアプロードするため,このフォームを利用して下さい。<br/>同じファイル名のイメージがある場合,上書きされますのでご注意下さい。部屋,ホテルのヘッダーの写真・イメージは「ホテル管理」タブで行ってください。<br/>注意：ここでアップロードされるイメージが /jomres/uploadedimages/*business_uid* のホルダーに保存されます。ホルダーが存在しない場合には,環境設定に特定パースが設定されていない限り,新規に作成されます。');
jr_define('_JOMRES_A_TABS_MISC', 'その他');
jr_define('_JOMRES_A', 'サイトの環境設定');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'グローバル事業アメニティーを利用する');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', '本アメニティにイメージをサインするため,まずはそのイメージを /jomres/uploadedimages/pfeatures/ ホルダーにアプロードしてください。');
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
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', '料金プランを２方式から選択できます。「固定金額の料金プラン」方式は,顧客がいくつかの料金プラン(素泊まり,一泊二食付き等)から選択し,滞在中に毎日に同金額が発生される方式です。「平均方式」は,日により異なる料金プランを設定する場合に使用し,顧客の指定期間中の料金の平均が計算され表示されます。');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'チェックアウトの日付入力を表示しますか？');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'チェックアウトの日付入力ボックスを表示しない場合「NO」に設定してください。チェックアウト日はチェックイン日の翌日とされるので,「NO」の利用に注意ください。');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', '説明の長さ制限');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', '事業・プロパティの説明が表示される際,表示文字数を制限します。.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Used date() format style?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', '公開する');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', '非公開する');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'グローバル事業タイプ・リソースタイプを利用しますか');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', '本事業タイプ・リソースタイプにイメージを指定する前,事業タイプ・リソースタイプのイメージを /images/stories/jomres/rmtypes/ ホルダーにアプロードする必要がある。');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', '入力エラー発生時のBGカラー');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', '予約フォームでのデフォルト国');
jr_define('_JOMRES_JAVASCRIPT_', '★は必須項目');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'ユーザーが事業を自分で登録できるようにしますか?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'ユーザーがサイトアドミンの許可が必要なく事業を登録できるようにしたい場合,「YES」に設定してください。');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', '必須項目は茶色にハイライトされています。');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', '事業・プロパティが登録されました。');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'カレンダーを年始から表示しますか?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', '空室状況のカレンダーは年始から表示されます。');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'リソース(部屋)数');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'プロパティ情報に戻る');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'リソース・ビジネスの種類');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'ランドム検索制限');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', '料金プラン一覧で為替換算リンクを表示しますか?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', '為替レート');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'ユーザーにHTMLでも編集できるようにしますか。?');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', '予約の際にこのフォームをご利用ください。チェックイン日付,泊数,人数等で検索して,空室ありのホテル・部屋から選べます。好ましいホテル・部屋をクリックすると予約に追加されます。その次,追加オプションを付け加え,住所等を入力してください。予約に必要な情報が入力したら,予約の「提出」ボタンが表示され,クリックすると提出できる。');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'このフォームで予約してください。予約の確認・変更,追加オプションの指定,住所等の記入等,必須項目が記入された上,「提出」のボタンが表示されます。');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', '予約の詳細');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', '予約条件を設定して下さい');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', '空室状況');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'リソースを選択して下さい。');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'ビジネスの現状をここで確認');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'サービス');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'サービス');
jr_define('_JOMRES_COM_PERDAY', '１泊に付き');
jr_define('_JOMRES_AJAXFORM_ADDRESS', '顧客情報');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', '詳細を記入してください。(★は必須項目)');
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
jr_define('_JOMRES_VARIANCES_TYPE_TT', '例えば：５歳未満,学生');
jr_define('_JOMRES_VARIANCES_NOTES', '備考');
jr_define('_JOMRES_VARIANCES_NOTES_TT', '例の客タイプについての注意書き,メモなど');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Max人数');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', '予約フォームで,予約に付き,例の客タイプの選択可能な最大人数');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', '％？');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'YESの場合,指定のプレミアム・ディスカウントは％としてベース料金に適応される(割減・割増)。「NO」の場合,￥として適応される。');
jr_define('_JOMRES_VARIANCES_POSNEG', 'プレミアム？');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', '「YES」の場合,設定値はプレミアムとして適応される。「NO」の場合,設定値がディスカウントとして適応される。');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'プレミアム・ディスカウント');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'プレミアムもしくはディスカウントの設定値');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', '顧客タイプの順番が変更されました。');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', '顧客タイプが削除されました。');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', '顧客タイプが作成されました。');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', '顧客タイプを変更する');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', '顧客タイプが変更されました。');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'プロパティ情報のページでリソース(部屋)一覧へのリンクを表示しますか?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', '空室状況カレンダーのみ表示しますか?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', '事業情報ページでは,事業のヘッダーと詳細を表示せずに空室状況カレンダーのみ表示したい場合,「YES」に設定してください。シングル・リソース・プロパティ(シャレー等)を貸し切る事業のみに適している。');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'MIN宿泊数');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', '予約フォームでは,チェックインとチェックアウトの間の最低の必須宿泊数を設定してください。');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', '予約フォームでのリソース一覧で部屋番号を表示する');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', '予約フォームでのリソース一覧で部屋名を表示する');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', '予約フォームでのリソース一覧で料金プランを表示する');
jr_define('_JOMRES_ORDER', 'Order');
jr_define('_JOMRES_REQUIREDFIELDS', '必須');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'チェックイン前の日数');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', '本日(予約日)からチェックインまでの最低日数');
jr_define('_JOMRES_DTV', 'Date type variations');
jr_define('_JOMRES_DTV_DOW', '曜日');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', '顧客タイプのデフォルト');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', '「顧客タイプ」の機能を利用する場合,予約フォームで初客の顧客タイプのデフォールトを設定してください。');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'オンライン予約を登録ユーザーに制限しますか?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'オンライン予約のご利用はWinterkit.jpの登録ユーザーに限られています。登録はこちらへ。');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', '既存予約へのリンクのフォント色');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', '週末のボーダー');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', '予約済み');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'ブラック予約');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', '予約金は端数を切り上げますか?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', '予約金を適応しますか?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', '料金プランは週別で設定しますか?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', '料金プランは,「1泊当たり」もしくは「1週間当たり」で設定できます。「1週間当たり」にしたい場合「YES」を選択してください。');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '１週間に付き');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', '固定チェックインの間の日数：');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', '固定のチェックインが適応されている場合,選択リストに表示される日付の数のことです。(予約済み等により)予約は不可能な日付は表示されないことと,同数の過去の日付も含まれるため表示される日付の数は指定の日付の数より倍になることに注意ください。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'チェックイン日に誤りがあります。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'チェックアウト日に誤りがあります。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', '指定の予約期間の日数は不足しています。最少の宿泊日数は：');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', '指定された予約期間は：');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', '顧客タイプの変形に誤りがあります');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', '顧客の人数等を選択');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', '料金設定に人数が多すぎます。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', '指定のリソース数が顧客数より多いため,入力は無効です。リソースにクリックすると削除されます。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', '指定の人数がベッド数より多いため,入力は無効です。');
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
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', '顧客一人分の清算では,指定数字がパーセンテージの場合には「YES」にし,固定金額の場合には「NO」に設定してください。');
jr_define('_JOMRES_COM_LIMITROOMSLIST', '表示リソース数の制限：');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', '予約フォームで表示されるリソース(部屋)・料金プランの数を制限したい場合,その数を入力してください。「０」の場合には「制限なし」と見なされます。');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', '満室です。');
jr_define('_JOMRES_BOOKITNOW', '予約する');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', '編集モードをグローバルにしますか?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'この設定に注意下さい。「YES」に設定する場合,編集モードが全ての事業,全てのプロパティ タイプ等のカスタム表現に及ばれます。');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', '通貨をグローバルにしますか?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', '全ての事業が統一の指定の通貨を利用させます (e.g. ￥)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'グローバル通貨');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'コンポーネントが囲まれています');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'モジュールやヘッダーを見えないように囲む場合には,「YES」に設定してください。');
jr_define('_JOMRES_COM_WEEKENDONLY', '週末のみ');
jr_define('_JOMRES_COM_WEEKENDDAYS', '週末の曜日');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', '週末を定義するため,曜日を指定できます。週末に適応できる料金プランとできない料金プランは,本設定を自動的に認識され生成されるリソース一覧に反映されます。');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', '国を選択してから,ホテル情報を入力して下さい。');
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
jr_define('_JOMRES_SEARCH_AVL_INFO', 'チェックイン日・チェックアウト日から検索すると,予約可能なビジネスは表示されます。');
jr_define('_JOMRES_SEARCH_PTYPES', '事業タイプ一覧');
jr_define('_JOMRES_SEARCH_RTYPES', 'リソースチアプ一覧');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'デフォルト');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', '商号(ビジネス名)');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', '都道府県');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', '市町村');
jr_define('_JOMRES_SORTORDER_STARS', '星');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'プロパティ情報');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', '予約フォーム');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', '住所を更新する');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', '部屋の空室状況が再確認されます。<br/>(選択はリセットされます)');
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
「簡易モード」：各リソースタイプに当たり１つの料金プランを設定し,今後１０年に有効となる環境です。<br/>
「ミクロマネージモード」：各事業タイプの各リソースの各日(３６５日)かわる料金プランが作成できる環境です。<br/>
「標準モード」：１リソースに当たり,複数の料金プランの選択肢を提供できる環境です。<br/>
<br/>
貴社のプロパティマネージメント考慮に最も効率だる料金プランの設定モードを選択できる環境です。<br/>
「簡易モード」は,リソース(部屋)と料金プランをリソース・事業タイプに他所参照し,リソース(部屋)と料金プランをワンページで設定できるので最も分かりやすい設定環境です。<br/>
「ミクロマネージモード」は,いくつかの料金プランの間で他所参照することにより,数多くの料金プランを作成せずに,料金をより簡単に日別に変動させる設定環境です。細かい料金プランが可能となりますが,顧客があるリソースに複数の料金プランから選ぶことができなくなります。<br/>
「標準モード」では,リソースタイプが軸です。リソースタイプは,リソースにアサインするが,料金プランもリソースタイプにアサインするがため,複数の料金プランを一定のリソースに適応できる設定環境です。例えば,「ダッブル」というリソースタイプに「素泊まり」と「1泊２食付き」等の料金プランを関連させることができます。設定が他のモードより機能性が高いが,細やかな気配りが必要です。特にリソース⇄事業・リソースタイプと料金プラン⇄事業・リソースタイプとの関連性に,そして料金プランの有効期間に誤りがないように注意が必要です。<br/>
<br/>
簡易モードとミクロマネージモードが特定のリソースと料金プランの他所参照情報(関連づけ)が必要とされるため,環境設定モードを切り替える際に料金プランと他所参照データがリセットされる場合があります。<br/>
<br/>
簡易モード→標準モード：問題なし。既存の料金プランはそのまま残されます。<br/>
簡易モード→ミクロマネージモード：既存の料金プランは全て削除されます。<br/>
標準モード→簡易モード：既存の料金プランは全て削除されます。<br/>
標準モード→ミクロマネージモード：既存の料金プランは全て削除されます。<br/>
ミクロマネージモード→標準モード： 既存の料金プランはそのままのこされますが,料金プランの他所参照情報は削除されます。<br/>
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
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', '本プラグインは,料金を需要・供給にあわせてダイナミックに変動させる機能を付け加えます。');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', '多くの事業は,予約の問い合わせ日には,当該の部屋の料金をその日の空室状況により変動させるダイナミックな料金設定を提供したいです。リソース(部屋)または事業の需要が薄い時期には,そのリソースの儒教を高めるためにその料金を自動的に引き下げします。<br/>本プラグインを有効にし設定することにより,ユーザーの検索条件(日,タイプ等)に合致する部屋の空室数により料金が自動的に計算され,表示されます。<br/>「価格変更限界の日数」というのは,チェックインまで価格変更が適応される有効日数を定義するものです。「価格変更限界の予約状況」というのは,割引が適応されるリソースの予約状況(全リソース中,予約済みの割合)の最大限を定義するものです。複数のリソースが予約される場合には,予約割合が増加しても,当初の割引率が全リソースに適応されるのでご注意ください。');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', '価格変動限界の日数　(予約当日とチェックインとの間の日数)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', '予約済みリソースが１０％以下');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', '予約済みリソースが２５％以下');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', '予約済みリソースが５０％以下');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', '予約済みリソースが７５％以下');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', '割引率(％)');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', '割引前の価格：');
jr_define('_JOMCOMP_WISEPRICE_TO', '割引後の価格：');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', 'ダイナミック割引は適応されていません。');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google Maps のAPIキー');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'ギリギリ割');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', '有効?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'チェックインまで間もなくぎりぎり割引を提供する場合には「YES」に設定してください。');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'ギリギリ限界日数');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', '予約がチェックインまでギリギリ限界日数以内である場合には,ギリギリ割が適応されます。');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'ギリギリ割引率');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', '％');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', '割引があなたの予約に適応されました！');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', '宿泊料金のディスカウント：');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', '');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '%ギリギリ割SPー右記前の宿泊はお得！');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '予(節)約！');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '%以上のギリギリ期割引SPー宿泊日を右記前に早めればお得！');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', '料金プラン(微調整可)');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', '事業情報・料金プランのポップアップに料金プランの詳細を表示する場合には,「YES」に設定してください。');
jr_define('JOMRES_COM_A_MINIMALCONFIG', '設定環境を簡易にしますか');
jr_define('_JOMCOMP_AMEND', '予約変更：プロパティ');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', '新規プロパティを選択');
jr_define('_JOMCOMP_AMEND_HEADER', '初期契約');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', '予約金(払い済み)');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', '予約金(未払い)');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', '合計の指定');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', '予約金の指定');
jr_define('_JRPORTAL_CANCEL', 'キャンセル');
jr_define('_JRPORTAL_CPANEL', 'コントロール・パネル');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'デフォールトのコミッション率');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', '事業・プロパティにコミッション率の設定が忘れた場合,自動的に適応されるコミッションの率を指定してください。');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'コミッション率一覧');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'コミッション率');
jr_define('_JRPORTAL_CRATE_TITLE', '名称');
jr_define('_JRPORTAL_CRATE_TYPE', 'タイプ');
jr_define('_JRPORTAL_CRATE_VALUE', '率');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', '通貨コード');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', '登録プロパティ一覧');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'プロパティ名');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', '住所');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', '赤BGの事業・プロパティは,コミッション率が設定されていない。');
jr_define('_JRPORTAL_STATS_PATETITLE', '統計データ');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'コミッション率');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', '予約一覧');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'プロパティID');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', '請求書ID');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', '予約合計');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'アーカイブ日');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Description');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', '唯一の登録ビッジネスであるため,削除できません。公開しない場合には,「非公開」に変更してください。');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', '宿泊料金の合計');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', '/泊');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', '/部屋');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'オプションの合計(税込)');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', '料金サマリー');
jr_define('_JOMRES_CONFIRMATION_ALERT', '契約の制約条件を十分に理解し,それに同意します。');
jr_define('_JOMRES_CONFIRMATION_HEADER', '予約の概要は以下です。必ず確認して下さい。<br /> 変更が必要な場合,「予約変更」のボタンをクリックして下さい。');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', '変更が必要な場合,ここにクリックして下さい。');
jr_define('_JOMRES_CONFIRMATION_AMEND', '予約変更');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', '特別な要求に,以下の空欄をご利用下さい。');
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
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', '予約で「MIN選択リソースの数」が満たした場合,特定の料金プランもしくは部屋タイプが有効になる設定です。この設定により,予約がある程度の規模を超えた場合,特定の料金プラン等を提供することができます。');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'MAX選択リソースの数');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', '予約で「MAX選択リソースの数」が超えた場合,特定の料金プランもしくは部屋タイプが無効になる設定です。この設定により,予約がある程度の規模を超えた場合,特定の料金プラン等をなくすことができます。');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', '注：総合設定環境で固定シングル・パーソン・サプリメント(SPS)を「YES」に設定した場合,ここで設定するSPSは適応されません。ここで設定するSPSは,固定SPSの追加ではなく,代替的設定方法です。');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', '予約なし');
jr_define('_JOMRES_AVLCAL_QUARTER', '25％予約済み');
jr_define('_JOMRES_AVLCAL_HALF', '50%予約済み');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', '75%予約済み');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', '満室');
jr_define('_JOMRES_COM_SEF_NOTINSTALLED', "(Joomla 1.5 のみ)Either she404sef is not installed, or you haven't yet copied /home/winterki/public_html/jomres/libraries/jomres/cms_specific/joomla15/other_component_files/sh404sef/com_jomres.php to /home/winterki/public_html/components/com_sh404sef/sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. <br/> Note, if you are also using Joomfish v2 you may need to ensure that GZIP is switched off in Global Configuration.");
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', '１週間に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', '１日に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', '１予約に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', '１人１予約に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', '１人１日に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', '1人１週間に付き');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', '●●日に付き (min日数)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', '／日数　×　選定部屋数');
jr_define('_JOMRES_REGISTRYREBUILD', 'ミニコンポーネント・レジストリを再構築');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'プラグイン・マネジャーを利用する際,プラグインを追加する際,及びプラグインを削除する際にJomresのプラグインレジストリが自動的に再構築されます。ただし,例のプラグイン関連の機能を利用できない場合には,手動的に再構築できます。プラグイン・マネジャーを利用せずにミニコンポーネントをインストールした際にこの機能を利用し手動的に追加する必要があります。');
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
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', '有効する場合には,事業・プロパティ一覧を表示する全てのJomresコールは,検索オプションも表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', '欄を利用');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'リンクとして定義した検索オプションがある場合,欄で表示されます。(IE br がリンクの尾に追加されます)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'コンボドロップダウン選択で地方を検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', '国・地方・市町村を検索できるドロップダウンボックスが表示されます。本機能を利用する際に以下の地方・市町村検索を利用しないことを進めます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'プロパティ名で検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'プロパティ名で検索できるインプットボックスが表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'プロパティ名をドロップダウンとして表示しますか?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'リンクとして表にしたい場合,「NO」に設定してください。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', '地方・市町村で検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', '地方・市町村を検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'ドロップダウンとして表示しますか?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'リンクとして表にしたい場合,「NO」に設定してください。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', '事業・プロパティ タイプで検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', '事業またはプポティタイプを検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'ドロップダウンとして表示しますか?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'リンクの一覧として表にしたい場合,「NO」に設定してください。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'リソース・部屋タイプで検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'リソース(部屋)タイプを検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'ドロップダウンとして表示しますか?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'リンクの一覧として表にしたい場合,「NO」に設定してください。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'アメニティで検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'アメニティを検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'ドロップダウンとして表示しますか?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'イメージ・tooltipとチェックボクスとして表にしたい場合,「NO」に設定してください。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'プロパティ説明
で検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'プロパティの説明を検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', '空室状況で検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', '空室状況で検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', '金額で検索');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', '金額で検索できる入力が表示されます。');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', '金額の増分原価');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomresは,ここで設定される金額の増分原価と登録の料金プランから妥当なリストを自動的に作成し表示します。');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', '事業・プロパティが選択なしで検索される場合のデフォルトは,プロパティの検索が実行されますが,その結果が(わざと)ランダムになります。本設定は,ランダムに背性される検索結果の数に制限できます。');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'クロン・ジョブの設定とログ');
jr_define('_JOMRES_COM_A_CRON_DESC', 'スード・コロン・ジョブ情報：本機能は,請求書とコミッションのハンドラーに必要です。');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'インストールされているクロンのミニコンポーネント：特定なクロン・ジョブの実行は,以下のリンクを利用ください。クロン・ジョブは出力がないので,そのページに何も表示されません。ジョッブの結果は以下のジョブのログに参照して下さい。');
jr_define('_JOMRES_COM_A_CRON_METHOD', 'メソッド');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'クロン・ジョブにアクセスがない場合には,「ミニコンポーネント」に設定して下さい。アクセスがある場合には,クロン・ジョッブを作成し実行してください。<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i>');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'ブラウザーでロッグを表示する');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'メソドが「ミニ・コンポーネント」に設定している限り実行されます。');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'ログイングしますか');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'ログイングを有効にする場合,「YES」に設定して下さい。ログの結果が以下で出力されます。');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', '詳細ログイング');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'ログイングのアウトプットが多くて細かくなります。');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'テンプレートの編集');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'カスタム・フィールド');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', '予約フォームに表示されるカスタムのフィールドを定義できます。');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'フィールド名(スペース無し)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'デフォルト値');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', '説明');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', '必須状況');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', '最大限の数量');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', '最大限の数量が１を超える場合,選択できる追加オプションの数量が最大限の数量までの数がドロップダウンボックスで表示されます。');
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
jr_define('_JRPORTAL_COUPONS_DESC', '予約インセンティブを設けるため,割引コードを自動作成・通知する機能です。指定される有効期限は,宿泊日ではなく予約日に適応されます。');
jr_define('_JRPORTAL_COUPONS_CODE', '割引コード');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', '有効引換期間(開始)：');
jr_define('_JRPORTAL_COUPONS_VALIDTO', '有効引換期限：');
jr_define('_JRPORTAL_COUPONS_AMOUNT', '割引');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', '割引はパーセント(％)');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'リソース(部屋)のみ');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', '割引コードを利用する場合,記入し「割引権を保存する」をクリックして下さい。');
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
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', '在庫アプデート通知の連絡先(携帯電話番号)');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', '「カントリーコード＋携帯電話番号」フォーマット(日本の例：+81-90-1234-5678)を使用して下さい。携帯電話番号への通知が好ましくない場合には空欄のままにしてください。');
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "本ゲートウエーは,ライブなサーバーが必要であり,localhostにてテスト・利用することはできません。
<br/>
<br/>
Clickatellのゲートウエーを利用する場合,まずClickatellのアカウント及び１つ以上のゲートウエー⇄アプリケーション間の登録接続(APIのsub-productのインスタンス) が必要です。各接続メソッドはsub-productと呼ばれています。アカウント セットアップの手順は以下です。<br/>
<br/>
Step 1：Clickatellアカウントの登録<br/>
(Clickatell アカウントがある場合,Step 2へ進む)<br/>
* http://www.clickatell.com/products/sms_gateway.phpで適しているAPI subproduct (接続メソッド)( Clickatell Central (API) )<br/>
* 登録のハイパーリンクをクリックする<br/>
* 登録フォームを記入し提出する<br/>
フォームを提出できたら,自動的にログインされ,API接続ページへ移動されます。<br/>
Step 2：API接続(sub-product)の登録・追加する<br/>
(必要に応じ,http://www.clickatell.com/login.phpでログインする<br/>
* トップメニューで'Manage my Products' を選択する<br/>
* ドロップダウンメニュー('Add Connection')で好ましいAPI 接続の種類(例：HTTP API)を選択する<br/>
* フォームを記入する。ロックされたIP(本サーバーのIP)を入力し,CallbackをHTTP POSTに設定する。IP callbackをhttp://ドメイン名/index.php?option=com_jomres&task=sms_clickatell_callbackに設定し,ユーザーid, 及びパスワードを設定する。<br/>
API connectionを複数登録する場合には,各接続にユーニックな名称を名付ける必要があります。<br/>
フォームを無事提出できたら,電子証明の詳細(各接続のAPI_ID)が表示されます。JomresをClickatellに接続するために必要なのでメモってください。<br/>
<br/>
ユーザー名,パスワード,及びapi_idを上記の空欄に記入ください。<br/>
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
jr_define('_JOMRES_COM_NEWUSER_DESC', '未登録のユーザーが予約された場合,ユーザーアカウントが自動的に作成されます(Joomlaのみ)。');
jr_define('_JOMRES_CLICKTOREGISTER', '事業・プロパティを登録する');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Winterkitの予約システムご利用いただき誠にありがとうございます。ユーザー情報は次の通りです。');
jr_define('_JOMRES_LATLONG_DESC', 'ピンを住所の位置にドラッグアンドドロップすると緯度・軽度が設定されます。');
jr_define('_JOMRES_CONTROLPANEL', 'コントロール パネル');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', '請求書を表示');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', '請求書一覧を表示');
jr_define('_JOMRES_USER_LISTMYPROPERTY', '新規プロパティを登録');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', '警報：');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', '指定のサブスクリプション プランIDは無効です。');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', '無料サブスクリプション プランのサブスクリプションが１つに限定され,既に使用されています。');
jr_define('_JOMRES_COM_YOURBUSINESS', 'プロパティ名');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'プロパティ名');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'VAT番号');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', '住所１');
jr_define('_JOMRES_INVOICE_NUMBER', '請求番号');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', '適応されるブラック予約の開始日と満了日を選択して「適応」ボタンを押すと,空室状況は再確認されます。 <br/> 
<br/> 
例のプロパティが指定の期間中に予約が入っている場合,キャンセルされるまでブラック予約を登録できません。');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', '指定の期間に予約されているため,ブラック予約ができませんでした。');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', '指定の期間中,ブラック予約は可能です。');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'プロパティの料金設定が「●／人／泊」に設定されていますが,顧客タイプが作成・公開されていません。顧客タイプを作成・公開して下さい。');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', '料金は設定されていないため,予約は不可能です。');
jr_define('_JOMRES_EDITINGMODE_ON', 'Editing mode on');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Editing mode off');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', '予約金を変動型にしますか?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', '変動型の予約金というのは,予約日がチェックイン日より指定日数以内である場合,通常の予約金設定(予約全額の割合)は適応されず,予約全額が適応されます。本機能を利用したい場合には「YES」に設定し,その日数を指定してください。例えば,日数を６０日にした場合,予約日(２月２８)がチェックイン日(３月３１)より３０日間で６０日間以内なので,予約金が予約全額となります。');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'チェックインまでの予約金全額が適応される期間の日数');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', '確認メールが送信されました。');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'エージェントに連絡する');
jr_define('_JOMRES_INVOICE_MARKASPAID', '清算済みに変更');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', '清算済みに変更しました。');
jr_define('_JOMRES_APIKEY_REMAKE', '新規 API キーを作成する');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'シングル プロパティのインストールですか?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', '「YES」に設定されている場合,Jomresのフロントエンド表示はオーサライズされていないユーザーには簡易に表示されます。それぞれのJomresメニュー アイテムによる実行されるサブルチーンは,プロパティ一覧ではなく,唯一の登録プロパティの予約フォームが直接に表示されます。プロパティの管理者は「プロパティ情報」ボタンと「プロパティの新規作成」ボタンが表示されません。１つのプロパティの表示・予約に最適です。<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', '残高の支払');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', '注意：「Global Editing mode」が「ON」のまま「Editing Mode」を利用しています。Global Editing modeの影響が十分に理解しわざと使っている場合には問題ありませんが,十分に理解していない場合,意外な挙動が生じることがあります。十分に理解していない場合,Jomresのマニュアルで「editing mode」について参照してください。');
jr_define('_JOMRES_SUPPORTKEY', 'Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Jomresを購入時にもらったサポート ライセンス キー(別名：license number)です。Jomresのプラグインをダウンロードできるように,有効のキーが必要です。');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Personal discount');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', '事業・プロパティ登録を1カ国に限りますか?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', '「YES」に設定し国を次のフィールドで指定することにより,事業・プロパティをその国のみに制限できます。');
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
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', '宿泊心地(ベッド,館内アメニティ等)を評価してください');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', '金額に見合う価値を評価してください');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'サービスを評価してください');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', '評価サマリー');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', '詳細説明');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', '評価していただきありがとうございます。');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', '評価していただきありがとうございます。Moderatorにレビューされましたら直ちに公開されます。');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', '評価機能を利用しますか?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', '評価を自動的に公開しますか?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', '「NO」に設定する場合,各評価を手動的に公開する必要がある。');
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
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', '通報は,ユーザーにより評価の内容を警告する機能です。評価自体を削除しない限り,通報を削除することはできません。');
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
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', '事業・プロパティ情報のページに予約フォームを表示したい場合には,「YES」に設定してください。「NO」に設定する場合,予約フォームへのリンクのみ表示されます。');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', '指定料金は税込価格?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', '入力する料金が税込価格にしたい場合には「YES」に設定してください。税抜き価格を入力する場合に「NO」に設定してください。');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', '税：');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', '曜日に合わせて料金を設定することができます。曜日のボタンをクリックすると,その曜日は設定の料金に全て変更されます。');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', '日付と料金を合わせて設定すると,期間中に有効な料金設定を設定できる。開始日,終了日,料金を設定し,「料金設定」のボタンにクリックして下さい。');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', '開始');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', '完了');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', '料金');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', '料金設定');
jr_define('_JOMRES_PARTNERS_TITLE', '協力者');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', '部屋');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', '顧客');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', '指定の宿泊人数が部屋に以下の通りに割当されました。変更されたい場合,予約が済みましたらホテルを直接にお知らせください。割当の変更に追加料金が発生されるホテルもありますので,ご了承ください。');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', '本事業・プロパティは公開されていないため,Winterkitの予約サイトで表示されていません。');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'デフォルトの検索結果順');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', '検索の結果が表示される際,デフォルトの優先順位をここで設定できます。');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', '検索結果順位のドロップダウンを表示しますか。');
jr_define('_JOMRES_ROOMMSLIST_STYLE', '部屋一覧のスタイル');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', '予約フォームのスタイルにより,顧客は「クラッシック」ビューでは個別な部屋,「リソース タイプ」ビューではリソース タイプの数(例：ダッブル部屋×２室)を選択します。');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'クラッシック');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'リソース タイプ');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'カレンダー表示：週明けの曜日(日・月)');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', '評価を顧客に限りますか?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'ある事業・プロパティの評価をその顧客に限る場合,「YES」に設定してください。');
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
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>このオプションが[はい]に設定されている場合,マネージャーはCMSに付属のhtmlエディターを表示し,説明にHTMLを入力できます。これは潜在的なセキュリティリスクです。不要なHTMLまたはJavascriptが導入される可能性があります。さらに,不適切な形式のHTMLを入力すると,ページのデザインが損なわれる可能性があります。可能な限り,このオプションを[いいえ]に設定したままにしておくことをお勧めします。</ p> <p>すべてのマネージャーが信頼できるユーザーである場合(自分など)次に,[はい]に設定したままにして,[サイトの構成]の[入力フィルタリング]タブに入力できるさまざまなHTMLタグを変更します。</ p> <p>一方,ユーザーに独自のプロパティを追加して管理するように招待するポータルとしてJomresを再使用する場合,これは理想的な構成ではありません。代わりに,このオプションを[いいえ]に設定したままにする必要があります。[いいえ]に設定すると,マネージャーにマークダウンエディターが表示されます。基本的なフォーマットを入力するために使用できます。大多数のユーザーにとって十分です。</ p> ");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', '全画面表示');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'コンテンツ枠内表示');
jr_define('_JOMRES_PARTNER_DISCOUNT', '協力者業割');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'ユーザ検索');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'ユーザ名の一部を入力すると,当てはまるユーザ名が検索され表示されます。<br/>ユーザ名をクリックすると協力者として追加され,次ページに移動されます。プロパティとディスカウントをそのユーザにアサインできます。');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', '既存の協力者');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', '協力者をクリックすると協力者アドミンのページへ移動されます。');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', '協力者 :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', '企業を検索');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'プロパティ名の一部を入力すると,当てはまるプロパティが検索され表示されます。<br/>プロパティをクリックすると,協力者のポートフォリオに追加されます。割引は設定しない限り適応されないので,必要に応じて設定してください。');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', '対象プロパティ');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'パートナーの割引設定は,プロパティをクリックすると設定できます。');
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'このアカウントは現在一時中断されているため,プロパティの管理は不可能です。');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'プロパティ管理者のアカウントが一時中断されました。');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'プロパティ管理者のアカウントが復帰されました。');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Winterkit.jpの予約システムのアカウントは,現在一時中断されているため,プロパティの管理は不可能です。復帰されるまでプロパティ管理の機能を使えません。');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Winterkit.jpの予約eシステムのアカウントが復帰され,いつも通りにご利用いただけます。全てのプロパティが公開されていることを再確認していただくと幸いです。今後ともよろしくお願い致します。');
jr_define('_JOMCOMP_MYUSER_REMOVE', '「お気に入り」を外す');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', '予約データのアーカイブ');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', '予約データアーカイブは,予約の確認ボタンがクリックされた後にキャプチャされた予約情報の生のダンプです。日付にカーソルを合わせると,生データのダンプが表示されます。情報はXXX__jomres_booking_data_archiveテーブルに保存されます。');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'アカウント編集');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'ユーザーをプロパティマネージャーとして追加するには,最初にユーザー名の最初の数文字を上のフィールドに入力します。正しいユーザーが見つかったら,その名前をクリックして選択し,次にどのプロパティを選択します(s)のマネージャーである必要があります。ユーザーは<em>すでにCMSのユーザーである必要があります</ em> ');
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
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'jqueryを活かすテンプレートを利用している場合,「NO」に設定できます。This MAY resolve jquery conflict issues on some templates, but not all.');
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
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'プロパティ管理者がリソースを予約する場合,その予約もコミッションを発生しコミッション請求書に追加されますか?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', '管理者のコミッション請求書が「未払い」と見なされると自動的に管理者権限を一時中断しますか?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', '自動一時中断の限界日数');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', '管理者のコミッション請求書の支払が「未払い」と自動的に見なされ,管理者のアカウントが一時中断されるまでの日数を設定してください。');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', '特有の言語環境');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'ホテル以外の事業タイプ(例えば：レンタカー)の予約を受ける場合,特有の言語のある事業タイプにふさわしいラベル等が蓄積されている個別な言語ファイルから読み込まれ,妥当な表現が表示されます。レンタカー事業を例えば,Jomresは,まず現在使われている言語(例のため,日本語=ja-JPとします)を認識します。その次,事業のサブフォルダー /'.JOMRES_ROOT_DIRECTORY.'/languages/rentalcar で試用中の言語の言語ファイル(ja-JP)を探し,見つかった場合に利用されます。見つからない場合には,同サブホルダでのen-GBファイル(Jomresのデフォルト言語はイギリス英語)が利用されます。rentalcarのen-GBファイルも見つからない場合には,/'.JOMRES_ROOT_DIRECTORY.'/languages での使用中の言語ファイル(ja-JP)が利用されます。Note that if you create a new property type, then a copy of the current language file is made in a subdirectory under /'.JOMRES_ROOT_DIRECTORY.'/language with a name that reflects the new property type\'s description.');
//4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Jomresの詳細設定環境');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'JomresのjQuery UI libraryをロードしますか?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', '料金(降順)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', '料金(昇順)');
//4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', '料金サマリー等での表示料金の単位をどのように表示しますか(１泊当たり・１週間当たり・１ヶ月当たり等)？');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', '１泊当たりの料金');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', '１週間当たりの料金');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '１ヶ月当たりの料金');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', '１人当たりの料金');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', '週間で');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'ヶ月で');
//4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', '人数
の検索方式を選択してください。?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', '全ての検索モジュールはこの設定に影響されます。人数が検索される際,以下の方式から選べます。<br/>「指定人数以下」(４人の検索結果：２人部屋×２,３人部屋＋1人部屋,４人部屋)<br/>「指定人数同等」(４人の検索結果：４人部屋のみ)<br/>「指定人数以上」(４人の検索結果：４人部屋,５人部屋,６人部屋等) ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'ご注文の処理を行っています。 Paypalに移動するまでしばらくお待ちください。');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', '５秒以内にpaypalへ移動されない場合...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'ここをクリック');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', '有効宿泊期間(チェックイン)：');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', '有効宿泊期間(チェックアウト)：');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', '顧客名：');
jr_define('_JRPORTAL_COUPONS_DESC_478', '予約のインセンティブとして,クーポン コードを発行し顧客に提供できます。<br/>
クーポンの有効引き換え期間を設定する「有効引換期間(開始)」・「有効引換期限」に対して,「有効宿泊期間(チェックイン)」・「有効宿泊期間(チェックアウト)」は宿泊の有効期間を設定します。顧客が有効宿泊期間外の宿泊期間が入力された場合,割引が期間外の日々は通常価格は適応されます。<br/>
クーポンの対象顧客を指定の顧客のみに設定したい場合,ドロップダウンでその顧客名を選択してください。');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'クーポンにより,予約が ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' → ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_NINARIMASHITA', ' になりました。');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Jquery UI javascriptとCSSのファイルを読み込みたくない場合,「NO」に設定してください。');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'JomresのjQuery UI CSS libraryを読み込みますか?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', '「NO」に設定することにより,jquery UI CSS のファイルが無効になり,読み込まれません。');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', '税込金額');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'プロパティが未公開された');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', '通貨換算の機能を利用しますか?');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', 'Jomresのオンライン通貨換算の機能を利用する場合,ユーザに通貨換算のドロップダウンが表示され,料金がユーザに指定された通貨で表示されます。換算された料金の側に元通貨の料金も [ ]で表示されます。');
jr_define('_JOMRES_CONVERSION_DISCLAIMER', '外国為替市場の継続変動及び購入日と取り引き登録日が異なるため,このツールで表示されるレートとそれに基づく外貨価格はあくまでも参考です。円以外の通貨で表示される価格の正確性は一切保証できず,ルールの利用に関しては一切責任を負いません。');
//5.2.1
//5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', '通貨の換算・通貨コード');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP認識APIキー');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'JomresがIPinfoDBという無料のサービスを利用することにより,ユーザの国を認識し,通貨コードのドロップダウンを自動的に設定するできるが,APIキーが必要です。<a href="https://www.ipinfodb.com/login" target="_blank">IPinfoDB</a> で登録し入手できます。');
jr_define('_JOMRES_DEBUGGING_TAB', 'デバグ環境');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', '宿泊料金(税抜)');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', '宿泊料金(税込)');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'リソース税金：');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', '予約フォームを開く');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', '物件情報に戻る');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', '自動的に選択する?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', '残高(予約金を除き)');
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
jr_define('_JOMRES_WHOLEDAY_DESC', 'デフォルト設定は,予約期間が泊数として認識されます(例えば,　１月１日 '.date('Y', strtotime('next year')).' から１月２日 '.date('Y', strtotime('next year')).' までの予約は１泊として認識されます)。「YES」に設定する場合,上記の例の予約は２日として認識され,料金が1泊ではなく２日として計算されます。');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '１人に付き');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', '１人１日に付き');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'チェックイン');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'チェックアウト');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', '日間 × ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'チェックアウトの日付が誤っています。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', '指定の予約期間が短過ぎます。チェックインとチェックアウトの間に必要な日数は：');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', '滞在期間のMIN日数：');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', '滞在期間のMIN日数はチェックインとチェックアウトの間に必要とされる日数です。1日の場合,チェックインとチェックアウトが同日に設定できるとのことになります。ただし,予約エンジンが,確認する指定期間に有効の料金プランによるMIN予約期間も満たさなければなりません。');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', '料金サマリーと概算を /日・/週・/月 にしますか ?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', '1日に付き');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'チェックイン日までのMIN日数');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', '予約日からチェックイン日との間のMIN日数を設定できます。');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', '事前予約を「YES」に設定すると,ユーザがチェックイン日より次のフィールドで設定する日数前に予約しようとする場合,チェックイン日が予約日に戻されます。');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'チェックアウト日の入力を表示しますか?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'チェックアウト日の入力フィールドをユーザに表示したくない場合,「NO」に設定してください。デフォルトのチェックアウト日はチェックイン日の翌日に自動的に設定されるので,気をつけて変更して下さい。');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', '定期予約(決まった日数)のみを受けたい場合,「YES」に設定してください。定期の予約の設定を「NO」にする場合,決まった曜日にチェックインさせたい場合を除き,固定のシェックイン曜日を「NO」に設定すべし。固定のシェックイン曜日も「YES」にすれば,空室状況カレンダーに表示されるリンクが非常に限られます。');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', '固定のチェックイン曜日');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', '固定の予約金を提供するサイトのみに適応。固定のチェックイン曜日を設定してください。');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', '固定のチェックイン曜日');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', '固定のチェックイン期間の日数：');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', '固定のチェックイン日を選択する場合,日付のドロップ ダウンボックスに表示される項目数です。空室状況により予約が不可能な日付は表示されません。Note that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', '／人／日');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', '料金を 1人当たり1日に付き により計算したい場合,「YES」に設定してください。「NO」に設定される場合, １部屋当たり1日に付き により計算されます。');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', '変動型の予約金というのは,予約日がチェックイン日より指定日数以内である場合,通常の予約金設定(予約全額の割合)は適応されず,予約全額が適応されます。本機能を利用したい場合には「YES」に設定し,その日数を指定してください。例えば,日数を６０日にした場合,予約日(２月２８)がチェックイン日(３月３１)より３０日間で６０日間以内なので,予約金が予約全額となります。');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', '多くの事業は,予約の検索日に,当該の部屋の料金をその日の空室状況により変動させるダイナミックな料金設定を提供したいです。リソース(部屋)または事業の需要が薄い時期には,そのリソースの儒教を高めるためにその料金を自動的に引き下げします。<br/>本プラグインを有効にし設定することにより,ユーザーの検索条件(日,タイプ等)に合致する部屋の空室数により料金が自動的に計算され,表示されます。<br/>「価格変更限界の日数」というのは,チェックインまで価格変更が適応される有効日数を定義するものです。「価格変更限界の予約状況」というのは,割引が適応されるリソースの予約状況(全リソース中,予約済みの割合)の最大限を定義するものです。複数のリソースが予約される場合には,予約割合が増加しても,当初の割引率が全リソースに適応されるのでご注意ください。');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', '価格変動限界の日数　(予約当日とチェックインとの間の日数)');
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
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'オーバーライド：宿泊料金(合計)');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'オーバーライドを保存する');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', '新規のユーザ登録があった際,そのユーザにログイン詳細をメールで送信しますか?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'ユーザ新規作成のオプションが「YES」に設定されていて,ログインの詳細をメールされたくない場合には,この設定を「NO」に設定してくださ。新規ユーザをメーリング リストに追加する際に便利な設定です。');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', '予約フォームの合計サマリーで税額を個別に表示しますか?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', '予約フォームで税額を表示したくない場合には,「NO」に設定してください。');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', '予約キャンセルのMIN日数');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'ユーザが予約をチェックイン日より何日以内であれば,キャンセルできない期間を設けることができます。チェックイン日までキャンセルできない期間の日数をここで指定できます。');
jr_define('_JOMRES_EDIT_PROFILE', 'プロフィールを編集');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'アサインされたプロパティ タイプ');
jr_define('_JOMRES_IMAGE', 'イメージ');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'アルファベットをクリックするとその文字から始まる名称の事業・プロパティに絞り込まれます。該当のプロパティ一覧が表示されたら,コミッション レートをプロパティにアサインできます。「編集」のボタンをクリックするとその事業・プロパティの情報を見,詳細を変更できます。');
jr_define('_JRPORTAL_TAX_RATE_EDIT', '税率を変更');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'カスタム フィールドを編集');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'License server username');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Jomresのライセンス サーバーでユーザ名とパスワードがある場合,ここで入力してください。ライセンスに含まれているプラグインをアクセスできるようになります。有効のJomres Support keyを上記に記入・保存した場合,ここでユーザ名・パスワードを記入する必要はありません。');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', '現在のJomresバージョン：');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', '最新のJomres バージョン：');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', '注意：Jomresのより新しいバージョンがあります。早めに更新することを進めします。');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Jomresへようこそ。Joomlaの最も愛されている予約システムを利用いただき,ありがとうございます。JomresのSolo,Silver,又は Goldのライセンスを購入したい場合, <a href="https://www.jomres.net/prices" target="_blank"> Jomresの開発者サイト</a> に参照して下さい。');
jr_define('_JOMRES_PRODUCT_INFORMATION2', '本システムは,１件の簡易予約サイトから,複数の国やある複数のプロパティを所持している複数のプロパティ管理者が複数の言語で利用できる予約サイトまで,どの予約に関するニーズがあっても,柔軟に対応できるシステムです。「Getting started」のツアからはじめ,初の事業やプロパティを登録しながら,本システムの利用が楽になれることができます。分からなくなってしまった場合には,いつでも「HELP」ボタンを押すだけで,追加説明があり,参考になります。');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', '対象プロパティ');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', '代替えの SMTP設定');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', '代替えの SMTP設定を利用したい場合,「YES」に設定してください。PHPメールの機能をブロックするウエブ ホストがますます増えているので,Jomresが普段に使うホストCMS(Joomla等)のメール設定を,ここでオアーバーライドでき,カスタムのメール設定に変更できます。');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', '代替えのホスト');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'smtp メール サーバーに変更して下さい。');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', '代替えのポート');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'smtp ポートにに変更して下さい。');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', '代替えのプロトコル');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', '利用されるsmtpサーバーの設定により,空欄にする,もしくはsslまたは tlsに変更する必要があります。分からない場合,SMTP　プロバイダーに問い合わせしてください。');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'authenticationを利用しますか');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'SMTP サーバーに必要とされる場合,「YES」に設定してください。指定のユーザ名とパスワードが利用されます。');
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
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'この機能により,メーン メニューどのプラグインがどのアクセス レベルに表示されるかを設定できます。 オプションは以下です。00009 オプションは通常の登録ユーザ・パブリックに表示されます。00010 オプションはフロント・受付によく使われる機能です。00011 オプションはプロパティや料金等の初期設定・編集と設定環境に時々に使われます。');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', '受付');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', '詳細のアクセス制御');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', '「YES」に設定すると,アクセス制御の設定環境で詳細のアクセス制御が表示されます。');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "ただし,これらの設定は接続先の基になるスクリプトを制御しないため,たとえば<i> 00009user_option_03_search </ i>を「Manager」に設定した場合でも,Jomresを知っているユーザーは次の方法でj06000search.class.phpを呼び出すことができます。 ブラウザのアドレスバーにhttp://www.domain.com/index.php?option=com_jomres&task=searchと入力します。 このメニューアクセスコントロールは,Jomresメインメニューに表示される内容を制御するだけなので,これは意図的なものです。 より厳密な制御が必要な場合は,[サイト構成]-> [フルアクセス制御]オプションを[はい]に設定し,[メニューアクセス制御]オプションに再度アクセスしてください。");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', '詳細
のアクセス制御');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>この機能は上級ユーザーのみを対象としています。目的がわからず,使用する特別な理由がない場合は,サイト構成に戻り,[フルアクセス制御]オプションを[いいえ]に設定してください。</ strong> <br/>
この機能を使用すると,誰がどのミニコンポーネントにアクセスできるかを制御できます(システムにハードコードされている一部の例外を除く)。スクリプト名の横のアクセスレベルが[デフォルト]に設定されている場合,[フルアクセス制御]オプションを[はい]に設定すると,<strong>誰でも</ strong>アクセスできないはずのスクリプトにアクセスできるため,これを使用する場合はここにリストされている<strong>すべて</ strong>のJomresミニコンポーネントのアクセス制御レベルを設定する必要がある機能。これらのミニコンポーネントの機能がわからない場合は,この機能をまったく使用しないことを強くお勧めします。<br/>
Jomresでは,アクセスレベルはピラミッドに従うため,スーパープロパティマネージャーはマネージャーよりも優れています。要するに,スーパーマネージャー>マネージャー>受付係>登録済み>未登録。したがって,登録ユーザーがミニコンポーネントにアクセスできる場合は,受付係,マネージャー,スーパーマネージャーもアクセスできます。<br/>
管理者エリアのミニコンポーネントは制御できないことに注意してください。管理者領域の誰もが,スクリプト(特にこのスクリプト)へのアクセスをブロックされるべきではないという点で,信頼できるユーザーと見なされます。
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', '警告：Yフルアクセス制御が有効になっていますが,アクセス制御設定をカウントし,制御する必要のあるミニコンポーネントの数と比較しました。2つが一致しないため,制御されていないスクリプトがある可能性があります。 これはセキュリティの問題である可能性があり,アクセス制御機能にアクセスして適切なレベルが適用されていることを確認することにより,すぐにこれを解決することをお勧めします。');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', '対象プロパティのアドミン権限を与えられたユーザ');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'メールアド');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'モデル');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'パラメーター');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'フォース');
jr_define('_JOMRES_METATITLE', 'メタタイトル');
jr_define('_JOMRES_METADESCRIPTION', 'メタ記述');
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
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'プロパティ情報の編集ページにあるGoogle地図で,初期のピン位置を緯度・軽度を設定することにより指定できます。');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Jomresからのメールをどのメール アドから送信しますか?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', '空欄にすれば,このオプションが無効になります。Jomresは,顧客にメールする際に,ホテルのメール アドを利用します。しかし,メール サーバーが第三者のメール アドから送信することを拒否する場合もあります(つまり,オーソライズされた１つのメール アドに限られます)。拒否されている場合,全てのシステム メールの送信者欄に表示されるメール アドを入力することができます。');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'リスト ビュー');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', '写真 ビュー');
jr_define('_JOMRES_COMPARE', '比較');
jr_define('_JOMRES_REMOVE', '取外す');
jr_define('_JOMRES_RETURN_TO_RESULTS', '検索結果に戻る');
jr_define('_JOMRES_ADDTOSHORTLIST', 'お気に入りに追加');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'お気に入りから削除');
jr_define('_JOMRES_VIEWSHORTLIST', 'お気に入りを表示');
jr_define('_JOMRES_COOKIEPOLICY_1', '重要：クッキーの利用方針');
jr_define('_JOMRES_COOKIEPOLICY_2', 'ユーザーにとっての関連性や利便性を向上するため,このサイトはクッキーを利用しています。');
jr_define('_JOMRES_COOKIEPOLICY_3', '続きを読む');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EUの法律により,クッキーを利用しているか否かを明記することが義務付けられています。');
jr_define('_JOMRES_COOKIEPOLICY_5', '検索エンジンと予約エンジンは,指定された情報,選択されたオプション等を利用するため,保存する必要があります。ブラウザーを区別するクッキーという小さなファイルをそちらのパソコンに保存する必要がある。ただし,そちらのディスクを利用し保存することを許可していただかないと,Jomresは必要な情報を保存できません。よって,本サイトのご利用は非常に限られます。');
jr_define('_JOMRES_COOKIEPOLICY_6', 'クッキーの利用に同意する');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', '必須の予約金を初夜の料金にしますか?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', '料金は日別(夜別)に積算されます。予約金を初日(初夜)に相当する金額に定義したい場合,「YES」に設定し,以下のオプションをスキップして進んでください。');
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'お気に入りは指定されていません。');
jr_define('_JOMRES_SAFEMODE', '安全モードを有効にしますか?');
jr_define('_JOMRES_SAFEMODE_DESC', 'Jomresのプラグインを全て無効にし,コアの機能のみ利用させる「安全モード」に切り替えられます。');
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
jr_define('RECAPTCHA_INFO', 'reCaptchaというのは,フォームの利用者が人間でいることを確かめる仕組みで,プロパティ管理者がローボットにスパムされないように設けています。問い合わせフォームを利用する場合, <a href="http://www.google.com/recaptcha" target="_blank">Google reCaptcha</a> のHPに登録しドメインを設定した上,Public keyとPrivate keyを与えられます。 キーを以下のフィールドで記入して下さい。Google　reCapcha は無料のサービスです。');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Public key');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Private key');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', '仮押えのタイムアウト');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'ダッブル ブッキングの可能性をなくすため,ユーザが予約フォームに入っているリソース(部屋)場合,そのリソースが仮に押さえられ,他のユーザの検査結果に出ないようになっています。仮押えのタイムアウトは,３６００秒(つまり1時間)が経過したら解除されるように設定されているが,ここでタイムアウトの秒数を変更できます。');
jr_define('_JOMRES_BOOTSTRAPSWITCH', 'Jomresのブートストラップ テンプレートを有効にしますか?');
jr_define('COMMON_ACTION', '進む');
jr_define('COMMON_VIEW', '表示');
jr_define('BACKTOTOP', 'トップ');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', '弱');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', '強');
jr_define('_JOMRES_INPUTFILTERING', '入力 フィルター');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', '入力 フィルターの強度');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', '入力されたデータは,セキュリティを高めるため,データバエースに保存する前に洗浄されます。まずHTMLタグが抜けれ,その次にPHPの変数フィルターがかけられてから記録されます。ただし,HTMLを許可する場合もあります(例えば,プロパティ情報ページのテキスト入力等)。その場合,完全洗浄ではなく,HTMLの一部を許すHTMLフィルターを選択できます。HTMLフィルターは,「弱」または「強」の２強度から選べます。データを入力する人が信頼されているユーザ(例えば,ウエブマスター,サイト アドミン)のみに限る場合意外,「強」に設定することを推薦します。「強」に設定しても,どのタグが許されるかを細かく指定できます。');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', '入力の許されるタグ');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "HTMLフィルターに許されるタグを指定できます。デフォルトは p,b,strong,a[href],i (i.e. Paragraph, Bold, Strong, Links and Italics)に設定されています。タグの詳細については,<a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a> でHTMLフィルターのドキュメンテーションに参照してください。変更できるにもかかわらず,デフォルトのままにしておくことが推薦されます。");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', '許される入力');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', 'HTMLが許される入力を指定できます。このリストに追加される入力は,通常のHTMLを全て抜くプロセスの代わりに,HTMLフィルターに通されます。HTMLが許されるフォームのデフォルトは：property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimersになっています。 フォームの追加は,スペースで区切ってフォーム名を追加してください。');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'プロパティ情報をタブで表示しますか?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'プロパティ情報をタブで表示する場合,「YES」に設定して下さし。');
jr_define('COMMON_PRINT', '印刷');
jr_define('COMMON_EDIT', '編集');
jr_define('COMMON_COPY', 'コピー');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Joomla 3はツイッターのBootstrapフレームワークを初期設定により利用しているため,Jomresのテンプレートはこれを利用しています。JomresをJoomla 3で利用している場合,デフォルトは「YES」に設定されます(「NO」に設定できるが,推薦できません)。JoomlaのバージョンがJoomla 3未満の場合,JomresのBootstrapテンプレートや機能性を選定できるが,デフォルトは「NO」に設定されます。');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'フロントエンドにJomresのブートストラップ テンプレートを利用しますか?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', '類似の物件はいかがでしょうか');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', '顧客の国を自動的に認識しますか?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', '顧客の初予約の際,国を自動的に認識します。予約フォームで固定の国を初期表示したい場合には,「NO」に設定し,次の欄で指定できます。');
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
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', '翻訳機能を利用してラベル等を事業に特化したり,国語を翻訳したりした場合には,これで言語ファイルにエクスポートすることができます。アウットプットをコピーし,新規のphpの言語ファイールに張り付けた上,言語ファイルをJomresサーバーへアプロードすることができます。マニュアルに参照ください。');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'ロケーションを翻訳する');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', '言語ファイルのストリングを翻訳する');
jr_define('_JOMRES_COM_NOTAMANAGER', 'エラー：現在ご利用のユーザが万能の管理者ではないため,本機能をこのままでご利用できません。利用に当たり,「プロフィールを表示」の機能を使用し,「管理者」や「万能の管理者」として許可を得た上,もう一度試してみてください。');
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'プロパティ一覧のデフォルト表示');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'MIN宿泊数');
jr_define('_JOMRES_NIGHTSFOR', ' 泊当たり ');
jr_define('_JOMRES_AGENT', 'エージェント');
jr_define('_JOMRES_AGENT_DETAILS', 'エージェント詳細');
jr_define('_JOMRES_AGENT_LISTINGS', 'エージェントのリスティング');
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', '新規プロパティの表示を自動的に許可しますか。');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', '本オプションを「NO」に設定する場合,新規プロパティが万能管理者にyろい手動的に許可されるまで表示されません。');
jr_define('_JOMRES_APPROVALS_MENU_NAME', '許可リスト');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', '本プロパティは許可待ちです。許可されましたら表示できるようになります。');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', '本プロパティは許可待ちのため,表示することはできません。もう少々をお待ちください。');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', '許可待ちの新規プロパティ');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', '新規プロパティが登録され,あなたの許可を待っています。以下のリンクをクリックし,許可して下さい：');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', '登録プロパティの許可されました。');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'おめでとうございます。御社のプロパティが許可されました。以下のリンクをクリックすると,プロパティのコントロール パネルへ移動できます：');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', '地域名称は翻訳可能です。');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', '非常に早いサーバーを利用していない限り,「NO」のままにして起くことを進めします。大量の地域名称があるため,メモリーが沢山使われ,検索のスピードが非常に大幅に落ちます。');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', '顧客がチェックアウトされました。');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', '入力されたメールアドレスが既に登録されています。あなたのメールアドの場合,ログインし,予約して下さい。');
jr_define('JOMRES_TAPTOCALL', '電話する');
jr_define('JOMRES_NEWREVIEW_SUBJECT', '新規評価：');
jr_define('JOMRES_NEWREVIEW_MESSAGE', '右記のプロパティが新規に評価されました：');
jr_define('JOMRES_NEWREPORT_SUBJECT', '評価の新規通報');
jr_define('JOMRES_NEWREPORT_MESSAGE', '右記のプロパティの評価が通報されました：');
jr_define('JOMRES_SUPERIOR', '優秀');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', '合計(税抜)：');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', '合計(税込)：');
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
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'GmapのPoints of Interest(見所)を表示しますか？(競合会社も含まれる可能性があります。)');
jr_define('_JOMRES_METAKEYWORDS', 'メータのキーワード');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'アクセス情報は,QRコードをスキャンし表示できます。');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', '入力されたVAT 番号が正しくないようです。BE805670816B01というような番号です。');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', '入力されたVAT番号が無効です。VAT番号の有効性をEuropa VAT Number validation webservice (VIES)に確認してください。');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'VAT番号が確認できましたので,ご利用できます。');
jr_define('_JOMRES_TAX_RULES_LIST', '税ルールを表示');
jr_define('_JOMRES_TAX_RULE', '税のルール');
jr_define('_JOMRES_TAX_RULE_INFO', '税のルールは,別国等の個別の税制度のルールを定義しています。「アカウントを編集」のページでアカウントを正しくアプデートされている登録ユーザがログインされている場合に,そのユーザの予約に適応されます。本機能は,VAT対象外の地域にいる顧客の予約をより簡単に対応できることを目標していて,所在地によりルールを作成する必要はない可能性もあります。');
jr_define('_JOMRES_TAX_RATES_IMPORT', '税率をインポート');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'EUの税率を自動的にインポートできます。注：インポートする場合,既存の税率情報が削除されます。');
jr_define('_JRPORTAL_TAX_RULE_EDIT', '税ルールを変更');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', '本プロパティのVAT番号');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', '本プロパティのVAT番号を入力してください。');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT番号が確認できました。');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT番号が確認できませんでした。');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'ここで入力された事業体の情報はコミッションやサブスクリップションの請求書に使用されます。');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', 'アカウント情報はまだ入力されていません。本サイトにプロパティを登録するため,アカウント情報を全て入力して下さい。');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'プロダクション用又は開発用のサバーですか?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', '「開発用」に設定する場合には,エラー報告が有効になります。「プロダクション用」の場合は,無効になります。実施されている場合には,「プロダクション用」に設定すべきです。');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'プロダクション用');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', '開発用');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'リソース(部屋)情報');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', '料金プランの詳細');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'たったの');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', '部屋しか残っていません!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'リソースのアメニティ');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', '指定のリソース アメニティがプロパティに適応されているため,削除できませんでした。リソースから取り外してやり直してください。');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'イメージ管理');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'イメージを追加');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', '部屋のイメージ');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'プロパティの代表イメージ');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'スライドショーのイメージ');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', '一覧をクリア');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'ファイルをここにドラッグ・アンド・ドロップしてください。');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'アプロードの対象部屋を指定してください。個別の部屋にアプロードできれば,対象部屋を選択できるドロップダウンが表示されます。');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'プロパティの代表イメージとして複数イメージがアプロードされる場合には,最初のイメージのみが表示されます。');
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
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', '初期設定 (内容の部分)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'トップに固定される');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'ボタムに固定される');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', '二ビゲーション・ハー色を反転する');
jr_define('_JOMRES_BOOKING_NUMBER', '予約番号');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrapバージョン');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres includes it's own template sets, one for each supported version of Bootstrap. Joomla and Wordpress templates/themes that are based on Bootstrap will offer a specific version of Bootstrap so you need to ensure that the option you choose here is compatible with your template/theme. If your theme does not provide any Bootstrap code set this option to No Bootstrap in Theme and then Jomres will automatically include Bootstrap 3 files for it's own use. ");
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
jr_define('DATATABLES_SINFO', '_START_〜 _END_of _TOTAL_');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', '承諾');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', '問い合わせの予約を断る');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', '問い合わせの予約を承諾する');
jr_define('_JOMRES_STATUS_APPROVED', '承諾されました');
jr_define('_JOMRES_STATUS_REJECTED', '断られました');
jr_define('_JOMRES_STATUS_INQUIRY', '問い合わせ');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', '予約には承認または空き状況の確認が必要ですか？');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', '[はい]に設定すると,予約が行われたときに,プロパティマネージャーが予約の空き状況を承認/確認するまで,空き状況カレンダーに表示されません(他のゲストはその日とリソースを予約できます)。 確認されると,予約は暫定的なものとして挿入され(他の予約を上書きしない場合,他のゲストは同じ日付を予約できなくなります),支払いを行うために顧客に電子メールが送信されます。');
jr_define('_JOMRES_ERROR', 'エラー');
jr_define('_JOMRES_ERROR_MESSAGE', 'ごめん！ この関数の処理中にエラーが発生しました。 それはあなたのために報告されており,私たちはそれを調査します。');
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
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'メールのカスタム テンプレート作成は,<a href="https://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>に参照ください');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'サイト アドミンへの新規予約メール');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'グローバルpaypalゲートウエーが有効の場合,新規予約が入った際にサイトのアドミニストレーターへ送信されるメールです。');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'ホテルへの新規予約メール');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', '新規予約が入った際にプロパティ オーナーへ送信されるメールです。');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', '顧客への 新規予約のメール');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', '新規予約が入った際に顧客へ送信されるメールです');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', '顧客への確認通知書');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', '予約の受領・確認したことを顧客に送信し通知する手紙又は電子メールです。');
jr_define('_JOMRES_CAN_BE_APPROVED', 'この予約は承認できます。 選択したすべてのリソースは,選択した日付で利用できます。');
jr_define('_JOMRES_CANT_BE_APPROVED', 'This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Powered by Jomresのリンクをフッターで表示するか？');
jr_define('GUEST_BUDGET', 'お得の目印');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', '「お得の目印」機能を利用しますか?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', '注：Bootstrapを利用するサイトのみ有効! 「お得目印」はプロパティ一覧の機能で,顧客が定義する「お得」の金額に下回るプラオパティにお得の目印(ハイライト)が着きます。サイトの事情により(例えば,複数の通貨を利用する場合等),相性が悪い場合もあります。このプラグインとFeatured Listings プラグインを同時に利用する場合,プロパティ一覧が表示される際,featured listingを囲むラッパーのclassが自動的にpanel-primaryに変更されます。');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', '名前：');
jr_define('_JOMRES_LIVE_SCROLLING', 'プロパティリストでライブスクロール/無限スクロールを使用しますか？');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', '2月');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', '5月');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', '8月');
jr_define('_JRPORTAL_MONTHS_SHORT_8', '9月');
jr_define('_JRPORTAL_MONTHS_SHORT_9', '10月');
jr_define('_JRPORTAL_MONTHS_SHORT_10', '11月');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', ' _TOTAL_ 件中 _START_ から _END_ まで表示');
jr_define('DATATABLES_SINFOEMPTY', ' 0 件中 0 から 0 まで表示');
jr_define('DATATABLES_SINFOFILTERED', '(全 _MAX_件より抽出)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', '_MENU_件表示');
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
jr_define('DATATABLES_SHOWHIDE', '列の変更');
jr_define('_BOOKING_ONREQUEST', 'リクエストに応じて予約');
jr_define('_BOOKING_INSTANT', 'インスタント予約');
jr_define('_JOMRES_COM_FONTAWESOME', 'Font Awesomeアイコンセットを含めますか？');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'テンプレートにFontAwesomeが含まれていない場合は,これをYesに設定します。');
jr_define('_BOOKING_CALCQUOTE', '予約のリクエスト');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'サイトを選択');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'サイトID');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU国？');
jr_define('_JOMRES_HLASTCHANGED', '最終変更');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'ホテル予約キャンセルEメール');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', '新しい予約がキャンセルされたときにプロパティの所有者に送信される電子メール');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'ゲスト予約キャンセルEメール');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', '新しい予約がキャンセルされたときにゲストに送信されるEメール');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'テストメールを送信');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'テストメール');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'これは予約システムからのテストメールです。');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'テストメールが正常に送信されました');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'テストメールは送信されませんでした');
jr_define('_INVOICE_TRANSACTIONS', 'トランザクション');
jr_define('_OPENEXCHANGE_API', 'オープン為替レートAPIキー');
jr_define('_OPENEXCHANGE_API_DESC', 'サービス間で価格を変換するには,オープン為替レートAPIキーが必要です。Jomresで価格を正しく表示するにはAPIキーが必要ですが,<a href="https://openexchangerates.org / signup / free " target="_blank">無料キーに登録</a>(毎時更新,1000リクエスト/月-HTTPS,メールサポート,高度な機能なし)Jomresは,1日1回,為替レートをダウンロードします。ほんの一握りのサイトでキーを使用する場合,これらの制限を超える可能性はほとんどありません。Jomres8.3より前は,文書化されていない古いYahoo機能を使用していましたが,この機能の使用はYahooの利用規約に違反していることがわかりました。条件。結果として,この機能は将来のある時点で消滅する可能性があると想定する必要があります。そのため,オープン為替レートの使用に変更されます。 ');
jr_define('_JOMRES_COMMISSION', 'コミッション');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', '個々のオプションのエクストラ用に複数の画像をアップロードすると,最初の画像のみが使用されます。');
jr_define('_JOMRES_COMMISSION', 'コミッション');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', '個々のオプションのエクストラ用に複数の画像をアップロードすると,最初の画像のみが使用されます。');
jr_define('_JRPORTAL_INVOICES_PAYNOW', '今すぐ支払う');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'この請求書は期限が切れています。ボタンをクリックして支払い方法を選択してください。');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "この宿泊施設で予約する際に購入できるすばらしいもののリストを以下に示します。");
jr_define('GATEWAYS_INSTRUCTIONS', 'このページでは,インストールされているゲートウェイを構成できます。これらのオプションを使用すると,コミッションまたはサブスクリプションの請求書の支払いを行うことができます。フロントエンド設定はPaypalでのみ上書きでき,他のすべてのゲートウェイは,[プロパティの構成]-> [ゲートウェイ]タブ。ただし,ゲートウェイがこのリストに表示されている場合は,予約デポジットの支払いと請求書の支払いの両方を処理できる必要があります。');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'プロパティの詳細ページに表示しますか？');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'プロパティの詳細ページ設定');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Jomresのプロパティ管理は,サイトのフロントエンドcpanelからのみ行われます。このページでは,システム内のすべてのプロパティを一覧表示できるため,手数料率を割り当てて承認/不承認にすることができます(これらの場合)新しいプロパティを作成したり,既存のプロパティを編集したり,予約やその他のプロパティ/予約関連のタスクを管理したりするには,サイトのフロントエンドにログインして,Jomresのデフォルトページに移動する必要があります。 Jomresフロントエンドcpanel。 ');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', '部屋の機能アイコン');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'プロパティ機能カテゴリ');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'プロパティ機能カテゴリの編集');
jr_define('_JOMRES_HCATEGORY', 'カテゴリ');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'プロパティ機能をカテゴリに分けて表示しますか？');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'プロパティ機能をカテゴリに分類するには,これをYESに設定します。このオプションは,プロパティ詳細ページに表示されるプロパティ機能にのみ影響します。他のすべてのページでは,カテゴリに分割せずに表示されます。');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'チェックインを元に戻す');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'チェックアウトを元に戻す');
jr_define('_JOMRES_STATUS_UNISSUED', '未発行');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'ダウンロードおよびサポートキーは有効です。プラグインマネージャーを介してプラグインをダウンロードできます。');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'ダウンロードおよびサポートキーが無効です。プラグインマネージャーを介してプラグインをダウンロードすることはできません。');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'サブタイプ');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "プロパティのサブタイプはまだ設定されていません。ここで,5ベッドルームのヴィラや4ベッドルームのコテージのようなものとして定義し,検索しているゲストが検索を絞り込むのに役立ちます。") ;
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'プロパティにサブタイプを指定します');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'メールテンプレート');
jr_define('_JOMRES_CONTACT_SETTINGS', '連絡先設定');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'ここから,すべてのプロパティの連絡先の詳細(電子メール,電話,ファックス)を上書きして,ゲストとのすべての通信がプロパティの所有者ではなくあなたに送信されるようにすることができます。');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'リストの連絡先の詳細を上書きしますか？');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "このオプションが[はい]に設定されている場合,プロパティのメールアドレスと電話番号はこのタブで設定されたものに置き換えられます。これにより,すべての通信が指定されたメールアドレスに送信され,ゲストとプロパティが確実になります。所有者は予約エンジンと結果として生じる手数料をバイパスすることはできません。また,プロパティの説明が変更されるたびに,プロパティは未承認に設定され(承認機能が有効になっている場合),説明を手動で確認する必要があります。管理者が再度承認する前に,テキストフィールドに電話または電子メールの詳細を入力していないことを確認します。 ");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'リストの詳細に加えられた変更には,サイト管理者の確認が必要です。新しい詳細を保存すると,リストは非公開になり,サイト管理者の承認が保留されてから,サイトの訪問者に再び表示されます。オンラインで受信することはできません。あなたのリストが非公開で承認待ちの間に予約する。 ');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', '予約リクエストの確認');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', '予約リクエストの確認');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', '予約リクエストを修正');
jr_define('_JOMRES_INVOICE_MARKASPENDING', '請求書を保留中としてマーク');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', '請求書は保留中としてマークされています');
jr_define('_JOMRES_TRACKING_ENABLE', '匿名の追跡データを送信しますか？');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', '[はい]を選択して匿名の追跡データをJomres.netに送信し,システムの使用方法をよりよく理解できるようにします。');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'クライアントに代わって予約を行う前に,[マイアカウントの編集]ページで詳細が完了していることを確認してください。');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "ゲストの連絡先の詳細");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', '-新しいゲスト-');
jr_define('_JOMRES_CHARTS', 'チャート');
jr_define('_JOMRES_CHARTS_SELECT', 'チャートを選択...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', '年/月ごとの収入');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "では,始めましょう。まず,このプロパティ用にいくつかの部屋を作成する必要があります。");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', '今すぐ部屋を作成する');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', '調査により,高品質の画像がたくさんあるプロパティはより多くのビューを生成することが証明されています。予約を取得する可能性を高めるために,メイン画像といくつかのスライドショー画像をアップロードしてください。');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', '画像をアップロード');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'いくつかの料金を作成する');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'ゲストは何を予約しますか？');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'このプロパティタイプは,プロパティ内の部屋を借りるホテルタイプのプロパティですか,それとも1回の予約でプロパティ全体を借りるヴィラタイプのプロパティですか？');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'プロパティ内の部屋');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'プロパティ全体');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', '両方'); //これは,プロパティタイプをまだ更新していない既存のユーザーに後方互換性を与える暫定的な設定です。選択できません
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'ゲストは何を予約しますか？');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "ゲストが滞在するときにあなたを見つけられるように,住所の詳細を入力する必要があります。");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'アドレスを更新');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'おっと,すべてのフィールドに入力するのを忘れたようです。');
jr_define('_JOMRES_CONTANT_US', 'お問い合わせ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'の新しいオンラインリストへようこそ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'こんにちは。の新しいプロパティへようこそ。');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "最近,新しいプロパティをWebサイトに追加しました。ご家族に歓迎します。");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', '新しいダッシュボードが表示されます');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'ここ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "プロパティを設定したら,次のサイトにアクセスすると,サイトの訪問者にどのように表示されるかを確認できます");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'フロントページ。');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(公開されていないため,サイト訪問者はまだ表示できません)");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "ページの上部にいくつかのメッセージが表示されます。これらのメッセージの横にあるボタンをクリックすると,サイトにプロパティを設定するためにアクセスする必要のあるページに移動します。これらの各タスクを実行すると,当サイトの訪問者があなたの物件を見つけてオンラインで予約するのがはるかに簡単になります。 ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'ご不明な点がございましたら,');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'お問い合わせ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "そして,すべての質問にお答えできることをうれしく思います。");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', '最高です,私たちのチームは');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "販売するツアーがないようです。ツアープロファイルを作成し,[生成]ボタンを使用していくつかのツアーを作成します。");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "いくつかのツアーを作成しましょう！");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', '通貨記号の場所を交換');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'このオプションを使用して,通貨記号を価格値の後ろから前に,またはその逆に移動します。');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'FacebookページIDを入力します(例： "jomres"。何も表示しない場合は空白のままにします。https：//www.facebook.comなどは入力しないでください。');
jr_define('COMMON_DOWNLOAD', 'ダウンロード');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', '次に,いくつかの料金を追加する必要があります。これらは基本価格です。');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'ブートストラップが有効になっていません！');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', '警告,Jomresサイト構成->その他タブでブートストラップが有効になっていません。<i>一部の</ i>機能を提供するために,Jomresは現在古いjQueryUIベースのテンプレートを使用しています。ただし,これらは数年前から取り組んでいません。Jomresテンプレート(レイアウトファイル)の現在の開発と改善はすべて,そのBootstrap 3テンプレートファイルに対して行われます。Jomresを最大限に活用するには,Bootstrap3ベースをインストールすることをお勧めします。 WordpressまたはJoomlaのテーマ。これが完了したら,サイト構成でJomres Bootstrapテンプレートを有効にできます。');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'サポートキーは有効です。このライセンスではプラグインのダウンロードが許可されていないことに注意してください。');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', '予約をこのエリアにドラッグしてキャンセルします');
jr_define('_JOMRES_LAT', 'Lat(nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long(nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', '[jomres：xx-XX]ショートコード(xx-XXはサイトの言語コード,たとえば[jomres：en-GB]や[ jomres：en-US])そうしないと,フロントエンドからJomresにアクセスしてプロパティと予約を管理できなくなります。');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Jomresのほとんどの物件には賃貸管理プロセスがあります。ホテル/ B＆B /ペンションは個々の部屋を貸し出し,コテージ/ヴィラ/アパートは物件全体を貸し出します。これはプロパティマネージャーには見えませんが,彼らにとっては見えません。プロパティの料金を作成できるようにするには,最初にプロパティタイプに適した部屋タイプを追加する必要があります。
たとえば,ホテルのプロパティタイプには通常,複数の部屋タイプ(ダブルルーム,シングルルーム,ツイン)が必要ですが,ヴィラには1つの部屋タイプしかありません。 2ベッドルーム,5ベッドルーム。
ツアーなどのプロパティの部屋タイプを作成することができます。これにより,顧客はツアーなどのプロパティのみを検索できますが,プロパティマネージャはこのプロパティタイプの料金を作成しないため,管理プロセスはそれらに関連していません。
');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'クリックして新しい部屋タイプを追加');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', '警告,部屋タイプのない1つ以上のプロパティタイプがあります。プロパティマネージャーが料金表を作成できるように,プロパティには部屋タイプが必要です。');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', '[新規]ボタンを使用して新しい部屋タイプを作成します。');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'ツアー');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', '予約なし/不動産(単純なリスト)');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'ログファイルの場所');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomresは,デフォルトでシステムアクティビティを' .JOMRES_SYSTEMLOG_PATH.' の場所に記録します。このファイルには機密情報(APIキー,システムパス,ゲートウェイ情報,ゲスト情報)が含まれている可能性があるため,このパスを変更することを強くお勧めします。これが何を意味するのかわからない場合は,ファイルシステムを知っているので,Webホストにアドバイスを求めてください。 ');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomresは,APIキー,システムパス,ゲートウェイ,ゲスト情報など,システムに関する詳細情報をログに記録します。これらはすべて,インターネットの他の部分には表示されないはずです。システムログパスが設定されていないため,システムログは現在「.JOMRES_SYSTEMLOG_PATH。」ディレクトリに保存されていますが,これは理想的ではありません。[サイトの構成]-> [デバッグ]にアクセスして,ファイルシステムにWebルートの外部のパスを設定してください。不明な点がある場合は,Webホストにお問い合わせください。彼らはあなたに助言することができるでしょう。」');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'C​​MSがWebサイトのルートディレクトリにインストールされている場合,適切な場所は');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Googleマップキーが設定されていません。Googleマップの最近の変更により,すべての新しいサイトでGoogleマップの機能を使用するにはAPIキーが必要になります。<ahref = 'http： //www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key'target='_blank'>APIキーの作成方法についてはマニュアルページをご覧ください< / a>そしてキーをJomresに保存します。 ");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Googleマップの配色');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "では,ウェブサイトへのプロパティの追加を開始しましょう。ここでプロパティに関する情報を少し収集する必要があります。これにより,プロパティの基本を設定できるようになります。完了したら,部屋,価格,画像を追加するガイドが表示されます。 ");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'プロパティタイプは,プロパティの予約方法を定義するのに役立ちます。たとえば,ホテルでは一度に1つまたは2つの部屋だけを「販売」しますが,ヴィラではプロパティ全体を提供します。');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "メールアドレスは,アカウントの登録時に使用したものと同じである必要はありません。これにより,プロパティごとに異なるアドレスを使用できます。");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', '最小デポジット');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', '保証金の最低額を設定できます。設定した場合,プロパティ設定の「必要な保証金は1泊目の費用ですか？」と「必要な保証金はパーセンテージですか？」の設定は構成できません。 ,代わりに,すべての預金額はパーセンテージであり,少なくともここで定義した数値でなければなりません。 ');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'この数字はより小さくすることはできません。');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslogホスト');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslogポート');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "システムログメッセージをsyslogサーバーに送信する場合は,ここでホスト名またはIP(例：192.168.0.2)とポート(例：514)を設定できます。サイトが 'に設定されている場合は注意してください。 「開発」の場合はDEBUGメッセージが送信されます。「本番」に設定すると,INFOレベル以上のメッセージのみが送信されます。リモートサーバーへのログ記録を無効にするには,ホストフィールドとポートフィールドを空にします。 ");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHPは 'openlog'および 'syslog' PHP関数へのアクセスを許可されていません。これはサーバー側の設定です。Jomresでsyslogサーバーにメッセージを送信する場合は,ホストに相談してください。 PHPがこれらの機能へのアクセスを許可されているかどうかを確認します。有効にすると,syslogサーバーの設定をここで構成できるようになります。 ");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'エラーが発生したときにサイト管理者に電子メールを送信しますか？');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "これまで,調査が必要な問題がサイトの所有者にメールで送信されてきました。システムには非常に多くの可動部品があり,追跡が難しいため,これはシステムの実行を監視するのに最適です。残念ながら,サイトをクロールするスパイダーとボット(友好的なサイトでも)は,誤って致命的なエラーを引き起こす可能性があり,これにより,受信するメッセージの数が圧倒される可能性があります。その場合は,このオプションを[いいえ]に設定してください。Jomresはログを送信します一連のログファイルとsyslogサーバーの両方へのメッセージ(特定のPHP設定で許可されている場合,ホストに連絡しない場合)。特定のものを探している場合は,ファイルを手動で分析できます(たとえば,ゲートウェイを開発していて,gateway_log()関数呼び出しを使用したい場合)。ただし,これはトロールする情報が多いため,syslogファイルアナライザーなどを使用することをお勧めします。Linuxで開発している場合は,利用できるツールはたくさんあります。Windowsの場合,使用できる簡単なツールはhttp://maxbelkov.github.io/visualsyslog/です。このページで「Syslogホスト」を「127.0.0.1」に設定し,「そのツールに記録されたメッセージを表示するには,514にポートします。 ");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'プロパティの管理');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "IP検出APIキーが設定されていません。これは,システムがユーザーの場所を自動的に検出し,通貨と国を自動的に設定できるようにするために必要です。<a href = 'http：//www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>マニュアルを参照IP検出APIキーを作成し,キーをJomres>サイト構成>通貨換算/通貨コードに保存する方法のページ。 ");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "オープン為替レートAPIキーが設定されていません。これは,システムが自動的に為替レートをダウンロードして使用できるようにするために必要です。<a href = 'http：//www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>方法については,マニュアルページを参照してください。 IP検出APIキーを作成</a>し,キーをJomres>サイト構成>通貨換算/通貨コードに保存します。 ");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', '許可番号');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', '一部の国では,プロパティの許可番号を表示する必要があると法律で定められています。そのような番号がある場合は,ここに入力すると,プロパティヘッダーセクションに追加されます。');
jr_define('_JOMRES_SHORTCODES', 'ショートコード');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "<strong> plg_content_jomres_asamodule_mambot </ strong> Jomres Asamodule Mambotプラグインは,これらのショートコードが機能するようにインストールして有効にする必要があります。これは,Jomresプラグインマネージャーのいずれかを使用して構築されている場合。クイックスタートすると,おそらくすでにインストールされています。 ");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "<strong> 'Jomres Shortcodes' </ strong>プラグインが有効になっていることを確認する必要があります。これはJomresプラグインマネージャーにあります。このサイトがクイックスタートの1つを使用して構築されている場合は,おそらくすでにインストールされています。 ");
jr_define('SHORTCODE_TASK', 'タスク');
jr_define('SHORTCODE_DESCRIPTION', '説明');
jr_define('SHORTCODE_ARGUMENTS', '引数');
jr_define('SHORTCODE_EXAMPLE', '例');
jr_define('INTEGRITY_CHECK', 'ファイルシステムの整合性チェック');
jr_define('INTEGRITY_CHECK_DESC', 'この機能を使用すると,ファイルシステムが現在のバージョンのJomresで提供されているものと一致することを確認できます。これは,インストール/アップグレード後にすべてのファイルが正しく更新されたことを確認するのに役立ちます。オレンジは存在しますが,現在のビルドで提供されているものとは異なります。潜在的な問題であるファイルのみがここにリストされます。');
jr_define('INTEGRITY_CHECK_FILENAME', 'ファイルシステムの整合性チェック');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'ローカルハッシュ');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'バージョンハッシュ');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', '素晴らしい！問題は見つかりませんでした。');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Googleマップマーカー');
jr_define('_JOMRES_JAVASCRIPT_READMORE', '続きを読む');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Read less');
jr_define('_JOMRES_TOURIST_TAX_TITLE', '観光税');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', '観光税率');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', '観光税率を設定します。観光税は最初の予約が生成された後にのみ計算され,予約確認ページの追加サービスボックスに追加されます。');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'パーセンテージですか？');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "税金がパーセンテージの場合は[はい]に設定し,定額料金の場合は[いいえ]に設定します。");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', '予約額全体に影響しますか？');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "税金が予約の全額をカバーする場合は,これを[はい]に設定します。これは,宿泊施設と追加料金の両方のパーセンテージであり,宿泊施設の合計。上記のオプション「パーセンテージ」が「いいえ」に設定されている場合,このオプションは無視されます。 ");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'この予約には観光税が追加されることに注意してください。この税はレビュー予約ページで確認できます。');
jr_define('NO_LICENSE_MESSAGE', "サイト構成にライセンス番号を保存していないため,プラグインをダウンロードできません。有効なライセンスキーを保存すると,次のようにリストされているプラ​​グインをインストールできるようになります。コアプラグイン。 ");
jr_define('INVALID_LICENSE_MESSAGE', "無効または期限切れのライセンス番号を使用しているようです。有効なライセンスキーを保存すると,コアプラグインとしてリストされているプラ​​グインをインストールできるようになります。");
jr_define('VALID_LICENSE_MESSAGE', "おめでとうございます。有効なライセンス番号を使用しており,Jomresプラグインマネージャーからコアプラグインをインストールできます。");
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
jr_define('_JOMRES_MARKDOWN_DESC', '単純なMarkdownフォーマットを使用してここにテキストを入力できます。HTMLを知っている必要はありません。ボタンを使用して情報を希望どおりに表示するか,これらの例に従ってテキストをフォーマットしてください。 ');
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
jr_define('_JOMRES_SELECT_WIDGETS', "ウィジェットの選択");
jr_define('_JOMRES_INTERVAL', "Interval");
jr_define('_JOMRES_TIMELINE', "タイムライン");
jr_define('_JOMRES_CPANEL_GRID', "コントロールパネルのホームレイアウト");
jr_define('_JOMRES_CPANEL_GRID_DESC', "フロントエンドのプロパティ管理コントロールパネルのホームページのグリッドレイアウトを選択します。");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Googleマップマーカー");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "町の画像");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "プロパティタイプを変更すると,すべての部屋,料金,プロパティ設定が削除され,可用性がリセットされます。");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', '更新後,Jomresプラグインマネージャーを使用して,既にインストールされているJomresプラグインを更新する必要があることに注意してください。Coreプラグインはインストールされているが,有効なJomresライセンスがない場合は<em>古いプラグインは新しいバージョンのJomresで動作しないことが多いため,Jomresを更新することはお勧めしません。 ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', '更新後,Jomresプラグインマネージャーを使用して,既にインストールされているJomresプラグインを更新する必要があることに注意してください。');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Jomresとそのプラグインを更新する場合は,更新ライセンスが必要です。<a href='https://www.jomres.net/pricing' target='_blank'>にアクセスしてください。詳細については,サイト</a>を参照してください。ほとんどの場合,これらのライセンスはフルライセンスの価格の50％です。更新を購入する前に,当店にログインしていることを確認してください。 ");
jr_define('_JOMRES_PAYMENT_METHOD_USED', "支払い方法：");

jr_define('_JOMRES_PRICES', "接続する");


jr_define('_OAUTH_TITLE', "アプリのキー管理");
jr_define('_OAUTH_APPS', "REST APIクライアントの詳細");
jr_define('_OAUTH_IDENTIFIER', "識別子");
jr_define('_OAUTH_APIKEY', "クライアントID");
jr_define('_OAUTH_SECRET', "Secret");
jr_define('_OAUTH_CREATED', "作成/更新されたアプリ");
jr_define('_OAUTH_CLIENT_ID_INFO', "クライアントIDとシークレットが作成されます。識別子は,このキーペアを簡単に識別できるようにするためのものです。");
jr_define('_OAUTH_SCOPE_TITLE', "権限(クライアントが実行できること)");
jr_define('_OAUTH_SCOPE_CATEGORY_USER', "ユーザー権限");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "プロパティのアクセス許可");

jr_define('API_DOCUMENTATION_TITLE', "App REST APIドキュメント");

jr_define('_OAUTH_CONFIG', "APIコア構成");

jr_define('_OAUTH_CONFIG_SHOW', "JomresメインメニューにAPIクライアント構成オプションを表示しますか？");
jr_define('_OAUTH_CONFIG_SHOW_DESC', "Jomresメインメニューの[マイアカウント]セクションにAPIクライアント構成オプションを表示しないことを選択できます。代わりに,Jomresショートコードを使用して他のページに表示することを決定できます。");

jr_define('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "APIコアのドキュメントページを表示します。APIコアを使用すると,ユーザーはAPIクライアントを作成できます。APIクライアントは,APIコアのドキュメントで概説されているAPI機能にアクセスするために使用されます。");

jr_define('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "プロパティマネージャーがAPIクライアントを構成できるAPIコア管理ページを表示します。これは登録済みユーザー専用の機能であるため,ユーザーがこのページを表示するには,登録してログインする必要があります。");

jr_define('API_METHODS_TITLE', "APIメソッド");
jr_define('API_METHODS_DESCRIPTION', "このメソッドのリストは,インストールされているAPI機能プラグインに基づいており,自動的に生成されます。API機能プラグインをインストールまたは削除する場合は,このページにアクセスして,サイトで使用可能なAPIメソッドのリストを再構築する必要があります。 ");

jr_define('_OAUTH_REDIRECT_URI', "リダイレクトURI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER', "私の電話など,あなたにとって意味のある名前を付けてください");

jr_define('_OAUTH_GRANT_TYPES', "このシステムは,クライアントクレデンシャルと暗黙の2つの付与タイプをサポートします。<em> client_credentials </ em>フローを使用している場合は,クライアントIDとクライアントシークレットの両方が必要になります。<em>を使用している場合>暗黙的</ em>の場合,アプリはクライアントIDのみを送信し,システムにログインしてそのアプリを明示的に承認します。 ");

jr_define('_OAUTH_IMPLICIT_NOTES', "<em>暗黙的</ em>付与タイプフローを使用するには,このURLを使用してアプリを承認する必要があります。このURLが呼び出され,システムが発行するアプリを承認すると,アプリがこのシステムのAPIを呼び出すために使用するトークン ");
jr_define('_OAUTH_AUTHORISATION_URL', "認証URL");

jr_define('WEBHOOKS_CORE', 'Webhooks');

jr_define('_WEBHOOKS_CONFIG_SHOW', "JomresメインメニューにWebhook構成オプションを表示しますか？");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', "Jomresメインメニューの[マイアカウント]セクションにWebhook設定オプションを表示しないことを選択できます。代わりに,Jomresショートコードを使用して他のページに表示することを決定できます。");
jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "Webhookドキュメント");

jr_define('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "APIコアのドキュメントページを表示します。APIコアを使用すると,ユーザーはAPIクライアントを作成できます。APIクライアントは,APIコアのドキュメントで概説されているAPI機能にアクセスするために使用されます。");

jr_define('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "プロパティマネージャーがAPIクライアントを構成できるAPIコア管理ページを表示します。これは登録ユーザー専用の機能であるため,ユーザーがこのページを表示するには,登録してログインする必要があります。");

jr_define('WEBHOOKS_INTEGRATION_EDIT', '統合の編集');
jr_define('WEBHOOKS_INTEGRATION_ID', '統合ID');
jr_define('WEBHOOKS_INTEGRATION_URL', 'URLまたは名前');
jr_define('WEBHOOKS_ENABLED', '有効');

jr_define('WEBHOOKS_AUTH_METHOD_SELECT', '認証方法/統合');

jr_define('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'プロパティに割り当てられていないため,作成したWebhookはトリガーされません。スーパープロパティマネージャーには通常,個別のプロパティが割り当てられないため,Webhookの作成に新しいユーザーが必要になる場合があります。');
jr_define('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', '作成したWebhookは,次のプロパティに対してトリガーされます：');


jr_define('PORTAL_REVIEWS_LIMIT', 'レビュー制限');
jr_define('PORTAL_REVIEWS_LIMIT_DESC', 'この設定を使用して,プロパティの詳細ページに表示されるレビューの数を制限します。');
jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'すべてのレビューを表示');

jr_define('ビデオチュートリアル', 'ビデオチュートリアル');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', '最低入金額');
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "計算されたデポジットがこの数値より少ない場合は,代わりにデポジットをこの値に設定します。サイトの最小デポジット設定を満たさない場合,この数値自体が上書きされる可能性があります。0に設定したままにします。設定を使用しないでください。 ");

jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'サイトの速度を上げるには,既存のサイトとプロパティの画像の詳細をデータベースにインポートすることをお勧めします。');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', '既存の画像の詳細をデータベースにインポートする');

jr_define('_JOMRES_S3_ACTIVE_DESC', '実験機能。有効にすると,メディアセンター機能を使用してアップロードされた画像もAmazon S3バケットにコピーされ,Amazon S3バケットのURLから提供されます。これを初めて有効にすると,次のようになります。既存の画像をS3バケットにインポートするように促されました。 ');
jr_define('_JOMRES_CLOUDFRONT_DMAIN', 'C​​loudFrontドメイン');
jr_define('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'デフォルトのAmazonS3ドメインをCloudFrontドメインに置き換えます');
jr_define('_JOMRES_S3_SSLTLS_DESC', '有効にすることをお勧めします。WindowsおよびMacOSXの場合のみ,libcurlがSchannelまたはSecure Transportサポート(WindowsおよびMac OS Xに含まれるネイティブSSLライブラリ)で構築されていない場合は,これを次のように設定する必要があります。番号。');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Amazon S3統合を有効にしたので,既存のすべての画像をS3バケットにコピーする必要があります。画像はAmazon S3 URLからサイト訪問者に提供されるようになったため,必要になります。最初にそれらをS3バケットにコピーします。そうしないと,サイトの訪問者には表示されません。');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'このボタンをクリックしたら,プロセスを中断せず,成功またはエラーメッセージを待ちます。サーバーの速度によっては,完了するまでに時間がかかる場合があります。');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', '既存の画像をAmazonS3バケットにコピーします');


jr_define('JOMRES_INCOMPLETE', '不完全');
jr_define('JOMRES_WATING_APPROVAL', '承認待ち');
jr_define('JOMRES_GOOGLE_MAPS_PDETAILS', 'プロパティ詳細マップ');

jr_define('HAS_STARS_TITLE', '星の分類を許可しますか？');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', '画像の詳細をデータベースに強制的に再インポートします');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', '画像をS3バケットに強制的に再アップロードします');
jr_define('_JOMRES_UNINSTALL_TABLES', 'アンインストール時にすべてのJomresデータを削除しますか？');
jr_define('_JOMRES_UNINSTALL_TABLES_DESC', 'yesに設定すると,Jomresはアンインストール時にすべてのデータベーステーブルを削除します。これにより,dbからすべてのJomresデータが削除され,元に戻すことはできません。');
jr_define('TRANSACTION_IDS', 'トランザクションID');
jr_define('PAYMENT_METHOD', '支払い方法');
jr_define('POA_DISPLAY_PRICE', 'POA価格');
jr_define('POA_DISPLAY_PRICE_DESC', 'プロパティがリストに表示されると,システムは,今日の日付,または日付が検索で使用された場合はそれらの日付に基づいて,構成された料金から有効な価格を見つけようとします。 。できない場合は,POA(Price on application)が表示されます。つまり,ゲストは価格を取得するためにあなたに連絡する必要があります。必要に応じて,POAテキストの代わりに表示される価格をここで構成できます。この図他の価格を決定できない場合に表示する「フォールバック」価格になります。 ');

jr_define('PLUGINMANAGER_INSTALL', 'Jomresプラグインをインストールする前に,プラグインマネージャーをインストールする必要があります。今すぐインストールしますか？');
jr_define('PLUGINMANAGER_REINSTALL', 'インストールされているプラ​​グインを更新する前に,プラグインマネージャーを更新する必要があります。今すぐ更新しますか？');
jr_define('PLUGINMANAGER_INSTALL_BUTTON', "これをやろう！");

jr_define('INCLUDEINFILTERS', 'フィルターに含める？');
jr_define('INCLUDEINFILTERS_DESC', 'Ajax Composite Searchのプロパティ機能フィルターは非常に長くなる可能性があるため,このオプションを[いいえ]に設定して,この機能がプロパティ機能リストに表示されないようにすることができます。');

jr_define('REVIEW_REMINDER_PT1', "あなたが持っている");
jr_define('REVIEW_REMINDER_PT2', "まだレビューを残していない予約。レビューを残してください。");
jr_define('BOOKINGS_AWAITING_REVIEWS', "レビューを待っている予約");
jr_define('REVIEW_NAG', "レビューのためにゲストをナグしますか？");
jr_define('REVIEW_NAG_DESC', "ゲストが予約から予約されると,システムはゲストに予約のレビューを投稿するように通知します。この通知を無効にするには,このオプションを[いいえ]に設定します。");

jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "予約メールのコピーをサイト管理者に送信しますか？");
jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "有効にすると,プロパティマネージャーに送信される予約メールのコピーがすべてのサイト管理者にも送信されます。");

jr_define('HIDDEN_ADDRESS_SETTING', "アドレスを非表示にしますか？");
jr_define('HIDDEN_ADDRESS_SETTING_DESC', "このオプションを[はい]に設定すると,プロパティにすでに予約を入れているゲストのみがプロパティの番地を表示できます。この設定を使用して,プロパティの正確な場所を非表示にすることができます。たとえば,日常的に無人のままになっている場合。 ");
jr_define('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'アップロード時に画像を最適化しますか？');
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', '有効にすると,画像はWeb用に最適化されます(ファイルサイズは最大75％小さくなります)。アップロードされた画像の種類に応じて,サーバーには,ホスティングによってこれらのライブラリが1つ以上インストールされている必要があります。プロバイダー：optipng,pngquant,pngcrush,pngout,advpng,jpegtran,jpegoptim,gifsicle ');
jr_define('DATABASE_INTEGRITY_CHECK', 'データベース整合性チェック');
jr_define('OBSOLETE_FILES_CHECK', '廃止されたファイルのチェック');
jr_define('DATATABLES_COLVIS', '列の可視性');

jr_define('API_TOKEN_LIFETIME', 'APIトークンの有効期間');
jr_define('API_TOKEN_LIFETIME_DESC', 'APIトークンが有効である期間(秒単位)。86400= 1日,31536000 = 1年');


jr_define('ENCRYPTION_TITLE', '暗号化');
jr_define('ENCRYPTION_FILE_LOCATION', '暗号化ファイルの場所');
jr_define('ENCRYPTION_FILE_LOCATION_DESC', '**暗号化ファイルを削除しないでください** <br/> GDPRの推奨事項に従って,「保存データ」が安全に保護されるように,ユーザーデータは暗号化されてテーブルに保存されます。デフォルトでは暗号化キーJomresインストールのルートにあるファイル「encryption_key.class.php」(通常は/ public_html / jomres)に保存されます。ファイルの保存場所はここで変更できます。場所を変更する場合は,ファイルを移動する必要があります。 Jomresが新しいバージョンを作成するのを待たないでください。そうしないと,ゲストの詳細をデコードできなくなります。 ');

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'ここに保存した情報は,このプロパティ用に生成された請求書で使用されます');

jr_define('_JOMRES_GDPR_POLICIES', 'GDPRポリシー');
jr_define('_JOMRES_GDPR_POLICIES_DESC', 'ここでは,予約または請求書が作成されてからシステムから削除される期間を構成して,GDPRに準拠していることを確認できます。');

jr_define('_JOMRES_GDPR_BOOKING_RETENTION', '予約保持期間(日数)');
jr_define('_JOMRES_GDPR_BOOKING_RETENTION_DESC', '予約の出発日から何日後に予約を削除する必要がありますか？削除すると,予約と請求書の両方が削除されます。通常の保存期間は365日です。');
jr_define('_JOMRES_GDPR_INVOICE_RETENTION', '請求書の保持(非予約)期間');
jr_define('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'コミッションやサブスクリプションの請求書など,その他の請求書は予約に関連付けられていません。その結果,予約の請求書や契約が削除されても削除されません。国や独自のビジネス慣行によっては,別の保存期間を構成する必要があります。通常の保存期間は3653日,つまり10年です。 ');


jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'あなたのデータ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'このウェブサイトの一部の機能はあなたの訪問に関する情報を保存する必要があります。これはあなたにサービスを提供するためにのみ使用され,他の人と共有されることはなく,不要になったときに削除されます。');
jr_define('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'この情報を保存する許可を米国に与えますか??');
jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', '詳細');
jr_define('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'このサイトで予約できるようにするには,このデータの保存に同意する必要があります。データの保存に同意するかどうかに関係なく,Cookieをコンピューターに保存して通知します。オプトインしたかどうかを確認します。これにより,オプトインまたはオプトアウトするかどうかを常に尋ねたり,個人を特定できる情報(PII)が含まれたりすることがなくなります。気が変わった場合は,いつでも[アプリのアクセス許可]ページにアクセスして,オプトインまたはオプトアウトできます。 ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', '情報は,訪問の性質に応じてさまざまな期間保存されます。したがって,見回しているだけの場合は,おおよその地理的位置(国レベル)情報が保存されます。検索を実行する場合は,検索フォームをよりユーザーフレンドリーにするために,最後に検索したものを保存します。この情報は通常,最大24時間保存され,訪問をより快適にするためにのみ使用されます。');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', '私たちと一緒に予約すると,必然的に詳細情報が保存されます。');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', '予約フォームの技術情報が取得され,最大60日間保持されます。これは,予約が承認された後,リクエストに応じて予約を完全な予約に変換し,チームが分析できるようにするために必要です。予約に問題がある場合。予約時にログインしていなかった場合は,ユーザー名とパスワードをメールで送信します。これにより,予約履歴を表示し,忘れられる権利(RTBF)を行使できます。それをしたい。 ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', '名前,メールアドレス,実際の住所など,予約フォームに入力されたデータは,予約の出発日から最大365日間保存されます。この情報は,暗号化された形式でデータベースに保存されます。予約を行う場合,法律により,予約が有効である間,PIIを保存する必要があります。予約がキャンセルされたか,チェックアウトされたために予約が完了すると,次のようになります。ログインして[データ]ページにアクセスすると,RTBFを実行できます。完了した予約の請求書情報は,関連する税法を確実に遵守するためにデータベースに安全に保存されますが,他のすべてのPIIを削除することはできます。予約が完了した後。 ');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', '上記のように情報を保存することに同意した場合,法的にこの同意をデータベースに保存する義務があります。この情報には,IP番号とオプトインフォームの内容が含まれます。この同意通知を無期限に保持します(これは法的要件です)。');

jr_define('_JOMRES_GDPR_CONSENT_NOT_SET', 'あなたは,あなたに関する個人情報を収集できるかどうかをまだお知らせしていません');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_IN', '予約を行うために必要な個人情報を収集することに同意しました');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_OUT', '個人を特定できる情報を収集しないように指示されました');

jr_define('_JOMRES_GDPR_NOCONSENT_INTRO', '個人データを収集する許可を私たちに与えていません');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'このウェブサイトで特定のアクションを実行するには,個人を特定できる情報を収集する必要がありますが,許可されていません。');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', '権限を変更する');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'プロパティの表示を続行');

jr_define('_JOMRES_GDPR_APP_MENU_ITEM', 'アプリの権限');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'ゲストデータ');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'これらは,さまざまなプロパティによって保存される詳細です。予約時に入力した内容に応じて,ホテルごとに異なるレコードが保持される場合があります。');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'このシステムのどのホテルにもデータが保存されていません');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'プロファイルデータ');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'これは,さまざまなプロパティで共有しているものとは異なり,保持するメインのデータセットです。');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'プロファイル情報を保存していません');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'このウェブサイトに保存されている個人を特定できる情報です。軽量のデータ交換形式であるJSON(JavaScript Object Notation)形式で構築されています。人間が読みやすく,書き込むと,マシンが解析して生成するのは簡単です。 ');

jr_define('_JOMRES_GDPR_REDACTION_STRING', '匿名');

jr_define('_JOMRES_GDPR_MY_DATA', 'あなたのデータ');
jr_define('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'これらの利用規約(この「契約」)に同意することにより,次のことに同意したことになります。

<ul>
<li>
このウェブサイトからホテルを予約することができます。
</ li>
<li>
あなたは18歳以上です。
</ li>
<li>
あなたは拘束力のある法的義務を作成する法的権限を持っています。
</ li>
<li>
お客様は,本契約に従ってサイトを使用するものとします。
</ li>
<li>
あなたは,あなた自身またはあなたが法的に行動することを許可されている他の人のために合法的な予約をするためにのみサイトを使用します。
</ li>
<li>
あなたは,私が彼らに代わって行った予約に適用される本契約について,それに適用されるすべての規則および制限を含めて,そのような他の人に通知します。
</ li>
<li>
あなた自身がウェブサイトに提供するすべての情報は,真実,正確,最新かつ完全です。と
</ li>
<li>
あなたはあなたのアカウント情報を保護し,あなた自身とあなた以外の誰かによるあなたのアカウントの使用を監督し,完全に責任を負います。
</ li>
</ ul>
');
jr_define('_JOMRES_GDPR_MY_DATA_LEAD', 'セキュリティと透明性は私たちにとって重要です。');
jr_define('_JOMRES_GDPR_MY_DATA_INTRO', '私たちはあなたのデータの保存に関する責任を非常に真剣に受け止めています。すべての個人情報(PII)は,許可されたユーザーのみがこの情報を表示できるように,業界標準のアルゴリズムを使用して暗号化されてデータベースに保存されます。');

jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', '保存されているすべてのPIIをダウンロードできます。');
jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', '今すぐダウンロード');

jr_define('_JOMRES_GDPR_MY_RTBF_LEAD', '忘れられる権利(RTBF)');
jr_define('_JOMRES_GDPR_MY_RTBF_INTRO', '<ahref = "https://gdpr-info.eu/art-17-gdpr/" target = "_blank">削除</a>できるはずです< a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_blank">必要に応じて,実行可能な場合は,個人を特定できる情報</a>。 ');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'あなたはこのサイトに登録されていません。あなたの一般的な場所(国)とIP番号は最大24時間保存され,その後削除されます。');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'このサイトに登録されておらず,データ収集をオプトアウトしています。PIIは保存されていません。');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'あなたはサイトに登録されており,保留中またはアクティブな予約はありません。現在保持しているほとんどの情報を匿名化できます。よろしいですか？');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', '注：これはアカウントを削除するのではなく,単に記録を匿名化するため,アカウントを個人として関連付けることはできません。法律により,請求目的でPIIを保存し続ける必要があります。すべてのゲストレコードを削除します。 ');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'あなたはサイトに登録されていますが,未処理の予約があり,現時点ではデータを匿名化できません。このデータは,予約完了後最大1年間保持されます。それ以前に削除することを選択しなかった場合は,削除されます。 ');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'あなたは当サイトのプロパティマネージャーであるため,データを自動的に削除する機能を提供することはできません。代わりに,プロパティを別のマネージャーに割り当てることができるように,直接お問い合わせください。それが完了し,プロパティマネージャーとしてのステータスが削除されると,データを自動的に削除できるようになります。 ');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME', '忘れてください！');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'これは元に戻せません！');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'データが削除されました！');

jr_define('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', '申し訳ありませんが,メールアドレスが無効であるため予約できません');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'このページでは,システムに情報が保存されているゲストを匿名化できます。これにより,GDPRに準拠できますが,このページの他の情報を編集することはできません。プロパティマネージャーとしてフロントエンドにログインする必要があります。歴史的なゲストから,忘れられる権利を行使することを許可するように求められたことが想定されます。サイトのフロントエンドにログインできない場合(おそらく,彼らが予約したときにユーザーは彼らのために作成されていませんでした)そしてあなたが彼らの身元を確認したら,あなたは彼らを匿名化するためにこのエリアを使うことができます。');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', '匿名ゲスト');
jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', '削除されたプロパティ');
jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'ゲストデータが匿名化されました');
jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', '匿名化できません');

jr_define('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', '予約する前に,情報を保存するための許可が必要です。許可を与えるには,ここをクリックしてください。');

jr_define('_JOMRES_GDPR_CONFIG_ENABLE', 'GDPR準拠の機能を有効にしますか？');
jr_define('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'GDPR準拠の機能を無効にすることはお勧めしません。Jomresには,サイトのJomresセクションがGDPRに準拠していることを確認するのに役立つ機能が組み込まれています。この機能を無効にすると(およびEU内にいる場合,またはEU市民とビジネスを行っている場合は,そうすべきではありません),Jomresは,サイトへのすべての訪問者が個人データを有効にする許可を与えていると自動的に想定します。アプリの許可とマイデータページは有効になりません。が表示され,ユーザーはデータを収集する許可を与えるように求められません。 ');


jr_define('EMPTY_TEMP_DIR', 'Empty temp dir');
jr_define('EMPTY_TEMP_DIR_DONE', '一時ファイルが削除されました');

jr_define('MACHINE_TRANSLATION', '機械翻訳');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', 'ソース言語');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', '機械翻訳機能をフックすることができます。これにより,1つの言語で文字列を入力でき,リモートサービスから翻訳を取得できます。すべての翻訳サービスがすべての言語をサポートしているわけではないことに注意してください。もっと詳しく。');

jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'ルームタイプ');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', '新しい部屋タイプ');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'このページで部屋タイプを作成および編集できます。これらの部屋タイプはこのプロパティにのみ固有です。プロパティを設定するときは,最初にいくつかの部屋タイプが必要です。管理者,または独自の部屋タイプを追加できます。1つ以上の部屋タイプを取得したら,その部屋タイプの部屋を作成できます。部屋を作成したら,料金は部屋タイプにリンクされているため,それらの部屋の料金(価格)を作成できます。 。 ');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'マネージャーは部屋タイプを作成できますか？');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'このオプションを使用して,マネージャーがフロントエンドで独自の部屋タイプを作成できるかどうかを構成します。特にJomresを作成する場合は,このオプションを[いいえ]に設定したままにしておくことを強くお勧めします。管理者エリアですべての部屋タイプを作成する必要があるため,ポータル。管理者が作成した部屋タイプは検索フォームに表示されますが,これらの部屋タイプは個々のプロパティに固有であるため,その部屋タイプを選択すると,検索結果に表示されるプロパティは1つだけになります。スーパープロパティマネージャーのみが部屋タイプを作成できるようにする場合は,このオプションを[はい]に設定したままにし,アクセスコントロールプラグインを使用して,スーパーマネージャーのみが[設定]> [部屋タイプ]メニューオプションを表示できるようにします。プロパティ内の部屋を出て,詳細またはマイクロ管理の料金編集モードを使用すると,このオプションを使用できます。ヴィラ/アパートタイプのプロパティでは使用できません。 ');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', '部屋/プロパティタイプが更新されました');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', '検索オプションに部屋のタイプを表示する');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'プロパティマネージャーが独自の部屋タイプを作成できるようにする場合は,部屋タイプを表示するように選択した検索オプションで,作成した部屋タイプを表示するかどうかを選択できます。');

jr_define('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "予約ごとに同じメールアドレスを再利用しないでください。<br/>ビジネスに一意のドメイン(Gmailのメールアドレスではないなど)がある場合は,ゲストの電話番号を使用してくださいメールアドレスとして。メールアドレスは123456@mydomain.comのようになります。<br/>これにより,予約を作成するときに新しいゲストが確実に作成されます。 ");

jr_define('_JOMRES_LOGIN_USERNAME', 'メールアドレス');
jr_define('_JOMRES_LOGIN_PASSWORD', 'パスワード');
jr_define('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "再度予約させていただきます。すべての予約をまとめて管理できるようにするには,ログインして予約をアカウントに追加する必要があります。これも提供された電子メールアドレスの使用が許可されていることを確認します。 ");

jr_define('_JOMRES_LOGIN_RESET_MESSAGE', 'パスワードがわからない場合は,パスワードリセットメールをお送りします。そのメールの指示に従ってパスワードをリセットしてください。');
jr_define('_JOMRES_LOGIN_RESET_BUTTON', 'パスワードをお忘れですか？');

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'あなたの名前を匿名化しますか？');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'レビュー時に名前を匿名化することを選択した場合は,代わりにイニシャルを使用します。');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', '言った');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'このレビューに返信');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'このレビューへの返信をここに入力してください。');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'あなたの返信');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'メインレビュー');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'レビューの返信が保存されました');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'レビューの返信を送信する前に,以下を読む必要があります。返信を送信することにより,これらの利用規約に同意したことになります。');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'レビュー返信のガイドラインは何ですか？');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'あなたはあなたの財産のレビューに返信しています。あなたはあなたの返信を商事紛争プロセスとして使用してはいけません</ em>。レビューを報告する必要がある場合は,「レポートこのレビュー返信ページではなく,リストの[レビュー]ボタン。 ');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', '返信を残すと,編集できなくなります。');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', '許可および推奨');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li>レビューへの完全な回答。</ li>
    <li>礼儀と誠実さ。</ li>
    <li>レビュー担当者の問題に対する適切な対応(他の人も同様の問題を抱えている可能性がありますが,レビューを投稿する機会がなかったことを忘れないでください)。</ li>
    <li>問題を解決するためにゲストに直接連絡するように勧めます。
    <li>将来のゲストにはあなたの回答が表示されることを常に忘れないでください。常にプロフェッショナルであることを確認してください。</ li>
</ ul>
');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', '許可されていません');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li>商事紛争。</ li>
    <li>レビュー担当者またはその他への質問。</ li>
    <li>疑わしい言葉(ののしりを含む)</ li>
</ ul>
');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', '最終実行');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'スケジュール');


jr_define('_JOMRES_INVOICE_NUMBERS', '請求書番号');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'カスタム請求書番号を使用しますか？');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'カスタム請求書番号を使用するようにシステムを構成できます。新しい請求書のみが影響を受けます。');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', '開始番号');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', '番号は連続して作成されます。最初の番号は何である必要がありますか？');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', '請求書番号はどのような形式にする必要がありますか？');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'ここで請求書番号の形式を構成します。形式は{N} / {D}または{N} / {Y}のようになります。ここで,Nは自動生成された番号,D = YYYYYMMDD(20190131)またはY = YYYY(2019)。中括弧で囲まれていないその他の英字はそのままになるため,{N} / {D} -Lのようなパターンは,請求書番号(21)になります。 21 / 2019-L のように見えます');
jr_define('_JOMRES_SURCHARGE_TITLE', '追加料金');
jr_define('_JOMRES_SURCHARGE_DESC', '予約時に部屋に追加される追加料金(1日あたりの計算)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'サイト全体のラベルを優先しますか？');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'ラベル編集または言語ファイル文字列の翻訳ページに保存されたカスタムテキストは,「サイト全体」のラベルと見なされます。プロパティマネージャは,フロントエンドのラベル編集機能を使用して,各プロパティのラベルをカスタマイズすることもできます。プロパティマネージャーは,プロパティに対して異なるテキストを使用できます。これは,プロパティがサイト上の他のすべてのプロパティと異なる場合に役立ちます。<br/>システムがラベルテキストを検索するとき,プロパティよりもサイト全体のテキストが優先されます。特定のテキストは,そのラベルにサイト全体のテキストが存在する場合,システムが最初にそのラベルを選択することを意味します。このオプションを[いいえ]に設定すると,システムはサイト全体のテキストよりもプロパティ固有のテキストを優先します。');

jr_define('_JOMRES_REFERRER', 'リファラー');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); //これはホワイトリストに登録されている場合は変更される可能性があるため,サイト「世界最高の予約サイト」はこれを「WBBS」などに変更します。
jr_define('_JOMRES_LIBRARY_PACKAGES', 'ライブラリパッケージ');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'ベンダーモジュールとノードモジュールは,Jomres用の個別の(無料の)パッケージです。このページでパッケージを再インストールできます。');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'ライブラリパッケージを再インストールする');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', '一部のプロパティでまだ使用されているため,プロパティタイプを削除できません。このプロパティを削除する前に,まずこれらのプロパティを別のプロパティタイプに変更する必要があります。削除を防止するプロパティUID：');
jr_define('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', '一部のプロパティでまだ使用されているため,プロパティタイプを非公開にできません。このプロパティを非公開にする前に,まずこれらのプロパティを別のプロパティタイプに変更する必要があります。変更を防ぐプロパティUID：');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'ランダムな電子メールアドレス');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'ランダムなメールを提供する');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'ダッシュボードの[クイック予約]ポップアップでシステムがランダムな電子メールアドレスを生成できるようにすることができます。これにより,マネージャーと受付担当者は,電子メールアドレスを持たないゲストの予約を作成できます。これらのランダムな電子メールが実際の通信に使用されることは決してないことを理解している多くの受付/管理者がいるサイトの時間節約として,目的は,Jomresではすべてのゲストが電子メールアドレスを持っている必要があるという事実を回避することです。次のフィールド。 ');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'ランダムメールドメイン');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'これは,GmailやOutlookなどの通常のメールドメインであってはなりません。代わりに,独自のドメインにすることも,「mysite.emails」などの別のドメインにすることもできます。');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'アップロード領域');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'ユーザーロールなし');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', '受付係');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'プロパティマネージャー');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'スーパープロパティマネージャー');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', '一時停止');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'C​​MSから削除');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'Jomresが気に入った場合は,これらのサイトの1つにレビューを残すことを検討してください');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', '私はいい人です,私はすでにレビューを残しました');

jr_define('_LICENCE_PROMPT_DEAR', 'Dear');
jr_define('_LICENCE_EXPIRED', ',Jomresライセンスキーの有効期限が切れているため,これらの優れた機能と利点が不足しています！');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'プラグインの更新と新しいプラグインのリリース');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', '排他的メンバーのみEメール/チケットサポート');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', '心配のないJomresコアの更新');
jr_define('_LICENCE_EXPIRED_POST', 'トラブルのない支払いソリューションのために私たちに接続し,すべてのプラグインとメンバー限定のサポートサービスにアクセスしてください。');
jr_define('_LICENCE_EXPIRED_RESTART', '今すぐすべてのプラグインにアクセスしてください！');

jr_define('_LICENCE_INVALID_KEY', '残念ながら,有効なJomresライセンスキーを使用していないようです。そのため,これらの優れた機能と利点が不足しています！');
jr_define('_LICENCE_INVALID_BENEFITS_1', 'Jomresの機能を大幅に拡張する<ahref = "https://www.jomres.net/jomres-plugins" target = "_blank">プラグイン</a>');
jr_define('_LICENCE_INVALID_BENEFITS_2', '排他的メンバーのみEメール/チケットサポート');
jr_define('_LICENCE_INVALID_BENEFITS_3', '心配のないJomresコアの更新');
jr_define('_LICENCE_INVALID_POST', 'トラブルのない支払いソリューションのために私たちに接続し,すべてのプラグインとメンバー限定のサポートサービスにアクセスしてください。');
jr_define('_LICENCE_INVALID_START', '今すぐすべてのプラグインにアクセスしてください！');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'ダッシュボード');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'ユーザー');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'コミッション');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'サブスクリプション');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', '請求書');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'ポータル');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', '翻訳');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'ツール');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'レポート');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', '設定');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'ヘルプ');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'システムの合計プロパティ');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', '公開されたプロパティ');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', '未公開のプロパティ');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', '承認されたプロパティ');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', '承認が必要なプロパティ');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'レビュー総数');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', '未公開のレビュー');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'レビューレポート');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomresシステム情報');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "このプロパティのプロパティタイプは公開されていません。検索結果に表示されない場合があります。サイト管理者に連絡してプロパティタイプを公開するか,[プロパティの編集]ページでプロパティタイプを変更してください。");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'プロパティタイプを更新します');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', '収入(支払額)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'プロパティ機能を削除できません "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"次のプロパティで使用されるため：');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST APIテスト');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'このページは,Jomresの組み込み機能を使用してREST APIの基本的なテストを実行します。JomresRESTAPIを呼び出して,有効な応答を受信するかどうかを確認します。');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'サーバーはこのURLを呼び出して,応答が有効かどうかを確認しました：');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'ページはこの応答を受信しました：');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'テストは期待どおりに行われたようで,インターネットの他の部分からのREST APIリクエストの受信に問題はないでしょう。');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'テストに失敗しました。HTMLが多いように見える場合は[応答]フィールドを確認するか,404メッセージを受信した場合,サーバーは呼び出しを別のURLにリダイレクトしています。これによりAPIを受信できなくなります。呼び出し。 ');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'シンジケーションテスト');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'JomresアプリサーバーはすべてのJomresサイトのリストを維持します。これにより,シンジケーションネットワークを構築できます。このネットワークは,ユーザーが自分のサイトの他のサイトのプロパティを表示できるように設計されており,便利です。特に新しいサイトの場合,ネット上にSEOプレゼンスを構築します。目標は,すべてのJomresサイトが連携して,ネットワークへの信頼を構築することです。このサービスは無料です。 ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'サイトは現在,シンジケーションネットワークの一部であるJomresアプリサーバーにリストされていません。このサーバーは,次の6ページの読み込み時にこのサーバーをネットワークに追加しようとします。ページの読み込みが少ない場合,これは変更されません。上記の接続テストがテストに合格することを確認してください。ローカルサーバーをネットワークに追加できないことに注意してください。 ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'おめでとうございます。サーバーはJomresアプリサーバーにリストされています。');

jr_define('_JOMRES_SYNDICATION_TITLE', 'シンジケートプロパティ');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'プロパティネットワークから利用できる他のプロパティがいくつかあります');

jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'シンジケーション統計');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'おめでとうございます。サーバーはJomresシンジケーションネットワークにリストされています。プロパティがまだ表示されていない場合は,すぐに他のJomresサイトに表示されるようになります。');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'インストールはJomresSyndication Networkの一部ではないため,プロパティは他のJomresベースのサイトに表示されず,この無料広告の恩恵を受けることはできません。');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'アクティブなJomresインストール：');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'サイトでJomresSyndication Networkプロパティを共有しているJomresインストールの総数。');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', '合計プロパティ：');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'これはJSNで使用可能なプロパティの数です。');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'プロパティの合計表示数：');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', '合計で,Jomresプロパティが別のJomresベースのサイトからリンクされているすべての時間。');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'Jomres Syndicate Network(JSN)は,すべてのJomresユーザーが利用できる無料の機能です。その目的は,他のJomresベースのサイトでプロパティの無料広告を提供することです。あなたはあなたのサイトを早く立ち上げ,無料の広告を提供して,あなたの財産が検索エンジンにすでによく知られている信頼性と関連性の高いウェブサイトにリンクされているので,あなたの財産が認識され信頼されるようにします。これを参照してください<a href = "https： //www.jomres.net/features/jomres-syndication-network" target="_blank">当社のウェブサイトの記事</a>および<a href = "https://www.jomres.net/manual/developers-ガイド-2 / 387-jomres-syndication-network" target="_blank">詳細については,マニュアル</a>。 ');


jr_define('GUEST_PROFILE_INFORMATION', 'これはゲストプロファイルデータであり,この記号が付いたフィールド<i class = "fa fa-users" aria-hidden = "true"> </ i>
 は一般公開されていますが,この記号が<i class = "fa fa-user-secret" aria-hidden = "true"> </ i>のフィールドは,あなた,ホスト,サイト管理者だけが見ることができます。<br/> <br/>ホストは,あなたがすでに予約を作成している場合にのみ個人情報を見ることができます。<br/> <br/>あなたの情報は安全に暗号化され,AES-256暗号化を使用してデータベースに保存されます。');

jr_define('GUEST_PROFILE_OPTIONAL', 'これらのフィールドはオプションですが,ホストはここの情報を使用して,あなたを信頼できると感じているかどうかを判断できます。したがって,情報を追加することをお勧めします。財産であり,あなたが適切ではないと感じたり,あなたの略歴に十分な情報が含まれていないと彼らが感じた場合,彼らはあなたを断る可能性があります。');

jr_define('GUEST_PROFILE_DRIVING_LICENSE', '運転免許証');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'パスポート番号');
jr_define('GUEST_PROFILE_IBAN', 'IBAN番号');
jr_define('GUEST_PROFILE_ABOUT_ME', '自己紹介');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'この「自己紹介」セクションは一般公開されているため,個人情報を入力しないでください。ただし,情熱や自分が何を共有できるかなど,できるだけ多くの情報を入力するように努めてください。生活や趣味などのために行います。マークアップを使用してジャズを少し加えることができます。ホストは,自分の特性であなたを信頼できると感じたいと思うでしょう。あなたの写真があなたの犬ではなく,あなたの本当の写真であることを確認してください。または車(はい,みんな,私たちはあなたと話しているのです！) ');

jr_define('GUEST_PROFILE_PREFERENCES', 'アクセスのしやすさなど,特別な要件をここに入力します。これらは公開プロフィールには表示されませんが,予約時に予約情報に追加されます。');

jr_define('VIEW_HOST_PROFILE', 'ホスト\のプロファイル');

jr_define('GUEST_PROFILE_TITLE', 'ゲストプロファイル');
jr_define('GUEST_PROFILE_TITLE_MY', 'マイプロファイル');

jr_define('GUEST_PROFILE_WELCOME', 'こんにちは,私自身について少しお話ししましょう。');
jr_define('GUEST_PROFILE_MY_NAME', '私の名前は');
jr_define('GUEST_PROFILE_I_COME_FROM', 'そして私はから来ています');
jr_define('GUEST_PROFILE_IN', 'region in');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', '私の個人情報');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'ゲストとホストの情報を検証するために最善を尽くしますが,自分でデューデリジェンスを行い,この人物が信頼できるかどうかを自分で判断する必要があります。');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'マイプロパティ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'マイレビュー');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'これは私がこのプロパティについて言ったことです：');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'このプロパティに次の評価スコアを付けました：');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'マイレビュー');
jr_define('GUEST_PROFILE_OF_ME', '他の人が私について言うこと');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'このホストが私について言ったこと');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'レビューゲスト');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'このゲストの私のレビュー');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'ボールを転がすためのゲストレビューの例をいくつか示します：<br/>

<ul>
<li>(ゲスト名)はホストするのが楽しみでした！彼らはスペースをきれいに残し,週末を通して静かでした。彼らはスムーズなコミュニケーションを取り,また私と一緒にいてくれることを楽しみにしています！</ li>
    <li>(ゲスト名)が大好きだったのは,彼らがその場所を敬意を持って扱い,楽しい時間を過ごし,その地域を楽しむことができたからです。彼らはスペースを借りることで素晴らしかったです,そして私は彼らを再びホストするようになることを願っています。</ li>
    <li>私の家のルールはすべて(ゲスト名)を尊重し,簡単に出入りすることができました。彼らは礼儀正しく静かだったので,私は彼らがそこにいるのが好きでした。他の人にも強くお勧めします！</ li>
</ ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', '申し訳ありませんが,そのユーザーが見つかりません。おそらく,アカウントの詳細をまだ入力していません。');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'ゲスト');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'ホスト');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'JomresはBootstrapフレームワークに基づいて構築されているため,Bootstrapに基づくテーマで使用する必要があります。Bootstrap3に基づくものをお勧めします。テーマにアクセスできない場合は,を使用することをお勧めします。 WordpressのJomresLeohtianテーマ<ahref = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank ">ここからダウンロードしてください。</a> ');


jr_define('BOOKING_NOSHOW_MENU', 'ノーショーとしてマーク');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', '予約はノーショーとしてマークされています');
jr_define('BOOKING_NOSHOW_BOOKINGS', '予約');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'ノーショー');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'このユーザーのJSN統計');

jr_define('BOOKING_NOSHOW_INFO', '予約および表示なしの情報は,予約時にJomres Syndicate Networkから取得されます。匿名化されたデータから取得され,このゲストが予約を履行しないリスクがあるかどうかを判断するために使用できます。システムはデータが不明であると報告します。これはおそらく,このシステムがネットワーク上で認識されていないためです。');

jr_define('BOOKING_NOSHOW_UNKNOWN', '不明');

jr_define('CMF_CONFIG_TITLE', 'チャネル管理フレームワーク');
jr_define('CMF_CONFIG_KEY', 'チャネル管理フレームワークキー');
jr_define('CMF_CONFIG_KEY_DESC', 'チャネル管理フレームワークのライセンスキー。チャネル管理フレームワークのプラグインをダウンロードできるようにするには,このキーを指定する必要があります。');

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'プロパティは承認されていません');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "あなたのプロパティは未承認です。これが誤って行われたと思われる場合は,お問い合わせください。");

jr_define('_JOMRES_GUESTTYPES_IS_CHILD', "これは子ゲストタイプですか？");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "このゲストタイプが子ゲストタイプとして分類される場合は,これを[はい]に設定します。");

jr_define('_JOMRES_GUESTTYPES_INTRO', "1人1泊あたりの料金を請求する場合は,いくつかのゲストタイプを作成する必要があります。");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS', "必要な数のゲストタイプを作成できます。まず,「アダルト」というゲストタイプを1つだけ作成してみてください。すべての設定をデフォルト値のままにします。次に,たとえば,12歳未満の子供に50％の割引を与えると,新しいゲストタイプを作成し,「12歳未満の子供」と呼びます。「分散を追加しますか？」オプションを-(負)に設定し,「分散」を50に設定します。子供が予約に追加されると,部屋の部屋代の50％が請求されます。 ");

jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "価格を手動で設定");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "最低宿泊日数を手動で設定");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "最小宿泊日数を設定");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "曜日ごとに<em> 1泊あたりの料金</ em>を設定");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "日付範囲で<em> 1泊あたりの料金</ em>を設定");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "日付範囲で<em>最小宿泊日数</ em>を設定");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "日付ピッカーとレート入力を使用すると,特定の日付範囲に1つの価格を設定できます。開始日と終了日を選択し,価格を入力して,[1泊あたりの価格を設定]ボタンをクリックします。");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "日付ピッカーと最小夜数の入力により,特定の日付範囲の最小夜数に1つの値を設定できます。開始日と終了日を選択し,最小夜数の数値を入力して,[設定]をクリックします。最低宿泊日数 '。 ");

jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "このドロップダウンを使用して,個々の日付の価格の設定から,個々の日付の最低宿泊日数の設定を変更します。<em>曜日別</ em>ピッカー,<em>日付別<em>を使用できます。範囲</ em>ピッカー,または手動で日付を編集して価格/最低宿泊日数を設定します。 ");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "このドロップダウンを使用して,個々の日付の価格の設定から,個々の日付の最小宿泊日数の設定を変更します。<em>日付範囲別</ em>ピッカーを使用するか,料金/最低宿泊日数を設定できます。手動で日付を編集します。 ");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "価格または最低宿泊日数を設定");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW', "曜日ごとに<em>最小夜数</ em>を設定");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "曜日フィールドを使用すると,特定の曜日の最小夜数を設定できます。曜日ボタンをクリックすると,すべての曜日がその最小夜数設定に設定されます。 ");


jr_define('_JOMRES_MICROMANAGE_MANUALLY', "手動で価格を設定/最低宿泊日数");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES', "価格を設定");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS', "最小宿泊日数を設定");

jr_define('_JOMRES_MICROMANAGE_PRICE', "1泊あたり");
jr_define('_JOMRES_MICROMANAGE_MINDAYS', "最小の夜");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS', "最大夜数");

jr_define('_JOMRES_MICROMANAGE_INTRO', "ここでは,プロパティにある部屋のタイプに関連付けられた料金表を作成できます。");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "最も一般的に使用されるオプション");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON', "手順");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "ゲスト数ごとに異なる価格を追加する場合は,<em>部屋タイプごとに複数の料金を作成し</ em>,それらの料金に異なる最小/最大ゲスト値を設定できます。 ");

jr_define('_JOMRES_MICROMANAGE_INFO', "料金表に名前を付け,最大宿泊日数,および料金表が提供される前に予約フォームで必要な最小および最大ゲスト数を定義します。<br/> <br/>使用日付ピッカーパネルを使用して,日付の範囲に価格と最低宿泊日数の設定を追加するか,入力を直接編集します。特定の日付に料金をまったく提供したくない場合は,価格を0(ゼロ)に設定したままにします。 <br/> <br/>日付ごとに最小宿泊日数を変えることができるため,フェスティバル/会議の週に予約を長くしたい場合は,それらの期間だけで最低宿泊日数を高く設定できます。<br / > <br/> Per Person Per Pight(PPPN)を請求する場合は,[設定]> [プロパティ構成]> [料金と通貨]タブでその設定を有効にしてから,[設定]> [ゲストタイプ]で必要なゲストタイプを作成できます。 ");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "追加オプション");
jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "これらは,それほど一般的には使用されないが,それでも利用できる追加のオプションです。<br/> <strong> PPPNを無視する</ strong>は,1人1泊あたりを無視することを意味します。複数の異なる料金を設定できます。同じ部屋タイプの場合,たとえば,1人1泊あたりの料金と,料金がかからないものがあります。<br/> <strong>週末を許可する</ strong> [週末を許可する]オプションを使用すると,唯一の料金を設定できます。たとえば,ビジネス旅行者向けの特別料金が必要な場合など,平日に利用できます。その場合は,オプションを[いいえ]に設定し,最小夜を1に,最大夜を最大5に設定します。<br/> <strong>週末のみ</ strong> [週末のみ]オプションは,[週末を許可]オプションの逆です。週末と見なすものは,プロパティ構成設定で構成できます。これにより,週末のみのレートを定義できます。特別なイベントのオファー。<br/> <strong>チェックイン曜日</ strong>このオプションを使用すると,チェックインを特定の曜日にのみ強制することができ,[プロパティの構成]> [予約]タブ> [固定期間]オプションと組み合わせて使用​​するのが最適です。大多数のユーザーは,このオプションを[すべて]に設定したままにしておきます。<br/>最後の2つのオプション,<strong>最小の部屋はすでに選択されています</ strong>と<strong>最大の部屋はすでに選択されています</ strong>は非常に特殊であり,非常に複雑な料金の物件に役立ちます。 <em>特定のニーズがない限り,これらのオプションはそのままにしておく必要があります。</ em>ゲストが予約フォームですでにN個の部屋を選択している場合にのみこの料金を提供する場合は,これらのオプションを使用します。たとえば,これらのオプションがデフォルトのままである1つの基本料金と,すでに選択されている最小部屋オプションが1に設定されている2番目の料金を設定できます。この2番目の料金は,部屋が選択されると予約フォームで提供されます。」 ");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "同じ部屋タイプに対して複数の料金表を作成できるため,1〜7の最小/最大日数に対して1つの料金表を作成し,最小日数が7,最大日数が14,およびこれにより,必要に応じて単純または複雑な価格設定スキームを作成できます。また,さまざまな条件で複数の料金表を作成できるため,Bed＆Breakfastの料金が安い2番目の料金表を作成できます。ベッド,朝食,夜の食事のためのより高価な料金の別のセット。 ");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "日付ピッカーの日のみを設定");
jr_define('_JOMRES_PROPERTY_HCATEGORIES', 'プロパティカテゴリ');
jr_define('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'プロパティカテゴリの編集');
jr_define('_JOMRES_STOP_READTHISFIRST1', "Stop！");
jr_define('_JOMRES_STOP_READTHISFIRST2', "Jomresをインストールしていただきありがとうございます");
jr_define('_JOMRES_STOP_READTHISFIRST3', "プロパティ管理は,管理者領域ではなく,公開されているページで実行されます。");
jr_define('_JOMRES_STOP_READTHISFIRST4', "Jomresに慣れていない場合は,[ヘルプ]セクション> [はじめに]ページにアクセスしてください。");


jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE', "Jomresシンジケートに参加");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC', "サイトをセットアップし,訪問者の受け入れを開始する準備ができたら,Jomres.netシンジケートに参加して,他のJomresサイトにプロパティをリストします。");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "料金表を作成するには,次のいずれかのタイプの部屋が少なくとも1つ必要です：");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "[設定]> [部屋]に移動し,最初に部屋を作成します。これが完了すると,その部屋タイプの料金を作成できるようになります。");

jr_define('JOMRES_PLATFORM', "Jomres Platform");


jr_define('JOMRES_PLATFORM_CONNECTED', "接続済み");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC', "StripeアカウントをすでにJomresプラットフォームに接続している場合は,これを[はい]に設定します。");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID', "ストライプライブアカウント番号");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "これは,Stripeダッシュボードの[設定]> [アカウント情報]にあるStripeアカウントIDで,acct_xxxxxxxxxのようになります。複数のJomresがインストールされていて,同じアカウントを使用する場合は,このフィールドを使用します。 Jomresプラットフォームに接続していない場合は,ここに詳細を入力するだけでは不十分です。代わりに,ツールバーの[ヘルプ]セクションにある[接続を取得]メニューオプションにアクセスしてください。支払いをテストするには,サイト構成の[デバッグ]タブで,サイトを本番環境から開発環境に設定します。 ");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY', "ストライプライブ秘密鍵");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'StripeDashboardの[開発者]> [APIキー]に移動して秘密キーを検索します。これらは,支払いフォームから返された予約データが有効であり,予約を保存する前にデポジットが支払われていることを確認するためにシステムによって使用されます。 。 ');

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY', "ストライプテスト秘密鍵");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');

jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', '標準料金モード');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Sleeps');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'このプロパティは何人収容できますか？');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', '1日の料金に含まれるゲストの数');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', '追加の大人の価格');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', '子供');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', '1人1泊あたり？');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7日修飾子');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', '予約が7日以上の場合,日割りの割引。割引を適用しない場合は,これをゼロに設定したままにします。');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30日修飾子 ');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', '予約が30日以上の場合,日割りの割引。割引を適用しない場合は,これをゼロに設定したままにします。');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', '大人');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', '大人2名に基づく価格');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', '予約はから割引されます');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'から');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', '予約が7日を超えているため。');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', '予約が30日を超えているため。');


jr_define('JOMRES_CITY_TAX_HEADING', '市税');
jr_define('JOMRES_CITY_TAX_VALUE', '市税額');
jr_define('JOMRES_CITY_TAX_METHOD', '税計算方法');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', '単一料金');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', '1泊あたり');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'ゲストごと');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'ゲスト1人あたり1泊');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', '簿価のパーセンテージ');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'クリーニング料金');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'クリーニング料金の費用');


jr_define('JOMRES_COMPATABILITY_MODE', '互換性プロパティ構成モードを強制しますか？');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "互換性プロパティ構成モードでは,いくつかのことが発生します。古いバージョンのJomresでは,プロパティマネージャーは,使用する料金編集モードを選択でき,その他のさまざまな設定(一部は混乱しているように見える場合があります)があります。互換性構成を有効にすると,すべての新しいプロパティで,価格設定,子価格設定などに関してbooking.comプロパティ構成機能をモデル化する標準料金編集モードのみが使用されます。9.22以降に作成されたインストールの場合は,.0の場合,このオプションは[はい]に設定する必要がありますが,古いインストールの場合,新しいプロパティを作成時に自動的に互換性モードに設定するかどうかを決定するのはあなた次第です。 ");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', '18歳未満の子供を受け入れますか？');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "子を許可する場合は,このオプションを[はい]に設定します。はいの場合,[設定]メニューに,子に関連する設定を編集できる[子ポリシー]というオプションがあります。");

jr_define('JOMRES_POLICIES_CHILDREN', '子ポリシー');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', '子供は何歳で許可されますか？');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', '子供ごと,夜ごと');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', '子供ごと,滞在ごと');

jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', '子レート');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', '新しい子レート');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', '子レートの編集');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'ここで無料または有料の子供料金を作成します。料金は,部屋タイプの占有レベルを作成した場合にのみ適用されます。');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', '年齢から');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', '年齢から');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', '1泊あたり,または1滞在あたり？');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'レート');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'ゼロまたは設定されていない場合,この年齢範囲の子供は無料になります。');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'チェックイン時の年齢');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', '年齢');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', '占有レベル');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', '最大成人');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', '最大の子');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', '最大占有率');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', '次の占有レベルを編集：');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'この部屋タイプの占有レベルを編集します。ベビーベッドで寝ているゲストは含めないでください(エクストラを作成することで追加されます)');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', '追加の大人ごとに,いくら請求する必要がありますか？');

jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'エクストラアダルト');


jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', '子レートをまだ構成していません。');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', '子レートを今すぐ設定');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', '子を許可するようにプロパティを構成しましたが,子の占有レベルはまだ設定していません。');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', '占有レベルの設定');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', '部屋またはプロパティタイプを編集するときはいつでも,予約フォームで受け入れることができるゲストの数に影響するため,プロパティ/部屋の占有レベルを確認および更新する必要があります。');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Adults');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', '子供');


jr_define('_JOMRES_CONFIG_LEVEL_TITLE', '管理者オプションレベル');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomresには,サイトを構成するときに使用できる多くのメニューと構成オプションがあります。それらの大部分は変更する必要がないため,デフォルトで非表示になっています。管理オプションレベル。基本レベルには,サイトを初めてセットアップするときに必要なものだけが表示されます。共通レベルには,最も一般的に変更されるオプションが表示され,すべてには,管理者領域で可能なすべての設定とメニューオプションが表示されます。 ');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Basic');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'C​​ommon');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'すべて');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Jomresの使用方法に関する情報を収集できますか？');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Jomresの使用方法に関する情報を収集したいと思います。個人を特定できる情報は保存されず,使用状況は匿名化され,人々がJomresをどのように使用するかを理解するためにのみ使用されます。');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'うん,それは大丈夫');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'いいえ,同意しません');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', '複数のプロパティの予約を取りますか？');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomresは,単一または複数のプロパティサイトに使用できます。1つのプロパティのみの予約を行う場合,多くのオプションが冗長になり,混乱を招く可能性があります。この設定は,後で[設定]> [サイト]で変更できます。 [構成]> [ポータル機能]タブ。 ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', '1つのプロパティのみ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', '複数のプロパティを一覧表示します');


jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "テンプレート/テーマがサポートするBootstrapフレームワークのバージョンはどれですか？");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "ブートストラップフレームワークの各バージョンには,わずかに異なるhtmlマークアップが必要です。Jomresには,ブートストラップバージョンごとに1つずつ,3セットのブートストラップ互換テンプレートセットがあります。適切なテンプレートセットを使用するように構成する必要があります。レイアウト,モーダル,メニューなどの出力が正しく機能しません。後で別のブートストラップバージョンでテンプレート/テーマを使用する場合は,Jomresが[管理]> [Jomres]> [設定]で使用するブートストラップテンプレートセットを変更できます。 >その他のタブ<br/> <br/> Joomla3はデフォルトでBootstrap2とともに配布され,Joomla4はBootstrap5を使用します。JomresLeohtianテンプレート(Joomla)とテーマ(Wordpress)はBootstrap3を使用します。異なるテンプレート/テーマは独自のブートストラップファイルとともに配布されるため,疑問がある場合は,テンプレート/テーマの開発者に連絡してください。 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "ブートストラップ2");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "ブートストラップ3");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "ブートストラップ4");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "ブートストラップ5");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', '出力価格から小数を削除しますか？');

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'group by fix？');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', '一部のmysqlインストールでは,[リストのプロパティ],[ゲストのリスト],および[請求書のリスト]ページのJomresクエリで問題が発生する可能性があります。 [はい]を選択すると,問題が解決する場合があります。共有ホスティングを使用していて,ホスティングサービスでmysqlユーザーが "SET GLOBAL sql_mode ="コマンドを発行できない場合は修正されません。 ');
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'これはチャネルプロパティです。ローカルで管理することはできません。チャネル管理フレームワークページにアクセスして,プロパティのリモート管理リンクを見つけてください');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "テーマにブートストラップがありません");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'ソーシャルメディアリンク');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'ソーシャルメディアアカウント名をここに入力します。たとえば,URL全体ではなく "jomres"');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', '組織が話す言語のコンマ区切りリスト');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', '組織のロゴへのURL');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres更新');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', '新しいバージョンのJomresが利用可能です。更新により機能が向上し,インストールの安全性が確保されるため,Jomresを引き続き使用するには,更新する必要があります。');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', '今すぐJomresを更新');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'プラグインの更新');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'プラグインマネージャーで利用可能なプラグインの新しいバージョンがあります。更新により機能が向上し,インストールの安全性が確保されるため,Jomresを引き続き使用するには,すべてのプラグインを更新する必要があります。');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', '更新するプラグイン');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'ライセンスが無効になった場合は,当社のWebサイトから新しいライセンスキーを取得できます。');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'プラグインの更新');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', '新しいキーを取得');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', '新しいキーを保存');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES', "プロパティタイプの画像");

jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE', "予約のヘルプが必要ですか？");
jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB', "以下の番号のカスタマーサービスチームに電話して,休日のすべてのニーズに対応する担当者の1人に相談してください。");

jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE', "なぜ私たちと一緒に予約するのですか？");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', "最高の予約料金を提供します");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', "現在市場で最も価格の高い物件があります。");
jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', "予約手数料なし。お金を節約！");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', "優れたプロパティの選択");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', "プロパティ");
jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', "ゲストレビュー");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', "私たちは常にここにいます");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "いつでも電話またはメールでお問い合わせください");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', "旅行前,旅行中,旅行後に24時間サポートを受ける");

jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', "ソーシャルメディア");
jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', "ソーシャルメディアで私たちを見つけてください");

jr_define('JOMRES_REVIEW_SCORE_TOP_1', "優れた");
jr_define('JOMRES_REVIEW_SCORE_TOP_2', "例外的");
jr_define('JOMRES_REVIEW_SCORE_TOP_3', "すばらしい");
jr_define('JOMRES_REVIEW_SCORE_TOP_4', "すばらしい");
jr_define('JOMRES_REVIEW_SCORE_TOP_5', "ファンタスティック");

jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "とても良い");
jr_define('JOMRES_REVIEW_SCORE_GOOD', "Good");

jr_define('JOMRES_REVIEWS_NONE_NEW', "新しいリスト");
jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "割引");

jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'どこに行きたいですか？');
jr_define('DATA_SOURCES_TITLE', "データソースを更新");
jr_define('DATA_SOURCES_TITLE_INFO', "データソースが更新されました。データソースは検索ウィジェットのオートコンプリート入力フィールドで使用され,通常は自動的に更新されますが,このページでは,必要に応じてデータを手動で更新する必要があります。");

	jr_define('_ OAUTH_TOKEN_REQUEST_URI', "トークンリクエストを送信するには,このURLにリクエストを送信してください");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "メインビュープロパティスクリプト");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "表示するプロパティのプロパティuid");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "デフォルトのテンプレートはproperty_details.htmlです。この引数を使用すると,表示する別のプロパティ詳細テンプレートを定義できます。");

jr_define('JOMRES_UPDATES_TITLE', 'Jomres Updates');
jr_define('JOMRES_UPDATES_INFO', "このページでは,最新バージョンのJomresをダウンロードしてインストールできます。ホストCMSの機能ではなく,独自の機能を使用するため,ホストCMSの更新中に問題が発生した場合は,このページを使用して Jomresの最新バージョンの再インストールを強制します。 ");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'プロパティマネージャーはフロントエンドの編集モードを使用して各プロパティの文字列をカスタマイズできますが,これはWordPressパーマリンク設定がプレーン(http://www.domain.com/？p=123)これを行うと,フロントエンドユーザーは,部屋の名前やその他のラベルなど,一意のプロパティに固有の文字列をカスタマイズできるようになります。 ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'ラベル編集モード');
jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'この機能は,アイテムのラベルを通常は異なる言語に変更するために使用されます。');
jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', '編集モードでは,個々のプロパティに固有のラベルの名前を変更できます。編集モードを使用してラベルの名前を変更すると,変更はそのプロパティリストにのみ表示されます。 「価格」という単語と「料金」という単語を使用します。すべてのラベルを変更できるわけではありません。たとえば,部屋のタイプ名はサイト全体のラベルであるため,変更することはできませんが,通常は個々のプロパティに固有のものです。変更可能。');
jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'サイトが複数の言語をサポートしている場合,1つの言語を使用しながら,個々のプロパティに固有のアイテムを作成できます。アクティブな言語を変更すると,編集モードを使用してそのラベルの名前を変更できます。現在の言語で適切な翻訳を入力します。アクティブな言語を変更し続けて,サイトがサポートする各言語のそのラベルに適した翻訳を入力できます。');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'ラベル編集モードスイッチ');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'このスクリーンショットでは,編集モードスイッチが表示されています。編集モードはオフで,ラベルは通常どおり表示されます：');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'ラベル編集モードが有効');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'このスクリーンショットでは,編集モードでは,名前を変更できるラベルが強調表示されていることがわかります。');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', '変更するアイテムを選択してください');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'ラベルを選択すると,ポップアップが表示されます：');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'ラベルを変更する');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', '小さなフォームを使用してラベルを変更します。チェックマークをクリックして終了するか,Xをクリックして編集をキャンセルします：');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'ラベルが変更されました');
jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', '変更を保存すると,ページのラベルが更新されます。編集モードを無効にできます：');

jr_define('JOMRES_TRANSLATIONS_TITLE', '翻訳');
jr_define('JOMRES_TRANSLATIONS_LEAD', 'このページでは、ラベルをある言語から別の言語に翻訳できます。このページにアクセスすると、作成済みの文字列と、現在使用している言語での値が表示されます。 ターゲット言語、次に翻訳するラベルについて、ラベルをクリックすると、ポップアップで新しい翻訳を入力できます。長いテキスト行の場合は、別のソースからのテキストを貼り付けることができます。HTMLはすべて削除されることに注意してください。 。<br/>
個々のページにアクセスする代わりに、ターゲット言語を現在の言語に設定したままにして、このページを使用してここでアイテムの名前を変更できます。');
jr_define('JOMRES_TARGET_LANGUAGE', 'ターゲット言語');

	jr_define('API_CLIENTS_INFO', 'API クライアントはクライアント ID/秘密鍵のペアで、リモート システムが API 機能を使用できるようにするものであり、使用許可を与えます。このページでは、クライアント/秘密鍵のペアを必要な数だけ作成できます。 必要な権限の任意の組み合わせ。');
	jr_define('CLIENT_TOKEN', 'アクセストークン');
	jr_define('CLIENT_TOKEN_INFO', "クライアント ID とシークレットを使用してアクセス トークンを要求できます。クライアントによっては、そのアクセス トークンが既に作成されている場合があります。その場合は、このアクセス トークンを使用できます。 侵害された場合、または単に変更したい場合は、クライアントのトークンを期限切れにすることができます。クライアント/シークレット ペアに関連付けられているすべてのトークンが期限切れになります。");
	jr_define('DELETE_TOKEN', '期限切れトークン');

	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_CURRENCY', "通貨を選択してください" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_LANGUAGE', "言語を選択してください" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER',"登録" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_SIGN_IN', "サインイン");
	jr_define( 'JOMRES_BS5_TOP_PANEL_LIST_YOUR_PROPERTY', "あなたの物件をリストする");
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER_FIRST', "最初に登録してログインする必要があります");

	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_SHOWFILTERS',"フィルターを表示");
	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_HIDEFILTERS',"フィルターを非表示");

	jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES_INFO', "ページに表示されるテキストは言語ファイルに保存されます。ページに言語文字列を表示する Jomres システムは、これらの言語ファイルを直接編集する必要がないことを意味します。代わりに、この上でこれらの文字列を編集できます。 強調表示されたテキストをクリックし、表示する新しいテキストを入力フォームに入力します. チェックマークをクリックすると、その変更がデータベースに保存されます. これは、すべての変更が保存され、 Jomres を更新しても上書きされません. If you want to change text for different languages use the language selection dropdown on the right, to change the current language. テキスト文字列は、異なる場所で使用されるため、言語ファイルの異なる場所で繰り返されることがあります そのため、ブラウザーの検索機能を使用して、正しい文字列を編集したことを確認することを忘れないでください。");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN', "すべてのプロパティ管理は、サイトのフロントエンドで実行されます。現在、プロパティ マネージャーとしてログインしていません。最初にログインしてから、プロパティを管理できるようになります。");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN_EXPOSITION_FOR_NEW_USERS_JOOMLA', "Jomres を最初にインストールすると、管理者ユーザー用のスーパー プロパティ マネージャーが作成され、予約というメイン メニューに新しいオプションが追加されます。このメニュー項目を削除しないでください。提供されたボタンを使用してログインし、 プロパティの管理を開始するには、[予約] ページを開きます。");

	jr_define('_JOMRES_COM_A_GATEWAYLIST_INFO', 'このページでは、デポジットの支払いを受け取る支払いゲートウェイを設定できます。支払いゲートウェイのアカウントが必要です。設定ページには、ゲートウェイの設定方法が記載されています。 The gateway has a test mode and if Test Mode is enabled, you as a property manager will be able to use the payment gateway to test your configuration. テストモードが無効になっている場合、管理者以外のユーザーのみが予約プロセス中に支払いゲートウェイを見ることができます .');

	jr_define('_JOMRES_COM_A_GATEWAYLIST_TEST_MODE_STR', "テストモード");

	jr_define('JOMRES_ADMIN_UPDATE_NIGHTLY_WARNING', "開発モードが有効になっているため、この機能を使用すると Jomres のインストールを Nightly ブランチに更新することになります。これは Jomres の最新バージョンであり、安定している場合と安定していない場合があります。 Nightly に更新したくない場合は、[管理] > [Jomres] > [設定] > [サイトの構成] > [デバッグ] タブにアクセスし、[運用/開発] オプションを [運用] に設定してください。");