<?php

require_once('header.inc.php');

?>

<h1>Groups</h1>
<p>The subsection contains information about user groups.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="7"><span class="left">[7] [8]</span>
            <span class="right">[9] [10] [11] [12] [13] [14]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Name</th>
            <th colspan="2">Description</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td colspan="2">[4]</td>
            <td>[5]</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td colspan="2">&hellip;</td>
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