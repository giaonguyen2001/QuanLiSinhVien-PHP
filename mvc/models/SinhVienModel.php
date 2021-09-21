<?php
    require_once("Database.php");
    class SinhVienModel{
        private $maSv;
        private $hoTen;
        private $sdt;
        private $diaChi;

        public function read(){
            $connect = Database::connectDatabase();
            $sql = "SELECT * FROM SinhVien";
            return $connect->query($sql);
        }

        public function add($data = []){
            $connect = Database::connectDatabase();
            $this->maSv = $data["masv"];
            $this->hoTen = $data["hoten"];
            $this->sdt = $data["sdt"];
            $this->diaChi = $data["diachi"];
            $sql = "INSERT INTO SinhVien (masv, hoten, sdt, diachi) 
                    VALUES ('$this->maSv', '$this->hoTen', '$this->sdt', '$this->diaChi')";
            $stmt = $connect->prepare($sql);
            $stmt->execute();       
        }

        public function delete($data){
            $connect = Database::connectDatabase();
            $this->maSv = $data;
            $sql = "DELETE FROM SinhVien WHERE masv='$this->maSv'";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
        }

        public function edit($data = []){
            $connect = Database::connectDatabase();
            $this->maSv = $data["masv"];
            $this->hoTen = $data["hoten"];
            $this->sdt = $data["sdt"];
            $this->diaChi = $data["diachi"];
            $sql = "UPDATE  SinhVien 
                    SET     hoten = '$this->hoTen', sdt = '$this->sdt', diachi = '$this->diaChi'
                    WHERE   masv = '$this->maSv'";
            $stmt = $connect->prepare($sql);
            return $stmt->execute();
        }

    }
?>