<?php
ob_start();
require_once('lib/view.php');
require_once View::getView('v_logoutkepsek.php');
ob_flush();
?>