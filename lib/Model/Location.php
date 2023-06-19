<?php
/**
 * Location
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
 * Location Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Location implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Location';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url_key' => 'string',
        'name' => 'string',
        'address' => 'string',
        'is_active' => 'bool',
        'description' => 'string',
        'address_components' => 'string[]',
        'latitude' => 'string',
        'longitude' => 'string',
        'vicinity' => 'string',
        'phone_number' => 'string',
        'test_center_id' => 'string',
        'leading_doctor_name' => 'string',
        'email' => 'string',
        'available_product_type' => 'string[]',
        'street_name' => 'string',
        'house_number' => 'string',
        'postal_code' => 'string',
        'locality' => 'string',
        'state' => 'string',
        'country_code' => 'string',
        'archived' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'uuid' => 'string',
        'tenant' => 'string',
        'printable_description' => 'string',
        'street_and_house_number' => 'string',
        'location_address' => 'string[]',
        'is_archived' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'url_key' => null,
        'name' => null,
        'address' => null,
        'is_active' => null,
        'description' => null,
        'address_components' => null,
        'latitude' => null,
        'longitude' => null,
        'vicinity' => null,
        'phone_number' => null,
        'test_center_id' => null,
        'leading_doctor_name' => null,
        'email' => null,
        'available_product_type' => null,
        'street_name' => null,
        'house_number' => null,
        'postal_code' => null,
        'locality' => null,
        'state' => null,
        'country_code' => null,
        'archived' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'uuid' => null,
        'tenant' => 'iri-reference',
        'printable_description' => null,
        'street_and_house_number' => null,
        'location_address' => null,
        'is_archived' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'url_key' => false,
		'name' => false,
		'address' => false,
		'is_active' => false,
		'description' => true,
		'address_components' => true,
		'latitude' => true,
		'longitude' => true,
		'vicinity' => true,
		'phone_number' => true,
		'test_center_id' => true,
		'leading_doctor_name' => true,
		'email' => true,
		'available_product_type' => false,
		'street_name' => true,
		'house_number' => true,
		'postal_code' => true,
		'locality' => true,
		'state' => true,
		'country_code' => true,
		'archived' => false,
		'created_at' => false,
		'updated_at' => true,
		'uuid' => false,
		'tenant' => true,
		'printable_description' => true,
		'street_and_house_number' => true,
		'location_address' => false,
		'is_archived' => false
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
        'url_key' => 'urlKey',
        'name' => 'name',
        'address' => 'address',
        'is_active' => 'isActive',
        'description' => 'description',
        'address_components' => 'addressComponents',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'vicinity' => 'vicinity',
        'phone_number' => 'phoneNumber',
        'test_center_id' => 'testCenterId',
        'leading_doctor_name' => 'leadingDoctorName',
        'email' => 'email',
        'available_product_type' => 'availableProductType',
        'street_name' => 'streetName',
        'house_number' => 'houseNumber',
        'postal_code' => 'postalCode',
        'locality' => 'locality',
        'state' => 'state',
        'country_code' => 'countryCode',
        'archived' => 'archived',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'uuid' => 'uuid',
        'tenant' => 'tenant',
        'printable_description' => 'printableDescription',
        'street_and_house_number' => 'streetAndHouseNumber',
        'location_address' => 'locationAddress',
        'is_archived' => 'isArchived'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url_key' => 'setUrlKey',
        'name' => 'setName',
        'address' => 'setAddress',
        'is_active' => 'setIsActive',
        'description' => 'setDescription',
        'address_components' => 'setAddressComponents',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'vicinity' => 'setVicinity',
        'phone_number' => 'setPhoneNumber',
        'test_center_id' => 'setTestCenterId',
        'leading_doctor_name' => 'setLeadingDoctorName',
        'email' => 'setEmail',
        'available_product_type' => 'setAvailableProductType',
        'street_name' => 'setStreetName',
        'house_number' => 'setHouseNumber',
        'postal_code' => 'setPostalCode',
        'locality' => 'setLocality',
        'state' => 'setState',
        'country_code' => 'setCountryCode',
        'archived' => 'setArchived',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'uuid' => 'setUuid',
        'tenant' => 'setTenant',
        'printable_description' => 'setPrintableDescription',
        'street_and_house_number' => 'setStreetAndHouseNumber',
        'location_address' => 'setLocationAddress',
        'is_archived' => 'setIsArchived'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url_key' => 'getUrlKey',
        'name' => 'getName',
        'address' => 'getAddress',
        'is_active' => 'getIsActive',
        'description' => 'getDescription',
        'address_components' => 'getAddressComponents',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'vicinity' => 'getVicinity',
        'phone_number' => 'getPhoneNumber',
        'test_center_id' => 'getTestCenterId',
        'leading_doctor_name' => 'getLeadingDoctorName',
        'email' => 'getEmail',
        'available_product_type' => 'getAvailableProductType',
        'street_name' => 'getStreetName',
        'house_number' => 'getHouseNumber',
        'postal_code' => 'getPostalCode',
        'locality' => 'getLocality',
        'state' => 'getState',
        'country_code' => 'getCountryCode',
        'archived' => 'getArchived',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'uuid' => 'getUuid',
        'tenant' => 'getTenant',
        'printable_description' => 'getPrintableDescription',
        'street_and_house_number' => 'getStreetAndHouseNumber',
        'location_address' => 'getLocationAddress',
        'is_archived' => 'getIsArchived'
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
        $this->setIfExists('url_key', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], true);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('address_components', $data ?? [], null);
        $this->setIfExists('latitude', $data ?? [], null);
        $this->setIfExists('longitude', $data ?? [], null);
        $this->setIfExists('vicinity', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('test_center_id', $data ?? [], null);
        $this->setIfExists('leading_doctor_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('available_product_type', $data ?? [], null);
        $this->setIfExists('street_name', $data ?? [], null);
        $this->setIfExists('house_number', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('archived', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('tenant', $data ?? [], null);
        $this->setIfExists('printable_description', $data ?? [], null);
        $this->setIfExists('street_and_house_number', $data ?? [], null);
        $this->setIfExists('location_address', $data ?? [], null);
        $this->setIfExists('is_archived', $data ?? [], null);
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

        if ($this->container['url_key'] === null) {
            $invalidProperties[] = "'url_key' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
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
     * Gets url_key
     *
     * @return string
     */
    public function getUrlKey()
    {
        return $this->container['url_key'];
    }

    /**
     * Sets url_key
     *
     * @param string $url_key url_key
     *
     * @return self
     */
    public function setUrlKey($url_key)
    {
        if (is_null($url_key)) {
            throw new \InvalidArgumentException('non-nullable url_key cannot be null');
        }
        $this->container['url_key'] = $url_key;

        return $this;
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
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

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
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets address_components
     *
     * @return string[]|null
     */
    public function getAddressComponents()
    {
        return $this->container['address_components'];
    }

    /**
     * Sets address_components
     *
     * @param string[]|null $address_components address_components
     *
     * @return self
     */
    public function setAddressComponents($address_components)
    {
        if (is_null($address_components)) {
            array_push($this->openAPINullablesSetToNull, 'address_components');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_components', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_components'] = $address_components;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string|null $latitude latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        if (is_null($latitude)) {
            array_push($this->openAPINullablesSetToNull, 'latitude');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('latitude', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string|null $longitude longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        if (is_null($longitude)) {
            array_push($this->openAPINullablesSetToNull, 'longitude');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('longitude', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets vicinity
     *
     * @return string|null
     */
    public function getVicinity()
    {
        return $this->container['vicinity'];
    }

    /**
     * Sets vicinity
     *
     * @param string|null $vicinity vicinity
     *
     * @return self
     */
    public function setVicinity($vicinity)
    {
        if (is_null($vicinity)) {
            array_push($this->openAPINullablesSetToNull, 'vicinity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vicinity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vicinity'] = $vicinity;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            array_push($this->openAPINullablesSetToNull, 'phone_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets test_center_id
     *
     * @return string|null
     */
    public function getTestCenterId()
    {
        return $this->container['test_center_id'];
    }

    /**
     * Sets test_center_id
     *
     * @param string|null $test_center_id test_center_id
     *
     * @return self
     */
    public function setTestCenterId($test_center_id)
    {
        if (is_null($test_center_id)) {
            array_push($this->openAPINullablesSetToNull, 'test_center_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('test_center_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['test_center_id'] = $test_center_id;

        return $this;
    }

    /**
     * Gets leading_doctor_name
     *
     * @return string|null
     */
    public function getLeadingDoctorName()
    {
        return $this->container['leading_doctor_name'];
    }

    /**
     * Sets leading_doctor_name
     *
     * @param string|null $leading_doctor_name leading_doctor_name
     *
     * @return self
     */
    public function setLeadingDoctorName($leading_doctor_name)
    {
        if (is_null($leading_doctor_name)) {
            array_push($this->openAPINullablesSetToNull, 'leading_doctor_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('leading_doctor_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['leading_doctor_name'] = $leading_doctor_name;

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
     * Gets available_product_type
     *
     * @return string[]|null
     */
    public function getAvailableProductType()
    {
        return $this->container['available_product_type'];
    }

    /**
     * Sets available_product_type
     *
     * @param string[]|null $available_product_type available_product_type
     *
     * @return self
     */
    public function setAvailableProductType($available_product_type)
    {
        if (is_null($available_product_type)) {
            throw new \InvalidArgumentException('non-nullable available_product_type cannot be null');
        }
        $this->container['available_product_type'] = $available_product_type;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string|null $street_name street_name
     *
     * @return self
     */
    public function setStreetName($street_name)
    {
        if (is_null($street_name)) {
            array_push($this->openAPINullablesSetToNull, 'street_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('street_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return string|null
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string|null $house_number house_number
     *
     * @return self
     */
    public function setHouseNumber($house_number)
    {
        if (is_null($house_number)) {
            array_push($this->openAPINullablesSetToNull, 'house_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('house_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            array_push($this->openAPINullablesSetToNull, 'postal_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('postal_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality Locality is also the city.
     *
     * @return self
     */
    public function setLocality($locality)
    {
        if (is_null($locality)) {
            array_push($this->openAPINullablesSetToNull, 'locality');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('locality', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            array_push($this->openAPINullablesSetToNull, 'state');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            array_push($this->openAPINullablesSetToNull, 'country_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived archived
     *
     * @return self
     */
    public function setArchived($archived)
    {
        if (is_null($archived)) {
            throw new \InvalidArgumentException('non-nullable archived cannot be null');
        }
        $this->container['archived'] = $archived;

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
     * Gets printable_description
     *
     * @return string|null
     */
    public function getPrintableDescription()
    {
        return $this->container['printable_description'];
    }

    /**
     * Sets printable_description
     *
     * @param string|null $printable_description printable_description
     *
     * @return self
     */
    public function setPrintableDescription($printable_description)
    {
        if (is_null($printable_description)) {
            array_push($this->openAPINullablesSetToNull, 'printable_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('printable_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['printable_description'] = $printable_description;

        return $this;
    }

    /**
     * Gets street_and_house_number
     *
     * @return string|null
     */
    public function getStreetAndHouseNumber()
    {
        return $this->container['street_and_house_number'];
    }

    /**
     * Sets street_and_house_number
     *
     * @param string|null $street_and_house_number street_and_house_number
     *
     * @return self
     */
    public function setStreetAndHouseNumber($street_and_house_number)
    {
        if (is_null($street_and_house_number)) {
            array_push($this->openAPINullablesSetToNull, 'street_and_house_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('street_and_house_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['street_and_house_number'] = $street_and_house_number;

        return $this;
    }

    /**
     * Gets location_address
     *
     * @return string[]|null
     */
    public function getLocationAddress()
    {
        return $this->container['location_address'];
    }

    /**
     * Sets location_address
     *
     * @param string[]|null $location_address location_address
     *
     * @return self
     */
    public function setLocationAddress($location_address)
    {
        if (is_null($location_address)) {
            throw new \InvalidArgumentException('non-nullable location_address cannot be null');
        }
        $this->container['location_address'] = $location_address;

        return $this;
    }

    /**
     * Gets is_archived
     *
     * @return bool|null
     */
    public function getIsArchived()
    {
        return $this->container['is_archived'];
    }

    /**
     * Sets is_archived
     *
     * @param bool|null $is_archived is_archived
     *
     * @return self
     */
    public function setIsArchived($is_archived)
    {
        if (is_null($is_archived)) {
            throw new \InvalidArgumentException('non-nullable is_archived cannot be null');
        }
        $this->container['is_archived'] = $is_archived;

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


