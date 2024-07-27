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
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $isSetAutoAddMargin = $bybit->privateEndpoint(
            SetAutoAddMargin::class,
            (new SetAutoAddMarginRequest())
            ->setSymbol('BTCUSDT')
            ->setSide(EnumSide::BUY)
            ->setPositionIdx(0)
            ->setAutoAddMargin(1)
        )->execute();

        if ($isSetAutoAddMargin->getReturnCode() == 0) {
            echo "Success auto add margin for position: {$isSetAutoAddMargin->getReturnMessage()}\n";
        } else {
            echo "Not success response: {$isSetAutoAddMargin->getReturnMessage()}\n";
        }

        /**
         * Success auto add margin for position: OK
         */

    }
}
