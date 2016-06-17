<?php

// Customizable (you can customize/override this data in custom.lng.php):
// ----------------------------------------------------------------------
// Branding:
$lngstr['branding']['top_logo'] = '';
$lngstr['branding']['btm_sign'] = '';
// Sign in page:
$lngstr['page_signin_box_intro'] = '';

// Non-customizable (it is not recommended to customize this data):
// ----------------------------------------------------------------
$lngstr['branding']['powered_by'] = 'Trắc nghiệm  v'.IGT_VERSION.'';
// General:
$lngstr['meta_charset'] = 'UTF-8';
$lngstr['sql_charset'] = 'latin1';
$lngstr['meta_contentlanguage'] = 'en-us';
$lngstr['language']['date_only_format'] = '%m/%d/%Y'; // 'm/d/Y'
$lngstr['language']['date_format'] = '%m/%d/%y %I:%M %p'; // 'm/d/y g:i a'
$lngstr['language']['date_format_full'] = '%B %d, %Y %I:%M:%S %p'; // 'F j, Y g:i:s a'
$lngstr['language']['calendar']['date_format'] = '%Y-%m-%d %H:%M';
$lngstr['text_direction'] = 'ltr';
$lngstr['languages'] = array('vn' => 'Việt Nam', 'en' => 'English', 'es' => 'Spanish', 'de' => 'German', 'fr' => 'French', 'nl' => 'Dutch', 'ru' => 'Russian', 'hr' => 'Croatian');
$lngstr['language_long'] = 'english';
$lngstr['language']['locale'] = array('en_US', 'enu', 'eng', 'en', 'english');
$lngstr['language']['currency'] = '$%.2f';
$lngstr['language']['currency_name'] = 'VNĐ';
$lngstr['language']['list_separator'] = ',';

$lngstr['calendar_month'] = 'Tháng';
$lngstr['calendar_day'] = 'Ngày';
$lngstr['calendar_year'] = 'Năm';
$lngstr['calendar_hour'] = 'Giờ';
$lngstr['calendar_minute'] = 'Phút';
$lngstr['time_days'] = 'Ngày';
$lngstr['time_days_short'] = 'Ngày';
$lngstr['time_hours'] = 'Giờ';
$lngstr['time_hours_short'] = 'hr.';
$lngstr['time_minutes'] = 'Phút';
$lngstr['time_minutes_short'] = 'Phút.';
$lngstr['time_seconds'] = 'Giây';
$lngstr['time_seconds_short'] = 'Giây.';
$lngstr['time_donotuse'] = 'Không dùng';
$lngstr['calendar']['hint'] = 'Lịch...';

$lngstr['calendar_months'] = array(
	1 => 'Tháng 1',
	2 => 'Tháng 2',
	3 => 'Tháng 3',
	4 => 'Tháng 4',
	5 => 'Tháng 5',
	6 => 'Tháng 6',
	7 => 'Tháng 7',
	8 => 'Tháng 8',
	9 => 'Tháng 9',
	10 => 'Tháng 10',
	11 => 'Tháng 11',
	12 => 'Tháng 12',
	);

$lngstr['label_yes'] = 'Yes(Đồng Ý)';
$lngstr['label_no'] = 'No (Không)';
$lngstr['label_undefined'] = 'Undefined';
$lngstr['label_partially'] = 'Partially';
$lngstr['label_notapplicable'] = 'n/a';
$lngstr['label_all'] = 'All(Tất cả)';
$lngstr['label_noname'] = '[Không có tên]';
$lngstr['label_none'] = '- Không gì(Trống) -';
$lngstr['label']['print_version'] = 'Xem in phiên bản';
$lngstr['label']['KtoLofN'] = '%d - %d của %d';

$lngstr['label_navigate_show'] = 'Thấy:';
$lngstr['button_next'] = 'Tiếp';
$lngstr['button_prev'] = 'Trước';
$lngstr['button_accept'] = 'Đồng Ý';
$lngstr['button_next_page'] = 'Tiếp trang kế';
$lngstr['button_prev_page'] = 'Trở về trang trước';
$lngstr['button_first_page'] = 'Trở về trang đầu';
$lngstr['button_last_page'] = 'Đến trang cuối';

$lngstr['label']['view_edit_user'] = 'Xem / Sửa hồ sơ người này';

$lngstr['label_atype_multiple_choice'] = 'Nhiều lựa chọn';
$lngstr['label_atype_multiple_answer'] = 'MNhiều câu trả lời';
$lngstr['label_atype_truefalse'] = 'Đúng/Sai';
$lngstr['label_atype_truefalse_true'] = 'Đúng';
$lngstr['label_atype_truefalse_false'] = 'Sai';
$lngstr['label_atype_fillintheblank'] = 'Trả lời ngắn';
$lngstr['label_atype_essay'] = 'Dễ';
$lngstr['label_atype_random'] = 'Câu hỏi ngẫu nhiên';

$lngstr['page_all']['mnemonic_code'] = 'Mã gợi ý:';

$lngstr['item_separator'] = ' - ';
$lngstr['page_title_signin'] = ' Đăng nhập';
$lngstr['page_title_register'] = 'Đăng ký';
$lngstr['page_title_lostpassword'] = 'Quên mật khẩu';
$lngstr['page_title_panel'] = 'Làm Bài';
$lngstr['page_header_panel'] = $lngstr['page_title_panel'];
$lngstr['page_title_test'] = 'Làm Bài';
$lngstr['page_title_results'] = 'Quản lý Báo cáo';
$lngstr['page_header_results'] = $lngstr['page_title_results'];
 $lngstr['page_title_results_questions'] = 'Chi tiết câu hỏi';
 $lngstr['page_header_results_questions'] = $lngstr['page_title_results_questions'];
 $lngstr['page_title_results_answers'] = 'Chi tiết câu trả lời';
 $lngstr['page_header_results_answers'] = $lngstr['page_title_results_answers'];
 $lngstr['page_reportsmanager']['correct_answer'] = 'Câu hỏi với Câu trả lời Đúng';
 $lngstr['page_reportsmanager']['your_answer'] = 'Câu trả lời của bạn';
$lngstr['page_reportsratings']['title'] = 'Đánh giá';
$lngstr['page_reportsratings']['header'] = $lngstr['page_reportsratings']['title'];
$lngstr['page_statistics']['title'] = 'Thống kê';
$lngstr['page_statistics']['header'] = $lngstr['page_statistics']['title'];
 $lngstr['page_statistics_resultid']['title'] = 'Báo cáo chi tiết';
 $lngstr['page_statistics_resultid']['header'] = 'Báo cáo chi tiết bài kiểm: %s';
$lngstr['page_title_edittests'] = 'QUản lý bài kiểm';
$lngstr['page_header_edittests'] = $lngstr['page_title_edittests'];
 $lngstr['page_title_test_settings'] = 'Thiết lập bài kiểm';
 $lngstr['page_header_test_settings'] = $lngstr['page_title_test_settings'];
 $lngstr['page_title_test_assignto'] = 'Gán tới';
 $lngstr['page_header_test_assignto_tests'] = 'Những bài kiểm';
 $lngstr['page_header_test_assignto_groups'] = 'Nhóm';
 $lngstr['page_title_test_questions'] = 'Câu hỏi kiểm tra';
 $lngstr['page_header_test_questions'] = $lngstr['page_title_test_questions'];
 $lngstr['page_title_test_sections'] = 'Vùng kiểm tra';
 $lngstr['page_header_test_sections'] = $lngstr['page_title_test_sections'];
 $lngstr['page_title_import_questions'] = 'Nhập câu hỏi';
 $lngstr['page_header_import_questions'] = $lngstr['page_title_import_questions'];
 $lngstr['page_testmanager_stats']['title'] = 'Thống kê bài kiểm';
 $lngstr['page_testmanager_stats']['header'] = $lngstr['page_testmanager_stats']['title'];
$lngstr['page_title_questionbank'] = 'Ngân hàng đề';
$lngstr['page_header_questionbank'] = $lngstr['page_title_questionbank'];
 $lngstr['page_title_question_stats'] = 'Thống kê Câu hỏi';
 $lngstr['page_header_question_stats'] = $lngstr['page_title_question_stats'];
 $lngstr['page_title_edit_question'] = 'Sửa câu hỏi';
 $lngstr['page_header_edit_question'] = $lngstr['page_title_edit_question'];
$lngstr['page_title_manageusers'] = 'Những người dùng';
$lngstr['page_header_manageusers'] = $lngstr['page_title_manageusers'];
 $lngstr['page_title_users_memberof'] = 'Thành viên của';
 $lngstr['page_title_users_memberof_users'] = 'Những người dùng';
 $lngstr['page_title_users_memberof_groups'] = 'Nhóm';
 $lngstr['page_title_users_settings'] = 'Thiết đặt người dùng';
 $lngstr['page_header_users_settings'] = $lngstr['page_title_users_settings'];
$lngstr['page_title_managegroups'] = 'Nhóm';
$lngstr['page_header_managegroups'] = $lngstr['page_title_managegroups'];
 $lngstr['page_title_groups_settings'] = 'Thiết đặt nhóm';
 $lngstr['page_header_groups_settings'] = $lngstr['page_title_groups_settings'];
$lngstr['page_title_subjects'] = 'Subjects';
$lngstr['page_header_subjects'] = $lngstr['page_title_subjects'];
 $lngstr['page_title_subjects_settings'] = 'Thiết đặt môn';
 $lngstr['page_header_subjects_settings'] = $lngstr['page_title_subjects_settings'];
$lngstr['page_title_emailtemplates'] = 'Mẫu Email ';
$lngstr['page_header_emailtemplates'] = $lngstr['page_title_emailtemplates'];
 $lngstr['page_title_etemplates_edit'] = 'Sửa Mẫu Email';
 $lngstr['page_header_etemplates_edit'] = $lngstr['page_title_etemplates_edit'];
$lngstr['page_title_rtemplates'] = 'Báo cáo mẫu';
$lngstr['page_header_rtemplates'] = $lngstr['page_title_rtemplates'];
 $lngstr['page_title_rtemplates_edit'] = 'Sửa Báo cáo mẫu';
 $lngstr['page_header_rtemplates_edit'] = $lngstr['page_title_rtemplates_edit'];
$lngstr['page_title_grades'] = 'Những hệ thống đường dốc';
$lngstr['page_header_grades'] = $lngstr['page_title_grades'];
 $lngstr['page_title_grades_edit'] = 'Sự thiết đặt Hệ thống Đường dốc';
 $lngstr['page_header_grades_edit'] = $lngstr['page_title_grades_edit'];
$lngstr['page_title_gradescales'] = 'Quy mô Đường dốc';
$lngstr['page_header_gradescales'] = $lngstr['page_title_gradescales'];
 $lngstr['page_title_grade_settings'] = 'Thứ bậc Soạn thảo';
 $lngstr['page_header_grade_settings'] = $lngstr['page_title_grade_settings'];
$lngstr['page_title_config'] = 'Cấu hình';
$lngstr['page_header_config'] = $lngstr['page_title_config'];
$lngstr['page_title_visitors'] = 'Thống kê Mạng';
$lngstr['page_header_visitors'] = $lngstr['page_title_visitors'];
 $lngstr['page_title_visitordetails'] = 'Chi tiết Người đến thăm';
 $lngstr['page_header_visitordetails'] = $lngstr['page_title_visitordetails'];
$lngstr['page_resourcemanager']['title'] = 'Quản lý Tài nguyên';
$lngstr['page_resourcemanager']['header'] = $lngstr['page_resourcemanager']['title'];
 $lngstr['page_resourcemanager_settings']['title'] = 'Sự thiết đặt Tài nguyên';
 $lngstr['page_resourcemanager_settings']['header'] = $lngstr['page_resourcemanager_settings']['title'];
$lngstr['page_resources']['title'] = 'Nguồn lợi';
$lngstr['page_resources']['header'] = $lngstr['page_resources']['title'];
$lngstr['page_couponmanager']['title'] = 'Quản lý Phiếu';
$lngstr['page_couponmanager']['header'] = $lngstr['page_couponmanager']['title'];
 $lngstr['page_couponmanager_settings']['title'] = 'Sự thiết đặt Phiếu';
 $lngstr['page_couponmanager_settings']['header'] = $lngstr['page_couponmanager_settings']['title'];
$lngstr['page_buycheckout']['title'] = 'Mua Một bài kiểm';
$lngstr['page_buycheckout']['header'] = $lngstr['page_buycheckout']['title'];
$lngstr['page_getfile_template_html']['title'] = 'Báo cáo HTML ';

$lngstr['panel_home'] = $lngstr['page_title_panel'];
$lngstr['panel_results'] = $lngstr['page_title_results'];
$lngstr['panel_edittests'] = $lngstr['page_title_edittests'];
$lngstr['panel_questionbank'] = $lngstr['page_title_questionbank'];
$lngstr['panel_managegroups'] = $lngstr['page_title_managegroups'];
$lngstr['panel_signout'] = 'Thoát';
$lngstr['panel_edit_subjects'] = 'Quản lý Đề tài';
$lngstr['panel_usersandgroups'] = 'Administration(Quản lý)';
$lngstr['panel_manage_groups'] = 'Quản lý Nhóm ';
$lngstr['panel_manage_users'] = 'Quản lý Người sử dụng';

$lngstr['label_choice_no'] = 'Choice %d:';
$lngstr['label_answer_text'] = 'Trả lời:';
$lngstr['label_answer_feedback_no'] = 'Phản hồi %d:';
$lngstr['label_accept_as_correct'] = 'Chấp nhận như Đúng';
$lngstr['label_answer_percents'] = '% đúng';
$lngstr['label_mark_correct_answers'] = 'Xin đánh dấu Câu trả lời đúng(s)';
$lngstr['label_mark_correct_fillintheblank'] = 'Xin đánh máy Câu trả lời đúng ở đây';

