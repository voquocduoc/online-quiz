<?php

require_once('header.inc.php');

?>

<h2>Creando/editando un usuario</h2>
<p>La p&aacute;gina permite crear un nuevo usuario y modificar los datos de un usuario existente.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg" colspan="2">&nbsp;[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Fecha de inscripci&oacute;n:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Fecha de &uacute;ltima sesi&oacute;n:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Expira:</td>
            <td>[4] [5]</td>
        </tr>
        <tr>
            <td class="td-bg">Nombre de usuario:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Nueva contrase&ntilde;a:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Confirmar contrase&ntilde;a:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Correo:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Nombre:</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">Apellidos:</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td class="td-bg">Segundo nombre:</td>
            <td>[12]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Permite determinar si el usuario est&aacute; activo, tambi&eacute;n permite activar o desactivarlo seleccionando/deseleccionando la casilla de verificaci&oacute;n; </li>
    <li>Fecha de creaci&oacute;n de la cuenta del usuario; </li>
    <li>Fecha del &uacute;ltimo acceso al sistema; </li>
    <li>Fecha de vencimiento de la cuenta del usuario; </li>
    <li>Esta casilla de verificaci&oacute;n permite cancelar la limitaci&oacute;n de tiempo para la cuenta; </li>
    <li>Nombre del usuario en el sistema; </li>
    <li>Nueva contrase&ntilde;a. Si no desea cambiar la contrase&ntilde;a, deje este campo en blanco; </li>
    <li>Confirmaci&oacute;n de la contrase&ntilde;a nueva; </li>
    <li>Direcci&oacute;n de correo electr&oacute;nico del usuario; </li>
    <li>Nombre; </li>
    <li>Apellidos; </li>
    <li>Segundo nombre; </li>
</ol>

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
            <td class="td-bg">C&oacute;digo postal</td>
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
    <li>Estado/provincia: </li>
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
    <li>Esposo/esposa; </li>
    <li>Hijos; </li>
    <li>Instructor; </li>
</ol>
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
    <li>Departamento; </li>
    <li>Oficina; </li>
    <li>Direcci&oacute;n; </li>
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
<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Informaci&oacute;n adicional (mostrar/ocultar)</th>
        </tr>
        <tr>
            <td class="td-bg">&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<p>Contiene datos adicionales sobre los usuarios. Usted puede especificar cualquier campo de datos en la subsecci&oacute;n &ldquo; <strong>Configuraci&oacute;n&rdquo;</strong> de la secci&oacute;n &ldquo; <strong>Administraci&oacute;n&rdquo;</strong>.</p> 

<table class="cmn">
    <tbody>
        <tr>
            <th colspan="2">Notas (mostrar/ocultar)</th>
        </tr>
        <tr>
            <td class="td-bg">Notas (para uso interno):</td>
            <td>[1]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Notas generales acerca del usuario. Estas notas ser&aacute;n mostradas junto al nombre de usuario en la lista de usuarios del sistema. </li>
</ol>

<?php

require_once('footer.inc.php');

?>