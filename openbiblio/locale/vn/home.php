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
#*  Văn bản dịch cho trang index.php  
#****************************************************************************

$trans["indexHeading"]       = "\$text='Chào mừng đến với OpenBiblio';";  
$trans["indexIntro"]         = "\$text=
  'Sử dụng các tab điều hướng ở đầu mỗi trang để truy cập các phần quản trị thư viện sau.';";  
$trans["indexTab"]           = "\$text='Tab';";
$trans["indexDesc"]          = "\$text='Mô tả';";  
$trans["indexCirc"]          = "\$text='Lưu hành mượn sách';";  
$trans["indexCircDesc1"]     = "\$text='Sử dụng tab này để quản lý hồ sơ thành viên của bạn.';";
$trans["indexCircDesc2"]     = "\$text='Quản trị thành viên (thêm mới, tìm kiếm, sửa, xóa)';"; 
$trans["indexCircDesc3"]     = "\$text='Mượn trả thư mục thành viên, đặt giữ, tài khoản và lịch sử';";
$trans["indexCircDesc4"]     = "\$text='Trả thư mục và danh sách giỏ sắp xếp';";
//$trans["indexCircDesc5"]     = "\$text='Thanh toán tiền phạt trả trễ của thành viên';";
$trans["indexCat"]           = "\$text='Danh mục';";  
$trans["indexCatDesc1"]      = "\$text='Sử dụng tab này để quản lý hồ sơ thư mục của bạn.';";
$trans["indexCatDesc2"]      = "\$text='Quản trị thư mục (thêm mới, tìm kiếm, sửa, xóa)';";
//$trans["indexCatDesc3"]      = "\$text='Nhập thư mục từ bản ghi USMarc';"; 
$trans["indexAdmin"]         = "\$text='Quản trị';";
$trans["indexAdminDesc1"]    = "\$text='Sử dụng tab này để quản lý nhân viên và hồ sơ hành chính.';";  
$trans["indexAdminDesc2"]    = "\$text='Quản trị nhân viên (thêm mới, sửa, mật khẩu, xóa)';";
$trans["indexAdminDesc3"]    = "\$text='Cài đặt chung thư viện';";   
$trans["indexAdminDesc5"]    = "\$text='Danh sách loại tài liệu thư viện';";  
$trans["indexAdminDesc4"]    = "\$text='Danh sách bộ sưu tập thư viện';";
$trans["indexAdminDesc6"]    = "\$text='Trình chỉnh sửa chủ đề thư viện';";  
$trans["indexReports"]       = "\$text='Báo cáo';";  
$trans["indexReportsDesc1"]  = "\$text='Sử dụng tab này để chạy các báo cáo trên dữ liệu thư viện của bạn.';";
$trans["indexReportsDesc2"]  = "\$text='Báo cáo.';";  
$trans["indexReportsDesc3"]  = "\$text='Nhãn.';";   

?>