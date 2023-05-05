<?php

namespace PE\ApiTest\AP\Menu\DTO;

use OpenApi\Attributes as OA;

#[OA\Schema(required: ['name', 'type'])]
final class UpdateNodeDTO
{
    #[OA\Property(description: 'Name of node', example: 'Top menu')]
    public string $name;

    #[OA\Property(description: 'Parent uuid of node')]
    public ?string $parent;

    #[OA\Property(description: 'Type of node', enum: NodeType::class, example: 'LINK')]
    public NodeType $type;

    #[OA\Property(description: 'Link of node (only for type LINK)', example: 'https://google.com')]
    public ?string $href;

    #[OA\Property(description: 'Ref type of node (only for type REF)', example: 'SomeClassName')]
    public ?string $refType;

    #[OA\Property(description: 'Ref uuid of node (only for type REF)')]
    public ?string $refUuid;
}