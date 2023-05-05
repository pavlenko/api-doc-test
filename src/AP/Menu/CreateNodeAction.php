<?php

namespace PE\ApiTest\AP\Menu;

use ApiPlatform\Metadata as AP;
use ApiPlatform\OpenApi\Model\Operation;
use ApiPlatform\OpenApi\Model\Parameter;
use ApiPlatform\OpenApi\Model\Response;
use PE\ApiTest\AP\Menu\DTO\CreateNodeDTO;
use PE\ApiTest\AP\Menu\DTO\NodeResponse;

#[AP\Post(
    uriTemplate: '/api/v1/menu',
    inputFormats: ['json' => ['application/json']],
    outputFormats: ['json' => ['application/json']],
    openapi: new Operation(
        responses: [
            '401' => new Response(
                description: 'Invalid credentials',
                content: new \ArrayObject([
                    'application/json' => ['schema' => ['$ref' => '#/components/schemas/Response401']],
                ])
            ),
        ],
        summary: 'Create node',
        description: '',
    ),
    shortName: 'Menu',
    input: CreateNodeDTO::class,
    output: NodeResponse::class
)]
final class CreateNodeAction
{
}