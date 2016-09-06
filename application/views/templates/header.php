<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <!--<meta name="viewport" content="width=device-width, initial-scale=1" />-->
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=medium-dpi" />
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/simple-sidebar.css ">
  <script src="<?php echo base_url(); ?>jquery/jquery-3.1.0.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

  <style>
    .jumbotron-vb {
      background-color: #05568D;
      color: #ffffff;
      margin-bottom: 0;
    }
    .btn-vb {
      background-color: #05568D;
      color: #ffffff;
    }
    .footer {
      font-size: 12px;
      height: 20px;
      bottom: 0;
      width: 100%;
      position: absolute;
    }
    .user-info {
      padding-right: 15px;
    }
    .row {
      padding: 0px;
    }
    .nav-vb {
      background-color: #dae5ed;
    }
    .menu-hider {
      height: 100%;
    }
    .nomor_sb_result {
      border: 0;
      background-color: rgba(255,255,255,0);
    }
  </style>
<title><?php echo $page_title; ?></title>
</head>
<div class="jumbotron jumbotron-vb row navbar-fixed-top">
  <div class="row">
      <div class="col-sm-6">
        <h3 class="text-left"><?php $company_name="PT. Varia Baru";
        echo $company_name; ?></h3>
      </div>

      <div class="col-sm-6">
        <h3 class="text-right">ITMS</h3>
      </div>
  </div>
</div>
<body>
