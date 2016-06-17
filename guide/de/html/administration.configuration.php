<?php

require_once('header.inc.php');

?>

<h1>Einstellungen</h1>
<p>Diese Untersektion l&auml;sst einen Information &uuml;ber Systemeinstellungen zeigen und &auml;ndern.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">
            Website (Klicken zum Zeigen/Verstecken)</th>
        </tr>
        <tr>
            <td class="td-bg">Listenl&auml;nge:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">WYSIWYG Editor:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Webstatistik:</td>
            <td>[3]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>W&auml;hlen Sie wie viele Elemente auf einer Seite gezeigt werden (Testlisten, Fragenlisten, Userlisten usw.); </li>
    <li>W&auml;hlen Sie den Texteditor; </li>
    <li>W&auml;hlen Sie, ob die Statistik &uuml;ber Besuche des Systems gesammelt wird. </li>
</ol>
<p>Einstellung des Registrierungssystems. L&auml;sst bestimmen, welche Felder unbedingt, nicht unbedingt bzw. gar nicht ausgef&uuml;llt werden. Hier werden auch Regeln f&uuml;r angezeigte Daten bestimmt.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">
            Registrierung (Klicken zum Zeigen/Verstecken)</th>
        </tr>
        <tr>
            <td class="td-bg">Erlaube Userregistrierung:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Bei der Registrierung:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Einf&uuml;hrung:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Username:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Passwort:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Email:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Titel:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Vorname:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Familienname:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Zusatzname:</td>
            <td>[10]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Legt fest, ob der neue User automatische Registrierung in dem System benutzen d&uuml;rfen (zug&auml;nglich auf der Startseite); </li>
    <li>Nach der Registrierung; </li>
<ul>
<li>Aktivieren. Aktiviert den User und erlaubt Zugang ins System.</p>
<li>Aktivieren und anmelden. Aktiviert den User automatisch, Passwort wird nicht aufgefordert.</p>
<li>Nicht aktivieren, Aktivierungslink per Email schicken. So kann die angegebene Email-Adresse gepr&uuml;ft werden.</p>
<li>Nicht aktivieren, Aktivierungssystem benutzen. Sie k&ouml;nnen eigenes Useraktivierungssystem entwickeln. Z.B. die Userkonten k&ouml;nnen nach Bezahlung Ihrer Mitgliedsbeitr&auml;ge aktiviert werden. Wir entwickeln auch schl&uuml;sselfertige Aktivierungssysteme und andere Plug-ins f&uuml;r das iGiveTest System.</p>
</ul>
    <li>Einf&uuml;hrungstext, den die User auf der Registrierungsseite sehen; </li>
    <li>Username; </li>
<ul>
<li>Nicht benutzen. Das Feld wird im System nicht benutzt.</p>
<li>Benutzen aber nicht zeigen. Das Feld wird w&auml;hrend der Registrierung nicht gezeigt, doch sp&auml;ter benutzt (z.B. in dem Userprofil gezeigt).</p>
<li>Nicht zeigen aber automatisch generieren. Das System wird das Feld nicht zeigen, doch den entsprechenden Wert automatisch generieren;</p>
<li>Zeigen aber nicht anfordern. Das Feld wird w&auml;hrend der Registrierung gezeigt, aber nicht unbedingt ausgef&uuml;llt;</p>
<li>Zeigen und generieren automatisch. Das Feld wird automatisch generiert, gezeigt und kann w&auml;hrend der Registrierung ge&auml;ndert werden.</p>
<li>Zeigen und anfordern. Das Feld wird gezeigt und unbedingt ausgef&uuml;llt.</p></ul>
</ul>
    <li>Passwort; </li>
    <li>Email-Adresse; </li>
    <li>Titel; </li>
    <li>Vorname; </li>
    <li>Familienname; </li>
    <li>Zusatzname; </li>
