<?php
/**
 * AdministratorRelPublicEntity
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
 * AdministratorRelPublicEntity Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdministratorRelPublicEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdministratorRelPublicEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create' => 'bool',
        'read' => 'bool',
        'update' => 'bool',
        'delete' => 'bool',
        'id' => 'int',
        'administrator' => 'int',
        'public_entity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create' => null,
        'read' => null,
        'update' => null,
        'delete' => null,
        'id' => null,
        'administrator' => null,
        'public_entity' => null
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
        'create' => 'create',
        'read' => 'read',
        'update' => 'update',
        'delete' => 'delete',
        'id' => 'id',
        'administrator' => 'administrator',
        'public_entity' => 'publicEntity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create' => 'setCreate',
        'read' => 'setRead',
        'update' => 'setUpdate',
        'delete' => 'setDelete',
        'id' => 'setId',
        'administrator' => 'setAdministrator',
        'public_entity' => 'setPublicEntity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create' => 'getCreate',
        'read' => 'getRead',
        'update' => 'getUpdate',
        'delete' => 'getDelete',
        'id' => 'getId',
        'administrator' => 'getAdministrator',
        'public_entity' => 'getPublicEntity'
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
        $this->container['create'] = isset($data['create']) ? $data['create'] : false;
        $this->container['read'] = isset($data['read']) ? $data['read'] : false;
        $this->container['update'] = isset($data['update']) ? $data['update'] : false;
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : false;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['administrator'] = isset($data['administrator']) ? $data['administrator'] : null;
        $this->container['public_entity'] = isset($data['public_entity']) ? $data['public_entity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['create'] === null) {
            $invalidProperties[] = "'create' can't be null";
        }
        if ($this->container['read'] === null) {
            $invalidProperties[] = "'read' can't be null";
        }
        if ($this->container['update'] === null) {
            $invalidProperties[] = "'update' can't be null";
        }
        if ($this->container['delete'] === null) {
            $invalidProperties[] = "'delete' can't be null";
        }
        if ($this->container['administrator'] === null) {
            $invalidProperties[] = "'administrator' can't be null";
        }
        if ($this->container['public_entity'] === null) {
            $invalidProperties[] = "'public_entity' can't be null";
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
     * Gets create
     *
     * @return bool
     */
    public function getCreate()
    {
        return $this->container['create'];
    }

    /**
     * Sets create
     *
     * @param bool $create 
     *
     * @return $this
     */
    public function setCreate($create)
    {
        $this->container['create'] = $create;

        return $this;
    }

    /**
     * Gets read
     *
     * @return bool
     */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
     * Sets read
     *
     * @param bool $read 
     *
     * @return $this
     */
    public function setRead($read)
    {
        $this->container['read'] = $read;

        return $this;
    }

    /**
     * Gets update
     *
     * @return bool
     */
    public function getUpdate()
    {
        return $this->container['update'];
    }

    /**
     * Sets update
     *
     * @param bool $update 
     *
     * @return $this
     */
    public function setUpdate($update)
    {
        $this->container['update'] = $update;

        return $this;
    }

    /**
     * Gets delete
     *
     * @return bool
     */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
     * Sets delete
     *
     * @param bool $delete 
     *
     * @return $this
     */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;

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
     * Gets administrator
     *
     * @return int
     */
    public function getAdministrator()
    {
        return $this->container['administrator'];
    }

    /**
     * Sets administrator
     *
     * @param int $administrator 
     *
     * @return $this
     */
    public function setAdministrator($administrator)
    {
        $this->container['administrator'] = $administrator;

        return $this;
    }

    /**
     * Gets public_entity
     *
     * @return int
     */
    public function getPublicEntity()
    {
        return $this->container['public_entity'];
    }

    /**
     * Sets public_entity
     *
     * @param int $public_entity 
     *
     * @return $this
     */
    public function setPublicEntity($public_entity)
    {
        $this->container['public_entity'] = $public_entity;

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


