<?php
/**
 * UsersCdrDetailed
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
 * UsersCdrDetailed Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersCdrDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UsersCdr-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'duration' => 'float',
        'direction' => 'string',
        'caller' => 'string',
        'callee' => 'string',
        'diversion' => 'string',
        'referee' => 'string',
        'referrer' => 'string',
        'callid' => 'string',
        'callid_hash' => 'string',
        'xcallid' => 'string',
        'id' => 'int',
        'user' => '\Swagger\Client\Model\User',
        'friend' => '\Swagger\Client\Model\Friend',
        'residential_device' => '\Swagger\Client\Model\ResidentialDevice',
        'retail_account' => '\Swagger\Client\Model\RetailAccount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'duration' => 'float',
        'direction' => null,
        'caller' => null,
        'callee' => null,
        'diversion' => null,
        'referee' => null,
        'referrer' => null,
        'callid' => null,
        'callid_hash' => null,
        'xcallid' => null,
        'id' => null,
        'user' => null,
        'friend' => null,
        'residential_device' => null,
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
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'duration' => 'duration',
        'direction' => 'direction',
        'caller' => 'caller',
        'callee' => 'callee',
        'diversion' => 'diversion',
        'referee' => 'referee',
        'referrer' => 'referrer',
        'callid' => 'callid',
        'callid_hash' => 'callidHash',
        'xcallid' => 'xcallid',
        'id' => 'id',
        'user' => 'user',
        'friend' => 'friend',
        'residential_device' => 'residentialDevice',
        'retail_account' => 'retailAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'duration' => 'setDuration',
        'direction' => 'setDirection',
        'caller' => 'setCaller',
        'callee' => 'setCallee',
        'diversion' => 'setDiversion',
        'referee' => 'setReferee',
        'referrer' => 'setReferrer',
        'callid' => 'setCallid',
        'callid_hash' => 'setCallidHash',
        'xcallid' => 'setXcallid',
        'id' => 'setId',
        'user' => 'setUser',
        'friend' => 'setFriend',
        'residential_device' => 'setResidentialDevice',
        'retail_account' => 'setRetailAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'duration' => 'getDuration',
        'direction' => 'getDirection',
        'caller' => 'getCaller',
        'callee' => 'getCallee',
        'diversion' => 'getDiversion',
        'referee' => 'getReferee',
        'referrer' => 'getReferrer',
        'callid' => 'getCallid',
        'callid_hash' => 'getCallidHash',
        'xcallid' => 'getXcallid',
        'id' => 'getId',
        'user' => 'getUser',
        'friend' => 'getFriend',
        'residential_device' => 'getResidentialDevice',
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
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : 0.0;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['caller'] = isset($data['caller']) ? $data['caller'] : null;
        $this->container['callee'] = isset($data['callee']) ? $data['callee'] : null;
        $this->container['diversion'] = isset($data['diversion']) ? $data['diversion'] : null;
        $this->container['referee'] = isset($data['referee']) ? $data['referee'] : null;
        $this->container['referrer'] = isset($data['referrer']) ? $data['referrer'] : null;
        $this->container['callid'] = isset($data['callid']) ? $data['callid'] : null;
        $this->container['callid_hash'] = isset($data['callid_hash']) ? $data['callid_hash'] : null;
        $this->container['xcallid'] = isset($data['xcallid']) ? $data['xcallid'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['friend'] = isset($data['friend']) ? $data['friend'] : null;
        $this->container['residential_device'] = isset($data['residential_device']) ? $data['residential_device'] : null;
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

        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['end_time'] === null) {
            $invalidProperties[] = "'end_time' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if (!is_null($this->container['caller']) && (mb_strlen($this->container['caller']) > 128)) {
            $invalidProperties[] = "invalid value for 'caller', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['callee']) && (mb_strlen($this->container['callee']) > 128)) {
            $invalidProperties[] = "invalid value for 'callee', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['diversion']) && (mb_strlen($this->container['diversion']) > 64)) {
            $invalidProperties[] = "invalid value for 'diversion', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['referee']) && (mb_strlen($this->container['referee']) > 128)) {
            $invalidProperties[] = "invalid value for 'referee', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['referrer']) && (mb_strlen($this->container['referrer']) > 128)) {
            $invalidProperties[] = "invalid value for 'referrer', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['callid']) && (mb_strlen($this->container['callid']) > 255)) {
            $invalidProperties[] = "invalid value for 'callid', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['callid_hash']) && (mb_strlen($this->container['callid_hash']) > 128)) {
            $invalidProperties[] = "invalid value for 'callid_hash', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['xcallid']) && (mb_strlen($this->container['xcallid']) > 255)) {
            $invalidProperties[] = "invalid value for 'xcallid', the character length must be smaller than or equal to 255.";
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
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time 
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time 
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return float
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param float $duration 
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction 
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets caller
     *
     * @return string
     */
    public function getCaller()
    {
        return $this->container['caller'];
    }

    /**
     * Sets caller
     *
     * @param string $caller 
     *
     * @return $this
     */
    public function setCaller($caller)
    {
        if (!is_null($caller) && (mb_strlen($caller) > 128)) {
            throw new \InvalidArgumentException('invalid length for $caller when calling UsersCdrDetailed., must be smaller than or equal to 128.');
        }

        $this->container['caller'] = $caller;

        return $this;
    }

    /**
     * Gets callee
     *
     * @return string
     */
    public function getCallee()
    {
        return $this->container['callee'];
    }

    /**
     * Sets callee
     *
     * @param string $callee 
     *
     * @return $this
     */
    public function setCallee($callee)
    {
        if (!is_null($callee) && (mb_strlen($callee) > 128)) {
            throw new \InvalidArgumentException('invalid length for $callee when calling UsersCdrDetailed., must be smaller than or equal to 128.');
        }

        $this->container['callee'] = $callee;

        return $this;
    }

    /**
     * Gets diversion
     *
     * @return string
     */
    public function getDiversion()
    {
        return $this->container['diversion'];
    }

    /**
     * Sets diversion
     *
     * @param string $diversion 
     *
     * @return $this
     */
    public function setDiversion($diversion)
    {
        if (!is_null($diversion) && (mb_strlen($diversion) > 64)) {
            throw new \InvalidArgumentException('invalid length for $diversion when calling UsersCdrDetailed., must be smaller than or equal to 64.');
        }

        $this->container['diversion'] = $diversion;

        return $this;
    }

    /**
     * Gets referee
     *
     * @return string
     */
    public function getReferee()
    {
        return $this->container['referee'];
    }

    /**
     * Sets referee
     *
     * @param string $referee 
     *
     * @return $this
     */
    public function setReferee($referee)
    {
        if (!is_null($referee) && (mb_strlen($referee) > 128)) {
            throw new \InvalidArgumentException('invalid length for $referee when calling UsersCdrDetailed., must be smaller than or equal to 128.');
        }

        $this->container['referee'] = $referee;

        return $this;
    }

    /**
     * Gets referrer
     *
     * @return string
     */
    public function getReferrer()
    {
        return $this->container['referrer'];
    }

    /**
     * Sets referrer
     *
     * @param string $referrer 
     *
     * @return $this
     */
    public function setReferrer($referrer)
    {
        if (!is_null($referrer) && (mb_strlen($referrer) > 128)) {
            throw new \InvalidArgumentException('invalid length for $referrer when calling UsersCdrDetailed., must be smaller than or equal to 128.');
        }

        $this->container['referrer'] = $referrer;

        return $this;
    }

    /**
     * Gets callid
     *
     * @return string
     */
    public function getCallid()
    {
        return $this->container['callid'];
    }

    /**
     * Sets callid
     *
     * @param string $callid 
     *
     * @return $this
     */
    public function setCallid($callid)
    {
        if (!is_null($callid) && (mb_strlen($callid) > 255)) {
            throw new \InvalidArgumentException('invalid length for $callid when calling UsersCdrDetailed., must be smaller than or equal to 255.');
        }

        $this->container['callid'] = $callid;

        return $this;
    }

    /**
     * Gets callid_hash
     *
     * @return string
     */
    public function getCallidHash()
    {
        return $this->container['callid_hash'];
    }

    /**
     * Sets callid_hash
     *
     * @param string $callid_hash 
     *
     * @return $this
     */
    public function setCallidHash($callid_hash)
    {
        if (!is_null($callid_hash) && (mb_strlen($callid_hash) > 128)) {
            throw new \InvalidArgumentException('invalid length for $callid_hash when calling UsersCdrDetailed., must be smaller than or equal to 128.');
        }

        $this->container['callid_hash'] = $callid_hash;

        return $this;
    }

    /**
     * Gets xcallid
     *
     * @return string
     */
    public function getXcallid()
    {
        return $this->container['xcallid'];
    }

    /**
     * Sets xcallid
     *
     * @param string $xcallid 
     *
     * @return $this
     */
    public function setXcallid($xcallid)
    {
        if (!is_null($xcallid) && (mb_strlen($xcallid) > 255)) {
            throw new \InvalidArgumentException('invalid length for $xcallid when calling UsersCdrDetailed., must be smaller than or equal to 255.');
        }

        $this->container['xcallid'] = $xcallid;

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
     * Gets friend
     *
     * @return \Swagger\Client\Model\Friend
     */
    public function getFriend()
    {
        return $this->container['friend'];
    }

    /**
     * Sets friend
     *
     * @param \Swagger\Client\Model\Friend $friend friend
     *
     * @return $this
     */
    public function setFriend($friend)
    {
        $this->container['friend'] = $friend;

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

