<?php

namespace PE\ApiTest\AP\Response;

use ApiPlatform\OpenApi\Model\MediaType;

final class Response401 extends \ArrayObject
{
    public const DESCRIPTION = 'Invalid credentials';

    public function __construct()
    {
        parent::__construct([
            'application/json' => new MediaType(schema: new \ArrayObject([
                //'$ref' => '#/components/schemas/401',
                'type'       => 'object',
                'properties' => [
                    'message' => [
                        'type'        => 'string',
                        'description' => 'Error message',
                        'example'     => 'Invalid credentials',
                    ],
                ],
            ]))
        ]);
    }
}
