<?php

namespace Microsoft\Graph\Generated\Reports\GetM365AppUserDetailWithPeriod;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetM365AppUserDetailWithPeriodRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * Instantiates a new getM365AppUserDetailWithPeriodRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
    */
    public function __construct(?array $headers = null, ?array $options = null) {
        parent::__construct($headers ?? [], $options ?? []);
    }

}
