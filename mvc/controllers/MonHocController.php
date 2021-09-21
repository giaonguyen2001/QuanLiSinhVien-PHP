<?php
    class MonHocController extends Controller{
        public $monHocModel;

        public function __construct(){
            $this->monHocModel = $this->model("MonHocModel");
        }

        public function get(){
            $this->view("home",[
                "pages" => "MonHocView",
                "table" => $this->monHocModel->read()
            ]);
        }

        // Chuyen qua form khi nhan button
        public function ThemMonHocForm(){
            $this->view("home",[
                "pages" => "ThemMonHocForm"
            ]);
        }

        public function XoaMonHocForm(){
            $this->view("home",[
                "pages" => "XoaMonHocForm"
            ]);
        }

        public function SuaMonHocForm(){
            $this->view("home",[
                "pages" => "SuaMonHocForm"
            ]);
        }
        

        // function nhan du lieu nhap va truy suat vao model
        public function ThemMonHoc(){
            if(isset($_POST["them"])){
                $this->monHocModel->add([
                    "mamon" => $_POST["mamon"],
                    "tenmon" => $_POST["tenmon"],
                    "stc" => $_POST["stc"]
                ]);
            }
        }

        public function XoaMonHoc(){
            if(isset($_POST["xoa"])){
                $this->monHocModel->delete($_POST["mamon"]);
            }
        }

        public function SuaMonHoc(){
            if(isset($_POST["sua"])){
                $this->monHocModel->edit([
                    "mamon" => $_POST["mamon"],
                    "tenmon" => $_POST["tenmon"],
                    "stc" => $_POST["stc"]
                ]);
            }
        }
    }
?>