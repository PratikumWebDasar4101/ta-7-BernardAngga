<?php
require_once("dbserver.php");
$value = $_GET["cari"];
$sql = "SELECT * FROM mahasiswa WHERE nim like '%$value%'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Lihat Data</title>
</head>
<body>
  <table border="1">
    <tr>
      <td>
        <form action="cari.php" method="get">
          <input type="text" name="cari" placeholder="Cari NIM">
          <input type="submit" value="Cari">
        </form>
      </td>
      <td>
        <a href="Form.php">Registrasi</a>
      </td>
    </tr>
    <tr>
      <th>Nama</th>
      <th>NIM</th>
      <th>Aksi</th>
    </tr> 
    <?php if(mysqli_num_rows($result) > 0) : ?>
    <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td><?php echo $row["nama"] ?></td>
      <td><?php echo $row["nim"] ?></td>
      <td><a href="delete.php?nim=<?php echo $row['nim'] ?>">Hapus</a></td>
    </tr>
    <?php } endif ?>
  </table>
</body>
</html>



