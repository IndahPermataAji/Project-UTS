<?php
include "koneksi.php";

$id = $_GET['id'];

$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$jumlah_ep = $_POST['jumlah_ep'];
$genre = $_POST['genre'];
$negara = $_POST['negara'];

if(isset($_POST['ubah_foto'])){ 

	$foto = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name'];

	$fotobaru = date('dmYHis').$foto;

	$path = "../images/".$fotobaru;

$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ 

	if($ukuran_file <= 1000000){ 
  
	if(move_uploaded_file($tmp, $path)){ 
		$query = "SELECT * FROM complete WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); 
		$data = mysqli_fetch_array($sql); 

		if(is_file("../images/".$data['gambar'])) 
			unlink("../images/".$data['gambar']); 
			
		$query = "UPDATE complete SET judul='".$judul."', tahun='".$tahun."', jumlah_ep='".$jumlah_ep."', genre='".$genre."', negara='".$negara."',gambar='".$fotobaru."' WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); 

		if($sql){ 
			header("location: index.php"); 
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		
		}
	}else{
		echo "Maaf, Gambar gagal untuk diupload.";
	
	}
}else{
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    
  }
}else{
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
}
}
?>
