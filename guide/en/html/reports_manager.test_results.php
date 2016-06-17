<?php

require_once('header.inc.php');

?>

<h1>Reports Manager</h1>
<p>This section allows you to view and analyze test results.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="15">
            <span class="left">[16] [17] [18]</span>
            <span class="right">[19] [20] [21] [22] [23] [24]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Date</th>
            <th>Username</th>
            <th>Test Name</th>
            <th>Attempts Exc.</th>
            <th>Time Exc.</th>
            <th>Points Scored</th>
            <th colspan="2">Points Possible</th>
            <th>Score</th>
            <th>Grade</th>
            <th colspan="3">Action</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4][5]</td>
            <td>[6]</td>
            <td>[7]</td>
            <td>[8]</td>
            <td>[9]</td>
            <td colspan="2">[10]</td>
            <td>[11]</td>
            <td>[12]</td>
            <td>[13]</td>
            <td>[14]</td>
            <td>[15]</td>
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
            <td colspan="2">&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Allows one to select several test results (reports) with the help of the checkboxes and perform a batch operation ([15]); </li>
    <li>Report ID at the website; </li>
    <li>The date the test was passed; </li>
    <li>User, which passed the test. You can view on a specific user by clicking on the username; </li>
    <li>User ID. This link allows you to view and edit user profiles; </li>
    <li>Test name. Clicking on the test name, you can view the report on this specific test; </li>
    <li>If the checkbox is enabled, it means that the limit of attempts to pass the test is exceeded. An administrator or a user (if one has corresponding rights) can enable or disable this checkbox in order to reset the attempts counter and allow the user to try to pass the test once again; </li>
    <li>This flag shows that the time limit for test passing is exceeded; </li>
    <li>Points scored for the test; </li>
    <li>Maximum score for the test; </li>
    <li>Maximum possible number of points scored for a test (per cent); </li>
    <li>Grade for the test. It becomes available if grade displaying is set in the test settings; </li>
    <li><img src="images/button-stats.gif">&nbsp;Switch to the page of detailed statistics of answers to the test questions; </li>
    <li><img src="images/button-pdf.gif">&nbsp;Get a certificate/extended report in PDF format. <img src="images/button-pdf-inactive.gif">&nbsp;signifies that a certificate/extended report is not identified; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the report; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the selected ([1]) reports; </li>
    <li>Select a user, about whom you want to receive a report selection; </li>
    <li>Select a test, about which you want to receive a report selection; </li>
    <li>Numbers of records displayed on the current page, and total amount of records; </li>
    <li>Page numbers, pressing on which would direct you to the corresponding pages; </li>
    <li><img src="images/button-first.gif">&nbsp;Switch to the first page of the report list; </li>
    <li><img src="images/button-prev.gif">&nbsp;Switch to the previous page; </li>
    <li><img src="images/button-next.gif">&nbsp;Switch to the next page; </li>
    <li><img src="images/button-last.gif">&nbsp;Switch to the last page. </li>
</ol>

<?php

require_once('footer.inc.php');

?>