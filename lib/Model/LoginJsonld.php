<?php
/**
 * LoginJsonld
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
 * LoginJsonld Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoginJsonld implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'login.jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_context' => '\OpenAPI\Client\Model\AvailabilitiesAvailableDayDtoJsonldContext',
        'at_id' => 'string',
        'at_type' => 'string',
        'patient_event_uuid' => 'mixed',
        'patient_event_password' => 'mixed',
        'birth_date' => 'mixed'
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
        'patient_event_uuid' => 'uuid',
        'patient_event_password' => null,
        'birth_date' => 'date'
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
		'patient_event_uuid' => true,
		'patient_event_password' => true,
		'birth_date' => true
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
        'patient_event_uuid' => 'patientEventUuid',
        'patient_event_password' => 'patientEventPassword',
        'birth_date' => 'birthDate'
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
        'patient_event_uuid' => 'setPatientEventUuid',
        'patient_event_password' => 'setPatientEventPassword',
        'birth_date' => 'setBirthDate'
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
        'patient_event_uuid' => 'getPatientEventUuid',
        'patient_event_password' => 'getPatientEventPassword',
        'birth_date' => 'getBirthDate'
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
        $this->setIfExists('patient_event_uuid', $data ?? [], null);
        $this->setIfExists('patient_event_password', $data ?? [], null);
        $this->setIfExists('birth_date', $data ?? [], null);
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
     * Gets patient_event_uuid
     *
     * @return mixed|null
     */
    public function getPatientEventUuid()
    {
        return $this->container['patient_event_uuid'];
    }

    /**
     * Sets patient_event_uuid
     *
     * @param mixed|null $patient_event_uuid patient_event_uuid
     *
     * @return self
     */
    public function setPatientEventUuid($patient_event_uuid)
    {
        if (is_null($patient_event_uuid)) {
            array_push($this->openAPINullablesSetToNull, 'patient_event_uuid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('patient_event_uuid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['patient_event_uuid'] = $patient_event_uuid;

        return $this;
    }

    /**
     * Gets patient_event_password
     *
     * @return mixed|null
     */
    public function getPatientEventPassword()
    {
        return $this->container['patient_event_password'];
    }

    /**
     * Sets patient_event_password
     *
     * @param mixed|null $patient_event_password patient_event_password
     *
     * @return self
     */
    public function setPatientEventPassword($patient_event_password)
    {
        if (is_null($patient_event_password)) {
            array_push($this->openAPINullablesSetToNull, 'patient_event_password');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('patient_event_password', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['patient_event_password'] = $patient_event_password;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return mixed|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param mixed|null $birth_date birth_date
     *
     * @return self
     */
    public function setBirthDate($birth_date)
    {
        if (is_null($birth_date)) {
            array_push($this->openAPINullablesSetToNull, 'birth_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('birth_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['birth_date'] = $birth_date;

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


