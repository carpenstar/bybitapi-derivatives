<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponseItem;
use PHPUnit\Framework\TestCase;

class OpenInterestTest extends TestCase
{
    public function testOpenInterestEndpoint()
    {
        echo "\n //// --- //// \n";

        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $response = $bybit->publicEndpoint(
            OpenInterest::class,
            (new OpenInterestRequest())
            ->setSymbol('BTCUSDT')
            ->setInterval('5min')
            ->setStart('2024-07-11 10:00:00')
            ->setEnd('2024-07-12 11:00:00')
            ->setLimit(10)
        )->execute();

        if ($response->getReturnCode() == 0) {
            echo "CODE: {$response->getReturnCode()}\n";
            echo "MESSAGE: {$response->getReturnMessage()}\n";

            /** @var OpenInterestResponseItem $interest */
            foreach ($response->getResult()->getOpenInterestList() as $interest) {
                echo " --- \n";
                echo "Time: {$interest->getTimestamp()->format('Y-m-d H:i:s')}\n";
                echo "Open Interest: {$interest->getOpenInterest()}\n";
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
