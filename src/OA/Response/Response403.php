<?php

namespace PE\ApiTest\OA\Response;

use OpenApi\Attributes\JsonContent;
use OpenApi\Attributes\Property;

final class Response403 extends JsonContent
{
    public const DESCRIPTION = 'Permission denied';

    public function __construct()
    {
        parent::__construct(
            //ref: '#/components/schemas/403',
            properties: [
                new Property(
                    property: 'message',
                    description: 'Error message',
                    type: 'string',
                    example: 'Permission denied',
                ),
            ],
            type: 'object',
        );
    }
}
