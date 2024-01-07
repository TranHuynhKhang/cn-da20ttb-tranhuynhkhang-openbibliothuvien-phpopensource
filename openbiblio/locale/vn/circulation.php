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

$trans["circCancel"]              = "\$text = 'Hủy';";  
$trans["circDelete"]              = "\$text = 'Xóa';";
$trans["circLogout"]              = "\$text = 'Đăng xuất';";  
$trans["circAdd"]                 = "\$text = 'Thêm';";
$trans["mbrDupBarcode"]           = "\$text = 'Mã số vạch %barcode% đang được sử dụng.';";  

#****************************************************************************
#*  Văn bản dịch cho trang index.php
#****************************************************************************

$trans["indexHeading"]            = "\$text='Lưu hành mượn sách';";
$trans["indexCardHdr"]            = "\$text='Tìm kiếm thành viên theo Số thẻ:';";
$trans["indexCard"]               = "\$text='Số thẻ:';";
$trans["indexSearch"]             = "\$text='Tìm kiếm';"; 
$trans["indexNameHdr"]            = "\$text='Tìm kiếm thành viên theo Họ:';";
$trans["indexName"]               = "\$text='Họ bắt đầu bằng:';";  

#****************************************************************************
#*  Văn bản dịch cho trang mbr_new_form.php, mbr_edit_form.php và mbr_fields.php  
#****************************************************************************

$trans["Mailing Address:"] = "\$text='Địa chỉ thư tín:';";  
$trans["mbrNewForm"]              = "\$text='Thêm mới';";
$trans["mbrEditForm"]             = "\$text='Chỉnh sửa';";  
$trans["mbrFldsHeader"]           = "\$text='Thành viên:';";  
$trans["mbrFldsCardNmbr"]         = "\$text='Số thẻ:';";
$trans["mbrFldsLastName"]         = "\$text='Họ:';";
$trans["mbrFldsFirstName"]        = "\$text='Tên:';";
$trans["mbrFldsAddr1"]            = "\$text='Địa chỉ 1:';";
$trans["mbrFldsAddr2"]            = "\$text='Địa chỉ 2:';";
$trans["mbrFldsCity"]             = "\$text='Thành phố:';";
$trans["mbrFldsStateZip"]         = "\$text='Tỉnh/TP, Mã Zip:';";  
$trans["mbrFldsHomePhone"]        = "\$text='Điện thoại nhà:';";
$trans["mbrFldsWorkPhone"]        = "\$text='Điện thoại cơ quan:';";
$trans["mbrFldsEmail"]            = "\$text='Địa chỉ email:';";  
$trans["mbrFldsClassify"]         = "\$text='Phân loại:';";
$trans["mbrFldsGrade"]            = "\$text='Khối lớp:';";
$trans["mbrFldsTeacher"]          = "\$text='Giáo viên:';";
$trans["mbrFldsSubmit"]           = "\$text='Gửi';";
$trans["mbrFldsCancel"]           = "\$text='Hủy';"; 
$trans["mbrsearchResult"]         = "\$text='Trang kết quả:';";
$trans["mbrsearchprev"]           = "\$text='trước';";
$trans["mbrsearchnext"]           = "\$text='sau';";
$trans["mbrsearchNoResults"]      = "\$text='Không tìm thấy kết quả.';";
$trans["mbrsearchFoundResults"]   = "\$text=' kết quả tìm thấy.';";  
$trans["mbrsearchSearchResults"]  = "\$text='Kết quả tìm kiếm:';";
$trans["mbrsearchCardNumber"]     = "\$text='Số thẻ:';";
$trans["mbrsearchClassification"] = "\$text='Phân loại:';";  

#****************************************************************************
#*  Văn bản dịch cho trang mbr_new.php 
#****************************************************************************

$trans["mbrNewSuccess"]           = "\$text='Thành viên đã được thêm thành công.';";  

#****************************************************************************
#*  Văn bản dịch cho trang mbr_edit.php
#****************************************************************************

$trans["mbrEditSuccess"]          = "\$text='Thành viên đã được cập nhật thành công.';";

#****************************************************************************
#*  Văn bản dịch cho trang mbr_view.php
#****************************************************************************

