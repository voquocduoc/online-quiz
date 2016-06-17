<?php

require_once('header.inc.php');

?>

<h2>Respuestas a las preguntas</h2>
<p>Esta p&aacute;gina permite recopilar las estad&iacute;sticas detalladas sobre las respuestas de usuarios.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th>Sec</th>
            <th>N&ordm;</th>
            <th>Tiempo</th>
            <th>Puntos</th>
            <th>Tiempo excedido</th>
            <th>Correcto</th>
            <th colspan="2">Acci&oacute;n</th>
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
        </tr>
    </tbody>
</table>
<ol>
    <li>La posici&oacute;n de la pregunta en el examen que se muestra al usuario; </li>
    <li>N&uacute;mero de la pregunta en el examen. Puede ser diferente del n&uacute;mero indicado en [1], si las preguntas del examen son aleatorias; </li>
    <li>Tiempo de respuesta a la pregunta. Si eligi&oacute; la opci&oacute;n de mostrar preguntas en p&aacute;ginas separadas, el valor del campo ser&aacute; (00:00:00). Si eligi&oacute; la opci&oacute;n de todas las preguntas en una p&aacute;gina, el valor de este campo no ser&aacute; especificado; </li>
    <li>Puntos obtenidos por la respuesta a la pregunta; </li>
    <li>La casilla de verificaci&oacute;n que indica si el l&iacute;mite de tiempo para responder a la pregunta fue excedido; </li>
    <li>La casilla de verificaci&oacute;n que indica si la respuesta fue correcta o no; </li>
    <li><img src="images/button-view.gif" alt="">&nbsp;El bot&oacute;n que permite ver los detalles de la respuesta (texto de la pregunta, respuesta del usuario y respuesta correcta); </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Ir a la p&aacute;gina de edici&oacute;n de pregunta. </li>
</ol>

<?php

require_once('footer.inc.php');

?>