
<h1>Nilai Matriks</h1>
<ul class="nav nav-tabs">
  
  <li class="active" ><a href="index.php?a=kriteria&k=kriteria">Isi Nilai Matriks</a></li>
  
  
  
</ul>
<div class="box-header">
    <h3 class="box-title">Tambah Nilai Matriks</h3>
</div>


<form method="POST" action="">
<div class="form-group">
							<label class="control-label col-lg-2">Id Atelt</label>
							<div class="col-lg-4">
								<select name="id_alt" class="form-control">
								<?php
								include ("koneksi.php");
								$s=mysqli_query($kon, "select * from atlet");
								while($d=mysqli_fetch_assoc($s)){
								?>
								
									<option value="<?php echo $d['id_atlet'] ?>"><?php echo $d['id_atlet']." | ".$d['nama_atlet'] ?></option>
								<?php
								}
								?>
								</select>
							
								
							</div>
							
						</div>
						<br />
<hr />

<div class="form-group">
								<?php
								$i=1;
								$alt=mysqli_query($kon, "select * from kriteria");
						//hitung jml kriteria		
						$jml_krit=mysqli_num_rows($alt);		
								
								while($dalt=mysqli_fetch_assoc($alt)){
								?>
						
	<table>
		<tr>
		<td width="200">
							<label ><?php echo $dalt['nama_kriteria']; ?></label>
							<input type="hidden" name="id_krite<?php echo $i; ?>" value="<?php echo $dalt['id_kriteria']; ?>" />
		</td>					
							<div>
		<td>					
							<select class="form-control" name="nilai<?php echo $i; ?>">
							<option value="1">Sangat Kurang Baik</option>
							<option value="2">Kurang Baik</option>
							<option value="3">Cukup</option>
							<option value="4">Baik</option>
							<option value="5">Sangat Baik</option>
							</select>
		</td>
		</tr>	
								
								<?php
								$i++;
								}
								?>
		<tr>
		<td colspan="2" align="center">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		</td>
		</tr>
</table>		

							</div>
							
						</div>
						
						
</form>						
<?php
$b=mysqli_query($kon, "select * from kriteria");
$c=mysqli_fetch_assoc($b);



if(isset($_POST['simpan'])){
 
$o=1;

//cek id alternatif
$id_alt=$_POST['id_alt'];
$cek=mysqli_query($kon, "select * from atlet where id_atlet='$id_alt'");
$cek_l=mysqli_num_rows($cek);
if($cek_l>0){
	$del=mysqli_query($kon, "delete from nilai_matrik where id_atlet='$id_alt'");
}

for($n=1;$n<=$jml_krit;$n++){
	$id_k=$_POST['id_krite'.$o];
	 $nilai_k=$_POST['nilai'.$o];
	
	$sql="insert into nilai_matrik (id_atlet,id_kriteria,nilai) values('$_POST[id_alt]','$id_k','$nilai_k')";
	// echo $sql;
	$m=mysqli_query($kon, $sql);
	
	$o++;
}

}
?>			

			