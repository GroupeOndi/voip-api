<?php
/**
 * ConditionalRoute
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
 * ConditionalRoute Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConditionalRoute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConditionalRoute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'routetype' => 'string',
        'numbervalue' => 'string',
        'friendvalue' => 'string',
        'id' => 'int',
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
        'name' => null,
        'routetype' => null,
        'numbervalue' => null,
        'friendvalue' => null,
        'id' => null,
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
        'name' => 'name',
        'routetype' => 'routetype',
        'numbervalue' => 'numbervalue',
        'friendvalue' => 'friendvalue',
        'id' => 'id',
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
        'name' => 'setName',
        'routetype' => 'setRoutetype',
        'numbervalue' => 'setNumbervalue',
        'friendvalue' => 'setFriendvalue',
        'id' => 'setId',
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
        'name' => 'getName',
        'routetype' => 'getRoutetype',
        'numbervalue' => 'getNumbervalue',
        'friendvalue' => 'getFriendvalue',
        'id' => 'getId',
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

    const ROUTETYPE_USER = 'user';
    const ROUTETYPE_NUMBER = 'number';
    const ROUTETYPE_IVR = 'ivr';
    const ROUTETYPE_HUNT_GROUP = 'huntGroup';
    const ROUTETYPE_VOICEMAIL = 'voicemail';
    const ROUTETYPE_FRIEND = 'friend';
    const ROUTETYPE_QUEUE = 'queue';
    const ROUTETYPE_CONFERENCE_ROOM = 'conferenceRoom';
    const ROUTETYPE_EXTENSION = 'extension';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoutetypeAllowableValues()
    {
        return [
            self::ROUTETYPE_USER,
            self::ROUTETYPE_NUMBER,
            self::ROUTETYPE_IVR,
            self::ROUTETYPE_HUNT_GROUP,
            self::ROUTETYPE_VOICEMAIL,
            self::ROUTETYPE_FRIEND,
            self::ROUTETYPE_QUEUE,
            self::ROUTETYPE_CONFERENCE_ROOM,
            self::ROUTETYPE_EXTENSION,
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
        $this->container['routetype'] = isset($data['routetype']) ? $data['routetype'] : null;
        $this->container['numbervalue'] = isset($data['numbervalue']) ? $data['numbervalue'] : null;
        $this->container['friendvalue'] = isset($data['friendvalue']) ? $data['friendvalue'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        $allowedValues = $this->getRoutetypeAllowableValues();
        if (!is_null($this->container['routetype']) && !in_array($this->container['routetype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'routetype', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['routetype']) && (mb_strlen($this->container['routetype']) > 25)) {
            $invalidProperties[] = "invalid value for 'routetype', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['numbervalue']) && (mb_strlen($this->container['numbervalue']) > 25)) {
            $invalidProperties[] = "invalid value for 'numbervalue', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['friendvalue']) && (mb_strlen($this->container['friendvalue']) > 25)) {
            $invalidProperties[] = "invalid value for 'friendvalue', the character length must be smaller than or equal to 25.";
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
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ConditionalRoute., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets routetype
     *
     * @return string
     */
    public function getRoutetype()
    {
        return $this->container['routetype'];
    }

    /**
     * Sets routetype
     *
     * @param string $routetype 
     *
     * @return $this
     */
    public function setRoutetype($routetype)
    {
        $allowedValues = $this->getRoutetypeAllowableValues();
        if (!is_null($routetype) && !in_array($routetype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'routetype', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($routetype) && (mb_strlen($routetype) > 25)) {
            throw new \InvalidArgumentException('invalid length for $routetype when calling ConditionalRoute., must be smaller than or equal to 25.');
        }

        $this->container['routetype'] = $routetype;

        return $this;
    }

    /**
     * Gets numbervalue
     *
     * @return string
     */
    public function getNumbervalue()
    {
        return $this->container['numbervalue'];
    }

    /**
     * Sets numbervalue
     *
     * @param string $numbervalue 
     *
     * @return $this
     */
    public function setNumbervalue($numbervalue)
    {
        if (!is_null($numbervalue) && (mb_strlen($numbervalue) > 25)) {
            throw new \InvalidArgumentException('invalid length for $numbervalue when calling ConditionalRoute., must be smaller than or equal to 25.');
        }

        $this->container['numbervalue'] = $numbervalue;

        return $this;
    }

    /**
     * Gets friendvalue
     *
     * @return string
     */
    public function getFriendvalue()
    {
        return $this->container['friendvalue'];
    }

    /**
     * Sets friendvalue
     *
     * @param string $friendvalue 
     *
     * @return $this
     */
    public function setFriendvalue($friendvalue)
    {
        if (!is_null($friendvalue) && (mb_strlen($friendvalue) > 25)) {
            throw new \InvalidArgumentException('invalid length for $friendvalue when calling ConditionalRoute., must be smaller than or equal to 25.');
        }

        $this->container['friendvalue'] = $friendvalue;

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


