<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\Service;

/**
 * TaxiService - A service for a vehicle for hire with a driver for local
 * travel. Fares are usually calculated based on distance traveled.
 * Extends: Service
 * @see    http://schema.org/TaxiService
 */
class TaxiService extends Service
{

    // Static
    // =========================================================================

    /**
     * The Schema.org Type Name
     * @var string
     */
    static $schemaTypeName = 'TaxiService';

    /**
     * The Schema.org Type Scope
     * @var string
     */
    static $schemaTypeScope = 'https://schema.org/TaxiService';

    /**
     * The Schema.org Type Description
     * @var string
     */
    static $schemaTypeDescription = 'A service for a vehicle for hire with a driver for local travel. Fares are usually calculated based on distance traveled.';

    /**
     * The Schema.org Type Extends
     * @var string
     */
    static $schemaTypeExtends = 'Service';

    /**
     * The Schema.org Property Names
     * @var array
     */
    static $schemaPropertyNames = [];

    /**
     * The Schema.org Property Expected Types
     * @var array
     */
    static $schemaPropertyExpectedTypes = [];

    /**
     * The Schema.org Property Descriptions
     * @var array
     */
    static $schemaPropertyDescriptions = [];

    /**
     * The Schema.org Google Required Schema for this type
     * @var array
     */
    static $googleRequiredSchema = [];

    /**
     * The Schema.org Google Recommended Schema for this type
     * @var array
     */
    static $googleRecommendedSchema = [];

    // Properties
    // =========================================================================

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     * @var AggregateRating [schema.org types: AggregateRating]
     */
    public $aggregateRating;

    /**
     * The geographic area where a service or offered item is provided. Supersedes
     * serviceArea.
     * @var mixed AdministrativeArea, GeoShape, Place, string [schema.org types: AdministrativeArea, GeoShape, Place, Text]
     */
    public $areaServed;

    /**
     * An intended audience, i.e. a group for whom something was created.
     * Supersedes serviceAudience.
     * @var mixed Audience [schema.org types: Audience]
     */
    public $audience;

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a
     * location, etc.).
     * @var mixed ServiceChannel [schema.org types: ServiceChannel]
     */
    public $availableChannel;

    /**
     * An award won by or for this item. Supersedes awards.
     * @var mixed string [schema.org types: Text]
     */
    public $award;

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     * @var mixed Brand, Organization [schema.org types: Brand, Organization]
     */
    public $brand;

    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     * @var mixed string, Thing [schema.org types: Text, Thing]
     */
    public $category;

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or
     * Service.
     * @var mixed OfferCatalog [schema.org types: OfferCatalog]
     */
    public $hasOfferCatalog;

    /**
     * The hours during which this service or contact is available.
     * @var mixed OpeningHoursSpecification [schema.org types: OpeningHoursSpecification]
     */
    public $hoursAvailable;

    /**
     * A pointer to another, somehow related product (or multiple products).
     * @var mixed Product, Service [schema.org types: Product, Service]
     */
    public $isRelatedTo;

    /**
     * A pointer to another, functionally similar product (or multiple products).
     * @var mixed Product, Service [schema.org types: Product, Service]
     */
    public $isSimilarTo;

    /**
     * An associated logo.
     * @var mixed ImageObject, string [schema.org types: ImageObject, URL]
     */
    public $logo;

    /**
     * An offer to provide this item—for example, an offer to sell a product,
     * rent the DVD of a movie, perform a service, or give away tickets to an
     * event.
     * @var mixed Offer [schema.org types: Offer]
     */
    public $offers;

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller. Supersedes
     * carrier.
     * @var mixed Organization, Person [schema.org types: Organization, Person]
     */
    public $provider;

    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     * @var mixed string [schema.org types: Text]
     */
    public $providerMobility;

    /**
     * A review of the item. Supersedes reviews.
     * @var mixed Review [schema.org types: Review]
     */
    public $review;

    /**
     * The tangible thing generated by the service, e.g. a passport, permit, etc.
     * Supersedes produces.
     * @var mixed Thing [schema.org types: Thing]
     */
    public $serviceOutput;

    /**
     * The type of service being offered, e.g. veterans' benefits, emergency
     * relief, etc.
     * @var mixed string [schema.org types: Text]
     */
    public $serviceType;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames,
            [
                'aggregateRating',
                'areaServed',
                'audience',
                'availableChannel',
                'award',
                'brand',
                'category',
                'hasOfferCatalog',
                'hoursAvailable',
                'isRelatedTo',
                'isSimilarTo',
                'logo',
                'offers',
                'provider',
                'providerMobility',
                'review',
                'serviceOutput',
                'serviceType',
            ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes,
            [
                'aggregateRating' => ['AggregateRating'],
                'areaServed' => ['AdministrativeArea','GeoShape','Place','Text'],
                'audience' => ['Audience'],
                'availableChannel' => ['ServiceChannel'],
                'award' => ['Text'],
                'brand' => ['Brand','Organization'],
                'category' => ['Text','Thing'],
                'hasOfferCatalog' => ['OfferCatalog'],
                'hoursAvailable' => ['OpeningHoursSpecification'],
                'isRelatedTo' => ['Product','Service'],
                'isSimilarTo' => ['Product','Service'],
                'logo' => ['ImageObject','URL'],
                'offers' => ['Offer'],
                'provider' => ['Organization','Person'],
                'providerMobility' => ['Text'],
                'review' => ['Review'],
                'serviceOutput' => ['Thing'],
                'serviceType' => ['Text'],
            ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions,
            [
                'aggregateRating' => 'The overall rating, based on a collection of reviews or ratings, of the item.',
                'areaServed' => 'The geographic area where a service or offered item is provided. Supersedes serviceArea.',
                'audience' => 'An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.',
                'availableChannel' => 'A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).',
                'award' => 'An award won by or for this item. Supersedes awards.',
                'brand' => 'The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.',
                'category' => 'A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.',
                'hasOfferCatalog' => 'Indicates an OfferCatalog listing for this Organization, Person, or Service.',
                'hoursAvailable' => 'The hours during which this service or contact is available.',
                'isRelatedTo' => 'A pointer to another, somehow related product (or multiple products).',
                'isSimilarTo' => 'A pointer to another, functionally similar product (or multiple products).',
                'logo' => 'An associated logo.',
                'offers' => 'An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.',
                'provider' => 'The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.',
                'providerMobility' => 'Indicates the mobility of a provided service (e.g. \'static\', \'dynamic\').',
                'review' => 'A review of the item. Supersedes reviews.',
                'serviceOutput' => 'The tangible thing generated by the service, e.g. a passport, permit, etc. Supersedes produces.',
                'serviceType' => 'The type of service being offered, e.g. veterans\' benefits, emergency relief, etc.',
            ]);

        self::$googleRequiredSchema = array_merge(parent::$googleRequiredSchema,
            [
            ]);

        self::$googleRecommendedSchema = array_merge(parent::$googleRecommendedSchema,
            [
            ]);
    } /* -- init */

    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge($rules,
            [
                [['aggregateRating','areaServed','audience','availableChannel','award','brand','category','hasOfferCatalog','hoursAvailable','isRelatedTo','isSimilarTo','logo','offers','provider','providerMobility','review','serviceOutput','serviceType',], 'validateJsonSchema'],
            ]);
        return $rules;
    } /* -- rules */

} /* -- class TaxiService*/
