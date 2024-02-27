<?php
    //connect db
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
// get product from the database
    function getData($pids = []){
        $where = "";
        if(count($pids)) {
            $pids = implode(",", $pids);
            $where = " where id in ({$pids})";
        }
        $sql = "SELECT * FROM shoes $where";

        $conn = connectToDatabase();
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            return $result;
        }
    }

    function getProduct($id){
        $query = "SELECT * FROM shoes where id = '".$id."'";
        $conn = connectToDatabase();
        $result = $conn->query($query);

        if($result->num_rows > 0){
            return $result;
        }
    }
?>