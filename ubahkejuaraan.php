<?php

include ("koneksi.php");


$query = "SELECT max(id_kejuaraan) as idMaks FROM kejuaraan";
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
$s=mysqli_query($kon, "select * from kejuaraan where id_kejuaraan='$_GET[id]'");
$d=mysqli_fetch_assoc($s);


?>
<div class="box-header">
    <h3 class="box-title">Ubah Kejuaraan</h3>
</div>

<div class="box-body pad">
 <form action="" method="POST">
 
 <input type="text" name="id_kejuaraan" class="form-control" value="<?php echo $d['id_kejuaraan']; ?>" readonly>
 <br />
 <input type="text" name="nama_kejuaraan" class="form-control"  placeholder="Nama Kejuaraan" value="<?php echo $d['nama_kejuaraan']; ?>">
 <br />
 <input type="text" name="tgl_kejuaraan" class="form-control" placeholder="Tanggal Kejuaraan" value="<?php echo $d['tgl_kejuaraan']; ?>">
 <br />
 <input type="text" name="Tempat" class="form-control" placeholder="Tempat" value="<?php echo $d['Tempat']; ?>">
 <br />
 <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
 <br />
 </form>
</div>
<?php
if(isset($_POST['ubah'])){
	$s=mysqli_query($kon, "update kejuaraan set nama_kejuaraan='$_POST[nama_kejuaraan]', tgl_kejuaraan='$_POST[tgl_kejuaraan]', Tempat='$_POST[Tempat]' where id_kejuaraan='$_POST[id_kejuaraan]'");
	
	if($s){
		echo "<script>alert('Diubah'); window.open('index.php?a=kejuaraan&k=kejuaraan','_self');</script>";
	}
}

?>
