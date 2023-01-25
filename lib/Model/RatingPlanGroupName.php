<?php
/**
 * RatingPlanGroupName
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
 * RatingPlanGroupName Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RatingPlanGroupName implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RatingPlanGroup_Name';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'en' => 'string',
        'es' => 'string',
        'ca' => 'string',
        'it' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'en' => null,
        'es' => null,
        'ca' => null,
        'it' => null
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
        'en' => 'en',
        'es' => 'es',
        'ca' => 'ca',
        'it' => 'it'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'en' => 'setEn',
        'es' => 'setEs',
        'ca' => 'setCa',
        'it' => 'setIt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'en' => 'getEn',
        'es' => 'getEs',
        'ca' => 'getCa',
        'it' => 'getIt'
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
        $this->container['en'] = isset($data['en']) ? $data['en'] : null;
        $this->container['es'] = isset($data['es']) ? $data['es'] : null;
        $this->container['ca'] = isset($data['ca']) ? $data['ca'] : null;
        $this->container['it'] = isset($data['it']) ? $data['it'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['en'] === null) {
            $invalidProperties[] = "'en' can't be null";
        }
        if ((mb_strlen($this->container['en']) > 55)) {
            $invalidProperties[] = "invalid value for 'en', the character length must be smaller than or equal to 55.";
        }

        if ($this->container['es'] === null) {
            $invalidProperties[] = "'es' can't be null";
        }
        if ((mb_strlen($this->container['es']) > 55)) {
            $invalidProperties[] = "invalid value for 'es', the character length must be smaller than or equal to 55.";
        }

        if ($this->container['ca'] === null) {
            $invalidProperties[] = "'ca' can't be null";
        }
        if ((mb_strlen($this->container['ca']) > 55)) {
            $invalidProperties[] = "invalid value for 'ca', the character length must be smaller than or equal to 55.";
        }

        if ($this->container['it'] === null) {
            $invalidProperties[] = "'it' can't be null";
        }
        if ((mb_strlen($this->container['it']) > 55)) {
            $invalidProperties[] = "invalid value for 'it', the character length must be smaller than or equal to 55.";
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
     * Gets en
     *
     * @return string
     */
    public function getEn()
    {
        return $this->container['en'];
    }

    /**
     * Sets en
     *
     * @param string $en 
     *
     * @return $this
     */
    public function setEn($en)
    {
        if ((mb_strlen($en) > 55)) {
            throw new \InvalidArgumentException('invalid length for $en when calling RatingPlanGroupName., must be smaller than or equal to 55.');
        }

        $this->container['en'] = $en;

        return $this;
    }

    /**
     * Gets es
     *
     * @return string
     */
    public function getEs()
    {
        return $this->container['es'];
    }

    /**
     * Sets es
     *
     * @param string $es 
     *
     * @return $this
     */
    public function setEs($es)
    {
        if ((mb_strlen($es) > 55)) {
            throw new \InvalidArgumentException('invalid length for $es when calling RatingPlanGroupName., must be smaller than or equal to 55.');
        }

        $this->container['es'] = $es;

        return $this;
    }

    /**
     * Gets ca
     *
     * @return string
     */
    public function getCa()
    {
        return $this->container['ca'];
    }

    /**
     * Sets ca
     *
     * @param string $ca 
     *
     * @return $this
     */
    public function setCa($ca)
    {
        if ((mb_strlen($ca) > 55)) {
            throw new \InvalidArgumentException('invalid length for $ca when calling RatingPlanGroupName., must be smaller than or equal to 55.');
        }

        $this->container['ca'] = $ca;

        return $this;
    }

    /**
     * Gets it
     *
     * @return string
     */
    public function getIt()
    {
        return $this->container['it'];
    }

    /**
     * Sets it
     *
     * @param string $it 
     *
     * @return $this
     */
    public function setIt($it)
    {
        if ((mb_strlen($it) > 55)) {
            throw new \InvalidArgumentException('invalid length for $it when calling RatingPlanGroupName., must be smaller than or equal to 55.');
        }

        $this->container['it'] = $it;

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


