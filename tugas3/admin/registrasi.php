<?php 

require '../helper/functions.php';

if(isset($_POST['registrasi'])){

 if(registrasi($_POST)>0){
 	echo "<script>
 		alert('User baru ditambahkan!');
 		</script>"	;
 } else {
 	// echo mysqli_error($conn);
 }

	}
?>

<!DOCTYPE html>
<html>
  <head>
    
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="../assets/css/navbar.css">
  </head>
  <body>


<div class="container">
	<div class="row">
    	<div class="col-md-9 col-md-offset-2">
        	<div class="panel panel-default">
          		<div class="panel-heading">
            		<h3 class="panel-title">REGISTRASI ADMIN</h3>
        		</div>
          		<div class="panel-body">
            		<form accept-charset="UTF-8" role="form" class="login-form" method="POST" action="">
                   
                	<div class="form-group">
                		<label for="username">Username : </label>
                		<input class="form-control" type="text" name="username" id="username">
              		</div>

              		<div class="form-group">
                		<label for="password">Password : </label>
                		<input class="form-control" type="password" name="password" id="password">
              		</div>

              		<div class="form-group">
                		<label for="password2">Konfirmasi Password : </label>
                		<input class="form-control" type="password" name="password2" id="password2">
              		</div>
              		
                  
                <button class="btn btn-lg btn-success btn-block" type="submit" name="registrasi">Tambah</button>
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