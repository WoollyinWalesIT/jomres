<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Rezervasyon yap');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Profilleri göster');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Mülkiyet konfigürasyonu');
jr_define('_JOMRES_COM_MR_BACK', 'Geri');
jr_define('_JOMRES_COM_MR_YES', 'Evet');
jr_define('_JOMRES_COM_MR_NO', 'Hayır');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Yeni');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Yeni mülkiyet');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Yeni misafir');
jr_define('_JOMRES_COM_MR_SAVE', 'Kaydet');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'İsim');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Giriş tarihi');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Çıkış tarihi');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Kullanıcı adı');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Erişim seviyesi');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Kullanıcı tarafından değiştirilmiş');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Tüm rezervasyonlar');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Rezervasyonu düzenle');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Varış/Dönüş');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Misafir');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Oda');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Ödeme');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Ad');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Soyad');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Özel durumlar');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Özel durumlarda ekstra ücretlendirme uygulanabilir.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Rezervasyonu iptal et');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Evin adı ya da numarası');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Sokak No');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'İlçe');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Posta kodu');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Ev telefonu');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Cep telefonu');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-Posta');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Giriş yapıldığı için iptal edilemez.');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Depozito ödenmedi');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'İptal etmeyi onaylıyor musunuz?');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervasyon iptal edildi');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Varışa kalan gün');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Rezervasyon tipi');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Kapalı odalar');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Resepsiyon');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'İnternet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Oda numarası');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Oda');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Kat');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Engelli kullanımına uygun mu?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Azami kişi sayısı');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Oda/mülk tipi');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Oda/mülk tipi açıklaması');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Odanın özelliklerit');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Depozito ödendi');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Depozitoyu girin');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Ödenecek toplam miktar');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Depozito geri ödemesi');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervasyon');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Depozito');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Depozitonuz kaydedildi');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Odalarımız');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Mülk');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Oda/mülk tipi');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Misafirin bilgilerini düzenleyin');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Ad');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Soyad');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Ev');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Sokak');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'İlçe');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Posta kodu');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Ev telefonu');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Cep telefonu');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Faks');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Seçiminizi yapın');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Gece');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Toplam');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Odalara gözat');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Odalar');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Oda özellikleri');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Oda tipleri');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'İş');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Mülk özellikleri');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Oda');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tip');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'İsim');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Numara');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Kat');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Azami kişi sayısı');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Özellikler');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Değiştir');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Oda özellikleri');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Özellik açıklaması');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Oda özelliği eklendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Oda özelliği güncellendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Oda türleri');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Oda/mülk tipi özeti');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Oda/mülk tipi açıklaması');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Oda/mülk tipi eklendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Düzenle');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Mülk adı');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Sokak');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'İlçe');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Bölge');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Ülke');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Posta kodu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Telefon');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Faks');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'E-Posta');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Web sitesi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Özellikler');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Güncellendi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Mülk özellikleri');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Mülk özelliği özeti');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Mülk özelliği tam açıklamas');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Mülk özelliği güncellendi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarifeler');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Tarife adı');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Açıklama');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Geçerlilik tarihi başlangıcı');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Geçerlilik tarihi bitişi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Gecelik ücret');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Asgari gün sayısı');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Azami gün sayısı');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Asgari kişi sayısı');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Azami kişi sayısı');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Kaynak/mülk tipi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignore PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Hafta sonu müsait');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Düzenle');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Kopyala');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tafire silindi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Düzenle');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervasyon kaydedildi');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Bir misafir giriş yaptı');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Bir misafir çıkış yaptı');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Rezervasyonları listele');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Kontrol paneli');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Konuk yönetici');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Mülk yöneticisi');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Uygunluğu kontrol et');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Ad');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Soyad');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Ev numarası');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Sokak');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'İlçe');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Posta kodu');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Ev telefonu');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Cep telefonu');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Seçtiğiniz kriterlere uygun oda bulunamadı');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Bizimle rezervasyon yapmış olduğunuz için teşekkür eder, konaklamanızın tadını çıkarmanızı dileriz.<br><br> <b>Lütfen bunun bir ön rezervasyon olduğunu ve bizden onay mektubunu alana kadar teyit edilmeyeceğini unutmayın.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Konuk girişi ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Konuk giriş yaptı ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Konuk çıkışı ');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Ek hizzmetler');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tarifeler');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Yüklenen dosyalar');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Tek kişi için ek durumlar');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Tek kişi ek hizmetleri için "Evet"i seçtiğinizden emin olun.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Tek kişi çin eklemeler');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Deposit required is percentage?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Depozito, toplam rezervasyon yüzdesinin bir parçası olması gerekiyor mu? Hayır ise, uygulanan mevduat düz bir değer olmalıdır');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Deposit required value');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Kişi başına, gecelik');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Gecelik kişi başı ücret almak isterseniz Evet\'i seçin. Yoksa, masraflar oda başına gecelik bazda hesaplanacaktır');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Dosya boyutu');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Yüklenebilecek en büyük dosya boyutu');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Rezerve edilmiş odalar');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Rezervasyon detayı');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Onay yazısı');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Fatura');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Gece sayısı: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Gece başı ücret: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Toplam');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Fatura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Faturaya servis ekle');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Servis açıklaması');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Hizmet tutarı');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Faturalandırılmış diğer ürünler');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Ürün faturaya eklendi');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Resim yükle');
jr_define('_JOMRES_FILE_UPLOAD', 'Dosya yükle');
jr_define('_JOMRES_COM_A_ODDS', 'Çeşitli.');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Aramaları listele');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Sistemin arama listesini görmek için EVETi seçin.');
jr_define('_JOMRES_FILE_DELETE', 'Bu resmi sil');
jr_define('_JOMRES_FILE_DELETED', 'Silinen dosya(lar)');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Sil');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Bu odaya daha önce rezervasyon ypıldığı için silinemiyor. Rezervasyonları iptal edip tekrar deneyin.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Oda silindi');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Oda özelliğini sil');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Bu özellik başka odalara atandığı için silinemiyor.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Oda özelliği silindi');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Mülk özelliğini sil');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Bu özellik başka mülke atandığı için silinemiyor.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Mülk özelliği silindi');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Kaynak/Mülk türü sil');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Kaynak/Mülk türü silindi');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'İşletmeyi kapatın');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Mülk silindi');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Bu işi kapatma yetkiniz yok.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Resimlerin yüklendikten sonraki boyutu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Harita');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Otel açıklaması');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Check-in zamanları');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Bölgedeki aktiviteler');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Arabayla ulaşım');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Havalimanları');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Diğer ulaşım yolları');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Koşullar ve şartlar');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adres');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Ziyaretçiler internetten rezervasyon yapabilir.');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'İnternetten rezervasyon açıksa eveti seçin.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Rezervasyon belirli bir süre içinde yapılabilir.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Bunu Evet olarak ayarlarsanız, rezervasyonlar belirli tarihler arasında yapılabilecek.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Rezervasyon periyodu: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Rezervasyon odaları');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maksimum aralık, örnek 3x 7 rezervasyon aralığı = 21 gün');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Bu bir daire/villa mı?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Rezervasyonu gözden geçir');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Hemen öde');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Pazartesi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Salı');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Çarşamba');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Perşembe');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Cuma');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Cumartesi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Pazar');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Pzt');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Sa');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Çrş');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Per');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Cu');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'Cts');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Pa');
jr_define('_JOMRES_COM_A_AVLCAL', 'Takvim');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Şu andaki tarihin yazı rengi');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Gösterilen ayın günlerinin yazı rengi ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Gösterilen ayda olmayan günlerin yazı rengi');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Müsait olan günlerin gösterildiği hücrenin rengi');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Gösterilen ayda olmayan günlerin hücre rengi');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Dolu günlerin gösterildiği hücre rengi');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Opsiyonlu odaların gösterildiği hücre rengi');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Geçmiş tarihlerin gösterildiği hücre rengi');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Dolu/Uygun değil');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Rezervasyona uygun');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Opsiyonlu rezervasyonlar (Depozitosu alınmamış)');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Önceden belirtilmiş varış günü');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Belirli tarihlerde rezzervasyon alan işletmeler için. Geliş tarihinin başladığı günü seçin.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Düzenlenmiş varış günü');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Konaklama aralığı (gün)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Uygun günlerin takvimi gösterilsin mi?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Uygun günlerin takviminin gösterilmesini istiyorsanız Eveti seçin');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Uygunluk');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Rezervasyon formu için boş bir gün seçin.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Kapalı odalar');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Kapalı odalara ekle');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Konuğu sil');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Konuk silindi');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Rezervasyonları olduğu için bu konukları silemezsiniz.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Herhangi');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Takvim çıktı formatı');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Takvim girdi formatı');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Bu, kullanıcıların takvim girdi formatını değiştirmesini sağlar');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Sabit dönem rezervasyonları kısa molalara izin verir');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Kısa mola süreleri');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Yayınlandı');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Denetim takibi');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Tarih');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Kullanıcı (kullanıcı adı)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Tarihe göre filtrele');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Durum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Varış yazışması');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Bugün varacak');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Mevcut konuk');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Bugün ayrılıyor');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Ayrılma gecikti');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Henüz varmadı');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Oluşturulmuş oda');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Güncellenmiş oda');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Silinmiş oda');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Oluşturulmuş kaynak özelliği');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Güncellenmiş kaynak özelliği');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Silinmiş kaynak özelliği');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Oluşturulmuş işletme');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Güncellenmiş işletme');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Silinmiş işletme');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Düzenlenmiş mülk özelliği');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Yayınlanmış mülk');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Oluşturulmuş tarife');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Güncellenmiş tarife');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Added svc. charge');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Konuk girişi yapıldı');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Depozito grildi');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Konuk oluşturuldu');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Konuk güncellendi');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Kaynak rezerve edildi');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Ekstra oluşturuldu');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Ekstra güncellendi');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Ekstra silindi');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Ekstra yayınlandı.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Kapalı odalara eklendi.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Kapalı odalardan silindi silindi.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Ekstralar');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Açıklama');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'İsim');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Fiyat');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Ekstra güncellendi');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Düzenle');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Ekstra silindi');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Ekstralar yöneticisi');
jr_define('_JOMRES_COM_A_EXTRAS', 'Giriş yapılırken ekstralar gösterilsin mi?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Konuklarınıza ekstra hizmetleri sunmak istiyorsanız eveti seçin');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'İsteğe bağlı ekstralar.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Black booking start date');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Servisin devam ettiği tarih');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Kapalı odalar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Seçtiğiniz odalardan biri dolu olduğu için işlem yapılamıyor.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Rooms included in black booking');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Listede kimse yok');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Kaç yıldızlı olduğu gösterilsin');
jr_define('_JOMRES_COM_A_RESET', 'Reset');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervasyon iptal edildi');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Şunun için ara:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Para birimi sembolü');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'TL');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Ekstra bilgiler');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Rezervasyon sınırı olsun mu?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Önceden rezervasyonları sınırlamak istiyorsanız bunu evet olarak ayarlayın (sınırı gün cinsinden ayarlamak için sonraki alanı kullanın). Bunu evet olarak ayarlarsanız, kullanıcı n günden daha uzun bir süre önceden rezervasyon yapmaya çalışırsa varış tarihleri bugünün tarihine geri yüklenecektir.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Rezervasyon gün sınırı:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Vergi');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Konaklama vergisi');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Sabit vergi');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Vergi yüzdesi');
jr_define('_JOMRES_COM_A_EUROTAX', 'Vergi');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Vergi yüzdesi');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Tüm kayıtları arşivle');
jr_define('_JOMRES_FRONT_TARIFFS', 'Tarifelerimiz');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Tarife adı');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Tarife açıklaması');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Oda tipi');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Şu tarihten');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Bu tarihe kadar');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Kişi başı gecelik');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'den başlayan fiyatlarla');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Hafta sonları hariç');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Ez az kalınacak gün');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Ez çok kalınacak gün');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Kalacak en az kişi sayısı');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Kalacak en fazla kişi sayısı');
jr_define('_JOMRES_FRONT_PREVIEW', 'Önizleme');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Düzenlemeye açık mı?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Güncellenmiş metin.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Dil seçin');
jr_define('_JOMRES_FRONT_PTYPE', 'Mülk tipi');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Mülk tipleri');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Mült tipini düzenle');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Mülk tipi');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Mülk tipi açıklaması');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Mülk tipi kaydedildi');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Mülk tipi silindi');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Ödeme hatırlatıcısı');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Faturaya eklenecek ekstra servis yok');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Depozito');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Toplam tutar');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Rezervasyonda alınan tutar');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Bu seçeneği rezervasyon esnasında alınacak ücreti belrtmek için kullanın. Sadece depozitoyu alacaksanız Depozitoyu, toplam tutarı alacaksanız Toplam tutarı seçin.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Gösterilen aylar');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Hangi aylar gösterilsin?');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Yöntemler');
jr_define('_JOMRES_COM_A_CANCEL', 'Vazgeç');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Odaların müsait olmadığı tarihleri seçin. (Kapalı odalar)<br/> 
<br/> 
Hizmet dışı bırakmak istediğiniz oda (ları) seçin. <br> Bir kaynağın kendisine karşı bir onay işareti yoksa, ödenmemiş herhangi bir rezervasyon tamamlanıncaya / iptal edilinceye kadar bir kara rezervasyona dahil edilemez.<br/> ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Uzun süre etkin kalmadığınız için çıkış yaptınız</b> Tekrar girip yapın.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Amaç');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Ödeme yöntemleri kullanılsın mı?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Ödeme şeklini seçin.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Ödeme yolu seçili mi?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Düzenlenmiş eklenti ayarları');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Eklenmiş eklenti ayarları');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this business\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Düzenlenmiş eklenti ayarları');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Websitenizin linkini ekleyin.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Kredi kartını düzenle');
jr_define('_JOMRES_COM_A_EDITICON', 'İkon boyutunu düzenle');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slayt');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Slayt linkleri gösterilsin mi?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Otel sayfasında slayt gösterilsin mi?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slayt');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Tarifelerin linkleri değiştirilsin mi?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popup gösterilsin mi?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Slayt resimlerini yükle');
jr_define('_JOMRES_A_TABS_MISC', 'Diğer');
jr_define('_JOMRES_A', 'Site düzeni');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Otel özelliklerini kullan');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'Buraya resim yüklemek için önce otel fotoğraflarını yüklemelisiniz /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Kullanmak istediğiniz arama aracını seçin.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Hiçbir sonuç bulunamadı.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Bu eylemi gerçekleşitrmek istediğinize emin misiniz?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezervasyon yap!');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezervasyon yap!');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Tarifeleri sayfada göster?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adres');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detaylı bilgi');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Odaları görmek için tıklayın');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Linkin altında adres bilgilerini göster');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Linkin altında detaylı otel açıklamasını göster');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Linkin altında odaları göster');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Tarifeler');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Değişken');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Kullanmak istediğiniz tarifeyi seçin');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Tarife hesaplama yöntemlerinden iki seçeneğiniz var. Birincisi, 'sabit oranlı' yöntem, konuklara çeşitli tarifeler sunmanıza olanak tanır ve konaklama süresi, tüm süre boyunca aynıdır. Aynı tarih için birkaç farklı tarifeler sunmak isterseniz, örneğin Yatak ve Kahvaltı tarifesi ve B & B ve Akşam yemeği ücret tarifeleri için kullanışlıdır. Fiyatlarınızı, söz konusu tarihe bağlı olarak ayarlamak istiyorsanız, 'ortalamalar' tarifesini seçin. Jomres, rezervasyondaki her bir gün için tüm tarifeleri bulacak, bunları bir araya getirecek ve o zaman ortalama fiyatı dönecektir" );
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Ayrılış tarihi gösterilsin mi?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Set this to No if you don't want to show the departure date input box. Only use this if you know what you're doing, as the departure date in bookings will always be set to the day after the arrival date.");
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Açıklama limiti');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Bu, karakter limitini belirler.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Kullanılmış tarih() format stili');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Yayınla');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Yayından kaldır');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Mülk tiplerini kullan');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Bu kaynak / mülk türüne bir resim atamak için önce kaynak / özellik türü resimlerinizi / images / stories / jomres / rmtypes / klasörüne yüklemeniz gerekir. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Giriş hatası arka plan rengi');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Varsayılan ülke');
jr_define('_JOMRES_JAVASCRIPT_', 'Kırmızı yıldız olan maddeler zorunludur.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Kullanıcılar kendi işletmelerini ekleyebilirler mi?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Kullanıcıların yönetici müdahalesi olmaksızın kendi işletmelerini kaydettirmelerini istiyorsanız bunu Evet olarak ayarlayın.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Berlitilmiş alanlar zorunludur.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'İşletme oluşturuldu');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Kullanıcı?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Takvim giriş yaptığınız yıldan itibaren gösterilir.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Müsait oda sayısı');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Otel detaylarına geri dön');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Kaynak/mülk deyayı');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Arama limiti');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Para birimi dönüştürücü gösterilsin mi?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Dönüştürme oranı');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Kullanıcıların html editörlerini kullanarak düzenlemesine izin verilsin mi?');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Rezervasyonunuzu yapmak için bu formu kullanın. Varış ve ayrılış tarihleri ve konuk numaraları gibi rezervasyon bilgilerinizi değiştirin, ardından mevcut olanların listesinden istediğiniz kaynağı / kaynakları seçin. Rezervasyon işlemlerini tamamladıktan sonra rezervasyon işlemlerini tamamlamış olursun, istediğiniz isteğe bağlı ekstraları ekleyebilir ve adres bilgilerinizi verebilirsiniz.Formun yeterli bilgi olması durumunda rezervasyonunuzu onaylayabilmeniz için size bir teslim butonu vereceğiz.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Rezervasyonunuzu yerleştirmek için bu formu kullanın. Varış ve ayrılış tarihleri ve misafir numaraları gibi rezervasyon bilgilerinizi değiştirin. Yeterli bilgi size rezervasyonunuzu onaylayabilmeniz için bir gönderme düğmesi verecektir..');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Rezervasyon detayları');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Rezervasyon detaylarını belirleyin');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Uygunluk ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'İstediğiniz odaları seçin');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Odaların uygunluk durumunu kontrol edin.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Servisler');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Servisler');
jr_define('_JOMRES_COM_PERDAY', 'Gecelik');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Kişisel bilgiler');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Detayları girin. Kırımızı yıldız olan alanların doldurulması zorunludur.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Boş odalar');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Seçili odalar');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', 'En erken varış tarihi: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Gecelik:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Otele giriş');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Ekstralar:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Vergi:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'İndirim:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Vergiler dahil toplam:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Konuk(lar)');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Seçiminize ekleyin');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Seçiminizden çıkarın');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Konuk tipi');
jr_define('_JOMRES_VARIANCES_TYPE', 'Tip');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Müşteri tipi: Örn. Öğrenci, çocuk ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Notlar');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Müşteriye özel notlar');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maximum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Seçilebilecek maksimum kişi sayısı');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Yüzdelik');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Hesaplanan şekil, kaynak için hesaplanan Temel rakamın yüzdesidir. Bu değer hayır olarak ayarlanırsa, belirttiğiniz sayı basitçe taban kaynağı değerine eklenir veya çıkarılır.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Değişkenlik eklensin mi?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Hesaplanan şekil, kaynak için hesaplanan Taban rakamına eklenir veya çıkarılır. Bunun temel figürden bir indirim olmasını istiyorsanız Hayır olarak ayarlayın. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Değişkenlik');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Değişkenlik müktarı');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Düzenlenmiş müşteri tipi');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Silinmiş müşteri tipi');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Oluşturulmuş müşteri tipi');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Güncellenmiş müşteri tipi');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Güncellenmiş müşteri tipi');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Odalar sayfasına link gösterilsin mi?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Sadece <b>uygun odalar</b> takvimi gösterilsin mi?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Özellik başlığı ve ayrıntılarının görüntülenmesini devre dışı bırakmak için Evet olarak değiştirdiğinizden, yalnızca mülkiyet ayrıntıları bölümünde kullanılabilirlik takvimi görüntülenebilir. Yalnızca tek kaynak işlerini kiralayan kullanıcılar (örneğin daireler, evler vs.) için tasarlanmıştır.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Varış-Ayrılış zaman aralığı');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Minimum varış-ayrılış aralığı.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Oda numarası');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Oda adı');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Tarife adı');
jr_define('_JOMRES_ORDER', 'Düzen');
jr_define('_JOMRES_REQUIREDFIELDS', 'Gerekli');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Varıştan önceki gün sayısı');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Varıştan önceki min. gün sayısı.');
jr_define('_JOMRES_DTV', 'Tarih değişkenleri');
jr_define('_JOMRES_DTV_DOW', 'Hafta günü');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Müşteri tipi');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Rezervasyon formunda gösterilen ilk Konuk tipinin varsayılan numarası .. Konuk türlerini kullanırsanız, rezervasyon formundaki ilk misafir türüne ayarlanacak varsayılan sayı budur.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Kayıtlı kullanıcılar sadece online rezervasyon yapabilir?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Üzgünüz, kayıtlı kullanıcı olmalısınız. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Rezervasyonların yazı rengi');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Hafta sonu sınırları');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Oda rezerve edildi');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Kapalı oda rezervasyonu');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Depozitoyu en yakın sayıya tamamla?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Depozitoyu al?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Tafireleri haftalık kaydet?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Günlük veya haftalık olarak ayarlama yapmalısınız');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Haftalık');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Önceden kararlaştırılmış varış günü: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Sabit geliş tarihleri seçildiğinde, tarihler açılır listesinde gösterilebilecek sayı tarihleri. Tarihlerin listesinde, önceden rezervasyon yapılması nedeniyle bir rezervasyon yapılamıyorsa ve listenin aslında seçilen numaranızın iki katı uzunluğunda olacağını unutmayın (buna, benzer sayıda tarihi tarihler olacaktır) (varsa) ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Varış tarihi yanlış');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Ayrılış tarihi yanlış');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Rezervasyon çok kısa. En az şu kadar gün seçmelisiniz:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Minimum gün sayısı');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Misafir tipi yanlış');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Misafir sayısı ve tipini seçin');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Çok fazla kişi seçtiniz');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Misafir sayısından fazla oda seçtiniz');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Yatak sayısından fazla misafir seçtinizs');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Daha fazla oda seçmelisiniz');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Oda seçin');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Ad hanesini boş bıraktınız');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Soyad hanesini boş bıraktınız');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Ev numarasını boş bıraktınız');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Sokak adını boş bıraktınız');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'İlçeyi boş bıraktınız');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Bölgeyi boş bıraktınız');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Posta kodunu girin');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Ülkeyi boş bıraktınız');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Ev numaranızı girin');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Cep numaranızı girin');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'E-Posta adresinizi girin');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', '<b>Eleman aranıyor!</b>');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Oda seçimi yapılmadı');
jr_define('_JOMRES_BOOKING_NUMBER', 'Rezervasyon no.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Rezerve edilebilir');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Şablon varyasyonlarını iptal et');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Her FRONTEND şablon dosyasının şablon değişkenlerinin bir DHTML dökümünü o sayfa görüntülendiği gibi etkinleştirmek için ayarlayın. Belli bir şablondaki belirli bir öğenin kullanılabilir olup olmadığını görmek istiyorsanız kullanışlıdır.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Yüzde');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Tek kişilik hesaplama rakamı yüzde ise, bunu Evet yapın. Eğer hayır ise, para yatırmadan uygulanacaktır.');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Mevcut odalar / tarife limiti');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Rezervasyon formunda listelenen mevcut oda ve tarifelerin sayısını sınırlamak için bu girişi kullanın. Sınırlamanın etkin olmasını istemiyorsanız sıfır olarak ayarlayın. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Şu anda boş yer yok!');
jr_define('_JOMRES_BOOKITNOW', '');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Küresel düzenleme modu?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Bu işe özen gösterin. Evet olarak ayarlanırsa düzenleme modu, düzenlemekte olduğunuz sabit için sistemdeki TÜM işletmelerin özel metnini etkiler.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Küresel para birimi kullanılsın mı?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Tüm işletmeleri aynı para birimini kullanmaya zorlamak için bunu evet olarak ayarlayın.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Küresel para birimi sembolü');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Sarılmış bileşen');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Siteyi Tam Sayfa görünümüne zorlamak istiyorsanız Evet olarak ayarlayın. Bu, iframe\'ler yoluyla siteye erişmek istiyorsanız yararlı olabilir.');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Sadece hafta sonları');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Haftasonu günleri');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Hafta sonu günlerini ayarla. Hafta sonlarını kabul veya izin vermeyen tarifeler, oda listesini oluştururken bu ayarı dikkate alır.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Önce ülkenizi seçin');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Resim yüklemeden önce değişiklikleri kaydedin');
jr_define('_JOMRES_TARIFFSFROM', 'Gecelik');
jr_define('_JOMRES_SEARCH_ALL', 'Hepsi');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Ülke');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Bölge');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Şehir');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Features');
jr_define('_JOMRES_SEARCH_BUTTON', 'Ara');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Terimi Ara');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Kelimeleri ara: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Lütfen istediğiniz varış ve ayrılış tarihlerini giriniz ve seçtiğiniz tarihlerde konaklama olanakları bulmak için düğmeye basınız.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Tip');
jr_define('_JOMRES_SEARCH_RTYPES', 'Oda tipi');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Önceden belirlenmiş');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Mülk adı');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Mülk bölgesi');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Mülk şehri');
jr_define('_JOMRES_SORTORDER_STARS', 'Yıldız');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Mülk detayları ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Rezervasyon formu');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Adres detaylarını güncelleyin');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Tekrar kontrol et<br/>(Oda seçiminiz sıfırlanacak)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Kontrol ediliyor');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Ekstraları düzenle');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Kaynak seçiminiz değiştiriliyor');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Adres detayları güncelleniyor');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Adres satılarından birisi ya da daha fazlası yanlış.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Oda resmi');
jr_define('_JOMRES_CURRENCYFORMAT', 'Para birimi');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Arama ayarlar');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Kullanılabilir Kayıtlar');
jr_define('JOMRES_COM_A_MESSAGE', 'Mesaj');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Gelişmiş');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Tariff Configuration Mode');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>Uyarı: Farklı tarife türleri arasında geçiş yapılması veri kaybına neden olabilir. Bununla ilgili aşağıdaki nota bakın.</b>.
<br/><br/>
Tarifelerinizi nasıl yapılandırdığınız konusunda üç seçeneğiniz vardır.<br/>
Normal mod: Önümüzdeki 10 yıl için geçerli olan her oda türü için bir tarifeniz olacak. <br/>
Micromanage: Her bir kaynak / mülk türü için her birinin fiyatını değiştirebilirsiniz. <br/>
Advanced: Tarife yönetmek için \"eski \" Jomres yöntemi. <br/>
<br/>
Farklı tarife modları, size en uygun tarifeleri yapılandırma yöntemini seçmenizi sağlar. <br/>
Normal mod en basittir, ancak referans oda ve tarifeleri kaynak / mülk türlerine göre çaprazlayacak ve oda ve fiyatları aynı sayfada yapılandırmanıza olanak tanıdığından anlaşılması en kolay yoldur.<br/>
Mikromanage tarifelerin hepsini yönetmek zorunda kalmadan, bir gün bazında oranları değiştirmenize olanak tanır, bu birbirleri ile çok sayıda farklı tarife çapraz başvurarak yapılır. Bu, sizin için belirli bir süre kapsayan bir dizi tarifeye neden olur, ancak tarifeleri tarif ettiremezsiniz. <br/>
Gelişmiş mod, bir kaynak oluşturup bir kaynak türü ile ilişkilendirmenizi sağlar. Daha sonra bir tarife oluşturun ve MADDE ile bir kaynak türünü ilişkilendirin. Bu yöntemi kullanarak, birbiri üzerinde \"katman\" tarifeleri yapmak mümkündür, örneğin bir kaynak türü \"Çift kişilik yatak \" bir yatak ve kahvaltı için bir tarife, bir tane ise yatak, kahvaltı ve akşam yemeği içerebilir. Gelişmiş yöntem, bir kaynak / mülk türünün bir kaynak veya tarife ilişkisini ortadan kaldırmak ya da tarih ve tarihleri ​​hatalı olarak ayarlamak mümkündür, ancak diğer modların yapılandırma seçeneklerini vermesi nedeniyle, ayrıntıya biraz daha dikkat etmeniz gerekir. <br/>
<br/>
Normal ve Micromanage modları, tarife modunun çalışması için belirli bir oda ve tarif ayarlamasını gerektirdiğinden, sistem geçerli tarife yapılandırmalarını mevcut tarife düzenleme moduyla uyumlu hale getirmek için bazı verileri sıfırlamanız gerekebilir. .<br/>
<br/>
Normal -> Gelişmiş. Değişiklik yok. Mevcut tarife saklanır.<br/>
Normal -> Mikromanage. Mevcut tarifelerin tümü kaldırılır. <br/>
Gelişmiş -> Normal. Mevcut tarifelerin tümü kaldırılır.<br/>
Gelişmiş -> Micromanage. Mevcut tarifelerin tümü kaldırılır. <br/>
Mikromanage -> Gelişmiş. Tarifeler arasındaki mevcut tüm çapraz referanslar kaldırılır ancak tarife kendiliğinden kalır. <br/>
Mikromanage -> Normal. Mevcut tüm çapraz referanslar ve tarife kaldırılır. <br/> ");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Odalar listesini mülk ayrıntıları sayfasında gösterilsin mi?');
jr_define('JOMRES_PROPERTYTYPE', 'Özellik türü');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Oda başına maksimum kişi');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Rezervasyon sırasında azami kişi var');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Not ekle');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Notu düzenle');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Notu sil');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Notları görüntüle');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Yeni not eklendi');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Düzenlenmiş not');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Silinmiş not');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Rezervasyonlarımı Listele');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Rezervasyonlarım');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Rezervasyonu Görüntüle');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Favorileri Görüntüle');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Henüz hiçbir favori eklemediniz!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Özellik türü');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Akılcı fiyat');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Etkin');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Bu eklenti, kaynak fiyatlarınızı dinamik olarak etkinleştirmenizi ve yapılandırmanızı sağlar..');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Çoğu işletme, belirli bir tarihte kullanılabilen gerekli türdeki odaların sayısına dayalı olarak kaynak fiyatlarını yeniden hesaplayacaktır. Bu, belirli bir süre zarfında meşgul olmayan bir kaynağı / mülk türünü, aksi halde cevapsız kalabilirler diye çekme imkânı sağlamak için indirimler yapmalarını sağlar. <br/> Bu eklentinin etkinleştirilmesi ve yapılandırılması, ayarlanabilir fiyatlandırma teklif etmenizi sağlar Seçilen bir türün oda sayısı üzerinde belirli bir günde kullanılabilir. <br/> Gün eşiği, kaynak fiyatlarının bu özellikle ayarlanmasından önce varış tarihinin içinde olması gereken gün sayısını tanımlar, daha sonra yüzdeler Seçenekler, belirli bir indirimin uygulanmadan önce mevcut olabilecek oda yüzdesini yapılandırmanızı sağlar. Bununla birlikte, birden fazla oda rezervasyonu yapıp yapılıyorsa o anki indirim seviyesi tüm odalara uygulanır ve daha fazla oda seçildiğinde azalma olmaz.' );
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Threshold (number of days between arrival date and today)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Odaların %10 ya da daha azı müsait değil');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Odaların %25 ya da daha azı müsait değil');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Odaların %50 ya da daha azı müsait değil');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Odaların %75 ya da daha azı müsait değil');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'İndirim yüzdesi');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' bu fiyattan ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' bu fiyata ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Bilgilendirme. indirim uygulanmadı ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API anahtarı');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Google Haritalar API anahtarı <a href="http://www.google.com/apis/maps/signup.html" target="_blank"> Google haritalarından </a> alabilirsiniz. Harita anahtarınızı buraya girdikten sonra sistem, mülkünüz Ayrıntıları sayfasında haritayı gösterecektir..');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Son dakika');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktif mi?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Son dakika fırsatlarını sunmak istiyorsanız bunu Evet yapın.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Eşik');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Bir rezervasyon yapıldıysa ve varış tarihi rezervasyon tarihinden itibaren yalnızca "N" gündür ve indirim uygulanabilir');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'İndirim');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'Yüzde olarak');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Bu rezervasyona bir indirim uygulandı!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Konaklamanın maliyeti azaltıldı');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', ' ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', 'daha önce gelmek için rezervasyon yaptırırsanız% indirim');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Bu tekliften en iyi şekilde faydalanabilmek için şimdi ayırın!');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', 'varış veya daha fazla indirim, varış tarihi önceden olursa kullanılabilir ');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Verbose tariff info');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Ayrıntılı tarife bilgilerini mülk detaylarında / tarife açılır penceresinde göstermek için Evet olarak ayarlayın');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Ayrıntılı tarife bilgilerini mülk detaylarında / tarife açılır penceresinde göstermek için Evet olarak ayarlayın');
jr_define('_JOMCOMP_AMEND', 'Rezervasyonun Değiştirilmesi - Özellik Seçimi');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Yeni Mülk Seç');
jr_define('_JOMCOMP_AMEND_HEADER', 'Orijinal Sözleşme:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Para Yatırıldı');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Para yatırma yapılmaz');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Toplamı geçersiz kıl');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Para Yatırmayı Geçersiz Kıl');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'İptal et');
jr_define('_JRPORTAL_CPANEL', 'Kontrol paneli');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Varsayılan Komisyon oranı');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Başka bir komisyon ücreti ayarlanmadığında bir mülke uygulanacak varsayılan komisyon oranını seçin.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Liste Komisyon Oranları');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Komisyon Oranları');
jr_define('_JRPORTAL_CRATE_TITLE', 'Başlık');
jr_define('_JRPORTAL_CRATE_TYPE', 'Tip');
jr_define('_JRPORTAL_CRATE_VALUE', 'Komisyon oranı');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Para birimi kodu');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'İşletmeler listesi');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'İşletme adı');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'İşletme adresi');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Arka plan renginin kırmızı olduğu işletmeler henüz kendilerine uygulanan bir komisyon ücretine sahip değil.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'İstatistikler');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Komisyon Hızı');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Liste defterleri');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'İşletme kimliği');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Fatura kimliği');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Toplam rezervasyon');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Arşivlenen tarih');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Açıklama');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Açıklamayı bir alt klasörün adına ayarlayarak (örneğin, bir alt klasöre) özellik türüne özel dil dosyalarına sahip olabilirsiniz. "Yatçı Brokerliği" ve bir dil dosyasını bu alt klasöre kopyalama. Daha sonra, bu mülk türü için bu dil dosyasını değiştirebilir ve böylece odalar örneğin "DVDler" haline gelir.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Bu mülkiyet, erişebildiğiniz tek mülk olduğundan silemezsiniz. Bunu devre dışı bırakmak isterseniz, lütfen araç çubuğundaki un-publish özelliğini kullanın. ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Toplam');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'gece');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'kaynak başı ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Servisler toplamı (vergi dahil)');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Fiyat');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Lütfen okumak ve kabul etmek ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Rezervasyonunuzun özeti aşağıda gösterilmiştir. <br /> Herhangi bir değişiklik yapmak için lütfen Rezervasyonu Düzenle düğmesini tıklayın. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Yukarıdaki bilgilerin herhangi birini değiştirmeniz gerekiyorsa lütfen buraya tıklayın');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Rezervasyonu Düzenle');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Aşağıdaki kutuya otele iletmek istediğiniz özel durumları yazabilirsiniz.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Yukarıdaki bilgilerin doğruluğunu onaylıyorum.');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'kişi başı gecelik ');
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'of');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Başla');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Geri');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'İleri');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Son');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Sonuçlar');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Lütfen göndermek istediğiniz mesajı girin. Mesajın gönderileceği işletme: ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Bize ulaşın');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Mesaj');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Mesajınız için teşekkür ederiz, mesajınız işin e-posta adresine gönderildi ve kayıtlarınız için kendi adresinize kopyalanır. Yanıtlarını size en kısa sürede cevaplayacaklardır.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' ilgili ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Mesajınız');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Lütfen kaynaktan tıklayarak aşağıda listelenen konaklama yerini seçin.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min odalar zaten seçildi');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Tarife / kaynak türü açılanmadan önce rezervasyonda önceden seçilmiş minimum oda sayısı. N oda önceden seçilmiş olduğunda indirimli tarife almanızı sağlar.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Maksimum oda zaten seçildi');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Tarife / kaynak kombinasyonundan önce rezervasyonda daha önce seçilmiş olan maksimum oda sayısı. Rezervasyon odasında N oda seçildiğinde bu kaynak türü / tarife kombinasyonunu sunmayı bırakmanızı sağlar. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Burada Genel Ayarlamada Tek Kişilik Ekler Evet olarak ayarlanırsa, burada ayarlanan Tek kişi eklerinin kullanılamayacağını unutmayın. Buradaki ayarlar, tek kişilik ücret taleplerine alternatiftir, Oran SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Müsait');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Bazı rezervasyonlar');
jr_define('_JOMRES_AVLCAL_HALF', 'Yarı rezervasyon');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Çoğunlukla ayrılmış');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Tamamen ayrılmış');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Haftalık');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Günlük');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Rezervasyon başına');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Rezervasyon başına kişi başı');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Kişi başına günde');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Kişi başına haftalık');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Günlük (min gün)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'X oda seçilen gün başına');
jr_define('_JOMRES_REGISTRYREBUILD', 'Minicomponent kayıt defterini yeniden oluştur ve yeniden önbelleği yeniden oluştur');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Normalde eklenti yöneticisini görüntülediğinizde eklentiyi eklediğinizde veya eklentiyi kaldırdığınızda Jomres Eklentisi Kayıt Defteri, otomatik olarak yeniden oluşturulur, ancak özelliklerin ya da birleşimlerinin kullanılamayabileceği seçenekler, bu nedenle işlevi yeniden inşa etmek için kullanabilirsiniz. Kayıt defteri defteri defteri defteri defteri eklentileri. Eklenti Yöneticileri ve Yükseltmeler özelleştirebilirsiniz, bu işlevi kullanmanız gerekecek gibi değil.Yeni bir mini bileşen eklentileride Eklenti kayıt defterini yeniden oluşturmanız gerekir ve Eklenti Yöneticisi'ni Eklemek için.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Kayıt Defteri başarıyla üniversitede yeniden oluşturuldu');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Kayıt defterini yeniden oluştururken bir hata oluştu. Hatanın tetiklendiğini gösteren bir kayıt Görmek için Jomres hata günlüğünü kontrol etmelisiniz.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Fiyat');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Henüz bir rezervasyon yapmadınız!!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Mülk türünüzü düzenleyin');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Özellik türünüzü seçin');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Sorgunuz ...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Özellik Listesinin sınırı');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Bir aramadan sonra bir sayfada gösterilecek işletme sayısı');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Entegre arama özelliği');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Jomres entegre arama özelliği kullanıcılarınızın Jomres işletmelerinde bir dizi işleve göre arama yapmalarını sağlar. sistemdaki Jomres arama özelliklerini zaten kullandıysanız, bu ayarları biliyorsunuzdur. <br/> Bu özellik, Joomla arama modüllerini kullanmak istemeyen kullanıcılar için Jomres\'ta arama işlemi yapmamızı sağlar; CMS\'nin kendi Jomres arama modüllerine sahip olmadığı diğer CMS kullanıcıları için. <br/> Bir şeyle bir şey aramayı seçerseniz (diğer bir deyişle açılır menü değil) diğer arama seçeneklerini unutmayın Uygulanmadı, yalnızca tıkladığınız bağlantıya karşılık gelen öğe. <br/> Varsayılan olarak, bu entegre aramanın düzeni çok güzel değil. Düzeni gerçekleştiren şablon dosyasının olası seçeneklerin tümünü içermesi gerektiği için bazıları uyumsuzdur.' );
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Bu özellik etkinleştirilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Bu özellik etkin durumdaysa, özellik listesini gösteren herhangi bir Jomres çağrısı, arama seçeneklerinin de gösterileceği anlamına gelir.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Sütunları kullan');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Bağ türü (nerede ilgili) olarak tanımladığınız herhangi bir arama seçeneği sütunlar olarak gösterilir (IE br bağlantının sonuna getirilir)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Seçili açılır menü aracılığıyla arama bölgesi');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Ülkeleri / bölgeleri / kasabaları süzmek için bir arama açılır listesini sunun. Bu özelliği kullanacaksanız, aşağıdaki bölge / şehir aramalarını kullanmamayı tercih edersiniz.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Özellik adı');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Emlak adı girdisini göster.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Açılır menü olarak gösterilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Listeyi bağlantı olarak göstermek için bunu no olarak ayarla');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Şehir / bölge');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Bölge girdisini göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Açılır menü olarak gösterilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Bu listeyi bağlantı olarak göstermek için Hayır olarak ayarlayın');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Özellik türüne göre arama');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Aramayı mülk türüne göre göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Açılır menü olarak gösterilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Bu listeyi bağlantı olarak göstermek için Hayır olarak ayarlayın');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Kaynak türüne göre arama');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Aramayı kaynak türüne göre göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Açılır menü olarak gösterilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Listeyi bağlantı olarak göstermek için Hayır olarak ayarlayın');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Özellikler');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Aramayı özellik girişine göre göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Açılır menü olarak gösterilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Listeyi araç ipucu görüntüleri ve onay kutuları olarak göstermek için \"Hayır\" olarak ayarlayın');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Açıklamaya göre arama');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Aramayı açıklama girdisi ile göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Uygunluk durumuna göre arama');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Aramayı uygunluk girdisine göre göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Fiyat aralıklarına göre arama');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Fiyat aralıklarına göre arama göster girişi');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Fiyat aralığı artışları');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Sistem gümrük vergilerindeki tüm değerleri inceleyecek, sonra burada belirlediğiniz artış değerlerine dayanan bir dizi fiyat aralığını değerlendirecektir.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Sistemde bir özellik seçilmezse, varsayılan olarak bir arama yapar.Bu arama bir arama modülü tarafından tetiklenmezse o arama rastgele sonuçlar (kasten) üretecektir. Rastgele aramadaki getirilerin sayısını sınırlayın.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron işi ayarları ve günlükleri');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron iş bilgisi, pseudocron işlevselliğine faturalandırma ve komisyon kullanımı gereklidir.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Yüklü cron minik bileşenleri .Bireysel bir cron işi çalıştırmak için aşağıda belirtilen bağlantıları kullanın: cron işlerinin herhangi bir çıktı üretmediğini unutmayın, bu nedenle sayfadaki hiçbir bilgiyi görmezsiniz. İş Günlüğünü yazın.');
jr_define('_JOMRES_COM_A_CRON_METHOD', 'Yöntem');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Cron Jobs\'a erişiminiz yoksa, bunu Minicomponent olarak ayarlayın, ya da bir cron job oluşturup <br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i>  dosyasını çalıştırmasını sağlayın');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Tarayıcıda günlüğü göster');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Sadece Minicomponent modunda çalışır.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Günlükleme etkin');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Günlüğün etkinleştirilmesi için Evet olarak ayarlayın.Kayıtların sonuçları aşağıda verilecektir.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Ayrıntılı günlüğe kaydetme');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Günlük çıktıları çok fazla');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Şablon Düzenleme');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Özel alanlar');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Burada rezervasyon formunda gösterilecek basit özel alanları tanımlayabilirsiniz.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Alan adı (boşluk bırakılmayacak)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Varsayılan değer');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Açıklama');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Gerekli');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maksimum Miktar');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Maksimum miktar 1den büyük olarak ayarlandıysa, konuklara ihtiyaç duydukları ekstraların miktarını seçmek üzere bir açılır pencere açılır.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Vergi oranları');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Vergi kodu');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Fiyat açıklaması');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Bu vergi oranını silemezsiniz.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Oran');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Faturalar');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Ödenmemiş');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Ödenmiş');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'İptal edildi');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Beklemede');
jr_define('_JRPORTAL_INVOICES_USER', 'Kullanıcı');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Durum');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Yükseltildi');
jr_define('_JRPORTAL_INVOICES_DUE', 'Neden');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Abonelik');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Olağanüstü toplam');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Tekrarlama sıklığı');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Ayın tekrar eden günleri');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Para birimi kodu');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Satır öğeleri');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'İsim');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Açıklama');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Başlangıç ​​Fiyatı');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Başlangıç ​​Miktarı');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'İlk İndirim');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'İlk Toplam');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Vergi kodu');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Vergi açıklaması');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Vergi oranı');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Standart Jomres ağ geçidi ayarları geçersiz kılınsın mı?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Faturalarımı göster');
jr_define('_JRPORTAL_COUPONS_TITLE', 'İndirim kuponları');
jr_define('_JRPORTAL_COUPONS_DESC', 'İndirim kodları oluşturulabilir ve rezervasyon yapmak için bir teşvik olarak konuklara geçirilebilir. Geçerli tarihler rezervasyonun yapılabileceği tarihi değil rezervasyon tarihlerini ifade eder.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Kupon kodu');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'şu tarihten itibaren');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'şu tarihe kadar');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'İndirim tutarı');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'İndirim yüzdeliktir');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Sadece oda');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Bir kupon kodunuz varsa, kupon kodunu kutuya girin ve kupon ayrıntılarını rezervasyonunuza karşı kaydetmek için lütfen "Kupon kaydet" bağlantısını tıklayın.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Kuponu kaydet');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kupon rezervasyon için kaydedildi');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Kupon numarası bulunamadı');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Kupon indirim değeri');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'İndirimli rezervasyon, kupon kodu / indirim değeri / kupon ayarları: ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Dilleri seç');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Dil değiştirme açılır listesinde gösterilecek dil seçeneklerini seçin.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Dil seçimi açılır menüsü gösterilsin mi?');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Sayın');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Kayıt olduğunuz için teşekkür ederiz ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Kullanıcı adınız : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Parolanız : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Rezervasyonlarınızı görüntülemek için oturum açın');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupon kaydedildi');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupon silindi');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> İletişim Makinesi SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Kullanıcı Adı');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Parola');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Bildirim mobil numarası');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Lütfen 'Ülke kodu, cep telefonu numarası' biçimini kullanın.Örneğin İngiltere'de kurulu bir cep telefonu numarası '447979123456' gibi bir şey olacaktır. Mobil telefonunuza herhangi bir bildirim e-postası gönderilmesini istemiyorsanız, bu ayarı boş bırakın. telefon.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Bu ağ geçidini localhost'dan kullanamazsınız / bunu 'canlı' bir sunucuda yapmanız gerekecek..</b>
<br/>
<br/>
İletişim Makinesi ağ geçidini kullanmak için, bir İletişim Makinesi hesabına ve uygulamanız ile ağ geçidimiz arasında en az bir kayıtlı bağlantıya (API alt ürün örneğine) ihtiyacınız vardır. Her bağlantı
Yöntemi bir alt ürün olarak bilinir. Şu şekilde:<br/>
<br/>
<b>Step 1 - İletişim Makinesi hesabına kaydol</b><br/>
Zaten bir İletişim Makinesi hesabınız yoksa, aşağıdaki gibi bir tane kaydettirmeniz gerekir. Aksi takdirde Adım 2'ye geçin.<br/>
* http://iletisimmakinesi.com/api/ adresine gidin ve kullanmak istediğiniz uygun API altürünü (bağlantı yöntemi) seçin (Toplu SMS (API)) <br/>
* Kayıt köprü bağlantısını tıklayın. <br/>
* Kayıt formunu doldurun. <br/>
Formu başarıyla gönderdikten sonra, otomatik olarak yeni hesabınıza girilir ve seçtiğiniz API bağlantısını ekleyebileceğiniz bir sayfaya yönlendirilirsiniz. <br/>
<B> 2. Adım - kayıtlı bir API bağlantısı ekleyin (alt ürün) </ b> <br/>
Zaten hesabınıza giriş yapmadıysanız, bunu live.iletisimmakinesi.com adresinden yapmanız gerekir. <br/>
* Üst menüden \"Ürünlerimi Yönet \" seçeneğini seçin. <br/>
* Açılır menüden kullanmak istediğiniz API bağlantı türünü (HTTP API) seçin ('Bağlantı Ekle'). <br/>
* Formu doldurun. Kilitli IP'yi (bu sunucunun IP'si) girdiğinizden emin olun, Geri Arama'yi HTTP POST'a ayarlayın. IP geri çağrısını ".get_showtime ('live_site')." /index.php?option=com_jomres&task=sms_clickatell_callback ve bir kullanıcı kimliği ve parola ayarlamanız gerekir. <br/>
Birden fazla API bağlantısı kurarsanız, her biri için girdiğiniz açıklama adı benzersiz olmalıdır - aynı ada sahip birden fazla API'ya sahip olamazsınız. <br/>
Formu başarıyla gönderdikten sonra, her bağlantının benzersiz API Kimliği (api_id) de dahil olmak üzere kimlik doğrulama ayrıntılarınız görüntülenir. Bu kimlik doğrulama ayrıntıları, bir ileti göndermek için Clickatell ağ geçidine bağlanırken gereklidir. <br/>
<br/>
Yukarıdaki alanları doldurmak için kullanıcı adınızı, şifrenizi ve api_id'i kullanın. <br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Liste form kaynak listesi engelli kişiye uygunluğu göster');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Rezervasyon kaynak formatı listesi en fazla kişiyi göster');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Listelenen fiyatların tahmini olduğunu ve ekstra hizmetler veya odaları ekleyene kadar rezervasyonun tam fiyatının hesaplanmayacağını lütfen unutmayın.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Abonelik paketleri');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'İsim');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Açıklama');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Yayınlandı');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Tam tutar');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Özellik limiti');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Abone ol');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Abonelik taşıma işlevini kullan');
jr_define('_JOMRES_COM_NEWUSER', 'Rezervasyon sırasında yeni kullanıcı yarat');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Kayıtsız kullanıcı rezervasyonunda yeni kullanıcı hesabı oluşturun.');
jr_define('_JOMRES_CLICKTOREGISTER', 'İşletmenizi başlatmak için burayı tıklayın');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Yeni kullanıcı detayları ');
jr_define('_JOMRES_LATLONG_DESC', 'Enlemi ve boylamı ayarlamak için farenizle haritayı hareket ettirin ve işaretçiyi mülkünüzün bulunduğu yere sürükleyin.');
jr_define('_JOMRES_CONTROLPANEL', 'Kontrol paneli');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Fatura göster');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Faturaları göster');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Mülkümü bu siteye ekle');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Yapılacak : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Maalesef, paket kimliği tanınmıyor.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Zaten ücretsiz bir pakete üye oldunuz, o pakete tekrar üye olamazsınız.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Şirket bilgileriniz');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Şirket Adı');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'KDV numarası');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Yapı numarası');
jr_define('_JOMRES_INVOICE_NUMBER', 'Fatura No. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Odaların müsait olmayacağı tarihleri seçin. Seçiminizi yaptıktan sonra uygunluk durumunu kontorl edin. <br/> 
<br/> 
Mülk, seçilen süre boyunca bir veya daha fazla rezervasyon yaptırmışsa, diğer rezervasyonlar / kapatılan odalar iptal edilene / rezerve edilene kadar rezervasyon yapamazsınız.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Üzgünüz, bu tarihlerde bu mülkü kapatamazsınız.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Bu tarihlerde bu mülkü kapatabilirsiniz.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Mülkünüz kişi başı gecelik ücretlendirilecek şekilde yapılandırıldı ancak herhangi bir konuk tipi oluşturulmadı veya yayınlanmadı, lütfen bir veya daha fazla konuk tipi oluşturup yayınlayın. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Sonra bazı tarifeler eklemeniz gerekecek: Bunlar temel oda fiyatlarınızdır, gerçek hayatta olan mülkünüzde bulunan her oda türü için fiyat eklemelisiniz.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Etiket Düzenleme modu açık');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Etiket Düzenleme modu kapalı');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Değişken depozitolar eklensin mi?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Değişik depozitolar, rezervasyonun varış tarihi "bugün" ten "N" gün içinde ise tam tutarın doldurulmasını isteyip istemediğinizi tanımlamanıza izin verir. Özelliğini etkinleştirmek için bu seçeneği Evet olarak ayarlayın. Ve gün sayısını aşağıya girin, böylece varış günü 60 gün içinde ise, tahsil edilen depozito miktarı tam tutar, aksi takdirde miktar yukarıda yapılandırılmış olan depozit seçeneklerine bağlı olacaktır.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Tam tutarın depozito olarak tahsil edileceği gün sayısı');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Onay e-postası gönderildi, şimdi bu pencereyi kapatabilirsiniz.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Temas kurun');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Faturayı ödenmiş olarak işaretle');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Fatura ücretli olarak işaretlendi');
jr_define('_JOMRES_APIKEY_REMAKE', 'Yeni API anahtarı oluştur');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Bu tek bir mülk kurulumu mu?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Bu seçenek Evet olarak ayarlanırsa, yetkili olmayan kullanıcılara Jomres\'ın ön görünüşü büyük ölçüde basitleştirilir. Bir menü seçeneğinden Jomres\'a yapılan varsayılan çağrılar, işletmelerin listesi verilmek yerine, Sistemdeki ilk mülk için rezervasyon formuna konuk olan mülk yöneticileri, Emlak Ayrıntıları önizleme düğmesini veya Yeni mülk ekle düğmesini görmez. Sadece bir mülk listelemek ve mülk için rezervasyon yaptırmak istiyorsanız idealdir. />');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Bakiye ödemeleri');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Not: Global Düzenleme modu etkinse Düzenleme Modu\'nu kullanıyorsunuz.Bu, Global Düzenleme modunun ne anlama geldiğini anlarsanız iyi olur, ancak kendinize sorun çıkarmayacağınız halde emin değilseniz Jomres\'ı bu şekilde kullanmanız gerekirse, lütfen <a href = "http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" adresine bakın.   " target="_blank" düzenleme modu el kitabı sayfasını </a> ziyaret edin.');
jr_define('_JOMRES_SUPPORTKEY', 'Destek anahtarı');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Destek lisans anahtar numaranız (lisans numaranız olarak da bilinir) Jomres için eklentileri indirebilmek için güncel lisansa sahip olmanız gerekir.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Kişisel indirim');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Mülk kaydı bir ülkeye sınırlansın mı?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Bu seçeneğin Evet olarak ayarlanması ve ülkenin aşağıdaki seçenekte ayarlanmasıyla mülkiyet kayıtlarının sadece bir ülke ile sınırlı olmasını sağlayabilirsiniz.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'İşletmeler bu ülkededir: ');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery theme');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Özellik ayrıntıları sekmeleri için kullanılacak bir jquery temasını seçin.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Özür dileriz, ancak bu özellik şu anda kullanılamamaktadır.');
jr_define('_JOMRES_REVIEWS', 'Yorumlar');
jr_define('_JOMRES_REVIEWS_TITLE', 'Başlığı inceleyin');
jr_define('_JOMRES_REVIEWS_DATE', 'gönderildi');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Bu otel için henüz yorum yapılmamış.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Bu oteli ilk inceleyen siz misiniz?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Bu incelemeyi kabul ediyorum');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Bu incelemeye katılmıyorum');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Otel puanı:');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Toplam Oy:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Yeni bir inceleme ekleyin.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'İncelemenizi yapmak için oturum açmanız gerekmektedir.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Bu mülk hakkında ne düşündüğünüzü bize bildirin:');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Bu inceleme bize gösteriyor ki:');
jr_define('_JOMRES_REVIEWS_PROS', 'Artıları:');
jr_define('_JOMRES_REVIEWS_CONS', 'Eksileri:');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Yükleme tarihi:');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Bu işi zaten incelediniz, başka bir gözden geçirme yayınlayamazsınız.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Üzgünüz, ancak bu sitede incelemelere izin vermiyor.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Yorumları göster');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'misafirler bu incelemeyi kabul ettiler.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'misafirler bu incelemeyi kabul etmiyor.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'konuk bu incelemeyi kabul ediyor.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'konuk bu incelemeyi kabul etmiyor.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Bu inceleme hakkındaki görüşlerinizi paylaştığınız için teşekkür ederiz.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Teşekkürler, ancak zaten bu inceleme hakkındaki görüşlerini paylaştınız.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Please ensure that all fields have been filled.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Lütfen tüm alanların doldurulmuş olduğundan emin olun.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Lütfen bir başlık girerek gözden geçirmenizi özetleyin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Lütfen açıklama kutusuna daha kapsamlı bir inceleme girin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Lütfen iyi yorumlarınızı girin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Lütfen olumsuz düşüncelerinizi girin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Lütfen personelin aldığı bariziliğin derecelendirmesini değerlendirin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Lütfen işletmenizin konusuna ilişkin görüşünüzü değerlendirin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Lütfen işletmenin temizliği konusundaki düşüncenizi belirtin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Konaklamayı derecelendirin, rahat mıydı yoksa ipeksi miydı');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Para için değerli olup olmadığına dair düşüncenizi belirtin lütfen');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Lütfen hizmetleri derecelendirin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'İncelemeleri inceleyin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Deneyiminizi ayrıntılandırın');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'İncelemenizi gönderdiğiniz için teşekkür ederiz.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'İncelemenizi gönderdiğiniz için teşekkür ederiz, kısa sürede zorlu çalışma moderatörlerimiz tarafından yayınlanacaktır.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Jomres inceleme işlevini kullan?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Yorumları otomatik olarak yayınlıyor musunuz?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Bunu Hayır olarak belirlerseniz yorumları el ile yayınlamanız gerekecek');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'İncelemeler test moduna ayarlansın mı?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Özellikle mülk yöneticileri işletmeleri inceleyemiyor, test modu etkinse bunlar yapabilir, doğal olarak bu bir üretim ortamında ideal değildir.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Bu, tüm işletmelerin bir listesidir. Bir işletmenin incelemelerini görmek için o işletmeyi tıklayın.Burada bir incelemeyi yayınlayabilir veya silebilirsiniz.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Yayınlanmamış incelemelerin sayısı');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Toplam inceleme sayısı');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'İncelemeyi yayınla / yayımlamayı kaldır');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'İncelemeyi sil');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Rapor incelemesi');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Raporları inceleyin');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Lütfen raporunuzu girin');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Bu derlemede rahatsız edici olan bir şey mi var? Rapor verin ve sizin için araştıralım');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Gönder');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Rapor oluşturuldu');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Raporlar bir incelemenin içeriğiyle hemfikir olmayanlar tarafından gönderilir. Bir raporu kaldırmanın tek yolu derlemeyi silmektir.');
jr_define('_JOMRES_REVIEWS_RATING', 'Dereceler (1 = kötü 10 = mükemmel)');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Misafirperverlik');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Konum');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Temizlik');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Konaklama');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Para birimi');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Hizmetler');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'İnceleyen:');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Yorumları gizle');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Mülk ayrıntıları sayfasında rezervasyon formu gösterilsin mi?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Rezervasyon formunu mülk ayrıntıları sayfasında göstermek için Evete getirin. Hayır olarak ayarlarsanız, mülk ayrıntıları sayfasında bunun yerine rezervasyon formunu gösteren bir bağlantı görünür.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Fiyatlar brüt mü?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Eğer sisteme girdiğiniz fiyatlara vergi dahil edilirse, Evet\'i seçin, değilse (yani Nett), Hayır\'ı seçin');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Hizmet vergisi:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Haftanın günleri alanları haftanın belirli bir haftasında bir oran belirlemenize izin verir.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Tarih seçicileri ve ücret girişi belirli bir tarih aralığı için bir fiyat belirlemenize izin verir. Bir başlangıç ​​ve bitiş tarihi seçin, bir fiyat girin ve Oranları Ayarla düğmesini tıklayın.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Başlama aralığı');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Bitiş aralığı');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Oran');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Oranları ayarla');
jr_define('_JOMRES_PARTNERS_TITLE', 'Ortaklar');
jr_define('_JOMRES_CALENDAR_RTL', 'yanlış');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Oda');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'konuk.');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Bu, misafir numaralarınızı odalarınıza nasıl atadığımızı gösteriyor.) Bu tahsiyi değiştirmek isterseniz, rezervasyon yaptıktan sonra otelle iletişime geçmeniz gerekecektir. Atamalarınızı değiştirirseniz ek ücret alınabilir.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Mülkünüzün henüz yayınlanmadığına dikkat edin, işletmeyi yalnızca siz görebilirsiniz, site ziyaretçileri göremez');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Varsayılan arama sonucu sırası');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Arama sonuçlarının varsayılan olarak sunulma sırasını değiştirmek için bu seçeneği değiştirin.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Arama sonuç düzenini açılır listede göster');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Odalar listesi stili');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'Rezervasyon formunda, "klasik" oda listeleri stilini kullanarak misafirlere bireysel odalar önerirsiniz. Kaynak türü görünümünde konuklar, X türündeki oda sayısını seçerler (örn., 2 x çift katlı)');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klasik');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Oda tipleri');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Takvim haftası başlangıç günü, Pazar veya Pazartesi');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Sadece emlak misafirleri incelesin mi?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'İncelemeleri yalnızca bu işte zaten misafir olan kullanıcılarla sınırlandırmak isterseniz bunu Evet yapın');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Kaynak başına');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Kişi sayısı:');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Rezervasyon için ayrılan konuklar:');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Oda sayısı');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Ocak');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Şubat');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Mart');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Nisan');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Mayıs');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Haziran');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Temmuz');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Ağustos');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Eylül');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Ekim');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Kasım');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Aralık');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Genel Yapılandırma bölümünde mülk yöneticilerine sağlanan seçenek sayısını azaltmak için Evet\'e getirin. Mülk yöneticilerinin çok fazla ayar yapmasını istemiyorsanız, bunun yerine jomres_config\'yi düzenleyebilirsiniz Varsayılan özellik seçeneklerini tanımlamak için .php. ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Lütfen rezervasyonunuz için bir seçenek belirleyin');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Mülkiyet ayrıntıları düzenleme sayfasındaki html editörlerini açar Ayrıca, Hayır olarak ayarlanırsa, p ve br haricindeki tüm html, girilen ve görüntülenen tüm metinlerden çıkarılır.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Tam ekran görünümü");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Normal görünüm");
jr_define('_JOMRES_PARTNER_DISCOUNT', "İş ortağı indirimi");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', "Kullanıcı ara");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', "Bir kullanıcı aramak için birkaç karakter girin. <br/> Bir kullanıcı seçtiğinizde bunları otomatik olarak Ortak olarak ekleyeceksiniz ve işletmeler atamak ve indirimler yapabileceğiniz bir sonraki sayfaya yönlendirileceksiniz. Kullanıcıya. ");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', "Mevcut ortaklar");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', "İş ortağı yönetim sayfasına yönlendirilecek bir ortak seçin.");
jr_define('_JOMRES_PARTNER_SHOW_TITLE', "İş ortağı:");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Bir işletme ara");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Mülk adından birkaç karakter girin ve bir iş seçin. <br/> Mülk seçtiğinizde onu eşinizin portföyüne ekleyeceksiniz, ancak herhangi bir indirimin keyfini çıkarmayacak, ihtiyaç duyacaksınız Bunları kendiniz belirlemek için. ");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Mevcut işletmeler");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Bir işletmenin iş ortağının indirim ayarlarını düzenlemek için bir mülke tıklayın.");
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "Bu hesap askıya alındı, şu anda bu hesabı kullanarak mülkünüzü yönetmek mümkün değil.");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Yönetici hesabı askıya alındı");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Yönetici hesabı eski konumuna getirildi");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Mülk yöneticisi hesabınızın askıya alındığını unutmayın, hesap geri getirilene kadar herhangi bir mülk yönetimi işlevini gerçekleştiremezsiniz.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Mülk yöneticisi hesabınızın şimdi etkin olduğunu lütfen unutmayın Herhangi bir mülk yönetimi işlevini yerine getirmeye devam edebilirsiniz. Lütfen hesabınıza giriş yapın ve uygun belge varlıklarının yayınlandığından emin olun." );
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Sık Kullanılanları kaldır');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Rezervasyon data arşivi');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Rezervasyon verileri arşivi, onay onay düğmesi tıklandıktan sonra çekilen rezervasyon bilgilerinin ham bir dökümüdür. Ham veri dökümünü görmek için fareyle üzerine gelin, bilgiler XXX__jomres_booking_data_archive tablosunda saklanır.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Hesabı düzenle');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Bir kullanıcı aramak için kullanıcı adlarından birkaç karakter girin. <br/> Bir kullanıcı seçtiğinizde bunları otomatik olarak Yönetici olarak ekleyeceksiniz ve atayabileceğiniz bir sonraki sayfaya yönlendirileceksiniz. Işletmeler ve kullanıcılara erişim hakları. ");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "Mevcut yöneticiler");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Kişi Sayısı");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Aramayı konuk numarası açılır listesine göre göster");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Yıldız");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Yıldızları açılır listede göster");
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Konuk sayısı');
jr_define('_JOMRES_SEARCH_STARS', 'Yıldız sayısı');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "İşletme sayısı");
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', "Jomres jQuery kitaplığını yükle?");
jr_define('_JOMRES_CONFIG_JQUERY_DESC', "Eğer jquery kullanan bir şablonunuz varsa bunu NO olarak ayarlayabilirsiniz.Bu, bazı şablonlarda jQuery çakışma sorunlarının bazılarını çözebilir");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Eğer Joomfish kullanıyorsanız bunu No olarak ayarlamalısınız ve Jomres\'ın dil değiştiricisini kullanmalısınız. Çevirici, Label Translation özelliğini kullanırken ihtiyaç duyulduğu için her zaman yönetici alanında etkindir.' );
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Minyatür resimler yüklenen resimler için otomatik olarak oluşturulur.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Küçük küçük resim genişliği (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Özellik listesinde küçük küçük resimler kullanılırken, özellik başlığında orta büyüklükteki küçük resimler kullanılır.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Küçük minyatür maksimum yükseklik (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Orta boy min. Genişlik (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Orta boy minyatür maksimum yükseklik (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Marka çevirileri');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', "Komisyon işlevselliğini kullan?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Yükseltilmiş yönetici komisyon faturalarını göstermek için Evet olarak ayarlayın.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "Yönetici rezervasyonları komisyon faturaları oluşturuyor mu?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "Bir yönetici bir rezervasyon yaparsa bu aynı zamanda bir komisyon fatura satırı öğesi oluşturur mu?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', "Faturaların Beklemede olarak işaretlendiği yöneticileri otomatik askıya al");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', "Otomatik yedek askıya alma");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', "Bu iptal, bir yöneticinin askıya alınmadan ve işletmelerinin yayımlanmadan önce bir faturayı ödemesi gereken gün sayısıdır");
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Dil bağlamı');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Sitenin dil bağlamını değiştirmek için bu seçeneği kullanın. Bu özellik, Jomres\'ın geçerli odakınıza uygun etiketleri kullanmasına izin verir; bu nedenle, odak alanınız bir Yat Aracılık olarak seçilirse, bağlamı değiştirirseniz Jomres\'ın farklı bir dil dosyasından etiket sunmasına izin verin Örneğin bağlamı "Yacht Brokerage" olarak ayarlarsanız, Jomres önce geçerli dili bulacaktır, daha sonra bir alt dizin için /'.JOMRES_ROOT_DIRECTORY.'/languages ​​dizininde arama yapacaktır. "Yacht brokerage" olarak adlandırılır.Eğer mevcut dilde dosya varsa, o dosya kullanılır.Eğer yoksa, Jomres aynı dizinde bir ingilizce dil dosyası arar.Eğer bulunamazsa, Jomres /'.JOMRES_ROOT_DIRECTORY.'/languages ​​dizininde seçili dilin dil dosyası.Yeni bir mülk türü oluşturursanız, geçerli dil dosyasının bir kopyası /'.JOMRES_ROOT_DIRECTORY.'/ altındaki bir alt dizinde yapılır. Yeni özellik türünün tanımlamasını yansıtan bir dil.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Gelişmiş site yapılandırması');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Gelişmiş site yapılandırma seçeneklerini kullanmak isterseniz bu seçeneği Yes (Evet) olarak ayarlayın.Eğer sadece Evet ile başlarsanız, varsayılan kurulum şu anda Hayır olarak bırakmanızı öneririz Jomres\'ı ana menüye ekleyip önyüzde "admin" olarak oturum açmanız ve mülkünüzü yapılandırmaya başlamanız gerekiyor.Geliştirilmediğiniz takdirde gelişmiş seçeneklerin birçoğunun mevcut olmayabileceğini lütfen unutmayın. Uygun eklentileri yüklemiş olmazlar.Katsız, çekirdek sistem kullanıcısı, etkinleştirdikleri özelliklerden tam olarak yararlanamaz. ');
jr_define( '_JOMRES_CONFIG_JQUERY_UI', "Load Jomres jQuery UI library?" );
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Fiyat (önce en yüksek)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Fiyat (önce en düşük)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Fiyat özet ve tahminleri gecelik / haftada / aylık fiyatlandırılsın mı?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', '/Gecelik');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Haftalık');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Aylık');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Kişi Başı');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'hafta (lar)');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'ay (lar)');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Kişi numaraları için arama seçeneği nasıl çalışsın?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Tüm arama modüllerine etkide bulunur Konuk numarası arama özelliğini kullanırken arama özelliği, kimlerin tarife numaraları konuk sayılarını destekleyecek ve seçilen sayıya eşit olacak özellikleri ararsa, tam olarak seçilen sayıya eşit veya Seçilen sayı ve daha mı? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Lütfen bekleyin, siparişiniz işliyor ve siz Paypal web sitesine yönlendirileceksiniz.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', '5 saniye içinde otomatik olarak Paypal\'a yönlendirilmezseniz ...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Burayı tıklayın');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', "Rezervasyon geçerli");
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', "Rezervasyon geçerli");
jr_define('_JRPORTAL_COUPONS_GUESTNAME', "Misafir adı");
jr_define('_JRPORTAL_COUPONS_DESC_478', "İndirim kodları oluşturulabilir ve rezervasyon yapmak için bir teşvik olarak konuklara geçirilebilir. <br/>
Geçerlilik tarihleri ve tarihleri, rezervasyonun yapılacağı tarihleri belirtir; buna karşın Rezervasyon geçerli / tarihleri, kuponun geçerli olabilmesi için rezervasyonun kapsadığı tarihleri ifade eder. Bir rezervasyon, o dönemin dışına çıkarsa o dönemin dışındaki günler için normal fiyatlar geçerlidir. <br/>
Rezervasyonun belirli bir konuğa uygun olmasını isterseniz, kuponun yalnızca o konuğa sınırlanması için açılır menüden o konuğun adını seçin. ");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', "Kuponunuzla bu rezervasyon indirime tabi tutuldu");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', "kime:");
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', "Hem Jquery UI javascript'inin hem de CSS dosyalarının yüklenmesini devre dışı bırakmak için Hayır olarak ayarlayın.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', "Jomres jQuery UI CSS kitaplığını yükle?");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', "Bunu yalnızca jquery UI CSS dosyasını devre dışı bırakmak için Hayır olarak ayarlayın.");
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "Vergiler dahil toplam");
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Yayınlanmamış özellik');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', "Dönüşen işlevsellik kullan");
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Jomres çevrimiçi dönüştürme işlevini kullanın.Bu, ön teklif kullanıcılarına, fiyatların teklif edilmesini istediği bir para birimini seçebilecekleri bir dönüşüm açılır liste sunacaktır. Fiyat çıkışı, dönüştürülen Fiyatın ardından mülkün yerli fiyatı parantez içinde gösterilir. ");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', "Elimizdeki en doğru ve zamanında döviz kurlarını elde etmek için elimizden gelenin en iyisini yapmış bulunmaktayız. Çevrimiçi para birimi dönüştürme özelliği yalnızca bilgilendirme amacıyla verilen bir hizmettir ve kesin rakamlar vermeyi amaçlamamaktadır.Buna göre, Döviz kurlarının doğruluğunu garanti etmiyoruz Bu özelliği kullanarak, oran dönüştürme özelliğinden her hangi bir güvendikçe veya kullanıldığında tamamen kendi sorumluluğunuz altındadır. ");
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Para birimi dönüştürme / para birimi kodları');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Algılama API Anahtarı');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Para birimi kodunu otomatik olarak ayarlamak için açılır menü Jomres, ziyaretçinin bulunduğu ülkeyi tespit etmek için IPinfoDB adlı ücretsiz bir hizmet kullanabilir, ancak bir API anahtarı için <a href = "https://www.ipinfodb.com/login" target="_blank" IPinfoDB </a> önce. ');
jr_define('_JOMRES_DEBUGGING_TAB', 'Hata ayıklama');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Konaklama ücreti (vergiler hariç)');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Konaklama ücreti (Vergiler dahil)');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Konaklama vergisi');
jr_define( '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Rezervasyon formunu aç' );
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Özellik bilgilerine dön');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Otomatik Olarak mı Seçildi?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Depozito ödendikten sonra kalan toplan tutar');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Odaları özelliklerine göre filtrele.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Son rezervasyon');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'saniye');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'dakika');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'saat');
jr_define('_JOMRES_DATEPERIOD_DAY', 'gün');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'hafta');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'ay');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'yıl');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'on yıl');
jr_define('_JOMRES_DATEPERIOD_S', '-');
jr_define('_JOMRES_DATEPERIOD_AGO', 'önce');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'şu anda itibaren');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Rezervasyonlar bütün gün içindir?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Varsayılan olarak sistem gece boyunca odaları dışarıda bırakır, bu nedenle Ocak ayı başında bir rezervasyon yapılır.\' Tarih ("Y", strtotime ("gelecek yıl")) .Tarih ("Y", strtotime ("gelecek yıl")). Sadece bir gece kapsar.Ancak bu seçeneği Evet olarak ayarlarsanız, rezervasyonun tüm günleri kapsayacağı, bu tarihlerdeki bir rezervasyonun hem Gün ve müşteri iki gün boyunca faturalandırılacaktır. ');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLDEDAY', 'Günlük');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLDEDAY', 'Kişi başına günde');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLDEDAY', 'Karşılama');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLDEDAY', 'Dönüş');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLDEDAY', "gün (ler)");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLDEDAY', 'İade tarihi yanlış');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLDEDAY', 'Rezervasyon çok kısa. Başlama ve dönüş tarihleri ​​arasında en azından bu kadar gün var olması gerekiyor:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLDEDAY', 'Alma / İade minimum aralığı');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Başlama ve bırakma tarihleri ​​arasındaki rezervasyon formundaki mimimum aralık 1\'lik bir aralık, alma ve dönüş tarihlerinin aynı güne ayarlanabileceği anlamına gelir, ancak bu yine de minimuma Rezervasyon motoru tarafından otomatik olarak hesaplanan aralık, çünkü rezervasyon periyodu için geçerli olan tarifeleri kontrol eder. ');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLDEDAY', 'Fiyat özet ve tahminleri günde / haftada / ayda mı fiyatlandırılmalı?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLDEDAY', 'Günlük');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLDEDAY', 'Başlama tarihinden önceki günler');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLDEDAY', 'Bugünden itibaren, teslim tarihinden önce geçmesi gereken minimum gün sayısı.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Peşin rezervasyonları sınırlamak isterseniz bunu evet olarak ayarlayın (sınırı gün olarak ayarlamak için bir sonraki alanı kullanın) Bunu evet olarak ayarlarsanız, kullanıcı en fazla n Gün önceden peşpeşe tarihi bugünün tarihine geri yüklenir');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Dönüş tarihi girişi göster?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "İade tarihi girişi kutusunu göstermek istemiyorsanız, Hayır'a getirin. Sadece ne yaptığınızı biliyorsanız kullanın, rezervasyonlardaki dönüş tarihi daima yükleme tarihinden sonrasında bir güne ayarlanır. ");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Evet olarak ayarlarsanız, rezervasyonlar sabit bir süre için yapılacaktır. Hayır olarak ayarlanırsa, "tanımlanmış alma günü" nün Evet olarak ayarlanmadığından emin olun (aksi belirtilmediği sürece Insanların haftanın belli bir gününde alımını zorlamak istersiniz) yoksa kullanılabilirlik takviminde birçok bağlantı almazsınız. ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLDEDAY', 'Önceden tanımlanmış başlangıç ​​günü');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLDEDAY', 'Sadece sabit süreli rezervasyonlar sunan siteler için. Karşılama yapılacağı haftanın gününü seçin.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLDEDAY', 'Sabit teslim günü');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLDEDAY', 'Sabit karşılama tarihleri:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Sabit karşılama tarihleri ​​seçildiğinde, tarihler açılır listesinde gösterilebilecek tarihlerin sayısı. Önceki rezervasyonlar nedeniyle bir rezervasyon yapılamıyorsa, tarih listesini içermez, Ve listenin aslında seçilen numaranızın iki katı uzunluğunda olacaktır. çünkü benzer tarihsel tarihlerin sayısına (mevcut olduğunda) sahiptir. ');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLDEDAY', 'Kişi başı, günlük');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLDEDAY', 'Günlük kişi başı ücret almak isterseniz Evet\'i seçin, yoksa, masraflar günlük kaynak başına günlük olarak hesaplanır');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Değişik mevduatlar, rezervasyon gününün "bugün" tarihinden itibaren N gün içinde olması durumunda tam tutarı ödemek isteyip istemediğinizi tanımlamanıza izin verir. Özelliğini etkinleştirmek için bu seçeneği Evet olarak ayarlayın. Ve aşağıdaki gün sayısını girin, örneğin, çekme günü 60 gün içinde ise, tahsil edilen depozito miktarı tam tutar, aksi takdirde miktar yukarıda yapılandırılmış depozito seçeneklerine bağlı olacaktır. ');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Çoğu işletme, belirli bir tarihte kullanılabilen, gerekli bir türün oda sayısına dayalı olarak kaynak fiyatlarını yeniden hesaplayacak ve bu, kaynak fiyatını meşgul olmayan bir kaynak / mülk türüne indirim sağlayacak Aksi takdirde kaçırılmaması gereken mülkleri çekebilmek için belirli bir süre. <br/> Bu eklentinin etkinleştirilmesi ve yapılandırılması, belirli bir gündeki mülkte seçilen bir türün oda sayısına göre ayarlanabilir fiyatlandırma imkânı sunmanıza izin verir. <br/> Gün eşiği, kaynak fiyatlarının bu özellikle ayarlanmasından önce yükleme tarihinin içinde olması gereken gün sayısını tanımlar; ardından yüzdelikler seçenekleri, belirli bir indirimin uygulanmadan önce mevcut olabilecek odaların yüzdesini yapılandırmanıza izin verir. Ancak, birden fazla oda rezervasyonu yapıldıysa, mevcut indirim seviyesi tüm odalara uygulanır ve daha fazla oda seçildiğinde azalmaz. ');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLDEDAY', 'Eşik (yükleme tarihi ile bugün arasındaki gün sayısı)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLDEDAY', 'Beklemedeki karşılama');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLDEDAY', 'Günün karşılaması');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLDEDAY', 'Alınmış');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLDEDAY', 'Bugüne geri dön');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLDEDAY', 'İade süresi geçmiş');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLDEDAY', 'Alışılmadı');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLDEDAY', 'Gün');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLDEDAY', 'Bir rezervasyon işaretlendi.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLDEDAY', 'Bir rezervasyonu iade etti.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLDEDAY', 'Bir rezervasyon işaretlendi');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLDEDAY', 'Bir rezervasyon iadesini işaretle');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLDEDAY', 'Gün başına maliyet:');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLDEDAY', 'Gün sayısı:');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Konaklama Toplamını Geçersiz Kıl');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Değişiklikleri kaydet');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Yeni kullanıcılara giriş bilgileri gönderilsin mi?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Create New User (Yeni Kullanıcı Oluştur) seçeneği Yes (Evet) olarak ayarlanırsa, kullanıcı oluşturulduktan sonra giriş bilgilerinin email yoluyla gönderilmemesini sağlamak için bu seçeneği No (Hayır) olarak ayarlayabilirsiniz. Örneğin yeni kullanıcıları bir posta listesine ekleme ve kullanıcıların gerçekten oturum açmasını istememe. ');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Rezervasyon formundaki toplamları göster?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Rezervasyon formunun, bu seçeneği Hayır olarak ayarlayarak toplamlar özetindeki vergi fiyat alanlarını göstermesini önle');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'İptal formu');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Kayıtlı misafirler, kayıtlı misafirler kendi rezervasyonlarını iptal edebilirler. Burada rezervasyonun belirli bir süre geçtikten sonra iptal edilemeyeceği, rezervasyon tarihindeki gün sayısını belirleyebilirsiniz.');
jr_define('_JOMRES_EDIT_PROFILE', 'Profilini Düzenle');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Özellik türü ilişkisi');
jr_define('_JOMRES_IMAGE', 'Resim');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Birinci karakteri içeren tüm işletmeleri göstermek için bir mektubun üzerine tıklayın .. Bir mülk listesine sahip olduğunuzda, bu mülklere komisyon oranları atayabilir veya işletmeyi görüntülemek için "düzenleme" simgesini tıklayabilirsiniz. S istatistikleri. ');
jr_define('_JRPORTAL_TAX_RATE_EDIT', "Vergi oranını düzenle");
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', "Özel alanı düzenle");
jr_define('_JOMRES_LICENSESERVER_PASSWORD', "Lisans sunucusu şifresi");
jr_define('_JOMRES_LICENSESERVER_USERNAME', "Lisans sunucusu kullanıcı adı");
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', "Lisans sunucusunda bir kullanıcı adı ve parolanız varsa, lütfen buraya girin.Bu, yetkiniz olan eklentilere erişmenize yardımcı olacaktır. Yukarıdaki alanda geçerli bir Destek anahtarını girdiyseniz, O zaman kullanıcı adı / şifreyi burada vermek gerekli değildir. ");
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', "Bu Jomres sürümü:");
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', "Son Jomres sürümü");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', "Uyarı: Jomres'ın yeni bir sürümü mevcut, en kısa sürede yükseltmenizi önerirsiniz.");
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Jomres\'a hoş geldiniz, rezervasyon sistemini beğeneceğinizi umuyoruz.Jomres Starter, Business veya Enterprise lisansını satın almak isterseniz <a href = "http: // www. Jomres.net/prices   " target="_blank" Sitenizi ziyaret ederek nasıl yeni sürüme geçebileceğinizi öğrenin. ');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'Bu sistem her bir senaryo için ideal, tek bir mülk için basit bir rezervasyon formu, birden fazla kullanıcıya birden fazla kullanıcıya, birden çok dilde, birden çok özelliği olan siteye kadar. "Yardım" bölümüne bakın. Ilk adımlarınız boyunca size rehberlik edecek "Başlarken" sayfası da dahil olmak üzere sola gidin. ');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Aktif özellik");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', "E-posta Ayarları");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', "Bu Alternatif SMTP ayarlarını kullanmak için bu seçeneği Yes'e ayarlayın. Jomres'in ev sahibinden aldığı posta ayarlarını geçersiz kılmayı seçebilmek için artan sayıda web barındırıcısı PHP posta işlevselliğini engelliyor gibi görünür CMS (genelde Joomla) ve burada kendi tercihlerinizin ayarlarını kullanın. ");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', "Alternatif Ana Bilgisayar");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', "Bunu smtp posta sunucusuna değiştir");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', "Alternatif Bağlantı Noktası");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', "Bunu smtp bağlantı noktanıza değiştir");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', "Alternatif Protokol");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "smtp sunucu ayarlarınıza bağlı olarak, bu dosyayı boş bırakmanız veya 'ssl' veya 'tls' değerlerini girmeniz gerekir. Eğer bilmiyorsanız, SMTP sağlayıcınıza sorun.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', "Kimlik doğrulamayı kullan");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', "SMTP sunucunuz oturum açma isteminde bulunuyorsa, bunu Evet olarak ayarlayın Kullanıcı adı ve parola sonra kullanılır.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', "Alternatif Kullanıcı adı");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', "");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', "Alternatif Parola");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', "");
jr_define('_JOMRES_QUICK_INFO', "Hızlı Bilgi");
jr_define('_JOMRES_MENU_SHOW', "Göster");
jr_define('_JOMRES_MENU_HIDE', "Gizle");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', "Varsayılan");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', "Herkes");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', "Kayıtlı");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', "Yönetici");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', "Süper Yönetici");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', "Kimse");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Erişim kontrolü');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'Bu özellik, ana menüde bir eklentiyi kimin görebileceğini kontrol etmenizi sağlar.Örneğin, 00009 kullanıcı seçenekleri, ya / veya kayıtsız site ziyaretçileri tarafından görüntülenebilir, 00010 seçenekleri genelde Resepsiyon tipi etkinliklerdir 00011 seçenekleri, bir mülkün kurulması ve konfigürasyonu için kullanılır, ancak daha az erişilir.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', "Resepsiyonist");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', "Tam Erişim Kontrolü");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', "Tam erişim kontrolü özelliğini etkinleştirmek için bu seçeneği Evet olarak ayarlayın, ardından erişim denetimlerini yapılandırmak için Sistem Bakımı altındaki Erişim Kontrolü seçeneğini ziyaret edin.");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Bununla birlikte, bu ayarlar, bağlandıkları komut dosyalarını kontrol etmez, örneğin, <i> 00009user_option_03_search </i> değerini 'Yönetici' olarak belirlerseniz, Jomres'i bilen bir kullanıcı hala Tarayıcınızın adres çubuğuna http://www.domain.com/index.php?option=com_jomres&task=search girerek j06000search.class.php'yi çağırın.Bu, Menü Erişimi kontrolü yalnızca neyin görülebileceğini kontrol ettiği için kasıtlıdır. Jomres Ana Menüsü: Sıkı kontrollere ihtiyacınız varsa, Site Yapılandırması -> Tam Erişim Kontrolü seçeneğini Evet'e getirin ve Menü Erişim Kontrolü seçeneğine tekrar bakın. ");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Tam Erişim denetimi');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>Bu özellik yalnızca ileri düzey kullanıcılar içindir. Bunun ne için olduğunu bilmiyorsanız ve kullanmak için özel bir sebebiniz yoksa lütfen Site Yapılandırması'na geri dönün ve Tam Erişimi Hayır seçeneğine kontrol seçeneği. </Strong> <br/>
	Bu özellik, hangi minicomponentlere kimlerin erişebileceğini kontrol etmenizi sağlar (bazı istisnalar sisteme zor şekilde kodlanmıştır). Bir komut dosyası adının yanındaki erişim düzeyi Varsayılan olarak ayarlanırsa Tam Erişim Kontrolü seçeneği Evet olarak ayarlandığında <strong> herkes </strong> erişememesi gereken komut dosyalarına erişebilir, dolayısıyla bu dosyayı kullanmayı düşünüyorsanız Özelliği burada listelenen <strong> her </strong> Jomres minikomponenti için erişim kontrol seviyesini ayarlamanız gerekir ZORUNLU. Bu minicomponent'lerin ne yaptıklarını bilmiyorsanız, o zaman bu özelliği hiç kullanmamanızı şiddetle tavsiye ederiz. <br/>
