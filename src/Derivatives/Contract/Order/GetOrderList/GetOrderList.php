<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Request\GetOrderListRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response\GetOrderListResponse;

class GetOrderList extends PrivateEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/order/list";
    }

    protected function getRequestClassname(): string
    {
        return GetOrderListRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return GetOrderListResponse::class;
    }
}
