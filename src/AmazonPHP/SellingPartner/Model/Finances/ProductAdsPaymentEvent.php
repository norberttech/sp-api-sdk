<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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
class ProductAdsPaymentEvent implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ProductAdsPaymentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'posted_date' => '\DateTimeInterface',
        'transaction_type' => 'string',
        'invoice_id' => 'string',
        'base_value' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'tax_value' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'transaction_value' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
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
        'posted_date' => 'date-time',
        'transaction_type' => null,
        'invoice_id' => null,
        'base_value' => null,
        'tax_value' => null,
        'transaction_value' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'posted_date' => 'postedDate',
        'transaction_type' => 'transactionType',
        'invoice_id' => 'invoiceId',
        'base_value' => 'baseValue',
        'tax_value' => 'taxValue',
        'transaction_value' => 'transactionValue',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'posted_date' => 'setPostedDate',
        'transaction_type' => 'setTransactionType',
        'invoice_id' => 'setInvoiceId',
        'base_value' => 'setBaseValue',
        'tax_value' => 'setTaxValue',
        'transaction_value' => 'setTransactionValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'posted_date' => 'getPostedDate',
        'transaction_type' => 'getTransactionType',
        'invoice_id' => 'getInvoiceId',
        'base_value' => 'getBaseValue',
        'tax_value' => 'getTaxValue',
        'transaction_value' => 'getTransactionValue',
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['invoice_id'] = $data['invoice_id'] ?? null;
        $this->container['base_value'] = $data['base_value'] ?? null;
        $this->container['tax_value'] = $data['tax_value'] ?? null;
        $this->container['transaction_value'] = $data['transaction_value'] ?? null;
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
        if ($this->container['base_value'] !== null) {
            $this->container['base_value']->validate();
        }

        if ($this->container['tax_value'] !== null) {
            $this->container['tax_value']->validate();
        }

        if ($this->container['transaction_value'] !== null) {
            $this->container['transaction_value']->validate();
        }
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
     */
    public function setPostedDate(?\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets transaction_type.
     *
     * @return null|string
     */
    public function getTransactionType() : ?string
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type.
     *
     * @param null|string $transaction_type Indicates if the transaction is for a charge or a refund.  Possible values:  * charge - Charge  * refund - Refund
     */
    public function setTransactionType(?string $transaction_type) : self
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets invoice_id.
     *
     * @return null|string
     */
    public function getInvoiceId() : ?string
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id.
     *
     * @param null|string $invoice_id identifier for the invoice that the transaction appears in
     */
    public function setInvoiceId(?string $invoice_id) : self
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets base_value.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getBaseValue() : ?Currency
    {
        return $this->container['base_value'];
    }

    /**
     * Sets base_value.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $base_value base_value
     */
    public function setBaseValue(?Currency $base_value) : self
    {
        $this->container['base_value'] = $base_value;

        return $this;
    }

    /**
     * Gets tax_value.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getTaxValue() : ?Currency
    {
        return $this->container['tax_value'];
    }

    /**
     * Sets tax_value.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $tax_value tax_value
     */
    public function setTaxValue(?Currency $tax_value) : self
    {
        $this->container['tax_value'] = $tax_value;

        return $this;
    }

    /**
     * Gets transaction_value.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getTransactionValue() : ?Currency
    {
        return $this->container['transaction_value'];
    }

    /**
     * Sets transaction_value.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $transaction_value transaction_value
     */
    public function setTransactionValue(?Currency $transaction_value) : self
    {
        $this->container['transaction_value'] = $transaction_value;

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
