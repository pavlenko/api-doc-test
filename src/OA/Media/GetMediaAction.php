<?php

namespace PE\ApiTest\OA\Media;

use OpenApi\Attributes as OA;
use PE\ApiTest\OA\Media\DTO\MediaResponse;
use PE\ApiTest\OA\Response\Response401;
use PE\ApiTest\OA\Response\Response404;

#[OA\Get(
    path: '/api/v1/media/{uuid}',
    summary: 'Get media',
    tags: ['Media'],
    responses: [
        new OA\Response(response: 401, description: Response401::DESCRIPTION, content: new Response401()),
        new OA\Response(response: 404, description: Response404::DESCRIPTION, content: new Response404()),
    ]
)]
#[OA\Parameter(name: 'uuid', description: 'UUID', in: 'path', required: true, schema: new OA\Schema(type: 'string'))]
#[OA\Response(
    response: 200,
    description: 'Media data',
    content: new OA\JsonContent(ref: MediaResponse::class)
)]
final class GetMediaAction
{
}
