<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Enums\EnumHttpMethods;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Request\InstrumentInfoRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\InstrumentInfoResponse;

/**
 * Get launched instruments information.
 * https://bybit-exchange.github.io/docs/derivatives/public/instrument-info
 */
class InstrumentInfo extends PublicEndpoint
{
    public function getEndpointRequestMethod(): string
    {
        return EnumHttpMethods::GET;
    }

    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/instruments-info";
    }

    public function getRequestClassname(): string
    {
        return InstrumentInfoRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return InstrumentInfoResponse::class;
    }
}
