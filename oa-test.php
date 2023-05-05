<?php

namespace PE\ApiTest;


use PE\ApiTest\OA\API;

require_once __DIR__ . '/vendor/autoload.php';

$api = new API();
$data = $api->generate();
dump(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));