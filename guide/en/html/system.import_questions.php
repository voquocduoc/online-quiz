<?php

require_once('header.inc.php');

?>

<h1>Importing tests/test questions from text documents</h1>
<p>Quite often, it is necessary to transfer tests from a text document (and sometimes it is easier to create a test with the help of a ordinary text editor), However, it becomes quite tiresome if one has to enter questions and answers to the fields manually.</p>
<p>An importing system was developed specifically for this purpose. This system allows you to import tests created in a text editor almost automatically.</p>
<h2>Structuring a document before importing</h2>
<p>Tests created in a text editor should meet several requirements in order to make the tests unambiguously importable.</p>
<p><strong>First of all</strong>, there should be a certain look-and-feel principle (i.e. a structure) for any document. A document as a whole can be divided into several elements, and such separate elements will be:</p>
<ul>
    <li>Text of each question </li>
    <li>Question type indicator </li>
    <li>Text of each answer variant </li>
    <li>Text of each comment to a question (feedback) </li>
    <li>Correct answer indicator </li>
    <li>Scores earned for a correct answer </li>
    <li>Question subject indicator </li>
    <li>The instructions to each question </li>
    <li>General question feedback in case the answer is correct </li>
    <li>General question feedback in case the answer is incorrect </li>
</ul>
<p><strong>Each element should have a certain prefix. Such a prefix can be any (user-defined) character set.</strong>
<p>For example, if you want to import the following test questions:</p>
<p class="example">Select the best answer to the question.
<br><strong>In contemporary post-industrial society which of the following is the leading hand:</strong>
<br>&nbsp;extractive industry
<br>&nbsp;manufacturing industry
<br>&nbsp;agriculture
<br>&nbsp;information technologies (*)
<br><br>Select all correct answers to the question.
<br><strong>As distinct from nature, society:</strong>
<br>&nbsp;Is a system
<br>&nbsp;Is developing
<br>&nbsp;Is the maker of culture (*)
<br>&nbsp;Begins with the letter &ldquo;s&rdquo; (*)
<br>...</p>
<p>The &ldquo;(*)&rdquo; indicates that the answer is correct. Then, it will be logical to present it in the following form:</p>
<p><span class="prefix">[Question prefix]</span> <span class="value"><strong>In contemporary post-industrial society which of the following is the leading hand:</strong></span>
<br><span class="prefix">[Question instructions prefix]</span> <span class="value"> Select the best answer to the question. </span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">extractive industry</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">manufacturing industry</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">agriculture</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">information technologies</span>
<br><span class="prefix">[Correct answer value prefix]</span> <span class="value">4</span>
<br><span class="prefix">[Question prefix]</span> <span class="value"><strong>As distinct from nature, society:</strong></span>
<br><span class="prefix">[Question instructions prefix]</span> <span class="value"> Select all correct answers to the question. </span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Is a system</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Is developing</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Is the maker of culture</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value"> Begins with the letter &ldquo;s&rdquo; </span>
<br><span class="prefix">[Correct answer value prefix]</span> <span class="value">3+4</span>
<br><span class="prefix">[Question prefix]</span> <span class="value">...</span></p>
<p>Therefore, there can be any text (as well as graphics, Flash, audio and video) inside an element, except for the prefixes of this (or any other) elements. In a situation when a prefix is repeated within an element, the system decides that this element is finished, and will start a new element (corresponding to the prefix).</p>
<p>For example, let us choose prefixes of the <span class="prefix">question</span> type (for a question), <span class="prefix">answer</span> (for an answer variant) and <span class="prefix">correct</span> (for the correct answer indicator):</p>
<p><span class="prefix">question</span>  <strong><span class="value">In the alphabet, which vowels are placed between the letters &ldquo;D&rdquo; and &ldquo;K&rdquo;? When <span class="prefix">answer</span>ing the <span class="prefix">question</span>, please select all correct <span class="prefix">answer</span>s.</span></strong>
<br><span class="prefix">answer</span> <span class="value"> A</span>
<br><span class="prefix">answer</span> <span class="value"> E</span>
<br><span class="prefix">answer</span> <span class="value"> I</span>
<br><span class="prefix">answer</span> <span class="value"> O</span>
<br><span class="prefix">answer</span> <span class="value"> U</span>
<br><span class="prefix">correct</span> <span class="value"> 2,3</span></p>
<p>This example would result in importing two wrong questions instead of the one we need. That is to say, the first question would be &ldquo;Which vowels are placed between the letters &ldquo;D&rdquo; and &ldquo;K&rdquo;? When &rdquo; with the only answer variant &ldquo;ing the&rdquo; and without correct answers, while the second question would be &ldquo;, please select all correct&rdquo; with &nbsp;&ldquo;s&rdquo;, &ldquo;A,&rdquo; &ldquo;E,&rdquo; &ldquo;I,&rdquo; &ldquo;O,&rdquo; and &ldquo;U&rdquo;. At that, the correct answer will be &ldquo;A&rdquo; and &ldquo;E&rdquo; instead of &ldquo;E&rdquo; and &ldquo;I.&rdquo;</p>
<p>That is why it is advisable to use character sets, which are unlikely to occur in the texts itself. For instance, prefixes such as <span class="prefix">%question%</span>, <span class="prefix">%answer%</span>, and <span class="prefix">%correct%</span> (or, e.g., <span class="prefix">%q</span>, <span class="prefix">%a</span>, <span class="prefix">%c</span>) would rarely occur in any text:</p>
<p><span class="prefix">%question%</span> <strong><span class="value"> In the alphabet, which vowels are placed between the letters &ldquo;D&rdquo; and &ldquo;K&rdquo;?</span></strong>
<br><span class="prefix">%answer%</span> <span class="value"> A</span>
<br><span class="prefix">%answer%</span> <span class="value"> E</span>
<br><span class="prefix">%answer%</span> <span class="value"> I</span>
<br><span class="prefix">%answer%</span> <span class="value"> O</span>
<br><span class="prefix">%answer%</span> <span class="value"> U</span>
<br><span class="prefix">%correct%</span> <span class="value"> 2,3</span></p>
<p>It is also necessary to avoid prefixes, which contain another prefix, since they might be interpreted ambiguously.</p>
<p>For example, when using the <span class="prefix">%q</span> prefix (the prefix for the question text) and <span class="prefix">%qtype</span> (the prefix for a question type), it becomes unclear what should be done if the <span class="prefix">&ldquo;%qtype&rdquo;</span> character string occurs. In some cases, this might be the text of a question itself (since it contains the prefix for a question <span class="prefix">%q</span>), while in other cases it is a prefix for a question type.</p>
<p><strong>In the second place</strong>, when creating a question it is necessary to keep a certain order, otherwise it would be unclear where one question ends, and another begins.</p>
<p><strong>The first element in a question must be the question itself (the text of the question), and all other elements should follow it.</strong>
<p>For example, it would be incorrect to do as follows:</p>
<p><span class="prefix">[Question instructions prefix]</span> <span class="value">Question instructions prefix #1</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Answer #1 in question #1</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Answer #2 in question #1</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Answer #3 in question #1</span>
<br><span class="prefix">[Question prefix]</span> <span class="value"><strong>Question #1</strong></span>
<br><span class="prefix">[Correct answer value prefix]</span> <span class="value">1,3</span>
<br><span class="prefix">[Question instructions prefix]</span> <span class="value">Question instructions prefix #2</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Answer #1 in question #2</span>
<br><span class="prefix">[Question prefix]</span> <span class="value"><strong>Question #2</strong></span>
<br><span class="prefix">[Choice prefix]</span> <span class="value"> Answer #2 in question #2</span>
<br><span class="prefix">[Correct answer value prefix]</span> <span class="value">1</span>
<br>...</p>

