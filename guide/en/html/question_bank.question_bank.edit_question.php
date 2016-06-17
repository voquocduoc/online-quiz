<?php

require_once('header.inc.php');

?>
<h2>Creation/editing a question</h2>
<p>This page enables one to create a new question or to edit an existing one.</p>
<p>If one selects &laquo;Multiple-choice&raquo;, &laquo;Multiple-answer&raquo; or &laquo;True-False&raquo; as a question type, the page would look as following:</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Question type:</td>
            <td colspan="2">[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Question subject:</td>
            <td colspan="2">[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Number of answers:</td>
            <td colspan="2">[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Question:</td>
            <td colspan="2">[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Choice1:</td>
            <td>[5]</td>
            <td>[6]<br>
            	[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Feedback 1:</td>
            <td colspan="2">[8]
            </td>
        </tr>
        <tr>
            <td class="td-bg">Choice 2:</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
        <tr>
            <td class="td-bg">&hellip;</td>
            <td colspan="2">&hellip;</td>
        </tr>
        <tr>
            <td class="td-bg">Point value:</td>
            <td colspan="2">[9]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Select question type; </li>
    <li>Select a subject, to which the question refers; </li>
    <li>Select a number of answers. If the number of answers on the page (the default value is five answers) is enough for you, then you can ignore this field; </li>
    <li>HTML-editor for entering the text of a question. A question can contain any formatted text, graphical object, animation, audio and video; </li>
    <li>Text of one of the answer variants; </li>
    <li>The checkbox for selecting whether the answer is correct or not; </li>
    <li>Fine adjustment of answers, which allows to specify how accurate the answer is (how many per cents of total rate will be given in case the specific variant is chosen); </li>
    <li>The feedback text to be displayed when the specified answer is chosen; </li>
    <li>Number of points given for answering the question. </li>
</ol>
<p>If the question type is <strong>&ldquo;Short answer&rdquo;</strong>,the page will remain the same, with the only difference that in the field for entering the text of answer variant ([5]), you should enter exactly what a user taking the test should type as a correct answer.</p>
<p>If there is more than one correct answer variant, then simply set the number of variants ([3]), and then specify the texts of each variant in a separate question type ([5]).</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Question type:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Question subject:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Number of answers:</td>
            <td>1</td>
        </tr>
        <tr>
            <td class="td-bg">Question:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Choice1:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Point value:</td>
            <td>[9]</td>
        </tr>
    </tbody>
</table>
<p>Since the questions of the <strong>&ldquo;Essay&rdquo;</strong>  type usually does not provide for a precise list of exact correct answers and evaluation is performed manually after the test is done, the page does not contain fields for entering correct answers:</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Question type:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Question subject:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Number of answers:</td>
            <td>n/a</td>
        </tr>
        <tr>
            <td class="td-bg">Question:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Point value:</td>
            <td>[9]</td>
        </tr>
    </tbody>
</table>
<p>The question of the <strong>&ldquo;Random question&rdquo;</strong> typeis actuallya directive to insert an arbitrary (new for each new testing) question on specified subject ([2]).</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Question type:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Question subject:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Question name:</td>
            <td>[10]</td>
        </tr>
    </tbody>
</table>
<ol start="10">
    <li>The name of a question. It is displayed in Question Bank and Test Manager instead of question text. It serves as a note for a test compiler. </li>
</ol>
<p>Thus, for example, if you have a set of questions, from which you want to arbitrarily select 3 questions, you must simply:</p>
<ol>
<li>Make sure that one and the same subject is selected on all question editing pages of the set (i.e. all questions should be combined into one subject);</li>
<li>Create the question of &ldquo;Random question&rdquo;  type, and select a subject in the list;</li>
<li>Add the received random question to the test as many times as it is necessary (in this case, 3 times).</li>
</ol>


<?php

require_once('footer.inc.php');

?>