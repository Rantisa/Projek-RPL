<?php 

switch ($_GET['action']) {
  case 'daftar-anggota':
      require_once ("add/anggota/anggota/daftaranggota.php");
    break;
  
  case "inputanggota":
      require_once ("add/anggota/anggota/inputanggota.php");
    break;

 
  case "updateanggota":
     require_once ("add/anggota/anggota/updateanggota.php");
    break;

  case "update_action":
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nbp = $_POST['nbp'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $agama = $_POST['agama'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];
    $jabatan = $_POST['jabatan'];
    $prodi = $_POST['prodi'];
    $masuk = $_POST['masuk'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $pendidikan = $_POST['pendidikan'];
    $jk = $_POST['jk'];
    $lokasi_gambar = $_FILES['foto']['tmp_name'];
    $nama_gambar   = $_FILES['foto']['name'];   
    if(empty($nama_gambar)) {
      $qupdate = "UPDATE daftaranggota SET 
        nama = '$nama',
        nim = '$nim',
        nbp = '$nbp',
        tanggal_lahir = '$tanggal_lahir',
        tempat_lahir = '$tempat_lahir',
        agama = '$agama',
        fakultas = '$fakultas',
        prodi = '$prodi',
        jurusan = '$jurusan',
        jabatan = '$jabatan',
        masuk = '$masuk',
        hp = '$hp',
        alamat = '$alamat',
        email = '$email',
        pendidikan = '$pendidikan',
        jk = '$jk'
        where id = '$id'";
    }
    else {

      // Ambil data foto yang akan dihapus
      $qupdate = "select * from daftaranggota where id=$id";
      $rupdate = mysqli_query($mysqli,$qupdate);
      $dupdate = mysqli_fetch_assoc($rupdate);
      $target = $dupdate['foto'];
      $img = "foto_anggota/$target";
      if (file_exists($img)) {
        unlink($img);
      }

      move_uploaded_file($lokasi_gambar,"foto_anggota/$nama_gambar");
      $qupdate = "UPDATE daftaranggota set 
        nama = '$nama',
        nim = '$nim',
        nbp = '$nbp',
        tanggal_lahir = '$tanggal_lahir',
        tempat_lahir = '$tempat_lahir',
        agama = '$agama',
        fakultas = '$fakultas',
        jurusan = '$jurusan',
        jabatan = '$jabatan',
        masuk = '$masuk',
        hp = '$hp',
        alamat = '$alamat',
        email = '$email',
        pendidikan = '$pendidikan',
        foto = '$nama_gambar',
        jk = '$jk'
        where id = '$id'";      
    }
    // echo $qupdate;
    $rupdate = mysqli_query($mysqli,$qupdate);
    header("location:?unit=anggota&action=daftar-anggota"); 
  break;  

  case "deleteanggota":
      $qupdate = "select * from daftaranggota where id='$_GET[id]'";
      $rupdate = mysqli_query($mysqli,$qupdate);
      $dupdate = mysqli_fetch_assoc($rupdate);
      $target = $dupdate['gambar'];
      $img = "foto_anggota/$target";
      if (file_exists($img)) {
        unlink($img);
      }

      $qdelete = "delete from daftaranggota where id = '$_GET[id]'";
      $rdelete = mysqli_query($mysqli,$qdelete);
      header("location:?unit=anggota&action=daftar-anggota"); 
    break;    

case "detailanggota":
     require_once ("add/anggota/anggota/detailanggota.php");
    break;










 case 'daftar-calon':
      require_once ("add/anggota/calon/daftar.php");
    break;

case "update":
     $id = $_GET['id'];
    
     $qupdate = "select nim from daftaranggota where id = $id";
   $rupdate = mysqli_query($mysqli,$qupdate);
   $value = mysqli_fetch_assoc($rupdate);
   $nim = $value['nim'];
   $password = md5($value['nim']);
   // echo $nim;
     $makeuser = "INSERT INTO `user`(`id`, `username`, `password`, `status`) VALUES ($id, '$nim', '$password','user')";
     $insert = mysqli_query($mysqli,$makeuser);

     $query = "UPDATE daftaranggota SET user_id = '$id', status = 2 where id = $id";
     $rupdate = mysqli_query($mysqli,$query);
     header("location:?unit=anggota&action=daftar-calon");

    break;  


  case 'daftar-balon':
      require_once ("add/anggota/balon/daftar.php");
    break;
  
  
}

?>
