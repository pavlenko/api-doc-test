<?php

namespace PE\ApiTest\OA\Auth\DTO;

use OpenApi\Attributes as OA;

#[OA\Schema]
final class LoginResponse
{
    #[OA\Property(description: 'JWT token', example: 'eyJhbGciOiJIUzI1NiI9.eyJuYW1lIjo.DjwRE2jZhren2Wt37t5hlVru6M')]
    public string $token;
}