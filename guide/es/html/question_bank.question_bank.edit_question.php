<?php

require_once('header.inc.php');

?>

<h2>Creando/editando una pregunta</h2>
<p>Esta p&aacute;gina permite crear una nueva pregunta o editar una pregunta existente.</p>
<p>Si el tipo de pregunta seleccionado es &ldquo;Opci&oacute;n m&uacute;ltiple&rdquo;, &ldquo; Respuestas m&uacute;ltiples&rdquo; o &ldquo;Verdadero/falso&rdquo;, la p&aacute;gina tendr&aacute; la siguiente apariencia:</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Tipo de pregunta:</td>
            <td colspan="2">[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Asignatura de pregunta:</td>
            <td colspan="2">[2]</td>
        </tr>
        <tr>
            <td class="td-bg">N&uacute;mero de respuestas:</td>
            <td colspan="2">[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Pregunta:</td>
            <td colspan="2">[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Opci&oacute;n 1:</td>
            <td>[5]</td>
            <td>[6]
            <br>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Comentarios 1:</td>
            <td colspan="2">[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Opci&oacute;n 2:</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
        <tr>
            <td class="td-bg">&hellip;</td>
            <td colspan="2">&hellip;</td>
        </tr>
        <tr>
            <td class="td-bg">Valor en puntos:</td>
            <td colspan="2">[9]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Permite seleccionar el tipo de la pregunta; </li>
    <li>Permite seleccionar la asignatura de la pregunta; </li>
    <li>Permite seleccionar el n&uacute;mero de respuestas. Si el n&uacute;mero de respuestas que se muestra en la p&aacute;gina (el valor predeterminado es cinco respuestas) es suficiente para usted, entonces puede dejar este campo sin modificar; </li>
    <li>Editor HTML para introducir el texto de la pregunta. La pregunta puede contener cualquier texto formateado, objetos gr&aacute;ficos, animaci&oacute;n, audio y v&iacute;deo; </li>
    <li>Texto de una de las variantes de respuesta; </li>
    <li>Casilla de verificaci&oacute;n para indicar si la respuesta es correcta o no; </li>
    <li>Configuraci&oacute;n personalizada de la respuesta que permite especificar la precisi&oacute;n de la respuesta (qu&eacute; tanto por ciento del valor total ser&aacute; obtenido, si esta variante est&aacute; seleccionada); </li>
    <li>Comentarios de texto para mostrar despu&eacute;s de que la respuesta especificada haya sido seleccionada; </li>
    <li>N&uacute;mero de puntos que se dan por responder a la pregunta. </li>
</ol>
<p>Si el tipo de pregunta es <strong>&ldquo;Respuesta corta&rdquo;</strong>, la p&aacute;gina ser&aacute; la misma sin contar la &uacute;nica diferencia: en el campo para introducir el texto de la variante de respuesta([5]), usted debe especificar qu&eacute; exactamente debe introducir el que hace el examen para responder correctamente.</p>
<p>Si hay m&aacute;s de una variante correcta de respuesta, es suficiente establecer el n&uacute;mero de variantes ([3]) y luego especificar el texto de cada variante en un tipo de pregunta separado ([5]).</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Tipo de pregunta:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Asignatura de pregunta:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">N&uacute;mero de respuestas:</td>
            <td>1</td>
        </tr>
        <tr>
            <td class="td-bg">Pregunta:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Opci&oacute;n 1:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Valor en puntos:</td>
            <td>[9]</td>
        </tr>
    </tbody>
</table>
<p>Debido a que las preguntas de tipo &ldquo; <strong>Composici&oacute;n&rdquo;</strong> no requieren una respuesta exacta y la evaluaci&oacute;n se realiza a mano, una vez terminado el examen, la p&aacute;gina no contiene campos para introducir las respuestas correctas:</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Tipo de pregunta:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Asignatura de pregunta:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">N&uacute;mero de respuestas:</td>
            <td>n/d</td>
        </tr>
        <tr>
            <td class="td-bg">Pregunta:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Valor en puntos:</td>
            <td>[9]</td>
        </tr>
    </tbody>
</table>
<p>El tipo de pregunta <strong>&ldquo;Pregunta aleatoria&rdquo;</strong>es una directiva para insertar una pregunta aleatoria (nueva para cada uno que haga el examen) de la asignatura especificada ([2]).</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">Tipo de pregunta:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Asignatura de pregunta:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Nombre de pregunta:</td>
            <td>[10]</td>
        </tr>
    </tbody>
</table>
<ol start="10">
    <li>Nombre de la pregunta. Este nombre se muestra en el Banco de preguntas y Administrador de ex&aacute;menes en vez del texto de la pregunta. El nombre es una nota para el compilador del examen. </li>
</ol>
<p>De esta manera, por ejemplo, si usted tiene un conjunto de preguntas del que desea seleccionar 3 preguntas aleatorias, es suficiente hacer lo siguiente:</p>
<ol>
<li>Aseg&uacute;rese de que la misma asignatura est&aacute; seleccionada para todas las preguntas del conjunto en la p&aacute;gina de edici&oacute;n de cada pregunta (es decir, todas las preguntas deben estar combinadas en una asignatura);</p>
<li>Cree una pregunta de tipo &ldquo; Pregunta aleatoria&rdquo; y seleccione la asignatura de la lista;</p>
<li>A&ntilde;ada esta pregunta aleatoria al examen tantas veces cuantas sean necesarias (en este caso, 3 veces).</p>
</ol>

<?php

require_once('footer.inc.php');

?>