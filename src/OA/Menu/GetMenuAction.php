<?php

namespace PE\ApiTest\OA\Menu;

use OpenApi\Attributes as OA;
use PE\ApiTest\OA\Menu\DTO\MenuResponse;
use PE\ApiTest\OA\Response\Response401;
use PE\ApiTest\OA\Response\Response404;

#[OA\Get(
    path: '/api/v1/menu/{uuid}/tree',
    summary: 'Get node tree',
    tags: ['Menu'],
    responses: [
        new OA\Response(response: 401, description: Response401::DESCRIPTION, content: new Response401()),
        new OA\Response(response: 404, description: Response404::DESCRIPTION, content: new Response404()),
    ]
)]
#[OA\Parameter(name: 'uuid', description: 'UUID', in: 'path', required: true, schema: new OA\Schema(type: 'string'))]
#[OA\Response(
    response: 200,
    description: 'Menu tree',
    content: new OA\JsonContent(ref: MenuResponse::class)
)]
final class GetMenuAction
{
}
