<?php declare(strict_types=1);
/**
 * QualifiersType.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items helps you programmatically retrieve item details for items in the catalog.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\CatalogItem;

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
class QualifiersType implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'QualifiersType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'item_condition' => 'string',
        'item_subcondition' => 'string',
        'fulfillment_channel' => 'string',
        'ships_domestically' => 'string',
        'shipping_time' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ShippingTimeType',
        'seller_positive_feedback_rating' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'item_condition' => null,
        'item_subcondition' => null,
        'fulfillment_channel' => null,
        'ships_domestically' => null,
        'shipping_time' => null,
        'seller_positive_feedback_rating' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'item_condition' => 'ItemCondition',
        'item_subcondition' => 'ItemSubcondition',
        'fulfillment_channel' => 'FulfillmentChannel',
        'ships_domestically' => 'ShipsDomestically',
        'shipping_time' => 'ShippingTime',
        'seller_positive_feedback_rating' => 'SellerPositiveFeedbackRating',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'item_condition' => 'setItemCondition',
        'item_subcondition' => 'setItemSubcondition',
        'fulfillment_channel' => 'setFulfillmentChannel',
        'ships_domestically' => 'setShipsDomestically',
        'shipping_time' => 'setShippingTime',
        'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'item_condition' => 'getItemCondition',
        'item_subcondition' => 'getItemSubcondition',
        'fulfillment_channel' => 'getFulfillmentChannel',
        'ships_domestically' => 'getShipsDomestically',
        'shipping_time' => 'getShippingTime',
        'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
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
        $this->container['item_condition'] = $data['item_condition'] ?? null;
        $this->container['item_subcondition'] = $data['item_subcondition'] ?? null;
        $this->container['fulfillment_channel'] = $data['fulfillment_channel'] ?? null;
        $this->container['ships_domestically'] = $data['ships_domestically'] ?? null;
        $this->container['shipping_time'] = $data['shipping_time'] ?? null;
        $this->container['seller_positive_feedback_rating'] = $data['seller_positive_feedback_rating'] ?? null;
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['item_condition'] === null) {
            $invalidProperties[] = "'item_condition' can't be null";
        }

        if ($this->container['item_subcondition'] === null) {
            $invalidProperties[] = "'item_subcondition' can't be null";
        }

        if ($this->container['fulfillment_channel'] === null) {
            $invalidProperties[] = "'fulfillment_channel' can't be null";
        }

        if ($this->container['ships_domestically'] === null) {
            $invalidProperties[] = "'ships_domestically' can't be null";
        }

        if ($this->container['shipping_time'] === null) {
            $invalidProperties[] = "'shipping_time' can't be null";
        }

        if ($this->container['seller_positive_feedback_rating'] === null) {
            $invalidProperties[] = "'seller_positive_feedback_rating' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets item_condition.
     */
    public function getItemCondition() : string
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition.
     *
     * @param string $item_condition The condition of the item. Possible values: New, Used, Collectible, Refurbished, or Club.
     */
    public function setItemCondition(string $item_condition) : self
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets item_subcondition.
     */
    public function getItemSubcondition() : string
    {
        return $this->container['item_subcondition'];
    }

    /**
     * Sets item_subcondition.
     *
     * @param string $item_subcondition The item subcondition for the offer listing. Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     */
    public function setItemSubcondition(string $item_subcondition) : self
    {
        $this->container['item_subcondition'] = $item_subcondition;

        return $this;
    }

    /**
     * Gets fulfillment_channel.
     */
    public function getFulfillmentChannel() : string
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel.
     *
     * @param string $fulfillment_channel The fulfillment channel for the item. Possible values:  * Amazon - Fulfilled by Amazon. * Merchant - Fulfilled by the seller.
     */
    public function setFulfillmentChannel(string $fulfillment_channel) : self
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets ships_domestically.
     */
    public function getShipsDomestically() : string
    {
        return $this->container['ships_domestically'];
    }

    /**
     * Sets ships_domestically.
     *
     * @param string $ships_domestically Indicates whether the marketplace specified in the request and the location that the item ships from are in the same country. Possible values: True, False, or Unknown.
     */
    public function setShipsDomestically(string $ships_domestically) : self
    {
        $this->container['ships_domestically'] = $ships_domestically;

        return $this;
    }

    /**
     * Gets shipping_time.
     */
    public function getShippingTime() : ShippingTimeType
    {
        return $this->container['shipping_time'];
    }

    /**
     * Sets shipping_time.
     *
     * @param \AmazonPHP\SellingPartner\Model\CatalogItem\ShippingTimeType $shipping_time shipping_time
     */
    public function setShippingTime(ShippingTimeType $shipping_time) : self
    {
        $this->container['shipping_time'] = $shipping_time;

        return $this;
    }

    /**
     * Gets seller_positive_feedback_rating.
     */
    public function getSellerPositiveFeedbackRating() : string
    {
        return $this->container['seller_positive_feedback_rating'];
    }

    /**
     * Sets seller_positive_feedback_rating.
     *
     * @param string $seller_positive_feedback_rating (98-100%, 95-97%, 90-94%, 80-89%, 70-79%, Less than 70%, or Just launched ) – Indicates the percentage of feedback ratings that were positive over the past 12 months
     */
    public function setSellerPositiveFeedbackRating(string $seller_positive_feedback_rating) : self
    {
        $this->container['seller_positive_feedback_rating'] = $seller_positive_feedback_rating;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
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
     *
     * @param int $offset Offset
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
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