Jomres'ta erişim seviyeleri bir piramit izlemektedir, bu nedenle Süper Gayrimenkul Yöneticileri Yöneticilerden daha büyüktür. Kısacası Super Manager> Yönetici> Resepsiyonist> Kayıtlı> Kayıtlı Değil. Yani, Kayıtlı bir kullanıcının bir minicomponente erişimi varsa, Receptionists, Managers ve Super Managers gibi.<br/>
	Yönetici alanı minik bileşenlerini denetleyemediğinizi unutmayın. Yönetici alanındaki herhangi bir kişi, komut dosyasına (özellikle bu kişiye) erişimi engellenmemesi gerektiğinden güvenilir bir kullanıcı olarak kabul edilir.
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Uyarı! Tam erişim kontrolünüz etkinleştirilmiş durumda, ancak erişim kontrolü ayarlarını saydık ve kontrol edilmesi gereken minik bileşenlerin sayısı ile karşılaştırdık ve ikisi uyuşmuyor; Kontrol edilemeyen senaryolar.Bu bir güvenlik sorunu olabilir ve bunu, Erişim Kontrolü özelliğini ziyaret edip uygun seviyelerin uygulandığını kontrol ederek bir kerede çözmek için çağrılmanız gerekir.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Bu mülk için yönetici haklarına sahip kullanıcılar');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'E-posta adresiniz');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametreler');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define('_JOMRES_METATITLE', 'Meta başlık');
jr_define('_JOMRES_METADESCRIPTION', 'Meta açıklaması');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', "Mülkünüzü ekleyin: Adım 2/2");
jr_define('_JOMRES_CART_TITLE', 'Önerilen rezervasyonlarım');
jr_define('_JOMRES_CART_INFO', 'Bu kayıtlar henüz kaydedilmemiştir, oturumunuzu kapatırsanız veya oturumunuz dolarsa kaybolur, rezervasyonlarınızı onaylamayı unutmayın!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Rezervasyon onayla');
jr_define('_JOMRES_CART_OR', 'veya');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Sepete Ekle');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Kaydedilen herhangi bir rezervasyonunuz yok.');
jr_define('_JOMRES_CART_VIEWCART', 'Sepeti göster');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Dil dosyası alt dizini');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Varsayılan Enlem Başlangıç ​​Noktası');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Varsayılan Boylam Başlangıç ​​Noktası');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'Mülkiyet düzenleme sayfasındaki Google haritasında işaretçi taşınmadan önce varsayılan enlem / boylam başlangıç ​​noktaları ne olmalı?');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Hangi adresten gönderilen e-postalar?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Bu seçeneği devre dışı bırakmak için bu seçeneği boş bırakın. Tek bir yetkili adres) .Bu durumda, bu girişi, tüm sistem e-postalarının FROM adresi olarak görülecek bir adres girmek için kullanabilirsiniz. ");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', "Liste görünümü");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Fotoğraf görüntüleme");
jr_define('_JOMRES_COMPARE', "Karşılaştır");
jr_define('_JOMRES_REMOVE', "Kaldır");
jr_define('_JOMRES_RETURN_TO_RESULTS', "Arama sonuçlarına dön");
jr_define('_JOMRES_ADDTOSHORTLIST', 'Faviroilere ekle');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Favorilerden kaldır');
jr_define('_JOMRES_VIEWSHORTLIST', 'Favorileri gör');
jr_define('_JOMRES_COOKIEPOLICY_1', "Önemli: Çerez İlkesi");
jr_define('_JOMRES_COOKIEPOLICY_2', "Sitemizi alakalı ve kullanımı kolay tutmak için çerezleri kullanırız.");
jr_define('_JOMRES_COOKIEPOLICY_3', "Devamını oku ...");
jr_define('_JOMRES_COOKIEPOLICY_4', "AB mevzuatı, tüm web sitelerinin çerezlerin kullanılıp kullanılmadığını ve amaçlarını açıkça belirtmesini gerektirir.");
jr_define( '_JOMRES_COOKIEPOLICY_5', "Sitenin daha iyi çalışabilmesi için daha önceden yaptığınız seçimleri hatırlaması gerekir. Bunu yapabilmesi için \"çerez\" denen, tarayıcınızı tanımlayan bilgiyi hafızasında tutması gerekir. Bunu yapabilmemiz için izin vermeniz gerekiyor. Çerez Politikası'nı kabul etmezseniz, vereceğimiz hizmetten tam anlamıyla faydalanamayabilirsiniz." );
jr_define('_JOMRES_COOKIEPOLICY_6', "Evet, çerezlerin bu şekilde kullanılmasını kabul ediyorum.");
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Para yatırma ilk gecenin masrafı mı?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Fiyatlar gecelik olarak hesaplanır, depozitonun bir gece şarj edilmesini ister misiniz? Öyleyse, aşağıdaki seçenekleri yok sayabilirsiniz.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', "Favorilerinize hiç öğe eklemediniz.");
jr_define('_JOMRES_SAFEMODE', "Güvenli modu etkinleştirilsin mi?");
jr_define('_JOMRES_SAFEMODE_DESC', "Güvenli modu tetiklemek için bunu Evet'e getirin, böylece tüm eklentileri devre dışı bırakılacaktır, böylece Jomres yalnızca temel işlevlerini kullanacaktır.");
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', "Sonraki");
jr_define('COMMON_CANCEL', "İptal");
jr_define('COMMON_SUBMIT', "Gönder");
jr_define('COMMON_SAVE', "Kaydet");
jr_define('COMMON_DELETE', "Sil");
jr_define('COMMON_RETURN', "Dönüş");
jr_define('COMMON_CLOSE', "Kapat");
jr_define('COMMON_BACK', "Geri");
jr_define('COMMON_HOME', "Ev");
jr_define('COMMON_NEW', "Yeni");
jr_define('COMMON_SEND', 'Gönder');
jr_define( 'RECAPTCHA_TITLE', "reCaptcha" );
jr_define('RECAPTCHA_INFO', "Captcha, web formlarını kullanan müşterinin bir insanın olmasını sağlamak için kullanılır ve Property Manager'ın internette robotlar tarafından \"spam edilmemesini\" önlemek için kullanılır. Jomres'ı <a href=\"http://www.google.com/recaptcha\" target=\"_blank\"> Google reCaptcha </a> giriş sayfasında kaydettirmeniz ve alan adınızı almak için kendi alanınızı ayarlamanız gerekir. Kamu ve özel anahtarlar, bu anahtarları aldığınızda lütfen bunları aşağıya girin ReCapcha hizmeti, Google tarafından sağlanan ücretsiz bir hizmettir. ");
jr_define('RECAPTCHA_PUBLIC_KEY', "Ortak anahtar");
jr_define('RECAPTCHA_PRIVATE_KEY', "Özel anahtar");
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', "Kilit dosyası zamanaşımı");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', "Konukların çiftli rezervasyon odalarının tehlikelerini önlemek için Jomres, birileri aynı tarihler için oda eklediyse, rezervasyon formundaki mevcut oda listesine bir oda eklenmesini önlemek için bir lockfile kullanıyor Varsayılan olarak bu kilit 3600 saniyede veya bir saat içinde zaman aşımına uğrayacak ve bu rakamı değiştirerek bu kilidi geçmek için süreyi değiştirebilirsiniz. ");
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Jomres'ın Önyükleme şablonlarını ve işlevselliğini etkinleştirilsin mi?");
jr_define('COMMON_ACTION', "Eylem");
jr_define('COMMON_VIEW', "Detaylar");
jr_define('BACKTOTOP', 'Başa dön');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Zayıf');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Güçlü');
jr_define('_JOMRES_INPUTFILTERING', "Girdi filtreleme");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', "Giriş filtreleme seviyesi");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Sisteme girilen verilerin tümü html etiketlerini sıyırarak, ardından veritabanına girmeden önce veriyi güvende yapmak için PHP değişken filtreleme işlevini kullanarak sıhhileştirilir .Belirli girişlere izin vermek isteyebilirsiniz (Örneğin, mülk ayrıntıları sayfasındaki metin girdileri) HTML'yi eklemek için kullanılabilir.Bu girdiyi filtrelemek için kullanabileceğiniz iki filtreleme seviyesi vardır: Zayıf veya Güçlü. Yalnızca Zayıf ayarını, kullanıcı giren kullanıcılar Veriler kendiniz, örneğin diğer sistem yöneticileri tarafından güvenilir, aksi halde Güçlü olarak bırakmalısınız.Güçlü (önerilen) olarak ayarlandığında bir sonraki \"HTML Temizleyicisi izin etiketleri\" ayarını düzenleyerek hangi etiketlerin izin verileceğini belirleyebilirsiniz. ") ;
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', "İzin verilen giriş etiketleri");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "html temizleyicisinin filtreleme sistemi aracılığıyla verecekleri etiketleri düzenleyebilirsiniz. Varsayılan değer 'p, b, strong, a [href], i' dir (Paragraf, Kalın, Güçlü, Bağlantılar ve İtalik İzin verilen etiketler hakkında daha fazla bilgi için, lütfen HTML arıtıcı belgesini <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a> adresinden okuyun. Bu ayarı değiştirebilirken, Varsayılana ayarlı bırakılması önerilir. ");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', "İzin verilen girişler");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Bu seçeneği düzenleyerek hangi form girişlerinin html'ye izin vereceğini tanımlayabilirsiniz, bu listeye eklenen herhangi bir girdi, tüm html dosyalarının soyulması yerine HTML Purifier vasıtasıyla çözümlenecektir:'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport Property_policies_disclaimers '. İsimlerinden boşluk bırakarak ekleyerek daha fazla girdi ekleyin. ");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', "Sekmelerde mülk ayrıntıları gösterilsin mi?");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', "Sekmelerde mülk ayrıntılarını göstermek için bu seçeneği belirleyin. Sekmeler olmadan bunları göstermek için Hayır olarak ayarlayın.");
jr_define('COMMON_PRINT', 'Yazdır');
jr_define('COMMON_EDIT', 'Düzenle');
jr_define('COMMON_COPY', 'Kopyala');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO','Jomres, varsayılan olarak Twitter\'ın Bootstrap çerçevesini içerir ve Jomres\'ın bu şablonları kullanacak şablonlar ve işlevler vardır. Varsayılan olarak, Jomres çalıştırıyorsanız, bu anahtarlar Evet olarak ayarlanır, ancak ayarlayabilirsiniz:  (Önerilmez) Jomres\'ı sürüm 3\'ten daha düşük bir sürümü çalıştırıyorsanız, Jomres Bootstrap şablonlarını ve işlevselliğini kullanmayı tercih edebilirsiniz, ancak bu seçenekler varsayılan olarak Hayır olarak ayarlanır ');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', "Ön uçta Jomres Önyükleme şablonlarını kullan?");
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'İşte düşünmek isteyebileceğiniz bazı alternatifler.');
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Konuğun ülkesi otomatik algılansın mı?" );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Sistem konuğun ülkesini otomatik olarak algılamaya çalışacak." );
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "Jomres sistemi Hakkında");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "yardım");
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Başlarken");
jr_define("_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Erişim Kontrolü");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "geliştirici araçları");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "dil");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "gelir yaratma");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "site yapısı");
jr_define("_JOMRES_CUSTOMCODE_MANUAL", "Manuel (çevrimiçi)");
jr_define("_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "Hesabım (çevrimiçi)");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "portal işlevselliği");
jr_define("_JOMRES_CUSTOMCODE_PLUGINMANAGER", "Plugin yöneticisi");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "entegrasyon");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "raporlar / istatistikler");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "yardım");
jr_define("_JOMRES_CUSTOMCODE_UPGRADES", "Yükseltmeler");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS", "ödeme yöntemleri");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT", "Tarife varsayılanı");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC", "Bu sadece yeni tarife için geçerlidir");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW", "Gösterilecek yıl sayısı");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC", "Bir tarife türü düzenlenirken gösterilecek yıl sayısını tanımlar");
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "faturalar" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT", "hesap detayları" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', "Giriş yap" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', "Çıkış yap" );
jr_define( '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', "Arama" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME", "Yönetim paneli" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK", "reserve" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "Faturalar" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "Ayarlar" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "Diğer" );
jr_define("_JOMRES_EDIT_COUNTRY_TITLE", "Ülkeyi düzenle");
jr_define("_JOMRES_EDIT_COUNTRY_ID", "Ülke");
jr_define("_JOMRES_EDIT_COUNTRY_COUNTRYCODE", "Ülke kodu");
jr_define("_JOMRES_EDIT_COUNTRY_COUNTRYNAME", "Ülke adı");
jr_define("_JOMRES_EDIT_REGION_TITLE", "Bölgeyi düzenle");
jr_define("_JOMRES_EDIT_REGION_ID", "Bölge");
jr_define("_JOMRES_EDIT_REGION_COUNTRYCODE", "Ülke kodu");
jr_define("_JOMRES_EDIT_REGION_REGIONNAME", "Bölge adı");
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Ülkeleri listele');
jr_define('_JOMRES_COM_LISTREGIONS', 'Bölgeleri listele');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Çevirileri dışa aktar');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Bu özellik, Dil Çeviri özelliğini kullanarak oluşturulan çevirileri dışa aktarmanıza izin verir, yeni bir dil dosyası oluşturmak için gereken tüm verileri içeren bir metin alanı oluşturur, yapmanız gereken tek şey Bu çıktıyı yeni bir Jomres tabanlı sunucuya koyabileceğiniz yeni bir dil dosyasına kopyalayıp yapıştırmanız.');
jr_define("_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS", "Yerel ayarları çevir");
jr_define("_JOMRES_COM_TRANSLATE_LANGUAGEFILES", "Dosya dil dizelerini çevir");
jr_define("_JOMRES_COM_NOTAMANAGER", "Hata, oturum açtığınız kullanıcı Jomres\'ta süper bir yönetici değil, Profilleri Göster özelliğini kullanana kadar bu özelliği kullanamazsınız. Süper bir yönetici, bu bir güvenlik özelliğidir. ");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Özellik listesi varsayılan düzen');
jr_define("_JOMRES_STAYFORAMINIMUMOF", "Minimum kalma süresi");
jr_define("_JOMRES_NIGHTSFOR", "gece");
jr_define("_JOMRES_AGENT", "Agent");
jr_define("_JOMRES_AGENT_DETAILS", "Acente ayrıntıları");
jr_define("_JOMRES_AGENT_LISTINGS", "Acentenin listeleri");
jr_define("_JOMRES_APPROVALS_CONFIG_TITLE", "Yeni mülkleri otomatik olarak onayla");
jr_define("_JOMRES_APPROVALS_CONFIG_DESC", "Bu seçeneği Hayır olarak ayarlarsanız yeni mülkleri manuel olarak onaylamanız gerekecektir. Bir mülk onaylanıncaya kadar bir Yönetici / Süper mülk yöneticisi tarafından yayınlanamaz.");
jr_define("_JOMRES_APPROVALS_MENU_NAME", "Onaylar");
jr_define("_JOMRES_APPROVALS_NOT_APPROVED_YET", "Bu mülk henüz onaylanmadı, onaylandıktan sonra onu yayınlayabileceksiniz.");
jr_define("_JOMRES_APPROVALS_CANNOT_PUBLISH", "Üzgünüz, bu mülk henüz onaylanmadığı için yayınlanamazsınız.");
jr_define("_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT", "Yeni bir mülk onay gerektiriyor");
jr_define("_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT", "Sisteme onayınızı gerektiren bir özellik eklendi. Onay bekleyen özellikleri görüntülemek için bağlantıyı tıklayın:");
jr_define("_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT", "Mülkünüz onaylandı");
jr_define("_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT", "Tebrikler, mülkünüz onaylandı, mülkün kontrol panelini görüntülemek için lütfen aşağıdaki bağlantıyı tıklayın:");
jr_define("_JOMRES_REGION_TRANSLATION_SWITCH_TITLE", "Bölge isimleri çevrilebilir");
jr_define("_JOMRES_REGION_TRANSLATION_SWITCH_DESC", "Eğer çok hızlı bir sunucu kullanıyorsanız, bu seti Hayır olarak bırakmanız tavsiye edilir. Çok sayıda bölge adı nedeniyle, bölge adı çevirisi, arama sonuçlarınızı yavaşlatabilecek çok miktarda belleğe ihtiyaç duyar. aşağı." );
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Misafir ayrıldı.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Üzgünüz, bu e-posta adresi zaten kullanılıyor. Bu e-posta adresinizse, rezervasyona başlamadan önce giriş yaptığınızdan emin olun.');
jr_define('JOMRES_TAPTOCALL', 'Aramak için dokunun');
jr_define("JOMRES_NEWREVIEW_SUBJECT", "Yeni inceleme");
jr_define("JOMRES_NEWREVIEW_MESSAGE", "Yeni bir inceleme eklendi");
jr_define("JOMRES_NEWREPORT_SUBJECT", "Yeni Rapor");
jr_define("JOMRES_NEWREPORT_MESSAGE", "Yeni bir rapor bırakıldı");
jr_define('JOMRES_SUPERIOR', 'Üstün');
jr_define("JOMRES_GRANDTOTAL_EX_TAX", "Toplam (vergi hariç):");
jr_define("JOMRES_GRANDTOTAL_INC_TAX", "Toplam (Vergi dahil):");
jr_define("JOMRES_GRANDTOTAL_TOTAL_TAX", "Toplam vergi:");
jr_define("JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL", "İki kelimeyi yazın:");
jr_define("JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO", "Duyduğunuzu girin:");
jr_define("JOMRES_RECAPTCHA_PLAY_AGAIN", "Ses parçasını tekrar dinle");
jr_define("JOMRES_RECAPTCHA_CANT_HEAR_THIS", "Parçayı MP3 formatında indirin");
jr_define("JOMRES_RECAPTCHA_VISUAL_CHALLENGE", "Görsel mod");
jr_define("JOMRES_RECAPTCHA_AUDIO_CHALLENGE", "Ses modu");
jr_define("JOMRES_RECAPTCHA_REFRESH_BTN", "Yenile");
jr_define("JOMRES_RECAPTCHA_HELP_BTN", "Yardım");
jr_define("JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN", "Üzgünüz, yanlış giriş yaptınız. Lütfen tekrar deneyin.");
jr_define("JOMRES_GOOGLE_MAPS", "Google harita seçenekleri");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER", "Hava durumunu kullan?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS", "Celcius");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT", "Fahrenheit");
jr_define("JOMRES_GOOGLE_MAP_OPTION_TRANSIT", "Transit katmanı kullanılsın mı?");
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Gmap İlgi Çekici Noktalar (muhtemelen rakipleriniz dahil) etkinleştirilsin mi?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Anahtar Kelimeler');
jr_define("_JOMRES_SCAN_FOR_DIRECTIONS", "Yol tarifi almak için bu kodu telefonunuza taratın.");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Girdiğiniz KDV numarası doğru gibi görünmüyor: Böyle bir numara olmalı: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Geçersiz KDV Numarası, KDV Numaranızın geçerliliğini Europa KDV Numarası doğrulama web servisi (VIES) ile kontrol edin');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Tebrikler, KDV numaranızı doğrulayabildik.');
jr_define('_JOMRES_TAX_RULES_LIST', 'Vergi kurallarını listele');
jr_define("_JOMRES_TAX_RULE", "Vergi kuralı");
jr_define("_JOMRES_TAX_RULE_INFO", "Vergi kuralları, farklı bölgelerdeki farklı vergi durumlarını belirtmek için kullanılır. Bu kurallar, rezervasyon yapan kişi \"hesabımı düzenle\" sayfasına giriş yapıp hesaplarında düzenleme yaptıklarında geçerli olur. Bu kuralların amacı, KDV'den muaf olan bölgelere uygun rezervasyon seçeneği sunmaktır. Bölgenizde böyle bir durum yoksa, bu kuralları kullanmayabilirsiniz.");
jr_define("_JOMRES_TAX_RATES_IMPORT", "Vergi oranlarını gir");
jr_define("_JOMRES_TAX_RATES_IMPORT_INFO", "İsterseniz AB için vergi oranlarını alabilirsiniz. Bu özelliği kullanırsanız, mevcut tüm Vergi Oranları kaldırılacaktır.");
jr_define("_JRPORTAL_TAX_RULE_EDIT", "Vergi kuralı düzenle");
jr_define("_JOMRES_VAT_PROPERTY_NUMBER", "Bu mülk için KDV numarası.");
jr_define("_JOMRES_VAT_PROPERTY_NUMBER_DESC", "Lütfen bu mülk için KDV numarasını girin.");
jr_define("_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED", "KDV numarası doğrulandı.");
jr_define("_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED", "KDV numarası doğrulanmadı.");
jr_define("_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS", "Buraya girilen emlak ayrıntıları komisyon ve abonelik faturalarında kullanılacaktır.");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Hesap detaylarınızı henüz doldurmamışsınız. Mülkünüzü sitede listelemek için, daha ileri gitmeden önce hesap ayrıntılarınızı tamamlamanız gerekiyor.");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT", "Üretim veya Geliştirme?");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC", "Bu seçeneği Geliştirme olarak ayarlarsanız, hata raporlamasını etkinleştiririz, aksi halde Kapanacak olan Üretim seçeneğine ayarlandığında bu seçenek canlı bir sunucu ise bu seçeneği \" üretim \" olarak ayarlamanızı öneririz. . ");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION", "Üretim");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT", "Geliştirme");
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Oda detayları');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tarife ayrıntıları');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Sadece');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'oda kaldı!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Oda özelliği');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Bu kaynak özelliği kaldırılamadı, bir kaynağa atandı.Bu özelliği bu kaynaktan kaldırın ve tekrar deneyin.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', "Media Center");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', "Resim ekle");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', "Oda resimleri");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', "Mülk ana görüntüsü");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', "Slayt görüntüleri");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', "Listeyi temizle");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', "Dosyaları buraya sürükleyip bırak");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', "Resim yüklemek istediğiniz kaynağı seçin.) Ayrı odalar (örn. Odalar) için resim yükleyebiliyorsanız, belirli bir kaynağı seçmek için ikinci bir açılır menü görülecektir.");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', "Ana mülk görüntüsü olarak birden fazla resim yüklerseniz, bunlar Mülkiyet Listesinde kullanılacaktır. Slayt gösterileri mülk ayrıntıları sayfasında gösterilecektir. ");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', "Resminizi görüntüleyin");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', "Görüntüyü sil");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', "Resim yükle");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', "Oda türleri simgeleri");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', "Özellik özelliği simgeleri");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Tüm dosyaları yükle');
//8.0
jr_define('COMMON_PREV', "Geri");
jr_define('COMMON_MORE', "Oteli gör");
jr_define('_JOMRES_DASHBOARD_TODAY', "Bugün");
jr_define('_JOMRES_DASHBOARD_YEAR', "Yıl");
jr_define('_JOMRES_DASHBOARD_MONTH', "Ay");
jr_define('_JOMRES_DASHBOARD_WEEK', "Hafta");
jr_define('_JOMRES_DASHBOARD_DAY', "Gün");
jr_define('_JOMRES_HLEGEND', "Göstergeler");
jr_define('_JOMRES_HFILTER', "Filtre");
jr_define('_JOMRES_HFROM', "Kimden");
jr_define('_JOMRES_HTO', "Kime");
jr_define('_JOMRES_HNEW_BOOKING', "Yeni rezervasyon");
jr_define('_JOMRES_HSTATUS_DEPOSIT', "Para yatırma durumu");
jr_define('_JOMRES_HSTATUS_GUEST', "Misafir durumu");
jr_define('_JOMRES_HSTATUS_BOOKING', "Rezervasyon durumu");
jr_define('_JOMRES_HSTATUS_PUBLISHING', "Yayın durumu");
jr_define('_JOMRES_HSTATUS_INVOICE', "Fatura durumu");
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', "Fatura türü");
jr_define('_JOMRES_HSTATUS_APPROVED', "Onaylandı");
jr_define('_JOMRES_HSTATUS_CURRENT', "Bulunduğunuz sayfa");
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', "Rezervasyonları göster");
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', "Faturaları göster");
jr_define('_JOMRES_STATUS_ANY', "Herhangi");
jr_define('_JOMRES_STATUS_PAID', "Ücretli");
jr_define('_JOMRES_STATUS_NOTPAID', "Ücretli değil");
jr_define('_JOMRES_STATUS_CHECKEDOUT', "Kontrol edildi");
jr_define('_JOMRES_STATUS_ACTIVE', "Etkin");
jr_define('_JOMRES_STATUS_CANCELLED', "İptal edildi");
jr_define('_JOMRES_STATUS_PUBLISHED', "Yayınlandı");
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', "Yayınlanmadı");
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', "Aktif rezervasyon yaptıran misafirler");
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', "Geçmiş rezervasyonu olan konuklar");
jr_define('_JOMRES_STATUS_BOOKINGS', "Rezervasyon");
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', "Abonelikler");
jr_define('_JOMRES_STATUS_COMMISSIONS', "Komisyonlar");
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', "Tüm işletmeler");
jr_define('_JOMRES_ACTION_SET_CURRENT', "Geçerli olarak ayarla");
jr_define('_JOMRES_ACTION_CHECKIN', "Check in");
jr_define('_JOMRES_ACTION_CHECKOUT', "Check out");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", "rezervasyonlar");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES", "özellikler");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS", "misafirler");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS", "raporlar");
jr_define("_JOMRES_HLIST_GUESTS", "Konuklar");
jr_define("_JOMRES_HLIST_GUESTS_MENU", "Davetlileri listele");
jr_define("_JOMRES_HLIST_INVOICES_MENU", "Liste faturaları");
jr_define("_JOMRES_HLIST_PROPERTIES", "İşletmeler");
jr_define("_JOMRES_HQUICK_BOOKING", "Hızlı rezervasyon");
jr_define("_JOMRES_HDATE_OF_BOOKING", "Rezervasyon tarihi");
jr_define("_JOMRES_HTWO_WEEKS", "İki hafta");
jr_define("_JOMRES_BOOKING_CANCELLATION_WARNING", "Bu rezervasyon iptal edilecek, rezervasyon iptal etmek için Tamam\'a basın.");
jr_define("_JOMRES_HOVERVIEW_CHECKINS", "Bugünün check in\'leri");
jr_define("_JOMRES_HOVERVIEW_CHECKOUTS", "Bugünün chech out\'ları");
jr_define("_JOMRES_HOVERVIEW_CURRENT_RESIDENTS", "Geçerli sakinler");
jr_define("_JOMRES_BOOTSTRAP_LOCATION", "Gezinme çubuğu konumu");
jr_define("_JOMRES_BOOTSTRAP_LOCATION_DEFAULT", "Varsayılan (içerik alanı)");
jr_define("_JOMRES_BOOTSTRAP_LOCATION_TOP", "Sabitlendi");
jr_define("_JOMRES_BOOTSTRAP_LOCATION_BOTTOM", "Sabitlendi");
jr_define("_JOMRES_BOOTSTRAP_LOCATION_INVERSE", "Ters çevrilmiş navbar (renk değişikliği)");
jr_define("_JOMRES_BOOKING_NUMBER", "Rezervasyon numarası");
jr_define('_JOMRES_BOOTSTRAP_VERSION', "Önyükleme sürümü");
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', "Şu anda yalnızca ön uç için geçerlidir Bu seçenek, Bootstrap 2 veya Bootstrap 3 ile uyumlu Jomres şablonlarının kullanılıp kullanılmayacağını seçmenize izin verir. Şablonunuzun Bootstrap 3 ile çalıştığından emin değilseniz Bu ayarı Bootstrap 2\'ye bırakmanızı öneririz. ");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', "Misafirleri göster");
jr_define('_JOMRES_HFIXED_PERIODS', "Sabit dönemler");
jr_define('_JOMRES_HDEPOSITS', "Depozito");
jr_define('_JOMRES_HBOOKING_FORM', "Rezervasyon formu");
jr_define('_JOMRES_HREQUIRED_FIELDS', "Gerekli alanlar");
jr_define('COMMON_PLACEHOLDER_FIRSTNAME' , "İsim" );
jr_define('COMMON_PLACEHOLDER_SURNAME' , "Soyisim" );
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER' , "110" );
jr_define('COMMON_PLACEHOLDER_STREET' , "Sokak" );
jr_define('COMMON_PLACEHOLDER_TOWN' , "Mahalle" );
jr_define('COMMON_PLACEHOLDER_LANDLINE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_MOBILE' , "00000 000000" );
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME' , "Otel" );
jr_define('COMMON_PLACEHOLDER_POSTCODE' , "XXNN NNXX" );
jr_define('COMMON_PLACEHOLDER_EMAIL' , "örnek@adres.com" );
jr_define('EXTENDED_CONFIGURATION', "Genişletilmiş Konfigürasyon");
jr_define('SIMPLE_CONFIGURATION', "Basit Yapılandırma");
jr_define('_JOMRES_HRESOURCE_FEATURES', "Oda özellikleri");
jr_define('_JOMRES_HRESOURCE_TYPE', "Oda türü");
jr_define('_JOMRES_HEDIT_GUEST_TYPE', "Misafir türü düzenle");
jr_define('_JOMRES_HEDIT_COUPON', "Kuponu düzenle");
jr_define('_JOMRES_HEDIT_EXTRA', "Ekstra düzenleme");
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', "Birden çok oda oluştur");
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', "Odaları oluştur");
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', "Kaç oda?");
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', "Oda türü");
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', "Kaynak başına maksimum misafir sayısı");
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', "Mevcut tüm odaları silinsin mi?");
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Lütfen Gelişmiş Site Yapılandırması\'nı Hayır olarak ayarlanmış yönetici alanını görüntülüyorsunuz. Daha fazla seçenek görmek isterseniz, Site Yapılandırması -> Diğer -> Gelişmiş Site Yapılandırması\'nı Evet olarak ayarlayın.');
jr_define('DATATABLES_SINFO', "_TOTAL_ girişten _START_ ve _END_ gösteriliyor");
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', "Onay");
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', "Rezervasyon sorgusunu reddet");
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', "Rezervasyon sorugusunu onayla");
jr_define('_JOMRES_STATUS_APPROVED', "Onaylandı");
jr_define('_JOMRES_STATUS_REJECTED', "Reddedildi");
jr_define('_JOMRES_STATUS_INQUIRY', "Mesajınız");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', "Rezervasyonların onaylanması veya doluluk durumunun onaylanması gerekiyor?");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', "Bir rezervasyon yapıldıysa evet olarak ayarlanırsa, mülk yöneticisi rezervasyon için uygunluğu onayladığında / onayladığında kullanılabilirlik takvimlerinde gösterilmez (ve diğer konuklar o günleri ve kaynakları hala ayırt edebilir) Onaylandıktan sonra, rezervasyon geçici olarak (diğer rezervasyonları geçersiz kılmazsa, diğer misafirler aynı tarihleri artık kitaplayamaz) ve ödemeyi yapmak için müşteriye bir e-posta gönderilir. ");
jr_define('_JOMRES_ERROR', "Hata");
jr_define('_JOMRES_ERROR_MESSAGE', "Üzgünüz, bu işlevi işleme koymaya çalışırken bir hata oluştu. Sizin için rapor edildi ve biz de ona bakacağız.");
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', "Mesaj");
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', "Dosya");
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', "Satır");
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', "İz");
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE',"E-posta şablonları");
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT',"E-posta şablon düzenleme");
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT',"E-posta konusu");
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT',"E-posta metni");
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE',"E-posta türü");
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME',"E-posta adı");
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC',"E-posta açıklaması");
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS',"Bu sayfa rezervasyon sürecinde gönderilecek otomatik mailler içindir: <a href=\"http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates\" target=\"_blank\">Email Templates Help</a>");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME',"Site Yöneticisi Yeni Rezervasyon E-postası");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC',"Site yöneticisine rezervasyon yapıldığında gideek mail.");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME',"Otelin yeni rezervasyon Emaili");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC',"Rezervasyon yapıldığında mülk sahibine gönderilecek mail");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME',"Yeni rezervasyon maili");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC',"Rezervasyon yapan konuğa gönderilen mail");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME',"Konuk onay mektubu");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC',"Yazdırılabilir onay mektubu ya da maili");
jr_define('_JOMRES_CAN_BE_APPROVED', "Bu rezervasyon onaylanabilir Seçili tüm odalar seçilen tarihler için geçerlidir.");
jr_define('_JOMRES_CANT_BE_APPROVED', "Bazı odalar önceden seçilmiş tarihler için rezerve edildiğinden bu rezervasyon onaylanamaz, önce rezervasyonun tadilatın gerekir.");
jr_define('_JOMRES_SHOW_POWEREDBY', "Altbilgi tarafından desteklenmektedir.");
jr_define('GUEST_BUDGET', "Bütçe");
jr_define('GUEST_BUDGET_FEATURE_SWITCH', "Bütçe özelliğini kullan?");
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Sadece bütçeleştirilmiş siteler! Bütçe özelliği, konukların belirli bir rakamın altındaki fiyat özelliklerini vurgulamak için kullanabilecekleri özellik listesinin bir özelliğidir. Çok farklı para birimi kullanan bazı siteler için uygun olmayabilir Not: Bu ve Öne Çıkanlar Eklentileri eklentisini kullanıyorsanız özellik listesi görüntülendiğinde özellikli liste sarma sınıfınız otomatik olarak 'panel-birincil' olarak değiştirilir.");
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'İsim: ' );
jr_define( '_JOMRES_FOR', '' );
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'gecelik fiyat');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'gecelik fiyat');
jr_define('_JOMRES_LIVE_SCROLLING', 'Özellik listesine Canlı Kaydırma / Geçici Kaydırmayı Kullan?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Ocak');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Şub');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Nis');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'Mayıs');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Haziran');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Temmuz');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Ağu');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Eylül');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Ekim');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Kasım');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Aralık');
jr_define('DATATABLES_SEMPTYTABLE', 'Tabloda mevcut veri yok');
jr_define('DATATABLES_SINFO', "_TOTAL_ girişten _START_ ve _END_ arasındaki tüm girdiler gösteriliyor");
jr_define('DATATABLES_SINFOEMPTY', "0 girdiden 0'dan 0'a kadar 0 girdi gösteriliyor");
jr_define('DATATABLES_SINFOFILTERED', "(_MAX_ toplam girişlerden süzüldü)");
jr_define('DATATABLES_SINFOPOSTFIX', "");
jr_define('DATATABLES_SINFOTHOUSANDS', ",");
jr_define('DATATABLES_SLENGTHMENU', "_MENU_ girdilerini göster");
jr_define('DATATABLES_SLOADINGRECORDS', "Yükleniyor ...");
jr_define('DATATABLES_SPROCESSING', "İşleniyor ...");
jr_define('DATATABLES_SSEARCH', "Arama:");
jr_define('DATATABLES_SZERORECORDS', "Eşleşen kayıt bulunamadı");
jr_define('DATATABLES_SFIRST', "Birinci");
jr_define('DATATABLES_SLAST', "Son");
jr_define('DATATABLES_SNEXT', "Sonraki");
jr_define('DATATABLES_SPREVIOUS', "Önceki");
jr_define('DATATABLES_SSORTASCENDING', ": sütunu artan şekilde sıralamakyı etkinleştir");
jr_define('DATATABLES_SSORTDESCENDING', ": sütun azalan şekilde sıralamayı etkinleştir");
jr_define('DATATABLES_SHOWHIDE', "Sütunları değiştir");
jr_define('_BOOKING_ONREQUEST', 'Talep üzerine rezervasyon');
jr_define('_BOOKING_INSTANT', 'Rezervasyon yap!');
jr_define('_JOMRES_COM_FONTAWESOME', 'Font Awesome simgesi setini dahil et?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Şablonunuz Font Awesome içermiyorsa bunu Evet yapın.');
jr_define('_BOOKING_CALCQUOTE', 'Rezervasyon isteğinde bulunma');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Sayın');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Bir site seçin');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site kimliği');
jr_define('_JOMRES_IS_EU_COUNTRY', 'AB ülkesi mi?');
jr_define('_JOMRES_HLASTCHANGED', 'Son değiştirilme tarihi');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', "Otel Rezervasyon İptali E-postası");
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', "Yeni rezervasyon iptal edildiğinde mülk sahibine e-posta gönderildi");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', "Konuk rezervasyonu Rezervasyon İptal E-postası");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', "Yeni rezervasyon iptal edildiğinde konuklara e-posta gönderildi");
jr_define('_JOMRES_TEST_EMAIL_SEND', "Test e-postası gönder");
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', "E-postayı test et");
jr_define('_JOMRES_TEST_EMAIL_CONTENT', "Bu, rezervasyon sisteminizden gelen bir test e-postasıdır.");
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', "E-postayı başarıyla gönderildi");
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', "Test e-postası gönderilmedi");
jr_define('_INVOICE_TRANSACTIONS', "İşlemler");
jr_define('_OPENEXCHANGE_API',"Döviz Kurları API anahtarını aç");
jr_define('_OPENEXCHANGE_API_DESC','Fiyatları hizmetler arasında dönüştürmek için bir Açık Döviz Kurları API anahtarına ihtiyacınız olacak. Jomres te fiyatları doğru bir şekilde görüntülemek için bir API anahtarınız OLMALIDIR, ancak https://openexchangerates adresinden ücretsiz bir anahtar için kayıt olabilirsiniz. org/signup/free (saatlik güncellemeler, 1000 istek/ay - HTTPS, e-posta desteği veya gelişmiş özellikler yok). Jomres, anahtarı yalnızca birkaç sitede kullandığınız sürece döviz kurlarını günde bir kez indirir. bu limitleri aşması olası değildir.Jomres 8.3 ten önce daha eski, belgelenmemiş bir Yahoo özelliği kullanıyorduk ancak bu özelliği kullanmanın Yahoo \'nun Hüküm ve Koşullarına aykırı olduğunu keşfettik.Sonuç olarak, özelliğin şu tarihte kaybolabileceğini varsaymalıyız. gelecekte bir noktada, dolayısıyla Açık Döviz Kurlarını kullanma değişikliği.');
jr_define('_JOMRES_COMMISSION', "Komisyon");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', "Tek isteğe bağlı ekstralar için birden fazla resim yüklerseniz, yalnızca ilk resim kullanılacaktır.");
jr_define('_JRPORTAL_INVOICES_PAYNOW', "Şimdi öde");
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', "Bu faturanın süresi doldu, lütfen ödeme yöntemini seçmek için düğmeyi tıklayın.");
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Bu otelde rezervasyon yaparken satın alabileceğiniz ekstra hizmetlerin bir listesi.");
jr_define('GATEWAYS_INSTRUCTIONS', 'Bu sayfada herhangi bir kurulu ağ geçidini yapılandırabilirsiniz.Bu seçenekler, herhangi bir Komisyon veya Abonelik faturaları için ödeme yapmanıza izin verir .Örneğin ayarları yalnızca Paypal tarafından geçersiz kılınabilir, diğer tüm ağ geçitleri üzerinden yapılandırılmalıdır. Özellik Yapılandırması -> Ağ geçitleri sekmesi, ancak bu listede bir ağ geçidi görünüyorsa, hem Rezervasyon depozitosu ödemelerini hem de fatura ödemelerini işleme kapasitesine sahip olmalıdır. ');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Mülk ayrıntıları sayfasında gösterilsin mi?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Özellik Ayrıntıları sayfası ayarları');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Jomres\'taki mülk yönetimi yalnızca site önyapı cpanelinden yapılır.Bu sayfada, sistemdeki tüm mülkleri listeleyeceksiniz, böylece komisyon oranları atayabilir ve bunları onaylar veya onaylamazsınız (eğer bunlar Özellikler aktiftir.) Yeni bir mülk yaratmak, mevcut mülkleri düzenlemek, rezervasyonları yönetmek veya diğer mülk / rezervasyonlarla ilgili görevleri yönetmek için, site önyüzüne giriş yapmanız ve Jomres varsayılan sayfasına gitmeniz gerekecektir. Jomres ön paneli. ');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Oda özellik simgeleri');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'İşletme Özellikleri Kategorileri');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'İşletme Özellik Kategorisini Düzenle');
jr_define('_JOMRES_HCATEGORY', 'Kategori');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'İşletme özelliklerini kategorilere ayırdı mı?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Özellik özelliklerini kategorilere ayırmak için bunu EVET\'e getirin Bu seçenek yalnızca mülk ayrıntıları sayfasında görüntülenen mülk özelliklerini etkiler, diğer tüm sayfalar onları kategorilere ayırmadan görüntüler.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Geri alma iadesi');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Ödemeyi geri al');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'İndirme ve destek anahtarınız geçerlidir, eklentileri eklenti yöneticisi aracılığıyla indirebilirsiniz.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'İndirme ve destek anahtarınız geçerli DEĞİL, eklentileri eklenti yöneticisi aracılığıyla indiremeyeceksiniz.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Alt tür');
jr_define("_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK", "Mülk alt türünü henüz belirlemediniz.Bu 5 yatak odalı villa veya 4 yatak odalı yazlık gibi tanımladığınız yerdedir ve aramalarını hassaslaştırmak için arayan konuklara yardımcı olur.") ;
jr_define("_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK", "Mülkünüze bir alt tür ver");
jr_define("_JOMRES_EMAIL_TEMPLATES_TITLE", "E-posta şablonları");
jr_define("_JOMRES_CONTACT_SETTINGS", "Kişi ayarları");
jr_define("_JOMRES_CONTACT_SETTINGS_DESC", "Buradan tüm mülk iletişim bilgilerini (e-posta, telefon, faks) geçersiz kılabilirsiniz; böylece misafirlerle olan tüm iletişim mülk sahiplerine değil, size gönderilir.");
jr_define("_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS", "Listeleme iletişim bilgilerini geçersiz kıl?");
jr_define("_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC", "Bu seçenek Evet olarak ayarlanırsa mülk e-posta adresleri ve telefon numaraları bu sekmede ayarlananlarla değiştirilir Bu, tüm iletişimlerin aday e-posta adresinize gönderilmesini zorlar, böylece konuk ve mülk Rezervasyon motorunu ve bunun sonucunda ortaya çıkacak komisyon masraflarını atlayamaz.Ayrıca, bir mülkün açıklaması değiştirildiğinde mülkün Onaylanmamış olarak (onaylar özelliği etkinleştirilmişse) belirleneceği ve manuel olarak açıklama kontrol etmesi gerektiği anlamına gelir Yöneticilerin tekrar onaylamadan önce metin alanlarına telefon veya e-posta ayrıntıları girmediklerinden emin olmak için. ");
jr_define("_JOMRES_EDITPROPERTY_APPROVAL_WARNING", "Liste ayrıntılarında yapılan değişiklikler site yöneticisi doğrulamasını gerektirir. Eğer yeni ayrıntılar kaydettiyseniz, girişiniz yeniden yayından kaldırılacak ve site ziyaretçileri tarafından tekrar görünür hale getirilmeden önce site yöneticisi onay bekleniyor. Rezervasyonunuz yayınlanmamışken ve onay beklerken yapılan rezervasyonlar. ");
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Rezervasyon isteğini inceleyin');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Rezervasyon isteğini onayla');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Rezervasyon isteğini değiştir');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Faturayı beklemede işaretle');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Fatura beklemede olarak işaretlendi');
jr_define('_JOMRES_TRACKING_ENABLE', 'Anonim izleme verileri gönderilsin mi?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Sistemi nasıl kullanacağınızı anlamamıza yardımcı olması için Jomres.com\'a anonim izleme verileri göndermek için Evet\'i seçin.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Müşterileriniz adına rezervasyon yapmaya başlamadan önce Hesabımın Düzenle sayfasında ayrıntıların tamamlandığından emin olun.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Misafirin iletişim bilgileri");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', "- Yeni Konuk");
jr_define('_JOMRES_CHARTS', 'Grafikler');
jr_define('_JOMRES_CHARTS_SELECT', 'Grafiği seç ...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Yıl / aya ​​göre gelir');
jr_define("_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK", "Tamam, başlayalım önce bu mülk için bazı odalar oluşturmanız gerekir");
jr_define("_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK", "Şimdi bazı odalar oluştur");
jr_define("_JOMRES_IMAGES_EXIST_SANITY_CHECK", "Araştırma, yüksek kaliteli çok sayıda görüntünün özelliklerinin daha fazla görüntü oluşturduğunu kanıtlamıştır. Rezervasyon alma şansınızı artıracak ana resim ve bazı slayt gösterisi resimleri yükleyin.");
jr_define("_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK", "Resim yükle");
jr_define("_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK", "Tarife oluşturun");
jr_define("_JOMRES_PROPERTYTYPE_FLAG", "Misafirler ne kitap edecek?");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_DESC", "Bu mülkiyet türü, mülkte oda kiraladığınız otel türü mülkiyet midir, yoksa mülkiyetinizi bir rezervasyonda kiraladığınız villa tipi bir mülk midir?");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_HOTEL", "Mülklerdeki odalar");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_VILLA", "Mülkiyetin tamamı");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_BOTH", "Her iki"); // Bu, özellik türünü henüz güncellememiş olan mevcut kullanıcılar için geriye dönük uyumluluk sağlayan geçici bir ayardır. Seçilebilir olmayacak
jr_define("_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD", "Misafirler ne rezerve edecek?");
jr_define("_JOMRES_ADDRESS_SANITY_CHECK", "Konuklarınız kalacak yer aradıklarında sizi bulabilmeleri için adres bilgilerinizi doldurmanız gerekecek.");
jr_define("_JOMRES_ADDRESS_SANITY_CHECK_LINK", "Adresinizi güncelleyin");
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Hata! Tüm alanları tamamlamayı unutmuş olabilirsiniz.');
jr_define("_JOMRES_CONTANT_US", "Bize ulaşın");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_TITLE", "Yeni çevrimiçi girişiniz için hoş geldiniz");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_1", "Merhaba, yeni mülkünüz açık");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_2", "Son zamanlarda web sitemize yeni bir mülk eklediniz ve biz sizi ailenize hoş geldiniz diyoruz.");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_3", "Yeni kontrol panelini görebilirsiniz");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT", "buradan");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_4", "Mülkünüzü kurduktan sonra ziyaret ederek site ziyaretçilerine nasıl göründüğünü görebilirsiniz");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT", "ön sayfanız.");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_5", "yayınlanmadığı için site ziyaretçileri henüz göremiyor.");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_6", "Sayfanın üstünde birtakım mesajlar görürsünüz, bu mesajların yanındaki düğmeler mülkünüzü sitemizde kurmak için ziyaret etmeniz gereken sayfalara yönlendirir. Bu görevlerin her birini gerçekleştirdikçe sitemizdeki ziyaretçilerinizin mülkünüzü bulması ve rezervasyonlarını çevrimiçi hale getirmesi daha kolay olacak.");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_7", "Herhangi bir sorunuz varsa lütfen");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT", "bize ulaşın");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_8", "ve tüm sorularınıza cevap vermekten memnuniyet duyarız.");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE", "İyi günler, Jomres Takımı");
jr_define("_JOMRES_JINTOUR_SANITY_CHECK", "Satılacak herhangi bir tura sahip değilsiniz, bir tur profili oluşturun, ardından bazı turlar oluşturmak için Oluştur düğmesini kullanın.");
jr_define("_JOMRES_JINTOUR_SANITY_CHECK_LINK", "Bazı turlar oluşturalım!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Para birimi sembolü yerini değiştir');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Para birimi simgesinin arkasından fiyat figürünün önüne veya tam tersine taşımak için bu seçeneği kullanın.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Facebook sayfanızın kimlik numarasını girin, örneğin "Jomres" .Bunu boş bırakın, https://www.facebook.com veya başka bir şey girmeyin.');
jr_define('COMMON_DOWNLOAD', 'İndir');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Sonra bazı tarife eklemeniz gerekecek, bunlar sizin temel fiyatlarınız.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Önyükleme etkin değil!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Uyarı, Jomres Site Yapılandırması -> Çeşitli sekmesinde Önyükleme özelliği etkin değil <i> bazı </i> işlevsellikleri sağlamak için Jomres şu anda eski jQuery UI tabanlı şablonlarını kullanıyor, Ancak birkaç yıldır üzerinde çalışılmamıştır.Jomres şablonlarının (mizanpaj dosyaları) günümüzdeki gelişimi ve geliştirmeleri BootStrap 3 şablon dosyalarından yapılmaktadır.Jomres\'tan en iyi şekilde yararlanabilmek için Bootstrap 3 tabanlı bir yüklemenizi öneririz Wordpress veya Joomla için tema.Bunu yaptıktan sonra Jomres\'ın Site Yapılandırmasında önyükleme şablonlarını etkinleştirebilirsiniz.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Destek anahtarınız geçerlidir, bu lisansın eklenti indirmelerine izin vermediğini unutmayın.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'İptal etmek için rezervasyonları bu bölgeye sürükleyin');
jr_define('_JOMRES_LAT', 'Enlem (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Boylam (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Lütfen [jomres:xx-XX] kısa kodunu içeren bir WordPress Sayfası oluşturduğunuzdan emin olun (burada xx-XX sitenizin dil kodunuzdur, örneğin [jomres:en-GB] veya [jomres:en-US] ) aksi takdirde mülklerinizi ve rezervasyonlarınızı yönetmek için Jomres\'e ön uçtan erişemezsiniz. <br> Jomres, Bootstrap çerçevesi üzerine inşa edilmiştir, bu yüzden onu Bootstrap tabanlı bir tema üzerinde kullanmalısınız. Bootstrap 3\'e dayalı bir tane öneriyoruz. Bir temaya erişiminiz yoksa, Wordpress için Jomres Leohtian temasını kullanmanızı öneririz, bu temayı <a href="https://www.jomres.net/download/free yapabilirsiniz. -downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">buradan indirin.</a>');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Bir oda türü oluşturmadan önce, bunun bir otel türü mülkü olup olmadığını veya bir villa türü mülkü olup olmadığını bilmemiz gerekir.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Yeni oda tipleri eklemek için tıklayın');
jr_define("_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES", "Uyarı, oda türlerine sahip olmayan bir veya daha fazla mülk türeviniz. Mülk yöneticilerinin tarifeleri oluşturabilmesi için mülklerin oda tiplerine ihtiyacı var.");
jr_define("_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES", "Yeni Oda Tipleri oluşturmak için yukarıdaki Yeni düğmeyi kullanın.");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_TOURS", "Turlar");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_REALESTATE", "Rezervasyon yok / Gayrimenkul (basit liste)");
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Günlük doyası konumu');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres günlük dosyalarını şurada tutar: '.JOMRES_SYSTEMLOG_PATH." . Burada api anahtarları, sistemle ilgili bilgiler, ödeme bilgileri ve konuk bilgileri gibi hassas bilgiler bulunabileceği için bu konuda website hosting firmanıza başvurmanızı tavsiye ederiz.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres, api anahtarları, sistem yolları, ağ geçidi ve konuk bilgileri de dahil olmak üzere sisteminiz hakkında ayrıntılı bilgileri günlüğe kaydeder ve bunların tümü internetin geri kalanı tarafından görülmemelidir. Sistem Günlüğü yolunuz ayarlanmamıştır, bu nedenle sistem günlükleri şu anda '.JOMRES_SYSTEMLOG_PATH." dizinine kaydediliyor, bu ideal değil. Lütfen Site Yapılandırması -> Hata Ayıklama'yı ziyaret edin ve dosya sisteminizde web kökünün dışında bir yol belirleyin. Şüpheniz varsa, lütfen web barındırıcılarınızla iletişime geçin. size tavsiyede bulunabilecekleri için.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'CMS\'niz web sitenizin kök dizinine kuruluysa, uygun bir yer olacaktır');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Bir <a href='https://console.developers.google.com/apis/api/maps_backend/overview' target='_blank'>Google Haritalar anahtarınız</a> yok Google haritalarındaki son değişiklikler nedeniyle, tüm yeni sitelerin Google haritasının özelliklerini kullanabilmesi için bir API anahtarına ihtiyacı olacaktır. Lütfen <a href='http://www.jomres.net/manual/site-managers-guide /14-getting-started/338-google-maps-api-key' target='_blank'>API anahtarının nasıl oluşturulacağına ilişkin kılavuz sayfamıza bakın</a> ve anahtarı Jomres'te kaydedin. Anahtarınızı aldıktan sonra , bunu Site Yapılandırması > Google harita Seçenekleri sekmesine girebilirsiniz.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google maps renk paleti');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Doğru, web sitenize mülkünüzü eklemeye başlayalım. Mülkünüz hakkında biraz bilgi toplamamız gerekiyor. Bu, mülkünüzün temel bilgilerini kurmamızı sağlayacaktır. Tamamladığınızda, odaları, fiyatları ve resimleri ekleyeme kısmına yönlendirileceksiniz.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Mülk türü, bir defada yalnızca bir veya iki oda sattığınız otellerle birlikte mülkün nasıl ayrılacağını tanımlamanıza yardımcı olurken, villalarla tüm mülkünüzü size sunar.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "E-posta adresinin, hesabınızı kayıt ederken kullandığınız e-posta adresiyle aynı olması gerekmediğini unutmayın. Bu, farklı özellikler için farklı adreslere sahip olmanızı sağlar.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Depozito');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Ücretlendirilecek minimum depozito miktarını yapılandırabilirsiniz. Bunu yaparsanız, "Yatırılacak para ilk gecenin masrafı mı?" & "Para yatırma yüzdesi nedir?" Özellik Yapılandırması ayarları yapılandırılamaz, bunun yerine tüm mevduat değerlerinin yüzdesi ve burada en azından tanımladığınız şekil olmalıdır.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Bu değerden daha az olamaz: ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Sistem günlüğü mesajlarını bir syslog sunucusuna göndermek isterseniz, burada Hostname veya IP (ör. 192.168.0.2) ve port (ör. 514) ayarlayabilirsiniz. Site, 'Geliştirme' olarak ayarlandıysa, DEBUG mesajları gönderilecektir. 'Üretim' olarak ayarlanırsa, yalnızca INFO seviyesi ve daha yüksek mesajlar gönderilir. Uzak sunucudaki günlüğe kaydetmeyi devre dışı bırakmak için, ana makine ve bağlantı noktası alanlarını boşaltın.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP'nin 'openlog' ve 'syslog' PHP işlevlerine erişmesine izin verilmiyor. Bu bir sunucu tarafı ayarı, Jomres'in mesajları bir syslog sunucusuna göndermesini isterseniz lütfen ana makinelerinize danışın ve PHP'nin bu işlevlere erişmesine izin verilip verilmediğini onaylayın. Etkinleştirildikten sonra, burada sistem günlüğü sunucunuzun ayarlarını yapılandırabileceksiniz.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Hata oluştuğunda site yöneticisine bir e-posta gönderilsin mi?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Araştırılması gereken tarihsel sorunlar site sahiplerine e-postayla gönderildi. Bu, hareket halindeki çok fazla parçaya sahip olduğu için sisteminizin çalışmasına göz kulak olmak için harika olabilir ve hepsini takip etmek zordur. Maalesef, Spider'lar ve Bot'lar sitelerinizi (hatta arkadaşları bile) taramak yanlışlıkla hatalı hataları tetikleyebilir ve aldığınız mesaj sayısının aşırı olmasına neden olabilir. Durum buysa, bu seçeneği Hayır olarak ayarlayın. Jomres, bir günlük dosyaları kümesine ve bir syslog sunucusuna günlük iletileri gönderir (belirli PHP ayarlarınıza izin veriyorsa, lütfen ev sahibinizle iletişime geçmezseniz izin verin). Belirli bir şey arıyorsanız, dosyaları manuel olarak analiz edebilirsiniz (örneğin, bir ağ geçidi geliştiriyorsanız ve gateway_log () işlev çağrısını kullanmak istiyorsanız). Fakat bunu kullanmanız daha iyi bir sonuçtur. Bir şey syslog dosya analizörü gibi. Linux üzerinde geliştiriyorsanız, Windows'da kullanabileceğiniz basit bir araç http://maxbelkov.github.io/visualsyslog/ ise bu durumda sizin için bir sürü araç var. Bu sayfada 'Syslog ana bilgisayarını' olarak ayarlayın. '127.0.0.1' ve 'Bağlantı Noktası'nı 514 olarak ayarlayarak bu araçta günlüğe kaydedilen iletileri görürsünüz. ");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Mülkleri Yönet');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Bir <a href='http://ipinfodb.com/account.php' target='_blank'> IP Algılama API Anahtarı </a> ayarlanmış değilsiniz. Bu, sistemin kullanıcının konumunu otomatik olarak algılamasına ve para birimlerini ve ülkelerini otomatik olarak ayarlamasına izin vermek için gereklidir. Lütfen <a href = 'http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes- Sekmesini tıklayın 'target =' _blank '> IP algılama API anahtarı nasıl oluşturulacağı ile ilgili kılavuz sayfamıza bakın </a> ve anahtarı Jomres> Site Yapılandırması> Para Birimi Dönüşümleri / Para Birimi Kodlarına kaydedin.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "<a href='https://openexchangerates.org/account/apps' target='_blank'> Açık Döviz Kurları API Anahtarı </a> ayarlanmış değilsiniz. Bu, sistemin döviz kurlarını otomatik olarak indirip kullanmasına izin vermek için gereklidir. Lütfen <a href = 'http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes- Tab 'target =' _blank '> Açık Döviz Kurları API anahtarının nasıl oluşturulacağı ile ilgili kılavuz sayfamıza bakın </a> ve anahtarı Jomres> Site Yapılandırması> Para Birimi Dönüşümleri / Para Birimi Kodlarına kaydedin.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Izin numarası');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Bazı ülkeler, mülkünüz için bir izin numarası vermeniz gerektiğini belirtmektedir. Böyle bir numaranız varsa, buraya buraya girin ve mülkün üstbilgi bölümüne eklenecektir.');
jr_define('_JOMRES_SHORTCODES', 'Kısa kodlar');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> Jomres Asamodule Mambot plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
Jr_define ('SHORTCODE_TASK', 'Görev');
Jr_define ('SHORTCODE_DESCRIPTION', 'Açıklama');
Jr_define ('SHORTCODE_ARGUMENTS', 'Argümanlar');
Jr_define ('SHORTCODE_EXAMPLE', 'Örnek');
jr_define('INTEGRITY_CHECK', 'Dosya Sistemi Bütünlük Kontrolü');
jr_define('INTEGRITY_CHECK_DESC', 'Bu özellik, dosya sisteminin Jomres\'in mevcut sürümünde sağlananlarla eşleşip eşleşmediğini kontrol etmenizi sağlar. Bu, kurulum/yükseltme işleminden sonra tüm dosyaların doğru şekilde güncellendiğinden emin olmak için kullanışlıdır. Kırmızı renkli dosyalar eksik, dosyalar Orange var ama mevcut derlemede sağlananlardan farklı.Burada sadece potansiyel problem olan dosyalar listelenecektir.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Dosya Sistemi Bütünlük Kontrolü');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Yerel karma');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Sürüm karması');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Harika! Sorun bulunamadı.');
jr_define('_JOMRES_PROPERTYPE_MARKER', 'Google haritaları işaretçisi');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Daha fazla');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Daha az');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Turist vergisi');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Turist vergisi oranı');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Turist vergisi oranını ayarlayın. Turist vergisi sadece ilk rezervasyon oluşturulduktan sonra hesaplanır ve ekstra hizmetler kutusundaki rezervasyon onay sayfasına eklenir.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Yüzde mi?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Vergi yüzde ise Evet, sabit ücret ise Hayır olarak ayarlayın.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Tüm rezervasyon değerini etkiler mi?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Vergi rezervasyonun tüm değerini kapsayacaksa, bu hem konaklama hem de ekstraların yüzdesi olacaksa bunu Evet olarak ayarlayın veya yalnızca konaklama toplamı. Yukarıdaki 'Yüzdedir' seçeneği Hayır olarak ayarlanmışsa, bu seçenek yok sayılır.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Lütfen bu rezervasyona bir turizm vergisi ekleneceğini unutmayın. Vergiyi inceleme rezervasyon sayfasında görebileceksiniz.');
jr_define('NO_LICENSE_MESSAGE', "Site Yapılandırmasında bir lisans numarası kaydetmediniz, bu nedenle eklentileri indiremeyeceksiniz. Geçerli bir lisans anahtarınız kaydedildikten sonra, aşağıda listelenen eklentileri yükleyebilirsiniz. Çekirdek eklentiler.");
jr_define('INVALID_LICENSE_MESSAGE', "Geçersiz veya süresi dolmuş bir lisans numarası kullanıyorsunuz. Geçerli bir lisans anahtarı kaydettikten sonra, Çekirdek eklentiler olarak listelenen tüm eklentileri kurabileceksiniz.");
jr_define('VALID_LICENSE_MESSAGE', "Tebrikler, geçerli bir lisans numarası kullanıyorsunuz ve Core eklentilerini Jomres eklenti yöneticisi aracılığıyla yükleyebilirsiniz.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Bu sayfa mülkünüz ve sunduğunuz şeyler için resim yüklemenizi sağlar. Bir ana düğmesi ve resimleri yüklemek için belirli kaynakları seçmenizi sağlayan ikinci bir düğmesi vardır. Dolayısıyla, Ana özellik resim ve Slayt Gösterisi yalnızca bir düğme gösterecektir, ancak örneğin İsteğe Bağlı Ekstralar veya Odalar oluşturduysanız, o zaman bu belirli kaynaklar için resim yükleyebileceğiniz ikinci bir düğme göreceksiniz.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Bu sayfa mülkünüz ve sunduğunuz şeyler için resim yüklemenizi sağlar. Bir ana düğmesi ve resim yüklemek için belirli kaynakları seçmenizi sağlayan ikinci bir düğmesi vardır. Dolayısıyla, Ana özellik resim ve Slayt Gösterisi yalnızca bir düğme gösterecek, ancak herhangi bir İsteğe Bağlı Ekstra oluşturduysanız, o zaman bu belirli kaynaklar için resim yükleyebileceğiniz ikinci bir düğme göreceksiniz.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>Önce Görsel Ekle'yi tıklayarak veya Sürükle ve Bırak'ı kullanarak yüklemek istediğiniz görselleri seçin. Bunlar sağ taraftaki sütunda görünür.</li>
  <li>Bu alanın üzerinde, hangi kaynağa resim yüklemek istediğinizi seçmek için \"Kaynağı seçin\" düğmesini kullanın. Altında belirli bir kaynak seçme seçeneği sunulabilir. </li>
  <li> Bir kaynak seçtikten sonra, o kaynakla ilişkilendirmek için resmin altındaki Resim Yükle düğmesini tıklayabilirsiniz. Bir resim yüklendikten sonra, sitenin sağ tarafındaki sütundan kaybolur ve sol tarafta görünür.</li>
  <li>Artık gösterilmesini istemediğiniz resimleri kaldırmak için mevcut resimlerin yanındaki Çöp Kutusu düğmesini kullanın.</li>
  <li>Sayfalarda alfabetik sırayla görüntülendiğinden, dosyaları yüklemeden önce yeniden adlandırarak slayt gösterisinde gösterilme sırasını değiştirebilirsiniz.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Kaynak düğmesinin yanında bir Önizleme düğmesi görebilirsiniz. Buna tıklarsanız, o anda yüklenen resimlerin bir sayfada nasıl görüneceğini gösteren bir açılır pencere göreceksiniz. Bu size bir görüntülerin müşterilerinize nasıl görüneceğine dair fikir.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Yükleyebileceğiniz resim sayısında bir sınırlama yoktur. Resimler yüklendiklerinde otomatik olarak yeniden boyutlandırılır. Yalnızca JPG ve PNG dosyalarını yükleyebilirsiniz.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "İdeal olarak yüklediğiniz tüm resimler en az ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " piksel genişliğinde, aksi takdirde yüklendikten sonra bulanık görünebilirler.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Yüklediğiniz resimlerden fazla olamaz ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " boyutunda.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Görüntüleri yüklemek istediğiniz kaynağı seçin");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Belirli kaynak");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Bu kaynak için resimler zaten yüklendi");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Metin biçimlendirme');
