<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ProductPricing;

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class QuantityDiscountType
{
    /**
     * Possible values of this enum.
     */
    public const QUANTITY_DISCOUNT = 'QUANTITY_DISCOUNT';

    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::QUANTITY_DISCOUNT,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
