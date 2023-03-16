<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignmentSchedules\Item\ActivatedUsing;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ActivatedUsingRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ActivatedUsingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ActivatedUsingRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new activatedUsingRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ActivatedUsingRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ActivatedUsingRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new activatedUsingRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ActivatedUsingRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ActivatedUsingRequestBuilderGetQueryParameters {
        return new ActivatedUsingRequestBuilderGetQueryParameters($expand, $select);
    }

}