jr_define('_JOMRES_MARKDOWN_DESC', 'Buraya basit Markdown biçimlendirme yöntemini kullanarak metin girebilirsiniz. Herhangi bir HTML bilmenize gerek yoktur, bilgileri istediğiniz gibi görünmesi için düğmeleri kullanın veya metni bu örneklere göre biçimlendirin.');
Jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Vurgu');
Jr_define ('_JOMRES_MARKDOWN_BOLD', 'kalın');
Jr_define ('_JOMRES_MARKDOWN_ITALICS', 'italik');
Jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'üstü çizili');
Jr_define ('_JOMRES_MARKDOWN_HEADERS', "Üstbilgiler");
Jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Büyük başlık');
Jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Orta başlık");
Jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Küçük başlık');
Jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Küçük başlık');
Jr_define ('_JOMRES_MARKDOWN_LISTS', "Listeler");
Jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Genel liste öğesi');
Jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numaralı liste öğesi');
Jr_define ('_JOMRES_MARKDOWN_LINKS', 'Links');
Jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Görüntülenecek metin');
Jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
Jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Bu bir teklif.');
Jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Birden fazla satıra yayılabilir!');
Jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Resimler');
Jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tablolar');
Jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Sütun');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Özellik görüntülerini mülkiyet listesinde slayt gösterisi olarak gösterilsin m');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Evet olarak ayarlanırsa, özellik ana görüntülerinin bir slayt gösterisi görüntülenir. Hayır olarak ayarlanırsa, ilk özellik ana görüntüsü görüntülenir. ');
jr_define('EDIT_CMS_USER', 'CMS kullanıcısını düzenle');
jr_define('BOOKING_MADE_BY', 'Rezervasyonu yapan');
jr_define('_JOMRES_ROUTER_FEATURES', 'Kolaylıklar');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Oda tipleri');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Harici rezervasyon formu URL\'si');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Rezervasyon yapmak için 3. taraf bir web sitesi kullanmak istiyorsanız buradan harici bir URL ayarlayabilirsiniz. Tüm jomres rezervasyon düğmeleri bu URL\'yi gösterecektir. Jomres rezervasyon formunu kullanmak istiyorsanız bu alanı boş bırakın .');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (kısa oda açıklaması/alt yazı)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Oda Açıklaması');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Misafir kara listeye alındı');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Eğer bu misafir kara listedeyse, artık bu tesiste rezervasyon yapamayacak.');
jr_define('_JOMRES_SESSION_HANDLER', 'Oturum işleyici');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'jomres oturum dosyalarını diske veya veritabanına kaydedin. Önerilen: veritabanı');
jr_define('_JOMRES_MAP_HEIGHT',"Harita yüksekliği (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Harita yakınlaştırma düzeyi ");
jr_define('_JOMRES_MAP_MAPTYPE',"Harita türü");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Şablon Geçersiz Kılma Yöneticisi");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Şablon paketleri, çeşitli temel Jomres şablon dosyaları için geçersiz kılma şablonları sağlayabilen eklentilerdir.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"Bu sayfa, bir şablon paketinin şablon dosyaları tarafından geçersiz kılınabilecek tüm şablon dosyalarını listeler. Belirli bir şablon dosyasını geçersiz kılmak istiyorsanız, o dosyanın düzenle düğmesine tıklayın, sonraki sayfada hangi sürümle geçersiz kılmak istediğinizi seçebilirsiniz.Bu geçersiz kılmalar hem Jomres Core hem de herhangi bir Wordpress veya Joomla tema/şablon geçersiz kılmalarına göre önceliklidir.Bir geçersiz kılmayı Liste Şablonu Geçersiz Kılmalar sayfasında silerek devre dışı bırakabilirsiniz.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Şablon adı");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Geçerli yol");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Geçersiz kılınmadı");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"Açılır menüyü değiştirerek Çekirdek şablon dosyalarını geçersiz kılmak için hangi şablon dosyasını seçebilirsiniz");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Rezerve Edilen Oda Yüzdesi");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Rezerve Edilen Oda Yüzdesi");
jr_define('_JOMRES_SELECT_WIDGETS',"Widget'ları seçin");
jr_define('_JOMRES_INTERVAL',"Aralık");
jr_define('_JOMRES_TIMELINE',"Zaman Çizelgesi");
jr_define('_JOMRES_CPANEL_GRID',"Kontrol paneli ana sayfa düzeni");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Ön uç mülk yönetimi kontrol paneli ana sayfanızın ızgara düzenini seçin.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Harita İşaretçileri");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Kasaba resimleri");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Tesis türünün değiştirilmesi tüm odaları, tarifeleri, tesis ayarlarını silecek ve müsaitlik durumunu sıfırlayacaktır.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Lütfen unutmayın, güncellemeden sonra önceden kurulmuş olan Jomres Eklentilerini Jomres eklenti yöneticisi aracılığıyla güncellemeniz gerekir. Yüklü Çekirdek eklentileriniz varsa ancak geçerli bir Jomres lisansınız yoksa, <em>yapıyoruz eski eklentiler genellikle Jomres\'in daha yeni sürümleriyle çalışmayabileceğinden, Jomres\'i güncellemenizi önermez</em>. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Güncellemeden sonra önceden kurulmuş olan Jomres Eklentilerini Jomres eklenti yöneticisi aracılığıyla güncellemeniz gerektiğini lütfen unutmayın.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Jomres'i ve eklentilerini güncellemek istiyorsanız, bir yenileme lisansına ihtiyacınız olacaktır. Lütfen <a href='https://www.jomres.net/pricing' target='_blank'>sayfamızı ziyaret edin. sitesi</a>. Çoğu durumda bu lisanslar tam lisans fiyatının %50'sidir. Lütfen yenileme satın almadan önce mağazamıza giriş yaptığınızdan emin olun.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Ödeme yöntemi : ");

