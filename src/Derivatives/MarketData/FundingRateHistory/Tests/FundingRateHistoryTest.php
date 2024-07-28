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
        echo "\n //// --- //// \n";
        
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $response = $bybit->publicEndpoint(FundingRateHistory::class, (new FundingRateHistoryRequest())->setSymbol('BTCUSDT'))->execute();

        if ($response->getReturnCode() == 0) {
            echo "CODE: {$response->getReturnCode()}\n";
            echo "MESSAGE: {$response->getReturnMessage()}\n";
    
            /** @var IFundingRateHistoryResponseInterface $fundingRatesInfo */
            $fundingRatesInfo = $response->getResult();
            foreach ($fundingRatesInfo->getFundingRates() as $fundingRate) {
                echo "-----\n";
                echo "Time: {$fundingRate->getFundingRateTimestamp()->format('Y-m-d H:i:s')}\n";
                echo "Symbol: {$fundingRate->getSymbol()}\n";
                echo "Rate: {$fundingRate->getFundingRate()}\n";
            }
    
            $this->assertTrue(true);
        } else {
            echo "API ERORR: " . get_class($this) . "\n";
            echo "CODE: {$response->getReturnCode()} \n"; 
            echo "MESSAGE: {$response->getReturnMessage()} \n"; 
            echo "EXTENDED:" . implode(";\n", $response->getExtendedInfo()) . "\n"; 
        }
    }
}
