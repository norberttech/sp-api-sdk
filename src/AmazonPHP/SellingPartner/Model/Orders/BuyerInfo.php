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
class BuyerInfo implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'BuyerInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'buyer_email' => 'string',
        'buyer_name' => 'string',
        'buyer_county' => 'string',
        'buyer_tax_info' => '\AmazonPHP\SellingPartner\Model\Orders\BuyerTaxInfo',
        'purchase_order_number' => 'string',
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
        'buyer_email' => null,
        'buyer_name' => null,
        'buyer_county' => null,
        'buyer_tax_info' => null,
        'purchase_order_number' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'buyer_email' => 'BuyerEmail',
        'buyer_name' => 'BuyerName',
        'buyer_county' => 'BuyerCounty',
        'buyer_tax_info' => 'BuyerTaxInfo',
        'purchase_order_number' => 'PurchaseOrderNumber',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'buyer_email' => 'setBuyerEmail',
        'buyer_name' => 'setBuyerName',
        'buyer_county' => 'setBuyerCounty',
        'buyer_tax_info' => 'setBuyerTaxInfo',
        'purchase_order_number' => 'setPurchaseOrderNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'buyer_email' => 'getBuyerEmail',
        'buyer_name' => 'getBuyerName',
        'buyer_county' => 'getBuyerCounty',
        'buyer_tax_info' => 'getBuyerTaxInfo',
        'purchase_order_number' => 'getPurchaseOrderNumber',
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
        $this->container['buyer_email'] = $data['buyer_email'] ?? null;
        $this->container['buyer_name'] = $data['buyer_name'] ?? null;
        $this->container['buyer_county'] = $data['buyer_county'] ?? null;
        $this->container['buyer_tax_info'] = $data['buyer_tax_info'] ?? null;
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
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
        if ($this->container['buyer_tax_info'] !== null) {
            $this->container['buyer_tax_info']->validate();
        }
    }

    /**
     * Gets buyer_email.
     */
    public function getBuyerEmail() : ?string
    {
        return $this->container['buyer_email'];
    }

    /**
     * Sets buyer_email.
     *
     * @param null|string $buyer_email the anonymized email address of the buyer
     */
    public function setBuyerEmail(?string $buyer_email) : self
    {
        $this->container['buyer_email'] = $buyer_email;

        return $this;
    }

    /**
     * Gets buyer_name.
     */
    public function getBuyerName() : ?string
    {
        return $this->container['buyer_name'];
    }

    /**
     * Sets buyer_name.
     *
     * @param null|string $buyer_name the buyer name or the recipient name
     */
    public function setBuyerName(?string $buyer_name) : self
    {
        $this->container['buyer_name'] = $buyer_name;

        return $this;
    }

    /**
     * Gets buyer_county.
     */
    public function getBuyerCounty() : ?string
    {
        return $this->container['buyer_county'];
    }

    /**
     * Sets buyer_county.
     *
     * @param null|string $buyer_county the county of the buyer
     */
    public function setBuyerCounty(?string $buyer_county) : self
    {
        $this->container['buyer_county'] = $buyer_county;

        return $this;
    }

    /**
     * Gets buyer_tax_info.
     */
    public function getBuyerTaxInfo() : ?BuyerTaxInfo
    {
        return $this->container['buyer_tax_info'];
    }

    /**
     * Sets buyer_tax_info.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\BuyerTaxInfo $buyer_tax_info buyer_tax_info
     */
    public function setBuyerTaxInfo(?BuyerTaxInfo $buyer_tax_info) : self
    {
        $this->container['buyer_tax_info'] = $buyer_tax_info;

        return $this;
    }

    /**
     * Gets purchase_order_number.
     */
    public function getPurchaseOrderNumber() : ?string
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number.
     *
     * @param null|string $purchase_order_number The purchase order (PO) number entered by the buyer at checkout. Returned only for orders where the buyer entered a PO number at checkout.
     */
    public function setPurchaseOrderNumber(?string $purchase_order_number) : self
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

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
