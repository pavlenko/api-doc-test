<?php

namespace PE\ApiTest\OA\Media;

use OpenApi\Attributes as OA;
use PE\ApiTest\OA\Media\DTO\MediaResponse;
use PE\ApiTest\OA\Media\DTO\UpdateMediaDTO;
use PE\ApiTest\OA\Response\Response400;
use PE\ApiTest\OA\Response\Response401;
use PE\ApiTest\OA\Response\Response404;
use PE\ApiTest\OA\Response\Response422;

#[OA\Put(
    path: '/api/v1/media/{uuid}',
    summary: 'Update media',
    requestBody: new OA\RequestBody(content: new OA\JsonContent(ref: UpdateMediaDTO::class)),
    tags: ['Media'],
    responses: [
        new OA\Response(response: 400, description: Response400::DESCRIPTION, content: new Response400()),
        new OA\Response(response: 401, description: Response401::DESCRIPTION, content: new Response401()),
        new OA\Response(response: 404, description: Response404::DESCRIPTION, content: new Response404()),
        new OA\Response(response: 422, description: Response422::DESCRIPTION, content: new Response422()),
    ]
)]
#[OA\Parameter(name: 'uuid', description: 'UUID', in: 'path', required: true, schema: new OA\Schema(type: 'string'))]
#[OA\Response(
    response: 200,
    description: 'Media data',
    content: new OA\JsonContent(ref: MediaResponse::class),
)]
final class UpdateMediaAction
{
}
