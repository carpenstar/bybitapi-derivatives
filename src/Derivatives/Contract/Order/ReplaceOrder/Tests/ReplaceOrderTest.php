<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Interfaces\IResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\ReplaceOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Response\ReplaceOrderResponse;
use PHPUnit\Framework\TestCase;

class ReplaceOrderTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        echo "\n //// --- //// \n";
        
        $bybitApi = (new BybitAPI())
            ->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        /** @var IResponseInterface $response */
        $response = $bybitApi->privateEndpoint(
            ReplaceOrder::class,
            (new ReplaceOrderRequest())
                ->setSymbol('BTCUSDT')
                ->setOrderId('4f279264-6d38-46c1-8216-7e5a2f110c11')
                ->setPrice(68100)
        )->execute();

        if ($response->getReturnCode() == 0) {

            echo "CODE: {$response->getReturnCode()} \n";
            echo "MESSAGE: {$response->getReturnMessage()} \n";

            /** @var ReplaceOrderResponse $orderInfo */
            $orderInfo = $response->getResult();
            echo "Order ID: {$orderInfo->getOrderId()}\n";
            echo "Order Link ID: {$orderInfo->getOrderLinkId()}\n";
        } else {
            echo "API ERORR: " . get_class($this) . "\n";
            echo "CODE: {$response->getReturnCode()} \n"; 
            echo "MESSAGE: {$response->getReturnMessage()} \n"; 
            echo "EXTENDED:" . implode(";\n", $response->getExtendedInfo()) . "\n"; 
        }

        $this->assertTrue(true);
    }
}
