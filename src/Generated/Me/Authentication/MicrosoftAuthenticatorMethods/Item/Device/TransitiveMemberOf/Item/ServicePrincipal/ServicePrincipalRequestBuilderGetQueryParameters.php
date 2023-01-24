<?php

namespace Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf\Item\ServicePrincipal;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the item of type microsoft.graph.directoryObject as microsoft.graph.servicePrincipal
*/
class ServicePrincipalRequestBuilderGetQueryParameters 
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
