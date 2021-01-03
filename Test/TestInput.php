<?php

require_once "../Helper/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;

$channel = input("Channel");
echo $channel . PHP_EOL;
