<?php 

switch ($_GET['action']) {
  case 'daftar-struktur':
      require_once ("add/profil/struktur/daftar.php");
    break;
  
  case "inputstruktur":
      require_once ("add/profil/struktur/inputstruktur.php");
    break;

  case "inputstruktur_action":
      $judul = $_POST['judul'];
      $tampil = $_POST['tampil'];
      $lokasi_gambar = $_FILES['foto']['tmp_name'];
      $nama_gambar   = $_FILES['foto']['name'];

      move_uploaded_file($lokasi_gambar,"foto/$nama_gambar");
      $qinput = "insert into struktur
                  (judul,  tampil, foto) 
                  values
                  ('$judul', '$tampil', '$nama_gambar')";

      $rinput = mysqli_query($mysqli,$qinput);
    header("location:?unit=profil&action=daftar-struktur");            
    break;  

  case "updatestruktur":
     require_once ("add/profil/struktur/update.php");
    break;

  case "updatestruktur_action":
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $tampil = $_POST['tampil'];
    $lokasi_gambar = $_FILES['foto']['tmp_name'];
    $nama_gambar   = $_FILES['foto']['name'];   
    
    if(empty($nama_gambar)) {
      $qupdate = "update struktur set 
        judul = '$judul',
        tampil= '$tampil'
        where id = '$id'";
    }
    else {
      $qupdate = "select * from struktur where id=$id";
      $rupdate = mysqli_query($mysqli,$qupdate);
      $dupdate = mysqli_fetch_assoc($rupdate);
      $target = $dupdate['foto'];
      $img = "foto/$target";
      if (file_exists($img)) {
        unlink($img);
      }

      move_uploaded_file($lokasi_gambar,"foto/$nama_gambar");
      $qupdate = "update struktur set 
        judul = '$judul',
        foto = '$nama_gambar',
        tampil='$tampil'
        where id = '$id'";      
    }
    // echo $qupdate;
    $rupdate = mysqli_query($mysqli,$qupdate);
    header("location:?unit=profil&action=daftar-struktur"); 
  break;  

  case "deletestruktur":
      $qupdate = "select * from struktur where id='$_GET[id]'";
      $rupdate = mysqli_query($mysqli,$qupdate);
      $dupdate = mysqli_fetch_assoc($rupdate);
      $target = $dupdate['gambar'];
      $img = "foto/$target";
      if (file_exists($img)) {
        unlink($img);
      }

      $qdelete = "delete from struktur where id = '$_GET[id]'";
      $rdelete = mysqli_query($mysqli,$qdelete);
      header("location:?unit=profil&action=daftar-struktur"); 
    break;    





  case 'daftar-sejarah':
      require_once ("add/profil/sejarah/daftar.php");
    break;
  
  case "inputsejarah":
      require_once ("add/profil/sejarah/inputsejarah.php");
    break;
  
  case "inputsejarah_action":
 
      $judul = $_POST['judul'];
      $isi = $_POST['isi'];
      $tampil = $_POST['tampil'];
      $lokasi_gambar = $_FILES['gambar']['tmp_name'];
      $nama_gambar   = $_FILES['gambar']['name'];

      $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
      $hari = date("w");
      $hari_ini = $seminggu[$hari];
      $tgl_sekarang = date("Y-m-d");    
      $jam_sekarang = date("H:i:s");

      move_uploaded_file($lokasi_gambar,"foto/$nama_gambar");
      $qinput = "insert into sejarah
                  (judul, isi, hari, tanggal, jam, tampil, foto) 
                  values
                  ('$judul', '$isi', '$hari_ini',  '$tgl_sekarang', '$jam_sekarang', '$tampil', '$nama_gambar')";

      $rinput = mysqli_query($mysqli,$qinput);
    header("location:?unit=profil&action=daftar-sejarah");            
    break;  

  case "updatesejarah":
     require_once ("add/profil/sejarah/update.php");
    break;

  case "updatesejarah_action":
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tampil = $_POST['tampil'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];
    $nama_gambar   = $_FILES['gambar']['name'];   
    
    $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $hari = date("w");
    $hari_ini = $seminggu[$hari];
    $tgl_sekarang = date("Y-m-d");    
    $jam_sekarang = date("H:i:s");
    
    if(empty($nama_gambar)) {
      $qupdate = "update sejarah set 
        judul = '$judul',
        isi='$isi',
        tampil='$tampil',
        hari='$hari_ini',
        tanggal='$tgl_sekarang',
        jam='$jam_sekarang'
        where id = '$id'";
    }
    else {
      $qupdate = "select * from sejarah where id=$id";
      $rupdate = mysqli_query($mysqli,$qupdate);
      $dupdate = mysqli_fetch_assoc($rupdate);
      $target = $dupdate['foto'];
      $img = "foto/$target";
      if (file_exists($img)) {
        unlink($img);
      }

      move_uploaded_file($lokasi_gambar,"foto/$nama_gambar");
      $qupdate = "update sejarah set 
        judul = '$judul',
        isi='$isi',
        foto = '$nama_gambar',
        tampil='$tampil',
        hari='$hari_ini',
        tanggal='$tgl_sekarang',
        jam='$jam_sekarang'
        where id = '$id'";      
    }
    
    $rupdate = mysqli_query($mysqli,$qupdate);
    header("location:?unit=profil&action=daftar-sejarah"); 
  break;  

  case "deletesejarah":
      $qupdate = "select * from sejarah where id='$_GET[id]'";
      $rupdate = mysqli_query($mysqli,$qupdate);
      $dupdate = mysqli_fetch_assoc($rupdate);
      $target = $dupdate['gambar'];
      $img = "foto/$target";
      if (file_exists($img)) {
        unlink($img);
      }

      $qdelete = "delete from sejarah where id = '$_GET[id]'";
      $rdelete = mysqli_query($mysqli,$qdelete);
      header("location:?unit=profil&action=daftar-sejarah"); 
    break;    






  case 'daftar-visimisi':
      require_once ("add/profil/visimisi/daftar.php");
    break;
  
  case "inputvisimisi":
      require_once ("add/profil/visimisi/inputvisimisi.php");
    break;

case "inputvisimisi_action":
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $hari = date("w");
    $hari_ini = $seminggu[$hari];
    $tgl_sekarang = date("Y-m-d");    
    $jam_sekarang = date("H:i:s");

    $qinput = "insert into visimisi 
                (judul, isi, hari, tanggal, jam) 
                values
                ('$judul', '$isi', '$hari_ini', '$tgl_sekarang', 'jam_sekarang')";

    $rinput = mysqli_query($mysqli,$qinput);
    
    header("location:?unit=profil&action=daftar-visimisi");            
    break;  

case "updatevisimisi":
      require_once ("add/profil/visimisi/update.php");
    break;

  case "updatevisimisi_action":
    $id = $_POST['id'];
    
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tampil = $_POST['tampil'];
       
    $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $hari = date("w");
    $hari_ini = $seminggu[$hari];
    $tgl_sekarang = date("Y-m-d");    
    $jam_sekarang = date("H:i:s");
    
    $qupdate = "update visimisi set 
        judul = '$judul',
        isi='$isi',
        tampil='$tampil',
        hari='$hari_ini',
        tanggal='$tgl_sekarang',
        jam='$jam_sekarang'
        where id = '$id'";
    
    $rupdate = mysqli_query($mysqli,$qupdate);
    header("location:?unit=profil&action=daftar-visimisi"); 
  break;  

  case "deletevisimisi":
     
      $qdelete = "delete from visimisi where id = '$_GET[id]'";
      $rdelete = mysqli_query($mysqli,$qdelete);
      header("location:?unit=profil&action=daftar-visimisi"); 
    break;    
}

?>