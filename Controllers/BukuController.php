<?php require_once "../Models/BukuModel.php";

class BukuController {
    private $model;

    public function __construct() {
        $this->model = new BukuModel();
    }

    public function getAllBuku() {
        return $this->model->getBuku();
    }

    public function getBukuId($id) {
        return $this->model->getBukuById($id);
    }

    public function addBuku($nama, $judul, $tema, $email) {
        $action =  $this->model->insertBuku($nama, $judul, $tema, $email);
        if ($action) {
            return $this->getAllBuku();
            echo '<script>window.location.href = window.location.href;</script>';
        } else {
            echo "Error: " . mysqli_error($this->model->getConnection());
        }
    }

    public function updateBuku($id, $nama, $judul, $tema, $email) {
        return $this->model->updateBuku($id, $nama, $judul, $tema, $email);
    }

    public function deleteBuku($id) {
        return $this->model->deleteBuku($id);
    }

    public function processForm() {
        if ($_POST["id"] ?? '') {
            $this->updateBuku($_POST["id"], $_POST['nama'], $_POST["judul"], $_POST["tema"], $_POST["email"]);
        } else {
            return $this->addBuku($_POST['nama'], $_POST["judul"], $_POST["tema"], $_POST["email"]);
        }
    }
}
?>