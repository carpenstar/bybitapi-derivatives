<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Request\CancelAllOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Response\CancelAllOrderResponse;

class CancelAllOrder extends PrivateEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::POST;
    }

    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/order/cancel-all";
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return CancelAllOrderResponse::class;
    }

    protected function getRequestClassname(): string
    {
        return CancelAllOrderRequest::class;
    }
}
