<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Request\GetClosedPnLRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response\GetClosedPnLResponse;

class GetClosedPnL extends PrivateEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/position/closed-pnl";
    }

    protected function getRequestClassname(): string
    {
        return GetClosedPnLRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return GetClosedPnLResponse::class;
    }
}
