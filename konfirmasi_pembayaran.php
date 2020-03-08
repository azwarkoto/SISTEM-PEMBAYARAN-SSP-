<?php

require_once('lib/view.php');

$data['title'] = "";
$data['page'] = "v_konfirmasi_pembayaran.php";
require_once View::getView('dashboard.php', $data);