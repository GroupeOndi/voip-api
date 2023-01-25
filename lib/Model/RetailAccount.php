<?php
/**
 * RetailAccount
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
 * RetailAccount Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RetailAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RetailAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'transport' => 'string',
        'ip' => 'string',
        'port' => 'int',
        'password' => 'string',
        'from_domain' => 'string',
        'direct_connectivity' => 'string',
        'ddi_in' => 'string',
        't38_passthrough' => 'string',
        'id' => 'int',
        'company' => 'int',
        'transformation_rule_set' => 'int',
        'outgoing_ddi' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'transport' => null,
        'ip' => null,
        'port' => null,
        'password' => null,
        'from_domain' => null,
        'direct_connectivity' => null,
        'ddi_in' => null,
        't38_passthrough' => null,
        'id' => null,
        'company' => null,
        'transformation_rule_set' => null,
        'outgoing_ddi' => null
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
        'transport' => 'transport',
        'ip' => 'ip',
        'port' => 'port',
        'password' => 'password',
        'from_domain' => 'fromDomain',
        'direct_connectivity' => 'directConnectivity',
        'ddi_in' => 'ddiIn',
        't38_passthrough' => 't38Passthrough',
        'id' => 'id',
        'company' => 'company',
        'transformation_rule_set' => 'transformationRuleSet',
        'outgoing_ddi' => 'outgoingDdi'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'transport' => 'setTransport',
        'ip' => 'setIp',
        'port' => 'setPort',
        'password' => 'setPassword',
        'from_domain' => 'setFromDomain',
        'direct_connectivity' => 'setDirectConnectivity',
        'ddi_in' => 'setDdiIn',
        't38_passthrough' => 'setT38Passthrough',
        'id' => 'setId',
        'company' => 'setCompany',
        'transformation_rule_set' => 'setTransformationRuleSet',
        'outgoing_ddi' => 'setOutgoingDdi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'transport' => 'getTransport',
        'ip' => 'getIp',
        'port' => 'getPort',
        'password' => 'getPassword',
        'from_domain' => 'getFromDomain',
        'direct_connectivity' => 'getDirectConnectivity',
        'ddi_in' => 'getDdiIn',
        't38_passthrough' => 'getT38Passthrough',
        'id' => 'getId',
        'company' => 'getCompany',
        'transformation_rule_set' => 'getTransformationRuleSet',
        'outgoing_ddi' => 'getOutgoingDdi'
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

    const TRANSPORT_UDP = 'udp';
    const TRANSPORT_TCP = 'tcp';
    const TRANSPORT_TLS = 'tls';
    const DIRECT_CONNECTIVITY_YES = 'yes';
    const DIRECT_CONNECTIVITY_NO = 'no';
    const DDI_IN_YES = 'yes';
    const DDI_IN_NO = 'no';
    const T38_PASSTHROUGH_YES = 'yes';
    const T38_PASSTHROUGH_NO = 'no';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportAllowableValues()
    {
        return [
            self::TRANSPORT_UDP,
            self::TRANSPORT_TCP,
            self::TRANSPORT_TLS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectConnectivityAllowableValues()
    {
        return [
            self::DIRECT_CONNECTIVITY_YES,
            self::DIRECT_CONNECTIVITY_NO,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDdiInAllowableValues()
    {
        return [
            self::DDI_IN_YES,
            self::DDI_IN_NO,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getT38PassthroughAllowableValues()
    {
        return [
            self::T38_PASSTHROUGH_YES,
            self::T38_PASSTHROUGH_NO,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : '';
        $this->container['transport'] = isset($data['transport']) ? $data['transport'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['from_domain'] = isset($data['from_domain']) ? $data['from_domain'] : null;
        $this->container['direct_connectivity'] = isset($data['direct_connectivity']) ? $data['direct_connectivity'] : 'yes';
        $this->container['ddi_in'] = isset($data['ddi_in']) ? $data['ddi_in'] : 'yes';
        $this->container['t38_passthrough'] = isset($data['t38_passthrough']) ? $data['t38_passthrough'] : 'no';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['transformation_rule_set'] = isset($data['transformation_rule_set']) ? $data['transformation_rule_set'] : null;
        $this->container['outgoing_ddi'] = isset($data['outgoing_ddi']) ? $data['outgoing_ddi'] : null;
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
        if ((mb_strlen($this->container['name']) > 65)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 65.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 500)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
        }

        $allowedValues = $this->getTransportAllowableValues();
        if (!is_null($this->container['transport']) && !in_array($this->container['transport'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transport', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['transport']) && (mb_strlen($this->container['transport']) > 25)) {
            $invalidProperties[] = "invalid value for 'transport', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) > 50)) {
            $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
            $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 64)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['from_domain']) && (mb_strlen($this->container['from_domain']) > 190)) {
            $invalidProperties[] = "invalid value for 'from_domain', the character length must be smaller than or equal to 190.";
        }

        if ($this->container['direct_connectivity'] === null) {
            $invalidProperties[] = "'direct_connectivity' can't be null";
        }
        $allowedValues = $this->getDirectConnectivityAllowableValues();
        if (!is_null($this->container['direct_connectivity']) && !in_array($this->container['direct_connectivity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direct_connectivity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['ddi_in'] === null) {
            $invalidProperties[] = "'ddi_in' can't be null";
        }
        $allowedValues = $this->getDdiInAllowableValues();
        if (!is_null($this->container['ddi_in']) && !in_array($this->container['ddi_in'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'ddi_in', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['t38_passthrough'] === null) {
            $invalidProperties[] = "'t38_passthrough' can't be null";
        }
        $allowedValues = $this->getT38PassthroughAllowableValues();
        if (!is_null($this->container['t38_passthrough']) && !in_array($this->container['t38_passthrough'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 't38_passthrough', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
        if ((mb_strlen($name) > 65)) {
            throw new \InvalidArgumentException('invalid length for $name when calling RetailAccount., must be smaller than or equal to 65.');
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
            throw new \InvalidArgumentException('invalid length for $description when calling RetailAccount., must be smaller than or equal to 500.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets transport
     *
     * @return string
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     *
     * @param string $transport 
     *
     * @return $this
     */
    public function setTransport($transport)
    {
        $allowedValues = $this->getTransportAllowableValues();
        if (!is_null($transport) && !in_array($transport, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transport', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($transport) && (mb_strlen($transport) > 25)) {
            throw new \InvalidArgumentException('invalid length for $transport when calling RetailAccount., must be smaller than or equal to 25.');
        }

        $this->container['transport'] = $transport;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip 
     *
     * @return $this
     */
    public function setIp($ip)
    {
        if (!is_null($ip) && (mb_strlen($ip) > 50)) {
            throw new \InvalidArgumentException('invalid length for $ip when calling RetailAccount., must be smaller than or equal to 50.');
        }

        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port 
     *
     * @return $this
     */
    public function setPort($port)
    {

        if (!is_null($port) && ($port < 0)) {
            throw new \InvalidArgumentException('invalid value for $port when calling RetailAccount., must be bigger than or equal to 0.');
        }

        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password 
     *
     * @return $this
     */
    public function setPassword($password)
    {
        if (!is_null($password) && (mb_strlen($password) > 64)) {
            throw new \InvalidArgumentException('invalid length for $password when calling RetailAccount., must be smaller than or equal to 64.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets from_domain
     *
     * @return string
     */
    public function getFromDomain()
    {
        return $this->container['from_domain'];
    }

    /**
     * Sets from_domain
     *
     * @param string $from_domain 
     *
     * @return $this
     */
    public function setFromDomain($from_domain)
    {
        if (!is_null($from_domain) && (mb_strlen($from_domain) > 190)) {
            throw new \InvalidArgumentException('invalid length for $from_domain when calling RetailAccount., must be smaller than or equal to 190.');
        }

        $this->container['from_domain'] = $from_domain;

        return $this;
    }

    /**
     * Gets direct_connectivity
     *
     * @return string
     */
    public function getDirectConnectivity()
    {
        return $this->container['direct_connectivity'];
    }

    /**
     * Sets direct_connectivity
     *
     * @param string $direct_connectivity 
     *
     * @return $this
     */
    public function setDirectConnectivity($direct_connectivity)
    {
        $allowedValues = $this->getDirectConnectivityAllowableValues();
        if (!in_array($direct_connectivity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'direct_connectivity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direct_connectivity'] = $direct_connectivity;

        return $this;
    }

    /**
     * Gets ddi_in
     *
     * @return string
     */
    public function getDdiIn()
    {
        return $this->container['ddi_in'];
    }

    /**
     * Sets ddi_in
     *
     * @param string $ddi_in 
     *
     * @return $this
     */
    public function setDdiIn($ddi_in)
    {
        $allowedValues = $this->getDdiInAllowableValues();
        if (!in_array($ddi_in, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ddi_in', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ddi_in'] = $ddi_in;

        return $this;
    }

    /**
     * Gets t38_passthrough
     *
     * @return string
     */
    public function getT38Passthrough()
    {
        return $this->container['t38_passthrough'];
    }

    /**
     * Sets t38_passthrough
     *
     * @param string $t38_passthrough 
     *
     * @return $this
     */
    public function setT38Passthrough($t38_passthrough)
    {
        $allowedValues = $this->getT38PassthroughAllowableValues();
        if (!in_array($t38_passthrough, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 't38_passthrough', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['t38_passthrough'] = $t38_passthrough;

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
     * Gets transformation_rule_set
     *
     * @return int
     */
    public function getTransformationRuleSet()
    {
        return $this->container['transformation_rule_set'];
    }

    /**
     * Sets transformation_rule_set
     *
     * @param int $transformation_rule_set 
     *
     * @return $this
     */
    public function setTransformationRuleSet($transformation_rule_set)
    {
        $this->container['transformation_rule_set'] = $transformation_rule_set;

        return $this;
    }

    /**
     * Gets outgoing_ddi
     *
     * @return int
     */
    public function getOutgoingDdi()
    {
        return $this->container['outgoing_ddi'];
    }

    /**
     * Sets outgoing_ddi
     *
     * @param int $outgoing_ddi 
     *
     * @return $this
     */
    public function setOutgoingDdi($outgoing_ddi)
    {
        $this->container['outgoing_ddi'] = $outgoing_ddi;

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


