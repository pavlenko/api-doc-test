<?php

namespace PE\ApiTest\AP\Media;

use ApiPlatform\Metadata as AP;
use ApiPlatform\OpenApi\Model\Operation;
use ApiPlatform\OpenApi\Model\Parameter;
use ApiPlatform\OpenApi\Model\Response;
use PE\ApiTest\AP\Media\DTO\MediaResponse;
use PE\ApiTest\AP\Response\Response401;
use PE\ApiTest\AP\Response\Response404;

#[AP\Delete(
    uriTemplate: '/api/v1/media/{uuid}',
    inputFormats: ['json' => ['application/json']],
    status: 204,
    openapi: new Operation(
        responses: [
            '401' => new Response(description: Response401::DESCRIPTION, content: new Response401()),
            '404' => new Response(description: Response404::DESCRIPTION, content: new Response404()),
        ],
        summary: 'Delete media',
        description: '',
        parameters: [
            new Parameter(name: 'uuid', in: 'path', description: 'UUID', required: true, schema: ['type' => 'string'])
        ]
    ),
    shortName: 'Media',
    output: MediaResponse::class,
)]
final class DeleteMediaAction
{
}
