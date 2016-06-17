<?php 
$i_now = time();
$i_queries_new = array( 
	'answers' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."answers (
 answerid int NOT NULL default '0',
 questionid int NOT NULL default '0',
 answer_text text NOT NULL default '',
 answer_feedback text NOT NULL default '',
 answer_correct tinyint NOT NULL default '0',
 answer_percents float NOT NULL default '0',
 isregexp tinyint NOT NULL default '0',
 iscasesensitive tinyint NOT NULL default '1',
 PRIMARY KEY (questionid,answerid)
);",
	), 
	'config' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."config (
 configid int NOT NULL default '0',
 config_name varchar(50) NOT NULL default '',
 config_value text NOT NULL default '',
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
 etemplateid int NOT NULL IDENTITY,
 etemplate_name varchar(255) NOT NULL default '',
 etemplate_description varchar(255) NOT NULL default '',
 etemplate_from varchar(255) NOT NULL default '',
 etemplate_subject varchar(255) NOT NULL default '',
 etemplate_body text NOT NULL default '',
 PRIMARY KEY (etemplateid)
);",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."etemplates ON;",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (1, ".($g_db->qstr($lngstr['initdb_etemplates_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_1_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_1_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_1_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (2, ".($g_db->qstr($lngstr['initdb_etemplates_2_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (3, ".($g_db->qstr($lngstr['initdb_etemplates_3_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (4, ".($g_db->qstr($lngstr['initdb_etemplates_4_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (5, ".($g_db->qstr($lngstr['initdb_etemplates_5_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (50, ".($g_db->qstr($lngstr['initdb_etemplates_50_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_50_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_50_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_50_body'], get_magic_quotes_gpc())).");",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."etemplates OFF;",
	), 
	'gscales' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."gscales (
 gscaleid int NOT NULL IDENTITY,
 gscale_name varchar(255) NOT NULL default '',
 gscale_description varchar(255) NOT NULL default '',
 PRIMARY KEY (gscaleid)
);",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."gscales ON;",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_1_id'].", ".($g_db->qstr($lngstr['initdb_gscales_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_1_description'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_2_id'].", ".($g_db->qstr($lngstr['initdb_gscales_2_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_2_description'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_3_id'].", ".($g_db->qstr($lngstr['initdb_gscales_3_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_3_description'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_4_id'].", ".($g_db->qstr($lngstr['initdb_gscales_4_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_4_description'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_5_id'].", ".($g_db->qstr($lngstr['initdb_gscales_5_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_5_description'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."gscales (gscaleid, gscale_name, gscale_description) VALUES (".$lngstr['initdb_gscales_6_id'].", ".($g_db->qstr($lngstr['initdb_gscales_6_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_6_description'], get_magic_quotes_gpc())).");",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."gscales OFF;",
	), 
	'gscales_grades' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."gscales_grades (
 gscaleid int NOT NULL default '0',
 gscale_gradeid int NOT NULL default '0',
 grade_name varchar(255) NOT NULL default '',
 grade_description varchar(255) NOT NULL default '',
 grade_feedback text NOT NULL default '',
 grade_from float NOT NULL default '0',
 grade_to float NOT NULL default '0',
 isabsolute tinyint NOT NULL default '0',
 PRIMARY KEY (gscaleid,gscale_gradeid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_1_id'].", 1, 'A', ".($g_db->qstr($lngstr['initdb_gscales_1_1_description'], get_magic_quotes_gpc())).", '90', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_1_id'].", 2, 'B', ".($g_db->qstr($lngstr['initdb_gscales_1_2_description'], get_magic_quotes_gpc())).", '80', '90', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_1_id'].", 3, 'C', ".($g_db->qstr($lngstr['initdb_gscales_1_3_description'], get_magic_quotes_gpc())).", '70', '80', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_1_id'].", 4, 'D', ".($g_db->qstr($lngstr['initdb_gscales_1_4_description'], get_magic_quotes_gpc())).", '60', '70', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_1_id'].", 5, 'F', ".($g_db->qstr($lngstr['initdb_gscales_1_5_description'], get_magic_quotes_gpc())).", '0', '60', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_2_id'].", 1, ".($g_db->qstr($lngstr['initdb_gscales_2_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_2_1_description'], get_magic_quotes_gpc())).", '50', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_2_id'].", 2, ".($g_db->qstr($lngstr['initdb_gscales_2_2_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_gscales_2_2_description'], get_magic_quotes_gpc())).", '0', '50', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 1, 'A', ".($g_db->qstr($lngstr['initdb_gscales_3_1_description'], get_magic_quotes_gpc())).", '95', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 2, 'B', ".($g_db->qstr($lngstr['initdb_gscales_3_2_description'], get_magic_quotes_gpc())).", '90', '95', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 3, 'C', ".($g_db->qstr($lngstr['initdb_gscales_3_3_description'], get_magic_quotes_gpc())).", '85', '90', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 4, 'D', ".($g_db->qstr($lngstr['initdb_gscales_3_4_description'], get_magic_quotes_gpc())).", '80', '85', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 5, 'E', ".($g_db->qstr($lngstr['initdb_gscales_3_5_description'], get_magic_quotes_gpc())).", '75', '80', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 6, 'FX', ".($g_db->qstr($lngstr['initdb_gscales_3_6_description'], get_magic_quotes_gpc())).", '65', '75', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_3_id'].", 7, 'F', ".($g_db->qstr($lngstr['initdb_gscales_3_7_description'], get_magic_quotes_gpc())).", '0', '65', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_4_id'].", 1, '4', ".($g_db->qstr($lngstr['initdb_gscales_4_1_description'], get_magic_quotes_gpc())).", '90', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_4_id'].", 2, '3', ".($g_db->qstr($lngstr['initdb_gscales_4_2_description'], get_magic_quotes_gpc())).", '80', '90', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_4_id'].", 3, '2', ".($g_db->qstr($lngstr['initdb_gscales_4_3_description'], get_magic_quotes_gpc())).", '70', '80', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_4_id'].", 4, '1', ".($g_db->qstr($lngstr['initdb_gscales_4_4_description'], get_magic_quotes_gpc())).", '60', '70', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_4_id'].", 5, '0', ".($g_db->qstr($lngstr['initdb_gscales_4_5_description'], get_magic_quotes_gpc())).", '0', '60', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 1, '1', ".($g_db->qstr($lngstr['initdb_gscales_5_1_description'], get_magic_quotes_gpc())).", '90', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 2, '2', ".($g_db->qstr($lngstr['initdb_gscales_5_2_description'], get_magic_quotes_gpc())).", '80', '90', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 3, '3', ".($g_db->qstr($lngstr['initdb_gscales_5_3_description'], get_magic_quotes_gpc())).", '70', '80', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 4, '4', ".($g_db->qstr($lngstr['initdb_gscales_5_4_description'], get_magic_quotes_gpc())).", '60', '70', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 5, '5', ".($g_db->qstr($lngstr['initdb_gscales_5_5_description'], get_magic_quotes_gpc())).", '50', '60', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_5_id'].", 6, '6', ".($g_db->qstr($lngstr['initdb_gscales_5_6_description'], get_magic_quotes_gpc())).", '0', '50', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_6_id'].", 1, '5', ".($g_db->qstr($lngstr['initdb_gscales_6_1_description'], get_magic_quotes_gpc())).", '90', '100', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_6_id'].", 2, '4', ".($g_db->qstr($lngstr['initdb_gscales_6_2_description'], get_magic_quotes_gpc())).", '80', '90', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_6_id'].", 3, '3', ".($g_db->qstr($lngstr['initdb_gscales_6_3_description'], get_magic_quotes_gpc())).", '70', '80', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_6_id'].", 4, '2', ".($g_db->qstr($lngstr['initdb_gscales_6_4_description'], get_magic_quotes_gpc())).", '60', '70', 0);",
