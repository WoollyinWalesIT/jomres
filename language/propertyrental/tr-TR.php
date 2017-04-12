<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
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
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Yeni mülkiyet özelliği');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Yeni misafir');
jr_define('_JOMRES_COM_MR_SAVE', 'Kaydet');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'İsim');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Giriş tarihi');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Çıkış tarihi');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Kullanıcıya yönetici işlevi atama');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID', 'ID');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME', 'İsim');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Kullanıcı adı');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'Yetki verilmiş kullanıcı (yetkiyi kaldırmak için tıklayın)');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Varsayılan mülkiyet');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'Değiştir');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Erişim seviyesi');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Kullanıcı tarafından değiştirilmiş');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'Uygulanamaz');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Recepsiyon');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Mülk sahibi');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Tüm rezervasyonlar');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Yeni rezervasyonlar');
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
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'Kredi kartı numarası');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'Card issued');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'Kartın son kullanma tarihi');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'Issue number');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Kart üzerindeki isim');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Seçiminizi yapın');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Gece');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Konuk sayısı');
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
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Engelli kullanımına uygun mu?');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Azami kişi sayısı');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Özellikler');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Oda eklendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Değiştir');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Oda özellikleri');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Özellik açıklaması');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Oda özelliği eklendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Oda özelliği güncellendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Oda türleri');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Oda/mülk tipi özeti');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Oda/mülk tipi açıklaması');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Oda/mülk tipi eklendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Oda/mülk tipi güncellendi');
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
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Mülk eklendi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Güncellendi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Mülk özellikleri');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Mülk özelliği özeti');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Mülk özelliği tam açıklamas');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Mülk özelliği eklendi');
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
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Tarife eklendi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Tarife güncellendi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Düzenle');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Kopyala');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tafire silindi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Düzenle');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Resmi tatiller');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervasyon kaydedildi');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Bir misafir giriş yaptı');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Bir misafir çıkış yaptı');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Rezervasyonları listele');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'Yeni rezervasyonlar');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Kontrol paneli');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Konuk yönetici');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Mülk yöneticisi');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Uygunluğu kontrol et');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Detayları onaylayın');
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
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Konuk seç ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Konuk giriş yaptı ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'Bugün gelecek konuk yok');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Konuk çıkışı ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'Bugün çıkacak konuk yok');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Ek hizzmetler');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tarifeler');
jr_define('_JOMRES_COM_A_DISCOUNTS', 'İndirim');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Yüklenen dosyalar');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS', 'Şimdiki ayarlar');
jr_define('_JOMRES_COM_A_EXPLANATION', 'Açıklama');
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
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED', 'Önceden yapılmış kontrat: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Gece başı ücret: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Toplam');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Tatilinizi bizimle geçirdiğiniz için teşekkürler');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'Yeniden görüşmek üzere.');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Fatura');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Faturaya servis ekle');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Servis açıklaması');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Hizmet tutarı');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Faturalandırılmış diğer ürünler');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Diğer faturalandırılmış ürünler, toplan tutar: ');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Ürün faturaya eklendi');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Resim yükle');
jr_define('_JOMRES_FILE_UPLOAD', 'Dosya yükle');
jr_define('_JOMRES_FILE_ERROR_TYPE', 'Sadece şu türde dosyaları yükleyebilirsiniz:\n');
jr_define('_JOMRES_FILE_ERROR_EMPTY', 'Yüklenecek dosyayı seçin');
jr_define('_JOMRES_FILE_ERROR_NAME', 'Dosya adı sadece harf ve rakam içermelidir. Özel karakter ve boşluk kullanılamaz.');
jr_define('_JOMRES_FILE_ERROR_SIZE', 'Yüklenebilecek doya boyutunu aştınız.');
jr_define('_JOMRES_FILE_NOT_UPLOADED', 'Dosya yüklenemedi');
jr_define('_JOMRES_FILE_UPDATED', 'Dosya yüklendi.');
jr_define('_JOMRES_COM_A_JSCALENDAR', 'Javascript Takvim');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE', 'Takvim için dil dosyası');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Javascript takviminde kullanılacak dili seçin. Bazı takvimler hatalı olabilir, Ayrıntılı bilgi için ziyaret edin: http://sourceforge.net/tracker/?group_id=75569&atid=544287 ');
jr_define('_JOMRES_COM_A_CALENDARCSS', 'JS Takvimi CSS dosyası');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC', 'Javascript Takviminde kullanılan CSS dosyasını seçin');
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
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Kaynak/Mülk türü silinemedi.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Kaynak/Mülk türü silinemedi.');
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
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'ÖRNEK oda kiralamak yerine işletmeyi kiralıyorsunuz. Durum buysa, diğer işletmelere karşı tek kaynağınız olduğundan emin olun.');
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
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'Odanın tutarı: ');

jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Sigara içmek');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Herhangi');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Takvim çıktı formatı');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC', 'Bu, kullanıcıların takvim çıktı formatını değiştirmesini sağlar');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Takvim girdi formatı');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Bu, kullanıcıların takvim girdi formatını değiştirmesini sağlar');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Sabit dönem rezervasyonları kısa molalara izin verir');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Kısa mola süreleri');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Yayınlandı');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Denetim takibi');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Tarih');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME', 'Zaman');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Kullanıcı (kullanıcı adı)');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION', 'Operasyon');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Ayrıntıları incele');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Tarihe göre filtrele');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'Kullannıcı adına göre filtrele');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'Operasyona göre filtrele');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Durum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Varış yazışması');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Bugün varacak');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Mevcut konuk');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Bugün ayrılıyor');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Ayrılma gecikti');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Henüz varmadı');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Bilinmeyen kullanıcı');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Oluşturulmuş oda');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Güncellenmiş oda');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Silinmiş oda');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Oluşturulmuş kaynak özelliği');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Güncellenmiş kaynak özelliği');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Silinmiş kaynak özelliği');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'Eklenmiş kaynak özelliği');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'Güncellenmiş kaynak tipi');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'Silinmiş kaynak tipi');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Oluşturulmuş işletme');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Güncellenmiş işletme');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Silinmiş işletme');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'Oluşturulmuş mülk özelliği');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'Güncellenmiş mülk özelliği');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'Silinmiş mülk özelliği');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Düzenlenmiş mülk özelliği');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Yayınlanmış mülk');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Oluşturulmuş tarife');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Güncellenmiş tarife');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF', 'Silinmiş tarife');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Added svc. charge');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Konuk girişi yapıldı');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'Konuk çıkışı yapıldı');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Depozito grildi');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Konuk oluşturuldu');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Konuk güncellendi');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST', 'Konuk silindi');
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
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'Kapalı odaları gör');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Listede kimse yok');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Kaç yıldızlı olduğu gösterilsin');
jr_define('_JOMRES_COM_A_SMOKING', 'Sigara içilebilirliği gösterilsin mi?');
jr_define('_JOMRES_COM_A_SMOKING_DESC', 'Sigara iznini göstermek için eveti seçin');
jr_define('_JOMRES_COM_A_RESET', 'Reset');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervasyon iptal edildi');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Şunun için ara:');
jr_define('_JOMRES_COM_A_SMOKING_OPTION', 'Sigara izni normal durumu');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Para birimi sembolü');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'Eg &amp;pound&#59; Please note that you should use the HTML entities code for the required symbol. For a list of these entities please visit <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'TL');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC', 'Örnek: GBP. Bu, kullanıcının rezervasyonu onayladığı emaildir');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Ekstra bilgiler');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Rezervasyon sınırı olsun mu?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their arrival date will be restored to todays date');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Rezervasyon gün sınırı:');
jr_define('_JOMRES_COM_A_TAX_WARNING', '<font color=red>NOTE: It is not recommended that you set both of the following options to Yes, you should use only one of the two tax calculations available to you. </FONT>');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Vergi');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Konaklama vergisi');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC', 'Amerikan pazarında kullanılmak üzere tasarlandı. Bunlar, konuk için tahsil edilecek kaynak vergi miktarlarıdır. Bir kombinasyonu ve / veya sabit ve yüzde rakamlarını ücretlendirme yapabilirsiniz. Bu vergileri yalnızca kaynağın maliyetine uyguladığını unutmayın.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Sabit vergi');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Vergi yüzdesi');
jr_define('_JOMRES_COM_A_EUROTAX', 'Vergi');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Vergi yüzdesi');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Tüm kayıtları arşivle');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' arşivlenmiş kayıt(lar)');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'Arşivlenmiş denetim kayıtları');
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
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT', 'Mevcut metin');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT', 'Yeni metin');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Güncellenmiş metin.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Dil seçin');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING', 'Arşivlenmemiş kayıt sayısı: ');
jr_define('_JOMRES_FRONT_PTYPE', 'Mülk tipi');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Mülk tipleri');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Mült tipini düzenle');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Mülk tipi');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Mülk tipi açıklaması');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Mülk tipi kaydedildi');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'Mülk tipi silinemedi. Mülk tipi başka bir kuruma atanmış, silmeden önce gerekli düzenlemeleri yapmalısınız.');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Mülk tipi silindi');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Ödeme hatırlatıcısı');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Faturaya eklenecek ekstra servis yok');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Depozito');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Toplam tutar');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Rezervasyonda alınan tutar');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Bu seçeneği rezervasyon esnasında alınacak ücreti belrtmek için kullanın. Sadece depozitoyu alacaksanız Depozitoyu, toplam tutarı alacaksanız Toplam tutarı seçin.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Gösterilen aylar');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Hangi aylar gösterilsin?');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'Signed on behalf of ');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Yöntemler');
jr_define('_JOMRES_COM_A_CANCEL', 'Vazgeç');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Odaların müsait olmadığı tarihleri seçin. (Kapalı odalar)<br/> 
<br/> 
Hizmet dışı bırakmak istediğiniz oda (ları) seçin. <br> Bir kaynağın kendisine karşı bir onay işareti yoksa, ödenmemiş herhangi bir rezervasyon tamamlanıncaya / iptal edilinceye kadar bir kara rezervasyona dahil edilemez.<br/> ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Uzun süre etkin kalmadığınız için çıkış yaptınız</b> Tekrar girip yapın.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Amaç');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Ödeme yöntemleri kullanılsın mı?');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'Çevrimiçi ödeme ağ geçitlerini kullanmak isterseniz bunu evet olarak ayarlayın. <b>Note:</b>Bu, rezervasyon işlemi sırasında gösterilen depozito hesaplamasını kapatmaz. Bunu devre dışı bırakmak için, oda görüntüleyen şablonları düzenleyebilir ve bir sınıf whos yazı tipi ile bg rengi arasındaki mevduata karşılık gelen öğeleri sarın.');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Ödeme şeklini seçin.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Ödeme yolu seçili mi?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Düzenlenmiş eklenti ayarları');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Eklenmiş eklenti ayarları');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this business\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Düzenlenmiş eklenti ayarları');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Websitenizin linkini ekleyin.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Görülmüş kredi kartı');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Güncellenmiş kredi kartı');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Kredi kartını düzenle');
jr_define('_JOMRES_COM_A_EDITICON', 'İkon boyutunu düzenle');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Toplu resim yüklemesi');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Bu resimler zaten mevcut');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slayt');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Slayt linkleri gösterilsin mi?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Otel sayfasında slayt gösterilsin mi?');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Slayt küçük resim genişliği');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slayt');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Üzgünüz,  bu otel için bir görsel yok. Lütfen toplu resim yüklemesi yapın.');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Tarifelerin linkleri değiştirilsin mi?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Popup gösterilsin mi?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Hayır seçilirse, popup gibi açılan linkler sayfa içinde açılır.');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Slayt resimlerini yükle');
jr_define('_JOMRES_A_TABS_MISC', 'Diğer');
jr_define('_JOMRES_A', 'Site düzeni');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Otel özelliklerini kullan');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC', 'Tüm işletmeleri yalnızca web yöneticisi tarafından tanımlanan mülk özelliklerini kullanmaya zorlamak istiyorsanız Bunu Evet yapın.');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'Buraya resim yüklemek için önce otel fotoğraflarını yüklemelisiniz /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Kullanmak istediğiniz arama aracını seçin.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Hiçbir sonuç bulunamadı.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Bu eylemi gerçekleşitrmek istediğinize emin misiniz?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezervasyon yap!');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezervasyon yap!');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV', 'Güvenlik numarası');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Tarifeleri sayfada göster?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adres');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detaylı bilgi');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Odaları görmek için tıklayın');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Ücret bilgilerini göster');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Linkin altında adres bilgilerini göster');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Linkin altında detaylı otel açıklamasını göster');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Linkin altında odaları göster');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Linkin altında ücret tarifelerini göster');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Tarifeler');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Değişken');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Kullanmak istediğiniz tarifeyi seçin');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Tarife hesaplama yöntemlerinden iki seçeneğiniz var. Birincisi, 'sabit oranlı' yöntem, konuklara çeşitli tarifeler sunmanıza olanak tanır ve konaklama süresi, tüm süre boyunca aynıdır. Aynı tarih için birkaç farklı tarifeler sunmak isterseniz, örneğin Yatak ve Kahvaltı tarifesi ve B & B ve Akşam yemeği ücret tarifeleri için kullanışlıdır. Fiyatlarınızı, söz konusu tarihe bağlı olarak ayarlamak istiyorsanız, 'ortalamalar' tarifesini seçin. Jomres, rezervasyondaki her bir gün için tüm tarifeleri bulacak, bunları bir araya getirecek ve o zaman ortalama fiyatı dönecektir" );
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Ayrılış tarihi gösterilsin mi?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Set this to No if you don't want to show the departure date input box. Only use this if you know what you're doing, as the departure date in bookings will always be set to the day after the arrival date.");
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Açıklama limiti');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Bu, karakter limitini belirler.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Kullanılmış tarih() format stili');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Yayınla');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Yayından kaldır');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Mülk tiplerini kullan');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC', 'Tüm işletmeleri yalnızca web yöneticisi tarafından tanımlanan kaynak / özellik türlerini kullanmaya zorlamak istiyorsanız bunu Evet yapın. Kaynak / özellik türleri aracılığıyla arama yapmaya izin vermek istiyorsanız bunu Evet olarak ayarlamanız gerekir.');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Bu kaynak / mülk türüne bir resim atamak için önce kaynak / özellik türü resimlerinizi / images / stories / jomres / rmtypes / klasörüne yüklemeniz gerekir. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Giriş hatası arka plan rengi');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Varsayılan ülke');
jr_define('_JOMRES_JAVASCRIPT_', 'Kırmızı yıldız olan maddeler zorunludur.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Kullanıcılar kendi işletmelerini ekleyebilirler mi?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Kullanıcıların yönetici müdahalesi olmaksızın kendi işletmelerini kaydettirmelerini istiyorsanız bunu Evet olarak ayarlayın.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'İşletmenizin ülke ve bölgesini belirtin.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'Mülkünüzün detaylarını belirtin.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Berlitilmiş alanlar zorunludur.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'İşletme oluşturuldu');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED', "Bunu yapmak için sisteme giriş yapmalısınız.");
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY', 'İşletme oluşturuldu: ');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'Kullanıcı: ');
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
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Yayınlanmış müşteri tipi');
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
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Sigara içme durumu geçersiz');
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
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'E-Posta adresi yanlış');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'E-Posta sunucunuz tanımlanamadı');
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
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Süper Mülk Yöneticisi');
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
jr_define('_JOMRES_PATHWAY_PROPERTYLIST', 'Mülk listesi');
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
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES', 'Yöneticilerin seçeneklerini resim olarak göster');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Arama ayarlar');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Kullanılabilir Kayıtlar');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES', 'Henüz kayıt girişi kaydedilmedi.');
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
jr_define('JOMRES_COM_A_SRPONLY', 'Yalnızca');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Oda başına maksimum kişi');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Rezervasyon sırasında azami kişi var');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Not ekle');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Notu düzenle');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Notu sil');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Notları görüntüle');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Yeni not eklendi');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Düzenlenmiş not');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Silinmiş not');
jr_define('_JOMCOMP_MYUSER_MENUTITLE', 'Seçeneklerim');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Rezervasyonlarımı Listele');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Rezervasyonlarım');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Rezervasyonu Görüntüle');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Favorileri Görüntüle');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Henüz hiçbir favori eklemediniz!');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Favorilere Ekle');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Özellik türü');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'İşletmelerdeki işletmeler');
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
jr_define('JOMRES_COM_A_USE_SSL', 'Rezervasyon formunda SSL kullanıyor musunuz?');
jr_define('JOMRES_COM_A_USE_SSL_DESC', 'Geçerli bir SSL sertifikanız olduğundan emin olmanız gerekir.');
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
jr_define('_JRPORTAL_STATS_STATTYPE', 'İçin istatistikler: ');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Mülkler - Tıklamalar');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'İşletme görünümü');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Rezervasyon sayısı');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Rezervasyonların değeri');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Komisyon tahmini');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Komisyon Hızı');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Liste defterleri');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'İşletme kimliği');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Konuk kimliği');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'Kurum kimliği');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Fatura kimliği');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Toplam rezervasyon');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Sözleşme kimliği');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Sözleşme numarasır');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Para Birimi Kodu');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Oluşturuldu');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Arşivlendi');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Arşivlenen tarih');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Faturaya öğe eklel');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Fatura yöneticisi');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'İlişkili mülkiyet (varsa)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Değer');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Açıklama');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', 'Başarıyla faturalandırma öğesi eklendi ');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', 'Seçilenleri görüntüle');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', 'Faturalandırma öğesi eklenemedi ');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "Hata, fatura için bir değer ayarlamadınız");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Açıklamayı bir alt klasörün adına ayarlayarak (örneğin, bir alt klasöre) özellik türüne özel dil dosyalarına sahip olabilirsiniz. "Yatçı Brokerliği" ve bir dil dosyasını bu alt klasöre kopyalama. Daha sonra, bu mülk türü için bu dil dosyasını değiştirebilir ve böylece odalar örneğin "DVDler" haline gelir.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Bu mülkiyet, erişebildiğiniz tek mülk olduğundan silemezsiniz. Bunu devre dışı bırakmak isterseniz, lütfen araç çubuğundaki un-publish özelliğini kullanın. ');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'Bu bir demo yüklemesi ve üst versiyona yükseltme niyetinde iseniz (yalnızca tek bir mülkiyet sınırı), önce lisans anahtarınızı Solo lisans anahtarına değiştirmeden önce yeni bir mülk oluşturmanız gerekir. Satın alındıktan sonra size verilecek.');
jr_define('_JOMRES_COM_EMAILERRORS', 'E-posta hata günlüğü iletileri?"');
jr_define('_JOMRES_COM_EMAILERRORS_DESC', "Bir hata günlüğü mesajı oluşturulduğunda otomatik olarak jomres.net'i kopyalamak isterseniz Evet'e getirin. Bu, potansiyel problemlerle başa çıkma yaklaşımımızı önermemizi sağlar, umarız sizden önce herhangi bir sorunu çözmeyi umarız. Onların farkında bile olabilirsiniz Not: Bu özellik 'localhost' üzerinde devre dışıdır. ");
jr_define('_JOMRES_COM_ISTHISANMRP', 'Bu otel bir otel / yatak ve kahvaltı / konuk evi / pansiyon mu? ');
jr_define('_JOMRES_COM_ISTHISANMRP_DESC', 'Konfigürasyon seçenekleri, bir işletmedeki oda veya mülkün kiralanmasına bağlı olarak farklılık gösterir. Oda öneriyorsanız MRP\'yi seçin, tüm işi sunuyorsanız SRP\'yi seçin. ');
jr_define('_JOMRES_COM_JOMRESEMAILCHECK', 'Jomres e-posta adres denetleyicisi mi kullanıyorsunuz? ');
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC', 'Gönderilen e-postaları daha sıkı bir şekilde kontrol etmesini sağlar. Varolmayan bir e-posta adresine e-posta göndermeye çalışırsanız, bazı güvenli web sunucuları 500 iç hatayı atacaktır. Bu özelliği açtığınızda, bir e-posta göndermeye başlamadan önce bu 500 hatanın engellenmesi için php\'nin checkdnsrr özelliklerini kullanmamıza izin verilir. ');
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
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE', 'Varsayılan dil dosyası');
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Dil Joomfish tarafından ayarlanmamışsa Jomres'in kullanması gereken varsayılan dil dosyasını seçin.");
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
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Kutuda gördüğünüz karakterleri yazın');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'Karakterleri okuyamıyorum ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Gönder');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'yeni resim');
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
jr_define('_JOMRES_COM_SEF_URL_PREFIX', 'Url öneki');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC', 'Bu etki alanından sonra görüntülenen ilk öğedir - gereksinim duyduğunuz şeye değiştirin - kullanmak istemiyorsanız boşaltın');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'Özellik görev takma adını görüntüle');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'takvim görev takma adı');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Arama görev takma adı');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Ülkeye url ekleyin');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'URLye bölgeye ekle');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'URLye şehir ekle');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Özellik türünü URLye ekle');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'URLye özellik adı ekle');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Özellik adına mülk kimliği ekle');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'özellik adı Hayır olarak ayarlanırsa kimlik kullanılamaz, evet olarak ayarlanırsa url fawlty_towers-1 gibi görünür');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Arama URL Yapısı - Ülkeye url ekleyin');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Arama URLsi Yapısı - Varsayılan ülke');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'Eğer tüm işletmeleriniz bir ülkede bulunuyorsa o zaman arama yapmazsınız - bir ülke görüntülemek istiyorsanız varsayılan bir ülke girin');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Arama URL Yapısı - urlye bölge ekle');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION', 'Arama URL Yapısı - Varsayılan bölge');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'Eğer tüm işletmeleriniz bir bölgede bulunuyorsa o zaman aramada bölge olmayacaktır - bölgeyi görüntülemek istiyorsanız varsayılan bölge girin');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Arama URL Yapısı - Urlye kasaba ekle');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN', 'Arama URL Yapısı - Varsayılan şehir');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Arama URLsi Yapısı - Özellik türü');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Arama URL\'si Yapısı - Varsayılan özellik türü');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Arama, tüm mülk türleri için ise url\'de kullanılır');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Autodetect Javascript takvim dili');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Javascript takvimleri için otomatik algılamayı etkinleştirin? Dili otomatik olarak algılayamazsak, aşağıda yapılandırılan dile geri döneceğiz');
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
jr_define('JOMRES_WORD_SAVING', 'Kaydediliyor ...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Bileşik Emlak ayrıntıları kullanılsın mı?');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Bu, sistemdeki tüm kullanıcıların bir listesidir.Mevcut olmayan yöneticilerin bir Konuk simgesi olacaktır, mülk yöneticileri Resepsiyon / Mülk Yöneticisi / Süper mülk yöneticisi simgelerine sahip olacaktır. <br/> Jomres ilk olduğunda Yüklü "yönetici" otomatik olarak bir mülk yöneticisi olarak eklenir ve yetkili bir kullanıcı olarak addedilir. <br/> Süper özellik olmayan yöneticiler en az bir mülkiyete atanmalıdır, aksi halde oturum açmaya ve Jomres\'ı kullanmaya çalıştıklarında bir hata göreceklerdir . <br/> Bir kullanıcı yetkilendirildikten sonra profillerini düzenleyebilir, işletmelere atayabilir veya onlara süper mülk yöneticisi hakları verebilirsiniz. <br/> Bir kullanıcıyı yetkilendirmek için, kendi adının yanındaki kırmızı Çapıyı tıklayın. Yeşil Tick işaretini tıklayın. <br/> Kullanıcıları yalnızca belirli işletmelere atamak veya onlara süper mülk yöneticisi hakları vermek için onlara yetki verin ve ardından düzenleme simgesini tıklayın (yalnızca yetkilendirildikleri andan itibaren görünür). İşlerini kendileri tescil ettirdiyseniz, bu işletmeler otomatik olarak kendilerine tahsis edilecektir. Süper emlak yöneticileri otomatik olarak tüm işletmeler üzerinde haklarına sahiptir ve simge durumuna bağlı yapılandırma seçeneği Site Yapılandırması ayarlanmış olsa bile tüm yapılandırma seçeneklerini görürler. ' );
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS', 'Bu, sistemdeki tüm kullanıcıların bir listesidir.Mevcut olmayan yöneticilerin bir Konuk simgesi olacaktır, mülk yöneticileri Resepsiyon / Mülk Yöneticisi / Süper mülk yöneticisi simgelerine sahip olacaktır. <br/> Jomres ilk olduğunda Yüklü "yönetici" otomatik olarak bir mülk yöneticisi olarak eklenir ve yetkili bir kullanıcı olarak addedilir. <br/> Süper özellik olmayan yöneticiler en az bir mülkiyete atanmalıdır, aksi halde oturum açmaya ve Jomres\'ı kullanmaya çalıştıklarında bir hata göreceklerdir . <br/> Bir kullanıcı yetkilendirildikten sonra profillerini düzenleyebilir, işletmelere atayabilir veya onlara süper mülk yöneticisi hakları verebilirsiniz. <br/> Bir kullanıcıyı yetkilendirmek için, kendi adının yanındaki kırmızı Çapıyı tıklayın. Yeşil Tick işaretini tıklayın. <br/> Kullanıcıları yalnızca belirli işletmelere atamak veya onlara süper mülk yöneticisi hakları vermek için onlara yetki verin ve ardından düzenleme simgesini tıklayın (yalnızca yetkilendirildikleri andan itibaren görünür). İşlerini kendileri tescil ettirdiyseniz, bu işletmeler otomatik olarak kendilerine tahsis edilecektir. Süper emlak yöneticileri otomatik olarak tüm işletmeler üzerinde haklarına sahiptir ve simge durumuna bağlı yapılandırma seçeneği Site Yapılandırması ayarlanmış olsa bile tüm yapılandırma seçeneklerini görürler. ' );
jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Burada bazı işyerlerine bir yönetici atayabilirsiniz. Süper mülk yöneticisi olmayacaksa, en az bir mülk haklarına sahip olduklarından emin olun aksi halde bir hata görürler. Oturum açın. Yalnızca belirli işletmeler üzerinde bir resepsiyonist / mülk yöneticisi hakları vermek için Süper Gayrimenkul Yöneticisi açılır listesinin Evet olarak ayarlanmadığından emin olun. ');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Henüz bir rezervasyon yapmadınız!!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Özellik türü');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Mülk türünüzü düzenleyin');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Özellik türünüzü seçin');
jr_define('_JOMRES_COM_LOGGING', 'Sistem günlüğü');
jr_define('_JOMRES_COM_LOGGING_WARNING', 'Bu seçenekler, sistemde günlüğe kaydetmeyi etkinleştirmenizi / devre dışı bırakmanızı sağlar. Hata günlüğü her zaman etkindir, ancak Rezervasyon, Ağ Geçidi, Sistem ve İstek günlükleri gibi diğer günlükler açılabilir veya kapatılabilir. <B> Bu günlük kaydını etkinleştirme yeteneği tamamen hata ayıklamanın kolaylaştırılması için bir yöntem olarak sağlanır, ancak büyük kullanıcılar için güvenlik riski taşırlar </ b> çünkü dış kullanıcılar oturumlarınızı günlük izinlerinize göre yetkilendirilmeden kolayca görüntüleyebilir. Çoğu zaman kapatılmış olarak bırakılması önerilir. Günlük kaydını açtıysanız, devre dışı bıraktığınız zaman <i> '.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> dosyasının eski günlük dosyası saklamadığından emin olmalısınız. Günlük saklamayı etkinleştirmek, bilgi depoladığı için sistemi önemli ölçüde yavaşlatır.');
jr_define('_JOMRES_COM_LOGGING_BOOKING', 'Rezervasyon formu günlüğü (Rezervasyon günlükleri) ');
jr_define('_JOMRES_COM_LOGGING_GATEWAY', 'Ödeme aracı günlükleri (örneğin paypal vb.) ');
jr_define('_JOMRES_COM_LOGGING_REQUEST', 'İstek günlüğü (tüm gelen sunucu istekleri)');
jr_define('_JOMRES_COM_LOGGING_SYSTEM', 'Diğer ');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL', 'Portal (çoğunlukla komisyon kaydetmek için) ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Sorgunuz ...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Rezervasyon kaynağı kaynaklı liste kaynak türü görüntüsünü göster');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Özellik Listesinin sınırı');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Bir aramadan sonra bir sayfada gösterilecek işletme sayısı');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Entegre arama özelliği');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Jomres entegre arama özelliği kullanıcılarınızın Jomres işletmelerinde bir dizi işleve göre arama yapmalarını sağlar. sistemdaki Jomres arama özelliklerini zaten kullandıysanız, bu ayarları biliyorsunuzdur. <br/> Bu özellik, Joomla arama modüllerini kullanmak istemeyen kullanıcılar için Jomres\'ta arama işlemi yapmamızı sağlar; CMS\'nin kendi Jomres arama modüllerine sahip olmadığı diğer CMS kullanıcıları için. <br/> Bir şeyle bir şey aramayı seçerseniz (diğer bir deyişle açılır menü değil) diğer arama seçeneklerini unutmayın Uygulanmadı, yalnızca tıkladığınız bağlantıya karşılık gelen öğe. <br/> Varsayılan olarak, bu entegre aramanın düzeni çok güzel değil. Düzeni gerçekleştiren şablon dosyasının olası seçeneklerin tümünü içermesi gerektiği için bazıları uyumsuzdur. Düzeni geliştirmek ve arzuladığınız görünümü elde etmek için <b> / jomres / templates / (bootstrap3 veya önyükleme veya jquery_ui) / frontend / </ b klasöründe <b> srch.html </b> düzenleyeceksiniz >' );
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Bu özellik etkinleştirilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Bu özellik etkin durumdaysa, özellik listesini gösteren herhangi bir Jomres çağrısı, arama seçeneklerinin de gösterileceği anlamına gelir.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Sütunları kullan');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Bağ türü (nerede ilgili) olarak tanımladığınız herhangi bir arama seçeneği sütunlar olarak gösterilir (IE br bağlantının sonuna getirilir)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', 'Özellik sütunları');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', 'Sonraki satıra gitmek için bir br takılmadan önce gösterilebilecek özellik simgelerinin sayısı.');
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
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Cron Jobs\'a erişiminiz yoksa, bunu Minicomponent olarak ayarlayın, ya da bir cron job oluşturup <br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1&secret='.base64_encode(get_showtime('secret')).'> /dev/null</i>  dosyasını çalıştırmasını sağlayın');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Tarayıcıda günlüğü göster');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Sadece Minicomponent modunda çalışır.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Günlükleme etkin');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Günlüğün etkinleştirilmesi için Evet olarak ayarlayın.Kayıtların sonuçları aşağıda verilecektir.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Ayrıntılı günlüğe kaydetme');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Günlük çıktıları çok fazla');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Şablon Düzenleme');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC', 'Bu işlev, sunucudaki Jomres ön uç şablonlarını düzenlemenize ve sonuçları veritabanına kaydetmemize olanak tanır Gelişmiş özelliktir, dikkatli olun.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Şablon adı');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Şablon özelleştirildi mi?');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Özel alanlar');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Burada rezervasyon formunda gösterilecek basit özel alanları tanımlayabilirsiniz.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Alan adı (boşluk bırakılmayacak)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Varsayılan değer');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Açıklama');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Gerekli');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maksimum Miktar');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Maksimum miktar 1den büyük olarak ayarlandıysa, konuklara ihtiyaç duydukları ekstraların miktarını seçmek üzere bir açılır pencere açılır.');
jr_define('_JRPORTAL_INVOICES_ISSUE', 'Fatura gönder');
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
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL', 'Yinelenen toplam');
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
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', 'Devreden Fiyat');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', 'Devreden miktar');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', 'Devreden indirim');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', 'Devreden toplam');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Vergi kodu');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Vergi açıklaması');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Vergi oranı');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', 'Paypal ayarları');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', 'Para birimi kodu (ör. EUR)');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', 'Sandbox kullanılsın mı?');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', 'Paypal e-posta adresiniz');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', 'Not: Paypal\'ı kullanmak için, paypal hesabınıza gitmeniz ve Autoreturn\'u (Profil / Web Sitesi Ödeme Tercihleri) devre dışı bırakmanız ve IPN\'yi (Profil / Anında Ödeme Bildirimi Tercihleri) aşağıdaki URL\'ye ayarlamanız gerekir:<br/><b>&nbsp;'.JOMRES_SITEPAGE_URL_AJAX.'&task=completebk');
jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', 'Bu faturanın süresi doldu, lütfen paypal için olan butonu tıklayın.');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Standart Jomres ağ geçidi ayarları geçersiz kılınsın mı?');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', 'Paypal ayarları geçersiz kılma seçeneği Evet olarak ayarlanırsa, birkaç şey olur: Genel Yapılandırma artık herhangi bir ağ geçidi ayarını göstermez ve ikisi, bir rezervasyon yapıldıysa, burada kullanılan ayarlar ödemenin gönderilmesi için kullanılır Burada girilen adrese, daha önce Genel Yapılandırma\'da yapılandırılmış olana değil.');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Faturalarımı göster');
jr_define('_JRPORTAL_COUPONS_TITLE', 'İndirim kuponları');
jr_define('_JRPORTAL_COUPONS_DESC', 'İndirim kodları oluşturulabilir ve rezervasyon yapmak için bir teşvik olarak konuklara geçirilebilir. Geçerli tarihler rezervasyonun yapılabileceği tarihi değil rezervasyon tarihlerini ifade eder.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Kupon kodu');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'şu tarihten itibaren');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'şu tarihe kadar');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'İndirim tutarı');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'İndirim yüzdeliktir');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Sadece oda');
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC', 'İndirim yalnızca kaynağın maliyetine uygulanır, yoksa indirim, rezervasyonun tüm maliyetine uygulanır.');
jr_define('_JRPORTAL_COUPONS_SQLERROR', 'kupon silmeye / eklemeye çalışırken hata oluştu');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Bir kupon kodunuz varsa, kupon kodunu kutuya girin ve kupon ayrıntılarını rezervasyonunuza karşı kaydetmek için lütfen "Kupon kaydet" bağlantısını tıklayın.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Kuponu kaydet');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kupon rezervasyon için kaydedildi');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Kupon numarası bulunamadı');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Kupon indirim değeri');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'İndirimli rezervasyon, kupon kodu / indirim değeri / kupon ayarları: ');
jr_define('_JOMRES_COM_CACHING', 'Jomres önbellekleme özelliğini kullan?');
jr_define('_JOMRES_COM_CACHING_DESC', 'Jomres önbellekleme özelliğini devre dışı bırakmak için Hayır seçin');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Dilleri seç');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Dil değiştirme açılır listesinde gösterilecek dil seçeneklerini seçin.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Dil seçimi açılır menüsü gösterilsin mi?');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Rezervasyonlar iptal edildi');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Sayın');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Kayıt olduğunuz için teşekkür ederiz ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Kullanıcı adınız : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Parolanız : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Rezervasyonlarınızı görüntülemek için oturum açın');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupon kaydedildi');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupon silindi');
jr_define('_JOMRES_COM_GROWL', 'Jomres mesajlaşma kullan');
jr_define('_JOMRES_COM_GROWL_DESC', 'Birçok yönetici güncelleştirmesi, sayfa yeniden yüklendiğinde bir javascript iletisi biçiminde geribildirim sağlar, bu özelliği etkinleştirmek / devre dışı bırakmak için bu seçeneği kullanın.');
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
jr_define('_JOMRES_LASTEDITED_DB', 'Veritabanı şablonu Son düzenlenme tarihi');
jr_define('_JOMRES_LASTEDITED_DISK', 'Disk şablonu Son düzenlenme tarihi');
jr_define('_JOMRES_LASTEDITED_WARNINGICON', 'Veritabanı şablonu uyarısı');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Veritabanı şablonu güncelliğini yitirmiş olabilir');
jr_define('_JOMRES_LASTEDITED_WARNING', 'Şablona karşı bir simge varsa, Jomres veritabanında saklanan şablonun diskte saklanan şablondan daha eski olabileceğini tespit etmiştir; bu durumda, şablon şablonun diskte saklanan şablonun <strong> <i> </ i> </ strong> Şablon Jomres\'ın daha yeni bir sürümünde güncellendi. Durum buysa, şablonunuzun Jomres\'taki yeni bir özellikten yararlanamayacağı veya mevcut işlevselliğin artık beklendiği gibi çalışmayabileceği ve disk üzerindeki dosyayı özelleştirmelerinizle karşılaştırmanız gerekir; Yeni özelliklerde eksik değiller.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Abonelik paketleri');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'İsim');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Açıklama');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Yayınlandı');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', 'Frekans');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', 'Deneme süresi');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', 'Deneme tutarı');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Tam tutar');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', 'Oda sınırı'); // Şu anda kullanılmıyor, yağmurlu bir gün için kaydedildi
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Özellik limiti');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', 'Sıklık: M / Q / B / Y Aylık / 3 Aylık / 6 Aylık / Yıllık');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', 'Deneme periyodu: Tamsayı girişi, 0\'a (sıfır) ayarlanmaz, 1 ayda bir, 2 ayda 2 ay gibi.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Abone ol');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', 'Lütfen abone bilgilerinizi girin / güncelleyin lütfen tüm alanların doldurulması gerektiğini unutmayın.');
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME', 'Ad');
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME', 'Soy adı');
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS', 'Adres');
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY', 'Ülke');
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE', 'Posta kodu');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', 'Yeni işletmeler yaratmak için geçerli bir aboneliğinize ihtiyacınız var.Şu anda şu abonelikleri satın aldınız ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', ' <i>yayınlanmış </ i> iş(ler). ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "Buradan daha fazla abonelik paketi satın alarak oluşturabileceğiniz işletme sayısını artırabilirsiniz. by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'></a>");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', ' Kullandınız ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', ' mülkiyet yuvaları. ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "Mevcut işletmelerinizin listesini görmek için <a href='".JOMRES_SITEPAGE_URL."&task=listyourbusinesses'>buraya </a> tıklayın. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "Mevcut mevcut abonelik paketlerinin bir listesini görmek için tıklayın <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', 'Ne yazık ki, maksimum müsait alana ulaştığınızda bu mülkü yayınlayamazsınız.');
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "Mülkünüzü sunucumuzda listelemek için bir abonelik oluşturduğunuz için teşekkür ederiz. Faturanız ücretli olarak işaretlendiğinde (Paypal'a bağlı olarak bir gecikme olabilir) lütfen <a href='". JOMRES_SITEPAGE_URL. "& Task = registerProp_step1'> işletme (larınızı) oluşturmaya devam etmek için burayı tıklayın </a>");
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "Hizmetimize abone olmayı seçmediğiniz için üzgünüz. Size daha fazla yardımcı olabilmemiz için herhangi bir yol varsa lütfen bize bildirin.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Abonelik taşıma işlevini kullan');
jr_define('_JOMRES_COM_NEWUSER', 'Rezervasyon sırasında yeni kullanıcı yarat');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Kayıtsız kullanıcı rezervasyonunda yeni kullanıcı hesabı oluşturun.');
jr_define('_JOMRES_CLICKTOREGISTER', 'İşletmenizi başlatmak için burayı tıklayın');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', 'Etkin abonelikler');
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', 'Ağ Geçidi abonelik kimliği');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Yeni kullanıcı detayları ');
jr_define('_JOMRES_LATLONG_DESC', 'Enlemi ve boylamı ayarlamak için farenizle haritayı hareket ettirin ve işaretçiyi mülkünüzün bulunduğu yere sürükleyin.');
jr_define('_JOMRES_CONTROLPANEL', 'Kontrol paneli');
jr_define('_JOMRES_COM_FAUXHEADERS', 'Jomres javascript üstbilgileri çıktı gövdesine mi?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC', 'Mototool ile sorun yaşıyorsanız bunu Evet olarak ayarlayın Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Fatura göster');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Faturaları göster');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Mülkümü bu siteye ekle');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Yapılacak : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', 'İsterseniz, bir paket oluşturup hem deneme tutarı hem de tam tutarı 0.00 olarak ayarlayarak sistemde bir boş paket oluşturabilirsiniz.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Maalesef, paket kimliği tanınmıyor.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Zaten ücretsiz bir pakete üye oldunuz, o pakete tekrar üye olamazsınız.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', ' Durum <b> 0: </ b> Bekleyen ödeme <b> 1: </ b> <b> 2: </ b> İptal edildi <b> 3: </ b> Sona eriyor. Dönem');
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "Hesabım");
jr_define('_JOMRES_COM_YOURBUSINESS', 'Şirket bilgileriniz');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Şirket Adı');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'KDV numarası');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Yapı numarası');
jr_define('_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOT: Aşağıdaki vergi oranları, Amerikan pazarında kullanılmak üzere tasarlanmıştır.Eğer konaklama için sabit oranlı vergi (örneğin KDV) kullanmak istiyorsanız, lütfen bir vergi oranı seçin Yukarıdaki seçeneklerden. </ FONT>');
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
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN', 'Alternatif adrese gönderilsin mi?');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'İrtibat Sahibi e-postalarının aşağıdaki girişe gönderilmesini istiyorsanız, bu seçeneği Evet yapın. E-postaları mülk yapılandırma alanında tanımlanan e-posta adresine göndermek için Hayır olarak bırakın.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Kişi Sahibi e-postaları için alternatif adres.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Onay e-postası gönderildi, şimdi bu pencereyi kapatabilirsiniz.');
jr_define('_JOMRES_REALESTATE_TITLE', 'Gayrimenkul listesi');
jr_define('_JOMRES_REALESTATE_YESNO', 'Bu mülkiyet bir satış listesinde mi?');
jr_define('_JOMRES_REALESTATE_YESNO_DESC', 'İşletmeyi satıyorsanız Evet\'i seçin, kısa süreli kiralama teklifinde bulunacaksanız ve bu sistemi rezervasyonları almak için kullanacaksanız, Hayır\'ı seçin.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Temas kurun');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Faturayı ödenmiş olarak işaretle');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Fatura ücretli olarak işaretlendi');
jr_define('_JOMRES_APIKEY_REMAKE', 'Yeni API anahtarı oluştur');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE', 'İlk çeviriler için Google kullanılsın mı?');
jr_define('_JOMRES_AUTOTRANSLATE_DESC', 'Bu özellik yeni ve deneysel, bu nedenle kendi sorumluluğunuzdadır kullanın. Bu özelliğin amacı, belirli bir işletmenin çevirilerini otomatik olarak ayarlamak için Googleın çeviri aracını sorgulamaktır.Bu özellik sanitizes Tüm girdileri, mülkiyet ayrıntılarınızı biçimlendirmek için bir html düzenleyicisi kullanırsanız, bu biçimlendirmeyi bozacaktır. <br/> ');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Bu tek bir mülk kurulumu mu?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Bu seçenek Evet olarak ayarlanırsa, yetkili olmayan kullanıcılara Jomres\'ın ön görünüşü büyük ölçüde basitleştirilir. Bir menü seçeneğinden Jomres\'a yapılan varsayılan çağrılar, işletmelerin listesi verilmek yerine, Sistemdeki ilk mülk için rezervasyon formuna konuk olan mülk yöneticileri, Emlak Ayrıntıları önizleme düğmesini veya Yeni mülk ekle düğmesini görmez. Sadece bir mülk listelemek ve mülk için rezervasyon yaptırmak istiyorsanız idealdir. />');
jr_define('_JOMRES_HTMP_PURIFIER', 'HTML temizleyici işlevselliği kullanılsın mı?');
jr_define('_JOMRES_HTMP_PURIFIER_DESC', 'Jomres\'ın html temizleyici kütüphanesini (http://htmlpurifier.org/) kullanmasını sağlamak için bu özelliği etkinleştirin.) Kütüphane, giriş ve çıkış verileriyle uğraşırken ek bir güvenlik katmanı olarak kullanılır ve Etkin bıraktığınızdan emin olun, ancak daha fazla bellek kullanacaktır.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Bakiye ödemeleri');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Bakiye');
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
jr_define('_JOMRES_CALENDAR_TODAY', 'Bugün');
jr_define('_JOMRES_CALENDAR_PREV', 'Önceki');
jr_define('_JOMRES_CALENDAR_NEXT', 'Sonraki');
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
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', '(tekrar) kullanılabilirliği kontrol ediyor');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Kullanılabilir oda listesini yeniden oluşturma');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Toplamları hesaplama');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Biten form güncelleme');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Takvim haftası başlangıç günü, Pazar veya Pazartesi');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Sadece emlak misafirleri incelesin mi?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'İncelemeleri yalnızca bu işte zaten misafir olan kullanıcılarla sınırlandırmak isterseniz bunu Evet yapın');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Kaynak başına');

jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Kişi sayısı:');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Rezervasyon için ayrılan konuklar:');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Oda sayısı');

jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Tarife varsayılan fiyatı');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "Bu sadece yeni tarife için geçerlidir");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW', "Gösterilecek yıl sayısı");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "Bir mikromanage tarife düzenleme yapılırken gösterilecek yıl sayısını tanımlar");

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

jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS', 'Mülk yönetimi süreci');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', 'İşletmenizi / işletmenizin listesine alınma şeklinize bağlı olarak farklı yönetim süreçleri var.');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', 'Kiralık');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "Bir mülkte oda rezervasyonu yapacaksanız kiralama seçeneğini seçin (ör. Hotel / B & B / Villa / Daire)");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "Emlak / basit liste");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "Herhangi bir rezervasyon işlevi sunmuyorsanız gayrimenkul seçeneğini seçin (örn. Bir işletme / satış için bir ürün)");

jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Genel Yapılandırma bölümünde mülk yöneticilerine sağlanan seçenek sayısını azaltmak için Evet\'e getirin. Mülk yöneticilerinin çok fazla ayar yapmasını istemiyorsanız, bunun yerine jomres_config\'yi düzenleyebilirsiniz Varsayılan özellik seçeneklerini tanımlamak için .php. ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Lütfen rezervasyonunuz için bir seçenek belirleyin');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Mülkiyet ayrıntıları düzenleme sayfasındaki html editörlerini açar Ayrıca, Hayır olarak ayarlanırsa, p ve br haricindeki tüm html, girilen ve görüntülenen tüm metinlerden çıkarılır.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', "Tam ekran görünümü");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', "Normal görünüm");
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER', "Zaman dilimi değiştiricisini mülk yöneticisinin araç çubuğunda göster?");

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
jr_define('_JOMRES_SUSPENSIONS_TITLE', "Askıya alındı mı? <br/> (bir yöneticiyi askıya almak için tıklayın, bu, tüm işletmelerini otomatik olarak yayından kaldıracaktır)");
jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', "Bir yöneticiyi askıya almak için Askıya Alma Simgesini (adam ve yeşil onay işareti simgesi) tıklayın.Bu, yöneticinin mülk yönetimi işlevlerini yerine getiremeyeceği ve tüm işletmelerinin yayından kaldırılacağı anlamına gelir Süper emlak yöneticileri askıya alınamaz. ");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', "Bu hesap askıya alındı, şu anda bu hesabı kullanarak mülkünüzü yönetmek mümkün değil.");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', "Yönetici hesabı askıya alındı");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', "Yönetici hesabı eski konumuna getirildi");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', "Mülk yöneticisi hesabınızın askıya alındığını unutmayın, hesap geri getirilene kadar herhangi bir mülk yönetimi işlevini gerçekleştiremezsiniz.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', "Mülk yöneticisi hesabınızın şimdi etkin olduğunu lütfen unutmayın Herhangi bir mülk yönetimi işlevini yerine getirmeye devam edebilirsiniz. Lütfen hesabınıza giriş yapın ve uygun belge varlıklarının yayınlandığından emin olun." );
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Sık Kullanılanları kaldır');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Rezervasyon data arşivi');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Rezervasyon verileri arşivi, onay onay düğmesi tıklandıktan sonra çekilen rezervasyon bilgilerinin ham bir dökümüdür. Ham veri dökümünü görmek için fareyle üzerine gelin, bilgiler XXX__jomres_booking_data_archive tablosunda saklanır.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Hesabı düzenle');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', "Kullanıcıları ara");
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', "Bir kullanıcı aramak için kullanıcı adlarından birkaç karakter girin. <br/> Bir kullanıcı seçtiğinizde bunları otomatik olarak Yönetici olarak ekleyeceksiniz ve atayabileceğiniz bir sonraki sayfaya yönlendirileceksiniz. Işletmeler ve kullanıcılara erişim hakları. ");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', "Mevcut yöneticiler");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', "Yönetici yönetim sayfasına yönlendirilecek bir yönetici seçin.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', "Kişi Sayısı");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', "Aramayı konuk numarası açılır listesine göre göster");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', "Yıldız");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', "Yıldızları açılır listede göster");
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Konuk sayısı');
jr_define('_JOMRES_SEARCH_STARS', 'Yıldız sayısı');

jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE', "Komisyon faturaları");
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

jr_define('_JRPORTAL_ROI_TAB', 'ROI');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', "Komisyon işlevselliğini kullan?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', "Yükseltilmiş yönetici komisyon faturalarını göstermek için Evet olarak ayarlayın.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', "Yönetici rezervasyonları komisyon faturaları oluşturuyor mu?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', "Bir yönetici bir rezervasyon yaparsa bu aynı zamanda bir komisyon fatura satırı öğesi oluşturur mu?");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', "Yeni bir komisyon faturası yükseltildi");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', "Dikkatinizi gerektiren yeni bir komisyon faturası yükseltildi. Faturayı görüntülemek için lütfen aşağıdaki bağlantıya tıklayın (önce oturum açmanız gerekebilir).");
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
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE', "Javascript önbellekleme kullan?");
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC', "Jomres Javascript önbelleğe alma özelliğini kullanıp kullanmamayı seçebilirsiniz. Çoğu sunucuda, ancak hepsinde çalışmaz.Eğer javascript hataları ile ilgili problemleriniz varsa 'sonlandırılmamış dizedeki' Örnek) Firebug, bunu Hayır olarak ayarlamalısınız. ");

// 5.2.1
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW', "Geçmiş ve mevcut misafirleri listele");
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW', "Sadece mevcut misafirler");

// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Para birimi dönüştürme / para birimi kodları');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Algılama API Anahtarı');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Para birimi kodunu otomatik olarak ayarlamak için açılır menü Jomres, ziyaretçinin bulunduğu ülkeyi tespit etmek için IPinfoDB adlı ücretsiz bir hizmet kullanabilir, ancak bir API anahtarı için <a href = "http: //ipinfodb.com/register.php "target =" _ blank "> IPinfoDB </a> önce. ');
jr_define('_JOMRES_DEBUGGING_TAB', 'Hata ayıklama');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP', 'Rezervasyon formunu kalıcı bir popup penceresinde gösterilsin mi?');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'Eğer mülkiyet detaylarında rezervasyon formunu gösterme seçeneği Hayır olarak ayarlanırsa, rezervasyon formu sayfası açıldığında Jomres rezervasyon formunu kalıcı bir açılır menüde gösterebilir. (Bunlar açılır pencerenin arkasında gizli oldukları gibi) ekranda çok fazla element bulundurarak müşteriye eziyet duymadan rezervasyon formundaki bilgileri silmek');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Toplamlar paneli konumu');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'Rezervasyon panelinde, toplamlar panelinin şablona bağlı olarak farklı ayarlara ihtiyacı var. Örneğin, Jomres Joomla şablonu üzerinde 712 ayarı iyi çalışıyor, ancak Milkyway\'de 1500 civarında bir ayar özellikle daha uygundur. Eğer modsal popup özelliğiniz etkin değilse, seçtiğiniz şablonda iyi çalışan bir şey bulmak için farklı ayarlarla denemeniz gerekebilir ');
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

jr_define('_JOMRES_BOOKINGFORMWIDTH', 'Pixel cinsinden rezervasyon genişliği');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED', 'Toplamlar panelinin rezervasyon formuna kaymasına izin verilsin mi?');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'Toplamlar paneli kullanıcı aşağı kaydırılırken rezervasyon formunda kayar. Bu özelliği kullanarak bu özelliği etkinleştirebilir / devre dışı bırakabilirsiniz Not kullanıcı, bir mobil cihazın tarayıcısı üzerinden ziyaret ederse kayar. Otomatik olarak devre dışı bırakılmıştır. ');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Yeni kullanıcılara giriş bilgileri gönderilsin mi?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Create New User (Yeni Kullanıcı Oluştur) seçeneği Yes (Evet) olarak ayarlanırsa, kullanıcı oluşturulduktan sonra giriş bilgilerinin email yoluyla gönderilmemesini sağlamak için bu seçeneği No (Hayır) olarak ayarlayabilirsiniz. Örneğin yeni kullanıcıları bir posta listesine ekleme ve kullanıcıların gerçekten oturum açmasını istememe. ');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Rezervasyon formundaki toplamları göster?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Rezervasyon formunun, bu seçeneği Hayır olarak ayarlayarak toplamlar özetindeki vergi fiyat alanlarını göstermesini önle');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'İptal formu');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Kayıtlı misafirler, kayıtlı misafirler kendi rezervasyonlarını iptal edebilirler. Burada rezervasyonun belirli bir süre geçtikten sonra iptal edilemeyeceği, rezervasyon tarihindeki gün sayısını belirleyebilirsiniz.');

jr_define('_JOMRES_EDIT_PROFILE', 'Profilini Düzenle');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Özellik türü ilişkisi');
jr_define('_JOMRES_IMAGE', 'Resim');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Bu özelliği gösterebilen özellik türleri');
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
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', "Etkin mülkünüzü değiştirin");
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Bu karakterle başlayan tüm özellikleri göstermek için bir karakteri tıklayın. Gösterildikten sonra, o mülkün adını aktif mülkünüze değiştirmek için tıklayın.");

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

jr_define('_JOMRES_WARNING_SYSTEM_CACHE', 'Uyarı: Sistem Cache eklentinizin etkin olduğunu tespit ettik. Bu eklentiyi devre dışı bırakmanızı öneriyoruz çünkü rezervasyon formundaki ajax yanıtlarını önbelleğe alıyor ve sisteminizin hatalı davrandığını görüyoruz.');

jr_define('_JOMRES_QUICK_INFO', "Hızlı Bilgi");

jr_define('_JOMRES_MENU_SHOW', "Göster");
jr_define('_JOMRES_MENU_HIDE', "Gizle");
jr_define('_JOMRES_MENU_SHOW_TITLE', "Alternatif menü düzenini kullan?");
jr_define('_JOMRES_MENU_SHOW_DESC', "Ön kenardaki Alternatif menü seçeneğini kullanmak için Evet olarak ayarlayın. Hayır olarak ayarlandığında Jomres Ana Menüsü, sayfanın solundaki bir akordeon olarak menü üzerinde büyütmek için bir düğme ile gösterilir. Evet'e Alternatif Ana Menü kullanılır, bu da sayfanın üst kısmında bir menubar ile sonuçlanır Her iki menü de kullanıcıyla birlikte slayt olur ve Akordeon menü daha iyi bir menü olarak kabul edilir, ancak bunun uygun olmadığını düşünüyorsanız Sizin için alternatifi seçmekte serbestsiniz. Bu menülerden hiçbiri size uymuyorsa, belirli gereksinimlerinize uyması için mainmenu_wrapper.html ve mainmenu_options.html dosyalarını değiştirmeniz gerekecek. ");

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
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES', "Tüm kullanıcıların faturalarını listele");

jr_define('_JOMRES_DEBUGGING_SUBJECT', 'Konu');
jr_define('_JOMRES_DEBUGGING_FULLNAME', 'Tam adınız');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'E-posta adresiniz');
jr_define('_JOMRES_DEBUGGING_ISSUE', 'Lütfen sorununuzu açıklayın');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametreler');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define('_JOMRES_METATITLE', 'Meta başlık');
jr_define('_JOMRES_METADESCRIPTION', 'Meta açıklaması');
jr_define('_JOMRES_FOUNDPROPERTIES', "Bulunan özellikler");
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2', "Mülkünüzü ekleyin: Adım 1/2");
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', "Mülkünüzü ekleyin: Adım 2/2");

jr_define('_JOMRES_MYPROPERTIES', 'İşletmelerim');

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

jr_define('_JOMRES_CLEARDATES', 'Henüz herhangi bir tarihim yok');

jr_define('_JOMRES_MOBILE_REDIRECT', 'Taşınabilir cihazlarda çerçevesiz olarak yeniden yönlendirilsin mi?');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres, bir kullanıcıyı, tarayıcının bir mobil aygıta ait olduğunu algıladığında modülleri ve başlığı içermeyen bir Joomla görünümüne yönlendiren bir özelliği içerir. Zaten optimize edilmiş bir Joomla şablonunuz varsa Mobil cihazlar için, bu özelliği Hayır olarak ayarlayarak devre dışı bırakabilirsiniz ');

jr_define('_JOMRES_SYSTEM_EMAILS', 'Hangi adresten gönderilen e-postalar?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Bu seçeneği devre dışı bırakmak için bu seçeneği boş bırakın. Tek bir yetkili adres) .Bu durumda, bu girişi, tüm sistem e-postalarının FROM adresi olarak görülecek bir adres girmek için kullanabilirsiniz. ");

jr_define('_JOMRES_CSS_CACHING_TITLE', 'CSS caching kullanılsın mı?');
jr_define('_JOMRES_CSS_CACHING_DESC', '');

jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX', 'Arama takvimleri, temiz tarihleri ​​onay kutusunu göstersin mi?');

jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', "Liste görünümü");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Fotoğraf görüntüleme");

jr_define('_JOMRES_COMPARE', "Karşılaştır");
jr_define('_JOMRES_REMOVE', "Kaldır");
jr_define('_JOMRES_RETURN_TO_RESULTS', "Arama sonuçlarına dön");

jr_define('_JOMRES_ADDTOSHORTLIST', 'Faviroilere ekle');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Favorilerden kaldır');
jr_define('_JOMRES_VIEWSHORTLIST', 'Favorileri gör');

jr_define('_JOMRES_COOKIEPOLICY_TITLE', 'Çerez İlkesi');
jr_define('_JOMRES_COOKIEPOLICY_DESC', "AB Mevzuatı, çerezleri kullanan tüm web sitelerinin, çerezleri saklaması için site ziyaretçilerinden izin istiyor olmasını şart koşuyor.
<br/>
Jomres, kullanıcıların ziyaretlerini daha keyifli hale getirmek için kullanıcının arama sonuçları ve diğer etkinlikleriyle ilgili bilgilerin kaydedilebileceği kendi oturum dosyasını oluşturmak için ana bilgisayar CMS çerezini kullanır. Normal Jomres işlevselliğinin muhtemelen <i> 'olarak tanımlanan mevzuat hükümleri tarafından kapsanacağına inanıyoruz ancak abone veya kullanıcı tarafından istenen bir bilgi toplumu hizmetini sağlamak için böyle bir saklama veya erişim kesinlikle gereklidir' (bkz. Http: / / /www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) kullanıcıların çerezlerine izin vermemesi durumunda kullanıcıların arama sayfaları dışındaki sayfalara erişmesini önleme olanağı sağlamak için bu özelliği ekledik Bu şekilde kullanılmak üzere. <br/>
Etkinleştirilirse, Jomres, kullanıcıların kendileri için saklanan çerezin bu şekilde kullanılmasını seçebildiği bir 'opt-in' bağlantısı gösterecektir. Eğer katılmayı seçmezlerse, Jomres sadece onlara bazı temel sayfaları gösterecek (özellikler ayrıntıları, favorileri göster, arama sonuçları vb.).
<br/>
Bu politikayı yürürlüğe koymak için bu seçeneği Evet yapın.");

jr_define('_JOMRES_COOKIEPOLICY_1', "Önemli: Çerez İlkesi");
jr_define('_JOMRES_COOKIEPOLICY_2', "Sitemizi alakalı ve kullanımı kolay tutmak için çerezleri kullanırız.");
jr_define('_JOMRES_COOKIEPOLICY_3', "Devamını oku ...");
jr_define('_JOMRES_COOKIEPOLICY_4', "AB mevzuatı, tüm web sitelerinin çerezlerin kullanılıp kullanılmadığını ve amaçlarını açıkça belirtmesini gerektirir.");
jr_define( '_JOMRES_COOKIEPOLICY_5', "Sitenin daha iyi çalışabilmesi için daha önceden yaptığınız seçimleri hatırlaması gerekir. Bunu yapabilmesi için \"çerez\" denen, tarayıcınızı tanımlayan bilgiyi hafızasında tutması gerekir. Bunu yapabilmemiz için izin vermeniz gerekiyor. Çerez Politikası'nı kabul etmezseniz, vereceğimiz hizmetten tam anlamıyla faydalanamayabilirsiniz." );
jr_define('_JOMRES_COOKIEPOLICY_6', "Evet, çerezlerin bu şekilde kullanılmasını kabul ediyorum.");

jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Para yatırma ilk gecenin masrafı mı?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Fiyatlar gecelik olarak hesaplanır, depozitonun bir gece şarj edilmesini ister misiniz? Öyleyse, aşağıdaki seçenekleri yok sayabilirsiniz.');

jr_define('_JOMRES_NOTHINGINSHORTLIST', "Favorilerinize hiç öğe eklemediniz.");

jr_define('_JOMRES_MOBILE_SETTINGS', "Mobil cihaz ayarları");
jr_define('_JOMRES_SIMULATE_MOBILE', "Mobil modunu benzetle");
jr_define('_JOMRES_SIMULATE_MOBILE_DESC', "Jomres'ı her zaman mobil görünüme geçirmeye zorlamak için bunu evet olarak ayarlayın.Eğer mobil aygıtlar için şablon geliştiriyorsanız kullanışlıdır NOT: Yüklenmiş bir mobil şablon eklentisine ihtiyacınız olacaktır.");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION', "Simülasyon IP");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "Bu simülasyon ayarını sadece kullanıcı IPsi  IP = xxx.xxx.xxx.xxx, ise kullanabilirsiniz. Örneğin localhost üzerinde geliştirme yapıyorsanız IPnizi şu şekilde ayarlamalısınız: 127.0.0.1.");

jr_define('_JOMRES_SAFEMODE', "Güvenli modu etkinleştirilsin mi?");
jr_define('_JOMRES_SAFEMODE_DESC', "Güvenli modu tetiklemek için bunu Evet'e getirin, böylece tüm eklentileri devre dışı bırakılacaktır, böylece Jomres yalnızca temel işlevlerini kullanacaktır.");

jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');

jr_define('_JOMRES_USE_JOMRESEDITOR', "Jomres 'WYSIWYG editörü kullanılsın mı? (Önerilen)");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC', "WYSIWYG düzenleyicisini etkinleştirdiyseniz, CMS'niz için veya bir Jomres ile sağlanan html editörlerini kullanmayı seçebilirsiniz.Bu özellik yöneticileri tarafından kullanılmak üzere optimize edilmiştir. Onu kullanmayı seçmeniz önerilir. ");

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
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC', "Bu sitenin ön kısmında bir önyükleme ayarlı şablon çalıştırıyorsanız, bu seçeneği Evet'e ayarlayın.");
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
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', "Yönetici alanında Jomres Önyükleme şablonlarını kullan?");

jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'İşte düşünmek isteyebileceğiniz bazı alternatifler.');

jr_define('_JOMRES_BEEZ_WARNING', 'Note, your frontend template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar.');

jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Konuğun ülkesi otomatik algılansın mı?" );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Sistem konuğun ülkesini otomatik olarak algılamaya çalışacak." );