// Report Manager:
$lngstr['label_hdr_action'] = 'Hoạt động';
$lngstr['label_hdr_select_hint'] = 'Chọn hoặc ko chọn tất cả các dòng';
$lngstr['label_action_test_result_view'] = 'Xem kết quả bài kiểm này';
$lngstr['label_action_test_result_delete'] = 'Xóa Bản ghi này';
$lngstr['label_action_results_delete'] = 'Xóa Bản ghi này (Cho ngững bản ghi dc chọn)';
$lngstr['label_action_view_question_result'] = 'Xem Chi tiết câu trả lời';

// Test Manager:
$lngstr['label_action_test_settings'] = 'Sự thiết đặt bài kiểm';
$lngstr['label_action_questions_edit'] = 'Sửa câu hỏi';
$lngstr['label_action_test_delete'] = 'Xóa Kiểm tra này ';
$lngstr['label_action_tests_delete'] = 'Xóa Kiểm tra này (Cho những bài dc chọn)';
$lngstr['label_action_question_edit'] = 'Sửa câu hỏi này';
$lngstr['label_action_question_moveup'] = 'Di chuyển lên trên';
$lngstr['label_action_question_movedown'] = 'Di chuyển xuống';
$lngstr['label_action_question_append'] = 'Thêm câu hỏi này vào bài kiểm';
$lngstr['label_action_questions_append'] = 'Thêm câu hỏi này vào bài kiểm (Cho những bản ghi dc hcọn)';
$lngstr['label_action_question_delete'] = 'Xóa Câu hỏi này';
$lngstr['label_action_questions_delete'] = 'Xóa Câu hỏi (Cho những bản ghi được chọn)';
$lngstr['label_action_question_link_delete'] = 'Loại câu hỏi này ra khỏi bài kiểm';
$lngstr['label_action_question_links_delete'] = 'Loại câu hỏi này ra khỏi bài kiểm (Cho những câu dc chọn)';
$lngstr['label_action_question_stats'] = 'Xem Thống kê';
$lngstr['label_action_questions_stats'] = 'Xem Thống kê (Cho những bản ghi được chọn)';
$lngstr['label_action_manageusers_edit'] = 'Thiết đặt Người sử dụng';
$lngstr['label_action_manageusers_groups'] = 'Những nhóm người dùng';
$lngstr['label_action_groups'] = 'User groups (Cho những bản ghi được chọn)';
$lngstr['label_action_manageusers_delete'] = 'Xóa người sử dụng này';
$lngstr['label_action_users_delete'] = 'Xóa những người sử dụng(Cho những bản ghi được chọn)';
$lngstr['label_action_create_user'] = 'Tạo ra một người sử dụng mới';
$lngstr['label_action_group_delete'] = 'Xóa nhóm này';
$lngstr['label_action_groups_delete'] = 'Xóa những nhóm (Cho những bản ghi được chọn)';
$lngstr['label_action_create_group'] = 'Tạo ra một nhóm mới';
$lngstr['label_action_group_edit'] = 'Thiết đặt Nhóm';
$lngstr['label_action_test_groups_select'] = 'Gán tới nhóm';
$lngstr['label_action_subject_edit'] = 'Thiết đặt đề tài';
$lngstr['label_action_subject_delete'] = 'Xoá đề tài này';
$lngstr['label_action_subjects_delete'] = 'Xóa những đề tài (Cho những bản ghi được chọn)';
$lngstr['label_action_create_test'] = 'Tạo ra một bài kểm mới';
$lngstr['label_action_import_questions'] = 'Nhập những câu hỏi';
$lngstr['label_action_create_question'] = 'Tạo ra một câu hỏi mới';
$lngstr['label_action_create_and_add_question'] = 'Tạo mới / Thêm câu hỏi vào bài kiểm';
$lngstr['label_action_create_etemplate'] = 'Tạo 1 mẫu Email mới';
$lngstr['label_action_etemplates_edit'] = 'Sửa mẫu Email này';
$lngstr['label_action_etemplate_delete'] = 'Xoá mẫu Email này';
$lngstr['label_action_etemplates_delete'] = 'Xoá mẫu Email này (Cho những bản ghi được chọn)';
$lngstr['label_action_grade_settings'] = 'Sự thiết đặt hệ thống Đường dốc';
$lngstr['label_action_grade_delete'] = 'Xoá hệ thống đường dốc này';
$lngstr['label_action_grades_delete'] = 'Xoá hệ thống đường dốc (Cho những bản ghi được chọn)';
$lngstr['label_action_gradescales_edit'] = 'Soạn thảo quy mô đường dốc này';
$lngstr['label_action_gradescales_delete'] = 'Xóa Sắp xếp (Cho những bản ghi được chọn)';
$lngstr['label_action_gradescale_edit'] = 'Sửa sắp xếp này';
$lngstr['label_action_gradescale_delete'] = 'Xoá sắp xếp này';
$lngstr['label_action_visitor_delete'] = 'Xoa bản ghi này';
$lngstr['label_action_visitors_delete'] = 'Xoá bản ghi (Cho những bản ghi được chọn)';
$lngstr['page-sections']['action_section_create'] = 'Tạo 1 khu vực mới';
$lngstr['page-sections']['action_section_edit'] = 'Sửa mục(khu vực) này';
$lngstr['page-sections']['action_section_delete'] = 'Xóa mục(khu vực) này';
$lngstr['page-sections']['action_sections_delete'] = 'Xóa những mục(khu vực) (Cho những bản ghi được chọn)';
$lngstr['page-rtemplates']['action_create_rtemplate'] = 'Tạo ra một khung mẫu báo cáo mới';
$lngstr['page-rtemplates']['action_rtemplate_delete'] = 'Xóa khung mẫu báo cáo này';
$lngstr['page-rtemplates']['action_rtemplates_delete'] = 'Xóa những khung mẫu báo cáo (Cho những bản ghi được chọn)';
$lngstr['page-rtemplates']['action_rtemplates_edit'] = 'Sửa khung mẫu báo cáo này';

$lngstr['label_test_testinstructions'] = 'Chỉ dẫn bài kiểm';
$lngstr['page_test']['no_time_limit'] = 'Không tính thời gian';
$lngstr['page_test']['test_timer_hint'] = 'Thời gian làm bài';
$lngstr['page_test']['questionindicator'] = '%d của %d';
$lngstr['page_test']['questionindicator_hint'] = 'Câu hỏi %d của %d';
$lngstr['page_test']['testname_hint'] = 'Tên bài kiểm';
$lngstr['label_result_username'] = '<b>Tên Tham gia:</b> %s';
$lngstr['label_result_testname'] = '<b>Bài kiểm tra</b> %s';
$lngstr['label_result_testdate'] = '<b>Ngày:</b> %s';
$lngstr['label_result_timespent'] = '<b>Thời gian làm bài:</b> %s';
$lngstr['label_result_got_answers'] = '<b>Những câu trả lời Đúng:</b> %d / %d';
$lngstr['label_result_got_points'] = '<b>Điểm bài thi:</b> %d / %d (%d%%)<br><br><H3> <font color="red">Xin cảm ơn bạn đã tham gia. Chúc bạn ngày càng học tốt hơn ! ';
$lngstr['label_result_points_pending'] = '<b>Những điểm đang xem xét:</b> %d';
$lngstr['label_result_got_grade'] = '<b>Thứ bậc:</b> %s';
$lngstr['label_result_got_gradefeedback'] = '<b>Chú giải Thứ bậc:</b> %s';
$lngstr['label_result_do_not_show'] = 'Bài kiểm của bạn Đã được chấm điểm và ghi.';
$lngstr['label_result_showpdf'] = 'Xem kết quả dạng file PDF';
$lngstr['page_test']['result']['showhtml'] = 'Xem kết quả dạng HTML';

$lngstr['page_test_instructions']['next_page'] = 'Trang tiếp';

$lngstr['label_report_hdr_resultid'] = 'ID';
$lngstr['label_report_hdr_resultid_hint'] = 'ID kết quả (click để sắp xếp)';
$lngstr['label_report_hdr_result_datestart'] = 'Ngày tháng';
$lngstr['label_report_hdr_result_datestart_hint'] = 'Ngày (Bấm để sắp xếp)';
$lngstr['label_report_hdr_user_name'] = 'Username';
$lngstr['label_report_hdr_user_name_hint'] = 'Username (Bấm để sắp xếp)';
$lngstr['label_report_hdr_test_name'] = 'Tên bài kiểm';
$lngstr['label_report_hdr_test_name_hint'] = 'Test name (Bấm để sắp xếp)';
$lngstr['page_reportsmanager']['hdr_test_attempts'] = 'Nỗ lực Exc.';
$lngstr['page_reportsmanager']['hdr_test_attempts_hint'] = 'Cố gắng Được vượt hơn';
$lngstr['label_report_hdr_result_timeexceeded'] = 'Time Exc.';
$lngstr['label_report_hdr_result_timeexceeded_hint'] = 'Time exceeded (Bấm để sắp xếp)';
$lngstr['label_report_hdr_result_points'] = 'Points Scored';
$lngstr['label_report_hdr_result_points_hint'] = 'Points scored (Bấm để sắp xếp)';
$lngstr['label_report_hdr_result_pointsmax'] = 'Points Possible';
$lngstr['label_report_hdr_result_pointsmax_hint'] = 'Points possible (Bấm để sắp xếp)';
$lngstr['label_report_hdr_result_score'] = 'Ghi điểm';
$lngstr['label_report_hdr_result_score_hint'] = 'Ghi điểm (Bấm để sắp xếp)';
$lngstr['label_report_hdr_gscale_gradeid'] = 'Thứ bậc';
$lngstr['label_report_hdr_gscale_gradeid_hint'] = 'Thứ bậc (Bấm để sắp xếp)';
$lngstr['label_report_hdr2_result_answerid'] = 'Seq';
$lngstr['label_report_hdr2_result_answerid_hint'] = 'Chuỗi (Bấm để sắp xếp)';
$lngstr['label_report_hdr2_test_questionid'] = '#';
$lngstr['label_report_hdr2_test_questionid_hint'] = 'Số Câu hỏi (Bấm để sắp xếp)';
$lngstr['label_report_hdr2_result_answer_timespent'] = 'Time';
$lngstr['label_report_hdr2_result_answer_timespent_hint'] = 'Time (Bấm để sắp xếp)';
$lngstr['label_report_hdr2_result_answer_text'] = 'Trả lời';
$lngstr['label_report_hdr2_result_answer_text_hint'] = 'Trả lời';
$lngstr['label_report_hdr2_result_answer_points'] = 'Points';
$lngstr['label_report_hdr2_result_answer_points_hint'] = 'Giá trị Điểm (Bấm để sắp xếp)';
$lngstr['label_report_hdr2_result_answer_iscorrect'] = 'Đúng';
$lngstr['label_report_hdr2_result_answer_iscorrect_hint'] = 'Đúng (Bấm để sắp xếp)';
$lngstr['label_report_hdr2_result_answer_timeexceeded'] = $lngstr['label_report_hdr_result_timeexceeded'];
$lngstr['label_report_hdr2_result_answer_timeexceeded_hint'] = $lngstr['label_report_hdr_result_timeexceeded_hint'];
$lngstr['label_edittests_hdr_testid'] = 'ID';
$lngstr['label_edittests_hdr_testid_hint'] = 'Test ID (Bấm để sắp xếp)';
$lngstr['label_edittests_hdr_test_name'] = 'Test Name';
$lngstr['label_edittests_hdr_test_name_hint'] = 'Test name (Bấm để sắp xếp)';
$lngstr['label_edittests_hdr_subjectid'] = 'Đề tài';
$lngstr['label_edittests_hdr_subjectid_hint'] = 'Đề tài (Bấm để sắp xếp)';
$lngstr['label_edittests_hdr_test_datestart'] = 'Ngày bắt đầu';
$lngstr['label_edittests_hdr_test_datestart_hint'] = 'Ngày bắt đầu (Bấm để sắp xếp)';
$lngstr['label_edittests_hdr_test_dateend'] = 'Ngày kết thúc';
$lngstr['label_edittests_hdr_test_dateend_hint'] = 'Ngày kết thúc (Bấm để sắp xếp)';
$lngstr['label_edittests_hdr_test_notes'] = 'N';
$lngstr['label_edittests_hdr_test_notes_hint'] = 'Những ghi chú';
$lngstr['label_edittests_hdr_test_enabled'] = 'Hoạt động';
$lngstr['label_edittests_hdr_test_enabled_hint'] = 'Hoạt động (Bấm để sắp xếp)';
$lngstr['label_editquestions_hdr_questionid'] = 'ID';
$lngstr['label_editquestions_hdr_questionid_hint'] = 'ID Đề tài (Bấm để sắp xếp)';
$lngstr['label_editquestions_hdr_subjectid'] = 'Đề tài';
$lngstr['label_editquestions_hdr_subjectid_hint'] = 'Đề tài (Bấm để sắp xếp)';
$lngstr['label_editquestions_hdr_question_text'] = 'Câu hỏi';
$lngstr['label_editquestions_hdr_question_text_hint'] = 'Câu hỏi';
$lngstr['label_editquestions_hdr_question_type'] = 'Loại';
$lngstr['label_editquestions_hdr_question_type_hint'] = 'Loại (Bấm để sắp xếp)';
$lngstr['label_editquestions_hdr_question_points'] = 'Điểm';
$lngstr['label_editquestions_hdr_question_points_hint'] = 'Giá trị điểm (Bấm để sắp xếp)';
$lngstr['label_editquestions_hdr_test_questionid'] = 'Seq';
$lngstr['label_editquestions_hdr_test_questionid_hint'] = 'Sequence (Bấm để sắp xếp)';
$lngstr['label_questionstats_hdr_questionid'] = 'ID';
$lngstr['label_questionstats_hdr_questionid_hint'] = 'ID câu hỏi';
$lngstr['label_questionstats_hdr_questiondata'] = 'Dữ liệu câu hỏi';
$lngstr['label_questionstats_hdr_questiondata_hint'] = 'Dữ liệu câu hỏi';
$lngstr['label_questionstats_hdr_answerclicks'] = 'Clicks';
$lngstr['label_questionstats_hdr_answerclicks_hint'] = 'Answer clicks';
$lngstr['label_questionstats_hdr_answerpercent'] = '%';
$lngstr['label_questionstats_hdr_answerpercent_hint'] = 'Những phần trăm';
$lngstr['label_manageusers_hdr_userid'] = 'ID';
$lngstr['label_manageusers_hdr_userid_hint'] = 'User ID (Bấm để sắp xếp)';
$lngstr['label_manageusers_hdr_user_notes'] = 'N';
$lngstr['label_manageusers_hdr_user_notes_hint'] = 'Notes';
$lngstr['label_manageusers_hdr_user_name'] = 'Username';
$lngstr['label_manageusers_hdr_user_name_hint'] = 'Username (Bấm để sắp xếp)';
$lngstr['label_manageusers_hdr_user_email'] = 'Email';
$lngstr['label_manageusers_hdr_user_email_hint'] = 'Email (Bấm để sắp xếp)';
$lngstr['label_manageusers_hdr_user_firstname'] = 'Họ';
$lngstr['label_manageusers_hdr_user_firstname_hint'] = 'Họ (Bấm để sắp xếp)';
$lngstr['label_manageusers_hdr_user_lastname'] = 'Tên';
$lngstr['label_manageusers_hdr_user_lastname_hint'] = 'Tên (Bấm để sắp xếp)';
$lngstr['label_manageusers_hdr_user_enabled'] = 'Kích hoạt';
$lngstr['label_manageusers_hdr_user_enabled_hint'] = 'Kích hoạt (Bấm để sắp xếp)';
$lngstr['label_managegroups_hdr_groupid'] = 'ID';
$lngstr['label_managegroups_hdr_groupid_hint'] = 'Group ID (Bấm để sắp xếp)';
$lngstr['label_managegroups_hdr_group_name'] = 'Name';
$lngstr['label_managegroups_hdr_group_name_hint'] = 'Tên Nhóm (Bấm để sắp xếp)';
$lngstr['label_managegroups_hdr_group_description'] = 'Sự Mô tả';
$lngstr['label_managegroups_hdr_group_description_hint'] = 'Group description (Bấm để sắp xếp)';
$lngstr['label_managegroups_hdr_member_of'] = 'Thành viên ';
$lngstr['label_managegroups_hdr_member_of_hint'] = 'Thành viên của (Bấm để sắp xếp)';
$lngstr['label_subjects_hdr_subjectid'] = 'ID';
$lngstr['label_subjects_hdr_subjectid_hint'] = 'Subject ID (Bấm để sắp xếp)';
$lngstr['label_subjects_hdr_subject_name'] = 'Name';
$lngstr['label_subjects_hdr_subject_name_hint'] = 'Subject name (Bấm để sắp xếp)';
$lngstr['label_subjects_hdr_subject_description'] = 'Sự Mô tả';
$lngstr['label_subjects_hdr_subject_description_hint'] = 'Subject description (Bấm để sắp xếp)';
$lngstr['label_etemplates_hdr_etemplateid'] = 'ID';
$lngstr['label_etemplates_hdr_etemplateid_hint'] = 'Email template ID (Bấm để sắp xếp)';
$lngstr['label_etemplates_hdr_etemplate_name'] = 'Name';
$lngstr['label_etemplates_hdr_etemplate_name_hint'] = 'Email template name (Bấm để sắp xếp)';
$lngstr['label_etemplates_hdr_etemplate_description'] = 'Sự Mô tả';
$lngstr['label_etemplates_hdr_etemplate_description_hint'] = 'Sự mô tả khung mẫu Email (Bấm để sắp xếp)';

