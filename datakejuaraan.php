<div class="box-header">
    <h3 class="box-title">Data Kejuaraan</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Id Kejuaraan</th>
<th>Nama Kejuaraan</th>
<th>Tanggal Kejuaraan</th>
<th>Tempat</th>
</tr>
</thead>
<tbody>
<?php
include ("koneksi.php");

$s=mysqli_query($kon, "select * from kejuaraan order by id_kejuaraan ASC");
while($d=mysqli_fetch_assoc($s)){
?>
<tr>
<td><?php echo $d['id_kejuaraan']; ?></td>
<td><?php echo $d['nama_kejuaraan']; ?></td>
<td><?php echo $d['tgl_kejuaraan']; ?></td>
<td><?php echo $d['Tempat']; ?></td>
<td>
<a href="?a=kejuaraan&k=ubahk&id=<?php echo $d['id_kejuaraan']; ?>" class="btn btn-warning">Ubah</a>
<a href="hapuskejuaraan.php?id=<?php echo $d['id_kejuaraan']; ?>" class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>