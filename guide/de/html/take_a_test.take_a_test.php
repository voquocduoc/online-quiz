<?php

require_once('header.inc.php');

?>

<h1>Test w&auml;hlen Sektion</h1 >
<p>Das Testmodul l&auml;sst Sie mit Hilfe des <strong>&ldquo;Testmanagers&rdquo;</strong> Tests vornehmen.</p>
<p>Alle Tests, die f&uuml;r den angemeldeten User zug&auml;nglich sind, werden in Form einer Tabelle gezeigt.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th>verf&uuml;gbare Tests</th>
            <th>Status</th>
            <th>Teststart</th>
        </tr>
        <tr>
            <td>[1]<br>[2]</td>
            <td>[3]</td>
            <td><u>Test starten</u></td>
        </tr>
        <tr>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Name des Tests; </li>
    <li>Beschreibung des Tests; </li>
    <li>Information &uuml;ber Verf&uuml;gbarkeit des Tests (verf&uuml;gbar, Zahl der erlaubten Versuche, Datum, mit welchem der Test verf&uuml;gbar ist, usw.) </li>
</ol>
<p>Zum Testen muss man den erforderlichen Test in der Liste w&auml;hlen. Der Struktur nach sieht eine typische Testseite folgend aus:</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">[1]</td>
            <td class="td-bg">[2]</td>
            <td class="td-bg">[3]</td>
        </tr>
        <tr>
            <td colspan="3">[4]</td>
        </tr>
        <tr>
            <td colspan="3" class="td-bg">[5]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Gebliebene Testzeit; </li>
    <li>Laufende Testposition (Nummer der aktuellen Frage und Anzahl der Testfragen); </li>
    <li>Der Name des Tests oder der Name der laufenden Sektion; </li>
    <li>Frage(n); </li>
    <li>Navigationstasten. </li>
</ol>
<p>Nach dem Test, wenn es n&ouml;tig ist, wird die Ergebnisseite gezeigt. Den Inhalt der Seite bestimmt der User selbst, ja nach den Einstellungen des Tests (Name und Datum des Tests, aufgewandte Zeit, Note nach dem gew&auml;hlten Notenschema, Zahl der richtigen Antworten, Gesamtpunktzahl und andere Informationen).</p>
<p>Au&szlig;erdem kann der User nach dem Test ein Brief mit dem Testergebnis via Email abschicken, einen Bericht generieren oder ein Zertifikat ausstellen (auch als druckbare PDF-Datei) und die Seite mit detaillierten Testergebnissen anzeigen (<strong>&ldquo;Berichtsmanager&rdquo;</strong>).</p>


<?php

require_once('footer.inc.php');

?>