<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'Dies ist die Startseite der Eigenschaft cpanel.');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'Dies ist das Eigenschaftsbanddiagramm, das einen Überblick über Echtzeitbuchungen, Verfügbarkeit und Belegung auf einen Blick bietet.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'Dieses Skript ermöglicht dem Benutzer, mehrere Eigenschaften miteinander zu vergleichen, bis zu maximal 3 Eigenschaften.');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Eine durch Kommas getrennte Liste von Eigenschafts-UIDs, zB 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Erstellt das Kontaktinhaberformular. ');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Übergeben Sie die Objekt-UID des Objekts, das kontaktiert werden soll. Übergeben Sie 0 (Null), um stattdessen den Site-Administrator zu kontaktieren. ');

jr_define ( '_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "wird die Info-Seite Details aus dem Immobilienmanager ist Ihre Firmendaten Feld in Eigenschaftskonfiguration. Die Angaben in diesem Register ziehen würden in der Regel für correspondance verwendet werden, so dass Manager Adresse sowohl die Hotel / Apartment haben, und eine separate Adresse für geschäftliche Zwecke.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID der Unterkunft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Zeigt den Kalender der Unterkunft");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Übergeben Sie die Eigenschafts-UID der anzuzeigenden Eigenschaft. ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Anzuzeigende Monate, Standard ist 24, wenn nicht anders eingestellt. Nicht kompatibel mit der Variablen Show Just Month.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Setzen Sie dies auf 1, wenn Sie nur den aktuellen Monat allein anzeigen möchten. Die Einstellung month_to_show wird ignoriert, wenn show_just_month im selben Shortcode verwendet wird, also sollten Sie nicht beides oder das zur selben Zeit.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Zeigt nur den Text der Objektbeschreibung.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Zeigt nur den Text der Objektbeschreibung.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Zeigt nur die Eigenschaften der Eigenschaft.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Zeigt nur die Property-Header-Vorlage.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Zeigt nur die Zimmertypen der Unterkunft.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Zeigt nur das Hauptbild der Eigenschaft.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Zeigt nur die Grundstückskarte.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Zeigt den Mehr Info-Text der Eigenschaft.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR-Code, der auf Google Maps verlinkt. Dieser kann mit einer QR-Code-Lese-App, die eine Wegbeschreibung zur Unterkunft bereitstellt, in ein Telefon gescannt werden.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Zeigt die Bewertungen einer Unterkunft an.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Zeigt die Zusammenfassung der Bewertung einer Unterkunft an.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Zeigt einen einzelnen Raum.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID des Raums.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Zeigt die Zimmer einer Unterkunft an.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Zeigt die Zimmerbilder einer Unterkunft als Diashow.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID der Eigenschaft.');
    
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Zeigt die Eigenschaften-Diashow.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Zeigt die Immobilientarife.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Zeigt die Geschäftsadresse der Site, wie sie in Site-Konfiguration > Ihre Firmendetails eingegeben wurde.");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'Zeigt die Allgemeinen Geschäftsbedingungen der Unterkunft.');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID der Eigenschaft.');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Zeigt den UI-Kalender der Unterkunft an, der ein anderer Kalender als der große Hauptkalender ist und auf der Jquery-UI-Kalenderfunktionalität basiert.");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Übergeben Sie die Eigenschafts-UID der anzuzeigenden Eigenschaft. ');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Setzen Sie dies auf 1, um die Legende nicht anzuzeigen.');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Zeigt die Suchergebnisse, die durch das Hinzufügen von Suchparametern erweitert werden können. Wir empfehlen nicht, alle Parameter gleichzeitig zu verwenden, da die Suchkriterien am Ende zu eingeschränkt sind. Stattdessen sollten Sie sich auf nur ein oder zwei Parameter beschränken, zB Suche nach Land und Anzahl der Sterne.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Suche nach Land mit dem ISO Alpha-2-Code, zB GB oder DE.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Suche nach Region. Da Regionen in der Datenbank gespeichert werden, müssen Sie die Regions-ID verwenden. Besuchen Sie Administrator > Jomres > Site-Struktur > Regionen auflisten und bewegen Sie den Mauszeiger über den Bearbeiten-Link, dort sehen Sie die ID-Nummer der Region .");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Der vollständige Name der Stadt, nach der Sie suchen möchten.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Suche nach Immobilien mit bestimmten Funktionen. Feature-IDs finden Sie unter Administrator > Jomres > Site Structure > Property Features.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Nach Immobilien mit bestimmten Zimmertypen suchen. Zimmertyp-IDs finden Sie unter Administrator > Jomres > Site-Struktur > Zimmertypen.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Suche nach Immobilien eines bestimmten Immobilientyps. Immobilientyp-IDs finden Sie unter Administrator > Jomres > Site-Struktur > Immobilientypen.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Suche nach Immobilien innerhalb einer bestimmten Preisspanne.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Suche nach Unterkünften, deren Tarife Gästezahlen mit bestimmten Werten erlauben, zum Beispiel Partys von 6.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Suche nach Eigenschaften von N Sternen.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Suche nach Ankunftsdatum. Sollte mit dem Parameter departureDate kombiniert werden.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Suche nach Abreisedatum. Sollte mit dem Parameter ArrivalDate kombiniert werden.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Suche nach Immobilienkategorie.');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Die Seite eines Agenten anzeigen. Sie können ENTWEDER eine Property-UID oder die ID des Agenten selbst übergeben, wenn Sie diese kennen.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Eine Property-UID, diese zeigt den Agenten der Property an.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Die Datenbank-ID des Managers, falls bekannt.");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Zeigt die beliebten Eigenschaften an, die normalerweise in Modul- oder Widget-Positionen verwendet werden.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Die maximale Anzahl von Eigenschaften, die angezeigt werden können.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Nur Eigenschaften dieser bestimmten Eigenschaftstypen anzeigen.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Auf 1 setzen, um die für eine vertikale Widget-/Modulposition optimierten Module anzuzeigen.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Zeigt eine zufällige Auswahl von Eigenschaften an, die normalerweise in Modul- oder Widget-Positionen verwendet werden.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Die maximale Anzahl von Eigenschaften, die angezeigt werden können.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Nur Eigenschaften dieser bestimmten Eigenschaftstypen anzeigen.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Auf 1 setzen, um die für eine vertikale Widget-/Modulposition optimierten Module anzuzeigen.');
    
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Zeigt die zuletzt angesehenen Eigenschaften des Gastes an, die normalerweise in Modul- oder Widget-Positionen verwendet werden.");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Die maximale Anzahl von Eigenschaften, die angezeigt werden können.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Auf 1 setzen, um die für eine vertikale Widget-/Modulposition optimierten Module anzuzeigen.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Zeigt eine Reihe von Eigenschaften an, die normalerweise in Modul- oder Widgetpositionen verwendet werden.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Die Eigenschafts-IDs der Eigenschaften, die Sie anzeigen möchten.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Auf 1 setzen, um die für eine vertikale Widget-/Modulposition optimierten Module anzuzeigen.');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Zeigt die Dropdown-Liste für die Währungsauswahl an.');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Aktivieren/Deaktivieren der alternativen Vorlagenausgabe. Diese Ausgabe ist für die Verwendung in Bootstrap-Symbolleisten vorgesehen.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Zeigt die Warenkorbseite an.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Zeigt das Einkaufswagen-Modul/-Widget an.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Zeigt das Hauptmenü an. Beachten Sie, wenn Sie eine angepasste Version von mainmenu_wrapper_alternate.html verwenden, z /i> mit MENU_LOCATION in geschweifte Klammern.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Auf dieser Seite können Sie Bilder für Ihre Unterkunft und die von Ihnen angebotenen Dinge hochladen. Sie hat eine Hauptschaltfläche und eine zweite Schaltfläche, mit der Sie bestimmte Ressourcen zum Hochladen von Bildern auswählen können. Also die Hauptimmobilie Bild und die Diashow zeigt nur eine Schaltfläche, aber wenn Sie zB optionale Extras oder Räume erstellt haben, dann sehen Sie eine zweite Schaltfläche, über die Sie Bilder für diese speziellen Ressourcen hochladen können.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Auf dieser Seite können Sie Bilder für Ihre Unterkunft und die von Ihnen angebotenen Dinge hochladen. Sie hat eine Hauptschaltfläche und eine zweite Schaltfläche, mit der Sie bestimmte Ressourcen zum Hochladen von Bildern auswählen können. Also die Hauptimmobilie Bild und die Diashow zeigen nur eine Schaltfläche, aber wenn Sie optionale Extras erstellt haben, sehen Sie eine zweite Schaltfläche, über die Sie Bilder für diese spezifischen Ressourcen hochladen können.');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>Wählen Sie zuerst die Bilder aus, die Sie hochladen möchten, indem Sie auf Bild hinzufügen klicken oder Drag & Drop verwenden. Diese erscheinen in der Spalte auf der rechten Seite.</li>
  <li>Wählen Sie über diesem Bereich mit der Schaltfläche \"Ressource auswählen\" aus, für welche Ressource Sie Bilder hochladen möchten. Möglicherweise wird Ihnen die Option angeboten, darunter eine bestimmte Ressource auszuwählen. </li>
  <li> Nachdem Sie eine Ressource ausgewählt haben, können Sie unter einem Bild auf die Schaltfläche Bild hochladen klicken, um es dieser Ressource zuzuordnen. Sobald ein Bild hochgeladen wurde, verschwindet es aus der Spalte auf der rechten Seite und erscheint auf der linken Seite.</li>
  <li>Verwenden Sie die Papierkorb-Schaltfläche neben vorhandenen Bildern, um Bilder zu entfernen, die nicht mehr angezeigt werden sollen.</li>
  <li>Sie können die Reihenfolge, in der Dateien in der Diashow angezeigt werden, ändern, indem Sie sie vor dem Hochladen umbenennen, da sie auf Seiten in alphabetischer Reihenfolge angezeigt werden.</li>
