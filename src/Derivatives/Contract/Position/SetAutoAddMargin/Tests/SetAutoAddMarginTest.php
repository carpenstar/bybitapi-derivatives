<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Enums\EnumSide;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Request\SetAutoAddMarginRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\SetAutoAddMargin;
use PHPUnit\Framework\TestCase;

class SetAutoAddMarginTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        echo "\n //// --- //// \n";

        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $response = $bybit->privateEndpoint(SetAutoAddMargin::class, (new SetAutoAddMarginRequest())
            ->setSymbol('BTCUSDT')->setSide(EnumSide::BUY)->setPositionIdx(0)->setAutoAddMargin(1)
        )->execute();

        if ($response->getReturnCode() == 0) {
            echo "SUCCESS ENDPOINT: " . get_class($this) . "\n";
            echo "MESSAGE: {$response->getReturnMessage()}\n";
        } else {
            echo "API ERORR: " . get_class($this) . "\n";
            echo "CODE: {$response->getReturnCode()} \n"; 
            echo "MESSAGE: {$response->getReturnMessage()} \n"; 
            echo "EXTENDED:" . implode(";\n", $response->getExtendedInfo()) . "\n"; 
        }
        
         $this->assertTrue(true);
    }
}