jr_define("_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES", "Jomres sistemi Hakkında");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP", "yardım");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", "1 ana");
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED", "Başlarken");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE", "sistem bakımı");
jr_define("_JOMRES_CUSTOMCODE_ACCESSCONTROL", "Erişim Kontrolü");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS", "geliştirici araçları");
jr_define("_JOMRES_CUSTOMCODE_ASAMODULE", "ASAModule");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES", "dil");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", "gelir yaratma");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING", "accounting");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", "bookings");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE", "site yapısı");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT", "kullanıcı yönetimi");
jr_define("_JOMRES_CUSTOMCODE_MANUAL", "Manuel (çevrimiçi)");
jr_define("_JOMRES_CUSTOMCODE_MYACCOUNTONLINE", "Hesabım (çevrimiçi)");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS", "zamanlanmış görevler");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL", "portal işlevselliği");
jr_define("_JOMRES_CUSTOMCODE_PLUGINMANAGER", "Plugin yöneticisi");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION", "entegrasyon");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS", "raporlar / istatistikler");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", "vergi");
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_TICKETS", "Biletler (çevrimiçi)");
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
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS", "Yönetim" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING", "Faturalar" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS", "Ayarlar" );
jr_define( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC", "Diğer" );
jr_define( "_JOMRES_PROPERTYCONFIG_SRPS", "SRPs" );

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

jr_define('_JOMRES_LASTEDITED_WARNING_72', 'Jomres, çıktısını oluşturmak için şablonlar kullanır. Eğer tasarımcı iseniz, Jomres\'ın görünümünü ve biçimini değiştirmeyi kolaylaştırır, kodun herhangi bir bölümünü düzenlemenize gerek yoktur, sadece ihtiyacınız olan şey Şablonun biçimlendirmesini düzenlemek için.Bu Şablon Düzenleme özelliği, bu Jomres şablonlarının kendi özelleştirilmiş sürümlerini oluşturmanızı sağlar. <br/>
<br/>
Bir şablonu özelleştirdiğinizde, özelleştirmeyi tüm mülk tiplerine veya belirli bir mülk türüne özel hale getirme seçeneğine sahipsiniz. Örneğin, NGM Random modülü eklentisi düzeni oluşturmak için basic_module_output.html şablonunu kullanır. Sonuç olarak, farklı özellik türleri için basic_module_output.html şablonunun farklı özelleştirmelerini oluşturabilirsiniz. <br/>
<br/>
Daha önce bir şablon düzenlenmemişse, o şablonun yanında Yeni seçeneğini belirleyerek yeni bir özelleştirme oluşturabilirsiniz. Yeni\'yi tıkladığınızda, o şablonu düzenleyebileceğiniz yeni bir sayfaya geçersiniz. İlk düzen /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend dizininde saklanan şablondan alınır, Kaydet\'i tıkladığınızda özelleştirmeleriniz veritabanına kaydedilir ve Jomres bu şablonu kullandığında depolanan işaretlemeyi kullanır. /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend şablonunda saklanan işaretleme değil, veritabanı. Bu, Jomres yüklemenizi yükseltirken özelleştirmelerin üzerine yazılmamasını sağlar. <br/>

<br/>
Bir şablon özelleştirildiğinde başka seçenekleriniz olur. Orijinal şablonun yeni bir kopyasını (yukarıdaki gibi) oluşturabilir, bir özelleştirmeyi yeni bir şablon özelleştirmesine kopyalayabilirsiniz, bu nedenle, örneğin oteller için basic_module_output.html\'yi önceden özelleştirdiyseniz, bu özelleştirmeyi bir a şablonuna kopyalayabilirsiniz. Araba gibi yeni bir mülk türü için yeni özelleştirme. Mevcut bir özelleştirmeyi düzenleyebilir veya silebilirsiniz. Bir özelleştirmeyi sildiğinizde, o şablonun başka bir özelleştirilmesi yapılmadığında, Jomres /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend içindeki şablonu kullanmaya geri dönecektir.Bu, bir şablonu değiştirip yaptığınız değişikliklerden memnun olmadığınızda işe yarar. Değişiklikleri silip şablonunorijinaline dönebilirsiniz.<br/>
<br/>
Jomres sürekli olarak gelişiyor ve çekirdek şablonlar genellikle güncelleniyor / değiştiriliyor. Şablon Düzenleme özelliğini kullanırsanız, bu güncellenmiş şablonlar özelleştirmelerinizin üzerine yazmaz, ancak bu da özelleştirmelerinizin bu temel şablonlarda yeni özellikler kullanmayabileceği anlamına gelebilir. Özelleştirmelerinizi analiz etme imkânımız olmadığından bu değişikliklerden yararlanabilir veya olmayabilirsiniz. Şablon Düzenleme özelliği, /'.JOMRES_ROOT_DIRECTORY.'template/xxx/frontend dizinindeki dosyaların son değiştirilme tarihlerine bakar ve şablon dosyasının son değiştirilme tarihinin şablontan yeni olduğunu algılarsa Veritabanında depolanırsa, Jomres bu gerçeği sizi uyaracaktır. Mutlaka şablon özelleştirmenizi güncellemeniz gerektiği anlamına gelmez, ancak bunu yapmanız gerekip gerekmediğine karar vermek size kalmış '); // Güncellenmiş şablon düzenleme bilgileri 7.2.0'daki değişikliklerle uyumlu olacak şekilde güncellendi ve şablon mülkiyet türü şablonlarıyla ilgili değişiklikleri düzenleme

jr_define("_JOMRES_STAYFORAMINIMUMOF", "Minimum kalma süresi");
jr_define("_JOMRES_NIGHTSFOR", "gece");

jr_define("_JOMRES_PROPERTYLIST_IMAGESASGIFS", "Özellik listesi görüntüleri, slayt görüntüleri mevcutsa özellik görüntüsünü bir gif olarak gösterin.");
jr_define("_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY", "Yalnızca mülk, özellikli bir mülkse GIF olarak göster.");

jr_define("_JOMRES_AGENT", "Agent");
jr_define("_JOMRES_AGENT_DETAILS", "Acente ayrıntıları");
jr_define("_JOMRES_AGENT_LISTINGS", "Acentenin listeleri");

jr_define("_JOMRES_PROPERTY_LANG", "Mülk dili");
jr_define("_JOMRES_PROPERTY_LANG_DESC", "Bu mülkün varsayılan dili.");

jr_define("_JOMRES_APPROVALS_CONFIG_TITLE", "Yeni mülkleri otomatik olarak onayla");
jr_define("_JOMRES_APPROVALS_CONFIG_DESC", "Bu seçeneği Hayır olarak ayarlarsanız yeni mülkleri manuel olarak onaylamanız gerekecektir. Bir mülk onaylanıncaya kadar bir Yönetici / Süper mülk yöneticisi tarafından yayınlanamaz.");
jr_define("_JOMRES_APPROVALS_MENU_NAME", "Onaylar");
jr_define("_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL", "Onay bekleyen mülkler");
jr_define("_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL", "Hiçbir mülk onay beklemiyor");
jr_define("_JOMRES_APPROVALS_APPROVE", "Mülk onayla");
jr_define("_JOMRES_APPROVALS_REVIEW", "Mülkü gözden geçir");
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

jr_define('JOMRES_NON_REGISTERED_USER', 'Kayıt olmamış kullanıcı');

jr_define('JOMRES_JQUERY18_2', 'Use Jquery 2.x?');
jr_define('JOMRES_JQUERY18_2_DESC', "Jquery 2.x is faster than previous implementations of jQuery, however it lacks certain things like $.browser and support for IE6/7/8 and older Firefox and Safari browsers. If you're seeing javascript errors on your page, or if your template/other plugins (like slideshows) use older versions of jQuery then you should set this option to No. ");

jr_define('JOMRES_SUPERIOR', 'Üstün');
jr_define('JOMRES_SUPERIOR_S', '(S)');

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
jr_define("JOMRES_GOOGLE_MAPS_INFO", "Bu katman seçenekleri çoğunlukla mülk listeleri ve mülk ayrıntıları sayfasındaki haritalara özgüdür. Etkinleştirilirse, genişletilmiş harita eklentisinde yalnızca Hava katmanı gösterilir; Son derece yavaş. ");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER", "Hava durumunu kullan?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD", "Fahrenheit mı Celcius mu?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS", "Celcius");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT", "Fahrenheit");

jr_define("JOMRES_GOOGLE_MAP_OPTION_PANORAMIO", "Panoramio katmanı kullanılsın mı?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_TRANSIT", "Transit katmanı kullanılsın mı?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_TRAFFIC", "Trafik katmanı  kullanılsın mı?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_BICYCLING", "Bisiklet katmanı kullanılsın mı?");

jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Gmap İlgi Çekici Noktalar (muhtemelen rakipleriniz dahil) etkinleştirilsin mi?');

jr_define('_JOMRES_METAKEYWORDS', 'Meta Anahtar Kelimeler');

jr_define("_JOMRES_PLEASE_PRINT", "Lütfen bu e-postayı yazdırın ve gelişinizde yanınızda bulundurun.");
jr_define("_JOMRES_OFFICE_USE_ONLY", "Yalnızca Office kullan");
jr_define("_JOMRES_SCAN_FOR_DIRECTIONS", "Yol tarifi almak için bu kodu telefonunuza taratın.");

jr_define("_JOMRES_VAT_FEATURE_ENABLE", "Dahili VIES VAT doğrulama özelliğini kullanın?");
jr_define("_JOMRES_VAT_FEATURE_ENABLE", "Jomres 7.3deki yeni özellik, geçerli KDV numaralarına sahip mülk sahiplerinin ve konuklarının ayrıntılarını girmesine ve uygun olduğunda faturalarına KDV uygulanmamasına olanak tanıyan bir özelliktir. Bu özellik AB tabanlı Mülk yöneticileri. ");

jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Girdiğiniz KDV numarası doğru gibi görünmüyor: Böyle bir numara olmalı: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Geçersiz KDV Numarası, KDV Numaranızın geçerliliğini Europa KDV Numarası doğrulama web servisi (VIES) ile kontrol edin');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Tebrikler, KDV numaranızı doğrulayabildik.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED', "KDV numarası girilmedi.");
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
$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig = $siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE', "Media Center");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY', "Mülk resmi yükleme hizmeti");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', "Resim ekle");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', "Oda resimleri");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', "Mülk ana görüntüsü");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', "Slayt görüntüleri");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', "Listeyi temizle");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', "Dosyaları buraya sürükleyip bırak");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', "Resim yüklemek istediğiniz kaynağı seçin.) Ayrı odalar (örn. Odalar) için resim yükleyebiliyorsanız, belirli bir kaynağı seçmek için ikinci bir açılır menü görülecektir.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS', "Yüklenenler için maksimum dosya boyutu". Jomres_formatBytes ($jrConfig['fileSize']). "Sadece JPG ve PNG resimlere izin veriliyor.");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', "Ana mülk görüntüsü olarak birden fazla resim yüklerseniz, bunlar Mülkiyet Listesinde kullanılacaktır. Slayt gösterileri mülk ayrıntıları sayfasında gösterilecektir. ");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', "Resminizi görüntüleyin");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', "Görüntüyü sil");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', "Resim yükle");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES', "Özellik ve Oda türü görüntüleri");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', "Oda türleri simgeleri");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', "Özellik özelliği simgeleri");

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Tüm dosyaları yükle');

$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

jr_define('END_TOUR', 'Kapat');

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE', "Mülkünüze Hoş Geldiniz");
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT', "Gösterge Tablonuza hoş geldiniz, Ana Menü\'desiniz. Mülkünüzü misafirleriniz görecek şekilde görüntülemek için Özellikler\'e, ardından Önizleme\'ye tıklayın.");

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE', "Bu mülk adınızdır");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT', "Bir mülk yöneticisi olarak oturum açtığınızda her zaman burada görebileceğiniz bir Etkin mülkünüz olacak, çalıştığınız mülk. Lütfen yalnızca çalışma hakkınızın olduğunu unutmayın. Bir seferde bir mülkte tarayıcınızda iki sekme açılamaz ve aynı anda iki farklı özellik üzerinde çalışamazsınız. ");

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE', "Bu saat dilimi açılır menü seçicisidir.");
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT', "Bu, sunucunuza farklı bir saat dilimindeyseniz, gece yarısı ve sunucunun gece yarısı senkronize edilmesine yardımcı olur");

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE', "Bu, dil seçicidir.");
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT', "Bu seçici ile geçerli dilinizi değiştirebilirsiniz. Mülk tanımınızın birkaç dilde olmasını istiyorsanız bu özellik kullanışlıdır. Emlak Bilgileri sayfasına gidebilir ve açıklamayı A dilinde, Daha sonra bu seçiciyi dil B olarak değiştirmek için kullanın. Şimdi, Emlak Ayrıntıları ayar sayfasına giderseniz, açıklamanızı dil B\'ye girebilirsiniz. ");

jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE', "Bu, Düzenleme Modu seçicisidir.");
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT', "Düzenleme Modunu açarak bu sayfadaki etiketleri özelleştirebilirsiniz. Özelleştirebileceğiniz etkinleştirilmiş etiketlerin noktalı bir alt çizgiye sahip olması durumunda, o metni tıklayın ve yeni bir metin girmek için bir açılır pencere görürsünüz. Bu aynı zamanda farklı diller için de geçerlidir, böylece etiketi A dilinde değiştirebilir, daha sonra B diline geçebilir ve metni tekrar zevkinize uygun bir şey haline getirebilirsiniz. ");

jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE', "Bu içerik alanıdır.");
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT', "Bu bölgede üzerinde çalıştığınız sayfayı göreceksiniz. Gösterge tablosunda hangi odaların ayrıldığını ve rezervasyonların sürdüğünü gösteren bir takvim göreceksiniz. Yeni Hızlı Rezervasyon veya birden fazla gün seçmek için fareyle sürükleyin. ");

jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE', "Etkin özellik geçişi sayfası.");
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT', "Aşağıdaki mülkiyetin adından ilk harfi seçerek aktif mülkünüzü değiştirebilirsiniz. Bunu yaptıktan sonra, yönetme hakkınızın bulunduğu tüm mülklerin bir listesi verilecek.");

jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE', "Burası mülk adlarınızın gösterileceği yer.");
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT', "Bir mülk başlangıcını tıkladıktan sonra mülkleriniz bu alanda gösterilir, bu mülke geçmek için bir mülk adını tıklayın. Bu sayfa, bir çok mülkü yönetmek zorunda olduğunuzda kullanışlıdır." );

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE', "Bu, mülkünüzün başlığı.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT', "Bu, mülkünüzün bulunduğu her misafir karşısında gösterilir, mülkünüzün adını, yıldız sayısını (varsa), başka bir web sitesine isteğe bağlı bir bağlantıyı ve bir QR kodunu gösterir. Misafirler adreslerini konum bilgilerini almak için akıllı telefonlarını kullanabilirler. ");

jr_define('TOUR_ID_GALLERYWRAPPER_TITLE', "Fotoğraf galeriniz.");
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT', "Bu slayt gösterisi alanı Fotoğrafları, Ayarlar -> Medya Merkezi menü seçeneğinin altındaki Media Center sayfasından yükleyebilirsiniz.");

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE', "Ana düğmeler.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT', "Burada gösterilen düğmeler Ayarlar -> Mülk Yapılandırması altındaki Mülk Bilgileri sekmesinde hangi seçeneklerin seçtiğinize bağlı.");

jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE', "Satır içi Takvim.");
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT', "Konuklarınızın belirli bir randevuda ne kadar meşgul olduğunuzu ve boşluklar olup olmadığını bir bakışta görebileceğiniz bu takvimi kullanarak, izlenen ayı değiştirmek için takvimin üzerindeki okları tıklayabilirler. Bu takvimde. ");

jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE', "Odalar listesi sekmesi");
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT', "Burada, tüm odaları görebilir ve doluluk durumunu gösteren düğmeyi tıklarsanız her odanın kullanılabilirliğini görebilirsiniz.");

jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE', "İnceleme listesi.");
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT', "Bu sekmede, mülkünüz için kalan tüm incelemeler var, yalnızca sistem aracılığıyla rezervasyon yapılmış kullanıcılar mülkünüzü inceleyebilir.");

jr_define('TOUR_ID_MAPTAB_TITLE', "Harita sekmesi.");
jr_define('TOUR_ID_MAPTAB_CONTENT', "Bu sekmede misafirler mülkünüzü yakınlaştırılabilir bir haritada görebilirler.");

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE', "Daha Fazla Bilgi sekmesi.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT', "Ayarlar -> Mülkiyet bilgileri altında misafirleriniz için ilginç olabilecek, örneğin İnceleme, Alan faaliyetleri, Sürüş yönergeleri, Havaalanları, Diğer ulaşım ve Politikalar ve feragatnameler gibi bilgileri girebilirsiniz. Girilen bilgiler, bu sekmede görülebilir. ");

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE', "Rezervasyon Formu.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT', "Misafirleriniz ayrı bir sayfaya gidebilir veya bu sekmedeki rezervasyon formunu kullanabilirler.");

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE', "Ana Emlak Detayları.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT', "Ayarlar -> Mülkiyet bilgileri altında, Mülk tanımı adlı bir formu doldurabilirsiniz. Bu, konuk bu sitede mülkünüzü ziyaret ettiğinde daima önce açılan sekmedir; bu nedenle, derhal bir metin eklemeyi denemelisiniz. Dikkatlerini çekin. ");

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE', "Mevcut ve gelecekteki tüm tarifeler");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT', "Bu, mevcut ve gelecekteki tüm tarifelerin bir listesidir. Listenin görünümünü, Ayarlar -> Özellik Yapılandırması\'na gidip Emlak ayrıntıları sekmesine tıklayarak değiştirebilirsiniz. Ayrıntılı tarife bilgilerinin ayarını değiştirin Seçenek. ");

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE', "Yerel Etkinlikler");
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT', "Mülkünüze yerel olarak rastlanan herhangi bir olay varsa, bu listede gösterileceklerdir festivaller, pazarlar vb. Belirli tarihlerde gerçekleşen olaylar için kullanılır.");

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE', "Yerel Geziler.");
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT', "Müzeler veya eğlence parkları gibi size yakın ilgi çekici yerler varsa, burada listeleneceklerdir.");

jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE', "Kullanılabilir Müzayede.");
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT', "Mülkünüz açık artırma için herhangi bir tarih bulunduysa, o zaman bu açık artırmalar burada gösterilir. Müzayede, daha sessiz dönemlerde mülkünüze mülkün sürülmesinde kullanışlı bir yöntemdir.");

jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE', "Rezervasyon yapılandırması.");
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT', "Bu sekmede, rezervasyon formunuzun çalışma biçimini nasıl yapılandırabilirsiniz? Bir mülkte, örneğin bir otel veya B & B\'de oda kiralarsanız, oda listesi tarzı gibi şeyleri yapılandırabilirsiniz.") ;

jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE', "Emlak ayrıntılarınız.");
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT', "Burada işletmenizin adresini ve KDV numarasını girerseniz, bu ayrıntılar konuklarınızın görebileceği faturalarda ve site tarafından sizin tarafınızdan üretilen tüm faturalarda gösterilir.");

jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE', "Harici bağlantılar.");
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT', "Burada başka bir siteye bağlantı ekleyebilirsiniz.");

jr_define('TOUR_ID_TAB_GATEWAYS_TITLE', "Ödeme şekli.");
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT', "Ödeme şekli, ödeme servislerini tanımlamak için kullanılan terimdir. Bu sekmede gösterilen ağ geçidi servislerinden biriyle hesabınız varsa, online ödeme yapmak için bu sekmede hesap ayrıntılarınızı girebilirsiniz.");

jr_define('TOUR_ID_TAB_MISC_TITLE', "Çeşitli");
jr_define('TOUR_ID_TAB_MISC_CONTENT', "Bu sekme başka herhangi bir sekmeye sığmayan ayarlar içindir.");

jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE', "Emlak ayrıntıları sayfası ayarları.");
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT', "Bu sekme, Emlak Ayrıntıları sayfanızda gösterildiği gibi çeşitli seçenekleri değiştirebilmenizi sağlar (bu sayfayı görmek için Jomres Ana Menüsüne gidin -> Gösterge Tablosu -> Önizleme).");

jr_define('TOUR_ID_TAB_REQUIRED_TITLE', "Rezervasyon formundaki gerekli öğeler.");
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT', "Bu sekme, rezervasyon formundaki gerekli veya isteğe bağlı öğeleri ayarlamanızı sağlar.");

jr_define('TOUR_ID_TAB_SRPS_TITLE', "Villa / Daire özel ayarları.");
jr_define('TOUR_ID_TAB_SRPS_CONTENT', "Bu sekmede, villalar ve daireler tarafından sıklıkla kullanılan ayarlar bulunur. Bir mülkün tek tek oda yerine mülkü kiraladığınız herhangi bir mülk: Bu ayarlar her ikisi tarafından da kullanılabilir Villa ve otel tipi özellikleri. ");

jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE', "Tek Kişilik Takviyeler.");
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT', "Tek kişilik ek ödemeler, ikisine hitap edebilen bir oda yalnızca bir kişiye aitse, bir rezervasyonu eklenen masraflar.");

jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE', "Tarifeler");
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT', "Bu sayfada tarife ve mevduatların nasıl hesaplandığını yapılandırabilirsiniz.");

jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE', "Turist Vergisi.");
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT', "Ülkeniz veya şehir turist vergilerini öderse, bunları buradan yapılandırabilirsiniz.");

jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE', "Mikrometrik ayarlar.");
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT', "Mikro tarife düzenleme moduna özgü ayarlar.");

jr_define('TOUR_ID_TAB_WISEPRICE_TITLE', "Akıllı Fiyat ayarları.");
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT', "Bu sekme, oda fiyatlarınızı dinamik olarak etkinleştirmenize ve yapılandırmanıza olanak tanır; rezervasyon yapılırken doluluk oranı düşük olduğunda indirimli oda fiyatları sunma olanağı sunar.");

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE', "Sizin mülkleriniz.");
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT', "Bu sayfada yönetmek için yetkilendirilmiş özelliklerin bir listesi gösteriliyor Sol tarafta, yayınlanıp yayınlanmadığını kolayca görebilirsiniz. Mülk adı da bir bağlantıdır; Bağlantısını seçerseniz, aktif mülkünüzü o mülkiyete derhal devredebilirsiniz. ");

jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE', "Tablo.");
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT', "Verileriniz masa düzeni olarak sunuluyor Solda, her sayfada gösterilen öğelerin sayısını değiştirmenize izin veren bir açılır menü var.İkinci olarak, verileri dışa aktarmanıza izin veren bir dizi düğme var Tabloya yerel cihazınıza kopyalayın 1. Verileri panoya kopyalayın 2. Verileri bir CSV (Virgülle ayrılmış değerler) olarak ver 3. Excel\'de kullanmak için uygun bir biçimde dışa aktar 4. Verileri Veriyi bir PDF dosyası olarak verin ve veriyi yazdırabilmeniz için sayfa düzenini değiştirecek olan 5 Baskı Son olarak, en sağdaki, belirli bir satırı veya satırları kolayca aratabileceğiniz bir girdi alanıdır Her bir sütun üstünde Başlıklar vardır, başlığa tıklarsanız sütunun sütun içeriğine göre artan veya azalan olarak sütun sıralanmasına neden olabilirsiniz. ");

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE', "Sizin mülkleriniz.");
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT', "Bu sayfada yönetmek için yetkilendirilmiş özelliklerin bir listesi gösteriliyor Sol tarafta, yayınlanıp yayınlanmadığını kolayca görebilirsiniz. Mülk adı da bir bağlantıdır; Bağlantısını seçerseniz, aktif mülkünüzü o mülkiyete derhal devredebilirsiniz. ");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE', "Mülk yaratma, 1. adım.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT', "Yeni bir mülk oluşturmak iki adımlı bir işlemdir, bu ilk sayfada mülkünüzün ülke ve bölgesini seçeceksiniz, mülk türünü ve onu yönetmek için kullanacağınız işlemi seçeceksiniz.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE', "Mülk ülkesi.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT', "Burada mülkiyet ülkenizi bir açılır listeden seçeceksiniz. Ülkeyi seçtiğinizde sayfanın yeniden yüklenmesi sağlanacak ve mülk için bölgeyi seçebileceksiniz.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE', "Mülk türü.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT', "Bu açılır menüden mülk türünüzü seçin. Tüm mülkünü kiralıyorsanız veya mülkünüzde oda kiralıyorsanız, villa veya daire gibi bir şey olabilir. Muhtemelen otel veya yatak ve kahvaltı seçecektir. ");

if (isset($MiniComponents->registeredClasses['00001']['jintour_start'])) {
   jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE', "Yönetim süreci.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT', "Yönetim işlemi, mülkünüzün sitedeki ziyaretçiler tarafından nasıl kullanılacağıyla ilgilidir. Bir mülk ya da mülkte bir oda kiralıyorsanız, Kiralık\'ı seçersiniz. Turlar / Aynı rezervasyon formunda ayrılmış sonlu kaynak rezervasyonu (örneğin kayaklar), o halde yine de bu seçeneği seçersiniz. Sadece oda olmadan turlar / sonlu odalar teklif ediyorsanız, Turlar seçeneğini seçin. Kiralama işlevselliği ve yalnızca bilgi amaçlı olarak mülkiyet ekliyor, ardından Gayrimenkul\'ü seçin. ");
}else {
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE', 'Yönetim süreci.');
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT', 'Yönetim işlemi, mülkünüzün sitedeki ziyaretçiler tarafından nasıl kullanılacağıyla ilgilidir. Bir mülk ya da mülkte bir oda kiralıyorsanız, Kiralık\'ı seçersiniz. Turlar / Aynı rezervasyon formunda ayrılmış sonlu kaynak rezervasyonu (örneğin kayaklar), o halde yine de bu seçeneği seçersiniz. Sadece oda olmadan turlar / sonlu odalar teklif ediyorsanız, Turlar seçeneğini seçin. Kiralama işlevselliği ve yalnızca bilgi amaçlı olarak mülkiyet ekliyor, ardından Gayrimenkul\'ü seçin.');
}

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE', "Mülkiyet oluşturma adımı 2.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT', "Artık mülkünüz hakkında bilgi girmeye başlayabilirsiniz. Şimdilik resimler hakkında endişelenmeyin, bunları daha sonra Ayarlar -> Medya Merkezi aracılığıyla yükleyebilirsiniz.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE', "MRP veya SRP.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT', "Bir mülkte oda mülkleri kiralayıp kiralayorsanız konfigürasyon seçenekleri farklılık gösterir. Oda öneriyorsanız MRP\'yi seçin, tüm mülkü sunuyorsanız SRP\'yi seçin. Mülkün sunduğu oda sayısını seçebileceğiniz yeni bir açılır menü verilecek, bu seçeneklerden birini seçmeniz gerekecek. ");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE', "Mülk adı ve adresi.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT', "Lütfen aşağıdaki alanlara mülk adını ve adresini giriniz.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE', "Yıldız sayısı.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT', "Mülkünüz tanınmış bir standarda dayalı birkaç yıldız verildiğinde, açılır listeden bu numarayı seçin Bazı ülkeler tek bir genel standartla derecelendirmeye sahiptir - Belçika, Danimarka, Yunanistan, İtalya, Malta, Hollanda, Portekiz, İspanya ve Macaristan\'da otel derecelendirmesini tanımlayan kanunlar vardır Almanya, Avusturya ve İsviçre\'de derecelendirme, ilgili otel endüstrisi birliği tarafından beş yıldızlı bir sistem kullanılarak tanımlanır - Almanca sınıflandırmaları Turist (*), Standart (* *), Konfor (***), Birinci Sınıf (****) ve Lüks (*****), standartta tanımlanan minimumun ötesinde marka ekstra işareti ile işaretlenmiş. ");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE', "Harita konumu.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT', "Mülk ayrıntıları sayfasında bir harita göreceksiniz. Mülkünüzün konumunu burada enlem ve boylam girdilerini kullanarak veya haritanın içine sürükleyip bırakarak yapılandırıyorsunuz.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE', "Mülk özellikleri.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT', "Mülkünüz için geçerli olan özellikleri seçin.Bu özellikler sitenin arama işlevinde kullanılır, dolayısıyla bu özelliklerin mülkünüzü doğru bir şekilde yansıtması önemlidir.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE', "Mülkünüz hakkında bilgi.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT', "Mülkünüz hakkında bilgi girebileceğiniz birkaç alanınız var.Mevcut Ayrıntıları / Önizleme sayfanızın ilk sekmesinde Mülk Tanımı gösterilecektir, bu nedenle dikkatinizin çekilmesi gereken metni buraya koymanız gerekiyor . ");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE', "Politikalar ve Sorumluluk Reddi Beyanları.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT', "Burası, iptaller masrafları gibi mülk politikalarınızı koymanız gereken yerdir. Misafir rezervasyon formunu doldurduktan sonra, rezervasyon işlemlerini tamamlamadan önce şartlarını kabul etmeniz ve Mülkün şartlarını gösteren bir bağlantıyı tıklayın.Bu bağlantıyı tıkladıklarında, bu girdiye girilen bilgiler küçük bir pencerede gösterilir. ");

jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE', "Tüm rezervasyonları listeleyin.");
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT', "Bu sayfada depozitinin ödenip ömürünülmesine bakılmaksızın rezervasyonların hepsini göreceksiniz. Rezervasyonun ayrıntılarını görüntülemek için rezervasyonun solundaki Düzenle simgesini tıklayın.");

jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE', "Yeni rezervasyonları listeleyin.");
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT', "Bu sayfada tüm yeni rezervasyonların bir listesi gösterilir, diğer bir deyişle rezervasyon için bir mevduatın ödenmediği yerlerde rezervasyon yapılır. Rezervasyonun ayrıntılarını görüntülemek için rezervasyonun solundaki Düzenle simgesini tıklayın . ");

jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE', "Eski rezervasyonları listeleyin.");
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT', "Bu sayfada tarihi yapılan tüm rezervasyonlar listelenir, yani rezervasyon iptal edilmiş veya konuğa ayrılmış durumdaysa, rezervasyonun solundaki düzenleme simgesini tıklayarak rezervasyon bilgilerine bakın.");

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE', "Davetlileri listeleyin.");
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT', "Sayfa şu anda aktif olan mülkünüz için tüm misafirleri listelemenize izin verir Varsayılan olarak yalnızca misafir olan ya da olacak olan misafirler listelenir ancak açılan listeden tarihi misafirler seçilerek rezervasyonu yapılan konuklar dahil edilebilir Mevcut misafirler kadar rezervasyonlarını iptal ettiler. ");

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE', "Geçersiz Kılmalar.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT', "Burada geçersiz kılmalar yalnızca mülkün yöneticileri tarafından kullanılabilir; konuklar onları göremez veya kullanamazlar. Hem rezervasyonun son oda fiyatını geçersiz kılmanıza izin verirler (isteğe bağlı ekstralar bu geçersiz kılma listesine dahil değildir, Hâlâ tam fiyata borçlandırılmaktadır) ve teminatın değeri gereklidir. ");

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE', "Kuponlar.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT', "Bu mülk için bazı kupon kodları oluşturduysanız, bu giriş mevcut olacak ve konuklar oda rezervasyonlarının değerini düşürmek için kupon kodlarını buraya girebilecekler.");

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE', "Kesinlik.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT', "Bu seçeneklerin herhangi birinin değiştirilmesi oda listesinin değişmesine neden olur, çünkü liste, rezervasyonun uzunluğuna ve diğer değişkenlere göre yeniden değerlendirilir. Bazı konuk türleri oluşturduysanız, booker bunu yapacaktır. Burada rezervasyon için konuk sayısını da değiştirebiliyoruz. ");

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE', "Oda özellikleri filtresi.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT', "Mülkü Klasik Odalar listesini kullanacak şekilde yapılandırdıysanız, misafirler belirli bir oda için değil, yalnızca rezerve etmek istedikleri oda seçebilir. -market özellikleri.Oda listesinde tıklanabilir görüntüler vardır, bu tıklandığında o tek kişilik oda hakkında daha fazla bilgi açılır.Eğer bu düzenin ek bir bonusu, bazı oda özelliklerini yarattıysanız ve bir odayı belirli bir özelliğe sahip olarak işaretlediyseniz, o zaman ziyaretçi Oda özelliklerini kullanarak, tam olarak ne istediklerini almalarını sağlamak için mevcut odaları filtrelemek için kullanabilirsiniz Not: Oda listesinde gösterilen her tipteki oda sayısını Ayarlar -> Mülk Yapılandırması - > Oda rezervasyonu bölümünde, Kullanılabilir oda / tarife limit seçeneğini değiştirerek, daha küçük bir oda listesini gösterecektir, ancak mülk yöneticisi olarak halen oda listesini tam olarak göreceksiniz."); 

