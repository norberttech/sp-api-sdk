<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Dimensions implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Dimensions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'length' => 'float',
        'width' => 'float',
        'height' => 'float',
        'unit' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\UnitOfMeasurement',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'length' => 'double',
        'width' => 'double',
        'height' => 'double',
        'unit' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'length' => 'Length',
        'width' => 'Width',
        'height' => 'Height',
        'unit' => 'Unit',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'unit' => 'setUnit',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'unit' => 'getUnit',
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
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['length'] = $data['length'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
        return (string) \json_encode(
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
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['length'] === null) {
            throw new AssertionException("'length' can't be null");
        }

        if ($this->container['width'] === null) {
            throw new AssertionException("'width' can't be null");
        }

        if ($this->container['height'] === null) {
            throw new AssertionException("'height' can't be null");
        }

        if ($this->container['unit'] === null) {
            throw new AssertionException("'unit' can't be null");
        }
    }

    /**
     * Gets length.
     *
     * @return float
     */
    public function getLength() : float
    {
        return $this->container['length'];
    }

    /**
     * Sets length.
     *
     * @param float $length length
     */
    public function setLength(float $length) : self
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width.
     *
     * @return float
     */
    public function getWidth() : float
    {
        return $this->container['width'];
    }

    /**
     * Sets width.
     *
     * @param float $width width
     */
    public function setWidth(float $width) : self
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height.
     *
     * @return float
     */
    public function getHeight() : float
    {
        return $this->container['height'];
    }

    /**
     * Sets height.
     *
     * @param float $height height
     */
    public function setHeight(float $height) : self
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets unit.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\UnitOfMeasurement
     */
    public function getUnit() : UnitOfMeasurement
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\UnitOfMeasurement $unit unit
     */
    public function setUnit(UnitOfMeasurement $unit) : self
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
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
    #[\ReturnTypeWillChange]
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
