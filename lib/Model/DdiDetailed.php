<?php
/**
 * DdiDetailed
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DdiDetailed Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DdiDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ddi-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ddi' => 'string',
        'ddie164' => 'string',
        'record_calls' => 'string',
        'display_name' => 'string',
        'route_type' => 'string',
        'friend_value' => 'string',
        'id' => 'int',
        'conference_room' => '\Swagger\Client\Model\ConferenceRoom',
        'language' => '\Swagger\Client\Model\Language',
        'queue' => '\Swagger\Client\Model\Queue',
        'external_call_filter' => '\Swagger\Client\Model\ExternalCallFilter',
        'user' => '\Swagger\Client\Model\User',
        'ivr' => '\Swagger\Client\Model\Ivr',
        'hunt_group' => '\Swagger\Client\Model\HuntGroup',
        'fax' => '\Swagger\Client\Model\Fax',
        'country' => '\Swagger\Client\Model\Country',
        'residential_device' => '\Swagger\Client\Model\ResidentialDevice',
        'conditional_route' => '\Swagger\Client\Model\ConditionalRoute',
        'retail_account' => '\Swagger\Client\Model\RetailAccount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ddi' => null,
        'ddie164' => null,
        'record_calls' => null,
        'display_name' => null,
        'route_type' => null,
        'friend_value' => null,
        'id' => null,
        'conference_room' => null,
        'language' => null,
        'queue' => null,
        'external_call_filter' => null,
        'user' => null,
        'ivr' => null,
        'hunt_group' => null,
        'fax' => null,
        'country' => null,
        'residential_device' => null,
        'conditional_route' => null,
        'retail_account' => null
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
        'ddi' => 'ddi',
        'ddie164' => 'ddie164',
        'record_calls' => 'recordCalls',
        'display_name' => 'displayName',
        'route_type' => 'routeType',
        'friend_value' => 'friendValue',
        'id' => 'id',
        'conference_room' => 'conferenceRoom',
        'language' => 'language',
        'queue' => 'queue',
        'external_call_filter' => 'externalCallFilter',
        'user' => 'user',
        'ivr' => 'ivr',
        'hunt_group' => 'huntGroup',
        'fax' => 'fax',
        'country' => 'country',
        'residential_device' => 'residentialDevice',
        'conditional_route' => 'conditionalRoute',
        'retail_account' => 'retailAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ddi' => 'setDdi',
        'ddie164' => 'setDdie164',
        'record_calls' => 'setRecordCalls',
        'display_name' => 'setDisplayName',
        'route_type' => 'setRouteType',
        'friend_value' => 'setFriendValue',
        'id' => 'setId',
        'conference_room' => 'setConferenceRoom',
        'language' => 'setLanguage',
        'queue' => 'setQueue',
        'external_call_filter' => 'setExternalCallFilter',
        'user' => 'setUser',
        'ivr' => 'setIvr',
        'hunt_group' => 'setHuntGroup',
        'fax' => 'setFax',
        'country' => 'setCountry',
        'residential_device' => 'setResidentialDevice',
        'conditional_route' => 'setConditionalRoute',
        'retail_account' => 'setRetailAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ddi' => 'getDdi',
        'ddie164' => 'getDdie164',
        'record_calls' => 'getRecordCalls',
        'display_name' => 'getDisplayName',
        'route_type' => 'getRouteType',
        'friend_value' => 'getFriendValue',
        'id' => 'getId',
        'conference_room' => 'getConferenceRoom',
        'language' => 'getLanguage',
        'queue' => 'getQueue',
        'external_call_filter' => 'getExternalCallFilter',
        'user' => 'getUser',
        'ivr' => 'getIvr',
        'hunt_group' => 'getHuntGroup',
        'fax' => 'getFax',
        'country' => 'getCountry',
        'residential_device' => 'getResidentialDevice',
        'conditional_route' => 'getConditionalRoute',
        'retail_account' => 'getRetailAccount'
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

    const RECORD_CALLS_NONE = 'none';
    const RECORD_CALLS_ALL = 'all';
    const RECORD_CALLS_INBOUND = 'inbound';
    const RECORD_CALLS_OUTBOUND = 'outbound';
    const ROUTE_TYPE_USER = 'user';
    const ROUTE_TYPE_IVR = 'ivr';
    const ROUTE_TYPE_HUNT_GROUP = 'huntGroup';
    const ROUTE_TYPE_FAX = 'fax';
    const ROUTE_TYPE_CONFERENCE_ROOM = 'conferenceRoom';
    const ROUTE_TYPE_FRIEND = 'friend';
    const ROUTE_TYPE_QUEUE = 'queue';
    const ROUTE_TYPE_CONDITIONAL = 'conditional';
    const ROUTE_TYPE_RESIDENTIAL = 'residential';
    const ROUTE_TYPE_RETAIL = 'retail';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecordCallsAllowableValues()
    {
        return [
            self::RECORD_CALLS_NONE,
            self::RECORD_CALLS_ALL,
            self::RECORD_CALLS_INBOUND,
            self::RECORD_CALLS_OUTBOUND,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRouteTypeAllowableValues()
    {
        return [
            self::ROUTE_TYPE_USER,
            self::ROUTE_TYPE_IVR,
            self::ROUTE_TYPE_HUNT_GROUP,
            self::ROUTE_TYPE_FAX,
            self::ROUTE_TYPE_CONFERENCE_ROOM,
            self::ROUTE_TYPE_FRIEND,
            self::ROUTE_TYPE_QUEUE,
            self::ROUTE_TYPE_CONDITIONAL,
            self::ROUTE_TYPE_RESIDENTIAL,
            self::ROUTE_TYPE_RETAIL,
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
        $this->container['ddi'] = isset($data['ddi']) ? $data['ddi'] : null;
        $this->container['ddie164'] = isset($data['ddie164']) ? $data['ddie164'] : null;
        $this->container['record_calls'] = isset($data['record_calls']) ? $data['record_calls'] : 'none';
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['route_type'] = isset($data['route_type']) ? $data['route_type'] : null;
        $this->container['friend_value'] = isset($data['friend_value']) ? $data['friend_value'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['conference_room'] = isset($data['conference_room']) ? $data['conference_room'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['external_call_filter'] = isset($data['external_call_filter']) ? $data['external_call_filter'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['ivr'] = isset($data['ivr']) ? $data['ivr'] : null;
        $this->container['hunt_group'] = isset($data['hunt_group']) ? $data['hunt_group'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['residential_device'] = isset($data['residential_device']) ? $data['residential_device'] : null;
        $this->container['conditional_route'] = isset($data['conditional_route']) ? $data['conditional_route'] : null;
        $this->container['retail_account'] = isset($data['retail_account']) ? $data['retail_account'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['ddi']) && (mb_strlen($this->container['ddi']) > 25)) {
            $invalidProperties[] = "invalid value for 'ddi', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['ddie164']) && (mb_strlen($this->container['ddie164']) > 25)) {
            $invalidProperties[] = "invalid value for 'ddie164', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['record_calls'] === null) {
            $invalidProperties[] = "'record_calls' can't be null";
        }
        $allowedValues = $this->getRecordCallsAllowableValues();
        if (!is_null($this->container['record_calls']) && !in_array($this->container['record_calls'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'record_calls', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['record_calls']) > 25)) {
            $invalidProperties[] = "invalid value for 'record_calls', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['display_name']) && (mb_strlen($this->container['display_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be smaller than or equal to 50.";
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
     * Gets ddi
     *
     * @return string
     */
    public function getDdi()
    {
        return $this->container['ddi'];
    }

    /**
     * Sets ddi
     *
     * @param string $ddi 
     *
     * @return $this
     */
    public function setDdi($ddi)
    {
        if (!is_null($ddi) && (mb_strlen($ddi) > 25)) {
            throw new \InvalidArgumentException('invalid length for $ddi when calling DdiDetailed., must be smaller than or equal to 25.');
        }

        $this->container['ddi'] = $ddi;

        return $this;
    }

    /**
     * Gets ddie164
     *
     * @return string
     */
    public function getDdie164()
    {
        return $this->container['ddie164'];
    }

    /**
     * Sets ddie164
     *
     * @param string $ddie164 
     *
     * @return $this
     */
    public function setDdie164($ddie164)
    {
        if (!is_null($ddie164) && (mb_strlen($ddie164) > 25)) {
            throw new \InvalidArgumentException('invalid length for $ddie164 when calling DdiDetailed., must be smaller than or equal to 25.');
        }

        $this->container['ddie164'] = $ddie164;

        return $this;
    }

    /**
     * Gets record_calls
     *
     * @return string
     */
    public function getRecordCalls()
    {
        return $this->container['record_calls'];
    }

    /**
     * Sets record_calls
     *
     * @param string $record_calls 
     *
     * @return $this
     */
    public function setRecordCalls($record_calls)
    {
        $allowedValues = $this->getRecordCallsAllowableValues();
        if (!in_array($record_calls, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'record_calls', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($record_calls) > 25)) {
            throw new \InvalidArgumentException('invalid length for $record_calls when calling DdiDetailed., must be smaller than or equal to 25.');
        }

        $this->container['record_calls'] = $record_calls;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name 
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        if (!is_null($display_name) && (mb_strlen($display_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling DdiDetailed., must be smaller than or equal to 50.');
        }

        $this->container['display_name'] = $display_name;

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
            throw new \InvalidArgumentException('invalid length for $route_type when calling DdiDetailed., must be smaller than or equal to 25.');
        }

        $this->container['route_type'] = $route_type;

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
            throw new \InvalidArgumentException('invalid length for $friend_value when calling DdiDetailed., must be smaller than or equal to 25.');
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
     * Gets conference_room
     *
     * @return \Swagger\Client\Model\ConferenceRoom
     */
    public function getConferenceRoom()
    {
        return $this->container['conference_room'];
    }

    /**
     * Sets conference_room
     *
     * @param \Swagger\Client\Model\ConferenceRoom $conference_room conference_room
     *
     * @return $this
     */
    public function setConferenceRoom($conference_room)
    {
        $this->container['conference_room'] = $conference_room;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Swagger\Client\Model\Language
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Swagger\Client\Model\Language $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets queue
     *
     * @return \Swagger\Client\Model\Queue
     */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
     * Sets queue
     *
     * @param \Swagger\Client\Model\Queue $queue queue
     *
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;

        return $this;
    }

    /**
     * Gets external_call_filter
     *
     * @return \Swagger\Client\Model\ExternalCallFilter
     */
    public function getExternalCallFilter()
    {
        return $this->container['external_call_filter'];
    }

    /**
     * Sets external_call_filter
     *
     * @param \Swagger\Client\Model\ExternalCallFilter $external_call_filter external_call_filter
     *
     * @return $this
     */
    public function setExternalCallFilter($external_call_filter)
    {
        $this->container['external_call_filter'] = $external_call_filter;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Swagger\Client\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Swagger\Client\Model\User $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets ivr
     *
     * @return \Swagger\Client\Model\Ivr
     */
    public function getIvr()
    {
        return $this->container['ivr'];
    }

    /**
     * Sets ivr
     *
     * @param \Swagger\Client\Model\Ivr $ivr ivr
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
     * @return \Swagger\Client\Model\HuntGroup
     */
    public function getHuntGroup()
    {
        return $this->container['hunt_group'];
    }

    /**
     * Sets hunt_group
     *
     * @param \Swagger\Client\Model\HuntGroup $hunt_group hunt_group
     *
     * @return $this
     */
    public function setHuntGroup($hunt_group)
    {
        $this->container['hunt_group'] = $hunt_group;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return \Swagger\Client\Model\Fax
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param \Swagger\Client\Model\Fax $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Swagger\Client\Model\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Swagger\Client\Model\Country $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets residential_device
     *
     * @return \Swagger\Client\Model\ResidentialDevice
     */
    public function getResidentialDevice()
    {
        return $this->container['residential_device'];
    }

    /**
     * Sets residential_device
     *
     * @param \Swagger\Client\Model\ResidentialDevice $residential_device residential_device
     *
     * @return $this
     */
    public function setResidentialDevice($residential_device)
    {
        $this->container['residential_device'] = $residential_device;

        return $this;
    }

    /**
     * Gets conditional_route
     *
     * @return \Swagger\Client\Model\ConditionalRoute
     */
    public function getConditionalRoute()
    {
        return $this->container['conditional_route'];
    }

    /**
     * Sets conditional_route
     *
     * @param \Swagger\Client\Model\ConditionalRoute $conditional_route conditional_route
     *
     * @return $this
     */
    public function setConditionalRoute($conditional_route)
    {
        $this->container['conditional_route'] = $conditional_route;

        return $this;
    }

    /**
     * Gets retail_account
     *
     * @return \Swagger\Client\Model\RetailAccount
     */
    public function getRetailAccount()
    {
        return $this->container['retail_account'];
    }

    /**
     * Sets retail_account
     *
     * @param \Swagger\Client\Model\RetailAccount $retail_account retail_account
     *
     * @return $this
     */
    public function setRetailAccount($retail_account)
    {
        $this->container['retail_account'] = $retail_account;

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


