<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IPostEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Request\PlaceOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Response\PlaceOrderResponse;

class PlaceOrder extends PrivateEndpoint implements IPostEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/order/create";
    }

    protected function getRequestClassname(): string
    {
        return PlaceOrderRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return PlaceOrderResponse::class;
    }
}