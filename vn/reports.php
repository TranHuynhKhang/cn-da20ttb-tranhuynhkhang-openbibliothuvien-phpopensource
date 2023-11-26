<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * Xem tệp COPYRIGHT.html để biết thêm chi tiết.
 */

/**********************************************************************************
 *   Hướng dẫn dành cho người dịch:
 * 
 *   Tất cả các cặp key/value của gettext được chỉ định như sau:
 *     $trans["key"] = "<đoạn mã php để đặt biến $text>";
 *   Cho phép người dịch khả năng thực thi mã php với chuỗi transFunc  
 *   cung cấp mức độ linh hoạt tối đa để định dạng cú pháp ngôn ngữ.
 *   
 *   Các quy tắc định dạng:   
 *   - Chuỗi dịch kết quả phải được lưu trữ trong biến có tên là $text.
 *   - Các đối số đầu vào phải được bao quanh bởi các ký tự % (ví dụ: %pageCount%).
 *   - Một dấu gạch chéo ngược ('\') cần được đặt trước bất kỳ ký tự đặc biệt php nào  
 *     (chẳng hạn như $, ", v.v.) trong mã php dịch.   
 *   
 *   Ví dụ đơn giản:
 *     $trans["homeWelcome"]       = "\$text='Chào mừng đến với OpenBiblio';";
 *   
 *   Ví dụ chứa tham số thay thế:  
 *     $trans["searchResult"]      = "\$text='trang %page% của %pages%';";
 *   
 *   Ví dụ chứa câu lệnh If của PHP và thay thế tham số:
 *     $trans["searchResult"]      =  
 *       "if (%items% == 1) {  
 *         \$text = '%items% kết quả';
 *       } else {     
 *         \$text = '%items% kết quả';  
 *       }";  
 *
 **********************************************************************************
 */  

#****************************************************************************
#*  Văn bản dịch được sử dụng trên nhiều trang  
#****************************************************************************

$trans["reportsCancel"]            = "\$text = 'Hủy';";  

#****************************************************************************
#*  Văn bản dịch cho trang index.php  
#****************************************************************************

$trans["indexHdr"]                 = "\$text = 'Báo cáo';";  
$trans["indexDesc"]                = "\$text = 'Sử dụng danh sách báo cáo hoặc nhãn nằm ở vùng điều hướng bên trái để tạo các báo cáo hoặc nhãn.';";   

#****************************************************************************
#*  Văn bản dịch cho trang report_list.php
#****************************************************************************

$trans["reportListHdr"]            = "\$text = 'Danh sách báo cáo';";  
$trans["reportListDesc"]           = "\$text = 'Chọn một trong những liên kết sau để chạy báo cáo.';";
$trans["reportListXmlErr"]         = "\$text = 'Đã xảy ra lỗi khi phân tích xml định nghĩa báo cáo.';";
$trans["reportListCannotRead"]     = "\$text = 'Không thể đọc tệp nhãn: %fileName%';";  

#****************************************************************************  
#*  Văn bản dịch cho trang label_list.php  
#****************************************************************************

$trans["labelListHdr"]             = "\$text = 'Danh sách nhãn';";  
$trans["labelListDesc"]            = "\$text = 'Chọn một trong những liên kết sau để tạo các nhãn ở định dạng pdf.';"; 
$trans["displayLabelsXmlErr"]      = "\$text = 'Đã xảy ra lỗi khi phân tích xml định nghĩa báo cáo. Lỗi = ';";  

#****************************************************************************  
#*  Văn bản dịch cho trang letter_list.php
#****************************************************************************

$trans["letterListHdr"]            = "\$text = 'Danh sách thư';";
$trans["letterListDesc"]           = "\$text = 'Chọn một trong những liên kết sau để tạo các thư ở định dạng pdf.';";  
$trans["displayLettersXmlErr"]      = "\$text = 'Đã xảy ra lỗi khi phân tích xml định nghĩa báo cáo. Lỗi = ';";   

