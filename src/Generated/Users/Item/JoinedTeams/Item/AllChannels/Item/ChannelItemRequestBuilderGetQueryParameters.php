<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\AllChannels\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of channels either hosted in or shared with the team (incoming channels).
*/
class ChannelItemRequestBuilderGetQueryParameters 
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
