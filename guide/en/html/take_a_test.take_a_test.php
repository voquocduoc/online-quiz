<?php

require_once('header.inc.php');

?>
<h1>Take a Test Section</h1>
<p>The testing module enables you to perform testing with the help of the <strong>&ldquo;Test Manager&rdquo;</strong>.</p>
<p>All tests assigned for a user logged in the system are presented in the form of a table.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th>Test</th>
            <th>Status</th>
            <th>Get Test</th>
        </tr>
        <tr>
            <td>[1]<br>
            	[2]</td>
            <td>[3]</td>
            <td><u>Test</u></td>
        </tr>
        <tr>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Name of the test; </li>
    <li>Description of the test; </li>
    <li>Information about test&rsquo;s availability (available, the number of allowed attempts, the date since which the test becomes available, etc.) </li>
</ol>
<p>To start testing, simply select a corresponding test from the list. The structure of the standard testing page looks as following:</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">[1]</td>
            <td class="td-bg">[2]</td>
            <td class="td-bg">[3]</td>
        </tr>
        <tr>
            <td colspan="3">[4]<br /><br /><br /></td>
        </tr>
        <tr>
            <td colspan="3" class="td-bg">[5]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Estimated time left for testing; </li>
    <li>Current position of the test (the number of the current questions and the total number of the questions); </li>
    <li>The name of the test or the name of the current section; </li>
    <li>Question(s); </li>
    <li>Navigation buttons. </li>
</ol>
<p>When testing is finished, the page with the test results (if these are necessary) are displayed. The content of the page is defined by a user, according to the test settings (name of the test, date of the test, time spent on the testing, the grade in the chosen grade system, the number of correct answers, the number of received points, and other data).</p>
<p>In addition, after testing is finished, a user can send a letter with the test results via email, build a report or a certificate (including printable PDF format), and view the page with the detailed results of the test (<a href="reports_manager.test_results.php"><strong>&ldquo;Report manager&rdquo;</strong></a>).</p>


<?php

require_once('footer.inc.php');

?>