<?php

require_once('header.inc.php');

?>

<h2>Creating/editing e-mail templates</h2>
<p>The page allows one to create a new template of an e-mail message, or edit an existing one.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Template ID:</td>
            <td>[1]</td>
            <td rowspan="6">
            [7]</td>
        </tr>
        <tr>
            <td class="td-bg">Template name:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Template description:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">From (e-mail):</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">E-mail subject:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">E-mail body:</td>
            <td>[6]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Template ID at the site; </li>
    <li>Template name; </li>
    <li>Template short description; </li>
    <li>The address the messages will be sent from; </li>
    <li>Message subject; </li>
    <li>Message text. You can use special tags in your messages ([7]) </li>
    <li>Tags for a template. When creating a message, the tags will be automatically substituted by corresponding data (for example, data about a user, some testing results, and the like) </li>
</ol>

<?php

require_once('footer.inc.php');

?>