#**************************************************************************** 
#*  Văn bản dịch cho trang report_criteria.php  
#****************************************************************************  

$trans["reportCriteriaHead1"]      = "\$text = 'Tiêu chí tìm kiếm báo cáo (tùy chọn)';"; 
$trans["reportCriteriaHead2"]      = "\$text = 'Thứ tự sắp xếp báo cáo (tùy chọn)';";
$trans["reportCriteriaHead3"]      = "\$text = 'Kiểu đầu ra báo cáo';";  
$trans["reportCriteriaCrit1"]      = "\$text = 'Tiêu chí 1:';";
$trans["reportCriteriaCrit2"]      = "\$text = 'Tiêu chí 2:';";  
$trans["reportCriteriaCrit3"]      = "\$text = 'Tiêu chí 3:';";
$trans["reportCriteriaCrit4"]      = "\$text = 'Tiêu chí 4:';"; 
$trans["reportCriteriaEQ"]         = "\$text = '=';";  
$trans["reportCriteriaNE"]         = "\$text = 'khác =';"; 
$trans["reportCriteriaLT"]         = "\$text = '&lt;';";
$trans["reportCriteriaGT"]         = "\$text = '&gt;';";
$trans["reportCriteriaLE"]         = "\$text = '&lt hoặc =';";
$trans["reportCriteriaGE"]         = "\$text = '&gt hoặc =';";  
$trans["reportCriteriaBT"]         = "\$text = 'giữa';";
$trans["reportCriteriaAnd"]        = "\$text = 'và';";  
$trans["reportCriteriaRunReport"]  = "\$text = 'Chạy báo cáo';";
$trans["reportCriteriaSortCrit1"]  = "\$text = 'Sắp xếp 1:';";  
$trans["reportCriteriaSortCrit2"]  = "\$text = 'Sắp xếp 2:';";
$trans["reportCriteriaSortCrit3"]  = "\$text = 'Sắp xếp 3:';";  
$trans["reportCriteriaAscending"]  = "\$text = 'tăng dần';";
$trans["reportCriteriaDescending"] = "\$text = 'giảm dần';"; 
$trans["reportCriteriaStartOnLabel"] = "\$text = 'Bắt đầu in trên nhãn:';";
$trans["reportCriteriaOutput"]     = "\$text = 'Kiểu đầu ra:';";  
$trans["reportCriteriaOutputHTML"] = "\$text = 'HTML';";
$trans["reportCriteriaOutputCSV"]  = "\$text = 'CSV';";

#****************************************************************************
#*  Văn bản dịch cho trang run_report.php  
#****************************************************************************  

$trans["runReportReturnLink1"]     = "\$text = 'tiêu chí tìm kiếm báo cáo';";  
$trans["runReportReturnLink2"]     = "\$text = 'danh sách báo cáo';"; 
$trans["runReportTotal"]           = "\$text = 'Tổng số dòng:';";  

#****************************************************************************  
#*  Văn bản dịch cho trang display_labels.php  
#****************************************************************************

$trans["displayLabelsStartOnLblErr"] = "\$text = 'Trường phải là số.';";  
$trans["displayLabelsXmlErr"]      = "\$text = 'Đã xảy ra lỗi khi phân tích xml định nghĩa báo cáo. Lỗi = ';";
$trans["displayLabelsCannotRead"]  = "\$text = 'Không thể đọc tệp nhãn: %fileName%';";   

#****************************************************************************
#*  Văn bản dịch cho trang noauth.php 
#****************************************************************************

$trans["noauthMsg"]                = "\$text = 'Bạn không được phép sử dụng tab Báo cáo.';";

#****************************************************************************
#*  Các tiêu đề báo cáo  
#****************************************************************************  

