<!DOCTYPE html>
<html>
<head>
	<title><? echo $tittle ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container" style="margin-top:80px">
		<div class="col-md-12">
			<?php echo form_open('pesanan/update') ?>

			<div class="form-group">
				<label for="text">Nama</label>
				<input type="text" name="nama" value="<?php echo $data_pesanan->nama ?>" class="form-control">
				<input type="hidden" value="<?php echo $data_pesanan->id ?>" name="nama">
			</div>
			
			<div class="form-group">
				<label for="text">Kota Asal</label>
				<input type="text" name="asal" value="<?php echo $data_pesanan->asal ?>" class="form-control">
			</div>

			<div class="form-group">
				<label for="text">Kota Tujuan</label>
				<input type="text" name="tujuan" value="<?php echo $data_pesanan->tujuan ?>" class="form-control">
			</div>

			<div class="form-group">
				<label for="text">Tanggal Berangkat</label>
				<input type="text" name="berangkat" value="<?php echo $data_pesanan->berangkat ?>" class="form-control">
			</div>

			<div class="form-group">
				<label for="text">Tanggal Pulang</label>
				<input type="text" name="pulang" value="<?php echo $data_pesanan->pulang ?>" class="form-control">
			</div>

			<div class="form-group">
				<label for="text">Penumpang</label>
				<input type="text" name="penumpang" value="<?php echo $data_pesanan->penumpang ?>" class="form-control">
			</div>

			<button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
             <?php echo form_close() ?> 
		</div>

	</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>