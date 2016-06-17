<?php

require_once('header.inc.php');

?>

<h1>Berichtsmanager</h1>
<p>In dieser Sektion werden Ergebnisse gezeigt und analysiert.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="15"><span class="left">[16] [17] [18]</span>
            <span class="right">[19] [20] [21] [22] [23] [24]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Datum</th>
            <th>Username</th>
            <th>Testname</th>
            <th>Versuche &uuml;s.</th>
            <th>Zeit &uuml;s.</th>
            <th>Erreichte Punkte</th>
            <th colspan="2">M&ouml;gliche Punkte</th>
            <th>Score</th>
            <th>Grade</th>
            <th colspan="3">Aktion</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4][5]</td>
            <td>[6]</td>
            <td>[7]</td>
            <td>[8]</td>
            <td>[9]</td>
            <td colspan="2">[10]</td>
            <td>[11]</td>
            <td>[12]</td>
            <td>[13]</td>
            <td>[14]</td>
            <td>[15]</td>
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
            <td colspan="2">&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Mit Hilfe der Kontrollfelder kann man mehrere Berichte w&auml;hlen und Stapelverarbeitung verwenden ([15]); </li>
    <li>Bericht ID auf der Website; </li>
    <li>Datum des Testens; </li>
    <li>User, der sich testen lie&szlig;. Durch Klick auf dem Usernamen k&ouml;nnen Sie Daten des Users; </li>
    <li>User ID. &Uuml;ber dieses Link k&ouml;nnen Sie Userprofile anzeigen und editieren; </li>
    <li>Testname. Wenn Sie auf dem Testnamen klicken, wird ein Bericht zu diesem Test gezeigt; </li>
    <li>Ist das Kontrollfeld markiert, hei&szlig;t es, es sind keine Versuche geblieben. Ein Administrator bzw. ein User mit den entsprechenden Zugriffrechten kann dieses Kontrollfeld aktivieren und deaktivieren und den Z&auml;hler der gebliebenen Veruche r&uuml;cksetzen, um dem User weitere Testversuche zu erlauben; </li>
    <li>Dieses Kontrollfeld zeigt, ob die erlaubte Zeit &uuml;berschritten wurde; </li>
    <li>Die f&uuml;r den Test erreichten Punkte; </li>
    <li>Maximal m&ouml;glicher Punktstand; </li>
    <li>Die f&uuml;r den Test erreichten Punkte (prozentual); </li>
    <li>Note f&uuml;r den Test. Wird nur gezeigt, wenn die Testeinstellungen es erlauben; </li>
    <li><img src="images/button-view.gif" alt="">&nbsp;Detaillierte Statistik zu den Antworten auf die Testfragen; </li>
    <li><img src="images/button-pdf.gif" alt="">&nbsp;Zertifikat/detaillierter Bericht in PDF-Format.  <img src="images/button-pdf-inactive.gif" alt="">&nbsp;zeigt, dass kein Zertifikat verf&uuml;gbar ist; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Bericht l&ouml;schen; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Die gew&auml;hlten ([1]) Berichte l&ouml;schen; </li>
    <li>Detaillierten Bericht &uuml;ber den gew&auml;hlten User anzeigen; </li>
    <li>Detaillierten Bericht &uuml;ber den gew&auml;hlten Test anzeigen; </li>
    <li>Zahl der Eintr&auml;ge auf der aktuellen Seite und Gesamtzahl der Eintr&auml;ge;</li>
    <li>Seitenzahl, klicken, um zur gew&uuml;nschten Seite zu wechseln; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Zur ersten Seite in der Berichtsliste wechseln; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Zur vorhergehenden Seite wechseln; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Zur n&auml;chsten Seite wechseln; </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Zur letzten Seite wechseln. </li>
</ol>

<?php

require_once('footer.inc.php');

?>