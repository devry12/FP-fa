<?php 
    // include '../config/koneksi.php';
    // include "../config/inc.session.php";
    $result = mysqli_query($connect, "SELECT * FROM transaksi WHERE status ='Terkirim' AND driver = '$_SESSION[nama_lengkap]' ORDER BY id_transaksi DESC ");
    // $drivers = mysqli_query($connect, "SELECT * FROM user WHERE level = 'Driver' AND status = 'Ready'"); 
    if (!$result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}
   ?>
	</div>
	<form method="post" action="barang.php">
	<div class="table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID-DRIVER</th>
					<th>NAMA</th>
			    <th>EMAIL</th>
			    <th>KONTAK</th>
					<th>STATUS</th>
					<!-- <th>OPSI</th> -->
					<!-- <th>AKSI</th> -->

				</tr>
			</thead>
			<tbody>
         <?php  
    while($user_data = mysqli_fetch_array($result)) {         
      ?> <tr>
      	<input type="hidden" name="id" value="<?php echo $user_data['id_transaksi'] ?>">
          <td><?php echo $user_data['tanggal']	 ?></td>
          <td><?php echo $user_data['nama_barang'] ?> </td>
          <td><?php echo $user_data['jumlah_barang'] ?> </td>
          <td><?php echo $user_data['tujuan'] ?> </td>
          <td><?php echo $user_data['status'] ?> </td>
          <!-- <td><a href="driver/sampai.php?id=<?php echo $user_data['id_transaksi'] ?>" class="btn btn-primary" >Selesai</a></td> -->
          
         <!--  <td><select name="driver"> -->
        	<!-- <?php

      //   		 while($driver = mysqli_fetch_array($drivers)) {         
      // echo "<option class='form-control' value=$driver[nama_lengkap]>$driver[nama_lengkap]</option>";          
    //} 
        	 ?>
        </select></td>
          <td><input  type="submit" value="Konfirmasi" class="btn btn-primary"></button>
          	<!-- <a href='barang/siapkan.php?id=<?php echo $user_data['id_transaksi'] ?>'  class='btn btn-primary'> -->
	      <!-- Konfirmasi -->
	<!-- </button></td> -->
        </tr><?php          
    }
    ?>				
				</tbody>
			</table>
		</div>
	</form>



			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form class="form-sign" name="login" class="expose" method="POST" action="driver/siapkan.php" target="_self" onSubmit="return validasi(this)">
        <h1 class="display-5 text-center mb-5">
          <img src="images/admin.png" style="width: 60px">
          Pilih Driver
        </h1>



        <select name="driver">
        	<?php

        		 while($driver = mysqli_fetch_array($drivers)) {         
      echo "<option class='form-control' value=$driver[nama_lengkap]>$driver[nama_lengkap]</option>";          
    } 
        	 ?>
        </select>

        
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" name="Submit" class="btn btn-primary" value="Kirim" ></button>

      </div>
      </div>
      </form>
  </div>
</div>