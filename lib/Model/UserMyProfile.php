<?php
/**
 * UserMyProfile
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
 * UserMyProfile Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserMyProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User-myProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'do_not_disturb' => 'bool',
        'is_boss' => 'bool',
        'max_calls' => 'int',
        'boss_assistant' => '\Delta\Voip\Model\User',
        'timezone' => '\Delta\Voip\Model\Timezone'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'lastname' => null,
        'email' => null,
        'do_not_disturb' => null,
        'is_boss' => null,
        'max_calls' => null,
        'boss_assistant' => null,
        'timezone' => null
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
        'name' => 'name',
        'lastname' => 'lastname',
        'email' => 'email',
        'do_not_disturb' => 'doNotDisturb',
        'is_boss' => 'isBoss',
        'max_calls' => 'maxCalls',
        'boss_assistant' => 'bossAssistant',
        'timezone' => 'timezone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'lastname' => 'setLastname',
        'email' => 'setEmail',
        'do_not_disturb' => 'setDoNotDisturb',
        'is_boss' => 'setIsBoss',
        'max_calls' => 'setMaxCalls',
        'boss_assistant' => 'setBossAssistant',
        'timezone' => 'setTimezone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'lastname' => 'getLastname',
        'email' => 'getEmail',
        'do_not_disturb' => 'getDoNotDisturb',
        'is_boss' => 'getIsBoss',
        'max_calls' => 'getMaxCalls',
        'boss_assistant' => 'getBossAssistant',
        'timezone' => 'getTimezone'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['do_not_disturb'] = isset($data['do_not_disturb']) ? $data['do_not_disturb'] : false;
        $this->container['is_boss'] = isset($data['is_boss']) ? $data['is_boss'] : false;
        $this->container['max_calls'] = isset($data['max_calls']) ? $data['max_calls'] : null;
        $this->container['boss_assistant'] = isset($data['boss_assistant']) ? $data['boss_assistant'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
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

        if ($this->container['lastname'] === null) {
            $invalidProperties[] = "'lastname' can't be null";
        }
        if ((mb_strlen($this->container['lastname']) > 100)) {
            $invalidProperties[] = "invalid value for 'lastname', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['do_not_disturb'] === null) {
            $invalidProperties[] = "'do_not_disturb' can't be null";
        }
        if ($this->container['is_boss'] === null) {
            $invalidProperties[] = "'is_boss' can't be null";
        }
        if ($this->container['max_calls'] === null) {
            $invalidProperties[] = "'max_calls' can't be null";
        }
        if (($this->container['max_calls'] < 0)) {
            $invalidProperties[] = "invalid value for 'max_calls', must be bigger than or equal to 0.";
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
            throw new \InvalidArgumentException('invalid length for $name when calling UserMyProfile., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname 
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        if ((mb_strlen($lastname) > 100)) {
            throw new \InvalidArgumentException('invalid length for $lastname when calling UserMyProfile., must be smaller than or equal to 100.');
        }

        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email 
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email when calling UserMyProfile., must be smaller than or equal to 100.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets do_not_disturb
     *
     * @return bool
     */
    public function getDoNotDisturb()
    {
        return $this->container['do_not_disturb'];
    }

    /**
     * Sets do_not_disturb
     *
     * @param bool $do_not_disturb 
     *
     * @return $this
     */
    public function setDoNotDisturb($do_not_disturb)
    {
        $this->container['do_not_disturb'] = $do_not_disturb;

        return $this;
    }

    /**
     * Gets is_boss
     *
     * @return bool
     */
    public function getIsBoss()
    {
        return $this->container['is_boss'];
    }

    /**
     * Sets is_boss
     *
     * @param bool $is_boss 
     *
     * @return $this
     */
    public function setIsBoss($is_boss)
    {
        $this->container['is_boss'] = $is_boss;

        return $this;
    }

    /**
     * Gets max_calls
     *
     * @return int
     */
    public function getMaxCalls()
    {
        return $this->container['max_calls'];
    }

    /**
     * Sets max_calls
     *
     * @param int $max_calls 
     *
     * @return $this
     */
    public function setMaxCalls($max_calls)
    {

        if (($max_calls < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_calls when calling UserMyProfile., must be bigger than or equal to 0.');
        }

        $this->container['max_calls'] = $max_calls;

        return $this;
    }

    /**
     * Gets boss_assistant
     *
     * @return \Delta\Voip\Model\User
     */
    public function getBossAssistant()
    {
        return $this->container['boss_assistant'];
    }

    /**
     * Sets boss_assistant
     *
     * @param \Delta\Voip\Model\User $boss_assistant boss_assistant
     *
     * @return $this
     */
    public function setBossAssistant($boss_assistant)
    {
        $this->container['boss_assistant'] = $boss_assistant;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return \Delta\Voip\Model\Timezone
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param \Delta\Voip\Model\Timezone $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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


