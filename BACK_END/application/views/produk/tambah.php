<div class="col-md-10">
	<div class="content-box-large">
		<form encytype="multipart/form-data" method="post" action="<?php echo site_url('produk/add') ?>">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<p>
						<label for="nama">Nama Produk</label>
						<input name="nama" type="text" id="nama" size="50">
						</p>
						
						 <p>
						 <label for="gambar">Upload Gambar</label>
						 <input name="gambar" type="file" id="gambar" size="40">
						 </p>
						 
						 <input type="submit" name="submit" id="submit" value="Submit">		 
				</div>
			</div>
		</form>
	</div>
</div>