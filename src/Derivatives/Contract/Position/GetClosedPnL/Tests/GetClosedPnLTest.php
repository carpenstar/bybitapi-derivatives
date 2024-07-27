<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\GetClosedPnL;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Request\GetClosedPnLRequest;
use PHPUnit\Framework\TestCase;

class GetClosedPnLTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $pnlEndpointResponse = $bybit->privateEndpoint(
            GetClosedPnL::class,
            (new GetClosedPnLRequest())
            ->setSymbol('BTCUSDT')
            ->setLimit(2)
        )->execute();

        echo "Return code: {$pnlEndpointResponse->getReturnCode()} \n";
        echo "Return message: {$pnlEndpointResponse->getReturnMessage()} \n";

        /** @var IGetClosedPnLResponseInterface $pnlInfoResponse */
        $pnlInfoResponse = $pnlEndpointResponse->getResult();
        echo "Next page cursor: {$pnlInfoResponse->getNextPageCursor()}\n";
        echo "----\n";
        foreach ($pnlInfoResponse->getClosedPnlList() as $pnl) {
            echo "----\n";
            echo "Symbol: {$pnl->getSymbol()}\n";
            echo "Order ID: {$pnl->getOrderId()}\n";
            echo "Side: {$pnl->getSide()}\n";
            echo "Quantity: {$pnl->getQty()}\n";
            echo "Leverage: {$pnl->getLeverage()}\n";
            echo "Order Price: {$pnl->getOrderPrice()}\n";
            echo "Order Type: {$pnl->getOrderType()}\n";
            echo "Executed Type: {$pnl->getExecType()}\n";
            echo "Closed Size: {$pnl->getClosedSize()}\n";
            echo "Cumulative Entry Value: {$pnl->getCumEntryValue()}\n";
            echo "Average Entry Price: {$pnl->getAvgEntryPrice()}\n";
            echo "Cumulative Exit Value {$pnl->getCumExitValue()}\n";
            echo "Average Exit Price: {$pnl->getAvgExitPrice()}\n";
            echo "Closed PnL: {$pnl->getClosedPnl()}\n";
            echo "Filled Count: {$pnl->getFillCount()}\n";
            echo "Created At: {$pnl->getCreatedAt()->format('Y-m-d H:i:s')}\n";
            echo "Created Time: {$pnl->getCreatedTime()->format('Y-m-d H:i:s')}\n";
            echo "Updated Time: {$pnl->getUpdatedTime()->format('Y-m-d H:i:s')}\n";
        }

        $this->assertTrue(true);
    }
}
