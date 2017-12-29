
<?php 
    require_once("koneksi/koneksi.php");
$nama = $_POST['nama'];
      $nim = $_POST['nim'];
      $fakultas = $_POST['fakultas'];
      $jurusan = $_POST['jurusan'];
      $jk = $_POST['jk'];
      $alamat = $_POST['alamat'];
      $tanggal_lahir = $_POST['tgl_lahir'];
      $tempat_lahir = $_POST['tempat_lahir'];
      $agama = $_POST['agama'];
      $email = $_POST['email'];
      $lokasi_gambar = $_FILES['foto']['tmp_name'];
      $nama_gambar   = $_FILES['foto']['name'];
      // echo $tanggal_lahir;
      move_uploaded_file($lokasi_gambar,"foto_anggota/$nama_gambar");
      $qinput = "insert into daftaranggota
                  (nama, nim, fakultas, jurusan, jk, alamat, tanggal_lahir, tempat_lahir, agama, email, foto) 
                  values
                  ('$nama', '$nim', '$fakultas', '$jurusan',  '$jk',  '$alamat',  '$tanggal_lahir',  '$tempat_lahir',  '$agama',  '$email', '$nama_gambar')";

      $rinput = mysqli_query($mysqli,$qinput);
    // header("location:?unit=balon&action=daftar-balon");            


?>	