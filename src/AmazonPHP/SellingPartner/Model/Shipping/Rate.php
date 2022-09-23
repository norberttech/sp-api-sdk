<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Shipping;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
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
class Rate implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Rate';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'rate_id' => 'string',
        'total_charge' => '\AmazonPHP\SellingPartner\Model\Shipping\Currency',
        'billed_weight' => '\AmazonPHP\SellingPartner\Model\Shipping\Weight',
        'expiration_time' => '\DateTimeInterface',
        'service_type' => '\AmazonPHP\SellingPartner\Model\Shipping\ServiceType',
        'promise' => '\AmazonPHP\SellingPartner\Model\Shipping\ShippingPromiseSet',
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
        'rate_id' => null,
        'total_charge' => null,
        'billed_weight' => null,
        'expiration_time' => 'date-time',
        'service_type' => null,
        'promise' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'rate_id' => 'rateId',
        'total_charge' => 'totalCharge',
        'billed_weight' => 'billedWeight',
        'expiration_time' => 'expirationTime',
        'service_type' => 'serviceType',
        'promise' => 'promise',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'rate_id' => 'setRateId',
        'total_charge' => 'setTotalCharge',
        'billed_weight' => 'setBilledWeight',
        'expiration_time' => 'setExpirationTime',
        'service_type' => 'setServiceType',
        'promise' => 'setPromise',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'rate_id' => 'getRateId',
        'total_charge' => 'getTotalCharge',
        'billed_weight' => 'getBilledWeight',
        'expiration_time' => 'getExpirationTime',
        'service_type' => 'getServiceType',
        'promise' => 'getPromise',
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
        $this->container['rate_id'] = $data['rate_id'] ?? null;
        $this->container['total_charge'] = $data['total_charge'] ?? null;
        $this->container['billed_weight'] = $data['billed_weight'] ?? null;
        $this->container['expiration_time'] = $data['expiration_time'] ?? null;
        $this->container['service_type'] = $data['service_type'] ?? null;
        $this->container['promise'] = $data['promise'] ?? null;
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
        if ($this->container['total_charge'] !== null) {
            $this->container['total_charge']->validate();
        }

        if ($this->container['billed_weight'] !== null) {
            $this->container['billed_weight']->validate();
        }

        if ($this->container['promise'] !== null) {
            $this->container['promise']->validate();
        }
    }

    /**
     * Gets rate_id.
     */
    public function getRateId() : ?string
    {
        return $this->container['rate_id'];
    }

    /**
     * Sets rate_id.
     *
     * @param null|string $rate_id an identifier for the rate
     */
    public function setRateId(?string $rate_id) : self
    {
        $this->container['rate_id'] = $rate_id;

        return $this;
    }

    /**
     * Gets total_charge.
     */
    public function getTotalCharge() : ?Currency
    {
        return $this->container['total_charge'];
    }

    /**
     * Sets total_charge.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Shipping\Currency $total_charge total_charge
     */
    public function setTotalCharge(?Currency $total_charge) : self
    {
        $this->container['total_charge'] = $total_charge;

        return $this;
    }

    /**
     * Gets billed_weight.
     */
    public function getBilledWeight() : ?Weight
    {
        return $this->container['billed_weight'];
    }

    /**
     * Sets billed_weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Shipping\Weight $billed_weight billed_weight
     */
    public function setBilledWeight(?Weight $billed_weight) : self
    {
        $this->container['billed_weight'] = $billed_weight;

        return $this;
    }

    /**
     * Gets expiration_time.
     */
    public function getExpirationTime() : ?\DateTimeInterface
    {
        return $this->container['expiration_time'];
    }

    /**
     * Sets expiration_time.
     *
     * @param null|\DateTimeInterface $expiration_time the time after which the offering will expire
     */
    public function setExpirationTime(?\DateTimeInterface $expiration_time) : self
    {
        $this->container['expiration_time'] = $expiration_time;

        return $this;
    }

    /**
     * Gets service_type.
     */
    public function getServiceType() : ?ServiceType
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Shipping\ServiceType $service_type service_type
     */
    public function setServiceType(?ServiceType $service_type) : self
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets promise.
     */
    public function getPromise() : ?ShippingPromiseSet
    {
        return $this->container['promise'];
    }

    /**
     * Sets promise.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Shipping\ShippingPromiseSet $promise promise
     */
    public function setPromise(?ShippingPromiseSet $promise) : self
    {
        $this->container['promise'] = $promise;

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
