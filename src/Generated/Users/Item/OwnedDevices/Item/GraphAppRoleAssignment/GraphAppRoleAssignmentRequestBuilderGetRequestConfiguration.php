<?php

namespace Microsoft\Graph\Generated\Users\Item\OwnedDevices\Item\GraphAppRoleAssignment;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphAppRoleAssignmentRequestBuilderGetRequestConfiguration 
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
     * @var GraphAppRoleAssignmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphAppRoleAssignmentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphAppRoleAssignmentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphAppRoleAssignmentRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): GraphAppRoleAssignmentRequestBuilderGetQueryParameters {
        return new GraphAppRoleAssignmentRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new graphAppRoleAssignmentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param GraphAppRoleAssignmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphAppRoleAssignmentRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