$lngstr['page-rtemplates']['hdr_rtemplateid'] = 'ID';
$lngstr['page-rtemplates']['hdr_rtemplateid_hint'] = 'ID Khung mẫu Báo cáo(Bấm để sắp xếp)';
$lngstr['page-rtemplates']['hdr_rtemplate_name'] = 'Name';
$lngstr['page-rtemplates']['hdr_rtemplate_name_hint'] = 'Report template name (Bấm để sắp xếp)';
$lngstr['page-rtemplates']['hdr_rtemplate_description'] = 'Description';
$lngstr['page-rtemplates']['hdr_rtemplate_description_hint'] = 'Report template description (Bấm để sắp xếp)';

$lngstr['label_grades_hdr_gscaleid'] = 'ID';
$lngstr['label_grades_hdr_gscaleid_hint'] = 'Grading system ID (Bấm để sắp xếp)';
$lngstr['label_grades_hdr_gscale_name'] = 'Name';
$lngstr['label_grades_hdr_gscale_name_hint'] = 'Grading system name (Bấm để sắp xếp)';
$lngstr['label_grades_hdr_gscale_description'] = 'Description';
$lngstr['label_grades_hdr_gscale_description_hint'] = 'Grading system description (Bấm để sắp xếp)';
$lngstr['label_gradescales_hdr_gscale_gradeid'] = 'ID';
$lngstr['label_gradescales_hdr_gscale_gradeid_hint'] = 'Grade ID (Bấm để sắp xếp)';
$lngstr['label_gradescales_hdr_grade_from'] = 'Min';
$lngstr['label_gradescales_hdr_grade_from_hint'] = 'Minimum (Bấm để sắp xếp)';
$lngstr['label_gradescales_hdr_grade_to'] = 'Max';
$lngstr['label_gradescales_hdr_grade_to_hint'] = 'Maximum (Bấm để sắp xếp)';
$lngstr['label_gradescales_hdr_grade_name'] = 'Name';
$lngstr['label_gradescales_hdr_grade_name_hint'] = 'Grade name (Bấm để sắp xếp)';
$lngstr['label_gradescales_hdr_grade_description'] = 'Description';
$lngstr['label_gradescales_hdr_grade_description_hint'] = 'Grade description (Bấm để sắp xếp)';
$lngstr['label_visitors_hdr_visitorid'] = 'ID';
$lngstr['label_visitors_hdr_visitorid_hint'] = 'Visitor ID (Bấm để sắp xếp)';
$lngstr['label_visitors_hdr_startdate'] = 'Date';
$lngstr['label_visitors_hdr_startdate_hint'] = 'Date (Bấm để sắp xếp)';
$lngstr['label_visitors_hdr_username'] = 'Username';
$lngstr['label_visitors_hdr_username_hint'] = 'Username (Bấm để sắp xếp)';
$lngstr['label_visitors_hdr_hits'] = 'Hits';
$lngstr['label_visitors_hdr_hits_hint'] = 'Hits (Bấm để sắp xếp)';
$lngstr['label_visitors_hdr_ip'] = 'IP-Address';
$lngstr['label_visitors_hdr_ip_hint'] = 'IP-address';
$lngstr['label_visitors_hdr_host'] = 'Host Name';
$lngstr['label_visitors_hdr_host_hint'] = 'Host name (Bấm để sắp xếp)';
$lngstr['label_visitors_hdr_referer'] = 'Referrer';
$lngstr['label_visitors_hdr_referer_hint'] = 'Referrer (Bấm để sắp xếp)';
$lngstr['page-sections']['hdr_sectionid'] = 'Seq';
$lngstr['page-sections']['hdr_sectionid_hint'] = 'Chuỗi (Bấm để sắp xếp)';
$lngstr['page-sections']['hdr_section_name'] = 'Tên';
$lngstr['page-sections']['hdr_section_name_hint'] = 'Tên Mục(khu vực) (Bấm để sắp xếp)';
$lngstr['page-sections']['hdr_section_description'] = 'Sự Mô tả';
$lngstr['page-sections']['hdr_section_description_hint'] = 'Sự mô tả Mục(khu vực) (Bấm để sắp xếp)';


$lngstr['button_signin'] = 'Đăng nhập';
$lngstr['button_signin_as_guest'] = 'Đăng nhập như là Khách';
$lngstr['button_register'] = 'Đăng ký';
$lngstr['button_starttest'] = 'Làm Bài';
$lngstr['button_continue'] = 'Tiếp tục';
$lngstr['button_showresults'] = 'Tiếp tục';
$lngstr['button_answer'] = 'Trả lời';
$lngstr['button_submit'] = 'Chọn Đáp án';
$lngstr['button_update'] = 'Cập nhật';
$lngstr['button_update_and_edit_questions'] = 'Cập nhật / chuyển qua câu hỏi';
$lngstr['button_update_and_create_new_question'] = 'Cập nhật / tạo ra câu hỏi mới';
$lngstr['button_back'] = 'Ngược lại';
$lngstr['button_cancel'] = 'Hủy bỏ';
$lngstr['button_set'] = 'Thiết lập';
$lngstr['button_import'] = 'Nhập vào';
$lngstr['button_browse'] = 'Duyệt';

$lngstr['label_pleasespecify'] = '- Mời Chỉ rõ -';

$lngstr['label_username'] = 'Username:';
$lngstr['label_password'] = 'Password:';
$lngstr['label_confirmpassword'] = 'Xác nhận lại:';
$lngstr['label_newpassword'] = 'Mật khẩu mới:';
$lngstr['label_email'] = 'Email:';
$lngstr['label_title'] = 'Tiêu đề:';
$lngstr['label_firstname'] = 'Họ';
$lngstr['label_lastname'] = 'Tên:';
$lngstr['label_middlename'] = 'Tên đệm:';

$lngstr['label_address'] = 'Địa chỉ:';
$lngstr['label_city'] = 'Thành phố/Huyện:';
$lngstr['label_state'] = 'Bang/Tỉnh/Thành phố:';
$lngstr['label_zip'] = 'Mã bưu chính:';
$lngstr['label_country'] = 'Nước:';
$lngstr['label_phone'] = 'Điện thoại:';
$lngstr['label_fax'] = 'Fax:';
$lngstr['label_mobile'] = 'Điện thoại di động:';
$lngstr['label_pager'] = 'Pager:';
$lngstr['label_ipphone'] = 'IP Điện thoại :';
$lngstr['label_webpage'] = 'Trang Web:';
$lngstr['label_icq'] = 'ICQ:';
$lngstr['label_msn'] = 'MSN messenger:';
$lngstr['label_aol'] = 'AOL messenger:';
$lngstr['label_gender'] = 'Giới tính:';
$lngstr['label_gender_items'] = array(0 => $lngstr['label_pleasespecify'], 1 => 'Nam', 2 => 'Nữ');
$lngstr['label_birthday'] = 'Sinh nhật:';
$lngstr['label_husbandwife'] = 'Người Chồng (vợ):';
$lngstr['label_children'] = 'Con cái:';
$lngstr['label_trainer'] = 'Huấn luyện viên:';
$lngstr['label_photo'] = 'Bức ảnh:';

$lngstr['label_company'] = 'Công ty:';
$lngstr['label_cposition'] = 'Vị trí:';
$lngstr['label_department'] = 'Ban:';
$lngstr['label_coffice'] = 'Văn phòng:';
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
$lngstr['label_cphoto'] = 'Biểu tượng:';

$lngstr['label_userfield'] = 'Custom field %d:';
$lngstr['label_userfield_caption'] = 'Custom field %d caption:';
$lngstr['label_userfield_type'] = 'Custom field %d type:';
$lngstr['label_userfield_type_items'] = array(CONFIG_CONST_type_singlelinetext => 'Single-line text', CONFIG_CONST_type_multilinetext => 'Multiline text', CONFIG_CONST_type_dropdownlist => 'Drop-down list');
$lngstr['label_userfield_values_hint'] = '(comma-separated list items)';

