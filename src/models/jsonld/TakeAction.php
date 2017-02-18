<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\TransferAction;

/**
 * TakeAction - The act of gaining ownership of an object from an origin.
 * Reciprocal of GiveAction. Related actions: GiveAction: The reciprocal of
 * TakeAction. ReceiveAction: Unlike ReceiveAction, TakeAction implies that
 * ownership has been transfered.
 * Extends: TransferAction
 * @see    http://schema.org/TakeAction
 */
class TakeAction extends TransferAction
{

    // Static
    // =========================================================================

    /**
     * The Schema.org Type Name
     * @var string
     */
    static $schemaTypeName = 'TakeAction';

    /**
     * The Schema.org Type Scope
     * @var string
     */
    static $schemaTypeScope = 'https://schema.org/TakeAction';

    /**
     * The Schema.org Type Description
     * @var string
     */
    static $schemaTypeDescription = 'The act of gaining ownership of an object from an origin. Reciprocal of GiveAction. Related actions: GiveAction: The reciprocal of TakeAction. ReceiveAction: Unlike ReceiveAction, TakeAction implies that ownership has been transfered.';

    /**
     * The Schema.org Type Extends
     * @var string
     */
    static $schemaTypeExtends = 'TransferAction';

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
     * A sub property of location. The original location of the object or the
     * agent before the action.
     * @var Place [schema.org types: Place]
     */
    public $fromLocation;

    /**
     * A sub property of location. The final location of the object or the agent
     * after the action.
     * @var Place [schema.org types: Place]
     */
    public $toLocation;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames,
            [
                'fromLocation',
                'toLocation',
            ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes,
            [
                'fromLocation' => ['Place'],
                'toLocation' => ['Place'],
            ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions,
            [
                'fromLocation' => 'A sub property of location. The original location of the object or the agent before the action.',
                'toLocation' => 'A sub property of location. The final location of the object or the agent after the action.',
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
                [['fromLocation','toLocation',], 'validateJsonSchema'],
            ]);
        return $rules;
    } /* -- rules */

} /* -- class TakeAction*/
