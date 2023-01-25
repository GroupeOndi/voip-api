<?php
/**
 * Invoice
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'string',
        'in_date' => '\DateTime',
        'out_date' => '\DateTime',
        'total' => 'float',
        'tax_rate' => 'float',
        'total_with_tax' => 'float',
        'status' => 'string',
        'status_msg' => 'string',
        'id' => 'int',
        'invoice_template' => 'int',
        'company' => 'int',
        'number_sequence' => 'int',
        'scheduler' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => null,
        'in_date' => 'date-time',
        'out_date' => 'date-time',
        'total' => 'float',
        'tax_rate' => 'float',
        'total_with_tax' => 'float',
        'status' => null,
        'status_msg' => null,
        'id' => null,
        'invoice_template' => null,
        'company' => null,
        'number_sequence' => null,
        'scheduler' => null
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
        'number' => 'number',
        'in_date' => 'inDate',
        'out_date' => 'outDate',
        'total' => 'total',
        'tax_rate' => 'taxRate',
        'total_with_tax' => 'totalWithTax',
        'status' => 'status',
        'status_msg' => 'statusMsg',
        'id' => 'id',
        'invoice_template' => 'invoiceTemplate',
        'company' => 'company',
        'number_sequence' => 'numberSequence',
        'scheduler' => 'scheduler'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'in_date' => 'setInDate',
        'out_date' => 'setOutDate',
        'total' => 'setTotal',
        'tax_rate' => 'setTaxRate',
        'total_with_tax' => 'setTotalWithTax',
        'status' => 'setStatus',
        'status_msg' => 'setStatusMsg',
        'id' => 'setId',
        'invoice_template' => 'setInvoiceTemplate',
        'company' => 'setCompany',
        'number_sequence' => 'setNumberSequence',
        'scheduler' => 'setScheduler'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'in_date' => 'getInDate',
        'out_date' => 'getOutDate',
        'total' => 'getTotal',
        'tax_rate' => 'getTaxRate',
        'total_with_tax' => 'getTotalWithTax',
        'status' => 'getStatus',
        'status_msg' => 'getStatusMsg',
        'id' => 'getId',
        'invoice_template' => 'getInvoiceTemplate',
        'company' => 'getCompany',
        'number_sequence' => 'getNumberSequence',
        'scheduler' => 'getScheduler'
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

    const STATUS_WAITING = 'waiting';
    const STATUS_PROCESSING = 'processing';
    const STATUS_CREATED = 'created';
    const STATUS_ERROR = 'error';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_PROCESSING,
            self::STATUS_CREATED,
            self::STATUS_ERROR,
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['in_date'] = isset($data['in_date']) ? $data['in_date'] : null;
        $this->container['out_date'] = isset($data['out_date']) ? $data['out_date'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['total_with_tax'] = isset($data['total_with_tax']) ? $data['total_with_tax'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_msg'] = isset($data['status_msg']) ? $data['status_msg'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['invoice_template'] = isset($data['invoice_template']) ? $data['invoice_template'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['number_sequence'] = isset($data['number_sequence']) ? $data['number_sequence'] : null;
        $this->container['scheduler'] = isset($data['scheduler']) ? $data['scheduler'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 30)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 30.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 25)) {
            $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['status_msg']) && (mb_strlen($this->container['status_msg']) > 140)) {
            $invalidProperties[] = "invalid value for 'status_msg', the character length must be smaller than or equal to 140.";
        }

        if ($this->container['invoice_template'] === null) {
            $invalidProperties[] = "'invoice_template' can't be null";
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number 
     *
     * @return $this
     */
    public function setNumber($number)
    {
        if (!is_null($number) && (mb_strlen($number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Invoice., must be smaller than or equal to 30.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets in_date
     *
     * @return \DateTime
     */
    public function getInDate()
    {
        return $this->container['in_date'];
    }

    /**
     * Sets in_date
     *
     * @param \DateTime $in_date 
     *
     * @return $this
     */
    public function setInDate($in_date)
    {
        $this->container['in_date'] = $in_date;

        return $this;
    }

    /**
     * Gets out_date
     *
     * @return \DateTime
     */
    public function getOutDate()
    {
        return $this->container['out_date'];
    }

    /**
     * Sets out_date
     *
     * @param \DateTime $out_date 
     *
     * @return $this
     */
    public function setOutDate($out_date)
    {
        $this->container['out_date'] = $out_date;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total 
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
     * Gets total_with_tax
     *
     * @return float
     */
    public function getTotalWithTax()
    {
        return $this->container['total_with_tax'];
    }

    /**
     * Sets total_with_tax
     *
     * @param float $total_with_tax 
     *
     * @return $this
     */
    public function setTotalWithTax($total_with_tax)
    {
        $this->container['total_with_tax'] = $total_with_tax;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($status) && (mb_strlen($status) > 25)) {
            throw new \InvalidArgumentException('invalid length for $status when calling Invoice., must be smaller than or equal to 25.');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_msg
     *
     * @return string
     */
    public function getStatusMsg()
    {
        return $this->container['status_msg'];
    }

    /**
     * Sets status_msg
     *
     * @param string $status_msg 
     *
     * @return $this
     */
    public function setStatusMsg($status_msg)
    {
        if (!is_null($status_msg) && (mb_strlen($status_msg) > 140)) {
            throw new \InvalidArgumentException('invalid length for $status_msg when calling Invoice., must be smaller than or equal to 140.');
        }

        $this->container['status_msg'] = $status_msg;

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
     * Gets scheduler
     *
     * @return int
     */
    public function getScheduler()
    {
        return $this->container['scheduler'];
    }

    /**
     * Sets scheduler
     *
     * @param int $scheduler 
     *
     * @return $this
     */
    public function setScheduler($scheduler)
    {
        $this->container['scheduler'] = $scheduler;

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


