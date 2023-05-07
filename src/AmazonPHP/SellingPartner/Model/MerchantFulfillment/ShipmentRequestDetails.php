<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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
class ShipmentRequestDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ShipmentRequestDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'amazon_order_id' => 'string',
        'seller_order_id' => 'string',
        'item_list' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Item[]',
        'ship_from_address' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address',
        'package_dimensions' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\PackageDimensions',
        'weight' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight',
        'must_arrive_by_date' => '\DateTimeInterface',
        'ship_date' => '\DateTimeInterface',
        'shipping_service_options' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingServiceOptions',
        'label_customization' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelCustomization',
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
        'amazon_order_id' => null,
        'seller_order_id' => null,
        'item_list' => null,
        'ship_from_address' => null,
        'package_dimensions' => null,
        'weight' => null,
        'must_arrive_by_date' => 'date-time',
        'ship_date' => 'date-time',
        'shipping_service_options' => null,
        'label_customization' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'amazon_order_id' => 'AmazonOrderId',
        'seller_order_id' => 'SellerOrderId',
        'item_list' => 'ItemList',
        'ship_from_address' => 'ShipFromAddress',
        'package_dimensions' => 'PackageDimensions',
        'weight' => 'Weight',
        'must_arrive_by_date' => 'MustArriveByDate',
        'ship_date' => 'ShipDate',
        'shipping_service_options' => 'ShippingServiceOptions',
        'label_customization' => 'LabelCustomization',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'seller_order_id' => 'setSellerOrderId',
        'item_list' => 'setItemList',
        'ship_from_address' => 'setShipFromAddress',
        'package_dimensions' => 'setPackageDimensions',
        'weight' => 'setWeight',
        'must_arrive_by_date' => 'setMustArriveByDate',
        'ship_date' => 'setShipDate',
        'shipping_service_options' => 'setShippingServiceOptions',
        'label_customization' => 'setLabelCustomization',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'seller_order_id' => 'getSellerOrderId',
        'item_list' => 'getItemList',
        'ship_from_address' => 'getShipFromAddress',
        'package_dimensions' => 'getPackageDimensions',
        'weight' => 'getWeight',
        'must_arrive_by_date' => 'getMustArriveByDate',
        'ship_date' => 'getShipDate',
        'shipping_service_options' => 'getShippingServiceOptions',
        'label_customization' => 'getLabelCustomization',
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['seller_order_id'] = $data['seller_order_id'] ?? null;
        $this->container['item_list'] = $data['item_list'] ?? null;
        $this->container['ship_from_address'] = $data['ship_from_address'] ?? null;
        $this->container['package_dimensions'] = $data['package_dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['must_arrive_by_date'] = $data['must_arrive_by_date'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['shipping_service_options'] = $data['shipping_service_options'] ?? null;
        $this->container['label_customization'] = $data['label_customization'] ?? null;
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
        if ($this->container['amazon_order_id'] === null) {
            throw new AssertionException("'amazon_order_id' can't be null");
        }

        if (null !== $this->container['seller_order_id'] && (\mb_strlen((string) $this->container['seller_order_id']) > 64)) {
            throw new AssertionException("invalid value for 'seller_order_id', the character length must be smaller than or equal to 64.");
        }

        if ($this->container['item_list'] === null) {
            throw new AssertionException("'item_list' can't be null");
        }

        if ($this->container['ship_from_address'] === null) {
            throw new AssertionException("'ship_from_address' can't be null");
        }

        $this->container['ship_from_address']->validate();

        if ($this->container['package_dimensions'] === null) {
            throw new AssertionException("'package_dimensions' can't be null");
        }

        $this->container['package_dimensions']->validate();

        if ($this->container['weight'] === null) {
            throw new AssertionException("'weight' can't be null");
        }

        $this->container['weight']->validate();

        if ($this->container['shipping_service_options'] === null) {
            throw new AssertionException("'shipping_service_options' can't be null");
        }

        $this->container['shipping_service_options']->validate();

        if ($this->container['label_customization'] !== null) {
            $this->container['label_customization']->validate();
        }
    }

    /**
     * Gets amazon_order_id.
     *
     * @return string
     */
    public function getAmazonOrderId() : string
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param string $amazon_order_id an Amazon-defined order identifier, in 3-7-7 format
     */
    public function setAmazonOrderId(string $amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets seller_order_id.
     *
     * @return null|string
     */
    public function getSellerOrderId() : ?string
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id.
     *
     * @param null|string $seller_order_id a seller-defined order identifier
     */
    public function setSellerOrderId(?string $seller_order_id) : self
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets item_list.
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Item[]
     */
    public function getItemList() : array
    {
        return $this->container['item_list'];
    }

    /**
     * Sets item_list.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Item[] $item_list the list of items to be included in a shipment
     */
    public function setItemList(array $item_list) : self
    {
        $this->container['item_list'] = $item_list;

        return $this;
    }

    /**
     * Gets ship_from_address.
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address
     */
    public function getShipFromAddress() : Address
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address $ship_from_address ship_from_address
     */
    public function setShipFromAddress(Address $ship_from_address) : self
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets package_dimensions.
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\PackageDimensions
     */
    public function getPackageDimensions() : PackageDimensions
    {
        return $this->container['package_dimensions'];
    }

    /**
     * Sets package_dimensions.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\PackageDimensions $package_dimensions package_dimensions
     */
    public function setPackageDimensions(PackageDimensions $package_dimensions) : self
    {
        $this->container['package_dimensions'] = $package_dimensions;

        return $this;
    }

    /**
     * Gets weight.
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight
     */
    public function getWeight() : Weight
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight $weight weight
     */
    public function setWeight(Weight $weight) : self
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets must_arrive_by_date.
     *
     * @return null|\DateTimeInterface
     */
    public function getMustArriveByDate() : ?\DateTimeInterface
    {
        return $this->container['must_arrive_by_date'];
    }

    /**
     * Sets must_arrive_by_date.
     *
     * @param null|\DateTimeInterface $must_arrive_by_date must_arrive_by_date
     */
    public function setMustArriveByDate(?\DateTimeInterface $must_arrive_by_date) : self
    {
        $this->container['must_arrive_by_date'] = $must_arrive_by_date;

        return $this;
    }

    /**
     * Gets ship_date.
     *
     * @return null|\DateTimeInterface
     */
    public function getShipDate() : ?\DateTimeInterface
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date.
     *
     * @param null|\DateTimeInterface $ship_date ship_date
     */
    public function setShipDate(?\DateTimeInterface $ship_date) : self
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets shipping_service_options.
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingServiceOptions
     */
    public function getShippingServiceOptions() : ShippingServiceOptions
    {
        return $this->container['shipping_service_options'];
    }

    /**
     * Sets shipping_service_options.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingServiceOptions $shipping_service_options shipping_service_options
     */
    public function setShippingServiceOptions(ShippingServiceOptions $shipping_service_options) : self
    {
        $this->container['shipping_service_options'] = $shipping_service_options;

        return $this;
    }

    /**
     * Gets label_customization.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelCustomization
     */
    public function getLabelCustomization() : ?LabelCustomization
    {
        return $this->container['label_customization'];
    }

    /**
     * Sets label_customization.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelCustomization $label_customization label_customization
     */
    public function setLabelCustomization(?LabelCustomization $label_customization) : self
    {
        $this->container['label_customization'] = $label_customization;

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
