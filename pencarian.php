<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="background-image: url(bg.jpg);">
<header style="color: #E26488;">
</header>

<form action="pencarian.php" method="GET">
        <input type="text" name="cari">
        <input type="submit" value="Cari">
</form>
<?php 
    include "connection.php";
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<nav>
    <a href="dataAnggota.php">Kembali</a>|
</nav>
<br>
<table border="1" cellpadding="16" bgcolor="#F7AAC0">
	<tr>
        <th>No.</th>
		<th>NIM</th>
		<th width="130">NAMA</th>
        <th>JENIS KELAMIN</th>
        <th width="80">TGL LAHIR</th>
        <th>TELP/HP</th>
        <th>ALAMAT</th>
        <th>EMAIL</th>
        <th>HOBBY</th>
        <th>JURUSAN</th>
        <th>PHOTO</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($koneksi,"SELECT * FROM mhs where nim like '%$cari%'");				
	}else{
		$data = mysqli_query("SELECT * from mhs");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nim']; ?></td>
        <td><?php echo $d["nama"]; ?></td>
        <td><?php echo $d["gender"]; ?></td>
        <td><?php echo $d["tgllahir"]; ?></td>
        <td><?php echo $d["phone"]; ?></td>
        <td><?php echo $d["alamat"]; ?></td>
        <td><?php echo $d["email"]; ?></td>
        <td><?php echo $d["hobby"]; ?></td>
        <td><?php echo $d["jurusan"]; ?></td>
        <td><img src="img/<?php echo $d["photo"]; ?>" width="50%"></td>

	</tr>
	<?php ?>
</table>
</body>
</html>