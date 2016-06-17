<?php

require_once('header.inc.php');

?>

<h1>Grading systems</h1>
<p>The page is intended for creating of custom grading systems. It also allows to edit the existing systems.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="8"><span class="left">[8] [9]</span>
            <span class="right">[10] [11] [12] [13] [14] [15]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Name</th>
            <th colspan="2">Description</th>
            <th colspan="3">Action</th>
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
    <li>Allows one to select several grading systems with the help of the checkboxes, and perform batch operations on them ([9]); </li>
    <li>Grading system ID; </li>
    <li>Grading system name; </li>
    <li>Grading system description; </li>
    <li><img src="images/button-gear.gif">&nbsp;Switch to the grading system settings page; </li>
    <li><img src="images/button-edit.gif">&nbsp;Switch to the grading scale editing page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the grading system; </li>
    <li><img src="images/button-new.gif">&nbsp;Switch to the new grading system creation page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the selected ([1]) grading systems; </li>
    <li>Numbers of records displayed on the current page, and total amount of records; </li>
    <li>Page numbers, pressing on which would direct you to the corresponding pages; </li>
    <li><img src="images/button-first.gif">&nbsp;Switch to the first page of the grading system list; </li>
    <li><img src="images/button-prev.gif">&nbsp;Switch to the previous page; </li>
    <li><img src="images/button-next.gif">&nbsp;Switch to the next page; </li>
    <li><img src="images/button-last.gif">&nbsp;Switch to the last page. </li>
</ol>

<?php

require_once('footer.inc.php');

?>