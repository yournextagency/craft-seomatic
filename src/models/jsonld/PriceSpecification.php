<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\StructuredValue;

/**
 * PriceSpecification - A structured value representing a price or price
 * range. Typically, only the subclasses of this type are used for markup. It
 * is recommended to use MonetaryAmount to describe independent amounts of
 * money such as a salary, credit card limits, etc.
 * Extends: StructuredValue
 * @see    http://schema.org/PriceSpecification
 */
class PriceSpecification extends StructuredValue
{

    // Static
    // =========================================================================

    /**
     * The Schema.org Type Name
     * @var string
     */
    static $schemaTypeName = 'PriceSpecification';

    /**
     * The Schema.org Type Scope
     * @var string
     */
    static $schemaTypeScope = 'https://schema.org/PriceSpecification';

    /**
     * The Schema.org Type Description
     * @var string
     */
    static $schemaTypeDescription = 'A structured value representing a price or price range. Typically, only the subclasses of this type are used for markup. It is recommended to use MonetaryAmount to describe independent amounts of money such as a salary, credit card limits, etc.';

    /**
     * The Schema.org Type Extends
     * @var string
     */
    static $schemaTypeExtends = 'StructuredValue';

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
     * The interval and unit of measurement of ordering quantities for which the
     * offer or price specification is valid. This allows e.g. specifying that a
     * certain freight charge is valid only for a certain quantity.
     * @var QuantitativeValue [schema.org types: QuantitativeValue]
     */
    public $eligibleQuantity;

    /**
     * The transaction volume, in a monetary unit, for which the offer or price
     * specification is valid, e.g. for indicating a minimal purchasing volume, to
     * express free shipping above a certain order volume, or to limit the
     * acceptance of credit cards to purchases to a certain minimal amount.
     * @var PriceSpecification [schema.org types: PriceSpecification]
     */
    public $eligibleTransactionVolume;

    /**
     * The highest price if the price is a range.
     * @var float [schema.org types: Number]
     */
    public $maxPrice;

    /**
     * The lowest price if the price is a range.
     * @var float [schema.org types: Number]
     */
    public $minPrice;

    /**
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes. Usage guidelines: Use the
     * priceCurrency property (with ISO 4217 codes e.g. "USD") instead of
     * including ambiguous symbols such as '$' in the value. Use '.' (Unicode
     * 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid
     * using these symbols as a readability separator. Note that both RDFa and
     * Microdata syntax allow the use of a "content=" attribute for publishing
     * simple machine-readable values alongside more human-friendly formatting.
     * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE'
     * (U+0039)) rather than superficially similiar Unicode symbols.
     * @var mixed float, string [schema.org types: Number, Text]
     */
    public $price;

    /**
     * The currency (in 3-letter ISO 4217 format) of the price or a price
     * component, when attached to PriceSpecification and its subtypes.
     * @var mixed string [schema.org types: Text]
     */
    public $priceCurrency;

    /**
     * The date when the item becomes valid.
     * @var mixed DateTime [schema.org types: DateTime]
     */
    public $validFrom;

    /**
     * The date after when the item is not valid. For example the end of an offer,
     * salary period, or a period of opening hours.
     * @var mixed DateTime [schema.org types: DateTime]
     */
    public $validThrough;

    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the
     * price specification or not.
     * @var mixed bool [schema.org types: Boolean]
     */
    public $valueAddedTaxIncluded;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames,
            [
                'eligibleQuantity',
                'eligibleTransactionVolume',
                'maxPrice',
                'minPrice',
                'price',
                'priceCurrency',
                'validFrom',
                'validThrough',
                'valueAddedTaxIncluded',
            ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes,
            [
                'eligibleQuantity' => ['QuantitativeValue'],
                'eligibleTransactionVolume' => ['PriceSpecification'],
                'maxPrice' => ['Number'],
                'minPrice' => ['Number'],
                'price' => ['Number','Text'],
                'priceCurrency' => ['Text'],
                'validFrom' => ['DateTime'],
                'validThrough' => ['DateTime'],
                'valueAddedTaxIncluded' => ['Boolean'],
            ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions,
            [
                'eligibleQuantity' => 'The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.',
                'eligibleTransactionVolume' => 'The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.',
                'maxPrice' => 'The highest price if the price is a range.',
                'minPrice' => 'The lowest price if the price is a range.',
                'price' => 'The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes. Usage guidelines: Use the priceCurrency property (with ISO 4217 codes e.g. "USD") instead of including ambiguous symbols such as \'$\' in the value. Use \'.\' (Unicode \'FULL STOP\' (U+002E)) rather than \',\' to indicate a decimal point. Avoid using these symbols as a readability separator. Note that both RDFa and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting. Use values from 0123456789 (Unicode \'DIGIT ZERO\' (U+0030) to \'DIGIT NINE\' (U+0039)) rather than superficially similiar Unicode symbols.',
                'priceCurrency' => 'The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.',
                'validFrom' => 'The date when the item becomes valid.',
                'validThrough' => 'The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.',
                'valueAddedTaxIncluded' => 'Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.',
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
                [['eligibleQuantity','eligibleTransactionVolume','maxPrice','minPrice','price','priceCurrency','validFrom','validThrough','valueAddedTaxIncluded',], 'validateJsonSchema'],
            ]);
        return $rules;
    } /* -- rules */

} /* -- class PriceSpecification*/
