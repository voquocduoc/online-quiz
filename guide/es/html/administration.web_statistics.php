<?php

require_once('header.inc.php');

?>

<h1>Estad&iacute;sticas web</h1>
<p>La subsecci&oacute;n proporciona acceso a las estad&iacute;sticas detalladas sobre los visitantes del sistema.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="11"><span class="left">[12]</span>
            <span class="right">[13] [14] [15] [16] [17] [18]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Fecha</th>
            <th>Nombre de usuario</th>
            <th>Visitas</th>
            <th>Direcci&oacute;n IP</th>
            <th colspan="2">Nombre de host</th>
            <th>Remitente</th>
            <th colspan="2">Acci&oacute;n</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4] [5]</td>
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
            <td colspan="2">&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Permite seleccionar varias sesiones con la ayuda de las casillas de verificaci&oacute;n y realizar operaciones con ellas en el modo de proceso por lotes ([11]); </li>
    <li>ID de la sesi&oacute;n; </li>
    <li>Fecha y hora del inicio de la sesi&oacute;n; </li>
    <li>Nombre del usuario en el sistema; </li>
    <li>ID del usuario. Este enlace permite ver y editar perfiles de usuarios; </li>
    <li>N&uacute;mero de visitas internas; </li>
    <li>Direcci&oacute;n IP del equipo de usuario. Este enlace permite ver la informaci&oacute;n acerca de esta direcci&oacute;n IP en el servicio WhoIs; </li>
    <li>Nombre de dominio que corresponde a la direcci&oacute;n IP ([6]); </li>
    <li>La p&aacute;gina de la que el usuario fue remitido; </li>
    <li>Ir a la p&aacute;gina de estad&iacute;sticas detalladas de sesi&oacute;n; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar la informaci&oacute;n sobre la sesi&oacute;n; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar la informaci&oacute;n sobre las sesiones seleccionadas ([1]); </li>
    <li>N&uacute;meros de entradas que se muestran en la p&aacute;gina actual y la cantidad total de entradas; </li>
    <li>N&uacute;meros de p&aacute;ginas. Para ir a una p&aacute;gina con un n&uacute;mero determinado, haga clic en el n&uacute;mero correspondiente; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Ir a la primera p&aacute;gina de la lista de sesiones; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Ir a la p&aacute;gina anterior; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Ir a la p&aacute;gina siguiente;  </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Ir a la &uacute;ltima p&aacute;gina. </li>
</ol>

<?php

require_once('footer.inc.php');

?>