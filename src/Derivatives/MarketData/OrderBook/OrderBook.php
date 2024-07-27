<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookResponse;

class OrderBook extends PublicEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/order-book/L2";
    }

    public function getRequestClassname(): string
    {
        return OrderBookRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return OrderBookResponse::class;
    }
}
