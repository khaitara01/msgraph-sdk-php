<?php

namespace Microsoft\Graph\Generated\Planner\Buckets\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlannerBucketItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var PlannerBucketItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlannerBucketItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
