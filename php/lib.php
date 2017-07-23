<?php
function cekSesi(){
  session_start();
  if (!isset($_SESSION['user'])){
    header("location:index.php");
  }
}
function css($css){
  echo "<link rel='stylesheet' type='text/css' href='{$css}'";
}
function mobileFirst(){
  echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}
function cekUser(){
  include 'koneksi/koneksi.php';
  $username=$_POST['user'];
  $getTable=mysqli_query($koneksi,"SELECT * FROM polling WHERE nama='$username'");
  $getName=mysqli_fetch_assoc($getTable);
  if ($getName['stat']==0){
    if (mysqli_num_rows($getTable) > 0){
      session_start();
      $_SESSION['user']=$getName['nama_lengkap'];
      header("location:polling.php?a={$_SESSION['user']}");
    }else{
      echo "<br>Nama anda tidak terdaftar";

    }
  }else{
    echo "<br>Anda sudah memvoting, voting tidak boleh lebih dari satu kali :)";
  }
}
function pilih($no){
  include 'koneksi/koneksi.php';
  $getTableHasil=mysqli_query($koneksi,"SELECT * FROM hasil WHERE nama='$no'");
  $getValueHasil=mysqli_fetch_assoc($getTableHasil);
  $add=$getValueHasil['hasil'];
  $startAdding=++$add;
  if ($startAdding){
    $updateTableHasil=mysqli_query($koneksi,"UPDATE hasil SET hasil='$startAdding' WHERE nama='$no'");
    $updateValue=mysqli_query($koneksi,"UPDATE polling SET stat='1' WHERE nama_lengkap='{$_SESSION['user']}'");
    unset($_SESSION);
    session_destroy();
    header("location:index.php");
  }else{
    echo "Gagal".mysqli_error($koneksi);
  }
}
 ?>
