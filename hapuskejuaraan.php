<?php
include ("koneksi.php");
$s=mysqli_query($kon, "delete from kejuaraan where id_kejuaraan='$_GET[id]'");

if($s){
	echo "<script>window.open('index.php?a=kejuaraan&k=kejuaraan','_self');</script>";
}else{
 echo $a="delete from kejuaraan where id_kejuaraan='$_GET[id]'";
}

?>