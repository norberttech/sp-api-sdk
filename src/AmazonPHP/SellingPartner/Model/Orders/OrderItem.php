<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Orders;

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
class OrderItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const DEEMED_RESELLER_CATEGORY_IOSS = 'IOSS';

    public const DEEMED_RESELLER_CATEGORY_UOSS = 'UOSS';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'OrderItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'asin' => 'string',
        'seller_sku' => 'string',
        'order_item_id' => 'string',
        'title' => 'string',
        'quantity_ordered' => 'int',
        'quantity_shipped' => 'int',
        'product_info' => '\AmazonPHP\SellingPartner\Model\Orders\ProductInfoDetail',
        'points_granted' => '\AmazonPHP\SellingPartner\Model\Orders\PointsGrantedDetail',
        'item_price' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'shipping_price' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'item_tax' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'shipping_tax' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'shipping_discount' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'shipping_discount_tax' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'promotion_discount' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'promotion_discount_tax' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'promotion_ids' => 'string[]',
        'cod_fee' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'cod_fee_discount' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'is_gift' => 'bool',
        'condition_note' => 'string',
        'condition_id' => 'string',
        'condition_subtype_id' => 'string',
        'scheduled_delivery_start_date' => 'string',
        'scheduled_delivery_end_date' => 'string',
        'price_designation' => 'string',
        'tax_collection' => '\AmazonPHP\SellingPartner\Model\Orders\TaxCollection',
        'serial_number_required' => 'bool',
        'is_transparency' => 'bool',
        'ioss_number' => 'string',
        'store_chain_store_id' => 'string',
        'deemed_reseller_category' => 'string',
        'buyer_info' => '\AmazonPHP\SellingPartner\Model\Orders\ItemBuyerInfo',
        'buyer_requested_cancel' => '\AmazonPHP\SellingPartner\Model\Orders\BuyerRequestedCancel',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'asin' => null,
        'seller_sku' => null,
        'order_item_id' => null,
        'title' => null,
        'quantity_ordered' => null,
        'quantity_shipped' => null,
        'product_info' => null,
        'points_granted' => null,
        'item_price' => null,
        'shipping_price' => null,
        'item_tax' => null,
        'shipping_tax' => null,
        'shipping_discount' => null,
        'shipping_discount_tax' => null,
        'promotion_discount' => null,
        'promotion_discount_tax' => null,
        'promotion_ids' => null,
        'cod_fee' => null,
        'cod_fee_discount' => null,
        'is_gift' => null,
        'condition_note' => null,
        'condition_id' => null,
        'condition_subtype_id' => null,
        'scheduled_delivery_start_date' => null,
        'scheduled_delivery_end_date' => null,
        'price_designation' => null,
        'tax_collection' => null,
        'serial_number_required' => null,
        'is_transparency' => null,
        'ioss_number' => null,
        'store_chain_store_id' => null,
        'deemed_reseller_category' => null,
        'buyer_info' => null,
        'buyer_requested_cancel' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'asin' => 'ASIN',
        'seller_sku' => 'SellerSKU',
        'order_item_id' => 'OrderItemId',
        'title' => 'Title',
        'quantity_ordered' => 'QuantityOrdered',
        'quantity_shipped' => 'QuantityShipped',
        'product_info' => 'ProductInfo',
        'points_granted' => 'PointsGranted',
        'item_price' => 'ItemPrice',
        'shipping_price' => 'ShippingPrice',
        'item_tax' => 'ItemTax',
        'shipping_tax' => 'ShippingTax',
        'shipping_discount' => 'ShippingDiscount',
        'shipping_discount_tax' => 'ShippingDiscountTax',
        'promotion_discount' => 'PromotionDiscount',
        'promotion_discount_tax' => 'PromotionDiscountTax',
        'promotion_ids' => 'PromotionIds',
        'cod_fee' => 'CODFee',
        'cod_fee_discount' => 'CODFeeDiscount',
        'is_gift' => 'IsGift',
        'condition_note' => 'ConditionNote',
        'condition_id' => 'ConditionId',
        'condition_subtype_id' => 'ConditionSubtypeId',
        'scheduled_delivery_start_date' => 'ScheduledDeliveryStartDate',
        'scheduled_delivery_end_date' => 'ScheduledDeliveryEndDate',
        'price_designation' => 'PriceDesignation',
        'tax_collection' => 'TaxCollection',
        'serial_number_required' => 'SerialNumberRequired',
        'is_transparency' => 'IsTransparency',
        'ioss_number' => 'IossNumber',
        'store_chain_store_id' => 'StoreChainStoreId',
        'deemed_reseller_category' => 'DeemedResellerCategory',
        'buyer_info' => 'BuyerInfo',
        'buyer_requested_cancel' => 'BuyerRequestedCancel',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'asin' => 'setAsin',
        'seller_sku' => 'setSellerSku',
        'order_item_id' => 'setOrderItemId',
        'title' => 'setTitle',
        'quantity_ordered' => 'setQuantityOrdered',
        'quantity_shipped' => 'setQuantityShipped',
        'product_info' => 'setProductInfo',
        'points_granted' => 'setPointsGranted',
        'item_price' => 'setItemPrice',
        'shipping_price' => 'setShippingPrice',
        'item_tax' => 'setItemTax',
        'shipping_tax' => 'setShippingTax',
        'shipping_discount' => 'setShippingDiscount',
        'shipping_discount_tax' => 'setShippingDiscountTax',
        'promotion_discount' => 'setPromotionDiscount',
        'promotion_discount_tax' => 'setPromotionDiscountTax',
        'promotion_ids' => 'setPromotionIds',
        'cod_fee' => 'setCodFee',
        'cod_fee_discount' => 'setCodFeeDiscount',
        'is_gift' => 'setIsGift',
        'condition_note' => 'setConditionNote',
        'condition_id' => 'setConditionId',
        'condition_subtype_id' => 'setConditionSubtypeId',
        'scheduled_delivery_start_date' => 'setScheduledDeliveryStartDate',
        'scheduled_delivery_end_date' => 'setScheduledDeliveryEndDate',
        'price_designation' => 'setPriceDesignation',
        'tax_collection' => 'setTaxCollection',
        'serial_number_required' => 'setSerialNumberRequired',
        'is_transparency' => 'setIsTransparency',
        'ioss_number' => 'setIossNumber',
        'store_chain_store_id' => 'setStoreChainStoreId',
        'deemed_reseller_category' => 'setDeemedResellerCategory',
        'buyer_info' => 'setBuyerInfo',
        'buyer_requested_cancel' => 'setBuyerRequestedCancel',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'asin' => 'getAsin',
        'seller_sku' => 'getSellerSku',
        'order_item_id' => 'getOrderItemId',
        'title' => 'getTitle',
        'quantity_ordered' => 'getQuantityOrdered',
        'quantity_shipped' => 'getQuantityShipped',
        'product_info' => 'getProductInfo',
        'points_granted' => 'getPointsGranted',
        'item_price' => 'getItemPrice',
        'shipping_price' => 'getShippingPrice',
        'item_tax' => 'getItemTax',
        'shipping_tax' => 'getShippingTax',
        'shipping_discount' => 'getShippingDiscount',
        'shipping_discount_tax' => 'getShippingDiscountTax',
        'promotion_discount' => 'getPromotionDiscount',
        'promotion_discount_tax' => 'getPromotionDiscountTax',
        'promotion_ids' => 'getPromotionIds',
        'cod_fee' => 'getCodFee',
        'cod_fee_discount' => 'getCodFeeDiscount',
        'is_gift' => 'getIsGift',
        'condition_note' => 'getConditionNote',
        'condition_id' => 'getConditionId',
        'condition_subtype_id' => 'getConditionSubtypeId',
        'scheduled_delivery_start_date' => 'getScheduledDeliveryStartDate',
        'scheduled_delivery_end_date' => 'getScheduledDeliveryEndDate',
        'price_designation' => 'getPriceDesignation',
        'tax_collection' => 'getTaxCollection',
        'serial_number_required' => 'getSerialNumberRequired',
        'is_transparency' => 'getIsTransparency',
        'ioss_number' => 'getIossNumber',
        'store_chain_store_id' => 'getStoreChainStoreId',
        'deemed_reseller_category' => 'getDeemedResellerCategory',
        'buyer_info' => 'getBuyerInfo',
        'buyer_requested_cancel' => 'getBuyerRequestedCancel',
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['order_item_id'] = $data['order_item_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['quantity_ordered'] = $data['quantity_ordered'] ?? null;
        $this->container['quantity_shipped'] = $data['quantity_shipped'] ?? null;
        $this->container['product_info'] = $data['product_info'] ?? null;
        $this->container['points_granted'] = $data['points_granted'] ?? null;
        $this->container['item_price'] = $data['item_price'] ?? null;
        $this->container['shipping_price'] = $data['shipping_price'] ?? null;
        $this->container['item_tax'] = $data['item_tax'] ?? null;
        $this->container['shipping_tax'] = $data['shipping_tax'] ?? null;
        $this->container['shipping_discount'] = $data['shipping_discount'] ?? null;
        $this->container['shipping_discount_tax'] = $data['shipping_discount_tax'] ?? null;
        $this->container['promotion_discount'] = $data['promotion_discount'] ?? null;
        $this->container['promotion_discount_tax'] = $data['promotion_discount_tax'] ?? null;
        $this->container['promotion_ids'] = $data['promotion_ids'] ?? null;
        $this->container['cod_fee'] = $data['cod_fee'] ?? null;
        $this->container['cod_fee_discount'] = $data['cod_fee_discount'] ?? null;
        $this->container['is_gift'] = $data['is_gift'] ?? null;
        $this->container['condition_note'] = $data['condition_note'] ?? null;
        $this->container['condition_id'] = $data['condition_id'] ?? null;
        $this->container['condition_subtype_id'] = $data['condition_subtype_id'] ?? null;
        $this->container['scheduled_delivery_start_date'] = $data['scheduled_delivery_start_date'] ?? null;
        $this->container['scheduled_delivery_end_date'] = $data['scheduled_delivery_end_date'] ?? null;
        $this->container['price_designation'] = $data['price_designation'] ?? null;
        $this->container['tax_collection'] = $data['tax_collection'] ?? null;
        $this->container['serial_number_required'] = $data['serial_number_required'] ?? null;
        $this->container['is_transparency'] = $data['is_transparency'] ?? null;
        $this->container['ioss_number'] = $data['ioss_number'] ?? null;
        $this->container['store_chain_store_id'] = $data['store_chain_store_id'] ?? null;
        $this->container['deemed_reseller_category'] = $data['deemed_reseller_category'] ?? null;
        $this->container['buyer_info'] = $data['buyer_info'] ?? null;
        $this->container['buyer_requested_cancel'] = $data['buyer_requested_cancel'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getDeemedResellerCategoryAllowableValues() : array
    {
        return [
            self::DEEMED_RESELLER_CATEGORY_IOSS,
            self::DEEMED_RESELLER_CATEGORY_UOSS,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['asin'] === null) {
            throw new AssertionException("'asin' can't be null");
        }

        if ($this->container['order_item_id'] === null) {
            throw new AssertionException("'order_item_id' can't be null");
        }

        if ($this->container['quantity_ordered'] === null) {
            throw new AssertionException("'quantity_ordered' can't be null");
        }

        if ($this->container['product_info'] !== null) {
            $this->container['product_info']->validate();
        }

        if ($this->container['points_granted'] !== null) {
            $this->container['points_granted']->validate();
        }

        if ($this->container['item_price'] !== null) {
            $this->container['item_price']->validate();
        }

        if ($this->container['shipping_price'] !== null) {
            $this->container['shipping_price']->validate();
        }

        if ($this->container['item_tax'] !== null) {
            $this->container['item_tax']->validate();
        }

        if ($this->container['shipping_tax'] !== null) {
            $this->container['shipping_tax']->validate();
        }

        if ($this->container['shipping_discount'] !== null) {
            $this->container['shipping_discount']->validate();
        }

        if ($this->container['shipping_discount_tax'] !== null) {
            $this->container['shipping_discount_tax']->validate();
        }

        if ($this->container['promotion_discount'] !== null) {
            $this->container['promotion_discount']->validate();
        }

        if ($this->container['promotion_discount_tax'] !== null) {
            $this->container['promotion_discount_tax']->validate();
        }

        if ($this->container['cod_fee'] !== null) {
            $this->container['cod_fee']->validate();
        }

        if ($this->container['cod_fee_discount'] !== null) {
            $this->container['cod_fee_discount']->validate();
        }

        if ($this->container['tax_collection'] !== null) {
            $this->container['tax_collection']->validate();
        }

        $allowedValues = $this->getDeemedResellerCategoryAllowableValues();

        if (null !== $this->container['deemed_reseller_category'] && !\in_array($this->container['deemed_reseller_category'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'deemed_reseller_category', must be one of '%s'",
                    $this->container['deemed_reseller_category'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['buyer_info'] !== null) {
            $this->container['buyer_info']->validate();
        }

        if ($this->container['buyer_requested_cancel'] !== null) {
            $this->container['buyer_requested_cancel']->validate();
        }
    }

    /**
     * Gets asin.
     */
    public function getAsin() : string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin the Amazon Standard Identification Number (ASIN) of the item
     *
     * @return self
     */
    public function setAsin(string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets seller_sku.
     *
     * @return null|string
     */
    public function getSellerSku() : ?string
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param null|string $seller_sku the seller stock keeping unit (SKU) of the item
     *
     * @return self
     */
    public function setSellerSku(?string $seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets order_item_id.
     */
    public function getOrderItemId() : string
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id.
     *
     * @param string $order_item_id an Amazon-defined order item identifier
     *
     * @return self
     */
    public function setOrderItemId(string $order_item_id) : self
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets title.
     *
     * @return null|string
     */
    public function getTitle() : ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param null|string $title the name of the item
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets quantity_ordered.
     */
    public function getQuantityOrdered() : int
    {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered.
     *
     * @param int $quantity_ordered the number of items in the order
     *
     * @return self
     */
    public function setQuantityOrdered(int $quantity_ordered) : self
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }

    /**
     * Gets quantity_shipped.
     *
     * @return null|int
     */
    public function getQuantityShipped() : ?int
    {
        return $this->container['quantity_shipped'];
    }

    /**
     * Sets quantity_shipped.
     *
     * @param null|int $quantity_shipped the number of items shipped
     *
     * @return self
     */
    public function setQuantityShipped(?int $quantity_shipped) : self
    {
        $this->container['quantity_shipped'] = $quantity_shipped;

        return $this;
    }

    /**
     * Gets product_info.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\ProductInfoDetail
     */
    public function getProductInfo() : ?ProductInfoDetail
    {
        return $this->container['product_info'];
    }

    /**
     * Sets product_info.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\ProductInfoDetail $product_info product_info
     *
     * @return self
     */
    public function setProductInfo(?ProductInfoDetail $product_info) : self
    {
        $this->container['product_info'] = $product_info;

        return $this;
    }

    /**
     * Gets points_granted.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\PointsGrantedDetail
     */
    public function getPointsGranted() : ?PointsGrantedDetail
    {
        return $this->container['points_granted'];
    }

    /**
     * Sets points_granted.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\PointsGrantedDetail $points_granted points_granted
     *
     * @return self
     */
    public function setPointsGranted(?PointsGrantedDetail $points_granted) : self
    {
        $this->container['points_granted'] = $points_granted;

        return $this;
    }

    /**
     * Gets item_price.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\Money
     */
    public function getItemPrice() : ?Money
    {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $item_price item_price
     *
     * @return self
     */
    public function setItemPrice(?Money $item_price) : self
    {
        $this->container['item_price'] = $item_price;

        return $this;
    }

    /**
     * Gets shipping_price.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\Money
     */
    public function getShippingPrice() : ?Money
    {
        return $this->container['shipping_price'];
    }

    /**
     * Sets shipping_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $shipping_price shipping_price
     *
     * @return self
     */
    public function setShippingPrice(?Money $shipping_price) : self
    {
        $this->container['shipping_price'] = $shipping_price;

        return $this;
    }

    /**
     * Gets item_tax.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\Money
     */
    public function getItemTax() : ?Money
    {
        return $this->container['item_tax'];
    }

    /**
     * Sets item_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $item_tax item_tax
     *
     * @return self
     */
    public function setItemTax(?Money $item_tax) : self
    {
        $this->container['item_tax'] = $item_tax;

        return $this;
    }

    /**
     * Gets shipping_tax.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\Money
     */
    public function getShippingTax() : ?Money
    {
        return $this->container['shipping_tax'];
    }

    /**
     * Sets shipping_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $shipping_tax shipping_tax
     *
     * @return self
     */
    public function setShippingTax(?Money $shipping_tax) : self
    {
        $this->container['shipping_tax'] = $shipping_tax;

        return $this;
    }

    /**
     * Gets shipping_discount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\Money
     */
    public function getShippingDiscount() : ?Money
    {
        return $this->container['shipping_discount'];
    }

    /**
     * Sets shipping_discount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $shipping_discount shipping_discount
     *
     * @return self
     */
    public function setShippingDiscount(?Money $shipping_discount) : self
    {
        $this->container['shipping_discount'] = $shipping_discount;

        return $this;
    }

    /**
     * Gets shipping_discount_tax.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\Money
     */
    public function getShippingDiscountTax() : ?Money
    {
        return $this->container['shipping_discount_tax'];
    }

    /**
     * Sets shipping_discount_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $shipping_discount_tax shipping_discount_tax
     *
     * @return self
     */
    public function setShippingDiscountTax(?Money $shipping_discount_tax) : self
    {
        $this->container['shipping_discount_tax'] = $shipping_discount_tax;

        return $this;
    }

    /**
     * Gets promotion_discount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\Money
     */
    public function getPromotionDiscount() : ?Money
    {
        return $this->container['promotion_discount'];
    }

    /**
     * Sets promotion_discount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $promotion_discount promotion_discount
     *
     * @return self
     */
    public function setPromotionDiscount(?Money $promotion_discount) : self
    {
        $this->container['promotion_discount'] = $promotion_discount;

        return $this;
    }

    /**
     * Gets promotion_discount_tax.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\Money
     */
    public function getPromotionDiscountTax() : ?Money
    {
        return $this->container['promotion_discount_tax'];
    }

    /**
     * Sets promotion_discount_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $promotion_discount_tax promotion_discount_tax
     *
     * @return self
     */
    public function setPromotionDiscountTax(?Money $promotion_discount_tax) : self
    {
        $this->container['promotion_discount_tax'] = $promotion_discount_tax;

        return $this;
    }

    /**
     * Gets promotion_ids.
     *
     * @return null|string[]
     */
    public function getPromotionIds() : ?array
    {
        return $this->container['promotion_ids'];
    }

    /**
     * Sets promotion_ids.
     *
     * @param null|string[] $promotion_ids a list of promotion identifiers provided by the seller when the promotions were created
     *
     * @return self
     */
    public function setPromotionIds(?array $promotion_ids) : self
    {
        $this->container['promotion_ids'] = $promotion_ids;

        return $this;
    }

    /**
     * Gets cod_fee.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\Money
     */
    public function getCodFee() : ?Money
    {
        return $this->container['cod_fee'];
    }

    /**
     * Sets cod_fee.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $cod_fee cod_fee
     *
     * @return self
     */
    public function setCodFee(?Money $cod_fee) : self
    {
        $this->container['cod_fee'] = $cod_fee;

        return $this;
    }

    /**
     * Gets cod_fee_discount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\Money
     */
    public function getCodFeeDiscount() : ?Money
    {
        return $this->container['cod_fee_discount'];
    }

    /**
     * Sets cod_fee_discount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $cod_fee_discount cod_fee_discount
     *
     * @return self
     */
    public function setCodFeeDiscount(?Money $cod_fee_discount) : self
    {
        $this->container['cod_fee_discount'] = $cod_fee_discount;

        return $this;
    }

    /**
     * Gets is_gift.
     *
     * @return null|bool
     */
    public function getIsGift() : ?bool
    {
        return $this->container['is_gift'];
    }

    /**
     * Sets is_gift.
     *
     * @param null|bool $is_gift when true, the item is a gift
     *
     * @return self
     */
    public function setIsGift(?bool $is_gift) : self
    {
        $this->container['is_gift'] = $is_gift;

        return $this;
    }

    /**
     * Gets condition_note.
     *
     * @return null|string
     */
    public function getConditionNote() : ?string
    {
        return $this->container['condition_note'];
    }

    /**
     * Sets condition_note.
     *
     * @param null|string $condition_note the condition of the item as described by the seller
     *
     * @return self
     */
    public function setConditionNote(?string $condition_note) : self
    {
        $this->container['condition_note'] = $condition_note;

        return $this;
    }

    /**
     * Gets condition_id.
     *
     * @return null|string
     */
    public function getConditionId() : ?string
    {
        return $this->container['condition_id'];
    }

    /**
     * Sets condition_id.
     *
     * @param null|string $condition_id The condition of the item.  Possible values: New, Used, Collectible, Refurbished, Preorder, Club.
     *
     * @return self
     */
    public function setConditionId(?string $condition_id) : self
    {
        $this->container['condition_id'] = $condition_id;

        return $this;
    }

    /**
     * Gets condition_subtype_id.
     *
     * @return null|string
     */
    public function getConditionSubtypeId() : ?string
    {
        return $this->container['condition_subtype_id'];
    }

    /**
     * Sets condition_subtype_id.
     *
     * @param null|string $condition_subtype_id The subcondition of the item.  Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, Any, Other.
     *
     * @return self
     */
    public function setConditionSubtypeId(?string $condition_subtype_id) : self
    {
        $this->container['condition_subtype_id'] = $condition_subtype_id;

        return $this;
    }

    /**
     * Gets scheduled_delivery_start_date.
     *
     * @return null|string
     */
    public function getScheduledDeliveryStartDate() : ?string
    {
        return $this->container['scheduled_delivery_start_date'];
    }

    /**
     * Sets scheduled_delivery_start_date.
     *
     * @param null|string $scheduled_delivery_start_date The start date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format.
     *
     * @return self
     */
    public function setScheduledDeliveryStartDate(?string $scheduled_delivery_start_date) : self
    {
        $this->container['scheduled_delivery_start_date'] = $scheduled_delivery_start_date;

        return $this;
    }

    /**
     * Gets scheduled_delivery_end_date.
     *
     * @return null|string
     */
    public function getScheduledDeliveryEndDate() : ?string
    {
        return $this->container['scheduled_delivery_end_date'];
    }

    /**
     * Sets scheduled_delivery_end_date.
     *
     * @param null|string $scheduled_delivery_end_date The end date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format.
     *
     * @return self
     */
    public function setScheduledDeliveryEndDate(?string $scheduled_delivery_end_date) : self
    {
        $this->container['scheduled_delivery_end_date'] = $scheduled_delivery_end_date;

        return $this;
    }

    /**
     * Gets price_designation.
     *
     * @return null|string
     */
    public function getPriceDesignation() : ?string
    {
        return $this->container['price_designation'];
    }

    /**
     * Sets price_designation.
     *
     * @param null|string $price_designation Indicates that the selling price is a special price that is available only for Amazon Business orders. For more information about the Amazon Business Seller Program, see the [Amazon Business website](https://www.amazon.com/b2b/info/amazon-business).   Possible values: BusinessPrice - A special price that is available only for Amazon Business orders.
     *
     * @return self
     */
    public function setPriceDesignation(?string $price_designation) : self
    {
        $this->container['price_designation'] = $price_designation;

        return $this;
    }

    /**
     * Gets tax_collection.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\TaxCollection
     */
    public function getTaxCollection() : ?TaxCollection
    {
        return $this->container['tax_collection'];
    }

    /**
     * Sets tax_collection.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\TaxCollection $tax_collection tax_collection
     *
     * @return self
     */
    public function setTaxCollection(?TaxCollection $tax_collection) : self
    {
        $this->container['tax_collection'] = $tax_collection;

        return $this;
    }

    /**
     * Gets serial_number_required.
     *
     * @return null|bool
     */
    public function getSerialNumberRequired() : ?bool
    {
        return $this->container['serial_number_required'];
    }

    /**
     * Sets serial_number_required.
     *
     * @param null|bool $serial_number_required When true, the product type for this item has a serial number.  Returned only for Amazon Easy Ship orders.
     *
     * @return self
     */
    public function setSerialNumberRequired(?bool $serial_number_required) : self
    {
        $this->container['serial_number_required'] = $serial_number_required;

        return $this;
    }

    /**
     * Gets is_transparency.
     *
     * @return null|bool
     */
    public function getIsTransparency() : ?bool
    {
        return $this->container['is_transparency'];
    }

    /**
     * Sets is_transparency.
     *
     * @param null|bool $is_transparency when true, transparency codes are required
     *
     * @return self
     */
    public function setIsTransparency(?bool $is_transparency) : self
    {
        $this->container['is_transparency'] = $is_transparency;

        return $this;
    }

    /**
     * Gets ioss_number.
     *
     * @return null|string
     */
    public function getIossNumber() : ?string
    {
        return $this->container['ioss_number'];
    }

    /**
     * Sets ioss_number.
     *
     * @param null|string $ioss_number The IOSS number for the marketplace. Sellers shipping to the European Union (EU) from outside of the EU must provide this IOSS number to their carrier when Amazon has collected the VAT on the sale.
     *
     * @return self
     */
    public function setIossNumber(?string $ioss_number) : self
    {
        $this->container['ioss_number'] = $ioss_number;

        return $this;
    }

    /**
     * Gets store_chain_store_id.
     *
     * @return null|string
     */
    public function getStoreChainStoreId() : ?string
    {
        return $this->container['store_chain_store_id'];
    }

    /**
     * Sets store_chain_store_id.
     *
     * @param null|string $store_chain_store_id The store chain store identifier. Linked to a specific store in a store chain.
     *
     * @return self
     */
    public function setStoreChainStoreId(?string $store_chain_store_id) : self
    {
        $this->container['store_chain_store_id'] = $store_chain_store_id;

        return $this;
    }

    /**
     * Gets deemed_reseller_category.
     *
     * @return null|string
     */
    public function getDeemedResellerCategory() : ?string
    {
        return $this->container['deemed_reseller_category'];
    }

    /**
     * Sets deemed_reseller_category.
     *
     * @param null|string $deemed_reseller_category The category of deemed reseller. This applies to selling partners that are not based in the EU and is used to help them meet the VAT Deemed Reseller tax laws in the EU and UK.
     *
     * @return self
     */
    public function setDeemedResellerCategory(?string $deemed_reseller_category) : self
    {
        $this->container['deemed_reseller_category'] = $deemed_reseller_category;

        return $this;
    }

    /**
     * Gets buyer_info.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\ItemBuyerInfo
     */
    public function getBuyerInfo() : ?ItemBuyerInfo
    {
        return $this->container['buyer_info'];
    }

    /**
     * Sets buyer_info.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\ItemBuyerInfo $buyer_info buyer_info
     *
     * @return self
     */
    public function setBuyerInfo(?ItemBuyerInfo $buyer_info) : self
    {
        $this->container['buyer_info'] = $buyer_info;

        return $this;
    }

    /**
     * Gets buyer_requested_cancel.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\BuyerRequestedCancel
     */
    public function getBuyerRequestedCancel() : ?BuyerRequestedCancel
    {
        return $this->container['buyer_requested_cancel'];
    }

    /**
     * Sets buyer_requested_cancel.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\BuyerRequestedCancel $buyer_requested_cancel buyer_requested_cancel
     *
     * @return self
     */
    public function setBuyerRequestedCancel(?BuyerRequestedCancel $buyer_requested_cancel) : self
    {
        $this->container['buyer_requested_cancel'] = $buyer_requested_cancel;

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
