<?php

require_once('header.inc.php');

?>

<h2>Assigning groups to a user</h2>
<p>The page enables one to view and change the list of groups assigned to a user.</p>
<p>The first table contains a user or a list of selected users.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="12">
            <span class="right">[12] [13] [14]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>N</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th colspan="2">Active</th>
            <th colspan="3">Action</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[4]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
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
            <td>&hellip;</td>
            <td colspan="2">&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Allows one to select several users with the help of the checkboxes and perform a batch operation ([13] [14]); </li>
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
</ol>
<p>The second table contains the system groups list:</p>
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
            <th>Member</th>
            <th colspan="2">Action</th>
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
    <li>Allows one to select several groups with the help of checkboxes, and then perform a batch operation ([9]); </li>
    <li>Group ID at the website; </li>
    <li>Group name; </li>
    <li>Short description of the group; </li>
    <li>Allows one to view whether a specific group is assigned to the user, and change mode by enabling/disabling the checkbox; </li>
    <li><img src="images/button-edit.gif">&nbsp;Switch to the group editing page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the group. <img src="images/button-cross-inactive.gif">&nbsp;means that you have no right to delete this group; </li>
    <li><img src="images/button-new.gif">&nbsp;Switch to the creation of a new user page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the selected ([1]) groups; </li>
    <li>Numbers of records displayed on the current page, and total amount of records; </li>
    <li>Page numbers, pressing on which would direct you to the corresponding pages; </li>
    <li><img src="images/button-first.gif">&nbsp;Switch to the first page of the group list; </li>
    <li><img src="images/button-prev.gif">&nbsp;Switch to the previous page; </li>
    <li><img src="images/button-next.gif">&nbsp;Switch to the next page; </li>
    <li><img src="images/button-last.gif">&nbsp;Switch to the last page. </li>
</ol>

<?php

require_once('footer.inc.php');

?>