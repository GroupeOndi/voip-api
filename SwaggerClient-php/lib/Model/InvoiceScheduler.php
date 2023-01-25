<?php
/**
 * InvoiceScheduler
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
 * InvoiceScheduler Class Doc Comment
 *
 * @category Class
 * @package  Delta/Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceScheduler implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceScheduler';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'unit' => 'string',
        'frequency' => 'int',
        'email' => 'string',
        'last_execution' => '\DateTime',
        'last_execution_error' => 'string',
        'next_execution' => '\DateTime',
        'tax_rate' => 'float',
        'id' => 'int',
        'invoice_template' => 'int',
        'brand' => 'int',
        'company' => 'int',
        'number_sequence' => 'int'
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
        'email' => null,
        'last_execution' => 'date-time',
        'last_execution_error' => null,
        'next_execution' => 'date-time',
        'tax_rate' => 'float',
        'id' => null,
        'invoice_template' => null,
        'brand' => null,
        'company' => null,
        'number_sequence' => null
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
        'email' => 'email',
        'last_execution' => 'lastExecution',
        'last_execution_error' => 'lastExecutionError',
        'next_execution' => 'nextExecution',
        'tax_rate' => 'taxRate',
        'id' => 'id',
        'invoice_template' => 'invoiceTemplate',
        'brand' => 'brand',
        'company' => 'company',
        'number_sequence' => 'numberSequence'
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
        'email' => 'setEmail',
        'last_execution' => 'setLastExecution',
        'last_execution_error' => 'setLastExecutionError',
        'next_execution' => 'setNextExecution',
        'tax_rate' => 'setTaxRate',
        'id' => 'setId',
        'invoice_template' => 'setInvoiceTemplate',
        'brand' => 'setBrand',
        'company' => 'setCompany',
        'number_sequence' => 'setNumberSequence'
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
        'email' => 'getEmail',
        'last_execution' => 'getLastExecution',
        'last_execution_error' => 'getLastExecutionError',
        'next_execution' => 'getNextExecution',
        'tax_rate' => 'getTaxRate',
        'id' => 'getId',
        'invoice_template' => 'getInvoiceTemplate',
        'brand' => 'getBrand',
        'company' => 'getCompany',
        'number_sequence' => 'getNumberSequence'
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

    const UNIT_WEEK = 'week';
    const UNIT_MONTH = 'month';
    const UNIT_YEAR = 'year';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_WEEK,
            self::UNIT_MONTH,
            self::UNIT_YEAR,
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['last_execution'] = isset($data['last_execution']) ? $data['last_execution'] : null;
        $this->container['last_execution_error'] = isset($data['last_execution_error']) ? $data['last_execution_error'] : null;
        $this->container['next_execution'] = isset($data['next_execution']) ? $data['next_execution'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['invoice_template'] = isset($data['invoice_template']) ? $data['invoice_template'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['number_sequence'] = isset($data['number_sequence']) ? $data['number_sequence'] : null;
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

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 140)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 140.";
        }

        if (!is_null($this->container['last_execution_error']) && (mb_strlen($this->container['last_execution_error']) > 300)) {
            $invalidProperties[] = "invalid value for 'last_execution_error', the character length must be smaller than or equal to 300.";
        }

        if ($this->container['brand'] === null) {
            $invalidProperties[] = "'brand' can't be null";
        }
        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $name when calling InvoiceScheduler., must be smaller than or equal to 40.');
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
            throw new \InvalidArgumentException('invalid length for $unit when calling InvoiceScheduler., must be smaller than or equal to 30.');
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
            throw new \InvalidArgumentException('invalid value for $frequency when calling InvoiceScheduler., must be bigger than or equal to 0.');
        }

        $this->container['frequency'] = $frequency;

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
            throw new \InvalidArgumentException('invalid length for $email when calling InvoiceScheduler., must be smaller than or equal to 140.');
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
            throw new \InvalidArgumentException('invalid length for $last_execution_error when calling InvoiceScheduler., must be smaller than or equal to 300.');
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
     * Gets tax_rate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param float $tax_rate 
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

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
     * Gets invoice_template
     *
     * @return int
     */
    public function getInvoiceTemplate()
    {
        return $this->container['invoice_template'];
    }

    /**
     * Sets invoice_template
     *
     * @param int $invoice_template 
     *
     * @return $this
     */
    public function setInvoiceTemplate($invoice_template)
    {
        $this->container['invoice_template'] = $invoice_template;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return int
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param int $brand 
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets company
     *
     * @return int
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param int $company 
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets number_sequence
     *
     * @return int
     */
    public function getNumberSequence()
    {
        return $this->container['number_sequence'];
    }

    /**
     * Sets number_sequence
     *
     * @param int $number_sequence 
     *
     * @return $this
     */
    public function setNumberSequence($number_sequence)
    {
        $this->container['number_sequence'] = $number_sequence;

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

