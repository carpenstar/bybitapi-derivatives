<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponse;

class OpenInterest extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/open-interest";
    }

    public function getRequestClassname(): string
    {
        return OpenInterestRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return OpenInterestResponse::class;
    }
}