<?php
/**
 * CalendarPeriodDetailed
 *
 * PHP version 5
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ivoz Provider
 *
 * Client REST API
 *
 * OpenAPI spec version: 2.20.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Delta\Voip\Model;

use \ArrayAccess;
use \Delta\Voip\ObjectSerializer;

/**
 * CalendarPeriodDetailed Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CalendarPeriodDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CalendarPeriod-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'route_type' => 'string',
        'number_value' => 'string',
        'id' => 'int',
        'calendar' => '\Delta\Voip\Model\Calendar',
        'locution' => '\Delta\Voip\Model\Locution',
        'extension' => '\Delta\Voip\Model\Extension',
        'voice_mail_user' => '\Delta\Voip\Model\User',
        'number_country' => '\Delta\Voip\Model\Country'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_date' => 'date',
        'end_date' => 'date',
        'route_type' => null,
        'number_value' => null,
        'id' => null,
        'calendar' => null,
        'locution' => null,
        'extension' => null,
        'voice_mail_user' => null,
        'number_country' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'route_type' => 'routeType',
        'number_value' => 'numberValue',
        'id' => 'id',
        'calendar' => 'calendar',
        'locution' => 'locution',
        'extension' => 'extension',
        'voice_mail_user' => 'voiceMailUser',
        'number_country' => 'numberCountry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'route_type' => 'setRouteType',
        'number_value' => 'setNumberValue',
        'id' => 'setId',
        'calendar' => 'setCalendar',
        'locution' => 'setLocution',
        'extension' => 'setExtension',
        'voice_mail_user' => 'setVoiceMailUser',
        'number_country' => 'setNumberCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'route_type' => 'getRouteType',
        'number_value' => 'getNumberValue',
        'id' => 'getId',
        'calendar' => 'getCalendar',
        'locution' => 'getLocution',
        'extension' => 'getExtension',
        'voice_mail_user' => 'getVoiceMailUser',
        'number_country' => 'getNumberCountry'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const ROUTE_TYPE_NUMBER = 'number';
    const ROUTE_TYPE_EXTENSION = 'extension';
    const ROUTE_TYPE_VOICEMAIL = 'voicemail';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRouteTypeAllowableValues()
    {
        return [
            self::ROUTE_TYPE_NUMBER,
            self::ROUTE_TYPE_EXTENSION,
            self::ROUTE_TYPE_VOICEMAIL,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['route_type'] = isset($data['route_type']) ? $data['route_type'] : null;
        $this->container['number_value'] = isset($data['number_value']) ? $data['number_value'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['calendar'] = isset($data['calendar']) ? $data['calendar'] : null;
        $this->container['locution'] = isset($data['locution']) ? $data['locution'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['voice_mail_user'] = isset($data['voice_mail_user']) ? $data['voice_mail_user'] : null;
        $this->container['number_country'] = isset($data['number_country']) ? $data['number_country'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        $allowedValues = $this->getRouteTypeAllowableValues();
        if (!is_null($this->container['route_type']) && !in_array($this->container['route_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'route_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['route_type']) && (mb_strlen($this->container['route_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'route_type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['number_value']) && (mb_strlen($this->container['number_value']) > 25)) {
            $invalidProperties[] = "invalid value for 'number_value', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['calendar'] === null) {
            $invalidProperties[] = "'calendar' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date 
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date 
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets route_type
     *
     * @return string
     */
    public function getRouteType()
    {
        return $this->container['route_type'];
    }

    /**
     * Sets route_type
     *
     * @param string $route_type 
     *
     * @return $this
     */
    public function setRouteType($route_type)
    {
        $allowedValues = $this->getRouteTypeAllowableValues();
        if (!is_null($route_type) && !in_array($route_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'route_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($route_type) && (mb_strlen($route_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $route_type when calling CalendarPeriodDetailed., must be smaller than or equal to 25.');
        }

        $this->container['route_type'] = $route_type;

        return $this;
    }

    /**
     * Gets number_value
     *
     * @return string
     */
    public function getNumberValue()
    {
        return $this->container['number_value'];
    }

    /**
     * Sets number_value
     *
     * @param string $number_value 
     *
     * @return $this
     */
    public function setNumberValue($number_value)
    {
        if (!is_null($number_value) && (mb_strlen($number_value) > 25)) {
            throw new \InvalidArgumentException('invalid length for $number_value when calling CalendarPeriodDetailed., must be smaller than or equal to 25.');
        }

        $this->container['number_value'] = $number_value;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets calendar
     *
     * @return \Delta\Voip\Model\Calendar
     */
    public function getCalendar()
    {
        return $this->container['calendar'];
    }

    /**
     * Sets calendar
     *
     * @param \Delta\Voip\Model\Calendar $calendar calendar
     *
     * @return $this
     */
    public function setCalendar($calendar)
    {
        $this->container['calendar'] = $calendar;

        return $this;
    }

    /**
     * Gets locution
     *
     * @return \Delta\Voip\Model\Locution
     */
    public function getLocution()
    {
        return $this->container['locution'];
    }

    /**
     * Sets locution
     *
     * @param \Delta\Voip\Model\Locution $locution locution
     *
     * @return $this
     */
    public function setLocution($locution)
    {
        $this->container['locution'] = $locution;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return \Delta\Voip\Model\Extension
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param \Delta\Voip\Model\Extension $extension extension
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets voice_mail_user
     *
     * @return \Delta\Voip\Model\User
     */
    public function getVoiceMailUser()
    {
        return $this->container['voice_mail_user'];
    }

    /**
     * Sets voice_mail_user
     *
     * @param \Delta\Voip\Model\User $voice_mail_user voice_mail_user
     *
     * @return $this
     */
    public function setVoiceMailUser($voice_mail_user)
    {
        $this->container['voice_mail_user'] = $voice_mail_user;

        return $this;
    }

    /**
     * Gets number_country
     *
     * @return \Delta\Voip\Model\Country
     */
    public function getNumberCountry()
    {
        return $this->container['number_country'];
    }

    /**
     * Sets number_country
     *
     * @param \Delta\Voip\Model\Country $number_country number_country
     *
     * @return $this
     */
    public function setNumberCountry($number_country)
    {
        $this->container['number_country'] = $number_country;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