$trans["mbrViewHead1"]            = "\$text='Thông tin thành viên:';";
$trans["mbrViewName"]             = "\$text='Tên:';";  
$trans["mbrViewAddr"]             = "\$text='Địa chỉ:';";
$trans["mbrViewCardNmbr"]         = "\$text='Số thẻ:';";  
$trans["mbrViewClassify"]         = "\$text='Phân loại:';";
$trans["mbrViewPhone"]            = "\$text='Điện thoại:';";
$trans["mbrViewPhoneHome"]        = "\$text='Nhà:';";  
$trans["mbrViewPhoneWork"]        = "\$text='Cơ quan:';";
$trans["mbrViewEmail"]            = "\$text='Địa chỉ email:';";
$trans["mbrViewGrade"]            = "\$text='Khối lớp:';"; 
$trans["mbrViewTeacher"]          = "\$text='Giáo viên:';";
$trans["mbrViewHead2"]            = "\$text='Thống kê mượn:';";  
$trans["mbrViewStatColHdr1"]      = "\$text='Loại Tài Liệu';";
$trans["mbrViewStatColHdr2"]      = "\$text='Số Lượng';";  
$trans["mbrViewStatColHdr3"]      = "\$text='Giới Hạn';";
$trans["mbrViewStatColHdr4"]      = "\$text='Mượn';";
$trans["mbrViewStatColHdr5"]      = "\$text='Gia Hạn';";  
$trans["mbrViewHead3"]            = "\$text='Mượn thư mục:';";
$trans["mbrViewBarcode"]          = "\$text='Mã số vạch:';";
$trans["mbrViewCheckOut"]         = "\$text='Mượn';";
$trans["mbrViewHead4"]            = "\$text='Danh sách thư mục đang mượn:';";
$trans["mbrViewOutHdr1"]          = "\$text='Ngày mượn';";  
$trans["mbrViewOutHdr2"]          = "\$text='Loại Tài Liệu';";
$trans["mbrViewOutHdr3"]          = "\$text='Mã Số Vạch';";
$trans["mbrViewOutHdr4"]          = "\$text='Tựa Đề';";  
$trans["mbrViewOutHdr5"]          = "\$text='Tác Giả';";
$trans["mbrViewOutHdr6"]          = "\$text='Ngày Trả';";
$trans["mbrViewOutHdr7"]          = "\$text='Ngày Trễ';";  
$trans["mbrViewOutHdr8"]          = "\$text='Gia Hạn';";
$trans["mbrViewOutHdr9"]          = "\$text='lần/s';";  
$trans["mbrViewNoCheckouts"]      = "\$text='Hiện không có thư mục nào đang được mượn.';";
$trans["mbrViewHead5"]            = "\$text='Đặt giữ:';";
$trans["mbrViewHead6"]            = "\$text='Danh sách thư mục đang giữ:';";  
$trans["mbrViewPlaceHold"]        = "\$text='Đặt giữ';";  
$trans["mbrViewHoldHdr1"]         = "\$text='Chức năng';";
$trans["mbrViewHoldHdr2"]         = "\$text='Ngày giữ';";  
$trans["mbrViewHoldHdr3"]         = "\$text='Loại Tài Liệu';";
$trans["mbrViewHoldHdr4"]         = "\$text='Mã Số Vạch';";  
$trans["mbrViewHoldHdr5"]         = "\$text='Tựa Đề';";
$trans["mbrViewHoldHdr6"]         = "\$text='Tác Giả';";
$trans["mbrViewHoldHdr7"]         = "\$text='Trạng Thái';";  
$trans["mbrViewHoldHdr8"]         = "\$text='Ngày Trả';";
$trans["mbrViewNoHolds"]          = "\$text='Hiện không có thư mục nào đang được giữ.';";
$trans["mbrViewBalMsg"]           = "\$text='Lưu ý: Thành viên có số dư tài khoản chưa thanh toán là %bal%.';";
$trans["mbrPrintCheckouts"]	  = "\$text='in danh sách mượn';";
$trans["mbrViewDel"]              = "\$text='xoá';";  

#****************************************************************************
#*  Văn bản dịch cho trang checkout.php  
#****************************************************************************

$trans["checkoutBalErr"]          = "\$text='Thành viên phải thanh toán số dư tài khoản trước khi mượn.';";
$trans["checkoutErr1"]            = "\$text='Mã số vạch phải bao gồm chữ cái và số.';";  
$trans["checkoutErr2"]            = "\$text='Không tìm thấy thư mục với mã số vạch đó.';";
$trans["checkoutErr3"]            = "\$text='Thư mục có mã số vạch %barcode% đã được mượn.';";  
$trans["checkoutErr4"]            = "\$text='Thư mục có mã số vạch %barcode% không khả dụng để mượn.';"; 
$trans["checkoutErr5"]            = "\$text='Thư mục có mã số vạch %barcode% hiện đang được giữ cho thành viên khác.';";
$trans["checkoutErr6"]            = "\$text='Thành viên đã đạt giới hạn mượn cho loại tài liệu của thư mục được chỉ định.';"; 
$trans["checkoutErr7"]            = "\$text='Thư mục có mã số vạch %barcode% đã đạt giới hạn gia hạn của thành viên.';";
$trans["checkoutErr8"]            = "\$text='Thư mục có mã số vạch %barcode% không thể gia hạn vì đã bị trễ hạn.';";  

