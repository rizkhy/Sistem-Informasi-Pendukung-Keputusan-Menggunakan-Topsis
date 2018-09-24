<div class="box-header">
    <h3 class="box-title">Data Atlet</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Id Atlet</th>
<th>Nama Atlet</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
</tr>
</thead>
<tbody>
<?php
include ("koneksi.php");

$s=mysqli_query($kon, "select * from atlet order by id_atlet ASC");
while($d=mysqli_fetch_assoc($s)){
?>
<tr>
<td><?php echo $d['id_atlet']; ?></td>
<td><?php echo $d['nama_atlet']; ?></td>
<td><?php echo $d['tgl_lahir']; ?></td>
<td><?php echo $d['alamat']; ?></td>
<td><?php echo $d['jenis_kelamin']; ?></td>
<td>
<a href="?a=atlet&k=ubahk&id=<?php echo $d['id_atlet']; ?>" class="btn btn-warning">Ubah</a>
<a href="hapusatlet.php?id=<?php echo $d['id_atlet']; ?>" class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>