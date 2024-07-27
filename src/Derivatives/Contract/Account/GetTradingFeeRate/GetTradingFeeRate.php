<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequest;

class GetTradingFeeRate extends PrivateEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/account/fee-rate";
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return GetTradingFeeRateResponse::class;
    }

    protected function getRequestClassname(): string
    {
        return GetTradingFeeRateRequest::class;
    }
}
