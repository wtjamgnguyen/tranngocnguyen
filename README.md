# PHPLaravel
Tuần 1:

+) tìm hiểu php-laravel-mô hình MVC
  
    -> Model (Mô hình): Đại diện cho dữ liệu và logic nghiệp vụ của ứng dụng. Trong Laravel, Eloquent ORM được sử dụng để tương tác với cơ sở dữ liệu, cho phép định nghĩa các lớp mô hình tương ứng với các bảng trong cơ sở dữ liệu.
  
    -> View (Giao diện): Chịu trách nhiệm hiển thị dữ liệu cho người dùng. Laravel sử dụng hệ thống template Blade để tạo ra các giao diện động và linh hoạt. Blade cho phép sử dụng cú pháp ngắn gọn và hỗ trợ kế thừa giao diện, giúp việc quản lý và tái sử dụng mã nguồn trở nên dễ dàng hơn.
  
    -> Controller (Bộ điều khiển): Xử lý các yêu cầu từ người dùng, tương tác với Model và trả về View tương ứng. Các controller trong Laravel giúp tổ chức logic xử lý của ứng dụng một cách rõ ràng và có cấu trúc.
  

+) Tìm hiểu cấu trúc của 1 dự án Laravel

 -> app/
    
    │── Console/        # Các lệnh Artisan tùy chỉnh
    
    │── Exceptions/     # Xử lý ngoại lệ (Exceptions)
    
    │── Http/
    
    │   │── Controllers/  # Chứa các Controller (Xử lý logic ứng dụng)
    
    │   │── Middleware/   # Chứa các Middleware (Lọc request)
    
    │── Models/         # Chứa các Model (Tương tác với Database)
    
    │── Providers/      # Chứa các Service Providers (Cấu hình ứng dụng)
 
 -> config/
    
    │── app.php       # Cấu hình chung (timezone, locale, name)
    
    │── database.php  # Cấu hình database
    
    │── mail.php      # Cấu hình email
    
    │── queue.php     # Cấu hình hệ thống hàng đợi (Queue)
    
    │── session.php   # Cấu hình session
    
    │── view.php      # Cấu hình views
 
 -> database/
    
    │── factories/     # Chứa các factory dùng để tạo dữ liệu giả
    
    │── migrations/    # Chứa các file migration để tạo bảng DB
    
    │── seeders/       # Chứa các file seeder để tạo dữ liệu mẫu
 
 -> public/
    
    │── index.php   # Điểm vào chính của Laravel (entry point)
    
    │── css/        # Chứa file CSS (nếu có)
    
    │── js/         # Chứa file JavaScript (nếu có)
    
    │── storage/    # Liên kết với storage (chứa ảnh, file)
 
 -> resources/
    
    │── views/  # Chứa các file giao diện (Blade template)
    
    │── lang/   # Chứa file dịch đa ngôn ngữ
    
    │── css/    # Chứa file CSS (nếu không dùng frontend framework)
    
    │── js/     # Chứa file JS (nếu không dùng frontend framework)
 
 -> routes/
    
    │── web.php       # Chứa các route cho giao diện web
    
    │── api.php       # Chứa các route API
    
    │── console.php   # Chứa các lệnh artisan tùy chỉnh
 
 -> storage/
    
    │── app/         # Chứa file do ứng dụng tạo ra
    
    │── framework/   # Chứa cache và session
    
    │── logs/        # Chứa file log của Laravel


+) tìm hiểu route/middleware

-> route: Route trong Laravel xác định cách ứng dụng phản hồi các yêu cầu từ người dùng dựa trên URL và phương thức HTTP. Các route được định nghĩa trong các tệp như routes/web.php cho ứng dụng web và routes/api.php cho API.

-> middleware: Middleware là các lớp trung gian xử lý yêu cầu HTTP trước khi chúng đến controller hoặc sau khi nhận phản hồi từ controller. Chúng thường được sử dụng để thực hiện các tác vụ như xác thực người dùng, kiểm tra quyền truy cập, ghi log, hoặc xử lý CORS.

+) Làm quen với Laravel bằng cách clone 1 dự án lên github

-> Đăng nhập vào github:
  
    -> Tìm New repository, tạo kho lưu trữ.

-> đẩy dự án mình tạo lên:
 
    -> Khởi tạo Git trong thư mục dự án: git init
 
    -> Thêm tất cả các tệp vào Git: git add .
 
    -> Kiểm tra trạng thái: git status
 
    -> Thêm địa chỉ repository GitHub: git remote add origin https://github.com/your-username/your-repository.git
 
    -> Commit các thay đổi: git commit -m "Initial commit"
   
    -> Đẩy dự án lên GitHub: git branch -M main, git push -u origin main
   
    -> clone dự án có sẵn về máy: git clone https://github.com/be1tui/PHPLaravel
  
+) Xây dựng project mẫu với form thêm/sửa/xóa 1 sinh viên

+) Tìm hiểu cách hoạt động của request
  
   Trong Laravel, quá trình xử lý một yêu cầu HTTP (request) trải qua nhiều bước từ khi nhận yêu cầu đến khi trả về phản hồi (response). Hiểu rõ vòng đời của request giúp bạn nắm bắt cách Laravel hoạt động và tối ưu hóa ứng dụng hiệu quả hơn.

1. Điểm khởi đầu: public/index.php

Mọi yêu cầu HTTP đến ứng dụng Laravel đều được chuyển hướng đến tệp public/index.php. Tệp này đóng vai trò là điểm vào chính, khởi tạo quá trình xử lý của framework. 

2. Tự động tải và khởi tạo ứng dụng

Trong index.php, Laravel tải tệp tự động vendor/autoload.php để nạp các thư viện cần thiết. Sau đó, ứng dụng được khởi tạo thông qua tệp bootstrap/app.php, tạo một instance của lớp Illuminate\Foundation\Application. 

3. Khởi tạo Kernel

Laravel sử dụng HTTP Kernel để xử lý các yêu cầu HTTP. Kernel chịu trách nhiệm quản lý các middleware và định tuyến yêu cầu đến controller tương ứng. 

4. Xử lý middleware

Yêu cầu được truyền qua các middleware đã đăng ký. Middleware có thể thực hiện các tác vụ như xác thực, ghi log hoặc xử lý CORS trước khi yêu cầu đến controller. 

5. Định tuyến (Routing)

Sau khi qua middleware, yêu cầu được chuyển đến hệ thống định tuyến của Laravel để xác định controller và phương thức cần gọi dựa trên URL và phương thức HTTP. 

6. Controller và xử lý logic

Controller nhận yêu cầu từ router và thực hiện các xử lý logic cần thiết, như truy xuất dữ liệu từ cơ sở dữ liệu thông qua model, xử lý nghiệp vụ và chuẩn bị dữ liệu cho view. 

7. Trả về phản hồi (Response)

Sau khi controller xử lý xong, một phản hồi HTTP được tạo ra, có thể là một view HTML, JSON hoặc bất kỳ định dạng nào khác. Phản hồi này được gửi lại qua các middleware (sau xử lý) trước khi trả về cho client. 

8. Kết thúc (Terminate)

Sau khi phản hồi được gửi đi, Laravel thực hiện các tác vụ kết thúc, như ghi log hoặc giải phóng tài nguyên, để hoàn tất vòng đời của yêu cầu.
