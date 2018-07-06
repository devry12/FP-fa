<div class="container">

<form class="form-sign"  class="expose" method="POST" action="" >
	<div class="row">
	  <div class="col col-md-4 col-lg-4">
	    <div class="form-group">
	      <label>Name Barang</label>
	      <select class="form-control" name="nama_barang">
					<?php foreach ($GetAllBar as $data): ?>
						<option value="<?=$data['id_barang']?>"><?=$data['nama_barang']?></option>
					<?php endforeach; ?>
	      </select>
	      <!-- <small class="text-danger">Field name is required.</small> -->
	    </div>
	  </div>
	  <div class="col col-md-4 col-lg-4">
	    <div class="form-group">
	      <label>Jumlah Barang</label>
	      <input type="text" name="jumlah_barang" class="form-control">
	      <!-- <small class="text-danger">Field email is invalid.</small> -->
	    </div>
	  </div>
	  <div class="col col-md-4 col-lg-4">
	    <div class="form-group">
	      <label>Tujuan</label>
	      <input type="text" name="tujuan" class="form-control">
	      <!-- <small class="text-danger">Field name is required.</small> -->
	    </div>
	  </div>
	</div>
	<div class="form-group">
		<input type="submit" name="Submit" class="btn btn-success">
	</div>
</form>
</div>
