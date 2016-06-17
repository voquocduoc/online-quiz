<?php

require_once('header.inc.php');

?>

<h1>Web-statistics</h1>
<p>The subsection provides an access to the detailed statistics about system visits.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="11">
            <span class="left">[12]</span>
            <span class="right">[13] [14] [15] [16] [17] [18]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Date</th>
            <th>Username</th>
            <th>Hits</th>
            <th>IP-Address</th>
            <th colspan="2">Host Name</th>
            <th>Referrer</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4][5]</td>
            <td>[6]</td>
            <td>[7]</td>
            <td colspan="2">[8]</td>
            <td>[9]</td>
            <td>[10]</td>
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
    <li>Allows one to select several sessions with the help of the flags and perform a batch operation ([11]); </li>
    <li>Visitor ID; </li>
    <li>Date and time of the beginning of the session; </li>
    <li>System username; </li>
    <li>User ID. This link allows you to view and edit user profiles; </li>
    <li>Number of internal hits; </li>
    <li>IP-address of the user&rsquo;s computer. The link allows to view the information about this IP-address in the WhoIs service; </li>
    <li>Domain name, corresponding to the IP-address ([6]); </li>
    <li>The page the user was forwarded from; </li>
    <li><img src="images/button-view.gif">Switch to the detailed session statistics page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete information about the session; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete information about the selected ([1]) sessions; </li>
    <li>Numbers of records displayed on the current page, and total amount of records; </li>
    <li>Page numbers, pressing on which would direct you to the corresponding pages; </li>
    <li><img src="images/button-first.gif">&nbsp;Switch to the first page of the session list; </li>
    <li><img src="images/button-prev.gif">&nbsp;Switch to the previous page; </li>
    <li><img src="images/button-next.gif">&nbsp;Switch to the next page; </li>
    <li><img src="images/button-last.gif">&nbsp;Switch to the last page. </li>
</ol>

<?php

require_once('footer.inc.php');

?>