if (isset($MiniComponents->registeredClasses['00001']['jintour_start'])) {
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE', 'İsteğe bağlı ekstralar.');
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT', "Burada gösterecek iki tür isteğe bağlı ekstralar oluşturabilirsiniz: Birinci tip, birkaç farklı modele göre oluşturulabilen basit bir isteğe bağlı ekstradır, örn. Per night, per person, per person per night Vs. Bunlar, konukların rezervasyona ekstra şeyler eklemek istediklerinde yararlıdır, ancak bu öğeler sonlu odalar değildir.Böylece örneğin Varış Üzerinde Çiçek Çiçekleri veya Havaalanı Transferi ekleyebilirsiniz.Diğer ekstralar yapılandırılmıştır Ayarlar bölümündeki Tour / Activity Profiles Management (Tur / Etkinlik Profilleri Yönetimi) menü seçeneğinden ve sonlu odalı öğeler oluşturmak için kullanılır.Örneğin bu, müzelere ve diğer sitelere yapılan yerel turlar gibi şeyler için kullanılır.Teşekkür ederiz, yalnızca birkaç boşluğun olduğu her tür kaynak Belirli bir tarihte kullanılabilir.");
} else {
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE', 'İsteğe bağlı ekstralar.');
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT', "Burayı gösterecek isteğe bağlı ekstralar oluşturabilirsiniz. Bunlar birkaç farklı modele göre oluşturulabilir, örn. Gece, Kişi Başına, Kişi Başına Gece Kişi vs. Bunlar misafirleri eklemek istediğiniz zamanlarda faydalıdır. Ekstralar rezervasyonu, ancak bu öğeler sonlu odalar değil.Böylece, Varış ya da Havaalanı Transferi Bunch çiçek ekleyebilirsiniz.");
}

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE', "Mevcut misafirler.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT', "Eğer bazı konuklarınız girilmişse, burada görünen açılır menüden adlarını seçerek seçebilirsiniz. Bu, ayrıntılarını tekrar tekrar eklemek zorunda kalmazsınız. Aynı misafirler, bunları seçmek için daima bu açılır listeyi kullanmalısınız aksi halde her seferinde ayrıntılarını el ile girerseniz aynı isimlerle birden fazla misafir oluşturursunuz. ");

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE', "Misafir ayrıntıları.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT', "Bir konuk tarafından doldurulması gereken alanları değiştirmek isterseniz, Ayarlar -> Özellik Yapılandırması -> Gerekli sekmesine gidebilirsiniz.");

jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE', 'Kapalı odalar');
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT', "Kapalı odalar otel tarafından yapılmış ancak belirli bir konuk için her zaman geçerli değil, bunun sebebi muhtemelen otel yıllık tatilinde olması veya bir oda yenileme için kapalı olması nedeniyle olabilir.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE', 'Mülkünüz hakkında bilgi.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT', 'The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here.');

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE', "Normal mod tarife.");
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT', "Oda fiyatını girmenin en basit yolu budur. Belirli bir türün oda sayısını, oda fiyatını, odanın konaklayabileceği konuk sayısını ve toplam kişi sayısını Bir rezervasyonda eğlendirmek ve Kaydet\'i tıklatmaya hazırlar.Fiyatlar daha sonra on yıl için belirlenir.Ücretleri daha fazla kontrol etmek isterseniz lütfen tarife düzenleme modunu Advanced veya Micromanage olarak değiştirin. ");

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE', "Normal mod tarife.");
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT', "Bu, oda fiyatlarına girmenin en kolay yoludur.) Mülk türünüzü seçin, bir fiyata ve bir rezervasyontaki maksimum kişiyi girin ve Kaydet\'i tıklayın.Fiyatlar önümüzdeki on yıl için belirlenecektir. Eğer fiyatlar üzerinde daha fazla kontrol istiyorsanız, tarife düzenleme modunu Advanced (Gelişmiş) veya Micromanage olarak değiştirin. ");

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE', "Odalar ve Tarifeler.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT', "Bu sayfada Oda, Tarife ve Oda Özellikleri\'ni düzenleyebilirsiniz .Bireysel öğeleri düzenlemenize izin veren üç sekme bulunur: Oda veya tarifeleri düzenlemeye başlamadan önce, Oda Tipleri ve Tarifeler Arasındaki İlişki Rezervasyon formunda bir oda seçmek için bir oda tipi açılır menü veya bir tıklama düğmesi görürseniz, gerçekte oda ve tarife kombinasyonunu seçtiğinizden bu yaklaşım, Aynı oda / oda tipleri için farklı tarifeler oluşturun, örneğin Oda Kahvaltı için bir tarife ve Bed, Breakfast + akşam yemeği için ikinci bir tarife oluşturabilirsiniz. Odalar, bireysel oda özelliklerine sahip olabilir .. Oda listeniz ayarlanmışsa Klasik, o zaman misafirleriniz rezervasyon formundaki odaları filtrelemek için Oda Özellikleri\'ni kullanarak istediğiniz özelliklerin bulunduğu bir oda bulabilirler. ");

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE', "Odalar ve Tarifeler.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT', "Bu sayfada size mülkiyet türünüzü ve tarifelerinizi düzenleyebilirsiniz.");

jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE', "Misafir türleri.");
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT', "Kişi başı ücretlendirmeyi planlıyorsanız veya yalnızca kaç kişi konaklayacağınızı bilmeniz gerekiyorsa konuk türleri, ayarlarınızın önemli bir parçasıdır İstediğiniz misafir tipini de oluşturabilir, Örneğin Yetişkinler, Gençler ve Çocuklar Misafir türleri, taban fiyattan (tarifeler sayfasına girdiğiniz fiyat) daha fazla veya daha düşük maliyetle sabit bir orana veya yüzdeye göre yapılandırılabilir. Farklı Konuklar. Gece Başına Kişi Başı Ücretlendirmiyorsanız, o zaman misafir türünü oluştururken ayarları varsayılan değerlerine bırakabilirsiniz. ");

jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE', "Kuponlar.");
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT', "Kupon kodları, tekrar eden iş kurma veya yeni bir özelleştirme yapmak için kullanışlı bir yöntemdir. Yeni bir kupon kodu oluşturduğunuzda, sistem sizin için otomatik olarak rastgele bir kod üretir, ancak buna ihtiyacınız yoktur. İsterseniz kendi kodunuzu oluşturabilirsiniz. Kupon kodu oluşturduğunuzda bunu bir konuğa atayabilirsiniz veya değil. Özel konuklara atanmamış kodlar herhangi biri tarafından kullanılabilir, bu kodlar Pazarlama materyalleri üzerinde kullanılmalıdır.Kodun ne zaman kullanılacağı ile rezervasyonun hangi tarihlerin arasında olması gerektiğini tarihleri ​​de tanımlayabilirsiniz.Bir kupon kodu oluşturulduktan sonra, Kodları misafirlere veya potansiyel konuklara kolaylaştıran basılı bir kupon kodları listesi görüntüleme Daha sonra çıktıdaki QR kodunu cep telefonuna / tablet PC\'ye tarayabilir Kod, rezervasyon formuna doğrudan yönlendirecektir. Zaten geçerli olan indirim kodu. ");

jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE', "İsteğe bağlı ekstralar.");
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT', "İsteğe bağlı ekstralar, bir rezervasyona eklenebilecek ek öğelerdir, bunlar sınırlı kullanılabilirlik tarafından sınırlandırılmamış öğelerdir, bu nedenle bunlarla ilişkili bir kaynak yönetimi yoktur. İsteğe bağlı bir ekstra oluşturduğunuzda, Örneğin bir rezervasyona eklenebilecek azami sayı ve ek ücretin Zorla verilmesi gerekip gerekmediği gibi çeşitli ayarlar Bu, rezervasyon formunda otomatik olarak seçilip seçilmediği anlamına gelir. Bu, havlu veya temizlik ücreti gibi zorunlu ödemeler için de yararlıdır Ayrıca ekstra bir ödemenin nasıl hesaplanacağı anlamına gelen bir Model seçmeniz gerekecektir: Tek bir ödemenin uygulanmasını istiyorsanız (örneğin, Varışta mevcut şampanya şişesi) o zaman modeli Per Başına ayarlarsanız, ancak her gün için bir şeyler talep etmek isterseniz, Günlük seçeneğini seçersiniz. ");

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE', "Oda seçici.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT', "Bu kaynak seçicidir. Ne tür bir kaynak yüklediğinizi seçmenizi sağlar (örneğin, Slayt görüntüleri veya oda) ve eğer bir oda ise Odaları seçtikten sonra Resim yüklemek istediğiniz oda seçme seçeneği verilmişse yanındaki diğer bir açılır menüde istediğiniz her oda için birden fazla resim yükleyebilirsiniz. Not: oda görüntüsü yüklemesi yalnızca Otel, B & Bs gibi özellikler için geçerlidir. Vb. Villalar ve daireler bu seçeneğe sahip olmayacaktır. ");

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE', "Mevcut resimler.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT', "Bu sütun, halihazırda yüklenen görüntüleri gösterir, ya resmi görüntülemeyi ya da silmeyi seçebilirsiniz. Kaynak saatini her değiştirdiğinizde, bu sütun o belirli resimlerin gösterileceği şekilde güncellenir Kaynak. ");

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE', "Yükleme denetimleri.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT', "Burada birkaç denetimin var. Yüklemek istediğiniz görüntüleri seçmek için Görüntü Ekle düğmesini kullanabilirsiniz veya altındaki kutuya görüntüleri sürükleyip bırakabilirsiniz. Temizle düğmesi görüntülerin listesini temizler Yükleme için görüntüleri seçtikten sonra bunları tek tek veya hepsini tek seferde yükleyebilirsiniz. ");

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE', "Seçilen resimler.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT', "Bu sütun, karşıya yüklenmeye hazır resimler veya bu sayfayı ziyaret ettiğinizden beri yüklediğiniz resimleri gösterir.");

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE', "Bitti!");
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT', "Bu sayfanın yardım bilgilerinin sonu bu, başka sorularınız olursa lütfen bizimle iletişime geçmekten çekinmeyin.");

jr_define('PRODUCT_TOUR_PAGE_INFORMATION', 'YARDIM');

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
jr_define('_JOMRES_STATUS_PROVISIONAL', "Geçici rezervasyon");
jr_define('_JOMRES_STATUS_CONFIRMED', "Onaylanmış rezervasyon");
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

jr_define("_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB", "Gezinti çubuğu ayarları");
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

jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE', "Rezervasyon yapılandırması.");
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT', "Bu sekmede, rezervasyon formunun görünümünü ve şeklini yapılandırabilirsiniz.");

jr_define('TOUR_ID_TAB_BOOKINGS_TITLE', "Rezervasyonlar");
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT', "Bu sekme, rezervasyonların nasıl işlendiğini ve ayrıca çeşitli diğer ayarları değiştirebilmenizi sağlar.");

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE', "Misafirleri Düzenle.");
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT', "Bir konuğun adres bilgilerini düzenleyebilir, burada yaptığınız değişikliklerin yalnızca bu rekorun içine yansıyacağını lütfen unutmayın .. Konuk başka mülkler üzerinde rezervasyonlar yapmışsa, bu değişiklikler diğer kullanıcıların adresinde görünmez. özellikleri." );

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE', "KDV.");
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT', "Burada bir KDV numarası girilirse konuk faturasında gösterilir.");

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE', "İndirim.");
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT', "Bu konuğa rezervasyon yaparken otomatik olarak indirim yapmayı seçebilirsiniz.");

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
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS',"Bu sayfa rezervasyon sürecinde gönderilecek otomatik mailler içindir: <a href=\"http://manual.jomres.net/email_templates.html\" target=\"_blank\">Email Templates Help</a>");
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
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY', 'Fiyat katmanı göster');
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY_DESC', 'Özellik listesinde birikimli bir fiyatın mülkiyet görüntüsü üzerinde gösterilmesi mümkündür, bu ayarı kullanarak bu ekranı kapatın. Birikimli fiyat, ajax arama bileşik eklentisinde girilen tarihlerden hesaplanır.' );

jr_define('_JOMRES_LIVE_SCROLLING', 'Özellik listesine Canlı Kaydırma / Geçici Kaydırmayı Kullan?');

jr_define('_JOMRES_ONLINE_PARTNERS', 'İş ortakları');

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

jr_define('_JOMRES_WORD_CACHING', 'Önbellek Oluşturma');

jr_define('_JOMRES_WORD_PATTEMPLATE_CACHING', 'Use patTemplates Caching?');

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

jr_define('_ASSIGN_COMMISSION_RATES', 'Komisyon ücretleri tahsisi');

jr_define('GATEWAYS_INSTRUCTIONS', 'Bu sayfada herhangi bir kurulu ağ geçidini yapılandırabilirsiniz.Bu seçenekler, herhangi bir Komisyon veya Abonelik faturaları için ödeme yapmanıza izin verir .Örneğin ayarları yalnızca Paypal tarafından geçersiz kılınabilir, diğer tüm ağ geçitleri üzerinden yapılandırılmalıdır. Özellik Yapılandırması -> Ağ geçitleri sekmesi, ancak bu listede bir ağ geçidi görünüyorsa, hem Rezervasyon depozitosu ödemelerini hem de fatura ödemelerini işleme kapasitesine sahip olmalıdır. ');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Mülk ayrıntıları sayfasında gösterilsin mi?');

jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Özellik Ayrıntıları sayfası ayarları');

jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Jomres\'taki mülk yönetimi yalnızca site önyapı cpanelinden yapılır.Bu sayfada, sistemdeki tüm mülkleri listeleyeceksiniz, böylece komisyon oranları atayabilir ve bunları onaylar veya onaylamazsınız (eğer bunlar Özellikler aktiftir.) Yeni bir mülk yaratmak, mevcut mülkleri düzenlemek, rezervasyonları yönetmek veya diğer mülk / rezervasyonlarla ilgili görevleri yönetmek için, site önyüzüne giriş yapmanız ve Jomres varsayılan sayfasına gitmeniz gerekecektir. Jomres ön paneli. ');

jr_define('PROPERTY_STATS_SALES', 'Satış');
jr_define('PROPERTY_STATS_SALES_DESC', 'Rezervasyon yaptırıldığı zamandır');

jr_define('PROPERTY_STATS_BOOKINGS_DAYS', 'Rezervasyon (gün)');
jr_define('PROPERTY_STATS_BOOKINGS_DAYS_DESC', 'Rezervasyon tarihleri ​​başlangıç ​​ve gün sayısı.');

jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS', 'Rezervasyon (odalar x gün)');
jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS_DESC', 'Belirli bir ayda ayrılmış oda sayısı.');

jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Oda özellik simgeleri');

jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'İşletme Özellikleri Kategorileri');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'İşletme Özellik Kategorisini Düzenle');
jr_define('_JOMRES_HCATEGORY', 'Kategori');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'İşletme özelliklerini kategorilere ayırdı mı?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Özellik özelliklerini kategorilere ayırmak için bunu EVET\'e getirin Bu seçenek yalnızca mülk ayrıntıları sayfasında görüntülenen mülk özelliklerini etkiler, diğer tüm sayfalar onları kategorilere ayırmadan görüntüler.');

jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Geri alma iadesi');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Ödemeyi geri al');

jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');

