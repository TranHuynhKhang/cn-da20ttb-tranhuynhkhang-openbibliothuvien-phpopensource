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

$trans["adminSubmit"]              = "\$text = 'Gửi';";
$trans["adminCancel"]              = "\$text = 'Hủy';"; 
$trans["adminDelete"]              = "\$text = 'Xóa';";
$trans["adminUpdate"]              = "\$text = 'Cập nhật';";
$trans["adminFootnote"]            = "\$text = 'Các trường được đánh dấu bằng %symbol% là bắt buộc.';";

#****************************************************************************
#*  Văn bản dịch cho trang index.php
#****************************************************************************

$trans["indexHdr"]                 = "\$text = 'Quản trị';";  
$trans["indexDesc"]                = "\$text = 'Sử dụng các chức năng nằm ở khu vực điều hướng bên trái để quản lý nhân viên, hành chính của thư viện.';";

#****************************************************************************
#*  Văn bản dịch cho các trang collections*.php 
#****************************************************************************

$trans["adminCollections_delReturn"]                 = "\$text = 'quay lại danh sách bộ sưu tập';";
$trans["adminCollections_delStart"]                 = "\$text = 'Bộ sưu tập, ';";

#****************************************************************************
#*  Văn bản dịch cho trang collections_del.php
#****************************************************************************

$trans["adminCollections_delEnd"]                 = "\$text = ', đã bị xóa.';";

#****************************************************************************
#* Văn bản dịch cho trang collections_del_confirm.php  
#****************************************************************************

$trans["adminCollections_del_confirmText"] = "\$text = 'Bạn có chắc chắn muốn xóa bộ sưu tập, ';";

#****************************************************************************
#*  Văn bản dịch cho trang collections_edit.php
#****************************************************************************

$trans["adminCollections_editEnd"] = "\$text = ', đã được cập nhật.';";

#****************************************************************************
#*  Văn bản dịch cho trang collections_edit_form.php
#****************************************************************************

$trans["adminCollections_edit_formEditcollection"] = "\$text = 'Chỉnh sửa Bộ sưu tập:';";
$trans["adminCollections_edit_formDescription"] = "\$text = 'Sự miêu tả:';"; 
$trans["adminCollections_edit_formDaysdueback"] = "\$text = 'Ngày đến hạn hoàn trả:';";
$trans["adminCollections_edit_formDailyLateFee"] = "\$text = 'Phí trễ hàng ngày:';";
$trans["adminCollections_edit_formNote"] = "\$text = '*Lưu ý:';";  
$trans["adminCollections_edit_formNoteText"] = "\$text = 'Việc đặt số ngày đến hạn về 0 sẽ khiến toàn bộ bộ sưu tập không thể thanh toán được.';";

#****************************************************************************
#*  Văn bản dịch cho trang collections_list.php  
#****************************************************************************

$trans["adminCollections_listAddNewCollection"] = "\$text = 'Thêm bộ sưu tập mới';";
$trans["adminCollections_listCollections"] = "\$text = 'Bộ sưu tập:';";
$trans["adminCollections_listFunction"] = "\$text = 'Chức năng';";  
$trans["adminCollections_listDescription"] = "\$text = 'Sự miêu tả';";
$trans["adminCollections_listDaysdueback"] = "\$text = 'Số ngày<br>Đến hạn';";
$trans["adminCollections_listDailylatefee"] = "\$text = 'Hàng ngày<br>Phí trả muộn';";
$trans["adminCollections_listBibliographycount"] = "\$text = 'Thư mục<br>Đếm';";
$trans["adminCollections_listEdit"] = "\$text = 'Chỉnh sửa';";
$trans["adminCollections_listDel"] = "\$text = 'Xóa';";
$trans["adminCollections_ListNote"] = "\$text = '*Lưu ý:';";
$trans["adminCollections_ListNoteText"] = "\$text = 'Chức năng xóa chỉ khả dụng trên các bộ sưu tập có số lượng thư mục bằng 0.<br>Nếu bạn muốn xóa một bộ sưu tập có số lượng thư mục lớn hơn 0, trước tiên bạn cần thay đổi loại tài liệu trên các thư mục đó sang loại tài liệu khác.';";

#****************************************************************************
#*  Văn bản dịch cho trang collections_new.php
#****************************************************************************

$trans["adminCollections_newAdded"] = "\$text = ', đã được thêm.';";  

#****************************************************************************
#*  Văn bản dịch cho trang collections_new_form.php
#****************************************************************************

