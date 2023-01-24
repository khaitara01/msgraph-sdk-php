<?php

namespace Microsoft\Graph\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\SingleValueExtendedProperties\Count;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the number of the resource
*/
class CountRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
}
