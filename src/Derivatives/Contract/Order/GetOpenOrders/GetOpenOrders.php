<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Response\GetOpenOrdersResponse;

class GetOpenOrders extends PrivateEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/order/unfilled-orders";
    }

    protected function getResponseClassname(): string
    {
        return GetOpenOrdersResponse::class;
    }

    protected function getRequestClassname(): string
    {
        return GetOpenOrdersRequest::class;
    }
}