<a href="<?php echo site_url('barang/tambah'); ?>" class="btn btn-default btn-sm">
	Tambah
</a>
<table class="table table-bordered">
	<thead>
		<tr>
			<td>No</td>
			<td>Nama Barang</td>
			<td>Deksripsi</td>
			<td>Harga</td>
			<td>Kategori</td>
			<td>Aksi</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($isi_tabel as $key) { ?>
			
		<tr>
			<td>1</td>
			<td><?php echo $key->nama_barang; ?></td>
			<td><?php echo $key->deskripsi; ?></td>
			<td>Rp. <?php echo $key->harga; ?></td>
			<td><?php echo $key->kategori; ?></td>
			<td>edit | hapus</td>
		</tr>

		<?php } ?>
	</tbody>
</table>