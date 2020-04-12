
<?php
$username = "user_banhang"; // Khai báo username
$password = "123456";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "db_banhang";      // Khai báo database

// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}
echo "Khi kết nối thành công sẽ tiếp tục dòng code bên dưới đây."
?>


 