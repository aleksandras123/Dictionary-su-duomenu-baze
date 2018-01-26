<?php



include 'function.php';



$transl=null;
if (array_key_exists('transl',$_GET)) {
  $transl = $_GET['transl'];
  $dir= $_GET['dir'];
  $newWord=translate($transl,$direction);
}
include 'view.php';

 ?>
