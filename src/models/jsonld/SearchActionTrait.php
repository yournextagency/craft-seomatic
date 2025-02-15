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
 * Trait for SearchAction.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/SearchAction
 */

trait SearchActionTrait
{
    
    /**
     * A sub property of instrument. The query used on this action.
     *
     * @var string|Text
     */
    public $query;

}
