<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ResourceOperations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ResourceOperationItemRequestBuilderGetRequestConfiguration 
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
     * @var ResourceOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ResourceOperationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
