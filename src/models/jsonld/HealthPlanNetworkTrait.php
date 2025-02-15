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
 * Trait for HealthPlanNetwork.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/HealthPlanNetwork
 */

trait HealthPlanNetworkTrait
{
    
    /**
     * Name or unique ID of network. (Networks are often reused across different
     * insurance plans).
     *
     * @var string|Text
     */
    public $healthPlanNetworkId;

    /**
     * Whether The costs to the patient for services under this network or
     * formulary.
     *
     * @var bool|Boolean
     */
    public $healthPlanCostSharing;

    /**
     * The tier(s) for this network.
     *
     * @var string|Text
     */
    public $healthPlanNetworkTier;

}
