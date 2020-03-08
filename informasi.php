<?php

require_once('lib/view.php');

$data['title'] = "";
$data['page'] = "v_informasi.php";
require_once View::getView('dashboard_siswa.php', $data);