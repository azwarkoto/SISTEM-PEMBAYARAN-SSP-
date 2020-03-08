<?php

require_once('lib/view.php');

$data['title'] = "";
$data['page'] = "v_sejarahkepsek.php";
require_once View::getView('dashboard_kepsek.php', $data);