jr_define('_JOMRES_PRICES',"Bağlanın");


jr_define('_OAUTH_TITLE',"Uygulama anahtarı yönetimi");
jr_define('_OAUTH_APPS',"REST API istemci detayları");
jr_define('_OAUTH_IDENTIFIER',"Tanımlayıcı");
jr_define('_OAUTH_APIKEY',"Müşteri Kimliği");
jr_define('_OAUTH_SECRET',"Gizli");
jr_define('_OAUTH_CREATED',"Uygulama Oluşturuldu/Güncellendi");
jr_define('_OAUTH_CLIENT_ID_INFO',"Müşteri Kimliği ve Sırrı sizin için oluşturulur. Tanımlayıcı, bu anahtar çiftini kolayca tanımlayabilmeniz içindir.");
jr_define('_OAUTH_SCOPE_TITLE',"İzinler (istemcinin yapabilecekleri) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER', "Kullanıcı izinleri");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Mülk izinleri");

jr_define('API_DOCUMENTATION_TITLE',"Uygulama REST API dokümantasyonu");

jr_define('_OAUTH_CONFIG',"API Çekirdek yapılandırması");

jr_define('_OAUTH_CONFIG_SHOW',"Jomres ana menüsünde API istemci yapılandırma seçeneklerini göster?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"Jomres ana menüsünün 'Hesabım' bölümünde API istemci yapılandırma seçeneklerini göstermemeyi seçebilirsiniz. Bunun yerine, bunları Jomres Kısa Kodlarını kullanarak diğer sayfalarda göstermek istediğinize karar verebilirsiniz.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "API çekirdek belgeleri sayfasını görüntüler. API Çekirdeği, kullanıcıların API istemcileri oluşturmasına olanak tanır, bunlar daha sonra API Çekirdeği belgelerinde özetlenen API işlevlerine erişmek için kullanılır." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Mülk yöneticilerinin API istemcilerini yapılandırabileceği API çekirdek yönetim sayfasını görüntüler. Bunun yalnızca kayıtlı bir kullanıcı özelliği olduğunu, dolayısıyla kullanıcıların bu sayfayı görmeden önce kaydolmaları ve oturum açmaları gerektiğini unutmayın." );

jr_define('API_METHODS_TITLE',"API Yöntemleri");
jr_define('API_METHODS_DESCRIPTION',"Bu yöntem listesi, yüklü API özelliği eklentilerinize dayalıdır ve otomatik olarak oluşturulur. Bir API özelliği eklentisi kurar veya silerseniz, sitenizde mevcut olan bu API yöntemleri listesini yeniden oluşturmak için bu sayfayı ziyaret etmelisiniz. ");

jr_define('_OAUTH_REDIRECT_URI',"Yönlendirme URI'si");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Telefonum gibi senin için anlamlı olan bir isim ver");

jr_define('_OAUTH_GRANT_TYPES',"Bu sistem, Client Credentials ve Implicit olmak üzere iki yetki türünü destekler. <em>client_credentials</em> akışını kullanıyorsanız, hem istemci kimliğine hem de istemci sırrına ihtiyacınız olacaktır. <em kullanıyorsanız >örtük</em> ise uygulamanız yalnızca istemci kimliğini gönderir ve siz bu uygulamayı açıkça yetkilendirmek için sistemde oturum açarsınız.");

jr_define('_OAUTH_IMPLICIT_NOTES',"<em>Örtülü</em> hibe türü akışını kullanmak için, uygulamalarınızı yetkilendirmek için bu url'yi kullanmanız gerekecek. Bu url çağrıldığında ve sistemin yayınlayacağı uygulamaya yetki verdiniz uygulamalarınızın daha sonra bu sistemin API'sini çağırmak için kullanacağı bir belirteç ");
jr_define('_OAUTH_AUTHORISATION_URL',"Yetkilendirme URL'si");

jr_define('WEBHOOKS_CORE', 'Web kancaları');

jr_define('_WEBHOOKS_CONFIG_SHOW',"Jomres ana menüsünde Web kancası yapılandırma seçeneklerini göster?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"Jomres ana menüsünün 'Hesabım' bölümünde Web kancası yapılandırma seçeneklerini göstermemeyi seçebilirsiniz. Bunun yerine, bunları Jomres Kısa Kodlarını kullanarak diğer sayfalarda göstermek istediğinize karar verebilirsiniz.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Web kancaları belgeleri");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "API çekirdek belgeleri sayfasını görüntüler. API Çekirdeği, kullanıcıların API istemcileri oluşturmasına olanak tanır, bunlar daha sonra API Çekirdeği belgelerinde özetlenen API işlevlerine erişmek için kullanılır." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Mülk yöneticilerinin API istemcilerini yapılandırabileceği API çekirdek yönetim sayfasını görüntüler. Bunun yalnızca kayıtlı bir kullanıcı özelliği olduğunu unutmayın, bu nedenle kullanıcılar bu sayfayı görmeden önce kaydolmalı ve oturum açmalıdır." );

jr_define('WEBHOOKS_INTEGRATION_EDIT', 'Entegrasyonu Düzenle');
jr_define('WEBHOOKS_INTEGRATION_ID', 'Entegrasyon Kimliği');
jr_define('WEBHOOKS_INTEGRATION_URL', 'URL veya İsim');
jr_define('WEBHOOKS_ENABLED', 'Etkin');

jr_define('WEBHOOKS_AUTH_METHOD_SELECT', 'Doğrulama yöntemi/Entegrasyon');

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Hiçbir mülke atanmadığınız için oluşturduğunuz web kancaları tetiklenmeyecektir. Süper mülk yöneticilerine genellikle bireysel mülkler atanmaz, bu nedenle web kancası oluşturmak için yeni bir kullanıcıya ihtiyacınız olabilir.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Oluşturduğunuz herhangi bir web kancası aşağıdaki özelliklere karşı tetiklenecektir: ');


jr_define('PORTAL_REVIEWS_LIMIT', 'İnceleme limiti');
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Tesis ayrıntıları sayfasında gösterilen inceleme sayısını sınırlamak için bu ayarı kullanın.' );
jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Tüm yorumları göster');

jr_define('VIDEO_TUTORIALS', 'Video Eğitimleri');

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum para yatırma değeri');
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Hesaplanan depozito bu rakamın altındaysa, bunun yerine depozitoyu bu değere ayarlayın. Sitenin minimum depozito ayarını karşılamıyorsa bu rakamın kendisi geçersiz olabilir. ayarı kullanmayın." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Sitenizin hızını artırmak için, mevcut sitenin ayrıntılarını ve özellik görüntülerini veritabanına aktarmanızı öneririz.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Mevcut görsel detaylarını veri tabanına aktar');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Deneysel özellik. Etkinleştirilirse, medya merkezi özelliği kullanılarak yüklenen resimler de Amazon S3 klasörünüze kopyalanacak ve Amazon S3 paket url\'nizden sunulacaktır. Bunu ilk kez etkinleştirirken, ayrıca mevcut görüntüleri S3 klasörünüze aktarmanız istendi.');
jr_define('_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront etki alanı');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Varsayılan Amazon S3 alan adınızı CloudFront alan adınızla değiştirin');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Etkinleştirilmesi önerilir. Yalnızca Windows ve Mac OSX için, libcurl Schannel veya Secure Transport desteği (Windows ve Mac OS X\'te bulunan yerel SSL kitaplıkları) ile oluşturulmadıysa, bunu Numara.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Amazon S3 entegrasyonunu etkinleştirdiniz, bu nedenle mevcut tüm görüntüleri S3 klasörünüze kopyalamanız gerekecek. Görüntüler artık Amazon S3 url\'nizden site ziyaretçilerinize sunuluyor, bu nedenle ihtiyacınız olacak önce onları S3 klasörünüze kopyalamak için, aksi takdirde site ziyaretçileriniz tarafından görülemezler.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Bu butona tıkladıktan sonra lütfen işlemi yarıda kesmeyin ve bir başarı veya hata mesajı gelmesini bekleyin. Sunucu hızına bağlı olarak bu işlemin tamamlanması biraz zaman alabilir.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Mevcut görüntüleri Amazon S3 klasörüne kopyalayın');


