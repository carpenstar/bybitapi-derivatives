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
        echo "\n //// --- //// \n";
        
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $response = $bybit->privateEndpoint(CancelAllOrder::class, (new CancelAllOrderRequest())->setSymbol('BTCUSDT'))->execute();

        if ($response->getReturnCode() == 0) {

            echo "CODE: {$response->getReturnCode()} \n";
            echo "MESSAGE: {$response->getReturnMessage()} \n";

            /** @var ICancelAllOrderResponseInterface $cancelOrdersResponse */
            $cancelOrdersResponse = $response->getResult();

            /** @var ICancelAllOrderResponseItemInterface $order */
            foreach ($cancelOrdersResponse->getCancelOrdersList() as $order) {
                echo "--- \n";
                echo "Order ID: {$order->getOrderId()} \n";
                echo "Order Link ID: {$order->getOrderLinkId()} \n";
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
