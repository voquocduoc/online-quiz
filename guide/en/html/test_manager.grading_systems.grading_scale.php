<?php

require_once('header.inc.php');

?>

<h2>Grading scale</h2>
<p>The page allows creating a custom grading scale, assigning names to the grading steps, and specifying points range (per cent) for giving one or another grade.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="10"><span class="left">[11] [12]</span>
            <span class="right">[13] [14] [15] [16] [17] [18]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Minimum</th>
            <th>Maximum</th>
            <th>Name</th>
            <th colspan="2">Description</th>
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
            <td>[8]<br />[9]</td>
            <td>[10]</td>
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
    <li>Allows one to select several grades with the help of checkboxes and perform a batch operation ([11]); </li>
    <li>Grade ID in the scale; </li>
    <li>Minimum number of scores earned for a test (per cent) enough for receiving this grade; </li>
    <li>Maximum number of scores earned for a test (per cent) enough for receiving this grade; </li>
    <li>Grade name; </li>
    <li>Short comment to the grade; </li>
    <li><img src="images/button-edit.gif">&nbsp;Switch to the grade editing page; </li>
    <li><img src="images/button-up.gif">&nbsp;Move the grade one line up; </li>
    <li><img src="images/button-down.gif">&nbsp;Move the grade one line down; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the grade; </li>
    <li><img src="images/button-new.gif">&nbsp;Switch to the new grade creation page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the selected ([1]) grades; </li>
    <li>Numbers of records displayed on the current page, and total amount of records; </li>
    <li>Page numbers, pressing on which would direct you to the corresponding pages; </li>
    <li><img src="images/button-first.gif">&nbsp;Switch to the first page of the grade list; </li>
    <li><img src="images/button-prev.gif">&nbsp;Switch to the previous page; </li>
    <li><img src="images/button-next.gif">&nbsp;Switch to the next page; </li>
    <li><img src="images/button-last.gif">&nbsp;Switch to the last page. </li>
</ol>

<?php

require_once('footer.inc.php');

?>