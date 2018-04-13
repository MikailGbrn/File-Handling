<?php

$file = "data.txt";

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$data = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

header("refresh:1; url= form.html");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #4b5c77">
<p style="margin-left: 550px; margin-top: 250px; font-size: 50px; color: white; font-family: arial;">Data Sudah Disimpan!</p>
</body>
</html>