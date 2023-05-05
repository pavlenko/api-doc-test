<?php

namespace PE\ApiTest\OA\Response;

use OpenApi\Attributes\JsonContent;
use OpenApi\Attributes\Property;

final class Response400 extends JsonContent
{
    public const DESCRIPTION = 'Invalid request format';

    public function __construct()
    {
        parent::__construct(
            //ref: '#/components/schemas/400',
            properties: [
                new Property(
                    property: 'message',
                    description: 'Error message',
                    type: 'string',
                    example: 'Invalid request format',
                ),
            ],
            type: 'object',
        );
    }
}
