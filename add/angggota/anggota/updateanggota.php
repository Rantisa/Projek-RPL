<?php 

	$qupdate = "select * from daftaranggota where id='$_GET[id]'";
	$rupdate = mysqli_query($mysqli,$qupdate);
	$dupdate=mysqli_fetch_assoc($rupdate);

?>
<section class="content">
	<div class="box box-default">
		<div class="box-body">
		<h1 class="title-admin">Form Update Anggota</h1>
		<fieldset>
			<form method="post" action="?unit=anggota&action=update_action" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $dupdate['id'] ?>">
				<p>
					<label for="nama">Nama:</label>
					<input type="text" name="nama" id="nama" required value="<?php echo $dupdate['nama'] ?>">
				</p>
				<p>
					<label for="nama">NBP:</label>
					<input type="text" name="nbp" id="nama" required value="<?php echo $dupdate['nbp'] ?>">
				</p>

				<p>
					<label for="nama">Tempat Lahir:</label>
					<input type="text" name="tempat_lahir" id="nama" required value="<?php echo $dupdate['tempat_lahir'] ?>">
				</p>

				<p>
					<label for="nama">Tanggal Lahir:</label>
					<input type="date" name="tanggal_lahir" id="nama" required value="<?php echo $dupdate['tanggal_lahir'] ?>">
				</p>

				<p>
					<?php 
						$jk = $dupdate['tanggal_lahir'];

					?>
					<label for="nama">jenis kelamin:</label>
					<?php if($jk = "Laki-laki"){ ?>
						<input type="radio" name="jk" value="Laki-Laki" checked> Laki-laki
						<input type="radio" name="jk" value="Perempuan"> Perempuan
					<?php } ?>	
				</p>


				<?php 
					$agama = ['Islam', 'Kristen', 'Hindu', 'Budha', 'Kong Hu Chu'];
					$data = $dupdate['agama'];
				?>
				<div class="form-group">
					<label> Agama: </label> 
					<select name="agama" >
						<option value="Anda Belum Memilih">-</option>
						<?php for ($i=0; $i <= 4 ; $i++) { 
							if ($data == $agama[$i]) {?>
							<option value="<?php echo $agama[$i] ?>" selected><?php echo $agama[$i] ?></option>
						<?php 
							}else{ ?>
								<option value="<?php echo $agama[$i] ?>"><?php echo $agama[$i] ?></option>
							<?php }
						} 

						?>
					</select>
					</div>


				<p>
					<label for="isi">Alamat:</label>
					<textarea name="alamat" id="isi" cols="30" rows="5" required><?php echo $dupdate['alamat'] ?></textarea>
				</p>				
				
				<p>
					<label for="nama">No HP:</label>
					<input type="text" name="hp" id="nama" required value="<?php echo $dupdate['hp'] ?>">
				</p>
				
				<p>
					<label for="nama">Nim:</label>
					<input type="text" name="nim" id="nama" required value="<?php echo $dupdate['nim'] ?>">
				</p>
				
				<?php 
					$fakultas = ['F.Teknik', 'FKIP', 'FEB', 'FISIP', 'F.HUKUM', 'F.KEDOKTERAN', 'FPIK', 'F.PERTANIAN', 'F.KEHUTANAN', 'FKG', 'F.MIPA' ];
					$fak = $dupdate['fakultas'];

				?>
				<div class="form-group">
						<label> Fakultas </label> <br>
						<select name="fakultas">
						<option value="Anda Belum Memilih">-</option>
						<?php for ($i=0; $i <= 10 ; $i++) { 
							if ($fak == $fakultas[$i]) {?>
							<option value="<?php echo $fakultas[$i] ?>" selected><?php echo $fakultas[$i] ?></option>
						<?php 
							}else{ ?>
								<option value="<?php echo $fakultas[$i] ?>"><?php echo $fakultas[$i] ?></option>
							<?php }
						} 

						?>
						</select>
					</div>

				<p>
					<label for="nama">Prodi:</label>
					<input type="text" name="prodi" id="nama"  value="<?php echo $dupdate['prodi'] ?>">
				</p>


				<p>
					<label for="nama">Jurusan:</label>
					<input type="text" name="jurusan" id="nama"  value="<?php echo $dupdate['jurusan'] ?>">
				</p>
				
				<p>
					<label for="nama">Tahun Masuk Menwa:</label>
					<input type="text" name="masuk" id="nama" required value="<?php echo $dupdate['masuk'] ?>">
				</p>

				<p>
					<label for="nama">Pendidikan:</label>
					<input type="text" name="pendidikan" id="nama" 
					value="<?php echo $dupdate['pendidikan'] ?>">
				</p>

				<?php 
					$jabatan = ['Komandan Satuan', 'Kaurdiklat', 'Kaurminpers', 'Kaursus', 'Kamarkas', 'Kepala Kesekretariatan', 'Ka.Provost', 'Komandan Kelompok A', 'Komandan Kelompok B', 'Urdiklat', 'Urpam', 'Urpers', 'Urlogben', 'UrHumas', 'Ur keputrian', 'Ur Intel', 'sekertariat', 'Ur kemarkasan', 'provost', 'Anggota', 'Senior'  ];
					$jab = $dupdate['jabatan'];
				?>
				
				<div class="form-group">
					<label> Jabatan </label> <br>
					<select name="jabatan">
						<option value="Anda Belum Memilih">-</option>

						<?php for ($i=0; $i <= 20 ; $i++) { 
							if ($jab == $jabatan[$i]) {?>
							<option value="<?php echo $jabatan[$i] ?>" selected><?php echo $jabatan[$i] ?></option>
						<?php 
							}else{ ?>
								<option value="<?php echo $jabatan[$i] ?>"><?php echo $jabatan[$i] ?></option>
							<?php }
						} 

						?>
					</select>
					</div>

				<p>
					<label for="nama">Email:</label>
					<input type="text" name="email" id="nama" required value="<?php echo $dupdate['email'] ?>">
				</p>

				<p>
					<label for="gambar" title="Kosongkan gambar jika tidak ingin mengupdate">Gambar:</label>
					<input type="file" name="foto" >
				</p>				
				
				<p>
					<label for="tampil">Tampilkan:</label>
					<select name="tampil">
					<?php
					if($dupdate['tampil'] == "Y") {
						echo "
						<option value='Y' selected>Y</option>
						<option value='N'>N</option>						
						";
					}
					else {
						echo "
						<option value='Y'>Y</option>
						<option value='N' selected>N</option>						
						";					
					}
					?>

					</select>
				</p>								
				
				<p align="center">
					<img src="../foto/<?php echo $dupdate['gambar'] ?>">
					
				</p>				
				
				<p class="button">
					<input type="submit" name="submit" class="formbutton" value="Submit">
					
				</p>
			</form>
		</fieldset>	
	</div>
</div>
</section>