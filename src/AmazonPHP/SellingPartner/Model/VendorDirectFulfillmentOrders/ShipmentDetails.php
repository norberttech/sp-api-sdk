<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Direct Fulfillment Orders.
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
 *
 * The version of the OpenAPI document: 2021-12-28
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShipmentDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ShipmentDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'is_priority_shipment' => 'bool',
        'is_scheduled_delivery_shipment' => 'bool',
        'is_pslip_required' => 'bool',
        'is_gift' => 'bool',
        'ship_method' => 'string',
        'shipment_dates' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\ShipmentDates',
        'message_to_customer' => 'string',
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
        'is_priority_shipment' => null,
        'is_scheduled_delivery_shipment' => null,
        'is_pslip_required' => null,
        'is_gift' => null,
        'ship_method' => null,
        'shipment_dates' => null,
        'message_to_customer' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'is_priority_shipment' => 'isPriorityShipment',
        'is_scheduled_delivery_shipment' => 'isScheduledDeliveryShipment',
        'is_pslip_required' => 'isPslipRequired',
        'is_gift' => 'isGift',
        'ship_method' => 'shipMethod',
        'shipment_dates' => 'shipmentDates',
        'message_to_customer' => 'messageToCustomer',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'is_priority_shipment' => 'setIsPriorityShipment',
        'is_scheduled_delivery_shipment' => 'setIsScheduledDeliveryShipment',
        'is_pslip_required' => 'setIsPslipRequired',
        'is_gift' => 'setIsGift',
        'ship_method' => 'setShipMethod',
        'shipment_dates' => 'setShipmentDates',
        'message_to_customer' => 'setMessageToCustomer',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'is_priority_shipment' => 'getIsPriorityShipment',
        'is_scheduled_delivery_shipment' => 'getIsScheduledDeliveryShipment',
        'is_pslip_required' => 'getIsPslipRequired',
        'is_gift' => 'getIsGift',
        'ship_method' => 'getShipMethod',
        'shipment_dates' => 'getShipmentDates',
        'message_to_customer' => 'getMessageToCustomer',
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
        $this->container['is_priority_shipment'] = $data['is_priority_shipment'] ?? null;
        $this->container['is_scheduled_delivery_shipment'] = $data['is_scheduled_delivery_shipment'] ?? null;
        $this->container['is_pslip_required'] = $data['is_pslip_required'] ?? null;
        $this->container['is_gift'] = $data['is_gift'] ?? null;
        $this->container['ship_method'] = $data['ship_method'] ?? null;
        $this->container['shipment_dates'] = $data['shipment_dates'] ?? null;
        $this->container['message_to_customer'] = $data['message_to_customer'] ?? null;
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
        if ($this->container['is_priority_shipment'] === null) {
            throw new AssertionException("'is_priority_shipment' can't be null");
        }

        if ($this->container['is_pslip_required'] === null) {
            throw new AssertionException("'is_pslip_required' can't be null");
        }

        if ($this->container['ship_method'] === null) {
            throw new AssertionException("'ship_method' can't be null");
        }

        if ($this->container['shipment_dates'] === null) {
            throw new AssertionException("'shipment_dates' can't be null");
        }

        $this->container['shipment_dates']->validate();

        if ($this->container['message_to_customer'] === null) {
            throw new AssertionException("'message_to_customer' can't be null");
        }
    }

    /**
     * Gets is_priority_shipment.
     */
    public function getIsPriorityShipment() : bool
    {
        return $this->container['is_priority_shipment'];
    }

    /**
     * Sets is_priority_shipment.
     *
     * @param bool $is_priority_shipment when true, this is a priority shipment
     */
    public function setIsPriorityShipment(bool $is_priority_shipment) : self
    {
        $this->container['is_priority_shipment'] = $is_priority_shipment;

        return $this;
    }

    /**
     * Gets is_scheduled_delivery_shipment.
     */
    public function getIsScheduledDeliveryShipment() : ?bool
    {
        return $this->container['is_scheduled_delivery_shipment'];
    }

    /**
     * Sets is_scheduled_delivery_shipment.
     *
     * @param null|bool $is_scheduled_delivery_shipment when true, this order is part of a scheduled delivery program
     */
    public function setIsScheduledDeliveryShipment(?bool $is_scheduled_delivery_shipment) : self
    {
        $this->container['is_scheduled_delivery_shipment'] = $is_scheduled_delivery_shipment;

        return $this;
    }

    /**
     * Gets is_pslip_required.
     */
    public function getIsPslipRequired() : bool
    {
        return $this->container['is_pslip_required'];
    }

    /**
     * Sets is_pslip_required.
     *
     * @param bool $is_pslip_required when true, a packing slip is required to be sent to the customer
     */
    public function setIsPslipRequired(bool $is_pslip_required) : self
    {
        $this->container['is_pslip_required'] = $is_pslip_required;

        return $this;
    }

    /**
     * Gets is_gift.
     */
    public function getIsGift() : ?bool
    {
        return $this->container['is_gift'];
    }

    /**
     * Sets is_gift.
     *
     * @param null|bool $is_gift When true, the order contain a gift. Include the gift message and gift wrap information.
     */
    public function setIsGift(?bool $is_gift) : self
    {
        $this->container['is_gift'] = $is_gift;

        return $this;
    }

    /**
     * Gets ship_method.
     */
    public function getShipMethod() : string
    {
        return $this->container['ship_method'];
    }

    /**
     * Sets ship_method.
     *
     * @param string $ship_method Ship method to be used for shipping the order. Amazon defines ship method codes indicating the shipping carrier and shipment service level. To see the full list of ship methods in use, including both the code and the friendly name, search the 'Help' section on Vendor Central for 'ship methods'.
     */
    public function setShipMethod(string $ship_method) : self
    {
        $this->container['ship_method'] = $ship_method;

        return $this;
    }

    /**
     * Gets shipment_dates.
     */
    public function getShipmentDates() : ShipmentDates
    {
        return $this->container['shipment_dates'];
    }

    /**
     * Sets shipment_dates.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\ShipmentDates $shipment_dates shipment_dates
     */
    public function setShipmentDates(ShipmentDates $shipment_dates) : self
    {
        $this->container['shipment_dates'] = $shipment_dates;

        return $this;
    }

    /**
     * Gets message_to_customer.
     */
    public function getMessageToCustomer() : string
    {
        return $this->container['message_to_customer'];
    }

    /**
     * Sets message_to_customer.
     *
     * @param string $message_to_customer message to customer for order status
     */
    public function setMessageToCustomer(string $message_to_customer) : self
    {
        $this->container['message_to_customer'] = $message_to_customer;

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
