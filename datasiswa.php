<?php

require_once('lib/view.php');

$data['title'] = "";
$data['page'] = "v_datasiswa.php";
require_once View::getView('dashboard.php', $data);