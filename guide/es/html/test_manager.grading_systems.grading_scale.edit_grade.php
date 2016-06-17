<?php

require_once('header.inc.php');

?>

<h2>Creando/editando una calificaci&oacute;n</h2>
<p>Esta p&aacute;gina permite crear una nueva calificaci&oacute;n o editar una calificaci&oacute;n existente.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">ID de calificaci&oacute;n:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Nombre de calificaci&oacute;n:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">M&iacute;nimo (%):</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">M&aacute;ximo (%):</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Descripci&oacute;n de calificaci&oacute;n:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <th colspan="2">Avanzado (mostrar/ocultar)</th>
        </tr>
        <tr>
            <td class="td-bg">Comentarios de calificaci&oacute;n:</td>
            <td>[6]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>ID de la calificaci&oacute;n en la escala; </li>
    <li>Nombre de la calificaci&oacute;n; </li>
    <li>Cantidad m&iacute;nima de puntos obtenidos en el examen que son suficientes (en por ciento) para sacar esta calificaci&oacute;n; </li>
    <li>Cantidad m&aacute;ximo de puntos obtenidos en el examen que son suficientes (en por ciento) para sacar esta calificaci&oacute;n; </li>
    <li>Comentario corto para la calificaci&oacute;n; </li>
    <li>Permite asignar comentarios dependiendo de la calificaci&oacute;n sacada. Tal comentario puede incluir cualquier tipo de resultados del examen, informes, certificados, recomendaciones que ata&ntilde;en a los estudios futuros del material y/o cualquier otra interpretaci&oacute;n de resultados dependiendo de la calificaci&oacute;n sacada. </li>
</ol>

<?php

require_once('footer.inc.php');

?>