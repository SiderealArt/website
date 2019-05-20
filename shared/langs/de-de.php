<?php
/*
UUP dump translation file.

Translation information:
English language name: German
Localized language name: Deutsch
Language code: de-DE
Author: UndertakerBen (https://forums.mydigitallife.net/members/undertakerben.694957/)
*/

//Language information
$s['code'] = 'de-DE';
$s['timeZone'] = 'Europe/Berlin'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = 'Build';
$s['arch'] = 'Architektur';
$s['ring'] = 'Ring';
$s['updateid'] = 'Update ID';
$s['update'] = 'Update';
$s['lang'] = 'Sprache';
$s['edition'] = 'Edition';
$s['seachForBuilds'] = 'Suche nach Builds...';
$s['no'] = 'Nein';
$s['yes'] = 'Ja';
$s['yesRecommended'] = 'Ja (empfohlen)';
$s['next'] = 'Weiter';
$s['ok'] = 'OK';
$s['cancel'] = 'Abbrechen';
$s['information'] = 'Information';
$s['totalDlSize'] = 'Gesamte Download-Größe';
$s['file'] = 'Datei';
$s['expires'] = 'Verfällt';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Größe';

//global
$s['home'] = 'Startseite';
$s['downloads'] = 'Downloads';
$s['lightMode'] = 'Heller Modus';
$s['darkMode'] = 'Dunkler Modus';
$s['sourceCode'] = 'Quellcode';
$s['menu'] = 'Menu';
$s['websiteDesc'] = 'Laden Sie UUP-Dateien von Windows Update-Servern mit Leichtigkeit herunter. Dieses Projekt ist nicht mit der Microsoft Corporation verbunden.';
$s['notAffiliated'] = 'Dieses Projekt ist nicht mit der Microsoft Corporation verbunden. Windows ist ein eingetragenes Warenzeichen der Microsoft Corporation.';
$s['copyright'] = '© %d %s und Mitwirkende.'; //© 2019 whatever127 and contributors.
$s['selectLanguage'] = 'Bitte wählen Sie Ihre Sprache aus';

//index.php
$s['slogan'] = 'Laden Sie UUP-Dateien von Windows Update-Servern mit Leichtigkeit herunter.';
$s['advOptions'] = 'Erweiterte Optionen';
$s['browseBuilds'] = 'Durchsuchen Sie eine vollständige Liste der bekannten Builds.';
$s['browseBuildsSub'] = 'Wählen Sie ein Build, das in der lokalen Datenbank bereits bekannt ist, und laden Sie es herunter.';
$s['fetchLatest'] = 'Hole den aktuellen Build';
$s['fetchLatestSub'] = 'Abrufen der neuesten Buildinformationen von Windows Update-Servern.';
$s['newlyAdded'] = 'Neu hinzugefügte Builds';
$s['dateAdded'] = 'Datum des Hinzufügens';

//known.php
$s['browseKnown'] = 'Durchsuchen der bekannten Builds';
$s['chooseBuild'] = 'Build auswählen';
$s['weFoundBuilds'] = 'Wir haben <b>%d</b> Builds für Ihre Anfrage gefunden.'; //We have found <b>692</b> builds for your query.

//latest.php
$s['latestFetchLatest'] = 'Hole den aktuellen Build';
$s['latestTestingOnly'] = 'Nur zu Testzwecken';
$s['latestTestingOnlyWarn'] = '<b>Diese Seite wird nur zu Testzwecken zur Verfügung gestellt.</b> Builds, die von dieser Seite abgerufen werden und nicht vom Backend-Server verarbeitet wurden, werden mit Hilfe von Fallback-Packs bereitgestellt, die unvollständige Ergebnisse liefern können. Wenn du einen bereits bekannten Build herunterladen möchtest, benutze für ein optimales Ergebnis bitte stattdessen die Seite für bekannte Builds.';
$s['latestDoYouWantKnown'] = 'Möchten Sie weiter in der Liste der bekannten Builds blättern?';
$s['chooseOptions'] = 'Optionen auswählen';
$s['buildOfPretendedClient'] = 'Build Nummer des vorgegebenen Windows Update Clients';
$s['editionOfPretendedClient'] = 'Ausgabe des vorgegebenen Systems';
$s['skipAheadLabel'] = 'Skip ahead Flight';
$s['skipAheadOption'] = 'Verwenden Sie den Skip ahead Flight (nur Insider Fast)';
$s['fetchUpdates'] = 'Updates holen';
$s['fetchUpdatesInfo'] = 'Klicken Sie auf die Schaltfläche <i>Updates holen</i>, um Ihre Anfrage an die Windows Update-Server zu senden.';

