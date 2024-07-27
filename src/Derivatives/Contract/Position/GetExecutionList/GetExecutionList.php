<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Request\GetExecutionListRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Response\GetExecutionListResponse;

class GetExecutionList extends PrivateEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/execution/list";
    }

    protected function getRequestClassname(): string
    {
        return GetExecutionListRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return GetExecutionListResponse::class;
    }
}
