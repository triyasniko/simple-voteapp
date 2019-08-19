<!DOCTYPE html>
<?php 
	include 'koneksi.php';
 ?>
<html lang="en">
<head>
  <title>Vote-app</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <style type="text/css">
  	.card{
  		min-height: 350px;
  	}
  </style>
</head>
<body>
	<div>
		<h4 class="text-center">Vote Your Anime</h4>
	</div>
	<div class="container">
		<form method="post">
			<div class="row">
				<?php 
					$ambil=$koneksi->query("SELECT*FROM tb_list");
					while($perlist=$ambil->fetch_assoc()){
				?>
				<div class="col my-2">
					<div class="card" style="width:300px">
					  <img class="card-img-top" src="assets/img/<?php echo $perlist['foto_kandidat']; ?>" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title"><?php echo $perlist['nama']; ?></h4>
					    <p class="card-text"><?php echo $perlist['deskripsi']; ?></p>
					    <a href="vote_proses.php?id=<?php echo $perlist['id']; ?>" name="vote" class="btn btn-primary" value="Vote">Vote</a>
					  </div>
					</div>
				</div>
				<?php 
				 	}
				?>

			</div>
		</form>
		<br>
		<center><a href="index.php?results" class="btn btn-info">Result</a></center>
		<br>
		<?php 
			if(isset($_GET["results"])){
				$sql="SELECT*FROM tb_list ORDER BY id ASC";
				$result=$koneksi->query($sql);

				if ($result->num_rows>0) {
					$sum=$koneksi->query("SELECT SUM(suara)AS value_sum FROM tb_list");
					$rowSum=$sum->fetch_assoc();
					$sumResult=$rowSum['value_sum'];
					?>
					<div class="row">
					<?php
					while ($row=$result->fetch_assoc()) {
						$presentase=round(($row['suara'] / $sumResult) *100,2);
						?>
						<div class="col-md-4">
							<div class="alert alert-info">
								<?php echo "Judul :".$row["nama"]."( ".$row["suara"]." / ".$presentase."% )<br>";  ?>
							</div>
						</div>
						<?php
					}
					?>
					</div>
					<?php
				}
			}
		?>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
