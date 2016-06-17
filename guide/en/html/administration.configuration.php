<?php

require_once('header.inc.php');

?>

<h1>Configuration</h1>
<p>The subsection allows to view and change information about system settings.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Web site (click to show/hide)</th>
        </tr>
        <tr>
            <td class="td-bg">List length:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">WYSIWYG editor:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Web statistics:</td>
            <td>[3]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Select a number of elements in the lists (test list, question list, user list, etc) to display them at a single page; </li>
    <li>Select a text editor; </li>
    <li>Allows one to specify whether system visiting statistics should be gathered. </li>
</ol>
<p>The user registration system adjustment. Allows one to determine which fields are required to be filled and which are not. It also allows one to adjust the rules for displaying entered data.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Registration (click to show/hide)</th>
        </tr>
        <tr>
            <td class="td-bg">Allow user registration:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Upon registration:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Introduction:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Username:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Password:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">E-mail:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Title:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">First name:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Last name:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Middle name:</td>
            <td>[10]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Enables one to choose whether new users will be eligible to use automatic system registration (available at the system login page); </li>
    <li>Selecting an operation after the registration; </li>
	<ul>
	<li> Activate. Activate the user and provide an access to the system.</p>
	<li> Activate and login. Activate a user automatically, without password prompting.</p>
	<li> Do not activate, but email the link for activation. It can be used for checking whether the e-mail address entered by a user is correct.</p>
	<li> Do not activate, and use the user activation system. You can develop a custom user activation system. For example, you might want to activate a user only after one pays for his/her membership. In addition, we develop any turnkey activation systems/membership fee as well as any other plug-ins for the iGiveTest system.</p>
	</ul>
    <li>An introduction text, which will be viewed by users at the registration page; </li>
    <li>Username; </li>
	<ul>
	<li> Do not use. Do not use this field in the system.</p>
	<li> Use, but do not display. Do not show the field during registration, but use it in the system in the future (for example, display it at the user profile page).</p>
	<li> Do not display, but automatically generate. The system will not display the field during the registration, but will automatically generate a value for this field;</p>
	<li> Display, but do not require. Display the field during registration, but do not require to fill it;</p>
	<li> Display and generate automatically. Generate automatically, but display the field and allow to change field value during registration.</p>
	<li> Display and require. Display the field and require to enter information into it.</p>
	</ul>
    <li>Password; </li>
    <li>E-mail address; </li>
    <li>Title; </li>
    <li>First name; </li>
    <li>Last name; </li>
    <li>Middle name; </li>
</ol>
<p>Allows specifying the required user personal information fields and adjusting the way of how the entered data will be displayed.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Personal information (click to show/hide)</th>
        </tr>
        <tr>
            <td class="td-bg">Address:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">City:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">State/province:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Zip/postal code:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Country:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Phone:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Fax:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Mobile:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Pager:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">IP phone:</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">Web page:</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td class="td-bg">ICQ:</td>
            <td>[12]</td>
        </tr>
        <tr>
            <td class="td-bg">MSN messenger:</td>
            <td>[13]</td>
        </tr>
        <tr>
            <td class="td-bg">AOL messenger:</td>
            <td>[14]</td>
        </tr>
        <tr>
            <td class="td-bg">Gender:</td>
            <td>[15]</td>
        </tr>
        <tr>
            <td class="td-bg">Husband (wife):</td>
            <td>[16]</td>
        </tr>
        <tr>
            <td class="td-bg">Children:</td>
            <td>[17]</td>
        </tr>
        <tr>
            <td class="td-bg">Trainer:</td>
            <td>[18]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Address; </li>
    <li>City; </li>
    <li>State/province; </li>
    <li>Zip/postal code; </li>
    <li>Country; </li>
    <li>Phone; </li>
    <li>Fax; </li>
    <li>Mobile; </li>
    <li>Pager; </li>
    <li>IP phone; </li>
    <li>Web page; </li>
    <li>ICQ; </li>
    <li>MSN messenger; </li>
    <li>AOL messenger; </li>
    <li>Gender; </li>
    <li>Husband (wife); </li>
    <li>Children; </li>
    <li>Trainer; </li>
</ol>
<p>Allows one to specify users&rsquo; employment information and adjust the method of how the entered data will be displayed.</p>

<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Work information (click to show/hide)</th>
        </tr>
        <tr>
            <td class="td-bg">Company:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Position:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Department:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Office:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Address:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">City:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">State/province:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Zip/postal code:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Country:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Phone:</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">Fax:</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td class="td-bg">Mobile:</td>
            <td>[12]</td>
        </tr>
        <tr>
            <td class="td-bg">Pager:</td>
            <td>[13]</td>
        </tr>
        <tr>
            <td class="td-bg">IP phone:</td>
            <td>[14]</td>
        </tr>
        <tr>
            <td class="td-bg">Web page:</td>
            <td>[15]</td>
        </tr>
    </tbody>
</table>

<ol>
    <li>Company; </li>
    <li>Position; </li>
    <li>Department; </li>
    <li>Office; </li>
    <li>Address; </li>
    <li>City; </li>
    <li>State/province: </li>
    <li>Zip/postal code; </li>
    <li>Country; </li>
    <li>Phone; </li>
    <li>Fax; </li>
    <li>Mobile; </li>
    <li>Pager; </li>
    <li>IP phone; </li>
    <li>Web page; </li>
</ol>

<p>Allows one to include up to 10 fields of additional information about a user. You can enter the information at the user page in the &ldquo;Additional information&rdquo;  section.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Additional information (click to show/hide)</th>
        </tr>
        <tr>
            <td class="td-bg">Custom field N:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Custom field N type:</td>
            <td>[2]<br>
            	[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Custom field N caption:</td>
            <td>[4]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Adjusting the rules of how the field should be displayed and function; </li>
    <li>The data entry element type for user fields. Possible alternatives: single-line text field, multiple-line text field, drop-down list. </li>
    <li>If drop-down list is chosen, an additional line, which is intended for listing of all values. At entering element values, they should be separated by a coma (for example: val1,val2,val3). </li>
    <li>Name (title) for the user field. </li>
</ol>
<p>For example if you want to obtain information about users&rsquo; education you can<strong>:</strong></p>
<ol>
    <li>Select the &ldquo;Display and require&rdquo;  value for the user #1 field; </li>
    <li>Enter the &ldquo;Education&rdquo;  field for it; </li>
    <li>Specify the field type, for example &ldquo;drop-down list&rdquo; ; </li>
    <li>Enter a value from the list: &laquo;secondary education, bachelor, master's degree, doctor&raquo;. As a result, during user registration one will be able to select one of these values. </li>
</ol>

<?php

require_once('footer.inc.php');

?>