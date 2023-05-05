<?php

namespace PE\ApiTest\AP\Menu;

use ApiPlatform\Metadata as AP;
use ApiPlatform\OpenApi\Model\Operation;
use ApiPlatform\OpenApi\Model\Parameter;
use ApiPlatform\OpenApi\Model\Response;
use PE\ApiTest\AP\Menu\DTO\NodeResponse;
use PE\ApiTest\AP\Response\Response401;
use PE\ApiTest\AP\Response\Response404;

#[AP\Get(
    uriTemplate: '/api/v1/menu/{uuid}',
    outputFormats: ['json' => ['application/json']],
    openapi: new Operation(
        responses: [
            '401' => new Response(description: Response401::DESCRIPTION, content: new Response401()),
            '404' => new Response(description: Response404::DESCRIPTION, content: new Response404()),
        ],
        summary: 'Get node',
        description: '',
        parameters: [
            new Parameter(name: 'uuid', in: 'path', description: 'UUID', required: true, schema: ['type' => 'string'])
        ]
    ),
    shortName: 'Menu',
    output: NodeResponse::class,
)]
final class GetNodeAction
{
}
