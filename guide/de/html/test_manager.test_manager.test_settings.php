<?php

require_once('header.inc.php');

?>

<h2>Test zusammenstellen/Testeinstellungen editieren</h2>
<p>Auf dieser Seite kann einer Tests zusammenstellen und Testeinstellungen &auml;ndern.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="2" class="td-bg">
            <p>[1] &ndash; Dieser Test ist aktiv</td>
        </tr>
        <tr>
            <td class="td-bg">Thema des Tests:</td>
            <td>[2][3]</td>
        </tr>
        <tr>
            <td class="td-bg">Testname:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Kurzbeschreibung:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Generelle Testanweisungen:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Test Startdatum:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Test endet am:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Testzeit:</td>
            <td>[9] [10] &ndash; Nicht verwenden<br>[11] &ndash; Dieser Test endet, wenn das Zeitlimit erreicht wird</td>
        </tr>
        <tr>
            <td class="td-bg">Erlaubte Versuche:</td>
            <td>[12]</td>
        </tr>
        <tr>
            <td class="td-bg">Notensystem:</td>
            <td>[13]</td>
        </tr>
        <tr>
            <td class="td-bg">Zeige Fragen:</td>
            <td>[14]</td>
        </tr>
        <tr>
            <td class="td-bg">Optionen Reihenfolge:</td>
            <td>[15] &ndash; Fragen zuf&auml;llig ordnen<br>[16] &ndash; Antworten zuf&auml;llig ordnen</td>
        </tr>
        <tr>
            <td class="td-bg">Berichte Testergebnisse:</td>
            <td>[17] &ndash; Feedback zeigen<br>[18] &ndash; Notenschema zeigen<br>[19] &ndash; Antworten zeigen<br>[20] &ndash; Punkte zeigen<br>Selbst erstellte Vorlage benutzen: [21]</td>
        </tr>
        <tr>
            <td class="td-bg">Erweiterter Bericht:</td>
            <td>Vorlage: [22]<br>Notenbedingung: [23]<br>[24] &ndash; Zeige druckbaren PDF Bericht</td>
        </tr>
        <tr>
            <td class="td-bg">Sende Ergebnisse per Email:</td>
            <td>[25]<br>[26], [27] &ndash; Sende Ergebnisse an die User</td>
        </tr>
        <tr>
            <td class="td-bg">zugewiesen an:</td>
            <td>[28]<br>[29] &ndash; zugewiesen an alle (unterdr&uuml;ckt andere Einstellungen)</td>
        </tr>
        <tr>
            <td class="td-bg">Vorangehender Test:</td>
            <td>[30]</td>
        </tr>
        <tr>
            <td class="td-bg">Folgender Test:</td>
            <td>[31]</td>
        </tr>
        <tr>
            <td class="td-bg">Testkommentierungen (zum internen Gebrauch):</td>
            <td>[32]</td>
        </tr>
    </tbody>
</table>
<p>[33] [34] [35]</p>
<ol>
    <li>Kontrollfeld, das den Test aktiviert (verf&uuml;gbar macht); </li>
    <li>Thema des Tests; </li>
    <li>Anlegen und Editieren vom Themen; </li>
    <li>Testname; </li>
    <li>Kurzbeschreibung des Tests, die User neben dem Testnamen auf der Seite &ldquo;Test w&auml;hlen&rdquo; sieht; </li>
    <li>Editor f&uuml;r Eingabe von Testanweisungen, die vor dem Teststart gezeigt werden; </li>
    <li>W&auml;hlen Sie das Datum, ab welchem der Test f&uuml;r den User verf&uuml;gbar ist; </li>
    <li>W&auml;hlen Sie das Datum, bis welchem der Test f&uuml;r den User verf&uuml;gbar ist; </li>
    <li>W&auml;hlen Sie maximale Testzeit; </li>
    <li>Kontrollfeld, das zeitliche Begrenzung entfernt; </li>
    <li>Legt fest, ob sich der Test mit Ablauf der Testzeit automatisch schlie&szlig;t oder mit &Uuml;berschreitung der Testzeit beendet sein darf; </li>
    <li>Legt Zahl der Versuche fest; </li>
    <li>W&auml;hlt das Notenschema; </li>
    <li>Setzt die Zahl der Fragen auf einer Testseite; </li>
    <li>Legt fest, ob Testfragen in zuf&auml;lliger Reihenfolge kommen; </li>
    <li>Legt fest, ob Antwortvarianten in zuf&auml;lliger Reihenfolge kommen. Diese Option kann durch &uuml;ber Mischung der Antwortvarianten f&uuml;r eine bestimmte Frage umgegangen werden; </li>
    <li>Legt fest, ob nach dem Antworten das Feedback gezeigt wird; </li>
    <li>Legt fest, ob die Note auf der Ergebnisseite gezeigt wird; </li>
    <li>Legt fest, ob Zahl der Fragen auf der Ergebnisseite gezeigt wird; </li>
    <li>Legt fest, ob der Punktstand auf der Ergebnisseite gezeigt wird; </li>
    <li>L&auml;sst Vorlagen f&uuml;r Ergebnisseiten benutzen; </li>
    <li>L&auml;sst Vorlagen f&uuml;r Zertifikate und f&uuml;r detaillierte Berichte in PDF-Format benutzen, welche nach dem Testen gezeigt werden k&ouml;nnen (auch auf der Seite des Berichtmanagers: Auf dem Knopf &nbsp;klicken); </li>
    <li>L&auml;sst den detaillierten Bericht nur zeigen, wenn die bestimmte bzw. h&ouml;here Punktzahl erreicht wurde; </li>
    <li>F&uuml;gt Ergebnisse zu dem Bericht in PDF-Format; </li>
    <li>W&auml;hlt eine Email-Vorlage; </li>
    <li>Email-Adressen der Empf&auml;nger, an die der Bericht geschickt wird; </li>
    <li>L&auml;sst w&auml;hlen, ob der Bericht an den User geschickt wird; </li>
    <li>L&auml;sst Usergruppen w&auml;hlen, f&uuml;r welche dieser Test verf&uuml;gbar wird; </li>
    <li>Macht den Test f&uuml;r alle Usergruppen verf&uuml;gbar (auch f&uuml;r die in [28] nicht gew&auml;hlten Gruppen); </li>
    <li>L&auml;sst den Test w&auml;hlen, nach dessen Erf&uuml;llung den aktuelle Test verf&uuml;gbar wird; </li>
    <li>L&auml;sst den Test w&auml;hlen, der nach Erf&uuml;llung des aktuellen Tests vorgeschlagen wird; </li>
    <li>Anmerkung des Verfassers; </li>
    <li>&Auml;nderungen &uuml;bernehmen; </li>
    <li>&Auml;nderungen &uuml;bernehmen und zum Editieren der Testfragen &uuml;bergehen; </li>
    <li>&Auml;nderungen r&uuml;ckg&auml;ngig machen. </li>
</ol>

<?php

require_once('footer.inc.php');

?>