<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request\KlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponse;

/**
 * Get kline data
 * https://bybit-exchange.github.io/docs/derivatives/public/kline
 */
class Kline extends PublicEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/kline";
    }

    protected function getRequestClassname(): string
    {
        return KlineRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return KlineResponse::class;
    }
}
