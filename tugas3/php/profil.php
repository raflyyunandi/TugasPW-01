<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profil Mahasiswa</title>
	<link rel="stylesheet" href="css/latihan3.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</style>
<body>

		<h2 align="center">Profil Flora dan Fauna Langka</h2>
	

<div class="container" align="center">
	<div class="card">
        <img class="card-img-top" style="width:18%" src="../assets/images/<?= $_GET["Gambar"];?>">
         	<div align="justify">
				<ul class="nav">
					<li class="active">
						<a>
						<h4>Nama :</h4>
							<?= $_GET['Nama'] ?> </a>
						</li>
						<li>
							<a>
							<h4>Jenis : </h4>
							<?= $_GET['Jenis'] ?> </a>
						</li>
						<li>
							<a>
							<h4>Asal : </h4>
							<?= $_GET['Asal'] ?>	 </a>
						</li>
						<li>
							<a>
							<h4>Ciri :</h4>
							<?= $_GET['Ciri'] ?> </a>
						</li>
						<li>
							<a>
							<h4>Deskripsi :</h4>
							<?= $_GET['Des'] ?></a>
						</li>
					</ul>
				</div>
			<a class="btn btn-primary" href="../index.php">Kembali</a>
    </div>
</div>



</body>
</html>