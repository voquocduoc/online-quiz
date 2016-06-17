<?php

require_once('header.inc.php');

?>

<h1>Test Questions</h1>
<p>The page allows one to make up and edit a question set for the test.</p>
<p>The first table shows the questions already included in the test.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="11">
            <span class="left">&nbsp;[12] [13] [14] [15]</span>
            <span class="right">&nbsp;[16] [17] [18] [19] [20] [21]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>Seq</th>
            <th>ID</th>
            <th>Subject</th>
            <th>Question</th>
            <th>Question Type</th>
            <th colspan="2">Points</th>
            <th colspan="3">Action</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
            <td>[6]</td>
            <td colspan="2">[7]</td>
            <td>[8]</td>
            <td>[9]<br>
          	[10]</td>
            <td>[11]</td>
        </tr>
        <tr>
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
    <li>Allows one to select several questions with the help of the checkboxes and perform a batch operation ([14]); </li>
    <li>The question sequence in the test. It can be changed by the shuffle questions setting on the &ldquo;Test Properties&rdquo;  page; </li>
    <li>Question ID on the website; </li>
    <li>Question subject; </li>
    <li>Question text; </li>
    <li>Question type; </li>
    <li>Points received by a user for a correct answer; </li>
    <li><img src="images/button-edit.gif">&nbsp;Switch to the question editing page; </li>
    <li><img src="images/button-up.gif">&nbsp;Move the question one line up; </li>
    <li><img src="images/button-down.gif">&nbsp;Move the question one line down; </li>
    <li><img src="images/button-cross.gif">&nbsp;Exclude the question from the test; </li>
    <li><img src="images/button-add.gif">&nbsp;Switch to the page, which allows creating a new question and adding it to the test; </li>
    <li><img src="images/button-import.gif">&nbsp;Switch to the questions import page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Exclude the selected ([1]) questions from the test; </li>
    <li>Select a topic of the displayed questions, which refer to the chosen subject. </li>
    <li>Numbers of records displayed on the current page, and total amount of records; </li>
    <li>Page numbers, pressing on which would direct you to the corresponding pages; </li>
    <li><img src="images/button-first.gif">&nbsp;Switch to the first page of the question list; </li>
    <li><img src="images/button-prev.gif">&nbsp;Switch to the previous page; </li>
    <li><img src="images/button-next.gif">&nbsp;Switch to the next page; </li>
    <li><img src="images/button-last.gif">&nbsp;Switch to the last page. </li>
</ol>
<p>The second table shows the questions from the <strong>&ldquo;Question Bank&rdquo;</strong>, which are included in your test.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="10"><span align=left>[10] [11] [12]</span>
            <span class="right">[13] [14] [15] [16] [17] [18]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Subject</th>
            <th>Question</th>
            <th>Question Type</th>
            <th colspan="2">Points</th>
            <th colspan="3">Action</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
            <td colspan="2">[6]</td>
            <td>[7]</td>
            <td>[8]</td>
            <td>[9]</td>
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
    <li>Allows one to select several questions with the help of the checkboxes and perform a batch operation ([11] [12]); </li>
    <li>Question ID on the website; </li>
    <li>Question subject; </li>
    <li>Question text; </li>
    <li>Question type; </li>
    <li>Scores earned by a user for a correct answer; </li>
    <li><img src="images/button-plus.gif">&nbsp;Add the question to the test; </li>
    <li><img src="images/button-edit.gif">&nbsp;Switch to the question editing page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the question from the <strong>&ldquo;Question Bank&rdquo;</strong> ; </li>
    <li><img src="images/button-new.gif">&nbsp;Switch to the page for creation of a new question; </li>
    <li><img src="images/button-plus.gif">&nbsp;Add the selected ([1]) questions to the test; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the selected ([1]) questions from the <strong>&ldquo;Question Bank&rdquo;</strong> ; </li>
    <li>Numbers of records displayed on the current page, and total amount of records; </li>
    <li>Page numbers, pressing on which would direct you to the corresponding pages; </li>
    <li><img src="images/button-first.gif">&nbsp;Switch to the first page of the question list; </li>
    <li><img src="images/button-prev.gif">&nbsp;Switch to the previous page; </li>
    <li><img src="images/button-next.gif">&nbsp;Switch to the next page; </li>
    <li><img src="images/button-last.gif">&nbsp;Switch to the last page. </li>
</ol>

<?php

require_once('footer.inc.php');

?>