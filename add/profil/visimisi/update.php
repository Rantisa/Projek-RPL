<?php 

	$qupdate = "select * from visimisi where id='$_GET[id]'";
	$rupdate = mysqli_query($mysqli,$qupdate);
	$dupdate=mysqli_fetch_assoc($rupdate);

?>
<section class="content">
	<div class="box box-default">
		<div class="box-body">
		<h1 class="title-admin">Form Update Visi Misi</h1>
		<fieldset>
			<form method="post" action="?unit=profil&action=updatevisimisi_action" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $dupdate['id'] ?>">
				<p>
					<label for="judul">Judul:</label>
					<input type="text" name="judul" id="judul" required value="<?php echo $dupdate['judul'] ?>">
				</p>
				
				<p>
					<label for="isi">Isi:</label>
					<textarea name="isi" id="isi" cols="30" rows="5" required><?php echo $dupdate['isi'] ?></textarea>
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
				
				
				<p class="button">
					<input type="submit" name="submit" class="formbutton" value="Submit">
					
				</p>
			</form>
		</fieldset>	
	</div>
</div>
</section>