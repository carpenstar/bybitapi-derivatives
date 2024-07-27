<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponse;

class PublicTradingHistory extends PublicEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/recent-trade";
    }

    public function getRequestClassname(): string
    {
        return PublicTradingHistoryRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return PublicTradingHistoryResponse::class;
    }
}
