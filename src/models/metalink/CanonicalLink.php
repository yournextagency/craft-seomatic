<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\models\metalink;

use nystudio107\seomatic\models\MetaLink;
use nystudio107\seomatic\helpers\UrlHelper;

use Craft;
use craft\helpers\StringHelper;

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */
class CanonicalLink extends MetaLink
{
    // Constants
    // =========================================================================

    const ITEM_TYPE = 'CanonicalLink';

    // Static Methods
    // =========================================================================

    // Public Properties
    // =========================================================================

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge($rules, [
        ]);

        return $rules;
    }

    /**
     * @inheritdoc
     */
    public function prepForRender(&$data): bool
    {
        $shouldRender = parent::prepForRender($data);
        if ($shouldRender) {
            // Don't render a canonical url for http status codes >= 400
            if (Craft::$app->getResponse()->statusCode >= 400) {
                return false;
            }
            if (!empty($data['href'])) {
                $url = UrlHelper::absoluteUrlWithProtocol(
                    StringHelper::toLowerCase($data['href'])
                );
                // The URL should be stripped of its query string already, but because
                // Craft adds the `token` URL param back in via UrlHelper, strip it again
                $url = preg_replace('/\?.*/', '', $url);
                $data['href'] = $url;
            }
        }

        return $shouldRender;
    }
}
