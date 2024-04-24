<?php

namespace Microsoft\Graph\Generated\Applications\Item\FederatedIdentityCredentialsWithName;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Federated identities for applications. Supports $expand and $filter (startsWith, /$count eq 0, /$count ne 0).
*/
class FederatedIdentityCredentialsWithNameRequestBuilderGetQueryParameters 
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
    
    /**
     * Instantiates a new FederatedIdentityCredentialsWithNameRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}