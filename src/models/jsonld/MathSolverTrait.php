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
 * Trait for MathSolver.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/MathSolver
 */

trait MathSolverTrait
{
    
    /**
     * A mathematical expression (e.g. 'x^2-3x=0') that may be solved for a
     * specific variable, simplified, or transformed. This can take many formats,
     * e.g. LaTeX, Ascii-Math, or math as you would write with a keyboard.
     *
     * @var string|SolveMathAction|Text
     */
    public $mathExpression;

}
