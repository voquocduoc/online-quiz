<?php

require_once('header.inc.php');

?>

<h1>Import von Tests und Testfragen aus Textdateien</h1>
<p>&Ouml;fter werden Tests aus einer Text-Datei importiert, manchmal ist es doch bequemer, Tests in einem einfachen Texteditor zu erstellen. Wie dem es auch sei, es f&auml;llt einem l&auml;stig, wenn man alle Fragen und Antwortvarianten von Hand eingibt.</p>
<p>Dazu wurde das Importsystem auch entwickelt. Es l&auml;sst einen Test aus Texteditoren so gut wie automatisch importieren.</p>
<h2>Umstrukturierung der Datei zum Importieren</h2>
<p>Tests aus Texteditoren m&uuml;ssen bestimmte Anforderungen erf&uuml;llen, nur dann sind diese importabel.</p>
<p><strong>Allererst</strong> geht es um den Look and Feel Prinzip (z.B. im Aufbau) jeder Datei. Die Dateistruktur muss in sich einige Elemente nachweisen, und zwar:</p>
<ul>
    <li>Text der Frage </li>
    <li>Fragetypanzeiger </li>
    <li>Antwortvarianten </li>
    <li>Kommentar zur Frage (Feedback) </li>
    <li>Anzeiger der richtigen Antwort </li>
    <li>Punktzahl f&uuml;r richtige Antwort </li>
    <li>Fragethemaanzeiger </li>
    <li>Anweisung zur Frage </li>
</ul>

