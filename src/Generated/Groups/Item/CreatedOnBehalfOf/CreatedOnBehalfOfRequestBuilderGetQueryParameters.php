<?php

namespace Microsoft\Graph\Generated\Groups\Item\CreatedOnBehalfOf;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user (or application) that created the group. NOTE: This is not set if the user is an administrator. Read-only.
*/
class CreatedOnBehalfOfRequestBuilderGetQueryParameters 
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
