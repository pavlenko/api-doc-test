<?php

namespace PE\ApiTest\OA\Media;

use OpenApi\Attributes as OA;
use PE\ApiTest\OA\Response\Response401;
use PE\ApiTest\OA\Response\Response404;

#[OA\Delete(
    path: '/api/v1/media/{uuid}',
    summary: 'Delete media',
    tags: ['Media'],
    responses: [
        new OA\Response(response: 401, description: Response401::DESCRIPTION, content: new Response401()),
        new OA\Response(response: 404, description: Response404::DESCRIPTION, content: new Response404()),
    ]
)]
#[OA\Parameter(name: 'uuid', description: 'UUID', in: 'path', required: true, schema: new OA\Schema(type: 'string'))]
#[OA\Response(
    response: 204,
    description: 'Media successfully deleted',
)]
final class DeleteMediaAction
{
}
