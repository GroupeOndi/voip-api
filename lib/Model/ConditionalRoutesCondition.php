<?php
/**
 * ConditionalRoutesCondition
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
 * ConditionalRoutesCondition Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConditionalRoutesCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConditionalRoutesCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'priority' => 'int',
        'route_type' => 'string',
        'number_value' => 'string',
        'friend_value' => 'string',
        'id' => 'int',
        'conditional_route' => 'int',
        'ivr' => 'int',
        'hunt_group' => 'int',
        'voicemail_user' => 'int',
        'user' => 'int',
        'queue' => 'int',
        'locution' => 'int',
        'conference_room' => 'int',
        'extension' => 'int',
        'number_country' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'priority' => null,
        'route_type' => null,
        'number_value' => null,
        'friend_value' => null,
        'id' => null,
        'conditional_route' => null,
        'ivr' => null,
        'hunt_group' => null,
        'voicemail_user' => null,
        'user' => null,
        'queue' => null,
        'locution' => null,
        'conference_room' => null,
        'extension' => null,
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
        'priority' => 'priority',
        'route_type' => 'routeType',
        'number_value' => 'numberValue',
        'friend_value' => 'friendValue',
        'id' => 'id',
        'conditional_route' => 'conditionalRoute',
        'ivr' => 'ivr',
        'hunt_group' => 'huntGroup',
        'voicemail_user' => 'voicemailUser',
        'user' => 'user',
        'queue' => 'queue',
        'locution' => 'locution',
        'conference_room' => 'conferenceRoom',
        'extension' => 'extension',
        'number_country' => 'numberCountry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'priority' => 'setPriority',
        'route_type' => 'setRouteType',
        'number_value' => 'setNumberValue',
        'friend_value' => 'setFriendValue',
        'id' => 'setId',
        'conditional_route' => 'setConditionalRoute',
        'ivr' => 'setIvr',
        'hunt_group' => 'setHuntGroup',
        'voicemail_user' => 'setVoicemailUser',
        'user' => 'setUser',
        'queue' => 'setQueue',
        'locution' => 'setLocution',
        'conference_room' => 'setConferenceRoom',
        'extension' => 'setExtension',
        'number_country' => 'setNumberCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'priority' => 'getPriority',
        'route_type' => 'getRouteType',
        'number_value' => 'getNumberValue',
        'friend_value' => 'getFriendValue',
        'id' => 'getId',
        'conditional_route' => 'getConditionalRoute',
        'ivr' => 'getIvr',
        'hunt_group' => 'getHuntGroup',
        'voicemail_user' => 'getVoicemailUser',
        'user' => 'getUser',
        'queue' => 'getQueue',
        'locution' => 'getLocution',
        'conference_room' => 'getConferenceRoom',
        'extension' => 'getExtension',
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
    const ROUTE_TYPE_VOICEMAIL = 'voicemail';
    const ROUTE_TYPE_FRIEND = 'friend';
    const ROUTE_TYPE_QUEUE = 'queue';
    const ROUTE_TYPE_CONFERENCE_ROOM = 'conferenceRoom';
    const ROUTE_TYPE_EXTENSION = 'extension';
    

    
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
            self::ROUTE_TYPE_VOICEMAIL,
            self::ROUTE_TYPE_FRIEND,
            self::ROUTE_TYPE_QUEUE,
            self::ROUTE_TYPE_CONFERENCE_ROOM,
            self::ROUTE_TYPE_EXTENSION,
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
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['route_type'] = isset($data['route_type']) ? $data['route_type'] : null;
        $this->container['number_value'] = isset($data['number_value']) ? $data['number_value'] : null;
        $this->container['friend_value'] = isset($data['friend_value']) ? $data['friend_value'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['conditional_route'] = isset($data['conditional_route']) ? $data['conditional_route'] : null;
        $this->container['ivr'] = isset($data['ivr']) ? $data['ivr'] : null;
        $this->container['hunt_group'] = isset($data['hunt_group']) ? $data['hunt_group'] : null;
        $this->container['voicemail_user'] = isset($data['voicemail_user']) ? $data['voicemail_user'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['locution'] = isset($data['locution']) ? $data['locution'] : null;
        $this->container['conference_room'] = isset($data['conference_room']) ? $data['conference_room'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
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

        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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

        if ($this->container['conditional_route'] === null) {
            $invalidProperties[] = "'conditional_route' can't be null";
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
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority 
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

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
            throw new \InvalidArgumentException('invalid length for $route_type when calling ConditionalRoutesCondition., must be smaller than or equal to 25.');
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
            throw new \InvalidArgumentException('invalid length for $number_value when calling ConditionalRoutesCondition., must be smaller than or equal to 25.');
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
            throw new \InvalidArgumentException('invalid length for $friend_value when calling ConditionalRoutesCondition., must be smaller than or equal to 25.');
        }

        $this->container['friend_value'] = $friend_value;

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
     * Gets voicemail_user
     *
     * @return int
     */
    public function getVoicemailUser()
    {
        return $this->container['voicemail_user'];
    }

    /**
     * Sets voicemail_user
     *
     * @param int $voicemail_user 
     *
     * @return $this
     */
    public function setVoicemailUser($voicemail_user)
    {
        $this->container['voicemail_user'] = $voicemail_user;

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


