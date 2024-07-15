<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookPriceItemResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookResponse;
use PHPUnit\Framework\TestCase;

class OrderBookTest extends TestCase
{
    public function testOrderBookKlineEndpoint()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $orderBookResponse = $bybit->publicEndpoint(OrderBook::class, (new OrderBookRequest())
            ->setSymbol('BTCUSDT')
            ->setLimit(3)
        )->execute();

        echo "Return code: {$orderBookResponse->getReturnCode()}\n";
        echo "Return message: {$orderBookResponse->getReturnMessage()}\n";

        /** @var OrderBookResponse $orderBook */
        $orderBook = $orderBookResponse->getResult();

        echo "Timestamp: {$orderBook->getTimestamp()->format('Y-m-d H:i:s')}\n";
        echo "Symbol: {$orderBook->getSymbol()}\n";

        echo "ASK: \n";
        /** @var OrderBookPriceItemResponse $ask */
        foreach ($orderBook->getAsk() as $ask) {
            echo " --- \n";
            echo "  Price: {$ask->getPrice()}\n";
            echo "  Volume: {$ask->getQuantity()}\n";
        }

        echo "BID: \n";
        /** @var OrderBookPriceItemResponse $bid */
        foreach ($orderBook->getBid() as $bid) {
            echo " --- \n";
            echo "Price: {$bid->getPrice()}\n";
            echo "Volume: {$bid->getQuantity()}\n";
        }

        $this->assertTrue(true);
    }
}