"INSERT INTO ".$srv_settings['table_prefix']."gscales_grades (gscaleid, gscale_gradeid, grade_name, grade_description, grade_from, grade_to, isabsolute) VALUES (".$lngstr['initdb_gscales_6_id'].", 5, '1', ".($g_db->qstr($lngstr['initdb_gscales_6_5_description'], get_magic_quotes_gpc())).", '0', '60', 0);",
	), 
	'groups' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."groups (
 groupid int NOT NULL IDENTITY,
 group_name varchar(255) NOT NULL default '',
 group_description varchar(255) NOT NULL default '',
 access_tests tinyint NOT NULL default '1',
 access_testmanager tinyint NOT NULL default '0',
 access_gradingsystems tinyint NOT NULL default '0',
 access_emailtemplates tinyint NOT NULL default '0',
 access_reporttemplates tinyint NOT NULL default '0',
 access_reportsmanager tinyint NOT NULL default '0',
 access_questionbank tinyint NOT NULL default '0',
 access_subjects tinyint NOT NULL default '0',
 access_groups tinyint NOT NULL default '0',
 access_users tinyint NOT NULL default '0',
 access_visitors tinyint NOT NULL default '0',
 access_config tinyint NOT NULL default '0',
 PRIMARY KEY (groupid)
);",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."groups ON;",
"INSERT INTO ".$srv_settings['table_prefix']."groups (groupid, group_name, group_description, access_tests, access_testmanager, access_gradingsystems, access_emailtemplates, access_reporttemplates, access_reportsmanager, access_questionbank, access_subjects, access_groups, access_users, access_visitors, access_config) VALUES (1, ".($g_db->qstr($lngstr['initdb_groups_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_groups_1_description'], get_magic_quotes_gpc())).", 2, 2, 2, 2, 2, 3, 2, 2, 2, 4, 2, 2);",
"INSERT INTO ".$srv_settings['table_prefix']."groups (groupid, group_name, group_description, access_tests, access_testmanager, access_gradingsystems, access_emailtemplates, access_reporttemplates, access_reportsmanager, access_questionbank, access_subjects, access_groups, access_users, access_visitors, access_config) VALUES (2, ".($g_db->qstr($lngstr['initdb_groups_2_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_groups_2_description'], get_magic_quotes_gpc())).", 2, 2, 2, 2, 2, 3, 2, 2, 1, 3, 1, 1);",
"INSERT INTO ".$srv_settings['table_prefix']."groups (groupid, group_name, group_description, access_tests, access_testmanager, access_gradingsystems, access_emailtemplates, access_reporttemplates, access_reportsmanager, access_questionbank, access_subjects, access_groups, access_users, access_visitors, access_config) VALUES (3, ".($g_db->qstr($lngstr['initdb_groups_3_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_groups_3_description'], get_magic_quotes_gpc())).", 1, 1, 0, 0, 0, 0, 2, 2, 0, 3, 0, 0);",
"INSERT INTO ".$srv_settings['table_prefix']."groups (groupid, group_name, group_description, access_tests, access_testmanager, access_gradingsystems, access_emailtemplates, access_reporttemplates, access_reportsmanager, access_questionbank, access_subjects, access_groups, access_users, access_visitors, access_config) VALUES (19, ".($g_db->qstr($lngstr['initdb_groups_19_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_groups_19_description'], get_magic_quotes_gpc())).", 2, 0, 0, 0, 0, 1, 0, 0, 0, 3, 0, 0);",
"INSERT INTO ".$srv_settings['table_prefix']."groups (groupid, group_name, group_description, access_tests, access_testmanager, access_gradingsystems, access_emailtemplates, access_reporttemplates, access_reportsmanager, access_questionbank, access_subjects, access_groups, access_users, access_visitors, access_config) VALUES (20, ".($g_db->qstr($lngstr['initdb_groups_20_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_groups_20_description'], get_magic_quotes_gpc())).", 2, 0, 0, 0, 0, 1, 0, 0, 0, 3, 0, 0);",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."groups OFF;",
	), 
	'groups_resources' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."groups_resources (
 groupid int NOT NULL default '0',
 resourceid int NOT NULL default '0',
 PRIMARY KEY (groupid,resourceid)
);",
	), 
	'groups_tests' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."groups_tests (
 groupid int NOT NULL default '0',
 testid int NOT NULL default '0',
 PRIMARY KEY (groupid,testid)
);",
	), 
	'groups_users' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."groups_users (
 groupid int NOT NULL default '0',
 userid int NOT NULL default '0',
 PRIMARY KEY (groupid,userid)
);",
"INSERT INTO ".$srv_settings['table_prefix']."groups_users (groupid, userid) VALUES (1, 1);",
"INSERT INTO ".$srv_settings['table_prefix']."groups_users (groupid, userid) VALUES (20, 2);",
	), 
	'questions' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."questions (
 questionid int NOT NULL IDENTITY,
 subjectid int NOT NULL default '1',
 question_time int NOT NULL default '0',
 question_pre text NOT NULL default '',
 question_post text NOT NULL default '',
 question_text text NOT NULL default '',
 question_points FLOAT NOT NULL default '1',
 question_solution text NOT NULL default '',
 question_type int NOT NULL default '0',
 question_type2 tinyint NOT NULL default '0',
 question_shufflea tinyint NOT NULL default '0',
 PRIMARY KEY (questionid)
);",
	), 
	'resources' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."resources (
 resourceid int NOT NULL IDENTITY,
 resource_testid int NOT NULL default '0',
 resource_name varchar(255) NOT NULL default '',
 resource_description varchar(255) NOT NULL default '',
 resource_url text NOT NULL default '',
 resource_html text NOT NULL default '',
 resource_datestart int NOT NULL default '0',
 resource_dateend int NOT NULL default '0',
 resource_forall tinyint NOT NULL default '1',
 resource_createdate int NOT NULL default '0',
 resource_enabled tinyint NOT NULL default '1',
 PRIMARY KEY (resourceid)
);",
	), 
	'results' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."results (
 resultid int NOT NULL IDENTITY,
 testid int NOT NULL default '0',
 userid int NOT NULL default '0',
 result_datestart int NOT NULL default '0',
 result_timespent int NOT NULL default '0',
 result_timeexceeded tinyint NOT NULL default '0',
 result_points FLOAT NOT NULL default '0',
 result_pointsmax FLOAT NOT NULL default '0',
 gscaleid int NOT NULL default '1',
 gscale_gradeid int NOT NULL default '0',
 PRIMARY KEY (resultid)
);",
	), 
	'results_answers' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."results_answers (
 result_answerid int NOT NULL default '0',
 resultid int NOT NULL default '0',
 questionid int NOT NULL default '0',
 test_questionid int NOT NULL default '0',
 result_answer_text text NOT NULL default '',
 result_answer_points FLOAT NOT NULL default '0',
 result_answer_iscorrect tinyint NOT NULL default '0',
 result_answer_feedback text NOT NULL default '',
 result_answer_timespent int NOT NULL default '0',
 result_answer_timeexceeded tinyint NOT NULL default '0',
 PRIMARY KEY (resultid,result_answerid)
);",
	), 
	'rtemplates' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."rtemplates (
 rtemplateid int NOT NULL IDENTITY,
 rtemplate_name varchar(255) NOT NULL default '',
 rtemplate_description varchar(255) NOT NULL default '',
 rtemplate_body text NOT NULL default '',
 PRIMARY KEY (rtemplateid)
);",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."rtemplates ON;",
"INSERT INTO ".$srv_settings['table_prefix']."rtemplates (rtemplateid, rtemplate_name, rtemplate_description, rtemplate_body) VALUES (1, ".($g_db->qstr($lngstr['initdb_rtemplates_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_rtemplates_1_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_rtemplates_1_body'], get_magic_quotes_gpc())).");",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."rtemplates OFF;",
	), 
	'subjects' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."subjects (
 subjectid int NOT NULL IDENTITY,
 subject_parent_subjectid int NOT NULL default '0',
 subject_name varchar(255) NOT NULL default '',
 subject_description varchar(255) NOT NULL default '',
 PRIMARY KEY (subjectid)
);",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."subjects ON;",
"INSERT INTO ".$srv_settings['table_prefix']."subjects (subjectid, subject_name, subject_description) VALUES (1, ".($g_db->qstr($lngstr['initdb_subjects_1_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_subjects_1_description'], get_magic_quotes_gpc())).");",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."subjects OFF;",
	), 
	'tests' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests (
 testid int NOT NULL IDENTITY,
 subjectid int NOT NULL default '1',
 rtemplateid int NOT NULL default '1',
 result_etemplateid int NOT NULL default '0',
 gscaleid int NOT NULL default '1',
 test_type INT DEFAULT '0' NOT NULL,
 test_name varchar(255) NOT NULL default '',
 test_code varchar(255) NOT NULL default '',
 test_description varchar(255) NOT NULL default '',
 test_instructions text NOT NULL default '',
 test_time int NOT NULL default '0',
 test_timeforceout tinyint NOT NULL default '0',
 test_timingq tinyint NOT NULL default '0',
 test_attempts int NOT NULL default '0',
 test_shuffleq tinyint NOT NULL default '0',
 test_shufflea tinyint NOT NULL default '0',
 test_sectionstype int NOT NULL default '0',
 test_qsperpage tinyint NOT NULL default '1',
 test_showqfeedback tinyint NOT NULL default '1',
 test_canreview tinyint NOT NULL default '0',
 test_result_showanswers tinyint NOT NULL default '0',
 test_result_showpoints tinyint NOT NULL default '1',
 test_result_showgrade tinyint NOT NULL default '0',
 test_result_showgradefeedback TINYINT NOT NULL default '0',
 test_result_showhtml tinyint NOT NULL default '0',
 test_result_showpdf tinyint NOT NULL default '0',
 test_result_rtemplateid INT DEFAULT '0' NOT NULL,
 test_reportgradecondition tinyint NOT NULL default '0',
 test_result_email varchar(255) NOT NULL default '',
 test_result_emailtouser tinyint NOT NULL default '0',
 test_datestart int NOT NULL default '0',
 test_dateend int NOT NULL default '0',
 test_prevtestid INT DEFAULT '0' NOT NULL,
 test_nexttestid INT DEFAULT '0' NOT NULL,
 test_contentprotection tinyint NOT NULL default '0',
 test_notes text NOT NULL default '',
 test_price int NOT NULL default '0',
 test_other_repeatuntilcorrect TINYINT NOT NULL default '0',
 test_forall tinyint NOT NULL default '1',
 test_createdate int NOT NULL default '0',
 test_enabled tinyint NOT NULL default '1',
 PRIMARY KEY (testid)
);",
	), 
	'tests_attempts' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests_attempts (
 testid int NOT NULL default '0',
 userid int NOT NULL default '0',
 test_attempt_count int NOT NULL default '0',
 PRIMARY KEY (testid,userid)
);",
	), 
	'tests_questions' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests_questions (
 test_questionid int NOT NULL default '0',
 testid int NOT NULL default '0',
 test_sectionid INT NOT NULL DEFAULT '0',
 questionid int NOT NULL default '0',
 PRIMARY KEY (testid,test_questionid)
);",
	), 
	'tests_own' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests_own (
 testid int NOT NULL default '0',
 userid int NOT NULL default '0',
 test_own_expiredate int NOT NULL default '0',
 PRIMARY KEY (testid,userid)
);",
	), 
	'users' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."users (
 userid int NOT NULL IDENTITY,
 user_name varchar(255) NOT NULL default '',
 user_passhash varchar(32) NOT NULL default '',
 user_checkword VARCHAR(32) DEFAULT '' NOT NULL,
 user_email varchar(255) NOT NULL default '',
 user_title varchar(32) NOT NULL default '',
 user_firstname varchar(255) NOT NULL default '',
 user_lastname varchar(255) NOT NULL default '',
 user_middlename varchar(255) NOT NULL default '',
 user_address text NOT NULL default '',
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
 user_gender tinyint NOT NULL default '0',
 user_birthday datetime NOT NULL default '19000101',
 user_husbandwife varchar(255) NOT NULL default '',
 user_children varchar(255) NOT NULL default '',
 user_trainer varchar(255) NOT NULL default '',
 user_photo varchar(255) NOT NULL default '',
 user_company varchar(255) NOT NULL default '',
 user_cposition varchar(255) NOT NULL default '',
 user_department varchar(255) NOT NULL default '',
 user_coffice varchar(255) NOT NULL default '',
 user_caddress text NOT NULL default '',
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
 user_ufield1 text NOT NULL default '',
 user_ufield2 text NOT NULL default '',
 user_ufield3 text NOT NULL default '',
 user_ufield4 text NOT NULL default '',
 user_ufield5 text NOT NULL default '',
 user_ufield6 text NOT NULL default '',
 user_ufield7 text NOT NULL default '',
 user_ufield8 text NOT NULL default '',
 user_ufield9 text NOT NULL default '',
 user_ufield10 text NOT NULL default '',
 user_notes text NOT NULL default '',
 user_joindate int NOT NULL default '0',
 user_logindate int NOT NULL default '0',
 user_expiredate int NOT NULL default '0',
 user_enabled tinyint NOT NULL default '1',
 PRIMARY KEY (userid)
);",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."users ON;",
"INSERT INTO ".$srv_settings['table_prefix']."users (userid, user_name, user_passhash, user_email, user_firstname, user_lastname, user_middlename, user_birthday, user_joindate, user_logindate, user_expiredate, user_enabled) VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_users_1_firstname'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_users_1_lastname'], get_magic_quotes_gpc())).", '', '19000101', ".$i_now.", ".$i_now.", 0, 1);",
"INSERT INTO ".$srv_settings['table_prefix']."users (userid, user_name, user_passhash, user_email, user_firstname, user_lastname, user_middlename, user_birthday, user_joindate, user_logindate, user_expiredate, user_enabled) VALUES (2, 'guest', '36ae6fd873e5b378211807c1a3f35521', ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_users_2_firstname'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_users_2_lastname'], get_magic_quotes_gpc())).", '', '19000101', ".$i_now.", ".$i_now.", 0, 0);",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."users OFF;",
	), 
	'visitors' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."visitors (
 visitorid int NOT NULL IDENTITY,
 startdate int NOT NULL default '0',
 enddate int NOT NULL default '0',
 userid int NOT NULL default '0',
 ip1 tinyint NOT NULL default '0',
 ip2 tinyint NOT NULL default '0',
 ip3 tinyint NOT NULL default '0',
 ip4 tinyint NOT NULL default '0',
 host varchar(100) NOT NULL default '',
 referer varchar(255) NOT NULL default '',
 useragent varchar(255) NOT NULL default '',
 hits int NOT NULL default '0',
 inurl varchar(255) NOT NULL default '',
 outurl varchar(255) NOT NULL default '',
 PRIMARY KEY (visitorid)
);",
	),
);
$i_queries_010009 = array ( 
	'config' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."config (
 configid int NOT NULL default '0',
 config_name varchar(50) NOT NULL default '',
 config_value text NOT NULL default '',
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
"ALTER TABLE ".$srv_settings['table_prefix']."groups ADD access_visitors tinyint NOT NULL default '0';",
"ALTER TABLE ".$srv_settings['table_prefix']."groups ADD access_config tinyint NOT NULL default '0';",
"UPDATE ".$srv_settings['table_prefix']."groups SET access_visitors=2 WHERE groupid=".SYSTEM_GROUP_ADMIN.";",
"UPDATE ".$srv_settings['table_prefix']."groups SET access_config=2 WHERE groupid=".SYSTEM_GROUP_ADMIN.";",
	), 
	'results_answers' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."results_answers ADD result_answer_feedback text NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."results_answers ADD result_answer_timeexceeded tinyint NOT NULL default '0';",
	), 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_timeforceout tinyint NOT NULL default '0';",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_showqfeedback tinyint NOT NULL default '1';",
	), 
	'users' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_expiredate int NOT NULL default '0';",
	), 
	'visitors' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."visitors (
 visitorid int NOT NULL IDENTITY,
 startdate int NOT NULL default '0',
 enddate int NOT NULL default '0',
 userid int NOT NULL default '0',
 ip1 tinyint NOT NULL default '0',
 ip2 tinyint NOT NULL default '0',
 ip3 tinyint NOT NULL default '0',
 ip4 tinyint NOT NULL default '0',
 host varchar(100) NOT NULL default '',
 referer varchar(255) NOT NULL default '',
 useragent varchar(255) NOT NULL default '',
 hits int NOT NULL default '0',
 inurl varchar(255) NOT NULL default '',
 outurl varchar(255) NOT NULL default '',
 PRIMARY KEY (visitorid)
);",
	),
);
$i_queries_010202 = array (
	 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_attempts int NOT NULL default '0';",
	),
	 
	'tests_attempts' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests_attempts (
 testid int NOT NULL default '0',
 userid int NOT NULL default '0',
 test_attempt_count int NOT NULL default '0',
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
"ALTER TABLE ".$srv_settings['table_prefix']."groups ADD access_reporttemplates tinyint NOT NULL default '0';",
	),
	 
	'tests' => array( 
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_reportgradecondition tinyint NOT NULL default '0';",
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
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_title varchar(32) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_city varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_state varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_zip varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_country varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_phone varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_fax varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_mobile varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_pager varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_ipphone varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_webpage varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_icq varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_msn varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_aol varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_gender tinyint NOT NULL default '0';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_birthday datetime NOT NULL default '19000101';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_husbandwife varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_children varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_photo varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_cposition varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_coffice varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_caddress text NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_ccity varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_cstate varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_czip varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_ccountry varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_cphone varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_cfax varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_cmobile varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_cpager varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_cipphone varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_cwebpage varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_cphoto varchar(255) NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_ufield5 text NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_ufield6 text NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_ufield7 text NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_ufield8 text NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_ufield9 text NOT NULL default '';",
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_ufield10 text NOT NULL default '';",
	),
	 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1122210319' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.4.5' WHERE configid=2;",
	),
);
$i_queries_010405 = array (
	 
	'etemplates' => array(
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."etemplates ON;",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (2, ".($g_db->qstr($lngstr['initdb_etemplates_2_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_2_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (3, ".($g_db->qstr($lngstr['initdb_etemplates_3_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_3_body'], get_magic_quotes_gpc())).");",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (4, ".($g_db->qstr($lngstr['initdb_etemplates_4_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_4_body'], get_magic_quotes_gpc())).");",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."etemplates OFF;",
	),
	 
	'gscales_grades' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."gscales_grades ADD grade_feedback text NOT NULL default '';",
	),
	 
	'questions' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."questions ADD question_shufflea TINYINT NOT NULL DEFAULT '0';",
	),
	 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_type INT DEFAULT '0' NOT NULL;",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_prevtestid INT DEFAULT '0' NOT NULL;",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_nexttestid INT DEFAULT '0' NOT NULL;",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_result_rtemplateid INT DEFAULT '0' NOT NULL;",
	),
	 
	'users' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_checkword VARCHAR(32) DEFAULT '' NOT NULL;",
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
 groupid int NOT NULL default '0',
 resourceid int NOT NULL default '0',
 PRIMARY KEY (groupid,resourceid)
);",
	), 
	'resources' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."resources (
 resourceid int NOT NULL IDENTITY,
 resource_testid int NOT NULL default '0',
 resource_name varchar(255) NOT NULL default '',
 resource_description varchar(255) NOT NULL default '',
 resource_url text NOT NULL default '',
 resource_html text NOT NULL default '',
 resource_datestart int NOT NULL default '0',
 resource_dateend int NOT NULL default '0',
 resource_forall tinyint NOT NULL default '1',
 resource_createdate int NOT NULL default '0',
 resource_enabled tinyint NOT NULL default '1',
 PRIMARY KEY (resourceid)
);",
	),
  
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_price INT DEFAULT '0' NOT NULL;",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_code varchar(255) NOT NULL default '';",
	), 
	'tests_own' => array(
"CREATE TABLE ".$srv_settings['table_prefix']."tests_own (
 testid int NOT NULL default '0',
 userid int NOT NULL default '0',
 PRIMARY KEY (testid,userid)
);",
	), 
	'users' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."users ADD user_budget int NOT NULL default '0';",
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
"ALTER TABLE ".$srv_settings['table_prefix']."tests_own ADD test_own_expiredate int NOT NULL default '0';",
	), 
	'config' => array(
"INSERT INTO ".$srv_settings['table_prefix']."config (configid, config_name, config_value) VALUES (92, 'default_language', 'en');",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1160377957' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.9.27' WHERE configid=2;",
	),
);
$i_queries_010927 = array ( 
	'tests_own' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests_own ADD test_own_expiredate INT NOT NULL DEFAULT '0';",
	), 
	'tests_questions' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests_questions ADD test_sectionid INT NOT NULL DEFAULT '0';",
	), 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1165465355' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.10.7' WHERE configid=2;",
	),
);
$i_queries_011007 = array (
	 
	'etemplates' => array(
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."etemplates ON;",
"INSERT INTO ".$srv_settings['table_prefix']."etemplates (etemplateid, etemplate_name, etemplate_description, etemplate_from, etemplate_subject, etemplate_body) VALUES (5, ".($g_db->qstr($lngstr['initdb_etemplates_5_name'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_description'], get_magic_quotes_gpc())).", ".($g_db->qstr($srv_settings['default_email'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_subject'], get_magic_quotes_gpc())).", ".($g_db->qstr($lngstr['initdb_etemplates_5_body'], get_magic_quotes_gpc())).");",
"SET IDENTITY_INSERT ".$srv_settings['table_prefix']."etemplates OFF;",
	),
	 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_contentprotection tinyint NOT NULL default '0';",
	), 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1168332559' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.10.9' WHERE configid=2;",
	),
);
$i_queries_011009 = array (
	 
	' remove constraints' => array(
"DECLARE @df SYSNAME
SET @df =
(SELECT OBJECT_NAME(cdefault)
FROM SYSCOLUMNS
WHERE id = OBJECT_ID('dbo.".$srv_settings['table_prefix']."questions')
AND name = 'question_points')
IF @df IS NOT NULL
BEGIN
EXEC sp_rename @df, 'df_to_drop', 'OBJECT'
ALTER TABLE dbo.".$srv_settings['table_prefix']."questions DROP CONSTRAINT df_to_drop
END",
"DECLARE @df SYSNAME
SET @df =
(SELECT OBJECT_NAME(cdefault)
FROM SYSCOLUMNS
WHERE id = OBJECT_ID('dbo.".$srv_settings['table_prefix']."results')
AND name = 'result_points')
IF @df IS NOT NULL
BEGIN
EXEC sp_rename @df, 'df_to_drop', 'OBJECT'
ALTER TABLE dbo.".$srv_settings['table_prefix']."results DROP CONSTRAINT df_to_drop
END",
"DECLARE @df SYSNAME
SET @df =
(SELECT OBJECT_NAME(cdefault)
FROM SYSCOLUMNS
WHERE id = OBJECT_ID('dbo.".$srv_settings['table_prefix']."results')
AND name = 'result_pointsmax')
IF @df IS NOT NULL
BEGIN
EXEC sp_rename @df, 'df_to_drop', 'OBJECT'
ALTER TABLE dbo.".$srv_settings['table_prefix']."results DROP CONSTRAINT df_to_drop
END",
"DECLARE @df SYSNAME
SET @df =
(SELECT OBJECT_NAME(cdefault)
FROM SYSCOLUMNS
WHERE id = OBJECT_ID('dbo.".$srv_settings['table_prefix']."results_answers')
AND name = 'result_answer_points')
IF @df IS NOT NULL
BEGIN
EXEC sp_rename @df, 'df_to_drop', 'OBJECT'
ALTER TABLE dbo.".$srv_settings['table_prefix']."results_answers DROP CONSTRAINT df_to_drop
END",
	),
	 
	'questions' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."questions ALTER COLUMN question_points FLOAT NOT NULL;",
"ALTER TABLE ".$srv_settings['table_prefix']."questions ADD DEFAULT '1' FOR question_points;",
	),
	 
	'results' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."results ALTER COLUMN result_points FLOAT NOT NULL;",
