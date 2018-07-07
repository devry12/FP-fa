
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
          <th>STATUS DRIVER</th>
          <th>Driver Available</th>
          <th>OPSI</th>
          <!-- <th>AKSI</th> -->

        </tr>
      </thead>
      <tbody>
        <?php foreach ($GetAllPesanan as $data): ?>

         <tr>
          <td><?=$data['nama_lengkap']?></td>
          <td><?=$data['nama_barang']?></td>
          <td><?=$data['jumlah_barang']?></td>
          <td><?=$data['tujuan']?></td>
          <td><?=$data['status_pengiriman']?></td>
          <td><?=$data['driver_status']?></td>
          <form class="" action="" method="post">
          <td>
            <?php if ($data['driver_status'] != "terima"): ?>
            <select class="form-control" name="driver">
              <?php foreach ($GetDriverReady as $driver): ?>
                <option value="<?=$driver['id_user']?>"><?=$driver['nama_lengkap']?></option>
              <?php endforeach; ?>
            </select>
          <?php else: ?>
            <?php foreach ($GetDriverName as $name): ?>
            <?=$name['nama_lengkap']?>
          <?php endforeach; ?>
          <?php endif ?>
          </td>
            <input type="text" hidden name="idTransaksi" value="<?=$data['id_transaksi']?>">
            <td>
              <?php if ($data['driver_status'] != "terima"): ?>
                <input type="submit" class="btn btn-primary" name="btnKirim" value="Kirim">
              <?php endif; ?>
            </td>
        </form>

        <?php endforeach; ?>

        </tr>
        </tbody>
      </table>
    </div>

</div>
</div>
