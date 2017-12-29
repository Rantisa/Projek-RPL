<section class="content">
	<div class="box box-default">
		<div class="box-body">
			<h1 class="title-admin">Form Input Kegiatan</h1>
			<fieldset>
			<form method="POST" role="form" action="?unit=giat&action=input_action" enctype="multipart/form-data">
				<div class="row">
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Judul</label>
							<input type="text" name="judul" class="form-control"  placeholder="Masukan nama" required>
						</div>

						<div class="form-group">
					<label>isi</label>
					<textarea name="isi" class="form-control"></textarea>	
					
					</div>
					<div class="form-group">
					<label for="exampleInputFile">Gambar</label>
					<input type="file" name="gambar" id="exampleInputFile">
					</div>

					<p>
					<label for="tampil">Tampilkan:</label>
					<select name="tampil">
						<option value="Y">Y</option>
						<option value="N">N</option>
					</select>
				</p>	
					
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