//fetchupd.php
$s['responseFromServer'] = 'Antwort des Servers';
$s['foundUpdates'] = 'Gefunden %d Aktualisierung(en)'; //Found 1 update(s)
$s['foundTheseUpdates'] = 'Die folgenden Updates wurden gefunden. Klicken Sie auf den Namen des gewünschten Updates, um fortzufahren.';
$s['buildNumber'] = 'Build-Nummer: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Sprache auswählen für %s'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Sprache auswählen';
$s['chooseLangDesc'] = 'Wählen Sie Ihre gewünschte Sprache';
$s['allLangs'] = 'Alle Sprachen';
$s['selLangFiles'] = 'Dateien';
$s['allFiles'] = 'Alle Dateien';
$s['wubOnly'] = 'Nur WindowsUpdateBox';
$s['updateOnly'] = 'Nur Update';
$s['selectLangInfoText1'] = 'Klicken Sie auf die Schaltfläche <i>Weiter</i>, um die Edition auszuwählen, die Sie herunterladen möchten.';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe und Kumulatives Update finden Sie unter <i>Alle Sprachen</i> Sprache.';
$s['allLangsWarn'] = 'Die Option <i>Alle Sprachen</i> unterstützt keine Editionsauswahl.';
$s['clickNextToOpenFindFiles'] = 'Klicken Sie auf die Schaltfläche <i>Weiter</i>, um die Seite zu öffnen, die das Finden der Dateien ermöglicht.';

//selectedition.php
$s['selectEditionFor'] = 'Edition auswählen für %s'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'Edition auswählen';
$s['chooseEditionDesc'] = 'Wählen Sie die gewünschte Edition aus';
$s['allEditions'] = 'Alle Editionen';
$s['selectEditionInfoText'] = 'Klicken Sie auf die Schaltfläche <i>Weiter</i>, um die Zusammenfassungsseite Ihrer Auswahl zu öffnen.';

