<?php

namespace PE\ApiTest\AP\Media;

use ApiPlatform\Metadata as AP;
use ApiPlatform\OpenApi\Model\Operation;
use ApiPlatform\OpenApi\Model\Response;
use PE\ApiTest\AP\Media\DTO\MediaResponse;
use PE\ApiTest\AP\Response\Response400;
use PE\ApiTest\AP\Response\Response401;
use PE\ApiTest\AP\Response\Response422;

#[AP\GetCollection(
    uriTemplate: '/api/v1/media',
    inputFormats: ['json' => ['application/json']],
    outputFormats: ['json' => ['application/json']],
    status: 200,
    openapi: new Operation(
        responses: [
            '401' => new Response(description: Response401::DESCRIPTION, content: new Response401()),
        ],
        summary: 'Get media collection',
        description: '',
    ),
    shortName: 'Media',
    paginationEnabled: false,
    output: MediaResponse::class
)]
final class GetMediaCollectionAction
{
}
