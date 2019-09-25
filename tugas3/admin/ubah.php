<?php 

require '../helper/functions.php';


if (isset($_POST['ubah'])){
	if (ubah($_POST) > 0){
		echo "<script>
			alert('Data Berhasil Diubah');
			document.location.href = 'admin.php';
			</script>";
	} else {
		echo "<script>
			alert('Data Gagal Diubah');
			document.location.href = 'admin.php';
			</script>";
	}
}

?> 

<?php 
$id = $_GET['id'];
$key = query("SELECT * FROM Flora_dan_Fauna_Langka WHERE id = '$id' ")[0]; 

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
            		<h3 class="panel-title">UBAH DATA</h3>
        		</div>
          		<div class="panel-body">
            		<form accept-charset="UTF-8" role="form" class="login-form" method="POST" action="">
                   
                	<div class="form-group">
                		<label for="Nama">Nama : </label>
                		<input class="form-control"  type="hidden" name="id" value="<?php echo $key['id']; ?>">
						<input class="form-control" type="text" name="Nama" value="<?php echo $key['Nama'] ?>">
              		</div>
              		
              		<div class="form-group">
              			<label for="Gambar">Gambar : </label>	
              			<div class="form-group">
                		<input class="form-control" type="text" name="Gambar" value="<?php echo $key['Gambar'] ?>">
            		</div>

            		<div class="form-group">
              			<label for="Jenis">Jenis : </label>	
              			<div class="form-group">
                		<input class="form-control" type="text" name="Jenis" value="<?php echo $key['Jenis'] ?>">
            		</div>

            		<div class="form-group">
              			<label for="Asal">Asal : </label>	
              			<div class="form-group">
                		<input class="form-control" type="text" name="Asal" value="<?php echo $key['Asal'] ?>">
            		</div>

            		<div class="form-group">
              			<label for="Ciri">Ciri : </label>	
              			<div class="form-group">
                		<input class="form-control" type="text" name="Ciri" value="<?php echo $key['Ciri'] ?>">
            		</div>

            		<div class="form-group">
              			<label for="Des">Des : </label>	
              			<div class="form-group">
                		<input class="form-control" type="text" name="Des" value="<?php echo $key['Des'] ?>">
            		</div>
                  
                <button class="btn btn-lg btn-success btn-block" type="submit" name="ubah">Ubah</button>
				<a class="btn btn-lg btn-danger btn-block" href="admin.php">Kembali</a>
                
              </form>
              			</div>
         			 </div>
				</div>
			</div>
		</div>
	</div>
</div>


   </body>
</html>
