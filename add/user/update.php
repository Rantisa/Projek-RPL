<?php 

	$qupdate = "select * from user join daftaranggota
                 where user.id='$_GET[id]'";
	$rupdate = mysqli_query($mysqli,$qupdate);
	$dupdate=mysqli_fetch_assoc($rupdate);

?>
<section class="content">
	<div class="box box-default">
		<div class="box-body">
		<h1 class="title-admin">Form Update User</h1>
		<fieldset>
			<form method="post" action="?unit=user&action=update_action" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $dupdate['id'] ?>">
				<p>
					<label for="username">username:</label>
					<input type="text" name="username" id="judul" required value="<?php echo $dupdate['username'] ?>">
				</p>
				
				<p>
					<label for="password">password:</label>
					<input type="password" name="password" id="isi">
				</p>				
				
				<p>
					<label for="nama">nama:</label>
					<input type="text" name="nama" id="judul" required value="<?php echo $dupdate['nama'] ?>">
				</p>
				
				<p>
					<label for="email">Email:</label>
					<input type="email" name="email" id="isi" required value="<?php echo $dupdate['email'] ?> ">
				</p>	

				<p>
					<label for="status">Status:</label>
					<select name="status">
					<?php
					if($dupdate['status'] == "ADMIN") {
						echo "
						<option value='ADMIN' selected>ADMIN</option>
						<option value='USER'>USER</option>
						";
					}
					else {
						echo "
						<option value='ADMIN'>ADMIN</option>
						<option value='USER' selected>USER</option>					
						";
					}
					?>
				</p>				
				
				<p class='btn btn-success'>
					<input type="submit" name="submit" class="formbutton" value="Submit">
					
				</p>
			</form>
		</fieldset>	
	</div>
</div>
</section>