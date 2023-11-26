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
#*  Văn bản dịch cho lớp Biblio  
#****************************************************************************

$trans["biblioError1"]            = "\$text = 'Số lưu trữ là bắt buộc.';";

#****************************************************************************
#*  Văn bản dịch cho lớp BiblioField
#****************************************************************************

$trans["biblioFieldError1"]       = "\$text = 'Trường là bắt buộc.';";
$trans["biblioFieldError2"]       = "\$text = 'Thẻ phải là số.';";

#****************************************************************************
#*  Văn bản dịch cho lớp BiblioQuery  
#****************************************************************************

$trans["biblioQueryQueryErr1"]    = "\$text = 'Lỗi truy xuất thông tin thư mục.';";  
$trans["biblioQueryQueryErr2"]    = "\$text = 'Lỗi truy xuất thông tin trường thư mục.';";
$trans["biblioQueryInsertErr1"]   = "\$text = 'Lỗi chèn thông tin thư mục mới.';";
$trans["biblioQueryInsertErr2"]   = "\$text = 'Lỗi chèn thông tin trường thư mục mới.';"; 
$trans["biblioQueryUpdateErr1"]   = "\$text = 'Lỗi cập nhật thông tin thư mục.';";  
$trans["biblioQueryUpdateErr2"]   = "\$text = 'Lỗi xóa thông tin trường thư mục để cập nhật.';"; 
$trans["biblioQueryDeleteErr"]    = "\$text = 'Lỗi xóa thông tin thư mục.';"; 

#****************************************************************************
#*  Văn bản dịch cho lớp BiblioSearchQuery 
#****************************************************************************

$trans["biblioSearchQueryErr1"]   = "\$text = 'Lỗi đếm kết quả tìm kiếm thư mục.';"; 
$trans["biblioSearchQueryErr2"]   = "\$text = 'Lỗi tìm kiếm thông tin thư mục.';";
$trans["biblioSearchQueryErr3"]   = "\$text = 'Lỗi đọc thông tin thư mục.';";  

#****************************************************************************
#*  Văn bản dịch cho lớp BiblioCopy
#****************************************************************************

$trans["biblioCopyError1"]        = "\$text = 'Mã số vạch là bắt buộc.';";  
$trans["biblioCopyError2"]        = "\$text = 'Ký tự không hợp lệ trong mã số vạch.';";

#****************************************************************************  
#*  Văn bản dịch cho lớp BiblioCopyQuery
#****************************************************************************

$trans["biblioCopyQueryErr1"]     = "\$text = 'Lỗi kiểm tra mã số vạch trùng.';";   
$trans["biblioCopyQueryErr2"]     = "\$text = 'Mã số vạch %barcodeNmbr% đã được sử dụng.';";
$trans["biblioCopyQueryErr3"]     = "\$text = 'Lỗi chèn thông tin bản sao thư mục mới.';";  
$trans["biblioCopyQueryErr4"]     = "\$text = 'Lỗi truy xuất thông tin bản sao thư mục.';";
$trans["biblioCopyQueryErr5"]     = "\$text = 'Lỗi cập nhật thông tin bản sao thư mục.';";  
$trans["biblioCopyQueryErr6"]     = "\$text = 'Lỗi xóa thông tin thư mục.';";
$trans["biblioCopyQueryErr7"]     = "\$text = 'Lỗi truy xuất thông tin thư mục để lấy mã bộ sưu tập.';";  
$trans["biblioCopyQueryErr8"]     = "\$text = 'Lỗi truy xuất thông tin bộ sưu tập để kiểm tra số ngày đến hạn.';"; 
$trans["biblioCopyQueryErr9"]     = "\$text = 'Đã xảy ra lỗi khi kiểm tra các bản sao trong';";  
$trans["biblioCopyQueryErr10"]    = "\$text = 'Đã xảy ra lỗi khi kiểm tra giới hạn mượn';"; 
$trans["biblioCopyQueryErr11"]    = "\$text = 'Lỗi lấy mã bản sao cao nhất.';";  

#****************************************************************************
#*  Văn bản dịch cho lớp BiblioFieldQuery
#****************************************************************************

$trans["biblioFieldQueryErr1"]    = "\$text = 'Lỗi đọc trường thư mục.';";
$trans["biblioFieldQueryErr2"]    = "\$text = 'Lỗi đọc các trường thư mục.';"; 
$trans["biblioFieldQueryInsertErr"]= "\$text = 'Lỗi chèn trường thư mục mới.';";  
$trans["biblioFieldQueryUpdateErr"]= "\$text = 'Lỗi cập nhật trường thư mục.';"; 
$trans["biblioFieldQueryDeleteErr"]= "\$text = 'Lỗi xóa trường thư mục.';";  

#****************************************************************************
#*  Văn bản dịch cho lớp UsmarcBlockDmQuery  
#****************************************************************************

$trans["usmarcBlockDmQueryErr1"]  = "\$text = 'Lỗi truy xuất dữ liệu khối marc.';";

#****************************************************************************  
#*  Văn bản dịch cho lớp UsmarcTagDmQuery
#****************************************************************************

$trans["usmarcTagDmQueryErr1"]    = "\$text = 'Lỗi truy xuất dữ liệu thẻ marc.';";  

#****************************************************************************
#*  Văn bản dịch cho lớp UsmarcSubfieldDmQuery
#****************************************************************************

$trans["usmarcSubfldDmQueryErr1"] = "\$text = 'Lỗi truy xuất dữ liệu thành phần con marc.';";   

#****************************************************************************
#*  Văn bản dịch cho lớp BiblioHoldQuery
#****************************************************************************

