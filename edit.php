<?php 
require_once("db.php");

if(isset($_POST["submit"])) {
  $nama = $_POST["nama"];
  $nim = $_POST["nim"];
  $jk = $_POST["jk"];
  $prodi = $_POST["prodi"];
  $fak = $_POST["fak"];
  $asal = $_POST["asal"];
  $motto = $_POST["motto"];

  $sql = "UPDATE mahasiswa SET nama='$nama', jk='$jk', prodi='$prodi', fak='$fak', asal='$asal', motto='$motto' WHERE nim=$nim";

  if(mysqli_query($conn, $sql)) {
    header("Location: list.php");
  }else {
    echo "Gagal Edit Data" . mysqli_error($conn);
  }
}else {
  header("Location: notfound.php");
}