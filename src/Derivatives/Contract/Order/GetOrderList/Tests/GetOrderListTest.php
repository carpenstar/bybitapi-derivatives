<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Interfaces\IResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\GetOrderList;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListResponseItemInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Request\GetOrderListRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response\GetOrderListResponse;
use PHPUnit\Framework\TestCase;

class GetOrderListTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        $bybitApi = (new BybitAPI())
            ->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        /** @var IResponseInterface $endpointResponse */
        $endpointResponse = $bybitApi->privateEndpoint(
            GetOrderList::class,
            (new GetOrderListRequest())->setSymbol('BTCUSDT')->setLimit(2)
        )
            ->execute();

        echo "Return code: {$endpointResponse->getReturnCode()} \n";
        echo "Return message: {$endpointResponse->getReturnMessage()} \n";

        /** @var GetOrderListResponse $getOrderListResponse */
        $getOrderListResponse = $endpointResponse->getResult();
        echo "Product Category: {$getOrderListResponse->getCategory()}\n";
        echo "Next Page Cursor: {$getOrderListResponse->getNextPageCursor()}\n";
        echo "Order List:\n";

        /** @var IGetOrderListResponseItemInterface $order */
        foreach ($getOrderListResponse->getOrderList() as $order) {
            echo "-----\n";
            echo "Symbol: {$order->getSymbol()}\n";
            echo "Order ID: {$order->getOrderId()}\n";
            echo "Order Link ID: {$order->getOrderLinkId()}\n";
            echo "Side: {$order->getSide()}\n";
            echo "Order Type: {$order->getOrderType()}\n";
            echo "Order price: {$order->getPrice()}\n";
            echo "Order Quantity: {$order->getQty()}\n";
            echo "Time In Force: {$order->getTimeInForce()}\n";
            echo "Order Status: {$order->getOrderStatus()}\n";
            echo "Position Index: {$order->getPositionIdx()}\n";
            echo "Last Price On Created: {$order->getLastPriceOnCreated()}\n";
            echo "Created Time: {$order->getCreatedTime()->format('Y-m-d H:i:s')}\n";
            echo "Updated Time: {$order->getUpdatedTime()->format('Y-m-d H:i:s')}\n";
            echo "Cancel Type: {$order->getCancelType()}\n";
            echo "Reject Reason: {$order->getRejectReason()}\n";
            echo "Stop Order Price: {$order->getStopOrderType()}\n";
            echo "Trigger Direction: {$order->getTriggerDirection()}\n";
            echo "Trigger By: {$order->getTriggerBy()}\n";
            echo "Trigger Price: {$order->getTriggerPrice()}\n";
            echo "Cumulative Executed Fee: {$order->getCumExecFee()}\n";
            echo "Cumulative Executed Value: {$order->getCumExecValue()}\n";
            echo "Cumulative Executed Quantity: {$order->getCumExecQty()}\n";
            echo "Leaves Value {$order->getLeavesValue()}\n";
            echo "Leaves Quantity: {$order->getLeavesQty()}\n";
            echo "Take Profit: {$order->getTakeProfit()}\n";
            echo "Stop Loss: {$order->getStopLoss()}\n";
            echo "TP/SL Mode: {$order->getTpslMode()}\n";
            echo "Take Profit Limit Price: {$order->getTpLimitPrice()}\n";
            echo "Stop-Loss Limit Price: {$order->getSlLimitPrice()}\n";
            echo "Take Profit Trigger By {$order->getTpTriggerBy()}\n";
            echo "Stop-Loss Trigger By {$order->getSlTriggerBy()}\n";
            echo "Reduce Only: {$order->isReduceOnly()}\n";
            echo "Close On Trigger: {$order->isCloseOnTrigger()} {}\n";
            echo "Block Trade ID: {$order->getBlockTradeId()}\n";
        }

        /**
         * Return code: 0
         * Return message: OK
         * Product Category:
         * Next Page Cursor: eyJza2lwX2xvY2FsX3N5bWJvbCI6ZmFsc2UsInBhZ2VfdG9rZW4iOiIzODA1NCJ9
         * Order List:
         * -----
         *  Symbol: BTCUSDT
         *  Order ID: 55b6ef38-689e-46c0-a55b-e7124f90004a
         *  Order Link ID:
         *  Side: Sell
         *  Order Type: Limit
         *  Order price: 66037
         *  Order Quantity: 0.001
         *  Time In Force: GoodTillCancel
         *  Order Status: Filled
         *  Position Index: 0
         *  Last Price On Created: 0
         *  Created Time: 2024-06-18 21:11:47
         *  Updated Time: 2024-06-20 10:57:59
         *  Cancel Type: UNKNOWN
         *  Reject Reason: EC_NoError
         *  Stop Order Price: UNKNOWN
         *  Trigger Direction: 0
         *  Trigger By: UNKNOWN
         *  Trigger Price: 0
         *  Cumulative Executed Fee: 0.0132074
         *  Cumulative Executed Value: 66.037
         *  Cumulative Executed Quantity: 0.001
         *  Leaves Value 0
         *  Leaves Quantity: 0
         *  Take Profit: 0
         *  Stop Loss: 0
         *  TP/SL Mode:
         *  Take Profit Limit Price: 0
         *  Stop-Loss Limit Price: 0
         *  Take Profit Trigger By UNKNOWN
         *  Stop-Loss Trigger By UNKNOWN
         *  Reduce Only:
         *  Close On Trigger:  {}
         *  Block Trade ID:
         *  -----
         *  Symbol: BTCUSDT
         *  Order ID: 4f279264-6d38-46c1-8216-7e5a2f110c11
         *  Order Link ID:
         *  Side: Sell
         *  Order Type: Limit
         *  Order price: 67037
         *  Order Quantity: 0.001
         *  Time In Force: GoodTillCancel
         *  Order Status: New
         *  Position Index: 0
         *  Last Price On Created: 0
         *  Created Time: 2024-06-18 21:11:43
         *  Updated Time: 2024-06-18 21:11:43
         *  Cancel Type: UNKNOWN
         *  Reject Reason: EC_NoError
         *  Stop Order Price: UNKNOWN
         *  Trigger Direction: 0
         *  Trigger By: UNKNOWN
         *  Trigger Price: 0
         *  Cumulative Executed Fee: 0
         *  Cumulative Executed Value: 0
         *  Cumulative Executed Quantity: 0
         *  Leaves Value 67.037
         *  Leaves Quantity: 0.001
         *  Take Profit: 0
         *  Stop Loss: 0
         *  TP/SL Mode:
         *  Take Profit Limit Price: 0
         *  Stop-Loss Limit Price: 0
         *  Take Profit Trigger By UNKNOWN
         *  Stop-Loss Trigger By UNKNOWN
         *  Reduce Only:
         *  Close On Trigger:  {}
         *  Block Trade ID:
         **/
    }
}
