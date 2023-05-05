<?php

namespace PE\ApiTest\AP\Response;

use ApiPlatform\OpenApi\Model\MediaType;

final class Response422 extends \ArrayObject
{
    public const DESCRIPTION = 'Invalid request data';

    public function __construct()
    {
        parent::__construct([
            'application/json' => new MediaType(schema: new \ArrayObject([
                //'$ref' => '#/components/schemas/422',
                'type'       => 'object',
                'properties' => [
                    'message' => [
                        'type'        => 'string',
                        'description' => 'Error message',
                        'example'     => 'Validation errors in your request',
                    ],
                    'violations' => [
                        'type'        => 'array',
                        'description' => 'Validation errors',
                        'items'       => [
                            'type'       => 'object',
                            'properties' => [
                                'property' => [
                                    'type'        => 'string',
                                    'description' => 'Property on which violation occurred',
                                    'example'     => 'user.email',
                                ],
                                'message' => [
                                    'type'        => 'string',
                                    'description' => 'Error message',
                                    'example'     => 'Invalid email',
                                ],
                            ],
                        ]
                    ]
                ],
            ]))
        ]);
    }
}
