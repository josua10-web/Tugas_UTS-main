<main role="main" class="container">
    <div class="card">
        <div class="card-header"><h4><?php echo $judul?></h4></div>
        <table class="table table-bordered">
        <tr>
	<?php foreach($biodata as $b){ ?>
	<form action="<?php echo base_url(). 'web/update/'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
			<form method="post" action="<?php echo base_url(); ?>web/save">

				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $b->id ?>">
					<input type="text"  class="form-control"  name="nama" value="<?php echo $b->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" class="form-control" name="alamat" value="<?php echo $b->alamat ?>"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" class="form-control" name="pekerjaan" value="<?php echo $b->pekerjaan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" onclick="return confirm('sudah benar?');" value="Simpan"></td>
				<td><input type="submit" class="btn btn-danger" value="Batal"></td>				
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>