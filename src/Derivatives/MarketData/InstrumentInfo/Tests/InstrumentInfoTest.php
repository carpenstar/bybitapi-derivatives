<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\InstrumentInfo;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoResponseItemInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Request\InstrumentInfoRequest;
use PHPUnit\Framework\TestCase;

class InstrumentInfoTest extends TestCase
{
    public function testInstrumentInfoResponse()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

        $instrumentInfoResponse = $bybit->publicEndpoint(
            InstrumentInfo::class,
            (new InstrumentInfoRequest())
            ->setSymbol('BTCUSDT')
        )->execute();

        echo "Return code: {$instrumentInfoResponse->getReturnCode()}\n";
        echo "Return message: {$instrumentInfoResponse->getReturnMessage()}\n";

        /** @var IInstrumentInfoResponseItemInterface $instrumentInfo */
        $instrumentInfo = $instrumentInfoResponse->getResult()->getInstrumentInfoList();

        echo "Next Page Cursor: {$instrumentInfo->getNextPageCursor()} \n";
        echo "Symbol: {$instrumentInfo->getSymbol()}\n";
        echo "Contract Type: {$instrumentInfo->getContractType()}\n";
        echo "Status: {$instrumentInfo->getStatus()}\n";
        echo "Base Coin: {$instrumentInfo->getBaseCoin()}\n";
        echo "Settle Coin: {$instrumentInfo->getSettleCoin()} \n";
        echo "Quote Coin: {$instrumentInfo->getQuoteCoin()}\n";
        echo "Launch Time: {$instrumentInfo->getLaunchTime()->format('Y-m-d H:i:s')}\n";
        echo "Delivery Time: {$instrumentInfo->getDeliveryTime()->format('Y-m-d H:i:s')} {}\n";
        echo "Delivery Fee Rate: {$instrumentInfo->getDeliveryFeeRate()} {}\n";
        echo "Price Scale: {$instrumentInfo->getPriceScale()}\n";
        echo "Unified Margin Trade: {$instrumentInfo->getUnifiedMarginTrade()}\n";
        echo "Funding Interval: {$instrumentInfo->getFundingInterval()}\n";
        echo "Leverage Filter: \n";
        foreach ($instrumentInfo->getLeverageFilter()->all() as $filterItem) {
            echo "  - Minimal Leverage: {$filterItem->getMinLeverage()} \n";
            echo "  - Maximal Leverage: {$filterItem->getMaxLeverage()} \n";
            echo "  - Leverage Step: {$filterItem->getLeverageStep()} \n";
        }
        echo "Price Filter: \n";
        foreach ($instrumentInfo->getPriceFilter()->all() as $priceFilter) {
            echo "  - Minimal Price: {$priceFilter->getMinPrice()} \n";
            echo "  - Maximal Price: {$priceFilter->getMaxPrice()} \n";
            echo "  - Tick Size: {$priceFilter->getTickSize()} \n";
        }
        echo "Lot Size Filter: \n";
        foreach ($instrumentInfo->getLotSizeFilter()->all() as $lotSizeFilter) {
            echo "  - Maximal Order Quantity: {$lotSizeFilter->getMaxOrderQty()} \n";
            echo "  - Minimal Order Quantity: {$lotSizeFilter->getMinOrderQty()} \n";
            echo "  - Quantity Step: {$lotSizeFilter->getQtyStep()} \n";
        }

        $this->assertTrue(true);
    }
}