<p>The question itself must be the first element. For example:</p>
<p><span class="prefix">[Question prefix]</span> <span class="value"><strong>Question #1</strong></span>
<br><span class="prefix">[Question instructions prefix]</span> <span class="value">Question instructions prefix #1</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Answer #1 in question #1</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Answer #2 in question #1</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Answer #3 in question #1</span>
<br><span class="prefix">[Correct answer value prefix]</span> <span class="value">1,3</span>
<br><span class="prefix">[Question prefix]</span> <span class="value"><strong>Question #2</strong></span>
<br><span class="prefix">[Question instructions prefix]</span> <span class="value">Question instructions prefix #2</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Answer #1 in question #2</span>
<br><span class="prefix">[Choice prefix]</span> <span class="value">Answer #2 in question #2</span>
<br><span class="prefix">[Correct answer value prefix]</span> <span class="value">1</span>
<br>...</p>
<h3>What prefixes are and how they should be used</h3>
<p>When importing tests, one can use several different elements, which in fact are common to all tests. Let us consider each of these elements and their particular properties in more detail.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th>Element</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>Question</td>
            <td>A question can contain any information (texts with different layouts, graphics, Flash, audio and video).</td>
        </tr>
        <tr>
            <td>Question type</td>
            <td>A question type is set by a type name or by a number from 1 to 7: 1 &mdash; multiple choice, 2 &mdash; multiple answer, 3 &mdash; ordering, 4 &mdash; matching, 5 &mdash; short answer, 6 &mdash; fill-in-the-gap, and 7 &mdash; essay.</p>
            <p>For example, <span class="prefix">[Question type prefix]</span> 5 points that the current question requires direct typing.</p>
            <p>However, sometimes it is unnecessary to explicitly indicate a question type. If the form of a correct answer allows one to unambiguously set a question type (see the Correct Answer section), then it is not necessary to specify the type of a question.</p>
            <p>It is advisable to specify a question type before the answer variants (and a correct answer), so that the answer fields formatting may be accomplished according to the question type.</td>
        </tr>
        <tr>
            <td>Choice</td>
            <td>An answer can contain any information.</td>
        </tr>
        <tr>
            <td>Choice (for column 2)</td>
            <td>An answer can contain any information. This element is applied when you want to put an answer variant into the second column (the question match making column).</p>
            <p>For example:
            <br><span class="prefix">[Question prefix]</span> <span class="value">Compare the elements</span>
            <br><span class="prefix">[Question type prefix]</span> <span class="value">4</span>
            <br><span class="prefix">[Choice prefix]</span> <span class="value">Sun</span>
            <br><span class="prefix">[Choice (for column 2) prefix]</span> <span class="value">With legs</span>
            <br><span class="prefix">[Choice prefix]</span> <span class="value">Ice</span>
            <br><span class="prefix">[Choice (for column 2) prefix]</span> <span class="value">Hot</span>
            <br><span class="prefix">[Choice prefix]</span> <span class="value">Table</span>
            <br><span class="prefix">[Choice (for column 2) prefix]</span> <span class="value">Money</span>
            <br><span class="prefix">[Choice prefix]</span> <span class="value">Salary</span>
            <br><span class="prefix">[Choice (for column 2) prefix]</span> <span class="value">Cold</span>
            <br><span class="prefix">[Choice prefix]</span> <span class="value">Day</span>
            <br><span class="prefix">[Choice (for column 2) prefix]</span> <span class="value">Afternoon</span>
            <br><span class="prefix">[Correct answer value prefix]</span> <span class="value">1-2,2-4,3-1,4-3,5-5</span>
	    </td>
        </tr>
        <tr>
            <td>Choice feedback:</td>
            <td>The answer feedback may contain any information. This element is applied whenever it is necessary to assign a certain feedback text in case one or another question is chosen.</td>
        </tr>
        <tr>
            <td>Correct answer value</td>
            <td>A correct answer contains the number(s) of correct answers.</p>
            <p>For a question with a simple answer &mdash; either the number of correct answers, or several correct answers, separated by the &quot;;&quot; symbol. For example, <span class="prefix">[Correct answer value prefix]</span> <span class="value">3</span> points that the third answer is a correct one. Whereas <span class="prefix">[Correct answer value prefix]</span> <span class="value">3;5</span> points that the correct answers are both the third answer, and the fifth one.</p>
            <p>For an unordered set &mdash; listing of all correct answers&rsquo; numbers separated by the &quot;+&quot; symbol. For example, <span class="prefix">[Correct answer value prefix]</span> <span class="value">7+1+3</span> points that the set consisting of the first, third and seventh answers constitutes a correct answer.</p>
            <p>For an ordered set &mdash; listing of the numbers of all correct answers separated by the &quot;,&quot; symbol. For example, <span class="prefix">[Correct answer value prefix]</span> <span class="value">1,4,3</span> points that the chain consisting of the first, fourth and third answers constitutes a correct answer.</p>
            <p>For a correspondence question &mdash; listing of all the correspondence pairs, where the pair elements are separated by the &quot;-&quot; symbol, and the pairs themselves are separated by the &quot;,&quot; symbol. For example, <span class="prefix">[Correct answer value prefix]</span> <span class="value">1-1,2-3,3-2</span> points that the correct answer is to correspond the first element (in the first column) with the first element (in the second column), the second element with the third one, and the third element with the second one.</p>
            <p>For questions, which require direct typing of answers and/or keywords coincidence, there is no need to specify the correct answer, since it is already specified in the answer variant.</td>
        </tr>
        <tr>
            <td>Point value</td>
            <td>This element contains the number of points (presented as a positive integer), which a user earns if the answer is correct. For example, <span class="prefix">[Point value prefix]</span> <span class="value">3</span> points that the correct answer to the current question costs three points.</td>
        </tr>
        <tr>
            <td>Question subject</td>
            <td>The question subject contains either a name or a subject identifier, to which the question refers. For example, <span class="prefix">[Question subject prefix]</span> <span class="value">Physics</span> points that the current question refers to the &ldquo;Physics&rdquo; subject.<p>
            If the question refers to the subject specified in the default test settings, it is unnecessary to specify the question subject.</td>
        </tr>
        <tr>
            <td>Question instructions</td>
            <td>Question instructions can contain any kind of information.</td>
        </tr>
        <tr>
            <td>Question feedback (correct)</td>
            <td>General question feedback in case the answer is correct. It can contain any kind of information.</td>
        </tr>
        <tr>
            <td>Question feedback (incorrect)</td>
            <td>General question feedback in case the answer is incorrect. It can contain any kind of information.</td>
        </tr>
    </tbody>
</table>

<?php

require_once('footer.inc.php');

?>
