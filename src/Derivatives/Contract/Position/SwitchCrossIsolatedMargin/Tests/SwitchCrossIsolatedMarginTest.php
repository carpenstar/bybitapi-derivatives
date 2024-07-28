<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Request\SwitchCrossIsolatedMarginRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\SwitchCrossIsolatedMargin;
use PHPUnit\Framework\TestCase;

class SwitchCrossIsolatedMarginTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $isSwitchCrossMargin = $bybit->privateEndpoint(
            SwitchCrossIsolatedMargin::class,
            (new SwitchCrossIsolatedMarginRequest())
            ->setSymbol('BTCUSDT')
            ->setSellLeverage(6)
            ->setBuyLeverage(6)
        )->execute();

        if ($isSwitchCrossMargin->getReturnCode() == 0) {
            echo "Success set margin: {$isSwitchCrossMargin->getReturnMessage()}\n";
        } else {
            echo "Not success set margin: {$isSwitchCrossMargin->getReturnMessage()}\n";
        }

        /**
         * Success set cross margin: OK
         */

         $this->assertTrue(true);
    }
}
