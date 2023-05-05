<?php

namespace PE\ApiTest\OA\Auth;

use OpenApi\Attributes as OA;
use PE\ApiTest\OA\Auth\DTO\LoginDTO;
use PE\ApiTest\OA\Auth\DTO\LoginResponse;
use PE\ApiTest\OA\Response\Response400;
use PE\ApiTest\OA\Response\Response401;
use PE\ApiTest\OA\Response\Response422;

#[OA\Post(
    path: '/api/v1/auth/login',
    summary: 'Login',
    security: [],
    requestBody: new OA\RequestBody(content: new OA\JsonContent(ref: LoginDTO::class)),
    tags: ['Auth'],
    responses: [
        new OA\Response(response: 400, description: Response400::DESCRIPTION, content: new Response400()),
        new OA\Response(response: 401, description: Response401::DESCRIPTION, content: new Response401()),
        new OA\Response(response: 422, description: Response422::DESCRIPTION, content: new Response422()),
    ]
)]
#[OA\Response(
    response: 200,
    description: 'Returns JWT token',
    content: new OA\JsonContent(ref: LoginResponse::class)
)]
final class LoginAction
{
}
