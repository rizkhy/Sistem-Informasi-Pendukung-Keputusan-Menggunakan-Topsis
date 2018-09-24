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

?>
<div class="box-header">
    <h3 class="box-title">Tambah Atlet</h3>
</div>


 <form action="" method="POST">
 
 <input type="text" name="id_atlet" class="form-control" value="<?php echo $IDbaru; ?>" readonly>
 <br />
 <input type="text" name="nama_atlet" class="form-control"  placeholder="Nama Atlet" >
 <br />
 <input type="text" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
 <br />
 <input type="text" name="alamat" class="form-control" placeholder="Alamat">
 <br />
 <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
 <br />
 <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
 <br />
 </form>

<?php
if(isset($_POST['simpan'])){
	$s=mysqli_query($kon, "insert into atlet (id_atlet,nama_atlet,tgl_lahir,alamat,jenis_kelamin) values ('$_POST[id_atlet]','$_POST[nama_atlet]','$_POST[tgl_lahir]','$_POST[alamat]','$_POST[jenis_kelamin]')");
	
	if($s){
		echo "<script>alert('Disimpan'); window.open('index.php?a=atlet&k=atlet','_self');</script>";
	}
}

?>

