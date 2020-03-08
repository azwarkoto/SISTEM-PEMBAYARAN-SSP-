<?php

require_once('lib/view.php');

$data['title'] = "";
$data['page'] = "v_backupdata.php";
require_once View::getView('dashboard.php', $data);