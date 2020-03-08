<?php

require_once('lib/view.php');

$data['title'] = "";
$data['page'] = "v_laporantransaksibulanansiswa.php";
require_once View::getView('dashboard_kepsek.php', $data);
