<?php

require_once('header.inc.php');

?>

<h1>Banco de preguntas</h1>
<p>El banco de preguntas permite crear, editar y estructurar todas las preguntas, as&iacute; como recopilar estad&iacute;sticas sobre la base de todas las preguntas.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="10"><span class="left">[10] [11] [12] [13]</span>
            <span class="right">[14] [15] [16] [17] [18] [19]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Asignatura</th>
            <th>Pregunta</th>
            <th colspan="2">Tipo</th>
            <th>Puntos</th>
            <th colspan="3">Acci&oacute;n</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td colspan="2">[5]</td>
            <td>[6]</td>
            <td>[7]</td>
            <td>[8]</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td colspan="2">&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Usando las casillas de verificaci&oacute;n, es posible seleccionar varias preguntas y procesarlas en el modo de proceso por lotes ([11], [12]); </li>
    <li>ID en el sitio web; </li>
    <li>Asignatura de la pregunta; </li>
    <li>Texto de la pregunta; </li>
    <li>Tipo de la pregunta; </li>
    <li>Puntos que se dan por la pregunta; </li>
    <li><img src="images/button-stats.gif" alt="">&nbsp;Ir a la p&aacute;gina de estad&iacute;sticas de la pregunta; </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Ir a la p&aacute;gina de edici&oacute;n de la pregunta; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar la pregunta; </li>
    <li><img src="images/button-new.gif" alt="">&nbsp;Ir a la p&aacute;gina de creaci&oacute;n de nueva pregunta; </li>
    <li><img src="images/button-stats.gif" alt="">&nbsp;Ir a la p&aacute;gina de estad&iacute;sticas para las preguntas seleccionadas ([1]); </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar las preguntas seleccionadas ([1]); </li>
    <li>Si selecciona una asignatura, ver&aacute; todas las preguntas que corresponden a la asignatura seleccionada; </li>
    <li>N&uacute;meros de entradas que se muestran en la p&aacute;gina actual y la cantidad total de entradas; </li>
    <li>N&uacute;meros de p&aacute;ginas. Para ir a una p&aacute;gina con un n&uacute;mero determinado, haga clic en el n&uacute;mero correspondiente; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Ir a la primera p&aacute;gina de la lista de preguntas; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Ir a la p&aacute;gina anterior; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Ir a la p&aacute;gina siguiente;  </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Ir a la &uacute;ltima p&aacute;gina. </li>
</ol>
<p>Los botones de navegaci&oacute;n (<img src="images/button-first.gif">, <img src="images/button-first.gif">, <img src="images/button-prev.gif">,<img src="images/button-last.gif">) est&aacute;n activos, si la lista ocupa m&aacute;s de una p&aacute;gina.</p>

<?php

require_once('footer.inc.php');

?>