<?php require_once('header.php'); ?>

<main>
Selamat datang di sekolah koding,tempat 
belajar programming online.

<h2>Implode dan Explode</h2>

<?php 
//implde(separator,array)
$perkerjaan = ["programmer","designer","manager"];
echo implode(" ",$perkerjaan);

echo "<br>";

$pelajaran = "html css javascript php";
print_r(explode(" ",$pelajaran) );

 ?>
 
 <h2>fungsi data</h2>
 
 <?php
  echo date('d_M_Y');
 ?>
 
  <h2>Trim dan Strip Tags</h2>
  
  <?php
  $text = "ini adalah input user";
  
  echo "sebelum".$text."disini";
  echo "<br>";
  echo "sudah".trim($text)."disini";
  echo"<br>";
  
  $text2 = "<script>alert('halo semuanya!')</scripat>";
  $text3 = "<br> Halo </b> semuanya";
  
  echo strip_tags($text3, '<br>');
  ?>
  
  
  
  
  
 
 
</main>

<?php require_once('footer.php'); ?>

