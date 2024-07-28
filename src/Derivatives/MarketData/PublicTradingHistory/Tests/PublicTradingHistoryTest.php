<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponseItem;
use PHPUnit\Framework\TestCase;

class PublicTradingHistoryTest extends TestCase
{
    public function testPublicTradingHistoryEndpoint()
    {
        echo "\n //// --- //// \n";

        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $response = $bybit->publicEndpoint(
            PublicTradingHistory::class,
            (new PublicTradingHistoryRequest())
            ->setSymbol('BTCUSDT')
            ->setLimit(3)
        )->execute();

        if ($response->getReturnCode() == 0) {
            echo "CODE: {$response->getReturnCode()}\n";
            echo "MESSAGE: {$response->getReturnMessage()}\n";
    
            /** @var PublicTradingHistoryResponse $tradeHistoryList */
            $tradeHistoryList = $response->getResult();
    
            echo "Trade history data: \n";
            /** @var PublicTradingHistoryResponseItem $historyItem */
            foreach ($tradeHistoryList->getTradingList() as $historyItem) {
                echo " --- \n";
                echo "Time: {$historyItem->getTime()->format('Y-m-d H:i:s')}\n";
                echo "Exec ID: {$historyItem->getExecId()}\n";
                echo "Symbol: {$historyItem->getSymbol()}\n";
                echo "Price: {$historyItem->getPrice()}\n";
                echo "Size: {$historyItem->getSize()}\n";
                echo "Side: {$historyItem->getSide()}\n";
                echo "Is Block Trade: {$historyItem->isBlockTrade()}\n";
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
