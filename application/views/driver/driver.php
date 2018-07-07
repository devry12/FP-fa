
<div class="container">
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>NAMA KONSUMEN</th>
          <th>NAMA BARANG</th>
          <th>JUMLAH BARANG</th>
          <th>TUJUAN</th>
          <th>STATUS</th>
          <th>OPSI</th>
          <!-- <th>AKSI</th> -->

        </tr>
      </thead>
      <tbody>
        <?php foreach ($GetAllTugasBar as $data): ?>
         <tr>
          <td><?=$data['nama_lengkap']?></td>
          <td><?=$data['nama_barang']?></td>
          <td><?=$data['jumlah_barang']?></td>
          <td><?=$data['tujuan']?></td>
          <td><?=$data['status_pengiriman']?></td>
          <form class="" action="" method="post">
            <input type="text" hidden name="idTransaksi" value="<?=$data['id_transaksi']?>">
          <td><input type="submit" class="btn btn-primary" name="btnAmbil" value="Ambil"> <input type="submit" class="btn btn-danger" name="btnTolak" value="Tolak"> </td>
        </form>

        <?php endforeach; ?>

        </tr>
        </tbody>
      </table>
    </div>

</div>
</div>
