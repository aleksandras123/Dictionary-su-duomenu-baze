<?php

function translate($transl,$dir){

  $dictionary = readCsv();
  $newWord = 'Tokio nera';
  switch ($dir) {
    case 'lt':
      foreach ($dictionary as $row) {
        if($row['lt']==$transl){
          $newWord = $row['en'];

      }
}
      break;

      case 'en':
      foreach ($dictionary as $row) {
        if ($row['en']==$transl) {
          $newWord=$row['lt'];
        }
      }
  break;

    default:
      $newWord = 'Tokios nera';
  }
  return $newWord;
}

function readCsv()
{
  $open=fopen('Dictionary.csv', 'r');

  $dictionary = [];

  $i=0;

  while (($a = fgetcsv($open))!=false){
    $dictionary[]=[
      'lt'=>$a[0],
      'en'=>$a[1]
    ];
    $i++;

  }
  fclose($dictionary);
  //var_dump($dir); die();
  return $dictionary;
}

?>
