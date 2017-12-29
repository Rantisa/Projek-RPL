<?php 

switch ($_GET['action']) {
  case 'daftar-kegiatan':
      require_once ("add/giat/daftar.php");
    break;
  
  case "input":
      require_once ("add/giat/input.php");
    break;
	
	case "input_action":
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
	    $qinput = "insert into kegiatan
	                (judul, isi, hari, tanggal, jam, tampil, gambar) 
	                values
	                ('$judul', '$isi', '$hari_ini',  '$tgl_sekarang', '$jam_sekarang', '$tampil', '$nama_gambar')";

	    $rinput = mysqli_query($mysqli,$qinput);

	    header("location:?unit=giat&action=daftar-kegiatan");            
	    break;

 	case "update":
      require_once ("add/giat/update.php");
    break;

	case "update_action":
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
			$qupdate = "update kegiatan set 
				judul = '$judul',
				isi='$isi',
				tampil='$tampil',
				hari='$hari_ini',
				tanggal='$tgl_sekarang',
				jam='$jam_sekarang'
				where id = '$id'";
		}
		else {
			$qupdate = "select * from kegiatan where id=$id";
			$rupdate = mysqli_query($mysqli,$qupdate);
			$dupdate = mysqli_fetch_assoc($rupdate);
			$target = $dupdate['gambar'];
			$img = "foto/$target";
			if (file_exists($img)) {
				unlink($img);
			}

			move_uploaded_file($lokasi_gambar,"foto/$nama_gambar");
			$qupdate = "update kegiatan set 
				judul = '$judul',
				isi='$isi',
				gambar = '$nama_gambar',
				tampil='$tampil',
				hari='$hari_ini',
				tanggal='$tgl_sekarang',
				jam='$jam_sekarang'
				where id = '$id'";			
		}
			
		$rupdate = mysqli_query($mysqli,$qupdate);
		header("location:?unit=giat&action=daftar-kegiatan");	
	break;	

	case "delete":
			$qupdate = "select * from kegiatan where id='$_GET[id]'";
			$rupdate = mysqli_query($mysqli,$qupdate);
			$dupdate = mysqli_fetch_assoc($rupdate);
			$target = $dupdate['gambar'];
			$img = "foto/$target";
			if (file_exists($img)) {
				unlink($img);
			}

			$qdelete = "delete from kegiatan where id = '$_GET[id]'";
			$rdelete = mysqli_query($mysqli,$qdelete);
			header("location:?unit=giat&action=daftar-kegiatan");	
		break;	  

}

?>