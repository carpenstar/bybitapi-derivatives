<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Tests;


use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\GetOpenOrders;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Response\GetOpenOrdersResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Response\GetOpenOrdersResponseItem;
use PHPUnit\Framework\TestCase;

class GetOpenOrdersTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        $bybitApi = (new BybitAPI())
            ->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $getOpenOrdersResponse = $bybitApi->privateEndpoint(GetOpenOrders::class,
            (new GetOpenOrdersRequest())->setSymbol('BTCUSDT')->setLimit(2))->execute();

        echo "Return code: {$getOpenOrdersResponse->getReturnCode()} \n";
        echo "Return message: {$getOpenOrdersResponse->getReturnMessage()} \n";

        /** @var GetOpenOrdersResponse $openOrderInfo */
        $openOrderInfo = $getOpenOrdersResponse->getResult();

        echo "Category:  {$openOrderInfo->getCategory()}\n";
        echo "Next Page Cursor: {$openOrderInfo->getNextPageCursor()}\n";
        echo "List:\n";
        /** @var GetOpenOrdersResponseItem $order */
        foreach ($openOrderInfo->getOpenOrders() as $order) {
            echo "      -----\n";
            echo "      Symbol: {$order->getSymbol()}\n";
            echo "      Order ID: {$order->getOrderId()}\n";
            echo "      Order Link ID {$order->getOrderLinkId()}\n";
            echo "      Order Side: {$order->getSide()}\n";
            echo "      Order Type {$order->getOrderType()}\n";
            echo "      Order Price: {$order->getPrice()}\n";
            echo "      Order Quantity: {$order->getQty()}\n";
            echo "      Time in force: {$order->getTimeInForce()}\n";
            echo "      Order Status: {$order->getOrderStatus()}\n";
            echo "      Last Price On Created: {$order->getLastPriceOnCreated()}\n";
            echo "      Create Time: {$order->getCreatedTime()->format('Y-m-d H:i:s')}\n";
            echo "      Update Time {$order->getUpdatedTime()->format('Y-m-d H:i:s')}\n";
            echo "      Cancel Type: {$order->getCancelType()}\n";
            echo "      Stop Order Type: {$order->getStopOrderType()}\n";
            echo "      Trigger Direction: {$order->getTriggerDirection()}\n";
            echo "      Trigger By {$order->getTriggerBy()}\n";
            echo "      Trigger Price: {$order->getTriggerPrice()}\n";
            echo "      Cumulative Execution Value: {$order->getCumExecValue()}\n";
            echo "      Cumulative Execution Fee: {$order->getCumExecFee()}\n";
            echo "      Cumulative Execution Quantity: {$order->getCumExecQty()}\n";
            echo "      Leaves Value: {$order->getLeavesValue()}\n";
            echo "      Leaves Quantity: {$order->getLeavesQty()}\n";
            echo "      Take Profit Price: {$order->getTakeProfit()}\n";
            echo "      Stop Loss Price: {$order->getStopLoss()} {}\n";
            echo "      TP/SL Mode: {$order->getTpslMode()}\n";
            echo "      Take Profit Limit Price: {$order->getTpLimitPrice()}\n";
            echo "      Stop Loss Limit Price: {$order->getSlLimitPrice()}\n";
            echo "      Take Profit Trigger By: {$order->getTpTriggerBy()}\n";
            echo "      Stop Loss Trigger By: {$order->getSlTriggerBy()}\n";
            echo "      Reduce Only: {$order->isReduceOnly()}\n";
        }


        $this->assertTrue(true);
    }
}