<?php

namespace Microsoft\Graph\Generated\Reports\DailyPrintUsageByUser;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DailyPrintUsageByUserRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DailyPrintUsageByUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DailyPrintUsageByUserRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new dailyPrintUsageByUserRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DailyPrintUsageByUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DailyPrintUsageByUserRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new dailyPrintUsageByUserRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return DailyPrintUsageByUserRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): DailyPrintUsageByUserRequestBuilderGetQueryParameters {
        return new DailyPrintUsageByUserRequestBuilderGetQueryParameters($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
