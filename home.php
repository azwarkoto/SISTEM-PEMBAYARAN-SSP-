<?php

require_once('lib/view.php');

$data['title'] = "SMA BUDAYA DJAKARTA";
$data['page'] = "v_home.php";
require_once View::getView('dashboard.php', $data);