<?php

require_once('header.inc.php');

?>

<h1>Configuraci&oacute;n</h1>
<p>Esta subsecci&oacute;n permite ver y cambiar la configuraci&oacute;n del sistema.</p>

<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Sitio web (mostrar/ocultar)</th>
        </tr>
        <tr>
            <td class="td-bg">Tama&ntilde;o de lista:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Editor WYSIWYG:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Estad&iacute;sticas web:</td>
            <td>[3]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Permite ver un n&uacute;mero de elementos en las listas (lista de ex&aacute;menes, lista de preguntas, lista de usuarios, etc.) en una p&aacute;gina; </li>
    <li>Permite seleccionar un editor de texto; </li>
    <li>Permite especificar si hace falta recopilar estad&iacute;sticas de las visitas al sitio. </li>
</ol>
<p>La configuraci&oacute;n del registro de usuarios en el sistema. Permite determinar qu&eacute; campos son obligatorios y qu&eacute; campos no lo son. Tambi&eacute;n permite configurar las reglas para mostrar los datos introducidos.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Registro (mostrar/ocultar)</th>
        </tr>
        <tr>
            <td class="td-bg">Permitir registro de usuarios:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Al registrarse:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Introducci&oacute;n:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Nombre de usuario:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Contrase&ntilde;a:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Correo:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">T&iacute;tulo:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Nombre:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Apellidos:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Segundo nombre:</td>
            <td>[10]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Permite indicar si los usuarios nuevos pueden registrarse usando el sistema de registro autom&aacute;tico (disponible en la p&aacute;gina de inicio de sesi&oacute;n del sistema); </li>
    <li>Permite seleccionar la operaci&oacute;n al registrarse; </li>
<ul>
<li>Activar. Activar la cuenta de usuario y proporcionarle acceso al sistema.</li>
<li>Activar e iniciar sesi&oacute;n autom&aacute;ticamente. Activar la cuenta de usuario autom&aacute;ticamente sin pedir la introducci&oacute;n de contrase&ntilde;a.</li>
<li>No activar, enviar el correo para la activaci&oacute;n. Esta opci&oacute;n puede ser utilizada para comprobar que la direcci&oacute;n de correo electr&oacute;nico introducida por el usuario es correcta.</li>
<li>No activar, usar esquema personalizado. Usted puede crear un sistema de activaci&oacute;n de usuarios personalizado. Por ejemplo, es posible que quiera activar la cuenta del usuario s&oacute;lo despu&eacute;s de que la haya pagado. Adem&aacute;s, podemos crear cualquier sistema &ldquo;llave en mano&rdquo; de pago por la activaci&oacute;n/afiliaci&oacute;n, as&iacute; como otros complementos para el sistema iGiveTest.</li>
</ul>
    <li>Texto introductorio que ser&aacute; mostrado al usuario en la p&aacute;gina de registro; </li>
    <li>Nombre de usuario; </li>
<ul>
<li>No utilizar. No utilizar este campo en el sistema.</li>
<li>No mostrar. No mostrar este campo durante el registro, pero utilizarlo en el sistema en el futuro (por ejemplo, para mostrarlo en la p&aacute;gina del perfil del usuario).</li>
<li>No mostrar, autogenerar. El sistema no mostrar&aacute; este campo durante el registro, pero generar&aacute; un valor para este campo autom&aacute;ticamente;</li>
<li>Mostrar, no requerir. Mostrar el campo durante el registro, pero no requerir que sea rellenado;</li>
<li>Mostrar, autogenerar. Generar el campo autom&aacute;ticamente, mostrarlo y permitir modificar el valor del campo durante el registro.</li>
<li>Mostrar, requerir. Mostrar el campo y requerir que est&eacute; rellenado.</li>
</ul>
    <li>Contrase&ntilde;a; </li>
    <li>Direcci&oacute;n de correo electr&oacute;nico; </li>
    <li>T&iacute;tulo; </li>
    <li>Nombre; </li>
    <li>Apellidos; </li>
    <li>Segundo nombre; </li>
</ol>
<p>Permite especificar los campos de la informaci&oacute;n personal que ser&aacute;n obligatorios y configurar el modo de visualizaci&oacute;n de los datos introducidos.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Informaci&oacute;n personal (mostrar/ocultar)</th>
        </tr>
        <tr>
            <td class="td-bg">Direcci&oacute;n:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Ciudad:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Estado/provincia:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">C&oacute;digo postal:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Pa&iacute;s:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Tel&eacute;fono:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Fax:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">M&oacute;vil:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Buscapersonas:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Tel&eacute;fono IP:</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">P&aacute;gina web:</td>
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
            <td class="td-bg">Sexo:</td>
            <td>[15]</td>
        </tr>
        <tr>
            <td class="td-bg">Esposo (esposa):</td>
            <td>[16]</td>
        </tr>
        <tr>
            <td class="td-bg">Hijos:</td>
            <td>[17]</td>
        </tr>
        <tr>
            <td class="td-bg">Instructor:</td>
            <td>[18]</td>
        </tr>
    </tbody>
