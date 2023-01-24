<?php

namespace Microsoft\Graph\Generated\Sites\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve properties and relationships for a [site][] resource.A **site** resource represents a team site in SharePoint.
*/
class SiteItemRequestBuilderGetQueryParameters 
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
