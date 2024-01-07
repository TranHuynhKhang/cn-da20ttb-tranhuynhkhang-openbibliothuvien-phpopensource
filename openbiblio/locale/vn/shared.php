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

$trans["sharedCancel"]             = "\$text = 'Hủy';";   
$trans["sharedDelete"]             = "\$text = 'Xóa';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_view.php 
#****************************************************************************

$trans["biblioViewTble1Hdr"]       = "\$text = 'Thông tin thư mục';";   
$trans["biblioViewMaterialType"]   = "\$text = 'Loại tài liệu';";
$trans["biblioViewCollection"]     = "\$text = 'Bộ sưu tập';";  
$trans["biblioViewCallNmbr"]       = "\$text = 'Số kê';";
$trans["biblioViewTble2Hdr"]       = "\$text = 'Thông tin bản sao thư mục';";  
$trans["biblioViewTble2Col1"]      = "\$text = 'Mã số vạch';"; 
$trans["biblioViewTble2Col2"]      = "\$text = 'Mô tả';";
$trans["biblioViewTble2Col3"]      = "\$text = 'Trạng thái';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Ngày trạng thái';";  
$trans["biblioViewTble2Col5"]      = "\$text = 'Ngày trả';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Chức năng';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'xoá';"; 
$trans["biblioViewTble2Coledit"]   = "\$text = 'sửa';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'Thông tin thư mục bổ sung';";  
$trans["biblioViewNoAddInfo"]      = "\$text = 'Không có thông tin thư mục bổ sung nào khả dụng.';";
$trans["biblioViewNoCopies"]       = "\$text = 'Không có bản sao nào được tạo.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Hiển thị trong OPAC';";
$trans["biblioViewNewCopy"]        = "\$text = 'Thêm bản sao mới';";  
$trans["biblioViewNeweCopy"]       = "\$text = 'Thêm bản điện tử mới';";
$trans["biblioViewYes"]            = "\$text = 'có';";
$trans["biblioViewNo"]             = "\$text = 'không';";

#****************************************************************************
#*  Văn bản dịch cho trang biblio_search.php
#****************************************************************************

$trans["biblioSearchNoResults"]    = "\$text = 'Không tìm thấy kết quả.';";  
$trans["biblioSearchResults"]      = "\$text = 'Kết quả tìm kiếm';";
$trans["biblioSearchResultPages"]  = "\$text = 'Trang kết quả';";
$trans["biblioSearchPrev"]         = "\$text = 'trước';";  
$trans["biblioSearchNext"]         = "\$text = 'sau';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                    \$text = '%items% kết quả tìm thấy.';
                                  } else { 
                                    \$text = '%items% kết quả tìm thấy';
                                  }";
$trans["biblioSearchauthor"]       = "\$text = ' sắp xếp theo tác giả';";
$trans["biblioSearchtitle"]        = "\$text = ' sắp xếp theo tiêu đề';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'sắp xếp theo tác giả';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'sắp xếp theo tiêu đề';";
$trans["biblioSearchTitle"]        = "\$text = 'Tiêu đề';";
$trans["biblioSearchAuthor"]       = "\$text = 'Tác giả';";  
$trans["biblioSearchMaterial"]     = "\$text = 'Loại tài liệu';";
$trans["biblioSearchCollection"]   = "\$text = 'Bộ sưu tập';";
$trans["biblioSearchCall"]         = "\$text = 'số phân loại sách';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Mã vạch bản sao';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Trạng thái';";  
$trans["biblioSearchNoCopies"]     = "\$text = 'Không có bản sao nào khả dụng.';";
$trans["biblioSearchHold"]         = "\$text = 'giữ';"; 
$trans["biblioSearchOutIn"]        = "\$text = 'mượn/trả';";
$trans["biblioSearchDetail"]       = "\$text = 'Hiển thị thông tin thư mục chi tiết';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Mã vạch để Mượn hoặc Trả';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Mã vạch để Đặt giữ';";  

#****************************************************************************  
#*  Văn bản dịch cho trang loginform.php
#****************************************************************************

$trans["loginFormTbleHdr"]         = "\$text = 'Đăng nhập nhân viên';";
$trans["loginFormUsername"]        = "\$text = 'Tên đăng nhập';";
$trans["loginFormPassword"]        = "\$text = 'Mật khẩu';";  
$trans["loginFormLogin"]           = "\$text = 'Đăng nhập';";  

#****************************************************************************
#*  Văn bản dịch cho trang hold_del_confirm.php
#****************************************************************************  

$trans["holdDelConfirmMsg"]        = "\$text = 'Bạn có chắc chắn muốn xóa yêu cầu giữ này?';";

#****************************************************************************
#*  Văn bản dịch cho trang hold_del.php  
#****************************************************************************  

$trans["holdDelSuccess"]           = "\$text='Yêu cầu giữ đã được xóa thành công.';";   

#****************************************************************************
#*  Văn bản dịch cho trang help_header.php  
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='Trợ giúp OpenBiblio';";  
$trans["helpHeaderCloseWin"]       = "\$text='Đóng cửa sổ';"; 
$trans["helpHeaderContents"]       = "\$text='Nội dung';";
$trans["helpHeaderPrint"]          = "\$text='In';";   

$trans["catalogResults"]           = "\$text='Kết quả tìm kiếm';";  

#****************************************************************************
#*  Văn bản dịch cho trang header.php và header_opac.php
#****************************************************************************

$trans["headerTodaysDate"]         = "\$text='ngày hôm nay:';";
$trans["headerDateFormat"]         = "\$text='d-m-Y';"; 
$trans["headerLibraryHours"]       = "\$text='giờ mở cửa:';";
$trans["headerLibraryPhone"]       = "\$text='điện thoại:';";  
$trans["headerHome"]               = "\$text='Trang chủ';";
$trans["headerCirculation"]        = "\$text='Lưu hành mượn sách';";
$trans["headerCataloging"]         = "\$text='Danh mục';";
$trans["headerAdmin"]              = "\$text='Quản trị';";
$trans["headerReports"]            = "\$text='Báo cáo';";  

#****************************************************************************  
#*  Văn bản dịch cho trang footer.php  
#****************************************************************************

$trans["footerLibraryHome"]        = "\$text='Trang chủ thư viện';";
$trans["footerOPAC"]               = "\$text='OPAC';";
$trans["footerHelp"]               = "\$text='Trợ giúp';";  
$trans["footerPoweredBy"]          = "\$text='Được hỗ trợ bởi OpenBiblio phiên bản';";
$trans["footerDatabaseVersion"]    = "\$text='phiên bản database';";
$trans["footerCopyright"]          = "\$text='Bản quyền';";
$trans["footerUnderThe"]           = "\$text='theo';";  
$trans["footerGPL"]                = "\$text='Giấy phép Công cộng GNU';";

?>