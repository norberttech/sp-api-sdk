<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

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
class TrialShipmentEvent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'TrialShipmentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'amazon_order_id' => 'string',
        'financial_event_group_id' => 'string',
        'posted_date' => '\DateTimeInterface',
        'sku' => 'string',
        'fee_list' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'amazon_order_id' => null,
        'financial_event_group_id' => null,
        'posted_date' => 'date-time',
        'sku' => null,
        'fee_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'amazon_order_id' => 'AmazonOrderId',
        'financial_event_group_id' => 'FinancialEventGroupId',
        'posted_date' => 'PostedDate',
        'sku' => 'SKU',
        'fee_list' => 'FeeList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'financial_event_group_id' => 'setFinancialEventGroupId',
        'posted_date' => 'setPostedDate',
        'sku' => 'setSku',
        'fee_list' => 'setFeeList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'financial_event_group_id' => 'getFinancialEventGroupId',
        'posted_date' => 'getPostedDate',
        'sku' => 'getSku',
        'fee_list' => 'getFeeList',
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
        $this->container['financial_event_group_id'] = $data['financial_event_group_id'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['fee_list'] = $data['fee_list'] ?? null;
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
    }

    /**
     * Gets amazon_order_id.
     *
     * @return null|string
     */
    public function getAmazonOrderId() : ?string
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param null|string $amazon_order_id an Amazon-defined identifier for an order
     *
     * @return self
     */
    public function setAmazonOrderId(?string $amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets financial_event_group_id.
     *
     * @return null|string
     */
    public function getFinancialEventGroupId() : ?string
    {
        return $this->container['financial_event_group_id'];
    }

    /**
     * Sets financial_event_group_id.
     *
     * @param null|string $financial_event_group_id the identifier of the financial event group
     *
     * @return self
     */
    public function setFinancialEventGroupId(?string $financial_event_group_id) : self
    {
        $this->container['financial_event_group_id'] = $financial_event_group_id;

        return $this;
    }

    /**
     * Gets posted_date.
     *
     * @return null|\DateTimeInterface
     */
    public function getPostedDate() : ?\DateTimeInterface
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param null|\DateTimeInterface $posted_date posted_date
     *
     * @return self
     */
    public function setPostedDate(?\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets sku.
     *
     * @return null|string
     */
    public function getSku() : ?string
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku.
     *
     * @param null|string $sku The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     *
     * @return self
     */
    public function setSku(?string $sku) : self
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets fee_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]
     */
    public function getFeeList() : ?array
    {
        return $this->container['fee_list'];
    }

    /**
     * Sets fee_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[] $fee_list a list of fee component information
     *
     * @return self
     */
    public function setFeeList(?array $fee_list) : self
    {
        $this->container['fee_list'] = $fee_list;

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
