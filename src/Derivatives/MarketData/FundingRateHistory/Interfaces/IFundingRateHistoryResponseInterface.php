<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces;

interface IFundingRateHistoryResponseInterface
{
    /**
     * @return IFundingRateHistoryResponseItemInterface[]
     */
    public function getFundingRates(): array;
}
