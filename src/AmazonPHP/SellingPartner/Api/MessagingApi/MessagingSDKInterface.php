<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\MessagingApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Messaging.
 *
 * With the Messaging API you can build applications that send messages to buyers. You can get a list of message types that are available for an order that you specify, then call an operation that sends a message to the buyer for that order. The Messaging API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface MessagingSDKInterface
{
    public const API_NAME = 'Messaging';

    public const OPERATION_CONFIRMCUSTOMIZATIONDETAILS = 'confirmCustomizationDetails';

    public const OPERATION_CONFIRMCUSTOMIZATIONDETAILS_PATH = '/messaging/v1/orders/{amazonOrderId}/messages/confirmCustomizationDetails';

    public const OPERATION_CREATEAMAZONMOTORS = 'createAmazonMotors';

    public const OPERATION_CREATEAMAZONMOTORS_PATH = '/messaging/v1/orders/{amazonOrderId}/messages/amazonMotors';

    public const OPERATION_CREATECONFIRMDELIVERYDETAILS = 'createConfirmDeliveryDetails';

    public const OPERATION_CREATECONFIRMDELIVERYDETAILS_PATH = '/messaging/v1/orders/{amazonOrderId}/messages/confirmDeliveryDetails';

    public const OPERATION_CREATECONFIRMORDERDETAILS = 'createConfirmOrderDetails';

    public const OPERATION_CREATECONFIRMORDERDETAILS_PATH = '/messaging/v1/orders/{amazonOrderId}/messages/confirmOrderDetails';

    public const OPERATION_CREATECONFIRMSERVICEDETAILS = 'createConfirmServiceDetails';

    public const OPERATION_CREATECONFIRMSERVICEDETAILS_PATH = '/messaging/v1/orders/{amazonOrderId}/messages/confirmServiceDetails';

    public const OPERATION_CREATEDIGITALACCESSKEY = 'createDigitalAccessKey';

    public const OPERATION_CREATEDIGITALACCESSKEY_PATH = '/messaging/v1/orders/{amazonOrderId}/messages/digitalAccessKey';

    public const OPERATION_CREATELEGALDISCLOSURE = 'createLegalDisclosure';

    public const OPERATION_CREATELEGALDISCLOSURE_PATH = '/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure';

    public const OPERATION_CREATENEGATIVEFEEDBACKREMOVAL = 'createNegativeFeedbackRemoval';

    public const OPERATION_CREATENEGATIVEFEEDBACKREMOVAL_PATH = '/messaging/v1/orders/{amazonOrderId}/messages/negativeFeedbackRemoval';

    public const OPERATION_CREATEUNEXPECTEDPROBLEM = 'createUnexpectedProblem';

    public const OPERATION_CREATEUNEXPECTEDPROBLEM_PATH = '/messaging/v1/orders/{amazonOrderId}/messages/unexpectedProblem';

    public const OPERATION_CREATEWARRANTY = 'createWarranty';

    public const OPERATION_CREATEWARRANTY_PATH = '/messaging/v1/orders/{amazonOrderId}/messages/warranty';

    public const OPERATION_GETATTRIBUTES = 'getAttributes';

    public const OPERATION_GETATTRIBUTES_PATH = '/messaging/v1/orders/{amazonOrderId}/attributes';

    public const OPERATION_GETMESSAGINGACTIONSFORORDER = 'getMessagingActionsForOrder';

    public const OPERATION_GETMESSAGINGACTIONSFORORDER_PATH = '/messaging/v1/orders/{amazonOrderId}';

    public const OPERATION_SENDINVOICE = 'sendInvoice';

    public const OPERATION_SENDINVOICE_PATH = '/messaging/v1/orders/{amazonOrderId}/messages/invoice';

    /**
     * Operation confirmCustomizationDetails.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmCustomizationDetailsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmCustomizationDetailsResponse
     */
    public function confirmCustomizationDetails(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmCustomizationDetailsRequest $body) : \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmCustomizationDetailsResponse;

    /**
     * Operation createAmazonMotors.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateAmazonMotorsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateAmazonMotorsResponse
     */
    public function createAmazonMotors(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateAmazonMotorsRequest $body) : \AmazonPHP\SellingPartner\Model\Messaging\CreateAmazonMotorsResponse;

    /**
     * Operation createConfirmDeliveryDetails.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmDeliveryDetailsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmDeliveryDetailsResponse
     */
    public function createConfirmDeliveryDetails(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmDeliveryDetailsRequest $body) : \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmDeliveryDetailsResponse;

    /**
     * Operation createConfirmOrderDetails.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmOrderDetailsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmOrderDetailsResponse
     */
    public function createConfirmOrderDetails(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmOrderDetailsRequest $body) : \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmOrderDetailsResponse;

    /**
     * Operation createConfirmServiceDetails.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmServiceDetailsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmServiceDetailsResponse
     */
    public function createConfirmServiceDetails(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmServiceDetailsRequest $body) : \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmServiceDetailsResponse;

    /**
     * Operation createDigitalAccessKey.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateDigitalAccessKeyRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateDigitalAccessKeyResponse
     */
    public function createDigitalAccessKey(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateDigitalAccessKeyRequest $body) : \AmazonPHP\SellingPartner\Model\Messaging\CreateDigitalAccessKeyResponse;

    /**
     * Operation createLegalDisclosure.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateLegalDisclosureRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateLegalDisclosureResponse
     */
    public function createLegalDisclosure(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateLegalDisclosureRequest $body) : \AmazonPHP\SellingPartner\Model\Messaging\CreateLegalDisclosureResponse;

    /**
     * Operation createNegativeFeedbackRemoval.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateNegativeFeedbackRemovalResponse
     */
    public function createNegativeFeedbackRemoval(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : \AmazonPHP\SellingPartner\Model\Messaging\CreateNegativeFeedbackRemovalResponse;

    /**
     * Operation createUnexpectedProblem.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateUnexpectedProblemRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateUnexpectedProblemResponse
     */
    public function createUnexpectedProblem(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateUnexpectedProblemRequest $body) : \AmazonPHP\SellingPartner\Model\Messaging\CreateUnexpectedProblemResponse;

    /**
     * Operation createWarranty.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateWarrantyRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateWarrantyResponse
     */
    public function createWarranty(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateWarrantyRequest $body) : \AmazonPHP\SellingPartner\Model\Messaging\CreateWarrantyResponse;

    /**
     * Operation getAttributes.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\GetAttributesResponse
     */
    public function getAttributes(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : \AmazonPHP\SellingPartner\Model\Messaging\GetAttributesResponse;

    /**
     * Operation getMessagingActionsForOrder.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available message types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\GetMessagingActionsForOrderResponse
     */
    public function getMessagingActionsForOrder(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : \AmazonPHP\SellingPartner\Model\Messaging\GetMessagingActionsForOrderResponse;

    /**
     * Operation sendInvoice.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\InvoiceRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\InvoiceResponse
     */
    public function sendInvoice(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\InvoiceRequest $body) : \AmazonPHP\SellingPartner\Model\Messaging\InvoiceResponse;
}