$trans["biblioHoldQueryErr1"]     = "\$text = 'Lỗi truy xuất dữ liệu giữ theo id thư mục.';"; 
$trans["biblioHoldQueryErr2"]     = "\$text = 'Lỗi truy xuất dữ liệu giữ theo id thành viên.';";  
$trans["biblioHoldQueryErr3"]     = "\$text = 'Lỗi lấy bibid và copyid để đặt giữ.';";
$trans["biblioHoldQueryErr4"]     = "\$text = 'Lỗi chèn dữ liệu giữ.';";  
$trans["biblioHoldQueryErr5"]     = "\$text = 'Lỗi xóa dữ liệu giữ.';";
$trans["biblioHoldQueryErr6"]     = "\$text = 'Lỗi lấy thành viên giữ đầu tiên cho một bản sao.';";  

#****************************************************************************
#*  Văn bản dịch cho lớp ReportQuery
#****************************************************************************

$trans["reportQueryErr1"]         = "\$text = 'Lỗi chạy báo cáo.';";

#****************************************************************************
#*  Văn bản dịch cho lớp ReportCriteria 
#****************************************************************************

$trans["reportCriteriaErr1"]      = "\$text = 'Giá trị phi số không hợp lệ với cột số.';";  
$trans["reportCriteriaDateTimeErr"] = "\$text = 'Định dạng ngày tháng không hợp lệ.';";  
$trans["reportCriteriaDateErr"]   = "\$text = 'Định dạng ngày không hợp lệ.';";  

#****************************************************************************  
#*  Văn bản dịch cho lớp LabelFormat và LetterFormat
#****************************************************************************

$trans["labelFormatFontErr"]      = "\$text = 'Kiểu phông chữ không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Các kiểu phông chữ hợp lệ là Courier, Helvetica và Times-Roman.';";  
$trans["labelFormatFontSizeErr"]  = "\$text = 'Kích thước phông chữ không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Kích thước phông chữ phải là số.';";
$trans["labelFormatFontSizeErr2"] = "\$text = 'Kích thước phông chữ không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Kích thước phông chữ phải lớn hơn không.';";  
$trans["labelFormatLMarginErr"]   = "\$text = 'Lề trái không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Lề trái phải là số.';"; 
$trans["labelFormatLMarginErr2"]  = "\$text = 'Lề trái không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Lề trái phải lớn hơn không.';";   
$trans["labelFormatRMarginErr"]   = "\$text = 'Lề phải không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Lề phải phải là số.';";
$trans["labelFormatRMarginErr2"]  = "\$text = 'Lề phải không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Lề phải phải lớn hơn không.';";   
$trans["labelFormatTMarginErr"]   = "\$text = 'Lề trên không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Lề trên phải là số.';";
$trans["labelFormatTMarginErr2"]  = "\$text = 'Lề trên không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Lề trên phải lớn hơn không.';";    
$trans["labelFormatBMarginErr"]   = "\$text = 'Lề dưới không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Lề dưới phải là số.';";
$trans["labelFormatColErr"]       = "\$text = 'Số cột không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Số cột phải là số.';";
$trans["labelFormatColErr2"]      = "\$text = 'Số cột không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Số cột phải lớn hơn không.';";  
$trans["labelFormatWidthErr"]     = "\$text = 'Chiều rộng không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Chiều rộng phải là số.';";
$trans["labelFormatWidthErr2"]    = "\$text = 'Chiều rộng không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Chiều rộng phải lớn hơn không.';"; 
$trans["labelFormatHeightErr"]    = "\$text = 'Chiều cao không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Chiều cao phải là số.';";
$trans["labelFormatHeightErr2"]   = "\$text = 'Chiều cao không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml. Chiều cao phải lớn hơn không.';";  
$trans["labelFormatNoLabelsErr"]  = "\$text = 'Số dòng nhãn không hợp lệ được chỉ định trong tệp định nghĩa nhãn xml.';";

#****************************************************************************  
#*  Văn bản dịch cho lớp BiblioStatusHistQuery
#****************************************************************************

$trans["biblioStatusHistQueryErr1"] = "\$text = 'Lỗi lấy lịch sử trạng thái thư mục theo id thư mục.';";
$trans["biblioStatusHistQueryErr2"] = "\$text = 'Lỗi lấy lịch sử trạng thái thư mục theo id thành viên';";
$trans["biblioStatusHistQueryErr3"] = "\$text = 'Lỗi chèn lịch sử trạng thái thư mục';";  
$trans["biblioStatusHistQueryErr4"] = "\$text = 'Lỗi xóa lịch sử trạng thái thư mục theo mã bản sao';"; 
$trans["biblioStatusHistQueryErr5"] = "\$text = 'Lỗi xóa lịch sử trạng thái thư mục theo id thành viên';";  

#****************************************************************************
#*  Văn bản dịch cho lớp MemberAccountTransaction
#****************************************************************************

$trans["memberAccountTransError1"]  = "\$text = 'Số tiền là bắt buộc.';"; 
$trans["memberAccountTransError2"]  = "\$text = 'Số tiền phải là số.';";
$trans["memberAccountTransError3"]  = "\$text = 'Mô tả là bắt buộc.';";  

#****************************************************************************  
#*  Văn bản dịch cho lớp MemberAccountQuery
#****************************************************************************

$trans["memberAccountQueryErr1"]    = "\$text = 'Lỗi truy xuất thông tin tài khoản thành viên.';";  
$trans["memberAccountQueryErr2"]    = "\$text = 'Lỗi chèn thông tin tài khoản thành viên.';"; 
$trans["memberAccountQueryErr3"]    = "\$text = 'Lỗi xóa thông tin tài khoản thành viên.';";  

?>