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
 * Trait for LodgingBusiness.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/LodgingBusiness
 */

trait LodgingBusinessTrait
{
    
    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation
     * or lodging business. Typical unit code(s): ROM for room or C62 for no unit.
     * The type of room can be put in the unitText property of the
     * QuantitativeValue.
     *
     * @var float|QuantitativeValue|Number
     */
    public $numberOfRooms;

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @var Audience
     */
    public $audience;

    /**
     * An official rating for a lodging business or food establishment, e.g. from
     * national associations or standards bodies. Use the author property to
     * indicate the rating organization, e.g. as an Organization with name such as
     * (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     * @var Rating
     */
    public $starRating;

    /**
     * An amenity feature (e.g. a characteristic or service) of the Accommodation.
     * This generic property does not make a statement about whether the feature
     * is included in an offer for the main accommodation or available at extra
     * costs.
     *
     * @var LocationFeatureSpecification
     */
    public $amenityFeature;

    /**
     * A language someone may use with or at the item, service or place. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]]
     *
     * @var string|Text|Language
     */
    public $availableLanguage;

    /**
     * The latest someone may check out of a lodging establishment.
     *
     * @var DateTime|Time
     */
    public $checkoutTime;

    /**
     * The earliest someone may check into a lodging establishment.
     *
     * @var DateTime|Time
     */
    public $checkinTime;

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @var string|bool|Text|Boolean
     */
    public $petsAllowed;

}
