<!DOCTYPE html>
<html>
<head>
<title>JSON</title>
</head>
<body>
<?php
 // bentuk Array
 $array = array('id'=>1, 'nama'=>'FAJAR');
 //print_r($array);
 // makan akan menghasilkan : Array ( [id] => 1 [nama] => Mochamad Rohmat )

 // bentuk JSON dari variable $array
 $json = json_encode($array);
 //echo $json;
 // maka akan menghasilkan : {"id":1,"nama":"Mochamad Rohmat"}

 // jika format JSON mau di rubah lagi ke format Array maka menggunakan fungsi dari json_decode
 $array = json_decode($json, true);
 print_r($array['nama']);
 // maka akan menghasilkan : stdClass Object ( [id] => 1 [nama] => Mochamad Rohmat )
?>
</body>
</html>
