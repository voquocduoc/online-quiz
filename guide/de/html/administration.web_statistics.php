<?php

require_once('header.inc.php');

?>

<h1>Web-Statistik</h1>
<p>Die Untersektion bietet Zugriff auf detaillierte Statistiken &uuml;ber Systembesuche.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="11"><span class="right">[12] </span>
            <span class="right">[13] [14] [15] [16] [17] [18]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Datum</th>
            <th>Username</th>
            <th>Hits</th>
            <th>IP-Adresse</th>
            <th colspan="2">Hostname</th>
            <th>Verweiser</th>
            <th colspan="2">Aktion</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4][5]</td>
            <td>[6]</td>
            <td>[7]</td>
            <td colspan="2">[8]</td>
            <td>[9]</td>
            <td>[10]</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td colspan="2">&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Mit Hilfe der Kontrollfelder kann man mehrere Sessionen w&auml;hlen und Stapelverarbeitung verwenden ([11]); </li>
    <li>Session-ID; </li>
    <li>Datum und Zeit, wenn die Session begann; </li>
    <li>Systemusername; </li>
    <li>User-ID. Userprofil anzeigen und editieren; </li>
    <li>Anzahl der Hits; </li>
    <li>IP-Adresse des Usercomputers. Seite mit Information &uuml;ber diese IP-Adresse in dem WhoIs-Service; </li>
    <li>Dom&auml;nenname, entsprechend der IP-Adresse ([6]); </li>
    <li>Seite, von welcher der User kam; </li>
    <li>Detaillierte Statistik anzeigen; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Information &uuml;ber die Session l&ouml;schen; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Information &uuml;ber die gew&auml;hlten ([1]) Sessionen l&ouml;schen; </li>
    <li>Zahl der Eintr&auml;ge auf der aktuellen Seite und Gesamtzahl der Eintr&auml;ge; </li>
    <li>Seitenzahl, klicken, um zur gew&uuml;nschten Seite zu wechseln; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Zur ersten Seite in der Sessionenliste wechseln; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Zur vorhergehenden Seite wechseln; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Zur n&auml;chsten Seite wechseln; </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Zur letzten Seite wechseln. </li>
</ol>


<?php

require_once('footer.inc.php');

?>