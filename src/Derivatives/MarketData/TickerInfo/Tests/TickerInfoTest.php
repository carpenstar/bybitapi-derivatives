<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponseItemInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\TickerInfo;
use PHPUnit\Framework\TestCase;

class TickerInfoTest extends TestCase
{
    public function testRiskLimitEndpoint()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $endpointResponse = $bybit->publicEndpoint(
            TickerInfo::class,
            (new TickerInfoRequest())
            ->setSymbol('BTCUSDT')
        )->execute();

        echo "Return code: {$endpointResponse->getReturnCode()}\n";
        echo "Return message: {$endpointResponse->getReturnMessage()}\n";

        /** @var ITickerInfoResponseItemInterface $tickerInfo */
        $tickerInfo = $endpointResponse->getResult()->getTickerInfo();

        echo "Symbol: {$tickerInfo->getSymbol()}\n";
        echo "Bid Price: {$tickerInfo->getBidPrice()}\n";
        echo "Ask Price: {$tickerInfo->getAskPrice()}\n";
        echo "Last Price: {$tickerInfo->getLastPrice()}\n";
        echo "Last Tick Direction: {$tickerInfo->getLastTickDirection()}\n";
        echo "Prev Price 24 hours: {$tickerInfo->getPrevPrice24h()}\n";
        echo "Prev Price 24 hours(%): {$tickerInfo->getPrice24hPcnt()}\n";
        echo "High Price 24 hours: {$tickerInfo->getHighPrice24h()}\n";
        echo "Low Price 24 hours: {$tickerInfo->getLowPrice24h()}\n";
        echo "Prev price 1 hour: {$tickerInfo->getPrevPrice1h()}\n";
        echo "Mark Price: {$tickerInfo->getMarkPrice()}\n";
        echo "Index Price: {$tickerInfo->getIndexPrice()}\n";
        echo "Open Interest: {$tickerInfo->getOpenInterests()}\n";
        echo "Open Interest Value: {$tickerInfo->getOpenInterestValue()}\n";
        echo "Turnover 24 hours: {$tickerInfo->getTurnover24h()}\n";
        echo "Volume 24 hours: {$tickerInfo->getVolume24h()}\n";
        echo "Funding Rate: {$tickerInfo->getFundingRate()}\n";
        echo "Next Funding Time: {$tickerInfo->getNextFundingTime()->format("Y-m-d H:i:s")}\n";
        echo "Predicted Delivery Price: {$tickerInfo->getPredictedDeliveryPrice()}\n";
        echo "Basis Rate: {$tickerInfo->getBasisRate()}\n";
        echo "Delivery Fee Rate: {$tickerInfo->getDeliveryFeeRate()}\n";
        echo "Open Interests Value: {$tickerInfo->getOpenInterestValue()}\n";

        /**
         *Return code: 0
        Return message: OK
        Symbol: BTCUSDT
        Bid Price: 59933.6
        Ask Price: 59935.7
        Last Price: 59938
        Last Tick Direction: ZeroMinusTick
        Prev Price 24 hours: 58627.5
        Prev Price 24 hours(%): 0.022352
        High Price 24 hours: 63074.5
        Low Price 24 hours: 58267.4
        Prev price 1 hour: 59997
        Mark Price: 59938
        Index Price: 59957.26
        Open Interest: 208384.158
        Open Interest Value: 12490129662.2
        Turnover 24 hours: 2907929540.5417
        Volume 24 hours: 48504.964
        Funding Rate: 8.407E-5
        Next Funding Time: 2024-07-15 00:00:00
        Predicted Delivery Price: 0
        Basis Rate: 0
        Delivery Fee Rate: 0
        Open Interests Value: 12490129662.2
         */

        $this->assertTrue(true);
    }
}
