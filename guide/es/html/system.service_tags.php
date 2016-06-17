<?php

require_once('header.inc.php');

?>

<h1>Etiquetas especiales</h1>
<p>Las etiquetas especiales se utilizan para crear plantillas. En caso de usar una plantilla para crear un mensaje de correo (as&iacute; como un informe o certificado), las etiquetas se sustituyen por los datos correspondientes (datos del usuario, resultados del examen, etc.).</p>
<table class="cmn">
    <tbody>
        <tr>
            <th>Nombre de etiqueta</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td class="td-bg">[USER_ID]</td>
            <td>ID del usuario en el sitio web</td>
        </tr>
        <tr>
            <td class="td-bg">[USERNAME]</td>
            <td>Nombre de usuario en el sitio web</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_PASSWORD]</td>
            <td>Contrase&ntilde;a del usuario</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CHECKWORD]</td>
            <td>Palabra de verificaci&oacute;n de la cuenta del usuario</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_TITLE]</td>
            <td>T&iacute;tulo</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_FIRST_NAME]</td>
            <td>Nombre</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_LAST_NAME]</td>
            <td>Apellidos</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_MIDDLE_NAME]</td>
            <td>Segundo nombre</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_E-MAIL]</td>
            <td>Direcci&oacute;n de correo electr&oacute;nico</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_ADDRESS]</td>
            <td>Direcci&oacute;n</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CITY]</td>
            <td>Ciudad</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_STATE]</td>
            <td>Estado/provincia</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_ZIP]</td>
            <td>C&oacute;digo postal</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_COUNTRY]</td>
            <td>Pa&iacute;s</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_PHONE]</td>
            <td>Tel&eacute;fono</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_FAX]</td>
            <td>Fax</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_MOBILE]</td>
            <td>M&oacute;vil</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_PAGER]</td>
            <td>Buscapersonas</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_IPPHONE]</td>
            <td>Tel&eacute;fono IP</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_WEBPAGE]</td>
            <td>P&aacute;gina web</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_ICQ]</td>
            <td>ICQ</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_MSN]</td>
            <td>MSN</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_AOL]</td>
            <td>AOL</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_GENDER]</td>
            <td>Sexo</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_HUSBANDWIFE]</td>
            <td>Esposo (esposa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CHILDREN]</td>
            <td>Hijos</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_TRAINER]</td>
            <td>Instructor</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_COMPANY]</td>
            <td>Empresa</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CPOSITION]</td>
            <td>Cargo</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CDEPARTMENT]</td>
            <td>Departamento</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_COFFICE]</td>
            <td>Oficina</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CADDRESS]</td>
            <td>Direcci&oacute;n (para una empresa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CCITY]</td>
            <td>Ciudad (para una empresa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CSTATE]</td>
            <td>Estado/provincia (para una empresa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CZIP]</td>
            <td>C&oacute;digo postal (para una empresa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CCOUNTRY]</td>
            <td>Pa&iacute;s (para una empresa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CPHONE]</td>
            <td>Tel&eacute;fono (para una empresa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CFAX]</td>
            <td>Fax (para una empresa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CMOBILE]</td>
            <td>M&oacute;vil (para una empresa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CPAGER]</td>
            <td>Buscapersonas (para una empresa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CIPPHONE]</td>
            <td>Tel&eacute;fono IP (para una empresa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_CWEBPAGE]</td>
            <td>P&aacute;gina web (para una empresa)</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD1]</td>
            <td>Campo personalizado n&ordm; 1</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD2]</td>
            <td>Campo personalizado n&ordm; 2</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD3]</td>
            <td>Campo personalizado n&ordm; 3</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD4]</td>
            <td>Campo personalizado n&ordm; 4</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD5]</td>
            <td>Campo personalizado n&ordm; 5</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD6]</td>
            <td>Campo personalizado n&ordm; 6</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD7]</td>
            <td>Campo personalizado n&ordm; 7</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD8]</td>
            <td>Campo personalizado n&ordm; 8</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD9]</td>
            <td>Campo personalizado n&ordm; 9</td>
        </tr>
        <tr>
            <td class="td-bg">[USER_USERFIELD10]</td>
            <td>Campo personalizado n&ordm; 10</td>
        </tr>
        <tr>
            <td class="td-bg">[TEST_ID]</td>
            <td>ID del examen en el sitio web</td>
        </tr>
        <tr>
            <td class="td-bg">[TEST_NAME]</td>
            <td>Nombre del examen</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_ID]</td>
            <td>ID de resultados del examen</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_DATE]</td>
            <td>Fecha de hacer el examen</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_TIME_SPENT]</td>
            <td>Tiempo tardado en hacer el examen</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_TIME_EXCEEDED]</td>
            <td>Indica si l&iacute;mite de tiempo para hacer el examen fue excedido</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_POINTS_SCORED]</td>
            <td>N&uacute;mero de puntos obtenidos</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_POINTS_POSSIBLE]</td>
            <td>N&uacute;mero m&aacute;ximo posible de puntos para el examen</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_PERCENTS]</td>
            <td>Puntos obtenidos (en por ciento) respecto al n&uacute;mero m&aacute;ximo posible de puntos</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_GRADE]</td>
            <td>Calificaci&oacute;n recibida en el examen</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_GRADE_FEEDBACK]</td>
            <td>Texto de comentarios para la calificaci&oacute;n sacada en el examen</td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_DETAILED_1]</td>
            <td>Informaci&oacute;n detallada acerca de todas las respuestas a las preguntas del examen, incluyendo:</p>
            <ul>
                <li>Texto corto de cada pregunta </li>
                <li>La respuesta dada es correcta o no </li>
                <li>Puntos obtenidos por la respuesta </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_DETAILED_2]</td>
            <td>Informaci&oacute;n detallada acerca de todas las respuestas incorrectas a las preguntas del examen, incluyendo:</p>
            <ul>
                <li>Texto corto de cada pregunta respondida incorrectamente </li>
                <li>La respuesta dada es correcta o no </li>
            </ul>
            <ul>
                <li>Puntos obtenidos por la respuesta </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_DETAILED_3]</td>
            <td>Informaci&oacute;n detallada acerca de todas las respuestas a las preguntas del examen, incluyendo:</p>
            <ul>
                <li>Texto completo de cada pregunta </li>
                <li>Texto completo de las variantes de respuestas </li>
                <li>Respuesta correcta </li>
                <li>Respuesta del usuario </li>
                <li>La respuesta dada es correcta o no </li>
                <li>Puntos obtenidos por la respuesta </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td class="td-bg">[RESULT_DETAILED_4]</td>
            <td>Informaci&oacute;n detallada acerca de todas las respuestas incorrectas a las preguntas del examen, incluyendo:</p>
            <ul>
                <li>Texto completo de cada pregunta respondida incorrectamente </li>
                <li>Texto completo de las variantes de respuestas </li>
                <li>Respuesta correcta </li>
                <li>Respuesta del usuario </li>
                <li>La respuesta dada es correcta o no </li>
                <li>Puntos obtenidos por la respuesta </li>
            </ul>
            </td>
        </tr>
        <tr>
            <td class="td-bg">[IGIVETEST_URL]</td>
            <td>Ruta completa de la URL del sistema iGiveTest</td>
        </tr>
        <tr>
            <td class="td-bg">[PAGE_BREAK]</td>
            <td>Salto de p&aacute;gina (permite especificar expl&iacute;citamente el fin de una p&aacute;gina, por ejemplo, para informes en el formato PDF o instrucciones del examen)</td>
        </tr>
    </tbody>
</table>

<?php

require_once('footer.inc.php');

?>