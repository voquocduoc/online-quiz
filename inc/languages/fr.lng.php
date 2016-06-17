<?php

// Customizable (you can customize/override this data in custom.lng.php):
// ----------------------------------------------------------------------
// Branding:
$lngstr['branding']['top_logo'] = '<img src="images/logo.jpg" width=200 height=40>';
$lngstr['branding']['btm_sign'] = '<a target="_blank" href="/">Trang chá»§</a> 
| <a target="_blank" href="/diendan/">Diá»…n Ä‘Ã n</a> 
| <a target="_blank" href="/nhac/">Nghe nháº¡c</a> 
| <a target="_blank" href="/soft/">Pháº§n má»m</a> 
| <a target="_blank" href="/luubut/">LÆ°u bÃºt</a> 
| <a target="_blank" href="/uocnguyen/">Æ¯á»›c nguyá»‡n</a> 
| <a target="_blank" href="/tintuc/">Tin tá»©c</a> 
| <a target="_blank" href="/tudien/">Tá»« Ä‘iá»ƒn</a>
<br>Copyright &copy; TÃ¢nPhÃº.Net 2008. All Rights Reserved.';
// Sign in page:
$lngstr['page_signin_box_intro'] = '';

// Non-customizable (it is not recommended to customize this data):
// ----------------------------------------------------------------
$lngstr['branding']['powered_by'] = 'Tráº¯c nghiá»‡m TÃ¢n PhÃº v'.IGT_VERSION.'';
// General:
$lngstr['meta_charset'] = 'iso-8859-1';
$lngstr['sql_charset'] = 'latin1';
$lngstr['meta_contentlanguage'] = 'fr';
$lngstr['language']['date_only_format'] = '%d/%m/%Y'; // 'd/m/Y'
$lngstr['language']['date_format'] = '%d/%m/%y %H:%M'; $lngstr['date_format'] = 'd/m/y H:i';
$lngstr['language']['date_format_full'] = '%d %B %Y, %H:%M:%S'; $lngstr['date_format_full'] = 'd F Y, H:i:s';
$lngstr['language']['calendar']['date_format'] = '%Y-%m-%d %H:%M';
$lngstr['text_direction'] = 'ltr';
$lngstr['languages'] = array('fr' => 'French', 'en' => 'English', 'es' => 'Spanish', 'de' => 'German', 'nl' => 'Dutch', 'hr' => 'Croatian');
$lngstr['language_long'] = 'french';
$lngstr['language']['locale'] = array('fr_FR', 'fra', 'fre', 'fr', 'french', 'frc');
$lngstr['language']['currency'] = '$%.2f';
$lngstr['language']['currency_name'] = 'EUR';
$lngstr['language']['list_separator'] = ',';

$lngstr['calendar_month'] = 'Mois';
$lngstr['calendar_day'] = 'Jour';
$lngstr['calendar_year'] = 'Année';
$lngstr['calendar_hour'] = 'Heure';
$lngstr['calendar_minute'] = 'Minute';
$lngstr['time_days'] = 'Jours';
$lngstr['time_days_short'] = 'jrs';
$lngstr['time_hours'] = 'Heures';
$lngstr['time_hours_short'] = 'hr.';
$lngstr['time_minutes'] = 'Minutes';
$lngstr['time_minutes_short'] = 'min.';
$lngstr['time_seconds'] = 'Secondes';
$lngstr['time_seconds_short'] = 'sec.';
$lngstr['time_donotuse'] = 'Ne pas utiliser';
	$lngstr['calendar']['hint'] = 'Calendar...';

$lngstr['calendar_months'] = array(
	1 => 'Janvier',
	2 => 'Février',
	3 => 'Mars',
	4 => 'Avril',
	5 => 'Mai',
	6 => 'Juin',
	7 => 'Juilliet',
	8 => 'Août',
	9 => 'Septembre',
	10 => 'Octobre',
	11 => 'Novembre',
	12 => 'Décembre',
	);

$lngstr['label_yes'] = 'Oui';
$lngstr['label_no'] = 'Non';
$lngstr['label_undefined'] = 'Non-Défini';
$lngstr['label_partially'] = 'Partiellement';
$lngstr['label_notapplicable'] = 'n/a';
$lngstr['label_all'] = 'Tout';
$lngstr['label_noname'] = '[Sans Nom]';
$lngstr['label_none'] = '- Aucun -';
	$lngstr['label']['print_version'] = 'View printable version';
	$lngstr['label']['KtoLofN'] = '%d - %d of %d';

$lngstr['label_navigate_show'] = 'Montrer:';
$lngstr['button_next'] = 'Suivant';
$lngstr['button_prev'] = 'Précédent';
	$lngstr['button_accept'] = 'Accept'; // [NEW]
$lngstr['button_next_page'] = 'Avancer d\'une page';
$lngstr['button_prev_page'] = 'Reculer d\'une page';
$lngstr['button_first_page'] = 'Retourner à la première page';
$lngstr['button_last_page'] = 'Aller à la dernière page';

	$lngstr['label']['view_edit_user'] = 'View / edit this user profile'; // [NEW]

$lngstr['label_atype_multiple_choice'] = 'Choix Multiples';
$lngstr['label_atype_multiple_answer'] = 'Multiples Réponses';
$lngstr['label_atype_truefalse'] = 'Vrai/Faux';
$lngstr['label_atype_truefalse_true'] = 'Vrai';
$lngstr['label_atype_truefalse_false'] = 'Faux';
$lngstr['label_atype_fillintheblank'] = 'Réponse Courte';
$lngstr['label_atype_essay'] = 'Essai';
$lngstr['label_atype_random'] = 'Question Aléatoire';

	$lngstr['page_all']['mnemonic_code'] = 'Mnemonic code:';

$lngstr['item_separator'] = ' - ';
$lngstr['page_title_signin'] = 'Entrer';
$lngstr['page_title_register'] = 'Enregistrement';
$lngstr['page_title_lostpassword'] = 'Mot de passe oublié';
$lngstr['page_title_panel'] = 'Effectuer un Test';
$lngstr['page_header_panel'] = $lngstr['page_title_panel'];
$lngstr['page_title_test'] = 'Effectuer un Test';
$lngstr['page_title_results'] = 'Gestionnaire des Rapports';
$lngstr['page_header_results'] = $lngstr['page_title_results'];
 $lngstr['page_title_results_questions'] = 'Détails des Questions';
 $lngstr['page_header_results_questions'] = $lngstr['page_title_results_questions'];
 $lngstr['page_title_results_answers'] = 'Détails des Réponses';
 $lngstr['page_header_results_answers'] = $lngstr['page_title_results_answers'];
 $lngstr['page_reportsmanager']['correct_answer'] = 'Question avec la bonne Réponse';
 $lngstr['page_reportsmanager']['your_answer'] = 'Votre Réponse';
	$lngstr['page_reportsratings']['title'] = 'Ratings';
	$lngstr['page_reportsratings']['header'] = $lngstr['page_reportsratings']['title'];
	$lngstr['page_statistics']['title'] = 'Statistics';
	$lngstr['page_statistics']['header'] = $lngstr['page_statistics']['title'];
	 $lngstr['page_statistics_resultid']['title'] = 'Detailed Test Report';
	 $lngstr['page_statistics_resultid']['header'] = 'Detailed Test Report for: %s';
$lngstr['page_title_edittests'] = 'Gestionnaire de Tests';
$lngstr['page_header_edittests'] = $lngstr['page_title_edittests'];
 $lngstr['page_title_test_settings'] = 'Paramètres du Test';
 $lngstr['page_header_test_settings'] = $lngstr['page_title_test_settings'];
 $lngstr['page_title_test_assignto'] = 'Assigné à';
 $lngstr['page_header_test_assignto_tests'] = 'Tests';
 $lngstr['page_header_test_assignto_groups'] = 'Groupes';
 $lngstr['page_title_test_questions'] = 'Questions du Test';
 $lngstr['page_header_test_questions'] = $lngstr['page_title_test_questions'];
 $lngstr['page_title_test_sections'] = 'Sections du Test';
 $lngstr['page_header_test_sections'] = $lngstr['page_title_test_sections'];
 $lngstr['page_title_import_questions'] = 'Importer les Questions';
 $lngstr['page_header_import_questions'] = $lngstr['page_title_import_questions'];
	 $lngstr['page_testmanager_stats']['title'] = 'Test Statistics'; // [NEW]
 $lngstr['page_testmanager_stats']['header'] = $lngstr['page_testmanager_stats']['title']; // [NEW]
$lngstr['page_title_questionbank'] = 'Banque de Questions';
$lngstr['page_header_questionbank'] = $lngstr['page_title_questionbank'];
 $lngstr['page_title_question_stats'] = 'Statistiques de la Question';
 $lngstr['page_header_question_stats'] = $lngstr['page_title_question_stats'];
 $lngstr['page_title_edit_question'] = 'Éditer la Question';
 $lngstr['page_header_edit_question'] = $lngstr['page_title_edit_question'];
$lngstr['page_title_manageusers'] = 'Usagers';
$lngstr['page_header_manageusers'] = $lngstr['page_title_manageusers'];
 $lngstr['page_title_users_memberof'] = 'Membre de';
 $lngstr['page_title_users_memberof_users'] = 'Usagers';
 $lngstr['page_title_users_memberof_groups'] = 'Groupes';
 $lngstr['page_title_users_settings'] = 'Paramètres de l\'Usager Settings';
 $lngstr['page_header_users_settings'] = $lngstr['page_title_users_settings'];
$lngstr['page_title_managegroups'] = 'Groupes';
$lngstr['page_header_managegroups'] = $lngstr['page_title_managegroups'];
 $lngstr['page_title_groups_settings'] = 'Paramètres du Groupe';
 $lngstr['page_header_groups_settings'] = $lngstr['page_title_groups_settings'];
$lngstr['page_title_subjects'] = 'Sujets';
$lngstr['page_header_subjects'] = $lngstr['page_title_subjects'];
 $lngstr['page_title_subjects_settings'] = 'Paramètres du Sujet';
 $lngstr['page_header_subjects_settings'] = $lngstr['page_title_subjects_settings'];
$lngstr['page_title_emailtemplates'] = 'Canevas du Courriel';
$lngstr['page_header_emailtemplates'] = $lngstr['page_title_emailtemplates'];
 $lngstr['page_title_etemplates_edit'] = 'Éditer le Canevas du Courriel';
 $lngstr['page_header_etemplates_edit'] = $lngstr['page_title_etemplates_edit'];
$lngstr['page_title_rtemplates'] = 'Canevas du Rapport';
$lngstr['page_header_rtemplates'] = $lngstr['page_title_rtemplates'];
 $lngstr['page_title_rtemplates_edit'] = 'Éditer le Canevas du Rapport';
 $lngstr['page_header_rtemplates_edit'] = $lngstr['page_title_rtemplates_edit'];
$lngstr['page_title_grades'] = 'Systèmes de Graduation';
$lngstr['page_header_grades'] = $lngstr['page_title_grades'];
 $lngstr['page_title_grades_edit'] = 'Paramètres du Système de Graduation';
 $lngstr['page_header_grades_edit'] = $lngstr['page_title_grades_edit'];
$lngstr['page_title_gradescales'] = 'Échelle de Graduation';
$lngstr['page_header_gradescales'] = $lngstr['page_title_gradescales'];
 $lngstr['page_title_grade_settings'] = 'Éditer la Graduation';
 $lngstr['page_header_grade_settings'] = $lngstr['page_title_grade_settings'];
$lngstr['page_title_config'] = 'Configuration';
$lngstr['page_header_config'] = $lngstr['page_title_config'];
$lngstr['page_title_visitors'] = 'Statistiques Web';
$lngstr['page_header_visitors'] = $lngstr['page_title_visitors'];
 $lngstr['page_title_visitordetails'] = 'Détails du Visiteur';
 $lngstr['page_header_visitordetails'] = $lngstr['page_title_visitordetails'];
	$lngstr['page_resourcemanager']['title'] = 'Resource Manager';
	$lngstr['page_resourcemanager']['header'] = $lngstr['page_resourcemanager']['title'];
	 $lngstr['page_resourcemanager_settings']['title'] = 'Resource Settings';
	 $lngstr['page_resourcemanager_settings']['header'] = $lngstr['page_resourcemanager_settings']['title'];
	$lngstr['page_resources']['title'] = 'Resources';
	$lngstr['page_resources']['header'] = $lngstr['page_resources']['title'];
	$lngstr['page_couponmanager']['title'] = 'Coupon Manager';
	$lngstr['page_couponmanager']['header'] = $lngstr['page_couponmanager']['title'];
	 $lngstr['page_couponmanager_settings']['title'] = 'Coupon Settings';
	 $lngstr['page_couponmanager_settings']['header'] = $lngstr['page_couponmanager_settings']['title'];
	$lngstr['page_buycheckout']['title'] = 'Buy a Test';
	$lngstr['page_buycheckout']['header'] = $lngstr['page_buycheckout']['title'];
	$lngstr['page_getfile_template_html']['title'] = 'HTML Report';

$lngstr['panel_home'] = $lngstr['page_title_panel'];
$lngstr['panel_results'] = $lngstr['page_title_results'];
$lngstr['panel_edittests'] = $lngstr['page_title_edittests'];
$lngstr['panel_questionbank'] = $lngstr['page_title_questionbank'];
$lngstr['panel_managegroups'] = $lngstr['page_title_managegroups'];
$lngstr['panel_signout'] = 'Sortie';
$lngstr['panel_edit_subjects'] = 'Gestionnaire des Sujets';
$lngstr['panel_usersandgroups'] = 'Administration';
$lngstr['panel_manage_groups'] = 'Gestionnaire des Groupes';
$lngstr['panel_manage_users'] = 'Gestionnaire des Usagers';

$lngstr['label_choice_no'] = 'Choix %d:';
$lngstr['label_answer_text'] = 'Réponse:';
$lngstr['label_answer_feedback_no'] = 'Commentaire %d:';
$lngstr['label_accept_as_correct'] = 'Accepté comme bonne';
$lngstr['label_answer_percents'] = '% correct';
$lngstr['label_mark_correct_answers'] = 'S.V.P. Spécifiez la(les) bonne(s) réponse(s)';
$lngstr['label_mark_correct_fillintheblank'] = 'S.V.P. Entrez la bonne réponse ici';

// Report Manager:
$lngstr['label_hdr_action'] = 'Action';
$lngstr['label_hdr_select_hint'] = 'Selection ou dé-selection de toutes les rangées';
$lngstr['label_action_test_result_view'] = 'Visionner ce résultat de test';
$lngstr['label_action_test_result_delete'] = 'Effacer ce résultat';
$lngstr['label_action_results_delete'] = 'Effacer ces enregistrements(ceux sélectionnés)';
$lngstr['label_action_view_question_result'] = 'Visionner le détail des Réponses';

