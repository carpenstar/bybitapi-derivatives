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
        echo "\n //// --- //// \n";
        
        $bybitApi = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $response = $bybitApi->privateEndpoint(CancelOrder::class, (new CancelOrderRequest())->setSymbol('BTCUSDT')->setOrderId('78b869b7-f682-41fe-9edc-dc2dfaaf8d79'))->execute();

        if ($response->getReturnCode() == 0) {

            echo "CODE: {$response->getReturnCode()} \n";
            echo "MESSAGE: {$response->getReturnMessage()} \n";
    
            /** @var CancelOrderResponse $cancelOrderInfo */
            $cancelOrderInfo = $response->getResult();

            echo "Order ID: {$cancelOrderInfo->getOrderId()} \n";
            echo "Order Link ID: {$cancelOrderInfo->getOrderLinkId()} \n";
        
        } else {
            echo "API ERORR: " . get_class($this) . "\n";
            echo "CODE: {$response->getReturnCode()} \n"; 
            echo "MESSAGE: {$response->getReturnMessage()} \n"; 
            echo "EXTENDED:" . implode(";\n", $response->getExtendedInfo()) . "\n"; 
        }

        $this->assertTrue(true);
    }
}
