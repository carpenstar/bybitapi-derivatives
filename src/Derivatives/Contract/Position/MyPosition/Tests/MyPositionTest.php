<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\MyPosition;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Request\MyPositionRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Response\MyPositionResponse;
use PHPUnit\Framework\TestCase;

class MyPositionTest extends TestCase
{
    public function testSuccessPosition()
    {
        echo "\n //// --- //// \n";
        
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $response = $bybit->privateEndpoint(MyPosition::class, (new MyPositionRequest())->setSymbol('BTCUSDT'))->execute();

        if ($response->getReturnCode() == 0) {
            echo "CODE: {$response->getReturnCode()}\n";
            echo "MESSAGE: {$response->getReturnMessage()}\n";
    
            /** @var MyPositionResponse $positionsListInfoResponse */
            $positionsListInfoResponse = $response->getResult();
    
            echo "Category: {$positionsListInfoResponse->getCategory()}\n";
            echo "Next Page Cursor: {$positionsListInfoResponse->getNextPageCursor()}\n";
    
            foreach ($positionsListInfoResponse->getPositionList() as $position) {
                echo "-----\n";
                echo "Symbol: {$position->getSymbol()}\n";
                echo "Side: {$position->getSide()}\n";
                echo "Size: {$position->getSize()}\n";
                echo "Entry Price: {$position->getEntryPrice()}\n";
                echo "Leverage: {$position->getLeverage()}\n";
                echo "Position Value: {$position->getPositionValue()}\n";
                echo "Position Index: {$position->getPositionIdx()}\n";
                echo "Risk ID: {$position->getRiskId()}\n";
                echo "Risk Limit Value: {$position->getRiskLimitValue()}\n";
                echo "Trade ModeL {$position->getTradeMode()}\n";
                echo "Auto Add Margin: {$position->getAutoAddMargin()}\n";
                echo "Position Balance: {$position->getPositionBalance()}\n";
                echo "Liquidation Price: {$position->getLiqPrice()}\n";
                echo "Bust Price: {$position->getBustPrice()}\n";
                echo "TP/SL Mode: {$position->getTpSlMode()}\n";
                echo "Take Profit: {$position->getTakeProfit()}\n";
                echo "Stop-Loss: {$position->getStopLoss()}\n";
                echo "Created time: {$position->getCreatedTime()->format('Y-m-d H:i:s')}\n";
                echo "Update Time: {$position->getUpdatedTime()->format('Y-m-d H:i:s')}\n";
                echo "Trailing Stop: {$position->getTrailingStop()}\n";
                echo "Active Price: {$position->getActivePrice()}\n";
                echo "Mark Price: {$position->getMarkPrice()}\n";
                echo "Unrealised PnL: {$position->getUnrealisedPnl()}\n";
                echo "Cumulative Realised PnL: {$position->getCumRealisedPnl()}\n";
                echo "Maintenance Margin:  {$position->getPositionMM()}\n";
                echo "Initial Margin: {$position->getPositionIM()}\n";
                echo "Position Status: {$position->getPositionStatus()}\n";
                echo "Settlement Price: {$position->getSessionAvgPrice()}\n";
                echo "Pre-occupancy Closing Fee: {$position->getOccClosingFee()}\n";
                echo "Auto-deleverage Rank Indicator: {$position->getAdlRankIndicator()}\n";
            }
        } else {
            echo "API ERORR: " . get_class($this) . "\n";
            echo "CODE: {$response->getReturnCode()} \n"; 
            echo "MESSAGE: {$response->getReturnMessage()} \n"; 
            echo "EXTENDED:" . implode(";\n", $response->getExtendedInfo()) . "\n"; 
        }

        $this->assertTrue(true);
    }
}
