<?php

require_once('header.inc.php');

?>

<h2>Import Questions</h2>
<p>This page allows one to perform question importing from almost any text document.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="2" class="td-bg">Import this document:</td>
        </tr>
        <tr>
            <td colspan="2">[1]</td>
        </tr>
        <tr>
            <th colspan="2">Prefixes (click to show/hide)</th>
        </tr>
        <tr>
            <td class="td-bg">Question prefix:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Choice prefix:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg"><i>Choice (for column 2) prefix:</i></td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg"><i>Choice feedback prefix:</i></td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Correct answer value prefix:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Point value prefix:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Question type prefix:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Question subject prefix:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg"><i>Question instructions prefix:</i></td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg"><i>Question explanation prefix:</i></td>
            <td>[11]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Document for importing field; </li>
    <li>Prefix, which will be used for the question text field during importing; </li>
    <li>Answer variant prefix; </li>
    <li><i>Prefix for an answer variant in the second column (i.e. the second element from a comparison pair; it will be used only when importing comparison questions); (Reserved for future use)</i> </li>
    <li><i>Prefix for feedback, which will be displayed in case a user chooses the answer variant followed by this feedback text field; (Reserved for future use)</i> </li>
    <li>Correct answer index prefix; </li>
    <li>Prefix for the number of scores earned for a correct answer; </li>
    <li>Question type prefix; </li>
    <li>Question subject prefix; </li>
    <li><i>Prefix for the instructions, which will be placed before the question; (Reserved for future use)</i> </li>
    <li><i>(Reserved for future use)</i> </li>
</ol>

<?php

require_once('footer.inc.php');

?>