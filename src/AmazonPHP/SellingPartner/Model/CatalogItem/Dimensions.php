<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\CatalogItem;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, refer to the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2022-04-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-04-01
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
        'height' => '\AmazonPHP\SellingPartner\Model\CatalogItem\Dimension',
        'length' => '\AmazonPHP\SellingPartner\Model\CatalogItem\Dimension',
        'weight' => '\AmazonPHP\SellingPartner\Model\CatalogItem\Dimension',
        'width' => '\AmazonPHP\SellingPartner\Model\CatalogItem\Dimension',
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
        'height' => null,
        'length' => null,
        'weight' => null,
        'width' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'height' => 'height',
        'length' => 'length',
        'weight' => 'weight',
        'width' => 'width',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'height' => 'setHeight',
        'length' => 'setLength',
        'weight' => 'setWeight',
        'width' => 'setWidth',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'height' => 'getHeight',
        'length' => 'getLength',
        'weight' => 'getWeight',
        'width' => 'getWidth',
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
        $this->container['height'] = $data['height'] ?? null;
        $this->container['length'] = $data['length'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
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
     *
     * @return string
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
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['height'] !== null) {
            $this->container['height']->validate();
        }

        if ($this->container['length'] !== null) {
            $this->container['length']->validate();
        }

        if ($this->container['weight'] !== null) {
            $this->container['weight']->validate();
        }

        if ($this->container['width'] !== null) {
            $this->container['width']->validate();
        }
    }

    /**
     * Gets height.
     */
    public function getHeight() : ?Dimension
    {
        return $this->container['height'];
    }

    /**
     * Sets height.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\Dimension $height height
     */
    public function setHeight(?Dimension $height) : self
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets length.
     */
    public function getLength() : ?Dimension
    {
        return $this->container['length'];
    }

    /**
     * Sets length.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\Dimension $length length
     */
    public function setLength(?Dimension $length) : self
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets weight.
     */
    public function getWeight() : ?Dimension
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\Dimension $weight weight
     */
    public function setWeight(?Dimension $weight) : self
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets width.
     */
    public function getWidth() : ?Dimension
    {
        return $this->container['width'];
    }

    /**
     * Sets width.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\Dimension $width width
     */
    public function setWidth(?Dimension $width) : self
    {
        $this->container['width'] = $width;

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
    public function jsonSerialize() : string|bool
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string|bool
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}