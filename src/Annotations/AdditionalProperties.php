<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace OpenApi\Annotations;

/**
 * @Annotation
 */
class AdditionalProperties extends Schema
{
    public $additionalProperties = UNDEFINED;

    /**
     * @inheritdoc
     */
    public static $_parents = [
        Schema::class,
        Property::class,
        Items::class,
        JsonContent::class,
        XmlContent::class
    ];

    /**
     * @inheritdoc
     */
    public static $_nested = [
        Discriminator::class => 'discriminator',
        Items::class => 'items',
        Property::class => ['properties', 'property'],
        ExternalDocumentation::class => 'externalDocs',
        Xml::class => 'xml',
    ];
}