jr_define('JOMRES_INCOMPLETE', 'Tamamlanmadı');
jr_define('JOMRES_WATING_APPROVAL', 'Onay bekleniyor');
jr_define('JOMRES_GOOGLE_MAPS_PDETAILS', 'Mülk ayrıntıları haritası');

jr_define('HAS_STARS_TITLE', 'Yıldız sınıflandırmasına izin veriyor mu?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Görüntü ayrıntılarını veritabanına yeniden aktarmaya zorla');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Görüntüleri S3 klasörüne yeniden yüklemeye zorla');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Kaldırma sırasında tüm Jomres verileri silinsin mi?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'Evet olarak ayarlanırsa, kaldırıldığında Jomres tüm veritabanı tablolarını siler. Bu, tüm Jomres verilerini db\'den siler ve geri alınamaz.');

jr_define('TRANSACTION_IDS', 'İşlem kimliği');
jr_define('PAYMENT_METHOD', 'Ödeme yöntemi');
jr_define('POA_DISPLAY_PRICE', 'POA Fiyatı');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'Tesisler bir listede gösterildiğinde, sistem, bugünün tarihine veya bir aramada tarihler kullanılmışsa, o tarihlere göre yapılandırılmış tarifelerden geçerli bir fiyat bulmaya çalışır. .Eğer yapamazsa POA (Uygulamadaki fiyat) gösterecektir, yani misafir fiyat almak için sizinle iletişime geçmelidir.İsterseniz burada POA metni yerine gösterilecek bir fiyat yapılandırabilirsiniz.Bu şekil başka bir fiyat belirlenemezse görüntülenecek bir "yedek" fiyat olacaktır.');

