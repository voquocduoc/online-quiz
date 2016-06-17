<?php

require_once('header.inc.php');

?>
<h2>Creation of the test/Editing test properties</h2>
<p>This page allows either the creation of a new test, or the changing of the settings of an existing one.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="2" class="td-bg">[1] &ndash; This test is active</td>
        </tr>
        <tr>
            <td class="td-bg">Test subject:</td>
            <td>[2][3]</td>
        </tr>
        <tr>
            <td class="td-bg">Test name:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Short description:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Overall test instructions:</td>
            <td>[6]</p>
            &nbsp;</td>
        </tr>
        <tr>
            <td class="td-bg">Test start date:</td>
            <td>[7]</p>
            &nbsp;</td>
        </tr>
        <tr>
            <td class="td-bg">Test end date:</td>
            <td>[8]</p>
            &nbsp;</td>
        </tr>
        <tr>
            <td class="td-bg">Test time:</td>
            <td>[9] [10] &ndash; Do not use<br>
            [11] &ndash; End this test when the tile limit is reached</td>
        </tr>
        <tr>
            <td class="td-bg">Attempts allowed:</td>
            <td>[12]</td>
        </tr>
        <tr>
            <td class="td-bg">Grading system:</td>
            <td>[13]</td>
        </tr>
        <tr>
            <td class="td-bg">Show questions:</td>
            <td>[14]</td>
        </tr>
        <tr>
            <td class="td-bg">Shuffle options:</td>
            <td>[15] &ndash; Shuffle order of questions
            <br>[16] &ndash; Shuffle order of answers</td>
        </tr>
        <tr>
            <td class="td-bg">Test results report:</td>
            <td>[17] &ndash; Show feedback
            <br>[18] &ndash; Show grade
            <br>[19] &ndash; Show answers
            <br>[20] &ndash; Show points
            <br>Use custom template: [21]</td>
        </tr>
        <tr>
            <td class="td-bg">Advanced report:</td>
            <td>Template: [22]
            <br>Grade condition: [23]
            <br>[24] &ndash; Show printable PDF</td>
        </tr>
        <tr>
            <td class="td-bg">Send results by email:</td>
            <td>[25]
            <br>[26], [27] &ndash; send results to users</td>
        </tr>
        <tr>
            <td class="td-bg">Assigned to:</td>
            <td>[28]
            <br>[29] &ndash; Assign to everybody (overrides any settings)</td>
        </tr>
        <tr>
            <td class="td-bg">Previous test:</td>
            <td>[30]</td>
        </tr>
        <tr>
            <td class="td-bg">Next test:</td>
            <td>[31]</td>
        </tr>
        <tr>
            <td class="td-bg">Test notes (for internal use):</td>
            <td>[32]</td>
        </tr>
    </tbody>
</table>
<p>[33] [34] [35]</p>
<ol>
    <li>The flag, which controls the test&rsquo;s activity (availability); </li>
    <li>Select a subject of the test&rsquo;s main question; </li>
    <li>Link to creation and editing of subjects; </li>
    <li>The name of the test; </li>
    <li>Short description of the test, which a user can view on the &ldquo;Take a Test&rdquo;  page together with the name of the test; </li>
    <li>The editor for entering the test instructions, which are displayed before beginning the test; </li>
    <li>Select the date from which the test will be available to a user; </li>
    <li>Select the date until which the test will be available; </li>
    <li>Select maximum time for taking the test; </li>
    <li>The flag, which allows to disable test&rsquo;s time limits; </li>
    <li>Allows one to define whether the test should be closed right after the time limit exceeds, or it may be finished with time overrun; </li>
    <li>Selects the allowed number of attempts to take a test; </li>
    <li>Selects a grade system; </li>
    <li>Set the number of questions to be displayed at a single test page; </li>
    <li>Defines whether the order of the questions in the test should be randomized; </li>
    <li>Defines whether the order of the questions in the test should be randomized. This setting can be overridden by the settings of randomization of the answers to a certain question; </li>
    <li>Defines whether it is necessary to display the feedback after answering the questions; </li>
    <li>Defines whether the grade should be displayed at the testing results page; </li>
    <li>Defines whether the number of the answers should be displayed at the testing results page; </li>
    <li>Defines whether the number of points obtained should be displayed at the testing results page; </li>
    <li>Allows one to assign any template for the testing results page; </li>
    <li>Allows one to set a template for a PDF-certificate about successful completion, or any extended report, which can be viewed after the test is finished (it also can be viewed at the Report Manager page, by pressing the button <img src="images/button-pdf.gif">); </li>
    <li>Allows one to show an extended report only if the selected (or higher than the selected) resulting grade is received; </li>
    <li>Allows one to include the results to the report in PDF format; </li>
    <li>Select a template for emailing the report; </li>
    <li>E-mail addresses of the recipients, to whom the report will be sent; </li>
    <li>Enables one to specify whether this report should be emailed to the user; </li>
    <li>Allows one to select user groups, to which the test will be available; </li>
    <li>Allows one to assign availability of the test to all user groups (even to those who are not explicitly specified in [28]); </li>
    <li>Allows one to select a test, which must be taken in order to make the current test available; </li>
    <li>The next test, which will be offered to be taken after the current one is finished; </li>
    <li>Test compiler&rsquo;s note; </li>
    <li>Confirm the applied changes; </li>
    <li>Confirm the applied changes, and switch to the test questions editing page; </li>
    <li>Undo the applied changes. </li>
</ol>


<?php

require_once('footer.inc.php');

?>