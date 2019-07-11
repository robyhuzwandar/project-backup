<form action="<?php echo site_url('barang/store'); ?>" method="post">
	<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" name="nama_barang" class="form-control input-sm">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<input type="text" name="deskripsi" class="form-control input-sm">
	</div>
	<div class="form-group">
		<label>Kategori</label>
		<select name="kategori" class="form-control input-sm">
			<option value="pakaian">pakaian</option>
			<option value="elektronik">elektronik</option>
			<option value="accesoris">accesoris</option>
			<option value="lainnya">lainnya</option>
		</select>
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control input-sm">
	</div>
	<div class="form-group">
		<label>Status</label>
		<select name="status" class="form-control input-sm">
			<option value="tersedia">tersedia</option>
			<option value="habis">habis</option>
		</select>
	</div>
	<div class="form-group">
		<input class="btn btn-primary btn-sm" type="submit" name="submit" value="Simpan">
		<a class="btn btn-default btn-sm" href="<?php echo site_url('barang'); ?>">Kembali</a>
	</div>
</form>