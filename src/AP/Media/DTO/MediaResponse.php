<?php

namespace PE\ApiTest\AP\Media\DTO;

use ApiPlatform\Metadata as AP;

final class MediaResponse
{
    #[AP\ApiProperty(
        description: 'UUID',
        readable: true,//<-- required for show in docs
        example: '0742ae20-4e9d-466d-a517-d75cdf74cb5c',
        schema: ['type' => 'string']
    )]
    public string $uuid;

    #[AP\ApiProperty(
        description: 'Filename',
        readable: true,//<-- required for show in docs
        example: 'Image.png',
        schema: ['type' => 'string']
    )]
    public string $name;

    #[AP\ApiProperty(
        description: 'Filepath',
        readable: true,//<-- required for show in docs
        example: '/uploads/0742ae20-4e9d-466d-a517-d75cdf74cb5c-image.png',
        schema: ['type' => 'string']
    )]
    public string $path;

    #[AP\ApiProperty(
        description: 'Creation date/time',
        readable: true,//<-- required for show in docs
        example: '2000-01-01 12:00:00',
        schema: ['type' => 'string <date-time>']
    )]
    public \DateTimeInterface $createdAt;

    #[AP\ApiProperty(
        description: 'Last update date/time',
        readable: true,//<-- required for show in docs
        example: '2000-01-01 12:00:00',
        schema: ['type' => 'string <date-time>']
    )]
    public \DateTimeInterface $updatedAt;
}