$trans["adminCollections_new_formAddnewcollection"] = "\$text = 'Thêm bộ sưu tập mới:';";
$trans["adminCollections_new_formDescription"] = "\$text = 'Sự miêu tả:';";
$trans["adminCollections_new_formDaysdueback"] = "\$text = 'Ngày đến hạn hoàn trả:';"; 
$trans["adminCollections_new_formDailylatefee"] = "\$text = 'Phí trễ hàng ngày:';";
$trans["adminCollections_new_formNote"] = "\$text = '*Lưu ý:';"; 
$trans["adminCollections_new_formNoteText"] = "\$text = 'Việc đặt số ngày đến hạn về 0 sẽ khiến toàn bộ bộ sưu tập không thể thanh toán được.';";

#****************************************************************************
#*  Văn bản dịch cho trang materials_del.php
#****************************************************************************

$trans["admin_materials_delMaterialType"] = "\$text = 'Loại tài liệu, ';";  
$trans["admin_materials_delMaterialdeleted"] = "\$text = ', đã bị xóa.';";
$trans["admin_materials_Return"] = "\$text = 'quay lại danh sách loại tài liệu';";

#****************************************************************************
#*  Văn bản dịch cho trang materials_del_form.php
#****************************************************************************

$trans["admin_materials_delAreyousure"] = "\$text = 'Bạn có chắc chắn muốn xóa loại tài liệu, ';";

#****************************************************************************
#*  Văn bản dịch cho trang materials_edit_form.php 
#****************************************************************************

$trans["admin_materials_delEditmaterialtype"] = "\$text = 'Chỉnh sửa loại tài liệu:';";
$trans["admin_materials_delDescription"] = "\$text = 'Mô tả:';";
$trans["admin_materials_delunlimited"] = "\$text = '(nhập 0 nếu không giới hạn)';"; 
$trans["admin_materials_delImagefile"] = "\$text = 'Tệp hình ảnh:';";
$trans["admin_materials_delNote"] = "\$text = '* Lưu ý:';"; 
$trans["admin_materials_delNoteText"] = "\$text = 'Các tệp hình ảnh phải nằm trong thư mục openbiblio/images.';";

#****************************************************************************
#*  Văn bản dịch cho trang materials_edit.php  
#****************************************************************************

$trans["admin_materials_editEnd"] = "\$text = ', đã được cập nhật.';";

#****************************************************************************
#*  Văn bản dịch cho trang materials_list.php
#****************************************************************************

$trans["admin_materials_listAddmaterialtypes"] = "\$text = 'Thêm Loại Tài Liệu Mới';";
$trans["admin_materials_listMaterialtypes"] = "\$text = 'Loại Tài Liệu:';";
$trans["admin_materials_listFunction"] = "\$text = 'Chức Năng';";
$trans["admin_materials_listDescription"] = "\$text = 'Mô Tả';"; 
$trans["admin_materials_listLimits"] = "\$text = 'Giới Hạn';";  
$trans["admin_materials_listCheckoutlimit"] = "\$text = 'Mượn';";
$trans["admin_materials_listRenewallimit"] = "\$text = 'Gia Hạn';";
$trans["admin_materials_listImageFile"] = "\$text = 'Tệp<br>Hình';";
$trans["admin_materials_listBibcount"] = "\$text = 'Thư Mục<br>Đếm';";
$trans["admin_materials_listEdit"] = "\$text = 'sửa';";
$trans["admin_materials_listDel"] = "\$text = 'xoá';";
$trans["admin_materials_listNote"] = "\$text = '* Lưu ý:';";  
$trans["admin_materials_listNoteText"] = "\$text = 'Chức năng xóa chỉ khả dụng đối với các loại tài liệu có số lượng thư mục bằng 0. Nếu bạn muốn xóa một loại tài liệu có số lượng thư mục lớn hơn 0, trước tiên bạn cần thay đổi loại tài liệu trên những thư mục đó thành một loại tài liệu khác.';";  

#****************************************************************************
#*  Văn bản dịch cho trang materials_new.php
#****************************************************************************  

$trans["admin_materials_listNewadded"] = "\$text = ', đã được thêm.';";  

#****************************************************************************
#*  Văn bản dịch cho trang materials_new_form.php
#****************************************************************************

$trans["admin_materials_new_formNoteText"] = "\$text = 'Các tệp hình ảnh phải nằm trong thư mục openbiblio/images.';";

#****************************************************************************
#*  Văn bản dịch cho trang noauth.php
#****************************************************************************

