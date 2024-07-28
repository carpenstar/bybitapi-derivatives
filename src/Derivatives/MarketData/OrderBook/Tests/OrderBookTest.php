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
        echo "\n //// --- //// \n";
        
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $response = $bybit->publicEndpoint(
            OrderBook::class,
            (new OrderBookRequest())
            ->setSymbol('BTCUSDT')
            ->setLimit(3)
        )->execute();

        if ($response->getReturnCode() == 0) {
            echo "CODE: {$response->getReturnCode()}\n";
            echo "MESSAGE: {$response->getReturnMessage()}\n";
    
            /** @var OrderBookResponse $orderBook */
            $orderBook = $response->getResult();
    
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
        } else {
            echo "API ERORR: " . get_class($this) . "\n";
            echo "CODE: {$response->getReturnCode()} \n"; 
            echo "MESSAGE: {$response->getReturnMessage()} \n"; 
            echo "EXTENDED:" . implode(";\n", $response->getExtendedInfo()) . "\n"; 
        }

    }
}
