<?php

require_once('header.inc.php');

?>

<h2>Fragen importieren</h2>
<p>Diese Seite l&auml;sst Sie Fragen aus beliebigen Textdokumenten importieren.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="2" class= "td-bg">
            Dokument importieren:</td>
        </tr>
        <tr>
            <td colspan="2">[1]</td>
        </tr>
        <tr>
            <th colspan="2">
            Pr&auml;fixe (Klicken zum Zeigen / Verstecken)</th>
        </tr>
        <tr>
            <td class= "td-bg">Fragenpr&auml;fix:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class= "td-bg">Variantenpr&auml;fix:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class= "td-bg"><i>Variantenpr&auml;fix (f&uuml;r Spalte 2):</i></td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class= "td-bg"><i>Variantenfeedbackpr&auml;fix:</i></td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class= "td-bg">Pr&auml;fix der richtigen Antwort:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class= "td-bg">Pr&auml;fix des Punktes:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class= "td-bg">Pr&auml;fix des Fragentyps:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class= "td-bg">Pr&auml;fix des Fragenthemas:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class= "td-bg"><i>Pr&auml;fix der Fragenanmerkung:</i></td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class= "td-bg"><i>Fragenfeedbackpr&auml;fix:</i></td>
            <td>[11]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Dokument f&uuml;r das Importfeld; </li>
    <li>Pr&auml;fix f&uuml;r Textfeld der Frage w&auml;hrend Importieren; </li>
    <li>Pr&auml;fix der Antwortvariante; </li>
    <li><i>Pr&auml;fix der Antwortvariante in der zweiten Spalte (z.B. der zweite Element der Vergleichspaar; wird benutzt nur bei den Vergleichsfragen);</i> </li>
    <li><i>Pr&auml;fix der Variantenfeedback wird nur benutzt, wenn entsprechende Variante gew&auml;hlt wurde;</i> </li>
    <li>Pr&auml;fix der richtigen Antwort; </li>
    <li>Pr&auml;fix der Punktzahl f&uuml;r die richtige Antwort; </li>
    <li>Pr&auml;fix des Fragentyps; </li>
    <li>Pr&auml;fix des Fragenthemas; </li>
    <li><i>Pr&auml;fix der Anmerkungen, die vor der Frage gezeigt werden;</i> </li>
    <li><i>Pr&auml;fix des allgemeinen Feedbacks, das nach einer richtigen/falschen Antwort gezeigt wird; </i></li>
</ol>

<?php

require_once('footer.inc.php');

?>