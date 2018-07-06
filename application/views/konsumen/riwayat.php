<div class="container">

	<div class="table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>NAMA DRIVER</th>
					<th>NAMA BARANG</th>
          <th>JUMLAH</th>
          <th>TUJUAN</th>
					<th>STATUS</th>

				</tr>
			</thead>
			<tbody>

				<?php foreach ($GetRiwayat as $data): ?>

          <tr>
          <td><?=$data['nama_lengkap']?></td>
          <td><?=$data['nama_barang']?></td>
          <td><?=$data['jumlah_barang']?></td>
          <td><?=$data['tujuan']?></td>
          <td><?=$data['status_pengiriman']?></td>

        </tr>
			<?php endforeach; ?>
				</tbody>
			</table>
    </div>
