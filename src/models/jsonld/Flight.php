<?php

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\Intangible;

/**
 * Flight - An airline flight.
 * Extends: Intangible
 * @see    http://schema.org/Flight
 */
class Flight extends Intangible
{

    // Static
    // =========================================================================

    /**
     * The Schema.org Type Name
     * @var string
     */
    static $schemaTypeName = 'Flight';

    /**
     * The Schema.org Type Scope
     * @var string
     */
    static $schemaTypeScope = 'https://schema.org/Flight';

    /**
     * The Schema.org Type Description
     * @var string
     */
    static $schemaTypeDescription = 'An airline flight.';

    /**
     * The Schema.org Type Extends
     * @var string
     */
    static $schemaTypeExtends = 'Intangible';

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
     * The kind of aircraft (e.g., "Boeing 747").
     * @var mixed string, Vehicle [schema.org types: Text, Vehicle]
     */
    public $aircraft;

    /**
     * The airport where the flight terminates.
     * @var mixed Airport [schema.org types: Airport]
     */
    public $arrivalAirport;

    /**
     * Identifier of the flight's arrival gate.
     * @var mixed string [schema.org types: Text]
     */
    public $arrivalGate;

    /**
     * Identifier of the flight's arrival terminal.
     * @var mixed string [schema.org types: Text]
     */
    public $arrivalTerminal;

    /**
     * The expected arrival time.
     * @var mixed DateTime [schema.org types: DateTime]
     */
    public $arrivalTime;

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     * @var mixed BoardingPolicyType [schema.org types: BoardingPolicyType]
     */
    public $boardingPolicy;

    /**
     * The airport where the flight originates.
     * @var mixed Airport [schema.org types: Airport]
     */
    public $departureAirport;

    /**
     * Identifier of the flight's departure gate.
     * @var mixed string [schema.org types: Text]
     */
    public $departureGate;

    /**
     * Identifier of the flight's departure terminal.
     * @var mixed string [schema.org types: Text]
     */
    public $departureTerminal;

    /**
     * The expected departure time.
     * @var mixed DateTime [schema.org types: DateTime]
     */
    public $departureTime;

    /**
     * The estimated time the flight will take.
     * @var mixed Duration, string [schema.org types: Duration, Text]
     */
    public $estimatedFlightDuration;

    /**
     * The distance of the flight.
     * @var mixed Distance, string [schema.org types: Distance, Text]
     */
    public $flightDistance;

    /**
     * The unique identifier for a flight including the airline IATA code. For
     * example, if describing United flight 110, where the IATA code for United is
     * 'UA', the flightNumber is 'UA110'.
     * @var mixed string [schema.org types: Text]
     */
    public $flightNumber;

    /**
     * Description of the meals that will be provided or available for purchase.
     * @var mixed string [schema.org types: Text]
     */
    public $mealService;

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller. Supersedes
     * carrier.
     * @var mixed Organization, Person [schema.org types: Organization, Person]
     */
    public $provider;

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods. A seller may also be a provider. Supersedes merchant, vendor.
     * @var mixed Organization, Person [schema.org types: Organization, Person]
     */
    public $seller;

    /**
     * The time when a passenger can check into the flight online.
     * @var mixed DateTime [schema.org types: DateTime]
     */
    public $webCheckinTime;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(parent::$schemaPropertyNames,
            [
                'aircraft',
                'arrivalAirport',
                'arrivalGate',
                'arrivalTerminal',
                'arrivalTime',
                'boardingPolicy',
                'departureAirport',
                'departureGate',
                'departureTerminal',
                'departureTime',
                'estimatedFlightDuration',
                'flightDistance',
                'flightNumber',
                'mealService',
                'provider',
                'seller',
                'webCheckinTime',
            ]);

        self::$schemaPropertyExpectedTypes = array_merge(parent::$schemaPropertyExpectedTypes,
            [
                'aircraft' => ['Text','Vehicle'],
                'arrivalAirport' => ['Airport'],
                'arrivalGate' => ['Text'],
                'arrivalTerminal' => ['Text'],
                'arrivalTime' => ['DateTime'],
                'boardingPolicy' => ['BoardingPolicyType'],
                'departureAirport' => ['Airport'],
                'departureGate' => ['Text'],
                'departureTerminal' => ['Text'],
                'departureTime' => ['DateTime'],
                'estimatedFlightDuration' => ['Duration','Text'],
                'flightDistance' => ['Distance','Text'],
                'flightNumber' => ['Text'],
                'mealService' => ['Text'],
                'provider' => ['Organization','Person'],
                'seller' => ['Organization','Person'],
                'webCheckinTime' => ['DateTime'],
            ]);

        self::$schemaPropertyDescriptions = array_merge(parent::$schemaPropertyDescriptions,
            [
                'aircraft' => 'The kind of aircraft (e.g., "Boeing 747").',
                'arrivalAirport' => 'The airport where the flight terminates.',
                'arrivalGate' => 'Identifier of the flight\'s arrival gate.',
                'arrivalTerminal' => 'Identifier of the flight\'s arrival terminal.',
                'arrivalTime' => 'The expected arrival time.',
                'boardingPolicy' => 'The type of boarding policy used by the airline (e.g. zone-based or group-based).',
                'departureAirport' => 'The airport where the flight originates.',
                'departureGate' => 'Identifier of the flight\'s departure gate.',
                'departureTerminal' => 'Identifier of the flight\'s departure terminal.',
                'departureTime' => 'The expected departure time.',
                'estimatedFlightDuration' => 'The estimated time the flight will take.',
                'flightDistance' => 'The distance of the flight.',
                'flightNumber' => 'The unique identifier for a flight including the airline IATA code. For example, if describing United flight 110, where the IATA code for United is \'UA\', the flightNumber is \'UA110\'.',
                'mealService' => 'Description of the meals that will be provided or available for purchase.',
                'provider' => 'The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes carrier.',
                'seller' => 'An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a provider. Supersedes merchant, vendor.',
                'webCheckinTime' => 'The time when a passenger can check into the flight online.',
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
                [['aircraft','arrivalAirport','arrivalGate','arrivalTerminal','arrivalTime','boardingPolicy','departureAirport','departureGate','departureTerminal','departureTime','estimatedFlightDuration','flightDistance','flightNumber','mealService','provider','seller','webCheckinTime',], 'validateJsonSchema'],
            ]);
        return $rules;
    } /* -- rules */

} /* -- class Flight*/
