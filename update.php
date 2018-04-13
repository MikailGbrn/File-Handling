<?php 

$file = "data.txt";
$data = file_get_contents($file);

$nama = $_POST['namabaru'];
$email = $_POST['emailbaru'];
$phone = $_POST['phonebaru'];

$databaru = $nama . "|F|" .
			$email . "|F|" .
			$phone . "[R]";

$rowedit = $_GET['row'];
$baris = explode("[R]", $data);
for ($i=0; $i < count($baris)-1 ; $i++) { 
	$col = explode("|F|", $baris[$i]);
	if ($rowedit == $i){
		$gantibaris = $baris[$i] . "[R]";
		$databaru2 = str_replace($gantibaris , $databaru, $data);
	}
}
file_put_contents($file, $databaru2);

header('location:baca.php');

 ?>