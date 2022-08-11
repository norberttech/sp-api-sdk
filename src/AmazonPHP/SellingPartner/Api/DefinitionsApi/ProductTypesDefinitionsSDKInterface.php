<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\DefinitionsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use Psr\Http\Message\RequestInterface;

/**
 * Selling Partner API for Product Type Definitions.
 *
 * The Selling Partner API for Product Type Definitions provides programmatic access to attribute and data requirements for product types in the Amazon catalog. Use this API to return the JSON Schema for a product type that you can then use with other Selling Partner APIs, such as the Selling Partner API for Listings Items, the Selling Partner API for Catalog Items, and the Selling Partner API for Feeds (for JSON-based listing feeds).  For more information, see the [Product Type Definitions API Use Case Guide](doc:product-type-api-use-case-guide).
 *
 * The version of the OpenAPI document: 2020-09-01
 *
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface ProductTypesDefinitionsSDKInterface
{
    public const API_NAME = 'ProductTypesDefinitions';

    public const OPERATION_GETDEFINITIONSPRODUCTTYPE = 'getDefinitionsProductType';

    public const OPERATION_GETDEFINITIONSPRODUCTTYPE_PATH = '/definitions/2020-09-01/productTypes/{productType}';

    public const OPERATION_SEARCHDEFINITIONSPRODUCTTYPES = 'searchDefinitionsProductTypes';

    public const OPERATION_SEARCHDEFINITIONSPRODUCTTYPES_PATH = '/definitions/2020-09-01/productTypes';

    /**
     * Operation getDefinitionsProductType.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $product_type The Amazon product type name. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. Note: This parameter is limited to one marketplaceId at this time. (required)
     * @param null|string $seller_id A selling partner identifier. When provided, seller-specific requirements and values are populated within the product type definition schema, such as brand names associated with the selling partner. (optional)
     * @param string $product_type_version The version of the Amazon product type to retrieve. Defaults to \&quot;LATEST\&quot;,. Prerelease versions of product type definitions may be retrieved with \&quot;RELEASE_CANDIDATE\&quot;. If no prerelease version is currently available, the \&quot;LATEST\&quot; live version will be provided. (optional, default to 'LATEST')
     * @param string $requirements The name of the requirements set to retrieve requirements for. (optional, default to 'LISTING')
     * @param string $requirements_enforced Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all the required attributes being present (such as for partial updates). (optional, default to 'ENFORCED')
     * @param string $locale Locale for retrieving display labels and other presentation details. Defaults to the default language of the first marketplace in the request. (optional, default to 'DEFAULT')
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\ProductTypeDefinition
     */
    public function getDefinitionsProductType(AccessToken $accessToken, string $region, string $product_type, array $marketplace_ids, ?string $seller_id = null, string $product_type_version = 'LATEST', string $requirements = 'LISTING', string $requirements_enforced = 'ENFORCED', string $locale = 'DEFAULT');

    /**
     * Create request for operation 'getDefinitionsProductType'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $product_type The Amazon product type name. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. Note: This parameter is limited to one marketplaceId at this time. (required)
     * @param null|string $seller_id A selling partner identifier. When provided, seller-specific requirements and values are populated within the product type definition schema, such as brand names associated with the selling partner. (optional)
     * @param string $product_type_version The version of the Amazon product type to retrieve. Defaults to \&quot;LATEST\&quot;,. Prerelease versions of product type definitions may be retrieved with \&quot;RELEASE_CANDIDATE\&quot;. If no prerelease version is currently available, the \&quot;LATEST\&quot; live version will be provided. (optional, default to 'LATEST')
     * @param string $requirements The name of the requirements set to retrieve requirements for. (optional, default to 'LISTING')
     * @param string $requirements_enforced Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all the required attributes being present (such as for partial updates). (optional, default to 'ENFORCED')
     * @param string $locale Locale for retrieving display labels and other presentation details. Defaults to the default language of the first marketplace in the request. (optional, default to 'DEFAULT')
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getDefinitionsProductTypeRequest(AccessToken $accessToken, string $region, string $product_type, array $marketplace_ids, ?string $seller_id = null, string $product_type_version = 'LATEST', string $requirements = 'LISTING', string $requirements_enforced = 'ENFORCED', string $locale = 'DEFAULT') : RequestInterface;

    /**
     * Operation searchDefinitionsProductTypes.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param null|string[] $keywords A comma-delimited list of keywords to search product types by. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\ProductTypeList
     */
    public function searchDefinitionsProductTypes(AccessToken $accessToken, string $region, array $marketplace_ids, ?array $keywords = null);

    /**
     * Create request for operation 'searchDefinitionsProductTypes'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param null|string[] $keywords A comma-delimited list of keywords to search product types by. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function searchDefinitionsProductTypesRequest(AccessToken $accessToken, string $region, array $marketplace_ids, ?array $keywords = null) : RequestInterface;
}
