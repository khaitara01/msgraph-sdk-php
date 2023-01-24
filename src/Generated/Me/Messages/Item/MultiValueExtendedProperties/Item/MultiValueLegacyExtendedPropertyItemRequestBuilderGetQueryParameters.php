<?php

namespace Microsoft\Graph\Generated\Me\Messages\Item\MultiValueExtendedProperties\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of multi-value extended properties defined for the message. Nullable.
*/
class MultiValueLegacyExtendedPropertyItemRequestBuilderGetQueryParameters 
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
