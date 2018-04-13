

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #ffe8c1">

	  <p style="font-size: 25px; color: grey; margin-top: 50px; font-family: arial; text-align: center;">Data Peserta Brawijaya International <br> Trend Center</p>

	<p style="margin-left: 550px; margin-top: 50px;"><input type="button" value="<-- Kembali" onclick="location.href='form.html'">

	<?php

	echo "<div style='margin-left: 550px; margin-top: 50px;'>";

$file = "data.txt";
$data = file_get_contents($file);

$baris = explode("[R]", $data);
echo "<table border=1 bgcolor='white'>";
echo "<tr>";
echo "  <td>Nama</td><td>Email</td>";
echo "  <td>Phone</td><td>Action</td>";
echo "</tr>";
for($i =0; $i<count($baris)-1; $i++) {

    $col = explode("|F|", $baris[$i]);

    echo "<tr>";
    echo "  <td>" . $col[0] . "</td>";
    echo "  <td>" . $col[1] . "</td>";
    echo "  <td>" . $col[2] . "</td>";
    echo '  <td> <a href="edit.php?row='.$i.'">EDIT</a> </td>'; 
    echo '  <td> <a href="delete.php?row='.$i.'">X</a> </td>'; 
    echo "</tr>";
}
echo "</table>";
echo "</div>";
?>

</body>
</html>