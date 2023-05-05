<?php

namespace PE\ApiTest\OA\Media;

use OpenApi\Attributes as OA;
use PE\ApiTest\OA\Media\DTO\MediaResponse;
use PE\ApiTest\OA\Response\Response401;

#[OA\Get(
    path: '/api/v1/media',
    summary: 'Get media collection',
    tags: ['Media'],
    responses: [
        new OA\Response(response: 401, description: Response401::DESCRIPTION, content: new Response401()),
    ]
)]
#[OA\Response(
    response: 200,
    description: 'Media data',
    content: new OA\JsonContent(items: new OA\Items(ref: MediaResponse::class)),
)]
final class GetMediaCollectionAction
{
}
