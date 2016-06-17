<?php

require_once('header.inc.php');

?>

<h2>Answer to a question</h2>
<p>The page allows one to gather detailed statistics about the user&rsquo;s answers.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th>Seq</th>
            <th>#</th>
            <th>Time</th>
            <th>Points</th>
            <th>Time Exc.</th>
            <th>Correct</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
            <td>[6]</td>
            <td>[7]</td>
            <td>[8]</td>
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
        </tr>
    </tbody>
</table>
<ol>
    <li>Order of questions in the test presented to a user; </li>
    <li>Number of questions in the test. It may differ from [1], if the test questions were shuffled; </li>
    <li>Question answering time. If you set displaying questions on separate pages, the field value will be (00:00:00). If you select displaying of all questions at a single page, the filed value will not be specified; </li>
    <li>Points scored for answering the question; </li>
    <li>The checkbox shows that the time limit for answering a question is exceeded; </li>
    <li>The checkbox signifies that the answer is correct; </li>
    <li><img src="images/button-view.gif">&nbsp;The feature for viewing answer details (question text, the user&rsquo;s answer, and the correct answer); </li>
    <li><img src="images/button-edit.gif">&nbsp;Switch to the question editing page. </li>
</ol>

<?php

require_once('footer.inc.php');

?>