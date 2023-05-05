<?php

namespace PE\ApiTest\OA;

use OpenApi\Annotations\OpenApi;
use OpenApi\Attributes as OA;
use OpenApi\Generator;

#[OA\Info(version: '1.0', title: 'API')]
#[OA\PathItem(path: '/api/v1')]
#[OA\SecurityScheme(
    securityScheme: 'Bearer',
    type: 'http',
    bearerFormat: 'JWT',
    scheme: 'bearer',
)]
#[OA\OpenApi(security: [['Bearer' => []]])]
final class API
{
    public function generate(): ?OpenApi
    {
        return Generator::scan([__DIR__]);
    }
}
