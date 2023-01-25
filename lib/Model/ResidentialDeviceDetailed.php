<?php
/**
 * ResidentialDeviceDetailed
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
 * ResidentialDeviceDetailed Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResidentialDeviceDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResidentialDevice-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'transport' => 'string',
        'password' => 'string',
        'id' => 'int',
        'transformation_rule_set' => '\Delta\Voip\Model\TransformationRuleSet',
        'outgoing_ddi' => '\Delta\Voip\Model\Ddi',
        'language' => '\Delta\Voip\Model\Language'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'transport' => null,
        'password' => null,
        'id' => null,
        'transformation_rule_set' => null,
        'outgoing_ddi' => null,
        'language' => null
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
        'description' => 'description',
        'transport' => 'transport',
        'password' => 'password',
        'id' => 'id',
        'transformation_rule_set' => 'transformationRuleSet',
        'outgoing_ddi' => 'outgoingDdi',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'transport' => 'setTransport',
        'password' => 'setPassword',
        'id' => 'setId',
        'transformation_rule_set' => 'setTransformationRuleSet',
        'outgoing_ddi' => 'setOutgoingDdi',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'transport' => 'getTransport',
        'password' => 'getPassword',
        'id' => 'getId',
        'transformation_rule_set' => 'getTransformationRuleSet',
        'outgoing_ddi' => 'getOutgoingDdi',
        'language' => 'getLanguage'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : '';
        $this->container['transport'] = isset($data['transport']) ? $data['transport'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['transformation_rule_set'] = isset($data['transformation_rule_set']) ? $data['transformation_rule_set'] : null;
        $this->container['outgoing_ddi'] = isset($data['outgoing_ddi']) ? $data['outgoing_ddi'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 65)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 65.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 500)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
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

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 64)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 64.";
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
        if (!is_null($name) && (mb_strlen($name) > 65)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ResidentialDeviceDetailed., must be smaller than or equal to 65.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 500)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ResidentialDeviceDetailed., must be smaller than or equal to 500.');
        }

        $this->container['description'] = $description;

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
            throw new \InvalidArgumentException('invalid length for $transport when calling ResidentialDeviceDetailed., must be smaller than or equal to 25.');
        }

        $this->container['transport'] = $transport;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password 
     *
     * @return $this
     */
    public function setPassword($password)
    {
        if (!is_null($password) && (mb_strlen($password) > 64)) {
            throw new \InvalidArgumentException('invalid length for $password when calling ResidentialDeviceDetailed., must be smaller than or equal to 64.');
        }

        $this->container['password'] = $password;

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
     * Gets transformation_rule_set
     *
     * @return \Delta\Voip\Model\TransformationRuleSet
     */
    public function getTransformationRuleSet()
    {
        return $this->container['transformation_rule_set'];
    }

    /**
     * Sets transformation_rule_set
     *
     * @param \Delta\Voip\Model\TransformationRuleSet $transformation_rule_set transformation_rule_set
     *
     * @return $this
     */
    public function setTransformationRuleSet($transformation_rule_set)
    {
        $this->container['transformation_rule_set'] = $transformation_rule_set;

        return $this;
    }

    /**
     * Gets outgoing_ddi
     *
     * @return \Delta\Voip\Model\Ddi
     */
    public function getOutgoingDdi()
    {
        return $this->container['outgoing_ddi'];
    }

    /**
     * Sets outgoing_ddi
     *
     * @param \Delta\Voip\Model\Ddi $outgoing_ddi outgoing_ddi
     *
     * @return $this
     */
    public function setOutgoingDdi($outgoing_ddi)
    {
        $this->container['outgoing_ddi'] = $outgoing_ddi;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Delta\Voip\Model\Language
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Delta\Voip\Model\Language $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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


