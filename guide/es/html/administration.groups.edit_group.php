<?php

require_once('header.inc.php');

?>

<h2>Creando un grupo/editando propiedades de un grupo</h2>
<p>Esta p&aacute;gina permite crear nuevos grupos y editar los grupos existentes.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">ID de grupo:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Nombre de grupo:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Descripci&oacute;n de grupo:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <th colspan="2">Derechos de acceso:</th>
        </tr>
        <tr>
            <td class="td-bg">Ex&aacute;menes:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Banco de preguntas:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">Asignaturas:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Administrador de ex&aacute;menes:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">Sistemas de calificaci&oacute;n:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Plantillas de correo:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Plantillas de informes:</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">Administrador de informes:</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td class="td-bg">Usuarios:</td>
            <td>[12]</td>
        </tr>
        <tr>
            <td class="td-bg">Grupos:</td>
            <td>[13]</td>
        </tr>
        <tr>
            <td class="td-bg">Configuraci&oacute;n:</td>
            <td>[14]</td>
        </tr>
        <tr>
            <td class="td-bg">Estad&iacute;sticas web:</td>
            <td>[15]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>ID del grupo en el sitio web; </li>
    <li>Nombre del grupo; </li>
    <li>Descripci&oacute;n del grupo; </li>
</ol>
<h4>Derechos de acceso para el usuario incluido en un grupo espec&iacute;fico</h4>

<ol start="4">
    <li>Permite seleccionar un nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Hacer un examen&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Ver lista de ex&aacute;menes. Los usuarios del grupo pueden ver la lista de ex&aacute;menes, pero no pueden pasarlos.</li>
<li>Pasar examen. En este caso los usuarios del grupo pueden hacer ex&aacute;menes.</li>
</ul>
    <li>Permite seleccionar el nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Banco de preguntas&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Leer. Los usuarios del grupo pueden ver la informaci&oacute;n, pero no son capaces de modificarla.</li>
<li><i>Acceso a las p&aacute;ginas de creaci&oacute;n y edici&oacute;n. Un usuario puede ver, crear y modificar (pero no puede eliminar) los datos.</i></li>
<li>Acceso completo. Permite a los usuarios del grupo realizar cualquier operaci&oacute;n con los datos.</li>
</ul>
    <li>Permite seleccionar el nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Asignaturas&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Leer. Los usuarios del grupo pueden ver la informaci&oacute;n, pero no son capaces de modificarla.</li>
<li><i>Acceso a las p&aacute;ginas de creaci&oacute;n y edici&oacute;n. Un usuario puede ver, crear y modificar (pero no puede eliminar) los datos</i></li>
<li>Acceso completo. Permite a los usuarios del grupo realizar cualquier operaci&oacute;n con los datos.</li>
</ul>
    <li>Permite seleccionar el nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Administrador de ex&aacute;menes&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Leer. Los usuarios del grupo pueden ver la informaci&oacute;n, pero no son capaces de modificarla.</li>
<li><i>Acceso a las p&aacute;ginas de creaci&oacute;n y edici&oacute;n. Un usuario puede ver, crear y modificar (pero no puede eliminar) los datos</i></li>
<li>Acceso completo. Permite a los usuarios del grupo realizar cualquier operaci&oacute;n con los datos.</li>
</ul>
    <li>Permite seleccionar el nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Sistemas de calificaci&oacute;n&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Leer. Los usuarios del grupo pueden ver la informaci&oacute;n, pero no son capaces de modificarla.</li>
<li><i>Acceso a las p&aacute;ginas de creaci&oacute;n y edici&oacute;n. Un usuario puede ver, crear y modificar (pero no puede eliminar) los datos</i></li>
<li>Acceso completo. Permite a los usuarios del grupo realizar cualquier operaci&oacute;n con los datos.</li>
</ul>
    <li>Permite seleccionar el nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Plantillas de correo&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Leer. Los usuarios del grupo pueden ver la informaci&oacute;n, pero no son capaces de modificarla.</li>
<li><i>Acceso a las p&aacute;ginas de creaci&oacute;n y edici&oacute;n. Un usuario puede ver, crear y modificar (pero no puede eliminar) los datos</i></li>
<li>Acceso completo. Permite a los usuarios del grupo realizar cualquier operaci&oacute;n con los datos.</li>
</ul>
    <li>Permite seleccionar el nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Plantillas de informes&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Leer. Los usuarios del grupo pueden ver la informaci&oacute;n, pero no son capaces de modificarla.</li>
<li><i>Acceso a las p&aacute;ginas de creaci&oacute;n y edici&oacute;n. Un usuario puede ver, crear y modificar (pero no puede eliminar) los datos</i></li>
<li>Acceso completo. Permite a los usuarios del grupo realizar cualquier operaci&oacute;n con los datos.</li>
</ul>
    <li>Permite seleccionar el nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Administrador de informes&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Acceso para ver los resultados de ex&aacute;menes, certificados e informes del usuario</li>
<li>Acceso para ver los resultados de ex&aacute;menes, certificados e informes de todos los usuarios;</li>
<li><i>Acceso a las p&aacute;ginas de creaci&oacute;n y edici&oacute;n. Un usuario puede ver, crear y modificar (pero no puede eliminar) los datos</i></li>
<li>Acceso completo. Permite a los usuarios del grupo realizar cualquier operaci&oacute;n con los datos.</li>
</ul>
    <li>Permite seleccionar el nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Usuarios&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Leer. Los usuarios del grupo pueden ver la informaci&oacute;n, pero no son capaces de modificarla.</li>
<li><i>Acceso a las p&aacute;ginas de creaci&oacute;n y edici&oacute;n. Un usuario puede ver, crear y modificar (pero no puede eliminar) los datos</i></li>
<li>Acceso completo. Permite a los usuarios del grupo realizar cualquier operaci&oacute;n con los datos.</li>
</ul>
    <li>Permite seleccionar el nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Grupos&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Leer. Los usuarios del grupo pueden ver la informaci&oacute;n, pero no son capaces de modificarla.</li>
<li><i>Acceso a las p&aacute;ginas de creaci&oacute;n y edici&oacute;n. Un usuario puede ver, crear y modificar (pero no puede eliminar) los datos</i></li>
<li>Acceso completo. Permite a los usuarios del grupo realizar cualquier operaci&oacute;n con los datos.</li>
</ul>
    <li>Permite seleccionar el nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Configuraci&oacute;n&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Leer. Los usuarios del grupo pueden ver la informaci&oacute;n, pero no son capaces de modificarla.</li>
<li>Acceso completo. Permite a los usuarios del grupo realizar cualquier operaci&oacute;n con los datos.</li>
</ul>
    <li>Permite seleccionar el nivel de acceso para las p&aacute;ginas de la secci&oacute;n <strong>&ldquo;Estad&iacute;sticas web&rdquo;</strong>. Opciones posibles: </li>
<ul>
<li>Acceso denegado. Los usuarios del grupo no tienen ning&uacute;n derecho para esta secci&oacute;n.</li>
<li>Leer. Los usuarios del grupo pueden ver la informaci&oacute;n, pero no son capaces de modificarla.</li>
<li>Acceso completo. Permite a los usuarios del grupo realizar cualquier operaci&oacute;n con los datos.</p>
</ul>
</ol>

<p>Si un usuario est&aacute; incluido en varios grupos con derechos de acceso diferentes, entonces &eacute;l/ella tendr&aacute; los derechos m&aacute;ximos disponibles para &eacute;l/ella en uno de los grupos (los derechos m&aacute;s completos para cada elemento especificado por lo menos en un grupo).</p>

<?php

require_once('footer.inc.php');

?>