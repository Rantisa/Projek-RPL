<section class="content">
	<div class="box box-default">
		<div class="box-body">
			<h1 class="title-admin">Form Input Anggota</h1>
			<fieldset>
			<form method="POST" role="form" action="?unit=anggota&action=inputanggota_action" enctype="multipart/form-data">

			<form role="form">
				<div class="row">
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control"  placeholder="Masukan nama">
						</div>

						<div class="form-group">
					<label>NBP</label>
					<input type="text" name="nbp" class="form-control"  placeholder="Enter nbp">
					</div>
					<div class="form-group">
						<label>Tempat lahir</label>
						<input type="text" name="tempat_lahir" class="form-control"  placeholder="Enter tempat  lahir">
					</div>
					<div class="form-group">
						<label>Tgl lahir</label>
						<input type="date" name="tgl_lahir" class="form-control"  placeholder="Enter tanggal lahir">
					</div>
					<div class="form-group">
					<label> Jenis Kelamin: </label><br>
						<input type="radio" name="Gender" value="Laki-Laki"> Laki-laki
						<input type="radio" name="Gender" value="Perempuan"> Perempuan
					</div>
					<div class="form-group">
					<label> Agama: </label> <br>
					<select name="Agama">
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
						<textarea name="alamat" class="form-control"  placeholder="Enter text"> </textarea>
					</div>
					<div class="form-group">
						<label>NO HP</label>
						<input type="text" class="form-control"  placeholder="Enter text">
					</div>
					<div class="form-group">
					<label for="exampleInputFile">Foto</label>
					<input type="file" id="exampleInputFile">
					</div>
					
            		</div>


            		<div class="col-md-6">
            			<div class="form-group">
							<label>NIM</label>
							<input type="text" class="form-control"  placeholder="Enter nim">
						</div>
					<div class="form-group">
						<label> Fakultas </label> <br>
						<select name="Agama">
						<option value="Anda Belum Memilih">-</option>
						<option value="Islam">F.Teknik</option>
						<option value="Kristen">FKIP</option>
						<option value="Hindu">FEB</option>
						<option value="Budha">FISIP</option>
						<option value="Kong Hu Chu">F.HUKUM</option>
						<option value="Islam">F.KEDOKTERAN</option>
						<option value="Kristen">FPIK</option>
						<option value="Hindu">F.PERTANIAN</option>
						<option value="Budha">F.KEHUTANAN</option>
						<option value="Kong Hu Chu">FKG</option>
						<option value="Kong Hu Chu">F.MIPA</option>
						</select>
					</div>
					<div class="form-group">
						<label>jurusan</label>
						<input type="text" class="form-control"  placeholder="Enter JURUSAN">
					</div>
					<div class="form-group">
						<label>Tahun Masuk</label>
						<input type="text" class="form-control"  placeholder="Enter tahun masuk">
					</div>
					<div class="form-group">
						<label>Pendidikan</label>
						<input type="text" class="form-control" id="text" placeholder="Enter Pendidikan">
					</div>
					<div class="form-group">
					<label> Jabatan </label> <br>
					<select name="jabatan">
						<option value="Anda Belum Memilih">-</option>
						<option value="Islam">Komandan Satuan</option>
						<option value="Kristen">Kaurdiklat</option>
						<option value="Hindu">Kaurminper</option>
						<option value="Budha">Kaursus</option>
						<option value="Kong Hu Chu">Kamarkas</option>
						<option value="Islam">Kepala Kesekretariatan</option>
						<option value="Kristen">Ka.Provost</option>
						<option value="Hindu">komandan Kelompok A</option>
						<option value="Budha">Komandan Kelompok B</option>
						<option value="Kong Hu Chu">Urdiklat</option>
						<option value="Islam">Urpam</option>
						<option value="Kristen">Urpers</option>
						<option value="Hindu">Urlogben</option>
						<option value="Budha">UrHumas</option>
						<option value="Kong Hu Chu">Ur keputrian</option>
						<option value="Islam">ur Intel</option>
						<option value="Kristen">sekertarian</option>
						<option value="Hindu">ur  kemarkasan</option>
						<option value="Budha">provost</option>
						<option value="Kong Hu Chu">Anggota</option>
						<option value="Kong Hu Chu">Camen</option>
					</select>
					</div>
					<div class="form-group">
					<label>Email address</label>
					<input type="Email" name="email" class="form-control"  placeholder="Enter Email">
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