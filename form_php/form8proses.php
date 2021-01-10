<?php
if ($_POST['tipe'] == 'film' && $_POST['tipe_film'] == '') {
header('Location: form3.php');
}
?>
<html>
<head>
<title> <?php echo $_POST['submit'] . ' ' . $_POST['tipe'] . ': ' . $_POST['nama']; ?></title>
</head>
<body>
<?php
if (isset($_POST['debug'])) {
echo '<pre>';
print_r($_POST);
echo '</pre>';
}
$nama = ucfirst($_POST['nama']);
if ($_POST['tipe'] == 'film')
{
$foo = $_POST['tipe_film'] . ' ' . $_POST['tipe'];
} else {
$foo = $_POST['tipe'];
}
echo '<p> Anda sedang ' . $_POST['submit'];
echo ($_POST['submit'] == 'Cari') ? ' tentang ' : '';
echo 'seorang/sebuah ' . $foo . ' bernama ' . $nama . '</p>';
?>
</body>
</html>