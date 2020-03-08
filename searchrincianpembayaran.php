<?php
ob_start();
require_once('lib/view.php');
$data['title'] = "";
$data['page'] = "v_searchrincianpembayaran.php";
require_once View::getView('dashboard.php', $data);
ob_flush();
?>


