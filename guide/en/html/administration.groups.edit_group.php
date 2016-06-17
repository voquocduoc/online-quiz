<?php

require_once('header.inc.php');

?>

<h2>Creation of group/editing of group properties</h2>
<p>The page allows one to create new groups, and edit the existing ones.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Group ID:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Group name:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Group description:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <th colspan="2">Access rights:</th>
        </tr>
        <tr>
            <td class="td-bg">Tests:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Question Bank:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Subjects:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Test manager:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Grading systems:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">E-mail templates:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Report templates:</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">Reports manager:</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td class="td-bg">Users:</td>
            <td>[12]</td>
        </tr>
        <tr>
            <td class="td-bg">Groups:</td>
            <td>[13]</td>
        </tr>
        <tr>
            <td class="td-bg">Configuration:</td>
            <td>[14]</td>
        </tr>
        <tr>
            <td class="td-bg">Web statistics:</td>
            <td>[15]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Group ID at the website; </li>
    <li>Group name; </li>
    <li>Group description; </li>
</ol>
<h3>Access rights for the user included in a specific group</h3>

<ol start="4">
<li>Select an access level for the pages of the <strong>&ldquo;Take a Test&rdquo;</strong> inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to the group users.</p>
	<li> View the list of the tests. Group users may view list of tests, but are unable to take them.</li>
	<li> Take a test. It allows group users to take tests.</li>
	</ul>
<li>Select an access level for the pages of the <strong>&ldquo;Question Bank&rdquo;</strong> inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to the group users.</li>
	<li> Read access. Group users may view information, but are unable to modify it.</li>
	<li> <i>Access to the creation and editing pages. A user can view, create, and change (but cannot delete) data.</i></li>
	<li> Full access. It allows group users to perform any operations on the data.</li>
	</ul>
<li>Select an access level for the pages of the <strong>&ldquo;Subjects&rdquo;</strong> inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to the group users.</li>
	<li> Read access. Group users may view information, but are unable to modify it.</li>
	<li> <i>Access to the creation and editing pages. A user can view, create, and change (but cannot delete) data.</i></li>
	<li> Full access. It allows group users to perform any operations on the data.</li>
	</ul>
<li>Select an access level for the pages of the <strong>&ldquo;Test Manager&rdquo;</strong> inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to group users.</li>
	<li> Read access. Group users may view information, but are unable to modify it.</li>
	<li> <i>Access to the creation and editing pages. A user can view, create, and change (but cannot delete) data.</i></li>
	<li> Full access. It allows group users to perform any operations on the data.</li>
	</ul>
<li>Select an access level for the pages of the <strong>&ldquo;Grading Systems&rdquo;</strong> inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to the group users.</li>
	<li> Read access. Group users may view information, but are unable to modify it.</li>
	<li> <i>Access to the creation and editing pages. A user can view, create, and change (but cannot delete) data.</i></li>
	<li> Full access. It allows group users to perform any operations on the data.</li>
	</ul>
<li>Select an access level for the pages of the <strong>&ldquo;E-mail Templates&rdquo;</strong> inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to the group users.</li>
	<li> Read access. Group users may view information, but are unable to modify it.</li>
	<li> <i>Access to the creation and editing pages. A user can view, create, and change (but cannot delete) data.</i></li>
	<li> Full access. It allows group users to perform any operations on the data.</li>
	</ul>
<li>Select an access level for the pages of the <strong>&ldquo;Report Templates&rdquo;</strong> inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to the group users.</li>
	<li> Read access. Group users may view information, but are unable to modify it.</li>
	<li> <i>Access to the creation and editing pages. A user can view, create, and change (but cannot delete) data.</i></li>
	<li> Full access. It allows group users to perform any operations on the data.</li>
	</ul>
<li>Select an access level for the pages of the <strong>&ldquo;Reports Manager&rdquo;</strong>  inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to the group users.</li>
	<li> Access to viewing of the user&rsquo;s test results, certificates, and reports</li>
	<li> Access to viewing of all users&rsquo; test results, certificates, and reports;</li>
	<li> <i>Access to the creation and editing pages. A user can view, create, and change (but cannot delete) data.</i></li>
	<li> Full access. It allows group users to perform any operations on the data.</li>
	</ul>
<li>Select an access level for the pages of the <strong>&ldquo;Users&rdquo;</strong> inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to the group users.</li>
	<li> Read access. Group users may view information, but are unable to modify it.</li>
	<li> <i>Access to the creation and editing pages. A user can view, create, and change (but cannot delete) data.</i></li>
	<li> Full access. It allows group users to perform any operations on the data.</li>
	</ul>
<li>Select an access level for the pages of the <strong>&ldquo;Groups&rdquo;</strong> inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to the group users.</li>
	<li> Read access. Group users may view information, but are unable to modify it.</li>
	<li> <i>Access to the creation and editing pages. A user can view, create, and change (but cannot delete) data.</i></li>
	<li> Full access. It allows group users to perform any operations on the data.</li>
	</ul>
<li>Select an access level for the pages of the <strong>&ldquo;Configuration&rdquo;</strong> inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to the group users.</li>
	<li> Read access. Group users may view information, but are unable to modify it.</li>
	<li> Full access. It allows group users to perform any operations on the data.</li>
	</ul>
<li>Select an access level for the pages of the <strong>&ldquo;Web Statistics&rdquo;</strong> inlay. Possible alternatives: </li>
	<ul>
	<li> Access is forbidden. No rights are given to the group users.</li>
	<li> Read access. Group users may view information, but are unable to modify it.</li>
	<li> Full access. It allows group users to perform any operations on the data.</li>
	</ul>
</ol>
<p>If a user is included in several groups with different access rights, then he/she obtains the maximum rights available to him/her in one of the groups (the fullest rights by each of the elements specified at least in one group).</p>

<?php

require_once('footer.inc.php');

?>