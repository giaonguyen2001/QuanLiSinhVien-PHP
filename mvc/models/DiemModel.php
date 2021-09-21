<?php
    require_once ("Database.php");
    class DiemModel{
        private $maSv;
        private $maMon;
        private $diem;
        private $lanThi;

        public function read(){
            $connect = Database::connectDatabase();
            $sql = "SELECT * FROM Diem";
            return $connect->query($sql);
        }

        public function add($data = []){
            $connect = Database::connectDatabase();
            $this->maSv = $data["masv"];
            $this->maMon = $data["mamon"];
            $this->diem = $data["diem"];
            $this->lanThi = $data["lanthi"];
            $sql = "INSERT INTO Diem(masv, mamon, diem, lanthi) VALUES ('$this->maSv', '$this->maMon', '$this->diem', '$this->lanThi')";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
        }

        public function edit($data =[]){
            $connect = Database::connectDatabase();
            $this->maSv = $data["masv"];
            $this->maMon = $data["mamon"];
            $this->diem = $data["diem"];
            $this->lanThi = $data["lanthi"];
            $sql = "UPDATE  Diem
                    SET     diem = '$this->diem', lanthi = '$this->lanThi'
                    WHERE masv = '$this->maSv' AND mamon = '$this->maMon'";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
        }

        public function delete($data = []){
            $connect = Database::connectDatabase();
            $this->maSv = $data["masv"];
            $this->maMon = $data["mamon"];
            $sql = "DELETE FROM Diem WHERE masv = '$this->maSv' AND mamon = '$this->maMon'";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
        }
    }
?>