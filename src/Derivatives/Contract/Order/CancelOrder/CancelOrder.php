<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Request\CancelOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Response\CancelOrderResponse;

class CancelOrder extends PrivateEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::POST;
    }

    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/order/cancel";
    }

    protected function getRequestClassname(): string
    {
        return CancelOrderRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return CancelOrderResponse::class;
    }
}
