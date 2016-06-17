<?php

// Customizable (you can customize/override this data in custom.lng.php):
// ----------------------------------------------------------------------
// Branding:
$lngstr['branding']['top_logo'] = '<img src="images/logo.jpg" width=200 height=40>';
$lngstr['branding']['btm_sign'] = '<a target="_blank" href="/">Trang chủ</a> 
| <a target="_blank" href="/diendan/">Diễn đàn</a> 
| <a target="_blank" href="/nhac/">Nghe nhạc</a> 
| <a target="_blank" href="/soft/">Phần mềm</a> 
| <a target="_blank" href="/luubut/">Lưu bút</a> 
| <a target="_blank" href="/uocnguyen/">Ước nguyện</a> 
| <a target="_blank" href="/tintuc/">Tin tức</a> 
| <a target="_blank" href="/tudien/">Từ điển</a>
<br>Copyright &copy; TânPhú.Net 2008. All Rights Reserved.';
// Sign in page:
$lngstr['page_signin_box_intro'] = '';

// Non-customizable (it is not recommended to customize this data):
// ----------------------------------------------------------------
$lngstr['branding']['powered_by'] = 'Trắc nghiệm Tân Phú v'.IGT_VERSION.'';
// General:
$lngstr['meta_charset'] = 'iso-8859-1';
$lngstr['sql_charset'] = 'latin1';
$lngstr['meta_contentlanguage'] = 'es';
$lngstr['language']['date_only_format'] = '%m/%d/%Y'; // 'm/d/Y'
$lngstr['language']['date_format'] = '%m/%d/%y %I:%M %p'; // 'm/d/y g:i a'
$lngstr['language']['date_format_full'] = '%B %d, %Y %I:%M:%S %p'; // 'F j, Y g:i:s a'
$lngstr['language']['calendar']['date_format'] = '%Y-%m-%d %H:%M';
$lngstr['text_direction'] = 'ltr';
$lngstr['languages'] = array('es' => 'Spanish', 'en' => 'English', 'de' => 'German', 'fr' => 'French', 'nl' => 'Dutch', 'hr' => 'Croatian');
$lngstr['language_long'] = 'spanish';
$lngstr['language']['locale'] = array('es_MX', 'es', 'es', 'es', 'spanish');
$lngstr['language']['currency'] = '$%.2f';
$lngstr['language']['currency_name'] = 'USD';
$lngstr['language']['list_separator'] = ',';

$lngstr['calendar_month'] = 'Mes';
$lngstr['calendar_day'] = 'D�a';
$lngstr['calendar_year'] = 'A�o';
$lngstr['calendar_hour'] = 'Hora';
$lngstr['calendar_minute'] = 'Minuto';
$lngstr['time_days'] = 'D�as';
$lngstr['time_days_short'] = 'd�as';
$lngstr['time_hours'] = 'Horas';
$lngstr['time_hours_short'] = 'hr.';
$lngstr['time_minutes'] = 'Minutos';
$lngstr['time_minutes_short'] = 'min.';
$lngstr['time_seconds'] = 'Segundos';
$lngstr['time_seconds_short'] = 'seg.';
$lngstr['time_donotuse'] = 'No utilizar';
$lngstr['calendar']['hint'] = 'Calendario...';

$lngstr['calendar_months'] = array(
	1 => 'Enero',
	2 => 'Febrero',
	3 => 'Marzo',
	4 => 'Abril',
	5 => 'Mayo',
	6 => 'Junio',
	7 => 'Julio',
	8 => 'Agosto',
	9 => 'Septiembre',
	10 => 'Octubre',
	11 => 'Noviembre',
	12 => 'Diciembre',
	);

$lngstr['label_yes'] = 'S�';
$lngstr['label_no'] = 'No';
$lngstr['label_undefined'] = 'No definido';
$lngstr['label_partially'] = 'Parcialmente';
$lngstr['label_notapplicable'] = 'n/d';
$lngstr['label_all'] = 'Todo';
$lngstr['label_noname'] = '[Sin nombre]';
$lngstr['label_none'] = '- Ninguno -';
$lngstr['label']['print_version'] = 'Ver versi�n de impresi�n';
$lngstr['label']['KtoLofN'] = '%d - %d de %d';

$lngstr['label_navigate_show'] = 'Mostrar:';
$lngstr['button_next'] = 'Siguiente';
$lngstr['button_prev'] = 'Anterior';
$lngstr['button_accept'] = 'Aceptar';
$lngstr['button_next_page'] = 'Ir a la siguiente p�gina';
$lngstr['button_prev_page'] = 'Ir a la p�gina anterior';
$lngstr['button_first_page'] = 'Ir a la primera p�gina';
$lngstr['button_last_page'] = 'Ir a la �ltima p�gina';

$lngstr['label']['view_edit_user'] = 'Ver/editar el perfil de usuario';

$lngstr['label_atype_multiple_choice'] = 'Opci�n m�ltiple';
$lngstr['label_atype_multiple_answer'] = 'Respuestas m�ltiples';
$lngstr['label_atype_truefalse'] = 'Verdadero/falso';
$lngstr['label_atype_truefalse_true'] = 'Verdadero';
$lngstr['label_atype_truefalse_false'] = 'Falso';
$lngstr['label_atype_fillintheblank'] = 'Respuesta corta';
$lngstr['label_atype_essay'] = 'Composici�n';
$lngstr['label_atype_random'] = 'Pregunta aleatoria';

	$lngstr['page_all']['mnemonic_code'] = 'Mnemonic code:';

$lngstr['item_separator'] = ' - ';
$lngstr['page_title_signin'] = 'Entrar';
$lngstr['page_title_register'] = 'Registrarse';
$lngstr['page_title_lostpassword'] = '�Olvid� su contrase�a?';
$lngstr['page_title_panel'] = 'Hacer un examen';
$lngstr['page_header_panel'] = $lngstr['page_title_panel'];
$lngstr['page_title_test'] = 'Hacer un examen';
$lngstr['page_title_results'] = 'Administrador de informes';
$lngstr['page_header_results'] = $lngstr['page_title_results'];
 $lngstr['page_title_results_questions'] = 'Detalles de preguntas';
 $lngstr['page_header_results_questions'] = $lngstr['page_title_results_questions'];
 $lngstr['page_title_results_answers'] = 'Detalles de respuesta';
 $lngstr['page_header_results_answers'] = $lngstr['page_title_results_answers'];
 $lngstr['page_reportsmanager']['correct_answer'] = 'Pregunta con respuesta correcta';
 $lngstr['page_reportsmanager']['your_answer'] = 'Su respuesta';
$lngstr['page_reportsratings']['title'] = 'Clasificaci�n';
$lngstr['page_reportsratings']['header'] = $lngstr['page_reportsratings']['title'];
$lngstr['page_statistics']['title'] = 'Estad�sticas';
$lngstr['page_statistics']['header'] = $lngstr['page_statistics']['title'];
 $lngstr['page_statistics_resultid']['title'] = 'Informe detallado de examen';
 $lngstr['page_statistics_resultid']['header'] = 'Informe detallado de examen para: %s';
$lngstr['page_title_edittests'] = 'Administrador de ex�menes';
$lngstr['page_header_edittests'] = $lngstr['page_title_edittests'];
 $lngstr['page_title_test_settings'] = 'Configuraci�n de examen';
 $lngstr['page_header_test_settings'] = $lngstr['page_title_test_settings'];
 $lngstr['page_title_test_assignto'] = 'Asignar a:';
 $lngstr['page_header_test_assignto_tests'] = 'Ex�menes';
 $lngstr['page_header_test_assignto_groups'] = 'Grupos';
 $lngstr['page_title_test_questions'] = 'Preguntas de examen';
 $lngstr['page_header_test_questions'] = $lngstr['page_title_test_questions'];
 $lngstr['page_title_test_sections'] = 'Secciones de examen';
 $lngstr['page_header_test_sections'] = $lngstr['page_title_test_sections'];
 $lngstr['page_title_import_questions'] = 'Importar preguntas';
 $lngstr['page_header_import_questions'] = $lngstr['page_title_import_questions'];
 $lngstr['page_testmanager_stats']['title'] = 'Estad�sticas de examen';
 $lngstr['page_testmanager_stats']['header'] = $lngstr['page_testmanager_stats']['title'];
$lngstr['page_title_questionbank'] = 'Banco de preguntas';
$lngstr['page_header_questionbank'] = $lngstr['page_title_questionbank'];
 $lngstr['page_title_question_stats'] = 'Estad�sticas de preguntas';
 $lngstr['page_header_question_stats'] = $lngstr['page_title_question_stats'];
 $lngstr['page_title_edit_question'] = 'Editar pregunta';
 $lngstr['page_header_edit_question'] = $lngstr['page_title_edit_question'];
$lngstr['page_title_manageusers'] = 'Usuarios';
$lngstr['page_header_manageusers'] = $lngstr['page_title_manageusers'];
 $lngstr['page_title_users_memberof'] = 'Miembro de';
 $lngstr['page_title_users_memberof_users'] = 'Usuarios';
 $lngstr['page_title_users_memberof_groups'] = 'Grupos';
 $lngstr['page_title_users_settings'] = 'Configuraci�n de usuario';
 $lngstr['page_header_users_settings'] = $lngstr['page_title_users_settings'];
$lngstr['page_title_managegroups'] = 'Grupos';
$lngstr['page_header_managegroups'] = $lngstr['page_title_managegroups'];
 $lngstr['page_title_groups_settings'] = 'Configuraci�n de grupos';
 $lngstr['page_header_groups_settings'] = $lngstr['page_title_groups_settings'];
$lngstr['page_title_subjects'] = 'Asignaturas';
$lngstr['page_header_subjects'] = $lngstr['page_title_subjects'];
 $lngstr['page_title_subjects_settings'] = 'Configuraci�n de asignaturas';
 $lngstr['page_header_subjects_settings'] = $lngstr['page_title_subjects_settings'];
$lngstr['page_title_emailtemplates'] = 'Plantillas de correo';
$lngstr['page_header_emailtemplates'] = $lngstr['page_title_emailtemplates'];
 $lngstr['page_title_etemplates_edit'] = 'Editar plantillas de correo';
 $lngstr['page_header_etemplates_edit'] = $lngstr['page_title_etemplates_edit'];
$lngstr['page_title_rtemplates'] = 'Plantillas de informes';
$lngstr['page_header_rtemplates'] = $lngstr['page_title_rtemplates'];
 $lngstr['page_title_rtemplates_edit'] = 'Editar plantillas de informe';
 $lngstr['page_header_rtemplates_edit'] = $lngstr['page_title_rtemplates_edit'];
$lngstr['page_title_grades'] = 'Sistemas de calificaci�n';
$lngstr['page_header_grades'] = $lngstr['page_title_grades'];
 $lngstr['page_title_grades_edit'] = 'Configuraci�n de sistema de calificaci�n';
 $lngstr['page_header_grades_edit'] = $lngstr['page_title_grades_edit'];
$lngstr['page_title_gradescales'] = 'Escala de calificaci�n';
$lngstr['page_header_gradescales'] = $lngstr['page_title_gradescales'];
 $lngstr['page_title_grade_settings'] = 'Editar calificaci�n';
 $lngstr['page_header_grade_settings'] = $lngstr['page_title_grade_settings'];
$lngstr['page_title_config'] = 'Configuraci�n';
$lngstr['page_header_config'] = $lngstr['page_title_config'];
$lngstr['page_title_visitors'] = 'Estad�sticas web';
$lngstr['page_header_visitors'] = $lngstr['page_title_visitors'];
 $lngstr['page_title_visitordetails'] = 'Detalles del visitante';
 $lngstr['page_header_visitordetails'] = $lngstr['page_title_visitordetails'];
$lngstr['page_resourcemanager']['title'] = 'Administrador de recursos';
$lngstr['page_resourcemanager']['header'] = $lngstr['page_resourcemanager']['title'];
 $lngstr['page_resourcemanager_settings']['title'] = 'Configuraci�n de recursos';
 $lngstr['page_resourcemanager_settings']['header'] = $lngstr['page_resourcemanager_settings']['title'];
$lngstr['page_resources']['title'] = 'Recursos';
$lngstr['page_resources']['header'] = $lngstr['page_resources']['title'];
$lngstr['page_couponmanager']['title'] = 'Administrador de cupones';
$lngstr['page_couponmanager']['header'] = $lngstr['page_couponmanager']['title'];
 $lngstr['page_couponmanager_settings']['title'] = 'Configuraci�n de cup�n';
 $lngstr['page_couponmanager_settings']['header'] = $lngstr['page_couponmanager_settings']['title'];
$lngstr['page_buycheckout']['title'] = 'Adquirir un examen';
$lngstr['page_buycheckout']['header'] = $lngstr['page_buycheckout']['title'];
$lngstr['page_getfile_template_html']['title'] = 'Informe HTML';

$lngstr['panel_home'] = $lngstr['page_title_panel'];
$lngstr['panel_results'] = $lngstr['page_title_results'];
$lngstr['panel_edittests'] = $lngstr['page_title_edittests'];
$lngstr['panel_questionbank'] = $lngstr['page_title_questionbank'];
$lngstr['panel_managegroups'] = $lngstr['page_title_managegroups'];
$lngstr['panel_signout'] = 'Cerrar sesi�n';
$lngstr['panel_edit_subjects'] = 'Administrar asignaturas';
$lngstr['panel_usersandgroups'] = 'Administraci�n';
$lngstr['panel_manage_groups'] = 'Administrar grupos';
$lngstr['panel_manage_users'] = 'Administrar usuarios';

$lngstr['label_choice_no'] = 'Opci�n %d:';
$lngstr['label_answer_text'] = 'Respuesta:';
$lngstr['label_answer_feedback_no'] = 'Comentarios %d:';
$lngstr['label_accept_as_correct'] = 'Aceptar como correcta';
$lngstr['label_answer_percents'] = '% correcta';
$lngstr['label_mark_correct_answers'] = 'Por favor, seleccione la(s) respuesta(s) correcta(s)';
$lngstr['label_mark_correct_fillintheblank'] = 'Escriba la respuesta correcta aqu�.';

// Report Manager:
$lngstr['label_hdr_action'] = 'Acci�n';
$lngstr['label_hdr_select_hint'] = 'Seleccionar o deseleccionar todas las filas';
$lngstr['label_action_test_result_view'] = 'Ver los resultados de este examen';
$lngstr['label_action_test_result_delete'] = 'Eliminar esta entrada';
$lngstr['label_action_results_delete'] = 'Eliminar entradas (seleccionadas)';
$lngstr['label_action_view_question_result'] = 'Ver los detalles de respuesta';