$trans["reportHolds"]              = "\$text = 'Yêu cầu giữ có chứa thông tin liên hệ thành viên';";  
$trans["reportCheckouts"]          = "\$text = 'Danh sách mượn thư mục';"; 
$trans["Over Due Letters"]           = "\$text = 'Thư trễ hạn';";
$trans["reportLabels"]             = "\$text = 'Truy vấn in nhãn (được sử dụng bởi các nhãn)';";
$trans["popularBiblios"]           = "\$text = 'Thư mục phổ biến nhất';"; 
$trans["overdueList"]              = "\$text = 'Danh sách thành viên trễ hạn';";  
$trans["balanceDueList"]           = "\$text = 'Danh sách thành viên có khoản thanh toán';";  

#****************************************************************************  
#*  Các tiêu đề nhãn
#****************************************************************************  

$trans["labelsMulti"]              = "\$text = 'Ví dụ nhãn nhiều';";
$trans["labelsSimple"]             = "\$text = 'Ví dụ nhãn đơn giản';";   

#****************************************************************************
#*  Văn bản cột  
#****************************************************************************  

$trans["biblio.bibid"]             = "\$text = 'ID Thư mục';";
$trans["biblio.create_dt"]         = "\$text = 'Ngày thêm';";  
$trans["biblio.last_change_dt"]    = "\$text = 'Lần thay đổi cuối';";
$trans["biblio.material_cd"]       = "\$text = 'Mã tài liệu';"; 
$trans["biblio.collection_cd"]     = "\$text = 'Bộ sưu tập';";
$trans["biblio.call_nmbr1"]        = "\$text = 'Số kê 1';";
$trans["biblio.call_nmbr2"]        = "\$text = 'Số kê 2';";  
$trans["biblio.call_nmbr3"]        = "\$text = 'Số kê 3';";
$trans["biblio.title_remainder"]   = "\$text = 'Phần còn lại tiêu đề';"; 
$trans["biblio.responsibility_stmt"] = "\$text = 'Tuyên bố trách nhiệm';";
$trans["biblio.opac_flg"]          = "\$text = 'Cờ OPAC';";  

$trans["biblio_copy.barcode_nmbr"] = "\$text = 'Mã số vạch';";
$trans["biblio.title"]             = "\$text = 'Tiêu đề';";  
$trans["biblio.author"]            = "\$text = 'Tác giả';";
$trans["biblio_copy.status_begin_dt"]   = "\$text = 'Ngày bắt đầu trạng thái';"; 
$trans["biblio_copy.due_back_dt"]       = "\$text = 'Ngày trả';";
$trans["member.mbrid"]             = "\$text = 'ID thành viên';";  
$trans["member.barcode_nmbr"]      = "\$text = 'Mã số vạch thành viên';";
$trans["member.last_name"]         = "\$text = 'Họ';";
$trans["member.first_name"]        = "\$text = 'Tên';";  
$trans["member.address"]          = "\$text = 'Địa chỉ';";
$trans["biblio_hold.hold_begin_dt"] = "\$text = 'Ngày bắt đầu giữ';";   
$trans["member.home_phone"]        = "\$text = 'Điện thoại nhà';";
$trans["member.work_phone"]        = "\$text = 'Điện thoại cơ quan';";
$trans["member.email"]             = "\$text = 'Email';";
$trans["biblio_status_dm.description"] = "\$text = 'Trạng thái';";
$trans["settings.library_name"]    = "\$text = 'Tên thư viện';";  
$trans["settings.library_hours"]   = "\$text = 'Giờ mở cửa thư viện';";
$trans["settings.library_phone"]   = "\$text = 'Điện thoại thư viện';"; 
$trans["days_late"]                = "\$text = 'Ngày trễ';";
$trans["title"]                    = "\$text = 'Tiêu đề';";  
$trans["author"]                   = "\$text = 'Tác giả';";  
$trans["due_back_dt"]              = "\$text = 'Ngày trả';";  
$trans["checkoutCount"]            = "\$text = 'Số lượt mượn';";  

?>