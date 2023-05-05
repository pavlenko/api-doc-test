<?php

namespace PE\ApiTest\OA\Menu;

use OpenApi\Attributes as OA;
use PE\ApiTest\OA\Menu\DTO\CreateNodeDTO;
use PE\ApiTest\OA\Menu\DTO\NodeResponse;
use PE\ApiTest\OA\Response\Response400;
use PE\ApiTest\OA\Response\Response401;
use PE\ApiTest\OA\Response\Response404;
use PE\ApiTest\OA\Response\Response422;

#[OA\Post(
    path: '/api/v1/menu',
    summary: 'Create node',
    requestBody: new OA\RequestBody(content: new OA\JsonContent(ref: CreateNodeDTO::class)),
    tags: ['Menu'],
    responses: [
        new OA\Response(response: 400, description: Response400::DESCRIPTION, content: new Response400()),
        new OA\Response(response: 401, description: Response401::DESCRIPTION, content: new Response401()),
        new OA\Response(response: 404, description: Response404::DESCRIPTION, content: new Response404()),
        new OA\Response(response: 422, description: Response422::DESCRIPTION, content: new Response422()),
    ]
)]
#[OA\Response(
    response: 200,
    description: 'Node data',
    content: new OA\JsonContent(ref: NodeResponse::class)
)]
final class CreateNodeAction
{
}
