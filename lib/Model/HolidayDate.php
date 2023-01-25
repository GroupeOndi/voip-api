<?php
/**
 * HolidayDate
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
 * HolidayDate Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HolidayDate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HolidayDate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'event_date' => '\DateTime',
        'whole_day_event' => 'bool',
        'time_in' => 'string',
        'time_out' => 'string',
        'route_type' => 'string',
        'number_value' => 'string',
        'id' => 'int',
        'calendar' => 'int',
        'locution' => 'int',
        'extension' => 'int',
        'voice_mail_user' => 'int',
        'number_country' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'event_date' => 'date',
        'whole_day_event' => null,
        'time_in' => 'time',
        'time_out' => 'time',
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
        'name' => 'name',
        'event_date' => 'eventDate',
        'whole_day_event' => 'wholeDayEvent',
        'time_in' => 'timeIn',
        'time_out' => 'timeOut',
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
        'name' => 'setName',
        'event_date' => 'setEventDate',
        'whole_day_event' => 'setWholeDayEvent',
        'time_in' => 'setTimeIn',
        'time_out' => 'setTimeOut',
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
        'name' => 'getName',
        'event_date' => 'getEventDate',
        'whole_day_event' => 'getWholeDayEvent',
        'time_in' => 'getTimeIn',
        'time_out' => 'getTimeOut',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['event_date'] = isset($data['event_date']) ? $data['event_date'] : null;
        $this->container['whole_day_event'] = isset($data['whole_day_event']) ? $data['whole_day_event'] : false;
        $this->container['time_in'] = isset($data['time_in']) ? $data['time_in'] : null;
        $this->container['time_out'] = isset($data['time_out']) ? $data['time_out'] : null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['event_date'] === null) {
            $invalidProperties[] = "'event_date' can't be null";
        }
        if ($this->container['whole_day_event'] === null) {
            $invalidProperties[] = "'whole_day_event' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling HolidayDate., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets event_date
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     *
     * @param \DateTime $event_date 
     *
     * @return $this
     */
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets whole_day_event
     *
     * @return bool
     */
    public function getWholeDayEvent()
    {
        return $this->container['whole_day_event'];
    }

    /**
     * Sets whole_day_event
     *
     * @param bool $whole_day_event 
     *
     * @return $this
     */
    public function setWholeDayEvent($whole_day_event)
    {
        $this->container['whole_day_event'] = $whole_day_event;

        return $this;
    }

    /**
     * Gets time_in
     *
     * @return string
     */
    public function getTimeIn()
    {
        return $this->container['time_in'];
    }

    /**
     * Sets time_in
     *
     * @param string $time_in 
     *
     * @return $this
     */
    public function setTimeIn($time_in)
    {
        $this->container['time_in'] = $time_in;

        return $this;
    }

    /**
     * Gets time_out
     *
     * @return string
     */
    public function getTimeOut()
    {
        return $this->container['time_out'];
    }

    /**
     * Sets time_out
     *
     * @param string $time_out 
     *
     * @return $this
     */
    public function setTimeOut($time_out)
    {
        $this->container['time_out'] = $time_out;

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
            throw new \InvalidArgumentException('invalid length for $route_type when calling HolidayDate., must be smaller than or equal to 25.');
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
            throw new \InvalidArgumentException('invalid length for $number_value when calling HolidayDate., must be smaller than or equal to 25.');
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
     * @return int
     */
    public function getCalendar()
    {
        return $this->container['calendar'];
    }

    /**
     * Sets calendar
     *
     * @param int $calendar 
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
     * @return int
     */
    public function getLocution()
    {
        return $this->container['locution'];
    }

    /**
     * Sets locution
     *
     * @param int $locution 
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
     * @return int
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param int $extension 
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
     * @return int
     */
    public function getVoiceMailUser()
    {
        return $this->container['voice_mail_user'];
    }

    /**
     * Sets voice_mail_user
     *
     * @param int $voice_mail_user 
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
     * @return int
     */
    public function getNumberCountry()
    {
        return $this->container['number_country'];
    }

    /**
     * Sets number_country
     *
     * @param int $number_country 
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


