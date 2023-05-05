<?php

namespace PE\ApiTest\AP\Response;

use ApiPlatform\OpenApi\Model\MediaType;

final class Response400 extends \ArrayObject
{
    public const DESCRIPTION = 'Invalid request format';

    public function __construct()
    {
        parent::__construct([
            'application/json' => new MediaType(schema: new \ArrayObject([
                //'$ref' => '#/components/schemas/400',
                'type'       => 'object',
                'properties' => [
                    'message' => [
                        'type'        => 'string',
                        'description' => 'Error message',
                        'example'     => 'Invalid request format',
                    ],
                ],
            ]))
        ]);
    }
}
