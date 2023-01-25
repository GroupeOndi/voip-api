<?php
/**
 * CallCsvScheduler
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
 * CallCsvScheduler Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallCsvScheduler implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallCsvScheduler';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'unit' => 'string',
        'frequency' => 'int',
        'call_direction' => 'string',
        'email' => 'string',
        'last_execution' => '\DateTime',
        'last_execution_error' => 'string',
        'next_execution' => '\DateTime',
        'id' => 'int',
        'call_csv_notification_template' => 'int',
        'ddi' => 'int',
        'retail_account' => 'int',
        'residential_device' => 'int',
        'user' => 'int',
        'fax' => 'int',
        'friend' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'unit' => null,
        'frequency' => null,
        'call_direction' => null,
        'email' => null,
        'last_execution' => 'date-time',
        'last_execution_error' => null,
        'next_execution' => 'date-time',
        'id' => null,
        'call_csv_notification_template' => null,
        'ddi' => null,
        'retail_account' => null,
        'residential_device' => null,
        'user' => null,
        'fax' => null,
        'friend' => null
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
        'unit' => 'unit',
        'frequency' => 'frequency',
        'call_direction' => 'callDirection',
        'email' => 'email',
        'last_execution' => 'lastExecution',
        'last_execution_error' => 'lastExecutionError',
        'next_execution' => 'nextExecution',
        'id' => 'id',
        'call_csv_notification_template' => 'callCsvNotificationTemplate',
        'ddi' => 'ddi',
        'retail_account' => 'retailAccount',
        'residential_device' => 'residentialDevice',
        'user' => 'user',
        'fax' => 'fax',
        'friend' => 'friend'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'unit' => 'setUnit',
        'frequency' => 'setFrequency',
        'call_direction' => 'setCallDirection',
        'email' => 'setEmail',
        'last_execution' => 'setLastExecution',
        'last_execution_error' => 'setLastExecutionError',
        'next_execution' => 'setNextExecution',
        'id' => 'setId',
        'call_csv_notification_template' => 'setCallCsvNotificationTemplate',
        'ddi' => 'setDdi',
        'retail_account' => 'setRetailAccount',
        'residential_device' => 'setResidentialDevice',
        'user' => 'setUser',
        'fax' => 'setFax',
        'friend' => 'setFriend'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'unit' => 'getUnit',
        'frequency' => 'getFrequency',
        'call_direction' => 'getCallDirection',
        'email' => 'getEmail',
        'last_execution' => 'getLastExecution',
        'last_execution_error' => 'getLastExecutionError',
        'next_execution' => 'getNextExecution',
        'id' => 'getId',
        'call_csv_notification_template' => 'getCallCsvNotificationTemplate',
        'ddi' => 'getDdi',
        'retail_account' => 'getRetailAccount',
        'residential_device' => 'getResidentialDevice',
        'user' => 'getUser',
        'fax' => 'getFax',
        'friend' => 'getFriend'
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

    const UNIT_DAY = 'day';
    const UNIT_WEEK = 'week';
    const UNIT_MONTH = 'month';
    const CALL_DIRECTION_INBOUND = 'inbound';
    const CALL_DIRECTION_OUTBOUND = 'outbound';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_DAY,
            self::UNIT_WEEK,
            self::UNIT_MONTH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCallDirectionAllowableValues()
    {
        return [
            self::CALL_DIRECTION_INBOUND,
            self::CALL_DIRECTION_OUTBOUND,
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
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : 'month';
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['call_direction'] = isset($data['call_direction']) ? $data['call_direction'] : 'outbound';
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['last_execution'] = isset($data['last_execution']) ? $data['last_execution'] : null;
        $this->container['last_execution_error'] = isset($data['last_execution_error']) ? $data['last_execution_error'] : null;
        $this->container['next_execution'] = isset($data['next_execution']) ? $data['next_execution'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['call_csv_notification_template'] = isset($data['call_csv_notification_template']) ? $data['call_csv_notification_template'] : null;
        $this->container['ddi'] = isset($data['ddi']) ? $data['ddi'] : null;
        $this->container['retail_account'] = isset($data['retail_account']) ? $data['retail_account'] : null;
        $this->container['residential_device'] = isset($data['residential_device']) ? $data['residential_device'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['friend'] = isset($data['friend']) ? $data['friend'] : null;
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
        if ((mb_strlen($this->container['name']) > 40)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 40.";
        }

        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unit', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['unit']) > 30)) {
            $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 30.";
        }

        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if (($this->container['frequency'] < 0)) {
            $invalidProperties[] = "invalid value for 'frequency', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getCallDirectionAllowableValues();
        if (!is_null($this->container['call_direction']) && !in_array($this->container['call_direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'call_direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 140)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 140.";
        }

        if (!is_null($this->container['last_execution_error']) && (mb_strlen($this->container['last_execution_error']) > 300)) {
            $invalidProperties[] = "invalid value for 'last_execution_error', the character length must be smaller than or equal to 300.";
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
        if ((mb_strlen($name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CallCsvScheduler., must be smaller than or equal to 40.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit 
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $allowedValues = $this->getUnitAllowableValues();
        if (!in_array($unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($unit) > 30)) {
            throw new \InvalidArgumentException('invalid length for $unit when calling CallCsvScheduler., must be smaller than or equal to 30.');
        }

        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return int
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param int $frequency 
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {

        if (($frequency < 0)) {
            throw new \InvalidArgumentException('invalid value for $frequency when calling CallCsvScheduler., must be bigger than or equal to 0.');
        }

        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets call_direction
     *
     * @return string
     */
    public function getCallDirection()
    {
        return $this->container['call_direction'];
    }

    /**
     * Sets call_direction
     *
     * @param string $call_direction 
     *
     * @return $this
     */
    public function setCallDirection($call_direction)
    {
        $allowedValues = $this->getCallDirectionAllowableValues();
        if (!is_null($call_direction) && !in_array($call_direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'call_direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['call_direction'] = $call_direction;

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
        if ((mb_strlen($email) > 140)) {
            throw new \InvalidArgumentException('invalid length for $email when calling CallCsvScheduler., must be smaller than or equal to 140.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets last_execution
     *
     * @return \DateTime
     */
    public function getLastExecution()
    {
        return $this->container['last_execution'];
    }

    /**
     * Sets last_execution
     *
     * @param \DateTime $last_execution 
     *
     * @return $this
     */
    public function setLastExecution($last_execution)
    {
        $this->container['last_execution'] = $last_execution;

        return $this;
    }

    /**
     * Gets last_execution_error
     *
     * @return string
     */
    public function getLastExecutionError()
    {
        return $this->container['last_execution_error'];
    }

    /**
     * Sets last_execution_error
     *
     * @param string $last_execution_error 
     *
     * @return $this
     */
    public function setLastExecutionError($last_execution_error)
    {
        if (!is_null($last_execution_error) && (mb_strlen($last_execution_error) > 300)) {
            throw new \InvalidArgumentException('invalid length for $last_execution_error when calling CallCsvScheduler., must be smaller than or equal to 300.');
        }

        $this->container['last_execution_error'] = $last_execution_error;

        return $this;
    }

    /**
     * Gets next_execution
     *
     * @return \DateTime
     */
    public function getNextExecution()
    {
        return $this->container['next_execution'];
    }

    /**
     * Sets next_execution
     *
     * @param \DateTime $next_execution 
     *
     * @return $this
     */
    public function setNextExecution($next_execution)
    {
        $this->container['next_execution'] = $next_execution;

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
     * Gets call_csv_notification_template
     *
     * @return int
     */
    public function getCallCsvNotificationTemplate()
    {
        return $this->container['call_csv_notification_template'];
    }

    /**
     * Sets call_csv_notification_template
     *
     * @param int $call_csv_notification_template 
     *
     * @return $this
     */
    public function setCallCsvNotificationTemplate($call_csv_notification_template)
    {
        $this->container['call_csv_notification_template'] = $call_csv_notification_template;

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
     * Gets fax
     *
     * @return int
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param int $fax 
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

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