// Test Manager:
$lngstr['label_action_test_settings'] = 'Configuraci�n de ex�menes';
$lngstr['label_action_questions_edit'] = 'Editar preguntas';
$lngstr['label_action_test_delete'] = 'Eliminar este examen';
$lngstr['label_action_tests_delete'] = 'Eliminar ex�menes (seleccionados)';
$lngstr['label_action_question_edit'] = 'Editar pregunta';
$lngstr['label_action_question_moveup'] = 'Mover arriba';
$lngstr['label_action_question_movedown'] = 'Mover abajo';
$lngstr['label_action_question_append'] = 'A�adir esta pregunta al examen';
$lngstr['label_action_questions_append'] = 'A�adir preguntas al examen (seleccionadas)';
$lngstr['label_action_question_delete'] = 'Eliminar esta pregunta';
$lngstr['label_action_questions_delete'] = 'Eliminar preguntas (seleccionadas)';
$lngstr['label_action_question_link_delete'] = 'Eliminar esta pregunta del examen';
$lngstr['label_action_question_links_delete'] = 'Eliminar preguntas del examen (seleccionadas)';
$lngstr['label_action_question_stats'] = 'Mostrar estad�sticas';
$lngstr['label_action_questions_stats'] = 'Mostrar estad�sticas (para entradas seleccionadas)';
$lngstr['label_action_manageusers_edit'] = 'Configuraci�n de usuarios';
$lngstr['label_action_manageusers_groups'] = 'Grupos de usuarios';
$lngstr['label_action_groups'] = 'Grupos de usuarios (seleccionados)';
$lngstr['label_action_manageusers_delete'] = 'Eliminar este usuario';
$lngstr['label_action_users_delete'] = 'Eliminar usuarios (seleccionados)';
$lngstr['label_action_create_user'] = 'Crear nuevo usuario';
$lngstr['label_action_group_delete'] = 'Eliminar este grupo';
$lngstr['label_action_groups_delete'] = 'Eliminar grupos (seleccionados)';
$lngstr['label_action_create_group'] = 'Crear nuevo grupo';
$lngstr['label_action_group_edit'] = 'Configuraci�n de grupo';
$lngstr['label_action_test_groups_select'] = 'Asignar a grupos';
$lngstr['label_action_subject_edit'] = 'Configuraci�n de asignaturas';
$lngstr['label_action_subject_delete'] = 'Eliminar esta asignatura';
$lngstr['label_action_subjects_delete'] = 'Eliminar asignaturas (seleccionadas)';
$lngstr['label_action_create_test'] = 'Crear nuevo examen';
$lngstr['label_action_import_questions'] = 'Importar preguntas';
$lngstr['label_action_create_question'] = 'Crear nueva pregunta';
$lngstr['label_action_create_and_add_question'] = 'Crear/a�adir pregunta al examen';
$lngstr['label_action_create_etemplate'] = 'Crear nueva plantilla de correo';
$lngstr['label_action_etemplates_edit'] = 'Editar plantilla de correo';
$lngstr['label_action_etemplate_delete'] = 'Eliminar plantilla de correo';
$lngstr['label_action_etemplates_delete'] = 'Eliminar plantillas de correo (seleccionadas)';
$lngstr['label_action_grade_settings'] = 'Configuraci�n de sistemas de calificaci�n';
$lngstr['label_action_grade_delete'] = 'Eliminar este sistema de calificaci�n';
$lngstr['label_action_grades_delete'] = 'Eliminar sistemas de calificaci�n (seleccionados)';
$lngstr['label_action_gradescales_edit'] = 'Editar la escala de calificaci�n';
$lngstr['label_action_gradescales_delete'] = 'Eliminar calificaciones (seleccionadas)';
$lngstr['label_action_gradescale_edit'] = 'Editar esta calificaci�n';
$lngstr['label_action_gradescale_delete'] = 'Eliminar esta calificaci�n';
$lngstr['label_action_visitor_delete'] = 'Eliminar esta entrada';
$lngstr['label_action_visitors_delete'] = 'Eliminar entradas (seleccionadas)';
$lngstr['page-sections']['action_section_create'] = 'Crear una nueva secci�n';
$lngstr['page-sections']['action_section_edit'] = 'Editar esta secci�n';
$lngstr['page-sections']['action_section_delete'] = 'Eliminar esta secci�n';
$lngstr['page-sections']['action_sections_delete'] = 'Eliminar secciones (seleccionadas)';
$lngstr['page-rtemplates']['action_create_rtemplate'] = 'Crear nueva plantilla de informe';
$lngstr['page-rtemplates']['action_rtemplate_delete'] = 'Eliminar plantilla de informe';
$lngstr['page-rtemplates']['action_rtemplates_delete'] = 'Eliminar plantillas de informes (seleccionadas)';
$lngstr['page-rtemplates']['action_rtemplates_edit'] = 'Editar esta plantilla de informe';

$lngstr['label_test_testinstructions'] = 'Instrucciones de examen';
$lngstr['page_test']['no_time_limit'] = 'Sin tiempo';
$lngstr['page_test']['test_timer_hint'] = 'Tiempo para el examen';
$lngstr['page_test']['questionindicator'] = '%d de %d';
$lngstr['page_test']['questionindicator_hint'] = 'Pregunta %d de %d';
$lngstr['page_test']['testname_hint'] = 'Nombre del examen';
$lngstr['label_result_username'] = '<b>Nombre del participante:</b> %s';
$lngstr['label_result_testname'] = '<b>Nombre del examen:</b> %s';
$lngstr['label_result_testdate'] = '<b>Fecha:</b> %s';
$lngstr['label_result_timespent'] = '<b>Tiempo transcurrido:</b> %s';
$lngstr['label_result_got_answers'] = '<b>Respuestas correctas:</b> %d de %d';
$lngstr['label_result_got_points'] = '<b>Puntos:</b> %d de %d (%d%%)';
$lngstr['label_result_points_pending'] = '<b>Puntos pendientes:</b> %d';
$lngstr['label_result_got_grade'] = '<b>Calificaci�n:</b> %s';
$lngstr['label_result_got_gradefeedback'] = '<b>Comentarios para la calificaci�n:</b> %s';
$lngstr['label_result_do_not_show'] = 'Su examen ha sido calificado y grabado.';
$lngstr['label_result_showpdf'] = 'Haga clic aqu� para generar el informe en PDF';
$lngstr['page_test']['result']['showhtml'] = 'Haga clic aqu� para generar un informe HTML';

$lngstr['page_test_instructions']['next_page'] = 'Siguiente p�gina';

$lngstr['label_report_hdr_resultid'] = 'ID';
$lngstr['label_report_hdr_resultid_hint'] = 'ID de resultado (haga clic para ordenar por...)';
$lngstr['label_report_hdr_result_datestart'] = 'Fecha';
$lngstr['label_report_hdr_result_datestart_hint'] = 'Fecha (haga clic para ordenar por...)';
$lngstr['label_report_hdr_user_name'] = 'Nombre de usuario';
$lngstr['label_report_hdr_user_name_hint'] = 'Nombre de usuario (haga clic para ordenar por...)';
$lngstr['label_report_hdr_test_name'] = 'Nombre de examen';
$lngstr['label_report_hdr_test_name_hint'] = 'Nombre de examen (haga clic para ordenar por...)';
$lngstr['page_reportsmanager']['hdr_test_attempts'] = 'N� de intentos';
$lngstr['page_reportsmanager']['hdr_test_attempts_hint'] = 'N�mero de intentos excedido';
$lngstr['label_report_hdr_result_timeexceeded'] = 'Tiempo excedido';
$lngstr['label_report_hdr_result_timeexceeded_hint'] = 'Tiempo excedido (haga clic para ordenar por...)';
$lngstr['label_report_hdr_result_points'] = 'Puntos obtenidos';
$lngstr['label_report_hdr_result_points_hint'] = 'Puntos obtenidos (haga clic para ordenar por...)';
$lngstr['label_report_hdr_result_pointsmax'] = 'Puntos posibles';
$lngstr['label_report_hdr_result_pointsmax_hint'] = 'Puntos posibles (haga clic para ordenar por...)';
$lngstr['label_report_hdr_result_score'] = 'Puntuaci�n';
$lngstr['label_report_hdr_result_score_hint'] = 'Puntuaci�n (haga clic para ordenar por...)';
$lngstr['label_report_hdr_gscale_gradeid'] = 'Calificaci�n';
$lngstr['label_report_hdr_gscale_gradeid_hint'] = 'Calificaci�n (haga clic para ordenar por...)';
$lngstr['label_report_hdr2_result_answerid'] = 'Sec';
$lngstr['label_report_hdr2_result_answerid_hint'] = 'Secuencia (haga clic para ordenar por...)';
$lngstr['label_report_hdr2_test_questionid'] = 'N�';
$lngstr['label_report_hdr2_test_questionid_hint'] = 'N�mero de pregunta (haga clic para ordenar por...)';
$lngstr['label_report_hdr2_result_answer_timespent'] = 'Tiempo';
$lngstr['label_report_hdr2_result_answer_timespent_hint'] = 'Tiempo (haga clic para ordenar por...)';
$lngstr['label_report_hdr2_result_answer_text'] = 'Respuesta';
$lngstr['label_report_hdr2_result_answer_text_hint'] = 'Respuesta';
$lngstr['label_report_hdr2_result_answer_points'] = 'Puntos';
$lngstr['label_report_hdr2_result_answer_points_hint'] = 'Valor en puntos (haga clic para ordenar por...)';
$lngstr['label_report_hdr2_result_answer_iscorrect'] = 'Correcto';
$lngstr['label_report_hdr2_result_answer_iscorrect_hint'] = 'Correcto (haga clic para ordenar por...)';
$lngstr['label_report_hdr2_result_answer_timeexceeded'] = $lngstr['label_report_hdr_result_timeexceeded'];
$lngstr['label_report_hdr2_result_answer_timeexceeded_hint'] = $lngstr['label_report_hdr_result_timeexceeded_hint'];
$lngstr['label_edittests_hdr_testid'] = 'ID';
$lngstr['label_edittests_hdr_testid_hint'] = 'ID de examen (haga clic para ordenar por...)';
$lngstr['label_edittests_hdr_test_name'] = 'Nombre de examen';
$lngstr['label_edittests_hdr_test_name_hint'] = 'Nombre de examen (haga clic para ordenar por...)';
$lngstr['label_edittests_hdr_subjectid'] = 'Asignatura';
$lngstr['label_edittests_hdr_subjectid_hint'] = 'Asignatura (haga clic para ordenar por...)';
$lngstr['label_edittests_hdr_test_datestart'] = 'Fecha de inicio';
$lngstr['label_edittests_hdr_test_datestart_hint'] = 'Fecha de inicio (haga clic para ordenar por...)';
$lngstr['label_edittests_hdr_test_dateend'] = 'Fecha de fin';
$lngstr['label_edittests_hdr_test_dateend_hint'] = 'Fecha de fin (haga clic para ordenar por...)';
$lngstr['label_edittests_hdr_test_notes'] = 'N';
$lngstr['label_edittests_hdr_test_notes_hint'] = 'Notas';
$lngstr['label_edittests_hdr_test_enabled'] = 'Activo';
$lngstr['label_edittests_hdr_test_enabled_hint'] = 'Activo (haga clic para ordenar por...)';
$lngstr['label_editquestions_hdr_questionid'] = 'ID';
$lngstr['label_editquestions_hdr_questionid_hint'] = 'ID de pregunta (haga clic para ordenar por...)';
$lngstr['label_editquestions_hdr_subjectid'] = 'Asignatura';
$lngstr['label_editquestions_hdr_subjectid_hint'] = 'Asignatura (haga clic para ordenar por...)';
$lngstr['label_editquestions_hdr_question_text'] = 'Pregunta';
$lngstr['label_editquestions_hdr_question_text_hint'] = 'Pregunta';
$lngstr['label_editquestions_hdr_question_type'] = 'Tipo';
$lngstr['label_editquestions_hdr_question_type_hint'] = 'Tipo (haga clic para ordenar por...)';
$lngstr['label_editquestions_hdr_question_points'] = 'Puntos';
$lngstr['label_editquestions_hdr_question_points_hint'] = 'Valor en puntos (haga clic para ordenar por...)';
$lngstr['label_editquestions_hdr_test_questionid'] = 'Sec';
$lngstr['label_editquestions_hdr_test_questionid_hint'] = 'Secuencia (haga clic para ordenar por...)';
$lngstr['label_questionstats_hdr_questionid'] = 'ID';
$lngstr['label_questionstats_hdr_questionid_hint'] = 'ID de pregunta';
$lngstr['label_questionstats_hdr_questiondata'] = 'Datos de pregunta';
$lngstr['label_questionstats_hdr_questiondata_hint'] = 'Datos de pregunta';
$lngstr['label_questionstats_hdr_answerclicks'] = 'Clics';
$lngstr['label_questionstats_hdr_answerclicks_hint'] = 'Clics de respuesta';
$lngstr['label_questionstats_hdr_answerpercent'] = '%';
$lngstr['label_questionstats_hdr_answerpercent_hint'] = 'Porcentaje';
$lngstr['label_manageusers_hdr_userid'] = 'ID';
$lngstr['label_manageusers_hdr_userid_hint'] = 'ID de usuario (haga clic para ordenar por...)';
$lngstr['label_manageusers_hdr_user_notes'] = 'N';
$lngstr['label_manageusers_hdr_user_notes_hint'] = 'Notas';
$lngstr['label_manageusers_hdr_user_name'] = 'Nombre de usuario';
$lngstr['label_manageusers_hdr_user_name_hint'] = 'Nombre de usuario (haga clic para ordenar por...)';
$lngstr['label_manageusers_hdr_user_email'] = 'Correo';
$lngstr['label_manageusers_hdr_user_email_hint'] = 'Correo electr�nico (haga clic para ordenar por...)';
$lngstr['label_manageusers_hdr_user_firstname'] = 'Nombre';
$lngstr['label_manageusers_hdr_user_firstname_hint'] = 'Nombre (haga clic para ordenar por...)';
$lngstr['label_manageusers_hdr_user_lastname'] = 'Apellidos';
$lngstr['label_manageusers_hdr_user_lastname_hint'] = 'Apellidos (haga clic para ordenar por...)';
$lngstr['label_manageusers_hdr_user_enabled'] = 'Activo';
$lngstr['label_manageusers_hdr_user_enabled_hint'] = 'Activo (haga clic para ordenar por...)';
$lngstr['label_managegroups_hdr_groupid'] = 'ID';
$lngstr['label_managegroups_hdr_groupid_hint'] = 'ID de grupo (haga clic para ordenar por...)';
$lngstr['label_managegroups_hdr_group_name'] = 'Nombre';
$lngstr['label_managegroups_hdr_group_name_hint'] = 'Nombre de grupo (haga clic para ordenar por...)';
$lngstr['label_managegroups_hdr_group_description'] = 'Descripci�n';
$lngstr['label_managegroups_hdr_group_description_hint'] = 'Descripci�n de grupo (haga clic para ordenar por...)';
$lngstr['label_managegroups_hdr_member_of'] = 'Miembro';
$lngstr['label_managegroups_hdr_member_of_hint'] = 'Miembro de (haga clic para ordenar por...)';
$lngstr['label_subjects_hdr_subjectid'] = 'ID';
$lngstr['label_subjects_hdr_subjectid_hint'] = 'ID de asignatura (haga clic para ordenar por...)';
$lngstr['label_subjects_hdr_subject_name'] = 'Nombre';
$lngstr['label_subjects_hdr_subject_name_hint'] = 'Nombre de asignatura (haga clic para ordenar por...)';
$lngstr['label_subjects_hdr_subject_description'] = 'Descripci�n';
$lngstr['label_subjects_hdr_subject_description_hint'] = 'Descripci�n de asignatura (haga clic para ordenar por...)';
$lngstr['label_etemplates_hdr_etemplateid'] = 'ID';
$lngstr['label_etemplates_hdr_etemplateid_hint'] = 'ID de plantilla de correo (haga clic para ordenar por...)';
$lngstr['label_etemplates_hdr_etemplate_name'] = 'Nombre';
$lngstr['label_etemplates_hdr_etemplate_name_hint'] = 'Nombre de plantilla de correo (haga clic para ordenar por...)';
$lngstr['label_etemplates_hdr_etemplate_description'] = 'Descripci�n';
$lngstr['label_etemplates_hdr_etemplate_description_hint'] = 'Descripci�n de plantilla de correo (haga clic para ordenar por...)';

$lngstr['page-rtemplates']['hdr_rtemplateid'] = 'ID';
$lngstr['page-rtemplates']['hdr_rtemplateid_hint'] = 'ID de plantilla de informe (haga clic para ordenar por...)';
$lngstr['page-rtemplates']['hdr_rtemplate_name'] = 'Nombre';
$lngstr['page-rtemplates']['hdr_rtemplate_name_hint'] = 'Nombre de plantilla de informe (haga clic para ordenar por...)';
$lngstr['page-rtemplates']['hdr_rtemplate_description'] = 'Descripci�n';
$lngstr['page-rtemplates']['hdr_rtemplate_description_hint'] = 'Descripci�n de plantilla de informe (haga clic para ordenar por...)';

