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
 * Trait for Corporation.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Corporation
 */

trait CorporationTrait
{
    
    /**
     * The exchange traded instrument associated with a Corporation object. The
     * tickerSymbol is expressed as an exchange and an instrument name separated
     * by a space character. For the exchange component of the tickerSymbol
     * attribute, we recommend using the controlled vocabulary of Market
     * Identifier Codes (MIC) specified in ISO15022.
     *
     * @var string|Text
     */
    public $tickerSymbol;

}
