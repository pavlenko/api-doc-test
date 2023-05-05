<?php

namespace PE\ApiTest\AP\Menu\DTO;

use ApiPlatform\Metadata as AP;

final class NodeResponse
{
    #[AP\ApiProperty(
        description: 'UUID',
        readable: true,//<-- required for show in docs
        example: '0742ae20-4e9d-466d-a517-d75cdf74cb5c',
        schema: ['type' => 'string']
    )]
    public string $uuid;

    #[AP\ApiProperty(
        description: 'Name of node',
        readable: true,//<-- required for show in docs
        example: 'Top menu',
        schema: ['type' => 'string']
    )]
    public string $name;

    #[AP\ApiProperty(
        description: 'Type of node',
        readable: true,//<-- required for show in docs
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

    #[AP\ApiProperty(
        description: 'Creation date/time',
        readable: true,//<-- required for show in docs
        example: '2000-01-01 12:00:00',
        schema: ['type' => 'string', 'format' => 'date-time']
    )]
    public \DateTimeInterface $createdAt;

    #[AP\ApiProperty(
        description: 'Last update date/time',
        readable: true,//<-- required for show in docs
        example: '2000-01-01 12:00:00',
        schema: ['type' => 'string', 'format' => 'date-time']
    )]
    public \DateTimeInterface $updatedAt;

    #[AP\ApiProperty(
        description: 'Parent node',
        readable: true,//<-- required for show in docs
        schema: [
            'type'     => 'object',
            'nullable' => true,
            'oneOf'    => [['$ref' => '#/components/schemas/Menu.NodeResponse']]
        ],
    )]
    public ?NodeResponse $parent;
}