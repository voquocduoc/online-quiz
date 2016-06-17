<?php
$g_vars['page']['location'] = array('test_manager', 'test_manager', 'test_questions', 'import_questions');
$f_testid = (int)readGetVar('testid');
$g_vars['page']['testid'] = $f_testid;
$g_vars['page']['header'] = $lngstr['page_header_import_questions'];
$g_vars['page']['selected_section'] = 'testmanager';
$g_vars['page']['selected_tab'] = 'testmanager-10';
$g_vars['page']['menu_2_items'] = getMenu2Items($g_vars['page']['selected_section']);
$i_cookie_prefix = 'test_import_';
$g_vars['page']['question_delimiter'] = readPostCookieVar('question_delimiter', $i_cookie_prefix.'question_delimiter', 'Question: ');
$g_vars['page']['answer_delimiter'] = readPostCookieVar('answer_delimiter', $i_cookie_prefix.'answer_delimiter', 'Choice: ');
$g_vars['page']['answer2_delimiter'] = readPostCookieVar('answer2_delimiter', $i_cookie_prefix.'answer2_delimiter', 'Choice 2: ');
$g_vars['page']['preq_delimiter'] = readPostCookieVar('preq_delimiter', $i_cookie_prefix.'preq_delimiter', 'Intro: ');
$g_vars['page']['postq_delimiter'] = readPostCookieVar('postq_delimiter', $i_cookie_prefix.'postq_delimiter', 'Explanation: ');
$g_vars['page']['correct_delimiter'] = readPostCookieVar('correct_delimiter', $i_cookie_prefix.'correct_delimiter', 'Correct: ');
$g_vars['page']['points_delimiter'] = readPostCookieVar('points_delimiter', $i_cookie_prefix.'points_delimiter', 'Points: ');
$g_vars['page']['type_delimiter'] = readPostCookieVar('type_delimiter', $i_cookie_prefix.'type_delimiter', 'Type: ');
$g_vars['page']['subject_delimiter'] = readPostCookieVar('subject_delimiter', $i_cookie_prefix.'subject_delimiter', 'Subject: ');
$g_smarty->assign('g_vars', $g_vars);
displayTemplate('testmanager-questions-import');
?>