</ol>
 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', 'Neben der Schaltfläche "Ressource" sehen Sie möglicherweise eine Schaltfläche "Vorschau". Wenn Sie darauf klicken, sehen Sie ein Popup, das Ihnen zeigt, wie die aktuell hochgeladenen Bilder auf einer Seite aussehen Vorstellung davon, wie die Bilder für Ihre Kunden aussehen.');

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Die Anzahl der hochzuladenden Bilder ist unbegrenzt. Die Größe der Bilder wird beim Hochladen automatisch angepasst. Sie können nur JPG- und PNG-Dateien hochladen.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealerweise sind alle Bilder, die Sie hochladen, mindestens ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " Pixel breit, sonst können sie nach dem Hochladen unscharf aussehen.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Alle Bilder, die Sie hochladen, können nicht mehr als ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in der Größe.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Wählen Sie die Ressource, für die Sie Bilder hochladen möchten");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Spezifische Ressource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Bilder wurden bereits für diese Ressource hochgeladen");

jr_define('_JOMRES_MARKDOWN_TITLE', 'Textformatierung');
jr_define('_JOMRES_MARKDOWN_DESC', 'Sie können hier Text mit einfacher Markdown-Formatierung eingeben. Sie benötigen keine HTML-Kenntnisse, verwenden Sie einfach die Schaltflächen, um die Informationen wie gewünscht aussehen zu lassen, oder formatieren Sie den Text gemäß diesen Beispielen.' );
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Hervorhebung');
jr_define('_JOMRES_MARKDOWN_BOLD', 'fett');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'kursiv');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'Durchgestrichen');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Header");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Großer Header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Mittlere Kopfzeile");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Kleiner Header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Kleiner Header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Listen");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generischer Listeneintrag');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Nummerierter Listeneintrag');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text zum Anzeigen');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Zitate');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Dies ist ein Zitat.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Es kann mehrere Zeilen umfassen!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Bilder');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tabellen');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Spalte');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Eigenschaftsbilder als Diashow in der Eigenschaftsliste anzeigen?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Wenn auf yes gesetzt, wird eine Diashow der Hauptbilder der Immobilie angezeigt. Wenn auf no gesetzt, wird das erste Hauptbild der Immobilie angezeigt.');

