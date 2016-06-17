<?php

require_once('header.inc.php');

?>

<h2>Frage erstellen/editieren</h2>
<p>Auf dieser Seite kann man Fragen erstellen und editieren.</p>
<p>Bei Fragentypen &laquo;Multiple choice&raquo;, &laquo;Merfachantwort&raquo; und &laquo;richtig/falsch&raquo; wird die Seite folgend aussehen:</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Fragentyp:</td>
            <td colspan="2">[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Fragenthema:</td>
            <td colspan="2">[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Zahl der Antworten:</td>
            <td colspan="2">[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Frage:</td>
            <td colspan="2">[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Auswahl 1:</td>
            <td>[5]</td>
            <td>[6]<br>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Feedback 1:</td>
            <td colspan="2">[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Auswahl 2:</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
        <tr>
            <td class="td-bg">&hellip;</td>
            <td colspan="2">&hellip;</td>
        </tr>
        <tr>
            <td class="td-bg">Punktwert:</td>
            <td colspan="2">[9]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Fragentyp w&auml;hlen; </li>
    <li>Thema der Frage w&auml;hlen; </li>
    <li>Zahl der Antworten w&auml;hlen. Wenn Zahl der Antworten auf der Seite (Standardwert ist f&uuml;nf) Ihnen gen&uuml;gt, k&ouml;nnen Sie dieses Feld unver&auml;ndert lassen; </li>
    <li>HTML-Editor f&uuml;r Eingabe des Fragentextes. Die Frage kann beliebigen formatierten Text, Grafik, Animation, Audio- and Videodateien beinhalten; </li>
    <li>Text einer der Antworten; </li>
    <li>Kontrollfeld zum Markieren der richtigen Antwort; </li>
    <li>Feineinstellung der Antworten, in wie weit die Antwort genau ist (wie viel Prozent des Punktwertes man f&uuml;r die oder jenige Antwortvariante bekommt); </li>
    <li>Feedback-Text wird beim W&auml;hlen der bestimmten Antwortvariante angezeigt; </li>
    <li>Punktanzahl f&uuml;r die beantwortete Frage. </li>
</ol>
<p>Beim Fragentyp <strong>&ldquo;Kurzantwort&rdquo;</strong>sieht die Seite ebenso aus, da gibt es nur einen Unterschied: In das Feld f&uuml;r Antwortvariante ([5]) m&uuml;ssen Sie genau das eingeben, was der User f&uuml;r eine richtige Antwort eingeben soll.</p>
<p>Wenn es mehrere richtige Antwortvarianten gibt, m&uuml;ssen Sie nun Zahl der Antworten ([3]) w&auml;hlen und Texte f&uuml;r jede richtige Antwortvariante eingeben ([5]).</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Fragentyp:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Fragenthema:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Zahl der Antworten:</td>
            <td>1</td>
        </tr>
        <tr>
            <td class="td-bg">Frage:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Auswahl 1:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Punktwert:</td>
            <td>[9]</td>
        </tr>
    </tbody>
</table>
<p>Da richtige Varianten beim <strong>&ldquo;Aufsatz&rdquo;</strong> unm&ouml;glich eingegeben werden k&ouml;nnen und die Antwort manuell nach dem Test ausgewertet werden muss, fehlt auf der Seite auch das Feld mit Zahl der Varianten:</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Fragentyp:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Fragenthema:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Zahl der Antworten:</td>
            <td>n/a</td>
        </tr>
        <tr>
            <td class="td-bg">Frage:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Auswahl 1:</td>
            <td>[9]</td>
        </tr>
    </tbody>
</table>
<p>Der Fragentyp <strong>&ldquo;Zufallsfrage&rdquo;</strong>ist eigentlich eine Weisung f&uuml;r eine zuf&auml;llige (neu f&uuml;r jeden Test) Frage zum angegebenen Thema ([2]).</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Fragentyp:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Fragenthema:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Fragenname:</td>
            <td>[10]</td>
        </tr>
    </tbody>
</table>
<ol start="10">
    <li>Der Fragenname. Es wird in der Fragenbank und in dem Testmanager anstatt des Fragentextes gezeigt. Es ist eine Anmerkung f&uuml;r den Testverfasser. </li>
</ol>
<p>So wenn Sie z.B. eine Reihe Fragen haben, aus welchen Sie zuf&auml;llig 3 Fragen w&auml;hlen m&ouml;chten, m&uuml;ssen Sie:</p>
<ol>
<li>Achten Sie darauf, dass alle Fragen zu einem Thema geh&ouml;ren (d.h., dass bei allen Fragen das gleiche Thema gew&auml;hlt werden soll);</li>
<li>Erstellen Sie eine Frage mit Thema &ldquo;Zufallsfrage&rdquo;, und w&auml;hlen Sie das Thema aus der Liste;</li>
<li>F&uuml;gen Sie Ihre Zufallsfrage in den Test so viele Male, wie Sie wollen (in diesem Fall 3 Mal).</li>
</ol>


<?php

require_once('footer.inc.php');

?>