<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest;
use PHPUnit\Framework\TestCase;

class FundingRateHistoryTest extends TestCase
{
    public function testFundingRateHistoryResponse()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $fundingRatesEndpointResponse = $bybit->publicEndpoint(FundingRateHistory::class, (new FundingRateHistoryRequest())
            ->setSymbol('BTCUSDT')
        )->execute();

        echo "Return code: {$fundingRatesEndpointResponse->getReturnCode()}\n";
        echo "Return message: {$fundingRatesEndpointResponse->getReturnMessage()}\n";

        /** @var IFundingRateHistoryResponseInterface $fundingRatesInfo */
        $fundingRatesInfo = $fundingRatesEndpointResponse->getResult();
        foreach ($fundingRatesInfo->getFundingRates() as $fundingRate) {
            echo "-----\n";
            echo "Time: {$fundingRate->getFundingRateTimestamp()->format('Y-m-d H:i:s')}\n";
            echo "Symbol: {$fundingRate->getSymbol()}\n";
            echo "Rate: {$fundingRate->getFundingRate()}\n";
        }

        $this->assertTrue(true);
    }
}