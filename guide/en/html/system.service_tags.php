<?php

require_once('header.inc.php');

?>

<h1>Service tags</h1>
<p>Service tags are used in template creation. With the help of a template, when you create an e-mail message (as well as a report or a certificate), the tags are substituted by corresponding data (user data, test results, etc.).</p>
<table class="cmn">
    <tbody>
        <tr>
            <th>Tag name</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>[USER_ID]</td>
            <td>User ID on the website</td>
        </tr>
        <tr>
            <td>[USERNAME]</td>
            <td>Username on the website</td>
        </tr>
        <tr>
            <td>[USER_PASSWORD]</td>
            <td>User password</td>
        </tr>
        <tr>
            <td>[USER_CHECKWORD]</td>
            <td>User account check word</td>
        </tr>
        <tr>
            <td>[USER_TITLE]</td>
            <td>Title</td>
        </tr>
        <tr>
            <td>[USER_FIRST_NAME]</td>
            <td>First name</td>
        </tr>
        <tr>
            <td>[USER_LAST_NAME]</td>
            <td>Last name</td>
        </tr>
        <tr>
            <td>[USER_MIDDLE_NAME]</td>
            <td>Middle name</td>
        </tr>
        <tr>
            <td>[USER_E-MAIL]</td>
            <td>E-mail address</td>
        </tr>
        <tr>
            <td>[USER_ADDRESS]</td>
            <td>Address</td>
        </tr>
        <tr>
            <td>[USER_CITY]</td>
            <td>City</td>
        </tr>
        <tr>
            <td>[USER_STATE]</td>
            <td>State/province</td>
        </tr>
        <tr>
            <td>[USER_ZIP]</td>
            <td>Zip/postal code</td>
        </tr>
        <tr>
            <td>[USER_COUNTRY]</td>
            <td>Country</td>
        </tr>
        <tr>
            <td>[USER_PHONE]</td>
            <td>Phone</td>
        </tr>
        <tr>
            <td>[USER_FAX]</td>
            <td>Fax</td>
        </tr>
        <tr>
            <td>[USER_MOBILE]</td>
            <td>Mobile</td>
        </tr>
        <tr>
            <td>[USER_PAGER]</td>
            <td>Pager</td>
        </tr>
        <tr>
            <td>[USER_IPPHONE]</td>
            <td>IP phone</td>
        </tr>
        <tr>
            <td>[USER_WEBPAGE]</td>
            <td>Web page</td>
        </tr>
        <tr>
            <td>[USER_ICQ]</td>
            <td>ICQ</td>
        </tr>
        <tr>
            <td>[USER_MSN]</td>
            <td>MSN</td>
        </tr>
        <tr>
            <td>[USER_AOL]</td>
            <td>AOL</td>
        </tr>
        <tr>
            <td>[USER_GENDER]</td>
            <td>Gender</td>
        </tr>
        <tr>
            <td>[USER_HUSBANDWIFE]</td>
            <td>Husband (wife)</td>
        </tr>
        <tr>
            <td>[USER_CHILDREN]</td>
            <td>Children</td>
        </tr>
        <tr>
            <td>[USER_TRAINER]</td>
            <td>Trainer</td>
        </tr>
        <tr>
            <td>[USER_COMPANY]</td>
            <td>Company</td>
        </tr>
        <tr>
            <td>[USER_CPOSITION]</td>
            <td>Position</td>
        </tr>
        <tr>
            <td>[USER_CDEPARTMENT]</td>
            <td>Department</td>
        </tr>
        <tr>
            <td>[USER_COFFICE]</td>
            <td>Office</td>
        </tr>
        <tr>
            <td>[USER_CADDRESS]</td>
            <td>Address (for a company)</td>
        </tr>
        <tr>
            <td>[USER_CCITY]</td>
            <td>City (for a company)</td>
        </tr>
        <tr>
            <td>[USER_CSTATE]</td>
            <td>State/province (for a company)</td>
        </tr>
        <tr>
            <td>[USER_CZIP]</td>
            <td>Zip/postal code (for a company)</td>
        </tr>
        <tr>
            <td>[USER_CCOUNTRY]</td>
            <td>Country (for a company)</td>
        </tr>
        <tr>
            <td>[USER_CPHONE]</td>
            <td>Phone (for a company)</td>
        </tr>
        <tr>
            <td>[USER_CFAX]</td>
            <td>Fax (for a company)</td>
        </tr>
        <tr>
            <td>[USER_CMOBILE]</td>
            <td>Mobile (for a company)</td>
        </tr>
        <tr>
            <td>[USER_CPAGER]</td>
            <td>Pager (for a company)</td>
        </tr>
        <tr>
            <td>[USER_CIPPHONE]</td>
            <td>IP phone (for a company)</td>
        </tr>
        <tr>
            <td>[USER_CWEBPAGE]</td>
            <td>Webpage (for a company)</td>
        </tr>
        <tr>
            <td>[USER_USERFIELD1]</td>
            <td>Custom field #1</td>
        </tr>
        <tr>
            <td>[USER_USERFIELD2]</td>
            <td>Custom field #2</td>
        </tr>
        <tr>
            <td>[USER_USERFIELD3]</td>
            <td>Custom field #3</td>
        </tr>
        <tr>
            <td>[USER_USERFIELD4]</td>
            <td>Custom field #4</td>
        </tr>
        <tr>
            <td>[USER_USERFIELD5]</td>
            <td>Custom field #5</td>
        </tr>
        <tr>
            <td>[USER_USERFIELD6]</td>
            <td>Custom field #6</td>
        </tr>
        <tr>
            <td>[USER_USERFIELD7]</td>
            <td>Custom field #7</td>
        </tr>
        <tr>
            <td>[USER_USERFIELD8]</td>
            <td>Custom field #8</td>
        </tr>
        <tr>
            <td>[USER_USERFIELD9]</td>
            <td>Custom field #9</td>
        </tr>
        <tr>
            <td>[USER_USERFIELD10]</td>
            <td>Custom field #10</td>
        </tr>
        <tr>
            <td>[TEST_ID]</td>
            <td>Test ID on the website</td>
        </tr>
        <tr>
            <td>[TEST_NAME]</td>
            <td>Test name</td>
        </tr>
        <tr>
            <td>[RESULT_ID]</td>
            <td>Test result ID</td>
        </tr>
        <tr>
            <td>[RESULT_DATE]</td>
            <td>Test passing date</td>
        </tr>
        <tr>
            <td>[RESULT_TIME_SPENT]</td>
            <td>Time spent for passing the test</td>
        </tr>
        <tr>
            <td>[RESULT_TIME_EXCEEDED]</td>
            <td>If the test passing time limit was exceeded</td>
        </tr>
        <tr>
            <td>[RESULT_POINTS_SCORED]</td>
            <td>Number of points scored</td>
        </tr>
        <tr>
            <td>[RESULT_POINTS_POSSIBLE]</td>
            <td>Maximum possible number of points for the test</td>
        </tr>
        <tr>
            <td>[RESULT_PERCENTS]</td>
            <td>Percentage of points scored to the maximum possible number of points</td>
        </tr>
        <tr>
            <td>[RESULT_GRADE]</td>
            <td>Grade received for the test</td>
        </tr>
        <tr>
            <td>[RESULT_GRADE_FEEDBACK]</td>
            <td>Feedback text of the grade received for the test</td>
        </tr>
        <tr>
            <td>[RESULT_DETAILED_1]</td>
            <td>Detailed information about each answer to the test questions, including:</p>
            <ul>
                <li>Short text of each question </li>
                <li>Whether the given answer is correct </li>
                <li>Points scored for the answer </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td>[RESULT_DETAILED_2]</td>
            <td>Detailed information about each incorrect answer to the test questions, including:</p>
            <ul>
                <li>Short text of each question answered incorrectly </li>
                <li>Whether the given answer is correct </li>
            </ul>
            <ul>
                <li>Points scored for the answer </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td>[RESULT_DETAILED_3]</td>
            <td>Detailed information about each answer to the test questions, including:</p>
            <ul>
                <li>Full text of each question </li>
                <li>Full text of answer variants </li>
                <li>Correct answer </li>
                <li>User&rsquo;s answer </li>
                <li>Whether the given answer is correct </li>
                <li>Points scored for the answer </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td>[RESULT_DETAILED_4]</td>
            <td>Detailed information about each incorrect answer to the test questions, including:</p>
            <ul>
                <li>Full text of each question answered incorrectly </li>
                <li>Full text of answer variants </li>
                <li>Correct answer </li>
                <li>User&rsquo;s answer </li>
                <li>Whether the given answer is correct </li>
                <li>Points scored for the answer </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td>[IGIVETEST_URL]</td>
            <td>Complete URL path to the iGiveTest system</td>
        </tr>
        <tr>
            <td>[PAGE_BREAK]</td>
            <td>Page break (allows one to explicitly specify the page end, for example, for reports in PDF format or test instructions)</td>
        </tr>
    </tbody>
</table>

<?php

require_once('footer.inc.php');

?>