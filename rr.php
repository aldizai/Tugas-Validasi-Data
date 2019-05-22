<html>
<body>
<?php
$nama = $NIM = "";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) {
$nama = $_POST["nama"];
$NIM = $_POST["NIM"];
}
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Nama: <input type="text" name="nama"><br>
NIM: <input type="number" name="NIM"><br>
<input type="submit">
</form>
<?php
if(empty($nama)){
echo "Data Harus diisi";
}
else if(empty($NIM)){
echo "NIM harus diisi";
}

else if(strlen($_POST["NIM"])!=10){
  echo "Angka NIM harus berjumlah 10";
}
else if(!empty($nama) && !empty($NIM) ){
echo "<h2>Welcome</h2>";
echo $nama . "<br>" . $NIM;
}


?>

</body>
</html>