$lngstr['label_filter_header'] = 'Thiết lập bộ lọc (Bấm để xem/Ẩn)';
$lngstr['button_set_filter'] = 'Thiết lập bộ lọc';
$lngstr['button_remove_filter'] = 'Tháo gỡ bộ lọc';
$lngstr['page_reportsmanager']['filter_dates_years_items'] = array(0 => '', 'd0' => '0 Ngày', 'd1' => '1 Ngày', 'd2' => '2 Ngày', 'd3' => '3 Ngày', 'd4' => '4 Ngày', 'd5' => '5 Ngày', 'd6' => '6 Ngày', 'd7' => '1 Tuần', 'd14' => '2 Tuần', 'd21' => '3 Tuần', 'd29' => '4 Tuần', 'm1' => '1 Tháng', 'm2' => '2 Tháng', 'm3' => '3 Tháng', 'm4' => '4 Tháng', 'm5' => '5 Tháng', 'm6' => '6 Tháng', 'm7' => '7 Tháng', 'm8' => '8 Tháng', 'm9' => '9 Tháng', 'm10' => '10 Tháng', 'm11' => '11 Tháng', 'y1' => '1 Năm', 'y2' => '2 Năm', 'y3' => '3 Năm', 'y4' => '4 Năm', 'y5' => '5 Năm', 'y6' => '6 Năm');
$lngstr['page_reportsmanager']['filter_dates_years'] = 'Ngày:';
$lngstr['page_reportsmanager']['div_report_header'] = 'Chọn 1 báo cáo (Bấm để xem/Ẩn)';
$lngstr['page_reportsmanager']['report_list'] = 'Khung mẫu Báo cáo:';
$lngstr['page_reportsmanager']['report_export_to_csv'] = 'Xuất ra CSV';
$lngstr['page_reportsmanager']['report_preview'] = 'Xem thử báo cáo này';
$lngstr['page_reportsmanager']['report_print'] = 'In báo cáo này';
$lngstr['page_reportsmanager']['fields']['name']['resultid'] = $lngstr['label_report_hdr_resultid'];
$lngstr['page_reportsmanager']['fields']['name']['result_datestart'] = $lngstr['label_report_hdr_result_datestart'];
$lngstr['page_reportsmanager']['fields']['name']['result_datestart_formatted'] = $lngstr['label_report_hdr_result_datestart'];
$lngstr['page_reportsmanager']['fields']['name']['userid'] = 'User ID';
$lngstr['page_reportsmanager']['fields']['name']['user_name'] = $lngstr['label_report_hdr_user_name'];
$lngstr['page_reportsmanager']['fields']['name']['user_firstname'] = 'Họ';
$lngstr['page_reportsmanager']['fields']['name']['user_lastname'] = 'Tên';
$lngstr['page_reportsmanager']['fields']['name']['testid'] = 'ID bài kiểm';
$lngstr['page_reportsmanager']['fields']['name']['test_name'] = $lngstr['label_report_hdr_test_name'];
$lngstr['page_reportsmanager']['fields']['name']['test_attempts'] = $lngstr['page_reportsmanager']['hdr_test_attempts'];
$lngstr['page_reportsmanager']['fields']['name']['result_timeexceeded'] = $lngstr['label_report_hdr_result_timeexceeded'];
$lngstr['page_reportsmanager']['fields']['name']['result_points'] = $lngstr['label_report_hdr_result_points'];
$lngstr['page_reportsmanager']['fields']['name']['result_pointsmax'] = $lngstr['label_report_hdr_result_pointsmax'];
$lngstr['page_reportsmanager']['fields']['name']['result_score'] = $lngstr['label_report_hdr_result_score'];
$lngstr['page_reportsmanager']['fields']['name']['grade_name'] = $lngstr['label_report_hdr_gscale_gradeid'];

$lngstr['page_register']['no_username'] = 'No correct username specified.<br>';
$lngstr['page_register']['no_email'] = 'No correct email specified.<br>';
$lngstr['page_register']['no_password'] = 'Password and repeated password do not match.<br>';
$lngstr['page_register']['no_title'] = 'No correct title specified.<br>';
$lngstr['page_register']['no_firstname'] = 'No correct first name specified.<br>';
$lngstr['page_register']['no_lastname'] = 'No correct Tên specified.<br>';
$lngstr['page_register']['no_middlename'] = 'No correct middle name specified.<br>';

$lngstr['page_register']['no_address'] = 'No correct address specified.<br>';
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
$lngstr['page_register']['no_trainer'] = 'No correct trainer name specified.<br>';
$lngstr['page_register']['no_photo'] = 'No correct photo specified.<br>';

$lngstr['page_register']['no_company'] = 'No correct company specified.<br>';
$lngstr['page_register']['no_cposition'] = 'No correct company position specified.<br>';
$lngstr['page_register']['no_department'] = 'No correct company department specified.<br>';
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

$lngstr['page_register']['no_userfield'] = 'Ko đúng "%s" lĩnh vực được chỉ rõ.<br>';
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
$lngstr['err_username_duplicate'] = 'Username này đã được sử dụng. Xin chọn username khác.<br>';
$lngstr['err_groupname_duplicate'] = 'Tên nhóm này đã được sử dụng. Xin chọn tên nhóm khác.<br>';
$lngstr['err_subjectname_duplicate'] = 'Tên đề tài này đã được sử dụng. Xin chọn tên phụ thuộc khác.<br>';
$lngstr['err_signin_incorrect']  = 'Ko thể đăng nhập. Username hoặc password đã sai.<br>';

// Register page:
$lngstr['page-register']['intro'] = 'Bạn có thể sử dụng mẫu (dạng) này để thêm một tài khoản.';
$lngstr['page-register']['successful'] = 'Chào "%s" ! Bạn đã đăng kí thành công. <br>Chúc tôi rất vui khi bạn tham gia học tập Online trên TânPhú.Net. <br>Chúc bạn học gỏi, Thành công trên con đường học vấn. <br>Nếu có gì thắc mắc hay góp ý bạn có thể liên lạc với :<br> <font color=blue>Admin: Vũ Thanh Lai, Email: VuThanhLai@Gmail.Com Hoặc Y!M: KiUcTinhYeu_1811 .</font>';
$lngstr['page-register']['check_activation_email'] = 'Một email đã được gửi tới địa chỉ (của) các bạn. Nó chứa đựng những chỉ dẫn để hoàn thành sự đăng ký (của) các bạn.';
$lngstr['page-register']['wait_for_approval'] = 'Tài khoản (của) Các bạn được tạo ra một cách thành công thì phải (thì)kích hoạt bởi một người quản trị, mời kiên nhẫn.';
$lngstr['page-register']['account_activated'] = 'Tài khoản (của) Các bạn đã được kích hoạt một cách thành công.';
$lngstr['page-register']['title_items'] = array('' => $lngstr['label_none'], 'Dr.' => 'Dr.', 'Miss' => 'Miss', 'Mr.' => 'Mr.', 'Mrs.' => 'Mrs.', 'Ms.' => 'Ms.', 'Prof.' => 'Prof.', 'Rev.' => 'Rev.');
$lngstr['page_register']['required_mark'] = REQUIRED_FIELD_MARK.' Tức là bạn phải bắt buộc nhập';

// Sign in page:
$lngstr['page_signin_box_signin_intro'] = '<font color="red">Vui lòng đăng nhập</font>';
$lngstr['page_signin_box_signin'] = $lngstr['label_username'];
$lngstr['page_signin_box_password'] = $lngstr['label_password'];
$lngstr['page_signin_box_register_intro'] = '<b>Nếu bạn chưa có tài khoản?</b>Hãy đăng ký ngay bằng cách <a href="register.php">Kích Vào Đây</a>.';
$lngstr['page_signin_box_lostpassword_intro'] = '<b>Bạn đã có tài khoản? </b> Nếu bạn <a href="lostpassword.php">quên mật khẩu</a>, Chúng tôi sẽ gửi lại qua mail của bạn.<br><br><b><H4><font color="red"> Hãy Đăng ký Thành viên để sử dụng hết chức năng nhé</font>';
$lngstr['page_signin']['test_code'] = 'Mã bài kiểm tra:';

// Forgot password page:
$lngstr['page_lostpassword_enter_username'] = '<b>Hãy nhập tên</b>';
$lngstr['button_send_new_password'] = 'Gửi lại password mới';
$lngstr['err_username_not_found'] = 'Không tìm thấy người dùng này. Hãy thử lại !.';
$lngstr['inf_password_reset'] = 'Mật khẩu đã được gửi lại, hãy mở mail ra xem nhé !.';

// Take a test page:
$lngstr['page_takeatest']['hdr_testid'] = $lngstr['label_edittests_hdr_testid'];
$lngstr['page_takeatest']['hdr_testid_hint'] = $lngstr['label_edittests_hdr_testid_hint'];
$lngstr['page_panel_hdr_test'] = 'Tên bài';
$lngstr['page_panel_hdr_test_hint'] = 'Tên và ghi chú của bài kiểm tra(Bấm để sắp xếp)';
$lngstr['page_panel_hdr_teststatus'] = 'Trạng thái';
$lngstr['page_panel_hdr_teststatus_hint'] = 'Trạng thái bài kiểm tra';
$lngstr['page_panel_hdr_gettest'] = 'Loại hình';
$lngstr['page_panel_hdr_gettest_hint'] = 'Loại hình';
$lngstr['page_panel_status_available'] = 'sẵn sàng';
$lngstr['page_panel_status_will_be_available_on'] = 'Will be available on<br>%s';
$lngstr['page_panel_status_inprogress'] = 'Đang thực hiện';
$lngstr['page_panel_get_test_link'] = 'Bắt đầu làm bài';
$lngstr['page_takeatest']['buy_test'] = 'Buy';
$lngstr['page-takeatest']['attempts_left'] = 'Được phép<br>(Số lần thử: %d)';
$lngstr['page-takeatest']['attempts_limit_reached'] = 'Không được phép<br>(Số lần thử: 0)';
$lngstr['page-takeatest']['passed'] = 'Đi qua';
$lngstr['page_takeatest']['score'] = 'Ghi điểm';
$lngstr['page_takeatest']['score_total'] = 'Điểm tổng (của) bạn: %d / %d (%.2f%%)';
$lngstr['page_takeatest']['hdr_score'] = 'Points'; // 'Score'
$lngstr['page_takeatest']['hdr_score_hint'] = 'Points'; // 'Score (Bấm để sắp xếp)'
$lngstr['page_test_results'] = 'Kết quả làm bài';
$lngstr['page_test_results_homepage'] = 'Trở lại làm trang làm bài';
$lngstr['page_test_results_viewresults'] = 'Xem chi tiết kế quả';
$lngstr['page_test']['results_nexttest'] = 'Tiếp tục';
$lngstr['page_test']['finish_test'] = 'Hủy không làm bài';
$lngstr['page_test']['qst_finish_test_header'] = 'Hủy không làm bài';
$lngstr['page_test']['qst_finish_test'] = 'Bạn có thực sự muốn hủy bài làm không?';
$lngstr['page_test']['review_question'] = 'Xem';
$lngstr['page_test']['close_this_window'] = 'Đóng cửa sổ';

$lngstr['page_results_delete_record'] = 'Xóa một Bản ghi';
$lngstr['page_edittests_delete_test'] = 'Xóa một bài kiểm';
$lngstr['page_edittests_delete_question'] = 'Xóa một Câu hỏi';
$lngstr['page_edittests_delete_question_link'] = 'Xóa một Câu hỏi';
$lngstr['page_managegroups_delete_group'] = 'Xóa một Nhóm';
$lngstr['page_subjects_delete_subject'] = 'Xóa một Đề tài';
$lngstr['page_manageusers_delete_user'] = 'Xóa một Người sử dụng';
$lngstr['page_etemplates_delete_etemplate'] = 'Xóa một Khung mẫu Email';
$lngstr['page-rtemplates']['delete_rtemplate'] = 'Xóa một Khung mẫu Báo cáo';
$lngstr['page_grades_delete_grade'] = 'Xóa một Hệ thống Đường dốc';
$lngstr['page_gradescales_delete_grade'] = 'Xóa một Thứ bậc';
$lngstr['page_visitors_delete_visitor'] = 'Xóa một Bản ghi';
$lngstr['page_visitors']['ipwhois'] = 'Lookup this IP address in the WhoIs service';

