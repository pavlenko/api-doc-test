<?php

namespace PE\ApiTest\AP\Auth\DTO;

use ApiPlatform\Metadata as AP;

final class LoginDTO
{
    #[AP\ApiProperty(
        description: 'Username',
        writable: true,//<-- required for show in docs
        required: true,
        example: 'user@test.com',
        schema: ['type' => 'string'],
    )]
    public string $username;

    #[AP\ApiProperty(
        description: 'Password',
        writable: true,//<-- required for show in docs
        required: true,
        example: 'password',
        schema: ['type' => 'string'],
    )]
    public string $password;
}