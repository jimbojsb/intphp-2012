<?php
//echo "hello" . PHP_EOL;
echo $argv[1] . PHP_EOL;

echo php_sapi_name() . PHP_EOL;

$output = shell_exec("ls -la");
echo $output;