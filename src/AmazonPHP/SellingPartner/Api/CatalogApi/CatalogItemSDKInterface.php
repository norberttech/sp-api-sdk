<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\CatalogApi;

use AmazonPHP\SellingPartner\AccessToken;
use Psr\Http\Message\RequestInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
interface CatalogItemSDKInterface
{
    public const API_NAME = 'CatalogItem';

    public const OPERATION_GETCATALOGITEM = 'getCatalogItem';

    public const OPERATION_GETCATALOGITEM_PATH = '/catalog/2020-12-01/items/{asin}';

    public const OPERATION_SEARCHCATALOGITEMS = 'searchCatalogItems';

    public const OPERATION_SEARCHCATALOGITEMS_PATH = '/catalog/2020-12-01/items';

    /**
     * Operation getCatalogItem.
     *
     * @param AccessToken $accessToken
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\CatalogItem\Item
     */
    public function getCatalogItem(AccessToken $accessToken, string $region, string $asin, array $marketplace_ids, array $included_data = null, string $locale = null);

    /**
     * Create request for operation 'getCatalogItem'.
     *
     * @param AccessToken $accessToken
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getCatalogItemRequest(AccessToken $accessToken, string $region, string $asin, array $marketplace_ids, array $included_data = null, string $locale = null) : RequestInterface;

    /**
     * Operation searchCatalogItems.
     *
     * @param AccessToken $accessToken
     * @param string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param string[] $brand_names A comma-delimited list of brand names to limit the search to. (optional)
     * @param string[] $classification_ids A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param string $keywords_locale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\CatalogItem\ItemSearchResults
     */
    public function searchCatalogItems(AccessToken $accessToken, string $region, array $keywords, array $marketplace_ids, array $included_data = null, array $brand_names = null, array $classification_ids = null, int $page_size = 10, string $page_token = null, string $keywords_locale = null, string $locale = null);

    /**
     * Create request for operation 'searchCatalogItems'.
     *
     * @param AccessToken $accessToken
     * @param string[] $keywords A comma-delimited list of words or item identifiers to search the Amazon catalog for. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: summaries. (optional)
     * @param string[] $brand_names A comma-delimited list of brand names to limit the search to. (optional)
     * @param string[] $classification_ids A comma-delimited list of classification identifiers to limit the search to. (optional)
     * @param int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param string $keywords_locale The language the keywords are provided in. Defaults to the primary locale of the marketplace. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function searchCatalogItemsRequest(AccessToken $accessToken, string $region, array $keywords, array $marketplace_ids, array $included_data = null, array $brand_names = null, array $classification_ids = null, int $page_size = 10, string $page_token = null, string $keywords_locale = null, string $locale = null) : RequestInterface;
}
