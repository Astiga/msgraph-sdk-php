<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDevicePerformance\SummarizeDevicePerformanceDevicesWithSummarizeBy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new summarizeDevicePerformanceDevicesWithSummarizeByRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new summarizeDevicePerformanceDevicesWithSummarizeByRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilderGetQueryParameters {
        return new SummarizeDevicePerformanceDevicesWithSummarizeByRequestBuilderGetQueryParameters($count, $filter, $orderby, $search, $select, $skip, $top);
    }

}
