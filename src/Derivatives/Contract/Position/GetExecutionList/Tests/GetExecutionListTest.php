<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Interfaces\IResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\GetExecutionList;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Request\GetExecutionListRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Response\GetExecutionListResponse;
use PHPUnit\Framework\TestCase;

class GetExecutionListTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        echo "\n //// --- //// \n";
        
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        /** @var IResponseInterface $response */
        $response = $bybit->privateEndpoint(
            GetExecutionList::class,
            (new GetExecutionListRequest())
            ->setSymbol('BTCUSDT')
            ->setLimit(3)
        )->execute();

        if ($response->getReturnCode() == 0) {
            echo "CODE: {$response->getReturnCode()}\n";
            echo "MESSAGE: {$response->getReturnMessage()}\n";
    
            /** @var GetExecutionListResponse $execListInfoResponse */
            $execListInfoResponse = $response->getResult();
    
            echo "Category: {$execListInfoResponse->getCategory()}\n";
            echo "Next Page Cursor: {$execListInfoResponse->getNextPageCursor()}\n";
            foreach ($execListInfoResponse->getExecutionList() as $exec) {
                echo "-----\n";
                echo "Symbol: {$exec->getSymbol()}\n";
                echo "Side: {$exec->getSide()}\n";
                echo "Order ID: {$exec->getOrderId()}\n";
                echo "Order Link ID: {$exec->getOrderLinkId()}\n";
                echo "Order Price: {$exec->getOrderPrice()}\n";
                echo "Order Quantity: {$exec->getOrderQty()}\n";
                echo "Order Type: {$exec->getOrderType()}\n";
                echo "Stop Order Type: {$exec->getOrderType()}\n";
                echo "Execution ID: {$exec->getExecId()}\n";
                echo "Execution Price: {$exec->getExecPrice()}\n";
                echo "Execution Quantity: {$exec->getExecQty()}\n";
                echo "Execution Fee: {$exec->getExecFee()}\n";
                echo "Execution Type: {$exec->getExecType()}\n";
                echo "Execution Value: {$exec->getExecValue()}\n";
                echo "Fee Rate: {$exec->getFeeRate()}\n";
                echo "Last Liquidity Ind: {$exec->getLastLiquidityInd()}\n";
                echo "Is Maker: {$exec->isMaker()}\n";
                echo "Leaves Quantity: {$exec->getLeavesQty()}\n";
                echo "Closed Size: {$exec->getClosedSize()}\n";
                echo "Mark Price: {$exec->getMarkPrice()}\n";
                echo "Index Price {$exec->getIndexPrice()}\n";
                echo "Underlying Price: {$exec->getUnderlyingPrice()}\n";
                echo "Execution Time: {$exec->getExecTime()->format('Y-m-d H:i:s')}\n";
            }
    
            /**
             * Return Code: 0
             * Return Message: OK
             * Category:
             * Next Page Cursor: page_token%3D91113706%26
             * -----
             * Symbol: BTCUSDT
             * Side: Sell
             * Order ID: 6e60910f-2c60-48c6-916e-c9c6946b3bc9
             * Order Link ID:
             * Order Price: 61022
             * Order Quantity: 0.015
             * Order Type: Market
             * Stop Order Type: Market
             * Execution ID: 9cb193fe-4367-5d70-95e6-2831af76586f
             * Execution Price: 64225.5
             * Execution Quantity: 0.015
             * Execution Fee: 0.52986038
             * Execution Type: Trade
             * Execution Value: 963.3825
             * Fee Rate: 0.00055
             * Last Liquidity Ind: RemovedLiquidity
             * Is Maker:
             * Leaves Quantity: 0
             * Closed Size: 0.015
             * Mark Price: 64235.6
             * Index Price 0
             * Underlying Price: 0
             * Execution Time: 2024-06-22 20:52:39
             * -----
             * Symbol: BTCUSDT
             * Side: Buy
             * Order ID: 25d14af5-62ad-472c-a8f5-4573fdb3a3f2
             * Order Link ID:
             * Order Price: 67436.7
             * Order Quantity: 0.015
             * Order Type: Market
             * Stop Order Type: Market
             * Execution ID: 6383ff73-9d54-534c-b8bc-160ba08a8edf
             * Execution Price: 64233.6
             * Execution Quantity: 0.015
             * Execution Fee: 0.5299272
             * Execution Type: Trade
             * Execution Value: 963.504
             * Fee Rate: 0.00055
             * Last Liquidity Ind: RemovedLiquidity
             * Is Maker:
             * Leaves Quantity: 0
             * Closed Size: 0
             * Mark Price: 64235.76
             * Index Price 0
             */
        } else {
            echo "API ERORR: " . get_class($this) . "\n";
            echo "CODE: {$response->getReturnCode()} \n"; 
            echo "MESSAGE: {$response->getReturnMessage()} \n"; 
            echo "EXTENDED:" . implode(";\n", $response->getExtendedInfo()) . "\n"; 
        }



        $this->assertTrue(true);
    }
}
