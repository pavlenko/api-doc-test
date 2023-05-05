<?php

namespace PE\ApiTest\OA\Menu\DTO;

enum NodeType: string
{
    public const CASES = [
        self::ROOT->value,
        self::NODE->value,
        self::LINK->value,
        self::REF->value
    ];

    case ROOT = 'ROOT';
    case NODE = 'NODE';
    case LINK = 'LINK';
    case REF  = 'REF';
}