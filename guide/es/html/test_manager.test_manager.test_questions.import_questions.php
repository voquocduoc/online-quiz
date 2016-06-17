<?php

require_once('header.inc.php');

?>

<h2>Importar preguntas</h2>
<p>Esta p&aacute;gina permite importar preguntas de casi cualquier tipo de documento de texto.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg" colspan="2">Importar este documento:</td>
        </tr>
        <tr>
            <td colspan="2">[1]</td>
        </tr>
        <tr>
            <th class="td-bg" colspan="2">Prefijos (mostrar/ocultar)</th>
        </tr>
        <tr>
            <td class="td-bg">Prefijo de pregunta:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Prefijo de opci&oacute;n:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg"><i>Prefijo de opci&oacute;n (2&ordf; columna):</i></td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg"><i>Choice feedback prefix:</i></td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Prefijo para respuesta correcta:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Prefijo de valor de puntos:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Prefijo de tipo de pregunta:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Prefijo de asignatura de pregunta:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg"><i>Prefijo de instrucciones de pregunta:</i></td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg"><i>Prefijo de explicaci&oacute;n de pregunta:</i></td>
            <td>[11]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Documento para importar campos; </li>
    <li>Prefijo que ser&aacute; usado para el campo del texto de pregunta durante la importaci&oacute;n; </li>
    <li>Prefijo de variantes de respuestas; </li>
    <li><i>Prefijo para la variante de respuesta en la segunda columna (es decir el segundo elemento de la pareja de comparaci&oacute;n; ser&aacute; usado s&oacute;lo en caso de importar preguntas de comparaci&oacute;n);</i> </li>
    <li><i>Prefijo para comentarios que ser&aacute;n mostrados si un usuario selecciona la variante de respuesta detr&aacute;s de la cual se encuentra el campo con el texto de comentario;</i> </li>
    <li>Prefijo de respuesta correcta; </li>
    <li>Prefijo para la cantidad de puntos que se dan por la respuesta correcta; </li>
    <li>Prefijo del tipo de pregunta; </li>
    <li>Prefijo de la asignatura de pregunta; </li>
    <li><i>Prefijo para las instrucciones que se ponen delante de la pregunta;</i> </li>
    <li><i>Prefijo para comentarios generales que ser&aacute;n mostrados en caso de la respuesta correcta/incorrecta.</i> </li>
</ol>

<?php

require_once('footer.inc.php');

?>