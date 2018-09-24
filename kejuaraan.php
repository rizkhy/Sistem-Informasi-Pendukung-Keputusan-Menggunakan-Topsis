
<h1>Kejuaraan</h1>
<ul class="nav nav-tabs">
  <?php
  if($_GET['k']=='kejuaraan'){
	$act1='class="active"';
	$act2='';
  }else if($_GET['k']=='tambah'){
	$act1='';
	$act2='class="active"';
  }else{
	$act1='';
	$act2='';
  }
  ?>
  <li <?php echo $act1; ?> ><a href="index.php?a=kejuaraan&k=kejuaraan">Data Kejuaraan</a></li>
  <li <?php echo $act2; ?>><a href="index.php?a=kejuaraan&k=tambah">Tambah Kejuaraan</a></li>
  
  
</ul>

<?php

if(@$_GET['a']=='kejuaraan' and @$_GET['k']=='kejuaraan'){
	include ("datakejuaraan.php");
 }else if(@$_GET['k']=='tambah'){
	include ("tambahkejuaraan.php");
 }else if(@$_GET['k']=='ubahk'){
	include ("ubahkejuaraan.php");
 }
 ?>