#****************************************************************************
#*  Văn bản dịch cho trang shelving_cart.php
#****************************************************************************

$trans["shelvingCartErr1"]        = "\$text='Mã số vạch phải bao gồm chữ cái và số.';";
$trans["shelvingCartErr2"]        = "\$text='Không tìm thấy thư mục với mã số vạch đó.';";
$trans["shelvingCartTrans"]       = "\$text='Phí trễ hạn (barcode=%barcode%)';";  

#****************************************************************************
#*  Văn bản dịch cho trang checkin_form.php
#****************************************************************************

$trans["checkinFormHdr1"]         = "\$text='Trả thư mục:';";  
$trans["checkinFormBarcode"]      = "\$text='Mã số vạch:';";
$trans["checkinFormShelveButton"] = "\$text='Thêm vào giá sách';";
$trans["checkinFormCheckinLink1"] = "\$text='Trả các mục đã chọn';";
$trans["checkinFormCheckinLink2"] = "\$text='Trả tất cả các mục';";  
$trans["checkinFormHdr2"]         = "\$text='Danh sách kệ sách hiện tại:';";
$trans["checkinFormColHdr1"]      = "\$text='Ngày quét';";
$trans["checkinFormColHdr2"]      = "\$text='Mã số vạch';";  
$trans["checkinFormColHdr3"]      = "\$text='Tiêu đề';"; 
$trans["checkinFormColHdr4"]      = "\$text='Tác giả';";
$trans["checkinFormEmptyCart"]    = "\$text='Hiện không có thư mục nào ở trạng thái giỏ sắp xếp.';";  

#****************************************************************************
#*  Văn bản dịch cho trang checkin.php  
#****************************************************************************

$trans["checkinErr1"]             = "\$text='Không có mục nào được chọn.';";  

#****************************************************************************
#*  Văn bản dịch cho trang hold_message.php
#****************************************************************************

$trans["holdMessageHdr"]          = "\$text='Thư mục đã được Đặt giữ!';";
$trans["holdMessageMsg1"]         = "\$text='Thư mục có mã số vạch %barcode% mà bạn đang cố gắng trả có một hoặc nhiều yêu cầu giữ được đặt trên nó. <b>Vui lòng lưu trữ thư mục này với các mục đang giữ của bạn thay vì đặt nó vào giỏ sắp xếp của bạn.</b> Trạng thái của thư mục này đã được đặt thành giữ.';";  
$trans["holdMessageMsg2"]         = "\$text='Quay lại trả thư mục.';";  

#****************************************************************************
#*  Văn bản dịch cho trang place_hold.php  
#****************************************************************************

$trans["placeHoldErr1"]           = "\$text='Mã số vạch phải là số.';";  
$trans["placeHoldErr2"]           = "\$text='Mã số vạch không tồn tại.';";
$trans["placeHoldErr3"]           = "\$text='Thành viên này đã mượn mục này -- không đặt giữ.';";  

#****************************************************************************
#*  Văn bản dịch cho trang mbr_del_confirm.php
#****************************************************************************

$trans["mbrDelConfirmWarn"]       = "\$text = 'Thành viên %name% có %checkoutCount% mượn và %holdCount% yêu cầu giữ. Tất cả các tài liệu đã mượn phải được trả và tất cả các yêu cầu giữ phải bị xóa trước khi xóa thành viên này.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'quay lại thông tin thành viên';";  
$trans["mbrDelConfirmMsg"]        = "\$text = 'Bạn có chắc chắn muốn xóa thành viên %name%? Điều này cũng sẽ xóa toàn bộ lịch sử mượn của thành viên này.';";  

#****************************************************************************
#*  Văn bản dịch cho trang mbr_del.php
#****************************************************************************

$trans["mbrDelSuccess"]           = "\$text='Thành viên %name% đã bị xóa.';"; 
$trans["mbrDelReturn"]            = "\$text='quay lại tìm kiếm thành viên';";   

#****************************************************************************
#*  Văn bản dịch cho trang mbr_history.php 
#****************************************************************************

