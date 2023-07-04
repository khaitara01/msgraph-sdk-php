<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsScoreHistory;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsScoreHistory\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsScoreHistory\Item\UserExperienceAnalyticsScoreHistoryItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsScoreHistory;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsScoreHistoryCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userExperienceAnalyticsScoreHistory property of the microsoft.graph.deviceManagement entity.
*/
class UserExperienceAnalyticsScoreHistoryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsScoreHistory property of the microsoft.graph.deviceManagement entity.
     * @param string $userExperienceAnalyticsScoreHistoryId Unique identifier of the item
     * @return UserExperienceAnalyticsScoreHistoryItemRequestBuilder
    */
    public function byUserExperienceAnalyticsScoreHistoryId(string $userExperienceAnalyticsScoreHistoryId): UserExperienceAnalyticsScoreHistoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsScoreHistory%2Did'] = $userExperienceAnalyticsScoreHistoryId;
        return new UserExperienceAnalyticsScoreHistoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserExperienceAnalyticsScoreHistoryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsScoreHistory{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * User experience analytics device Startup Score History
     * @param UserExperienceAnalyticsScoreHistoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?UserExperienceAnalyticsScoreHistoryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsScoreHistoryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to userExperienceAnalyticsScoreHistory for deviceManagement
     * @param UserExperienceAnalyticsScoreHistory $body The request body
     * @param UserExperienceAnalyticsScoreHistoryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(UserExperienceAnalyticsScoreHistory $body, ?UserExperienceAnalyticsScoreHistoryRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsScoreHistory::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * User experience analytics device Startup Score History
     * @param UserExperienceAnalyticsScoreHistoryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserExperienceAnalyticsScoreHistoryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create new navigation property to userExperienceAnalyticsScoreHistory for deviceManagement
     * @param UserExperienceAnalyticsScoreHistory $body The request body
     * @param UserExperienceAnalyticsScoreHistoryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsScoreHistory $body, ?UserExperienceAnalyticsScoreHistoryRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