</table>

<ol>
    <li>Direcci&oacute;n; </li>
    <li>Ciudad; </li>
    <li>Estado/provincia; </li>
    <li>C&oacute;digo postal; </li>
    <li>Pa&iacute;s; </li>
    <li>Tel&eacute;fono; </li>
    <li>Fax; </li>
    <li>M&oacute;vil; </li>
    <li>Buscapersonas; </li>
    <li>Tel&eacute;fono IP; </li>
    <li>P&aacute;gina web; </li>
    <li>ICQ; </li>
    <li>MSN messenger; </li>
    <li>AOL messenger; </li>
    <li>Sexo; </li>
    <li>Esposo (esposa); </li>
    <li>Hijos; </li>
    <li>Instructor; </li>
</ol>

<p>Permite especificar la informaci&oacute;n de trabajo para el usuario y configurar el modo de visualizaci&oacute;n de estos datos.</p>

<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Informaci&oacute;n de trabajo (mostrar/ocultar)</th>
        </tr>
        <tr>
            <td class="td-bg">Empresa:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Cargo:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Departamento:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Oficina:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Direcci&oacute;n:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Ciudad:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Estado/provincia:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">C&oacute;digo postal:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Pa&iacute;s:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Tel&eacute;fono:</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">Fax:</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td class="td-bg">M&oacute;vil:</td>
            <td>[12]</td>
        </tr>
        <tr>
            <td class="td-bg">Buscapersonas:</td>
            <td>[13]</td>
        </tr>
        <tr>
            <td class="td-bg">Tel&eacute;fono IP:</td>
            <td>[14]</td>
        </tr>
        <tr>
            <td class="td-bg">P&aacute;gina web:</td>
            <td>[15]</td>
        </tr>
    </tbody>
</table>

<ol>
    <li>Empresa; </li>
    <li>Cargo; </li>
    <li>Department; </li>
    <li>Office; </li>
    <li>Address; </li>
    <li>Ciudad; </li>
    <li>Estado/provincia: </li>
    <li>C&oacute;digo postal; </li>
    <li>Pa&iacute;s; </li>
    <li>Tel&eacute;fono; </li>
    <li>Fax; </li>
    <li>M&oacute;vil; </li>
    <li>Buscapersonas; </li>
    <li>Tel&eacute;fono IP; </li>
    <li>P&aacute;gina web; </li>
</ol>

<p>Permite incluir hasta 10 campos de informaci&oacute;n adicional acerca del usuario. Usted puede introducir la informaci&oacute;n en la p&aacute;gina del usuario en la secci&oacute;n &ldquo;Informaci&oacute;n adicional&rdquo;.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Informaci&oacute;n adicional (mostrar/ocultar)</th>
        </tr>
        <tr>
            <td class="td-bg">Campo personalizado N:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Tipo del campo N:</td>
            <td>[2]
            <br>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Nombre del campo N:</td>
            <td>[4]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Permite configurar las reglas de visualizaci&oacute;n del campo; </li>
    <li>Tipo de campo para los datos introducidos. Opciones posibles: texto de una sola l&iacute;nea, texto de m&uacute;ltiples l&iacute;neas, lista desplegable. </li>
    <li>En caso de seleccionar la lista desplegable, aparecer&aacute; una l&iacute;nea adicional que est&aacute; destinada para indicar la lista de todos los valores. Los valores introducidos deben estar separados por comas (por ejemplo: val1,val2,val3). </li>
    <li>Nombre (t&iacute;tulo) del campo personalizado. </li>
</ol>
<p>Por ejemplo,&nbsp;si desea obtener la informaci&oacute;n acerca de la educaci&oacute;n del usuario, puede hacer lo siguiente<strong>:</strong></p>
<ol>
    <li>Seleccione el valor &ldquo;Mostrar, requerir&rdquo; para el campo N&ordm; 1; </li>
    <li>Introduzca el nombre del campo &ldquo;Educaci&oacute;n&rdquo;; </li>
    <li>Especifique el tipo de campo, por ejemplo, &ldquo;Lista desplegable&rdquo;; </li>
    <li>Introduzca los valores para la lista: &ldquo;educaci&oacute;n secundaria, bachiller, master, doctor&rdquo;. Como resultado, durante el registro, el usuario podr&aacute; seleccionar uno de estos valores. </li>
</ol>

<?php

require_once('footer.inc.php');

?>