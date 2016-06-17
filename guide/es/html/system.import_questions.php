<?php

require_once('header.inc.php');

?>

<h1>Importando ex&aacute;menes/preguntas de un examen de documentos de texto</h1>
<p>Es frecuente que uno tenga la necesidad de importar ex&aacute;menes de un documento de texto (a veces, es m&aacute;s f&aacute;cil crear un examen con la ayuda de un ordinario editor de texto). Es que el proceso de introducir a mano preguntas y respuestas en los campos puede resultar algo fastidioso.</p>
<p>El sistema de importaci&oacute;n fue desarrollado para evitar este proceso fastidioso. El sistema permite importar ex&aacute;menes creados en un editor de texto casi autom&aacute;ticamente.</p>
<h2>Estructurando un documento antes de importar</h2>
<p>Los ex&aacute;menes creados en un editor de texto deben corresponder a varios requisitos para que los ex&aacute;menes sean importables de modo inequ&iacute;voco.</p>
<p><strong>Ante todo</strong>, cualquier documento a importar debe estar estructurado a base de alg&uacute;n principio. Es necesario que el documento pueda ser dividido en los elementos siguientes:</p>
<ul>
    <li>Texto de cada pregunta </li>
    <li>Indicador del tipo de la pregunta </li>
    <li>Texto de cada variante de respuesta </li>
    <li>Texto de cada comentario para la pregunta </li>
    <li>Indicador de la respuesta correcta </li>
    <li>Puntos que se dan por la respuesta correcta </li>
    <li>Indicador de la asignatura de la pregunta </li>
    <li>Instrucciones para cada pregunta </li>
