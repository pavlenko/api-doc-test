<?php

namespace PE\ApiTest\AP\Menu\DTO;

use ApiPlatform\Metadata as AP;

final class CreateNodeDTO
{
    #[AP\ApiProperty(
        description: 'Name of node',
        readable: true,//<-- required for show in docs
        required: true,
        example: 'Top menu',
        schema: ['type' => 'string']
    )]
    public string $name;

    #[AP\ApiProperty(
        description: 'Parent uuid of node',
        readable: true,//<-- required for show in docs
        example: '0742ae20-4e9d-466d-a517-d75cdf74cb5c',
        schema: ['type' => 'string'],
    )]
    public ?string $parent;

    #[AP\ApiProperty(
        description: 'Type of node',
        readable: true,//<-- required for show in docs
        required: true,
        example: 'LINK',
        schema: ['type' => 'string', 'enum' => NodeType::CASES]
    )]
    public NodeType $type;

    #[AP\ApiProperty(
        description: 'Link of node (only for type LINK)',
        readable: true,//<-- required for show in docs
        example: 'https://google.com',
        schema: ['type' => 'string', 'nullable' => true],
    )]
    public ?string $href;

    #[AP\ApiProperty(
        description: 'Ref type of node (only for type REF)',
        readable: true,//<-- required for show in docs
        example: 'SomeClassName',
        schema: ['type' => 'string', 'nullable' => true],
    )]
    public ?string $refType;

    #[AP\ApiProperty(
        description: 'Ref uuid of node (only for type REF)',
        readable: true,//<-- required for show in docs
        example: '0742ae20-4e9d-466d-a517-d75cdf74cb5c',
        schema: ['type' => 'string', 'nullable' => true],
    )]
    public ?string $refUuid;
}