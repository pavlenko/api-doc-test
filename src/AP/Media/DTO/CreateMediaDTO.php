<?php

namespace PE\ApiTest\AP\Media\DTO;

use ApiPlatform\Metadata as AP;

final class CreateMediaDTO
{
    #[AP\ApiProperty(
        description: 'File to upload',
        writable: true,//<-- required for show in docs
        required: true,
        example: 'Image.png',
        schema: ['type' => 'string <binary>'],
    )]
    public string $file;
}