//[CUSTOM] $lngstr['page_testsettings']['test_type'] = 'Test type:';
//[CUSTOM] $lngstr['page_testsettings']['test_type_items'] = array(0 => 'Default', 1 => 'Survey');
$lngstr['page_edittests_subjectid'] = 'Đề tài kiểm tra:';
$lngstr['page_edittests_testname'] = 'Bài kiểm tra:';
$lngstr['page_testmanager']['test_code'] = 'Test code:'; // $lngstr['page_all']['mnemonic_code']
$lngstr['page_edittests_testenabled'] = 'Bài kiểm này đã kích hoạt';
$lngstr['page_edittests_teststart'] = 'Bài kiểm bắt đầu ngày:';
$lngstr['page_edittests_testend'] = 'Bài kiểm kết thúc ngày:';
$lngstr['page_edittests_testtime'] = 'Thời gian kiểm:';
$lngstr['page_edittests_testtimeforceout'] = 'Kết thúc bài kiểm này trong giới hạn thời gian (thì) đạt được';
$lngstr['page-testmanager']['attempts_allowed'] = 'Số lần(Nỗ lực) cho phép:';
$lngstr['page-testmanager']['attempts_allowed_list'] = array(0 => 'không giới hạn', 1 => '1 attempt', 2 => '2 attempts', 3 => '3 attempts', 4 => '4 attempts', 5 => '5 attempts', 6 => '6 attempts', 7 => '7 attempts', 8 => '8 attempts', 9 => '9 attempts', 10 => '10 attempts', 11 => '11 attempts', 12 => '12 attempts', 13 => '13 attempts', 14 => '14 attempts', 15 => '15 attempts', 16 => '16 attempts', 17 => '17 attempts', 18 => '18 attempts', 19 => '19 attempts', 20 => '20 attempts');
$lngstr['page_testmanager']['content_protection'] = 'Sự bảo vệ Nội dung:';
$lngstr['page_testmanager']['content_protection_list'] = array(0 => $lngstr['label_none'], 1 => 'Bảo vệ (JavaScript)');
$lngstr['page_edittests_showquestions'] = 'Cho thấy những câu hỏi:';
$lngstr['page_testmanager']['showquestions_items'] = array(1 => 'One by one', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10', 0 => 'All questions');
$lngstr['page_edittests_shuffle'] = 'Tuỳ chọn tráo:';
$lngstr['page_edittests_shuffleq'] = 'TRáo câu hỏi';
$lngstr['page_edittests_shufflea'] = 'Tráo câu trả lời';
$lngstr['page_testmanager']['review_options'] = 'Những tùy chọn Tổng quát:';
$lngstr['page_testmanager']['review_list'] = array(IGT_TEST_REVIEW_NOTALLOWED => 'Ngăn cấm bất kỳ tổng quan nào', IGT_TEST_REVIEW_ALLOWED => 'Cho phép những câu hỏi tổng quan');
$lngstr['page_edittests_gradingsystem'] = 'Sắp xếp hệ thống:';
// $lngstr['label_no_gradingsystem'] = 'Không dùng';
$lngstr['page_edittests_resultsettings'] = 'báo cáo những kết quả Kiểm tra :';
$lngstr['page_edittests_result_showqfeedback'] = 'Cho thấy sự phản hồi';
$lngstr['page_edittests_result_showgrade'] = 'Cho thấy thứ bậc';
$lngstr['page_testmanager']['result_showgradefeedback'] = 'Cho thấy sự phản hồi thứ bậc';
$lngstr['page_edittests_result_showanswers'] = 'Sự Trưng bày trả lời';
$lngstr['page_edittests_result_showpoints'] = 'Cho thấy những điểm';
$lngstr['page_testsettings']['custom_report'] = 'Use custom template:';
$lngstr['page_edittests_testdescription'] = 'Sự mô tả Ngắn:';
$lngstr['page_edittests_testinstructions'] = 'Toàn bộ nhưng chỉ dẫn kiểm tra:';
$lngstr['page_edittests_testnotes'] = 'Kiểm tra những ghi chú ((cho) sự sử dụng trong):';
$lngstr['page_edittests_assignedto'] = 'Gán Tới:';
// $lngstr['page_edittests_assignedto_everybody'] = 'Everybody';
// $lngstr['page_edittests_assignedto_nobody'] = 'Nobody';
$lngstr['page_edittests_assignto_everybody'] = 'Sự Gán tới mọi người (đè bất kỳ sự thiết đặt nào)';
$lngstr['page_edittests_advancedreport'] = 'Báo cáo chuyên sâu:';
// $lngstr['page-testsettings']['no_report'] = 'No report';
$lngstr['page-testsettings']['report_template'] = 'Khung mẫu:';
$lngstr['page-testsettings']['report_grade_condition'] = 'Điều kiện Thứ bậc:';
$lngstr['page-testsettings']['no_condition'] = 'Không có điều kiện nào';
// $lngstr['label_no_advanced_report'] = 'No advanced report';
$lngstr['page_edittests_advancedreport_showhtml'] = 'Xem báo cáo HTML';
$lngstr['page_edittests_advancedreport_showpdf'] = 'Thấy báo cáo dạng PDF';
$lngstr['page_edittests_sendresultsbyemail'] = 'Send results by email:';
$lngstr['page_edittests_sendresultsbyemail_template'] = 'Khung mẫu:';
$lngstr['page_edittests_sendresultsbyemail_to'] = 'Đến:';
$lngstr['page_edittests_result_emailtouser'] = 'gửi những kết quả cho những người sử dụng';
$lngstr['label_do_not_send_email'] = 'Không gửi đi';
$lngstr['page-testmanager']['prevtest'] = 'Bài kiểm trước:';
$lngstr['page-testmanager']['nexttest'] = 'Bài kiểm kế:';
$lngstr['page_testmanager']['testprice'] = 'Bài kiểm giá ('.$lngstr['language']['currency_name'].'):';
$lngstr['page_testmanager']['settings']['section_groups'] = 'Nhóm (Bấm để xem/Ẩn)'; // $lngstr['page_users']['section_groups']
$lngstr['page_testmanager']['settings']['section_advanced'] = 'Chuyên sâu (Bấm để xem/Ẩn)'; // $lngstr['page_grade']['section_advanced']
$lngstr['page_testmanager']['other_options'] = 'Những tùy chọn khác:';
$lngstr['page_testmanager']['repeat_until_answered_correctly'] = 'Lặp lại bài kiểm cho đến khi tất cả các câu hỏi đều được trả lời chính xác';
$lngstr['page_testmanager']['settings']['section_notes'] = 'Những ghi chú (Bấm để xem/Ẩn)'; // $lngstr['page_users']['section_notes']

$lngstr['page_testmanager']['view_test_stats'] = 'Xem những thồng kê kiểm tra';

$lngstr['page_assignto_hdr_assignto'] = 'Gán';
$lngstr['page_assignto_hdr_assignto_hint'] = 'Gán Tới';

$lngstr['page_testmanager_import']['document_label'] = 'Nhập tài liệu này:';
$lngstr['page_testmanager_import']['document_howto'] = '';
$lngstr['page_importtest_ut_import_document'] = 'Hệ thống đơn vị Nhập Tài liệu:';
$lngstr['page_importtest_ut_import_document_hint'] = 'Dán Hệ thống đơn vị \ Là Tài liệu Nhập ở đây';
$lngstr['page_importtest_ut_import_document_howto'] = '1. Mô đun Người biên tập được chạy (của) Hệ thống đơn vị;<br> 2. Lựa chọn Tài liệu Nhập từ Hồ sơ> Thực đơn Xuất ;<br> 3. Sự Sao chép (việc sử dụng một bìa kẹp giấy) và IT Clipboard tới cái hộp văn bản này.';
$lngstr['page_testmanager_import']['section_delimiters'] = 'Những tiền tố (Bấm để xem/Ẩn)';
$lngstr['page_testmanager_import']['question_delimiter'] = 'Tiền tố Câu hỏi:';
$lngstr['page_testmanager_import']['answer_delimiter'] = 'Lựa chọn Tiền tố :';
$lngstr['page_testmanager_import']['answer2_delimiter'] = 'Lựa chọn Tiền tố ( Cho cột 2):';
$lngstr['page_testmanager_import']['preq_delimiter'] = 'Thêm vào đầu câu hỏi:';
$lngstr['page_testmanager_import']['postq_delimiter'] = 'Thêm vào đâu giải thích câu hỏi:';
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
$lngstr['page_testmanager_stats']['hdr_subject_correct_hint'] = 'Số Câu trả lời đúng';
$lngstr['page_testmanager_stats']['view_results_stats'] = 'View statistics';

$lngstr['label_subjects_edit'] = 'Quản lý những đề tài';
// Subjects page:
$lngstr['label_action_create_subject'] = 'Tạo ra một đề tài mới';
$lngstr['page_subjects']['parent_subjectid'] = 'Đề tài mẹ:';
$lngstr['page_subjects_subjectid'] = 'ID Đề tài:';
$lngstr['page_subjects_subjectname'] = 'Tên đề tài:';
$lngstr['page_subjects_subjectdescription'] = 'Sự mô tả đề tài:';

// Grades page:
$lngstr['label_action_create_grade'] = 'Tạo ra một hệ thống đường dốc mới';
$lngstr['label_action_create_gradescale'] = 'Tạo ra một thứ bậc mới';
$lngstr['page_grades_gscaleid'] = 'Sắp xếp hệ thống  ID:';
$lngstr['page_grades_gradename'] = 'Sắp xếp tên hệ thống:';
$lngstr['page_grades_gradedescription'] = 'Sắp xếp sự mô tả hệ thống:';
$lngstr['page_grades_gradescale'] = 'Sắp xếp quy mô:';
$lngstr['page_grades_gradescale_text'] = 'Edit the grading scale';
$lngstr['page_grades']['edit_grade'] = 'edit this grade';
$lngstr['label_action_grade_moveup'] = 'Move up';
$lngstr['label_action_grade_movedown'] = 'Move down';
$lngstr['page_grade_gscaleid'] = 'Grade ID:';
$lngstr['page_grade_gradename'] = 'Grade name:';
$lngstr['page_grade_gradedescription'] = 'Grade description:';
$lngstr['page_grade']['feedback'] = 'Grade feedback:';
$lngstr['page_grade']['section_advanced'] = 'Advanced (Bấm để xem/Ẩn)';
$lngstr['page_grade_gradefrom'] = 'Minimum (%):';
$lngstr['page_grade_gradeto'] = 'Maximum (%):';

// Question statistics page:
$lngstr['page_questionstats_correct_count'] = 'Những câu trả lời Đúng:';
$lngstr['page_questionstats_partially_count'] = 'Những câu trả lời Từng phần đúng:';
$lngstr['page_questionstats_incorrect_count'] = 'Những câu trả lời Sai:';
$lngstr['page_questionstats_undefined_count'] = 'Những câu trả lời Không xác định:';
$lngstr['page_questionstats_fillintheblank_others'] = 'Những cái khác (%d)';
$lngstr['page_editquestion_subjectid'] = 'Đề tài câu hỏi:';
$lngstr['page_editquestion_type'] = 'Loại câu hỏi:';
$lngstr['page_editquestion_question_text'] = 'Câu hỏi:';
$lngstr['page_editquestion_question_name'] = 'Tên câu hỏi:';
$lngstr['page_editquestion_answer_count'] = 'Số những câu trả lời:';
$lngstr['page_editquestion_answers'] = 'TRả lời:';
$lngstr['page_editquestion_time'] = 'Thời gian:';
$lngstr['page_editquestion_points'] = 'Gia trị điểm:';
$lngstr['page_editquestion']['shuffle_answers'] = 'Xáo câu trả lời:';
$lngstr['page_editquestion']['shuffle_answers_items'] = array(0 => 'Mặc định (Thừa kế)', 1 => 'Không xáo', 2 => 'Xáo', 3 => 'Xáo (trừ một đầu tiên)', 4 => 'Xáo (trừ một cuối cùng)');
$lngstr['page_editquestion']['advanced_settings'] = 'Những tùy chọn nâng cao:';
$lngstr['page_editquestion']['allow_partial_answers'] = 'Cho phép những câu trả lời từng phần đúng';
$lngstr['page_editquestion_emptyquestion'] = '<p><strong>Xin vào câu hỏi (của) các bạn ở đây...</strong></p>';
// $lngstr['page_editquestion']['used_question'] = 'Note (grayed item): this question is already used in the test';

$lngstr['label_action_visitors_view'] = 'Xem những chi tiết bản ghi này';
$lngstr['page_visitordetails_visitorid'] = 'ID Người đến thăm:';
$lngstr['page_visitordetails_startdate'] = 'Bắt đầu ngày:';
$lngstr['page_visitordetails_enddate'] = 'Kết thúc ngày:';
$lngstr['page_visitordetails_timespent'] = 'Thời gian trôi qua:';
$lngstr['page_visitordetails_username'] = $lngstr['label_username'];
$lngstr['page_visitordetails_ipaddress'] = 'Địa chỉ-IP:';
$lngstr['page_visitordetails_host'] = 'Host:';
$lngstr['page_visitordetails_referer'] = 'Referrer:';
$lngstr['page_visitordetails_inurl'] = 'Entry page:';
$lngstr['page_visitordetails_outurl'] = 'Exit page:';
$lngstr['page_visitordetails_hits'] = 'Hits:';
$lngstr['page_visitordetails_useragent'] = 'Đại diện Người sử dụng:';

$lngstr['page_config']['section_site'] = 'Web site (Bấm để xem/Ẩn)';
$lngstr['page_config']['text_editor'] = 'Khung soạn thảoWYSIWYG editor:';
$lngstr['page_config']['text_editorlist'] = array(CONFIG_CONST_iseditor2 => 'Khung soạn thảo Mặc định', CONFIG_CONST_iseditor => 'Default editor (old)', CONFIG_CONST_htmlareaeditor => 'Vùng soạn thảo HTML');
$lngstr['page_config']['list_length'] = 'Chiều dài Danh sách:';
$lngstr['page_config']['store_logs'] = 'Thống kê Mạng:';
$lngstr['page_config']['section_registration'] = 'Sự Đăng ký (Bấm để xem/Ẩn)';
$lngstr['page_config']['can_register'] = 'Cho phép sự đăng ký người sử dụng:';
$lngstr['page_config']['upon_registration'] = 'Sau khi đăng kí:';
$lngstr['page_config']['upon_registration_select'] = array(0 => 'Kích hoạt, không làm cái gì', 1 => 'Kích hoạt, đăng nhập tự động', 2 => 'Không kích hoạt, gửi email kích hoạt cho người sử dụng', 4 => 'Không kích hoạt, gửi email kích hoạt cho người quản trị', 3 => 'Không kích hoạt, chờ kiểm duyệt của Admin rùi mới kích hoạt ( Chẳng hạn. sự xử lý thanh toán)');
$lngstr['page_config']['reg_intro'] = 'Lời giới thiệu:';
$lngstr['page_config']['donotshow'] = 'Không hiện ra';
$lngstr['page_config']['donotshow_autogenerate'] = 'Không hiện ra, tự động sinh ra';
$lngstr['page_config']['show_donotrequire'] = 'Hiện ra, không đòi hỏi';
$lngstr['page_config']['show_autogenerate'] = 'Hiện ra, tự động sinh ra';
$lngstr['page_config']['show_require'] = 'Hiện ra, đòi hỏi';

$lngstr['page_users']['username'] = $lngstr['label_username'];
$lngstr['page_users']['password'] = $lngstr['label_password'];
$lngstr['page_users']['email'] = $lngstr['label_email'];
$lngstr['page_users']['title'] = $lngstr['label_title'];
$lngstr['page_users']['firstname'] = $lngstr['label_firstname'];
$lngstr['page_users']['lastname'] = $lngstr['label_lastname'];
$lngstr['page_users']['middlename'] = $lngstr['label_middlename'];

$lngstr['page_users']['member_of'] = 'Thành viên của nhóm:';

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

$lngstr['page_users']['section_groups'] = 'Nhóm (Bấm để xem/Ẩn)';
$lngstr['page_users']['section_personal'] = 'Thông tin Cá nhân (Bấm để xem/Ẩn)';
$lngstr['page_users']['section_work'] = 'Thông tin Công việc (Bấm để xem/Ẩn)';
$lngstr['page_users']['section_additional'] = 'Thông tin Bổ sung (Bấm để xem/Ẩn)';

$lngstr['page_users']['userenabled'] = 'Người dùng này đã kích hoạt';
$lngstr['page_users']['joindate'] = 'Tham gia ngày:';
$lngstr['page_users']['logindate'] = 'Lần đăng nhập trước:';
$lngstr['page_users']['expiredate'] = 'Ngày tháng Hết hạn :';
$lngstr['page_users']['password_confirm'] = $lngstr['label_confirmpassword'];
$lngstr['page_users']['password_new'] = $lngstr['label_newpassword'];
$lngstr['page_users']['section_notes'] = 'Những ghi chú (Bấm để xem/Ẩn)';
$lngstr['page_users']['notes'] = 'Những ghi chú Người sử dụng(Cho sự sử dụng):';

$lngstr['page_reportsmanager']['answerfeedback'] = 'Sự Phản hồi:';
$lngstr['page_reportsmanager']['view_pdf'] = 'Xem báo cáo bạn in PDF';
$lngstr['page_reportsmanager']['view_html'] = 'Xem báo cáo dạng HTML';
$lngstr['page_reportsmanager']['view_none'] = 'Không có báo cáo sẵn có';

$lngstr['page_managegroups_groupid'] = 'ID nhóm:';
$lngstr['page_managegroups_groupname'] = 'Tên Nhóm:';
$lngstr['page_managegroups_groupdescription'] = 'Sự mô tả Nhóm:';
$lngstr['page_groups_access_rights'] = 'Quyền lợi Truy nhập:';
$lngstr['page_groups_access_tests'] = 'Những bài kiểm:';
$lngstr['page_groups_access_tests_select'] = array(0 => 'Sự Truy nhập được từ chối', 1 => 'Xem danh sách bài kiểm', 2 => 'Lấy');
$lngstr['page_groups_access_testmanager'] = 'Quản lý bài kiểm:';
$lngstr['page_groups_access_testmanager_select'] = array(0 => 'Sự Truy nhập được từ chối', 1 => 'Đọc', 2 => 'Viết');
$lngstr['page_groups_access_gradingsystems'] = 'Sắp xếp những hệ thống:';
$lngstr['page_groups_access_gradingsystems_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_emailtemplates'] = 'Những khung mẫu Email:';
$lngstr['page_groups_access_emailtemplates_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_reporttemplates'] = 'Những khung mẫu Báo cáo:';
$lngstr['page_groups_access_reporttemplates_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_reportsmanager'] = 'Quản lý báo cáo:';
$lngstr['page_groups_access_reportsmanager_select'] = array(0 => 'Sự Truy nhập được từ chối', 1 => 'Đọc (sở hữu những kết quả)', 2 => 'Đọc (tất cả các kết quả)', 3 => 'Viết');
$lngstr['page_groups_access_questionbank'] = 'Ngân hàng đề:';
$lngstr['page_groups_access_questionbank_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_subjects'] = 'Môn:';
$lngstr['page_groups_access_subjects_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_groups'] = 'Nhóm:';
$lngstr['page_groups_access_groups_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_users'] = 'Users:';
$lngstr['page_groups_access_users_select'] = array(0 => 'Sự Truy nhập được từ chối', 1 => 'Đọc (sở hữu tài khoản)', 2 => 'Đọc (tất cả các tài khoản)', 3 => 'Viết (Sở hữu tài khoản)', 4 => 'Viết (Tất cả các tài khoản)');
$lngstr['page_groups_access_visitors'] = 'Thống kê Mạng:';
$lngstr['page_groups_access_visitors_select'] = $lngstr['page_groups_access_testmanager_select'];
$lngstr['page_groups_access_config'] = 'Cấu hình:';
$lngstr['page_groups_access_config_select'] = $lngstr['page_groups_access_testmanager_select'];

$lngstr['page_etemplates_etemplateid'] = 'Template ID:';
$lngstr['page_etemplates_etemplatename'] = 'Tên Khung mẫu:';
$lngstr['page_etemplates_etemplatedescription'] = 'Sự mô tả Khung mẫu:';
$lngstr['page_etemplates_etemplatefrom'] = 'Đến từ (Email):';
$lngstr['page_etemplates_etemplatesubject'] = 'Email Đề tài:';
$lngstr['page_etemplates_etemplatebody'] = 'Email body:';
$lngstr['page_etemplates_template_tags'] = 'Những nhãn Khung mẫu';

$lngstr['page-rtemplates']['rtemplateid'] = 'Template ID:';
$lngstr['page-rtemplates']['rtemplatename'] = 'Template name:';
$lngstr['page-rtemplates']['rtemplatedescription'] = 'Template description:';
$lngstr['page-rtemplates']['rtemplatebody'] = 'Report body:';

$lngstr['page_resourcemanager']['hdr_resourceid'] = 'ID';
$lngstr['page_resourcemanager']['hdr_resourceid_hint'] = 'Resource ID (Bấm để sắp xếp)';
$lngstr['page_resourcemanager']['hdr_resource_name'] = 'Resource Name';
$lngstr['page_resourcemanager']['hdr_resource_name_hint'] = 'Resource name (Bấm để sắp xếp)';
$lngstr['page_resourcemanager']['hdr_resource_description'] = 'Description';
$lngstr['page_resourcemanager']['hdr_resource_description_hint'] = 'Resource description (Bấm để sắp xếp)';
$lngstr['page_resourcemanager']['action_create_resource'] = 'Create a new resource';
$lngstr['page_resourcemanager']['action_edit_resource'] = 'Resource settings';
$lngstr['page_resourcemanager']['qst_delete_resource'] = 'Are you sure want to delete this resource?';
$lngstr['page_resourcemanager']['qst_delete_resources'] = 'Are you sure want to delete selected resources?';
$lngstr['page_resourcemanager']['action_delete_resource'] = 'Delete this resource';
$lngstr['page_resourcemanager']['action_delete_resources'] = 'Delete resources (Cho những bản ghi được chọn)';
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
$lngstr['page_couponmanager']['hdr_couponid_hint'] = 'Coupon ID (Bấm để sắp xếp)';
$lngstr['page_couponmanager']['hdr_coupon_name'] = 'Coupon Name';
$lngstr['page_couponmanager']['hdr_coupon_name_hint'] = 'Coupon name (Bấm để sắp xếp)';
$lngstr['page_couponmanager']['hdr_coupon_description'] = 'Description';
$lngstr['page_couponmanager']['hdr_coupon_description_hint'] = 'Coupon description (Bấm để sắp xếp)';
$lngstr['page_couponmanager']['hdr_coupon_code'] = 'Code';
$lngstr['page_couponmanager']['hdr_coupon_code_hint'] = 'Coupon code (Bấm để sắp xếp)';
$lngstr['page_couponmanager']['hdr_coupon_enabled'] = 'Kích hoạt';
$lngstr['page_couponmanager']['hdr_coupon_enabled_hint'] = 'Kích hoạt (Bấm để sắp xếp)';
$lngstr['page_couponmanager']['action_create_coupon'] = 'Create a new coupon';
$lngstr['page_couponmanager']['action_edit_coupon'] = 'Coupon settings';
$lngstr['page_couponmanager']['qst_delete_coupon'] = 'Are you sure want to delete this coupon?';
$lngstr['page_couponmanager']['qst_delete_coupons'] = 'Are you sure want to delete selected coupons?';
$lngstr['page_couponmanager']['action_delete_coupon'] = 'Delete this coupon';
$lngstr['page_couponmanager']['action_delete_coupons'] = 'Delete coupons (Cho những bản ghi được chọn)';
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
$lngstr['page_buycheckout']['err_no_coupon'] = 'Please check your coupon code and re-enter it.<br />';
$lngstr['page_buycheckout']['err_no_handler'] = 'No payment processing handler is assigned.<br />';

$lngstr['page_buystate']['success'] = 'Thank you for your order.<br>';
$lngstr['page_buystate']['fail'] = 'There is a problem processing your order.<br>';

$lngstr['email_answer_iscorrect'] = 'Correct(Bạn làm đúng ko ?): ';
$lngstr['email_answer_points'] = 'Ghi điểm: ';

$lngstr['err_subject_doesnotexist'] = 'Đề tài này không tồn tại.<br>';

$lngstr['err_no_questions'] = 'ko tím thấy câu hỏi trong bài kiê.<br>';
$lngstr['err_no_questions_left_in_bank'] = 'Số lượng câu hỏi ngẫu nhiên được yêu cầu là nhiều hơn so với điều này đề tài chứa đựng.<br>';
$lngstr['err_no_tests'] = 'Hiện thời ko những bài kiểm sẵn có để làm.<br>';
$lngstr['err_no_resources'] = 'There are currently no resources available.<br>';
$lngstr['inf_cant_passtest'] = 'You have not enough rights to take this test.<br>';
$lngstr['inf_cant_view_results'] = 'Bạn không có quyền thực hiện làm bài. Hãy đăng ký thành viên.<br>';
$lngstr['inf_cant_view_reportsmanager_reportsratings'] = 'You have not enough rights to view the ratings page.<br>';
$lngstr['inf_cant_view_this_test_details'] = 'Bạn không có quyền xem kết quả.<br>';
$lngstr['inf_cant_edit_tests'] = 'You have not enough rights to edit tests.<br>';
$lngstr['inf_cant_edit_questions'] = 'You have not enough rights to edit questions.<br>';
$lngstr['inf_cant_access_groups'] = 'You have not enough rights to access groups.<br>';
$lngstr['inf_cant_access_users'] = 'You have not enough rights to access users.<br>';
$lngstr['inf_cant_access_subjects'] = 'You have not enough rights to access subjects.<br>';
$lngstr['inf_cant_access_emailtemplates'] = 'You have not enough rights to access email templates.<br>';
$lngstr['inf_cant_access_reporttemplates'] = 'You have not enough rights to access report templates.<br>';
$lngstr['inf_cant_access_grades'] = 'You have not enough rights to access grading systems.<br>';
$lngstr['inf_cant_access_visitors'] = 'You have not enough rights to access the web statistics section.<br>';
$lngstr['inf_cant_access_config'] = 'You have not enough rights to access the configuration section.<br>';
$lngstr['err_no_test_selected'] = 'Hãy chọn bài test trước đã.<br>';
$lngstr['err_no_question_n_in_db'] = 'Question %d cannot be found.<br>';
$lngstr['err_no_question_id_in_db'] = 'Question ID %d cannot be found.<br>';
$lngstr['err_no_answers_in_question'] = '<b><a href="question-bank.php?action=editq&questionid=%1$d">Question ID %1$d</a></b> has no answers. Please fix it.<br>';
$lngstr['err_no_answer_given'] = 'Bạn chưa đưa ra câu trả lời.<br>';
$lngstr['err_answer_every_question'] = 'Hãy đưa ra câu trả lời của bạn.<br>';

$lngstr['err_no_permissions_to_register'] = 'Bạn không có những sự cho phép để đăng ký một người sử dụng mới';

$lngstr['qst_delete_test'] = 'Bạn chắc chắn muốn sẽ xóa sự thử này?';
$lngstr['qst_delete_tests'] = 'Bạn chắc chắn muốn sẽ xóa những sự thử được lựa chọn?';
$lngstr['qst_delete_question'] = 'Bạn chắc chắn muốn sẽ xóa câu hỏi này?';
$lngstr['qst_delete_questions'] = 'Bạn chắc chắn muốn sẽ xóa những câu hỏi được lựa chọn?';
$lngstr['qst_delete_question_link'] = 'Bạn chắc chắn muốn loại bỏ là câu hỏi này từ sự thử?';
$lngstr['qst_delete_question_links'] = 'Bạn chắc chắn muốn loại bỏ lựa chọn là những câu hỏi từ sự thử?';
$lngstr['qst_delete_record'] = 'Bạn chắc chắn muốn sẽ xóa bản ghi này?';
$lngstr['qst_delete_records'] = 'Bạn chắc chắn muốn sẽ xóa những bản ghi được lựa chọn?';
$lngstr['qst_delete_user'] = 'Bạn chắc chắn muốn sẽ xóa người sử dụng này?';
$lngstr['qst_delete_users'] = 'Bạn chắc chắn muốn sẽ xóa những người sử dụng được lựa chọn?';
$lngstr['qst_delete_group'] = 'Bạn chắc chắn muốn sẽ xóa nhóm này?';
$lngstr['qst_delete_groups'] = 'Bạn chắc chắn muốn sẽ xóa những nhóm được lựa chọn?';
$lngstr['qst_delete_subject'] = 'Bạn chắc chắn muốn sẽ xóa đề tài này?';
$lngstr['qst_delete_subjects'] = 'Bạn chắc chắn muốn sẽ xóa những đề tài được lựa chọn?';
$lngstr['qst_delete_etemplate'] = 'Bạn chắc chắn muốn sẽ xóa khung mẫu email này?';
$lngstr['qst_delete_etemplates'] = 'Bạn chắc chắn muốn sẽ xóa những khung mẫu email được lựa chọn?';
$lngstr['qst_delete_grade'] = 'bạn chắc chắn muốn để xóa hệ thống đường dốc này?';
$lngstr['qst_delete_grades'] = 'Bạn chắc chắn muốn sẽ xóa những hệ thống đường dốc được lựa chọn?';
$lngstr['qst_delete_gradescale'] = 'Bạn chắc chắn muốn sẽ xóa thứ bậc này?';
$lngstr['qst_delete_gradescales'] = 'Bạn chắc chắn muốn sẽ xóa những thứ bậc được lựa chọn?';
$lngstr['qst_delete_visitor'] = $lngstr['qst_delete_record'];
$lngstr['qst_delete_visitors'] = $lngstr['qst_delete_records'];
$lngstr['page-sections']['qst_section_delete'] = 'Bạn chắc chắn muốn sẽ xóa mục(khu vực) này?';
$lngstr['page-sections']['qst_sections_delete'] = 'Bạn chắc chắn muốn sẽ xóa những mục(khu vực) được lựa chọn?';
$lngstr['page-rtemplates']['qst_rtemplate_delete'] = 'Bạn chắc chắn muốn sẽ xóa khung mẫu báo cáo này?';
$lngstr['page-rtemplates']['qst_rtemplates_delete'] = 'Bạn chắc chắn muốn sẽ xóa những khung mẫu báo cáo được lựa chọn?';

// Install:
$lngstr['install_title'] = 'Cài đặt - [TânPhú.Net_TrắcNghiệm]-[VTL_Test]';
$lngstr['install_page1'] = 'Bước 1 - Thiết lập ngôn ngữ';
$lngstr['install_page1_description'] = '<p><b>Ngôn ngữ:</b> Vui lòng chọn 1.';
$lngstr['install_language'] = 'Ngôn ngữ:';
$lngstr['install_page2'] = 'Buớc 2 - Thiết lập chung';
$lngstr['install_page2_description'] = '<p><b>Tiêu đề web:</b> Xin chỉ rõ tiêu đề trang web..
<p><b>Email Mặc định:</b> Điền email mặc đj\ịnh vào ô này, đây là email dùng để gửi mail cho người dùng.
<p><b>Địa chỉ trang trắc nghiệm TânPhú.Net(VD:/tracnghiem/)</b> Xin chỉ rõ địa chỉ web ở đâu . Mạng(lưới) được kiểm tra sẽ được truy nhập.
<p><b>Địa chỉ gốc [TânPhú.Net_TrắcNghiệm]-[VTL_Test] trên server:</b> Xin chỉ rõ đường dẫn thư mục đầy đủ tới sự cài đặt này.
<p><b>[TânPhú.Net_TrắcNghiệm]-[VTL_Test] files URL:</b> Xin chỉ rõ địa chỉ mạng ở đâu được nạp dữ liệu những hồ sơ sẽ được truy nhập.
<p><b>[TânPhú.Net_TrắcNghiệm]-[VTL_Test] files directory:</b> Xin chỉ rõ một đường dẫn thư mục đầy đủ ở đâu TânPhú. Mạng(lưới) được kiểm tra có thể cất giữ nạp dữ liệu những hồ sơ. Thư mục này cần phải (thì) đọc được và viết bởi người sử dụng người phục vụ mạng (usually "nobody" or "apache").';
$lngstr['install_titlepostfix'] = 'Tiêu đề Web:';
$lngstr['install_defaultemail'] = 'Email mặc định:';
$lngstr['install_urlroot'] = 'Địa chỉ trang trắc nghiệm TânPhú.Net(VD:/tracnghiem/):';
$lngstr['install_dirrootfull'] = 'Địa chỉ gốc trang trắc nghiệm [TânPhú.Net_TrắcNghiệm]-[VTL_Test] trên server:';
$lngstr['install_dirrootfull_doesnotexists'] = 'The "[TânPhú.Net_TrắcNghiệm]-[VTL_Test] directory" setting seems to be incorrect. Giá trị ở dưới đã được đặt lại.<br>';
$lngstr['install_urlfiles'] = 'Thư mục chứa file tải lên TânPhú.Net (VD:/tracnghiem/files/):';
$lngstr['install_dirfilesfull'] = 'Thư mục chứa file tải lên TânPhú.Net trên server:';
$lngstr['install_page3'] = 'Bước 3 - Thiết lập CSDL';
$lngstr['install_page3_description'] = '<p>Xin cấu hình hình cơ sở dữ liệu ở đâu TânPhú.Net. Mạng(lưới) được kiểm tra dữ liệu sẽ được cất giữ. Cơ sở dữ liệu này được phải đã có được tạo ra và một username và mật khẩu được tạo ra để truy nhập nó.';
$lngstr['install_dbdriver'] = 'Kiểu data:';
$lngstr['install_dbhost'] = 'Database host:';
$lngstr['install_dbdb'] = 'Tên CSDL:';
$lngstr['install_dbtableprefix'] = 'Tables prefix (Tên tiền tố của bảng):';
$lngstr['install_dbuser'] = 'Tài khoản CSDL:';
$lngstr['install_dbpassword'] = 'Mật khẩu CSDL:';
$lngstr['install_dbdriver_cannotconnect'] = 'Không thể nối tới cơ sở dữ liệu bạn chỉ rõ. Xin kiểm tra những sự thiết đặt cơ sở dữ liệu (của) các bạn.<br>';
$lngstr['install_cannotwritetoconfig'] = 'Ko thể tạo file ( Hãy xem lại CHMOD) inc/config.inc.php';
$lngstr['install_downloadconfig'] = '<p>Vui lòng lưu <b><a href="install.php?download=1" target=_blank>file này</a></b>, với tên nó là config.inc.php vào thư mục inc/ .';
$lngstr['install_canwritetoconfig'] = '<p>File config.inc.php đã đựoc cấu hình và tạo thành công.';
$lngstr['install_page4'] = 'Quá trình cái đặt sắp hoàn tất';
$lngstr['install_page4_description'] = '<p>Vui lòng bấm "Tiếp" để bắt đầu cài đặt CSDL.';
$lngstr['install_db_title'] = 'Khởi tạo CSDL - [TânPhú.Net_TrắcNghiệm]-[VTL_Test]';
$lngstr['install_db_page1'] = 'Khởi tạo CSDL [TânPhú.Net_TrắcNghiệm]-[VTL_Test]';
$lngstr['install_db_createtablex'] = 'Tạo bảng "%s" :';
$lngstr['install_db']['create_or_modify_tablex'] = 'Tạo ra hay điều chỉnh  bảng "%s" :';
$lngstr['install_db']['no_init_needed'] = 'Không có sự khởi tạo cần.';

$lngstr['install_adminfirstname'] = 'Admin';
$lngstr['install_adminlastname'] = 'User';
$lngstr['install_guestfirstname'] = 'Guest';
$lngstr['install_guestlastname'] = 'User';

$lngstr['install_phpversion'] = 'PHP Version:';
$lngstr['label_okay'] = 'OK';
$lngstr['label_warning'] = 'Chú ý';

$m_db_drivers = array(
	DB_DRIVER_MYSQL => 'MySQL',
	DB_DRIVER_POSTGRESQL => 'PostgreSQL',
	DB_DRIVER_MSSQL_ODBC => 'Microsoft SQL Server (ODBC)',
	DB_DRIVER_MSSQL => 'Microsoft SQL Server (PHP driver)',
	DB_DRIVER_ORACLE => 'Oracle',
	);

$lngstr['initdb_etemplates_1_name'] = 'Kế quả Kiểm tra  (Mặc định)';
$lngstr['initdb_etemplates_1_description'] = 'Khung mẫu Email kết quả kiểm tra(Mặc định)';
$lngstr['initdb_etemplates_1_subject'] = '[TânPhú.Net_TrắcNghiệm]-[VTL_Test] - Báo cáo Mẫu';
$lngstr['initdb_etemplates_1_body'] = 'Chào [USER_FIRST_NAME],

ở đây những kết quả từ bài kiểm (của) các bạn:

Tên bài kiểm: [TEST_NAME]
Ngày: [RESULT_DATE]
Thời gian: [RESULT_TIME_SPENT]
Thời gian được vượt hơn: [RESULT_TIME_EXCEEDED]

[RESULT_DETAILED_1]

Thổng điểm: [RESULT_POINTS_SCORED] / [RESULT_POINTS_POSSIBLE] ([RESULT_PERCENTS]%)
Xếp loại: [RESULT_GRADE]

Thân chào,chúc bạn học tốt và thành công trong tương lai !
Admin: Vũ Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ';

$lngstr['initdb_etemplates_2_name'] = 'Tài khoản đăng ký';
$lngstr['initdb_etemplates_2_description'] = 'khung mẫu email Tài khoản đăng ký ';
$lngstr['initdb_etemplates_2_subject'] = 'Những chi tiết Đăng ký';
$lngstr['initdb_etemplates_2_body'] = 'Chào [USER_FIRST_NAME],

Cảm ơn bạn đăng ký Với TânPhú.Net (http://tracnghiem.tanphu.net).

Username: [USERNAME]
Password: [USER_PASSWORD]

Bạn có thể đăng nhập tới tài khoản (của) các bạn bất kỳ thời gian nào đến thăm:

[[TânPhú.Net_TrắcNghiệm]-[VTL_Test]_URL]

Thân chào,chúc bạn học tốt và thành công trong tương lai !
Admin: Vũ Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ';

$lngstr['initdb_etemplates_3_name'] = 'Account Sign Up (Email Activation)';
$lngstr['initdb_etemplates_3_description'] = 'Tài khoản đăng ký khung mẫu email';
$lngstr['initdb_etemplates_3_subject'] = 'Sự Kích hoạt Tài khoản';
$lngstr['initdb_etemplates_3_body'] = 'Chào [USER_FIRST_NAME],

Cảm ơn bạn đăng ký Với TânPhú.Net (http://tracnghiem.tanphu.net).

Username: [USERNAME]
Password: [USER_PASSWORD]

Tiếp theo bạn hãy làm như sau :

Để hoàn thành việc kích hoạt tài khoản (của) các bạn, xin kích vào mối liên kết sau đây

[[TânPhú.Net_TrắcNghiệm]-[VTL_Test]_URL]/account.php?action=activate&userid=[USER_ID]&checkword=[USER_CHECKWORD]

Thân chào,chúc bạn học tốt và thành công trong tương lai !
Admin: Vũ Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ';

$lngstr['initdb_etemplates_4_name'] = 'Tài khoản đã Được kích hoạt';
$lngstr['initdb_etemplates_4_description'] = 'Khung mẫu email được kích hoạt Tài khoản';
$lngstr['initdb_etemplates_4_subject'] = 'Tài khoản Được kích hoạt';
$lngstr['initdb_etemplates_4_body'] = 'Thân mến [USER_FIRST_NAME],

Tài khoản (của) Các bạn đã được kích hoạt một cách thành công .

Bạn có thể đăng nhập tới tài khoản (của) các bạn bất kỳ thời gian nào đến thăm:

[[TânPhú.Net_TrắcNghiệm]-[VTL_Test]_URL]

Thân chào,chúc bạn học tốt và thành công trong tương lai !
Admin: Vũ Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ';

$lngstr['initdb_etemplates_5_name'] = 'Tài khoản đăng ký ((cho) Người quản trị)';
$lngstr['initdb_etemplates_5_description'] = 'Tài khoản đăng ký khung mẫu email';
$lngstr['initdb_etemplates_5_subject'] = 'Những chi tiết Đăng ký Người sử dụng Mới';
$lngstr['initdb_etemplates_5_body'] = 'Thân mến Administrator,

Những chi tiết đăng ký người sử dụng Mới:

Họ [USER_FIRST_NAME]
Tên: [USER_LAST_NAME]
Email: [USER_EMAIL]
Username: [USERNAME]
Password: [USER_PASSWORD]

Thân chào,chúc bạn học tốt và thành công trong tương lai !
Admin: Vũ Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ';

$lngstr['initdb_etemplates_50_name'] = 'Khôi phục mật khẩu';
$lngstr['initdb_etemplates_50_description'] = 'Password recovery email template';
$lngstr['initdb_etemplates_50_subject'] = 'Khôi phục mật khẩu';
$lngstr['initdb_etemplates_50_body'] = 'Xin chào [USER_FIRST_NAME],

Chúng tôi đã tạo mật khẩu mới cho bạn.

Username: [USERNAME]
Mât khẩu mới: [USER_PASSWORD]

Thân chào,chúc bạn học tốt và thành công trong tương lai !
Admin: Vũ Thanh Lai | Email: VuThanhLai@Gmail.Com | Y!M: KiUcTinhYeu_1811 | Site: http://tanphu.net ';

$lngstr['initdb_gscales_1_id'] = 1;
$lngstr['initdb_gscales_2_id'] = 2;
$lngstr['initdb_gscales_3_id'] = 3;
$lngstr['initdb_gscales_4_id'] = 4;
$lngstr['initdb_gscales_5_id'] = 5;
$lngstr['initdb_gscales_6_id'] = 6;
$lngstr['initdb_gscales_1_name'] = 'A-F Sắp xếp Quy mô (60% thứ bậc chuyển qua)';
$lngstr['initdb_gscales_2_name'] = 'Passed/Not Passed Grading Scale';
$lngstr['initdb_gscales_3_name'] = 'ECTS Grading Scale';
$lngstr['initdb_gscales_4_name'] = 'GPA Grading Scale';
$lngstr['initdb_gscales_5_name'] = '6-Point Grading Scale (Germany)';
$lngstr['initdb_gscales_6_name'] = '5-Point Grading Scale (Central and Eastern Europe)';
$lngstr['initdb_gscales_1_description'] = 'A-F grading scale';
$lngstr['initdb_gscales_2_description'] = 'Passed/not passed grading scale';
$lngstr['initdb_gscales_3_description'] = 'ECTS (European Credit Transfer System) grading scale';
$lngstr['initdb_gscales_4_description'] = 'GPA (Grade Point Average) grading scale';
$lngstr['initdb_gscales_5_description'] = '6-point grading scale in Germany';
$lngstr['initdb_gscales_6_description'] = '5-point grading scale in Central and Eastern Europe';
$lngstr['initdb_gscales_1_1_description'] = 'Excellent';
$lngstr['initdb_gscales_1_2_description'] = 'Good';
$lngstr['initdb_gscales_1_3_description'] = 'Fair';
$lngstr['initdb_gscales_1_4_description'] = 'Poor';
$lngstr['initdb_gscales_1_5_description'] = 'Fail';
$lngstr['initdb_gscales_2_1_name'] = 'Passed';
$lngstr['initdb_gscales_2_2_name'] = 'Not Passed';
$lngstr['initdb_gscales_2_1_description'] = 'Passed';
$lngstr['initdb_gscales_2_2_description'] = 'Not passed';
$lngstr['initdb_gscales_3_1_description'] = 'Excellent (outstanding performance with only minor errors)';
$lngstr['initdb_gscales_3_2_description'] = 'Very good (above the average standard but with some errors)';
$lngstr['initdb_gscales_3_3_description'] = 'Good (generally sound work with a number of notable errors)';
$lngstr['initdb_gscales_3_4_description'] = 'Satisfactory (fair but with significant shortcomings)';
$lngstr['initdb_gscales_3_5_description'] = 'Sufficient (performance meets the minimum criteria)';
$lngstr['initdb_gscales_3_6_description'] = 'Fail (some more work required before the credit can be awarded)';
$lngstr['initdb_gscales_3_7_description'] = 'Fail (considerable further work is required)';
$lngstr['initdb_gscales_4_1_description'] = 'Tuyệt vời';
$lngstr['initdb_gscales_4_2_description'] = 'Giỏi';
$lngstr['initdb_gscales_4_3_description'] = 'Fair';
$lngstr['initdb_gscales_4_4_description'] = 'Poor';
$lngstr['initdb_gscales_4_5_description'] = 'Fail';
$lngstr['initdb_gscales_5_1_description'] = 'Excellent';
$lngstr['initdb_gscales_5_2_description'] = 'Good';
$lngstr['initdb_gscales_5_3_description'] = 'Satisfactory';
$lngstr['initdb_gscales_5_4_description'] = 'Sufficient';
$lngstr['initdb_gscales_5_5_description'] = 'Unsatisfactory';
$lngstr['initdb_gscales_5_6_description'] = 'Poor';
$lngstr['initdb_gscales_6_1_description'] = 'Excellent';
$lngstr['initdb_gscales_6_2_description'] = 'Good';
$lngstr['initdb_gscales_6_3_description'] = 'Satisfactory';
$lngstr['initdb_gscales_6_4_description'] = 'Unsatisfactory';
$lngstr['initdb_gscales_6_5_description'] = 'Poor';
$lngstr['initdb_groups_1_name'] = 'Administrators';
$lngstr['initdb_groups_2_name'] = 'Giáo viên';
$lngstr['initdb_groups_3_name'] = 'Thao tác viên';
$lngstr['initdb_groups_19_name'] = 'Người dùng';
$lngstr['initdb_groups_20_name'] = 'Khách';
$lngstr['initdb_groups_1_description'] = 'Những người quản trị có sự truy nhập không giới hạn và đầy đủ (nhóm hệ thống)';
$lngstr['initdb_groups_2_description'] = 'Những thầy giáo sở hữu đa số quyền hành chính với một số sự hạn chế ( Nhóm hệ thống)';
$lngstr['initdb_groups_3_description'] = 'Những thành viên trong nhóm này được ban quyền để tạo ra/ những câu hỏi soạn thảo (nhóm hệ thống)';
$lngstr['initdb_groups_19_description'] = 'Những người sử dụng bị ngăn ngừa làm sẵn đến từ bất kỳ sự thay đổi ngẫu nhiên hay định trước nào (nhóm hệ thống)';
$lngstr['initdb_groups_20_description'] = 'Những khách có cùng sự truy nhập với những thành viên (của) những nhóm người dùng theo mặc định (nhóm hệ thống)';
$lngstr['initdb_rtemplates_1_name'] = 'Report Template #1';
$lngstr['initdb_rtemplates_1_description'] = 'Report template #1';
$lngstr['initdb_rtemplates_1_body'] = '<h1>[TEST_NAME]</h1>
<p><strong>Ngày:</strong> [RESULT_DATE]</p>
<p><strong>Tên:</strong> [USER_LAST_NAME]<br>
<strong>Họ</strong> [USER_FIRST_NAME]<br>
<strong>Thời gian làm:</strong> [RESULT_TIME_SPENT]<br>
<strong>Điểm:</strong> [RESULT_POINTS_SCORED] / [RESULT_POINTS_POSSIBLE] ([RESULT_PERCENTS]%)<br>
<strong>Xếp loại:</strong> [RESULT_GRADE]</p>
<p><strong>Chi tiết:</strong><br>[RESULT_DETAILED_1]</p>';
$lngstr['initdb_subjects_1_name'] = '[Ko có tên đề tài]';
$lngstr['initdb_subjects_1_description'] = 'Không có đề tài nào';
$lngstr['initdb_users_1_firstname'] = 'Admin';
$lngstr['initdb_users_2_firstname'] = 'Khách';
$lngstr['initdb_users_1_lastname'] = 'User';
$lngstr['initdb_users_2_lastname'] = 'User';
$lngstr['initdb_instructions'] = 'Xin sử dụng username "<strong>admin</strong>" và mật khẩu"<strong>admin</strong>" để đăng nhập.<br><strong>Vui lòng nhớ:</strong>  khuyến cáo thay đổi mật khẩu (của) các bạn sau khi đăng nhập.';
$lngstr['initdb_gotohomepage'] = 'Đi đến trang nhà(Home page)';

// Tooltips:
$lngstr['tooltip_button'] = 'Thấy/ ẩn gợi ý';
$lngstr['help_button'] = 'Giúp';
$lngstr['tooltip_showbar'] = 'Cho thấy những thanh gợi ý';
$lngstr['tooltip_closebar'] = 'Ẩn thanh gợi ý';
$lngstr['tooltip_tests'] = '<p>Trang này được thiết kế cho tạo ra và soạn thảo những bài kiểm.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_test'].'"></td><td class=rowone width="100%" colspan=4>To create a new test, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-gear.gif" title="'.$lngstr['label_action_test_settings'].'"></td><td class=rowone width="100%" colspan=4>To change test settings, press this button to the right of the applicable test.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_test_groups_select'].'"></td><td class=rowone width="100%" colspan=4>To assign test(s) to certain groups of users, press a button to the right of the test or select all necessary tests using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_questions_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit test questions, press a button to the right of the test.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_test_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete test(s), press a button to the right of the test or select all necessary tests using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_gscales'] = '<p>This page is designed for creating and editing grading systems.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_grade'].'"></td><td class=rowone width="100%" colspan=4>To create a new grading system, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-gear.gif" title="'.$lngstr['label_action_grade_settings'].'"></td><td class=rowone width="100%" colspan=4>To change grading system settings, press this button to the right of the applicable grading system.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_gradescales_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit a grading system, press a button to the right of the grading system.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_grade_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete grading system(s), press a button to the right of the grading system or select all necessary grading systems using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_gscales_grades'] = '<p>This page is designed for creating and editing grading scales.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_gradescale'].'"></td><td class=rowone width="100%" colspan=4>To create a new grade, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_gradescale_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit a grade, press a button to the right of the grade.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=10 border=0 src="images/button-up.gif" title="'.$lngstr['label_action_grade_moveup'].'"><br><img width=20 height=10 border=0 src="images/button-down.gif" title="'.$lngstr['label_action_grade_movedown'].'"></td><td class=rowone width="100%" colspan=4>To move a grade up (down) the list, press the top (bottom) part of the button to the right of the grade.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_gradescale_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete grade(s), press a button to the right of the grade or select all necessary grades using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_etemplates'] = '<p>This page is designed for creating and editing email templates.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_etemplate'].'"></td><td class=rowone width="100%" colspan=4>To create a new email template, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_etemplates_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit an email template, press a button to the right of the email template.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_etemplate_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete email template(s), press a button to the right of the email template or select all necessary email templates using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_rtemplates'] = '<p>This page is designed for creating and editing report templates.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['page-rtemplates']['action_create_rtemplate'].'"></td><td class=rowone width="100%" colspan=4>To create a new report template, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['page-rtemplates']['action_rtemplates_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit a report template, press a button to the right of the report template.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['page-rtemplates']['action_rtemplate_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete report template(s), press a button to the right of the report template or select all necessary report templates using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_tests_questions'] = '<p>This page is designed for creating and editing test questions.</p>
<p>Test questions table:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-add.gif" title="'.$lngstr['label_action_create_and_add_question'].'"></td><td class=rowone width="100%" colspan=4>To create a new question and to add it to a test, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-import.gif" title="'.$lngstr['label_action_import_questions'].'"></td><td class=rowone width="100%" colspan=4>To import questions into a test, press the following button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_questions_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit a question, press a button to the right of the question.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=10 border=0 src="images/button-up.gif" title="'.$lngstr['label_action_question_moveup'].'"><br><img width=20 height=10 border=0 src="images/button-down.gif" title="'.$lngstr['label_action_grade_movedown'].'"></td><td class=rowone width="100%" colspan=4>To move a question up (down) the list, press the top (bottom) part of the button to the right of the question.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_question_link_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete question(s), press a button to the right of the question or select all necessary questions using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>
<p>Question bank table:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_question'].'"></td><td class=rowone width="100%" colspan=4>To create a new question, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-plus.gif" title="'.$lngstr['label_action_questions_append'].'"></td><td class=rowone width="100%" colspan=4>To add a question to a test, press the button to the right of the question or select all necessary questions using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_question_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit a question, press a button to the right of the question.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_question_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete question(s), press a button to the right of the question or select all necessary questions using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_tests_sections'] = '<p>This page is designed for creating and editing test sections.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['page-sections']['action_section_create'].'"></td><td class=rowone width="100%" colspan=4>To create a new section, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['page-sections']['action_section_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit a section, press a button to the right of the section.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['page-sections']['action_section_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete section(s), press a button to the right of the section or select all necessary sections using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_tests_groups'] = '<p>This page is designed for assigning tests to certain groups of users.</p>
<p>Tests table:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_test'].'"></td><td class=rowone width="100%" colspan=4>To create a new test, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-gear.gif" title="'.$lngstr['label_action_test_settings'].'"></td><td class=rowone width="100%" colspan=4>To change test settings, press this button to the right of the applicable test.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_test_groups_select'].'"></td><td class=rowone width="100%" colspan=4>To assign test(s) to certain groups of users, press a button to the right of the test or select all necessary tests using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_questions_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit test questions, press a button to the right of the test.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_test_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete test(s), press a button to the right of the test or select all necessary tests using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>
<p>Groups table:</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_group'].'"></td><td class=rowone width="100%" colspan=4>To create a new group, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_group_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit a group, press a button to the right of the group.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_group_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete group(s), press a button to the right of the group or select all necessary groups using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_questionbank'] = '<p>This page is designed for creating and editing a bank of questions.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_question'].'"></td><td class=rowone width="100%" colspan=4>To create a new question, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-stats.gif" title="'.$lngstr['label_action_questions_stats'].'"></td><td class=rowone width="100%" colspan=4>To view statistics for a particular question(s), press a button to the right of the question or select all necessary questions using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_question_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit a question, press a button to the right of the question.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_question_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete question(s), press a button to the right of the question or select all necessary questions using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_subjects'] = '<p>This page is designed for creating and editing subjects.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_subject'].'"></td><td class=rowone width="100%" colspan=4>To create a new subject, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_subject_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit a subject, press a button to the right of the subject.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_subject_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete subject(s), press a button to the right of the subject or select all necessary subjects using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_reportsmanager'] = '<p>This page is designed for analyzing test results.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-view.gif" title="'.$lngstr['label_action_test_result_view'].'"></td><td class=rowone width="100%" colspan=4>To view detailed test results, press a button to the right of the record.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_test_result_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete record(s), press a button to the right of the record or select all necessary records using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_reportsmanager_reportsratings'] = '';
$lngstr['tooltip_users'] = '<p>This page is designed for creating and editing user accounts.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_user'].'"></td><td class=rowone width="100%" colspan=4>To create a new user account, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-groups.gif" title="'.$lngstr['label_action_manageusers_groups'].'"></td><td class=rowone width="100%" colspan=4>To assign user(s) to a particular group, press a button to the right of the user or select all necessary users using the flag marks and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_manageusers_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit a user account, press a button to the right of the user account.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_manageusers_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete user account(s), press a button to the right of the user account or select all necessary user accounts using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_users_groups'] = '';
$lngstr['tooltip_groups'] = '<p>This page is designed for creating and editing groups.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-new.gif" title="'.$lngstr['label_action_create_group'].'"></td><td class=rowone width="100%" colspan=4>To create a new group, press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-edit.gif" title="'.$lngstr['label_action_group_edit'].'"></td><td class=rowone width="100%" colspan=4>To edit a group, press a button to the right of the group.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_group_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete group(s), press a button to the right of the group or select all necessary groups using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_visitors'] = '<p>This page is designed for analyzing web statistics.</p>
<p><table class=rowtable2 cellpadding=5 cellspacing=1 border=0 width="100%">
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-view.gif" title="'.$lngstr['label_action_visitors_view'].'"></td><td class=rowone width="100%" colspan=4>To view detailed statistics, press a button to the right of the record.</td></tr>
<tr><td class=rowtwo width=20><img width=20 height=20 border=0 src="images/button-cross.gif" title="'.$lngstr['label_action_visitor_delete'].'"></td><td class=rowone width="100%" colspan=4>To delete record(s), press a button to the right of the record or select all necessary records using the flag marks on the left and press this button on the tools panel at the top.</td></tr>
<tr><td class=rowtwo width=20><img src="images/button-first.gif" border=0 title="'.$lngstr['button_first_page'].'"></td><td class=rowtwo width=20><img src="images/button-prev.gif" border=0 title="'.$lngstr['button_prev_page'].'"></td><td class=rowtwo width=20><img src="images/button-next.gif" border=0 title="'.$lngstr['button_next_page'].'"></td><td class=rowtwo width=20><img src="images/button-last.gif" border=0 title="'.$lngstr['button_last_page'].'"></td><td class=rowone width="100%">Use these buttons to transfer between pages.</td></tr>
</table></p>';
$lngstr['tooltip_resources'] = '';
$lngstr['tooltip_coupons'] = '';

$lngstr['label_country_items'] = array(
	'VN' => 'Việt Nam',
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