jr_define( 'PLUGINMANAGER_INSTALL', 'Jomres eklentilerini kurmadan önce eklenti yöneticisini kurmanız gerekiyor, bunu şimdi yapmak ister misiniz?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'Yüklü eklentileri güncellemeden önce eklenti yöneticisini güncellemeniz gerekiyor, bunu şimdi yapmak ister misiniz?');
jr_define('PLUGINMANAGER_INSTALL_BUTTON', "Bunu yapalım!");

jr_define( 'INCLUDEINFILTERS', 'Filtrelere dahil edilsin mi?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Ajax Bileşik Arama\'daki özellik özellik filtreleri çok uzun olabilir, bu özelliğin özellik özellik listesinde görünmesini engellemek için bu seçeneği Hayır olarak ayarlayabilirsiniz.');

jr_define('REVIEW_REMINDER_PT1', "Sizin var");
jr_define( 'REVIEW_REMINDER_PT2', " Henüz yorum yapmadığınız rezervasyon(lar). Lütfen yorum bırakın.");
jr_define('BOOKINGS_AWAITING_REVIEWS', "Yorum bekleyen rezervasyonlar");
jr_define('REVIEW_NAG', "Konukları incelemeler için rahatsız mı edeceksiniz?");
jr_define( 'REVIEW_NAG_DESC', "Konuk bir rezervasyondan ayrıldığında, sistem onlara rezervasyonları için bir inceleme göndermelerini hatırlatacaktır. Bu hatırlatıcıyı devre dışı bırakmak için bu seçeneği Hayır olarak ayarlayın.");

jr_define('HIDDEN_ADDRESS_SETTING', "Adresi gizle?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "Bu seçeneği Evet olarak ayarlarsanız, yalnızca tesisinize önceden rezervasyon yapmış olan misafirler tesisin sokak adresini görebilir. Tesisin tam konumunu gizlemek için bu ayarı kullanmak isteyebilirsiniz. örneğin, rutin olarak gözetimsiz bırakılırsa.");
jr_define('GİZLİ_ADDRESS_PLACEHOLDER', "GİZLİ");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Yükleme sırasında resimleri optimize et?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Etkinleştirildiğinde, resimler web için optimize edilecektir (dosya boyutu %75\'e kadar daha küçük olabilir). Yüklenen resim türüne bağlı olarak, sunucunuzun barındırma tarafından bu kitaplıklardan bir veya daha fazlasının yüklenmesi gerekir. sağlayıcı: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define('DATABASE_INTEGRITY_CHECK', 'Veritabanı Bütünlük Kontrolü');
jr_define('OBSOLETE_FILES_CHECK', 'Eski Dosyaların Kontrolü');
jr_define('DATATABLES_COLVIS', 'Sütun Görünürlüğü');
jr_define('API_TOKEN_LIFETIME', 'API belirteci ömrü');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'Bir API jetonunun saniye cinsinden ne kadar süre geçerli kalacağı. 86400 = 1 gün, 31536000 = 1 yıl');


jr_define('ENCRYPTION_TITLE', 'Şifreleme');
jr_define('ENCRYPTION_FILE_LOCATION', 'Şifreleme dosyası konumu');
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Şifreleme dosyasını asla silmeyin** <br/> Kullanıcı verileri, GDPR tavsiyelerine uygun olarak "beklenen verilerin" güvenli bir şekilde korunmasını sağlamak için tablolarda şifreli olarak saklanır. Varsayılan olarak şifreleme anahtarı Jomres kurulumunuzun kök dizinindeki "encryption_key.class.php" dosyasında saklanır (tipik olarak /public_html/jomres). Dosyanın saklandığı yeri burada değiştirebilirsiniz. Konumu değiştirirseniz, dosyayı TAŞIMALISINIZ, Jomres\'in yeni bir sürüm oluşturmasını beklemeyin, aksi takdirde misafirlerinizin bilgilerini çözemezsiniz.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'Buraya kaydettiğiniz bilgiler bu mülk için oluşturulan faturalarda kullanılacaktır');

jr_define('_JOMRES_GDPR_POLICIES', 'GDPR Politikaları');
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'GDPR ile uyumlu olduğunuzdan emin olmak için bir rezervasyonun veya faturanın oluşturulduktan ne kadar süre sonra sistemden kaldırılacağını buradan ayarlayabilirsiniz.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Rezervasyon Tutma süresi (gün olarak)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Bir rezervasyon hareket tarihinden kaç gün sonra rezervasyon silinmelidir? Silindiğinde hem rezervasyon hem de fatura kaldırılır. Tipik bir saklama süresi 365 gün olabilir.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Fatura bekletme (rezervasyonsuz) dönemi');
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Komisyon ve abonelik faturaları gibi diğer faturalar rezervasyonlara bağlı değildir. Sonuç olarak, rezervasyon faturaları ve sözleşmeler silinirken silinmezler. Ülkenize ve kendi ticari uygulamalarınıza bağlı olarak, farklı bir saklama süresi yapılandırmanız gerekecek. Tipik bir saklama süresi, 10 yıl olan 3653 gün olabilir.' );


jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Verileriniz');
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Bu web sitesinin bazı özelliklerinin ziyaretinizle ilgili bilgileri saklaması gerekir. Bu bilgiler yalnızca size hizmet vermek için kullanılır, asla başkalarıyla paylaşılmaz ve artık ihtiyaç duyulmadığında silinir.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'BU BİLGİYİ SAKLAMAK İÇİN BİZE İZİN VERİYOR MUSUNUZ?' );
jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Ayrıntılı');
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Bu sitede rezervasyon yapabilmeniz için bu verileri saklamamıza izin vermelisiniz. Bu, size sürekli olarak katılmak isteyip istemediğinizi sormamamızı ve Kişisel Tanıtıcı Bilgiler (PII) içermemesini sağlamamıza yardımcı olur. "Uygulama izinleri" sayfasını istediğiniz zaman ziyaret edebilir veya devre dışı bırakabilirsiniz.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Bilgiler, ziyaretinizin niteliğine bağlı olarak farklı zaman periyotları için saklanır. Dolayısıyla, sadece etrafa bakıyorsanız, yaklaşık coğrafi konum (ülke seviyesi) bilgilerini saklayacağız. Arama yaparsanız, arama formlarını daha kullanıcı dostu hale getirin, aradığınız son şeyleri saklayacağız.Bu bilgiler genellikle maksimum 24 saat saklanır ve yalnızca ziyaretinizi daha keyifli hale getirmek için kullanılır.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Bizimle rezervasyon yaptığınızda, zorunlu olarak daha fazla bilgi saklanır.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Rezervasyon formunun teknik bilgileri alınır ve maksimum 60 gün boyunca saklanır. Bu, bir rezervasyon onaylandıktan sonra Talep Üzerine rezervasyonların tam rezervasyonlara dönüştürülebilmesi ve ekiplerimiz tarafından analiz edilmesi için gereklidir. rezervasyonla ilgili bir sorun olması durumunda Rezervasyon yaparken oturum açmadıysanız, rezervasyon geçmişinizi görüntüleyebilmeniz ve Unutulma Hakkınızı (RTBF) kullanabilmeniz için size bir kullanıcı adı ve şifre e-postası göndereceğiz. bunu yapmak istiyorum.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Rezervasyon formuna girilen bilgiler, örneğin isim, e-posta adresi, gerçek adres, rezervasyonun hareket tarihinden itibaren maksimum 365 gün saklanır. Bu bilgiler veritabanımızda şifreli olarak saklanır. böylece sadece yetkili kişiler bunu görebilir.Bir rezervasyon yaparsanız, yasalara göre, rezervasyon geçerliyken kişisel bilgilerinizi saklamamız gerekir.İptal edildiği veya check-out yaptırdığınız için rezervasyon tamamlandıktan sonra, Oturum açarak ve "Verileriniz" sayfasını ziyaret ederek RTBF\'nizi kullanabilirsiniz. Tamamlanan rezervasyonlar için fatura bilgileri, ilgili vergi yasalarına uymamızı sağlamak için veritabanımızda güvenli bir şekilde saklanacaktır, ancak diğer tüm PII\'leri kaldırabileceksiniz. rezervasyon tamamlandıktan sonra.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Bilgilerinizin yukarıda açıklandığı şekilde saklanmasına izin verdiğinizde, bu izni yasal olarak veritabanımızda saklamakla yükümlüyüz. Bu bilgiler IP numaranızı ve katılım formunun içeriğini içerecektir. bu onay bildirimini süresiz olarak saklayın (bu yasal bir gerekliliktir).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'Sizinle ilgili Kişisel Tanımlanabilir Bilgileri toplayıp toplayamayacağımızı henüz bize söylemediniz');
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'Rezervasyon almak için gerekli Kişisel Tanımlanabilir Bilgileri toplamamıza izin verdiniz');
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Kişisel Olarak Tanımlanabilir Bilgileri toplamamamızı söylediniz');

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'Bize özel verilerinizi toplama izni vermediniz');
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Bu web sitesinde belirli eylemleri gerçekleştirebilmeniz için sizinle ilgili Kişisel Tanımlanabilir Bilgileri toplamamız gerekiyor, ancak bize bunu yapmamız için izin vermediniz.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'İzinlerinizi değiştirin');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Özellikleri görüntülemeye devam edin');

