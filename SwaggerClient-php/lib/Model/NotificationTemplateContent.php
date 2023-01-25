<?php
/**
 * NotificationTemplateContent
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
 * NotificationTemplateContent Class Doc Comment
 *
 * @category Class
 * @package  Delta/Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationTemplateContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationTemplateContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from_name' => 'string',
        'from_address' => 'string',
        'subject' => 'string',
        'body' => 'string',
        'body_type' => 'string',
        'id' => 'int',
        'notification_template' => 'int',
        'language' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'from_name' => null,
        'from_address' => null,
        'subject' => null,
        'body' => null,
        'body_type' => null,
        'id' => null,
        'notification_template' => null,
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
        'from_name' => 'fromName',
        'from_address' => 'fromAddress',
        'subject' => 'subject',
        'body' => 'body',
        'body_type' => 'bodyType',
        'id' => 'id',
        'notification_template' => 'notificationTemplate',
        'language' => 'language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from_name' => 'setFromName',
        'from_address' => 'setFromAddress',
        'subject' => 'setSubject',
        'body' => 'setBody',
        'body_type' => 'setBodyType',
        'id' => 'setId',
        'notification_template' => 'setNotificationTemplate',
        'language' => 'setLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from_name' => 'getFromName',
        'from_address' => 'getFromAddress',
        'subject' => 'getSubject',
        'body' => 'getBody',
        'body_type' => 'getBodyType',
        'id' => 'getId',
        'notification_template' => 'getNotificationTemplate',
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

    const BODY_TYPE_PLAIN = 'text/plain';
    const BODY_TYPE_HTML = 'text/html';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBodyTypeAllowableValues()
    {
        return [
            self::BODY_TYPE_PLAIN,
            self::BODY_TYPE_HTML,
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
        $this->container['from_name'] = isset($data['from_name']) ? $data['from_name'] : null;
        $this->container['from_address'] = isset($data['from_address']) ? $data['from_address'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['body_type'] = isset($data['body_type']) ? $data['body_type'] : 'text/plain';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['notification_template'] = isset($data['notification_template']) ? $data['notification_template'] : null;
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

        if (!is_null($this->container['from_name']) && (mb_strlen($this->container['from_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'from_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['from_address']) && (mb_strlen($this->container['from_address']) > 255)) {
            $invalidProperties[] = "invalid value for 'from_address', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ((mb_strlen($this->container['subject']) > 255)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ((mb_strlen($this->container['body']) > 65535)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be smaller than or equal to 65535.";
        }

        if ($this->container['body_type'] === null) {
            $invalidProperties[] = "'body_type' can't be null";
        }
        $allowedValues = $this->getBodyTypeAllowableValues();
        if (!is_null($this->container['body_type']) && !in_array($this->container['body_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'body_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['body_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'body_type', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['notification_template'] === null) {
            $invalidProperties[] = "'notification_template' can't be null";
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
     * Gets from_name
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string $from_name 
     *
     * @return $this
     */
    public function setFromName($from_name)
    {
        if (!is_null($from_name) && (mb_strlen($from_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $from_name when calling NotificationTemplateContent., must be smaller than or equal to 255.');
        }

        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets from_address
     *
     * @return string
     */
    public function getFromAddress()
    {
        return $this->container['from_address'];
    }

    /**
     * Sets from_address
     *
     * @param string $from_address 
     *
     * @return $this
     */
    public function setFromAddress($from_address)
    {
        if (!is_null($from_address) && (mb_strlen($from_address) > 255)) {
            throw new \InvalidArgumentException('invalid length for $from_address when calling NotificationTemplateContent., must be smaller than or equal to 255.');
        }

        $this->container['from_address'] = $from_address;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject 
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        if ((mb_strlen($subject) > 255)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling NotificationTemplateContent., must be smaller than or equal to 255.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body 
     *
     * @return $this
     */
    public function setBody($body)
    {
        if ((mb_strlen($body) > 65535)) {
            throw new \InvalidArgumentException('invalid length for $body when calling NotificationTemplateContent., must be smaller than or equal to 65535.');
        }

        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets body_type
     *
     * @return string
     */
    public function getBodyType()
    {
        return $this->container['body_type'];
    }

    /**
     * Sets body_type
     *
     * @param string $body_type 
     *
     * @return $this
     */
    public function setBodyType($body_type)
    {
        $allowedValues = $this->getBodyTypeAllowableValues();
        if (!in_array($body_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'body_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($body_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $body_type when calling NotificationTemplateContent., must be smaller than or equal to 25.');
        }

        $this->container['body_type'] = $body_type;

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
     * Gets notification_template
     *
     * @return int
     */
    public function getNotificationTemplate()
    {
        return $this->container['notification_template'];
    }

    /**
     * Sets notification_template
     *
     * @param int $notification_template 
     *
     * @return $this
     */
    public function setNotificationTemplate($notification_template)
    {
        $this->container['notification_template'] = $notification_template;

        return $this;
    }

    /**
     * Gets language
     *
     * @return int
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param int $language 
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


