<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
class EventCode
{
    /**
     * Possible values of this enum.
     */
    public const _101 = 'EVENT_101';

    public const _102 = 'EVENT_102';

    public const _201 = 'EVENT_201';

    public const _202 = 'EVENT_202';

    public const _203 = 'EVENT_203';

    public const _204 = 'EVENT_204';

    public const _205 = 'EVENT_205';

    public const _206 = 'EVENT_206';

    public const _301 = 'EVENT_301';

    public const _302 = 'EVENT_302';

    public const _304 = 'EVENT_304';

    public const _306 = 'EVENT_306';

    public const _307 = 'EVENT_307';

    public const _308 = 'EVENT_308';

    public const _309 = 'EVENT_309';

    public const _401 = 'EVENT_401';

    public const _402 = 'EVENT_402';

    public const _403 = 'EVENT_403';

    public const _404 = 'EVENT_404';

    public const _405 = 'EVENT_405';

    public const _406 = 'EVENT_406';

    public const _407 = 'EVENT_407';

    public const _408 = 'EVENT_408';

    public const _409 = 'EVENT_409';

    public const _411 = 'EVENT_411';

    public const _412 = 'EVENT_412';

    public const _413 = 'EVENT_413';

    public const _414 = 'EVENT_414';

    public const _415 = 'EVENT_415';

    public const _416 = 'EVENT_416';

    public const _417 = 'EVENT_417';

    public const _418 = 'EVENT_418';

    public const _419 = 'EVENT_419';

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
            self::_101,
            self::_102,
            self::_201,
            self::_202,
            self::_203,
            self::_204,
            self::_205,
            self::_206,
            self::_301,
            self::_302,
            self::_304,
            self::_306,
            self::_307,
            self::_308,
            self::_309,
            self::_401,
            self::_402,
            self::_403,
            self::_404,
            self::_405,
            self::_406,
            self::_407,
            self::_408,
            self::_409,
            self::_411,
            self::_412,
            self::_413,
            self::_414,
            self::_415,
            self::_416,
            self::_417,
            self::_418,
            self::_419,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