"ALTER TABLE ".$srv_settings['table_prefix']."results ADD DEFAULT '0' FOR result_points;",
"ALTER TABLE ".$srv_settings['table_prefix']."results ALTER COLUMN result_pointsmax FLOAT NOT NULL;",
"ALTER TABLE ".$srv_settings['table_prefix']."results ADD DEFAULT '0' FOR result_pointsmax;",
	),
	 
	'results_answers' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."results_answers ALTER COLUMN result_answer_points FLOAT NOT NULL;",
"ALTER TABLE ".$srv_settings['table_prefix']."results_answers ADD DEFAULT '0' FOR result_answer_points;",
	),
	 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_result_showhtml TINYINT NOT NULL DEFAULT '0';",
	), 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1172110573' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.11.5' WHERE configid=2;",
	),
);
$i_queries_011105 = array (
	 
	'questions' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."questions ADD question_type2 TINYINT DEFAULT '0' NOT NULL;",
	),
	 
	'tests' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_canreview TINYINT NOT NULL default '0';",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_result_showgradefeedback TINYINT NOT NULL default '0';",
"ALTER TABLE ".$srv_settings['table_prefix']."tests ADD test_other_repeatuntilcorrect TINYINT NOT NULL default '0';",
	), 
	'config' => array(
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1172236935' WHERE configid=1;",
"UPDATE ".$srv_settings['table_prefix']."config SET config_value='1.11.7' WHERE configid=2;",
	),
);
$i_queries_011107 = array (
	 
	'subjects' => array(
"ALTER TABLE ".$srv_settings['table_prefix']."subjects ADD subject_parent_subjectid INT NOT NULL DEFAULT '0';",
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
require_once($DOCUMENT_ADDONS.'install-db/install-db-mssql.inc.php');
?>