$lngstr['label_grades_hdr_gscaleid'] = 'ID';
$lngstr['label_grades_hdr_gscaleid_hint'] = 'ID de sistema de calificaci�n (haga clic para ordenar por...)';
$lngstr['label_grades_hdr_gscale_name'] = 'Nombre';
$lngstr['label_grades_hdr_gscale_name_hint'] = 'Nombre de sistema de calificaci�n (haga clic para ordenar por...)';
$lngstr['label_grades_hdr_gscale_description'] = 'Descripci�n';
$lngstr['label_grades_hdr_gscale_description_hint'] = 'Descripci�n de sistema de calificaci�n (haga clic para ordenar por...)';
$lngstr['label_gradescales_hdr_gscale_gradeid'] = 'ID';
$lngstr['label_gradescales_hdr_gscale_gradeid_hint'] = 'ID de calificaci�n (haga clic para ordenar por...)';
$lngstr['label_gradescales_hdr_grade_from'] = 'M�n';
$lngstr['label_gradescales_hdr_grade_from_hint'] = 'M�nimo (haga clic para ordenar por...)';
$lngstr['label_gradescales_hdr_grade_to'] = 'M�x';
$lngstr['label_gradescales_hdr_grade_to_hint'] = 'M�ximo (haga clic para ordenar por...)';
$lngstr['label_gradescales_hdr_grade_name'] = 'Nombre';
$lngstr['label_gradescales_hdr_grade_name_hint'] = 'Nombre de calificaci�n (haga clic para ordenar por...)';
$lngstr['label_gradescales_hdr_grade_description'] = 'Descripci�n';
$lngstr['label_gradescales_hdr_grade_description_hint'] = 'Descripci�n de calificaci�n (haga clic para ordenar por...)';
$lngstr['label_visitors_hdr_visitorid'] = 'ID';
$lngstr['label_visitors_hdr_visitorid_hint'] = 'ID de visitante (haga clic para ordenar por...)';
$lngstr['label_visitors_hdr_startdate'] = 'Fecha';
$lngstr['label_visitors_hdr_startdate_hint'] = 'Fecha (haga clic para ordenar por...)';
$lngstr['label_visitors_hdr_username'] = 'Nombre de usuario';
$lngstr['label_visitors_hdr_username_hint'] = 'Nombre de usuario (haga clic para ordenar por...)';
$lngstr['label_visitors_hdr_hits'] = 'Visitas';
$lngstr['label_visitors_hdr_hits_hint'] = 'Visitas (haga clic para ordenar por...)';
$lngstr['label_visitors_hdr_ip'] = 'Direcci�n IP';
$lngstr['label_visitors_hdr_ip_hint'] = 'Direcci�n IP';
$lngstr['label_visitors_hdr_host'] = 'Nombre de host';
$lngstr['label_visitors_hdr_host_hint'] = 'Nombre de host (haga clic para ordenar por...)';
$lngstr['label_visitors_hdr_referer'] = 'Remitente';
$lngstr['label_visitors_hdr_referer_hint'] = 'Remitente (haga clic para ordenar por...)';
$lngstr['page-sections']['hdr_sectionid'] = 'Sec';
$lngstr['page-sections']['hdr_sectionid_hint'] = 'Secuencia (haga clic para ordenar por...)';
$lngstr['page-sections']['hdr_section_name'] = 'Nombre';
$lngstr['page-sections']['hdr_section_name_hint'] = 'Nombre de secci�n (haga clic para ordenar por...)';
$lngstr['page-sections']['hdr_section_description'] = 'Descripci�n';
$lngstr['page-sections']['hdr_section_description_hint'] = 'Descripci�n de secci�n (haga clic para ordenar por...)';


$lngstr['button_signin'] = 'Entrar';
$lngstr['button_signin_as_guest'] = 'Entrar como invitado';
$lngstr['button_register'] = 'Registrarse';
$lngstr['button_starttest'] = 'Iniciar examen';
$lngstr['button_continue'] = 'Continuar';
$lngstr['button_showresults'] = 'Continuar';
$lngstr['button_answer'] = 'Responder';
$lngstr['button_submit'] = 'Enviar';
$lngstr['button_update'] = 'Actualizar';
$lngstr['button_update_and_edit_questions'] = 'Actualizar/ir a lista de preguntas';
$lngstr['button_update_and_create_new_question'] = 'Actualizar/crear nueva pregunta';
$lngstr['button_back'] = 'Volver';
$lngstr['button_cancel'] = 'Cancelar';
$lngstr['button_set'] = 'Establecer';
$lngstr['button_import'] = 'Importar';
$lngstr['button_browse'] = 'Examinar';

$lngstr['label_pleasespecify'] = '- Especifique, por favor -';

$lngstr['label_username'] = 'Nombre de usuario:';
$lngstr['label_password'] = 'Contrase�a:';
$lngstr['label_confirmpassword'] = 'Confirmar contrase�a:';
$lngstr['label_newpassword'] = 'Nueva contrase�a:';
$lngstr['label_email'] = 'Correo:';
$lngstr['label_title'] = 'T�tulo:';
$lngstr['label_firstname'] = 'Nombre:';
$lngstr['label_lastname'] = 'Apellidos:';
$lngstr['label_middlename'] = 'Segundo nombre:';

$lngstr['label_address'] = 'Direcci�n:';
$lngstr['label_city'] = 'Ciudad:';
$lngstr['label_state'] = 'Estado/provincia:';
$lngstr['label_zip'] = 'C�digo postal:';
$lngstr['label_country'] = 'Pa�s:';
$lngstr['label_phone'] = 'Tel�fono:';
$lngstr['label_fax'] = 'Fax:';
$lngstr['label_mobile'] = 'M�vil:';
$lngstr['label_pager'] = 'Buscapersonas:';
$lngstr['label_ipphone'] = 'Tel�fono IP:';
$lngstr['label_webpage'] = 'P�gina web:';
$lngstr['label_icq'] = 'ICQ:';
$lngstr['label_msn'] = 'MSN messenger:';
$lngstr['label_aol'] = 'AOL messenger:';
$lngstr['label_gender'] = 'Sexo:';
$lngstr['label_gender_items'] = array(0 => $lngstr['label_pleasespecify'], 1 => 'Masculino', 2 => 'Femenino');
$lngstr['label_birthday'] = 'Cumplea�os:';
$lngstr['label_husbandwife'] = 'Esposo (esposa):';
$lngstr['label_children'] = 'Hijos:';
$lngstr['label_trainer'] = 'Instructor:';
$lngstr['label_photo'] = 'Foto:';

$lngstr['label_company'] = 'Empresa:';
$lngstr['label_cposition'] = 'Cargo:';
$lngstr['label_department'] = 'Departamento:';
$lngstr['label_coffice'] = 'Oficina:';
$lngstr['label_caddress'] = $lngstr['label_address'];
$lngstr['label_ccity'] = $lngstr['label_city'];
$lngstr['label_cstate'] = $lngstr['label_state'];
$lngstr['label_czip'] = $lngstr['label_zip'];
$lngstr['label_ccountry'] = $lngstr['label_country'];
$lngstr['label_cphone'] = $lngstr['label_phone'];
$lngstr['label_cfax'] = $lngstr['label_fax'];
$lngstr['label_cmobile'] = $lngstr['label_mobile'];
$lngstr['label_cpager'] = $lngstr['label_pager'];
$lngstr['label_cipphone'] = $lngstr['label_ipphone'];
$lngstr['label_cwebpage'] = $lngstr['label_webpage'];
$lngstr['label_cphoto'] = 'Logotipo:';

$lngstr['label_userfield'] = 'Campo personalizado %d:';
$lngstr['label_userfield_caption'] = 'Nombre del campo %d:';
$lngstr['label_userfield_type'] = 'Tipo del campo %d:';
$lngstr['label_userfield_type_items'] = array(CONFIG_CONST_type_singlelinetext => 'Texto de una sola l�nea', CONFIG_CONST_type_multilinetext => 'Texto de m�ltiples l�neas', CONFIG_CONST_type_dropdownlist => 'Lista desplegable');
$lngstr['label_userfield_values_hint'] = '(valores separados por comas)';

$lngstr['label_filter_header'] = 'Establecer un filtro (mostrar/ocultar)';
$lngstr['button_set_filter'] = 'Establecer filtro';
$lngstr['button_remove_filter'] = 'Cancelar filtro';
$lngstr['page_reportsmanager']['filter_dates_years_items'] = array(0 => '', 'y1' => 'Mostrar 1 a�o', 'y2' => 'Mostrar 2 a�os', 'y3' => 'Mostrar 3 a�os', 'y4' => 'Mostrar 4 a�os', 'y5' => 'Mostrar 5 a�os', 'y6' => 'Mostrar 6 a�os'); // 0 => 'Mostrar todo'
$lngstr['page_reportsmanager']['filter_dates_years'] = 'Fecha:';
$lngstr['page_reportsmanager']['div_report_header'] = 'Seleccione un informe (mostrar/ocultar)';
$lngstr['page_reportsmanager']['report_list'] = 'Plantilla de informe:';
$lngstr['page_reportsmanager']['report_export_to_csv'] = 'Exportar a CSV';
$lngstr['page_reportsmanager']['report_preview'] = 'Vista preliminar del informe';
$lngstr['page_reportsmanager']['report_print'] = 'Imprimir el informe';
$lngstr['page_reportsmanager']['fields']['name']['resultid'] = $lngstr['label_report_hdr_resultid'];
$lngstr['page_reportsmanager']['fields']['name']['result_datestart'] = $lngstr['label_report_hdr_result_datestart'];
$lngstr['page_reportsmanager']['fields']['name']['result_datestart_formatted'] = $lngstr['label_report_hdr_result_datestart'];
$lngstr['page_reportsmanager']['fields']['name']['userid'] = 'ID de usuario';
$lngstr['page_reportsmanager']['fields']['name']['user_name'] = $lngstr['label_report_hdr_user_name'];
$lngstr['page_reportsmanager']['fields']['name']['user_firstname'] = 'Nombre';
$lngstr['page_reportsmanager']['fields']['name']['user_lastname'] = 'Apellidos';
$lngstr['page_reportsmanager']['fields']['name']['testid'] = 'ID de examen';
$lngstr['page_reportsmanager']['fields']['name']['test_name'] = $lngstr['label_report_hdr_test_name'];
$lngstr['page_reportsmanager']['fields']['name']['test_attempts'] = $lngstr['page_reportsmanager']['hdr_test_attempts'];
$lngstr['page_reportsmanager']['fields']['name']['result_timeexceeded'] = $lngstr['label_report_hdr_result_timeexceeded'];
$lngstr['page_reportsmanager']['fields']['name']['result_points'] = $lngstr['label_report_hdr_result_points'];
$lngstr['page_reportsmanager']['fields']['name']['result_pointsmax'] = $lngstr['label_report_hdr_result_pointsmax'];
$lngstr['page_reportsmanager']['fields']['name']['result_score'] = $lngstr['label_report_hdr_result_score'];
$lngstr['page_reportsmanager']['fields']['name']['grade_name'] = $lngstr['label_report_hdr_gscale_gradeid'];

$lngstr['page_register']['no_username'] = 'Nombre de usuario incorrecto.<br>';
$lngstr['page_register']['no_email'] = 'Correo electr�nico incorrecto.<br>';
$lngstr['page_register']['no_password'] = 'Las contrase�as no coinciden.<br>';
$lngstr['page_register']['no_title'] = 'T�tulo incorrecto.<br>';
$lngstr['page_register']['no_firstname'] = 'Nombre incorrecto.<br>';
$lngstr['page_register']['no_lastname'] = 'Apellido incorrecto.<br>';
$lngstr['page_register']['no_middlename'] = 'Segundo nombre incorrecto.<br>';

$lngstr['page_register']['no_address'] = 'Direcci�n incorrecta.<br>';
$lngstr['page_register']['no_city'] = 'Ciudad incorrecta.<br>';
$lngstr['page_register']['no_state'] = 'Estado/Provincia incorrecto.<br>';
$lngstr['page_register']['no_zip'] = 'C�digo postal incorrecto.<br>';
$lngstr['page_register']['no_country'] = 'Pa�s incorrecto.<br>';
$lngstr['page_register']['no_phone'] = 'Tel�fono incorrecto.<br>';
$lngstr['page_register']['no_fax'] = 'Fax incorrecto.<br>';
$lngstr['page_register']['no_mobile'] = 'M�vil incorrecto.<br>';
$lngstr['page_register']['no_pager'] = 'Buscapersonas incorrecto.<br>';
$lngstr['page_register']['no_ipphone'] = 'Tel�fono IP incorrecto.<br>';
$lngstr['page_register']['no_webpage'] = 'P�gina web incorrecta.<br>';
$lngstr['page_register']['no_icq'] = 'ICQ messenger incorrecto.<br>';
$lngstr['page_register']['no_msn'] = 'MSN messenger incorrecto.<br>';
$lngstr['page_register']['no_aol'] = 'AOL messenger incorrecto.<br>';
$lngstr['page_register']['no_gender'] = 'Sexo incorrecto.<br>';
$lngstr['page_register']['no_birthday'] = 'Cumplea�os incorrecto.<br>';
$lngstr['page_register']['no_husbandwife'] = 'Esposo(a) incorrecto(a).<br>';
$lngstr['page_register']['no_children'] = 'Hijos incorrectos.<br>';
$lngstr['page_register']['no_trainer'] = 'Instructor incorrecto.<br>';
$lngstr['page_register']['no_photo'] = 'Foto incorrecta.<br>';

$lngstr['page_register']['no_company'] = 'Empresa incorrecta.<br>';
$lngstr['page_register']['no_cposition'] = 'Cargo incorrecto.<br>';
$lngstr['page_register']['no_department'] = 'Departamento incorrecto.<br>';
$lngstr['page_register']['no_coffice'] = 'Oficina incorrecta.<br>';
$lngstr['page_register']['no_caddress'] = 'Direcci�n de la empresa incorrecta.<br>';
$lngstr['page_register']['no_ccity'] = 'Ciudad de la empresa incorrecta.<br>';
$lngstr['page_register']['no_cstate'] = 'Estado/provincia de la empresa incorrecto.<br>';
$lngstr['page_register']['no_czip'] = 'C�digo postal de la empresa incorrecto.<br>';
$lngstr['page_register']['no_ccountry'] = 'Pa�s de la empresa incorrecto.<br>';
$lngstr['page_register']['no_cphone'] = 'Tel�fono de la empresa incorrecto.<br>';
$lngstr['page_register']['no_cfax'] = 'Fax de la empresa incorrecto.<br>';
$lngstr['page_register']['no_cmobile'] = 'M�vil de la empresa incorrecto.<br>';
$lngstr['page_register']['no_cpager'] = 'Buscapersonas de la empresa incorrecto.<br>';
$lngstr['page_register']['no_cipphone'] = 'Tel�fono IP de la empresa incorrecto.<br>';
$lngstr['page_register']['no_cwebpage'] = 'P�gina web de la empresa incorrecta.<br>';
$lngstr['page_register']['no_cphoto'] = 'Logotipo de la empresa incorrecto.<br>';

$lngstr['page_register']['no_userfield'] = '"%s" campos incorrectos.<br>';
$lngstr['page_register']['no_userfield1'] = $lngstr['page_register']['no_userfield'];
$lngstr['page_register']['no_userfield2'] = $lngstr['page_register']['no_userfield'];
$lngstr['page_register']['no_userfield3'] = $lngstr['page_register']['no_userfield'];
$lngstr['page_register']['no_userfield4'] = $lngstr['page_register']['no_userfield'];
$lngstr['page_register']['no_userfield5'] = $lngstr['page_register']['no_userfield'];
$lngstr['page_register']['no_userfield6'] = $lngstr['page_register']['no_userfield'];
$lngstr['page_register']['no_userfield7'] = $lngstr['page_register']['no_userfield'];
$lngstr['page_register']['no_userfield8'] = $lngstr['page_register']['no_userfield'];
$lngstr['page_register']['no_userfield9'] = $lngstr['page_register']['no_userfield'];
$lngstr['page_register']['no_userfield10'] = $lngstr['page_register']['no_userfield'];
$lngstr['err_username_duplicate'] = 'El nombre de usuario ya existe, por favor, seleccione otro.<br>';
$lngstr['err_groupname_duplicate'] = 'El nombre de grupo ya existe, por favor, seleccione otro.<br>';
$lngstr['err_subjectname_duplicate'] = 'Esta asignatura ya existe, por favor, seleccione otra.<br>';
$lngstr['err_signin_incorrect'] = 'No se pudo iniciar sesi�n, nombre de usuario o contrase�a incorrecta.<br>';

// Register page:
$lngstr['page-register']['intro'] = 'Usted puede usar esta forma para a�adir un usuario.';
$lngstr['page-register']['successful'] = 'El usuario "%s" fue a�adido.';
$lngstr['page-register']['check_activation_email'] = 'Hemos enviado un correo a su direcci�n, siga las instrucciones para continuar con el registro.';
$lngstr['page-register']['wait_for_approval'] = 'Su cuenta ha sido creada y debe ser activada por un administrador, por favor, tenga paciencia.';
$lngstr['page-register']['account_activated'] = 'Su cuenta ha sido activada.';
$lngstr['page-register']['title_items'] = array('' => $lngstr['label_none'], 'Dr.' => 'Dr.', 'Se�orita' => 'Se�orita', 'Sr.' => 'Sr.', 'Sra.' => 'Sra.', 'Srita..' => 'Srita.', 'Prof.' => 'Prof.', 'Rev.' => 'Rev.');
$lngstr['page_register']['required_mark'] = REQUIRED_FIELD_MARK.' = Campo obligatorio';

// Sign in page:
$lngstr['page_signin_box_signin_intro'] = '<b>Por favor, inicie sesi�n</b>';
$lngstr['page_signin_box_signin'] = $lngstr['label_username'];
$lngstr['page_signin_box_password'] = $lngstr['label_password'];
$lngstr['page_signin_box_register_intro'] = '<b>�No tiene cuenta?</b> Puede registrarse al hacer <a href="register.php">clic aqu�</a>.';
$lngstr['page_signin_box_lostpassword_intro'] = '<b>�Olvid� su contrase�a?</b> Si olvid� <a href="lostpassword.php">su contrase�a</a>, le podemos enviar una nueva por correo electr�nico.';
$lngstr['page_signin']['test_code'] = 'C�digo de examen:';

