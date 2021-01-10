<?PHP
if (isset($_POST['Submit'])) {
$error = array();
if (empty($_POST['nama'])) {
$error[] = 'Nama Tidak Boleh Kosong..!';
} else {
$nama = addslashes(trim(strip_tags($_POST['nama']))); }
if (empty($_POST['umur'])) {
$error[] = 'Umur Tidak Boleh Kosong..!';
} else { $umur =strip_tags(trim($_POST['umur']));}
if (empty($error)) {
echo "Nama : ".$nama."";
echo "<br>Umur : ".$umur."";
}
else{echo'<div class="alert">';
foreach ($error as $key => $values) {
echo '<li>'.$values.'</li>';
}
echo'</div>';
}
}
?>