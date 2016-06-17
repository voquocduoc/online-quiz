<?php

require_once('header.inc.php');

?>

<h1>Escala de calificaci&oacute;n</h1>
<p>La p&aacute;gina permite crear una escala de calificaci&oacute;n personalizada, asignar nombres a las calificaciones y especificar el intervalo de puntos (en por ciento) para poner una u otra calificaci&oacute;n.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="10"><span class="left">[11] [12]</span>
            <span class="right">[13] [14] [15] [16] [17] [18]</span></td>
        </tr>
        <tr>
	    <th>&nbsp;</th>
	    <th>ID</th>
            <th>M&iacute;n</th>
            <th>M&aacute;x</th>
	    <th>Nombre</th>
	    <th colspan="2">Descripci&oacute;n</th>
	    <th colspan="3">Acci&oacute;n</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
            <td colspan="2">[6]</td>
            <td>[7]</td>
            <td>[8]</p>
            <p>[9]</td>
            <td>[10]</td>
        </tr>
        <tr>
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
    <li>Permite seleccionar varias calificaciones con la ayuda de las casillas de verificaci&oacute;n y realizar operaciones con ellas en el modo de proceso por lotes ([11]); </li>
    <li>ID de la calificaci&oacute;n en la escala; </li>
    <li>Cantidad m&iacute;nima de puntos obtenidos en el examen que son suficientes (en por ciento) para sacar esta calificaci&oacute;n; </li>
    <li>Cantidad m&aacute;xima de puntos obtenidos en el examen que son suficientes (en por ciento) para sacar esta calificaci&oacute;n; </li>
    <li>Nombre de la calificaci&oacute;n; </li>
    <li>Comentario corto para la calificaci&oacute;n; </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Ir a la p&aacute;gina de edici&oacute;n de la calificaci&oacute;n; </li>
    <li><img src="images/button-up.gif" alt="">&nbsp;Mover la calificaci&oacute;n una l&iacute;nea arriba; </li>
    <li><img src="images/button-down.gif" alt="">&nbsp;Mover la calificaci&oacute;n una l&iacute;nea abajo; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar la calificaci&oacute;n; </li>
    <li><img src="images/button-new.gif" alt="">&nbsp;Ir a la p&aacute;gina de creaci&oacute;n de nueva calificaci&oacute;n; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar las calificaciones seleccionadas ([1]); </li>
    <li>N&uacute;meros de entradas que se muestran en la p&aacute;gina actual y la cantidad total de entradas; </li>
    <li>N&uacute;meros de p&aacute;ginas. Para ir a una p&aacute;gina con un n&uacute;mero determinado, haga clic en el n&uacute;mero correspondiente; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Ir a la primera p&aacute;gina de la lista de calificaciones; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Ir a la p&aacute;gina anterior; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Ir a la p&aacute;gina siguiente;  </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Ir a la &uacute;ltima p&aacute;gina. </li>
</ol>

<?php

require_once('footer.inc.php');

?>