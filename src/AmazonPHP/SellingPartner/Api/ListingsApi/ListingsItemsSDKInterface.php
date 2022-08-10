<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\ListingsApi;

use AmazonPHP\SellingPartner\AccessToken;
use Psr\Http\Message\RequestInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
interface ListingsItemsSDKInterface
{
    public const API_NAME = 'ListingsItems';

    public const OPERATION_DELETELISTINGSITEM = 'deleteListingsItem';

    public const OPERATION_DELETELISTINGSITEM_PATH = '/listings/2021-08-01/items/{sellerId}/{sku}';

    public const OPERATION_GETLISTINGSITEM = 'getListingsItem';

    public const OPERATION_GETLISTINGSITEM_PATH = '/listings/2021-08-01/items/{sellerId}/{sku}';

    public const OPERATION_PATCHLISTINGSITEM = 'patchListingsItem';

    public const OPERATION_PATCHLISTINGSITEM_PATH = '/listings/2021-08-01/items/{sellerId}/{sku}';

    public const OPERATION_PUTLISTINGSITEM = 'putListingsItem';

    public const OPERATION_PUTLISTINGSITEM_PATH = '/listings/2021-08-01/items/{sellerId}/{sku}';

    /**
     * Operation deleteListingsItem.
     *
     * @param AccessToken $accessToken
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemSubmissionResponse
     */
    public function deleteListingsItem(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, string $issue_locale = null);

    /**
     * Create request for operation 'deleteListingsItem'.
     *
     * @param AccessToken $accessToken
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function deleteListingsItemRequest(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, string $issue_locale = null) : RequestInterface;

    /**
     * Operation getListingsItem.
     *
     * @param AccessToken $accessToken
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ListingsItems\Item
     */
    public function getListingsItem(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, string $issue_locale = null, array $included_data = null);

    /**
     * Create request for operation 'getListingsItem'.
     *
     * @param AccessToken $accessToken
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getListingsItemRequest(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, string $issue_locale = null, array $included_data = null) : RequestInterface;

    /**
     * Operation patchListingsItem.
     *
     * @param AccessToken $accessToken
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPatchRequest $body The request body schema for the patchListingsItem operation. (required)
     * @param string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemSubmissionResponse
     */
    public function patchListingsItem(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPatchRequest $body, string $issue_locale = null);

    /**
     * Create request for operation 'patchListingsItem'.
     *
     * @param AccessToken $accessToken
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPatchRequest $body The request body schema for the patchListingsItem operation. (required)
     * @param string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function patchListingsItemRequest(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPatchRequest $body, string $issue_locale = null) : RequestInterface;

    /**
     * Operation putListingsItem.
     *
     * @param AccessToken $accessToken
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPutRequest $body The request body schema for the putListingsItem operation. (required)
     * @param string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemSubmissionResponse
     */
    public function putListingsItem(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPutRequest $body, string $issue_locale = null);

    /**
     * Create request for operation 'putListingsItem'.
     *
     * @param AccessToken $accessToken
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPutRequest $body The request body schema for the putListingsItem operation. (required)
     * @param string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function putListingsItemRequest(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPutRequest $body, string $issue_locale = null) : RequestInterface;
}
