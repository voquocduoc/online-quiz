<?php

require_once('header.inc.php');

?>

<h2>Detalles de un visitante</h2>
<table class="cmn">
    <tbody>
        <tr>
            <td class="td-bg">ID de visitante:</td>
            <td>[1]</td>
        </tr>
        <tr>
            <td class="td-bg">Tiempo transcurrido:</td>
            <td>[2]</td>
        </tr>
        <tr>
            <td class="td-bg">Usuario:</td>
            <td>[3]</td>
        </tr>
        <tr>
            <td class="td-bg">Visitas:</td>
            <td>[4]</td>
        </tr>
        <tr>
            <td class="td-bg">Fecha de inicio:</td>
            <td>[5]</td>
        </tr>
        <tr>
            <td class="td-bg">P&aacute;gina de entrada:</td>
            <td>[6]</td>
        </tr>
        <tr>
            <td class="td-bg">Fecha de fin:</td>
            <td>[7]</td>
        </tr>
        <tr>
            <td class="td-bg">P&aacute;gina de salida:</td>
            <td>[8]</td>
        </tr>
        <tr>
            <td class="td-bg">Direcci&oacute;n IP:</td>
            <td>[9]</td>
        </tr>
        <tr>
            <td class="td-bg">Nombre de host:</td>
            <td>[10]</td>
        </tr>
        <tr>
            <td class="td-bg">Remitente:</td>
            <td>[11]</td>
        </tr>
        <tr>
            <td class="td-bg">Agente de usuario:</td>
            <td>[12]</td>
        </tr>
    </tbody>
</table>
<ol>
    <li>ID del visitante; </li>
    <li>Tiempo tardado en la&nbsp;sesi&oacute;n; </li>
    <li>Datos del usuario en el sistema (si el usuario no est&aacute; registrado, entonces los datos para el usuario &ldquo;Invitado&rdquo; ser&aacute;n mostrados); </li>
    <li>N&uacute;mero total de las p&aacute;ginas visitadas por el usuario (incluyendo las que eran visitadas varias veces); </li>
    <li>Fecha y hora de inicio de la sesi&oacute;n; </li>
    <li>Enlace a la p&aacute;gina en la que empez&oacute; la sesi&oacute;n; </li>
    <li>Fecha y hora de fin de la sesi&oacute;n; </li>
    <li>Enlace a la p&aacute;gina en la que termin&oacute; la sesi&oacute;n; </li>
    <li>Direcci&oacute;n IP del equipo; </li>
    <li>Nombre de dominio que corresponde a la direcci&oacute;n IP; </li>
    <li>Enlace a la p&aacute;gina de la que vino el usuario; </li>
    <li>Agente de usuario (navegador); </li>
</ol>

<?php

require_once('footer.inc.php');

?>