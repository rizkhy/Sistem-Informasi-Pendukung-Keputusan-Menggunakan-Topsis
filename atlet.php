
<h1>Atlet</h1>
<ul class="nav nav-tabs">
  <?php
  if($_GET['k']=='atlet'){
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
  <li <?php echo $act1; ?> ><a href="index.php?a=atlet&k=atlet">Data Atlet</a></li>
  <li <?php echo $act2; ?>><a href="index.php?a=atlet&k=tambah">Tambah Atlet</a></li>
  
  
</ul>

<?php

if(@$_GET['a']=='atlet' and @$_GET['k']=='atlet'){
	include ("dataatlet.php");
 }else if(@$_GET['k']=='tambah'){
	include ("tambahatlet.php");
 }else if(@$_GET['k']=='ubahk'){
	include ("ubahatlet.php");
 }
 ?>
