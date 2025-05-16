# Note Taking Application

Ứng dụng ghi chú được xây dựng bằng PHP theo mô hình MVC (Model-View-Controller).

## Cấu trúc thư mục

```
note-taking-app/
├── app/
│   ├── config/         # Cấu hình ứng dụng
│   ├── controllers/    # Các controller
│   ├── models/         # Các model
│   ├── views/          # Các view
│   ├── helpers/        # Các helper function
│   ├── libraries/      # Các thư viện core
│   └── public/         # Assets công khai
│       ├── css/        # Stylesheets
│       ├── js/         # JavaScript files
│       └── images/     # Hình ảnh
└── database/          # Các file liên quan đến database
```

## Chi tiết các module

### 1. Config (`app/config/`)
- `config.php`: Chứa các cấu hình cơ bản của ứng dụng
  - Cấu hình database
  - Cấu hình ứng dụng (APP_NAME, APP_URL, etc.)
  - Cấu hình session
  - Cấu hình upload file

- `Database.php`: Class xử lý kết nối và tương tác với database
  - Kết nối PDO
  - Các phương thức query, bind, execute
  - Xử lý kết quả trả về

### 2. Controllers (`app/controllers/`)
- `Controller.php`: Class controller cơ sở
  - Load model
  - Load view
  - Xử lý redirect
  - Kiểm tra đăng nhập

- `Pages.php`: Controller xử lý các trang tĩnh
  - Trang chủ
  - Trang giới thiệu

### 3. Views (`app/views/`)
- `inc/`: Thư mục chứa các file include
  - `header.php`: Header chung cho toàn bộ trang
  - `footer.php`: Footer chung cho toàn bộ trang
  - `navbar.php`: Thanh điều hướng

- `pages/`: Thư mục chứa các view của Pages controller
  - `index.php`: Trang chủ
  - `about.php`: Trang giới thiệu

### 4. Helpers (`app/helpers/`)
- `session_helper.php`: Các hàm hỗ trợ xử lý session
  - Flash messages
  - Session management

- `url_helper.php`: Các hàm hỗ trợ xử lý URL
  - Redirect
  - URL sanitization
  - Base URL

### 5. Libraries (`app/libraries/`)
- `Core.php`: Class xử lý routing
  - Phân tích URL
  - Load controller tương ứng
  - Gọi method tương ứng

### 6. Public Assets (`app/public/`)
- `css/style.css`: Stylesheet chính
  - Layout styles
  - Form styles
  - Note card styles
  - Responsive design

- `js/main.js`: JavaScript chính
  - Auto-save functionality
  - Notification system
  - Event handlers

### 7. Entry Point
- `public/index.php`: File khởi động ứng dụng
  - Load config
  - Load helpers
  - Autoload libraries
  - Start session
  - Initialize Core

## Các tính năng chính

1. **Quản lý tài khoản**
   - Đăng ký
   - Đăng nhập/Đăng xuất
   - Quản lý profile
   - Đổi mật khẩu

2. **Quản lý ghi chú**
   - Tạo ghi chú mới
   - Chỉnh sửa ghi chú
   - Xóa ghi chú
   - Tự động lưu
   - Đính kèm hình ảnh
   - Gắn nhãn
   - Tìm kiếm

3. **Tính năng nâng cao**
   - Bảo vệ ghi chú bằng mật khẩu
   - Chia sẻ ghi chú
   - Cộng tác realtime
   - Hỗ trợ offline

## Cài đặt

1. Clone repository
2. Tạo database và import schema
3. Cấu hình database trong `app/config/config.php`
4. Cấu hình web server (Apache/Nginx) trỏ đến thư mục `public`
5. Đảm bảo mod_rewrite được bật (Apache)

## Yêu cầu hệ thống

- PHP 7.4+
- MySQL 5.7+
- Apache/Nginx với mod_rewrite
- Composer (để quản lý dependencies)

## Bảo mật

- Sử dụng PDO với prepared statements
- Mật khẩu được hash bằng password_hash()
- Session được quản lý an toàn
- Input được validate và sanitize
- CSRF protection
- XSS prevention 