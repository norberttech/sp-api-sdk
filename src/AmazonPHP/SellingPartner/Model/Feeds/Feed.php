<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Feeds;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Feeds.
 *
 * The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.
 *
 * The version of the OpenAPI document: 2021-06-30
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Feed implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const PROCESSING_STATUS_CANCELLED = 'CANCELLED';

    final public const PROCESSING_STATUS_DONE = 'DONE';

    final public const PROCESSING_STATUS_FATAL = 'FATAL';

    final public const PROCESSING_STATUS_IN_PROGRESS = 'IN_PROGRESS';

    final public const PROCESSING_STATUS_IN_QUEUE = 'IN_QUEUE';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Feed';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'feed_id' => 'string',
        'feed_type' => 'string',
        'marketplace_ids' => 'string[]',
        'created_time' => '\DateTimeInterface',
        'processing_status' => 'string',
        'processing_start_time' => '\DateTimeInterface',
        'processing_end_time' => '\DateTimeInterface',
        'result_feed_document_id' => 'string',
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
        'feed_id' => null,
        'feed_type' => null,
        'marketplace_ids' => null,
        'created_time' => 'date-time',
        'processing_status' => null,
        'processing_start_time' => 'date-time',
        'processing_end_time' => 'date-time',
        'result_feed_document_id' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'feed_id' => 'feedId',
        'feed_type' => 'feedType',
        'marketplace_ids' => 'marketplaceIds',
        'created_time' => 'createdTime',
        'processing_status' => 'processingStatus',
        'processing_start_time' => 'processingStartTime',
        'processing_end_time' => 'processingEndTime',
        'result_feed_document_id' => 'resultFeedDocumentId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'feed_id' => 'setFeedId',
        'feed_type' => 'setFeedType',
        'marketplace_ids' => 'setMarketplaceIds',
        'created_time' => 'setCreatedTime',
        'processing_status' => 'setProcessingStatus',
        'processing_start_time' => 'setProcessingStartTime',
        'processing_end_time' => 'setProcessingEndTime',
        'result_feed_document_id' => 'setResultFeedDocumentId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'feed_id' => 'getFeedId',
        'feed_type' => 'getFeedType',
        'marketplace_ids' => 'getMarketplaceIds',
        'created_time' => 'getCreatedTime',
        'processing_status' => 'getProcessingStatus',
        'processing_start_time' => 'getProcessingStartTime',
        'processing_end_time' => 'getProcessingEndTime',
        'result_feed_document_id' => 'getResultFeedDocumentId',
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
        $this->container['feed_id'] = $data['feed_id'] ?? null;
        $this->container['feed_type'] = $data['feed_type'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['processing_status'] = $data['processing_status'] ?? null;
        $this->container['processing_start_time'] = $data['processing_start_time'] ?? null;
        $this->container['processing_end_time'] = $data['processing_end_time'] ?? null;
        $this->container['result_feed_document_id'] = $data['result_feed_document_id'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getProcessingStatusAllowableValues() : array
    {
        return [
            self::PROCESSING_STATUS_CANCELLED,
            self::PROCESSING_STATUS_DONE,
            self::PROCESSING_STATUS_FATAL,
            self::PROCESSING_STATUS_IN_PROGRESS,
            self::PROCESSING_STATUS_IN_QUEUE,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['feed_id'] === null) {
            throw new AssertionException("'feed_id' can't be null");
        }

        if ($this->container['feed_type'] === null) {
            throw new AssertionException("'feed_type' can't be null");
        }

        if ($this->container['created_time'] === null) {
            throw new AssertionException("'created_time' can't be null");
        }

        if ($this->container['processing_status'] === null) {
            throw new AssertionException("'processing_status' can't be null");
        }

        $allowedValues = $this->getProcessingStatusAllowableValues();

        if (null !== $this->container['processing_status'] && !\in_array($this->container['processing_status'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'processing_status', must be one of '%s'",
                    $this->container['processing_status'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets feed_id.
     *
     * @return string
     */
    public function getFeedId() : string
    {
        return $this->container['feed_id'];
    }

    /**
     * Sets feed_id.
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID.
     */
    public function setFeedId(string $feed_id) : self
    {
        $this->container['feed_id'] = $feed_id;

        return $this;
    }

    /**
     * Gets feed_type.
     *
     * @return string
     */
    public function getFeedType() : string
    {
        return $this->container['feed_type'];
    }

    /**
     * Sets feed_type.
     *
     * @param string $feed_type the feed type
     */
    public function setFeedType(string $feed_type) : self
    {
        $this->container['feed_type'] = $feed_type;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return null|string[]
     */
    public function getMarketplaceIds() : ?array
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param null|string[] $marketplace_ids a list of identifiers for the marketplaces that the feed is applied to
     */
    public function setMarketplaceIds(?array $marketplace_ids) : self
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets created_time.
     *
     * @return \DateTimeInterface
     */
    public function getCreatedTime() : \DateTimeInterface
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time.
     *
     * @param \DateTimeInterface $created_time the date and time when the feed was created, in ISO 8601 date time format
     */
    public function setCreatedTime(\DateTimeInterface $created_time) : self
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets processing_status.
     *
     * @return string
     */
    public function getProcessingStatus() : string
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status.
     *
     * @param string $processing_status the processing status of the feed
     */
    public function setProcessingStatus(string $processing_status) : self
    {
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets processing_start_time.
     *
     * @return null|\DateTimeInterface
     */
    public function getProcessingStartTime() : ?\DateTimeInterface
    {
        return $this->container['processing_start_time'];
    }

    /**
     * Sets processing_start_time.
     *
     * @param null|\DateTimeInterface $processing_start_time the date and time when feed processing started, in ISO 8601 date time format
     */
    public function setProcessingStartTime(?\DateTimeInterface $processing_start_time) : self
    {
        $this->container['processing_start_time'] = $processing_start_time;

        return $this;
    }

    /**
     * Gets processing_end_time.
     *
     * @return null|\DateTimeInterface
     */
    public function getProcessingEndTime() : ?\DateTimeInterface
    {
        return $this->container['processing_end_time'];
    }

    /**
     * Sets processing_end_time.
     *
     * @param null|\DateTimeInterface $processing_end_time the date and time when feed processing completed, in ISO 8601 date time format
     */
    public function setProcessingEndTime(?\DateTimeInterface $processing_end_time) : self
    {
        $this->container['processing_end_time'] = $processing_end_time;

        return $this;
    }

    /**
     * Gets result_feed_document_id.
     *
     * @return null|string
     */
    public function getResultFeedDocumentId() : ?string
    {
        return $this->container['result_feed_document_id'];
    }

    /**
     * Sets result_feed_document_id.
     *
     * @param null|string $result_feed_document_id The identifier for the feed document. This identifier is unique only in combination with a seller ID.
     */
    public function setResultFeedDocumentId(?string $result_feed_document_id) : self
    {
        $this->container['result_feed_document_id'] = $result_feed_document_id;

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
