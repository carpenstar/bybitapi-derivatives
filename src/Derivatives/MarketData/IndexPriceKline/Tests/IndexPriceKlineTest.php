<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Enums\EnumIntervals;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponseItem;
use PHPUnit\Framework\TestCase;

class indexPriceKlineTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        echo "\n //// --- //// \n";

        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $response = $bybit->publicEndpoint(IndexPriceKline::class,
            (new IndexPriceKlineRequest())->setSymbol('BTCUSDT')->setInterval(EnumIntervals::HOUR_1)->setStart('2024-07-26 10:00:00')->setEnd('2024-07-27 11:00:00')->setLimit(4)
        )->execute();


        if ($response->getReturnCode() == 0) {
            echo "CODE: {$response->getReturnCode()}\n";
            echo "MESSAGE: {$response->getReturnMessage()}\n";
    
            /** @var IndexPriceKlineResponseItem $indexItem */
            foreach ($response->getResult()->getKlineList() as $indexItem) {
                echo " --- \n";
                echo "Start Time: {$indexItem->getStartTime()->format('Y-m-d H:i:s')}\n";
                echo "Open Price: {$indexItem->getOpen()}\n";
                echo "High Price: {$indexItem->getHigh()}\n";
                echo "Low Price: {$indexItem->getLow()}\n";
                echo "Close Price: {$indexItem->getClose()}\n";
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
