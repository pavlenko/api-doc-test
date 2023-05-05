<?php

namespace PE\ApiTest\AP\Menu;

use ApiPlatform\Metadata as AP;
use ApiPlatform\OpenApi\Model\Operation;
use ApiPlatform\OpenApi\Model\Parameter;
use ApiPlatform\OpenApi\Model\Response;
use PE\ApiTest\AP\Menu\DTO\CreateNodeDTO;
use PE\ApiTest\AP\Menu\DTO\NodeResponse;
use PE\ApiTest\AP\Response\Response400;
use PE\ApiTest\AP\Response\Response401;
use PE\ApiTest\AP\Response\Response404;
use PE\ApiTest\AP\Response\Response422;

#[AP\Put(
    uriTemplate: '/api/v1/menu/{uuid}',
    inputFormats: ['json' => ['application/json']],
    outputFormats: ['json' => ['application/json']],
    status: 200,
    openapi: new Operation(
        responses: [
            '400' => new Response(description: Response400::DESCRIPTION, content: new Response400()),
            '401' => new Response(description: Response401::DESCRIPTION, content: new Response401()),
            '404' => new Response(description: Response404::DESCRIPTION, content: new Response404()),
            '422' => new Response(description: Response422::DESCRIPTION, content: new Response422()),
        ],
        summary: 'Update node',
        description: '',
        parameters: [
            new Parameter(name: 'uuid', in: 'path', description: 'UUID', required: true, schema: ['type' => 'string'])
        ]
    ),
    shortName: 'Menu',
    input: CreateNodeDTO::class,
    output: NodeResponse::class
)]
final class UpdateNodeAction
{
}
