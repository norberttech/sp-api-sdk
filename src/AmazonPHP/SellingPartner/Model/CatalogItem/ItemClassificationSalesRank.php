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
class ItemClassificationSalesRank implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemClassificationSalesRank';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'classification_id' => 'string',
        'title' => 'string',
        'link' => 'string',
        'rank' => 'int',
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
        'classification_id' => null,
        'title' => null,
        'link' => null,
        'rank' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'classification_id' => 'classificationId',
        'title' => 'title',
        'link' => 'link',
        'rank' => 'rank',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'classification_id' => 'setClassificationId',
        'title' => 'setTitle',
        'link' => 'setLink',
        'rank' => 'setRank',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'classification_id' => 'getClassificationId',
        'title' => 'getTitle',
        'link' => 'getLink',
        'rank' => 'getRank',
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
        $this->container['classification_id'] = $data['classification_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
        $this->container['rank'] = $data['rank'] ?? null;
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
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['classification_id'] === null) {
            throw new AssertionException("'classification_id' can't be null");
        }

        if ($this->container['title'] === null) {
            throw new AssertionException("'title' can't be null");
        }

        if ($this->container['rank'] === null) {
            throw new AssertionException("'rank' can't be null");
        }
    }

    /**
     * Gets classification_id.
     */
    public function getClassificationId() : string
    {
        return $this->container['classification_id'];
    }

    /**
     * Sets classification_id.
     *
     * @param string $classification_id identifier of the classification associated with the sales rank
     */
    public function setClassificationId(string $classification_id) : self
    {
        $this->container['classification_id'] = $classification_id;

        return $this;
    }

    /**
     * Gets title.
     */
    public function getTitle() : string
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param string $title title, or name, of the sales rank
     */
    public function setTitle(string $title) : self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets link.
     */
    public function getLink() : ?string
    {
        return $this->container['link'];
    }

    /**
     * Sets link.
     *
     * @param null|string $link corresponding Amazon retail website link, or URL, for the sales rank
     */
    public function setLink(?string $link) : self
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets rank.
     */
    public function getRank() : int
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank.
     *
     * @param int $rank sales rank value
     */
    public function setRank(int $rank) : self
    {
        $this->container['rank'] = $rank;

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
