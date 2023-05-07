<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Orders;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
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
class OrderItemApprovals implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'OrderItemApprovals';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'order_item_id' => 'string',
        'approval_type' => '\AmazonPHP\SellingPartner\Model\Orders\ItemApprovalType',
        'approval_status' => '\AmazonPHP\SellingPartner\Model\Orders\ItemApprovalStatus',
        'item_approvals' => '\AmazonPHP\SellingPartner\Model\Orders\ItemApproval[]',
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
        'order_item_id' => null,
        'approval_type' => null,
        'approval_status' => null,
        'item_approvals' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'order_item_id' => 'OrderItemId',
        'approval_type' => 'ApprovalType',
        'approval_status' => 'ApprovalStatus',
        'item_approvals' => 'ItemApprovals',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'order_item_id' => 'setOrderItemId',
        'approval_type' => 'setApprovalType',
        'approval_status' => 'setApprovalStatus',
        'item_approvals' => 'setItemApprovals',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'order_item_id' => 'getOrderItemId',
        'approval_type' => 'getApprovalType',
        'approval_status' => 'getApprovalStatus',
        'item_approvals' => 'getItemApprovals',
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
        $this->container['order_item_id'] = $data['order_item_id'] ?? null;
        $this->container['approval_type'] = $data['approval_type'] ?? null;
        $this->container['approval_status'] = $data['approval_status'] ?? null;
        $this->container['item_approvals'] = $data['item_approvals'] ?? null;
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
        if ($this->container['order_item_id'] === null) {
            throw new AssertionException("'order_item_id' can't be null");
        }

        if ($this->container['approval_type'] === null) {
            throw new AssertionException("'approval_type' can't be null");
        }

        if ($this->container['approval_status'] === null) {
            throw new AssertionException("'approval_status' can't be null");
        }

        if ($this->container['item_approvals'] === null) {
            throw new AssertionException("'item_approvals' can't be null");
        }
    }

    /**
     * Gets order_item_id.
     *
     * @return string
     */
    public function getOrderItemId() : string
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id.
     *
     * @param string $order_item_id the unique identifier of the order item
     */
    public function setOrderItemId(string $order_item_id) : self
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets approval_type.
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\ItemApprovalType
     */
    public function getApprovalType() : ItemApprovalType
    {
        return $this->container['approval_type'];
    }

    /**
     * Sets approval_type.
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\ItemApprovalType $approval_type approval_type
     */
    public function setApprovalType(ItemApprovalType $approval_type) : self
    {
        $this->container['approval_type'] = $approval_type;

        return $this;
    }

    /**
     * Gets approval_status.
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\ItemApprovalStatus
     */
    public function getApprovalStatus() : ItemApprovalStatus
    {
        return $this->container['approval_status'];
    }

    /**
     * Sets approval_status.
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\ItemApprovalStatus $approval_status approval_status
     */
    public function setApprovalStatus(ItemApprovalStatus $approval_status) : self
    {
        $this->container['approval_status'] = $approval_status;

        return $this;
    }

    /**
     * Gets item_approvals.
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\ItemApproval[]
     */
    public function getItemApprovals() : array
    {
        return $this->container['item_approvals'];
    }

    /**
     * Sets item_approvals.
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\ItemApproval[] $item_approvals item_approvals
     */
    public function setItemApprovals(array $item_approvals) : self
    {
        $this->container['item_approvals'] = $item_approvals;

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
