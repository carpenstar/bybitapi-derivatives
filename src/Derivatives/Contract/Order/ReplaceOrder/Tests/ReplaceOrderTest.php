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
        $bybitApi = (new BybitAPI())
            ->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        /** @var IResponseInterface $endpointResponse */
        $endpointResponse = $bybitApi->privateEndpoint(ReplaceOrder::class,
            (new ReplaceOrderRequest())
                ->setSymbol('BTCUSDT')
                ->setOrderId('4f279264-6d38-46c1-8216-7e5a2f110c11')
                ->setPrice(68100)
        )->execute();

        echo "Return code: {$endpointResponse->getReturnCode()} \n";
        echo "Return message: {$endpointResponse->getReturnMessage()} \n";

        /** @var ReplaceOrderResponse $orderInfo */
        $orderInfo = $endpointResponse->getResult();
        echo "Order ID: {$orderInfo->getOrderId()}\n";
        echo "Order Link ID: {$orderInfo->getOrderLinkId()}\n";

        $this->assertTrue(true);
    }
}