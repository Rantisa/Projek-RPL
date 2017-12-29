<section class="content">
	<div class="box box-default">
		<div class="box-body">
			
			<h1 class="title-admin">Form Input Struktur</h1>
			<fieldset>
			<form method="POST" role="form" action="?unit=profil&action=inputstruktur_action" enctype="multipart/form-data">
				<div class="row">
            		<div class="col-md-6">
        			<div class="form-group">
						<label>Judul</label>
						<input type="text" name="judul" class="form-control"  placeholder="Masukan nama">
					</div>

					<div class="form-group">
						<label for="exampleInputFile">Foto</label>
						<input type="file" name="foto" id="exampleInputFile">
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