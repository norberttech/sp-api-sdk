<?php declare(strict_types=1);
/**
 * GetEligibleShipmentServicesResult.
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
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

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
class GetEligibleShipmentServicesResult implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'GetEligibleShipmentServicesResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'shipping_service_list' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingService[]',
        'rejected_shipping_service_list' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\RejectedShippingService[]',
        'temporarily_unavailable_carrier_list' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\TemporarilyUnavailableCarrier[]',
        'terms_and_conditions_not_accepted_carrier_list' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\TermsAndConditionsNotAcceptedCarrier[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'shipping_service_list' => null,
        'rejected_shipping_service_list' => null,
        'temporarily_unavailable_carrier_list' => null,
        'terms_and_conditions_not_accepted_carrier_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipping_service_list' => 'ShippingServiceList',
        'rejected_shipping_service_list' => 'RejectedShippingServiceList',
        'temporarily_unavailable_carrier_list' => 'TemporarilyUnavailableCarrierList',
        'terms_and_conditions_not_accepted_carrier_list' => 'TermsAndConditionsNotAcceptedCarrierList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipping_service_list' => 'setShippingServiceList',
        'rejected_shipping_service_list' => 'setRejectedShippingServiceList',
        'temporarily_unavailable_carrier_list' => 'setTemporarilyUnavailableCarrierList',
        'terms_and_conditions_not_accepted_carrier_list' => 'setTermsAndConditionsNotAcceptedCarrierList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipping_service_list' => 'getShippingServiceList',
        'rejected_shipping_service_list' => 'getRejectedShippingServiceList',
        'temporarily_unavailable_carrier_list' => 'getTemporarilyUnavailableCarrierList',
        'terms_and_conditions_not_accepted_carrier_list' => 'getTermsAndConditionsNotAcceptedCarrierList',
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
        $this->container['shipping_service_list'] = $data['shipping_service_list'] ?? null;
        $this->container['rejected_shipping_service_list'] = $data['rejected_shipping_service_list'] ?? null;
        $this->container['temporarily_unavailable_carrier_list'] = $data['temporarily_unavailable_carrier_list'] ?? null;
        $this->container['terms_and_conditions_not_accepted_carrier_list'] = $data['terms_and_conditions_not_accepted_carrier_list'] ?? null;
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

        if ($this->container['shipping_service_list'] === null) {
            $invalidProperties[] = "'shipping_service_list' can't be null";
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
     * Gets shipping_service_list.
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingService[]
     */
    public function getShippingServiceList() : array
    {
        return $this->container['shipping_service_list'];
    }

    /**
     * Sets shipping_service_list.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingService[] $shipping_service_list a list of shipping services offers
     */
    public function setShippingServiceList(array $shipping_service_list) : self
    {
        $this->container['shipping_service_list'] = $shipping_service_list;

        return $this;
    }

    /**
     * Gets rejected_shipping_service_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\RejectedShippingService[]
     */
    public function getRejectedShippingServiceList() : ?array
    {
        return $this->container['rejected_shipping_service_list'];
    }

    /**
     * Sets rejected_shipping_service_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\RejectedShippingService[] $rejected_shipping_service_list List of services that were for some reason unavailable for this request
     */
    public function setRejectedShippingServiceList(?array $rejected_shipping_service_list) : self
    {
        $this->container['rejected_shipping_service_list'] = $rejected_shipping_service_list;

        return $this;
    }

    /**
     * Gets temporarily_unavailable_carrier_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\TemporarilyUnavailableCarrier[]
     */
    public function getTemporarilyUnavailableCarrierList() : ?array
    {
        return $this->container['temporarily_unavailable_carrier_list'];
    }

    /**
     * Sets temporarily_unavailable_carrier_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\TemporarilyUnavailableCarrier[] $temporarily_unavailable_carrier_list a list of temporarily unavailable carriers
     */
    public function setTemporarilyUnavailableCarrierList(?array $temporarily_unavailable_carrier_list) : self
    {
        $this->container['temporarily_unavailable_carrier_list'] = $temporarily_unavailable_carrier_list;

        return $this;
    }

    /**
     * Gets terms_and_conditions_not_accepted_carrier_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\TermsAndConditionsNotAcceptedCarrier[]
     */
    public function getTermsAndConditionsNotAcceptedCarrierList() : ?array
    {
        return $this->container['terms_and_conditions_not_accepted_carrier_list'];
    }

    /**
     * Sets terms_and_conditions_not_accepted_carrier_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\MerchantFulfillment\TermsAndConditionsNotAcceptedCarrier[] $terms_and_conditions_not_accepted_carrier_list list of carriers whose terms and conditions were not accepted by the seller
     */
    public function setTermsAndConditionsNotAcceptedCarrierList(?array $terms_and_conditions_not_accepted_carrier_list) : self
    {
        $this->container['terms_and_conditions_not_accepted_carrier_list'] = $terms_and_conditions_not_accepted_carrier_list;

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
