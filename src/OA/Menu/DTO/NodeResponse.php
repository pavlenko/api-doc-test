<?php

namespace PE\ApiTest\OA\Menu\DTO;

use OpenApi\Attributes as OA;

#[OA\Schema]
final class NodeResponse
{
    #[OA\Property(description: 'UUID', example: '0742ae20-4e9d-466d-a517-d75cdf74cb5c')]
    public string $uuid;

    #[OA\Property(description: 'Name of node', example: 'Top menu')]
    public string $name;

    #[OA\Property(description: 'Type of node', type: 'string', enum: NodeType::class, example: 'LINK')]
    public NodeType $type;

    #[OA\Property(description: 'Link of node (only for type LINK)', example: 'https://google.com')]
    public ?string $href;

    #[OA\Property(description: 'Ref type of node (only for type REF)', example: 'SomeClassName')]
    public ?string $refType;

    #[OA\Property(description: 'Ref uuid of node (only for type REF)', example: '0742ae20-4e9d-466d-a517-d75cdf74cb5c')]
    public ?string $refUuid;

    #[OA\Property(description: 'Creation date/time', example: '2000-01-01 12:00:00')]
    public \DateTimeInterface $createdAt;

    #[OA\Property(description: 'Last update date/time', example: '2000-01-01 12:00:00')]
    public \DateTimeInterface $updatedAt;

    #[OA\Property(description: 'Parent node', nullable: true)]
    public ?NodeResponse $parent;
}