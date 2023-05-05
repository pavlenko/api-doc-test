<?php

namespace PE\ApiTest\AP\Response;

use ApiPlatform\OpenApi\Model\MediaType;

final class Response403 extends \ArrayObject
{
    public const DESCRIPTION = 'Permission denied';

    public function __construct()
    {
        parent::__construct([
            'application/json' => new MediaType(schema: new \ArrayObject([
                //'$ref' => '#/components/schemas/403',
                'type'       => 'object',
                'properties' => [
                    'message' => [
                        'type'        => 'string',
                        'description' => 'Error message',
                        'example'     => 'Permission denied',
                    ],
                ],
            ]))
        ]);
    }
}
