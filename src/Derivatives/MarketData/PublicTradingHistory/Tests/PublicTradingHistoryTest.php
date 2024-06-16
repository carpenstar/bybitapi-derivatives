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
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $endpointResponse = $bybit->publicEndpoint(PublicTradingHistory::class, (new PublicTradingHistoryRequest())
            ->setSymbol('BTCUSDT')
            ->setLimit(3)
        )->execute();

        echo "Return code: {$endpointResponse->getReturnCode()}\n";
        echo "Return message: {$endpointResponse->getReturnMessage()}\n";

        /** @var PublicTradingHistoryResponse $tradeHistoryList */
        $tradeHistoryList = $endpointResponse->getResult();

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
    }
}