// Forgot password page:
$lngstr['page_lostpassword_enter_username'] = '<b>Introduzca su nombre de usuario</b>';
$lngstr['button_send_new_password'] = 'Enviar una nueva contrase�a';
$lngstr['err_username_not_found'] = 'Nombre de usuario no encontrado. Vuelva a intentar.';
$lngstr['inf_password_reset'] = 'Su contrase�a ha sido actualizada. Por favor, compruebe su correo electr�nico.';

// Take a test page:
$lngstr['page_takeatest']['hdr_testid'] = $lngstr['label_edittests_hdr_testid'];
$lngstr['page_takeatest']['hdr_testid_hint'] = $lngstr['label_edittests_hdr_testid_hint'];
$lngstr['page_panel_hdr_test'] = 'Examen';
$lngstr['page_panel_hdr_test_hint'] = 'Nombre y descripci�n del examen';
$lngstr['page_panel_hdr_teststatus'] = 'Estado';
$lngstr['page_panel_hdr_teststatus_hint'] = 'Estado del examen';
$lngstr['page_panel_hdr_gettest'] = 'Empezar examen';
$lngstr['page_panel_hdr_gettest_hint'] = 'Empezar examen';
$lngstr['page_panel_status_available'] = 'Disponible';
$lngstr['page_panel_status_will_be_available_on'] = 'Estar� disponible<br>%s';
$lngstr['page_panel_status_inprogress'] = 'En progreso';
$lngstr['page_panel_get_test_link'] = 'Empezar';
$lngstr['page_takeatest']['buy_test'] = 'Adquirir';
$lngstr['page-takeatest']['attempts_left'] = 'Disponible<br>(intentos posibles: %d)';
$lngstr['page-takeatest']['attempts_limit_reached'] = 'No disponible<br>(intentos posibles: 0)';
$lngstr['page-takeatest']['passed'] = 'Aprobado';
	$lngstr['page_takeatest']['score'] = 'Score';
	$lngstr['page_takeatest']['score_total'] = 'Your total score: %d out of %d (%.2f%%)';
	$lngstr['page_takeatest']['hdr_score'] = 'Points'; // 'Score'
	$lngstr['page_takeatest']['hdr_score_hint'] = 'Points'; // 'Score (click to sort by)'
$lngstr['page_test_results'] = 'Resultados del examen';
$lngstr['page_test_results_homepage'] = 'Volver a la p�gina de hacer examen';
$lngstr['page_test_results_viewresults'] = 'Revisar los resultados del examen';
$lngstr['page_test']['results_nexttest'] = 'Continuar';
$lngstr['page_test']['finish_test'] = 'Finalizar este examen';
$lngstr['page_test']['qst_finish_test_header'] = 'Terminar un examen';
$lngstr['page_test']['qst_finish_test'] = '�Est� seguro de que desea terminar este examen?';
$lngstr['page_test']['review_question'] = 'Revisar';
$lngstr['page_test']['close_this_window'] = 'Cerrar esta ventana';

$lngstr['page_results_delete_record'] = 'Eliminar una entrada';
$lngstr['page_edittests_delete_test'] = 'Eliminar un examen';
$lngstr['page_edittests_delete_question'] = 'Eliminar una pregunta';
$lngstr['page_edittests_delete_question_link'] = 'Eliminar una pregunta';
$lngstr['page_managegroups_delete_group'] = 'Eliminar un grupo';
$lngstr['page_subjects_delete_subject'] = 'Eliminar una asignatura';
$lngstr['page_manageusers_delete_user'] = 'Eliminar un usuario';
$lngstr['page_etemplates_delete_etemplate'] = 'Eliminar una plantilla de correo';
$lngstr['page-rtemplates']['delete_rtemplate'] = 'Eliminar una plantilla de informe';
$lngstr['page_grades_delete_grade'] = 'Eliminar un sistema de calificaci�n';
$lngstr['page_gradescales_delete_grade'] = 'Eliminar una calificaci�n';
$lngstr['page_visitors_delete_visitor'] = 'Eliminar una entrada';
$lngstr['page_visitors']['ipwhois'] = 'Consultar esta IP en el servicio WhoIs';