// Test Manager:
$lngstr['label_action_test_settings'] = 'Paramètres du Test';
$lngstr['label_action_questions_edit'] = 'Éditer les questions';
$lngstr['label_action_test_delete'] = 'Effacer ce test';
$lngstr['label_action_tests_delete'] = 'Effacer les tests (pour la sélection)';
$lngstr['label_action_question_edit'] = 'Éditer cette question';
$lngstr['label_action_question_moveup'] = 'Déplacer vers le haut';
$lngstr['label_action_question_movedown'] = 'Déplacer vers le bas';
$lngstr['label_action_question_append'] = 'Ajouter cette question au test';
$lngstr['label_action_questions_append'] = 'Ajouter ces questions au test (pour la sélection)';
$lngstr['label_action_question_delete'] = 'Effacer cette question';
$lngstr['label_action_questions_delete'] = 'Effacer ces questions (pour la sélection)';
$lngstr['label_action_question_link_delete'] = 'Retirer cette question du test';
$lngstr['label_action_question_links_delete'] = 'Retirer ces questions du test (pour la sélection)';
$lngstr['label_action_question_stats'] = 'Afficher les statistiques';
$lngstr['label_action_questions_stats'] = 'Afficher les statistiques (pour la sélection)';
$lngstr['label_action_manageusers_edit'] = 'Paramètres des Usagers';
$lngstr['label_action_manageusers_groups'] = 'Groupes d\'Usager';
$lngstr['label_action_groups'] = 'Groupes d\'Usager (pour la sélection)';
$lngstr['label_action_manageusers_delete'] = 'Effacer cet usager';
$lngstr['label_action_users_delete'] = 'Effacer les usagers (pour la sélection)';
$lngstr['label_action_create_user'] = 'Créer un nouvel usager';
$lngstr['label_action_group_delete'] = 'Effacer ce groupe';
$lngstr['label_action_groups_delete'] = 'Effacer ces groupes (pour la sélection)';
$lngstr['label_action_create_group'] = 'Créer un nouveau groupe';
$lngstr['label_action_group_edit'] = 'Paramètre du Groupe';
$lngstr['label_action_test_groups_select'] = 'Assigner aux groupes';
$lngstr['label_action_subject_edit'] = 'PAramètres du Sujet';
$lngstr['label_action_subject_delete'] = 'Effacer ce sujet';
$lngstr['label_action_subjects_delete'] = 'Effacer les sujets (pour la sélection)';
$lngstr['label_action_create_test'] = 'Créer un nouveau test';
$lngstr['label_action_import_questions'] = 'Importer les questions';
$lngstr['label_action_create_question'] = 'Créer une nouvelle question';
$lngstr['label_action_create_and_add_question'] = 'Créer / ajouter une question au test';
$lngstr['label_action_create_etemplate'] = 'Créer un nouveau canevas pour courriel';
$lngstr['label_action_etemplates_edit'] = 'Éditer ce canevas pour courriel';
$lngstr['label_action_etemplate_delete'] = 'Effacer ce canevas pour courriel';
$lngstr['label_action_etemplates_delete'] = 'Effacer ces canevas pour courriel (pour la sélection)';
$lngstr['label_action_grade_settings'] = 'Paramètres du système de graduation';
$lngstr['label_action_grade_delete'] = 'Effacer ce système de graduation';
$lngstr['label_action_grades_delete'] = 'Effacer ces systèmes de graduation (pour la sélection)';
$lngstr['label_action_gradescales_edit'] = 'Éditer cette échelle de graduation';
$lngstr['label_action_gradescales_delete'] = 'Effacer cette graduation (pour la sélection)';
$lngstr['label_action_gradescale_edit'] = 'Éditer cette graduation';
$lngstr['label_action_gradescale_delete'] = 'Effacer cette graduation';
$lngstr['label_action_visitor_delete'] = 'Effacer cet enregistrement';
$lngstr['label_action_visitors_delete'] = 'Effacer ces enregistrements (pour la sélection)';
$lngstr['page-sections']['action_section_create'] = 'Créer une nouvelle section';
$lngstr['page-sections']['action_section_edit'] = 'Éditer cette section';
$lngstr['page-sections']['action_section_delete'] = 'Effacer cette section';
$lngstr['page-sections']['action_sections_delete'] = 'Effacer ces sections (pour la sélection)';
$lngstr['page-rtemplates']['action_create_rtemplate'] = 'Créer un nouveau canevas de rapport';
$lngstr['page-rtemplates']['action_rtemplate_delete'] = 'Effacer ce canevas de rapport';
$lngstr['page-rtemplates']['action_rtemplates_delete'] = 'Effacer ces canevas de rapport (pour la sélection)';
$lngstr['page-rtemplates']['action_rtemplates_edit'] = 'Éditer ce canevas de rapport';

$lngstr['label_test_testinstructions'] = 'Instructions du Test';
$lngstr['page_test']['no_time_limit'] = 'Non chronométré';
$lngstr['page_test']['test_timer_hint'] = 'Chronomètre';
$lngstr['page_test']['questionindicator'] = '%d de %d';
$lngstr['page_test']['questionindicator_hint'] = 'Question %d de %d';
$lngstr['page_test']['testname_hint'] = 'Nom du Test';
	$lngstr['label_result_username'] = '<b>Participant name:</b> %s';
$lngstr['label_result_testname'] = '<b>Nom du Test:</b> %s';
$lngstr['label_result_testdate'] = '<b>Date:</b> %s';
$lngstr['label_result_timespent'] = '<b>Temps:</b> %s';
$lngstr['label_result_got_answers'] = '<b>Bonnes réponses:</b> %d sur %d';
	$lngstr['label_result_got_points'] = '<b>Résultat:</b> %d out of %d (%d%%)';
$lngstr['label_result_points_pending'] = '<b>Points restants:</b> %d';
	$lngstr['label_result_got_grade'] = '<b>Grade:</b> %s';
	$lngstr['label_result_got_gradefeedback'] = '<b>Grade comments:</b> %s';
$lngstr['label_result_do_not_show'] = 'Les résultats de votre test ont été enregistrés.';
$lngstr['label_result_showpdf'] = 'Cliquez pour obtenir un rapport imprimable en format PDF';
	$lngstr['page_test']['result']['showhtml'] = 'Click here to get HTML report';

	$lngstr['page_test_instructions']['next_page'] = 'Next page'; // [NEW]

$lngstr['label_report_hdr_resultid'] = 'ID';
$lngstr['label_report_hdr_resultid_hint'] = 'Résultat ID (cliquez pour trier)';
$lngstr['label_report_hdr_result_datestart'] = 'Date';
$lngstr['label_report_hdr_result_datestart_hint'] = 'Date (cliquez pour trier)';
$lngstr['label_report_hdr_user_name'] = 'Nom d\'Usager';
$lngstr['label_report_hdr_user_name_hint'] = 'Nom d\'Usager (cliquez pour trier)';
$lngstr['label_report_hdr_test_name'] = 'Nom du Test';
$lngstr['label_report_hdr_test_name_hint'] = 'Nom du Test (cliquez pour trier)';
$lngstr['page_reportsmanager']['hdr_test_attempts'] = 'Essais Exc.';
$lngstr['page_reportsmanager']['hdr_test_attempts_hint'] = 'Nombre d\'essais excédé';
$lngstr['label_report_hdr_result_timeexceeded'] = 'Temps Exc.';
$lngstr['label_report_hdr_result_timeexceeded_hint'] = 'Temps excédé (cliquez pour trier)';
$lngstr['label_report_hdr_result_points'] = 'Résultat (Points)';
$lngstr['label_report_hdr_result_points_hint'] = 'Résultat (Points) (cliquez pour trier)';
$lngstr['label_report_hdr_result_pointsmax'] = 'Nombre de Points Possible';
$lngstr['label_report_hdr_result_pointsmax_hint'] = 'Nombre de Points possible (cliquez pour trier)';
$lngstr['label_report_hdr_result_score'] = 'Résultat';
$lngstr['label_report_hdr_result_score_hint'] = 'Résultat (cliquez pour trier)';
$lngstr['label_report_hdr_gscale_gradeid'] = 'Grade';
$lngstr['label_report_hdr_gscale_gradeid_hint'] = 'Grade (cliquez pour trier)';
$lngstr['label_report_hdr2_result_answerid'] = 'Séq';
$lngstr['label_report_hdr2_result_answerid_hint'] = 'Séquence (cliquez pour trier)';
$lngstr['label_report_hdr2_test_questionid'] = '#';
$lngstr['label_report_hdr2_test_questionid_hint'] = 'Numéro de la Question (cliquez pour trier)';
$lngstr['label_report_hdr2_result_answer_timespent'] = 'Temps';
$lngstr['label_report_hdr2_result_answer_timespent_hint'] = 'Temps (cliquez pour trier)';
$lngstr['label_report_hdr2_result_answer_text'] = 'Réponse';
$lngstr['label_report_hdr2_result_answer_text_hint'] = 'Réponse';
$lngstr['label_report_hdr2_result_answer_points'] = 'Points';
$lngstr['label_report_hdr2_result_answer_points_hint'] = 'Valeur du Pointage (cliquez pour trier)';
$lngstr['label_report_hdr2_result_answer_iscorrect'] = 'Correct';
$lngstr['label_report_hdr2_result_answer_iscorrect_hint'] = 'Correct (cliquez pour trier)';
$lngstr['label_report_hdr2_result_answer_timeexceeded'] = $lngstr['label_report_hdr_result_timeexceeded'];
$lngstr['label_report_hdr2_result_answer_timeexceeded_hint'] = $lngstr['label_report_hdr_result_timeexceeded_hint'];
$lngstr['label_edittests_hdr_testid'] = 'ID';
$lngstr['label_edittests_hdr_testid_hint'] = 'Identificateur du Test (cliquez pour trier)';
$lngstr['label_edittests_hdr_test_name'] = 'Nom du Test';
$lngstr['label_edittests_hdr_test_name_hint'] = 'Nom du Test (cliquez pour trier)';
$lngstr['label_edittests_hdr_subjectid'] = 'Sujet';
$lngstr['label_edittests_hdr_subjectid_hint'] = 'Sujet (cliquez pour trier)';
$lngstr['label_edittests_hdr_test_datestart'] = 'Date du début';
$lngstr['label_edittests_hdr_test_datestart_hint'] = 'Date du début (cliquez pour trier)';
$lngstr['label_edittests_hdr_test_dateend'] = 'Date de fin';
$lngstr['label_edittests_hdr_test_dateend_hint'] = 'Date de fin (cliquez pour trier)';
$lngstr['label_edittests_hdr_test_notes'] = 'N';
$lngstr['label_edittests_hdr_test_notes_hint'] = 'Notes';
$lngstr['label_edittests_hdr_test_enabled'] = 'Actif';
$lngstr['label_edittests_hdr_test_enabled_hint'] = 'Actif (cliquez pour trier)';
$lngstr['label_editquestions_hdr_questionid'] = 'ID';
$lngstr['label_editquestions_hdr_questionid_hint'] = 'Identificateur de la Question (cliquez pour trier)';
$lngstr['label_editquestions_hdr_subjectid'] = 'Sujet';
$lngstr['label_editquestions_hdr_subjectid_hint'] = 'Sujet (cliquez pour trier)';
$lngstr['label_editquestions_hdr_question_text'] = 'Question';
$lngstr['label_editquestions_hdr_question_text_hint'] = 'Question';
$lngstr['label_editquestions_hdr_question_type'] = 'Type';
$lngstr['label_editquestions_hdr_question_type_hint'] = 'Type (cliquez pour trier)';
$lngstr['label_editquestions_hdr_question_points'] = 'Points';
$lngstr['label_editquestions_hdr_question_points_hint'] = 'Valeur du Pointage (cliquez pour trier)';
$lngstr['label_editquestions_hdr_test_questionid'] = 'Séq';
$lngstr['label_editquestions_hdr_test_questionid_hint'] = 'Séquence (cliquez pour trier)';
$lngstr['label_questionstats_hdr_questionid'] = 'ID';
$lngstr['label_questionstats_hdr_questionid_hint'] = 'Identificateur de la Question';
$lngstr['label_questionstats_hdr_questiondata'] = 'Données de la Question';
$lngstr['label_questionstats_hdr_questiondata_hint'] = 'Données de la Question';
$lngstr['label_questionstats_hdr_answerclicks'] = 'Clicks';
$lngstr['label_questionstats_hdr_answerclicks_hint'] = 'Clicks de Réponse';
$lngstr['label_questionstats_hdr_answerpercent'] = '%';
$lngstr['label_questionstats_hdr_answerpercent_hint'] = 'Pourcent';
$lngstr['label_manageusers_hdr_userid'] = 'ID';
$lngstr['label_manageusers_hdr_userid_hint'] = 'Identificateur de l\'usager (cliquez pour trier)';
$lngstr['label_manageusers_hdr_user_notes'] = 'N';
$lngstr['label_manageusers_hdr_user_notes_hint'] = 'Notes';
$lngstr['label_manageusers_hdr_user_name'] = 'Nom d\'Usager';
$lngstr['label_manageusers_hdr_user_name_hint'] = 'Nom d\'Usager (cliquez pour trier)';
$lngstr['label_manageusers_hdr_user_email'] = 'Courriel';
$lngstr['label_manageusers_hdr_user_email_hint'] = 'Courriel (cliquez pour trier)';
$lngstr['label_manageusers_hdr_user_firstname'] = 'Prénom';
$lngstr['label_manageusers_hdr_user_firstname_hint'] = 'Prénom (cliquez pour trier)';
$lngstr['label_manageusers_hdr_user_lastname'] = 'Nom de famille';
$lngstr['label_manageusers_hdr_user_lastname_hint'] = 'Nom de famille (cliquez pour trier)';
$lngstr['label_manageusers_hdr_user_enabled'] = 'Actif';
$lngstr['label_manageusers_hdr_user_enabled_hint'] = 'Actif (cliquez pour trier)';
$lngstr['label_managegroups_hdr_groupid'] = 'ID';
$lngstr['label_managegroups_hdr_groupid_hint'] = 'Identificateur de Groupe (cliquez pour trier)';
$lngstr['label_managegroups_hdr_group_name'] = 'Nom';
$lngstr['label_managegroups_hdr_group_name_hint'] = 'Nom du Groupe (cliquez pour trier)';
$lngstr['label_managegroups_hdr_group_description'] = 'Description';
$lngstr['label_managegroups_hdr_group_description_hint'] = 'Description du Groupe (cliquez pour trier)';
$lngstr['label_managegroups_hdr_member_of'] = 'Membre';
$lngstr['label_managegroups_hdr_member_of_hint'] = 'Membre de (cliquez pour trier)';
$lngstr['label_subjects_hdr_subjectid'] = 'ID';
$lngstr['label_subjects_hdr_subjectid_hint'] = 'Identificateur du Sujet (cliquez pour trier)';
$lngstr['label_subjects_hdr_subject_name'] = 'Nom';
$lngstr['label_subjects_hdr_subject_name_hint'] = 'Nom du Sujet (cliquez pour trier)';
$lngstr['label_subjects_hdr_subject_description'] = 'Description';
$lngstr['label_subjects_hdr_subject_description_hint'] = 'Description du Sujet (cliquez pour trier)';
$lngstr['label_etemplates_hdr_etemplateid'] = 'ID';
$lngstr['label_etemplates_hdr_etemplateid_hint'] = 'Identificateur du Canevas de Courriel (cliquez pour trier)';
$lngstr['label_etemplates_hdr_etemplate_name'] = 'Nom';
$lngstr['label_etemplates_hdr_etemplate_name_hint'] = 'Nom du Canevas de Courriel (cliquez pour trier)';
$lngstr['label_etemplates_hdr_etemplate_description'] = 'Description';
$lngstr['label_etemplates_hdr_etemplate_description_hint'] = 'Description du canevas de Courriel (cliquez pour trier)';

