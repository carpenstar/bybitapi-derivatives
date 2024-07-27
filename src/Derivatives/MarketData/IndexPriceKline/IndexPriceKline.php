<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponse;

/**
 * Get index price kline data
 * https://bybit-exchange.github.io/docs/derivatives/public/index-kline
 */
class IndexPriceKline extends PublicEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/index-price-kline";
    }

    protected function getRequestClassname(): string
    {
        return IndexPriceKlineRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return IndexPriceKlineResponse::class;
    }
}
