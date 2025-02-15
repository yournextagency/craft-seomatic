<?php
/**
 * SEOmatic plugin for Craft CMS 3
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2022 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

/**
 * schema.org version: v14.0-release
 * Trait for NutritionInformation.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/NutritionInformation
 */

trait NutritionInformationTrait
{
    
    /**
     * The number of grams of fat.
     *
     * @var Mass
     */
    public $fatContent;

    /**
     * The serving size, in terms of the number of volume or mass.
     *
     * @var string|Text
     */
    public $servingSize;

    /**
     * The number of grams of protein.
     *
     * @var Mass
     */
    public $proteinContent;

    /**
     * The number of calories.
     *
     * @var Energy
     */
    public $calories;

    /**
     * The number of milligrams of sodium.
     *
     * @var Mass
     */
    public $sodiumContent;

    /**
     * The number of milligrams of cholesterol.
     *
     * @var Mass
     */
    public $cholesterolContent;

    /**
     * The number of grams of sugar.
     *
     * @var Mass
     */
    public $sugarContent;

    /**
     * The number of grams of carbohydrates.
     *
     * @var Mass
     */
    public $carbohydrateContent;

    /**
     * The number of grams of trans fat.
     *
     * @var Mass
     */
    public $transFatContent;

    /**
     * The number of grams of fiber.
     *
     * @var Mass
     */
    public $fiberContent;

    /**
     * The number of grams of unsaturated fat.
     *
     * @var Mass
     */
    public $unsaturatedFatContent;

    /**
     * The number of grams of saturated fat.
     *
     * @var Mass
     */
    public $saturatedFatContent;

}
