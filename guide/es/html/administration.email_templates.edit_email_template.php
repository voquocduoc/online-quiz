<?php

require_once('header.inc.php');

?>

<h2>Creando/editando plantillas de correo</h2>
<p>Esta p&aacute;gina permite crear una nueva plantilla para los mensajes de correo o editar una plantilla existente.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">ID de plantilla:</td>
            <td>[1]</td>
            <td rowspan="6">
            <p>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Nombre de plantilla:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Descripci&oacute;n de plantilla:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Remitente:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Asunto:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Cuerpo del mensaje:</td>
            <td>[6]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>ID de la plantilla en el sitio; </li>
    <li>Nombre de la plantilla; </li>
    <li>Descripci&oacute;n corta de la plantilla; </li>
    <li>Direcci&oacute;n del remitente de mensajes; </li>
    <li>Asunto del mensaje; </li>
    <li>Texto del mensaje. Usted puede utilizar las etiquetas especiales en sus mensajes ([7]) </li>
    <li>Etiquetas de la plantilla. A la hora de generar el mensaje, las etiquetas ser&aacute;n autom&aacute;ticamente sustituidas por los datos correspondientes (por ejemplo, los datos acerca del usuario, algunos resultados del examen y otros datos). </li>
</ol>

<?php

require_once('footer.inc.php');

?>