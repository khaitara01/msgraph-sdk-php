<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\Hosts\Item\ChildHostPairs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\HostPairCollectionResponse;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\Hosts\Item\ChildHostPairs\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\Hosts\Item\ChildHostPairs\Item\HostPairItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the childHostPairs property of the microsoft.graph.security.host entity.
*/
class ChildHostPairsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the childHostPairs property of the microsoft.graph.security.host entity.
     * @param string $hostPairId The unique identifier of hostPair
     * @return HostPairItemRequestBuilder
    */
    public function byHostPairId(string $hostPairId): HostPairItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hostPair%2Did'] = $hostPairId;
        return new HostPairItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ChildHostPairsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/threatIntelligence/hosts/{host%2Did}/childHostPairs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The hostPairs that are resources associated with a host, where that host is the parentHost and has an outgoing pairing to a childHost.
     * @param ChildHostPairsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HostPairCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ChildHostPairsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HostPairCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The hostPairs that are resources associated with a host, where that host is the parentHost and has an outgoing pairing to a childHost.
     * @param ChildHostPairsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ChildHostPairsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ChildHostPairsRequestBuilder
    */
    public function withUrl(string $rawUrl): ChildHostPairsRequestBuilder {
        return new ChildHostPairsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