</ul>
<p>
<p><strong>Cada elemento debe tener un cierto prefijo. Este prefijo puede ser cualquier conjunto de caracteres (definido por el usuario).</strong></p>
</p>
<p>Por ejemplo, se desea importar las siguientes preguntas de examen:</p>
<p class="example">Seleccione la mejor respuesta a la pregunta.
<br><strong>&iquest;Cu&aacute;l es la rama principal de la industria en la sociedad post-industrial contempor&aacute;nea?</strong>
<br>&nbsp;industria extractiva
<br>&nbsp;industria manufacturera
<br>&nbsp;agricultura
<br>&nbsp;tecnolog&iacute;as de informaci&oacute;n (*)
<br><br>Seleccione todas las respuestas correctas a la pregunta.
<br><strong>A diferencia de la naturaleza, la sociedad:</strong>
<br>&nbsp;es un sistema
<br>&nbsp;se desarrolla
<br>&nbsp;es el generador de la cultura (*)
<br>&nbsp;empieza con la letra &ldquo;s&rdquo; (*)
<br>...</p>
<p>El s&iacute;mbolo &ldquo;(*)&rdquo; indica que la respuesta es correcta. Entonces, ser&iacute;a l&oacute;gico presentar estas preguntas en la siguiente forma:</p>
<p><span class="prefix">[Prefijo de pregunta]</span> <span class="value"> <strong>&iquest;Cu&aacute;l es la rama principal de la industria en la sociedad post-industrial contempor&aacute;nea?</strong></span>
<br><span class="prefix">[Prefijo de instrucciones de pregunta]</span> <span class="value"> Seleccione la mejor respuesta a la pregunta.</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">industria extractiva</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">industria manufacturera</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">agricultura</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">tecnolog&iacute;as de informaci&oacute;n</span>
<br><span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value">4</span>
<br><span class="prefix">[Prefijo de pregunta]</span> <span class="value"> <strong>A diferencia de la naturaleza, la sociedad:</strong></span>
<br><span class="prefix">[Prefijo de instrucciones de pregunta]</span> <span class="value"> Seleccione todas las respuestas correctas a la pregunta.</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">es un sistema</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">se desarrolla</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">es el generador de la cultura</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">empieza con la letra &ldquo;s&rdquo; (*)</span>
<br><span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value">3+4</span>
<br><span class="prefix">[Prefijo de pregunta]</span> <span class="value">...</span></p>
<p>Por lo tanto, es posible que dentro de los elementos haya cualquier texto (as&iacute; como gr&aacute;ficos, Flash, audio y v&iacute;deo) excepto el texto de los prefijos de este o cualquier otro elemento. En caso de que el prefijo se repita dentro de un elemento, el sistema decide que este elemento ya est&aacute; terminado y empieza un elemento nuevo (de acuerdo con el prefijo).</p>
<p>Por ejemplo, si elegimos el prefijo <span class="prefix">pregunta</span> para la pregunta, el prefijo <span class="prefix">respuesta</span> para las variantes de respuestas y el prefijo <span class="prefix">correcto</span> para el indicador de la respuesta correcta:</p>
<p><span class="prefix">pregunta</span> <span class="value">&iquest;Qu&eacute; vocales se encuentran entre las letras &ldquo;D&rdquo; y &ldquo;K&rdquo; en el alfabeto? <strong>Para responder a la </span><span class="prefix">pregunta</span> <span class="value">, por favor, seleccione todas las </span><span class="prefix">respuesta</span><span class="value">s correctas.</span></strong>
<br><span class="prefix">repuesta</span> <span class="value"> A</span>
<br><span class="prefix">repuesta</span> <span class="value"> E</span>
<br><span class="prefix">repuesta</span> <span class="value"> I</span>
<br><span class="prefix">repuesta</span> <span class="value"> O</span>
<br><span class="prefix">repuesta</span> <span class="value"> U</span>
<br><span class="prefix">correcto</span> <span class="value"> 2,3</span></p>
<p>Este ejemplo resultar&aacute; en importar dos preguntas incorrectas en vez de una que hace falta. Es decir, la primera pregunta ser&aacute; <em>&ldquo;&iquest;Qu&eacute; vocales se encuentran entre las letras &ldquo;D&rdquo; y &ldquo;K&rdquo; en el alfabeto? Para responder a la&rdquo;</em> y ser&aacute; importada sin respuestas correctas. La segunda pregunta ser&aacute; &ldquo;<em>, por favor, seleccione todas las</em>&rdquo; con las variantes de respuesta &ldquo;<em>s correctas.</em>&rdquo;, &ldquo;<em>A</em>,&rdquo; &ldquo;<em>E</em>,&rdquo; &ldquo;<em>I</em>&rdquo;, &ldquo; <em>O</em>&rdquo; y &ldquo;<em>U</em>&rdquo;. Adem&aacute;s, como correctas ser&aacute;n identificadas las variantes &ldquo;<em>A</em>&rdquo; y &ldquo;<em>E</em>&rdquo; en vez de &ldquo; <em>E</em>&rdquo; e &ldquo;<em>I</em>.&rdquo;</p>
<p>Por eso, es muy recomendable que utilice conjuntos de caracteres que no pueden aparecer en el texto de preguntas, respuestas, comentarios, etc. Por ejemplo, es casi imposible que tales prefijos como <span class="prefix">%pregunta%</span>, <span class="prefix">%respuesta%</span> y <span class="prefix">%correcto%</span> (o <span class="prefix">%p</span>, <span class="prefix">%r</span>, <span class="prefix">%c</span>) aparezcan en alg&uacute;n texto:</p>
<p><span class="prefix">%pregunta%</span> <span class="value"> &iquest;Qu&eacute; vocales se encuentran entre las letras &ldquo;D&rdquo; y &ldquo; K&rdquo; en el alfabeto?</span>
<br><span class="prefix">%respuesta%</span> <span class="value"> A</span>
<br><span class="prefix">%respuesta%</span> <span class="value"> E</span>
<br><span class="prefix">%respuesta%</span> <span class="value"> I</span>
<br><span class="prefix">%respuesta%</span> <span class="value"> O</span>
<br><span class="prefix">%respuesta%</span> <span class="value"> U</span>
<br><span class="prefix">%correcto%</span> <span class="value"> 2,3</span></p>
<p>Adem&aacute;s, es necesario evitar prefijos que contienen otros prefijos y pueden ser interpretados de modo err&oacute;neo.</p>
<p>Por ejemplo, si usamos el prefijo <span class="prefix">%p</span> para el texto de la pregunta y el prefijo <span class="prefix">%ptipo</span> para el tipo de la pregunta, no se sabr&aacute; que se deber&aacute; hacer si la secuencia &ldquo;<span class="prefix">%ptipo</span>&rdquo; aparecer&aacute; en el texto. En algunos casos, podr&iacute;a ser el texto de una pregunta (ya que contiene el prefijo del texto de la pregunta <span class="prefix">%p</span>), en otros casos,&nbsp;podr&iacute;a ser el prefijo del tipo de la pregunta.</p>
<p><strong>Adem&aacute;s</strong>, a la hora de crear&nbsp;preguntas, es necesario mantener un cierto orden, de lo contrario, no se podr&aacute; entender d&oacute;nde termina una pregunta y comienza la siguiente.</p>
<p>
<p><strong>El primer elemento de una pregunta debe ser la pregunta misma (el texto de la pregunta) y los dem&aacute;s elementos deben estar a continuaci&oacute;n.</strong></p>
</p>
<p>Por ejemplo, ser&iacute;a incorrecto hacer lo siguiente:</p>
<p><span class="prefix">[Prefijo de instrucciones de pregunta]</span> <span class="value">Instrucciones para la pregunta N&ordm; 1</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Respuesta N&ordm; 1 para la pregunta N&ordm; 1</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Respuesta N&ordm; 2 para la pregunta N&ordm; 1</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Respuesta N&ordm; 3 para la pregunta N&ordm; 1</span>
<br><span class="prefix">[Prefijo de pregunta]</span> <span class="value"><strong>Pregunta N&ordm; 1</strong></span>
<br><span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value">1,3</span>
<br><span class="prefix">[Prefijo de instrucciones de pregunta]</span> <span class="value">Instrucciones para la pregunta N&ordm; 2</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Respuesta N&ordm; 1 para la pregunta N&ordm; 2</span>
<br><span class="prefix">[Prefijo de pregunta]</span> <span class="value"><strong>Pregunta N&ordm; 2</strong></span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Respuesta N&ordm; 2 para la pregunta N&ordm; 2</span>
<br><span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value">1</span>
<br><span class="value">...</span></p>
<p>La pregunta misma debe ser el primer elemento. Por ejemplo:</p>
<p><span class="prefix">[Prefijo de pregunta]</span> <span class="value"><strong>Pregunta N&ordm; 1</strong></span>
<br><span class="prefix">[Prefijo de instrucciones de pregunta]</span> <span class="value">Instrucciones para la pregunta N&ordm; 1</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Respuesta N&ordm; 1 para la pregunta N&ordm; 1</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Respuesta N&ordm; 2 para la pregunta N&ordm; 1</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Respuesta N&ordm; 3 para la pregunta N&ordm; 1</span>
<br><span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value">1,3</span>
<br><span class="prefix">[Prefijo de pregunta]</span> <span class="value"><strong>Pregunta N&ordm; 2</strong></span>
<br><span class="prefix">[Prefijo de instrucciones de pregunta]</span> <span class="value">Instrucciones para la pregunta N&ordm; 2</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Respuesta N&ordm; 1 para la pregunta N&ordm; 2</span>
<br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Respuesta N&ordm; 2 para la pregunta N&ordm; 2</span>
<br><span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value">1</span>
<br><span class="value">...</span></p>
<h2>&iquest;Qu&eacute; prefijos existen y c&oacute;mo</a> debe ser usados?</h2>
<p>Para la importaci&oacute;n de ex&aacute;menes, es posible usar varios elementos que son comunes para todos los ex&aacute;menes. La descripci&oacute;n detallada de todos estos elementos se da a continuaci&oacute;n.</p>
<table class="cmn">
    <tbody>
        <tr>
            <td><strong>Elemento</strong></td>
            <td><strong>Descripci&oacute;n</strong></td>
        </tr>
        <tr>
            <td>Prefijo de pregunta</td>
            <td>Una pregunta puede contener cualquier informaci&oacute;n (texto con im&aacute;genes gr&aacute;ficos, Flash, audio y v&iacute;deo).</td>
        </tr>
        <tr>
            <td>Prefijo de tipo de pregunta</td>
            <td>El tipo de la pregunta se establece mediante el nombre de tipo o un n&uacute;mero de 1 a 7: 1 &ndash; opci&oacute;n m&uacute;ltiple, 2 &ndash; respuestas m&uacute;ltiples, 3 &ndash; ordenar, 4 &ndash; combinar, 5 &ndash; respuesta corta, 6 &ndash; rellenar espacio y 7 &ndash; composici&oacute;n.</p>

            <p>Por ejemplo, <span class="prefix">[Prefijo de tipo de pregunta]</span> <span class="value">5</span> indica que la pregunta actual requiere que la respuesta sea introducida.</p>

            <p>A veces no es necesario indicar expl&iacute;citamente el tipo de la pregunta. Si la forma de la respuesta correcta permite determinar el tipo de la pregunta de un modo inequ&iacute;voco (vea abajo &ldquo;Prefijo para respuesta correcta&rdquo;), entonces no es necesario especificar el tipo de la pregunta.</p>

            <p>Es recomendable especificar el tipo de la pregunta delante de las variantes de respuestas (y la respuesta correcta) para que los campos de respuesta sean formateados de acuerdo con el tipo de la pregunta.</td>
        </tr>
        <tr>
            <td>Prefijo de opci&oacute;n</td>
            <td>La variante de respuesta que puede contener cualquier informaci&oacute;n.</td>
        </tr>
        <tr>
            <td>Prefijo de opci&oacute;n (2&ordf; columna)</td>
            <td>La variante de respuesta que puede contener cualquier informaci&oacute;n. Este elemento se utiliza cuando usted desea poner la variante de respuesta en la segunda columna (para combinar variantes de dos columnas como respuesta).</p>

            <p>Por ejemplo:</p>

            <p><span class="prefix">[Prefijo de pregunta]</span> <span class="value">Combine los elementos</span>
            <br><span class="prefix">[Prefijo de tipo de pregunta]</span> <span class="value">4</span>
            <br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">El Sol</span>
            <br><span class="prefix">[Prefijo de opci&oacute;n (2&ordf; columna)]</span> <span class="value">Con patas</span>
            <br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Hielo</span>
            <br><span class="prefix">[Prefijo de opci&oacute;n (2&ordf; columna)]</span> <span class="value">Caliente</span>
            <br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Mesa</span>
            <br><span class="prefix">[Prefijo de opci&oacute;n (2&ordf; columna)]</span> <span class="value">Dinero</span>
            <br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">Salario</span>
            <br><span class="prefix">[Prefijo de opci&oacute;n (2&ordf; columna)]</span> <span class="value">Fr&iacute;o</span>
            <br><span class="prefix">[Prefijo de opci&oacute;n]</span> <span class="value">D&iacute;a</span>
            <br><span class="prefix">[Prefijo de opci&oacute;n (2&ordf; columna)]</span> <span class="value">La tarde</span>
            <br><span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value">1-2,2-4,3-1,4-3,5-5</span></td>
        </tr>
        <tr>
            <td>Prefijo de comentarios de la opci&oacute;n:</td>
            <td>Los comentarios para la respuesta pueden contener cualquier informaci&oacute;n. Este elemento se utiliza en caso de que haya necesidad de mostrar un comentario, si se elige una cierta opci&oacute;n.</td>
        </tr>
        <tr>
            <td>Prefijo para respuesta correcta</td>
            <td>La respuesta correcta contiene el(los) n&uacute;mero(s) de la(s) respuesta(s) correcta(s).</p>

            <p>Para una pregunta con una simple respuesta &ndash; el n&uacute;mero de la respuesta correcta o varias respuestas correctas, separados por el s&iacute;mbolo &quot;;&quot;. Por ejemplo, <span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value"> 3</span> indica que la tercera respuesta es correcta. <span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value"> 3;5</span> indica que tanto la tercera respuesta como la quinta son correctas.</p>
            <p>Para un conjunto desordenado &ndash; la lista de los n&uacute;meros de todas las respuestas correctas separados por el s&iacute;mbolo &quot;+&quot;. Por ejemplo, <span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value"> 7+1+3</span> indica que el conjunto que consiste de la primera, tercera y s&eacute;ptima respuesta constituye la respuesta correcta.</p>

            <p>Para un conjunto ordenado &ndash; la lista de los n&uacute;meros de todas las respuestas correctas separados por el s&iacute;mbolo &quot;,&quot;. Por ejemplo, <span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value">1,4,3</span> indica que la cadena que consiste de la primera, cuarta y tercera respuesta constituye la respuesta correcta.</p>

            <p>Para una pregunta de combinaci&oacute;n &ndash; la lista de los n&uacute;meros de todas las respuestas correctas separados por el s&iacute;mbolo &quot;-&quot; y las parejas mismas por el s&iacute;mbolo &quot;,&quot;. Por ejemplo, <span class="prefix">[Prefijo para respuesta correcta]</span> <span class="value">1-1,2-3,3-2</span> indica que la respuesta correcta es la combinaci&oacute;n del primer elemento en la primera columna con el primer elemento en la segunda columna, el segundo elemento con el tercero y el tercer elemento con el segundo.</p>

            <p>Para las preguntas que requieren que la respuesta y/o la combinaci&oacute;n de palabras clave sean introducidas, no hace falta especificar la respuesta correcta, pues que ya est&aacute; especificada en la variante de respuesta.</td>
        </tr>
        <tr>
            <td>Prefijo de valor de puntos</td>
            <td>Este elemento contiene la cantidad de puntos (en forma de un n&uacute;mero entero) que obtiene un usuario, si la respuesta es correcta. Por ejemplo, <span class="prefix">[Prefijo de valor de puntos]</span> <span class="value">3</span> indica que la respuesta correcta a la pregunta actual trae tres puntos.</td>
        </tr>
        <tr>
            <td>Prefijo de asignatura de pregunta</td>
            <td>La asignatura de la pregunta contiene el nombre o el identificador de la asignatura de la pregunta. Por ejemplo, <span class="prefix">[Prefijo de asignatura de pregunta]</span> <span class="value">F&iacute;sica</span> indica que la pregunta actual se refiere a la asignatura &ldquo;F&iacute;sica&rdquo;.</p>
            <p>Si la pregunta se refiere a la asignatura especificada en la configuraci&oacute;n predeterminada del examen, no es necesario especificar la asignatura de la pregunta.</td>
        </tr>
        <tr>
            <td>Prefijo de instrucciones de pregunta</td>
            <td>Las instrucciones para la pregunta pueden contener cualquier tipo de informaci&oacute;n.</td>
        </tr>
    </tbody>
</table>

<?php

require_once('footer.inc.php');

?>
