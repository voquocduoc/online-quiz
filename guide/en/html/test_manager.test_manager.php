<?php

require_once('header.inc.php');

?>
<h1>Test Manager</h1>
<p>The section allows creating and editing tests on the basis of the questions of the <strong>&ldquo;Question bank&rdquo;</strong>.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="12">
            <span class="left">[13] [14] [15] [16]</span>
            <span class="right">[17] [18] [19] [20] [21] [22]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>N</th>
            <th>Test Name</th>
            <th>Subject</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Active</th>
            <th colspan="4">Action</th>
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
            <td>[9]</td>
            <td>[10]</td>
            <td>[11]</td>
            <td>[12]</td>
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
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Allows for the selection of several tests with the help of checkboxes and accomplishes a batch operation with them ([14], [15]); </li>
    <li>Test ID on the website; </li>
    <li>Notes about the test, created by the compiler in the &ldquo;Test properties&rdquo; ; </li>
    <li>Test name; </li>
    <li>Test subject; </li>
    <li>The date, from which the test becomes available; </li>
    <li>The date, until which the test is available; </li>
    <li>Allows to see whether the test is active (available for being taken), and change the activity condition by pressing the checkbox; </li>
    <li><img src="images/button-gear.gif">&nbsp;Switch to the page for viewing and editing of test settings; </li>
    <li><img src="images/button-groups.gif">&nbsp;Switch to the page for assigning the test to a user group; </li>
    <li><img src="images/button-edit.gif">&nbsp;Switch to the page for viewing and editing test questions; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the selected question; </li>
    <li><img src="images/button-new.gif">&nbsp;Switch to the new test creation page; </li>
    <li><img src="images/button-groups.gif">&nbsp;Assign the selected ([1]) tests to a user group; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the selected ([1]) tests; </li>
    <li>Subject selection and displaying of the tests by a specified subject;</li>
    <li>Numbers of records displayed on the current page, and total amount of records; </li>
    <li>Page numbers, pressing on which would direct you to the corresponding pages; </li>
    <li><img src="images/button-first.gif">&nbsp;Switch to the first page of the test list; </li>
    <li><img src="images/button-prev.gif">&nbsp;Switch to the previous page; </li>
    <li><img src="images/button-next.gif">&nbsp;Switch to the next page; </li>
    <li><img src="images/button-last.gif">&nbsp;Switch to the last page. </li>
</ol>


<?php

require_once('footer.inc.php');

?>