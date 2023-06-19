<?php
/**
 * OrderVoucherJsonld
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
 * OrderVoucherJsonld Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderVoucherJsonld implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderVoucher.jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'at_context' => '\OpenAPI\Client\Model\AvailabilitiesAvailableDayDtoJsonldContext',
        'at_id' => 'string',
        'at_type' => 'string',
        'voucher' => 'string',
        'value' => 'int',
        'voucher_code' => 'string',
        'voucher_type' => 'string',
        'voucher_comment' => 'string',
        'active' => 'bool',
        'uuid' => 'string',
        'tenant' => 'string',
        'percentage_type' => 'bool',
        'amount_type' => 'bool',
        'total_gross_amount' => 'int',
        'total_net_amount' => 'int',
        'tax_percentage' => 'int',
        'total_vat_amount' => 'int'
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
        'voucher' => 'iri-reference',
        'value' => null,
        'voucher_code' => null,
        'voucher_type' => null,
        'voucher_comment' => null,
        'active' => null,
        'uuid' => null,
        'tenant' => 'iri-reference',
        'percentage_type' => null,
        'amount_type' => null,
        'total_gross_amount' => null,
        'total_net_amount' => null,
        'tax_percentage' => null,
        'total_vat_amount' => null
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
		'voucher' => true,
		'value' => true,
		'voucher_code' => true,
		'voucher_type' => true,
		'voucher_comment' => true,
		'active' => false,
		'uuid' => false,
		'tenant' => true,
		'percentage_type' => false,
		'amount_type' => false,
		'total_gross_amount' => true,
		'total_net_amount' => true,
		'tax_percentage' => false,
		'total_vat_amount' => true
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
        'voucher' => 'voucher',
        'value' => 'value',
        'voucher_code' => 'voucherCode',
        'voucher_type' => 'voucherType',
        'voucher_comment' => 'voucherComment',
        'active' => 'active',
        'uuid' => 'uuid',
        'tenant' => 'tenant',
        'percentage_type' => 'percentageType',
        'amount_type' => 'amountType',
        'total_gross_amount' => 'totalGrossAmount',
        'total_net_amount' => 'totalNetAmount',
        'tax_percentage' => 'taxPercentage',
        'total_vat_amount' => 'totalVatAmount'
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
        'voucher' => 'setVoucher',
        'value' => 'setValue',
        'voucher_code' => 'setVoucherCode',
        'voucher_type' => 'setVoucherType',
        'voucher_comment' => 'setVoucherComment',
        'active' => 'setActive',
        'uuid' => 'setUuid',
        'tenant' => 'setTenant',
        'percentage_type' => 'setPercentageType',
        'amount_type' => 'setAmountType',
        'total_gross_amount' => 'setTotalGrossAmount',
        'total_net_amount' => 'setTotalNetAmount',
        'tax_percentage' => 'setTaxPercentage',
        'total_vat_amount' => 'setTotalVatAmount'
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
        'voucher' => 'getVoucher',
        'value' => 'getValue',
        'voucher_code' => 'getVoucherCode',
        'voucher_type' => 'getVoucherType',
        'voucher_comment' => 'getVoucherComment',
        'active' => 'getActive',
        'uuid' => 'getUuid',
        'tenant' => 'getTenant',
        'percentage_type' => 'getPercentageType',
        'amount_type' => 'getAmountType',
        'total_gross_amount' => 'getTotalGrossAmount',
        'total_net_amount' => 'getTotalNetAmount',
        'tax_percentage' => 'getTaxPercentage',
        'total_vat_amount' => 'getTotalVatAmount'
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
        $this->setIfExists('voucher', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('voucher_code', $data ?? [], null);
        $this->setIfExists('voucher_type', $data ?? [], null);
        $this->setIfExists('voucher_comment', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('tenant', $data ?? [], null);
        $this->setIfExists('percentage_type', $data ?? [], null);
        $this->setIfExists('amount_type', $data ?? [], null);
        $this->setIfExists('total_gross_amount', $data ?? [], null);
        $this->setIfExists('total_net_amount', $data ?? [], null);
        $this->setIfExists('tax_percentage', $data ?? [], null);
        $this->setIfExists('total_vat_amount', $data ?? [], null);
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
     * Gets voucher
     *
     * @return string|null
     */
    public function getVoucher()
    {
        return $this->container['voucher'];
    }

    /**
     * Sets voucher
     *
     * @param string|null $voucher voucher
     *
     * @return self
     */
    public function setVoucher($voucher)
    {
        if (is_null($voucher)) {
            array_push($this->openAPINullablesSetToNull, 'voucher');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('voucher', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['voucher'] = $voucher;

        return $this;
    }

    /**
     * Gets value
     *
     * @return int|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param int|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            array_push($this->openAPINullablesSetToNull, 'value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets voucher_code
     *
     * @return string|null
     */
    public function getVoucherCode()
    {
        return $this->container['voucher_code'];
    }

    /**
     * Sets voucher_code
     *
     * @param string|null $voucher_code voucher_code
     *
     * @return self
     */
    public function setVoucherCode($voucher_code)
    {
        if (is_null($voucher_code)) {
            array_push($this->openAPINullablesSetToNull, 'voucher_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('voucher_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['voucher_code'] = $voucher_code;

        return $this;
    }

    /**
     * Gets voucher_type
     *
     * @return string|null
     */
    public function getVoucherType()
    {
        return $this->container['voucher_type'];
    }

    /**
     * Sets voucher_type
     *
     * @param string|null $voucher_type voucher_type
     *
     * @return self
     */
    public function setVoucherType($voucher_type)
    {
        if (is_null($voucher_type)) {
            array_push($this->openAPINullablesSetToNull, 'voucher_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('voucher_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['voucher_type'] = $voucher_type;

        return $this;
    }

    /**
     * Gets voucher_comment
     *
     * @return string|null
     */
    public function getVoucherComment()
    {
        return $this->container['voucher_comment'];
    }

    /**
     * Sets voucher_comment
     *
     * @param string|null $voucher_comment voucher_comment
     *
     * @return self
     */
    public function setVoucherComment($voucher_comment)
    {
        if (is_null($voucher_comment)) {
            array_push($this->openAPINullablesSetToNull, 'voucher_comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('voucher_comment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['voucher_comment'] = $voucher_comment;

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
     * Gets percentage_type
     *
     * @return bool|null
     */
    public function getPercentageType()
    {
        return $this->container['percentage_type'];
    }

    /**
     * Sets percentage_type
     *
     * @param bool|null $percentage_type percentage_type
     *
     * @return self
     */
    public function setPercentageType($percentage_type)
    {
        if (is_null($percentage_type)) {
            throw new \InvalidArgumentException('non-nullable percentage_type cannot be null');
        }
        $this->container['percentage_type'] = $percentage_type;

        return $this;
    }

    /**
     * Gets amount_type
     *
     * @return bool|null
     */
    public function getAmountType()
    {
        return $this->container['amount_type'];
    }

    /**
     * Sets amount_type
     *
     * @param bool|null $amount_type amount_type
     *
     * @return self
     */
    public function setAmountType($amount_type)
    {
        if (is_null($amount_type)) {
            throw new \InvalidArgumentException('non-nullable amount_type cannot be null');
        }
        $this->container['amount_type'] = $amount_type;

        return $this;
    }

    /**
     * Gets total_gross_amount
     *
     * @return int|null
     */
    public function getTotalGrossAmount()
    {
        return $this->container['total_gross_amount'];
    }

    /**
     * Sets total_gross_amount
     *
     * @param int|null $total_gross_amount total_gross_amount
     *
     * @return self
     */
    public function setTotalGrossAmount($total_gross_amount)
    {
        if (is_null($total_gross_amount)) {
            array_push($this->openAPINullablesSetToNull, 'total_gross_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_gross_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_gross_amount'] = $total_gross_amount;

        return $this;
    }

    /**
     * Gets total_net_amount
     *
     * @return int|null
     */
    public function getTotalNetAmount()
    {
        return $this->container['total_net_amount'];
    }

    /**
     * Sets total_net_amount
     *
     * @param int|null $total_net_amount total_net_amount
     *
     * @return self
     */
    public function setTotalNetAmount($total_net_amount)
    {
        if (is_null($total_net_amount)) {
            array_push($this->openAPINullablesSetToNull, 'total_net_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_net_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_net_amount'] = $total_net_amount;

        return $this;
    }

    /**
     * Gets tax_percentage
     *
     * @return int|null
     */
    public function getTaxPercentage()
    {
        return $this->container['tax_percentage'];
    }

    /**
     * Sets tax_percentage
     *
     * @param int|null $tax_percentage tax_percentage
     *
     * @return self
     */
    public function setTaxPercentage($tax_percentage)
    {
        if (is_null($tax_percentage)) {
            throw new \InvalidArgumentException('non-nullable tax_percentage cannot be null');
        }
        $this->container['tax_percentage'] = $tax_percentage;

        return $this;
    }

    /**
     * Gets total_vat_amount
     *
     * @return int|null
     */
    public function getTotalVatAmount()
    {
        return $this->container['total_vat_amount'];
    }

    /**
     * Sets total_vat_amount
     *
     * @param int|null $total_vat_amount total_vat_amount
     *
     * @return self
     */
    public function setTotalVatAmount($total_vat_amount)
    {
        if (is_null($total_vat_amount)) {
            array_push($this->openAPINullablesSetToNull, 'total_vat_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_vat_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total_vat_amount'] = $total_vat_amount;

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