$lngstr['page-rtemplates']['hdr_rtemplateid'] = 'ID';
$lngstr['page-rtemplates']['hdr_rtemplateid_hint'] = 'Identificateur du Canevas de Rapport (cliquez pour trier)';
$lngstr['page-rtemplates']['hdr_rtemplate_name'] = 'Nom';
$lngstr['page-rtemplates']['hdr_rtemplate_name_hint'] = 'Nom du Canevas de Rapport (cliquez pour trier)';
$lngstr['page-rtemplates']['hdr_rtemplate_description'] = 'Description';
$lngstr['page-rtemplates']['hdr_rtemplate_description_hint'] = 'Description du Canevas de Rapport (cliquez pour trier)';

$lngstr['label_grades_hdr_gscaleid'] = 'ID';
$lngstr['label_grades_hdr_gscaleid_hint'] = 'Identificateur du Système de Graduation (cliquez pour trier)';
$lngstr['label_grades_hdr_gscale_name'] = 'Nom';
$lngstr['label_grades_hdr_gscale_name_hint'] = 'Nom du Système de Graduation (cliquez pour trier)';
$lngstr['label_grades_hdr_gscale_description'] = 'Description';
$lngstr['label_grades_hdr_gscale_description_hint'] = 'Description du Système de Graduation (cliquez pour trier)';
$lngstr['label_gradescales_hdr_gscale_gradeid'] = 'ID';
$lngstr['label_gradescales_hdr_gscale_gradeid_hint'] = 'Identificateur de la Graduation (cliquez pour trier)';
$lngstr['label_gradescales_hdr_grade_from'] = 'Min';
$lngstr['label_gradescales_hdr_grade_from_hint'] = 'Minimum (cliquez pour trier)';
$lngstr['label_gradescales_hdr_grade_to'] = 'Max';
$lngstr['label_gradescales_hdr_grade_to_hint'] = 'Maximum (cliquez pour trier)';
$lngstr['label_gradescales_hdr_grade_name'] = 'Nom';
$lngstr['label_gradescales_hdr_grade_name_hint'] = 'Nom de la Graduation (cliquez pour trier)';
$lngstr['label_gradescales_hdr_grade_description'] = 'Description';
$lngstr['label_gradescales_hdr_grade_description_hint'] = 'Description de la Graduation (cliquez pour trier)';
$lngstr['label_visitors_hdr_visitorid'] = 'ID';
$lngstr['label_visitors_hdr_visitorid_hint'] = 'Identificateur du Visiteur (cliquez pour trier)';
$lngstr['label_visitors_hdr_startdate'] = 'Date';
$lngstr['label_visitors_hdr_startdate_hint'] = 'Date (cliquez pour trier)';
$lngstr['label_visitors_hdr_username'] = 'Nom d\'Usager';
$lngstr['label_visitors_hdr_username_hint'] = 'Nom d\'Usager (cliquez pour trier)';
$lngstr['label_visitors_hdr_hits'] = 'Hits';
$lngstr['label_visitors_hdr_hits_hint'] = 'Hits (cliquez pour trier)';
$lngstr['label_visitors_hdr_ip'] = 'Adresse IP';
$lngstr['label_visitors_hdr_ip_hint'] = 'Adresse IP';
$lngstr['label_visitors_hdr_host'] = 'Nom de l\'Hôte';
$lngstr['label_visitors_hdr_host_hint'] = 'Nom de l\'Hôte (cliquez pour trier)';
$lngstr['label_visitors_hdr_referer'] = 'Référent';
$lngstr['label_visitors_hdr_referer_hint'] = 'Référent (cliquez pour trier)';
$lngstr['page-sections']['hdr_sectionid'] = 'Séq';
$lngstr['page-sections']['hdr_sectionid_hint'] = 'Séquence (cliquez pour trier)';
$lngstr['page-sections']['hdr_section_name'] = 'Nom';
$lngstr['page-sections']['hdr_section_name_hint'] = 'Nom de la Section (cliquez pour trier)';
$lngstr['page-sections']['hdr_section_description'] = 'Description';
$lngstr['page-sections']['hdr_section_description_hint'] = 'Description de la Section (cliquez pour trier)';


$lngstr['button_signin'] = 'Entrer';
$lngstr['button_signin_as_guest'] = 'Entrer en tant qu\'invité';
$lngstr['button_register'] = 'Enregistrer';
$lngstr['button_starttest'] = 'Débuter un test';
$lngstr['button_continue'] = 'Continuer';
$lngstr['button_showresults'] = 'Continuer';
$lngstr['button_answer'] = 'Réponse';
$lngstr['button_submit'] = 'Soumettre';
$lngstr['button_update'] = 'Mettre à jour';
$lngstr['button_update_and_edit_questions'] = 'Mettre à jour / aller à la liste de questions';
$lngstr['button_update_and_create_new_question'] = 'Mettre à jour / créer une nouvelle question';
$lngstr['button_back'] = 'Reculer';
$lngstr['button_cancel'] = 'Annuler';
$lngstr['button_set'] = 'Configurer';
$lngstr['button_import'] = 'Importer';
	$lngstr['button_browse'] = 'Browse';

$lngstr['label_pleasespecify'] = '- Please specify -';

$lngstr['label_username'] = 'Nom d\'Usager:';
$lngstr['label_password'] = 'Mot de passe:';
$lngstr['label_confirmpassword'] = 'Confirmation du mot de passe:';
$lngstr['label_newpassword'] = 'Nouveau mot de passe:';
$lngstr['label_email'] = 'Courriel:';
$lngstr['label_title'] = 'Titre:';
$lngstr['label_firstname'] = 'Prénom:';
$lngstr['label_lastname'] = 'Nom de famille:';
$lngstr['label_middlename'] = 'Nom du milieu:';

$lngstr['label_address'] = 'Adresse:';
$lngstr['label_city'] = 'Ville:';
$lngstr['label_state'] = 'État/Province:';
$lngstr['label_zip'] = 'Code Postal:';
$lngstr['label_country'] = 'Pays:';
$lngstr['label_phone'] = 'No Téléphone:';
$lngstr['label_fax'] = 'No Télécopieur:';
$lngstr['label_mobile'] = 'No Tél. Mobile:';
$lngstr['label_pager'] = 'No Téléavertisseur:';
$lngstr['label_ipphone'] = 'Téléphone IP:';
$lngstr['label_webpage'] = 'Page Web:';
$lngstr['label_icq'] = 'ICQ:';
$lngstr['label_msn'] = 'MSN messenger:';
$lngstr['label_aol'] = 'AOL messenger:';
$lngstr['label_gender'] = 'Sexe:';
$lngstr['label_gender_items'] = array(0 => $lngstr['label_pleasespecify'], 1 => 'Homme', 2 => 'Femme');
$lngstr['label_birthday'] = 'Anniversaire:';
$lngstr['label_husbandwife'] = 'Mari / Épouse:';
$lngstr['label_children'] = 'Enfants:';
$lngstr['label_trainer'] = 'Instructeur:';
$lngstr['label_photo'] = 'Photo:';

$lngstr['label_company'] = 'Compagnie:';
$lngstr['label_cposition'] = 'Position:';
$lngstr['label_department'] = 'Département:';
$lngstr['label_coffice'] = 'Office:';
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
$lngstr['label_cphoto'] = 'Logo:';

$lngstr['label_userfield'] = 'Champ Personnalisé %d:';
$lngstr['label_userfield_caption'] = 'Champ Personnalisé %d Entête:';
$lngstr['label_userfield_type'] = 'Champ Personnalisé %d Type:';
$lngstr['label_userfield_type_items'] = array(CONFIG_CONST_type_singlelinetext => 'Ligne unique de Texte', CONFIG_CONST_type_multilinetext => 'Multiples lignes de Texte', CONFIG_CONST_type_dropdownlist => 'Liste Déroulante');
$lngstr['label_userfield_values_hint'] = '(Items séparés par un point-virgule)';

	$lngstr['label_filter_header'] = 'Set a filter (click to show/hide)';
	$lngstr['button_set_filter'] = 'Set filter';
	$lngstr['button_remove_filter'] = 'Remove filter';
	$lngstr['page_reportsmanager']['filter_dates_years_items'] = array(0 => 'Show all', 'd0' => '0 days', 'd1' => '1 day', 'd2' => '2 days', 'd3' => '3 days', 'd4' => '4 days', 'd5' => '5 days', 'd6' => '6 days', 'd7' => '1 week', 'd14' => '2 weeks', 'd21' => '3 weeks', 'd29' => '4 weeks', 'm1' => '1 month', 'm2' => '2 months', 'm3' => '3 months', 'm4' => '4 months', 'm5' => '5 months', 'm6' => '6 months', 'm7' => '7 months', 'm8' => '8 months', 'm9' => '9 months', 'm10' => '10 months', 'm11' => '11 months', 'y1' => '1 year', 'y2' => '2 years', 'y3' => '3 years', 'y4' => '4 years', 'y5' => '5 years', 'y6' => '6 years');
	$lngstr['page_reportsmanager']['filter_dates_years'] = 'Date:';
	$lngstr['page_reportsmanager']['div_report_header'] = 'Select a report (click to show/hide)';
	$lngstr['page_reportsmanager']['report_list'] = 'Report template:';
	$lngstr['page_reportsmanager']['report_export_to_csv'] = 'Export to CSV';
	$lngstr['page_reportsmanager']['report_preview'] = 'Preview this report';
	$lngstr['page_reportsmanager']['report_print'] = 'Print this report';
	$lngstr['page_reportsmanager']['fields']['name']['resultid'] = $lngstr['label_report_hdr_resultid'];
	$lngstr['page_reportsmanager']['fields']['name']['result_datestart'] = $lngstr['label_report_hdr_result_datestart'];
	$lngstr['page_reportsmanager']['fields']['name']['result_datestart_formatted'] = $lngstr['label_report_hdr_result_datestart'];
	$lngstr['page_reportsmanager']['fields']['name']['userid'] = 'User ID';
	$lngstr['page_reportsmanager']['fields']['name']['user_name'] = $lngstr['label_report_hdr_user_name'];
	$lngstr['page_reportsmanager']['fields']['name']['user_firstname'] = 'First Name';
	$lngstr['page_reportsmanager']['fields']['name']['user_lastname'] = 'Last Name';
	$lngstr['page_reportsmanager']['fields']['name']['testid'] = 'Test ID';
	$lngstr['page_reportsmanager']['fields']['name']['test_name'] = $lngstr['label_report_hdr_test_name'];
	$lngstr['page_reportsmanager']['fields']['name']['test_attempts'] = $lngstr['page_reportsmanager']['hdr_test_attempts'];
	$lngstr['page_reportsmanager']['fields']['name']['result_timeexceeded'] = $lngstr['label_report_hdr_result_timeexceeded'];
	$lngstr['page_reportsmanager']['fields']['name']['result_points'] = $lngstr['label_report_hdr_result_points'];
	$lngstr['page_reportsmanager']['fields']['name']['result_pointsmax'] = $lngstr['label_report_hdr_result_pointsmax'];
	$lngstr['page_reportsmanager']['fields']['name']['result_score'] = $lngstr['label_report_hdr_result_score'];
	$lngstr['page_reportsmanager']['fields']['name']['grade_name'] = $lngstr['label_report_hdr_gscale_gradeid'];

$lngstr['page_register']['no_username'] = 'Le nom d\'Usager spécifié est inccorect.<br>';
$lngstr['page_register']['no_email'] = 'Le Courriel spécifié est incorrect.<br>';
$lngstr['page_register']['no_password'] = 'Le mot de passe ne correspond pas à celui répété.<br>';
	$lngstr['page_register']['no_title'] = 'No correct title specified.<br>';
$lngstr['page_register']['no_firstname'] = 'Le prénom spécifé est incorrect.<br>';
$lngstr['page_register']['no_lastname'] = 'Le nom de famille spécifié est incorrect.<br>';
$lngstr['page_register']['no_middlename'] = 'Le nom du milieu spécifié est incorrect.<br>';

$lngstr['page_register']['no_address'] = 'L\'adresse spécifié est incorrecte.<br>';
	$lngstr['page_register']['no_city'] = 'No correct city specified.<br>';
	$lngstr['page_register']['no_state'] = 'No correct state/province specified.<br>';
	$lngstr['page_register']['no_zip'] = 'No correct zip/postal code specified.<br>';
	$lngstr['page_register']['no_country'] = 'No correct country specified.<br>';
	$lngstr['page_register']['no_phone'] = 'No correct phone specified.<br>';
	$lngstr['page_register']['no_fax'] = 'No correct fax specified.<br>';
	$lngstr['page_register']['no_mobile'] = 'No correct mobile specified.<br>';
	$lngstr['page_register']['no_pager'] = 'No correct pager specified.<br>';
	$lngstr['page_register']['no_ipphone'] = 'No correct IP phone specified.<br>';
	$lngstr['page_register']['no_webpage'] = 'No correct web page specified.<br>';
	$lngstr['page_register']['no_icq'] = 'No correct ICQ messenger identifier specified.<br>';
	$lngstr['page_register']['no_msn'] = 'No correct MSN messenger identifier specified.<br>';
	$lngstr['page_register']['no_aol'] = 'No correct AOL messenger identifier specified.<br>';
	$lngstr['page_register']['no_gender'] = 'No correct gender specified.<br>';
	$lngstr['page_register']['no_birthday'] = 'No correct birthday specified.<br>';
	$lngstr['page_register']['no_husbandwife'] = 'No correct husband (wife) name specified.<br>';
	$lngstr['page_register']['no_children'] = 'No correct children specified.<br>';
$lngstr['page_register']['no_trainer'] = 'Le nom du formateur spécifié est incorrect.<br>';
	$lngstr['page_register']['no_photo'] = 'No correct photo specified.<br>';

$lngstr['page_register']['no_company'] = 'Le nom de la compagnie spécifié est incorrect.<br>';
	$lngstr['page_register']['no_cposition'] = 'No correct company position specified.<br>';
$lngstr['page_register']['no_department'] = 'Le nom du département spécifié est incorrect.<br>';
	$lngstr['page_register']['no_coffice'] = 'No correct company office specified.<br>';
	$lngstr['page_register']['no_caddress'] = 'No correct company address specified.<br>';
	$lngstr['page_register']['no_ccity'] = 'No correct company city specified.<br>';
	$lngstr['page_register']['no_cstate'] = 'No correct company state/province specified.<br>';
	$lngstr['page_register']['no_czip'] = 'No correct company zip/postal code specified.<br>';
	$lngstr['page_register']['no_ccountry'] = 'No correct company country specified.<br>';
	$lngstr['page_register']['no_cphone'] = 'No correct company phone specified.<br>';
	$lngstr['page_register']['no_cfax'] = 'No correct company fax specified.<br>';
	$lngstr['page_register']['no_cmobile'] = 'No correct company mobile specified.<br>';
	$lngstr['page_register']['no_cpager'] = 'No correct company pager specified.<br>';
	$lngstr['page_register']['no_cipphone'] = 'No correct company IP phone specified.<br>';
	$lngstr['page_register']['no_cwebpage'] = 'No correct company web page specified.<br>';
	$lngstr['page_register']['no_cphoto'] = 'No correct company logo specified.<br>';

