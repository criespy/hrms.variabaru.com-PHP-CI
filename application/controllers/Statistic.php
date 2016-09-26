<?php if(! defined('BASEPATH')) exit('no direct script access allowed');

class Statistic extends CI_Controller(){

  function __construct(){
    parent::__construct();
  }

  function index(){

  }

  function cek_koneksi_vpn(){
    $lokasi = array(
      "dso" => "192.168.4.1",
      "scy" => "192.168.6.1",
      "iso" => "192.168.7.1",
      "ccy" => "192.168.5.1",
      "slake" => "192.168.8.1",
      "fln" => "10.35.0.1");


  }
}
