<?php
/**
 * DestinationRateCollection
 *
 * PHP version 5
 *
 * @category Class
 * @package  Delta/Voip
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

namespace Delta/Voip\Model;

use \ArrayAccess;
use \Delta/Voip\ObjectSerializer;

/**
 * DestinationRateCollection Class Doc Comment
 *
 * @category Class
 * @package  Delta/Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinationRateCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DestinationRate-collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cost' => 'float',
        'connect_fee' => 'float',
        'rate_increment' => 'string',
        'group_interval_start' => 'string',
        'id' => 'int',
        'destination_rate_group' => 'int',
        'destination' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cost' => 'float',
        'connect_fee' => 'float',
        'rate_increment' => null,
        'group_interval_start' => null,
        'id' => null,
        'destination_rate_group' => null,
        'destination' => null
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
        'cost' => 'cost',
        'connect_fee' => 'connectFee',
        'rate_increment' => 'rateIncrement',
        'group_interval_start' => 'groupIntervalStart',
        'id' => 'id',
        'destination_rate_group' => 'destinationRateGroup',
        'destination' => 'destination'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cost' => 'setCost',
        'connect_fee' => 'setConnectFee',
        'rate_increment' => 'setRateIncrement',
        'group_interval_start' => 'setGroupIntervalStart',
        'id' => 'setId',
        'destination_rate_group' => 'setDestinationRateGroup',
        'destination' => 'setDestination'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cost' => 'getCost',
        'connect_fee' => 'getConnectFee',
        'rate_increment' => 'getRateIncrement',
        'group_interval_start' => 'getGroupIntervalStart',
        'id' => 'getId',
        'destination_rate_group' => 'getDestinationRateGroup',
        'destination' => 'getDestination'
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
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['connect_fee'] = isset($data['connect_fee']) ? $data['connect_fee'] : null;
        $this->container['rate_increment'] = isset($data['rate_increment']) ? $data['rate_increment'] : null;
        $this->container['group_interval_start'] = isset($data['group_interval_start']) ? $data['group_interval_start'] : '0s';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['destination_rate_group'] = isset($data['destination_rate_group']) ? $data['destination_rate_group'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['connect_fee'] === null) {
            $invalidProperties[] = "'connect_fee' can't be null";
        }
        if ($this->container['rate_increment'] === null) {
            $invalidProperties[] = "'rate_increment' can't be null";
        }
        if ((mb_strlen($this->container['rate_increment']) > 16)) {
            $invalidProperties[] = "invalid value for 'rate_increment', the character length must be smaller than or equal to 16.";
        }

        if ($this->container['group_interval_start'] === null) {
            $invalidProperties[] = "'group_interval_start' can't be null";
        }
        if ((mb_strlen($this->container['group_interval_start']) > 16)) {
            $invalidProperties[] = "invalid value for 'group_interval_start', the character length must be smaller than or equal to 16.";
        }

        if ($this->container['destination_rate_group'] === null) {
            $invalidProperties[] = "'destination_rate_group' can't be null";
        }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
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
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float $cost 
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets connect_fee
     *
     * @return float
     */
    public function getConnectFee()
    {
        return $this->container['connect_fee'];
    }

    /**
     * Sets connect_fee
     *
     * @param float $connect_fee 
     *
     * @return $this
     */
    public function setConnectFee($connect_fee)
    {
        $this->container['connect_fee'] = $connect_fee;

        return $this;
    }

    /**
     * Gets rate_increment
     *
     * @return string
     */
    public function getRateIncrement()
    {
        return $this->container['rate_increment'];
    }

    /**
     * Sets rate_increment
     *
     * @param string $rate_increment 
     *
     * @return $this
     */
    public function setRateIncrement($rate_increment)
    {
        if ((mb_strlen($rate_increment) > 16)) {
            throw new \InvalidArgumentException('invalid length for $rate_increment when calling DestinationRateCollection., must be smaller than or equal to 16.');
        }

        $this->container['rate_increment'] = $rate_increment;

        return $this;
    }

    /**
     * Gets group_interval_start
     *
     * @return string
     */
    public function getGroupIntervalStart()
    {
        return $this->container['group_interval_start'];
    }

    /**
     * Sets group_interval_start
     *
     * @param string $group_interval_start 
     *
     * @return $this
     */
    public function setGroupIntervalStart($group_interval_start)
    {
        if ((mb_strlen($group_interval_start) > 16)) {
            throw new \InvalidArgumentException('invalid length for $group_interval_start when calling DestinationRateCollection., must be smaller than or equal to 16.');
        }

        $this->container['group_interval_start'] = $group_interval_start;

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
     * Gets destination
     *
     * @return int
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param int $destination 
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

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


