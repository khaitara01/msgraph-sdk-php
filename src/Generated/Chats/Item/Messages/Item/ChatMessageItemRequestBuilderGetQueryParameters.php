<?php

namespace Microsoft\Graph\Generated\Chats\Item\Messages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of all the messages in the chat. Nullable.
*/
class ChatMessageItemRequestBuilderGetQueryParameters 
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
