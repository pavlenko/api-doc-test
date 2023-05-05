<?php

namespace PE\ApiTest\OA\Media\DTO;

use OpenApi\Attributes as OA;

#[OA\Schema(required: ['name'])]
final class UpdateMediaDTO
{
    #[OA\Property(description: 'Filename', example: 'Image.png')]
    public string $name;
}