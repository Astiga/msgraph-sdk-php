<?php

namespace Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class VerificationDnsRecordsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var VerificationDnsRecordsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?VerificationDnsRecordsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new verificationDnsRecordsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param VerificationDnsRecordsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?VerificationDnsRecordsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new verificationDnsRecordsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return VerificationDnsRecordsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): VerificationDnsRecordsRequestBuilderGetQueryParameters {
        return new VerificationDnsRecordsRequestBuilderGetQueryParameters($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
