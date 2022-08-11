<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorTransactionApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Direct Fulfillment Transaction Status.
 *
 * The Selling Partner API for Direct Fulfillment Transaction Status provides programmatic access to a direct fulfillment vendor's transaction status.
 *
 * The version of the OpenAPI document: 2021-12-28
 *
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface VendorDirectFulfillmentTransactionsSDKInterface
{
    public const API_NAME = 'VendorDirectFulfillmentTransactions';

    public const OPERATION_GETTRANSACTIONSTATUS = 'getTransactionStatus';

    public const OPERATION_GETTRANSACTIONSTATUS_PATH = '/vendor/directFulfillment/transactions/2021-12-28/transactions/{transactionId}';

    /**
     * Operation getTransactionStatus.
     *
     * @param string $transaction_id Previously returned in the response to the POST request of a specific transaction. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentTransactions\TransactionStatus
     */
    public function getTransactionStatus(AccessToken $accessToken, string $region, string $transaction_id) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentTransactions\TransactionStatus;
}
