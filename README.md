
# README - Backup fpdf-fpdi-tfpdf

## 1. Tổng Quan
Dự án này hỗ trợ chức năng **Personalized picture** bằng cách sử dụng thư viện `tfpdf` để hỗ trợ tiếng Việt trong file PDF. Để đảm bảo khả năng tương thích, tôi đã thực hiện một số thay đổi trong mã nguồn của `fpdi` để sử dụng `tfpdf` thay vì `fpdf`. 

**Demo:** [Personalized Zodiac Sign Poster](https://artsybucket.com/posters-prints/aquarius-personal-zodiac-sign-poster/)

**Thư viện chuyển đổi PDF sang hình ảnh:** [pdf-to-image của Spatie](https://github.com/spatie/pdf-to-image)

## 2. Yêu Cầu Hệ Thống
- **Imagick và Ghostscript:** Cần cài đặt `Imagick` và `Ghostscript`. Hướng dẫn cài đặt chi tiết có trong liên kết GitHub phía trên.
- **Đối với hệ điều hành Windows:**
  - Đảm bảo Ghostscript đã được cài đặt và thêm vào `Environment System Variables`.
  - Đổi tên `gswin64.exe` thành `gs.exe` để Imagick có thể nhận diện và biên dịch đúng. [Tham khảo thêm tại đây](https://stackoverflow.com/questions/73823620/why-would-imagemagick-ghostscript-work-in-cmd-but-not-in-php).

## 3. Thông Tin Về Backup
Vì cần hỗ trợ tiếng Việt, dự án sử dụng `tfpdf` - bản mở rộng của `fpdf` hỗ trợ mã hóa UTF-8. Tuy nhiên, việc sử dụng Composer để backup có thể gây mất các thay đổi đã thực hiện, vì vậy bản backup này đảm bảo khả năng sử dụng lại sau này.

### Các thay đổi đã thực hiện:
- **File đã chỉnh sửa:** `FpdfTpl.php` tại `fpfi/src/` (Đường dẫn ví dụ: `C:\xampp\htdocs\photovault\vendor\setasign\fpdi\src\FpdfTpl.php`).
- **Font chữ:** Font `Dejavusan.tff` đã được thêm vào thư mục font của `tfpdf` để đảm bảo hiển thị tiếng Việt đúng cách.

## 4. Ghi Chú
- Cần kiểm tra các vấn đề liên quan đến `Ghostscript` và `Imagick` nếu gặp lỗi. Tham khảo thêm trên GitHub hoặc Stack Overflow nếu cần thiết.