//[CUSTOM] $lngstr['page_testsettings']['test_type'] = 'Tipo de examen:';
//[CUSTOM] $lngstr['page_testsettings']['test_type_items'] = array(0 => 'Predeterminado', 1 => 'Encuesta');
$lngstr['page_edittests_subjectid'] = 'Asignatura de examen:';
$lngstr['page_edittests_testname'] = 'Nombre de examen:';
$lngstr['page_testmanager']['test_code'] = 'C�digo de examen:';
$lngstr['page_edittests_testenabled'] = 'Este examen est� activo';
$lngstr['page_edittests_teststart'] = 'Fecha de inicio de examen:';
$lngstr['page_edittests_testend'] = 'Fecha de fin de examen:';
$lngstr['page_edittests_testtime'] = 'Tiempo de examen:';
$lngstr['page_edittests_testtimeforceout'] = 'Terminar el examen al transcurrir el tiempo';
$lngstr['page-testmanager']['attempts_allowed'] = 'Intentos permitidos:';
$lngstr['page-testmanager']['attempts_allowed_list'] = array(0 => 'Intentos ilimitados', 1 => '1 intento', 2 => '2 intentos', 3 => '3 intentos', 4 => '4 intentos', 5 => '5 intentos', 6 => '6 intentos', 7 => '7 intentos', 8 => '8 intentos', 9 => '9 intentos', 10 => '10 intentos', 11 => '11 intentos', 12 => '12 intentos', 13 => '13 intentos', 14 => '14 intentos', 15 => '15 intentos', 16 => '16 intentos', 17 => '17 intentos', 18 => '18 intentos', 19 => '19 intentos', 20 => '20 intentos');
$lngstr['page_testmanager']['content_protection'] = 'Protecci�n de contenido:';
$lngstr['page_testmanager']['content_protection_list'] = array(0 => $lngstr['label_none'], 1 => 'Proteger (JavaScript)');
$lngstr['page_edittests_showquestions'] = 'Mostrar preguntas:';
$lngstr['page_testmanager']['showquestions_items'] = array(1 => 'Una por una', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10', 0 => 'Todas las preguntas');
$lngstr['page_edittests_shuffle'] = 'Opciones aleatorias:';
$lngstr['page_edittests_shuffleq'] = 'Orden aleatorio de preguntas';
$lngstr['page_edittests_shufflea'] = 'Orden aleatorio de respuestas';
$lngstr['page_testmanager']['review_options'] = 'Opciones de revisi�n:';
$lngstr['page_testmanager']['review_list'] = array(0 => 'Prohibir cualquier revisi�n', 1 => 'Permitir revisar preguntas');
$lngstr['page_edittests_gradingsystem'] = 'Sistema de calificaci�n:';
// $lngstr['label_no_gradingsystem'] = 'No usar';
$lngstr['page_edittests_resultsettings'] = 'Informe de resultados de examen:';
$lngstr['page_edittests_result_showqfeedback'] = 'Mostrar comentarios';
$lngstr['page_edittests_result_showgrade'] = 'Mostrar calificaci�n';
$lngstr['page_testmanager']['result_showgradefeedback'] = 'Mostrar comentarios para la calificaci�n';
$lngstr['page_edittests_result_showanswers'] = 'Mostrar respuestas';
$lngstr['page_edittests_result_showpoints'] = 'Mostrar puntos';
$lngstr['page_testsettings']['custom_report'] = 'Usar plantilla personalizada:';
$lngstr['page_edittests_testdescription'] = 'Descripci�n corta:';
$lngstr['page_edittests_testinstructions'] = 'Instrucciones de examen:';
$lngstr['page_edittests_testnotes'] = 'Notas de examen (para uso interno):';
$lngstr['page_edittests_assignedto'] = 'Asignado a:';
// $lngstr['page_edittests_assignedto_everybody'] = 'Todos';
// $lngstr['page_edittests_assignedto_nobody'] = 'Nadie';
$lngstr['page_edittests_assignto_everybody'] = 'Asignar a todos (sobrepasa cualquier configuraci�n)';
$lngstr['page_edittests_advancedreport'] = 'Informe avanzado:';
// $lngstr['page-testsettings']['no_report'] = 'Sin informe';
$lngstr['page-testsettings']['report_template'] = 'Plantilla:';
$lngstr['page-testsettings']['report_grade_condition'] = 'Condici�n de calificaci�n:';
$lngstr['page-testsettings']['no_condition'] = 'Sin condici�n';
// $lngstr['label_no_advanced_report'] = 'Sin informe avanzado';
$lngstr['page_edittests_advancedreport_showhtml'] = 'Mostrar informe HTML';
$lngstr['page_edittests_advancedreport_showpdf'] = 'Mostrar informe imprimible en PDF';
$lngstr['page_edittests_sendresultsbyemail'] = 'Enviar resultados por correo electr�nico a:';
$lngstr['page_edittests_sendresultsbyemail_template'] = 'Plantilla:';
$lngstr['page_edittests_sendresultsbyemail_to'] = 'Destinatario:';
$lngstr['page_edittests_result_emailtouser'] = 'enviar resultados a usuarios';
$lngstr['label_do_not_send_email'] = 'No enviar';
$lngstr['page-testmanager']['prevtest'] = 'Examen anterior:';
$lngstr['page-testmanager']['nexttest'] = 'Siguiente examen:';
$lngstr['page_testmanager']['testprice'] = 'Precio de examen ('.$lngstr['language']['currency_name'].'):';
$lngstr['page_testmanager']['settings']['section_groups'] = 'Grupos (mostrar/ocultar)'; // $lngstr['page_users']['section_groups']
$lngstr['page_testmanager']['settings']['section_advanced'] = 'Avanzado (mostrar/ocultar)'; // $lngstr['page_grade']['section_advanced']
$lngstr['page_testmanager']['other_options'] = 'Otras opciones:';
$lngstr['page_testmanager']['repeat_until_answered_correctly'] = 'Repetir el examen hasta que todas las preguntas sean contestadas correctamente';
$lngstr['page_testmanager']['settings']['section_notes'] = 'Notas (mostrar/ocultar)'; // $lngstr['page_users']['section_notes']

$lngstr['page_testmanager']['view_test_stats'] = 'Ver estad�sticas de examen';

$lngstr['page_assignto_hdr_assignto'] = 'Asignado';
$lngstr['page_assignto_hdr_assignto_hint'] = 'Asignado a';

$lngstr['page_testmanager_import']['document_label'] = 'Importar este documento:';
$lngstr['page_testmanager_import']['document_howto'] = '';
$lngstr['page_importtest_ut_import_document'] = 'Importar documento de sistema UniTest:';
$lngstr['page_importtest_ut_import_document_hint'] = 'Pegue el documento de sistema UniTest aqu�';
$lngstr['page_importtest_ut_import_document_howto'] = '1. Ejecute el editor de UniTest;<br>2. Seleccione el men� Import Document from the File (Importar documento del archivo) -> Export (Exportar);<br>3. Copie el texto usando el portapapeles y p�guelo aqu�.';
$lngstr['page_testmanager_import']['section_delimiters'] = 'Prefijos (mostrar/ocultar)';
$lngstr['page_testmanager_import']['question_delimiter'] = 'Prefijo de pregunta:';
$lngstr['page_testmanager_import']['answer_delimiter'] = 'Prefijo de opci�n:';
$lngstr['page_testmanager_import']['answer2_delimiter'] = 'Prefijo de opci�n (2� columna):';
$lngstr['page_testmanager_import']['preq_delimiter'] = 'Prefijo de instrucciones de pregunta:';
$lngstr['page_testmanager_import']['postq_delimiter'] = 'Prefijo de explicaci�n de pregunta:';
$lngstr['page_testmanager_import']['correct_delimiter'] = 'Prefijo para respuesta correcta:';
$lngstr['page_testmanager_import']['points_delimiter'] = 'Prefijo de valor de puntos:';
$lngstr['page_testmanager_import']['type_delimiter'] = 'Prefijo de tipo de pregunta:';
$lngstr['page_testmanager_import']['subject_delimiter'] = 'Prefijo de asignatura de pregunta:';
$lngstr['page_testmanager_import']['question_type_multiple_choice'] = 'multiple choice';
$lngstr['page_testmanager_import']['question_type_true_false'] = 'true/false';
$lngstr['page_testmanager_import']['question_type_multiple_answer'] = 'multiple answer';
$lngstr['page_testmanager_import']['question_type_short_answer'] = 'short answer';
$lngstr['page_testmanager_import']['question_type_essay'] = 'essay';

$lngstr['page_testmanager_stats']['all_participants'] = 'Estad�sticas: todos los participantes';
$lngstr['page_testmanager_stats']['hdr_testid'] = $lngstr['label_edittests_hdr_testid'];
$lngstr['page_testmanager_stats']['hdr_testid_hint'] = $lngstr['label_edittests_hdr_testid_hint'];
$lngstr['page_testmanager_stats']['hdr_test_data'] = 'Datos de examen';
$lngstr['page_testmanager_stats']['hdr_test_data_hint'] = 'Datos de examen';
$lngstr['page_testmanager_stats']['hdr_points'] = 'Puntos';
$lngstr['page_testmanager_stats']['hdr_points_hint'] = 'Puntos';
$lngstr['page_testmanager_stats']['hdr_percents'] = $lngstr['label_questionstats_hdr_answerpercent'];
$lngstr['page_testmanager_stats']['hdr_percents_hint'] = $lngstr['label_questionstats_hdr_answerpercent_hint'];
$lngstr['page_testmanager_stats']['test_high_score'] = 'Calificaci�n m�s alta:';
$lngstr['page_testmanager_stats']['test_average_score'] = 'Promedio de calificaci�n:';
$lngstr['page_testmanager_stats']['test_low_score'] = 'Calificaci�n m�s baja:';
$lngstr['page_testmanager_stats']['test_std_deviation'] = 'Desviaci�n est�ndar:';
$lngstr['page_testmanager_stats']['test_variance'] = 'Variaci�n:';
$lngstr['page_testmanager_stats']['hdr_grade_data'] = 'Datos de calificaci�n';
$lngstr['page_testmanager_stats']['hdr_grade_data_hint'] = 'Datos de calificaci�n';
$lngstr['page_testmanager_stats']['hdr_grade_responses'] = 'Respuestas';
$lngstr['page_testmanager_stats']['hdr_grade_responses_hint'] = 'Respuestas';
$lngstr['page_testmanager_stats']['total_responses'] = 'Total de respuestas:';
$lngstr['page_testmanager_stats']['this_participant'] = 'Estad�sticas: este participante';
$lngstr['page_testmanager_stats']['hdr_subject_name'] = 'Nombre de muestreo';
$lngstr['page_testmanager_stats']['hdr_subject_name_hint'] = 'Nombre de muestreo';
$lngstr['page_testmanager_stats']['hdr_subject_questions'] = 'Tama�o';
$lngstr['page_testmanager_stats']['hdr_subject_questions_hint'] = 'Tama�o del muestreo';
$lngstr['page_testmanager_stats']['hdr_subject_questions_got'] = 'Recibidas';
$lngstr['page_testmanager_stats']['hdr_subject_questions_got_hint'] = 'Preguntas recibidas de este muestreo';
$lngstr['page_testmanager_stats']['hdr_subject_correct'] = 'Correctas';
$lngstr['page_testmanager_stats']['hdr_subject_correct_hint'] = 'Respuestas correctas';
$lngstr['page_testmanager_stats']['view_results_stats'] = 'Ver estad�sticas';

$lngstr['label_subjects_edit'] = 'Administrar asignaturas';
// Subjects page:
$lngstr['label_action_create_subject'] = 'Crear nueva asignatura';
	$lngstr['page_subjects']['parent_subjectid'] = 'Parent subject:';
$lngstr['page_subjects_subjectid'] = 'ID de asignatura:';
$lngstr['page_subjects_subjectname'] = 'Nombre de la asignatura:';
$lngstr['page_subjects_subjectdescription'] = 'Descripci�n de la asignatura:';

// Grades page:
$lngstr['label_action_create_grade'] = 'Crear nuevo sistema de calificaci�n';
$lngstr['label_action_create_gradescale'] = 'Crear nueva calificaci�n';
$lngstr['page_grades_gscaleid'] = 'ID de sistema de calificaci�n:';
$lngstr['page_grades_gradename'] = 'Nombre de sistema de calificaci�n:';
$lngstr['page_grades_gradedescription'] = 'Descripci�n de sistema de calificaci�n:';
$lngstr['page_grades_gradescale'] = 'Escala de calificaci�n:';
$lngstr['page_grades_gradescale_text'] = 'Editar la escala';
$lngstr['page_grades']['edit_grade'] = 'editar esta calificaci�n';
$lngstr['label_action_grade_moveup'] = 'Mover arriba';
$lngstr['label_action_grade_movedown'] = 'Mover abajo';
$lngstr['page_grade_gscaleid'] = 'ID de calificaci�n:';
$lngstr['page_grade_gradename'] = 'Nombre de calificaci�n:';
$lngstr['page_grade_gradedescription'] = 'Descripci�n de calificaci�n:';
$lngstr['page_grade']['feedback'] = 'Comentarios de calificaci�n:';
$lngstr['page_grade']['section_advanced'] = 'Avanzado (mostrar/ocultar)';
$lngstr['page_grade_gradefrom'] = 'M�nimo (%):';
$lngstr['page_grade_gradeto'] = 'M�ximo (%):';

// Question statistics page:
$lngstr['page_questionstats_correct_count'] = 'Respuestas correctas:';
$lngstr['page_questionstats_partially_count'] = 'Respuestas parcialmente correctas:';
$lngstr['page_questionstats_incorrect_count'] = 'Respuestas incorrectas:';
$lngstr['page_questionstats_undefined_count'] = 'Respuestas no definidas:';
$lngstr['page_questionstats_fillintheblank_others'] = 'Otras (%d)';
$lngstr['page_editquestion_subjectid'] = 'Asignatura de pregunta:';
$lngstr['page_editquestion_type'] = 'Tipo de pregunta:';
$lngstr['page_editquestion_question_text'] = 'Pregunta:';
$lngstr['page_editquestion_question_name'] = 'Nombre de pregunta:';
$lngstr['page_editquestion_answer_count'] = 'N�mero de respuestas:';
$lngstr['page_editquestion_answers'] = 'Respuestas:';
$lngstr['page_editquestion_time'] = 'Tiempo:';
$lngstr['page_editquestion_points'] = 'Valor en puntos:';
$lngstr['page_editquestion']['shuffle_answers'] = 'Respuestas aleatorias:';
$lngstr['page_editquestion']['shuffle_answers_items'] = array(0 => 'Predeterminado (heredar)', 1 => 'Sin aleatorias', 2 => 'Aleatorias', 3 => 'Aleatorias (excepto la primera)', 4 => 'Aleatorias (excepto la �ltima)');
$lngstr['page_editquestion']['advanced_settings'] = 'Opciones avanzadas:';
$lngstr['page_editquestion']['allow_partial_answers'] = 'Permitir respuestas parcialmente correctas';
$lngstr['page_editquestion_emptyquestion'] = '<p><strong>Por favor, introduzca su pregunta aqu�...</strong></p>';
// $lngstr['page_editquestion']['used_question'] = 'Note (grayed item): this question is already used in the test';

$lngstr['label_action_visitors_view'] = 'Ver detalles de esta entrada';
$lngstr['page_visitordetails_visitorid'] = 'ID de visitante:';
$lngstr['page_visitordetails_startdate'] = 'Fecha de inicio:';
$lngstr['page_visitordetails_enddate'] = 'Fecha de fin:';
$lngstr['page_visitordetails_timespent'] = 'Tiempo transcurrido:';
$lngstr['page_visitordetails_username'] = $lngstr['label_username'];
$lngstr['page_visitordetails_ipaddress'] = 'Direcci�n IP:';
$lngstr['page_visitordetails_host'] = 'Host:';
$lngstr['page_visitordetails_referer'] = 'Remitente:';
$lngstr['page_visitordetails_inurl'] = 'P�gina de entrada:';
$lngstr['page_visitordetails_outurl'] = 'P�gina de salida:';
$lngstr['page_visitordetails_hits'] = 'Visitas:';
$lngstr['page_visitordetails_useragent'] = 'Agente de usuario:';

$lngstr['page_config']['section_site'] = 'Sitio web (mostrar/ocultar)';
// $lngstr['page_config']['default_language'] = 'Idioma predeterminado:';
$lngstr['page_config']['text_editor'] = 'Editor WYSIWYG:';
$lngstr['page_config']['text_editorlist'] = array(CONFIG_CONST_iseditor2 => 'Editor predeterminado', CONFIG_CONST_iseditor => 'Editor predeterminado (anterior)', CONFIG_CONST_htmlareaeditor => 'Editor HTMLArea');
$lngstr['page_config']['list_length'] = 'Tama�o de lista:';
$lngstr['page_config']['store_logs'] = 'Estad�sticas web:';
$lngstr['page_config']['section_registration'] = 'Registro (mostrar/ocultar)';
$lngstr['page_config']['can_register'] = 'Permitir registro de usuarios:';
$lngstr['page_config']['upon_registration'] = 'Al registrarse:';
$lngstr['page_config']['upon_registration_select'] = array(0 => 'Activar, no hacer nada', 1 => 'Activar e iniciar sesi�n autom�ticamente', 2 => 'No activar, enviar el correo para la activaci�n', 3 => 'No activar, usar esquema personalizado (p.e. procesamiento de pago)');
$lngstr['page_config']['reg_intro'] = 'Introducci�n:';
$lngstr['page_config']['donotshow'] = 'No mostrar';
$lngstr['page_config']['donotshow_autogenerate'] = 'No mostrar, autogenerar';
$lngstr['page_config']['show_donotrequire'] = 'Mostrar, no requerir';
$lngstr['page_config']['show_autogenerate'] = 'Mostrar, autogenerar';
$lngstr['page_config']['show_require'] = 'Mostrar, requerir';

$lngstr['page_users']['username'] = $lngstr['label_username'];
$lngstr['page_users']['password'] = $lngstr['label_password'];
$lngstr['page_users']['email'] = $lngstr['label_email'];
$lngstr['page_users']['title'] = $lngstr['label_title'];
$lngstr['page_users']['firstname'] = $lngstr['label_firstname'];
$lngstr['page_users']['lastname'] = $lngstr['label_lastname'];
$lngstr['page_users']['middlename'] = $lngstr['label_middlename'];

$lngstr['page_users']['member_of'] = 'Miembro de:';

$lngstr['page_users']['address'] = $lngstr['label_address'];
$lngstr['page_users']['city'] = $lngstr['label_city'];
$lngstr['page_users']['state'] = $lngstr['label_state'];
$lngstr['page_users']['zip'] = $lngstr['label_zip'];
$lngstr['page_users']['country'] = $lngstr['label_country'];
$lngstr['page_users']['phone'] = $lngstr['label_phone'];
$lngstr['page_users']['fax'] = $lngstr['label_fax'];
$lngstr['page_users']['mobile'] = $lngstr['label_mobile'];
$lngstr['page_users']['pager'] = $lngstr['label_pager'];
$lngstr['page_users']['ipphone'] = $lngstr['label_ipphone'];
$lngstr['page_users']['webpage'] = $lngstr['label_webpage'];
$lngstr['page_users']['icq'] = $lngstr['label_icq'];
$lngstr['page_users']['msn'] = $lngstr['label_msn'];
$lngstr['page_users']['aol'] = $lngstr['label_aol'];
$lngstr['page_users']['gender'] = $lngstr['label_gender'];
$lngstr['page_users']['birthday'] = $lngstr['label_birthday'];
$lngstr['page_users']['husbandwife'] = $lngstr['label_husbandwife'];
$lngstr['page_users']['children'] = $lngstr['label_children'];
$lngstr['page_users']['trainer'] = $lngstr['label_trainer'];
$lngstr['page_users']['photo'] = $lngstr['label_photo'];

$lngstr['page_users']['company'] = $lngstr['label_company'];
$lngstr['page_users']['cposition'] = $lngstr['label_cposition'];
$lngstr['page_users']['department'] = $lngstr['label_department'];
$lngstr['page_users']['coffice'] = $lngstr['label_coffice'];
$lngstr['page_users']['caddress'] = $lngstr['label_caddress'];
$lngstr['page_users']['ccity'] = $lngstr['label_ccity'];
$lngstr['page_users']['cstate'] = $lngstr['label_cstate'];
$lngstr['page_users']['czip'] = $lngstr['label_czip'];
$lngstr['page_users']['ccountry'] = $lngstr['label_ccountry'];
$lngstr['page_users']['cphone'] = $lngstr['label_cphone'];
$lngstr['page_users']['cfax'] = $lngstr['label_cfax'];
$lngstr['page_users']['cmobile'] = $lngstr['label_cmobile'];
$lngstr['page_users']['cpager'] = $lngstr['label_cpager'];
$lngstr['page_users']['cipphone'] = $lngstr['label_cipphone'];
$lngstr['page_users']['cwebpage'] = $lngstr['label_cwebpage'];
$lngstr['page_users']['cphoto'] = $lngstr['label_cphoto'];

$lngstr['page_users']['section_groups'] = 'Grupos (mostrar/ocultar)';
$lngstr['page_users']['section_personal'] = 'Informaci�n personal (mostrar/ocultar)';
$lngstr['page_users']['section_work'] = 'Informaci�n de trabajo (mostrar/ocultar)';
$lngstr['page_users']['section_additional'] = 'Informaci�n adicional (mostrar/ocultar)';

$lngstr['page_users']['userenabled'] = 'Este usuario est� activo';
$lngstr['page_users']['joindate'] = 'Fecha de inscripci�n:';
$lngstr['page_users']['logindate'] = 'Fecha de �ltima sesi�n:';
$lngstr['page_users']['expiredate'] = 'Expira:';
$lngstr['page_users']['password_confirm'] = $lngstr['label_confirmpassword'];
$lngstr['page_users']['password_new'] = $lngstr['label_newpassword'];
$lngstr['page_users']['section_notes'] = 'Notas (mostrar/ocultar)';
$lngstr['page_users']['notes'] = 'Notas (para uso interno):';

$lngstr['page_reportsmanager']['answerfeedback'] = 'Comentarios:';
$lngstr['page_reportsmanager']['view_pdf'] = 'Ver PDF imprimible';
$lngstr['page_reportsmanager']['view_html'] = 'Ver informe HTML';
$lngstr['page_reportsmanager']['view_none'] = 'No hay informe disponible';

$lngstr['page_managegroups_groupid'] = 'ID de grupo:';
$lngstr['page_managegroups_groupname'] = 'Nombre de grupo:';
$lngstr['page_managegroups_groupdescription'] = 'Descripci�n de grupo:';
$lngstr['page_groups_access_rights'] = 'Derechos de acceso:';
$lngstr['page_groups_access_tests'] = 'Ex�menes:';
$lngstr['page_groups_access_tests_select'] = array(0 => "Acceso denegado", 1 => "Ver lista de ex�menes", 2 => "Pasar examen");
$lngstr['page_groups_access_testmanager'] = 'Administrador de ex�menes:';
$lngstr['page_groups_access_testmanager_select'] = array(0 => "Acceso denegado", 1 => "Leer", 2 => "Escribir");
$lngstr['page_groups_access_gradingsystems'] = 'Sistemas de calificaci�n:';
$lngstr['page_groups_access_gradingsystems_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_emailtemplates'] = 'Plantillas de correo:';
$lngstr['page_groups_access_emailtemplates_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_reporttemplates'] = 'Plantillas de informes:';
$lngstr['page_groups_access_reporttemplates_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_reportsmanager'] = 'Administrador de informes:';
$lngstr['page_groups_access_reportsmanager_select'] = array(0 => "Acceso denegado", 1 => "Leer (resultados propios)", 2 => "Leer (todos los resultados)", 3 => "Escribir");
$lngstr['page_groups_access_questionbank'] = 'Banco de preguntas:';
$lngstr['page_groups_access_questionbank_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_subjects'] = 'Asignaturas:';
$lngstr['page_groups_access_subjects_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_groups'] = 'Grupos:';
$lngstr['page_groups_access_groups_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_users'] = 'Usuarios:';
$lngstr['page_groups_access_users_select'] = array(0 => 'Acceso denegado', 1 => 'Leer (cuentas propias)', 2 => 'Leer (todas las cuentas)', 3 => 'Escribir (cuentas propias)', 4 => 'Escribir (todas las cuentas)');
$lngstr['page_groups_access_visitors'] = 'Estad�sticas web:';
$lngstr['page_groups_access_visitors_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_config'] = 'Configuraci�n:';
$lngstr['page_groups_access_config_select'] = $lngstr['page_groups_access_testmanager_select'];

$lngstr['page_etemplates_etemplateid'] = 'ID de plantilla:';
$lngstr['page_etemplates_etemplatename'] = 'Nombre de plantilla:';
$lngstr['page_etemplates_etemplatedescription'] = 'Descripci�n de plantilla:';
$lngstr['page_etemplates_etemplatefrom'] = 'Remitente:';
$lngstr['page_etemplates_etemplatesubject'] = 'Asunto:';
$lngstr['page_etemplates_etemplatebody'] = 'Cuerpo del mensaje:';
$lngstr['page_etemplates_template_tags'] = 'Etiquetas de la plantilla';

$lngstr['page-rtemplates']['rtemplateid'] = 'ID de plantilla:';
$lngstr['page-rtemplates']['rtemplatename'] = 'Nombre de plantilla:';
$lngstr['page-rtemplates']['rtemplatedescription'] = 'Descripci�n de plantilla:';
$lngstr['page-rtemplates']['rtemplatebody'] = 'Cuerpo del informe:';

$lngstr['page_resourcemanager']['hdr_resourceid'] = 'ID';
$lngstr['page_resourcemanager']['hdr_resourceid_hint'] = 'ID de recurso (ordenar por)';
$lngstr['page_resourcemanager']['hdr_resource_name'] = 'Nombre de recurso';
$lngstr['page_resourcemanager']['hdr_resource_name_hint'] = 'Nombre de recurso (ordenar por)';
$lngstr['page_resourcemanager']['hdr_resource_description'] = 'Descripci�n';
$lngstr['page_resourcemanager']['hdr_resource_description_hint'] = 'Descripci�n de recurso (ordenar por)';
$lngstr['page_resourcemanager']['action_create_resource'] = 'Crear un nuevo recurso';
$lngstr['page_resourcemanager']['action_edit_resource'] = 'Configuraci�n de recurso';
$lngstr['page_resourcemanager']['qst_delete_resource'] = '�Est� seguro de que desea eliminar este recurso?';
$lngstr['page_resourcemanager']['qst_delete_resources'] = '�Est� seguro de que desea eliminar los recursos seleccionados?';
$lngstr['page_resourcemanager']['action_delete_resource'] = 'Eliminar este recurso';
$lngstr['page_resourcemanager']['action_delete_resources'] = 'Eliminar recursos (seleccionados)';
$lngstr['page_resourcemanager']['delete_resource'] = 'Eliminar un recurso';
$lngstr['inf_cant_access_resourcemanager'] = 'No tiene derechos suficientes para acceder a los recursos.<br>';
$lngstr['page_resourcemanager_settings']['is_active'] = 'Este recurso est� activo';
$lngstr['page_resourcemanager_settings']['resourceid'] = 'ID de recurso:';
$lngstr['page_resourcemanager_settings']['resource_name'] = 'Nombre de recurso:';
$lngstr['page_resourcemanager_settings']['resource_description'] = 'Descripci�n de recurso:';
$lngstr['page_resourcemanager_settings']['start_date'] = 'Fecha de inicio:';
$lngstr['page_resourcemanager_settings']['end_date'] = 'Fecha de fin:';
$lngstr['page_resourcemanager_settings']['resource_url'] = 'Direcci�n URL de recurso:';
$lngstr['page_resourcemanager_settings']['related_to'] = 'Relacionado con (nombre de examen):';
$lngstr['page_resourcemanager_settings']['assigned_to'] = $lngstr['page_edittests_assignedto'];
$lngstr['page_resourcemanager_settings']['assign_to_everybody'] = $lngstr['page_edittests_assignto_everybody'];

$lngstr['page_resources']['hdr_resource'] = 'Recurso';
$lngstr['page_resources']['hdr_resource_hint'] = 'Descripci�n y nombre del recurso';
$lngstr['page_resources']['hdr_get_resource'] = 'Obtener recurso';
$lngstr['page_resources']['hdr_get_resource_hint'] = 'Obtener recurso';
$lngstr['page_resources']['get_resource_link'] = 'Recurso';

$lngstr['page_couponmanager']['hdr_couponid'] = 'ID';
$lngstr['page_couponmanager']['hdr_couponid_hint'] = 'ID de cup�n (haga clic para ordenar por)';
$lngstr['page_couponmanager']['hdr_coupon_name'] = 'Nombre de cup�n';
$lngstr['page_couponmanager']['hdr_coupon_name_hint'] = 'Nombre de cup�n (haga clic para ordenar por)';
$lngstr['page_couponmanager']['hdr_coupon_description'] = 'Descripci�n';
$lngstr['page_couponmanager']['hdr_coupon_description_hint'] = 'Descripci�n de cup�n (haga clic para ordenar por)';
$lngstr['page_couponmanager']['hdr_coupon_code'] = 'C�digo';
$lngstr['page_couponmanager']['hdr_coupon_code_hint'] = 'C�digo de cup�n (haga clic para ordenar por)';
$lngstr['page_couponmanager']['hdr_coupon_enabled'] = 'Activo';
$lngstr['page_couponmanager']['hdr_coupon_enabled_hint'] = 'Activo (haga clic para ordenar por)';
$lngstr['page_couponmanager']['action_create_coupon'] = 'Crear un nuevo cup�n';
$lngstr['page_couponmanager']['action_edit_coupon'] = 'Configuraci�n de cup�n';
$lngstr['page_couponmanager']['qst_delete_coupon'] = '�Est� seguro de que desea eliminar este cup�n?';
$lngstr['page_couponmanager']['qst_delete_coupons'] = '�Est� seguro de que desea eliminar los cupones seleccionados?';
$lngstr['page_couponmanager']['action_delete_coupon'] = 'Eliminar este cup�n';
$lngstr['page_couponmanager']['action_delete_coupons'] = 'Eliminar cupones (seleccionados)';
$lngstr['page_couponmanager']['delete_coupon'] = 'Eliminar un cup�n';
$lngstr['inf_cant_access_couponmanager'] = 'No tiene derechos suficientes para acceder a los cupones.<br>';
$lngstr['page_couponmanager_settings']['is_active'] = 'Este cup�n est� activo';
$lngstr['page_couponmanager_settings']['couponid'] = 'ID de cup�n:';
$lngstr['page_couponmanager_settings']['coupon_name'] = 'Nombre de cup�n:';
$lngstr['page_couponmanager_settings']['coupon_description'] = 'Descripci�n de cup�n:';
$lngstr['page_couponmanager_settings']['coupon_code'] = 'C�digo de cup�n:';
$lngstr['page_couponmanager_settings']['coupon_value'] = 'Valor de cup�n ('.  $lngstr['language']['currency_name'].'):';

$lngstr['page_buycheckout']['hdr_test'] = $lngstr['page_panel_hdr_test'];
$lngstr['page_buycheckout']['hdr_test_hint'] = $lngstr['page_panel_hdr_test_hint'];
$lngstr['page_buycheckout']['hdr_test_price'] = 'Precio';
$lngstr['page_buycheckout']['hdr_test_price_hint'] = 'Precio de examen';
$lngstr['page_buycheckout']['hdr_test_buy'] = 'Adquirir';
$lngstr['page_buycheckout']['hdr_test_buy_hint'] = 'Adquirir un examen';
$lngstr['page_buycheckout']['err_no_coupon'] = 'Por favor, verifique su c�digo de cup�n.<br>';
	$lngstr['page_buycheckout']['err_no_handler'] = 'No payment processing handler is assigned.<br />';

$lngstr['page_buystate']['success'] = 'Gracias por su pedido.<br>';
$lngstr['page_buystate']['fail'] = 'Hay un problema al procesar su pedido.<br>';

$lngstr['email_answer_iscorrect'] = 'Correcto: ';
$lngstr['email_answer_points'] = 'Incorrecto: ';

$lngstr['err_subject_doesnotexist'] = 'La asignatura no existe.<br>';

$lngstr['err_no_questions'] = 'No se pudo encontrar preguntas en el examen.<br>';
$lngstr['err_no_questions_left_in_bank'] = 'El n�mero de preguntas aleatorias es mayor al n�mero de preguntas en esta asignatura.<br>';
$lngstr['err_no_tests'] = 'Actualmente no hay ex�menes disponibles.<br>';
$lngstr['err_no_resources'] = 'Actualmente no hay recursos disponibles.<br>';
$lngstr['inf_cant_passtest'] = 'No tiene derechos suficientes para hacer el examen.<br>';
$lngstr['inf_cant_view_results'] = 'No tiene derechos suficientes para ver los resultados de ex�menes.<br>';
$lngstr['inf_cant_view_reportsmanager_reportsratings'] = 'No tiene suficientes derechos para ver la p�gina de clasificaci�n.<br>';
$lngstr['inf_cant_view_this_test_details'] = 'No tiene derechos suficientes para ver los resultados de este examen.<br>';
$lngstr['inf_cant_edit_tests'] = 'No tiene derechos suficientes para editar los ex�menes.<br>';
$lngstr['inf_cant_edit_questions'] = 'No tiene derechos suficientes para editar preguntas.<br>';
$lngstr['inf_cant_access_groups'] = 'No tiene derechos suficientes para acceder a los grupos de usuarios.<br>';
$lngstr['inf_cant_access_users'] = 'No tiene derechos suficientes para acceder a los usuarios.<br>';
$lngstr['inf_cant_access_subjects'] = 'No tiene derechos suficientes para acceder a las asignaturas.<br>';
$lngstr['inf_cant_access_emailtemplates'] = 'No tiene derechos suficientes para acceder a las plantillas de correo.<br>';
$lngstr['inf_cant_access_reporttemplates'] = 'No tiene derechos suficientes para acceder a las plantillas de informes.<br>';
$lngstr['inf_cant_access_grades'] = 'No tiene derechos suficientes para acceder a los sistemas de calificaci�n.<br>';
$lngstr['inf_cant_access_visitors'] = 'No tiene derechos suficientes para acceder a la secci�n de las estad�sticas web.<br>';
$lngstr['inf_cant_access_config'] = 'No tiene derechos suficientes para acceder a la secci�n de la configuraci�n.<br>';
$lngstr['err_no_test_selected'] = 'Seleccione un examen primero.<br>';
$lngstr['err_no_question_n_in_db'] = 'No se puede encontrar la pregunta %d.<br>';
$lngstr['err_no_question_id_in_db'] = 'No se puede encontrar la pregunta con ID %d.<br>';
$lngstr['err_no_answers_in_question'] = '<b><a href="question-bank.php?action=editq&questionid=%1$d">La pregunta con ID %1$d</a></b> no tiene respuestas, por favor, corr�jala.<br>';
$lngstr['err_no_answer_given'] = 'Usted no respondi�.<br>';
$lngstr['err_answer_every_question'] = 'Por favor, responda a todas las preguntas.<br>';

$lngstr['err_no_permissions_to_register'] = 'No tiene derechos para registrar usuarios nuevos';

$lngstr['qst_delete_test'] = '�Est� seguro de que desea borrar este examen?';
$lngstr['qst_delete_tests'] = '�Est� seguro de que desea borrar los ex�menes seleccionados?';
$lngstr['qst_delete_question'] = '�Est� seguro de que desea borrar esta pregunta?';
$lngstr['qst_delete_questions'] = '�Est� seguro de que desea borrar las preguntas seleccionadas?';
$lngstr['qst_delete_question_link'] = '�Est� seguro de que desea borrar esta pregunta del examen?';
$lngstr['qst_delete_question_links'] = '�Est� seguro de que desea borrar las preguntas seleccionadas del examen?';
$lngstr['qst_delete_record'] = '�Est� seguro de que desea borrar esta entrada?';
$lngstr['qst_delete_records'] = '�Est� seguro de que desea borrar las entradas seleccionadas?';
$lngstr['qst_delete_user'] = '�Est� seguro de que desea borrar este usuario?';
$lngstr['qst_delete_users'] = '�Est� seguro de que desea borrar los usuarios seleccionados?';
$lngstr['qst_delete_group'] = '�Est� seguro de que desea borrar este grupo?';
$lngstr['qst_delete_groups'] = '�Est� seguro de que desea borrar los grupos seleccionados?';
$lngstr['qst_delete_subject'] = '�Est� seguro de que desea borrar esta asignatura?';
$lngstr['qst_delete_subjects'] = '�Est� seguro de que desea borrar las asignaturas seleccionadas?';
$lngstr['qst_delete_etemplate'] = '�Est� seguro de que desea borrar esta plantilla de correo?';
$lngstr['qst_delete_etemplates'] = '�Est� seguro de que desea borrar las plantillas de correo seleccionadas?';
$lngstr['qst_delete_grade'] = '�Est� seguro de que desea borrar este sistema de calificaci�n?';
$lngstr['qst_delete_grades'] = '�Est� seguro de que desea borrar los sistemas de calificaci�n seleccionados?';
$lngstr['qst_delete_gradescale'] = '�Est� seguro de que desea borrar esta calificaci�n?';
$lngstr['qst_delete_gradescales'] = '�Est� seguro de que desea borrar las calificaciones seleccionadas?';
$lngstr['qst_delete_visitor'] = $lngstr['qst_delete_record'];
$lngstr['qst_delete_visitors'] = $lngstr['qst_delete_records'];
$lngstr['page-sections']['qst_section_delete'] = '�Est� seguro de que desea borrar esta secci�n?';
$lngstr['page-sections']['qst_sections_delete'] = '�Est� seguro de que desea borrar las secciones seleccionadas?';
$lngstr['page-rtemplates']['qst_rtemplate_delete'] = '�Est� seguro de que desea borrar esta plantilla de informe?';
$lngstr['page-rtemplates']['qst_rtemplates_delete'] = '�Est� seguro de que desea borrar las plantillas de informe seleccionadas?';

// Install:
$lngstr['install_title'] = 'Instalar - iGiveTest';
$lngstr['install_page1'] = 'Paso 1 - Configuraci�n de idioma';
$lngstr['install_page1_description'] = '<p><b>Idioma:</b> Por favor, seleccione un idioma.';
$lngstr['install_language'] = 'Idioma:';
$lngstr['install_page2'] = 'Paso 2 - Configuraci�n general';
$lngstr['install_page2_description'] = '<p><b>Nombre de sitio web:</b> Especifique, por favor, el t�tulo del sitio web.
<p><b>Correo predeterminado:</b> Especifique la direcci�n predeterminada para el campo "Remitente" de correos electr�nicos.
<p><b>URL de iGiveTest:</b> Especifique la direcci�n web en la que iGiveTest estar� disponible.
<p><b>Directorio de iGiveTest:</b> Por favor, especifique la ruta completa para esta instalaci�n
<p><b>URL de archivos de iGiveTest:</b> Por favor, especifique la direcci�n web en la que los archivos subidos estar�n disponibles.
<p><b>Directorio de archivos de iGiveTest:</b> Especifique la ruta completa del directorio donde iGiveTest podr� guardar los archivos subidos. Los usuarios del servidor web deben tener suficientes derechos para leer y escribir en este directorio (normalmente "nadie" o "apache").';
$lngstr['install_titlepostfix'] = 'T�tulo del sitio web:';
$lngstr['install_defaultemail'] = 'Correo predeterminado:';
$lngstr['install_urlroot'] = 'URL de iGiveTest:';
$lngstr['install_dirrootfull'] = 'Directorio de iGiveTest:';
$lngstr['install_dirrootfull_doesnotexists'] = 'La configuraci�n de "Directorio de iGiveTest" es incorrecta. El valor ha sido actualizado.<br>';
$lngstr['install_urlfiles'] = 'URL de archivos iGiveTest:';
$lngstr['install_dirfilesfull'] = 'Directorio de archivos de iGiveTest:';
$lngstr['install_page3'] = 'Paso 3 - Configuraci�n de la base de datos';
$lngstr['install_page3_description'] = '<p>Configure la base de datos donde se almacenar�n los datos de iGiveTest. Esta base de datos ya debe haber sido creada y usted debe contar con el nombre de usuario y contrase�a.';
$lngstr['install_dbdriver'] = 'Tipo de base de datos:';
$lngstr['install_dbhost'] = 'Servidor de base de datos:';
$lngstr['install_dbdb'] = 'Nombre de base de datos:';
$lngstr['install_dbtableprefix'] = 'Prefijo de tabla:';
$lngstr['install_dbuser'] = 'Nombre de usuario:';
$lngstr['install_dbpassword'] = 'Contrase�a:';
$lngstr['install_dbdriver_cannotconnect'] = 'No se pudo establecer conexi�n con la base de datos, verifique su configuraci�n.<br>';
$lngstr['install_cannotwritetoconfig'] = 'No se pudo escribir en inc/confic.inc.php';
$lngstr['install_downloadconfig'] = '<p>Por favor, guarde <b><a href="install.php?download=1" target=_blank>este archivo</a></b> con el nombre config.inc.php y p�ngalo en el directorio inc/.';
$lngstr['install_canwritetoconfig'] = '<p>El archivo config.inc ha sido creado.';
$lngstr['install_page4'] = 'Instalaci�n terminada';
$lngstr['install_page4_description'] = '<p>Presione el bot�n "Siguiente" para configurar la base de datos de iGiveTest.';
$lngstr['install_db_title'] = 'Iniciar base de datos - iGiveTest';
$lngstr['install_db_page1'] = 'Iniciar la base de datos iGiveTest';
$lngstr['install_db_createtablex'] = 'Crear la tabla "%s":';
	$lngstr['install_db']['create_or_modify_tablex'] = 'Create or modify the "%s" table:';
$lngstr['install_db']['no_init_needed'] = 'No hace falta iniciar la base de datos.';

$lngstr['install_adminfirstname'] = 'Admin';
$lngstr['install_adminlastname'] = 'User';
$lngstr['install_guestfirstname'] = 'Guest';
$lngstr['install_guestlastname'] = 'User';

$lngstr['install_phpversion'] = 'Versi�n PHP:';
$lngstr['label_okay'] = 'Aceptar';
$lngstr['label_warning'] = 'Advertencia';

$m_db_drivers = array(
	DB_DRIVER_MYSQL => 'MySQL',
	DB_DRIVER_POSTGRESQL => 'PostgreSQL',
	DB_DRIVER_MSSQL_ODBC => 'Microsoft SQL Server (ODBC)',
	DB_DRIVER_MSSQL => 'Microsoft SQL Server (controlador PHP)',
	DB_DRIVER_ORACLE => 'Oracle',
	);

$lngstr['initdb_etemplates_1_name'] = 'Resultados de examen (Predeterminado)';
$lngstr['initdb_etemplates_1_description'] = 'Plantilla de correo (Predeterminado)';
$lngstr['initdb_etemplates_1_subject'] = 'iGiveTest - Ejemplo de informe';
$lngstr['initdb_etemplates_1_body'] = 'Estimado(-a) [USER_FIRST_NAME],

Aqu� est�n los resultados de su examen:

Nombre de examen: [TEST_NAME]
Fecha: [RESULT_DATE]
Tiempo transcurrido: [RESULT_TIME_SPENT]
Tiempo excedido: [RESULT_TIME_EXCEEDED]

[RESULT_DETAILED_1]

Calificaci�n total: [RESULT_POINTS_SCORED] / [RESULT_POINTS_POSSIBLE] ([RESULT_PERCENTS]%)
Calificaci�n: [RESULT_GRADE]

Saludos,
El equipo de iGiveTest';

$lngstr['initdb_etemplates_2_name'] = 'Registrar una cuenta (sin activaci�n por correo)';
$lngstr['initdb_etemplates_2_description'] = 'Plantilla de correo para registro de usuario';
$lngstr['initdb_etemplates_2_subject'] = 'Detalles de registro';
$lngstr['initdb_etemplates_2_body'] = 'Estimado(-a) [USER_FIRST_NAME],

Gracias por registrarse con iGiveTest.

Nombre de usuario: [USERNAME]
Contrase�a: [USER_PASSWORD]

Usted puede iniciar sesi�n en el sistema al hacer clic en:

[IGIVETEST_URL]

Saludos,
El equipo de iGiveTest';

$lngstr['initdb_etemplates_3_name'] = 'Registrar una cuenta (activaci�n por correo)';
$lngstr['initdb_etemplates_3_description'] = 'Plantilla de correo para registro de usuario';
$lngstr['initdb_etemplates_3_subject'] = 'Activaci�n de cuenta';
$lngstr['initdb_etemplates_3_body'] = 'Estimado(-a) [USER_FIRST_NAME],

Gracias por registrarse con iGiveTest.

Nombre de usuario: [USERNAME]
Contrase�a: [USER_PASSWORD]

Le falta s�lo un paso m�s:

Para terminar la activaci�n de su cuenta, haga clic en el siguiente enlace:

[IGIVETEST_URL]/account.php?action=activate&userid=[USER_ID]&checkword=[USER_CHECKWORD]

Saludos,
El equipo de iGiveTest';

$lngstr['initdb_etemplates_4_name'] = 'Cuenta activada';
$lngstr['initdb_etemplates_4_description'] = 'Plantilla de correo de cuenta activada';
$lngstr['initdb_etemplates_4_subject'] = 'Cuenta activada';
$lngstr['initdb_etemplates_4_body'] = 'Estimado(-a) [USER_FIRST_NAME],

Su cuenta ha sido activada exitosamente

Puede iniciar sesi�n al hacer clic en:

[IGIVETEST_URL]

Saludos,
El equipo de iGiveTest';

$lngstr['initdb_etemplates_5_name'] = 'Registrar cuenta (Para administradores)';
$lngstr['initdb_etemplates_5_description'] = 'Plantilla de correo para registro de cuenta';
$lngstr['initdb_etemplates_5_subject'] = 'Detalles de registro de nuevo usuario';
$lngstr['initdb_etemplates_5_body'] = 'Estimado administrador,

Detalles de registro del nuevo usuario:

Nombre: [USER_FIRST_NAME]
Apellidos: [USER_LAST_NAME]
Correo electr�nico: [USER_EMAIL]
Nombre de usuario: [USERNAME]
Contrase�a: [USER_PASSWORD]

Atentamente,
El Equipo de iGiveTest';

$lngstr['initdb_etemplates_50_name'] = 'Recuperaci�n de contrase�a';
$lngstr['initdb_etemplates_50_description'] = 'Plantilla de recuperaci�n de contrase�a';
$lngstr['initdb_etemplates_50_subject'] = 'iGiveTest - Recuperaci�n de contrase�a';
$lngstr['initdb_etemplates_50_body'] = 'Estimado(-a) [USER_FIRST_NAME],

Le hemos establecido una contrase�a nueva.

Nombre de usuario: [USERNAME]
Contrase�a: [USER_PASSWORD]

Saludos,
El equipo de iGiveTest';

$lngstr['initdb_gscales_1_id'] = 1;
$lngstr['initdb_gscales_2_id'] = 2;
$lngstr['initdb_gscales_3_id'] = 3;
$lngstr['initdb_gscales_4_id'] = 4;
$lngstr['initdb_gscales_5_id'] = 5;
$lngstr['initdb_gscales_6_id'] = 6;
$lngstr['initdb_gscales_1_name'] = 'Sistema de calificaci�n A-F(60% aprueba)';
$lngstr['initdb_gscales_2_name'] = 'Sistema de calificaci�n aprobado/suspendido';
$lngstr['initdb_gscales_3_name'] = 'Sistema de calificaci�n ECTS';
$lngstr['initdb_gscales_4_name'] = 'Sistema de calificaci�n GPA';
$lngstr['initdb_gscales_5_name'] = 'Sistema de calificaci�n de 6 notas (Alemania)';
$lngstr['initdb_gscales_6_name'] = 'Sistema de calificaci�n de 5 notas (Europa Oriental)';
$lngstr['initdb_gscales_1_description'] = 'Sistema de calificaci�n A-F';
$lngstr['initdb_gscales_2_description'] = 'Sistema de calificaci�n aprobado/suspendido';
$lngstr['initdb_gscales_3_description'] = 'Sistema de calificaci�n ECTS';
$lngstr['initdb_gscales_4_description'] = 'Sistema de calificaci�n GPA';
$lngstr['initdb_gscales_5_description'] = 'Sistema de calificaci�n de 6 notas (Alemania)';
$lngstr['initdb_gscales_6_description'] = 'Sistema de Calificaci�n de 5 notas (Europa Oriental)';
$lngstr['initdb_gscales_1_1_description'] = 'Excelente';
$lngstr['initdb_gscales_1_2_description'] = 'Bien';
$lngstr['initdb_gscales_1_3_description'] = 'Regular';
$lngstr['initdb_gscales_1_4_description'] = 'Mal';
$lngstr['initdb_gscales_1_5_description'] = 'Suspendido';
$lngstr['initdb_gscales_2_1_name'] = 'Aprobado';
$lngstr['initdb_gscales_2_2_name'] = 'Suspendido';
$lngstr['initdb_gscales_2_1_description'] = 'Aprobado';
$lngstr['initdb_gscales_2_2_description'] = 'Suspendido';
$lngstr['initdb_gscales_3_1_description'] = 'Excelente (resultado excelente con errores menores)';
$lngstr['initdb_gscales_3_2_description'] = 'Muy bien (superior al promedio con algunos errores)';
$lngstr['initdb_gscales_3_3_description'] = 'Bien (buen trabajo pero con un n�mero de errores importante)';
$lngstr['initdb_gscales_3_4_description'] = 'Satisfactorio (aceptable pero con errores importantes)';
$lngstr['initdb_gscales_3_5_description'] = 'Suficiente (el resultado cubre los m�nimos criterios)';
$lngstr['initdb_gscales_3_6_description'] = 'Suspendido (Se requiere m�s esfuerzo para aprobar este examen)';
$lngstr['initdb_gscales_3_7_description'] = 'Suspendido (Se requiere un trabajo considerable para aprobar este examen)';
$lngstr['initdb_gscales_4_1_description'] = 'Excelente';
$lngstr['initdb_gscales_4_2_description'] = 'Bien';
$lngstr['initdb_gscales_4_3_description'] = 'Regular';
$lngstr['initdb_gscales_4_4_description'] = 'Mal';
$lngstr['initdb_gscales_4_5_description'] = 'Suspendido';
$lngstr['initdb_gscales_5_1_description'] = 'Excelente';
$lngstr['initdb_gscales_5_2_description'] = 'Bien';
$lngstr['initdb_gscales_5_3_description'] = 'Satisfactorio';
$lngstr['initdb_gscales_5_4_description'] = 'Suficiente';
$lngstr['initdb_gscales_5_5_description'] = 'No satisfactorio';
$lngstr['initdb_gscales_5_6_description'] = 'Mal';
$lngstr['initdb_gscales_6_1_description'] = 'Excelente';
$lngstr['initdb_gscales_6_2_description'] = 'Bien';
$lngstr['initdb_gscales_6_3_description'] = 'Satisfactorio';
$lngstr['initdb_gscales_6_4_description'] = 'No satisfactorio';
$lngstr['initdb_gscales_6_5_description'] = 'Muy mal';
$lngstr['initdb_groups_1_name'] = 'Administradores';
$lngstr['initdb_groups_2_name'] = 'Instructores';
$lngstr['initdb_groups_3_name'] = 'Operadores';
$lngstr['initdb_groups_19_name'] = 'Usuarios';
$lngstr['initdb_groups_20_name'] = 'Invitados';
$lngstr['initdb_groups_1_description'] = 'Los administradores tienen derechos ilimitados (grupo de sistema)';
$lngstr['initdb_groups_2_description'] = 'Los instructores tienen casi todos los derechos con algunas restricciones (grupo de sistema)';
$lngstr['initdb_groups_3_description'] = 'Los miembros de este grupo tienen derechos para editar/modificar preguntas (grupo de sistema)';
$lngstr['initdb_groups_19_description'] = 'Los usuarios no pueden hacer cambios por accidente ni con intenci�n (grupo de sistema)';
$lngstr['initdb_groups_20_description'] = 'Los invitados tienen los mismos derechos que los usuarios del grupo predeterminado (grupo de sistema)';
$lngstr['initdb_rtemplates_1_name'] = 'Plantilla de informe n� 1';
$lngstr['initdb_rtemplates_1_description'] = 'Plantilla de informe n� 1';
$lngstr['initdb_rtemplates_1_body'] = '<h1>[TEST_NAME]</h1>
<p><strong>Fecha:</strong> [RESULT_DATE]</p>
<p><strong>Apellidos:</strong> [USER_FIRST_NAME]<br>
<strong>Nombre:</strong> [USER_LAST_NAME]<br>
<strong>Tiempo transcurrido:</strong> [RESULT_TIME_SPENT]<br>
<strong>Puntos:</strong> [RESULT_POINTS_SCORED] / [RESULT_POINTS_POSSIBLE] ([RESULT_PERCENTS]%)<br>
<strong>Calificaci�n:</strong> [RESULT_GRADE]</p>
<p><strong>Detalles:</strong><br>[RESULT_DETAILED_1]</p>';
$lngstr['initdb_subjects_1_name'] = '[Sin t�tulo]';
$lngstr['initdb_subjects_1_description'] = 'Sin descripci�n';
$lngstr['initdb_users_1_firstname'] = 'Administrador';
$lngstr['initdb_users_2_firstname'] = 'Invitado';
$lngstr['initdb_users_1_lastname'] = 'Usuario';
$lngstr['initdb_users_2_lastname'] = 'Usuario';
$lngstr['initdb_instructions'] = 'Por favor, utilice como nombre de usuario "<strong>admin</strong>" y contrase�a "<strong>admin</strong>" para iniciar sesi�n.<br><strong>Recuerde:</strong> se recomienda cambiar su contrase�a.';
$lngstr['initdb_gotohomepage'] = 'Ir a la portada';

// Tooltips:
$lngstr['tooltip_button'] = 'Ocultar/mostrar la barra de sugerencias';
$lngstr['help_button'] = 'Ayuda';
$lngstr['tooltip_showbar'] = 'Mostrar la barra de sugerencias';
$lngstr['tooltip_closebar'] = 'Ocultar la barra de sugerencias';
$lngstr['tooltip_tests'] = '<p>Esta p�gina est� destinada para crear/editar ex�menes.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_test'].'"></td><td class=rowone width="100%" colspan=4>Para crear un examen, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-gear.gif" title="'.$lngstr['label_action_test_settings'].'"></td><td class=rowone width="100%" colspan=4>Para cambiar la configuraci�n del examen, presione este bot�n.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_test_groups_select'].'"></td><td class=rowone width="100%" colspan=4>Para asignar examen(es) a ciertos grupos de usuarios, presione el bot�n a la derecha del examen o seleccione todos los ex�menes necesarios usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_questions_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar las preguntas del examen, presione el bot�n a la derecha del examen.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_test_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar examen(es), presione el bot�n a la derecha del examen o seleccione todos los ex�menes necesarios usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_gscales'] = '<p>Esta p�gina se usa para editar los sistemas de calificaci�n.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_grade'].'"></td><td class=rowone width="100%" colspan=4>Para crear un nuevo sistema de calificaci�n presione este bot�n.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-gear.gif" title="'.$lngstr['label_action_grade_settings'].'"></td><td class=rowone width="100%" colspan=4>Para cambiar la configuraci�n del sistema de calificaci�n, presione el bot�n a la derecha del nombre.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_gradescales_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar los par�metros, presione el bot�n a la derecha del nombre.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_grade_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar sistema(s) de calificaci�n, presione el bot�n a la derecha del sistema de calificaci�n o seleccione todos los sistemas de calificaci�n necesarios usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_gscales_grades'] = '<p>Esta p�gina est� destinada para crear/editar escalas de calificaci�n.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_gradescale'].'"></td><td class=rowone width="100%" colspan=4>Para crear una nueva calificaci�n, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_gradescale_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar una calificaci�n, presione el bot�n a la derecha de la calificaci�n.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=10 border=0 src="images/button-up.gif" title="'.$lngstr['label_action_grade_moveup'].'"><br><img width=20 height=10 border=0 src="images/button-down.gif" title="'.$lngstr['label_action_grade_movedown'].'"></td><td class=rowone width="100%" colspan=4>Para mover una calificaci�n en la lista arriba o abajo, presione la parte superior o inferior del bot�n a la derecha de la calificaci�n.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_gradescale_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar calificaci�n, presione el bot�n a la derecha o seleccione los elementos usando la casilla de su izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_etemplates'] = '<p>Esta p�gina est� destinada para crear/editar plantillas de correo.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_etemplate'].'"></td><td class=rowone width="100%" colspan=4>Para crear una nueva plantilla de correo, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_etemplates_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar plantillas de correo, presione el bot�n a la derecha de la plantilla.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_etemplate_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar plantilla(s) de correo, presione el bot�n a la derecha de la plantilla de correo o seleccione todas las plantillas de correo necesarias usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_rtemplates'] = '<p>Esta p�gina est� destinada para crear/editar plantillas de informe.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['page-rtemplates']['action_create_rtemplate'].'"></td><td class=rowone width="100%" colspan=4>Para crear una nueva plantilla, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['page-rtemplates']['action_rtemplates_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar una plantilla, presione el bot�n a la derecha de la plantilla de informe.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['page-rtemplates']['action_rtemplate_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar plantilla(s) de informe, presione el bot�n a la derecha de la plantilla de informe o seleccione las plantillas de informe necesarias usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_tests_questions'] = '<p>Esta p�gina est� destinada para crear/editar preguntas.</p>
<p>Tabla de preguntas de examen:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-add.gif" title="'.$lngstr['label_action_create_and_add_question'].'"></td><td class=rowone width="100%" colspan=4>Para crear una nueva pregunta y a�adirla al examen, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-import.gif" title="'.$lngstr['label_action_import_questions'].'"></td><td class=rowone width="100%" colspan=4>Para importar preguntas al examen, presione este bot�n.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_questions_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar una pregunta, presione el bot�n a la derecha de la pregunta.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=10 border=0 src="images/button-up.gif" title="'.$lngstr['label_action_question_moveup'].'"><br><img width=20 height=10 border=0 src="images/button-down.gif" title="'.$lngstr['label_action_grade_movedown'].'"></td><td class=rowone width="100%" colspan=4>Para mover la pregunta arriba o abajo, presione la parte superior o inferior del bot�n a la derecha.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_question_link_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar pregunta(s), presione el bot�n a la derecha de la pregunta o seleccione todas las preguntas necesarias usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>
<p>Tabla del banco de preguntas:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_question'].'"></td><td class=rowone width="100%" colspan=4>Para crear una nueva pregunta, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-plus.gif" title="'.$lngstr['label_action_questions_append'].'"></td><td class=rowone width="100%" colspan=4>Para a�adir una pregunta, presione el bot�n a la derecha o seleccione varias preguntas usando la casilla a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_question_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar una pregunta, presione el bot�n a la derecha de la pregunta.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_question_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar preguntas(s), seleccione la pregunta o preguntas y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_tests_sections'] = '<p>Esta p�gina est� destinada para crear/editar secciones del examen.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['page-sections']['action_section_create'].'"></td><td class=rowone width="100%" colspan=4>Para crear una nueva secci�n, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['page-sections']['action_section_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar una secci�n, presione el bot�n a la derecha de la secci�n.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['page-sections']['action_section_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar secciones, presione el bot�n a la derecha o seleccione las secciones y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_tests_groups'] = '<p>Esta p�gina est� destinada para asignar preguntas a un examen.</p>
<p>Tabla de ex�menes:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_test'].'"></td><td class=rowone width="100%" colspan=4>Para crear un nuevo examen, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-gear.gif" title="'.$lngstr['label_action_test_settings'].'"></td><td class=rowone width="100%" colspan=4>Para cambiar la configuraci�n del examen presione este bot�n.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_test_groups_select'].'"></td><td class=rowone width="100%" colspan=4>Para asignar un examen a cierto grupo de usuarios, presione el bot�n a la derecha o seleccione los grupos y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_questions_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar preguntas, presione el bot�n a la derecha del examen.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_test_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar ex�menes, presione el bot�n a la derecha o seleccione los ex�menes y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>
<p>Tabla de grupos:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_group'].'"></td><td class=rowone width="100%" colspan=4>Para crear un nuevo grupo, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_group_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar un grupo, presione el bot�n a la derecha del grupo.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_group_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar grupos, presione el bot�n a la derecha o seleccione m�ltiples grupos y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_questionbank'] = '<p>Esta p�gina est� destinada para crear/editar un banco de preguntas.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_question'].'"></td><td class=rowone width="100%" colspan=4>Para crear una nueva pregunta, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-stats.gif" title="'.$lngstr['label_action_questions_stats'].'"></td><td class=rowone width="100%" colspan=4>Para ver las estad�sticas de una pregunta, presione el bot�n a la derecha o seleccione los elementos usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_question_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar una pregunta, presione el bot�n a la derecha de la pregunta.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_question_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar preguntas, presione el bot�n a la derecha o seleccione las preguntas necesarias usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_subjects'] = '<p>Esta p�gina est� destinada para crear/editar asignaturas.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_subject'].'"></td><td class=rowone width="100%" colspan=4>Para crear una nueva asignatura, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_subject_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar una asignatura, presione el bot�n a la derecha de la asignatura.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_subject_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar asignaturas, presione el bot�n a la derecha o seleccione las asignaturas necesarias usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_reportsmanager'] = '<p>Esta p�gina est� destinada para analizar los resultados de los ex�menes.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-view.gif" title="'.$lngstr['label_action_test_result_view'].'"></td><td class=rowone width="100%" colspan=4>Para ver los resultados detallados, presione el bot�n a la derecha de la entrada.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_test_result_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar entradas, presione el bot�n a la derecha o seleccione las entradas necesarias usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_reportsmanager_reportsratings'] = '';
$lngstr['tooltip_users'] = '<p>Esta p�gina est� destinada para crear/editar cuentas de usuario.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_user'].'"></td><td class=rowone width="100%" colspan=4>Para crear un nuevo usuario, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_manageusers_groups'].'"></td><td class=rowone width="100%" colspan=4>Para asignar al usuario a un grupo, presione el bot�n a la derecha o seleccione todos los usuarios necesarios usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_manageusers_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar un usuario, presione el bot�n a la derecha de la cuenta de usuario.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_manageusers_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar usuarios, presione el bot�n a la derecha o seleccione las cuentas de usuarios necesarias usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_users_groups'] = '';
$lngstr['tooltip_groups'] = '<p>Esta p�gina est� destinada para crear/editar grupos.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_group'].'"></td><td class=rowone width="100%" colspan=4>Para crear un nuevo grupo, presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_group_edit'].'"></td><td class=rowone width="100%" colspan=4>Para editar un grupo, presione el bot�n a la derecha del grupo.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_group_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar grupos, presione el bot�n a la derecha o seleccione los grupos necesarios usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_visitors'] = '<p>Esta p�gina est� destinada para analizar las estad�sticas web.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-view.gif" title="'.$lngstr['label_action_visitors_view'].'"></td><td class=rowone width="100%" colspan=4>Para ver estad�sticas detalladas, presione el bot�n a la derecha de la entrada.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_visitor_delete'].'"></td><td class=rowone width="100%" colspan=4>Para eliminar entradas, presione el bot�n a la derecha o seleccione las entradas necesarias usando las casillas a la izquierda y presione este bot�n en la barra de herramientas.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utilice estos botones para cambiar las p�ginas.</td></tr>
</table></p>';
$lngstr['tooltip_resources'] = '';
$lngstr['tooltip_coupons'] = '';

