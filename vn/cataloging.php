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
#*  Văn bản dịch chung được chia sẻ giữa nhiều trang  
#****************************************************************************

$trans["catalogSubmit"]            = "\$text = 'Gửi';";
$trans["catalogCancel"]            = "\$text = 'Hủy';";
$trans["catalogRefresh"]           = "\$text = 'Làm mới';";
$trans["catalogDelete"]            = "\$text = 'Xóa';";  
$trans["catalogFootnote"]          = "\$text = 'Các trường được đánh dấu bằng %symbol% là bắt buộc.';";
$trans["AnswerYes"]                = "\$text = 'Có';";
$trans["AnswerNo"]                 = "\$text = 'Không';";

#****************************************************************************
#*  Văn bản dịch cho trang index.php  
#****************************************************************************

$trans["indexHdr"]                 = "\$text = 'Danh mục';";
$trans["indexBarcodeHdr"]          = "\$text = 'Tìm kiếm thư mục theo Số mã vạch';";  
$trans["indexBarcodeField"]        = "\$text = 'Mã Số Vạch';";
$trans["indexSearchHdr"]           = "\$text = 'Tìm kiếm thư mục theo cụm từ';";
$trans["indexKeyword"]             = "\$text = 'Từ khóa';";
$trans["indexTitle"]               = "\$text = 'Tên Sách';";  
$trans["indexAuthor"]              = "\$text = 'Tác giả';";
$trans["indexSubject"]             = "\$text = 'Chủ đề';";
$trans["indexButton"]              = "\$text = 'Tìm kiếm';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_fields.php 
#****************************************************************************

$trans["biblioFieldsLabel"]        = "\$text = 'Thư mục';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = 'Loại tài liệu';";
$trans["biblioFieldsCollection"]   = "\$text = 'Bộ sưu tập';";  
$trans["biblioFieldsCallNmbr"]     = "\$text = 'Số lưu trữ';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'Trường USMarc';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'Hiển thị trong OPAC';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_new.php  
#****************************************************************************

$trans["biblioNewFormLabel"]       = "\$text = 'Thêm mới';"; 
$trans["biblioNewSuccess"]         = "\$text = 'Thông tin thư mục mới sau đã được tạo. Để thêm bản sao, hãy chọn \"Thêm bản sao\" từ danh mục điều hướng bên trái hoặc \"Thêm bản sao mới\" từ thông tin bản sao dưới đây.';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_edit.php  
#****************************************************************************

$trans["biblioEditSuccess"]        = "\$text = 'Thư mục đã được cập nhật thành công.';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_copy_new_form.php và biblio_copy_edit_form.php
#****************************************************************************

$trans["biblioCopyNewFormLabel"]   = "\$text = 'Thêm bản sao mới';";
$trans["biblioCopyNewBarcode"]     = "\$text = 'Mã số vạch';"; 
$trans["biblioCopyNewDesc"]        = "\$text = 'Mô tả';";
$trans["biblioCopyNewAuto"]        = "\$text = 'Tự động tạo';";
$trans["biblioCopyNewValidBarco"]  = "\$text = 'Xác nhận để in';";
$trans["biblioCopyEditFormLabel"]  = "\$text = 'Chỉnh sửa bản sao';";
$trans["biblioCopyEditFormStatus"] = "\$text = 'Trạng thái';"; 

#****************************************************************************
#*  Văn bản dịch cho trang biblio_copy_new.php
#****************************************************************************

$trans["biblioCopyNewSuccess"]     = "\$text = 'Bản sao đã được tạo thành công.';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_copy_edit.php  
#****************************************************************************

$trans["biblioCopyEditSuccess"]    = "\$text = 'Bản sao đã được cập nhật thành công.';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_copy_del_confirm.php 
#****************************************************************************

$trans["biblioCopyDelConfirmErr1"] = "\$text = 'Không thể xóa bản sao. Bản sao phải được trả lại trước khi có thể xóa.';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'Bạn có chắc chắn muốn xóa bản sao có mã số vạch %barcodeNmbr%? Điều này cũng sẽ xóa toàn bộ lịch sử thay đổi trạng thái của bản sao này.';";  

#****************************************************************************
#*  Văn bản dịch cho trang biblio_copy_del.php  
#****************************************************************************

$trans["biblioCopyDelSuccess"]     = "\$text = 'Bản sao có mã số vạch %barcode% đã được xóa thành công.';"; 

#****************************************************************************
#*  Văn bản dịch cho trang biblio_marc_list.php
#****************************************************************************

$trans["biblioMarcListMarcSelect"] = "\$text = 'Thêm trường MARC mới';";
$trans["biblioMarcListHdr"]        = "\$text = 'Thông tin trường MARC';"; 
$trans["biblioMarcListTbleCol1"]   = "\$text = 'Chức năng';";  
$trans["biblioMarcListTbleCol2"]   = "\$text = 'Tag';";
$trans["biblioMarcListTbleCol3"]   = "\$text = 'Mô tả Tag';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Subfld';";
$trans["biblioMarcListTbleCol7"]   = "\$text = 'Mô tả Subfield';";
$trans["biblioMarcListTbleCol8"]   = "\$text = 'Dữ liệu trường';";
$trans["biblioMarcListNoRows"]     = "\$text = 'Không tìm thấy trường MARC.';";
$trans["biblioMarcListEdit"]       = "\$text = 'sửa';";
$trans["biblioMarcListDel"]        = "\$text = 'xoá';";

