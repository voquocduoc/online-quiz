<?php

require_once('header.inc.php');

?>


<h2>Asignando grupos a un usuario</h2>
<p>Esta p&aacute;gina permite ver y modificar la lista de grupos asignados a un usuario.</p>
<p>La primera tabla contiene un usuario o una lista de usuarios seleccionados.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="12"><span class="left">[12] [13] [14]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>N</th>
            <th>Nombre de usuario</th>
            <th>Correo</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th colspan="2">Activo</th>
            <th colspan="3">Acci&oacute;n</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[4]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
            <td>[6]</td>
            <td>[7]</td>
            <td colspan="2">[8]</td>
            <td>[9]</td>
            <td>[10]</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td colspan="2">&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Permite seleccionar varios usuarios con la ayuda de las casillas y realizar operaciones con ellos en el modo de proceso por lotes ([13] [14]); </li>
    <li>ID del usuario en el sitio web; </li>
    <li>Notas acerca del usuario; </li>
    <li>Nombre del usuario en el sistema; </li>
    <li>La direcci&oacute;n de correo electr&oacute;nico del usuario; </li>
    <li>Nombre del usuario; </li>
    <li>Apellidos del usuario; </li>
    <li>Permite determinar si el usuario est&aacute; activo, y alterar el estado de usuario seleccionando/deseleccionando la casilla de verificaci&oacute;n; </li>
    <li><img src="images/button-groups.gif" alt="">&nbsp;Ir a la p&aacute;gina donde puede ver y editar las listas de grupos en los que el usuario est&aacute; incluido; </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Ir a la p&aacute;gina de edici&oacute;n de datos de usuario; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar el usuario. <img src="images/button-cross-inactive.gif" alt="">&nbsp;significa que usted no tiene derechos para eliminar este usuario; </li>
    <li><img src="images/button-new.gif" alt="">&nbsp;Ir a la p&aacute;gina de creaci&oacute;n de nuevo usuario; </li>
    <li><img src="images/button-groups.gif" alt="">&nbsp;Ir a la p&aacute;gina donde se asignan los grupos a los usuarios seleccionados ([1]); </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar los usuarios seleccionados ([1]); </li>
</ol>
<p>La segunda tabla contiene la lista de grupos del sistema:</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="8"><span class="left">[8] [9]</span>
            <span class="right">[10] [11] [12] [13] [14] [15]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Nombre</th>
            <th colspan="2">Descripci&oacute;n</th>
            <th>Miembro</th>
            <th colspan="2">Acci&oacute;n</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td colspan="2">[4]</td>
            <td>[5]</td>
            <td>[6]</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td colspan="2">&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Permite seleccionar varios grupos con la ayuda de las casillas de verificaci&oacute;n y realizar operaciones con ellos en el modo de proceso por lotes ([9]); </li>
    <li>ID del grupo en el sitio web; </li>
    <li>Nombre del grupo; </li>
    <li>Descripci&oacute;n corta del grupo; </li>
    <li>Permite determinar si un grupo espec&iacute;fico est&aacute; asignado al usuario, y cambiar el estado seleccionando/deseleccionando la casilla de verificaci&oacute;n; </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Ir a la p&aacute;gina de edici&oacute;n de grupo; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar el grupo. <img src="images/button-cross-inactive.gif" alt="">&nbsp;significa que no tiene derechos para eliminar este grupo; </li>
    <li><img src="images/button-new.gif" alt="">&nbsp;Ir a la p&aacute;gina de creaci&oacute;n de nuevo usuario; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar los grupos seleccionados ([1]); </li>
    <li>N&uacute;meros de entradas que se muestran en la p&aacute;gina actual y la cantidad total de entradas; </li>
    <li>N&uacute;meros de p&aacute;ginas. Para ir a una p&aacute;gina con un n&uacute;mero determinado, haga clic en el n&uacute;mero correspondiente; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Ir a la primera p&aacute;gina de la lista de grupos; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Ir a la p&aacute;gina anterior; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Ir a la p&aacute;gina siguiente;  </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Ir a la &uacute;ltima p&aacute;gina. </li>
</ol>


<?php

require_once('footer.inc.php');

?>