$trans["admin_noauth"] = "\$text = 'Bạn không được phép sử dụng tab Quản trị.';";

#****************************************************************************
#*  Văn bản dịch cho trang settings_edit.php 
#****************************************************************************


#****************************************************************************
#*  Văn bản dịch cho trang settings_edit_form.php
#****************************************************************************

$trans["admin_settingsUpdated"] = "\$text = 'Dữ liệu đã được cập nhật.';";
$trans["admin_settingsEditsettings"] = "\$text = 'Chỉnh Sửa Thiết Lập Thư Viện:';";
$trans["admin_settingsLibName"] = "\$text = 'Tên Thư Viện:';";
$trans["admin_settingsLibimageurl"] = "\$text = 'URL Hình Ảnh Thư Viện:';";
$trans["admin_settingsOnlyshowimginheader"] = "\$text = 'Chỉ Hiển Thị Hình Trong Header:';";  
$trans["admin_settingsLibhours"] = "\$text = 'Giờ Mở Cửa Thư Viện:';";
$trans["admin_settingsLibphone"] = "\$text = 'Điện thoại thư viện:';";
$trans["admin_settingsLibURL"] = "\$text = 'URL Thư Viện:';";
$trans["admin_settingsOPACURL"] = "\$text = 'URL OPAC:';";
$trans["admin_settingsSessionTimeout"] = "\$text = 'Thời gian chờ Phiên:';";
$trans["admin_settingsMinutes"] = "\$text = 'phút';";
$trans["admin_settingsSearchResults"] = "\$text = 'Kết quả tìm kiếm:';";
$trans["admin_settingsItemsperpage"] = "\$text = 'mục trên mỗi trang';";
$trans["admin_settingsPurgebibhistory"] = "\$text = 'Xóa lịch sử thư mục sau:';";
$trans["admin_settingsmonths"] = "\$text = 'tháng';";
$trans["admin_settingsBlockCheckouts"] = "\$text = 'Khóa mượn khi có tiền phạt:';";
$trans["admin_settingsLocale"] = "\$text = 'Ngôn ngữ:';";
$trans["admin_settingsHTMLChar"] = "\$text = 'Bảng mã HTML:';";
$trans["admin_settingsHTMLTagLangAttr"] = "\$text = 'Thuộc tính ngôn ngữ thẻ HTML:';";

#****************************************************************************
#*  Văn bản dịch cho tất cả các trang nhân viên
#****************************************************************************

$trans["adminStaff_Staffmember"] = "\$text = 'Nhân viên,';";
$trans["adminStaff_Return"] = "\$text = 'quay lại danh sách nhân viên';";
$trans["adminStaff_Yes"] = "\$text = 'Có';";
$trans["adminStaff_No"] = "\$text = 'Không';";


#****************************************************************************
#*  Văn bản dịch cho trang staff_del.php
#****************************************************************************

$trans["adminStaff_delDeleted"] = "\$text = ', đã bị xóa.';";

#****************************************************************************
#* Văn bản dịch cho trang staff_delete_confirm.php
#****************************************************************************

$trans["adminStaff_del_confirmConfirmText"] = "\$text = 'Bạn có chắc chắn muốn xóa nhân viên, ';";

#****************************************************************************
#*  Văn bản dịch cho trang staff_edit.php  
#****************************************************************************

$trans["adminStaff_editUpdated"] = "\$text = ', đã được cập nhật.';";

#****************************************************************************
#*  Văn bản dịch cho trang staff_edit_form.php
#****************************************************************************

$trans["adminStaff_edit_formHeader"] = "\$text = 'Chỉnh sửa Thông tin nhân viên:';";
$trans["adminStaff_edit_formLastname"] = "\$text = 'Họ:';";
$trans["adminStaff_edit_formFirstname"] = "\$text = 'Tên:';";
$trans["adminStaff_edit_formLogin"] = "\$text = 'Tên đăng nhập:';";
$trans["adminStaff_edit_formAuth"] = "\$text = 'Quyền truy cập:';";
$trans["adminStaff_edit_formCirc"] = "\$text = 'Circ';"; 
$trans["adminStaff_edit_formUpdatemember"] = "\$text = 'Cập nhật thành viên';";
$trans["adminStaff_edit_formCatalog"] = "\$text = 'Danh mục';";
$trans["adminStaff_edit_formAdmin"] = "\$text = 'Quản trị';";
$trans["adminStaff_edit_formReports"] = "\$text = 'Báo cáo';";
$trans["adminStaff_edit_formSuspended"] = "\$text = 'Bị đình chỉ:';";

