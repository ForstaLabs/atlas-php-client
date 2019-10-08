<?php
/**
 * UserDirectory
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Forsta Atlas API
 *
 * User and Tag management API for Forsta Messaging Platform
 *
 * The version of the OpenAPI document: v1
 * Contact: support@forsta.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * UserDirectory Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserDirectory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserDirectory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'tag' => 'string',
        'gravatar_hash' => 'string',
        'user_type' => 'string',
        'is_monitor' => 'bool',
        'first_name' => 'string',
        'last_name' => 'string',
        'is_active' => 'bool',
        'org' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'avatar_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'tag' => null,
        'gravatar_hash' => null,
        'user_type' => null,
        'is_monitor' => null,
        'first_name' => null,
        'last_name' => null,
        'is_active' => null,
        'org' => null,
        'created' => 'date-time',
        'modified' => 'date-time',
        'avatar_url' => 'uri'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'tag' => 'tag',
        'gravatar_hash' => 'gravatar_hash',
        'user_type' => 'user_type',
        'is_monitor' => 'is_monitor',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'is_active' => 'is_active',
        'org' => 'org',
        'created' => 'created',
        'modified' => 'modified',
        'avatar_url' => 'avatar_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'tag' => 'setTag',
        'gravatar_hash' => 'setGravatarHash',
        'user_type' => 'setUserType',
        'is_monitor' => 'setIsMonitor',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'is_active' => 'setIsActive',
        'org' => 'setOrg',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'avatar_url' => 'setAvatarUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'tag' => 'getTag',
        'gravatar_hash' => 'getGravatarHash',
        'user_type' => 'getUserType',
        'is_monitor' => 'getIsMonitor',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'is_active' => 'getIsActive',
        'org' => 'getOrg',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'avatar_url' => 'getAvatarUrl'
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
        return self::$openAPIModelName;
    }

    const USER_TYPE_PERSON = 'PERSON';
    const USER_TYPE_BOT = 'BOT';
    const USER_TYPE_EPHEMERAL = 'EPHEMERAL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUserTypeAllowableValues()
    {
        return [
            self::USER_TYPE_PERSON,
            self::USER_TYPE_BOT,
            self::USER_TYPE_EPHEMERAL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['gravatar_hash'] = isset($data['gravatar_hash']) ? $data['gravatar_hash'] : null;
        $this->container['user_type'] = isset($data['user_type']) ? $data['user_type'] : null;
        $this->container['is_monitor'] = isset($data['is_monitor']) ? $data['is_monitor'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['org'] = isset($data['org']) ? $data['org'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tag'] === null) {
            $invalidProperties[] = "'tag' can't be null";
        }
        $allowedValues = $this->getUserTypeAllowableValues();
        if (!is_null($this->container['user_type']) && !in_array($this->container['user_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'user_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['org'] === null) {
            $invalidProperties[] = "'org' can't be null";
        }
        if (!is_null($this->container['avatar_url']) && (mb_strlen($this->container['avatar_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'avatar_url', the character length must be bigger than or equal to 1.";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets gravatar_hash
     *
     * @return string|null
     */
    public function getGravatarHash()
    {
        return $this->container['gravatar_hash'];
    }

    /**
     * Sets gravatar_hash
     *
     * @param string|null $gravatar_hash gravatar_hash
     *
     * @return $this
     */
    public function setGravatarHash($gravatar_hash)
    {
        $this->container['gravatar_hash'] = $gravatar_hash;

        return $this;
    }

    /**
     * Gets user_type
     *
     * @return string|null
     */
    public function getUserType()
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type
     *
     * @param string|null $user_type user_type
     *
     * @return $this
     */
    public function setUserType($user_type)
    {
        $allowedValues = $this->getUserTypeAllowableValues();
        if (!is_null($user_type) && !in_array($user_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'user_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets is_monitor
     *
     * @return bool|null
     */
    public function getIsMonitor()
    {
        return $this->container['is_monitor'];
    }

    /**
     * Sets is_monitor
     *
     * @param bool|null $is_monitor is_monitor
     *
     * @return $this
     */
    public function setIsMonitor($is_monitor)
    {
        $this->container['is_monitor'] = $is_monitor;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {

        if (!is_null($first_name) && (mb_strlen($first_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling UserDirectory., must be bigger than or equal to 1.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {

        if (!is_null($last_name) && (mb_strlen($last_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling UserDirectory., must be bigger than or equal to 1.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active Designates whether this user should be treated as active. Unselect this instead of deleting accounts.
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets org
     *
     * @return string
     */
    public function getOrg()
    {
        return $this->container['org'];
    }

    /**
     * Sets org
     *
     * @param string $org org
     *
     * @return $this
     */
    public function setOrg($org)
    {
        $this->container['org'] = $org;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return \DateTime|null
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime|null $modified modified
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets avatar_url
     *
     * @return string|null
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     *
     * @param string|null $avatar_url Avatar URL
     *
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {

        if (!is_null($avatar_url) && (mb_strlen($avatar_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $avatar_url when calling UserDirectory., must be bigger than or equal to 1.');
        }

        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


