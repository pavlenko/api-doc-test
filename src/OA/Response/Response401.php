<?php

namespace PE\ApiTest\OA\Response;

use OpenApi\Attributes\JsonContent;
use OpenApi\Attributes\Property;

final class Response401 extends JsonContent
{
    public const DESCRIPTION = 'Invalid credentials';

    public function __construct()
    {
        parent::__construct(
        //ref: '#/components/schemas/401',
            properties: [
                new Property(
                    property: 'message',
                    description: 'Error message',
                    type: 'string',
                    example: 'Invalid credentials',
                ),
            ],
            type: 'object',
        );
    }
}
