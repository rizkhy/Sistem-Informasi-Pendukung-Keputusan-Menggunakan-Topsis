<?php
include ("koneksi.php");
$s=mysqli_query($kon, "delete from atlet where id_atlet='$_GET[id]'");

if($s){
	echo "<script>window.open('index.php?a=atlet&k=atlet','_self');</script>";
}else{
 echo $a="delete from atlet where id_atlet='$_GET[id]'";
}

?>