jr_define('_JOMRES_GDPR_APP_MENU_ITEM', 'Uygulama izinleri');

jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Misafir verileri');
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Bunlar, çeşitli tesisler tarafından sizin için saklanan ayrıntılardır. Farklı oteller, rezervasyon yaparken girdiğiniz bilgilere bağlı olarak farklı kayıtlara sahip olabilir.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Bu sistemde herhangi bir otel ile kayıtlı veriniz bulunmamaktadır');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profil verileri');
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Bu, farklı özelliklerle paylaştıklarınızdan farklı olarak, sizin için tuttuğumuz ana veri setidir.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Hiçbir profil bilgisi kaydetmediniz');
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'İşte bu web sitesinde sizin için sakladığımız Kişisel Olarak Tanımlanabilir Bilgiler. Bu, hafif bir veri değişim formatı olan JSON (JavaScript Object Notation) formatında oluşturulmuştur. İnsanların okuması ve yazma ve makinelerin ayrıştırması ve oluşturması kolaydır.' );

jr_define('_JOMRES_GDPR_REDACTION_STRING', 'Anonimleştirilmiş');

jr_define('_JOMRES_GDPR_MY_DATA', 'Verileriniz');
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Bu Kullanım Koşulları Sözleşmesini (bu "Sözleşme") kabul ederek şunları kabul etmektesiniz:

<ul>
<li>
Bu web sitesi aracılığıyla otel rezervasyonu yapma yetkiniz vardır;
</li>
<li>
En az 18 yaşındasınız;
</li>
<li>
Bağlayıcı bir yasal yükümlülük oluşturmak için yasal yetkiye sahipsiniz;
</li>
<li>
Siteyi bu Sözleşmeye uygun olarak kullanacaksınız;
</li>
<li>
Siteyi yalnızca kendiniz veya yasal olarak adına hareket etmeye yetkili olduğunuz başka bir kişi için meşru rezervasyonlar yapmak için kullanacaksınız;
</li>
<li>
Söz konusu diğer kişileri, kendileri adına yaptığım rezervasyonlar için geçerli olan bu Sözleşme hakkında, geçerli tüm kurallar ve kısıtlamalar dahil olmak üzere bilgilendireceksiniz;
</li>
<li>
Web Sitesine tarafınızca sağlanan tüm bilgiler doğru, doğru, güncel ve eksiksizdir; ve
</li>
<li>
Hesap bilgilerinizi koruyacak ve hesabınızın kendiniz ve sizden başkası tarafından herhangi bir şekilde kullanılmasını denetleyecek ve bunlardan tamamen sorumlu olacaksınız.
</li>
</ul>
');
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Güvenlik ve şeffaflık bizim için önemlidir.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'Verilerinizi saklama konusundaki sorumluluklarımızı çok ciddiye alıyoruz. Tüm Kişisel Tanımlanabilir Bilgiler (PII), yalnızca yetkili kullanıcıların bu bilgileri görebilmesini sağlamak için endüstri standardı algoritmalar kullanılarak veritabanımızda şifreli olarak saklanır.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Sizin için sakladığımız tüm kişisel bilgileri indirebilirsiniz.' );
jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Şimdi İndir');
jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Unutulma Hakkı (RTBF)');
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', '<a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">silebilmeniz</a> gerektiğine inanıyoruz. a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Kişisel Olarak Tanımlanabilir Bilgiler </a>isterseniz ve uygulanabilir ise ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Bu sitede kayıtlı değilsiniz. Genel konumunuz (ülke) ve IP numaranız maksimum 24 saat saklanacak ve ardından silinecektir.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Bu siteye kayıtlı değilsiniz ve veri toplamayı devre dışı bıraktınız. Kişisel Bilgilerinizi kaydetmedik.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Siteye kayıtlısınız ve bekleyen veya aktif rezervasyonunuz yok. Şu anda elimizde bulunan bilgilerin çoğunu sizin için anonim hale getirebiliriz. Bunu yapmak ister misiniz? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Not: Bu, hesabınızı silmez, hesabınızın sizinle bir kişi olarak ilişkilendirilememesi için kayıtlarımızı anonimleştirir. tüm konuk kayıtlarını silin.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Siteye kayıtlısınız, ancak bekleyen rezervasyonlarınız var ve şu anda verilerinizi anonimleştiremiyoruz. Bu veriler, rezervasyon tamamlandıktan sonra en fazla bir yıl süreyle saklanacak, ardından o zamandan önce kaldırmayı seçmezseniz silinebilir.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Sitemizde mülk yöneticisi olduğunuz için size verilerinizin otomatik olarak silinmesini sağlayamıyoruz. Bunun yerine, mülkünüzü başka bir yöneticiye atayabilmemiz için lütfen doğrudan bizimle iletişime geçin. Bunu yaptıktan ve mülk yöneticisi durumunuzu kaldırdıktan sonra, verilerinizi otomatik olarak sildirebileceksiniz.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Beni unut!');
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Bu geri alınamaz!');
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Verileriniz silindi!');

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Maalesef e-posta adresiniz geçersiz olduğundan rezervasyon yapamazsınız');

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Bu sayfa size bilgileri sistemde kayıtlı olan misafirleri anonim hale getirme imkanı verir. Bu, GDPR ile uyumlu olmanızı sağlar, ancak bu sayfadaki başka hiçbir bilgiyi düzenleyemezsiniz. Bunu yapmak için ön uçta mülk yöneticisi olarak oturum açmalısınız. Varsayım, tarihi bir misafirin sizinle iletişime geçerek unutulma haklarını kullanmalarına izin vermenizi talep etmesidir. Sitenin ön ucunda oturum açamıyorlarsa (belki de bir kullanıcı, rezervasyon yaptıklarında onlar için oluşturulmamıştır), bu durumda, kimliklerini onayladıktan sonra bu alanı onları anonim hale getirmek için kullanabilirsiniz.' );

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Misafiri anonimleştir');
jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'SİLİNEN MÜLK');
jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Misafir verileri anonimleştirildi');
jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Anonimleştirilemez');

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Rezervasyon yapmadan önce bilgilerinizi saklamak için izninize ihtiyacımız var. Bize izin vermek için BURAYA TIKLAYIN.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'GDPR uyumlu işlevsellik etkinleştirilsin mi?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'GDPR UYUMLU İŞLEVİNİ DEVRE DIŞI BIRAKMANIZI TAVSİYE ETMİYORUZ. Jomres, sitenizin Jomres bölümünün GDPR ile uyumlu olmasını sağlamanıza yardımcı olan yerleşik özelliklere sahiptir. Bu özelliği devre dışı bırakırsanız (ve AB\'deyseniz veya AB vatandaşlarıyla iş yapıyorsanız, bunu yapmamalısınız), o zaman Jomres otomatik olarak siteye gelen her ziyaretçinin kişisel verilerinin etkinleştirilmesine izin verdiğini varsayacaktır.Uygulama izni ve Verilerim sayfaları gösterilir ve kullanıcılardan verilerin toplanmasına izin vermeleri istenmez.' );


jr_define('EMPTY_TEMP_DIR', 'Boş geçici dizin');
jr_define('EMPTY_TEMP_DIR_DONE', 'Geçici dosyalar silindi');

jr_define('MACHINE_TRANSLATION', 'Makine çevirileri');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', 'Kaynak dil');
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Makine çevirisi işlevine bağlanmak mümkündür. Bu, dizeleri tek bir dilde girmenize olanak tanır ve çeviriler uzak hizmetlerden alınabilir. Tüm çeviri hizmetlerinin tüm dilleri desteklemediğini unutmayın. daha fazla detay.' );
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Oda Tipleri');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Yeni Oda tipi');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Bu sayfada oda tiplerini oluşturabilir ve düzenleyebilirsiniz. Bu oda tipleri sadece bu tesise özel olacaktır. Tesisinizi kurarken öncelikle bazı Oda Tiplerine ihtiyacınız vardır. veya kendi odanızı ekleyebilirsiniz.Bir veya daha fazla Oda Tipiniz olduğunda o Oda Tipinden oda oluşturabilirsiniz.Odalarınız olduktan sonra o odalar için tarifeler (fiyatlar) oluşturabilirsiniz, çünkü tarifeler Oda Tiplerine bağlı olduğu için .');
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Yöneticiler oda tipleri oluşturabilir mi?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Yöneticilerin ön uçta kendi oda tiplerini oluşturup oluşturamayacaklarını yapılandırmak için bu seçeneği kullanın. Jomres\'i ilk kullanmaya başladığınızda, özellikle bir oda oluşturuyorsanız, bu seçeneği Hayır olarak bırakmanızı şiddetle tavsiye ederiz. portal çünkü yönetici alanında tüm oda tiplerini oluşturmalısınız Yöneticiler tarafından oluşturulan oda tipleri arama formlarında görünecektir, ancak bu oda tipleri bireysel mülklere özgü olduğundan, o oda tipi seçildiğinde arama sonuçlarında sadece bir mülk gösterilecektir. Yalnızca Süper Mülk Yöneticilerinin oda tipleri oluşturabilmesini istiyorsanız, bu seçeneği Evet olarak bırakın ve "Ayarlar > Oda türleri" menü seçeneğini yalnızca süper yöneticilerin görüntülemesine izin vermek için Erişim Kontrolü eklentisini kullanın. mülkteki odalar dışında ve Advanced veya Micromanage tarife düzenleme modlarını kullanın bu seçeneği kullanabilirsiniz.Villa/apartman tipi mülkler kullanamayacaktır.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Oda/mülk türü güncellendi');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Arama seçeneklerinde oda tiplerini göster');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Mülk yöneticilerinin kendi oda tiplerini oluşturmalarına izin verirseniz, oda tiplerini göstermeyi seçtiğiniz arama seçeneklerinde oluşturulan oda tiplerini gösterip göstermemeyi seçebilirsiniz.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Her rezervasyon için aynı e-posta adresini tekrar kullanmamalısınız.<br/>İşletmeniz için benzersiz bir alan adınız (ör. gmail e-posta adresi değil) varsa, konuğun telefon numarasını kullanın. e-posta adresi olarak. Bu durumda e-posta adresi 123456@mydomain.com gibi görünecektir<br/>Bu, bir rezervasyon oluşturduğunuzda yeni bir misafirin oluşturulmasını sağlayacaktır." );

jr_define('_JOMRES_LOGIN_USERNAME', 'E-posta adresi');
jr_define('_JOMRES_LOGIN_PASSWORD', 'Şifre');
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"Bizimle tekrar rezervasyon yapmak istemenize çok sevindik. Tüm rezervasyonlarınızı birlikte yönetebilmek için, rezervasyonun hesabınıza ekleyebilmesi için giriş yapmanız gerekmektedir. Bu ayrıca verilen e-posta adresini kullanmaya yetkili olduğunuzu garanti eder." );

jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'Şifrenizi bilmiyorsanız size bir şifre sıfırlama e-postası gönderebiliriz. Lütfen şifrenizi sıfırlamak için bu e-postadaki talimatları izleyin.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Şifrenizi mi unuttunuz?');

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Adını anonimleştir?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'İnceleme sırasında adınızı anonimleştirmeyi seçerseniz, bunun yerine baş harflerinizi kullanırız.');
jr_define('ANONYMOUS', 'Anonim');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' dedi ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Bu incelemeye yanıt verin');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Bu yoruma yanıtınızı buraya yazın.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Cevabınız');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Ana inceleme');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'İnceleme yanıtı kaydedildi');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'İnceleme yanıtı göndermeden önce aşağıdakileri okumalısınız. Bir yanıt göndererek bu hüküm ve koşulları kabul ettiğinizi onaylamış olursunuz.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'İnceleme yanıtı için yönergelerimiz nelerdir?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Mülkünüzün incelemesine yanıt veriyorsunuz. Yanıtınızı ticari bir anlaşmazlık süreci olarak <em>kullanmamalısınız</em>. Bir incelemeyi bildirmeniz gerekiyorsa, "Rapor" seçeneğini kullanmalısınız. Bu inceleme yanıt sayfasında değil, listedeki Gözden Geçir" düğmesi.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Cevabınızı bıraktıktan sonra düzenleyemezsiniz.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'İzin Verildi ve Teşvik Edildi');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li>İncelemeye verilen tam yanıt.</li>
    <li>Nezaket ve Dürüstlük.</li>
    <li>İnceleyicinin sorunlarına makul yanıtlar (unutmayın, başkaları da benzer sorunlar yaşıyor olabilir, ancak inceleme yayınlama fırsatını kullanmadı).</li>
    <li>Konukları sorunları çözmek için sizinle doğrudan iletişime geçmesi için teşvik edin.
    <li>Gelecekteki konukların yanıtınızı göreceğini daima unutmayın. Her zaman profesyonel olmaya özen gösterin.</li>
</ul>
');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'İzin verilmez');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li>Ticari anlaşmazlıklar.</li>
    <li>İnceleyiciye veya Diğerlerine Sorular.</li>
    <li>Şüpheli Dil (küfür dahil).</li>
</ul>
');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Son çalıştırma');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Program');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Fatura numaraları');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Özel fatura numaraları kullanılsın mı?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Sistemi özel fatura numaralarını kullanacak şekilde yapılandırabilirsiniz. Yalnızca yeni faturalar etkilenecektir.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Başlangıç ​​numarası');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Sayılar ardışık olarak oluşturulur. İlk sayı ne olmalıdır?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Fatura numarası hangi formatta olmalıdır?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Fatura numarası biçimini buradan yapılandırın. Bir biçim {N}/{D} veya {N}/{Y} gibi görünebilir, burada N otomatik olarak oluşturulan sayıdır, D = YYYYYMMDD biçimindeki tarih ( 20190131) veya Y = YYYY (2019). Kıvrımlı parantez içine alınmayan diğer alfa sayısal karakterler olduğu gibi bırakılacak, bu nedenle {N}/{D}-L gibi görünen bir kalıp, fatura numarası (21) ile sonuçlanacaktır. 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Ek Ücret');
jr_define('_JOMRES_SURCHARGE_DESC', 'Rezerve edildiğinde odaya eklenecek olan ek ücret (günlük hesaplanmıştır)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Site çapında etiketlere öncelik verin?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Etiket düzenleme veya çeviri dil dosyası dizeleri sayfalarında kaydedilen özel metinler "site genelinde" etiketler olarak kabul edilir. Mülk yöneticileri ayrıca ön uçtaki etiket düzenleme özelliğini kullanarak etiketleri her mülk için özelleştirebilir. Bu, bir mülk yöneticisinin mülkü için farklı metinlere sahip olması, mülkün sitedeki diğer tüm mülklerden farklı olması durumunda yararlıdır.<br/> Sistem etiket metinlerini ararken, site genelindeki metinleri mülke göre önceliklendirecektir. belirli metinler, yani o etiket için site çapında bir metin varsa, sistem önce onu seçecektir. Bu seçeneği Hayır olarak ayarlarsanız, sistem site genelindeki metinlere göre özelliğe özel metinlere öncelik verir.');

jr_define('_JOMRES_REFERRER', 'Yönlendiren');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Beyaz listeye alındığında bu değiştirilebilir, bu nedenle "Dünyanın en iyi rezervasyon sitesi" sitesi bunu "WBBS" veya benzeri olarak değiştirir.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Kütüphane Paketleri');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Satıcı ve Düğüm Modülleri Jomres için ayrı (ücretsiz) paketlerdir. Paketleri bu sayfadan yeniden kurabilirsiniz.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Kitaplık paketlerini yeniden kurun');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Hala bazı mülkler tarafından kullanıldığı için mülk türü silinemiyor. Bunu silmeye çalışmadan önce bu özellikleri başka bir mülk türüyle değiştirmelisiniz. Silinmeyi önleyen mülk UID\'leri : ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Rastgele e-posta adresleri');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Rastgele E-postalar Teklif Edin');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Sistemin kontrol panelindeki Hızlı Rezervasyon açılır penceresinden rastgele e-posta adresleri oluşturmasına izin verebilirsiniz. Bu, yöneticilerin ve resepsiyonistlerin e-posta adresleri olmayan misafirler için rezervasyon oluşturmalarına olanak tanır, çalışması amaçlanmıştır Bu rastgele e-postaların asla gerçek iletişim için kullanılmayacağını anlayan çok sayıda resepsiyonist/yönetici bulunan siteler için zaman kazandıran amaç, Jomres\'te tüm konukların e-posta adreslerine sahip olması gerektiği gerçeğini ortadan kaldırmaktır. sonraki alan.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Rastgele E-posta Alan Adı');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Bu, gmail veya görünüm gibi normal bir e-posta alanı olmamalıdır. Bunun yerine, kendi alanınız veya "sitem.emails" gibi tamamen başka bir alan olabilir');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Yükleme alanı');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'Kullanıcı rolü yok');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Resepsiyonist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Mülk Yöneticisi');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Süper Mülk Yöneticisi');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Askıya alındı');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'CMS\'den silindi');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'Jomres\'i beğendiyseniz, lütfen bu sitelerden birine yorum bırakmayı düşünün');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'Ben iyi bir insanım, zaten bir inceleme bıraktım');

jr_define('_LICENCE_PROMPT_DEAR', 'Sevgili');
jr_define('_LICENCE_EXPIRED', ', Jomres lisans anahtarınızın süresi doldu, bu nedenle bu harika özellikleri ve avantajları kaçırıyorsunuz! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Eklenti güncellemeleri ve yeni eklenti sürümleri');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Yalnızca özel üyelere E-posta/Bilet desteği');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Endişesiz Jomres Core güncellemeleri');
jr_define('_LICENCE_EXPIRED_POST', 'Sorunsuz ödeme çözümleri için bize bağlanın ve tüm eklentilere ve üyelere özel destek hizmetlerine erişin.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Tüm eklentilere şimdi erişin!');

jr_define('_LICENCE_INVALID_KEY', 'Maalesef geçerli bir Jomres lisans anahtarı kullanmıyorsunuz, bu nedenle bu harika özellikleri ve avantajları kaçırıyorsunuz!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Jomres işlevselliğini büyük ölçüde genişleten eklentiler</a>');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Yalnızca özel üyelere E-posta/Bilet desteği');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Endişesiz Jomres Core güncellemeleri');
jr_define('_LICENCE_INVALID_POST', 'Sorunsuz ödeme çözümleri için bize bağlanın ve tüm eklentilere ve üyelere özel destek hizmetlerine erişin.');
jr_define('_LICENCE_INVALID_START', 'Tüm eklentilere şimdi erişin!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Kullanıcılar');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Komisyon');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Abonelikler');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Faturalar');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Çeviriler');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Araçlar');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Raporlar');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Ayarlar');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Yardım');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Sistemdeki toplam özellikler');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Yayınlanan özellikler');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Yayınlanmamış özellikler');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Onaylanan özellikler');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Onay gerektiren özellikler');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Toplam incelemeler');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Yayınlanmamış incelemeler');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Raporları gözden geçir');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres Sistem Bilgisi');

jr_define('_JOMRES_PROPERTYPE_UNPUBLISHED_SANITY_CHECK', "Bu mülkün mülk türü yayınlanmadı, arama sonuçlarında görünmeyebilir. Mülk türünü yayınlamak için lütfen site yöneticisi ile iletişime geçin veya Mülkü Düzenle sayfasında mülk türünü değiştirin.");
jr_define('_JOMRES_PROPERTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Mülk türünüzü güncelleyin');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Gelir (ödenen tutarlar)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Özellik özelliği silinemiyor "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" çünkü aşağıdaki özellikler tarafından kullanılıyor: ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API testi');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Bu sayfa Jomres\'teki yerleşik işlevselliği kullanarak REST API\'sinin temel bir testini gerçekleştirir. Geçerli bir yanıt alıp almadığını görmek için Jomres REST API\'sini çağırır.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Sunucu yanıtın geçerli olup olmadığını görmek için bu URL\'yi aradı: ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Sayfa şu yanıtı aldı:');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Test beklendiği gibi gitti, muhtemelen İnternet\'in geri kalanından REST API istekleri almakta herhangi bir sorun yaşamayacaksınız.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Test başarısız oldu, Yanıt alanına bakın, çok fazla html gibi görünüyorsa veya bir 404 mesajı aldıysanız, sunucunuz çağrıları başka bir url\'ye yönlendiriyor. Bu, API almanızı engelleyecektir. aramalar.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Sendikasyon testi');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Jomres App sunucusu tüm Jomres sitelerinin bir listesini tutar. Bu, bir sendikasyon ağı oluşturmamızı sağlar. Bu ağ, kullanıcılarımızın diğer sitelerdeki özellikleri kendi sitelerinde görüntülemelerine izin vermek için tasarlanmıştır ve yararlıdır, özellikle yeni siteler için, internette bir SEO varlığı oluşturmak. Amaç, tüm Jomres sitelerinin birlikte çalışması, ağda güven oluşturmasıdır. Bu hizmet için herhangi bir ücret alınmaz.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Siteniz şu anda sendikasyon ağının bir parçası olan Jomres Uygulama sunucusunda listelenmiyor. Bu sunucu sonraki 6 sayfa yüklendiğinde bu sunucuyu tekrar ağa eklemeyi deneyecek. birkaç sayfa yüklenir, bu değişmez, lütfen yukarıdaki bağlantı testinin testleri geçtiğini kontrol edin.Not, localhost sunucuları ağa eklenemez.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Tebrikler, sunucunuz Jomres Uygulama sunucusunda listeleniyor.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Sendikasyon mülkleri');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'İşte mülk ağımızdaki diğer bazı mülkler');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Sendikasyon istatistikleri');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Tebrikler, sunucunuz Jomres Sendikasyon Ağı\'nda listeleniyor. Mülkleriniz, henüz gösterilmiyorsa yakında diğer Jomres sitelerinde görünmeye başlayacak.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Kurulumunuz Jomres Sendikasyon Ağı\'nın bir parçası değil, bu nedenle mülkünüz/ürünleriniz diğer Jomres tabanlı sitelerde gösterilmiyor ve bu ücretsiz reklamdan yararlanamazsınız.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Aktif Jomres kurulumları:');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Sitelerinde Jomres Dağıtım Ağı özelliklerini paylaşan Jomres kurulumlarının toplam sayısı.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Toplam Özellikler :');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Bu, JSN\'de bulunan özelliklerin sayısıdır.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Toplam Mülk görüntülenir: ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Toplamda, bir Jomres mülküne başka bir Jomres tabanlı siteden bağlantı verildiği tüm zamanlar.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'Jomres Sendika Ağı (JSN), tüm Jomres kullanıcıları tarafından kullanılabilen ücretsiz bir özelliktir. Amacı, mülklerinizin diğer Jomres tabanlı sitelerde ücretsiz reklamını yapmaktır. Amaç, size yardımcı olmaktır. sitenizi hızlı bir şekilde kuruyor, ücretsiz reklam sunuyorsunuz, böylece mülkleriniz, arama motorları tarafından zaten iyi bilinen yüksek güvenilirliğe sahip, alaka düzeyi yüksek web sitelerine bağlı olduklarından tanınıyor ve güveniliyor. Şuna bakın <a href="https: //www.jomres.net/features/jomres-syndication-network" target="_blank">web sitemizdeki makale</a> ve <a href="https://www.jomres.net/manual/developers- Daha fazla bilgi için guide-2/387-jomres-syndication-network" target="_blank">kılavuz</a>.');


