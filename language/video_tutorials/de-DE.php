<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define('VIDEO_TUTORALS_TITLE', 'Video-Tutorials');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Systemsteuerung');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'Dieses Tutorial zeigt Ihnen, wie Sie das Property Management Control Panel verwenden.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Zeitleiste');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'So verwenden Sie den Timeline-Kalender. In diesem Video erstellen wir einen neuen Gast, indem wir seine Daten in das Popup-Fenster eingeben, bestehende Gäste können wiederverwendet werden, indem Sie ihren Namen aus der Dropdown-Liste im Popup-Fenster auswählen.') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Eigenschaften auflisten');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'So verwenden Sie die Seite "Listeneigenschaften", um zusätzliche Informationen anzuzeigen, Spalten zu ändern und nach bestimmten Eigenschaften zu suchen.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Ihre Unterkunftsdetails bearbeiten');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Bearbeiten Ihrer Objektdetails, einschließlich Ziehen auf der Karte, um Ihren Standort festzulegen.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Tarifbearbeitungsmodus ändern');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Ihr Tarifbearbeitungsmodus bestimmt die Methode, mit der Sie die Preise für Ihre Unterkunft festlegen können. Dies tun Sie über die Seite "Eigenschaftenkonfiguration".');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normaler Tarifbearbeitungsmodus für Hotels, Pensionen, Pensionen');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Normaler Tarifbearbeitungsmodus ist eine einfache Tarifbearbeitungsfunktion, mit der Sie die Anzahl der Zimmer in einer Unterkunft, den Zimmerpreis, die Anzahl der Gäste, die jedes Zimmer beherbergen kann und die maximale Anzahl von Gästen auswählen können auf einer Party, diese Preise gelten dann nach der Speicherung für die nächsten 10 Jahre.');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Normale Tarifbearbeitung für Villen und Wohnungen');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Normaler Tarifbearbeitungsmodus ist eine einfache Tarifbearbeitungsfunktion, mit der Sie den Unterkunftsuntertyp, den Preis der Unterkunft pro Nacht und die maximale Anzahl von Gästen in einer Party auswählen können dann gültig für die nächsten 10 Jahre.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Mikromanage Tarif Bearbeitungsmodus (empfohlen)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Der Bearbeitungsmodus des Microromanage-Tarifs ermöglicht Ihnen, sowohl den Preis als auch die Mindestanzahl der Tage, für die ein Aufenthalt gültig sein kann, für jeden Tag des Jahres zu konfigurieren. Es ist ein leistungsstarkes Werkzeug, das Ihnen die vollständige Kontrolle gibt In diesem Beispiel zeigen wir Ihnen, wie Sie mehrere Preissätze für denselben Zimmertyp erstellen, unterschiedliche Preise für verschiedene Zeiträume und unterschiedliche Preise für bestimmte Wochentage innerhalb eines Zeitraums festlegen. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Mikromanagetarif-Bearbeitungsmodus für Villen/Apartments (empfohlen)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Der Bearbeitungsmodus des Microromanage-Tarifs ermöglicht Ihnen, sowohl den Preis als auch die Mindestanzahl der Tage, für die ein Aufenthalt gültig sein kann, für jeden Tag des Jahres zu konfigurieren. Es ist ein leistungsstarkes Werkzeug, das Ihnen die vollständige Kontrolle gibt Preisüberschreitung. In diesem Beispiel zeigen wir Ihnen, wie Sie mehrere Preissätze erstellen. Wir werden unterschiedliche Preise für verschiedene Zeiträume und unterschiedliche Preise für bestimmte Wochentage innerhalb eines Zeitraums festlegen. Sobald dies erledigt ist, erstellen wir mehrere Tarife für denselben Eigentum, aber mit unterschiedlichen Gästezahlen, die es uns ermöglichen, die Preise für jedes Szenario genau zu kontrollieren.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Verschiedene Tarife für verschiedene Gästenummern');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Sie können mehrere Tarife für denselben Zimmertyp erstellen. Wenn Sie also unterschiedliche Preise für unterschiedliche Gästezahlen wünschen, können Sie dies tun.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Pro Person pro Nacht - Gästetypen');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Um pro Person und Nacht zu berechnen, müssen Sie Gasttypen erstellen. Verschiedene Gasttypen können vom Grundpreis eines Zimmers abweichen, sodass Kinder unterschiedlichen Alters je nach Alter unterschiedliche Rabatte erhalten können. Sie nicht pro Person und Nacht berechnen müssen, um die Gästetypen zu nutzen. Sie können sie auch verwenden, wenn Sie eine Pauschale berechnen, aber dennoch die Anzahl der Gäste erfassen möchten oder die Anzahl der Gäste in einer Buchung begrenzen möchten.' );

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Mediencenter - Bilder hochladen');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Alle Bilder werden über das Media Center hochgeladen. In diesem Video werden wir das Hauptobjektbild, einige Diashow-Bilder, eine kleine Auswahl von Bildern, die auf der Suchergebnisseite angezeigt werden sollen, und Bilder für eines von die Räume.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Mediencenter - Bilder hochladen');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Alle Bilder werden über das Media Center hochgeladen. In diesem Video werden wir das Hauptobjektbild, eine kleine Auswahl von Bildern, die auf der Suchergebnisseite angezeigt werden sollen, und einige Diashow-Bilder hochladen.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Administrator-Systemsteuerung');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Dies ist Ihre Standard-Landingpage im Administratorbereich. Sie können eine Zusammenfassung verschiedener Site-Statistiken einsehen und sehen, welche Eigenschaften im System vorhanden, vollständig und abgeschlossen sind und auf eine Überprüfung vor der Genehmigung warten .Sobald eine Immobilie genehmigt wurde, kann sie vom Immobilienverwalter veröffentlicht werden.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Plugin-Manager, Installation und Verwendung');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Dieses Video zeigt Ihnen, wie Sie den Plugin-Manager verwenden, einschließlich der Installation des Plugin-Managers und der Installation und Deinstallation eines Plugins. Wenn Sie keinen Lizenzschlüssel haben, werden Sie aufgefordert, ihn in Site zu speichern Konfiguration bevor Sie den Manager installieren können.Wenn Sie den Plugin-Manager noch nicht verwendet haben, ist diese Liste zunächst leer, in diesem Beispiel habe ich bereits verschiedene Plugins installiert.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Eigenschaftsmanager');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Eigenschaftsmanager werden auf zwei Arten hinzugefügt. Entweder erstellen sie selbst Eigenschaften (kann in der Site-Konfiguration deaktiviert werden) oder der Site-Administrator kann bestimmten Eigenschaften einen vorhandenen Manager zuweisen. Manager können nur auf Eigenschaften zugreifen, die sie haben erstellt oder zugewiesen wurden.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Zugriffskontrolle');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Sie können die Zugriffssteuerungsfunktion verwenden, um Menüoptionen zu deaktivieren, sie nur für bestimmte Benutzerklassen sichtbar zu machen oder sogar ganz zu verschwinden. Wenn die Menüleiste keine Menüoptionen zum Anzeigen hat, dann verschwindet vollständig. Wenn Sie also nicht möchten, dass Site-Besucher irgendwelche Optionen sehen, können Sie zum Beispiel alle Optionen so einstellen, dass sie für angemeldete Benutzer sichtbar sind.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Eigenschaften und Zimmertypen');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'In diesem Video sehen Sie zwei wichtige Konzepte. Das erste ist das Erstellen von Objekttypen und zugehörigen Zimmertypen. Sie sehen auch, dass ein registrierter Benutzer, der noch kein Verwalter ist, ein eigenes Objekt erstellt und ein Verwalter (kann aber nur die von ihm erstellte Unterkunft konfigurieren.) Unterkunft und Zimmertypen sind verknüpft, sobald Sie einen Unterkunftstyp erstellt haben, müssen Sie einen Zimmertyp hinzufügen, andernfalls werden den Verwaltern rote Fehlermeldungen angezeigt, wenn sie versuchen, ihre Eigenschaften zu konfigurieren. ');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Hochladen von Kartenmarkierungen');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Sie verwenden das Media Center, um Kartenmarkierungen hochzuladen. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Eine hervorragende Quelle für Markierungen finden Sie hier.< /a> Das Verfahren zum Hochladen von Objektmerkmalen, Zimmermerkmalen, Zimmertypen und anderen ist gleich.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Eigenschaftsfunktionen');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'In diesem Video zeigen wir Ihnen, wie Sie Immobilienmerkmale erstellen und Bilder dafür hochladen.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Kurzcodes');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Shortcodes sind eine außergewöhnlich leistungsstarke Funktion von Jomres. Das Prinzip ist für Joomla und Wordpress gleich. In diesem Video zeigen wir Ihnen, wo Sie die Shortcodes anzeigen können (diese Liste ändert sich je nachdem, welche Plugins es sind installiert) und wie man sie verwendet. Sie können die Codes in Artikeln oder Modulen verwenden.');

jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Protokolldateien');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Dieses Video zeigt Ihnen, wie Sie Protokolldateien anzeigen. Umfangreiche Protokollierung erfolgt, wenn das System ausgeführt wird. Im Produktionsmodus (Site Config > Debugging) werden weniger Protokolle generiert, wenn Sie also eine neue Funktion testen Sie sollten Ihre Site auf "Entwicklung" setzen. Wenn Sie Ihren Jomres-Skripten Ihre eigene Protokollierung hinzufügen möchten, werfen Sie einen Blick auf <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank">unsere Handbuchseite zur Vorgehensweise.</a> Hier werden wir einen gefälschten Fehler ausgeben und dann die Protokolldatei anzeigen. Da die Site dort auf Entwicklung eingestellt ist sind viele Informationen, normalerweise sehen Sie nur eine Meldung, dass ein Fehler aufgetreten ist und dieser gemeldet wurde.');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Labels und andere Zeichenfolgen übersetzen');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Es gibt eine Reihe von Möglichkeiten, Sprachzeichenfolgen in Jomres zu übersetzen. Sie können Sprachdateien bearbeiten, diese werden jedoch beim Upgrade möglicherweise überschrieben. Stattdessen empfehlen wir Ihnen, die integrierten Übersetzungstools zu verwenden, die nur in unserem Wenn die Zeichenfolge in ein Formular eingegeben wurde, beispielsweise der Name eines Zimmertyps, können Sie die Seite Etikettenbearbeitung verwenden.Wenn die Zeichenfolge aus der Sprachdatei stammt, können Sie das Bearbeitungstool für Sprachdateien verwenden. Verwenden Sie einfach die Browser-Suchfunktion, um die Zeichenfolge zu finden, die Sie ändern möchten, und klicken Sie dann auf den Link, um sie zu ändern. Diese Änderungen werden in der Datenbank gespeichert und sind daher aktualisierungssicher. Sie können verschiedene Labels für verschiedene Immobilientypen verwenden, damit Sie Ändern Sie New Property in New Campsite, indem Sie beispielsweise das Dropdown-Menü Sprachkontext oben auf der Seite ändern, bevor Sie das Label ändern.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Eigenschaften hinzufügen');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p>Zu diesem Zeitpunkt wurde Jomres im CMS installiert und zum Frontend-Menü hinzugefügt (oder in WordPress haben Sie eine Seite erstellt und den grundlegenden Jomres-Shortcode hinzugefügt).</ p>
<p>Hier sehen Sie, wie ein registrierter Benutzer, der noch kein Immobilienverwalter in Jomres ist, eine neue Immobilie erstellen, einige Grundeinstellungen vornehmen und veröffentlichen kann.</p>
<p>Am Ende sehen Sie, dass der Verwalter automatisch als Hausverwalter festgelegt wurde, er jedoch nur seine eigenen Eigenschaften konfigurieren kann.</p>
<p>Obwohl die Benutzeroberfläche in Wordpress anders aussieht, ist der Vorgang für Joomla oder Wordpress genau gleich.</p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Eigenschaftskategorien');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Eigenschaftskategorien sind eine einfache Funktion, mit der Immobilienverwalter ihre Immobilien einer bestimmten Kategorie zuordnen können. Site-Administratoren können Shortcodes erstellen, die alle Immobilien in einer Kategorie auflisten, wie in diesem Video gezeigt.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Eigenschaften des Site-Administrators anzeigen');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p>Sie verwalten keine Eigenschaften von hier aus, Sie können nur Eigenschaften vom Frontend aus verwalten. In dieser Liste können Sie jedoch Eigenschaften sehen, deren Genehmigung aussteht (wenn die Funktion aktiviert ist) und alle, die noch nicht genehmigt sind unvollständig (z. B. müssen noch Bilder hochgeladen, Preise festgelegt usw.) Sie benötigen, um eine Eigenschaft zu vervollständigen und zu veröffentlichen.</p> ');
