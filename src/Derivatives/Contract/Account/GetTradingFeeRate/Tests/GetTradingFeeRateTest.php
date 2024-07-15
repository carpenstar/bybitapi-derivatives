<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponseItem;
use PHPUnit\Framework\TestCase;

class GetTradingFeeRateTest extends TestCase
{
    public function testGetTradingFeeRateEndpoint()
    {
        $bybit = (new BybitAPI())
            ->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $feeRateData = $bybit->privateEndpoint(GetTradingFeeRate::class, (new GetTradingFeeRateRequest()))->execute();

        echo "Return code: {$feeRateData->getReturnCode()} \n";
        echo "Return message: {$feeRateData->getReturnMessage()} \n";

        /** @var GetTradingFeeRateResponseItem $feeRate */
        foreach (array_slice($feeRateData->getResult()->getFeeRates(), 0, 3) as $feeRate) {
            echo "---\n";
            echo "Symbol: {$feeRate->getSymbol()} \n";
            echo "Taker Fee Rate: {$feeRate->getTakerFeeRate()} \n";
            echo "Maker Fee Rate: {$feeRate->getMakerFeeRate()} \n";
        }

        $this->assertTrue(true);
    }
}