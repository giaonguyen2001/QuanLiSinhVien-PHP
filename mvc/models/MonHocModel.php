<?php
    require_once("Database.php");
    class MonHocModel{
        private $maMon;
        private $tenMon;
        private $stc;

        public function read(){
            $connect = Database::connectDatabase();
            $sql = "SELECT * FROM MonHoc";
            return $connect->query($sql);
        }

        public function add($data = []){
            $connect = Database::connectDatabase();
            $this->maMon = $data["mamon"];
            $this->tenMon = $data["tenmon"];
            $this->stc = $data["stc"];
            $sql = "INSERT INTO MonHoc(mamon, tenmon, stc) VALUES ('$this->maMon', '$this->tenMon', '$this->stc')";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
        }

        public function edit($data = []){
            $connect = Database::connectDatabase();
            $this->maMon = $data["mamon"];
            $this->tenMon = $data["tenmon"];
            $this->stc = $data["stc"];
            $sql = "UPDATE  MonHoc
                    SET     tenmon = '$this->tenMon', stc = '$this->stc'
                    WHERE   mamon = '$this->maMon'";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
        }

        public function delete($data){
            $connect = Database::connectDatabase();
            $this->maMon = $data;
            $sql = "DELETE FROM MonHoc WHERE mamon = '$this->maMon'";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
        }

    }
?>