jr_define('GUEST_PROFILE_INFORMATION', 'Bu, misafir profili verilerinizdir, bu sembollü alanlar <i class="fa fa-users" aria-hidden="true"></i>
herkes tarafından görülebilirken, bu simgeye sahip alanlar <i class="fa fa-user-secret" aria-hidden="true"></i> yalnızca siz, ana bilgisayarlarınız ve site yöneticileriniz tarafından görülebilir.<br/> <br/>Ev sahipleri, yalnızca kendileriyle önceden bir rezervasyon oluşturduysanız özel bilgileri görebilir.<br/><br/>Bilgileriniz güvenli bir şekilde şifrelenir ve AES-256 şifrelemesi kullanılarak veritabanımızda saklanır.');

jr_define('GUEST_PROFILE_OPTIONAL', 'Bu alanlar isteğe bağlıdır, ancak ev sahipleri buradaki bilgileri size güvenip güvenemeyeceklerini belirlemek için kullanabilirler, bu nedenle bilgileri eklemek daha iyidir. uygun olmadığınızı veya biyografinizin yeterli bilgi içermediğini düşünürlerse sizi geri çevirebilirler.');
 
jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Ehliyet');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Pasaport numarası');
jr_define('GUEST_PROFILE_IBAN', 'IBAN numarası');
jr_define('GUEST_PROFILE_ABOUT_ME', 'Hakkımda');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'Bu "Hakkımda" bölümü herkes tarafından görüntülenebilir, bu nedenle özel bilgi girmeyin. Bununla birlikte, tutkularınız, neler paylaştığınız gibi rahat hissettiğiniz kadar paylaşmaya çalışın. geçiminizi sağlamak, hobileriniz vb. Biraz caz vermek için İşaretleme\'yi kullanabilirsiniz. Ev sahipleri, özellikleri konusunda size güvenebileceklerini hissetmek isteyeceklerdir. Resminizin köpeğinizin değil, sizin gerçek bir resminiz olduğundan emin olun. veya araba (evet çocuklar, sizinle konuşuyoruz!)');

jr_define('GUEST_PROFILE_PREFERENCES', 'Erişim kolaylığı gereksinimleri gibi özel gereksinimlerinizi buraya girin. Bunlar genel profilinizde gösterilmeyecek ancak rezervasyon yaptığınızda rezervasyon bilgilerine eklenecektir.');

jr_define('VIEW_HOST_PROFILE', 'Host\'s profile');

jr_define('GUEST_PROFILE_TITLE', 'Misafir profili');
jr_define('GUEST_PROFILE_TITLE_MY', 'Profilim');

jr_define('GUEST_PROFILE_WELCOME', 'Merhaba, size biraz kendimden bahsedeyim.');
jr_define('GUEST_PROFILE_MY_NAME', 'Benim adım ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' ve ben \'den geliyorum');
jr_define('GUEST_PROFILE_IN', ' içindeki bölge');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'Özel bilgilerim');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Misafir ve ev sahibi bilgilerini doğrulamak için elimizden gelenin en iyisini yapıyoruz, ancak bu kişinin güvenilir olup olmadığına kendiniz karar vermeli ve gerekli özeni göstermelisiniz.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'Özelliklerim');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'İncelemelerim');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Bu özellik hakkında şunu söyledim: ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Bu mülke puan verdim: ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'İncelemelerim');
jr_define('GUEST_PROFILE_OF_ME', 'Başkaları benim hakkımda ne diyor');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'Bu sunucu benim hakkımda ne dedi');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Misafiri incele');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Bu misafir hakkındaki yorumum');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'İşte heyecanı artıracak bazı örnek konuk yorumları : <br/>

<ul>
<li>(misafir adı) ev sahipliği yapmak bir zevkti! Alanı temiz bıraktılar ve hafta sonu boyunca sessiz kaldılar. Sorunsuz bir iletişimleri vardı ve tekrar benimle kalmalarını dört gözle bekliyorum!</li>
    <li>(misafir adı) sahip olmayı sevdim çünkü onlar mekana saygılı davranabildiler, iyi vakit geçirdiler ve bölgenin tadını çıkardılar. Alanı kiralama konusunda harikaydılar ve umarım onları tekrar ağırlayabilirim.</li>
    <li>Ev kurallarımın tümüne (misafir adı) riayet edildi ve kolaylıkla girip çıkabildiler. Saygılı ve sessiz oldukları için orada olmalarını sevdim. Onları başkalarına şiddetle tavsiye ediyorum!</li>
</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Üzgünüm, o kullanıcıyı bulamıyorum. Büyük ihtimalle hesap bilgilerini henüz doldurmamışlardır.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Misafir');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Ana Bilgisayar');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Yönetici');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres, Bootstrap çerçevesi üzerine kurulmuştur, bu yüzden onu Bootstrap tabanlı bir tema üzerinde kullanmalısınız. Bootstrap 3 tabanlı bir temayı öneriyoruz. Bir temaya erişiminiz yoksa, kullanmanızı öneririz. <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank" yapabileceğiniz Wordpress için Jomres Leohtian teması ">buradan indirin.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'No Show Olarak İşaretle');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Rezervasyon No Show olarak işaretlendi');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Rezervasyonlar');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'Gösterim Yok');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'Bu kullanıcı için JSN istatistikleri');

jr_define('BOOKING_NOSHOW_INFO', 'Rezervasyon ve No Show bilgisi rezervasyon sırasında Jomres Syndicate Network\'ten alınır. Anonimleştirilmiş verilerden alınır ve bu konuğun rezervasyonu yerine getirmeme riski olup olmadığına karar vermek için sizin tarafınızdan kullanılabilir. sistem verilerin bilinmediğini bildiriyor, bunun nedeni muhtemelen bu sistemin ağda tanınmamasıdır.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Bilinmiyor');

jr_define('CMF_CONFIG_TITLE', 'Kanal Yönetim Çerçevesi');
jr_define('CMF_CONFIG_KEY', 'Kanal Yönetim Çerçeve Anahtarı');
jr_define('CMF_CONFIG_KEY_DESC', 'Kanal Yönetimi Çerçevesi lisans anahtarı. Kanal Yönetimi Çerçevesi eklentilerini indirebilmek için bu anahtarı sağlamanız gerekecek.');

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Mülkünüz onaylanmadı');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Mülkünüz onaylanmadı. Bunun yanlışlıkla yapıldığını düşünüyorsanız lütfen bizimle iletişime geçin.");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD',"Bu bir Çocuk misafir tipi mi?");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC',"Bu misafir tipi bir Alt misafir tipi olarak sınıflandırılacaksa bunu Evet olarak ayarlayın.");

jr_define('_JOMRES_GUESTTYPES_INTRO',"Kişi başı gecelik ücret almak istiyorsanız bazı misafir tipleri oluşturmanız gerekecektir.");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS',"İhtiyacınız olduğu kadar misafir tipi oluşturabilirsiniz, 'Yetişkin' adında sadece bir misafir tipi oluşturarak başlayın. Tüm ayarları varsayılan değerlerinde bırakın. Ardından, örneğin isterseniz 12 yaşından küçük çocuklara %50 indirim yapın, yeni bir misafir tipi oluşturup buna '12 yaşından küçük çocuklar' adını verin.'Fark ekle?' seçeneğini - (negatif) olarak ayarlayın ve 'Varyans'ı 50'ye ayarlayın. çocuklar bir rezervasyona eklendiğinde, oda ücretinin %50'si alınır. " );

jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES',"Fiyatları manuel olarak ayarlayın");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS',"Minimum gece sayısını manuel olarak ayarlayın");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS',"Minimum gece sayısını belirleyin");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW',"Haftanın gününe göre <em>gecelik fiyatı</em> ayarlayın");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES',"Tarih aralığına göre <em>gecelik fiyatı</em> ayarlayın");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS',"Tarih aralığına göre <em>minimum geceyi</em> ayarla");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES',"Tarih seçiciler ve fiyat girişi, belirli bir tarih aralığı için bir fiyat belirlemenizi sağlar. Bir başlangıç ​​ve bitiş tarihi seçin, bir fiyat girin ve Gecelik fiyatı ayarla düğmesine tıklayın.");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS',"Tarih seçiciler ve minimum gece girişi, belirli bir tarih aralığı için minimum geceler için bir değer belirlemenize izin verir. Bir başlangıç ​​ve bitiş tarihi seçin, minimum geceler için bir sayı girin ve 'Ayarla'yı tıklayın. minimum gece'.");

jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO',"Bireysel tarihler için fiyatların ayarlanması, bireysel tarihler için minimum gecelerin ayarlanması arasında geçiş yapmak için bu açılır menüyü kullanın. <em>haftanın gününe göre</em> seçicisini, <em>tarihe göre kullanabilirsiniz. aralık</em> seçici veya tarihleri ​​manuel olarak düzenleyerek fiyatları/minimum geceyi ayarlayın.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT',"Bireysel tarihler için fiyatların ayarlanması ile bireysel tarihler için minimum gecelerin ayarlanması arasında geçiş yapmak için bu açılır menüyü kullanın. <em>tarih aralığına göre</em> seçiciyi kullanabilir veya fiyatları/minimum geceyi tarihleri ​​manuel olarak düzenleme.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR',"Fiyatları veya minimum gece sayısını belirleyin");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW',"Haftanın gününe göre <em>minimum geceler</em> ayarlayın");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO',"Haftanın günü alanları, haftanın belirli bir günü için minimum gece sayısı belirlemenize izin verir, haftanın günü düğmesine tıkladığınızda haftanın tüm günleri o minimum gece ayarına ayarlanır. ");


jr_define('_JOMRES_MICROMANAGE_MANUALLY',"Fiyatları manuel olarak ayarlayın/minimum geceler");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES',"Fiyatları Belirle");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS',"Minimum gece sayısını belirleyin");

jr_define('_JOMRES_MICROMANAGE_PRICE',"Gecelik");
jr_define('_JOMRES_MICROMANAGE_MINDAYS',"Minimum geceler");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS',"Maksimum geceler");

jr_define('_JOMRES_MICROMANAGE_INTRO',"Buradan mülkünüzdeki oda tiplerine ait tarifeleri oluşturabilirsiniz. ");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS',"En sık kullanılan seçenekler");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON',"Talimatlar");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS',"Farklı sayıda misafir için farklı fiyatlar eklemek istiyorsanız, <em>her oda tipi için birden fazla tarife oluşturabilir</em> ve bu tarifelerde farklı min/maks misafir değerlerine sahip olabilirsiniz. ");

jr_define('_JOMRES_MICROMANAGE_INFO',"Tarifeye bir isim verin, maksimum gece sayısını, minimum ve maksimum misafir sayısını tarife sunulmadan önce rezervasyon formunda tanımlayın.<br/><br/> Kullanım Tarih seçme paneli, belirli bir tarih aralığına fiyat ve minimum gece ayarı eklemek veya girişleri doğrudan düzenlemek için.Tarifenin belirli tarihlerde sunulmasını istemiyorsanız, fiyatı 0 (sıfır) <br/><br/> Farklı tarihlerde farklı minimum gecelere sahip olabilirsiniz, bu nedenle festival/konferans haftalarında daha uzun rezervasyonlar istiyorsanız minimum gece sayısını yalnızca bu dönemlerde daha yüksek olacak şekilde ayarlayabilirsiniz.<br/ ><br/>Kişi Başına Pight (PPPN) alıyorsanız Ayarlar > Tesis Konfigürasyonu > Tarifeler ve Para Birimi sekmesinden bu ayarı etkinleştirebilir, ardından Ayarlar > Misafir Tipleri'nde istediğiniz misafir tiplerini oluşturabilirsiniz.");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS',"Ekstra seçenekler");
jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS',"Bunlar, çok yaygın olarak kullanılmayan, ancak yine de size sunulan ek seçeneklerdir. <br/><strong> PPPN'yi Yoksay</strong> Kişi Başına Gecelik Yoksay anlamına gelir. Birkaç farklı tarifeniz olabilir. aynı oda tipi için, örneğin biri gecelik kişi başı ücretlendirilir, diğeri ise ücretlendirilmez.<br/><strong>Hafta sonlarına izin ver</strong> Hafta Sonlarına İzin Ver seçeneği size yalnızca bir tarife yapma seçeneği sunar. örneğin iş seyahatinde olanlar için özel bir tarife istiyorsanız hafta içi kullanılabilir.Bu durumda seçeneği Hayır ve minimum gece sayısını 1 ve maksimum gece sayısını en fazla 5 olarak ayarlarsınız. <br/><strong>Hafta sonları yalnızca</strong> Yalnızca Hafta Sonları seçeneği, Hafta Sonlarına İzin Ver seçeneğinin tersidir. Hafta sonu olarak düşündüğünüz günler Mülk Yapılandırma ayarlarınızda yapılandırılabilir. Bu size, isteyebileceğiniz yalnızca bir hafta sonu ücreti tanımlama olanağı verir. özel etkinlikler için teklif.<br/><strong>Check-in Haftanın günü </strong> Bu seçenek, check-in'i yalnızca haftanın belirli günlerinde olmaya zorlama olanağı sağlar ve en iyi şekilde Tesis Yapılandırması > Rezervasyonlar sekmesi > Sabit dönemler seçenekleriyle birlikte kullanılır. Kullanıcıların çoğu, bu seçeneği Tümü olarak bırakmak isteyecektir.<br/>Son iki seçenek, <strong>Minimum oda zaten seçili</strong> ve <strong>Maksimum oda zaten seçili</strong> çok özeldir ve son derece karmaşık tarifelere sahip mülkler için kullanışlıdır. <em>Belirli bir ihtiyacınız yoksa, bu seçenekleri olduğu gibi bırakmalısınız.</em> Bu tarifeyi yalnızca misafirin rezervasyon formunda N sayıda oda seçtiğinde sunulmasını istiyorsanız kullanın, örneğin bu seçeneklerin varsayılan olarak bırakıldığı bir temel tarife ve minimum oda seçeneğinin 1 olarak ayarlandığı ikinci bir tarifeniz olabilir, bu ikinci tarife oda seçildikten sonra rezervasyon formunda sunulacaktır." );

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE',"Aynı oda tipi için birden fazla tarife oluşturabilirsiniz, böylece minimum/maksimum 1 - 7 arası tek bir tarife ve minimum gün sayısı 7, maksimum gün sayısı 14 ve Bu, ihtiyacınız kadar basit veya karmaşık fiyatlandırma planları oluşturmanıza olanak tanır. Ayrıca, farklı koşullarla birden fazla tarife oluşturmanıza olanak tanır, böylece Oda & Kahvaltı için fiyatın daha düşük olduğu ikinci bir tarife setine sahip olabilirsiniz ve Yatak, Kahvaltı ve Akşam Yemeği için başka bir dizi daha pahalı tarife.");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES',"Yalnızca tarih seçme günlerini ayarlayın");
jr_define('_JOMRES_PROPERTY_HCATEGORIES', 'Mülkiyet Kategorileri');
jr_define( '_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Mülk Kategorisini Düzenle');
jr_define('_JOMRES_STOP_READTHISFIRST1',"Dur!");
jr_define('_JOMRES_STOP_READTHISFIRST2',"Jomres'i kurduğunuz için teşekkürler");
jr_define('_JOMRES_STOP_READTHISFIRST3',"Mülk yönetimi, yönetici alanında değil, halka açık sayfalarda gerçekleştirilir.");
jr_define('_JOMRES_STOP_READTHISFIRST4',"Jomres hakkında bilginiz yoksa lütfen Yardım bölümü > Başlarken sayfasını ziyaret edin.");

jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE',"Jomres Sendikasına Katılın");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC',"Sitenizi kurduktan ve ziyaretçi almaya hazır olduktan sonra, Jomres.net sendikasına katılın ve mülklerinizin diğer Jomres sitelerinde listelenmesini sağlayın.");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1',"Tarife oluşturabilmeniz için aşağıdaki oda tiplerinden en az birine ihtiyacınız var :");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2',"Ayarlar > Odalar'a gidin ve önce bir oda oluşturun, bunu yaptıktan sonra o oda tipi için bir tarife oluşturabileceksiniz.");

jr_define('JOMRES_PLATFORM',"Jomres Platformu");


jr_define('JOMRES_PLATFORM_CONNECTED',"Bağlandı");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC',"Stripe hesabınızı Jomres Platformuna zaten bağladıysanız bunu Evet olarak ayarlayın.");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID',"Stripe Canlı Hesap numarası");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC',"Bu, Stripe Dashboard'unuzda Ayarlar > Hesap bilgileri altında bulunan ve acct_xxxxxxxxx gibi görünen Stripe Hesap kimliğinizdir. tüm siteler ve zaten bize bağlandınız.Jomres Platformuna bağlanmadıysanız, bilgilerinizi buraya girmeniz yeterli değildir.Bunun yerine lütfen Yardım bölümünün altındaki araç çubuğundaki Bağlanın menü seçeneğini ziyaret edin.İsterseniz ödemeleri test etmek için Site Yapılandırmasının Hata Ayıklama sekmesinde sitenizi Üretimden Geliştirmeye ayarlayın.");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY',"Şerit canlı gizli anahtar");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC','Gizli anahtarlarınızı bulmak için Stripe Dashboard\'unuzda Geliştiriciler > API anahtarlarına gidin. Bunlar sistem tarafından, ödeme formundan döndürülen rezervasyon verilerinin geçerli olduğunu ve rezervasyonu kaydetmeden önce depozitoların ödendiğini doğrulamak için kullanılır. .');

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY',"Şerit testi gizli anahtarı");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC',' ');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standart Tarife Modu');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Uyuyor');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'Bu mülk kaç kişiyi ağırlayabilir?');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Günlük fiyatınızdaki misafir sayısı');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Ekstra yetişkin fiyatı');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Çocuklar');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Kişi başı gecelik mi?');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 gün değiştirici');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', '7 gün ve üzeri rezervasyonlarda günlük fiyat indirimi. İndirimin uygulanmasını istemiyorsanız bu seti sıfır bırakın.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 gün değiştirici');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', '30 gün ve üzeri rezervasyonlarda günlük fiyat indirimi. İndirimin uygulanmasını istemiyorsanız bu seti sıfır bırakın.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Yetişkinler');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', '2 yetişkin için fiyat');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Rezervasyon indirimli ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', ' ile ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', ' çünkü rezervasyon 7 günden fazla.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', ' çünkü rezervasyon 30 günden fazla.');


jr_define('JOMRES_CITY_TAX_HEADING', 'Şehir vergileri');
jr_define('JOMRES_CITY_TAX_VALUE', 'Şehir vergi değeri');
jr_define('JOMRES_CITY_TAX_METHOD', 'Vergi hesaplama yöntemi');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Tek ücret');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Gecelik');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Misafir Başına');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Misafir başına gecelik');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Rezervasyon değeri yüzdesi');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'Temizlik ücreti');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'Temizlik ücreti maliyeti');


jr_define('JOMRES_COMPATABILITY_MODE', 'Uyumluluk özelliği yapılandırma modunu zorla?');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "Uyumluluk özelliği yapılandırma modu birkaç şeyi olmaya zorlar. Jomres'in eski sürümlerinde, mülk yöneticileri hangi tarife düzenleme modunun kullanılacağını seçebilir ve çeşitli diğer ayarlar (bazıları kafa karıştırıcı görünebilir) Uyumluluk yapılandırmasını etkinleştirmek, tüm yeni mülkleri yalnızca fiyatlandırma, alt fiyatlandırma vb. açısından booking.com mülk yapılandırma işlevini modelleyen Standart tarife düzenleme modunu kullanmaya zorlar. 9.22'den sonra oluşturulan kurulumlar için önerilir. .0, bu seçenek Evet olarak ayarlanmalıdır, ancak daha eski kurulumlar için yeni özelliklerin oluşturulduklarında otomatik olarak Uyumluluk moduna ayarlanıp ayarlanmayacağına karar vermek size kalmıştır.");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', '18 yaşından küçük çocukları kabul ediyor musunuz?');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Çocuklara izin veriyorsanız bu seçeneği Evet olarak ayarlayın. Evet ise Ayarlar menüsünde Çocuklarla ilgili ayarları düzenleyebileceğiniz Çocuk Politikaları adlı bir seçeneğiniz olacaktır.");

jr_define('JOMRES_POLICIES_CHILDREN', 'Alt politikalar');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'Çocuklara hangi yaşta izin verilir?');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Çocuk başına, gecelik');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Çocuk başına, konaklama başına');

jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Çocuk oranları');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Yeni çocuk ücreti');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Çocuk ücretini düzenle');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Ücretsiz veya ücretli çocuk fiyatlarınızı buradan oluşturun. Fiyatlar sadece oda tipleri için doluluk seviyeleri oluşturduğunuzda geçerli olacaktır.');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Yaşından itibaren');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Yaş');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'gecelik mi yoksa konaklama başına mı?');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Oran');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Sıfır veya ayarlanmazsa, bu yaş aralığındaki çocuklar ücretsiz olacaktır.');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Giriş yaşı');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Çağlar');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Doluluk seviyeleri');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maksimum yetişkin');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maksimum çocuk');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maksimum doluluk');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Doluluk seviyesini düzenle : ');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Bu oda tipi için doluluk seviyelerini düzenleyin. Bebek karyolasında uyuyan konukları dahil etmeyin (Bunlar Ekstra oluşturularak eklenir) ');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Her ek yetişkin için ne kadar ücret alınmalı?');

jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Ekstra yetişkinler');


jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'Henüz alt ücretleri yapılandırmadınız.');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Çocuk ücret(ler)ini şimdi ayarlayın');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Mülkünüzü çocuklara izin verecek şekilde yapılandırdınız ancak henüz çocuklar için herhangi bir doluluk seviyesi belirlemediniz.');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Doluluk seviyelerini ayarla');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'Bir odayı veya tesis tipinizi her düzenlediğinizde, tesisinizin/odalarınızın doluluk seviyelerini kontrol etmeli ve güncellemelisiniz, çünkü bunlar rezervasyon formunda kabul edilebilecek misafir sayısını etkiler.');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Yetişkinler');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Çocuklar');


jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Yönetici seçenekleri düzeyi');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres, sitenizi yapılandırırken kullanabileceğiniz birçok menü ve yapılandırma seçeneğine sahiptir. Bunların büyük çoğunluğunu asla değiştirmeniz gerekmeyecek, böylece varsayılan olarak gizlenirler. Bu seçenekleri ayarlayarak göstermeyi seçebilirsiniz. Yönetici Seçenekleri seviyesi.Temel seviye, bir siteyi ilk kez kurarken tam olarak neye ihtiyacınız olduğunu gösterir.Ortak seviye, en sık değiştirilen seçenekleri gösterir ve Her şey, yönetici alanındaki tüm olası ayarları ve menü seçeneklerini gösterir. ');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Temel');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Ortak');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Her Şey');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Jomres\'i nasıl kullandığınız hakkında bilgi toplayabilir miyiz?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Jomres\'i nasıl kullandığınız hakkında bilgi toplamak istiyoruz. Kişisel olarak tanımlanabilir hiçbir bilgi saklanmayacak, kullanım anonimleştirilecek ve yalnızca insanların Jomres\'i nasıl kullandığını anlamamıza yardımcı olmak için kullanılacak.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', ' Evet, sorun değil ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', ' Hayır, katılmıyorum');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Birden fazla tesis için rezervasyon alacak mısınız?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres tek veya çok mülklü siteler için kullanılabilir. Sadece bir mülk için rezervasyon alacaksanız, birçok seçenek gereksiz ve kafa karıştırıcı olabilir. Bu ayarı daha sonra Ayarlar > Site\'den değiştirebilirsiniz. Yapılandırma > Portal işlevsellik sekmesi.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', ' Sadece bir özellik');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', ' Birden fazla özellik listeleyeceğim');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Şablonunuz/temanız Bootstrap çerçevesinin hangi sürümünü destekliyor?");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Bootstrap çerçevesinin her sürümü biraz farklı html işaretlemesi gerektirir. Jomres'in her Bootstrap sürümü için bir tane olmak üzere üç Bootstrap uyumlu şablon kümesi vardır. Uygun şablon kümesini kullanmak için yapılandırdığınızdan emin olmalısınız. daha sonra düzen, modals ve menüler gibi çıktılar düzgün çalışmayacaktır.Daha sonra farklı bir Bootstrap sürümü ile bir şablon/tema kullanmaya karar verirseniz, Jomres'in kullanması gereken Bootstrap şablon setini Yönetici > Jomres > Ayarlar bölümünden değiştirebilirsiniz. > Çeşitli sekmesi <br/><br/>Joomla 3 varsayılan olarak Bootstrap 2 ile dağıtılır, Joomla 4 Bootstrap 5 kullanır. Jomres Leohtian şablonu (Joomla) ve teması (Wordpress) Bootstrap 3 kullanır. kendi Bootstrap dosyalarıyla dağıtılır, bu nedenle herhangi bir şüpheniz varsa lütfen şablonunuzun/temanın geliştiricisiyle iletişime geçin.");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Önyükleme 2");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Önyükleme 3 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Önyükleme 4");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Önyükleme 5");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Ondalık sayıları çıktı fiyatlarından çıkarınız mı?');

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Grubu düzeltmeye göre uygula?');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Bazı mysql kurulumları Liste Özellikleri, Misafirleri Listele ve Faturaları Listele sayfasındaki Jomres Sorguları ile ilgili bir soruna sahip olabilir. Bu sayfalar X / Y sonuçlarını gösterdiğini söylüyor ancak listede hiçbir şey görünmüyorsa, o zaman ayar Bu Evet seçeneği sorunu çözebilir.Paylaşılan barındırmadaysanız ve barındırma hizmeti mysql kullanıcınızın "SET GLOBAL sql_mode=" komutunu vermesine izin vermiyorsa, sorun çözülmez. ');
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Bu bir kanal özelliğidir, yerel olarak yönetilemez, özelliğin uzaktan yönetim bağlantısını bulmak için kanal yönetim çerçevesi sayfasını ziyaret edin');

jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", " Temada Bootstrap yok ");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Sosyal medya bağlantıları');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Sosyal medya hesap adlarınızı buraya yazın, örneğin "jomres", url\'nin tamamı değil');
jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Kuruluşunuzun konuştuğu dillerin virgülle ayrılmış listesi');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Kuruluş logonuzun URL\'si');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres güncellendi');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Jomres\'in yeni bir sürümü mevcut. Güncellemeler işlevselliği geliştirdiğinden ve kurulumunuzun güvenli kalmasını sağladığından Jomres\'i kullanmaya devam etmeden önce güncelleme yapmalısınız.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Jomres\'i şimdi güncelleyin');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Eklenti güncellemeleri');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Eklenti yöneticisinde mevcut eklentilerin yeni sürümleri var. Güncellemeler işlevselliği geliştirdiğinden ve kurulumunuzun güvenli kalmasını sağladığından Jomres\'i kullanmaya devam etmeden önce tüm eklentileri güncellemelisiniz.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Güncellenecek eklentiler');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Lisansınız artık geçerli değilse, web sitemizden yeni bir lisans anahtarı alabilirsiniz.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Eklentileri güncelleyin');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Yeni anahtar al');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Yeni anahtarı kaydet');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Mülk tipi resimler");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE',"Rezervasyon için yardıma mı ihtiyacınız var?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB',"Tatil ihtiyaçlarınız için size yardımcı olacak temsilcilerimizden biriyle görüşmek için aşağıdaki numaradan müşteri hizmetleri ekibimizi arayın.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE',"Neden bizimle rezervasyon yaptırın?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE',"En iyi rezervasyon fiyatlarını sunuyoruz");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1',"Şu anda piyasadaki en iyi fiyatlı mülklere sahibiz.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2',"Rezervasyon ücreti yok. Tasarruf edin!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE',"Mükemmel mülk seçimi");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS'," özellikler");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS'," misafir değerlendirmeleri");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE',"Her Zaman Buradayız");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "Her zaman bizi arayın veya e-posta gönderin");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT',"Seyahatiniz öncesinde, sırasında ve sonrasında 24 saat destek alın");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA',"Sosyal medya");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD',"Bizi sosyal medyada bulun");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Üstün");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Olağanüstü");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Muhteşem");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Süper");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Harika");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Çok iyi");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "İyi");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Yeni Liste");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "İndirimli");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Nereye gitmek istiyorsunuz?');
	jr_define('DATA_SOURCES_TITLE', "Veri kaynaklarını yenile");
	jr_define( 'DATA_SOURCES_TITLE_INFO', "Veri kaynakları yenilendi. Veri kaynakları, arama widget'ındaki otomatik tamamlama giriş alanları tarafından kullanılır ve genellikle otomatik olarak güncellenir, ancak bu sayfa gerektiğinde verileri manuel olarak güncellemeye zorlar." );

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "Token isteği göndermek için isteği bu url'ye gönderin");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "Ana görünüm özelliği komut dosyası");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "Görüntülenecek mülkün uid'i");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "Varsayılan şablon property_details.html'dir, bu argümanla gösterilecek farklı bir özellik detayları şablonu tanımlayabilirsiniz.");