//download.php
$s['summary'] = 'Zusammenfassung';
$s['summaryDesc'] = 'Überprüfen Sie Ihre Auswahl und wählen Sie die Download-Methode.';
$s['summaryFor'] = 'Zusammenfassung für %s'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'Zusammenfassung Ihrer Auswahl';
$s['browseList'] = 'Durchsuchen der Datei-Liste';
$s['browseListDesc'] = 'Öffnet eine Seite mit einer Liste der Dateien im UUP-Set für den manuellen Download.';
$s['aria2Opt1'] = 'Herunterladen mit aria2';
$s['aria2Opt1Desc'] = 'Laden Sie das ausgewählte UUP-Set einfach mit aria2 herunter.';
$s['aria2Opt2'] = 'Mit aria2 herunterladen und konvertieren';
$s['aria2Opt2Desc'] = 'Laden Sie das ausgewählte UUP-Set mit aria2 einfach herunter und konvertieren Sie es in eine ISO.';
$s['aria2Opt3'] = 'Mit aria2 herunterladen, konvertieren und zusätzliche Editionen erstellen';
$s['aria2Opt3Desc'] = 'Laden Sie das ausgewählte UUP-Set mit aria2 einfach herunter, konvertieren es, erstellen Sie zusätzliche Editionen und erstellen Sie schließlich ein ISO-Image.';
$s['jsRequiredToConf'] = 'Für die Konfiguration und Verwendung dieser Option ist JavaScript erforderlich.';
$s['selAdditionalEditions'] = 'Zusätzliche Editionen auswählen';
$s['noAdditionalEditions'] = 'Für diese Auswahl stehen keine zusätzlichen Editionen zur Verfügung.';
$s['learnMore'] = 'Mehr Infos';
$s['learnMoreAdditionalEditions1'] = 'Diese Option ermöglicht die automatische Erstellung ausgewählter zusätzlicher Editionen.';
$s['learnMoreAdditionalEditions2'] = 'Die Liste der zusätzlichen Ausgaben wird durch ausgewählte Basiseditionen bestimmt. Unten können Sie eine Liste der Basiseditionen einsehen, die benötigt werden, um die gewünschten zusätzlichen Editionen zu erstellen:';
$s['learnMoreUpdates1'] = 'Aktualisierungen werden nur dann in das konvertierte Image integriert, wenn das Konvertierungsskript auf den folgenden Systemen ausgeführt wird:';
$s['learnMoreUpdates2'] = 'Wenn Sie das Konvertierungsskript auf einem anderen System ausführen, werden Updates nicht in das konvertierte Image integriert.';
$s['systemWithAdk'] = '%s mit installiertem Windows 10 ADK'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = 'Zusätzliche Updates';
$s['additionalUpdatesDesc'] = 'Dieses UUP-Set enthält zusätzliche Updates, die während des Konvertierungsprozesses integriert werden und die Erstellungszeit deutlich erhöhen.';
$s['browseUpdatesList'] = 'Durchsuchen der Update-Liste';

//get.php
$s['listOfFilesFor'] = 'Liste der Dateien für %s'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Gesamtgröße der Dateien: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = 'Datei-Umbenennungsskript';
$s['fileRenamingScriptDesc1'] = 'Das untenstehende Skript kann verwendet werden, um heruntergeladene Dateien schnell umzubenennen.';
$s['fileRenamingScriptDesc2'] = 'Kopieren Sie einfach den Inhalt des untenstehenden Formulars in eine neue Datei mit der Dateiendung <code>cmd</code>, legen Sie dieses in den Ordner mit den heruntergeladenen Dateien und starten Sie dieses.';
$s['sha1File'] = 'SHA-1 Prüfsummen-Datei';
$s['sha1FileDesc'] = 'Mit dieser Datei können Sie schnell überprüfen, ob die Dateien korrekt heruntergeladen wurden.';
$s['aria2NoticeTitle'] = 'Download mit Hinweis zu aria2-Optionen';
$s['aria2NoticeText1'] = 'Herunterladen mit aria2-Optionen erstellt ein Archiv, das heruntergeladen werden muss. Das heruntergeladene Archiv enthält alle benötigten Dateien, um die ausgewählte Aufgabe zu erfüllen.';
$s['aria2NoticeText2'] = 'Um den Download-Prozess zu starten, verwenden Sie das Skript für Ihre Plattform:';
$s['aria2NoticeText3'] = 'Aria2 ist ein Open-Source-Projekt. Sie finden es hier: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'Das UUP Konvertierungsskript (Windows-Version) wurde erstellt von %s.'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'Das UUP-Konvertierungsskript (Linux-Version) ist Open Source. Sie finden es hier: %s.'; //UUP Conversion script (Linux version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Dateien finden in %s'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Wenn Sie Dateien, die Sie von dieser Seite herunterladen, schnell umbenennen möchten, können Sie ein Umbenennungsskript generieren, das dies automatisch für Sie erledigt.';
$s['fileRenamingScriptGenW'] = 'Umbenennungsskript generieren (Windows)';
$s['fileRenamingScriptGenL'] = 'Umbenennungsskript generieren (Linux)';
$s['searchForFiles'] = 'Nach Dateien suchen...';
$s['weFoundFiles'] = 'Wir haben <b>%d</b> Dateien für Ihre Anfrage gefunden.'; //We have found <b>692</b> files for your query.

