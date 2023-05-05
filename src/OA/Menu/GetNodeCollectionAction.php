<?php

namespace PE\ApiTest\OA\Menu;

use OpenApi\Attributes as OA;
use PE\ApiTest\OA\Menu\DTO\NodeResponse;
use PE\ApiTest\OA\Response\Response401;

#[OA\Get(
    path: '/api/v1/menu',
    summary: 'Get node collection',
    tags: ['Menu'],
    responses: [
        new OA\Response(response: 401, description: Response401::DESCRIPTION, content: new Response401()),
    ]
)]
#[OA\Response(
    response: 200,
    description: 'Node data',
    content: new OA\JsonContent(items: new OA\Items(ref: NodeResponse::class)),
)]
final class GetNodeCollectionAction
{
}
