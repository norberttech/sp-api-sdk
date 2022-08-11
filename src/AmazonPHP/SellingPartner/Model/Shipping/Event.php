<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Shipping;

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
class Event implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Event';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'event_code' => 'string',
        'event_time' => '\DateTimeInterface',
        'location' => '\AmazonPHP\SellingPartner\Model\Shipping\Location',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'event_code' => null,
        'event_time' => 'date-time',
        'location' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'event_code' => 'eventCode',
        'event_time' => 'eventTime',
        'location' => 'location',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'event_code' => 'setEventCode',
        'event_time' => 'setEventTime',
        'location' => 'setLocation',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'event_code' => 'getEventCode',
        'event_time' => 'getEventTime',
        'location' => 'getLocation',
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
        $this->container['event_code'] = $data['event_code'] ?? null;
        $this->container['event_time'] = $data['event_time'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
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
        if ($this->container['event_code'] === null) {
            throw new AssertionException("'event_code' can't be null");
        }

        if ((\mb_strlen($this->container['event_code']) > 60)) {
            throw new AssertionException("invalid value for 'event_code', the character length must be smaller than or equal to 60.");
        }

        if ((\mb_strlen($this->container['event_code']) < 1)) {
            throw new AssertionException("invalid value for 'event_code', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['event_time'] === null) {
            throw new AssertionException("'event_time' can't be null");
        }

        if ($this->container['location'] !== null) {
            $this->container['location']->validate();
        }
    }

    /**
     * Gets event_code.
     */
    public function getEventCode() : string
    {
        return $this->container['event_code'];
    }

    /**
     * Sets event_code.
     *
     * @param string $event_code the event code of a shipment, such as Departed, Received, and ReadyForReceive
     *
     * @return self
     */
    public function setEventCode(string $event_code) : self
    {
        $this->container['event_code'] = $event_code;

        return $this;
    }

    /**
     * Gets event_time.
     */
    public function getEventTime() : \DateTimeInterface
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time.
     *
     * @param \DateTimeInterface $event_time the date and time of an event for a shipment
     *
     * @return self
     */
    public function setEventTime(\DateTimeInterface $event_time) : self
    {
        $this->container['event_time'] = $event_time;

        return $this;
    }

    /**
     * Gets location.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Shipping\Location
     */
    public function getLocation() : ?Location
    {
        return $this->container['location'];
    }

    /**
     * Sets location.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Shipping\Location $location location
     *
     * @return self
     */
    public function setLocation(?Location $location) : self
    {
        $this->container['location'] = $location;

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