//Error pages
$s['error'] = 'Fehler';
$s['requestNotSuccessful'] = 'Anfrage nicht erfolgreich';
$s['anErrorHasOccurred'] = 'Beim Versuch, Ihre Anfrage zu bearbeiten, ist ein Fehler aufgetreten.';
$s['generatedPackNotAvailable'] = 'Generiertes Paket nicht verfügbar';
$s['generatedPackNotAvailableDesc'] = 'Das Update, das Sie herunterladen möchten, enthält kein generiertes Paket, das vollständige Informationen über verfügbare Sprachen, Editionen und Dateien enthält. Das Fallback-Paket wird verwendet, das möglicherweise nicht die richtigen Informationen liefert. Wenn der Download dadurch fehlschlägt, warten Sie bitte, bis das automatisch generierte Paket verfügbar ist.';
$s['arm64Warning'] = 'Sie haben einen ARM64-Build ausgewählt, der <b>nur mit ARM64-basierten Geräten</b> kompatibel ist und nicht mit normalen Intel oder AMD-basierten PCs funktioniert. Für <b>64-bit</b> PCs verwenden Sie bitte <b>amd64</b> Builds. Für <b>32-bit</b> PCs verwenden Sie bitte <b>x86</b> Builds. Wenn Sie absolut sicher sind, dass das Zielgerät auf ARM64 basiert, können Sie diese Meldung sicher ignorieren.';

//Error messages
$s['error_ERROR'] = 'Allgemeiner Fehler.';
$s['error_UNSUPPORTED_API'] = 'Die installierte API-Version ist nicht kompatibel mit dieser Version von UUP dump.';
$s['error_NO_FILEINFO_DIR'] = 'Das </i>Dateiinformations<i> Verzeichnis existiert nicht.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'Die <i>Dateiinformations</i> Datenbank enthält kein Build.';
$s['error_SEARCH_NO_RESULTS'] = 'Es konnten keine Elemente für die angegebene Abfrage gefunden werden.';
$s['error_UNKNOWN_ARCH'] = 'Unbekannte Prozessorarchitektur.';
$s['error_UNKNOWN_RING'] = 'Unbekannter Ring.';
$s['error_UNKNOWN_FLIGHT'] = 'Unbekannter flight.';
$s['error_UNKNOWN_COMBINATION'] = 'Die Flight und Ring Kombination ist nicht korrekt. Skip ahead wird nur für den Insider Fast Ring unterstützt.';
$s['error_ILLEGAL_BUILD'] = 'Die angegebene Build-Nummer ist kleiner als %d oder größer als %d.'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = 'Die angegebene Build-Nummer ist falsch.';
$s['error_NO_UPDATE_FOUND'] = 'Der Server hat keine Updates zurückgegeben.';
$s['error_XML_PARSE_ERROR'] = 'Das Parsen der XML-Antwort ist fehlgeschlagen. Dies kann auf ein vorübergehendes Problem mit den Microsoft-Servern hinweisen. Versuchen Sie es später noch einmal.';
$s['error_EMPTY_FILELIST'] = 'Der Server hat eine leere Liste von Dateien zurückgegeben.';
$s['error_NO_FILES'] = 'Es stehen keine Dateien von Ihrer Auswahl zur Verfügung.';
$s['error_NOT_FOUND'] = 'Die angegebene Auswahl konnte nicht gefunden werden.';
$s['error_MISSING_FILES'] = 'Im ausgewählten UUP-Set fehlen einige Dateien.';
$s['error_NO_METADATA_ESD'] = 'Es stehen keine Metadaten-ESD-Dateien von Ihrer Auswahl zur Verfügung.';
$s['error_UNSUPPORTED_LANG'] = 'Die ausgewählte Sprache wird nicht unterstützt.';
$s['error_UNSPECIFIED_LANG'] = 'Die Sprache wurde nicht angegeben.';
$s['error_UNSUPPORTED_EDITION'] = 'Die ausgewählte Edition wird nicht unterstützt.';
$s['error_UNSUPPORTED_COMBINATION'] = 'Die Sprach- und Editionskombination ist nicht korrekt.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'Das ausgewählte Update enthält keine kumulativen Updates.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Informationen über das ausgewählte Update sind in der Datenbank nicht vorhanden.';
$s['error_KEY_NOT_EXISTS'] = 'Der angegebene Schlüssel existiert nicht in den Updateinformationen.';
$s['error_UNSPECIFIED_UPDATE'] = 'Die Update-ID wurde nicht angegeben.';
$s['error_INCORRECT_ID'] = 'Die angegebene Update-ID ist nicht korrekt. Bitte stellen Sie sicher, dass die angegebene Update-ID korrekt ist.';
$s['error_RATE_LIMITED'] = 'Die Geschwindigkeit Ihrer Anfragen ist begrenzt. Bitte versuchen Sie es in wenigen Sekunden erneut.';
$s['error_UNSPECIFIED_VE'] = 'Sie haben keine zusätzliche Edition ausgewählt. Wenn Sie keine zusätzlichen Ausgaben erstellen möchten, verwenden Sie bitte die Option <i>Download mit aria2 und konvertieren</i>.';
$s['errorNoMessage'] = 'Fehlermeldung ist nicht verfügbar.';

