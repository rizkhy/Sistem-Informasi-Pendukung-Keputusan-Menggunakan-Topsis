<?php

include ("koneksi.php");


$query = "SELECT max(id_kriteria) as idMaks FROM kriteria";
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
    <h3 class="box-title">Tambah Kriteria</h3>
</div>


 <form action="" method="POST">
 
 <input type="text" name="id_kriteria" class="form-control" value="<?php echo $IDbaru; ?>" readonly>
 <br />
 <input type="text" name="nama_kriteria" class="form-control"  placeholder="Nama Kriteria" >
 <br />
 <input type="text" name="bobot" class="form-control" placeholder="Bobot">
 <br />
 <br />
 <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
 <br />
 </form>

<?php
if(isset($_POST['simpan'])){
	$s=mysqli_query($kon, "insert into kriteria (id_kriteria,nama_kriteria,bobot) values ('$_POST[id_kriteria]','$_POST[nama_kriteria]','$_POST[bobot]')");
	
	if($s){
		echo "<script>alert('Disimpan'); window.open('index.php?a=kriteria&k=kriteria','_self');</script>";
	}
}

?>

