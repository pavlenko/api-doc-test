<?php

namespace PE\ApiTest\AP\Media\DTO;

use ApiPlatform\Metadata as AP;

final class UpdateMediaDTO
{
    #[AP\ApiProperty(
        description: 'Filename',
        writable: true,//<-- required for show in docs
        required: true,
        example: 'Image.png',
        schema: ['type' => 'string']
    )]
    public string $name;
}