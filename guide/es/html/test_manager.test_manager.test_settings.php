<?php

require_once('header.inc.php');

?>

<h2>Creando un examen/editando propiedades de un examen</h2>
<p>Esta p&aacute;gina permite crear un nuevo examen o modificar la configuraci&oacute;n de un examen existente.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg" colspan="2">[1] &ndash; Este examen est&aacute; activo</td>
        </tr>
        <tr>
            <td class="td-bg">Asignatura de examen</td>
            <td>[2] [3]</td>
        </tr>
        <tr>
            <td class="td-bg">Nombre de examen:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Descripci&oacute;n corta:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Instrucciones de examen:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Fecha de inicio de examen:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Fecha de fin de examen:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Tiempo de examen:</td>
            <td>[9] [10] &ndash; No utilizar
            <br>[11] &ndash; Terminar el examen al transcurrir el tiempo</td>
        </tr>
        <tr>
            <td class="td-bg">Intentos permitidos:</td>
            <td>[12]</td>
        </tr>
        <tr>
            <td class="td-bg">Sistema de calificaci&oacute;n:</td>
            <td>[13]</td>
        </tr>
        <tr>
            <td class="td-bg">Mostrar preguntas:</td>
            <td>[14]</td>
        </tr>
        <tr>
            <td class="td-bg">Opciones aleatorias:</td>
            <td>[15] &ndash; Orden aleatorio de preguntas
            <br>[16] &ndash; Orden aleatorio de respuestas</td>
        </tr>
        <tr>
            <td class="td-bg">Informe de resultados de examen:</td>
            <td>[17] &ndash; Mostrar comentarios
            <br>[18] &ndash; Mostrar calificaci&oacute;n
            <br>[19] &ndash; Mostrar respuestas
            <br>[20] &ndash; Mostrar puntos
            <br>Usar plantilla personalizada: [21]</td>
        </tr>
        <tr>
            <td class="td-bg">Informe avanzado:</td>
            <td>Plantilla: [22]
            <br>Condici&oacute;n de calificaci&oacute;n: [23]
            <br>[24] &ndash; Mostrar informe imprimible en PDF</td>
        </tr>
        <tr>
            <td class="td-bg">Enviar resultados por correo electr&oacute;nico a:</td>
            <td>[25]
            <br>[26], [27] &ndash; enviar resultados a usuarios</td>
        </tr>
        <tr>
            <td class="td-bg">Asignado a:</td>
            <td>[28]
            <br>[29] &ndash; Asignar a todos (sobrepasa cualquier configuraci&oacute;n)</td>
        </tr>
        <tr>
            <td class="td-bg">Examen anterior:</td>
            <td>[30]</td>
        </tr>
        <tr>
            <td class="td-bg">Siguiente examen:</td>
            <td>[31]</td>
        </tr>
        <tr>
            <td class="td-bg">Notas de examen (para uso interno):</td>
            <td>[32]</td>
        </tr>
    </tbody>
</table>
<p>[33] [34] [35]</p>
<ol>
    <li>Opci&oacute;n que controla la disponibilidad del examen; </li>
    <li>Permite seleccionar la asignatura de las preguntas del examen; </li>
    <li>Enlace a la p&aacute;gina de creaci&oacute;n y edici&oacute;n de asignaturas; </li>
    <li>Nombre del examen; </li>
    <li>Descripci&oacute;n corta del examen que puede ver el usuario en la p&aacute;gina &ldquo;Hacer un examen&rdquo; junto al nombre del examen; </li>
    <li>Editor para introducir las instrucciones del examen que se muestran antes de que empiece el examen; </li>
    <li>Permite seleccionar la fecha a partir de la cual el examen estar&aacute; disponible para el usuario; </li>
    <li>Permite seleccionar la fecha a hasta la cual el examen estar&aacute; disponible; </li>
    <li>Permite seleccionar el tiempo m&aacute;ximo para hacer el examen; </li>
    <li>Opci&oacute;n que permite desactivar los l&iacute;mites de tiempo del examen; </li>
    <li>Permite definir si el examen debe ser cerrado apenas el l&iacute;mite de tiempo sea excedido, o puede ser terminado incluso con el tiempo excedido; </li>
    <li>Permite seleccionar el n&uacute;mero de intentos permitidos para hacer el examen; </li>
    <li>Permite seleccionar un sistema de calificaci&oacute;n; </li>
    <li>Permite establecer el n&uacute;mero de preguntas que se muestran en una p&aacute;gina del examen; </li>
    <li>Define si el orden de preguntas del examen debe ser aleatorio; </li>
    <li>Define si el orden de preguntas del examen debe ser aleatorio. Esta opci&oacute;n puede ser sobrepasada por la opci&oacute;n de respuestas aleatorias de una pregunta; </li>
    <li>Define si es necesario mostrar comentarios una vez respondida la pregunta; </li>
    <li>Define si es necesario mostrar la calificaci&oacute;n en la p&aacute;gina de resultados del examen; </li>
    <li>Define si el n&uacute;mero de respuestas debe ser mostrado en la p&aacute;gina de resultados del examen; </li>
    <li>Define si el n&uacute;mero de puntos obtenidos debe ser mostrado en la p&aacute;gina de resultados del examen; </li>
    <li>Permite asignar cualquier plantilla para la p&aacute;gina de resultados del examen; </li>
    <li>Permite establecer una plantilla para el certificado en PDF en caso de pasar examen con &eacute;xito o cualquier informe ampliado que puede ser visualizado una vez terminado el examen (tambi&eacute;n puede ser visualizado en la p&aacute;gina del Administrador de informes al hacer clic en el bot&oacute;n&nbsp;<img src="images/button-pdf.gif" alt="">); </li>
    <li>Permite mostrar un informe ampliado s&oacute;lo si se obtiene la calificaci&oacute;n seleccionada (o superior); </li>
    <li>Permite incluir los resultados en el informe en el formato PDF; </li>
    <li>Permite seleccionar una plantilla para enviar un informe por correo electr&oacute;nico; </li>
    <li>Direcciones de correo electr&oacute;nico de los destinatarios del informe; </li>
    <li>Permite especificar si este informe debe ser enviado por correo electr&oacute;nico al usuario; </li>
    <li>Permite seleccionar grupos para las cuales el examen estar&aacute; disponible; </li>
    <li>Permite asignar la disponibilidad del examen a todos los grupos de usuarios (incluso a aquellos que no est&aacute;n especificados expl&iacute;citamente en [28]); </li>
    <li>Permite seleccionar un examen que debe ser hecho antes de que el examen actual est&eacute; disponible; </li>
    <li>El siguiente examen que ser&aacute; ofrecido al usuario una vez terminado el examen actual; </li>
    <li>Notas del compilador del examen; </li>
    <li>Confirmar los cambios hechos; </li>
    <li>Confirmar los cambios hechos e ir a la p&aacute;gina de edici&oacute;n de preguntas del examen; </li>
    <li>Deshacer los cambios hechos. </li>
</ol>

<?php

require_once('footer.inc.php');

?>