$lngstr['label_country_items'] = array(
	'US' => 'Estados Unidos',
	'AF' => 'Afganist�n',
	'AL' => 'Albania',
	'DZ' => 'Algeria',
	'AS' => 'Samoa Americana',
	'AD' => 'Andorra',
	'AO' => 'Angola',
	'AI' => 'Anguilla',
	'AQ' => 'Ant�rtica',
	'AG' => 'Antigua y Barbuda',
	'AR' => 'Argentina',
	'AM' => 'Armenia',
	'AW' => 'Aruba',
	'AU' => 'Australia',
	'AT' => 'Austria',
	'AZ' => 'Azerbaiy�n',
	'BS' => 'Las Bahamas',
	'BH' => 'Bahrein',
	'BD' => 'Bangladesh',
	'BB' => 'Barbados',
	'BY' => 'Bielorrusia',
	'BE' => 'B�lgica',
	'BZ' => 'Belice',
	'BJ' => 'Ben�n',
	'BM' => 'Bermuda',
	'BT' => 'But�n',
	'BO' => 'Bolivia',
	'BA' => 'Bosnia-Herzegovina',
	'BW' => 'Botswana',
	'BV' => 'Isla Bouvet',
	'BR' => 'Brasil',
	'IO' => 'Territorio Brit�nico del Oc�ano �ndico',
	'BN' => 'Brunei',
	'BG' => 'Bulgaria',
	'BF' => 'Burkina Faso',
	'BI' => 'Burundi',
	'KH' => 'Camboya',
	'CM' => 'Camer�n',
	'CA' => 'Canad�',
	'CV' => 'Cabo Verde',
	'KY' => 'Islas Caim�n',
	'CF' => 'Rep�blica Centroafricana',
	'TD' => 'Chad',
	'CL' => 'Chile',
	'CN' => 'China',
	'CX' => 'Isla Christmas',
	'CC' => 'Islas de Cocos (Keeling)',
	'CO' => 'Colombia',
	'KM' => 'Comoros',
	'CG' => 'Congo',
	'CD' => 'Congo, Rep�blica Democr�tica del',
	'CK' => 'Islas Cook',
	'CR' => 'Costa Rica',
	'CI' => 'Costa de Marfil',
	'HR' => 'Croacia (Nombre local: Hrvatska)',
	'CU' => 'Cuba',
	'CY' => 'Chipre',
	'CZ' => 'Rep�blica Checa',
	'DK' => 'Dinamarca',
	'DJ' => 'Yibuti',
	'DM' => 'Dominica',
	'DO' => 'Rep�blica Dominicana',
	'TL' => 'Timor Oriental',
	'EC' => 'Ecuador',
	'EG' => 'Egipto',
	'SV' => 'El Salvador',
	'GQ' => 'Guinea Ecuatorial',
	'ER' => 'Eritrea',
	'EE' => 'Estonia',
	'ET' => 'Etiop�a',
	'FK' => 'Islas Malvinas (Falkland Islands)',
	'FO' => 'Islas Faroe',
	'FJ' => 'Fidji',
	'FI' => 'Finlandia',
	'FR' => 'Francia',
	'FX' => 'Francia Metropolitana',
	'GF' => 'Guayana Francesa',
	'PF' => 'Polinesia Francesa',
	'TF' => 'Territorios Franceses del Sur',
	'GA' => 'Gab�n',
	'GM' => 'Gambia',
	'GE' => 'Georgia',
	'DE' => 'Alemania',
	'GH' => 'Gana',
	'GI' => 'Gibraltar',
	'GR' => 'Grecia',
	'GL' => 'Groenlandia',
	'GD' => 'Granada',
	'GP' => 'Guadalupe',
	'GU' => 'Guam',
	'GT' => 'Guatemala',
	'GN' => 'Guinea',
	'GW' => 'Guinea-Bissau',
	'GY' => 'Guyana',
	'HT' => 'Hait�',
	'HM' => 'Islas Heard y McDonald',
	'VA' => 'Estado de la Ciudad del Vaticano (Holy See)',
	'HN' => 'Honduras',
	'HK' => 'Hong Kong',
	'HU' => 'Hungr�a',
	'IS' => 'Islandia',
	'IN' => 'India',
	'ID' => 'Indonesia',
	'IR' => 'Ir�n (Rep�blica Isl�mica de)',
	'IQ' => 'Irak',
	'IE' => 'Irlanda',
	'IL' => 'Israel',
	'IT' => 'Italia',
	'JM' => 'Jamaica',
	'JP' => 'Jap�n',
	'JO' => 'Jordania',
	'KZ' => 'Kazajist�n',
	'KE' => 'Kenia',
	'KI' => 'Kiribati',
	'KR' => 'Corea',
	'KP' => 'Corea, Rep�blica Democr�tica Popular de',
	'KW' => 'Kuwait',
	'KG' => 'Kirguizist�n',
	'LA' => 'Laos, Rep�blica Democr�tica Popular de',
	'LV' => 'Letonia',
	'LB' => 'L�bano',
	'LS' => 'Lesotho',
	'LR' => 'Liberia',
	'LY' => 'Jamahiriya �rabe Libia',
	'LI' => 'Liechtenstein',
	'LT' => 'Lituania',
	'LU' => 'Luxemburgo',
	'MO' => 'Macao',
	'MK' => 'Macedonia, Ex Rep�blica de Yugoslavia',
	'MG' => 'Madagascar',
	'MW' => 'Malawi',
	'MY' => 'Malasia',
	'MV' => 'Maldivas',
	'ML' => 'Mal�',
	'MT' => 'Malta',
	'MH' => 'Islas Marshall',
	'MQ' => 'Martinica',
	'MR' => 'Mauritania',
	'MU' => 'Mauricio',
	'YT' => 'Mayotte',
	'MX' => 'M�xico',
	'FM' => 'Micronesia, Estados Federales de',
	'MD' => 'Moldova, Rep�blica de',
	'MC' => 'M�naco',
	'MN' => 'Mongolia',
	'MS' => 'Montserrat',
	'MA' => 'Marruecos',
	'MZ' => 'Mozambique',
	'MM' => 'Birmania',
	'NA' => 'Namibia',
	'NR' => 'Nauru',
	'NP' => 'Nepal',
	'NL' => 'Pa�ses Bajos',
	'AN' => 'Antillas Holandesas',
	'NC' => 'Nueva Caledonia',
	'NZ' => 'Nueva Zelanda',
	'NI' => 'Nicaragua',
	'NE' => 'N�ger',
	'NG' => 'Nigeria',
	'NU' => 'Niue',
	'NF' => 'Isla Norfolk',
	'MP' => 'Islas Marianas del Norte',
	'NO' => 'Noruega',
	'OM' => 'Om�n',
	'PK' => 'Pakist�n',
	'PW' => 'Islas Palau',
	'PS' => 'Territorio Palestino, Ocupado',
	'PA' => 'Panam�',
	'PG' => 'Papua Nueva Guinea',
	'PY' => 'Paraguay',
	'PE' => 'Per�',
	'PH' => 'Filipinas',
	'PN' => 'Islas Pitcairn',
	'PL' => 'Polonia',
	'PT' => 'Portugal',
	'PR' => 'Puerto Rico',
	'QA' => 'Qatar',
	'RE' => 'Reuni�n',
	'RO' => 'Rumania',
	'RU' => 'Federaci�n Rusa',
	'RW' => 'Ruanda',
	'KN' => 'Saint Kitts y Nevis',
	'LC' => 'Santa Luc�a',
	'VC' => 'San Vicente y Las Granadinas',
	'WS' => 'Samoa',
	'SM' => 'San Marino',
	'ST' => 'Santo Tom� y Pr�ncipe',
	'SA' => 'Arabia Saudita',
	'SN' => 'Senegal',
	'SC' => 'Seychelles',
	'SL' => 'Sierra Leone',
	'SG' => 'Singapur',
	'SK' => 'Eslovaquia (Rep�blica Eslovaca)',
	'SI' => 'Eslovenia',
	'SB' => 'Islas Salom�n',
	'SO' => 'Somalia',
	'ZA' => 'Sud�frica',
	'GS' => 'Islas Georgia del Sur y Sandwich del Sur',
	'ES' => 'Espa�a',
	'LK' => 'Sri Lanka',
	'SH' => 'Sta. Helena',
	'PM' => 'St. Pierre y Miquelon',
	'SD' => 'Sud�n',
	'SR' => 'Surinam',
	'SJ' => 'Archipi�lago de Svalbard e isla Jan Mayen',
	'SZ' => 'Swazilandia',
	'SE' => 'Suecia',
	'CH' => 'Suiza',
	'SY' => 'Rep�blica �rabe Siria',
	'TW' => 'Taiw�n',
	'TJ' => 'Tayikist�n',
	'TZ' => 'Tanzania, Rep�blica Unida de',
	'TH' => 'Tailandia',
	'TG' => 'Togo',
	'TK' => 'Tokelau',
	'TO' => 'Tonga',
	'TT' => 'Trinidad y Tobago',
	'TN' => 'T�nez',
	'TR' => 'Turqu�a',
	'TM' => 'Turkmenist�n',
	'TC' => 'Islas Turks y Caicos',
	'TV' => 'Tuvalu',
	'UG' => 'Uganda',
	'UA' => 'Ucrania',
	'AE' => 'Emiratos �rabes Unidos',
	'GB' => 'Reino Unido',
	'UM' => 'Islas perif�ricas de Estados Unidos',
	'UY' => 'Uruguay',
	'USCA' => 'Estados Unidos y Canad�',
	'UZ' => 'Uzbekist�n',
	'VU' => 'Vanuatu',
	'VE' => 'Venezuela',
	'VN' => 'Vietnam',
	'VG' => 'Islas V�rgenes (Brit�nicas)',
	'VI' => 'Islas V�rgenes (EE.UU.)',
	'WF' => 'Islas Wallis y Futuna',
	'EH' => 'S�hara Occidental',
	'YE' => 'Yemen',
	'ZM' => 'Zambia',
	'ZW' => 'Zimbabwe',
);

