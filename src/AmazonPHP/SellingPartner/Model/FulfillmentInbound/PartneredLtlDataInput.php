<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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
class PartneredLtlDataInput implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'PartneredLtlDataInput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'contact' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Contact',
        'box_count' => 'int',
        'seller_freight_class' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SellerFreightClass',
        'freight_ready_date' => '\DateTimeInterface',
        'pallet_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Pallet[]',
        'total_weight' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight',
        'seller_declared_value' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Amount',
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
        'contact' => null,
        'box_count' => 'int64',
        'seller_freight_class' => null,
        'freight_ready_date' => 'date',
        'pallet_list' => null,
        'total_weight' => null,
        'seller_declared_value' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'contact' => 'Contact',
        'box_count' => 'BoxCount',
        'seller_freight_class' => 'SellerFreightClass',
        'freight_ready_date' => 'FreightReadyDate',
        'pallet_list' => 'PalletList',
        'total_weight' => 'TotalWeight',
        'seller_declared_value' => 'SellerDeclaredValue',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'contact' => 'setContact',
        'box_count' => 'setBoxCount',
        'seller_freight_class' => 'setSellerFreightClass',
        'freight_ready_date' => 'setFreightReadyDate',
        'pallet_list' => 'setPalletList',
        'total_weight' => 'setTotalWeight',
        'seller_declared_value' => 'setSellerDeclaredValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'contact' => 'getContact',
        'box_count' => 'getBoxCount',
        'seller_freight_class' => 'getSellerFreightClass',
        'freight_ready_date' => 'getFreightReadyDate',
        'pallet_list' => 'getPalletList',
        'total_weight' => 'getTotalWeight',
        'seller_declared_value' => 'getSellerDeclaredValue',
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['box_count'] = $data['box_count'] ?? null;
        $this->container['seller_freight_class'] = $data['seller_freight_class'] ?? null;
        $this->container['freight_ready_date'] = $data['freight_ready_date'] ?? null;
        $this->container['pallet_list'] = $data['pallet_list'] ?? null;
        $this->container['total_weight'] = $data['total_weight'] ?? null;
        $this->container['seller_declared_value'] = $data['seller_declared_value'] ?? null;
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
        if ($this->container['contact'] !== null) {
            $this->container['contact']->validate();
        }

        if ($this->container['total_weight'] !== null) {
            $this->container['total_weight']->validate();
        }

        if ($this->container['seller_declared_value'] !== null) {
            $this->container['seller_declared_value']->validate();
        }
    }

    /**
     * Gets contact.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Contact
     */
    public function getContact() : ?Contact
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Contact $contact contact
     *
     * @return self
     */
    public function setContact(?Contact $contact) : self
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets box_count.
     *
     * @return null|int
     */
    public function getBoxCount() : ?int
    {
        return $this->container['box_count'];
    }

    /**
     * Sets box_count.
     *
     * @param null|int $box_count box_count
     *
     * @return self
     */
    public function setBoxCount(?int $box_count) : self
    {
        $this->container['box_count'] = $box_count;

        return $this;
    }

    /**
     * Gets seller_freight_class.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SellerFreightClass
     */
    public function getSellerFreightClass() : ?SellerFreightClass
    {
        return $this->container['seller_freight_class'];
    }

    /**
     * Sets seller_freight_class.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SellerFreightClass $seller_freight_class seller_freight_class
     *
     * @return self
     */
    public function setSellerFreightClass(?SellerFreightClass $seller_freight_class) : self
    {
        $this->container['seller_freight_class'] = $seller_freight_class;

        return $this;
    }

    /**
     * Gets freight_ready_date.
     *
     * @return null|\DateTimeInterface
     */
    public function getFreightReadyDate() : ?\DateTimeInterface
    {
        return $this->container['freight_ready_date'];
    }

    /**
     * Sets freight_ready_date.
     *
     * @param null|\DateTimeInterface $freight_ready_date freight_ready_date
     *
     * @return self
     */
    public function setFreightReadyDate(?\DateTimeInterface $freight_ready_date) : self
    {
        $this->container['freight_ready_date'] = $freight_ready_date;

        return $this;
    }

    /**
     * Gets pallet_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Pallet[]
     */
    public function getPalletList() : ?array
    {
        return $this->container['pallet_list'];
    }

    /**
     * Sets pallet_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Pallet[] $pallet_list a list of pallet information
     *
     * @return self
     */
    public function setPalletList(?array $pallet_list) : self
    {
        $this->container['pallet_list'] = $pallet_list;

        return $this;
    }

    /**
     * Gets total_weight.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight
     */
    public function getTotalWeight() : ?Weight
    {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight $total_weight total_weight
     *
     * @return self
     */
    public function setTotalWeight(?Weight $total_weight) : self
    {
        $this->container['total_weight'] = $total_weight;

        return $this;
    }

    /**
     * Gets seller_declared_value.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Amount
     */
    public function getSellerDeclaredValue() : ?Amount
    {
        return $this->container['seller_declared_value'];
    }

    /**
     * Sets seller_declared_value.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Amount $seller_declared_value seller_declared_value
     *
     * @return self
     */
    public function setSellerDeclaredValue(?Amount $seller_declared_value) : self
    {
        $this->container['seller_declared_value'] = $seller_declared_value;

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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
