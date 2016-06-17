<?php

require_once('header.inc.php');

?>

<h2>Visitor details</h2>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Visitor ID:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Time spent:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">User:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Hits:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Start date:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Entry page:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">End date:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Exit page:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">IP-address:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Host name:</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">Referrer:</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td class="td-bg">User agent:</td>
            <td>[12]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Visitor ID; </li>
    <li>Time spent on the session; </li>
    <li>User data in the system (if the user is unregistered, than data for the &ldquo;Guest&rdquo;  user will be displayed); </li>
    <li>A total number of pages visited by a user (including repeated ones); </li>
    <li>Date and time of the beginning of the session; </li>
    <li>The link to the page at which the session started; </li>
    <li>Date and time of session end; </li>
    <li>The link to the page the session ended at; </li>
    <li>Computer IP-address; </li>
    <li>Domain name, corresponding with the&nbsp;IP-address; </li>
    <li>Link to the page the user came from; </li>
    <li>User agent (browser); </li>
</ol>

<?php

require_once('footer.inc.php');

?>