<?php

require_once('header.inc.php');

?>

<h2>Note erstellen/editieren</h2>
<p>Auf dieser Seite werden Noten erstellt und editiert.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Note ID:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Notenbezeichnung:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Minimum (%):</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Maximum (%):</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Notenbeschreibung:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <th colspan="2">Fortgeschritten (Klicken zum Zeigen / Verstecken)</th>
        </tr>
        <tr>
            <td class="td-bg">Noten - Feedback:</td>
            <td>[6]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Note ID in der Skala; </li>
    <li>Notenbezeichnung; </li>
    <li>Minimale Punktzahl (in Prozent), die f&uuml;r diese Note n&ouml;tig ist; </li>
    <li>Maximale Punktzahl (in Prozent), die f&uuml;r diese Note n&ouml;tig ist; </li>
    <li>Kurzkommentar; </li>
    <li>L&auml;sst Feedback an die Note anheften. Solches Feedback kann verschiedene Testergebnisse, Berichte, Zertifikate beinhalten und zus&auml;tzliches Lernen des Stoffes empfehlen, auch Ergebnisse abh&auml;ngig von der Note auslegen.</li>
</ol>

<?php

require_once('footer.inc.php');

?>