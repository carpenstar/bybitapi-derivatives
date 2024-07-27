<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\CancelAllOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseItemInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Request\CancelAllOrderRequest;
use PHPUnit\Framework\TestCase;

class CancelAllOrderTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $response = $bybit->privateEndpoint(CancelAllOrder::class, (new CancelAllOrderRequest())->setSymbol('BTCUSDT'))->execute();

        echo "Return code: {$response->getReturnCode()} \n";
        echo "Return message: {$response->getReturnMessage()} \n";

        /** @var ICancelAllOrderResponseInterface $cancelOrdersResponse */
        $cancelOrdersResponse = $response->getResult();

        /** @var ICancelAllOrderResponseItemInterface $order */
        foreach ($cancelOrdersResponse->getCancelOrdersList() as $order) {
            echo "--- \n";
            echo "Order ID: {$order->getOrderId()} \n";
            echo "Order Link ID: {$order->getOrderLinkId()} \n";
        }

        $this->assertTrue(true);
    }
}
