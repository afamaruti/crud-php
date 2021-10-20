
<!DOCTYPE html>
<html>
<head>
    <title>EDIT DATA</title></head>
<body style="background-image: url(bg.jpg);">
        <table width="30%">
        <form action="" method="POST">
        <tr align="center">
            <td colspan="2"><b>EDIT DATA</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" required ></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"  size="30"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
            <input type="radio" name="gender" value="L">Laki-laki
            <input type="radio" name="gender" value="P">Perempuan<br>
            </td>
        </tr>
        <tr>
            <td>Tgl Lahir</td>
            <td><input type="date" name="tgllahir" size="20"></td>
        </tr>
        <tr>
            <td>Telp/HP</td>
            <td><input type="text" name="phone" size="20"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>
            <textarea rows="3" cols="25" name="alamat"></textarea>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" size="20"></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>
                <input type="checkbox" name="hobby" value="Berenang">Berenang
                <input type="checkbox" name="hobby" value="Bermain Futsal">Bermain Futsal<br>
                <input type="checkbox" name="hobby" value="Membaca">Membaca
                <input type="checkbox" name="hobby" value="Menulis">Menulis<br>
                <input type="checkbox" name="hobby" value="Mengoperasikan Komputer">Mengoperasikan Komputer<br>
                <input type="checkbox" name="hobby" value="Memasak">Memasak<br>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
                <td>
                <select size="1" name="jurusan">
                <option >Pilih Jurusan</option>
                <option >Administrasi Bisnis Otomotif</option>
                <option >Sistem Informasi Industri Otomotif</option>
                <option >Teknik Industri Otomotif</option>
                <option >Teknik Rekayasa Otomotif</option>
                <option >Teknik Kimia Polimer</option>
                </select>
                </td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>
            <input type="text" name="photo" value="Nama File">
            </td>
        </tr>
        <tr align="center">
            <td colspan="2">
            <input type="submit" name="simpan" value="Update">
            <a href="dataAnggota.php"><input type="button" value="Batal"></a>
            </td>
        </tr>
        </form>
        </table>
</body>
</html>