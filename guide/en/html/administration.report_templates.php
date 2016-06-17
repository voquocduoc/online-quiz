<?php

require_once('header.inc.php');

?>

<h1>Reports templates</h1>
<p>The subsection is designed for creation and editing of templates of different reports and certificates. A report/certificate may be presented in PDF format, or as a usual HTML page.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="7"><span align=left>[7] [8]</span>
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
    <li>Allows to select several report templates with the help of the checkboxes and perform a batch operation ([8]); </li>
    <li>Template ID at the site; </li>
    <li>Report template name; </li>
    <li>Report template short description; </li>
    <li><img src="images/button-edit.gif">&nbsp;Switch to the template editing page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the template; </li>
    <li><img src="images/button-new.gif">&nbsp;Switch to the creation of a new template page; </li>
    <li><img src="images/button-cross.gif">&nbsp;Delete the selected ([1]) templates; </li>
    <li>Numbers of records displayed on the current page, and total amount of records; </li>
    <li>Page numbers, with links to the corresponding pages; </li>
    <li><img src="images/button-first.gif">&nbsp;Switch to the first page of the template list; </li>
    <li><img src="images/button-prev.gif">&nbsp;Switch to the previous page; </li>
    <li><img src="images/button-next.gif">&nbsp;Switch to the next page; </li>
    <li><img src="images/button-last.gif">&nbsp;Switch to the last page. </li>
</ol>

<?php

require_once('footer.inc.php');

?>