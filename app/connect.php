<?php
function connectToDatabase() {
    $servername = "localhost";
    $username = "";
    $password = "";
    $database = "go_sneaker";
    
    // Kết nối đến MySQL
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    
    return $conn;
    
    // Thực hiện các thao tác với cơ sở dữ liệu ở đây
    
    // // Đóng kết nối
    // mysqli_close($conn);
}
?>