<p><strong>Jedes Element muss vor sich ein bestimmtes Pr&auml;fix haben. Es kann aus beliebigen (benutzerdefinierten) Zeichen bestehen.</strong></p>
<p>Zum Beispiel, wenn Sie folgende Fragen importieren wollen:</p>
<p class="example">W&auml;hlen Sie die am besten passende Antwort.
<br><strong>In der heutigen postindustriellen Gesellschaft das gro&szlig;e Wort f&uuml;hrt:</strong>
<br>&nbsp;Rohstoffgewinnungsindustrie
<br>&nbsp;Verarbeitungsindustrie
<br>&nbsp;Agrarsektor
<br>&nbsp;Informationstechnologie (*)
<br><br>W&auml;hlen Sie aller passenden Antworten.
<br><strong>Im Unterschied zur Natur, die Gesellschaft:</strong>
<br>&nbsp;Ist ein System
<br>&nbsp;Entwickelt sich
<br>&nbsp;Ist Kulturmacher (*)
<br>&nbsp;Beginnt mit dem Buchstaben &ldquo;G&rdquo; (*)
<br>...</p>
<p>Das &ldquo;(*)&rdquo; zeigt, dass die Antwort richtig ist. So muss der Test ungef&auml;hr so aussehen:</p>
<p><span class="prefix">[Fragenpr&auml;fix]</span> <span class="value"><strong>In der heutigen postindustriellen Gesellschaft das gro&szlig;e Wort f&uuml;hrt:</strong></span>
<br><span class="prefix">[Pr&auml;fix der Fragenanmerkung]</span> <span class="value">W&auml;hlen Sie die am besten passende Antwort.</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Rohstoffgewinnungsindustrie</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Verarbeitungsindustrie</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Agrarsektor</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Informationstechnologie</span>
<br><span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value">4</span>
<br><span class="prefix">[Fragenpr&auml;fix]</span> <span class="value"><strong>Im Unterschied zur Natur, die Gesellschaft:</strong></span>
<br><span class="prefix">[Pr&auml;fix der Fragenanmerkung]</span> <span class="value">W&auml;hlen Sie aller passenden Antworten.</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Ist ein System</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Entwickelt sich</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Ist Kulturmacher</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Beginnt mit dem Buchstaben &ldquo;G&rdquo;</span>
<br><span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value">3+4</span>
<br><span class="prefix">[Fragenpr&auml;fix]</span> <span class="value">...</span></p>
<p>Somit kann der Test beliebigen Text (auch grafische Objekte, Flash-, Audio- und Videodateien) beinhalten, au&szlig;er den definierten Pr&auml;fixen. Wenn sich das Pr&auml;fix in einem Element wiederholt, denkt das System, dieses Element w&auml;re beendet, und beginnt ein anderes Element (entsprechend dem Pr&auml;fix).</p>
<p>Zum Beispiel, wollen wir folgende Pr&auml;fixe nehmen: <span class="prefix">Frage</span> (f&uuml;r eine Frage), <span class="prefix">Antwort</span> (f&uuml;r eine Antwortvariante) und <span class="prefix">Richtig</span> (f&uuml;r das Pr&auml;fix der richtigen Antwort):</p>
<p><span class="prefix">Frage</span> <span class="value">Welche Vokale befinden sich in dem Alphabet zwischen den Buchstaben &ldquo;D&rdquo; und &ldquo;K&rdquo;? <strong>Beim </span> <span class="prefix">Antwort</span><span class="value">en der</span> <span class="prefix">Frage</span><span class="value">, bitte alle richtigen</span> <span class="prefix">Antwort</span><span class="value">en w&auml;hlen.</span></strong>
<br><span class="prefix">Antwort</span> <span class="value"> A</span>
<br><span class="prefix">Antwort</span> <span class="value"> E</span>
<br><span class="prefix">Antwort</span> <span class="value"> I</span>
<br><span class="prefix">Antwort</span> <span class="value"> O</span>
<br><span class="prefix">Antwort</span> <span class="value"> U</span>
<br><span class="prefix">Richtig</span> <span class="value"> 2,3</span></p>
<p>In diesem Fall werden anstatt einer Frage zwei falsche Fragen importiert. Die erste Frage: &ldquo;Welche Vokale befinden sich in dem Alphabet zwischen den Buchstaben &ldquo;D&rdquo; und &ldquo;K&rdquo;? Beim &rdquo; - mit einer Antwortvariante: &ldquo;en der&rdquo;, wo die zweite Frage folgend lautet: &ldquo;, bitte alle richtigen &rdquo; - mit den Antwortvatianten: &ldquo;en w&auml;hlen.&rdquo;, &ldquo; A,&rdquo; &ldquo;E,&rdquo; &ldquo;I,&rdquo; &ldquo;O,&rdquo; und &ldquo;U&rdquo;. Als richtig wird in diesem Fall anstatt &ldquo;E&rdquo; und &ldquo;I&rdquo; die Antwort &ldquo;A&rdquo; und &ldquo;E&rdquo; behandelt.</p>
<p>Deshalb wird empfohlen Zeichens&auml;tze zu benutzen, die sonst im Text nicht vorkommen. So werden Sie z.B. so was wie <span class="prefix">%Frage%</span>, <span class="prefix">%Antwort%</span>, und <span class="prefix">%Richtig%</span> (oder auch: <span class="prefix">%F</span>, <span class="prefix">%A</span>, <span class="prefix">%R</span>) kaum im gew&ouml;hnlichen Text treffen:</p>
<br><span class="prefix">%Frage%</span> <span class="value">Welche Vokale befinden sich in dem Alphabet zwischen den Buchstaben &ldquo;D&rdquo; und &ldquo;K&rdquo;?</span>
<br><span class="prefix">%Antwort%</span> <span class="value"> A</span>
<br><span class="prefix">%Antwort%</span> <span class="value"> E</span>
<br><span class="prefix">%Antwort%</span> <span class="value"> I</span>
<br><span class="prefix">%Antwort%</span> <span class="value"> O</span>
<br><span class="prefix">%Antwort%</span> <span class="value"> U</span>
<br><span class="prefix">%Richtig%</span> <span class="value"> 2,3</span></p>
<p>Es ist zu beachten, dass die Pr&auml;fixe nicht einander beinhalten sollen, sonst k&ouml;nnen sie falsch erkannt werden.</p>
<p>Zum Beispiel, wenn man Pr&auml;fixe <span class="prefix">%F</span> (Pr&auml;fix der Frage) und <span class="prefix">%FTyp</span> (Pr&auml;fix des Fragetyps) benutzt, ist es nicht verst&auml;ndlich, was bei &ldquo;<span class="prefix">%FTyp</span>&rdquo; zu machen ist. In solchen F&auml;llen wird es als Text der Frage erkannt (wenn das Pr&auml;fix der Frage <span class="prefix">%F</span> ist), auch wenn es sich um Fragetyp handelt.</p>
<p><strong>Zweitens</strong>, beim erstellen von Fragen ist eine bestimmte Reihenfolge zu beachten, sonst ist es unverst&auml;ndlich, wo eine Frage endet und die Andere beginnt.</p>
<p><strong>Das erste Element in einer Frage muss die eigentliche Frage sein (Text der Frage), ihr folgen die restlichen Elemente.</strong></p>
<p>Es ist z.B. falsch so zu machen:</p>
<p><span class="prefix">[Pr&auml;fix der Fragenanmerkung]</span> <span class="value">Fragenanmerkung #1</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Auswahl #1 in Frage#1</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Auswahl #2 in Frage#1</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Auswahl #3 in Frage#1</span>
<br><span class="prefix">[Fragenpr&auml;fix]</span> <span class="value"><strong>Frage #1</strong></span>
<br><span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value">1,3</span>
<br><span class="prefix">[Pr&auml;fix der Fragenanmerkung]</span> <span class="value">Fragenanmerkung #2</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Auswahl #1 in Frage#2</span>
<br><span class="prefix">[Fragenpr&auml;fix]</span> <span class="value"><strong>Frage #2</strong></span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Auswahl #2 in Frage#2</span>
<br><span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value">1</span>
<br><span class="value">...</span></p>
<p>Das erste Element muss die Frage sein. Z.B.:</p>
<p><span class="prefix">[Fragenpr&auml;fix]</span> <span class="value"><strong>Frage #1</strong></span>
<br><span class="prefix">[Pr&auml;fix der Fragenanmerkung]</span> <span class="value">Fragenanmerkung #1</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Auswahl #1 in Frage#1</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Auswahl #2 in Frage#1</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Auswahl #3 in Frage#1</span>
<br><span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value">1,3</span>
<br><span class="prefix">[Fragenpr&auml;fix]</span> <span class="value"><strong>Frage #2</strong></span>
<br><span class="prefix">[Pr&auml;fix der Fragenanmerkung]</span> <span class="value">Fragenanmerkung #2</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Auswahl #1 in Frage#2</span>
<br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Auswahl #2 in Frage#2</span>
<br><span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value">1</span>
<br><span class="value">...</span> </p>
<h2>Was sind die Pr&auml;fixe und wie sie benutzt werden</h2>
<p>In den importierten Tests k&ouml;nnen verschiedene Elemente vorkommen, die eigentlich f&uuml;r Tests allgemein g&uuml;ltig sind. Nun wollen wir alle diese Elemente nennen und ihre Funktionen einzeln beschreiben.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td><strong>Element</strong></td>
            <td><strong>Beschreibung</strong></td>
        </tr>
        <tr>
            <td>Frage</td>
            <td>Die Frage kann beliebige Informationen (Texte mit Graphen, grafische Objekte, Flash-, Audio- und Videodateien) beinhalten.</td>
        </tr>
        <tr>
            <td>Fragentyp</td>
            <td>Die Fragentyp wird durch Nennen dieser bestimmt oder durch eine Zahl von 1 bis 7 gesetzt: 1 &ndash; Multiple choice, 2 &ndash; Merfachantwort, 3 &ndash; Reihenfolge, 4 &ndash; Entsprechungen, 5 &ndash; Kurzantwort, 6 &ndash; Leerstellen-Schlie&szlig;en und 7 &ndash; Aufsatz.</p>
            <p>Z.B.: <span class="prefix">[Pr&auml;fix des Fragentyps]</span> <span class="value">5</span> zeigt, dass die aktuelle Frage eine Kurzantwort fordert.</p>
            <p>Jedoch ist es manchmal notwendig den Fragentyp deutlich zu nennen. Wenn man nach der Form der richtigen Antwort (Sieh: Sektion Richtige Antwort) unzweideutig den Fragentyp bestimmen kann, ist der Fragentyp nicht unbedingt einzugeben.</p>
            <p>Es ist empfehlenswert, den Fragentyp vor den Antwortvarianten (auch vor der richtigen Antwort) einzugeben, damit das Format des Antwortfelds dem Fragentyp entspricht.</td>
        </tr>
        <tr>
            <td>Antwortvariante</td>
            <td>Die Antwortvariante kann beliebige Informationen beinhalten.</td>
        </tr>
        <tr>
            <td>Antwortvariante (f&uuml;r Spalte 2)</td>
            <td>Die Antwortvariante kann beliebige Informationen beinhalten. Dieses Element erscheint, wenn Sie die Antworten in zwei Spalten einordnen (Fragen zu Entsprechungen und Gegenst&uuml;cken).</p>
            <p>Z.B.:</p>
            <p><span class="prefix">[Fragenpr&auml;fix]</span> <span class="value">Vergleichen Sie die Elemente</span>
            <br><span class="prefix">[Pr&auml;fix des Fragentyps]</span> <span class="value">4</span>
            <br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Sonne</span>
            <br><span class="prefix">[Variantenpr&auml;fix (f&uuml;r Spalte 2)]</span> <span class="value">Mit Zellen</span>
            <br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Eis</span>
            <br><span class="prefix">[Variantenpr&auml;fix (f&uuml;r Spalte 2)]</span> <span class="value">Hei&szlig;</span>
            <br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Tabelle</span>
            <br><span class="prefix">[Variantenpr&auml;fix (f&uuml;r Spalte 2)]</span> <span class="value">Money</span>
            <br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Lohn</span>
            <br><span class="prefix">[Variantenpr&auml;fix (f&uuml;r Spalte 2)]</span> <span class="value">Kalt</span>
            <br><span class="prefix">[Variantenpr&auml;fix]</span> <span class="value">Tag</span>
            <br><span class="prefix">[Variantenpr&auml;fix (f&uuml;r Spalte 2)]</span> <span class="value">Nachmittag</span>
            <br><span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value">1-2,2-4,3-1,4-3,5-5</span></p></td>
        </tr>
        <tr>
            <td>Variantenfeedback</td>
            <td>Variantenfeedback kann beliebige Informationen beinhalten. Dieses Element wird benutzt, wenn es n&ouml;tig ist, beim W&auml;hlen einer Antwortvariante ein entsprechendes Feedback zur Frage zu zeigen.</td>
        </tr>
        <tr>
            <td>Richtige Antwort</td>
            <td>Die richtige Antwort enth&auml;lt die Nummer(n) der richtigen Antworten.</p>
            <p>Einfache Frage mit einem oder mehreren richtigen Antworten, die von einander durch &quot;;&quot; getrennt werden: <span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value"> 3</span> zeigt, dass die Antwort 3 richtig ist, wo <span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value"> 3;5</span> zeigt, dass es zwei richtige Antworten gibt: 3 und 5.</p>
            <p>Bei Fragen, wo alle richtige Antworten gew&auml;hlt werden sollen und wo die Reihenfolge nicht wichtig ist, werden die richtigen Antworten durch &quot;+&quot; getrennt: <span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value"> 7+1+3</span> zeigt, dass die richtige Antwort aus drei Antwortvarianten besteht: 1, 3 und 7, die Reihenfolge ist dabei nicht wichtig.</p>
            <p>Bei Fragen, wo alle richtige Antworten mit Einhalten einer bestimmter Reihenfolge gew&auml;hlt werden sollen, werden die richtigen Antworten durch &quot;,&quot; getrennt: <span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value">1,4,3</span> zeigt, dass die richtige Antwort aus drei Antwortvarianten in festgesetzter Reihenfolge besteht: 1, 4 und 3.</p>
            <p>Bei Fragen zu Entsprechungen (Entsprechungen unter den Antworten finden) werden Elemente durch &quot;-&quot; und die Paaren durch &quot;,&quot; getrennt. <span class="prefix">[Pr&auml;fix der richtigen Antwort]</span> <span class="value">1-1,2-3,3-2</span> zeigt, dass die richtige Antwort folgend aussieht: Das erste Element (in der ersten Spalte) entspricht dem ersten Element (in der zweiten Spalte), das zweite Element - dem Dritten und das Dritte &ndash; dem Zweiten.</p>
            <p>Bei Fragen, die Eingabe der Antwort und/oder Stichw&ouml;rter fordern, braucht man keine richtigen Antworten anzugeben, da die Antwortvarianten selbst der richtigen Antwort entsprechen.</td>
        </tr>
        <tr>
            <td>Punktzahl</td>
            <td>Dieses Element enth&auml;lt Punktzahl (positive Ganzzahl), die der User f&uuml;r eine richtige Antwort bekommt. <span class="prefix">[Pr&auml;fix der Punktzahl]</span> <span class="value">3</span> zeigt, dass f&uuml;r die richtige Antwort der User 3 Punkte zu seinem Punktstand bekommt.</td>
        </tr>
        <tr>
            <td>Fragenthema</td>
            <td>Das Fragenthema enth&auml;lt entweder den Namen oder einen Themen des Themas, zu dem diese Frage geh&ouml;rt. <span class="prefix">[Pr&auml;fix des Fragenthemas]</span> <span class="value">Physik</span> zeigt, dass die aktuelle Frage dem Thema &ldquo; Physik&rdquo; gewidmet ist.</p>
            <p>Wenn die Frage einem Thema geh&ouml;rt, das in den Testeinstellungen erw&auml;hnt wurde, muss das Thema in dem Pr&auml;fix eingegeben werden.</td>
        </tr>
        <tr>
            <td>Fragenanmerkung</td>
            <td>Fragenanmerkung kann beliebige Informationen beinhalten.</td>
        </tr>
    </tbody>
</table>

<?php

require_once('footer.inc.php');

?>
