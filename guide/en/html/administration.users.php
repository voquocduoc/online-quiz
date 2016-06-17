<?php

require_once('header.inc.php');

?>

<h1>Users</h1>
<p>This subsection provides access to full information about system users. You can create new user accounts and change data/privileges of the existing ones.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="12">
            <span class="left">[12] [13] [14]</span>
            <span class="right">[15] [16] [17] [18] [19] [20]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>N</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>First Name</th>
            <th colspan="2">Last Name</th>
            <th>Active</th>
            <th colspan="3">Action</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[4]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
            <td>[6]</td>
            <td colspan="2">[7]</td>
            <td>[8]</td>
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
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Allows to select several users with the help of the checkboxes and perform a batch operation ([13] [14]); </li>
    <li>User ID at the website; </li>
    <li>Notes about the user; </li>
    <li>System username; </li>
    <li>User e-mail address; </li>
    <li>User first name; </li>
    <li>User last name; </li>
    <li>Allows one to view whether the user active, and save mode of activity by selecting/unselecting the checkbox; </li>
    <li><img src="images/button-groups.gif">&nbsp;Switch to the page of viewing and editing the lists of the groups, in which the user is included; </li>
    <li><img src="images/button-edit.gif">&nbsp;Switch to the user data editing page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the user. <img src="images/button-cross-inactive.gif">&nbsp;means that you have no right to delete this user; </li>
    <li><img src="images/button-new.gif">&nbsp;Switch to the creation of a new user page; </li>
    <li><img src="images/button-groups.gif">&nbsp;Switch to the page for assigning groups to the selected ([1]) users; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the selected ([1]) users; </li>
    <li>Numbers of records displayed on the current page, and total amount of records; </li>
    <li>Page numbers, pressing on which would direct you to the corresponding pages; </li>
    <li><img src="images/button-first.gif">&nbsp;Switch to the first page of the user list; </li>
    <li><img src="images/button-prev.gif">&nbsp;Switch to the previous page; </li>
    <li><img src="images/button-next.gif">&nbsp;Switch to the next page; </li>
    <li><img src="images/button-last.gif">&nbsp;Switch to the last page. </li>
</ol>

<?php

require_once('footer.inc.php');

?>