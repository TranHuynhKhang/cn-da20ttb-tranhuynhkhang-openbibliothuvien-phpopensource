<h1>Trang Thêm và Sửa Bản Sao:</h1>
<br><br>

Các mục trợ giúp:
<ul>
  <li><a href="#desc">Mô tả trường</a></li>
  <li><a href="#barc">Nhập số Mã Số Vạch từ cấu trúc đánh số bên ngoài</a></li>
  <li><a href="#auto">Mã Số Vạch - Tự tạo</a></li>
  <li><a href="#seri">Số Seri Bản Sao tích hợp trong Mã Số Vạch</a></li>
</ul>
<br><br>

<a name="desc">
	Bảng sau đây cung cấp mô tả cho các trường trên Trang Thêm và Sửa Bản Sao.</a>
<br><br>

<table class="primary">
  <tr><th>Trường</th><th>Mô tả</th></tr>
  <tr>
    <td class="primary" valign="top">Mã Số Vạch</td>
    <td class="primary" valign="top">Mã nhận dạng duy nhất cho bản sao, 
tối đa 20 ký tự. Trường này bắt buộc vì nó xác định bản sao trong các biểu mẫu Lưu Thông 
(Mượn, Trả, Giữ).
<br>Xem thêm: 
<a href="../shared/help.php?page=barcodes">Tìm hiểu về mã vạch</a>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">Mô Tả</td>
    <td class="primary" valign="top">Văn bản ngắn miêu tả đặc điểm cho bản sao.</td>
  </tr>
  <tr>
    <td class="primary" valign="top">Trạng Thái</td>
    <td class="primary" valign="top"><b>Chỉ có trong Sửa Bản Sao</b>.
<br>Xem thêm:
<a href="../shared/help.php?page=status">Hiểu trạng thái thay đổi thư mục</a>
    </td>
  </tr>
</table>
<br><br>

<a name="barc">Nhập Mã Số Vạch từ cấu trúc số bên ngoài</a>:
<ul>
  <li>Nhập Mã Số Vạch thủ công, hoặc sử dụng scanner nếu bản sao đã có nhãn,</li>
  <li>Gửi (tùy chọn Tự tạo không được chọn).</li>
</ul>
<br>

<a name="auto">
Bằng cách gửi một bản sao mới với tùy chọn  <input name="autobarco" type="checkbox" checked> Tự tạo</a> 
cho trường Mã Số Vạch được chọn, OpenBiblio sẽ cố gắng gán tự động một Mã Số Vạch 
duy nhất, theo các quy tắc từ cấu trúc số nội bộ: 
<ul>
  <li>Phần đầu tiên được tính từ<i>bibid</i> mà thư mục được biết đến nội bộ bởi OpenBiblio, với số 0 dẫn đầu. Độ dài mặc định là 5 chữ số, 
  có thể thay đổi bằng cách sửa giá trị cho 
  $nzeros trong biblio_copy_new.php</li>
  <li>Phần cuối bằng<i>copyid</i>  nội bộ của bản sao.</li>
</ul>
<br><br>

<a name="seri">
Số Seri Bản Sao tích hợp trong Mã Số Vạch</a>  tạo thuận lợi cho việc nhập thông tin bản sao từ thẻ đơn giản 
khi số định danh duy nhất chưa được gán, chỉ có số seri cho nhiều bản sao của một tựa sách.
<br>
Trang Tra cứu Mã vạch có thông tin về
<a href="../shared/help.php?page=opacLookup#seri">Nhận diện Số Seri Bản Sao trong Mã Số Vạch Tự sinh</a>.
<br>
Khi thêm các bản sao được đánh dấu bằng nhận dạng số seri vào một Thư mục: 
<ul>
  <li>Chọn Tự tạo,</li>
  <li>gửi các bản sao mới cho đến khi Số Seri Bản Sao tương ứng với chữ số cuối cùng của Mã Số Vạch được tự tạo,</li>
  <li>xóa vĩnh viễn các bản sao không khả dụng, chỉnh sửa trạng thái cho những bản sao khác.</li>
</ul>
<br><br>
