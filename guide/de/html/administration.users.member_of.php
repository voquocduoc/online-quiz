<?php

require_once('header.inc.php');

?>

<h1>Gruppenzuteilung des Users</h1>
<p>Auf dieser Seite kann Gruppenzuteilung des Users gezeigt und ge&auml;ndert sein.</p>
<p>Die erste Tabelle enth&auml;lt die Liste der gew&auml;hlten User.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="12">
	    <span class=left>[12] [13] [14]</span>
            </td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>N</th>
            <th>Username</th>
            <th>Email</th>
            <th>Vorname</th>
            <th>Familienname</th>
            <th colspan="2"><strong>Aktiv</th>
            <th colspan="3">Aktion</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[4]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
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
            <td>&hellip;</td>
            <td colspan="2">&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Mit Hilfe der Kontrollfelder kann man mehrere User w&auml;hlen und Stapelverarbeitung verwenden ([13] [14]); </li>
    <li>User-ID auf der Website; </li>
    <li>Anmerkung &uuml;ber den User; </li>
    <li>Username im System; </li>
    <li>Email-Adresse des Users; </li>
    <li>Vorname des Users; </li>
    <li>Familienname des Users; </li>
    <li>Zeigt, ob das Userkonto aktiv ist und l&auml;sst ein Konto aktivieren bzw. deaktivieren; </li>
    <li><img src="images/button-groups.gif" alt="">&nbsp;Usergruppen zeigen und editieren; </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Userdaten editieren; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;User l&ouml;schen. <img src="images/button-cross-inactive.gif" alt="">&nbsp;zeigt, dass Sie nicht das Recht haben, diesen User zu l&ouml;schen; </li>
    <li><img src="images/button-new.gif" alt="">&nbsp;Neues Userkonto erstellen; </li>
    <li><img src="images/button-groups.gif" alt="">&nbsp;Die gew&auml;hlten ([1]) User den Gruppen zuordnen; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Die gew&auml;hlten ([1]) User l&ouml;schen; </li>
</ol>
<p>Die zweite Tabelle enth&auml;lt die Liste der Systemgruppen:</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="8"><span class="left">[8] [9] </span>
            <span class="right">[10] [11] [12] [13] [14] [15]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Name</th>
            <th colspan="2">Beschreibung</th>
            <th>Mitglied</th>
            <th colspan="2">Aktion</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td colspan="2">[4]</td>
            <td>[5]</td>
            <td>[6]</td>
            <td>[7]</td>
        </tr>
        <tr>
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
    <li>Mit Hilfe der Kontrollfelder kann man mehrere Gruppen w&auml;hlen und Stapelverarbeitung verwenden ([9]); </li>
    <li>Gruppen-ID auf der Website; </li>
    <li>Gruppenname; </li>
    <li>Kurzbeschreibung der Gruppe; </li>
    <li>Zeigt, ob der aktuelle User der Gruppen angeh&ouml;rt und l&auml;sst seine Gruppenzuteilung &auml;ndern; </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Gruppe editieren; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Gruppe l&ouml;schen. <img src="images/button-cross-inactive.gif" alt="">&nbsp;zeigt, dass Sie nicht das Recht haben, diese Gruppe zu l&ouml;schen; </li>
    <li><img src="images/button-new.gif" alt="">&nbsp;Neue Usergruppe erstellen; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Die gew&auml;hlten ([1]) Gruppen l&ouml;schen; </li>
    <li>Zahl der Eintr&auml;ge auf der aktuellen Seite und Gesamtzahl der Eintr&auml;ge; </li>
    <li>Seitenzahl, klicken, um zur gew&uuml;nschten Seite zu wechseln; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Zur ersten Seite in der Gruppenliste wechseln; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Zur vorhergehenden Seite wechseln; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Zur n&auml;chsten Seite wechseln; </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Zur letzten Seite wechseln. </li>
</ol>

<?php

require_once('footer.inc.php');

?>