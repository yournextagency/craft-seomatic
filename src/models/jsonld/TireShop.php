<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\Store;

/**
 * TireShop - A tire shop.
 * Extends: Store
 * @see    http://schema.org/TireShop
 */
class TireShop extends Store
{

    // Static
    // =========================================================================

    /**
     * The Schema.org Type Name
     * @var string
     */
    static $schemaTypeName = 'TireShop';

    /**
     * The Schema.org Type Scope
     * @var string
     */
    static $schemaTypeScope = 'https://schema.org/TireShop';

    /**
     * The Schema.org Type Description
     * @var string
     */
    static $schemaTypeDescription = 'A tire shop.';

    /**
     * The Schema.org Type Extends
     * @var string
     */
    static $schemaTypeExtends = 'Store';

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
     * The currency accepted (in ISO 4217 currency format).
     * @var string [schema.org types: Text]
     */
    public $currenciesAccepted;

    /**
     * The general opening hours for a business. Opening hours can be specified as
     * a weekly time range, starting with days, then times per day. Multiple days
     * can be listed with commas ',' separating each day. Day or time ranges are
     * specified using a hyphen '-'. Days are specified using the following
     * two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su. Times are specified
     * using 24:00 time. For example, 3pm is specified as 15:00. Here is an
     * example: <time itemprop="openingHours" datetime="Tu,Th
     * 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. If a business is open 7
     * days a week, then it can be specified as <time itemprop="openingHours"
     * datetime="Mo-Su">Monday through Sunday, all day</time>.
     * @var string [schema.org types: Text]
     */
    public $openingHours;

    /**
     * Cash, credit card, etc.
     * @var string [schema.org types: Text]
     */
    public $paymentAccepted;

    /**
     * The price range of the business, for example $$$.
     * @var string [schema.org types: Text]
     */
    public $priceRange;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames,
            [
                'currenciesAccepted',
                'openingHours',
                'paymentAccepted',
                'priceRange',
            ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes,
            [
                'currenciesAccepted' => ['Text'],
                'openingHours' => ['Text'],
                'paymentAccepted' => ['Text'],
                'priceRange' => ['Text'],
            ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions,
            [
                'currenciesAccepted' => 'The currency accepted (in ISO 4217 currency format).',
                'openingHours' => 'The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas \',\' separating each day. Day or time ranges are specified using a hyphen \'-\'. Days are specified using the following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su. Times are specified using 24:00 time. For example, 3pm is specified as 15:00. Here is an example: <time itemprop="openingHours" datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. If a business is open 7 days a week, then it can be specified as <time itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all day</time>.',
                'paymentAccepted' => 'Cash, credit card, etc.',
                'priceRange' => 'The price range of the business, for example $$$.',
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
                [['currenciesAccepted','openingHours','paymentAccepted','priceRange',], 'validateJsonSchema'],
            ]);
        return $rules;
    } /* -- rules */

} /* -- class TireShop*/
