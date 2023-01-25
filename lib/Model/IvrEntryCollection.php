<?php
/**
 * IvrEntryCollection
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
 * IvrEntryCollection Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IvrEntryCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IvrEntry-collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'ivr' => 'int',
        'entry' => 'string',
        'welcome_locution' => 'int',
        'route_type' => 'string',
        'number_country' => 'int',
        'number_value' => 'string',
        'extension' => 'int',
        'voice_mail_user' => 'int',
        'conditional_route' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'ivr' => null,
        'entry' => null,
        'welcome_locution' => null,
        'route_type' => null,
        'number_country' => null,
        'number_value' => null,
        'extension' => null,
        'voice_mail_user' => null,
        'conditional_route' => null
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
        'ivr' => 'ivr',
        'entry' => 'entry',
        'welcome_locution' => 'welcomeLocution',
        'route_type' => 'routeType',
        'number_country' => 'numberCountry',
        'number_value' => 'numberValue',
        'extension' => 'extension',
        'voice_mail_user' => 'voiceMailUser',
        'conditional_route' => 'conditionalRoute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ivr' => 'setIvr',
        'entry' => 'setEntry',
        'welcome_locution' => 'setWelcomeLocution',
        'route_type' => 'setRouteType',
        'number_country' => 'setNumberCountry',
        'number_value' => 'setNumberValue',
        'extension' => 'setExtension',
        'voice_mail_user' => 'setVoiceMailUser',
        'conditional_route' => 'setConditionalRoute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ivr' => 'getIvr',
        'entry' => 'getEntry',
        'welcome_locution' => 'getWelcomeLocution',
        'route_type' => 'getRouteType',
        'number_country' => 'getNumberCountry',
        'number_value' => 'getNumberValue',
        'extension' => 'getExtension',
        'voice_mail_user' => 'getVoiceMailUser',
        'conditional_route' => 'getConditionalRoute'
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

    const ROUTE_TYPE_NUMBER = 'number';
    const ROUTE_TYPE_EXTENSION = 'extension';
    const ROUTE_TYPE_VOICEMAIL = 'voicemail';
    const ROUTE_TYPE_CONDITIONAL = 'conditional';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRouteTypeAllowableValues()
    {
        return [
            self::ROUTE_TYPE_NUMBER,
            self::ROUTE_TYPE_EXTENSION,
            self::ROUTE_TYPE_VOICEMAIL,
            self::ROUTE_TYPE_CONDITIONAL,
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
        $this->container['ivr'] = isset($data['ivr']) ? $data['ivr'] : null;
        $this->container['entry'] = isset($data['entry']) ? $data['entry'] : null;
        $this->container['welcome_locution'] = isset($data['welcome_locution']) ? $data['welcome_locution'] : null;
        $this->container['route_type'] = isset($data['route_type']) ? $data['route_type'] : null;
        $this->container['number_country'] = isset($data['number_country']) ? $data['number_country'] : null;
        $this->container['number_value'] = isset($data['number_value']) ? $data['number_value'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['voice_mail_user'] = isset($data['voice_mail_user']) ? $data['voice_mail_user'] : null;
        $this->container['conditional_route'] = isset($data['conditional_route']) ? $data['conditional_route'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ivr'] === null) {
            $invalidProperties[] = "'ivr' can't be null";
        }
        if ($this->container['entry'] === null) {
            $invalidProperties[] = "'entry' can't be null";
        }
        if ((mb_strlen($this->container['entry']) > 40)) {
            $invalidProperties[] = "invalid value for 'entry', the character length must be smaller than or equal to 40.";
        }

        if ($this->container['route_type'] === null) {
            $invalidProperties[] = "'route_type' can't be null";
        }
        $allowedValues = $this->getRouteTypeAllowableValues();
        if (!is_null($this->container['route_type']) && !in_array($this->container['route_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'route_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['route_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'route_type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['number_value']) && (mb_strlen($this->container['number_value']) > 25)) {
            $invalidProperties[] = "invalid value for 'number_value', the character length must be smaller than or equal to 25.";
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
     * Gets entry
     *
     * @return string
     */
    public function getEntry()
    {
        return $this->container['entry'];
    }

    /**
     * Sets entry
     *
     * @param string $entry 
     *
     * @return $this
     */
    public function setEntry($entry)
    {
        if ((mb_strlen($entry) > 40)) {
            throw new \InvalidArgumentException('invalid length for $entry when calling IvrEntryCollection., must be smaller than or equal to 40.');
        }

        $this->container['entry'] = $entry;

        return $this;
    }

    /**
     * Gets welcome_locution
     *
     * @return int
     */
    public function getWelcomeLocution()
    {
        return $this->container['welcome_locution'];
    }

    /**
     * Sets welcome_locution
     *
     * @param int $welcome_locution 
     *
     * @return $this
     */
    public function setWelcomeLocution($welcome_locution)
    {
        $this->container['welcome_locution'] = $welcome_locution;

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
        if (!in_array($route_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'route_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($route_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $route_type when calling IvrEntryCollection., must be smaller than or equal to 25.');
        }

        $this->container['route_type'] = $route_type;

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
            throw new \InvalidArgumentException('invalid length for $number_value when calling IvrEntryCollection., must be smaller than or equal to 25.');
        }

        $this->container['number_value'] = $number_value;

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
     * Gets voice_mail_user
     *
     * @return int
     */
    public function getVoiceMailUser()
    {
        return $this->container['voice_mail_user'];
    }

    /**
     * Sets voice_mail_user
     *
     * @param int $voice_mail_user 
     *
     * @return $this
     */
    public function setVoiceMailUser($voice_mail_user)
    {
        $this->container['voice_mail_user'] = $voice_mail_user;

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


