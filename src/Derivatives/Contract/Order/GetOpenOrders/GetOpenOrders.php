<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Response\GetOpenOrdersResponse;

class GetOpenOrders extends PrivateEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/order/unfilled-orders";
    }

    protected function getRequestClassname(): string
    {
        return GetOpenOrdersRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return GetOpenOrdersResponse::class;
    }
}
