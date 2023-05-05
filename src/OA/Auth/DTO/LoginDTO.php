<?php

namespace PE\ApiTest\OA\Auth\DTO;

use OpenApi\Attributes as OA;

#[OA\Schema(required: ['username', 'password'])]
final class LoginDTO
{
    #[OA\Property(description: 'Username', example: 'user@test.com')]
    public string $username;

    #[OA\Property(description: 'Password', example: 'password')]
    public string $password;
}