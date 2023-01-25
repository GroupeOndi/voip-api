<?php
/**
 * TransformationRuleDetailed
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
 * TransformationRuleDetailed Class Doc Comment
 *
 * @category Class
 * @package  Delta\Voip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransformationRuleDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransformationRule-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'description' => 'string',
        'priority' => 'int',
        'match_expr' => 'string',
        'replace_expr' => 'string',
        'id' => 'int',
        'transformation_rule_set' => '\Delta\Voip\Model\TransformationRuleSet'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'description' => null,
        'priority' => null,
        'match_expr' => null,
        'replace_expr' => null,
        'id' => null,
        'transformation_rule_set' => null
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
        'type' => 'type',
        'description' => 'description',
        'priority' => 'priority',
        'match_expr' => 'matchExpr',
        'replace_expr' => 'replaceExpr',
        'id' => 'id',
        'transformation_rule_set' => 'transformationRuleSet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'description' => 'setDescription',
        'priority' => 'setPriority',
        'match_expr' => 'setMatchExpr',
        'replace_expr' => 'setReplaceExpr',
        'id' => 'setId',
        'transformation_rule_set' => 'setTransformationRuleSet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'description' => 'getDescription',
        'priority' => 'getPriority',
        'match_expr' => 'getMatchExpr',
        'replace_expr' => 'getReplaceExpr',
        'id' => 'getId',
        'transformation_rule_set' => 'getTransformationRuleSet'
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

    const TYPE_CALLERIN = 'callerin';
    const TYPE_CALLEEIN = 'calleein';
    const TYPE_CALLEROUT = 'callerout';
    const TYPE_CALLEEOUT = 'calleeout';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CALLERIN,
            self::TYPE_CALLEEIN,
            self::TYPE_CALLEROUT,
            self::TYPE_CALLEEOUT,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : '';
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['match_expr'] = isset($data['match_expr']) ? $data['match_expr'] : null;
        $this->container['replace_expr'] = isset($data['replace_expr']) ? $data['replace_expr'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['transformation_rule_set'] = isset($data['transformation_rule_set']) ? $data['transformation_rule_set'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['type']) > 10)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 64)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
            $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['match_expr']) && (mb_strlen($this->container['match_expr']) > 128)) {
            $invalidProperties[] = "invalid value for 'match_expr', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['replace_expr']) && (mb_strlen($this->container['replace_expr']) > 128)) {
            $invalidProperties[] = "invalid value for 'replace_expr', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['transformation_rule_set'] === null) {
            $invalidProperties[] = "'transformation_rule_set' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($type) > 10)) {
            throw new \InvalidArgumentException('invalid length for $type when calling TransformationRuleDetailed., must be smaller than or equal to 10.');
        }

        $this->container['type'] = $type;

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
        if ((mb_strlen($description) > 64)) {
            throw new \InvalidArgumentException('invalid length for $description when calling TransformationRuleDetailed., must be smaller than or equal to 64.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority 
     *
     * @return $this
     */
    public function setPriority($priority)
    {

        if (!is_null($priority) && ($priority < 0)) {
            throw new \InvalidArgumentException('invalid value for $priority when calling TransformationRuleDetailed., must be bigger than or equal to 0.');
        }

        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets match_expr
     *
     * @return string
     */
    public function getMatchExpr()
    {
        return $this->container['match_expr'];
    }

    /**
     * Sets match_expr
     *
     * @param string $match_expr 
     *
     * @return $this
     */
    public function setMatchExpr($match_expr)
    {
        if (!is_null($match_expr) && (mb_strlen($match_expr) > 128)) {
            throw new \InvalidArgumentException('invalid length for $match_expr when calling TransformationRuleDetailed., must be smaller than or equal to 128.');
        }

        $this->container['match_expr'] = $match_expr;

        return $this;
    }

    /**
     * Gets replace_expr
     *
     * @return string
     */
    public function getReplaceExpr()
    {
        return $this->container['replace_expr'];
    }

    /**
     * Sets replace_expr
     *
     * @param string $replace_expr 
     *
     * @return $this
     */
    public function setReplaceExpr($replace_expr)
    {
        if (!is_null($replace_expr) && (mb_strlen($replace_expr) > 128)) {
            throw new \InvalidArgumentException('invalid length for $replace_expr when calling TransformationRuleDetailed., must be smaller than or equal to 128.');
        }

        $this->container['replace_expr'] = $replace_expr;

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


