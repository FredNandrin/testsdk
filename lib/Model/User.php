<?php
/**
 * User
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Probatix API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
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
 * User Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'roles' => 'string[]',
        'password' => 'string',
        'username' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'mfa_enabled' => 'bool',
        'active' => 'bool',
        'deleted' => 'bool',
        'login_token' => 'string',
        'location' => 'string',
        'plain_password' => 'string',
        'mfa_code' => 'string',
        'send_new_appointment_email' => 'bool',
        'send_test_evaluated_email' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'uuid' => 'string',
        'tenant' => 'string',
        'user_identifier' => 'string',
        'salt' => 'string',
        'user_type' => 'string',
        'usable' => 'bool',
        'full_name' => 'string',
        'highest_role' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'roles' => null,
        'password' => null,
        'username' => null,
        'first_name' => null,
        'last_name' => null,
        'email' => null,
        'mfa_enabled' => null,
        'active' => null,
        'deleted' => null,
        'login_token' => null,
        'location' => 'iri-reference',
        'plain_password' => null,
        'mfa_code' => null,
        'send_new_appointment_email' => null,
        'send_test_evaluated_email' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'uuid' => null,
        'tenant' => 'iri-reference',
        'user_identifier' => null,
        'salt' => null,
        'user_type' => null,
        'usable' => null,
        'full_name' => null,
        'highest_role' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'roles' => false,
		'password' => false,
		'username' => false,
		'first_name' => true,
		'last_name' => true,
		'email' => false,
		'mfa_enabled' => false,
		'active' => false,
		'deleted' => false,
		'login_token' => true,
		'location' => true,
		'plain_password' => false,
		'mfa_code' => false,
		'send_new_appointment_email' => false,
		'send_test_evaluated_email' => false,
		'created_at' => false,
		'updated_at' => true,
		'uuid' => false,
		'tenant' => true,
		'user_identifier' => false,
		'salt' => true,
		'user_type' => false,
		'usable' => false,
		'full_name' => false,
		'highest_role' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'roles' => 'roles',
        'password' => 'password',
        'username' => 'username',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'email' => 'email',
        'mfa_enabled' => 'mfaEnabled',
        'active' => 'active',
        'deleted' => 'deleted',
        'login_token' => 'loginToken',
        'location' => 'location',
        'plain_password' => 'plainPassword',
        'mfa_code' => 'mfaCode',
        'send_new_appointment_email' => 'sendNewAppointmentEmail',
        'send_test_evaluated_email' => 'sendTestEvaluatedEmail',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'uuid' => 'uuid',
        'tenant' => 'tenant',
        'user_identifier' => 'userIdentifier',
        'salt' => 'salt',
        'user_type' => 'userType',
        'usable' => 'usable',
        'full_name' => 'fullName',
        'highest_role' => 'highestRole'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'roles' => 'setRoles',
        'password' => 'setPassword',
        'username' => 'setUsername',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'mfa_enabled' => 'setMfaEnabled',
        'active' => 'setActive',
        'deleted' => 'setDeleted',
        'login_token' => 'setLoginToken',
        'location' => 'setLocation',
        'plain_password' => 'setPlainPassword',
        'mfa_code' => 'setMfaCode',
        'send_new_appointment_email' => 'setSendNewAppointmentEmail',
        'send_test_evaluated_email' => 'setSendTestEvaluatedEmail',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'uuid' => 'setUuid',
        'tenant' => 'setTenant',
        'user_identifier' => 'setUserIdentifier',
        'salt' => 'setSalt',
        'user_type' => 'setUserType',
        'usable' => 'setUsable',
        'full_name' => 'setFullName',
        'highest_role' => 'setHighestRole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'roles' => 'getRoles',
        'password' => 'getPassword',
        'username' => 'getUsername',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'mfa_enabled' => 'getMfaEnabled',
        'active' => 'getActive',
        'deleted' => 'getDeleted',
        'login_token' => 'getLoginToken',
        'location' => 'getLocation',
        'plain_password' => 'getPlainPassword',
        'mfa_code' => 'getMfaCode',
        'send_new_appointment_email' => 'getSendNewAppointmentEmail',
        'send_test_evaluated_email' => 'getSendTestEvaluatedEmail',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'uuid' => 'getUuid',
        'tenant' => 'getTenant',
        'user_identifier' => 'getUserIdentifier',
        'salt' => 'getSalt',
        'user_type' => 'getUserType',
        'usable' => 'getUsable',
        'full_name' => 'getFullName',
        'highest_role' => 'getHighestRole'
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
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('mfa_enabled', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], true);
        $this->setIfExists('deleted', $data ?? [], null);
        $this->setIfExists('login_token', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('plain_password', $data ?? [], null);
        $this->setIfExists('mfa_code', $data ?? [], null);
        $this->setIfExists('send_new_appointment_email', $data ?? [], true);
        $this->setIfExists('send_test_evaluated_email', $data ?? [], true);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('tenant', $data ?? [], null);
        $this->setIfExists('user_identifier', $data ?? [], null);
        $this->setIfExists('salt', $data ?? [], null);
        $this->setIfExists('user_type', $data ?? [], null);
        $this->setIfExists('usable', $data ?? [], null);
        $this->setIfExists('full_name', $data ?? [], null);
        $this->setIfExists('highest_role', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
        }
        if ((count($this->container['roles']) < 1)) {
            $invalidProperties[] = "invalid value for 'roles', number of items must be greater than or equal to 1.";
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
     * Gets roles
     *
     * @return string[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string[] $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }


        if ((count($roles) < 1)) {
            throw new \InvalidArgumentException('invalid length for $roles when calling User., number of items must be greater than or equal to 1.');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

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
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            array_push($this->openAPINullablesSetToNull, 'first_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            array_push($this->openAPINullablesSetToNull, 'last_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets mfa_enabled
     *
     * @return bool|null
     */
    public function getMfaEnabled()
    {
        return $this->container['mfa_enabled'];
    }

    /**
     * Sets mfa_enabled
     *
     * @param bool|null $mfa_enabled mfa_enabled
     *
     * @return self
     */
    public function setMfaEnabled($mfa_enabled)
    {
        if (is_null($mfa_enabled)) {
            throw new \InvalidArgumentException('non-nullable mfa_enabled cannot be null');
        }
        $this->container['mfa_enabled'] = $mfa_enabled;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        if (is_null($deleted)) {
            throw new \InvalidArgumentException('non-nullable deleted cannot be null');
        }
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets login_token
     *
     * @return string|null
     */
    public function getLoginToken()
    {
        return $this->container['login_token'];
    }

    /**
     * Sets login_token
     *
     * @param string|null $login_token login_token
     *
     * @return self
     */
    public function setLoginToken($login_token)
    {
        if (is_null($login_token)) {
            array_push($this->openAPINullablesSetToNull, 'login_token');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('login_token', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['login_token'] = $login_token;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            array_push($this->openAPINullablesSetToNull, 'location');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('location', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets plain_password
     *
     * @return string|null
     */
    public function getPlainPassword()
    {
        return $this->container['plain_password'];
    }

    /**
     * Sets plain_password
     *
     * @param string|null $plain_password plain_password
     *
     * @return self
     */
    public function setPlainPassword($plain_password)
    {
        if (is_null($plain_password)) {
            throw new \InvalidArgumentException('non-nullable plain_password cannot be null');
        }
        $this->container['plain_password'] = $plain_password;

        return $this;
    }

    /**
     * Gets mfa_code
     *
     * @return string|null
     */
    public function getMfaCode()
    {
        return $this->container['mfa_code'];
    }

    /**
     * Sets mfa_code
     *
     * @param string|null $mfa_code mfa_code
     *
     * @return self
     */
    public function setMfaCode($mfa_code)
    {
        if (is_null($mfa_code)) {
            throw new \InvalidArgumentException('non-nullable mfa_code cannot be null');
        }
        $this->container['mfa_code'] = $mfa_code;

        return $this;
    }

    /**
     * Gets send_new_appointment_email
     *
     * @return bool|null
     */
    public function getSendNewAppointmentEmail()
    {
        return $this->container['send_new_appointment_email'];
    }

    /**
     * Sets send_new_appointment_email
     *
     * @param bool|null $send_new_appointment_email send_new_appointment_email
     *
     * @return self
     */
    public function setSendNewAppointmentEmail($send_new_appointment_email)
    {
        if (is_null($send_new_appointment_email)) {
            throw new \InvalidArgumentException('non-nullable send_new_appointment_email cannot be null');
        }
        $this->container['send_new_appointment_email'] = $send_new_appointment_email;

        return $this;
    }

    /**
     * Gets send_test_evaluated_email
     *
     * @return bool|null
     */
    public function getSendTestEvaluatedEmail()
    {
        return $this->container['send_test_evaluated_email'];
    }

    /**
     * Sets send_test_evaluated_email
     *
     * @param bool|null $send_test_evaluated_email send_test_evaluated_email
     *
     * @return self
     */
    public function setSendTestEvaluatedEmail($send_test_evaluated_email)
    {
        if (is_null($send_test_evaluated_email)) {
            throw new \InvalidArgumentException('non-nullable send_test_evaluated_email cannot be null');
        }
        $this->container['send_test_evaluated_email'] = $send_test_evaluated_email;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            array_push($this->openAPINullablesSetToNull, 'updated_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updated_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets tenant
     *
     * @return string|null
     */
    public function getTenant()
    {
        return $this->container['tenant'];
    }

    /**
     * Sets tenant
     *
     * @param string|null $tenant tenant
     *
     * @return self
     */
    public function setTenant($tenant)
    {
        if (is_null($tenant)) {
            array_push($this->openAPINullablesSetToNull, 'tenant');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tenant', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tenant'] = $tenant;

        return $this;
    }

    /**
     * Gets user_identifier
     *
     * @return string|null
     */
    public function getUserIdentifier()
    {
        return $this->container['user_identifier'];
    }

    /**
     * Sets user_identifier
     *
     * @param string|null $user_identifier A visual identifier that represents this user.
     *
     * @return self
     */
    public function setUserIdentifier($user_identifier)
    {
        if (is_null($user_identifier)) {
            throw new \InvalidArgumentException('non-nullable user_identifier cannot be null');
        }
        $this->container['user_identifier'] = $user_identifier;

        return $this;
    }

    /**
     * Gets salt
     *
     * @return string|null
     */
    public function getSalt()
    {
        return $this->container['salt'];
    }

    /**
     * Sets salt
     *
     * @param string|null $salt salt
     *
     * @return self
     */
    public function setSalt($salt)
    {
        if (is_null($salt)) {
            array_push($this->openAPINullablesSetToNull, 'salt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('salt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['salt'] = $salt;

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
     * @return self
     */
    public function setUserType($user_type)
    {
        if (is_null($user_type)) {
            throw new \InvalidArgumentException('non-nullable user_type cannot be null');
        }
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets usable
     *
     * @return bool|null
     */
    public function getUsable()
    {
        return $this->container['usable'];
    }

    /**
     * Sets usable
     *
     * @param bool|null $usable usable
     *
     * @return self
     */
    public function setUsable($usable)
    {
        if (is_null($usable)) {
            throw new \InvalidArgumentException('non-nullable usable cannot be null');
        }
        $this->container['usable'] = $usable;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string|null $full_name full_name
     *
     * @return self
     */
    public function setFullName($full_name)
    {
        if (is_null($full_name)) {
            throw new \InvalidArgumentException('non-nullable full_name cannot be null');
        }
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets highest_role
     *
     * @return string|null
     */
    public function getHighestRole()
    {
        return $this->container['highest_role'];
    }

    /**
     * Sets highest_role
     *
     * @param string|null $highest_role highest_role
     *
     * @return self
     */
    public function setHighestRole($highest_role)
    {
        if (is_null($highest_role)) {
            throw new \InvalidArgumentException('non-nullable highest_role cannot be null');
        }
        $this->container['highest_role'] = $highest_role;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


