<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse;

class RiskLimit extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/risk-limit/list";
    }

    public function getRequestClassname(): string
    {
        return RiskLimitsRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return RiskLimitsResponse::class;
    }
}