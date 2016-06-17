<?php

require_once('header.inc.php');

?>

<h1>Servicetags</h1>
<p>Servicetags werden f&uuml;r Vorlagen benutzt. In der Vorlage, wenn Sie eine Email-Nachricht erstellen (einen Bericht bzw. ein Zertifikat), werden die Tags durch entsprechende Daten ersetzt (Userdaten, Testergebnisse usw.).</p>
<table class="cmn">
    <tbody>
        <tr>
            <th>Tagname</th>
            <th>Wert</th>
        </tr>
        <tr>
            <td class="td-bg">[USER_ID]</td>
            <td>User-ID auf der Website</td>
        </tr>
        <tr>
            <td class="td-bg">[USERNAME]</td>
            <td>Username auf der Website</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_PASSWORD]</td>
            <td>Userpasswort</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CHECKWORD]</td>
            <td>Userkonto Kontrollwort</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_TITLE]</td>
            <td>Titel</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_FIRST_NAME]</td>
            <td>Vorname</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_LAST_NAME]</td>
            <td>Familienname</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_MIDDLE_NAME]</td>
            <td>Zusatzname</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_EMAIL]</td>
            <td>Email-Adresse</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_ADDRESS]</td>
            <td>Adresse</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CITY]</td>
            <td>Stadt</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_STATE]</td>
            <td>Bundesland</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_ZIP]</td>
            <td>Postleitzahl</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_COUNTRY]</td>
            <td>Land</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_PHONE]</td>
            <td>Telefon</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_FAX]</td>
            <td>Fax</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_MOBILE]</td>
            <td>Handy</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_PAGER]</td>
            <td>Pager</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_IPPHONE]</td>
            <td>IP-Telefon</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_WEBPAGE]</td>
            <td>Webseite</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_ICQ]</td>
            <td>ICQ</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_MSN]</td>
            <td>MSN Messenger</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_AOL]</td>
            <td>AOL Messenger</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_GENDER]</td>
            <td>Geschlecht</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_HUSBANDWIFE]</td>
            <td>Ehemann / Ehefrau</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CHILDREN]</td>
            <td>Kinder</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_TRAINER]</td>
            <td>Trainer</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_COMPANY]</td>
            <td>Firma</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CPOSITION]</td>
            <td>Position</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CDEPARTMENT]</td>
            <td>Amt</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_COFFICE]</td>
            <td>B&uuml;ro</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CADDRESS]</td>
            <td>Adresse (f&uuml;r eine Firma)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CCITY]</td>
            <td>Stadt (f&uuml;r eine Firma)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CSTATE]</td>
            <td>Bundesland (f&uuml;r eine Firma)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CZIP]</td>
            <td>Postleitzahl (f&uuml;r eine Firma)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CCOUNTRY]</td>
            <td>Land (f&uuml;r eine Firma)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CPHONE]</td>
            <td>Telefon (f&uuml;r eine Firma)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CFAX]</td>
            <td>Fax (f&uuml;r eine Firma)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CMOBILE]</td>
            <td>Handy (f&uuml;r eine Firma)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CPAGER]</td>
            <td>Pager (f&uuml;r eine Firma)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CIPPHONE]</td>
            <td>IP-Telefon (f&uuml;r eine Firma)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CWEBPAGE]</td>
            <td>Webseite (f&uuml;r eine Firma)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD1]</td>
            <td>Zusatzfeld #1</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD2]</td>
            <td>Zusatzfeld #2</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD3]</td>
            <td>Zusatzfeld #3</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD4]</td>
            <td>Zusatzfeld #4</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD5]</td>
            <td>Zusatzfeld #5</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD6]</td>
            <td>Zusatzfeld #6</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD7]</td>
            <td>Zusatzfeld #7</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD8]</td>
            <td>Zusatzfeld #8</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD9]</td>
            <td>Zusatzfeld #9</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD10]</td>
            <td>Zusatzfeld #10</td>
        </tr>
        <tr>
            <td class="td-bg">[TEST_ID]</td>
            <td>Test-ID auf der Website</td>
        </tr>
        <tr>
            <td class="td-bg">[TEST_NAME]</td>
            <td>Testname</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_ID]</td>
            <td>Testergebnis-ID</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_DATE]</td>
            <td>Testdatum</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_TIME_SPENT]</td>
            <td>Ben&ouml;tigte Testzeit</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_TIME_EXCEEDED]</td>
            <td>Ob die Testzeit &uuml;berschritten wurde</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_POINTS_SCORED]</td>
            <td>Erzielte Punkte</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_POINTS_POSSIBLE]</td>
            <td>Maximal m&ouml;gliche Punktzahl f&uuml;r den Test</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_PERCENTS]</td>
            <td>Prozentualer Anteil zu dem maximal m&ouml;glichen Punktstand</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_GRADE]</td>
            <td>Note f&uuml;r den Test</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_GRADE_FEEDBACK]</td>
            <td>Feedbacktext zur Note f&uuml;r den Test</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_DETAILED_1]</td>
            <td>Detaillierte Informationen zu jeder Antwort auf die Testfrage, einschlie&szlig;lich:</p>
            <ul>
                <li>Kurztext aller Fragen </li>
                <li>Ob die gegebene Antwort richt ist </li>
                <li>Punkte f&uuml;r die Antwort </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_DETAILED_2]</td>
            <td>Detaillierte Informationen zu jeder falschen Antwort auf die Testfrage, einschlie&szlig;lich:</p>
            <ul>
                <li>Kurztext aller Fragen, die falsch beantwortet wurden </li>
                <li>Ob die gegebene Antwort richt ist </li>
            </ul>
            <ul>
                <li>Punkte f&uuml;r die Antwort </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_DETAILED_3]</td>
            <td>Detaillierte Informationen zu jeder Antwort auf die Testfrage, einschlie&szlig;lich:</p>
            <ul>
                <li>Volltext aller Fragen </li>
                <li>Volltext aller Antwortvarianten </li>
                <li>Richtige Antwort </li>
                <li>Userantwort </li>
                <li>Ob die gegebene Antwort richt ist </li>
                <li>Punkte f&uuml;r die Antwort </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_DETAILED_4]</td>
            <td>Detaillierte Informationen zu jeder falschen Antwort auf die Testfrage, einschlie&szlig;lich:</p>
            <ul>
                <li>Volltext aller Fragen, die falsch beantwortet wurden </li>
                <li>Volltext aller Antwortvarianten </li>
                <li>Richtige Antwort </li>
                <li>Userantwort </li>
                <li>Ob die gegebene Antwort richt ist </li>
                <li>Punkte f&uuml;r die Antwort </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td class="td-bg">[IGIVETEST_URL]</td>
            <td>Vollst&auml;ndige URL zu dem iGiveTest System</td>
        </tr>
        <tr>
            <td class="td-bg">[PAGE_BREAK]</td>
            <td>Seitenumbruch (setzt das Seitenende, z.B. in Berichten in PDF-Format oder in Testanweisungen)</td>
        </tr>
    </tbody>
</table>
<?php

require_once('footer.inc.php');

?>