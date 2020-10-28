<?php
require_once('koneksi.php');
try {
	$sql = "DELETE FROM ongoing WHERE id=".$_GET['id'];
	$connect->query($sql);
} catch (Exception $e) {
	echo $e;
	die();
}
  echo "<script>
	alert('Data berhasil di hapus');
	window.location.href='index.php?page=crud/index';
	</script>";
?>