/*
$lngstr['custom']['user_state_items'] = array(
	'' => $lngstr['label_pleasespecify'],
	'AA' => 'AA',
	'AE' => 'AE',
	'AL' => 'Alabama',
	'AK' => 'Alaska',
	'AB' => 'Alberta',
	'AP' => 'AP',
	'AZ' => 'Arizona',
	'AR' => 'Arkansas',
	'BC' => 'British Columbia',
	'CA' => 'California',
	'CO' => 'Colorado',
	'CT' => 'Connecticut',
	'DE' => 'Delaware',
	'DC' => 'Dist. of Columbia',
	'FL' => 'Florida',
	'FP' => 'FP',
	'GA' => 'Georgia',
	'HI' => 'Hawaii',
	'ID' => 'Idaho',
	'IL' => 'Illinois',
	'IN' => 'Indiana',
	'IA' => 'Iowa',
	'KS' => 'Kansas',
	'KY' => 'Kentucky',
	'LA' => 'Louisiana',
	'ME' => 'Maine',
	'MB' => 'Manitoba',
	'MD' => 'Maryland',
	'MA' => 'Massachusetts',
	'MI' => 'Michigan',
	'MN' => 'Minnesota',
	'MS' => 'Mississippi',
	'MO' => 'Missouri',
	'MT' => 'Montana',
	'NE' => 'Nebraska',
	'NV' => 'Nevada',
	'NB' => 'New Brunswick',
	'NH' => 'New Hampshire',
	'NJ' => 'New Jersey',
	'NM' => 'New Mexico',
	'NY' => 'New York',
	'NF' => 'Newfoundland',
	'NC' => 'North Carolina',
	'ND' => 'North Dakota',
	'NT' => 'Northwest Territories',
	'NS' => 'Nova Scotia',
	'NU' => 'Nunavut',
	'OH' => 'Ohio',
	'OK' => 'Oklahoma',
	'ON' => 'Ontario',
	'OR' => 'Oregon',
	'PA' => 'Pennsylvania',
	'PE' => 'Prince Edward Island',
	'QC' => 'Quebec',
	'RI' => 'Rhode Island',
	'SK' => 'Saskatchewan',
	'SC' => 'South Carolina',
	'SD' => 'South Dakota',
	'TN' => 'Tennessee',
	'TX' => 'Texas',
	'VI' => 'US Virgin Islands',
	'UT' => 'Utah',
	'VT' => 'Vermont',
	'VA' => 'Virginia',
	'WA' => 'Washington',
	'WV' => 'West Virginia',
	'WI' => 'Wisconsin',
	'WY' => 'Wyoming',
	'YT' => 'Yukon',
	'AGS' => 'Aguascalientes',
	'BCN' => 'Baja California Norte',
	'BCS' => 'Baja California Sur',
	'CAMP' => 'Campeche',
	'CHI' => 'Chihuahua',
	'CHIS' => 'Chiapas',
	'COA' => 'Coahuila',
	'COL' => 'Colima',
	'DF' => 'Distrito Fedreal',
	'DUR' => 'Durango',
	'EDOMEX' => 'Estado de M�xico',
	'GTO' => 'Guanajuato',
	'GUE' => 'Guerrero',
	'HGO' => 'Hidalgo',
	'JAL' => 'Jalisco',
	'MICH' => 'Michoac�n',
	'MOR' => 'Morelos',
	'NAY' => 'Nayarit',
	'NL' => 'Nuevo Le�n',
	'OAX' => 'Oaxaca',
	'PUE => 'Puebla',
	'QR' => 'Quintana Roo',
	'QRO => 'Queretaro',
	'SIN' => 'Sinaloa',
	'SLP' => 'San Luis Potos�',
	'SON' => 'Sonora',
	'TAB' => 'Tabasco',
	'TAMPS' => 'Tamaulipas',
	'TLAX' => 'Tlaxcala',
	'VER' => 'Veracruz',
	'YUC' => 'Yucat�n',
	'ZAC' => 'Zacatecas',

);
$lngstr['custom']['user_cstate_items'] = $lngstr['custom']['user_state_items'];
$lngstr['custom']['user_userfield1_items'] = array();
*/

$m_question_types = array(
	QUESTION_TYPE_MULTIPLECHOICE => $lngstr['label_atype_multiple_choice'],
	QUESTION_TYPE_MULTIPLEANSWER => $lngstr['label_atype_multiple_answer'],
	QUESTION_TYPE_TRUEFALSE => $lngstr['label_atype_truefalse'],
	QUESTION_TYPE_FILLINTHEBLANK => $lngstr['label_atype_fillintheblank'],
	QUESTION_TYPE_ESSAY => $lngstr['label_atype_essay'],
	QUESTION_TYPE_RANDOM => $lngstr['label_atype_random'],
	);

?>