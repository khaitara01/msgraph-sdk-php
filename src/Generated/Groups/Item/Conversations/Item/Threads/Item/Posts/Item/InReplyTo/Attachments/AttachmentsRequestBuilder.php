<?php

namespace Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\InReplyTo\Attachments;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\InReplyTo\Attachments\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\InReplyTo\Attachments\CreateUploadSession\CreateUploadSessionRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item\InReplyTo\Attachments\Item\AttachmentItemRequestBuilder;
use Microsoft\Graph\Generated\Models\Attachment;
use Microsoft\Graph\Generated\Models\AttachmentCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the attachments property of the microsoft.graph.post entity.
*/
class AttachmentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createUploadSession method.
    */
    public function createUploadSession(): CreateUploadSessionRequestBuilder {
        return new CreateUploadSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the attachments property of the microsoft.graph.post entity.
     * @param string $attachmentId The unique identifier of attachment
     * @return AttachmentItemRequestBuilder
    */
    public function byAttachmentId(string $attachmentId): AttachmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attachment%2Did'] = $attachmentId;
        return new AttachmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AttachmentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/conversations/{conversation%2Did}/threads/{conversationThread%2Did}/posts/{post%2Did}/inReplyTo/attachments{?%24top,%24skip,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of attachment objects attached to a post.
     * @param AttachmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AttachmentCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/post-list-attachments?view=graph-rest-1.0 Find more info here
    */
    public function get(?AttachmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AttachmentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to attachments for groups
     * @param Attachment $body The request body
     * @param AttachmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Attachment|null>
     * @throws Exception
    */
    public function post(Attachment $body, ?AttachmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Attachment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of attachment objects attached to a post.
     * @param AttachmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AttachmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to attachments for groups
     * @param Attachment $body The request body
     * @param AttachmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Attachment $body, ?AttachmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AttachmentsRequestBuilder
    */
    public function withUrl(string $rawUrl): AttachmentsRequestBuilder {
        return new AttachmentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
