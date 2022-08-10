<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\MessagingApi;

use AmazonPHP\SellingPartner\AccessToken;
use Psr\Http\Message\RequestInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
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
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmCustomizationDetailsRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmCustomizationDetailsResponse
     */
    public function confirmCustomizationDetails(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmCustomizationDetailsRequest $body);

    /**
     * Create request for operation 'confirmCustomizationDetails'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmCustomizationDetailsRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function confirmCustomizationDetailsRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmCustomizationDetailsRequest $body) : RequestInterface;

    /**
     * Operation createAmazonMotors.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateAmazonMotorsRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateAmazonMotorsResponse
     */
    public function createAmazonMotors(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateAmazonMotorsRequest $body);

    /**
     * Create request for operation 'createAmazonMotors'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateAmazonMotorsRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function createAmazonMotorsRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateAmazonMotorsRequest $body) : RequestInterface;

    /**
     * Operation createConfirmDeliveryDetails.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmDeliveryDetailsRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmDeliveryDetailsResponse
     */
    public function createConfirmDeliveryDetails(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmDeliveryDetailsRequest $body);

    /**
     * Create request for operation 'createConfirmDeliveryDetails'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmDeliveryDetailsRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function createConfirmDeliveryDetailsRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmDeliveryDetailsRequest $body) : RequestInterface;

    /**
     * Operation createConfirmOrderDetails.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmOrderDetailsRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmOrderDetailsResponse
     */
    public function createConfirmOrderDetails(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmOrderDetailsRequest $body);

    /**
     * Create request for operation 'createConfirmOrderDetails'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmOrderDetailsRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function createConfirmOrderDetailsRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmOrderDetailsRequest $body) : RequestInterface;

    /**
     * Operation createConfirmServiceDetails.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmServiceDetailsRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmServiceDetailsResponse
     */
    public function createConfirmServiceDetails(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmServiceDetailsRequest $body);

    /**
     * Create request for operation 'createConfirmServiceDetails'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmServiceDetailsRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function createConfirmServiceDetailsRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateConfirmServiceDetailsRequest $body) : RequestInterface;

    /**
     * Operation createDigitalAccessKey.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateDigitalAccessKeyRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateDigitalAccessKeyResponse
     */
    public function createDigitalAccessKey(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateDigitalAccessKeyRequest $body);

    /**
     * Create request for operation 'createDigitalAccessKey'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateDigitalAccessKeyRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function createDigitalAccessKeyRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateDigitalAccessKeyRequest $body) : RequestInterface;

    /**
     * Operation createLegalDisclosure.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateLegalDisclosureRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateLegalDisclosureResponse
     */
    public function createLegalDisclosure(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateLegalDisclosureRequest $body);

    /**
     * Create request for operation 'createLegalDisclosure'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateLegalDisclosureRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function createLegalDisclosureRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateLegalDisclosureRequest $body) : RequestInterface;

    /**
     * Operation createNegativeFeedbackRemoval.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateNegativeFeedbackRemovalResponse
     */
    public function createNegativeFeedbackRemoval(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids);

    /**
     * Create request for operation 'createNegativeFeedbackRemoval'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function createNegativeFeedbackRemovalRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : RequestInterface;

    /**
     * Operation createUnexpectedProblem.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateUnexpectedProblemRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateUnexpectedProblemResponse
     */
    public function createUnexpectedProblem(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateUnexpectedProblemRequest $body);

    /**
     * Create request for operation 'createUnexpectedProblem'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateUnexpectedProblemRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function createUnexpectedProblemRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateUnexpectedProblemRequest $body) : RequestInterface;

    /**
     * Operation createWarranty.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateWarrantyRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\CreateWarrantyResponse
     */
    public function createWarranty(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateWarrantyRequest $body);

    /**
     * Create request for operation 'createWarranty'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\CreateWarrantyRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function createWarrantyRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\CreateWarrantyRequest $body) : RequestInterface;

    /**
     * Operation getAttributes.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\GetAttributesResponse
     */
    public function getAttributes(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids);

    /**
     * Create request for operation 'getAttributes'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getAttributesRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : RequestInterface;

    /**
     * Operation getMessagingActionsForOrder.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available message types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\GetMessagingActionsForOrderResponse
     */
    public function getMessagingActionsForOrder(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids);

    /**
     * Create request for operation 'getMessagingActionsForOrder'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available message types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getMessagingActionsForOrderRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids) : RequestInterface;

    /**
     * Operation sendInvoice.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\InvoiceRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Messaging\InvoiceResponse
     */
    public function sendInvoice(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\InvoiceRequest $body);

    /**
     * Create request for operation 'sendInvoice'.
     *
     * @param AccessToken $accessToken
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a message is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     * @param \AmazonPHP\SellingPartner\Model\Messaging\InvoiceRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function sendInvoiceRequest(AccessToken $accessToken, string $region, string $amazon_order_id, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\Messaging\InvoiceRequest $body) : RequestInterface;
}
