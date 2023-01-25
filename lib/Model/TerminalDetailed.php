<?php
/**
 * TerminalDetailed
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
 * TerminalDetailed Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TerminalDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Terminal-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'disallow' => 'string',
        'allow_audio' => 'string',
        'allow_video' => 'string',
        'direct_media_method' => 'string',
        'password' => 'string',
        'mac' => 'string',
        'last_provision_date' => '\DateTime',
        't38_passthrough' => 'string',
        'rtp_encryption' => 'bool',
        'id' => 'int',
        'terminal_model' => '\Swagger\Client\Model\TerminalModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'disallow' => null,
        'allow_audio' => null,
        'allow_video' => null,
        'direct_media_method' => null,
        'password' => null,
        'mac' => null,
        'last_provision_date' => 'date-time',
        't38_passthrough' => null,
        'rtp_encryption' => null,
        'id' => null,
        'terminal_model' => null
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
        'disallow' => 'disallow',
        'allow_audio' => 'allowAudio',
        'allow_video' => 'allowVideo',
        'direct_media_method' => 'directMediaMethod',
        'password' => 'password',
        'mac' => 'mac',
        'last_provision_date' => 'lastProvisionDate',
        't38_passthrough' => 't38Passthrough',
        'rtp_encryption' => 'rtpEncryption',
        'id' => 'id',
        'terminal_model' => 'terminalModel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'disallow' => 'setDisallow',
        'allow_audio' => 'setAllowAudio',
        'allow_video' => 'setAllowVideo',
        'direct_media_method' => 'setDirectMediaMethod',
        'password' => 'setPassword',
        'mac' => 'setMac',
        'last_provision_date' => 'setLastProvisionDate',
        't38_passthrough' => 'setT38Passthrough',
        'rtp_encryption' => 'setRtpEncryption',
        'id' => 'setId',
        'terminal_model' => 'setTerminalModel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'disallow' => 'getDisallow',
        'allow_audio' => 'getAllowAudio',
        'allow_video' => 'getAllowVideo',
        'direct_media_method' => 'getDirectMediaMethod',
        'password' => 'getPassword',
        'mac' => 'getMac',
        'last_provision_date' => 'getLastProvisionDate',
        't38_passthrough' => 'getT38Passthrough',
        'rtp_encryption' => 'getRtpEncryption',
        'id' => 'getId',
        'terminal_model' => 'getTerminalModel'
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

    const DIRECT_MEDIA_METHOD_UPDATE = 'update';
    const DIRECT_MEDIA_METHOD_INVITE = 'invite';
    const DIRECT_MEDIA_METHOD_REINVITE = 'reinvite';
    const T38_PASSTHROUGH_YES = 'yes';
    const T38_PASSTHROUGH_NO = 'no';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectMediaMethodAllowableValues()
    {
        return [
            self::DIRECT_MEDIA_METHOD_UPDATE,
            self::DIRECT_MEDIA_METHOD_INVITE,
            self::DIRECT_MEDIA_METHOD_REINVITE,
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
        $this->container['disallow'] = isset($data['disallow']) ? $data['disallow'] : 'all';
        $this->container['allow_audio'] = isset($data['allow_audio']) ? $data['allow_audio'] : 'alaw';
        $this->container['allow_video'] = isset($data['allow_video']) ? $data['allow_video'] : null;
        $this->container['direct_media_method'] = isset($data['direct_media_method']) ? $data['direct_media_method'] : 'update';
        $this->container['password'] = isset($data['password']) ? $data['password'] : '';
        $this->container['mac'] = isset($data['mac']) ? $data['mac'] : null;
        $this->container['last_provision_date'] = isset($data['last_provision_date']) ? $data['last_provision_date'] : null;
        $this->container['t38_passthrough'] = isset($data['t38_passthrough']) ? $data['t38_passthrough'] : 'no';
        $this->container['rtp_encryption'] = isset($data['rtp_encryption']) ? $data['rtp_encryption'] : false;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['terminal_model'] = isset($data['terminal_model']) ? $data['terminal_model'] : null;
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

        if ($this->container['disallow'] === null) {
            $invalidProperties[] = "'disallow' can't be null";
        }
        if ((mb_strlen($this->container['disallow']) > 200)) {
            $invalidProperties[] = "invalid value for 'disallow', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['allow_audio'] === null) {
            $invalidProperties[] = "'allow_audio' can't be null";
        }
        if ((mb_strlen($this->container['allow_audio']) > 200)) {
            $invalidProperties[] = "invalid value for 'allow_audio', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['allow_video']) && (mb_strlen($this->container['allow_video']) > 200)) {
            $invalidProperties[] = "invalid value for 'allow_video', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['direct_media_method'] === null) {
            $invalidProperties[] = "'direct_media_method' can't be null";
        }
        $allowedValues = $this->getDirectMediaMethodAllowableValues();
        if (!is_null($this->container['direct_media_method']) && !in_array($this->container['direct_media_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direct_media_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ((mb_strlen($this->container['password']) > 25)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['mac']) && (mb_strlen($this->container['mac']) > 12)) {
            $invalidProperties[] = "invalid value for 'mac', the character length must be smaller than or equal to 12.";
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

        if ($this->container['rtp_encryption'] === null) {
            $invalidProperties[] = "'rtp_encryption' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $name when calling TerminalDetailed., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets disallow
     *
     * @return string
     */
    public function getDisallow()
    {
        return $this->container['disallow'];
    }

    /**
     * Sets disallow
     *
     * @param string $disallow 
     *
     * @return $this
     */
    public function setDisallow($disallow)
    {
        if ((mb_strlen($disallow) > 200)) {
            throw new \InvalidArgumentException('invalid length for $disallow when calling TerminalDetailed., must be smaller than or equal to 200.');
        }

        $this->container['disallow'] = $disallow;

        return $this;
    }

    /**
     * Gets allow_audio
     *
     * @return string
     */
    public function getAllowAudio()
    {
        return $this->container['allow_audio'];
    }

    /**
     * Sets allow_audio
     *
     * @param string $allow_audio 
     *
     * @return $this
     */
    public function setAllowAudio($allow_audio)
    {
        if ((mb_strlen($allow_audio) > 200)) {
            throw new \InvalidArgumentException('invalid length for $allow_audio when calling TerminalDetailed., must be smaller than or equal to 200.');
        }

        $this->container['allow_audio'] = $allow_audio;

        return $this;
    }

    /**
     * Gets allow_video
     *
     * @return string
     */
    public function getAllowVideo()
    {
        return $this->container['allow_video'];
    }

    /**
     * Sets allow_video
     *
     * @param string $allow_video 
     *
     * @return $this
     */
    public function setAllowVideo($allow_video)
    {
        if (!is_null($allow_video) && (mb_strlen($allow_video) > 200)) {
            throw new \InvalidArgumentException('invalid length for $allow_video when calling TerminalDetailed., must be smaller than or equal to 200.');
        }

        $this->container['allow_video'] = $allow_video;

        return $this;
    }

    /**
     * Gets direct_media_method
     *
     * @return string
     */
    public function getDirectMediaMethod()
    {
        return $this->container['direct_media_method'];
    }

    /**
     * Sets direct_media_method
     *
     * @param string $direct_media_method 
     *
     * @return $this
     */
    public function setDirectMediaMethod($direct_media_method)
    {
        $allowedValues = $this->getDirectMediaMethodAllowableValues();
        if (!in_array($direct_media_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'direct_media_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direct_media_method'] = $direct_media_method;

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
        if ((mb_strlen($password) > 25)) {
            throw new \InvalidArgumentException('invalid length for $password when calling TerminalDetailed., must be smaller than or equal to 25.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets mac
     *
     * @return string
     */
    public function getMac()
    {
        return $this->container['mac'];
    }

    /**
     * Sets mac
     *
     * @param string $mac 
     *
     * @return $this
     */
    public function setMac($mac)
    {
        if (!is_null($mac) && (mb_strlen($mac) > 12)) {
            throw new \InvalidArgumentException('invalid length for $mac when calling TerminalDetailed., must be smaller than or equal to 12.');
        }

        $this->container['mac'] = $mac;

        return $this;
    }

    /**
     * Gets last_provision_date
     *
     * @return \DateTime
     */
    public function getLastProvisionDate()
    {
        return $this->container['last_provision_date'];
    }

    /**
     * Sets last_provision_date
     *
     * @param \DateTime $last_provision_date 
     *
     * @return $this
     */
    public function setLastProvisionDate($last_provision_date)
    {
        $this->container['last_provision_date'] = $last_provision_date;

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
     * Gets rtp_encryption
     *
     * @return bool
     */
    public function getRtpEncryption()
    {
        return $this->container['rtp_encryption'];
    }

    /**
     * Sets rtp_encryption
     *
     * @param bool $rtp_encryption 
     *
     * @return $this
     */
    public function setRtpEncryption($rtp_encryption)
    {
        $this->container['rtp_encryption'] = $rtp_encryption;

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
     * Gets terminal_model
     *
     * @return \Swagger\Client\Model\TerminalModel
     */
    public function getTerminalModel()
    {
        return $this->container['terminal_model'];
    }

    /**
     * Sets terminal_model
     *
     * @param \Swagger\Client\Model\TerminalModel $terminal_model terminal_model
     *
     * @return $this
     */
    public function setTerminalModel($terminal_model)
    {
        $this->container['terminal_model'] = $terminal_model;

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


