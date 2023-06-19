<?php
/**
 * ProductProductOutputDtoProductRead
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
 * ProductProductOutputDtoProductRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductProductOutputDtoProductRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Product.ProductOutputDto-product.read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'name' => 'string',
        'test_type' => 'string',
        'is_default' => 'bool',
        'description' => 'string',
        'single_gross_amount' => 'int',
        'url_key' => 'string',
        'is_personal_id_required' => 'bool',
        'health_insurance_policy_number_required' => 'bool',
        'health_insurance_company_number_required' => 'bool',
        'is_show_product_on_frontend' => 'bool',
        'max_bookings_per_order' => 'int',
        'minimum_patient_age' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uuid' => 'uuid',
        'name' => null,
        'test_type' => null,
        'is_default' => null,
        'description' => null,
        'single_gross_amount' => null,
        'url_key' => null,
        'is_personal_id_required' => null,
        'health_insurance_policy_number_required' => null,
        'health_insurance_company_number_required' => null,
        'is_show_product_on_frontend' => null,
        'max_bookings_per_order' => null,
        'minimum_patient_age' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'uuid' => true,
		'name' => true,
		'test_type' => true,
		'is_default' => false,
		'description' => true,
		'single_gross_amount' => true,
		'url_key' => true,
		'is_personal_id_required' => false,
		'health_insurance_policy_number_required' => false,
		'health_insurance_company_number_required' => false,
		'is_show_product_on_frontend' => false,
		'max_bookings_per_order' => true,
		'minimum_patient_age' => true
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
        'uuid' => 'uuid',
        'name' => 'name',
        'test_type' => 'testType',
        'is_default' => 'isDefault',
        'description' => 'description',
        'single_gross_amount' => 'singleGrossAmount',
        'url_key' => 'urlKey',
        'is_personal_id_required' => 'isPersonalIdRequired',
        'health_insurance_policy_number_required' => 'healthInsurancePolicyNumberRequired',
        'health_insurance_company_number_required' => 'healthInsuranceCompanyNumberRequired',
        'is_show_product_on_frontend' => 'isShowProductOnFrontend',
        'max_bookings_per_order' => 'maxBookingsPerOrder',
        'minimum_patient_age' => 'minimumPatientAge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'name' => 'setName',
        'test_type' => 'setTestType',
        'is_default' => 'setIsDefault',
        'description' => 'setDescription',
        'single_gross_amount' => 'setSingleGrossAmount',
        'url_key' => 'setUrlKey',
        'is_personal_id_required' => 'setIsPersonalIdRequired',
        'health_insurance_policy_number_required' => 'setHealthInsurancePolicyNumberRequired',
        'health_insurance_company_number_required' => 'setHealthInsuranceCompanyNumberRequired',
        'is_show_product_on_frontend' => 'setIsShowProductOnFrontend',
        'max_bookings_per_order' => 'setMaxBookingsPerOrder',
        'minimum_patient_age' => 'setMinimumPatientAge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'name' => 'getName',
        'test_type' => 'getTestType',
        'is_default' => 'getIsDefault',
        'description' => 'getDescription',
        'single_gross_amount' => 'getSingleGrossAmount',
        'url_key' => 'getUrlKey',
        'is_personal_id_required' => 'getIsPersonalIdRequired',
        'health_insurance_policy_number_required' => 'getHealthInsurancePolicyNumberRequired',
        'health_insurance_company_number_required' => 'getHealthInsuranceCompanyNumberRequired',
        'is_show_product_on_frontend' => 'getIsShowProductOnFrontend',
        'max_bookings_per_order' => 'getMaxBookingsPerOrder',
        'minimum_patient_age' => 'getMinimumPatientAge'
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
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('test_type', $data ?? [], null);
        $this->setIfExists('is_default', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('single_gross_amount', $data ?? [], null);
        $this->setIfExists('url_key', $data ?? [], null);
        $this->setIfExists('is_personal_id_required', $data ?? [], null);
        $this->setIfExists('health_insurance_policy_number_required', $data ?? [], null);
        $this->setIfExists('health_insurance_company_number_required', $data ?? [], null);
        $this->setIfExists('is_show_product_on_frontend', $data ?? [], true);
        $this->setIfExists('max_bookings_per_order', $data ?? [], null);
        $this->setIfExists('minimum_patient_age', $data ?? [], null);
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
            array_push($this->openAPINullablesSetToNull, 'uuid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uuid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets test_type
     *
     * @return string|null
     */
    public function getTestType()
    {
        return $this->container['test_type'];
    }

    /**
     * Sets test_type
     *
     * @param string|null $test_type test_type
     *
     * @return self
     */
    public function setTestType($test_type)
    {
        if (is_null($test_type)) {
            array_push($this->openAPINullablesSetToNull, 'test_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('test_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['test_type'] = $test_type;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool|null $is_default is_default
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {
        if (is_null($is_default)) {
            throw new \InvalidArgumentException('non-nullable is_default cannot be null');
        }
        $this->container['is_default'] = $is_default;

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
     * Gets single_gross_amount
     *
     * @return int|null
     */
    public function getSingleGrossAmount()
    {
        return $this->container['single_gross_amount'];
    }

    /**
     * Sets single_gross_amount
     *
     * @param int|null $single_gross_amount single_gross_amount
     *
     * @return self
     */
    public function setSingleGrossAmount($single_gross_amount)
    {
        if (is_null($single_gross_amount)) {
            array_push($this->openAPINullablesSetToNull, 'single_gross_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('single_gross_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['single_gross_amount'] = $single_gross_amount;

        return $this;
    }

    /**
     * Gets url_key
     *
     * @return string|null
     */
    public function getUrlKey()
    {
        return $this->container['url_key'];
    }

    /**
     * Sets url_key
     *
     * @param string|null $url_key url_key
     *
     * @return self
     */
    public function setUrlKey($url_key)
    {
        if (is_null($url_key)) {
            array_push($this->openAPINullablesSetToNull, 'url_key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url_key'] = $url_key;

        return $this;
    }

    /**
     * Gets is_personal_id_required
     *
     * @return bool|null
     */
    public function getIsPersonalIdRequired()
    {
        return $this->container['is_personal_id_required'];
    }

    /**
     * Sets is_personal_id_required
     *
     * @param bool|null $is_personal_id_required is_personal_id_required
     *
     * @return self
     */
    public function setIsPersonalIdRequired($is_personal_id_required)
    {
        if (is_null($is_personal_id_required)) {
            throw new \InvalidArgumentException('non-nullable is_personal_id_required cannot be null');
        }
        $this->container['is_personal_id_required'] = $is_personal_id_required;

        return $this;
    }

    /**
     * Gets health_insurance_policy_number_required
     *
     * @return bool|null
     */
    public function getHealthInsurancePolicyNumberRequired()
    {
        return $this->container['health_insurance_policy_number_required'];
    }

    /**
     * Sets health_insurance_policy_number_required
     *
     * @param bool|null $health_insurance_policy_number_required health_insurance_policy_number_required
     *
     * @return self
     */
    public function setHealthInsurancePolicyNumberRequired($health_insurance_policy_number_required)
    {
        if (is_null($health_insurance_policy_number_required)) {
            throw new \InvalidArgumentException('non-nullable health_insurance_policy_number_required cannot be null');
        }
        $this->container['health_insurance_policy_number_required'] = $health_insurance_policy_number_required;

        return $this;
    }

    /**
     * Gets health_insurance_company_number_required
     *
     * @return bool|null
     */
    public function getHealthInsuranceCompanyNumberRequired()
    {
        return $this->container['health_insurance_company_number_required'];
    }

    /**
     * Sets health_insurance_company_number_required
     *
     * @param bool|null $health_insurance_company_number_required health_insurance_company_number_required
     *
     * @return self
     */
    public function setHealthInsuranceCompanyNumberRequired($health_insurance_company_number_required)
    {
        if (is_null($health_insurance_company_number_required)) {
            throw new \InvalidArgumentException('non-nullable health_insurance_company_number_required cannot be null');
        }
        $this->container['health_insurance_company_number_required'] = $health_insurance_company_number_required;

        return $this;
    }

    /**
     * Gets is_show_product_on_frontend
     *
     * @return bool|null
     */
    public function getIsShowProductOnFrontend()
    {
        return $this->container['is_show_product_on_frontend'];
    }

    /**
     * Sets is_show_product_on_frontend
     *
     * @param bool|null $is_show_product_on_frontend is_show_product_on_frontend
     *
     * @return self
     */
    public function setIsShowProductOnFrontend($is_show_product_on_frontend)
    {
        if (is_null($is_show_product_on_frontend)) {
            throw new \InvalidArgumentException('non-nullable is_show_product_on_frontend cannot be null');
        }
        $this->container['is_show_product_on_frontend'] = $is_show_product_on_frontend;

        return $this;
    }

    /**
     * Gets max_bookings_per_order
     *
     * @return int|null
     */
    public function getMaxBookingsPerOrder()
    {
        return $this->container['max_bookings_per_order'];
    }

    /**
     * Sets max_bookings_per_order
     *
     * @param int|null $max_bookings_per_order max_bookings_per_order
     *
     * @return self
     */
    public function setMaxBookingsPerOrder($max_bookings_per_order)
    {
        if (is_null($max_bookings_per_order)) {
            array_push($this->openAPINullablesSetToNull, 'max_bookings_per_order');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_bookings_per_order', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_bookings_per_order'] = $max_bookings_per_order;

        return $this;
    }

    /**
     * Gets minimum_patient_age
     *
     * @return int|null
     */
    public function getMinimumPatientAge()
    {
        return $this->container['minimum_patient_age'];
    }

    /**
     * Sets minimum_patient_age
     *
     * @param int|null $minimum_patient_age minimum_patient_age
     *
     * @return self
     */
    public function setMinimumPatientAge($minimum_patient_age)
    {
        if (is_null($minimum_patient_age)) {
            array_push($this->openAPINullablesSetToNull, 'minimum_patient_age');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('minimum_patient_age', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['minimum_patient_age'] = $minimum_patient_age;

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


