<?php
/**
 * RatingPlanCollection
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
 * Brand REST API
 *
 * OpenAPI spec version: 2.17.0
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
 * RatingPlanCollection Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RatingPlanCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RatingPlan-collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'weight' => 'float',
        'timing_type' => 'string',
        'time_in' => 'string',
        'monday' => 'bool',
        'tuesday' => 'bool',
        'wednesday' => 'bool',
        'thursday' => 'bool',
        'friday' => 'bool',
        'saturday' => 'bool',
        'sunday' => 'bool',
        'id' => 'int',
        'rating_plan_group' => 'int',
        'destination_rate_group' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'weight' => 'float',
        'timing_type' => null,
        'time_in' => 'time',
        'monday' => null,
        'tuesday' => null,
        'wednesday' => null,
        'thursday' => null,
        'friday' => null,
        'saturday' => null,
        'sunday' => null,
        'id' => null,
        'rating_plan_group' => null,
        'destination_rate_group' => null
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
        'weight' => 'weight',
        'timing_type' => 'timingType',
        'time_in' => 'timeIn',
        'monday' => 'monday',
        'tuesday' => 'tuesday',
        'wednesday' => 'wednesday',
        'thursday' => 'thursday',
        'friday' => 'friday',
        'saturday' => 'saturday',
        'sunday' => 'sunday',
        'id' => 'id',
        'rating_plan_group' => 'ratingPlanGroup',
        'destination_rate_group' => 'destinationRateGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'weight' => 'setWeight',
        'timing_type' => 'setTimingType',
        'time_in' => 'setTimeIn',
        'monday' => 'setMonday',
        'tuesday' => 'setTuesday',
        'wednesday' => 'setWednesday',
        'thursday' => 'setThursday',
        'friday' => 'setFriday',
        'saturday' => 'setSaturday',
        'sunday' => 'setSunday',
        'id' => 'setId',
        'rating_plan_group' => 'setRatingPlanGroup',
        'destination_rate_group' => 'setDestinationRateGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'weight' => 'getWeight',
        'timing_type' => 'getTimingType',
        'time_in' => 'getTimeIn',
        'monday' => 'getMonday',
        'tuesday' => 'getTuesday',
        'wednesday' => 'getWednesday',
        'thursday' => 'getThursday',
        'friday' => 'getFriday',
        'saturday' => 'getSaturday',
        'sunday' => 'getSunday',
        'id' => 'getId',
        'rating_plan_group' => 'getRatingPlanGroup',
        'destination_rate_group' => 'getDestinationRateGroup'
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

    const TIMING_TYPE_ALWAYS = 'always';
    const TIMING_TYPE_CUSTOM = 'custom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTimingTypeAllowableValues()
    {
        return [
            self::TIMING_TYPE_ALWAYS,
            self::TIMING_TYPE_CUSTOM,
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
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : 10.0;
        $this->container['timing_type'] = isset($data['timing_type']) ? $data['timing_type'] : 'always';
        $this->container['time_in'] = isset($data['time_in']) ? $data['time_in'] : null;
        $this->container['monday'] = isset($data['monday']) ? $data['monday'] : false;
        $this->container['tuesday'] = isset($data['tuesday']) ? $data['tuesday'] : false;
        $this->container['wednesday'] = isset($data['wednesday']) ? $data['wednesday'] : false;
        $this->container['thursday'] = isset($data['thursday']) ? $data['thursday'] : false;
        $this->container['friday'] = isset($data['friday']) ? $data['friday'] : false;
        $this->container['saturday'] = isset($data['saturday']) ? $data['saturday'] : false;
        $this->container['sunday'] = isset($data['sunday']) ? $data['sunday'] : false;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['rating_plan_group'] = isset($data['rating_plan_group']) ? $data['rating_plan_group'] : null;
        $this->container['destination_rate_group'] = isset($data['destination_rate_group']) ? $data['destination_rate_group'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        $allowedValues = $this->getTimingTypeAllowableValues();
        if (!is_null($this->container['timing_type']) && !in_array($this->container['timing_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'timing_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['timing_type']) && (mb_strlen($this->container['timing_type']) > 10)) {
            $invalidProperties[] = "invalid value for 'timing_type', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['time_in'] === null) {
            $invalidProperties[] = "'time_in' can't be null";
        }
        if ($this->container['rating_plan_group'] === null) {
            $invalidProperties[] = "'rating_plan_group' can't be null";
        }
        if ($this->container['destination_rate_group'] === null) {
            $invalidProperties[] = "'destination_rate_group' can't be null";
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
     * Gets weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float $weight 
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets timing_type
     *
     * @return string
     */
    public function getTimingType()
    {
        return $this->container['timing_type'];
    }

    /**
     * Sets timing_type
     *
     * @param string $timing_type 
     *
     * @return $this
     */
    public function setTimingType($timing_type)
    {
        $allowedValues = $this->getTimingTypeAllowableValues();
        if (!is_null($timing_type) && !in_array($timing_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'timing_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($timing_type) && (mb_strlen($timing_type) > 10)) {
            throw new \InvalidArgumentException('invalid length for $timing_type when calling RatingPlanCollection., must be smaller than or equal to 10.');
        }

        $this->container['timing_type'] = $timing_type;

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
     * Gets monday
     *
     * @return bool
     */
    public function getMonday()
    {
        return $this->container['monday'];
    }

    /**
     * Sets monday
     *
     * @param bool $monday 
     *
     * @return $this
     */
    public function setMonday($monday)
    {
        $this->container['monday'] = $monday;

        return $this;
    }

    /**
     * Gets tuesday
     *
     * @return bool
     */
    public function getTuesday()
    {
        return $this->container['tuesday'];
    }

    /**
     * Sets tuesday
     *
     * @param bool $tuesday 
     *
     * @return $this
     */
    public function setTuesday($tuesday)
    {
        $this->container['tuesday'] = $tuesday;

        return $this;
    }

    /**
     * Gets wednesday
     *
     * @return bool
     */
    public function getWednesday()
    {
        return $this->container['wednesday'];
    }

    /**
     * Sets wednesday
     *
     * @param bool $wednesday 
     *
     * @return $this
     */
    public function setWednesday($wednesday)
    {
        $this->container['wednesday'] = $wednesday;

        return $this;
    }

    /**
     * Gets thursday
     *
     * @return bool
     */
    public function getThursday()
    {
        return $this->container['thursday'];
    }

    /**
     * Sets thursday
     *
     * @param bool $thursday 
     *
     * @return $this
     */
    public function setThursday($thursday)
    {
        $this->container['thursday'] = $thursday;

        return $this;
    }

    /**
     * Gets friday
     *
     * @return bool
     */
    public function getFriday()
    {
        return $this->container['friday'];
    }

    /**
     * Sets friday
     *
     * @param bool $friday 
     *
     * @return $this
     */
    public function setFriday($friday)
    {
        $this->container['friday'] = $friday;

        return $this;
    }

    /**
     * Gets saturday
     *
     * @return bool
     */
    public function getSaturday()
    {
        return $this->container['saturday'];
    }

    /**
     * Sets saturday
     *
     * @param bool $saturday 
     *
     * @return $this
     */
    public function setSaturday($saturday)
    {
        $this->container['saturday'] = $saturday;

        return $this;
    }

    /**
     * Gets sunday
     *
     * @return bool
     */
    public function getSunday()
    {
        return $this->container['sunday'];
    }

    /**
     * Sets sunday
     *
     * @param bool $sunday 
     *
     * @return $this
     */
    public function setSunday($sunday)
    {
        $this->container['sunday'] = $sunday;

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
     * Gets rating_plan_group
     *
     * @return int
     */
    public function getRatingPlanGroup()
    {
        return $this->container['rating_plan_group'];
    }

    /**
     * Sets rating_plan_group
     *
     * @param int $rating_plan_group 
     *
     * @return $this
     */
    public function setRatingPlanGroup($rating_plan_group)
    {
        $this->container['rating_plan_group'] = $rating_plan_group;

        return $this;
    }

    /**
     * Gets destination_rate_group
     *
     * @return int
     */
    public function getDestinationRateGroup()
    {
        return $this->container['destination_rate_group'];
    }

    /**
     * Sets destination_rate_group
     *
     * @param int $destination_rate_group 
     *
     * @return $this
     */
    public function setDestinationRateGroup($destination_rate_group)
    {
        $this->container['destination_rate_group'] = $destination_rate_group;

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


