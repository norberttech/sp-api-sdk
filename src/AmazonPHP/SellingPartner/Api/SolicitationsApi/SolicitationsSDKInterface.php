<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\SolicitationsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use Psr\Http\Message\RequestInterface;

/**
 * Selling Partner API for Solicitations.
 *
 * With the Solicitations API you can build applications that send non-critical solicitations to buyers. You can get a list of solicitation types that are available for an order that you specify, then call an operation that sends a solicitation to the buyer for that order. Buyers cannot respond to solicitations sent by this API, and these solicitations do not appear in the Messaging section of Seller Central or in the recipient's Message Center. The Solicitations API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface SolicitationsSDKInterface
{
    public const API_NAME = 'Solicitations';

    public const OPERATION_CREATEPRODUCTREVIEWANDSELLERFEEDBACKSOLICITATION = 'createProductReviewAndSellerFeedbackSolicitation';

    public const OPERATION_CREATEPRODUCTREVIEWANDSELLERFEEDBACKSOLICITATION_PATH = '/solicitations/v1/orders/{amazonOrderId}/solicitations/productReviewAndSellerFeedback';

    public const OPERATION_GETSOLICITATIONACTIONSFORORDER = 'getSolicitationActionsForOrder';

    public const OPERATION_GETSOLICITATIONACTIONSFORORDER_PATH = '/solicitations/v1/orders/{amazonOrderId}';

    /**
     * Operation createProductReviewAndSellerFeedbackSolicitation.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a solicitation is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Solicitations\CreateProductReviewAndSellerFeedbackSolicitationResponse
     */
    public function createProductReviewAndSellerFeedbackSolicitation(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids);

    /**
     * Create request for operation 'createProductReviewAndSellerFeedbackSolicitation'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a solicitation is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function createProductReviewAndSellerFeedbackSolicitationRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : RequestInterface;

    /**
     * Operation getSolicitationActionsForOrder.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available solicitation types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Solicitations\GetSolicitationActionsForOrderResponse
     */
    public function getSolicitationActionsForOrder(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids);

    /**
     * Create request for operation 'getSolicitationActionsForOrder'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available solicitation types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getSolicitationActionsForOrderRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : RequestInterface;
}
