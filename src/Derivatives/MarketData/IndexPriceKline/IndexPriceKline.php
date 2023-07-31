<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline;

use Carpenstar\ByBitAPI\Core\Endpoints\PublicEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponse;

/**
 * Get index price kline data
 * https://bybit-exchange.github.io/docs/derivatives/public/index-kline
 */
class IndexPriceKline extends PublicEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/derivatives/v3/public/index-price-kline";
    }

    protected function getRequestClassname(): string
    {
        return IndexPriceKlineRequest::class;
    }

    public function getResponseClassname(): string
    {
        return IndexPriceKlineResponse::class;
    }
}