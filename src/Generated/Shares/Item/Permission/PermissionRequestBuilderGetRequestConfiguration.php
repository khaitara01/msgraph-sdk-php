<?php

namespace Microsoft\Graph\Generated\Shares\Item\Permission;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PermissionRequestBuilderGetRequestConfiguration 
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
     * @var PermissionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PermissionRequestBuilderGetQueryParameters $queryParameters = null;
    
}
