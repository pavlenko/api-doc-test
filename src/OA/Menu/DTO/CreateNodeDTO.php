<?php

namespace PE\ApiTest\OA\Menu\DTO;

use OpenApi\Attributes as OA;

#[OA\Schema(required: ['name', 'type'])]
final class CreateNodeDTO
{
    #[OA\Property(description: 'Name of node', example: 'Top menu')]
    public string $name;

    #[OA\Property(description: 'Parent uuid of node', example: '0742ae20-4e9d-466d-a517-d75cdf74cb5c')]
    public ?string $parent;

    #[OA\Property(description: 'Type of node', type: 'string', enum: NodeType::class, example: 'LINK')]
    public NodeType $type;

    #[OA\Property(description: 'Link of node (only for type LINK)', example: 'https://google.com')]
    public ?string $href;

    #[OA\Property(description: 'Ref type of node (only for type REF)', example: 'SomeClassName')]
    public ?string $refType;

    #[OA\Property(description: 'Ref uuid of node (only for type REF)', example: '0742ae20-4e9d-466d-a517-d75cdf74cb5c')]
    public ?string $refUuid;
}