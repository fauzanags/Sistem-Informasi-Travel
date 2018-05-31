<!DOCTYPE html>
<html>
<head>
    <title> Data Pesanan - Travel</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/plan.ico">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo base_url('assets/css/bootstrap-datepicker3.css')?>" rel="stylesheet">
    <style type="text/css">
      .navbar {
        background-color: #005ce6;
        border-color: white;
      }
      .logout {
        color: black;
        margin-top: 10px;
      }
      .logo {
        color: black;
        font-size: 28px;
        margin-top: 10px;
      }
      ::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="Navbar-brand glyphicon glyphicon-plane logo"><b>GO</b>Travel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit" class="logout" ><i class="fa fa-sign-out logout"></i> Logout</a>
            </div>
      </div>
    </nav>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item active" style="text-align: center;background-color: #005ce6;border-color: white;color: black">
                ADMINISTRATOR
              </a>
              <a href="<?php echo base_url() ?>index.php/dashboard" class="list-group-item"><i class="fa fa-dashboard"></i> Beranda</a>
              <a href="<?php echo base_url(); ?>index.php/welcome/" class="list-group-item"><i class="fa fa-book"></i> Data Pesanan</a>
              <a href="<?php echo site_url('welcome/input') ?>" class="list-group-item"><i class="fa fa-pencil"></i> Tambah Pesanan</a>
    
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-book"></i> Tabel Pemesanan</h3>

      <br>

	<div id="body">
		<table class="table table-striped table-hover table-bordered" border="1">
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Kota Asal</td>
				<td>Tempat Tujuan</td>
				<td>Berangkat</td>
				<td>Pulang</td>
				<td>Penumpang</td>
				<td>Option</td>
			</tr>
			<?php
			$no = 1;
			Foreach($hasil as $r){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['nama'] ?></td>
				<td><?php echo $r['asal'] ?></td>
				<td><?php echo $r['tujuan'] ?></td>
				<td><?php echo $r['berangkat'] ?></td>
				<td><?php echo $r['pulang'] ?></td>
				<td><?php echo $r['penumpang'] ?></td>
				<td>
					<a href="<?php echo site_url('welcome/edit/' .$r['id']) ?>"><span class="fa fa-pencil"></span></a> 
					<a href="<?php echo site_url('welcome/delete/' .$r['id']) ?>" onclick="return confirm('yakin ingin menghapus data ?')"><span class="fa fa-trash"></span></a>
				</td>
			</tr>
			<?php } ?>
		</table>	
	</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
<script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            });
        </script>
</body>
</html>