<?php 

function koneksi(){
$conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
mysqli_select_db($conn, "pw_173040028") or die("Database salah");

	return $conn;
}

function query($sql){
	$conn = koneksi();
	$results = mysqli_query($conn, "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($results)) {
		$rows[] = $row;
	};

	return $rows ;
}

function tambah($data){
	$conn = koneksi();
	
	$Nama = htmlspecialchars($data['Nama']);
	$Jenis = htmlspecialchars($data['Jenis']);
	$Asal = htmlspecialchars($data['Asal']);
	$Ciri = htmlspecialchars($data['Ciri']);
	$Des = htmlspecialchars($data['Des']);
	
	$Gambar = upload();
	if(!$Gambar){
		return false;
	}


	$querytambah = "INSERT INTO Flora_dan_Fauna_Langka
	VALUES ('', '$Nama', '$Jenis', '$Asal', '$Ciri', '$Des','$Gambar') ";

	mysqli_query($conn, $querytambah);

	return mysqli_affected_rows($conn);
}


function hapus($id){
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM Flora_dan_Fauna_Langka WHERE id = '$id' ");

	return mysqli_affected_rows($conn);
}



function ubah($sip){
	$conn = koneksi();
	
	$id = $sip['id'];
	$Nama = htmlspecialchars($sip['Nama']);
	$Gambar = htmlspecialchars($sip['Gambar']);
	$Jenis = htmlspecialchars($sip['Jenis']);
	$Asal = htmlspecialchars($sip['Asal']);
	$Ciri = htmlspecialchars($sip['Ciri']);
	$Des = htmlspecialchars($sip['Des']);

	$queryubah = "UPDATE Flora_dan_Fauna_Langka
	SET 
	Nama = '$Nama',
	Jenis = '$Jenis',
	Asal = '$Asal',
	Ciri = '$Ciri',
	Des = '$Des',
	Gambar = '$Gambar' 
	WHERE id = '$id' ";

	
	mysqli_query($conn, $queryubah);

	return mysqli_affected_rows($conn);
}


function registrasi($data){
	$conn = koneksi();

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 =  mysqli_real_escape_string($conn, $data["password2"]);

	$result = mysqli_query($conn,"SELECT username FROM user WHERE
		 username = '$username' ");
	if(mysqli_fetch_assoc($result)){
		echo "<script> 
		alert ('Username sudah terdaftar');
		</script>";

		return false;
	}


	if($password !== $password2){
		echo "<script> 
		alert ('konfirmasi password tidak sesuai');
		</script>";

		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);
	
	mysqli_query($conn, "INSERT INTO user VALUES
		('', '$username', '$password')");

		return mysqli_affected_rows($conn);


}

function upload(){
$namafile = $_FILES['Gambar']['name'];
$ukuranfile = $_FILES['Gambar']['size'];
$error = $_FILES['Gambar']['error'];
$tmpname = $_FILES['Gambar']['tmp_name'];

if($error === 4){
	echo "<script>
			alert('pilih Gambar terlebih dahulu');
			</script>";
			return false;
}

	$gambarvalid = ['jpg','jpeg','png'];
	$extensigambar = explode('.', $namafile);
	$extensigambar = strtolower(end($extensigambar));
		if (!in_array($extensigambar, $gambarvalid)){
		echo "<script>
			alert('Harus ekstensi Gambar!');
		</script>";
		return false;
	}

	if($ukuranfile >100000){
		echo "<script>
			alert('Ukuran terlalu besar');
			</script>"	;
			return false;
	}
	$namafilebaru = uniqid();
	$namafilebaru = ','.
	$namafilebaru = $extensigambar;

	move_uploaded_file($tmpname, '../assets/images/'.$namafilebaru);

	return $namafilebaru;

}


?>



