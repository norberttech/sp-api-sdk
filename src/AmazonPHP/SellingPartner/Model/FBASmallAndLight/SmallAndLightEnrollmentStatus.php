<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FBASmallAndLight;

/**
 * Selling Partner API for FBA Small And Light.
 *
 * The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class SmallAndLightEnrollmentStatus
{
    /**
     * Possible values of this enum.
     */
    final public const ENROLLED = 'ENROLLED';

    final public const NOT_ENROLLED = 'NOT_ENROLLED';

    public function __construct(private readonly string $value)
    {
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::ENROLLED,
            self::NOT_ENROLLED,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
