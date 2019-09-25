
<?php
require '../helper/functions.php';
	
	$Flora = query("SELECT * FROM Flora_dan_Fauna_Langka");

	       
    if (isset($_GET['cari'])) {
    $keyword = $_GET['s'];

    $Flora = query("SELECT * FROM Flora_dan_Fauna_Langka WHERE 
        Nama LIKE '%$keyword%' OR
        Jenis LIKE '%$keyword%' OR 
        Asal LIKE '%$keyword%' OR 
        Ciri LIKE '%$keyword%' OR 
        Des LIKE '%$keyword%' OR 
        Gambar LIKE '%$keyword%' " );
} else {
    $Flora = query("SELECT * FROM Flora_dan_Fauna_Langka");
}	

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Flora dan Fauna Langka</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/navbar.css">
</head>
<style type="text/css">
	img {
		height: 100px;
		width: 100px;
	}
</style>
<body>
	<div class="header-blue">
            <nav class="navbar navbar-default navigation-clean-search">
                <div class="container">
                    <div class="navbar-header"><a class="navbar-brand navbar-link" href="../index.php">173040028</a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="active" role="presentation"><a href="#">RAFLY YUNANDI ALIANSYAH</a></li>
                           
                        </ul>
                        
                        <form class="navbar-form navbar-left" action="" method="GET">
                            <div class="form-group">
                                <label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"></i></label>
                                <input class="form-control search-field" type="text" name="s" id="s" class="Search" placeholder="Search.." autofocus autocomplete="off">
                                <button class="btn btn-default" type="submit" name="cari" id="cari">Cari</button>
                                <a href="tambah.php" class="btn btn-default">Tambah Data</a>
                            </div>
                        </form>
                        <p class="navbar-text navbar-right"> <a class="btn btn-default action-button" role="button" href="../index.php">Log Out</a></p>
                    </div>
                </div>
            </nav>
	<div class="ui header" align="center">
	<h1>Daftar Flora dan Fauna Langka</h1>
	</div>


	<table class="table" border="1">
		<tr>
			<td>id</td>
			<td>Opsi</td>
			<td>Gambar</td>
			<td>Nama</td>
			<td>Jenis</td>
			<td>Asal</td>
			<td>Ciri</td>
			<td>Deskripsi</td>
		</tr>
<?php if(empty($Flora)) : ?>
	<h1 align="center">DATA TIDAK DITEMUKAN</h1>
<?php else : ?>
<?php $i = 1; ?>
<?php foreach ($Flora as $key) : ?> 
	<tr>
		<td><?= $i ?></td>
		<td>
			
			<a class="btn btn-lg btn-primary btn-block" href="ubah.php?id=<?=$key['id']?>" 
             			>Ubah</a>
			<a class="btn btn-lg btn-warning btn-block" href="hapus.php?id=<?= $key['id'];?>" onclick="return confirm('Anda Yakin Ingin Mengapus Data ini?')">Hapus</a>
		</td>
		<td><img src="../assets/images/<?= $key["Gambar"]; ?>"></td>
		<td><?= $key['Nama']; ?> </td>
		<td><?= $key['Jenis']; ?></td>
		<td><?= $key['Asal']; ?></td>
		<td><?= $key['Ciri']; ?></td>
		<td><?= $key['Des']; ?></td>

	</tr>
<?php $i++; ?>
<?php endforeach ?>
<?php endif ?>
	</table>
	</div>
	</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>