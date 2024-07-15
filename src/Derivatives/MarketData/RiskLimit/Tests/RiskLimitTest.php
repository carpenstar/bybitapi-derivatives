<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit;
use PHPUnit\Framework\TestCase;

class RiskLimitTest extends TestCase
{
    public function testRiskLimitEndpoint()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $endpointResponse = $bybit->publicEndpoint(RiskLimit::class, (new RiskLimitsRequest())
            ->setSymbol('BTCUSDT')
        )->execute();

        echo "Return code: {$endpointResponse->getReturnCode()}\n";
        echo "Return message: {$endpointResponse->getReturnMessage()}\n";

        /** @var RiskLimitsResponse $riskLimit */
        $riskLimit = $endpointResponse->getResult();
        foreach ($riskLimit->getRiskLimitList() as $risk) {
            echo "--- \n";
            echo "ID: {$risk->getId()}\n";
            echo "Symbol: {$risk->getSymbol()}\n";
            echo "Limit: {$risk->getLimit()}\n";
            echo "Maintain Margin: {$risk->getMaintainMargin()}\n";
            echo "Initial Margin: {$risk->getInitialMargin()}\n";
            echo "Is Lower Risk: {$risk->getIsLowerRisk()}\n";
            echo "Maximal Leverage: {$risk->getMaxLeverage()}\n";
        }

        $this->assertTrue(true);
    }
}