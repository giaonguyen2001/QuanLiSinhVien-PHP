<?php
    class DiemController extends Controller{
        public $diemModel;

        public function __construct(){
            $this->diemModel = $this->model("DiemModel");
        }

        public function get(){
            $this->view("home",[
                "pages" => "DiemView",
                "table" => $this->diemModel->read()
            ]);
        }

        public function NhapDiemForm(){
            $this->view("home",[
                "pages" => "NhapDiemForm"
            ]);
        }

        public function NhapDiem(){
            if(isset($_POST["them"])){
                $this->diemModel->add([
                    "masv" => $_POST["masv"],
                    "mamon" => $_POST["mamon"],
                    "diem" => $_POST["diem"],
                    "lanthi" => $_POST["lanthi"]
                ]);
            }
        }

        public function SuaDiemForm(){
            $this->view("home",[
                "pages" => "SuaDiemForm"
            ]);
        }

        public function SuaDiem(){
            if(isset($_POST["sua"])){
                $this->diemModel->edit([
                    "masv" => $_POST["masv"],
                    "mamon" => $_POST["mamon"],
                    "diem" => $_POST["diem"],
                    "lanthi" => $_POST["lanthi"]
                ]);
            }
        }

        public function XoaDiemForm(){
            $this->view("home",[
                "pages" => "XoaDiemForm"
            ]);
        }

        public function XoaDiem(){
            if(isset($_POST["xoa"])){
                $this->diemModel->delete([
                    "masv" => $_POST["masv"],
                    "mamon" => $_POST["mamon"]
                ]);
            }
        }
    }
?>