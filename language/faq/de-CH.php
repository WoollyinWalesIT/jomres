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

jr_define('_JOMRES_FAQ', 'Häufig gestellte Fragen');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Eigenschaften');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Wie erstelle ich eine Eigenschaft?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Klicken Sie auf Eigenschaften > Neue Eigenschaft, um eine neue Eigenschaft hinzuzufügen.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Wie kann ich sehen, wie meine Unterkunft für Gäste aussieht?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Klicken Sie auf Eigenschaften > Vorschau, um zu sehen, wie Ihre Unterkunft für Gäste aussieht.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Wie füge ich Räume hinzu?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Wie Sie Zimmer hinzufügen, hängt von Ihrem Tarifbearbeitungsmodus ab. Im normalen Tarifbearbeitungsmodus müssen Sie keine Zimmer hinzufügen, da diese automatisch hinzugefügt werden, wenn Sie Ihre Preise konfigurieren. Wenn Sie verwenden Micromanage- oder Advanced-Tarifbearbeitungsmodus, dann können Sie unter Einstellungen > Räume Räume hinzufügen, bearbeiten und löschen. Sie können auch Raumfunktionen erstellen und diese Funktionen diesen Räumen zuweisen. Außerdem können Sie Bilder für einzelne . hochladen Räume, die das Media Center verwenden. Wenn Sie Räume erstellen, sollten Sie sicherstellen, dass sie die realen Räume in Ihrem Gebäude widerspiegeln, da sie dadurch einfacher zu verwalten sind.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRIES', 'Wie lege ich Zimmerpreise fest?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Das hängt von Ihrem Tarifmodus bearbeiten. Wenn Sie den normalen Tarif Editiermodus verwenden (Eigenschaftskonfiguration> Tarif Bearbeitungsmodi Registerkarte), dann können Sie die Anzahl der Zimmer konfigurieren Sie haben, den Preis, die Anzahl der Personen, die jedes Zimmer beherbergen kann, und die Gesamtzahl der Personen, die Sie in jeder Buchung wünschen. In diesem Modus können Sie die Zimmerpreise für die nächsten 10 Jahre festlegen. <br/>Wenn Sie die Tarifbearbeitungsmodi Advanced oder Micromanage verwenden, dann sind Sie Sie können die Zimmerpreise für jeden Tag über Jahre hinweg festlegen.Sie können auch mehrere Tarife für denselben Zimmertyp haben, zum Beispiel können Sie einen Tarif für Bed & Breakfast und einen anderen für Bed, Breakfast & Dinner haben. Es sei denn, Sie haben einen bestimmten Bedarf , wir empfehlen Ihnen, Micromanage die ganze Zeit zu verwenden, Advanced funktioniert auf die gleiche Weise, aber Sie müssen darauf achten, dass die Start- und Enddaten Ihrer verschiedenen Tarife aufeinander folgen.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Wie erstelle ich optionale Extras?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extras können zu Buchungen hinzugefügt werden und werden in Einstellungen > Extras konfiguriert. Diese können entweder optional oder 'erzwungen' sein, d.h. der Gast kann sie in der Buchung nicht abwählen. Sie können verschiedene Methoden anbieten der Gebühren für optionale Extras und ob diese auf Ihrer Seite mit den Objektdetails angezeigt werden. Da Extras nur angezeigt werden können, wenn eine Buchung innerhalb eines bestimmten Zeitraums erfolgt (z das Datum Gültig von und bis festgelegt haben. Sobald Sie optionale Extas erstellt haben, können Sie Bilder für diese über den Media Manager hochladen.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Wie kann ich Zahlungen online entgegennehmen?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Um Zahlungen online entgegenzunehmen, müssen Sie ein Konto bei einem Online-Zahlungsanbieter namens Gateway haben. Um die verfügbaren Gateways anzuzeigen, gehen Sie zu Property Configuration > Gateways tab. Klicken Sie auf den Namen eines Gateways, um akzeptiert zu werden zur Konfigurationsseite.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Kann ich Rabatte geben?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Rabatte können gewährt werden, es gibt verschiedene Möglichkeiten dies zu tun. Wenn Sie eine Buchung im Namen eines Kunden vornehmen, können Sie Ihre eigenen Anzahlungs- und Buchungssummen im Buchungsformular festlegen , indem Sie die Felder Gesamtbetrag der Unterkunft überschreiben und Anzahlung überschreiben (Gäste können diese Funktion nicht verwenden). Eine andere Möglichkeit, einem Gast einen Rabatt zu gewähren, besteht darin, Rabattgutscheine zu erstellen, die so konfiguriert werden können, dass sie nur zwischen bestimmten Daten verwendet werden können ( Gültig von/bis ) oder nur gültig, wenn die Buchung in einen bestimmten Zeitraum fällt ( Buchung gültig von/bis ). Diese Rabattcoupons können nur einem Gast zugeordnet werden oder Sie können die Coupons ausdrucken. Der Ausdruck enthält einen QR-Code welche Gäste in ihre Telefone einscannen können, die sie zu Ihrem Buchungsformular mit dem bereits gültigen Rabattcode führen.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Buchungen');
	
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Wenn ich auf Neue Buchung klicke, komme ich zum Kontaktformular, warum?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Bevor Sie online Buchungen vornehmen können, müssen Sie zunächst einige Preise (Tarife) für jeden Zimmertyp konfigurieren, den Sie in Ihrer realen Unterkunft haben. Nachdem Sie einige Tarife erstellt haben, können Sie Buchungen annehmen .');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Was sind Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Schwarze Buchungen sind Buchungen, die erstellt wurden, um ein oder mehrere Zimmer außer Betrieb zu nehmen. Sie sind keinem Gast zugeordnet und sind beispielsweise nützlich, wenn ein Zimmer renoviert werden muss.") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Bilder');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Wie lade ich Bilder hoch?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Um Bilder hochzuladen, müssen Sie die Seite Einstellungen > Media Center aufrufen. Auf dieser Seite sehen Sie mehrere Bereiche. Oben sehen Sie möglicherweise einige Notizen und darunter ein Dropdown-Menü. In diesem Dropdown-Menü können Sie auswählen, für welche Ressource Sie Bilder hochladen. <br/> Auf der rechten Seite befindet sich eine Spalte mit Bildern hinzufügen, Liste löschen und Alle hochladen. Klicken Sie auf Bilder hinzufügen und wählen Sie einige Bilder von Ihrem Desktop oder Mobilgerät aus Wenn Sie das getan haben, ändert sich die Spalte in eine Liste mit Miniaturansichten. Von hier aus können Sie ein oder mehrere Bilder für Ihre Ressourcen hochladen.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Was ist das Hauptbild?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Das Hauptbild ist dasjenige, das in den Suchergebnissen und in der Kopfzeile Ihrer Unterkunft angezeigt wird (der Bereich oben auf den Seiten, die etwas über Ihre Immobilie zeigen). Sie sollten ein Bild auswählen, das Ihre Immobilie im bestmögliches Licht. Um ein Hauptbild hochzuladen, vergewissern Sie sich, dass Property Main Image in der Dropdown-Liste oben links ausgewählt ist, und laden Sie dann ein oder mehrere Bilder hoch. Wenn Sie mehr als ein Bild hochladen, werden alle Bilder in der Suche verwendet Ergebnisseite, die als kleine Diashow angezeigt wird.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Was sind Raumfunktionssymbole?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Zimmerfunktionen können von Benutzern der Tarifbearbeitungsmodi Micromanage oder Advanced erstellt werden. Diese können mit einem oder mehreren Zimmern verknüpft werden und werden im Buchungsformular angezeigt. Nachdem Sie eine Zimmerfunktion erstellt haben, können Sie Laden Sie ein Bild für diese Funktion hoch, indem Sie zuerst die Raumfunktionen-Symbole im Dropdown-Menü im Media Center auswählen und dann den Namen der Raumfunktion aus der darunter angezeigten Dropdown-Liste auswählen.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Wie lade ich Raumbilder hoch?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Räume können von Benutzern der Tarifbearbeitungsmodi Micromanage oder Advanced erstellt werden. Nachdem ein oder mehrere Räume erstellt wurden, können Sie mehrere Bilder für jeden Raum über das Media Center hochladen (wählen Sie den Raumnamen/die Raumnummer nach Wählen Sie Zimmerbilder in der Dropdown-Liste aus. Diese Bilder können in einer Diashow angezeigt werden, indem Sie die Vorschauseite anzeigen, die Registerkarte Unsere Zimmer auswählen und dann auf den Link Verfügbarkeit klicken.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Wie lade ich Diashow-Bilder hoch?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Diashow-Bilder werden auf der Seite Eigenschaftendetails ( Vorschau ) neben der Schaltfläche Jetzt buchen angezeigt.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Wie lade ich Extras-Bilder hoch?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Ähnlich wie bei den Räumen und Raumfunktionen müssen Sie zuerst ein Extra erstellen. Anschließend können Sie im oberen Dropdown-Menü Extras auswählen. Wenn Sie dies getan haben, müssen Sie den Namen auswählen das Extra aus der Dropdown-Liste unten. Wenn der Name ausgewählt ist, können Sie ein oder mehrere Bilder für dieses Extra hochladen.");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Etwas mit Gästen zu tun');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Wie blablabla?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Du blablabla ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Wie speichere ich Beschreibungen in mehreren Sprachen?');
	
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Um Beschreibungen in mehreren Sprachen zu speichern, rufen Sie zuerst die Seite Einstellungen > Objektdetails auf. Speichern Sie dort die Beschreibung für Ihr Objekt. Ändern Sie als Nächstes die Sprache, in der Sie die Website anzeigen. Gehen Sie nun zu den Einstellungen Seite \"Eigenschaftsdetails\" erneut und speichern Sie die Details erneut. Wenn die Site also sowohl Englisch als auch Spanisch (oder eine andere) Sprache anzeigen kann, würden Sie Englisch auswählen, die Beschreibung auf Englisch eingeben und dann auf \"Speichern\" klicken. Als nächstes ändern Sie Ihre aktuelle Sprache in Spanisch, dann speichern Sie die neue spanische Beschreibung. Dies funktioniert für alle Eingaben auf dieser Seite.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Kann ich andere Eigenschaften auf dieser Site ändern?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Nein, das können Sie nicht. Sie können nur Objekte verwalten, die Sie angelegt haben oder denen Sie als Hausverwalter zugewiesen wurden.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Kann ich andere Eigenschaften auf dieser Site ändern?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Ja, Sie sind ein Super Property Manager und können alle Eigenschaften ändern, die auf der Seite List Properties angezeigt werden.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Was sind Gasttypen/Wie ändere ich pro Person und Nacht?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "Unter Einstellungen > Objektkonfiguration > Registerkarte Tarife und Währungen können Sie entscheiden, ob Sie pro Person und Nacht berechnen möchten. Wenn Sie pro Person pro Nacht berechnen, müssen Sie einen oder mehrere Gästetypen erstellen. Sie können einen einfachen Gasttyp erstellen, in dem Sie ihnen nur eine Beschreibung geben (zB Personen), oder Sie können mehrere verschiedene Gasttypen erstellen, zum Beispiel \"Erwachsene\" und \"Kinder unter 10\". Für die Kinder, wenn Sie anbieten möchten einen Rabatt von 50 %, dann setzen Sie 'Ist Prozentsatz' auf Ja und den Abweichungswert auf 50. Zimmer haben Basispreise. Mit dieser Einstellung können Sie den Preis des Zimmers basierend auf dem Gästetyp anpassen.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Was sind Raumfunktionen?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Raumfunktionen sind Dinge, die den Raum hervorheben. Sie können etwas Einfaches sein wie Tee- und Kaffeezubereitungsmöglichkeiten, oder sie können Dinge sein, die den Raum wirklich über die anderen heben, wie \"Blick über die\" bay\". ( dort können die Gäste genau auswählen, welches Zimmer sie buchen möchten ) dann können sie die Zimmerfunktionen verwenden, um die im Buchungsformular angezeigten Zimmer zu filtern.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Zahlungen');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Sie können das Zahlungsgateway nach der Buchung nicht sehen.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Wenn Sie als Property Manager angemeldet sind, sehen Sie das Zahlungsgateway nicht, da Sie nicht selbst bezahlen. Nur Benutzer ohne Manager sehen das Gateway bei Buchungen.");
