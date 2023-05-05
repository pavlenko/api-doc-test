<?php

namespace PE\ApiTest\OA\Media\DTO;

use OpenApi\Attributes as OA;

#[OA\Schema(required: ['file'])]
final class CreateMediaDTO
{
    #[OA\Property(description: 'File to upload', format: 'binary')]
    public string $file;
}