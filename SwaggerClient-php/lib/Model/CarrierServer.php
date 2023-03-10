<?php
/**
 * CarrierServer
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
 * CarrierServer Class Doc Comment
 *
 * @category Class
 * @package  Delta/Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CarrierServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CarrierServer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ip' => 'string',
        'hostname' => 'string',
        'port' => 'int',
        'uri_scheme' => 'int',
        'transport' => 'int',
        'send_pai' => 'bool',
        'send_rpid' => 'bool',
        'auth_needed' => 'string',
        'auth_user' => 'string',
        'auth_password' => 'string',
        'sip_proxy' => 'string',
        'outbound_proxy' => 'string',
        'from_user' => 'string',
        'from_domain' => 'string',
        'id' => 'int',
        'carrier' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ip' => null,
        'hostname' => null,
        'port' => null,
        'uri_scheme' => null,
        'transport' => null,
        'send_pai' => null,
        'send_rpid' => null,
        'auth_needed' => null,
        'auth_user' => null,
        'auth_password' => null,
        'sip_proxy' => null,
        'outbound_proxy' => null,
        'from_user' => null,
        'from_domain' => null,
        'id' => null,
        'carrier' => null
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
        'ip' => 'ip',
        'hostname' => 'hostname',
        'port' => 'port',
        'uri_scheme' => 'uriScheme',
        'transport' => 'transport',
        'send_pai' => 'sendPAI',
        'send_rpid' => 'sendRPID',
        'auth_needed' => 'authNeeded',
        'auth_user' => 'authUser',
        'auth_password' => 'authPassword',
        'sip_proxy' => 'sipProxy',
        'outbound_proxy' => 'outboundProxy',
        'from_user' => 'fromUser',
        'from_domain' => 'fromDomain',
        'id' => 'id',
        'carrier' => 'carrier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ip' => 'setIp',
        'hostname' => 'setHostname',
        'port' => 'setPort',
        'uri_scheme' => 'setUriScheme',
        'transport' => 'setTransport',
        'send_pai' => 'setSendPai',
        'send_rpid' => 'setSendRpid',
        'auth_needed' => 'setAuthNeeded',
        'auth_user' => 'setAuthUser',
        'auth_password' => 'setAuthPassword',
        'sip_proxy' => 'setSipProxy',
        'outbound_proxy' => 'setOutboundProxy',
        'from_user' => 'setFromUser',
        'from_domain' => 'setFromDomain',
        'id' => 'setId',
        'carrier' => 'setCarrier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ip' => 'getIp',
        'hostname' => 'getHostname',
        'port' => 'getPort',
        'uri_scheme' => 'getUriScheme',
        'transport' => 'getTransport',
        'send_pai' => 'getSendPai',
        'send_rpid' => 'getSendRpid',
        'auth_needed' => 'getAuthNeeded',
        'auth_user' => 'getAuthUser',
        'auth_password' => 'getAuthPassword',
        'sip_proxy' => 'getSipProxy',
        'outbound_proxy' => 'getOutboundProxy',
        'from_user' => 'getFromUser',
        'from_domain' => 'getFromDomain',
        'id' => 'getId',
        'carrier' => 'getCarrier'
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['uri_scheme'] = isset($data['uri_scheme']) ? $data['uri_scheme'] : null;
        $this->container['transport'] = isset($data['transport']) ? $data['transport'] : null;
        $this->container['send_pai'] = isset($data['send_pai']) ? $data['send_pai'] : false;
        $this->container['send_rpid'] = isset($data['send_rpid']) ? $data['send_rpid'] : false;
        $this->container['auth_needed'] = isset($data['auth_needed']) ? $data['auth_needed'] : 'no';
        $this->container['auth_user'] = isset($data['auth_user']) ? $data['auth_user'] : null;
        $this->container['auth_password'] = isset($data['auth_password']) ? $data['auth_password'] : null;
        $this->container['sip_proxy'] = isset($data['sip_proxy']) ? $data['sip_proxy'] : null;
        $this->container['outbound_proxy'] = isset($data['outbound_proxy']) ? $data['outbound_proxy'] : null;
        $this->container['from_user'] = isset($data['from_user']) ? $data['from_user'] : null;
        $this->container['from_domain'] = isset($data['from_domain']) ? $data['from_domain'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) > 50)) {
            $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['hostname']) && (mb_strlen($this->container['hostname']) > 64)) {
            $invalidProperties[] = "invalid value for 'hostname', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
            $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['uri_scheme']) && ($this->container['uri_scheme'] < 0)) {
            $invalidProperties[] = "invalid value for 'uri_scheme', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['transport']) && ($this->container['transport'] < 0)) {
            $invalidProperties[] = "invalid value for 'transport', must be bigger than or equal to 0.";
        }

        if ($this->container['auth_needed'] === null) {
            $invalidProperties[] = "'auth_needed' can't be null";
        }
        if (!is_null($this->container['auth_user']) && (mb_strlen($this->container['auth_user']) > 64)) {
            $invalidProperties[] = "invalid value for 'auth_user', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['auth_password']) && (mb_strlen($this->container['auth_password']) > 64)) {
            $invalidProperties[] = "invalid value for 'auth_password', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['sip_proxy']) && (mb_strlen($this->container['sip_proxy']) > 128)) {
            $invalidProperties[] = "invalid value for 'sip_proxy', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['outbound_proxy']) && (mb_strlen($this->container['outbound_proxy']) > 128)) {
            $invalidProperties[] = "invalid value for 'outbound_proxy', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['from_user']) && (mb_strlen($this->container['from_user']) > 64)) {
            $invalidProperties[] = "invalid value for 'from_user', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['from_domain']) && (mb_strlen($this->container['from_domain']) > 190)) {
            $invalidProperties[] = "invalid value for 'from_domain', the character length must be smaller than or equal to 190.";
        }

        if ($this->container['carrier'] === null) {
            $invalidProperties[] = "'carrier' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $ip when calling CarrierServer., must be smaller than or equal to 50.');
        }

        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string $hostname 
     *
     * @return $this
     */
    public function setHostname($hostname)
    {
        if (!is_null($hostname) && (mb_strlen($hostname) > 64)) {
            throw new \InvalidArgumentException('invalid length for $hostname when calling CarrierServer., must be smaller than or equal to 64.');
        }

        $this->container['hostname'] = $hostname;

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
            throw new \InvalidArgumentException('invalid value for $port when calling CarrierServer., must be bigger than or equal to 0.');
        }

        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets uri_scheme
     *
     * @return int
     */
    public function getUriScheme()
    {
        return $this->container['uri_scheme'];
    }

    /**
     * Sets uri_scheme
     *
     * @param int $uri_scheme 
     *
     * @return $this
     */
    public function setUriScheme($uri_scheme)
    {

        if (!is_null($uri_scheme) && ($uri_scheme < 0)) {
            throw new \InvalidArgumentException('invalid value for $uri_scheme when calling CarrierServer., must be bigger than or equal to 0.');
        }

        $this->container['uri_scheme'] = $uri_scheme;

        return $this;
    }

    /**
     * Gets transport
     *
     * @return int
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     *
     * @param int $transport 
     *
     * @return $this
     */
    public function setTransport($transport)
    {

        if (!is_null($transport) && ($transport < 0)) {
            throw new \InvalidArgumentException('invalid value for $transport when calling CarrierServer., must be bigger than or equal to 0.');
        }

        $this->container['transport'] = $transport;

        return $this;
    }

    /**
     * Gets send_pai
     *
     * @return bool
     */
    public function getSendPai()
    {
        return $this->container['send_pai'];
    }

    /**
     * Sets send_pai
     *
     * @param bool $send_pai 
     *
     * @return $this
     */
    public function setSendPai($send_pai)
    {
        $this->container['send_pai'] = $send_pai;

        return $this;
    }

    /**
     * Gets send_rpid
     *
     * @return bool
     */
    public function getSendRpid()
    {
        return $this->container['send_rpid'];
    }

    /**
     * Sets send_rpid
     *
     * @param bool $send_rpid 
     *
     * @return $this
     */
    public function setSendRpid($send_rpid)
    {
        $this->container['send_rpid'] = $send_rpid;

        return $this;
    }

    /**
     * Gets auth_needed
     *
     * @return string
     */
    public function getAuthNeeded()
    {
        return $this->container['auth_needed'];
    }

    /**
     * Sets auth_needed
     *
     * @param string $auth_needed 
     *
     * @return $this
     */
    public function setAuthNeeded($auth_needed)
    {
        $this->container['auth_needed'] = $auth_needed;

        return $this;
    }

    /**
     * Gets auth_user
     *
     * @return string
     */
    public function getAuthUser()
    {
        return $this->container['auth_user'];
    }

    /**
     * Sets auth_user
     *
     * @param string $auth_user 
     *
     * @return $this
     */
    public function setAuthUser($auth_user)
    {
        if (!is_null($auth_user) && (mb_strlen($auth_user) > 64)) {
            throw new \InvalidArgumentException('invalid length for $auth_user when calling CarrierServer., must be smaller than or equal to 64.');
        }

        $this->container['auth_user'] = $auth_user;

        return $this;
    }

    /**
     * Gets auth_password
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->container['auth_password'];
    }

    /**
     * Sets auth_password
     *
     * @param string $auth_password 
     *
     * @return $this
     */
    public function setAuthPassword($auth_password)
    {
        if (!is_null($auth_password) && (mb_strlen($auth_password) > 64)) {
            throw new \InvalidArgumentException('invalid length for $auth_password when calling CarrierServer., must be smaller than or equal to 64.');
        }

        $this->container['auth_password'] = $auth_password;

        return $this;
    }

    /**
     * Gets sip_proxy
     *
     * @return string
     */
    public function getSipProxy()
    {
        return $this->container['sip_proxy'];
    }

    /**
     * Sets sip_proxy
     *
     * @param string $sip_proxy 
     *
     * @return $this
     */
    public function setSipProxy($sip_proxy)
    {
        if (!is_null($sip_proxy) && (mb_strlen($sip_proxy) > 128)) {
            throw new \InvalidArgumentException('invalid length for $sip_proxy when calling CarrierServer., must be smaller than or equal to 128.');
        }

        $this->container['sip_proxy'] = $sip_proxy;

        return $this;
    }

    /**
     * Gets outbound_proxy
     *
     * @return string
     */
    public function getOutboundProxy()
    {
        return $this->container['outbound_proxy'];
    }

    /**
     * Sets outbound_proxy
     *
     * @param string $outbound_proxy 
     *
     * @return $this
     */
    public function setOutboundProxy($outbound_proxy)
    {
        if (!is_null($outbound_proxy) && (mb_strlen($outbound_proxy) > 128)) {
            throw new \InvalidArgumentException('invalid length for $outbound_proxy when calling CarrierServer., must be smaller than or equal to 128.');
        }

        $this->container['outbound_proxy'] = $outbound_proxy;

        return $this;
    }

    /**
     * Gets from_user
     *
     * @return string
     */
    public function getFromUser()
    {
        return $this->container['from_user'];
    }

    /**
     * Sets from_user
     *
     * @param string $from_user 
     *
     * @return $this
     */
    public function setFromUser($from_user)
    {
        if (!is_null($from_user) && (mb_strlen($from_user) > 64)) {
            throw new \InvalidArgumentException('invalid length for $from_user when calling CarrierServer., must be smaller than or equal to 64.');
        }

        $this->container['from_user'] = $from_user;

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
            throw new \InvalidArgumentException('invalid length for $from_domain when calling CarrierServer., must be smaller than or equal to 190.');
        }

        $this->container['from_domain'] = $from_domain;

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
     * Gets carrier
     *
     * @return int
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param int $carrier 
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

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


