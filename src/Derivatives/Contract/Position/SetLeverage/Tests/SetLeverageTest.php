<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Request\SetLeverageRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\SetLeverage;
use PHPUnit\Framework\TestCase;

class SetLeverageTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $isSetAutoAddMargin = $bybit->privateEndpoint(
            SetLeverage::class,
            (new SetLeverageRequest())
            ->setSymbol('BTCUSDT')
            ->setSellLeverage(5)
            ->setBuyLeverage(5)
        )->execute();

        if ($isSetAutoAddMargin->getReturnCode() == 0) {
            echo "Success set leverage: {$isSetAutoAddMargin->getReturnMessage()}\n";
        } else {
            echo "Not success set leverage: {$isSetAutoAddMargin->getReturnMessage()}\n";
        }

        /**
         * Success set leverage: OK
         * ---- OR
         * Not success set leverage: leverage not modified
         */
    }
}
