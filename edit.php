

 <!DOCTYPE html>
<html>
    <body style="background-color: #4b5c77">
        <p style="font-size: 25px; color: white; margin-top: 50px; font-family: arial; text-align: center;">Form Pendataan Brawijaya International <br> Trend Center</p>
        
        <?php 

$file = "data.txt";
$data = file_get_contents($file);

$rowedit = $_GET['row'];

$baris = explode("[R]", $data);
for ($i=0; $i < count($baris)-1 ; $i++) { 
    if ($i == $rowedit) {
        $col = explode("|F|", $baris[$i]);
        echo "<div style='color: white; margin-left: 650px; margin-top: 50px;'>";
        echo '<form action="update.php?row='.$i.'" method="POST">
            Nama: <br><input type="text" 
                    name="namabaru" value='.$col[0].'><br><br>
            Email: <br><input type="email" 
                    name="emailbaru" value='.$col[1].'><br><br>
            Phone: <br><input type="tel" 
                    name="phonebaru" value='.$col[2].'><br><br>
            <input type="submit" value="Update!" onclick="msg()">
        </form>';
        echo "</div>";
    }
}

 ?>
    </body>
    <script>
function msg() {
    alert("Data Sudah Diupdate!");
}
</script>
</html>