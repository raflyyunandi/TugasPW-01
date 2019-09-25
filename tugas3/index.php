
<?php 
                
require 'helper/functions.php';
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
    <link rel="stylesheet" href="assets/css/navbar.css">
</head>
<style type="text/css">


</style>
<body >


<div class="header-blue">
    <nav class="navbar navbar-default navigation-clean-search">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="../index.php">173040028</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
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
                            <a href="admin/registrasi.php" class="btn btn-default">Registrasi</a>
                        </div>
                    </form>
                <p class="navbar-text navbar-right"> <a class="btn btn-default action-button" role="button" href="admin/login.php">Sign Up</a></p>
            </div>
        </div>
    </nav>
</div>

<header class="text-white">
    <div class="container text-center">
        <h1>Daftar Flora dan Fauna Langka</h1>
    </div>
</header>


<?php if(empty($Flora)) : ?>
	<h1 align="center">DATA TIDAK DITEMUKAN</h1>
<?php else : ?>


<?php foreach ($Flora as $mhs ) : ?> 
<div class="container wrap">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-4 col-md-6 col-lg-7">
                    <img src="assets/images/<?= $mhs["Gambar"]; ?>">
                    </div>
		              <div class="col-sm-8 col-md-6 col-lg-5">		
			             <a  class="header" href="php/profil.php?img=<?= $mhs['Nama'] ?>&
					       Nama=<?= $mhs["Nama"]; ?>&
             			    Asal=<?= $mhs["Asal"]; ?>&
             			    Jenis=<?= $mhs["Jenis"]; ?>&
             			    Ciri=<?= $mhs["Ciri"]; ?>&
             			    Des=<?= $mhs["Des"]; ?>&
             			    Gambar=<?= $mhs["Gambar"]; ?>" >
                            <h3><?php echo $mhs['Nama'] ?></h3></a>
                            <hr><h4>Tempat Asal : </h4>
             			 <i class="glyphicon glyphicon-globe"></i> <?php echo $mhs['Asal'] ?></a>
			         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>
</div>
	<?php endforeach ?>
	<?php endif ?>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
