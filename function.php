<?php

function translate($transl,$dir){

  $dictionary = readCsv();
  $newWord = 'tokio nera';
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
      $newWord = 'tokio nera';
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
  fclose($open);
  //var_dump($dir); die();
  return $dictionary;
}

// function writeCsv(){
//
// }

function addW($addLt,$addEn)
{
  $dictionary=[
  'lt'=>$addLt,
  'en'=>$addEn
  ];
$a = fopen('Dictionary.csv', 'a');

fputcsv($a,[
  $dictionary['lt'],
  $dictionary['en']
]);



fclose($a);
 header('Location: index.php');

}



?>
