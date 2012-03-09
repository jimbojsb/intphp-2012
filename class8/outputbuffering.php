<?php
ob_start();
include 'include.php';

$contents = ob_get_contents();
ob_end_clean();
var_dump($contents);