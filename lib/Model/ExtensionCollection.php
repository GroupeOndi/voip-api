<?php
/**
 * ExtensionCollection
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
 * ExtensionCollection Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtensionCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Extension-collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'number' => 'string',
        'route_type' => 'string',
        'number_value' => 'string',
        'friend_value' => 'string',
        'ivr' => 'int',
        'hunt_group' => 'int',
        'conference_room' => 'int',
        'user' => 'int',
        'queue' => 'int',
        'conditional_route' => 'int',
        'number_country' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'number' => null,
        'route_type' => null,
        'number_value' => null,
        'friend_value' => null,
        'ivr' => null,
        'hunt_group' => null,
        'conference_room' => null,
        'user' => null,
        'queue' => null,
        'conditional_route' => null,
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
        'id' => 'id',
        'number' => 'number',
        'route_type' => 'routeType',
        'number_value' => 'numberValue',
        'friend_value' => 'friendValue',
        'ivr' => 'ivr',
        'hunt_group' => 'huntGroup',
        'conference_room' => 'conferenceRoom',
        'user' => 'user',
        'queue' => 'queue',
        'conditional_route' => 'conditionalRoute',
        'number_country' => 'numberCountry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'number' => 'setNumber',
        'route_type' => 'setRouteType',
        'number_value' => 'setNumberValue',
        'friend_value' => 'setFriendValue',
        'ivr' => 'setIvr',
        'hunt_group' => 'setHuntGroup',
        'conference_room' => 'setConferenceRoom',
        'user' => 'setUser',
        'queue' => 'setQueue',
        'conditional_route' => 'setConditionalRoute',
        'number_country' => 'setNumberCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'number' => 'getNumber',
        'route_type' => 'getRouteType',
        'number_value' => 'getNumberValue',
        'friend_value' => 'getFriendValue',
        'ivr' => 'getIvr',
        'hunt_group' => 'getHuntGroup',
        'conference_room' => 'getConferenceRoom',
        'user' => 'getUser',
        'queue' => 'getQueue',
        'conditional_route' => 'getConditionalRoute',
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

    const ROUTE_TYPE_USER = 'user';
    const ROUTE_TYPE_NUMBER = 'number';
    const ROUTE_TYPE_IVR = 'ivr';
    const ROUTE_TYPE_HUNT_GROUP = 'huntGroup';
    const ROUTE_TYPE_CONFERENCE_ROOM = 'conferenceRoom';
    const ROUTE_TYPE_FRIEND = 'friend';
    const ROUTE_TYPE_QUEUE = 'queue';
    const ROUTE_TYPE_CONDITIONAL = 'conditional';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRouteTypeAllowableValues()
    {
        return [
            self::ROUTE_TYPE_USER,
            self::ROUTE_TYPE_NUMBER,
            self::ROUTE_TYPE_IVR,
            self::ROUTE_TYPE_HUNT_GROUP,
            self::ROUTE_TYPE_CONFERENCE_ROOM,
            self::ROUTE_TYPE_FRIEND,
            self::ROUTE_TYPE_QUEUE,
            self::ROUTE_TYPE_CONDITIONAL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['route_type'] = isset($data['route_type']) ? $data['route_type'] : null;
        $this->container['number_value'] = isset($data['number_value']) ? $data['number_value'] : null;
        $this->container['friend_value'] = isset($data['friend_value']) ? $data['friend_value'] : null;
        $this->container['ivr'] = isset($data['ivr']) ? $data['ivr'] : null;
        $this->container['hunt_group'] = isset($data['hunt_group']) ? $data['hunt_group'] : null;
        $this->container['conference_room'] = isset($data['conference_room']) ? $data['conference_room'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['conditional_route'] = isset($data['conditional_route']) ? $data['conditional_route'] : null;
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

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ((mb_strlen($this->container['number']) > 10)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 10.";
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

        if (!is_null($this->container['friend_value']) && (mb_strlen($this->container['friend_value']) > 25)) {
            $invalidProperties[] = "invalid value for 'friend_value', the character length must be smaller than or equal to 25.";
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number 
     *
     * @return $this
     */
    public function setNumber($number)
    {
        if ((mb_strlen($number) > 10)) {
            throw new \InvalidArgumentException('invalid length for $number when calling ExtensionCollection., must be smaller than or equal to 10.');
        }

        $this->container['number'] = $number;

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
            throw new \InvalidArgumentException('invalid length for $route_type when calling ExtensionCollection., must be smaller than or equal to 25.');
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
            throw new \InvalidArgumentException('invalid length for $number_value when calling ExtensionCollection., must be smaller than or equal to 25.');
        }

        $this->container['number_value'] = $number_value;

        return $this;
    }

    /**
     * Gets friend_value
     *
     * @return string
     */
    public function getFriendValue()
    {
        return $this->container['friend_value'];
    }

    /**
     * Sets friend_value
     *
     * @param string $friend_value 
     *
     * @return $this
     */
    public function setFriendValue($friend_value)
    {
        if (!is_null($friend_value) && (mb_strlen($friend_value) > 25)) {
            throw new \InvalidArgumentException('invalid length for $friend_value when calling ExtensionCollection., must be smaller than or equal to 25.');
        }

        $this->container['friend_value'] = $friend_value;

        return $this;
    }

    /**
     * Gets ivr
     *
     * @return int
     */
    public function getIvr()
    {
        return $this->container['ivr'];
    }

    /**
     * Sets ivr
     *
     * @param int $ivr 
     *
     * @return $this
     */
    public function setIvr($ivr)
    {
        $this->container['ivr'] = $ivr;

        return $this;
    }

    /**
     * Gets hunt_group
     *
     * @return int
     */
    public function getHuntGroup()
    {
        return $this->container['hunt_group'];
    }

    /**
     * Sets hunt_group
     *
     * @param int $hunt_group 
     *
     * @return $this
     */
    public function setHuntGroup($hunt_group)
    {
        $this->container['hunt_group'] = $hunt_group;

        return $this;
    }

    /**
     * Gets conference_room
     *
     * @return int
     */
    public function getConferenceRoom()
    {
        return $this->container['conference_room'];
    }

    /**
     * Sets conference_room
     *
     * @param int $conference_room 
     *
     * @return $this
     */
    public function setConferenceRoom($conference_room)
    {
        $this->container['conference_room'] = $conference_room;

        return $this;
    }

    /**
     * Gets user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param int $user 
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets queue
     *
     * @return int
     */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
     * Sets queue
     *
     * @param int $queue 
     *
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;

        return $this;
    }

    /**
     * Gets conditional_route
     *
     * @return int
     */
    public function getConditionalRoute()
    {
        return $this->container['conditional_route'];
    }

    /**
     * Sets conditional_route
     *
     * @param int $conditional_route 
     *
     * @return $this
     */
    public function setConditionalRoute($conditional_route)
    {
        $this->container['conditional_route'] = $conditional_route;

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


