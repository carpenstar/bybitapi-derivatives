<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Enums\EnumIntervals;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request\KlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponseItem;
use PHPUnit\Framework\TestCase;

class KlineTest extends TestCase
{
    public function testKlineTestEndpoint()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $klineResponse = $bybit->publicEndpoint(Kline::class, (new KlineRequest())
            ->setSymbol('BTCUSDT')
            ->setInterval(EnumIntervals::HOUR_1)
            ->setStart('2024-07-11 10:00:00')
            ->setEnd('2024-07-12 11:00:00')
            ->setLimit(4)
        )->execute();

        echo "Return code: {$klineResponse->getReturnCode()}\n";
        echo "Return message: {$klineResponse->getReturnMessage()}\n";

        /** @var KlineResponseItem $klineItem */
        foreach ($klineResponse->getResult()->getKlineList() as $klineItem) {
            echo " --- \n";
            echo "Start Time: {$klineItem->getStartTime()->format('Y-m-d H:i:s')}\n";
            echo "Open Price: {$klineItem->getOpen()}\n";
            echo "High Price: {$klineItem->getHigh()}\n";
            echo "Low Price: {$klineItem->getLow()}\n";
            echo "Close Price: {$klineItem->getClose()}\n";
        }

        $this->assertTrue(true);
    }
}