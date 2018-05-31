<!DOCTYPE html>
<html>
<head>
    <title> Beranda - Travel</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/plan.ico">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <h3 class="panel-title"><i class="fa fa-dashboard"></i> Beranda</h3>

      <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php echo base_url(); ?>assets/img/Jakarta.jpg" alt="pesawat" id="img">
        <div class="carousel-caption">
        <h3>Jakarta</h3>
          <p>Travel Menyediakan Pembelian Tiket Pesawat Domestik</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url(); ?>assets/img/Jogja.jpg" id="img">
        <div class="carousel-caption">
          <h3>Yogyakarta</h3>
          <p>Travel Menyediakan Pembelian Tiket Pesawat Domestik</p>
      </div>
        </div>
    
      <div class="item">
       <img src="<?php echo base_url(); ?>assets/img/Makassar.jpg" id="img">
        <div class="carousel-caption">
          <h3>Makassar</h3>
          <p>Travel Menyediakan Pembelian Tiket Pesawat Domestik</p>
      </div>
        </div>

      <div class="item">
        <img src="<?php echo base_url(); ?>assets/img/Raja Ampat.jpg" id="img">
        <div class="carousel-caption">
          <h3>Raja Ampat</h3>
          <p>Travel Menyediakan Pembelian Tiket Pesawat Domestik</p>
      </div>
        </div>
      <div class="item">
        <img src="<?php echo base_url(); ?>assets/img/Bali.jpg" id="img">
        <div class="carousel-caption">
          <h3>Bali</h3>
          <p>Travel Menyediakan Pembelian Tiket Pesawat Domestik</p>
      </div>
    </div>
  </div>
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> 
</div> 


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>