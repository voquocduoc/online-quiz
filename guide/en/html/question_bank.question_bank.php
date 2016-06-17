<?php

require_once('header.inc.php');

?>
<h1>Question Bank</h1>
<p>The question bank allows you to create, edit, structure and gather statistics on all questions.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="10"><span class="left">[10] [11] [12] [13]</span>
            <span class="right">[14] [15] [16] [17] [18] [19]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Subject</th>
            <th>Question</th>
            <th colspan="2">Type</th>
            <th>Points</th>
            <th colspan="3">Action</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td colspan="2">[5]</td>
            <td>[6]</td>
            <td>[7]</td>
            <td>[8]</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td colspan="2">&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>With the help of checkboxes, one can select several questions and perform batch processing of them ([11], [12]); </li>
    <li>Question ID on the website; </li>
    <li>Question subject; </li>
    <li>Question text; </li>
    <li>Question type; </li>
    <li>Points given for the question; </li>
    <li><img src="images/button-stats.gif">&nbsp;Switch to the question statistics page; </li>
    <li><img src="images/button-edit.gif">&nbsp;Switch to the question editing page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the question; </li>
    <li><img src="images/button-new.gif">&nbsp;Switch to the new question creation page; </li>
    <li><img src="images/button-edit.gif">&nbsp;Switch to the page of statistics gathered for the selected ([1]) questions; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the selected ([1]) questions; </li>
    <li>Selecting a subject and viewing the questions, which correspond with the chosen subject only; </li>
    <li>Numbers of records displayed on the current page, and total amount of records; </li>
    <li>Page numbers, pressing on which would direct you to the corresponding pages; </li>
    <li><img src="images/button-first.gif">&nbsp;Switch to the first page of the question list; </li>
    <li><img src="images/button-prev.gif">&nbsp;Switch to the previous page; </li>
    <li><img src="images/button-next.gif">&nbsp;Switch to the next page; </li>
    <li><img src="images/button-last.gif">&nbsp;Switch to the last page. </li>
</ol>
<p>The navigation buttons (<img src="images/button-first.gif">, <img src="images/button-first.gif">, <img src="images/button-prev.gif">,<img src="images/button-last.gif">) are active, if the list occupies more than one page.</p>


<?php

require_once('footer.inc.php');

?>