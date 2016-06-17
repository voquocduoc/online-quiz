<?php

require_once('header.inc.php');

?>

<h1>Administrador de informes</h1>
<p>Esta secci&oacute;n permite ver y analizar los resultados de ex&aacute;menes.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td colspan="15">
            <span class="left">[16] [17] [18]</span>
            <span class="right">[19] [20] [21] [22] [23] [24]</td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <th>ID</th>
            <th>Fecha</th>
            <th>Nombre de usuario</th>
            <th>Nombre de examen</th>
            <th>N&ordm; de intentos</th>
            <th>Tiempo excedido</th>
            <th>Puntos obtenidos</th>
            <th colspan="2">Puntos posibles</th>
            <th>Puntuaci&oacute;n</th>
            <th>Calificaci&oacute;n</th>
            <th colspan="3">Acci&oacute;n</th>
        </tr>
        <tr>
            <td>[1]</td>
            <td>[2]</td>
            <td>[3]</td>
            <td>[4] [5]</td>
            <td>[6]</td>
            <td>[7]</td>
            <td>[8]</td>
            <td>[9]</td>
            <td colspan="2">[10]</td>
            <td>[11]</td>
            <td>[12]</td>
            <td>[13]</td>
            <td>[14]</td>
            <td>[15]</td>
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
            <td colspan="2">&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
            <td>&hellip;</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>Permite seleccionar varios resultados de ex&aacute;menes (informes) con la ayuda de las casillas de verificaci&oacute;n y realizar operaciones con ellos en el modo de proceso por lotes ([15]); </li>
    <li>ID del informe en el sitio web; </li>
    <li>La fecha cuando el examen fue pasado; </li>
    <li>Usuario que pas&oacute; el examen. Usted puede ver la informaci&oacute;n sobre un usuario espec&iacute;fico al hacer clic en su nombre; </li>
    <li>ID del usuario. Este enlace permite ver y editar los perfiles de usuarios; </li>
    <li>Nombre del examen. Si hace clic en el nombre del examen, podr&aacute; ver el informe sobre este examen; </li>
    <li>Si esta casilla de verificaci&oacute;n est&aacute; seleccionada, eso significa que el l&iacute;mite de intentos para pasar el examen est&aacute; excedido. Un administrador o un usuario con derechos suficientes puede activar o desactivar esta casilla para restablecer el contador de intentos y permitir al usuario un intento m&aacute;s de pasar el examen; </li>
    <li>Esta opci&oacute;n muestra que el l&iacute;mite de tiempo para el examen est&aacute; excedido; </li>
    <li>Puntos obtenidos por el examen; </li>
    <li>Puntuaci&oacute;n m&aacute;xima para el examen; </li>
    <li>Puntuaci&oacute;n m&aacute;xima posible obtenida por el examen (en por ciento); </li>
    <li>Calificaci&oacute;n en el examen. Est&aacute; disponible si la configuraci&oacute;n del examen implica mostrar la calificaci&oacute;n; </li>
    <li><img src="images/button-view.gif" alt="">&nbsp;Ir a la p&aacute;gina de estad&iacute;sticas detalladas de respuestas a las preguntas del examen; </li>
    <li><img src="images/button-pdf.gif" alt="">&nbsp;Obtener un certificado/informe ampliado en el formato PDF. <img src="images/button-pdf-inactive.gif" alt="">&nbsp;significa que un certificado/informe ampliado no est&aacute; identificado; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar el informe; </li>
    <li><img src="images/button-cross.gif" alt="">&nbsp;Eliminar los informes seleccionados([1]); </li>
    <li>Permite seleccionar un usuario sobre el cual desea obtener la selecci&oacute;n de informe; </li>
    <li>Permite seleccionar un examen sobre el cual desea obtener la selecci&oacute;n de informe; </li>
    <li>N&uacute;meros de entradas que se muestran en la p&aacute;gina actual y la cantidad total de entradas; </li>
    <li>N&uacute;meros de p&aacute;ginas. Para ir a una p&aacute;gina con un n&uacute;mero determinado, haga clic en el n&uacute;mero correspondiente; </li>
    <li><img src="images/button-first.gif" alt="">&nbsp;Ir a la primera p&aacute;gina de la lista de informes; </li>
    <li><img src="images/button-prev.gif" alt="">&nbsp;Ir a la p&aacute;gina anterior; </li>
    <li><img src="images/button-next.gif" alt="">&nbsp;Ir a la p&aacute;gina siguiente;  </li>
    <li><img src="images/button-last.gif" alt="">&nbsp;Ir a la &uacute;ltima p&aacute;gina. </li>
</ol>

<?php

require_once('footer.inc.php');

?>