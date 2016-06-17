<?php

require_once('header.inc.php');

?>

<h1>Preguntas de examen</h1>
<p>Esta p&aacute;gina permite crear y editar un conjunto de preguntas para el examen.</p>
<p>La primera tabla muestra las preguntas que ya est&aacute;n incluidas en el examen.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="11"><span class="left">&nbsp;[12] [13] [14]</span>
            <span class="right">&nbsp;[15] [16] [17] [18] [19] [20]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>Sec</th>
	    <th>ID</th>
            <th>Asignatura</th>
            <th>Pregunta</th>
	    <th>Tipo de pregunta</th>
	    <th colspan="2">Puntos</th>
	    <th colspan="3">Acci&oacute;n</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4]</td>
            <td>[5]</td>
            <td>[6]</td>
            <td colspan="2">[7]</td>
            <td>[8]</td>
            <td>[9]</p>
            <p>[10]</td>
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
    <li>Permite seleccionar varias preguntas con la ayuda de las casillas de verificaci&oacute;n y realizar operaciones con ellas en el modo de proceso por lotes ([14]); </li>
    <li>La posici&oacute;n de la pregunta en el examen. La posici&oacute;n puede ser puede ser cambiada por las opciones de preguntas aleatorias en la p&aacute;gina &ldquo;Propiedades de examen&rdquo;; </li>
    <li>ID de la pregunta en el sitio web; </li>
    <li>Asignatura de la pregunta; </li>
    <li>Texto de la pregunta; </li>
    <li>Tipo de la pregunta; </li>
    <li>Puntos que recibe un usuario por la respuesta correcta; </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Ir a la p&aacute;gina de edici&oacute;n de pregunta; </li>
    <li><img src="images/button-up.gif" alt="">&nbsp;Mover la pregunta una l&iacute;nea arriba; </li>
    <li><img src="images/button-down.gif" alt="">&nbsp;Mover la pregunta una l&iacute;nea abajo; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Excluir la pregunta del examen; </li>
    <li><img src="images/button-add.gif" alt="">&nbsp;Ir a la p&aacute;gina que permite crear una nueva pregunta y a&ntilde;adirla al examen; </li>
    <li><img src="images/button-import.gif" alt="">&nbsp;Ir a la p&aacute;gina de importaci&oacute;n de preguntas; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Excluir las preguntas seleccionadas ([1]) del examen; </li>
    <li>N&uacute;meros de entradas que se muestran en la p&aacute;gina actual y la cantidad total de entradas; </li>
    <li>N&uacute;meros de p&aacute;ginas. Para ir a una p&aacute;gina con un n&uacute;mero determinado, haga clic en el n&uacute;mero correspondiente; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Ir a la primera p&aacute;gina de la lista de preguntas; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Ir a la p&aacute;gina anterior; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Ir a la p&aacute;gina siguiente;  </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Ir a la &uacute;ltima p&aacute;gina. </li>
</ol>
<p>La segunda tabla muestra las preguntas del <strong>&ldquo;Banco de preguntas&rdquo;</strong> que est&aacute;n incluidas en el examen.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="10"><span class="left">[10] [11] [12]</span>
            <span class="right">[13] [14] [15] [16] [17] [18]</span></td>
        </tr>
        <tr>
            <th>&nbsp;</th>
	    <th>ID</th>
            <th>Asignatura</th>
            <th>Pregunta</th>
            <th>Tipo de pregunta</th>
            <th colspan="2">Puntos</th>
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
            <td>[8]</td>
            <td>[9]</td>
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
    <li>Permite seleccionar varias preguntas con la ayuda de las casillas de verificaci&oacute;n y realizar operaciones con ellas en el modo de proceso por lotes ([11] [12]); </li>
    <li>ID de la pregunta en el sitio web; </li>
    <li>Asignatura de la pregunta; </li>
    <li>Texto de la pregunta; </li>
    <li>Tipo de la pregunta; </li>
    <li>Puntos que recibe un usuario por la respuesta correcta; </li>
    <li><img src="images/button-plus.gif" alt="">&nbsp;A&ntilde;adir esta pregunta al examen; </li>
    <li><img src="images/button-edit.gif" alt="">&nbsp;Ir a la p&aacute;gina de edici&oacute;n de pregunta; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar la pregunta del <strong>&ldquo;Banco de preguntas&rdquo;</strong>; </li>
    <li><img src="images/button-new.gif" alt="">&nbsp;Ir a la p&aacute;gina de creaci&oacute;n de nueva pregunta; </li>
    <li><img src="images/button-plus.gif" alt="">&nbsp;A&ntilde;adir las preguntas seleccionadas ([1]) al examen; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar las preguntas seleccionadas ([1]) del &ldquo; <strong>Banco de preguntas&rdquo;</strong>; </li>
    <li>N&uacute;meros de entradas que se muestran en la p&aacute;gina actual y la cantidad total de entradas; </li>
    <li>N&uacute;meros de p&aacute;ginas. Para ir a una p&aacute;gina con un n&uacute;mero determinado, haga clic en el n&uacute;mero correspondiente; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Ir a la primera p&aacute;gina de la lista de preguntas; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Ir a la p&aacute;gina anterior; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Ir a la p&aacute;gina siguiente;  </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Ir a la &uacute;ltima p&aacute;gina. </li>
</ol>

<?php

require_once('footer.inc.php');

?>