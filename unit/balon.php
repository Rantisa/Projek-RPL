<?php 

switch ($_GET['action']) {
  case 'daftar-balon':
      require_once ("add/anggota/balon/daftar.php");
    break;
 
 case "terima":
     $id = $_GET['id'];
    
     $qupdate = "select nim from daftaranggota where id = $id";
	 $rupdate = mysqli_query($mysqli,$qupdate);
	 $value = mysqli_fetch_assoc($rupdate);
	 $nim = $value['nim'];
	 $password = md5($value['nim']);
	 // echo $nim;
     $makeuser = "INSERT INTO `user`(`id`, `username`, `password`, `status`) VALUES ($id, '$nim', '$password','user')";
     $insert = mysqli_query($mysqli,$makeuser);

     $query = "UPDATE daftaranggota SET user_id = '$id', status = 1 where id = $id";
     $rupdate = mysqli_query($mysqli,$query);
     header("location:?unit=anggota&action=daftar-balon");

    break;  

 case "tolak":
     $id = $_GET['id'];
    
     $query = "UPDATE daftaranggota SET user_id = '$id', status = 4 where id = $id";
     $rupdate = mysqli_query($mysqli,$query);
     header("location:?unit=anggota&action=daftar-balon");

    break;  
}