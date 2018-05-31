<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<div class="col-md-12">
			<?php echo form_open('pesanan/simpan') ?>

			<div class="form-group">
				<label for="text"> Nama</label>
				<input type="text" name="nama" placeholder="Masukan Nama">
			</div>

			<div class="form-group">
				<label for="text"> Kota Asal</label>
				<input type="text" name="asal" placeholder="Masukan Kota Asal">
			</div>

			<div class="form-group">
				<label for="text"> Kota Tujuan</label>
				<input type="text" name="tujuan" placeholder="Masukan Kota Tujuan">
			</div>

			<div class="form-group">
				<label for="text"> Tanggal Berangkat</label>
				<input type="date" name="berangkat" placeholder="YYYY-MM-DD">
			</div>

			<div class="form-group">
				<label for="text"> Tanggal Pulang</label>
				<input type="date" name="pulang" placeholder="YYYY-MM-DD">
			</div>

			<div class="form-group">
				<label for="text"> Penumpang</label>
				<input type="text" name="penumpang" placeholder="Masukan jumlah penumpang">
			</div>

		<button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>	
			
		</div><!--form open-->
		
	</div><!--container-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>