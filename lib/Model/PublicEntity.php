<?php
/**
 * PublicEntity
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
 * PublicEntity Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublicEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PublicEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iden' => 'string',
        'fqdn' => 'string',
        'platform' => 'bool',
        'brand' => 'bool',
        'client' => 'bool',
        'id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iden' => null,
        'fqdn' => null,
        'platform' => null,
        'brand' => null,
        'client' => null,
        'id' => null
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
        'iden' => 'iden',
        'fqdn' => 'fqdn',
        'platform' => 'platform',
        'brand' => 'brand',
        'client' => 'client',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iden' => 'setIden',
        'fqdn' => 'setFqdn',
        'platform' => 'setPlatform',
        'brand' => 'setBrand',
        'client' => 'setClient',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iden' => 'getIden',
        'fqdn' => 'getFqdn',
        'platform' => 'getPlatform',
        'brand' => 'getBrand',
        'client' => 'getClient',
        'id' => 'getId'
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
        $this->container['iden'] = isset($data['iden']) ? $data['iden'] : null;
        $this->container['fqdn'] = isset($data['fqdn']) ? $data['fqdn'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : false;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : false;
        $this->container['client'] = isset($data['client']) ? $data['client'] : false;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['iden'] === null) {
            $invalidProperties[] = "'iden' can't be null";
        }
        if ((mb_strlen($this->container['iden']) > 100)) {
            $invalidProperties[] = "invalid value for 'iden', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['fqdn']) && (mb_strlen($this->container['fqdn']) > 200)) {
            $invalidProperties[] = "invalid value for 'fqdn', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['platform'] === null) {
            $invalidProperties[] = "'platform' can't be null";
        }
        if ($this->container['brand'] === null) {
            $invalidProperties[] = "'brand' can't be null";
        }
        if ($this->container['client'] === null) {
            $invalidProperties[] = "'client' can't be null";
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
     * Gets iden
     *
     * @return string
     */
    public function getIden()
    {
        return $this->container['iden'];
    }

    /**
     * Sets iden
     *
     * @param string $iden 
     *
     * @return $this
     */
    public function setIden($iden)
    {
        if ((mb_strlen($iden) > 100)) {
            throw new \InvalidArgumentException('invalid length for $iden when calling PublicEntity., must be smaller than or equal to 100.');
        }

        $this->container['iden'] = $iden;

        return $this;
    }

    /**
     * Gets fqdn
     *
     * @return string
     */
    public function getFqdn()
    {
        return $this->container['fqdn'];
    }

    /**
     * Sets fqdn
     *
     * @param string $fqdn 
     *
     * @return $this
     */
    public function setFqdn($fqdn)
    {
        if (!is_null($fqdn) && (mb_strlen($fqdn) > 200)) {
            throw new \InvalidArgumentException('invalid length for $fqdn when calling PublicEntity., must be smaller than or equal to 200.');
        }

        $this->container['fqdn'] = $fqdn;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return bool
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param bool $platform 
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return bool
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param bool $brand 
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets client
     *
     * @return bool
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param bool $client 
     *
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

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


