<?php

include ("koneksi.php");


$query = "SELECT max(id_atlet) as idMaks FROM atlet";
$hasil = mysqli_query($kon, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['idMaks'];

//mengatur 6 karakter sebagai jumalh karakter yang tetap
//mengatur 3 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 2, 3);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "kr";
//%03s untuk mengatur 3 karakter di belakang 201353
$IDbaru = $char . sprintf("%03s", $noUrut);

//ambil data \
$s=mysqli_query($kon, "select * from atlet where id_atlet='$_GET[id]'");
$d=mysqli_fetch_assoc($s);


?>
<div class="box-header">
    <h3 class="box-title">Ubah Atlet</h3>
</div>

<div class="box-body pad">
 <form action="" method="POST">
 
 <input type="text" name="id_atlet" class="form-control" value="<?php echo $d['id_atlet']; ?>" readonly>
 <br />
 <input type="text" name="nama_atlet" class="form-control"  placeholder="Nama Atlet" value="<?php echo $d['nama_atlet']; ?>">
 <br />
 <input type="text" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $d['tgl_lahir']; ?>">
 <br />
 <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $d['alamat']; ?>">
 <br />
 <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" value="<?php echo $d['jenis_kelamin']; ?>">
 <br />
 <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
 <br />
 </form>
</div>
<?php
if(isset($_POST['ubah'])){
	$s=mysqli_query($kon, "update atlet set nama_atlet='$_POST[nama_atlet]', tgl_lahir='$_POST[tgl_lahir]', alamat='$_POST[alamat]', jenis_kelamin='$_POST[jenis_kelamin]' where id_atlet='$_POST[id_atlet]'");
	
	if($s){
		echo "<script>alert('Diubah'); window.open('index.php?a=atlet&k=atlet','_self');</script>";
	}
}

?>