$lngstr['page_register']['no_userfield'] = 'Le champ "%s" spécifié est incorrect.<br>';
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
$lngstr['err_username_duplicate'] = 'Ce nom d\'usager est déjà pris. S.V.P choisir un autre nom d\'usager.<br>';
$lngstr['err_groupname_duplicate'] = 'Ce nom de Groupe est déjà pris. S.V.P. choisir un autre nom de Groupe.<br>';
$lngstr['err_subjectname_duplicate'] = 'Ce nom de Sujet est déjà pris. S.V.P. choisir un autre nom de Sujet.<br>';
$lngstr['err_signin_incorrect']  = 'Ne peut pas Entrer. Le nom d\'Usager et le mot de passe sont incorrects.<br>';

// Register page:
$lngstr['page-register']['intro'] = 'Vous pouvez utiliser ce formulaire pour ajouter un compte usager.';
$lngstr['page-register']['successful'] = 'Usager "%s" a été ajouté.';
	$lngstr['page-register']['check_activation_email'] = 'An email have been sent to your address. It contains instructions to complete your registration.'; // [NEW]
	$lngstr['page-register']['wait_for_approval'] = 'Your account is successfully created and has to be activated by an administrator, please be patient.';
	$lngstr['page-register']['account_activated'] = 'Your account has been activated.'; // [NEW]
	$lngstr['page-register']['title_items'] = array('' => $lngstr['label_none'], 'Dr.' => 'Dr.', 'Miss' => 'Miss', 'Mr.' => 'Mr.', 'Mrs.' => 'Mrs.', 'Ms.' => 'Ms.', 'Prof.' => 'Prof.', 'Rev.' => 'Rev.'); // [NEW]
$lngstr['page_register']['required_mark'] = REQUIRED_FIELD_MARK.' = Indique les champs requis';

// Sign in page:
$lngstr['page_signin_box_signin_intro'] = '<b>S.V.P. Entrez</b>';
$lngstr['page_signin_box_signin'] = $lngstr['label_username'];
$lngstr['page_signin_box_password'] = $lngstr['label_password'];
$lngstr['page_signin_box_register_intro'] = '<b>Vous n\'avez pas de compte usager?</b> Vous pouvez vous enregister vous-même <a href="register.php">en cliquant sur le lien suivant</a>.';
$lngstr['page_signin_box_lostpassword_intro'] = '<b>Vous avez oublié votre mot de passe?</b> Si vous avez <a href="lostpassword.php">oublié votre mot de passe</a>, nous pouvons vous en envoyer un nouveau par courriel.';
$lngstr['page_signin']['test_code'] = 'Test code:';

// Forgot password page:
$lngstr['page_lostpassword_enter_username'] = '<b>S.V.P. entrez votre nom d\'Usager</b>';
$lngstr['button_send_new_password'] = 'Envoyer un nouveau mot de passe';
$lngstr['err_username_not_found'] = 'Nom d\'Usager innexistant! Essayer à nouveau.';
$lngstr['inf_password_reset'] = 'Votre mot de passe a été changé! S.V.P. vérifiez votre courriel.';

// Take a test page:
$lngstr['page_takeatest']['hdr_testid'] = $lngstr['label_edittests_hdr_testid'];
$lngstr['page_takeatest']['hdr_testid_hint'] = $lngstr['label_edittests_hdr_testid_hint'];
$lngstr['page_panel_hdr_test'] = 'Test';
$lngstr['page_panel_hdr_test_hint'] = 'Nom du Test et Description';
$lngstr['page_panel_hdr_teststatus'] = 'Statut';
$lngstr['page_panel_hdr_teststatus_hint'] = 'Statut du Test';
$lngstr['page_panel_hdr_gettest'] = 'Effectuer le Test';
$lngstr['page_panel_hdr_gettest_hint'] = 'Effectuer le test';
$lngstr['page_panel_status_available'] = 'Disponible';
$lngstr['page_panel_status_will_be_available_on'] = 'Va être disponible le<br>%s';
	$lngstr['page_panel_status_inprogress'] = 'In progress';
$lngstr['page_panel_get_test_link'] = 'Test';
	$lngstr['page_takeatest']['buy_test'] = 'Buy';
$lngstr['page-takeatest']['attempts_left'] = 'Disponible<br>(Nombre d\'essais permis: %d)';
$lngstr['page-takeatest']['attempts_limit_reached'] = 'Non disponible<br>(Nombre d\'essais permis: 0)';
	$lngstr['page-takeatest']['passed'] = 'Passed'; // [NEW]
	$lngstr['page_takeatest']['score'] = 'Score';
	$lngstr['page_takeatest']['score_total'] = 'Your total score: %d out of %d (%.2f%%)';
	$lngstr['page_takeatest']['hdr_score'] = 'Points'; // 'Score'
	$lngstr['page_takeatest']['hdr_score_hint'] = 'Points'; // 'Score (click to sort by)'
$lngstr['page_test_results'] = 'Résultats du Test';
$lngstr['page_test_results_homepage'] = 'Retourner à la page pour Effectuer un Test';
$lngstr['page_test_results_viewresults'] = 'Réviser les Résultats de ce Test';
	$lngstr['page_test']['results_nexttest'] = 'Continue'; // [NEW]
	$lngstr['page_test']['finish_test'] = 'Finish this test';
	$lngstr['page_test']['qst_finish_test_header'] = 'Finish a Test';
	$lngstr['page_test']['qst_finish_test'] = 'Are you sure want to finish this test?';
	$lngstr['page_test']['review_question'] = 'Review';
	$lngstr['page_test']['close_this_window'] = 'Close this window';

$lngstr['page_results_delete_record'] = 'Effacer un Enregistrement';
$lngstr['page_edittests_delete_test'] = 'Effacer un Test';
$lngstr['page_edittests_delete_question'] = 'Effacer une Question';
$lngstr['page_edittests_delete_question_link'] = 'Effacer une Question';
$lngstr['page_managegroups_delete_group'] = 'Effacer un Groupe';
$lngstr['page_subjects_delete_subject'] = 'Effacer un Sujet';
$lngstr['page_manageusers_delete_user'] = 'Effacer un Usager';
$lngstr['page_etemplates_delete_etemplate'] = 'Effacer un Canevas de Courriel';
$lngstr['page-rtemplates']['delete_rtemplate'] = 'Effacer un Canevas de Rapport';
$lngstr['page_grades_delete_grade'] = 'Effacer un Système de Graduation';
$lngstr['page_gradescales_delete_grade'] = 'Effacer une Graduation';
$lngstr['page_visitors_delete_visitor'] = 'Effacer un enregistrement';
	$lngstr['page_visitors']['ipwhois'] = 'Lookup this IP address in the WhoIs service'; // [NEW]

//[CUSTOM] $lngstr['page_testsettings']['test_type'] = 'Test type:';
//[CUSTOM] $lngstr['page_testsettings']['test_type_items'] = array(0 => 'Default', 1 => 'Survey');
$lngstr['page_edittests_subjectid'] = 'Sujet du Test:';
$lngstr['page_edittests_testname'] = 'Nom du Test:';
	$lngstr['page_testmanager']['test_code'] = 'Test code:';
$lngstr['page_edittests_testenabled'] = 'Ce test est actif';
$lngstr['page_edittests_teststart'] = 'Ce Test débute le:';
$lngstr['page_edittests_testend'] = 'Ce Test termine le:';
$lngstr['page_edittests_testtime'] = 'Temps du Test:';
$lngstr['page_edittests_testtimeforceout'] = 'Terminer le test lorsque la limite de temp est atteinte';
$lngstr['page-testmanager']['attempts_allowed'] = 'Nombre d\'essais permis:';
$lngstr['page-testmanager']['attempts_allowed_list'] = array(0 => 'Illimité', 1 => '1 essai', 2 => '2 essais', 3 => '3 essais', 4 => '4 essais', 5 => '5 essais', 6 => '6 essais', 7 => '7 essais', 8 => '8 essais', 9 => '9 essais', 10 => '10 essais', 11 => '11 essais', 12 => '12 essais', 13 => '13 essais', 14 => '14 essais', 15 => '15 essais', 16 => '16 essais', 17 => '17 essais', 18 => '18 essais', 19 => '19 essais', 20 => '20 essais');
	$lngstr['page_testmanager']['content_protection'] = 'Content protection:';
	$lngstr['page_testmanager']['content_protection_list'] = array(0 => $lngstr['label_none'], 1 => 'Protect (JavaScript)');