</ol>
<p>L&auml;sst pers&ouml;nliche Informationen angeben und bestimmen, ob und wie die angegebenen Daten gezeigt werden.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">
            Pers&ouml;nliche Informationen (Klicken zum Zeigen/Verstecken)</th>
        </tr>
        <tr>
            <td class="td-bg">Adresse</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Stadt</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Bundesland</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Postleitzahl</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Land</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Telefon</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Fax</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Handy</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Pager</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">IP-Telefon</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">Webseite</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td class="td-bg">ICQ</td>
            <td>[12]</td>
        </tr>
        <tr>
            <td class="td-bg">MSN Messenger</td>
            <td>[13]</td>
        </tr>
        <tr>
            <td class="td-bg">AOL Messenger</td>
            <td>[14]</td>
        </tr>
        <tr>
            <td class="td-bg">Geschlecht</td>
            <td>[15]</td>
        </tr>
        <tr>
            <td class="td-bg">Ehemann / Ehefrau</td>
            <td>[16]</td>
        </tr>
        <tr>
            <td class="td-bg">Kinder</td>
            <td>[17]</td>
        </tr>
        <tr>
            <td class="td-bg">Trainer</td>
            <td>[18]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Adresse </li>
    <li>Stadt </li>
    <li>Bundesland </li>
    <li>Postleitzahl </li>
    <li>Land </li>
    <li>Telefon </li>
    <li>Fax </li>
    <li>Handy </li>
    <li>Pager </li>
    <li>IP-Telefon </li>
    <li>Webseite </li>
    <li>ICQ </li>
    <li>MSN Messenger </li>
    <li>AOL Messenger </li>
    <li>Geschlecht </li>
    <li>Ehemann / Ehefrau </li>
    <li>Kinder </li>
    <li>Trainer </li>
</ol>
<p>L&auml;sst berufliche Informationen angeben und bestimmen, ob und wie die angegebenen Daten gezeigt werden.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">
            Berufliche Informationen (Klicken zum Zeigen/Verstecken)</th>
        </tr>
        <tr>
            <td class="td-bg">Firma</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Position</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Amt</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">B&uuml;ro</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Adresse</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Stadt</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Bundesland</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Postleitzahl</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Land</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Telefon</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">Fax</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td class="td-bg">Handy</td>
            <td>[12]</td>
        </tr>
        <tr>
            <td class="td-bg">Pager</td>
            <td>[13]</td>
        </tr>
        <tr>
            <td class="td-bg">IP-Telefon</td>
            <td>[14]</td>
        </tr>
        <tr>
            <td class="td-bg">Webseite</td>
            <td>[15]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Firma </li>
    <li>Position </li>
    <li>Amt </li>
    <li>B&uuml;ro </li>
    <li>Adresse </li>
    <li>Stadt </li>
    <li>Bundesland </li>
    <li>Postleitzahl </li>
    <li>Land </li>
    <li>Telefon </li>
    <li>Fax </li>
    <li>Handy </li>
    <li>Pager </li>
    <li>IP-Telefon </li>
    <li>Webseite </li>
</ol>
<p>L&auml;sst bis zu 10 Felder mit zus&auml;tzlichen Informationen ausf&uuml;llen. Die Informationen k&ouml;nnen Sie auf der Userseite in der Sektion &ldquo;Zus&auml;tzliche Informationen&rdquo; eintragen.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">
            Zus&auml;tzliche Informationen (Klicken zum Zeigen/Verstecken)</th>
        </tr>
        <tr>
            <td class="td-bg">Zusatzfeld N:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Typ Zusatzfeld N:</td>
            <td>[2]<br>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">&Uuml;berschrift Zusatzfeld N:</td>
            <td>[4]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Bestimmt, ob das Feld gezeigt und ausgef&uuml;llt wird; </li>
    <li>Typ des Feldes. Varianten: Einzeiliger Text, Multiline Text, Drop-Down Liste. </li>
    <li>Bei Drop-Down Liste wird eine zus&auml;tzliche Zeile f&uuml;r die Drop-Down-Elemene gezeigt. Die Listenelemente m&uuml;ssen mit Komma getrennt sein (z.B.: val1,val2,val3). </li>
    <li>Name (Bezeichnung) des Feldes. </li>
</ol>
<p>Z.B., wenn Sie Informationen &uuml;ber Bildungsniveau der User sammeln wollen, k&ouml;nnen Sie<strong>:</strong></p>
<ol>
    <li>Das Zusatzfeld #1 auf &ldquo;Zeigen, anfordern&rdquo; stellen; </li>
    <li>Als &Uuml;berschrift &ldquo;Bildung&rdquo; angeben; </li>
    <li>Als Typ des Feldes &ldquo;Drop-Down Liste&rdquo; w&auml;hlen; </li>
    <li>und folgende Werte angeben: &laquo;h&ouml;here Schule, Bachelor, Magister, Doktor&raquo;. In Endeffekt kann der User w&auml;hrend der Registrierung eine der oben genannten Optionen w&auml;hlen. </li>
</ol>

<?php

require_once('footer.inc.php');

?>