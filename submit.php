<?php 
require_once("dbserever.php");

if(isset($_POST["submit"])) {
  $nama = $_POST["nama"];
  $nim = $_POST["nim"];
  $jk = $_POST["jk"];
  $prodi = $_POST["prodi"];
  $fak = $_POST["fklts"];
  $asal = $_POST["asal"];
  $motto = $_POST["motto"];

  $sql = "INSERT INTO mahasiswa VALUES('$nama', '$nim', '$jk', '$prodi', '$fklts', '$asal', '$motto')";

  if(mysqli_query($conn, $sql)) {

    header("Location: list.php?register=true");
  }else {
    echo "Gagal Input Data" . mysqli_error($conn);
  }
}else {
  header("Location: notfound.php");
}