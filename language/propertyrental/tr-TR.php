<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.25
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Hızlı rezervasyon');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Profilleri göster');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Özellik Yapılandırma');
jr_define('_JOMRES_COM_MR_BACK', 'Geri');
jr_define('_JOMRES_COM_MR_YES', 'Evet');
jr_define('_JOMRES_COM_MR_NO', 'Hayır');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Yeni');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Yeni Mülkiyet');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Yeni Mülkiyet özelliği');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Yeni Konuk');
jr_define('_JOMRES_COM_MR_SAVE', 'Kayıt');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Soyadı');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Giriş');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Çıkış');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Kullanıcıya yönetici işlevi atamak');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID', 'ID');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME', 'İsim');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Kullanıcı adı');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'Şu anda yetkili (kullanıcının yetkisini değiştirmek için tıklayın)');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Default property');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'Değiştir');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Erişim düzeyi');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Kullanıcı değiştirilmiş');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'N/A');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Resepsiyon');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Mülkiyet yöneticisi');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Tüm rezervasyonlar');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Yeni rezervasyonlar');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Rezervasyonu düzenle');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Arr/Dep');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Konuk');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Oda');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Ödeme');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Adın');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Soyadın');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Özel şartlar');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Bazı özel şartlar ilave ücrete tabi olabileceğini lütfen unutmayın.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Rezervasyonu iptal et');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Ev numarası ya da isim');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Sokak');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Şehir');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Posta kodu');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon numarası');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Cep Telefon numarası');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-posta adresi');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Konuk zaten ayrılmış olduğu için bu rezervasyon iptal edilemez.');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Ödeme iptali');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'İptali onaylayın');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervasyon iptal edildi');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Varış günü');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Rezervasyon tipi');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Siyah');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Resepsiyon');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Oda ismi');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Oda Numarası');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Oda Zemini');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Mevcut erişim engelli.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Maksimum kişi');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Oda/Mülk türü');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Oda/Mülk türü açıklaması');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Oda özellikleri listesi');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Mevduat ödenmiş');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Ödeme girin');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Toplam ödeme');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Ödeme iadesi');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervasyon numarası');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Ödeme gerekli');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Ödeme kayıt edildi');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Odalarımız');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Mülkiyet');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Oda/Mülkiyet türü');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Konuk ayrıntılarını düzenle');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Adın');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Soyadın');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Ev');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Sokak');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Şehir');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Posta kodu');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Sabit');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Mobil');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'Kredi kart numarası.');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'Card issued');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'Kartın son kullanma süresi');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'Düzenleme numarası');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Kart üzerindeki ad');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Seçiminizi yapın');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Gece');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Konuk sayısı');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Toplam');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Oda görünümü & Mülkiyet yapılandırma');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Odalar');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Oda özellikleri');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Oda tipleri');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Business');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Mülkiyet özellikleri');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Oda');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Tip');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'İsim');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Numara');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Zemin');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Erişim engelli');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Maksimum kişi');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Özellikler');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Oda eklendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Düzenle');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Oda özellikleri');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Özellik açıklama');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Oda özellikleri eklendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Oda özellikleri güncellendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Oda tipleri');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Oda/Mülkiyet tipi kısaltma');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Oda/Mülkiyet tipi açıklama');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Oda/Mülkiyet tipi eklendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Oda/Mülkiyet tipi güncellendi');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Düzenle');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'İsim');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Sokak');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Şehir');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Bölge');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Ülke');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Posta kodu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Email');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Website');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Özellikler');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Özellik eklendi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Özellik güncellendi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Mülkiyet Özellikleri');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Mülkiyet Özellikleri kısaltma');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Mülkiyet özelliğinin tam açıklaması');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Mülkiyet özellik eklendi');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Mülkiyet özellik güncellendi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Tarifeler');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Tarife başlığı');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Açıklama');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Kadar geçerli');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Geçerli');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Gecelik oranı');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'En az gün');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'En fazla gün');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'En az insan');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'En fazla insan');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Kaynak/Özellik tipi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignore PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Hafta sonu izini');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Tarife eklendi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Tarife güncenlendi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Düzenle');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Klonla');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Tarife silindi');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Tarifeyi düzenle');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Resmi tatil');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervasyon kaydedildi');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Rezervasyon konuk girişi');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Rezervasyon konuk çıkışı');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Rezervasyon listesi');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'Yeni rezervasyon');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Gösterge');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Konuk admin');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Admin Özellikleri');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Onay durumu');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Bilgilerinizi onaylayın');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Ad');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Soyad');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Ev no.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Sokak');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Şehir');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Posta kodu');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon numarası');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Cep numarası');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'There are no rooms available able to satisfy the parameters specified');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Thank you for making your booking with us and we hope that you enjoy your stay.<br><br> <b>Please note that this is only a preliminary booking, and will not be confirmed until you receive your confirmation letter from us.</center>');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Book in guest ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Konuk Seç ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Guest booked in ');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'No guests are due to arrive today');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Book out guest ');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'No guests are due to depart today');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Takviyeler');
jr_define('_JOMRES_COM_A_TARIFFS', 'Tarifeler & Döviz');
jr_define('_JOMRES_COM_A_DISCOUNTS', 'İndirim');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Dosya yüklemeleri');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS', 'Şuanki ayarlar');
jr_define('_JOMRES_COM_A_EXPLANATION', 'Açıklama');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Tek kişi takviyeleri');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Make sure this is set to Yes if you want to charge single person supplements');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Tek kişi takviyeleri');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Gerekli Mevduat yüzdesi');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Is the deposit required to be a percentage of the total booking? If No, then the deposit applied with be a flat value');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Gerekli Mevduat değer,');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Kişi başı, gecelik');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Select Yes if you want to charge per-person-per-night. If no, then costs will be calculated on a per-room-per-night basis');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Dosya büyüklüğü');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Maks. kb. resim dosya boyutu');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Oda rezerve');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Rezervasyon detayları');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Baskı onay mektubu');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Fatura çıktısı');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Gece sayısı: ');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED', 'Sözleşme başlangıçta kabul etti: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Gecelik maliyeti: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Genel Toplam');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Size özel teşekkür ederiz');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'Sizi tekrar görmeyi umuyoruz.');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Fatura yazdır');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Fatura hizmeti ekleme');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Servis açıklaması');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Servis değeri');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Diğer fatura öğeleri');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Diğer fatura öğeleri, toplam maliyet: ');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Öğe fatura eklendi');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Fotoğraf yükleniyor');
jr_define('_JOMRES_FILE_UPLOAD', 'Dosya yükleme');
jr_define('_JOMRES_FILE_ERROR_TYPE', 'Sadece türlerini yüklemek için izin verilir: \ n');
jr_define('_JOMRES_FILE_ERROR_EMPTY', 'Yüklemeden önce bir dosya seçiniz');
jr_define('_JOMRES_FILE_ERROR_NAME', 'Dosya yalnızca alfasayısal karakterler ve boşluk içermelidir.');
jr_define('_JOMRES_FILE_ERROR_SIZE', 'Dosya boyutu, yönetici tarafından belirlenmiş üst sınırı aşıyor.');
jr_define('_JOMRES_FILE_NOT_UPLOADED', 'Dosya yüklenmedi.');
jr_define('_JOMRES_FILE_UPDATED', 'Dosyanız yüklendi.');
jr_define('_JOMRES_COM_A_JSCALENDAR', 'Takvim');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE', 'JS Takvim Dil Dosyası');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Choose the language file that should be used in the Javascript calendar. Please note that some of the calendars may be faulty, See http://sourceforge.net/tracker/?group_id=75569&atid=544287 for more information');
jr_define('_JOMRES_COM_A_CALENDARCSS', 'JS Takvim CSS Dosyası');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC', 'JavaScript takviminde kullanılması gereken CSS dosyası seçin');
jr_define('_JOMRES_COM_A_ODDS', 'Misc.');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Liste aramalar');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE', 'Bu resmi sil');
jr_define('_JOMRES_FILE_DELETED', 'Dosya silinde');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Sil');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Unable to remove this room, there are bookings against it. Cancel those bookings then retry.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Oda silindi');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Oda özelliklerini sil');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Unable to remove this room feature, it is assigned to a room or rooms. Remove the feature from those rooms and retry.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Oda özellikleri silindi');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Mülkiyet özelliği sil');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Unable to remove this property feature, it is assigned to a business. Remove the feature from this property and retry.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Mülkiyet özelliği silindi');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Kaynak / mülkiyet türünü sil');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Unable to remove this resource/property type, it is assigned to a resource. Try re-assigning the resource to another resource/property type then try again.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Unable to remove this resource/property type, it is assigned to a tariff. Try re-assigning the tariff to another resource/property type then try again.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Kaynak / mülkiyet türü silindi');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'İş sil');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Mülkiyet silindi');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Bu işi silmek için haklara sahip değilsiniz.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Image width after Jomres resizes uploaded images');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Harita');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Mülkiyet açıklaması');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Zamanlarda kontrol');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Alan faaliyetleri');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Sürüş yönleri');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Havalimanları');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Diğer ulaşım');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Politikalar ve feragatnameler');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adres');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Ziyaretçiler çevrimiçi rezervasyon yapabilirsiniz');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Set this to Yes to ensure that visitors can book rooms online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Bookings are for a fixed period');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined arrival day" isn\'t set to Yes (unless you specifically want to force people to arrive on a certain day) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Rezervasyon Dönemi: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Rezervasyon odaları');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximum periods, eg 3x 7 booking periods = 21 days');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Is this an apartment/cottage/villa?');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'EG you are renting out a business, rather than rooms in that business. If this is the case, then you must make sure that you only have the one resource registered against each business.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Rezervasyon inceleme');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Rezevasyon onaylama');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Pazartesi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Salı');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Çarşamba');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Perşembe');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Cuma');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Cumartesi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Pazar');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'pzr');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'sal');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'çrş');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'pri');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'cuma');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'cmrts');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'pzr');
jr_define('_JOMRES_COM_A_AVLCAL', 'Takvim');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Geçerli tarih için yazı tipi rengi');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Font colour for days in the display month ');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Font colour for days not in the display month');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Cell bgcolour for days when business/resource is available');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Cell bgcolour for days not in display month');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Cell bgcolour for occupied days');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Cell bgcolour for provisionally booked rooms (bookings for which a deposit has not been taken)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Cell bgcolour for dates in the past');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Dolu/Uygun değil');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Rezervasyonlar için kullanılabilir');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Geçici rezervasyon');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Önceden tanımlanmış varış günü');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Only for sites offering fixed period bookings. Choose the day that arrivals must begin on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Sabit varış günü');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Kalma süresi(gün)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Kullanılabilirlik takvimi göster?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'kullanılabilirlik takvimleri göstermek için eveti ayarla');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Kullanılabilirlik');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Rezervasyon formu görüntülemek için ücretsiz tarihte tıklayın.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Siyah rezervasyon');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Yeni siyah rezervasyon');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Konuk sil');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Konuk silindi');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Unable to delete this guest as they have bookings open against them with another business.');
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'Gerçek oda maliyeti: ');

jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Sigara içmek');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'herhangi');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Takvim çıkış biçimi');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC', 'Bu kullanıcı Jomres içinde tarihlerin çıkış biçimini değiştirmek için izin verir');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Takvim giriş formatı');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Bu kullanıcı Jomres içinde tarihlerin giriş biçimini değiştirmek için izin verir.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Sabit dönem rezervasyonları kısa molaları');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Kısa mola uzunluğu');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Yayınlanan');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'denetim izi ');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Tarih');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME', 'Zaman');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Kullanıcı (kullanıcıadı)');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION', 'İşlem');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Ayrıntıları görüntüle');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Tarih filtreleme');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'Kullancı adı filtre');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'İşlem filtre');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Durum');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Geliş Beklemede');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'bugün gelmesi');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Geçerli oturan');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Bugün kalkış');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Gecikmiş kalkış');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Gelmedi');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Bilinmeyen kullanıcı');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Oda oluşturuldu');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Oda güncellendi');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Oda silindi');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Kaynak özelliği düzenlendi');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Kaynak özelliği güncellendi');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Kaynak özelliği silindi');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'Kaynak türü eklendi');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'Kaynak türü güncellendi');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'Kaynak türü silindi');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'İş düzenlendi');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'İş güncellendi');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'İş silindi');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'Mülkiyet özelliği düzenlendi');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'Mülkiyet özelliği güncellendi');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'Müülkiyet özelliği silindi');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Düzen özellik ayarları');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Mülkiyet özelliği düzenlendi');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Tarifeler oluşturuldu');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Tarifeler güncellendi');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF', 'Tarifeler silindi');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Added svc. charge');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Booked guest in');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'Booked guest out');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Girilen mevduat');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Konuk oluşturuldu');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Konuk güncellendi');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST', 'Konuk silindi');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Bir kaynak rezervasyonu');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'İlave oluşturuldu');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'İlave güncellendi');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'İlave silindi');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'İlave yayınlandı.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Entered black booking.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Deleted black booking.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Ekstralar');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Açıklama');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'İsim');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Fiyat');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Ekstra güncellendi');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Düzenle');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Ekstra silinmiş');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Ekstra admin');
jr_define('_JOMRES_COM_A_EXTRAS', 'Show extras at booking time?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Set this to yes to show any extras that you may wish to offer to the guest');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'İsteğe bağlı ekstralar.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Black booking start date');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Devam eden servis tarihi');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Black bookings');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'There was an error attempting to book these rooms, one or more of the rooms you selected is not free.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Rooms included in black booking');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'View blackbooking');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'No black bookings to list');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Yıldız sayısı');
jr_define('_JOMRES_COM_A_SMOKING', 'Sigara seçeneğini göster');
jr_define('_JOMRES_COM_A_SMOKING_DESC', 'Sigara seçeneği göstermek için ayarlayın.');
jr_define('_JOMRES_COM_A_RESET', 'Reset');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervasyon iptal edildi');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Burada ara:');
jr_define('_JOMRES_COM_A_SMOKING_OPTION', 'Standart sigara içme seçeneği');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Para birimi sembolü');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'Eg &amp;pound&#59; Gerekli sembol için HTML kodunu kullanması gerektiğini unutmayın. Bu kuruluşların listesi için lütfen ziyaret edin <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Para birimi kodu');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC', 'Örneğin GBP. Bu rezervasyonu teyit eden müşteriye, e-posta olarak kullanılır.');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Daha fazla');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Rezervasyonu önceden sınırlayın');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Eğer önceden rezervasyon sınırlamak istiyorsanız bunu ayarla (gün açısından sınırını ayarlamak için bir sonraki alanı kullanın).Eğer kullanıcı önceki günden fazla rezervasyon yapmışsa daha sonra varış tarihi bugünün tarihine restore edilecek bu set yoksa');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Daha önceden rezervasyon edilmiştir:');
jr_define('_JOMRES_COM_A_TAX_WARNING', '<font color=red>NOT: Aşağıdaki seçeneklerden her ikisi de, yalnızca sizin için kullanılabilir iki vergi hesaplamalarından birini kullanmanız gerekir. Ayarlamanız tavsiye edilmez. </FONT>');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Vergi');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Konaklama vergisi');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC', 'Amerikan pazarı için tasarlanmıştır.Konuğa kaynak vergisi tahsil edilecektir. Sen ve / veya sabit ve yüzde rakamların bir arada ücret edebilirsiniz. Bu vergiler sadece kaynak maliyete uygulanır unutmayın.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Vergi sabit tutar');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Vergi yüzdesi');
jr_define('_JOMRES_COM_A_EUROTAX', 'Vergi');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Vergi yüzdesi');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Tüm arşiv kayıtları');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' kayıtlar arşivlenmiş');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'Denetlenip arşivlenmiş denetim kayıtları');
jr_define('_JOMRES_FRONT_TARIFFS', 'Tarifelerimiz');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Tarife adı');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Tarife açıklaması');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Kaynak/Mülkiyet tipi');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Geçerli');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Kadar geçerli');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Gecelik kişi başı');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Gecelik');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Hafta sonları dahil değil');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'En az gün');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'En çok gün');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'En az kişi');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'En çok kişi');
jr_define('_JOMRES_FRONT_PREVIEW', 'Önizleme');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Üzerinde düzenleme?');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT', 'Geçerli metin');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT', 'Yeni metin');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Güncellenmiş özel metin.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Dili düzenle');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING', 'Arşivlenmemiş kayıtların sayısı: ');
jr_define('_JOMRES_FRONT_PTYPE', 'Mülkiyet tipi');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Mülkiyet tipleri');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Mülkiyet türünü düzenle');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Mülkiyet tipi');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Mülkiyet türü açıklaması');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Mülkiyet türü kaydedildi');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'Mülkiyet türü silinemedi. Mülkiyet türü bir veya daha fazla işletmelere atanmış, silmeden önce bunları yeniden atayın.');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Mülkiyet türü(ler) silindi');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Kalan ödeme için');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Ekstra hizmetleri faturaya ekle');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Deposit');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Tam miktar');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Tutarı, rezervasyon esnasında tahsil et');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Use this option to decide what should be charged at booking time. Choose deposit if the deposit should be charged, or Full amount if the full amount should be charged.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Cal months to show');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Oda durumu, takvim kaç ay gösterilecek?');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'Adına imzalanmış ');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Ağ geçitleri');
jr_define('_JOMRES_COM_A_CANCEL', 'İptal');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Blackbooking uygulamak için istediğiniz tarihleri seçin. Uygun tarihleri seçtikten sonra, kullanmak için "uygulamak" düğmesine tıklayın. <br/> 
<br/> 
Hizmet almak istediğiniz odayı seçin. <br>If a resource does not have a check mark against it, it cannot be included in the black booking until any outstanding bookings have been completed/cancelled.<br/> ');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Hareketsiz kaldığın için çıkış yapıldı.</b> Lütfen tekrar giriş yapın.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Neden');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Ödeme ağ geçitleri kullanın?');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'Online ödeme ağ geçitleri kullanmak istiyorsanız evet bunu ayarlayın. <b>Not:</b>Bu rezervasyon işlemi sırasında gösterilen mevduat hesaplama kapanmaz.Bunu devre dışı bırakmak için, Odaları göstermek, şablonları düzenlemek ve yazı tipi, arkaplan renk aynı bir sınıf içinde mevduat atıfta elemanları kaydırabilirsiniz.');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Lütfen ödeme yöntemi seçin..');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Ağ Geçidi etkin?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Modifiye eklenti ayarı');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Eklenti ayarı ekleme');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Bu işletmenin web sitesini görüntülemek');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Dış bağlantı');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Buraya web sitesi için bir link koyun.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Görüntülenen kredi kartı');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Kredi kartı güncelleme');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Kredi kartını düzenle');
jr_define('_JOMRES_COM_A_EDITICON', 'Simge boyutu düzenle');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Toplu mülkiyete resim yükle');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Görüntüler zaten dizinde');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slayt Gösterileri');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Slayt bağlantısını göster?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Emlak Detayları sayfasındaki slayt gösterisi?');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Slayt küçük hedef genişliği');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slideshow');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Maalesef, bu iş için kullanılabilir görüntüler yok. Eğer slayt gösterisi özelliğini kullanmak isterseniz toplu yükleme özelliğini kullanarak bazı görüntülerin yükleyin.');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Tarifelere bağlantısını göster?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Pop Up izin?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Hiçbiri olarak ayarlanırsa, normalde bir pop açılmış olurdu bağlantılar yerine satır içi açılacaktır.');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Slayt görüntüleri yükle');
jr_define('_JOMRES_A_TABS_MISC', 'Çeşitli');
jr_define('_JOMRES_A', 'Site yapılandırması');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Global Gayrimenkul özelliklerini kullanma');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC', 'Yalnızca webmaster tarafından tanımlanan özellik özelliklerini kullanmak için tüm işletmeler zorlamak istiyorsanız Evet olarak ayarlayın.');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'Sizin mülkiyet özelliğine resim yüklemek gerekir bu özelliği bir resim atamak için /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Icon');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Kullanmak istediğiniz arama eklentisi seçin.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Üzgünüz, aramanız hiç sonuç vermedi. Aramanızı değiştirmek için tekrar deneyin.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Bunu yapmak isteyen emin misiniz?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Hemen Rezervasyon!');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Hemen Rezervasyon!');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV', 'Güvenlik numarası');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Çizgileri tarifede göster?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adres');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detaylı bilgi');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Odaları kullanılabilirlik için tıklayın');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Tarife bilgilerini göster');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Aşağıdaki adres linkini göster');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Aşağıda detaylı mülkiyet bilgisi göster');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Aşağıdaki odaları ve kullanılabilirliği göster');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Tarife bilgileri bu link altında göster');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Sabit oranlı tarifeler');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Değişken');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Kullanmak istediğiniz tarife modelini seçin ');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "İki tane tarife hesaplama yöntemi vardır. Bunlardan ilki,'sabit oran' yöntemi, misafir için farklı tarifeler sunmak için izin verir ve konaklama ücreti tüm zaman için aynıdır. Aynı tarih, örneğin Yatak ve Kahvaltı tarife ve B&B ve Akşam yemeği tarife için birkaç farklı tarifeler sunmak istiyorsanız bunu seçin. Eğer fiyatlarınız söz konusu tarihte bağımlı ayarlamak istiyorsanız 'ortalama' tarife seçin. Yazılım rezervasyon her gün tarifelerini bulmak, onları bir Araya ekleme sonra dönem boyunca ortalama hızı dönecektir");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Çıkış tarihini göster');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Eğer ayrılış tarihi giriş kutusu göstermek istemiyorsanız Hayır olarak ayarlayın. rezervasyonlarında ayrılış tarihi hep geliş tarihinden sonraki güne kurulacaktır, ne yaptığınızı biliyorsanız, sadece bu kullanın.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Açıklama sınırı');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Bu özellik Mülkiyet açıklaması olarak gösterilen listeleme özelliği karakter sayısını sınırlar.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Kullanılan tarih format stili "()" ? ');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Tarihine göre çıkış tarihleri biçimlendirmek için Evet bunu ayarla() (Bakınız <a href="http://www.php.net/manual/en/function.date.php">İşte</a>). strftime() biçiminde kullanmak için Hayır olarak ayarlayın. (Bakınız <a href="http://www.php.net/manual/en/function.strftime.php">İşte</a> eg. %b %d %Y ');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Yayınlamak');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Yayınlamamak');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Küresel Kaynak / Gayrimenkul türleri kullanın');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC', 'Yalnızca webmaster tarafından tanımlanan, tüm işletmeler tek bir yöneticisi tarafından kaynak/mülkiyet türlerini kullanmaya zorlamak istiyorsanız Evet olarak ayarlayın. Kaynak/mal türleri üzerinden arama izin vermek istiyorsanız Eveti ayarlamanız gerekir.');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Kaynak/Mülkiyet türü resimleri göstermek için görüntüleri yüklemek gerekir /images/stories/jomres/rmtypes/ klasör. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Giriş hata arka plan rengi');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Rezervasyon formu varsayılan ülke');
jr_define('_JOMRES_JAVASCRIPT_', 'Kırmızı yıldızla işaretlenmiş öğeler gereklidir.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Kullanıcı işlerini kaydedebilirsiniz?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Kullanıcıların yönetici müdahalesi olmadan kendi işlerini kaydetmek için mümkün olmasını istiyorsanız Evet olarak ayarlayın.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'İşinizin ülke ve bölgeyi bilgilerini veriniz.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'İşletme bilgilerini doldurunuz.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Vurgulanan öğeler gereklidir.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Oluşturulan iş');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED', 'Üzgünüm, bu sistemde bir özelliği oluşturabilmeniz için oturum açmanız gerekir, daha önce kayıtlı bir kullanıcıya geçebilirsiniz.');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Oluşturulan iş: ');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'Kullanıcı için: ');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Yılın başından itibaren takvim göster?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Kullanılabilirlik takvim mevcut yılın başından itibaren gösterir.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Mevcut oda sayısı');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Mülkiyet detayları için geri');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Kaynak/Mülkiyet türleri');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Rastgele arama sınırı');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Tarife listesinde para birimi dönüştürme bağlantıları göster?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Dönüştürme oranı');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Kullanıcılar html editörleri kullanarak düzenlemek yapmaları için izin verilsin mi?');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Rezervasyon için bu formu kullanın. Geliş ve gidiş tarihi, misafir sayısı rezervasyon ayrıntıları değiştirme, mevcut olanlar listesinden gerektirir(ler) kaynak seçin. Rezervasyon eklemek için herhangi bir boş odaya tıklayın. Bittiğinde, ihtiyaç duyduğunuz herhangi bir isteğe bağlı ekstralar ekleyin ve adres bilgilerinizi giriniz. Form yeterli bilgiye sahip olunca rezervasyonunuzu teyit edebilirsiniz.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Rezervasyon için bu formu kullanın. Geliş ve gidiş tarihi, misafir sayısı rezervasyon ayrıntıları değiştirin.Bittiğinde, ihtiyaç duyduğunuz herhangi bir isteğe bağlı ekstralar ekleyin ve adres bilgilerinizi giriniz.Form yeterli bilgiye sahip olunca rezervasyonunuzu teyit edebilirsiniz.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Rezervasyon detayları');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Rezervasyon şartların ayrıntıları seçin');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Durumu ');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Gerekli olan odaları seçin');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Özelliği şu anda kullanılabilir olup olmadığını görmek için bak.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Hizmetler');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Hizmetler');
jr_define('_JOMRES_COM_PERDAY', 'Gecelik');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Detaylar');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Lütfen bilgilerinizi giriniz. Kırmızı yıldız olan tüm alanları doldurmanız gerektiğini unutmayın.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Boş oda');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Seçilen oda');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', 'En erken Geliş Tarihi: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Gecelik:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Konaklama');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Ekstralar:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Vergi:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'İndirim:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Genel Toplam (inc vergi):');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Misafirler');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Seçiminizi ekleyin');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Seçimi Kaldır');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Misafir türleri');
jr_define('_JOMRES_VARIANCES_TYPE', 'Tip');
jr_define('_JOMRES_VARIANCES_TYPE_TT', '5-10 müşteri türüne, örneğin çocuk yaşta ya da Öğrenci ');
jr_define('_JOMRES_VARIANCES_NOTES', 'Notlar');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Bu müşteri tipi ile ilgili istediğiniz notları');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maksimum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Bu tip müşteri sayısı rezervasyon formunu seçilebilir');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Yüzde');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Hesaplanan rakam kaynak için hesaplanan Baz rakam bir yüzdesidir. Bu o zaman hiçbir ayarlı ise belirttiğiniz rakam sadece eklenen veya baz kaynak değerinden çıkarılır.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Varyansı ekle?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'The figure calculated is added to or removed from the Base figure calculated for the resource. Set this to No if you want this to be a discount from the base figure. ');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Varyans');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Varyans miktarı');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Değiştirilmiş müşteri tipi siparişi');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Yayınlanan müşteri tipi');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Silinmiş müşteri tipi');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Oluşturulan müşteri tipi');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Yüklenen müşteri tipi');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Yüklenen müşteri tipi');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Oda özelliği ayrıntılarını sayfa sayfa listelemek için bağlantıyı göster?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Göster <b>sadece</b> Uygun tarih.');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Bu yüzden sadece kullanılabilirlik takvim özelliği ayrıntılar bölümünde görüntülenebilir.Özellik başlığı ve ayrıntıları görüntülemek için devre dışı bırakmak için Evet seçin. Vb sadece gerçekten kullanıcılar (örneğin dairelerde)tek kaynak işletmeler kiraya yönelik, evler.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Arr-Dep minimum interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Geliş ve gidiş tarihi arasındaki rezervasyon formunun minimum aralığı.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Rezervasyon formu kaynak listesini oda numarasını göstermek');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Rezervasyon formu kaynak listesini oda adını göster');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Rezervasyon formu oda listesi tarife başlığı göster');
jr_define('_JOMRES_ORDER', 'Sipariş');
jr_define('_JOMRES_REQUIREDFIELDS', 'Gerekli');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Önceki gün');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Varış tarihinden önce, "bugün" den, geçmesi gereken gün sayısı.');
jr_define('_JOMRES_DTV', 'Tarih tipi varyasyonları');
jr_define('_JOMRES_DTV_DOW', 'Haftanın günü');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Misafir türü varsayılan');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Rezervasyon formunda gösterilen ilk Konuk türünün varsayılan numara. Eğer misafir tipleri kullanırsanız, o zaman bu rezervasyon formu ilk misafir türü için ayarlanır varsayılan sayısı.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Sadece kayıtlı kullanıcılar çevrimiçi rezervasyon yapabilir.');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Malesef, online rezervasyon için kayıtlı kullanıcı olmanız gerekir. Bu sitede kaydolmak için buraya tıklayın. ');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Geçerli rezervasyonlar için bağlantı Yazı tipi rengi');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Haftasonu sınırları');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Oda rezerve edilmiştir');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Siyah rezervasyon');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'En yakın tam sayıya yuvarla mevduat kadar?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Ücret mevduat?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Tarife ücretleri haftalık rakamlar olarak saklı?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Günlük veya haftalık tarife ücretleri saklama seçeneğiniz vardır. Eğer haftalık olarak bunları saklamak isterseniz, Evet seçeneğini ayarlamanız gerekir.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Haftada');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Tekrarlayabilir sabit geliş tarihleri: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'When fixed arrival dates are selected, the number dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available) ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Sigara seçeneği geçersiz');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Geliş tarihi yanlış');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Çıkış tarihi yanlış');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Rezervasyon çok kısa. Varış ve kalkış tarihleri arasında en az bu kadar gün gerekiyor:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Süreniz var');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Misafir tipi değişken hatalı');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Misafir sayısı/türü seçin');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Mevcut tarifeler için parti içinde çok fazla var');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Misafirler daha fazla oda sizin seçtiğiniz bir oda seçimi kaldırmak için tıklayın');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Mevcut yatak için çok sayıda misafir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Daha fazla seçmeniz gerekir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Bir oda seçin');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Adı gereklidir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Soyadı gereklidir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Ev no/Adı gereklidir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Sokak gereklidir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Kasaba gereklidir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Bölge gereklidir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Posta kodu gerekli');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Ülken gereklidir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Telefon numarası gereklidir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Cep telefonu numarası gereklidir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'E-posta adresi gereklidir');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'E-posta adresi geçerli değil');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'E-posta etki alanı doğrulanamadı');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', '<b>Boş odamız var!</b>');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Henüz seçili oda yok');
jr_define('_JOMRES_BOOKING_NUMBER', 'Rezervasyon yok.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Rezervasyon tamam, mesaj kutusu arkaplanı');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Şablon vars dökümü?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Bu sayfanın görüntülendiği gibi her önyüz  şablon dosyası için şablon değişkenleri HTML dökümü etkinleştirmek için bu ayarlayın. Eğer belirli bir öğe belirli bir şablon olarak kullanılabilir olup olmadığını görmek istiyorsanız yararlı.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Şekil yüzdesidir');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Eğer tek kişi hesaplama rakam yüzde ise Evet olarak ayarlayın. Eğer hayır ise o zaman düz bir toplamı olarak uygulanır.');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Boş oda / tarife sınırı');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Rezervasyon formunu listelenen boş oda & tarifeleri sayısını sınırlamak için bu girişi kullanın. Eğer etkin sınırlama istemiyorsanız sıfıra ayarlayın. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Şu anda hiç boş yer yok!');
jr_define('_JOMRES_BOOKITNOW', '');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Evrensel düzenleme modu?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Bu fonksiyon ile ilgilenir. Evet olarak ayarlanırsa, o zaman düzenleme modu düzenlemekte olduğunuz sürekli sistemde TÜM işletmeler için özel bir metin etkileyecektir.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Evrensel para kullanın?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Aynı para birimini kullanmak için tüm işletmeleri zorlamak için eveti ayarla.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Evrensel para birimi simgesi');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Bileşen sarılmış');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Tam Sayfa görünümünde içine siteyi zorlamak istiyorsanız Eveti ayarlayın. Eğer iframeler üzerinden siteye erişmek istiyorsanız bu kullanışlı olabilir.');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Süper Emlak Müdürü');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Sadece hafta sonları');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Hafta sonu günleri');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Haftasonu günlerini ayarlayın. Odaların listesini oluştururken izin vermek veya hafta sonları vermemek tarifeleri dikkate bu ayarı alacaktır.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Herhangi bir mülkiyet bilgileri eklemeden önce Ülkenizi seçin');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Mülkiyete resim yüklemeden önce mülkiyet değişikliklerini kaydedin');
jr_define('_JOMRES_TARIFFSFROM', 'Fiyatlardan ');
jr_define('_JOMRES_SEARCH_ALL', 'Tüm');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Ülke');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Bölge');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Şehir');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Özellikleri');
jr_define('_JOMRES_SEARCH_BUTTON', 'Arama');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Arama terimi');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Arama kelime(ler): ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Lütfen amaçlanan varış ve kalkış tarihlerini girin ve mevcut seçilen tarihler üzerinde konaklama aslında  iş bulmak düğmesine basın.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Tip');
jr_define('_JOMRES_SEARCH_RTYPES', 'Oda tipi');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Varsayılan');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Mülkiyet adı');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Mülkiyet Bölgesi');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Mülkiyet İlçe');
jr_define('_JOMRES_SORTORDER_STARS', 'Yıldızlar');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST', 'Mülkiyet listesi');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Mülkiyet detayları ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Rezervasyon formu');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Adres bilgilerinizi güncelleme');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Yeniden kontrol kaynak kullanılabilir <br/>(Oda seçimi sıfırlanır)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Yeniden kontrol durumu');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'İsteğe bağlı ekstraları değiştirme');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Kaynak seçimini değiştirmek');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Adres bilgilerinizi güncelleme');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Üzgünüm, bir veya daha fazla adres alanları yanlıştır.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Oda resmi');
jr_define('_JOMRES_CURRENCYFORMAT', 'Para birimi biçimi');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES', 'Görüntü olarak Göster Yöneticilerin seçenekleri');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Arama seçenekleri');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Mevcut Kayıtlar');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES', 'Günlük girişleri henüz kaydedilmiş.');
jr_define('JOMRES_COM_A_MESSAGE', 'Mesaj');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normal');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Gelişmiş');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Tarife Yapılandırma Modu');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "<b>Uyarı farklı tarife türleri arasında geçiş, veri kaybına neden olabilir . Aşağıdaki nota bakınız bununla ilgili</b>.
<br/><br/>
Tarife yöneticisi olarak üç seçeneğiniz var.<br/>
Normal mode: Önümüzdeki 10 yıl için geçerli olan her bir oda tipi için bir tarife olacak.<br/>
Micromanage: Mülkiyet türü/Her kaynak için, fiyatı her gün değiştirebilirsiniz. <br/>
Advanced: \"Eski\" Jomres yönetme tarife yöntemi. <br/>
<br/>
Farklı tarife modları en uygun yapılandırma tarife yöntemini seçmek için izin.<br/>
Kaynak/Mülk türleri için referans oda tarifeler çapraz ve aynı sayfada odaları, fiyatları yapılandırmanızı sağlar çünkü Normal mod en basit ve anlamak çok kolay.<br/>
Micro tarifelerin tomarları yönetmek zorunda kalmadan günlük olarak bir gün oranlarını değiştirme sağlar, birbiriyle farklı tarifelerin çapraz referans kurası ile yapılır. Bu bir süre kapsayan için oluşturulan tarifelerin bir dizi sonuçlanır, ancak birbirleri üzerinde tarifeleri katman olamaz.<br/>
Gelişmiş mod bir kaynak oluşturmak ve bir kaynak türü ile ilişkilendirmek sağlar. Daha sonra BU kaynak türüne sahip bir tarife ve ilişkilendirmek oluşturun. Bu yöntemi kullanarak örneğin, birbirleri üzerinde bir kaynak türü 'katmanı' tarifeleri \ mümkün \ Çift kişilik yatak \ yatak, kahvaltı ve akşam yemeği için bir yatak ve kahvaltı için tarife ve başka olabilir. Bir kaynak / özellik türü bir kaynak veya tarife dis-ilişkilendirmek, veya yanlış gelen ve tarihleri geçerli ayarlamak mümkün olduğundan gelişmiş yöntem detaylara biraz daha dikkat gerektirir, ama bu size yapılandırma seçenekleri vermek olmadığını diğer modlar sunmuyoruz.<br/>
<br/>
Normal ve micromanage modları çalışmak için tarife modu için oda ve tarifelerin belirli bir ayar gerektirmez, çünkü sistem mevcut tarife düzenleme modu ile mevcut tarife yapılandırmaları uyumlu hale getirmek için bazı verileri sıfırlamak gerekebilir.<br/>
<br/>
Normal -> Gelişmiş. Değişiklik yok. Mevcut tarifeler korunur.<br/>
Normal -> Micromanage. Varolan tüm tarifeler kaldırılır.<br/>
Advanced -> Normal. Varolan tüm tarifeler kaldırılır.<br/>
Advanced -> Micromanage. Varolan tüm tarifeler kaldırılır.<br/>
Micromanage -> Gelişmiş. Tarifeler arasında mevcut tüm çapraz başvuruları kaldırılır, ancak kendileri tarifeleri kalacak.<br/>
Micromanage -> Normal. Tüm mevcut çapraz referanslar ve tarifeler kaldırılır.<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Liste halinde odaları işletme bilgilerininde göster?');
jr_define('JOMRES_PROPERTYTYPE', 'Mülkiyet türü');
jr_define('JOMRES_COM_A_SRPONLY', 'Sadece SRP');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Oda başına en fazla kişi');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Maksimum rezervasyon kişi sayısı');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Not ekle');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Notu düzenle');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Notu sil');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Notları göster');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Yeni not eklenendi');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Not düzenlendi');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Not silindi');
jr_define('_JOMCOMP_MYUSER_MENUTITLE', 'Seçeneklerim');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Rezervasyon listem');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Rezervasyonlarım');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Rezervasyonları göster');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Favorileri göster');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Henüz herhangi favori eklememiş');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Favorilere Ekle');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Mülkiyet türü');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'Sitede işletmeler');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Bilge fiyat');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Aktif');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Bu eklenti etkinleştirmek ve dinamik kaynak fiyatları yapılandırmanızı sağlar.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Most businesses will recalculate resource prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a resource/property type that isn\'t busy during a given period with the aim of attracting property that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threshold defines the number of days that the arrival date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied. Note however, if multiple rooms are booked then the current level of discount will be applied to all rooms and will not reduce as more rooms are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Eşik (geliş tarihi ve bugün arasındaki gün sayısı)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Oda %10 veya daha az işgal');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Oda %25veya daha az işgal');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Oda %50 veya daha az işgal');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Oda %75 veya daha az işgal');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'İndirim %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' indirimli olmuştur ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' to ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Bilge fiyat indirimi uygulandı ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Google Maps API anahtarını alabilirsiniz <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google haritalar</a>. Burada harita anahtarı var, Jomres Mülk Ayrıntıları sayfasında haritayı gösterecektir.');
jr_define('JOMRES_COM_A_USE_SSL', 'Rezervasyon formunda SSL kullanın?');
jr_define('JOMRES_COM_A_USE_SSL_DESC', 'İçin geçerli bir SSL sertifikası olmasına dikkat etmek gerekir ');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Son dakika');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktif?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Eğer son dakika fırsatlarını sunmak istiyorsanız Evet olarak ayarlayın.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Eşik');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Rezervasyon yapılan ve geliş tarihi rezervasyon tarihinden itibaren sadece "n" gündür ise, o zaman indirim uygulanabilir');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'İndirim');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'yüzde');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Bu rezervasyona indirim uygulanmış!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Maliyet fiyatı azaltılmıştır ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', ' ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% indirim için rezervasyon yapmalısınız.');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Bu rezervasyonu en iyi şekilde şimdi ayırtın!');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '% geliş tarihinin öncesinde ise daha fazla indirim mevcut olabilir ');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Ayrıntılı tarife bilgisi');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'İşletme bilgilerini / tarife popup daha detaylı tarife bilgilerini göstermek için Evet bu ayarla');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Seçenekleri en aza indir');
jr_define('_JOMCOMP_AMEND', 'Rezervasyon değiştirebilir - Özellik Seçimi');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Yeni Mülk seçin');
jr_define('_JOMCOMP_AMEND_HEADER', 'Orijinal Sözleşme:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Mevduat Ücreti');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Mevduat Ücretli değil');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Geçersiz Toplam');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Geçersiz Mevduat');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'İptal');
jr_define('_JRPORTAL_CPANEL', 'JRPortal Kontrol Paneli');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Komisyon oranı varsayılan');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Özellik için bir komisyon oranı aksi ayarlanmamış halinde uygulanacak varsayılan komisyon oranını seçin.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Liste Komisyon Oranları');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Komisyon Oranları');
jr_define('_JRPORTAL_CRATE_TITLE', 'Başlık');
jr_define('_JRPORTAL_CRATE_TYPE', 'Tip');
jr_define('_JRPORTAL_CRATE_VALUE', 'Komisyon oranı');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Para birimi kodu');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Mülkiyet Listesi ');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Mülkiyet adı');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Mülkiyet adresi');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Arka plan rengi kırmızı olan özellikler henüz uygulanmış bir komisyon oranıdır');
jr_define('_JRPORTAL_STATS_PATETITLE', 'İstatistikler');
jr_define('_JRPORTAL_STATS_STATTYPE', 'İstatistikler için: ');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Mülkiyet - Tıklama');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Mülkiyet görüntüle');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Rezervasyon sayısı');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Rezervasyonların değeri');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Tahmini Komisyon');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Komisyon oranı');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Rezervasyon Listeleri');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Mülkiyet id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'Misafir id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'Bağlı id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Fatura id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Rezervasyon toplam');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'Sözleşme id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Sözleşme numarası');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Para Birimi Kodu');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Oluşturulan');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Arşivlenmiş');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Tarih arşivlenmiş');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Faturaya ekle');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Yönetici Fatura');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'İlgili özellik (varsa)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Değer');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Açıklama');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', 'Başarıyla fatura öğesi girildi ');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', 'Siparişleri görüntüle ');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', 'Başarısız içine fatura öğesi eklemek ');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', 'Hata, fatura için bir değer belirlemediniz');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Alt klasör adı açıklama ayarlayarak emlak tipi özel dil dosyaları olabilir, e.g. "Yat Müşavirliği" ve alt klasöre bir dil dosyası kopyala. Bu özellik türü için bu dil dosyasını değiştirmek yani odalar olur, örneğin, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Erişim izniniz olan tek özellik bu özelliği silemezsiniz. Eğer devre dışı bırakmak istiyorsanız, lütfen araç çubuğu özelliği yayınlamama özelliğini kullanın. ');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'Bu bir demo kurulum ve Jomres Solo yükseltmek istiyorsanız (sadece bir özellik) o zaman önce yeni bir özellik oluşturmak gerekir, sonra satın alınacak o Solo lisans anahtarı lisansını değiştirmeden önce bunu silin. ');
jr_define('_JOMRES_COM_EMAILERRORS', 'E-posta hata kayıt iletileri?');
jr_define('_JOMRES_COM_EMAILERRORS_DESC', "Eğer hata kayıt iletisini oluşturulduğunda otomatik olarak jomres.net kopyalamak isterseniz Evet olarak ayarlayın. Bu potansiyel problemlerle ilgili yaklaşımımız, proaktif olmak, onların farkında bile olmadan umarım herhangi bir sorunları çözmek sağlar. Not, bu özellikte 'localhost' devredışı bırakılır. ");
jr_define('_JOMRES_COM_ISTHISANMRP', 'Bu özellik otel/yatak ve kahvaltı/konukevi/pansiyon mu? ');
jr_define('_JOMRES_COM_ISTHISANMRP_DESC', 'Configuration options differ depending on if you are renting out rooms in a business, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire business. ');
jr_define('_JOMRES_COM_JOMRESEMAILCHECK', 'Jomres e-posta adresi denetleyicisi kullansın mı? ');
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC', 'Gönderilen e-postalar üzerinde daha sıkı bir kontrol uyguluyor. Bazı güvenli web sunucuları,varolmayan bir e-posta adresine bir e-posta göndermeye çalışırsanız 500 dahili bir hata atmak olacaktır. Bu geçiş bir e-posta göndermeye çalışırken, bu 500 hataları önlemek için önce php checkdnsrr özelliklerini kullanmak için bize izin verir. ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Konaklama Toplam');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'Gece(ler)');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'kaynak başına ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Hizmetler Toplam (inc vergi)');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Fiyat Özeti ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Lütfen okuyun ve kabul edin ');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Rezervasyonunuzun bir özeti aşağıda gösterilmiştir.<br /> Herhangi bir değişiklik, düzeltme Rezervasyon butonuna basınız. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Eğer yukarıdaki bilgileri değiştirdikten sonra lütfen buraya tıklayın');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Rezervasyon değiştir');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Aşağıdaki kutuya herhangi bir özel istekleri girin.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Yukarıdaki bilgilerin doğru olduğunu onaylıyorum ve kabul ediyorum ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'Gecelik kişi başı ');
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE', 'Varsayılan dil dosyası');
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', 'Dil Joomfish tarafından belirlenmiş değil kullanmanız gereken Jomres varsayılan dil dosyasını seçin.');
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'of');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Başlat');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Önceki');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Sonraki');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Son');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Sonuçlar');
}

jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Lütfen göndermek istediğiniz mesajı girin ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Bize ulaşın');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Mülk soruşturma ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Sorularınız için teşekkür ederim, Mesajınızı iş iletişim e-posta adresine gönderilen ve kendi adresinize kopyalanmış kayıtları için olmuştur. Size en kısa sürede cevap ile yanıt verir.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' ilgili ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Kutuda gördüğünüz karakterleri yazın');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'Karakterleri okuyamıyorum. Yeniden oluştur. ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Gönder');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'yeni resim');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Soruşturma');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Aşağıdaki kaynak tıklayarak listeden gerekli konaklama seçiniz.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Minimum oda zaten seçilmiş');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Zaten tarife/kaynak türü açılan önce rezervasyon seçilen oda en az sayıda sunulabilir. "n" oda daha önceden seçildiğinde indirimli tarifelere sahip olmanızı sağlar. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max oda zaten seçili');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Zaten rezervasyon tarife/kaynak combo önce seçilen oda sayısı artık sunulmaktadır. Allows you to stop offering this resource type/tariff combination once N rooms have been selected in the booking form. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Note that Single person supplements set here will not be used if Single Person Supplements are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Mevcut');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Bazı rezervasyonlar');
jr_define('_JOMRES_AVLCAL_HALF', 'Yarı rezervasyon');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Genelde rezervli');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Tamamı rezervli');
jr_define('_JOMRES_COM_SEF_URL_PREFIX', 'Url önek');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC', 'This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'View property task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'dobooking task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Search task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Ülkeye url ekle');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Bölgeye url ekle');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Şehre url Ekle');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Mülkiyet türüne url ekle ');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Mülkiyet adına url ekle');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Mülkiyet adına mülkiyet id ekleyin');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Arama URL Yapısı - Ülkeye url ekle');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Arama URL Yapısı - Varsayılan ülke');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'Eğer tüm işlerinizi tek bir ülkede olursa o zaman ülke araması olmayacak - eğer bir ülkenin listesini görüntülemek istiyorsanız, burada geçerli bir ülke girin');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Arama URL Yapısı - Bölge url Ekle');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION', 'Arama URL Yapısı - Varsayılan bölge');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'Eğer tüm işlerinizi tek bir bölgede ise o zaman arama bölgesi olmayacak - eğer bir bölge görüntülemek istiyorsanız, burada varsayılan bir bölge girin');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Arama URL Yapısı - Şehre url Ekle');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN', 'Arama URL Yapısı - Varsayılan Şehir');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Arama URL Yapısı - Mülkiyet türü');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Arama URL Yapısı - Varsayılan Mülkiyet türü');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Tüm mülkiyet türleri için kullanılan url');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Javascript takvim dilini Otomatik Algıla ');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Haftalık');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Günlük');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Rezervasyon başına');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Kişi ve rezervasyon başına');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Günlük kişi başına');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Haftalık kişi başına');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Günlük (dk gün)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Gün başına X oda seçili');
jr_define('_JOMRES_REGISTRYREBUILD', 'Rebuild minicomponent registry & rebuild cache');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Kayıt başarıyla yenilendi');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Mini bileşenlerinin kayıt defteri yeniden oluşturma ile bir hata oluştu. Eğer hata tetikleyen ne bir kayıt olup olmadığını görmek için Jomres hata günlüğünü kontrol etmelisiniz.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Fiyat');
jr_define('JOMRES_WORD_SAVING', 'Saving...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Kompozit Mülkiyet ayrıntıları kullanılsın mı?');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_business_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS', 'This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to businesses or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific businesses only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their business(s) themselves will be automatically assigned to those businesses. Super property managers automatically have rights over all businesses, and will see all configuration options even if the minimised configuration option is set in Site Config.');
jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Here you can assign a manager to certain businesses. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain businesses, ensure that the Super Property Manager dropdown is not set to Yes.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Henüz herhangi bir rezervasyon yapılmamış!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Mülkiyet türü');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Aradığınız mülkiyet türünü düzenleyin');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Mülkiyet tipi seçin');
jr_define('_JOMRES_COM_LOGGING', 'Jomres günlüğü');
jr_define('_JOMRES_COM_LOGGING_WARNING', 'These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');
jr_define('_JOMRES_COM_LOGGING_BOOKING', 'Rezervasyon formu günlüğü (Rezervasyon motoru günlükleri) ');
jr_define('_JOMRES_COM_LOGGING_GATEWAY', 'Ağ Geçidi günlükleri (örneğin paypal vb) ');
jr_define('_JOMRES_COM_LOGGING_REQUEST', 'Talep günlüğü (tüm alınan sunucu istekleri)');
jr_define('_JOMRES_COM_LOGGING_SYSTEM', 'Çeşitli ');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL', 'JR Portal (mainly for recording commission etc) ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Sorunuz...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Rezervasyon formu kaynak listesi ve kaynak türü görüntüle');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Mülkiyet liste sınırı');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'İşletmelerin sayısı aramadan sonra gösterilecek');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Entegre arama özelliği');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'The Jomres integrated search feature allows your users to search through Jomres businesses according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>/jomres/templates/(bootstrap3 or bootstrap or jquery_ui)/frontend/</b>');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Bu özellik etkinleştirilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Sütunları kullanın');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Eğer bağlantı türü (ile ilgili) olarak tanımlanan herhangi bir arama seçeneği (IE bağlantının sonuna br koymak) sütun olarak gösterilir');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', 'Özellik sütunları');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', 'The number of feature icons that can be shown before a br is inserted to go to next row.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Seçilen bölgeye göre ara');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Mülkiyet adı');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Girilen Mülkiyet  adını göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Açılır listeyle göster?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Bu listeyi link olarak göstermek için hiçbir ayarla');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Şehir/Bölge');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Bölge girişi göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Açılır listede gösterilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Bu listeyi link olarak göstermek için hiçbir ayarla');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Mülkiyet türüne göre ara');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Girilen mülkiyet tipine göre aramayı göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Açılır gösterilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Bu listenin bağlantılarını göstermek için hiçbir ayarla');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Kaynak türüne göre arama');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Girilen kaynak türüne göre aramayı göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Açılır gösterilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Bu listenin bağlantılarını göstermek için hiçbir ayarla');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Özellikleri');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Girilen arama özelliğine göre ara');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Açılır gösterilsin mi?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'İpucu görüntüleri ve onay kutuları listesini göstermek için hiçbir ayarla');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Açıklamaya göre ara');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Girilen açıklamaya göre aramaları göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Kullanılabilirliğe göre ara');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Kullanılabilirlik girişi ile arama göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Fiyata göre arama');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Giriş fiyat aralıkları ile arama göster');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Fiyat aralığı arttır');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Yazılım tarifeler tüm değerleri sonra burada ayarladığınız aralıklarla değerine göre fiyat aralıkları bir dizi çalışma dışarı bakar.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Varsayılan olarak, eğer bir Yazılım özellik seçili değilse, bir arama gerçekleştirir. Eğer bu Arama modülü tarafından tetiklenen değilse o zaman arama rastgele sonuçlar üretir. Bu seçenek rastgele arama getiri sayısını sınırlamak için izin verir.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron iş ayarları ve günlükleri');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Sözde cron iş bilgileri. Sözde cron işlevselliği faturalama ve komisyon işlemesi gereklidir.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
jr_define('_JOMRES_COM_A_CRON_METHOD', 'Yöntem');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Eğer cron erişiminiz varsa, bu Minicomponent için, başka bir cron işi oluşturmak ve çalıştırmak için bunu  ayarlayın<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1&secret='.base64_encode(get_showtime('secret')).'> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Tarayıcıda görüntüleme günlüğü');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Yöntem mini bileşeni olarak ayarlanırsa, yalnızca çalışır.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Günlük etkin');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Etkin oturum için bu ayarlayın. Günlük sonuç çıkışı aşağıda olacak.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Ayrıntılı günlük kaydı');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Günlük çıkış');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Şablon düzenleme');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC', 'Bu işlevsellik veritabanına sonuçları kaydetme, bize sunucu üzerinde Jomres önyüz şablonları düzenlemek için izin verir. Gelişmiş özellik, onunla dikkatli olun.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Şablon adı');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Şablon uyarlanmıştır?');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Özel alanlar');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Burada rezervasyon formunu gösterilen basit özel alan tanımlayabilirsiniz.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Alan adı (boşluksuz)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Varsayılan değer');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Açıklama');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Gerekli');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maksimum Miktar');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
jr_define('_JRPORTAL_INVOICES_ISSUE', 'Faturalar');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Vergi oranları');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Vergi kodu');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Puan açıklaması');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Bu vergi oranı silemezsiniz.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Oran');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Faturalar');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Ödenmemiş');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Ödenmiş');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'İptal');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Bekleyen');
jr_define('_JRPORTAL_INVOICES_USER', 'Kullanıcı');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Durumu');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Kaldırdı');
jr_define('_JRPORTAL_INVOICES_DUE', 'Nedeniyle');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Abonelik');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Olağanüstü toplam');
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL', 'Yinelenen toplam');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Yinelenen frekans');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Ayın tekrarlanan günü');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Para birimi kodu');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Satır öğeleri');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Adı');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Açıklama');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'İlk Fiyat');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'İlk Miktar');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'İlk İndirim');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'İlk Toplam');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', 'Yinelenen fiyatı');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', 'Tekrarlanan miktar');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', 'Tekrarlanan indirim');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', 'Tekrarlanan toplam');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Vergi kodu');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Vergi açıklaması');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Vergi oranı');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', 'Paypal ayarları');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', 'Para birimi kodu (eg EUR)');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', 'Kullanımı sanal?');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', 'Paypal e-posta adresiniz');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', 'Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;'.JOMRES_SITEPAGE_URL_AJAX.'&task=completebk');
jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', 'This invoice is now due. Please click the button to be taken to paypal.');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Override standard Jomres gateway settings?');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', 'If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Faturalarımı göster');
jr_define('_JRPORTAL_COUPONS_TITLE', 'İndirim kuponları');
jr_define('_JRPORTAL_COUPONS_DESC', 'Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Kupon kodu');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Kadar geçerli');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'İçin geçerli');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'İndirim miktarı');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'İndirim yüzdesidir');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Sadece oda');
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC', 'Discount is only applied to the cost of the resource. If No, then the discount is applied to the entire cost of the booking.');
jr_define('_JRPORTAL_COUPONS_SQLERROR', 'Sql error when trying to delete/insert a coupon');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Kupon kaydet');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kupon rezervasyon karşı kurtardı');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Kupon numarası bulunamadı');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'İndirim kupon değeri');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'İndirim rezervasyon. Kupon kodu / indirim değeri / kupon ayarları : ');
jr_define('_JOMRES_COM_CACHING', 'Jomres önbelleğe alma özelliğini kullanın?');
jr_define('_JOMRES_COM_CACHING_DESC', 'Jomres önbelleğe alma özelliğini devre dışı bırakmak için hayır olarak ayarla.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Dil seçin');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Dilde açılan geçiş gösterilecek dil seçenekleri seçin.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Dil seçimi  göster?');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Rezervasyon ve iptal edilen rezervasyonlar');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Sevgili');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Kayıt olduğunuz için teşekkür ederiz ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Kullanıcı adın : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Kullanıcı şifren : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Rezervasyonlarınızı görmek için giriş yapın ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupon kaydedildi');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupon silindi');
jr_define('_JOMRES_COM_GROWL', 'Yazılım mesajlaşma');
jr_define('_JOMRES_COM_GROWL_DESC', 'Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', ' Yazılım -> SMS söyle');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Kullanıcı Adı');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Şifre');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API kimliği');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Bildirim cep telefonu numarası');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Ülke kodu, cep telefonu numarasını kullanın'. Örneğin İngiltere merkezli cep telefonu numarası '447979123456' gibi bir şey olurdu. Eğer cep telefonunuza gönderilen herhangi bir bildirim e-postaları istemiyorsanız bu alanı boş bırakın.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b>Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.</b>
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
<b>Step 1 - register for a Clickatell account</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Step 2 - add a registered API connection (sub-product)</b><br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select \"Manage my Products\" from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to " .get_showtime('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Rezervasyon formu kaynak listesi gösterisi');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Rezervasyon formu kaynak listesi gösterisi max insanlar');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Please note that resource prices listed are estimates and the full price of the booking will not be calculated until you have added a resource or rooms to your selection.');
jr_define('_JOMRES_LASTEDITED_DB', 'Veritabanı şablonu son düzenleme');
jr_define('_JOMRES_LASTEDITED_DISK', 'Disk şablonu son düzenleme');
jr_define('_JOMRES_LASTEDITED_WARNINGICON', 'Veritabanı şablonu uyarısı');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Veritabanı şablonu güncel olabilir');
jr_define('_JOMRES_LASTEDITED_WARNING', 'If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Abonelik paketleri');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'İsim');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Açıklama');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Yayınlanan');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', 'Sıklık');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', 'Deneme süresi');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', 'Deneme tutarı');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Tam miktar');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', 'Oda sınırı'); // Not currently used, saved for a rainy day
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Mülkiyet sınırı');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', 'Sıklık: M/Q/B/A Aylık/Üç ayda bir/İki yılda/Yıllık');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', 'Deneme süresi: Tamsayı giriş, 0 (sıfır) ayarlanmış değil, Bir ay boyunca, İki ay boyunca etc');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Abone');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', 'Abone bilgilerinizi girin/güncelleyin. Tüm alanların doldurulması zorunludur lütfen unutmayın.');
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME', 'Ad');
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME', 'Soyad');
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS', 'Adres');
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY', 'Ülke');
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE', 'Posta kodu');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', 'Yeni iş oluşturmak için geçerli bir abonelik gerekir.Bu şu anda, için abonelikleri satın almış ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', ' <i>yayınlanan</i> iş(s). ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "You can increase the number of businesses you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', ' Kullandığınız ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', ' Özellik yuvaları. ');
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "Mevcut işletmelerin listesini görmek için tıklayın <a href='".JOMRES_SITEPAGE_URL."&task=listyourbusinesses'>here</a>. ");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "Mevcut geçerli abonelik paketleri listesini görmek için tıklayın <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', 'Ne yazık ki, Mevcut mülkiyet yuvalarının maksimum sayısına ulaştınız  bu özelliği yayınlayamazsınız.');
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "Bizim sunucu üzerinde mülkiyet listesi için bir abonelik oluşturmak için teşekkür ederim. Faturanız ödenmiş olarak işaretlenmiş bir kez (Paypal bağlı olarak bir gecikme olabilir) <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your business(s).</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Kullanım abonelik işleme işlevselliği');
jr_define('_JOMRES_COM_NEWUSER', 'Rezervasyon yeni kullanıcı oluştur');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Kayıtsız Kullanıcı, rezervasyon, yeni bir kullanıcı hesabı oluşturun');
jr_define('_JOMRES_CLICKTOREGISTER', 'İşinizi kaydetmek için tıklayın.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', 'Etkin abonelikler');
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', 'Ağ geçidi abonelik kimliği');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Rezervasyon için teşekkür ederiz - yeni kullanıcı bilgilerini takip edin');
jr_define('_JOMRES_LATLONG_DESC', 'Harita etrafında hareket ve enlem ve boylam ayarlamak için mülkiyet yere işaretçiyi sürüklemek için farenizi kullanın.');
jr_define('_JOMRES_CONTROLPANEL', 'Kontrol Paneli');
jr_define('_JOMRES_COM_FAUXHEADERS', 'Output Jomres javascript headers into the body of the html?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC', 'Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Fatura göster');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Faturaları göster');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Bu site için mülkiyetimi ekle');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Todo : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', 'You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Üzgünüz, ama bu paket kimliği kabul edilmez.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Üzgünüm, zaten özgür bir pakete üye olduğunuz, bu pakete tekrar abone olamazsınız.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', ' Status <b>0:</b> Pending payment <b>1:</b> Oluşturuldu <b>2:</b> İptal edildi <b>3:</b> Dönem sonu');
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', 'Hesabım');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Şirket Bilgileri');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Şirket Adı');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Vergi numarası');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Bina numarası');
jr_define('_JOMRES_COM_A_TAX_WARNING2', '<font color=red>NOTE: Aşağıdaki vergi oranları Amerikan pazarı tarafından kullanılmak üzere tasarlanmıştır. Eğer konaklama için sabit bir oran vergi (e KDV) kullanmak istiyorsanız, yukarıda seçeneğinden bir vergi oranı seçiniz.</FONT>');
jr_define('_JOMRES_INVOICE_NUMBER', 'Fatura Numarası. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Siyah rezervasyon uygulamak istediğiniz tarihleri seçin. Uygun tarihleri seçtikten sonra yeniden yer durumunu kontrol etmek için "Uygula" düğmesine tıklayın. <br/> 
<br/> 
Eğer bu özellik seçili dönem için bir veya daha fazla rezervasyonlar varsa, o zaman diğer rezervasyon siyah rezervasyon/,/çıkış rezervasyonu iptal edilene kadar revervasyon çıkışı mümkün olmayacaktır.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Üzgünüm, o tarihlerde siyah rezervasyon özelliğini kullanamazsınız.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Bu tarihler için bu özelliği siyah rezervasyon edebilirsiniz.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Mülkiyet, kişi başı gecelik ücret için yapılandırılmış, ancak oluşturulan veya yayımlanan herhangi bir konuk tipleri zorunda değilsiniz, lütfen oluşturun ve bir veya daha fazla konuk tipleri yayınlayın. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Sonraki bazı tarife eklemek gerekir. Bu temel oda fiyatlarını, gerçek özelliği var her oda tipi için fiyatları eklemelisiniz.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Düzenleme modu etiketi');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Düzenleme modu kapalı');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Değişken mevduat ücret?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Tam miktar depozito olarak tahsil edilecektir, gün içinde,.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN', 'Alternatif adres için iletişime geçin e-posta gönder.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'İletişime geçmek için alternatif e-posta adresleri.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Onay e-posta gönderildi. Şimdi bu pencereyi kapatabilirsiniz.');
jr_define('_JOMRES_REALESTATE_TITLE', 'Gayrimenkul listesi');
jr_define('_JOMRES_REALESTATE_YESNO', 'Satılık liste için bu özellik var mı?');
jr_define('_JOMRES_REALESTATE_YESNO_DESC', 'Eğer gayrimenkul satıyoruz eğer kısa vadeli kiralama sunacak ve rezervasyon almak için bu sistemi kullanarak olacak bir liste ise Evet, Hayır seçeneğini seçin.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'İletişim aracı');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'fatura ödeme');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Fatura ödendi olarak işaretlenmiş');
jr_define('_JOMRES_APIKEY_REMAKE', 'Yeni API anahtarı');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE', 'İlk çeviriler için Google kullanın?');
jr_define('_JOMRES_AUTOTRANSLATE_DESC', 'Bu özellik, yeni ve deneme aşamasında, bu yüzden kendi sorumluluğunuzdadır.Özelliğin amacı otomatik olarak belirli bir iş için çeviriler kurmak Google çeviri aracı sorgulamak için. Bu özellik tüm girdileri, böylece İşletme bilgilerini biçimlendirmek için bir html editörü kullanıyorsanız, o zaman bu o biçimlendirmeyi kıracak unutmayın.<br/>');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Bu özellik, montaj mı?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Eğer bu seçeneği evet olarak ayarlanmışsa, sivil yetkili kullanıcılar için yazılım en ön görünümü büyük ölçüde basitleştirilir.Varsayılan Yazılım için bir menü seçeneği, gelen çağrılar, bunun yerine şirketlerin listesi veriliyor, sadece sistemi ilk özellik için rezervasyon formu için misafir alır. Mülkiyet yöneticileri de İşletme Detayları önizleme düğmesini veya yeni bir özellik ekle düğmesini göremez. İdeal sadece bir özellik listesi ve bunun için rezervasyon almak istiyorsanız.<br/>');
jr_define('_JOMRES_HTMP_PURIFIER', 'HTML temizleyici işlevini kullanın?');
jr_define('_JOMRES_HTMP_PURIFIER_DESC', 'html temizleyici kütüphane kullanımı Jomres etkinleştirmek için bu geçiş (http://htmlpurifier.org/). Kütüphaneye giriş ve çıkış verileri ile ilgili ve etkin bırakmanız önerilir zaman fazladan bir güvenlik katmanı olarak kullanılır, ancak daha fazla bellek kullanır..');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Bakiye ödeme');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Bakiye');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Not, Küresel düzenleme modunu etkin kullanıyorsunuz. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> for more information on this subject.');
jr_define('_JOMRES_SUPPORTKEY', 'Destek anahtarı');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Kişisel indirim');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Bir ülkede mülkiyet kaydı sınırlayın?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Businesses are located in this country : ');
jr_define('_JOMRES_JQUERYTHEME', 'jQuery tema');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Choose a jquery theme to use for the property details tabs.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'We are sorry, but that property is not currently available.');
jr_define('_JOMRES_REVIEWS', 'Yorumlar');
jr_define('_JOMRES_REVIEWS_TITLE', 'İnceleme Başlığı');
jr_define('_JOMRES_REVIEWS_DATE', 'Yayınlanan ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Bu özellik için hiç yorum yapılmamış.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Bu iş için ilk yorum yapan siz olmak istermisiniz?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Bu yoruma katılıyorum');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Bu yoruma katılmıyorum');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Ortalama Puanı: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Toplam Oy:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Yeni Yorum ekle.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Bir yorum yazmak için oturum açmanız gerekir.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Bu özellik hakkında ne düşündüğünüzü bize söyleyin : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Bu yorum anlattı : ');
jr_define('_JOMRES_REVIEWS_PROS', 'Artıları: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Eksileri: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Teslim Tarihinde: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Zaten bu iş yapılmıştır, bu konuda daha fazla yorum gönderebilirsiniz.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Üzgünüm ama bu sitede yorumları göndermek için izin verilmez.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Yorumları göster');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' Konuklar bu değerlendirme ile aynı fikirde. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' Konuklar bu değerlendirme ile aynı fikirde değil.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' Konuklar bu değerlendirme ile aynı fikirde. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'Konuklar bu değerlendirme ile aynı fikirde değil.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Düşüncelerinizi paylaştığınız için teşekkür ederiz.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Teşekkür ederim, ama zaten bu  düşüncelerinizi paylaştınız.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Tüm alanları dolu olduğundan emin olun.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Bir başlık girerek yorumunuzu özetleyin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Lütfen açıklama kutusuna daha eksiksiz bir inceleme girin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Lütfen bu iş bir konuk olarak deneyiminiz iyi tarafları girin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Lütfen herhangi bir olumsuz düşüncelerinizi girin ');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Lütfen personelden aldığınız misafirperverlik oranını giriniz');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Lütfen iş ile ilgili düşüncelerinizi oranlayın');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Lütfen temizlik ile ilgili düşüncelerinizi belirtin');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Lütfen konaklama oranı.Rahat ya da eskimişti');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Lütfen para için değer mi sizce');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Hizmetler oranı');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Özeti gözden geçir');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Deneyiminizi daha ayrıntılı ');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Yorumunuzu gönderdiğiniz için teşekkür ederim.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Yorumunuzu gönderdiğiniz için teşekkür ederim. Bizim çalışkan moderatörler biri tarafından yakında yayınlanacak.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Yazılım inceleme işlevselliği?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Otomatik olarak yorumlar yayınlamak?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Bunu ayarlarsanız elle değerlendirmeleri yayınlamak gerekir');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Test modu değerlendirmeleri olsun?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normalde apartman yöneticileri yorum yapamaz. Test modu etkin olabilir. Doğal olarak bu üretim ortamında ideal değildir.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Tüm işlerin listesi. Bir işin yorumları görmek için, bu iş üzerine tıklayın. Bir yorum yayımlamak ya da silmek.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Yayımlanmamış yorumları sayısı');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Yorumların toplam sayısı');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Yayımlanmış/Yayımlanmamış yorumlar');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Yorum sil');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Yorum inceleme');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'İnceleme raporları');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Lütfen raporunuzu girin');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Yorumda sakıncalı veya yanlış birşey gördünmü? Raporu kontrol edeceğiz');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Gönder');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Rapor tarafından oluşturulan ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Kullanıcılar tarafından yayınlanmış raporlarda bir yorumda içeriğine katılmıyorum. Bir rapor kaldırmanın tek yolu yorumu silmektir.');
jr_define('_JOMRES_REVIEWS_RATING', 'Puanlar (1 = zayıf 10 = mükemmel) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Misafirperverlik  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Konum ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Temizlik ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Konaklama ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Para için değer ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Hizmetleri ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Tarafından yapılmıştır : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Yorumları gizle');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Emlak detayları sayfasında rezervasyon formu göster?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Prices are gross?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'If the prices you enter into the system include tax, then select Yes. If they are not (i.e. Nett), select No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Hizmetler vergisi:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Başlangıç');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Bitiş');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Oran');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Set oranları');
jr_define('_JOMRES_PARTNERS_TITLE', 'Ortaklar');
jr_define('_JOMRES_CALENDAR_TODAY', 'Bugün');
jr_define('_JOMRES_CALENDAR_PREV', 'Önceki');
jr_define('_JOMRES_CALENDAR_NEXT', 'Sıradaki');
jr_define('_JOMRES_CALENDAR_RTL', 'Yanlış');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Oda ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'Konuklar. ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Note that your property is not yet published, only you can see the business, site visitors will not see it');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Varsayılan arama sonucu');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Change this option to change the order that search results are presented by default.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Arama sonuçlarını göster');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Oda listesi');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the resource type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klasik');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Oda tipleri');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', 'Kontrol durumu');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Odalar listesi yeniden oluşturuluyor');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Toplamları hesaplama');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Bitmiş formu güncelleme');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Takvim hafta başlangıç günü, Pazar veya  Pazartesi');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Sadece konuklar mülk gözden geçirebilir?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Konuk olan kullanıcıların yorumlarını kısıtlamak istiyorsanız Evet olarak ayarlayın.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Kaynak başına');

jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Konuk başına : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Rezervasyon başına konuklar : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Oda sayısı');

jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Varsayılan fiyat');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', 'Bu sadece yeni tarifeleri için geçerlidir');
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW', 'Yıl göstermek için');
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', 'Bir mikro tarife yönetmek düzenlerken göstermek için yıl sayısını tanımlar');

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

jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS', 'Mülkiyet yönetimi süreci');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', 'There are different management processes depending on the way you want to list your business/business.');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', 'Kiralık');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', 'Choose the rental option if you are booking out rooms in a property (eg. Hotel/B&B/Villa/Apartment)');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', 'Mülk/Basit Liste');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', 'Choose the real estate option if you are not offering any booking functionality at all, (eg. A business/item for sale)');

jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Please select an option for your booking');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Fullscreen view');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Normal view');
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER', "Show the timezone switcher in the property manager's toolbar?");

jr_define('_JOMRES_PARTNER_DISCOUNT', 'Ortak indirim ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Kullanıcı arama');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign businesses and discounts to the user.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Existing partners');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Choose a partner to be taken to the partner administration page.');

jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Ortak :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Bir işletme için arama');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Enter a few characters from the property name and select a business.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Mevcut işletmeler');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Click on a property to edit the partner's discount settings for that business.");

// 4.6
jr_define('_JOMRES_SUSPENSIONS_TITLE', 'Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their businesses ) ');
jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', 'Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their businesses will be unpublished. Super property managers cannot be suspended.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'This account has been suspended, it is not currently possible to administer your propert(ies) using this account.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Yönetici hesabı askıda');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Yönetici hesabı yeniden');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Favoriden kaldır');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Rezervasyon veri arşivi');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Hesap düzenleme');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', 'Kullanıcı arama');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of.');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Existing managers');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', 'Choose a manager to be taken to the manager administration page.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Sleeps');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Show the search by guest number dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Stars');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Show the Stars dropdown');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Konuk sayısı');
jr_define('_JOMRES_SEARCH_STARS', 'Yıldız sayısı');

jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE', 'Commission invoices');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Number of businesses');

// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Load Jomres jQuery library?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Thumbnails are created automatically for uploaded images.');

// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Small thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Small thumbnails max height (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Medium thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Medium thumbnails max height (px).');

jr_define('_JOMRES_TOUCHTEMPLATES', 'Label Translations');

jr_define('_JRPORTAL_ROI_TAB', 'ROI');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Use commission functionality?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Set this to Yes to show the manager commission invoices which have been raised.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Manager bookings create commission invoices?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'If a manager makes a booking, does that also create a commission invoice line item?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', 'A new commission invoice has been raised');
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', 'A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Auto suspend managers where invoices are marked as Pending?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Auto suspend threashold');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'This threashold is the number of days that a manager has to pay an invoice before they are suspended and their businesses unpublished.');

//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Language context');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /'.JOMRES_ROOT_DIRECTORY.'/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /'.JOMRES_ROOT_DIRECTORY.'/languages directory. Note that if you create a new property type, then a copy of the current language file is made in a subdirectory under /'.JOMRES_ROOT_DIRECTORY.'/language with a name that reflects the new property type\'s description.');

// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.');

jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Load Jomres jQuery UI library?');

jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Price (highest first)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Price (lowest first)');

// 4.7.6

jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Price summary and estimates should be priced as per night/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Gecelik');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Haftalık');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Aylık');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Kişi başına');

jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week(s) at ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month(s) at ');

// 4.7.7

jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'How should the search option for people numbers work?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Please wait, your order is being processed and you will be redirected to the Paypal website.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'If you are not automatically redirected to Paypal within 5 seconds...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Buraya Tıkla');
// 4.7.8

jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Geçerli rezervasyon');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Rezervasyon geçerli');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Konuk ismi');
jr_define('_JRPORTAL_COUPONS_DESC_478', "Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'With your coupon, this booking has been discounted from ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' to ');

jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Set this to No to disable loading of both the Jquery UI javascript and CSS files.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Load Jomres jQuery UI CSS library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Set this to No to disable only the jquery UI CSS file.');

//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Toplam vergi');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Yayımlanmamış mülkiyet');

// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Use conversion functionaity');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.');
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE', 'Use javascript caching?');
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC', "Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");

// 5.2.1
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW', 'List historic and current guests');
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW', 'Current guests only');

// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Currency conversion/currency codes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Debugging');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP', 'Show the booking form in a modal popup?');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals panel location');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Accommodation ex tax');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Accommodation inc tax');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Accommodation tax');

jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Open the booking form');

jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Back to property details');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatically Selected?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balance (after deposit paid)');

jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter rooms based on their features.');

jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Latest booking');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'ikinci');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'dakika');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'saat');
jr_define('_JOMRES_DATEPERIOD_DAY', 'gün');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'hafta');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'ay');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'yıl');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'on yıl');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'önce');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'şimdi');

jr_define('_JOMRES_WHOLEDAY_TITLE', 'Bookings are for whole days?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'By default the system bookings rooms out by the night, so a booking from the first of January '.date('Y', strtotime('next year')).' to the 2nd of January '.date('Y', strtotime('next year')).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Günde');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Günde kişi başı');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Alıcı');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Dönüş');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'gün (ler)');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Dönüş tarihi yanlış');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'The booking is too short. There needs to be at least this many days between the pickup and return dates:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Pickup/Return minimum interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Price summary and estimates should be priced as per day/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per day');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Days before the pickup date');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'The minimum number of days that must elapse, from "today", before the pickup date.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Show return date input?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per person, per day');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Most businesses will recalculate resource prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a resource/property type that isn\'t busy during a given period with the aim of attracting property that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied. Note however, if multiple rooms are booked then the current level of discount will be applied to all rooms and will not reduce as more rooms are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (number of days between pickup date and today)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Picked up');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Has not picked up');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost per day: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Number of days: ');

jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Save override');

jr_define('_JOMRES_BOOKINGFORMWIDTH', 'Booking form width in px');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED', 'Allow the totals panel to slide down the booking form?');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', 'The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Email new users their login details?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Show tax output in the booking form totals summary?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Cancellation Threashold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

jr_define('_JOMRES_EDIT_PROFILE', 'Edit Profile');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship');
jr_define('_JOMRES_IMAGE', 'Image');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Property types that can show this feature');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Edit Tax rate');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Edit Custom field');

jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'License server username');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.');

jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'This Jomres version : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Latest Jomres version');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.');

jr_define('_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres. The Core system is free, but it can be enhanced through the installation of plugins. To access those plugins you will need a download and support license. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Active property');
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', 'Change your active property');
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Email Settings');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternate Host');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Change this to your smtp mail server');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternate Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Change this to your smtp port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternate Protocol');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Use authentication');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Diğer Adı');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternatif Şifre');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');

jr_define('_JOMRES_WARNING_SYSTEM_CACHE', 'Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.');

jr_define('_JOMRES_QUICK_INFO', 'Hızlı Bilgi');

jr_define('_JOMRES_MENU_SHOW', 'Göster');
jr_define('_JOMRES_MENU_HIDE', 'Gizle');
jr_define('_JOMRES_MENU_SHOW_TITLE', 'Use the alternate menu layout?');
jr_define('_JOMRES_MENU_SHOW_DESC', "Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Varsayılan');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Kimse');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Kayıtlı');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Yöneticisi');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Süper Yöneticisi');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Kimse');

jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Erişim denetimi');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.');

jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Receptionist');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Tam Erişim Kontrolü');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.');

jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Tam Erişim Kontrolü');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.');

jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Users with admin rights to this property');
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES', 'Tüm kullanıcıların fatura listesi');

jr_define('_JOMRES_DEBUGGING_SUBJECT', 'Konu');
jr_define('_JOMRES_DEBUGGING_FULLNAME', 'Tam adınız');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'E-posta adresiniz');
jr_define('_JOMRES_DEBUGGING_ISSUE', 'Lütfen sorununuzu açıklayın');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametreler');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Güç');
jr_define('_JOMRES_METATITLE', 'Balık');
jr_define('_JOMRES_METADESCRIPTION', 'Açıklama');
jr_define('_JOMRES_FOUNDPROPERTIES', 'Mülkiyet bulundu');
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2', 'Mülkiyet Ekleyin : Adım 1 in 2');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Add your property : Adım 2 in 2');

jr_define('_JOMRES_MYPROPERTIES', 'Benim İşletmelerim');

jr_define('_JOMRES_CART_TITLE', 'Önerilen rezervasyonlarım');
jr_define('_JOMRES_CART_INFO', 'Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Rezervasyonları onayla');
jr_define('_JOMRES_CART_OR', ' yada ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Sonraya sakla');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Henüz kaydedilmiş herhangi bir rezervasyon yok.');
jr_define('_JOMRES_CART_VIEWCART', 'Sepeti görüntüle');

jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Dil dosyası');

jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Standart Başlangıç noktası');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

jr_define('_JOMRES_CLEARDATES', 'Henüz bir tarih yok.');

jr_define('_JOMRES_MOBILE_REDIRECT', 'Redirect to frameless when on mobile devices?');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

jr_define('_JOMRES_SYSTEM_EMAILS', 'Emails sent from which address?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

jr_define('_JOMRES_CSS_CACHING_TITLE', 'css önbelleğe alma kullanılsın mı?');
jr_define('_JOMRES_CSS_CACHING_DESC', '');

jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX', 'Search calendars show the clear dates checkbox?');

jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Liste görünümü');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Fotoğraf görünümü');

jr_define('_JOMRES_COMPARE', 'Karşılaştır');
jr_define('_JOMRES_REMOVE', 'Kaldır');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Arama sonuçlarına geri dön');

jr_define('_JOMRES_ADDTOSHORTLIST', 'Favorilere ekle');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Favorilerden kaldır');
jr_define('_JOMRES_VIEWSHORTLIST', 'Favorileri görüntüle');

jr_define('_JOMRES_COOKIEPOLICY_TITLE', 'Çerez Politikası');
jr_define('_JOMRES_COOKIEPOLICY_DESC', "EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show favourites, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

jr_define('_JOMRES_COOKIEPOLICY_1', 'Önemli: Çerez Politikası');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Biz alakalı ve kullanımı kolay sitemizi tutmaya yardımcı olmak için çerezleri kullanabiliriz.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Daha fazla bilgi edinin...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU legislation requires that all websites clearly specify if cookies are being used and their purpose.');
jr_define('_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6', 'Yes, I accept the use of cookies in this way.');

jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Deposit required is cost of the first night?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

jr_define('_JOMRES_NOTHINGINSHORTLIST', 'Favorileriniz için hiç ürün eklemediniz.');

jr_define('_JOMRES_MOBILE_SETTINGS', 'Mobil cihaz ayarları');
jr_define('_JOMRES_SIMULATE_MOBILE', 'Taklit cep modu');
jr_define('_JOMRES_SIMULATE_MOBILE_DESC', "Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION', 'Simulation IP');
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");

jr_define('_JOMRES_SAFEMODE', 'Güvenli Mod etkinleştirin?');
jr_define('_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");

jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');

jr_define('_JOMRES_USE_JOMRESEDITOR', "Use Jomres' WYSIWYG editor? (recommended)");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC', "If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

jr_define('COMMON_NEXT', 'Sıradaki');
jr_define('COMMON_CANCEL', 'İptal');
jr_define('COMMON_SUBMIT', 'Gönder');
jr_define('COMMON_SAVE', 'Kaydet');
jr_define('COMMON_DELETE', 'Sil');
jr_define('COMMON_RETURN', 'Dönüş');
jr_define('COMMON_CLOSE', 'Kapat');
jr_define('COMMON_BACK', 'geri dön');
jr_define('COMMON_HOME', 'Anasayfa');
jr_define('COMMON_NEW', 'Yeni');

jr_define('COMMON_SEND', 'Gönder');

jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being "spammed" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href="http://www.google.com/recaptcha" target="_blank">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Açık anahtar');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Özel anahtar');

jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.');

jr_define('_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC', 'If you are running a bootstrap enabled template in the frontend of this site set this option to Yes.');

jr_define('COMMON_ACTION', 'Eylem');
jr_define('COMMON_VIEW', 'Görünüm');

jr_define('BACKTOTOP', 'Başa dön');

jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Zayıf');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Güçlü');

jr_define('_JOMRES_INPUTFILTERING', 'Giriş filtreleme');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Giriş filtreleme seviyesi');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'İzin verilen etiketler');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Allowed inputs');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");

jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Property details in tabs?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Set this option to show property details in tabs. Set it to no to show them without tabs.');

jr_define('COMMON_PRINT', 'Yazdır');

jr_define('COMMON_EDIT', 'Düzenleme');
jr_define('COMMON_COPY', 'Kopyalama');

jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres is designed to work within both the Bootstrap 2 or Bootstrap 3 frameworks. Once you have installed a BS2 or BS3 theme or template, set this switch to choose which of the flavours of Bootstrap you want Jomres to work with.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Use Jomres Bootstrap templates in the frontend?');
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', 'Use Jomres Bootstrap templates in the administrator area?');

jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Here are some alternatives you might want to consider.');

jr_define('_JOMRES_BEEZ_WARNING', 'Note, your frontend template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar.');

jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Auto-detect guest's country?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option.");

jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Jomres hakkında');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Yardım');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN', '1 main');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Başlarken');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE', 'Sistem bakımı');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Erişim Denetimi');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'Geliştirici Araçları');
jr_define('_JOMRES_CUSTOMCODE_ASAMODULE', 'ASAModule');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'Diller');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'Gelir getirici');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING', 'Muhasebe');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS', 'Rezervasyonlar');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'Site yapısı');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT', 'Kullanıcı yönetimi');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manuel (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Hesabım (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS', 'Zamanlanmış görevler');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'Portal işlevselliği');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Eklenti Yöneticisi');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'Entegrasyon');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'Raporlar/İstatistikler');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES', 'Vergi');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_TICKETS', 'Biletler (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Yardım');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Yükseltmeler');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'Ödeme şekli');

jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Varsayılan tarife');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'This only applies to new tariffs');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Years to show');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Defines the number of years to show when editing a tariff type');

jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Faturalar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'Hesap detayları');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Oturum aç');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Çıkış Yap');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'arama');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'Gösterge paneli');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reserve ');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS', 'Yönetim');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Faturalar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'Ayarlar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'Çeşitli');
jr_define('_JOMRES_PROPERTYCONFIG_SRPS', 'SRPs');

jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Ülke düzenleme');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'Ülke id');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Ülke kodu');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Ülke adı');

jr_define('_JOMRES_EDIT_REGION_TITLE', 'Bölge Düzenle');
jr_define('_JOMRES_EDIT_REGION_ID', 'Bölge id');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Ülke Kodu');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Bölge adı');

jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Ülke listesi');
jr_define('_JOMRES_COM_LISTREGIONS', 'Bölge listesi');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'İhracat tanımları');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community.');

jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Yerel tercüme');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Translate lang file strings');
jr_define('_JOMRES_COM_NOTAMANAGER', "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Property Managers feature to make yourself BOTH a manager and a Super manager. This is a security feature.");

jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Property list default layout');

jr_define('_JOMRES_LASTEDITED_WARNING_72', 'Jomres uses templates to construct it\'s output. If you are a designer this makes changing the look and feel of Jomres easy, you don\'t need to edit any of the code, you just need to edit the template\'s markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that'); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Minimum kalma');
jr_define('_JOMRES_NIGHTSFOR', ' Geceleri ');

jr_define('_JOMRES_PROPERTYLIST_IMAGESASGIFS', 'Property list images, show the property image as a gif if slideshow images are available.');
jr_define('_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY', 'Show as GIFs only if the property is a featured property.');

jr_define('_JOMRES_AGENT', 'Acenta');
jr_define('_JOMRES_AGENT_DETAILS', 'Acenta detayları');
jr_define('_JOMRES_AGENT_LISTINGS', 'Acenta listeleri');

jr_define('_JOMRES_PROPERTY_LANG', 'Mülkiyet dili');
jr_define('_JOMRES_PROPERTY_LANG_DESC', 'Bu özelliğin varsayılan dili');

jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Otomatik olarak yeni özellikler onaylamak');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Onaylar');
jr_define('_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL', 'Properties awaiting approval');
jr_define('_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL', 'No properties are awaiting approval');
jr_define('_JOMRES_APPROVALS_APPROVE', 'Approve property');
jr_define('_JOMRES_APPROVALS_REVIEW', 'Review property');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'This property has not been approved yet. Once it has been approved you will be able to publish it.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Sorry, you cannot publish this property as it has not been approved yet.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'A new property requires approval');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'A property has been added to the system which requires your approval. Click the link to view the properties awaiting approval list : ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Your property has been approved');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Congratulations, your property has been approved, please click the following link to view the property's control panel : ");

jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Bölge adları çevrilebilir');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Unless you're running a very fast server you are advised to leave this set to No. Due to the large number of region names, region name translation takes up a lot of memory which can slow your search results down.");

jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Konuk rezervasyonu.');

jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Sorry, that email address is already in use. If this is your email address, please ensure you have logged in before attempting to book.');

jr_define('JOMRES_TAPTOCALL', 'Aramak için dokunun');

jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Yeni yorum ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Yeni yorum için bırakılmıştır ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Yeni Rapor');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'A review has been reported for ');

jr_define('JOMRES_NON_REGISTERED_USER', 'Kayıtlı olmayan kullanıcı');

jr_define('JOMRES_JQUERY18_2', 'Use Jquery 2.x?');
jr_define('JOMRES_JQUERY18_2_DESC', "Jquery 2.x is faster than previous implementations of jQuery, however it lacks certain things like $.browser and support for IE6/7/8 and older Firefox and Safari browsers. If you're seeing javascript errors on your page, or if your template/other plugins (like slideshows) use older versions of jQuery then you should set this option to No. ");

jr_define('JOMRES_SUPERIOR', 'Üstün');
jr_define('JOMRES_SUPERIOR_S', '(S)');

jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Genel toplam (eski vergisi) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Genel toplam (vergi dahil) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Toplam vergi : ');

jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Iki sözcüğü yazınız: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Duyduğunuzu girin: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Ses parçası tekrar ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'MP3 formatında parça indir');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Görsel mod');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Ses modu');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Yenileme');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Yardım');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Pardon, yanlış oldu. Lütfen tekrar deneyin.');

jr_define('JOMRES_GOOGLE_MAPS', 'Google haritası seçenekleri');
jr_define('JOMRES_GOOGLE_MAPS_INFO', 'These layer options are mainly specific to maps in property lists and the property details page. If enabled, only the Weather layer will be shown in the extended maps plugin as including too many options on a larger map makes it extremely slow.');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Hava katmanı kullanın?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD', 'Fahrenheit yada Celcius? ');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');

jr_define('JOMRES_GOOGLE_MAP_OPTION_PANORAMIO', 'Google Blogger kullanmak en iyi seçim olacaktır.');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'İkinci geçiş katmanı?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRAFFIC', 'Trafik katmanını kullanılsın mı?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_BICYCLING', 'Bisiklet katmanı kullanılsın mı?');

jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Enable Gmap Points of Interest (including possibly your competitors)?');

jr_define('_JOMRES_METAKEYWORDS', 'Anahtar kelimeler');

jr_define('_JOMRES_PLEASE_PRINT', 'Please print this email and present it on your arrival.');
jr_define('_JOMRES_OFFICE_USE_ONLY', 'Sadece ofis kullanımı için');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scan this code into your phone to get directions to us.');

jr_define('_JOMRES_VAT_FEATURE_ENABLE', 'Use the built in VIES VAT validation feature?');
jr_define('_JOMRES_VAT_FEATURE_ENABLE', 'New in Jomres 7.3 is a feature which allows property owners and guests who have valid VAT numbers to enter their details and not have VAT applied to their invoices where appropriate. This feature is intended to be used by EU based property managers.');

jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Congratulations. We were able to validate your VAT number.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED', "VAT number wasn't entered.");
jr_define('_JOMRES_TAX_RULES_LIST', 'List tax rules');
jr_define('_JOMRES_TAX_RULE', 'Tax rule');
jr_define('_JOMRES_TAX_RULE_INFO', 'Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the "edit my account" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Import tax rates');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Edit tax rule');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'The VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Please enter the VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT number validated.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT number not validated.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Property details entered here will be used on commission and subscriptions invoices.');

jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further.");

jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Production or Development?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to "production".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Production');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Development');

//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Oda detayları');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tarife detayları');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Sadece');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'ayrıldı!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Oda özelliği');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.');

// v7.4
$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
$jrConfig = $siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Medya Merkezi');
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY', 'Mülkiyet resim yükleme servisi');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Resim Ekle');

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Oda resimleri');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Mülkiyetin ana görüntüsü');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slayt görüntüleri');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Listeyi Temizle');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Burada sürükle ve bırak');

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Görüntüleri yüklemek istediğiniz kaynağı seçin. Eğer (örneğin odalar) bireysel odalar için resim yükle.');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS', 'The maximum file size for uploads is '.jomres_formatBytes($jrConfig[ 'fileSize' ]).'. Sadece JPG ve PNG görüntüleri izin verilir.');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Bu gibi birden fazla resim yüklemek istiyorsanız "Main property image" Özellik Listesinde kullanılacaktır. Slayt gösterisi görüntüleri özellik detay sayfasında gösterilecek.');

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Resmi görüntüle');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Resmi sil');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Resim yükle');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES', 'Özellik ve Oda tipi görüntüleri');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Oda tipleri simgeleri');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Mülkiyet özelliği simgeleri');

jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Tüm dosyaları yükle');

$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

jr_define('END_TOUR', 'Close');

jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE', 'Mülkiyetinize hoş geldiniz.');
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT', "Dashboard'a hoş geldiniz. Burası ana menü. Mülkiyetlerinizi ve konuklarınızı burada göreceksiniz, Mülkiyetlere tıklayın daha sonra görüntüleyin.");

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE', 'Mülkiyet adın');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT', "Whenever you are logged in as a property manager, you will always have an Active property, the name of which you can see here. This is the property you are working on. Please remember that you can only work on one property at a time, you can't have two tabs open in your browser and work on two different properties simultaneously.");

jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE', 'Zaman dilimi seçin.');
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT', 'Sunucunuz için farklı bir zaman dilimi varsa, bu yararlıdır. Senkronize gece yarısı ve sunucunun gece yarısı tutmaya yardımcı olur.');

jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE', 'Bu dil seçici.');
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT', 'You can change your current language by using this selector. This is useful if you want your property description to be available in several languages. You can go to the Property Details page and enter the description in language A, then use this selector to change to language B. Now, if you go to the Property Details setting page you can enter your description in language B.');

jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE', 'Düzenleme Modu seçici.');
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT', 'You can customise the labels on this page by switching on the Editing Mode. Once enabled labels that you can customise will have a dotted underline. Click that text and you will see a popup where you can enter the new text. This also works for different languages, so you can change the label in language A, then switch to language B and change the text again to something that suits your taste.');

jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE', 'Bu içerik alanıdır.');
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT', 'In this area you will see the page that you are working on. In the dashboard you will see a calendar which shows which rooms have been booked out and the period the bookings span. Click a date to create a new Quick Booking, or drag with the mouse to select more than one day.');

jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE', 'Aktif özellik anahtarı sayfası.');
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT', "You can change your active property by selecting the first letter from the name of the property below. When you do, you'll be given a list of all the properties you have rights to manage.");

jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE', 'Mülkiyet adlarını burada göstericektir.');
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT', 'İlk kez bir özelliği tıkladığınız Özellikleri Bu alanda gösterecektir. Bir özellik adına tıklayın özellik geçmek için. Eğer  birden fazla özellikleri yönetmek için bu sayfa yararlıdır.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE', 'Bu özellik başlığıdır.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT', 'This is shown on every guest facing page for your property. It shows your property name, the number of stars (if any), an optional link to another website, and a QR code. The code allows your guests to use their smart phone to get location details to your address.');

jr_define('TOUR_ID_GALLERYWRAPPER_TITLE', 'Sizin fotoğraf galerisi.');
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT', 'This is the slideshow area. You can upload photographs through the Media Centre page under the Settings -> Media Centre menu option.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE', 'Ana düğmeler.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT', 'Which buttons are shown here depends on which options you have chosen in the Property Details tab under Settings -> Property Configuration.');

jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE', 'Çevrimiçi Takvim.');
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT', 'Using this calendar your guests can see, at a glance, how busy you are on a certain date and whether or not there are any vacancies. They can also click the arrows above the calendar to change the month viewed in that calendar.');

jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE', 'Oda listesi sekmesi');
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT', 'Eğer kullanılabilirlik butonuna tıklarsanız burada tüm odaları ve her odada kullanılabilirliğini görebilirsiniz.');

jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE', 'Yorum listesi.');
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT', 'Under this tab are all of the reviews that have been left for your property. Only users who have been booked through the system can post a review of your property.');

jr_define('TOUR_ID_MAPTAB_TITLE', 'Harita sekmesi.');
jr_define('TOUR_ID_MAPTAB_CONTENT', 'Under this tab your guests can see your property in a zoomable map.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE', 'Daha Fazla Bilgi sekmesi.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT', 'Under Settings -> Property details you can enter information about your property that might be of interest to your guests, like Check in times, Area activities, Driving directions, Airports, Other transport & Policies & disclaimers. Once entered, that information can be seen under this tab.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE', 'Rezervasyon formu.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT', 'Your guests can either go to a separate page, or they can use the booking form in this tab.');

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE', 'Ana Mülkiyet detayları.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT', "Under Settings -> Property details you can fill a form called Property description. This is the tab that's always opened first when a guest visits your property on this site so you should try to add some text that will immediately grab their attention.");

jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE', 'All current and future tariffs');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT', 'This is a list of all current and future tariffs. You can change the look of the list by going into Settings -> Property Configuration and clicking on the Property details tab. Change the setting of the Verbose tariff info option.');

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE', 'Yerel etkinlikler.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT', 'If there are any events occurring local to your property they will show in this list. It is used for things like festivals, markets etc. Events that occur on specific dates.');

jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE', 'Görülecek Yerler:');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT', 'If there are any attractions near to you, like museums or amusement parks they will be listed here.');

jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE', 'Mevcut ihaleler.');
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT', 'If your property has any dates available for auction, then those auctions will be shown here. Auctions are a useful way of driving property to your property during quieter periods.');

jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE', 'Rezervasyon yapılandırma.');
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT', 'On this tab you can configure parts of how your booking form works. If you rent out rooms in a property, such as in a hotel or B&B then you can configure things like the rooms list style.');

jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE', 'Mülkiyet detayları.');
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT', "Here you enter your business's address and VAT number if you have it. These details will be shown on the invoices your guests will see, and any invoices generated by the site for you.");

jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE', 'Dış bağlantılar.');
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT', 'You can add a link to another site here.');

jr_define('TOUR_ID_TAB_GATEWAYS_TITLE', 'Ağ geçitleri.');
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT', 'Gateways are the term used to describe payment services. If you have an account with one of the gateway services shown in this tab you can enter your account details in this tab to take payments online.');

jr_define('TOUR_ID_TAB_MISC_TITLE', 'Muhtelif .');
jr_define('TOUR_ID_TAB_MISC_CONTENT', 'Bu sekme başka bir sekme içine sığmayan ayarları için.');

jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE', 'Mülkiyet özellik ayarları sayfası.');
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT', "This tab allows you to modify various options as they're shown on your Property Details page (Go to the Jomres Main Menu -> Dashboard -> Preview to see that page).");

jr_define('TOUR_ID_TAB_REQUIRED_TITLE', 'Rezervasyon formunda gerekli öğeler.');
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT', 'This tab allows you to set which items in the booking form that are required or optional.');

jr_define('TOUR_ID_TAB_SRPS_TITLE', 'Villa/Daire özel ayarlar.');
jr_define('TOUR_ID_TAB_SRPS_CONTENT', "This tab offers settings that are often used by villas and apartments. Any property where you're renting out the entire property, rather than rooms in a property individually. That said, these settings can be used by both villa and hotel type properties.");

jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE', 'Tek Kişi Takviyeleri.');
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT', 'Single person supplements are charges that are added to a booking if a room that can cater for two only holds on individual.');

jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE', 'Tarifeler');
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT', 'On this page you can configure how tariffs and deposits are calculated.');

jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE', 'Turist Vergisi.');
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT', 'If your country or city charges tourist taxes, you can configure them here.');

jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE', 'Yönetim ayarları.');
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT', 'Micromange tariff editing mode specific settings.');

jr_define('TOUR_ID_TAB_WISEPRICE_TITLE', 'Hizmet fiyat ayarları.');
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT', 'This tab allows you to enable and configure your room prices dynamically, giving you the ability to offer discounted room prices if occupancy when the booking is made is low.');

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE', 'Mülkiyet.');
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT', "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. ");

jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE', 'Tablo.');
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT', "Your data is presented as a table layout. On the left is a dropdown that allows you to change the number of items shown on each page. Next you have a number of buttons that allow you to export the data in the table to your local device. You can 1. Copy the data into your clipboard. 2. Export the data as a CSV (Comma seperated values). 3. Export in a format suitable for use in Excel. 4. Allows you to export the data as a PDF file and 5 Print, which will switch the layout so that you can print the data. Finally, on the far right, is an input field where you can search for a particular row or rows easily. Above each column there are titles, if you click on the title you can cause the column to be sorted, either ascending or descending, according to that column's contents.");

jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE', 'Mülkiyet.');
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT', "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property. ");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE', 'Mülkiyet oluşturma, adım 1.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT', "Creating a new property is a two step process. On this first page you will select the country and region of your property, select it's property type, and the process you will use to manage it.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE', 'Ülke özellikleri.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT', 'Here you will select your property country from a dropdown list. As soon as you select the country the page will reload and you will be able to choose the region for the property.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE', 'Mülkiyet türü.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT', "From this dropdown please choose your type of property. It can be something like a villa or an apartment if you're renting out the entire property, or if you're renting out rooms in the property then you would probably choose hotel or bed and breakfast.");

if (isset($MiniComponents->registeredClasses['00001jintour_start'])) {
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE', 'Yönetim süreci.');
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT', "The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you want to offer tours/finite resource booking (for example skis) that are booked on the same booking form, then you would still choose this option. If you're offering tours/finite rooms only without rooms then choose the Tours option. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate.");
} else {
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE', 'Yönetim süreci.');
    jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT', 'The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate.');
}

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE', 'Mülkiyet oluşturma adımı 2.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT', "You can now start entering information about your property. Don't worry about images for now, you can upload them later through Settings -> Media Centre.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE', 'MRP or SRP.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT', "Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property. If it's an SRP you'll be given a new dropdown where you can select the number of rooms the property offers. You will need to choose one of those options.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE', 'İşletme adı ve adresi.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT', 'Lütfen aşağıdaki alanlara mülkiyet adı ve adresi girin.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE', 'Yıldız sayısı.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT', 'If your property has been awarded a number of stars based on a recognised standard, select the number from the dropdown. Some countries have rating by a single public standard — Belgium, Denmark, Greece, Italy, Malta, Netherlands, Portugal, Spain and Hungary have laws defining the hotel rating. In Germany, Austria and Switzerland, the rating is defined by the respective hotel industry association using a five-star system — the German classifications are Tourist (*), Standard (**), Comfort (***), First Class (****) and Luxury (*****), with the mark Superior to flag extras beyond the minimum defined in the standard.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE', 'Konum eşleme.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT', "On your property details page you will see a map. You configure your property's location here using either the latitude and longitude inputs or by dragging and dropping the marker in the map itself.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE', 'Mülkiyet özellikleri.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT', "Select the features that are applicable to your property. These features are used in the site's search functionality, so it's important that these accurately reflect your property.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE', 'Mülkiyet ile ilgili bilgiler.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT', 'You have a number of fields here where you can enter informaton about your property. The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here.');

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE', 'Politikalar ve Yasal Uyarılar.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT', "This is where you should put your properties policies, such as cancellation charges etc. When the guest goes through the booking form, before they can complete the booking they are forced to accept your terms and have the option to click a link which will show the property's terms. When they click that link, the information entered into this input is shown in a small window.");

jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE', 'Tüm rezervasyon listesi.');
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT', 'On this page you will see all bookings, regardless of whether or not a deposit has been paid. Click the Edit icon to the left of the booking to view the booking details page.');

jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE', 'Yeni rezervasyon listesi.');
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT', "This page shows a list of all new bookings, that is, booking where a deposit hasn't yet been paid for the booking. Click the Edit icon to the left of the booking to view the booking details page.");

jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE', 'Eski rezervasyonlar.');
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT', "This page lists all historic bookings, that is, bookings that have either been cancelled or the guest has been booked out. Click the Edit icon to the left of the booking to see that booking's information.");

jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE', 'Konuk listesi.');
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT', 'The page allows you to list all guests for your currently active property. By default only guests who are or will be guests are listed, however you can choose historic guests from a dropdown to include guests who have been booked out or have cancelled their bookings as well as current guests.');

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE', 'Geçersiz kılar.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT', "The overrides here are only available to managers of the property, guests cannot see or use them. They allow you to override both the final room price of the booking (optional extras are not included in this override, they're still charged at full price) and the value of the deposit required.");

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE', 'Kupon.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT', 'If you have created some coupon codes for this property, this input will be available and guests can enter the coupon codes here to get discounts on the value of their room booking.');

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE', 'Ayrıntılar.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT', 'Changing any of these options will cause the rooms list to change, because the list is re-evaluated based on the length of the booking and other variables. If you have created some guest types, then the booker will be able to change the number of guests for the booking here too.');

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE', 'Oda özellikleri filtrele.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT', "If you have configured the property to use the Classic Rooms list, guests can choose the specific room that they'd like to book, rather than simply a room of a certain type. This is more popular with up-market properties. The rooms list has clickable images which when clicked will popup more information about that individual room. An additional bonus of this layout is that if you have created some room features and marked a room as having a certain feature, then the booker can use the room features to filter through the available rooms to ensure that they're getting exactly what they want. Note, you can modify the number of rooms of each type that are shown in the room list through the Settings -> Property Configuration -> Booking rooms tab, by changing the Available rooms/tariff limit option. This will then show a smaller list of rooms to the guest, but as a property manager you will still see the full list of rooms.");

if (isset($MiniComponents->registeredClasses['00001jintour_start'])) {
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE', 'İsteğe bağlı ekstralar.');
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT', "You can create two types of optional extras which will show here. The first type is a basic optional extra, which can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite rooms. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer. The other type of extra is configured from the Tour/Activity Profiles Management menu option under Settings, and is used to create items with finite rooms. Typically this is used for things like local tours to museums and other sites. In short, any kind of resource where there's only a few spaces available on a given date.");
} else {
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE', 'İsteğe bağlı ekstralar.');
    jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT', "You can create optional extras which will show here. They can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite rooms. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer.");
}

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE', 'Mevcut misafirler.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT', "If you already have some guests entered you can choose them by selecting their name in a dropdown that appears here. This saves you having to add their details time and again. If you regularly make bookings on behalf of the same guests, you should always use this dropdown to select them otherwise you'll end up creating multiple guests with the same names if you enter their details manually every time.");

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE', 'Konuk detayları.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT', 'Eğer bir konuk tarafından doldurulması gerekli alanları değiştirmek isterseniz, Ayarları gidebilirsiniz -> Mülkiyet Yapılandırma -> Gerekli sekme');

jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE', 'Siyah rezervasyonlar.');
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT', "Black bookings are booking that have been made by the hotel but not always for a specific guest. They may be because the hotel is on it's annual holiday, or because a room is closed for refurbishment.");

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE', 'Mülkiyet hakkında bilgi');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT', 'The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here.');

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE', 'Normal mod tarifeleri.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT', "This is the simplest way you can enter room prices. Choose the number of rooms of a given type, the price for the rooms, the number of guests that the room can accommodate and the total number of people you are prepared to entertain in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage.");

jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE', 'Normal mod tarifeleri.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT', "This is the simplest way you can enter room prices. Choose your property type, enter the price and the maximum number of people in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage.");

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE', 'Oda ve Tarifeler.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT', "On this page you can edit Rooms, Tariffs and Room Features. There are three tabs which allow you to edit the individual items. Before you start editing rooms or tariffs, you will need to understand that there is a relationship between Rooms, Room Types and Tariffs. In the booking form, when you see a room type dropdown or a click button to select a room, what's happening is that you are actually selecting a combination of room and tariff. This approach allows you to create different tariffs for the same room/room types, so for example you can create one tariff for Bed and Breakfast, and a second tariff for Bed, Breakfast + evening meal. Rooms can have individual room features. If your rooms list is set to Classic, then your guests can use the Room Features to filter rooms in the booking form to find a room with a particular set of characteristics that they want.");

jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE', 'Oda ve Tarifeler.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT', 'Bu sayfada mülkiyet tipi ve tarifeler düzenlenir.');

jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE', 'Konuk türleri.');
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT', "Guest types are an important part of your settings if you plan to charge per person per night, or simply because you need to know how many people you will be accommodating. You can create any guest type you like, for example Adults, Teenagers and Children. Guest types can be configured to cost more or less than the base rate (the rate you enter into the tariffs page) by either a flat rate, or a percentage. That way you can configure different prices for different types of guests. If you're not charging Per Person Per Night, then you can leave the settings to their defaults when you create the guest type.");

jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE', 'Kupon.');
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT', "Coupon codes are a useful method of building repeat business, or to pull in new custom. When you create a new coupon code, the system will automatically generate a random code for you, but you don't need to use that if you want, you can create your own code. When you create the coupon code, you can either assign it to a guest, or not. Codes that are not assigned to specific guests can be used by anybody, so those codes should be used on marketing materials. You can also define the dates between when the code should be used, and the dates that the booking must be on for the code to take effect. Once a coupon code has been created you will have the option to view a printable list of coupon codes, making it easy to hand codes out to guests or potential guests. They can then scan the QR code on the printout into their mobile phone/tablet PC. The code will take them direct to the booking form with the discount code already applied.");

jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE', 'İsteğe bağlı ekstralar.');
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT', "Optional extras are extra items that can be added to a booking. These are items that not constrained by limited availability, so there's no resource management associated with them. When you create an optional extra you are able to choose a variety of settings, for example the maximum number of them that can be added to a booking, and whether or not the extra should be Forced. By this, we mean if it's automatically selected in the booking form, and the guest cannot unselect it. This is useful for mandatory payments like towels or a cleaning fee. Additionally, you will need to choose a Model, which means how payments will be calculated for the extra. If you want a single charge to be applied (for example, for a bottle of champagne to be available on arrival) then you would set the model to Per Booking. If, however you wanted to charge for something for each day, then you would choose the Per Day option.");

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE', 'Oda seçici.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT', "This is the resource picker. It allows you to choose what sort of resource you're uploading images for (e.g. Slideshow images or rooms) and if it's a room, then after you choose Rooms you'll be given the option to select which room you want to upload images for in another dropdown, next to it. This allows you to upload multiple images for each individual room, if you wish. Note, room image uploading only applies to properties like Hotels, B&Bs etc. Villas and Apartments will not have this option.");

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE', 'Varolan resimler.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT', 'This column shows the images that have already been uploaded. You can choose then to either view the image, or delete it. Every time you change the resource time this column is updated to show the images for that particular resource.');

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE', 'Yükleme kontrolleri.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT', "You have several controls here. You can use the Add Images button to choose the images you want to upload, or you can drag and drop images into the box underneath. The Clear button clears the list of images ready for uploading. Once you've selected the images for upload, you can either upload them individually, or all at once.");

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE', 'Seçilen resimler.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT', "This column shows the images that are ready for upload, or that you've uploaded since you visited this page. ");

jr_define('TOUR_ID_TOUR_TARGET_END_TITLE', 'Bitmiş!');
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT', "That's the end of this page's help information. If you have any futher questions, please do not hesitate to contact us. ");

jr_define('PRODUCT_TOUR_PAGE_INFORMATION', 'YARDIM');

//8.0
jr_define('COMMON_PREV', 'Önceki');
jr_define('COMMON_MORE', 'Daha');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Bugün');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Yıl');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Ay');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Hafta');
jr_define('_JOMRES_DASHBOARD_DAY', 'Gün');
jr_define('_JOMRES_HLEGEND', 'Efsane');
jr_define('_JOMRES_HFILTER', 'Filtre');
jr_define('_JOMRES_HFROM', 'Gelen');
jr_define('_JOMRES_HTO', 'İçin');
jr_define('_JOMRES_HNEW_BOOKING', 'Yeni Rezervasyon');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Mevduat durumu');
jr_define('_JOMRES_HSTATUS_GUEST', 'Misafir durumu');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Rezervasyon durumu');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Yayıncılık durumu');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Fatura durumu');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Fatura tipi');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Onaylı');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Güncel iş');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Rezervasyonları göster');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Faturaları göster');
jr_define('_JOMRES_STATUS_ANY', 'Herhangi');
jr_define('_JOMRES_STATUS_PAID', 'Ödenmiş');
jr_define('_JOMRES_STATUS_NOTPAID', 'Ödenmemiş');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Kontrol edildi');
jr_define('_JOMRES_STATUS_ACTIVE', 'Aktif');
jr_define('_JOMRES_STATUS_CANCELLED', 'İptal edildi');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Yayınlandı');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Yayınlanmadı');
jr_define('_JOMRES_STATUS_PROVISIONAL', 'Geçici rezervasyon');
jr_define('_JOMRES_STATUS_CONFIRMED', 'Onaylanmış rezervasyon');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Aktif rezervasyonlar ile konuklar');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Geçmiş rezervasyonlar ile konuklar');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Rezervasyonlar');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Abonelikler');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Komisyonlar');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Tüm işletmeler');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Geçerli olarak ayarla');
jr_define('_JOMRES_ACTION_CHECKIN', 'Giriş yapmak');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Çıkış yapmak');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'Rezervasyonlar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'Mülkiyetler');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'Konuklar');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'raporlar');
jr_define('_JOMRES_HLIST_GUESTS', 'Konuklar');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Konuk listesi');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Fatura listesi');
jr_define('_JOMRES_HLIST_PROPERTIES', 'İşletmeler');
jr_define('_JOMRES_HQUICK_BOOKING', 'Hızlı rezervasyon');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Rezervasyon tarih');
jr_define('_JOMRES_HTWO_WEEKS', 'İki hafta');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Bu rezervasyon iptal edilecektir. TAMAM tuşuna basın rezervasyon iptal.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Bugün giriş yapanlar');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Bugün çıkış yapanlar');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Geçerli sakinleri');

jr_define('_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB', 'Gezinti çubuğu ayarları');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Gezinti çubuğu konumu');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Varsayılan (içerik alanı)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Üst sabit');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Alta sabit');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Ters gezinti çubuğu (renk değişimi)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Rezervasyon numarası');

jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2.');

jr_define('_ JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Konukları göster');
jr_define('_ JOMRES_HFIXED_PERIODS', 'Sabit süreler');
jr_define('_ JOMRES_HDEPOSITS', 'Mevduat');
jr_define('_ JOMRES_HBOOKING_FORM', 'Rezervasyon formu');
jr_define('_ JOMRES_HREQUIRED_FIELDS', 'Gerekli alanlar');

jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'Sokak');
jr_define('COMMON_PLACEHOLDER_TOWN', 'Şehir');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'Otelim');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'örnek@address.com');

jr_define('EXTENDED_CONFIGURATION', 'Genişletilmiş Yapılandırma');
jr_define('SIMPLE_CONFIGURATION', 'Basit Yapılandırma');

jr_define('_JOMRES_HRESOURCE_FEATURES', 'Oda özellikleri');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Oda tipleri');
jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Konuk tipi düzenleme');
jr_define('_JOMRES_HEDIT_COUPON', 'Kupon düzenleme');
jr_define('_JOMRES_HEDIT_EXTRA', 'Ekstra düzenleme');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Birden fazla oda oluşturun');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Oda oluşturmak');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Kaç oda?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Oda tipi');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Oda başına maksimum konuk');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Varolan tüm odalar silmek istiyor musunuz?');

jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');

jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE', 'Rezervasyon yapılandırma');
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT', 'On this tab you can configure the look and feel of the booking form.');

jr_define('TOUR_ID_TAB_BOOKINGS_TITLE', 'Rezervasyon.');
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT', 'This tab allows you to modify how bookings are treated, plus various other settings.');

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE', 'Konuk düzenleme.');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT', "Here you can edit a guest's address details. Please note that any changes you make here will only be reflected in this record. If the guest has made bookings on other properties, these changes will not appear on those other properties.");

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE', 'KDV.');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT', "If a VAT number is entered here then it will be shown on the guest's invoice.");

jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE', 'İndirim.');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT', 'You can choose to give this guest an automatic discount which will be applied whenever they make a booking.');

jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');

jr_define('_ JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Onay');
jr_define('_ JOMRES_BOOKING_REJECT_INQUIRY', 'Rezervasyon soruşturma reddet');
jr_define('_ JOMRES_BOOKING_APPROVE_INQUIRY', 'Rezervasyon soruşturma onaylama');
jr_define('_ JOMRES_STATUS_APPROVED', 'Onaylandı');
jr_define('_ JOMRES_STATUS_REJECTED', 'Reddedildi');
jr_define('_ JOMRES_STATUS_INQUIRY', 'Sorgulama');

jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Rezervasyon onayı veya kullanılabilirlik onayı gerektirir?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.');

jr_define('_JOMRES_ERROR', 'Hata');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occured while trying to process this function. It has been reported for you and we will look into it.');

jr_define('_ JOMRES_ERROR_DEBUGGING_MESSAGE', 'Mesaj');
jr_define('_ JOMRES_ERROR_DEBUGGING_FILE', 'Dosya');
jr_define('_ JOMRES_ERROR_DEBUGGING_LINE', 'Çizgi');
jr_define('_ JOMRES_ERROR_DEBUGGING_TRACE', 'İz');

jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E-posta şablonları');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'E-posta şablon düzenleme');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'E-posta konusu');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'E-posta metni');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'E-posta türü');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'E-posta adı');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'E-posta açıklaması');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin Yeni Kitap E-posta');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Yeni bir rezervasyon yapıldığında e-posta mülk sahibine gönderildi');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Guest New Booking Email');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Yeni bir rezervasyon yapıldığında e-posta konuğa gönderildi');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Konuk Onay Mektubu.');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Bir rezervasyon onaylamak için mülk sahibi tarafından elle gönderilebilir,yazdırılabilir mektup veya e-posta');

jr_define('_JOMRES_CAN_BE_APPROVED', 'Bu rezervasyon kabul edilebilir. Seçilen tüm odalarda seçilen tarihler için kullanılabilir.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'This booking can`t be approved because some of the rooms are already booked for the selected dates. You`ll need to amend the booking first.');

jr_define('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');

jr_define('GUEST_BUDGET', 'Bütçe');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Bütçe kullanım özelliği?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");

jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Ad: ');

jr_define('_JOMRES_FOR', 'İçin');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'Gece');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'Geceler');
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY', 'Fiyat bindirgesini göster');
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY_DESC', 'In the property list it is possible to show a cumulative price over the property image, use this setting to switch that display off. The cumulative price is calculated from the dates entered in the ajax search composite plugin.');

jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');

jr_define('_JOMRES_ONLINE_PARTNERS', 'Ortaklar');

jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Ocak ');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Şubat');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mart');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Nisan');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'Mayıs');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Haziran');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Temmuz');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Ağustos');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Eylül');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Ekim');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Kasım');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Aralık');

jr_define('DATATABLES_SEMPTYTABLE', 'Tabloda veri yok');
jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');
jr_define('DATATABLES_SINFOEMPTY', 'Showing 0 to 0 of 0 entries');
jr_define('DATATABLES_SINFOFILTERED', '(filtered from _MAX_ total entries)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'Show _MENU_ entries');
jr_define('DATATABLES_SLOADINGRECORDS', 'Yükleniyor...');
jr_define('DATATABLES_SPROCESSING', 'İşleme...');
jr_define('DATATABLES_SSEARCH', 'Arama:');
jr_define('DATATABLES_SZERORECORDS', 'No matching records found');
jr_define('DATATABLES_SFIRST', 'İlk');
jr_define('DATATABLES_SLAST', 'Son');
jr_define('DATATABLES_SNEXT', 'Sonraki');
jr_define('DATATABLES_SPREVIOUS', 'Önceki');
jr_define('DATATABLES_SSORTASCENDING', ': activate to sort column ascending');
jr_define('DATATABLES_SSORTDESCENDING', ': activate to sort column descending');

jr_define('DATATABLES_SHOWHIDE', 'Değişim sütunları');

jr_define('_BOOKING_ONREQUEST', 'Talep üzerine rezervasyon');
jr_define('_BOOKING_INSTANT', 'Anında rezervasyon');

jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');

jr_define('_BOOKING_CALCQUOTE', 'Rezervasyon talebi');

jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Sayın ');

jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Bir site seçin');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');

jr_define('_JOMRES_IS_EU_COUNTRY', 'AB Ülke?');

jr_define('_JOMRES_WORD_CACHING', 'Önbelleğe alma');

jr_define('_JOMRES_WORD_PATTEMPLATE_CACHING', 'patTemplates önbellekleme kullanılsın mı?');

jr_define('_JOMRES_HLASTCHANGED', 'Dün değişti');

jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel Booking Cancellation Email');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Yeni bir rezervasyon iptal edildiğinde e-posta mülk sahibine gönderilir');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Booking Cancellation Email');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Yeni bir rezervasyon iptal edildiğinde e-posta konuk gönderilir');

jr_define('_JOMRES_TEST_EMAIL_SEND', 'Test e-posta gönder');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test e-posta');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'Bu test e-posta rezervasyon sisteminden');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test e-posta başarıyla gönderildi');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test e-posta gönderilmedi');

jr_define('_INVOICE_TRANSACTIONS', 'İşlemler');

jr_define('_OPENEXCHANGE_API', 'Açık Döviz Kurları API anahtarı');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');

jr_define('_JOMRES_COMMISSION', 'Komisyon');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Şimdi öde');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'This invoice in now due. Please click the button to select the payment method.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Here's a list of some of the great things you can purchase while making a booking at this property. ");

jr_define('_ASSIGN_COMMISSION_RATES', 'Komisyon oranlarını atama');

jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'İşletme bilgilerini sayfasında göster?');

jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Mülkiyet Bilgileri sayfası ayarları');

jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');

jr_define('PROPERTY_STATS_SALES', 'Satış');
jr_define('PROPERTY_STATS_SALES_DESC', 'Rezervasyonlar alındı.');

jr_define('PROPERTY_STATS_BOOKINGS_DAYS', 'Rezervasyonlar (Günler)');
jr_define('PROPERTY_STATS_BOOKINGS_DAYS_DESC', 'Booking dates start and number of days.');

jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS', 'Rezervasyonlar (Odalar x Günler)');
jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS_DESC', 'Number of rooms booked out in a certain month.');

jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Oda özellik simgeleri');

jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Category');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.');

jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'İade Geri Al');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Geri ödeme');

jr_define('_JOMRES_STATUS_UNISSUED', 'Verilmemiş');

jr_define('DEFAULT_TERMS_AND_CONDITIONS', 'These Terms and Conditions clarify The Owner\'s obligations to The Renter, The Renter\'s obligations to The Owner, and in the very unlikely event of any disputes, will be used as the basis for any resolution. Please read them carefully before confirming your booking.

Check-In: From [Time] / Check-Out: By [Time] (High Season Weekly Rentals)

For Low Season Weekend and Mid-Week Rentals an earlier Check-In and later Check-out may be possible (usually In from [Time] and out by [Time])

Acceptance of these Terms & Conditions binds a contract between the following two parties:

The Rental Applicant (The Renter) and The Property Owner (The Owner)

 

 1. Party Members

All persons listed on the Rental Agreement or added subsequently by The Renter will be bound by the terms of this agreement. Occupancy of the property is restricted to those names listed on the Agreement or added subsequently by The Renter.   The Rental Applicant is considered to be the Lead Renter and will assume full responsibility for all members of the Rental Group throughout the rental period.   Information or instructions relating to this rental will be communicated to the Rental Applicant only and not to any third-party member of the Rental Group.

2. Payments

A Reservation will be confirmed by The Owner once the application has been approved and initial or full payment has been processed.   For reservations of one week or more, if the reservation is made 45 days or more before the rental commences, an initial rental deposit payment of [X%] of the rental fee will be due at the time of booking. If a reservation is made less than 45 days before the rental commences, or the reservation is less than a full week’s duration, the full rental fee must be paid at the time of booking. In the event of a reservation not being accepted by The Owner, all fees paid will be refunded immediately. Any booking made within 10 days of the start of the rental period must be paid in full by credit card via PayPal, certified check or money order at the time of booking. No reservation may commence without full payment being cleared.

Once a reservation is received and accepted by The Owner, The Renter is liable for payment of the balance of the rental fee 45 days before occupation of the property. Non-payment by the due date will be treated as a cancellation and the deposit will be forfeited.


3. Cancellation Policy & Changing a Booking

Once a reservation has been accepted and confirmed, a cancellation can only be made in accordance with the terms below:

- If the period of rental can be re-booked, a refund for the period re-rented or the part thereof, less a cancellation fee of [Amount]  will be issued.

- If any part of the rental period cannot be re-booked, the Renter will forfeit all monies paid for that period.

 4. Occupancy of the Property

Regardless of the published maximum number of persons a property can accomodate, the number of guests occupying the Property is strictly limited to those named on the Rental Agreement or any subsequent amendment notified in writing to The Owner. The stated and agreed occupancy figure includes all persons irrespective of age, day and overnight guests.

Exceeding the number of stated and agreed persons will result in immediate eviction without refund, or a $100 per guest per night charge at the discretion of The Owner.

 5. Condition of the Property

The Property will have been inspected prior to occupation and therefore The Renter undertakes to:

- Notify The Owner immediately with regard to any damage and/or maintenance issues that require attention.

- Keep the Property and all furniture, fixtures, fittings, chattels and effects in or about the Property in the same state of repair and condition as found at the commencement of the Rental.

 

- Where a cleaning service is provided; The Renter shall follow the departure instructions provided by The Owner.

- Where a cleaning service is not provided; The Renter shall leave the Property in the same state of cleanliness and general order in which it was found. Failure to do so to the satisfaction of The Owner will result in a damage/cleaning charge being levied.

6. Use of Telephone and Internet Services

Where a telephone is provided as part of the rental, The Renter must charge all long-distance telephone calls to either a credit/phone card or call collect, unless advised otherwise. Where internet services are provided, there may be download restrictions and a charge may be levied if these are exceeded. It is The Renter\'s responsibility to check for restrictions on an internet device before commencing any download.

 7. Pets

One dog is permitted [indicate any restrictions]. All evidence of pet occupation must be removed from the Property and grounds at the end of the rental period. Pets are not permitted on any item of furniture, including beds, and evidence of pet hair on furniture and bedding may incur additional cleaning charges.

OR

Pets are strictly prohibited at this property. Any evidence of pet occupation will result in a forfeit of the damage deposit in its entirety.

The Owner accepts no responsibility for any allergic reaction or other conditions arising from occupancy of the property. The designation of “No Pets” does not indicate there have not been pets at the property at some time.

8. Smoking

Smoking is not permitted in or around the immediate vicinity of the property.

9. Property  Access During Winter Months

The Property is  offered for rental during the winter months and has road access and receives a snow clearance service from [indicate municipal or private contractor]. However, Renters are advised that following any major snowfall, snow plough providers are contracted to clear local roads in a predetermined order. Consequently, plowing at a property may be delayed for several hours or, in severe storm conditions, days. In the unlikely event that a Renter is unable to leave a property on the planned departure date, the Renter will not be liable for any additional accommodation charges. Conversely, should a lack of snow clearance prevent a Renter from reaching a property, the Renter will receive a refund of the rental fee for the day(s) the property was inaccessible. However, The Owner will be held responsible for any losses, additional expenses or penalties incurred as a result of being unable to arrive at or leave a property on time due to a lack of snow clearance. Renters are also reminded to ensure that they and their vehicles are suitably prepared and equipped for driving in the wintry conditions likely to be encountered during their visit to the Property.

10.   Equipment and Facilities Provided

Equipment and facilities are provided at the discretion of The Owner and whilst every attempt is made to ensure that such equipment is in working order for the duration of the rental period, should a breakdown or some other situation occur that renders non-essential element unusable, the Owner does not take responsibility for replacing or refunding The Renter for the lack of use of these equipment or facilities. The equipment and facilities referred to include (but are not exclusive to) such items as watercraft, motors, televisions, VCRs/DVDs, hot tubs, saunas and Jacuzzis.

 

The Renter must report any inoperative or defective equipment to The Owner promptly! The Owner will make every reasonable effort to have repairs made as soon as possible; however, there are limited service contractors in [Your Area]. While every attempt will be made to ensure that all the advertised equipment and appliances are in working order at the commencement of a rental period, no reduction of rent; rebate; or refund will be issued for a mechanical failure of air conditioning, dishwasher, washer, dryer, TV or other appliances.

 11.   Refunds

If a breakdown should occur to fundamental elements such as water systems, plumbing and electrical systems, and major appliances such as stove or refrigerator, every effort will be made to repair or replace, or an appropriate refund will be made for the inconvenience caused. This does not apply to system breakdown caused by misuse, such as plumbing blockages caused by inappropriate use of sanitary facilities.

The Owner is not liable, nor will provide a refund, for any stoppage of electrical services caused by extreme weather or other circumstances beyond his control.   Similarly, there will be no refunds for inclement weather, changes in water levels, conditions at neighboring properties, or any nuisance afforded by the natural elements of the location such as flying insects or the animal population.

12. Other Conditions of Booking

The Renter shall abide by these Terms and Conditions of Rental and any other instructions contained in the individual Cottage Guide and any additional information and instructions as shall be supplied in the Property or by The Owner.

 

LIMITATIONS OF LIABILITY: The Renter represents, warrants, acknowledges and agrees with The Owner that he/she will use the Property and its facilities in accordance with The Terms and Conditions above and the Information provided and that he/she does so at his/her own risk and that he/she indemnifies and saves The Owner harmless from any personal injury, sickness or death, loss or damage, however caused, to person or property of The Renter, his/her family, or guests, before during or after the time of occupancy. Further, he/she accepts full responsibility for the use of the Property and any recreational equipment such as boats and motors, etc. and agree to pay for any damage of said equipment, other than for normal wear and tear. The Renter further acknowledges he/she is responsible for ensuring all Boating Regulations are observed, including having required safety equipment in the watercraft, as well as meeting current Operator Competency Requirements.

');

jr_define('_JOMRES_NUMBER_OF_BEDROOMS', 'Yatak odası');

jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');

jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Alt tür');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION', 'You must choose a sub-type before you can create tariffs for this property.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Mülkünüze bir alt tür ver');

jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E-posta şablonları');

jr_define('_JOMRES_CONTACT_SETTINGS', 'İletişim ayarları');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');

jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Rezervasyon inceleme isteği');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Rezervasyon isteğinizi onaylayın');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Rezervasyon değişiklik isteği');

jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Fatura beklemede');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Fatura beklemede olarak işaretlenmiş');

jr_define('_JOMRES_TRACKING_ENABLE', 'Anonim izleme veri göndermek?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.');

jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', 'Konuk iletişim bilgileri');
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- Yeni Konuk -- ');

jr_define('_JOMRES_CHARTS', 'Grafikler');
jr_define('_JOMRES_CHARTS_SELECT', 'Grafiği seçin...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Yıllık/aylık gelir');

jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', 'Tamam, hadi başlayalım. Öncelikle bu mülkiyet için bazı odalar oluşturmanız gerekir.');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Şimdi bazı odaları oluşturun');

jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload an image');

jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Bazı tarifeleri oluşturun');

jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Oda özellikleri');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Tüm mülkiyetler');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_NEITHER', 'Diğer (Turlar/Mülk)');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Her ikisi de'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');

jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Adresinizi güncelle');

jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');

jr_define('_JOMRES_MANAGER_HAS_NO_PROPERTIES', 'Error, this user is configured as a manager but has not been assigned to any properties');

jr_define('_JOMRES_CONTANT_US', 'Bize ulaşın');

jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Yeni online liste için hoşgeldiniz ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Merhaba, yeni evinize hoş geldiniz ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', 'Son zamanlarda sitemize yeni bir özellik eklendi, ve aileye hoş geldiniz demek istiyoruz.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Yeni panoyu görebilirsiniz ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' Burada ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Once you've setup your property you can see how it looks to site visitors by visiting ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' Ön sayfa.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(it's not published, so site visitors can't see it yet).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'If you have any questions at all, please ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'Bize ulaşın');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "and we'll be delighted to answer all your questions.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'En iyiler ekibimizde ');

jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', 'Hadi biraz turlar oluşturun!');

jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Takas para birimi simgesi konumu');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');

jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebooking.com or anything else.');

jr_define('COMMON_DOWNLOAD', 'İndir');

jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Sonraki bazı tarifeleri eklemeniz gerekir. Bunların temel fiyatları.');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV_SRP', 'Property sub-type');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO_SRP', 'Property sub-type');

jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap etkin değil!');

jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');

jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS_PLUGIN_MANAGER', 'Your license does not support plugin downloads.');

jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Rezervasyonları iptal etmek için bu alana sürükleyin');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');

jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] ) otherwise you will not be able to access Jomres from the site frontend to manage your properties and bookings.');

jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");

jr_define('_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES', 'This room type will be used for properties where guests will book...');
jr_define('_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC', 'Is the room type for a hotel type property, or a villa type property?');

jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Yeni oda tipleri eklemek için tıklayın');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Yeni oda türleri oluşturmak için yukarıdaki yeni düğmesini kullanın.');

jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Turlar');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Hiçbir rezervasyon / Emlak (basit listeleme)');

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
