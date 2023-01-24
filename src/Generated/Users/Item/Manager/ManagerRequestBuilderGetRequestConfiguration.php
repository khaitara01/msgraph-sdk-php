<?php

namespace Microsoft\Graph\Generated\Users\Item\Manager;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagerRequestBuilderGetRequestConfiguration 
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
     * @var ManagerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagerRequestBuilderGetQueryParameters $queryParameters = null;
    
}
