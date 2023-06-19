<?php
/**
 * CustomerJsonld
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
 * CustomerJsonld Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerJsonld implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Customer.jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_context' => '\OpenAPI\Client\Model\AvailabilitiesAvailableDayDtoJsonldContext',
        'at_id' => 'string',
        'at_type' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'company' => 'string',
        'billing_address_street' => 'string',
        'billing_address_zip_code' => 'string',
        'billing_address_city' => 'string',
        'billing_address_country' => 'string',
        'orders' => 'string[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'uuid' => 'string',
        'hash_signature' => 'string',
        'tenant' => 'string',
        'full_name' => 'string',
        'billing_address' => 'string',
        'computed_hash_signature' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'at_context' => null,
        'at_id' => null,
        'at_type' => null,
        'first_name' => null,
        'last_name' => null,
        'email' => null,
        'company' => null,
        'billing_address_street' => null,
        'billing_address_zip_code' => null,
        'billing_address_city' => null,
        'billing_address_country' => null,
        'orders' => 'iri-reference',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'uuid' => null,
        'hash_signature' => null,
        'tenant' => 'iri-reference',
        'full_name' => null,
        'billing_address' => null,
        'computed_hash_signature' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'at_context' => false,
		'at_id' => false,
		'at_type' => false,
		'first_name' => false,
		'last_name' => false,
		'email' => true,
		'company' => true,
		'billing_address_street' => true,
		'billing_address_zip_code' => true,
		'billing_address_city' => true,
		'billing_address_country' => true,
		'orders' => false,
		'created_at' => false,
		'updated_at' => true,
		'uuid' => false,
		'hash_signature' => true,
		'tenant' => true,
		'full_name' => false,
		'billing_address' => false,
		'computed_hash_signature' => false
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
        'at_context' => '@context',
        'at_id' => '@id',
        'at_type' => '@type',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'email' => 'email',
        'company' => 'company',
        'billing_address_street' => 'billingAddressStreet',
        'billing_address_zip_code' => 'billingAddressZipCode',
        'billing_address_city' => 'billingAddressCity',
        'billing_address_country' => 'billingAddressCountry',
        'orders' => 'orders',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'uuid' => 'uuid',
        'hash_signature' => 'hashSignature',
        'tenant' => 'tenant',
        'full_name' => 'fullName',
        'billing_address' => 'billingAddress',
        'computed_hash_signature' => 'computedHashSignature'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'at_context' => 'setAtContext',
        'at_id' => 'setAtId',
        'at_type' => 'setAtType',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'company' => 'setCompany',
        'billing_address_street' => 'setBillingAddressStreet',
        'billing_address_zip_code' => 'setBillingAddressZipCode',
        'billing_address_city' => 'setBillingAddressCity',
        'billing_address_country' => 'setBillingAddressCountry',
        'orders' => 'setOrders',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'uuid' => 'setUuid',
        'hash_signature' => 'setHashSignature',
        'tenant' => 'setTenant',
        'full_name' => 'setFullName',
        'billing_address' => 'setBillingAddress',
        'computed_hash_signature' => 'setComputedHashSignature'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'at_context' => 'getAtContext',
        'at_id' => 'getAtId',
        'at_type' => 'getAtType',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'company' => 'getCompany',
        'billing_address_street' => 'getBillingAddressStreet',
        'billing_address_zip_code' => 'getBillingAddressZipCode',
        'billing_address_city' => 'getBillingAddressCity',
        'billing_address_country' => 'getBillingAddressCountry',
        'orders' => 'getOrders',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'uuid' => 'getUuid',
        'hash_signature' => 'getHashSignature',
        'tenant' => 'getTenant',
        'full_name' => 'getFullName',
        'billing_address' => 'getBillingAddress',
        'computed_hash_signature' => 'getComputedHashSignature'
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
        $this->setIfExists('at_context', $data ?? [], null);
        $this->setIfExists('at_id', $data ?? [], null);
        $this->setIfExists('at_type', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('billing_address_street', $data ?? [], null);
        $this->setIfExists('billing_address_zip_code', $data ?? [], null);
        $this->setIfExists('billing_address_city', $data ?? [], null);
        $this->setIfExists('billing_address_country', $data ?? [], null);
        $this->setIfExists('orders', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('hash_signature', $data ?? [], null);
        $this->setIfExists('tenant', $data ?? [], null);
        $this->setIfExists('full_name', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('computed_hash_signature', $data ?? [], null);
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
     * Gets at_context
     *
     * @return \OpenAPI\Client\Model\AvailabilitiesAvailableDayDtoJsonldContext|null
     */
    public function getAtContext()
    {
        return $this->container['at_context'];
    }

    /**
     * Sets at_context
     *
     * @param \OpenAPI\Client\Model\AvailabilitiesAvailableDayDtoJsonldContext|null $at_context at_context
     *
     * @return self
     */
    public function setAtContext($at_context)
    {
        if (is_null($at_context)) {
            throw new \InvalidArgumentException('non-nullable at_context cannot be null');
        }
        $this->container['at_context'] = $at_context;

        return $this;
    }

    /**
     * Gets at_id
     *
     * @return string|null
     */
    public function getAtId()
    {
        return $this->container['at_id'];
    }

    /**
     * Sets at_id
     *
     * @param string|null $at_id at_id
     *
     * @return self
     */
    public function setAtId($at_id)
    {
        if (is_null($at_id)) {
            throw new \InvalidArgumentException('non-nullable at_id cannot be null');
        }
        $this->container['at_id'] = $at_id;

        return $this;
    }

    /**
     * Gets at_type
     *
     * @return string|null
     */
    public function getAtType()
    {
        return $this->container['at_type'];
    }

    /**
     * Sets at_type
     *
     * @param string|null $at_type at_type
     *
     * @return self
     */
    public function setAtType($at_type)
    {
        if (is_null($at_type)) {
            throw new \InvalidArgumentException('non-nullable at_type cannot be null');
        }
        $this->container['at_type'] = $at_type;

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
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
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
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
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
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            array_push($this->openAPINullablesSetToNull, 'company');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets billing_address_street
     *
     * @return string|null
     */
    public function getBillingAddressStreet()
    {
        return $this->container['billing_address_street'];
    }

    /**
     * Sets billing_address_street
     *
     * @param string|null $billing_address_street billing_address_street
     *
     * @return self
     */
    public function setBillingAddressStreet($billing_address_street)
    {
        if (is_null($billing_address_street)) {
            array_push($this->openAPINullablesSetToNull, 'billing_address_street');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_address_street', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_address_street'] = $billing_address_street;

        return $this;
    }

    /**
     * Gets billing_address_zip_code
     *
     * @return string|null
     */
    public function getBillingAddressZipCode()
    {
        return $this->container['billing_address_zip_code'];
    }

    /**
     * Sets billing_address_zip_code
     *
     * @param string|null $billing_address_zip_code billing_address_zip_code
     *
     * @return self
     */
    public function setBillingAddressZipCode($billing_address_zip_code)
    {
        if (is_null($billing_address_zip_code)) {
            array_push($this->openAPINullablesSetToNull, 'billing_address_zip_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_address_zip_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_address_zip_code'] = $billing_address_zip_code;

        return $this;
    }

    /**
     * Gets billing_address_city
     *
     * @return string|null
     */
    public function getBillingAddressCity()
    {
        return $this->container['billing_address_city'];
    }

    /**
     * Sets billing_address_city
     *
     * @param string|null $billing_address_city billing_address_city
     *
     * @return self
     */
    public function setBillingAddressCity($billing_address_city)
    {
        if (is_null($billing_address_city)) {
            array_push($this->openAPINullablesSetToNull, 'billing_address_city');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_address_city', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_address_city'] = $billing_address_city;

        return $this;
    }

    /**
     * Gets billing_address_country
     *
     * @return string|null
     */
    public function getBillingAddressCountry()
    {
        return $this->container['billing_address_country'];
    }

    /**
     * Sets billing_address_country
     *
     * @param string|null $billing_address_country billing_address_country
     *
     * @return self
     */
    public function setBillingAddressCountry($billing_address_country)
    {
        if (is_null($billing_address_country)) {
            array_push($this->openAPINullablesSetToNull, 'billing_address_country');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_address_country', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_address_country'] = $billing_address_country;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return string[]|null
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param string[]|null $orders orders
     *
     * @return self
     */
    public function setOrders($orders)
    {
        if (is_null($orders)) {
            throw new \InvalidArgumentException('non-nullable orders cannot be null');
        }
        $this->container['orders'] = $orders;

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
     * Gets hash_signature
     *
     * @return string|null
     */
    public function getHashSignature()
    {
        return $this->container['hash_signature'];
    }

    /**
     * Sets hash_signature
     *
     * @param string|null $hash_signature Has of relevant values to uniquely identify the Patient/Customer in order to avoid complicated indices.
     *
     * @return self
     */
    public function setHashSignature($hash_signature)
    {
        if (is_null($hash_signature)) {
            array_push($this->openAPINullablesSetToNull, 'hash_signature');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hash_signature', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hash_signature'] = $hash_signature;

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
     * Gets billing_address
     *
     * @return string|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param string|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets computed_hash_signature
     *
     * @return string|null
     */
    public function getComputedHashSignature()
    {
        return $this->container['computed_hash_signature'];
    }

    /**
     * Sets computed_hash_signature
     *
     * @param string|null $computed_hash_signature computed_hash_signature
     *
     * @return self
     */
    public function setComputedHashSignature($computed_hash_signature)
    {
        if (is_null($computed_hash_signature)) {
            throw new \InvalidArgumentException('non-nullable computed_hash_signature cannot be null');
        }
        $this->container['computed_hash_signature'] = $computed_hash_signature;

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


