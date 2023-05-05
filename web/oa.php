<?php

namespace PE\ApiTest;

use PE\ApiTest\OA\API;

require_once __DIR__ . '/../vendor/autoload.php';

$api = new API()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>API (OpenApi)</title>
    <style>
        html {
            box-sizing: border-box;
            overflow-y: scroll;
        }
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        body {
            margin: 0;
        }
    </style>
</head>
<body>
<div id="doc"></div>
<script src="redoc.standalone.js"></script>
<script>
    Redoc.init(
        <?php echo json_encode($api->generate(), JSON_UNESCAPED_SLASHES|JSON_HEX_TAG|JSON_PRETTY_PRINT) ?>,
        {scrollYOffset: 0},
        document.getElementById('doc')
    )
</script>
</body>
</html>
