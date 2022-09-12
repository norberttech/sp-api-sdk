<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ProductFees;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Product Fees.
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
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
class FeesEstimateIdentifier implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FeesEstimateIdentifier';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'seller_id' => 'string',
        'id_type' => '\AmazonPHP\SellingPartner\Model\ProductFees\IdType',
        'id_value' => 'string',
        'is_amazon_fulfilled' => 'bool',
        'price_to_estimate_fees' => '\AmazonPHP\SellingPartner\Model\ProductFees\PriceToEstimateFees',
        'seller_input_identifier' => 'string',
        'optional_fulfillment_program' => '\AmazonPHP\SellingPartner\Model\ProductFees\OptionalFulfillmentProgram',
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
        'marketplace_id' => null,
        'seller_id' => null,
        'id_type' => null,
        'id_value' => null,
        'is_amazon_fulfilled' => null,
        'price_to_estimate_fees' => null,
        'seller_input_identifier' => null,
        'optional_fulfillment_program' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'marketplace_id' => 'MarketplaceId',
        'seller_id' => 'SellerId',
        'id_type' => 'IdType',
        'id_value' => 'IdValue',
        'is_amazon_fulfilled' => 'IsAmazonFulfilled',
        'price_to_estimate_fees' => 'PriceToEstimateFees',
        'seller_input_identifier' => 'SellerInputIdentifier',
        'optional_fulfillment_program' => 'OptionalFulfillmentProgram',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'seller_id' => 'setSellerId',
        'id_type' => 'setIdType',
        'id_value' => 'setIdValue',
        'is_amazon_fulfilled' => 'setIsAmazonFulfilled',
        'price_to_estimate_fees' => 'setPriceToEstimateFees',
        'seller_input_identifier' => 'setSellerInputIdentifier',
        'optional_fulfillment_program' => 'setOptionalFulfillmentProgram',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'seller_id' => 'getSellerId',
        'id_type' => 'getIdType',
        'id_value' => 'getIdValue',
        'is_amazon_fulfilled' => 'getIsAmazonFulfilled',
        'price_to_estimate_fees' => 'getPriceToEstimateFees',
        'seller_input_identifier' => 'getSellerInputIdentifier',
        'optional_fulfillment_program' => 'getOptionalFulfillmentProgram',
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['id_type'] = $data['id_type'] ?? null;
        $this->container['id_value'] = $data['id_value'] ?? null;
        $this->container['is_amazon_fulfilled'] = $data['is_amazon_fulfilled'] ?? null;
        $this->container['price_to_estimate_fees'] = $data['price_to_estimate_fees'] ?? null;
        $this->container['seller_input_identifier'] = $data['seller_input_identifier'] ?? null;
        $this->container['optional_fulfillment_program'] = $data['optional_fulfillment_program'] ?? null;
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
        if ($this->container['price_to_estimate_fees'] !== null) {
            $this->container['price_to_estimate_fees']->validate();
        }
    }

    /**
     * Gets marketplace_id.
     *
     * @return null|string
     */
    public function getMarketplaceId() : ?string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param null|string $marketplace_id a marketplace identifier
     *
     * @return self
     */
    public function setMarketplaceId(?string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets seller_id.
     *
     * @return null|string
     */
    public function getSellerId() : ?string
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id.
     *
     * @param null|string $seller_id the seller identifier
     *
     * @return self
     */
    public function setSellerId(?string $seller_id) : self
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets id_type.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductFees\IdType
     */
    public function getIdType() : ?IdType
    {
        return $this->container['id_type'];
    }

    /**
     * Sets id_type.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductFees\IdType $id_type id_type
     *
     * @return self
     */
    public function setIdType(?IdType $id_type) : self
    {
        $this->container['id_type'] = $id_type;

        return $this;
    }

    /**
     * Gets id_value.
     *
     * @return null|string
     */
    public function getIdValue() : ?string
    {
        return $this->container['id_value'];
    }

    /**
     * Sets id_value.
     *
     * @param null|string $id_value the item identifier
     *
     * @return self
     */
    public function setIdValue(?string $id_value) : self
    {
        $this->container['id_value'] = $id_value;

        return $this;
    }

    /**
     * Gets is_amazon_fulfilled.
     *
     * @return null|bool
     */
    public function getIsAmazonFulfilled() : ?bool
    {
        return $this->container['is_amazon_fulfilled'];
    }

    /**
     * Sets is_amazon_fulfilled.
     *
     * @param null|bool $is_amazon_fulfilled when true, the offer is fulfilled by Amazon
     *
     * @return self
     */
    public function setIsAmazonFulfilled(?bool $is_amazon_fulfilled) : self
    {
        $this->container['is_amazon_fulfilled'] = $is_amazon_fulfilled;

        return $this;
    }

    /**
     * Gets price_to_estimate_fees.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductFees\PriceToEstimateFees
     */
    public function getPriceToEstimateFees() : ?PriceToEstimateFees
    {
        return $this->container['price_to_estimate_fees'];
    }

    /**
     * Sets price_to_estimate_fees.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductFees\PriceToEstimateFees $price_to_estimate_fees price_to_estimate_fees
     *
     * @return self
     */
    public function setPriceToEstimateFees(?PriceToEstimateFees $price_to_estimate_fees) : self
    {
        $this->container['price_to_estimate_fees'] = $price_to_estimate_fees;

        return $this;
    }

    /**
     * Gets seller_input_identifier.
     *
     * @return null|string
     */
    public function getSellerInputIdentifier() : ?string
    {
        return $this->container['seller_input_identifier'];
    }

    /**
     * Sets seller_input_identifier.
     *
     * @param null|string $seller_input_identifier a unique identifier provided by the caller to track this request
     *
     * @return self
     */
    public function setSellerInputIdentifier(?string $seller_input_identifier) : self
    {
        $this->container['seller_input_identifier'] = $seller_input_identifier;

        return $this;
    }

    /**
     * Gets optional_fulfillment_program.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductFees\OptionalFulfillmentProgram
     */
    public function getOptionalFulfillmentProgram() : ?OptionalFulfillmentProgram
    {
        return $this->container['optional_fulfillment_program'];
    }

    /**
     * Sets optional_fulfillment_program.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductFees\OptionalFulfillmentProgram $optional_fulfillment_program optional_fulfillment_program
     *
     * @return self
     */
    public function setOptionalFulfillmentProgram(?OptionalFulfillmentProgram $optional_fulfillment_program) : self
    {
        $this->container['optional_fulfillment_program'] = $optional_fulfillment_program;

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
