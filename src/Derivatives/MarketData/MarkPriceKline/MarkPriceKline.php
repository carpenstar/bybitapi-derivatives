<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response\MarkPriceKlineResponse;

class MarkPriceKline extends PublicEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/mark-price-kline";
    }

    public function getRequestClassname(): string
    {
        return MarkPriceKlineRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return MarkPriceKlineResponse::class;
    }
}
