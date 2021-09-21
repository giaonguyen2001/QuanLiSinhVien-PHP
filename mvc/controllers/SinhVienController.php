<?php
    class SinhVienController extends Controller{
        public $sinhVienModel;

        public function __construct(){
            $this->sinhVienModel = $this->model("SinhVienModel");
        }

        public function get(){
            // $sinhVienModel = $this->model("SinhVienModel");
            $this->view("home",[
                "pages" => "SinhVienView",
                "table" => $this->sinhVienModel->read()
            ]);
        }

        public function ThemSinhVienForm(){
            $this->view("home",[
                "pages" => "ThemSinhVienForm"
            ]);
        }

        public function XoaSinhVienForm(){
            $this->view("home",[
                "pages" => "XoaSinhVienForm"
            ]);
        }

        public function SuaSinhVienForm(){
            $this->view("home",[
                "pages" => "SuaSinhVienForm"
            ]);
        }

        public function ThemSinhVien(){
            if(isset($_POST["them"])){
                $this->sinhVienModel->add([
                    "masv" => $_POST["masv"],
                    "hoten" => $_POST["hoten"],
                    "sdt" => $_POST["sdt"],
                    "diachi" => $_POST["diachi"]
                ]);
            }
        }

        public function XoaSinhVien(){
            if(isset($_POST["xoa"])){
                $this->sinhVienModel->delete($_POST["masv"]);
            }
        }
        public function SuaSinhVien(){
            if(isset($_POST["sua"])){
                $this->sinhVienModel->edit([
                    "masv" => $_POST["masv"],
                    "hoten" => $_POST["hoten"],
                    "sdt" => $_POST["sdt"],
                    "diachi" => $_POST["diachi"]
                ]);
            }
        }

    }
?>