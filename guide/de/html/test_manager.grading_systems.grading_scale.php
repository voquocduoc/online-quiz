<?php

require_once('header.inc.php');

?>

<h1>Notenschema</h1>
<p>Auf dieser Seite k&ouml;nnen Notenskalas erstellt und Noten benannt werden. Je nach dem Punktstand (in Prozent) wird die oder jenige Note erteilt.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="10"><span class="left">[11] [12] </span>
            <span class="right">[13] [14] [15] [16] [17] [18]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Min</th>
            <th>Max</th>
            <th>Name</th>
            <th colspan="2">Beschreibung</th>
            <th colspan="3">Aktion</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
            <td colspan="2">[6]</td>
            <td>[7]</td>
            <td>[8]
	    <br>[9]</td>
            <td>[10]</td>
        </tr>
        <tr>
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
    <li>Mit Hilfe der Kontrollfelder kann man mehrere Noten w&auml;hlen und Stapelverarbeitung verwenden ([11]); </li>
    <li>Note ID in der Skala; </li>
    <li>Minimale Punktzahl (in Prozent), die f&uuml;r die oder jenige Note n&ouml;tig ist; </li>
    <li>Maximale Punktzahl (in Prozent), die f&uuml;r die oder jenige Note n&ouml;tig ist; </li>
    <li>Notenbezeichnung; </li>
    <li>Kurzkommentar; </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Note editieren; </li>
    <li><img src="images/button-up.gif" alt="">&nbsp;Note einen Grad h&ouml;her stellen; </li>
    <li><img src="images/button-down.gif" alt="">&nbsp;Note einen Grad niedriger stellen; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Note l&ouml;schen; </li>
    <li><img src="images/button-new.gif" alt="">&nbsp;Note erstellen; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Die gew&auml;hlten ([1]) Noten l&ouml;schen; </li>
    <li>Zahl der Eintr&auml;ge auf der aktuellen Seite und Gesamtzahl der Eintr&auml;ge; </li>
    <li>Seitenzahl, klicken, um zur gew&uuml;nschten Seite zu wechseln; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Zur ersten Seite in der Notenliste wechseln; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Zur vorhergehenden Seite wechseln; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Zur n&auml;chsten Seite wechseln; </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Zur letzten Seite wechseln. </li>
</ol>

<?php

require_once('footer.inc.php');

?>