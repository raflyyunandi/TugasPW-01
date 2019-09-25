<?php 

$conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
mysqli_select_db($conn, "pw_173040028") or die("Database salah");


  if(isset($_COOKIE['id']) && isset($_COOKIE['password'])){
    $id = $_COOKIE['id'];
    $username = $_COOKIE['username'];

    $results = mysqli_query($conn, "SELECT username FROM user WHERE id=$id");
    var_dump($results);
    $row = mysqli_fetch_assoc($results);

    if($key === hash('sha256', $row['username'])){
      $_SESSION['login']=true;
    }

  }

if(isset($_SESSION['login'])){
  header("location: index.php");
 
}
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $results=mysqli_query($conn, "SELECT * FROM user WHERE username='$username' ");

  if(mysqli_num_row($results) === 1){
    $row = mysqli_fetch_assoc($results);
    if(password_verify($password, $row['password'])){
      $_SESSION["login"] = true;
      if(isset($_POST['remember'])){
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time()+60);
       
      }
       header("location: index.php");
        exit();
    }
    
  }
  $error = true;
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

<div>
  <div class="header-blue">
    <nav class="navbar navbar-default navigation-clean-search">
      <div class="container">
        <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">173040028</a>
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"> 
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <p class="navbar-text navbar-right"> <a class="btn btn-default action-button" role="button" href="logout.php">Logout</a></p>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Please sign in</h3>
        </div>
      <div class="panel-body">
        <form accept-charset="UTF-8" role="form" class="login-form" method="POST" action="">
          <div class="form-group">
            <input class="form-control" type="text" name="username" placeholder="Usename" type="text" />
          </div>
        <div class="form-group">
          <input class="form-control" name="password" placeholder="Password" type="password" /><hr>     
                  
<?php  if (isset($error)) : ?>
  <p>Username atau password salah</p>
<?php endif; ?>
  <button  class="btn btn-lg btn-success btn-block" type="submit" name="submit">KIRIM</button><br>
  <p>Login : <i>admin/admin</i></p>
          </div>
        </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>