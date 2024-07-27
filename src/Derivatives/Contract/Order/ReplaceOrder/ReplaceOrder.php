<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Response\ReplaceOrderResponse;

class ReplaceOrder extends PrivateEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::POST;
    }

    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/order/replace";
    }

    protected function getRequestClassname(): string
    {
        return ReplaceOrderRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return ReplaceOrderResponse::class;
    }
}
