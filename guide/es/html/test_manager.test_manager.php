<?php

require_once('header.inc.php');

?>

<h1>Administrador de ex&aacute;menes</h1>
<p>Esta secci&oacute;n permite crear y editar ex&aacute;menes usando la base de las preguntas del <strong>&ldquo;Banco de preguntas&rdquo;</strong>.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="13"><span class="left">[13] [14] [15] [16]</span>
            <span class="right">[17] [18] [19] [20] [21] [22]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>N</th>
            <th>Nombre de examen</th>
            <th>Asignatura</th>
            <th>Fecha de inicio</th>
            <th>Fecha de fin</th>
            <th>Activo</th>
            <th colspan="4">Acci&oacute;n</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
            <td>[6]</td>
            <td>[7]</td>
            <td>[8]</td>
            <td>[9]</td>
            <td>[10]</td>
            <td>[11]</td>
            <td>[12]</td>
        </tr>
        <tr>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Permite seleccionar varios ex&aacute;menes con la ayuda de las casillas de verificaci&oacute;n y realizar operaciones con ellos en el modo de proceso por lotes([14], [15]); </li>
    <li>ID del examen en el sitio web; </li>
    <li>Notas acerca del examen creadas por el compilador en las &ldquo; Propiedades de examen&rdquo;; </li>
    <li>Nombre del examen; </li>
    <li>Asignatura del examen; </li>
    <li>La fecha a partir de la cual el examen estar&aacute; disponible; </li>
    <li>La fecha hasta la cual el examen estar&aacute; disponible; </li>
    <li>Permite ver si el examen est&aacute; activo (o sea est&aacute; disponible para que los estudiantes lo puedan hacer) y alterar el estado de disponibilidad seleccionando/deseleccionando la casilla de verificaci&oacute;n; </li>
    <li><img src="images/button-gear.gif" alt="">&nbsp;Ir a la p&aacute;gina de visualizaci&oacute;n y edici&oacute;n de configuraci&oacute;n del examen; </li>
    <li><img src="images/button-groups.gif" alt="">&nbsp;Ir a la p&aacute;gina de asignaci&oacute;n del examen a grupos de usuarios; </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Ir a la p&aacute;gina de visualizaci&oacute;n y edici&oacute;n de preguntas del examen; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar la pregunta seleccionada; </li>
    <li><img src="images/button-new.gif" alt="">&nbsp;Ir a la p&aacute;gina de creaci&oacute;n de nuevo examen; </li>
    <li><img src="images/button-groups.gif" alt="">&nbsp;Asignar los ex&aacute;menes seleccionados ([1]) a un grupo de usuarios; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar los ex&aacute;menes seleccionados ([1]); </li>
    <li>Seleccionar asignatura para mostrar s&oacute;lo los ex&aacute;menes de esta asignatura; </li>
    <li>N&uacute;meros de entradas que se muestran en la p&aacute;gina actual y la cantidad total de entradas; </li>
    <li>N&uacute;meros de p&aacute;ginas. Para ir a una p&aacute;gina con un n&uacute;mero determinado, haga clic en el n&uacute;mero correspondiente; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Ir a la primera p&aacute;gina de la lista de ex&aacute;menes; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Ir a la p&aacute;gina anterior; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Ir a la p&aacute;gina siguiente;  </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Ir a la &uacute;ltima p&aacute;gina. </li>
</ol>

<?php

require_once('footer.inc.php');

?>