<?php require_once "Model.php";
class BukuModel extends Model {
    public function getBuku() {
        $query = "SELECT * FROM buku";
        $result = mysqli_query($this->getConnection(), $query);
        return $result;
    }

    public function getBukuById($id) {
        $query = "SELECT * FROM buku WHERE id = $id";
        $result = mysqli_query($this->getConnection(), $query);
        return $result;
    }

    public function insertBuku($nama, $judul, $tema, $email) {
        $query = "INSERT INTO buku (nama, judul, tema, email) VALUES ('$nama', '$judul', '$tema', '$email')";
        $result = mysqli_query($this->getConnection(), $query);
        return $result;
    }

    public function updateBuku($id, $nama, $judul, $tema, $email) {
        $query = "UPDATE buku SET nama='$nama', judul='$judul', tema='$tema', email='$email' WHERE id=$id";
        $result = mysqli_query($this->getConnection(), $query);
        return $result;
    }

    public function deleteBuku($id) {
        $query = "DELETE FROM buku WHERE id=$id";
        $result = mysqli_query($this->getConnection(), $query);
        return $result;
    }
}
?>