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

?>
<div class="box-header">
    <h3 class="box-title">Tambah Kejuaraan</h3>
</div>


 <form action="" method="POST">
 
 <input type="text" name="id_kejuaraan" class="form-control" value="<?php echo $IDbaru; ?>" readonly>
 <br />
 <input type="text" name="nama_kejuaraan" class="form-control"  placeholder="Nama Kejuaraan" >
 <br />
 <input type="text" name="tgl_kejuaraan" class="form-control" placeholder="Tanggal Kejuaraan">
 <br />
 <input type="text" name="Tempat" class="form-control" placeholder="Tempat">
 <br />
 <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
 <br />
 </form>

<?php
if(isset($_POST['simpan'])){
	$s=mysqli_query($kon, "insert into kejuaraan (id_kejuaraan,nama_kejuaraan,tgl_kejuaraan,Tempat) values ('$_POST[id_kejuaraan]','$_POST[nama_kejuaraan]','$_POST[tgl_kejuaraan]','$_POST[Tempat]')");
	
	if($s){
		echo "<script>alert('Disimpan'); window.open('index.php?a=kejuaraan&k=kejuaraan','_self');</script>";
	}
}

?>