#****************************************************************************
#*  Văn bản dịch cho trang usmarc_select.php    
#****************************************************************************

$trans["usmarcSelectHdr"]          = "\$text = 'Trình chọn trường MARC';";   
$trans["usmarcSelectInst"]         = "\$text = 'Chọn một loại trường';";
$trans["usmarcSelectNoTags"]       = "\$text = 'Không tìm thấy thẻ.';";
$trans["usmarcSelectUse"]          = "\$text = 'sử dụng';";
$trans["usmarcCloseWindow"]        = "\$text = 'Đóng cửa sổ';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_marc_new_form.php    
#****************************************************************************

$trans["biblioMarcNewFormHdr"]     = "\$text = 'Thêm trường MARC mới';";
$trans["biblioMarcNewFormTag"]     = "\$text = 'Thẻ';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'Subfield';";    
$trans["biblioMarcNewFormData"]    = "\$text = 'Dữ liệu trường';";
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Chỉ số 1';"; 
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Chỉ số 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'Chọn';";   

#****************************************************************************
#*  Văn bản dịch cho trang biblio_marc_new.php
#****************************************************************************

$trans["biblioMarcNewSuccess"]     = "\$text = 'Trường MARC đã được thêm thành công.';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_marc_edit_form.php  
#****************************************************************************

$trans["biblioMarcEditFormHdr"]    = "\$text = 'Chỉnh sửa trường MARC';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_marc_edit.php  
#****************************************************************************

$trans["biblioMarcEditSuccess"]    = "\$text = 'Trường MARC đã được cập nhật thành công.';";  

#****************************************************************************
#*  Văn bản dịch cho trang biblio_marc_del_confirm.php
#****************************************************************************

$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Bạn có chắc chắn muốn xóa trường có thẻ %tag% và subfield %subfieldCd%?';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_marc_del.php 
#****************************************************************************

$trans["biblioMarcDelSuccess"]     = "\$text = 'Trường MARC đã được xóa thành công.';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_del_confirm.php  
#****************************************************************************

$trans["biblioDelConfirmWarn"]     = "\$text = 'Thư mục này có %copyCount% bản sao và %holdCount% yêu cầu giữ. Vui lòng xóa những bản sao và / hoặc yêu cầu giữ này trước khi xóa thư mục này.';";
$trans["biblioDelConfirmReturn"]   = "\$text = 'quay lại thông tin thư mục';";
$trans["biblioDelConfirmMsg"]      = "\$text = 'Bạn có chắc chắn muốn xóa thư mục có tên %title%?';";  

#****************************************************************************
#*  Văn bản dịch cho trang biblio_del_confirm.php  
#****************************************************************************

$trans["biblioDelMsg"]             = "\$text = 'Thư mục, %title%, đã bị xóa.';";
$trans["biblioDelReturn"]          = "\$text = 'quay lại tìm kiếm thư mục';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_hold_list.php
#****************************************************************************

$trans["biblioHoldListHead"]       = "\$text = 'Yêu cầu giữ thư mục:';";
$trans["biblioHoldListNoHolds"]    = "\$text = 'Hiện không có bản sao thư mục nào đang được giữ.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'Chức năng';";
$trans["biblioHoldListHdr2"]       = "\$text = 'Bản sao';";
$trans["biblioHoldListHdr3"]       = "\$text = 'Đặt giữ vào';";
$trans["biblioHoldListHdr4"]       = "\$text = 'Thành viên';";
$trans["biblioHoldListHdr5"]       = "\$text = 'Trạng thái';";
$trans["biblioHoldListHdr6"]       = "\$text = 'Trả về';";
$trans["biblioHoldListdel"]        = "\$text = 'Xóa';";

#****************************************************************************
#*  Văn bản dịch cho trang noauth.php 
#****************************************************************************

$trans["NotAuth"]                 = "\$text = 'Bạn không được phép sử dụng tab Danh mục';";  

#****************************************************************************
#*  Văn bản dịch cho trang upload_usmarc.php và upload_usmarc_form.php
#****************************************************************************

$trans["MarcUploadTest"]            = "\$text = 'Kiểm tra tải lên';";  
$trans["MarcUploadTestTrue"]        = "\$text = 'Đúng';";
$trans["MarcUploadTestFalse"]       = "\$text = 'Sai';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'Tệp đầu vào USMarc';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Bản ghi đã tải lên';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'Bản ghi MARC';";
$trans["MarcUploadTag"]             = "\$text = 'Thẻ';";
$trans["MarcUploadSubfield"]        = "\$text = 'Sub';";  
$trans["MarcUploadData"]            = "\$text = 'Dữ liệu';";
$trans["MarcUploadRawData"]         = "\$text = 'Dữ liệu thô:';"; 
$trans["UploadFile"]                = "\$text = 'Tải lên tệp';";  

#****************************************************************************
#*  Văn bản dịch cho trang usmarc_select.php  
#****************************************************************************

$trans["PoweredByOB"]                 = "\$text = 'Được hỗ trợ bởi OpenBiblio';";
$trans["Copyright"]                   = "\$text = 'Bản quyền &copy; 2002-2005';"; 
$trans["underthe"]                    = "\$text = 'theo';";
$trans["GNU"]                 = "\$text = 'Giấy phép Công cộng GNU';";  

$trans["catalogResults"]                 = "\$text = 'Kết quả tìm kiếm';";

?>