<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top:80px">
		<?php echo $this->session->flashdata('notif') ?>
		<a href="<?php echo base_url() ?>pesanan/tambah/" class="btn btn-md btn-success">Tambah Pesanan</a>

		<hr>
		<!--table-->
		<div class="tabel-responsive">
			<table id="table" class="table table-striped table-bordered table-hover">

				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>Kota Asal</th>
						<th>Kota Tujuan</th>
						<th>Tanggal Berangkata</th>
						<th>Tanggal Pulang</th>
						<th>Penumpang</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$no = 1;
					foreach($data_pesanan as $value) { 
				?>

					<tr>
						<th><?php echo $no++ ?></th>
						<th><?php echo $value->nama ?></th>
						<th><?php echo $value->asal ?></th>
						<th><?php echo $value->tujuan ?></th>
						<th><?php echo $value->berangkat ?></th>
						<th><?php echo $value->pulang ?></th>
						<th><?php echo $value->penumpang ?></th>
						<th><a href="<?php echo base_url() ?>pesanan/edit/<?php echo $value->id ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>pesanan/hapus/<?php echo $value->id ?>" class="btn btn-sm btn-danger">Hapus</a></th>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div><!--table responsive-->
	</div><<!--container-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>