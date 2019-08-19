<?php 
	include 'koneksi.php';
	$id=$_GET['id'];
	$sql_vote=$koneksi->query("UPDATE tb_list SET suara=suara+1 WHERE id='$id' ")or die(mysqli_error($koneksi));
	$ambil=$koneksi->query("SELECT*FROM tb_list WHERE id='$id' ");
	$perlist=$ambil->fetch_assoc();
			
		if ($sql_vote) {
			echo "<script>
						alert('Vote Success');
						location='index.php';
				</script>";
		}
 ?>