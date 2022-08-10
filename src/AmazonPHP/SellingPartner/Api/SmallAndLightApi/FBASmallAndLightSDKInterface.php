<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\SmallAndLightApi;

use AmazonPHP\SellingPartner\AccessToken;
use Psr\Http\Message\RequestInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
interface FBASmallAndLightSDKInterface
{
    public const API_NAME = 'FBASmallAndLight';

    public const OPERATION_DELETESMALLANDLIGHTENROLLMENTBYSELLERSKU = 'deleteSmallAndLightEnrollmentBySellerSKU';

    public const OPERATION_DELETESMALLANDLIGHTENROLLMENTBYSELLERSKU_PATH = '/fba/smallAndLight/v1/enrollments/{sellerSKU}';

    public const OPERATION_GETSMALLANDLIGHTELIGIBILITYBYSELLERSKU = 'getSmallAndLightEligibilityBySellerSKU';

    public const OPERATION_GETSMALLANDLIGHTELIGIBILITYBYSELLERSKU_PATH = '/fba/smallAndLight/v1/eligibilities/{sellerSKU}';

    public const OPERATION_GETSMALLANDLIGHTENROLLMENTBYSELLERSKU = 'getSmallAndLightEnrollmentBySellerSKU';

    public const OPERATION_GETSMALLANDLIGHTENROLLMENTBYSELLERSKU_PATH = '/fba/smallAndLight/v1/enrollments/{sellerSKU}';

    public const OPERATION_GETSMALLANDLIGHTFEEPREVIEW = 'getSmallAndLightFeePreview';

    public const OPERATION_GETSMALLANDLIGHTFEEPREVIEW_PATH = '/fba/smallAndLight/v1/feePreviews';

    public const OPERATION_PUTSMALLANDLIGHTENROLLMENTBYSELLERSKU = 'putSmallAndLightEnrollmentBySellerSKU';

    public const OPERATION_PUTSMALLANDLIGHTENROLLMENTBYSELLERSKU_PATH = '/fba/smallAndLight/v1/enrollments/{sellerSKU}';

    /**
     * Operation deleteSmallAndLightEnrollmentBySellerSKU.
     *
     * @param AccessToken $accessToken
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function deleteSmallAndLightEnrollmentBySellerSKU(AccessToken $accessToken, string $region, string $seller_sku, array $marketplace_ids);

    /**
     * Create request for operation 'deleteSmallAndLightEnrollmentBySellerSKU'.
     *
     * @param AccessToken $accessToken
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function deleteSmallAndLightEnrollmentBySellerSKURequest(AccessToken $accessToken, string $region, string $seller_sku, array $marketplace_ids) : RequestInterface;

    /**
     * Operation getSmallAndLightEligibilityBySellerSKU.
     *
     * @param AccessToken $accessToken
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FBASmallAndLight\SmallAndLightEligibility
     */
    public function getSmallAndLightEligibilityBySellerSKU(AccessToken $accessToken, string $region, string $seller_sku, array $marketplace_ids);

    /**
     * Create request for operation 'getSmallAndLightEligibilityBySellerSKU'.
     *
     * @param AccessToken $accessToken
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getSmallAndLightEligibilityBySellerSKURequest(AccessToken $accessToken, string $region, string $seller_sku, array $marketplace_ids) : RequestInterface;

    /**
     * Operation getSmallAndLightEnrollmentBySellerSKU.
     *
     * @param AccessToken $accessToken
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FBASmallAndLight\SmallAndLightEnrollment
     */
    public function getSmallAndLightEnrollmentBySellerSKU(AccessToken $accessToken, string $region, string $seller_sku, array $marketplace_ids);

    /**
     * Create request for operation 'getSmallAndLightEnrollmentBySellerSKU'.
     *
     * @param AccessToken $accessToken
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getSmallAndLightEnrollmentBySellerSKURequest(AccessToken $accessToken, string $region, string $seller_sku, array $marketplace_ids) : RequestInterface;

    /**
     * Operation getSmallAndLightFeePreview.
     *
     * @param AccessToken $accessToken
     * @param \AmazonPHP\SellingPartner\Model\FBASmallAndLight\SmallAndLightFeePreviewRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FBASmallAndLight\SmallAndLightFeePreviews
     */
    public function getSmallAndLightFeePreview(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\FBASmallAndLight\SmallAndLightFeePreviewRequest $body);

    /**
     * Create request for operation 'getSmallAndLightFeePreview'.
     *
     * @param AccessToken $accessToken
     * @param \AmazonPHP\SellingPartner\Model\FBASmallAndLight\SmallAndLightFeePreviewRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getSmallAndLightFeePreviewRequest(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\FBASmallAndLight\SmallAndLightFeePreviewRequest $body) : RequestInterface;

    /**
     * Operation putSmallAndLightEnrollmentBySellerSKU.
     *
     * @param AccessToken $accessToken
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to enroll the item. Note: Accepts a single marketplace only. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FBASmallAndLight\SmallAndLightEnrollment
     */
    public function putSmallAndLightEnrollmentBySellerSKU(AccessToken $accessToken, string $region, string $seller_sku, array $marketplace_ids);

    /**
     * Create request for operation 'putSmallAndLightEnrollmentBySellerSKU'.
     *
     * @param AccessToken $accessToken
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to enroll the item. Note: Accepts a single marketplace only. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function putSmallAndLightEnrollmentBySellerSKURequest(AccessToken $accessToken, string $region, string $seller_sku, array $marketplace_ids) : RequestInterface;
}