#****************************************************************************
#*  Văn bản dịch cho trang staff_list.php
#****************************************************************************

$trans["adminStaff_list_formHeader"] = "\$text = 'Thêm nhân viên mới';"; 
$trans["adminStaff_list_Columnheader"] = "\$text = ' Nhân viên:';";
$trans["adminStaff_list_Function"] = "\$text = 'Chức năng';";
$trans["adminStaff_list_Edit"] = "\$text = 'sửa';";
$trans["adminStaff_list_Pwd"] = "\$text = 'mật khẩu';";
$trans["adminStaff_list_Del"] = "\$text = 'xoá';";

#****************************************************************************
#*  Văn bản dịch cho trang staff_new.php
#****************************************************************************

$trans["adminStaff_new_Added"] = "\$text = ', đã được thêm.';";

#****************************************************************************
#*  Văn bản dịch cho trang staff_new_form.php 
#****************************************************************************

$trans["adminStaff_new_form_Header"] = "\$text = 'Thêm nhân viên mới:';";
$trans["adminStaff_new_form_Password"] = "\$text = 'Mật khẩu:';";
$trans["adminStaff_new_form_Reenterpassword"] = "\$text = 'Nhập lại mật khẩu:';";

#****************************************************************************
#*  Văn bản dịch cho trang staff_pwd_reset.php
#****************************************************************************

$trans["adminStaff_pwd_reset_Passwordreset"] = "\$text = 'Mật khẩu đã được đặt lại.';";

#****************************************************************************
#* Văn bản dịch cho trang staff_pwd_reset_form.php  
#****************************************************************************

$trans["adminStaff_pwd_reset_form_Resetheader"] = "\$text = 'Đặt lại mật khẩu nhân viên:';";

#****************************************************************************
#*  Văn bản dịch cho các trang chủ đề  
#****************************************************************************

$trans["adminTheme_Return"] = "\$text = 'quay lại danh sách chủ đề';";
$trans["adminTheme_Theme"] = "\$text = 'Chủ đề, ';";

#****************************************************************************
#*  Văn bản dịch cho trang theme_del.php
#****************************************************************************

$trans["adminTheme_Deleted"] = "\$text = ', đã bị xóa.';";

#****************************************************************************
#* Văn bản dịch cho trang theme_del_confirm.php
#****************************************************************************

$trans["adminTheme_Deleteconfirm"] = "\$text = 'Bạn có chắc chắn muốn xóa chủ đề, ';";

#****************************************************************************
#*  Văn bản dịch cho trang theme_edit.php
#****************************************************************************

$trans["adminTheme_Updated"] = "\$text = ', đã được cập nhật.';";

#****************************************************************************
#*  Văn bản dịch cho trang theme_edit_form.php
#****************************************************************************

$trans["adminTheme_Preview"] = "\$text = 'Xem trước thay đổi chủ đề';";

#****************************************************************************
#*  Văn bản dịch cho trang theme_list.php
#****************************************************************************

$trans["adminTheme_Changetheme"] = "\$text = 'Thay đổi chủ đề đang sử dụng:';";
$trans["adminTheme_Choosetheme"] = "\$text = 'Chọn chủ đề mới:';";
$trans["adminTheme_Addnew"] = "\$text = 'Thêm chủ đề mới';";
$trans["adminTheme_themes"] = "\$text = 'Chủ đề:';";
$trans["adminTheme_function"] = "\$text = 'Chức năng';";
$trans["adminTheme_Themename"] = "\$text = 'Tên chủ đề';";
$trans["adminTheme_Usage"] = "\$text = 'Sử dụng';";
$trans["adminTheme_Edit"] = "\$text = 'sửa';";
$trans["adminTheme_Copy"] = "\$text = 'sao chép';"; 
$trans["adminTheme_Del"] = "\$text = 'xoá';";
$trans["adminTheme_Inuse"] = "\$text = 'đang dùng';";
$trans["adminTheme_Note"] = "\$text = '* Lưu ý:';"; 
$trans["adminTheme_Notetext"] = "\$text = 'Chức năng xóa không khả dụng đối với chủ đề đang được sử dụng.';";

#****************************************************************************
#*  Văn bản dịch cho trang theme_list.php 
#****************************************************************************

