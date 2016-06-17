/*
Navicat MySQL Data Transfer

Source Server         : VoQuocDuoc
Source Server Version : 50625
Source Host           : 127.0.0.1:3306
Source Database       : tracnghiem

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-06-17 23:45:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tracnghiem_answers
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_answers`;
CREATE TABLE `tracnghiem_answers` (
  `answerid` int(10) unsigned NOT NULL DEFAULT '0',
  `questionid` int(10) unsigned NOT NULL DEFAULT '0',
  `answer_text` text COLLATE utf8_unicode_ci NOT NULL,
  `answer_feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `answer_correct` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `answer_percents` float NOT NULL DEFAULT '0',
  `isregexp` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `iscasesensitive` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`questionid`,`answerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_answers
-- ----------------------------
INSERT INTO `tracnghiem_answers` VALUES ('1', '1', 'duoc', '', '1', '100', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('2', '1', 'vo', '', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('3', '1', 'Ä‘', 'quoc', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('4', '1', 'Ä‘', '', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('1', '2', 'fdsafsaf', 'fdsaf', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('2', '2', 'dsafsa', 'fsdafsa', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('3', '2', 'fdsafdsaf', 'dsaf', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('4', '2', 'fsadfdsaf', 'dsafdsafs', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('1', '3', 'dsafsadff', 'sÃ dsafsa', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('2', '3', 'dsafsa', 'fdsfdsa', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('3', '3', 'fdsafds', 'fdsafsa', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('1', '4', 'dfghf', 'fghfgh', '1', '100', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('2', '4', 'fdghdf', 'dfghf', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('3', '4', 'fghf', 'fghf', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('4', '4', 'hfdgh', 'gfhdf', '0', '0', '0', '1');
INSERT INTO `tracnghiem_answers` VALUES ('5', '4', 'hdgfh', 'gfhdf', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for tracnghiem_config
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_config`;
CREATE TABLE `tracnghiem_config` (
  `configid` int(10) unsigned NOT NULL DEFAULT '0',
  `config_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `config_value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`configid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_config
-- ----------------------------
INSERT INTO `tracnghiem_config` VALUES ('1', 'igttimestamp', '1185953317');
INSERT INTO `tracnghiem_config` VALUES ('2', 'igtversion', '2.1.0');
INSERT INTO `tracnghiem_config` VALUES ('3', 'can_register', '0');
INSERT INTO `tracnghiem_config` VALUES ('4', 'reg_intro', '');
INSERT INTO `tracnghiem_config` VALUES ('5', 'reg_username', '4');
INSERT INTO `tracnghiem_config` VALUES ('6', 'reg_password', '4');
INSERT INTO `tracnghiem_config` VALUES ('7', 'reg_email', '4');
INSERT INTO `tracnghiem_config` VALUES ('8', 'reg_firstname', '2');
INSERT INTO `tracnghiem_config` VALUES ('9', 'reg_lastname', '2');
INSERT INTO `tracnghiem_config` VALUES ('10', 'reg_middlename', '0');
INSERT INTO `tracnghiem_config` VALUES ('11', 'reg_address', '0');
INSERT INTO `tracnghiem_config` VALUES ('12', 'reg_city', '0');
INSERT INTO `tracnghiem_config` VALUES ('13', 'reg_state', '0');
INSERT INTO `tracnghiem_config` VALUES ('14', 'reg_zip', '0');
INSERT INTO `tracnghiem_config` VALUES ('15', 'reg_country', '0');
INSERT INTO `tracnghiem_config` VALUES ('16', 'reg_phone', '0');
INSERT INTO `tracnghiem_config` VALUES ('17', 'reg_fax', '0');
INSERT INTO `tracnghiem_config` VALUES ('18', 'reg_mobile', '0');
INSERT INTO `tracnghiem_config` VALUES ('19', 'reg_pager', '0');
INSERT INTO `tracnghiem_config` VALUES ('20', 'reg_ipphone', '0');
INSERT INTO `tracnghiem_config` VALUES ('21', 'reg_webpage', '0');
INSERT INTO `tracnghiem_config` VALUES ('22', 'reg_icq', '0');
INSERT INTO `tracnghiem_config` VALUES ('23', 'reg_msn', '0');
INSERT INTO `tracnghiem_config` VALUES ('24', 'reg_gender', '0');
INSERT INTO `tracnghiem_config` VALUES ('25', 'reg_birthday', '0');
INSERT INTO `tracnghiem_config` VALUES ('26', 'reg_photo', '0');
INSERT INTO `tracnghiem_config` VALUES ('27', 'reg_company', '0');
INSERT INTO `tracnghiem_config` VALUES ('28', 'reg_jobtitle', '0');
INSERT INTO `tracnghiem_config` VALUES ('29', 'reg_department', '0');
INSERT INTO `tracnghiem_config` VALUES ('30', 'reg_office', '0');
INSERT INTO `tracnghiem_config` VALUES ('31', 'reg_caddress', '0');
INSERT INTO `tracnghiem_config` VALUES ('32', 'reg_ccity', '0');
INSERT INTO `tracnghiem_config` VALUES ('33', 'reg_cstate', '0');
INSERT INTO `tracnghiem_config` VALUES ('34', 'reg_czip', '0');
INSERT INTO `tracnghiem_config` VALUES ('35', 'reg_ccountry', '0');
INSERT INTO `tracnghiem_config` VALUES ('36', 'reg_cphone', '0');
INSERT INTO `tracnghiem_config` VALUES ('37', 'reg_cfax', '0');
INSERT INTO `tracnghiem_config` VALUES ('38', 'reg_cmobile', '0');
INSERT INTO `tracnghiem_config` VALUES ('39', 'reg_cpager', '0');
INSERT INTO `tracnghiem_config` VALUES ('40', 'reg_cipphone', '0');
INSERT INTO `tracnghiem_config` VALUES ('41', 'reg_cwebpage', '0');
INSERT INTO `tracnghiem_config` VALUES ('42', 'reg_trainer', '0');
INSERT INTO `tracnghiem_config` VALUES ('43', 'reg_userfield1', '0');
INSERT INTO `tracnghiem_config` VALUES ('44', 'reg_caption_userfield1', '');
INSERT INTO `tracnghiem_config` VALUES ('45', 'reg_userfield2', '0');
INSERT INTO `tracnghiem_config` VALUES ('46', 'reg_caption_userfield2', '');
INSERT INTO `tracnghiem_config` VALUES ('47', 'reg_userfield3', '0');
INSERT INTO `tracnghiem_config` VALUES ('48', 'reg_caption_userfield3', '');
INSERT INTO `tracnghiem_config` VALUES ('49', 'reg_userfield4', '0');
INSERT INTO `tracnghiem_config` VALUES ('50', 'reg_caption_userfield4', '');
INSERT INTO `tracnghiem_config` VALUES ('51', 'list_length', '3');
INSERT INTO `tracnghiem_config` VALUES ('52', 'store_logs', '1');
INSERT INTO `tracnghiem_config` VALUES ('53', 'editor_type', '3');
INSERT INTO `tracnghiem_config` VALUES ('54', 'upon_registration', '0');
INSERT INTO `tracnghiem_config` VALUES ('55', 'reg_title', '0');
INSERT INTO `tracnghiem_config` VALUES ('56', 'reg_aol', '0');
INSERT INTO `tracnghiem_config` VALUES ('57', 'reg_husbandwife', '0');
INSERT INTO `tracnghiem_config` VALUES ('58', 'reg_children', '0');
INSERT INTO `tracnghiem_config` VALUES ('59', 'reg_cphoto', '0');
INSERT INTO `tracnghiem_config` VALUES ('60', 'reg_userfield5', '0');
INSERT INTO `tracnghiem_config` VALUES ('61', 'reg_caption_userfield5', '');
INSERT INTO `tracnghiem_config` VALUES ('62', 'reg_userfield6', '0');
INSERT INTO `tracnghiem_config` VALUES ('63', 'reg_caption_userfield6', '');
INSERT INTO `tracnghiem_config` VALUES ('64', 'reg_userfield7', '0');
INSERT INTO `tracnghiem_config` VALUES ('65', 'reg_caption_userfield7', '');
INSERT INTO `tracnghiem_config` VALUES ('66', 'reg_userfield8', '0');
INSERT INTO `tracnghiem_config` VALUES ('67', 'reg_caption_userfield8', '');
INSERT INTO `tracnghiem_config` VALUES ('68', 'reg_userfield9', '0');
INSERT INTO `tracnghiem_config` VALUES ('69', 'reg_caption_userfield9', '');
INSERT INTO `tracnghiem_config` VALUES ('70', 'reg_userfield10', '0');
INSERT INTO `tracnghiem_config` VALUES ('71', 'reg_caption_userfield10', '');
INSERT INTO `tracnghiem_config` VALUES ('72', 'reg_type_userfield1', '0');
INSERT INTO `tracnghiem_config` VALUES ('73', 'reg_values_userfield1', '');
INSERT INTO `tracnghiem_config` VALUES ('74', 'reg_type_userfield2', '0');
INSERT INTO `tracnghiem_config` VALUES ('75', 'reg_values_userfield2', '');
INSERT INTO `tracnghiem_config` VALUES ('76', 'reg_type_userfield3', '0');
INSERT INTO `tracnghiem_config` VALUES ('77', 'reg_values_userfield3', '0');
INSERT INTO `tracnghiem_config` VALUES ('78', 'reg_type_userfield4', '0');
INSERT INTO `tracnghiem_config` VALUES ('79', 'reg_values_userfield4', '');
INSERT INTO `tracnghiem_config` VALUES ('80', 'reg_type_userfield5', '0');
INSERT INTO `tracnghiem_config` VALUES ('81', 'reg_values_userfield5', '');
INSERT INTO `tracnghiem_config` VALUES ('82', 'reg_type_userfield6', '0');
INSERT INTO `tracnghiem_config` VALUES ('83', 'reg_values_userfield6', '');
INSERT INTO `tracnghiem_config` VALUES ('84', 'reg_type_userfield7', '0');
INSERT INTO `tracnghiem_config` VALUES ('85', 'reg_values_userfield7', '');
INSERT INTO `tracnghiem_config` VALUES ('86', 'reg_type_userfield8', '0');
INSERT INTO `tracnghiem_config` VALUES ('87', 'reg_values_userfield8', '');
INSERT INTO `tracnghiem_config` VALUES ('88', 'reg_type_userfield9', '0');
INSERT INTO `tracnghiem_config` VALUES ('89', 'reg_values_userfield9', '');
INSERT INTO `tracnghiem_config` VALUES ('90', 'reg_type_userfield10', '0');
INSERT INTO `tracnghiem_config` VALUES ('91', 'reg_values_userfield10', '');
INSERT INTO `tracnghiem_config` VALUES ('92', 'default_language', 'en');
INSERT INTO `tracnghiem_config` VALUES ('93', 'version', '23f7dbd2c67658ce8ceffc1ce97bbba2');

-- ----------------------------
-- Table structure for tracnghiem_etemplates
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_etemplates`;
CREATE TABLE `tracnghiem_etemplates` (
  `etemplateid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `etemplate_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `etemplate_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `etemplate_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `etemplate_subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `etemplate_body` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`etemplateid`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_etemplates
-- ----------------------------
INSERT INTO `tracnghiem_etemplates` VALUES ('1', 'Káº¿ quáº£ Kiá»ƒm tra  (Máº·c Ä‘á»‹nh)', 'Khung máº«u Email káº¿t quáº£ kiá»ƒm tra(Máº·c Ä‘á»‹nh)', 'voquocduoc@gmail.com', '[TÃ¢nPhÃº.Net_Tráº¯cNghiá»‡m]-[VTL_Test] - BÃ¡o cÃ¡o Máº«u', 'ChÃ o [USER_FIRST_NAME],\r\n\r\ná»Ÿ Ä‘Ã¢y nhá»¯ng káº¿t quáº£ tá»« bÃ i kiá»ƒm (cá»§a) cÃ¡c báº¡n:\r\n\r\nTÃªn bÃ i kiá»ƒm: [TEST_NAME]\r\nNgÃ y: [RESULT_DATE]\r\nThá»i gian: [RESULT_TIME_SPENT]\r\nThá»i gian Ä‘Æ°á»£c vÆ°á»£t hÆ¡n: [RESULT_TIME_EXCEEDED]\r\n\r\n[RESULT_DETAILED_1]\r\n\r\nThá»•ng Ä‘iá»ƒm: [RESULT_POINTS_SCORED] / [RESULT_POINTS_POSSIBLE] ([RESULT_PERCENTS]%)\r\nXáº¿p loáº¡i: [RESULT_GRADE]\r\n\r\nThÃ¢n chÃ o,chÃºc báº¡n há»c tá»‘t vÃ  thÃ nh cÃ´ng trong tÆ°Æ¡ng lai !\r\nAdmin: VÅ© Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ');
INSERT INTO `tracnghiem_etemplates` VALUES ('2', 'TÃ i khoáº£n Ä‘Äƒng kÃ½', 'khung máº«u email TÃ i khoáº£n Ä‘Äƒng kÃ½ ', 'voquocduoc@gmail.com', 'Nhá»¯ng chi tiáº¿t ÄÄƒng kÃ½', 'ChÃ o [USER_FIRST_NAME],\r\n\r\nCáº£m Æ¡n báº¡n Ä‘Äƒng kÃ½ Vá»›i TÃ¢nPhÃº.Net (http://tracnghiem.tanphu.net).\r\n\r\nUsername: [USERNAME]\r\nPassword: [USER_PASSWORD]\r\n\r\nBáº¡n cÃ³ thá»ƒ Ä‘Äƒng nháº­p tá»›i tÃ i khoáº£n (cá»§a) cÃ¡c báº¡n báº¥t ká»³ thá»i gian nÃ o Ä‘áº¿n thÄƒm:\r\n\r\n[[TÃ¢nPhÃº.Net_Tráº¯cNghiá»‡m]-[VTL_Test]_URL]\r\n\r\nThÃ¢n chÃ o,chÃºc báº¡n há»c tá»‘t vÃ  thÃ nh cÃ´ng trong tÆ°Æ¡ng lai !\r\nAdmin: VÅ© Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ');
INSERT INTO `tracnghiem_etemplates` VALUES ('3', 'Account Sign Up (Email Activation)', 'TÃ i khoáº£n Ä‘Äƒng kÃ½ khung máº«u email', 'voquocduoc@gmail.com', 'Sá»± KÃ­ch hoáº¡t TÃ i khoáº£n', 'ChÃ o [USER_FIRST_NAME],\r\n\r\nCáº£m Æ¡n báº¡n Ä‘Äƒng kÃ½ Vá»›i TÃ¢nPhÃº.Net (http://tracnghiem.tanphu.net).\r\n\r\nUsername: [USERNAME]\r\nPassword: [USER_PASSWORD]\r\n\r\nTiáº¿p theo báº¡n hÃ£y lÃ m nhÆ° sau :\r\n\r\nÄá»ƒ hoÃ n thÃ nh viá»‡c kÃ­ch hoáº¡t tÃ i khoáº£n (cá»§a) cÃ¡c báº¡n, xin kÃ­ch vÃ o má»‘i liÃªn káº¿t sau Ä‘Ã¢y\r\n\r\n[[TÃ¢nPhÃº.Net_Tráº¯cNghiá»‡m]-[VTL_Test]_URL]/account.php?action=activate&userid=[USER_ID]&checkword=[USER_CHECKWORD]\r\n\r\nThÃ¢n chÃ o,chÃºc báº¡n há»c tá»‘t vÃ  thÃ nh cÃ´ng trong tÆ°Æ¡ng lai !\r\nAdmin: VÅ© Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ');
INSERT INTO `tracnghiem_etemplates` VALUES ('4', 'TÃ i khoáº£n Ä‘Ã£ ÄÆ°á»£c kÃ­ch hoáº¡t', 'Khung máº«u email Ä‘Æ°á»£c kÃ­ch hoáº¡t TÃ i khoáº£n', 'voquocduoc@gmail.com', 'TÃ i khoáº£n ÄÆ°á»£c kÃ­ch hoáº¡t', 'ThÃ¢n máº¿n [USER_FIRST_NAME],\r\n\r\nTÃ i khoáº£n (cá»§a) CÃ¡c báº¡n Ä‘Ã£ Ä‘Æ°á»£c kÃ­ch hoáº¡t má»™t cÃ¡ch thÃ nh cÃ´ng .\r\n\r\nBáº¡n cÃ³ thá»ƒ Ä‘Äƒng nháº­p tá»›i tÃ i khoáº£n (cá»§a) cÃ¡c báº¡n báº¥t ká»³ thá»i gian nÃ o Ä‘áº¿n thÄƒm:\r\n\r\n[[TÃ¢nPhÃº.Net_Tráº¯cNghiá»‡m]-[VTL_Test]_URL]\r\n\r\nThÃ¢n chÃ o,chÃºc báº¡n há»c tá»‘t vÃ  thÃ nh cÃ´ng trong tÆ°Æ¡ng lai !\r\nAdmin: VÅ© Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ');
INSERT INTO `tracnghiem_etemplates` VALUES ('5', 'TÃ i khoáº£n Ä‘Äƒng kÃ½ ((cho) NgÆ°á»i quáº£n trá»‹)', 'TÃ i khoáº£n Ä‘Äƒng kÃ½ khung máº«u email', 'voquocduoc@gmail.com', 'Nhá»¯ng chi tiáº¿t ÄÄƒng kÃ½ NgÆ°á»i sá»­ dá»¥ng Má»›i', 'ThÃ¢n máº¿n Administrator,\r\n\r\nNhá»¯ng chi tiáº¿t Ä‘Äƒng kÃ½ ngÆ°á»i sá»­ dá»¥ng Má»›i:\r\n\r\nHá» [USER_FIRST_NAME]\r\nTÃªn: [USER_LAST_NAME]\r\nEmail: [USER_EMAIL]\r\nUsername: [USERNAME]\r\nPassword: [USER_PASSWORD]\r\n\r\nThÃ¢n chÃ o,chÃºc báº¡n há»c tá»‘t vÃ  thÃ nh cÃ´ng trong tÆ°Æ¡ng lai !\r\nAdmin: VÅ© Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ');
INSERT INTO `tracnghiem_etemplates` VALUES ('50', 'KhÃ´i phá»¥c máº­t kháº©u', 'Password recovery email template', 'voquocduoc@gmail.com', 'KhÃ´i phá»¥c máº­t kháº©u', 'Xin chÃ o [USER_FIRST_NAME],\r\n\r\nChÃºng tÃ´i Ä‘Ã£ táº¡o máº­t kháº©u má»›i cho báº¡n.\r\n\r\nUsername: [USERNAME]\r\nMÃ¢t kháº©u má»›i: [USER_PASSWORD]\r\n\r\nThÃ¢n chÃ o,chÃºc báº¡n há»c tá»‘t vÃ  thÃ nh cÃ´ng trong tÆ°Æ¡ng lai !\r\nAdmin: VÅ© Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ');

-- ----------------------------
-- Table structure for tracnghiem_groups
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_groups`;
CREATE TABLE `tracnghiem_groups` (
  `groupid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `group_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `access_tests` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `access_testmanager` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access_gradingsystems` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access_emailtemplates` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access_reporttemplates` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access_reportsmanager` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access_questionbank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access_subjects` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access_groups` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access_users` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access_visitors` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access_config` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_groups
-- ----------------------------
INSERT INTO `tracnghiem_groups` VALUES ('1', 'Administrators', 'Nhá»¯ng ngÆ°á»i quáº£n trá»‹ cÃ³ sá»± truy nháº­p khÃ´ng giá»›i háº¡n vÃ  Ä‘áº§y Ä‘á»§ (nhÃ³m há»‡ thá»‘ng)', '2', '2', '2', '2', '2', '3', '2', '2', '2', '4', '2', '2');
INSERT INTO `tracnghiem_groups` VALUES ('2', 'GiÃ¡o viÃªn', 'Nhá»¯ng tháº§y giÃ¡o sá»Ÿ há»¯u Ä‘a sá»‘ quyá»n hÃ nh chÃ­nh vá»›i má»™t sá»‘ sá»± háº¡n cháº¿ ( NhÃ³m há»‡ thá»‘ng)', '2', '2', '2', '2', '2', '3', '2', '2', '1', '3', '1', '1');
INSERT INTO `tracnghiem_groups` VALUES ('3', 'Thao tÃ¡c viÃªn', 'Nhá»¯ng thÃ nh viÃªn trong nhÃ³m nÃ y Ä‘Æ°á»£c ban quyá»n Ä‘á»ƒ táº¡o ra/ nhá»¯ng cÃ¢u há»i soáº¡n tháº£o (nhÃ³m há»‡ thá»‘ng)', '1', '1', '0', '0', '0', '0', '2', '2', '0', '3', '0', '0');
INSERT INTO `tracnghiem_groups` VALUES ('19', 'NgÆ°á»i dÃ¹ng', 'Nhá»¯ng ngÆ°á»i sá»­ dá»¥ng bá»‹ ngÄƒn ngá»«a lÃ m sáºµn Ä‘áº¿n tá»« báº¥t ká»³ sá»± thay Ä‘á»•i ngáº«u nhiÃªn hay Ä‘á»‹nh trÆ°á»›c nÃ o (nhÃ³m há»‡ thá»‘ng)', '2', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `tracnghiem_groups` VALUES ('20', 'KhÃ¡ch', 'Nhá»¯ng khÃ¡ch cÃ³ cÃ¹ng sá»± truy nháº­p vá»›i nhá»¯ng thÃ nh viÃªn (cá»§a) nhá»¯ng nhÃ³m ngÆ°á»i dÃ¹ng theo máº·c Ä‘á»‹nh (nhÃ³m há»‡ thá»‘ng)', '2', '0', '0', '0', '0', '1', '0', '0', '0', '3', '0', '0');
INSERT INTO `tracnghiem_groups` VALUES ('21', '', '', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for tracnghiem_groups_resources
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_groups_resources`;
CREATE TABLE `tracnghiem_groups_resources` (
  `groupid` int(10) unsigned NOT NULL DEFAULT '0',
  `resourceid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`,`resourceid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_groups_resources
-- ----------------------------

-- ----------------------------
-- Table structure for tracnghiem_groups_tests
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_groups_tests`;
CREATE TABLE `tracnghiem_groups_tests` (
  `groupid` int(10) unsigned NOT NULL DEFAULT '0',
  `testid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`,`testid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_groups_tests
-- ----------------------------

-- ----------------------------
-- Table structure for tracnghiem_groups_users
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_groups_users`;
CREATE TABLE `tracnghiem_groups_users` (
  `groupid` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_groups_users
-- ----------------------------
INSERT INTO `tracnghiem_groups_users` VALUES ('1', '1');
INSERT INTO `tracnghiem_groups_users` VALUES ('19', '3');
INSERT INTO `tracnghiem_groups_users` VALUES ('20', '2');

-- ----------------------------
-- Table structure for tracnghiem_gscales
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_gscales`;
CREATE TABLE `tracnghiem_gscales` (
  `gscaleid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gscale_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `gscale_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`gscaleid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_gscales
-- ----------------------------
INSERT INTO `tracnghiem_gscales` VALUES ('1', 'A-F Sáº¯p xáº¿p Quy mÃ´ (60% thá»© báº­c chuyá»ƒn qua)', 'A-F grading scale');
INSERT INTO `tracnghiem_gscales` VALUES ('2', 'Passed/Not Passed Grading Scale', 'Passed/not passed grading scale');
INSERT INTO `tracnghiem_gscales` VALUES ('3', 'ECTS Grading Scale', 'ECTS (European Credit Transfer System) grading scale');
INSERT INTO `tracnghiem_gscales` VALUES ('4', 'GPA Grading Scale', 'GPA (Grade Point Average) grading scale');
INSERT INTO `tracnghiem_gscales` VALUES ('5', '6-Point Grading Scale (Germany)', '6-point grading scale in Germany');
INSERT INTO `tracnghiem_gscales` VALUES ('6', '5-Point Grading Scale (Central and Eastern Europe)', '5-point grading scale in Central and Eastern Europe');

-- ----------------------------
-- Table structure for tracnghiem_gscales_grades
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_gscales_grades`;
CREATE TABLE `tracnghiem_gscales_grades` (
  `gscaleid` int(10) unsigned NOT NULL DEFAULT '0',
  `gscale_gradeid` int(10) unsigned NOT NULL DEFAULT '0',
  `grade_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `grade_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `grade_feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `grade_from` float NOT NULL DEFAULT '0',
  `grade_to` float NOT NULL DEFAULT '0',
  `isabsolute` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`gscaleid`,`gscale_gradeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_gscales_grades
-- ----------------------------
INSERT INTO `tracnghiem_gscales_grades` VALUES ('1', '1', 'A', 'Excellent', '', '90', '100', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('1', '2', 'B', 'Good', '', '80', '90', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('1', '3', 'C', 'Fair', '', '70', '80', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('1', '4', 'D', 'Poor', '', '60', '70', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('1', '5', 'F', 'Fail', '', '0', '60', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('2', '1', 'Passed', 'Passed', '', '50', '100', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('2', '2', 'Not Passed', 'Not passed', '', '0', '50', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('3', '1', 'A', 'Excellent (outstanding performance with only minor errors)', '', '95', '100', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('3', '2', 'B', 'Very good (above the average standard but with some errors)', '', '90', '95', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('3', '3', 'C', 'Good (generally sound work with a number of notable errors)', '', '85', '90', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('3', '4', 'D', 'Satisfactory (fair but with significant shortcomings)', '', '80', '85', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('3', '5', 'E', 'Sufficient (performance meets the minimum criteria)', '', '75', '80', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('3', '6', 'FX', 'Fail (some more work required before the credit can be awarded)', '', '65', '75', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('3', '7', 'F', 'Fail (considerable further work is required)', '', '0', '65', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('4', '1', '4', 'Tuyá»‡t vá»i', '', '90', '100', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('4', '2', '3', 'Giá»i', '', '80', '90', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('4', '3', '2', 'Fair', '', '70', '80', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('4', '4', '1', 'Poor', '', '60', '70', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('4', '5', '0', 'Fail', '', '0', '60', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('5', '1', '1', 'Excellent', '', '90', '100', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('5', '2', '2', 'Good', '', '80', '90', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('5', '3', '3', 'Satisfactory', '', '70', '80', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('5', '4', '4', 'Sufficient', '', '60', '70', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('5', '5', '5', 'Unsatisfactory', '', '50', '60', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('5', '6', '6', 'Poor', '', '0', '50', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('6', '1', '5', 'Excellent', '', '90', '100', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('6', '2', '4', 'Good', '', '80', '90', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('6', '3', '3', 'Satisfactory', '', '70', '80', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('6', '4', '2', 'Unsatisfactory', '', '60', '70', '0');
INSERT INTO `tracnghiem_gscales_grades` VALUES ('6', '5', '1', 'Poor', '', '0', '60', '0');

-- ----------------------------
-- Table structure for tracnghiem_questions
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_questions`;
CREATE TABLE `tracnghiem_questions` (
  `questionid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subjectid` int(10) unsigned NOT NULL DEFAULT '1',
  `question_time` int(10) unsigned NOT NULL DEFAULT '0',
  `question_pre` text COLLATE utf8_unicode_ci NOT NULL,
  `question_post` text COLLATE utf8_unicode_ci NOT NULL,
  `question_text` text COLLATE utf8_unicode_ci NOT NULL,
  `question_points` float NOT NULL DEFAULT '1',
  `question_solution` text COLLATE utf8_unicode_ci NOT NULL,
  `question_type` int(10) unsigned NOT NULL DEFAULT '0',
  `question_type2` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `question_shufflea` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`questionid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_questions
-- ----------------------------
INSERT INTO `tracnghiem_questions` VALUES ('1', '1', '0', '', '', '<p><strong>ban tÃªn gÃ¬&nbsp;</strong></p>', '1', '', '0', '0', '0');
INSERT INTO `tracnghiem_questions` VALUES ('2', '1', '0', '', '', '<p><span style=\"font-weight: bold;\">sdafdsafaf</span></p>', '1', '', '0', '0', '0');
INSERT INTO `tracnghiem_questions` VALUES ('3', '1', '0', '', '', '<p><span style=\"font-weight: bold;\">dsafsadfdsaf</span></p>', '1', '', '0', '0', '0');
INSERT INTO `tracnghiem_questions` VALUES ('4', '1', '0', '', '', '<p><span style=\"font-weight: bold;\">dfgfhf</span></p>', '1', '', '0', '0', '0');

-- ----------------------------
-- Table structure for tracnghiem_resources
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_resources`;
CREATE TABLE `tracnghiem_resources` (
  `resourceid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resource_testid` int(10) unsigned NOT NULL DEFAULT '0',
  `resource_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `resource_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `resource_url` text COLLATE utf8_unicode_ci NOT NULL,
  `resource_html` text COLLATE utf8_unicode_ci NOT NULL,
  `resource_datestart` int(10) unsigned NOT NULL DEFAULT '0',
  `resource_dateend` int(10) unsigned NOT NULL DEFAULT '0',
  `resource_forall` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `resource_createdate` int(10) unsigned NOT NULL DEFAULT '0',
  `resource_enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`resourceid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_resources
-- ----------------------------

-- ----------------------------
-- Table structure for tracnghiem_results
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_results`;
CREATE TABLE `tracnghiem_results` (
  `resultid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `testid` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `result_datestart` int(10) unsigned NOT NULL DEFAULT '0',
  `result_timespent` int(10) unsigned NOT NULL DEFAULT '0',
  `result_timeexceeded` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `result_points` float NOT NULL DEFAULT '0',
  `result_pointsmax` float NOT NULL DEFAULT '0',
  `gscaleid` int(10) unsigned NOT NULL DEFAULT '1',
  `gscale_gradeid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`resultid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_results
-- ----------------------------
INSERT INTO `tracnghiem_results` VALUES ('1', '1', '1', '1456301121', '0', '0', '0', '0', '1', '0');
INSERT INTO `tracnghiem_results` VALUES ('2', '1', '1', '1456301166', '262261', '1', '0', '4', '1', '5');
INSERT INTO `tracnghiem_results` VALUES ('3', '1', '3', '1456564184', '0', '0', '0', '0', '1', '0');
INSERT INTO `tracnghiem_results` VALUES ('4', '1', '3', '1456564215', '0', '0', '0', '0', '1', '0');
INSERT INTO `tracnghiem_results` VALUES ('5', '1', '3', '1456564286', '0', '0', '0', '0', '1', '0');
INSERT INTO `tracnghiem_results` VALUES ('6', '1', '3', '1456564304', '0', '0', '0', '0', '1', '0');
INSERT INTO `tracnghiem_results` VALUES ('7', '1', '1', '1456564319', '0', '0', '0', '0', '1', '0');
INSERT INTO `tracnghiem_results` VALUES ('8', '1', '3', '1456564382', '15', '0', '1', '3', '1', '5');
INSERT INTO `tracnghiem_results` VALUES ('9', '1', '3', '1456565463', '16', '0', '1', '3', '1', '5');
INSERT INTO `tracnghiem_results` VALUES ('10', '1', '1', '1456565670', '0', '0', '0', '0', '1', '0');
INSERT INTO `tracnghiem_results` VALUES ('11', '1', '1', '1456644276', '38', '0', '2', '3', '1', '4');
INSERT INTO `tracnghiem_results` VALUES ('12', '3', '3', '1456644613', '16', '0', '0', '4', '1', '5');
INSERT INTO `tracnghiem_results` VALUES ('13', '3', '1', '1457266197', '0', '0', '0', '0', '1', '0');
INSERT INTO `tracnghiem_results` VALUES ('14', '3', '1', '1458140253', '16', '0', '0', '4', '1', '5');
INSERT INTO `tracnghiem_results` VALUES ('15', '4', '1', '1458140400', '22', '0', '0', '4', '1', '5');
INSERT INTO `tracnghiem_results` VALUES ('16', '5', '1', '1458140650', '29', '0', '0', '3', '1', '5');
INSERT INTO `tracnghiem_results` VALUES ('17', '5', '1', '1458140684', '67', '1', '1', '3', '1', '5');
INSERT INTO `tracnghiem_results` VALUES ('18', '5', '1', '1458140764', '11', '0', '0', '3', '1', '5');
INSERT INTO `tracnghiem_results` VALUES ('19', '5', '1', '1458141024', '0', '0', '0', '0', '1', '0');

-- ----------------------------
-- Table structure for tracnghiem_results_answers
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_results_answers`;
CREATE TABLE `tracnghiem_results_answers` (
  `result_answerid` int(10) unsigned NOT NULL DEFAULT '0',
  `resultid` int(10) unsigned NOT NULL DEFAULT '0',
  `questionid` int(10) unsigned NOT NULL DEFAULT '0',
  `test_questionid` int(10) unsigned NOT NULL DEFAULT '0',
  `result_answer_text` text COLLATE utf8_unicode_ci NOT NULL,
  `result_answer_points` float NOT NULL DEFAULT '0',
  `result_answer_iscorrect` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `result_answer_feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `result_answer_timespent` int(10) unsigned NOT NULL DEFAULT '0',
  `result_answer_timeexceeded` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`resultid`,`result_answerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_results_answers
-- ----------------------------
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '1', '1', '2', '1', '1', '2', '', '3', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('2', '1', '2', '3', '1', '0', '0', '', '4', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('3', '1', '3', '4', '2', '0', '0', '', '3', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '3', '3', '4', '2', '0', '0', '', '3', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('2', '3', '2', '3', '4', '0', '0', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '5', '1', '2', '4', '0', '0', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '8', '1', '2', '1', '1', '2', '', '3', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('2', '8', '2', '3', '4', '0', '0', '', '3', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('3', '8', '4', '1', '2', '0', '0', '', '1', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '9', '2', '3', '2', '0', '0', '', '5', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('2', '9', '1', '2', '3', '0', '0', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('3', '9', '4', '1', '1', '1', '2', '', '3', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '11', '2', '3', '3', '0', '0', '', '12', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('2', '11', '1', '2', '1', '1', '2', '', '4', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('3', '11', '4', '1', '1', '1', '2', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '12', '1', '1', '2', '0', '0', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('2', '12', '2', '2', '4', '0', '0', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('3', '12', '3', '3', '1', '0', '0', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('4', '12', '4', '4', '5', '0', '0', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '13', '3', '3', '2', '0', '0', '', '512', '1');
INSERT INTO `tracnghiem_results_answers` VALUES ('2', '13', '4', '4', '2', '0', '0', '', '10', '1');
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '14', '2', '2', '2', '0', '0', '', '4', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('2', '14', '4', '4', '2', '0', '0', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('3', '14', '1', '1', '3', '0', '0', '', '3', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('4', '14', '3', '3', '1', '0', '0', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '15', '1', '1', '2', '0', '0', '', '3', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('2', '15', '2', '2', '3', '0', '0', '', '4', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('3', '15', '3', '3', '2', '0', '0', '', '3', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('4', '15', '4', '4', '5', '0', '0', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '17', '1', '1', '1', '1', '2', '', '22', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('2', '17', '2', '2', '1', '0', '0', '', '6', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('1', '18', '1', '1', '4', '0', '0', '', '2', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('2', '18', '2', '2', '4', '0', '0', '', '1', '0');
INSERT INTO `tracnghiem_results_answers` VALUES ('3', '18', '3', '3', '3', '0', '0', '', '2', '0');

-- ----------------------------
-- Table structure for tracnghiem_rtemplates
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_rtemplates`;
CREATE TABLE `tracnghiem_rtemplates` (
  `rtemplateid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rtemplate_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `rtemplate_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `rtemplate_body` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`rtemplateid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_rtemplates
-- ----------------------------
INSERT INTO `tracnghiem_rtemplates` VALUES ('1', 'Report Template #1', 'Report template #1', '<h1>[TEST_NAME]</h1>\r\n<p><strong>NgÃ y:</strong> [RESULT_DATE]</p>\r\n<p><strong>TÃªn:</strong> [USER_LAST_NAME]<br>\r\n<strong>Há»</strong> [USER_FIRST_NAME]<br>\r\n<strong>Thá»i gian lÃ m:</strong> [RESULT_TIME_SPENT]<br>\r\n<strong>Äiá»ƒm:</strong> [RESULT_POINTS_SCORED] / [RESULT_POINTS_POSSIBLE] ([RESULT_PERCENTS]%)<br>\r\n<strong>Xáº¿p loáº¡i:</strong> [RESULT_GRADE]</p>\r\n<p><strong>Chi tiáº¿t:</strong><br>[RESULT_DETAILED_1]</p>');

-- ----------------------------
-- Table structure for tracnghiem_subjects
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_subjects`;
CREATE TABLE `tracnghiem_subjects` (
  `subjectid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject_parent_subjectid` int(10) unsigned NOT NULL DEFAULT '0',
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `subject_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`subjectid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_subjects
-- ----------------------------
INSERT INTO `tracnghiem_subjects` VALUES ('1', '0', 'Test', 'Test');
INSERT INTO `tracnghiem_subjects` VALUES ('2', '0', 'Kiem Tra Dinh Ki 45 phut lan 2', '');

-- ----------------------------
-- Table structure for tracnghiem_tests
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_tests`;
CREATE TABLE `tracnghiem_tests` (
  `testid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subjectid` int(10) unsigned NOT NULL DEFAULT '1',
  `rtemplateid` int(10) unsigned NOT NULL DEFAULT '1',
  `result_etemplateid` int(10) unsigned NOT NULL DEFAULT '0',
  `gscaleid` int(10) unsigned NOT NULL DEFAULT '1',
  `test_type` int(10) unsigned NOT NULL DEFAULT '0',
  `test_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `test_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `test_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `test_instructions` text COLLATE utf8_unicode_ci NOT NULL,
  `test_time` int(10) unsigned NOT NULL DEFAULT '0',
  `test_timeforceout` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_timingq` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_attempts` int(10) unsigned NOT NULL DEFAULT '0',
  `test_shuffleq` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_shufflea` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_sectionstype` int(10) unsigned NOT NULL DEFAULT '0',
  `test_qsperpage` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `test_showqfeedback` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `test_canreview` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_result_showanswers` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_result_showpoints` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `test_result_showgrade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_result_showgradefeedback` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_result_showhtml` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_result_showpdf` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_result_rtemplateid` int(10) unsigned NOT NULL DEFAULT '0',
  `test_reportgradecondition` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_result_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `test_result_emailtouser` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_datestart` int(10) unsigned NOT NULL DEFAULT '0',
  `test_dateend` int(10) unsigned NOT NULL DEFAULT '0',
  `test_prevtestid` int(10) unsigned NOT NULL DEFAULT '0',
  `test_nexttestid` int(10) unsigned NOT NULL DEFAULT '0',
  `test_contentprotection` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_notes` text COLLATE utf8_unicode_ci NOT NULL,
  `test_price` int(10) unsigned NOT NULL DEFAULT '0',
  `test_other_repeatuntilcorrect` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `test_forall` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `test_createdate` int(10) unsigned NOT NULL DEFAULT '0',
  `test_enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`testid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_tests
-- ----------------------------
INSERT INTO `tracnghiem_tests` VALUES ('1', '1', '1', '2', '1', '0', 'fdasdfsa', 'dsafsafd', 'fsadfsafs', 'fsadfsadfdsafsafsdafsafs', '60', '1', '0', '1', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '1', '0', '0', '0', '', '0', '1458115380', '1458115380', '0', '0', '1', '', '0', '0', '1', '1456300992', '1');
INSERT INTO `tracnghiem_tests` VALUES ('2', '1', '1', '0', '1', '0', 'dd', 'Ä‘', 'Ä‘', 'ddd', '240', '0', '0', '1', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '', '0', '1456565580', '1772184780', '0', '0', '1', '', '0', '0', '1', '1456565589', '1');
INSERT INTO `tracnghiem_tests` VALUES ('3', '2', '1', '0', '1', '0', 'abc', 'aa', 'aa', 'aaaaa', '300', '0', '0', '1', '1', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '', '0', '1456644480', '1772263680', '0', '0', '1', '', '0', '0', '1', '1456644495', '1');
INSERT INTO `tracnghiem_tests` VALUES ('4', '1', '1', '0', '1', '0', 'gfdgdf', 'gfdgfdgd', 'fgfdgfdgfdg', 'gfdgfdgfdg', '180', '1', '0', '1', '0', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '', '0', '1458140280', '1773759480', '0', '0', '1', '', '0', '0', '1', '1458140304', '1');
INSERT INTO `tracnghiem_tests` VALUES ('5', '1', '1', '0', '1', '0', 'ddd', 'ddd', 'ddddd', 'dddddddd', '60', '1', '0', '0', '0', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '', '0', '1458140520', '1773759720', '0', '0', '0', '', '0', '0', '1', '1458140554', '1');

-- ----------------------------
-- Table structure for tracnghiem_tests_attempts
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_tests_attempts`;
CREATE TABLE `tracnghiem_tests_attempts` (
  `testid` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `test_attempt_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`testid`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_tests_attempts
-- ----------------------------
INSERT INTO `tracnghiem_tests_attempts` VALUES ('1', '1', '1');
INSERT INTO `tracnghiem_tests_attempts` VALUES ('1', '3', '1');
INSERT INTO `tracnghiem_tests_attempts` VALUES ('3', '1', '1');
INSERT INTO `tracnghiem_tests_attempts` VALUES ('3', '3', '1');
INSERT INTO `tracnghiem_tests_attempts` VALUES ('4', '1', '1');

-- ----------------------------
-- Table structure for tracnghiem_tests_own
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_tests_own`;
CREATE TABLE `tracnghiem_tests_own` (
  `testid` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `test_own_expiredate` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`testid`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_tests_own
-- ----------------------------

-- ----------------------------
-- Table structure for tracnghiem_tests_questions
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_tests_questions`;
CREATE TABLE `tracnghiem_tests_questions` (
  `test_questionid` int(10) unsigned NOT NULL DEFAULT '0',
  `testid` int(10) unsigned NOT NULL DEFAULT '0',
  `test_sectionid` int(10) unsigned NOT NULL DEFAULT '0',
  `questionid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`testid`,`test_questionid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_tests_questions
-- ----------------------------
INSERT INTO `tracnghiem_tests_questions` VALUES ('1', '1', '0', '4');
INSERT INTO `tracnghiem_tests_questions` VALUES ('2', '1', '0', '1');
INSERT INTO `tracnghiem_tests_questions` VALUES ('3', '1', '0', '2');
INSERT INTO `tracnghiem_tests_questions` VALUES ('1', '3', '0', '1');
INSERT INTO `tracnghiem_tests_questions` VALUES ('2', '3', '0', '2');
INSERT INTO `tracnghiem_tests_questions` VALUES ('3', '3', '0', '3');
INSERT INTO `tracnghiem_tests_questions` VALUES ('4', '3', '0', '4');
INSERT INTO `tracnghiem_tests_questions` VALUES ('1', '4', '0', '1');
INSERT INTO `tracnghiem_tests_questions` VALUES ('2', '4', '0', '2');
INSERT INTO `tracnghiem_tests_questions` VALUES ('3', '4', '0', '3');
INSERT INTO `tracnghiem_tests_questions` VALUES ('4', '4', '0', '4');
INSERT INTO `tracnghiem_tests_questions` VALUES ('1', '5', '0', '1');
INSERT INTO `tracnghiem_tests_questions` VALUES ('2', '5', '0', '2');
INSERT INTO `tracnghiem_tests_questions` VALUES ('3', '5', '0', '3');

-- ----------------------------
-- Table structure for tracnghiem_users
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_users`;
CREATE TABLE `tracnghiem_users` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_passhash` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_checkword` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_title` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_address` text COLLATE utf8_unicode_ci NOT NULL,
  `user_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_pager` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_ipphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_webpage` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_icq` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_msn` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_aol` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_gender` tinyint(4) NOT NULL DEFAULT '0',
  `user_birthday` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `user_husbandwife` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_children` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_trainer` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_cposition` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_department` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_coffice` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_caddress` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ccity` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_cstate` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_czip` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_ccountry` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_cphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_cfax` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_cmobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_cpager` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_cipphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_cwebpage` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_cphoto` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_ufield1` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ufield2` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ufield3` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ufield4` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ufield5` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ufield6` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ufield7` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ufield8` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ufield9` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ufield10` text COLLATE utf8_unicode_ci NOT NULL,
  `user_notes` text COLLATE utf8_unicode_ci NOT NULL,
  `user_joindate` int(10) unsigned NOT NULL DEFAULT '0',
  `user_logindate` int(10) unsigned NOT NULL DEFAULT '0',
  `user_expiredate` int(10) unsigned NOT NULL DEFAULT '0',
  `user_enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_users
-- ----------------------------
INSERT INTO `tracnghiem_users` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'voquocduoc@gmail.com', '', 'Admin', 'User', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '1900-01-01 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1456300466', '1458140245', '0', '1');
INSERT INTO `tracnghiem_users` VALUES ('2', 'guest', '36ae6fd873e5b378211807c1a3f35521', '', 'voquocduoc@gmail.com', '', 'KhÃ¡ch', 'User', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '1900-01-01 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1456300466', '1456300466', '0', '0');
INSERT INTO `tracnghiem_users` VALUES ('3', 'voquocduoc', '231b43f7fd80e94ffa2fda73cd228571', '6amphux2', 'vqduoc@toantin.org', '', 'Duoc', 'Vo', 'VÃµ Quá»‘c ÄÆ°á»£c', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '1900-01-01 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1456300761', '1456644611', '1457877480', '1');

-- ----------------------------
-- Table structure for tracnghiem_visitors
-- ----------------------------
DROP TABLE IF EXISTS `tracnghiem_visitors`;
CREATE TABLE `tracnghiem_visitors` (
  `visitorid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `startdate` int(10) unsigned NOT NULL DEFAULT '0',
  `enddate` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `ip1` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip2` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip3` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip4` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `host` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `referer` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `useragent` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `inurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `outurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`visitorid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tracnghiem_visitors
-- ----------------------------
INSERT INTO `tracnghiem_visitors` VALUES ('1', '1456564585', '1456564831', '1', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/config.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '6', '/config.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('2', '1456564832', '1456565151', '1', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/test-manager.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '8', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('3', '1456565151', '1456565345', '1', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/index.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '8', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('4', '1456565345', '1456565529', '3', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/index.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '22', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('5', '1456565529', '1456565688', '1', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/index.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '20', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('6', '1456565688', '1456566134', '1', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/test-manager.php?testid=2&action=editt', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '22', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('7', '1456566134', '1456566586', '1', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/index.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '21', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('8', '1456566586', '1456566615', '1', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/index.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '6', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('9', '1456566615', '1456566631', '1', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/index.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '6', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('10', '1456566631', '1456644124', '1', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/index.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '5', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('11', '1456644124', '1456644267', '3', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '6', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('12', '1456644267', '1456644604', '1', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/index.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '50', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('13', '1456644604', '1456644661', '3', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/index.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '23', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('14', '1456644662', '1456650485', '1', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/reports-manager.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '4', '/index.php', '/signout.php');
INSERT INTO `tracnghiem_visitors` VALUES ('15', '1456650486', '1456650486', '0', '127', '0', '0', '1', 'center.dev', 'http://tracnghiem.dev/index.php', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36', '1', '/index.php', '/index.php');
INSERT INTO `tracnghiem_visitors` VALUES ('16', '1457193161', '1457193269', '1', '127', '0', '0', '1', 'center.dev', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0', '10', '/index.php', '/test-manager.php?testid=1&action=settings');
INSERT INTO `tracnghiem_visitors` VALUES ('17', '1457193345', '1457193345', '0', '127', '0', '0', '1', 'center.dev', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0', '1', '/index.php', '/index.php');
INSERT INTO `tracnghiem_visitors` VALUES ('18', '1457266168', '1457266732', '1', '127', '0', '0', '1', 'center.dev', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0', '16', '/index.php', '/test.php');
INSERT INTO `tracnghiem_visitors` VALUES ('19', '1458140007', '1458141025', '1', '127', '0', '0', '1', 'center.dev', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', '132', '/index.php', '/test.php?action=instructions&testid=5');
