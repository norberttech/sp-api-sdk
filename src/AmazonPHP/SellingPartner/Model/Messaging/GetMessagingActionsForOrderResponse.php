<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Messaging;

use AmazonPHP\SellingPartner\Exception\AssertionException;
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
class GetMessagingActionsForOrderResponse implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'GetMessagingActionsForOrderResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        '_links' => '\AmazonPHP\SellingPartner\Model\Messaging\GetMessagingActionsForOrderResponseLinks',
        '_embedded' => '\AmazonPHP\SellingPartner\Model\Messaging\GetMessagingActionsForOrderResponseEmbedded',
        'errors' => '\AmazonPHP\SellingPartner\Model\Messaging\Error[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        '_links' => null,
        '_embedded' => null,
        'errors' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        '_links' => '_links',
        '_embedded' => '_embedded',
        'errors' => 'errors',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        '_links' => 'setLinks',
        '_embedded' => 'setEmbedded',
        'errors' => 'setErrors',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        '_links' => 'getLinks',
        '_embedded' => 'getEmbedded',
        'errors' => 'getErrors',
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
        $this->container['_links'] = $data['_links'] ?? null;
        $this->container['_embedded'] = $data['_embedded'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
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
     *
     * @return string
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
        if ($this->container['_links'] !== null) {
            $this->container['_links']->validate();
        }

        if ($this->container['_embedded'] !== null) {
            $this->container['_embedded']->validate();
        }
    }

    /**
     * Gets _links.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Messaging\GetMessagingActionsForOrderResponseLinks
     */
    public function getLinks() : ?GetMessagingActionsForOrderResponseLinks
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Messaging\GetMessagingActionsForOrderResponseLinks $_links _links
     *
     * @return self
     */
    public function setLinks(?GetMessagingActionsForOrderResponseLinks $_links) : self
    {
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets _embedded.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Messaging\GetMessagingActionsForOrderResponseEmbedded
     */
    public function getEmbedded() : ?GetMessagingActionsForOrderResponseEmbedded
    {
        return $this->container['_embedded'];
    }

    /**
     * Sets _embedded.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Messaging\GetMessagingActionsForOrderResponseEmbedded $_embedded _embedded
     *
     * @return self
     */
    public function setEmbedded(?GetMessagingActionsForOrderResponseEmbedded $_embedded) : self
    {
        $this->container['_embedded'] = $_embedded;

        return $this;
    }

    /**
     * Gets errors.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Messaging\Error[]
     */
    public function getErrors() : ?array
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Messaging\Error[] $errors a list of error responses returned when a request is unsuccessful
     *
     * @return self
     */
    public function setErrors(?array $errors) : self
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return bool
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
    public function offsetGet($offset)
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
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