jr_define('DEFAULT_TERMS_AND_CONDITIONS', 'Bu Şartlar ve Koşullar, Sahibinin Sahibine Karşı Yükümlülüklerini, Kiraya Alma Sahibinin Sahibine Karşı Yükümlülüklerini açıkça belirtir ve anlaşmazlıklar olması halinde, herhangi bir ihtilaf durumunda, Rezervasyonunuzu onaylamadan önce lütfen onları dikkatli bir şekilde okuyun.

Check-In: [Zaman] / Check-Out\'dan: [Zaman] (Yüksek Sezon Haftalık Kiralama)\'ya göre

Düşük Sezon Haftasonu ve Haftalık Haftalık Kiralamalar için daha erken bir Check-In ve daha sonradan Check-out mümkün olabilir (genellikle [Saat] ve Çıkışları [Saat] ile)

Bu Hükümler ve Koşulların kabul edilmesi, aşağıdaki iki taraf arasında bir sözleşmeyi bağlar:

Kiracı Başvuru Sahibi (Kiracı) ve Mülk Sahibi (Sahip)

 

 1. Kira sözleşmesi yapılan kişiler

Kira Sözleşmesinde listelenen veya Kiracı tarafından daha sonra eklenen herkes, bu sözleşme şartlarına tabidir. Mülkün mülkiyeti, Sözleşmede listelenen veya daha sonra Kiracı tarafından eklenen isimlerle sınırlıdır. Kira Başvuru Sahibi Kiracı olarak kabul edilir ve kiralama süresi boyunca Kiralama Grubunun tüm üyeleri için tam sorumluluk kabul eder. Bu kiralamayla ilgili bilgi veya talimatlar, Kira Başvuru Sahibine yalnızca Kiralama Grubunun üçüncü taraf üyelerine değil, herhangi birine bildirilmeyecektir.

2. Ödemeler

Bir rezervasyon, başvuru onaylandıktan ve ilk ödeme veya tam ödeme işlemi tamamlandıktan sonra Sahibi tarafından onaylanacaktır. Bir hafta veya daha uzun süreli rezervasyonlarda, rezervasyonun kiralanmaya başlamasından 45 gün veya daha fazla süre önce yapılması halinde, kiralama ücretinin [X%] oranında bir ilk kira ödemesinde ödeme esnasında rezervasyon sırasında ödeme yapılması gerekecektir. Kira başlamadan en az 45 gün önce bir rezervasyon yapıldıysa veya rezervasyon tam bir haftalık sürenin altında ise, kira bedelinin tamamı rezervasyon anında ödenmelidir. Bir rezervasyonun Sahibi tarafından kabul edilmemesi durumunda, ödenen tüm ücretler derhal iade edilecektir. Kiralama döneminin başlangıcından itibaren 10 gün içinde yapılan herhangi bir rezervasyon, rezervasyon anında PayPal, onaylı çek veya havale yoluyla kredi kartıyla tam olarak ödenmelidir. Tam ödeme yapılmadan rezervasyon yapılmayabilir.

Rezervasyon sahibi tarafından alınır ve kabul edildiğinde Kiracı, mülkün 45 gün önce kira ücretinin bakiyesinin ödenmesinden sorumludur. Ödeme tarihinden itibaren ödeme yapılmazsa iptal olarak kabul edilecek ve mevduat iptal edilecektir.


3. İptal Politikası & Rezervasyon Değişikliği

Bir rezervasyon onaylandıktan ve onaylandıktan sonra, iptaller yalnızca aşağıdaki şartlara uygun olarak yapılabilir:

- Kiralama süresi tekrar tayin edilebiliyorsa, kiralanan veya onun bir kısmı için bir geri ödeme, daha az bir iptal ücreti [Tutar] verilecektir.

- Kiralama süresinin herhangi bir kısmı yeniden rezerve edilemezse, Kiracı o dönem için ödenen paraların tamamını kaybedecektir.

 4. Mülkün Oturması

Bir mülkün karşılayabileceği azami kişi sayısına bakılmaksızın, Mülkiyet\'i işgal eden konukların sayısı, Kira Sözleşmesinde veya yazılıma yazılı olarak Sahibine bildirilen daha sonraki değişikliklerde belirtilenlerle sınırlıdır. Belirtilen ve üzerinde anlaşmaya varılan doluluk miktarı, yaş, gece ve gündüz misafirleri ne olursa olsun tüm kişileri kapsar.

Belirtilen ve üzerinde anlaşmaya varılan kişilerin sayısını aşmak, geri ödeme yapılmaksızın derhal tahliye ile sonuçlanacak veya Sahibi\'nin takdirine bağlı olarak gece başı 100 ABD doları konaklama ücreti tahsil edecektir.

 5. Mülkiyet Durumu

Mülk işgalden önce teftiş edilecek ve bu nedenle Kiracı aşağıdakileri taahhüt eder:

- Dikkat gerektiren herhangi bir hasar ve / veya bakım ile ilgili olarak Mülk sahibini hemen bilgilendirin.

- Mülkiyet ve tüm mobilya, demirbaş, demirbaş, av tüfeği ve efektleri, Kiranın başlangıcında bulunan mülkte veya mülkte aynı onarım ve durum durumunda saklayın.

 

- Bir temizlik hizmetinin sağlandığı yerlerde; Kiracı, Sahibinin sağladığı ayrılış talimatlarını izleyecektir.

- Bir temizlik hizmeti verilmezse; Kiracı, bulunduğu mülkü temizlik ve genel düzenli şekilde bırakacaktır. Bunu Mülk Sahibinin memnuniyetine başaramamak, bir hasar / temizlik ücretinin alınmasına neden olacaktır.

6. Telefon ve İnternet Hizmetlerinin Kullanımı

Kiralamanın bir parçası olarak bir telefonun verildiği durumlarda, Kiracı, aksi öngörülmedikçe, tüm uzak mesafe telefon görüşmelerini bir kredi / telefon kartına veya çağrı toplamaya yüklemelidir. İnternet servislerinin sağlandığı yerlerde indirme kısıtlamaları olabilir ve bunlar aşılırsa ücret alınabilir. Herhangi bir indirmeye başlamadan önce bir internet cihazında kısıtlamaları kontrol etmek kiracının sorumluluğundadır.

 7. Evcil Hayvanlar

Bir köpeğe izin verilir [herhangi bir kısıtlamayı belirtin]. Evcil hayvan işgaline ilişkin tüm kanıtlar, kiralık sürenin bitiminde mülkiyetten çıkarılmalı ve gerekçesiyle kaldırılmalıdır. Evcil hayvanların yatak dahil olmak üzere herhangi bir mobilya öğesine izin verilmemektedir ve mobilya ve yatak takımlarında evde beslenen hayvan kanıtı kanıtı ek temizleme ücreti alabilir.

YA DA

Evcil hayvanlar bu mülkte kesinlikle yasaklanmıştır. Evcil hayvan işgaline dair herhangi bir kanıt hasar mevduatının tamamıyla sonuçlanmasına neden olacaktır.

Tesis, herhangi bir alerjik reaksiyon veya mülkiyetin dolaşımından kaynaklanan diğer koşullar için hiçbir sorumluluk kabul etmez. "Evcil Hayvan Yok" unvanı, bir zamanda mülkte evcil hayvan olmadığına işaret etmez.

8. Sigara içmek

Otelin yakın çevresinde veya yakınında sigara içilmesine izin verilmiyor.

9. Kış Aylarında Mülk Erişimi

Mülk kış aylarında kiralık olarak sunulmaktadır ve karaya erişimi vardır ve [belediye veya özel yükleniciyi belirtin] tarafından bir kar temizleme hizmeti alır. Bununla birlikte, kiracılara, büyük bir kar yağmasının ardından, kar temizleme sağlayıcıları önceden belirlenmiş bir düzende yerel yolları temizlemek üzere sözleşmeli olarak verilmektedir. Sonuç olarak, bir mülkün sürülmesi birkaç saat veya şiddetli fırtına koşullarında günlerce ertelenebilir. Muhtemel olmayan bir durumda Kiracı, planlanan ayrılış tarihinde bir malı terk edemezse, Kiracı herhangi bir ilave konaklama masrafından sorumlu değildir. Tersine, kar temizleme eksikliği bir Kiracının mülke ulaşmasını engellediğinde, Kiracı, mülkün erişilemediği gün (ler) için kira bedelinin geri ödenmesini alacaktır. Bununla birlikte, kar temizlemesi olmadığından zamanında bir mala ulaşamayacağımız veya zamanından önce ulaşamamanın bir sonucu olarak ortaya çıkan her türlü kayıp, ek masraf veya cezadan Owner sorumlu tutulacaktır. Kiracılara, araçlarının ve araçlarının, Mülkiyet Ziyareti sırasında karşılaşılabilecekleri kış koşullarında sürülmesi için uygun şekilde hazırlandığından ve donanımlı olduğundan emin olmak için hatırlatılır.

10. Sağlanan Ekipman ve Tesisler

Ekipman ve tesisler, Sahibinin takdirine bağlı olarak sağlanır ve her türlü teşebbüs, kiralanma süresinin tamamlanması için gerekli ekipmanın kullanılamaz hale getirilmesini sağlayan bir arıza veya başka bir durum ortaya çıkarsa, bu ekipmanın kiralama süresince çalışır durumda olmasını sağlamak için yapılır; Bu Ekipman veya Tesislerin kullanılmaması nedeniyle Kiracı değiştiren veya geri ödeme sorumluluğu Sahibi tarafından karşılanmaz. Bahsedilen ekipman ve tesisler, deniz taşıtları, motorlar, televizyonlar, VCR\'ler / DVD\'ler, sıcak küvetler, saunalar ve jakuziler gibi öğeleri içerir (ancak bunlarla sınırlı değildir).

 

Kiracı herhangi bir çalışmaz veya arızalı ekipmanı Derhal Sahibine bildirmelidir! Sahibi mümkün olan en kısa zamanda onarım yaptırmak için makul çabayı gösterecektir; Bununla birlikte, [Bölgenizdeki] sınırlı servis müteahhitleri vardır. Kiralanan sürenin başlangıcında reklamı yapılan tüm teçhizatların ve cihazların çalışır durumda olmasını sağlamak için her girişim yapılmakla birlikte, kira indirimi yapılmamaktadır; indirim; Veya klima, bulaşık makinesi, çamaşır makinesi, kurutucu, TV veya diğer cihazların mekanik arızaları nedeniyle geri ödeme yapılacaktır.

 11. İadeler

Su sistemleri, sıhhi tesisat ve elektrik sistemleri ve soba veya buzdolabı gibi büyük cihazlar gibi temel unsurların arızalanması halinde, onarım veya değiştirme için her türlü çaba gösterilecek veya rahatsızlıktan dolayı uygun bir geri ödeme yapılacaktır. Bu, sıhhi tesislerin uygun olmayan kullanımından kaynaklanan sıhhi tesisat tıkanmaları gibi suiistimale bağlı sistem bozulmaları için geçerli değildir.

Aşırı hava koşullarından ya da kontrolü dışındaki diğer koşullardan kaynaklanan elektrik servislerinin herhangi bir şekilde durdurulması için, Sahibimiz sorumlu değildir ve geri ödeme yapmaz. Benzer şekilde, sert hava durumu, su seviyesindeki değişiklikler, komşu mülklerdeki koşullar veya uçan böcekler veya hayvan nüfusu gibi yerin doğal unsurları tarafından sağlanan rahatsızlıktan dolayı geri ödeme yapılmaz.

12. Diğer Şartlar

Kiracı, Kiralık Şartları ve Koşulları ile Bireysel Kahvalti Kılavuzundaki diğer talimatları ve Mülkte veya Sahibin sağladığı ek bilgi ve talimatlara uyacaktır.

 

SORUMLULUK SINIRLAMALARI: Kiracı, Sahibini, mülkünü ve tesislerini yukarıda belirtilen Şartlar ve Koşullar ile sağlanan Bilgileri uyarınca kullanacağını, temin ettiğini, onayladığını ve kabul ettiğini ve kendisine yaptığı bilgileri Kendi riskine maruz kalabileceğini ve Sahibinin sahibini, ailesini veya misafirlerini şahsen veya mülkiyetinde veya sonrasında herhangi bir kişisel yaralanma, hastalık veya ölüm, kayıp veya hasar olmaktan Doluluk zamanı. Dahası, Mülkiyet ve tekneler ve motorlar, vb. Gibi eğlence ekipmanlarının kullanımı için tam sorumluluk kabul eder ve söz konusu ekipmanın normal yıpranma ve yıpranma dışında herhangi bir zararı için ödemeyi kabul eder. Kiracı ayrıca, teknede gerekli emniyet ekipmanı bulundurulmasını ve geçerli Operatör Yetkinlik Gereksinimlerini karşılamak da dahil olmak üzere, Tekne Yürüyüşü Yönetmeliğinin tümünden emin olmaktan sorumlu olduğunu kabul eder.

' );

jr_define('_JOMRES_NUMBER_OF_BEDROOMS', 'Yatak odaları');

jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'İndirme ve destek anahtarınız geçerlidir, eklentileri eklenti yöneticisi aracılığıyla indirebilirsiniz.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'İndirme ve destek anahtarınız geçerli DEĞİL, eklentileri eklenti yöneticisi aracılığıyla indiremeyeceksiniz.');

jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Alt tür');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION', 'Bu mülk için tarifeler oluşturmadan önce bir alt türü seçmelisiniz.');
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
jr_define("_JOMRES_PROPERTYTYPE_FLAG_NEITHER", "Diğer (Turlar / Emlak)");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_BOTH", "Her iki"); // Bu, özellik türünü henüz güncellememiş olan mevcut kullanıcılar için geriye dönük uyumluluk sağlayan geçici bir ayardır. Seçilebilir olmayacak
jr_define("_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD", "Misafirler ne rezerve edecek?");

jr_define("_JOMRES_ADDRESS_SANITY_CHECK", "Konuklarınız kalacak yer aradıklarında sizi bulabilmeleri için adres bilgilerinizi doldurmanız gerekecek.");
jr_define("_JOMRES_ADDRESS_SANITY_CHECK_LINK", "Adresinizi güncelleyin");

jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Hata! Tüm alanları tamamlamayı unutmuş olabilirsiniz.');

jr_define("_JOMRES_MANAGER_HAS_NO_PROPERTIES", "Hata, bu kullanıcı bir yönetici olarak yapılandırılmış ancak herhangi bir özelliğe atanmamıştır");

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
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Facebook sayfanızın kimlik numarasını girin, örneğin "Jomres" .Bunu boş bırakın, https://www.facebooking.com veya başka bir şey girmeyin.');

jr_define('COMMON_DOWNLOAD', 'İndir');

jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Sonra bazı tarife eklemeniz gerekecek, bunlar sizin temel fiyatlarınız.');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV_SRP', 'Özellik alt türü');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO_SRP', 'Özellik alt türü');

jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Önyükleme etkin değil!');

jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Uyarı, Jomres Site Yapılandırması -> Çeşitli sekmesinde Önyükleme özelliği etkin değil <i> bazı </ i> işlevsellikleri sağlamak için Jomres şu anda eski jQuery UI tabanlı şablonlarını kullanıyor, Ancak birkaç yıldır üzerinde çalışılmamıştır.Jomres şablonlarının (mizanpaj dosyaları) günümüzdeki gelişimi ve geliştirmeleri BootStrap 3 şablon dosyalarından yapılmaktadır.Jomres\'tan en iyi şekilde yararlanabilmek için Bootstrap 3 tabanlı bir yüklemenizi öneririz Wordpress veya Joomla için tema.Bunu yaptıktan sonra Jomres\'ın Site Yapılandırmasında önyükleme şablonlarını etkinleştirebilirsiniz.');

jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Destek anahtarınız geçerlidir, bu lisansın eklenti indirmelerine izin vermediğini unutmayın.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS_PLUGIN_MANAGER', 'Lisansınız eklenti indirmelerini desteklemez.');

jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'İptal etmek için rezervasyonları bu bölgeye sürükleyin');
jr_define('_JOMRES_LAT', 'Enlem (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Boylam (nn.nnnn)');

jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Lütfen [Jomres: xx-XX] kısa kodunu içeren bir WordPress Sayfası oluşturduğunuzdan emin olun (aksi takdirde xx-XX, sitenizin dil kodudur, aksi takdirde [jomres: tr-TR]) Özelliklerini ve rezervasyonlarınızı yönetmek için site önyüzünden Jomres\'a erişemezsiniz. ');

jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Bir oda türü oluşturmadan önce, bunun bir otel türü mülkü olup olmadığını veya bir villa türü mülkü olup olmadığını bilmemiz gerekir.");

jr_define("_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES", "Bu oda tipi, konukların rezervasyon yapacakları özellikler için kullanılacaktır ...");
jr_define("_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC", "Bir otel türü mülkü veya bir villa türü mülk için oda türü mu?");

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

jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Bir <a href='http://ipinfodb.com/account.php' target='_blank'> IP Algılama API Anahtarı </a> ayarlanmış değilsiniz. Bu, sistemin kullanıcının konumunu otomatik olarak algılamasına ve para birimlerini ve ülkelerini otomatik olarak ayarlamasına izin vermek için gereklidir. Lütfen <a href = 'http: //www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes- Sekmesini tıklayın 'target =' _ blank '> IP algılama API anahtarı nasıl oluşturulacağı ile ilgili kılavuz sayfamıza bakın </a> ve anahtarı Jomres> Site Yapılandırması> Para Birimi Dönüşümleri / Para Birimi Kodlarına kaydedin.");

jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "<a href='https://openexchangerates.org/account/apps' target='_blank'> Açık Döviz Kurları API Anahtarı </a> ayarlanmış değilsiniz. Bu, sistemin döviz kurlarını otomatik olarak indirip kullanmasına izin vermek için gereklidir. Lütfen <a href = 'http: //www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes- Tab 'target =' _ blank '> Açık Döviz Kurları API anahtarının nasıl oluşturulacağı ile ilgili kılavuz sayfamıza bakın </a> ve anahtarı Jomres> Site Yapılandırması> Para Birimi Dönüşümleri / Para Birimi Kodlarına kaydedin.");

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
