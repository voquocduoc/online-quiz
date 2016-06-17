<?php

require_once('header.inc.php');

?>

<h2>Email-Vorlagen erstellen/editieren</h2>
<p>Auf dieser Seite k&ouml;nnen Email-Vorlagen erstellt und editiert werden.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Vorlage-ID:</td>
            <td>[1]</td>
            <td rowspan="6">
            [7]</td>
        </tr>
        <tr>
            <td class="td-bg">Vorlagenbezeichnung:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Vorlagenbeschreibung:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Von (Email):</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Email-Thema:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Email-Hauptteil:</td>
            <td>[6]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Vorlage-ID auf der Site; </li>
    <li>Vorlagenbezeichnung; </li>
    <li>Kurzbeschreibung der Vorlage; </li>
    <li>Die Adresse von der die Nachricht geschickt wird; </li>
    <li>Thema der Nachricht; </li>
    <li>Text der Nachricht. Sie k&ouml;nnen spezielle Tags in Ihren Nachrichten benutzen ([7]) </li>
    <li>Tags f&uuml;r die Vorlage. Beim erstellen einer Nachricht werden die Tags automatisch durch entsprechende Daten ersetzt (z.B., Userdaten, einige Testergebnisse usw.) </li>
</ol>

<?php

require_once('footer.inc.php');

?>