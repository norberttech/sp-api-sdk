<?php declare(strict_types=1);
/**
 * OrderMetricsInterval.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Sales.
 *
 * The Selling Partner API for Sales provides APIs related to sales performance.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\Sales;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderMetricsInterval implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'OrderMetricsInterval';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'interval' => 'string',
        'unit_count' => 'int',
        'order_item_count' => 'int',
        'order_count' => 'int',
        'average_unit_price' => '\AmazonPHP\SellingPartner\Model\Sales\Money',
        'total_sales' => '\AmazonPHP\SellingPartner\Model\Sales\Money',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'interval' => null,
        'unit_count' => null,
        'order_item_count' => null,
        'order_count' => null,
        'average_unit_price' => null,
        'total_sales' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'interval' => 'interval',
        'unit_count' => 'unitCount',
        'order_item_count' => 'orderItemCount',
        'order_count' => 'orderCount',
        'average_unit_price' => 'averageUnitPrice',
        'total_sales' => 'totalSales',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'interval' => 'setInterval',
        'unit_count' => 'setUnitCount',
        'order_item_count' => 'setOrderItemCount',
        'order_count' => 'setOrderCount',
        'average_unit_price' => 'setAverageUnitPrice',
        'total_sales' => 'setTotalSales',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'interval' => 'getInterval',
        'unit_count' => 'getUnitCount',
        'order_item_count' => 'getOrderItemCount',
        'order_count' => 'getOrderCount',
        'average_unit_price' => 'getAverageUnitPrice',
        'total_sales' => 'getTotalSales',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['interval'] = $data['interval'] ?? null;
        $this->container['unit_count'] = $data['unit_count'] ?? null;
        $this->container['order_item_count'] = $data['order_item_count'] ?? null;
        $this->container['order_count'] = $data['order_count'] ?? null;
        $this->container['average_unit_price'] = $data['average_unit_price'] ?? null;
        $this->container['total_sales'] = $data['total_sales'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }

        if ($this->container['unit_count'] === null) {
            $invalidProperties[] = "'unit_count' can't be null";
        }

        if ($this->container['order_item_count'] === null) {
            $invalidProperties[] = "'order_item_count' can't be null";
        }

        if ($this->container['order_count'] === null) {
            $invalidProperties[] = "'order_count' can't be null";
        }

        if ($this->container['average_unit_price'] === null) {
            $invalidProperties[] = "'average_unit_price' can't be null";
        }

        if ($this->container['total_sales'] === null) {
            $invalidProperties[] = "'total_sales' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets interval.
     */
    public function getInterval() : string
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval.
     *
     * @param string $interval The interval of time based on requested granularity (ex. Hour, Day, etc.) If this is the first or the last interval from the list, it might contain incomplete data if the requested interval doesn't align with the requested granularity (ex. request interval 2018-09-01T02:00:00Z--2018-09-04T19:00:00Z and granularity day will result in Sept 1st UTC day and Sept 4th UTC days having partial data).
     */
    public function setInterval(string $interval) : self
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets unit_count.
     */
    public function getUnitCount() : int
    {
        return $this->container['unit_count'];
    }

    /**
     * Sets unit_count.
     *
     * @param int $unit_count the number of units in orders based on the specified filters
     */
    public function setUnitCount(int $unit_count) : self
    {
        $this->container['unit_count'] = $unit_count;

        return $this;
    }

    /**
     * Gets order_item_count.
     */
    public function getOrderItemCount() : int
    {
        return $this->container['order_item_count'];
    }

    /**
     * Sets order_item_count.
     *
     * @param int $order_item_count the number of order items based on the specified filters
     */
    public function setOrderItemCount(int $order_item_count) : self
    {
        $this->container['order_item_count'] = $order_item_count;

        return $this;
    }

    /**
     * Gets order_count.
     */
    public function getOrderCount() : int
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count.
     *
     * @param int $order_count the number of orders based on the specified filters
     */
    public function setOrderCount(int $order_count) : self
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets average_unit_price.
     */
    public function getAverageUnitPrice() : Money
    {
        return $this->container['average_unit_price'];
    }

    /**
     * Sets average_unit_price.
     *
     * @param \AmazonPHP\SellingPartner\Model\Sales\Money $average_unit_price average_unit_price
     */
    public function setAverageUnitPrice(Money $average_unit_price) : self
    {
        $this->container['average_unit_price'] = $average_unit_price;

        return $this;
    }

    /**
     * Gets total_sales.
     */
    public function getTotalSales() : Money
    {
        return $this->container['total_sales'];
    }

    /**
     * Sets total_sales.
     *
     * @param \AmazonPHP\SellingPartner\Model\Sales\Money $total_sales total_sales
     */
    public function setTotalSales(Money $total_sales) : self
    {
        $this->container['total_sales'] = $total_sales;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
