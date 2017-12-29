<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section class="content">
	<div class="box box-default">
		<div class="box-body">
			<h1 class="title-admin">Form Pendaftaran 
			<fieldset>
			<form method="POST" role="form" action="pendaftaranbalon_action.php" enctype="multipart/form-data">

			<form role="form">
				<div class="row">
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control"  placeholder="Masukan nama">
						</div>

					<div class="form-group">
						<label>Tempat lahir</label>
						<input type="text" name="tempat_lahir" class="form-control"  placeholder="Enter tempat  lahir">
					</div>
					<div class="form-group">
						<label>Tgl lahir</label>
						<input type="text" name="tgl_lahir" class="form-control">
					</div>
					<div class="form-group">
					<label> Jenis Kelamin: </label><br>
						<input type="radio" name="jk" value="Laki-Laki"> Laki-laki
						<input type="radio" name="jk" value="Perempuan"> Perempuan
					</div>
					<div class="form-group" >
					<label> Agama: </label> <br>
					<select name="agama">
						<option value="Anda Belum Memilih">-</option>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
						<option value="Kong Hu Chu">Kong Hu Chu</option>
					</select>
					</div>
					<div class="form-group">
						<label>alamat</label>
						<textarea type="text" class="form-control" name="alamat" placeholder="Enter text">
							
						</textarea> 
					</div>
				
					<div class="form-group">
					<label for="exampleInputFile">Foto</label>
					<input type="file" name="foto" id="exampleInputFile">
					</div>
					
            		</div>


            		<div class="col-md-6">
            			<div class="form-group">
							<label>NIM</label>
							<input type="text" name="nim" class="form-control"  placeholder="Enter nim">
						</div>
					<div name="fakultas" class="form-group">
						<label> Fakultas </label> <br>
						<select name="fakultas">
							<option value="Anda Belum Memilih">-</option>
							<option value="F.Teknik">F.Teknik</option>
							<option value="FKIP">FKIP</option>
							<option value="FEB">FEB</option>
							<option value="FISIP">FISIP</option>
							<option value="F.HUKUM">F.HUKUM</option>
							<option value="F.KEDOKTERAN">F.KEDOKTERAN</option>
							<option value="FPIK">FPIK</option>
							<option value="F.PERTANIAN">F.PERTANIAN</option>
							<option value="F.KEHUTANAN">F.KEHUTANAN</option>
							<option value="FKG">FKG</option>
							<option value="F.MIPA">F.MIPA</option>
						</select>
					</div>

					<div class="form-group">
						<label>Prodi</label>
						<input type="text" name="prodi" class="form-control"  placeholder="Enter Prodi">
					</div>

					<div class="form-group">
						<label>jurusan</label>
						<input type="text" name="jurusan" class="form-control"  placeholder="Enter JURUSAN">
					</div>
					
					<div class="form-group">
					<label>Email address</label>
					<input type="Email" class="form-control" name="email"  placeholder="Enter Email">
					</div>
					
				<!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
	            	</div>

					</div>
			</form>

		</div>
	</div>
</section>

</body>
</html>