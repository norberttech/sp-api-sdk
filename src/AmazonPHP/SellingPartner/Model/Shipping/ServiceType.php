<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Shipping;

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class ServiceType
{
    /**
     * Possible values of this enum.
     */
    public const GROUND = 'Amazon Shipping Ground';

    public const STANDARD = 'Amazon Shipping Standard';

    public const PREMIUM = 'Amazon Shipping Premium';

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
            self::GROUND,
            self::STANDARD,
            self::PREMIUM,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
