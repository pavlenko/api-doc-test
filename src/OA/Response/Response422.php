<?php

namespace PE\ApiTest\OA\Response;

use OpenApi\Attributes\Items;
use OpenApi\Attributes\JsonContent;
use OpenApi\Attributes\Property;

final class Response422 extends JsonContent
{
    public const DESCRIPTION = 'Invalid request data';

    public function __construct()
    {
        parent::__construct(
        //ref: '#/components/schemas/400',
            properties: [
                new Property(
                    property: 'message',
                    description: 'Error message',
                    type: 'string',
                    example: 'Validation errors in your request',
                ),
                new Property(
                    property: 'violations',
                    description: 'Validation errors',
                    type: 'array',
                    items: new Items(
                        properties: [
                            new Property(
                                property: 'property',
                                description: 'Property on which violation occurred',
                                type: 'string',
                                example: 'user.email',
                            ),
                            new Property(
                                property: 'message',
                                description: 'Error message',
                                type: 'string',
                                example: 'Invalid email',
                            ),
                        ],
                        type: 'object',
                    ),
                ),
            ],
            type: 'object',
        );
    }
}
