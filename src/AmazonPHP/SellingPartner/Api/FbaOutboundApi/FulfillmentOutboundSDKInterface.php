<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\FbaOutboundApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use Psr\Http\Message\RequestInterface;

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 *
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface FulfillmentOutboundSDKInterface
{
    public const API_NAME = 'FulfillmentOutbound';

    public const OPERATION_CANCELFULFILLMENTORDER = 'cancelFulfillmentOrder';

    public const OPERATION_CANCELFULFILLMENTORDER_PATH = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/cancel';

    public const OPERATION_CREATEFULFILLMENTORDER = 'createFulfillmentOrder';

    public const OPERATION_CREATEFULFILLMENTORDER_PATH = '/fba/outbound/2020-07-01/fulfillmentOrders';

    public const OPERATION_CREATEFULFILLMENTRETURN = 'createFulfillmentReturn';

    public const OPERATION_CREATEFULFILLMENTRETURN_PATH = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/return';

    public const OPERATION_GETFEATUREINVENTORY = 'getFeatureInventory';

    public const OPERATION_GETFEATUREINVENTORY_PATH = '/fba/outbound/2020-07-01/features/inventory/{featureName}';

    public const OPERATION_GETFEATURESKU = 'getFeatureSKU';

    public const OPERATION_GETFEATURESKU_PATH = '/fba/outbound/2020-07-01/features/inventory/{featureName}/{sellerSku}';

    public const OPERATION_GETFEATURES = 'getFeatures';

    public const OPERATION_GETFEATURES_PATH = '/fba/outbound/2020-07-01/features';

    public const OPERATION_GETFULFILLMENTORDER = 'getFulfillmentOrder';

    public const OPERATION_GETFULFILLMENTORDER_PATH = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}';

    public const OPERATION_GETFULFILLMENTPREVIEW = 'getFulfillmentPreview';

    public const OPERATION_GETFULFILLMENTPREVIEW_PATH = '/fba/outbound/2020-07-01/fulfillmentOrders/preview';

    public const OPERATION_GETPACKAGETRACKINGDETAILS = 'getPackageTrackingDetails';

    public const OPERATION_GETPACKAGETRACKINGDETAILS_PATH = '/fba/outbound/2020-07-01/tracking';

    public const OPERATION_LISTALLFULFILLMENTORDERS = 'listAllFulfillmentOrders';

    public const OPERATION_LISTALLFULFILLMENTORDERS_PATH = '/fba/outbound/2020-07-01/fulfillmentOrders';

    public const OPERATION_LISTRETURNREASONCODES = 'listReturnReasonCodes';

    public const OPERATION_LISTRETURNREASONCODES_PATH = '/fba/outbound/2020-07-01/returnReasonCodes';

    public const OPERATION_UPDATEFULFILLMENTORDER = 'updateFulfillmentOrder';

    public const OPERATION_UPDATEFULFILLMENTORDER_PATH = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}';

    /**
     * Operation cancelFulfillmentOrder.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CancelFulfillmentOrderResponse
     */
    public function cancelFulfillmentOrder(AccessToken $accessToken, string $region, string $seller_fulfillment_order_id);

    /**
     * Create request for operation 'cancelFulfillmentOrder'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function cancelFulfillmentOrderRequest(AccessToken $accessToken, string $region, string $seller_fulfillment_order_id) : RequestInterface;

    /**
     * Operation createFulfillmentOrder.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentOrderRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentOrderResponse
     */
    public function createFulfillmentOrder(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentOrderRequest $body);

    /**
     * Create request for operation 'createFulfillmentOrder'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentOrderRequest $body (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function createFulfillmentOrderRequest(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentOrderRequest $body) : RequestInterface;

    /**
     * Operation createFulfillmentReturn.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $seller_fulfillment_order_id An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer&#39;s request to return items. (required)
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentReturnRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentReturnResponse
     */
    public function createFulfillmentReturn(AccessToken $accessToken, string $region, string $seller_fulfillment_order_id, \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentReturnRequest $body);

    /**
     * Create request for operation 'createFulfillmentReturn'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $seller_fulfillment_order_id An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer&#39;s request to return items. (required)
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentReturnRequest $body (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function createFulfillmentReturnRequest(AccessToken $accessToken, string $region, string $seller_fulfillment_order_id, \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentReturnRequest $body) : RequestInterface;

    /**
     * Operation getFeatureInventory.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $marketplace_id The marketplace for which to return a list of the inventory that is eligible for the specified feature. (required)
     * @param string $feature_name The name of the feature for which to return a list of eligible inventory. (required)
     * @param null|string $next_token A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFeatureInventoryResponse
     */
    public function getFeatureInventory(AccessToken $accessToken, string $region, string $marketplace_id, string $feature_name, ?string $next_token = null);

    /**
     * Create request for operation 'getFeatureInventory'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $marketplace_id The marketplace for which to return a list of the inventory that is eligible for the specified feature. (required)
     * @param string $feature_name The name of the feature for which to return a list of eligible inventory. (required)
     * @param null|string $next_token A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getFeatureInventoryRequest(AccessToken $accessToken, string $region, string $marketplace_id, string $feature_name, ?string $next_token = null) : RequestInterface;

    /**
     * Operation getFeatureSKU.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $marketplace_id The marketplace for which to return the count. (required)
     * @param string $feature_name The name of the feature. (required)
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFeatureSkuResponse
     */
    public function getFeatureSKU(AccessToken $accessToken, string $region, string $marketplace_id, string $feature_name, string $seller_sku);

    /**
     * Create request for operation 'getFeatureSKU'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $marketplace_id The marketplace for which to return the count. (required)
     * @param string $feature_name The name of the feature. (required)
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getFeatureSKURequest(AccessToken $accessToken, string $region, string $marketplace_id, string $feature_name, string $seller_sku) : RequestInterface;

    /**
     * Operation getFeatures.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $marketplace_id The marketplace for which to return the list of features. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFeaturesResponse
     */
    public function getFeatures(AccessToken $accessToken, string $region, string $marketplace_id);

    /**
     * Create request for operation 'getFeatures'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $marketplace_id The marketplace for which to return the list of features. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getFeaturesRequest(AccessToken $accessToken, string $region, string $marketplace_id) : RequestInterface;

    /**
     * Operation getFulfillmentOrder.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentOrderResponse
     */
    public function getFulfillmentOrder(AccessToken $accessToken, string $region, string $seller_fulfillment_order_id);

    /**
     * Create request for operation 'getFulfillmentOrder'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getFulfillmentOrderRequest(AccessToken $accessToken, string $region, string $seller_fulfillment_order_id) : RequestInterface;

    /**
     * Operation getFulfillmentPreview.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewResponse
     */
    public function getFulfillmentPreview(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewRequest $body);

    /**
     * Create request for operation 'getFulfillmentPreview'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewRequest $body (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getFulfillmentPreviewRequest(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewRequest $body) : RequestInterface;

    /**
     * Operation getPackageTrackingDetails.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param int $package_number The unencrypted package identifier returned by the getFulfillmentOrder operation. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetPackageTrackingDetailsResponse
     */
    public function getPackageTrackingDetails(AccessToken $accessToken, string $region, int $package_number);

    /**
     * Create request for operation 'getPackageTrackingDetails'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param int $package_number The unencrypted package identifier returned by the getFulfillmentOrder operation. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getPackageTrackingDetailsRequest(AccessToken $accessToken, string $region, int $package_number) : RequestInterface;

    /**
     * Operation listAllFulfillmentOrders.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param null|\DateTimeInterface $query_start_date A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order. (optional)
     * @param null|string $next_token A string token returned in the response to your previous request. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ListAllFulfillmentOrdersResponse
     */
    public function listAllFulfillmentOrders(AccessToken $accessToken, string $region, ?\DateTimeInterface $query_start_date = null, ?string $next_token = null);

    /**
     * Create request for operation 'listAllFulfillmentOrders'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param null|\DateTimeInterface $query_start_date A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order. (optional)
     * @param null|string $next_token A string token returned in the response to your previous request. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function listAllFulfillmentOrdersRequest(AccessToken $accessToken, string $region, ?\DateTimeInterface $query_start_date = null, ?string $next_token = null) : RequestInterface;

    /**
     * Operation listReturnReasonCodes.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $seller_sku The seller SKU for which return reason codes are required. (required)
     * @param string $language The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into. (required)
     * @param null|string $marketplace_id The marketplace for which the seller wants return reason codes. (optional)
     * @param null|string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ListReturnReasonCodesResponse
     */
    public function listReturnReasonCodes(AccessToken $accessToken, string $region, string $seller_sku, string $language, ?string $marketplace_id = null, ?string $seller_fulfillment_order_id = null);

    /**
     * Create request for operation 'listReturnReasonCodes'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $seller_sku The seller SKU for which return reason codes are required. (required)
     * @param string $language The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into. (required)
     * @param null|string $marketplace_id The marketplace for which the seller wants return reason codes. (optional)
     * @param null|string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function listReturnReasonCodesRequest(AccessToken $accessToken, string $region, string $seller_sku, string $language, ?string $marketplace_id = null, ?string $seller_fulfillment_order_id = null) : RequestInterface;

    /**
     * Operation updateFulfillmentOrder.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UpdateFulfillmentOrderRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UpdateFulfillmentOrderResponse
     */
    public function updateFulfillmentOrder(AccessToken $accessToken, string $region, string $seller_fulfillment_order_id, \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UpdateFulfillmentOrderRequest $body);

    /**
     * Create request for operation 'updateFulfillmentOrder'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UpdateFulfillmentOrderRequest $body (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function updateFulfillmentOrderRequest(AccessToken $accessToken, string $region, string $seller_fulfillment_order_id, \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UpdateFulfillmentOrderRequest $body) : RequestInterface;
}
