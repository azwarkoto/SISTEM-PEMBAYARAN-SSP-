<?php

require_once('lib/view.php');

$data['title'] = "Pembayaran";
$data['page'] = "v_pembayaran.php";
require_once View::getView('dashboard.php', $data);