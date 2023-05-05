<?php

namespace PE\ApiTest\OA\Response;

use OpenApi\Attributes\JsonContent;
use OpenApi\Attributes\Property;

final class Response404 extends JsonContent
{
    public const DESCRIPTION = 'Record not found';

    public function __construct()
    {
        parent::__construct(
            //ref: '#/components/schemas/404',
            properties: [
                new Property(
                    property: 'message',
                    description: 'Error message',
                    type: 'string',
                    example: 'Record not found',
                ),
            ],
            type: 'object',
        );
    }
}
