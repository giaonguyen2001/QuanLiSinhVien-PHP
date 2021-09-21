<?php
    class Database{
        public static function connectDatabase(){
            $host_name = "localhost";
            $username ="root";
            $password = "";
            $db_name = "QuanLiSinhVien";
            try {
                $connect = new PDO("mysql:host=$host_name;dbname=$db_name", $username, $password);
                $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Connected successfully";
                return $connect;
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
?>