<?php 
$i_now = time();
$i_queries_new = array(
	 
	'answers' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."answers (
 answerid int unsigned NOT NULL default '0',
 questionid int unsigned NOT NULL default '0',
 answer_text text NOT NULL,
 answer_feedback text NOT NULL,
 answer_correct tinyint unsigned NOT NULL default '0',
 answer_percents float NOT NULL default '0',
 isregexp tinyint unsigned NOT NULL default '0',
 iscasesensitive tinyint unsigned NOT NULL default '1',
 PRIMARY KEY (questionid,answerid)
);",
	),
	 
	'config' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."config (
 configid int unsigned NOT NULL default '0',
 config_name varchar(50) NOT NULL default '',
 config_value text NOT NULL,
 PRIMARY KEY (configid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (1, 'igttimestamp', '".IGT_TIMESTAMP."');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (2, 'igtversion', '".IGT_VERSION."');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (3, 'can_register', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (4, 'reg_intro', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (5, 'reg_username', '4');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (6, 'reg_password', '4');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (7, 'reg_email', '4');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (8, 'reg_firstname', '2');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (9, 'reg_lastname', '2');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (10, 'reg_middlename', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (11, 'reg_address', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (12, 'reg_city', '12');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (13, 'reg_state', '13');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (14, 'reg_zip', '14');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (15, 'reg_country', '15');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (16, 'reg_phone', '16');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (17, 'reg_fax', '17');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (18, 'reg_mobile', '18');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (19, 'reg_pager', '19');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (20, 'reg_ipphone', '20');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (21, 'reg_webpage', '21');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (22, 'reg_icq', '22');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (23, 'reg_msn', '23');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (24, 'reg_gender', '24');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (25, 'reg_birthday', '25');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (26, 'reg_photo', '26');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (27, 'reg_company', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (28, 'reg_jobtitle', '28');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (29, 'reg_department', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (30, 'reg_office', '30');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (31, 'reg_caddress', '31');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (32, 'reg_ccity', '32');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (33, 'reg_cstate', '33');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (34, 'reg_czip', '34');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (35, 'reg_ccountry', '35');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (36, 'reg_cphone', '36');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (37, 'reg_cfax', '37');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (38, 'reg_cmobile', '38');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (39, 'reg_cpager', '39');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (40, 'reg_cipphone', '40');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (41, 'reg_cwebpage', '41');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (42, 'reg_trainer', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (43, 'reg_userfield1', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (44, 'reg_caption_userfield1', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (45, 'reg_userfield2', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (46, 'reg_caption_userfield2', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (47, 'reg_userfield3', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (48, 'reg_caption_userfield3', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (49, 'reg_userfield4', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (50, 'reg_caption_userfield4', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (51, 'list_length', '20');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (52, 'store_logs', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (53, 'editor_type', '3');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (54, 'upon_registration', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (55, 'reg_title', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (56, 'reg_aol', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (57, 'reg_husbandwife', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (58, 'reg_children', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (59, 'reg_cphoto', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (60, 'reg_userfield5', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (61, 'reg_caption_userfield5', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (62, 'reg_userfield6', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (63, 'reg_caption_userfield6', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (64, 'reg_userfield7', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (65, 'reg_caption_userfield7', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (66, 'reg_userfield8', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (67, 'reg_caption_userfield8', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (68, 'reg_userfield9', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (69, 'reg_caption_userfield9', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (70, 'reg_userfield10', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (71, 'reg_caption_userfield10', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (72, 'reg_type_userfield1', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (73, 'reg_values_userfield1', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (74, 'reg_type_userfield2', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (75, 'reg_values_userfield2', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (76, 'reg_type_userfield3', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (77, 'reg_values_userfield3', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (78, 'reg_type_userfield4', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (79, 'reg_values_userfield4', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (80, 'reg_type_userfield5', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (81, 'reg_values_userfield5', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (82, 'reg_type_userfield6', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (83, 'reg_values_userfield6', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (84, 'reg_type_userfield7', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (85, 'reg_values_userfield7', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (86, 'reg_type_userfield8', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (87, 'reg_values_userfield8', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (88, 'reg_type_userfield9', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (89, 'reg_values_userfield9', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (90, 'reg_type_userfield10', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (91, 'reg_values_userfield10', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (92, 'default_language', 'en');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (93, 'version', '".md5(@$srv_settings['version'])."');",
	),
 
	 
	'etemplates' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."etemplates (
 etemplateid int unsigned NOT NULL auto_increment,
 etemplate_name varchar(255) NOT NULL default '',
 etemplate_description varchar(255) NOT NULL default '',
 etemplate_from varchar(255) NOT NULL default '',
 etemplate_subject varchar(255) NOT NULL default '',
 etemplate_body text NOT NULL,
 PRIMARY KEY (etemplateid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (1, ".($g_db->qstr($lngstr['initdb_etemplates_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_1_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_1_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_1_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (2, ".($g_db->qstr($lngstr['initdb_etemplates_2_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (3, ".($g_db->qstr($lngstr['initdb_etemplates_3_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (4, ".($g_db->qstr($lngstr['initdb_etemplates_4_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (5, ".($g_db->qstr($lngstr['initdb_etemplates_5_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (50, ".($g_db->qstr($lngstr['initdb_etemplates_50_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_50_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_50_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_50_body'], get_magic_quotes_gpc())).");",
	),
	 
	'gscales' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."gscales (
 gscaleid int unsigned NOT NULL auto_increment,
 gscale_name varchar(255) NOT NULL default '',
 gscale_description varchar(255) NOT NULL default '',
 PRIMARY KEY (gscaleid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_1_id'].", ".($g_db->qstr($lngstr['initdb_gscales_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_1_description'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_2_id'].", ".($g_db->qstr($lngstr['initdb_gscales_2_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_2_description'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_3_id'].", ".($g_db->qstr($lngstr['initdb_gscales_3_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_3_description'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_4_id'].", ".($g_db->qstr($lngstr['initdb_gscales_4_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_4_description'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_5_id'].", ".($g_db->qstr($lngstr['initdb_gscales_5_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_5_description'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_6_id'].", ".($g_db->qstr($lngstr['initdb_gscales_6_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_6_description'], get_magic_quotes_gpc())).");",
	),
	 
	'gscales_grades' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."gscales_grades (
 gscaleid int unsigned NOT NULL default '0',
 gscale_gradeid int unsigned NOT NULL default '0',
 grade_name varchar(255) NOT NULL default '',
 grade_description varchar(255) NOT NULL default '',
 grade_feedback text NOT NULL,
 grade_from float NOT NULL default '0',
 grade_to float NOT NULL default '0',
 isabsolute tinyint unsigned NOT NULL default '0',
 PRIMARY KEY (gscaleid,gscale_gradeid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_1_id'].", 1, 'A', ".($g_db->qstr($lngstr['initdb_gscales_1_1_description'], get_magic_quotes_gpc())).", '', '90', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_1_id'].", 2, 'B', ".($g_db->qstr($lngstr['initdb_gscales_1_2_description'], get_magic_quotes_gpc())).", '', '80', '90', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_1_id'].", 3, 'C', ".($g_db->qstr($lngstr['initdb_gscales_1_3_description'], get_magic_quotes_gpc())).", '', '70', '80', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_1_id'].", 4, 'D', ".($g_db->qstr($lngstr['initdb_gscales_1_4_description'], get_magic_quotes_gpc())).", '', '60', '70', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_1_id'].", 5, 'F', ".($g_db->qstr($lngstr['initdb_gscales_1_5_description'], get_magic_quotes_gpc())).", '', '0', '60', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_2_id'].", 1, ".($g_db->qstr($lngstr['initdb_gscales_2_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_2_1_description'], get_magic_quotes_gpc())).", '', '50', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_2_id'].", 2, ".($g_db->qstr($lngstr['initdb_gscales_2_2_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_2_2_description'], get_magic_quotes_gpc())).", '', '0', '50', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 1, 'A', ".($g_db->qstr($lngstr['initdb_gscales_3_1_description'], get_magic_quotes_gpc())).", '', '95', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 2, 'B', ".($g_db->qstr($lngstr['initdb_gscales_3_2_description'], get_magic_quotes_gpc())).", '', '90', '95', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 3, 'C', ".($g_db->qstr($lngstr['initdb_gscales_3_3_description'], get_magic_quotes_gpc())).", '', '85', '90', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 4, 'D', ".($g_db->qstr($lngstr['initdb_gscales_3_4_description'], get_magic_quotes_gpc())).", '', '80', '85', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 5, 'E', ".($g_db->qstr($lngstr['initdb_gscales_3_5_description'], get_magic_quotes_gpc())).", '', '75', '80', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 6, 'FX', ".($g_db->qstr($lngstr['initdb_gscales_3_6_description'], get_magic_quotes_gpc())).", '', '65', '75', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 7, 'F', ".($g_db->qstr($lngstr['initdb_gscales_3_7_description'], get_magic_quotes_gpc())).", '', '0', '65', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_4_id'].", 1, '4', ".($g_db->qstr($lngstr['initdb_gscales_4_1_description'], get_magic_quotes_gpc())).", '', '90', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_4_id'].", 2, '3', ".($g_db->qstr($lngstr['initdb_gscales_4_2_description'], get_magic_quotes_gpc())).", '', '80', '90', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_4_id'].", 3, '2', ".($g_db->qstr($lngstr['initdb_gscales_4_3_description'], get_magic_quotes_gpc())).", '', '70', '80', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_4_id'].", 4, '1', ".($g_db->qstr($lngstr['initdb_gscales_4_4_description'], get_magic_quotes_gpc())).", '', '60', '70', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_4_id'].", 5, '0', ".($g_db->qstr($lngstr['initdb_gscales_4_5_description'], get_magic_quotes_gpc())).", '', '0', '60', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 1, '1', ".($g_db->qstr($lngstr['initdb_gscales_5_1_description'], get_magic_quotes_gpc())).", '', '90', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 2, '2', ".($g_db->qstr($lngstr['initdb_gscales_5_2_description'], get_magic_quotes_gpc())).", '', '80', '90', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 3, '3', ".($g_db->qstr($lngstr['initdb_gscales_5_3_description'], get_magic_quotes_gpc())).", '', '70', '80', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 4, '4', ".($g_db->qstr($lngstr['initdb_gscales_5_4_description'], get_magic_quotes_gpc())).", '', '60', '70', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 5, '5', ".($g_db->qstr($lngstr['initdb_gscales_5_5_description'], get_magic_quotes_gpc())).", '', '50', '60', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 6, '6', ".($g_db->qstr($lngstr['initdb_gscales_5_6_description'], get_magic_quotes_gpc())).", '', '0', '50', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_6_id'].", 1, '5', ".($g_db->qstr($lngstr['initdb_gscales_6_1_description'], get_magic_quotes_gpc())).", '', '90', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_6_id'].", 2, '4', ".($g_db->qstr($lngstr['initdb_gscales_6_2_description'], get_magic_quotes_gpc())).", '', '80', '90', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_6_id'].", 3, '3', ".($g_db->qstr($lngstr['initdb_gscales_6_3_description'], get_magic_quotes_gpc())).", '', '70', '80', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_6_id'].", 4, '2', ".($g_db->qstr($lngstr['initdb_gscales_6_4_description'], get_magic_quotes_gpc())).", '', '60', '70', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_feedback, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_6_id'].", 5, '1', ".($g_db->qstr($lngstr['initdb_gscales_6_5_description'], get_magic_quotes_gpc())).", '', '0', '60', 0);",
	),
	 
	'groups' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."groups (
 groupid int unsigned NOT NULL auto_increment,
 group_name varchar(255) NOT NULL default '',
 group_description varchar(255) NOT NULL default '',
 access_tests tinyint unsigned NOT NULL default '1',
 access_testmanager tinyint unsigned NOT NULL default '0',
 access_gradingsystems tinyint unsigned NOT NULL default '0',
 access_emailtemplates tinyint unsigned NOT NULL default '0',
 access_reporttemplates tinyint unsigned NOT NULL default '0',
 access_reportsmanager tinyint unsigned NOT NULL default '0',
 access_questionbank tinyint unsigned NOT NULL default '0',
 access_subjects tinyint unsigned NOT NULL default '0',
 access_groups tinyint unsigned NOT NULL default '0',
 access_users tinyint unsigned NOT NULL default '0',
 access_visitors tinyint unsigned NOT NULL default '0',
 access_config tinyint unsigned NOT NULL default '0',
 PRIMARY KEY (groupid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."groups (groupid, group_name, group_description, access_tests, access_testmanager, access_gradingsystems, access_emailtemplates, access_reporttemplates, access_reportsmanager, access_questionbank, access_subjects, access_groups, access_users, access_visitors, access_config) VALUES (1, ".($g_db->qstr($lngstr['initdb_groups_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_groups_1_description'], get_magic_quotes_gpc())).", 2, 2, 2, 2, 2, 3, 2, 2, 2, 4, 2, 2);",
"INSERT INTO ".$srv_settings['table_prefix']."groups (groupid, group_name, group_description, access_tests, access_testmanager, access_gradingsystems, access_emailtemplates, access_reporttemplates, access_reportsmanager, access_questionbank, access_subjects, access_groups, access_users, access_visitors, access_config) VALUES (2, ".($g_db->qstr($lngstr['initdb_groups_2_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_groups_2_description'], get_magic_quotes_gpc())).", 2, 2, 2, 2, 2, 3, 2, 2, 1, 3, 1, 1);",
"INSERT INTO ".$srv_settings['table_prefix']."groups (groupid, group_name, group_description, access_tests, access_testmanager, access_gradingsystems, access_emailtemplates, access_reporttemplates, access_reportsmanager, access_questionbank, access_subjects, access_groups, access_users, access_visitors, access_config) VALUES (3, ".($g_db->qstr($lngstr['initdb_groups_3_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_groups_3_description'], get_magic_quotes_gpc())).", 1, 1, 0, 0, 0, 0, 2, 2, 0, 3, 0, 0);",
"INSERT INTO ".$srv_settings['table_prefix']."groups (groupid, group_name, group_description, access_tests, access_testmanager, access_gradingsystems, access_emailtemplates, access_reporttemplates, access_reportsmanager, access_questionbank, access_subjects, access_groups, access_users, access_visitors, access_config) VALUES (19, ".($g_db->qstr($lngstr['initdb_groups_19_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_groups_19_description'], get_magic_quotes_gpc())).", 2, 0, 0, 0, 0, 1, 0, 0, 0, 3, 0, 0);",
"INSERT INTO ".$srv_settings['table_prefix']."groups (groupid, group_name, group_description, access_tests, access_testmanager, access_gradingsystems, access_emailtemplates, access_reporttemplates, access_reportsmanager, access_questionbank, access_subjects, access_groups, access_users, access_visitors, access_config) VALUES (20, ".($g_db->qstr($lngstr['initdb_groups_20_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_groups_20_description'], get_magic_quotes_gpc())).", 2, 0, 0, 0, 0, 1, 0, 0, 0, 3, 0, 0);",
	),
	 
	'groups_resources' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."groups_resources (
 groupid int unsigned NOT NULL default '0',
 resourceid int unsigned NOT NULL default '0',
 PRIMARY KEY (groupid,resourceid)
);",
	),
	 
	'groups_tests' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."groups_tests (
 groupid int unsigned NOT NULL default '0',
 testid int unsigned NOT NULL default '0',
 PRIMARY KEY (groupid,testid)
);",
	),
	 
	'groups_users' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."groups_users (
 groupid int unsigned NOT NULL default '0',
 userid int unsigned NOT NULL default '0',
 PRIMARY KEY (groupid,userid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."groups_users (groupid, userid) VALUES (1, 1);",
"INSERT INTO ".$srv_settings['table_prefix']."groups_users (groupid, userid) VALUES (20, 2);",
	),
	 
	'questions' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."questions (
 questionid int unsigned NOT NULL auto_increment,
 subjectid int unsigned NOT NULL default '1',
 question_time int unsigned NOT NULL default '0',
 question_pre text NOT NULL,
 question_post text NOT NULL,
 question_text text NOT NULL,
 question_points FLOAT NOT NULL default '1',
 question_solution text NOT NULL,
 question_type int unsigned NOT NULL default '0',
 question_type2 tinyint unsigned NOT NULL default '0',
 question_shufflea tinyint unsigned NOT NULL default '0',
 PRIMARY KEY (questionid)
);",
	),
	 
	'resources' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."resources (
 resourceid int unsigned NOT NULL auto_increment,
 resource_testid int unsigned NOT NULL default '0',
 resource_name varchar(255) NOT NULL default '',
 resource_description varchar(255) NOT NULL default '',
 resource_url text NOT NULL,
 resource_html text NOT NULL,
 resource_datestart int unsigned NOT NULL default '0',
 resource_dateend int unsigned NOT NULL default '0',
 resource_forall tinyint unsigned NOT NULL default '1',
 resource_createdate int unsigned NOT NULL default '0',
 resource_enabled tinyint unsigned NOT NULL default '1',
 PRIMARY KEY (resourceid)
);",
	),
	 
	'results' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."results (
 resultid int unsigned NOT NULL auto_increment,
 testid int unsigned NOT NULL default '0',
 userid int unsigned NOT NULL default '0',
 result_datestart int unsigned NOT NULL default '0',
 result_timespent int unsigned NOT NULL default '0',
 result_timeexceeded tinyint unsigned NOT NULL default '0',
 result_points FLOAT NOT NULL default '0',
 result_pointsmax FLOAT NOT NULL default '0',
 gscaleid int unsigned NOT NULL default '1',
 gscale_gradeid int unsigned NOT NULL default '0',
 PRIMARY KEY (resultid)
);",
	),
	 
	'results_answers' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."results_answers (
 result_answerid int unsigned NOT NULL default '0',
 resultid int unsigned NOT NULL default '0',
 questionid int unsigned NOT NULL default '0',
 test_questionid int unsigned NOT NULL default '0',
 result_answer_text text NOT NULL,
 result_answer_points FLOAT NOT NULL default '0',
 result_answer_iscorrect tinyint unsigned NOT NULL default '0',
 result_answer_feedback text NOT NULL,
 result_answer_timespent int unsigned NOT NULL default '0',
 result_answer_timeexceeded tinyint unsigned NOT NULL default '0',
 PRIMARY KEY (resultid,result_answerid)
);",
	),
	 
	'rtemplates' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."rtemplates (
 rtemplateid int unsigned NOT NULL auto_increment,
 rtemplate_name varchar(255) NOT NULL default '',
 rtemplate_description varchar(255) NOT NULL default '',
 rtemplate_body text NOT NULL,
 PRIMARY KEY (rtemplateid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."rtemplates (rtemplateid, rtemplate_name, rtemplate_description, rtemplate_body) VALUES (1, ".($g_db->qstr($lngstr['initdb_rtemplates_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_rtemplates_1_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_rtemplates_1_body'], get_magic_quotes_gpc())).");",
	),
	 
	'subjects' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."subjects (
 subjectid int unsigned NOT NULL auto_increment,
 subject_parent_subjectid int unsigned NOT NULL default '0',
 subject_name varchar(255) NOT NULL default '',
 subject_description varchar(255) NOT NULL default '',
 PRIMARY KEY (subjectid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."subjects (subjectid, subject_name, subject_description) VALUES (1, ".($g_db->qstr($lngstr['initdb_subjects_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_subjects_1_description'], get_magic_quotes_gpc())).");",
	),
	 
	'tests' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests (
 testid int unsigned NOT NULL auto_increment,
 subjectid int unsigned NOT NULL default '1',
 rtemplateid int unsigned NOT NULL default '1',
 result_etemplateid int unsigned NOT NULL default '0',
 gscaleid int unsigned NOT NULL default '1',
 test_type INT UNSIGNED DEFAULT '0' NOT NULL,
 test_name varchar(255) NOT NULL default '',
 test_code varchar(255) NOT NULL default '',
 test_description varchar(255) NOT NULL default '',
 test_instructions text NOT NULL,
 test_time int unsigned NOT NULL default '0',
 test_timeforceout tinyint unsigned NOT NULL default '0',
 test_timingq tinyint unsigned NOT NULL default '0',
 test_attempts int unsigned NOT NULL default '0',
 test_shuffleq tinyint unsigned NOT NULL default '0',
 test_shufflea tinyint unsigned NOT NULL default '0',
 test_sectionstype int unsigned NOT NULL default '0',
 test_qsperpage tinyint unsigned NOT NULL default '1',
 test_showqfeedback tinyint unsigned NOT NULL default '1',
 test_canreview tinyint unsigned NOT NULL default '0',
 test_result_showanswers tinyint unsigned NOT NULL default '0',
 test_result_showpoints tinyint unsigned NOT NULL default '1',
 test_result_showgrade tinyint unsigned NOT NULL default '0',
 test_result_showgradefeedback TINYINT UNSIGNED NOT NULL default '0',
 test_result_showhtml tinyint unsigned NOT NULL default '0',
 test_result_showpdf tinyint unsigned NOT NULL default '0',
 test_result_rtemplateid INT UNSIGNED DEFAULT '0' NOT NULL,
 test_reportgradecondition tinyint unsigned NOT NULL default '0',
 test_result_email varchar(255) NOT NULL default '',
 test_result_emailtouser tinyint unsigned NOT NULL default '0',
 test_datestart int unsigned NOT NULL default '0',
 test_dateend int unsigned NOT NULL default '0',
 test_prevtestid INT UNSIGNED DEFAULT '0' NOT NULL,
 test_nexttestid INT UNSIGNED DEFAULT '0' NOT NULL,
 test_contentprotection tinyint unsigned NOT NULL default '0',
 test_notes text NOT NULL,
 test_price int unsigned NOT NULL default '0',
 test_other_repeatuntilcorrect TINYINT UNSIGNED NOT NULL default '0',
 test_forall tinyint unsigned NOT NULL default '1',
 test_createdate int unsigned NOT NULL default '0',
 test_enabled tinyint unsigned NOT NULL default '1',
 PRIMARY KEY (testid)
);",
	),
	 
	'tests_attempts' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests_attempts (
 testid int unsigned NOT NULL default '0',
 userid int unsigned NOT NULL default '0',
 test_attempt_count int unsigned NOT NULL default '0',
 PRIMARY KEY (testid,userid)
);",
	),
	 
	'tests_questions' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests_questions (
 test_questionid int unsigned NOT NULL default '0',
 testid int unsigned NOT NULL default '0',
 test_sectionid INT UNSIGNED NOT NULL DEFAULT '0',
 questionid int unsigned NOT NULL default '0',
 PRIMARY KEY (testid,test_questionid)
);",
	),
	 
	'tests_own' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests_own (
 testid int unsigned NOT NULL default '0',
 userid int unsigned NOT NULL default '0',
 test_own_expiredate int unsigned NOT NULL default '0',
 PRIMARY KEY (testid,userid)
);",
	),
	 
	'users' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."users (
 userid int unsigned NOT NULL auto_increment,
 user_name varchar(255) NOT NULL default '',
 user_passhash varchar(32) NOT NULL default '',
 user_checkword VARCHAR(32) DEFAULT '' NOT NULL,
 user_email varchar(255) NOT NULL default '',
 user_title varchar(32) NOT NULL default '',
 user_firstname varchar(255) NOT NULL default '',
 user_lastname varchar(255) NOT NULL default '',
 user_middlename varchar(255) NOT NULL default '',
 user_address text NOT NULL,
 user_city varchar(255) NOT NULL default '',
 user_state varchar(255) NOT NULL default '',
 user_zip varchar(255) NOT NULL default '',
 user_country varchar(255) NOT NULL default '',
 user_phone varchar(255) NOT NULL default '',
 user_fax varchar(255) NOT NULL default '',
 user_mobile varchar(255) NOT NULL default '',
 user_pager varchar(255) NOT NULL default '',
 user_ipphone varchar(255) NOT NULL default '',
 user_webpage varchar(255) NOT NULL default '',
 user_icq varchar(255) NOT NULL default '',
 user_msn varchar(255) NOT NULL default '',
 user_aol varchar(255) NOT NULL default '',
 user_gender tinyint(4) NOT NULL default '0',
 user_birthday datetime NOT NULL default '1900-01-01',
 user_husbandwife varchar(255) NOT NULL default '',
 user_children varchar(255) NOT NULL default '',
 user_trainer varchar(255) NOT NULL default '',
 user_photo varchar(255) NOT NULL default '',
 user_company varchar(255) NOT NULL default '',
 user_cposition varchar(255) NOT NULL default '',
 user_department varchar(255) NOT NULL default '',
 user_coffice varchar(255) NOT NULL default '',
 user_caddress text NOT NULL,
 user_ccity varchar(255) NOT NULL default '',
 user_cstate varchar(255) NOT NULL default '',
 user_czip varchar(255) NOT NULL default '',
 user_ccountry varchar(255) NOT NULL default '',
 user_cphone varchar(255) NOT NULL default '',
 user_cfax varchar(255) NOT NULL default '',
 user_cmobile varchar(255) NOT NULL default '',
 user_cpager varchar(255) NOT NULL default '',
 user_cipphone varchar(255) NOT NULL default '',
 user_cwebpage varchar(255) NOT NULL default '',
 user_cphoto varchar(255) NOT NULL default '',
 user_ufield1 text NOT NULL,
 user_ufield2 text NOT NULL,
 user_ufield3 text NOT NULL,
 user_ufield4 text NOT NULL,
 user_ufield5 text NOT NULL,
 user_ufield6 text NOT NULL,
 user_ufield7 text NOT NULL,
 user_ufield8 text NOT NULL,
 user_ufield9 text NOT NULL,
 user_ufield10 text NOT NULL,
 user_notes text NOT NULL,
 user_joindate int unsigned NOT NULL default '0',
 user_logindate int unsigned NOT NULL default '0',
 user_expiredate int unsigned NOT NULL default '0',
 user_enabled tinyint unsigned NOT NULL default '1',
 PRIMARY KEY (userid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."users (userid, user_name, user_passhash, user_email, user_firstname, user_lastname, user_middlename, user_address, user_company, user_caddress, user_department, user_trainer, user_ufield1, user_ufield2, user_ufield3, user_ufield4, user_ufield5, user_ufield6, user_ufield7, user_ufield8, user_ufield9, user_ufield10, user_notes, user_joindate, user_logindate, user_expiredate, user_enabled) VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_users_1_firstname'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_users_1_lastname'], get_magic_quotes_gpc())).", '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ".$i_now.", ".$i_now.", 0, 1);",
"INSERT INTO ".$srv_settings['table_prefix']."users (userid, user_name, user_passhash, user_email, user_firstname, user_lastname, user_middlename, user_address, user_company, user_caddress, user_department, user_trainer, user_ufield1, user_ufield2, user_ufield3, user_ufield4, user_ufield5, user_ufield6, user_ufield7, user_ufield8, user_ufield9, user_ufield10, user_notes, user_joindate, user_logindate, user_expiredate, user_enabled) VALUES (2, 'guest', '36ae6fd873e5b378211807c1a3f35521', ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_users_2_firstname'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_users_2_lastname'], get_magic_quotes_gpc())).", '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ".$i_now.", ".$i_now.", 0, 0);",
	),
	 
	'visitors' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."visitors (
 visitorid int unsigned NOT NULL auto_increment,
 startdate int unsigned NOT NULL default '0',
 enddate int unsigned NOT NULL default '0',
 userid int unsigned NOT NULL default '0',
 ip1 tinyint unsigned NOT NULL default '0',
 ip2 tinyint unsigned NOT NULL default '0',
 ip3 tinyint unsigned NOT NULL default '0',
 ip4 tinyint unsigned NOT NULL default '0',
 host varchar(100) NOT NULL default '',
 referer varchar(255) NOT NULL default '',
 useragent varchar(255) NOT NULL default '',
 hits int unsigned NOT NULL default '0',
 inurl varchar(255) NOT NULL default '',
 outurl varchar(255) NOT NULL default '',
 PRIMARY KEY (visitorid)
);",
	),
);
$i_queries_010009 = array (
	 
	'config' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."config (
 configid int unsigned NOT NULL default '0',
 config_name varchar(50) NOT NULL default '',
 config_value text NOT NULL,
 PRIMARY KEY (configid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (1, 'igttimestamp', '".IGT_TIMESTAMP."');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (2, 'igtversion', '".IGT_VERSION."');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (3, 'can_register', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (4, 'reg_intro', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (5, 'reg_username', '4');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (6, 'reg_password', '4');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (7, 'reg_email', '4');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (8, 'reg_firstname', '2');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (9, 'reg_lastname', '2');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (10, 'reg_middlename', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (11, 'reg_address', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (12, 'reg_city', '12');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (13, 'reg_state', '13');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (14, 'reg_zip', '14');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (15, 'reg_country', '15');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (16, 'reg_phone', '16');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (17, 'reg_fax', '17');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (18, 'reg_mobile', '18');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (19, 'reg_pager', '19');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (20, 'reg_ipphone', '20');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (21, 'reg_webpage', '21');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (22, 'reg_icq', '22');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (23, 'reg_msn', '23');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (24, 'reg_gender', '24');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (25, 'reg_birthday', '25');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (26, 'reg_photo', '26');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (27, 'reg_company', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (28, 'reg_jobtitle', '28');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (29, 'reg_department', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (30, 'reg_office', '30');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (31, 'reg_caddress', '31');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (32, 'reg_ccity', '32');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (33, 'reg_cstate', '33');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (34, 'reg_czip', '34');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (35, 'reg_ccountry', '35');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (36, 'reg_cphone', '36');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (37, 'reg_cfax', '37');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (38, 'reg_cmobile', '38');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (39, 'reg_cpager', '39');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (40, 'reg_cipphone', '40');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (41, 'reg_cwebpage', '41');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (42, 'reg_trainer', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (43, 'reg_userfield1', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (44, 'reg_caption_userfield1', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (45, 'reg_userfield2', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (46, 'reg_caption_userfield2', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (47, 'reg_userfield3', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (48, 'reg_caption_userfield3', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (49, 'reg_userfield4', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (50, 'reg_caption_userfield4', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (51, 'list_length', '20');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (52, 'store_logs', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (53, 'editor_type', '3');",
	),
	 
	'groups' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."groups ADD access_visitors tinyint unsigned NOT NULL default '0' AFTER access_users;",
"ALTER TABLE ".$srv_settings['table_prefix']."groups ADD access_config tinyint unsigned NOT NULL default '0' AFTER access_users;",
"UPDATE ".$srv_settings['table_prefix']."groups SET access_visitors=2 WHERE groupid=".SYSTEM_GROUP_ADMIN.";",
"UPDATE ".$srv_settings['table_prefix']."groups SET access_config=2 WHERE groupid=".SYSTEM_GROUP_ADMIN.";",
	),
	 
	'results_answers' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."results_answers ADD result_answer_feedback text NOT NULL AFTER result_answer_iscorrect;",
"ALTER TABLE ".$srv_settings['table_prefix']."results_answers ADD result_answer_timeexceeded tinyint unsigned NOT NULL default '0' AFTER result_answer_feedback;",
	),
	 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_timeforceout tinyint unsigned NOT NULL default '0' AFTER test_time;",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_showqfeedback tinyint unsigned NOT NULL default '1' AFTER test_qsperpage;",
	),
	 
	'users' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_expiredate int unsigned NOT NULL default '0' AFTER user_logindate;",
	),
	 
	'visitors' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."visitors (
 visitorid int unsigned NOT NULL auto_increment,
 startdate int unsigned NOT NULL default '0',
 enddate int unsigned NOT NULL default '0',
 userid int unsigned NOT NULL default '0',
 ip1 tinyint unsigned NOT NULL default '0',
 ip2 tinyint unsigned NOT NULL default '0',
 ip3 tinyint unsigned NOT NULL default '0',
 ip4 tinyint unsigned NOT NULL default '0',
 host varchar(100) NOT NULL default '',
 referer varchar(255) NOT NULL default '',
 useragent varchar(255) NOT NULL default '',
 hits int unsigned NOT NULL default '0',
 inurl varchar(255) NOT NULL default '',
 outurl varchar(255) NOT NULL default '',
 PRIMARY KEY (visitorid)
);",
	),
);
$i_queries_010202 = array (
	 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_attempts int unsigned NOT NULL default '0' AFTER test_timingq;",
	),
	 
	'tests_attempts' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests_attempts (
 testid int unsigned NOT NULL default '0',
 userid int unsigned NOT NULL default '0',
 test_attempt_count int unsigned NOT NULL default '0',
 PRIMARY KEY (testid,userid)
);",
	),
	 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1120392865' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.3.1' WHERE configid=2;",
	),
);
$i_queries_010301 = array (
	 
	'config' => array(
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (54, 'upon_registration', '0');",
	),
	 
	'groups' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."groups ADD access_reporttemplates tinyint unsigned NOT NULL default '0' AFTER access_emailtemplates;",
	),
	 
	'tests' => array( 
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_reportgradecondition tinyint unsigned NOT NULL default '0' AFTER test_result_showpdf;",
	),
	 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1121008002' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.3.7' WHERE configid=2;",
	),
);
$i_queries_010307 = array (
	 
	'config' => array(
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (55, 'reg_title', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (56, 'reg_aol', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (57, 'reg_husbandwife', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (58, 'reg_children', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (59, 'reg_cphoto', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (60, 'reg_userfield5', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (61, 'reg_caption_userfield5', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (62, 'reg_userfield6', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (63, 'reg_caption_userfield6', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (64, 'reg_userfield7', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (65, 'reg_caption_userfield7', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (66, 'reg_userfield8', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (67, 'reg_caption_userfield8', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (68, 'reg_userfield9', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (69, 'reg_caption_userfield9', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (70, 'reg_userfield10', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (71, 'reg_caption_userfield10', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (72, 'reg_type_userfield1', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (73, 'reg_values_userfield1', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (74, 'reg_type_userfield2', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (75, 'reg_values_userfield2', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (76, 'reg_type_userfield3', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (77, 'reg_values_userfield3', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (78, 'reg_type_userfield4', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (79, 'reg_values_userfield4', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (80, 'reg_type_userfield5', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (81, 'reg_values_userfield5', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (82, 'reg_type_userfield6', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (83, 'reg_values_userfield6', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (84, 'reg_type_userfield7', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (85, 'reg_values_userfield7', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (86, 'reg_type_userfield8', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (87, 'reg_values_userfield8', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (88, 'reg_type_userfield9', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (89, 'reg_values_userfield9', '');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (90, 'reg_type_userfield10', '0');",
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (91, 'reg_values_userfield10', '');",
	),
	 
	'users' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."users
ADD user_title varchar(32) NOT NULL default '' AFTER user_email,
ADD user_city varchar(255) NOT NULL default '' AFTER user_address,
ADD user_state varchar(255) NOT NULL default '' AFTER user_city,
ADD user_zip varchar(255) NOT NULL default '' AFTER user_state,
ADD user_country varchar(255) NOT NULL default '' AFTER user_zip,
ADD user_phone varchar(255) NOT NULL default '' AFTER user_country,
ADD user_fax varchar(255) NOT NULL default '' AFTER user_phone,
ADD user_mobile varchar(255) NOT NULL default '' AFTER user_fax,
ADD user_pager varchar(255) NOT NULL default '' AFTER user_mobile,
ADD user_ipphone varchar(255) NOT NULL default '' AFTER user_pager,
ADD user_webpage varchar(255) NOT NULL default '' AFTER user_ipphone,
ADD user_icq varchar(255) NOT NULL default '' AFTER user_webpage,
ADD user_msn varchar(255) NOT NULL default '' AFTER user_icq,
ADD user_aol varchar(255) NOT NULL default '' AFTER user_msn,
ADD user_gender tinyint(4) NOT NULL default '0' AFTER user_aol,
ADD user_birthday datetime NOT NULL default '0000-00-00' AFTER user_gender,
ADD user_husbandwife varchar(255) NOT NULL default '' AFTER user_birthday,
ADD user_children varchar(255) NOT NULL default '' AFTER user_husbandwife,
ADD user_photo varchar(255) NOT NULL default '' AFTER user_children,
ADD user_cposition varchar(255) NOT NULL default '' AFTER user_company,
ADD user_coffice varchar(255) NOT NULL default '' AFTER user_department,
ADD user_caddress text NOT NULL AFTER user_coffice,
ADD user_ccity varchar(255) NOT NULL default '' AFTER user_caddress,
ADD user_cstate varchar(255) NOT NULL default '' AFTER user_ccity,
ADD user_czip varchar(255) NOT NULL default '' AFTER user_cstate,
ADD user_ccountry varchar(255) NOT NULL default '' AFTER user_czip,
ADD user_cphone varchar(255) NOT NULL default '' AFTER user_ccountry,
ADD user_cfax varchar(255) NOT NULL default '' AFTER user_cphone,
ADD user_cmobile varchar(255) NOT NULL default '' AFTER user_cfax,
ADD user_cpager varchar(255) NOT NULL default '' AFTER user_cmobile,
ADD user_cipphone varchar(255) NOT NULL default '' AFTER user_cpager,
ADD user_cwebpage varchar(255) NOT NULL default '' AFTER user_cipphone,
ADD user_cphoto varchar(255) NOT NULL default '' AFTER user_cwebpage,
ADD user_ufield5 text NOT NULL AFTER user_ufield4,
ADD user_ufield6 text NOT NULL AFTER user_ufield5,
ADD user_ufield7 text NOT NULL AFTER user_ufield6,
ADD user_ufield8 text NOT NULL AFTER user_ufield7,
ADD user_ufield9 text NOT NULL AFTER user_ufield8,
ADD user_ufield10 text NOT NULL AFTER user_ufield9;
",
	),
	 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1122210319' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.4.5' WHERE configid=2;",
	),
);
$i_queries_010405 = array (
	 
	'etemplates' => array(
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (2, ".($g_db->qstr($lngstr['initdb_etemplates_2_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (3, ".($g_db->qstr($lngstr['initdb_etemplates_3_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (4, ".($g_db->qstr($lngstr['initdb_etemplates_4_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_body'], get_magic_quotes_gpc())).");",
	),
	 
	'gscales_grades' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."gscales_grades ADD grade_feedback text NOT NULL AFTER grade_description;",
	),
	 
	'questions' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."questions ADD question_shufflea TINYINT UNSIGNED NOT NULL DEFAULT '0';",
	),
	 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_type INT UNSIGNED DEFAULT '0' NOT NULL AFTER gscaleid;",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_prevtestid INT UNSIGNED DEFAULT '0' NOT NULL AFTER test_dateend;",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_nexttestid INT UNSIGNED DEFAULT '0' NOT NULL AFTER test_prevtestid;",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_result_rtemplateid INT UNSIGNED DEFAULT '0' NOT NULL AFTER test_result_showpdf;",
	),
	 
	'users' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_checkword VARCHAR(32) DEFAULT '' NOT NULL AFTER user_passhash;",
	),
	 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1134898211' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.9.5' WHERE configid=2;",
	),
);
$i_queries_010905 = array ( 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1141556629' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.9.7' WHERE configid=2;",
	),
);
$i_queries_010907 = array ( 
	'groups_resources' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."groups_resources (
 groupid int unsigned NOT NULL default '0',
 resourceid int unsigned NOT NULL default '0',
 PRIMARY KEY (groupid,resourceid)
);",
	), 
	'resources' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."resources (
 resourceid int unsigned NOT NULL auto_increment,
 resource_testid int unsigned NOT NULL default '0',
 resource_name varchar(255) NOT NULL default '',
 resource_description varchar(255) NOT NULL default '',
 resource_url text NOT NULL,
 resource_html text NOT NULL,
 resource_datestart int unsigned NOT NULL default '0',
 resource_dateend int unsigned NOT NULL default '0',
 resource_forall tinyint unsigned NOT NULL default '1',
 resource_createdate int unsigned NOT NULL default '0',
 resource_enabled tinyint unsigned NOT NULL default '1',
 PRIMARY KEY (resourceid)
);",
	),
  
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_price INT UNSIGNED DEFAULT '0' NOT NULL AFTER test_notes;",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_code varchar(255) NOT NULL default '' AFTER test_name;",
	), 
	'tests_own' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests_own (
 testid int unsigned NOT NULL default '0',
 userid int unsigned NOT NULL default '0',
 PRIMARY KEY (testid,userid)
);",
	), 
	'users' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_budget int unsigned NOT NULL default '0' AFTER user_notes;",
	), 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1147328255' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.9.9' WHERE configid=2;",
	),
);
$i_queries_010909 = array ( 
	'groups' => array(
"UPDATE ".$srv_settings['table_prefix']."groups SET access_users=4 WHERE groupid=".SYSTEM_GROUP_ADMIN.";",
"UPDATE ".$srv_settings['table_prefix']."groups SET access_users=3 WHERE groupid=".SYSTEM_GROUP_INSTRUCTOR.";",
"UPDATE ".$srv_settings['table_prefix']."groups SET access_users=3 WHERE groupid=".SYSTEM_GROUP_OPERATOR.";",
"UPDATE ".$srv_settings['table_prefix']."groups SET access_users=3 WHERE groupid=".SYSTEM_GROUP_USER.";",
"UPDATE ".$srv_settings['table_prefix']."groups SET access_users=3 WHERE groupid=".SYSTEM_GROUP_GUEST.";",
	), 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1154931557' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.9.10' WHERE configid=2;",
	),
);
$i_queries_010910 = array ( 
	'tests_own' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests_own ADD test_own_expiredate int unsigned NOT NULL default '0' AFTER userid;",
	), 
	'config' => array(
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (92, 'default_language', 'en');",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1160377957' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.9.27' WHERE configid=2;",
	),
);
$i_queries_010927 = array ( 
	'tests_own' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests_own ADD test_own_expiredate INT UNSIGNED NOT NULL DEFAULT '0';",
	), 
	'tests_questions' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests_questions ADD test_sectionid INT UNSIGNED NOT NULL DEFAULT '0';",
	), 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1165465355' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.10.7' WHERE configid=2;",
	),
);
$i_queries_011007 = array (
	 
	'etemplates' => array(
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (5, ".($g_db->qstr($lngstr['initdb_etemplates_5_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_body'], get_magic_quotes_gpc())).");",
	),
	 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_contentprotection tinyint unsigned NOT NULL default '0' AFTER test_nexttestid;",
	), 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1168332559' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.10.9' WHERE configid=2;",
	),
);
$i_queries_011009 = array (
	 
	'questions' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."questions CHANGE question_points question_points FLOAT DEFAULT '1' NOT NULL;",
	),
	 
	'results' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."results CHANGE result_points result_points FLOAT DEFAULT '0' NOT NULL;",
"ALTER TABLE ".$srv_settings['table_prefix']."results CHANGE result_pointsmax result_pointsmax FLOAT DEFAULT '0' NOT NULL;",
	),
	 
	'results_answers' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."results_answers CHANGE result_answer_points result_answer_points FLOAT DEFAULT '0' NOT NULL;",
	),
	 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_result_showhtml TINYINT UNSIGNED NOT NULL default '0' AFTER test_result_showgrade;",
	), 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1172110573' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.11.5' WHERE configid=2;",
	),
);
$i_queries_011105 = array (
	 
	'questions' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."questions ADD question_type2 TINYINT UNSIGNED DEFAULT '0' NOT NULL AFTER question_type;",
	),
	 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_canreview TINYINT UNSIGNED NOT NULL default '0' AFTER test_showqfeedback;",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_result_showgradefeedback TINYINT UNSIGNED NOT NULL default '0' AFTER test_result_showgrade;",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_other_repeatuntilcorrect TINYINT UNSIGNED NOT NULL default '0' AFTER test_price;",
	), 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1172236935' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.11.7' WHERE configid=2;",
	),
);
$i_queries_011107 = array ( 
	'subjects' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."subjects ADD subject_parent_subjectid int unsigned NOT NULL default '0' AFTER subjectid;",
	), 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1176717579' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='2.0.0' WHERE configid=2;",
	),
);
$arrInstallQueries[1176717579] = array (
   
	'config' => array(
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (93, 'version', '".md5(@$srv_settings['version'])."');",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='".IGT_TIMESTAMP."' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='".IGT_VERSION."' WHERE configid=2;",
	),
);
$arrInstallQueriesSpecial['after_any'] = array (
);
require_once($DOCUMENT_ADDONS.'install-db/install-db-mysql.inc.php');
?>