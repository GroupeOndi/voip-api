<?php
/**
 * CallForwardSetting
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
 * CallForwardSetting Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallForwardSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallForwardSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'call_type_filter' => 'string',
        'call_forward_type' => 'string',
        'target_type' => 'string',
        'number_value' => 'string',
        'no_answer_timeout' => 'int',
        'enabled' => 'bool',
        'id' => 'int',
        'user' => 'int',
        'friend' => 'int',
        'extension' => 'int',
        'voice_mail_user' => 'int',
        'number_country' => 'int',
        'residential_device' => 'int',
        'retail_account' => 'int',
        'cfw_to_retail_account' => 'int',
        'ddi' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'call_type_filter' => null,
        'call_forward_type' => null,
        'target_type' => null,
        'number_value' => null,
        'no_answer_timeout' => null,
        'enabled' => null,
        'id' => null,
        'user' => null,
        'friend' => null,
        'extension' => null,
        'voice_mail_user' => null,
        'number_country' => null,
        'residential_device' => null,
        'retail_account' => null,
        'cfw_to_retail_account' => null,
        'ddi' => null
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
        'call_type_filter' => 'callTypeFilter',
        'call_forward_type' => 'callForwardType',
        'target_type' => 'targetType',
        'number_value' => 'numberValue',
        'no_answer_timeout' => 'noAnswerTimeout',
        'enabled' => 'enabled',
        'id' => 'id',
        'user' => 'user',
        'friend' => 'friend',
        'extension' => 'extension',
        'voice_mail_user' => 'voiceMailUser',
        'number_country' => 'numberCountry',
        'residential_device' => 'residentialDevice',
        'retail_account' => 'retailAccount',
        'cfw_to_retail_account' => 'cfwToRetailAccount',
        'ddi' => 'ddi'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'call_type_filter' => 'setCallTypeFilter',
        'call_forward_type' => 'setCallForwardType',
        'target_type' => 'setTargetType',
        'number_value' => 'setNumberValue',
        'no_answer_timeout' => 'setNoAnswerTimeout',
        'enabled' => 'setEnabled',
        'id' => 'setId',
        'user' => 'setUser',
        'friend' => 'setFriend',
        'extension' => 'setExtension',
        'voice_mail_user' => 'setVoiceMailUser',
        'number_country' => 'setNumberCountry',
        'residential_device' => 'setResidentialDevice',
        'retail_account' => 'setRetailAccount',
        'cfw_to_retail_account' => 'setCfwToRetailAccount',
        'ddi' => 'setDdi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'call_type_filter' => 'getCallTypeFilter',
        'call_forward_type' => 'getCallForwardType',
        'target_type' => 'getTargetType',
        'number_value' => 'getNumberValue',
        'no_answer_timeout' => 'getNoAnswerTimeout',
        'enabled' => 'getEnabled',
        'id' => 'getId',
        'user' => 'getUser',
        'friend' => 'getFriend',
        'extension' => 'getExtension',
        'voice_mail_user' => 'getVoiceMailUser',
        'number_country' => 'getNumberCountry',
        'residential_device' => 'getResidentialDevice',
        'retail_account' => 'getRetailAccount',
        'cfw_to_retail_account' => 'getCfwToRetailAccount',
        'ddi' => 'getDdi'
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

    const CALL_TYPE_FILTER_INTERNAL = 'internal';
    const CALL_TYPE_FILTER_EXTERNAL = 'external';
    const CALL_TYPE_FILTER_BOTH = 'both';
    const CALL_FORWARD_TYPE_INCONDITIONAL = 'inconditional';
    const CALL_FORWARD_TYPE_NO_ANSWER = 'noAnswer';
    const CALL_FORWARD_TYPE_BUSY = 'busy';
    const CALL_FORWARD_TYPE_USER_NOT_REGISTERED = 'userNotRegistered';
    const TARGET_TYPE_NUMBER = 'number';
    const TARGET_TYPE_EXTENSION = 'extension';
    const TARGET_TYPE_VOICEMAIL = 'voicemail';
    const TARGET_TYPE_RETAIL = 'retail';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCallTypeFilterAllowableValues()
    {
        return [
            self::CALL_TYPE_FILTER_INTERNAL,
            self::CALL_TYPE_FILTER_EXTERNAL,
            self::CALL_TYPE_FILTER_BOTH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCallForwardTypeAllowableValues()
    {
        return [
            self::CALL_FORWARD_TYPE_INCONDITIONAL,
            self::CALL_FORWARD_TYPE_NO_ANSWER,
            self::CALL_FORWARD_TYPE_BUSY,
            self::CALL_FORWARD_TYPE_USER_NOT_REGISTERED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetTypeAllowableValues()
    {
        return [
            self::TARGET_TYPE_NUMBER,
            self::TARGET_TYPE_EXTENSION,
            self::TARGET_TYPE_VOICEMAIL,
            self::TARGET_TYPE_RETAIL,
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
        $this->container['call_type_filter'] = isset($data['call_type_filter']) ? $data['call_type_filter'] : null;
        $this->container['call_forward_type'] = isset($data['call_forward_type']) ? $data['call_forward_type'] : null;
        $this->container['target_type'] = isset($data['target_type']) ? $data['target_type'] : null;
        $this->container['number_value'] = isset($data['number_value']) ? $data['number_value'] : null;
        $this->container['no_answer_timeout'] = isset($data['no_answer_timeout']) ? $data['no_answer_timeout'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : false;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['friend'] = isset($data['friend']) ? $data['friend'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['voice_mail_user'] = isset($data['voice_mail_user']) ? $data['voice_mail_user'] : null;
        $this->container['number_country'] = isset($data['number_country']) ? $data['number_country'] : null;
        $this->container['residential_device'] = isset($data['residential_device']) ? $data['residential_device'] : null;
        $this->container['retail_account'] = isset($data['retail_account']) ? $data['retail_account'] : null;
        $this->container['cfw_to_retail_account'] = isset($data['cfw_to_retail_account']) ? $data['cfw_to_retail_account'] : null;
        $this->container['ddi'] = isset($data['ddi']) ? $data['ddi'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['call_type_filter'] === null) {
            $invalidProperties[] = "'call_type_filter' can't be null";
        }
        $allowedValues = $this->getCallTypeFilterAllowableValues();
        if (!is_null($this->container['call_type_filter']) && !in_array($this->container['call_type_filter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'call_type_filter', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['call_type_filter']) > 25)) {
            $invalidProperties[] = "invalid value for 'call_type_filter', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['call_forward_type'] === null) {
            $invalidProperties[] = "'call_forward_type' can't be null";
        }
        $allowedValues = $this->getCallForwardTypeAllowableValues();
        if (!is_null($this->container['call_forward_type']) && !in_array($this->container['call_forward_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'call_forward_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['call_forward_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'call_forward_type', the character length must be smaller than or equal to 25.";
        }

        $allowedValues = $this->getTargetTypeAllowableValues();
        if (!is_null($this->container['target_type']) && !in_array($this->container['target_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'target_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['target_type']) && (mb_strlen($this->container['target_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'target_type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['number_value']) && (mb_strlen($this->container['number_value']) > 25)) {
            $invalidProperties[] = "invalid value for 'number_value', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['no_answer_timeout'] === null) {
            $invalidProperties[] = "'no_answer_timeout' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
     * Gets call_type_filter
     *
     * @return string
     */
    public function getCallTypeFilter()
    {
        return $this->container['call_type_filter'];
    }

    /**
     * Sets call_type_filter
     *
     * @param string $call_type_filter 
     *
     * @return $this
     */
    public function setCallTypeFilter($call_type_filter)
    {
        $allowedValues = $this->getCallTypeFilterAllowableValues();
        if (!in_array($call_type_filter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'call_type_filter', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($call_type_filter) > 25)) {
            throw new \InvalidArgumentException('invalid length for $call_type_filter when calling CallForwardSetting., must be smaller than or equal to 25.');
        }

        $this->container['call_type_filter'] = $call_type_filter;

        return $this;
    }

    /**
     * Gets call_forward_type
     *
     * @return string
     */
    public function getCallForwardType()
    {
        return $this->container['call_forward_type'];
    }

    /**
     * Sets call_forward_type
     *
     * @param string $call_forward_type 
     *
     * @return $this
     */
    public function setCallForwardType($call_forward_type)
    {
        $allowedValues = $this->getCallForwardTypeAllowableValues();
        if (!in_array($call_forward_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'call_forward_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($call_forward_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $call_forward_type when calling CallForwardSetting., must be smaller than or equal to 25.');
        }

        $this->container['call_forward_type'] = $call_forward_type;

        return $this;
    }

    /**
     * Gets target_type
     *
     * @return string
     */
    public function getTargetType()
    {
        return $this->container['target_type'];
    }

    /**
     * Sets target_type
     *
     * @param string $target_type 
     *
     * @return $this
     */
    public function setTargetType($target_type)
    {
        $allowedValues = $this->getTargetTypeAllowableValues();
        if (!is_null($target_type) && !in_array($target_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'target_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($target_type) && (mb_strlen($target_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $target_type when calling CallForwardSetting., must be smaller than or equal to 25.');
        }

        $this->container['target_type'] = $target_type;

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
            throw new \InvalidArgumentException('invalid length for $number_value when calling CallForwardSetting., must be smaller than or equal to 25.');
        }

        $this->container['number_value'] = $number_value;

        return $this;
    }

    /**
     * Gets no_answer_timeout
     *
     * @return int
     */
    public function getNoAnswerTimeout()
    {
        return $this->container['no_answer_timeout'];
    }

    /**
     * Sets no_answer_timeout
     *
     * @param int $no_answer_timeout 
     *
     * @return $this
     */
    public function setNoAnswerTimeout($no_answer_timeout)
    {
        $this->container['no_answer_timeout'] = $no_answer_timeout;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled 
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * Gets friend
     *
     * @return int
     */
    public function getFriend()
    {
        return $this->container['friend'];
    }

    /**
     * Sets friend
     *
     * @param int $friend 
     *
     * @return $this
     */
    public function setFriend($friend)
    {
        $this->container['friend'] = $friend;

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
     * Gets residential_device
     *
     * @return int
     */
    public function getResidentialDevice()
    {
        return $this->container['residential_device'];
    }

    /**
     * Sets residential_device
     *
     * @param int $residential_device 
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
     * @return int
     */
    public function getRetailAccount()
    {
        return $this->container['retail_account'];
    }

    /**
     * Sets retail_account
     *
     * @param int $retail_account 
     *
     * @return $this
     */
    public function setRetailAccount($retail_account)
    {
        $this->container['retail_account'] = $retail_account;

        return $this;
    }

    /**
     * Gets cfw_to_retail_account
     *
     * @return int
     */
    public function getCfwToRetailAccount()
    {
        return $this->container['cfw_to_retail_account'];
    }

    /**
     * Sets cfw_to_retail_account
     *
     * @param int $cfw_to_retail_account 
     *
     * @return $this
     */
    public function setCfwToRetailAccount($cfw_to_retail_account)
    {
        $this->container['cfw_to_retail_account'] = $cfw_to_retail_account;

        return $this;
    }

    /**
     * Gets ddi
     *
     * @return int
     */
    public function getDdi()
    {
        return $this->container['ddi'];
    }

    /**
     * Sets ddi
     *
     * @param int $ddi 
     *
     * @return $this
     */
    public function setDdi($ddi)
    {
        $this->container['ddi'] = $ddi;

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


