<?php 
// proteksi halaman admin dengan funngsi cek login

$this->simple_login->cek_login();
$this->simple_login->cek_login_admin();

require_once('head.php');
require_once('header.php');
require_once('nav.php');
require_once('content.php');
require_once('footer.php');

 ?>