$trans["mbrHistoryHead1"]         = "\$text='Lịch sử mượn của thành viên:';";  
$trans["mbrHistoryNoHist"]        = "\$text='Không tìm thấy lịch sử.';";
$trans["mbrHistoryHdr1"]          = "\$text='Mã số vạch';";  
$trans["mbrHistoryHdr2"]          = "\$text='Tựa đề';";
$trans["mbrHistoryHdr3"]          = "\$text='Tác giả';";
$trans["mbrHistoryHdr4"]          = "\$text='Trạng thái mới';";  
$trans["mbrHistoryHdr5"]          = "\$text='Ngày thay đổi trạng thái';";  
$trans["mbrHistoryHdr6"]          = "\$text='Ngày trả';";   

#****************************************************************************
#*  Văn bản dịch cho trang mbr_account.php  
#****************************************************************************

$trans["mbrAccountLabel"]         = "\$text='Thêm giao dịch:';";  
$trans["mbrAccountTransTyp"]      = "\$text='Loại giao dịch:';";  
$trans["mbrAccountAmount"]        = "\$text='Số tiền:';";
$trans["mbrAccountDesc"]          = "\$text='Mô tả:';";
$trans["mbrAccountHead1"]         = "\$text='Giao dịch tài khoản thành viên:';";  
$trans["mbrAccountNoTrans"]       = "\$text='Không tìm thấy giao dịch nào.';";  
$trans["mbrAccountOpenBal"]       = "\$text='Số dư ban đầu';";  
$trans["mbrAccountDel"]           = "\$text='xoá';";
$trans["mbrAccountHdr1"]          = "\$text='Chức năng';";  
$trans["mbrAccountHdr2"]          = "\$text='Ngày';";
$trans["mbrAccountHdr3"]          = "\$text='Loại giao dịch';";
$trans["mbrAccountHdr4"]          = "\$text='Mô tả';";  
$trans["mbrAccountHdr5"]          = "\$text='Số tiền';";
$trans["mbrAccountHdr6"]          = "\$text='Số dư';";  

#****************************************************************************
#*  Văn bản dịch cho trang mbr_transaction.php  
#****************************************************************************

$trans["mbrTransactionSuccess"]   = "\$text='Giao dịch thành công.';";

#****************************************************************************
#*  Văn bản dịch cho trang mbr_transaction_del_confirm.php 
#****************************************************************************

$trans["mbrTransDelConfirmMsg"]   = "\$text='Bạn có chắc chắn muốn xóa giao dịch này?';";  

#****************************************************************************
#*  Văn bản dịch cho trang mbr_transaction_del.php
#****************************************************************************

$trans["mbrTransactionDelSuccess"] = "\$text='Giao dịch đã được xóa thành công.';";  

#****************************************************************************
#*  Văn bản dịch cho trang mbr_print_checkouts.php
#****************************************************************************

$trans["mbrPrintCheckoutsTitle"]  = "\$text='Danh sách mượn của %mbrName%';";  
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Ngày hiện tại:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Thành viên:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Số thẻ:';";  
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='Phân loại:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Đóng cửa sổ';";

#****************************************************************************
#*  Dịch văn bản cho trang noauth.php
#****************************************************************************
$trans["NotAuth"] = "\$text = 'Bạn không được phép sử dụng chức năng này dưới tab Lưu thông.';";

#****************************************************************************
#*  Dịch văn bản cho trang offline.php
#****************************************************************************
$trans["Upload Offline Circulation"] = "\$text='Tải lên Lưu thông Ngoại tuyến';";
$trans["Upload"] = "\$text='Tải lên';";
$trans["Date:"] = "\$text='Ngày:';";
$trans["Command File:"] = "\$text='Tệp Lệnh:';";
$trans["Bad upload file: Expected a command code, but didn't get one"] = "\$text='Tệp tải lên không hợp lệ: Mong đợi một mã lệnh, nhưng không nhận được.';";
$trans["Couldn't check out %item% to %member%: %error%"] = "\$text='Không thể cho mượn %item% cho %member%: %error%';";
$trans["Couldn't check in %item%: %error%"] = "\$text='Không thể trả %item%: %error%';";
$trans["Unrecognized command code: %cmd%"] = "\$text='Mã lệnh không được nhận diện: %cmd%';";
$trans["Command Sheet"] = "\$text='Bảng Lệnh';";
$trans["Actions which did not produce an error have completed. Think carefully before uploading the same file again, or some circulations may be recorded twice."] = "\$text='Các hành động không tạo ra lỗi đã hoàn thành. Hãy cân nhắc kỹ trước khi tải lên cùng một tệp lại, hoặc một số lưu thông có thể được ghi hai lần.';";
$trans["Errors"] = "\$text='Lỗi';";
$trans["Offline Upload Successful."] = "\$text='Tải lên Ngoại tuyến thành công.';";

?>