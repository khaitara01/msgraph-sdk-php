<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Services\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of available Universal Print service endpoints.
*/
class PrintServiceItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
