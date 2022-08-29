<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments;

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
class InvoiceDetail implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'InvoiceDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'invoice_number' => 'string',
        'invoice_date' => '\DateTimeInterface',
        'reference_number' => 'string',
        'remit_to_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification',
        'ship_from_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification',
        'bill_to_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification',
        'ship_to_country_code' => 'string',
        'payment_terms_code' => 'string',
        'invoice_total' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\Money',
        'tax_totals' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxDetail[]',
        'additional_details' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\AdditionalDetails[]',
        'charge_details' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\ChargeDetails[]',
        'items' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\InvoiceItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'invoice_number' => null,
        'invoice_date' => 'date-time',
        'reference_number' => null,
        'remit_to_party' => null,
        'ship_from_party' => null,
        'bill_to_party' => null,
        'ship_to_country_code' => null,
        'payment_terms_code' => null,
        'invoice_total' => null,
        'tax_totals' => null,
        'additional_details' => null,
        'charge_details' => null,
        'items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'invoice_number' => 'invoiceNumber',
        'invoice_date' => 'invoiceDate',
        'reference_number' => 'referenceNumber',
        'remit_to_party' => 'remitToParty',
        'ship_from_party' => 'shipFromParty',
        'bill_to_party' => 'billToParty',
        'ship_to_country_code' => 'shipToCountryCode',
        'payment_terms_code' => 'paymentTermsCode',
        'invoice_total' => 'invoiceTotal',
        'tax_totals' => 'taxTotals',
        'additional_details' => 'additionalDetails',
        'charge_details' => 'chargeDetails',
        'items' => 'items',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'invoice_number' => 'setInvoiceNumber',
        'invoice_date' => 'setInvoiceDate',
        'reference_number' => 'setReferenceNumber',
        'remit_to_party' => 'setRemitToParty',
        'ship_from_party' => 'setShipFromParty',
        'bill_to_party' => 'setBillToParty',
        'ship_to_country_code' => 'setShipToCountryCode',
        'payment_terms_code' => 'setPaymentTermsCode',
        'invoice_total' => 'setInvoiceTotal',
        'tax_totals' => 'setTaxTotals',
        'additional_details' => 'setAdditionalDetails',
        'charge_details' => 'setChargeDetails',
        'items' => 'setItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'invoice_number' => 'getInvoiceNumber',
        'invoice_date' => 'getInvoiceDate',
        'reference_number' => 'getReferenceNumber',
        'remit_to_party' => 'getRemitToParty',
        'ship_from_party' => 'getShipFromParty',
        'bill_to_party' => 'getBillToParty',
        'ship_to_country_code' => 'getShipToCountryCode',
        'payment_terms_code' => 'getPaymentTermsCode',
        'invoice_total' => 'getInvoiceTotal',
        'tax_totals' => 'getTaxTotals',
        'additional_details' => 'getAdditionalDetails',
        'charge_details' => 'getChargeDetails',
        'items' => 'getItems',
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
        $this->container['invoice_number'] = $data['invoice_number'] ?? null;
        $this->container['invoice_date'] = $data['invoice_date'] ?? null;
        $this->container['reference_number'] = $data['reference_number'] ?? null;
        $this->container['remit_to_party'] = $data['remit_to_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['bill_to_party'] = $data['bill_to_party'] ?? null;
        $this->container['ship_to_country_code'] = $data['ship_to_country_code'] ?? null;
        $this->container['payment_terms_code'] = $data['payment_terms_code'] ?? null;
        $this->container['invoice_total'] = $data['invoice_total'] ?? null;
        $this->container['tax_totals'] = $data['tax_totals'] ?? null;
        $this->container['additional_details'] = $data['additional_details'] ?? null;
        $this->container['charge_details'] = $data['charge_details'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
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
        if ($this->container['invoice_number'] === null) {
            throw new AssertionException("'invoice_number' can't be null");
        }

        if ($this->container['invoice_date'] === null) {
            throw new AssertionException("'invoice_date' can't be null");
        }

        if ($this->container['remit_to_party'] === null) {
            throw new AssertionException("'remit_to_party' can't be null");
        }

        $this->container['remit_to_party']->validate();

        if ($this->container['ship_from_party'] === null) {
            throw new AssertionException("'ship_from_party' can't be null");
        }

        $this->container['ship_from_party']->validate();

        if ($this->container['bill_to_party'] !== null) {
            $this->container['bill_to_party']->validate();
        }

        if ($this->container['invoice_total'] === null) {
            throw new AssertionException("'invoice_total' can't be null");
        }

        $this->container['invoice_total']->validate();

        if ($this->container['items'] === null) {
            throw new AssertionException("'items' can't be null");
        }
    }

    /**
     * Gets invoice_number.
     */
    public function getInvoiceNumber() : string
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number.
     *
     * @param string $invoice_number the unique invoice number
     *
     * @return self
     */
    public function setInvoiceNumber(string $invoice_number) : self
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_date.
     */
    public function getInvoiceDate() : \DateTimeInterface
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date.
     *
     * @param \DateTimeInterface $invoice_date invoice date
     *
     * @return self
     */
    public function setInvoiceDate(\DateTimeInterface $invoice_date) : self
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets reference_number.
     *
     * @return null|string
     */
    public function getReferenceNumber() : ?string
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number.
     *
     * @param null|string $reference_number an additional unique reference number used for regulatory or other purposes
     *
     * @return self
     */
    public function setReferenceNumber(?string $reference_number) : self
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets remit_to_party.
     */
    public function getRemitToParty() : PartyIdentification
    {
        return $this->container['remit_to_party'];
    }

    /**
     * Sets remit_to_party.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification $remit_to_party remit_to_party
     *
     * @return self
     */
    public function setRemitToParty(PartyIdentification $remit_to_party) : self
    {
        $this->container['remit_to_party'] = $remit_to_party;

        return $this;
    }

    /**
     * Gets ship_from_party.
     */
    public function getShipFromParty() : PartyIdentification
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty(PartyIdentification $ship_from_party) : self
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets bill_to_party.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification
     */
    public function getBillToParty() : ?PartyIdentification
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification $bill_to_party bill_to_party
     *
     * @return self
     */
    public function setBillToParty(?PartyIdentification $bill_to_party) : self
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }

    /**
     * Gets ship_to_country_code.
     *
     * @return null|string
     */
    public function getShipToCountryCode() : ?string
    {
        return $this->container['ship_to_country_code'];
    }

    /**
     * Sets ship_to_country_code.
     *
     * @param null|string $ship_to_country_code ship-to country code
     *
     * @return self
     */
    public function setShipToCountryCode(?string $ship_to_country_code) : self
    {
        $this->container['ship_to_country_code'] = $ship_to_country_code;

        return $this;
    }

    /**
     * Gets payment_terms_code.
     *
     * @return null|string
     */
    public function getPaymentTermsCode() : ?string
    {
        return $this->container['payment_terms_code'];
    }

    /**
     * Sets payment_terms_code.
     *
     * @param null|string $payment_terms_code the payment terms for the invoice
     *
     * @return self
     */
    public function setPaymentTermsCode(?string $payment_terms_code) : self
    {
        $this->container['payment_terms_code'] = $payment_terms_code;

        return $this;
    }

    /**
     * Gets invoice_total.
     */
    public function getInvoiceTotal() : Money
    {
        return $this->container['invoice_total'];
    }

    /**
     * Sets invoice_total.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\Money $invoice_total invoice_total
     *
     * @return self
     */
    public function setInvoiceTotal(Money $invoice_total) : self
    {
        $this->container['invoice_total'] = $invoice_total;

        return $this;
    }

    /**
     * Gets tax_totals.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxDetail[]
     */
    public function getTaxTotals() : ?array
    {
        return $this->container['tax_totals'];
    }

    /**
     * Sets tax_totals.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxDetail[] $tax_totals individual tax details per line item
     *
     * @return self
     */
    public function setTaxTotals(?array $tax_totals) : self
    {
        $this->container['tax_totals'] = $tax_totals;

        return $this;
    }

    /**
     * Gets additional_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\AdditionalDetails[]
     */
    public function getAdditionalDetails() : ?array
    {
        return $this->container['additional_details'];
    }

    /**
     * Sets additional_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\AdditionalDetails[] $additional_details additional details provided by the selling party, for tax related or other purposes
     *
     * @return self
     */
    public function setAdditionalDetails(?array $additional_details) : self
    {
        $this->container['additional_details'] = $additional_details;

        return $this;
    }

    /**
     * Gets charge_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\ChargeDetails[]
     */
    public function getChargeDetails() : ?array
    {
        return $this->container['charge_details'];
    }

    /**
     * Sets charge_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\ChargeDetails[] $charge_details total charge amount details for all line items
     *
     * @return self
     */
    public function setChargeDetails(?array $charge_details) : self
    {
        $this->container['charge_details'] = $charge_details;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\InvoiceItem[]
     */
    public function getItems() : array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\InvoiceItem[] $items provides the details of the items in this invoice
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->container['items'] = $items;

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
