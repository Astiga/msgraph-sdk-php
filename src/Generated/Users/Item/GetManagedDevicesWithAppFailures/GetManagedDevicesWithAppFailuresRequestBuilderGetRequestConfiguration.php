<?php

namespace Microsoft\Graph\Generated\Users\Item\GetManagedDevicesWithAppFailures;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetManagedDevicesWithAppFailuresRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new getManagedDevicesWithAppFailuresRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new getManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters {
        return new GetManagedDevicesWithAppFailuresRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
