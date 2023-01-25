<?php
/**
 * HuntGroupDetailed
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
 * HuntGroupDetailed Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HuntGroupDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HuntGroup-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'strategy' => 'string',
        'ring_all_timeout' => 'int',
        'no_answer_target_type' => 'string',
        'no_answer_number_value' => 'string',
        'prevent_missed_calls' => 'int',
        'allow_call_forwards' => 'int',
        'id' => 'int',
        'no_answer_locution' => '\Delta\Voip\Model\Locution',
        'no_answer_extension' => '\Delta\Voip\Model\Extension',
        'no_answer_voice_mail_user' => '\Delta\Voip\Model\User',
        'no_answer_number_country' => '\Delta\Voip\Model\Country'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'strategy' => null,
        'ring_all_timeout' => null,
        'no_answer_target_type' => null,
        'no_answer_number_value' => null,
        'prevent_missed_calls' => null,
        'allow_call_forwards' => null,
        'id' => null,
        'no_answer_locution' => null,
        'no_answer_extension' => null,
        'no_answer_voice_mail_user' => null,
        'no_answer_number_country' => null
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
        'strategy' => 'strategy',
        'ring_all_timeout' => 'ringAllTimeout',
        'no_answer_target_type' => 'noAnswerTargetType',
        'no_answer_number_value' => 'noAnswerNumberValue',
        'prevent_missed_calls' => 'preventMissedCalls',
        'allow_call_forwards' => 'allowCallForwards',
        'id' => 'id',
        'no_answer_locution' => 'noAnswerLocution',
        'no_answer_extension' => 'noAnswerExtension',
        'no_answer_voice_mail_user' => 'noAnswerVoiceMailUser',
        'no_answer_number_country' => 'noAnswerNumberCountry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'strategy' => 'setStrategy',
        'ring_all_timeout' => 'setRingAllTimeout',
        'no_answer_target_type' => 'setNoAnswerTargetType',
        'no_answer_number_value' => 'setNoAnswerNumberValue',
        'prevent_missed_calls' => 'setPreventMissedCalls',
        'allow_call_forwards' => 'setAllowCallForwards',
        'id' => 'setId',
        'no_answer_locution' => 'setNoAnswerLocution',
        'no_answer_extension' => 'setNoAnswerExtension',
        'no_answer_voice_mail_user' => 'setNoAnswerVoiceMailUser',
        'no_answer_number_country' => 'setNoAnswerNumberCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'strategy' => 'getStrategy',
        'ring_all_timeout' => 'getRingAllTimeout',
        'no_answer_target_type' => 'getNoAnswerTargetType',
        'no_answer_number_value' => 'getNoAnswerNumberValue',
        'prevent_missed_calls' => 'getPreventMissedCalls',
        'allow_call_forwards' => 'getAllowCallForwards',
        'id' => 'getId',
        'no_answer_locution' => 'getNoAnswerLocution',
        'no_answer_extension' => 'getNoAnswerExtension',
        'no_answer_voice_mail_user' => 'getNoAnswerVoiceMailUser',
        'no_answer_number_country' => 'getNoAnswerNumberCountry'
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

    const STRATEGY_RING_ALL = 'ringAll';
    const STRATEGY_LINEAR = 'linear';
    const STRATEGY_ROUND_ROBIN = 'roundRobin';
    const STRATEGY_RANDOM = 'random';
    const NO_ANSWER_TARGET_TYPE_NUMBER = 'number';
    const NO_ANSWER_TARGET_TYPE_EXTENSION = 'extension';
    const NO_ANSWER_TARGET_TYPE_VOICEMAIL = 'voicemail';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStrategyAllowableValues()
    {
        return [
            self::STRATEGY_RING_ALL,
            self::STRATEGY_LINEAR,
            self::STRATEGY_ROUND_ROBIN,
            self::STRATEGY_RANDOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNoAnswerTargetTypeAllowableValues()
    {
        return [
            self::NO_ANSWER_TARGET_TYPE_NUMBER,
            self::NO_ANSWER_TARGET_TYPE_EXTENSION,
            self::NO_ANSWER_TARGET_TYPE_VOICEMAIL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : '';
        $this->container['description'] = isset($data['description']) ? $data['description'] : '';
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['ring_all_timeout'] = isset($data['ring_all_timeout']) ? $data['ring_all_timeout'] : null;
        $this->container['no_answer_target_type'] = isset($data['no_answer_target_type']) ? $data['no_answer_target_type'] : null;
        $this->container['no_answer_number_value'] = isset($data['no_answer_number_value']) ? $data['no_answer_number_value'] : null;
        $this->container['prevent_missed_calls'] = isset($data['prevent_missed_calls']) ? $data['prevent_missed_calls'] : null;
        $this->container['allow_call_forwards'] = isset($data['allow_call_forwards']) ? $data['allow_call_forwards'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['no_answer_locution'] = isset($data['no_answer_locution']) ? $data['no_answer_locution'] : null;
        $this->container['no_answer_extension'] = isset($data['no_answer_extension']) ? $data['no_answer_extension'] : null;
        $this->container['no_answer_voice_mail_user'] = isset($data['no_answer_voice_mail_user']) ? $data['no_answer_voice_mail_user'] : null;
        $this->container['no_answer_number_country'] = isset($data['no_answer_number_country']) ? $data['no_answer_number_country'] : null;
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 500)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
        }

        if ($this->container['strategy'] === null) {
            $invalidProperties[] = "'strategy' can't be null";
        }
        $allowedValues = $this->getStrategyAllowableValues();
        if (!is_null($this->container['strategy']) && !in_array($this->container['strategy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'strategy', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['strategy']) > 25)) {
            $invalidProperties[] = "invalid value for 'strategy', the character length must be smaller than or equal to 25.";
        }

        $allowedValues = $this->getNoAnswerTargetTypeAllowableValues();
        if (!is_null($this->container['no_answer_target_type']) && !in_array($this->container['no_answer_target_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'no_answer_target_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['no_answer_target_type']) && (mb_strlen($this->container['no_answer_target_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'no_answer_target_type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['no_answer_number_value']) && (mb_strlen($this->container['no_answer_number_value']) > 25)) {
            $invalidProperties[] = "invalid value for 'no_answer_number_value', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['prevent_missed_calls'] === null) {
            $invalidProperties[] = "'prevent_missed_calls' can't be null";
        }
        if (($this->container['prevent_missed_calls'] < 0)) {
            $invalidProperties[] = "invalid value for 'prevent_missed_calls', must be bigger than or equal to 0.";
        }

        if ($this->container['allow_call_forwards'] === null) {
            $invalidProperties[] = "'allow_call_forwards' can't be null";
        }
        if (($this->container['allow_call_forwards'] < 0)) {
            $invalidProperties[] = "invalid value for 'allow_call_forwards', must be bigger than or equal to 0.";
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
            throw new \InvalidArgumentException('invalid length for $name when calling HuntGroupDetailed., must be smaller than or equal to 100.');
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
            throw new \InvalidArgumentException('invalid length for $description when calling HuntGroupDetailed., must be smaller than or equal to 500.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets strategy
     *
     * @return string
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     *
     * @param string $strategy 
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $allowedValues = $this->getStrategyAllowableValues();
        if (!in_array($strategy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'strategy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($strategy) > 25)) {
            throw new \InvalidArgumentException('invalid length for $strategy when calling HuntGroupDetailed., must be smaller than or equal to 25.');
        }

        $this->container['strategy'] = $strategy;

        return $this;
    }

    /**
     * Gets ring_all_timeout
     *
     * @return int
     */
    public function getRingAllTimeout()
    {
        return $this->container['ring_all_timeout'];
    }

    /**
     * Sets ring_all_timeout
     *
     * @param int $ring_all_timeout 
     *
     * @return $this
     */
    public function setRingAllTimeout($ring_all_timeout)
    {
        $this->container['ring_all_timeout'] = $ring_all_timeout;

        return $this;
    }

    /**
     * Gets no_answer_target_type
     *
     * @return string
     */
    public function getNoAnswerTargetType()
    {
        return $this->container['no_answer_target_type'];
    }

    /**
     * Sets no_answer_target_type
     *
     * @param string $no_answer_target_type 
     *
     * @return $this
     */
    public function setNoAnswerTargetType($no_answer_target_type)
    {
        $allowedValues = $this->getNoAnswerTargetTypeAllowableValues();
        if (!is_null($no_answer_target_type) && !in_array($no_answer_target_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'no_answer_target_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($no_answer_target_type) && (mb_strlen($no_answer_target_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $no_answer_target_type when calling HuntGroupDetailed., must be smaller than or equal to 25.');
        }

        $this->container['no_answer_target_type'] = $no_answer_target_type;

        return $this;
    }

    /**
     * Gets no_answer_number_value
     *
     * @return string
     */
    public function getNoAnswerNumberValue()
    {
        return $this->container['no_answer_number_value'];
    }

    /**
     * Sets no_answer_number_value
     *
     * @param string $no_answer_number_value 
     *
     * @return $this
     */
    public function setNoAnswerNumberValue($no_answer_number_value)
    {
        if (!is_null($no_answer_number_value) && (mb_strlen($no_answer_number_value) > 25)) {
            throw new \InvalidArgumentException('invalid length for $no_answer_number_value when calling HuntGroupDetailed., must be smaller than or equal to 25.');
        }

        $this->container['no_answer_number_value'] = $no_answer_number_value;

        return $this;
    }

    /**
     * Gets prevent_missed_calls
     *
     * @return int
     */
    public function getPreventMissedCalls()
    {
        return $this->container['prevent_missed_calls'];
    }

    /**
     * Sets prevent_missed_calls
     *
     * @param int $prevent_missed_calls 
     *
     * @return $this
     */
    public function setPreventMissedCalls($prevent_missed_calls)
    {

        if (($prevent_missed_calls < 0)) {
            throw new \InvalidArgumentException('invalid value for $prevent_missed_calls when calling HuntGroupDetailed., must be bigger than or equal to 0.');
        }

        $this->container['prevent_missed_calls'] = $prevent_missed_calls;

        return $this;
    }

    /**
     * Gets allow_call_forwards
     *
     * @return int
     */
    public function getAllowCallForwards()
    {
        return $this->container['allow_call_forwards'];
    }

    /**
     * Sets allow_call_forwards
     *
     * @param int $allow_call_forwards 
     *
     * @return $this
     */
    public function setAllowCallForwards($allow_call_forwards)
    {

        if (($allow_call_forwards < 0)) {
            throw new \InvalidArgumentException('invalid value for $allow_call_forwards when calling HuntGroupDetailed., must be bigger than or equal to 0.');
        }

        $this->container['allow_call_forwards'] = $allow_call_forwards;

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
     * Gets no_answer_locution
     *
     * @return \Delta\Voip\Model\Locution
     */
    public function getNoAnswerLocution()
    {
        return $this->container['no_answer_locution'];
    }

    /**
     * Sets no_answer_locution
     *
     * @param \Delta\Voip\Model\Locution $no_answer_locution no_answer_locution
     *
     * @return $this
     */
    public function setNoAnswerLocution($no_answer_locution)
    {
        $this->container['no_answer_locution'] = $no_answer_locution;

        return $this;
    }

    /**
     * Gets no_answer_extension
     *
     * @return \Delta\Voip\Model\Extension
     */
    public function getNoAnswerExtension()
    {
        return $this->container['no_answer_extension'];
    }

    /**
     * Sets no_answer_extension
     *
     * @param \Delta\Voip\Model\Extension $no_answer_extension no_answer_extension
     *
     * @return $this
     */
    public function setNoAnswerExtension($no_answer_extension)
    {
        $this->container['no_answer_extension'] = $no_answer_extension;

        return $this;
    }

    /**
     * Gets no_answer_voice_mail_user
     *
     * @return \Delta\Voip\Model\User
     */
    public function getNoAnswerVoiceMailUser()
    {
        return $this->container['no_answer_voice_mail_user'];
    }

    /**
     * Sets no_answer_voice_mail_user
     *
     * @param \Delta\Voip\Model\User $no_answer_voice_mail_user no_answer_voice_mail_user
     *
     * @return $this
     */
    public function setNoAnswerVoiceMailUser($no_answer_voice_mail_user)
    {
        $this->container['no_answer_voice_mail_user'] = $no_answer_voice_mail_user;

        return $this;
    }

    /**
     * Gets no_answer_number_country
     *
     * @return \Delta\Voip\Model\Country
     */
    public function getNoAnswerNumberCountry()
    {
        return $this->container['no_answer_number_country'];
    }

    /**
     * Sets no_answer_number_country
     *
     * @param \Delta\Voip\Model\Country $no_answer_number_country no_answer_number_country
     *
     * @return $this
     */
    public function setNoAnswerNumberCountry($no_answer_number_country)
    {
        $this->container['no_answer_number_country'] = $no_answer_number_country;

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


