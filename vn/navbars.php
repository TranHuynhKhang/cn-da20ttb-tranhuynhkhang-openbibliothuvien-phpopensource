<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */

#****************************************************************************
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = 'Đăng nhập';";
$trans["logout"]                   = "\$text = 'Đăng xuất';";
$trans["help"]                     = "\$text = 'Giúp đỡ';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = 'Home';";
$trans["homeLicenseLink"]          = "\$text = 'Giấy phép';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = 'Tóm tắt của quản trị viên';";
$trans["adminStaff"]               = "\$text = 'Nhân viên quản trị';";
$trans["adminSettings"]            = "\$text = 'Cài đặt thư viện';";
$trans["adminMaterialTypes"]       = "\$text = 'Các loại vật liệu';";
$trans["adminCollections"]         = "\$text = 'Bộ sưu tập';";
$trans["adminThemes"]              = "\$text = 'Chủ đề';";
$trans["adminTranslation"]         = "\$text = 'Dịch';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = 'Tóm tắt danh mục';";
$trans["catalogSearch1"]           = "\$text = 'Tìm kiếm thư viện';";
$trans["catalogSearch2"]           = "\$text = 'Tìm kiếm thư mục';";
$trans["catalogResults"]           = "\$text = 'kết quả tìm kiếm';";
$trans["catalogBibInfo"]           = "\$text = 'Thông tin thư viện';";
$trans["catalogBibEdit"]           = "\$text = 'Chỉnh sửa-Cơ bản';";
$trans["catalogBibEditMarc"]       = "\$text = 'Chỉnh sửa-MARC';";
$trans["catalogBibMarcNewFld"]     = "\$text = 'Trường MARC mới';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'MARC mới';";
$trans["catalogBibMarcEditFld"]    = "\$text = 'Chỉnh sửa MARC Fld';";
$trans["catalogCopyNew"]           = "\$text = 'Bản sao mới';";
$trans["catalogCopyEdit"]          = "\$text = 'Chỉnh sửa bản sao';";
$trans["catalogHolds"]             = "\$text = 'Giữ yêu cầu';";
$trans["catalogDelete"]            = "\$text = 'Xóa bỏ';";
$trans["catalogBibNewLike"]        = "\$text = 'New Like';";
$trans["catalogBibNew"]            = "\$text = 'Thư mục mới';";
$trans["Upload Marc Data"]         = "\$text = 'Tải lên dữ liệu Marc';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]           = "\$text = 'Tóm tắt báo cáo';";
$trans["reportsReportListLink"]    = "\$text = 'Danh sách báo cáo';";
$trans["reportsLabelsLink"]        = "\$text = 'In Nhãn';";
$trans["reportsLettersLink"]        = "\$text = 'In thư';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'Tìm kiếm';";
$trans["catalogSearch2"]           = "\$text = 'Tìm kiếm thư mục';";
$trans["catalogResults"]           = "\$text = 'kết quả tìm kiếm';";
$trans["catalogBibInfo"]           = "\$text = 'Thông tin thư viện';";

#Added

$trans["memberInfo"]="\$text = 'Thông tin thành viên';";
$trans["memberSearch"]="\$text = 'Tìm kiếm thành viên';";
$trans["editInfo"]="\$text = 'Chỉnh sửa thông tin';";
$trans["checkoutHistory"]= "\$text = 'Lịch sử thanh toán';";
$trans["account"]="\$text = 'Tài khoản';";
$trans["checkIn"]="\$text = 'Đăng ký vào';";
$trans["memberSearch"]= "\$text = 'Tìm kiếm thành viên';";
$trans["newMember"]= "\$text = 'Thành viên mới';";
//$trans["account"]        	= "\$text = 'Account';";
?>
