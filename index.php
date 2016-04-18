<?PHP
$array = array(
    "nama" => "Rizal",
    "jenis_kelamin" => "Pria",
    "blog" => "http://wwdq.blogspot.com",
    "facebook" => "fb.com/riloaw.us",
    "twitter" => "twitter.com/riloaw"
    );
 $encode = json_encode($array);
 //tampilkan hasil encode
 echo "ini hasil json_encode 
";
 echo $encode;
 echo "
 
";
  
 $decode = json_decode($encode, true);
 
 echo "ini contoh yang sudah di decode menjadi array
" . $decode['nama'];
?>