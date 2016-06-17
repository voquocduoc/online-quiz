<?php

require_once('header.inc.php');

?>

<h2>Creating/editing of a grade</h2>
<p>This page allows one to create a new grade or edit an existing one.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Grade ID:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Grade name:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Minimum (%):</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Maximum (%):</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Grade description:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <th colspan="2">Advanced (click to show/hide)</th>
        </tr>
        <tr>
            <td class="td-bg">Grade feedback:</td>
            <td>[6]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Grade ID in the scale; </li>
    <li>Grade name; </li>
    <li>Minimum number of scores earned for a test (per cent) enough for receiving this grade; </li>
    <li>Maximum number of scores earned for a test (per cent) enough for receiving this grade; </li>
    <li>Short comment to the grade; </li>
    <li>Allows one to assign a feedback, depending on what grade is received. Such a feedback can include any kind of test results, reports, certificates, recommendations concerning future study of the material, and/or any other results interpretation, depending on what grade was received. </li>
</ol>

<?php

require_once('footer.inc.php');

?>