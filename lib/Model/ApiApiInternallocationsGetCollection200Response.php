<?php
/**
 * ApiApiInternallocationsGetCollection200Response
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
 * ApiApiInternallocationsGetCollection200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiApiInternallocationsGetCollection200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'api_api_internallocations_get_collection_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hydramember' => '\OpenAPI\Client\Model\LocationJsonld[]',
        'hydratotal_items' => 'int',
        'hydraview' => '\OpenAPI\Client\Model\ApiApiInternalcustomPrintingWorkflowsGetCollection200ResponseHydraView',
        'hydrasearch' => '\OpenAPI\Client\Model\ApiApiInternalcustomPrintingWorkflowsGetCollection200ResponseHydraSearch'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hydramember' => null,
        'hydratotal_items' => null,
        'hydraview' => null,
        'hydrasearch' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'hydramember' => false,
		'hydratotal_items' => false,
		'hydraview' => false,
		'hydrasearch' => false
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
        'hydramember' => 'hydra:member',
        'hydratotal_items' => 'hydra:totalItems',
        'hydraview' => 'hydra:view',
        'hydrasearch' => 'hydra:search'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hydramember' => 'setHydramember',
        'hydratotal_items' => 'setHydratotalItems',
        'hydraview' => 'setHydraview',
        'hydrasearch' => 'setHydrasearch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hydramember' => 'getHydramember',
        'hydratotal_items' => 'getHydratotalItems',
        'hydraview' => 'getHydraview',
        'hydrasearch' => 'getHydrasearch'
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
        $this->setIfExists('hydramember', $data ?? [], null);
        $this->setIfExists('hydratotal_items', $data ?? [], null);
        $this->setIfExists('hydraview', $data ?? [], null);
        $this->setIfExists('hydrasearch', $data ?? [], null);
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

        if ($this->container['hydramember'] === null) {
            $invalidProperties[] = "'hydramember' can't be null";
        }
        if (!is_null($this->container['hydratotal_items']) && ($this->container['hydratotal_items'] < 0)) {
            $invalidProperties[] = "invalid value for 'hydratotal_items', must be bigger than or equal to 0.";
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
     * Gets hydramember
     *
     * @return \OpenAPI\Client\Model\LocationJsonld[]
     */
    public function getHydramember()
    {
        return $this->container['hydramember'];
    }

    /**
     * Sets hydramember
     *
     * @param \OpenAPI\Client\Model\LocationJsonld[] $hydramember hydramember
     *
     * @return self
     */
    public function setHydramember($hydramember)
    {
        if (is_null($hydramember)) {
            throw new \InvalidArgumentException('non-nullable hydramember cannot be null');
        }
        $this->container['hydramember'] = $hydramember;

        return $this;
    }

    /**
     * Gets hydratotal_items
     *
     * @return int|null
     */
    public function getHydratotalItems()
    {
        return $this->container['hydratotal_items'];
    }

    /**
     * Sets hydratotal_items
     *
     * @param int|null $hydratotal_items hydratotal_items
     *
     * @return self
     */
    public function setHydratotalItems($hydratotal_items)
    {
        if (is_null($hydratotal_items)) {
            throw new \InvalidArgumentException('non-nullable hydratotal_items cannot be null');
        }

        if (($hydratotal_items < 0)) {
            throw new \InvalidArgumentException('invalid value for $hydratotal_items when calling ApiApiInternallocationsGetCollection200Response., must be bigger than or equal to 0.');
        }

        $this->container['hydratotal_items'] = $hydratotal_items;

        return $this;
    }

    /**
     * Gets hydraview
     *
     * @return \OpenAPI\Client\Model\ApiApiInternalcustomPrintingWorkflowsGetCollection200ResponseHydraView|null
     */
    public function getHydraview()
    {
        return $this->container['hydraview'];
    }

    /**
     * Sets hydraview
     *
     * @param \OpenAPI\Client\Model\ApiApiInternalcustomPrintingWorkflowsGetCollection200ResponseHydraView|null $hydraview hydraview
     *
     * @return self
     */
    public function setHydraview($hydraview)
    {
        if (is_null($hydraview)) {
            throw new \InvalidArgumentException('non-nullable hydraview cannot be null');
        }
        $this->container['hydraview'] = $hydraview;

        return $this;
    }

    /**
     * Gets hydrasearch
     *
     * @return \OpenAPI\Client\Model\ApiApiInternalcustomPrintingWorkflowsGetCollection200ResponseHydraSearch|null
     */
    public function getHydrasearch()
    {
        return $this->container['hydrasearch'];
    }

    /**
     * Sets hydrasearch
     *
     * @param \OpenAPI\Client\Model\ApiApiInternalcustomPrintingWorkflowsGetCollection200ResponseHydraSearch|null $hydrasearch hydrasearch
     *
     * @return self
     */
    public function setHydrasearch($hydrasearch)
    {
        if (is_null($hydrasearch)) {
            throw new \InvalidArgumentException('non-nullable hydrasearch cannot be null');
        }
        $this->container['hydrasearch'] = $hydrasearch;

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


