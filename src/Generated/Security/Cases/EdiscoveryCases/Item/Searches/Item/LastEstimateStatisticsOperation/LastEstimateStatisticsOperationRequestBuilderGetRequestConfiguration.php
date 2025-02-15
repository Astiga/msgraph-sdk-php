<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\LastEstimateStatisticsOperation;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LastEstimateStatisticsOperationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LastEstimateStatisticsOperationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LastEstimateStatisticsOperationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new lastEstimateStatisticsOperationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LastEstimateStatisticsOperationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LastEstimateStatisticsOperationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new lastEstimateStatisticsOperationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LastEstimateStatisticsOperationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LastEstimateStatisticsOperationRequestBuilderGetQueryParameters {
        return new LastEstimateStatisticsOperationRequestBuilderGetQueryParameters($expand, $select);
    }

}
