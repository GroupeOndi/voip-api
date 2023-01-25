<?php
/**
 * UserDetailed
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
 * UserDetailed Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'pass' => 'string',
        'do_not_disturb' => 'bool',
        'is_boss' => 'bool',
        'active' => 'bool',
        'max_calls' => 'int',
        'external_ip_calls' => 'string',
        'reject_call_method' => 'string',
        'voicemail_enabled' => 'bool',
        'voicemail_send_mail' => 'bool',
        'voicemail_attach_sound' => 'bool',
        'multi_contact' => 'bool',
        'gs_qr_code' => 'bool',
        'id' => 'int',
        'call_acl' => '\Delta\Voip\Model\CallAcl',
        'boss_assistant' => '\Delta\Voip\Model\User',
        'boss_assistant_white_list' => '\Delta\Voip\Model\MatchList',
        'transformation_rule_set' => '\Delta\Voip\Model\TransformationRuleSet',
        'language' => '\Delta\Voip\Model\Language',
        'terminal' => '\Delta\Voip\Model\Terminal',
        'extension' => '\Delta\Voip\Model\Extension',
        'timezone' => '\Delta\Voip\Model\Timezone',
        'outgoing_ddi' => '\Delta\Voip\Model\Ddi',
        'outgoing_ddi_rule' => '\Delta\Voip\Model\OutgoingDdiRule',
        'voicemail_locution' => '\Delta\Voip\Model\Locution',
        'location' => '\Delta\Voip\Model\Location',
        'pickup_group_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'lastname' => null,
        'email' => null,
        'pass' => null,
        'do_not_disturb' => null,
        'is_boss' => null,
        'active' => null,
        'max_calls' => null,
        'external_ip_calls' => null,
        'reject_call_method' => null,
        'voicemail_enabled' => null,
        'voicemail_send_mail' => null,
        'voicemail_attach_sound' => null,
        'multi_contact' => null,
        'gs_qr_code' => null,
        'id' => null,
        'call_acl' => null,
        'boss_assistant' => null,
        'boss_assistant_white_list' => null,
        'transformation_rule_set' => null,
        'language' => null,
        'terminal' => null,
        'extension' => null,
        'timezone' => null,
        'outgoing_ddi' => null,
        'outgoing_ddi_rule' => null,
        'voicemail_locution' => null,
        'location' => null,
        'pickup_group_ids' => null
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
        'lastname' => 'lastname',
        'email' => 'email',
        'pass' => 'pass',
        'do_not_disturb' => 'doNotDisturb',
        'is_boss' => 'isBoss',
        'active' => 'active',
        'max_calls' => 'maxCalls',
        'external_ip_calls' => 'externalIpCalls',
        'reject_call_method' => 'rejectCallMethod',
        'voicemail_enabled' => 'voicemailEnabled',
        'voicemail_send_mail' => 'voicemailSendMail',
        'voicemail_attach_sound' => 'voicemailAttachSound',
        'multi_contact' => 'multiContact',
        'gs_qr_code' => 'gsQRCode',
        'id' => 'id',
        'call_acl' => 'callAcl',
        'boss_assistant' => 'bossAssistant',
        'boss_assistant_white_list' => 'bossAssistantWhiteList',
        'transformation_rule_set' => 'transformationRuleSet',
        'language' => 'language',
        'terminal' => 'terminal',
        'extension' => 'extension',
        'timezone' => 'timezone',
        'outgoing_ddi' => 'outgoingDdi',
        'outgoing_ddi_rule' => 'outgoingDdiRule',
        'voicemail_locution' => 'voicemailLocution',
        'location' => 'location',
        'pickup_group_ids' => 'pickupGroupIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'lastname' => 'setLastname',
        'email' => 'setEmail',
        'pass' => 'setPass',
        'do_not_disturb' => 'setDoNotDisturb',
        'is_boss' => 'setIsBoss',
        'active' => 'setActive',
        'max_calls' => 'setMaxCalls',
        'external_ip_calls' => 'setExternalIpCalls',
        'reject_call_method' => 'setRejectCallMethod',
        'voicemail_enabled' => 'setVoicemailEnabled',
        'voicemail_send_mail' => 'setVoicemailSendMail',
        'voicemail_attach_sound' => 'setVoicemailAttachSound',
        'multi_contact' => 'setMultiContact',
        'gs_qr_code' => 'setGsQrCode',
        'id' => 'setId',
        'call_acl' => 'setCallAcl',
        'boss_assistant' => 'setBossAssistant',
        'boss_assistant_white_list' => 'setBossAssistantWhiteList',
        'transformation_rule_set' => 'setTransformationRuleSet',
        'language' => 'setLanguage',
        'terminal' => 'setTerminal',
        'extension' => 'setExtension',
        'timezone' => 'setTimezone',
        'outgoing_ddi' => 'setOutgoingDdi',
        'outgoing_ddi_rule' => 'setOutgoingDdiRule',
        'voicemail_locution' => 'setVoicemailLocution',
        'location' => 'setLocation',
        'pickup_group_ids' => 'setPickupGroupIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'lastname' => 'getLastname',
        'email' => 'getEmail',
        'pass' => 'getPass',
        'do_not_disturb' => 'getDoNotDisturb',
        'is_boss' => 'getIsBoss',
        'active' => 'getActive',
        'max_calls' => 'getMaxCalls',
        'external_ip_calls' => 'getExternalIpCalls',
        'reject_call_method' => 'getRejectCallMethod',
        'voicemail_enabled' => 'getVoicemailEnabled',
        'voicemail_send_mail' => 'getVoicemailSendMail',
        'voicemail_attach_sound' => 'getVoicemailAttachSound',
        'multi_contact' => 'getMultiContact',
        'gs_qr_code' => 'getGsQrCode',
        'id' => 'getId',
        'call_acl' => 'getCallAcl',
        'boss_assistant' => 'getBossAssistant',
        'boss_assistant_white_list' => 'getBossAssistantWhiteList',
        'transformation_rule_set' => 'getTransformationRuleSet',
        'language' => 'getLanguage',
        'terminal' => 'getTerminal',
        'extension' => 'getExtension',
        'timezone' => 'getTimezone',
        'outgoing_ddi' => 'getOutgoingDdi',
        'outgoing_ddi_rule' => 'getOutgoingDdiRule',
        'voicemail_locution' => 'getVoicemailLocution',
        'location' => 'getLocation',
        'pickup_group_ids' => 'getPickupGroupIds'
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

    const EXTERNAL_IP_CALLS__0 = '0';
    const EXTERNAL_IP_CALLS__1 = '1';
    const EXTERNAL_IP_CALLS__2 = '2';
    const EXTERNAL_IP_CALLS__3 = '3';
    const REJECT_CALL_METHOD_RFC = 'rfc';
    const REJECT_CALL_METHOD__486 = '486';
    const REJECT_CALL_METHOD__600 = '600';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExternalIpCallsAllowableValues()
    {
        return [
            self::EXTERNAL_IP_CALLS__0,
            self::EXTERNAL_IP_CALLS__1,
            self::EXTERNAL_IP_CALLS__2,
            self::EXTERNAL_IP_CALLS__3,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRejectCallMethodAllowableValues()
    {
        return [
            self::REJECT_CALL_METHOD_RFC,
            self::REJECT_CALL_METHOD__486,
            self::REJECT_CALL_METHOD__600,
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
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['pass'] = isset($data['pass']) ? $data['pass'] : null;
        $this->container['do_not_disturb'] = isset($data['do_not_disturb']) ? $data['do_not_disturb'] : false;
        $this->container['is_boss'] = isset($data['is_boss']) ? $data['is_boss'] : false;
        $this->container['active'] = isset($data['active']) ? $data['active'] : false;
        $this->container['max_calls'] = isset($data['max_calls']) ? $data['max_calls'] : null;
        $this->container['external_ip_calls'] = isset($data['external_ip_calls']) ? $data['external_ip_calls'] : '0';
        $this->container['reject_call_method'] = isset($data['reject_call_method']) ? $data['reject_call_method'] : 'rfc';
        $this->container['voicemail_enabled'] = isset($data['voicemail_enabled']) ? $data['voicemail_enabled'] : false;
        $this->container['voicemail_send_mail'] = isset($data['voicemail_send_mail']) ? $data['voicemail_send_mail'] : false;
        $this->container['voicemail_attach_sound'] = isset($data['voicemail_attach_sound']) ? $data['voicemail_attach_sound'] : false;
        $this->container['multi_contact'] = isset($data['multi_contact']) ? $data['multi_contact'] : false;
        $this->container['gs_qr_code'] = isset($data['gs_qr_code']) ? $data['gs_qr_code'] : false;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['call_acl'] = isset($data['call_acl']) ? $data['call_acl'] : null;
        $this->container['boss_assistant'] = isset($data['boss_assistant']) ? $data['boss_assistant'] : null;
        $this->container['boss_assistant_white_list'] = isset($data['boss_assistant_white_list']) ? $data['boss_assistant_white_list'] : null;
        $this->container['transformation_rule_set'] = isset($data['transformation_rule_set']) ? $data['transformation_rule_set'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['outgoing_ddi'] = isset($data['outgoing_ddi']) ? $data['outgoing_ddi'] : null;
        $this->container['outgoing_ddi_rule'] = isset($data['outgoing_ddi_rule']) ? $data['outgoing_ddi_rule'] : null;
        $this->container['voicemail_locution'] = isset($data['voicemail_locution']) ? $data['voicemail_locution'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['pickup_group_ids'] = isset($data['pickup_group_ids']) ? $data['pickup_group_ids'] : null;
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

        if ($this->container['lastname'] === null) {
            $invalidProperties[] = "'lastname' can't be null";
        }
        if ((mb_strlen($this->container['lastname']) > 100)) {
            $invalidProperties[] = "invalid value for 'lastname', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['pass']) && (mb_strlen($this->container['pass']) > 80)) {
            $invalidProperties[] = "invalid value for 'pass', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['do_not_disturb'] === null) {
            $invalidProperties[] = "'do_not_disturb' can't be null";
        }
        if ($this->container['is_boss'] === null) {
            $invalidProperties[] = "'is_boss' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['max_calls'] === null) {
            $invalidProperties[] = "'max_calls' can't be null";
        }
        if (($this->container['max_calls'] < 0)) {
            $invalidProperties[] = "invalid value for 'max_calls', must be bigger than or equal to 0.";
        }

        if ($this->container['external_ip_calls'] === null) {
            $invalidProperties[] = "'external_ip_calls' can't be null";
        }
        $allowedValues = $this->getExternalIpCallsAllowableValues();
        if (!is_null($this->container['external_ip_calls']) && !in_array($this->container['external_ip_calls'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'external_ip_calls', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['external_ip_calls']) > 1)) {
            $invalidProperties[] = "invalid value for 'external_ip_calls', the character length must be smaller than or equal to 1.";
        }

        if ($this->container['reject_call_method'] === null) {
            $invalidProperties[] = "'reject_call_method' can't be null";
        }
        $allowedValues = $this->getRejectCallMethodAllowableValues();
        if (!is_null($this->container['reject_call_method']) && !in_array($this->container['reject_call_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reject_call_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['reject_call_method']) > 3)) {
            $invalidProperties[] = "invalid value for 'reject_call_method', the character length must be smaller than or equal to 3.";
        }

        if ($this->container['voicemail_enabled'] === null) {
            $invalidProperties[] = "'voicemail_enabled' can't be null";
        }
        if ($this->container['voicemail_send_mail'] === null) {
            $invalidProperties[] = "'voicemail_send_mail' can't be null";
        }
        if ($this->container['voicemail_attach_sound'] === null) {
            $invalidProperties[] = "'voicemail_attach_sound' can't be null";
        }
        if ($this->container['multi_contact'] === null) {
            $invalidProperties[] = "'multi_contact' can't be null";
        }
        if ($this->container['gs_qr_code'] === null) {
            $invalidProperties[] = "'gs_qr_code' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $name when calling UserDetailed., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname 
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        if ((mb_strlen($lastname) > 100)) {
            throw new \InvalidArgumentException('invalid length for $lastname when calling UserDetailed., must be smaller than or equal to 100.');
        }

        $this->container['lastname'] = $lastname;

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
        if (!is_null($email) && (mb_strlen($email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email when calling UserDetailed., must be smaller than or equal to 100.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->container['pass'];
    }

    /**
     * Sets pass
     *
     * @param string $pass 
     *
     * @return $this
     */
    public function setPass($pass)
    {
        if (!is_null($pass) && (mb_strlen($pass) > 80)) {
            throw new \InvalidArgumentException('invalid length for $pass when calling UserDetailed., must be smaller than or equal to 80.');
        }

        $this->container['pass'] = $pass;

        return $this;
    }

    /**
     * Gets do_not_disturb
     *
     * @return bool
     */
    public function getDoNotDisturb()
    {
        return $this->container['do_not_disturb'];
    }

    /**
     * Sets do_not_disturb
     *
     * @param bool $do_not_disturb 
     *
     * @return $this
     */
    public function setDoNotDisturb($do_not_disturb)
    {
        $this->container['do_not_disturb'] = $do_not_disturb;

        return $this;
    }

    /**
     * Gets is_boss
     *
     * @return bool
     */
    public function getIsBoss()
    {
        return $this->container['is_boss'];
    }

    /**
     * Sets is_boss
     *
     * @param bool $is_boss 
     *
     * @return $this
     */
    public function setIsBoss($is_boss)
    {
        $this->container['is_boss'] = $is_boss;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active 
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets max_calls
     *
     * @return int
     */
    public function getMaxCalls()
    {
        return $this->container['max_calls'];
    }

    /**
     * Sets max_calls
     *
     * @param int $max_calls 
     *
     * @return $this
     */
    public function setMaxCalls($max_calls)
    {

        if (($max_calls < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_calls when calling UserDetailed., must be bigger than or equal to 0.');
        }

        $this->container['max_calls'] = $max_calls;

        return $this;
    }

    /**
     * Gets external_ip_calls
     *
     * @return string
     */
    public function getExternalIpCalls()
    {
        return $this->container['external_ip_calls'];
    }

    /**
     * Sets external_ip_calls
     *
     * @param string $external_ip_calls 
     *
     * @return $this
     */
    public function setExternalIpCalls($external_ip_calls)
    {
        $allowedValues = $this->getExternalIpCallsAllowableValues();
        if (!in_array($external_ip_calls, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'external_ip_calls', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($external_ip_calls) > 1)) {
            throw new \InvalidArgumentException('invalid length for $external_ip_calls when calling UserDetailed., must be smaller than or equal to 1.');
        }

        $this->container['external_ip_calls'] = $external_ip_calls;

        return $this;
    }

    /**
     * Gets reject_call_method
     *
     * @return string
     */
    public function getRejectCallMethod()
    {
        return $this->container['reject_call_method'];
    }

    /**
     * Sets reject_call_method
     *
     * @param string $reject_call_method 
     *
     * @return $this
     */
    public function setRejectCallMethod($reject_call_method)
    {
        $allowedValues = $this->getRejectCallMethodAllowableValues();
        if (!in_array($reject_call_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reject_call_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($reject_call_method) > 3)) {
            throw new \InvalidArgumentException('invalid length for $reject_call_method when calling UserDetailed., must be smaller than or equal to 3.');
        }

        $this->container['reject_call_method'] = $reject_call_method;

        return $this;
    }

    /**
     * Gets voicemail_enabled
     *
     * @return bool
     */
    public function getVoicemailEnabled()
    {
        return $this->container['voicemail_enabled'];
    }

    /**
     * Sets voicemail_enabled
     *
     * @param bool $voicemail_enabled 
     *
     * @return $this
     */
    public function setVoicemailEnabled($voicemail_enabled)
    {
        $this->container['voicemail_enabled'] = $voicemail_enabled;

        return $this;
    }

    /**
     * Gets voicemail_send_mail
     *
     * @return bool
     */
    public function getVoicemailSendMail()
    {
        return $this->container['voicemail_send_mail'];
    }

    /**
     * Sets voicemail_send_mail
     *
     * @param bool $voicemail_send_mail 
     *
     * @return $this
     */
    public function setVoicemailSendMail($voicemail_send_mail)
    {
        $this->container['voicemail_send_mail'] = $voicemail_send_mail;

        return $this;
    }

    /**
     * Gets voicemail_attach_sound
     *
     * @return bool
     */
    public function getVoicemailAttachSound()
    {
        return $this->container['voicemail_attach_sound'];
    }

    /**
     * Sets voicemail_attach_sound
     *
     * @param bool $voicemail_attach_sound 
     *
     * @return $this
     */
    public function setVoicemailAttachSound($voicemail_attach_sound)
    {
        $this->container['voicemail_attach_sound'] = $voicemail_attach_sound;

        return $this;
    }

    /**
     * Gets multi_contact
     *
     * @return bool
     */
    public function getMultiContact()
    {
        return $this->container['multi_contact'];
    }

    /**
     * Sets multi_contact
     *
     * @param bool $multi_contact 
     *
     * @return $this
     */
    public function setMultiContact($multi_contact)
    {
        $this->container['multi_contact'] = $multi_contact;

        return $this;
    }

    /**
     * Gets gs_qr_code
     *
     * @return bool
     */
    public function getGsQrCode()
    {
        return $this->container['gs_qr_code'];
    }

    /**
     * Sets gs_qr_code
     *
     * @param bool $gs_qr_code 
     *
     * @return $this
     */
    public function setGsQrCode($gs_qr_code)
    {
        $this->container['gs_qr_code'] = $gs_qr_code;

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
     * Gets call_acl
     *
     * @return \Delta\Voip\Model\CallAcl
     */
    public function getCallAcl()
    {
        return $this->container['call_acl'];
    }

    /**
     * Sets call_acl
     *
     * @param \Delta\Voip\Model\CallAcl $call_acl call_acl
     *
     * @return $this
     */
    public function setCallAcl($call_acl)
    {
        $this->container['call_acl'] = $call_acl;

        return $this;
    }

    /**
     * Gets boss_assistant
     *
     * @return \Delta\Voip\Model\User
     */
    public function getBossAssistant()
    {
        return $this->container['boss_assistant'];
    }

    /**
     * Sets boss_assistant
     *
     * @param \Delta\Voip\Model\User $boss_assistant boss_assistant
     *
     * @return $this
     */
    public function setBossAssistant($boss_assistant)
    {
        $this->container['boss_assistant'] = $boss_assistant;

        return $this;
    }

    /**
     * Gets boss_assistant_white_list
     *
     * @return \Delta\Voip\Model\MatchList
     */
    public function getBossAssistantWhiteList()
    {
        return $this->container['boss_assistant_white_list'];
    }

    /**
     * Sets boss_assistant_white_list
     *
     * @param \Delta\Voip\Model\MatchList $boss_assistant_white_list boss_assistant_white_list
     *
     * @return $this
     */
    public function setBossAssistantWhiteList($boss_assistant_white_list)
    {
        $this->container['boss_assistant_white_list'] = $boss_assistant_white_list;

        return $this;
    }

    /**
     * Gets transformation_rule_set
     *
     * @return \Delta\Voip\Model\TransformationRuleSet
     */
    public function getTransformationRuleSet()
    {
        return $this->container['transformation_rule_set'];
    }

    /**
     * Sets transformation_rule_set
     *
     * @param \Delta\Voip\Model\TransformationRuleSet $transformation_rule_set transformation_rule_set
     *
     * @return $this
     */
    public function setTransformationRuleSet($transformation_rule_set)
    {
        $this->container['transformation_rule_set'] = $transformation_rule_set;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Delta\Voip\Model\Language
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Delta\Voip\Model\Language $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets terminal
     *
     * @return \Delta\Voip\Model\Terminal
     */
    public function getTerminal()
    {
        return $this->container['terminal'];
    }

    /**
     * Sets terminal
     *
     * @param \Delta\Voip\Model\Terminal $terminal terminal
     *
     * @return $this
     */
    public function setTerminal($terminal)
    {
        $this->container['terminal'] = $terminal;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return \Delta\Voip\Model\Extension
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param \Delta\Voip\Model\Extension $extension extension
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return \Delta\Voip\Model\Timezone
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param \Delta\Voip\Model\Timezone $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets outgoing_ddi
     *
     * @return \Delta\Voip\Model\Ddi
     */
    public function getOutgoingDdi()
    {
        return $this->container['outgoing_ddi'];
    }

    /**
     * Sets outgoing_ddi
     *
     * @param \Delta\Voip\Model\Ddi $outgoing_ddi outgoing_ddi
     *
     * @return $this
     */
    public function setOutgoingDdi($outgoing_ddi)
    {
        $this->container['outgoing_ddi'] = $outgoing_ddi;

        return $this;
    }

    /**
     * Gets outgoing_ddi_rule
     *
     * @return \Delta\Voip\Model\OutgoingDdiRule
     */
    public function getOutgoingDdiRule()
    {
        return $this->container['outgoing_ddi_rule'];
    }

    /**
     * Sets outgoing_ddi_rule
     *
     * @param \Delta\Voip\Model\OutgoingDdiRule $outgoing_ddi_rule outgoing_ddi_rule
     *
     * @return $this
     */
    public function setOutgoingDdiRule($outgoing_ddi_rule)
    {
        $this->container['outgoing_ddi_rule'] = $outgoing_ddi_rule;

        return $this;
    }

    /**
     * Gets voicemail_locution
     *
     * @return \Delta\Voip\Model\Locution
     */
    public function getVoicemailLocution()
    {
        return $this->container['voicemail_locution'];
    }

    /**
     * Sets voicemail_locution
     *
     * @param \Delta\Voip\Model\Locution $voicemail_locution voicemail_locution
     *
     * @return $this
     */
    public function setVoicemailLocution($voicemail_locution)
    {
        $this->container['voicemail_locution'] = $voicemail_locution;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Delta\Voip\Model\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Delta\Voip\Model\Location $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets pickup_group_ids
     *
     * @return int[]
     */
    public function getPickupGroupIds()
    {
        return $this->container['pickup_group_ids'];
    }

    /**
     * Sets pickup_group_ids
     *
     * @param int[] $pickup_group_ids Pickup group ids
     *
     * @return $this
     */
    public function setPickupGroupIds($pickup_group_ids)
    {
        $this->container['pickup_group_ids'] = $pickup_group_ids;

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


