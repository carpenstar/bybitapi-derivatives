<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response\FundingRateHistoryResponse;

class FundingRateHistory extends PublicEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/funding/history-funding-rate";
    }

    public function getRequestClassname(): string
    {
        return FundingRateHistoryRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return FundingRateHistoryResponse::class;
    }
}
