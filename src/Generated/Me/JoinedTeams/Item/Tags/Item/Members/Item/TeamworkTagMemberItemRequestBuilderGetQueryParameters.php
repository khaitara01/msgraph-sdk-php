<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Tags\Item\Members\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Users assigned to the tag.
*/
class TeamworkTagMemberItemRequestBuilderGetQueryParameters 
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