$lngstr['page_edittests_showquestions'] = 'Afficher les Questions:';
$lngstr['page_testmanager']['showquestions_items'] = array(1 => 'Une à une', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10', 0 => 'Toutes les questions'); // [NEW]
$lngstr['page_edittests_shuffle'] = 'Options de randomisation:';
$lngstr['page_edittests_shuffleq'] = 'Ordre des questions';
$lngstr['page_edittests_shufflea'] = 'Ordre des réponses';
	$lngstr['page_testmanager']['review_options'] = 'Review options:';
	$lngstr['page_testmanager']['review_list'] = array(0 => 'Forbid any review', 1 => 'Allow the questions review');
$lngstr['page_edittests_gradingsystem'] = 'Système de Graduation:';
// $lngstr['label_no_gradingsystem'] = 'Do not use';
$lngstr['page_edittests_resultsettings'] = 'Rapport des Résultats:';
$lngstr['page_edittests_result_showqfeedback'] = 'Afficher les commentaires';
$lngstr['page_edittests_result_showgrade'] = 'Afficher la graduation';
	$lngstr['page_testmanager']['result_showgradefeedback'] = 'Show grade feedback';
$lngstr['page_edittests_result_showanswers'] = 'Afficher les réponses';
$lngstr['page_edittests_result_showpoints'] = 'Afficher le pointage';
	$lngstr['page_testsettings']['custom_report'] = 'Use custom template:'; // [NEW]
$lngstr['page_edittests_testdescription'] = 'Courte Description:';
$lngstr['page_edittests_testinstructions'] = 'Instructions globale du Test:';
$lngstr['page_edittests_testnotes'] = 'Notes du Test (pour usage interne):';
$lngstr['page_edittests_assignedto'] = 'Assigné à:';
// $lngstr['page_edittests_assignedto_everybody'] = 'Everybody';
// $lngstr['page_edittests_assignedto_nobody'] = 'Nobody';
$lngstr['page_edittests_assignto_everybody'] = 'Assigné à tous (s\'applique malgré les paramètres spécifiques)';
$lngstr['page_edittests_advancedreport'] = 'Rapport Avancé:';
// $lngstr['page-testsettings']['no_report'] = 'Aucun Rapport';
$lngstr['page-testsettings']['report_template'] = 'Canevas:';
$lngstr['page-testsettings']['report_grade_condition'] = 'Condition de Graduation:';
$lngstr['page-testsettings']['no_condition'] = 'Aucune condition';
// $lngstr['label_no_advanced_report'] = 'No advanced report';
	$lngstr['page_edittests_advancedreport_showhtml'] = 'Show HTML report';
$lngstr['page_edittests_advancedreport_showpdf'] = 'Afficher un Rapport imprimable en format PDF';
$lngstr['page_edittests_sendresultsbyemail'] = 'Envoyer les résultats par courriel:';
$lngstr['page_edittests_sendresultsbyemail_template'] = 'Canevas:';
$lngstr['page_edittests_sendresultsbyemail_to'] = 'À:';
$lngstr['page_edittests_result_emailtouser'] = 'envoyer les résultats à l\'usager';
$lngstr['label_do_not_send_email'] = 'Ne pas envoyer';
	$lngstr['page-testmanager']['prevtest'] = 'Previous test:'; // [NEW]
	$lngstr['page-testmanager']['nexttest'] = 'Next test:'; // [NEW]
	$lngstr['page_testmanager']['testprice'] = 'Test price ('.$lngstr['language']['currency_name'].'):';
	$lngstr['page_testmanager']['settings']['section_groups'] = 'Groups (click to show/hide)'; // $lngstr['page_users']['section_groups']
	$lngstr['page_testmanager']['settings']['section_advanced'] = 'Advanced (click to show/hide)'; // $lngstr['page_grade']['section_advanced']
	$lngstr['page_testmanager']['other_options'] = 'Other options:';
	$lngstr['page_testmanager']['repeat_until_answered_correctly'] = 'Repeat the test until all questions are answered correctly';
	$lngstr['page_testmanager']['settings']['section_notes'] = 'Notes (click to show/hide)'; // $lngstr['page_users']['section_notes']

	$lngstr['page_testmanager']['view_test_stats'] = 'View test statistics'; // [NEW]

$lngstr['page_assignto_hdr_assignto'] = 'Assigné';
$lngstr['page_assignto_hdr_assignto_hint'] = 'Assigné À';

	$lngstr['page_testmanager_import']['document_label'] = 'Import this document:';
$lngstr['page_testmanager_import']['document_howto'] = '';
$lngstr['page_importtest_ut_import_document'] = 'Importation du document UniTest System:';
$lngstr['page_importtest_ut_import_document_hint'] = 'Coller le Document UniTest System ici';
$lngstr['page_importtest_ut_import_document_howto'] = '1. Exécuter le module d\'édition UniTest System;<br>2. Selectionner l\'Importation d\'un Document à partir d\'un Fichier -> Export menu;<br>3. Copier (en utilisant le press papier) et coller dans cette boîte de texte.';
	$lngstr['page_testmanager_import']['section_delimiters'] = 'Prefixes (click to show/hide)';
	$lngstr['page_testmanager_import']['question_delimiter'] = 'Question prefix:';
	$lngstr['page_testmanager_import']['answer_delimiter'] = 'Choice prefix:';
	$lngstr['page_testmanager_import']['answer2_delimiter'] = 'Choice prefix (for column 2):';
	$lngstr['page_testmanager_import']['preq_delimiter'] = 'Question instructions prefix:';
	$lngstr['page_testmanager_import']['postq_delimiter'] = 'Question explanation prefix:';
	$lngstr['page_testmanager_import']['correct_delimiter'] = 'Correct answer value prefix:';
	$lngstr['page_testmanager_import']['points_delimiter'] = 'Point value prefix:';
	$lngstr['page_testmanager_import']['type_delimiter'] = 'Question type prefix:';
	$lngstr['page_testmanager_import']['subject_delimiter'] = 'Question subject prefix:';
	$lngstr['page_testmanager_import']['question_type_multiple_choice'] = 'multiple choice';
	$lngstr['page_testmanager_import']['question_type_true_false'] = 'true/false';
	$lngstr['page_testmanager_import']['question_type_multiple_answer'] = 'multiple answer';
	$lngstr['page_testmanager_import']['question_type_short_answer'] = 'short answer';
	$lngstr['page_testmanager_import']['question_type_essay'] = 'essay';

	$lngstr['page_testmanager_stats']['all_participants'] = 'Statistics: all participants';
	$lngstr['page_testmanager_stats']['hdr_testid'] = $lngstr['label_edittests_hdr_testid'];
	$lngstr['page_testmanager_stats']['hdr_testid_hint'] = $lngstr['label_edittests_hdr_testid_hint'];
	$lngstr['page_testmanager_stats']['hdr_test_data'] = 'Test data';
	$lngstr['page_testmanager_stats']['hdr_test_data_hint'] = 'Test data';
	$lngstr['page_testmanager_stats']['hdr_points'] = 'Points';
	$lngstr['page_testmanager_stats']['hdr_points_hint'] = 'Points';
	$lngstr['page_testmanager_stats']['hdr_percents'] = $lngstr['label_questionstats_hdr_answerpercent'];
	$lngstr['page_testmanager_stats']['hdr_percents_hint'] = $lngstr['label_questionstats_hdr_answerpercent_hint'];
	$lngstr['page_testmanager_stats']['test_high_score'] = 'Test high score:';
	$lngstr['page_testmanager_stats']['test_average_score'] = 'Test average:';
	$lngstr['page_testmanager_stats']['test_low_score'] = 'Test low score:';
	$lngstr['page_testmanager_stats']['test_std_deviation'] = 'Standard deviation:';
	$lngstr['page_testmanager_stats']['test_variance'] = 'Variance:';
	$lngstr['page_testmanager_stats']['hdr_grade_data'] = 'Grade data';
	$lngstr['page_testmanager_stats']['hdr_grade_data_hint'] = 'Grade data';
	$lngstr['page_testmanager_stats']['hdr_grade_responses'] = 'Responses';
	$lngstr['page_testmanager_stats']['hdr_grade_responses_hint'] = 'Responses';
	$lngstr['page_testmanager_stats']['total_responses'] = 'Total responses:';
	$lngstr['page_testmanager_stats']['this_participant'] = 'Statistics: this participant';
	$lngstr['page_testmanager_stats']['hdr_subject_name'] = 'Pool name';
	$lngstr['page_testmanager_stats']['hdr_subject_name_hint'] = 'Pool name';
	$lngstr['page_testmanager_stats']['hdr_subject_questions'] = 'Size';
	$lngstr['page_testmanager_stats']['hdr_subject_questions_hint'] = 'Pool size';
	$lngstr['page_testmanager_stats']['hdr_subject_questions_got'] = 'Received';
	$lngstr['page_testmanager_stats']['hdr_subject_questions_got_hint'] = 'Questions received from this pool';
	$lngstr['page_testmanager_stats']['hdr_subject_correct'] = 'Correct';
	$lngstr['page_testmanager_stats']['hdr_subject_correct_hint'] = 'Correct answers';
	$lngstr['page_testmanager_stats']['view_results_stats'] = 'View statistics';

$lngstr['label_subjects_edit'] = 'Gestionnaire des Sujets';
// Subjects page:
$lngstr['label_action_create_subject'] = 'Créer un nouveau Sujet';
	$lngstr['page_subjects']['parent_subjectid'] = 'Parent subject:';
$lngstr['page_subjects_subjectid'] = 'ID du Sujet:';
$lngstr['page_subjects_subjectname'] = 'Nom du Sujet:';
$lngstr['page_subjects_subjectdescription'] = 'Description du Subject:';

// Grades page:
$lngstr['label_action_create_grade'] = 'Créer un nouveau Système de Graduation';
$lngstr['label_action_create_gradescale'] = 'Créer une nouvelle Graduation';
$lngstr['page_grades_gscaleid'] = 'ID du Système de Graduation:';
$lngstr['page_grades_gradename'] = 'Nom du Système de Graduation:';
$lngstr['page_grades_gradedescription'] = 'Description du Système de Graduation:';
$lngstr['page_grades_gradescale'] = 'Échelle de Graduation:';
$lngstr['page_grades_gradescale_text'] = 'Éditer l\'Échelle de Graduation';
	$lngstr['page_grades']['edit_grade'] = 'edit this grade';
$lngstr['label_action_grade_moveup'] = 'Déplacer vers le haut';
$lngstr['label_action_grade_movedown'] = 'Déplacer vers le bas';
$lngstr['page_grade_gscaleid'] = 'ID du Grade:';
$lngstr['page_grade_gradename'] = 'Nom du Grade:';
$lngstr['page_grade_gradedescription'] = 'Description du GradÉchelle de graduatione:';
	$lngstr['page_grade']['feedback'] = 'Grade feedback:'; // [NEW]
	$lngstr['page_grade']['section_advanced'] = 'Advanced (click to show/hide)'; // [NEW]
$lngstr['page_grade_gradefrom'] = 'Minimum (%):';
$lngstr['page_grade_gradeto'] = 'Maximum (%):';

// Question statistics page:
$lngstr['page_questionstats_correct_count'] = 'Réponses Correctes:';
$lngstr['page_questionstats_partially_count'] = 'Réponses Partiellement correctes:';
$lngstr['page_questionstats_incorrect_count'] = 'Réponses Incorrectes:';
$lngstr['page_questionstats_undefined_count'] = 'Réponses non-définies:';
$lngstr['page_questionstats_fillintheblank_others'] = 'Autress (%d)';
$lngstr['page_editquestion_subjectid'] = 'Sujet de la Question:';
$lngstr['page_editquestion_type'] = 'Type de Question:';
$lngstr['page_editquestion_question_text'] = 'Question:';
$lngstr['page_editquestion_question_name'] = 'Nom de la Question:';
$lngstr['page_editquestion_answer_count'] = 'Nombre de Réponses:';
$lngstr['page_editquestion_answers'] = 'Réponses:';
$lngstr['page_editquestion_time'] = 'Temps:';
$lngstr['page_editquestion_points'] = 'Valeur du Pointage:';
	$lngstr['page_editquestion']['shuffle_answers'] = 'Shuffle answers:';
	$lngstr['page_editquestion']['shuffle_answers_items'] = array(0 => 'Default (inherit)', 1 => 'Do not shuffle', 2 => 'Shuffle', 3 => 'Shuffle (except the first one)', 4 => 'Shuffle (except the last one)');
	$lngstr['page_editquestion']['advanced_settings'] = 'Advanced options:';
	$lngstr['page_editquestion']['allow_partial_answers'] = 'Allow partially correct answers';
$lngstr['page_editquestion_emptyquestion'] = '<p><strong>S.V.P. Entrez votre question ici...</strong></p>';
// $lngstr['page_editquestion']['used_question'] = 'Note (grayed item): this question is already used in the test';

$lngstr['label_action_visitors_view'] = 'Afficher les détails de cet enregistrement';
$lngstr['page_visitordetails_visitorid'] = 'ID Visiteur:';
$lngstr['page_visitordetails_startdate'] = 'Date du début:';
$lngstr['page_visitordetails_enddate'] = 'Date de fin:';
$lngstr['page_visitordetails_timespent'] = 'Temps passé:';
$lngstr['page_visitordetails_username'] = $lngstr['label_username'];
$lngstr['page_visitordetails_ipaddress'] = 'Adresse IP:';
$lngstr['page_visitordetails_host'] = 'Hôte:';
$lngstr['page_visitordetails_referer'] = 'Référent:';
$lngstr['page_visitordetails_inurl'] = 'Page d\'Entrée:';
$lngstr['page_visitordetails_outurl'] = 'Page de Sortie:';
$lngstr['page_visitordetails_hits'] = 'Hits:';
$lngstr['page_visitordetails_useragent'] = 'Agent Usager:';

$lngstr['page_config']['section_site'] = 'Site Web (cliquer pour montrer/cacher)';
$lngstr['page_config']['text_editor'] = 'Éditeur WYSIWYG:';
$lngstr['page_config']['text_editorlist'] = array(CONFIG_CONST_iseditor2 => 'Éditeur par défaut', CONFIG_CONST_iseditor => 'Éditeur par défaut (ancien)', CONFIG_CONST_htmlareaeditor => 'Éditeur HTMLArea');
$lngstr['page_config']['list_length'] = 'Longueur de Liste:';
$lngstr['page_config']['store_logs'] = 'Statistiques Web:';
$lngstr['page_config']['section_registration'] = 'Enregistement (cliquer pour montrer/cacher)';
$lngstr['page_config']['can_register'] = 'Permettre l\'Enregistrement par l\'Usager:';
$lngstr['page_config']['upon_registration'] = 'Lorsque l\'Enregistrement est complété:';
$lngstr['page_config']['upon_registration_select'] = array(0 => 'Ne rien faire', 1 => 'Entrer l\'Usager Automatiquement');
$lngstr['page_config']['reg_intro'] = 'Introduction:';
$lngstr['page_config']['donotshow'] = 'Ne pas afficher';
$lngstr['page_config']['donotshow_autogenerate'] = 'Ne pas afficher, génération automatique';
$lngstr['page_config']['show_donotrequire'] = 'Afficher, non-requis';
$lngstr['page_config']['show_autogenerate'] = 'Afficher, génération automatique';
$lngstr['page_config']['show_require'] = 'Afficher, requis';

$lngstr['page_users']['username'] = $lngstr['label_username'];
$lngstr['page_users']['password'] = $lngstr['label_password'];
$lngstr['page_users']['email'] = $lngstr['label_email'];
$lngstr['page_users']['title'] = $lngstr['label_title'];
$lngstr['page_users']['firstname'] = $lngstr['label_firstname'];
$lngstr['page_users']['lastname'] = $lngstr['label_lastname'];
$lngstr['page_users']['middlename'] = $lngstr['label_middlename'];

	$lngstr['page_users']['member_of'] = 'Member of:';

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

	$lngstr['page_users']['section_groups'] = 'Groups (click to show/hide)';
$lngstr['page_users']['section_personal'] = 'Information Personnelle (cliquer pour afficher/cacher)';
$lngstr['page_users']['section_work'] = 'Information de la Compagnie (cliquer pour afficher/cacher)';
$lngstr['page_users']['section_additional'] = 'Information Additionnelle (cliquer pour afficher/cacher)';

$lngstr['page_users']['userenabled'] = 'Cet Usager est actif';
$lngstr['page_users']['joindate'] = 'Date d\'Enregistrement:';
$lngstr['page_users']['logindate'] = 'Date de la dernière entrée:';
$lngstr['page_users']['expiredate'] = 'Date d\'expiration:';
$lngstr['page_users']['password_confirm'] = $lngstr['label_confirmpassword'];
$lngstr['page_users']['password_new'] = $lngstr['label_newpassword'];
$lngstr['page_users']['section_notes'] = 'Notes (cliquer pour afficher/cacher)';
$lngstr['page_users']['notes'] = 'Notes de l\'Usager (pour usage interne):';

$lngstr['page_reportsmanager']['answerfeedback'] = 'Commentaires:';
	$lngstr['page_reportsmanager']['view_pdf'] = 'View printable PDF'; // [NEW]
	$lngstr['page_reportsmanager']['view_html'] = 'View HTML report';
	$lngstr['page_reportsmanager']['view_none'] = 'No report is available';

$lngstr['page_managegroups_groupid'] = 'ID Group:';
$lngstr['page_managegroups_groupname'] = 'Nom du Group:';
$lngstr['page_managegroups_groupdescription'] = 'Description du Group:';
$lngstr['page_groups_access_rights'] = 'Droits d\'Accès:';
$lngstr['page_groups_access_tests'] = 'Tests:';
$lngstr['page_groups_access_tests_select'] = array(0 => "Accès refusé", 1 => "Afficher la liste des Tests", 2 => "Effectuer un Test");
$lngstr['page_groups_access_testmanager'] = 'Test manager:';
$lngstr['page_groups_access_testmanager_select'] = array(0 => "Accès refusé", 1 => "Lecture", 2 => "Écriture");
$lngstr['page_groups_access_gradingsystems'] = 'Système de Graduations:';
$lngstr['page_groups_access_gradingsystems_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_emailtemplates'] = 'Email templates:';
$lngstr['page_groups_access_emailtemplates_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_reporttemplates'] = 'Report templates:';
$lngstr['page_groups_access_reporttemplates_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_reportsmanager'] = 'Reports manager:';
$lngstr['page_groups_access_reportsmanager_select'] = array(0 => "Accès refusé", 1 => "Lecture (Résultats de l'Usager)", 2 => "Lecture (Tous les Résultats)", 3 => "Écriture");
$lngstr['page_groups_access_questionbank'] = 'Banque de Questions:';
$lngstr['page_groups_access_questionbank_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_subjects'] = 'Sujets:';
$lngstr['page_groups_access_subjects_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_groups'] = 'Groupes:';
$lngstr['page_groups_access_groups_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_users'] = 'Usagers:';
$lngstr['page_groups_access_users_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_visitors'] = 'Statistiques Web:';
$lngstr['page_groups_access_visitors_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_config'] = 'Configuration:';
$lngstr['page_groups_access_config_select'] = $lngstr['page_groups_access_testmanager_select'];

$lngstr['page_etemplates_etemplateid'] = 'ID Canevas:';
$lngstr['page_etemplates_etemplatename'] = 'Nom du Canevas:';
$lngstr['page_etemplates_etemplatedescription'] = 'Description du Canevas:';
$lngstr['page_etemplates_etemplatefrom'] = 'De (courriel):';
$lngstr['page_etemplates_etemplatesubject'] = 'Sujet du courriel:';
$lngstr['page_etemplates_etemplatebody'] = 'Corps du courriel:';
$lngstr['page_etemplates_template_tags'] = 'Tags pour le Canevas';

$lngstr['page-rtemplates']['rtemplateid'] = 'ID Canevas:';
$lngstr['page-rtemplates']['rtemplatename'] = 'Nom du Canevas:';
$lngstr['page-rtemplates']['rtemplatedescription'] = 'Description du Canevas:';
$lngstr['page-rtemplates']['rtemplatebody'] = 'Coprs du Rapport:';

	$lngstr['page_resourcemanager']['hdr_resourceid'] = 'ID';
	$lngstr['page_resourcemanager']['hdr_resourceid_hint'] = 'Resource ID (click to sort by)';
	$lngstr['page_resourcemanager']['hdr_resource_name'] = 'Resource Name';
	$lngstr['page_resourcemanager']['hdr_resource_name_hint'] = 'Resource name (click to sort by)';
	$lngstr['page_resourcemanager']['hdr_resource_description'] = 'Description';
	$lngstr['page_resourcemanager']['hdr_resource_description_hint'] = 'Resource description (click to sort by)';
	$lngstr['page_resourcemanager']['action_create_resource'] = 'Create a new resource';
	$lngstr['page_resourcemanager']['action_edit_resource'] = 'Resource settings';
	$lngstr['page_resourcemanager']['qst_delete_resource'] = 'Are you sure want to delete this resource?';
	$lngstr['page_resourcemanager']['qst_delete_resources'] = 'Are you sure want to delete selected resources?';
	$lngstr['page_resourcemanager']['action_delete_resource'] = 'Delete this resource';
	$lngstr['page_resourcemanager']['action_delete_resources'] = 'Delete resources (for selected records)';
	$lngstr['page_resourcemanager']['delete_resource'] = 'Delete a Resource';
	$lngstr['inf_cant_access_resourcemanager'] = 'You have not enough rights to access resources.<br>';
	$lngstr['page_resourcemanager_settings']['is_active'] = 'This resource is active';
	$lngstr['page_resourcemanager_settings']['resourceid'] = 'Resource ID:';
	$lngstr['page_resourcemanager_settings']['resource_name'] = 'Resource name:';
	$lngstr['page_resourcemanager_settings']['resource_description'] = 'Resource description:';
	$lngstr['page_resourcemanager_settings']['start_date'] = 'Start date:';
	$lngstr['page_resourcemanager_settings']['end_date'] = 'End date:';
	$lngstr['page_resourcemanager_settings']['resource_url'] = 'Resource URL:';
	$lngstr['page_resourcemanager_settings']['related_to'] = 'Related to (test name):';
	$lngstr['page_resourcemanager_settings']['assigned_to'] = $lngstr['page_edittests_assignedto'];
	$lngstr['page_resourcemanager_settings']['assign_to_everybody'] = $lngstr['page_edittests_assignto_everybody'];

	$lngstr['page_resources']['hdr_resource'] = 'Resource';
	$lngstr['page_resources']['hdr_resource_hint'] = 'Resource name and description';
	$lngstr['page_resources']['hdr_get_resource'] = 'Get Resource';
	$lngstr['page_resources']['hdr_get_resource_hint'] = 'Get resource';
	$lngstr['page_resources']['get_resource_link'] = 'Resource';

	$lngstr['page_couponmanager']['hdr_couponid'] = 'ID';
	$lngstr['page_couponmanager']['hdr_couponid_hint'] = 'Coupon ID (click to sort by)';
	$lngstr['page_couponmanager']['hdr_coupon_name'] = 'Coupon Name';
	$lngstr['page_couponmanager']['hdr_coupon_name_hint'] = 'Coupon name (click to sort by)';
	$lngstr['page_couponmanager']['hdr_coupon_description'] = 'Description';
	$lngstr['page_couponmanager']['hdr_coupon_description_hint'] = 'Coupon description (click to sort by)';
	$lngstr['page_couponmanager']['hdr_coupon_code'] = 'Code';
	$lngstr['page_couponmanager']['hdr_coupon_code_hint'] = 'Coupon code (click to sort by)';
	$lngstr['page_couponmanager']['hdr_coupon_enabled'] = 'Active';
	$lngstr['page_couponmanager']['hdr_coupon_enabled_hint'] = 'Active (click to sort by)';
	$lngstr['page_couponmanager']['action_create_coupon'] = 'Create a new coupon';
	$lngstr['page_couponmanager']['action_edit_coupon'] = 'Coupon settings';
	$lngstr['page_couponmanager']['qst_delete_coupon'] = 'Are you sure want to delete this coupon?';
	$lngstr['page_couponmanager']['qst_delete_coupons'] = 'Are you sure want to delete selected coupons?';
	$lngstr['page_couponmanager']['action_delete_coupon'] = 'Delete this coupon';
	$lngstr['page_couponmanager']['action_delete_coupons'] = 'Delete coupons (for selected records)';
	$lngstr['page_couponmanager']['delete_coupon'] = 'Delete a Coupon';
	$lngstr['inf_cant_access_couponmanager'] = 'You have not enough rights to access coupons.<br>';
	$lngstr['page_couponmanager_settings']['is_active'] = 'This coupon is active';
	$lngstr['page_couponmanager_settings']['couponid'] = 'Coupon ID:';
	$lngstr['page_couponmanager_settings']['coupon_name'] = 'Coupon name:';
	$lngstr['page_couponmanager_settings']['coupon_description'] = 'Coupon description:';
	$lngstr['page_couponmanager_settings']['coupon_code'] = 'Coupon code:';
	$lngstr['page_couponmanager_settings']['coupon_value'] = 'Coupon value ('.$lngstr['language']['currency_name'].'):';

	$lngstr['page_buycheckout']['hdr_test'] = $lngstr['page_panel_hdr_test'];
	$lngstr['page_buycheckout']['hdr_test_hint'] = $lngstr['page_panel_hdr_test_hint'];
	$lngstr['page_buycheckout']['hdr_test_price'] = 'Price';
	$lngstr['page_buycheckout']['hdr_test_price_hint'] = 'Test price';
	$lngstr['page_buycheckout']['hdr_test_buy'] = 'Buy';
	$lngstr['page_buycheckout']['hdr_test_buy_hint'] = 'Buy a test';
	$lngstr['page_buycheckout']['err_no_coupon'] = 'Please verify your coupone code.<br>';

	$lngstr['page_buystate']['success'] = 'Thank you for your order.<br>';
	$lngstr['page_buystate']['fail'] = 'There is a problem processing your order.<br>';

$lngstr['email_answer_iscorrect'] = 'Correct: ';
$lngstr['email_answer_points'] = 'Résultat: ';

$lngstr['err_subject_doesnotexist'] = 'Ce sujet n\'existe pas.<br>';

$lngstr['err_no_questions'] = 'Aucune Question trouvé dans le Test.<br>';
$lngstr['err_no_questions_left_in_bank'] = 'Le nombre de questions aléatoires requises est suppérieur à ce que contient le sujet.<br>';
$lngstr['err_no_tests'] = 'Aucun test n\'est disponible pour le moment.<br>';
	$lngstr['err_no_resources'] = 'There are currently no resources available.<br>';
$lngstr['inf_cant_passtest'] = 'Vous n\'avez pas les droits pour effectuer ce test.<br>';
$lngstr['inf_cant_view_results'] = 'Vous n\'avez pas les droits pour visionner les résultats des tests.<br>';
	$lngstr['inf_cant_view_reportsmanager_reportsratings'] = 'You have not enough rights to view the ratings page.<br>';
$lngstr['inf_cant_view_this_test_details'] = 'Vous n\'avez pas les droits pour visionner les résultats de ce test.<br>';
$lngstr['inf_cant_edit_tests'] = 'Vous n\'avez pas les droits pour éditer les tests.<br>';
$lngstr['inf_cant_edit_questions'] = 'Vous n\'avez pas les droits pour éditer les questions.<br>';
$lngstr['inf_cant_access_groups'] = 'Vous n\'avez pas les droits pour accéder aux groupes.<br>';
$lngstr['inf_cant_access_users'] = 'Vous n\'avez pas les droits pour accéder aux usagers.<br>';
$lngstr['inf_cant_access_subjects'] = 'Vous n\'avez pas les droits pour accéder aux sujets.<br>';
$lngstr['inf_cant_access_emailtemplates'] = 'Vous n\'avez pas les droits pour accéder aux canevas de courriel.<br>';
$lngstr['inf_cant_access_reporttemplates'] = 'Vous n\'avez pas les droits pour accéder aux canevas de rapport.<br>';
$lngstr['inf_cant_access_grades'] = 'Vous n\'avez pas les droits pour accéder aux Systèmes de Graduation.<br>';
$lngstr['inf_cant_access_visitors'] = 'Vous n\'avez pas les droits pour accéder aux statistiques Web.<br>';
$lngstr['inf_cant_access_config'] = 'Vous n\'avez pas les droits pour accéder à la configuration du système.<br>';
$lngstr['err_no_test_selected'] = 'S.V.P. Sélectionner un test.<br>';
$lngstr['err_no_question_n_in_db'] = 'Question %d ne peut être trouvée.<br>';
$lngstr['err_no_question_id_in_db'] = 'ID Question %d ne peut être trouvé.<br>';
$lngstr['err_no_answers_in_question'] = '<b><a href="question-bank.php?action=editq&questionid=%1$d">ID Question %1$d</a></b> n\'a pas de réponse. S.V.P. résoudre le problème.<br>';
$lngstr['err_no_answer_given'] = 'Aucune réponse spécifiée.<br>';
$lngstr['err_answer_every_question'] = 'S.V.P. répondre à toutes les questions.<br>';

$lngstr['err_no_permissions_to_register'] = 'Vous n\'avez pas les permissions pour enregistrer un nouvel usager';

$lngstr['qst_delete_test'] = 'Êtes-vous sûr de vouloir effacer ce test?';
$lngstr['qst_delete_tests'] = 'Êtes-vous sûr de vouloir effacer les tests sélectionnés?';
$lngstr['qst_delete_question'] = 'Êtes-vous sûr de vouloir effacer cette question?';
$lngstr['qst_delete_questions'] = 'Êtes-vous sûr de vouloir effacer les questions sélectionnées?';
$lngstr['qst_delete_question_link'] = 'Êtez-vous sûr de vouloir retirer cette question du test?';
$lngstr['qst_delete_question_links'] = 'Êtez-vous sûr de vouloir retirer les questions sélectionnées du test?';
$lngstr['qst_delete_record'] = 'Êtes-vous sûr de vouloir effacer cet enregistrement?';
$lngstr['qst_delete_records'] = 'Êtes-vous sûr de vouloir effacer les enregistrement sélectionnés?';
$lngstr['qst_delete_user'] = 'Êtes-vous sûr de vouloir effacer cet usager?';
$lngstr['qst_delete_users'] = 'Êtes-vous sûr de vouloir effacer les usagers sélectionnés?';
$lngstr['qst_delete_group'] = 'Êtes-vous sûr de vouloir effacer ce groupe?';
$lngstr['qst_delete_groups'] = 'Êtes-vous sûr de vouloir effacer les groupes sélectionnés?';
$lngstr['qst_delete_subject'] = 'Êtes-vous sûr de vouloir effacer ce sujet?';
$lngstr['qst_delete_subjects'] = 'Êtes-vous sûr de vouloir effacer selected sujets?';
$lngstr['qst_delete_etemplate'] = 'Êtes-vous sûr de vouloir effacer ce canevas de courriel?';
$lngstr['qst_delete_etemplates'] = 'Êtes-vous sûr de vouloir effacer les canevas de courriel sélectionnés?';
$lngstr['qst_delete_grade'] = 'Êtes-vous sûr de vouloir effacer ce Système de Graduation?';
$lngstr['qst_delete_grades'] = 'Êtes-vous sûr de vouloir effacer les Systèmes de Graduations sélectionnés?';
$lngstr['qst_delete_gradescale'] = 'Êtes-vous sûr de vouloir effacer ce grade?';
$lngstr['qst_delete_gradescales'] = 'Êtes-vous sûr de vouloir effacer les grades sélectionnés?';
$lngstr['qst_delete_visitor'] = $lngstr['qst_delete_record'];
$lngstr['qst_delete_visitors'] = $lngstr['qst_delete_records'];
$lngstr['page-sections']['qst_section_delete'] = 'Êtes-vous sûr de vouloir effacer cette section?';
$lngstr['page-sections']['qst_sections_delete'] = 'Êtes-vous sûr de vouloir effacer les sections sélectionnées?';
$lngstr['page-rtemplates']['qst_rtemplate_delete'] = 'Êtes-vous sûr de vouloir effacer ce canevas de rapport?';
$lngstr['page-rtemplates']['qst_rtemplates_delete'] = 'Êtes-vous sûr de vouloir effacer les canevas de rapport sélectionnés?';

// Install:
$lngstr['install_title'] = 'Installation - iGiveTest';
$lngstr['install_page1'] = 'Étape 1 - Sélection de la Langue';
$lngstr['install_page1_description'] = '<p><b>Langue:</b> S.V.P. Choisir une langue.';
$lngstr['install_language'] = 'Langage:';
$lngstr['install_page2'] = 'Étape 2 - Paramètres Généraux';
$lngstr['install_page2_description'] = '<p><b>Titre du site Web:</b> S.V.P. Spécifiez le titre du site Web.
<p><b>Email par défaut:</b> S.V.P. Spécifiez l\'adresse de courriel par défaut "De".
<p><b>iGiveTest, URL:</b> S.V.P. Spécifiez l\'adresse Web où iGiveTest va être accessible.
<p><b>iGiveTest, répertoire:</b> S.V.P. Spécifiez le chemin d\'accès complet pointant sur le répertoire d\'installation.
<p><b>iGiveTest, URL des fichiers:</b> S.V.P. Spécifiez l\'adresse Web où les fichiers téléchargés seront accessibles.
<p><b>iGiveTest, répertoire des fichiers:</b> S.V.P. Spécifiez le chemin d\'accès complet pointant sur le répertoire où iGiveTest peut sauvegarder les fichiers à télécharger. Ce répertoire devra posséder les attributs de lecture et écriture pour l\'usager du serveur Web (normalement "nobody" ou "apache").';
$lngstr['install_titlepostfix'] = 'Titre du site Web:';
$lngstr['install_defaultemail'] = 'Adresse de courriel par défaut:';
$lngstr['install_urlroot'] = 'iGiveTest, URL:';
$lngstr['install_dirrootfull'] = 'iGiveTest, répertoire:';
$lngstr['install_dirrootfull_doesnotexists'] = 'Le répertoire "iGiveTest" semble incorrect. La valeur ci-dessous a été ré-initialisée.<br>';
$lngstr['install_urlfiles'] = 'iGiveTest, URL des fichiers:';
$lngstr['install_dirfilesfull'] = 'iGiveTest, répertoire des fichiers:';
$lngstr['install_page3'] = 'Étape 3 - Paramètres de la base de données';
$lngstr['install_page3_description'] = '<p>S.V.P. Configurez la base de donnée où les données iGiveTest vont être sauvegardées. Cette base de données doit avoir été préalablement créée et posséder un nom d\'usager ainsi qu\'un mot de passe lui donnant accès.';
$lngstr['install_dbdriver'] = 'Type de base de données:';
$lngstr['install_dbhost'] = 'Hôte de la base de données:';
$lngstr['install_dbdb'] = 'Nom de la base de données:';
$lngstr['install_dbtableprefix'] = 'Préfixe des Tables:';
$lngstr['install_dbuser'] = 'Nom d\'usager de la base de données:';
$lngstr['install_dbpassword'] = 'Mot de passe de la base de données:';
$lngstr['install_dbdriver_cannotconnect'] = 'Ne peut se connecter à la base de données spécifiée. S.V.P. Vérifiez les paramètres de configuration de la base de données.<br>';
$lngstr['install_cannotwritetoconfig'] = 'Ne peut pas écrire dans le fichier inc/confic.inc.php';
$lngstr['install_downloadconfig'] = '<p>S.V.P. sauvegarder <b><a href="install.php?download=1" target=_blank>ce fichier</a></b>, nommez-le config.inc.php et placez-le dans le répertoire inc/.';
$lngstr['install_canwritetoconfig'] = '<p>Le fichier config.inc.php a été sauvegardé avec succès.';
$lngstr['install_page4'] = 'Installation Complétée';
$lngstr['install_page4_description'] = '<p>S.V.P. pressez le bouton "Suivant" pour configurer les tables de la base de données iGiveTest.';
$lngstr['install_db_title'] = 'Initialisation de la base de données - iGiveTest';
$lngstr['install_db_page1'] = 'Initialisation de la base de données - iGiveTest';
$lngstr['install_db_createtablex'] = 'Création de la table "%s":';
$lngstr['install_db']['no_init_needed'] = 'Numéro d\'initialisation requis.';

$lngstr['install_adminfirstname'] = 'Admin';
$lngstr['install_adminlastname'] = 'User';
$lngstr['install_guestfirstname'] = 'Invité';
$lngstr['install_guestlastname'] = 'User';

$lngstr['install_phpversion'] = 'Version PHP:';
$lngstr['label_okay'] = 'OK';
$lngstr['label_warning'] = 'Avertissement';

$m_db_drivers = array(
	DB_DRIVER_MYSQL => 'MySQL',
	DB_DRIVER_POSTGRESQL => 'PostgreSQL',
	DB_DRIVER_MSSQL_ODBC => 'Microsoft SQL Server (ODBC)',
	DB_DRIVER_MSSQL => 'Microsoft SQL Server (PHP)',
	DB_DRIVER_ORACLE => 'Oracle',
	);

$lngstr['initdb_etemplates_1_name'] = 'Canevas de résultats d\'un Test';
$lngstr['initdb_etemplates_1_description'] = 'Canevas de courriel de résultats d\'un Test';
$lngstr['initdb_etemplates_1_subject'] = 'iGiveTest - Exemple de Rapport';
$lngstr['initdb_etemplates_1_body'] = 'Cher [USER_FIRST_NAME],

Voici les résultats de votre test:

Nom du test: [TEST_NAME]
Date: [RESULT_DATE]
Temps passé: [RESULT_TIME_SPENT]
Temps excédé: [RESULT_TIME_EXCEEDED]

[RESULT_DETAILED_1]

Total: [RESULT_POINTS_SCORED] / [RESULT_POINTS_POSSIBLE] ([RESULT_PERCENTS]%)
Grade: [RESULT_GRADE]

Sincères salutations,
L\'équipe iGiveTest';

	$lngstr['initdb_etemplates_2_name'] = 'Account Sign Up (No Email Activation)'; // [NEW]
	$lngstr['initdb_etemplates_2_description'] = 'Account sign up email template'; // [NEW]
	$lngstr['initdb_etemplates_2_subject'] = 'Registration Details'; // [NEW]
	$lngstr['initdb_etemplates_2_body'] = 'Dear [USER_FIRST_NAME],

Thank you for registering with iGiveTest.

Username: [USERNAME]
Password: [USER_PASSWORD]

You can sign in to your account any time by visiting:

[IGIVETEST_URL]

Regards,
iGiveTest Team'; // [NEW]

	$lngstr['initdb_etemplates_3_name'] = 'Account Sign Up (Email Activation)'; // [NEW]
	$lngstr['initdb_etemplates_3_description'] = 'Account sign up email template'; // [NEW]
	$lngstr['initdb_etemplates_3_subject'] = 'Account Activation'; // [NEW]
	$lngstr['initdb_etemplates_3_body'] = 'Dear [USER_FIRST_NAME],

Thank you for registering with iGiveTest.

Username: [USERNAME]
Password: [USER_PASSWORD]

Just one more step to go:

To complete your account activation, please click on the following link:

[IGIVETEST_URL]/account.php?action=activate&userid=[USER_ID]&checkword=[USER_CHECKWORD]

Regards,
iGiveTest Team'; // [NEW]

	$lngstr['initdb_etemplates_4_name'] = 'Account Activated'; // [NEW]
	$lngstr['initdb_etemplates_4_description'] = 'Account activated email template'; // [NEW]
	$lngstr['initdb_etemplates_4_subject'] = 'Account Activated'; // [NEW]
	$lngstr['initdb_etemplates_4_body'] = 'Dear [USER_FIRST_NAME],

Your account has been successfully activated.

You can sign in to your account any time by visiting:

[IGIVETEST_URL]

Regards,
iGiveTest Team'; // [NEW]

	$lngstr['initdb_etemplates_5_name'] = 'Account Sign Up (For Administrator)';
	$lngstr['initdb_etemplates_5_description'] = 'Account sign up email template';
	$lngstr['initdb_etemplates_5_subject'] = 'New User Registration Details';
	$lngstr['initdb_etemplates_5_body'] = 'Dear Administrator,

New user registration details:

First name: [USER_FIRST_NAME]
Last name: [USER_LAST_NAME]
Email: [USER_EMAIL]
Username: [USERNAME]
Password: [USER_PASSWORD]

Regards,
iGiveTest Team';

$lngstr['initdb_etemplates_50_name'] = 'Canevas de courriel pour l\'oubli du mot de passe';
$lngstr['initdb_etemplates_50_description'] = 'Canevas de courriel pour l\'oubli du mot de passe';
$lngstr['initdb_etemplates_50_subject'] = 'iGiveTest - Oubli du mot de passe';
$lngstr['initdb_etemplates_50_body'] = 'Cher [USER_FIRST_NAME],

Nous avons ré-initialisé votre mot de passe.

Nom d\'usager: [USERNAME]
Nouveau mot de passe: [USER_PASSWORD]

Sincères salutations,
L\'équipe iGiveTest';

$lngstr['initdb_gscales_1_id'] = 1;
$lngstr['initdb_gscales_2_id'] = 2;
$lngstr['initdb_gscales_3_id'] = 3;
$lngstr['initdb_gscales_4_id'] = 4;
$lngstr['initdb_gscales_5_id'] = 5;
$lngstr['initdb_gscales_6_id'] = 6;
$lngstr['initdb_gscales_1_name'] = 'Échelle de graduation A-F (note de passage 60%)';
$lngstr['initdb_gscales_2_name'] = 'Échelle de graduation de type passé/échoué';
$lngstr['initdb_gscales_3_name'] = 'Échelle de graduation ECTS';
$lngstr['initdb_gscales_4_name'] = 'Échelle de graduation GPA Grading Scale';
$lngstr['initdb_gscales_5_name'] = 'Échelle de graduation 6-Points (Allemagne)';
$lngstr['initdb_gscales_6_name'] = 'Échelle de graduation 5-Points (Europe Central et de l\'Est)';
$lngstr['initdb_gscales_1_description'] = 'Échelle de graduation A-F';
$lngstr['initdb_gscales_2_description'] = 'Échelle de graduation de type passé/échoué';
$lngstr['initdb_gscales_3_description'] = 'Échelle de graduation ECTS (European Credit Transfer System)';
$lngstr['initdb_gscales_4_description'] = 'Échelle de graduation GPA (Grade Point Average)';
$lngstr['initdb_gscales_5_description'] = 'Échelle de graduation 6-points en Allemagne';
$lngstr['initdb_gscales_6_description'] = 'Échelle de graduation 5-points en Europe Centrale et de l\'Est';
$lngstr['initdb_gscales_1_1_description'] = 'Excellent';
$lngstr['initdb_gscales_1_2_description'] = 'Bon';
$lngstr['initdb_gscales_1_3_description'] = 'Suffisant';
$lngstr['initdb_gscales_1_4_description'] = 'Faible';
$lngstr['initdb_gscales_1_5_description'] = 'Échoué';
$lngstr['initdb_gscales_2_1_name'] = 'Passé';
$lngstr['initdb_gscales_2_2_name'] = 'Échoué';
$lngstr['initdb_gscales_2_1_description'] = 'Passé';
$lngstr['initdb_gscales_2_2_description'] = 'Échoué';
$lngstr['initdb_gscales_3_1_description'] = 'Excellent (surpasse la norme, erreurs mineures)';
$lngstr['initdb_gscales_3_2_description'] = 'Très bon (performance au-dessus de la norme, quelques erreurs seulement)';
$lngstr['initdb_gscales_3_3_description'] = 'Bon (bonne performance, erreurs notables)';
$lngstr['initdb_gscales_3_4_description'] = 'Satisfaisant (performance moyenne, erreurs significatives)';
$lngstr['initdb_gscales_3_5_description'] = 'Suffisant (performance minimale)';
$lngstr['initdb_gscales_3_6_description'] = 'Échoué (Un peu de travail est requis afin d\'obtenir la note de passage)';
$lngstr['initdb_gscales_3_7_description'] = 'Échoué (Beaucoup d\'efforts sont requis pour obtenir la note de passage)';
$lngstr['initdb_gscales_4_1_description'] = 'Excellent';
$lngstr['initdb_gscales_4_2_description'] = 'Bon';
$lngstr['initdb_gscales_4_3_description'] = 'Suffisant';
$lngstr['initdb_gscales_4_4_description'] = 'Faible';
$lngstr['initdb_gscales_4_5_description'] = 'Échoué';
$lngstr['initdb_gscales_5_1_description'] = 'Excellent';
$lngstr['initdb_gscales_5_2_description'] = 'Bon';
$lngstr['initdb_gscales_5_3_description'] = 'Satisfaisant';
$lngstr['initdb_gscales_5_4_description'] = 'Suffisant';
$lngstr['initdb_gscales_5_5_description'] = 'Non-Satisfaisant';
$lngstr['initdb_gscales_5_6_description'] = 'Faible';
$lngstr['initdb_gscales_6_1_description'] = 'Excellent';
$lngstr['initdb_gscales_6_2_description'] = 'Bon';
$lngstr['initdb_gscales_6_3_description'] = 'Satisfaisant';
$lngstr['initdb_gscales_6_4_description'] = 'Non-Satisfaisant';
$lngstr['initdb_gscales_6_5_description'] = 'Faible';
$lngstr['initdb_groups_1_name'] = 'Administrateurs';
$lngstr['initdb_groups_2_name'] = 'Instructeurs';
$lngstr['initdb_groups_3_name'] = 'Opérateurs';
$lngstr['initdb_groups_19_name'] = 'Usagers';
$lngstr['initdb_groups_20_name'] = 'Invités';
$lngstr['initdb_groups_1_description'] = 'Les Administrateurs ont un accès complet sans restrictions (groupe système)';
$lngstr['initdb_groups_2_description'] = 'Les Instructeurs possèdent la plupart des droits administratifs avec quelques restrictions (groupe système)';
$lngstr['initdb_groups_3_description'] = 'Les Membres de ce groupe ont les droits pour créer et éditer des questions (groupe système)';
$lngstr['initdb_groups_19_description'] = 'Les Usagers ne peuvent faire des changements accidentels on intentionnels (groupe système)';
$lngstr['initdb_groups_20_description'] = 'Les Invités ont les mêmes droits d\'accès que les membres du groupe Usagers (groupe système)';
$lngstr['initdb_rtemplates_1_name'] = 'Canevas de Rapport #1';
$lngstr['initdb_rtemplates_1_description'] = 'Canevas de Rapport #1';
$lngstr['initdb_rtemplates_1_body'] = '<h1>[TEST_NAME]</h1>
<p><strong>Date:</strong> [RESULT_DATE]</p>
<p><strong>Prénom:</strong> [USER_FIRST_NAME]<br>
<strong>Nom de Famille:</strong> [USER_LAST_NAME]<br>
<strong>Temps passé:</strong> [RESULT_TIME_SPENT]<br>
<strong>Résultat:</strong> [RESULT_POINTS_SCORED] / [RESULT_POINTS_POSSIBLE] ([RESULT_PERCENTS]%)<br>
<strong>Grade:</strong> [RESULT_GRADE]</p>
<p><strong>Détails:</strong><br>[RESULT_DETAILED_1]</p>';
$lngstr['initdb_subjects_1_name'] = '[Sans objet]';
$lngstr['initdb_subjects_1_description'] = 'Sans objet';
$lngstr['initdb_users_1_firstname'] = 'Admin';
$lngstr['initdb_users_2_firstname'] = 'Invité';
$lngstr['initdb_users_1_lastname'] = 'Usager';
$lngstr['initdb_users_2_lastname'] = 'Usager';
$lngstr['initdb_instructions'] = 'S.V.P. Utilisez le nom d\'usager "<strong>admin</strong>" et le mot de passe "<strong>admin</strong>" pour entrer.<br><strong>S.V.P. rappelez-vous:</strong> il est fortement recommandé de changer votre mot de passe.';
$lngstr['initdb_gotohomepage'] = 'Aller à la page principale';

// Tooltips:
	$lngstr['tooltip_button'] = 'Show/hide hints bar';
	$lngstr['help_button'] = 'Help';
$lngstr['tooltip_showbar'] = 'Afficher la barre d\'indices';
$lngstr['tooltip_closebar'] = 'Cacher la barre d\'indices';
$lngstr['tooltip_tests'] = '<p>Cette page est destinée à la création et l\'édition des Tests.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_test'].'"></td><td class=rowone width="100%" colspan=4>Pour créer un nouveau test, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-gear.gif" title="'.$lngstr['label_action_test_settings'].'"></td><td class=rowone width="100%" colspan=4>Pour changer les paramètres du test, presser ce bouton à la droite du test.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_test_groups_select'].'"></td><td class=rowone width="100%" colspan=4>Pour assigner le(s) test(s) à un certain groupes d\'usagers, presser le bouton à la droite du test ou sélectionner tous les tests en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_questions_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer les questions du test, presser le bouton à la droite du test.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_test_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer le(s) test(s), presser le bouton à la droite du test ou sélectionner tous les tests en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_gscales'] = '<p>Cette page est destinée à la création et l\'édition du système de graduation.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_grade'].'"></td><td class=rowone width="100%" colspan=4>Pour créer un nouveau système de graduation, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-gear.gif" title="'.$lngstr['label_action_grade_settings'].'"></td><td class=rowone width="100%" colspan=4>Pour changer les paramètres du système de graduation, presser ce bouton à la droite du système de graduation.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_gradescales_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer le système de graduation, presser le bouton à la droite du système de graduation.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_grade_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer le(s) système(s) de graduation, presser le bouton à la droite du système de graduation ou sélectionner tous les systèmes de graduation en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_gscales_grades'] = '<p>Cette page est destinée à la création et l\'édition de l\'échelle de graduation.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_gradescale'].'"></td><td class=rowone width="100%" colspan=4>Pour créer une nouvelle graduation, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_gradescale_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer la graduation, presser le bouton à la droite de la graduation.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=10 border=0 src="images/button-up.gif" title="'.$lngstr['label_action_grade_moveup'].'"><br><img width=20 height=10 border=0 src="images/button-down.gif" title="'.$lngstr['label_action_grade_movedown'].'"></td><td class=rowone width="100%" colspan=4>Pour déplacer un grade haut (bas) de la liste, presser la partie début (fin) du bouton à la droite de la graduation.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_gradescale_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer la(les) graduation(s), presser le bouton à la droite de la graduation ou sélectionner toutes les graduations en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_etemplates'] = '<p>Cette page est destinée à la création et l\'édition des canevas de courriels.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_etemplate'].'"></td><td class=rowone width="100%" colspan=4>Pour créer un nouveau canevas de courriel, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_etemplates_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer le an canevas de courriel, presser le bouton à la droite du canevas de courriel.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_etemplate_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer le canevas de courriel(s), presser le bouton à la droite du canevas de courriel ou sélectionner tous les canevas de courriels en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_rtemplates'] = '<p>Cette page est destinée à la création et l\'édition des canevas de rapports.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['page-rtemplates']['action_create_rtemplate'].'"></td><td class=rowone width="100%" colspan=4>Pour créer un nouveau canevas de rapport, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['page-rtemplates']['action_rtemplates_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer le a canevas de rapport, presser le bouton à la droite du canevas de rapport.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['page-rtemplates']['action_rtemplate_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer le canevas de rapport(s), presser le bouton à la droite du canevas de rapport ou sélectionner tous les canevas de rapports en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_tests_questions'] = '<p>Cette page est destinée à la création et l\'édition des questions du test.</p>
<p>Test questions table:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-add.gif" title="'.$lngstr['label_action_create_and_add_question'].'"></td><td class=rowone width="100%" colspan=4>Pour créer une nouvelle question et l\'ajouter au test, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-import.gif" title="'.$lngstr['label_action_import_questions'].'"></td><td class=rowone width="100%" colspan=4>Pour importer les questions dans un test, presser ce bouton sur la barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_questions_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer une question, presser le bouton à la droite de la question.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=10 border=0 src="images/button-up.gif" title="'.$lngstr['label_action_question_moveup'].'"><br><img width=20 height=10 border=0 src="images/button-down.gif" title="'.$lngstr['label_action_grade_movedown'].'"></td><td class=rowone width="100%" colspan=4>Pour déplacer un question haut (bas) de la liste, presser la partie début (fin) du bouton à la droite de la question.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_question_link_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer une(des) question(s), presser le bouton à la droite de la question ou sélectionner toutes les questions en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>
<p>Question bank table:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_question'].'"></td><td class=rowone width="100%" colspan=4>Pour créer une nouvelle question, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-plus.gif" title="'.$lngstr['label_action_questions_append'].'"></td><td class=rowone width="100%" colspan=4>Pour ajouter une question à un test, presser le bouton à la droite de la question ou sélectionner tous les questions en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_question_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer la question, presser le bouton à la droite de la question.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_question_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer la(les) question(s), presser le bouton à la droite de la question ou sélectionner toutes les questions en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_tests_sections'] = '<p>Cette page est destinée à la création et l\'édition test sections.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['page-sections']['action_section_create'].'"></td><td class=rowone width="100%" colspan=4>Pour créer une nouvelle section, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['page-sections']['action_section_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer la section, presser le bouton à la droite de la section.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['page-sections']['action_section_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer la(les) section(s), presser le bouton à la droite de la section ou sélectionner toutes les sections en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_tests_groups'] = '<p>Cette page est destinée à assigner les tests à certains groupes d\'usagers.</p>
<p>Tests table:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_test'].'"></td><td class=rowone width="100%" colspan=4>Pour créer un nouveau test, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-gear.gif" title="'.$lngstr['label_action_test_settings'].'"></td><td class=rowone width="100%" colspan=4>Pour modifier les paramètres du test, presser ce bouton à la droite du test.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_test_groups_select'].'"></td><td class=rowone width="100%" colspan=4>Pour assigner le test(s) à certains groupes of usagers, presser le bouton à la droite du test ou sélectionner tous les tests en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_questions_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer le test questions, presser le bouton à la droite du test.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_test_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer le test(s), presser le bouton à la droite du test ou sélectionner tous les tests en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>
<p>Groups table:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_group'].'"></td><td class=rowone width="100%" colspan=4>Pour créer un nouveau groupe, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_group_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer le groupe, presser le bouton à la droite du groupe.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_group_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer le(s) groupe(s), presser le bouton à la droite du groupe ou sélectionner tous les groupes en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_questionbank'] = '<p>Cette page est destinée à la création et l\'édition de la banque de questions.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_question'].'"></td><td class=rowone width="100%" colspan=4>Pour créer une nouvelle question, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-stats.gif" title="'.$lngstr['label_action_questions_stats'].'"></td><td class=rowone width="100%" colspan=4>Pour afficher les statistiques d\'une question(s), presser le bouton à la droite de la question ou sélectionner toutes les questions en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_question_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer la question, presser le bouton à la droite de la question.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_question_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer la(les) question(s), presser le bouton à la droite de la question ou sélectionner toutes les questions en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_subjects'] = '<p>Cette page est destinée à la création et l\'édition des sujets.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_subject'].'"></td><td class=rowone width="100%" colspan=4>Pour créer un nouveau sujet, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_subject_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer le sujet, presser le bouton à la droite du sujet.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_subject_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer le(s) sujet(s), presser le bouton à la droite du sujet ou sélectionner tous les sujets en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_reportsmanager'] = '<p>Cette page est destinée à l\'analyse des résultats du test.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-view.gif" title="'.$lngstr['label_action_test_result_view'].'"></td><td class=rowone width="100%" colspan=4>Pour afficher les résultats détaillés du test, presser le bouton à la droite du record.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_test_result_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer l\'enregistrement(s), presser le bouton à la droite de l\'enregistrement ou sélectionner tous les enregistrements en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_reportsmanager_reportsratings'] = '';
$lngstr['tooltip_users'] = '<p>Cette page est destinée à la création et l\'édition des comptes Usagers.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_user'].'"></td><td class=rowone width="100%" colspan=4>Pour créer un nouveau compte usager, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_manageusers_groups'].'"></td><td class=rowone width="100%" colspan=4>Pour assigner le(s) usager(s) à un groupe particulier, presser le bouton à la droite de l\'usager ou sélectionner tous les usagers en utilisant le marqueur à gauche and presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_manageusers_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer le compte usager, presser le bouton à la droite du compte usager.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_manageusers_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer le(s) compte(s) usager, presser le bouton à la droite du compte usager ou sélectionner tous les comptes usagers en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_users_groups'] = '';
$lngstr['tooltip_groups'] = '<p>Cette page est destinée à la création et l\'édition des Groupes.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_group'].'"></td><td class=rowone width="100%" colspan=4>Pour créer un nouveau groupe, presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_group_edit'].'"></td><td class=rowone width="100%" colspan=4>Pour éditer le groupe, presser le bouton à la droite du group.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_group_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer le(s) groupe(s), presser le bouton à la droite du groupe ou sélectionner tous les groupes en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_visitors'] = '<p>Cette page est destinée à l\'analyse des statistiques Web.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-view.gif" title="'.$lngstr['label_action_visitors_view'].'"></td><td class=rowone width="100%" colspan=4>Pour afficher le statistiques détaillées, presser le bouton à la droite de l\'enregistrement.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_visitor_delete'].'"></td><td class=rowone width="100%" colspan=4>Pour effacer le(s) enregistrement(s), presser le bouton à la droite de l\'enregistrement ou sélectionner tous les enregistrements en utilisant le marqueur à gauche et presser ce bouton sur le barre d\'outils au haut de la liste.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Utiliser ces boutons pour naviguer à travers les pages.</td></tr>
</table></p>';
$lngstr['tooltip_resources'] = '';
$lngstr['tooltip_coupons'] = '';

