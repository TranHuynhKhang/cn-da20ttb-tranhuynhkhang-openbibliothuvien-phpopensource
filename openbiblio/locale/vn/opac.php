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
#*  Translation text for page index.php
#****************************************************************************
$trans["opac_Header"]        = "\$text='Danh mục truy cập công cộng trực tuyến (OPAC)';";
$trans["opac_WelcomeMsg"]    = "\$text=
  'Chào mừng đến với thư viện của chúng tôi\'s danh mục truy cập công cộng trực tuyến. Tìm kiếm danh mục của chúng tôi
   để xem thông tin thư mục về các tài liệu chúng tôi có trong thư viện của mình.';";
$trans["opac_SearchTitle"]   = "\$text='Tìm kiếm thư mục theo cụm từ tìm kiếm:';";
$trans["opac_Keyword"]       = "\$text='Từ khóa';";
$trans["opac_Title"]         = "\$text='Tiêu đề';";
$trans["opac_Author"]        = "\$text='Tác giả';";
$trans["opac_Subject"]       = "\$text='Chủ thể';";
$trans["opac_Callno"]        = "\$text='Số cuộc gọi';";
$trans["opac_Search"]        = "\$text='Tìm kiếm';";

?>
