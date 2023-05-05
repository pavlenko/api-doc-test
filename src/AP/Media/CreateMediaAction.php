<?php

namespace PE\ApiTest\AP\Media;

use ApiPlatform\Metadata as AP;
use ApiPlatform\OpenApi\Model\Operation;
use ApiPlatform\OpenApi\Model\RequestBody;
use ApiPlatform\OpenApi\Model\Response;
use PE\ApiTest\AP\Media\DTO\CreateMediaDTO;
use PE\ApiTest\AP\Media\DTO\MediaResponse;
use PE\ApiTest\AP\Response\Response400;
use PE\ApiTest\AP\Response\Response401;
use PE\ApiTest\AP\Response\Response422;

#[AP\Post(
    uriTemplate: '/api/v1/media',
    inputFormats: ['form' => ['multipart/form-data']],
    outputFormats: ['json' => ['application/json']],
    status: 200,
    openapi: new Operation(
        responses: [
            '400' => new Response(description: Response400::DESCRIPTION, content: new Response400()),
            '401' => new Response(description: Response401::DESCRIPTION, content: new Response401()),
            '422' => new Response(description: Response422::DESCRIPTION, content: new Response422()),
        ],
        summary: 'Create media',
        description: '',
    ),
    shortName: 'Media',
    input: CreateMediaDTO::class,
    output: MediaResponse::class
)]
final class CreateMediaAction
{
}