$lngstr['label_country_items'] = array(
	'US' => 'United States',
	'AF' => 'Afghanistan',
	'AL' => 'Albania',
	'DZ' => 'Algeria',
	'AS' => 'American Samoa',
	'AD' => 'Andorra',
	'AO' => 'Angola',
	'AI' => 'Anguilla',
	'AQ' => 'Antarctica',
	'AG' => 'Antigua and Barbuda',
	'AR' => 'Argentina',
	'AM' => 'Armenia',
	'AW' => 'Aruba',
	'AU' => 'Australia',
	'AT' => 'Austria',
	'AZ' => 'Azerbaijan',
	'BS' => 'Bahamas',
	'BH' => 'Bahrain',
	'BD' => 'Bangladesh',
	'BB' => 'Barbados',
	'BY' => 'Belarus',
	'BE' => 'Belgium',
	'BZ' => 'Belize',
	'BJ' => 'Benin',
	'BM' => 'Bermuda',
	'BT' => 'Bhutan',
	'BO' => 'Bolivia',
	'BA' => 'Bosnia And Herzegowina',
	'BW' => 'Botswana',
	'BV' => 'Bouvet Island',
	'BR' => 'Brazil',
	'IO' => 'British Indian Ocean Territory',
	'BN' => 'Brunei Darussalam',
	'BG' => 'Bulgaria',
	'BF' => 'Burkina Faso',
	'BI' => 'Burundi',
	'KH' => 'Cambodia',
	'CM' => 'Cameroon',
	'CA' => 'Canada',
	'CV' => 'Cape Verde',
	'KY' => 'Cayman Islands',
	'CF' => 'Central African Republic',
	'TD' => 'Chad',
	'CL' => 'Chile',
	'CN' => 'China',
	'CX' => 'Christmas Island',
	'CC' => 'Cocos (Keeling) Islands',
	'CO' => 'Colombia',
	'KM' => 'Comoros',
	'CG' => 'Congo',
	'CD' => 'Congo, The Democratic Republic Of The',
	'CK' => 'Cook Islands',
	'CR' => 'Costa Rica',
	'CI' => 'Cote D\'ivoire',
	'HR' => 'Croatia (Local Name: Hrvatska)',
	'CU' => 'Cuba',
	'CY' => 'Cyprus',
	'CZ' => 'Czech Republic',
	'DK' => 'Denmark',
	'DJ' => 'Djibouti',
	'DM' => 'Dominica',
	'DO' => 'Dominican Republic',
	'TL' => 'East Timor',
	'EC' => 'Ecuador',
	'EG' => 'Egypt',
	'SV' => 'El Salvador',
	'GQ' => 'Equatorial Guinea',
	'ER' => 'Eritrea',
	'EE' => 'Estonia',
	'ET' => 'Ethiopia',
	'FK' => 'Falkland Islands (Malvinas)',
	'FO' => 'Faroe Islands',
	'FJ' => 'Fiji',
	'FI' => 'Finland',
	'FR' => 'France',
	'FX' => 'France, Metropolitan',
	'GF' => 'French Guiana',
	'PF' => 'French Polynesia',
	'TF' => 'French Southern Territories',
	'GA' => 'Gabon',
	'GM' => 'Gambia',
	'GE' => 'Georgia',
	'DE' => 'Germany',
	'GH' => 'Ghana',
	'GI' => 'Gibraltar',
	'GR' => 'Greece',
	'GL' => 'Greenland',
	'GD' => 'Grenada',
	'GP' => 'Guadeloupe',
	'GU' => 'Guam',
	'GT' => 'Guatemala',
	'GN' => 'Guinea',
	'GW' => 'Guinea-Bissau',
	'GY' => 'Guyana',
	'HT' => 'Haiti',
	'HM' => 'Heard and McDonald Islands',
	'VA' => 'Holy See (Vatican City State)',
	'HN' => 'Honduras',
	'HK' => 'Hong Kong',
	'HU' => 'Hungary',
	'IS' => 'Iceland',
	'IN' => 'India',
	'ID' => 'Indonesia',
	'IR' => 'Iran (Islamic Republic Of)',
	'IQ' => 'Iraq',
	'IE' => 'Ireland',
	'IL' => 'Israel',
	'IT' => 'Italy',
	'JM' => 'Jamaica',
	'JP' => 'Japan',
	'JO' => 'Jordan',
	'KZ' => 'Kazakhstan',
	'KE' => 'Kenya',
	'KI' => 'Kiribati',
	'KR' => 'Korea',
	'KP' => 'Korea, Democratic People\'s Republic Of',
	'KW' => 'Kuwait',
	'KG' => 'Kyrgyzstan',
	'LA' => 'Lao People\'s Democratic Republic',
	'LV' => 'Latvia',
	'LB' => 'Lebanon',
	'LS' => 'Lesotho',
	'LR' => 'Liberia',
	'LY' => 'Libyan Arab Jamahiriya',
	'LI' => 'Liechtenstein',
	'LT' => 'Lithuania',
	'LU' => 'Luxembourg',
	'MO' => 'Macau',
	'MK' => 'Macedonia, The Former Yugo-slav Republic Of',
	'MG' => 'Madagascar',
	'MW' => 'Malawi',
	'MY' => 'Malaysia',
	'MV' => 'Maldives',
	'ML' => 'Mali',
	'MT' => 'Malta',
	'MH' => 'Marshall Islands',
	'MQ' => 'Martinique',
	'MR' => 'Mauritania',
	'MU' => 'Mauritius',
	'YT' => 'Mayotte',
	'MX' => 'Mexico',
	'FM' => 'Micronesia, Federated States Of',
	'MD' => 'Moldova, Republic Of',
	'MC' => 'Monaco',
	'MN' => 'Mongolia',
	'MS' => 'Montserrat',
	'MA' => 'Morocco',
	'MZ' => 'Mozambique',
	'MM' => 'Myanmar',
	'NA' => 'Namibia',
	'NR' => 'Nauru',
	'NP' => 'Nepal',
	'NL' => 'Netherlands',
	'AN' => 'Netherlands Antilles',
	'NC' => 'New Caledonia',
	'NZ' => 'New Zealand',
	'NI' => 'Nicaragua',
	'NE' => 'Niger',
	'NG' => 'Nigeria',
	'NU' => 'Niue',
	'NF' => 'Norfolk Island',
	'MP' => 'Northern Mariana Islands',
	'NO' => 'Norway',
	'OM' => 'Oman',
	'PK' => 'Pakistan',
	'PW' => 'Palau',
	'PS' => 'Palestinian Territory, Occupied',
	'PA' => 'Panama',
	'PG' => 'Papua New Guinea',
	'PY' => 'Paraguay',
	'PE' => 'Peru',
	'PH' => 'Philippines',
	'PN' => 'Pitcairn',
	'PL' => 'Poland',
	'PT' => 'Portugal',
	'PR' => 'Puerto Rico',
	'QA' => 'Qatar',
	'RE' => 'Reunion',
	'RO' => 'Romania',
	'RU' => 'Russian Federation',
	'RW' => 'Rwanda',
	'KN' => 'Saint Kitts And Nevis',
	'LC' => 'Saint Lucia',
	'VC' => 'Saint Vincent And The Grena-dines',
	'WS' => 'Samoa',
	'SM' => 'San Marino',
	'ST' => 'Sao Tome And Principe',
	'SA' => 'Saudi Arabia',
	'SN' => 'Senegal',
	'SC' => 'Seychelles',
	'SL' => 'Sierra Leone',
	'SG' => 'Singapore',
	'SK' => 'Slovakia (Slovak Republic)',
	'SI' => 'Slovenia',
	'SB' => 'Solomon Islands',
	'SO' => 'Somalia',
	'ZA' => 'South Africa',
	'GS' => 'South Georgia And The South Sandwich Islands',
	'ES' => 'Spain',
	'LK' => 'Sri Lanka',
	'SH' => 'St. Helena',
	'PM' => 'St. Pierre and Miquelon',
	'SD' => 'Sudan',
	'SR' => 'Suriname',
	'SJ' => 'Svalbard And Jan Mayen Islands',
	'SZ' => 'Swaziland',
	'SE' => 'Sweden',
	'CH' => 'Switzerland',
	'SY' => 'Syrian Arab Republic',
	'TW' => 'Taiwan',
	'TJ' => 'Tajikistan',
	'TZ' => 'Tanzania, United Republic Of',
	'TH' => 'Thailand',
	'TG' => 'Togo',
	'TK' => 'Tokelau',
	'TO' => 'Tonga',
	'TT' => 'Trinidad And Tobago',
	'TN' => 'Tunisia',
	'TR' => 'Turkey',
	'TM' => 'Turkmenistan',
	'TC' => 'Turks And Caicos Islands',
	'TV' => 'Tuvalu',
	'UG' => 'Uganda',
	'UA' => 'Ukraine',
	'AE' => 'United Arab Emirates',
	'GB' => 'United Kingdom',
	'UM' => 'United States Minor Outlying Islands',
	'UY' => 'Uruguay',
	'USCA' => 'US and Canada',
	'UZ' => 'Uzbekistan',
	'VU' => 'Vanuatu',
	'VE' => 'Venezuela',
	'VN' => 'Viet Nam',
	'VG' => 'Virgin Islands (British)',
	'VI' => 'Virgin Islands (U.S.)',
	'WF' => 'Wallis And Futuna Islands',
	'EH' => 'Western Sahara',
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
	'QC' => 'Québec',
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