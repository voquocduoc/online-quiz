<?php

require_once('header.inc.php');

?>

<h2>Besucherdetails</h2>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Session-ID:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Gebrauchte Zeit:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">User:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Hits:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Start Datum:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Einstiegsseite:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Ende Datum:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Ausstiegsseite:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">IP-Adresse:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Hostname:</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">Verweiser:</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td class="td-bg">Useragent:</td>
            <td>[12]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Session-ID; </li>
    <li>Die f&uuml;r die Session gebrauchte Zeit; </li>
    <li>Userdaten in dem System (wenn der User nicht registriert ist, werden Daten f&uuml;r den &ldquo;Gast&rdquo; gezeigt); </li>
    <li>Anzahl der von dem User besuchten Seiten (auch wiederholte Besuche); </li>
    <li>Datum und Zeit, wenn die Session begann; </li>
    <li>Seite, wo der User die Session anfing; </li>
    <li>Datum und Zeit, wenn die Session endete; </li>
    <li>Seite, wo der User die Session abbrach; </li>
    <li>Computer-IP-Adresse; </li>
    <li>Dom&auml;nenname, entsprechend der IP-Adresse; </li>
    <li>Seite, von welcher der User kam; </li>
    <li>Useragent (Browser); </li>
</ol>

<?php

require_once('footer.inc.php');

?>