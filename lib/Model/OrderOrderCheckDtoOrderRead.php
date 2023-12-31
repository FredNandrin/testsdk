<?php
/**
 * OrderOrderCheckDtoOrderRead
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
 * OrderOrderCheckDtoOrderRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderOrderCheckDtoOrderRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order.OrderCheckDto-order.read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'voucher' => '\OpenAPI\Client\Model\VoucherDtoOrderRead',
        'total_product_gross_amount' => 'int',
        'total_voucher_gross_amount' => 'int',
        'total_gross_amount' => 'int',
        'payment_options' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'voucher' => null,
        'total_product_gross_amount' => null,
        'total_voucher_gross_amount' => null,
        'total_gross_amount' => null,
        'payment_options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'voucher' => true,
		'total_product_gross_amount' => false,
		'total_voucher_gross_amount' => false,
		'total_gross_amount' => false,
		'payment_options' => false
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
        'voucher' => 'voucher',
        'total_product_gross_amount' => 'TotalProductGrossAmount',
        'total_voucher_gross_amount' => 'TotalVoucherGrossAmount',
        'total_gross_amount' => 'TotalGrossAmount',
        'payment_options' => 'paymentOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'voucher' => 'setVoucher',
        'total_product_gross_amount' => 'setTotalProductGrossAmount',
        'total_voucher_gross_amount' => 'setTotalVoucherGrossAmount',
        'total_gross_amount' => 'setTotalGrossAmount',
        'payment_options' => 'setPaymentOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'voucher' => 'getVoucher',
        'total_product_gross_amount' => 'getTotalProductGrossAmount',
        'total_voucher_gross_amount' => 'getTotalVoucherGrossAmount',
        'total_gross_amount' => 'getTotalGrossAmount',
        'payment_options' => 'getPaymentOptions'
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
        $this->setIfExists('voucher', $data ?? [], null);
        $this->setIfExists('total_product_gross_amount', $data ?? [], null);
        $this->setIfExists('total_voucher_gross_amount', $data ?? [], null);
        $this->setIfExists('total_gross_amount', $data ?? [], null);
        $this->setIfExists('payment_options', $data ?? [], null);
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
     * Gets voucher
     *
     * @return \OpenAPI\Client\Model\VoucherDtoOrderRead|null
     */
    public function getVoucher()
    {
        return $this->container['voucher'];
    }

    /**
     * Sets voucher
     *
     * @param \OpenAPI\Client\Model\VoucherDtoOrderRead|null $voucher voucher
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
     * Gets total_product_gross_amount
     *
     * @return int|null
     */
    public function getTotalProductGrossAmount()
    {
        return $this->container['total_product_gross_amount'];
    }

    /**
     * Sets total_product_gross_amount
     *
     * @param int|null $total_product_gross_amount total_product_gross_amount
     *
     * @return self
     */
    public function setTotalProductGrossAmount($total_product_gross_amount)
    {
        if (is_null($total_product_gross_amount)) {
            throw new \InvalidArgumentException('non-nullable total_product_gross_amount cannot be null');
        }
        $this->container['total_product_gross_amount'] = $total_product_gross_amount;

        return $this;
    }

    /**
     * Gets total_voucher_gross_amount
     *
     * @return int|null
     */
    public function getTotalVoucherGrossAmount()
    {
        return $this->container['total_voucher_gross_amount'];
    }

    /**
     * Sets total_voucher_gross_amount
     *
     * @param int|null $total_voucher_gross_amount total_voucher_gross_amount
     *
     * @return self
     */
    public function setTotalVoucherGrossAmount($total_voucher_gross_amount)
    {
        if (is_null($total_voucher_gross_amount)) {
            throw new \InvalidArgumentException('non-nullable total_voucher_gross_amount cannot be null');
        }
        $this->container['total_voucher_gross_amount'] = $total_voucher_gross_amount;

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
            throw new \InvalidArgumentException('non-nullable total_gross_amount cannot be null');
        }
        $this->container['total_gross_amount'] = $total_gross_amount;

        return $this;
    }

    /**
     * Gets payment_options
     *
     * @return string[]|null
     */
    public function getPaymentOptions()
    {
        return $this->container['payment_options'];
    }

    /**
     * Sets payment_options
     *
     * @param string[]|null $payment_options payment_options
     *
     * @return self
     */
    public function setPaymentOptions($payment_options)
    {
        if (is_null($payment_options)) {
            throw new \InvalidArgumentException('non-nullable payment_options cannot be null');
        }
        $this->container['payment_options'] = $payment_options;

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


