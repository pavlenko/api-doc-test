<?php

namespace PE\ApiTest\AP\Menu;

use ApiPlatform\Metadata as AP;
use ApiPlatform\OpenApi\Model\Operation;
use ApiPlatform\OpenApi\Model\Response;
use PE\ApiTest\AP\Menu\DTO\NodeResponse;
use PE\ApiTest\AP\Response\Response401;

#[AP\GetCollection(
    uriTemplate: '/api/v1/menu',
    outputFormats: ['json' => ['application/json']],
    openapi: new Operation(
        responses: [
            '401' => new Response(description: Response401::DESCRIPTION, content: new Response401()),
        ],
        summary: 'Get node collection',
        description: '',
    ),
    shortName: 'Menu',
    paginationEnabled: false,
    output: NodeResponse::class
)]
final class GetNodeCollectionAction
{
}
