<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\Intangible;

/**
 * Seat - Used to describe a seat, such as a reserved seat in an event
 * reservation.
 * Extends: Intangible
 * @see    http://schema.org/Seat
 */
class Seat extends Intangible
{

    // Static
    // =========================================================================

    /**
     * The Schema.org Type Name
     * @var string
     */
    static $schemaTypeName = 'Seat';

    /**
     * The Schema.org Type Scope
     * @var string
     */
    static $schemaTypeScope = 'https://schema.org/Seat';

    /**
     * The Schema.org Type Description
     * @var string
     */
    static $schemaTypeDescription = 'Used to describe a seat, such as a reserved seat in an event reservation.';

    /**
     * The Schema.org Type Extends
     * @var string
     */
    static $schemaTypeExtends = 'Intangible';

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
     * The location of the reserved seat (e.g., 27).
     * @var string [schema.org types: Text]
     */
    public $seatNumber;

    /**
     * The row location of the reserved seat (e.g., B).
     * @var string [schema.org types: Text]
     */
    public $seatRow;

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     * @var string [schema.org types: Text]
     */
    public $seatSection;

    /**
     * The type/class of the seat.
     * @var mixed QualitativeValue, string [schema.org types: QualitativeValue, Text]
     */
    public $seatingType;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames,
            [
                'seatNumber',
                'seatRow',
                'seatSection',
                'seatingType',
            ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes,
            [
                'seatNumber' => ['Text'],
                'seatRow' => ['Text'],
                'seatSection' => ['Text'],
                'seatingType' => ['QualitativeValue','Text'],
            ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions,
            [
                'seatNumber' => 'The location of the reserved seat (e.g., 27).',
                'seatRow' => 'The row location of the reserved seat (e.g., B).',
                'seatSection' => 'The section location of the reserved seat (e.g. Orchestra).',
                'seatingType' => 'The type/class of the seat.',
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
                [['seatNumber','seatRow','seatSection','seatingType',], 'validateJsonSchema'],
            ]);
        return $rules;
    } /* -- rules */

} /* -- class Seat*/
