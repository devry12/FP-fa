
<div class="container">


	<div class="table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Nama Barang</th>
					<th>Tujuan</th>
					<th>Update Lokasi</th>
					<th>Aksi</th>


				</tr>
			</thead>
			<tbody>
				<?php foreach ($GetTugas as $data): ?>

				<tr>
					<td>
						<?=$data['nama_barang']?>
					</td>
					<td><?=$data['tujuan']?> </td>

					<form class="" action="/driver/status/" method="post">
					<td>
						<input type="text" hidden name="idTransaksi" value="<?=$data['id_transaksi']?>">
						<input type="text" hidden name="id_driver" value="<?=$data['id_driver']?>">
							<input type="text" placeholder="Lokasi Anda Sekarang" class="form-control col-md-6" name="lokasi" value="<?=$data['lokasi']?>">
					</td>
					<td>
							<input type="submit" class="btn btn-primary" name="btnUpdate" value="Update">
							<input type="submit" class="btn btn-success" name="btnSelesai" value="Selesai">
					</td>
				</form>

				</tr>
			<?php endforeach; ?>



				</tbody>
			</table>
		</div>

	</div>
