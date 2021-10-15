<?php
    include "connection.php";

        $sql="SELECT * FROM mhs";
        $ambil=mysqli_query($koneksi, $sql);
?>

<!doctype html>
<html>
    <head>
        <title>DATA ANGGOTA</title>
    </head>
<body style="background-image: url(bg.jpg);">
    <nav>
        <a href="index.php">Home</a>  |
        <a href="form.php">Daftar</a>
    </nav>
    <form action="pencarian.php" method="GET">
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form>

    <table border="1" cellpadding="16" align="center" bgcolor="white"> 
    <form action="">
      <tr  bgcolor="pink">
          <th>NIM</th>
          <th>NAMA</th>
          <th>JENIS KELAMIN</th>
          <th>TGL LAHIR</th>
          <th>TELP/HP</th>
          <th>ALAMAT</th>
          <th>EMAIL</th>
          <th>HOBBY</th>
          <th>JURUSAN</th>
          <th>PHOTO</th>
          <th>ACTION</th>
      </tr>  
      <?php while ($row = mysqli_fetch_array($ambil)): ?>
      <tr>
        <td><?php echo $row["nim"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td><?php echo $row["tgllahir"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["alamat"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["hobby"]; ?></td>
        <td><?php echo $row["jurusan"]; ?></td>
        <td><img src="img/<?php echo $row["photo"]; ?>" width="50%"></td>
        <td>
            <a href="edit.php?nim=<?= $row['nim']; ?>">Edit</a> | 
            <a href="hapus.php?nim=<?= $row['nim']; ?>" onclick="return confirm('Yakin akan dihapus?');">Hapus</a></td> 
        </tr>
    <?php endwhile;?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </form>
</table>
</body>
</html>