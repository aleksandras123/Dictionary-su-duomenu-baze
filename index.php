<?php

include 'function.php';

$transl=null;

if (array_key_exists('transl',$_GET)) {
  $transl = $_GET['transl'];
  $dir= $_GET['dir'];
  $newWord=translate($transl,$direction);
}

if(array_key_exists('addLt',$_GET)&& array_key_exists('addEn',$_GET))
{
  $addLt= $_GET['addLt'];
  $addEn= $_GET['addEn'];
  $message=addW($addLt,$addEn);
}

include 'view.php';

 ?>