jr_define('EDIT_CMS_USER', 'CMS-Benutzer bearbeiten');

jr_define('BOOKING_MADE_BY', 'Buchung erfolgt von');

jr_define('_JOMRES_ROUTER_FEATURES', 'Ausstattung');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Raumtypen');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL des externen Buchungsformulars');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Hier können Sie eine externe URL festlegen, wenn Sie eine Drittanbieter-Website für Buchungen verwenden möchten. Alle Buchungsschaltflächen von Jomres zeigen auf diese URL. Lassen Sie dieses Feld leer, wenn Sie das Buchungsformular von Jomres verwenden möchten .');

jr_define('_JOMRES_ROOM_TAGLINE', 'Slogan (kurze Raumbeschreibung/Untertitel)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Raumbeschreibung');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'Gast auf der schwarzen Liste');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Wenn dieser Gast auf der schwarzen Liste steht, kann er in dieser Unterkunft keine Buchungen mehr vornehmen.');
jr_define('_JOMRES_SESSION_HANDLER', 'Sitzungshandler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Jomres-Sitzungsdateien auf Festplatte oder Datenbank speichern. Empfohlen: Datenbank');
jr_define('_JOMRES_MAP_HEIGHT',"Kartenhöhe (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Kartenzoomstufe ");
jr_define('_JOMRES_MAP_MAPTYPE',"Kartentyp ");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Vorlagenüberschreibungs-Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Vorlagenpakete sind Plugins, die Überschreibungsvorlagen für verschiedene Jomres-Kernvorlagendateien bereitstellen können.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"Diese Seite listet alle Vorlagendateien auf, die von den Vorlagendateien eines Vorlagenpakets überschrieben werden können. Wenn Sie eine bestimmte Vorlagendatei überschreiben möchten, klicken Sie auf die Schaltfläche Bearbeiten für diese Datei. Auf der nächsten Seite werden Sie Sie können wählen, mit welcher Version Sie überschreiben möchten. Beachten Sie, dass diese Überschreibungen Vorrang vor Jomres Core und allen Wordpress- oder Joomla-Themen-/Vorlagenüberschreibungen haben. Sie können eine Überschreibung deaktivieren, indem Sie sie auf der Seite \"Vorlagenüberschreibungen auflisten\" löschen.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Vorlagenname");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Aktueller Pfad");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Nicht überschrieben");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"Sie können auswählen, welche Vorlagendatei die Kernvorlagendateien überschreiben soll, indem Sie die Dropdown-Liste ändern");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Prozentsatz der gebuchten Zimmer");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Zeigt das Formular zum Erstellen neuer Eigenschaften an.');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Kartenzoom, 1: Welt 5: Landmasse/Kontinent 10: Stadt 15: Straßen 20: Gebäude ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Anzahl der anzuzeigenden Bewertungen');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'Zeigt die Eigenschaften der Benutzer in der engeren Auswahl an. Wenn der Benutzer registriert ist, sind dies seine Favoriten, wenn er nicht eingeloggt ist, werden nur die Artikel während des Besuchs über das Favoritensymbol hinzugefügt.');

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Mindesteinzahlungswert');

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Wenn die berechnete Einzahlung geringer ist als dieser Wert, dann setze die Einzahlung stattdessen auf diesen Wert. Diese Zahl könnte selbst überschrieben werden, wenn sie die Mindesteinzahlungseinstellung der Site nicht erfüllt. Belassen Sie es auf 0 bis die Einstellung nicht verwenden." );

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Zeigt die DSGVO-konforme Einwilligungserklärung an.');

jr_define( '_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Liste der Zimmertypen der Unterkunft');
jr_define( '_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Zimmertyp einer Unterkunft anzeigen');

jr_define( '_JOMRES_SHORTCODE_LOGIN_FORM', 'Anmeldeformular anzeigen' );

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Zeige eine Liste von Zimmern eines bestimmten Zimmertyps');
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Raumtyp-ID');

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Zeigt eine Liste der syndizierten Eigenschaften');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Die Anzahl der anzuzeigenden syndizierten Eigenschaften');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Ob MRPs (Hotels/Bed & Breakfasts) oder SRPs (Cottages/Apartments/Villen) angezeigt werden sollen. Standard wird aus der aktuellen Unterkunfts-Uid bestimmt, dann wenn MRPs nicht verfügbar sind Um einen bestimmten Typ auszuwählen, setzen Sie diesen Wert auf 0 für srps oder 1 für mrps.');

