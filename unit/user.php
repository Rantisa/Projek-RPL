<?php 
switch ($_GET['action']) {
  case 'daftar-user':
      require_once ("add/user/daftar.php");
    break;

case "update":
     require_once ("add/user/update.php");
    break;

case "update_action":
    $id = $_POST['id'];

    $username = $_POST['username'];  
    $password = $_POST['password'];
    $nama = $_POST['nama']; 
    $email = $_POST['email'];
    $status = $_POST['status'];  

    if (empty($password)) {
    		$qupdate = "UPDATE user, daftaranggota SET  
				user.username = '$username',
				daftaranggota.nama = '$nama',
			    daftaranggota.email = '$email',
			    user.status = '$status'
				where user.id = $id AND daftaranggota.user_id = $id";
	}
		else {
			$password = md5($password);
			$qupdate = "UPDATE user, daftaranggota SET 
				user.password = '$password'
				user.username = '$username',
				daftaranggota.nama = '$nama',
			    daftaranggota.email = '$email',
			    user.status = '$status'
				where user.id = $id AND daftaranggota.user_id = $id";
}	
	 
    $rupdate = mysqli_query($mysqli,$qupdate);
    header("location:?unit=user&action=daftar-user"); 
  break;  

case "delete":
     
      $qdelete = "delete from user where id = '$_GET[id]'";
      $rdelete = mysqli_query($mysqli,$qdelete);
      header("location:?unit=user&action=daftar-user"); 
    break;    


	}
?>