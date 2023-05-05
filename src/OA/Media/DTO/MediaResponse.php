<?php

namespace PE\ApiTest\OA\Media\DTO;

use OpenApi\Attributes as OA;

#[OA\Schema]
final class MediaResponse
{
    #[OA\Property(description: 'UUID', example: '0742ae20-4e9d-466d-a517-d75cdf74cb5c')]
    public string $uuid;

    #[OA\Property(description: 'Filename', example: 'Image.png')]
    public string $name;

    #[OA\Property(description: 'Filepath', example: '/uploads/0742ae20-4e9d-466d-a517-d75cdf74cb5c-image.png')]
    public string $path;

    #[OA\Property(description: 'Creation date/time', example: '2000-01-01 12:00:00')]
    public \DateTimeInterface $createdAt;

    #[OA\Property(description: 'Last update date/time', example: '2000-01-01 12:00:00')]
    public \DateTimeInterface $updatedAt;
}