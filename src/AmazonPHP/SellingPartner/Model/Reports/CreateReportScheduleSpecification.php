<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Reports;

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
class CreateReportScheduleSpecification implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const PERIOD_PT5_M = 'PT5M';

    public const PERIOD_PT15_M = 'PT15M';

    public const PERIOD_PT30_M = 'PT30M';

    public const PERIOD_PT1_H = 'PT1H';

    public const PERIOD_PT2_H = 'PT2H';

    public const PERIOD_PT4_H = 'PT4H';

    public const PERIOD_PT8_H = 'PT8H';

    public const PERIOD_PT12_H = 'PT12H';

    public const PERIOD_P1_D = 'P1D';

    public const PERIOD_P2_D = 'P2D';

    public const PERIOD_P3_D = 'P3D';

    public const PERIOD_PT84_H = 'PT84H';

    public const PERIOD_P7_D = 'P7D';

    public const PERIOD_P14_D = 'P14D';

    public const PERIOD_P15_D = 'P15D';

    public const PERIOD_P18_D = 'P18D';

    public const PERIOD_P30_D = 'P30D';

    public const PERIOD_P1_M = 'P1M';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CreateReportScheduleSpecification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'report_type' => 'string',
        'marketplace_ids' => 'string[]',
        'report_options' => 'array<string,string>',
        'period' => 'string',
        'next_report_creation_time' => '\DateTimeInterface',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'report_type' => null,
        'marketplace_ids' => null,
        'report_options' => null,
        'period' => null,
        'next_report_creation_time' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'report_type' => 'reportType',
        'marketplace_ids' => 'marketplaceIds',
        'report_options' => 'reportOptions',
        'period' => 'period',
        'next_report_creation_time' => 'nextReportCreationTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'report_type' => 'setReportType',
        'marketplace_ids' => 'setMarketplaceIds',
        'report_options' => 'setReportOptions',
        'period' => 'setPeriod',
        'next_report_creation_time' => 'setNextReportCreationTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'report_type' => 'getReportType',
        'marketplace_ids' => 'getMarketplaceIds',
        'report_options' => 'getReportOptions',
        'period' => 'getPeriod',
        'next_report_creation_time' => 'getNextReportCreationTime',
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
        $this->container['report_type'] = $data['report_type'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
        $this->container['report_options'] = $data['report_options'] ?? null;
        $this->container['period'] = $data['period'] ?? null;
        $this->container['next_report_creation_time'] = $data['next_report_creation_time'] ?? null;
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
    public function getPeriodAllowableValues() : array
    {
        return [
            self::PERIOD_PT5_M,
            self::PERIOD_PT15_M,
            self::PERIOD_PT30_M,
            self::PERIOD_PT1_H,
            self::PERIOD_PT2_H,
            self::PERIOD_PT4_H,
            self::PERIOD_PT8_H,
            self::PERIOD_PT12_H,
            self::PERIOD_P1_D,
            self::PERIOD_P2_D,
            self::PERIOD_P3_D,
            self::PERIOD_PT84_H,
            self::PERIOD_P7_D,
            self::PERIOD_P14_D,
            self::PERIOD_P15_D,
            self::PERIOD_P18_D,
            self::PERIOD_P30_D,
            self::PERIOD_P1_M,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['report_type'] === null) {
            throw new AssertionException("'report_type' can't be null");
        }

        if ($this->container['marketplace_ids'] === null) {
            throw new AssertionException("'marketplace_ids' can't be null");
        }

        if ((\count($this->container['marketplace_ids']) > 25)) {
            throw new AssertionException("invalid value for 'marketplace_ids', number of items must be less than or equal to 25.");
        }

        if ((\count($this->container['marketplace_ids']) < 1)) {
            throw new AssertionException("invalid value for 'marketplace_ids', number of items must be greater than or equal to 1.");
        }

        if ($this->container['period'] === null) {
            throw new AssertionException("'period' can't be null");
        }

        $allowedValues = $this->getPeriodAllowableValues();

        if (null !== $this->container['period'] && !\in_array($this->container['period'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'period', must be one of '%s'",
                    $this->container['period'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets report_type.
     */
    public function getReportType() : string
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type.
     *
     * @param string $report_type the report type
     *
     * @return self
     */
    public function setReportType(string $report_type) : self
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return string[]
     */
    public function getMarketplaceIds() : array
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param string[] $marketplace_ids a list of marketplace identifiers for the report schedule
     *
     * @return self
     */
    public function setMarketplaceIds(array $marketplace_ids) : self
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets report_options.
     *
     * @return null|array<string,string>
     */
    public function getReportOptions() : ?array
    {
        return $this->container['report_options'];
    }

    /**
     * Sets report_options.
     *
     * @param null|array<string,string> $report_options Additional information passed to reports. This varies by report type.
     *
     * @return self
     */
    public function setReportOptions(?array $report_options) : self
    {
        $this->container['report_options'] = $report_options;

        return $this;
    }

    /**
     * Gets period.
     */
    public function getPeriod() : string
    {
        return $this->container['period'];
    }

    /**
     * Sets period.
     *
     * @param string $period one of a set of predefined ISO 8601 periods that specifies how often a report should be created
     *
     * @return self
     */
    public function setPeriod(string $period) : self
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets next_report_creation_time.
     *
     * @return null|\DateTimeInterface
     */
    public function getNextReportCreationTime() : ?\DateTimeInterface
    {
        return $this->container['next_report_creation_time'];
    }

    /**
     * Sets next_report_creation_time.
     *
     * @param null|\DateTimeInterface $next_report_creation_time the date and time when the schedule will create its next report, in ISO 8601 date time format
     *
     * @return self
     */
    public function setNextReportCreationTime(?\DateTimeInterface $next_report_creation_time) : self
    {
        $this->container['next_report_creation_time'] = $next_report_creation_time;

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
