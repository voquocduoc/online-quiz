<?php

require_once('header.inc.php');

?>

<h2>Antwort auf die Frage</h2>
<p>Auf dieser Seite finden Sie Statistik zu den Antworten der User.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th>Seq</th>
            <th>#</th>
            <th>Zeit</th>
            <th>Punkte</th>
            <th>Zeit &uuml;s.</th>
            <th>Richtig</th>
            <th colspan="2">Aktion</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
            <td>[6]</td>
            <td>[7]</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Reihenfolge der Fragen in dem Test f&uuml;r den aktuellen User; </li>
    <li>Ordnungsnummern der Fragen in dem Test, kann sich von [1] unterscheiden, wenn die Testfragen gemischt wurden; </li>
    <li>Gebrauchte Zeit. Wenn sich die Fragen auf einzelnen Seiten befinden, der Wert wird gezeigt wie (00:00:00). Wenn sich aber die Fragen auf einer Seite befinden, wird dieses Feld leer sein; </li>
    <li>Punkte f&uuml;r die Antwort; </li>
    <li>Dieses Kontrollfeld zeigt, ob die erlaubte Zeit &uuml;berschritten wurde; </li>
    <li>Dieses Kontrollfeld zeigt, ob die Antwort richtig war; </li>
    <li><img src="images/button-view.gif" alt="">&nbsp;Zeigt Antwort Details an (Text der Frage, Userantwort und richtige Antwort); </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Frage editieren. </li>
</ol>

<?php

require_once('footer.inc.php');

?>