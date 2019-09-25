<?php 

require '../helper/functions.php';

if (isset($_POST['tambah'])){
	if (tambah($_POST) > 0){
		echo "<script>
			alert('Data Berhasil Ditambahkan');
			document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
			alert('Data Gagal Ditambahkan');
			document.location.href = 'index.php';
			</script>";
	}
}

?> 

<!DOCTYPE html>
<html>
  <head>
    
    <title>Login Admin</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/css/navbar.css">
  </head>
  <body>


<div class="container">
	<div class="row">
    	<div class="col-md-9 col-md-offset-2">
        	<div class="panel panel-default">
          		<div class="panel-heading">
            		<h3 class="panel-title">TAMBAH DATA</h3>
        		</div>
          		<div class="panel-body">
            		<form accept-charset="UTF-8" role="form" class="login-form" method="POST" action="" enctype="multipart/form-data">
                   
                	<div class="form-group">
                		<label for="Nama">Nama : </label>
                		<input class="form-control" type="text" name="Nama" id="Nama">
              		</div>
              		
              		<div class="for<div class="form-group">
                		<label for="Jenis">Jenis : </label>
                		<input class="form-control" type="text" name="Jenis" id="Jenis">
              		</div>

              		<div class="form-group">
                		<label for="Asal">Asal : </label>
                		<input class="form-control" type="text" name="Asal" id="Asal">
              		</div>

              		<div class="form-group">
                		<label for="Ciri">Ciri : </label>
                		<input class="form-control" type="text" name="Ciri" id="Ciri">
              		</div>

              		<div class="form-group">
                		<label for="Des">Des : </label>
                		<input class="form-control" type="text" name="Des" id="Des">
              		</div>

              		<div class="form-group">
                		<label for="Gambar">Gambar : </label>
                		<input type="file" name="Gambar" id="Gambar">
              		</div>

                  
                <button class="btn btn-lg btn-success btn-block" type="submit" name="tambah">Tambah</button>
				<a class="btn btn-lg btn-danger btn-block" href="index.php">Kembali</a>
                
              </form>
              			</div>
         			 </div>
				</div>
			</div>
		</div>
	</div>
</div>

</form>
</div>


   </body>
</html>