//Languages
$s['lang_ar-sa'] = 'Arabisch (Saudi-Arabien)';
$s['lang_bg-bg'] = 'Bulgarisch';
$s['lang_cs-cz'] = 'Tschechisch';
$s['lang_da-dk'] = 'Dänisch';
$s['lang_de-de'] = 'Deutsch';
$s['lang_el-gr'] = 'Griechisch';
$s['lang_en-gb'] = 'Englisch (England)';
$s['lang_en-us'] = 'Englisch (Amerika)';
$s['lang_es-es'] = 'Spanisch (Spanien)';
$s['lang_es-mx'] = 'Spanisch (Mexico)';
$s['lang_et-ee'] = 'Estnisch';
$s['lang_fi-fi'] = 'Finnisch';
$s['lang_fr-ca'] = 'Französisch (Kanada)';
$s['lang_fr-fr'] = 'Französisch (Frankreich)';
$s['lang_he-il'] = 'Hebräisch';
$s['lang_hr-hr'] = 'Kroatisch';
$s['lang_hu-hu'] = 'Ungarisch';
$s['lang_it-it'] = 'Italienisch';
$s['lang_ja-jp'] = 'Japanisch';
$s['lang_ko-kr'] = 'Koreanisch';
$s['lang_lt-lt'] = 'Litauisch';
$s['lang_lv-lv'] = 'Lettisch';
$s['lang_nb-no'] = 'Norwegisch (Bokmal)';
$s['lang_nl-nl'] = 'Niederländisch';
$s['lang_pl-pl'] = 'Polnisch';
$s['lang_pt-br'] = 'Portugisisch (Brasilien)';
$s['lang_pt-pt'] = 'Portugisisch (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Rumänisch';
$s['lang_ru-ru'] = 'Russisch';
$s['lang_sk-sk'] = 'Slowakisch';
$s['lang_sl-si'] = 'Slowenisch';
$s['lang_sr-latn-rs'] = 'Serbisch (Latein)';
$s['lang_sv-se'] = 'Schwedisch';
$s['lang_th-th'] = 'Thailändisch';
$s['lang_tr-tr'] = 'Türkisch';
$s['lang_uk-ua'] = 'Ukrainisch';
$s['lang_zh-cn'] = 'Chinesisch (Vereinfacht)';
$s['lang_zh-hk'] = 'Chinesisch (Hong Kong)';
$s['lang_zh-tw'] = 'Chinesisch (Traditionell)';