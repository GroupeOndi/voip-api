<?php
/**
 * ResidentialDeviceCollection
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
 * ResidentialDeviceCollection Class Doc Comment
 *
 * @category Class
 * @package  Delta/Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResidentialDeviceCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResidentialDevice-collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'transport' => 'string',
        'auth_needed' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'transport' => null,
        'auth_needed' => null
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
        'transport' => 'transport',
        'auth_needed' => 'authNeeded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'transport' => 'setTransport',
        'auth_needed' => 'setAuthNeeded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'transport' => 'getTransport',
        'auth_needed' => 'getAuthNeeded'
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

    const TRANSPORT_UDP = 'udp';
    const TRANSPORT_TCP = 'tcp';
    const TRANSPORT_TLS = 'tls';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportAllowableValues()
    {
        return [
            self::TRANSPORT_UDP,
            self::TRANSPORT_TCP,
            self::TRANSPORT_TLS,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['transport'] = isset($data['transport']) ? $data['transport'] : null;
        $this->container['auth_needed'] = isset($data['auth_needed']) ? $data['auth_needed'] : 'yes';
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
        if ((mb_strlen($this->container['name']) > 65)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 65.";
        }

        $allowedValues = $this->getTransportAllowableValues();
        if (!is_null($this->container['transport']) && !in_array($this->container['transport'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transport', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['transport']) && (mb_strlen($this->container['transport']) > 25)) {
            $invalidProperties[] = "invalid value for 'transport', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['auth_needed'] === null) {
            $invalidProperties[] = "'auth_needed' can't be null";
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
        if ((mb_strlen($name) > 65)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ResidentialDeviceCollection., must be smaller than or equal to 65.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets transport
     *
     * @return string
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     *
     * @param string $transport 
     *
     * @return $this
     */
    public function setTransport($transport)
    {
        $allowedValues = $this->getTransportAllowableValues();
        if (!is_null($transport) && !in_array($transport, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transport', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($transport) && (mb_strlen($transport) > 25)) {
            throw new \InvalidArgumentException('invalid length for $transport when calling ResidentialDeviceCollection., must be smaller than or equal to 25.');
        }

        $this->container['transport'] = $transport;

        return $this;
    }

    /**
     * Gets auth_needed
     *
     * @return string
     */
    public function getAuthNeeded()
    {
        return $this->container['auth_needed'];
    }

    /**
     * Sets auth_needed
     *
     * @param string $auth_needed 
     *
     * @return $this
     */
    public function setAuthNeeded($auth_needed)
    {
        $this->container['auth_needed'] = $auth_needed;

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


