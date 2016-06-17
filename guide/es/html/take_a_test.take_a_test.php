<?php

require_once('header.inc.php');

?>

<h1>Secci&oacute;n &ldquo;Hacer un examen&rdquo; </h1>
<p>El m&oacute;dulo de ex&aacute;menes y tests le permite pasar ex&aacute;menes y tests con ayuda del <strong>&ldquo;Administrador de ex&aacute;menes&rdquo;</strong>. </p>
<p>Todos los ex&aacute;menes y tests asignados a un usuario que tiene la sesi&oacute;n iniciada en el sistema se visualizan en forma de una tabla.</p>
<table class="cmn">
    <tbody>
        <tr>
            <th>Examen</th>
            <th>Estado</th>
            <th>Empezar examen</th>
        </tr>
        <tr>
            <td>[1]<br>[2]</td>
            <td>[3]</td>
            <td><u>Empezar</u></td>
        </tr>
        <tr>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Nombre del examen; </li>
    <li>Descripci&oacute;n del examen; </li>
    <li>Informaci&oacute;n acerca de la disponibilidad del examen (disponible, n&uacute;mero de intentos permitidos, la fecha a partir de la cual el examen ser&aacute; disponible, etc.) </li>
</ol>
<p>Para empezar un examen, es suficiente seleccionar el examen necesario en la lista. La estructura de la p&aacute;gina est&aacute;ndar de un examen tiene la siguiente apariencia:</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">[1]</td>
            <td class="td-bg">[2]</td>
            <td class="td-bg">[3]</td>
        </tr>
        <tr>
            <td colspan="3">[4]</td>
        </tr>
        <tr>
            <td colspan="3" class="td-bg">[5]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Tiempo estimado que queda para el examen; </li>
    <li>Posici&oacute;n actual en el examen (el n&uacute;mero de la(s) pregunta(s) actual(es) y la cantidad total de preguntas); </li>
    <li>Nombre del examen o nombre de la secci&oacute;n actual; </li>
    <li>Pregunta(s); </li>
    <li>Botones de navegaci&oacute;n. </li>
</ol>
<p>Cuando el examen est&aacute; terminado, se visualiza la p&aacute;gina con los resultados (si es necesario). El contenido de la p&aacute;gina se define por el usuario de acuerdo con la configuraci&oacute;n del examen (nombre del examen, fecha del examen, tiempo tardado en el examen, calificaci&oacute;n en el sistema de calificaci&oacute;n seleccionado, n&uacute;mero de respuestas correctas, cantidad de puntos obtenidos y otros datos).</p>
<p>Adem&aacute;s, una vez terminado el examen, un usuario puede enviar un correo electr&oacute;nico con los resultados, generar un informe o certificado (incluso en el formato PDF imprimible) y ver la p&aacute;gina con los resultados detallados del examen (<strong>&ldquo;Administrador de informes&rdquo;</strong>).</p>

<?php

require_once('footer.inc.php');

?>