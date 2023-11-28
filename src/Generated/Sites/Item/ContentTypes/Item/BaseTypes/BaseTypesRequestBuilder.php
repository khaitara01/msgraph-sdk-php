<?php

namespace Microsoft\Graph\Generated\Sites\Item\ContentTypes\Item\BaseTypes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ContentTypeCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Sites\Item\ContentTypes\Item\BaseTypes\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\ContentTypes\Item\BaseTypes\Item\ContentTypeItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the baseTypes property of the microsoft.graph.contentType entity.
*/
class BaseTypesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the baseTypes property of the microsoft.graph.contentType entity.
     * @param string $contentTypeId1 The unique identifier of contentType
     * @return ContentTypeItemRequestBuilder
    */
    public function byContentTypeId1(string $contentTypeId1): ContentTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contentType%2Did1'] = $contentTypeId1;
        return new ContentTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BaseTypesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/contentTypes/{contentType%2Did}/baseTypes{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The collection of content types that are ancestors of this content type.
     * @param BaseTypesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ContentTypeCollectionResponse|null>
     * @throws Exception
    */
    public function get(?BaseTypesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ContentTypeCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The collection of content types that are ancestors of this content type.
     * @param BaseTypesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?BaseTypesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return BaseTypesRequestBuilder
    */
    public function withUrl(string $rawUrl): BaseTypesRequestBuilder {
        return new BaseTypesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