$trans["adminTheme_Theme2"] = "\$text = 'Chủ đề:';";
$trans["adminTheme_Tablebordercolor"] = "\$text = 'Màu viền bảng:';";
$trans["adminTheme_Errorcolor"] = "\$text = 'Màu lỗi:';";
$trans["adminTheme_Tableborderwidth"] = "\$text = 'Độ rộng viền bảng:';";  
$trans["adminTheme_Tablecellpadding"] = "\$text = 'Khoảng cách ô bảng:';";
$trans["adminTheme_Title"] = "\$text = 'Tiêu đề';";  
$trans["adminTheme_Mainbody"] = "\$text = 'Nội dung chính';";
$trans["adminTheme_Navigation"] = "\$text = 'Điều hướng';";
$trans["adminTheme_Tabs"] = "\$text = 'Tab';";
$trans["adminTheme_Backgroundcolor"] = "\$text = 'Màu nền:';";
$trans["adminTheme_Fontface"] = "\$text = 'Font chữ:';";
$trans["adminTheme_Fontsize"] = "\$text = 'Cỡ chữ:';"; 
$trans["adminTheme_Bold"] = "\$text = 'đậm';";
$trans["adminTheme_Fontcolor"] = "\$text = 'Màu chữ:';"; 
$trans["adminTheme_Linkcolor"] = "\$text = 'Màu liên kết:';";
$trans["adminTheme_Align"] = "\$text = 'Căn chỉnh:';";
$trans["adminTheme_Right"] = "\$text = 'Phải';";  
$trans["adminTheme_Left"] = "\$text = 'Trái';";
$trans["adminTheme_Center"] = "\$text = 'Giữa';";

$trans["adminTheme_HeaderWording"] = "\$text = 'Chỉnh sửa';";


#****************************************************************************
#*  Văn bản dịch cho trang theme_new.php 
#****************************************************************************

$trans["adminTheme_new_Added"] = "\$text = ', đã được thêm.';";  

#****************************************************************************
#*  Văn bản dịch cho trang theme_new_form.php
#****************************************************************************


#****************************************************************************
#*  Văn bản dịch cho trang theme_preview.php
#****************************************************************************

$trans["adminTheme_preview_Themepreview"] = "\$text = 'Xem trước chủ đề';";
$trans["adminTheme_preview_Librarytitle"] = "\$text = 'Tiêu đề thư viện';";  
$trans["adminTheme_preview_CloseWindow"] = "\$text = 'Đóng cửa sổ';";
$trans["adminTheme_preview_Home"] = "\$text = 'Trang chủ';";
$trans["adminTheme_preview_Circulation"] = "\$text = 'Lưu thông';";
$trans["adminTheme_preview_Cataloging"] = "\$text = 'Danh mục';";  
$trans["adminTheme_preview_Admin"] = "\$text = 'Quản trị';";
$trans["adminTheme_preview_Samplelink"] = "\$text = 'Liên kết mẫu';";
$trans["adminTheme_preview_Thisstart"] = "\$text = 'Đây là bản xem trước của chủ đề ';";
$trans["adminTheme_preview_Thisend"] = "\$text = '.';";
$trans["adminTheme_preview_Samplelist"] = "\$text = 'Danh sách mẫu:';";  
$trans["adminTheme_preview_Tableheading"] = "\$text = 'Tiêu đề bảng';";
$trans["adminTheme_preview_Sampledatarow1"] = "\$text = 'Dòng dữ liệu mẫu 1';";
$trans["adminTheme_preview_Sampledatarow2"] = "\$text = 'Dòng dữ liệu mẫu 2';";  
$trans["adminTheme_preview_Sampledatarow3"] = "\$text = 'Dòng dữ liệu mẫu 3';";
$trans["adminTheme_preview_Samplelink"] = "\$text = 'liên kết mẫu';";
$trans["adminTheme_preview_Sampleerror"] = "\$text = 'lỗi mẫu';"; 
$trans["adminTheme_preview_Sampleinput"] = "\$text = 'Đầu vào mẫu';";
$trans["adminTheme_preview_Samplebutton"] = "\$text = 'Nút mẫu';";  
$trans["adminTheme_preview_Poweredby"] = "\$text = 'Được hỗ trợ bởi OpenBiblio';";
$trans["adminTheme_preview_Copyright"] = "\$text = 'Bản quyền &copy; 2002-2005 Dave Stevens';";
$trans["adminTheme_preview_underthe"] = "\$text = 'theo';";
$trans["adminTheme_preview_GNU"] = "\$text = 'Giấy phép Công cộng GNU';";  

#****************************************************************************  
#*  Văn bản dịch cho trang theme_use.php  
#****************************************************************************

?>