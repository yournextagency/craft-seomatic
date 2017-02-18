<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\DataType;

/**
 * Boolean - Boolean: True or False.
 * Extends: DataType
 * @see    http://schema.org/Boolean
 */
class Boolean extends DataType
{

    // Static
    // =========================================================================

    /**
     * The Schema.org Type Name
     * @var string
     */
    static $schemaTypeName = 'Boolean';

    /**
     * The Schema.org Type Scope
     * @var string
     */
    static $schemaTypeScope = 'https://schema.org/Boolean';

    /**
     * The Schema.org Type Description
     * @var string
     */
    static $schemaTypeDescription = 'Boolean: True or False.';

    /**
     * The Schema.org Type Extends
     * @var string
     */
    static $schemaTypeExtends = 'DataType';

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

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames,
            [
            ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes,
            [
            ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions,
            [
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
                [[], 'validateJsonSchema'],
            ]);
        return $rules;
    } /* -- rules */

} /* -- class Boolean*/
