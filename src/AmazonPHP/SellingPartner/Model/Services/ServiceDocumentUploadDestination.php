<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Services;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ServiceDocumentUploadDestination implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ServiceDocumentUploadDestination';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'upload_destination_id' => 'string',
        'url' => 'string',
        'encryption_details' => '\AmazonPHP\SellingPartner\Model\Services\EncryptionDetails',
        'headers' => 'object',
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
        'upload_destination_id' => null,
        'url' => null,
        'encryption_details' => null,
        'headers' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'upload_destination_id' => 'uploadDestinationId',
        'url' => 'url',
        'encryption_details' => 'encryptionDetails',
        'headers' => 'headers',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'upload_destination_id' => 'setUploadDestinationId',
        'url' => 'setUrl',
        'encryption_details' => 'setEncryptionDetails',
        'headers' => 'setHeaders',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'upload_destination_id' => 'getUploadDestinationId',
        'url' => 'getUrl',
        'encryption_details' => 'getEncryptionDetails',
        'headers' => 'getHeaders',
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
        $this->container['upload_destination_id'] = $data['upload_destination_id'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['encryption_details'] = $data['encryption_details'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
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
        if ($this->container['upload_destination_id'] === null) {
            throw new AssertionException("'upload_destination_id' can't be null");
        }

        if ($this->container['url'] === null) {
            throw new AssertionException("'url' can't be null");
        }

        if ($this->container['encryption_details'] === null) {
            throw new AssertionException("'encryption_details' can't be null");
        }

        $this->container['encryption_details']->validate();
    }

    /**
     * Gets upload_destination_id.
     *
     * @return string
     */
    public function getUploadDestinationId() : string
    {
        return $this->container['upload_destination_id'];
    }

    /**
     * Sets upload_destination_id.
     *
     * @param string $upload_destination_id the unique identifier to be used by APIs that reference the upload destination
     */
    public function setUploadDestinationId(string $upload_destination_id) : self
    {
        $this->container['upload_destination_id'] = $upload_destination_id;

        return $this;
    }

    /**
     * Gets url.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->container['url'];
    }

    /**
     * Sets url.
     *
     * @param string $url the URL to which to upload the file
     */
    public function setUrl(string $url) : self
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets encryption_details.
     *
     * @return \AmazonPHP\SellingPartner\Model\Services\EncryptionDetails
     */
    public function getEncryptionDetails() : EncryptionDetails
    {
        return $this->container['encryption_details'];
    }

    /**
     * Sets encryption_details.
     *
     * @param \AmazonPHP\SellingPartner\Model\Services\EncryptionDetails $encryption_details encryption_details
     */
    public function setEncryptionDetails(EncryptionDetails $encryption_details) : self
    {
        $this->container['encryption_details'] = $encryption_details;

        return $this;
    }

    /**
     * Gets headers.
     *
     * @return null|object
     */
    public function getHeaders() : ?object
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers.
     *
     * @param null|object $headers the headers to include in the upload request
     */
    public function setHeaders(?object $headers) : self
    {
        $this->container['headers'] = $headers;

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
