<?php

namespace PE\ApiTest\AP;

use ApiPlatform\GraphQl\Type\TypesContainer;
use ApiPlatform\JsonSchema\SchemaFactory;
use ApiPlatform\JsonSchema\TypeFactory;
use ApiPlatform\Metadata\Property\Factory\AttributePropertyMetadataFactory;
use ApiPlatform\Metadata\Property\Factory\PropertyInfoPropertyMetadataFactory;
use ApiPlatform\Metadata\Property\Factory\PropertyInfoPropertyNameCollectionFactory;
use ApiPlatform\Metadata\Resource\Factory\AttributesResourceMetadataCollectionFactory;
use ApiPlatform\Metadata\Resource\Factory\AttributesResourceNameCollectionFactory;
use ApiPlatform\Metadata\Resource\Factory\InputOutputResourceMetadataCollectionFactory;
use ApiPlatform\OpenApi\Factory\OpenApiFactory;
use ApiPlatform\OpenApi\Model\Response;
use ApiPlatform\OpenApi\Options;
use ApiPlatform\OpenApi\Serializer\OpenApiNormalizer;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

final class API
{
    private OpenApiFactory $factory;

    public function __construct()
    {
        $propertyInfo = new PropertyInfoExtractor([new ReflectionExtractor()]);

        $resourceMetadataCollectionFactory = new InputOutputResourceMetadataCollectionFactory(
            new AttributesResourceMetadataCollectionFactory()
        );

        $propertyNameCollectionFactory = new PropertyInfoPropertyNameCollectionFactory(
            $propertyInfo,
        );

        $propertyMetadataFactory = new PropertyInfoPropertyMetadataFactory(
            $propertyInfo,
        );
        $propertyMetadataFactory = new AttributePropertyMetadataFactory($propertyMetadataFactory);

        //this will force add props to schema if no decorate other
        //$propertyMetadataFactory = new DefaultPropertyMetadataFactory($propertyMetadataFactory);

        $typeFactory = new TypeFactory();

        $schemaFactory = new SchemaFactory(
            $typeFactory,
            $resourceMetadataCollectionFactory,
            $propertyNameCollectionFactory,
            $propertyMetadataFactory
        );

        $typeFactory->setSchemaFactory($schemaFactory);

        $this->factory = new OpenApiFactory(
            new AttributesResourceNameCollectionFactory([__DIR__]),
            $resourceMetadataCollectionFactory,
            $propertyNameCollectionFactory,
            $propertyMetadataFactory,
            $schemaFactory,
            $typeFactory,
            new TypesContainer(),
            ['json' => ['application/json']],
            new Options(title: 'API (1.0)')
        );
    }

    public function generate(): array
    {
        $normalizer = new OpenApiNormalizer(new Serializer([new ObjectNormalizer()], [new JsonEncoder()]));
        $openAPI = $this->factory->__invoke()->withSecurity([['Bearer' => []]]);

        // Global security
        $openAPI->getComponents()->getSecuritySchemes()['Bearer'] = [
            'type'         => 'http',
            'name'         => 'JWT',
            'scheme'       => 'bearer',
            'bearerFormat' => 'JWT',
        ];

        // Global responses
        $openAPI->getComponents()->getSchemas()['Response401'] = [
            'properties' => [
                'error' => [
                    'description' => 'Error message',
                    'type'        => 'string',
                    'example'     => 'Invalid credentials'
                ]
            ],
            'type' => 'object',
        ];

        $openAPI->getComponents()->getSchemas()['Response404'] = [
            'properties' => [
                'error' => [
                    'description' => 'Error message',
                    'type'        => 'string',
                    'example'     => 'Record not found'
                ]
            ],
            'type' => 'object',
        ];

        return $normalizer->normalize($openAPI, 'json');
    }
}