<!DOCTYPE html>
<html lang="en">
<head>
  <title>PENILAIAN DAN PERHITUNGAN SELEKSI ATLET</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SISTEM PENDUKUNG KEPUTUSAN PENILAIAN SELEKSI ATLET UKM TAEKWONDO </a>
    </div>
	
	<!--
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
	-->
	
	
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
 <?php
if(@$_GET['a']=='kriteria'){
	$active1='class="active"';
	$active2='';
	$active3='';
	$active4='';
	$active5='';
}else if(@$_GET['a']=='atlet'){
	$active1='';
	$active2='class="active"';
	$active3='';
	$active4='';
	$active5='';
}else if(@$_GET['a']=='kejuaraan'){
	$active1='';
	$active2='';
	$active3='class="active"';
	$active4='';
	$active5='';
}else if(@$_GET['a']=='nilaialternatif'){
	$active1='';
	$active2='';
	$active3='';
	$active4='class="active"';
	$active5='';
}else if(@$_GET['a']=='hasiltopsis'){
	$active1='';
	$active2='';
	$active3='';
	$active4='';
	$active5='class="active"';
}else{
	$active1='';
	$active2='';
	$active3='';
	$active4='';
	$active5='';
}	

?> 
  
<!-- TAB KIRI -->
<div class="col-sm-2">
<ul class="nav nav-pills nav-stacked">
  <li <?php echo $active1 ?>><a href="?a=kriteria&k=kriteria" >Kriteria</a></li>
  <li <?php echo $active2 ?>><a href="?a=atlet&k=atlet" >Atlet</a></li>
  <li <?php echo $active3 ?>><a href="?a=kejuaraan&k=kejuaraan" >Kejuaraan</a></li>
  <li <?php echo $active4 ?>><a href="?a=nilaialternatif" >Alternatif</a></li>
  <li <?php echo $active5 ?>><a href="?a=hasiltopsis&k=nilai_matriks">Hasil Topsis</a></li>
</ul>  
</div>
<!-- /TAB KIRI -->  
  
  

  <div class="col-sm-10">
 <?php
 
 if(@$_GET['a']=='kriteria'){
	include ("kriteria.php");
 }else if(@$_GET['a']=='atlet'){
	include ("atlet.php");
 }else if(@$_GET['a']=='kejuaraan'){
	include ("kejuaraan.php");
 }else if(@$_GET['a']=='nilaialternatif'){
	include ("nilaialternatif.php");
 }else if(@$_GET['a']=='hasiltopsis'){
	include ("hasiltopsis.php");
 }
 
 
 
 
 
 
 

 ?>

 
 
</div>


</body>
<?php include "footer.php"; ?>
</html>
