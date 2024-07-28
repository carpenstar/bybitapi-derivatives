<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Enums\EnumOrderType;
use Carpenstar\ByBitAPI\Core\Enums\EnumSide;
use Carpenstar\ByBitAPI\Core\Interfaces\IResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Request\PlaceOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Response\PlaceOrderResponse;
use PHPUnit\Framework\TestCase;

class PlaceOrderTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        echo "\n //// --- //// \n";
        
        $bybitApi = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        /** @var IResponseInterface $response */
        $response = $bybitApi->privateEndpoint(PlaceOrder::class, 
            (new PlaceOrderRequest())->setSymbol('BTCUSDT')->setOrderType(EnumOrderType::LIMIT)->setSide(EnumSide::BUY)->setQty('0.01')->setPrice(68100)
        )->execute();

        if ($response->getReturnCode() == 0) {
            echo "CODE: {$response->getReturnCode()} \n";
            echo "MESSAGE: {$response->getReturnMessage()} \n";    

            /** @var PlaceOrderResponse $orderInfo */
            $orderInfo = $response->getResult();
            echo "Order ID: {$orderInfo->getOrderId()}\n";
            echo "Order Link ID: {$orderInfo->getOrderLinkId()}\n";

        /**
         * Return code: 0
         * Return message: OK
         * Order ID: bac5bf12-edf6-433b-8ce4-d4d14de281cd
         * Order Link ID:
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
