<h1>Tìm hiểu về mã vạch:</h1>
<br><br>

Các mục trợ giúp:
<ul>
  <li><a href="#memb">Mã vạch thành viên</a></li>
  <li><a href="#p_id">In thẻ ID thành viên</a></li>
  <li><a href="#copy">Mã vạch bản sao thư mục</a></li>
  <li><a href="#p_ba">In mã vạch bản sao thư mục</a></li>
  <li><a href="#scan">Sử dụng barcode scanner</a></li>
</ul>
<br><br>

<a name="memb">Đối với mã vạch thành viên, hãy sử dụng cấu trúc số có số 0 dẫn ở đầu để 
có độ dài số cố định cho mọi mã số vạch.</a>
<br><br><br>

<a name="p_id">In thẻ thành viên như sau:</a>
<ul>
  <li>Vào tab Báo cáo, chạy báo cáo Tìm kiếm thành viên.</li>
  <li>Chuyển đổi kết quả báo cáo thành thẻ bằng cách chọn một
  thiết lập bố cục thẻ trong mục điều hướng bên trái.</li>
</ul>
<br>

<a name="copy">Đối với mã vạch bản sao thư mục, cấu trúc số có thể là:</a>
<ul>
  <li>Bên ngoài</li>
  <li>Bên trong, bằng cách sử dụng tùy chọn
    <a href="../shared/help.php?page=biblioCopyEdit#auto">Tự tạo</a></li>
</ul>
<br>

<a name="p_ba">In nhãn mã vạch tài liệu như sau:</a>
<ul>
  <li>Vào tab Báo cáo, chạy báo cáo Tìm kiếm bản sao.</li>
  <li>Chuyển đổi kết quả báo cáo thành nhãn mã vạch bằng cách chọn 
một bố cục nhãn trong mục điều hướng bên trái.</li>
</ul>
<br>


<a name="scan">Bất kỳ scanner mã vạch nào mô phỏng bàn phím đều được hỗ trợ bởi 
OpenBiblio.</a> Điều này bao gồm các scanner USB và scanner kết nối giữa 
máy tính và bàn phím của nó (wedge bàn phím).
<br>
Hầu hết các barcode scanner có thể được lập trình để tự động thêm một ký tự 
quay trở lại (tương đương với việc nhấn ENTER trên bàn phím) cho mỗi lần quét. 
Theo cách này, OpenBiblio sẽ có thể xử lý yêu cầu của bạn ngay khi bạn quét mục.