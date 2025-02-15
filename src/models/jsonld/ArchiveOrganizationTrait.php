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
 * Trait for ArchiveOrganization.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/ArchiveOrganization
 */

trait ArchiveOrganizationTrait
{
    
    /**
     * Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held,
     * kept or maintained by an [[ArchiveOrganization]].
     *
     * @var ArchiveComponent
     */
    public $archiveHeld;

}
