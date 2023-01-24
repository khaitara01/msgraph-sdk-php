<?php

namespace Microsoft\Graph\Generated\Groups\Item\Planner\Plans\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. Nullable. Returns the plannerPlans owned by the group.
*/
class PlannerPlanItemRequestBuilderGetQueryParameters 
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
