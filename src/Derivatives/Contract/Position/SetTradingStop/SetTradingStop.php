<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Request\SetTradingStopRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Response\SetTradingStopResponse;

class SetTradingStop extends PrivateEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::POST;
    }

    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/position/trading-stop";
    }

    protected function getRequestClassname(): string
    {
        return SetTradingStopRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return SetTradingStopResponse::class;
    }
}
