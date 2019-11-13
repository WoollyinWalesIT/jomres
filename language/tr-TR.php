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
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
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
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Bizimle rezervasyon yapmış olduğunuz için teşekkür eder, konaklamanızın tadını çıkarmanızı dileriz.<br><br> <b>Lütfen bunun bir ön rezervasyon olduğunu ve bizden onay mektubunu alana kadar teyit edilmeyeceğini unutmayın.</center>');
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
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their arrival date will be restored to todays date');
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
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Not: Global Düzenleme modu etkinse Düzenleme Modu\'nu kullanıyorsunuz.Bu, Global Düzenleme modunun ne anlama geldiğini anlarsanız iyi olur, ancak kendinize sorun çıkarmayacağınız halde emin değilseniz Jomres\'ı bu şekilde kullanmanız gerekirse, lütfen <a href = "http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" adresine bakın. "Target =" _ blank "> düzenleme modu el kitabı sayfasını </a> ziyaret edin.');
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
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Para birimi kodunu otomatik olarak ayarlamak için açılır menü Jomres, ziyaretçinin bulunduğu ülkeyi tespit etmek için IPinfoDB adlı ücretsiz bir hizmet kullanabilir, ancak bir API anahtarı için <a href = "http: //ipinfodb.com/register.php "target =" _ blank "> IPinfoDB </a> önce. ');
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
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Jomres\'a hoş geldiniz, rezervasyon sistemini beğeneceğinizi umuyoruz.Jomres Starter, Business veya Enterprise lisansını satın almak isterseniz <a href = "http: // www. Jomres.net/prices "target =" _ blank "> Sitenizi ziyaret ederek nasıl yeni sürüme geçebileceğinizi öğrenin. ');
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
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Bununla birlikte, bu ayarlar, bağlandıkları komut dosyalarını kontrol etmez, örneğin, <i> 00009user_option_03_search </ i> değerini 'Yönetici' olarak belirlerseniz, Jomres'i bilen bir kullanıcı hala Tarayıcınızın adres çubuğuna http://www.domain.com/index.php?option=com_jomres&task=search girerek j06000search.class.php'yi çağırın.Bu, Menü Erişimi kontrolü yalnızca neyin görülebileceğini kontrol ettiği için kasıtlıdır. Jomres Ana Menüsü: Sıkı kontrollere ihtiyacınız varsa, Site Yapılandırması -> Tam Erişim Kontrolü seçeneğini Evet'e getirin ve Menü Erişim Kontrolü seçeneğine tekrar bakın. ");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Tam Erişim denetimi');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>Bu özellik yalnızca ileri düzey kullanıcılar içindir. Bunun ne için olduğunu bilmiyorsanız ve kullanmak için özel bir sebebiniz yoksa lütfen Site Yapılandırması'na geri dönün ve Tam Erişimi Hayır seçeneğine kontrol seçeneği. </ Strong> <br/>
	Bu özellik, hangi minicomponentlere kimlerin erişebileceğini kontrol etmenizi sağlar (bazı istisnalar sisteme zor şekilde kodlanmıştır). Bir komut dosyası adının yanındaki erişim düzeyi Varsayılan olarak ayarlanırsa Tam Erişim Kontrolü seçeneği Evet olarak ayarlandığında <strong> herkes </ strong> erişememesi gereken komut dosyalarına erişebilir, dolayısıyla bu dosyayı kullanmayı düşünüyorsanız Özelliği burada listelenen <strong> her </ strong> Jomres minikomponenti için erişim kontrol seviyesini ayarlamanız gerekir ZORUNLU. Bu minicomponent'lerin ne yaptıklarını bilmiyorsanız, o zaman bu özelliği hiç kullanmamanızı şiddetle tavsiye ederiz. <br/>
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
jr_define('_ INVOICE_TRANSACTIONS', "İşlemler");
jr_define('_OPENEXCHANGE_API',"Open Exchange Rates API key");
jr_define('_OPENEXCHANGE_API_DESC','To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can register for a free key at https://openexchangerates.org/signup/free (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');
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
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Uyarı, Jomres Site Yapılandırması -> Çeşitli sekmesinde Önyükleme özelliği etkin değil <i> bazı </ i> işlevsellikleri sağlamak için Jomres şu anda eski jQuery UI tabanlı şablonlarını kullanıyor, Ancak birkaç yıldır üzerinde çalışılmamıştır.Jomres şablonlarının (mizanpaj dosyaları) günümüzdeki gelişimi ve geliştirmeleri BootStrap 3 şablon dosyalarından yapılmaktadır.Jomres\'tan en iyi şekilde yararlanabilmek için Bootstrap 3 tabanlı bir yüklemenizi öneririz Wordpress veya Joomla için tema.Bunu yaptıktan sonra Jomres\'ın Site Yapılandırmasında önyükleme şablonlarını etkinleştirebilirsiniz.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Destek anahtarınız geçerlidir, bu lisansın eklenti indirmelerine izin vermediğini unutmayın.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'İptal etmek için rezervasyonları bu bölgeye sürükleyin');
jr_define('_JOMRES_LAT', 'Enlem (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Boylam (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings. <br> Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Bir oda türü oluşturmadan önce, bunun bir otel türü mülkü olup olmadığını veya bir villa türü mülkü olup olmadığını bilmemiz gerekir.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Yeni oda tipleri eklemek için tıklayın');
jr_define("_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES", "Uyarı, oda türlerine sahip olmayan bir veya daha fazla mülk türeviniz. Mülk yöneticilerinin tarifeleri oluşturabilmesi için mülklerin oda tiplerine ihtiyacı var.");
jr_define("_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES", "Yeni Oda Tipleri oluşturmak için yukarıdaki Yeni düğmeyi kullanın.");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_TOURS", "Turlar");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_REALESTATE", "Rezervasyon yok / Gayrimenkul (basit liste)");
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Günlük doyası konumu');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres günlük dosyalarını şurada tutar: '.JOMRES_SYSTEMLOG_PATH." . Burada api anahtarları, sistemle ilgili bilgiler, ödeme bilgileri ve konuk bilgileri gibi hassas bilgiler bulunabileceği için bu konuda website hosting firmanıza başvurmanızı tavsiye ederiz.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a <a href='https://console.developers.google.com/apis/api/maps_backend/overview' target='_blank'>Google Maps key</a> set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres. Once you have your key, you can enter it into Site Configuration > Google map Options tab.");
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
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Araştırılması gereken tarihsel sorunlar site sahiplerine e-postayla gönderildi. Bu, hareket halindeki çok fazla parçaya sahip olduğu için sisteminizin çalışmasına göz kulak olmak için harika olabilir ve hepsini takip etmek zordur. Maalesef, Spider'lar ve Bot'lar sitelerinizi (hatta arkadaşları bile) taramak yanlışlıkla hatalı hataları tetikleyebilir ve aldığınız mesaj sayısının aşırı olmasına neden olabilir. Durum buysa, bu seçeneği Hayır olarak ayarlayın. Jomres, bir günlük dosyaları kümesine ve bir syslog sunucusuna günlük iletileri gönderir (belirli PHP ayarlarınıza izin veriyorsa, lütfen ev sahibinizle iletişime geçmezseniz izin verin). Belirli bir şey arıyorsanız, dosyaları manuel olarak analiz edebilirsiniz (örneğin, bir ağ geçidi geliştiriyorsanız ve gateway_log () işlev çağrısını kullanmak istiyorsanız). Fakat bunu kullanmanız daha iyi bir sonuçtur. Bir şey syslog dosya analizörü gibi. Linux üzerinde geliştiriyorsanız, Windows'da kullanabileceğiniz basit bir araç http://maxbelkov.github.io/visualsyslog/ ise bu durumda sizin için bir sürü araç var. Bu sayfada 'Syslog ana bilgisayarını' olarak ayarlayın. '127.0.0.1' ve 'Bağlantı Noktası' 'nı 514 olarak ayarlayarak bu araçta günlüğe kaydedilen iletileri görürsünüz. ");
jr_define('_JOMRES_FAQ', 'Sıkça sorulan Sorular');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION', 'Giriş');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES', 'Jomres nedir?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES', "Jomres, Joomla ve Wordpress İçerik Yönetim Sistemleri ile çalışan bir otel ve villa rezervasyon sistemidir. Bu tam bir rezervasyon sistemidir, masrafsız \"booking.com\" veya \"airbnb\" gibi düşünün. İstediğiniz kadar çok özellik için benzersiz bir çevrimiçi rezervasyon hizmeti oluşturmanıza izin veren eksiksiz bir araç kitidir. ");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD', 'Kullanıcılar Jomres sitemine kaydolabilir ve kendi özelliklerini ekleyebilir mi?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD', 'Evet. Varsayılan olarak, Jomres kayıtlı kullanıcıların kendi özelliklerini sitenize eklemelerine izin verir. Bunu, gerekirse, Site Yapılandırması> Diğerleri sekmesinden devre dışı bırakabilirsiniz.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES', 'Mülkler');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES', 'Yeni mülk nasıl eklenir?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES', "Jomres kurulduğunda, yönetici kullanıcısı Süper Mülkiyet Yöneticisi olarak yaratılır. CMS'nin ön panelinde (genel sayfalar) yönetici kullanıcısı olarak oturum açın ve buradan yeni özellikler ekleyebilirsiniz. <br/> Yeni bir yönetici eklemek isterseniz Mülk Yöneticileri sayfasında yeni yöneticiler oluşturabilirsiniz, ancak varsayılan olarak (bunu devre dışı bırakabilirsiniz), bir mülk oluşturan kayıtlı kullanıcılar otomatik olarak bir mülk yöneticisi olarak mülk yöneticisi olarak oluşturulur yaratmak. Güvenlik nedenleriyle, diğer yöneticinin mülklerini yönetemezler. Bu, kullanıcıyı Mülk Yöneticileri sayfasındaki Süper Mülk Yöneticisi'ne yükseltmek suretiyle değiştirilebilir.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES', 'Başka bir sistemden mülkleri içe aktarabilir miyim?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES', "Mülkleri içe aktarmanın çeşitli yolları vardır. Mülk İthalat eklentisi, CSV aracılığıyla özellikleri içe aktarmanıza izin verir. Bu, birden fazla özelliği bir kerede içe aktarmanıza izin verir, ancak yalnızca yönetici özelliğidir. Mülk yöneticisi bir Beds24 hesabı içeriyorsa, API anahtarlarını bağladıktan sonra varolan mülkleri oradaki hesaplarından içe aktarabilirler. Başka bir yol da API'yi kullanmaktır, mülkleri eklemek ve kaldırmak için bir özellik bulunur, ancak bu, bu işlevselliği kullanmak için REST API'lerini kullanan bir geliştirici olmanızı gerektirir.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS', 'Rezervasyonları başka bir sistemden aktarabilir miyim??');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS', "Rezervasyonlar, mülk yöneticisinin menüsündeki rezervasyonları içe aktarmak için bir özellik sunan iCal eklentisi aracılığıyla bir mülk yöneticisi tarafından bir mülke aktarılabilir. Ayrıca, bir mülk yöneticisinin bir Beds24 hesabı varsa ve mülkleri Beds24 ile bağlantılıysa, Beds24'te Bir Yeniden Bildir eylemi gerçekleştirebilirler.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES', 'E-posta şablonlarını düzenleyebilir miyim?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES', 'Mülk yöneticileri, e-posta şablonlarını araç çubuklarından Ayarlar> E-posta Şablonları altında düzenleyebilir.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Ödemeler');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS', 'Mülklerin ödemeleri almasına nasıl izin veririm? ');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS', 'Bir ödeme ağ geçidi kurmanız gerekecek. Jomres\'in Paypal veya Stripe\'a bağlanan iki ödeme geçidi var. Aynı zamanda birkaç Offline ağ geçitleri sunar ve iş ortaklarımızdan diğer ödeme ağ geçitleri satın alabilirsiniz.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY', 'Hangi ağ geçidini kullanmalıyım?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY', "Kendi masraflarınız için bir yöneticinin mevduatının bir yüzdesini almak istiyorsanız, Stripe ağ geçidini kullanın. Yapmazsanız ve bunun yerine Abonelik ve / veya komisyon işlevselliğini kullanmayı planlıyorsanız, Paypal ağ geçidini kullanmanız gerekir.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS', 'Bir konuk bir rezervasyon için ödeme yaptığında, parayı kim alır?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS', "Bu, sitenizde ödeme ağ geçitlerini nasıl ayarladığınıza bağlıdır. Paypal'ı kullanıyorsanız, tüm ön ödem ayarlarını geçersiz kılmak üzere yapılandırabilirsiniz; bu, aslında, hesabınızı ödemeleri alan tek hesap haline getirir. Bunu yapmayı seçerseniz, her mülkün Ayarlar> Ağ geçitleri sekmesinde ödeme ağ geçidi hesabını ayarlamanız gerekir. Şerit kullanıyorsanız, mülk yöneticisi hesaplarını sizinle bağlantılandırdığında (daha fazla bilgi için el kitabındaki Şerit belgelerine bakın), tüm fonları alacaksınız, seçerseniz yapılandırabileceğiniz komisyon ücreti alınacaktır. böyle yap.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING', 'Sorun giderme');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL', "Rezervasyon e-postaları gönderilmiyor.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL', "Sistemden e-posta gönderirken sorun yaşıyorsanız, lütfen ana bilgisayarın CMS'nin e-posta ayarlarını kontrol edin. Jomres, e-posta göndermek için Wordpress veya Joomla ayarlarını kullanıyor. Eğer yanılıyorlarsa, Jomres ya e-postalar gönderemez.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Rezervasyon yaptıktan sonra ödeme ağ geçidini göremezsiniz.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Bir Mülk Yöneticisi olarak giriş yapıyorsanız ödeme ağ geçidini görmeyeceksiniz, çünkü kendinize aptalca ödeme yapmazsınız. Rezervasyon yaparken yalnızca yönetici olmayan kullanıcılar ağ geçidini görecektir.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES', 'Jomres lisansı');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'X lisansı satın aldıktan sonra, lisans sona erdikten sonra yenileme satın almak zorunda kaldım mı?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', "Hayır, Bir Starter, Business veya Enterprise lisansını satın aldıysanız, o zaman yazılımı sınırsız kullanmaya devam edebilirsiniz, sihirli bir şekilde sakatlanmaz. Bu kuralın istisnası, bir abonelik satın almanız durumunda. Bir abonelik iptal edildiğinde artık eklentileri kullanamazsınız ve bunları kaldırmanız gerekecek.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED', 'Lisansımın süresi doldu, yine de Jomres\'ı yükseltebilir miyim?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED', "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE', 'What software license is Jomres released under?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE', "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Mülkler');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Nasıl bir mülk yaratabilirim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Yeni bir mülk eklemek için Mülkler> Yeni Mülkiyet\'i tıklayın..');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Mülkün misafirlere nasıl göründüğünü nasıl anlayabilirim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Mülkünüzün konuklara nasıl göründüğünü görmek için Mülkler> Önizleme\'yi tıklayın.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Odaları nasıl ekleyebilirim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Odalar nasıl eklenir Tarife Düzenleme moduna bağlıdır. Normal tarife düzenleme modunda, fiyatları yapılandırdığınızda otomatik olarak eklendiği için oda eklemenize gerek yoktur. Micromanage veya Gelişmiş tarife düzenleme modunu kullanıyorsanız, Ayarlar> Odalar bölümünde oda ekleyebilir, düzenleyebilir ve silebilirsiniz. Oda özelliklerini de yaratabilir ve bu özellikleri bu odalara atayabilirsiniz. Ayrıca, Media Center'ı kullanarak ayrı odalar için resim yükleyebilirsiniz. Oda oluştururken, gerçek dünyadaki odalarınızı mülkünüzde yansıttığından emin olmalısınız; böylece odalarınızı yönetmeyi kolaylaştıracaktır.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Oda fiyatlarını nasıl ayarlayabilirim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Bu tarife düzenleme moduna bağlıdır. Normal Tarife düzenleme modunu (Mülk Yapılandırma> Tarife Düzenleme Modları sekmesi) kullanıyorsanız, sahip olduğunuz oda sayısını, fiyatını, her odanın konaklama kapasitesini ve istediğiniz her kişi sayısını yapılandırabilirsiniz. rezervasyon. Bu mod, gelecek 10 yıl için oda fiyatlarını ayarlamanızı sağlar. <br/> Gelişmiş veya Mikrofon tarife düzenleme modlarını kullanıyorsanız, gelecek yıllar için her gün için oda fiyatlarını ayarlayabilirsiniz. Aynı oda tipi için birden fazla tarifeye sahip olabilirsiniz, örneğin Bed & Breakfast için bir tarife, Bed, Breakfast & Evening için başka bir tarifeye sahip olabilirsiniz. Özel bir ihtiyacınız olmadığı sürece, Micromanage'ı her zaman kullanmanızı öneririz; Gelişmiş aynı şekilde çalışır, ancak farklı tarifenizin başlangıç ve bitiş tarihlerinin ardışık olduğundan emin olmak için dikkatli olmanız gerekir.");
Jr_define ('_ JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'İsteğe bağlı ekstraları nasıl oluşturabilirim?');
Jr_define ('_ JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Ekstralar rezervasyonlara eklenebilir ve Ayarlar> Ekstralar'da yapılandırılmıştır. Bunlar isteğe bağlı veya zorunlu olabilir, başka bir deyişle konuk rezervasyon sırasında seçimlerini kaldıramaz. İsteğe bağlı ekstralar için ücretlendirme yapılması ve Emlak Ayrıntıları sayfanızda gösterilip gösterilmemesine bağlıdır.Ekstralar yalnızca belirli bir tarihte (örneğin mevsimlik meyvelerde) bir rezervasyon olup olmadığını göstermek için yapılabilir, Geçerli ve Bitiş tarihlerini ayarladınız.Eğer isteğe bağlı ek özellikler oluşturduktan sonra, Media Manager aracılığıyla resimler yükleyebilirsiniz. ");
Jr_define ('_ JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Ödemeleri nasıl çevrimiçi alabilirim?');
Jr_define ('_ JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Ödemeleri çevrimiçi yapmak için, bir Ağ Geçidi adı verilen bir çevrimiçi ödeme sağlayıcısına sahip bir hesabınız olmalıdır.Mümkün ağ geçitlerini görmek için Özellik Konfigürasyonu> Ağ geçitleri sekmesine gidin. Alınacak ağ geçidi adını tıklayın. Yapılandırma sayfasına ekleyin. ");
Jr_define ('_ JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'İndirim alabilir miyim?');
Jr_define ('_ JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "İndirimler verilebilir, bunun yapılabilmesi için bir dizi farklı yöntem vardır: Bir müşteri adına bir rezervasyon yapıyorsanız, kendi rezervasyon ve rezervasyon toplamlarını rezervasyon formunda ayarlayabilirsiniz. , \"Konaklama Toplamını Geçersiz Kıl\" ve \"Depozitoyu Geçersiz kıl\" alanlarını kullanarak (misafirler bu özelliği kullanamazlar) bir konuk indirimli hale getirmenin başka bir yolu, indirimli kuponlar yaratmaktır. Sadece belirli tarihler arasında (Geçerli / sona kadar) uygulanabilir veya rezervasyon belirli tarihler arasında (Rezervasyon geçerli / tarihine kadar) düştüğünde uygulanabilir. Bu indirim kuponları sadece bir konuk atanabilir veya isterseniz Çıktılar, misafirlerin telefonlarını tarayarak indirimli kodun geçerli olduğu rezervasyon formuna götüren bir QR kodu içermektedir. ");
Jr_define ('_ JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Rezervasyon');
Jr_define ('_ JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Yeni rezervasyon\' u tıkladığımda, neden iletişim formuna yönlendiriliyorum? ');
Jr_define ('_ JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Online rezervasyon yapmadan önce, gerçek dünyadaki mülkünüzde bulunan her oda türü için bazı fiyatları (tarifeler) yapılandırmanız gerekir Bazı tarifeler oluşturduktan sonra rezervasyon yapabilir . ');
Jr_define ('_ JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Kapalı oda Nedir?');
Jr_define ('_ JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Kapalı oda, bir oda veya odalara hizmet vermemek için oluşturulmuş, herhangi bir konukla ilişkili olmayan ve örneğin bir oda yenilenmesi gerekiyorsa kullanışlı rezervasyonlar.") ;
Jr_define ('_ JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Resimler');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Resimleri nasıl yükleyebilirim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Resim yüklemek için Ayarlar> Media Center sayfasını ziyaret etmeniz gerekiyor. Bu sayfada çeşitli bölmeler göreceksiniz. Üst kısımda bazı notlar görebilirsiniz ve bunların altında bir açılır menü görürsünüz. Bu açılır menü, hangi kaynağa resim yüklediğinizi seçmenize izin verir. <br/> Sağ tarafta Resimler Ekle, Listeyi Temizle ve Tümünü yükle başlıklı bir sütun var. Resim Ekle'yi tıklayın ve masaüstünden veya mobil cihazınızdan bazı resimleri seçin. Bunu yaptıktan sonra, sütun küçük resimlerin bir listesine dönüşecektir. Buradan kaynaklarınız için bir veya daha fazla resim yükleyebilirsiniz.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "'Ana' görüntü nedir?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Ana resim, arama sonuçlarında ve mülk üst bilgisinde (sayfalarınızın üst kısmında mülkünüz hakkında bir şeyler gösteren alan) görünen resimdir. Mülkünüzü mümkün olan en iyi ışıkta gösteren bir resim seçmelisiniz. Bir ana resim yüklemek için, sol üstteki açılır listeden Özellik Ana Görüntüsü seçili olduğundan emin olun, ardından bir veya daha fazla resim yükleyin. Birden fazla resim yüklerseniz, tüm resimler küçük bir slayt gösterisi olarak görüntülenen arama sonuçları sayfasında kullanılacaktır. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Oda odağı simgeleri nedir?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Oda özellikleri, Micromanage veya Gelişmiş tarife düzenleme modları kullanıcıları tarafından oluşturulabilir. Bunlar bir veya birden fazla oda ile bağlantılı olabilir ve rezervasyon formunda görüntülenir. Bir oda özelliği oluşturduktan sonra, o özellik için önce Media Center'daki açılır menüdeki Oda Özellikleri Simgelerini seçip altındaki görünen açılır menüden oda özellik adını seçerek bir resim yükleyebilirsiniz. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Oda görüntülerini nasıl yükleyebilirim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Odalar, Micromanage veya Gelişmiş tarife düzenleme modları kullanıcıları tarafından oluşturulabilir. Bir veya daha fazla oda oluşturulduktan sonra, Media Center üzerinden her oda için birden fazla resim yükleyebilirsiniz (açılır menüden Oda Resimleri\'ni seçtikten sonra oda adını / numarasını seçin). Bu görüntüler, Önizleme sayfasını görüntüleyip Odalarımız sekmesini seçip ardından Kullanılabilirlik bağlantısını tıklatarak bir slayt gösterisinde görülebilir.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Slayt görüntülerini nasıl yükleyebilirim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slayt görüntüleri, Mülk Ayrıntıları (Önizleme) sayfasında, Şimdi Yer ayır düğmesinin yanında görülür.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Ekstralar Görüntülerini nasıl yükleyebilirim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Oda ve oda özelliklerine benzer şekilde, bir Ekstra oluşturmalısınız. İşlem tamamlandıktan sonra, en üstteki açılır menüden Ekstralar'ı seçebilirsiniz. Bunu yaptıktan sonra, aşağıdaki açılır listeden Ekstra'nın adını seçmeniz gerekir. Ad seçildiğinde, bu Ekstra için bir veya daha fazla resim yükleyebilirsiniz. ");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Something guest related');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'How do I blahblahblah?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'You blahblahblah ');
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
jr_define('_JOMRES_MANAGE_PROPERTIES', 'Mülkleri Yönet');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Bir <a href='http://ipinfodb.com/account.php' target='_blank'> IP Algılama API Anahtarı </a> ayarlanmış değilsiniz. Bu, sistemin kullanıcının konumunu otomatik olarak algılamasına ve para birimlerini ve ülkelerini otomatik olarak ayarlamasına izin vermek için gereklidir. Lütfen <a href = 'http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes- Sekmesini tıklayın 'target =' _ blank '> IP algılama API anahtarı nasıl oluşturulacağı ile ilgili kılavuz sayfamıza bakın </a> ve anahtarı Jomres> Site Yapılandırması> Para Birimi Dönüşümleri / Para Birimi Kodlarına kaydedin.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "<a href='https://openexchangerates.org/account/apps' target='_blank'> Açık Döviz Kurları API Anahtarı </a> ayarlanmış değilsiniz. Bu, sistemin döviz kurlarını otomatik olarak indirip kullanmasına izin vermek için gereklidir. Lütfen <a href = 'http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes- Tab 'target =' _ blank '> Açık Döviz Kurları API anahtarının nasıl oluşturulacağı ile ilgili kılavuz sayfamıza bakın </a> ve anahtarı Jomres> Site Yapılandırması> Para Birimi Dönüşümleri / Para Birimi Kodlarına kaydedin.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Izin numarası');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Bazı ülkeler, mülkünüz için bir izin numarası vermeniz gerektiğini belirtmektedir. Böyle bir numaranız varsa, buraya buraya girin ve mülkün üstbilgi bölümüne eklenecektir.');
jr_define('_JOMRES_SHORTCODES', 'Kısa kodlar');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
Jr_define ('SHORTCODE_TASK', 'Görev');
Jr_define ('SHORTCODE_DESCRIPTION', 'Açıklama');
Jr_define ('SHORTCODE_ARGUMENTS', 'Argümanlar');
Jr_define ('SHORTCODE_EXAMPLE', 'Örnek');
jr_define('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_DESC', 'This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! No problems were found.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Daha fazla');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Daha az');
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
