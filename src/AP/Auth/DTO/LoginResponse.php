<?php

namespace PE\ApiTest\AP\Auth\DTO;

use ApiPlatform\Metadata as AP;

final class LoginResponse
{
    #[AP\ApiProperty(
        description: 'JWT token',
        readable: true,//<-- required for show in docs
        example: 'eyJhbGciOiJIUzI1NiI9.eyJuYW1lIjo.DjwRE2jZhren2Wt37t5hlVru6M',
        schema: ['type' => 'string']
    )]
    public string $token;
}