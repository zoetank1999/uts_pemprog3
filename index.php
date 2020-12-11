<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PENGAJUAN CUTI</title>
  </head>
  <body>
    <h1><center>MASUKAN  DATA</center></h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
<?php
include "koneksi.php";
if (isset ($_POST['save'])) {
	$NIP=$_POST['NIP'];
    $nama=$_POST['nama'];
    $jabatan=$_POST['jabatan'];
	$bagian=$_POST['bagian'];
	$pengajuan_cuti=$_POST['pengajuan_cuti'];
	$sisa_cuti=$_POST['sisa_cuti'];
$query=mysqli_query($koneksi, "insert into cuti_karyawan (NIP,nama,jabatan,bagian,pengajuan_cuti,sisa_cuti)
value('$NIP','$nama','$jabatan','$bagian','$pengajuan_cuti','$sisa_cuti')");
if ($query){
    header("location:tampil_karyawan.php");
}else{
    echo mysqli_eror();
}
}
?>
<form method="POST" action="">
<table class="table table-dark">
	<tr>
        <td>NIP</td>
	<td><input class="form-control" placeholder="masukan NIP" aria-label="default input example" type="varchar" name="NIP"></td>
    </tr>
    <tr>
        <td>Nama</td>
	<td><input class="form-control" placeholder="masukan nama" aria-label="default input example" type="varchar" name="nama"></td>
    </tr>
	<tr>
        <td>Jabatan</td>
	<td><input class="form-control" placeholder="masukan jabatan" aria-label="default input example" type="varchar" name="jabatan"></td>
    </tr>
	<tr>
        <td>Bagian</td>
	<td><input class="form-control" placeholder="masukan bagian" aria-label="default input example" type="varchar" name="bagian"></td>
    </tr>
	<tr>
        <td>Pengajuan Cuti</td>
	<td><input class="form-control" placeholder="masukan pengajuan cuti" aria-label="default input example" type="int" name="pengajuan_cuti"></td>
    </tr>
	<tr>
        <td>Sisa Cuti</td>
	<td><input class="form-control" placeholder="masukan sisa cuti" aria-label="default input example" type="int" name="sisa_cuti"></td>
    </tr>
	<tr>
        <td><input class="btn btn-primary" type="submit" name="save" value="simpan"></td> 
		<td><a class="btn btn-primary" href="tampil_karyawan.php" role="button">menampilkan data</a></td>
	</tr>


</table>
</form>
</html>