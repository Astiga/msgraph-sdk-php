<?php

namespace Microsoft\Graph\Generated\DeviceManagement\GetEffectivePermissionsWithScope;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getEffectivePermissions method.
*/
class GetEffectivePermissionsWithScopeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetEffectivePermissionsWithScopeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $scope Usage: scope='{scope}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $scope = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/getEffectivePermissions(scope=\'{scope}\'){?%24top,%24skip,%24search,%24filter,%24count}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['scope'] = $scope;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieves the effective permissions of the currently authenticated user
     * @param GetEffectivePermissionsWithScopeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetEffectivePermissionsWithScopeGetResponse|null>
     * @throws Exception
    */
    public function get(?GetEffectivePermissionsWithScopeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetEffectivePermissionsWithScopeGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieves the effective permissions of the currently authenticated user
     * @param GetEffectivePermissionsWithScopeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetEffectivePermissionsWithScopeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetEffectivePermissionsWithScopeRequestBuilder
    */
    public function withUrl(string $rawUrl): GetEffectivePermissionsWithScopeRequestBuilder {
        return new GetEffectivePermissionsWithScopeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
