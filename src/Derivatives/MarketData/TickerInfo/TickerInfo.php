<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Response\TickerInfoResponse;

class TickerInfo extends PublicEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/tickers";
    }

    public function getRequestClassname(): string
    {
        return TickerInfoRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return TickerInfoResponse::class;
    }
}
