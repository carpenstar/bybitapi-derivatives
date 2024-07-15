<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Tests;


use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Request\SwitchPositionModeRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\SwitchPositionMode;
use PHPUnit\Framework\TestCase;

class SwitchPositionModeTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $isSwitchCrossMargin = $bybit->privateEndpoint(SwitchPositionMode::class, (new SwitchPositionModeRequest())
            ->setSymbol('BTCUSDT')
            ->setMode(3)
        )->execute();

        if ($isSwitchCrossMargin->getReturnCode() == 0) {
            echo "Success set position mode: {$isSwitchCrossMargin->getReturnMessage()}\n";
        } else {
            echo "Failed set position mode: {$isSwitchCrossMargin->getReturnMessage()}\n";
        }

        /**
         * Success set position mode: OK
         * ----- OR
         * Failed set position mode: symbol has order, can not switch mode
         */
    }
}