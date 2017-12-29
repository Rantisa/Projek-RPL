<?php 
	$qanggota = "select * from daftaranggota where id='$_GET[id]'";
	$ranggota = mysqli_query($mysqli,$qanggota);
	$danggota=mysqli_fetch_assoc($ranggota);
	
?>
<section class="content">
	<div class="box box-default">
		<div class="box-body">
		<h2 class="title">Detail Anggota</h2>
			<fieldset>
		<article>
	<h2> <?php echo $danggota['nama'] ?> </h2>
	<div class="article-info">Nbp:
		<?php echo $danggota['nbp'] ?>
	
	<?php
		if($danggota['foto'] != ''){
	?>
		<img src="foto_anggota/<?php echo $danggota['foto'];?>" width="250"
			align="left" class="gambar_anggota">
	<?php
		}
		echo $danggota['alamat'];
	?>
	</p>
	
</article>
</form>
		</fieldset>	
	</div>
</div>
</section>