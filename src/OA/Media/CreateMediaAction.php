<?php

namespace PE\ApiTest\OA\Media;

use OpenApi\Attributes as OA;
use PE\ApiTest\OA\Media\DTO\CreateMediaDTO;
use PE\ApiTest\OA\Media\DTO\MediaResponse;
use PE\ApiTest\OA\Response\Response400;
use PE\ApiTest\OA\Response\Response401;
use PE\ApiTest\OA\Response\Response422;

#[OA\Post(
    path: '/api/v1/media',
    summary: 'Create media',
    requestBody: new OA\RequestBody(
        content: new OA\MediaType(mediaType: 'multipart/form-data', schema: new OA\Schema(ref: CreateMediaDTO::class))
    ),
    tags: ['Media'],
    responses: [
        new OA\Response(response: 400, description: Response400::DESCRIPTION, content: new Response400()),
        new OA\Response(response: 401, description: Response401::DESCRIPTION, content: new Response401()),
        new OA\Response(response: 422, description: Response422::DESCRIPTION, content: new Response422()),
    ]
)]
#[OA\Response(
    response: 200,
    description: 'Returns media data',
    content: new OA\JsonContent(ref: MediaResponse::class)
)]
final class CreateMediaAction
{
}
