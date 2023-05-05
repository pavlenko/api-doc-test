<?php

namespace PE\ApiTest\AP\Auth;

use ApiPlatform\Metadata as AP;
use ApiPlatform\OpenApi\Model\Operation;
use ApiPlatform\OpenApi\Model\Response;
use PE\ApiTest\AP\Auth\DTO\LoginDTO;
use PE\ApiTest\AP\Auth\DTO\LoginResponse;
use PE\ApiTest\AP\Response\Response400;
use PE\ApiTest\AP\Response\Response401;
use PE\ApiTest\AP\Response\Response422;

#[AP\Post(
    uriTemplate: '/api/v1/auth/login',
    inputFormats: ['json' => ['application/json']],
    outputFormats: ['json' => ['application/json']],
    status: 200,
    openapi: new Operation(
        responses: [
            '400' => new Response(description: Response400::DESCRIPTION, content: new Response400()),
            '401' => new Response(description: Response401::DESCRIPTION, content: new Response401()),
            '422' => new Response(description: Response422::DESCRIPTION, content: new Response422()),
        ],
        summary: 'Login',
        description: '',
        security: []
    ),
    shortName: 'Auth',
    input: LoginDTO::class,
    output: LoginResponse::class,
)]
final class LoginAction
{
}
