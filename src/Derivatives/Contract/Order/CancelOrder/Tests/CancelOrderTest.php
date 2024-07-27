<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\CancelOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Request\CancelOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Response\CancelOrderResponse;
use PHPUnit\Framework\TestCase;

class CancelOrderTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        $bybitApi = (new BybitAPI())
            ->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $cancelOrderResponse = $bybitApi->privateEndpoint(
            CancelOrder::class,
            (new CancelOrderRequest())->setSymbol('BTCUSDT')->setOrderId('78b869b7-f682-41fe-9edc-dc2dfaaf8d79')
        )->execute();

        echo "Return code: {$cancelOrderResponse->getReturnCode()} \n";
        echo "Return message: {$cancelOrderResponse->getReturnMessage()} \n";

        /** @var CancelOrderResponse $cancelOrderInfo */
        $cancelOrderInfo = $cancelOrderResponse->getResult();

        echo "Order ID: {$cancelOrderInfo->getOrderId()} \n";
        echo "Order Link ID: {$cancelOrderInfo->getOrderLinkId()} \n";

        $this->assertTrue(true);
    }
}
