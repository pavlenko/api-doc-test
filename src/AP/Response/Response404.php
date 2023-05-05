<?php

namespace PE\ApiTest\AP\Response;

use ApiPlatform\OpenApi\Model\MediaType;

final class Response404 extends \ArrayObject
{
    public const DESCRIPTION = 'Record not found';

    public function __construct()
    {
        parent::__construct([
            'application/json' => new MediaType(schema: new \ArrayObject([
                //'$ref' => '#/components/schemas/404',
                'type'       => 'object',
                'properties' => [
                    'message' => [
                        'type'        => 'string',
                        'description' => 'Error message',
                        'example'     => 'Record not found',
                    ],
                ],
            ]))
        ]);
    }
}
